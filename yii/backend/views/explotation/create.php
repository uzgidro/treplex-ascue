<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Explotation $model */

$this->title = 'Create Explotation';
$this->params['breadcrumbs'][] = ['label' => 'Explotations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="explotation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
