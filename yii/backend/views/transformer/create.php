<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Transformer $model */

$this->title = 'Create Transformer';
$this->params['breadcrumbs'][] = ['label' => 'Transformers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transformer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
