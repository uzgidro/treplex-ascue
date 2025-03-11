<?php

namespace frontend\controllers\api;

use yii\web\Controller;

class Ges9Controller extends Controller
{
    protected string $url = "http://user:sU_sb07s@192.168.40.215:10178/crq?req=current";

    private function fetchData()
    {
        $data = file_get_contents($this->url);
        return json_encode($data);
    }

    private function getValue($data, $value)
    {
        $position = strpos($data, $value);
        $substring = substr($data, $position);
        return explode(",", $substring);
    }

    public function actionData()
    {
        $CONST = 1000000;

        // Установка заголовков для JSON-ответа с указанием кодировки
        header('Content-Type: application/json; charset=utf-8');

        // Получение данных
        $data = $this->fetchData();

        // IDs и описания для вычислений
        $ids = ["B321", "B322", "B323", "B324"];
        $descriptions = [
            "Активный мощность прямая по сумме фаз",
            "Активный мощность обратная по сумме фаз",
            "Реактивный мощность прямая по сумме фаз",
            "Реактивный мощность обратная по сумме фаз"
        ];

        $result = [];

        foreach ($ids as $index => $id) {
            $valueData = $this->getValue($data, $id);
            $calculatedValue = $valueData[2] * 12000 / $CONST;
            $result[] = [
                "id" => $index + 1,
                "date" => substr($valueData[1], 0,20),
                "description" => $descriptions[$index],
                "value" => $calculatedValue
            ];
        }

        // Возвращаем JSON-ответ с кодировкой UTF-8
        return json_encode($result, JSON_UNESCAPED_UNICODE);
    }
}
