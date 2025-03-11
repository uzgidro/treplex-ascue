<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Informations $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="informations-view">

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
            'aggregate',
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
            'type_trubina',
            'year_turbin',
            'year_turbin_exp',
            'moshnost',
            'raschyot_napor',
            'oborot',
            'count_lopastey',
            'kpd_turbina',
            'photo_turbin',
            'id_org',
        ],
    ]) ?>

</div>
