<?php

use common\models\TransformerName;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\TransformerNameSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Имя трансформатора';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-md-12">
    <?= Yii::$app->session->getFlash('msg') ?>
</div>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-user"></i> <?= Html::encode($this->title) ?></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                <i class="fas fa-expand"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <p>
            <?= Html::a('<i class="fas fa-plus"></i> Создать', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
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
                    'urlCreator' => function ($action, TransformerName $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    },
                    'buttons' => [
                        'view' => function ($url,$model) {
                            return Html::a('<i class="fa fa-eye"></i>', $url,
                                [
                                    'class' => 'btn btn-primary',
                                    'title' => 'Просмотр',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'top',
                                    'data-original-title' => 'Просмотр'
                                ]);
                        },
                        'update' => function ($url,$model) {
                            return Html::a('<i class="fa fa-edit"></i>', $url,
                                [
                                    'class' => 'btn btn-success',
                                    'title' => 'Изменить',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'top',
                                    'data-original-title' => 'Изменить'
                                ]);
                        },
                        'delete' => function ($url,$model) {
                            return Html::a('<i class="fa fa-trash"></i>', $url, ['class' => 'btn btn-danger',
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
                'id',
                'id_organization',
                [
                    'attribute' => 'id_organization',
                    'value' => function($data)
                    {
                        return $data->id_organization ? $data->organization->name : null;
                    },
                ],
                'name',
            ],
        ]); ?>

        <?php Pjax::end(); ?>
    </div>

</div>
