<?php

namespace frontend\controllers;

use common\models\Aggregate;
use common\models\Water;

class Day
{
    public function getWater($power, $pressure, $one, $two) : float {
        return $power == 0 ? 0 : ($power / $one / $two / $pressure / 9.81);
    }

    public function getPressure($id)
    {
        $water = Water::find()->where(['id_organization' => $id])->orderBy(['date' => SORT_DESC])->one();
        if ($water) {
            $upBef = $water ? $water['up_bef'] : 0;
            $downBef = $water ? $water['down_bef'] : 0;
            return $upBef - $downBef;
        } else {
            return 0;
        }

    }

    public function getHour($array)
    {
        setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");
        $date = date("Ymd");
        $currentHour = (int)date('H');

        foreach ($array as $idOrganization) {
            // Запрос к Aggregate для получения данных авторизации
            $aggregate = Aggregate::find()->where(['id_organization' => $idOrganization])->all();

            if ($aggregate === null) {
                continue; // Пропускаем организацию, если нет данных для авторизации
            }

//            $pressure = $this->getPressure($idOrganization);
            foreach ($aggregate as $agg) {
                $chanel = $agg->chanel;
                // Формируем URL для запроса
                $url = "http://user:{$agg->password}@192.168.40.215:{$agg->port}/crq?req=archive&type=b&n1={$chanel}&n2={$chanel}&t1={$date}000000w&t2={$date}233000w&interval=main";

                $response = $this->executeCurlRequest($url);

                // Разбираем ответ
                $result = explode(",", $response);

                // Загружаем существующие записи за текущий день
                $existingRecords = \common\models\Power::find()
                    ->where(['date' => $date])
                    ->andWhere(['id_organization' => $idOrganization])
                    ->andWhere(['id_aggregate' => $agg->id_aggregate])
                    ->indexBy('time') // Индексируем по времени для быстрого поиска
                    ->all();


                // Обрабатываем данные по часам
                $k = 5;
                $j = 8;
                $g = 6; $d = 9;
                for ($hour = 1; $hour <= $currentHour; $hour++) {
                    // Проверяем, существует ли запись для текущего часа
                    if (isset($existingRecords[$hour])) {
                        continue; // Пропускаем, если запись уже существует
                    }

                    // Проверяем наличие данных в результате
                    if (!isset($result[$k]) || !isset($result[$j])) {
                        continue;
                    }

//                    $first = substr($result[$g], 0, 1);
                    // Вычисляем мощность
                    $power = (float)$result[$k] + (float)$result[$j];
                    if ($power == 0) {
                        continue;
                    }
                    $pressure = $this->getPressure($idOrganization);
                    // Создаем новую запись
                    $save = new \common\models\Power();
                    $save->id_organization = $idOrganization;
                    $save->id_aggregate = $agg->id_aggregate;
                    $save->date = $date;
                    $save->time = $hour;
                    $save->power = (int)number_format($power * $agg->coefficient, 0, ".", "");
                    $save->water = $pressure != 0 ? $this->getWater( $power * $agg->coefficient, $agg->one, $agg->two, $pressure) : 0;
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
        }
        return true; // Все организации успешно обработаны
    }

    public function getDay($array, $date)
    {
        setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");
        $currentHour = 24;
        foreach ($array as $idOrganization) {
            // Запрос к Aggregate для получения данных авторизации
            $aggregate = Aggregate::find()->where(['id_organization' => $idOrganization])->all();

            if ($aggregate === null) {
                continue; // Пропускаем организацию, если нет данных для авторизации
            }

            $pressure = $this->getPressure($idOrganization);
            foreach ($aggregate as $agg) {
                $chanel = $agg->chanel;
                // Формируем URL для запроса
                $url = "http://user:{$agg->password}@192.168.40.215:{$agg->port}/crq?req=archive&type=b&n1={$chanel}&n2={$chanel}&t1={$date}000000w&t2={$date}233000w&interval=main";

                $response = $this->executeCurlRequest($url);

                // Разбираем ответ
                $result = explode(",", $response);

                // Загружаем существующие записи за текущий день
                $existingRecords = \common\models\Power::find()
                    ->where(['date' => $date])
                    ->andWhere(['id_organization' => $idOrganization])
                    ->andWhere(['id_aggregate' => $agg->id_aggregate])
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
                    if ($power == 0) {
                        continue;
                    }
                    // Создаем новую запись
                    $save = new \common\models\Power();
                    $save->id_organization = $idOrganization;
                    $save->id_aggregate = $agg->id_aggregate;
                    $save->date = $date;
                    $save->time = $hour;
                    $save->power = (int)number_format($power * $agg->coefficient, 0, ".", "");
                    $save->water = $pressure != 0 ? $this->getWater( $power * $agg->coefficient, $pressure, $agg->one, $agg->two) : 0;
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
        }

        return true; // Все организации успешно обработаны
    }

    public function getYesterday($array)
    {
        setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");
        $date = date("Ymd", strtotime("yesterday"));
        $currentHour = 24;
        foreach ($array as $idOrganization) {
            // Запрос к Aggregate для получения данных авторизации
            $aggregate = Aggregate::find()->where(['id_organization' => $idOrganization])->all();

            if ($aggregate === null) {
                continue; // Пропускаем организацию, если нет данных для авторизации
            }

            $pressure = $this->getPressure($idOrganization);
            foreach ($aggregate as $agg) {
                $chanel = $agg->chanel;
                // Формируем URL для запроса
                $url = "http://user:{$agg->password}@192.168.40.215:{$agg->port}/crq?req=archive&type=b&n1={$chanel}&n2={$chanel}&t1={$date}000000w&t2={$date}233000w&interval=main";

                $response = $this->executeCurlRequest($url);

                // Разбираем ответ
                $result = explode(",", $response);

                // Загружаем существующие записи за текущий день
                $existingRecords = \common\models\Power::find()
                    ->where(['date' => $date])
                    ->andWhere(['id_organization' => $idOrganization])
                    ->andWhere(['id_aggregate' => $agg->id_aggregate])
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
                    if ($power == 0) {
                        continue;
                    }
                    // Создаем новую запись
                    $save = new \common\models\Power();
                    $save->id_organization = $idOrganization;
                    $save->id_aggregate = $agg->id_aggregate;
                    $save->date = $date;
                    $save->time = $hour;
                    $save->power = (int)number_format($power * $agg->coefficient, 0, ".", "");
                    $save->water = $pressure != 0 ? $this->getWater( $power * $agg->coefficient, $pressure, $agg->one, $agg->two) : 0;
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
        }

        return true; // Все организации успешно обработаны
    }

    /**
     * Выполняет cURL-запрос и возвращает результат.
     *
     * @param string $url URL для запроса
     * @return string|false Результат запроса или false в случае ошибки
     */
    private function executeCurlRequest($url)
    {
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

        return ($httpCode === 200 && !empty($response)) ? $response : false;
    }
}

