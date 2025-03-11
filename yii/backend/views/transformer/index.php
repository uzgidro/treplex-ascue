<?php

use common\models\Transformer;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\TransformerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transformers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transformer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transformer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'id_organization',
                'value' => function($data)
                {
                    return $data->id_organization ? $data->organization->name : null;
                },
            ],
            'small_type',
            'type',
            //'year_of_issue',
            //'year_of_commissioning',
            //'power',
            //'voltage',
            //'loss_of_idle_speed',
            //'overall_dimensions',
            //'winding_connection',
            //'gross_weight',
            //'gross_oil_weight',
            //'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Transformer $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
