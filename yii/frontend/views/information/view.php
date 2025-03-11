<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Informations $model */

$this->title = $model->organization->name;
\yii\web\YiiAsset::register($this);
?>
<?= Yii::$app->session->getFlash('msg') ?>
<nav aria-label="breadcrumb" class="mb-5">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['information/index']) ?>">Информация для агрегата</a></li>
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
                        'type_generation',
                        'year_aggregate',
                        'year_exp',
                        'active_power',
                        'naprijeniya_generator',
                        'chastota',
                        'tok_statora',
                        'naprijeniya_rotora',
                        'tok_rotora',
                        'vrasheniya_generatora',
                        'kpd_generator',
                        'phoro_aggregate',
                        [
                            'label' => 'Картинка',
                            'format' => 'raw',
                            'value' => function($data){
                                $url = '/upload/'.$data->phoro_aggregate;
                                return Html::img($url,[
                                    'alt'=>'yii2 - картинка в gridview',
                                    'style' => 'width:75px;',
                                    'class' => 'img-rounded'
                                ]);
                            },
                        ],
                        'type_trubina',
                        'year_turbin',
                        'year_turbin_exp',
                        'moshnost',
                        'raschyot_napor',
                        'oborot',
                        'count_lopastey',
                        'kpd_turbina',
                        'photo_turbin',
                        [
                            'label' => 'Картинка',
                            'format' => 'raw',
                            'value' => function($data){
                                $url = '/upload/'.$data->photo_turbin;
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
