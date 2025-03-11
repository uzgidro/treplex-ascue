<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\User $model */

$this->title = 'Ўзгартриш: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Фойдаланувчилар', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ўзгартриш';
?>
<div class="col-md-12">
    <?= Yii::$app->session->getFlash('msg') ?>
</div>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-edit"></i>
            <?= Html::encode($this->title) ?>
        </h3>
    </div>
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
