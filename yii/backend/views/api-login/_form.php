<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Organization;

/** @var yii\web\View $this */
/** @var common\models\ApiLogin $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="api-login-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(
            Organization::find()->all(),
            'id','name'
        )
    ]);?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'port')->textInput() ?>

    <?= $form->field($model, 'one')->textInput() ?>

    <?= $form->field($model, 'two')->textInput() ?>

    <?= $form->field($model, 'three')->textInput() ?>

    <?= $form->field($model, 'four')->textInput() ?>

    <?= $form->field($model, 'coefficient')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
