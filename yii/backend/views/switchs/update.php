<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Switchs $model */

$this->title = 'Update Switchs: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Switchs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="switchs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
