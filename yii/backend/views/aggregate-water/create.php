<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AggregateWater $model */

$this->title = 'Create Aggregate Water';
$this->params['breadcrumbs'][] = ['label' => 'Aggregate Waters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aggregate-water-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
