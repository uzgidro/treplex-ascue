<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Transformer $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transformers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transformer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_organization',
            'id_org',
            'small_type',
            'type',
            'year_of_issue',
            'year_of_commissioning',
            'power',
            'voltage',
            'loss_of_idle_speed',
            'overall_dimensions',
            'winding_connection',
            'gross_weight',
            'gross_oil_weight',
            'photo',
        ],
    ]) ?>

</div>
