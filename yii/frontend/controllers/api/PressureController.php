<?php

namespace frontend\controllers\api;

use common\models\Water;
use frontend\controllers\Energy;
use yii\web\Controller;

class PressureController extends Controller
{
    protected string $url = "http://user:sU_sb07s@192.168.40.215:10178/crq?req=current";

    private function fetchData($url)
    {
        $curl = curl_init($url);

        // Настройка параметров cURL
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 3, // Таймаут в секундах
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        // Выполнение запроса
        $response = curl_exec($curl);

        // Проверка на ошибки
        if (curl_errno($curl)) {
            // Если произошла ошибка cURL
            $error_message = curl_error($curl);
            curl_close($curl);
            return json_encode([
                'error' => true,
                'message' => 'cURL error: ' . $error_message
            ]);
        }

        // Проверка HTTP-статуса ответа
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($http_code !== 200) {
            // Если статус не 200 (OK), возвращаем ошибку
            return json_encode([
                'error' => true,
                'message' => 'HTTP error: Status code ' . $http_code
            ]);
        }

        // Возвращаем успешный ответ
        return json_encode([
            'error' => false,
            'data' => $response
        ]);
    }

    private function getValue($data, $value)
    {
        $position = strpos($data, $value);
        $substring = substr($data, $position);
        return explode(",", $substring);
    }

    public function getPressure($id) {
        $water29 = Water::find()->where(['id_organization' => $id])->orderBy(['date' => SORT_DESC])->one();
        $upBef29 = $water29 ? $water29['up_bef'] : 0;
        $downBef29 = $water29 ? $water29['down_bef'] : 0;
        return $upBef29 - $downBef29;
    }
    public function actionData($id)
    {
        $date = date('d-m-Y H:00:00');
        $CONST = 1000000;
        $energy = new Energy();
        // Установка заголовков для JSON-ответа с указанием кодировки
        header('Content-Type: application/json; charset=utf-8');

        if ($id == 1) {
            $url = "http://user:usrAn_Ge@192.168.40.215:10042/crq?req=current";
            try {
                $data = $this->fetchData($url);
                $ges29Andijon269 = $this->getValue($data, "G269");
                $ges29Andijon309 = $this->getValue($data, "G309");
                $ges29Andijon349 = $this->getValue($data, "G349");
                $ges29Andijon389 = $this->getValue($data, "G389");
                $ges36Andijon509 = $this->getValue($data, "G509");
                $ges36Andijon589 = $this->getValue($data, "G589");

                $power29Andijon269 = $ges29Andijon269[2] * 60000 / $CONST;//active
                $water29Andijon269 = $energy->getWater($power29Andijon269, $this->getPressure(11), 0.97, 0.934);//water

                $power29Andijon309 = $ges29Andijon309[2] * 60000 / $CONST;//active
                $water29Andijon309 = $energy->getWater($power29Andijon309, $this->getPressure(11), 0.97, 0.934);//water

                $power29Andijon349 = $ges29Andijon349[2] * 60000 / $CONST;//active
                $water29Andijon349 = $energy->getWater($power29Andijon349, $this->getPressure(11), 0.97, 0.934);//water

                $power29Andijon389 = $ges29Andijon389[2] * 60000 / $CONST;//active
                $water29Andijon389 = $energy->getWater($power29Andijon389, $this->getPressure(11), 0.97, 0.934);//water

                $power36Andijon509 = $ges36Andijon509[2] * 42000 / $CONST;//active
                $water36Andijon509 = $energy->getWater($power36Andijon509, $this->getPressure(59), 0.98, 0.913);//water

                $power36Andijon589 = $ges36Andijon589[2] * 42000 / $CONST;//active
                $water36Andijon589 = $energy->getWater($power36Andijon589, $this->getPressure(59), 0.98, 0.913);//water

                $water = $water29Andijon269 + $water29Andijon309 + $water29Andijon349 + $water29Andijon389 + $water36Andijon509 + $water36Andijon589;
                $date = substr($ges29Andijon269[1], 0,20);
            } catch (\Exception $e) {
                $water = 0;
            }
            $organization = "Андижон ГЭС";
        } else if ($id == 2) {
            $url = "http://user:usr_Oh_ge@192.168.40.215:10034/crq?req=current";
            try {
                $data = $this->fetchData($url);
                $ges35Oxangaron53 = $this->getValue($data, "G53");
                $ges35Oxangaron293 = $this->getValue($data, "G293");
                $ges35Oxangaron453 = $this->getValue($data, "G453");
                $power35Oxangaron293 = $ges35Oxangaron293[2] * 21000 / $CONST;//active 21000
                $water35Oxangaron293 = $energy->getWater($power35Oxangaron293, $this->getPressure(17), 0.99, 0.904);//water
                $power35Oxangaron453 = $ges35Oxangaron453[2] * 4000 / $CONST;//active 4000
                $water35Oxangaron453 = $energy->getWater($power35Oxangaron453, $this->getPressure(17), 0.99, 0.904);//water
                $power35Oxangaron53 = $ges35Oxangaron53[2] * 21000 / $CONST;//active 21000
                $water35Oxangaron53 = $energy->getWater($power35Oxangaron53, $this->getPressure(17), 0.99, 0.904);//water
                $water = $water35Oxangaron293 + $water35Oxangaron453 + $water35Oxangaron53;
                $date = substr($ges35Oxangaron293[1], 0, 20);
            } catch (\Exception $e) {
                $water = 0;
            }
            $organization = "Оҳангарон ГЭС";
        } else if($id == 3) {
            $water = null;
            $organization = "Сардоба сув омбори";
        } else if($id == 4) {
            $url = "http://user:gh_us_91@192.168.40.215:10026/crq?req=current";
            try {
                $data = $this->fetchData($url);
                $ges37Hisorak10 = $this->getValue($data, "G10");
                $ges37Hisorak22 = $this->getValue($data, "G22");
                $power37Hisorak10 = $ges37Hisorak10[2] * 40000 / $CONST;//active
                $water37Hisorak10 = $energy->getWater($power37Hisorak10, $this->getPressure(77), 0.96, 0.9258);//water
                $power37Hisorak22 = $ges37Hisorak22[2] * 40000 / $CONST;//active
                $water37Hisorak22 = $energy->getWater($power37Hisorak22, $this->getPressure(77), 0.96, 0.9258);//water
                $water = $water37Hisorak10 + $water37Hisorak22;
                $date = substr($ges37Hisorak10[1], 0, 20);
            } catch (\Exception $e) {
                $water = 0;
            }
            $organization = "Ҳисорак ГЭС";
        }
        else {
            $date = null;
            $water = null;
            $organization = null;
        }

        $result = [
            "date" => $date,
            "description" => $organization,
            "value" => $water != 0 ? number_format($water, 1, ',', ' ') : 0
        ];

        // Возвращаем JSON-ответ с кодировкой UTF-8
        return json_encode($result, JSON_UNESCAPED_UNICODE);
    }
}
