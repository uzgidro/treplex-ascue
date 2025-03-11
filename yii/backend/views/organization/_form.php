<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
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
                ->all(),
            'id','name'
        )
    ]);?>

    <?= $form->field($model, 'agregat')->textInput() ?>

    <?= $form->field($model, 'quwwat')->textInput() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
