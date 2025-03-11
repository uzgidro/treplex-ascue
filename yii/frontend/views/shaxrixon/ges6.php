<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Шахрихон ГЭСлар каскади(ГЭС-6А)';
$energy = new Energy();
$id = 64;
$dashboard = new Dashboard();
$power = new Day();

$power->getHour([$id]);
//$power->getDay([$id]);

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlEmployee = Url::to(['site/employee/', 'id' => $id]);

$urlTransformer1 = $energy->getTransformer($id, 117);
$urlTransformer2 = $energy->getTransformer($id, 118);
$urlTransformer3 = $energy->getTransformer($id, 119);
$urlSwitch1 = $energy->getSwitch($id, 305);
$urlSwitch2 = $energy->getSwitch($id, 306);
$urlSwitch3 = $energy->getSwitch($id, 307);
$urlSwitch4 = $energy->getSwitch($id, 308);
$urlSwitch5 = $energy->getSwitch($id, 309);
$urlSwitch6 = $energy->getSwitch($id, 310);
$urlSwitch7 = $energy->getSwitch($id, 311);
$urlSwitch8 = $energy->getSwitch($id, 312);
$urlSwitch9 = $energy->getSwitch($id, 313);
$urlSwitch10 = $energy->getSwitch($id, 314);
$urlSwitch11 = $energy->getSwitch($id, 315);
$urlSwitch12 = $energy->getSwitch($id, 316);
$urlSwitch13 = $energy->getSwitch($id, 317);
$urlSwitch14 = $energy->getSwitch($id, 318);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['shaxrixon/index']) ?>">"Шахрихон ГЭСлар каскади" филиали</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= Html::encode($this->title) ?></li>
    </ol>
</nav>
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

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports"><?= date('Y-m-d') ?></p>
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
<div class="card mb-2" style="backdrop-filter: blur(15px);">
    <div class="card-body">
        <div class="row align-items-center g-3">
            <div class="col-12 col-sm-auto flex-1">
                <svg
                    style="z-index: 1"
                    width="100%"
                    viewBox="0 0 1300 620"
                    height="100%"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    overflow="hidden"
                >
                    <defs>
                        <clipPath id="clip0">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOpJREFUSEvt12sSgyAMBODYKiL4uv9pK7oKIcFeIN8vS3amlpWZSoXuw32xXukxznpMuAHTbMCEs5zlEstZLrGc5RLLWS6xnPpHzI2YZt5hdpgCRAxLEbMwE1b+oQUX72aigMs363GjvXZjlXODNnxoW85fTHJDOH/FyL1/c9yRU5oodUgdJixpAjKJW7EoxaI7oh2r0oYEtGoZMX94DLhUBKfXojyp9dtCgiI4+UDcRXBic6L+XiFqKYrgeC1iS7Jyc3gRXFlLVQSXN2fCSsO9ObII7q7leTZbrtOiFsGl06IXwTlfnAgg+gEGAhJwZdPnjwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img1"
                        ></image>
                        <clipPath id="clip2">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip3">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img4"
                        ></image>
                        <clipPath id="clip5">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip6">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip8">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip9">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip13">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip14">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip15">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip16">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img25"
                        ></image>
                        <clipPath id="clip26">
                            <rect x="0" y="0" width="1173079" height="571500" />
                        </clipPath>
                    </defs>
                    <g>
                        <rect
                            x="0"
                            y="0"
                            width="1280"
                            height="720"
                            fill="#FFFFFF"
                            fill-opacity="0"
                        />
                        <path
                            d="M1208.2 415.557 56.5001 414.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 512.918 1.97092"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 876.418 228.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(809.944 174)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(817.111 174)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(820.611 174)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(827.778 174)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(831.278 174)"
                        >
                            5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(836.611 174)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(840.111 174)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(371.847 245)"
                        >
                            СШ 35 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(64.9671 431)"
                        >
                            СШ 6 кВ
                        </text>
                        <path
                            d="M0 0 0.600315 54.8092"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 651.5 412.309)"
                        />
                        <path
                            d="M651.756 299.75 651.5 279.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 34.3971"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 651.5 260.897)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(666.124 274)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(673.291 274)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(676.791 274)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(688.624 274)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(692.124 274)"
                        >
                            35
                        </text>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 649.5 231.5)"
                        />
                        <rect id="c1"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 642.5 279.5)"
                        />
                        <a href="<?= $urlEmployee ?>" style="">
                            <text
                                fill="#85a9ff"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(10 19)"
                            >
                                Сотрудники
                            </text>
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(570.215 22)"
                        >
                            Шахрихон
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(664.002 22)"
                        >
                            ГЭСлар
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(736.835 22)"
                        >
                            каскади
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(648.082 44)"
                        >
                            (ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(692.249 44)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(698.415 44)"
                        >
                            6А)
                        </text>
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 649.5 417.5)"
                        />
                        <rect id="c4"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 642.5 395.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(672.079 388)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(679.245 388)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(682.745 388)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(694.579 388)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(698.079 388)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(478.102 111)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(486.102 111)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(489.602 111)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(494.935 111)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(498.435 111)"
                        >
                            Асака
                        </text>
                        <path
                            d="M1.5-3.26546e-06 1.5001 48.226-1.49989 48.226-1.5 3.26546e-06ZM-4.5 9.79638e-06C-4.50001-2.48527-2.48529-4.49999-9.79638e-06-4.5 2.48527-4.50001 4.49999-2.48529 4.5-9.79638e-06 4.50001 2.48527 2.48529 4.49999 9.79638e-06 4.5-2.48527 4.50001-4.49999 2.48529-4.5 9.79638e-06Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 503.5 229.726)"
                        />
                        <path
                            d="M502.019 163.24 502.001 122.471 505.001 122.469 505.019 163.239ZM496.959 130.717 503.5 119.493 510.051 130.711C510.468 131.427 510.227 132.345 509.512 132.763 508.796 133.181 507.878 132.94 507.46 132.224L502.206 123.226 504.797 123.225 499.551 132.228C499.134 132.943 498.216 133.185 497.5 132.768 496.784 132.351 496.542 131.433 496.959 130.717Z"
                            fill="#663300"
                        />
                        <rect id="c49"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 494.5 181.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(523.43 176)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(530.597 176)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(534.097 176)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(541.264 176)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(544.764 176)"
                        >
                            6А
                        </text>
                        <path
                            d="M460.552 70.6961 544.151 70.6961 544.151 84.2872 460.552 84.2872Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M460.552 84.2872 544.151 84.2872 544.151 97.8784 460.552 97.8784Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M459.885 84.2872 544.818 84.2872"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M460.552 70.0294 460.552 98.5451"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M544.151 70.0294 544.151 98.5451"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M459.885 70.6961 544.818 70.6961"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M459.885 97.8784 544.818 97.8784"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g49Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(464.331 81)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g49Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(464.331 94)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 538 71)"
                        >
                            <g clip-path="url(#clip2)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip3)"
                            transform="matrix(0.000104987 0 0 0.000104987 538 85)"
                        >
                            <g clip-path="url(#clip5)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M368.713 211.956 448.995 211.956 448.995 224.756 368.713 224.756Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M368.713 211.289 368.713 225.422"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M448.995 211.289 448.995 225.422"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M368.046 211.956 449.661 211.956"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M368.046 224.756 449.661 224.756"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g61"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(372.493 222)"
                            >
                                U
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(760.57 110)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(768.57 110)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(772.07 110)"
                        >
                            ГЭС5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(799.07 110)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(802.57 110)"
                        >
                            ГЭС6
                        </text>
                        <path
                            d="M1.5-3.26546e-06 1.5001 48.226-1.49989 48.226-1.5 3.26546e-06ZM-4.5 9.79638e-06C-4.50001-2.48527-2.48529-4.49999-9.79638e-06-4.5 2.48527-4.50001 4.49999-2.48529 4.5-9.79638e-06 4.50001 2.48527 2.48529 4.49999 9.79638e-06 4.5-2.48527 4.50001-4.49999 2.48529-4.5 9.79638e-06Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 795.5 228.726)"
                        />
                        <path
                            d="M794.019 162.24 794.001 121.471 797.001 121.469 797.019 162.239ZM788.959 129.717 795.5 118.493 802.051 129.711C802.468 130.427 802.227 131.345 801.512 131.763 800.796 132.181 799.878 131.94 799.46 131.224L794.206 122.226 796.797 122.225 791.551 131.228C791.134 131.943 790.216 132.185 789.5 131.768 788.784 131.351 788.542 130.433 788.959 129.717Z"
                            fill="#663300"
                        />
                        <rect id="c72"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 786.5 180.5)"
                        />
                        <path
                            d="M752.771 69.2059 836.37 69.2059 836.37 82.7971 752.771 82.7971Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M752.771 82.7971 836.37 82.7971 836.37 96.3882 752.771 96.3882Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M752.104 82.7971 837.037 82.7971"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M752.771 68.5392 752.771 97.0549"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.37 68.5392 836.37 97.0549"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M752.104 69.2059 837.037 69.2059"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M752.104 96.3882 837.037 96.3882"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g72Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(756.55 79)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g72Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(756.55 93)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip6)"
                            transform="matrix(0.000104987 0 0 0.000104987 830 70)"
                        >
                            <g clip-path="url(#clip7)" transform="matrix(1 0 0 1.02857 -0.5 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip8)"
                            transform="matrix(0.000104987 0 0 0.000104987 830 83)"
                        >
                            <g clip-path="url(#clip9)" transform="matrix(1 0 0 1.11429 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path id="c3"
                            d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 635.5 357.5)"
                        />
                        <path id="c2"
                            d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 635.5 333.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(605.505 311)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(612.672 311)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(616.172 311)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(586.505 324)"
                        >
                            6/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(608.172 324)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(579.172 337)"
                        >
                            7500кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(565.839 350)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(583.005 350)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(586.505 350)"
                        >
                            7500/35
                        </text>
                        <path
                            d="M1.5-1.01425e-05 1.5001 15.5267-1.49989 15.5267-1.5 1.01425e-05ZM4.5001 15.5267C4.50012 18.012 2.48542 20.0267 0.000135414 20.0267-2.48515 20.0267-4.49988 18.012-4.4999 15.5267-4.49991 13.0415-2.48521 11.0267 7.45593e-05 11.0267 2.48536 11.0267 4.50009 13.0414 4.5001 15.5267Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 186.5 431.027)"
                        />
                        <path
                            d="M0 0 0.178058 20.1608"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 186.5 469.661)"
                        />
                        <rect id="c187"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 177.5 449.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(215.025 477)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(221.858 477)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(225.358 477)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(215.025 490)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(223.025 490)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(215.025 503)"
                        >
                            3,8 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(215.025 516)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(236.692 516)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(240.192 516)"
                        >
                            325/69/28
                        </text>
                        <path
                            d="M1.5-1.01425e-05 1.5001 15.5267-1.49989 15.5267-1.5 1.01425e-05ZM4.5001 15.5267C4.50012 18.012 2.48542 20.0267 0.000135414 20.0267-2.48515 20.0267-4.49988 18.012-4.4999 15.5267-4.49991 13.0415-2.48521 11.0267 7.45593e-05 11.0267 2.48536 11.0267 4.50009 13.0414 4.5001 15.5267Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 334.5 431.027)"
                        />
                        <path
                            d="M0 0 0.178058 20.1608"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 334.5 469.661)"
                        />
                        <rect id="c210"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 325.5 449.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(363.683 476)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(370.516 476)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(374.016 476)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(363.683 489)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(371.683 489)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(363.683 502)"
                        >
                            3,8 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(363.683 515)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(385.349 515)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(388.849 515)"
                        >
                            325/69/28
                        </text>
                        <path
                            d="M472.547 461.561 472 415.518 475 415.482 475.546 461.526ZM469 415.553C468.971 413.068 470.962 411.03 473.447 411 475.932 410.971 477.97 412.962 478 415.447 478.029 417.932 476.039 419.97 473.553 420 471.068 420.029 469.03 418.039 469 415.553Z"
                            fill="#006600"
                        />
                        <rect id="c300"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 465.5 450.5)"
                        />
                        <path id="c3002"
                            d="M0 17C-2.03701e-15 7.61116 7.16344-2.16433e-15 16-4.32865e-15 24.8366-8.65731e-15 32 7.61116 32 17 32 26.3888 24.8366 34 16 34 7.16344 34-1.01851e-14 26.3888 0 17Z"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 458.5 519.5)"
                        />
                        <path id="c3001"
                            d="M0 16.5C-2.03701e-15 7.3873 7.16344-2.10067e-15 16-4.20134e-15 24.8366-8.40268e-15 32 7.3873 32 16.5 32 25.6127 24.8366 33 16 33 7.16344 33-1.01851e-14 25.6127 0 16.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 458.5 494.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(498.464 478)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(521.63 478)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(525.13 478)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(498.464 491)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(522.797 491)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(498.464 504)"
                        >
                            180кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(498.464 517)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(515.63 517)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(519.13 517)"
                        >
                            180/6
                        </text>
                        <path
                            d="M1.5-5.74048e-06 1.50008 21.4333-1.49992 21.4333-1.5 5.74048e-06ZM8.20249e-05 21.4333 4.50007 18.4333 0.000104987 27.4333-4.49993 18.4333Z"
                            fill="#7F7F7F"
                            transform="matrix(-1 0 0 1 473.5 519.5)"
                        />
                        <path
                            d="M436.802 567.345 510.449 567.345 510.449 581.078 436.802 581.078Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M436.802 566.678 436.802 581.745"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M510.449 566.678 510.449 581.745"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M436.136 567.345 511.116 567.345"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M436.136 581.078 511.116 581.078"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g3"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(440.582 577)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M590.547 461.561 590 415.518 593 415.482 593.546 461.526ZM587 415.553C586.971 413.068 588.962 411.03 591.447 411 593.932 410.971 595.97 412.962 596 415.447 596.029 417.932 594.039 419.97 591.553 420 589.068 420.029 587.03 418.039 587 415.553Z"
                            fill="#006600"
                        />
                        <rect id="c26"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 583.5 451.5)"
                        />
                        <path id="c2602"
                            d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 575.5 518.5)"
                        />
                        <path id="c2601"
                            d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 575.5 494.5)"
                        />
                        <path
                            d="M594 518.5 594 539.844 591 539.844 591 518.5ZM592.5 539.844 597 536.844 592.5 545.844 588 536.844Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M554.628 566.965 628.274 566.965 628.274 580.698 554.628 580.698Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M554.628 566.299 554.628 581.365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M628.274 566.299 628.274 581.365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M553.961 566.965 628.941 566.965"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M553.961 580.698 628.941 580.698"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g26"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(558.407 577)"
                            >
                                Р
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(620.519 478)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(643.686 478)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(647.186 478)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(620.519 491)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(644.852 491)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(620.519 504)"
                        >
                            200кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(620.519 517)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(637.686 517)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(641.186 517)"
                        >
                            200/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(746.895 445)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(754.062 445)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(757.562 445)"
                        >
                            Ф.С
                        </text>
                        <path
                            d="M1.5-0.00302058 1.74786 123.085-1.25213 123.091-1.5 0.00302058ZM-4.49999 0.00906174C-4.505-2.47621-2.49434-4.49499-0.00906174-4.49999 2.47621-4.505 4.49499-2.49434 4.49999-0.00906174 4.505 2.47621 2.49434 4.49499 0.00906174 4.49999-2.47621 4.505-4.49499 2.49434-4.49999 0.00906174ZM0.247865 123.088 4.74182 120.079 0.259948 129.088-4.25817 120.097Z"
                            fill="#006600"
                            transform="matrix(-1 0 0 1 733.76 416.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(711.494 560)"
                        >
                            Ф.Лочин
                        </text>
                        <path
                            d="M692.374 566.601 775.974 566.601 775.974 580.192 692.374 580.192Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M692.374 565.934 692.374 580.859"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M775.974 565.934 775.974 580.859"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M691.707 566.601 776.64 566.601"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M691.707 580.192 776.64 580.192"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g118"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(696.154 577)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 768 568)"
                        >
                            <g clip-path="url(#clip11)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(837.781 444)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(844.948 444)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(848.448 444)"
                        >
                            Ф.Ч
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(799.464 560)"
                        >
                            Ф.Чўнтак
                        </text>
                        <path
                            d="M782.51 566.52 866.11 566.52 866.11 580.111 782.51 580.111Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M782.51 565.853 782.51 580.778"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M866.11 565.853 866.11 580.778"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M781.844 566.52 866.776 566.52"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M781.844 580.111 866.776 580.111"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g141"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(786.29 577)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip12)"
                            transform="matrix(0.000104987 0 0 0.000104987 859 567)"
                        >
                            <g clip-path="url(#clip13)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(927.528 444)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(934.695 444)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(938.195 444)"
                        >
                            Ф.М
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(886.878 560)"
                        >
                            Ф.Миллий
                        </text>
                        <path
                            d="M872.174 566.402 955.774 566.402 955.774 579.993 872.174 579.993Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M872.174 565.735 872.174 580.66"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M955.774 565.735 955.774 580.66"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M871.507 566.402 956.44 566.402"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M871.507 579.993 956.44 579.993"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g272"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(875.954 576)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip14)"
                            transform="matrix(0.000104987 0 0 0.000104987 948 567)"
                        >
                            <g clip-path="url(#clip15)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1013.34 444)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1020.51 444)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1024.01 444)"
                        >
                            Ф.А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(970.271 559)"
                        >
                            Ф.Автосарой
                        </text>
                        <path
                            d="M961.067 565.937 1044.67 565.937 1044.67 579.529 961.067 579.529Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M961.067 565.271 961.067 580.195"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1044.67 565.271 1044.67 580.195"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M960.401 565.937 1045.33 565.937"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M960.401 579.529 1045.33 579.529"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g164"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(964.847 576)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip16)"
                            transform="matrix(0.000104987 0 0 0.000104987 1037 567)"
                        >
                            <g clip-path="url(#clip17)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1105.48 444)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1112.65 444)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1116.15 444)"
                        >
                            Ф.Ё
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1065.83 559)"
                        >
                            Ф.Ёғзавод
                        </text>
                        <path
                            d="M1049.96 565.843 1133.56 565.843 1133.56 579.435 1049.96 579.435Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1049.96 565.177 1049.96 580.101"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1133.56 565.177 1133.56 580.101"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1049.29 565.843 1134.23 565.843"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1049.29 579.435 1134.23 579.435"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g95"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1053.74 576)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip18)"
                            transform="matrix(0.000104987 0 0 0.000104987 1126 566)"
                        >
                            <g clip-path="url(#clip19)" transform="matrix(1 0 0 1.11429 0 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1191.67 444)"
                        >
                            Ф. Қ/и
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1140.09 559)"
                        >
                            Ф. Қайта ишлаш
                        </text>
                        <path
                            d="M1138.81 565.751 1222.41 565.751 1222.41 579.342 1138.81 579.342Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1138.81 565.084 1138.81 580.009"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1222.41 565.084 1222.41 580.009"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1138.15 565.751 1223.08 565.751"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1138.15 579.342 1223.08 579.342"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g243"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1142.59 576)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip20)"
                            transform="matrix(0.000104987 0 0 0.000104987 1214 566)"
                        >
                            <g clip-path="url(#clip21)" transform="matrix(1 0 0 1.11429 0 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <rect id="c118"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 724.5 450.5)"
                        />
                        <path
                            d="M1.5-0.00302058 1.74786 123.085-1.25213 123.091-1.5 0.00302058ZM-4.49999 0.00906174C-4.505-2.47621-2.49434-4.49499-0.00906174-4.49999 2.47621-4.505 4.49499-2.49434 4.49999-0.00906174 4.505 2.47621 2.49434 4.49499 0.00906174 4.49999-2.47621 4.505-4.49499 2.49434-4.49999 0.00906174ZM0.247865 123.088 4.74182 120.079 0.259948 129.088-4.25817 120.097Z"
                            fill="#006600"
                            transform="matrix(-1 0 0 1 824.76 415.5)"
                        />
                        <rect id="c141"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 815.5 449.5)"
                        />
                        <path
                            d="M1.5-0.00302058 1.74786 123.085-1.25213 123.091-1.5 0.00302058ZM-4.49999 0.00906174C-4.505-2.47621-2.49434-4.49499-0.00906174-4.49999 2.47621-4.505 4.49499-2.49434 4.49999-0.00906174 4.505 2.47621 2.49434 4.49499 0.00906174 4.49999-2.47621 4.505-4.49499 2.49434-4.49999 0.00906174ZM0.247865 123.088 4.74182 120.079 0.259948 129.088-4.25817 120.097Z"
                            fill="#006600"
                            transform="matrix(-1 0 0 1 914.76 416.5)"
                        />
                        <rect id="c272"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 904.5 450.5)"
                        />
                        <path
                            d="M1.5-0.00302058 1.74786 123.085-1.25213 123.091-1.5 0.00302058ZM-4.49999 0.00906174C-4.505-2.47621-2.49434-4.49499-0.00906174-4.49999 2.47621-4.505 4.49499-2.49434 4.49999-0.00906174 4.505 2.47621 2.49434 4.49499 0.00906174 4.49999-2.47621 4.505-4.49499 2.49434-4.49999 0.00906174ZM0.247865 123.088 4.74182 120.079 0.259948 129.088-4.25817 120.097Z"
                            fill="#006600"
                            transform="matrix(-1 0 0 1 999.76 415.5)"
                        />
                        <rect id="c164"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 990.5 450.5)"
                        />
                        <path
                            d="M1.5-0.00302058 1.74786 123.085-1.25213 123.091-1.5 0.00302058ZM-4.49999 0.00906174C-4.505-2.47621-2.49434-4.49499-0.00906174-4.49999 2.47621-4.505 4.49499-2.49434 4.49999-0.00906174 4.505 2.47621 2.49434 4.49499 0.00906174 4.49999-2.47621 4.505-4.49499 2.49434-4.49999 0.00906174ZM0.247865 123.088 4.74182 120.079 0.259948 129.088-4.25817 120.097Z"
                            fill="#006600"
                            transform="matrix(-1 0 0 1 1092.76 416.5)"
                        />
                        <rect id="c95"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1083.5 450.5)"
                        />
                        <path
                            d="M1.5-0.00302058 1.74786 123.085-1.25213 123.091-1.5 0.00302058ZM-4.49999 0.00906174C-4.505-2.47621-2.49434-4.49499-0.00906174-4.49999 2.47621-4.505 4.49499-2.49434 4.49999-0.00906174 4.505 2.47621 2.49434 4.49499 0.00906174 4.49999-2.47621 4.505-4.49499 2.49434-4.49999 0.00906174ZM0.247865 123.088 4.74182 120.079 0.259948 129.088-4.25817 120.097Z"
                            fill="#006600"
                            transform="matrix(-1 0 0 1 1178.76 416.5)"
                        />
                        <rect id="c243"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1169.5 450.5)"
                        />
                        <path
                            d="M56.4301 397.549 136.712 397.549 136.712 410.349 56.4301 410.349Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M56.4301 396.883 56.4301 411.016"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M136.712 396.883 136.712 411.016"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M55.7635 397.549 137.378 397.549"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M55.7635 410.349 137.378 410.349"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g38"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(60.2097 408)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M138.3 525.907 231.408 525.907 231.408 538.707 138.3 538.707Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M138.3 538.707 231.408 538.707 231.408 551.507 138.3 551.507Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M138.3 551.507 231.408 551.507 231.408 564.307 138.3 564.307Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M138.3 564.307 231.408 564.307 231.408 577.107 138.3 577.107Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M138.3 577.107 231.408 577.107 231.408 589.907 138.3 589.907Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M138.3 589.907 231.408 589.907 231.408 602.707 138.3 602.707Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.633 538.707 232.075 538.707"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.633 551.507 232.075 551.507"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.633 564.307 232.075 564.307"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.633 577.107 232.075 577.107"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.633 589.907 232.075 589.907"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M138.3 525.24 138.3 603.374"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M231.408 525.24 231.408 603.374"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.633 525.907 232.075 525.907"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.633 602.707 232.075 602.707"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g187"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(142.079 536)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g188"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(142.079 549)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a187"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(142.079 562)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k187"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(142.079 574)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n187"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(142.079 587)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w187" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(142.079 600)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c1871"
                            d="M162.5 491C162.5 477.469 173.469 466.5 187 466.5 200.531 466.5 211.5 477.469 211.5 491 211.5 504.531 200.531 515.5 187 515.5 173.469 515.5 162.5 504.531 162.5 491Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g>
                            <g>
                                <g>
                                    <path
                                        d="M185.689 484.933 186.622 484.933 187.944 485.167 189.033 485.633 189.889 486.178 190.9 487.189 191.522 488.122 191.989 489.367 192.144 490.067 192.144 491.933 191.833 493.1 191.211 494.344 190.589 495.122 190.044 495.667 188.956 496.367 187.711 496.833 186.933 496.989 185.378 496.989 184.133 496.678 183.278 496.289 182.422 495.744 181.567 494.967 181.022 494.189 180.478 493.1 180.167 491.856 180.089 490.922 180.244 489.678 180.556 488.667 181.178 487.5 182.033 486.567 182.656 486.022 183.978 485.322 185.144 485.011Z"
                                    />
                                    <path
                                        d="M186.156 471.089 187.011 471.089 188.489 471.322 189.967 471.789 191.211 472.411 192.144 473.033 192.922 473.733 193.856 474.667 194.711 475.911 195.333 477.156 195.8 478.556 196.033 479.722 196.111 480.344 196.111 481.822 195.878 483.3 195.489 484.622 194.867 485.944 194.089 487.033 193.933 487.033 193.311 485.944 192.378 484.856 191.522 484.078 190.433 483.378 189.267 482.833 187.944 482.444 186.156 482.211Z"
                                    />
                                    <path
                                        d="M173.4 486.878 173.789 486.956 175.967 488.2 177.522 489.133 177.6 489.289 177.444 490.922 177.6 492.556 177.989 494.033 178.533 495.2 178.533 495.433 176.356 496.678 174.489 497.767 170.444 500.1 169.122 500.878 168.889 500.878 168.189 499.4 167.8 498.078 167.644 497.144 167.567 495.822 167.722 494.344 167.956 493.256 168.5 491.778 169.044 490.767 169.744 489.756 170.678 488.744 171.533 487.967 172.933 487.111Z"
                                    />
                                    <path
                                        d="M193.7 495.433 194.089 495.511 195.956 496.6 202.022 500.1 203.344 500.878 203.189 501.267 202.644 502.044 201.944 502.9 201.4 503.444 200.233 504.3 198.989 505 197.511 505.544 196.344 505.778 195.878 505.856 193.544 505.856 192.378 505.622 191.133 505.233 189.811 504.611 188.878 503.989 188.878 499.322 189.578 499.011 190.9 498.311 191.833 497.611 192.922 496.522Z"
                                    />
                                    <path
                                        d="M176.667 476.067 178.378 476.067 179.856 476.3 181.489 476.844 182.811 477.544 183.433 477.933 183.433 482.678 182.033 483.3 180.944 484 180.089 484.7 179.544 485.244 178.611 486.567 178.144 486.411 176.822 485.633 170.756 482.133 169.044 481.122 168.967 480.967 169.511 480.111 170.367 479.1 170.989 478.478 172.156 477.622 173.244 477 174.722 476.456 175.578 476.222Z"
                                    />
                                    <path
                                        d="M180.167 497.533 180.478 497.611 181.644 498.467 182.967 499.089 184.211 499.478 185.144 499.633 186.078 499.711 186.156 499.789 186.156 510.833 184.989 510.833 183.433 510.522 182.111 510.056 180.711 509.278 179.7 508.5 178.922 507.8 178.144 506.867 177.367 505.622 176.744 504.222 176.356 502.744 176.2 501.344 176.2 500.489 176.278 499.789 178.222 498.7 179.544 497.922Z"
                                    />
                                    <path
                                        d="M203.267 481.044 203.422 481.044 203.967 482.133 204.433 483.533 204.667 484.778 204.744 486.333 204.589 487.733 204.278 489.056 203.656 490.533 203.111 491.467 202.489 492.322 201.633 493.256 200.467 494.189 199.456 494.811 198.756 495.122 196.811 494.033 194.944 492.944 194.711 492.789 194.867 491.389 194.867 490.222 195.567 489.522 196.578 488.2 197.278 487.033 197.978 485.556 198.522 483.844 199.222 483.378 201.167 482.289 203.033 481.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M285.833 526.282 378.941 526.282 378.941 539.082 285.833 539.082Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.833 539.082 378.941 539.082 378.941 551.882 285.833 551.882Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.833 551.882 378.941 551.882 378.941 564.682 285.833 564.682Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.833 564.682 378.941 564.682 378.941 577.482 285.833 577.482Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.833 577.482 378.941 577.482 378.941 590.282 285.833 590.282Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.833 590.282 378.941 590.282 378.941 603.082 285.833 603.082Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.166 539.082 379.608 539.082"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.166 551.882 379.608 551.882"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.166 564.682 379.608 564.682"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.166 577.482 379.608 577.482"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.166 590.282 379.608 590.282"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.833 525.615 285.833 603.749"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M378.941 525.615 378.941 603.749"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.166 526.282 379.608 526.282"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.166 603.082 379.608 603.082"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g210"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(289.612 536)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g211"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(289.612 549)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a210"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(289.612 562)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k210"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(289.612 575)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n210"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(289.612 587)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w210" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(289.612 600)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c2101"
                            d="M310.5 491C310.5 477.469 321.469 466.5 335 466.5 348.531 466.5 359.5 477.469 359.5 491 359.5 504.531 348.531 515.5 335 515.5 321.469 515.5 310.5 504.531 310.5 491Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g>
                            <g>
                                <g>
                                    <path
                                        d="M333.689 484.933 334.622 484.933 335.944 485.167 337.033 485.633 337.889 486.178 338.9 487.189 339.522 488.122 339.989 489.367 340.144 490.067 340.144 491.933 339.833 493.1 339.211 494.344 338.589 495.122 338.044 495.667 336.956 496.367 335.711 496.833 334.933 496.989 333.378 496.989 332.133 496.678 331.278 496.289 330.422 495.744 329.567 494.967 329.022 494.189 328.478 493.1 328.167 491.856 328.089 490.922 328.244 489.678 328.556 488.667 329.178 487.5 330.033 486.567 330.656 486.022 331.978 485.322 333.144 485.011Z"
                                    />
                                    <path
                                        d="M334.156 471.089 335.011 471.089 336.489 471.322 337.967 471.789 339.211 472.411 340.144 473.033 340.922 473.733 341.856 474.667 342.711 475.911 343.333 477.156 343.8 478.556 344.033 479.722 344.111 480.344 344.111 481.822 343.878 483.3 343.489 484.622 342.867 485.944 342.089 487.033 341.933 487.033 341.311 485.944 340.378 484.856 339.522 484.078 338.433 483.378 337.267 482.833 335.944 482.444 334.156 482.211Z"
                                    />
                                    <path
                                        d="M321.4 486.878 321.789 486.956 323.967 488.2 325.522 489.133 325.6 489.289 325.444 490.922 325.6 492.556 325.989 494.033 326.533 495.2 326.533 495.433 324.356 496.678 322.489 497.767 318.444 500.1 317.122 500.878 316.889 500.878 316.189 499.4 315.8 498.078 315.644 497.144 315.567 495.822 315.722 494.344 315.956 493.256 316.5 491.778 317.044 490.767 317.744 489.756 318.678 488.744 319.533 487.967 320.933 487.111Z"
                                    />
                                    <path
                                        d="M341.7 495.433 342.089 495.511 343.956 496.6 350.022 500.1 351.344 500.878 351.189 501.267 350.644 502.044 349.944 502.9 349.4 503.444 348.233 504.3 346.989 505 345.511 505.544 344.344 505.778 343.878 505.856 341.544 505.856 340.378 505.622 339.133 505.233 337.811 504.611 336.878 503.989 336.878 499.322 337.578 499.011 338.9 498.311 339.833 497.611 340.922 496.522Z"
                                    />
                                    <path
                                        d="M324.667 476.067 326.378 476.067 327.856 476.3 329.489 476.844 330.811 477.544 331.433 477.933 331.433 482.678 330.033 483.3 328.944 484 328.089 484.7 327.544 485.244 326.611 486.567 326.144 486.411 324.822 485.633 318.756 482.133 317.044 481.122 316.967 480.967 317.511 480.111 318.367 479.1 318.989 478.478 320.156 477.622 321.244 477 322.722 476.456 323.578 476.222Z"
                                    />
                                    <path
                                        d="M328.167 497.533 328.478 497.611 329.644 498.467 330.967 499.089 332.211 499.478 333.144 499.633 334.078 499.711 334.156 499.789 334.156 510.833 332.989 510.833 331.433 510.522 330.111 510.056 328.711 509.278 327.7 508.5 326.922 507.8 326.144 506.867 325.367 505.622 324.744 504.222 324.356 502.744 324.2 501.344 324.2 500.489 324.278 499.789 326.222 498.7 327.544 497.922Z"
                                    />
                                    <path
                                        d="M351.267 481.044 351.422 481.044 351.967 482.133 352.433 483.533 352.667 484.778 352.744 486.333 352.589 487.733 352.278 489.056 351.656 490.533 351.111 491.467 350.489 492.322 349.633 493.256 348.467 494.189 347.456 494.811 346.756 495.122 344.811 494.033 342.944 492.944 342.711 492.789 342.867 491.389 342.867 490.222 343.567 489.522 344.578 488.2 345.278 487.033 345.978 485.556 346.522 483.844 347.222 483.378 349.167 482.289 351.033 481.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M9.50005 569C9.50005 563.753 13.7533 559.5 19.0001 559.5 24.2468 559.5 28.5001 563.753 28.5001 569 28.5001 574.247 24.2468 578.5 19.0001 578.5 13.7533 578.5 9.50005 574.247 9.50005 569Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M9.50005 590C9.50005 584.753 13.7533 580.5 19.0001 580.5 24.2468 580.5 28.5001 584.753 28.5001 590 28.5001 595.247 24.2468 599.5 19.0001 599.5 13.7533 599.5 9.50005 595.247 9.50005 590Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#92D050"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(34.4072 571)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(34.3245 593)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M9 546.5C9 541.253 13.2533 537 18.5 537 23.7467 537 28 541.253 28 546.5 28 551.747 23.7467 556 18.5 556 13.2533 556 9 551.747 9 546.5Z"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-miterlimit="8"
                            fill="#FFFF00"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(34.3245 549)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(34.5894 526)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(34.3246 502)"
                        >
                            прием
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 14 491)">
                            <g clip-path="url(#clip22)" transform="scale(1.05 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 14 513)">
                            <g clip-path="url(#clip23)" transform="scale(1.05 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip24)"
                            transform="matrix(0.000104987 0 0 0.000104987 1011 52)"
                        >
                            <g clip-path="url(#clip26)" transform="matrix(1.01496 0 0 1 -1 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1033.17 47.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1132.5 101.171)"
                        />
                        <path
                            d="M1129.55 114.031 1121.86 105.654 1122.35 105.203 1130.04 113.58ZM1122.11 105.429 1121.95 109.197 1118.5 101.5 1125.87 105.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1138.95 113.889 1129.5 113.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1037.09 33.5641 1131.45 33.5641 1131.45 46.3641 1037.09 46.3641Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1037.09 32.8974 1037.09 47.0308"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1131.45 32.8974 1131.45 47.0308"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1036.42 33.5641 1132.12 33.5641"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1036.42 46.3641 1132.12 46.3641"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text
                                font-family="Arial,Arial_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(1040.86 44)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1051.36 44)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1032.5 47.5001 1051.69 47.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1139.58 100.648 1227.24 100.648 1227.24 113.448 1139.58 113.448Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1139.58 99.9811 1139.58 114.114"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1227.24 99.9811 1227.24 114.114"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1138.91 100.648 1227.9 100.648"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1138.91 113.448 1227.9 113.448"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text
                                font-family="Arial,Arial_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(1143.36 111)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1153.86 111)"
                        >
                            НБ
                        </text>
                        <path
                            d="M0 0 108.321 0.0551181"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1029.5 55.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1138.99 73.5001)"
                        />
                        <path
                            d="M1139.5 73.5001 1158.69 73.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1143.78 60.4643 1216.97 60.4643 1216.97 73.2643 1143.78 73.2643Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1143.78 59.7976 1143.78 73.9309"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1216.97 59.7976 1216.97 73.9309"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1143.11 60.4643 1217.64 60.4643"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1143.11 73.2643 1217.64 73.2643"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="water3"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1147.55 70)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1115.5 101.5 1138.21 101.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                    </g>
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="card" style="backdrop-filter: blur(5px);">
    <div class="card-body">
        <div class="row g-1 g-sm-3 lh-1">
            <canvas id="myLineChart" width="1500" height="200"></canvas>
        </div>
    </div>
</div>

<div class="card mt-2" style="backdrop-filter: blur(5px);">
    <div class="card-body">
        <div class="row g-1 g-sm-3 lh-1">
            <div id="chartdiv2" style="width: 100%; height: 300px;"></div>
        </div>
    </div>
</div>

<script>
    <?= $dashboard->LineDashboard($id) ?>

    <?= $dashboard->GesDashboard([$id], "chartdiv2")?>

    function formatNumber(number, decimals, decimalSeparator, thousandSeparator) {
        // Ensure number is converted to a float and rounded to specified decimals
        number = parseFloat(number).toFixed(decimals);

        // Split the number into integer and fractional parts
        let parts = number.split('.');

        // Add thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {

        fetch('/shaxrixon/server6')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text(); // Get response as text
            })
            .then(text => {
                // console.log('Response text:', text);
                const data = JSON.parse(text); // Parse the JSON string
                console.log('Parsed data:', data);

                let c1 = 0; let c2 = 0;
                data.forEach(item => {
                    if (item.id === 49) {
                        const plus = document.getElementById("g49Plus");
                        const minus = document.getElementById("g49Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(49);
                            c1 = 1;
                        } else {
                            falseAnimation(49);
                        }
                    } else if (item.id === 72) {
                        const plus = document.getElementById("g72Plus");
                        const minus = document.getElementById("g72Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(72);
                            c2 = 1;
                        } else {
                            falseAnimation(72);
                        }
                    } else if(item.id === 61) {
                        const value = document.getElementById("g61");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВ";
                    } else if(item.id === 38) {
                        const value = document.getElementById("g38");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВ";
                    } else if(item.id === 300) {
                        const value = document.getElementById("g3");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(300);
                            trueAnimation(3001);
                            trueAnimation(3002);
                        } else {
                            falseAnimation(300);
                            falseAnimation(3001);
                            falseAnimation(3002);
                        }
                    } else if(item.id === 26) {
                        const value = document.getElementById("g26");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(26);
                            trueAnimation(2601);
                            trueAnimation(2602);
                        } else {
                            falseAnimation(26);
                            falseAnimation(2601);
                            falseAnimation(2602);
                        }
                    } else if(item.id === 118) {
                        const value = document.getElementById("g118");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(118);
                        } else {
                            falseAnimation(118);
                        }
                    } else if(item.id === 141) {
                        const value = document.getElementById("g141");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(141);
                        } else {
                            falseAnimation(141);
                        }
                    } else if(item.id === 272) {
                        const value = document.getElementById("g272");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(272);
                        } else {
                            falseAnimation(272);
                        }
                    } else if(item.id === 164) {
                        const value = document.getElementById("g164");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(164);
                        } else {
                            falseAnimation(164);
                        }
                    } else if(item.id === 95) {
                        const value = document.getElementById("g95");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(95);
                        } else {
                            falseAnimation(95);
                        }
                    } else if(item.id === 243) {
                        const value = document.getElementById("g243");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(243);
                        } else {
                            falseAnimation(243);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 187) {
                        const value = document.getElementById("g187");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a187");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 3.8 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(187);
                            trueAnimation(1871);
                        } else {
                            falseAnimation(187);
                            falseAnimation(1871);
                        }
                    } else if(item.id === 188) {
                        const value = document.getElementById("g188");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 189) {
                        const value = document.getElementById("k187");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 190) {
                        const value = document.getElementById("n187");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 191) {
                        const value = document.getElementById("w187");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 210) {
                        const value = document.getElementById("g210");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a210");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 3.8 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(210);
                            trueAnimation(2101);
                        } else {
                            falseAnimation(210);
                            falseAnimation(2101);
                        }
                    } else if(item.id === 211) {
                        const value = document.getElementById("g211");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 212) {
                        const value = document.getElementById("k210");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 213) {
                        const value = document.getElementById("n210");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 214) {
                        const value = document.getElementById("w210");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }

                    else if(item.id === 1) {
                        const value = document.getElementById("active");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                    } else if(item.id === 2) {
                        const value = document.getElementById("reactive");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 3) {
                        const value = document.getElementById("activeOut");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 4) {
                        const value = document.getElementById("activeIn");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                    } else if(item.id === 5) {
                        const value = document.getElementById("ownNeeds");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " KВт";
                    } else if(item.id === 6) {
                        const value = document.getElementById("water");
                        value.textContent = "∑ " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    } else if(item.id === 7) {
                        const value = document.getElementById("hertz");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " Гц";
                    } else if(item.id === 8) {
                        const value = document.getElementById("water1");
                        value.textContent = "ВБ=" + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " м";
                    } else if(item.id === 9) {
                        const value = document.getElementById("water2");
                        value.textContent = "НБ=" + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " м";
                    } else if(item.id === 10) {
                        const value = document.getElementById("water3");
                        value.textContent = "Н=" + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " м";
                    }
                })

                if (c1 === 1 || c2 === 1) {
                    trueAnimation(1);
                    trueAnimation(2);
                    trueAnimation(3);
                    trueAnimation(4);
                } else {
                    falseAnimation(1);
                    falseAnimation(2);
                    falseAnimation(3);
                    falseAnimation(4);
                }
            })
            .catch(error => console.error('Error:', error));
    }

    document.addEventListener('DOMContentLoaded', function() {
        getServer();
    });

    var intervalTime = 180000; // Set the interval time in milliseconds (e.g., 1000ms = 1 second)

    var timer = setInterval(
        getServer, intervalTime
    );

    let realTime = setInterval(function() {
        const now = new Date();
        document.getElementById('clock').textContent = now.toLocaleTimeString();  // Display the time in an element with id "clock"
    }, 1000);

    function falseAnimation(id) {
        let circle = document.getElementById("c" + id);
        let colors = ['#92D050', 'white'];
        let index = 0;
        setInterval(() => {
            circle.setAttribute('fill', colors[index]);
            index = (index + 1) % colors.length; // циклично меняем цвет
        }, 1500); // изменение цвета каждые 1000 мс (1 секунда)
    }

    function trueAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "red";
    }
</script>