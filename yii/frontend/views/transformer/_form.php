<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Organization;
use yii\helpers\Url;
use kartik\depdrop\DepDrop;

/** @var yii\web\View $this */
/** @var common\models\Transformer $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transformer-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="mb-3">
        <?= $form->field($model, 'id_organization')->dropDownList(ArrayHelper::map(
            Organization::find()->where(['id_organization' => Yii::$app->user->identity->id_organization])->all(),'id','name'
        ), ['prompt'=>'Выбирать...']) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'id_tansformer')->widget(DepDrop::classname(), [
            'options' => ['id'=>'transformer-id_tansformer'],
            'pluginOptions'=>[
                'depends'=>['transformer-id_organization'],
                'placeholder' => 'Выбирать...',
                'url' => Url::to(['works'])
            ]
        ]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'small_type')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'year_of_issue')->textInput() ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'year_of_commissioning')->textInput() ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'power')->textInput() ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'voltage')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'loss_of_idle_speed')->textInput() ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'overall_dimensions')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'winding_connection')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'gross_weight')->textInput() ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'gross_oil_weight')->textInput() ?>
    </div>

    <div class="mb-3">
        <label>Фото трансформатора
            <input name="image" type="file" <?= $model->photo == null ? 'required' : null ?> />
        </label>
    </div>

    <div class="mt-3">
        <?= Html::submitButton('<i class="fa fa-check"></i> Сақлаш', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
