<?php

namespace frontend\controllers;

use common\models\Organization;
use common\models\Plan;
use common\models\Year;
use yii\helpers\Url;
use Yii;

class Dashboard
{
    public function __construct()
    {
        // Установка локали и часового пояса один раз при создании объекта
        setlocale(LC_ALL, "uz_UZ");
        date_default_timezone_set("Asia/Tashkent");
    }

    public int $COUNT = 1000000;

    public function AllResultGes($id): string
    {
        $organization = Organization::findOne($id);
        $sum = 0; $aggregate = 0; $allMonths = 0; $allYear = 0;
        $subOrganization = Organization::find()->where(['id_organization' => $id])->all();
        foreach ($subOrganization as $sub) {
            $sum += $this->TodayGes($sub['id']);
            $allMonths += $this->MonthGes($sub['id']);
            $allYear += $this->YearGes($sub['id']);
            $aggregate += $sub['agregat'];
        }

        $sum = number_format($sum / $this->COUNT, 2, ',', ' ');
        $allMonths = number_format($allMonths / $this->COUNT, 2, ',', ' ');
        $allYear = number_format($allYear / $this->COUNT, 2, ',', ' ');
        $allRecoil = 0;
        $allReception = 0;
        $allOwnNeeds = 0;

        return <<<end
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
        <h3 class="mb-3 text-center">{$organization['name']}да электр энергия ишлаб чиқарилиши</h3>
        <table class="w-100 table-stats table-stats">
            <tbody>
            <tr>
                <td class="py-2">
                    <div class="d-inline-flex align-items-center">
                        <div class="d-flex bg-success-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 text-success-dark" style="width:16px; height:16px"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                        </div>
                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Кун давомида ишлаб чиқарилган электр энергия</p>
                    </div>
                </td>

                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-2">
                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">{$sum} млн кВт</p>
                </td>
            </tr>
            <tr>
                <td class="py-2">
                    <div class="d-flex align-items-center">
                        <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-info-dark"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-info-dark" style="width:16px; height:16px"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg> -->
                        </div>
                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Гидроагрегатларнинг жорий холати (жами/ишда/захирада/таъмирда)</p>
                    </div>
                </td>
                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-1">
                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">{$aggregate} / <span class="text-danger" id="activeTrue">0</span> / <span class="text-success" id="activeFalse">0</span> / <span class="text-warning" id="activeError">0</span> та</p>
                </td>
            </tr>
            <tr>
                <td class="py-2">
                    <div class="d-flex align-items-center">
                        <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-info-dark" style="width:16px; height:16px"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Кун давомида тармоққа узатилган электр энергия (узатилган/транзит)</p>
                    </div>
                </td>
                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-2">
                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">{$allRecoil} млн кВт/с</p>
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
                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Кун давомида тармоқдан қабул қилинган электр энергия  (қабул/транзит)</p>
                    </div>
                </td>
                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-2">
                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">{$allReception} кВт</p>
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
                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Кун давомида ўз эхтиёжи учун сарфланган электр энергия</p>
                    </div>
                </td>
                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-2">
                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">{$allOwnNeeds} кВт</p>
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
                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Ой бошидан ишлаб чиқарилган электр энергия</p>
                    </div>
                </td>
                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-2">
                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">{$allMonths} млн кВт</p>
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
                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Йил бошидан ишлаб чиқарилган электр энергия</p>
                    </div>
                </td>
                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                <td class="py-2">
                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">{$allYear} млн кВт</p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
end;
    }

    public function Ges($id, $url, $number): string
    {
        $todayGes = 0;
        $monthGes = 0;
        $yearGes = 0;
        $expected = 0;
        $monthPlan = 0;
        $yearPlan = 0;
        $aggregate = 0;
        $name = null;
        for ($i = 0; $i < count($id); $i++) {
            $organization = Organization::findOne($id[$i]);
            if ($i == 0) {
                $name = $organization['name'];
            }
            $aggregate += $organization['agregat'];
            $todayGes += $this->TodayGes($id[$i]);
            $monthGes += $this->MonthGes($id[$i]);
            $yearGes += $this->YearGes($id[$i]);
            $expected += $this->MonthExpected($id[$i]);
            $monthPlan += $this->MonthPlan($id[$i]);
            $yearPlan += $this->YearPlan($id[$i]);
        }

        $todayGes = number_format($todayGes / $this->COUNT, 2, ',', ' ');
        $monthGes = number_format($monthGes / $this->COUNT, 2, ',', ' ');
        $yearGes = number_format($yearGes / $this->COUNT, 2, ',', ' ');
        $expected = number_format($expected / $this->COUNT, 2, ',', ' ');
        $monthPlan = number_format($monthPlan, 2, ',', ' ');
        $yearPlan = number_format($yearPlan / $this->COUNT, 2, ',', ' ');

        $urlGes = Url::to([$url]);
        return <<<end
<div class="card h-100" style="backdrop-filter: blur(15px);">
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
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">{$aggregate}/<span class="text-danger" id="true{$number}">0</span>/<span class="text-success" id="false{$number}">0</span>/<span class="text-warning" id="error{$number}">0</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="py-1">
                        <div class="d-flex align-items-center">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-info-dark" style="stroke-width:2;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Кунлик ишлаб чиқарилган</p>
                        </div>
                    </td>
                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                    <td class="py-1">
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports" id="days">{$todayGes} млн кВт</p>
                    </td>
                </tr>
                <tr>
                    <td class="py-1">
                        <div class="d-flex align-items-center">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg class="svg-inline--fa fa-calendar-days text-primary" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"></path></svg>
                            </div>
                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Ой бошидан ишлаб чиқарилган</p>
                        </div>
                    </td>
                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                    <td class="py-1">
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">{$monthGes} млн кВт</p>
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
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">{$monthPlan} / {$expected} млн кВт </p>
                    </td>
                </tr>
                <tr>
                    <td class="py-1">
                        <div class="d-flex align-items-center">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg class="svg-inline--fa fa-calendar-days text-primary" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"></path></svg>
                            </div>
                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Йил бошидан ишлаб чиқарилган(режа/амалда)</p>
                        </div>
                    </td>
                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                    <td class="py-1">
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">{$yearPlan} / {$yearGes} млн кВт </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
end;
    }

    public function GesDashboard($id, $container): string
    {
        // Текущая дата минус 10 дней
        $startDate = date('Y-m-d', strtotime('-30 days'));

        $array = [];

        for ($i = 0; $i <= 30; $i++) {
            // Добавляем $i дней к начальной дате
            $currentDate = date('Y-m-d', strtotime($startDate . ' +' . $i . ' days'));
            $power = 0;
            for ($k = 0; $k < count($id); $k++) {
                // Получаем сумму power для текущей даты
                $power += \common\models\Power::find()
                    ->where(['date' => $currentDate])
                    ->andWhere(['id_organization' => $id[$k]])
                    ->sum("power");
            }
            // Добавляем данные в массив
            $array[] = [
                "year" => $currentDate,
                "value" => (int)$power
            ];
        }

        $result = json_encode($array);
        return <<<end
am5.ready(function() {

        var container2 = document.getElementById("{$container}");

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var rootQwerty = am5.Root.new(container2);

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        rootQwerty.setThemes([
            am5themes_Animated.new(rootQwerty)
        ]);

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chartQwerty = rootQwerty.container.children.push(am5xy.XYChart.new(rootQwerty, {
            panX: false,
            panY: false,
            wheelX: "none",
            wheelY: "none",
            layout: rootQwerty.verticalLayout,
            paddingLeft: 0,
            paddingRight: 0,
            paddingBottom: 0,
        }));

        // Data
        var dataQwerty = {$result};

        // Populate data
        for (var i = 0; i < (dataQwerty.length - 1); i++) {
            dataQwerty[i].valueNext = dataQwerty[i + 1].value;
        }

        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
        var xRendererQwerty = am5xy.AxisRendererX.new(rootQwerty, {
            cellStartLocation: 0.1,
            cellEndLocation: 0.9,
            minGridDistance: 30,
            minorGridEnabled: true
        });

        var xAxisQwerty = chartQwerty.xAxes.push(am5xy.CategoryAxis.new(rootQwerty, {
            categoryField: "year",
            renderer: xRendererQwerty,
            tooltip: am5.Tooltip.new(rootQwerty, {}),
        }));

        xAxisQwerty.get("renderer").labels.template.setAll({
            fill: "#fff", // Красный цвет
            fontSize: 12, // Размер шрифта
            rotation: -90, // Поворот текста на 45 градусов против часовой стрелки
            centerY: am5.p100, // Вертикальное выравнивание (привязка к нижней части текста)
            centerX: am5.p100,  // Горизонтальное выравнивание (привязка к правой части текста) 
            marginTop: 10 // Отступ сверху (10px)
        });

        xRendererQwerty.grid.template.setAll({
            location: 1
        })

        xAxisQwerty.data.setAll(dataQwerty);

        var maxValue = Math.max(...dataQwerty.map(item => item.value));
        var yAxisMax = Math.ceil(maxValue / 1000) * 1200; // Округление до ближайшей тысячи
        
        var yAxisQwerty = chartQwerty.yAxes.push(am5xy.ValueAxis.new(rootQwerty, {
            min: 0,
            max: yAxisMax,
            strictMinMax: true,
            renderer: am5xy.AxisRendererY.new(rootQwerty, {
                strokeOpacity: 0.1
            })
        }));

        yAxisQwerty.get("renderer").labels.template.setAll({
            fill: "#fff", // Синий цвет
            fontSize: 12 // Размер шрифта
        });
    
        // Add series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/

        // Column series
        var seriesQwerty = chartQwerty.series.push(am5xy.ColumnSeries.new(rootQwerty, {
            xAxis: xAxisQwerty,
            yAxis: yAxisQwerty,
            valueYField: "value",
            categoryXField: "year"
        }));

        seriesQwerty.columns.template.setAll({
            tooltipText: "{categoryX}: {valueY}",
            width: am5.percent(90),
            tooltipY: 0
        });

        seriesQwerty.data.setAll(dataQwerty);

        // Variance indicator series
        var seriesQwerty2 = chartQwerty.series.push(am5xy.ColumnSeries.new(rootQwerty, {
            xAxis: xAxisQwerty,
            yAxis: yAxisQwerty,
            valueYField: "valueNext",
            openValueYField: "value",
            categoryXField: "year",
            fill: am5.color(0x555555),
            stroke: am5.color(0x555555),
        }));

        seriesQwerty2.columns.template.setAll({
            width: 1
        });

        seriesQwerty2.data.setAll(dataQwerty);

        seriesQwerty2.bullets.push(function () {
            var label = am5.Label.new(rootQwerty, {
                text: "{valueY}",
                fontWeight: "500",
                fill: am5.color(0x00cc00),
                centerY: am5.p100,
                centerX: am5.p50,
                populateText: true,               
            });

            // Modify text of the bullet with percent
            label.adapters.add("text", function (text, target) {
                var percent = getVariancePercent(target.dataItem);
                return percent ? percent + "%" : text;
            });

            // Set dynamic color of the bullet
            label.adapters.add("centerY", function (center, target) {
                return getVariancePercent(target.dataItem) < 0 ? 0 : center;
            });

            // Set dynamic color of the bullet
            label.adapters.add("fill", function (fill, target) {
                return getVariancePercent(target.dataItem) < 0 ? am5.color(0xcc0000) : fill;
            });
            
            label.setAll({
                fontSize: 12, // Размер шрифта текста в пулях
                fontWeight: "500",
                fill: am5.color(0x00cc00),
                centerY: am5.p100,
                centerX: am5.p50,
                populateText: true
            });

            return am5.Bullet.new(rootQwerty, {
                locationY: 1,
                sprite: label
            });
        });

        seriesQwerty2.bullets.push(function () {
            var arrow = am5.Graphics.new(rootQwerty, {
                rotation: -90,
                centerX: am5.p50,
                centerY: am5.p50,
                dy: 3,
                fill: am5.color(0x555555),
                stroke: am5.color(0x555555),
                draw: function (display) {
                    display.moveTo(0, -3);
                    display.lineTo(8, 0);
                    display.lineTo(0, 3);
                    display.lineTo(0, -3);
                }
            });

            arrow.adapters.add("rotation", function (rotation, target) {
                return getVariancePercent(target.dataItem) < 0 ? 90 : rotation;
            });

            arrow.adapters.add("dy", function (dy, target) {
                return getVariancePercent(target.dataItem) < 0 ? -3 : dy;
            });

            return am5.Bullet.new(rootQwerty, {
                locationY: 1,
                sprite: arrow
            })
        })

        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        seriesQwerty.appear();
        seriesQwerty2.appear();
        chartQwerty.appear(1000, 100);

        function getVariancePercent(dataItem) {
            if (dataItem) {
                var value = dataItem.get("valueY");
                var openValue = dataItem.get("openValueY");
                var change = value - openValue;
                return Math.round(change / openValue * 100);
            }
            return 0;
        }

    }); // end am5.ready()
end;
    }

    public function TodayGes($id): int
    {
        $cacheKey = "today_ges_{$id}_" . date('Y-m-d H');
        $cache = Yii::$app->cache;

        if ($cache->exists($cacheKey)) {
            return $cache->get($cacheKey);
        }

        $hour = (int)date('H');
        $hour = $hour < 10 ? $hour % 10 : $hour;

        $result = (int)\common\models\Power::find()
            ->where(['id_organization' => $id])
            ->andWhere(['date' => date('Y-m-d')])
            ->andWhere(['>=', 'time', '1'])
            ->andWhere(['<=', 'time', $hour])
            ->sum('power') ?? 0;

        $cache->set($cacheKey, $result, 86400); // Кэшируем на 1 час

        return $result;
    }

    public function AllTodayGesPower($array)
    {
        $hour = (int)date('H');
        $hour = $hour < 10 ? $hour % 10 : $hour;

        $result = (int)\common\models\Power::find()
            ->where(['id_organization' => $array])
            ->andWhere(['date' => date('Y-m-d')])
            ->andWhere(['>=', 'time', '1'])
            ->andWhere(['<=', 'time', $hour])
            ->sum('power') ?? 0;

        return $result;
    }

    public function MonthGes($id): int
    {
        $cacheKey = "month_ges_{$id}_" . date('Y-m-d');
        $cache = Yii::$app->cache;

        if ($cache->exists($cacheKey)) {
            return $cache->get($cacheKey);
        }

        setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");
        $first = date('Y-m-01');
        $last = date('Y-m-t');
        $result = (int)\common\models\Power::find()
            ->where(['id_organization' => $id])
            ->andWhere(['>=', 'date', $first])
            ->andWhere(['<=', 'date', $last])
            ->sum('power') ?? 0;

        $cache->set($cacheKey, $result, 86400); // Кэшируем на 1 час

        return $result;


    }

    public function AllMonthGes($array): int
    {
        $first = date('Y-m-01');
        $last = date('Y-m-t');
        return (int)\common\models\Power::find()
            ->where(['id_organization' => $array])
            ->andWhere(['>=', 'date', $first])
            ->andWhere(['<=', 'date', $last])
            ->sum('power') ?? 0;
    }

    public function YearGes($id): int
    {
        $cacheKey = "year_ges_{$id}_" . date('Y-m-d');
        $cache = Yii::$app->cache;

        if ($cache->exists($cacheKey)) {
            return $cache->get($cacheKey);
        }

        $first = date('Y-01-01');
        $last = date('Y-m-t');
        $result = (int)\common\models\Power::find()->where(['id_organization' => $id])
            ->andWhere(['>=', 'date', $first])
            ->andWhere(['<=', 'date', $last])->sum('power') ?? 0;

        $cache->set($cacheKey, $result, 86400); // Кэшируем на 1 день

        return $result;

    }

    public function MonthPlan($id)
    {
        $cacheKey = "month_plan_{$id}_" . date('Y-m-d');
        $cache = Yii::$app->cache;

        if ($cache->exists($cacheKey)) {
            return $cache->get($cacheKey);
        }

        $year = Year::find()->where(['year' => date("Y")])->one();
        $monthMap = [
            1 => 'january', 2 => 'february', 3 => 'march', 4 => 'april',
            5 => 'may', 6 => 'june', 7 => 'july', 8 => 'august',
            9 => 'september', 10 => 'october', 11 => 'november', 12 => 'december'
        ];

        $month = $monthMap[date("m")] ?? null;

        $result = $month ? (float)Plan::find()
            ->where(['id_organization' => $id])
            ->andWhere(['id_year' => $year])
            ->sum($month) ?? 0 : 0;

        $cache->set($cacheKey, $result, 86400); // Кэшируем на 1 день

        return $result;
    }

    /*Жами ГЭСлар буйичи план*/
    public function AllMonthPlan($array)
    {
        // Определяем текущий год
        $year = Year::find()->where(['year' => date("Y")])->one();

        // Карта месяцев
        $monthMap = [
            1 => 'january', 2 => 'february', 3 => 'march', 4 => 'april',
            5 => 'may', 6 => 'june', 7 => 'july', 8 => 'august',
            9 => 'september', 10 => 'october', 11 => 'november', 12 => 'december'
        ];

        // Получаем название текущего месяца
        $month = $monthMap[date("n")] ?? null;

        if (!$month) {
            return 0; // Если месяц не определён, возвращаем 0
        }

        $date = date("Y-m-d");
        // Генерируем уникальный ключ для кэша
        $cacheKey = "AllMonthPlan_{".implode($array)."}_{$date}_{$month}";

        // Проверяем, есть ли данные в кэше
        $cache = \Yii::$app->cache;
        $cachedResult = $cache->get($cacheKey);

        if ($cachedResult !== false) {
            return (float)$cachedResult; // Возвращаем закэшированное значение
        }

        // Выполняем запрос к базе данных
        $result = (float)Plan::find()
            ->where(['id_organization' => $array])
            ->andWhere(['id_year' => $year->id]) // Используем id года
            ->sum($month); // Суммируем значения по столбцу месяца

        // Сохраняем результат в кэш на 1 час (3600 секунд)
        $cache->set($cacheKey, $result, 86400);

        return $result;
    }
    public function YearPlan($id)
    {
        $year = Year::find()->where(['year' => date("Y")])->one();
        return Plan::find()
            ->where(['id_organization' => $id])
            ->andWhere(['id_year' => $year['id']])
            ->select([
                'total' => new \yii\db\Expression('SUM(january + february + march + april + may + june + july + august + september + october + november + december)')
            ])
            ->scalar() ?? 0;
    }

    public function YesterdayGes($id) : int
    {
        setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");
        return \common\models\Power::find()->where(['id_organization' => $id])
            ->andWhere(['date' => date("Y-m-d", strtotime("yesterday"))])
            ->sum('power') ?? 0;
    }

    /*Жами ГЭСлар буйича кечаги ишлаб чиқариш*/
    public function AllYesterdayGes($array) : int
    {
        return \common\models\Power::find()->where(['id_organization' => $array])
            ->andWhere(['date' => date("Y-m-d", strtotime("yesterday"))])
            ->sum('power') ?? 0;
    }

    public function MonthExpected($id) : int
    {
        $days = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));
        $today = date("d");
        $day = $days - $today;
        return ($this->MonthGes($id) - $this->TodayGes($id)) + ($this->YesterdayGes($id) * $day) ?? 0;
    }

    /*Жами ГЭСлар буйича ой давомида ишлаб чиқаришни кўтилиши*/
    public function AllMonthExpected($array) : int
    {
        $date = date("Y-m-d");
        // Генерируем уникальный ключ для кэша
        $cacheKey = "AllMonthExpected{".implode($array)."}_{$date}";

        // Проверяем, есть ли данные в кэше
        $cache = \Yii::$app->cache;
        $cachedResult = $cache->get($cacheKey);

        if ($cachedResult !== false) {
            return (float)$cachedResult; // Возвращаем закэшированное значение
        }

        $days = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));
        $today = date("d");
        $day = $days - $today;
        $result = ($this->AllMonthGes($array) - $this->AllTodayGesPower($array)) + ($this->AllYesterdayGes($array) * $day) ?? 0;

        // Сохраняем результат в кэш на 1 час (3600 секунд)
        $cache->set($cacheKey, $result, 86400);

        return $result;

    }

    public function TodayHourGes($id)
    {
        setlocale(LC_ALL, "uz_UZ"); date_default_timezone_set("Asia/Tashkent");
        $hour = date('H') < 10 ? substr(date('H'), 1, 1) : date('H');
        for ($i = 1; $i <= $hour; $i++) {
            $result[] = \common\models\Power::find()->where(['id_organization' => $id])->andWhere(['date' => date('Y-m-d')])->andWhere(['time' => $i])->sum('power') ?? 0;
        }
        return json_encode($result);
    }

    /*Дашбоард резулт Chart*/
    public function YesterdayHourGes($id)
    {
        // Генерируем уникальный ключ для кэша
        $cacheKey = "YesterdayHourGes_{$id}";
        $cache = \Yii::$app->cache;

        // Проверяем, есть ли данные в кэше
        $cachedResult = $cache->get($cacheKey);
        if ($cachedResult !== false) {
            return json_encode($cachedResult); // Возвращаем закэшированные данные
        }

        // Получаем данные за вчерашний день одним запросом
        $yesterdayDate = date("Y-m-d", strtotime("yesterday"));
        $data = \common\models\Power::find()
            ->select(['time', 'SUM(power) as total_power'])
            ->where(['id_organization' => $id])
            ->andWhere(['date' => $yesterdayDate])
            ->groupBy('time')
            ->indexBy('time') // Индексируем результаты по времени
            ->asArray()
            ->all();

        // Создаём массив с суммами мощности для каждого часа
        $result = [];
        for ($i = 1; $i <= 24; $i++) {
            $result[] = $data[$i]['total_power'] ?? 0; // Если данных за час нет, используем 0
        }

        // Сохраняем результат в кэш на 1 час (3600 секунд)
        $cache->set($cacheKey, $result, 86400);

        // Возвращаем JSON-строку
        return json_encode($result);

//        for ($i = 1; $i <= 24; $i++) {
//            $result[] = \common\models\Power::find()->where(['id_organization' => $id])->andWhere(['date' => date("Y-m-d", strtotime("yesterday"))])->andWhere(['time' => $i])->sum('power') ?? 0;
//        }
//        return json_encode($result);
    }

    public function HeaderGes(): string
    {
        $date = date('Y-m-d');
        return <<<end
<div class="col-xl-12 col-xxl-12">
    <div class="card mb-2" style="backdrop-filter: blur(15px);">
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

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Частота</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="hertz">0 Гц</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">{$date}</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
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
end;
    }

    /*Жами ГЭСлар буйича агрегатлар сони*/
    public function AllGesAggregate($array): int
    {
        $date = date("Y-m-d");
        // Генерируем уникальный ключ для кэша
        $cacheKey = "AllGesAggregate{".implode($array)."}_{$date}";

        // Проверяем, есть ли данные в кэше
        $cache = \Yii::$app->cache;
        $cachedResult = $cache->get($cacheKey);

        if ($cachedResult !== false) {
            return (float)$cachedResult; // Возвращаем закэшированное значение
        }

        $result = (int)Organization::find()
            ->where(['id' => $array])
            ->sum('agregat') ?? 0;

        // Сохраняем результат в кэш на 1 час (3600 секунд)
        $cache->set($cacheKey, $result, 86400);

        return $result;

    }
    /*Каскадлар буйича кўриниш*/
    public function Cascade($id, $url, $number): string
    {
        $organization = Organization::findOne($id);
        $array = Organization::find()
            ->select('id') // Выбираем только столбец id
            ->where(['id_organization' => $id])
            ->column(); // Возвращает массив значений одного столбца

        $aggregate = $this->AllGesAggregate($array);//Агрегатлар сони
        $sum = number_format($this->AllTodayGesPower($array) / $this->COUNT, 2, ',', ' ');//Кунлик ишлаб чиқариш
        $allMonthPlan = number_format($this->AllMonthPlan($array) / $this->COUNT, 2, ',', ' ');//Ойлик режа
        $allMonthExpected = number_format($this->AllMonthExpected($array) / $this->COUNT, 2, ',', ' ');//Ойлик режага асосан кўтилиш

        $urlGes = Url::to([$url]);
        return <<<end
<div class="card h-100" style="backdrop-filter: blur(15px);">
    <div class="card-body">
        <div class="border-bottom border-translucent">
            <a href="{$urlGes}"><p class="fs-8 fw-semibold text-info ms-1 text ps-2">{$organization['name']}</p></a>
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
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">{$aggregate}/<span class="text-danger" id="true{$number}">0</span>/<span class="text-success" id="false{$number}">0</span>/<span class="text-warning" id="error{$number}">0</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="py-1">
                        <div class="d-flex align-items-center">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-info-dark" style="stroke-width:2;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Кунлик ишлаб чиқарилган</p>
                        </div>
                    </td>
                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                    <td class="py-1">
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports" id="days">{$sum} млн.кВт</p>
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
                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">{$allMonthPlan} / {$allMonthExpected} млн.кВт </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
end;
    }

    public function Republic($title): string
    {
        $ges = new Ges();
        $date = date('Y-m-d');
        $allDay = \common\models\Power::find()->where(['date' => $date])->sum('power') ?? 0;
        $allMonth = \common\models\Power::find()->andWhere(['>=', 'date', date('Y-m-01')])->andWhere(['<=', 'date', $date])->sum('power') ?? 0;
        $allYear = \common\models\Power::find()->andWhere(['>=', 'date', date('Y-01-01')])->andWhere(['<=', 'date', $date])->sum('power') ?? 0;

        $allProduction = number_format($allDay / $this->COUNT, 2, ',', ' ');
        $allReception = 0;//$allReceptionOhangaron + $allReceptionTupolang + $allReceptionAndijon + $allReceptionUrtachirchiq + $allReceptionChirchiq + $allReceptionFarxod + $allReceptionQamchiq + $allReceptionQuyibuzsuv + $allReceptionToshkent + $dayGes37HisorakReception + $allReceptionKfk + $allReceptionShaxrixon + $allReceptionSamarqand;
        $allOwnNeeds = 0;//$allOwnNeedsOhangaron  + $allOwnNeedsTupolang + $allOwnNeedsAndijon + $allOwnNeedsUrtachirchiq + $allOwnNeedsChirchiq + $allOwnNeedsFarxod + $allOwnNeedsQamchiq + $allOwnNeedsQuyibuzsuv + $allOwnNeedsToshkent + $dayGes37HisorakOwnNeeds + $allOwnNeedsKfk  + $allOwnNeedsShaxrixon + $allOwnNeedsSamarqand;
        $allRecoil = 0;//$allRecoilOhangaron + $allRecoilTupolang + $allRecoilAndijon + $allRecoilUrtachirchiq + $allRecoilChirchiq + $allRecoilFarxod + $allRecoilQamchiq + $allRecoilQuyibuzsuv + $allRecoilToshkent + $dayGes37HisorakRecoil + $allRecoilKfk + $allRecoilShaxrixon + $allRecoilSamarqand;
        $allMonths = number_format($allMonth / $this->COUNT, 2, ',', ' ');
        $allYear = number_format($allYear / $this->COUNT, 2, ',', ' ');

        $allAggregate = 5/*ohangaron*/ + 8/*tupolang*/ + 8/*andijon*/ + $ges->UrtaChirchiq() + $ges->Chirchiq() + 6/*farxod*/  + 10/*qodiriya*/ + 4/*Qamchiq*/ + 13/*quyibuzsuv*/ + 9/*toshkent*/ + 2/*Hisorak*/ + 4/*Kfk*/ + 7/*Shaxrixon*/ + $ges->Samarqand()/*Samarqand*/ + 6/*tuyamuyin*/;

        return <<<end
<div class="col-12 col-xl-12 col-xxl-12">
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
            <h3 class="mb-3 text-center">{$title}</h3>
            <table class="w-100 table-stats table-stats">
                <tbody>
                <tr>
                    <td class="py-2">
                        <div class="d-flex align-items-center">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-info-dark"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                            </div>
                            <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">Гидроагрегатларнинг жорий холати (жами/ишда/захирада/таъмирда)</p>
                        </div>
                    </td>
                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                    <td class="py-1">
                        <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">{$allAggregate} / <span class="text-danger" id="activeTrue">0</span> / <span class="text-success" id="activeFalse">0</span> / <span class="text-warning" id="activeError">0</span> та</p>
                    </td>
                </tr>
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
                        <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">{$allProduction} млн кВт </p>
                    </td>
                </tr>
                <tr>
                    <td class="py-2">
                        <div class="d-flex align-items-center">
                            <div class="d-flex bg-info-subtle rounded-circle flex-center me-1" style="width:24px; height:24px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-info-dark" style="width:16px; height:16px"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                            </div>
                            <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">Кун давомида тармоққа узатилган электр энергия (узатилган/транзит) </p>
                        </div>
                    </td>
                    <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                    <td class="py-2">
                        <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">{$allRecoil} млн кВт</p>
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
                        <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">{$allReception} кВт</p>
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
                        <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">{$allOwnNeeds} кВт</p>
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
                        <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">{$allMonths} млн кВт</p>
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
                        <p class="mb-0 fs-7 fw-semibold text-body-tertiary reports">{$allYear} млн кВт</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
end;
    }

    public function LineDashboard($id): string
    {
        $today = date('Y-m-d');
        $yesterday = date("Y-m-d", strtotime("yesterday"));
        return <<<end
const dataDay = {$this->YesterdayHourGes($id)};
const dataToday = {$this->TodayHourGes($id)};
const yesterday = '{$yesterday}';
const today = '{$today}';
const ctx = document.getElementById('myLineChart').getContext('2d');

const myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            '01:00', '02:00', '03:00', '04:00', '05:00', '06:00',
            '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00',
            '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00',
            '21:00', '22:00', '23:00', '00:00'
        ],
        datasets: [
            {
                label: today,
                data: dataToday,
                borderColor: '#ff6384',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderWidth: 2,
                tension: 0.4,
                datalabels: {
                    color: '#ff6384',
                    anchor: 'end',
                    align: 'top',
                }
            },
            {
                label: yesterday,
                data: dataDay,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Transparent fill
                borderWidth: 2,
                tension: 0.4,
                datalabels: {
                    color: 'rgba(75, 192, 192, 1)',
                    anchor: 'end',
                    align: 'top',
                }
            }
        ]
    },
    options: {
        responsive: true,
        layout: {
            padding: {
                top: 30 // Легенда билан график орасидаги вертикал фосилани кўпайтириш
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    color: '#fff', // Цвет текста легенды
                    font: {
                        size: 12, // Размер шрифта (опционально)
                        // weight: 'bold' // Жирность шрифта (опционально)
                    }
                }
            },
            datalabels: {
                display: true,
                color: '#fff',
                font: {
                    size: 12,
                    weight: 'bold'
                }
            }
        },
        scales: {
            x: {
                title: {
                    display: false,
                    text: yesterday,
                    color: '#fff' // Цвет заголовка оси X
                },
                ticks: {
                    color: '#fff' // Цвет меток оси X
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'кВт',
                    color: '#fff' // Цвет заголовка оси X
                },
                ticks: {
                    color: '#fff' // Цвет меток оси X
                }
            }
        }
    },
    plugins: [ChartDataLabels]
});
end;
    }
}

