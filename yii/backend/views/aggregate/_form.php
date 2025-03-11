<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Aggregate $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aggregate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->textInput() ?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'port')->textInput() ?>

    <?= $form->field($model, 'id_aggregate')->textInput() ?>

    <?= $form->field($model, 'one')->textInput() ?>

    <?= $form->field($model, 'two')->textInput() ?>

    <?= $form->field($model, 'chanel')->textInput() ?>

    <?= $form->field($model, 'coefficient')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
