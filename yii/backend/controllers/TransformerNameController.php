<?php

namespace backend\controllers;

use common\models\TransformerName;
use common\models\TransformerNameSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * TransformerNameController implements the CRUD actions for TransformerName model.
 */
class TransformerNameController extends Controller
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
     * Lists all TransformerName models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TransformerNameSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TransformerName model.
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
     * Creates a new TransformerName model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TransformerName();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                if (!$model->save()) {
                    $this->Alert('danger', 'ban', 'Трансформатора не добавлено !!!');
                    return $this->redirect(Yii::$app->request->referrer);
                }
                $this->Alert('success', 'check', 'Трансформатора добавлено !!!');
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
     * Updates an existing TransformerName model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            if (!$model->save()) {
                $this->Alert('danger', 'ban', 'Трансформатора не измененно !!!');
            }
            $this->Alert('success', 'check', 'Трансформатора измененно!!!');
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TransformerName model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        $this->Alert('success', 'check', 'Трансформатора удалено!!!');
        return $this->redirect(['index']);
    }

    /**
     * Finds the TransformerName model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return TransformerName the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TransformerName::findOne(['id' => $id])) !== null) {
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
