<?php

namespace frontend\controllers;

use common\models\Informations;
use common\models\Switchs;
use common\models\Transformer;
use Yii;
use yii\base\InvalidRouteException;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'information', 'employee', 'switchs', 'transformer',
                            'server', 'days',
                            'view', 'test', 'refresh-div', 'sample',
                        ],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }

        if (Yii::$app->user->identity->type == 9) {
            return $this->render('index');
        } else {
            if (Yii::$app->user->identity->type == 1) {
                if (Yii::$app->user->identity->username == "urtachirchiq") {
                    return $this->redirect('/urta-chirchiq/index');
                } else if (Yii::$app->user->identity->username == "chirchiq") {
                    return $this->redirect('/chirchiq/index');
                } else if (Yii::$app->user->identity->username == "qodiriya") {
                    return $this->redirect('/qodiriya/index');
                } else if (Yii::$app->user->identity->username == "toshkent") {
                    return $this->redirect('/toshkent/index');
                } else if (Yii::$app->user->identity->username == "quyibuzsuv") {
                    return $this->redirect('/quyi-buzsuv/index');
                } else if (Yii::$app->user->identity->username == "farxod") {
                    return $this->redirect('/farxod/index');
                } else if (Yii::$app->user->identity->username == "samarqand") {
                    return $this->redirect('/samarqand/index');
                } else if (Yii::$app->user->identity->username == "tupolang") {
                    return $this->redirect('/tupolang/index');
                } else if (Yii::$app->user->identity->username == "ohangaron") {
                    return $this->redirect('/oxangaron/index');
                } else if (Yii::$app->user->identity->username == "hisorak") {
                    return $this->redirect('/xisorak/index');
                } else if (Yii::$app->user->identity->username == "qamchiq") {
                    return $this->redirect('/qamchiq/index');
                } else if (Yii::$app->user->identity->username == "kfk") {
                    return $this->redirect('/kfk/index');
                } else if (Yii::$app->user->identity->username == "andijon") {
                    return $this->redirect('/andijon/index');
                } else if (Yii::$app->user->identity->username == "shaxrixon") {
                    return $this->redirect('/shaxrixon/index');
                } else if (Yii::$app->user->identity->username == "tuyamuyin") {
                    return $this->redirect('/tuyamuyin/index');
                } else {
                    return $this->goHome();
                }
            } else {
                return $this->goHome();
            }
        }
    }

    /**
     * @throws NotFoundHttpException
     */
    public function actionInformation($id_organization, $aggregate)
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $info = Informations::findOne(['id_organization' => $id_organization, 'aggregate' => $aggregate]);

        return $info ? $this->render('information', [
            'model' => $this->findInformationsModel($info['id']),
        ]) : $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * @throws NotFoundHttpException
     */
    public function actionSwitchs($id, $switch)
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $id = Switchs::findOne(['id_organization' => $id, 'id_switch' => $switch]);

        return $id ? $this->render('switchs', [
            'model' => $this->findSwitchModel($id['id']),
        ]) : $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * @throws NotFoundHttpException
     * @throws InvalidRouteException
     */
    public function actionTransformer($id, $transformer)
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->getResponse()->redirect(Yii::$app->homeUrl);
        }

        $transformerRecord = Transformer::findOne(['id_organization' => $id, 'id_tansformer' => $transformer]);

        return $transformerRecord
            ? $this->render('transformer', [
                'model' => $this->findTransformerModel($transformerRecord->id),
            ])
            : $this->redirect(Yii::$app->request->referrer);
    }


    public function actionView()
    {
        if (Yii::$app->user->identity->type == 9) {
            return $this->render('view');
        } else {
            return $this->goHome();
        }
    }

    public function actionTest()
    {
        if (Yii::$app->user->identity->type == 9) {
            return $this->render('test');
        } else {
            return $this->goHome();
        }
    }

    public function actionDays()
    {
        if (Yii::$app->user->identity->type == 9) {
            return $this->render('days');
        } else {
            return $this->goHome();
        }
    }

    public function actionSample()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        return $this->render('sample');
    }

    public function actionEmployee($id)
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('employee', ['id' => $id]);
        } else {
            return $this->goHome();
        }
    }

    public function actionRefreshDiv()
    {
        // Здесь может быть ваш код для получения новых данных для <div>
        $currentTime = date('H:i:s');

        // Возвращаем новое содержимое для <div> в формате JSON
        return json_encode(['currentTime' => $currentTime]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'main-login';

        $model = new LoginForm();
        $model->captcha = rand(11111,99999);
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    private function fetchData($url)
    {
        $curl = curl_init($url);

        // Настройка параметров cURL
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 5, // Таймаут в секундах
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

    public function actionServer()
    {
        $CONST = 1000000;
        $kvt = 1000;
        header('Content-Type: application/json');
        //Ohangaron
        try {
            $dataOhangaron = $this->fetchData("http://user:usr_Oh_ge@192.168.40.215:10034/crq?req=current");//Ohangaron
            $ges35Oxangaron693 = $this->getValue($dataOhangaron, "G693");
            $ges35Oxangaron670 = $this->getValue($dataOhangaron, "G670");
            $ges35Oxangaron333 = $this->getValue($dataOhangaron, "G333");
            $ges35Oxangaron572 = $this->getValue($dataOhangaron, "G572");
            $ges35Oxangaron13 = $this->getValue($dataOhangaron, "G13");
            $ges35Oxangaron53 = $this->getValue($dataOhangaron, "G53");
            $ges35Oxangaron55 = $this->getValue($dataOhangaron, "G55");
            $ges35Oxangaron373 = $this->getValue($dataOhangaron, "G373");
            $ges35Oxangaron293 = $this->getValue($dataOhangaron, "G293");
            $ges35Oxangaron295 = $this->getValue($dataOhangaron, "G295");
            $ges35Oxangaron453 = $this->getValue($dataOhangaron, "G453");
            $ges35Oxangaron455 = $this->getValue($dataOhangaron, "G455");
            $gesErtoshOxangaron600 = $this->getValue($dataOhangaron, "G600");
            $gesErtoshOxangaron601 = $this->getValue($dataOhangaron, "G601");
            $gesErtoshOxangaron640 = $this->getValue($dataOhangaron, "G640");
            $gesErtoshOxangaron641 = $this->getValue($dataOhangaron, "G641");
            $gesErtoshOxangaron173 = $this->getValue($dataOhangaron, "G173");
            $gesErtoshOxangaron213 = $this->getValue($dataOhangaron, "G213");
            $gesErtoshOxangaron93 = $this->getValue($dataOhangaron, "G93");
            $gesErtoshOxangaron95 = $this->getValue($dataOhangaron, "G95");
            $gesErtoshOxangaron133 = $this->getValue($dataOhangaron, "G133");
            $gesErtoshOxangaron135 = $this->getValue($dataOhangaron, "G135");

            $set35Oxangaron693 = $ges35Oxangaron693[2] * 21000 / $CONST;//21000
            $set35Oxangaron670 = $ges35Oxangaron670[2] * 21000 / $CONST;//21000
            $set35Oxangaron333 = $ges35Oxangaron333[2] * 4200 / $kvt;//4200
            $set35Oxangaron572 = $ges35Oxangaron572[2] * 1000 / $kvt;//1000
            $set35Oxangaron13 = $ges35Oxangaron13[2] * 4200 / $kvt;//4200
            $set35Oxangaron373 = $ges35Oxangaron373[2] * 2100 / $kvt;//2100
            $power35Oxangaron293 = $ges35Oxangaron293[2] * 21000 / $CONST;//active 21000
            $reactive35Oxangaron295 = $ges35Oxangaron295[2] * 21000 / $CONST;//reactive 21000
            $power35Oxangaron453 = $ges35Oxangaron453[2] * 4000 / $CONST;//active 4000
            $reactive35Oxangaron455 = $ges35Oxangaron455[2] * 4000 / $CONST;//reactive 4000
            $power35Oxangaron53 = $ges35Oxangaron53[2] * 21000 / $CONST;//active 21000
            $reactive35Oxangaron55 = $ges35Oxangaron55[2] * 21000 / $CONST;//reactive 21000
            $ges35OxangaronActive = $power35Oxangaron293 + $power35Oxangaron453 + $power35Oxangaron53;
            $ges35OxangaronReactive = $reactive35Oxangaron295 + $reactive35Oxangaron455 + $reactive35Oxangaron55;
            $ges35OxangaronActiveOut = (-1 * $set35Oxangaron693 > 0 ? $set35Oxangaron693 : 0) + (-1 * $set35Oxangaron670 > 0 ? $set35Oxangaron670 : 0);
            $ges35OxangaronActiveIn = (-1 * $set35Oxangaron693 < 0 ? $set35Oxangaron693 : 0) + (-1 * $set35Oxangaron670 < 0 ? $set35Oxangaron670 : 0);
            $ges35OxangaronOwnNeeds = $set35Oxangaron333 + $set35Oxangaron572 + $set35Oxangaron13 + $set35Oxangaron373;
            $ges35OxangaronAggregateTrue = ($ges35Oxangaron293[2] > 0 ? 1 : 0) + ($ges35Oxangaron453[2] > 0 ? 1 : 0) + ($ges35Oxangaron53[2] > 0 ? 1 : 0);
            $ges35OxangaronAggregateFalse = ($ges35Oxangaron293[2] <= 0 ? 1 : 0) + ($ges35Oxangaron453[2] <= 0 ? 1 : 0) + ($ges35Oxangaron53[2] <= 0 ? 1 : 0);
            $setErtoshOxangaron600 = $gesErtoshOxangaron600[2] * 1800 / $CONST;//1800
            $setErtoshOxangaron601 = $gesErtoshOxangaron601[2] * 1800 / $CONST;//1800
            $setErtoshOxangaron640 = $gesErtoshOxangaron640[2] * 1800 / $CONST;//1800
            $setErtoshOxangaron641 = $gesErtoshOxangaron641[2] * 1800 / $CONST;//1800
            $setErtoshOxangaron173 = $gesErtoshOxangaron173[2] * 100 / $kvt;//100
            $setErtoshOxangaron213 = $gesErtoshOxangaron213[2] * 100 / $kvt;//100
            $powerErtoshOxangaron93 = $gesErtoshOxangaron93[2] * 1500 / $CONST;//active 1500
            $reactiveErtoshOxangaron95 = $gesErtoshOxangaron95[2] * 1500 / $CONST;//reactive 1500
            $powerErtoshOxangaron133 = $gesErtoshOxangaron133[2] * 1500 / $CONST;//active 1500
            $reactiveErtoshOxangaron135 = $gesErtoshOxangaron135[2] * 1500 / $CONST;//reactive 1500
            $gesErtoshOxangaronActive = $powerErtoshOxangaron93 + $powerErtoshOxangaron133;
            $gesErtoshOxangaronReactive = $reactiveErtoshOxangaron95 + $reactiveErtoshOxangaron135;
            $gesErtoshOxangaronActiveOut = $setErtoshOxangaron600 + $setErtoshOxangaron640;
            $gesErtoshOxangaronActiveIn = $setErtoshOxangaron601 + $setErtoshOxangaron641;
            $gesErtoshOxangaronOwnNeeds = $setErtoshOxangaron173 + $setErtoshOxangaron213;
            $gesErtoshOxangaronAggregateTrue = ($gesErtoshOxangaron93[2] > 0 ? 1 : 0) + ($gesErtoshOxangaron133[2] > 0 ? 1 : 0);
            $gesErtoshOxangaronAggregateFalse = ($gesErtoshOxangaron93[2] <= 0 ? 1 : 0) + ($gesErtoshOxangaron133[2] <= 0 ? 1 : 0);

            $activeOhangaron = $ges35OxangaronActive + $gesErtoshOxangaronActive;
            $reactiveOhangaron = $ges35OxangaronReactive + $gesErtoshOxangaronReactive;
            $activeOutOhangaron = $ges35OxangaronActiveOut + $gesErtoshOxangaronActiveOut;
            $activeInOhangaron = $ges35OxangaronActiveIn + $gesErtoshOxangaronActiveIn;
            $ownNeedsOhangaron = $ges35OxangaronOwnNeeds + $gesErtoshOxangaronOwnNeeds;
            $trueOhangaron = $ges35OxangaronAggregateTrue + $gesErtoshOxangaronAggregateTrue;
            $errorOhangaron = 1;
            $falseOhangaron = $ges35OxangaronAggregateFalse + $gesErtoshOxangaronAggregateFalse - $errorOhangaron;
        } catch (\Exception $e) {
            $activeOhangaron = 0;
            $reactiveOhangaron = 0;
            $activeOutOhangaron = 0;
            $activeInOhangaron = 0;
            $ownNeedsOhangaron = 0;
            $trueOhangaron = 0;
            $falseOhangaron = 0;
            $errorOhangaron = 0;
        }

        //Tupolang
        try {
            $dataTupolang = $this->fetchData("http://user:rsuLa_tU@192.168.40.215:10018/crq?req=current");//Tupolang
            $ges34Tupolang14 = $this->getValue($dataTupolang, "G14");
            $ges34Tupolang13 = $this->getValue($dataTupolang, "G13");
            $ges34Tupolang54 = $this->getValue($dataTupolang, "G54");
            $ges34Tupolang53 = $this->getValue($dataTupolang, "G53");
            $ges34Tupolang373 = $this->getValue($dataTupolang, "G373");
            $ges34Tupolang413 = $this->getValue($dataTupolang, "G413");
            $ges34Tupolang333 = $this->getValue($dataTupolang, "G333");
            $ges34Tupolang613 = $this->getValue($dataTupolang, "G613");
            $ges34Tupolang573 = $this->getValue($dataTupolang, "G573");
            $ges34Tupolang293 = $this->getValue($dataTupolang, "G293");
            $ges34Tupolang295 = $this->getValue($dataTupolang, "G295");
            $ges34Tupolang253 = $this->getValue($dataTupolang, "G253");
            $ges34Tupolang255 = $this->getValue($dataTupolang, "G255");
            $ges34Tupolang173 = $this->getValue($dataTupolang, "G173");
            $ges34Tupolang175 = $this->getValue($dataTupolang, "G175");
            $ges34Tupolang133 = $this->getValue($dataTupolang, "G133");
            $ges34Tupolang135 = $this->getValue($dataTupolang, "G135");
            $ges43Tupolang867 = $this->getValue($dataTupolang, "G867");
            $ges43Tupolang868 = $this->getValue($dataTupolang, "G868");
            $ges43Tupolang890 = $this->getValue($dataTupolang, "G890");
            $ges43Tupolang891 = $this->getValue($dataTupolang, "G891");
            $ges43Tupolang821 = $this->getValue($dataTupolang, "G821");
            $ges43Tupolang775 = $this->getValue($dataTupolang, "G775");
            $ges43Tupolang844 = $this->getValue($dataTupolang, "G844");
            $ges43Tupolang798 = $this->getValue($dataTupolang, "G798");
            $ges43Tupolang729 = $this->getValue($dataTupolang, "G729");
            $ges43Tupolang731 = $this->getValue($dataTupolang, "G731");
            $ges43Tupolang752 = $this->getValue($dataTupolang, "G752");
            $ges43Tupolang754 = $this->getValue($dataTupolang, "G754");
            $ges44Tupolang1051 = $this->getValue($dataTupolang, "G1051");
            $ges44Tupolang1052 = $this->getValue($dataTupolang, "G1052");
            $ges44Tupolang1074 = $this->getValue($dataTupolang, "G1074");
            $ges44Tupolang1075 = $this->getValue($dataTupolang, "G1075");
            $ges44Tupolang1005 = $this->getValue($dataTupolang, "G1005");
            $ges44Tupolang1028 = $this->getValue($dataTupolang, "G1028");
            $ges44Tupolang959 = $this->getValue($dataTupolang, "G959");
            $ges44Tupolang961 = $this->getValue($dataTupolang, "G961");
            $ges44Tupolang982 = $this->getValue($dataTupolang, "G982");
            $ges44Tupolang984 = $this->getValue($dataTupolang, "G984");
            $set34Tupolang13 = $ges34Tupolang13[2] * 110000 / $CONST;
            $set34Tupolang14 = $ges34Tupolang14[2] * 110000 / $CONST;
            $set34Tupolang53 = $ges34Tupolang53[2] * 110000 / $CONST;
            $set34Tupolang54 = $ges34Tupolang54[2] * 110000 / $CONST;
            $set34Tupolang373 = $ges34Tupolang373[2] * 4000 / $kvt;
            $set34Tupolang413 = $ges34Tupolang413[2] * 4000 / $kvt;
            $set34Tupolang333 = $ges34Tupolang333[2] * 4000 / $kvt;
            $set34Tupolang613 = $ges34Tupolang613[2] * 4000 / $kvt;
            $set34Tupolang573 = $ges34Tupolang573[2] * 4000 / $kvt;
            $power34Tupolang293 = $ges34Tupolang293[2] * 24000 / $CONST;//active
            $reactive34Tupolang295 = $ges34Tupolang295[2] * 24000 / $CONST;//reactive
            $power34Tupolang253 = $ges34Tupolang253[2] * 24000 / $CONST;//active
            $reactive34Tupolang255 = $ges34Tupolang255[2] * 24000 / $CONST;//reactive
            $power34Tupolang173 = $ges34Tupolang173[2] * 100000 / $CONST;//active
            $reactive34Tupolang175 = $ges34Tupolang175[2] * 100000 / $CONST;//reactive
            $power34Tupolang133 = $ges34Tupolang133[2] * 100000 / $CONST;//active
            $reactive34Tupolang135 = $ges34Tupolang135[2] * 100000 / $CONST;//reactive
            $ges34TupolangActive = $power34Tupolang293 + $power34Tupolang253 + $power34Tupolang173 + $power34Tupolang133;//active
            $ges34TupolangReactive = $reactive34Tupolang295 + $reactive34Tupolang255 + $reactive34Tupolang175 + $reactive34Tupolang135;//reactive
            $ges34TupolangActiveOut = $set34Tupolang14 + $set34Tupolang54;
            $ges34TupolangActiveIn = $set34Tupolang13 + $set34Tupolang53;
            $ges34TupolangOwnNeeds = $set34Tupolang373 + $set34Tupolang413 + $set34Tupolang333 + $set34Tupolang613 + $set34Tupolang573;
            $ges34TupolangAggregateTrue = ($ges34Tupolang293[2] > 0 ? 1 : 0) +
                ($ges34Tupolang253[2] > 0 ? 1 : 0) +
                ($ges34Tupolang173[2] > 0 ? 1 : 0) +
                ($ges34Tupolang133[2] > 0 ? 1 : 0);
            $ges34TupolangAggregateFalse = ($ges34Tupolang293[2] <= 0 ? 1 : 0) +
                ($ges34Tupolang253[2] <= 0 ? 1 : 0) +
                ($ges34Tupolang173[2] <= 0 ? 1 : 0) +
                ($ges34Tupolang133[2] <= 0 ? 1 : 0);
            $set43Tupolang868 = $ges43Tupolang868[2] * 550000 / $CONST;
            $set43Tupolang867 = $ges43Tupolang867[2] * 550000 / $CONST;
            $set43Tupolang890 = $ges43Tupolang890[2] * 550000 / $CONST;
            $set43Tupolang891 = $ges43Tupolang891[2] * 550000 / $CONST;
            $set43Tupolang821 = $ges43Tupolang821[2] * 1050 / $kvt;
            $set43Tupolang775 = $ges43Tupolang775[2] * 1050 / $kvt;
            $set43Tupolang844 = $ges43Tupolang844[2] * 1050 / $kvt;
            $set43Tupolang798 = $ges43Tupolang798[2] * 1050 / $kvt;
            $power43Tupolang729 = $ges43Tupolang729[2] * 31500 / $CONST;//active
            $reactive43Tupolang731 = $ges43Tupolang731[2] * 31500 / $CONST;//reactive
            $power43Tupolang752 = $ges43Tupolang752[2] * 31500 / $CONST;//active
            $reactive43Tupolang754 = $ges43Tupolang754[2] * 31500 / $CONST;//reactive
            $ges43TupolangActive = $power43Tupolang729 + $power43Tupolang752;//active
            $ges43TupolangReactive = $reactive43Tupolang731 + $reactive43Tupolang754;//reactive
            $ges43TupolangActiveOut = $set43Tupolang867 + $set43Tupolang890;
            $ges43TupolangActiveIn = $set43Tupolang868 + $set43Tupolang891;
            $ges43TupolangOwnNeeds = $set43Tupolang821 + $set43Tupolang775 + $set43Tupolang844 + $set43Tupolang798;
            $ges43TupolangAggregateTrue = ($ges43Tupolang729[2] > 0 ? 1 : 0) +
                ($ges43Tupolang752[2] > 0 ? 1 : 0);
            $ges43TupolangAggregateFalse = ($ges43Tupolang729[2] <= 0 ? 1 : 0) +
                ($ges43Tupolang752[2] <= 0 ? 1 : 0);
            $set44Tupolang1051 = $ges44Tupolang1051[2] * 275000 / $CONST;
            $set44Tupolang1052 = $ges44Tupolang1052[2] * 275000 / $CONST;
            $set44Tupolang1074 = $ges44Tupolang1074[2] * 275000 / $CONST;
            $set44Tupolang1075 = $ges44Tupolang1075[2] * 275000 / $CONST;
            $set44Tupolang1005 = $ges44Tupolang1005[2] * 1050 / $kvt;
            $set44Tupolang1028 = $ges44Tupolang1028[2] * 1050 / $kvt;
            $power44Tupolang959 = $ges44Tupolang959[2] * 31500 / $CONST;//active
            $reactive44Tupolang961 = $ges44Tupolang961[2] * 31500 / $CONST;//reactive
            $power44Tupolang982 = $ges44Tupolang982[2] * 31500 / $CONST;//active
            $reactive44Tupolang984 = $ges44Tupolang984[2] * 31500 / $CONST;//reactive
            $ges44TupolangActive = $power44Tupolang959 + $power44Tupolang982;//active
            $ges44TupolangReactive = $reactive44Tupolang961 + $reactive44Tupolang984;//reactive
            $ges44TupolangActiveOut = $set44Tupolang1051 + $set44Tupolang1074;
            $ges44TupolangActiveIn = $set44Tupolang1052 + $set44Tupolang1075;
            $ges44TupolangOwnNeeds = $set44Tupolang1005 + $set44Tupolang1028;
            $ges44TupolangAggregateTrue = ($ges44Tupolang959[2] > 0 ? 1 : 0) +
                ($ges44Tupolang982[2] > 0 ? 1 : 0);
            $ges44TupolangAggregateFalse = ($ges44Tupolang959[2] <= 0 ? 1 : 0) +
                ($ges44Tupolang982[2] <= 0 ? 1 : 0);
            $activeTupolang = $ges34TupolangActive + $ges43TupolangActive + $ges44TupolangActive;
            $reactiveTupolang = $ges34TupolangReactive + $ges43TupolangReactive + $ges44TupolangReactive;
            $activeOutTupolang = $ges34TupolangActiveOut + $ges43TupolangActiveOut + $ges44TupolangActiveOut;
            $activeInTupolang = $ges34TupolangActiveIn + $ges43TupolangActiveIn + $ges44TupolangActiveIn;
            $ownNeedsTupolang = $ges34TupolangOwnNeeds + $ges43TupolangOwnNeeds + $ges44TupolangOwnNeeds;
            $trueTupolang = $ges34TupolangAggregateTrue + $ges43TupolangAggregateTrue + $ges44TupolangAggregateTrue;
            $falseTupolang = $ges34TupolangAggregateFalse + $ges43TupolangAggregateFalse + $ges44TupolangAggregateFalse;
            $errorTupolang = 0;/*end tupolang*/
        } catch (\Exception $e) {
            $activeTupolang = 0;
            $reactiveTupolang = 0;
            $activeOutTupolang = 0;
            $activeInTupolang = 0;
            $ownNeedsTupolang = 0;
            $trueTupolang = 0;
            $falseTupolang = 0;
            $errorTupolang = 0;
        }

        /*Andijon*/
        try {
            $dataAndijon = $this->fetchData("http://user:usrAn_Ge@192.168.40.215:10042/crq?req=current");//Andijon
            $ges29Andijon80 = $this->getValue($dataAndijon, "G80");
            $ges29Andijon81 = $this->getValue($dataAndijon, "G81");
            $ges29Andijon40 = $this->getValue($dataAndijon, "G40");
            $ges29Andijon41 = $this->getValue($dataAndijon, "G41");
            $ges29Andijon190 = $this->getValue($dataAndijon, "G190");
            $ges29Andijon120 = $this->getValue($dataAndijon, "G120");
            $ges29Andijon121 = $this->getValue($dataAndijon, "G121");
            $ges29Andijon213 = $this->getValue($dataAndijon, "G213");
            $ges29Andijon160 = $this->getValue($dataAndijon, "G160");
            $ges29Andijon161 = $this->getValue($dataAndijon, "G161");
            $ges29Andijon236 = $this->getValue($dataAndijon, "G236");
            $ges29Andijon429 = $this->getValue($dataAndijon, "G429");
            $ges29Andijon469 = $this->getValue($dataAndijon, "G469");
            $ges29Andijon269 = $this->getValue($dataAndijon, "G269");
            $ges29Andijon271 = $this->getValue($dataAndijon, "G271");
            $ges29Andijon309 = $this->getValue($dataAndijon, "G309");
            $ges29Andijon311 = $this->getValue($dataAndijon, "G311");
            $ges29Andijon349 = $this->getValue($dataAndijon, "G349");
            $ges29Andijon351 = $this->getValue($dataAndijon, "G351");
            $ges29Andijon389 = $this->getValue($dataAndijon, "G389");
            $ges29Andijon391 = $this->getValue($dataAndijon, "G391");
            $set29Andijon80 = $ges29Andijon80[2] * 176000 / $CONST;
            $set29Andijon81 = $ges29Andijon81[2] * 176000 / $CONST;
            $set29Andijon40 = $ges29Andijon40[2] * 88000 / $CONST;
            $set29Andijon41 = $ges29Andijon41[2] * 88000 / $CONST;
            $set29Andijon190 = $ges29Andijon190[2] * 660000 / $CONST;
            $set29Andijon120 = $ges29Andijon120[2] * 176000 / $CONST;
            $set29Andijon121 = $ges29Andijon121[2] * 176000 / $CONST;
            $set29Andijon213 = $ges29Andijon213[2] * 660000 / $CONST;
            $set29Andijon160 = $ges29Andijon160[2] * 66000 / $CONST;
            $set29Andijon161 = $ges29Andijon161[2] * 66000 / $CONST;
            $set29Andijon236 = $ges29Andijon236[2] * 660000 / $CONST;

            $set29Andijon429 = $ges29Andijon429[2] * 160 / $kvt;
            $set29Andijon469 = $ges29Andijon469[2] * 160 / $kvt;

            $power29Andijon269 = $ges29Andijon269[2] * 60000 / $CONST;//active
            $reactive29Andijon271 = $ges29Andijon271[2] * 60000 / $CONST;//reactive

            $power29Andijon309 = $ges29Andijon309[2] * 60000 / $CONST;//active
            $reactive29Andijon311 = $ges29Andijon311[2] * 60000 / $CONST;//reactive

            $power29Andijon349 = $ges29Andijon349[2] * 60000 / $CONST;//active
            $reactive29Andijon351 = $ges29Andijon351[2] * 60000 / $CONST;//reactive

            $power29Andijon389 = $ges29Andijon389[2] * 60000 / $CONST;//active
            $reactive29Andijon391 = $ges29Andijon391[2] * 60000 / $CONST;//reactive

            $ges29AndijonActive = $power29Andijon269 + $power29Andijon309 + $power29Andijon349 + $power29Andijon389;
            $ges29AndijonReactive = $reactive29Andijon271 + $reactive29Andijon311 + $reactive29Andijon351 + $reactive29Andijon391;
            $ges29AndijonActiveOut = (
                $set29Andijon81 +
                $set29Andijon41 +
                ((-1 * $set29Andijon190) > 0 ? (-1) * $set29Andijon190 : 0) +
                $set29Andijon121 +
                ($set29Andijon213 > 0 ? $set29Andijon213 : 0) +
                $set29Andijon161 +
                //                $set29Andijon670 +
                (-1 * $set29Andijon236 > 0 ? -1 * $set29Andijon236 : 0)
            );
            $ges29AndijonActiveIn = $set29Andijon80 +
                $set29Andijon40 +
                ((-1) * $set29Andijon190 < 0 ? (-1) * $set29Andijon190 : 0) +
                $set29Andijon120 +
                ($set29Andijon213 <= 0 ? $set29Andijon213 : 0) +
                $set29Andijon160 +
                //                $set29Andijon669 +
                (-1 * $set29Andijon236 < 0 ? -1 * $set29Andijon236 : 0);
            $ges29AndijonOwnNeeds = $set29Andijon429 + $set29Andijon469;
            $ges29AndijonAggregateTrue = ($ges29Andijon269[2] > 0 ? 1 : 0) + ($ges29Andijon309[2] > 0 ? 1 : 0) + ($ges29Andijon349[2] > 0 ? 1 : 0) + ($ges29Andijon389[2] > 0 ? 1 : 0);
            $ges29AndijonAggregateError = 0;
            $ges29AndijonAggregateFalse = ($ges29Andijon269[2] <= 0 ? 1 : 0) + ($ges29Andijon309[2] <= 0 ? 1 : 0) + ($ges29Andijon349[2] <= 0 ? 1 : 0) + ($ges29Andijon389[2] <= 0 ? 1 : 0) - $ges29AndijonAggregateError;

            $ges36Andijon670 = $this->getValue($dataAndijon, "G670");
            $ges36Andijon669 = $this->getValue($dataAndijon, "G669");
            $ges36Andijon549 = $this->getValue($dataAndijon, "G549");
            $ges36Andijon629 = $this->getValue($dataAndijon, "G629");
            $ges36Andijon509 = $this->getValue($dataAndijon, "G509");
            $ges36Andijon511 = $this->getValue($dataAndijon, "G511");
            $ges36Andijon589 = $this->getValue($dataAndijon, "G589");
            $ges36Andijon591 = $this->getValue($dataAndijon, "G591");

            $set36Andijon670 = $ges36Andijon670[2] * 132000 / $CONST;
            $set36Andijon669 = $ges36Andijon669[2] * 132000 / $CONST;

            $set36Andijon549 = $ges36Andijon549[2] * 6300 / $kvt;
            $set36Andijon629 = $ges36Andijon629[2] * 6300 / $kvt;

            $power36Andijon509 = $ges36Andijon509[2] * 42000 / $CONST;//active
            $reactive36Andijon511 = $ges36Andijon511[2] * 42000 / $CONST;//reactive

            $power36Andijon589 = $ges36Andijon589[2] * 42000 / $CONST;//active
            $reactive36Andijon591 = $ges36Andijon591[2] * 42000 / $CONST;//reactive

            $ges36AndijonActive = $power36Andijon509 + $power36Andijon589;
            $ges36AndijonReactive = $reactive36Andijon511 + $reactive36Andijon591;
            $ges36AndijonActiveOut = $set36Andijon669;
            $ges36AndijonActiveIn = $set36Andijon670;
            $ges36AndijonOwnNeeds = $set36Andijon549 + $set36Andijon629;
            $ges36AndijonAggregateTrue = ($ges36Andijon509[2] > 0 ? 1 : 0) + ($ges36Andijon589[2] > 0 ? 1 : 0);
            $ges36AndijonAggregateError = 0;
            $ges36AndijonAggregateFalse = ($ges36Andijon509[2] <= 0 ? 1 : 0) + ($ges36Andijon589[2] <= 0 ? 1 : 0) - $ges36AndijonAggregateError;

            $gesKudashAndijon750 = $this->getValue($dataAndijon, "G750");
            $gesKudashAndijon749 = $this->getValue($dataAndijon, "G749");
            $gesKudashAndijon814 = $this->getValue($dataAndijon, "G814");
            $gesKudashAndijon778 = $this->getValue($dataAndijon, "G778");
            $gesKudashAndijon779 = $this->getValue($dataAndijon, "G779");
            $gesKudashAndijon796 = $this->getValue($dataAndijon, "G796");
            $gesKudashAndijon797 = $this->getValue($dataAndijon, "G797");

            $setKudashAndijon750 = $gesKudashAndijon750[2] * 7200 / $CONST;
            $setKudashAndijon749 = $gesKudashAndijon749[2] * 7200 / $CONST;

            $setKudashAndijon814 = $gesKudashAndijon814[2] * 360 / $kvt;

            $powerKudashAndijon778 = $gesKudashAndijon778[2] * 4800 / $CONST;//active
            $reactiveKudashAndijon779 = $gesKudashAndijon779[2] * 4800 / $CONST;//reactive

            $powerKudashAndijon796 = $gesKudashAndijon796[2] * 4800 / $CONST;//active
            $reactiveKudashAndijon797 = $gesKudashAndijon797[2] * 4800 / $CONST;//reactive

            $gesKudashAndijonActive = $powerKudashAndijon778 + $powerKudashAndijon796;
            $gesKudashAndijonReactive = $reactiveKudashAndijon779 + $reactiveKudashAndijon797;
            $gesKudashAndijonActiveOut = $setKudashAndijon749;
            $gesKudashAndijonActiveIn = $setKudashAndijon750;
            $gesKudashAndijonOwnNeeds = $setKudashAndijon814;
            $gesKudashAndijonAggregateTrue = ($gesKudashAndijon778[2] > 0 ? 1 : 0) + ($gesKudashAndijon796[2] > 0 ? 1 : 0);
            $gesKudashAndijonAggregateError = 0;
            $gesKudashAndijonAggregateFalse = ($gesKudashAndijon778[2] <= 0 ? 1 : 0) + ($gesKudashAndijon796[2] <= 0 ? 1 : 0) - $gesKudashAndijonAggregateError;

            $activeAndijon = $ges29AndijonActive + $ges36AndijonActive + $gesKudashAndijonActive;
            $reactiveAndijon = $ges29AndijonReactive + $ges36AndijonReactive + $gesKudashAndijonReactive;
            $activeOutAndijon = $ges29AndijonActiveOut + $ges36AndijonActiveOut + $gesKudashAndijonActiveOut;
            $activeInAndijon = $ges29AndijonActiveIn + $ges36AndijonActiveIn + $gesKudashAndijonActiveIn;
            $ownNeedsAndijon = $ges29AndijonOwnNeeds + $ges36AndijonOwnNeeds + $gesKudashAndijonOwnNeeds;
            $trueAndijon = $ges29AndijonAggregateTrue + $ges36AndijonAggregateTrue + $gesKudashAndijonAggregateTrue;
            $errorAndijon = $ges29AndijonAggregateError + $ges36AndijonAggregateError + $gesKudashAndijonAggregateError;
            $falseAndijon = $ges29AndijonAggregateFalse + $ges36AndijonAggregateFalse + $gesKudashAndijonAggregateFalse - $errorAndijon;
        } catch (\Exception $e) {
            $activeAndijon = 0;
            $reactiveAndijon = 0;
            $activeOutAndijon = 0;
            $activeInAndijon = 0;
            $ownNeedsAndijon = 0;
            $trueAndijon = 0;
            $falseAndijon = 0;
            $errorAndijon = 0;
        }

        /*Urta-cgircgiq*/
        try {
            $dataUrtachirchiq = $this->fetchData("http://user:c8H_us3r@192.168.40.215:10006/crq?req=current");//Urtachirchiq
            $ges6UrtaChirchiq226 = $this->getValue($dataUrtachirchiq, "G226");
            $ges6UrtaChirchiq225 = $this->getValue($dataUrtachirchiq, "G225");
            $ges6UrtaChirchiq202 = $this->getValue($dataUrtachirchiq, "G202");
            $ges6UrtaChirchiq201 = $this->getValue($dataUrtachirchiq, "G201");
            $ges6UrtaChirchiq250 = $this->getValue($dataUrtachirchiq, "G250");
            $ges6UrtaChirchiq249 = $this->getValue($dataUrtachirchiq, "G249");
            $ges6UrtaChirchiq105 = $this->getValue($dataUrtachirchiq, "G105");
            $ges6UrtaChirchiq129 = $this->getValue($dataUrtachirchiq, "G129");
            $ges6UrtaChirchiq153 = $this->getValue($dataUrtachirchiq, "G153");
            $ges6UrtaChirchiq177 = $this->getValue($dataUrtachirchiq, "G177");
            $ges6UrtaChirchiq9 = $this->getValue($dataUrtachirchiq, "G9");
            $ges6UrtaChirchiq11 = $this->getValue($dataUrtachirchiq, "G11");
            $ges6UrtaChirchiq33 = $this->getValue($dataUrtachirchiq, "G33");
            $ges6UrtaChirchiq35 = $this->getValue($dataUrtachirchiq, "G35");
            $ges6UrtaChirchiq57 = $this->getValue($dataUrtachirchiq, "G57");
            $ges6UrtaChirchiq59 = $this->getValue($dataUrtachirchiq, "G59");
            $ges6UrtaChirchiq81 = $this->getValue($dataUrtachirchiq, "G81");
            $ges6UrtaChirchiq83 = $this->getValue($dataUrtachirchiq, "G83");
            $ges27UrtaChirchiq489 = $this->getValue($dataUrtachirchiq, "G489");
            $ges27UrtaChirchiq490 = $this->getValue($dataUrtachirchiq, "G490");
            $ges27UrtaChirchiq369 = $this->getValue($dataUrtachirchiq, "G369");
            $ges27UrtaChirchiq370 = $this->getValue($dataUrtachirchiq, "G370");
            $ges27UrtaChirchiq345 = $this->getValue($dataUrtachirchiq, "G345");
            $ges27UrtaChirchiq346 = $this->getValue($dataUrtachirchiq, "G346");
            $ges27UrtaChirchiq441 = $this->getValue($dataUrtachirchiq, "G441");
            $ges27UrtaChirchiq442 = $this->getValue($dataUrtachirchiq, "G442");
            $ges27UrtaChirchiq465 = $this->getValue($dataUrtachirchiq, "G465");
            $ges27UrtaChirchiq466 = $this->getValue($dataUrtachirchiq, "G466");
            $ges27UrtaChirchiq393 = $this->getValue($dataUrtachirchiq, "G393");
            $ges27UrtaChirchiq394 = $this->getValue($dataUrtachirchiq, "G394");
            $ges27UrtaChirchiq417 = $this->getValue($dataUrtachirchiq, "G417");
            $ges27UrtaChirchiq418 = $this->getValue($dataUrtachirchiq, "G418");
            $ges27UrtaChirchiq513 = $this->getValue($dataUrtachirchiq, "G513");
            $ges27UrtaChirchiq514 = $this->getValue($dataUrtachirchiq, "G514");
            $ges27UrtaChirchiq585 = $this->getValue($dataUrtachirchiq, "G585");
            $ges27UrtaChirchiq609 = $this->getValue($dataUrtachirchiq, "G609");
            $ges27UrtaChirchiq633 = $this->getValue($dataUrtachirchiq, "G633");
            $ges27UrtaChirchiq273 = $this->getValue($dataUrtachirchiq, "G273");
            $ges27UrtaChirchiq275 = $this->getValue($dataUrtachirchiq, "G275");
            $ges27UrtaChirchiq297 = $this->getValue($dataUrtachirchiq, "G297");
            $ges27UrtaChirchiq299 = $this->getValue($dataUrtachirchiq, "G299");
            $ges27UrtaChirchiq321 = $this->getValue($dataUrtachirchiq, "G321");
            $ges27UrtaChirchiq323 = $this->getValue($dataUrtachirchiq, "G323");
            $set6UrtaChirchiq226 = $ges6UrtaChirchiq226[2] * 2200000 / $CONST;
            $set6UrtaChirchiq225 = $ges6UrtaChirchiq225[2] * 2200000 / $CONST;
            $set6UrtaChirchiq202 = $ges6UrtaChirchiq202[2] * 2200000 / $CONST;
            $set6UrtaChirchiq201 = $ges6UrtaChirchiq201[2] * 2200000 / $CONST;
            $set6UrtaChirchiq250 = $ges6UrtaChirchiq250[2] * 2200000 / $CONST;
            $set6UrtaChirchiq249 = $ges6UrtaChirchiq249[2] * 2200000 / $CONST;
            $set6UrtaChirchiq105 = $ges6UrtaChirchiq105[2] * 300 / $kvt;
            $set6UrtaChirchiq129 = $ges6UrtaChirchiq129[2] * 300 / $kvt;
            $set6UrtaChirchiq153 = $ges6UrtaChirchiq153[2] * 300 / $kvt;
            $set6UrtaChirchiq177 = $ges6UrtaChirchiq177[2] * 300 / $kvt;

            $power6UrtaChirchiq9 = $ges6UrtaChirchiq9[2] * 276000 / $CONST;//active
            $reactive6UrtaChirchiq11 = $ges6UrtaChirchiq11[2] * 276000 / $CONST;//reactive
            $power6UrtaChirchiq33 = $ges6UrtaChirchiq33[2] * 276000 / $CONST;//active
            $reactive6UrtaChirchiq35 = $ges6UrtaChirchiq35[2] * 276000 / $CONST;//reactive
            $power6UrtaChirchiq57 = $ges6UrtaChirchiq57[2] * 276000 / $CONST;//active
            $reactive6UrtaChirchiq59 = $ges6UrtaChirchiq59[2] * 276000 / $CONST;//reactive

            $power6UrtaChirchiq81 = $ges6UrtaChirchiq81[2] * 276000 / $CONST;//active
            $reactive6UrtaChirchiq83 = $ges6UrtaChirchiq83[2] * 276000 / $CONST;//reactive
            $ges6UrtaChirchiqActive = $power6UrtaChirchiq9 + $power6UrtaChirchiq33 + $power6UrtaChirchiq57 + $power6UrtaChirchiq81;
            $ges6UrtaChirchiqReactive = $reactive6UrtaChirchiq11 + $reactive6UrtaChirchiq35 + $reactive6UrtaChirchiq59 + $reactive6UrtaChirchiq83;
            $ges6UrtaChirchiqActiveOut = $set6UrtaChirchiq226 + $set6UrtaChirchiq202 + $set6UrtaChirchiq250;
            $ges6UrtaChirchiqActiveIn = $set6UrtaChirchiq225 + $set6UrtaChirchiq201 + $set6UrtaChirchiq249;
            $ges6UrtaChirchiqOwnNeeds = $set6UrtaChirchiq105 + $set6UrtaChirchiq129 + $set6UrtaChirchiq153 + $set6UrtaChirchiq177;
            $ges6UrtaChirchiqAggregateTrue = ($ges6UrtaChirchiq9[2] > 0 ? 1 : 0) +
                ($ges6UrtaChirchiq33[2] > 0 ? 1 : 0) +
                ($ges6UrtaChirchiq57[2] > 0 ? 1 : 0) +
                ($ges6UrtaChirchiq81[2] > 0 ? 1 : 0);
            $ges6UrtaChirchiqAggregateFalse = ($ges6UrtaChirchiq9[2] <= 0 ? 1 : 0) +
                ($ges6UrtaChirchiq33[2] <= 0 ? 1 : 0) +
                ($ges6UrtaChirchiq57[2] <= 0 ? 1 : 0) +
                ($ges6UrtaChirchiq81[2] <= 0 ? 1 : 0);
            //27
            $power27UrtaChirchiq273 = $ges27UrtaChirchiq273[2] * 80000 / $CONST;//active
            $reactive27UrtaChirchiq275 = $ges27UrtaChirchiq275[2] * 80000 / $CONST;//reactive

            $power27UrtaChirchiq297 = $ges27UrtaChirchiq297[2] * 80000 / $CONST;//active
            $reactive27UrtaChirchiq299 = $ges27UrtaChirchiq299[2] * 80000 / $CONST;//reactive

            $power27UrtaChirchiq321 = $ges27UrtaChirchiq321[2] * 80000 / $CONST;//active
            $reactive27UrtaChirchiq323 = $ges27UrtaChirchiq323[2] * 80000 / $CONST;//reactive

            $ges27UrtaChirchiqActive = $power27UrtaChirchiq273 + $power27UrtaChirchiq297 + $power27UrtaChirchiq321;
            $ges27UrtaChirchiqReactive = $reactive27UrtaChirchiq275 + $reactive27UrtaChirchiq299 + $reactive27UrtaChirchiq323;
            $ges27UrtaChirchiqActiveOut = ($ges27UrtaChirchiq346[2] * 825000 / $CONST) + ($ges27UrtaChirchiq370[2] * 825000 / $CONST) + ($ges27UrtaChirchiq394[2] * 44000 / $CONST) + ($ges27UrtaChirchiq418[2] * 44000 / $CONST) + ($ges27UrtaChirchiq442[2] * 66000 / $CONST) + ($ges27UrtaChirchiq466[2] * 66000 / $CONST) + ($ges27UrtaChirchiq490[2] * 66000 / $CONST) + ($ges27UrtaChirchiq514[2] * 44000 / $CONST);
            $ges27UrtaChirchiqActiveIn = ($ges27UrtaChirchiq345[2] * 825000 / $CONST) + ($ges27UrtaChirchiq369[2] * 825000 / $CONST) + ($ges27UrtaChirchiq393[2] * 44000 / $CONST) + ($ges27UrtaChirchiq417[2] * 44000 / $CONST) + ($ges27UrtaChirchiq441[2] * 66000 / $CONST) + ($ges27UrtaChirchiq465[2] * 66000 / $CONST) + ($ges27UrtaChirchiq489[2] * 66000 / $CONST) + ($ges27UrtaChirchiq513[2] * 44000 / $CONST);
            $ges27UrtaChirchiqOwnNeeds = ($ges27UrtaChirchiq585[2] * 200 / $kvt) + ($ges27UrtaChirchiq609[2] * 1200 * 60 / $kvt) + ($ges27UrtaChirchiq633[2] * 1200 * 60 / $kvt);
            $ges27UrtaChirchiqAggregateTrue = ($ges27UrtaChirchiq273[2] > 0 ? 1 : 0) + ($ges27UrtaChirchiq297[2] > 0 ? 1 : 0) + ($ges27UrtaChirchiq321[2] > 0 ? 1 : 0);
            $ges27UrtaChirchiqAggregateFalse = ($ges27UrtaChirchiq273[2] <= 0 ? 1 : 0) + ($ges27UrtaChirchiq297[2] <= 0 ? 1 : 0) + ($ges27UrtaChirchiq321[2] <= 0 ? 1 : 0);
            //28
            $ges28UrtaChirchiq730 = $this->getValue($dataUrtachirchiq, "G730");
            $ges28UrtaChirchiq729 = $this->getValue($dataUrtachirchiq, "G729");
            $ges28UrtaChirchiq754 = $this->getValue($dataUrtachirchiq, "G754");
            $ges28UrtaChirchiq753 = $this->getValue($dataUrtachirchiq, "G753");
            $ges28UrtaChirchiq874 = $this->getValue($dataUrtachirchiq, "G874");
            $ges28UrtaChirchiq873 = $this->getValue($dataUrtachirchiq, "G873");
            $ges28UrtaChirchiq825 = $this->getValue($dataUrtachirchiq, "G825");
            $ges28UrtaChirchiq777 = $this->getValue($dataUrtachirchiq, "G777");
            $ges28UrtaChirchiq801 = $this->getValue($dataUrtachirchiq, "G801");
            $ges28UrtaChirchiq657 = $this->getValue($dataUrtachirchiq, "G657");
            $ges28UrtaChirchiq659 = $this->getValue($dataUrtachirchiq, "G659");
            $ges28UrtaChirchiq681 = $this->getValue($dataUrtachirchiq, "G681");
            $ges28UrtaChirchiq683 = $this->getValue($dataUrtachirchiq, "G683");
            $ges28UrtaChirchiq705 = $this->getValue($dataUrtachirchiq, "G705");
            $ges28UrtaChirchiq707 = $this->getValue($dataUrtachirchiq, "G707");

            $set28UrtaChirchiq730 = $ges28UrtaChirchiq730[2] * 660000 / $CONST;
            $set28UrtaChirchiq729 = $ges28UrtaChirchiq729[2] * 660000 / $CONST;
            $set28UrtaChirchiq754 = $ges28UrtaChirchiq754[2] * 660000 / $CONST;
            $set28UrtaChirchiq753 = $ges28UrtaChirchiq753[2] * 660000 / $CONST;
            $set28UrtaChirchiq874 = $ges28UrtaChirchiq874[2] * 2400 / $CONST;
            $set28UrtaChirchiq873 = $ges28UrtaChirchiq873[2] * 2400 / $CONST;
            $set28UrtaChirchiq825 = $ges28UrtaChirchiq825[2] * 1200 / $kvt;
            $set28UrtaChirchiq777 = $ges28UrtaChirchiq777[2] * 200 / $kvt;
            $set28UrtaChirchiq801 = $ges28UrtaChirchiq801[2] * 200 / $kvt;
            $power28UrtaChirchiq657 = $ges28UrtaChirchiq657[2] * 60000 / $CONST;//active
            $reactive28UrtaChirchiq659 = $ges28UrtaChirchiq659[2] * 60000 / $CONST;//reactive
            $power28UrtaChirchiq681 = $ges28UrtaChirchiq681[2] * 60000 / $CONST;//active
            $reactive28UrtaChirchiq683 = $ges28UrtaChirchiq683[2] * 60000 / $CONST;//reactive
            $power28UrtaChirchiq705 = $ges28UrtaChirchiq705[2] * 60000 / $CONST;//active
            $reactive28UrtaChirchiq707 = $ges28UrtaChirchiq707[2] * 60000 / $CONST;//reactive
            $ges28UrtaChirchiqActive = $power28UrtaChirchiq657 + $power28UrtaChirchiq681 + $power28UrtaChirchiq705;
            $ges28UrtaChirchiqReactive = $reactive28UrtaChirchiq659 + $reactive28UrtaChirchiq683 + $reactive28UrtaChirchiq707;
            $ges28UrtaChirchiqActiveOut = $set28UrtaChirchiq730 + $set28UrtaChirchiq754 + $set28UrtaChirchiq873;
            $ges28UrtaChirchiqActiveIn = $set28UrtaChirchiq729 + $set28UrtaChirchiq753 + $set28UrtaChirchiq874;
            $ges28UrtaChirchiqOwnNeeds = $set28UrtaChirchiq825 + $set28UrtaChirchiq777 + $set28UrtaChirchiq801;
            $ges28UrtaChirchiqAggregateTrue =
                ($ges28UrtaChirchiq657[2] > 0 ? 1 : 0) +
                ($ges28UrtaChirchiq681[2] > 0 ? 1 : 0) +
                ($ges28UrtaChirchiq705[2] > 0 ? 1 : 0);
            $ges28UrtaChirchiqAggregateFalse =
                ($ges28UrtaChirchiq657[2] <= 0 ? 1 : 0) +
                ($ges28UrtaChirchiq681[2] <= 0 ? 1 : 0) +
                ($ges28UrtaChirchiq705[2] <= 0 ? 1 : 0);
            $activeUrtachirchiq = $ges6UrtaChirchiqActive + $ges27UrtaChirchiqActive + $ges28UrtaChirchiqActive;
            $reactiveUrtachirchiq = $ges6UrtaChirchiqReactive + $ges27UrtaChirchiqReactive + $ges28UrtaChirchiqReactive;
            $activeOutUrtachirchiq = $ges6UrtaChirchiqActiveOut + $ges27UrtaChirchiqActiveOut + $ges28UrtaChirchiqActiveOut;
            $activeInUrtachirchiq = $ges6UrtaChirchiqActiveIn + $ges27UrtaChirchiqActiveIn + $ges28UrtaChirchiqActiveIn;
            $ownNeedsUrtachirchiq = $ges6UrtaChirchiqOwnNeeds + $ges27UrtaChirchiqOwnNeeds + $ges28UrtaChirchiqOwnNeeds;
            $trueUrtachirchiq = $ges6UrtaChirchiqAggregateTrue + $ges27UrtaChirchiqAggregateTrue + $ges28UrtaChirchiqAggregateTrue;
            $errorUrtachirchiq = 0;
            $falseUrtachirchiq = $ges6UrtaChirchiqAggregateFalse + $ges27UrtaChirchiqAggregateFalse + $ges28UrtaChirchiqAggregateFalse - $errorUrtachirchiq;
        } catch (\Exception $e) {
            $activeUrtachirchiq = 0;
            $reactiveUrtachirchiq = 0;
            $activeOutUrtachirchiq = 0;
            $activeInUrtachirchiq = 0;
            $ownNeedsUrtachirchiq = 0;
            $trueUrtachirchiq = 0;
            $errorUrtachirchiq = 0;
            $falseUrtachirchiq = 0;
        }

        /*Chirchiq*/
        try {
            $dataChirchiq = $this->fetchData("http://user:hrU_s20r@192.168.40.215:10206/crq?req=current");//Chirchiq
            $ges7Chirchiq378 = $this->getValue($dataChirchiq, "G378");
            $ges7Chirchiq333 = $this->getValue($dataChirchiq, "G333");
            $ges7Chirchiq423 = $this->getValue($dataChirchiq, "G423");
            $ges7Chirchiq393 = $this->getValue($dataChirchiq, "G393");
            $ges7Chirchiq408 = $this->getValue($dataChirchiq, "G408");
            $ges7Chirchiq348 = $this->getValue($dataChirchiq, "G348");
            $ges7Chirchiq363 = $this->getValue($dataChirchiq, "G363");
            $ges7Chirchiq438 = $this->getValue($dataChirchiq, "G438");
            $ges7Chirchiq453 = $this->getValue($dataChirchiq, "G453");
            $ges7Chirchiq273 = $this->getValue($dataChirchiq, "G273");
            $ges7Chirchiq274 = $this->getValue($dataChirchiq, "G274");
            $ges7Chirchiq288 = $this->getValue($dataChirchiq, "G288");
            $ges7Chirchiq289 = $this->getValue($dataChirchiq, "G289");
            $ges7Chirchiq303 = $this->getValue($dataChirchiq, "G303");
            $ges7Chirchiq304 = $this->getValue($dataChirchiq, "G304");
            $ges7Chirchiq318 = $this->getValue($dataChirchiq, "G318");
            $ges7Chirchiq319 = $this->getValue($dataChirchiq, "G319");
            $set7Chirchiq378 = $ges7Chirchiq378[2] * 42000 / $CONST;
            $set7Chirchiq333 = $ges7Chirchiq333[2] * 42000 / $CONST;
            $set7Chirchiq423 = $ges7Chirchiq423[2] * 28000 / $CONST;
            $set7Chirchiq393 = $ges7Chirchiq393[2] * 14000 / $CONST;
            $set7Chirchiq408 = $ges7Chirchiq408[2] * 28000 / $CONST;
            $set7Chirchiq348 = $ges7Chirchiq348[2] * 42000 / $CONST;
            $set7Chirchiq363 = $ges7Chirchiq363[2] * 42000 / $CONST;
            $set7Chirchiq438 = $ges7Chirchiq438[2] * 120 / $kvt;
            $set7Chirchiq453 = $ges7Chirchiq453[2] * 120 / $kvt;
            $power7Chirchiq273 = $ges7Chirchiq273[2] * 40000 / $CONST;//active
            $reactive7Chirchiq274 = $ges7Chirchiq274[2] * 40000 / $CONST;//reactive
            $power7Chirchiq288 = $ges7Chirchiq288[2] * 40000 / $CONST;//active
            $reactive7Chirchiq289 = $ges7Chirchiq289[2] * 40000 / $CONST;//reactive
            $power7Chirchiq303 = $ges7Chirchiq303[2] * 40000 / $CONST;//active
            $reactive7Chirchiq304 = $ges7Chirchiq304[2] * 40000 / $CONST;//reactive
            $power7Chirchiq318 = $ges7Chirchiq318[2] * 40000 / $CONST;//active
            $reactive7Chirchiq319 = $ges7Chirchiq319[2] * 40000 / $CONST;//reactive
            $ges7ChirchiqActive = $power7Chirchiq273 + $power7Chirchiq288 + $power7Chirchiq303 + $power7Chirchiq318;
            $ges7ChirchiqReactive = $reactive7Chirchiq274 + $reactive7Chirchiq289 + $reactive7Chirchiq304 + $reactive7Chirchiq319;
            $ges7ChirchiqActiveOut = ((-1) * $set7Chirchiq378 > 0 ? $set7Chirchiq378 : 0) +
                ((-1) * $set7Chirchiq333 > 0 ? $set7Chirchiq333 : 0) +
                ((-1) * $set7Chirchiq423 > 0 ? $set7Chirchiq423 : 0) +
                ((-1) * $set7Chirchiq393 > 0 ? $set7Chirchiq393 : 0) +
                ((-1) * $set7Chirchiq408 > 0 ? $set7Chirchiq408 : 0) +
                ((-1) * $set7Chirchiq348 > 0 ? $set7Chirchiq348 : 0) +
                ((-1) * $set7Chirchiq363 > 0 ? $set7Chirchiq363 : 0);
            $ges7ChirchiqActiveIn = ((-1) * $set7Chirchiq378 < 0 ? $set7Chirchiq378 : 0) +
                ((-1) * $set7Chirchiq333 < 0 ? $set7Chirchiq333 : 0) +
                ((-1) * $set7Chirchiq423 < 0 ? $set7Chirchiq423 : 0) +
                ((-1) * $set7Chirchiq393 < 0 ? $set7Chirchiq393 : 0) +
                ((-1) * $set7Chirchiq408 < 0 ? $set7Chirchiq408 : 0) +
                ((-1) * $set7Chirchiq348 < 0 ? $set7Chirchiq348 : 0) +
                ((-1) * $set7Chirchiq363 < 0 ? $set7Chirchiq363 : 0);
            $ges7ChirchiqOwnNeeds = $set7Chirchiq438 + $set7Chirchiq453;
            $ges7ChirchiqAggregateTrue = ($ges7Chirchiq273[2] > 0 ? 1 : 0) + ($ges7Chirchiq288[2] > 0 ? 1 : 0) + ($ges7Chirchiq303[2] > 0 ? 1 : 0) + ($ges7Chirchiq318[2] > 0 ? 1 : 0);
            $ges7ChirchiqAggregateError = 0;
            $ges7ChirchiqAggregateFalse = ($ges7Chirchiq273[2] <= 0 ? 1 : 0) + ($ges7Chirchiq288[2] <= 0 ? 1 : 0) + ($ges7Chirchiq303[2] <= 0 ? 1 : 0) + ($ges7Chirchiq318[2] <= 0 ? 1 : 0) - $ges7ChirchiqAggregateError;
            $ges8Chirchiq573 = $this->getValue($dataChirchiq, "G573");
            $ges8Chirchiq588 = $this->getValue($dataChirchiq, "G588");
            $ges8Chirchiq603 = $this->getValue($dataChirchiq, "G603");
            $ges8Chirchiq543 = $this->getValue($dataChirchiq, "G543");
            $ges8Chirchiq558 = $this->getValue($dataChirchiq, "G558");
            $ges8Chirchiq528 = $this->getValue($dataChirchiq, "G528");
            $ges8Chirchiq468 = $this->getValue($dataChirchiq, "G468");
            $ges8Chirchiq469 = $this->getValue($dataChirchiq, "G469");
            $ges8Chirchiq483 = $this->getValue($dataChirchiq, "G483");
            $ges8Chirchiq484 = $this->getValue($dataChirchiq, "G484");
            $ges8Chirchiq498 = $this->getValue($dataChirchiq, "G498");
            $ges8Chirchiq499 = $this->getValue($dataChirchiq, "G499");
            $ges8Chirchiq513 = $this->getValue($dataChirchiq, "G513");
            $ges8Chirchiq514 = $this->getValue($dataChirchiq, "G514");
            $ges8Chirchiq618 = $this->getValue($dataChirchiq, "G618");
            $ges8Chirchiq633 = $this->getValue($dataChirchiq, "G633");
            $set8Chirchiq573 = $ges8Chirchiq573[2] * 10500 / $CONST;
            $set8Chirchiq588 = $ges8Chirchiq588[2] * 28000 / $CONST;
            $set8Chirchiq603 = $ges8Chirchiq603[2] * 7200 / $CONST;
            $set8Chirchiq543 = $ges8Chirchiq543[2] * 165000 / $CONST;
            $set8Chirchiq558 = $ges8Chirchiq558[2] * 165000 / $CONST;
            $set8Chirchiq528 = $ges8Chirchiq528[2] * 165000 / $CONST;
            $set8Chirchiq618 = $ges8Chirchiq618[2] * 60 / $kvt;
            $set8Chirchiq633 = $ges8Chirchiq633[2] * 120 / $kvt;
            $power8Chirchiq468 = $ges8Chirchiq468[2] * 30000 / $CONST;//active
            $reactive8Chirchiq469 = $ges8Chirchiq469[2] * 30000 / $CONST;//reactive
            $power8Chirchiq483 = $ges8Chirchiq483[2] * 30000 / $CONST;//active
            $reactive8Chirchiq484 = $ges8Chirchiq484[2] * 30000 / $CONST;//reactive
            $power8Chirchiq498 = $ges8Chirchiq498[2] * 30000 / $CONST;//active
            $reactive8Chirchiq499 = $ges8Chirchiq499[2] * 30000 / $CONST;//reactive
            $power8Chirchiq513 = $ges8Chirchiq513[2] * 40000 / $CONST;//active
            $reactive8Chirchiq514 = $ges8Chirchiq514[2] * 40000 / $CONST;//reactive
            $ges8ChirchiqActive = $power8Chirchiq468 + $power8Chirchiq483 + $power8Chirchiq498 + $power8Chirchiq513;
            $ges8ChirchiqReactive = $reactive8Chirchiq469 + $reactive8Chirchiq484 + $reactive8Chirchiq499 + $reactive8Chirchiq514;
            $ges8ChirchiqActiveOut = (-1 * $set8Chirchiq573 > 0 ? $set8Chirchiq573 : 0) +
                (-1 * $set8Chirchiq588 > 0 ? $set8Chirchiq588 : 0) +
                (-1 * $set8Chirchiq603 > 0 ? $set8Chirchiq603 : 0) +
                (-1 * $set8Chirchiq543 > 0 ? $set8Chirchiq543 : 0) +
                (-1 * $set8Chirchiq558 > 0 ? $set8Chirchiq558 : 0) +
                (-1 * $set8Chirchiq528 > 0 ? $set8Chirchiq528 : 0);
            $ges8ChirchiqActiveIn = (-1 * $set8Chirchiq573 < 0 ? $set8Chirchiq573 : 0) +
                (-1 * $set8Chirchiq588 < 0 ? $set8Chirchiq588 : 0) +
                (-1 * $set8Chirchiq603 < 0 ? $set8Chirchiq603 : 0) +
                (-1 * $set8Chirchiq543 < 0 ? $set8Chirchiq543 : 0) +
                (-1 * $set8Chirchiq558 < 0 ? $set8Chirchiq558 : 0) +
                (-1 * $set8Chirchiq528 < 0 ? $set8Chirchiq528 : 0);
            $ges8ChirchiqOwnNeeds = $set8Chirchiq618 + $set8Chirchiq633;
            $ges8ChirchiqAggregateTrue = ($ges8Chirchiq468[2] > 0 ? 1 : 0) + ($ges8Chirchiq483[2] > 0 ? 1 : 0) + ($ges8Chirchiq498[2] > 0 ? 1 : 0) + ($ges8Chirchiq513[2] > 0 ? 1 : 0);
            $ges8ChirchiqAggregateError = 0;
            $ges8ChirchiqAggregateFalse = ($ges8Chirchiq468[2] <= 0 ? 1 : 0) + ($ges8Chirchiq483[2] <= 0 ? 1 : 0) + ($ges8Chirchiq498[2] <= 0 ? 1 : 0) + ($ges8Chirchiq513[2] <= 0 ? 1 : 0) - $ges8ChirchiqAggregateError;
            $ges10Chirchiq654 = $this->getValue($dataChirchiq, "G654");
            $ges10Chirchiq656 = $this->getValue($dataChirchiq, "G656");
            $ges10Chirchiq677 = $this->getValue($dataChirchiq, "G677");
            $ges10Chirchiq679 = $this->getValue($dataChirchiq, "G679");
            $ges10Chirchiq700 = $this->getValue($dataChirchiq, "G700");
            $ges10Chirchiq701 = $this->getValue($dataChirchiq, "G701");
            $ges10Chirchiq723 = $this->getValue($dataChirchiq, "G723");
            $ges10Chirchiq724 = $this->getValue($dataChirchiq, "G724");
            $ges10Chirchiq770 = $this->getValue($dataChirchiq, "G770");
            $ges10Chirchiq769 = $this->getValue($dataChirchiq, "G769");
            $ges10Chirchiq747 = $this->getValue($dataChirchiq, "G747");
            $ges10Chirchiq746 = $this->getValue($dataChirchiq, "G746");
            $ges10Chirchiq816 = $this->getValue($dataChirchiq, "G816");
            $ges10Chirchiq815 = $this->getValue($dataChirchiq, "G815");
            $ges10Chirchiq793 = $this->getValue($dataChirchiq, "G793");
            $ges10Chirchiq792 = $this->getValue($dataChirchiq, "G792");
            $ges10Chirchiq839 = $this->getValue($dataChirchiq, "G839");
            $ges10Chirchiq838 = $this->getValue($dataChirchiq, "G838");
            $ges10Chirchiq861 = $this->getValue($dataChirchiq, "G861");
            $ges10Chirchiq884 = $this->getValue($dataChirchiq, "G884");
            $set10Chirchiq700 = $ges10Chirchiq700[2] * 210000 / $CONST;
            $set10Chirchiq701 = $ges10Chirchiq701[2] * 210000 / $CONST;
            $set10Chirchiq723 = $ges10Chirchiq723[2] * 210000 / $CONST;
            $set10Chirchiq724 = $ges10Chirchiq724[2] * 210000 / $CONST;
            $set10Chirchiq770 = $ges10Chirchiq770[2] * 210000 / $CONST;
            $set10Chirchiq769 = $ges10Chirchiq769[2] * 210000 / $CONST;
            $set10Chirchiq747 = $ges10Chirchiq747[2] * 210000 / $CONST;
            $set10Chirchiq746 = $ges10Chirchiq746[2] * 210000 / $CONST;
            $set10Chirchiq816 = $ges10Chirchiq816[2] * 210000 / $CONST;
            $set10Chirchiq815 = $ges10Chirchiq815[2] * 210000 / $CONST;
            $set10Chirchiq793 = $ges10Chirchiq793[2] * 210000 / $CONST;
            $set10Chirchiq792 = $ges10Chirchiq792[2] * 210000 / $CONST;
            $set10Chirchiq839 = $ges10Chirchiq839[2] * 140000 / $CONST;
            $set10Chirchiq838 = $ges10Chirchiq838[2] * 140000 / $CONST;
            $set10Chirchiq861 = $ges10Chirchiq861[2] * 350 / $kvt;
            $set10Chirchiq884 = $ges10Chirchiq884[2] * 350 / $kvt;
            $power10Chirchiq654 = $ges10Chirchiq654[2] * 96000 / $CONST;//active
            $reactive10Chirchiq656 = $ges10Chirchiq656[2] * 96000 / $CONST;//reactive
            $power10Chirchiq677 = $ges10Chirchiq677[2] * 250000 / $CONST;//active
            $reactive10Chirchiq679 = $ges10Chirchiq679[2] * 250000 / $CONST;//reactive
            $ges10ChirchiqActive = $power10Chirchiq654 + $power10Chirchiq677;
            $ges10ChirchiqReactive = $reactive10Chirchiq656 + $reactive10Chirchiq679;
            $ges10ChirchiqActiveOut = ($set10Chirchiq701) +
                ($set10Chirchiq723) +
                ($set10Chirchiq746) +
                ($set10Chirchiq770) +
                ($set10Chirchiq793) +
                ($set10Chirchiq816) +
                ($set10Chirchiq839);
            $ges10ChirchiqActiveIn = ($set10Chirchiq700) +
                ($set10Chirchiq724) +
                ($set10Chirchiq747) +
                ($set10Chirchiq769) +
                ($set10Chirchiq792) +
                ($set10Chirchiq815) +
                ($set10Chirchiq838);
            $ges10ChirchiqOwnNeeds = $set10Chirchiq861 + $set10Chirchiq884;
            $ges10ChirchiqAggregateTrue = ($ges10Chirchiq654[2] > 0 ? 1 : 0) + ($ges10Chirchiq677[2] > 0 ? 1 : 0);
            $ges10ChirchiqAggregateError = 0;
            $ges10ChirchiqAggregateFalse = ($ges10Chirchiq654[2] <= 0 ? 1 : 0) + ($ges10Chirchiq677[2] <= 0 ? 1 : 0) - $ges10ChirchiqAggregateError;
            $ges46Chirchiq12 = $this->getValue($dataChirchiq, "G12");
            $ges46Chirchiq39 = $this->getValue($dataChirchiq, "G39");
            $ges46Chirchiq147 = $this->getValue($dataChirchiq, "G147");
            $ges46Chirchiq120 = $this->getValue($dataChirchiq, "G120");
            $ges46Chirchiq201 = $this->getValue($dataChirchiq, "G201");
            $ges46Chirchiq202 = $this->getValue($dataChirchiq, "G202");
            $ges46Chirchiq174 = $this->getValue($dataChirchiq, "G174");
            $ges46Chirchiq175 = $this->getValue($dataChirchiq, "G175");
            $ges46Chirchiq66 = $this->getValue($dataChirchiq, "G66");
            $ges46Chirchiq67 = $this->getValue($dataChirchiq, "G67");
            $ges46Chirchiq93 = $this->getValue($dataChirchiq, "G93");
            $ges46Chirchiq94 = $this->getValue($dataChirchiq, "G94");
            $set46Chirchiq12 = $ges46Chirchiq12[2] * 21000 / $CONST;
            $set46Chirchiq39 = $ges46Chirchiq39[2] * 21000 / $CONST;
            $set46Chirchiq147 = $ges46Chirchiq147[2] * 100 / $kvt;
            $set46Chirchiq120 = $ges46Chirchiq120[2] * 100 / $kvt;
            $power46Chirchiq201 = $ges46Chirchiq201[2] * 3780 / $CONST;//active
            $reactive46Chirchiq202 = $ges46Chirchiq202[2] * 3780 / $CONST;//reactive
            $power46Chirchiq174 = $ges46Chirchiq174[2] * 3780 / $CONST;//active
            $reactive46Chirchiq175 = $ges46Chirchiq175[2] * 3780 / $CONST;//reactive
            $power46Chirchiq93 = $ges46Chirchiq93[2] * 3780 / $CONST;//active
            $reactive46Chirchiq94 = $ges46Chirchiq94[2] * 3780 / $CONST;//reactive
            $power46Chirchiq66 = $ges46Chirchiq66[2] * 3780 / $CONST;//active
            $reactive46Chirchiq67 = $ges46Chirchiq67[2] * 3780 / $CONST;//reactive
            $ges46ChirchiqActive = $power46Chirchiq201 + $power46Chirchiq174 + $power46Chirchiq93 + $power46Chirchiq66;
            $ges46ChirchiqReactive = $reactive46Chirchiq202 + $reactive46Chirchiq175 + $reactive46Chirchiq94 + $reactive46Chirchiq67;
            $ges46ChirchiqActiveOut = ($set46Chirchiq12 > 0 ? $set46Chirchiq12 : 0) + ($set46Chirchiq39 > 0 ? $set46Chirchiq39 : 0);
            $ges46ChirchiqActiveIn = ($set46Chirchiq12 < 0 ? $set46Chirchiq12 : 0) + ($set46Chirchiq39 < 0 ? $set46Chirchiq39 : 0);
            $ges46ChirchiqOwnNeeds = $set46Chirchiq147 + $set46Chirchiq120;
            $ges46ChirchiqAggregateTrue = ($ges46Chirchiq201[2] > 0 ? 1 : 0) + ($ges46Chirchiq174[2] > 0 ? 1 : 0) + ($ges46Chirchiq93[2] > 0 ? 1 : 0) + ($ges46Chirchiq66[2] > 0 ? 1 : 0);
            $ges46ChirchiqAggregateError = 1;
            $ges46ChirchiqAggregateFalse = ($ges46Chirchiq201[2] <= 0 ? 1 : 0) + ($ges46Chirchiq174[2] <= 0 ? 1 : 0) + ($ges46Chirchiq93[2] <= 0 ? 1 : 0) + ($ges46Chirchiq66[2] <= 0 ? 1 : 0) - $ges46ChirchiqAggregateError;
            $activeChirchiq = $ges7ChirchiqActive + $ges8ChirchiqActive + $ges10ChirchiqActive + $ges46ChirchiqActive;
            $reactiveChirchiq = $ges7ChirchiqReactive + $ges8ChirchiqReactive + $ges10ChirchiqReactive + $ges46ChirchiqReactive;
            $activeOutChirchiq = $ges7ChirchiqActiveOut + $ges8ChirchiqActiveOut + $ges10ChirchiqActiveOut + $ges46ChirchiqActiveOut;
            $activeInChirchiq = $ges7ChirchiqActiveIn + $ges8ChirchiqActiveIn + $ges10ChirchiqActiveIn + $ges46ChirchiqActiveIn;
            $ownNeedsChirchiq = $ges7ChirchiqOwnNeeds + $ges8ChirchiqOwnNeeds + $ges10ChirchiqOwnNeeds + $ges46ChirchiqOwnNeeds;
            $trueChirchiq = $ges7ChirchiqAggregateTrue + $ges8ChirchiqAggregateTrue + $ges10ChirchiqAggregateTrue + $ges46ChirchiqAggregateTrue;
            $errorChirchiq = $ges7ChirchiqAggregateError + $ges8ChirchiqAggregateError + $ges10ChirchiqAggregateError + $ges46ChirchiqAggregateError;
            $falseChirchiq = $ges7ChirchiqAggregateFalse + $ges8ChirchiqAggregateFalse + $ges10ChirchiqAggregateFalse + $ges46ChirchiqAggregateFalse;
        } catch (\Exception $e) {
            $activeChirchiq = 0;
            $reactiveChirchiq = 0;
            $activeOutChirchiq = 0;
            $activeInChirchiq = 0;
            $ownNeedsChirchiq = 0;
            $trueChirchiq = 0;
            $errorChirchiq = 0;
            $falseChirchiq = 0;
        }

        //Farxod
        try {
            $dataFarxod = $this->fetchData("http://user:ah_Rtnmi@192.168.40.215:10182/crq?req=current");
            $ges16Farxod97 = $this->getValue($dataFarxod, "G97");
            $ges16Farxod96 = $this->getValue($dataFarxod, "G96");
            $ges16Farxod102 = $this->getValue($dataFarxod, "G102");
            $ges16Farxod103 = $this->getValue($dataFarxod, "G103");
            $ges16Farxod84 = $this->getValue($dataFarxod, "G84");
            $ges16Farxod85 = $this->getValue($dataFarxod, "G85");
            $ges16Farxod90 = $this->getValue($dataFarxod, "G90");
            $ges16Farxod91 = $this->getValue($dataFarxod, "G91");
            $ges16Farxod66 = $this->getValue($dataFarxod, "G66");
            $ges16Farxod67 = $this->getValue($dataFarxod, "G67");
            $ges16Farxod72 = $this->getValue($dataFarxod, "G72");
            $ges16Farxod73 = $this->getValue($dataFarxod, "G73");
            $ges16Farxod156 = $this->getValue($dataFarxod, "G156");
            $ges16Farxod157 = $this->getValue($dataFarxod, "G157");
            $ges16Farxod150 = $this->getValue($dataFarxod, "G150");
            $ges16Farxod151 = $this->getValue($dataFarxod, "G151");
            $ges16Farxod144 = $this->getValue($dataFarxod, "G144");
            $ges16Farxod145 = $this->getValue($dataFarxod, "G145");
            $ges16Farxod138 = $this->getValue($dataFarxod, "G138");
            $ges16Farxod139 = $this->getValue($dataFarxod, "G139");
            $ges16Farxod132 = $this->getValue($dataFarxod, "G132");
            $ges16Farxod133 = $this->getValue($dataFarxod, "G133");
            $ges16Farxod10 = $this->getValue($dataFarxod, "G10");
            $ges16Farxod12 = $this->getValue($dataFarxod, "G12");
            $ges16Farxod23 = $this->getValue($dataFarxod, "G23");
            $ges16Farxod21 = $this->getValue($dataFarxod, "G21");
            $ges16Farxod32 = $this->getValue($dataFarxod, "G32");
            $ges16Farxod34 = $this->getValue($dataFarxod, "G34");
            $ges16Farxod43 = $this->getValue($dataFarxod, "G43");
            $ges16Farxod45 = $this->getValue($dataFarxod, "G45");
            $ges16Farxod168 = $this->getValue($dataFarxod, "G168");
            $ges16Farxod198 = $this->getValue($dataFarxod, "G198");

            $set16Farxod66 = $ges16Farxod66[2] * 660000 / $CONST;//
            $set16Farxod67 = $ges16Farxod67[2] * 660000 / $CONST;//
            $set16Farxod72 = $ges16Farxod72[2] * 660000 / $CONST;//
            $set16Farxod73 = $ges16Farxod73[2] * 660000 / $CONST;//
            $set16Farxod84 = $ges16Farxod84[2] * 660000 / $CONST;//
            $set16Farxod85 = $ges16Farxod85[2] * 660000 / $CONST;//
            $set16Farxod90 = $ges16Farxod90[2] * 660000 / $CONST;//
            $set16Farxod91 = $ges16Farxod91[2] * 660000 / $CONST;//
            $set16Farxod96 = $ges16Farxod96[2] * 660000 / $CONST;//
            $set16Farxod97 = $ges16Farxod97[2] * 660000 / $CONST;//
            $set16Farxod102 = $ges16Farxod102[2] * 660000 / $CONST;//
            $set16Farxod103 = $ges16Farxod103[2] * 660000 / $CONST;//
            $set16Farxod132 = $ges16Farxod132[2] * 56000 / $CONST;//
            $set16Farxod133 = $ges16Farxod133[2] * 56000 / $CONST;//
            $set16Farxod138 = $ges16Farxod138[2] * 56000 / $CONST;//
            $set16Farxod139 = $ges16Farxod139[2] * 56000 / $CONST;//
            $set16Farxod144 = $ges16Farxod144[2] * 56000 / $CONST;//
            $set16Farxod145 = $ges16Farxod145[2] * 56000 / $CONST;//
            $set16Farxod150 = $ges16Farxod150[2] * 56000 / $CONST;//
            $set16Farxod151 = $ges16Farxod151[2] * 56000 / $CONST;//
            $set16Farxod156 = $ges16Farxod156[2] * 56000 / $CONST;//
            $set16Farxod157 = $ges16Farxod157[2] * 56000 / $CONST;//
            $set16Farxod168 = $ges16Farxod168[2] * 4000 / $kvt;//
            $set16Farxod198 = $ges16Farxod198[2] * 4000 / $kvt;//
            $power16Farxod10 = $ges16Farxod10[2] * 50000 / $CONST;//active
            $reactive16Farxod12 = $ges16Farxod12[2] * 50000 / $CONST;//reactive
            $power16Farxod21 = $ges16Farxod21[2] * 50000 / $CONST;//active
            $reactive16Farxod23 = $ges16Farxod23[2] * 50000 / $CONST;//reactive
            $power16Farxod32 = $ges16Farxod32[2] * 50000 / $CONST;//active
            $reactive16Farxod34 = $ges16Farxod34[2] * 50000 / $CONST;//reactive
            $power16Farxod43 = $ges16Farxod43[2] * 50000 / $CONST;//active
            $reactive16Farxod45 = $ges16Farxod45[2] * 50000 / $CONST;//reactive

            $ges16FarxodActive = $power16Farxod10 + $power16Farxod21 + $power16Farxod32 + $power16Farxod43;
            $ges16FarxodReactive = $reactive16Farxod12 + $reactive16Farxod23 + $reactive16Farxod34 + $reactive16Farxod45;
            $ges16FarxodActiveOut = $set16Farxod67 + $set16Farxod73 + $set16Farxod85 + $set16Farxod91 + $set16Farxod97 + $set16Farxod103 + $set16Farxod133 + $set16Farxod139 + $set16Farxod145 + $set16Farxod151 + $set16Farxod157;
            $ges16FarxodActiveIn = $set16Farxod66 + $set16Farxod72 + $set16Farxod84 + $set16Farxod90 + $set16Farxod96 + $set16Farxod102 + $set16Farxod132 + $set16Farxod138 + $set16Farxod144 + $set16Farxod150 + $set16Farxod156;
            $ges16FarxodOwnNeeds = $set16Farxod168 + $set16Farxod198;
            $ges16FarxodAggregateTrue = ($ges16Farxod10[2] > 0 ? 1 : 0) +
                ($ges16Farxod21[2] > 0 ? 1 : 0) +
                ($ges16Farxod32[2] > 0 ? 1 : 0) +
                ($ges16Farxod43[2] > 0 ? 1 : 0);
            $ges16FarxodAggregateError = 0;
            $ges16FarxodAggregateFalse = ($ges16Farxod10[2] <= 0 ? 1 : 0) +
                ($ges16Farxod21[2] <= 0 ? 1 : 0) +
                ($ges16Farxod32[2] <= 0 ? 1 : 0) +
                ($ges16Farxod43[2] <= 0 ? 1 : 0) - $ges16FarxodAggregateError;

            $gesZominFarxod315 = $this->getValue($dataFarxod, "G315");
            $gesZominFarxod316 = $this->getValue($dataFarxod, "G316");
            $gesZominFarxod273 = $this->getValue($dataFarxod, "G273");
            $gesZominFarxod288 = $this->getValue($dataFarxod, "G288");
            $gesZominFarxod239 = $this->getValue($dataFarxod, "G239");
            $gesZominFarxod240 = $this->getValue($dataFarxod, "G240");
            $gesZominFarxod258 = $this->getValue($dataFarxod, "G258");
            $gesZominFarxod259 = $this->getValue($dataFarxod, "G259");

            $setZominFarxod315 = (float)$gesZominFarxod315[2] * 80 / $CONST;//
            $setZominFarxod316 = (float)$gesZominFarxod316[2] * 80 / $CONST;//

            $setZominFarxod273 = $gesZominFarxod273[2] * 1 / $kvt;//
            $setZominFarxod288 = $gesZominFarxod288[2] * 1 / $kvt;//

            $powerZominFarxod239 = $gesZominFarxod239[2] * 80 / $CONST;//active
            $reactiveZominFarxod240 = $gesZominFarxod240[2] * 80 / $CONST;//reactive

            $powerZominFarxod258 = $gesZominFarxod258[2] * 80 / $CONST;//active
            $reactiveZominFarxod259 = $gesZominFarxod259[2] * 80 / $CONST;//reactive

            $gesZominFarxodActive = $powerZominFarxod239 + $powerZominFarxod258;
            $gesZominFarxodReactive = $reactiveZominFarxod240 + $reactiveZominFarxod259;
            $gesZominFarxodActiveOut = $setZominFarxod315;
            $gesZominFarxodActiveIn = $setZominFarxod316;
            $gesZominFarxodOwnNeeds = $setZominFarxod273 + $setZominFarxod288;
            $gesZominFarxodAggregateTrue = ($gesZominFarxod239[2] > 0 ? 1 : 0) +
                ($gesZominFarxod258[2] > 0 ? 1 : 0);
            $gesZominFarxodAggregateError = 0;
            $gesZominFarxodAggregateFalse = ($gesZominFarxod239[2] <= 0 ? 1 : 0) +
                ($gesZominFarxod258[2] <= 0 ? 1 : 0) - $gesZominFarxodAggregateError;

            $activeFarxod = $ges16FarxodActive + $gesZominFarxodActive;
            $reactiveFarxod = $ges16FarxodReactive + $gesZominFarxodReactive;
            $activeOutFarxod = $ges16FarxodActiveOut + $gesZominFarxodActiveOut;
            $activeInFarxod = $ges16FarxodActiveIn + $gesZominFarxodActiveIn;
            $ownNeedsFarxod = $ges16FarxodOwnNeeds + $gesZominFarxodOwnNeeds;
            $trueFarxod = $ges16FarxodAggregateTrue + $gesZominFarxodAggregateTrue;
            $errorFarxod = $ges16FarxodAggregateError + $gesZominFarxodAggregateError;
            $falseFarxod = $ges16FarxodAggregateFalse + $gesZominFarxodAggregateFalse - $errorFarxod;
        } catch (\Exception $e) {
            $activeFarxod = 0;
            $reactiveFarxod = 0;
            $activeOutFarxod = 0;
            $activeInFarxod = 0;
            $ownNeedsFarxod = 0;
            $trueFarxod = 0;
            $errorFarxod = 0;
            $falseFarxod = 0;
        }

        /*Qodiriya*/
        try {
            $dataQodiriya = $this->fetchData("http://user:R_kSa_ir@192.168.40.215:10174/crq?req=current");
            $ges15Qodiriya836 = $this->getValue($dataQodiriya, "G836");
            $ges15Qodiriya851 = $this->getValue($dataQodiriya, "G851");
            $ges15Qodiriya866 = $this->getValue($dataQodiriya, "G866");
            $ges15Qodiriya881 = $this->getValue($dataQodiriya, "G881");
            $ges15Qodiriya902 = $this->getValue($dataQodiriya, "G902");
            $ges15Qodiriya925 = $this->getValue($dataQodiriya, "G925");
            $ges15Qodiriya791 = $this->getValue($dataQodiriya, "G791");
            $ges15Qodiriya792 = $this->getValue($dataQodiriya, "G792");
            $ges15Qodiriya806 = $this->getValue($dataQodiriya, "G806");
            $ges15Qodiriya807 = $this->getValue($dataQodiriya, "G807");
            $ges15Qodiriya821 = $this->getValue($dataQodiriya, "G821");

            $set15Qodiriya836 = $ges15Qodiriya836[2] * 42000 / $CONST;
            $set15Qodiriya851 = $ges15Qodiriya851[2] * 42000 / $CONST;
            $set15Qodiriya866 = $ges15Qodiriya866[2] * 42000 / $CONST;
            $set15Qodiriya881 = $ges15Qodiriya881[2] * 7200 / $CONST;
            $set15Qodiriya902 = $ges15Qodiriya902[2] * 2400 / $CONST;
            $set15Qodiriya925 = $ges15Qodiriya925[2] * 900 / $CONST;

            $power15Qodiriya791 = $ges15Qodiriya791[2] * 9600 / $CONST;//active
            $reactive15Qodiriya792 = $ges15Qodiriya792[2] * 9600 / $CONST;//reactive

            $power15Qodiriya806 = $ges15Qodiriya806[2] * 9600 / $CONST;//active
            $reactive15Qodiriya807 = $ges15Qodiriya807[2] * 9600 / $CONST;//reactive

            $set15Qodiriya821 = $ges15Qodiriya821[2] * 60 / $kvt;

            $ges15QodiriyaActive = $power15Qodiriya791 + $power15Qodiriya806;
            $ges15QodiriyaReactive = $reactive15Qodiriya792 + $reactive15Qodiriya807;
            $ges15QodiriyaActiveOut = (-1 * $set15Qodiriya836 > 0 ? -1 * $set15Qodiriya836 : 0) +
                (-1 * $set15Qodiriya851 > 0 ? -1 * $set15Qodiriya851 : 0) +
                (-1 * $set15Qodiriya866 > 0 ? -1 * $set15Qodiriya866 : 0) +
                $set15Qodiriya881 +
                $set15Qodiriya902 +
                $set15Qodiriya925;
            $ges15QodiriyaActiveIn = (-1 * $set15Qodiriya836 < 0 ? -1 * $set15Qodiriya836 : 0) +
                (-1 * $set15Qodiriya851 < 0 ? -1 * $set15Qodiriya851 : 0) +
                (-1 * $set15Qodiriya866 < 0 ? -1 * $set15Qodiriya866 : 0);
            $ges15QodiriyaOwnNeeds = $set15Qodiriya821;
            $ges15QodiriyaAggregateTrue = ($ges15Qodiriya791[2] > 0 ? 1 : 0) +
                ($ges15Qodiriya806[2] > 0 ? 1 : 0);
            $ges15QodiriyaAggregateError = 0;
            $ges15QodiriyaAggregateFalse = ($ges15Qodiriya791[2] <= 0 ? 1 : 0) +
                ($ges15Qodiriya806[2] <= 0 ? 1 : 0) - $ges15QodiriyaAggregateError;

            $ges12Qodiriya655 = $this->getValue($dataQodiriya, "G655");
            $ges12Qodiriya640 = $this->getValue($dataQodiriya, "G640");
            $ges12Qodiriya670 = $this->getValue($dataQodiriya, "G670");
            $ges12Qodiriya625 = $this->getValue($dataQodiriya, "G625");
            $ges12Qodiriya715 = $this->getValue($dataQodiriya, "G715");
            $ges12Qodiriya730 = $this->getValue($dataQodiriya, "G730");
            $ges12Qodiriya751 = $this->getValue($dataQodiriya, "G751");
            $ges12Qodiriya775 = $this->getValue($dataQodiriya, "G775");
            $ges12Qodiriya774 = $this->getValue($dataQodiriya, "G774");
            $ges12Qodiriya700 = $this->getValue($dataQodiriya, "G700");
            $ges12Qodiriya685 = $this->getValue($dataQodiriya, "G685");
            $ges12Qodiriya610 = $this->getValue($dataQodiriya, "G610");
            $ges12Qodiriya611 = $this->getValue($dataQodiriya, "G611");

            $set12Qodiriya655 = $ges12Qodiriya655[2] * 42000 / $CONST;//42000
            $set12Qodiriya640 = $ges12Qodiriya640[2] * 21000 / $CONST;//21000
            $set12Qodiriya670 = $ges12Qodiriya670[2] * 21000 / $CONST;//21000
            $set12Qodiriya625 = $ges12Qodiriya625[2] * 21000 / $CONST;//21000
            $set12Qodiriya715 = $ges12Qodiriya715[2] * 3600 / $CONST;//3600
            $set12Qodiriya730 = $ges12Qodiriya730[2] * 3600 / $CONST;//3600
            $set12Qodiriya751 = $ges12Qodiriya751[2] * 3600 / $CONST;//3600
            $set12Qodiriya775 = $ges12Qodiriya775[2] * 3600 / $CONST;//3600
            $set12Qodiriya774 = $ges12Qodiriya774[2] * 3600 / $CONST;//3600

            $set12Qodiriya700 = $ges12Qodiriya700[2] * 1800 / $CONST;//1800
            $set12Qodiriya685 = $ges12Qodiriya685[2] * 1800 / $CONST;//1800

            $power12Qodiriya610 = $ges12Qodiriya610[2] * 18000 / $CONST;//active
            $reactive12Qodiriya611 = $ges12Qodiriya611[2] * 18000 / $CONST;//reactive

            $ges12QodiriyaActive = $power12Qodiriya610;
            $ges12QodiriyaReactive = $reactive12Qodiriya611;
            $ges12QodiriyaActiveOut = (-1 * $set12Qodiriya655 > 0 ? $set12Qodiriya655 : 0) +
                (-1 * $set12Qodiriya670 > 0 ? $set12Qodiriya670 : 0) +
                $set12Qodiriya625 +
                $set12Qodiriya640 +
                $set12Qodiriya715 +
                $set12Qodiriya730 +
                $set12Qodiriya751 +
                $set12Qodiriya774;
            $ges12QodiriyaActiveIn = (-1 * $set12Qodiriya655 <= 0 ? $set12Qodiriya655 : 0) +
                (-1 * $set12Qodiriya670 <= 0 ? $set12Qodiriya670 : 0) +
                $set12Qodiriya775;
            $ges12QodiriyaOwnNeeds = $set12Qodiriya700 + $set12Qodiriya685;
            $ges12QodiriyaAggregateTrue = ($ges12Qodiriya610[2] > 0 ? 1 : 0);
            $ges12QodiriyaAggregateError = 0;
            $ges12QodiriyaAggregateFalse = ($ges12Qodiriya610[2] <= 0 ? 1 : 0) - $ges12QodiriyaAggregateError;

            $ges3Qodiriya475 = $this->getValue($dataQodiriya, "G475");
            $ges3Qodiriya490 = $this->getValue($dataQodiriya, "G490");
            $ges3Qodiriya460 = $this->getValue($dataQodiriya, "G460");
            $ges3Qodiriya505 = $this->getValue($dataQodiriya, "G505");
            $ges3Qodiriya400 = $this->getValue($dataQodiriya, "G400");
            $ges3Qodiriya401 = $this->getValue($dataQodiriya, "G401");
            $ges3Qodiriya415 = $this->getValue($dataQodiriya, "G415");
            $ges3Qodiriya416 = $this->getValue($dataQodiriya, "G416");
            $ges3Qodiriya430 = $this->getValue($dataQodiriya, "G430");
            $ges3Qodiriya431 = $this->getValue($dataQodiriya, "G431");
            $ges3Qodiriya445 = $this->getValue($dataQodiriya, "G445");
            $ges3Qodiriya446 = $this->getValue($dataQodiriya, "G446");

            $set3Qodiriya505 = $ges3Qodiriya505[2] * 10000 / $CONST;
            $set3Qodiriya475 = $ges3Qodiriya475[2] * 10000 / $CONST;
            $set3Qodiriya490 = $ges3Qodiriya490[2] * 10000 / $CONST;

            $set3Qodiriya460 = $ges3Qodiriya460[2] * 1 / $kvt;

            $power3Qodiriya400 = $ges3Qodiriya400[2] * 10000 / $CONST;//active
            $reactive3Qodiriya401 = $ges3Qodiriya401[2] * 10000 / $CONST;//reactive

            $power3Qodiriya415 = $ges3Qodiriya415[2] * 10000 / $CONST;//active
            $reactive3Qodiriya416 = $ges3Qodiriya416[2] * 10000 / $CONST;//reactive

            $power3Qodiriya430 = $ges3Qodiriya430[2] * 10000 / $CONST;//active
            $reactive3Qodiriya431 = $ges3Qodiriya431[2] * 10000 / $CONST;//reactive

            $power3Qodiriya445 = $ges3Qodiriya445[2] * 10000 / $CONST;//active
            $reactive3Qodiriya446 = $ges3Qodiriya446[2] * 10000 / $CONST;//reactive

            $ges3QodiriyaActive = $power3Qodiriya400 + $power3Qodiriya415 + $power3Qodiriya430 + $power3Qodiriya445;
            $ges3QodiriyaReactive = $reactive3Qodiriya401 + $reactive3Qodiriya416 + $reactive3Qodiriya431 + $reactive3Qodiriya446;
            $ges3QodiriyaActiveOut = $set3Qodiriya475 +
                $set3Qodiriya490 +
                ($set3Qodiriya505 > 0 ? $set3Qodiriya505 : 0);
            $ges3QodiriyaActiveIn = $set3Qodiriya505 < 0 ? $set3Qodiriya505 : 0;
            $ges3QodiriyaOwnNeeds = $set3Qodiriya460;
            $ges3QodiriyaAggregateTrue = ($ges3Qodiriya400[2] > 0 ? 1 : 0) +
                ($ges3Qodiriya430[2] > 0 ? 1 : 0) +
                ($ges3Qodiriya445[2] > 0 ? 1 : 0) +
                ($ges3Qodiriya415[2] > 0 ? 1 : 0);
            $ges3QodiriyaAggregateError = 0;
            $ges3QodiriyaAggregateFalse = ($ges3Qodiriya400[2] <= 0 ? 1 : 0) +
                ($ges3Qodiriya430[2] <= 0 ? 1 : 0) +
                ($ges3Qodiriya445[2] <= 0 ? 1 : 0) +
                ($ges3Qodiriya415[2] <= 0 ? 1 : 0) - $ges3QodiriyaAggregateError;

            $ges11Qodiriya580 = $this->getValue($dataQodiriya, "G580");
            $ges11Qodiriya551 = $this->getValue($dataQodiriya, "G551");
            $ges11Qodiriya565 = $this->getValue($dataQodiriya, "G565");
            $ges11Qodiriya595 = $this->getValue($dataQodiriya, "G595");
            $ges11Qodiriya520 = $this->getValue($dataQodiriya, "G520");
            $ges11Qodiriya521 = $this->getValue($dataQodiriya, "G521");
            $ges11Qodiriya966 = $this->getValue($dataQodiriya, "G966");

            $set11Qodiriya551 = $ges11Qodiriya551[2] * 21000 / $CONST;
            $set11Qodiriya565 = $ges11Qodiriya565[2] * 42000 / $CONST;
            $set11Qodiriya580 = $ges11Qodiriya580[2] * 21000 / $CONST;
            $set11Qodiriya595 = $ges11Qodiriya595[2] * 10500 / $CONST;

            $set11Qodiriya966 = $ges11Qodiriya966[2] * 350 / $kvt;

            $power11Qodiriya520 = $ges11Qodiriya520[2] * 18000 / $CONST;//active
            $reactive11Qodiriya521 = $ges11Qodiriya521[2] * 18000 / $CONST;//reactive

            $ges11QodiriyaActive = $power11Qodiriya520;
            $ges11QodiriyaReactive = $reactive11Qodiriya521;
            $ges11QodiriyaActiveOut = (-1 * $set11Qodiriya551 > 0 ? -1 * $set11Qodiriya551 : 0) +
                (-1 * $set11Qodiriya565 > 0 ? -1 * $set11Qodiriya565 : 0) +
                (-1 * $set11Qodiriya580 > 0 ? -1 * $set11Qodiriya580 : 0) +
                (-1 * $set11Qodiriya595 > 0 ? -1 * $set11Qodiriya595 : 0);
            $ges11QodiriyaActiveIn = (-1 * $set11Qodiriya551 < 0 ? -1 * $set11Qodiriya551 : 0) +
                (-1 * $set11Qodiriya565 < 0 ? -1 * $set11Qodiriya565 : 0) +
                (-1 * $set11Qodiriya580 < 0 ? -1 * $set11Qodiriya580 : 0) +
                (-1 * $set11Qodiriya595 < 0 ? -1 * $set11Qodiriya595 : 0);
            $ges11QodiriyaOwnNeeds = $set11Qodiriya966;
            $ges11QodiriyaAggregateTrue = ($ges11Qodiriya520[2] > 0 ? 1 : 0);
            $ges11QodiriyaAggregateError = 0;
            $ges11QodiriyaAggregateFalse = ($ges11Qodiriya520[2] <= 0 ? 1 : 0) - $ges11QodiriyaAggregateError;

            $ges3aQodiriya309 = $this->getValue($dataQodiriya, "G309");
            $ges3aQodiriya255 = $this->getValue($dataQodiriya, "G255");
            $ges3aQodiriya228 = $this->getValue($dataQodiriya, "G228");
            $ges3aQodiriya174 = $this->getValue($dataQodiriya, "G174");
            $ges3aQodiriya360 = $this->getValue($dataQodiriya, "G360");
            $ges3aQodiriya383 = $this->getValue($dataQodiriya, "G383");
            $ges3aQodiriya147 = $this->getValue($dataQodiriya, "G147");
            $ges3aQodiriya12 = $this->getValue($dataQodiriya, "G12");
            $ges3aQodiriya120 = $this->getValue($dataQodiriya, "G120");
            $ges3aQodiriya93 = $this->getValue($dataQodiriya, "G93");
            $ges3aQodiriya39 = $this->getValue($dataQodiriya, "G39");
            $ges3aQodiriya40 = $this->getValue($dataQodiriya, "G40");
            $ges3aQodiriya66 = $this->getValue($dataQodiriya, "G66");
            $ges3aQodiriya67 = $this->getValue($dataQodiriya, "G67");

            $set3aQodiriya174 = $ges3aQodiriya174[2] * 42000 / $CONST;//42000
            $set3aQodiriya228 = $ges3aQodiriya228[2] * 42000 / $CONST;//42000
            $set3aQodiriya255 = $ges3aQodiriya255[2] * 42000 / $CONST;//42000
            $set3aQodiriya309 = $ges3aQodiriya309[2] * 42000 / $CONST;//42000
            $set3aQodiriya360 = $ges3aQodiriya360[2] * 2400 / $CONST;//2400
            $set3aQodiriya383 = $ges3aQodiriya383[2] * 2400 / $CONST;//2400

            $set3aQodiriya12 = $ges3aQodiriya12[2] * 630 / $kvt;//630
            $set3aQodiriya93 = $ges3aQodiriya93[2] * 630 / $kvt;//630
            $set3aQodiriya120 = $ges3aQodiriya120[2] * 240 / $kvt;//240
            $set3aQodiriya147 = $ges3aQodiriya147[2] * 240 / $kvt;//240

            $power3aQodiriya39 = $ges3aQodiriya39[2] * 16800 / $CONST;//active
            $reactive3aQodiriya40 = $ges3aQodiriya40[2] * 16800 / $CONST;//reactive

            $power3aQodiriya66 = $ges3aQodiriya66[2] * 16800 / $CONST;//active
            $reactive3aQodiriya67 = $ges3aQodiriya67[2] * 16800 / $CONST;//reactive

            $ges3aQodiriyaActive = $power3aQodiriya39 + $power3aQodiriya66;
            $ges3aQodiriyaReactive = $reactive3aQodiriya40 + $reactive3aQodiriya67;
            $ges3aQodiriyaActiveOut = (-1 * $set3aQodiriya174 > 0 ? $set3aQodiriya174 : 0) +
                (-1 * $set3aQodiriya228 > 0 ? $set3aQodiriya228 : 0) +
                (-1 * $set3aQodiriya255 > 0 ? $set3aQodiriya255 : 0) +
                (-1 * $set3aQodiriya309 > 0 ? $set3aQodiriya309 : 0) +
                $set3aQodiriya360 +
                $set3aQodiriya383;
            $ges3aQodiriyaActiveIn = (-1 * $set3aQodiriya174 <= 0 ? $set3aQodiriya174 : 0) +
                (-1 * $set3aQodiriya228 <= 0 ? $set3aQodiriya228 : 0) +
                (-1 * $set3aQodiriya255 <= 0 ? $set3aQodiriya255 : 0) +
                (-1 * $set3aQodiriya309 <= 0 ? $set3aQodiriya309 : 0);
            $ges3aQodiriyaOwnNeeds = $set3aQodiriya12 + $set3aQodiriya93 + $set3aQodiriya120 + $set3aQodiriya147;
            $ges3aQodiriyaAggregateTrue = ($ges3aQodiriya39[2] > 0 ? 1 : 0) + ($ges3aQodiriya66[2] > 0 ? 1 : 0);
            $ges3aQodiriyaAggregateError = 0;
            $ges3aQodiriyaAggregateFalse = ($ges3aQodiriya39[2] <= 0 ? 1 : 0) + ($ges3aQodiriya66[2] <= 0 ? 1 : 0) - $ges3aQodiriyaAggregateError;

            $activeQodiriya = $ges15QodiriyaActive + $ges12QodiriyaActive + $ges3QodiriyaActive + $ges11QodiriyaActive + $ges3aQodiriyaActive;
            $reactiveQodiriya = $ges15QodiriyaReactive + $ges12QodiriyaReactive + $ges3QodiriyaReactive + $ges11QodiriyaReactive + $ges3aQodiriyaReactive;
            $activeOutQodiriya = $ges15QodiriyaActiveOut + $ges12QodiriyaActiveOut + $ges3QodiriyaActiveOut + $ges11QodiriyaActiveOut + $ges3aQodiriyaActiveOut;
            $activeInQodiriya = $ges15QodiriyaActiveIn + $ges12QodiriyaActiveIn + $ges3QodiriyaActiveIn + $ges11QodiriyaActiveIn + $ges3aQodiriyaActiveIn;
            $ownNeedsQodiriya = $ges15QodiriyaOwnNeeds + $ges12QodiriyaOwnNeeds + $ges3QodiriyaOwnNeeds + $ges11QodiriyaOwnNeeds + $ges3aQodiriyaOwnNeeds;
            $trueQodiriya = $ges15QodiriyaAggregateTrue + $ges12QodiriyaAggregateTrue + $ges3QodiriyaAggregateTrue + $ges11QodiriyaAggregateTrue + $ges3aQodiriyaAggregateTrue;
            $errorQodiriya = $ges15QodiriyaAggregateError + $ges12QodiriyaAggregateError + $ges3QodiriyaAggregateError + $ges11QodiriyaAggregateError + $ges3aQodiriyaAggregateError;
            $falseQodiriya = $ges15QodiriyaAggregateFalse + $ges12QodiriyaAggregateFalse + $ges3QodiriyaAggregateFalse + $ges11QodiriyaAggregateFalse + $ges3aQodiriyaAggregateFalse - $errorQodiriya;
        } catch (\Exception $e) {
            $activeQodiriya = 0;
            $reactiveQodiriya = 0;
            $activeOutQodiriya = 0;
            $activeInQodiriya = 0;
            $ownNeedsQodiriya = 0;
            $trueQodiriya = 0;
            $errorQodiriya = 0;
            $falseQodiriya = 0;
        }

        /*Qamchiq*/
        try {
            $dataQamchiq = $this->fetchData("http://user:kase_10w@192.168.40.215:10150/crq?req=current");
            $ges42Qamchiq363 = $this->getValue($dataQamchiq, "G363");
            $ges42Qamchiq390 = $this->getValue($dataQamchiq, "G390");
            $ges42Qamchiq228 = $this->getValue($dataQamchiq, "G228");
            $ges42Qamchiq336 = $this->getValue($dataQamchiq, "G336");
            $ges42Qamchiq309 = $this->getValue($dataQamchiq, "G309");
            $ges42Qamchiq417 = $this->getValue($dataQamchiq, "G417");
            $ges42Qamchiq174 = $this->getValue($dataQamchiq, "G174");
            $ges42Qamchiq175 = $this->getValue($dataQamchiq, "G175");
            $ges42Qamchiq201 = $this->getValue($dataQamchiq, "G201");
            $ges42Qamchiq202 = $this->getValue($dataQamchiq, "G202");
            $ges42Qamchiq255 = $this->getValue($dataQamchiq, "G255");
            $ges42Qamchiq256 = $this->getValue($dataQamchiq, "G256");
            $ges42Qamchiq282 = $this->getValue($dataQamchiq, "G282");
            $ges42Qamchiq283 = $this->getValue($dataQamchiq, "G283");

            $set42Qamchiq390 = $ges42Qamchiq390[2] * 56000 / $CONST;
            $set42Qamchiq363 = $ges42Qamchiq363[2] * 56000 / $CONST;

            $set42Qamchiq228 = $ges42Qamchiq228[2] * 1050 / $kvt;
            $set42Qamchiq309 = $ges42Qamchiq309[2] * 150 / $kvt;
            $set42Qamchiq336 = $ges42Qamchiq336[2] * 150 / $kvt;
            $set42Qamchiq417 = $ges42Qamchiq417[2] * 1 / $kvt;

            $power42Qamchiq174 = $ges42Qamchiq174[2] * 21000 / $CONST;//active
            $reactive42Qamchiq175 = $ges42Qamchiq175[2] * 21000 / $CONST;//reactive

            $power42Qamchiq201 = $ges42Qamchiq201[2] * 5250 / $CONST;//active
            $reactive42Qamchiq202 = $ges42Qamchiq202[2] * 5250 / $CONST;//reactive

            $power42Qamchiq255 = $ges42Qamchiq255[2] * 5250 / $CONST;//active
            $reactive42Qamchiq256 = $ges42Qamchiq256[2] * 5250 / $CONST;//reactive

            $power42Qamchiq282 = $ges42Qamchiq282[2] * 21000 / $CONST;//active
            $reactive42Qamchiq283 = $ges42Qamchiq283[2] * 21000 / $CONST;//reactive

            $ges42QamchiqActive = $power42Qamchiq174 + $power42Qamchiq201 + $power42Qamchiq255 + $power42Qamchiq282;
            $ges42QamchiqReactive = $reactive42Qamchiq175 + $reactive42Qamchiq202 + $reactive42Qamchiq256 + $reactive42Qamchiq283;
            $ges42QamchiqActiveOut = ($set42Qamchiq390 > 0 ? $set42Qamchiq390 : 0) + ($set42Qamchiq363 > 0 ? $set42Qamchiq363 : 0);
            $ges42QamchiqActiveIn = ($set42Qamchiq390 < 0 ? $set42Qamchiq390 : 0) + ($set42Qamchiq363 < 0 ? $set42Qamchiq363 : 0);
            $ges42QamchiqOwnNeeds = $set42Qamchiq228 + $set42Qamchiq309 + $set42Qamchiq336 + $set42Qamchiq417;
            $ges42QamchiqAggregateTrue = ($ges42Qamchiq174[2] > 0 ? 1 : 0) + ($ges42Qamchiq201[2] > 0 ? 1 : 0) + ($ges42Qamchiq255[2] > 0 ? 1 : 0) + ($ges42Qamchiq282[2] > 0 ? 1 : 0);
            $ges42QamchiqAggregateError = 0;
            $ges42QamchiqAggregateFalse = ($ges42Qamchiq174[2] <= 0 ? 1 : 0) + ($ges42Qamchiq201[2] <= 0 ? 1 : 0) + ($ges42Qamchiq255[2] <= 0 ? 1 : 0) + ($ges42Qamchiq282[2] <= 0 ? 1 : 0) - $ges42QamchiqAggregateError;
        } catch (\Exception $e) {
            $ges42QamchiqActive = 0;
            $ges42QamchiqReactive = 0;
            $ges42QamchiqActiveOut = 0;
            $ges42QamchiqActiveIn = 0;
            $ges42QamchiqOwnNeeds = 0;
            $ges42QamchiqAggregateTrue = 0;
            $ges42QamchiqAggregateError = 0;
            $ges42QamchiqAggregateFalse = 0;
        }

        /*Қуйи бўз сув*/
        try {
            $dataQuyibuzsuv = $this->fetchData("http://user:N6_3jf8g@192.168.40.215:10190/crq?req=current");
            $ges14Quyibuzsuv66 = $this->getValue($dataQuyibuzsuv, "G66");
            $ges14Quyibuzsuv93 = $this->getValue($dataQuyibuzsuv, "G93");
            $ges14Quyibuzsuv147 = $this->getValue($dataQuyibuzsuv, "G147");
            $ges14Quyibuzsuv120 = $this->getValue($dataQuyibuzsuv, "G120");
            $ges14Quyibuzsuv174 = $this->getValue($dataQuyibuzsuv, "G174");
            $ges14Quyibuzsuv201 = $this->getValue($dataQuyibuzsuv, "G201");
            $ges14Quyibuzsuv228 = $this->getValue($dataQuyibuzsuv, "G228");
            $ges14Quyibuzsuv416 = $this->getValue($dataQuyibuzsuv, "G416");
            $ges14Quyibuzsuv255 = $this->getValue($dataQuyibuzsuv, "G255");
            $ges14Quyibuzsuv282 = $this->getValue($dataQuyibuzsuv, "G282");
            $ges14Quyibuzsuv12 = $this->getValue($dataQuyibuzsuv, "G12");
            $ges14Quyibuzsuv13 = $this->getValue($dataQuyibuzsuv, "G13");
            $ges14Quyibuzsuv39 = $this->getValue($dataQuyibuzsuv, "G39");
            $ges14Quyibuzsuv40 = $this->getValue($dataQuyibuzsuv, "G40");

            $set14Quyibuzsuv66 = $ges14Quyibuzsuv66[2] * 42000 / $CONST;
            $set14Quyibuzsuv93 = $ges14Quyibuzsuv93[2] * 42000 / $CONST;
            $set14Quyibuzsuv147 = $ges14Quyibuzsuv147[2] * 42000 / $CONST;
            $set14Quyibuzsuv120 = $ges14Quyibuzsuv120[2] * 42000 / $CONST;
            $set14Quyibuzsuv174 = $ges14Quyibuzsuv174[2] * 42000 / $CONST;
            $set14Quyibuzsuv201 = $ges14Quyibuzsuv201[2] * 7560 / $CONST;
            $set14Quyibuzsuv228 = $ges14Quyibuzsuv228[2] * 630 / $CONST;
            $set14Quyibuzsuv416 = $ges14Quyibuzsuv416[2] * 3780 / $CONST;

            $set14Quyibuzsuv255 = $ges14Quyibuzsuv255[2] * 630 / $kvt;
            $set14Quyibuzsuv282 = $ges14Quyibuzsuv282[2] * 630 / $kvt;
            $set14Quyibuzsuv310 = 0;//$ges14Quyibuzsuv310[2] * 20 / $kvt;
            $set14Quyibuzsuv350 = 0;//$ges14Quyibuzsuv350[2] * 20 / $kvt;

            $power14Quyibuzsuv12 = $ges14Quyibuzsuv12[2] * 12600 / $CONST;//active
            $reactive14Quyibuzsuv13 = $ges14Quyibuzsuv13[2] * 12600 / $CONST;//reactive
            $power14Quyibuzsuv39 = $ges14Quyibuzsuv39[2] * 12600 / $CONST;//active
            $reactive14Quyibuzsuv40 = $ges14Quyibuzsuv40[2] * 12600 / $CONST;//reactive

            $ges14QuyibuzsuvActive = $power14Quyibuzsuv12 + $power14Quyibuzsuv39;
            $ges14QuyibuzsuvReactive = $reactive14Quyibuzsuv13 + $reactive14Quyibuzsuv40;
            $ges14QuyibuzsuvActiveOut = (-1 * $set14Quyibuzsuv66 > 0 ? -1 * $set14Quyibuzsuv66 : 0) +
                (-1 * $set14Quyibuzsuv93 > 0 ? -1 * $set14Quyibuzsuv93 : 0) +
                (-1 * $set14Quyibuzsuv147 > 0 ? -1 * $set14Quyibuzsuv147 : 0) +
                (-1 * $set14Quyibuzsuv120 > 0 ? -1 * $set14Quyibuzsuv120 : 0) +
                (-1 * $set14Quyibuzsuv174 > 0 ? -1 * $set14Quyibuzsuv174 : 0) +
                $set14Quyibuzsuv201 +
                $set14Quyibuzsuv228 +
                $set14Quyibuzsuv416;
            $ges14QuyibuzsuvActiveIn = (-1 * $set14Quyibuzsuv66 < 0 ? -1 * $set14Quyibuzsuv66 : 0) +
                (-1 * $set14Quyibuzsuv93 < 0 ? -1 * $set14Quyibuzsuv93 : 0) +
                (-1 * $set14Quyibuzsuv147 < 0 ? -1 * $set14Quyibuzsuv147 : 0) +
                (-1 * $set14Quyibuzsuv120 < 0 ? -1 * $set14Quyibuzsuv120 : 0) +
                (-1 * $set14Quyibuzsuv174 < 0 ? -1 * $set14Quyibuzsuv174 : 0);
            $ges14QuyibuzsuvOwnNeeds = $set14Quyibuzsuv255 + $set14Quyibuzsuv282 + $set14Quyibuzsuv310 + $set14Quyibuzsuv350;
            $ges14QuyibuzsuvAggregateTrue = ($ges14Quyibuzsuv12[2] > 0 ? 1 : 0) + ($ges14Quyibuzsuv39[2] > 0 ? 1 : 0);
            $ges14QuyibuzsuvAggregateError = 0;
            $ges14QuyibuzsuvAggregateFalse = ($ges14Quyibuzsuv12[2] <= 0 ? 1 : 0) + ($ges14Quyibuzsuv39[2] <= 0 ? 1 : 0) - $ges14QuyibuzsuvAggregateError;

            $ges18Quyibuzsuv589 = $this->getValue($dataQuyibuzsuv, "G589");
            $ges18Quyibuzsuv566 = $this->getValue($dataQuyibuzsuv, "G566");
            $ges18Quyibuzsuv612 = $this->getValue($dataQuyibuzsuv, "G612");
            $ges18Quyibuzsuv543 = $this->getValue($dataQuyibuzsuv, "G543");
            $ges18Quyibuzsuv658 = $this->getValue($dataQuyibuzsuv, "G658");
            $ges18Quyibuzsuv635 = $this->getValue($dataQuyibuzsuv, "G635");
            $ges18Quyibuzsuv513 = $this->getValue($dataQuyibuzsuv, "G513");
            $ges18Quyibuzsuv480 = $this->getValue($dataQuyibuzsuv, "G480");
            $ges18Quyibuzsuv481 = $this->getValue($dataQuyibuzsuv, "G481");
            $ges18Quyibuzsuv457 = $this->getValue($dataQuyibuzsuv, "G457");
            $ges18Quyibuzsuv458 = $this->getValue($dataQuyibuzsuv, "G458");
            $ges18Quyibuzsuv434 = $this->getValue($dataQuyibuzsuv, "G434");
            $ges18Quyibuzsuv435 = $this->getValue($dataQuyibuzsuv, "G435");
            $set18Quyibuzsuv543 = $ges18Quyibuzsuv543[2] * 4800 / $CONST;
            $set18Quyibuzsuv566 = $ges18Quyibuzsuv566[2] * 21000 / $CONST;
            $set18Quyibuzsuv589 = $ges18Quyibuzsuv589[2] * 21000 / $CONST;
            $set18Quyibuzsuv612 = $ges18Quyibuzsuv612[2] * 14000 / $CONST;
            $set18Quyibuzsuv635 = $ges18Quyibuzsuv635[2] * 1200 / $CONST;
            $set18Quyibuzsuv658 = $ges18Quyibuzsuv658[2] * 1200 / $CONST;
            $set18Quyibuzsuv513 = $ges18Quyibuzsuv513[2] * 60 / $kvt;
            $power18Quyibuzsuv480 = $ges18Quyibuzsuv480[2] * 4800 / $CONST;//active
            $reactive18Quyibuzsuv481 = $ges18Quyibuzsuv481[2] * 4800 / $CONST;//reactive
            $power18Quyibuzsuv457 = $ges18Quyibuzsuv457[2] * 4800 / $CONST;//active
            $reactive18Quyibuzsuv458 = $ges18Quyibuzsuv458[2] * 4800 / $CONST;//reactive
            $power18Quyibuzsuv434 = $ges18Quyibuzsuv434[2] * 4800 / $CONST;//active
            $reactive18Quyibuzsuv435 = $ges18Quyibuzsuv435[2] * 4800 / $CONST;//reactive

            $ges18QuyibuzsuvActive = $power18Quyibuzsuv480 + $power18Quyibuzsuv457 + $power18Quyibuzsuv434;
            $ges18QuyibuzsuvReactive = $reactive18Quyibuzsuv481 + $reactive18Quyibuzsuv458 + $reactive18Quyibuzsuv435;
            $ges18QuyibuzsuvActiveOut = ($set18Quyibuzsuv589 > 0 ? $set18Quyibuzsuv589 : 0) +
                ($set18Quyibuzsuv566 > 0 ? $set18Quyibuzsuv566 : 0) +
                ($set18Quyibuzsuv612 > 0 ? $set18Quyibuzsuv612 : 0) +
                $set18Quyibuzsuv543 +
                $set18Quyibuzsuv658 +
                $set18Quyibuzsuv635;
            $ges18QuyibuzsuvActiveIn = ($set18Quyibuzsuv589 < 0 ? $set18Quyibuzsuv589 : 0) +
                ($set18Quyibuzsuv566 < 0 ? $set18Quyibuzsuv566 : 0) +
                ($set18Quyibuzsuv612 < 0 ? $set18Quyibuzsuv612 : 0);
            $ges18QuyibuzsuvOwnNeeds = $set18Quyibuzsuv513;
            $ges18QuyibuzsuvAggregateTrue = ($ges18Quyibuzsuv480[2] > 0 ? 1 : 0) + ($ges18Quyibuzsuv457[2] > 0 ? 1 : 0) + ($ges18Quyibuzsuv434[2] > 0 ? 1 : 0);
            $ges18QuyibuzsuvAggregateError = 0;
            $ges18QuyibuzsuvAggregateFalse = ($ges18Quyibuzsuv480[2] <= 0 ? 1 : 0) + ($ges18Quyibuzsuv457[2] <= 0 ? 1 : 0) + ($ges18Quyibuzsuv434[2] <= 0 ? 1 : 0) - $ges18QuyibuzsuvAggregateError;

            $ges19Quyibuzsuv859 = $this->getValue($dataQuyibuzsuv, "G859");
            $ges19Quyibuzsuv836 = $this->getValue($dataQuyibuzsuv, "G836");
            $ges19Quyibuzsuv916 = $this->getValue($dataQuyibuzsuv, "G916");
            $ges19Quyibuzsuv915 = $this->getValue($dataQuyibuzsuv, "G915");
            $ges19Quyibuzsuv882 = $this->getValue($dataQuyibuzsuv, "G882");
            $ges19Quyibuzsuv968 = $this->getValue($dataQuyibuzsuv, "G968");
            $ges19Quyibuzsuv945 = $this->getValue($dataQuyibuzsuv, "G945");
            $ges19Quyibuzsuv158 = $this->getValue($dataQuyibuzsuv, "B158");
            $ges19Quyibuzsuv157 = $this->getValue($dataQuyibuzsuv, "B157");
            $ges19Quyibuzsuv760 = $this->getValue($dataQuyibuzsuv, "G760");
            $ges19Quyibuzsuv813 = $this->getValue($dataQuyibuzsuv, "G813");
            $ges19Quyibuzsuv790 = $this->getValue($dataQuyibuzsuv, "G790");
            $ges19Quyibuzsuv1024 = $this->getValue($dataQuyibuzsuv, "G1024");
            $ges19Quyibuzsuv704 = $this->getValue($dataQuyibuzsuv, "G704");
            $ges19Quyibuzsuv705 = $this->getValue($dataQuyibuzsuv, "G705");
            $ges19Quyibuzsuv727 = $this->getValue($dataQuyibuzsuv, "G727");
            $ges19Quyibuzsuv728 = $this->getValue($dataQuyibuzsuv, "G728");

            $set19Quyibuzsuv836 = $ges19Quyibuzsuv836[2] * 132000 / $CONST;
            $set19Quyibuzsuv859 = $ges19Quyibuzsuv859[2] * 132000 / $CONST;
            $set19Quyibuzsuv882 = $ges19Quyibuzsuv882[2] * 132000 / $CONST;
            $set19Quyibuzsuv915 = $ges19Quyibuzsuv915[2] * 132000 / $CONST;
            $set19Quyibuzsuv916 = $ges19Quyibuzsuv916[2] * 132000 / $CONST;
            $set19Quyibuzsuv945 = $ges19Quyibuzsuv945[2] * 132000 / $CONST;
            $set19Quyibuzsuv968 = $ges19Quyibuzsuv968[2] * 132000 / $CONST;
            $set19Quyibuzsuv157 = $ges19Quyibuzsuv157[2] * 21 / $CONST;
            $set19Quyibuzsuv158 = $ges19Quyibuzsuv158[2] * 21 / $CONST;

            $set19Quyibuzsuv760 = $ges19Quyibuzsuv760[2] * 120 / $kvt;
            $set19Quyibuzsuv790 = $ges19Quyibuzsuv790[2] * 1200 / $kvt;
            $set19Quyibuzsuv813 = $ges19Quyibuzsuv813[2] * 1800 / $kvt;
            $set19Quyibuzsuv991 = 0;//$ges19Quyibuzsuv991[2] * 30 / $kvt;
            $set19Quyibuzsuv1024 = $ges19Quyibuzsuv1024[2] * 20 / $kvt;

            $power19Quyibuzsuv704 = $ges19Quyibuzsuv704[2] * 9600 / $CONST;//active
            $reactive19Quyibuzsuv705 = $ges19Quyibuzsuv705[2] * 9600 / $CONST;//reactive
            $power19Quyibuzsuv727 = $ges19Quyibuzsuv727[2] * 9600 / $CONST;//active
            $reactive19Quyibuzsuv728 = $ges19Quyibuzsuv728[2] * 9600 / $CONST;//reactive

            $ges19QuyibuzsuvActive = $power19Quyibuzsuv704 + $power19Quyibuzsuv727;
            $ges19QuyibuzsuvReactive = $reactive19Quyibuzsuv705 + $reactive19Quyibuzsuv728;
            $ges19QuyibuzsuvActiveOut = ($set19Quyibuzsuv836 > 0 ? $set19Quyibuzsuv836 : 0) +
                ($set19Quyibuzsuv859 > 0 ? $set19Quyibuzsuv859 : 0) +
                ($set19Quyibuzsuv882 > 0 ? $set19Quyibuzsuv882 : 0) +
                $set19Quyibuzsuv915 +
                ($set19Quyibuzsuv945 > 0 ? $set19Quyibuzsuv945 : 0) +
                ($set19Quyibuzsuv968 > 0 ? $set19Quyibuzsuv968 : 0) +
                ($set19Quyibuzsuv157 > 0 ? $set19Quyibuzsuv157 : 0) +
                ($set19Quyibuzsuv158 > 0 ? $set19Quyibuzsuv158 : 0);
            $ges19QuyibuzsuvActiveIn = ($set19Quyibuzsuv836 < 0 ? $set19Quyibuzsuv836 : 0) +
                ($set19Quyibuzsuv859 < 0 ? $set19Quyibuzsuv859 : 0) +
                ($set19Quyibuzsuv882 < 0 ? $set19Quyibuzsuv882 : 0) +
                $set19Quyibuzsuv916 +
                ($set19Quyibuzsuv945 < 0 ? $set19Quyibuzsuv945 : 0) +
                ($set19Quyibuzsuv968 < 0 ? $set19Quyibuzsuv968 : 0) +
                ($set19Quyibuzsuv157 < 0 ? $set19Quyibuzsuv157 : 0) +
                ($set19Quyibuzsuv158 < 0 ? $set19Quyibuzsuv158 : 0);
            $ges19QuyibuzsuvOwnNeeds = $set19Quyibuzsuv760 + $set19Quyibuzsuv790 + $set19Quyibuzsuv813 + $set19Quyibuzsuv991 + $set19Quyibuzsuv1024;
            $ges19QuyibuzsuvAggregateTrue = ($ges19Quyibuzsuv704[2] > 0 ? 1 : 0) + ($ges19Quyibuzsuv727[2] > 0 ? 1 : 0);
            $ges19QuyibuzsuvAggregateError = 1;
            $ges19QuyibuzsuvAggregateFalse = ($ges19Quyibuzsuv704[2] <= 0 ? 1 : 0) + ($ges19Quyibuzsuv727[2] <= 0 ? 1 : 0) - $ges19QuyibuzsuvAggregateError;

            $ges23Quyibuzsuv1301 = $this->getValue($dataQuyibuzsuv, "G1301");
            $ges23Quyibuzsuv1302 = $this->getValue($dataQuyibuzsuv, "G1302");
            $ges23Quyibuzsuv1611 = $this->getValue($dataQuyibuzsuv, "G1611");
            $ges23Quyibuzsuv1634 = $this->getValue($dataQuyibuzsuv, "G1634");
            $ges23Quyibuzsuv1657 = $this->getValue($dataQuyibuzsuv, "G1657");
            $ges23Quyibuzsuv1542 = $this->getValue($dataQuyibuzsuv, "G1542");
            $ges23Quyibuzsuv1588 = $this->getValue($dataQuyibuzsuv, "G1588");
            $ges23Quyibuzsuv1566 = $this->getValue($dataQuyibuzsuv, "G1566");
            $ges23Quyibuzsuv1427 = $this->getValue($dataQuyibuzsuv, "G1427");
            $ges23Quyibuzsuv1473 = $this->getValue($dataQuyibuzsuv, "G1473");
            $ges23Quyibuzsuv1450 = $this->getValue($dataQuyibuzsuv, "G1450");
            $ges23Quyibuzsuv1324 = $this->getValue($dataQuyibuzsuv, "G1324");
            $ges23Quyibuzsuv1325 = $this->getValue($dataQuyibuzsuv, "G1325");
            $ges23Quyibuzsuv1357 = $this->getValue($dataQuyibuzsuv, "G1357");
            $ges23Quyibuzsuv1397 = $this->getValue($dataQuyibuzsuv, "G1397");

            $set23Quyibuzsuv1427 = $ges23Quyibuzsuv1427[2] * 600 / $CONST;
            $set23Quyibuzsuv1450 = $ges23Quyibuzsuv1450[2] * 1200 / $CONST;
            $set23Quyibuzsuv1473 = $ges23Quyibuzsuv1473[2] * 3600 / $CONST;
            $set23Quyibuzsuv1542 = $ges23Quyibuzsuv1542[2] * 14000 / $CONST;
            $set23Quyibuzsuv1566 = $ges23Quyibuzsuv1566[2] * 14000 / $CONST;
            $set23Quyibuzsuv1588 = $ges23Quyibuzsuv1588[2] * 21000 / $CONST;
            $set23Quyibuzsuv1611 = $ges23Quyibuzsuv1611[2] * 33000 / $CONST;
            $set23Quyibuzsuv1634 = $ges23Quyibuzsuv1634[2] * 132000 / $CONST;
            $set23Quyibuzsuv1657 = $ges23Quyibuzsuv1657[2] * 132000 / $CONST;

            $set23Quyibuzsuv1357 = $ges23Quyibuzsuv1357[2] * 60 / $kvt;
            $set23Quyibuzsuv1397 = $ges23Quyibuzsuv1397[2] * 60 / $kvt;
            $set23Quyibuzsuv1680 = 0;//$ges23Quyibuzsuv1680[2] * 20 / $kvt;

            $power23Quyibuzsuv1301 = $ges23Quyibuzsuv1301[2] * 18000 / $CONST;//active
            $reactive23Quyibuzsuv1302 = $ges23Quyibuzsuv1302[2] * 18000 / $CONST;//reactive
            $power23Quyibuzsuv1324 = $ges23Quyibuzsuv1324[2] * 18000 / $CONST;//active
            $reactive23Quyibuzsuv1325 = $ges23Quyibuzsuv1325[2] * 18000 / $CONST;//reactive

            $ges23QuyibuzsuvActive = $power23Quyibuzsuv1301 + $power23Quyibuzsuv1324;
            $ges23QuyibuzsuvReactive = $reactive23Quyibuzsuv1302 + $reactive23Quyibuzsuv1325;
            $ges23QuyibuzsuvActiveOut = ($set23Quyibuzsuv1611 > 0 ? $set23Quyibuzsuv1611 : 0) +
                ($set23Quyibuzsuv1634 > 0 ? $set23Quyibuzsuv1634 : 0) +
                ($set23Quyibuzsuv1657 > 0 ? $set23Quyibuzsuv1657 : 0) +
                ($set23Quyibuzsuv1542 > 0 ? $set23Quyibuzsuv1542 : 0) +
                ($set23Quyibuzsuv1588 > 0 ? $set23Quyibuzsuv1588 : 0) +
                ($set23Quyibuzsuv1566 > 0 ? $set23Quyibuzsuv1566 : 0) +
                $set23Quyibuzsuv1473 + $set23Quyibuzsuv1427 + $set23Quyibuzsuv1450;
            $ges23QuyibuzsuvActiveIn = ($set23Quyibuzsuv1611 < 0 ? $set23Quyibuzsuv1611 : 0) +
                ($set23Quyibuzsuv1634 < 0 ? $set23Quyibuzsuv1634 : 0) +
                ($set23Quyibuzsuv1657 < 0 ? $set23Quyibuzsuv1657 : 0) +
                ($set23Quyibuzsuv1542 < 0 ? $set23Quyibuzsuv1542 : 0) +
                ($set23Quyibuzsuv1588 < 0 ? $set23Quyibuzsuv1588 : 0) +
                ($set23Quyibuzsuv1566 < 0 ? $set23Quyibuzsuv1566 : 0);
            $ges23QuyibuzsuvOwnNeeds = $set23Quyibuzsuv1357 + $set23Quyibuzsuv1397 + $set23Quyibuzsuv1680;
            $ges23QuyibuzsuvAggregateTrue = ($ges23Quyibuzsuv1301[2] > 0 ? 1 : 0) + ($ges23Quyibuzsuv1324[2] > 0 ? 1 : 0);
            $ges23QuyibuzsuvAggregateError = 0;
            $ges23QuyibuzsuvAggregateFalse = ($ges23Quyibuzsuv1301[2] <= 0 ? 1 : 0) + ($ges23Quyibuzsuv1324[2] <= 0 ? 1 : 0) - $ges23QuyibuzsuvAggregateError;

            $ges22Quyibuzsuv1278 = $this->getValue($dataQuyibuzsuv, "G1278");
            $ges22Quyibuzsuv1209 = $this->getValue($dataQuyibuzsuv, "G1209");
            $ges22Quyibuzsuv1094 = $this->getValue($dataQuyibuzsuv, "G1094");
            $ges22Quyibuzsuv1095 = $this->getValue($dataQuyibuzsuv, "G1095");
            $ges22Quyibuzsuv1117 = $this->getValue($dataQuyibuzsuv, "G1117");
            $ges22Quyibuzsuv1118 = $this->getValue($dataQuyibuzsuv, "G1118");
            $ges22Quyibuzsuv1163 = $this->getValue($dataQuyibuzsuv, "G1163");
            $ges22Quyibuzsuv1140 = $this->getValue($dataQuyibuzsuv, "G1140");
            $ges22Quyibuzsuv1232 = $this->getValue($dataQuyibuzsuv, "G1232");
            $ges22Quyibuzsuv1255 = $this->getValue($dataQuyibuzsuv, "G1255");
            $ges22Quyibuzsuv1186 = $this->getValue($dataQuyibuzsuv, "G1186");

            $set22Quyibuzsuv1186 = $ges22Quyibuzsuv1186[2] * 3600 / $CONST;
            $set22Quyibuzsuv1209 = $ges22Quyibuzsuv1209[2] * 60 / $CONST;
            $set22Quyibuzsuv1255 = $ges22Quyibuzsuv1255[2] * 480 / $CONST;
            $set22Quyibuzsuv1278 = $ges22Quyibuzsuv1278[2] * 1 / $CONST;

            $set22Quyibuzsuv1140 = $ges22Quyibuzsuv1140[2] * 14000 / $kvt;
            $set22Quyibuzsuv1163 = $ges22Quyibuzsuv1163[2] * 1 / $kvt;
            $set22Quyibuzsuv1232 = $ges22Quyibuzsuv1232[2] * 18000 / $kvt;

            $power22Quyibuzsuv1094 = $ges22Quyibuzsuv1094[2] * 3600 / $CONST;//active
            $reactive22Quyibuzsuv1095 = $ges22Quyibuzsuv1095[2] * 3600 / $CONST;//reactive

            $power22Quyibuzsuv1117 = $ges22Quyibuzsuv1117[2] * 3600 / $CONST;//active
            $reactive22Quyibuzsuv1118 = $ges22Quyibuzsuv1118[2] * 3600 / $CONST;//reactive

            $ges22QuyibuzsuvActive = $power22Quyibuzsuv1094 + $power22Quyibuzsuv1117;
            $ges22QuyibuzsuvReactive = $reactive22Quyibuzsuv1095 + $reactive22Quyibuzsuv1118;
            $ges22QuyibuzsuvActiveOut = ($set22Quyibuzsuv1278 > 0 ? $set22Quyibuzsuv1278 : 0) +
                ($set22Quyibuzsuv1209 > 0 ? $set22Quyibuzsuv1209 : 0) +
                $set22Quyibuzsuv1255 + $set22Quyibuzsuv1186;
            $ges22QuyibuzsuvActiveIn = ($set22Quyibuzsuv1278 < 0 ? $set22Quyibuzsuv1278 : 0) +
                ($set22Quyibuzsuv1209 < 0 ? $set22Quyibuzsuv1209 : 0);
            $ges22QuyibuzsuvOwnNeeds = $set22Quyibuzsuv1163 + $set22Quyibuzsuv1140 + $set22Quyibuzsuv1232;
            $ges22QuyibuzsuvAggregateTrue = ($ges22Quyibuzsuv1094[2] > 0 ? 1 : 0) + ($ges22Quyibuzsuv1117[2] > 0 ? 1 : 0);
            $ges22QuyibuzsuvAggregateError = 0;
            $ges22QuyibuzsuvAggregateFalse = ($ges22Quyibuzsuv1094[2] <= 0 ? 1 : 0) + ($ges22Quyibuzsuv1117[2] <= 0 ? 1 : 0) - $ges22QuyibuzsuvAggregateError;

            $ges41Quyibuzsuv1823 = $this->getValue($dataQuyibuzsuv, "G1823");
            $ges41Quyibuzsuv1824 = $this->getValue($dataQuyibuzsuv, "G1824");
            $ges41Quyibuzsuv1708 = $this->getValue($dataQuyibuzsuv, "G1708");
            $ges41Quyibuzsuv1712 = $this->getValue($dataQuyibuzsuv, "G1712");
            $ges41Quyibuzsuv1736 = $this->getValue($dataQuyibuzsuv, "G1736");
            $ges41Quyibuzsuv1740 = $this->getValue($dataQuyibuzsuv, "G1740");
            $ges41Quyibuzsuv1795 = $this->getValue($dataQuyibuzsuv, "G1795");
            $ges41Quyibuzsuv1768 = $this->getValue($dataQuyibuzsuv, "G1768");

            $set41Quyibuzsuv1823 = $ges41Quyibuzsuv1823[2] * 21000 / $CONST;
            $set41Quyibuzsuv1824 = $ges41Quyibuzsuv1824[2] * 21000 / $CONST;
            $set41Quyibuzsuv1795 = $ges41Quyibuzsuv1795[2] * 100 / $CONST;
            $set41Quyibuzsuv1768 = $ges41Quyibuzsuv1768[2] * 100 / $CONST;
            $power41Quyibuzsuv1708 = $ges41Quyibuzsuv1708[2] * 10500 / $kvt;//active
            $reactive41Quyibuzsuv1712 = $ges41Quyibuzsuv1712[2] * 10500 / $kvt;//reactive
            $power41Quyibuzsuv1736 = $ges41Quyibuzsuv1736[2] * 10500 / $kvt;//active
            $reactive41Quyibuzsuv1740 = $ges41Quyibuzsuv1740[2] * 10500 / $kvt;//reactive
            $ges41QuyibuzsuvActive = $power41Quyibuzsuv1708 + $power41Quyibuzsuv1736;
            $ges41QuyibuzsuvReactive = $reactive41Quyibuzsuv1712 + $reactive41Quyibuzsuv1740;
            $ges41QuyibuzsuvActiveOut = $set41Quyibuzsuv1823;
            $ges41QuyibuzsuvActiveIn = $set41Quyibuzsuv1824;
            $ges41QuyibuzsuvOwnNeeds = $set41Quyibuzsuv1795 + $set41Quyibuzsuv1768;
            $ges41QuyibuzsuvAggregateTrue = ($ges41Quyibuzsuv1708[2] > 0 ? 1 : 0) + ($ges41Quyibuzsuv1736[2] > 0 ? 1 : 0);
            $ges41QuyibuzsuvAggregateError = 0;
            $ges41QuyibuzsuvAggregateFalse = ($ges41Quyibuzsuv1708[2] <= 0 ? 1 : 0) + ($ges41Quyibuzsuv1736[2] <= 0 ? 1 : 0) - $ges41QuyibuzsuvAggregateError;

            $activeQuyibuzsuv = $ges14QuyibuzsuvActive + $ges18QuyibuzsuvActive + $ges19QuyibuzsuvActive + $ges23QuyibuzsuvActive + $ges22QuyibuzsuvActive + $ges41QuyibuzsuvActive;
            $reactiveQuyibuzsuv = $ges14QuyibuzsuvReactive + $ges18QuyibuzsuvReactive + $ges19QuyibuzsuvReactive + $ges23QuyibuzsuvReactive + $ges22QuyibuzsuvReactive + $ges41QuyibuzsuvReactive;
            $activeOutQuyibuzsuv = $ges14QuyibuzsuvActiveOut + $ges18QuyibuzsuvActiveOut + $ges19QuyibuzsuvActiveOut + $ges23QuyibuzsuvActiveOut + $ges22QuyibuzsuvActiveOut + $ges41QuyibuzsuvActiveOut;
            $activeInQuyibuzsuv = $ges14QuyibuzsuvActiveIn + $ges18QuyibuzsuvActiveIn + $ges19QuyibuzsuvActiveIn + $ges23QuyibuzsuvActiveIn + $ges22QuyibuzsuvActiveIn + $ges41QuyibuzsuvActiveIn;
            $ownNeedsQuyibuzsuv = $ges14QuyibuzsuvOwnNeeds + $ges18QuyibuzsuvOwnNeeds + $ges19QuyibuzsuvOwnNeeds + $ges23QuyibuzsuvOwnNeeds + $ges22QuyibuzsuvOwnNeeds + $ges41QuyibuzsuvOwnNeeds;
            $trueQuyibuzsuv = $ges14QuyibuzsuvAggregateTrue + $ges18QuyibuzsuvAggregateTrue + $ges19QuyibuzsuvAggregateTrue + $ges23QuyibuzsuvAggregateTrue + $ges22QuyibuzsuvAggregateTrue + $ges41QuyibuzsuvAggregateTrue;
            $errorQuyibuzsuv = $ges14QuyibuzsuvAggregateError + $ges18QuyibuzsuvAggregateError + $ges19QuyibuzsuvAggregateError + $ges23QuyibuzsuvAggregateError + $ges22QuyibuzsuvAggregateError + $ges41QuyibuzsuvAggregateError;
            $falseQuyibuzsuv = $ges14QuyibuzsuvAggregateFalse + $ges18QuyibuzsuvAggregateFalse + $ges19QuyibuzsuvAggregateFalse + $ges23QuyibuzsuvAggregateFalse + $ges22QuyibuzsuvAggregateFalse + $ges41QuyibuzsuvAggregateFalse;
        } catch (\Exception $e) {
            $activeQuyibuzsuv = 0;
            $reactiveQuyibuzsuv = 0;
            $activeOutQuyibuzsuv = 0;
            $activeInQuyibuzsuv = 0;
            $ownNeedsQuyibuzsuv = 0;
            $trueQuyibuzsuv = 0;
            $errorQuyibuzsuv = 0;
            $falseQuyibuzsuv = 0;
        }

        /*Toshkent*/
        try {
            $dataToshkent = $this->fetchData("http://user:sU_sb07s@192.168.40.215:10178/crq?req=current");
            $ges4Toshkent650 = $this->getValue($dataToshkent, "G650");
            $ges4Toshkent627 = $this->getValue($dataToshkent, "G627");
            $ges4Toshkent604 = $this->getValue($dataToshkent, "G604");
            $ges4Toshkent605 = $this->getValue($dataToshkent, "G605");
            $ges4Toshkent719 = $this->getValue($dataToshkent, "G719");
            $ges4Toshkent673 = $this->getValue($dataToshkent, "G673");
            $ges4Toshkent535 = $this->getValue($dataToshkent, "G535");
            $ges4Toshkent581 = $this->getValue($dataToshkent, "G581");
            $ges4Toshkent558 = $this->getValue($dataToshkent, "G558");
            $ges4Toshkent442 = $this->getValue($dataToshkent, "G442");
            $ges4Toshkent443 = $this->getValue($dataToshkent, "G443");
            $ges4Toshkent461 = $this->getValue($dataToshkent, "G461");
            $ges4Toshkent462 = $this->getValue($dataToshkent, "G462");
            $ges4Toshkent476 = $this->getValue($dataToshkent, "G476");
            $ges4Toshkent742 = $this->getValue($dataToshkent, "G742");
            $ges4Toshkent696 = $this->getValue($dataToshkent, "G696");

            $set4Toshkent476 = $ges4Toshkent476[2] * 28000 / $CONST;
            $set4Toshkent604 = $ges4Toshkent604[2] * 4800 / $CONST;
            $set4Toshkent605 = $ges4Toshkent605[2] * 4800 / $CONST;
            $set4Toshkent627 = $ges4Toshkent627[2] * 7200 / $CONST;
            $set4Toshkent650 = $ges4Toshkent650[2] * 3600 / $CONST;
            $set4Toshkent673 = $ges4Toshkent673[2] * 3600 / $CONST;
            $set4Toshkent696 = $ges4Toshkent696[2] * 3600 / $CONST;
            $set4Toshkent719 = $ges4Toshkent719[2] * 3600 / $CONST;
            $set4Toshkent742 = $ges4Toshkent742[2] * 3600 / $CONST;

            $set4Toshkent535 = $ges4Toshkent535[2] * 60 / $kvt;
            $set4Toshkent558 = $ges4Toshkent558[2] * 60 / $kvt;
            $set4Toshkent581 = $ges4Toshkent581[2] * 40 / $kvt;

            $power4Toshkent442 = $ges4Toshkent442[2] * 4800 / $CONST;//active
            $reactive4Toshkent443 = $ges4Toshkent443[2] * 4800 / $CONST;//reactive

            $power4Toshkent461 = $ges4Toshkent461[2] * 4800 / $CONST;//active
            $reactive4Toshkent462 = $ges4Toshkent462[2] * 4800 / $CONST;//reactive

            $ges4ToshkentActive = $power4Toshkent442 + $power4Toshkent461;
            $ges4ToshkentReactive = $reactive4Toshkent443 + $reactive4Toshkent462;
            $ges4ToshkentActiveOut = (-1 * $set4Toshkent476 > 0 ? -1 * $set4Toshkent476 : 0) + $set4Toshkent604 + $set4Toshkent627 + $set4Toshkent650 + $set4Toshkent673 + $set4Toshkent696 + $set4Toshkent719 + $set4Toshkent742;
            $ges4ToshkentActiveIn = (-1 * $set4Toshkent476 < 0 ? -1 * $set4Toshkent476 : 0) + $set4Toshkent605;
            $ges4ToshkentOwnNeeds = $set4Toshkent535 + $set4Toshkent581 + $set4Toshkent558;
            $ges4ToshkentAggregateTrue = ($ges4Toshkent442[2] > 0 ? 1 : 0) + ($ges4Toshkent461[2] > 0 ? 1 : 0);
            $ges4ToshkentAggregateError = 0;
            $ges4ToshkentAggregateFalse = ($ges4Toshkent442[2] <= 0 ? 1 : 0) + ($ges4Toshkent461[2] <= 0 ? 1 : 0) - $ges4ToshkentAggregateError;

            $ges21Toshkent818 = $this->getValue($dataToshkent, "G818");
            $ges21Toshkent911 = $this->getValue($dataToshkent, "G911");
            $ges21Toshkent910 = $this->getValue($dataToshkent, "G910");
            $ges21Toshkent934 = $this->getValue($dataToshkent, "G934");
            $ges21Toshkent933 = $this->getValue($dataToshkent, "G933");
            $ges21Toshkent841 = $this->getValue($dataToshkent, "G841");
            $ges21Toshkent864 = $this->getValue($dataToshkent, "G864");
            $ges21Toshkent887 = $this->getValue($dataToshkent, "G887");
            $ges21Toshkent759 = $this->getValue($dataToshkent, "G759");
            $ges21Toshkent760 = $this->getValue($dataToshkent, "G760");
            $ges21Toshkent774 = $this->getValue($dataToshkent, "G774");
            $ges21Toshkent775 = $this->getValue($dataToshkent, "G775");
            $ges21Toshkent795 = $this->getValue($dataToshkent, "G795");
            $ges21Toshkent797 = $this->getValue($dataToshkent, "G797");

            $set21Toshkent818 = $ges21Toshkent818[2] * 4800 / $CONST;
            $set21Toshkent910 = $ges21Toshkent910[2] * 12000 / $CONST;
            $set21Toshkent911 = $ges21Toshkent911[2] * 12000 / $CONST;
            $set21Toshkent934 = $ges21Toshkent934[2] * 12000 / $CONST;
            $set21Toshkent933 = $ges21Toshkent933[2] * 12000 / $CONST;
            $set21Toshkent841 = $ges21Toshkent841[2] * 2400 / $CONST;

            $power21Toshkent759 = $ges21Toshkent759[2] * 1800 / $CONST;//active
            $reactive21Toshkent760 = $ges21Toshkent760[2] * 1800 / $CONST;//reactive

            $power21Toshkent774 = $ges21Toshkent774[2] * 1800 / $CONST;//active
            $reactive21Toshkent775 = $ges21Toshkent775[2] * 1800 / $CONST;//reactive

            $power21Toshkent795 = $ges21Toshkent795[2] * 2400 / $CONST;//active
            $reactive21Toshkent797 = $ges21Toshkent797[2] * 2400 / $CONST;//reactive

            $set21Toshkent864 = $ges21Toshkent864[2] * 600 / $kvt;
            $set21Toshkent887 = $ges21Toshkent887[2] * 480 / $kvt;

            $ges21ToshkentActive = $power21Toshkent759 + $power21Toshkent774 + $power21Toshkent795;
            $ges21ToshkentReactive = $reactive21Toshkent760 + $reactive21Toshkent775 + $reactive21Toshkent797;
            $ges21ToshkentActiveOut = $set21Toshkent818 + $set21Toshkent841 + $set21Toshkent910 + $set21Toshkent934;
            $ges21ToshkentActiveIn = $set21Toshkent911 + $set21Toshkent933;
            $ges21ToshkentOwnNeeds = $set21Toshkent864 + $set21Toshkent887;
            $ges21ToshkentAggregateTrue = ($ges21Toshkent759[2] > 0 ? 1 : 0) + ($ges21Toshkent774[2] > 0 ? 1 : 0) + +($ges21Toshkent795[2] > 0 ? 1 : 0);
            $ges21ToshkentAggregateError = 0;
            $ges21ToshkentAggregateFalse = ($ges21Toshkent759[2] <= 0 ? 1 : 0) + ($ges21Toshkent774[2] <= 0 ? 1 : 0) + +($ges21Toshkent795[2] <= 0 ? 1 : 0) - $ges21ToshkentAggregateError;

            $ges1Tashkent133 = $this->getValue($dataToshkent, "G133");
            $ges1Tashkent135 = $this->getValue($dataToshkent, "G135");
            $ges1Tashkent173 = $this->getValue($dataToshkent, "G173");
            $ges1Tashkent213 = $this->getValue($dataToshkent, "G213");
            $ges1Tashkent14 = $this->getValue($dataToshkent, "G14");
            $ges1Tashkent13 = $this->getValue($dataToshkent, "G13");
            $ges1Tashkent54 = $this->getValue($dataToshkent, "G54");
            $ges1Tashkent53 = $this->getValue($dataToshkent, "G53");
            $ges1Tashkent93 = $this->getValue($dataToshkent, "G93");
            $ges1Tashkent95 = $this->getValue($dataToshkent, "G95");

            $set1Tashkent14 = $ges1Tashkent14[2] * 52500 / $CONST;//52500
            $set1Tashkent13 = $ges1Tashkent13[2] * 52500 / $CONST;//52500
            $set1Tashkent54 = $ges1Tashkent54[2] * 52500 / $CONST;//52500
            $set1Tashkent53 = $ges1Tashkent53[2] * 52500 / $CONST;//52500

            $power1Tashkent133 = $ges1Tashkent133[2] * 30000 / $CONST;//active
            $reactive1Tashkent135 = $ges1Tashkent135[2] * 30000 / $CONST;//reactive

            $power1Tashkent93 = $ges1Tashkent93[2] * 30000 / $CONST;//active
            $reactive1Tashkent95 = $ges1Tashkent95[2] * 30000 / $CONST;//reactive

            $set1Tashkent213 = $ges1Tashkent213[2] * 10000 / $kvt;
            $set1Tashkent173 = $ges1Tashkent173[2] * 10000 / $kvt;

            $ges1ToshkentActive = $power1Tashkent133 + $power1Tashkent93;
            $ges1ToshkentReactive = $reactive1Tashkent135 + $reactive1Tashkent95;
            $ges1ToshkentActiveOut = $set1Tashkent13 + $set1Tashkent53;
            $ges1ToshkentActiveIn = $set1Tashkent14 + $set1Tashkent54;
            $ges1ToshkentOwnNeeds = $set1Tashkent213 + $set1Tashkent173;
            $ges1ToshkentAggregateTrue = ($ges1Tashkent133[2] > 0 ? 1 : 0) + ($ges1Tashkent93[2] > 0 ? 1 : 0);
            $ges1ToshkentAggregateError = 0;
            $ges1ToshkentAggregateFalse = ($ges1Tashkent133[2] <= 0 ? 1 : 0) + ($ges1Tashkent93[2] <= 0 ? 1 : 0) - $ges1ToshkentAggregateError;

            $ges9Toshkent1702 = $this->getValue($dataToshkent, "G1702");
            $ges9Toshkent1687 = $this->getValue($dataToshkent, "G1687");
            $ges9Toshkent1769 = $this->getValue($dataToshkent, "G1769");
            $ges9Toshkent1370 = $this->getValue($dataToshkent, "G1370");
            $ges9Toshkent1582 = $this->getValue($dataToshkent, "G1582");
            $ges9Toshkent1723 = $this->getValue($dataToshkent, "G1723");
            $ges9Toshkent1672 = $this->getValue($dataToshkent, "G1672");
            $ges9Toshkent1657 = $this->getValue($dataToshkent, "G1657");
            $ges9Toshkent1642 = $this->getValue($dataToshkent, "G1642");
            $ges9Toshkent1627 = $this->getValue($dataToshkent, "G1627");
            $ges9Toshkent1567 = $this->getValue($dataToshkent, "G1567");
            $ges9Toshkent1552 = $this->getValue($dataToshkent, "G1552");
            $ges9Toshkent1537 = $this->getValue($dataToshkent, "G1537");
            $ges9Toshkent1746 = $this->getValue($dataToshkent, "G1746");
            $ges9Toshkent1522 = $this->getValue($dataToshkent, "G1522");
            $ges9Toshkent1507 = $this->getValue($dataToshkent, "G1507");
            $ges9Toshkent1612 = $this->getValue($dataToshkent, "G1612");
            $ges9Toshkent1597 = $this->getValue($dataToshkent, "G1597");
            $ges9Toshkent1387 = $this->getValue($dataToshkent, "G1387");
            $ges9Toshkent1402 = $this->getValue($dataToshkent, "G1402");
            $ges9Toshkent1210 = $this->getValue($dataToshkent, "G1210");
            $ges9Toshkent1209 = $this->getValue($dataToshkent, "G1209");
            $ges9Toshkent1233 = $this->getValue($dataToshkent, "G1233");
            $ges9Toshkent1232 = $this->getValue($dataToshkent, "G1232");
            $ges9Toshkent1301 = $this->getValue($dataToshkent, "G1301");
            $ges9Toshkent956 = $this->getValue($dataToshkent, "G956");
            $ges9Toshkent958 = $this->getValue($dataToshkent, "G958");
            $ges9Toshkent1048 = $this->getValue($dataToshkent, "G1048");
            $ges9Toshkent1492 = $this->getValue($dataToshkent, "G1492");
            $ges9Toshkent1477 = $this->getValue($dataToshkent, "G1477");
            $ges9Toshkent1432 = $this->getValue($dataToshkent, "G1432");
            $ges9Toshkent1417 = $this->getValue($dataToshkent, "G1417");
            $ges9Toshkent1462 = $this->getValue($dataToshkent, "G1462");
            $ges9Toshkent1447 = $this->getValue($dataToshkent, "G1447");
            $ges9Toshkent1770 = $this->getValue($dataToshkent, "G1770");
            $ges9Toshkent979 = $this->getValue($dataToshkent, "G979");
            $ges9Toshkent981 = $this->getValue($dataToshkent, "G981");

            $set9Toshkent1209 = $ges9Toshkent1209[2] * 44000 / $CONST;
            $set9Toshkent1210 = $ges9Toshkent1210[2] * 44000 / $CONST;
            $set9Toshkent1232 = $ges9Toshkent1232[2] * 44000 / $CONST;
            $set9Toshkent1233 = $ges9Toshkent1233[2] * 44000 / $CONST;
            $set9Toshkent1370 = $ges9Toshkent1370[2] * 4000 / $CONST;
            $set9Toshkent1387 = $ges9Toshkent1387[2] * 42000 / $CONST;
            $set9Toshkent1402 = $ges9Toshkent1402[2] * 42000 / $CONST;
            $set9Toshkent1417 = (-1) * $ges9Toshkent1417[2] * 4800 / $CONST;
            $set9Toshkent1432 = (-1) * $ges9Toshkent1432[2] * 4800 / $CONST;
            $set9Toshkent1447 = (-1) * $ges9Toshkent1447[2] * 3600 / $CONST;
            $set9Toshkent1462 = (-1) * $ges9Toshkent1462[2] * 4800 / $CONST;
            $set9Toshkent1477 = (-1) * $ges9Toshkent1477[2] * 3600 / $CONST;
            $set9Toshkent1492 = (-1) * $ges9Toshkent1492[2] * 2400 / $CONST;
            $set9Toshkent1507 = (-1) * $ges9Toshkent1507[2] * 3000 / $CONST;
            $set9Toshkent1522 = (-1) * $ges9Toshkent1522[2] * 12000 / $CONST;
            $set9Toshkent1537 = (-1) * $ges9Toshkent1537[2] * 12000 / $CONST;
            $set9Toshkent1552 = (-1) * $ges9Toshkent1552[2] * 6000 / $CONST;
            $set9Toshkent1567 = (-1) * $ges9Toshkent1567[2] * 8000 / $CONST;
            $set9Toshkent1582 = (-1) * $ges9Toshkent1582[2] * 12000 / $CONST;
            $set9Toshkent1597 = (-1) * $ges9Toshkent1597[2] * 6000 / $CONST;
            $set9Toshkent1612 = (-1) * $ges9Toshkent1612[2] * 6000 / $CONST;
            $set9Toshkent1627 = (-1) * $ges9Toshkent1627[2] * 6000 / $CONST;
            $set9Toshkent1642 = (-1) * $ges9Toshkent1642[2] * 3000 / $CONST;
            $set9Toshkent1657 = $ges9Toshkent1657[2] * 12000 / $CONST;
            $set9Toshkent1672 = (-1) * $ges9Toshkent1672[2] * 6000 / $CONST;
            $set9Toshkent1687 = $ges9Toshkent1687[2] * 6000 / $CONST;
            $set9Toshkent1702 = $ges9Toshkent1702[2] * 12000 / $CONST;
            $set9Toshkent1723 = $ges9Toshkent1723[2] * 6000 / $CONST;
            $set9Toshkent1746 = $ges9Toshkent1746[2] * 6000 / $CONST;
            $set9Toshkent1769 = $ges9Toshkent1769[2] * 12000 / $CONST;
            $set9Toshkent1770 = $ges9Toshkent1770[2] * 12000 / $CONST;

            $power9Toshkent979 = $ges9Toshkent979[2] * 15750 / $CONST;//active
            $reactive9Toshkent981 = $ges9Toshkent981[2] * 15750 / $CONST;//reactive

            $power9Toshkent956 = $ges9Toshkent956[2] * 15750 / $CONST;//active
            $reactive9Toshkent958 = $ges9Toshkent958[2] * 15750 / $CONST;//reactive

            $set9Toshkent1301 = $ges9Toshkent1301[2] * 2000 / $kvt;
            $set9Toshkent1048 = $ges9Toshkent1048[2] * 600 / $kvt;

            $ges9ToshkentActive = $power9Toshkent979 + $power9Toshkent956;
            $ges9ToshkentReactive = $reactive9Toshkent981 + $reactive9Toshkent958;
            $ges9ToshkentActiveOut = $set9Toshkent1209 + $set9Toshkent1702 + $set9Toshkent1687 + $set9Toshkent1370 + $set9Toshkent1582 +
                $set9Toshkent1232 + $set9Toshkent1723 + $set9Toshkent1672 + $set9Toshkent1657 + $set9Toshkent1642 +
                $set9Toshkent1627 + $set9Toshkent1567 + $set9Toshkent1552 + $set9Toshkent1537 + $set9Toshkent1746 + $set9Toshkent1522 +
                $set9Toshkent1507 + $set9Toshkent1612 + $set9Toshkent1597 + $set9Toshkent1492 + $set9Toshkent1477 +
                $set9Toshkent1432 + $set9Toshkent1417 + $set9Toshkent1462 + $set9Toshkent1447 + $set9Toshkent1769 +
                $set9Toshkent1387 + $set9Toshkent1402;
            $ges9ToshkentActiveIn = $set9Toshkent1210 + $set9Toshkent1233 + $set9Toshkent1387 + $set9Toshkent1402 + $set9Toshkent1770;
            $ges9ToshkentOwnNeeds = $set9Toshkent1048 + $set9Toshkent1301;
            $ges9ToshkentAggregateTrue = ($ges9Toshkent979[2] > 0 ? 1 : 0) + ($ges9Toshkent956[2] > 0 ? 1 : 0);
            $ges9ToshkentAggregateError = 0;
            $ges9ToshkentAggregateFalse = ($ges9Toshkent979[2] <= 0 ? 1 : 0) + ($ges9Toshkent956[2] <= 0 ? 1 : 0) - $ges9ToshkentAggregateError;

            $activeToshkent = $ges4ToshkentActive + $ges21ToshkentActive + $ges1ToshkentActive + $ges9ToshkentActive;
            $reactiveToshkent = $ges4ToshkentReactive + $ges21ToshkentReactive + $ges1ToshkentReactive + $ges9ToshkentReactive;
            $activeOutToshkent = $ges4ToshkentActiveOut + $ges21ToshkentActiveOut + $ges1ToshkentActiveOut + $ges9ToshkentActiveOut;
            $activeInToshkent = $ges4ToshkentActiveIn + $ges21ToshkentActiveIn + $ges1ToshkentActiveIn + $ges9ToshkentActiveIn;
            $ownNeedsToshkent = $ges4ToshkentOwnNeeds + $ges21ToshkentOwnNeeds + $ges1ToshkentOwnNeeds + $ges9ToshkentOwnNeeds;
            $trueToshkent = $ges4ToshkentAggregateTrue + $ges21ToshkentAggregateTrue + $ges1ToshkentAggregateTrue + $ges9ToshkentAggregateTrue;
            $errorToshkent = $ges4ToshkentAggregateError + $ges21ToshkentAggregateError + $ges1ToshkentAggregateError + $ges9ToshkentAggregateError;
            $falseToshkent = $ges4ToshkentAggregateFalse + $ges21ToshkentAggregateFalse + $ges1ToshkentAggregateFalse + $ges9ToshkentAggregateFalse;
        } catch (\Exception $e) {
            $activeToshkent = 0;
            $reactiveToshkent = 0;
            $activeOutToshkent = 0;
            $activeInToshkent = 0;
            $ownNeedsToshkent = 0;
            $trueToshkent = 0;
            $errorToshkent = 0;
            $falseToshkent = 0;
        }

        /*Hisorak*/
        try {
            $dataHisorak = $this->fetchData("http://user:gh_us_91@192.168.40.215:10026/crq?req=current");
            $ges37Hisorak22c = $this->getValue($dataHisorak, "B22");
            $ges37Hisorak21 = $this->getValue($dataHisorak, "B21");
            $ges37Hisorak26 = $this->getValue($dataHisorak, "B26");
            $ges37Hisorak25 = $this->getValue($dataHisorak, "B25");
            $ges37Hisorak34 = $this->getValue($dataHisorak, "G34");
            $ges37Hisorak46 = $this->getValue($dataHisorak, "G46");
            $ges37Hisorak58 = $this->getValue($dataHisorak, "G58");
            $ges37Hisorak10 = $this->getValue($dataHisorak, "G10");
            $ges37Hisorak12 = $this->getValue($dataHisorak, "G12");
            $ges37Hisorak22 = $this->getValue($dataHisorak, "G22");
            $ges37Hisorak24 = $this->getValue($dataHisorak, "G24");

            $set37Hisorak21 = $ges37Hisorak21[2] * 66000 / $CONST;
            $set37Hisorak22c = $ges37Hisorak22c[2] * 66000 / $CONST;
            $set37Hisorak25 = $ges37Hisorak25[2] * 66000 / $CONST;
            $set37Hisorak26 = $ges37Hisorak26[2] * 66000 / $CONST;

            $set37Hisorak34 = $ges37Hisorak34[2] * 6000 / $kvt;
            $set37Hisorak46 = $ges37Hisorak46[2] * 6000 / $kvt;
            $set37Hisorak58 = $ges37Hisorak58[2] * 6000 / $kvt;

            $power37Hisorak10 = $ges37Hisorak10[2] * 40000 / $CONST;//active
            $reactive37Hisorak12 = $ges37Hisorak12[2] * 40000 / $CONST;//reactive

            $power37Hisorak22 = $ges37Hisorak22[2] * 40000 / $CONST;//active
            $reactive37Hisorak24 = $ges37Hisorak24[2] * 40000 / $CONST;//reactive

            $ges37HisorakActive = $power37Hisorak10 + $power37Hisorak22;
            $ges37HisorakReactive = $reactive37Hisorak12 + $reactive37Hisorak24;
            $ges37HisorakActiveOut = $set37Hisorak21 + $set37Hisorak25;
            $ges37HisorakActiveIn = $set37Hisorak22c + $set37Hisorak26;
            $ges37HisorakOwnNeeds = $set37Hisorak34 + $set37Hisorak46 + $set37Hisorak58;
            $ges37HisorakAggregateTrue = ($ges37Hisorak10[2] > 0 ? 1 : 0) + ($ges37Hisorak22[2] > 0 ? 1 : 0);
            $ges37HisorakAggregateError = 0;
            $ges37HisorakAggregateFalse = ($ges37Hisorak10[2] <= 0 ? 1 : 0) + ($ges37Hisorak22[2] <= 0 ? 1 : 0) - $ges37HisorakAggregateError;

            $activeHisorak = $ges37HisorakActive;
            $reactiveHisorak = $ges37HisorakReactive;
            $activeOutHisorak = $ges37HisorakActiveOut;
            $activeInHisorak = $ges37HisorakActiveIn;
            $ownNeedsHisorak = $ges37HisorakOwnNeeds;
            $trueHisorak = $ges37HisorakAggregateTrue;
            $errorHisorak = $ges37HisorakAggregateError;
            $falseHisorak = $ges37HisorakAggregateFalse;
        } catch (\Exception $e) {
            $activeHisorak = 0;
            $reactiveHisorak = 0;
            $activeOutHisorak = 0;
            $activeInHisorak = 0;
            $ownNeedsHisorak = 0;
            $trueHisorak = 0;
            $errorHisorak = 0;
            $falseHisorak = 0;
        }

        /*Kfk*/
        try {
            $dataKfk = $this->fetchData("http://user:N6_3jf8g@192.168.40.215:10190/crq?req=current");
            $gesKfk174 = $this->getValue($dataKfk, "G174");
            $gesKfk12 = $this->getValue($dataKfk, "G12");
            $gesKfk13 = $this->getValue($dataKfk, "G13");
            $gesKfk39 = $this->getValue($dataKfk, "G39");
            $gesKfk40 = $this->getValue($dataKfk, "G40");
            $gesKfk201 = $this->getValue($dataKfk, "G201");
            $gesKfk202 = $this->getValue($dataKfk, "G202");
            $gesKfk228 = $this->getValue($dataKfk, "G228");
            $gesKfk229 = $this->getValue($dataKfk, "G229");
            $gesKfk66 = $this->getValue($dataKfk, "G66");
            $gesKfk255 = $this->getValue($dataKfk, "G255");

            $setKfk174 = $gesKfk174[2] * 165000 / $CONST;

            $setKfk255 = $gesKfk255[2] * 60 / $kvt;
            $setKfk66 = $gesKfk66[2] * 60 / $kvt;

            $powerKfk12 = $gesKfk12[2] * 6300 / $CONST;//active
            $reactiveKfk13 = $gesKfk13[2] * 6300 / $CONST;//reactive

            $powerKfk39 = $gesKfk39[2] * 6300 / $CONST;//active
            $reactiveKfk40 = $gesKfk40[2] * 6300 / $CONST;//reactive

            $powerKfk201 = $gesKfk201[2] * 6300 / $CONST;//active
            $reactiveKfk202 = $gesKfk202[2] * 6300 / $CONST;//reactive

            $powerKfk228 = $gesKfk228[2] * 6300 / $CONST;//active
            $reactiveKfk229 = $gesKfk229[2] * 6300 / $CONST;//reactive

            $gesKfkActive = $powerKfk12 + $powerKfk39 + $powerKfk201 + $powerKfk228;
            $gesKfkReactive = $reactiveKfk13 + $reactiveKfk40 + $reactiveKfk202 + $reactiveKfk229;
            $gesKfkActiveOut = ($setKfk174 > 0 ? $setKfk174 : 0);
            $gesKfkActiveIn = ($setKfk174 < 0 ? $setKfk174 : 0);
            $gesKfkOwnNeeds = $setKfk255 + $setKfk66;
            $gesKfkAggregateTrue = ($gesKfk12[2] > 0 ? 1 : 0) + ($gesKfk39[2] > 0 ? 1 : 0) + ($gesKfk201[2] > 0 ? 1 : 0) + ($gesKfk228[2] > 0 ? 1 : 0);
            $gesKfkAggregateError = 0;
            $gesKfkAggregateFalse = ($gesKfk12[2] <= 0 ? 1 : 0) + ($gesKfk39[2] <= 0 ? 1 : 0) + ($gesKfk201[2] <= 0 ? 1 : 0) + ($gesKfk228[2] <= 0 ? 1 : 0) - $gesKfkAggregateError;

            $activeKfk = $gesKfkActive;
            $reactiveKfk = $gesKfkReactive;
            $activeOutKfk = $gesKfkActiveOut;
            $activeInKfk = $gesKfkActiveIn;
            $ownNeedsKfk = $gesKfkOwnNeeds;
            $trueKfk = $gesKfkAggregateTrue;
            $errorKfk = $gesKfkAggregateError;
            $falseKfk = $gesKfkAggregateFalse;
        } catch (\Exception $e) {
            $activeKfk = 0;
            $reactiveKfk = 0;
            $activeOutKfk = 0;
            $activeInKfk = 0;
            $ownNeedsKfk = 0;
            $trueKfk = 0;
            $errorKfk = 0;
            $falseKfk = 0;
        }

        /*Shaxrixon*/
        try {
            $dataShaxrixon = $this->fetchData("http://user:usr_g3S4@192.168.40.215:10134/crq?req=current");
            $ges5Shaxrixon624 = $this->getValue($dataShaxrixon, "G624");
            $ges5Shaxrixon601 = $this->getValue($dataShaxrixon, "G601");
            $ges5Shaxrixon670 = $this->getValue($dataShaxrixon, "G670");
            $ges5Shaxrixon647 = $this->getValue($dataShaxrixon, "G647");
            $ges5Shaxrixon475 = $this->getValue($dataShaxrixon, "G475");
            $ges5Shaxrixon498 = $this->getValue($dataShaxrixon, "G498");
            $ges5Shaxrixon452 = $this->getValue($dataShaxrixon, "G452");
            $ges5Shaxrixon383 = $this->getValue($dataShaxrixon, "G383");
            $ges5Shaxrixon406 = $this->getValue($dataShaxrixon, "G406");
            $ges5Shaxrixon407 = $this->getValue($dataShaxrixon, "G407");
            $ges5Shaxrixon429 = $this->getValue($dataShaxrixon, "G429");
            $ges5Shaxrixon430 = $this->getValue($dataShaxrixon, "G430");
            $ges5Shaxrixon314 = $this->getValue($dataShaxrixon, "G314");
            $ges5Shaxrixon360 = $this->getValue($dataShaxrixon, "G360");
            $ges5Shaxrixon291 = $this->getValue($dataShaxrixon, "G291");
            $ges5Shaxrixon531 = $this->getValue($dataShaxrixon, "G531");
            $ges5Shaxrixon571 = $this->getValue($dataShaxrixon, "G571");

            $set5Shaxrixon670 = $ges5Shaxrixon670[2] * 10500 / $CONST;
            $set5Shaxrixon647 = $ges5Shaxrixon647[2] * 21000 / $CONST;
            $set5Shaxrixon624 = $ges5Shaxrixon624[2] * 21000 / $CONST;
            $set5Shaxrixon601 = $ges5Shaxrixon601[2] * 21000 / $CONST;
            $set5Shaxrixon498 = $ges5Shaxrixon498[2] * 66000 / $CONST;
            $set5Shaxrixon475 = $ges5Shaxrixon475[2] * 44000 / $CONST;
            $set5Shaxrixon452 = $ges5Shaxrixon452[2] * 44000 / $CONST;
            $set5Shaxrixon383 = $ges5Shaxrixon383[2] * 88000 / $CONST;

            $power5Shaxrixon406 = $ges5Shaxrixon406[2] * 10080 / $CONST;//active
            $reactive5Shaxrixon407 = $ges5Shaxrixon407[2] * 10080 / $CONST;//reactive

            $power5Shaxrixon429 = $ges5Shaxrixon429[2] * 10080 / $CONST;//active
            $reactive5Shaxrixon430 = $ges5Shaxrixon430[2] * 10080 / $CONST;//reactive

            $set5Shaxrixon314 = $ges5Shaxrixon314[2] * 100.8 / $kvt;

            $set5Shaxrixon291 = $ges5Shaxrixon291[2] * 1260 / $CONST;
            $set5Shaxrixon360 = $ges5Shaxrixon360[2] * 3780 / $CONST;
            $set5Shaxrixon531 = $ges5Shaxrixon531[2] * 1260 / $CONST;
            $set5Shaxrixon571 = $ges5Shaxrixon571[2] * 630 / $CONST;

            $ges5ShaxrixonActive = $power5Shaxrixon406 + $power5Shaxrixon429;
            $ges5ShaxrixonReactive = $reactive5Shaxrixon407 + $reactive5Shaxrixon430;
            $ges5ShaxrixonActiveOut = ($set5Shaxrixon624 > 0 ? $set5Shaxrixon624 : 0) +
                ($set5Shaxrixon601 > 0 ? $set5Shaxrixon601 : 0) +
                ($set5Shaxrixon670 > 0 ? $set5Shaxrixon670 : 0) +
                ($set5Shaxrixon647 > 0 ? $set5Shaxrixon647 : 0) +
                ($set5Shaxrixon475 > 0 ? $set5Shaxrixon475 : 0) +
                ($set5Shaxrixon498 > 0 ? $set5Shaxrixon498 : 0) +
                ($set5Shaxrixon452 > 0 ? $set5Shaxrixon452 : 0) +
                ($set5Shaxrixon383 > 0 ? $set5Shaxrixon383 : 0) +
                $set5Shaxrixon360 +
                $set5Shaxrixon291 +
                $set5Shaxrixon531 +
                $set5Shaxrixon571;
            $ges5ShaxrixonActiveIn = ($set5Shaxrixon624 < 0 ? $set5Shaxrixon624 : 0) +
                ($set5Shaxrixon601 < 0 ? $set5Shaxrixon601 : 0) +
                ($set5Shaxrixon670 < 0 ? $set5Shaxrixon670 : 0) +
                ($set5Shaxrixon647 < 0 ? $set5Shaxrixon647 : 0) +
                ($set5Shaxrixon475 < 0 ? $set5Shaxrixon475 : 0) +
                ($set5Shaxrixon498 < 0 ? $set5Shaxrixon498 : 0) +
                ($set5Shaxrixon452 < 0 ? $set5Shaxrixon452 : 0) +
                ($set5Shaxrixon383 < 0 ? $set5Shaxrixon383 : 0);
            $ges5ShaxrixonOwnNeeds = $set5Shaxrixon314;
            $ges5ShaxrixonAggregateTrue = ($ges5Shaxrixon406[2] > 0 ? 1 : 0) + ($ges5Shaxrixon429[2] > 0 ? 1 : 0);
            $ges5ShaxrixonAggregateError = 1;
            $ges5ShaxrixonAggregateFalse = ($ges5Shaxrixon406[2] <= 0 ? 1 : 0) + ($ges5Shaxrixon429[2] <= 0 ? 1 : 0) - $ges5ShaxrixonAggregateError;

            $ges6Shaxrixon49 = $this->getValue($dataShaxrixon, "G49");
            $ges6Shaxrixon72 = $this->getValue($dataShaxrixon, "G72");
            $ges6Shaxrixon187 = $this->getValue($dataShaxrixon, "G187");
            $ges6Shaxrixon188 = $this->getValue($dataShaxrixon, "G188");
            $ges6Shaxrixon210 = $this->getValue($dataShaxrixon, "G210");
            $ges6Shaxrixon211 = $this->getValue($dataShaxrixon, "G211");
            $ges6Shaxrixon3 = $this->getValue($dataShaxrixon, "G3");
            $ges6Shaxrixon26 = $this->getValue($dataShaxrixon, "G26");
            $ges6Shaxrixon118 = $this->getValue($dataShaxrixon, "G118");
            $ges6Shaxrixon141 = $this->getValue($dataShaxrixon, "G141");
            $ges6Shaxrixon272 = $this->getValue($dataShaxrixon, "G272");
            $ges6Shaxrixon164 = $this->getValue($dataShaxrixon, "G164");
            $ges6Shaxrixon243 = $this->getValue($dataShaxrixon, "G243");
            $ges6Shaxrixon95 = $this->getValue($dataShaxrixon, "G95");

            $set6Shaxrixon49 = $ges6Shaxrixon49[2] * 10500 / $CONST;
            $set6Shaxrixon72 = $ges6Shaxrixon72[2] * 14000 / $CONST;

            $set6Shaxrixon95 = $ges6Shaxrixon95[2] * 2400 / $CONST;
            $set6Shaxrixon118 = $ges6Shaxrixon118[2] * 4800 / $CONST;
            $set6Shaxrixon141 = $ges6Shaxrixon141[2] * 3600 / $CONST;
            $set6Shaxrixon164 = $ges6Shaxrixon164[2] * 600 / $CONST;
            $set6Shaxrixon243 = $ges6Shaxrixon243[2] * 3600 / $CONST;
            $set6Shaxrixon272 = $ges6Shaxrixon272[2] * 3600 / $CONST;

            $power6Shaxrixon187 = $ges6Shaxrixon187[2] * 9000 / $CONST;//active
            $reactive6Shaxrixon188 = $ges6Shaxrixon188[2] * 9000 / $CONST;//reactive

            $power6Shaxrixon210 = $ges6Shaxrixon210[2] * 9000 / $CONST;//active
            $reactive6Shaxrixon211 = $ges6Shaxrixon211[2] * 9000 / $CONST;//reactive

            $set6Shaxrixon3 = $ges6Shaxrixon3[2] * 120 / $kvt;
            $set6Shaxrixon26 = $ges6Shaxrixon26[2] * 120 / $kvt;

            $ges6ShaxrixonActive = $power6Shaxrixon187 + $power6Shaxrixon210;
            $ges6ShaxrixonReactive = $reactive6Shaxrixon188 + $reactive6Shaxrixon211;
            $ges6ShaxrixonActiveOut = ($set6Shaxrixon49 > 0 ? $set6Shaxrixon49 : 0) +
                ($set6Shaxrixon72 > 0 ? $set6Shaxrixon72 : 0) +
                $set6Shaxrixon118 + $set6Shaxrixon141 + $set6Shaxrixon272 + $set6Shaxrixon164 + $set6Shaxrixon95 + $set6Shaxrixon243;
            $ges6ShaxrixonActiveIn = ($set6Shaxrixon49 < 0 ? $set6Shaxrixon49 : 0) +
                ($set6Shaxrixon72 < 0 ? $set6Shaxrixon72 : 0);
            $ges6ShaxrixonOwnNeeds = $set6Shaxrixon3 + $set6Shaxrixon26;
            $ges6ShaxrixonAggregateTrue = ($ges6Shaxrixon187[2] > 0 ? 1 : 0) + ($ges6Shaxrixon210[2] > 0 ? 1 : 0);
            $ges6ShaxrixonAggregateError = 0;
            $ges6ShaxrixonAggregateFalse = ($ges6Shaxrixon187[2] <= 0 ? 1 : 0) + ($ges6Shaxrixon210[2] <= 0 ? 1 : 0) - $ges6ShaxrixonAggregateError;

            $ges1Shaxrixon1087 = $this->getValue($dataShaxrixon, "G1087");
            $ges1Shaxrixon1110 = $this->getValue($dataShaxrixon, "G1110");
            $ges1Shaxrixon1133 = $this->getValue($dataShaxrixon, "G1133");
            $ges1Shaxrixon1202 = $this->getValue($dataShaxrixon, "G1202");
            $ges1Shaxrixon1179 = $this->getValue($dataShaxrixon, "G1179");
            $ges1Shaxrixon1156 = $this->getValue($dataShaxrixon, "G1156");
            $ges1Shaxrixon1157 = $this->getValue($dataShaxrixon, "G1157");
            $ges1Shaxrixon1064 = $this->getValue($dataShaxrixon, "G1064");

            $power1Shaxrixon1156 = $ges1Shaxrixon1156[2] * 1890 / $CONST;//active
            $reactive1Shaxrixon1157 = $ges1Shaxrixon1157[2] * 1890 / $CONST;//reactive

            $set1Shaxrixon1064 = $ges1Shaxrixon1064[2] * 50 / $kvt;

            $set1Shaxrixon1087 = $ges1Shaxrixon1087[2] * 10500 / $CONST;
            $set1Shaxrixon1110 = $ges1Shaxrixon1110[2] * 10500 / $CONST;
            $set1Shaxrixon1133 = $ges1Shaxrixon1133[2] * 10500 / $CONST;
            $set1Shaxrixon1202 = $ges1Shaxrixon1202[2] * 6300 / $CONST;
            $set1Shaxrixon1179 = $ges1Shaxrixon1179[2] * 6300 / $CONST;

            $ges1ShaxrixonActive = $power1Shaxrixon1156;
            $ges1ShaxrixonReactive = $reactive1Shaxrixon1157;
            $ges1ShaxrixonActiveOut = ($set1Shaxrixon1087 > 0 ? $set1Shaxrixon1087 : 0) +
                ($set1Shaxrixon1110 > 0 ? $set1Shaxrixon1110 : 0) +
                ($set1Shaxrixon1133 > 0 ? $set1Shaxrixon1133 : 0) +
                $set1Shaxrixon1202 +
                $set1Shaxrixon1179;
            $ges1ShaxrixonActiveIn = ($set1Shaxrixon1087 < 0 ? $set1Shaxrixon1087 : 0) +
                ($set1Shaxrixon1110 < 0 ? $set1Shaxrixon1110 : 0) +
                ($set1Shaxrixon1133 < 0 ? $set1Shaxrixon1133 : 0);
            $ges1ShaxrixonOwnNeeds = $set1Shaxrixon1064;
            $ges1ShaxrixonAggregateTrue = ($ges1Shaxrixon1156[2] > 0 ? 1 : 0);
            $ges1ShaxrixonAggregateError = 0;
            $ges1ShaxrixonAggregateFalse = ($ges1Shaxrixon1156[2] <= 0 ? 1 : 0) - $ges1ShaxrixonAggregateError;

            $ges2Shaxrixon846 = $this->getValue($dataShaxrixon, "G846");
            $ges2Shaxrixon819 = $this->getValue($dataShaxrixon, "G819");
            $ges2Shaxrixon792 = $this->getValue($dataShaxrixon, "G792");
            $ges2Shaxrixon873 = $this->getValue($dataShaxrixon, "G873");
            $ges2Shaxrixon900 = $this->getValue($dataShaxrixon, "G900");
            $ges2Shaxrixon901 = $this->getValue($dataShaxrixon, "G901");
            $ges2Shaxrixon1041 = $this->getValue($dataShaxrixon, "G1041");
            $ges2Shaxrixon1018 = $this->getValue($dataShaxrixon, "G1018");
            $ges2Shaxrixon1004 = $this->getValue($dataShaxrixon, "G1004");
            $ges2Shaxrixon927 = $this->getValue($dataShaxrixon, "G927");
            $ges2Shaxrixon981 = $this->getValue($dataShaxrixon, "G981");
            $ges2Shaxrixon954 = $this->getValue($dataShaxrixon, "G954");

            $power2Shaxrixon900 = $ges2Shaxrixon900[2] * 12600 / $CONST;//active
            $reactive2Shaxrixon901 = $ges2Shaxrixon901[2] * 12600 / $CONST;//reactive

            $set2Shaxrixon981 = $ges2Shaxrixon981[2] * 100 / $kvt;
            $set2Shaxrixon954 = $ges2Shaxrixon954[2] * 100 / $kvt;

            $set2Shaxrixon792 = $ges2Shaxrixon792[2] * 10500 / $CONST;
            $set2Shaxrixon819 = $ges2Shaxrixon819[2] * 16500 / $CONST;
            $set2Shaxrixon846 = $ges2Shaxrixon846[2] * 16500 / $CONST;
            $set2Shaxrixon873 = $ges2Shaxrixon873[2] * 10500 / $CONST;
            $set2Shaxrixon927 = $ges2Shaxrixon927[2] * 2100 / $CONST;
            $set2Shaxrixon1004 = $ges2Shaxrixon1004[2] * 2100 / $CONST;
            $set2Shaxrixon1018 = $ges2Shaxrixon1018[2] * 2100 / $CONST;
            $set2Shaxrixon1041 = $ges2Shaxrixon1041[2] * 2100 / $CONST;

            $ges2ShaxrixonActive = $power2Shaxrixon900;
            $ges2ShaxrixonReactive = $reactive2Shaxrixon901;
            $ges2ShaxrixonActiveOut = ($set2Shaxrixon792 > 0 ? $set2Shaxrixon792 : 0) +
                ($set2Shaxrixon819 > 0 ? $set2Shaxrixon819 : 0) +
                ($set2Shaxrixon846 > 0 ? $set2Shaxrixon846 : 0) +
                ($set2Shaxrixon873 > 0 ? $set2Shaxrixon873 : 0) +
                ($set2Shaxrixon927 > 0 ? $set2Shaxrixon927 : 0) +
                ($set2Shaxrixon1004 > 0 ? $set2Shaxrixon1004 : 0) +
                ($set2Shaxrixon1018 > 0 ? $set2Shaxrixon1018 : 0) +
                ($set2Shaxrixon1041 > 0 ? $set2Shaxrixon1041 : 0);
            $ges2ShaxrixonActiveIn = ($set2Shaxrixon792 < 0 ? $set2Shaxrixon792 : 0) +
                ($set2Shaxrixon819 < 0 ? $set2Shaxrixon819 : 0) +
                ($set2Shaxrixon846 < 0 ? $set2Shaxrixon846 : 0) +
                ($set2Shaxrixon873 < 0 ? $set2Shaxrixon873 : 0) +
                ($set2Shaxrixon927 < 0 ? $set2Shaxrixon927 : 0) +
                ($set2Shaxrixon1004 < 0 ? $set2Shaxrixon1004 : 0) +
                ($set2Shaxrixon1018 < 0 ? $set2Shaxrixon1018 : 0) +
                ($set2Shaxrixon1041 < 0 ? $set2Shaxrixon1041 : 0);
            $ges2ShaxrixonOwnNeeds = $set2Shaxrixon981 + $set2Shaxrixon954;
            $ges2ShaxrixonAggregateTrue = ($ges2Shaxrixon900[2] > 0 ? 1 : 0);
            $ges2ShaxrixonAggregateError = 0;
            $ges2ShaxrixonAggregateFalse = ($ges2Shaxrixon900[2] <= 0 ? 1 : 0) - $ges2ShaxrixonAggregateError;

            $ges3Shaxrixon727 = $this->getValue($dataShaxrixon, "G727");
            $ges3Shaxrixon726 = $this->getValue($dataShaxrixon, "G726");

            $set3Shaxrixon727 = $ges3Shaxrixon727[2] * 16500 / $CONST;
            $set3Shaxrixon726 = $ges3Shaxrixon726[2] * 16500 / $CONST;

            $power3Shaxrixon = 0;// $ges2Shaxrixon900[2] * 12600 / $CONST;//active
            $reactive3Shaxrixon = 0;// $ges2Shaxrixon901[2] * 12600 / $CONST;//reactive

            $ges3ShaxrixonActive = $power3Shaxrixon;
            $ges3ShaxrixonReactive = $reactive3Shaxrixon;
            $ges3ShaxrixonActiveOut = $set3Shaxrixon726;
            $ges3ShaxrixonActiveIn = $set3Shaxrixon727;
            $ges3ShaxrixonOwnNeeds = 0;
            $ges3ShaxrixonAggregateTrue = ($power3Shaxrixon > 0 ? 1 : 0);
            $ges3ShaxrixonAggregateError = 0;
            $ges3ShaxrixonAggregateFalse = ($power3Shaxrixon <= 0 ? 1 : 0) - $ges3ShaxrixonAggregateError;

            $activeShaxrixon = $ges5ShaxrixonActive + $ges6ShaxrixonActive + $ges1ShaxrixonActive + $ges2ShaxrixonActive + $ges3ShaxrixonActive;
            $reactiveShaxrixon = $ges5ShaxrixonReactive + $ges6ShaxrixonReactive + $ges1ShaxrixonReactive + $ges2ShaxrixonReactive + $ges3ShaxrixonReactive;
            $activeOutShaxrixon = $ges5ShaxrixonActiveOut + $ges6ShaxrixonActiveOut + $ges1ShaxrixonActiveOut + $ges2ShaxrixonActiveOut + $ges3ShaxrixonActiveOut;
            $activeInShaxrixon = $ges5ShaxrixonActiveIn + $ges6ShaxrixonActiveIn + $ges1ShaxrixonActiveIn + $ges2ShaxrixonActiveIn + $ges3ShaxrixonActiveIn;
            $ownNeedsShaxrixon = $ges5ShaxrixonOwnNeeds + $ges6ShaxrixonOwnNeeds + $ges1ShaxrixonOwnNeeds + $ges2ShaxrixonOwnNeeds + $ges3ShaxrixonOwnNeeds;
            $trueShaxrixon = $ges5ShaxrixonAggregateTrue + $ges6ShaxrixonAggregateTrue + $ges1ShaxrixonAggregateTrue + $ges2ShaxrixonAggregateTrue + $ges3ShaxrixonAggregateTrue;
            $errorShaxrixon = $ges5ShaxrixonAggregateError + $ges6ShaxrixonAggregateError + $ges1ShaxrixonAggregateError + $ges2ShaxrixonAggregateError + $ges3ShaxrixonAggregateError;
            $falseShaxrixon = $ges5ShaxrixonAggregateFalse + $ges6ShaxrixonAggregateFalse + $ges1ShaxrixonAggregateFalse + $ges2ShaxrixonAggregateFalse + $ges3ShaxrixonAggregateFalse;
        } catch (\Exception $e) {
            $activeShaxrixon = 0;
            $reactiveShaxrixon = 0;
            $activeOutShaxrixon = 0;
            $activeInShaxrixon = 0;
            $ownNeedsShaxrixon = 0;
            $trueShaxrixon = 0;
            $errorShaxrixon = 0;
            $falseShaxrixon = 0;
        }

        /*Samarqand*/
        try {
            $dataSamarqand = $this->fetchData("http://user:usrG2b_h@192.168.40.215:10122/crq?req=current");
            $ges2bSamarqand254 = $this->getValue($dataSamarqand, "G254");
            $ges2bSamarqand253 = $this->getValue($dataSamarqand, "G253");
            $ges2bSamarqand614 = $this->getValue($dataSamarqand, "G614");
            $ges2bSamarqand613 = $this->getValue($dataSamarqand, "G613");
            $ges2bSamarqand29 = $this->getValue($dataSamarqand, "G29");
            $ges2bSamarqand28 = $this->getValue($dataSamarqand, "G28");
            $ges2bSamarqand94 = $this->getValue($dataSamarqand, "G94");
            $ges2bSamarqand93 = $this->getValue($dataSamarqand, "G93");
            $ges2bSamarqand14 = $this->getValue($dataSamarqand, "G14");
            $ges2bSamarqand13 = $this->getValue($dataSamarqand, "G13");
            $ges2bSamarqand373 = $this->getValue($dataSamarqand, "G373");
            $ges2bSamarqand453 = $this->getValue($dataSamarqand, "G453");
            $ges2bSamarqand77 = $this->getValue($dataSamarqand, "B77");
            $ges2bSamarqand293 = $this->getValue($dataSamarqand, "G293");
            $ges2bSamarqand295 = $this->getValue($dataSamarqand, "G295");
            $ges2bSamarqand493 = $this->getValue($dataSamarqand, "G493");
            $ges2bSamarqand495 = $this->getValue($dataSamarqand, "G495");
            $ges2bSamarqand413 = $this->getValue($dataSamarqand, "G413");
            $ges2bSamarqand415 = $this->getValue($dataSamarqand, "G415");

            $set2bSamarqand14 = $ges2bSamarqand14[2] * 42000 / $CONST;
            $set2bSamarqand29 = $ges2bSamarqand29[2] * 42000 / $CONST;
            $set2bSamarqand94 = $ges2bSamarqand94[2] * 42000 / $CONST;
            $set2bSamarqand254 = $ges2bSamarqand254[2] * 42000 / $CONST;
            $set2bSamarqand614 = $ges2bSamarqand614[2] * 42000 / $CONST;

            $set2bSamarqand13 = $ges2bSamarqand13[2] * 42000 / $CONST;
            $set2bSamarqand28 = $ges2bSamarqand28[2] * 42000 / $CONST;
            $set2bSamarqand93 = $ges2bSamarqand93[2] * 42000 / $CONST;
            $set2bSamarqand253 = $ges2bSamarqand253[2] * 42000 / $CONST;
            $set2bSamarqand613 = $ges2bSamarqand613[2] * 42000 / $CONST;

            $set2bSamarqand373 = $ges2bSamarqand373[2] * 42000 / $CONST;
            $set2bSamarqand453 = $ges2bSamarqand453[2] * 42000 / $CONST;
            $set2bSamarqand77 = $ges2bSamarqand77[2] * 42000 / $CONST;

            $power2bSamarqand293 = $ges2bSamarqand293[2] * 40000 / $CONST;//active
            $reactive2bSamarqand295 = $ges2bSamarqand295[2] * 40000 / $CONST;//reactive

            $power2bSamarqand493 = $ges2bSamarqand493[2] * 40000 / $CONST;//active
            $reactive2bSamarqand495 = $ges2bSamarqand495[2] * 40000 / $CONST;//reactive

            $power2bSamarqand413 = $ges2bSamarqand413[2] * 40000 / $CONST;//active
            $reactive2bSamarqand415 = $ges2bSamarqand415[2] * 40000 / $CONST;//reactive

            $ges2bSamarqandActive = $power2bSamarqand293 + $power2bSamarqand493 + $power2bSamarqand413;
            $ges2bSamarqandReactive = $reactive2bSamarqand295 + $reactive2bSamarqand495 + $reactive2bSamarqand415;
            $ges2bSamarqandActiveOut =  $set2bSamarqand13 +
                $set2bSamarqand28 +
                $set2bSamarqand93 +
                $set2bSamarqand253 +
                $set2bSamarqand613;
            $ges2bSamarqandActiveIn = $set2bSamarqand14 +
                $set2bSamarqand29 +
                $set2bSamarqand94 +
                $set2bSamarqand254 +
                $set2bSamarqand614;
            $ges2bSamarqandOwnNeeds = $set2bSamarqand373 + $set2bSamarqand453 + $set2bSamarqand77;
            $ges2bSamarqandAggregateTrue = ($ges2bSamarqand293[2] > 0 ? 1 : 0) + ($ges2bSamarqand493[2] > 0 ? 1 : 0) + ($ges2bSamarqand413[2] > 0 ? 1 : 0);
            $ges2bSamarqandAggregateError = 0;
            $ges2bSamarqandAggregateFalse = ($ges2bSamarqand293[2] <= 0 ? 1 : 0) + ($ges2bSamarqand493[2] <= 0 ? 1 : 0) + ($ges2bSamarqand413[2] <= 0 ? 1 : 0) - $ges2bSamarqandAggregateError;

            $ges3bSamarqand910 = $this->getValue($dataSamarqand, "G910");
            $ges3bSamarqand985 = $this->getValue($dataSamarqand, "G985");
            $ges3bSamarqand970 = $this->getValue($dataSamarqand, "G970");
            $ges3bSamarqand940 = $this->getValue($dataSamarqand, "G940");
            $ges3bSamarqand955 = $this->getValue($dataSamarqand, "G955");
            $ges3bSamarqand880 = $this->getValue($dataSamarqand, "G880");
            $ges3bSamarqand881 = $this->getValue($dataSamarqand, "G881");
            $ges3bSamarqand895 = $this->getValue($dataSamarqand, "G895");
            $ges3bSamarqand896 = $this->getValue($dataSamarqand, "G896");
            $ges3bSamarqand1029 = $this->getValue($dataSamarqand, "G1029");
            $ges3bSamarqand1031 = $this->getValue($dataSamarqand, "G1031");
            $ges3bSamarqand925 = $this->getValue($dataSamarqand, "G925");

            $power3bSamarqand880 = $ges3bSamarqand880[2] * 7200 / $CONST;//active
            $reactive3bSamarqand881 = $ges3bSamarqand881[2] * 7200 / $CONST;//reactive

            $power3bSamarqand895 = $ges3bSamarqand895[2] * 7200 / $CONST;//active
            $reactive3bSamarqand896 = $ges3bSamarqand896[2] * 7200 / $CONST;//reactive

            $power3bSamarqand1029 = $ges3bSamarqand1029[2] * 120 / $CONST;//active
            $reactive3bSamarqand1031 = $ges3bSamarqand1031[2] * 120 / $CONST;//reactive

            $set3bSamarqand940 = $ges3bSamarqand940[2] * 60 / $kvt;
            $set3bSamarqand955 = $ges3bSamarqand955[2] * 60 / $kvt;

            $set3bSamarqand910 = $ges3bSamarqand910[2] * 140000 / $CONST;
            $set3bSamarqand925 = $ges3bSamarqand925[2] * 210000 / $CONST;
            $set3bSamarqand970 = $ges3bSamarqand970[2] * 2400 / $CONST;
            $set3bSamarqand985 = $ges3bSamarqand985[2] * 2400 / $CONST;

            $ges3bSamarqandActive = $power3bSamarqand880 + $power3bSamarqand895 + $power3bSamarqand1029;
            $ges3bSamarqandReactive = $reactive3bSamarqand881 + $reactive3bSamarqand896 + $reactive3bSamarqand1031;
            $ges3bSamarqandActiveOut =  ($set3bSamarqand910 > 0 ? $set3bSamarqand910 : 0) +
                ($set3bSamarqand925 > 0 ? $set3bSamarqand925 : 0) +
                ($set3bSamarqand970 > 0 ? $set3bSamarqand970 : 0) +
                ($set3bSamarqand985 > 0 ? $set3bSamarqand985 : 0);
            $ges3bSamarqandActiveIn = ($set3bSamarqand910 < 0 ? $set3bSamarqand910 : 0) +
                ($set3bSamarqand925 < 0 ? $set3bSamarqand925 : 0) +
                ($set3bSamarqand970 < 0 ? $set3bSamarqand970 : 0) +
                ($set3bSamarqand985 < 0 ? $set3bSamarqand985 : 0);
            $ges3bSamarqandOwnNeeds = $set3bSamarqand940 + $set3bSamarqand955;
            $ges3bSamarqandAggregateTrue = ($ges3bSamarqand880[2] > 0 ? 1 : 0) + ($ges3bSamarqand895[2] > 0 ? 1 : 0) + ($ges3bSamarqand1029[2] > 0 ? 1 : 0);
            $ges3bSamarqandAggregateError = 0;
            $ges3bSamarqandAggregateFalse = ($ges3bSamarqand880[2] <= 0 ? 1 : 0) + ($ges3bSamarqand895[2] <= 0 ? 1 : 0) + ($ges3bSamarqand1029[2] <= 0 ? 1 : 0) - $ges3bSamarqandAggregateError;

            $ges1bSamarqand101 = $this->getValue($dataSamarqand, "B101");
            $ges1bSamarqand102 = $this->getValue($dataSamarqand, "B102");
            $ges1bSamarqand105 = $this->getValue($dataSamarqand, "B105");
            $ges1bSamarqand106 = $this->getValue($dataSamarqand, "B106");
            $ges1bSamarqand109 = $this->getValue($dataSamarqand, "B109");
            $ges1bSamarqand110 = $this->getValue($dataSamarqand, "B110");
            $ges1bSamarqand113 = $this->getValue($dataSamarqand, "B113");
            $ges1bSamarqand114 = $this->getValue($dataSamarqand, "B114");
            $ges1bSamarqand743 = $this->getValue($dataSamarqand, "G743");
            $ges1bSamarqand779 = $this->getValue($dataSamarqand, "G779");
            $ges1bSamarqand780 = $this->getValue($dataSamarqand, "G780");
            $ges1bSamarqand125 = $this->getValue($dataSamarqand, "B125");
            $ges1bSamarqand713 = $this->getValue($dataSamarqand, "G713");
            $ges1bSamarqand714 = $this->getValue($dataSamarqand, "G714");
            $ges1bSamarqand728 = $this->getValue($dataSamarqand, "G728");
            $ges1bSamarqand729 = $this->getValue($dataSamarqand, "G729");
            $ges1bSamarqand817 = $this->getValue($dataSamarqand, "G817");
            $ges1bSamarqand819 = $this->getValue($dataSamarqand, "G819");
            $ges1bSamarqand840 = $this->getValue($dataSamarqand, "G840");
            $ges1bSamarqand842 = $this->getValue($dataSamarqand, "G842");
            $ges1bSamarqand758 = $this->getValue($dataSamarqand, "G758");

            $power1bSamarqand713 = $ges1bSamarqand713[2] * 2400 / $CONST;//active
            $reactive1bSamarqand714 = $ges1bSamarqand714[2] * 2400 / $CONST;//reactive

            $power1bSamarqand728 = $ges1bSamarqand728[2] * 2400 / $CONST;//active
            $reactive1bSamarqand729 = $ges1bSamarqand729[2] * 2400 / $CONST;//reactive

            $power1bSamarqand817 = $ges1bSamarqand817[2] * 120 / $CONST;//active
            $reactive1bSamarqand819 = $ges1bSamarqand819[2] * 120 / $CONST;//reactive

            $power1bSamarqand840 = $ges1bSamarqand840[2] * 120 / $CONST;//active
            $reactive1bSamarqand842 = $ges1bSamarqand842[2] * 120 / $CONST;//reactive

            $set1bSamarqand758 = $ges1bSamarqand758[2] * 600 / $kvt;
            $set1bSamarqand125 = $ges1bSamarqand125[2] * 40 / $kvt;

            $set1bSamarqand101 = $ges1bSamarqand101[2] * 1800 / $CONST;
            $set1bSamarqand102 = $ges1bSamarqand102[2] * 1800 / $CONST;
            $set1bSamarqand105 = $ges1bSamarqand105[2] * 4800 / $CONST;
            $set1bSamarqand106 = $ges1bSamarqand106[2] * 4800 / $CONST;
            $set1bSamarqand109 = $ges1bSamarqand109[2] * 3600 / $CONST;
            $set1bSamarqand110 = $ges1bSamarqand110[2] * 3600 / $CONST;
            $set1bSamarqand113 = $ges1bSamarqand113[2] * 4800 / $CONST;
            $set1bSamarqand114 = $ges1bSamarqand114[2] * 4800 / $CONST;
            $set1bSamarqand743 = $ges1bSamarqand743[2] * 14000 / $CONST;
            $set1bSamarqand779 = $ges1bSamarqand779[2] * 7200 / $CONST;
            $set1bSamarqand780 = $ges1bSamarqand780[2] * 7200 / $CONST;

            $ges1bSamarqandActive = $power1bSamarqand713 + $power1bSamarqand728 + $power1bSamarqand817 + $power1bSamarqand840;
            $ges1bSamarqandReactive = $reactive1bSamarqand714 + $reactive1bSamarqand729 + $reactive1bSamarqand819 + $reactive1bSamarqand842;
            $ges1bSamarqandActiveOut =  $set1bSamarqand101 + $set1bSamarqand105 + $set1bSamarqand109 + $set1bSamarqand113 + ($set1bSamarqand743 > 0 ? $set1bSamarqand743 : 0) + $set1bSamarqand779;
            $ges1bSamarqandActiveIn = $set1bSamarqand102 + $set1bSamarqand106 + $set1bSamarqand110 + $set1bSamarqand114 + ($set1bSamarqand743 < 0 ? $set1bSamarqand743 : 0) + $set1bSamarqand780;
            $ges1bSamarqandOwnNeeds = $set1bSamarqand758 + $set1bSamarqand125;
            $ges1bSamarqandAggregateTrue = ($ges1bSamarqand713[2] > 0 ? 1 : 0) + ($ges1bSamarqand728[2] > 0 ? 1 : 0) + ($ges1bSamarqand817[2] > 0 ? 1 : 0) + ($ges1bSamarqand840[2] > 0 ? 1 : 0);
            $ges1bSamarqandAggregateError = 1;
            $ges1bSamarqandAggregateFalse = ($ges1bSamarqand713[2] <= 0 ? 1 : 0) + ($ges1bSamarqand728[2] <= 0 ? 1 : 0) + ($ges1bSamarqand817[2] <= 0 ? 1 : 0) + ($ges1bSamarqand840[2] <= 0 ? 1 : 0) - $ges1bSamarqandAggregateError;

            $ges5bSamarqand1182 = $this->getValue($dataSamarqand, "G1182");
            $ges5bSamarqand1204 = $this->getValue($dataSamarqand, "G1204");
            $ges5bSamarqand1203 = $this->getValue($dataSamarqand, "G1203");
            $ges5bSamarqand1220 = $this->getValue($dataSamarqand, "G1220");
            $ges5bSamarqand1152 = $this->getValue($dataSamarqand, "G1152");
            $ges5bSamarqand1137 = $this->getValue($dataSamarqand, "G1137");
            $ges5bSamarqand1167 = $this->getValue($dataSamarqand, "G1167");
            $ges5bSamarqand1287 = $this->getValue($dataSamarqand, "G1287");
            $ges5bSamarqand1069 = $this->getValue($dataSamarqand, "G1069");
            $ges5bSamarqand1070 = $this->getValue($dataSamarqand, "G1070");
            $ges5bSamarqand1084 = $this->getValue($dataSamarqand, "G1084");
            $ges5bSamarqand1085 = $this->getValue($dataSamarqand, "G1085");
            $ges5bSamarqand1241 = $this->getValue($dataSamarqand, "G1241");
            $ges5bSamarqand1243 = $this->getValue($dataSamarqand, "G1243");
            $ges5bSamarqand1264 = $this->getValue($dataSamarqand, "G1264");
            $ges5bSamarqand1266 = $this->getValue($dataSamarqand, "G1266");
            $ges5bSamarqand1120 = $this->getValue($dataSamarqand, "G1120");

            $power5bSamarqand1069 = $ges5bSamarqand1069[2] * 7200 / $CONST;//active
            $reactive5bSamarqand1070 = $ges5bSamarqand1070[2] * 7200 / $CONST;//reactive

            $power5bSamarqand1084 = $ges5bSamarqand1084[2] * 7200 / $CONST;//active
            $reactive5bSamarqand1085 = $ges5bSamarqand1085[2] * 7200 / $CONST;//reactive

            $power5bSamarqand1241 = $ges5bSamarqand1241[2] * 120 / $CONST;//active
            $reactive5bSamarqand1243 = $ges5bSamarqand1243[2] * 120 / $CONST;//reactive

            $power5bSamarqand1264 = $ges5bSamarqand1264[2] * 120 / $CONST;//active
            $reactive5bSamarqand1266 = $ges5bSamarqand1266[2] * 120 / $CONST;//reactive

            $set5bSamarqand1120 = $ges5bSamarqand1120[2] * 60 / $kvt;
            $set5bSamarqand1287 = $ges5bSamarqand1287[2] * 10 / $kvt;

            $set5bSamarqand1137 = $ges5bSamarqand1137[2] * 3600 / $CONST;
            $set5bSamarqand1152 = $ges5bSamarqand1152[2] * 2400 / $CONST;
            $set5bSamarqand1167 = $ges5bSamarqand1167[2] * 1200 / $CONST;
            $set5bSamarqand1182 = $ges5bSamarqand1182[2] * 14000 / $CONST;
            $set5bSamarqand1203 = $ges5bSamarqand1203[2] * 14000 / $CONST;
            $set5bSamarqand1204 = $ges5bSamarqand1204[2] * 14000 / $CONST;
            $set5bSamarqand1220 = $ges5bSamarqand1220[2] * 70000 / $CONST;

            $ges5bSamarqandActive = $power5bSamarqand1069 + $power5bSamarqand1084 + $power5bSamarqand1241 + $power5bSamarqand1264;
            $ges5bSamarqandReactive = $reactive5bSamarqand1070 + $reactive5bSamarqand1085 + $reactive5bSamarqand1243 + $reactive5bSamarqand1266;
            $ges5bSamarqandActiveOut =  ($set5bSamarqand1137 > 0 ? $set5bSamarqand1137 : 0) +
                ($set5bSamarqand1152 > 0 ? $set5bSamarqand1152 : 0) +
                ($set5bSamarqand1167 > 0 ? $set5bSamarqand1167 : 0) +
                ($set5bSamarqand1182 > 0 ? $set5bSamarqand1182 : 0) +
                $set5bSamarqand1203 +
                ($set5bSamarqand1220 > 0 ? $set5bSamarqand1220 : 0);
            $ges5bSamarqandActiveIn = ($set5bSamarqand1137 < 0 ? $set5bSamarqand1137 : 0) +
                ($set5bSamarqand1152 < 0 ? $set5bSamarqand1152 : 0) +
                ($set5bSamarqand1167 < 0 ? $set5bSamarqand1167 : 0) +
                ($set5bSamarqand1182 < 0 ? $set5bSamarqand1182 : 0) +
                $set5bSamarqand1204 +
                ($set5bSamarqand1220 < 0 ? $set5bSamarqand1220 : 0);
            $ges5bSamarqandOwnNeeds = $set5bSamarqand1120 + $set5bSamarqand1287;
            $ges5bSamarqandAggregateTrue = ($ges5bSamarqand1069[2] > 0 ? 1 : 0) + ($ges5bSamarqand1084[2] > 0 ? 1 : 0) + ($ges5bSamarqand1241[2] > 0 ? 1 : 0) + ($ges5bSamarqand1264[2] > 0 ? 1 : 0);
            $ges5bSamarqandAggregateError = 1;
            $ges5bSamarqandAggregateFalse = ($ges5bSamarqand1069[2] <= 0 ? 1 : 0) + ($ges5bSamarqand1084[2] <= 0 ? 1 : 0) + ($ges5bSamarqand1241[2] <= 0 ? 1 : 0) + ($ges5bSamarqand1264[2] <= 0 ? 1 : 0) - $ges5bSamarqandAggregateError;

            $gesUrgutSamarqand258 = $this->getValue($dataSamarqand, "B258");
            $gesUrgutSamarqand257 = $this->getValue($dataSamarqand, "B257");
            $gesUrgutSamarqand1304 = $this->getValue($dataSamarqand, "G1304");
            $gesUrgutSamarqand1305 = $this->getValue($dataSamarqand, "G1305");
            $gesUrgutSamarqand1319 = $this->getValue($dataSamarqand, "G1319");

            $powerUrgutSamarqand1304 = $gesUrgutSamarqand1304[2] * 4800 / $CONST;//active
            $reactiveUrgutSamarqand1305 = $gesUrgutSamarqand1305[2] * 4800 / $CONST;//reactive

            $setUrgutSamarqand1319 = $gesUrgutSamarqand1319[2] * 10 / $kvt;

            $gesUrgutSamarqand257 = $gesUrgutSamarqand257[2] * 3600 / $CONST;
            $gesUrgutSamarqand258 = $gesUrgutSamarqand258[2] * 3600 / $CONST;
            if ($powerUrgutSamarqand1304 > 2.5) {
                $allTrue = 6;
                $allFalse = 0;
            } else if ($powerUrgutSamarqand1304 < 2.5 && $powerUrgutSamarqand1304 > 2) {
                $allTrue = 5;
                $allFalse = 1;
            } else if ($powerUrgutSamarqand1304 < 2 && $powerUrgutSamarqand1304 > 1.5) {
                $allTrue = 4;
                $allFalse = 2;
            } else if ($powerUrgutSamarqand1304 < 1.5 && $powerUrgutSamarqand1304 > 1) {
                $allTrue = 3;
                $allFalse = 3;
            } else if ($powerUrgutSamarqand1304 < 1 && $powerUrgutSamarqand1304 > 0.5) {
                $allTrue = 2;
                $allFalse = 4;
            } else if ($powerUrgutSamarqand1304 < 0.5 && $powerUrgutSamarqand1304 > 0) {
                $allTrue = 1;
                $allFalse = 5;
            } else {
                $allTrue = 0;
                $allFalse = 6;
            }
            $gesUrgutSamarqandActive = $powerUrgutSamarqand1304;
            $gesUrgutSamarqandReactive = $reactiveUrgutSamarqand1305;
            $gesUrgutSamarqandActiveOut =  $gesUrgutSamarqand257;
            $gesUrgutSamarqandActiveIn = $gesUrgutSamarqand258;
            $gesUrgutSamarqandOwnNeeds = $setUrgutSamarqand1319;
            $gesUrgutSamarqandAggregateTrue = $allTrue;
            $gesUrgutSamarqandAggregateError = 0;
            $gesUrgutSamarqandAggregateFalse = $allFalse - $gesUrgutSamarqandAggregateError;

            $gesShaudar1Samarqand273 = $this->getValue($dataSamarqand, "B273");
            $gesShaudar1Samarqand274 = $this->getValue($dataSamarqand, "B274");
            $gesShaudar1Samarqand1401 = $this->getValue($dataSamarqand, "G1401");
            $gesShaudar1Samarqand1355 = $this->getValue($dataSamarqand, "G1355");
            $gesShaudar1Samarqand1357 = $this->getValue($dataSamarqand, "G1357");
            $gesShaudar1Samarqand1378 = $this->getValue($dataSamarqand, "G1378");
            $gesShaudar1Samarqand1380 = $this->getValue($dataSamarqand, "G1380");
            $gesShaudar1Samarqand1348 = $this->getValue($dataSamarqand, "G1348");
            $gesShaudar1Samarqand1371 = $this->getValue($dataSamarqand, "G1371");
            $gesShaudar1Samarqand1394 = $this->getValue($dataSamarqand, "G1394");

            $powerShaudar1Samarqand1355 = $gesShaudar1Samarqand1355[2] * 15750 / $CONST;//active
            $reactiveShaudar1Samarqand1357 = $gesShaudar1Samarqand1357[2] * 15750 / $CONST;//reactive

            $powerShaudar1Samarqand1378 = $gesShaudar1Samarqand1378[2] * 15750 / $CONST;//active
            $reactiveShaudar1Samarqand1380 = $gesShaudar1Samarqand1380[2] * 15750 / $CONST;//reactive

            $setShaudar1Samarqand1401 = $gesShaudar1Samarqand1401[2] * 800 / $kvt;

            $setShaudar1Samarqand273 = $gesShaudar1Samarqand273[2] * 330000 / $CONST;
            $setShaudar1Samarqand274 = $gesShaudar1Samarqand274[2] * 330000 / $CONST;

            $gesShaudar1SamarqandActive = $powerShaudar1Samarqand1355 + $powerShaudar1Samarqand1378;
            $gesShaudar1SamarqandReactive = $reactiveShaudar1Samarqand1357 + $reactiveShaudar1Samarqand1380;
            $gesShaudar1SamarqandActiveOut =  $setShaudar1Samarqand273;
            $gesShaudar1SamarqandActiveIn = $setShaudar1Samarqand274;
            $gesShaudar1SamarqandOwnNeeds = $setShaudar1Samarqand1401;
            $gesShaudar1SamarqandAggregateTrue = ($gesShaudar1Samarqand1355[2] > 0 ? 1 : 0) + ($gesShaudar1Samarqand1378[2] > 0 ? 1 : 0);
            $gesShaudar1SamarqandAggregateError = 1;
            $gesShaudar1SamarqandAggregateFalse = ($gesShaudar1Samarqand1355[2] <= 0 ? 1 : 0) + ($gesShaudar1Samarqand1378[2] <= 0 ? 1 : 0) - $gesShaudar1SamarqandAggregateError;

            $activeSamarqand = $ges2bSamarqandActive + $ges3bSamarqandActive + $ges1bSamarqandActive + $ges5bSamarqandActive + $gesUrgutSamarqandActive + $gesShaudar1SamarqandActive;
            $reactiveSamarqand = $ges2bSamarqandReactive + $ges3bSamarqandReactive + $ges1bSamarqandReactive + $ges5bSamarqandReactive + $gesUrgutSamarqandReactive + $gesShaudar1SamarqandReactive;
            $activeOutSamarqand = $ges2bSamarqandActiveOut + $ges3bSamarqandActiveOut + $ges1bSamarqandActiveOut + $ges5bSamarqandActiveOut + $gesUrgutSamarqandActiveOut + $gesShaudar1SamarqandActiveOut;
            $activeInSamarqand = $ges2bSamarqandActiveIn + $ges3bSamarqandActiveIn + $ges1bSamarqandActiveIn + $ges5bSamarqandActiveIn + $gesUrgutSamarqandActiveIn + $gesShaudar1SamarqandActiveIn;
            $ownNeedsSamarqand = $ges2bSamarqandOwnNeeds + $ges3bSamarqandOwnNeeds + $ges1bSamarqandOwnNeeds + $ges5bSamarqandOwnNeeds + $gesUrgutSamarqandOwnNeeds + $gesShaudar1SamarqandOwnNeeds;
            $trueSamarqand = $ges2bSamarqandAggregateTrue + $ges3bSamarqandAggregateTrue + $ges1bSamarqandAggregateTrue + $ges5bSamarqandAggregateTrue + $gesUrgutSamarqandAggregateTrue + $gesShaudar1SamarqandAggregateTrue;
            $errorSamarqand = $ges2bSamarqandAggregateError + $ges3bSamarqandAggregateError + $ges1bSamarqandAggregateError + $ges5bSamarqandAggregateError + $gesUrgutSamarqandAggregateError + $gesShaudar1SamarqandAggregateError;
            $falseSamarqand = $ges2bSamarqandAggregateFalse + $ges3bSamarqandAggregateFalse + $ges1bSamarqandAggregateFalse + $ges5bSamarqandAggregateFalse + $gesUrgutSamarqandAggregateFalse + $gesShaudar1SamarqandAggregateFalse;
        } catch (\Exception $e) {
            $activeSamarqand = 0;
            $reactiveSamarqand = 0;
            $activeOutSamarqand = 0;
            $activeInSamarqand = 0;
            $ownNeedsSamarqand = 0;
            $trueSamarqand = 0;
            $errorSamarqand = 0;
            $falseSamarqand = 0;
        }

        $activeTuyamuyin = 150;
        $reactiveTuyamuyin = 0;
        $activeOutTuyamuyin = 0;
        $activeInTuyamuyin = 0;
        $ownNeedsTuyamuyin = 0;
        $trueTuyamuyin = 3;
        $errorTuyamuyin = 0;
        $falseTuyamuyin = 3;

        $active = $activeOhangaron + $activeTupolang + $activeAndijon + $activeUrtachirchiq + $activeChirchiq + $activeFarxod + $activeQodiriya +  $ges42QamchiqActive + $activeQuyibuzsuv + $activeToshkent + $activeHisorak + $activeKfk + $activeShaxrixon + $activeSamarqand + $activeTuyamuyin;
        $reactive = $reactiveOhangaron + $reactiveTupolang + $reactiveAndijon + $reactiveUrtachirchiq + $reactiveChirchiq + $reactiveFarxod + $reactiveQodiriya +  $ges42QamchiqReactive + $reactiveQuyibuzsuv + $reactiveToshkent + $reactiveHisorak + $reactiveKfk + $reactiveShaxrixon + $reactiveSamarqand + $reactiveTuyamuyin;
        $activeOut = $activeOutOhangaron + $activeOutTupolang + $activeOutAndijon + $activeOutUrtachirchiq + $activeOutChirchiq + $activeOutFarxod + $activeOutQodiriya + $ges42QamchiqActiveOut + $activeOutQuyibuzsuv + $activeOutToshkent + $activeOutHisorak + $activeOutKfk + $activeOutShaxrixon + $activeOutSamarqand + $activeOutTuyamuyin;
        $activeIn = $activeInOhangaron + $activeInTupolang + $activeInAndijon + $activeInUrtachirchiq + $activeInChirchiq + $activeInFarxod + $activeInQodiriya +  $ges42QamchiqActiveIn + $activeInQuyibuzsuv + $activeInToshkent + $activeInHisorak + $activeInKfk + $activeInShaxrixon + $activeInSamarqand + $activeInTuyamuyin;
        $ownNeeds = $ownNeedsOhangaron + $ownNeedsTupolang + $ownNeedsAndijon + $ownNeedsUrtachirchiq + $ownNeedsChirchiq + $ownNeedsFarxod + $ownNeedsQodiriya +  $ges42QamchiqOwnNeeds + $ownNeedsQuyibuzsuv + $ownNeedsToshkent + $ownNeedsHisorak + $ownNeedsKfk + $ownNeedsShaxrixon + $ownNeedsSamarqand + $ownNeedsTuyamuyin;
        $true = $trueOhangaron + $trueTupolang + $trueAndijon + $trueUrtachirchiq + $trueChirchiq + $trueFarxod + $trueQodiriya + $ges42QamchiqAggregateTrue + $trueQuyibuzsuv + $trueToshkent + $trueHisorak + $trueKfk + $trueShaxrixon + $trueSamarqand + $trueTuyamuyin;
        $error = $errorOhangaron + $errorTupolang + $errorAndijon + $errorUrtachirchiq + $errorChirchiq + $errorFarxod + $errorQodiriya + $ges42QamchiqAggregateError + $errorQuyibuzsuv + $errorToshkent + $errorHisorak + $errorKfk + $errorShaxrixon + $errorSamarqand + $errorTuyamuyin;
        $false = $falseOhangaron + $falseTupolang + $falseAndijon + $falseUrtachirchiq + $falseChirchiq + $falseFarxod + $falseQodiriya +  $ges42QamchiqAggregateFalse + $falseQuyibuzsuv + $falseToshkent + $falseHisorak + $falseKfk + $falseShaxrixon + $falseSamarqand + $falseTuyamuyin;
        // Example array data
        $data = array(
            array("id" => 1, "value" => $active),
            array("id" => 2, "value" => $reactive),
            array("id" => 3, "value" => $activeOut),
            array("id" => 4, "value" => $activeIn),
            array("id" => 5, "value" => $ownNeeds),
            array("id" => 6, "value" => $true),
            array("id" => 7, "value" => $false),
            array("id" => 8, "value" => $error),

            array("id" => 16, "value" => $activeOhangaron),
            array("id" => 17, "value" => $trueOhangaron),
            array("id" => 18, "value" => $falseOhangaron),
            array("id" => 19, "value" => $errorOhangaron),

            array("id" => 20, "value" => $activeTupolang),
            array("id" => 21, "value" => $trueTupolang),
            array("id" => 22, "value" => $falseTupolang),
            array("id" => 23, "value" => $errorTupolang),

            array("id" => 24, "value" => $activeAndijon),
            array("id" => 25, "value" => $trueAndijon),
            array("id" => 26, "value" => $falseAndijon),
            array("id" => 27, "value" => $errorAndijon),

            array("id" => 28, "value" => $activeUrtachirchiq),
            array("id" => 29, "value" => $trueUrtachirchiq),
            array("id" => 30, "value" => $falseUrtachirchiq),
            array("id" => 31, "value" => $errorUrtachirchiq),

            array("id" => 32, "value" => $activeChirchiq),
            array("id" => 33, "value" => $trueChirchiq),
            array("id" => 34, "value" => $falseChirchiq),
            array("id" => 35, "value" => $errorChirchiq),

            array("id" => 36, "value" => $activeFarxod),
            array("id" => 37, "value" => $trueFarxod),
            array("id" => 38, "value" => $falseFarxod),
            array("id" => 39, "value" => $errorFarxod),

            array("id" => 40, "value" => $activeQodiriya),
            array("id" => 41, "value" => $trueQodiriya),
            array("id" => 42, "value" => $falseQodiriya),
            array("id" => 43, "value" => $errorQodiriya),

            array("id" => 44, "value" => $ges42QamchiqActive),
            array("id" => 45, "value" => $ges42QamchiqAggregateTrue),
            array("id" => 46, "value" => $ges42QamchiqAggregateFalse),
            array("id" => 47, "value" => $ges42QamchiqAggregateError),

            array("id" => 48, "value" => $activeQuyibuzsuv),
            array("id" => 49, "value" => $trueQuyibuzsuv),
            array("id" => 50, "value" => $falseQuyibuzsuv),
            array("id" => 51, "value" => $errorQuyibuzsuv),

            array("id" => 52, "value" => $activeToshkent),
            array("id" => 53, "value" => $trueToshkent),
            array("id" => 54, "value" => $falseToshkent),
            array("id" => 55, "value" => $errorToshkent),

            array("id" => 56, "value" => $activeHisorak),
            array("id" => 57, "value" => $trueHisorak),
            array("id" => 58, "value" => $falseHisorak),
            array("id" => 59, "value" => $errorHisorak),

            array("id" => 60, "value" => $activeKfk),
            array("id" => 61, "value" => $trueKfk),
            array("id" => 62, "value" => $falseKfk),
            array("id" => 63, "value" => $errorKfk),

            array("id" => 64, "value" => $activeShaxrixon),
            array("id" => 65, "value" => $trueShaxrixon),
            array("id" => 66, "value" => $falseShaxrixon),
            array("id" => 67, "value" => $errorShaxrixon),

            array("id" => 68, "value" => $activeSamarqand),
            array("id" => 69, "value" => $trueSamarqand),
            array("id" => 70, "value" => $falseSamarqand),
            array("id" => 71, "value" => $errorSamarqand),

            array("id" => 72, "value" => $activeTuyamuyin),
            array("id" => 73, "value" => $trueTuyamuyin),
            array("id" => 74, "value" => $falseTuyamuyin),
            array("id" => 75, "value" => $errorTuyamuyin),
        );

        echo json_encode($data);
    }

    /**
     * Finds the Information model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Informations the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findInformationsModel($id)
    {
        if (($model = Informations::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Finds the Switch model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Switchs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findSwitchModel($id)
    {
        if (($model = Switchs::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Finds the Transformer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Transformer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findTransformerModel($id)
    {
        if (($model = Transformer::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
