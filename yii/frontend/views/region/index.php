<?php
use yii\helpers\Html;
use common\models\Organization;
use yii\helpers\Url;
use dosamigos\chartjs\ChartJs;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Акционерная общество “Ўзбекгидроэнерго”';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="col-md-12">
    <?= Yii::$app->session->getFlash('msg') ?>
</div>

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-bolt"></i> <?= Html::encode($this->title) ?></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                <i class="fas fa-expand"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <table class="table table-hover table-bordered">
                    <thead class="bg-info">
                    <tr>
                        <th colspan="2" style="text-align: center;">Суточный</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>выработка</td>
                        <td style="text-align: right;" width="170">15,01 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td> Приём (коммерческий)</td>
                        <td style="text-align: right;">0,00 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td>Расход на собственных нужд</td>
                        <td style="text-align: right;">0,01 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td>Отдача (коммерческий)</td>
                        <td style="text-align: right;">14,08 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td>Qb   (небаланс)</td>
                        <td style="text-align: right;">15 млн кВт/ч</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table table-hover table-bordered">
                    <thead class="bg-info">
                    <tr>
                        <th colspan="2" style="text-align: center;">С начало месяца</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>выработка c начало месяца</td>
                        <td style="text-align: right;" width="170">15,01 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td> Приём c начало месяца (коммерческий)</td>
                        <td style="text-align: right;">0,00 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td>Расход c начало месяца на собственных нужд</td>
                        <td style="text-align: right;">0,01 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td>Отдача c начало месяца (коммерческий)</td>
                        <td style="text-align: right;">14,08 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td>Qb   (небаланс)</td>
                        <td style="text-align: right;">15 млн кВт/ч</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table table-hover table-bordered">
                    <thead class="bg-info">
                    <tr>
                        <th colspan="2" style="text-align: center;">С начало года</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>выработка c начало года</td>
                        <td style="text-align: right;" width="170">15,01 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td>Приём c начало года (коммерческий)</td>
                        <td style="text-align: right;">0,00 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td>Расход c начало года на собственных нужд</td>
                        <td style="text-align: right;">0,01 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td>Отдача c начало года (коммерческий)</td>
                        <td style="text-align: right;">14,08 млн кВт/ч</td>
                    </tr>
                    <tr>
                        <td>Qb   (небаланс)</td>
                        <td style="text-align: right;">15 млн кВт/ч</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="info-box">
                    <div class="row">
                        <div class="col-12">
                            <div class="info-box bg-info">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%" style="padding-right: 5px;background: #fff; color: #000; border-color: #17a2b8;">
                                        <tbody>
                                        <tr>
                                            <th rowspan="5" style="width: 170px;text-align: center;">Хорезмская область<br/>(за сутки)</th>
                                            <td style="text-align: center;">Выработка</td>
                                            <td style="text-align: right;">15,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Приём  (коммер.)</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Расход на соб.нужд</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Отдача (коммер)</td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Q<em>b</em></td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-box bg-info">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%" style="padding-right: 5px;background: #fff; color: #000; border-color: #17a2b8;">
                                        <tbody>
                                        <tr>
                                            <th rowspan="5" style="width: 170px;text-align: center;">Кашкадарьинская область<br/>(за сутки)</th>
                                            <td style="text-align: center;">Выработка</td>
                                            <td style="text-align: right;">15,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Приём  (коммер.)</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Расход на соб.нужд</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Отдача (коммер)</td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Q<em>b</em></td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-box bg-info">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%" style="padding-right: 5px;background: #fff; color: #000; border-color: #17a2b8;">
                                        <tbody>
                                        <tr>
                                            <th rowspan="5" style="width: 170px;text-align: center;">Сурхандарьинская область<br/>(за сутки)</th>
                                            <td style="text-align: center;">Выработка</td>
                                            <td style="text-align: right;">15,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Приём  (коммер.)</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Расход на соб.нужд</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Отдача (коммер)</td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Q<em>b</em></td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-box bg-info">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%" style="padding-right: 5px;background: #fff; color: #000; border-color: #17a2b8;">
                                        <tbody>
                                        <tr>
                                            <th rowspan="5" style="width: 170px;text-align: center;">Джизакская область<br/>(за сутки)</th>
                                            <td style="text-align: center;">Выработка</td>
                                            <td style="text-align: right;">15,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Приём  (коммер.)</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Расход на соб.нужд</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Отдача (коммер)</td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Q<em>b</em></td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-box bg-info">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%" style="padding-right: 5px;background: #fff; color: #000; border-color: #17a2b8;">
                                        <tbody>
                                        <tr>
                                            <th rowspan="5" style="width: 170px;text-align: center;">Самаркандская область<br/>(за сутки)</th>
                                            <td style="text-align: center;">Выработка</td>
                                            <td style="text-align: right;">15,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Приём  (коммер.)</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Расход на соб.нужд</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Отдача (коммер)</td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Q<em>b</em></td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="info-box">
                    <div class="row">
                        <div class="col-12">
                            <div class="info-box bg-info">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%" style="padding-right: 5px;background: #fff; color: #000; border-color: #17a2b8;">
                                        <tbody>
                                        <tr>
                                            <th rowspan="5" style="width: 170px;text-align: center;">Сырдарьинская область<br/>(за сутки)</th>
                                            <td style="text-align: center;">Выработка</td>
                                            <td style="text-align: right;">15,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Приём  (коммер.)</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Расход на соб.нужд</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Отдача (коммер)</td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Q<em>b</em></td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-box bg-info">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%" style="padding-right: 5px;background: #fff; color: #000; border-color: #17a2b8;">
                                        <tbody>
                                        <tr>
                                            <th rowspan="5" style="width: 170px;text-align: center;">Ташкентская область<br/>(за сутки)</th>
                                            <td style="text-align: center;">Выработка</td>
                                            <td style="text-align: right;">15,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Приём  (коммер.)</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Расход на соб.нужд</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Отдача (коммер)</td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Q<em>b</em></td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-box bg-info">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%" style="padding-right: 5px;background: #fff; color: #000; border-color: #17a2b8;">
                                        <tbody>
                                        <tr>
                                            <th rowspan="5" style="width: 170px;text-align: center;">Наманганская область<br/>(за сутки)</th>
                                            <td style="text-align: center;">Выработка</td>
                                            <td style="text-align: right;">15,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Приём  (коммер.)</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Расход на соб.нужд</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Отдача (коммер)</td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Q<em>b</em></td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-box bg-info">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%" style="padding-right: 5px;background: #fff; color: #000; border-color: #17a2b8;">
                                        <tbody>
                                        <tr>
                                            <th rowspan="5" style="width: 170px;text-align: center;">Ферганская область<br/>(за сутки)</th>
                                            <td style="text-align: center;">Выработка</td>
                                            <td style="text-align: right;">15,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Приём  (коммер.)</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Расход на соб.нужд</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Отдача (коммер)</td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Q<em>b</em></td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-box bg-info">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%" style="padding-right: 5px;background: #fff; color: #000; border-color: #17a2b8;">
                                        <tbody>
                                        <tr>
                                            <th rowspan="5" style="width: 170px;text-align: center;">Андижанская область<br/>(за сутки)</th>
                                            <td style="text-align: center;">Выработка</td>
                                            <td style="text-align: right;">15,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Приём  (коммер.)</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Расход на соб.нужд</td>
                                            <td style="text-align: right;">0,01 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Отдача (коммер)</td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">Q<em>b</em></td>
                                            <td style="text-align: right;">15 млн кВт/ч</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

