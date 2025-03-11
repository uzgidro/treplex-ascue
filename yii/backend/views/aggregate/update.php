<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Aggregate $model */

$this->title = 'Update Aggregate: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aggregates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aggregate-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
