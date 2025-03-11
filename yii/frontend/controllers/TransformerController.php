<?php

namespace frontend\controllers;

use common\models\Transformer;
use common\models\TransformerSearch;
use yii\base\BaseObject;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use Yii;

class TransformerController extends \yii\web\Controller
{
    /**
     * Lists all Transformer models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $searchModel = new TransformerSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Transformer model.
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
     * Creates a new Transformer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new Transformer();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $basenameAndExtension = explode('.', $_FILES['image']['name']);
                $ext = end($basenameAndExtension);

                $name_file = uniqid(date('Y_m_d_H_i_s')).'.'.$ext;

                if(!empty(basename($_FILES['image']['name'])))
                {
                    if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/transformer/' . $name_file)) {

                        if ($model->load(Yii::$app->request->post())) {
                            $model->photo = $name_file;
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
     * Updates an existing Transformer model.
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
            $uploaddir = 'upload/transformer/';

            $basenameAndExtension = explode('.', $_FILES['image']['name']);
            $ext = end($basenameAndExtension);

            $name_file = uniqid(date('Y_m_d_H_i_s')).'.'.$ext;

            if (!empty(basename($_FILES['image']['name']))) {
                $delete = Transformer::findOne($id);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir . $name_file)) {
                    if ($delete['photo'] != null) {
                        unlink($uploaddir . $delete['photo']);
                    }
                    $model->id_org = Yii::$app->user->identity->id_organization;
                    $model->photo = $name_file;
                    if ($model->save()) {
                        $this->Alert('success', 'check', 'Маълумот ўзгартирилди');
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
            } else {
                $model->id_org = Yii::$app->user->identity->id_organization;
                if ($model->save()) {
                    $this->Alert('success', 'check', 'Маълумот ўзгартирилди');
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }

            $this->Alert('danger', 'times', 'Хатолик юз берди');
            return $this->redirect(\Yii::$app->request->referrer);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Transformer model.
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
        $delete = Transformer::findOne($id);
        $uploaddir = 'upload/transformer/';
        if (unlink($uploaddir . $delete['photo']) && !empty($uploaddir . $delete['photo'])) {
            $this->findModel($id)->delete();
            $this->Alert('success', 'check', 'Маълумот ўчирилди');
        }else{
            $this->Alert('danger', 'times', 'Хатолик юз берди');
        }

        return $this->redirect(['index']);
    }

    public function actionWorks() {
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $works_id = $parents[0];
                $out = Transformer::getWorksList($works_id);

                echo Json::encode(['output'=>$out, 'selected'=>'']);
                return;
            }
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
    }

    /**
     * Finds the Transformer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Transformer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Transformer::findOne(['id' => $id])) !== null) {
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
