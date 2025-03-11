<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use common\models\Organization;

/** @var yii\web\View $this */
/** @var common\models\Repair $model */

$this->title = $model->organization->name;
\yii\web\YiiAsset::register($this);
?>
<?= Yii::$app->session->getFlash('msg') ?>
<nav aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['repair/index']) ?>">Информация о ремонте</a></li>
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
                        [
                            'attribute' => 'aggregate',
                            'value' => function($data)
                            {
                                switch ($data->aggregate) {
                                    case 1 : $mes = "Гидроагрегат-1"; break;
                                    case 2 : $mes = "Гидроагрегат-2"; break;
                                    case 3 : $mes = "Гидроагрегат-3"; break;
                                    case 4 : $mes = "Гидроагрегат-4"; break;
                                    case 5 : $mes = "Гидроагрегат-5"; break;
                                    case 6 : $mes = "Гидроагрегат-6"; break;
                                    default: $mes = null;
                                }
                                return  $mes;
                            },
                        ],
                        'name',
                        [
                            'attribute' => 'typy_repair',
                            'value' => function($data)
                            {
                                return $data->typy_repair ? $data->type->name : null;
                            },
                        ],
                        'first_date',
                        'last_date',
//                        'files',
                        'expenditure_of_funds',
                        [
                            'attribute' => 'price',
                            'label' => 'Перечень работ',
                            'format' => 'raw',
                            'value' => function($data){
                                return $data->files != null ? Html::a('<i class="fas fa-download"></i>', '',
                                    ['onclick' => "window.open ('".\yii\helpers\Url::toRoute("@web/files/".$data->files)."'); return false",
                                        'class' => 'btn btn-primary center-block']) : ' ';
                            },
                        ],

                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>
