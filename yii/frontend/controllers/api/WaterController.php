<?php

namespace frontend\controllers\api;

use yii\db\BaseActiveRecord;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Response;
use Yii;

class WaterController extends ActiveController
{
    public $modelClass = 'common\models\Water';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function behaviors(): array
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        return $behaviors;
    }

    public function fields(): array
    {
        return ['id', 'id_organization', 'date', 'up_bef', 'down_bef'];
    }
    public function extraFields()
    {
        return ['status'];
    }

    public function actions(): array
    {
        $actions = ArrayHelper::merge(
            parent::actions(),
            [
                'index' => [
                    'prepareDataProvider' => function ($action) {
                        /* @var $modelClass BaseActiveRecord */
                        $modelClass = $action->modelClass;
                        return \Yii::createObject([
                            'class' => ActiveDataProvider::className(),
                            'query' => $modelClass::find()
                                ->joinWith('organization') // Предполагается, что связь "organization" определена
                                ->select(['organization.name', 'water.date', 'water.up_bef', 'water.down_bef'])
                                ->asArray()
                                ->orderBy(['date' => SORT_DESC]),
                            'pagination' => [
                                'pageSize' => 20,
                            ],
                        ]);
                    },
                ],
            ]
        );
        unset($actions['delete'], $actions['create'], $actions['view']);
        return $actions;
    }






//    public function actionView($id)
//    {
//        $modelClass = $this->modelClass;
//        $dataProvider = new ActiveDataProvider([
//            'query' => $modelClass::find()->where(['id' => $id])->orderBy(['date' => SORT_ASC, 'time' => SORT_ASC]),
//            'pagination' => false,
//        ]);
//
//        return $dataProvider;
//    }
//
//    public function actionDate()
//    {
//        $date = Yii::$app->request->get('date');
//        $modelClass = $this->modelClass;
//        $dataProvider = new ActiveDataProvider([
//            'query' => $modelClass::find()->where(['date' => $date])->orderBy(['id_wather' => SORT_ASC,'time' => SORT_ASC]),
//            'pagination' => false,
//        ]);
//
//        return $dataProvider;
//    }
//
//    public function actionWater($id)
//    {
//        $modelClass = $this->modelClass;
//        $dataProvider = new ActiveDataProvider([
//            'query' => $modelClass::find()->where(['id_wather' => $id])->orderBy(['date' => SORT_ASC, 'time' => SORT_ASC]),
//            'pagination' => false,
//        ]);
//
//        return $dataProvider;
//    }


    public function actionDaily($id)
    {
        $modelClass = $this->modelClass;
        $record = $modelClass::find()
            ->joinWith('organization') // Предполагается, что связь "organization" определена
            ->where(['organization.id' => $id])
            ->select(['organization.name', 'water.date', 'water.up_bef', 'water.down_bef'])
            ->asArray()
            ->orderBy(['date' => SORT_DESC])
            ->one();

        if ($record === null) {
            throw new \yii\web\NotFoundHttpException('Record not found.');
        }

        return $record;
    }
}