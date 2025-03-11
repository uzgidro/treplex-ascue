<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Informations $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="informations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->textInput() ?>

    <?= $form->field($model, 'aggregate')->textInput() ?>

    <?= $form->field($model, 'type_generation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_aggregate')->textInput() ?>

    <?= $form->field($model, 'year_exp')->textInput() ?>

    <?= $form->field($model, 'active_power')->textInput() ?>

    <?= $form->field($model, 'naprijeniya_generator')->textInput() ?>

    <?= $form->field($model, 'chastota')->textInput() ?>

    <?= $form->field($model, 'tok_statora')->textInput() ?>

    <?= $form->field($model, 'naprijeniya_rotora')->textInput() ?>

    <?= $form->field($model, 'tok_rotora')->textInput() ?>

    <?= $form->field($model, 'vrasheniya_generatora')->textInput() ?>

    <?= $form->field($model, 'kpd_generator')->textInput() ?>

    <?= $form->field($model, 'phoro_aggregate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_trubina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_turbin')->textInput() ?>

    <?= $form->field($model, 'year_turbin_exp')->textInput() ?>

    <?= $form->field($model, 'moshnost')->textInput() ?>

    <?= $form->field($model, 'raschyot_napor')->textInput() ?>

    <?= $form->field($model, 'oborot')->textInput() ?>

    <?= $form->field($model, 'count_lopastey')->textInput() ?>

    <?= $form->field($model, 'kpd_turbina')->textInput() ?>

    <?= $form->field($model, 'photo_turbin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_org')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
