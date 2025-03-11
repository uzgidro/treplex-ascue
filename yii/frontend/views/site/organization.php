<?php
use yii\helpers\Html;
use common\models\Organization;
use yii\helpers\Url;
use dosamigos\chartjs\ChartJs;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = '"Ўзбекгидроэнерго" АЖда электр энергия ишлаб чиқарилиши';
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
            <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info" style="width: 135px;"><i class="fa fa-bolt"></i></span>
                    <div class="info-box-content">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>∑ Актив (Р)</td>
                                <td>ХХХ,Х МВт</td>
                                <td style="color: red;">(-5) <i class="fa fa-long-arrow-alt-down"></i></td>
                            </tr>
                            <tr>
                                <td>∑ Реактив (Q)</td>
                                <td>ХХ,Х МВар</td>
                                <td style="color: green;">(+5) <i class="fa fa-long-arrow-alt-up"></i> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning" style="width: 135px;"><i class="fa fa-bolt"></i></span>
                    <div class="info-box-content">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>∑ Актив (Р) узатиз <i class="fa fa-long-arrow-alt-right" style="color: green"></i></td>
                                <td>ХХХ,Х МВт</td>
                                <td style="color: green;">(+5) <i class="fa fa-long-arrow-alt-up"></i> </td>
                            </tr>
                            <tr>
                                <td>∑ Актив (Р) қабул <i class="fa fa-long-arrow-alt-left" style="color: red"></i></td>
                                <td>ХХ,Х МВт</td>
                                <td style="color: green;">(+5) <i class="fa fa-long-arrow-alt-up"></i> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-primary" style="width: 135px;"><i class="fa fa-water"></i></span>
                    <div class="info-box-content">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>∑ Турбина орқали ўтаётган сув (Q) <i class="fa fa-water" style="color: blue;"></i></td>
                                <td>ХХХ,Х м3/с</td>
                                <td style="color: green;">(+5) <i class="fa fa-long-arrow-alt-up"></i> </td>
                            </tr>
                            <tr>
                                <td>∑ Ўз эхтиёж учун сарф (Р) <i class="fas fa-sync-alt" style="color: red"></i></td>
                                <td>ХХ,Х МВт</td>
                                <td style="color: green;">(+5) <i class="fa fa-long-arrow-alt-up"></i> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <div class="info-box bg-info">
                    <div class="table-responsive">
                        <table class="table-bordered" width="100%" style="padding-right: 5px;">
                            <tbody>
                            <tr>
                                <th rowspan="3" style="width: 170px;text-align: center;"><a style="color: #fff;" href="<?= Url::to(['site/organization']) ?>">"Ўрта Чирчиқ ГЭСлар каскади" УК</a></th>
                                <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="info-box bg-info">
                    <div class="table-responsive">
                        <table class="table-bordered" width="100%" style="padding-right: 5px;">
                            <tbody>
                            <tr>
                                <th rowspan="3" style="width: 170px;text-align: center;"> "Чирчиқ ГЭСлар каскади" УК</th>
                                <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="info-box bg-info">
                    <div class="table-responsive">
                        <table class="table-bordered" width="100%" style="padding-right: 5px;">
                            <tbody>
                            <tr>
                                <th rowspan="3" style="width: 170px;text-align: center;">"Қодирия ГЭСлар каскади" УК</th>
                                <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="info-box bg-info">
                    <div class="table-responsive">
                        <table class="table-bordered" width="100%" style="padding-right: 5px;">
                            <tbody>
                            <tr>
                                <th rowspan="3" style="width: 170px;text-align: center;">"Тошкент ГЭСлар каскади" УК</th>
                                <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="info-box bg-info">
                    <div class="table-responsive">
                        <table class="table-bordered" width="100%" style="padding-right: 5px;">
                            <tbody>
                            <tr>
                                <th rowspan="3" style="width: 170px;text-align: center;">"Қуйи Бўзсув ГЭСлар каскади" УК</th>
                                <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="info-box bg-info">
                    <div class="table-responsive">
                        <table class="table-bordered" width="100%" style="padding-right: 5px;">
                            <tbody>
                            <tr>
                                <th rowspan="3" style="width: 170px;text-align: center;">"Фарход ГЭС" УК</th>
                                <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-6">
                        <div class="info-box bg-info">
                            <div class="table-responsive">
                                <table class="table-bordered" width="100%" style="padding-right: 5px;">
                                    <tbody>
                                    <tr>
                                        <th rowspan="3" style="width: 170px;text-align: center;">"Самарқанд ГЭСлар каскади" УК</th>
                                        <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                        <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                        <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                        <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box bg-info">
                            <div class="table-responsive">
                                <table class="table-bordered" width="100%" style="padding-right: 5px;">
                                    <tbody>
                                    <tr>
                                        <th rowspan="3" style="width: 170px;text-align: center;">"Тўполанг ГЭС" УК</th>
                                        <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                        <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                        <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                        <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box bg-info">
                            <div class="table-responsive">
                                <table class="table-bordered" width="100%" style="padding-right: 5px;">
                                    <tbody>
                                    <tr>
                                        <th rowspan="3" style="width: 170px;text-align: center;">"Охангарон ГЭС» УК</th>
                                        <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                        <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                        <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                        <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box bg-info">
                            <div class="table-responsive">
                                <table class="table-bordered" width="100%" style="padding-right: 5px;">
                                    <tbody>
                                    <tr>
                                        <th rowspan="3" style="width: 170px;text-align: center;">"Хисорак ГЭС" УК</th>
                                        <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                        <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                        <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                        <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box bg-info">
                            <div class="table-responsive">
                                <table class="table-bordered" width="100%" style="padding-right: 5px;">
                                    <tbody>
                                    <tr>
                                        <th rowspan="3" style="width: 170px;text-align: center;">"Қамчиқ ГЭС" УК</th>
                                        <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                        <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                        <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                        <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="info-box">
                    <div class="table-responsive">
                        <table class="table" width="100%" style="padding-right: 5px;">
                            <tbody>
                            <tr>
                                <th colspan="3" style="text-align: center;">ЎЗБЕКГИДРОЭНЕРГО АКЦИЯДОРЛИК ЖАМИЯТИ</th>
                            </tr>
                            <tr>
                                <td>Ишлаб чиқарилаётган актив қувват</td>
                                <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            <tr>
                                <td>Турбина орқали ўтаётган сув</td>
                                <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                <td style="text-align: right;">000 м3/с <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                            </tr>
                            <tr>
                                <td>Ўз эхтиёж учун сарфланаётган қувват</td>
                                <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            <tr>
                                <td>Тармоққа узатилаётган қувват</td>
                                <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            <tr>
                                <td>Тармоқдан қабул ёқилинаётган қувват</td>
                                <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-6">
                        <div class="info-box bg-info">
                            <div class="table-responsive">
                                <table class="table-bordered" width="100%" style="padding-right: 5px;">
                                    <tbody>
                                    <tr>
                                        <th rowspan="3" style="width: 170px;text-align: center;">"КФК КГЭСлар каскади" УК</th>
                                        <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                        <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                        <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                        <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box bg-info">
                            <div class="table-responsive">
                                <table class="table-bordered" width="100%" style="padding-right: 5px;">
                                    <tbody>
                                    <tr>
                                        <th rowspan="3" style="width: 170px;text-align: center;">"Андижон ГЭС" УК</th>
                                        <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                        <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                        <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                        <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box bg-info">
                            <div class="table-responsive">
                                <table class="table-bordered" width="100%" style="padding-right: 5px;">
                                    <tbody>
                                    <tr>
                                        <th rowspan="3" style="width: 170px;text-align: center;">"Шахриход ГЭСлар каскади" ФЛ</th>
                                        <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                        <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                        <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                        <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box bg-info">
                            <div class="table-responsive">
                                <table class="table-bordered" width="100%" style="padding-right: 5px;">
                                    <tbody>
                                    <tr>
                                        <th rowspan="3" style="width: 170px;text-align: center;">"Туямўйин ГЭС" УК</th>
                                        <td style="text-align: center;color: #FFBD40;"><i class="fa fa-bolt"></i></td>
                                        <td style="text-align: right;">000 МВт <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #0ac72b;"><i class="fa fa-cogs"></i></td>
                                        <td style="text-align: right;">12 дона <a class="btn btn-danger" style="font-weight: bold;padding: 0px 3px;">-1</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: #40acff;"><i class="fa fa-water"></i></td>
                                        <td style="text-align: right;">000 м3/с <a class="btn btn-success" style="font-weight: bold;padding: 0px 3px;">+3</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-chart-bar"></i>
                        Соатлик электр энергия ишлаб чиқариш
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="height: 300px">
                    <?php
                    //                setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");
                    //
                    //                $hour = date('H');
                    //                echo $hour;
                    ?>

                    <?= ChartJs::widget([
                        'type' => 'line',
                        'options' => [
                            'height' => 10,
                            'width' => 100,
                        ],
                        'data' => [
                            'labels' => ["00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"],
                            'datasets' => [
                                [
                                    'label' => "МВт",
                                    'backgroundColor' => "#17a2b8",
                                    'borderColor' => "#17a2b8",
                                    'pointBackgroundColor' => "#007bff",
                                    'pointBorderColor' => "#fff",
                                    'pointHoverBackgroundColor' => "#fff",
                                    'pointHoverBorderColor' => "#007bff",
                                    'data' => [1.3, 2, 1.7, 2.1, 1.8, 1, 1.9, 2, 1.7, 2.1, 1.8, 1, 1.9, 2, 1.7, 2.1, 1.8, 1, 1.9, 2, 1.7, 2.1, 1.8, 1, 1.9,2]
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

