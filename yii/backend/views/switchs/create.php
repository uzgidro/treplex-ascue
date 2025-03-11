<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Switchs $model */

$this->title = 'Create Switchs';
$this->params['breadcrumbs'][] = ['label' => 'Switchs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="switchs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
