<?php

use common\models\Explotation;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\ExplotationSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Explotations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="explotation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Explotation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_organization',
            'date',
            'obxavo',
            'obxavo_icon',
            //'yuqori_bef_suv_xajmi',
            //'suv_ombori_suv_xajmi',
            //'suv_bosimi',
            //'suv_omboridan_kelayotgan_suv',
            //'suv_omboridan_chiqayotgan_suv',
            //'geslar_orqali',
            //'salt_tashlama',
            //'ishlayotgan_agregatlar_soni',
            //'day_energiya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Explotation $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
