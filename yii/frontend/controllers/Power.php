<?php

namespace frontend\controllers;

use common\models\ApiLogin;
use common\models\Informations;
use common\models\Plan;
use common\models\Switchs;
use common\models\Transformer;
use common\models\Water;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use yii\helpers\Url;
use Yii;

class Power
{
    /**
     * Q вода
     * $power - актив G value
     * $pressure - напор
     * $one - value
     * $two - value
     */
    public function getWater($power, $pressure, $one, $two) : float {
        return $pressure == 0 || $power == 0 ? 0 : ($power / $one / $two / $pressure / 9.81) * 1000;
    }

    /**
     * КПД
     * $power - актив G value
     * $pressure - напор
     * $water - вода
     * $value - value
     */
    public function getKpd($power, $water, $pressure, $value)
    {
        return $pressure == 0 || $power == 0 ? 0 : number_format($power / ($water * $pressure * 9.81 * $value / 1000) * 100, 2);
    }

    /**
     * Напряжения по фазе A
     * $value - G value
     * $tn - ТН
     */
    public function getVoltages($value, $tn): float
    {
        return $value * 1.73 * $tn / 1000;
    }

    /**
     * @throws \yii\db\Exception
     */
    public function getPower($id_organization, $id_aggregate, $password, $port, $channel, $date, $coefficient, $pressure, $one, $two) {
        $model = new \common\models\Power();
        $transaction = Yii::$app->getDb()->beginTransaction();
        if (!$model->savePower($id_organization, $id_aggregate, $password, $port, $channel, $date, $coefficient, $pressure, $one, $two)) {
            $this->Alert('danger', 'times', 'Хатолик юз берди!!!');
            $transaction->rollBack();
            return false;
        } else {
            $this->Alert('success', 'check', 'Маълумот қўшилди!!!');
            $transaction->commit();
            return true;
        }
    }

    public function getHour()
    {
        setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");
        $organization = [24, 25, 26, 27];
        $date = date("Ymd");
        $currentHour = (int)date('H');

        foreach ($organization as $idOrganization) {
            // Запрос к ApiLogin для получения данных авторизации
            $login = ApiLogin::find()->where(['id_organization' => $idOrganization])->one();

            if ($login === null || empty($login->one)) {
                continue; // Пропускаем организацию, если нет данных для авторизации
            }

            // Формируем URL для запроса
            $url = "http://user:{$login->password}@192.168.40.215:{$login->port}/crq?req=archive&type=b&n1={$login->one}&n2={$login->one}&t1={$date}000000w&t2={$date}233000w&interval=main";

            // Выполняем cURL-запрос
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ]);
            $response = curl_exec($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            // Проверяем успешность запроса
            if ($httpCode !== 200 || empty($response)) {
                continue; // Пропускаем организацию, если запрос не удался
            }

            // Разбираем ответ
            $result = explode(",", $response);

//            if (count($result) < 10) { // Минимальное количество элементов для обработки
//                continue;
//            }

            // Загружаем существующие записи за текущий день
            $existingRecords = \common\models\Power::find()
                ->where(['date' => $date])
                ->andWhere(['id_organization' => $idOrganization])
                ->andWhere(['id_aggregate' => $login->one])
                ->indexBy('time') // Индексируем по времени для быстрого поиска
                ->all();


            // Обрабатываем данные по часам
            $k = 5;
            $j = 8;
            for ($hour = 1; $hour <= $currentHour; $hour++) {
                // Проверяем, существует ли запись для текущего часа
                if (isset($existingRecords[$hour])) {
                    continue; // Пропускаем, если запись уже существует
                }

                // Проверяем наличие данных в результате
                if (!isset($result[$k]) || !isset($result[$j])) {
                    continue;
                }

                // Вычисляем мощность
                $power = (float)$result[$k] + (float)$result[$j];
                $pressure = $this->getPressure($idOrganization);
                // Создаем новую запись
                $save = new \common\models\Power();
                $save->id_organization = $idOrganization;
                $save->id_aggregate = $login->one;
                $save->date = $date;
                $save->time = $hour;
                $save->power = (int)number_format($power * $login->coefficient, 0, ".", "");
                $save->water = $this->getWater($power, $pressure, $one, $two);
                $save->pressure = $pressure;
                $save->power_real = $power;
                // Сохраняем запись
                if (!$save->save()) {
                    return false; // Ошибка сохранения
                }

                // Переходим к следующему интервалу
                $k += 6;
                $j += 6;
            }
        }

        return true; // Все организации успешно обработаны
    }

    public function getPressure($id)
    {
        $water = Water::find()->where(['id_organization' => $id])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        return $upBef - $downBef;
    }

    /*Alert*/
    public function Alert($color, $icon, $text) {
        Yii::$app->session->setFlash('msg', "
            <div class='alert alert-outline-{$color} d-flex align-items-center' role='alert'>
              <span class='fas fa-{$icon}-circle text-{$color} fs-5 me-3'></span>
              <p class='mb-0 flex-1'>{$text}!</p>
              <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>"
        );
    }

}

