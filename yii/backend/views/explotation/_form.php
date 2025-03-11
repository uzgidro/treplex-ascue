<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Explotation $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="explotation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'obxavo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obxavo_icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yuqori_bef_suv_xajmi')->textInput() ?>

    <?= $form->field($model, 'suv_ombori_suv_xajmi')->textInput() ?>

    <?= $form->field($model, 'suv_bosimi')->textInput() ?>

    <?= $form->field($model, 'suv_omboridan_kelayotgan_suv')->textInput() ?>

    <?= $form->field($model, 'suv_omboridan_chiqayotgan_suv')->textInput() ?>

    <?= $form->field($model, 'geslar_orqali')->textInput() ?>

    <?= $form->field($model, 'salt_tashlama')->textInput() ?>

    <?= $form->field($model, 'ishlayotgan_agregatlar_soni')->textInput() ?>

    <?= $form->field($model, 'day_energiya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
