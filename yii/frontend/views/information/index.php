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

$this->title = 'Информация для агрегата';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Yii::$app->session->getFlash('msg') ?>

<div class="card">
    <div class="card-body">
        <h4 class="mb-5"><?= Html::encode($this->title) ?></h4>
        <div class="row g-3">
            <div class="col-12">
                <p>
                    <?= Html::a('<i class="fa fa-plus"></i> Қўшиш', ['create'], ['class' => 'btn btn-outline-success btn-sm']) ?>
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
                            'urlCreator' => function ($action, Informations $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            },
                            'buttons' => [
                                'view' => function ($url,$model) {
                                    return Html::a('<i class="fa fa-eye"></i>', $url,
                                        [
                                            'class' => 'btn btn-outline-primary btn-sm',
                                            'title' => 'Просмотр',
                                            'data-toggle' => 'tooltip',
                                            'data-placement' => 'top',
                                            'data-original-title' => 'Просмотр'
                                        ]);
                                },
                                'update' => function ($url,$model) {
                                    return Html::a('<i class="fa fa-edit"></i>', $url,
                                        [
                                            'class' => 'btn btn-outline-success btn-sm',
                                            'title' => 'Изменить',
                                            'data-toggle' => 'tooltip',
                                            'data-placement' => 'top',
                                            'data-original-title' => 'Изменить'
                                        ]);
                                },
                                'delete' => function ($url,$model) {
                                    return Html::a('<i class="fa fa-trash"></i>', $url, ['class' => 'btn btn-outline-danger btn-sm',
                                        'title' => 'Удалить',
                                        'data' => [
                                            'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                            'method' => 'post',
                                        ],
                                        'data-toggle' => 'tooltip',
                                        'data-placement' => 'top',
                                        'data-original-title' => 'Удалить'
                                    ]);
                                },
                            ],
                        ],
//                        'id',
                        [
                            'attribute' => 'id_organization',
                            'value' => function($data)
                            {
                                return $data->id_organization ? $data->organization->name : null;
                            },
                        ],
                        [
                            'attribute' => 'aggregate',
                            'value' => function($data)
                            {
                                switch ($data->aggregate) {
                                    case 1 : $mes = "Гидроагрегат-1"; break;
                                    case 2 : $mes = "Гидроагрегат-2"; break;
                                    case 3 : $mes = "Гидроагрегат-3"; break;
                                    case 4 : $mes = "Гидроагрегат-4"; break;
                                    case 5 : $mes = "Гидроагрегат-5"; break;
                                    case 6 : $mes = "Гидроагрегат-6"; break;
                                    default: $mes = null;
                                }
                                return  $mes;
                            },
                        ],
//                        'type_generation',
//                        'year_aggregate',
                        //'year_exp',
                        //'active_power',
                        //'naprijeniya_generator',
                        //'chastota',
                        //'tok_statora',
                        //'naprijeniya_rotora',
                        //'tok_rotora',
                        //'vrasheniya_generatora',
                        //'phoro_aggregate',
                        //'type_trubina',
                        //'year_turbin',
                        //'year_turbin_exp',
                        //'moshnost',
                        //'raschyot_napor',
                        //'oborot',
                        //'count_lopastey',
                        //'photo_turbin',
                    ],
                ]); ?>

                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>
