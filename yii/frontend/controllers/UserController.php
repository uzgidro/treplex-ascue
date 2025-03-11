<?php

namespace frontend\controllers;

use frontend\models\User;
use frontend\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {

            $searchModel = new UserSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            return $this->goHome();
        }
    }

    /**
     * Displays a single User model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (!Yii::$app->user->isGuest) {

            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        } else {
            return $this->goHome();
        }
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
//    public function actionCreate()
//    {
//        $model = new User();
//
//        if ($this->request->isPost) {
//            if ($model->load($this->request->post())) {
//                $model->password = Yii::$app->security->generatePasswordHash($model->password);
//
//                if (!$model->save()) {
//                    $this->Alert('danger', 'times', 'Хатолоик юз берди ёки бу фойдаланувчи бор!!!');
//                    return $this->redirect(Yii::$app->request->referrer);
//                }
//                $this->Alert('success', 'check', "Фойдаланувчи қўшилди!!!");
//                return $this->redirect(['view', 'id' => $model->id]);
//            }
//        } else {
//            $model->loadDefaultValues();
//        }
//
//        return $this->render('create', [
//            'model' => $model,
//        ]);
//    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (!Yii::$app->user->isGuest) {

            $model = $this->findModel($id);

            if ($this->request->isPost && $model->load($this->request->post())) {
                $model->password = Yii::$app->security->generatePasswordHash($model->password);

                if (!$model->save()) {
                    $this->Alert('danger', 'times', 'Хатолоик юз берди ёки бу фойдаланувчи бор!!!');
                    return $this->redirect(Yii::$app->request->referrer);
                }
                $this->Alert('success', 'check', "Фойдаланувчи ўзгартирилди!!!");
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else {
            return $this->goHome();
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (!Yii::$app->user->isGuest) {

            $model = $this->findModel($id);
            if ($model->username == 'admin') {
                $this->Alert('danger', 'check', 'Асосий фойдаланувчини ўчириш мумкин эмас!!!');
            }

            if (!$model->delete()) {
                $this->Alert('danger', 'check', 'Хатолик юз берди!!!');
            }
            $this->Alert('success', 'check', 'Фойдаланувчи ўчирилди!!!');
            return $this->redirect(['index']);
        } else {
            return $this->goHome();
        }
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /*Alert*/
    public function Alert($color, $icon, $text) {
        Yii::$app->session->setFlash('msg', "
             <div class='alert alert-{$color} alert-dismissable'>
                <button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>
             <i class='fa fa-{$icon}'></i> {$text}!!!</div>"
        );
    }
}
