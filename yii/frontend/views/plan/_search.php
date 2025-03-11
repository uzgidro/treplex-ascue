<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\PlanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="plan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_organization') ?>

    <?= $form->field($model, 'id_year') ?>

    <?= $form->field($model, 'yanvar') ?>

    <?= $form->field($model, 'fevral') ?>

    <?php // echo $form->field($model, 'mart') ?>

    <?php // echo $form->field($model, 'aprel') ?>

    <?php // echo $form->field($model, 'may') ?>

    <?php // echo $form->field($model, 'iyun') ?>

    <?php // echo $form->field($model, 'iyul') ?>

    <?php // echo $form->field($model, 'avgust') ?>

    <?php // echo $form->field($model, 'sentyabr') ?>

    <?php // echo $form->field($model, 'oktyabr') ?>

    <?php // echo $form->field($model, 'noyabr') ?>

    <?php // echo $form->field($model, 'dekabr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
