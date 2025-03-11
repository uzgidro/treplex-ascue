<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Transformer $model */

$this->title = 'Update Transformer: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transformers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transformer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
