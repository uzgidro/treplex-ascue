<?php

namespace backend\controllers;

use common\models\Guides;
use common\models\GuidesSearch;
use common\models\Name;
use common\models\Water;
use PhpOffice\PhpSpreadsheet\IOFactory;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * GuidesController implements the CRUD actions for Guides model.
 */
class GuidesController extends Controller
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
     * Lists all Guides models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Guides();
        $searchModel = new GuidesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        if ($model->load($this->request->post())) {
            // Замените на ваш фактический класс модели
            $model->excelFile = \yii\web\UploadedFile::getInstance($model, 'excelFile');

            if ($model->excelFile) {
                $inputFileName = $model->excelFile->tempName;

                $spreadsheet = IOFactory::load($inputFileName);
                $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
                $i = 0;
                foreach ($sheetData as $row) {
                    if ($i == 0) {
                        $i++; continue;
                    }
                    $model->id = null;
                    $model->isNewRecord = true;
                    $model->pressure = str_replace(',', '', $row['A']);
                    $model->power = str_replace(',', '', $row['B']);
                    $model->guide = str_replace(',', '', $row['C']);

                    if (!$model->save()) {
                        $this->Alert('danger', 'times', 'Хатолик юз берди!!!');
                        return $this->redirect(Yii::$app->request->referrer);
                    }
                    $i++;
                }
                $this->Alert('Success', 'check', 'Ssqlandi!!!');
            } else {
                $this->Alert('danger', 'times', 'Хатолик юз берди!!!');
                return $this->redirect(Yii::$app->request->referrer);
            }
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Guides model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Guides model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Guides();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
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
     * Updates an existing Guides model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Guides model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Guides model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Guides the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Guides::findOne(['id' => $id])) !== null) {
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
