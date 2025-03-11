<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Organization;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var frontend\models\User $model */
/** @var yii\widgets\ActiveForm $form */

$value = [
    1 => 'Юқори турувчи ташкилот',
    2 => 'Қуйи турувчи ташкилот',
];
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(
            Organization::find()->asArray()->all(),
            'id','name'
        )
    ])?>

    <?= $form->field($model, 'value')->widget(Select2::classname(), [
        'data' => $value
    ])?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->hiddenInput(['value' => 1])->label(false) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 10])->label(false) ?>

    <?= $form->field($model, 'created_at')->hiddenInput(['value' => 1551766233])->label(false) ?>

    <?= $form->field($model, 'updated_at')->hiddenInput(['value' => 1551766233])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fas fa-check"></i> Сақлаш', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
