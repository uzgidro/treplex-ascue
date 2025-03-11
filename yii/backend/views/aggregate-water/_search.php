<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AggregateWaterSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aggregate-water-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_organization') ?>

    <?= $form->field($model, 'id_aggregate') ?>

    <?= $form->field($model, 'one') ?>

    <?= $form->field($model, 'two') ?>

    <?php // echo $form->field($model, 'chanel') ?>

    <?php // echo $form->field($model, 'coefficient') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
