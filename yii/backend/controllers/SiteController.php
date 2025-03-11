<?php

namespace backend\controllers;

use common\models\LoginForm;
use frontend\controllers\Day;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
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
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'yesterday', 'today'],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {

            return $this->render('index');
        } else {
            return $this->redirect('login');
        }

    }

    /**
     * Login action.
     *
     * @return string|Response
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
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionYesterday($id)
    {
        if (!Yii::$app->user->isGuest) {
            switch ($id) {
                case 1: $message = '"Ўрта Чирчиқ ГЭСлар каскади" ФЛ'; $array = [24, 25, 26, 27]; break; //$urtachirchiq =
                case 2: $message = '"Чирчиқ ГЭСлар каскади" ФЛ'; $array = [28, 29, 30, 31]; break; //$chirchiq =
                case 3: $message = '"Қодирия ГЭСлар каскади" ФЛ'; $array = [33, 34, 35, 36, 76]; break;//$qodiriya =
                case 4: $message = '"Тошкент ГЭСлар каскади" ФЛ'; $array = [37, 38, 39, 40]; break;//$toshkent =
                case 5: $message = '"Қуйи Бўзсув ГЭСлар каскади" ФЛ'; $array = [41, 42, 43, 44, 45, 46]; break;//$quyibuzsuv =
                case 6: $message = '"Фарход ГЭС" ФЛ'; $array = [7, 48]; break;//$farxod =
                case 7: $message = '"Самарқанд ГЭСлар каскади" ФЛ'; $array = [49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 82]; break;//$samarqand =
                case 8: $message = '"Андижон ГЭС" ФЛ'; $array = [11, 59, 60, 62]; break;//$andijon =
                case 9: $message = '"Шахрихон ГЭСлар каскади" ФЛ'; $array = [63, 64, 65, 66]; break;//$shaxrixon =
                case 10: $message = '"КФК КГЭСлар каскади" ФЛ'; $array = [67, 68]; break;//$kfk =
                case 11: $message = '"Тўполанг ГЭСлар каскади" ФЛ'; $array = [71, 72, 73]; break;//$tupolang =
                case 12: $message = '"Оҳангарон ГЭС" ФЛ'; $array = [17, 75, 86]; break;//$oxangaron =
                case 13: $message = '"Ҳисорак ГЭС" ФЛ'; $array = [77]; break;//$xisorak =
                case 14: $message = '"Қамчиқ КГЭС" ФЛ'; $array = [78]; break;//$qamchiq =
                default: $message = ''; $array = [0]; break;
            }

            $day = new Day();

            if($day->getYesterday($array)){
                $this->Alert('success', 'check', $message.' кунлик маълумот қўшилди');
            }else{
                $this->Alert('danger', 'times', 'Хатолик юз берди');
            }
            return $this->redirect(Yii::$app->request->referrer);
        } else {
            return $this->redirect('login');
        }
    }

    public function actionToday($id)
    {
        if (!Yii::$app->user->isGuest) {
            switch ($id) {
                case 1: $message = '"Ўрта Чирчиқ ГЭСлар каскади" ФЛ'; $array = [24, 25, 26, 27]; break; //$urtachirchiq =
                case 2: $message = '"Чирчиқ ГЭСлар каскади" ФЛ'; $array = [28, 29, 30, 31]; break; //$chirchiq =
                case 3: $message = '"Қодирия ГЭСлар каскади" ФЛ'; $array = [33, 34, 35, 36, 76]; break;//$qodiriya =
                case 4: $message = '"Тошкент ГЭСлар каскади" ФЛ'; $array = [37, 38, 39, 40]; break;//$toshkent =
                case 5: $message = '"Қуйи Бўзсув ГЭСлар каскади" ФЛ'; $array = [41, 42, 43, 44, 45, 46]; break;//$quyibuzsuv =
                case 6: $message = '"Фарход ГЭС" ФЛ'; $array = [7, 48]; break;//$farxod =
                case 7: $message = '"Самарқанд ГЭСлар каскади" ФЛ'; $array = [49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 82]; break;//$samarqand =
                case 8: $message = '"Андижон ГЭС" ФЛ'; $array = [11, 59, 60, 62]; break;//$andijon =
                case 9: $message = '"Шахрихон ГЭСлар каскади" ФЛ'; $array = [63, 64, 65, 66]; break;//$shaxrixon =
                case 10: $message = '"КФК КГЭСлар каскади" ФЛ'; $array = [67, 68]; break;//$kfk =
                case 11: $message = '"Тўполанг ГЭСлар каскади" ФЛ'; $array = [71, 72, 73]; break;//$tupolang =
                case 12: $message = '"Оҳангарон ГЭС" ФЛ'; $array = [17, 75, 86]; break;//$oxangaron =
                case 13: $message = '"Ҳисорак ГЭС" ФЛ'; $array = [77]; break;//$xisorak =
                case 14: $message = '"Қамчиқ КГЭС" ФЛ'; $array = [78]; break;//$qamchiq =
                default: $message = ''; $array = [0]; break;
            }

            $day = new Day();

            if($day->getHour($array)){
                $this->Alert('success', 'check', $message.' соатлик маълумот қўшилди');
            }else{
                $this->Alert('danger', 'times', 'Хатолик юз берди');
            }
            return $this->redirect(Yii::$app->request->referrer);
        } else {
            return $this->redirect('login');
        }
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
