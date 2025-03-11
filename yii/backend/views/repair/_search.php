<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\RepairSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="repair-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_organization') ?>

    <?= $form->field($model, 'aggregate') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'typy_repair') ?>

    <?php // echo $form->field($model, 'first_date') ?>

    <?php // echo $form->field($model, 'last_date') ?>

    <?php // echo $form->field($model, 'files') ?>

    <?php // echo $form->field($model, 'expenditure_of_funds') ?>

    <?php // echo $form->field($model, 'id_org') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
