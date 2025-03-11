<?php

use common\models\ApiLogin;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\ApiLoginSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Api Logins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="api-login-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Api Login', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_organization',
            'password',
            'port',
            'one',
            //'two',
            //'three',
            //'four',
            //'coefficient',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ApiLogin $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
