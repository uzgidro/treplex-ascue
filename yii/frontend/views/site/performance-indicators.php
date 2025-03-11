<?php
use yii\helpers\Html;
use common\models\Organization;
use yii\helpers\Url;
use dosamigos\chartjs\ChartJs;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = '“Ўзбекгидроэнерго” АЖ йиллик режа ва бажарилиш кўрсаткичлари';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="col-md-12">
    <?= Yii::$app->session->getFlash('msg') ?>
</div>

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-chart-bar"></i> <?= Html::encode($this->title) ?></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                <i class="fas fa-expand"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-5">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">I чорак</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-hover">
                            <thead class="bg-info">
                            <tr>
                                <th style="width: 20px;vertical-align: middle;text-align: center;" rowspan="2">№</th>
                                <th style="vertical-align: middle;text-align: center;" rowspan="2">Корхона номи</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Январ</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Февраль</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Март</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">I чорак</th>
                            </tr>
                            <tr>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            $organization = Organization::find()->where(['id_organization' => null])->all();
                            foreach ($organization as $item) :
                                ?>
                                <tr>
                                    <th style="vertical-align: middle;text-align: center;"><?= $i ?></th>
                                    <th style="vertical-align: middle;"><?= $item['name'] ?></th>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                </tr>

                                <?php $i++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= ChartJs::widget([
                            'type' => 'bar',
                            'options' => [
                                'height' => 400,
                                'width' => 400
                            ],
                            'data' => [
                                'labels' => ["I-чорак", "II-чорак"],
                                'datasets' => [
                                    [
                                        'label' => "Амалда",
                                        'backgroundColor' => "#17a2b8",
                                        'borderColor' => "#17a2b8",
                                        'pointBackgroundColor' => "rgba(179,181,198,1)",
                                        'pointBorderColor' => "#fff",
                                        'pointHoverBackgroundColor' => "#fff",
                                        'pointHoverBorderColor' => "rgba(179,181,198,1)",
                                        'data' => [65, 59, 90, 81, 56, 55, 40]
                                    ],
                                    [
                                        'label' => "Режа",
                                        'backgroundColor' => "#dc3545",
                                        'borderColor' => "#dc3545",
                                        'pointBackgroundColor' => "rgba(255,99,132,1)",
                                        'pointBorderColor' => "#fff",
                                        'pointHoverBackgroundColor' => "#fff",
                                        'pointHoverBorderColor' => "rgba(255,99,132,1)",
                                        'data' => [28, 48, 40, 19, 96, 27, 100]
                                    ]
                                ]
                            ]
                        ]);
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">II чорак</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-hover">
                            <thead class="bg-info">
                            <tr>
                                <th style="width: 20px;vertical-align: middle;text-align: center;" rowspan="2">№</th>
                                <th style="vertical-align: middle;text-align: center;" rowspan="2">Корхона номи</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Апрель</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Май</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Июн</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">II чорак</th>
                            </tr>
                            <tr>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            $organization = Organization::find()->where(['id_organization' => null])->all();
                            foreach ($organization as $item) :
                                ?>
                                <tr>
                                    <th style="vertical-align: middle;text-align: center;"><?= $i ?></th>
                                    <th style="vertical-align: middle;"><?= $item['name'] ?></th>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                </tr>

                                <?php $i++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">III чорак</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-hover">
                            <thead class="bg-info">
                            <tr>
                                <th style="width: 20px;vertical-align: middle;text-align: center;" rowspan="2">№</th>
                                <th style="vertical-align: middle;text-align: center;" rowspan="2">Корхона номи</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Июл</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Август</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Сентябр</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">III чорак</th>
                            </tr>
                            <tr>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            $organization = Organization::find()->where(['id_organization' => null])->all();
                            foreach ($organization as $item) :
                                ?>
                                <tr>
                                    <th style="vertical-align: middle;text-align: center;"><?= $i ?></th>
                                    <th style="vertical-align: middle;"><?= $item['name'] ?></th>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                </tr>

                                <?php $i++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= ChartJs::widget([
                            'type' => 'bar',
                            'options' => [
                                'height' => 400,
                                'width' => 400
                            ],
                            'data' => [
                                'labels' => ["I-чорак", "II-чорак"],
                                'datasets' => [
                                    [
                                        'label' => "Амалда",
                                        'backgroundColor' => "#17a2b8",
                                        'borderColor' => "#17a2b8",
                                        'pointBackgroundColor' => "rgba(179,181,198,1)",
                                        'pointBorderColor' => "#fff",
                                        'pointHoverBackgroundColor' => "#fff",
                                        'pointHoverBorderColor' => "rgba(179,181,198,1)",
                                        'data' => [65, 59, 90, 81, 56, 55, 40]
                                    ],
                                    [
                                        'label' => "Режа",
                                        'backgroundColor' => "#dc3545",
                                        'borderColor' => "#dc3545",
                                        'pointBackgroundColor' => "rgba(255,99,132,1)",
                                        'pointBorderColor' => "#fff",
                                        'pointHoverBackgroundColor' => "#fff",
                                        'pointHoverBorderColor' => "rgba(255,99,132,1)",
                                        'data' => [28, 48, 40, 19, 96, 27, 100]
                                    ]
                                ]
                            ]
                        ]);
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">IV чорак</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-hover">
                            <thead class="bg-info">
                            <tr>
                                <th style="width: 20px;vertical-align: middle;text-align: center;" rowspan="2">№</th>
                                <th style="vertical-align: middle;text-align: center;" rowspan="2">Корхона номи</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Октябр</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Ноябр</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">Декабр</th>
                                <th style="vertical-align: middle;text-align: center;" colspan="3">IV чорак</th>
                            </tr>
                            <tr>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                                <th style="vertical-align: middle;text-align: center;">Режа</th>
                                <th style="vertical-align: middle;text-align: center;">Факт</th>
                                <th style="vertical-align: middle;text-align: center;">%</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            $organization = Organization::find()->where(['id_organization' => null])->all();
                            foreach ($organization as $item) :
                                ?>
                                <tr>
                                    <th style="vertical-align: middle;text-align: center;"><?= $i ?></th>
                                    <th style="vertical-align: middle;"><?= $item['name'] ?></th>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                    <td style="vertical-align: middle;text-align: center;">Режа</td>
                                    <td style="vertical-align: middle;text-align: center;">Факт</td>
                                    <td style="vertical-align: middle;text-align: center;">%</td>
                                </tr>

                                <?php $i++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-chart-bar"></i>
                        Йиллик режа ва амалда бажарилиши
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="height: 300px">
                    <?= ChartJs::widget([
                        'type' => 'line',
                        'options' => [
                            'height' => 10,
                            'width' => 100,
                        ],
                        'data' => [
                            'labels' => ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
                            'datasets' => [
                                [
                                    'label' => "Режа",
                                    'backgroundColor' => "#17a2b8",
                                    'borderColor' => "#17a2b8",
                                    'pointBackgroundColor' => "#007bff",
                                    'pointBorderColor' => "#fff",
                                    'pointHoverBackgroundColor' => "#fff",
                                    'pointHoverBorderColor' => "#007bff",
                                    'data' => [2.3, 3, 2.7, 3.1, 2.8, 2, 2.9, 3, 2.7, 3.1, 2.8, 2]
                                ],
                                [
                                    'label' => "Амалда",
                                    'backgroundColor' => "#dc3545",
                                    'borderColor' => "#dc3545",
                                    'pointBackgroundColor' => "#dc3545",
                                    'pointBorderColor' => "#fff",
                                    'pointHoverBackgroundColor' => "#fff",
                                    'pointHoverBorderColor' => "#dc3545",
                                    'data' => [1.3, 2, 1.7, 2.1, 1.8, 1, 1.9, 2, 1.7, 2.1, 1.8, 1]
                                ],
                            ]
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

