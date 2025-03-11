<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ApiLoginSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="api-login-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_organization') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'port') ?>

    <?= $form->field($model, 'one') ?>

    <?php // echo $form->field($model, 'two') ?>

    <?php // echo $form->field($model, 'three') ?>

    <?php // echo $form->field($model, 'four') ?>

    <?php // echo $form->field($model, 'coefficient') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
