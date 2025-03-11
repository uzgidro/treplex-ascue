<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
use common\models\Organization;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var backend\models\User $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(
            Organization::find()->all(),
            'id','name'
        )
    ]);?>

    <?= $form->field($model, 'type')->hiddenInput(['value' => 1])->label(false) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->hiddenInput(['value' => 1551766233])->label(false) ?>

    <?= $form->field($model, 'updated_at')->hiddenInput(['value' => 1551766233])->label(false) ?>

    <?= $form->field($model, 'value')->hiddenInput(['value' => 0])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fas fa-check"></i> Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
