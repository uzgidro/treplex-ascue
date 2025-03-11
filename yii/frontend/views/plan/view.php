<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Plan $model */

$this->title = $model->organization->name;
$this->params['breadcrumbs'][] = ['label' => 'Ойлик режалар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="col-md-12">
    <?= Yii::$app->session->getFlash('msg') ?>
</div>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-edit"></i>
            <?= Html::encode($this->title) ?>
        </h3>
    </div>
    <div class="card-body">
        <p>
            <?= Html::a('<i class="fas fa-plus"></i> Қўшиш', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-edit"></i> Ўзгартириш', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('<i class="fas fa-trash"></i> Ўчириш', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Ташкилотни ўчиришни хохлайсизми?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                [
                    'attribute' => 'id_organization',
                    'value' => function($data)
                    {
                        return $data->id_organization ? $data->organization->name : null;
                    },
                ],
                [
                    'attribute' => 'id_year',
                    'value' => function($data)
                    {
                        return $data->id_year ? $data->year->year : null;
                    },
                ],
                'yanvar',
                'fevral',
                'mart',
                'aprel',
                'may',
                'iyun',
                'iyul',
                'avgust',
                'sentyabr',
                'oktyabr',
                'noyabr',
                'dekabr',
            ],
        ]) ?>
    </div>
</div>
