<?php

use common\models\Explotation;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ExplotationSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/* @var $model common\models\Explotation */

$this->title = 'Кунлик ишлаб чиқариш';
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
        <p class="text-right">
            <?= Html::a('<i class="fas fa-plus"></i> Қўшиш', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
            <button type="button" class="btn bg-gradient-info btn-sm" data-toggle="modal" data-target="#modal-import">
                <i class="fas fa-file-excel"></i> Импорт
            </button>
        </p>

        <div class="modal fade" id="modal-import" style="color: black;">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h4 class="modal-title">Импорт excel файл</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php $form = ActiveForm::begin(['action' =>['imports'], 'options' => ['enctype' => 'multipart/form-data']]); ?>

                        <?= $form->field($model, 'excelFile')->fileInput() ?>

<!--                        <label>Excel файл-->
<!--                            <input name="image" type="file" required="required">-->
<!--                        </label>-->

                        <div class="form-group">
                            <?= Html::submitButton('<i class="fas fa-check"></i> Сақлаш', ['class' => 'btn btn-success']) ?>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Ёпиш</button>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>

            </div>

        </div>

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
                    'urlCreator' => function ($action, Explotation $model, $key, $index, $column) {
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
                'date',
//                'obxavo',
//                'obxavo_icon',
                //'yuqori_bef_suv_xajmi',
                //'suv_ombori_suv_xajmi',
                //'suv_bosimi',
                //'suv_omboridan_kelayotgan_suv',
                //'suv_omboridan_chiqayotgan_suv',
                //'geslar_orqali',
                //'ishlayotgan_agregatlar_soni',
                'day_energiya',

            ],
        ]); ?>

        <?php Pjax::end(); ?>
    </div>

</div>
