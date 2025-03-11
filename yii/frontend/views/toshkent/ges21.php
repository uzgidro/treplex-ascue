<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-21 Шайхонтохур';
$energy = new Energy();
$id = 38;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);

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
                        viewBox="0 0 1300 560"
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
                                    d="M303 419 397 419 397 509 303 509Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip2">
                            <path
                                    d="M303 432 397 432 397 522 303 522Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip3">
                            <path
                                    d="M303 444 397 444 397 535 303 535Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip4">
                            <path
                                    d="M303 457 397 457 397 548 303 548Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip5">
                            <path
                                    d="M303 470 397 470 397 561 303 561Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip6">
                            <path
                                    d="M303 483 397 483 397 573 303 573Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip7">
                            <path
                                    d="M459 419 553 419 553 510 459 510Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip8">
                            <path
                                    d="M459 432 553 432 553 522 459 522Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip9">
                            <path
                                    d="M459 445 553 445 553 535 459 535Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip10">
                            <path
                                    d="M459 457 553 457 553 548 459 548Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip11">
                            <path
                                    d="M459 470 553 470 553 561 459 561Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip12">
                            <path
                                    d="M459 483 553 483 553 574 459 574Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip13">
                            <path
                                    d="M957 419 1051 419 1051 510 957 510Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip14">
                            <path
                                    d="M957 432 1051 432 1051 523 957 523Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip15">
                            <path
                                    d="M957 445 1051 445 1051 536 957 536Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip16">
                            <path
                                    d="M957 458 1051 458 1051 548 957 548Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip17">
                            <path
                                    d="M957 471 1051 471 1051 561 957 561Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip18">
                            <path
                                    d="M957 483 1051 483 1051 574 957 574Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip19">
                            <path
                                    d="M427 47 512 47 512 137 427 137Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip20">
                            <path
                                    d="M427 60 512 60 512 151 427 151Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP0AAP0AAP4AAP4AAP4AAP4AAP4AAP8AAMVaHOIAAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA6klEQVRIS+3XaxKDIAwE4OCjvkB6/9NWdJUEgr1Avl+W7EwtKzOVmOkrfbBe6DDOOkykAdNswESynOUSy1kusZzlEstZLrGc+kfMbZhmwWF2WDxEDLmImV8JK//QjIt3K5HH5Zv9uNFOu7HCuUEjPrTN5y+mekOkcMXIvX9z7JFTmuAmpA4LljQemcTtWKxF1h1Rj9XaiAS0atkwfwQMpFSEpNeiPKnl20KCIqT6gbiLkKrNifp7RVULK0KStVRbkvHNkUVIvJaiCClvzoKVhntz6iKku5bn2Wy5TotahJROi16E5AI7EUD0A7L3auODNhWvAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img21"
                        ></image>
                        <clipPath id="clip22">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACDfECDXGCXaFSTbFCPZFiPaFSLbFCTbFiTbFSPcEyLcFCHaFSLbFCPcEyPaFSPbFdh6Az4AAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA60lEQVRIS+3Xaw6EIAwEYPCxvnDp/U+7VkehUtgL9PuFMIlJR5JdV+gj7R7rlp2INqwb5iNGNOKpqj9jFDs8V/jvlaOAjYoFMaIJO6oRIdZjT+EjMmzHpmJD5LJgtzAhcBuw/9Llb2VfvRYuQlKHcxUhKcMZcCSUtTxFSMVw5EiSGeeQFyGJWkQRkhhOwKYmq+VdhPTUctyIlni/uSxCwm3RipDO26IWIXEtlSKk44NYsWybHRb/uDWANpyIs5AN25fj2dQP+oPTRL8g5YAsxyxnOWY5yzHLWY5ZznKsw2lS+dP1/iGW/i049wN/6mrjj3LfTQAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img23"
                        ></image>
                        <clipPath id="clip24">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip25">
                            <path
                                    d="M670 46 754 46 754 136 670 136Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip26">
                            <path
                                    d="M670 59 754 59 754 150 670 150Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip27">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip28">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip29">
                            <path
                                    d="M177 55 261 55 261 146 177 146Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip30">
                            <path
                                    d="M296 56 380 56 380 146 296 146Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip31">
                            <path
                                    d="M547 56 631 56 631 146 547 146Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip32">
                            <path
                                    d="M866 56 951 56 951 146 866 146Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip33">
                            <path
                                    d="M962 56 1046 56 1046 146 962 146Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip34">
                            <path
                                    d="M1059 56 1143 56 1143 146 1059 146Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip35">
                            <path
                                    d="M757 170 817 170 817 260 757 260Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip36">
                            <path
                                    d="M623 477 707 477 707 568 623 568Z"
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
                                    d="M103 474 188 474 188 564 103 564Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip39">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip40">
                            <path
                                    d="M1174 271 1234 271 1234 362 1174 362Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip41">
                            <path
                                    d="M214 271 274 271 274 362 214 362Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip42">
                            <path
                                    d="M310 384 394 384 394 468 310 468Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip43">
                            <path
                                    d="M310 384 394 384 394 468 310 468Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip44">
                            <path
                                    d="M310 384 394 384 394 468 310 468Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip45">
                            <path
                                    d="M465 385 549 385 549 469 465 469Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip46">
                            <path
                                    d="M465 385 549 385 549 469 465 469Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip47">
                            <path
                                    d="M465 385 549 385 549 469 465 469Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip48">
                            <path
                                    d="M963 385 1047 385 1047 469 963 469Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip49">
                            <path
                                    d="M963 385 1047 385 1047 469 963 469Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip50">
                            <path
                                    d="M963 385 1047 385 1047 469 963 469Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,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"
                                preserveAspectRatio="none"
                                id="img51"
                        ></image>
                        <clipPath id="clip52">
                            <path
                                    d="M0 0 125 0 125 60.8974 0 60.8974Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip53">
                            <path
                                    d="M1089-35 1185-35 1185 56 1089 56Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip54">
                            <path
                                    d="M1192 33 1270 33 1270 123 1192 123Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip55">
                            <path
                                    d="M1196-8 1270-8 1270 83 1196 83Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip56">
                            <path
                                    d="M0 0 8 0 8 18.6667 0 18.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip57">
                            <path
                                    d="M0 0 8 0 8 18.6667 0 18.6667Z"
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
                                d="M1.5-8.01282e-07 1.5001 190.536-1.4999 190.536-1.5 8.01282e-07ZM-4.5 2.40384e-06C-4.5-2.48528-2.48528-4.5-2.40384e-06-4.5 2.48528-4.5 4.5-2.48528 4.5-2.40384e-06 4.5 2.48528 2.48528 4.5 2.40384e-06 4.5-2.48528 4.5-4.5 2.48528-4.5 2.40384e-06ZM0.000101782 190.535 4.5001 187.535 0.000104987 196.535-4.4999 187.535Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 908.5 326.035)"
                        />
                        <path
                                d="M0 0 1020.05 0.000104987"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1233.55 326.5)"
                        />
                        <path
                                d="M0 0 724.125 0.000104987"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 816.625 224.5)"
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
                                transform="translate(192.376 122)"
                        >
                            Ф
                            <tspan x="9.16667" y="0">-</tspan>
                            Навоий
                            <tspan x="121.364" y="-1">Ф</tspan>
                            <tspan x="130.531" y="-1">-</tspan>
                            Резерв
                        </text>
                        <path
                                d="M1.49994-0.0130645 2.27068 88.4754-0.729208 88.5015-1.49994 0.0130645ZM-4.49983 0.0391935C-4.52148-2.44599-2.52438-4.47818-0.0391935-4.49983 2.44599-4.52148 4.47818-2.52438 4.49983-0.0391935 4.52148 2.44599 2.52438 4.47818 0.0391935 4.49983-2.44599 4.52148-4.47818 2.52438-4.49983 0.0391935ZM0.770734 88.4884 5.24443 85.4493 0.822992 94.4882-3.75522 85.5277Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 713.5 223.988)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(437.09 276)"
                        >
                            МС
                            <tspan x="17.6667" y="0">В</tspan>
                            <tspan x="320.252" y="-40">КРУ-3 6 кВ</tspan>
                            <tspan x="296.057" y="35">МСВ-6кВ</tspan>
                            <tspan x="737.175" y="63">КРУ-2 6кВ</tspan>
                            <tspan x="-223.814" y="62">КРУ-1 6 кВ</tspan>
                            <tspan x="185.421" y="143">ТC-1</tspan>
                            <tspan x="171.421" y="156">6/0,4 кВ</tspan>
                            <tspan x="148" y="169">ТСМА-160/6</tspan>
                        </text>
                        <rect id="c934"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 704.5 178.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="19"
                                transform="translate(501.695 29)"
                        >
                            ГЭС-
                            <tspan x="44.1667" y="0">21</tspan>
                            <tspan x="67.5" y="0">Шайхонтохур</tspan>
                            <tspan font-size="11" x="-268.085" y="144">В</tspan>
                            <tspan font-size="11" x="-260.919" y="144">-</tspan>
                            <tspan font-size="11" x="-257.419" y="144">Ф</tspan>
                            <tspan font-size="11" x="-248.252" y="144">-</tspan>
                            <tspan font-size="11" x="-244.752" y="144">Н</tspan>
                        </text>
                        <rect id="c10002"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#546600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 898.5 176.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(172.342 418)"
                        >
                            Т
                            <tspan x="7.16667" y="0">C</tspan>
                            <tspan x="14.8333" y="0">-</tspan>
                            2
                            <tspan x="-11" y="13">6,3</tspan>
                            <tspan x="2.33334" y="13">/0,4</tspan>
                            кВ
                            <tspan x="-12.1667" y="26">ТС</tspan>
                            <tspan x="2.66667" y="26">-</tspan>
                            180/10
                            <tspan x="712.211" y="-293">Ф.Резерв</tspan>
                            <tspan x="751.007" y="-247">В</tspan>
                            <tspan x="758.173" y="-247">-</tspan>
                            Резерв
                            <tspan x="261.626" y="-293">Ф.Алоқадор</tspan>
                            -1
                            <tspan x="307.411" y="-245">В</tspan>
                            <tspan x="314.578" y="-245">-</tspan>
                            А
                            <tspan x="325.745" y="-245">-</tspan>
                            1
                            <tspan x="795.615" y="-293">ф.Телецентр</tspan>
                            <tspan x="847.228" y="-247">В</tspan>
                            <tspan x="854.395" y="-247">-</tspan>
                            Ф
                            <tspan x="867.061" y="-247">-</tspan>
                            Т
                            <tspan x="-73.7998" y="-154">В</tspan>
                            -Т
                            <tspan x="-55.9664" y="-154">C</tspan>
                            <tspan x="-48.2998" y="-154">-</tspan>
                            2
                            <tspan x="389.985" y="-295">Ф</tspan>
                            <tspan x="399.152" y="-295">-</tspan>
                            Резерв
                            <tspan x="507.462" y="-296">Ф.Алоқадор</tspan>
                            -2
                            <tspan x="553.844" y="-246">В</tspan>
                            <tspan x="561.011" y="-246">-</tspan>
                            А-2
                            <tspan x="901.317" y="-293">Ф.Резерв</tspan>
                            <tspan x="181.082" y="-245">В</tspan>
                            <tspan x="188.249" y="-245">-</tspan>
                            Резерв
                            <tspan x="428.671" y="-245">В</tspan>
                            <tspan x="435.838" y="-245">-</tspan>
                            Резерв
                            <tspan x="939.496" y="-248">В</tspan>
                            <tspan x="946.662" y="-248">-</tspan>
                            Резерв
                            <tspan x="504.77" y="-39">В</tspan>
                            <tspan x="511.937" y="-39">-</tspan>
                            Т
                            <tspan x="522.604" y="-39">C</tspan>
                            -1
                            <tspan x="133.079" y="-9">Г</tspan>
                            <tspan x="139.912" y="-9">-</tspan>
                            1
                            <tspan x="119.412" y="4">6,3</tspan>
                            <tspan x="135.412" y="4">кВ</tspan>
                            <tspan x="118.412" y="17">1</tspan>
                            МВт
                            <tspan x="128.579" y="30">ATJ</tspan>
                            <tspan x="785.727" y="-12">Г</tspan>
                            -3
                            <tspan x="772.06" y="1">6,3</tspan>
                            <tspan x="788.06" y="1">кВ</tspan>
                            <tspan x="763.06" y="14">1</tspan>
                            ,6
                            <tspan x="779.06" y="14">МВт</tspan>
                            <tspan x="732.394" y="27">ВГС</tspan>
                            -325/39-40
                        </text>
                        <path
                                d="M1.5-2.05611e-06 1.5001 76.5914-1.49989 76.5914-1.5 2.05611e-06ZM4.5001 76.5914C4.50011 79.0767 2.48539 81.0914 0.000111155 81.0914-2.48517 81.0914-4.49989 79.0767-4.4999 76.5914-4.4999 74.1061-2.48518 72.0914 9.88185e-05 72.0914 2.48538 72.0914 4.5001 74.1061 4.5001 76.5914Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 351.5 403.091)"
                        />
                        <rect id="c759"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 342.5 385.5)"
                        />
                        <path
                                d="M303.371 457.708 396.48 457.708 396.48 470.508 303.371 470.508Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M303.371 470.508 396.48 470.508 396.48 483.308 303.371 483.308Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M303.371 483.308 396.48 483.308 396.48 496.108 303.371 496.108Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M303.371 496.108 396.48 496.108 396.48 508.908 303.371 508.908Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M303.371 508.908 396.48 508.908 396.48 521.708 303.371 521.708Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M303.371 521.708 396.48 521.708 396.48 534.508 303.371 534.508Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M302.705 470.508 397.146 470.508"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M302.705 483.308 397.146 483.308"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M302.705 496.108 397.146 496.108"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M302.705 508.908 397.146 508.908"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M302.705 521.708 397.146 521.708"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M303.371 457.041 303.371 535.175"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M396.48 457.041 396.48 535.175"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M302.705 457.708 397.146 457.708"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M302.705 534.508 397.146 534.508"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip1)">
                            <text id="g759"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(307.151 468)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip2)">
                            <text id="g760"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(307.151 481)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip3)">
                            <text id="a759"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(307.151 493)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip4)">
                            <text id="k759"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(307.151 506)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip5)">
                            <text id="n759"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(307.151 519)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip6)">
                            <text id="w759" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(307.151 532)"
                            >
                                Qвода
                            </text>
                        </g>
                        <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(314.818 532)"
                        >
                            <tspan fill="#828897" font-weight="700" x="146.838" y="-123">Г</tspan>
                            <tspan fill="#828897" font-weight="700" x="153.672" y="-123">-</tspan>
                            <tspan fill="#828897" font-weight="700" x="157.172" y="-123">2</tspan>
                            <tspan fill="#828897" font-weight="700" x="133.172" y="-110">6,3</tspan>
                            <tspan fill="#828897" font-weight="700" x="149.172" y="-110">кВ</tspan>
                            <tspan fill="#828897" font-weight="700" x="132.172" y="-97">1</tspan>
                            <tspan fill="#828897" font-weight="700" x="140.172" y="-97">МВт</tspan>
                            <tspan fill="#828897" font-weight="700" x="142.338" y="-84">ATJ</tspan>
                        </text>
                        <path
                                d="M1.5-2.05611e-06 1.5001 76.5914-1.49989 76.5914-1.5 2.05611e-06ZM4.5001 76.5914C4.50011 79.0767 2.48539 81.0914 0.000111155 81.0914-2.48517 81.0914-4.49989 79.0767-4.4999 76.5914-4.4999 74.1061-2.48518 72.0914 9.88185e-05 72.0914 2.48538 72.0914 4.5001 74.1061 4.5001 76.5914Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 507.5 403.091)"
                        />
                        <rect id="c774"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 498.5 385.5)"
                        />
                        <path
                                d="M459.607 457.819 552.715 457.819 552.715 470.619 459.607 470.619Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M459.607 470.619 552.715 470.619 552.715 483.419 459.607 483.419Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M459.607 483.419 552.715 483.419 552.715 496.219 459.607 496.219Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M459.607 496.219 552.715 496.219 552.715 509.019 459.607 509.019Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M459.607 509.019 552.715 509.019 552.715 521.819 459.607 521.819Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M459.607 521.819 552.715 521.819 552.715 534.619 459.607 534.619Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M458.94 470.619 553.382 470.619"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M458.94 483.419 553.382 483.419"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M458.94 496.219 553.382 496.219"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M458.94 509.019 553.382 509.019"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M458.94 521.819 553.382 521.819"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M459.607 457.152 459.607 535.286"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M552.715 457.152 552.715 535.286"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M458.94 457.819 553.382 457.819"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M458.94 534.619 553.382 534.619"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip7)">
                            <text id="g774"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(463.386 468)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip8)">
                            <text id="g775"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(463.386 481)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip9)">
                            <text id="a774"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(463.386 493)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip10)">
                            <text id="k774"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(463.386 506)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip11)">
                            <text id="n774"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(463.386 519)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip12)">
                            <text id="w774" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(463.386 532)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M957.375 458.359 1050.48 458.359 1050.48 471.159 957.375 471.159Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M957.375 471.159 1050.48 471.159 1050.48 483.959 957.375 483.959Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M957.375 483.959 1050.48 483.959 1050.48 496.759 957.375 496.759Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M957.375 496.759 1050.48 496.759 1050.48 509.559 957.375 509.559Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M957.375 509.559 1050.48 509.559 1050.48 522.359 957.375 522.359Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M957.375 522.359 1050.48 522.359 1050.48 535.159 957.375 535.159Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M956.708 471.159 1051.15 471.159"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M956.708 483.959 1051.15 483.959"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M956.708 496.759 1051.15 496.759"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M956.708 509.559 1051.15 509.559"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M956.708 522.359 1051.15 522.359"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M957.375 457.693 957.375 535.826"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1050.48 457.693 1050.48 535.826"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M956.708 458.359 1051.15 458.359"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M956.708 535.159 1051.15 535.159"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip13)">
                            <text id="g795"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(961.155 468)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip14)">
                            <text id="g797"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(961.155 481)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip15)">
                            <text id="a795"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(961.155 494)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip16)">
                            <text id="k795"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(961.155 507)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip17)">
                            <text id="n795"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(961.155 520)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip18)">
                            <text id="w795"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(961.155 532)"
                            >
                                Qвода
                            </text>
                        </g>
                        <rect
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 747.5 335.5)"
                        />
                        <path
                                d="M664.5 469.5 664.5 497.292"
                                stroke="#000000"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.49997-0.0101025 1.78355 42.0943-1.21639 42.1145-1.49997 0.0101025ZM0.283579 42.1044 4.76327 39.0741 0.323989 48.1043-4.23652 39.1348Z"
                                fill="#989898"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 664.824 457.5)"
                        />
                        <path id="c8872"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 649.5 457.5)"
                        />
                        <path id="c8871"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 649.5 433.5)"
                        />
                        <path
                                d="M-1.50812 15-1.16401 11.6965-0.20213 8.6048 1.31771 5.77237 3.37371 3.37371 5.77237 1.31771 8.6048-0.20213 11.6965-1.16401 15-1.50812 18.2988-1.16449 21.4611-0.202057 24.2244 1.31775 26.6917 3.37383 28.6883 5.78353 30.2021 8.6048 31.164 11.6965 31.5081 15 31.1645 18.2988 30.2021 21.4611 28.6883 24.2134 26.6918 26.6918 24.2134 28.6883 21.4611 30.2021 18.2988 31.1645 15 31.5081 11.6965 31.164 8.6048 30.2021 5.78353 28.6883 3.37383 26.6917 1.31775 24.2244-0.202057 21.4611-1.16449 18.2988ZM1.80443 17.8446 1.74751 17.5633 2.62251 20.4383 2.50182 20.1521 3.87682 22.6521 3.71483 22.4147 5.58983 24.6647 5.39453 24.47 7.58203 26.2825 7.33423 26.1158 9.89673 27.4908 9.6331 27.3802 12.4456 28.2552 12.1554 28.1956 15.1554 28.5081 14.8446 28.5081 17.8446 28.1956 17.5633 28.2525 20.4383 27.3775 20.1521 27.4982 22.6521 26.1232 22.434 26.2694 24.684 24.4569 24.4569 24.684 26.2694 22.434 26.1232 22.6521 27.4982 20.1521 27.3775 20.4383 28.2525 17.5633 28.1956 17.8446 28.5081 14.8446 28.5081 15.1554 28.1956 12.1554 28.2552 12.4456 27.3802 9.6331 27.4908 9.89673 26.1158 7.33423 26.2825 7.58203 24.47 5.39453 24.6647 5.58983 22.4147 3.71483 22.6521 3.87682 20.1521 2.50182 20.4383 2.62251 17.5633 1.74751 17.8446 1.80443 14.8446 1.49193 15.1554 1.49193 12.1554 1.80443 12.4456 1.74479 9.6331 2.61979 9.89673 2.50924 7.33423 3.88424 7.60119 3.70138 5.41369 5.57638 5.57638 5.41369 3.70138 7.60119 3.88424 7.33423 2.50924 9.89673 2.61979 9.6331 1.74479 12.4456 1.80443 12.1554 1.49193 15.1554 1.49193 14.8446Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 649.5 433.5)"
                        />
                        <path
                                d="M1.5-2.04672e-06 1.5001 76.9427-1.49989 76.9427-1.5 2.04672e-06ZM4.5001 76.9427C4.50011 79.4279 2.48539 81.4427 0.000111127 81.4427-2.48517 81.4427-4.49989 79.428-4.4999 76.9427-4.4999 74.4574-2.48518 72.4427 9.88467e-05 72.4427 2.48538 72.4427 4.5001 74.4574 4.5001 76.9427Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 664.5 403.443)"
                        />
                        <rect id="c887"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 655.5 385.5)"
                        />
                        <path
                                d="M1.49997-0.0101025 1.78355 42.0943-1.21639 42.1145-1.49997 0.0101025ZM0.283579 42.1044 4.76327 39.0741 0.323989 48.1043-4.23652 39.1348Z"
                                fill="#989898"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 141.824 454.5)"
                        />
                        <path id="c8642"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 127.5 454.5)"
                        />
                        <path id="c8641"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 127.5 430.5)"
                        />
                        <path
                                d="M-1.50812 15-1.16401 11.6965-0.20213 8.6048 1.31771 5.77237 3.37371 3.37371 5.77237 1.31771 8.6048-0.20213 11.6965-1.16401 15-1.50812 18.2988-1.16449 21.4611-0.202057 24.2244 1.31775 26.6917 3.37383 28.6883 5.78353 30.2021 8.6048 31.164 11.6965 31.5081 15 31.1645 18.2988 30.2021 21.4611 28.6883 24.2134 26.6918 26.6918 24.2134 28.6883 21.4611 30.2021 18.2988 31.1645 15 31.5081 11.6965 31.164 8.6048 30.2021 5.78353 28.6883 3.37383 26.6917 1.31775 24.2244-0.202057 21.4611-1.16449 18.2988ZM1.80443 17.8446 1.74751 17.5633 2.62251 20.4383 2.50182 20.1521 3.87682 22.6521 3.71483 22.4147 5.58983 24.6647 5.39453 24.47 7.58203 26.2825 7.33423 26.1158 9.89673 27.4908 9.6331 27.3802 12.4456 28.2552 12.1554 28.1956 15.1554 28.5081 14.8446 28.5081 17.8446 28.1956 17.5633 28.2525 20.4383 27.3775 20.1521 27.4982 22.6521 26.1232 22.434 26.2694 24.684 24.4569 24.4569 24.684 26.2694 22.434 26.1232 22.6521 27.4982 20.1521 27.3775 20.4383 28.2525 17.5633 28.1956 17.8446 28.5081 14.8446 28.5081 15.1554 28.1956 12.1554 28.2552 12.4456 27.3802 9.6331 27.4908 9.89673 26.1158 7.33423 26.2825 7.58203 24.47 5.39453 24.6647 5.58983 22.4147 3.71483 22.6521 3.87682 20.1521 2.50182 20.4383 2.62251 17.5633 1.74751 17.8446 1.80443 14.8446 1.49193 15.1554 1.49193 12.1554 1.80443 12.4456 1.74479 9.6331 2.61979 9.89673 2.50924 7.33423 3.88424 7.60119 3.70138 5.41369 5.57638 5.57638 5.41369 3.70138 7.60119 3.88424 7.33423 2.50924 9.89673 2.61979 9.6331 1.74479 12.4456 1.80443 12.1554 1.49193 15.1554 1.49193 14.8446Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 127.5 430.5)"
                        />
                        <path
                                d="M1.5-8.94547e-07 1.5001 176.045-1.49989 176.045-1.5 8.94547e-07ZM4.5001 176.045C4.50011 178.53 2.48539 180.545 0.000107671 180.545-2.48517 180.545-4.49989 178.53-4.4999 176.045-4.4999 173.559-2.48518 171.545 0.000102303 171.545 2.48538 171.545 4.5001 173.559 4.5001 176.045Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 142.5 400.545)"
                        />
                        <rect id="c864"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 132.5 383.5)"
                        />
                        <path
                                d="M1.5-2.05611e-06 1.5001 76.5914-1.49989 76.5914-1.5 2.05611e-06ZM4.5001 76.5914C4.50011 79.0767 2.48539 81.0914 0.000111155 81.0914-2.48517 81.0914-4.49989 79.0767-4.4999 76.5914-4.4999 74.1061-2.48518 72.0914 9.88185e-05 72.0914 2.48538 72.0914 4.5001 74.1061 4.5001 76.5914Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 1005.5 403.091)"
                        />
                        <rect id="c795"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 996.5 385.5)"
                        />
                        <path
                                d="M1.5-8.01282e-07 1.5001 190.536-1.4999 190.536-1.5 8.01282e-07ZM-4.5 2.40384e-06C-4.5-2.48528-2.48528-4.5-2.40384e-06-4.5 2.48528-4.5 4.5-2.48528 4.5-2.40384e-06 4.5 2.48528 2.48528 4.5 2.40384e-06 4.5-2.48528 4.5-4.5 2.48528-4.5 2.40384e-06ZM0.000101782 190.535 4.5001 187.535 0.000104987 196.535-4.4999 187.535Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 1005.5 327.035)"
                        />
                        <rect id="c841"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#546600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 995.5 177.5)"
                        />
                        <path
                                d="M1.5-8.01282e-07 1.5001 190.536-1.4999 190.536-1.5 8.01282e-07ZM-4.5 2.40384e-06C-4.5-2.48528-2.48528-4.5-2.40384e-06-4.5 2.48528-4.5 4.5-2.48528 4.5-2.40384e-06 4.5 2.48528 2.48528 4.5 2.40384e-06 4.5-2.48528 4.5-4.5 2.48528-4.5 2.40384e-06ZM0.000101782 190.535 4.5001 187.535 0.000104987 196.535-4.4999 187.535Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 1097.5 327.035)"
                        />
                        <rect id="c10003"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#546600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1087.5 177.5)"
                        />
                        <path
                                d="M1.49994-0.0130645 2.27068 88.4754-0.729208 88.5015-1.49994 0.0130645ZM-4.49983 0.0391935C-4.52148-2.44599-2.52438-4.47818-0.0391935-4.49983 2.44599-4.52148 4.47818-2.52438 4.49983-0.0391935 4.52148 2.44599 2.52438 4.47818 0.0391935 4.49983-2.44599 4.52148-4.47818 2.52438-4.49983 0.0391935ZM0.770734 88.4884 5.24443 85.4493 0.822992 94.4882-3.75522 85.5277Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 588.5 223.988)"
                        />
                        <rect id="c10001"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 579.5 178.5)"
                        />
                        <path
                                d="M1.49994-0.0130645 2.27068 88.4754-0.729208 88.5015-1.49994 0.0130645ZM-4.49983 0.0391935C-4.52148-2.44599-2.52438-4.47818-0.0391935-4.49983 2.44599-4.52148 4.47818-2.52438 4.49983-0.0391935 4.52148 2.44599 2.52438 4.47818 0.0391935 4.49983-2.44599 4.52148-4.47818 2.52438-4.49983 0.0391935ZM0.770734 88.4884 5.24443 85.4493 0.822992 94.4882-3.75522 85.5277Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 466.5 223.988)"
                        />
                        <rect id="c911"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 457.5 178.5)"
                        />
                        <path
                                d="M1.49994-0.0130645 2.27068 88.4754-0.729208 88.5015-1.49994 0.0130645ZM-4.49983 0.0391935C-4.52148-2.44599-2.52438-4.47818-0.0391935-4.49983 2.44599-4.52148 4.47818-2.52438 4.49983-0.0391935 4.52148 2.44599 2.52438 4.47818 0.0391935 4.49983-2.44599 4.52148-4.47818 2.52438-4.49983 0.0391935ZM0.770734 88.4884 5.24443 85.4493 0.822992 94.4882-3.75522 85.5277Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 337.5 223.988)"
                        />
                        <rect id="c10000"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 328.5 178.5)"
                        />
                        <path
                                d="M1.49994-0.0130645 2.27068 88.4754-0.729208 88.5015-1.49994 0.0130645ZM-4.49983 0.0391935C-4.52148-2.44599-2.52438-4.47818-0.0391935-4.49983 2.44599-4.52148 4.47818-2.52438 4.49983-0.0391935 4.52148 2.44599 2.52438 4.47818 0.0391935 4.49983-2.44599 4.52148-4.47818 2.52438-4.49983 0.0391935ZM0.770734 88.4884 5.24443 85.4493 0.822992 94.4882-3.75522 85.5277Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 217.5 223.988)"
                        />
                        <rect id="c818"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 208.5 178.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(520.925 378)"
                        >
                            В
                            <tspan x="7.16669" y="0">-</tspan>
                            Г
                            <tspan x="17.5" y="0">-</tspan>
                            2
                            <tspan x="-366.662" y="0">В</tspan>
                            -Т
                            <tspan x="-348.828" y="0">C</tspan>
                            -1
                            <tspan x="-156.239" y="1">В</tspan>
                            <tspan x="-149.072" y="1">-</tspan>
                            Г
                            <tspan x="-138.739" y="1">-</tspan>
                            1
                        </text>
                        <path
                                d="M1.5-1.54074e-06 1.5001 102.211-1.49989 102.211-1.5 1.54074e-06ZM-4.5 4.62222e-06C-4.5-2.48528-2.48529-4.5-4.62222e-06-4.5 2.48528-4.5 4.5-2.48529 4.5-4.62222e-06 4.5 2.48528 2.48529 4.5 4.62222e-06 4.5-2.48528 4.5-4.5 2.48529-4.5 4.62222e-06ZM4.5001 102.211C4.50011 104.696 2.48539 106.711 0.000109609 106.711-2.48517 106.711-4.49989 104.696-4.4999 102.211-4.4999 99.7254-2.48518 97.7107 0.000100365 97.7107 2.48538 97.7107 4.5001 99.7254 4.5001 102.211Z"
                                fill="#546600"
                                transform="matrix(1 0 0 -1 422.5 326.711)"
                        />
                        <rect
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 412.5 282.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(1018.59 379)"
                        >
                            В
                            <tspan x="7.16669" y="0">-</tspan>
                            Г
                            <tspan x="17.5001" y="0">-</tspan>
                            3
                        </text>
                        <path
                                d="M427.989 85.5452 511.589 85.5452 511.589 99.1364 427.989 99.1364Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M427.989 99.1364 511.589 99.1364 511.589 112.728 427.989 112.728Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M427.323 99.1364 512.256 99.1364"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M427.989 84.8785 427.989 113.394"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M511.589 84.8785 511.589 113.394"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M427.323 85.5452 512.256 85.5452"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M427.323 112.728 512.256 112.728"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip19)">
                            <text id="g911"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(431.769 96)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip20)">
                            <text id="g910"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(431.769 109)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip22)" transform="matrix(1 0 -0 1.02857 505 86)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img21"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip24)" transform="matrix(1.16667 0 -0 1 505 100)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img23"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <path
                                d="M670.359 84.7332 753.958 84.7332 753.958 98.3244 670.359 98.3244Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M670.359 98.3244 753.958 98.3244 753.958 111.916 670.359 111.916Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M669.692 98.3244 754.625 98.3244"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M670.359 84.0666 670.359 112.582"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M753.958 84.0666 753.958 112.582"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M669.692 84.7332 754.625 84.7332"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M669.692 111.916 754.625 111.916"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip25)">
                            <text id="g933"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(674.138 95)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip26)">
                            <text id="g934"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(674.138 108)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip27)" transform="matrix(1 0 -0 1.02857 747 85)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img21"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip28)" transform="matrix(1 0 -0 1.02857 748 99)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img23"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M177.351 94.3827 260.95 94.3827 260.95 107.974 177.351 107.974Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M177.351 93.716 177.351 108.641"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M260.95 93.716 260.95 108.641"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M176.684 94.3827 261.617 94.3827"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M176.684 107.974 261.617 107.974"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip29)">
                            <text id="g818"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(181.13 104)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M296.307 94.7228 379.906 94.7228 379.906 108.314 296.307 108.314Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M296.307 94.0562 296.307 108.981"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M379.906 94.0562 379.906 108.981"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M295.64 94.7228 380.573 94.7228"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M295.64 108.314 380.573 108.314"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip30)">
                            <text
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(300.086 105)"
                            >
                                Р= 0,000 МВт
                            </text>
                        </g>
                        <path
                                d="M547.06 94.7192 630.659 94.7192 630.659 108.31 547.06 108.31Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M547.06 94.0525 547.06 108.977"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M630.659 94.0525 630.659 108.977"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M546.393 94.7192 631.326 94.7192"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M546.393 108.31 631.326 108.31"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip31)">
                            <text
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(550.839 105)"
                            >
                                Р= 0,000 МВт
                            </text>
                        </g>
                        <path
                                d="M866.777 94.7341 950.376 94.7341 950.376 108.325 866.777 108.325Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M866.777 94.0674 866.777 108.992"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M950.376 94.0674 950.376 108.992"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M866.11 94.7341 951.043 94.7341"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M866.11 108.325 951.043 108.325"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip32)">
                            <text
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(870.556 105)"
                            >
                                Р= 0,000 МВт
                            </text>
                        </g>
                        <path
                                d="M962.129 94.5028 1045.73 94.5028 1045.73 108.094 962.129 108.094Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M962.129 93.8361 962.129 108.761"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1045.73 93.8361 1045.73 108.761"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M961.463 94.5028 1046.4 94.5028"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M961.463 108.094 1046.4 108.094"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip33)">
                            <text id="g841"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(965.909 105)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M1059.05 94.5028 1142.65 94.5028 1142.65 108.094 1059.05 108.094Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1059.05 93.8361 1059.05 108.761"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1142.65 93.8361 1142.65 108.761"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1058.39 94.5028 1143.32 94.5028"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1058.39 108.094 1143.32 108.094"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip34)">
                            <text
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1062.83 105)"
                            >
                                Р= 0,000 МВт
                            </text>
                        </g>
                        <path
                                d="M757.583 208.506 816.121 208.506 816.121 221.306 757.583 221.306Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M757.583 207.839 757.583 221.973"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M816.121 207.839 816.121 221.973"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M756.916 208.506 816.788 208.506"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M756.916 221.306 816.788 221.306"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip35)">
                            <text id="g767"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(761.362 219)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M623.274 516.03 706.874 516.03 706.874 529.621 623.274 529.621Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M623.274 515.363 623.274 530.288"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M706.874 515.363 706.874 530.288"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M622.607 516.03 707.54 516.03"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M622.607 529.621 707.54 529.621"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip36)">
                            <text id="g887"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(627.054 526)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip37)" transform="matrix(1 0 -0 1.02857 700 517)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img21"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M103.718 512.526 187.317 512.526 187.317 526.117 103.718 526.117Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M103.718 511.859 103.718 526.784"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M187.317 511.859 187.317 526.784"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M103.051 512.526 187.984 512.526"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M103.051 526.117 187.984 526.117"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip38)">
                            <text id="g864"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(107.497 523)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip39)" transform="matrix(1 0 -0 1.02857 181 513)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img21"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M1174.49 310.313 1233.03 310.313 1233.03 323.113 1174.49 323.113Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1174.49 309.646 1174.49 323.779"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1233.03 309.646 1233.03 323.779"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1173.82 310.313 1233.69 310.313"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1173.82 323.113 1233.69 323.113"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip40)">
                            <text id="w767"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1178.27 320)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M214.673 310.064 273.211 310.064 273.211 322.864 214.673 322.864Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M214.673 309.397 214.673 323.531"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M273.211 309.397 273.211 323.531"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M214.006 310.064 273.878 310.064"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M214.006 322.864 273.878 322.864"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip41)">
                            <text id="a767"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(218.452 320)"
                            >
                                U
                            </text>
                        </g>
                        <path id="c7591"
                                d="M328.5 427C328.5 413.469 339.469 402.5 353 402.5 366.531 402.5 377.5 413.469 377.5 427 377.5 440.531 366.531 451.5 353 451.5 339.469 451.5 328.5 440.531 328.5 427Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip42)">
                                <g clip-path="url(#clip43)">
                                    <g clip-path="url(#clip44)">
                                        <path
                                                d="M351.689 419.933 352.622 419.933 353.944 420.167 355.033 420.633 355.889 421.178 356.9 422.189 357.522 423.122 357.989 424.367 358.144 425.067 358.144 426.933 357.833 428.1 357.211 429.344 356.589 430.122 356.044 430.667 354.956 431.367 353.711 431.833 352.933 431.989 351.378 431.989 350.133 431.678 349.278 431.289 348.422 430.744 347.567 429.967 347.022 429.189 346.478 428.1 346.167 426.856 346.089 425.922 346.244 424.678 346.556 423.667 347.178 422.5 348.033 421.567 348.656 421.022 349.978 420.322 351.144 420.011Z"
                                        />
                                        <path
                                                d="M352.156 406.089 353.011 406.089 354.489 406.322 355.967 406.789 357.211 407.411 358.144 408.033 358.922 408.733 359.856 409.667 360.711 410.911 361.333 412.156 361.8 413.556 362.033 414.722 362.111 415.344 362.111 416.822 361.878 418.3 361.489 419.622 360.867 420.944 360.089 422.033 359.933 422.033 359.311 420.944 358.378 419.856 357.522 419.078 356.433 418.378 355.267 417.833 353.944 417.444 352.156 417.211Z"
                                        />
                                        <path
                                                d="M339.4 421.878 339.789 421.956 341.967 423.2 343.522 424.133 343.6 424.289 343.444 425.922 343.6 427.556 343.989 429.033 344.533 430.2 344.533 430.433 342.356 431.678 340.489 432.767 336.444 435.1 335.122 435.878 334.889 435.878 334.189 434.4 333.8 433.078 333.644 432.144 333.567 430.822 333.722 429.344 333.956 428.256 334.5 426.778 335.044 425.767 335.744 424.756 336.678 423.744 337.533 422.967 338.933 422.111Z"
                                        />
                                        <path
                                                d="M359.7 430.433 360.089 430.511 361.956 431.6 368.022 435.1 369.344 435.878 369.189 436.267 368.644 437.044 367.944 437.9 367.4 438.444 366.233 439.3 364.989 440 363.511 440.544 362.344 440.778 361.878 440.856 359.544 440.856 358.378 440.622 357.133 440.233 355.811 439.611 354.878 438.989 354.878 434.322 355.578 434.011 356.9 433.311 357.833 432.611 358.922 431.522Z"
                                        />
                                        <path
                                                d="M342.667 411.067 344.378 411.067 345.856 411.3 347.489 411.844 348.811 412.544 349.433 412.933 349.433 417.678 348.033 418.3 346.944 419 346.089 419.7 345.544 420.244 344.611 421.567 344.144 421.411 342.822 420.633 336.756 417.133 335.044 416.122 334.967 415.967 335.511 415.111 336.367 414.1 336.989 413.478 338.156 412.622 339.244 412 340.722 411.456 341.578 411.222Z"
                                        />
                                        <path
                                                d="M346.167 432.533 346.478 432.611 347.644 433.467 348.967 434.089 350.211 434.478 351.144 434.633 352.078 434.711 352.156 434.789 352.156 445.833 350.989 445.833 349.433 445.522 348.111 445.056 346.711 444.278 345.7 443.5 344.922 442.8 344.144 441.867 343.367 440.622 342.744 439.222 342.356 437.744 342.2 436.344 342.2 435.489 342.278 434.789 344.222 433.7 345.544 432.922Z"
                                        />
                                        <path
                                                d="M369.267 416.044 369.422 416.044 369.967 417.133 370.433 418.533 370.667 419.778 370.744 421.333 370.589 422.733 370.278 424.056 369.656 425.533 369.111 426.467 368.489 427.322 367.633 428.256 366.467 429.189 365.456 429.811 364.756 430.122 362.811 429.033 360.944 427.944 360.711 427.789 360.867 426.389 360.867 425.222 361.567 424.522 362.578 423.2 363.278 422.033 363.978 420.556 364.522 418.844 365.222 418.378 367.167 417.289 369.033 416.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c7741"
                                d="M483.5 427C483.5 413.469 494.469 402.5 508 402.5 521.531 402.5 532.5 413.469 532.5 427 532.5 440.531 521.531 451.5 508 451.5 494.469 451.5 483.5 440.531 483.5 427Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip45)">
                                <g clip-path="url(#clip46)">
                                    <g clip-path="url(#clip47)">
                                        <path
                                                d="M506.689 420.933 507.622 420.933 508.944 421.167 510.033 421.633 510.889 422.178 511.9 423.189 512.522 424.122 512.989 425.367 513.144 426.067 513.144 427.933 512.833 429.1 512.211 430.344 511.589 431.122 511.044 431.667 509.956 432.367 508.711 432.833 507.933 432.989 506.378 432.989 505.133 432.678 504.278 432.289 503.422 431.744 502.567 430.967 502.022 430.189 501.478 429.1 501.167 427.856 501.089 426.922 501.244 425.678 501.556 424.667 502.178 423.5 503.033 422.567 503.656 422.022 504.978 421.322 506.144 421.011Z"
                                        />
                                        <path
                                                d="M507.156 407.089 508.011 407.089 509.489 407.322 510.967 407.789 512.211 408.411 513.144 409.033 513.922 409.733 514.856 410.667 515.711 411.911 516.333 413.156 516.8 414.556 517.033 415.722 517.111 416.344 517.111 417.822 516.878 419.3 516.489 420.622 515.867 421.944 515.089 423.033 514.933 423.033 514.311 421.944 513.378 420.856 512.522 420.078 511.433 419.378 510.267 418.833 508.944 418.444 507.156 418.211Z"
                                        />
                                        <path
                                                d="M494.4 422.878 494.789 422.956 496.967 424.2 498.522 425.133 498.6 425.289 498.444 426.922 498.6 428.556 498.989 430.033 499.533 431.2 499.533 431.433 497.356 432.678 495.489 433.767 491.444 436.1 490.122 436.878 489.889 436.878 489.189 435.4 488.8 434.078 488.644 433.144 488.567 431.822 488.722 430.344 488.956 429.256 489.5 427.778 490.044 426.767 490.744 425.756 491.678 424.744 492.533 423.967 493.933 423.111Z"
                                        />
                                        <path
                                                d="M514.7 431.433 515.089 431.511 516.956 432.6 523.022 436.1 524.344 436.878 524.189 437.267 523.644 438.044 522.944 438.9 522.4 439.444 521.233 440.3 519.989 441 518.511 441.544 517.344 441.778 516.878 441.856 514.544 441.856 513.378 441.622 512.133 441.233 510.811 440.611 509.878 439.989 509.878 435.322 510.578 435.011 511.9 434.311 512.833 433.611 513.922 432.522Z"
                                        />
                                        <path
                                                d="M497.667 412.067 499.378 412.067 500.856 412.3 502.489 412.844 503.811 413.544 504.433 413.933 504.433 418.678 503.033 419.3 501.944 420 501.089 420.7 500.544 421.244 499.611 422.567 499.144 422.411 497.822 421.633 491.756 418.133 490.044 417.122 489.967 416.967 490.511 416.111 491.367 415.1 491.989 414.478 493.156 413.622 494.244 413 495.722 412.456 496.578 412.222Z"
                                        />
                                        <path
                                                d="M501.167 433.533 501.478 433.611 502.644 434.467 503.967 435.089 505.211 435.478 506.144 435.633 507.078 435.711 507.156 435.789 507.156 446.833 505.989 446.833 504.433 446.522 503.111 446.056 501.711 445.278 500.7 444.5 499.922 443.8 499.144 442.867 498.367 441.622 497.744 440.222 497.356 438.744 497.2 437.344 497.2 436.489 497.278 435.789 499.222 434.7 500.544 433.922Z"
                                        />
                                        <path
                                                d="M524.267 417.044 524.422 417.044 524.967 418.133 525.433 419.533 525.667 420.778 525.744 422.333 525.589 423.733 525.278 425.056 524.656 426.533 524.111 427.467 523.489 428.322 522.633 429.256 521.467 430.189 520.456 430.811 519.756 431.122 517.811 430.033 515.944 428.944 515.711 428.789 515.867 427.389 515.867 426.222 516.567 425.522 517.578 424.2 518.278 423.033 518.978 421.556 519.522 419.844 520.222 419.378 522.167 418.289 524.033 417.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c7951"
                                d="M981.5 428C981.5 414.469 992.469 403.5 1006 403.5 1019.53 403.5 1030.5 414.469 1030.5 428 1030.5 441.531 1019.53 452.5 1006 452.5 992.469 452.5 981.5 441.531 981.5 428Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate3 ?>">
                            <g clip-path="url(#clip48)">
                                <g clip-path="url(#clip49)">
                                    <g clip-path="url(#clip50)">
                                        <path
                                                d="M1004.69 420.933 1005.62 420.933 1006.94 421.167 1008.03 421.633 1008.89 422.178 1009.9 423.189 1010.52 424.122 1010.99 425.367 1011.14 426.067 1011.14 427.933 1010.83 429.1 1010.21 430.344 1009.59 431.122 1009.04 431.667 1007.96 432.367 1006.71 432.833 1005.93 432.989 1004.38 432.989 1003.13 432.678 1002.28 432.289 1001.42 431.744 1000.57 430.967 1000.02 430.189 999.478 429.1 999.167 427.856 999.089 426.922 999.244 425.678 999.556 424.667 1000.18 423.5 1001.03 422.567 1001.66 422.022 1002.98 421.322 1004.14 421.011Z"
                                        />
                                        <path
                                                d="M1005.16 407.089 1006.01 407.089 1007.49 407.322 1008.97 407.789 1010.21 408.411 1011.14 409.033 1011.92 409.733 1012.86 410.667 1013.71 411.911 1014.33 413.156 1014.8 414.556 1015.03 415.722 1015.11 416.344 1015.11 417.822 1014.88 419.3 1014.49 420.622 1013.87 421.944 1013.09 423.033 1012.93 423.033 1012.31 421.944 1011.38 420.856 1010.52 420.078 1009.43 419.378 1008.27 418.833 1006.94 418.444 1005.16 418.211Z"
                                        />
                                        <path
                                                d="M992.4 422.878 992.789 422.956 994.967 424.2 996.522 425.133 996.6 425.289 996.444 426.922 996.6 428.556 996.989 430.033 997.533 431.2 997.533 431.433 995.356 432.678 993.489 433.767 989.444 436.1 988.122 436.878 987.889 436.878 987.189 435.4 986.8 434.078 986.644 433.144 986.567 431.822 986.722 430.344 986.956 429.256 987.5 427.778 988.044 426.767 988.744 425.756 989.678 424.744 990.533 423.967 991.933 423.111Z"
                                        />
                                        <path
                                                d="M1012.7 431.433 1013.09 431.511 1014.96 432.6 1021.02 436.1 1022.34 436.878 1022.19 437.267 1021.64 438.044 1020.94 438.9 1020.4 439.444 1019.23 440.3 1017.99 441 1016.51 441.544 1015.34 441.778 1014.88 441.856 1012.54 441.856 1011.38 441.622 1010.13 441.233 1008.81 440.611 1007.88 439.989 1007.88 435.322 1008.58 435.011 1009.9 434.311 1010.83 433.611 1011.92 432.522Z"
                                        />
                                        <path
                                                d="M995.667 412.067 997.378 412.067 998.856 412.3 1000.49 412.844 1001.81 413.544 1002.43 413.933 1002.43 418.678 1001.03 419.3 999.944 420 999.089 420.7 998.544 421.244 997.611 422.567 997.144 422.411 995.822 421.633 989.756 418.133 988.044 417.122 987.967 416.967 988.511 416.111 989.367 415.1 989.989 414.478 991.156 413.622 992.244 413 993.722 412.456 994.578 412.222Z"
                                        />
                                        <path
                                                d="M999.167 433.533 999.478 433.611 1000.64 434.467 1001.97 435.089 1003.21 435.478 1004.14 435.633 1005.08 435.711 1005.16 435.789 1005.16 446.833 1003.99 446.833 1002.43 446.522 1001.11 446.056 999.711 445.278 998.7 444.5 997.922 443.8 997.144 442.867 996.367 441.622 995.744 440.222 995.356 438.744 995.2 437.344 995.2 436.489 995.278 435.789 997.222 434.7 998.544 433.922Z"
                                        />
                                        <path
                                                d="M1022.27 417.044 1022.42 417.044 1022.97 418.133 1023.43 419.533 1023.67 420.778 1023.74 422.333 1023.59 423.733 1023.28 425.056 1022.66 426.533 1022.11 427.467 1021.49 428.322 1020.63 429.256 1019.47 430.189 1018.46 430.811 1017.76 431.122 1015.81 430.033 1013.94 428.944 1013.71 428.789 1013.87 427.389 1013.87 426.222 1014.57 425.522 1015.58 424.2 1016.28 423.033 1016.98 421.556 1017.52 419.844 1018.22 419.378 1020.17 418.289 1022.03 417.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <g clip-path="url(#clip52)" transform="matrix(1 0 -0 1.00168 1064 22)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img51"
                                    transform="scale(0.801282 0.801282)"
                            ></use>
                        </g>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1086.17 18.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 1184.5 72.1712)"
                        />
                        <path
                                d="M1182.55 84.0309 1174.86 75.6543 1175.35 75.2035 1183.04 83.58ZM1175.11 75.4289 1174.95 79.1967 1171.5 71.5001 1178.87 75.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M1191.95 84.8892 1182.5 84.5001"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1089.85 4.35066 1184.22 4.35066 1184.22 17.1507 1089.85 17.1507Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1089.85 3.68399 1089.85 17.8173"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1184.22 3.68399 1184.22 17.8173"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1089.18 4.35066 1184.89 4.35066"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1089.18 17.1507 1184.89 17.1507"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip53)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1093.63 14)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1104.13 14)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M1085.5 18.5001 1104.69 18.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1192.34 71.4343 1269.74 71.4343 1269.74 84.2343 1192.34 84.2343Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1192.34 70.7677 1192.34 84.901"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1269.74 70.7677 1269.74 84.901"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1191.68 71.4343 1270.4 71.4343"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1191.68 84.2343 1270.4 84.2343"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip54)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1196.12 81)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1206.62 81)"
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
                                transform="matrix(1 0 0 -1 1082.5 26.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1191.99 44.5001)"
                        />
                        <path
                                d="M1192.5 44.5001 1211.69 44.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1196.54 31.2508 1269.74 31.2508 1269.74 44.0508 1196.54 44.0508Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1196.54 30.5841 1196.54 44.7175"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1269.74 30.5841 1269.74 44.7175"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1195.87 31.2508 1270.4 31.2508"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1195.87 44.0508 1270.4 44.0508"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip55)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1200.32 41)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M1168.5 72.5001 1191.21 72.5002"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M4.50005 499C4.50005 493.753 8.75335 489.5 14.0001 489.5 19.2468 489.5 23.5001 493.753 23.5001 499 23.5001 504.247 19.2468 508.5 14.0001 508.5 8.75335 508.5 4.50005 504.247 4.50005 499Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M4.50005 521C4.50005 515.753 8.75335 511.5 14.0001 511.5 19.2468 511.5 23.5001 515.753 23.5001 521 23.5001 526.247 19.2468 530.5 14.0001 530.5 8.75335 530.5 4.50005 526.247 4.50005 521Z"
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
                                transform="translate(29.0576 501)"
                        >
                            в работе
                            <tspan x="-0.0827293" y="22">в резерве</tspan>
                        </text>
                        <path
                                d="M4 477C4 472.029 8.25329 468 13.5 468 18.7467 468 23 472.029 23 477 23 481.971 18.7467 486 13.5 486 8.25329 486 4 481.971 4 477Z"
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
                                transform="translate(28.9749 479)"
                        >
                            в ремонте
                            <tspan x="0.264881" y="-23">отдача</tspan>
                            <tspan x="0.000104904" y="-46">прием</tspan>
                        </text>
                        <g clip-path="url(#clip56)" transform="matrix(1 0 -0 1.07143 9 421)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img21"
                                    transform="scale(0.205128 0.205128)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip57)" transform="matrix(1 0 -0 1.125 9 443)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img23"
                                    transform="scale(0.205128 0.205128)"
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
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        fetch('/toshkent/server21', { signal: controller.signal })
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

                    if (item.id === 818) {
                        const value = document.getElementById("g818");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(818);
                        } else {
                            falseAnimation(818);
                        }
                    } else if(item.id === 911) {
                        const value = document.getElementById("g911");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(911);
                        } else {
                            falseAnimation(911);
                        }
                    } else if(item.id === 910) {
                        const value = document.getElementById("g910");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(911);
                        } else {
                            falseAnimation(911);
                        }
                    } else if(item.id === 934) {
                        const value = document.getElementById("g934");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(934);
                        } else {
                            falseAnimation(934);
                        }
                    } else if(item.id === 933) {
                        const value = document.getElementById("g933");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(934);
                        } else {
                            falseAnimation(934);
                        }
                    } else if(item.id === 841) {
                        const value = document.getElementById("g841");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(841);
                        } else {
                            falseAnimation(841);
                        }
                    } else if(item.id === 864) {
                        const value = document.getElementById("g864");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(864);
                            trueAnimation(8641);
                            trueAnimation(8642);
                        } else {
                            falseAnimation(864);
                            falseAnimation(8641);
                            falseAnimation(8642);
                        }
                    } else if(item.id === 887) {
                        const value = document.getElementById("g887");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(887);
                            trueAnimation(8871);
                            trueAnimation(8872);
                        } else {
                            falseAnimation(887);
                            falseAnimation(8871);
                            falseAnimation(8872);
                        }
                    } else if(item.id === 767) {
                        const value = document.getElementById("g767");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                        const w = document.getElementById("w767");
                        w.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                        const a = document.getElementById("a767");
                        a.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    }
                    //aggregate-1
                    else if(item.id === 759) {
                        const value = document.getElementById("g759");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a759");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 1 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(759);
                            trueAnimation(7591);
                        } else {
                            falseAnimation(759);
                            falseAnimation(7591);
                        }
                    } else if(item.id === 760) {
                        const value = document.getElementById("g760");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 761) {
                        const value = document.getElementById("k759");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 762) {
                        const value = document.getElementById("n759");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 763) {
                        const value = document.getElementById("w759");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //aggregate-2
                    else if(item.id === 774) {
                        const value = document.getElementById("g774");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a774");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 1 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(774);
                            trueAnimation(7741);
                        } else {
                            falseAnimation(774);
                            falseAnimation(7741);
                        }
                    } else if(item.id === 775) {
                        const value = document.getElementById("g775");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 776) {
                        const value = document.getElementById("k774");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 777) {
                        const value = document.getElementById("n774");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 778) {
                        const value = document.getElementById("w774");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //aggregate-3
                    else if(item.id === 795) {
                        const value = document.getElementById("g795");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a795");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 1 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(795);
                            trueAnimation(7951);
                        } else {
                            falseAnimation(795);
                            falseAnimation(7951);
                        }
                    } else if(item.id === 797) {
                        const value = document.getElementById("g797");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 798) {
                        const value = document.getElementById("k795");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 799) {
                        const value = document.getElementById("n795");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 800) {
                        const value = document.getElementById("w795");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }

                    else if(item.id === 1) {
                        const value = document.getElementById("active");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 2) {
                        const value = document.getElementById("reactive");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВАр";
                    } else if(item.id === 3) {
                        const value = document.getElementById("activeOut");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 4) {
                        const value = document.getElementById("activeIn");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 5) {
                        const value = document.getElementById("ownNeeds");
                        value.textContent = "∑ " + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " KВт";
                    } else if(item.id === 6) {
                        const value = document.getElementById("water");
                        value.textContent = "∑ " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " м3/с";
                    } else if(item.id === 7) {
                        const value = document.getElementById("hertz");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " Гц";
                    } else if(item.id === 8) {
                        const value = document.getElementById("water1");
                        value.textContent = "ВБ=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " м";
                    } else if(item.id === 9) {
                        const value = document.getElementById("water2");
                        value.textContent = "НБ=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " м";
                    } else if(item.id === 10) {
                        const value = document.getElementById("water3");
                        value.textContent = "Н=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " м";
                    }

                })
                falseAnimation(10000);
                falseAnimation(10001);
                falseAnimation(10002);
                falseAnimation(10003);
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
        getServer()
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

    function errorAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "#FFFF00";
    }

    function trueAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "red";
    }

</script>