<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Day;
use frontend\controllers\Dashboard;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Шахрихон ГЭСлар каскади (ГЭС-5А)';
$energy = new Energy();
$id = 63;
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
$urlSwitch15 = $energy->getSwitch($id, 319);
$urlSwitch16 = $energy->getSwitch($id, 320);
$urlSwitch17 = $energy->getSwitch($id, 321);
$urlSwitch18 = $energy->getSwitch($id, 322);
$urlSwitch19 = $energy->getSwitch($id, 323);

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
                        viewBox="0 0 1300 660"
                        height="100%"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        overflow="hidden"
                >
                    <defs>
                        <clipPath id="clip0">
                            <path
                                    d="M0 0 1280 0 1280 720 0 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip1">
                            <path
                                    d="M142 55 227 55 227 146 142 146Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip2">
                            <path
                                    d="M142 69 227 69 227 160 142 160Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="12"
                                height="27"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAbCAMAAAB/eJ72AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAGUExURQAAAP8AABv/jSIAAAABdFJOUwBA5thmAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAAKklEQVQoU2MAAkYwALFGDgfCggBkHrIciI3KQTIABJDZIB6UAQJgDgMDAHRkAKfyNcAxAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img3"
                        ></image>
                        <clipPath id="clip4">
                            <path
                                    d="M0 0 5 0 5 11.25 0 11.25Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="12"
                                height="28"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAcCAMAAABifa5OAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAGUExURQAAACPbFZB9uUkAAAABdFJOUwBA5thmAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAAMElEQVQoU+WKwQ0AQAjCYP+l5RBz7mA/tAkwZK/ZQRG1T7Wn4o6o2K7Kmn98diSAAoCHALPqGk/7AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img5"
                        ></image>
                        <clipPath id="clip6">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip7">
                            <path
                                    d="M251 55 335 55 335 145 251 145Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip8">
                            <path
                                    d="M251 68 335 68 335 159 251 159Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip9">
                            <path
                                    d="M0 0 5 0 5 11.25 0 11.25Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip10">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip11">
                            <path
                                    d="M365 54 449 54 449 145 365 145Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip12">
                            <path
                                    d="M365 68 449 68 449 158 365 158Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip13">
                            <path
                                    d="M0 0 5 0 5 11.25 0 11.25Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip14">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip15">
                            <path
                                    d="M475 54 560 54 560 144 475 144Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip16">
                            <path
                                    d="M475 67 560 67 560 158 475 158Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip17">
                            <path
                                    d="M0 0 5 0 5 11.25 0 11.25Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip18">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip19">
                            <path
                                    d="M719 54 804 54 804 144 719 144Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip20">
                            <path
                                    d="M719 67 804 67 804 158 719 158Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip21">
                            <path
                                    d="M0 0 5.33333 0 5.33333 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip22">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip23">
                            <path
                                    d="M825 54 910 54 910 144 825 144Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip24">
                            <path
                                    d="M825 67 910 67 910 158 825 158Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip25">
                            <path
                                    d="M0 0 5 0 5 11.25 0 11.25Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip26">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip27">
                            <path
                                    d="M941 54 1025 54 1025 144 941 144Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip28">
                            <path
                                    d="M941 67 1025 67 1025 158 941 158Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip29">
                            <path
                                    d="M0 0 5 0 5 11.25 0 11.25Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip30">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip31">
                            <path
                                    d="M1050 54 1135 54 1135 144 1050 144Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip32">
                            <path
                                    d="M1050 67 1135 67 1135 158 1050 158Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip33">
                            <path
                                    d="M0 0 5 0 5 11.25 0 11.25Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip34">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP0AAP0AAP4AAP4AAP4AAP4AAP4AAP8AAMVaHOIAAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA6klEQVRIS+3XaxKDIAwE4OCjvkB6/9NWdJUEgr1Avl+W7EwtKzOVmOkrfbBe6DDOOkykAdNswESynOUSy1kusZzlEstZLrGc+kfMbZhmwWF2WDxEDLmImV8JK//QjIt3K5HH5Zv9uNFOu7HCuUEjPrTN5y+mekOkcMXIvX9z7JFTmuAmpA4LljQemcTtWKxF1h1Rj9XaiAS0atkwfwQMpFSEpNeiPKnl20KCIqT6gbiLkKrNifp7RVULK0KStVRbkvHNkUVIvJaiCClvzoKVhntz6iKku5bn2Wy5TotahJROi16E5AI7EUD0A7L3auODNhWvAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img35"
                        ></image>
                        <clipPath id="clip36">
                            <path
                                    d="M0 0 8 0 8 18.6667 0 18.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACDfECDXGCXaFSTbFCPZFiPaFSLbFCTbFiTbFSPcEyLcFCHaFSLbFCPcEyPaFSPbFdh6Az4AAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA60lEQVRIS+3Xaw6EIAwEYPCxvnDp/U+7VkehUtgL9PuFMIlJR5JdV+gj7R7rlp2INqwb5iNGNOKpqj9jFDs8V/jvlaOAjYoFMaIJO6oRIdZjT+EjMmzHpmJD5LJgtzAhcBuw/9Llb2VfvRYuQlKHcxUhKcMZcCSUtTxFSMVw5EiSGeeQFyGJWkQRkhhOwKYmq+VdhPTUctyIlni/uSxCwm3RipDO26IWIXEtlSKk44NYsWybHRb/uDWANpyIs5AN25fj2dQP+oPTRL8g5YAsxyxnOWY5yzHLWY5ZznKsw2lS+dP1/iGW/i049wN/6mrjj3LfTQAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img37"
                        ></image>
                        <clipPath id="clip38">
                            <path
                                    d="M20 524 29 524 29 545 20 545Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip39">
                            <path
                                    d="M181 468 265 468 265 552 181 552Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip40">
                            <path
                                    d="M181 468 265 468 265 552 181 552Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip41">
                            <path
                                    d="M181 468 265 468 265 552 181 552Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip42">
                            <path
                                    d="M178 508 272 508 272 599 178 599Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip43">
                            <path
                                    d="M178 521 272 521 272 612 178 612Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip44">
                            <path
                                    d="M178 534 272 534 272 624 178 624Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip45">
                            <path
                                    d="M178 547 272 547 272 637 178 637Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip46">
                            <path
                                    d="M178 559 272 559 272 650 178 650Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip47">
                            <path
                                    d="M178 572 272 572 272 663 178 663Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip48">
                            <path
                                    d="M353 468 437 468 437 552 353 552Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip49">
                            <path
                                    d="M353 468 437 468 437 552 353 552Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip50">
                            <path
                                    d="M353 468 437 468 437 552 353 552Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip51">
                            <path
                                    d="M350 508 444 508 444 599 350 599Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip52">
                            <path
                                    d="M350 521 444 521 444 612 350 612Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip53">
                            <path
                                    d="M350 534 444 534 444 624 350 624Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip54">
                            <path
                                    d="M350 547 444 547 444 637 350 637Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip55">
                            <path
                                    d="M350 559 444 559 444 650 350 650Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip56">
                            <path
                                    d="M350 572 444 572 444 663 350 663Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip57">
                            <path
                                    d="M53 199 122 199 122 289 53 289Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip58">
                            <path
                                    d="M100 377 170 377 170 467 100 467Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip59">
                            <path
                                    d="M1168 197 1237 197 1237 288 1168 288Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,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"
                                preserveAspectRatio="none"
                                id="img60"
                        ></image>
                        <clipPath id="clip61">
                            <path
                                    d="M0 0 123.158 0 123.158 60 0 60Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip62">
                            <path
                                    d="M1079-29 1175-29 1175 61 1079 61Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip63">
                            <path
                                    d="M1182 38 1271 38 1271 128 1182 128Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip64">
                            <path
                                    d="M1186-2 1260-2 1260 88 1186 88Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip65">
                            <path
                                    d="M58 261 142 261 142 352 58 352Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip66">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip67">
                            <path
                                    d="M469 541 554 541 554 631 469 631Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip68">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip69">
                            <path
                                    d="M598 541 682 541 682 631 598 631Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip70">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip71">
                            <path
                                    d="M1122 540 1206 540 1206 631 1122 631Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip72">
                            <path
                                    d="M714 550 798 550 798 640 714 640Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip73">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip74">
                            <path
                                    d="M809 549 893 549 893 640 809 640Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip75">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip76">
                            <path
                                    d="M908 549 992 549 992 639 908 639Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip77">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip78">
                            <path
                                    d="M1009 549 1094 549 1094 639 1009 639Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip79">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                    </defs>
                    <g clip-path="url(#clip0)">
                        <rect
                                x="0"
                                y="0"
                                width="1280"
                                height="720"
                                fill="#FFFFFF"
                                fill-opacity="0"
                        />
                        <path
                                d="M608.642 253.709 52.5001 253.5"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
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
                                font-size="11"
                                transform="translate(150.467 135)"
                        >
                            Л-ГЭС5-ГЭС6
                            <tspan x="103.985" y="0">Л-5-Нефтьпром</tspan>
                            <tspan x="227.275" y="0">Л-Тандирчи</tspan>
                            <tspan font-weight="400" x="381.336" y="65">В-Л-Н</tspan>
                        </text>
                        <path
                                d="M0 0 1003.88 0.318005"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1103.38 431.5)"
                        />
                        <path
                                d="M0 0 505.058 1.63622"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1235.56 252.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(783.905 199)"
                        >
                            В-Л-52
                            <tspan x="105.168" y="-1">Л-5X</tspan>
                        </text>
                        <path
                                d="M1092.52 253.175 1092 204.516 1095 204.484 1095.52 253.142ZM1098.52 253.11C1098.55 255.595 1096.56 257.632 1094.07 257.658 1091.59 257.685 1089.55 255.692 1089.52 253.207 1089.5 250.722 1091.49 248.686 1093.98 248.659 1096.46 248.632 1098.5 250.625 1098.52 253.11Z"
                                fill="#0099FF"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(959.251 133)"
                        >
                            Л-Хақиқат
                        </text>
                        <path
                                d="M1.5-0.000416483 1.51146 41.2696-1.48854 41.2704-1.5 0.000416483ZM6.55484 33.024 0.0122851 44.247-6.5365 33.0276C-6.95412 32.3122-6.71267 31.3936-5.99721 30.976-5.28174 30.5584-4.3632 30.7998-3.94558 31.5153L1.30692 40.5138-1.28442 40.5146 3.96308 31.5131C4.3803 30.7974 5.29871 30.5554 6.01441 30.9727 6.7301 31.3899 6.97206 32.3083 6.55484 33.024Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 1094.5 186.74)"
                        />
                        <path
                                d="M0 0 0.000104987 54.855"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 923.5 359.355)"
                        />
                        <path
                                d="M0 0 0.000104987 34.3971"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 923.5 287.897)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(939.826 297)"
                        >
                            В
                            <tspan x="7.16669" y="0">-</tspan>
                            110
                            <tspan x="29.3334" y="0">кВ</tspan>
                            <tspan x="135.334" y="-163">Л</tspan>
                            <tspan x="142.501" y="-163">-</tspan>
                            Куши
                            <tspan x="-884.384" y="-29">СШ 35 кВ</tspan>
                            <tspan x="236.44" y="-32">СШ 110 кВ</tspan>
                        </text>
                        <path
                                d="M1.5-1.01425e-05 1.5001 15.5267-1.49989 15.5267-1.5 1.01425e-05ZM4.5001 15.5267C4.50012 18.012 2.48542 20.0267 0.000135414 20.0267-2.48515 20.0267-4.49988 18.012-4.4999 15.5267-4.49991 13.0415-2.48521 11.0267 7.45593e-05 11.0267 2.48536 11.0267 4.50009 13.0414 4.5001 15.5267Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 223.5 448.027)"
                        />
                        <path
                                d="M0 0 0.178058 20.1608"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 223.5 486.661)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(108.5 444)"
                        >
                            СШ 6 кВ
                        </text>
                        <path
                                d="M511.547 477.561 511 431.518 514 431.482 514.546 477.526ZM508 431.553C507.971 429.068 509.962 427.03 512.447 427 514.932 426.971 516.97 428.962 517 431.447 517.029 433.932 515.039 435.97 512.553 436 510.068 436.029 508.03 434.039 508 431.553Z"
                                fill="#006600"
                        />
                        <a href="<?= $urlSwitch12 ?>">
                            <rect id="c406"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 214.5 466.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch8 ?>">
                            <rect id="c383"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#0099FF"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 1084.5 204.5)"
                            />
                        </a>
                        <path
                                d="M983.524 253.175 983 204.516 986 204.484 986.524 253.142ZM989.524 253.11C989.551 255.595 987.558 257.632 985.073 257.658 982.588 257.685 980.551 255.692 980.524 253.207 980.498 250.722 982.491 248.686 984.976 248.659 987.461 248.632 989.497 250.625 989.524 253.11Z"
                                fill="#0099FF"
                        />
                        <path
                                d="M982.784 186.526 982.052 144.496 985.052 144.443 985.784 186.474ZM977.151 152.827 983.5 141.493 990.24 152.599C990.67 153.307 990.444 154.229 989.736 154.659 989.028 155.089 988.105 154.863 987.675 154.155L982.269 145.248 984.86 145.203 979.768 154.293C979.363 155.016 978.449 155.273 977.726 154.868 977.003 154.463 976.746 153.549 977.151 152.827Z"
                                fill="#0099FF"
                        />
                        <a href="<?= $urlSwitch7 ?>">
                            <rect id="c452"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#0099FF"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 975.5 204.5)"
                            />
                        </a>
                        <path
                                d="M868.524 254.175 868 205.516 871 205.484 871.524 254.142ZM874.524 254.11C874.551 256.595 872.558 258.632 870.073 258.658 867.588 258.685 865.551 256.692 865.524 254.207 865.498 251.722 867.491 249.686 869.976 249.659 872.461 249.632 874.497 251.625 874.524 254.11Z"
                                fill="#0099FF"
                        />
                        <path
                                d="M868.696 187.022 868.046 144.493 871.045 144.447 871.695 186.976ZM863.127 152.813 869.5 141.493 876.216 152.613C876.645 153.322 876.417 154.244 875.708 154.672 874.999 155.101 874.077 154.873 873.648 154.164L868.261 145.245 870.853 145.206 865.741 154.285C865.334 155.007 864.42 155.262 863.698 154.856 862.976 154.45 862.72 153.535 863.127 152.813Z"
                                fill="#0099FF"
                        />
                        <a href="<?= $urlSwitch6 ?>">
                            <rect id="c498"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#0099FF"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 860.5 205.5)"
                            />
                        </a>
                        <path
                                d="M760.524 252.175 760 203.516 763 203.484 763.524 252.142ZM766.524 252.11C766.551 254.595 764.558 256.632 762.073 256.658 759.588 256.685 757.551 254.692 757.524 252.207 757.498 249.722 759.491 247.686 761.976 247.659 764.461 247.632 766.497 249.625 766.524 252.11Z"
                                fill="#0099FF"
                        />
                        <a href="<?= $urlSwitch5 ?>">
                            <rect id="c475"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#0099FF"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 752.5 205.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch10 ?>">
                            <rect
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#0099FF"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    transform="matrix(1 0 0 -1 913.5 304.5)"
                            />
                        </a>
                        <path
                                d="M515.524 253.175 515 204.516 518 204.484 518.524 253.142ZM521.524 253.11C521.551 255.595 519.558 257.632 517.073 257.658 514.588 257.685 512.551 255.692 512.524 253.207 512.498 250.722 514.491 248.686 516.976 248.659 519.461 248.632 521.497 250.625 521.524 253.11Z"
                                fill="#663300"
                        />
                        <path
                                d="M515.153 186.513 515.011 146.475 518.011 146.465 518.153 186.502ZM509.994 154.737 516.5 143.493 523.086 154.691C523.506 155.405 523.267 156.324 522.553 156.744 521.839 157.164 520.92 156.926 520.5 156.212L515.218 147.23 517.809 147.221 512.591 156.24C512.176 156.957 511.259 157.202 510.542 156.787 509.824 156.372 509.579 155.455 509.994 154.737Z"
                                fill="#663300"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect id="c647"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#663300"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 507.5 204.5)"
                            />
                        </a>
                        <path
                                d="M406.203 253.338 406 204.506 409 204.494 409.203 253.325ZM412.203 253.313C412.213 255.798 410.207 257.821 407.722 257.832 405.236 257.842 403.213 255.836 403.203 253.35 403.193 250.865 405.199 248.842 407.684 248.832 410.17 248.821 412.193 250.828 412.203 253.313Z"
                                fill="#663300"
                        />
                        <path
                                d="M1.49991-0.0162223 1.93666 40.3657-1.06316 40.3981-1.49991 0.0162223ZM6.89288 32.0674 0.468947 43.3587-6.19769 32.209C-6.62283 31.4979-6.39107 30.5769-5.68005 30.1518-4.96903 29.7266-4.04799 29.9584-3.62286 30.6694L1.72417 39.6121-0.867015 39.6401 4.28534 30.5839C4.695 29.8638 5.61081 29.6122 6.33086 30.0219 7.05091 30.4315 7.30253 31.3473 6.89288 32.0674Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 407.5 185.852)"
                        />
                        <a href="<?= $urlSwitch3 ?>">
                            <rect id="c670"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#663300"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 398.5 204.5)"
                            />
                        </a>
                        <path
                                d="M291.524 254.175 291 205.516 294 205.484 294.524 254.142ZM297.524 254.11C297.551 256.595 295.558 258.632 293.073 258.658 290.587 258.685 288.551 256.692 288.524 254.207 288.498 251.722 290.491 249.686 292.976 249.659 295.461 249.632 297.497 251.625 297.524 254.11Z"
                                fill="#663300"
                        />
                        <path
                                d="M1.49996-0.0108404 1.79524 40.8466-1.20468 40.8683-1.49996 0.0108404ZM6.7812 32.5661 0.316795 43.8342-6.3098 32.6607C-6.73238 31.9482-6.49732 31.028-5.78477 30.6054-5.07223 30.1828-4.15203 30.4179-3.72945 31.1304L1.58545 40.0922-1.00582 40.111 4.17901 31.0732C4.59124 30.3547 5.50795 30.1063 6.22652 30.5186 6.9451 30.9308 7.19344 31.8475 6.7812 32.5661Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 292.5 187.327)"
                        />
                        <a href="<?= $urlSwitch2 ?>">
                            <rect id="c601"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 283.5 205.5)"
                            />
                        </a>
                        <path
                                d="M1.5-3.26546e-06 1.5001 48.226-1.49989 48.226-1.5 3.26546e-06ZM-4.5 9.79638e-06C-4.50001-2.48527-2.48529-4.49999-9.79638e-06-4.5 2.48527-4.50001 4.49999-2.48529 4.5-9.79638e-06 4.50001 2.48527 2.48529 4.49999 9.79638e-06 4.5-2.48527 4.50001-4.49999 2.48529-4.5 9.79638e-06Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 185.5 253.726)"
                        />
                        <path
                                d="M184.019 187.24 184.001 146.471 187.001 146.469 187.019 187.239ZM178.959 154.717 185.5 143.493 192.051 154.711C192.468 155.427 192.227 156.345 191.512 156.763 190.796 157.181 189.878 156.94 189.46 156.224L184.206 147.226 186.797 147.225 181.551 156.228C181.134 156.943 180.216 157.185 179.5 156.768 178.784 156.351 178.542 155.433 178.959 154.717Z"
                                fill="#663300"
                        />
                        <a href="<?= $urlSwitch1 ?>">
                            <rect id="c624"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 176.5 205.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.79727 57.6371"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 344.5 429.137)"
                        />
                        <path
                                d="M345.566 346.56 344.5 303.5"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.49987-0.0195844 1.9279 32.7613-1.07184 32.8005-1.49987 0.0195844ZM-4.49962 0.0587531C-4.53206-2.42632-2.54382-4.46717-0.0587531-4.49962 2.42632-4.53206 4.46717-2.54382 4.49962-0.0587531 4.53206 2.42632 2.54382 4.46717 0.0587531 4.49962-2.42632 4.53206-4.46717 2.54382-4.49962 0.0587531Z"
                                fill="#663300"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 344.928 253.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(361.725 297)"
                        >
                            В
                            <tspan x="7.16666" y="0">-</tspan>
                            35
                            <tspan x="24" y="0">кВ</tspan>
                        </text>
                        <path
                                d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 342.5 434.5)"
                        />
                        <a href="<?= $urlSwitch9 ?>">
                            <rect
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    transform="matrix(1 0 0 -1 335.5 303.5)"
                            />
                        </a>
                        <path
                                d="M0 0 513.19 0.514751"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF7C80"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 921.69 358.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="19"
                                transform="translate(504.336 23)"
                        >
                            Шахрихон
                            <tspan x="93.7867" y="0">ГЭСлар</tspan>
                            <tspan x="166.62" y="0">каскади</tspan>
                            <tspan x="77.8667" y="22">(ГЭС</tspan>
                            <tspan x="122.033" y="22">-</tspan>
                            <tspan x="128.2" y="22">5А)</tspan>
                        </text>
                        <a href="<?= $urlSwitch14 ?>">
                            <rect id="c314"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 503.5 462.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(202.444 200)"
                        >
                            В-Л-35
                            <tspan x="102.899" y="-2">В-Л-5Н</tspan>
                            <tspan x="222.326" y="-2">В-Л-Т</tspan>
                            <tspan font-weight="700" x="289.706" y="-65">Л-Навоий</tspan>
                            <tspan x="522.884" y="-67">Л-ГЭС5-ЮФК 2</tspan>
                            <tspan x="633.841" y="-67">Л-5-X(Хакан)</tspan>
                            <tspan x="797.181" y="-2">В-Л-Хакикат</tspan>
                            <tspan x="907.189" y="-1">В-Л-Куши</tspan>
                        </text>
                        <a href="<?= $urlSwitch11 ?>">
                            <rect
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    transform="matrix(1 0 0 -1 335.5 417.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(361.855 412)"
                        >
                            В
                            <tspan x="7.16666" y="0">-</tspan>
                            6 кВ
                            <tspan font-weight="700" x="-47.4199" y="-73">Т</tspan>
                            <tspan font-weight="700" x="-40.2532" y="-73">-</tspan>
                            <tspan font-weight="700" x="-36.7532" y="-73">1</tspan>
                            <tspan font-weight="700" x="-85.4199" y="-60">110/35/6</tspan>
                            <tspan font-weight="700" x="-44.7532" y="-60">кВ</tspan>
                            <tspan font-weight="700" x="-84.4199" y="-47">16000</tspan>
                            <tspan font-weight="700" x="-52.4199" y="-47">кВА</tspan>
                            <tspan font-weight="700" x="-109.753" y="-34">ТДТН 16000/110</tspan>
                        </text>
                        <a href="<?= $urlTransformer1 ?>">
                            <path
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(-4.37114e-08 1 1 4.37114e-08 356.5 355.5)"
                            />
                            <path
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#0099FF"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    fill-rule="evenodd"
                                    transform="matrix(-4.37114e-08 1 1 4.37114e-08 378.5 343.5)"
                            />
                            <path
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#663300"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    fill-rule="evenodd"
                                    transform="matrix(-4.37114e-08 1 1 4.37114e-08 357.5 331.5)"
                            />
                        </a>
                        <path
                                d="M344.5 370.5 356.678 370.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 0.000104987 12.8296"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-4.37114e-08 1 1 4.37114e-08 344.5 346.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(252.782 493)"
                        >
                            Г-1
                            <tspan x="0" y="13">зонтичный</tspan>
                            <tspan x="0" y="26">6 кВ</tspan>
                            <tspan x="0" y="39">6,5 МВт</tspan>
                        </text>
                        <path
                                d="M1.5-1.01425e-05 1.5001 15.5267-1.49989 15.5267-1.5 1.01425e-05ZM4.5001 15.5267C4.50012 18.012 2.48542 20.0267 0.000135414 20.0267-2.48515 20.0267-4.49988 18.012-4.4999 15.5267-4.49991 13.0415-2.48521 11.0267 7.45593e-05 11.0267 2.48536 11.0267 4.50009 13.0414 4.5001 15.5267Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 394.5 448.027)"
                        />
                        <path
                                d="M0 0 0.178058 20.1608"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 394.5 486.661)"
                        />
                        <a href="<?= $urlSwitch13 ?>">
                            <rect id="c429"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 385.5 466.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(424.664 493)"
                        >
                            Г-2
                            <tspan x="0" y="13">подвесной</tspan>
                            <tspan x="0" y="26">6 кВ</tspan>
                            <tspan x="0" y="39">5,0 МВТ</tspan>
                        </text>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c3142"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#7F7F7F"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 496.5 535.5)"
                            />
                            <path id="c3141"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 496.5 511.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(537.239 494)"
                        >
                            ТСН
                            <tspan x="23.1667" y="0">-</tspan>
                            1 СТ
                            <tspan x="0" y="13">3757 6/0,4</tspan>
                            <tspan x="48.3333" y="13">кВ</tspan>
                            <tspan x="0" y="26">200кВА</tspan>
                            <tspan x="0" y="39">ТМ</tspan>
                            <tspan x="17.1667" y="39">-</tspan>
                            200/6
                        </text>
                        <path
                                d="M1.49993-0.014715 1.81503 32.1043-1.18482 32.1337-1.49993 0.014715ZM0.315103 32.119 4.78546 29.075 0.373963 38.1187-4.21411 29.1633Z"
                                fill="#7F7F7F"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 512.874 535.5)"
                        />
                        <path
                                d="M637.547 477.561 637 431.518 640 431.482 640.546 477.526ZM634 431.553C633.971 429.068 635.962 427.03 638.447 427 640.932 426.971 642.97 428.962 643 431.447 643.029 433.932 641.039 435.97 638.553 436 636.068 436.029 634.03 434.039 634 431.553Z"
                                fill="#006600"
                        />
                        <a href="<?= $urlSwitch15 ?>">
                            <rect id="c337"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 629.5 462.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c3372"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#7F7F7F"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 622.5 535.5)"
                            />
                            <path id="c3371"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 622.5 511.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(662.772 494)"
                        >
                            ТСН
                            <tspan x="23.1666" y="0">-</tspan>
                            2
                            <tspan x="0" y="13">6/0,4</tspan>
                            <tspan x="24.3333" y="13">кВ</tspan>
                            <tspan x="0" y="26">180</tspan>
                            <tspan x="18.6666" y="26">кВА</tspan>
                            <tspan x="0" y="39">ТМ</tspan>
                            <tspan x="17.1666" y="39">-</tspan>
                            180/6
                        </text>
                        <path
                                d="M1.49993-0.014715 1.81503 32.1043-1.18482 32.1337-1.49993 0.014715ZM0.315103 32.119 4.78546 29.075 0.373963 38.1187-4.21411 29.1633Z"
                                fill="#7F7F7F"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 638.874 535.5)"
                        />
                        <path
                                d="M142.667 94.3699 226.266 94.3699 226.266 107.961 142.667 107.961Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M142.667 107.961 226.266 107.961 226.266 121.552 142.667 121.552Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M142 107.961 226.933 107.961"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M142.667 93.7032 142.667 122.219"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M226.266 93.7032 226.266 122.219"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M142 94.3699 226.933 94.3699"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M142 121.552 226.933 121.552"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip1)">
                            <text id="g624Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(146.446 104)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip2)">
                            <text id="g624Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(146.446 118)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip4)" transform="matrix(1 0 -0 1.06667 220 95)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip6)" transform="matrix(1 0 -0 1.02857 220 109)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <path
                                d="M251.013 93.4172 334.612 93.4172 334.612 107.008 251.013 107.008Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M251.013 107.008 334.612 107.008 334.612 120.6 251.013 120.6Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M250.346 107.008 335.279 107.008"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M251.013 92.7506 251.013 121.266"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M334.612 92.7506 334.612 121.266"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M250.346 93.4172 335.279 93.4172"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M250.346 120.6 335.279 120.6"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip7)">
                            <text id="g601Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(254.792 103)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip8)">
                            <text id="g601Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(254.792 117)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip9)" transform="matrix(1 0 -0 1.06667 328 94)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip10)" transform="matrix(1.16667 0 -0 1 328 108)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.428571 0.428571)"
                            ></use>
                        </g>
                        <path
                                d="M365.359 92.8706 448.958 92.8706 448.958 106.462 365.359 106.462Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M365.359 106.462 448.958 106.462 448.958 120.053 365.359 120.053Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M364.692 106.462 449.625 106.462"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M365.359 92.2039 365.359 120.72"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M448.958 92.2039 448.958 120.72"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M364.692 92.8706 449.625 92.8706"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M364.692 120.053 449.625 120.053"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip11)">
                            <text id="g670Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(369.138 103)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip12)">
                            <text id="g670Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(369.138 116)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip13)" transform="matrix(1 0 -0 1.06667 442 93)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip14)" transform="matrix(1 0 -0 1.02857 443 107)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <path
                                d="M475.61 92.4336 559.209 92.4336 559.209 106.025 475.61 106.025Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M475.61 106.025 559.209 106.025 559.209 119.616 475.61 119.616Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M474.943 106.025 559.876 106.025"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M475.61 91.7669 475.61 120.283"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M559.209 91.7669 559.209 120.283"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M474.943 92.4336 559.876 92.4336"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M474.943 119.616 559.876 119.616"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip15)">
                            <text id="g647Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(479.389 102)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip16)">
                            <text id="g647Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(479.389 116)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip17)" transform="matrix(1 0 -0 1.06667 553 93)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip18)" transform="matrix(1 0 -0 1.02857 553 107)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(773.297 456)"
                        >
                            В
                            <tspan x="7.16669" y="0">-</tspan>
                            Ф.К
                        </text>
                        <path
                                d="M1.49999-0.00645116 2.05549 129.157-0.94448 129.169-1.49999 0.00645116ZM-4.49996 0.0193535C-4.51065-2.4659-2.50461-4.48927-0.0193535-4.49996 2.4659-4.51065 4.48927-2.50461 4.49996-0.0193535 4.51065 2.4659 2.50461 4.48927 0.0193535 4.49996-2.4659 4.51065-4.48927 2.50461-4.49996 0.0193535ZM0.555508 129.163 5.04256 126.144 0.581312 135.163-3.95735 126.183Z"
                                fill="#006600"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 757.081 432.5)"
                        />
                        <a href="<?= $urlSwitch16 ?>">
                            <rect id="c360"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 765.5 443.5)"
                            />
                        </a>
                        <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(729.815 582)"
                                fill="#828897"
                        >
                            Ф.Қишлоқ
                            <tspan fill="#828897" font-weight="400" x="140.625" y="-126">В-Ф.И</tspan>
                            <tspan x="95.4162" y="-1">Ф. Интергаз</tspan>
                            <tspan fill="#828897" font-weight="400" x="234.105" y="-126">В-Ф-У</tspan>
                            <tspan x="177.588" y="-2">Ф.Ўқчи метангаз</tspan>
                            <tspan fill="#828897" font-weight="400" x="330.169" y="-126">В-Ф.С</tspan>
                            <tspan x="279.378" y="-2">Ф. Саидарғин</tspan>
                        </text>
                        <path
                                d="M719.445 92.4879 803.044 92.4879 803.044 106.079 719.445 106.079Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M719.445 106.079 803.044 106.079 803.044 119.67 719.445 119.67Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M718.778 106.079 803.711 106.079"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M719.445 91.8212 719.445 120.337"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M803.044 91.8212 803.044 120.337"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M718.778 92.4879 803.711 92.4879"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M718.778 119.67 803.711 119.67"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip19)">
                            <text id="g475Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(723.224 102)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip20)">
                            <text id="g475Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(723.224 116)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip21)" transform="matrix(1.125 0 -0 1 796 93)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.444444 0.444444)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip22)" transform="matrix(1 0 -0 1.02857 797 107)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <path
                                d="M825.986 92.4879 909.585 92.4879 909.585 106.079 825.986 106.079Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M825.986 106.079 909.585 106.079 909.585 119.67 825.986 119.67Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M825.319 106.079 910.252 106.079"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M825.986 91.8212 825.986 120.337"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M909.585 91.8212 909.585 120.337"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M825.319 92.4879 910.252 92.4879"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M825.319 119.67 910.252 119.67"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip23)">
                            <text id="g498Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(829.765 102)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip24)">
                            <text id="g498Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(829.765 116)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip25)" transform="matrix(1 0 -0 1.06667 903 93)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip26)" transform="matrix(1.16667 0 -0 1 903 107)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.428571 0.428571)"
                            ></use>
                        </g>
                        <path
                                d="M941.265 92.4846 1024.86 92.4846 1024.86 106.076 941.265 106.076Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M941.265 106.076 1024.86 106.076 1024.86 119.667 941.265 119.667Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M940.598 106.076 1025.53 106.076"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M941.265 91.818 941.265 120.334"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1024.86 91.818 1024.86 120.334"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M940.598 92.4846 1025.53 92.4846"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M940.598 119.667 1025.53 119.667"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip27)">
                            <text id="g452Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(945.045 102)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip28)">
                            <text id="g452Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(945.045 116)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip29)" transform="matrix(1 0 -0 1.06667 1018 93)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip30)" transform="matrix(1 0 -0 1.02857 1019 107)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <path
                                d="M1050.62 92.4324 1134.22 92.4324 1134.22 106.024 1050.62 106.024Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1050.62 106.024 1134.22 106.024 1134.22 119.615 1050.62 119.615Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1049.96 106.024 1134.89 106.024"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1050.62 91.7658 1050.62 120.281"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1134.22 91.7658 1134.22 120.281"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1049.96 92.4324 1134.89 92.4324"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1049.96 119.615 1134.89 119.615"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip31)">
                            <text id="g383Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1054.4 102)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip32)">
                            <text id="g383Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1054.4 116)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip33)" transform="matrix(1 0 -0 1.06667 1128 93)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip34)" transform="matrix(1 0 -0 1.02857 1128 107)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.416667 0.416667)"
                            ></use>
                        </g>
                        <path
                                d="M760.332 186.938 760.022 144.481 763.022 144.459 763.332 186.916ZM755.036 152.762 761.5 141.493 768.127 152.666C768.55 153.379 768.315 154.299 767.603 154.722 766.89 155.144 765.97 154.909 765.547 154.197L760.232 145.235 762.823 145.216 757.639 154.254C757.227 154.973 756.31 155.221 755.591 154.809 754.873 154.397 754.624 153.48 755.036 152.762Z"
                                fill="#0099FF"
                        />
                        <path
                                d="M1.49999-0.00645116 2.05549 129.157-0.94448 129.169-1.49999 0.00645116ZM-4.49996 0.0193535C-4.51065-2.4659-2.50461-4.48927-0.0193535-4.49996 2.4659-4.51065 4.48927-2.50461 4.49996-0.0193535 4.51065 2.4659 2.50461 4.48927 0.0193535 4.49996-2.4659 4.51065-4.48927 2.50461-4.49996 0.0193535ZM0.555508 129.163 5.04256 126.144 0.581312 135.163-3.95735 126.183Z"
                                fill="#006600"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 854.081 431.5)"
                        />
                        <a href="<?= $urlSwitch17 ?>">
                            <rect id="c291"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 863.5 443.5)"
                            />
                        </a>
                        <path
                                d="M1.49999-0.00645116 2.05549 129.157-0.94448 129.169-1.49999 0.00645116ZM-4.49996 0.0193535C-4.51065-2.4659-2.50461-4.48927-0.0193535-4.49996 2.4659-4.51065 4.48927-2.50461 4.49996-0.0193535 4.51065 2.4659 2.50461 4.48927 0.0193535 4.49996-2.4659 4.51065-4.48927 2.50461-4.49996 0.0193535ZM0.555508 129.163 5.04256 126.144 0.581312 135.163-3.95735 126.183Z"
                                fill="#006600"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 950.081 431.5)"
                        />
                        <a href="<?= $urlSwitch18 ?>">
                            <rect id="c531"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 958.5 443.5)"
                            />
                        </a>
                        <path
                                d="M1.49999-0.00645116 2.05549 129.157-0.94448 129.169-1.49999 0.00645116ZM-4.49996 0.0193535C-4.51065-2.4659-2.50461-4.48927-0.0193535-4.49996 2.4659-4.51065 4.48927-2.50461 4.49996-0.0193535 4.51065 2.4659 2.50461 4.48927 0.0193535 4.49996-2.4659 4.51065-4.48927 2.50461-4.49996 0.0193535ZM0.555508 129.163 5.04256 126.144 0.581312 135.163-3.95735 126.183Z"
                                fill="#006600"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1046.08 431.5)"
                        />
                        <a href="<?= $urlSwitch19 ?>">
                            <rect id="c571"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1055.5 443.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(1188.92 488)"
                        >
                            Головной
                            <tspan x="0" y="13">гидроузел</tspan>
                            <tspan x="0" y="26">6/0,4</tspan>
                            <tspan x="24.3334" y="26">кВ</tspan>
                            <tspan x="0" y="39">400кВА</tspan>
                            <tspan x="0" y="52">ТМ</tspan>
                            <tspan x="17.1667" y="52">-</tspan>
                            400/6
                        </text>
                        <path
                                d="M1166 431.5 1166 567.67 1163 567.67 1163 431.5ZM1160 431.5C1160 429.015 1162.01 427 1164.5 427 1166.99 427 1169 429.015 1169 431.5 1169 433.985 1166.99 436 1164.5 436 1162.01 436 1160 433.985 1160 431.5ZM1164.5 567.67 1169 564.67 1164.5 573.67 1160 564.67Z"
                                fill="#7F7F7F"
                        />
                        <path
                                d="M0 0 66.1743 0.190446"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1199.67 432.5)"
                        />
                        <rect
                                x="1114"
                                y="399"
                                width="151"
                                height="208"
                                stroke="#172C51"
                                stroke-width="1.66667"
                                stroke-miterlimit="8"
                                stroke-dasharray="6.66667 5"
                                fill="none"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(1204.31 412)"
                        >
                            Бош тўғон
                        </text>
                        <rect id="c693"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1155.5 466.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(245.056 459)"
                        >
                            ВМ
                            <tspan x="16.6667" y="0">-</tspan>
                            Г1
                            <tspan x="173.769" y="4">ВМ</tspan>
                            <tspan x="190.436" y="4">-</tspan>
                            Г2
                            <tspan x="293.621" y="0">В</tspan>
                            <tspan x="300.788" y="0">-</tspan>
                            ТСН1
                            <tspan x="421.812" y="-1">В</tspan>
                            <tspan x="428.978" y="-1">-</tspan>
                            ТСН2
                        </text>
                        <path
                                d="M15.5001 580C15.5001 574.753 19.7533 570.5 25.0001 570.5 30.2468 570.5 34.5001 574.753 34.5001 580 34.5001 585.247 30.2468 589.5 25.0001 589.5 19.7533 589.5 15.5001 585.247 15.5001 580Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M15.5001 602C15.5001 596.753 19.7533 592.5 25.0001 592.5 30.2468 592.5 34.5001 596.753 34.5001 602 34.5001 607.247 30.2468 611.5 25.0001 611.5 19.7533 611.5 15.5001 607.247 15.5001 602Z"
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
                                transform="translate(40.1347 582)"
                        >
                            в работе
                            <tspan x="-0.0827293" y="22">в резерве</tspan>
                        </text>
                        <path
                                d="M15 558C15 553.029 19.2533 549 24.5 549 29.7467 549 34 553.029 34 558 34 562.971 29.7467 567 24.5 567 19.2533 567 15 562.971 15 558Z"
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
                                transform="translate(40.052 560)"
                        >
                            в ремонте
                            <tspan x="0.264881" y="-23">отдача</tspan>
                            <tspan x="0.000106812" y="-46">прием</tspan>
                        </text>
                        <g clip-path="url(#clip36)" transform="matrix(1 0 -0 1.07143 20 502)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(0.205128 0.205128)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip38)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img37"
                                    transform="matrix(0.230769 0 0 0.230769 20 524)"
                            ></use>
                        </g>
                        <path id="c4061"
                                d="M198.5 511C198.5 497.469 209.469 486.5 223 486.5 236.531 486.5 247.5 497.469 247.5 511 247.5 524.531 236.531 535.5 223 535.5 209.469 535.5 198.5 524.531 198.5 511Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip39)">
                                <g clip-path="url(#clip40)">
                                    <g clip-path="url(#clip41)">
                                        <path
                                                d="M222.689 503.933 223.622 503.933 224.944 504.167 226.033 504.633 226.889 505.178 227.9 506.189 228.522 507.122 228.989 508.367 229.144 509.067 229.144 510.933 228.833 512.1 228.211 513.344 227.589 514.122 227.044 514.667 225.956 515.367 224.711 515.833 223.933 515.989 222.378 515.989 221.133 515.678 220.278 515.289 219.422 514.744 218.567 513.967 218.022 513.189 217.478 512.1 217.167 510.856 217.089 509.922 217.244 508.678 217.556 507.667 218.178 506.5 219.033 505.567 219.656 505.022 220.978 504.322 222.144 504.011Z"
                                        />
                                        <path
                                                d="M223.156 490.089 224.011 490.089 225.489 490.322 226.967 490.789 228.211 491.411 229.144 492.033 229.922 492.733 230.856 493.667 231.711 494.911 232.333 496.156 232.8 497.556 233.033 498.722 233.111 499.344 233.111 500.822 232.878 502.3 232.489 503.622 231.867 504.944 231.089 506.033 230.933 506.033 230.311 504.944 229.378 503.856 228.522 503.078 227.433 502.378 226.267 501.833 224.944 501.444 223.156 501.211Z"
                                        />
                                        <path
                                                d="M210.4 505.878 210.789 505.956 212.967 507.2 214.522 508.133 214.6 508.289 214.444 509.922 214.6 511.556 214.989 513.033 215.533 514.2 215.533 514.433 213.356 515.678 211.489 516.767 207.444 519.1 206.122 519.878 205.889 519.878 205.189 518.4 204.8 517.078 204.644 516.144 204.567 514.822 204.722 513.344 204.956 512.256 205.5 510.778 206.044 509.767 206.744 508.756 207.678 507.744 208.533 506.967 209.933 506.111Z"
                                        />
                                        <path
                                                d="M230.7 514.433 231.089 514.511 232.956 515.6 239.022 519.1 240.344 519.878 240.189 520.267 239.644 521.044 238.944 521.9 238.4 522.444 237.233 523.3 235.989 524 234.511 524.544 233.344 524.778 232.878 524.856 230.544 524.856 229.378 524.622 228.133 524.233 226.811 523.611 225.878 522.989 225.878 518.322 226.578 518.011 227.9 517.311 228.833 516.611 229.922 515.522Z"
                                        />
                                        <path
                                                d="M213.667 495.067 215.378 495.067 216.856 495.3 218.489 495.844 219.811 496.544 220.433 496.933 220.433 501.678 219.033 502.3 217.944 503 217.089 503.7 216.544 504.244 215.611 505.567 215.144 505.411 213.822 504.633 207.756 501.133 206.044 500.122 205.967 499.967 206.511 499.111 207.367 498.1 207.989 497.478 209.156 496.622 210.244 496 211.722 495.456 212.578 495.222Z"
                                        />
                                        <path
                                                d="M217.167 516.533 217.478 516.611 218.644 517.467 219.967 518.089 221.211 518.478 222.144 518.633 223.078 518.711 223.156 518.789 223.156 529.833 221.989 529.833 220.433 529.522 219.111 529.056 217.711 528.278 216.7 527.5 215.922 526.8 215.144 525.867 214.367 524.622 213.744 523.222 213.356 521.744 213.2 520.344 213.2 519.489 213.278 518.789 215.222 517.7 216.544 516.922Z"
                                        />
                                        <path
                                                d="M240.267 500.044 240.422 500.044 240.967 501.133 241.433 502.533 241.667 503.778 241.744 505.333 241.589 506.733 241.278 508.056 240.656 509.533 240.111 510.467 239.489 511.322 238.633 512.256 237.467 513.189 236.456 513.811 235.756 514.122 233.811 513.033 231.944 511.944 231.711 511.789 231.867 510.389 231.867 509.222 232.567 508.522 233.578 507.2 234.278 506.033 234.978 504.556 235.522 502.844 236.222 502.378 238.167 501.289 240.033 500.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M178.939 547.019 271.495 547.019 271.495 559.819 178.939 559.819Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.939 559.819 271.495 559.819 271.495 572.619 178.939 572.619Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.939 572.619 271.495 572.619 271.495 585.419 178.939 585.419Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.939 585.419 271.495 585.419 271.495 598.219 178.939 598.219Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.939 598.219 271.495 598.219 271.495 611.019 178.939 611.019Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.939 611.019 271.495 611.019 271.495 623.819 178.939 623.819Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.272 559.819 272.162 559.819"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.272 572.619 272.162 572.619"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.272 585.419 272.162 585.419"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.272 598.219 272.162 598.219"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.272 611.019 272.162 611.019"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.939 546.353 178.939 624.486"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M271.495 546.353 271.495 624.486"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.272 547.019 272.162 547.019"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.272 623.819 272.162 623.819"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip42)">
                            <text id="g406"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(182.718 557)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip43)">
                            <text id="g407"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(182.718 570)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip44)">
                            <text id="a406"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(182.718 583)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip45)">
                            <text id="k406"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(182.718 595)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip46)">
                            <text id="n406"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(182.718 608)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip47)">
                            <text id="w406" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(182.718 621)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c4291"
                                d="M370.5 511C370.5 497.469 381.469 486.5 395 486.5 408.531 486.5 419.5 497.469 419.5 511 419.5 524.531 408.531 535.5 395 535.5 381.469 535.5 370.5 524.531 370.5 511Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip48)">
                                <g clip-path="url(#clip49)">
                                    <g clip-path="url(#clip50)">
                                        <path
                                                d="M394.689 503.933 395.622 503.933 396.944 504.167 398.033 504.633 398.889 505.178 399.9 506.189 400.522 507.122 400.989 508.367 401.144 509.067 401.144 510.933 400.833 512.1 400.211 513.344 399.589 514.122 399.044 514.667 397.956 515.367 396.711 515.833 395.933 515.989 394.378 515.989 393.133 515.678 392.278 515.289 391.422 514.744 390.567 513.967 390.022 513.189 389.478 512.1 389.167 510.856 389.089 509.922 389.244 508.678 389.556 507.667 390.178 506.5 391.033 505.567 391.656 505.022 392.978 504.322 394.144 504.011Z"
                                        />
                                        <path
                                                d="M395.156 490.089 396.011 490.089 397.489 490.322 398.967 490.789 400.211 491.411 401.144 492.033 401.922 492.733 402.856 493.667 403.711 494.911 404.333 496.156 404.8 497.556 405.033 498.722 405.111 499.344 405.111 500.822 404.878 502.3 404.489 503.622 403.867 504.944 403.089 506.033 402.933 506.033 402.311 504.944 401.378 503.856 400.522 503.078 399.433 502.378 398.267 501.833 396.944 501.444 395.156 501.211Z"
                                        />
                                        <path
                                                d="M382.4 505.878 382.789 505.956 384.967 507.2 386.522 508.133 386.6 508.289 386.444 509.922 386.6 511.556 386.989 513.033 387.533 514.2 387.533 514.433 385.356 515.678 383.489 516.767 379.444 519.1 378.122 519.878 377.889 519.878 377.189 518.4 376.8 517.078 376.644 516.144 376.567 514.822 376.722 513.344 376.956 512.256 377.5 510.778 378.044 509.767 378.744 508.756 379.678 507.744 380.533 506.967 381.933 506.111Z"
                                        />
                                        <path
                                                d="M402.7 514.433 403.089 514.511 404.956 515.6 411.022 519.1 412.344 519.878 412.189 520.267 411.644 521.044 410.944 521.9 410.4 522.444 409.233 523.3 407.989 524 406.511 524.544 405.344 524.778 404.878 524.856 402.544 524.856 401.378 524.622 400.133 524.233 398.811 523.611 397.878 522.989 397.878 518.322 398.578 518.011 399.9 517.311 400.833 516.611 401.922 515.522Z"
                                        />
                                        <path
                                                d="M385.667 495.067 387.378 495.067 388.856 495.3 390.489 495.844 391.811 496.544 392.433 496.933 392.433 501.678 391.033 502.3 389.944 503 389.089 503.7 388.544 504.244 387.611 505.567 387.144 505.411 385.822 504.633 379.756 501.133 378.044 500.122 377.967 499.967 378.511 499.111 379.367 498.1 379.989 497.478 381.156 496.622 382.244 496 383.722 495.456 384.578 495.222Z"
                                        />
                                        <path
                                                d="M389.167 516.533 389.478 516.611 390.644 517.467 391.967 518.089 393.211 518.478 394.144 518.633 395.078 518.711 395.156 518.789 395.156 529.833 393.989 529.833 392.433 529.522 391.111 529.056 389.711 528.278 388.7 527.5 387.922 526.8 387.144 525.867 386.367 524.622 385.744 523.222 385.356 521.744 385.2 520.344 385.2 519.489 385.278 518.789 387.222 517.7 388.544 516.922Z"
                                        />
                                        <path
                                                d="M412.267 500.044 412.422 500.044 412.967 501.133 413.433 502.533 413.667 503.778 413.744 505.333 413.589 506.733 413.278 508.056 412.656 509.533 412.111 510.467 411.489 511.322 410.633 512.256 409.467 513.189 408.456 513.811 407.756 514.122 405.811 513.033 403.944 511.944 403.711 511.789 403.867 510.389 403.867 509.222 404.567 508.522 405.578 507.2 406.278 506.033 406.978 504.556 407.522 502.844 408.222 502.378 410.167 501.289 412.033 500.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M350.712 547.061 443.268 547.061 443.268 559.861 350.712 559.861Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.712 559.861 443.268 559.861 443.268 572.661 350.712 572.661Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.712 572.661 443.268 572.661 443.268 585.461 350.712 585.461Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.712 585.461 443.268 585.461 443.268 598.261 350.712 598.261Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.712 598.261 443.268 598.261 443.268 611.061 350.712 611.061Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.712 611.061 443.268 611.061 443.268 623.861 350.712 623.861Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.045 559.861 443.935 559.861"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.045 572.661 443.935 572.661"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.045 585.461 443.935 585.461"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.045 598.261 443.935 598.261"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.045 611.061 443.935 611.061"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.712 546.395 350.712 624.528"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M443.268 546.395 443.268 624.528"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.045 547.061 443.935 547.061"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M350.045 623.861 443.935 623.861"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip51)">
                            <text id="g429"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(354.491 557)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip52)">
                            <text id="g430"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(354.491 570)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip53)">
                            <text id="a429"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(354.491 583)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip54)">
                            <text id="k429"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(354.491 595)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip55)">
                            <text id="n429"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(354.491 608)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip56)">
                            <text id="w429" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(354.491 621)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M53.6195 237.538 121.715 237.538 121.715 250.338 53.6195 250.338Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M53.6195 236.871 53.6195 251.005"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M121.715 236.871 121.715 251.005"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M52.9529 237.538 122.382 237.538"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M52.9529 250.338 122.382 250.338"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip57)">
                            <text id="g613"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(57.3991 248)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M100.92 415.528 169.016 415.528 169.016 428.328 100.92 428.328Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M100.92 414.861 100.92 428.995"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M169.016 414.861 169.016 428.995"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M100.254 415.528 169.682 415.528"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M100.254 428.328 169.682 428.328"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip58)">
                            <text id="g418"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(104.7 426)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M1168.05 235.87 1236.15 235.87 1236.15 248.67 1168.05 248.67Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1168.05 235.203 1168.05 249.337"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1236.15 235.203 1236.15 249.337"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1167.39 235.87 1236.81 235.87"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1167.39 248.67 1236.81 248.67"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip59)">
                            <text id="g487"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1171.83 246)"
                            >
                                U
                            </text>
                        </g>
                        <g clip-path="url(#clip61)" transform="matrix(1.01496 0 -0 1 1054 28)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img60"
                                    transform="scale(0.789474 0.789474)"
                            ></use>
                        </g>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1076.17 23.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 1174.5 77.1712)"
                        />
                        <path
                                d="M1172.55 90.0309 1164.86 81.6543 1165.35 81.2035 1173.04 89.58ZM1165.11 81.4289 1164.95 85.1967 1161.5 77.5001 1168.87 81.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M1181.95 89.8892 1172.5 89.5001"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1079.96 9.5748 1174.33 9.5748 1174.33 22.3748 1079.96 22.3748Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1079.96 8.90814 1079.96 23.0415"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1174.33 8.90814 1174.33 23.0415"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1079.29 9.5748 1174.99 9.5748"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1079.29 22.3748 1174.99 22.3748"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip62)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1083.74 20)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1094.24 20)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M1075.5 23.5001 1094.69 23.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1182.45 76.6585 1270.11 76.6585 1270.11 89.4585 1182.45 89.4585Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1182.45 75.9918 1182.45 90.1251"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1270.11 75.9918 1270.11 90.1251"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1181.78 76.6585 1270.77 76.6585"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1181.78 89.4585 1270.77 89.4585"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip63)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1186.23 87)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1196.73 87)"
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
                                transform="matrix(1 0 0 -1 1072.5 31.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1181.99 49.5001)"
                        />
                        <path
                                d="M1182.5 49.5001 1201.69 49.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1186.65 36.475 1259.84 36.475 1259.84 49.275 1186.65 49.275Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1186.65 35.8083 1186.65 49.9416"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1259.84 35.8083 1259.84 49.9416"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1185.98 36.475 1260.51 36.475"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1185.98 49.275 1260.51 49.275"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip64)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1190.43 46)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M1158.5 77.5001 1181.21 77.5002"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                        />

                        <path
                                d="M469.892 579.672 553.491 579.672 553.491 593.263 469.892 593.263Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M469.892 579.006 469.892 593.93"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M553.491 579.006 553.491 593.93"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M469.225 579.672 554.158 579.672"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M469.225 593.263 554.158 593.263"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip67)">
                            <text id="g314"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(473.671 590)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip68)" transform="matrix(1.16667 0 -0 1 545 580)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <path
                                d="M598.2 579.672 681.8 579.672 681.8 593.263 598.2 593.263Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M598.2 579.006 598.2 593.93"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M681.8 579.006 681.8 593.93"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M597.534 579.672 682.466 579.672"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M597.534 593.263 682.466 593.263"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip69)">
                            <text id="g337"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(601.98 590)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip70)" transform="matrix(1 0 -0 1.02857 674 580)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M1122.03 578.855 1205.63 578.855 1205.63 592.446 1122.03 592.446Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1122.03 578.188 1122.03 593.112"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1205.63 578.188 1205.63 593.112"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1121.36 578.855 1206.3 578.855"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1121.36 592.446 1206.3 592.446"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip71)">
                            <text id="g693"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1125.81 589)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M714.099 588.501 797.698 588.501 797.698 602.093 714.099 602.093Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M714.099 587.835 714.099 602.759"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M797.698 587.835 797.698 602.759"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M713.432 588.501 798.365 588.501"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M713.432 602.093 798.365 602.093"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip72)">
                            <text id="g360"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(717.878 599)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip73)" transform="matrix(1 0 -0 1.02857 790 589)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img37"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M809.318 588.304 892.918 588.304 892.918 601.895 809.318 601.895Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M809.318 587.637 809.318 602.562"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M892.918 587.637 892.918 602.562"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M808.651 588.304 893.584 588.304"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M808.651 601.895 893.584 601.895"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip74)">
                            <text id="g291"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(813.098 598)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip75)" transform="matrix(1 0 -0 1.02857 885 589)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img37"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M908.337 587.559 991.936 587.559 991.936 601.15 908.337 601.15Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M908.337 586.893 908.337 601.817"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M991.936 586.893 991.936 601.817"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M907.67 587.559 992.603 587.559"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M907.67 601.15 992.603 601.15"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip76)">
                            <text id="g531"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(912.116 598)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip77)" transform="matrix(1 0 -0 1.02857 984 588)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img37"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M1009.72 587.559 1093.32 587.559 1093.32 601.15 1009.72 601.15Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1009.72 586.893 1009.72 601.817"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1093.32 586.893 1093.32 601.817"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1009.06 587.559 1093.99 587.559"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1009.06 601.15 1093.99 601.15"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip78)">
                            <text id="g571"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1013.5 598)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip79)" transform="matrix(1 0 -0 1.02857 1086 588)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img37"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
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

        fetch('/shaxrixon/server5')
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

                data.forEach(item => {
                    if (item.id === 624) {
                        const plus = document.getElementById("g624Plus");
                        const minus = document.getElementById("g624Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(624);
                        } else {
                            falseAnimation(624);
                        }
                    } else if (item.id === 601) {
                        const plus = document.getElementById("g601Plus");
                        const minus = document.getElementById("g601Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(601);
                        } else {
                            falseAnimation(601);
                        }
                    } else if (item.id === 670) {
                        const plus = document.getElementById("g670Plus");
                        const minus = document.getElementById("g670Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(670);
                        } else {
                            falseAnimation(670);
                        }
                    } else if (item.id === 647) {
                        const plus = document.getElementById("g647Plus");
                        const minus = document.getElementById("g647Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(647);
                        } else {
                            falseAnimation(647);
                        }
                    } else if (item.id === 475) {
                        const plus = document.getElementById("g475Plus");
                        const minus = document.getElementById("g475Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(475);
                        } else {
                            falseAnimation(475);
                        }
                    } else if (item.id === 498) {
                        const plus = document.getElementById("g498Plus");
                        const minus = document.getElementById("g498Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(498);
                        } else {
                            falseAnimation(498);
                        }
                    } else if (item.id === 452) {
                        const plus = document.getElementById("g452Plus");
                        const minus = document.getElementById("g452Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(452);
                        } else {
                            falseAnimation(452);
                        }
                    } else if (item.id === 383) {
                        const plus = document.getElementById("g383Plus");
                        const minus = document.getElementById("g383Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(383);
                        } else {
                            falseAnimation(383);
                        }
                    } else if(item.id === 613) {
                        const value = document.getElementById("g613");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВ";
                    } else if(item.id === 487) {
                        const value = document.getElementById("g487");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВ";
                    } else if(item.id === 418) {
                        const value = document.getElementById("g418");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВ";
                    } else if(item.id === 314) {
                        const value = document.getElementById("g314");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(314);
                            trueAnimation(3141);
                            trueAnimation(3142);
                        } else {
                            falseAnimation(314);
                            falseAnimation(3141);
                            falseAnimation(3142);
                        }
                    } else if(item.id === 337) {
                        const value = document.getElementById("g337");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(337);
                            trueAnimation(3371);
                            trueAnimation(3372);
                        } else {
                            falseAnimation(337);
                            falseAnimation(3371);
                            falseAnimation(3372);
                        }
                    } else if(item.id === 360) {
                        const value = document.getElementById("g360");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(360);
                        } else {
                            falseAnimation(360);
                        }
                    } else if(item.id === 291) {
                        const value = document.getElementById("g291");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(291);
                        } else {
                            falseAnimation(291);
                        }
                    } else if(item.id === 531) {
                        const value = document.getElementById("g531");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(531);
                        } else {
                            falseAnimation(531);
                        }
                    } else if(item.id === 571) {
                        const value = document.getElementById("g571");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(571);
                        } else {
                            falseAnimation(571);
                        }
                    } else if(item.id === 693) {
                        const value = document.getElementById("g693");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(693);
                        } else {
                            falseAnimation(693);
                        }
                    }

                    //Aggregate-1
                    else if(item.id === 406) {
                        const value = document.getElementById("g406");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a406");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 6.2 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(406);
                            trueAnimation(4061);
                        } else {
                            falseAnimation(406);
                            falseAnimation(4061);
                        }
                    } else if(item.id === 407) {
                        const value = document.getElementById("g407");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 408) {
                        const value = document.getElementById("k406");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 409) {
                        const value = document.getElementById("n406");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 410) {
                        const value = document.getElementById("w406");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 429) {
                        const value = document.getElementById("g429");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a429");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 5.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(429);
                            trueAnimation(4291);
                        } else {
                            errorAnimation(429);
                            errorAnimation(4291);
                        }
                    } else if(item.id === 430) {
                        const value = document.getElementById("g430");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 431) {
                        const value = document.getElementById("k429");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 432) {
                        const value = document.getElementById("n429");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 433) {
                        const value = document.getElementById("w429");
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

    function errorAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "#FFFF00";
    }
</script>