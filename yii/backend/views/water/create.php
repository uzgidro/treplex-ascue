<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Water $model */

$this->title = 'Create Water';
$this->params['breadcrumbs'][] = ['label' => 'Waters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="water-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
