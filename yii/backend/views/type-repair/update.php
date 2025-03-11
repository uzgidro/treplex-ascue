<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TypeRepair $model */

$this->title = 'Update Type Repair: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Type Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-repair-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
