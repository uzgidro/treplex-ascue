<?php

namespace frontend\controllers;

use common\models\Informations;
use common\models\InformationsSearch;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use Yii;
class InformationController extends \yii\web\Controller
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
     * Lists all Informations models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $searchModel = new InformationsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Informations model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Informations model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new Informations();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $uploaddir = 'upload/';

                $basenameAndExtension = explode('.', $_FILES['image']['name']);
                $ext = end($basenameAndExtension);

                $name_file = uniqid(date('Y_m_d_H_i_s')).'.'.$ext;
                $uploadfile = $uploaddir . $name_file;

                if(!empty(basename($_FILES['image']['name'])))
                {
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {

                        if ($model->load(Yii::$app->request->post())) {
                            $model->phoro_aggregate = $name_file;
                        }
                    }
                }

                $basenameAndExtension1 = explode('.', $_FILES['image1']['name']);
                $ext1 = end($basenameAndExtension1);

                $name_file1 = uniqid(date('Y_m_d_H_i_s')).'.'.$ext1;
                $uploadfile1 = $uploaddir . $name_file1;

                if(!empty(basename($_FILES['image1']['name'])))
                {
                    if (move_uploaded_file($_FILES['image1']['tmp_name'], $uploadfile1)) {

                        if ($model->load(Yii::$app->request->post())) {
                            $model->photo_turbin = $name_file1;
                        }
                    }
                }

                $model->id_org = Yii::$app->user->identity->id_organization;
                if (!$model->save()) {
                    $this->Alert('danger', 'times', 'Хатолик юз берди');
                    return $this->redirect(\Yii::$app->request->referrer);
                }
                $this->Alert('success', 'check', 'Маълумот қўшилди');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Informations model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {

            $uploaddir = 'upload/';

            $basenameAndExtension = explode('.', $_FILES['image']['name']);
            $ext = end($basenameAndExtension);

            $name_file = uniqid(date('Y_m_d_H_i_s')).'.'.$ext;
            $uploadfile = $uploaddir . $name_file;

            if (!empty(basename($_FILES['image']['name']))) {
                $delete = Informations::findOne($id);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                    if ($delete['phoro_aggregate'] != null) {
                        (unlink($uploaddir . $delete['phoro_aggregate']) && !empty($uploaddir . $delete['phoro_aggregate']));
                    }
                    $model->phoro_aggregate = $name_file;
                }
            }

            $basenameAndExtension1 = explode('.', $_FILES['image1']['name']);
            $ext1 = end($basenameAndExtension1);

            $name_file1 = uniqid(date('Y_m_d_H_i_s')).'.'.$ext1;
            $uploadfile1 = $uploaddir . $name_file1;

            if (!empty(basename($_FILES['image1']['name']))) {
                $delete1 = Informations::findOne($id);
                if (move_uploaded_file($_FILES['image1']['tmp_name'], $uploadfile1)) {
                    if ($delete1['photo_turbin'] != null) {
                        (unlink($uploaddir . $delete1['photo_turbin']) && !empty($uploaddir . $delete1['photo_turbin']));
                    }
                    $model->photo_turbin = $name_file1;
                }
            }

            $model->id_org = Yii::$app->user->identity->id_organization;
            if (!$model->save()) {
                $this->Alert('danger', 'times', 'Хатолик юз берди');
                return $this->redirect(\Yii::$app->request->referrer);
            }
            $this->Alert('success', 'check', 'Маълумот ўзгартирилди');
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Informations model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $delete = Informations::findOne($id);
        $uploaddir = 'upload/';
        if (unlink($uploaddir . $delete['phoro_aggregate']) && !empty($uploaddir . $delete['phoro_aggregate']) && unlink($uploaddir . $delete['photo_turbin']) && !empty($uploaddir . $delete['photo_turbin'])) {
            $this->findModel($id)->delete();
            $this->Alert('success', 'check', 'Маълумот ўчирилди');
        }else{
            $this->Alert('danger', 'times', 'Хатолик юз берди');
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Informations model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Informations the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Informations::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
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
