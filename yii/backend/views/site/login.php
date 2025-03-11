<?php
use yii\helpers\Html;
use yii\helpers\Url;

/** @var common\models\LoginForm $model */
?>
<div class="card">
    <div class="card-body login-card-body"  style="border-radius: 30px;">
        <div class="login-logo">
            <a href="<?=Yii::$app->homeUrl?>">
                <img src="<?= Url::to(['../images/logo/logo.png'])?>" width="160px">
            </a>
        </div>

        <?php $form = \yii\bootstrap4\ActiveForm::begin(['id' => 'login-form']) ?>

        <?= $form->field($model,'username', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text"><span class="fas fa-user"></span></div></div>',
            'template' => '{beginWrapper}{input}{error}{endWrapper}',
            'wrapperOptions' => ['class' => 'input-group mb-3']
        ])
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form->field($model, 'password', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>',
            'template' => '{beginWrapper}{input}{error}{endWrapper}',
            'wrapperOptions' => ['class' => 'input-group mb-3']
        ])
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <?= $form->field($model, 'captcha')->hiddenInput()->label(false) ?>
        <div class="form-group">
            <mark><b><?= $model->captcha ?></b></mark>
        </div>
        <?= $form->field($model, 'recaptcha')->textInput(['placeholder' => 'Enter Captcha'])->label(false) ?>

        <div class="row">
            <div class="col-8">
                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => '<div class="icheck-primary">{input}{label}</div>',
                    'labelOptions' => [
                        'class' => ''
                    ],
                    'uncheck' => null
                ]) ?>
            </div>
            <div class="col-4">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block']) ?>
            </div>
        </div>

        <?php \yii\bootstrap4\ActiveForm::end(); ?>

    </div>
    <!-- /.login-card-body -->
</div>