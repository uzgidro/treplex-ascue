<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use common\models\Organization;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var common\models\Water $model */
/** @var yii\widgets\ActiveForm $form */

setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");
?>

<div class="water-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="mb-3">
        <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(
                Organization::find()->where(['id_organization' => Yii::$app->user->identity->id_organization])->all(),
                'id','name'
            )
        ]);?>
    </div>

    <div class="mb-3">
        <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'up_bef')->textInput() ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'down_bef')->textInput() ?>
    </div>
    <div class="mb-3">
        <?= Html::submitButton('<i class="fa fa-check"></i> Сақлаш', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
