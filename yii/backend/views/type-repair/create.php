<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TypeRepair $model */

$this->title = 'Create Type Repair';
$this->params['breadcrumbs'][] = ['label' => 'Type Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-repair-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
