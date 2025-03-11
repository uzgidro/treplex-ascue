<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Organization;
use kartik\select2\Select2;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Explotation $model */
/** @var yii\widgets\ActiveForm $form */

$data = [
    1 => "Қуёш",
    2 => "Ёмғир",
    3 => "Булут",
];
?>

<div class="explotation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
        'options' => ['placeholder' => 'Ташкилотни танланг ...'],
        'data' => ArrayHelper::map(
            Organization::find()
                ->all(),
            'id','name'
        )
    ]);?>

    <?= $form->field($model, 'obxavo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obxavo_icon')->widget(Select2::classname(), [
        'options' => ['placeholder' => 'Об-хавони танланг ...'],
        'data' => $data
    ]);?>

    <?= $form->field($model, 'yuqori_bef_suv_xajmi')->textInput() ?>

    <?= $form->field($model, 'suv_ombori_suv_xajmi')->textInput() ?>

    <?= $form->field($model, 'suv_bosimi')->textInput() ?>

    <?= $form->field($model, 'suv_omboridan_kelayotgan_suv')->textInput() ?>

    <?= $form->field($model, 'suv_omboridan_chiqayotgan_suv')->textInput() ?>

    <?= $form->field($model, 'geslar_orqali')->textInput() ?>

    <?= $form->field($model, 'salt_tashlama')->textInput() ?>

    <?= $form->field($model, 'ishlayotgan_agregatlar_soni')->textInput() ?>

    <?= $form->field($model, 'day_energiya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-check"></i> Сақлаш', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
