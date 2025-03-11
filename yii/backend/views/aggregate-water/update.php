<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AggregateWater $model */

$this->title = 'Update Aggregate Water: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aggregate Waters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aggregate-water-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
