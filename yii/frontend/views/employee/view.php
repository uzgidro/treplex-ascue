<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Position $model */

$this->title = $model->organization->name;
\yii\web\YiiAsset::register($this);
?>
<?= Yii::$app->session->getFlash('msg') ?>
<nav aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['employee/index']) ?>">Информация о сотрудников</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= Html::encode($this->title) ?></li>
    </ol>
</nav>
<div class="card">
    <div class="card-body">
        <h4 class="mb-5"><?= Html::encode($this->title) ?></h4>
        <div class="row g-3">
            <div class="col-12">
                <p>
                    <?= Html::a('<i class="fa fa-plus"></i> Қўшиш', ['create'], ['class' => 'btn btn-outline-success btn-sm']) ?>
                    <?= Html::a('<i class="fa fa-edit"></i> Ўзгартириш', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                    <?= Html::a('<i class="fa fa-trash"></i> Ўчириш', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-outline-danger btn-sm',
                        'data' => [
                            'confirm' => 'Маълумотни ўчиришни хохлайсизми?',
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
                        'fio',
                        [
                            'attribute' => 'id_position',
                            'value' => function($data)
                            {
                                return $data->id_position ? $data->position->name : null;
                            },
                        ],
                        'phone',
                        'tel',
                        [
                            'label' => 'Картинка',
                            'format' => 'raw',
                            'value' => function($data){
                                $url = '/upload/photo/'.$data->photo;
                                return Html::img($url,[
                                    'alt'=>'yii2 - картинка в gridview',
                                    'style' => 'width:75px;',
                                    'class' => 'img-rounded'
                                ]);
                            },
                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>
