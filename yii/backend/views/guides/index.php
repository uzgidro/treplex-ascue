<?php

use common\models\Guides;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\GuidesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var common\models\Guides $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'Guides';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guides-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Guides', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <button type="button" class="btn bg-gradient-success btn-sm" data-toggle="modal" data-target="#modal-import">
        <i class="fas fa-file-excel"></i> Импорт
    </button>
    <div class="modal fade" id="modal-import" style="color: black;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Импорт excel файл</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                    <?= $form->field($model, 'id_organization')->textInput()  ?>

                    <?= $form->field($model, 'excelFile')->fileInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton('<i class="fas fa-check"></i> Сақлаш', ['class' => 'btn btn-success', 'name' => 'submitButton2']) ?>
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
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Guides $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
//            'id',
            [
                'attribute' => 'id_organization',
                'value' => function($data)
                {
                    return $data->id_organization ? $data->organization->name : null;
                },
            ],
            'pressure',
            'power',
            'guide',

        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
