<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Aggregate $model */

$this->title = 'Create Aggregate';
$this->params['breadcrumbs'][] = ['label' => 'Aggregates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aggregate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
