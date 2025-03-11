<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Оқ-Тепа(ГЭС-9)';
$energy = new Energy();
$id = 40;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['toshkent/index']) ?>">"Тошкент ГЭСлар каскади" Филиали</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= Html::encode($this->title) ?></li>
    </ol>
</nav>
<?= $dashboard->HeaderGes() ?>
<div class="card mb-2" style="backdrop-filter: blur(15px);">
    <div class="card-body">
        <div class="row align-items-center g-3">
            <div class="col-12 col-sm-auto flex-1">
                <svg
                        style="z-index: 1"
                        width="100%"
                        viewBox="0 0 1300 650"
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
                                    d="M254 249 339 249 339 340 254 340Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip2">
                            <path
                                    d="M254 263 339 263 339 353 254 353Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP0AAP0AAP4AAP4AAP4AAP4AAP4AAP8AAMVaHOIAAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA6klEQVRIS+3XaxKDIAwE4OCjvkB6/9NWdJUEgr1Avl+W7EwtKzOVmOkrfbBe6DDOOkykAdNswESynOUSy1kusZzlEstZLrGc+kfMbZhmwWF2WDxEDLmImV8JK//QjIt3K5HH5Zv9uNFOu7HCuUEjPrTN5y+mekOkcMXIvX9z7JFTmuAmpA4LljQemcTtWKxF1h1Rj9XaiAS0atkwfwQMpFSEpNeiPKnl20KCIqT6gbiLkKrNifp7RVULK0KStVRbkvHNkUVIvJaiCClvzoKVhntz6iKku5bn2Wy5TotahJROi16E5AI7EUD0A7L3auODNhWvAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img3"
                        ></image>
                        <clipPath id="clip4">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACDfECDXGCXaFSTbFCPZFiPaFSLbFCTbFiTbFSPcEyLcFCHaFSLbFCPcEyPaFSPbFdh6Az4AAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA60lEQVRIS+3Xaw6EIAwEYPCxvnDp/U+7VkehUtgL9PuFMIlJR5JdV+gj7R7rlp2INqwb5iNGNOKpqj9jFDs8V/jvlaOAjYoFMaIJO6oRIdZjT+EjMmzHpmJD5LJgtzAhcBuw/9Llb2VfvRYuQlKHcxUhKcMZcCSUtTxFSMVw5EiSGeeQFyGJWkQRkhhOwKYmq+VdhPTUctyIlni/uSxCwm3RipDO26IWIXEtlSKk44NYsWybHRb/uDWANpyIs5AN25fj2dQP+oPTRL8g5YAsxyxnOWY5yzHLWY5ZznKsw2lS+dP1/iGW/i049wN/6mrjj3LfTQAAAABJRU5ErkJggg=="
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
                                    d="M253 321 338 321 338 412 253 412Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip8">
                            <path
                                    d="M253 335 338 335 338 425 253 425Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip9">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip10">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip11">
                            <path
                                    d="M119 525 213 525 213 615 119 615Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip12">
                            <path
                                    d="M119 537 213 537 213 628 119 628Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip13">
                            <path
                                    d="M119 550 213 550 213 641 119 641Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip14">
                            <path
                                    d="M119 563 213 563 213 654 119 654Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip15">
                            <path
                                    d="M119 576 213 576 213 666 119 666Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip16">
                            <path
                                    d="M119 589 213 589 213 679 119 679Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip17">
                            <path
                                    d="M183 417 267 417 267 508 183 508Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip18">
                            <path
                                    d="M183 431 267 431 267 521 183 521Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip19">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip20">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip21">
                            <path
                                    d="M1084 525 1179 525 1179 616 1084 616Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip22">
                            <path
                                    d="M1084 538 1179 538 1179 628 1084 628Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip23">
                            <path
                                    d="M1084 551 1179 551 1179 641 1084 641Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip24">
                            <path
                                    d="M1084 563 1179 563 1179 654 1084 654Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip25">
                            <path
                                    d="M1084 576 1179 576 1179 667 1084 667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip26">
                            <path
                                    d="M1084 589 1179 589 1179 680 1084 680Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip27">
                            <path
                                    d="M1148 417 1232 417 1232 508 1148 508Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip28">
                            <path
                                    d="M1148 431 1232 431 1232 522 1148 522Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip29">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip30">
                            <path
                                    d="M0 0 5.57143 0 5.57143 13 0 13Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip31">
                            <path
                                    d="M59 32 144 32 144 122 59 122Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip32">
                            <path
                                    d="M59 45 144 45 144 136 59 136Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip33">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip34">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip35">
                            <path
                                    d="M421 319 505 319 505 410 421 410Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip36">
                            <path
                                    d="M421 333 505 333 505 423 421 423Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip37">
                            <path
                                    d="M0 0 4.71429 0 4.71429 11 0 11Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip38">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip39">
                            <path
                                    d="M655 320 739 320 739 410 655 410Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip40">
                            <path
                                    d="M655 333 739 333 739 424 655 424Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip41">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip42">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip43">
                            <path
                                    d="M1178 34 1263 34 1263 124 1178 124Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip44">
                            <path
                                    d="M1178 47 1263 47 1263 138 1178 138Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip45">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip46">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip47">
                            <path
                                    d="M399 417 483 417 483 508 399 508Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip48">
                            <path
                                    d="M399 431 483 431 483 522 399 522Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip49">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip50">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip51">
                            <path
                                    d="M572 417 657 417 657 508 572 508Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip52">
                            <path
                                    d="M572 431 657 431 657 521 572 521Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip53">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip54">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip55">
                            <path
                                    d="M813 254 898 254 898 345 813 345Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip56">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip57">
                            <path
                                    d="M978 424 1062 424 1062 515 978 515Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip58">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip59">
                            <path
                                    d="M951 250 1035 250 1035 341 951 341Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip60">
                            <path
                                    d="M951 264 1035 264 1035 355 951 355Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip61">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip62">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip63">
                            <path
                                    d="M952 320 1036 320 1036 411 952 411Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip64">
                            <path
                                    d="M952 334 1036 334 1036 425 952 425Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip65">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
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
                                    d="M743 83 828 83 828 173 743 173Z"
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
                                    d="M292 558 376 558 376 649 292 649Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip70">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip71">
                            <path
                                    d="M390 558 474 558 474 649 390 649Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip72">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip73">
                            <path
                                    d="M492 558 576 558 576 649 492 649Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip74">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip75">
                            <path
                                    d="M589 559 674 559 674 649 589 649Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip76">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip77">
                            <path
                                    d="M696 558 781 558 781 649 696 649Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip78">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip79">
                            <path
                                    d="M798 558 883 558 883 649 798 649Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip80">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,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"
                                preserveAspectRatio="none"
                                id="img81"
                        ></image>
                        <clipPath id="clip82">
                            <path
                                    d="M0 0 124 0 124 60.4103 0 60.4103Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip83">
                            <path
                                    d="M455-11 550-11 550 80 455 80Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip84">
                            <path
                                    d="M557 56 646 56 646 147 557 147Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip85">
                            <path
                                    d="M562 16 636 16 636 107 562 107Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip86">
                            <path
                                    d="M0 0 8.57143 0 8.57143 20 0 20Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip87">
                            <path
                                    d="M0 0 8.57143 0 8.57143 20 0 20Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip88">
                            <path
                                    d="M203 458 293 458 293 548 203 548Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip89">
                            <path
                                    d="M843 486 933 486 933 577 843 577Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip90">
                            <path
                                    d="M1167 458 1257 458 1257 548 1167 548Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip91">
                            <path
                                    d="M1177 348 1267 348 1267 438 1177 438Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip92">
                            <path
                                    d="M1117 107 1207 107 1207 198 1117 198Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip93">
                            <path
                                    d="M402 106 492 106 492 197 402 197Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip94">
                            <path
                                    d="M134 510 196 510 196 573 134 573Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip95">
                            <path
                                    d="M134 510 196 510 196 573 134 573Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip96">
                            <path
                                    d="M134 510 196 510 196 573 134 573Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip97">
                            <path
                                    d="M1102 512 1164 512 1164 574 1102 574Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip98">
                            <path
                                    d="M1102 512 1164 512 1164 574 1102 574Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip99">
                            <path
                                    d="M1102 512 1164 512 1164 574 1102 574Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip100">
                            <path
                                    d="M136 157 206 157 206 248 136 248Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip101">
                            <path
                                    d="M219 157 289 157 289 248 219 248Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip102">
                            <path
                                    d="M306 158 376 158 376 249 306 249Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip103">
                            <path
                                    d="M389 159 459 159 459 250 389 250Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip104">
                            <path
                                    d="M477 159 547 159 547 250 477 250Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip105">
                            <path
                                    d="M558 159 628 159 628 250 558 250Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip106">
                            <path
                                    d="M634 159 704 159 704 250 634 250Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip107">
                            <path
                                    d="M716 159 786 159 786 249 716 249Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip108">
                            <path
                                    d="M794 158 864 158 864 249 794 249Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip109">
                            <path
                                    d="M868 159 938 159 938 249 868 249Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip110">
                            <path
                                    d="M945 158 1015 158 1015 249 945 249Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip111">
                            <path
                                    d="M1027 158 1097 158 1097 249 1027 249Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip112">
                            <path
                                    d="M1103 158 1173 158 1173 249 1103 249Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip113">
                            <path
                                    d="M967 44 1037 44 1037 135 967 135Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip114">
                            <path
                                    d="M1052 44 1122 44 1122 135 1052 135Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip115">
                            <path
                                    d="M198 45 268 45 268 135 198 135Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip116">
                            <path
                                    d="M299 45 369 45 369 135 299 135Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="128"
                                height="128"
                                xlink:href="data:image/png;base64,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"
                                preserveAspectRatio="none"
                                id="img117"
                        ></image>
                        <clipPath id="clip118">
                            <path
                                    d="M680 106 752 106 752 178 680 178Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip119">
                            <path
                                    d="M905 561 990 561 990 652 905 652Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip120">
                            <path
                                    d="M905 575 990 575 990 665 905 665Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip121">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip122">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip123">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip124">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip125">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip126">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip127">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip128">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip129">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip130">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip131">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip132">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip133">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip134">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip135">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip136">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip137">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip138">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip139">
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
                                d="M303.812 512.567 144.5 512.5"
                                stroke="#6600CC"
                                stroke-width="2.66667"
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
                                font-size="16"
                                transform="translate(560.969 15)"
                        >
                            Ок
                            <tspan x="21.6667" y="0">-</tspan>
                            <tspan x="27" y="0">Тепа</tspan>
                            <tspan x="65.3933" y="0">(ГЭС</tspan>
                            <tspan x="103.227" y="0">-</tspan>
                            <tspan x="108.56" y="0">9)</tspan>
                            <tspan font-size="9" x="-341.782" y="506">СШ 10 кВ Г</tspan>
                            <tspan font-size="9" x="-294.448" y="506">-</tspan>
                            <tspan font-size="9" x="-291.615" y="506">2</tspan>
                            <tspan font-size="9" x="-426.14" y="441">Т</tspan>
                            <tspan font-size="9" x="-420.306" y="441">-</tspan>
                            <tspan font-size="9" x="-417.473" y="441">2</tspan>
                            <tspan font-size="9" x="-445.806" y="452">10/35 кВ</tspan>
                            <tspan font-size="9" x="-452.14" y="462">12500 кВа</tspan>
                            <tspan font-size="9" x="-467.473" y="473">SF11</tspan>
                            <tspan font-size="9" x="-448.64" y="473">-</tspan>
                            <tspan font-size="9" x="-445.806" y="473">12500</tspan>
                            <tspan font-size="9" x="-424.14" y="473">/</tspan>
                            <tspan font-size="9" x="-421.806" y="473">35</tspan>
                            <tspan font-size="9" x="-438.071" y="417">В</tspan>
                            <tspan font-size="9" x="-432.237" y="417">-</tspan>
                            <tspan font-size="9" x="-429.404" y="417">Т</tspan>
                            <tspan font-size="9" x="-423.571" y="417">-</tspan>
                            <tspan font-size="9" x="-420.737" y="417">2</tspan>
                        </text>
                        <path
                                d="M0 0 1173.1 0.000104987"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1256.6 402.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(131.842 526)"
                        >
                            Г-
                            <tspan x="8.33333" y="0">2</tspan>
                            <tspan x="-15.5" y="11">10,5 кВ</tspan>
                            <tspan x="-16.3333" y="21">8,3 мВт</tspan>
                            <tspan x="-46" y="32">SF8300</tspan>
                            <tspan x="-18.5" y="32">-</tspan>
                            <tspan x="-15.6667" y="32">24/3650</tspan>
                        </text>
                        <path
                                d="M0 0 667.544 0.000104987"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 980.044 541.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(330.531 429)"
                        >
                            В
                            <tspan x="5.83334" y="0">-</tspan>
                            <tspan x="8.66666" y="0">Т</tspan>
                            <tspan x="14.5" y="0">-</tspan>
                            <tspan x="17.3333" y="0">3</tspan>
                            <tspan x="21.6667" y="0">-</tspan>
                            <tspan x="24.5" y="0">35</tspan>
                            <tspan x="3.5719" y="87">В</tspan>
                            <tspan x="9.40524" y="87">-</tspan>
                            <tspan x="12.2386" y="87">Т</tspan>
                            <tspan x="18.0719" y="87">-</tspan>
                            <tspan x="20.9052" y="87">3</tspan>
                            <tspan x="25.2386" y="87">-</tspan>
                            <tspan x="28.0719" y="87">6</tspan>
                        </text>
                        <path
                                d="M0 0 0.000104987 25.0557"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 832.5 456.556)"
                        />
                        <path
                                d="M963.243 432.221 831.5 431.5"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(689.976 455)"
                        >
                            Т
                            <tspan x="6.16663" y="0">-</tspan>
                            <tspan x="9.33331" y="0">4</tspan>
                            <tspan x="0" y="11">35/6</tspan>
                            <tspan x="0" y="22">10000 кВа</tspan>
                            <tspan x="0" y="34">ТДНС</tspan>
                            <tspan x="26.6666" y="34">-</tspan>
                            <tspan x="29.8333" y="34">10000</tspan>
                            <tspan x="-5.26752" y="62">В</tspan>
                            <tspan x="0.565796" y="62">-</tspan>
                            <tspan x="3.39911" y="62">Т</tspan>
                            <tspan x="9.23248" y="62">-</tspan>
                            <tspan x="12.0658" y="62">4</tspan>
                            <tspan x="16.3991" y="62">-</tspan>
                            <tspan x="19.2325" y="62">6</tspan>
                            <tspan x="-65.5255" y="-29">В</tspan>
                            <tspan x="-59.6921" y="-29">-</tspan>
                            <tspan x="-56.8588" y="-29">Т</tspan>
                            <tspan x="-51.0255" y="-29">-</tspan>
                            <tspan x="-48.1921" y="-29">4</tspan>
                            <tspan x="-43.8588" y="-29">-</tspan>
                            <tspan x="-41.0255" y="-29">35</tspan>
                        </text>
                        <path
                                d="M1.33334 5.33333 1.33344 55.7315-1.33323 55.7315-1.33332 5.33334ZM1.00469e-05 5.33333-3.99998 8.00001 0 0 4.00002 7.99999ZM4.0001 55.7315C4.00011 57.9407 2.20925 59.7315 0.000112522 59.7315-2.20903 59.7316-3.99989 57.9407-3.99989 55.7316-3.9999 53.5224-2.20904 51.7315 9.74517e-05 51.7315 2.20924 51.7315 4.0001 53.5224 4.0001 55.7315Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 334.5 597.232)"
                        />
                        <path
                                d="M430.167 591.285 430.167 581.5 432.833 581.5 432.833 591.285ZM431.5 591.285 435.5 588.618 431.5 596.618 427.5 588.618Z"
                        />
                        <path
                                d="M840.75 456.791 754.5 456.5"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 794.5 459.5)"
                        />
                        <path
                                d="M795.167 482.403 795.167 457.5 797.833 457.5 797.833 482.403ZM796.5 482.403 800.5 479.736 796.5 487.736 792.5 479.736Z"
                                fill="#989898"
                        />
                        <path
                                d="M813.167 482.403 813.167 457.5 815.833 457.5 815.833 482.403ZM814.5 482.403 818.5 479.736 814.5 487.736 810.5 479.736ZM810.5 457.5C810.5 455.291 812.291 453.5 814.5 453.5 816.709 453.5 818.5 455.291 818.5 457.5 818.5 459.709 816.709 461.5 814.5 461.5 812.291 461.5 810.5 459.709 810.5 457.5Z"
                                fill="#989898"
                        />
                        <path
                                d="M831.167 482.403 831.167 457.5 833.833 457.5 833.833 482.403ZM832.5 482.403 836.5 479.736 832.5 487.736 828.5 479.736Z"
                                fill="#989898"
                        />
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 829.5 459.5)"
                        />
                        <path
                                d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 794.5 459.5)"
                        />
                        <path
                                d="M796.504 456.689 796.5 408.5"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(754.757 452)"
                        >
                            0,4 кВ
                        </text>
                        <path
                                d="M0 0 1067.46 0.000104987"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1191.96 276.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(148.205 222)"
                        >
                            Ф.Офтоб
                            <tspan x="35.3333" y="0">-</tspan>
                            <tspan x="38.1667" y="0">1</tspan>
                            <tspan x="82.0555" y="0">Ф.Гулхона</tspan>
                            -
                            <tspan x="127.222" y="0">1</tspan>
                            <tspan x="163.161" y="0">Ф.Насосный</tspan>
                            -
                            <tspan x="215.494" y="0">1</tspan>
                            <tspan x="246.232" y="1">Ф.Чапан</tspan>
                            <tspan x="280.899" y="1">-</tspan>
                            <tspan x="283.732" y="1">ата</tspan>
                            -
                            <tspan x="299.565" y="1">1</tspan>
                            <tspan x="351.345" y="1">Ф.Умид</tspan>
                            <tspan x="382.512" y="1">-</tspan>
                            <tspan x="385.345" y="1">1</tspan>
                            <tspan x="427.722" y="2">Ф.Умид</tspan>
                            <tspan x="458.889" y="2">-</tspan>
                            <tspan x="461.722" y="2">2</tspan>
                            <tspan x="497.99" y="2">Ф.Гулхана</tspan>
                            -2
                            <tspan x="569.963" y="1">Ф.Жилгородок</tspan>
                            <tspan x="725.875" y="1">Ф.Насосный</tspan>
                            -
                            <tspan x="778.208" y="1">2</tspan>
                            <tspan x="799.646" y="1">Ф.Чапан</tspan>
                            <tspan x="834.313" y="1">-</tspan>
                            <tspan x="837.146" y="1">Ата</tspan>
                            -2
                            <tspan x="887.286" y="1">Ф.2СТП</tspan>
                            <tspan x="920.119" y="1">-</tspan>
                            <tspan x="922.952" y="1">4</tspan>
                            <tspan x="964.456" y="1">Ф.1СТП</tspan>
                            <tspan x="997.29" y="1">-</tspan>
                            <tspan x="1000.12" y="1">4</tspan>
                        </text>
                        <path
                                d="M0 0 340.658 0.601575"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 465.159 161.5)"
                        />
                        <path
                                d="M1192.46 162.218 897.5 161.5"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M126.5 277.494 126.5 161.5"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 0.000104987 117.741"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1191.5 278.241)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(873.954 549)"
                        >
                            СШ 6 кВ
                            <tspan x="-56.4617" y="-213">ТС</tspan>
                            <tspan x="-44.2951" y="-213">-</tspan>
                            <tspan x="-41.4617" y="-213">2</tspan>
                            <tspan x="-56.4617" y="-202">10,5/0,4</tspan>
                            <tspan x="-25.9617" y="-202">кВ</tspan>
                            <tspan x="-56.4617" y="-192">160кВа</tspan>
                            <tspan x="-56.4617" y="-181">ТСМА160</tspan>
                            <tspan x="-720.81" y="-176">Т</tspan>
                            -
                            <tspan x="-712.143" y="-176">11</tspan>
                            <tspan x="-736.143" y="-165">10</tspan>
                            /
                            <tspan x="-725.143" y="-165">35/110</tspan>
                            <tspan x="-698.977" y="-165">кВ</tspan>
                            <tspan x="-739.143" y="-155">SFSZ11</tspan>
                            <tspan x="-709.643" y="-155">-</tspan>
                            25000
                            <tspan x="-809.51" y="-443">Л</tspan>
                            -Озод
                            <tspan x="-779.177" y="-443">Юксак</tspan>
                            -1
                            <tspan x="-327.391" y="-253">МШВ</tspan>
                            <tspan x="-823.652" y="-412">Т</tspan>
                            -11-110
                            <tspan x="-563.688" y="70">Ф</tspan>
                            -
                            <tspan x="-553.355" y="70">Овошная</tspan>
                            <tspan x="-464.682" y="69">Ф</tspan>
                            -Арчазор
                            <tspan x="-109.648" y="-295">В</tspan>
                            <tspan x="-103.815" y="-295">-</tspan>
                            <tspan x="-100.982" y="-295">Ж</tspan>
                            -
                            <tspan x="-89.6482" y="-295">2</tspan>
                            <tspan x="-582.042" y="17">В</tspan>
                            -
                            <tspan x="-573.375" y="17">Ф</tspan>
                            -Ов
                            <tspan x="-485.1" y="17">В</tspan>
                            -
                            <tspan x="-476.433" y="17">Ф</tspan>
                            -Ар
                            <tspan x="-382.765" y="18">В</tspan>
                            -Бай
                            <tspan x="-359.099" y="18">-</tspan>
                            <tspan x="-356.265" y="18">2</tspan>
                            <tspan x="-375.484" y="70">Ф</tspan>
                            -
                            <tspan x="-365.151" y="70">Байналминал</tspan>
                            <tspan x="-310.984" y="70">-</tspan>
                            <tspan x="-308.151" y="70">2</tspan>
                            <tspan x="-229.907" y="17">В</tspan>
                            <tspan x="-224.073" y="17">-</tspan>
                            <tspan x="-221.24" y="17">Бай</tspan>
                            -
                            <tspan x="-203.407" y="17">1</tspan>
                            <tspan x="-269.783" y="70">Ф</tspan>
                            -
                            <tspan x="-259.45" y="70">Бай</tspan>
                            -
                            <tspan x="-241.616" y="70">минал</tspan>
                            -
                            <tspan x="-213.783" y="70">1</tspan>
                            <tspan x="-164.89" y="70">Ф</tspan>
                            -
                            <tspan x="-154.557" y="70">Киностудия</tspan>
                            <tspan x="-123.47" y="17">В</tspan>
                            <tspan x="-117.637" y="17">-</tspan>
                            <tspan x="-114.804" y="17">К</tspan>
                            <tspan x="-26.8063" y="18">В</tspan>
                            <tspan x="-20.973" y="18">-</tspan>
                            <tspan x="-18.1396" y="18">Ф</tspan>
                            -
                            <tspan x="-7.80627" y="18">Пах</tspan>
                            <tspan x="-61.3046" y="72">Ф</tspan>
                            -
                            <tspan x="-50.9713" y="72">Пахтакор</tspan>
                            <tspan x="-689.311" y="-296">В</tspan>
                            <tspan x="-683.477" y="-296">-</tspan>
                            Оф-1
                            <tspan x="-606.721" y="-297">В</tspan>
                            -
                            <tspan x="-598.055" y="-297">Гул</tspan>
                            <tspan x="-583.388" y="-297">-</tspan>
                            <tspan x="-580.555" y="-297">1</tspan>
                            <tspan x="-521.643" y="-297">В</tspan>
                            -
                            <tspan x="-512.976" y="-297">Н</tspan>
                            -1
                            <tspan x="-434.64" y="-296">В</tspan>
                            -
                            <tspan x="-425.973" y="-296">Чап</tspan>
                            <tspan x="-410.307" y="-296">-</tspan>
                            <tspan x="-407.473" y="-296">1</tspan>
                            <tspan x="-348.407" y="-295">В</tspan>
                            <tspan x="-342.573" y="-295">-</tspan>
                            <tspan x="-339.74" y="-295">Ум</tspan>
                            <tspan x="-327.573" y="-295">-</tspan>
                            <tspan x="-324.74" y="-295">1</tspan>
                            <tspan x="-263.361" y="-296">В</tspan>
                            <tspan x="-257.528" y="-296">-</tspan>
                            <tspan x="-254.694" y="-296">Ум</tspan>
                            <tspan x="-242.528" y="-296">-</tspan>
                            <tspan x="-239.694" y="-296">2</tspan>
                            <tspan x="-190.713" y="-295">В</tspan>
                            <tspan x="-184.879" y="-295">-</tspan>
                            <tspan x="-182.046" y="-295">Гул</tspan>
                            <tspan x="-167.379" y="-295">-</tspan>
                            <tspan x="-164.546" y="-295">2</tspan>
                            <tspan x="-71.4738" y="-326">Ф.Офтоб</tspan>
                            <tspan x="-36.1404" y="-326">-</tspan>
                            <tspan x="-33.3071" y="-326">2</tspan>
                            <tspan x="-36.0845" y="-296">В</tspan>
                            <tspan x="-30.2512" y="-296">-</tspan>
                            <tspan x="-27.4178" y="-296">О</tspan>
                            <tspan x="-20.7512" y="-296">-</tspan>
                            <tspan x="-17.9178" y="-296">2</tspan>
                            <tspan x="41.97" y="-296">В</tspan>
                            <tspan x="47.8033" y="-296">-</tspan>
                            <tspan x="50.6367" y="-296">Н</tspan>
                            <tspan x="57.3033" y="-296">-</tspan>
                            <tspan x="60.1367" y="-296">2</tspan>
                            <tspan x="119.587" y="-297">В</tspan>
                            <tspan x="125.42" y="-297">-</tspan>
                            <tspan x="128.254" y="-297">Чап</tspan>
                            <tspan x="143.92" y="-297">-</tspan>
                            <tspan x="146.754" y="-297">2</tspan>
                            <tspan x="197.467" y="-297">В.2СТП</tspan>
                            <tspan x="228.634" y="-297">-</tspan>
                            <tspan x="231.467" y="-297">4</tspan>
                            <tspan x="273.426" y="-296">В.1СТП</tspan>
                            <tspan x="304.593" y="-296">-</tspan>
                            <tspan x="307.426" y="-296">4</tspan>
                            <tspan x="-466.16" y="-376">1</tspan>
                            <tspan x="-461.826" y="-376">-</tspan>
                            СШ 10 кВ
                            <tspan x="264.912" y="-377">2</tspan>
                            <tspan x="269.246" y="-377">-</tspan>
                            <tspan x="272.079" y="-377">СШ 10 кВ</tspan>
                            <tspan x="109.307" y="-443">Ф.Багустан2</tspan>
                            <tspan x="142.442" y="-413">В.БГ</tspan>
                            <tspan x="161.609" y="-413">-</tspan>
                            <tspan x="164.442" y="-413">2</tspan>
                            <tspan x="223.541" y="-412">В</tspan>
                            <tspan x="229.375" y="-412">-</tspan>
                            <tspan x="232.208" y="-412">Б</tspan>
                            <tspan x="237.875" y="-412">-</tspan>
                            <tspan x="240.708" y="-412">2</tspan>
                            <tspan x="-677.219" y="-245">Т</tspan>
                            <tspan x="-671.386" y="-245">-</tspan>
                            11-10
                            <tspan x="-674.822" y="-174">Т</tspan>
                            <tspan x="-668.988" y="-174">-</tspan>
                            11-35
                            <tspan x="-658.751" y="-441">Ф.Бабур</tspan>
                            <tspan x="-625.585" y="-441">-</tspan>
                            <tspan x="-622.751" y="-441">1</tspan>
                            <tspan x="-625.957" y="-414">В</tspan>
                            -Баб
                            <tspan x="-602.957" y="-414">-</tspan>
                            <tspan x="-600.124" y="-414">1</tspan>
                            <tspan x="-567.747" y="-442">Ф.Богустан</tspan>
                            -1
                            <tspan x="-529.672" y="-415">В</tspan>
                            -
                            <tspan x="-521.006" y="-415">Бг</tspan>
                            -1
                            <tspan x="191.348" y="-442">Ф</tspan>
                            -
                            <tspan x="201.681" y="-442">Бобур</tspan>
                            -
                            <tspan x="228.014" y="-442">2</tspan>
                            <tspan x="83.0855" y="17">В.Яч7</tspan>
                            -
                            <tspan x="109.419" y="17">Т</tspan>
                            <tspan x="-15.932" y="-421">400</tspan>
                            кВА
                            <tspan x="-15.932" y="-410">Т</tspan>
                            <tspan x="-10.0986" y="-410">-</tspan>
                            <tspan x="-7.26532" y="-410">5</tspan>
                        </text>
                        <path
                                d="M254.515 287.863 338.114 287.863 338.114 301.454 254.515 301.454Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M254.515 301.454 338.114 301.454 338.114 315.046 254.515 315.046Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M253.848 301.454 338.781 301.454"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M254.515 287.197 254.515 315.712"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M338.114 287.197 338.114 315.712"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M253.848 287.863 338.781 287.863"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M253.848 315.046 338.781 315.046"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip1)">
                            <text id="g1325"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(258.294 298)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip2)">
                            <text id="g1324"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(258.294 311)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip4)" transform="matrix(1.16667 0 -0 1 331 288)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip6)" transform="matrix(1 0 -0 1.02857 332 302)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M253.816 360.205 337.416 360.205 337.416 373.796 253.816 373.796Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M253.816 373.796 337.416 373.796 337.416 387.387 253.816 387.387Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M253.15 373.796 338.083 373.796"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M253.816 359.538 253.816 388.054"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M337.416 359.538 337.416 388.054"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M253.15 360.205 338.083 360.205"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M253.15 387.387 338.083 387.387"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip7)">
                            <text id="g1364"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(257.596 370)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip8)">
                            <text id="g1363"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(257.596 384)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip9)" transform="matrix(1 0 -0 1.02857 331 361)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip10)" transform="matrix(1 0 -0 1.11429 331 374)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M0 13.5C-1.65507e-15 6.04416 5.8203-1.71873e-15 13-3.43746e-15 20.1797-6.87492e-15 26 6.04416 26 13.5 26 20.9558 20.1797 27 13 27 5.8203 27-8.27537e-15 20.9558 0 13.5Z"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 158.5 364.5)"
                        />
                        <path
                                d="M0 13.5C-1.71873e-15 6.04416 6.04416-1.71873e-15 13.5-3.43746e-15 20.9558-6.87492e-15 27 6.04416 27 13.5 27 20.9558 20.9558 27 13.5 27 6.04416 27-8.59365e-15 20.9558 0 13.5Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 147.5 345.5)"
                        />
                        <path
                                d="M0 13.5C-1.65507e-15 6.04416 5.8203-1.71873e-15 13-3.43746e-15 20.1797-6.87492e-15 26 6.04416 26 13.5 26 20.9558 20.1797 27 13 27 5.8203 27-8.27537e-15 20.9558 0 13.5Z"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 136.5 364.5)"
                        />
                        <path
                                d="M174.5 327.5 240.95 327.5"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M184.5 351.5 240.598 351.5"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M93.5001 351.5 136.52 351.5"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.33318-0.0203504 4.93241 235.769 2.26605 235.81-1.33318 0.0203504ZM3.59923 235.79 7.55806 233.062 3.68063 241.122-0.441007 233.184Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 94.5001 350.622)"
                        />
                        <path
                                d="M1.33333-2.78259e-06 1.33344 50.3066-1.33323 50.3066-1.33333 2.78259e-06ZM4.0001 50.3065C4.00011 52.5157 2.20925 54.3066 0.000113335 54.3066-2.20903 54.3066-3.99989 52.5157-3.99989 50.3066-3.9999 48.0974-2.20904 46.3066 9.66391e-05 46.3066 2.20924 46.3066 4.0001 48.0974 4.0001 50.3065Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 239.5 327.807)"
                        />
                        <path
                                d="M119.686 563.496 212.795 563.496 212.795 576.296 119.686 576.296Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.686 576.296 212.795 576.296 212.795 589.096 119.686 589.096Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.686 589.096 212.795 589.096 212.795 601.896 119.686 601.896Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.686 601.896 212.795 601.896 212.795 614.696 119.686 614.696Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.686 614.696 212.795 614.696 212.795 627.496 119.686 627.496Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.686 627.496 212.795 627.496 212.795 640.296 119.686 640.296Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.02 576.296 213.461 576.296"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.02 589.096 213.461 589.096"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.02 601.896 213.461 601.896"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.02 614.696 213.461 614.696"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.02 627.496 213.461 627.496"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.686 562.829 119.686 640.962"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M212.795 562.829 212.795 640.962"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.02 563.496 213.461 563.496"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M119.02 640.296 213.461 640.296"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip11)">
                            <text id="g979"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(123.466 573)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip12)">
                            <text id="g981"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(123.466 586)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip13)">
                            <text id="a979"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(123.466 599)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip14)">
                            <text  id="k979"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(123.466 612)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip15)">
                            <text id="n979"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(123.466 625)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip16)">
                            <text id="w979" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(123.466 637)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M183.05 456.163 266.649 456.163 266.649 469.755 183.05 469.755Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M183.05 469.755 266.649 469.755 266.649 483.346 183.05 483.346Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M182.383 469.755 267.316 469.755"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M183.05 455.497 183.05 484.012"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M266.649 455.497 266.649 484.012"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M182.383 456.163 267.316 456.163"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M182.383 483.346 267.316 483.346"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip17)">
                            <text id="g1255"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(186.829 466)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip18)">
                            <text id="g1256"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(186.829 480)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip19)" transform="matrix(1 0 -0 1.02857 260 457)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip20)" transform="matrix(1 0 -0 1.02857 261 470)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path id="c12562"
                                d="M0 13C-1.65507e-15 5.8203 5.8203-1.65507e-15 13-3.31015e-15 20.1797-6.62029e-15 26 5.8203 26 13 26 20.1797 20.1797 26 13 26 5.8203 26-8.27537e-15 20.1797 0 13Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 153.5 493.5)"
                        />
                        <path id="c12561"
                                d="M0 13.5C-1.65507e-15 6.04416 5.8203-1.71873e-15 13-3.43746e-15 20.1797-6.87492e-15 26 6.04416 26 13.5 26 20.9558 20.1797 27 13 27 5.8203 27-8.27537e-15 20.9558 0 13.5Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 153.5 472.5)"
                        />
                        <path
                                d="M-1.33896 13.4986-1.06571 10.5612-0.240024 7.74008 1.13033 5.20492 2.84818 3.00607 4.98474 1.21413 7.39061-0.160661 10.0974-1.06293 13-1.33937 15.9026-1.06293 18.6094-0.160661 21.0153 1.21413 23.142 2.9978 24.935 5.20468 26.244 7.75375 27.0657 10.5612 27.339 13.4986 27.0657 16.5045 26.242 19.2503 24.935 21.7953 23.142 24.0022 21.0153 25.7859 18.6094 27.1607 15.9026 28.0629 13 28.3394 10.0974 28.0629 7.39061 27.1607 4.98474 25.7859 2.84818 23.9939 1.13033 21.7951-0.237868 19.2639-1.0657 16.5045ZM1.57786 16.1293 1.5271 15.8669 2.2771 18.3669 2.17294 18.116 3.42294 20.4285 3.3007 20.2416 4.8632 22.2416 4.66932 22.0409 6.60682 23.6659 6.41152 23.5298 8.59902 24.7798 8.35914 24.6726 10.7966 25.4851 10.5014 25.4227 13.1264 25.6727 12.8736 25.6727 15.4986 25.4227 15.2034 25.4851 17.6409 24.6726 17.401 24.7798 19.5885 23.5298 19.3932 23.6659 21.3307 22.0409 21.1527 22.2217 22.7777 20.2217 22.6264 20.4534 23.8139 18.1409 23.7229 18.3669 24.4729 15.8669 24.4221 16.1293 24.6721 13.3793 24.6724 13.6235 24.4224 10.936 24.4704 11.187 23.7204 8.62453 23.8139 8.85907 22.6264 6.54657 22.7777 6.77829 21.1527 4.77829 21.3307 4.95909 19.3932 3.33409 19.5885 3.47016 17.401 2.22016 17.6409 2.32741 15.2034 1.51491 15.4986 1.57733 12.8736 1.32733 13.1264 1.32733 10.5014 1.57733 10.7966 1.51491 8.35914 2.32741 8.59902 2.22016 6.41152 3.47016 6.60682 3.33409 4.66932 4.95909 4.8632 4.75836 3.3007 6.75836 3.42294 6.57152 2.17294 8.88402 2.27965 8.62453 1.52965 11.187 1.5776 10.936 1.3276 13.6235 1.32786 13.3793Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 153.5 472.5)"
                        />
                        <path
                                d="M167.833 402.5 167.833 445.936 165.167 445.936 165.167 402.5ZM162.5 402.5C162.5 400.291 164.291 398.5 166.5 398.5 168.709 398.5 170.5 400.291 170.5 402.5 170.5 404.709 168.709 406.5 166.5 406.5 164.291 406.5 162.5 404.709 162.5 402.5Z"
                                fill="#663300"
                        />
                        <rect id="c1256"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 157.5 432.5)"
                        />
                        <path
                                d="M1241.15 512.5 1083.5 512.5"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1131.6 526.031 1131.5 514.5"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.33333-7.52428e-06 1.33344 18.6041-1.33323 18.6041-1.33333 7.52428e-06ZM-4 2.25729e-05C-4.00001-2.20912-2.20916-3.99999-2.25729e-05-4 2.20912-4.00001 3.99999-2.20916 4-2.25729e-05 4.00001 2.20912 2.20916 3.99999 2.25729e-05 4-2.20912 4.00001-3.99999 2.20916-4 2.25729e-05Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 1131.5 513.104)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1193.45 522)"
                        >
                            СШ 10 кВ Г
                            <tspan x="47.3334" y="0">-</tspan>
                            <tspan x="50.1666" y="0">1</tspan>
                            <tspan x="-91.1267" y="-65">Т</tspan>
                            <tspan x="-85.2935" y="-65">-</tspan>
                            <tspan x="-82.4601" y="-65">1</tspan>
                            <tspan x="-110.793" y="-54">10/35 кВ</tspan>
                            <tspan x="-117.127" y="-44">12500 кВа</tspan>
                            <tspan x="-132.46" y="-33">SF11</tspan>
                            <tspan x="-113.627" y="-33">-</tspan>
                            <tspan x="-110.793" y="-33">12500</tspan>
                            <tspan x="-89.1267" y="-33">/</tspan>
                            <tspan x="-86.7935" y="-33">35</tspan>
                            <tspan x="-105.344" y="-89">В</tspan>
                            <tspan x="-99.5104" y="-89">-</tspan>
                            <tspan x="-96.677" y="-89">Т</tspan>
                            <tspan x="-90.8436" y="-89">-</tspan>
                            <tspan x="-88.0104" y="-89">2</tspan>
                            <tspan x="-93.8856" y="6">Г</tspan>
                            -
                            <tspan x="-85.5522" y="6">1</tspan>
                            <tspan x="-109.386" y="17">10,5 кВ</tspan>
                            <tspan x="-110.219" y="27">8,3 мВт</tspan>
                            <tspan x="-139.886" y="38">SF8300</tspan>
                            -
                            <tspan x="-109.552" y="38">24/3650</tspan>
                        </text>
                        <path
                                d="M1084.9 563.823 1178.01 563.823 1178.01 576.623 1084.9 576.623Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.9 576.623 1178.01 576.623 1178.01 589.423 1084.9 589.423Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.9 589.423 1178.01 589.423 1178.01 602.223 1084.9 602.223Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.9 602.223 1178.01 602.223 1178.01 615.023 1084.9 615.023Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.9 615.023 1178.01 615.023 1178.01 627.823 1084.9 627.823Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.9 627.823 1178.01 627.823 1178.01 640.623 1084.9 640.623Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.23 576.623 1178.67 576.623"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.23 589.423 1178.67 589.423"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.23 602.223 1178.67 602.223"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.23 615.023 1178.67 615.023"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.23 627.823 1178.67 627.823"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.9 563.156 1084.9 641.289"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1178.01 563.156 1178.01 641.289"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.23 563.823 1178.67 563.823"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1084.23 640.623 1178.67 640.623"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip21)">
                            <text id="g956"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1088.68 574)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip22)">
                            <text id="g958"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1088.68 587)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip23)">
                            <text id="a956"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1088.68 599)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip24)">
                            <text id="k956"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1088.68 612)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip25)">
                            <text id="n956"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1088.68 625)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip26)">
                            <text id="w956" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1088.68 638)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M1148.01 456.24 1231.61 456.24 1231.61 469.832 1148.01 469.832Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1148.01 469.832 1231.61 469.832 1231.61 483.423 1148.01 483.423Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1147.35 469.832 1232.28 469.832"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1148.01 455.574 1148.01 484.089"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1231.61 455.574 1231.61 484.089"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1147.35 456.24 1232.28 456.24"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1147.35 483.423 1232.28 483.423"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip27)">
                            <text id="g1140"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1151.79 466)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip28)">
                            <text id="g1141"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1151.79 480)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip29)" transform="matrix(1 0 -0 1.02857 1225 457)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip30)" transform="matrix(1.07692 0 -0 1 1225 470)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.142857 0.142857)"
                            ></use>
                        </g>
                        <path id="c11412"
                                d="M0 13.5C-1.71873e-15 6.04416 6.04416-1.71873e-15 13.5-3.43746e-15 20.9558-6.87492e-15 27 6.04416 27 13.5 27 20.9558 20.9558 27 13.5 27 6.04416 27-8.59365e-15 20.9558 0 13.5Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1118.5 494.5)"
                        />
                        <path id="c11411"
                                d="M0 13C-1.71873e-15 5.8203 6.04416-1.65507e-15 13.5-3.31015e-15 20.9558-6.62029e-15 27 5.8203 27 13 27 20.1797 20.9558 26 13.5 26 6.04416 26-8.59365e-15 20.1797 0 13Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1118.5 472.5)"
                        />
                        <path
                                d="M-1.33937 13-1.06293 10.0974-0.160661 7.39061 1.21413 4.98474 3.00607 2.84818 5.20492 1.13033 7.74008-0.240024 10.5612-1.06571 13.4986-1.33896 16.5045-1.0657 19.2639-0.237868 21.7951 1.13033 23.9939 2.84818 25.7859 4.98474 27.1607 7.39061 28.0629 10.0974 28.3394 13 28.0629 15.9026 27.1607 18.6094 25.7859 21.0153 24.0022 23.142 21.7953 24.935 19.2503 26.242 16.5045 27.0657 13.4986 27.339 10.5612 27.0657 7.75375 26.244 5.20468 24.935 2.9978 23.142 1.21413 21.0153-0.160661 18.6094-1.06293 15.9026ZM1.57733 15.4986 1.51491 15.2034 2.32741 17.6409 2.22016 17.401 3.47016 19.5885 3.33409 19.3932 4.95909 21.3307 4.77829 21.1527 6.77829 22.7777 6.54657 22.6264 8.85907 23.8139 8.62453 23.7204 11.187 24.4704 10.936 24.4224 13.6235 24.6724 13.3793 24.6721 16.1293 24.4221 15.8669 24.4729 18.3669 23.7229 18.1409 23.8139 20.4534 22.6264 20.2217 22.7777 22.2217 21.1527 22.0409 21.3307 23.6659 19.3932 23.5298 19.5885 24.7798 17.401 24.6726 17.6409 25.4851 15.2034 25.4227 15.4986 25.6727 12.8736 25.6727 13.1264 25.4227 10.5014 25.4851 10.7966 24.6726 8.35914 24.7798 8.59902 23.5298 6.41152 23.6659 6.60682 22.0409 4.66932 22.2416 4.8632 20.2416 3.3007 20.4285 3.42294 18.116 2.17294 18.3669 2.2771 15.8669 1.5271 16.1293 1.57786 13.3793 1.32786 13.6235 1.3276 10.936 1.5776 11.187 1.52965 8.62453 2.27965 8.88402 2.17294 6.57152 3.42294 6.75836 3.3007 4.75836 4.8632 4.95909 4.66932 3.33409 6.60682 3.47016 6.41152 2.22016 8.59902 2.32741 8.35914 1.51491 10.7966 1.57733 10.5014 1.32733 13.1264 1.32733 12.8736Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 1118.5 472.5)"
                        />
                        <path
                                d="M1132.83 402.5 1132.83 445.936 1130.17 445.936 1130.17 402.5ZM1127.5 402.5C1127.5 400.291 1129.29 398.5 1131.5 398.5 1133.71 398.5 1135.5 400.291 1135.5 402.5 1135.5 404.709 1133.71 406.5 1131.5 406.5 1129.29 406.5 1127.5 404.709 1127.5 402.5Z"
                                fill="#663300"
                        />
                        <rect id="c1141"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1122.5 433.5)"
                        />
                        <path
                                d="M1.33333-2.78259e-06 1.33344 50.3066-1.33323 50.3066-1.33333 2.78259e-06ZM-4 8.34777e-06C-4-2.20913-2.20915-4-8.34777e-06-4 2.20913-4 4-2.20915 4-8.34777e-06 4 2.20913 2.20915 4 8.34777e-06 4-2.20913 4-4 2.20915-4 8.34777e-06Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 239.5 402.807)"
                        />
                        <path
                                d="M59.9757 70.448 143.575 70.448 143.575 84.0392 59.9757 84.0392Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M59.9757 84.0392 143.575 84.0392 143.575 97.6303 59.9757 97.6303Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M59.3091 84.0392 144.242 84.0392"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M59.9757 69.7813 59.9757 98.297"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M143.575 69.7813 143.575 98.297"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M59.3091 70.448 144.242 70.448"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M59.3091 97.6303 144.242 97.6303"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip31)">
                            <text id="g1210"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(63.7553 80)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip32)">
                            <text id="g1209"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(63.7553 94)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip33)" transform="matrix(1 0 -0 1.02857 137 71)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip34)" transform="matrix(1.16667 0 -0 1 137 85)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <rect id="c1210"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 88.5001 143.5)"
                        />
                        <rect id="c1364"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 230.5 383.5)"
                        />
                        <rect id="c1325"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 230.5 311.5)"
                        />
                        <rect
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 548.5 286.5)"
                        />
                        <path
                                d="M1.33333-2.54403e-06 1.33343 49.6905-1.33324 49.6905-1.33333 2.54403e-06ZM-4 7.6321e-06C-4-2.20913-2.20915-4-7.6321e-06-4 2.20913-4 4-2.20915 4-7.6321e-06 4 2.20913 2.20915 4 7.6321e-06 4-2.20913 4-4 2.20915-4 7.6321e-06ZM9.48107e-05 49.6905 4.00009 47.0238 0.000104987 55.0238-3.99991 47.0238Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 522.5 402.524)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(589.785 376)"
                        >
                            В
                            <tspan x="5.83331" y="0">-</tspan>
                            <tspan x="8.66663" y="0">Л</tspan>
                            -
                            <tspan x="18" y="0">СС</tspan>
                            <tspan x="30.6666" y="0">-</tspan>
                            <tspan x="33.5" y="0">2</tspan>
                            <tspan x="-54.8577" y="1">В</tspan>
                            <tspan x="-49.0244" y="1">-</tspan>
                            <tspan x="-46.191" y="1">Л</tspan>
                            -
                            <tspan x="-36.8577" y="1">СС</tspan>
                            <tspan x="-24.191" y="1">-</tspan>
                            <tspan x="-21.3577" y="1">1</tspan>
                            <tspan x="-91.0792" y="-35">Л</tspan>
                            -
                            <tspan x="-81.7458" y="-35">СувСоз</tspan>
                            -
                            <tspan x="-49.4125" y="-35">1</tspan>
                            <tspan x="26.6761" y="-35">Л</tspan>
                            -
                            <tspan x="36.0095" y="-35">СувСоз</tspan>
                            -
                            <tspan x="68.3428" y="-35">2</tspan>
                        </text>
                        <rect id="c1387"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 513.5 381.5)"
                        />
                        <path
                                d="M1.33333-2.54403e-06 1.33343 49.6905-1.33324 49.6905-1.33333 2.54403e-06ZM-4 7.6321e-06C-4-2.20913-2.20915-4-7.6321e-06-4 2.20913-4 4-2.20915 4-7.6321e-06 4 2.20913 2.20915 4 7.6321e-06 4-2.20913 4-4 2.20915-4 7.6321e-06ZM9.48107e-05 49.6905 4.00009 47.0238 0.000104987 55.0238-3.99991 47.0238Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 640.5 401.524)"
                        />
                        <rect id="c1402"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 631.5 381.5)"
                        />
                        <path
                                d="M421.113 357.952 504.713 357.952 504.713 371.544 421.113 371.544Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M421.113 371.544 504.713 371.544 504.713 385.135 421.113 385.135Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M420.446 371.544 505.379 371.544"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M421.113 357.286 421.113 385.801"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M504.713 357.286 504.713 385.801"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M420.446 357.952 505.379 357.952"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M420.446 385.135 505.379 385.135"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip35)">
                            <text id="g1387Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(424.893 368)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip36)">
                            <text id="g1387Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(424.893 382)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip37)" transform="matrix(1.06061 0 -0 1 498 359)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.120879 0.120879)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip38)" transform="matrix(1 0 -0 1.02857 499 372)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M655.207 358.493 738.806 358.493 738.806 372.085 655.207 372.085Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M655.207 372.085 738.806 372.085 738.806 385.676 655.207 385.676Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M654.54 372.085 739.473 372.085"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M655.207 357.827 655.207 386.342"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M738.806 357.827 738.806 386.342"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M654.54 358.493 739.473 358.493"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M654.54 385.676 739.473 385.676"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip39)">
                            <text id="g1402Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(658.986 368)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip40)">
                            <text id="g1402Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(658.986 382)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip41)" transform="matrix(1 0 -0 1.02857 732 359)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip42)" transform="matrix(1 0 -0 1.02857 733 373)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path id="c13012"
                                d="M0 13.5C-1.65507e-15 6.04416 5.8203-1.71873e-15 13-3.43746e-15 20.1797-6.87492e-15 26 6.04416 26 13.5 26 20.9558 20.1797 27 13 27 5.8203 27-8.27537e-15 20.9558 0 13.5Z"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 784.5 374.5)"
                        />
                        <path id="c13011"
                                d="M0 13.5C-1.65507e-15 6.04416 5.8203-1.71873e-15 13-3.43746e-15 20.1797-6.87492e-15 26 6.04416 26 13.5 26 20.9558 20.1797 27 13 27 5.8203 27-8.27537e-15 20.9558 0 13.5Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 784.5 352.5)"
                        />
                        <path
                                d="M-1.33896 13.4986-1.06571 10.5612-0.240024 7.74008 1.13033 5.20492 2.84818 3.00607 4.98474 1.21413 7.39061-0.160661 10.0974-1.06293 13-1.33937 15.9026-1.06293 18.6094-0.160661 21.0153 1.21413 23.142 2.9978 24.935 5.20468 26.244 7.75375 27.0657 10.5612 27.339 13.4986 27.0657 16.5045 26.242 19.2503 24.935 21.7953 23.142 24.0022 21.0153 25.7859 18.6094 27.1607 15.9026 28.0629 13 28.3394 10.0974 28.0629 7.39061 27.1607 4.98474 25.7859 2.84818 23.9939 1.13033 21.7951-0.237868 19.2639-1.0657 16.5045ZM1.57786 16.1293 1.5271 15.8669 2.2771 18.3669 2.17294 18.116 3.42294 20.4285 3.3007 20.2416 4.8632 22.2416 4.66932 22.0409 6.60682 23.6659 6.41152 23.5298 8.59902 24.7798 8.35914 24.6726 10.7966 25.4851 10.5014 25.4227 13.1264 25.6727 12.8736 25.6727 15.4986 25.4227 15.2034 25.4851 17.6409 24.6726 17.401 24.7798 19.5885 23.5298 19.3932 23.6659 21.3307 22.0409 21.1527 22.2217 22.7777 20.2217 22.6264 20.4534 23.8139 18.1409 23.7229 18.3669 24.4729 15.8669 24.4221 16.1293 24.6721 13.3793 24.6724 13.6235 24.4224 10.936 24.4704 11.187 23.7204 8.62453 23.8139 8.85907 22.6264 6.54657 22.7777 6.77829 21.1527 4.77829 21.3307 4.95909 19.3932 3.33409 19.5885 3.47016 17.401 2.22016 17.6409 2.32741 15.2034 1.51491 15.4986 1.57733 12.8736 1.32733 13.1264 1.32733 10.5014 1.57733 10.7966 1.51491 8.35914 2.32741 8.59902 2.22016 6.41152 3.47016 6.60682 3.33409 4.66932 4.95909 4.8632 4.75836 3.3007 6.75836 3.42294 6.57152 2.17294 8.88402 2.27965 8.62453 1.52965 11.187 1.5776 10.936 1.3276 13.6235 1.32786 13.3793Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 784.5 352.5)"
                        />
                        <path
                                d="M6.57049 0.0539698C10.6807-0.425159 14.4288 2.29627 14.9422 6.13246 15.4555 9.96865 12.5397 13.4669 8.4295 13.946 7.78883 14.0207 7.14051 14.0179 6.50062 13.9376"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 -0 -0 -1 789.5 409.5)"
                        />
                        <path
                                d="M0 0 0.000104987 21.829"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 797.5 396.329)"
                        />
                        <path
                                d="M1.33333-2.86381e-06 1.33344 48.8799-1.33323 48.8799-1.33333 2.86381e-06ZM4.0001 48.8799C4.00011 51.089 2.20925 52.8799 0.000113578 52.8799-2.20903 52.8799-3.99989 51.089-3.99989 48.8799-3.9999 46.6708-2.20904 44.8799 9.63955e-05 44.8799 2.20924 44.8799 4.0001 46.6707 4.0001 48.8799Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 797.5 325.38)"
                        />
                        <rect id="c1301"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 788.5 310.5)"
                        />
                        <path
                                d="M0 13C-1.65507e-15 5.8203 5.8203-1.65507e-15 13-3.31015e-15 20.1797-6.62029e-15 26 5.8203 26 13 26 20.1797 20.1797 26 13 26 5.8203 26-8.27537e-15 20.1797 0 13Z"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1139.5 364.5)"
                        />
                        <path
                                d="M0 13.5C-1.65507e-15 6.04416 5.8203-1.71873e-15 13-3.43746e-15 20.1797-6.87492e-15 26 6.04416 26 13.5 26 20.9558 20.1797 27 13 27 5.8203 27-8.27537e-15 20.9558 0 13.5Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1128.5 345.5)"
                        />
                        <path
                                d="M0 13.5C-1.65507e-15 6.04416 5.8203-1.71873e-15 13-3.43746e-15 20.1797-6.87492e-15 26 6.04416 26 13.5 26 20.9558 20.1797 27 13 27 5.8203 27-8.27537e-15 20.9558 0 13.5Z"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1117.5 364.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1062.04 304)"
                        >
                            Т
                            <tspan x="5.83337" y="0">-</tspan>
                            <tspan x="8.66675" y="0">11</tspan>
                            <tspan x="17.3334" y="0">-</tspan>
                            <tspan x="20.1667" y="0">10</tspan>
                            <tspan x="3.2561" y="72">Т</tspan>
                            <tspan x="9.08948" y="72">-</tspan>
                            <tspan x="11.9227" y="72">11</tspan>
                            <tspan x="20.5895" y="72">-</tspan>
                            <tspan x="23.4227" y="72">35</tspan>
                        </text>
                        <path
                                d="M0 0 79.0031 0.000104987"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1128.5 328.5)"
                        />
                        <path
                                d="M0 0 66.8092 0.000104987"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1117.31 351.5)"
                        />
                        <path
                                d="M1.33333-2.78259e-06 1.33344 50.3066-1.33323 50.3066-1.33333 2.78259e-06ZM4.0001 50.3065C4.00011 52.5157 2.20925 54.3066 0.000113335 54.3066-2.20903 54.3066-3.99989 52.5157-3.99989 50.3066-3.9999 48.0974-2.20904 46.3066 9.66391e-05 46.3066 2.20924 46.3066 4.0001 48.0974 4.0001 50.3065Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 1050.5 327.807)"
                        />
                        <path
                                d="M1.33333-2.78259e-06 1.33344 50.3066-1.33323 50.3066-1.33333 2.78259e-06ZM-4 8.34777e-06C-4-2.20913-2.20915-4-8.34777e-06-4 2.20913-4 4-2.20915 4-8.34777e-06 4 2.20913 2.20915 4 8.34777e-06 4-2.20913 4-4 2.20915-4 8.34777e-06Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 1051.5 402.807)"
                        />
                        <rect id="c1187"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1042.5 383.5)"
                        />
                        <rect id="c1348"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1040.5 311.5)"
                        />
                        <path
                                d="M1165.5 353.5 1222.15 353.5"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.33333-5.71581e-07 1.33344 239.571-1.33323 239.571-1.33333 5.71581e-07ZM0.000102701 239.571 4.0001 236.904 0.000104987 244.904-3.9999 236.904Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 1220.5 353.404)"
                        />
                        <rect id="c1233"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1211.5 142.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1189.48 108)"
                        >
                            Л-
                            <tspan x="9.33337" y="0">Озод</tspan>
                            <tspan x="28.1666" y="0">-</tspan>
                            <tspan x="31" y="0">Юксак</tspan>
                            -
                            <tspan x="61.8334" y="0">1</tspan>
                        </text>
                        <path
                                d="M1178.52 72.5764 1262.12 72.5764 1262.12 86.1676 1178.52 86.1676Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1178.52 86.1676 1262.12 86.1676 1262.12 99.7587 1178.52 99.7587Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.85 86.1676 1262.79 86.1676"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1178.52 71.9097 1178.52 100.425"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1262.12 71.9097 1262.12 100.425"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.85 72.5764 1262.79 72.5764"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.85 99.7587 1262.79 99.7587"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip43)">
                            <text id="g1233"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1182.3 83)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip44)">
                            <text id="g1232"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1182.3 96)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip45)" transform="matrix(1.16667 0 -0 1 1255 73)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip46)" transform="matrix(1 0 -0 1.02857 1256 87)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1133.38 373)"
                        >
                            Т
                            <tspan x="5.83337" y="0">-</tspan>
                            <tspan x="8.66675" y="0">22</tspan>
                            <tspan x="-15.3333" y="11">10</tspan>
                            <tspan x="-6.66663" y="11">/</tspan>
                            <tspan x="-4.33325" y="11">35/110</tspan>
                            <tspan x="21.8334" y="11">кВ</tspan>
                            <tspan x="-18.3333" y="21">SFSZ11</tspan>
                            <tspan x="11.1667" y="21">-</tspan>
                            <tspan x="14" y="21">25000</tspan>
                        </text>
                        <path
                                d="M1.33333-2.96472e-06 1.33344 47.2162-1.33323 47.2162-1.33333 2.96472e-06ZM-4 8.89414e-06C-4-2.20913-2.20915-3.99999-8.89414e-06-4 2.20913-4 3.99999-2.20915 4-8.89414e-06 4 2.20913 2.20915 3.99999 8.89414e-06 4-2.20913 4-3.99999 2.20915-4 8.89414e-06Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 379.5 540.716)"
                        />
                        <path id="c10942"
                                d="M0 13C-1.65507e-15 5.8203 5.8203-1.65507e-15 13-3.31015e-15 20.1797-6.62029e-15 26 5.8203 26 13 26 20.1797 20.1797 26 13 26 5.8203 26-8.27537e-15 20.1797 0 13Z"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 366.5 493.5)"
                        />
                        <path id="c10941"
                                d="M0 13.5C-1.65507e-15 6.04416 5.8203-1.71873e-15 13-3.43746e-15 20.1797-6.87492e-15 26 6.04416 26 13.5 26 20.9558 20.1797 27 13 27 5.8203 27-8.27537e-15 20.9558 0 13.5Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 366.5 472.5)"
                        />
                        <path
                                d="M-1.33896 13.4986-1.06571 10.5612-0.240024 7.74008 1.13033 5.20492 2.84818 3.00607 4.98474 1.21413 7.39061-0.160661 10.0974-1.06293 13-1.33937 15.9026-1.06293 18.6094-0.160661 21.0153 1.21413 23.142 2.9978 24.935 5.20468 26.244 7.75375 27.0657 10.5612 27.339 13.4986 27.0657 16.5045 26.242 19.2503 24.935 21.7953 23.142 24.0022 21.0153 25.7859 18.6094 27.1607 15.9026 28.0629 13 28.3394 10.0974 28.0629 7.39061 27.1607 4.98474 25.7859 2.84818 23.9939 1.13033 21.7951-0.237868 19.2639-1.0657 16.5045ZM1.57786 16.1293 1.5271 15.8669 2.2771 18.3669 2.17294 18.116 3.42294 20.4285 3.3007 20.2416 4.8632 22.2416 4.66932 22.0409 6.60682 23.6659 6.41152 23.5298 8.59902 24.7798 8.35914 24.6726 10.7966 25.4851 10.5014 25.4227 13.1264 25.6727 12.8736 25.6727 15.4986 25.4227 15.2034 25.4851 17.6409 24.6726 17.401 24.7798 19.5885 23.5298 19.3932 23.6659 21.3307 22.0409 21.1527 22.2217 22.7777 20.2217 22.6264 20.4534 23.8139 18.1409 23.7229 18.3669 24.4729 15.8669 24.4221 16.1293 24.6721 13.3793 24.6724 13.6235 24.4224 10.936 24.4704 11.187 23.7204 8.62453 23.8139 8.85907 22.6264 6.54657 22.7777 6.77829 21.1527 4.77829 21.3307 4.95909 19.3932 3.33409 19.5885 3.47016 17.401 2.22016 17.6409 2.32741 15.2034 1.51491 15.4986 1.57733 12.8736 1.32733 13.1264 1.32733 10.5014 1.57733 10.7966 1.51491 8.35914 2.32741 8.59902 2.22016 6.41152 3.47016 6.60682 3.33409 4.66932 4.95909 4.8632 4.75836 3.3007 6.75836 3.42294 6.57152 2.17294 8.88402 2.27965 8.62453 1.52965 11.187 1.5776 10.936 1.3276 13.6235 1.32786 13.3793Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 366.5 472.5)"
                        />
                        <path
                                d="M380.833 402.5 380.833 445.936 378.167 445.936 378.167 402.5ZM375.5 402.5C375.5 400.291 377.291 398.5 379.5 398.5 381.709 398.5 383.5 400.291 383.5 402.5 383.5 404.709 381.709 406.5 379.5 406.5 377.291 406.5 375.5 404.709 375.5 402.5Z"
                                fill="#663300"
                        />
                        <rect id="c1094"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 370.5 432.5)"
                        />
                        <rect id="c1492"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 325.5 573.5)"
                        />
                        <path
                                d="M1.33334 5.33333 1.33344 55.7315-1.33323 55.7315-1.33332 5.33334ZM1.00469e-05 5.33333-3.99998 8.00001 0 0 4.00002 7.99999ZM4.0001 55.7315C4.00011 57.9407 2.20925 59.7315 0.000112522 59.7315-2.20903 59.7316-3.99989 57.9407-3.99989 55.7316-3.9999 53.5224-2.20904 51.7315 9.74517e-05 51.7315 2.20924 51.7315 4.0001 53.5224 4.0001 55.7315Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 430.5 596.232)"
                        />
                        <rect id="c1477"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 421.5 572.5)"
                        />
                        <path
                                d="M1.33334 5.33333 1.33344 55.7315-1.33323 55.7315-1.33332 5.33334ZM1.00469e-05 5.33333-3.99998 8.00001 0 0 4.00002 7.99999ZM4.0001 55.7315C4.00011 57.9407 2.20925 59.7315 0.000112522 59.7315-2.20903 59.7316-3.99989 57.9407-3.99989 55.7316-3.9999 53.5224-2.20904 51.7315 9.74517e-05 51.7315 2.20924 51.7315 4.0001 53.5224 4.0001 55.7315Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 534.5 597.232)"
                        />
                        <rect id="c1432"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 525.5 574.5)"
                        />
                        <path
                                d="M1.33333-2.96472e-06 1.33344 47.2162-1.33323 47.2162-1.33333 2.96472e-06ZM-4 8.89414e-06C-4-2.20913-2.20915-3.99999-8.89414e-06-4 2.20913-4 3.99999-2.20915 4-8.89414e-06 4 2.20913 2.20915 3.99999 8.89414e-06 4-2.20913 4-3.99999 2.20915-4 8.89414e-06Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 673.5 540.716)"
                        />
                        <path id="c11172"
                                d="M0 13C-1.71873e-15 5.8203 6.04416-1.65507e-15 13.5-3.31015e-15 20.9558-6.62029e-15 27 5.8203 27 13 27 20.1797 20.9558 26 13.5 26 6.04416 26-8.59365e-15 20.1797 0 13Z"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 660.5 493.5)"
                        />
                        <path id="c11171"
                                d="M0 13C-1.71873e-15 5.8203 6.04416-1.65507e-15 13.5-3.31015e-15 20.9558-6.62029e-15 27 5.8203 27 13 27 20.1797 20.9558 26 13.5 26 6.04416 26-8.59365e-15 20.1797 0 13Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 660.5 471.5)"
                        />
                        <path
                                d="M-1.33937 13-1.06293 10.0974-0.160661 7.39061 1.21413 4.98474 3.00607 2.84818 5.20492 1.13033 7.74008-0.240024 10.5612-1.06571 13.4986-1.33896 16.5045-1.0657 19.2639-0.237868 21.7951 1.13033 23.9939 2.84818 25.7859 4.98474 27.1607 7.39061 28.0629 10.0974 28.3394 13 28.0629 15.9026 27.1607 18.6094 25.7859 21.0153 24.0022 23.142 21.7953 24.935 19.2503 26.242 16.5045 27.0657 13.4986 27.339 10.5612 27.0657 7.75375 26.244 5.20468 24.935 2.9978 23.142 1.21413 21.0153-0.160661 18.6094-1.06293 15.9026ZM1.57733 15.4986 1.51491 15.2034 2.32741 17.6409 2.22016 17.401 3.47016 19.5885 3.33409 19.3932 4.95909 21.3307 4.77829 21.1527 6.77829 22.7777 6.54657 22.6264 8.85907 23.8139 8.62453 23.7204 11.187 24.4704 10.936 24.4224 13.6235 24.6724 13.3793 24.6721 16.1293 24.4221 15.8669 24.4729 18.3669 23.7229 18.1409 23.8139 20.4534 22.6264 20.2217 22.7777 22.2217 21.1527 22.0409 21.3307 23.6659 19.3932 23.5298 19.5885 24.7798 17.401 24.6726 17.6409 25.4851 15.2034 25.4227 15.4986 25.6727 12.8736 25.6727 13.1264 25.4227 10.5014 25.4851 10.7966 24.6726 8.35914 24.7798 8.59902 23.5298 6.41152 23.6659 6.60682 22.0409 4.66932 22.2416 4.8632 20.2416 3.3007 20.4285 3.42294 18.116 2.17294 18.3669 2.2771 15.8669 1.5271 16.1293 1.57786 13.3793 1.32786 13.6235 1.3276 10.936 1.5776 11.187 1.52965 8.62453 2.27965 8.88402 2.17294 6.57152 3.42294 6.75836 3.3007 4.75836 4.8632 4.95909 4.66932 3.33409 6.60682 3.47016 6.41152 2.22016 8.59902 2.32741 8.35914 1.51491 10.7966 1.57733 10.5014 1.32733 13.1264 1.32733 12.8736Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 660.5 471.5)"
                        />
                        <path
                                d="M674.833 401.5 674.833 444.936 672.167 444.936 672.167 401.5ZM669.5 401.5C669.5 399.291 671.291 397.5 673.5 397.5 675.709 397.5 677.5 399.291 677.5 401.5 677.5 403.709 675.709 405.5 673.5 405.5 671.291 405.5 669.5 403.709 669.5 401.5Z"
                                fill="#663300"
                        />
                        <rect id="c1117"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 664.5 432.5)"
                        />
                        <path
                                d="M399.351 456.327 482.95 456.327 482.95 469.918 399.351 469.918Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M399.351 469.918 482.95 469.918 482.95 483.509 399.351 483.509Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M398.684 469.918 483.617 469.918"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M399.351 455.66 399.351 484.176"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M482.95 455.66 482.95 484.176"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M398.684 456.327 483.617 456.327"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M398.684 483.509 483.617 483.509"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip47)">
                            <text id="g1094"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(403.13 466)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip48)">
                            <text id="g1095"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(403.13 480)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip49)"
                                transform="matrix(-1.16667 -1.01993e-07 8.74228e-08 -1 482 469)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <g
                                clip-path="url(#clip50)"
                                transform="matrix(-1 -8.74228e-08 8.99206e-08 -1.02857 482 483)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M572.722 455.888 656.321 455.888 656.321 469.479 572.722 469.479Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M572.722 469.479 656.321 469.479 656.321 483.071 572.722 483.071Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M572.055 469.479 656.988 469.479"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M572.722 455.222 572.722 483.737"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M656.321 455.222 656.321 483.737"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M572.055 455.888 656.988 455.888"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M572.055 483.071 656.988 483.071"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip51)">
                            <text id="g1117"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(576.501 466)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip52)">
                            <text id="g1118"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(576.501 479)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip53)"
                                transform="matrix(-1 -8.74228e-08 8.99206e-08 -1.02857 655 469)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g
                                clip-path="url(#clip54)"
                                transform="matrix(-1 -8.74228e-08 8.99206e-08 -1.02857 655 482)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M1.33334 5.33333 1.33344 55.7315-1.33323 55.7315-1.33332 5.33334ZM1.00469e-05 5.33333-3.99998 8.00001 0 0 4.00002 7.99999ZM4.0001 55.7315C4.00011 57.9407 2.20925 59.7315 0.000112522 59.7315-2.20903 59.7316-3.99989 57.9407-3.99989 55.7316-3.9999 53.5224-2.20904 51.7315 9.74517e-05 51.7315 2.20924 51.7315 4.0001 53.5224 4.0001 55.7315Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 631.5 597.232)"
                        />
                        <rect id="c1417"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 622.5 574.5)"
                        />
                        <rect id="c11173"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 664.5 522.5)"
                        />
                        <rect id="c10943"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 370.5 522.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(348.003 456)"
                        >
                            Т
                            <tspan x="6.16666" y="0">-</tspan>
                            <tspan x="9.33331" y="0">3</tspan>
                            <tspan x="-2.66669" y="11">35/6</tspan>
                            <tspan x="-23.1667" y="22">7500 кВа</tspan>
                            <tspan x="-34.8333" y="34">ТМ</tspan>
                            -
                            <tspan x="-16.6667" y="34">7500/35</tspan>
                        </text>
                        <path
                                d="M1.33334 5.33333 1.33344 55.7315-1.33323 55.7315-1.33332 5.33334ZM1.00469e-05 5.33333-3.99998 8.00001 0 0 4.00002 7.99999ZM4.0001 55.7315C4.00011 57.9407 2.20925 59.7315 0.000112522 59.7315-2.20903 59.7316-3.99989 57.9407-3.99989 55.7316-3.9999 53.5224-2.20904 51.7315 9.74517e-05 51.7315 2.20924 51.7315 4.0001 53.5224 4.0001 55.7315Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 737.5 596.232)"
                        />
                        <rect id="c1462"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 729.5 573.5)"
                        />
                        <path
                                d="M1.33334 5.33333 1.33344 55.7315-1.33323 55.7315-1.33332 5.33334ZM1.00469e-05 5.33333-3.99998 8.00001 0 0 4.00002 7.99999ZM4.0001 55.7315C4.00011 57.9407 2.20925 59.7315 0.000112522 59.7315-2.20903 59.7316-3.99989 57.9407-3.99989 55.7316-3.9999 53.5224-2.20904 51.7315 9.74517e-05 51.7315 2.20924 51.7315 4.0001 53.5224 4.0001 55.7315Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 836.5 596.232)"
                        />
                        <rect id="c1447"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 827.5 573.5)"
                        />
                        <path
                                d="M1.33334 5.33333 1.33344 55.7315-1.33323 55.7315-1.33332 5.33334ZM1.00469e-05 5.33333-3.99998 8.00001 0 0 4.00002 7.99999ZM4.0001 55.7315C4.00011 57.9407 2.20925 59.7315 0.000112522 59.7315-2.20903 59.7316-3.99989 57.9407-3.99989 55.7316-3.9999 53.5224-2.20904 51.7315 9.74517e-05 51.7315 2.20924 51.7315 4.0001 53.5224 4.0001 55.7315Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 943.5 596.232)"
                        />
                        <rect id="c1769"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 935.5 573.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 170.5 277.068)"
                        />
                        <rect id="c1723"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 161.5 256.5)"
                        />
                        <path
                                d="M1.33333-2.54403e-06 1.33343 49.6905-1.33324 49.6905-1.33333 2.54403e-06ZM-4 7.6321e-06C-4-2.20913-2.20915-4-7.6321e-06-4 2.20913-4 4-2.20915 4-7.6321e-06 4 2.20913 2.20915 4 7.6321e-06 4-2.20913 4-4 2.20915-4 7.6321e-06ZM9.48107e-05 49.6905 4.00009 47.0238 0.000104987 55.0238-3.99991 47.0238Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 255.5 277.524)"
                        />
                        <rect id="c1672"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 246.5 256.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 340.5 277.068)"
                        />
                        <rect id="c1657"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 331.5 256.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 424.5 277.068)"
                        />
                        <rect id="c1642"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 414.5 257.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 512.5 277.068)"
                        />
                        <rect id="c1627"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 503.5 257.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 598.5 277.068)"
                        />
                        <rect id="c1567"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 588.5 256.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 671.5 277.068)"
                        />
                        <rect id="c1552"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 662.5 257.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 752.5 277.068)"
                        />
                        <rect id="c1537"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 743.5 257.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 827.5 277.068)"
                        />
                        <rect id="c1746"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 818.5 257.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 905.5 277.068)"
                        />
                        <rect id="c1522"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 895.5 257.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 983.5 277.068)"
                        />
                        <rect id="c1507"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 974.5 256.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 1061.5 276.068)"
                        />
                        <rect id="c1612"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1051.5 256.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 1135.5 277.068)"
                        />
                        <rect id="c1597"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1126.5 256.5)"
                        />
                        <path
                                d="M813.713 293.172 897.312 293.172 897.312 306.764 813.713 306.764Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M813.713 292.506 813.713 307.43"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M897.312 292.506 897.312 307.43"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M813.046 293.172 897.979 293.172"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M813.046 306.764 897.979 306.764"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip55)">
                            <text id="g1301"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(817.492 303)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip56)" transform="matrix(1 0 -0 1.02857 889 294)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M962.76 445.606 962.5 431.5"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(974.838 517)"
                        >
                            В
                            <tspan x="5.83331" y="0">-</tspan>
                            <tspan x="8.66663" y="0">ТС</tspan>
                            <tspan x="20.8333" y="0">-</tspan>
                            <tspan x="23.6666" y="0">1</tspan>
                            <tspan x="-49.6994" y="-55">ТС</tspan>
                            <tspan x="-37.5327" y="-55">-</tspan>
                            <tspan x="-34.6994" y="-55">1</tspan>
                            <tspan x="-60.8661" y="-44">6/0,4</tspan>
                            <tspan x="-41.1994" y="-44">кВ</tspan>
                            <tspan x="-66.8661" y="-34">ТМ</tspan>
                            -
                            <tspan x="-50.0327" y="-34">180/6</tspan>
                        </text>
                        <path id="c10482"
                                d="M0 13C-1.65507e-15 5.8203 5.8203-1.65507e-15 13-3.31015e-15 20.1797-6.62029e-15 26 5.8203 26 13 26 20.1797 20.1797 26 13 26 5.8203 26-8.27537e-15 20.1797 0 13Z"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 949.5 493.5)"
                        />
                        <path id="c10481"
                                d="M0 13C-1.65507e-15 5.8203 5.8203-1.65507e-15 13-3.31015e-15 20.1797-6.62029e-15 26 5.8203 26 13 26 20.1797 20.1797 26 13 26 5.8203 26-8.27537e-15 20.1797 0 13Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 949.5 471.5)"
                        />
                        <path
                                d="M-1.33937 13-1.06442 10.113-0.230936 7.40422 1.14522 4.99595 2.8643 2.8643 4.99595 1.14522 7.40422-0.230936 10.113-1.06442 13-1.33937 15.887-1.06442 18.5958-0.230936 21.004 1.14522 23.1256 2.85616 24.9203 4.99597 26.2353 7.41827 27.0644 10.113 27.3394 13 27.0644 15.887 26.2353 18.5817 24.9203 21.004 23.1339 23.1339 21.004 24.9203 18.5817 26.2353 15.887 27.0644 13 27.3394 10.113 27.0644 7.41827 26.2353 4.99597 24.9203 2.85616 23.1256 1.14522 21.004-0.230936 18.5958-1.06442 15.887ZM1.57733 15.4986 1.52437 15.2329 2.27437 17.6704 2.15766 17.401 3.40766 19.5885 3.28788 19.413 4.85038 21.3505 4.66932 21.1659 6.60682 22.7909 6.38612 22.6407 8.57362 23.8282 8.32961 23.7256 10.7671 24.4756 10.5014 24.4227 13.1264 24.6727 12.8736 24.6727 15.4986 24.4227 15.2329 24.4756 17.6704 23.7256 17.4264 23.8282 19.6139 22.6407 19.3932 22.7909 21.3307 21.1659 21.1659 21.3307 22.7909 19.3932 22.6407 19.6139 23.8282 17.4264 23.7256 17.6704 24.4756 15.2329 24.4227 15.4986 24.6727 12.8736 24.6727 13.1264 24.4227 10.5014 24.4756 10.7671 23.7256 8.32961 23.8282 8.57362 22.6407 6.38612 22.7909 6.60682 21.1659 4.66932 21.3505 4.85038 19.413 3.28788 19.5885 3.40766 17.401 2.15766 17.6704 2.27437 15.2329 1.52437 15.4986 1.57733 12.8736 1.32733 13.1264 1.32733 10.5014 1.57733 10.7671 1.52437 8.32961 2.27437 8.59902 2.15766 6.41152 3.40766 6.587 3.28788 4.6495 4.85038 4.85038 4.6495 3.28788 6.587 3.40766 6.41152 2.15766 8.59902 2.27437 8.32961 1.52437 10.7671 1.57733 10.5014 1.32733 13.1264 1.32733 12.8736Z"
                                fill="#989898"
                                transform="matrix(1 0 0 -1 949.5 471.5)"
                        />
                        <path
                                d="M1.33333-2.96472e-06 1.33344 47.2162-1.33323 47.2162-1.33333 2.96472e-06ZM-4 8.89414e-06C-4-2.20913-2.20915-3.99999-8.89414e-06-4 2.20913-4 3.99999-2.20915 4-8.89414e-06 4 2.20913 2.20915 3.99999 8.89414e-06 4-2.20913 4-3.99999 2.20915-4 8.89414e-06Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 962.5 540.716)"
                        />
                        <rect id="c1048"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 953.5 522.5)"
                        />
                        <path
                                d="M978.037 462.99 1061.64 462.99 1061.64 476.581 978.037 476.581Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M978.037 462.323 978.037 477.248"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1061.64 462.323 1061.64 477.248"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M977.37 462.99 1062.3 462.99"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M977.37 476.581 1062.3 476.581"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip57)">
                            <text id="g1048"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(981.817 473)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip58)"
                                transform="matrix(-1.16667 -1.01993e-07 8.74228e-08 -1 1059 476)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <path
                                d="M951.141 289.389 1034.74 289.389 1034.74 302.98 951.141 302.98Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M951.141 302.98 1034.74 302.98 1034.74 316.571 951.141 316.571Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M950.474 302.98 1035.41 302.98"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M951.141 288.722 951.141 317.238"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1034.74 288.722 1034.74 317.238"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M950.474 289.389 1035.41 289.389"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M950.474 316.571 1035.41 316.571"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip59)">
                            <text id="g1348"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(954.92 299)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip60)">
                            <text id="g1347"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(954.92 313)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip61)" transform="matrix(1 0 -0 1.02857 1026 290)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip62)" transform="matrix(1 0 -0 1.02857 1027 304)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M952.141 359.27 1035.74 359.27 1035.74 372.861 952.141 372.861Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M952.141 372.861 1035.74 372.861 1035.74 386.453 952.141 386.453Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M951.474 372.861 1036.41 372.861"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M952.141 358.603 952.141 387.119"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1035.74 358.603 1035.74 387.119"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M951.474 359.27 1036.41 359.27"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M951.474 386.453 1036.41 386.453"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip63)">
                            <text id="g1187"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(955.92 369)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip64)">
                            <text id="g1186"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(955.92 383)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip65)" transform="matrix(1 0 -0 1.02857 1027 360)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip66)" transform="matrix(1 0 -0 1.02857 1028 374)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 236.5 163.068)"
                        />
                        <rect id="c1702"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 227.5 143.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 332.5 163.068)"
                        />
                        <rect id="c1687"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 323.5 142.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 1001.5 161.068)"
                        />
                        <rect id="c1370"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 992.5 140.5)"
                        />
                        <path
                                d="M1.33333-2.66286e-06 1.33343 47.2351-1.33324 47.2351-1.33333 2.66286e-06ZM-4 7.98859e-06C-4-2.20913-2.20915-4-7.98859e-06-4 2.20913-4 4-2.20915 4-7.98859e-06 4 2.20913 2.20915 4 7.98859e-06 4-2.20913 4-4 2.20915-4 7.98859e-06ZM9.43354e-05 47.2351 4.00009 44.5684 0.000104987 52.5684-3.99991 44.5684Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 1084.5 161.068)"
                        />
                        <rect id="c1582"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1075.5 141.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(663 152)"
                        >
                            ФЭС
                            <tspan x="-5.33337" y="11">250 кВт</tspan>
                            <tspan x="264.767" y="-16">В</tspan>
                            <tspan x="270.6" y="-16">-</tspan>
                            <tspan x="273.434" y="-16">ФЭС</tspan>
                        </text>
                        <path id="c12781"
                                d="M0 13.5C-1.65507e-15 6.04416 5.8203-1.71873e-15 13-3.43746e-15 20.1797-6.87492e-15 26 6.04416 26 13.5 26 20.9558 20.1797 27 13 27 5.8203 27-8.27537e-15 20.9558 0 13.5Z"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 831.5 153.5)"
                        />
                        <path id="c1278"
                                d="M0 13.5C-1.65507e-15 6.04416 5.8203-1.71873e-15 13-3.43746e-15 20.1797-6.87492e-15 26 6.04416 26 13.5 26 20.9558 20.1797 27 13 27 5.8203 27-8.27537e-15 20.9558 0 13.5Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 831.5 131.5)"
                        />
                        <path
                                d="M-1.33896 13.4986-1.06571 10.5612-0.240024 7.74008 1.13033 5.20492 2.84818 3.00607 4.98474 1.21413 7.39061-0.160661 10.0974-1.06293 13-1.33937 15.9026-1.06293 18.6094-0.160661 21.0153 1.21413 23.142 2.9978 24.935 5.20468 26.244 7.75375 27.0657 10.5612 27.339 13.4986 27.0657 16.5045 26.242 19.2503 24.935 21.7953 23.142 24.0022 21.0153 25.7859 18.6094 27.1607 15.9026 28.0629 13 28.3394 10.0974 28.0629 7.39061 27.1607 4.98474 25.7859 2.84818 23.9939 1.13033 21.7951-0.237868 19.2639-1.0657 16.5045ZM1.57786 16.1293 1.5271 15.8669 2.2771 18.3669 2.17294 18.116 3.42294 20.4285 3.3007 20.2416 4.8632 22.2416 4.66932 22.0409 6.60682 23.6659 6.41152 23.5298 8.59902 24.7798 8.35914 24.6726 10.7966 25.4851 10.5014 25.4227 13.1264 25.6727 12.8736 25.6727 15.4986 25.4227 15.2034 25.4851 17.6409 24.6726 17.401 24.7798 19.5885 23.5298 19.3932 23.6659 21.3307 22.0409 21.1527 22.2217 22.7777 20.2217 22.6264 20.4534 23.8139 18.1409 23.7229 18.3669 24.4729 15.8669 24.4221 16.1293 24.6721 13.3793 24.6724 13.6235 24.4224 10.936 24.4704 11.187 23.7204 8.62453 23.8139 8.85907 22.6264 6.54657 22.7777 6.77829 21.1527 4.77829 21.3307 4.95909 19.3932 3.33409 19.5885 3.47016 17.401 2.22016 17.6409 2.32741 15.2034 1.51491 15.4986 1.57733 12.8736 1.32733 13.1264 1.32733 10.5014 1.57733 10.7966 1.51491 8.35914 2.32741 8.59902 2.22016 6.41152 3.47016 6.60682 3.33409 4.66932 4.95909 4.8632 4.75836 3.3007 6.75836 3.42294 6.57152 2.17294 8.88402 2.27965 8.62453 1.52965 11.187 1.5776 10.936 1.3276 13.6235 1.32786 13.3793Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 831.5 131.5)"
                        />
                        <path
                                d="M0 0 71.6852 0.000104987"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 916.185 87.5001)"
                        />
                        <path
                                d="M845.5 87.5001 845.5 103.75"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 118.137 0.000104987"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 846.637 161.5)"
                        />
                        <path
                                d="M844.5 153.5 844.5 162.961"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M915.833 87.5001 915.833 161.668 913.167 161.668 913.167 87.5001ZM918.5 161.667C918.5 163.877 916.709 165.668 914.5 165.668 912.291 165.668 910.5 163.877 910.5 161.668 910.5 159.458 912.291 157.668 914.5 157.668 916.709 157.668 918.5 159.458 918.5 161.667Z"
                                fill="#6600CC"
                        />
                        <rect id="c12782"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 905.5 140.5)"
                        />
                        <path
                                d="M743.906 121.635 827.505 121.635 827.505 135.226 743.906 135.226Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M743.906 120.968 743.906 135.893"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M827.505 120.968 827.505 135.893"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M743.239 121.635 828.172 121.635"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M743.239 135.226 828.172 135.226"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip67)">
                            <text id="g1278"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(747.685 132)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip68)" transform="matrix(1.16667 0 -0 1 821 122)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1205.64 412)"
                        >
                            СШ 35 кВ
                        </text>
                        <path
                                d="M292.087 597.217 375.686 597.217 375.686 610.809 292.087 610.809Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M292.087 596.551 292.087 611.475"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M375.686 596.551 375.686 611.475"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M291.42 597.217 376.353 597.217"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M291.42 610.809 376.353 610.809"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip69)">
                            <text id="g1492"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(295.866 607)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip70)"
                                transform="matrix(-1.16667 -1.01993e-07 8.74228e-08 -1 374 610)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <path
                                d="M390.312 597.134 473.912 597.134 473.912 610.725 390.312 610.725Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M390.312 596.467 390.312 611.392"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M473.912 596.467 473.912 611.392"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M389.646 597.134 474.579 597.134"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M389.646 610.725 474.579 610.725"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip71)">
                            <text id="g1477"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(394.092 607)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip72)"
                                transform="matrix(-1 -8.74228e-08 8.99206e-08 -1.02857 472 610)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M492.037 597.093 575.637 597.093 575.637 610.685 492.037 610.685Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M492.037 596.427 492.037 611.351"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M575.637 596.427 575.637 611.351"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M491.371 597.093 576.303 597.093"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M491.371 610.685 576.303 610.685"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip73)">
                            <text id="g1432"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(495.817 607)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip74)"
                                transform="matrix(-1 -8.74228e-08 8.99206e-08 -1.02857 574 610)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M589.941 597.489 673.541 597.489 673.541 611.081 589.941 611.081Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M589.941 596.823 589.941 611.747"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M673.541 596.823 673.541 611.747"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M589.275 597.489 674.208 597.489"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M589.275 611.081 674.208 611.081"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip75)">
                            <text id="g1417"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(593.721 607)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip76)"
                                transform="matrix(-1.16667 -1.01993e-07 8.74228e-08 -1 672 610)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <path
                                d="M696.582 596.896 780.181 596.896 780.181 610.488 696.582 610.488Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M696.582 596.23 696.582 611.154"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M780.181 596.23 780.181 611.154"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M695.915 596.896 780.848 596.896"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M695.915 610.488 780.848 610.488"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip77)">
                            <text id="g1462"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(700.361 607)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip78)"
                                transform="matrix(-1 -8.74228e-08 8.99206e-08 -1.02857 778 610)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M798.602 596.967 882.201 596.967 882.201 610.559 798.602 610.559Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M798.602 596.301 798.602 611.225"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M882.201 596.301 882.201 611.225"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M797.935 596.967 882.868 596.967"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M797.935 610.559 882.868 610.559"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip79)">
                            <text id="g1447"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(802.381 607)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip80)"
                                transform="matrix(-1 -8.74228e-08 8.99206e-08 -1.02857 879 610)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <rect id="c13013"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 786.5 433.5)"
                        />
                        <rect id="c10483"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 892.5 441.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(754.404 467)"
                        >
                            ЩИТ Н
                        </text>
                        <path
                                d="M166.599 525.031 166.5 513.5"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.33333-7.52428e-06 1.33344 18.6041-1.33323 18.6041-1.33333 7.52428e-06ZM-4 2.25729e-05C-4.00001-2.20912-2.20916-3.99999-2.25729e-05-4 2.20912-4.00001 3.99999-2.20916 4-2.25729e-05 4.00001 2.20912 2.20916 3.99999 2.25729e-05 4-2.20912 4.00001-3.99999 2.20916-4 2.25729e-05Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 166.5 512.104)"
                        />
                        <g clip-path="url(#clip82)" transform="matrix(1 0 -0 1.00976 430 46)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img81"
                                    transform="scale(0.794872 0.794872)"
                            ></use>
                        </g>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 451.17 42.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 550.5 96.1712)"
                        />
                        <path
                                d="M547.551 108.031 539.861 99.6543 540.352 99.2035 548.042 107.58ZM540.107 99.4289 539.946 103.197 536.5 95.5001 543.875 99.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M557.946 108.889 548.5 108.5"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M455.355 28.2484 549.723 28.2484 549.723 41.0484 455.355 41.0484Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M455.355 27.5817 455.355 41.7151"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M549.723 27.5817 549.723 41.7151"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M454.688 28.2484 550.39 28.2484"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M454.688 41.0484 550.39 41.0484"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip83)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(459.134 38)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(469.634 38)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M451.5 42.5001 470.692 42.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M557.847 95.3321 645.505 95.3321 645.505 108.132 557.847 108.132Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M557.847 94.6654 557.847 108.799"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M645.505 94.6654 645.505 108.799"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M557.18 95.3321 646.171 95.3321"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M557.18 108.132 646.171 108.132"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip84)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(561.626 105)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(572.126 105)"
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
                                transform="matrix(1 0 0 -1 447.5 50.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 557.986 68.5001)"
                        />
                        <path
                                d="M557.5 68.5001 576.692 68.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M562.044 55.1486 635.242 55.1486 635.242 67.9486 562.044 67.9486Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M562.044 54.4819 562.044 68.6152"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M635.242 54.4819 635.242 68.6152"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M561.378 55.1486 635.909 55.1486"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M561.378 67.9486 635.909 67.9486"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip85)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(565.824 65)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M533.5 96.5001 556.212 96.5002"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M6.50005 616C6.50005 610.753 10.5295 606.5 15.5001 606.5 20.4706 606.5 24.5 610.753 24.5 616 24.5 621.247 20.4706 625.5 15.5001 625.5 10.5295 625.5 6.50005 621.247 6.50005 616Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M6.50005 637C6.50005 631.753 10.5295 627.5 15.5001 627.5 20.4706 627.5 24.5 631.753 24.5 637 24.5 642.247 20.4706 646.5 15.5001 646.5 10.5295 646.5 6.50005 642.247 6.50005 637Z"
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
                                transform="translate(30.6391 618)"
                        >
                            в работе
                            <tspan x="-0.0827293" y="22">в резерве</tspan>
                        </text>
                        <path
                                d="M6 593.5C6 588.253 10.0294 584 15 584 19.9706 584 24 588.253 24 593.5 24 598.747 19.9706 603 15 603 10.0294 603 6 598.747 6 593.5Z"
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
                                transform="translate(30.5563 596)"
                        >
                            в ремонте
                            <tspan x="0.264881" y="-24">отдача</tspan>
                            <tspan x="0.000104904" y="-47">прием</tspan>
                        </text>
                        <g clip-path="url(#clip86)" transform="matrix(1.05 0 -0 1 10 538)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.21978 0.21978)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip87)" transform="matrix(1.05 0 -0 1 10 560)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.21978 0.21978)"
                            ></use>
                        </g>
                        <path
                                d="M203.446 496.472 292.678 496.472 292.678 509.272 203.446 509.272Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M203.446 495.805 203.446 509.939"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M292.678 495.805 292.678 509.939"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M202.78 496.472 293.345 496.472"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M202.78 509.272 293.345 509.272"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip88)">
                            <text id="g1249"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(207.226 506)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M843.748 525.141 932.98 525.141 932.98 537.941 843.748 537.941Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M843.748 524.474 843.748 538.608"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M932.98 524.474 932.98 538.608"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M843.082 525.141 933.647 525.141"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M843.082 537.941 933.647 537.941"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip89)">
                            <text id="g1111"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(847.528 535)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M1167.65 496.543 1256.88 496.543 1256.88 509.343 1167.65 509.343Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1167.65 495.877 1167.65 510.01"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1256.88 495.877 1256.88 510.01"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1166.98 496.543 1257.55 496.543"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1166.98 509.343 1257.55 509.343"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip90)">
                            <text id="g1134"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1171.43 507)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M1177.77 386.433 1267 386.433 1267 399.233 1177.77 399.233Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.77 385.767 1177.77 399.9"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1267 385.767 1267 399.9"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.1 386.433 1267.66 386.433"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.1 399.233 1267.66 399.233"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip91)">
                            <text id="g1226"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1181.55 396)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M1117.67 145.918 1206.9 145.918 1206.9 158.718 1117.67 158.718Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1117.67 145.252 1117.67 159.385"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1206.9 145.252 1206.9 159.385"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1117 145.918 1207.57 145.918"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1117 158.718 1207.57 158.718"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip92)">
                            <text id="g1203"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1121.45 156)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M402.566 145.226 491.799 145.226 491.799 158.026 402.566 158.026Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M402.566 144.559 402.566 158.692"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M491.799 144.559 491.799 158.692"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M401.9 145.226 492.465 145.226"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M401.9 158.026 492.465 158.026"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip93)">
                            <text id="g1318"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(406.346 155)"
                            >
                                U
                            </text>
                        </g>
                        <path id="c979"
                                d="M147.5 541.5C147.5 531.559 155.783 523.5 166 523.5 176.217 523.5 184.5 531.559 184.5 541.5 184.5 551.441 176.217 559.5 166 559.5 155.783 559.5 147.5 551.441 147.5 541.5Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip94)">
                                <g clip-path="url(#clip95)">
                                    <g clip-path="url(#clip96)">
                                        <path
                                                d="M0 0 0.688889 0 1.66481 0.172222 2.46852 0.516667 3.1 0.918519 3.8463 1.66481 4.30556 2.3537 4.65 3.27222 4.76481 3.78889 4.76481 5.16667 4.53519 6.02778 4.07593 6.9463 3.61667 7.52037 3.21481 7.92222 2.41111 8.43889 1.49259 8.78333 0.918519 8.89815-0.22963 8.89815-1.14815 8.66852-1.77963 8.38148-2.41111 7.97963-3.04259 7.40556-3.44444 6.83148-3.8463 6.02778-4.07593 5.10926-4.13333 4.42037-4.01852 3.50185-3.78889 2.75556-3.32963 1.89444-2.69815 1.20556-2.23889 0.803704-1.26296 0.287037-0.401852 0.0574074Z"
                                                transform="matrix(1 0 -0 1.01613 164.77 536.95)"
                                        />
                                        <path
                                                d="M0 0 0.631482 0 1.72222 0.172222 2.81296 0.516667 3.73148 0.975926 4.42037 1.43519 4.99444 1.95185 5.68333 2.64074 6.31482 3.55926 6.77407 4.47778 7.11852 5.51111 7.29074 6.37222 7.34815 6.83148 7.34815 7.92222 7.17593 9.01296 6.88889 9.98889 6.42963 10.9648 5.85556 11.7685 5.74074 11.7685 5.28148 10.9648 4.59259 10.1611 3.96111 9.58704 3.15741 9.07037 2.2963 8.66852 1.32037 8.38148 0 8.20926Z"
                                                transform="matrix(1 0 -0 1.01613 165.115 526.567)"
                                        />
                                        <path
                                                d="M0 0 0.287037 0.0574074 1.89444 0.975926 3.04259 1.66481 3.1 1.77963 2.98519 2.98519 3.1 4.19074 3.38704 5.28148 3.78889 6.14259 3.78889 6.31482 2.18148 7.23333 0.803704 8.03704-2.18148 9.75926-3.15741 10.3333-3.32963 10.3333-3.8463 9.24259-4.13333 8.26667-4.24815 7.57778-4.30556 6.60185-4.19074 5.51111-4.01852 4.70741-3.61667 3.61667-3.21481 2.87037-2.69815 2.12407-2.00926 1.37778-1.37778 0.803704-0.344444 0.172222Z"
                                                transform="matrix(1 0 -0 1.01613 155.7 538.408)"
                                        />
                                        <path
                                                d="M0 0 0.287037 0.0574074 1.66481 0.861111 6.14259 3.44444 7.11852 4.01852 7.0037 4.30556 6.60185 4.87963 6.08519 5.51111 5.68333 5.91296 4.82222 6.54444 3.9037 7.06111 2.81296 7.46296 1.95185 7.63519 1.60741 7.69259-0.114815 7.69259-0.975926 7.52037-1.89444 7.23333-2.87037 6.77407-3.55926 6.31482-3.55926 2.87037-3.04259 2.64074-2.06667 2.12407-1.37778 1.60741-0.574074 0.803704Z"
                                                transform="matrix(1 0 -0 1.01613 170.683 544.825)"
                                        />
                                        <path
                                                d="M0 0 1.26296 0 2.3537 0.172222 3.55926 0.574074 4.53519 1.09074 4.99444 1.37778 4.99444 4.87963 3.96111 5.33889 3.15741 5.85556 2.52593 6.37222 2.12407 6.77407 1.43519 7.75 1.09074 7.63519 0.114815 7.06111-4.36296 4.47778-5.62593 3.73148-5.68333 3.61667-5.28148 2.98519-4.65 2.23889-4.19074 1.77963-3.32963 1.14815-2.52593 0.688889-1.43519 0.287037-0.803704 0.114815Z"
                                                transform="matrix(1 0 -0 1.01613 158.111 530.3)"
                                        />
                                        <path
                                                d="M0 0 0.22963 0.0574074 1.09074 0.688889 2.06667 1.14815 2.98519 1.43519 3.67407 1.55 4.36296 1.60741 4.42037 1.66481 4.42037 9.81667 3.55926 9.81667 2.41111 9.58704 1.43519 9.24259 0.401852 8.66852-0.344444 8.09444-0.918519 7.57778-1.49259 6.88889-2.06667 5.97037-2.52593 4.93704-2.81296 3.8463-2.92778 2.81296-2.92778 2.18148-2.87037 1.66481-1.43519 0.861111-0.459259 0.287037Z"
                                                transform="matrix(1 0 -0 1.01613 160.694 546.4)"
                                        />
                                        <path
                                                d="M0 0 0.114815 0 0.516667 0.803704 0.861111 1.83704 1.03333 2.75556 1.09074 3.9037 0.975926 4.93704 0.746296 5.91296 0.287037 7.0037-0.114815 7.69259-0.574074 8.32407-1.20556 9.01296-2.06667 9.70185-2.81296 10.1611-3.32963 10.3907-4.76481 9.58704-6.14259 8.78333-6.31482 8.66852-6.2 7.63519-6.2 6.77407-5.68333 6.25741-4.93704 5.28148-4.42037 4.42037-3.9037 3.32963-3.50185 2.06667-2.98519 1.72222-1.55 0.918519-0.172222 0.114815Z"
                                                transform="matrix(1 0 -0 1.01613 177.744 534.033)"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c956"
                                d="M1115.5 543.5C1115.5 533.559 1123.56 525.5 1133.5 525.5 1143.44 525.5 1151.5 533.559 1151.5 543.5 1151.5 553.441 1143.44 561.5 1133.5 561.5 1123.56 561.5 1115.5 553.441 1115.5 543.5Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip97)">
                                <g clip-path="url(#clip98)">
                                    <g clip-path="url(#clip99)">
                                        <path
                                                d="M1132.77 538.522 1133.46 538.522 1134.44 538.694 1135.24 539.039 1135.87 539.441 1136.62 540.187 1137.08 540.876 1137.42 541.794 1137.54 542.311 1137.54 543.689 1137.31 544.55 1136.85 545.469 1136.39 546.043 1135.99 546.444 1135.18 546.961 1134.26 547.306 1133.69 547.42 1132.54 547.42 1131.62 547.191 1130.99 546.904 1130.36 546.502 1129.73 545.928 1129.33 545.354 1128.92 544.55 1128.69 543.631 1128.64 542.943 1128.75 542.024 1128.98 541.278 1129.44 540.417 1130.07 539.728 1130.53 539.326 1131.51 538.809 1132.37 538.58Z"
                                        />
                                        <path
                                                d="M1133.11 528.304 1133.75 528.304 1134.84 528.476 1135.93 528.82 1136.85 529.28 1137.54 529.739 1138.11 530.256 1138.8 530.944 1139.43 531.863 1139.89 532.781 1140.23 533.815 1140.41 534.676 1140.46 535.135 1140.46 536.226 1140.29 537.317 1140 538.293 1139.54 539.269 1138.97 540.072 1138.86 540.072 1138.4 539.269 1137.71 538.465 1137.08 537.891 1136.27 537.374 1135.41 536.972 1134.44 536.685 1133.11 536.513Z"
                                        />
                                        <path
                                                d="M1123.7 539.957 1123.99 540.015 1125.59 540.933 1126.74 541.622 1126.8 541.737 1126.69 542.943 1126.8 544.148 1127.09 545.239 1127.49 546.1 1127.49 546.272 1125.88 547.191 1124.5 547.994 1121.52 549.717 1120.54 550.291 1120.37 550.291 1119.85 549.2 1119.57 548.224 1119.45 547.535 1119.39 546.559 1119.51 545.469 1119.68 544.665 1120.08 543.574 1120.49 542.828 1121 542.081 1121.69 541.335 1122.32 540.761 1123.36 540.13Z"
                                        />
                                        <path
                                                d="M1138.68 546.272 1138.97 546.33 1140.35 547.133 1144.83 549.717 1145.8 550.291 1145.69 550.578 1145.29 551.152 1144.77 551.783 1144.37 552.185 1143.51 552.817 1142.59 553.333 1141.5 553.735 1140.64 553.907 1140.29 553.965 1138.57 553.965 1137.71 553.793 1136.79 553.506 1135.81 553.046 1135.12 552.587 1135.12 549.143 1135.64 548.913 1136.62 548.396 1137.31 547.88 1138.11 547.076Z"
                                        />
                                        <path
                                                d="M1126.11 531.978 1127.37 531.978 1128.46 532.15 1129.67 532.552 1130.65 533.069 1131.11 533.356 1131.11 536.857 1130.07 537.317 1129.27 537.833 1128.64 538.35 1128.24 538.752 1127.55 539.728 1127.2 539.613 1126.23 539.039 1121.75 536.456 1120.49 535.709 1120.43 535.594 1120.83 534.963 1121.46 534.217 1121.92 533.757 1122.78 533.126 1123.59 532.667 1124.68 532.265 1125.31 532.093Z"
                                        />
                                        <path
                                                d="M1128.69 547.822 1128.92 547.88 1129.79 548.511 1130.76 548.97 1131.68 549.257 1132.37 549.372 1133.06 549.43 1133.11 549.487 1133.11 557.639 1132.25 557.639 1131.11 557.409 1130.13 557.065 1129.1 556.491 1128.35 555.917 1127.78 555.4 1127.2 554.711 1126.63 553.793 1126.17 552.759 1125.88 551.669 1125.77 550.635 1125.77 550.004 1125.82 549.487 1127.26 548.683 1128.24 548.109Z"
                                        />
                                        <path
                                                d="M1145.74 535.652 1145.86 535.652 1146.26 536.456 1146.61 537.489 1146.78 538.407 1146.84 539.556 1146.72 540.589 1146.49 541.565 1146.03 542.656 1145.63 543.344 1145.17 543.976 1144.54 544.665 1143.68 545.354 1142.93 545.813 1142.41 546.043 1140.98 545.239 1139.6 544.435 1139.43 544.32 1139.54 543.287 1139.54 542.426 1140.06 541.909 1140.81 540.933 1141.32 540.072 1141.84 538.982 1142.24 537.719 1142.76 537.374 1144.19 536.57 1145.57 535.767Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M136.911 196.014 205.928 196.014 205.928 209.605 136.911 209.605Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M136.911 195.347 136.911 210.272"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M205.928 195.347 205.928 210.272"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M136.245 196.014 206.595 196.014"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M136.245 209.605 206.595 209.605"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip100)">
                            <text id="g1723"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(140.691 206)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M219.648 196.077 288.664 196.077 288.664 209.668 219.648 209.668Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M219.648 195.41 219.648 210.334"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M288.664 195.41 288.664 210.334"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M218.981 196.077 289.331 196.077"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M218.981 209.668 289.331 209.668"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip101)">
                            <text id="g1672"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(223.427 206)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M306.698 197.288 375.715 197.288 375.715 210.879 306.698 210.879Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M306.698 196.621 306.698 211.546"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M375.715 196.621 375.715 211.546"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M306.031 197.288 376.381 197.288"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M306.031 210.879 376.381 210.879"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip102)">
                            <text id="g1657"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(310.477 207)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M389.725 197.946 458.742 197.946 458.742 211.537 389.725 211.537Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M389.725 197.279 389.725 212.204"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M458.742 197.279 458.742 212.204"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M389.058 197.946 459.409 197.946"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M389.058 211.537 459.409 211.537"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip103)">
                            <text id="g1642"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(393.505 208)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M477.193 197.922 546.21 197.922 546.21 211.513 477.193 211.513Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M477.193 197.255 477.193 212.18"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M546.21 197.255 546.21 212.18"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M476.526 197.922 546.876 197.922"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M476.526 211.513 546.876 211.513"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip104)">
                            <text id="g1627"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(480.973 208)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M558.207 197.832 627.224 197.832 627.224 211.423 558.207 211.423Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M558.207 197.166 558.207 212.09"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M627.224 197.166 627.224 212.09"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M557.54 197.832 627.89 197.832"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M557.54 211.423 627.89 211.423"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip105)">
                            <text id="g1567"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(561.986 208)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M634.783 197.848 703.8 197.848 703.8 211.439 634.783 211.439Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M634.783 197.181 634.783 212.106"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M703.8 197.181 703.8 212.106"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M634.116 197.848 704.466 197.848"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M634.116 211.439 704.466 211.439"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip106)">
                            <text id="g1552"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(638.562 208)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M716.119 197.535 785.136 197.535 785.136 211.127 716.119 211.127Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M716.119 196.869 716.119 211.793"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M785.136 196.869 785.136 211.793"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M715.453 197.535 785.803 197.535"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M715.453 211.127 785.803 211.127"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip107)">
                            <text id="g1537"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(719.899 208)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M794.121 197.216 863.138 197.216 863.138 210.807 794.121 210.807Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M794.121 196.549 794.121 211.474"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M863.138 196.549 863.138 211.474"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M793.455 197.216 863.805 197.216"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M793.455 210.807 863.805 210.807"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip108)">
                            <text id="g1746"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(797.901 207)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M868.214 197.442 937.23 197.442 937.23 211.033 868.214 211.033Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M868.214 196.776 868.214 211.7"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M937.23 196.776 937.23 211.7"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M867.547 197.442 937.897 197.442"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M867.547 211.033 937.897 211.033"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip109)">
                            <text id="g1522"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(871.993 207)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M945.69 197.14 1014.71 197.14 1014.71 210.732 945.69 210.732Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M945.69 196.474 945.69 211.398"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1014.71 196.474 1014.71 211.398"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M945.023 197.14 1015.37 197.14"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M945.023 210.732 1015.37 210.732"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip110)">
                            <text id="g1507"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(949.469 207)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M1027.32 197.206 1096.34 197.206 1096.34 210.797 1027.32 210.797Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1027.32 196.54 1027.32 211.464"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1096.34 196.54 1096.34 211.464"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1026.66 197.206 1097.01 197.206"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1026.66 210.797 1097.01 210.797"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip111)">
                            <text id="g1612"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1031.1 207)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M1103.93 196.826 1172.95 196.826 1172.95 210.417 1103.93 210.417Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1103.93 196.16 1103.93 211.084"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1172.95 196.16 1172.95 211.084"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1103.26 196.826 1173.61 196.826"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1103.26 210.417 1173.61 210.417"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip112)">
                            <text id="g1597"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1107.71 207)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M967.393 82.9993 1036.41 82.9993 1036.41 96.5904 967.393 96.5904Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M967.393 82.3326 967.393 97.2571"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1036.41 82.3326 1036.41 97.2571"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M966.726 82.9993 1037.08 82.9993"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M966.726 96.5904 1037.08 96.5904"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip113)">
                            <text id="g1370"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(971.172 93)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M1052.1 82.9993 1121.11 82.9993 1121.11 96.5904 1052.1 96.5904Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1052.1 82.3326 1052.1 97.2571"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1121.11 82.3326 1121.11 97.2571"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1051.43 82.9993 1121.78 82.9993"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1051.43 96.5904 1121.78 96.5904"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip114)">
                            <text id="g1582"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1055.88 93)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M198.893 83.4169 267.91 83.4169 267.91 97.0081 198.893 97.0081Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M198.893 82.7502 198.893 97.6748"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M267.91 82.7502 267.91 97.6748"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M198.227 83.4169 268.577 83.4169"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M198.227 97.0081 268.577 97.0081"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip115)">
                            <text id="g1702"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(202.673 93)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M299.128 83.7156 368.145 83.7156 368.145 97.3068 299.128 97.3068Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M299.128 83.0489 299.128 97.9734"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M368.145 83.0489 368.145 97.9734"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M298.461 83.7156 368.812 83.7156"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M298.461 97.3068 368.812 97.3068"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip116)">
                            <text id="g1687"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(302.908 94)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip118)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img117"
                                    transform="matrix(0.5625 0 0 0.5625 680 106)"
                            ></use>
                        </g>
                        <path
                                d="M905.963 599.953 989.563 599.953 989.563 613.544 905.963 613.544Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M905.963 613.544 989.563 613.544 989.563 627.135 905.963 627.135Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M905.296 613.544 990.229 613.544"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M905.963 599.286 905.963 627.802"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M989.563 599.286 989.563 627.802"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M905.296 599.953 990.229 599.953"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M905.296 627.135 990.229 627.135"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip119)">
                            <text id="g1769"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(909.742 610)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip120)">
                            <text id="g1770"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(909.742 624)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip121)"
                                transform="matrix(-1 -8.74228e-08 8.99206e-08 -1.02857 988 613)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g
                                clip-path="url(#clip122)"
                                transform="matrix(-1 -8.74228e-08 8.99206e-08 -1.02857 988 626)"
                        >
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(915.141 639)"
                        >
                            Ф.когер.ТЭЦ
                            <tspan x="54.3333" y="0">Яч7</tspan>
                            .
                        </text>
                        <g clip-path="url(#clip123)" transform="matrix(1 0 -0 1.02857 199 197)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip124)" transform="matrix(1 0 -0 1.02857 281 197)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip125)" transform="matrix(1 0 -0 1.02857 368 198)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip126)" transform="matrix(1 0 -0 1.02857 451 199)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip127)" transform="matrix(1 0 -0 1.11429 539 198)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip128)" transform="matrix(1 0 -0 1.02857 619 199)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip129)" transform="matrix(1 0 -0 1.02857 696 198)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip130)" transform="matrix(1 0 -0 1.02857 778 198)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip131)" transform="matrix(1.16667 0 -0 1 855 198)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip132)" transform="matrix(1 0 -0 1.02857 930 198)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip133)" transform="matrix(1.16667 0 -0 1 1007 198)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip134)" transform="matrix(1.16667 0 -0 1 1089 198)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip135)" transform="matrix(1 0 -0 1.02857 1166 198)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip136)" transform="matrix(1 0 -0 1.02857 1113 84)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip137)" transform="matrix(1 0 -0 1.02857 1027 84)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip138)" transform="matrix(1 0 -0 1.02857 360 85)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip139)" transform="matrix(1 0 -0 1.02857 259 84)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
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

        fetch('/toshkent/server9')
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
                    if (item.id === 1387) {
                        const plus = document.getElementById("g1387Plus");
                        const minus = document.getElementById("g1387Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1387);
                        } else {
                            falseAnimation(1387);
                        }
                    } else if (item.id === 1402) {
                        const plus = document.getElementById("g1402Plus");
                        const minus = document.getElementById("g1402Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1402);
                        } else {
                            falseAnimation(1402);
                        }
                    } else if(item.id === 1702) {
                        const value = document.getElementById("g1702");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1702);
                        } else {
                            falseAnimation(1702);
                        }
                    } else if(item.id === 1687) {
                        const value = document.getElementById("g1687");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1687);
                        } else {
                            falseAnimation(1687);
                        }
                    } else if(item.id === 1210) {
                        const value = document.getElementById("g1210");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1210);
                        } else {
                            falseAnimation(1210);
                        }
                    } else if(item.id === 1209) {
                        const value = document.getElementById("g1209");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1210);
                        } else {
                            falseAnimation(1210);
                        }
                    } else if(item.id === 1278) {
                        const value = document.getElementById("g1278");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1278);
                            trueAnimation(12781);
                            trueAnimation(12782);
                        } else {
                            falseAnimation(1278);
                            falseAnimation(12781);
                            falseAnimation(12782);
                        }
                    } else if(item.id === 1370) {
                        const value = document.getElementById("g1370");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1370);
                        } else {
                            falseAnimation(1370);
                        }
                    } else if(item.id === 1582) {
                        const value = document.getElementById("g1582");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1582);
                        } else {
                            falseAnimation(1582);
                        }
                    } else if(item.id === 1723) {
                        const value = document.getElementById("g1723");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1723);
                        } else {
                            falseAnimation(1723);
                        }
                    } else if(item.id === 1672) {
                        const value = document.getElementById("g1672");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1672);
                        } else {
                            falseAnimation(1672);
                        }
                    } else if(item.id === 1657) {
                        const value = document.getElementById("g1657");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1657);
                        } else {
                            falseAnimation(1657);
                        }
                    } else if(item.id === 1642) {
                        const value = document.getElementById("g1642");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1642);
                        } else {
                            falseAnimation(1642);
                        }
                    } else if(item.id === 1627) {
                        const value = document.getElementById("g1627");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1627);
                        } else {
                            falseAnimation(1627);
                        }
                    } else if(item.id === 1567) {
                        const value = document.getElementById("g1567");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1567);
                        } else {
                            falseAnimation(1567);
                        }
                    } else if(item.id === 1552) {
                        const value = document.getElementById("g1552");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1552);
                        } else {
                            falseAnimation(1552);
                        }
                    } else if(item.id === 1537) {
                        const value = document.getElementById("g1537");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1537);
                        } else {
                            falseAnimation(1537);
                        }
                    } else if(item.id === 1746) {
                        const value = document.getElementById("g1746");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1746);
                        } else {
                            falseAnimation(1746);
                        }
                    } else if(item.id === 1522) {
                        const value = document.getElementById("g1522");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1522);
                        } else {
                            falseAnimation(1522);
                        }
                    } else if(item.id === 1507) {
                        const value = document.getElementById("g1507");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1507);
                        } else {
                            falseAnimation(1507);
                        }
                    } else if(item.id === 1612) {
                        const value = document.getElementById("g1612");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1612);
                        } else {
                            falseAnimation(1612);
                        }
                    } else if(item.id === 1597) {
                        const value = document.getElementById("g1597");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1597);
                        } else {
                            falseAnimation(1597);
                        }
                    } else if(item.id === 1233) {
                        const value = document.getElementById("g1233");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1233);
                        } else {
                            falseAnimation(1233);
                        }
                    } else if(item.id === 1232) {
                        const value = document.getElementById("g1232");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1233);
                        } else {
                            falseAnimation(1233);
                        }
                    } else if(item.id === 1324) {
                        const value = document.getElementById("g1324");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1325);
                        } else {
                            falseAnimation(1325);
                        }
                    } else if(item.id === 1325) {
                        const value = document.getElementById("g1325");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1325);
                        } else {
                            falseAnimation(1325);
                        }
                    } else if(item.id === 1363) {
                        const value = document.getElementById("g1363");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1364);
                        } else {
                            falseAnimation(1364);
                        }
                    } else if(item.id === 1364) {
                        const value = document.getElementById("g1364");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1364);
                        } else {
                            falseAnimation(1364);
                        }
                    } else if(item.id === 1301) {
                        const value = document.getElementById("g1301");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1301);
                            trueAnimation(13011);
                            trueAnimation(13012);
                            trueAnimation(13013);
                        } else {
                            falseAnimation(1301);
                            falseAnimation(13011);
                            falseAnimation(13012);
                            falseAnimation(13013);
                        }
                    } else if(item.id === 1348) {
                        const value = document.getElementById("g1348");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1348);
                        } else {
                            falseAnimation(1348);
                        }
                    } else if(item.id === 1347) {
                        const value = document.getElementById("g1347");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1348);
                        } else {
                            falseAnimation(1348);
                        }
                    } else if(item.id === 1187) {
                        const value = document.getElementById("g1187");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1187);
                        } else {
                            falseAnimation(1187);
                        }
                    } else if(item.id === 1186) {
                        const value = document.getElementById("g1186");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1187);
                        } else {
                            falseAnimation(1187);
                        }
                    } else if(item.id === 1256) {
                        const value = document.getElementById("g1256");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1256);
                            trueAnimation(12561);
                            trueAnimation(12562);
                        } else {
                            falseAnimation(1256);
                            falseAnimation(12561);
                            falseAnimation(12562);
                        }
                    } else if(item.id === 1255) {
                        const value = document.getElementById("g1255");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1256);
                            trueAnimation(12561);
                            trueAnimation(12562);
                        } else {
                            falseAnimation(1256);
                            falseAnimation(12561);
                            falseAnimation(12562);
                        }
                    } else if(item.id === 1094) {
                        const value = document.getElementById("g1094");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1094);
                            trueAnimation(10941);
                            trueAnimation(10942);
                            trueAnimation(10943);
                        } else {
                            falseAnimation(1094);
                            falseAnimation(10941);
                            falseAnimation(10942);
                            falseAnimation(10943);
                        }
                    } else if(item.id === 1095) {
                        const value = document.getElementById("g1095");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1094);
                            trueAnimation(10941);
                            trueAnimation(10942);
                            trueAnimation(10943);
                        } else {
                            falseAnimation(1094);
                            falseAnimation(10941);
                            falseAnimation(10942);
                            falseAnimation(10943);
                        }
                    } else if(item.id === 1117) {
                        const value = document.getElementById("g1117");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1117);
                            trueAnimation(11171);
                            trueAnimation(11172);
                            trueAnimation(11173);
                        } else {
                            falseAnimation(1117);
                            falseAnimation(11171);
                            falseAnimation(11172);
                            falseAnimation(11173);
                        }
                    } else if(item.id === 1118) {
                        const value = document.getElementById("g1118");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1117);
                            trueAnimation(11171);
                            trueAnimation(11172);
                            trueAnimation(11173);
                        } else {
                            falseAnimation(1117);
                            falseAnimation(11171);
                            falseAnimation(11172);
                            falseAnimation(11173);
                        }
                    } else if(item.id === 1048) {
                        const value = document.getElementById("g1048");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1048);
                            trueAnimation(10481);
                            trueAnimation(10482);
                            trueAnimation(10483);
                        } else {
                            falseAnimation(1048);
                            falseAnimation(10481);
                            falseAnimation(10482);
                            falseAnimation(10483);
                        }
                    } else if(item.id === 1140) {
                        const value = document.getElementById("g1140");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1141);
                            trueAnimation(11411);
                            trueAnimation(11412);
                        } else {
                            falseAnimation(1141);
                            falseAnimation(11411);
                            falseAnimation(11412);
                        }
                    } else if(item.id === 1141) {
                        const value = document.getElementById("g1141");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1141);
                            trueAnimation(11411);
                            trueAnimation(11412);
                        } else {
                            falseAnimation(1141);
                            falseAnimation(11411);
                            falseAnimation(11412);
                        }
                    } else if(item.id === 1492) {
                        const value = document.getElementById("g1492");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1492);
                        } else {
                            falseAnimation(1492);
                        }
                    } else if(item.id === 1477) {
                        const value = document.getElementById("g1477");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1477);
                        } else {
                            falseAnimation(1477);
                        }
                    } else if(item.id === 1432) {
                        const value = document.getElementById("g1432");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1432);
                        } else {
                            falseAnimation(1432);
                        }
                    } else if(item.id === 1417) {
                        const value = document.getElementById("g1417");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1417);
                        } else {
                            falseAnimation(1417);
                        }
                    } else if(item.id === 1462) {
                        const value = document.getElementById("g1462");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1462);
                        } else {
                            falseAnimation(1462);
                        }
                    } else if(item.id === 1447) {
                        const value = document.getElementById("g1447");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1447);
                        } else {
                            falseAnimation(1447);
                        }
                    } else if(item.id === 1769) {
                        const value = document.getElementById("g1769");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1769);
                        } else {
                            falseAnimation(1769);
                        }
                    } else if(item.id === 1770) {
                        const value = document.getElementById("g1770");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1769);
                        } else {
                            falseAnimation(1769);
                        }
                    }


                    else if(item.id === 1318) {
                        const value = document.getElementById("g1318");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1203) {
                        const value = document.getElementById("g1203");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1226) {
                        const value = document.getElementById("g1226");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1249) {
                        const value = document.getElementById("g1249");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1134) {
                        const value = document.getElementById("g1134");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1111) {
                        const value = document.getElementById("g1111");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }
                    //G-1
                    else if(item.id === 979) {
                        const value = document.getElementById("g979");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a979");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 8.3 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(979);
                        } else {
                            falseAnimation(979);
                        }
                    } else if(item.id === 981) {
                        const value = document.getElementById("g981");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 982) {
                        const value = document.getElementById("k979");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 983) {
                        const value = document.getElementById("n979");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 984) {
                        const value = document.getElementById("w979");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //G-2
                    else if(item.id === 956) {
                        const value = document.getElementById("g956");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a956");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 8.3 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(956);
                        } else {
                            falseAnimation(956);
                        }
                    } else if(item.id === 958) {
                        const value = document.getElementById("g958");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 959) {
                        const value = document.getElementById("k956");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 960) {
                        const value = document.getElementById("n956");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 961) {
                        const value = document.getElementById("w956");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }


                    else if(item.id === 1) {
                        const value = document.getElementById("active");
                        value.textContent = "∑ " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 2) {
                        const value = document.getElementById("reactive");
                        value.textContent = "∑ " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 3) {
                        const value = document.getElementById("activeOut");
                        value.textContent = "∑ " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 4) {
                        const value = document.getElementById("activeIn");
                        value.textContent = "∑ " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 5) {
                        const value = document.getElementById("ownNeeds");
                        value.textContent = "∑ " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " KВт";
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
</script>