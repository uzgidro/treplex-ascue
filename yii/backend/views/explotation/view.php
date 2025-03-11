<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Explotation $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Explotations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="explotation-view">

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
            'date',
            'obxavo',
            'obxavo_icon',
            'yuqori_bef_suv_xajmi',
            'suv_ombori_suv_xajmi',
            'suv_bosimi',
            'suv_omboridan_kelayotgan_suv',
            'suv_omboridan_chiqayotgan_suv',
            'geslar_orqali',
            'salt_tashlama',
            'ishlayotgan_agregatlar_soni',
            'day_energiya',
        ],
    ]) ?>

</div>
