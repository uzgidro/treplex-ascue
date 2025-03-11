<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Explotation $model */

$this->title = 'Ўзгартириш: ' . $model->organization->name;
$this->params['breadcrumbs'][] = ['label' => 'Кунлик ишлаб чиқариш', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ўзгартириш';
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