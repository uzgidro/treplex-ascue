<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ExplotationSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="explotation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_organization') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'obxavo') ?>

    <?= $form->field($model, 'obxavo_icon') ?>

    <?php // echo $form->field($model, 'yuqori_bef_suv_xajmi') ?>

    <?php // echo $form->field($model, 'suv_ombori_suv_xajmi') ?>

    <?php // echo $form->field($model, 'suv_bosimi') ?>

    <?php // echo $form->field($model, 'suv_omboridan_kelayotgan_suv') ?>

    <?php // echo $form->field($model, 'suv_omboridan_chiqayotgan_suv') ?>

    <?php // echo $form->field($model, 'geslar_orqali') ?>

    <?php // echo $form->field($model, 'salt_tashlama') ?>

    <?php // echo $form->field($model, 'ishlayotgan_agregatlar_soni') ?>

    <?php // echo $form->field($model, 'day_energiya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
