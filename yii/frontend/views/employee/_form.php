<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use common\models\Position;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Organization;

/** @var yii\web\View $this */
/** @var common\models\Employee $model */
/** @var yii\widgets\ActiveForm $form */
$id = Yii::$app->user->identity->id_organization;
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="mb-3">
        <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(
                Organization::find()->where(['id_organization' => $id])->orWhere(['id' => $id])->all(),
                'id','name'
            )
        ]);?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'id_position')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(
                Position::find()->all(),
                'id','name'
            )
        ]);?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'tel')->textInput() ?>
    </div>
    <div class="mb-3">
        <label>Фото
            <input name="image" type="file" <?= $model->photo == null ? 'required' : null ?> />
        </label>
    </div>

    <div class="mt-3">
        <?= Html::submitButton('<i class="fa fa-check"></i> Сақлаш', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
