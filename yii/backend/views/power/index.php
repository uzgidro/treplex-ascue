<?php

use common\models\Power;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\PowerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Powers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="power-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
        Launch Default Modal
    </button>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                <div class="modal-header">
                    <h4 class="modal-title text-dark">Офертани қўшиш</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input name="image" type="file" required />
                </div>
                <div class="modal-footer justify-content-between">
                    <?= Html::submitButton('<i class="fas fa-check"></i> Сақлаш', ['class' => 'btn btn-success', 'name' => 'submitButton2']) ?>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Ёпиш</button>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <p>
        <?= Html::a('Create Power', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'id_organization',
            [
                'attribute' => 'id_organization',
                'value' => function($data)
                {
                    return $data->id_organization ? $data->organization->name : null;
                },
            ],
            'id_aggregate',
            'date',
            'time',
            'power',
            'water',
            'pressure',
            'power_real',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Power $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
