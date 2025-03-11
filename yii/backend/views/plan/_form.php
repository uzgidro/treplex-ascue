<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Organization;
use common\models\Year;

/** @var yii\web\View $this */
/** @var common\models\Plan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="plan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(
            Organization::find()->where(['>', 'id_organization', 0])->all(),
            'id','name'
        )
    ]);?>

    <?= $form->field($model, 'id_year')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(
            Year::find()->all(),
            'id','year'
        )
    ]);?>

    <?= $form->field($model, 'january')->textInput() ?>

    <?= $form->field($model, 'february')->textInput() ?>

    <?= $form->field($model, 'march')->textInput() ?>

    <?= $form->field($model, 'april')->textInput() ?>

    <?= $form->field($model, 'may')->textInput() ?>

    <?= $form->field($model, 'june')->textInput() ?>

    <?= $form->field($model, 'july')->textInput() ?>

    <?= $form->field($model, 'august')->textInput() ?>

    <?= $form->field($model, 'september')->textInput() ?>

    <?= $form->field($model, 'october')->textInput() ?>

    <?= $form->field($model, 'november')->textInput() ?>

    <?= $form->field($model, 'december')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
