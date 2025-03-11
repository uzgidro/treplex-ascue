<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Repair $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="repair-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->textInput() ?>

    <?= $form->field($model, 'aggregate')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'typy_repair')->textInput() ?>

    <?= $form->field($model, 'first_date')->textInput() ?>

    <?= $form->field($model, 'last_date')->textInput() ?>

    <?= $form->field($model, 'files')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expenditure_of_funds')->textInput() ?>

    <?= $form->field($model, 'id_org')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
