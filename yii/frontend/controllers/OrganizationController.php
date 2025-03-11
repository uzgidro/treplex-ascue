<?php

namespace frontend\controllers;

use common\models\Organization;
use common\models\OrganizationSearch;
use common\models\Projects;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * OrganizationController implements the CRUD actions for Organization model.
 */
class OrganizationController extends Controller
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
     * Lists all Organization models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->identity->type == 9) {
            $searchModel = new OrganizationSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            $this->goHome();
        }
    }

    /**
     * Displays a single Organization model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (Yii::$app->user->identity->type == 9) {

            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        } else {
            $this->goHome();
        }
    }

    /**
     * Creates a new Organization model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (Yii::$app->user->identity->type == 9) {

            $model = new Organization();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    $this->Alert('success', 'check', 'Ташкилот қўшилди!!!');
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            } else {
                $model->loadDefaultValues();
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        } else {
            $this->goHome();
        }
    }

    /**
     * Updates an existing Organization model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->identity->type == 9) {

            $model = $this->findModel($id);

            if ($this->request->isPost && $model->load($this->request->post())) {
                if ($model->id == $model->id_organization) {
                    $this->Alert('success', 'danger', 'Юқори турувчи ташкилот нотўғри танланган!!!');
                    return $this->redirect(Yii::$app->request->referrer);
                }
                if (!$model->save()) {
                    $this->Alert('success', 'check', 'Хатолик юз берди!!!');
                    return $this->redirect(Yii::$app->request->referrer);
                }
                $this->Alert('success', 'check', 'Ташкилот ўзгартирилди!!!');
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else {
            $this->goHome();
        }
    }

    /**
     * Deletes an existing Organization model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->identity->type == 9) {

//            $count = Projects::find()
//                ->orWhere(['id_customer' => $id])
//                ->orWhere(['id_designer' => $id])
//                ->orWhere(['id_contractor' => $id])
//                ->count();
//            if ($count > 0) {
//                $this->Alert('danger', 'ban', 'Произошла ошибка, организация добавлено в проекту!!!');
//                return $this->redirect(Yii::$app->request->referrer);
//            }
            $this->findModel($id)->delete();
            $this->Alert('success', 'check', 'Ташкилот ўчирилди!!!');
            return $this->redirect(['index']);
        } else {
            $this->goHome();
        }
    }

    /**
     * Finds the Organization model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Organization the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Organization::findOne(['id' => $id])) !== null) {
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
