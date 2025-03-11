<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Switchs $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Switchs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="switchs-view">

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
            'id_switch',
            'small',
            'type',
            'year_of_issue',
            'year_of_commissioning',
            'nominal_current',
            'nominal_voltage',
            'overall_dimensions',
            'gross_weight',
            'gross_oil_weight',
            'photo',
        ],
    ]) ?>

</div>
