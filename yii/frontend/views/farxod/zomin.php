<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Зомин микроГЭС';
$energy = new Energy();
$id = 48;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);

$urlTransformer1 = $energy->getTransformer($id, 116);
$urlSwitch1 = $energy->getSwitch($id, 284);
$urlSwitch2 = $energy->getSwitch($id, 285);
$urlSwitch3 = $energy->getSwitch($id, 286);
$urlSwitch4 = $energy->getSwitch($id, 287);
$urlSwitch5 = $energy->getSwitch($id, 288);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['farxod/index']) ?>">"Фарход ГЭС" Филиали</a></li>
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
                        viewBox="0 0 1300 550"
                        height="100%"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        overflow="hidden"
                >
                    <defs>
                        <clipPath id="clip0">
                            <rect x="0" y="0" width="1280" height="720" />
                        </clipPath>
                        <clipPath id="clip1">
                            <rect x="432" y="427" width="94" height="90" />
                        </clipPath>
                        <clipPath id="clip2">
                            <rect x="432" y="439" width="94" height="91" />
                        </clipPath>
                        <clipPath id="clip3">
                            <rect x="432" y="452" width="94" height="91" />
                        </clipPath>
                        <clipPath id="clip4">
                            <rect x="432" y="465" width="94" height="91" />
                        </clipPath>
                        <clipPath id="clip5">
                            <rect x="432" y="478" width="94" height="90" />
                        </clipPath>
                        <clipPath id="clip6">
                            <rect x="432" y="491" width="94" height="90" />
                        </clipPath>
                        <clipPath id="clip7">
                            <rect x="765" y="426" width="94" height="91" />
                        </clipPath>
                        <clipPath id="clip8">
                            <rect x="765" y="439" width="94" height="91" />
                        </clipPath>
                        <clipPath id="clip9">
                            <rect x="765" y="452" width="94" height="91" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="765" y="465" width="94" height="90" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="765" y="478" width="94" height="90" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="765" y="490" width="94" height="91" />
                        </clipPath>
                        <clipPath id="clip13">
                            <rect x="605" y="22" width="85" height="90" />
                        </clipPath>
                        <clipPath id="clip14">
                            <rect x="605" y="35" width="85" height="91" />
                        </clipPath>
                        <clipPath id="clip15">
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP0AAP0AAP4AAP4AAP4AAP4AAP4AAP8AAMVaHOIAAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA6klEQVRIS+3XaxKDIAwE4OCjvkB6/9NWdJUEgr1Avl+W7EwtKzOVmOkrfbBe6DDOOkykAdNswESynOUSy1kusZzlEstZLrGc+kfMbZhmwWF2WDxEDLmImV8JK//QjIt3K5HH5Zv9uNFOu7HCuUEjPrTN5y+mekOkcMXIvX9z7JFTmuAmpA4LljQemcTtWKxF1h1Rj9XaiAS0atkwfwQMpFSEpNeiPKnl20KCIqT6gbiLkKrNifp7RVULK0KStVRbkvHNkUVIvJaiCClvzoKVhntz6iKku5bn2Wy5TotahJROi16E5AI7EUD0A7L3auODNhWvAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img16"
                        ></image>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACDfECDXGCXaFSTbFCPZFiPaFSLbFCTbFiTbFSPcEyLcFCHaFSLbFCPcEyPaFSPbFdh6Az4AAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA60lEQVRIS+3Xaw6EIAwEYPCxvnDp/U+7VkehUtgL9PuFMIlJR5JdV+gj7R7rlp2INqwb5iNGNOKpqj9jFDs8V/jvlaOAjYoFMaIJO6oRIdZjT+EjMmzHpmJD5LJgtzAhcBuw/9Llb2VfvRYuQlKHcxUhKcMZcCSUtTxFSMVw5EiSGeeQFyGJWkQRkhhOwKYmq+VdhPTUctyIlni/uSxCwm3RipDO26IWIXEtlSKk44NYsWybHRb/uDWANpyIs5AN25fj2dQP+oPTRL8g5YAsxyxnOWY5yzHLWY5ZznKsw2lS+dP1/iGW/i049wN/6mrjj3LfTQAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img19"
                        ></image>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="0" width="1.19062e+06" height="581025" />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,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"
                                preserveAspectRatio="none"
                                id="img22"
                        ></image>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="1.19062e+06" height="580048" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="1016" y="21" width="96" height="91" />
                        </clipPath>
                        <clipPath id="clip25">
                            <rect x="1119" y="88" width="88" height="91" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="1123" y="48" width="74" height="91" />
                        </clipPath>
                        <clipPath id="clip27">
                            <rect x="-2.32831e-10" y="-4.65661e-10" width="85725" height="190500" />
                        </clipPath>
                        <clipPath id="clip28">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip29">
                            <rect x="-2.32831e-10" y="0" width="85725" height="190500" />
                        </clipPath>
                        <clipPath id="clip30">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip31">
                            <rect x="436" y="390" width="84" height="83" />
                        </clipPath>
                        <clipPath id="clip32">
                            <rect x="436" y="390" width="84" height="83" />
                        </clipPath>
                        <clipPath id="clip33">
                            <rect x="436" y="390" width="84" height="83" />
                        </clipPath>
                        <clipPath id="clip34">
                            <rect x="765" y="392" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip35">
                            <rect x="765" y="392" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip36">
                            <rect x="765" y="392" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip37">
                            <rect x="266" y="300" width="79" height="90" />
                        </clipPath>
                        <clipPath id="clip38">
                            <rect x="987" y="300" width="79" height="90" />
                        </clipPath>
                        <clipPath id="clip39">
                            <rect x="553" y="391" width="75" height="91" />
                        </clipPath>
                        <clipPath id="clip40">
                            <rect x="652" y="392" width="75" height="90" />
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
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="21"
                                transform="translate(596.371 26)"
                        >
                            Зомин МГЭС
                            <tspan font-size="11" x="59.2432" y="230">В-T1</tspan>
                            <tspan font-size="11" x="10" y="363">В-СН-1</tspan>
                            <tspan font-size="11" x="110" y="363">В-СН-2</tspan>
                        </text>
                        <path
                                d="M639.874 173.791 639.083 116.52 642.083 116.479 642.873 173.749ZM640.583 116.499 636.125 119.561 640.5 110.5 645.124 119.437Z"
                                fill="#6600CC"
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
                                transform="translate(620.594 101)"
                        >
                            Л-Зомин
                            <tspan font-size="11" x="-353.076" y="270">I</tspan>
                            <tspan font-size="11" x="-346.243" y="270">СШ 0,4 кВ</tspan>
                        </text>
                        <path
                                d="M267.5 355.5 604.853 355.5"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.50001 5.99999 1.5001 66.3193-1.49989 66.3193-1.49999 6ZM9.49831e-06 6-4.49999 9.00001 0 0 4.50001 8.99999ZM4.5001 66.3193C4.50011 68.8045 2.48539 70.8193 0.000112111 70.8193-2.48517 70.8193-4.49989 68.8046-4.4999 66.3193-4.4999 63.834-2.48518 61.8193 9.78631e-05 61.8193 2.48538 61.8193 4.5001 63.834 4.5001 66.3193Z"
                                fill="#7F7F7F"
                                transform="matrix(1 0 0 -1 589.5 421.819)"
                        />
                        <path
                                d="M476.401 408.405 476 355.511 479 355.489 479.401 408.382ZM473 355.534C472.981 353.049 474.981 351.019 477.466 351 479.951 350.981 481.981 352.981 482 355.466 482.019 357.951 480.019 359.981 477.534 360 475.049 360.019 473.019 358.019 473 355.534Z"
                                fill="#7F7F7F"
                        />
                        <a href="<?= $urlSwitch2 ?>">
                            <rect id="c239"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#7F7F7F"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 467.5 394.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch3 ?>">
                            <rect
                                    id="c273"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#7F7F7F"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 580.5 394.5)"
                            />
                        </a>
                        <path
                                d="M0 0 330.995 0.749921"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 0 0 1 807.495 299.5)"
                        />
                        <path
                                d="M689.493 415.718 688.833 356.013 691.167 355.987 691.826 415.692ZM690.659 415.705 694.63 412.994 690.718 421.038 686.63 413.082ZM686 356.044C685.976 353.835 687.747 352.025 689.956 352 692.165 351.976 693.975 353.747 694 355.956 694.024 358.165 692.253 359.975 690.044 360 687.835 360.024 686.025 358.253 686 356.044Z"
                                fill="#7F7F7F"
                        />
                        <path
                                d="M806.273 409.15 806 355.508 809 355.492 809.273 409.135ZM803 355.523C802.987 353.038 804.992 351.013 807.477 351 809.962 350.987 811.987 352.992 812 355.477 812.013 357.962 810.008 359.987 807.523 360 805.038 360.013 803.013 358.008 803 355.523Z"
                                fill="#7F7F7F"
                        />
                        <a href="<?= $urlSwitch5 ?>">
                            <rect id="c258"
                                    x="797.5"
                                    y="374.5"
                                    width="19"
                                    height="19"
                                    stroke="#7F7F7F"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                            />
                        </a>
                        <a href="<?= $urlSwitch4 ?>">
                            <rect id="c288"
                                    x="680.5"
                                    y="375.5"
                                    width="19"
                                    height="19"
                                    stroke="#7F7F7F"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                            />
                        </a>
                        <path
                                d="M0 0 388.232 0.000104987"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 675.5 355.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(996.077 370)"
                        >
                            II СШ 0,4 кВ
                            <tspan font-size="11" x="-564.02" y="42">Г-1
                            <tspan font-size="11" x="-577.687" y="55">0,4 кВ</tspan>
                            <tspan font-size="11" x="-585.52" y="68">100 кВт</tspan>
                            <tspan font-size="11" x="-636.687" y="81">SFWE-W100-8/560</tspan>

                            <tspan font-size="11" x="-505" y="18">В-Г1</tspan>
                            <tspan font-size="11" x="-175" y="18">В-Г2</tspan>

                        </text>
                        <path
                                d="M1.5-2.17173e-06 1.5001 72.5137-1.49989 72.5137-1.5 2.17173e-06ZM-4.5 6.5152e-06C-4.5-2.48527-2.48529-4.5-6.5152e-06-4.5 2.48527-4.5 4.5-2.48529 4.5-6.5152e-06 4.5 2.48527 2.48529 4.5 6.5152e-06 4.5-2.48527 4.5-4.5 2.48529-4.5 6.5152e-06Z"
                                fill="#7F7F7F"
                                transform="matrix(1 0 0 -1 641.5 300.014)"
                        />
                        <a href="<?= $urlSwitch1 ?>">
                            <rect
                                    id="c316"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#7F7F7F"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 632.5 263.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(603.091 190)"
                        >
                            T-1
                            <tspan font-size="11" x="-11.6666" y="13">0,4/10</tspan>
                            <tspan font-size="11" x="-23.3333" y="26">400</tspan>
                            <tspan font-size="11" x="-4.66663" y="26">кВА</tspan>
                            <tspan font-size="11" x="-59.1666" y="39">ТП 464/400</tspan>
                            кВА
                        </text>
                        <path
                                d="M432.069 465.513 525.178 465.513 525.178 478.313 432.069 478.313Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M432.069 478.313 525.178 478.313 525.178 491.113 432.069 491.113Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M432.069 491.113 525.178 491.113 525.178 503.913 432.069 503.913Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M432.069 503.913 525.178 503.913 525.178 516.713 432.069 516.713Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M432.069 516.713 525.178 516.713 525.178 529.513 432.069 529.513Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M432.069 529.513 525.178 529.513 525.178 542.313 432.069 542.313Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.403 478.313 525.844 478.313"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.403 491.113 525.844 491.113"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.403 503.913 525.844 503.913"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.403 516.713 525.844 516.713"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.403 529.513 525.844 529.513"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M432.069 464.846 432.069 542.979"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M525.178 464.846 525.178 542.979"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.403 465.513 525.844 465.513"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.403 542.313 525.844 542.313"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip1)">
                            <text id="g239"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(435.849 476)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip2)">
                            <text id="g240"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(435.849 488)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip3)">
                            <text id="a239"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(435.849 501)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip4)">
                            <text id="k239"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(435.849 514)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip5)">
                            <text id="n239"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(435.849 527)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip6)">
                            <text id="w239" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(435.849 540)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M765.594 465.312 858.702 465.312 858.702 478.112 765.594 478.112Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M765.594 478.112 858.702 478.112 858.702 490.912 765.594 490.912Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M765.594 490.912 858.702 490.912 858.702 503.712 765.594 503.712Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M765.594 503.712 858.702 503.712 858.702 516.512 765.594 516.512Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M765.594 516.512 858.702 516.512 858.702 529.312 765.594 529.312Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M765.594 529.312 858.702 529.312 858.702 542.112 765.594 542.112Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M764.927 478.112 859.369 478.112"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M764.927 490.912 859.369 490.912"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M764.927 503.712 859.369 503.712"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M764.927 516.512 859.369 516.512"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M764.927 529.312 859.369 529.312"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M765.594 464.645 765.594 542.778"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M858.702 464.645 858.702 542.778"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M764.927 465.312 859.369 465.312"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M764.927 542.112 859.369 542.112"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip7)">
                            <text id="g258"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(769.373 475)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip8)">
                            <text id="g259"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(769.373 488)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip9)">
                            <text id="a258"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(769.373 501)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip10)">
                            <text id="k258"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(769.373 514)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip11)">
                            <text id="n258"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(769.373 527)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip12)">
                            <text id="w258" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(769.373 539)"
                            >
                                Qвода
                            </text>
                        </g>
                        <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(777.04 539)"
                        >

                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="64.3508"
                                    y="-126"
                            >
                                Г
                            </tspan>
                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="71.1841"
                                    y="-126"
                            >
                                -
                            </tspan>
                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="74.6841"
                                    y="-126"
                            >
                                2
                            </tspan>
                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="64.3508"
                                    y="-113"
                            >
                                0,4
                            </tspan>
                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="80.3508"
                                    y="-113"
                            >
                                кВ
                            </tspan>
                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="64.3508"
                                    y="-100"
                            >
                                100 кВт
                            </tspan>
                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="64.3508"
                                    y="-87"
                            >
                                SFWE
                            </tspan>
                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="94.6841"
                                    y="-87"
                            >
                                -
                            </tspan>
                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="98.1841"
                                    y="-87"
                            >
                                W100
                            </tspan>
                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="124.851"
                                    y="-87"
                            >
                                -
                            </tspan>
                            <tspan
                                    fill="#828897"
                                    font-weight="700"
                                    font-size="11"
                                    x="128.351"
                                    y="-87"
                            >
                                8/560
                            </tspan>
                        </text>
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c3162"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#7F7F7F"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 626.5 227.5)"
                            />
                            <path id="c3161"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 626.5 203.5)"
                            />
                        </a>
                        <path
                                d="M605.464 60.4644 689.064 60.4644 689.064 74.0555 605.464 74.0555Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M605.464 74.0555 689.064 74.0555 689.064 87.6467 605.464 87.6467Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M604.798 74.0555 689.731 74.0555"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M605.464 59.7977 605.464 88.3134"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M689.064 59.7977 689.064 88.3134"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M604.798 60.4644 689.731 60.4644"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M604.798 87.6467 689.731 87.6467"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip13)">
                            <text id="g316"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(609.244 70)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip14)">
                            <text id="g315"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(609.244 84)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip15)"
                                transform="matrix(0.000104987 0 0 0.000104987 681 61)"
                        >
                            <g clip-path="url(#clip17)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                        width="100%"
                                        height="100%"
                                        xlink:href="#img16"
                                        transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                                clip-path="url(#clip18)"
                                transform="matrix(0.000104987 0 0 0.000104987 681 75)"
                        >
                            <g
                                    clip-path="url(#clip20)"
                                    transform="matrix(1 0 0 1.02857 -0.5 -0.0625)"
                            >
                                <use
                                        width="100%"
                                        height="100%"
                                        xlink:href="#img19"
                                        transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                                d="M477.798 353.445 477.5 299.5"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.798 353.445 806.5 299.5"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g
                                clip-path="url(#clip21)"
                                transform="matrix(0.000104987 0 0 0.000104987 991 78)"
                        >
                            <g clip-path="url(#clip23)" transform="matrix(1 0 0 1.00168 -1 0)">
                                <use
                                        width="100%"
                                        height="100%"
                                        xlink:href="#img22"
                                        transform="scale(7632.21 7632.21)"
                                ></use>
                            </g>
                        </g>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 0 0 1 1013.17 74.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 1111.5 128.171)"
                        />
                        <path
                                d="M1109.55 140.031 1101.86 131.654 1102.35 131.203 1110.04 139.58ZM1102.11 131.429 1101.95 135.197 1098.5 127.5 1105.87 131.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M1118.95 140.889 1109.5 140.5"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1016.72 60.2163 1111.08 60.2163 1111.08 73.0163 1016.72 73.0163Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1016.72 59.5496 1016.72 73.6829"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1111.08 59.5496 1111.08 73.6829"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1016.05 60.2163 1111.75 60.2163"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1016.05 73.0163 1111.75 73.0163"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip24)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1020.5 70)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1031 70)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M1012.5 74.5001 1031.69 74.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1119.21 127.3 1206.87 127.3 1206.87 140.1 1119.21 140.1Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1119.21 126.633 1119.21 140.767"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1206.87 126.633 1206.87 140.767"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1118.54 127.3 1207.53 127.3"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1118.54 140.1 1207.53 140.1"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip25)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1122.99 137)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1133.49 137)"
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
                                transform="matrix(1 0 0 -1 1009.5 82.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 0 0 1 1118.99 100.5)"
                        />
                        <path
                                d="M1119.5 100.5 1138.69 100.647"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1123.41 87.1164 1196.6 87.1164 1196.6 99.9164 1123.41 99.9164Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1123.41 86.4498 1123.41 100.583"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1196.6 86.4498 1196.6 100.583"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1122.74 87.1164 1197.27 87.1164"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1122.74 99.9164 1197.27 99.9164"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip26)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1127.19 97)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M1095.5 128.5 1118.21 128.5"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M150.5 507C150.5 501.753 154.529 497.5 159.5 497.5 164.471 497.5 168.5 501.753 168.5 507 168.5 512.247 164.471 516.5 159.5 516.5 154.529 516.5 150.5 512.247 150.5 507Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M150.5 528.5C150.5 523.529 154.529 519.5 159.5 519.5 164.471 519.5 168.5 523.529 168.5 528.5 168.5 533.471 164.471 537.5 159.5 537.5 154.529 537.5 150.5 533.471 150.5 528.5Z"
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
                                transform="translate(174.583 509)"
                        >
                            в работе
                            <tspan font-size="11" x="-0.0827179" y="22">в резерве</tspan>
                        </text>
                        <path
                                d="M150 484.5C150 479.253 154.029 475 159 475 163.971 475 168 479.253 168 484.5 168 489.747 163.971 494 159 494 154.029 494 150 489.747 150 484.5Z"
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
                                transform="translate(174.5 487)"
                        >
                            в ремонте
                            <tspan font-size="11" x="0.264877" y="-23">отдача</tspan>
                            <tspan font-size="11" x="0.000106812" y="-47">прием</tspan>
                        </text>
                        <g
                                clip-path="url(#clip27)"
                                transform="matrix(0.000104987 0 0 0.000104987 154 429)"
                        >
                            <g clip-path="url(#clip28)" transform="scale(1.05 1)">
                                <use
                                        width="100%"
                                        height="100%"
                                        xlink:href="#img16"
                                        transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g
                                clip-path="url(#clip29)"
                                transform="matrix(0.000104987 0 0 0.000104987 154 451)"
                        >
                            <g clip-path="url(#clip30)" transform="scale(1.05 1)">
                                <use
                                        width="100%"
                                        height="100%"
                                        xlink:href="#img19"
                                        transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <path id="c2391"
                                d="M453.5 432C453.5 418.469 464.469 407.5 478 407.5 491.531 407.5 502.5 418.469 502.5 432 502.5 445.531 491.531 456.5 478 456.5 464.469 456.5 453.5 445.531 453.5 432Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip31)">
                                <g clip-path="url(#clip32)">
                                    <g clip-path="url(#clip33)">
                                        <path
                                                d="M0 0 0.922222 0 2.2287 0.230556 3.30463 0.691667 4.15 1.22963 5.14907 2.2287 5.76389 3.15093 6.225 4.38056 6.3787 5.07222 6.3787 6.91667 6.0713 8.06944 5.45648 9.29907 4.84167 10.0676 4.3037 10.6056 3.22778 11.2972 1.99815 11.7583 1.22963 11.912-0.307407 11.912-1.53704 11.6046-2.38241 11.2204-3.22778 10.6824-4.07315 9.91389-4.61111 9.14537-5.14907 8.06944-5.45648 6.83981-5.53333 5.91759-5.37963 4.68796-5.07222 3.68889-4.45741 2.53611-3.61204 1.61389-2.99722 1.07593-1.69074 0.384259-0.537963 0.0768519Z"
                                                transform="matrix(1.01205 0 0 1 477.689 425.506)"
                                        />
                                        <path
                                                d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                                transform="matrix(1.01205 0 0 1 478.156 411.826)"
                                        />
                                        <path
                                                d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                                transform="matrix(1.01205 0 0 1 465.4 427.427)"
                                        />
                                        <path
                                                d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                                transform="matrix(1.01205 0 0 1 485.7 435.881)"
                                        />
                                        <path
                                                d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                                transform="matrix(1.01205 0 0 1 468.667 416.744)"
                                        />
                                        <path
                                                d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                                transform="matrix(1.01205 0 0 1 472.167 437.956)"
                                        />
                                        <path
                                                d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                                transform="matrix(1.01205 0 0 1 495.267 421.663)"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c2581"
                                d="M783.5 434C783.5 420.469 794.469 409.5 808 409.5 821.531 409.5 832.5 420.469 832.5 434 832.5 447.531 821.531 458.5 808 458.5 794.469 458.5 783.5 447.531 783.5 434Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip34)">
                                <g clip-path="url(#clip35)">
                                    <g clip-path="url(#clip36)">
                                        <path
                                                d="M806.689 427.933 807.622 427.933 808.944 428.167 810.033 428.633 810.889 429.178 811.9 430.189 812.522 431.122 812.989 432.367 813.144 433.067 813.144 434.933 812.833 436.1 812.211 437.344 811.589 438.122 811.044 438.667 809.956 439.367 808.711 439.833 807.933 439.989 806.378 439.989 805.133 439.678 804.278 439.289 803.422 438.744 802.567 437.967 802.022 437.189 801.478 436.1 801.167 434.856 801.089 433.922 801.244 432.678 801.556 431.667 802.178 430.5 803.033 429.567 803.656 429.022 804.978 428.322 806.144 428.011Z"
                                        />
                                        <path
                                                d="M807.156 414.089 808.011 414.089 809.489 414.322 810.967 414.789 812.211 415.411 813.144 416.033 813.922 416.733 814.856 417.667 815.711 418.911 816.333 420.156 816.8 421.556 817.033 422.722 817.111 423.344 817.111 424.822 816.878 426.3 816.489 427.622 815.867 428.944 815.089 430.033 814.933 430.033 814.311 428.944 813.378 427.856 812.522 427.078 811.433 426.378 810.267 425.833 808.944 425.444 807.156 425.211Z"
                                        />
                                        <path
                                                d="M794.4 429.878 794.789 429.956 796.967 431.2 798.522 432.133 798.6 432.289 798.444 433.922 798.6 435.556 798.989 437.033 799.533 438.2 799.533 438.433 797.356 439.678 795.489 440.767 791.444 443.1 790.122 443.878 789.889 443.878 789.189 442.4 788.8 441.078 788.644 440.144 788.567 438.822 788.722 437.344 788.956 436.256 789.5 434.778 790.044 433.767 790.744 432.756 791.678 431.744 792.533 430.967 793.933 430.111Z"
                                        />
                                        <path
                                                d="M814.7 438.433 815.089 438.511 816.956 439.6 823.022 443.1 824.344 443.878 824.189 444.267 823.644 445.044 822.944 445.9 822.4 446.444 821.233 447.3 819.989 448 818.511 448.544 817.344 448.778 816.878 448.856 814.544 448.856 813.378 448.622 812.133 448.233 810.811 447.611 809.878 446.989 809.878 442.322 810.578 442.011 811.9 441.311 812.833 440.611 813.922 439.522Z"
                                        />
                                        <path
                                                d="M797.667 419.067 799.378 419.067 800.856 419.3 802.489 419.844 803.811 420.544 804.433 420.933 804.433 425.678 803.033 426.3 801.944 427 801.089 427.7 800.544 428.244 799.611 429.567 799.144 429.411 797.822 428.633 791.756 425.133 790.044 424.122 789.967 423.967 790.511 423.111 791.367 422.1 791.989 421.478 793.156 420.622 794.244 420 795.722 419.456 796.578 419.222Z"
                                        />
                                        <path
                                                d="M801.167 440.533 801.478 440.611 802.644 441.467 803.967 442.089 805.211 442.478 806.144 442.633 807.078 442.711 807.156 442.789 807.156 453.833 805.989 453.833 804.433 453.522 803.111 453.056 801.711 452.278 800.7 451.5 799.922 450.8 799.144 449.867 798.367 448.622 797.744 447.222 797.356 445.744 797.2 444.344 797.2 443.489 797.278 442.789 799.222 441.7 800.544 440.922Z"
                                        />
                                        <path
                                                d="M824.267 424.044 824.422 424.044 824.967 425.133 825.433 426.533 825.667 427.778 825.744 429.333 825.589 430.733 825.278 432.056 824.656 433.533 824.111 434.467 823.489 435.322 822.633 436.256 821.467 437.189 820.456 437.811 819.756 438.122 817.811 437.033 815.944 435.944 815.711 435.789 815.867 434.389 815.867 433.222 816.567 432.522 817.578 431.2 818.278 430.033 818.978 428.556 819.522 426.844 820.222 426.378 822.167 425.289 824.033 424.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M266.66 338.481 344.503 338.481 344.503 351.281 266.66 351.281Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M266.66 337.814 266.66 351.947"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M344.503 337.814 344.503 351.947"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M265.993 338.481 345.17 338.481"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M265.993 351.281 345.17 351.281"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip37)">
                            <text
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(270.439 348)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M987.985 338.481 1065.83 338.481 1065.83 351.281 987.985 351.281Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M987.985 337.814 987.985 351.947"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1065.83 337.814 1065.83 351.947"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M987.318 338.481 1066.49 338.481"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M987.318 351.281 1066.49 351.281"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip38)">
                            <text
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(991.764 348)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M553.582 429.869 627.229 429.869 627.229 443.602 553.582 443.602Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M553.582 429.202 553.582 444.269"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M627.229 429.202 627.229 444.269"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M552.915 429.869 627.895 429.869"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M552.915 443.602 627.895 443.602"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip39)">
                            <text id="g273"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(557.361 440)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M652.983 430.691 726.629 430.691 726.629 444.425 652.983 444.425Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M652.983 430.025 652.983 445.091"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M726.629 430.025 726.629 445.091"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M652.316 430.691 727.296 430.691"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M652.316 444.425 727.296 444.425"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip40)">
                            <text id="g288"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(656.762 441)"
                            >
                                Р
                            </text>
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

        fetch('/farxod/server-zomin')
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

                    if (item.id === 316) {
                        const value = document.getElementById("g316");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(316);
                            trueAnimation(3161);
                            trueAnimation(3162);
                        } else {
                            falseAnimation(316);
                            falseAnimation(3161);
                            falseAnimation(3162);
                        }
                    } else if(item.id === 315) {
                        const value = document.getElementById("g315");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(316);
                            trueAnimation(3161);
                            trueAnimation(3162);
                        } else {
                            falseAnimation(316);
                            falseAnimation(3161);
                            falseAnimation(3162);
                        }
                    } else if(item.id === 273) {
                        const value = document.getElementById("g273");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(273);
                        } else {
                            falseAnimation(273);
                        }
                    } else if(item.id === 288) {
                        const value = document.getElementById("g288");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(288);
                        } else {
                            falseAnimation(288);
                        }
                    }
                    // else if(item.id === 82) {
                    //     const value = document.getElementById("g82");
                    //     value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    // } else if(item.id === 76) {
                    //     const value = document.getElementById("g76");
                    //     value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    // }
                    //Aggregate-1
                    else if(item.id === 239) {
                        const value = document.getElementById("g239");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a239");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(239);
                            trueAnimation(2391);
                        } else {
                            falseAnimation(239);
                            falseAnimation(2391);
                        }
                    } else if(item.id === 240) {
                        const value = document.getElementById("g240");
                        value.textContent = "Qвар= " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 241) {
                        const value = document.getElementById("k239");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 242) {
                        const value = document.getElementById("n239");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 243) {
                        const value = document.getElementById("w239");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 258) {
                        const value = document.getElementById("g258");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a258");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(258);
                            trueAnimation(2581);
                        } else {
                            falseAnimation(258);
                            falseAnimation(2581);
                        }
                    } else if(item.id === 259) {
                        const value = document.getElementById("g259");
                        value.textContent = "Qвар= " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 260) {
                        const value = document.getElementById("k258");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 261) {
                        const value = document.getElementById("n258");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 262) {
                        const value = document.getElementById("w258");
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