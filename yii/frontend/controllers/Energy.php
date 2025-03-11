<?php

namespace frontend\controllers;

use common\models\Informations;
use common\models\Plan;
use common\models\Switchs;
use common\models\Transformer;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use yii\helpers\Url;
use Yii;

class Energy
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
    public function getDays($client, $ges, $name)
    {
        // Set locale and timezone
        setlocale(LC_ALL, "uz_UZ");
        date_default_timezone_set("Asia/Tashkent");

        // Determine the date range
        $today = date('Y-m-d');
        $tomorrow = date('Y-m-d', strtotime('+1 day'));

        // Cache key based on parameters
        $cacheKey = "getDays_{$ges}_{$today}_{$tomorrow}_{$name}";

        // Check if result is already cached
        $cachedResult = Yii::$app->cache->get($cacheKey);
        if ($cachedResult !== false) {
            return $cachedResult;
        }

        // Construct the API URL
        $url = "http://192.168.40.215:18080/api/v1/ges/{$ges}/?dt1={$today}&interval_id=day&dt2={$tomorrow}";

        try {
            // Create and send the request with a 5-second timeout
            $request = new Request('GET', $url);
            $res = $client->sendAsync($request, ['timeout' => 5])->wait();

            // Retrieve and decode the response body
            $body = $res->getBody();
            $array = json_decode($body, true);

            // Validate JSON decoding
            if (json_last_error() === JSON_ERROR_NONE) {
                // Cache the result for 10 minutes (600 seconds)
                Yii::$app->cache->set($cacheKey, $array, 3600);
                return $array;
            } else {
                // Handle invalid JSON
                return 0;
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle exceptions (e.g., timeout, network errors)
            return 0;
        }
    }
    public function getMonths($client, $ges, $name)
    {
        $month = date("m");
        $year = date("Y");

        // Determine the first and last days of the month
        $first = "{$year}-{$month}-01";
        $lastDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $last = "{$year}-{$month}-{$lastDay}";

        // Generate a unique cache key
        $cacheKey = "getMonths_{$ges}_{$first}_{$last}_{$name}";

        // Check if the result is cached
        $cachedResult = Yii::$app->cache->get($cacheKey);
        if ($cachedResult !== false) {
            return $cachedResult;
        }

        // Construct the API URL
        $url = "http://192.168.40.215:18080/api/v1/ges/{$ges}/?dt1={$first}&interval_id=month&dt2={$last}";

        try {
            // Create the GET request
            $request = new Request('GET', $url);

            // Send the request asynchronously with a timeout of 5 seconds
            $res = $client->sendAsync($request, ['timeout' => 5])->wait();

            // Retrieve and decode the response body
            $body = $res->getBody();
            $array = json_decode($body, true);

            // Validate JSON decoding
            if (json_last_error() === JSON_ERROR_NONE) {
                // Cache the result for 10 minutes (600 seconds)
                Yii::$app->cache->set($cacheKey, $array, 3600);
                return $array;
            } else {
                // Handle invalid JSON
                return 0;
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle exceptions (e.g., timeout, network errors)
            return 0;
        }
    }

    public function getYear($client, $ges, $name)
    {
        $year = date("Y");
        $month = date("m");

        // Determine the first and last days of the year
        $first = ($year == 2024) ? "{$year}-03-01" : "{$year}-01-01";
        $lastDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $last = "{$year}-{$month}-{$lastDay}";

        // Generate a unique cache key
        $cacheKey = "getYear_{$ges}_{$first}_{$last}_name{$name}";

        // Check if the result is cached
        $cachedResult = Yii::$app->cache->get($cacheKey);
        if ($cachedResult !== false) {
            return $cachedResult;
        }

        // Construct the request URL
        $url = "http://192.168.40.215:18080/api/v1/ges/{$ges}/?dt1={$first}&interval_id=year&dt2={$last}";

        try {
            // Send the request asynchronously with a timeout of 5 seconds
            $request = new Request('GET', $url);
            $res = $client->sendAsync($request, ['timeout' => 5])->wait();

            $body = $res->getBody();
            $array = json_decode($body, true);

            // Check if JSON decoding was successful
            if (json_last_error() === JSON_ERROR_NONE) {
                // Cache the result for 1 hour (3600 seconds)
                Yii::$app->cache->set($cacheKey, $array, 3600);
                return $array;
            } else {
                // Handle invalid JSON response
                return 0;
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle request exceptions (e.g., timeout or network errors)
            return 0;
        }
    }

    public function getExpected($monthSum, $todaySum, $yesterday)
    {
        $days = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));
        $today = date("d");
        $day = $days - $today;
        return ($monthSum - $todaySum) + ($yesterday * $day);
    }

    public function getYesterday($client, $ges, $name)
    {
        $yesterday = date("Y-m-d", strtotime("yesterday"));
        $today = date('Y-m-d');

        // Generate a unique cache key
        $cacheKey = "getYesterday_{$ges}_{$yesterday}_{$today}_{$name}";

        // Check if the result is cached
        $cachedResult = Yii::$app->cache->get($cacheKey);
        if ($cachedResult !== false) {
            return $cachedResult;
        }

        // Construct the request URL
        $url = "http://192.168.40.215:18080/api/v1/ges/{$ges}/?dt1={$yesterday}&interval_id=day&dt2={$today}";

        try {
            // Create the GET request
            $request = new Request('GET', $url);

            // Send the request asynchronously with a timeout of 5 seconds
            $res = $client->sendAsync($request, ['timeout' => 5])->wait();

            $body = $res->getBody();
            $array = json_decode($body, true);

            // Check if JSON decoding was successful
            if (json_last_error() === JSON_ERROR_NONE) {
                // Cache the result for 24 hours (86400 seconds)
                Yii::$app->cache->set($cacheKey, $array, 3600);
                return $array;
            } else {
                // Handle invalid JSON response
                return 0;
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle request exceptions (e.g., timeout or network errors)
            return 0;
        }
    }

    public function getUrl($id) {
        switch ($id) {
            case 24 : $url = "ges6"; break;//ГЭС-6 Чорбоғ ГЭС
            case 25 : $url = "ges27"; break;//ГЭС-27 Ходжикент ГЭС
            case 26 : $url = "ges28"; break;//ГЭС-28 Ғазалкент ГЭС
            case 27 : $url = "ispaysoy"; break;//Испайсой микроГЭС
            case 28 : $url = "ges8"; break;//ГЭС-8 Товоқсой ГЭС
            case 29 : $url = "ges7"; break;//ГЭС-7 Чирчиқ ГЭС
            case 30 : $url = "ges10"; break;//Камолот ГЭС
            case 31 : $url = "ges46"; break;//ГЭС-10 Оққовоқ ГЭС
            case 32 : $url = "veu"; break;//ВЭУ-750 кВт
            case 76 : $url = "ges3a"; break;//Қодирия ГЭС (ГЭС-3А)
            case 33 : $url = "ges15"; break;//ГЭС-15 Оққовоқ ГЭС-2
            case 34 : $url = "ges11"; break;//ГЭС-11 Қибрай ГЭС
            case 35 : $url = "ges3"; break;//ГЭС-3 Қодирия ГЭС
            case 36 : $url = "ges12"; break;//ГЭС-12 Салар ГЭС
            case 39 : $url = "ges4"; break;//ГЭС-4 Бўрижар ГЭС
            case 40 : $url = "ges9"; break;//ГЭС-9 Оқтепа ГЭС
            case 37 : $url = "ges1"; break;//ГЭС-1 Бўзсув ГЭС
            case 38 : $url = "ges21"; break;//ГЭС-21 Шайхонтохур ГЭС
            case 45 : $url = "ges22"; break;//ГЭС-22
            case 46 : $url = "ges41"; break;//ГЭС-41 Туябўғиз КГЭС
            case 41 : $url = "ges14"; break;//ГЭС-14
            case 42 : $url = "ges18"; break;//ГЭС-18
            case 43 : $url = "ges19"; break;//ГЭС-19
            case 44 : $url = "ges23"; break;//ГЭС-23
            case 7 : $url = "ges16"; break;//ГЭС-16 Фарход ГЭС
            case 48 : $url = "zomin"; break;//Зомин микроГЭС
            case 49 : $url = "ges2b"; break;//ГЭС-2Б Хишрав ГЭС
            case 50 : $url = "ges3b"; break;//ГЭС-3Б Иртишар ГЭС
            case 52 : $url = "ges1b"; break;//ГЭС-1Б Талигулян-1
            case 54 : $url = "ges5b"; break;//ГЭС-5Б Талигулян-3
            case 56 : $url = "urgut"; break;//Ургут ГЭС
            case 58 : $url = "shaudar1"; break;//Шаудар ГЭС-1
            case 57 : $url = "shaudar2"; break;//Шаудар-2 (ПК-135)
            case 11 : $url = "ges29"; break;//Андижон ГЭС (ГЭС-29)
            case 59 : $url = "ges36"; break;//Андижон-2 ГЭС (ГЭС-36)
            case 62 : $url = "xonobod"; break;//Хонобод микроГЭС
            case 60 : $url = "kudash"; break;//Кудаш ГЭС
            case 63 : $url = "ges5"; break;//ГЭС-5А
            case 64 : $url = "ges6"; break;//ГЭС-6А
            case 65 : $url = "jfk1"; break;//ГЭС-ЮФК-1
            case 66 : $url = "jfk2"; break;//ГЭС-ЮФК-2
            case 61 : $url = "ges3"; break;//Заврак МГЭС
            case 79 : $url = "ges30"; break;//ГЭС-30
            case 71 : $url = "ges34"; break;//ГЭС-34 Тўполанг ГЭС
            case 72 : $url = "ges43"; break;//ГЭС-43 (Зарчоб ГЭС-1)
            case 73 : $url = "ges44"; break;//ГЭС-44 (Зарчоб ГЭС-2)
            case 74 : $url = "ges1"; break;//Исфара-1 микроГЭС
            case 17 : $url = "ges35"; break;//ГЭС-35 Оҳангарон ГЭС
            case 75 : $url = "ertoshsoy"; break;//Эртошсой ГЭС
            case 77 : $url = "ges37"; break;//ГЭС-37
            case 67 : $url = "ges9"; break;//ГЭС-8А
            case 68 : $url = "ges9"; break;//ГЭС-9А
            case 69 : $url = "chortoq"; break;//Чортоқ микроГЭС
            case 70 : $url = "yangiariq"; break;//Янгиариқ микроГЭС
            case 78 : $url = "ges42"; break;//ГЭС-42
            default: $url= "#"; break;
        }
        return $url;
    }

    public function planMonth($id, $year, $month): string
    {
        $plan = Plan::find()->where(['id_organization' => $id])->andWhere(['id_year' => $year])->sum($month) ?? 0;
        return number_format($plan, 2, ',', ' ');
    }

    public function planYear($id, $year): string
    {
        $plan = Plan::find()
            ->where(['id_organization' => $id])
            ->andWhere(['id_year' => $year])
            ->select([
                'total' => new \yii\db\Expression('SUM(january + february + march + april + may + june + july + august + september + october + november + december)')
            ])
            ->scalar() ?? 0;
        return number_format($plan, 2, ',', ' ');
    }

    public function getInformation($id, $aggregate) {
        return Informations::findOne(['id_organization' => $id, 'aggregate' => $aggregate]) !== null ? Url::to(["site/information?id_organization={$id}&&aggregate={$aggregate}"]) : '#';
    }

    public function getSwitch($id, $switch) {
        return Switchs::findOne(['id_organization' => $id, 'id_switch' => $switch]) !== null ? Url::to(["site/switchs?id={$id}&&switch={$switch}"]) : '#';
    }

    public function getTransformer($id, $transformer)
    {
        $exists = Transformer::findOne(['id_organization' => $id, 'id_tansformer' => $transformer]) !== null;

        return $exists
            ? Url::to(['site/transformer', 'id' => $id, 'transformer' => $transformer])
            : '#';
    }

    public function getProduction($ges, $name)
    {
        $client = new Client();

        // Установка локали и часового пояса
        setlocale(LC_ALL, "uz_UZ");
        date_default_timezone_set("Asia/Tashkent");

        // Определение диапазона дат
        $today = date('Y-m-d');
        $cacheKey = "getProduction_{$ges}_{$today}_{$name}";

        // Проверка кэша
        if ($cachedResult = Yii::$app->cache->get($cacheKey)) {
            return $cachedResult;
        }

        // Определение диапазона для дату
        $month = date("m");
        $year = date("Y");
        $first = "{$year}-{$month}-01";
        $lastDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $last = "{$year}-{$month}-{$lastDay}";
        $yesterday = date("Y-m-d", strtotime("yesterday"));
        $tomorrow = date('Y-m-d', strtotime('+1 day'));

        // Получение данных за вчера
        $urlYesterday = "http://192.168.40.215:18080/api/v1/ges/{$ges}/?dt1={$yesterday}&interval_id=day&dt2={$today}";
        $resultYesterday = $this->fetchProductionData($client, $urlYesterday, 'yesterday');

        // Получение данных за сегодня
        $urlDay = "http://192.168.40.215:18080/api/v1/ges/{$ges}/?dt1={$today}&interval_id=day&dt2={$tomorrow}";
        $resultDay = $this->fetchProductionData($client, $urlDay, 'day');

        // Получение данных за месяц
        $urlMonth = "http://192.168.40.215:18080/api/v1/ges/{$ges}/?dt1={$first}&interval_id=month&dt2={$last}";
        $resultMonth = $this->fetchProductionData($client, $urlMonth, 'month');

        // Получение данных за год
        $urlYear = "http://192.168.40.215:18080/api/v1/ges/{$ges}/?dt1={$first}&interval_id=year&dt2={$last}";
        $resultYear = $this->fetchProductionData($client, $urlYear, 'year');

        // Объединение данных
        $result = array_merge($resultYesterday, $resultDay, $resultMonth, $resultYear);

        // Кэширование результата
        Yii::$app->cache->set($cacheKey, $result, 3600);

        return $result;
    }

    // Метод для запроса данных
    private function fetchProductionData($client, $url, $interval)
    {
        try {
            $response = $client->request('GET', $url, ['timeout' => 5]);
            $data = json_decode($response->getBody(), true);

            if (json_last_error() !== JSON_ERROR_NONE || empty($data['data'])) {
                return $this->defaultProductionData($interval);
            }

            return [
                $interval => [
                    'production' => $data['data'][0]['data']['Active']['Value'] ?? 0,
                    'reception' => $data['data'][1]['data']['Active']['Value'] ?? 0,
                    'ownNeeds' => $data['data'][2]['data']['Active']['Value'] ?? 0,
                    'recoil' => $data['data'][3]['data']['Active']['Value'] ?? 0,
                ]
            ];
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            Yii::error("Error fetching {$interval} production data: {$e->getMessage()}");
            return $this->defaultProductionData($interval);
        }
    }

    // Метод для значений по умолчанию
    private function defaultProductionData($interval)
    {
        return [
            $interval => [
                'production' => 0,
                'reception' => 0,
                'ownNeeds' => 0,
                'recoil' => 0,
            ]
        ];
    }

    public function dashboardYesterday($ges, $name): array
    {

        $yesterday = date("Y-m-d", strtotime("yesterday"));
        $cacheKey = "dashboardYesterday_{$ges}_" . $yesterday ."_{$name}";

        // Проверка кэша
        if ($cachedResult = Yii::$app->cache->get($cacheKey)) {
            return $cachedResult;
        }

        $client = new Client();
        $result = []; // Initialize the array to store URLs
        for ($i = 0; $i < 24; $i++) {
            // Ensure `$i` is a two-digit hour
            $hour = str_pad($i, 2, "0", STR_PAD_LEFT);

            $first = "{$yesterday}%20{$hour}:00:00";
            $nextHour = str_pad($i + 1, 2, "0", STR_PAD_LEFT);
            if ($i == 23) {
                $last = date('Y-m-d')."%2000:00:00";
            } else {
                $last = "{$yesterday}%20{$nextHour}:00:00";
            }
            // Construct the URL
            $url = "http://192.168.40.215:18080/api/v1/ges/{$ges}/?interval_id=hour&dt1={$first}&dt2={$last}";
            try {
                // Create the GET request
                $request = new Request('GET', $url);

                // Send the request asynchronously with a timeout of 5 seconds
                $res = $client->sendAsync($request, ['timeout' => 5])->wait();

                $body = $res->getBody();
                $array = json_decode($body, true);

                // Check if JSON decoding was successful
                if (json_last_error() === JSON_ERROR_NONE) {
                    $result[] = number_format($array['data'][0]['data']['Active']['Value'], 0, '.', '');
                } else {
                    // Handle invalid JSON response
                    $result[] = 0;
                }
            } catch (RequestException $e) {
                // Handle request exceptions (e.g., timeout or network errors)
                $result[] = 0;
            }

        }
        // Сохраняем результат в кеш на 1 день (86400 секунд)
        Yii::$app->cache->set($cacheKey, $result, 86400);
        return $result;
    }

    public function dashboardToday($ges, $name): array
    {
        setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");
        $today = date("Y-m-d");
        $hours = date("H");

        $cacheKey = "dashboardToday_{$ges}_" . $today."_".$hours."_{$name}";

        // Проверка кэша
        if ($cachedResult = Yii::$app->cache->get($cacheKey)) {
            return $cachedResult;
        }

        $client = new Client();
        $result = []; // Initialize the array to store URLs
        for ($i = 0; $i < (int)$hours; $i++) {
            // Ensure `$i` is a two-digit hour
            $hour = str_pad($i, 2, "0", STR_PAD_LEFT);
            $first = "{$today}%20{$hour}:00:00";
            $nextHour = str_pad($i + 1, 2, "0", STR_PAD_LEFT);
            $last = "{$today}%20{$nextHour}:00:00";

            // Construct the URL
            $url = "http://192.168.40.215:18080/api/v1/ges/{$ges}/?interval_id=hour&dt1={$first}&dt2={$last}";
            try {
                // Create the GET request
                $request = new Request('GET', $url);

                // Send the request asynchronously with a timeout of 5 seconds
                $res = $client->sendAsync($request, ['timeout' => 5])->wait();

                $body = $res->getBody();
                $array = json_decode($body, true);

                // Check if JSON decoding was successful
                if (json_last_error() === JSON_ERROR_NONE) {
                    $result[] = number_format($array['data'][0]['data']['Active']['Value'], 0, '.', '');
                } else {
                    // Handle invalid JSON response
                    $result[] = 0;
                }
            } catch (RequestException $e) {
                // Handle request exceptions (e.g., timeout or network errors)
                $result[] = 0;
            }

        }
        // Сохраняем результат в кеш на 1 день (86400 секунд)
        Yii::$app->cache->set($cacheKey, $result, 3600);
        return $result;
    }
}

