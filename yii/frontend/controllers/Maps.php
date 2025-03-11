<?php
namespace frontend\controllers;

use common\models\Organization;
use yii\helpers\Url;

class Maps
{
    public int $COUNT = 1000000;

    public function HoverTable($id, $name, $array): string
    {
        $sumDay = 0;
        $sumMonth = 0;

        // Получаем текущую дату и диапазон дат для текущего месяца
        $currentDate = date('Y-m-d');
        $startDateOfMonth = date('Y-m-01');
        $endDateOfMonth = date('Y-m-t');

        foreach ($array as $item) {

            // Предполагается, что $item — это значение id_organization
            $idOrganization = $item;

            // Сумма за текущий день
            $sumDay += \common\models\Power::find()
                ->asArray()
                ->where(['id_organization' => $idOrganization])
                ->andWhere(['date' => $currentDate])
                ->sum('power') ?? 0;

            // Сумма за текущий месяц
            $sumMonth += \common\models\Power::find()
                ->asArray()
                ->where(['id_organization' => $idOrganization])
                ->andWhere(['>=', 'date', $startDateOfMonth])
                ->andWhere(['<=', 'date', $endDateOfMonth])
                ->sum('power') ?? 0;
        }
        $sumDay = number_format($sumDay / 1000000, 2, ",", "");
        $sumMonth = number_format($sumMonth / 1000000, 2, ",", "");

        $urlImage = Url::to(['../asset/img/spot-illustrations/32.png']);
        return <<<end
<div id="{$id}" class="card" style="backdrop-filter: blur(5px);position: absolute;left:0;bottom:0;opacity: 0;transition: opacity 0.5s ease-in-out;">
    <div class="bg-holder d-block bg-card" style="background-image:url({$urlImage});background-position: top right;">
    </div>
    <!--/.bg-holder-->
    <div class="">
        <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-position: bottom right; background-size: auto;">
        </div>
        <!--/.bg-holder-->
    </div>
    <div class="d-light-none">
        <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-position: bottom right; background-size: auto;">
        </div>
        <!--/.bg-holder-->
    </div>
    <div class="card-body">
        <div class="border-bottom border-translucent">
            <p class="fs-8 fw-semibold text-body ms-1 text ps-2 text-white"> {$name}</p>
        </div>
        <table class="w-100 table-stats table-stats">
            <tbody>
            <tr>
                <td class="py-2">
                    <div class="d-inline-flex align-items-center">
                        <div class="d-flex bg-success-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 text-success-dark" style="width:16px; height:16px"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                        </div>
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">
                            Актив кувват
                        </p>
                    </div>
                </td>

                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-2">
                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports" id="active{$id}">0 МВт </p>
                </td>
            </tr>
            <tr>
                <td class="py-2">
                    <div class="d-flex align-items-center">
                        <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-info-dark" style="width:16px; height:16px">
                                <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                <polyline points="17 18 23 18 23 12"></polyline>
                            </svg>
                        </div>
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Гидроагрегатлар холати</p>
                    </div>
                </td>
                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-2">
                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports"><span id="all{$id}">0</span> / <span id="true{$id}" class="text-danger">0</span> / <span id="false{$id}" class="text-success">0</span> / <span id="error{$id}" class="text-warning">0</span></p>
                </td>
            </tr>
            <tr>
                <td class="py-2">
                    <div class="d-flex align-items-center">
                        <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-info-dark" style="width:16px; height:16px"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                            </div>
                        </div>
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Кунлик ишлаб чиқариш</p>
                    </div>
                </td>
                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-2">
                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">{$sumDay} млн кВт</p>
                </td>
            </tr>
            <tr>
                <td class="py-2">
                    <div class="d-flex align-items-center">
                        <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-info-dark" style="width:16px; height:16px"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                            </div>
                        </div>
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Ой бошидан</p>
                    </div>
                </td>
                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-2">
                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">{$sumMonth} млн кВт</p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
end;
    }
    /*Жами 30 кунлик ишлаю чиқариш Dashboard*/
    public function Republic()
    {
        // Установка временной зоны
        date_default_timezone_set("Asia/Tashkent");

        // Текущая дата минус 30 дней
        $startDate = date('Y-m-d', strtotime('-30 days'));
        $endDate = date('Y-m-d'); // Текущая дата

        // Выборка всех данных за последние 30 дней одним запросом
        $data = \common\models\Power::find()
            ->select(['date', 'SUM(power) as total_power'])
            ->where(['between', 'date', $startDate, $endDate]) // Фильтрация по диапазону дат
            ->groupBy('date') // Группировка по дате
            ->indexBy('date') // Индексация по дате для быстрого доступа
            ->asArray()
            ->all();

        // Инициализация результата
        $array = [];

        // Генерация массива с данными за каждый день
        for ($i = 0; $i < 30; $i++) {
            $currentDate = date('Y-m-d', strtotime($startDate . ' +' . $i . ' days'));
            $power = $data[$currentDate]['total_power'] ?? 0; // Если данных за день нет, используем 0
            $array[] = [
                "year" => $currentDate,
                "value" => (float)number_format((int)$power / 1000000, 2),
            ];
        }

        // Преобразование массива в JSON
        return json_encode($array);
    }
    /*ГЭСларни 30 кунлик ишлаю чиқариш Dashboard*/
    public function GesAggregate($organizations, $day)
    {
        // Установка временной зоны
        date_default_timezone_set("Asia/Tashkent");

        // Текущая дата минус 30 дней
        $startDate = date('Y-m-d', strtotime("-$day days"));
        $endDate = date('Y-m-d'); // Текущая дата

        // Выборка всех данных за последние 30 дней одним запросом
        $data = \common\models\Power::find()
            ->select(['date', 'SUM(power) as total_power'])
            ->where(['between', 'date', $startDate, $endDate]) // Фильтрация по диапазону дат
            ->andWhere(['id_organization' => $organizations]) // Используем оператор IN для id_organization
            ->groupBy('date') // Группировка по дате
            ->indexBy('date') // Индексация по дате для быстрого доступа
            ->asArray()
            ->all();

        // Инициализация результата
        $array = [];

        // Генерация массива с данными за каждый день
        for ($i = 0; $i < $day; $i++) {
            $currentDate = date('Y-m-d', strtotime($startDate . ' +' . $i . ' days'));
            $power = $data[$currentDate]['total_power'] ?? 0; // Если данных за день нет, используем 0
            $array[] = [
                "year" => $currentDate,
                "value" => (float)number_format((int)$power / 1000000, 2),
            ];
        }

        // Преобразование массива в JSON
        return json_encode($array);
    }

    public function Region()
    {
        $dashboard = new Dashboard();
        $organization = Organization::find()->where(['id_organization' => null])->all();
        $array = []; // $array ни бошлаб қўйиш

        foreach ($organization as $item) {
            $allQuwwat = 0;
            $yesterday = 0;
            $today = 0;

            $subOrganization = Organization::find()->where(['id_organization' => $item['id']])->all();

            foreach ($subOrganization as $result) {
                $allQuwwat += $result['quwwat'];
                $yesterday += $dashboard->YesterdayGes($result['id']);
                $today += $dashboard->TodayGes($result['id']);
            }

            $hour = date('H');
            $array[] = [
                "townName" => $item['name'],
                "power1" => (float)number_format($allQuwwat, 2, "."),
                "power2" => (float)number_format($yesterday / 24 / 1000, 2, "."),
                "power3" => (float)number_format($today / (int)$hour / 1000, 2, ".")
            ];
        }

        // Массивни JSONга ўгириш
        return json_encode($array);
    }

    public function Cascade()
    {
        $dashboard = new Dashboard();
        $organization = Organization::find()->where(['id_organization' => null])->all();
        $array = []; // $array ни бошлаб қўйиш

        foreach ($organization as $item) {
            $yesterday = 0;
            $today = 0;

            $subOrganization = Organization::find()->where(['id_organization' => $item['id']])->all();

            foreach ($subOrganization as $result) {
                $yesterday += $dashboard->YesterdayGes($result['id']);
                $today += $dashboard->TodayGes($result['id']);
            }

            if ($yesterday != 0 && $today != 0) {
                $array[] = [
                    "cascade" => $item['name'],
                    "yesterday" => (float)number_format($yesterday / 1000000, 2, "."),
                    "today" => (float)number_format($today / 1000000, 2, ".")
                ];
            }
        }

        // Массивни JSONга ўгириш
        return json_encode($array);
    }

    /*Жами ГЭСлар кечаги кун қувват Dashboard*/
    public function YesterdayHour()
    {
        // Установка локали и временной зоны
        setlocale(LC_ALL, "uz_UZ");
        date_default_timezone_set("Asia/Tashkent");

        // Получение даты вчерашнего дня один раз
        $yesterday = date("Y-m-d", strtotime("yesterday"));

        // Выборка всех данных за вчерашний день одним запросом
        $data = \common\models\Power::find()
            ->select(['time', 'SUM(power) as total_power'])
            ->where(['date' => $yesterday])
            ->groupBy('time')
            ->indexBy('time') // Индексация по времени для быстрого доступа
            ->asArray()
            ->all();

        // Инициализация результата
        $array = [];

        // Генерация массива с данными за каждый час
        for ($i = 1; $i <= 24; $i++) {
            $hour = sprintf("%02d:00", $i); // Форматирование времени (например, "01:00")
            $value = $data[$i]['total_power'] ?? 0; // Если данных за час нет, используем 0
            $array[] = [
                "hour" => $hour,
                "value" => (float)number_format($value / 1000, 2, "."),
            ];
        }

        // Преобразование массива в JSON
        return json_encode($array);
    }

    /*ГЭСларни кечаги кун қувват Dashboard*/
    public function GesYesterdayHour($organizations)
    {
        // Установка локали и временной зоны
        setlocale(LC_ALL, "uz_UZ");
        date_default_timezone_set("Asia/Tashkent");

        // Получение даты вчерашнего дня один раз
        $yesterday = date("Y-m-d", strtotime("yesterday"));

        // Выборка всех данных за вчерашний день одним запросом
        $data = \common\models\Power::find()
            ->select(['time', 'SUM(power) as total_power'])
            ->where(['date' => $yesterday])
            ->andWhere(['id_organization' => $organizations]) // Используем оператор IN для id_organization
            ->groupBy('time')
            ->indexBy('time') // Индексация по времени для быстрого доступа
            ->asArray()
            ->all();

        // Инициализация результата
        $array = [];

        // Генерация массива с данными за каждый час
        for ($i = 1; $i <= 24; $i++) {
            $hour = sprintf("%02d:00", $i); // Форматирование времени (например, "01:00")
            $value = $data[$i]['total_power'] ?? 0; // Если данных за час нет, используем 0
            $array[] = [
                "hour" => $hour,
                "value" => (float)number_format($value / 1000, 2, "."),
            ];
        }

        // Преобразование массива в JSON
        return json_encode($array);
    }

    public function YesterdayHourGes($array)
    {
        setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");

        foreach ($array as $item) {
            for ($i = 1; $i <= 24; $i++) {
                $result = \common\models\Power::find()
                    ->where(['date' => date("Y-m-d", strtotime("yesterday"))])
                    ->andWhere(['id_organization' => $item])
                    ->andWhere(['time' => $i])->sum('power') ?? 0;
                $array[] = [
                    "hour" => $i < 10 ? "0{$i}:00" : "{$i}:00",
                    "value" => (float)number_format($result / 1000, 2, "."),
                ];
            }
        }



        // Массивни JSONга ўгириш
        return json_encode($array);
    }
    /*Жами кечаги кун агрегатлар сони Dashboard*/
    public function YesterdayHourAgg()
    {
        // Установка локали и временной зоны
        setlocale(LC_ALL, "uz_UZ");
        date_default_timezone_set("Asia/Tashkent");

        // Получение даты вчерашнего дня один раз
        $yesterday = date("Y-m-d", strtotime("yesterday"));

        // Выборка всех данных за вчерашний день одним запросом
        $data = \common\models\Power::find()
            ->select(['time', 'id_aggregate', 'COUNT(*) as count'])
            ->where(['date' => $yesterday])
            ->andWhere(['>', 'power', 0])
            ->andWhere(['id_aggregate' => [1, 2, 3, 4]]) // Фильтрация по нужным агрегатам
            ->groupBy(['time', 'id_aggregate']) // Группировка по времени и агрегату
            ->asArray()
            ->all();

        // Преобразование данных в удобный формат для быстрого доступа
        $aggregatedData = [];
        foreach ($data as $row) {
            $hour = $row['time'];
            $aggregateId = $row['id_aggregate'];
            $count = $row['count'];

            if (!isset($aggregatedData[$hour])) {
                $aggregatedData[$hour] = [
                    'agg1' => 0,
                    'agg2' => 0,
                    'agg3' => 0,
                    'agg4' => 0,
                ];
            }

            // Заполнение данных для каждого агрегата
            $aggregatedData[$hour]["agg{$aggregateId}"] = $count;
        }

        // Инициализация результата
        $array = [];

        // Генерация массива с данными за каждый час
        for ($i = 1; $i <= 24; $i++) {
            $hour = sprintf("%02d:00", $i); // Форматирование времени (например, "01:00")
            $agg1 = $aggregatedData[$i]['agg1'] ?? 0;
            $agg2 = $aggregatedData[$i]['agg2'] ?? 0;
            $agg3 = $aggregatedData[$i]['agg3'] ?? 0;
            $agg4 = $aggregatedData[$i]['agg4'] ?? 0;

            $result = $agg1 + $agg2 + $agg3 + $agg4;
            $array[] = [
                "country" => $hour,
                "value" => $result + 20,
            ];
        }

        // Преобразование массива в JSON
        return json_encode($array);
    }
    /*ГЭСларни кечаги кун агрегатлар сони Dashboard*/
    public function GesYesterdayHourAgg($organizations)
    {
        // Установка локали и временной зоны
        setlocale(LC_ALL, "uz_UZ");
        date_default_timezone_set("Asia/Tashkent");

        // Получение даты вчерашнего дня один раз
        $yesterday = date("Y-m-d", strtotime("yesterday"));

        // Выборка всех данных за вчерашний день одним запросом
        $data = \common\models\Power::find()
            ->select(['time', 'id_aggregate', 'COUNT(*) as count'])
            ->where(['date' => $yesterday])
            ->andWhere(['id_organization' => $organizations]) // Используем оператор IN для id_organization
            ->andWhere(['>', 'power', 0])
            ->andWhere(['id_aggregate' => [1, 2, 3, 4]]) // Фильтрация по нужным агрегатам
            ->groupBy(['time', 'id_aggregate']) // Группировка по времени и агрегату
            ->asArray()
            ->all();

        // Преобразование данных в удобный формат для быстрого доступа
        $aggregatedData = [];
        foreach ($data as $row) {
            $hour = $row['time'];
            $aggregateId = $row['id_aggregate'];
            $count = $row['count'];

            if (!isset($aggregatedData[$hour])) {
                $aggregatedData[$hour] = [
                    'agg1' => 0,
                    'agg2' => 0,
                    'agg3' => 0,
                    'agg4' => 0,
                ];
            }

            // Заполнение данных для каждого агрегата
            $aggregatedData[$hour]["agg{$aggregateId}"] = $count;
        }

        // Инициализация результата
        $array = [];

        // Генерация массива с данными за каждый час
        for ($i = 1; $i <= 24; $i++) {
            $hour = sprintf("%02d:00", $i); // Форматирование времени (например, "01:00")
            $agg1 = $aggregatedData[$i]['agg1'] ?? 0;
            $agg2 = $aggregatedData[$i]['agg2'] ?? 0;
            $agg3 = $aggregatedData[$i]['agg3'] ?? 0;
            $agg4 = $aggregatedData[$i]['agg4'] ?? 0;

            $result = $agg1 + $agg2 + $agg3 + $agg4;
            $array[] = [
                "country" => $hour,
                "value" => $result,
            ];
        }

        // Преобразование массива в JSON
        return json_encode($array);
    }
    /*Кун давомида(млн кВт) ишлаб чиқариш*/
    public function GesDayPower($organizations): string
    {
        $currentDate = date('Y-m-d');      // Текущая дата
        $result = \common\models\Power::find()
                ->where(['date' => $currentDate])              // Фильтр по дате: только текущий день
                ->andWhere(['id_organization' => $organizations]) // Используем оператор IN для id_organization
                ->sum('power') ?? 0;
        return number_format($result / $this->COUNT, 2, ",", " ");
    }

    /*Кечаги кунлик ишлаб чиқариш (млн кВт)*/
    public function GesYesterdayPower($organizations): string
    {
        $yesterdayDate = date("Y-m-d", strtotime("yesterday")); // Дата вчерашнего дня
        $result = \common\models\Power::find()
                ->where(['date' => $yesterdayDate])                // Фильтр по дате: только вчерашний день
                ->andWhere(['id_organization' => $organizations])  // Используем оператор IN для id_organization
                ->sum('power') ?? 0;                              // Суммируем поле power, если результат null, возвращаем 0
        return number_format($result / $this->COUNT, 2, ",", " ");
    }

    /*Ой давомида ишлаб чиқариш (млн кВт)*/
    public function GesMonthPower($organizations): string
    {
        $currentDate = date('Y-m-d');      // Текущая дата
        $dateStartMonth = date('Y-m-01');      // Начало текущего месяца
        $dateEnd = $currentDate;                           // Конечная дата
        $result = \common\models\Power::find()
                ->where(['id_organization' => $organizations]) // Используем оператор IN
                ->andWhere(['>=', 'date', $dateStartMonth])        // Фильтр по дате: больше или равно началу месяца
                ->andWhere(['<=', 'date', $dateEnd])          // Фильтр по дате: меньше или равно конечной дате
                ->sum('power') ?? 0;                          // Суммируем поле power, если результат null, возвращаем 0
        return number_format($result / $this->COUNT, 2, ",", " ");
    }

    /*Йил давомида ишлаб чиқариш (млн кВт)*/
    public function GesYearPower($organizations): string
    {
        $currentDate = date('Y-m-d');      // Текущая дата
        $dateStartYear= date('Y-01-01');   // Начало текущего года
        $dateEnd = $currentDate;                  // Конечная дата
        $result = \common\models\Power::find()
                ->where(['id_organization' => $organizations]) // Используем оператор IN для id_organization
                ->andWhere(['>=', 'date', $dateStartYear])        // Фильтр по дате: больше или равно началу года
                ->andWhere(['<=', 'date', $dateEnd])          // Фильтр по дате: меньше или равно конечной дате
                ->sum('power') ?? 0;                          // Суммируем поле power, если результат null, возвращаем 0
        return number_format($result / $this->COUNT, 2, ",", " ");
    }
}

