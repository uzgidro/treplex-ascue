<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\SwitchName $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Имя выключателя', 'url' => ['index']];
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
            <?= Html::a('<i class="fas fa-plus"></i> Создать', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
            <?= Html::a('<i class="fas fa-edit"></i> Обновлять', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
            <?= Html::a('<i class="fas fa-trash"></i> Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger btn-sm',
                'data' => [
                    'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
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
                'name',
            ],
        ]) ?>
    </div>
</div>