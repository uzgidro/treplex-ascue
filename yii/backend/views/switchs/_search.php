<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\SwitchsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="switchs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_organization') ?>

    <?= $form->field($model, 'id_org') ?>

    <?= $form->field($model, 'id_switch') ?>

    <?= $form->field($model, 'small') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'year_of_issue') ?>

    <?php // echo $form->field($model, 'year_of_commissioning') ?>

    <?php // echo $form->field($model, 'nominal_current') ?>

    <?php // echo $form->field($model, 'nominal_voltage') ?>

    <?php // echo $form->field($model, 'overall_dimensions') ?>

    <?php // echo $form->field($model, 'gross_weight') ?>

    <?php // echo $form->field($model, 'gross_oil_weight') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
