<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use common\models\Organization;

/** @var yii\web\View $this */
/** @var common\models\SwitchName $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="switch-name-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(
            Organization::find()->all(),
            'id','name'
        )
    ]);?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-check"></i> Сақлаш', ['class' => 'btn btn-success btn-sm']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
