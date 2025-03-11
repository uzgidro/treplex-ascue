<?php

use common\models\Plan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\PlanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ойлик режалар';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-12">
    <?= Yii::$app->session->getFlash('msg') ?>
</div>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-building"></i> <?= Html::encode($this->title) ?></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                <i class="fas fa-expand"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <p>
            <?= Html::a('<i class="fas fa-plus"></i> Қўшиш', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
        </p>

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'headerOptions' => ['width' => '150'],
                    'template' => "<div class='btn-group'>{view} {update} {delete}</div>",
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Plan $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    },
                    'buttons' => [
                        'view' => function ($url,$model) {
                            return Html::a('<i class="fa fa-eye"></i>', $url,
                                [
                                    'class' => 'btn btn-primary btn-sm',
                                    'title' => 'Кўриш',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'top',
                                    'data-original-title' => 'Кўриш'
                                ]);
                        },
                        'update' => function ($url,$model) {
                            return Html::a('<i class="fa fa-edit"></i>', $url,
                                [
                                    'class' => 'btn btn-success btn-sm',
                                    'title' => 'Ўзгартириш',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'top',
                                    'data-original-title' => 'Ўзгартириш'
                                ]);
                        },
                        'delete' => function ($url,$model) {
                            return Html::a('<i class="fa fa-trash"></i>', $url, ['class' => 'btn btn-danger btn-sm',
                                'title' => 'Ўчириш',
                                'data' => [
                                    'confirm' => 'Ташкилотни ўчиришни хохлайсизми?',
                                    'method' => 'post',
                                ],
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                                'data-original-title' => 'Ўчириш'
                            ]);
                        },
                    ],
                ],
//                'id',
                [
                    'attribute' => 'id_organization',
                    'value' => function($data)
                    {
                        return $data->id_organization ? $data->organization->name : null;
                    },
                ],
                [
                    'attribute' => 'id_year',
                    'value' => function($data)
                    {
                        return $data->id_year ? $data->year->year : null;
                    },
                ],
                'yanvar',
                'fevral',
                'mart',
                'aprel',
                'may',
                'iyun',
                'iyul',
                'avgust',
                'sentyabr',
                'oktyabr',
                'noyabr',
                'dekabr',
            ],
        ]); ?>

        <?php Pjax::end(); ?>
    </div>

</div>