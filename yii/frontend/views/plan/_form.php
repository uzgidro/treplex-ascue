<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use common\models\Year;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use common\models\Organization;

/** @var yii\web\View $this */
/** @var common\models\Plan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="plan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
        'options' => ['placeholder' => 'Ташкилотни танланг ...'],
        'data' => ArrayHelper::map(
            Organization::find()
                ->all(),
            'id','name'
        )
    ]);?>

    <?= $form->field($model, 'id_year')->widget(Select2::classname(), [
        'options' => ['placeholder' => 'Йилни танланг ...'],
        'data' => ArrayHelper::map(
            Year::find()
                ->all(),
            'id','year'
        )
    ]);?>

    <?= $form->field($model, 'yanvar')->textInput() ?>

    <?= $form->field($model, 'fevral')->textInput() ?>

    <?= $form->field($model, 'mart')->textInput() ?>

    <?= $form->field($model, 'aprel')->textInput() ?>

    <?= $form->field($model, 'may')->textInput() ?>

    <?= $form->field($model, 'iyun')->textInput() ?>

    <?= $form->field($model, 'iyul')->textInput() ?>

    <?= $form->field($model, 'avgust')->textInput() ?>

    <?= $form->field($model, 'sentyabr')->textInput() ?>

    <?= $form->field($model, 'oktyabr')->textInput() ?>

    <?= $form->field($model, 'noyabr')->textInput() ?>

    <?= $form->field($model, 'dekabr')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-check"></i> Сақлаш', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
