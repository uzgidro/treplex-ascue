<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Explotation $model */

$this->title = 'Update Explotation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Explotations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="explotation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
