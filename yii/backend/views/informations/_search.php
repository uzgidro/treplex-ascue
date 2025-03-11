<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\InformationsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="informations-search">

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

    <?= $form->field($model, 'type_generation') ?>

    <?= $form->field($model, 'year_aggregate') ?>

    <?php // echo $form->field($model, 'year_exp') ?>

    <?php // echo $form->field($model, 'active_power') ?>

    <?php // echo $form->field($model, 'naprijeniya_generator') ?>

    <?php // echo $form->field($model, 'chastota') ?>

    <?php // echo $form->field($model, 'tok_statora') ?>

    <?php // echo $form->field($model, 'naprijeniya_rotora') ?>

    <?php // echo $form->field($model, 'tok_rotora') ?>

    <?php // echo $form->field($model, 'vrasheniya_generatora') ?>

    <?php // echo $form->field($model, 'kpd_generator') ?>

    <?php // echo $form->field($model, 'phoro_aggregate') ?>

    <?php // echo $form->field($model, 'type_trubina') ?>

    <?php // echo $form->field($model, 'year_turbin') ?>

    <?php // echo $form->field($model, 'year_turbin_exp') ?>

    <?php // echo $form->field($model, 'moshnost') ?>

    <?php // echo $form->field($model, 'raschyot_napor') ?>

    <?php // echo $form->field($model, 'oborot') ?>

    <?php // echo $form->field($model, 'count_lopastey') ?>

    <?php // echo $form->field($model, 'kpd_turbina') ?>

    <?php // echo $form->field($model, 'photo_turbin') ?>

    <?php // echo $form->field($model, 'id_org') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
