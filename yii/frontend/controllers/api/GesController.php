<?php

namespace frontend\controllers\api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\Response;
use Yii;

class GesController extends Controller
{
    public function actionData($date_from = null, $date_to = null)
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        // Установка локали и часового пояса
        setlocale(LC_ALL, "uz_UZ");
        date_default_timezone_set("Asia/Tashkent");

        // Проверка и установка значений по умолчанию для параметров дат
        $date_from = $date_from ?? date('Y-01-01'); // Первый день текущего месяца
        $date_to = $date_to ?? date('Y-m-d');     // Текущая дата

        // Валидация формата дат
        $format = 'Y-m-d';
        $d1 = \DateTime::createFromFormat($format, $date_from);
        $d2 = \DateTime::createFromFormat($format, $date_to);

        if (!$d1 || !$d2 || $d1->format($format) !== $date_from || $d2->format($format) !== $date_to) {
            return [
                'success' => false,
                'status' => 400,
                'msg' => 'Некорректный формат параметров date_from или date_to. Используйте формат YYYY-MM-DD.',
            ];
        }

        // Убедимся, что date_from не позже date_to
        if ($d1 > $d2) {
            return [
                'success' => false,
                'status' => 400,
                'msg' => 'Параметр date_from не может быть позже date_to.',
            ];
        }

        // Остальной код
        $today = date('Y-m-d H:i:s');
        $client = new Client();
        $gesId = [11, 12, 13, 14, 21, 22, 23, 24, 31, 32, 33, 34, 41, 42, 43, 44, 51, 52, 53, 54, 55, 56, 61, 62, 71, 72, 73, 74, 75, 76, 77, 81, 91, 92, 93, 94, 111, 112, 113, 121, 122, 123, 124, 131, 132, 141, 151, 152];
        $result = [];

        foreach ($gesId as $index => $id) {
            $url = "http://192.168.40.215:18080/api/v1/ges/{$id}/?dt1={$date_from}&interval_id=month&dt2={$date_to}";
            try {
                $request = new Request('GET', $url);
                $res = $client->sendAsync($request, ['timeout' => 25])->wait();

                $body = $res->getBody();
                $array = json_decode($body, true);

                if (json_last_error() === JSON_ERROR_NONE) {
                    $result[] = [
//                        "url" => $url,
                        "id" => $index + 1,
                        "send_datetime" => $today,
                        "ges_region" => $array['cascade_name'] ?? 'N/A',
                        "ges_name" => $array['ges_name'] ?? 'N/A',
                        "ges_id" => $array['ges_id'] ?? 'N/A',
                        "yeargenerate" => 0,
                        "generation" => number_format(($array['data'][0]['data']['Active']['Value'] ?? 0) / 1000, 2, ',', ''),
                        "consumption" => number_format(($array['data'][2]['data']['Active']['Value'] ?? 0) / 1000, 2, ',', ''),
                        "delivery" => number_format(($array['data'][3]['data']['Active']['Value'] ?? 0) / 1000, 2, ',', ''),
                        "receipt" => number_format(($array['data'][1]['data']['Active']['Value'] ?? 0) / 1000, 2, ',', ''),
                    ];
                } else {
                    throw new \Exception("Invalid JSON response");
                }
            } catch (\Exception $e) {
                $result[] = [
//                    "url" => $url,
                    "id" => $index + 1,
                    "send_datetime" => $today,
                    "ges_region" => 0,
                    "ges_name" => 0,
                    "ges_id" => 0,
                    "yeargenerate" => 0,
                    "generation" => 0,
                    "consumption" => 0,
                    "delivery" => 0,
                    "receipt" => 0,
                ];
            }
        }

        // Пагинация
        $pageSize = Yii::$app->request->get('per_page') ? (int)Yii::$app->request->get('per_page', 10) : count($result);
        $page = max(1, (int)Yii::$app->request->get('page', 1));

        $pagination = new Pagination([
            'totalCount' => count($result),
            'pageSize' => $pageSize,
            'page' => $page - 1,
        ]);

        $data = array_slice($result, $pagination->offset, $pagination->limit);

        return [
            'success' => true,
            'status' => 200,
            'msg' => 'Сўровга асосан маълумотлар тўлиқ шакллантирилди',
            'title' => 'Гидро электр станцияларидаги электр ҳажми маълумотларини олиш',
            'total_counts' => count($result),
            "description" => [
                'id' => 'ID',
                'send_datetime' => 'Маълумот юборилган сана ва вақт',
                'ges_region' => 'ГЭС ҳудуди номи',
                'ges_name' => 'ГЭС номи',
                'ges_id' => 'ГЭС ID',
                'yeargenerate' => 'Ўтган йилда ишлаб чиқарилган электр энергия (минг.кВт/соат)',
                'generation' => 'Жорий йил бошидан ишлаб чиқарилган электр энергия (минг.кВт/соат)',
                'consumption' => 'Жорий йил бошидан ўз эхтиёжи учун сарфланган электр энергия (минг.кВт/соат)',
                'delivery' => 'Жорий йил бошидан тармоққа узатилган электр энергия (минг.кВт/соат)',
                'receipt' => 'Жорий йил бошидан тармоқдан қабул қилинган электр энергия (минг.кВт/соат)',
            ],
            'data' => $data,
            'pagination' => [
                'total_count' => $pagination->totalCount,
                'per_page' => $pagination->pageSize,
                'current_page' => $pagination->page + 1,
                'total_pages' => $pagination->pageCount,
            ],
        ];
    }

//    public function actionData($date_from = null, $date_to = null)
//    {
//        \Yii::$app->response->format = Response::FORMAT_JSON;
//
//        setlocale(LC_ALL, "uz_UZ");
//        date_default_timezone_set("Asia/Tashkent");
//
//        // Проверка и установка значений по умолчанию для параметров дат
//        $date_from = $date_from ?? date('Y-m-01'); // Первый день текущего месяца
//        $date_to = $date_to ?? date('Y-m-d');     // Текущая дата
//
//        // Валидация формата дат
//        $format = 'Y-m-d';
//        $d1 = \DateTime::createFromFormat($format, $date_from);
//        $d2 = \DateTime::createFromFormat($format, $date_to);
//
//        if (!$d1 || !$d2 || $d1->format($format) !== $date_from || $d2->format($format) !== $date_to) {
//            return [
//                'success' => false,
//                'status' => 400,
//                'msg' => 'Некорректный формат параметров date_from или date_to. Используйте формат YYYY-MM-DD.',
//            ];
//        }
//
//        // Убедимся, что date_from не позже date_to
//        if ($d1 > $d2) {
//            return [
//                'success' => false,
//                'status' => 400,
//                'msg' => 'Параметр date_from не может быть позже date_to.',
//            ];
//        }
//
//        // Determine the date range
//        $today = date('Y-m-d H:i:s');
//        $client = new Client();
//        $gesId= [11,12,13,14,21,22,23,24,31,32,33,34,41,42,43,44,51,52,53,54,55,56,61,62,71,72,73,74,75,76,77,81,91,92,93,94,111,112,113,121,122,123,124,131,132,141,151,152];
//
//        for ($i = 0; $i < count($gesId); $i++) {
//            $url = "http://192.168.40.215:18080/api/v1/ges/{$gesId[$i]}/?dt1={$date_from}&interval_id=year&dt2={$date_to}";
//            try {
//                // Create and send the request with a 25-second timeout
//                $request = new Request('GET', $url);
//                $res = $client->sendAsync($request, ['timeout' => 25])->wait();
//
//                // Retrieve and decode the response body
//                $body = $res->getBody();
//                $array = json_decode($body, true);
//
//                // Validate JSON decoding
//                if (json_last_error() === JSON_ERROR_NONE) {
//                    // Cache the result for 10 minutes (600 seconds)
//                    $result[] = [
//                        "id" => $i + 1,
//                        "send_datetime" => $today,
//                        "ges_region" => $array['cascade_name'],
//                        "ges_name" => $array['ges_name'],
//                        "ges_id" => $array['ges_id'],
//                        "yeargenerate" => 0,
//                        "generation" => number_format($array['data'][0]['data']['Active']['Value'] / 1000, 2, ',', ''),
//                        "consumption" => number_format($array['data'][2]['data']['Active']['Value'] / 1000, 2, ',', ''),
//                        "delivery" => number_format($array['data'][3]['data']['Active']['Value'] / 1000, 2, ',', ''),
//                        "receipt" => number_format($array['data'][1]['data']['Active']['Value'] / 1000, 2, ',', ''),
//                    ];
//                } else {
//                    // Handle invalid JSON
//                    $result[] = [
//                        "id" => $i + 1,
//                        "send_datetime" => $today,
//                        "ges_region" => 0,
//                        "ges_name" => 0,
//                        "ges_id" => 0,
//                        "yeargenerate" => 0,
//                        "generation" => 0,
//                        "consumption" => 0,
//                        "delivery" => 0,
//                        "receipt" => 0,
//                    ];
//                }
//            } catch (\GuzzleHttp\Exception\RequestException $e) {
//                // Handle exceptions (e.g., timeout, network errors)
//                $result[] = [
//                    "id" => $i + 1,
//                    "send_datetime" => $today,
//                    "ges_region" => 0,
//                    "ges_name" => 0,
//                    "ges_id" => 0,
//                    "yeargenerate" => 0,
//                    "generation" => 0,
//                    "consumption" => 0,
//                    "delivery" => 0,
//                    "receipt" => 0,
//                ];
//            }
//        }
//
//        // Создаем пагинацию
//        $pageSize = Yii::$app->request->get('page_size', 10); // Количество элементов на страницу (по умолчанию 10)
//        $page = Yii::$app->request->get('page', 1); // Текущая страница (по умолчанию 1)
//
//        $pagination = new Pagination([
//            'totalCount' => count($result),
//            'perPage' => $pageSize,
//            'page' => $page - 1, // Yii2 пагинация начинается с 0
//        ]);
//
//        // Получаем нужную порцию данных
//        $data = array_slice($result, $pagination->offset, $pagination->limit);
//
//        $json = '{
//              "success": true,
//              "status": 200,
//              "msg": "Сўровга асосан маълумотлар тўлиқ шакллантирилди",
//              "title": "Гидро электр станцияларидаги электр ҳажми маълумотларини олиш",
//              "total_counts": 449,
//              "description": {
//                    "id": "ID",
//                    "send_datetime": "Маълумот юборилган сана ва вақт",
//                    "ges_region": "ГЭС ҳудуди номи",
//                    "ges_name": "ГЭС номи",
//                    "ges_id": "ГЭС ID",
//                    "yeargenerate": "Ўтган йилда ишлаб чиқарилган электр энергия (минг.кВт/соат)",
//                    "generation": "Жорий йил бошидан ишлаб чиқарилган электр энергия (минг.кВт/соат)",
//                    "consumption": "Жорий йил бошидан ўз эхтиёжи учун сарфланган электр энергия (минг.кВт/соат) ",
//                    "delivery": " Жорий йил бошидан тармоққа узатилган электр энергия (минг.кВт/соат)",
//                    "receipt ": "Жорий йил бошидан тармоқдан қабул қилинган электр энергия (минг.кВт/соат)"
//              },
//              "data": {$data}
//            }';
//
//        return [
//            'success' => true,
//            'status' => 200,
//            'msg' => 'Сўровга асосан маълумотлар тўлиқ шакллантирилди',
//            'title' => 'Гидро электр станцияларидаги электр ҳажми маълумотларини олиш',
//            'total_counts' => count($result),
//            "description" => [
//                'id' => 'ID',
//                'send_datetime' => 'Маълумот юборилган сана ва вақт',
//                'ges_region' => 'ГЭС ҳудуди номи',
//                'ges_name' => 'ГЭС номи',
//                'ges_id' => 'ГЭС ID',
//                'yeargenerate' => 'Ўтган йилда ишлаб чиқарилган электр энергия (минг.кВт/соат)',
//                'generation' => 'Жорий йил бошидан ишлаб чиқарилган электр энергия (минг.кВт/соат)',
//                'consumption' => 'Жорий йил бошидан ўз эхтиёжи учун сарфланган электр энергия (минг.кВт/соат)',
//                'delivery' => 'Жорий йил бошидан тармоққа узатилган электр энергия (минг.кВт/соат)',
//                'receipt' => 'Жорий йил бошидан тармоқдан қабул қилинган электр энергия (минг.кВт/соат)'
//              ],
//            'data' => $data,
//            'pagination' => [
//                'total_count' => $pagination->totalCount,
//                'per_page' => $pagination->pageSize,
//                'current_page' => $pagination->page + 1, // Текущая страница (начиная с 1)
//                'total_pages' => $pagination->pageCount,
//            ],
//        ];
//
////        return [
////            "data" => $result,
////        ];
//    }
}
