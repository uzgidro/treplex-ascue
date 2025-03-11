<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Organization;

/** @var yii\web\View $this */
/** @var common\models\Organization $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stir')->textInput() ?>

    <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
        'options' => ['placeholder' => 'Юқори турувчи ташкилотни танланг ...'],
        'data' => ArrayHelper::map(
            Organization::find()
                ->where(['id_organization' => null])
                ->all(),
            'id','name'
        )
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-check"></i> Сақлаш', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
