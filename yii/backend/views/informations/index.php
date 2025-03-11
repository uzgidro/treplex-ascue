<?php

use common\models\Informations;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\InformationsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Informations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informations-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Informations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'id_organization',
                'value' => function($data)
                {
                    return $data->id_organization ? $data->organization->name : null;
                },
            ],
            'aggregate',
            'type_generation',
            'year_aggregate',
            //'year_exp',
            //'active_power',
            //'naprijeniya_generator',
            //'chastota',
            //'tok_statora',
            //'naprijeniya_rotora',
            //'tok_rotora',
            //'vrasheniya_generatora',
            //'kpd_generator',
            //'phoro_aggregate',
            //'type_trubina',
            //'year_turbin',
            //'year_turbin_exp',
            //'moshnost',
            //'raschyot_napor',
            //'oborot',
            //'count_lopastey',
            //'kpd_turbina',
            //'photo_turbin',
            //'id_org',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Informations $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
