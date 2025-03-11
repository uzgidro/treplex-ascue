<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\User $model */

$this->title = 'Фойдаланувчи яратиш';
$this->params['breadcrumbs'][] = ['label' => 'Фойдаланувчилар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-12">
    <?= Yii::$app->session->getFlash('msg') ?>
</div>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-plus"></i>
            <?= Html::encode($this->title) ?>
        </h3>
    </div>
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
