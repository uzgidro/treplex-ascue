<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Water $model */

$this->title = 'Update Water: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Waters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="water-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
