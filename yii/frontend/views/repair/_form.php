<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Organization;
use kartik\select2\Select2;
use common\models\TypeRepair;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var common\models\Repair $model */
/** @var yii\widgets\ActiveForm $form */

$type = [
    1 => 'Гидроагрегат-1',
    2 => 'Гидроагрегат-2',
    3 => 'Гидроагрегат-3',
    4 => 'Гидроагрегат-4',
    5 => 'Гидроагрегат-5',
    6 => 'Гидроагрегат-6',
];

?>

<div class="repair-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="mb-3">
        <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(
                Organization::find()->where(['id_organization' => Yii::$app->user->identity->id_organization])->all(),
                'id','name'
            )
        ]);?>
    </div>

    <div class="mb-3">
        <?= $form->field($model, 'aggregate')->widget(Select2::classname(), [
            'data' => $type
        ])?>
    </div>

    <div class="mb-3">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'typy_repair')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(
                TypeRepair::find()->all(),
                'id','name'
            )
        ])?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'first_date')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Выберите дату'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true,
            ]
        ]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'last_date')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Выберите дату'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true,
            ]
        ]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'expenditure_of_funds')->textInput() ?>
    </div>
    <div class="mb-3">
        <label>Перечень работ
            <input name="image" type="file" accept=".pdf" <?= $model->files == null ? 'required' : null ?> />
        </label>
    </div>


    <div class="mt-3">
        <?= Html::submitButton('<i class="fa fa-check"></i> Сақлаш', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
