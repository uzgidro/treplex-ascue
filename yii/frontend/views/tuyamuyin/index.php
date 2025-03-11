<?php
use yii\helpers\Html;
use common\models\Organization;
use yii\helpers\Url;
use dosamigos\chartjs\ChartJs;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = '"Туямўйин ГЭС" Филиалида электр энергия ишлаб чиқарилиши';
$CONST = 1000000;
$kvt = 1000;

$allProduction = 0;
$allReception = 0;
$allOwnNeeds = 0;
$allRecoil = 0;
$allMonths = 0;
$allYear = 0;
function Ges($name, $url, $aggregate, $number): string
{
    $urlGes = Url::to([$url]);
    return <<<end
<div class="card h-100">
    <div class="card-body">
        <div class="border-bottom border-translucent">
            <a href="{$urlGes}"><p class="fs-9 fw-semibold text-body ms-1 text ps-2">{$name}</p></a>
        </div>
        <div class="row g-1 g-sm-3 lh-1">
            <table class="w-100 table-stats table-stats">
                <tbody>
                <td class="py-1">
                    <div class="d-inline-flex align-items-center">
                        <div class="d-flex bg-success-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 text-success-dark" style="width:16px; height:16px"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                        </div>
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">∑  Актив кувват (Р)</p>
                    </div>
                </td>
                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-1">
                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports" id="active{$number}">0 МВт </p>
                </td>
                </tr>
                <tr>
                    <td class="py-1">
                        <div class="d-flex align-items-center">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-info-dark"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                            </div>
                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Гидроагрегатлар холати</p>
                        </div>
                    </td>
                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                    <td class="py-1">
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">{$aggregate}/<span class="text-danger" id="true{$number}">0</span>/<span class="text-success" id="false{$number}">0</span>/<span class="text-warning" id="true{$number}">0</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="py-1">
                        <div class="d-flex align-items-center">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-info-dark" style="stroke-width:2;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Кунлик ишлаб чикарилган</p>
                        </div>
                    </td>
                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                    <td class="py-1">
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports" id="days">0 млн кВт/с</p>
                    </td>
                </tr>
                <tr>
                    <td class="py-1">
                        <div class="d-flex align-items-center">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg class="svg-inline--fa fa-calendar-days text-primary" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"></path></svg>
                            </div>
                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Ойлик (режа/кутилиши)</p>
                        </div>
                    </td>
                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                    <td class="py-1">
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports"><span id="plan">0</span>/<span id="month">0</span> млн.кВт/с </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
end;

}
?>
<div class="col-xl-12 col-xxl-12">
    <div class="card mb-3" style="backdrop-filter: blur(15px);">
        <div class="card-body">
            <div class="row g-4 g-xl-1 g-xxl-3 justify-content-between">
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity text-info-dark"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">
                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Активноя мощность</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="active">0 МВт </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">
                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Реактивноя мощность</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="reactive">0 МВар </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize-2 text-info-dark"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Отдача</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="activeOut">0 МВт </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Приём</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="activeIn">0 МВт</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-info-dark"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Расход воды через турбины</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="water">0 м3/с</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Собствинные нужды</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="ownNeeds">0 KВт</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar text-info-dark"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports"><?= date('Y-m-d') ?></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="clock"></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-3 list mb-3">
    <div class="col-4 col-xl-4">
        <div class="row g-3 list">
            <div class="col-6 col-xl-6">
                <?= Ges('ГЭС-30', 'ges30', 2, "30") ?>
            </div>
        </div>
    </div>
    <div class="col-5 col-xl-5">
        <div class="card border w-100 overflow-hidden" style="backdrop-filter: blur(15px);">
            <div class="bg-holder d-block bg-card" style="background-image:url(<?= Url::to(['../asset/img/spot-illustrations/32.png']) ?>);background-position: top right;">
            </div>
            <!--/.bg-holder-->
            <div class="">
                <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-position: bottom right; background-size: auto;">
                </div>
                <!--/.bg-holder-->
            </div>
            <div class="d-light-none">
                <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-position: bottom right; background-size: auto;">
                </div>
                <!--/.bg-holder-->
            </div>
            <div class="card-body px-5 position-relative">
                <h3 class="mb-3 text-center"><?= Html::encode($this->title) ?></h3>
                <table class="w-100 table-stats table-stats">
                    <tbody>
                    <tr>
                        <td class="py-2">
                            <div class="d-inline-flex align-items-center">
                                <div class="d-flex bg-success-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 text-success-dark" style="width:16px; height:16px"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                                </div>
                                <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">Кун давомида ишлаб чиқарилган электр энергия</p>
                            </div>
                        </td>

                        <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                        <td class="py-2">
                            <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports"><?= number_format($allProduction / $CONST, 2, ',', ' ')?> млн кВт/с </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2">
                            <div class="d-flex align-items-center">
                                <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-info-dark"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-info-dark" style="width:16px; height:16px"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg> -->
                                </div>
                                <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">Гидроагрегатларнинг жорий холати (жами/ишда/захирада/таъмирда)</p>
                            </div>
                        </td>
                        <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                        <td class="py-1">
                            <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">10 / <span class="text-danger" id="activeTrue">0</span> / <span class="text-success" id="activeFalse">0</span> / <span class="text-warning" id="activeError">0</span> та</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2">
                            <div class="d-flex align-items-center">
                                <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-info-dark" style="width:16px; height:16px"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                </div>
                                <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">Кун давомида тармоққа узатилган электр энергия (узатилган/транзит)</p>
                            </div>
                        </td>
                        <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                        <td class="py-2">
                            <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports"><?= number_format($allRecoil / $CONST, 2, ',', ' ')?> млн кВт/с</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2">
                            <div class="d-flex align-items-center">
                                <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-info-dark" style="width:16px; height:16px">
                                        <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                        <polyline points="17 18 23 18 23 12"></polyline>
                                    </svg>
                                </div>
                                <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">Кун давомида тармоқдан қабул қилинган электр энергия  (қабул/транзит)</p>
                            </div>
                        </td>
                        <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                        <td class="py-2">
                            <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports"><?= number_format($allReception, 2, ',', ' ')?> кВт/с</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2">
                            <div class="d-flex align-items-center">
                                <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-info-dark" style="width:16px; height:16px">
                                        <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                        <polyline points="17 18 23 18 23 12"></polyline>
                                    </svg>
                                </div>
                                <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">Кун давомида ўз эхтиёжи учун сарфланган электр энергия</p>
                            </div>
                        </td>
                        <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                        <td class="py-2">
                            <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports"><?= number_format($allOwnNeeds, 2, ',', ' ')?> кВт/с</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2">
                            <div class="d-flex align-items-center">
                                <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-info-dark" style="width:16px; height:16px"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                    </div>
                                </div>
                                <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">Ой бошидан ишлаб чиқарилган электр энергия</p>
                            </div>
                        </td>
                        <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                        <td class="py-2">
                            <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports"><?= number_format($allMonths / $CONST, 2, ',', ' ')?> млн кВт/с</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2">
                            <div class="d-flex align-items-center">
                                <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-info-dark" style="width:16px; height:16px"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                    </div>
                                </div>
                                <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">Йил бошидан ишлаб чиқарилган электр энергия</p>
                            </div>
                        </td>
                        <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                        <td class="py-2">
                            <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports"><?= number_format($allYear / $CONST, 2, ',', ' ')?> млн кВт/с</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-3 col-xl-3">
        <div class="card shadow-none border" data-component-card="data-component-card">
            <div class="card-body p-0">
                <div class="card-body p-0">
                    <div class="p-4 code-to-copy">
                        <h5 class="mb-1 text-body-secondary">КУНЛИК ИШЛАБ ЧИҚАРИШ МАЪЛУМОТЛАРИ</h5>
                        <table class="w-100 table-hover">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Генерация</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">15,01 млн кВт/ч</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Ўз эхтиёжи харажати</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">0,00 млн кВт/ч</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Тармоққа узатилаётган қувват</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">14,08 млн кВт/ч</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Qb </p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">14,08 млн кВт/ч</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="mb-1 mt-3 text-body-secondary">ОЙ БОШИДАН ИШЛАБ ЧИҚАРИШ МАЪЛУМОТЛАРИ</h5>
                        <table class="w-100 table-hover">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Генерация</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">15,01 млн кВт/ч</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Ўз эхтиёжи харажати</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">0,00 млн кВт/ч</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Тармоққа узатилаётган қувват</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">14,08 млн кВт/ч</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Qb </p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">14,08 млн кВт/ч</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="mb-1 mt-3 text-body-secondary">ЙИЛ БОШИДАН ИШЛАБ ЧИҚАРИШ МАЪЛУМОТЛАРИ</h5>
                        <table class="w-100 table-hover">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Генерация</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">15,01 млн кВт/ч</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Ўз эхтиёжи харажати</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">0,00 млн кВт/ч</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Тармоққа узатилаётган қувват</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">14,08 млн кВт/ч</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Qb </p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">14,08 млн кВт/ч</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
