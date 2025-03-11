<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Organization;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var common\models\Informations $model */
/** @var yii\widgets\ActiveForm $form */

$type = [
    1 => 'Гидроагрегат-1',
    2 => 'Гидроагрегат-2',
    3 => 'Гидроагрегат-3',
    4 => 'Гидроагрегат-4',
    5 => 'Гидроагрегат-5',
    6 => 'Гидроагрегат-6',
]
?>

<div class="informations-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-6 col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-3 border-bottom bg-body">
                    <div class="row g-1 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0">Номинальные параметры генератора</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="p-4 code-to-copy">
                        <div class="mb-3">
                            <?= $form->field($model, 'id_organization')->widget(Select2::classname(), [
                                'data' => ArrayHelper::map(
                                    Organization::find()->where(['id_organization' => Yii::$app->user->identity->id_organization])->all(),
                                    'id','name'
                                )
                            ]);?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'aggregate')->widget(Select2::classname(), [
                                'data' => $type
                            ])?>
                        </div>

                        <div class="mb-3">
                            <?= $form->field($model, 'type_generation')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'year_aggregate')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'year_exp')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'active_power')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'naprijeniya_generator')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'chastota')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'tok_statora')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'naprijeniya_rotora')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'tok_rotora')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'vrasheniya_generatora')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'kpd_generator')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <label>Фото гидроагрегат
                                <input name="image" type="file" <?= $model->phoro_aggregate == null ? 'required' : null ?> />
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-3 border-bottom bg-body">
                    <div class="row g-1 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0">Номинальные параметры турбины</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="p-4 code-to-copy">
                        <div class="mb-3">
                            <?= $form->field($model, 'type_trubina')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'year_turbin')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'year_turbin_exp')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'moshnost')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'raschyot_napor')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'oborot')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'count_lopastey')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <?= $form->field($model, 'kpd_turbina')->textInput() ?>
                        </div>
                        <div class="mb-3">
                            <label>Фото гидроагрегат
                                <input name="image1" type="file" <?= $model->photo_turbin == null ? 'required' : null ?> />
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <?= Html::submitButton('<i class="fa fa-check"></i> Сақлаш', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
