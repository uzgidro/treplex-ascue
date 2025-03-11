<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Switchs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="switchs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->textInput() ?>

    <?= $form->field($model, 'id_org')->textInput() ?>

    <?= $form->field($model, 'id_switch')->textInput() ?>

    <?= $form->field($model, 'small')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_of_issue')->textInput() ?>

    <?= $form->field($model, 'year_of_commissioning')->textInput() ?>

    <?= $form->field($model, 'nominal_current')->textInput() ?>

    <?= $form->field($model, 'nominal_voltage')->textInput() ?>

    <?= $form->field($model, 'overall_dimensions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gross_weight')->textInput() ?>

    <?= $form->field($model, 'gross_oil_weight')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
