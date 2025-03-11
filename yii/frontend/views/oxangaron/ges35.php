<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Охангарон ГЭС';
$energy = new Energy();
$id = 17; $idTwo = 86;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);
$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
$urlTransformer1 = $energy->getTransformer($id, 49);
$urlTransformer2 = $energy->getTransformer($id, 50);
$urlTransformer3 = $energy->getTransformer($id, 51);
$urlTransformer4 = $energy->getTransformer($id, 52);
$urlTransformer5 = $energy->getTransformer($id, 53);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['oxangaron/index']) ?>">"Охангарон ГЭС" Филиали</a></li>
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
                        viewBox="0 0 1300 600"
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
                                    d="M311 451 406 451 406 542 311 542Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip2">
                            <path
                                    d="M311 464 406 464 406 555 311 555Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip3">
                            <path
                                    d="M311 477 406 477 406 567 311 567Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip4">
                            <path
                                    d="M311 490 406 490 406 580 311 580Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip5">
                            <path
                                    d="M311 502 406 502 406 593 311 593Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip6">
                            <path
                                    d="M311 515 406 515 406 606 311 606Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip7">
                            <path
                                    d="M555 451 649 451 649 542 555 542Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip8">
                            <path
                                    d="M555 464 649 464 649 554 555 554Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip9">
                            <path
                                    d="M555 477 649 477 649 567 555 567Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip10">
                            <path
                                    d="M555 489 649 489 649 580 555 580Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip11">
                            <path
                                    d="M555 502 649 502 649 593 555 593Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip12">
                            <path
                                    d="M555 515 649 515 649 606 555 606Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip13">
                            <path
                                    d="M787 451 881 451 881 542 787 542Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip14">
                            <path
                                    d="M787 464 881 464 881 554 787 554Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip15">
                            <path
                                    d="M787 477 881 477 881 567 787 567Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip16">
                            <path
                                    d="M787 489 881 489 881 580 787 580Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip17">
                            <path
                                    d="M787 502 881 502 881 593 787 593Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip18">
                            <path
                                    d="M787 515 881 515 881 606 787 606Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,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"
                                preserveAspectRatio="none"
                                id="img19"
                        ></image>
                        <clipPath id="clip20">
                            <path
                                    d="M0 0 123.158 0 123.158 60 0 60Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip21">
                            <path
                                    d="M1054-12 1149-12 1149 78 1054 78Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip22">
                            <path
                                    d="M1156 55 1245 55 1245 145 1156 145Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip23">
                            <path
                                    d="M1160 15 1235 15 1235 105 1160 105Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP0AAP0AAP4AAP4AAP4AAP4AAP4AAP8AAMVaHOIAAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA6klEQVRIS+3XaxKDIAwE4OCjvkB6/9NWdJUEgr1Avl+W7EwtKzOVmOkrfbBe6DDOOkykAdNswESynOUSy1kusZzlEstZLrGc+kfMbZhmwWF2WDxEDLmImV8JK//QjIt3K5HH5Zv9uNFOu7HCuUEjPrTN5y+mekOkcMXIvX9z7JFTmuAmpA4LljQemcTtWKxF1h1Rj9XaiAS0atkwfwQMpFSEpNeiPKnl20KCIqT6gbiLkKrNifp7RVULK0KStVRbkvHNkUVIvJaiCClvzoKVhntz6iKku5bn2Wy5TotahJROi16E5AI7EUD0A7L3auODNhWvAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img24"
                        ></image>
                        <clipPath id="clip25">
                            <path
                                    d="M13 439 22 439 22 460 13 460Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACDfECDXGCXaFSTbFCPZFiPaFSLbFCTbFiTbFSPcEyLcFCHaFSLbFCPcEyPaFSPbFdh6Az4AAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA60lEQVRIS+3Xaw6EIAwEYPCxvnDp/U+7VkehUtgL9PuFMIlJR5JdV+gj7R7rlp2INqwb5iNGNOKpqj9jFDs8V/jvlaOAjYoFMaIJO6oRIdZjT+EjMmzHpmJD5LJgtzAhcBuw/9Llb2VfvRYuQlKHcxUhKcMZcCSUtTxFSMVw5EiSGeeQFyGJWkQRkhhOwKYmq+VdhPTUctyIlni/uSxCwm3RipDO26IWIXEtlSKk44NYsWybHRb/uDWANpyIs5AN25fj2dQP+oPTRL8g5YAsxyxnOWY5yzHLWY5ZznKsw2lS+dP1/iGW/i049wN/6mrjj3LfTQAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img26"
                        ></image>
                        <clipPath id="clip27">
                            <path
                                    d="M13 461 22 461 22 482 13 482Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip28">
                            <path
                                    d="M50 325 113 325 113 416 50 416Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip29">
                            <path
                                    d="M1189 326 1252 326 1252 416 1189 416Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip30">
                            <path
                                    d="M448 246 532 246 532 337 448 337Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip31">
                            <path
                                    d="M448 260 532 260 532 350 448 350Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip32">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
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
                                    d="M664 247 748 247 748 338 664 338Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip35">
                            <path
                                    d="M664 261 748 261 748 351 664 351Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip36">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip37">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip38">
                            <path
                                    d="M838 28 922 28 922 118 838 118Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip39">
                            <path
                                    d="M838 41 922 41 922 132 838 132Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip40">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
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
                                    d="M252 23 336 23 336 113 252 113Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip43">
                            <path
                                    d="M252 36 336 36 336 127 252 127Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip44">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip45">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip46">
                            <path
                                    d="M181 499 266 499 266 590 181 590Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip47">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip48">
                            <path
                                    d="M927 505 1012 505 1012 596 927 596Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip49">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip50">
                            <path
                                    d="M1056 504 1140 504 1140 595 1056 595Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip51">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip52">
                            <path
                                    d="M317 418 401 418 401 502 317 502Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip53">
                            <path
                                    d="M317 418 401 418 401 502 317 502Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip54">
                            <path
                                    d="M317 418 401 418 401 502 317 502Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip55">
                            <path
                                    d="M558 417 642 417 642 501 558 501Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip56">
                            <path
                                    d="M558 417 642 417 642 501 558 501Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip57">
                            <path
                                    d="M558 417 642 417 642 501 558 501Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip58">
                            <path
                                    d="M792 416 876 416 876 500 792 500Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip59">
                            <path
                                    d="M792 416 876 416 876 500 792 500Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip60">
                            <path
                                    d="M792 416 876 416 876 500 792 500Z"
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
                                d="M1.5-0.00164114 1.56667 60.9317-1.43333 60.935-1.5 0.00164114ZM-4.5 0.0049234C-4.50272-2.48036-2.4902-4.49728-0.0049234-4.5 2.48036-4.50272 4.49728-2.4902 4.5-0.0049234 4.50272 2.48036 2.4902 4.49728 0.0049234 4.5-2.48036 4.50272-4.49728 2.4902-4.5 0.0049234ZM4.56666 60.9284C4.56938 63.4137 2.55687 65.4306 0.0715901 65.4333-2.41369 65.4361-4.43061 63.4235-4.43333 60.9383-4.43605 58.453-2.42354 56.4361 0.0617433 56.4333 2.54702 56.4306 4.56395 58.4431 4.56666 60.9284Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 475.5 381.433)"
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
                                font-size="21"
                                transform="translate(520.169 25)"
                        >
                            Охангарон
                            <tspan x="110.553" y="0">ГЭС</tspan>
                            <tspan font-size="11" x="-224.054" y="161">Л</tspan>
                            <tspan font-size="11" x="-216.054" y="161">-</tspan>
                            <tspan font-size="11" x="-212.554" y="161">АГЭС</tspan>
                            <tspan font-size="11" x="-183.22" y="161">-</tspan>
                            <tspan font-size="11" x="-179.72" y="161">2</tspan>
                            <tspan font-size="11" x="-174.387" y="161">-</tspan>
                            <tspan font-size="11" x="-168.22" y="161">35кВ</tspan>
                            <tspan font-size="11" x="-460.736" y="368">КРУ 10,5 кВ</tspan>
                        </text>
                        <path
                                d="M49.5001 380.5 498.967 380.5"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(254.296 288)"
                        >
                            Т-1
                            <tspan x="-40" y="13">10,5/38,5 кВ</tspan>
                            <tspan x="-34" y="26">16000 кВА</tspan>
                            <tspan x="-48.5" y="39">SF</tspan>
                            -16000/38,5
                        </text>
                        <path
                                d="M292.533 381.25 292 332.516 295 332.484 295.533 381.217ZM298.533 381.184C298.56 383.669 296.568 385.706 294.083 385.733 291.598 385.76 289.561 383.768 289.534 381.283 289.506 378.798 291.499 376.761 293.984 376.734 296.469 376.706 298.506 378.699 298.533 381.184Z"
                                fill="#6600CC"
                        />
                        <path id="c6933"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 278.5 332.5)"
                        />
                        <path id="c6932"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 278.5 307.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(314.735 444)"
                        >
                            Г
                            <tspan x="6.83331" y="0">-</tspan>
                            1
                            <tspan font-weight="400" x="-3" y="13">10,5</tspan>
                            <tspan font-weight="400" x="-27" y="26">10,5 МВт</tspan>
                            <tspan font-weight="400" x="-53.5" y="39">SF10,5</tspan>
                            <tspan font-weight="400" x="-22.8333" y="39">-</tspan>
                            <tspan font-weight="400" x="-19.3333" y="39">18/3250</tspan>
                            <tspan x="-7.06857" y="-190">ЭВ</tspan>
                            <tspan x="7.26477" y="-190">-</tspan>
                            35
                            <tspan x="21.4314" y="-190">-</tspan>
                            Т
                            <tspan x="32.0981" y="-190">-</tspan>
                            1
                            <tspan x="-9.21866" y="-291">В</tspan>
                            <tspan x="-2.05197" y="-291">-</tspan>
                            35
                            <tspan x="12.1147" y="-291">-</tspan>
                            АГЭС2
                            <tspan x="-1.30139" y="-34">ВВ</tspan>
                            <tspan x="13.032" y="-34">-</tspan>
                            Г
                            <tspan x="23.3653" y="-34">-</tspan>
                            1
                            <tspan x="860.265" y="-46">КРУ 10,5 кВ</tspan>
                        </text>
                        <path
                                d="M700.5 380.5 1253.52 380.5"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(893.917 249)"
                        >
                            ЭВ
                            <tspan x="14.3333" y="0">-</tspan>
                            35
                            <tspan x="28.5" y="0">-</tspan>
                            Т
                            <tspan x="39.1667" y="0">-</tspan>
                            2
                            <tspan x="-108.226" y="166">ВВ</tspan>
                            <tspan x="-93.8929" y="166">-</tspan>
                            Г
                            <tspan x="-83.5595" y="166">-</tspan>
                            2
                        </text>
                        <path
                                d="M448.5 319.5 746.198 320.544"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <rect id="c494"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 466.5 357.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(629.384 444)"
                        >
                            Г
                            <tspan x="6.16663" y="0">-</tspan>
                            3
                            <tspan x="0" y="13">10,5</tspan>
                            <tspan x="0" y="26">2,5 МВт</tspan>
                            <tspan x="0" y="39">SFW2500</tspan>
                            <tspan x="43.3333" y="39">-</tspan>
                            10/1730
                            <tspan font-weight="700" x="-12.7207" y="-32">ВГ</tspan>
                            <tspan font-weight="700" x="1.2793" y="-32">-</tspan>
                            <tspan font-weight="700" x="4.7793" y="-32">3</tspan>
                            <tspan x="-459.667" y="3">ТСН</tspan>
                            <tspan x="-438.333" y="3">-</tspan>
                            1
                            <tspan x="-479.5" y="16">10,5/0,4 кВ</tspan>
                            <tspan x="-468.167" y="29">630 кВА</tspan>
                            <tspan x="-493.667" y="42">SCB</tspan>
                            <tspan x="-473.333" y="42">10</tspan>
                            <tspan x="-462.667" y="42">-</tspan>
                            630/10
                            <tspan x="-138.717" y="-93">В</tspan>
                            <tspan x="-131.55" y="-93">-</tspan>
                            КЛ
                            <tspan x="-113.717" y="-93">-</tspan>
                            1
                            <tspan x="-104.884" y="-93">-</tspan>
                            10
                            <tspan font-weight="700" x="-463.681" y="-32">В</tspan>
                            <tspan font-weight="700" x="-456.514" y="-32">-</tspan>
                            <tspan font-weight="700" x="-453.014" y="-32">ТСН</tspan>
                            <tspan font-weight="700" x="-429.847" y="-32">-</tspan>
                            <tspan font-weight="700" x="-426.347" y="-32">1</tspan>
                        </text>
                        <path
                                d="M1095.14 514.312 1094 380.513 1097 380.487 1098.14 514.286ZM1096.64 514.299 1101.11 511.261 1096.69 520.299 1092.11 511.338ZM1091 380.538C1090.98 378.053 1092.98 376.021 1095.46 376 1097.95 375.979 1099.98 377.977 1100 380.462 1100.02 382.947 1098.02 384.979 1095.54 385 1093.05 385.021 1091.02 383.024 1091 380.538Z"
                                fill="#6600CC"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(1071.01 534)"
                        >
                            Д
                            <tspan x="7.33337" y="0">Н</tspan>
                            <tspan x="15" y="0">С</tspan>
                            <tspan x="24.8334" y="0">10</tspan>
                            <tspan x="38.1666" y="0">кВ</tspan>
                        </text>
                        <rect id="c373"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1086.5 419.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(897.867 286)"
                        >
                            Т-2
                            <tspan x="0" y="13">10,5/38,5 кВ</tspan>
                            <tspan x="0" y="26">16000 кВА</tspan>
                            <tspan x="0" y="39">SF</tspan>
                            -16000/38,5
                            <tspan x="-32.3867" y="160">Г</tspan>
                            <tspan x="-26.22" y="160">-</tspan>
                            2
                            <tspan x="-32.3867" y="173">10,5</tspan>
                            <tspan x="-32.3867" y="186">10,5 МВт</tspan>
                            <tspan x="-32.3867" y="199">SF10,5</tspan>
                            <tspan x="-1.71997" y="199">-</tspan>
                            18/3250
                            <tspan x="94.0667" y="161">ТСН</tspan>
                            <tspan x="115.4" y="161">-</tspan>
                            2
                            <tspan x="94.0667" y="174">10,5/0,4 кВ</tspan>
                            <tspan x="94.0667" y="187">630 кВА</tspan>
                            <tspan x="94.0667" y="200">SCB</tspan>
                            <tspan x="114.4" y="200">10</tspan>
                            <tspan x="125.067" y="200">-</tspan>
                            630/10
                            <tspan font-weight="700" x="86.2272" y="127">В</tspan>
                            <tspan font-weight="700" x="93.3939" y="127">-</tspan>
                            <tspan font-weight="700" x="96.8939" y="127">ТСН</tspan>
                            <tspan font-weight="700" x="120.061" y="127">-</tspan>
                            <tspan font-weight="700" x="123.561" y="127">2</tspan>
                            <tspan x="-245.78" y="67">В</tspan>
                            <tspan x="-238.614" y="67">-</tspan>
                            КЛ
                            <tspan x="-220.78" y="67">-</tspan>
                            2
                            <tspan x="-211.947" y="67">-</tspan>
                            10
                        </text>
                        <path
                                d="M357.435 398.096 357.167 380.52 359.833 380.48 360.102 398.055ZM354.501 380.561C354.467 378.352 356.23 376.534 358.439 376.501 360.648 376.467 362.466 378.23 362.5 380.439 362.533 382.648 360.77 384.466 358.561 384.5 356.352 384.533 354.534 382.77 354.501 380.561Z"
                                fill="#6600CC"
                        />
                        <path
                                d="M0 0 0.000104987 25.5427"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 358.5 437.043)"
                        />
                        <rect id="c293"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 349.5 417.5)"
                        />
                        <path id="c3332"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#767171"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 205.5 493.5)"
                        />
                        <path id="c3331"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 205.5 467.5)"
                        />
                        <path
                                d="M220.067 434.369 220 380.502 223 380.498 223.067 434.365ZM217 380.506C216.997 378.02 219.009 376.003 221.494 376 223.98 375.997 225.997 378.009 226 380.495 226.003 382.98 223.991 384.997 221.506 385 219.02 385.003 217.003 382.991 217 380.506Z"
                                fill="#6600CC"
                        />
                        <path
                                d="M1.49993-0.014715 1.81503 32.1043-1.18482 32.1337-1.49993 0.014715ZM0.315103 32.119 4.78546 29.075 0.373963 38.1187-4.21411 29.1633Z"
                                fill="#767171"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 221.874 493.5)"
                        />
                        <rect id="c333"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 212.5 418.5)"
                        />
                        <path
                                d="M291.533 277.371 291.019 111.505 294.019 111.496 294.533 277.362ZM292.519 111.5 288.028 114.514 292.5 105.5 297.028 114.486Z"
                                fill="#663300"
                        />
                        <rect id="c6931"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 283.5 259.5)"
                        />
                        <rect id="c693"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 283.5 160.5)"
                        />
                        <path
                                d="M1.49997-0.00963062 2.0333 83.057-0.966636 83.0763-1.49997 0.00963062ZM5.03324 83.0378C5.0492 85.523 3.04746 87.5506 0.562225 87.5666-1.923 87.5825-3.95062 85.5808-3.96657 83.0956-3.98253 80.6103-1.98079 78.5827 0.504441 78.5668 2.98967 78.5508 5.01728 80.5525 5.03324 83.0378Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 601.5 401.567)"
                        />
                        <path
                                d="M0 0 0.000104987 25.5427"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 601.5 437.043)"
                        />
                        <rect id="c453"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 591.5 416.5)"
                        />
                        <path id="c1302"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#767171"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 954.5 494.5)"
                        />
                        <path id="c1301"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 954.5 467.5)"
                        />
                        <path
                                d="M970.067 434.369 970 380.502 973 380.498 973.067 434.365ZM967 380.506C966.997 378.02 969.009 376.003 971.494 376 973.98 375.997 975.997 378.009 976 380.495 976.003 382.98 973.991 384.997 971.506 385 969.02 385.003 967.003 382.991 967 380.506Z"
                                fill="#6600CC"
                        />
                        <path
                                d="M1.49993-0.014715 1.81503 32.1043-1.18482 32.1337-1.49993 0.014715ZM0.315103 32.119 4.78546 29.075 0.373963 38.1187-4.21411 29.1633Z"
                                fill="#767171"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 970.874 494.5)"
                        />
                        <rect id="c13"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 961.5 418.5)"
                        />
                        <path
                                d="M1.5-0.00164114 1.56667 60.9317-1.43333 60.935-1.5 0.00164114ZM-4.5 0.0049234C-4.50272-2.48036-2.4902-4.49728-0.0049234-4.5 2.48036-4.50272 4.49728-2.4902 4.5-0.0049234 4.50272 2.48036 2.4902 4.49728 0.0049234 4.5-2.48036 4.50272-4.49728 2.4902-4.5 0.0049234ZM4.56666 60.9284C4.56938 63.4137 2.55687 65.4306 0.0715901 65.4333-2.41369 65.4361-4.43061 63.4235-4.43333 60.9383-4.43605 58.453-2.42354 56.4361 0.0617433 56.4333 2.54702 56.4306 4.56395 58.4431 4.56666 60.9284Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 718.5 381.433)"
                        />
                        <rect id="c534"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 709.5 357.5)"
                        />
                        <path
                                d="M834.435 398.096 834.167 380.52 836.833 380.48 837.102 398.055ZM831.5 380.561C831.467 378.352 833.23 376.534 835.439 376.501 837.648 376.467 839.466 378.23 839.5 380.439 839.533 382.648 837.77 384.466 835.561 384.5 833.352 384.533 831.534 382.77 831.5 380.561Z"
                                fill="#6600CC"
                        />
                        <path
                                d="M0 0 0.000104987 25.5427"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 835.5 437.043)"
                        />
                        <rect id="c53"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 825.5 417.5)"
                        />
                        <path
                                d="M311.961 490.065 405.07 490.065 405.07 502.865 311.961 502.865Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.961 502.865 405.07 502.865 405.07 515.665 311.961 515.665Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.961 515.665 405.07 515.665 405.07 528.465 311.961 528.465Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.961 528.465 405.07 528.465 405.07 541.265 311.961 541.265Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.961 541.265 405.07 541.265 405.07 554.065 311.961 554.065Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.961 554.065 405.07 554.065 405.07 566.865 311.961 566.865Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.295 502.865 405.736 502.865"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.295 515.665 405.736 515.665"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.295 528.465 405.736 528.465"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.295 541.265 405.736 541.265"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.295 554.065 405.736 554.065"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.961 489.399 311.961 567.532"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M405.07 489.399 405.07 567.532"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.295 490.065 405.736 490.065"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.295 566.865 405.736 566.865"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip1)">
                            <text id="g293"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(315.741 500)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip2)">
                            <text id="g295"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(315.741 513)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip3)">
                            <text id="a293"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(315.741 526)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip4)">
                            <text id="k293"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(315.741 538)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip5)">
                            <text id="n293"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(315.741 551)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip6)">
                            <text id="w293"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(315.741 564)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M555.141 489.932 648.249 489.932 648.249 502.732 555.141 502.732Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M555.141 502.732 648.249 502.732 648.249 515.532 555.141 515.532Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M555.141 515.532 648.249 515.532 648.249 528.332 555.141 528.332Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M555.141 528.332 648.249 528.332 648.249 541.132 555.141 541.132Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M555.141 541.132 648.249 541.132 648.249 553.932 555.141 553.932Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M555.141 553.932 648.249 553.932 648.249 566.732 555.141 566.732Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M554.474 502.732 648.916 502.732"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M554.474 515.532 648.916 515.532"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M554.474 528.332 648.916 528.332"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M554.474 541.132 648.916 541.132"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M554.474 553.932 648.916 553.932"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M555.141 489.265 555.141 567.399"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M648.249 489.265 648.249 567.399"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M554.474 489.932 648.916 489.932"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M554.474 566.732 648.916 566.732"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip7)">
                            <text id="g453"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(558.92 500)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip8)">
                            <text id="g455"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(558.92 513)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip9)">
                            <text id="a453"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(558.92 526)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip10)">
                            <text id="k453"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(558.92 538)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip11)">
                            <text id="n453"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(558.92 551)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip12)">
                            <text id="w453"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(558.92 564)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M787.628 489.932 880.736 489.932 880.736 502.732 787.628 502.732Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M787.628 502.732 880.736 502.732 880.736 515.532 787.628 515.532Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M787.628 515.532 880.736 515.532 880.736 528.332 787.628 528.332Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M787.628 528.332 880.736 528.332 880.736 541.132 787.628 541.132Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M787.628 541.132 880.736 541.132 880.736 553.932 787.628 553.932Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M787.628 553.932 880.736 553.932 880.736 566.732 787.628 566.732Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M786.961 502.732 881.403 502.732"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M786.961 515.532 881.403 515.532"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M786.961 528.332 881.403 528.332"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M786.961 541.132 881.403 541.132"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M786.961 553.932 881.403 553.932"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M787.628 489.265 787.628 567.399"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M880.736 489.265 880.736 567.399"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M786.961 489.932 881.403 489.932"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M786.961 566.732 881.403 566.732"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip13)">
                            <text id="g53"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(791.407 500)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip14)">
                            <text id="g55"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(791.407 513)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip15)">
                            <text id="a53"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(791.407 526)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip16)">
                            <text id="k53"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(791.407 538)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip17)">
                            <text id="n53"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(791.407 551)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip18)">
                            <text id="w53"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(791.407 564)"
                            >
                                Qвода
                            </text>
                        </g>
                        <rect
                                x="429.5"
                                y="248.5"
                                width="333"
                                height="332"
                                stroke="#172C51"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                stroke-dasharray="5.33333 4"
                                fill="none"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(666.578 263)"
                        >
                            Охангарон МГЭС
                            <tspan x="-399.788" y="-161">П/ст ТРП</tspan>
                            -3
                            <tspan x="185.189" y="-158">П/ст ТРП</tspan>
                            <tspan x="231.022" y="-158">-</tspan>
                            3
                        </text>
                        <rect id="c6934"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 284.5 364.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(308.816 358)"
                        >
                            Р-10
                            <tspan x="20.1667" y="0">-</tspan>
                            Т-1
                            <tspan x="586.848" y="2">Р</tspan>
                            -10
                            <tspan x="607.015" y="2">-</tspan>
                            Т-2
                        </text>
                        <path
                                d="M879.533 380.25 879 331.516 882 331.484 882.533 380.217ZM885.533 380.184C885.56 382.669 883.568 384.706 881.083 384.733 878.597 384.76 876.561 382.768 876.534 380.283 876.506 377.798 878.499 375.761 880.984 375.734 883.469 375.706 885.506 377.699 885.533 380.184Z"
                                fill="#6600CC"
                        />
                        <path id="c6703"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 865.5 331.5)"
                        />
                        <path id="c6702"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 865.5 307.5)"
                        />
                        <path
                                d="M878.533 277.371 878.019 111.505 881.019 111.496 881.533 277.362ZM879.519 111.5 875.028 114.514 879.5 105.5 884.028 114.486Z"
                                fill="#663300"
                        />
                        <rect id="c6701"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 870.5 255.5)"
                        />
                        <rect id="c670"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 870.5 159.5)"
                        />
                        <rect id="c6704"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 871.5 363.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(1111.3 412)"
                        >
                            В
                            <tspan x="7.16675" y="0">-</tspan>
                            10ДНС
                            <tspan x="-220.652" y="-258">В</tspan>
                            <tspan x="-213.485" y="-258">-</tspan>
                            35
                            <tspan x="-199.319" y="-258">-</tspan>
                            АГЭС1
                            <tspan x="-223.045" y="-222">Л</tspan>
                            -АГЭС
                            <tspan x="-182.212" y="-222">-</tspan>
                            1
                            <tspan x="-173.378" y="-222">-</tspan>
                            <tspan x="-167.212" y="-222">35кВ</tspan>
                        </text>
                        <rect
                                x="93.5001"
                                y="51.5001"
                                width="887"
                                height="118"
                                stroke="#172C51"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                stroke-dasharray="5.33333 4"
                                fill="none"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(105.741 67)"
                        >
                            АО-»
                            <tspan x="24.8333" y="0">Ўзбеккўмир</tspan>
                            <tspan x="84.1667" y="0">»</tspan>
                            <tspan x="15.5" y="12">Подстанция</tspan>
                            <tspan x="-4.08" y="23">ОРУ</tspan>
                            <tspan x="18.5867" y="23">-</tspan>
                            110/35/6 ТРП
                            <tspan x="84.7533" y="23">-</tspan>
                            3
                        </text>
                        <g clip-path="url(#clip20)" transform="matrix(1.00684 0 -0 1 1029 45)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img19"
                                    transform="scale(0.789474 0.789474)"
                            ></use>
                        </g>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1050.17 40.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 1149.5 94.1712)"
                        />
                        <path
                                d="M1146.55 107.031 1138.86 98.6543 1139.35 98.2035 1147.04 106.58ZM1139.11 98.4289 1138.95 102.197 1135.5 94.5001 1142.87 98.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M1156.95 106.889 1147.5 106.5"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1054.29 26.6675 1148.66 26.6675 1148.66 39.4675 1054.29 39.4675Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1054.29 26.0008 1054.29 40.1342"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1148.66 26.0008 1148.66 40.1342"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1053.62 26.6675 1149.32 26.6675"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1053.62 39.4675 1149.32 39.4675"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip21)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1058.07 37)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1068.57 37)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M1050.5 40.5001 1069.69 40.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1156.78 93.7512 1244.44 93.7512 1244.44 106.551 1156.78 106.551Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1156.78 93.0845 1156.78 107.218"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1244.44 93.0845 1244.44 107.218"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1156.11 93.7512 1245.1 93.7512"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1156.11 106.551 1245.1 106.551"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip22)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1160.56 104)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1171.06 104)"
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
                                transform="matrix(1 0 0 -1 1046.5 48.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1156.99 66.5001)"
                        />
                        <path
                                d="M1156.5 66.5001 1175.69 66.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1160.98 53.5677 1234.17 53.5677 1234.17 66.3677 1160.98 66.3677Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1160.98 52.901 1160.98 67.0343"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1234.17 52.901 1234.17 67.0343"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1160.31 53.5677 1234.84 53.5677"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1160.31 66.3677 1234.84 66.3677"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip23)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1164.76 64)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M1132.5 94.5001 1155.21 94.5002"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M8.50005 517C8.50005 511.753 12.7533 507.5 18.0001 507.5 23.2468 507.5 27.5001 511.753 27.5001 517 27.5001 522.247 23.2468 526.5 18.0001 526.5 12.7533 526.5 8.50005 522.247 8.50005 517Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M8.50005 539C8.50005 533.753 12.7533 529.5 18.0001 529.5 23.2468 529.5 27.5001 533.753 27.5001 539 27.5001 544.247 23.2468 548.5 18.0001 548.5 12.7533 548.5 8.50005 544.247 8.50005 539Z"
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
                                transform="translate(33.5288 519)"
                        >
                            в работе
                            <tspan x="-0.0827293" y="22">в резерве</tspan>
                        </text>
                        <path
                                d="M8 495.5C8 490.253 12.2533 486 17.5 486 22.7467 486 27 490.253 27 495.5 27 500.747 22.7467 505 17.5 505 12.2533 505 8 500.747 8 495.5Z"
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
                                transform="translate(33.4461 497)"
                        >
                            в ремонте
                            <tspan fill="#828897" x="0.264881" y="-23">отдача</tspan>
                            <tspan x="0.000102997" y="-46">прием</tspan>
                        </text>
                        <g clip-path="url(#clip25)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="matrix(0.230769 0 0 0.230769 13 439)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip27)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img26"
                                    transform="matrix(0.230769 0 0 0.230769 13 461)"
                            ></use>
                        </g>
                        <path
                                d="M50.5823 364.146 112.3 364.146 112.3 376.946 50.5823 376.946Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M50.5823 363.479 50.5823 377.613"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M112.3 363.479 112.3 377.613"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M49.9156 364.146 112.967 364.146"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M49.9156 376.946 112.967 376.946"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip28)">
                            <text id="g323"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(54.3618 374)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M1189.95 364.502 1251.67 364.502 1251.67 377.302 1189.95 377.302Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1189.95 363.836 1189.95 377.969"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1251.67 363.836 1251.67 377.969"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1189.28 364.502 1252.33 364.502"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1189.28 377.302 1252.33 377.302"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip29)">
                            <text id="g43"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1193.73 375)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M448.264 285.198 531.863 285.198 531.863 298.789 448.264 298.789Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M448.264 298.789 531.863 298.789 531.863 312.381 448.264 312.381Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M447.597 298.789 532.53 298.789"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M448.264 284.532 448.264 313.047"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M531.863 284.532 531.863 313.047"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M447.597 285.198 532.53 285.198"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M447.597 312.381 532.53 312.381"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip30)">
                            <text id="g493"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(450.93 295)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip31)">
                            <text id="g494"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(450.93 309)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip32)" transform="matrix(1 0 -0 1.02857 524 286)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip33)" transform="matrix(1 0 -0 1.02857 524 300)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img26"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M664.222 286.059 747.822 286.059 747.822 299.65 664.222 299.65Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M664.222 299.65 747.822 299.65 747.822 313.241 664.222 313.241Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M663.556 299.65 748.489 299.65"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M664.222 285.392 664.222 313.908"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M747.822 285.392 747.822 313.908"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M663.556 286.059 748.489 286.059"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M663.556 313.241 748.489 313.241"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip34)">
                            <text id="g533"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(666.889 296)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip35)">
                            <text id="g534"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(666.889 310)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip36)" transform="matrix(1 0 -0 1.02857 740 287)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip37)" transform="matrix(1 0 -0 1.02857 740 300)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img26"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M838.269 66.4528 921.869 66.4528 921.869 80.044 838.269 80.044Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M838.269 80.044 921.869 80.044 921.869 93.6352 838.269 93.6352Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M837.602 80.044 922.535 80.044"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M838.269 65.7861 838.269 94.3018"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M921.869 65.7861 921.869 94.3018"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M837.602 66.4528 922.535 66.4528"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M837.602 93.6352 922.535 93.6352"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip38)">
                            <text id="g670Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(840.936 76)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip39)">
                            <text id="g670Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(840.936 90)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip40)" transform="matrix(1 0 -0 1.02857 914 67)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip41)" transform="matrix(1 0 -0 1.02857 914 81)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img26"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M252.324 61.5636 335.923 61.5636 335.923 75.1547 252.324 75.1547Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M252.324 75.1547 335.923 75.1547 335.923 88.7459 252.324 88.7459Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M251.657 75.1547 336.59 75.1547"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M252.324 60.8969 252.324 89.4126"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M335.923 60.8969 335.923 89.4126"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M251.657 61.5636 336.59 61.5636"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M251.657 88.7459 336.59 88.7459"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip42)">
                            <text id="g693Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(254.99 72)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip43)">
                            <text id="g693Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(254.99 85)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip44)" transform="matrix(1 0 -0 1.02857 328 62)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip45)" transform="matrix(1 0 -0 1.02857 328 76)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img26"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M181.753 538.355 265.353 538.355 265.353 551.946 181.753 551.946Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M181.753 537.688 181.753 552.613"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M265.353 537.688 265.353 552.613"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M181.087 538.355 266.02 538.355"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M181.087 551.946 266.02 551.946"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip46)">
                            <text id="g333"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(184.42 548)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip47)" transform="matrix(1 0 -0 1.02857 257 539)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M927.567 543.964 1011.17 543.964 1011.17 557.555 927.567 557.555Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M927.567 543.297 927.567 558.222"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1011.17 543.297 1011.17 558.222"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M926.9 543.964 1011.83 543.964"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M926.9 557.555 1011.83 557.555"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip48)">
                            <text id="g13"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(930.234 554)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip49)" transform="matrix(1 0 -0 1.02857 1003 545)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M1056.03 543.011 1139.63 543.011 1139.63 556.602 1056.03 556.602Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1056.03 542.344 1056.03 557.268"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1139.63 542.344 1139.63 557.268"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1055.37 543.011 1140.3 543.011"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1055.37 556.602 1140.3 556.602"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip50)">
                            <text id="g373"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1058.7 553)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip51)" transform="matrix(1 0 -0 1.02857 1131 544)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path id="c2931"
                                d="M335.5 461C335.5 447.469 346.469 436.5 360 436.5 373.531 436.5 384.5 447.469 384.5 461 384.5 474.531 373.531 485.5 360 485.5 346.469 485.5 335.5 474.531 335.5 461Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip52)">
                                <g clip-path="url(#clip53)">
                                    <g clip-path="url(#clip54)">
                                        <path
                                                d="M358.689 453.933 359.622 453.933 360.944 454.167 362.033 454.633 362.889 455.178 363.9 456.189 364.522 457.122 364.989 458.367 365.144 459.067 365.144 460.933 364.833 462.1 364.211 463.344 363.589 464.122 363.044 464.667 361.956 465.367 360.711 465.833 359.933 465.989 358.378 465.989 357.133 465.678 356.278 465.289 355.422 464.744 354.567 463.967 354.022 463.189 353.478 462.1 353.167 460.856 353.089 459.922 353.244 458.678 353.556 457.667 354.178 456.5 355.033 455.567 355.656 455.022 356.978 454.322 358.144 454.011Z"
                                        />
                                        <path
                                                d="M359.156 440.089 360.011 440.089 361.489 440.322 362.967 440.789 364.211 441.411 365.144 442.033 365.922 442.733 366.856 443.667 367.711 444.911 368.333 446.156 368.8 447.556 369.033 448.722 369.111 449.344 369.111 450.822 368.878 452.3 368.489 453.622 367.867 454.944 367.089 456.033 366.933 456.033 366.311 454.944 365.378 453.856 364.522 453.078 363.433 452.378 362.267 451.833 360.944 451.444 359.156 451.211Z"
                                        />
                                        <path
                                                d="M346.4 455.878 346.789 455.956 348.967 457.2 350.522 458.133 350.6 458.289 350.444 459.922 350.6 461.556 350.989 463.033 351.533 464.2 351.533 464.433 349.356 465.678 347.489 466.767 343.444 469.1 342.122 469.878 341.889 469.878 341.189 468.4 340.8 467.078 340.644 466.144 340.567 464.822 340.722 463.344 340.956 462.256 341.5 460.778 342.044 459.767 342.744 458.756 343.678 457.744 344.533 456.967 345.933 456.111Z"
                                        />
                                        <path
                                                d="M366.7 464.433 367.089 464.511 368.956 465.6 375.022 469.1 376.344 469.878 376.189 470.267 375.644 471.044 374.944 471.9 374.4 472.444 373.233 473.3 371.989 474 370.511 474.544 369.344 474.778 368.878 474.856 366.544 474.856 365.378 474.622 364.133 474.233 362.811 473.611 361.878 472.989 361.878 468.322 362.578 468.011 363.9 467.311 364.833 466.611 365.922 465.522Z"
                                        />
                                        <path
                                                d="M349.667 445.067 351.378 445.067 352.856 445.3 354.489 445.844 355.811 446.544 356.433 446.933 356.433 451.678 355.033 452.3 353.944 453 353.089 453.7 352.544 454.244 351.611 455.567 351.144 455.411 349.822 454.633 343.756 451.133 342.044 450.122 341.967 449.967 342.511 449.111 343.367 448.1 343.989 447.478 345.156 446.622 346.244 446 347.722 445.456 348.578 445.222Z"
                                        />
                                        <path
                                                d="M353.167 466.533 353.478 466.611 354.644 467.467 355.967 468.089 357.211 468.478 358.144 468.633 359.078 468.711 359.156 468.789 359.156 479.833 357.989 479.833 356.433 479.522 355.111 479.056 353.711 478.278 352.7 477.5 351.922 476.8 351.144 475.867 350.367 474.622 349.744 473.222 349.356 471.744 349.2 470.344 349.2 469.489 349.278 468.789 351.222 467.7 352.544 466.922Z"
                                        />
                                        <path
                                                d="M376.267 450.044 376.422 450.044 376.967 451.133 377.433 452.533 377.667 453.778 377.744 455.333 377.589 456.733 377.278 458.056 376.656 459.533 376.111 460.467 375.489 461.322 374.633 462.256 373.467 463.189 372.456 463.811 371.756 464.122 369.811 463.033 367.944 461.944 367.711 461.789 367.867 460.389 367.867 459.222 368.567 458.522 369.578 457.2 370.278 456.033 370.978 454.556 371.522 452.844 372.222 452.378 374.167 451.289 376.033 450.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c4531"
                                d="M576.5 460C576.5 446.469 587.469 435.5 601 435.5 614.531 435.5 625.5 446.469 625.5 460 625.5 473.531 614.531 484.5 601 484.5 587.469 484.5 576.5 473.531 576.5 460Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate3 ?>">
                            <g clip-path="url(#clip55)">
                                <g clip-path="url(#clip56)">
                                    <g clip-path="url(#clip57)">
                                        <path
                                                d="M599.689 452.933 600.622 452.933 601.944 453.167 603.033 453.633 603.889 454.178 604.9 455.189 605.522 456.122 605.989 457.367 606.144 458.067 606.144 459.933 605.833 461.1 605.211 462.344 604.589 463.122 604.044 463.667 602.956 464.367 601.711 464.833 600.933 464.989 599.378 464.989 598.133 464.678 597.278 464.289 596.422 463.744 595.567 462.967 595.022 462.189 594.478 461.1 594.167 459.856 594.089 458.922 594.244 457.678 594.556 456.667 595.178 455.5 596.033 454.567 596.656 454.022 597.978 453.322 599.144 453.011Z"
                                        />
                                        <path
                                                d="M600.156 439.089 601.011 439.089 602.489 439.322 603.967 439.789 605.211 440.411 606.144 441.033 606.922 441.733 607.856 442.667 608.711 443.911 609.333 445.156 609.8 446.556 610.033 447.722 610.111 448.344 610.111 449.822 609.878 451.3 609.489 452.622 608.867 453.944 608.089 455.033 607.933 455.033 607.311 453.944 606.378 452.856 605.522 452.078 604.433 451.378 603.267 450.833 601.944 450.444 600.156 450.211Z"
                                        />
                                        <path
                                                d="M587.4 454.878 587.789 454.956 589.967 456.2 591.522 457.133 591.6 457.289 591.444 458.922 591.6 460.556 591.989 462.033 592.533 463.2 592.533 463.433 590.356 464.678 588.489 465.767 584.444 468.1 583.122 468.878 582.889 468.878 582.189 467.4 581.8 466.078 581.644 465.144 581.567 463.822 581.722 462.344 581.956 461.256 582.5 459.778 583.044 458.767 583.744 457.756 584.678 456.744 585.533 455.967 586.933 455.111Z"
                                        />
                                        <path
                                                d="M607.7 463.433 608.089 463.511 609.956 464.6 616.022 468.1 617.344 468.878 617.189 469.267 616.644 470.044 615.944 470.9 615.4 471.444 614.233 472.3 612.989 473 611.511 473.544 610.344 473.778 609.878 473.856 607.544 473.856 606.378 473.622 605.133 473.233 603.811 472.611 602.878 471.989 602.878 467.322 603.578 467.011 604.9 466.311 605.833 465.611 606.922 464.522Z"
                                        />
                                        <path
                                                d="M590.667 444.067 592.378 444.067 593.856 444.3 595.489 444.844 596.811 445.544 597.433 445.933 597.433 450.678 596.033 451.3 594.944 452 594.089 452.7 593.544 453.244 592.611 454.567 592.144 454.411 590.822 453.633 584.756 450.133 583.044 449.122 582.967 448.967 583.511 448.111 584.367 447.1 584.989 446.478 586.156 445.622 587.244 445 588.722 444.456 589.578 444.222Z"
                                        />
                                        <path
                                                d="M594.167 465.533 594.478 465.611 595.644 466.467 596.967 467.089 598.211 467.478 599.144 467.633 600.078 467.711 600.156 467.789 600.156 478.833 598.989 478.833 597.433 478.522 596.111 478.056 594.711 477.278 593.7 476.5 592.922 475.8 592.144 474.867 591.367 473.622 590.744 472.222 590.356 470.744 590.2 469.344 590.2 468.489 590.278 467.789 592.222 466.7 593.544 465.922Z"
                                        />
                                        <path
                                                d="M617.267 449.044 617.422 449.044 617.967 450.133 618.433 451.533 618.667 452.778 618.744 454.333 618.589 455.733 618.278 457.056 617.656 458.533 617.111 459.467 616.489 460.322 615.633 461.256 614.467 462.189 613.456 462.811 612.756 463.122 610.811 462.033 608.944 460.944 608.711 460.789 608.867 459.389 608.867 458.222 609.567 457.522 610.578 456.2 611.278 455.033 611.978 453.556 612.522 451.844 613.222 451.378 615.167 450.289 617.033 449.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c5301"
                                d="M809.5 458C809.5 444.469 820.469 433.5 834 433.5 847.531 433.5 858.5 444.469 858.5 458 858.5 471.531 847.531 482.5 834 482.5 820.469 482.5 809.5 471.531 809.5 458Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip58)">
                                <g clip-path="url(#clip59)">
                                    <g clip-path="url(#clip60)">
                                        <path
                                                d="M833.689 451.933 834.622 451.933 835.944 452.167 837.033 452.633 837.889 453.178 838.9 454.189 839.522 455.122 839.989 456.367 840.144 457.067 840.144 458.933 839.833 460.1 839.211 461.344 838.589 462.122 838.044 462.667 836.956 463.367 835.711 463.833 834.933 463.989 833.378 463.989 832.133 463.678 831.278 463.289 830.422 462.744 829.567 461.967 829.022 461.189 828.478 460.1 828.167 458.856 828.089 457.922 828.244 456.678 828.556 455.667 829.178 454.5 830.033 453.567 830.656 453.022 831.978 452.322 833.144 452.011Z"
                                        />
                                        <path
                                                d="M834.156 438.089 835.011 438.089 836.489 438.322 837.967 438.789 839.211 439.411 840.144 440.033 840.922 440.733 841.856 441.667 842.711 442.911 843.333 444.156 843.8 445.556 844.033 446.722 844.111 447.344 844.111 448.822 843.878 450.3 843.489 451.622 842.867 452.944 842.089 454.033 841.933 454.033 841.311 452.944 840.378 451.856 839.522 451.078 838.433 450.378 837.267 449.833 835.944 449.444 834.156 449.211Z"
                                        />
                                        <path
                                                d="M821.4 453.878 821.789 453.956 823.967 455.2 825.522 456.133 825.6 456.289 825.444 457.922 825.6 459.556 825.989 461.033 826.533 462.2 826.533 462.433 824.356 463.678 822.489 464.767 818.444 467.1 817.122 467.878 816.889 467.878 816.189 466.4 815.8 465.078 815.644 464.144 815.567 462.822 815.722 461.344 815.956 460.256 816.5 458.778 817.044 457.767 817.744 456.756 818.678 455.744 819.533 454.967 820.933 454.111Z"
                                        />
                                        <path
                                                d="M841.7 462.433 842.089 462.511 843.956 463.6 850.022 467.1 851.344 467.878 851.189 468.267 850.644 469.044 849.944 469.9 849.4 470.444 848.233 471.3 846.989 472 845.511 472.544 844.344 472.778 843.878 472.856 841.544 472.856 840.378 472.622 839.133 472.233 837.811 471.611 836.878 470.989 836.878 466.322 837.578 466.011 838.9 465.311 839.833 464.611 840.922 463.522Z"
                                        />
                                        <path
                                                d="M824.667 443.067 826.378 443.067 827.856 443.3 829.489 443.844 830.811 444.544 831.433 444.933 831.433 449.678 830.033 450.3 828.944 451 828.089 451.7 827.544 452.244 826.611 453.567 826.144 453.411 824.822 452.633 818.756 449.133 817.044 448.122 816.967 447.967 817.511 447.111 818.367 446.1 818.989 445.478 820.156 444.622 821.244 444 822.722 443.456 823.578 443.222Z"
                                        />
                                        <path
                                                d="M828.167 464.533 828.478 464.611 829.644 465.467 830.967 466.089 832.211 466.478 833.144 466.633 834.078 466.711 834.156 466.789 834.156 477.833 832.989 477.833 831.433 477.522 830.111 477.056 828.711 476.278 827.7 475.5 826.922 474.8 826.144 473.867 825.367 472.622 824.744 471.222 824.356 469.744 824.2 468.344 824.2 467.489 824.278 466.789 826.222 465.7 827.544 464.922Z"
                                        />
                                        <path
                                                d="M851.267 448.044 851.422 448.044 851.967 449.133 852.433 450.533 852.667 451.778 852.744 453.333 852.589 454.733 852.278 456.056 851.656 457.533 851.111 458.467 850.489 459.322 849.633 460.256 848.467 461.189 847.456 461.811 846.756 462.122 844.811 461.033 842.944 459.944 842.711 459.789 842.867 458.389 842.867 457.222 843.567 456.522 844.578 455.2 845.278 454.033 845.978 452.556 846.522 450.844 847.222 450.378 849.167 449.289 851.033 448.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
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

    <?= $dashboard->GesDashboard([$id, $idTwo], "chartdiv2")?>

    <?php
    $today = date('Y-m-d');
    $yesterday = date("Y-m-d", strtotime("yesterday"));
    ?>
    const dataToday = <?= $dashboard->TodayHourGes($id) ?>;
    const data35 = <?= $dashboard->YesterdayHourGes($id) ?>;
    const dataErtoshsoy = <?= $dashboard->YesterdayHourGes($idTwo) ?>;
    const dataToday2 = <?= $dashboard->TodayHourGes($idTwo) ?>;

    const yesterday = '<?= $yesterday ?>';
    const today = '<?= $today ?>';

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
                    label: 'ГЭС-35 Оҳангарон ГЭС' + today,
                    data: dataToday,
                    borderColor: 'rgba(20, 92, 192, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(20, 92, 192, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'ГЭС-35 Оҳангарон ГЭС' + yesterday,
                    data: data35,
                    borderColor: 'rgba(20, 92, 192, 1)',
                    backgroundColor: 'rgba(20, 92, 192, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(20, 92, 192, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'Охангарон МГЭС' + yesterday,
                    data: dataErtoshsoy,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(75, 192, 192, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'Охангарон МГЭС' + today,
                    data: dataToday2,
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

</script>
<script>
    function formatNumber(number, decimals, decimalSeparator, thousandSeparator) {
        // Ensure number is converted to a float and rounded to specified decimals
        number = parseFloat(number).toFixed(decimals);

        // Split the number into integer and fractional parts
        let parts = number.split('.');

        // Add a thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        fetch('/oxangaron/server35', { signal: controller.signal })
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
                    if (item.id === 693) {
                        const plus = document.getElementById("g693Plus");
                        const minus = document.getElementById("g693Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(693);
                            trueAnimation(6931);
                            trueAnimation(6932);
                            trueAnimation(6933);
                            trueAnimation(6934);
                        } else {
                            falseAnimation(693);
                            falseAnimation(6931);
                            falseAnimation(6932);
                            falseAnimation(6933);
                            falseAnimation(6934);
                        }
                    } else if (item.id === 670) {
                        const plus = document.getElementById("g670Plus");
                        const minus = document.getElementById("g670Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(670);
                            trueAnimation(6701);
                            trueAnimation(6702);
                            trueAnimation(6703);
                            trueAnimation(6704);
                        } else {
                            falseAnimation(670);
                            falseAnimation(6701);
                            falseAnimation(6702);
                            falseAnimation(6703);
                            falseAnimation(6704);
                        }
                    } else if(item.id === 493) {
                        const value = document.getElementById("g493");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(494);
                        } else {
                            falseAnimation(494);
                        }
                    } else if(item.id === 494) {
                        const value = document.getElementById("g494");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(494);
                        } else {
                            falseAnimation(494);
                        }
                    } else if(item.id === 533) {
                        const value = document.getElementById("g533");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(534);
                        } else {
                            falseAnimation(534);
                        }
                    } else if(item.id === 534) {
                        const value = document.getElementById("g534");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(534);
                        } else {
                            falseAnimation(534);
                        }
                    } else if(item.id === 333) {
                        const value = document.getElementById("g333");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(333);
                            trueAnimation(3331);
                            trueAnimation(3332);
                        } else {
                            falseAnimation(333);
                            falseAnimation(3331);
                            falseAnimation(3332);
                        }
                    } else if(item.id === 13) {
                        const value = document.getElementById("g13");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(13);
                            trueAnimation(1301);
                            trueAnimation(1302);
                        } else {
                            falseAnimation(13);
                            falseAnimation(1301);
                            falseAnimation(1302);
                        }
                    } else if(item.id === 373) {
                        const value = document.getElementById("g373");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(373);
                        } else {
                            falseAnimation(373);
                        }
                    } else if(item.id === 43) {
                        const value = document.getElementById("g43");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВ";
                    } else if(item.id === 323) {
                        const value = document.getElementById("g323");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВ";
                    }
                    //Aggregate-1
                    else if(item.id === 293) {
                        const value = document.getElementById("g293");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a293");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 21 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(293);
                            trueAnimation(2931);
                        } else {
                            falseAnimation(293);
                            falseAnimation(2931);
                        }
                    } else if(item.id === 295) {
                        const value = document.getElementById("g295");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 296) {
                        const value = document.getElementById("k293");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 297) {
                        const value = document.getElementById("n293");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 298) {
                        const value = document.getElementById("w293");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 453) {
                        const value = document.getElementById("g453");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a453");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(453);
                            trueAnimation(4531);
                        } else {
                            falseAnimation(453);
                            falseAnimation(4531);
                        }
                    } else if(item.id === 455) {
                        const value = document.getElementById("g455");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 456) {
                        const value = document.getElementById("k453");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 457) {
                        const value = document.getElementById("n453");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 458) {
                        const value = document.getElementById("w453");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 53) {
                        const value = document.getElementById("g53");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a53");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 21.6 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(53);
                            trueAnimation(5301);
                        } else {
                            falseAnimation(53);
                            falseAnimation(5301);
                        }
                    } else if(item.id === 55) {
                        const value = document.getElementById("g55");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 56) {
                        const value = document.getElementById("k53");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 57) {
                        const value = document.getElementById("n53");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 58) {
                        const value = document.getElementById("w53");
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
            .catch(error => {
                if (error.name === 'AbortError') {
                    data = [];
                    console.log('Запрос был отменен из-за таймаута');
                    getServer();
                } else {
                    console.log('Произошла ошибка:', error);
                }
            })
            .finally(() => clearTimeout(timeoutId)); // Очистить таймаут
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