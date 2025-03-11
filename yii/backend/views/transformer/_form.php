<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Transformer $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transformer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->textInput() ?>

    <?= $form->field($model, 'id_org')->textInput() ?>

    <?= $form->field($model, 'small_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_of_issue')->textInput() ?>

    <?= $form->field($model, 'year_of_commissioning')->textInput() ?>

    <?= $form->field($model, 'power')->textInput() ?>

    <?= $form->field($model, 'voltage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loss_of_idle_speed')->textInput() ?>

    <?= $form->field($model, 'overall_dimensions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'winding_connection')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gross_weight')->textInput() ?>

    <?= $form->field($model, 'gross_oil_weight')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
