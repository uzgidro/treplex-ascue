<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\User $model */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
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
            <?= Html::a('<i class="fas fa-plus"></i> Создать', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-edit"></i> Обновлять', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('<i class="fas fa-trash"></i> Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
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
                [
                    'attribute' => 'type',
                    'value' => function($data)
                    {
                        switch ($data->type) {
                            case 1 : $type = 'Заказчик'; break;
                            case 2 : $type = 'Проектировщик'; break;
                            case 3 : $type = 'Подрядчик'; break;
                            case 9 : $type = 'Администратор'; break;
                            default: $type = null;
                        }
                        return $type;
                    },
                ],
                'username',

                //'type',
                //'auth_key',
                //'password',
                //'password_reset_token',
                //'status',
                //'created_at',
                //'updated_at',
                //'value',
            ],
        ]) ?>
    </div>
</div>
