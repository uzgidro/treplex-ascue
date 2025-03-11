<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Ургут ГЭС';
$energy = new Energy();
$id = 56;
$dashboard = new Dashboard();
$power = new Day();

$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);
$urlAggregate4 = $energy->getInformation($id, 4);
$urlAggregate5 = $energy->getInformation($id, 5);
$urlAggregate6 = $energy->getInformation($id,62);
$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['samarqand/index']) ?>">"Самарқанд ГЭСлар каскади" Филиали</a></li>
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
                        viewBox="0 0 1300 620"
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
                            <rect x="228" y="-13" width="85" height="91" />
                        </clipPath>
                        <clipPath id="clip2">
                            <rect x="228" y="1" width="85" height="90" />
                        </clipPath>
                        <clipPath id="clip3">
                            <rect x="4.65661e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                                width="18"
                                height="41"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAALCAMAAACAu7enAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAYUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAKh5qUYAAAAHdFJOUwA8TeXx8/fPUMxaAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAAIklEQVQYV43ESQEAIBAEIPbQ6d/YCvKAyfBzbbZ0kubkQngT0wCfQm2VxgAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img4"
                        ></image>
                        <clipPath id="clip5">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip6">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                                width="18"
                                height="42"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAMCAMAAACdvocfAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAASUExURQAAACPcFSTbFCPbFSPbFSPbFb8XuooAAAAFdFJOUwAkTeXniB5QOQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAACFJREFUGFeNxEERACAQACHU2/6VHRvIAwTTsKulh9Px/wUWEwCWvtsA2wAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img7"
                        ></image>
                        <clipPath id="clip8">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip9">
                            <rect x="312" y="283" width="75" height="90" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="1156" y="281" width="91" height="91" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="114" y="464" width="84" height="91" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip13">
                            <rect x="0" y="0" width="50180.5" height="114300" />
                        </clipPath>
                        <clipPath id="clip14">
                            <rect x="124" y="295" width="84" height="91" />
                        </clipPath>
                        <clipPath id="clip15">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip16">
                            <rect x="0" y="0" width="50180.5" height="114300" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="1.1811e+06" height="571500" />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,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"
                                preserveAspectRatio="none"
                                id="img18"
                        ></image>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="1.17308e+06" height="571500" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="1044" y="-12" width="95" height="90" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="1146" y="55" width="89" height="90" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="1150" y="15" width="75" height="90" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="806" y="378" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="806" y="378" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip25">
                            <rect x="806" y="378" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="956" y="377" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip27">
                            <rect x="956" y="377" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip28">
                            <rect x="956" y="377" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip29">
                            <rect x="656" y="381" width="84" height="83" />
                        </clipPath>
                        <clipPath id="clip30">
                            <rect x="656" y="381" width="84" height="83" />
                        </clipPath>
                        <clipPath id="clip31">
                            <rect x="656" y="381" width="84" height="83" />
                        </clipPath>
                        <clipPath id="clip32">
                            <rect x="504" y="378" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip33">
                            <rect x="504" y="378" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip34">
                            <rect x="504" y="378" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip35">
                            <rect x="355" y="377" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip36">
                            <rect x="355" y="377" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip37">
                            <rect x="355" y="377" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip38">
                            <rect x="1109" y="378" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip39">
                            <rect x="1109" y="378" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip40">
                            <rect x="1109" y="378" width="84" height="84" />
                        </clipPath>
                        <clipPath id="clip41">
                            <rect x="806" y="413" width="94" height="91" />
                        </clipPath>
                        <clipPath id="clip42">
                            <rect x="806" y="426" width="94" height="91" />
                        </clipPath>
                        <clipPath id="clip43">
                            <rect x="806" y="439" width="94" height="91" />
                        </clipPath>
                        <clipPath id="clip44">
                            <rect x="806" y="452" width="94" height="90" />
                        </clipPath>
                        <clipPath id="clip45">
                            <rect x="806" y="465" width="94" height="90" />
                        </clipPath>
                        <clipPath id="clip46">
                            <rect x="806" y="477" width="94" height="91" />
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
                                d="M1.50001 5.99999 1.5001 61.473-1.49989 61.473-1.49999 6ZM1.02471e-05 6-4.49998 9.00001 0 0 4.50002 8.99999ZM4.5001 61.473C4.50011 63.9582 2.48539 65.973 0.000112672 65.973-2.48517 65.973-4.49989 63.9583-4.4999 61.473-4.4999 58.9877-2.48518 56.973 9.73015e-05 56.973 2.48538 56.973 4.5001 58.9877 4.5001 61.473Z"
                                fill="#7F7F7F"
                                transform="matrix(1 0 0 -1 159.5 479.973)"
                        />
                        <path
                                d="M1.5-2.86416e-06 1.5001 54.9831-1.49989 54.9831-1.5 2.86416e-06ZM4.5001 54.9831C4.50011 57.4684 2.48539 59.4831 0.000113579 59.4831-2.48517 59.4831-4.49989 57.4684-4.4999 54.9831-4.4999 52.4978-2.48519 50.4831 9.63944e-05 50.4831 2.48538 50.4831 4.5001 52.4978 4.5001 54.9831Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 1149.5 396.483)"
                        />
                        <path
                                d="M1.5-2.86416e-06 1.5001 54.9831-1.49989 54.9831-1.5 2.86416e-06ZM4.5001 54.9831C4.50011 57.4684 2.48539 59.4831 0.000113579 59.4831-2.48517 59.4831-4.49989 57.4684-4.4999 54.9831-4.4999 52.4978-2.48519 50.4831 9.63944e-05 50.4831 2.48538 50.4831 4.5001 52.4978 4.5001 54.9831Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 997.5 397.483)"
                        />
                        <path
                                d="M1.5-2.86416e-06 1.5001 54.9831-1.49989 54.9831-1.5 2.86416e-06ZM4.5001 54.9831C4.50011 57.4684 2.48539 59.4831 0.000113579 59.4831-2.48517 59.4831-4.49989 57.4684-4.4999 54.9831-4.4999 52.4978-2.48519 50.4831 9.63944e-05 50.4831 2.48538 50.4831 4.5001 52.4978 4.5001 54.9831Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 697.5 398.483)"
                        />
                        <path
                                d="M1.5-2.86416e-06 1.5001 54.9831-1.49989 54.9831-1.5 2.86416e-06ZM4.5001 54.9831C4.50011 57.4684 2.48539 59.4831 0.000113579 59.4831-2.48517 59.4831-4.49989 57.4684-4.4999 54.9831-4.4999 52.4978-2.48519 50.4831 9.63944e-05 50.4831 2.48538 50.4831 4.5001 52.4978 4.5001 54.9831Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 546.5 396.483)"
                        />
                        <path
                                d="M1.5-2.81687e-06 1.5001 55.9061-1.49989 55.9061-1.5 2.81687e-06ZM4.5001 55.9061C4.50011 58.3914 2.48539 60.4061 0.000113437 60.4061-2.48517 60.4061-4.49989 58.3914-4.4999 55.9061-4.4999 53.4209-2.48518 51.4061 9.65363e-05 51.4061 2.48538 51.4061 4.5001 53.4209 4.5001 55.9061Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 395.5 396.406)"
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
                                fill="#7B7E85"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(1212.11 356)"
                        >
                            СШ-6-1
                            <tspan font-size="19" x="-568.709" y="-333">Ургут ГЭС</tspan>
                        </text>
                        <rect id="c130410"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1140.5 375.5)"
                        />
                        <text
                                fill="#7B7E85"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(312.884 354)"
                        >
                            СШ-6-2
                            <tspan font-weight="700" font-size="11" x="-62.8392" y="-22">ТСН-2</tspan>
                            <tspan font-weight="700" font-size="11" x="-62.8392" y="-9">100кВА</tspan>
                            <tspan font-weight="700" font-size="11" x="-62.8392" y="4">6/0,4</tspan>
                            <tspan font-weight="700" font-size="11" x="-262.976" y="-31">ТСН-1</tspan>
                            <tspan font-weight="700" font-size="11" x="-260.309" y="-18">100кВ</tspan>
                            <tspan font-weight="700" font-size="11" x="-238.643" y="-5">А</tspan>
                            <tspan font-weight="700" font-size="11" x="-252.643" y="8">6/0,4</tspan>
                        </text>
                        <rect id="c1334"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#7F7F7F"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 150.5 450.5)"
                        />
                        <text
                                fill="#7B7E85"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(172.962 450)"
                        >
                            В
                            <tspan font-size="11" x="7.16667" y="0">-</tspan>
                            ХН
                            <tspan font-size="11" x="-35.9922" y="44">Хоз</tspan>
                            <tspan font-size="11" x="-15.9922" y="44">нужд</tspan>
                            <tspan font-size="11" x="68.9954" y="-377">Пс</tspan>
                            -Дустлик
                        </text>
                        <rect id="c258"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 262.5 137.5)"
                        />
                        <text
                                fill="#7B7E85"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(284.101 132)"
                        >
                            B-Ургут-ГЭС-2
                        </text>
                        <path
                                d="M1239.7 341.5 317.5 341.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.5-1.02557e-06 1.5001 153.554-1.49989 153.554-1.5 1.02557e-06ZM-4.5 3.0767e-06C-4.5-2.48528-2.48528-4.5-3.0767e-06-4.5 2.48528-4.5 4.5-2.48528 4.5-3.0767e-06 4.5 2.48528 2.48528 4.5 3.0767e-06 4.5-2.48528 4.5-4.5 2.48528-4.5 3.0767e-06Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 469.5 341.054)"
                        />
                        <path
                                d="M273.5 187.5 471.169 187.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M228.768 313.143 228.5 217.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 0.000104987 95.643"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 101.5 313.143)"
                        />
                        <path
                                d="M273.084 85.4785 273.55 118.826 270.55 118.868 270.084 85.5204ZM271.584 85.4995 267.126 88.562 271.5 79.5001 276.125 88.4363Z"
                                fill="#006600"
                        />
                        <path id="c13193"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 86.5001 366.5)"
                        />
                        <path id="c13192"
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 85.5001 342.5)"
                        />
                        <path id="c13195"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 213.5 366.5)"
                        />
                        <path id="c13194"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 213.5 342.5)"
                        />
                        <path
                                d="M0 0 0.000104987 50.9069"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 100.5 418.407)"
                        />
                        <path
                                d="M0 0 0.000104987 50.9069"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 228.5 418.407)"
                        />
                        <path
                                d="M99.5001 418.5 229.513 418.5"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M228.843 25.9196 312.442 25.9196 312.442 39.5108 228.843 39.5108Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M228.843 39.5108 312.442 39.5108 312.442 53.1019 228.843 53.1019Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M228.176 39.5108 313.109 39.5108"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M228.843 25.2529 228.843 53.7686"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M312.442 25.2529 312.442 53.7686"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M228.176 25.9196 313.109 25.9196"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M228.176 53.1019 313.109 53.1019"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip1)">
                            <text id="g258"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(232.622 36)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip2)">
                            <text id="g257"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(232.622 50)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip3)"
                                transform="matrix(0.000104987 0 0 0.000104987 304 27)"
                        >
                            <g clip-path="url(#clip5)" transform="matrix(1 0 0 1.05366 -0.25 0)">
                                <use
                                        width="100%"
                                        height="100%"
                                        xlink:href="#img4"
                                        transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                                clip-path="url(#clip6)"
                                transform="matrix(0.000104987 0 0 0.000104987 305 40)"
                        >
                            <g
                                    clip-path="url(#clip8)"
                                    transform="matrix(1 0 0 1.02857 -0.25 -0.03125)"
                            >
                                <use
                                        width="100%"
                                        height="100%"
                                        xlink:href="#img7"
                                        transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <text
                                fill="#7B7E85"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(424.917 405)"
                        >
                            Г
                            <tspan font-size="11" x="6.83334" y="0">-</tspan>
                            6
                            <tspan font-size="11" x="0" y="13">6</tspan>
                            <tspan font-size="11" x="8" y="13">кВ</tspan>
                            <tspan font-size="11" x="0" y="26">0,5</tspan>
                            <tspan font-size="11" x="16" y="26">МВт</tspan>
                            <tspan font-size="11" x="0" y="39">СГС</tspan>
                            <tspan font-size="11" x="22.1667" y="39">-</tspan>
                            500-20
                            <tspan font-size="11" x="55.8333" y="39">-</tspan>
                            6,3
                            <tspan font-size="11" x="333.868" y="-79">МСВ</tspan>
                        </text>
                        <rect id="c13048"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 988.5 375.5)"
                        />
                        <rect id="c13044"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 688.5 375.5)"
                        />
                        <rect id="c13042"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 536.5 374.5)"
                        />
                        <rect id="c1304"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 386.5 375.5)"
                        />
                        <text
                                fill="#7B7E85"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(491.526 256)"
                        >
                            В
                            <tspan font-size="11" x="7.16666" y="0">-</tspan>
                            Ургутский
                            <tspan font-size="11" x="16.2467" y="13">ГЭС</tspan>
                            <tspan font-size="11" x="37.9133" y="13">-</tspan>
                            2
                        </text>
                        <path
                                d="M312.442 321.601 386.144 321.601 386.144 334.401 312.442 334.401Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M312.442 320.934 312.442 335.067"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M386.144 320.934 386.144 335.067"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.776 321.601 386.81 321.601"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M311.776 334.401 386.81 334.401"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip9)">
                            <text id="g1312"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(316.222 332)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M1156.98 319.924 1246.21 319.924 1246.21 332.724 1156.98 332.724Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1156.98 319.257 1156.98 333.39"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1246.21 319.257 1246.21 333.39"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1156.32 319.924 1246.88 319.924"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1156.32 332.724 1246.88 332.724"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip10)">
                            <text id="g83"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1160.76 330)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M114.173 503.368 197.773 503.368 197.773 516.959 114.173 516.959Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M114.173 502.701 114.173 517.626"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M197.773 502.701 197.773 517.626"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M113.507 503.368 198.439 503.368"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M113.507 516.959 198.439 516.959"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip11)">
                            <text id="g1334"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(117.953 513)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip12)"
                                transform="matrix(0.000104987 0 0 0.000104987 189 504)"
                        >
                            <g clip-path="url(#clip13)" transform="scale(1.13889 1)">
                                <use
                                        width="100%"
                                        height="100%"
                                        xlink:href="#img4"
                                        transform="scale(2787.8 2787.8)"
                                ></use>
                            </g>
                        </g>
                        <path
                                d="M271.5 137.5 272.966 217.245"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M100.5 217.5 274.991 217.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 270.5 190.5)"
                        />
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 225.5 219.5)"
                        />
                        <path
                                d="M124.198 334.01 207.798 334.01 207.798 347.601 124.198 347.601Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M124.198 333.343 124.198 348.268"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M207.798 333.343 207.798 348.268"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M123.531 334.01 208.464 334.01"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M123.531 347.601 208.464 347.601"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip14)">
                            <text id="g1319"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(127.978 344)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                                clip-path="url(#clip15)"
                                transform="matrix(0.000104987 0 0 0.000104987 199 335)"
                        >
                            <g clip-path="url(#clip16)" transform="matrix(1.13889 0 0 1 0 -0.25)">
                                <use
                                        width="100%"
                                        height="100%"
                                        xlink:href="#img4"
                                        transform="scale(2787.8 2787.8)"
                                ></use>
                            </g>
                        </g>
                        <rect id="c13191"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 218.5 269.5)"
                        />
                        <rect id="c1319"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 93.5001 268.5)"
                        />
                        <path
                                d="M1.5-2.86416e-06 1.5001 54.9831-1.49989 54.9831-1.5 2.86416e-06ZM4.5001 54.9831C4.50011 57.4684 2.48539 59.4831 0.000113579 59.4831-2.48517 59.4831-4.49989 57.4684-4.4999 54.9831-4.4999 52.4978-2.48519 50.4831 9.63944e-05 50.4831 2.48538 50.4831 4.5001 52.4978 4.5001 54.9831Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 848.5 396.483)"
                        />
                        <rect id="c13046"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 838.5 375.5)"
                        />
                        <rect id="c1"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 460.5 268.5)"
                        />
                        <rect id="c2"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 761.5 350.5)"
                        />
                        <text
                                fill="#7B7E85"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(238.796 263)"
                        >
                            В-ТС-2
                            <tspan font-size="11" x="-185.133" y="0">В-ТС-2</tspan>

                            <tspan font-size="11" x="336.594" y="142">Г-5</tspan>
                            <tspan font-size="11" x="336.594" y="155">6 кВ</tspan>
                            <tspan font-size="11" x="336.594" y="168">0,5 МВт</tspan>
                            <tspan font-size="11" x="336.594" y="181">СГС-500-20-6,3</tspan>

                            <tspan font-size="11" x="491.089" y="144">Г-4</tspan>
                            <tspan font-size="11" x="491.089" y="157">6 кВ</tspan>
                            <tspan font-size="11" x="491.089" y="170">0,5 МВт</tspan>
                            <tspan font-size="11" x="491.089" y="183">СГС-500-20-6,3</tspan>

                            <tspan font-size="11" x="639.593" y="142">Г-3</tspan>
                            <tspan font-size="11" x="639.593" y="155">6 кВ</tspan>
                            <tspan font-size="11" x="639.593" y="168">0,5 МВт</tspan>
                            <tspan font-size="11" x="639.593" y="181">СГС-500-20-6,3</tspan>

                            <tspan font-size="11" x="789.4" y="142">Г-2</tspan>
                            <tspan font-size="11" x="789.4" y="155">6 кВ</tspan>
                            <tspan font-size="11" x="789.4" y="168">0,5 МВт</tspan>
                            <tspan font-size="11" x="805.4" y="168"></tspan>
                            <tspan font-size="11" x="789.4" y="181">СГС-500-20-6,3</tspan>

                            <tspan font-size="11" x="948.675" y="140">Г-1</tspan>
                            <tspan font-size="11" x="948.675" y="153">6 кВ</tspan>
                            <tspan font-size="11" x="956.675" y="153"></tspan>
                            <tspan font-size="11" x="948.675" y="166">0,5 МВт</tspan>
                            <tspan font-size="11" x="964.675" y="166"></tspan>
                            <tspan font-size="11" x="948.675" y="179">СГС-500-20-6,3</tspan>
                        </text>
                        <g
                                clip-path="url(#clip17)"
                                transform="matrix(0.000104987 0 0 0.000104987 1019 45)"
                        >
                            <g clip-path="url(#clip19)" transform="matrix(1.00684 0 0 1 -1 -0.03125)">
                                <use
                                        width="100%"
                                        height="100%"
                                        xlink:href="#img18"
                                        transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 0 0 1 1040.17 40.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 1139.5 94.1712)"
                        />
                        <path
                                d="M1136.55 107.031 1128.86 98.6543 1129.35 98.2035 1137.04 106.58ZM1129.11 98.4289 1128.95 102.197 1125.5 94.5001 1132.87 98.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M1146.95 106.889 1137.5 106.5"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1044.28 26.6012 1138.65 26.6012 1138.65 39.4012 1044.28 39.4012Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1044.28 25.9345 1044.28 40.0678"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1138.65 25.9345 1138.65 40.0678"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1043.62 26.6012 1139.32 26.6012"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1043.62 39.4012 1139.32 39.4012"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip20)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1048.06 37)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1058.56 37)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M1040.5 40.5001 1059.69 40.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1146.77 93.6848 1234.43 93.6848 1234.43 106.485 1146.77 106.485Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1146.77 93.0182 1146.77 107.151"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1234.43 93.0182 1234.43 107.151"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1146.11 93.6848 1235.1 93.6848"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1146.11 106.485 1235.1 106.485"
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
                                    transform="translate(1150.55 104)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1161.05 104)"
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
                                transform="matrix(1 0 0 -1 1036.5 48.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 0 0 1 1146.99 66.5001)"
                        />
                        <path
                                d="M1146.5 66.5001 1165.69 66.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1150.97 53.5013 1224.17 53.5013 1224.17 66.3013 1150.97 66.3013Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1150.97 52.8346 1150.97 66.968"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1224.17 52.8346 1224.17 66.968"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1150.31 53.5013 1224.84 53.5013"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1150.31 66.3013 1224.84 66.3013"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip22)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1154.75 64)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M1122.5 94.5001 1145.21 94.5002"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path id="c13047"
                                d="M822.5 420C822.5 406.469 833.469 395.5 847 395.5 860.531 395.5 871.5 406.469 871.5 420 871.5 433.531 860.531 444.5 847 444.5 833.469 444.5 822.5 433.531 822.5 420Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate3 ?>">
                            <g clip-path="url(#clip23)">
                                <g clip-path="url(#clip24)">
                                    <g clip-path="url(#clip25)">
                                        <path
                                                d="M847.689 413.933 848.622 413.933 849.944 414.167 851.033 414.633 851.889 415.178 852.9 416.189 853.522 417.122 853.989 418.367 854.144 419.067 854.144 420.933 853.833 422.1 853.211 423.344 852.589 424.122 852.044 424.667 850.956 425.367 849.711 425.833 848.933 425.989 847.378 425.989 846.133 425.678 845.278 425.289 844.422 424.744 843.567 423.967 843.022 423.189 842.478 422.1 842.167 420.856 842.089 419.922 842.244 418.678 842.556 417.667 843.178 416.5 844.033 415.567 844.656 415.022 845.978 414.322 847.144 414.011Z"
                                        />
                                        <path
                                                d="M848.156 400.089 849.011 400.089 850.489 400.322 851.967 400.789 853.211 401.411 854.144 402.033 854.922 402.733 855.856 403.667 856.711 404.911 857.333 406.156 857.8 407.556 858.033 408.722 858.111 409.344 858.111 410.822 857.878 412.3 857.489 413.622 856.867 414.944 856.089 416.033 855.933 416.033 855.311 414.944 854.378 413.856 853.522 413.078 852.433 412.378 851.267 411.833 849.944 411.444 848.156 411.211Z"
                                        />
                                        <path
                                                d="M835.4 415.878 835.789 415.956 837.967 417.2 839.522 418.133 839.6 418.289 839.444 419.922 839.6 421.556 839.989 423.033 840.533 424.2 840.533 424.433 838.356 425.678 836.489 426.767 832.444 429.1 831.122 429.878 830.889 429.878 830.189 428.4 829.8 427.078 829.644 426.144 829.567 424.822 829.722 423.344 829.956 422.256 830.5 420.778 831.044 419.767 831.744 418.756 832.678 417.744 833.533 416.967 834.933 416.111Z"
                                        />
                                        <path
                                                d="M855.7 424.433 856.089 424.511 857.956 425.6 864.022 429.1 865.344 429.878 865.189 430.267 864.644 431.044 863.944 431.9 863.4 432.444 862.233 433.3 860.989 434 859.511 434.544 858.344 434.778 857.878 434.856 855.544 434.856 854.378 434.622 853.133 434.233 851.811 433.611 850.878 432.989 850.878 428.322 851.578 428.011 852.9 427.311 853.833 426.611 854.922 425.522Z"
                                        />
                                        <path
                                                d="M838.667 405.067 840.378 405.067 841.856 405.3 843.489 405.844 844.811 406.544 845.433 406.933 845.433 411.678 844.033 412.3 842.944 413 842.089 413.7 841.544 414.244 840.611 415.567 840.144 415.411 838.822 414.633 832.756 411.133 831.044 410.122 830.967 409.967 831.511 409.111 832.367 408.1 832.989 407.478 834.156 406.622 835.244 406 836.722 405.456 837.578 405.222Z"
                                        />
                                        <path
                                                d="M842.167 426.533 842.478 426.611 843.644 427.467 844.967 428.089 846.211 428.478 847.144 428.633 848.078 428.711 848.156 428.789 848.156 439.833 846.989 439.833 845.433 439.522 844.111 439.056 842.711 438.278 841.7 437.5 840.922 436.8 840.144 435.867 839.367 434.622 838.744 433.222 838.356 431.744 838.2 430.344 838.2 429.489 838.278 428.789 840.222 427.7 841.544 426.922Z"
                                        />
                                        <path
                                                d="M865.267 410.044 865.422 410.044 865.967 411.133 866.433 412.533 866.667 413.778 866.744 415.333 866.589 416.733 866.278 418.056 865.656 419.533 865.111 420.467 864.489 421.322 863.633 422.256 862.467 423.189 861.456 423.811 860.756 424.122 858.811 423.033 856.944 421.944 856.711 421.789 856.867 420.389 856.867 419.222 857.567 418.522 858.578 417.2 859.278 416.033 859.978 414.556 860.522 412.844 861.222 412.378 863.167 411.289 865.033 410.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c13049"
                                d="M973.5 419C973.5 405.469 984.469 394.5 998 394.5 1011.53 394.5 1022.5 405.469 1022.5 419 1022.5 432.531 1011.53 443.5 998 443.5 984.469 443.5 973.5 432.531 973.5 419Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip26)">
                                <g clip-path="url(#clip27)">
                                    <g clip-path="url(#clip28)">
                                        <path
                                                d="M997.689 412.933 998.622 412.933 999.944 413.167 1001.03 413.633 1001.89 414.178 1002.9 415.189 1003.52 416.122 1003.99 417.367 1004.14 418.067 1004.14 419.933 1003.83 421.1 1003.21 422.344 1002.59 423.122 1002.04 423.667 1000.96 424.367 999.711 424.833 998.933 424.989 997.378 424.989 996.133 424.678 995.278 424.289 994.422 423.744 993.567 422.967 993.022 422.189 992.478 421.1 992.167 419.856 992.089 418.922 992.244 417.678 992.556 416.667 993.178 415.5 994.033 414.567 994.656 414.022 995.978 413.322 997.144 413.011Z"
                                        />
                                        <path
                                                d="M998.156 399.089 999.011 399.089 1000.49 399.322 1001.97 399.789 1003.21 400.411 1004.14 401.033 1004.92 401.733 1005.86 402.667 1006.71 403.911 1007.33 405.156 1007.8 406.556 1008.03 407.722 1008.11 408.344 1008.11 409.822 1007.88 411.3 1007.49 412.622 1006.87 413.944 1006.09 415.033 1005.93 415.033 1005.31 413.944 1004.38 412.856 1003.52 412.078 1002.43 411.378 1001.27 410.833 999.944 410.444 998.156 410.211Z"
                                        />
                                        <path
                                                d="M985.4 414.878 985.789 414.956 987.967 416.2 989.522 417.133 989.6 417.289 989.444 418.922 989.6 420.556 989.989 422.033 990.533 423.2 990.533 423.433 988.356 424.678 986.489 425.767 982.444 428.1 981.122 428.878 980.889 428.878 980.189 427.4 979.8 426.078 979.644 425.144 979.567 423.822 979.722 422.344 979.956 421.256 980.5 419.778 981.044 418.767 981.744 417.756 982.678 416.744 983.533 415.967 984.933 415.111Z"
                                        />
                                        <path
                                                d="M1005.7 423.433 1006.09 423.511 1007.96 424.6 1014.02 428.1 1015.34 428.878 1015.19 429.267 1014.64 430.044 1013.94 430.9 1013.4 431.444 1012.23 432.3 1010.99 433 1009.51 433.544 1008.34 433.778 1007.88 433.856 1005.54 433.856 1004.38 433.622 1003.13 433.233 1001.81 432.611 1000.88 431.989 1000.88 427.322 1001.58 427.011 1002.9 426.311 1003.83 425.611 1004.92 424.522Z"
                                        />
                                        <path
                                                d="M988.667 404.067 990.378 404.067 991.856 404.3 993.489 404.844 994.811 405.544 995.433 405.933 995.433 410.678 994.033 411.3 992.944 412 992.089 412.7 991.544 413.244 990.611 414.567 990.144 414.411 988.822 413.633 982.756 410.133 981.044 409.122 980.967 408.967 981.511 408.111 982.367 407.1 982.989 406.478 984.156 405.622 985.244 405 986.722 404.456 987.578 404.222Z"
                                        />
                                        <path
                                                d="M992.167 425.533 992.478 425.611 993.644 426.467 994.967 427.089 996.211 427.478 997.144 427.633 998.078 427.711 998.156 427.789 998.156 438.833 996.989 438.833 995.433 438.522 994.111 438.056 992.711 437.278 991.7 436.5 990.922 435.8 990.144 434.867 989.367 433.622 988.744 432.222 988.356 430.744 988.2 429.344 988.2 428.489 988.278 427.789 990.222 426.7 991.544 425.922Z"
                                        />
                                        <path
                                                d="M1015.27 409.044 1015.42 409.044 1015.97 410.133 1016.43 411.533 1016.67 412.778 1016.74 414.333 1016.59 415.733 1016.28 417.056 1015.66 418.533 1015.11 419.467 1014.49 420.322 1013.63 421.256 1012.47 422.189 1011.46 422.811 1010.76 423.122 1008.81 422.033 1006.94 420.944 1006.71 420.789 1006.87 419.389 1006.87 418.222 1007.57 417.522 1008.58 416.2 1009.28 415.033 1009.98 413.556 1010.52 411.844 1011.22 411.378 1013.17 410.289 1015.03 409.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c13045"
                                d="M673.5 423C673.5 409.469 684.469 398.5 698 398.5 711.531 398.5 722.5 409.469 722.5 423 722.5 436.531 711.531 447.5 698 447.5 684.469 447.5 673.5 436.531 673.5 423Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate4 ?>">
                            <g clip-path="url(#clip29)">
                                <g clip-path="url(#clip30)">
                                    <g clip-path="url(#clip31)">
                                        <path
                                                d="M0 0 0.922222 0 2.2287 0.230556 3.30463 0.691667 4.15 1.22963 5.14907 2.2287 5.76389 3.15093 6.225 4.38056 6.3787 5.07222 6.3787 6.91667 6.0713 8.06944 5.45648 9.29907 4.84167 10.0676 4.3037 10.6056 3.22778 11.2972 1.99815 11.7583 1.22963 11.912-0.307407 11.912-1.53704 11.6046-2.38241 11.2204-3.22778 10.6824-4.07315 9.91389-4.61111 9.14537-5.14907 8.06944-5.45648 6.83981-5.53333 5.91759-5.37963 4.68796-5.07222 3.68889-4.45741 2.53611-3.61204 1.61389-2.99722 1.07593-1.69074 0.384259-0.537963 0.0768519Z"
                                                transform="matrix(1.01205 0 0 1 697.689 416.506)"
                                        />
                                        <path
                                                d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                                transform="matrix(1.01205 0 0 1 698.156 402.826)"
                                        />
                                        <path
                                                d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                                transform="matrix(1.01205 0 0 1 685.4 418.427)"
                                        />
                                        <path
                                                d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                                transform="matrix(1.01205 0 0 1 705.7 426.881)"
                                        />
                                        <path
                                                d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                                transform="matrix(1.01205 0 0 1 688.667 407.744)"
                                        />
                                        <path
                                                d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                                transform="matrix(1.01205 0 0 1 692.167 428.956)"
                                        />
                                        <path
                                                d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                                transform="matrix(1.01205 0 0 1 715.267 412.663)"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c13043"
                                d="M521.5 420C521.5 406.469 532.469 395.5 546 395.5 559.531 395.5 570.5 406.469 570.5 420 570.5 433.531 559.531 444.5 546 444.5 532.469 444.5 521.5 433.531 521.5 420Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate5 ?>">
                            <g clip-path="url(#clip32)">
                                <g clip-path="url(#clip33)">
                                    <g clip-path="url(#clip34)">
                                        <path
                                                d="M545.689 413.933 546.622 413.933 547.944 414.167 549.033 414.633 549.889 415.178 550.9 416.189 551.522 417.122 551.989 418.367 552.144 419.067 552.144 420.933 551.833 422.1 551.211 423.344 550.589 424.122 550.044 424.667 548.956 425.367 547.711 425.833 546.933 425.989 545.378 425.989 544.133 425.678 543.278 425.289 542.422 424.744 541.567 423.967 541.022 423.189 540.478 422.1 540.167 420.856 540.089 419.922 540.244 418.678 540.556 417.667 541.178 416.5 542.033 415.567 542.656 415.022 543.978 414.322 545.144 414.011Z"
                                        />
                                        <path
                                                d="M546.156 400.089 547.011 400.089 548.489 400.322 549.967 400.789 551.211 401.411 552.144 402.033 552.922 402.733 553.856 403.667 554.711 404.911 555.333 406.156 555.8 407.556 556.033 408.722 556.111 409.344 556.111 410.822 555.878 412.3 555.489 413.622 554.867 414.944 554.089 416.033 553.933 416.033 553.311 414.944 552.378 413.856 551.522 413.078 550.433 412.378 549.267 411.833 547.944 411.444 546.156 411.211Z"
                                        />
                                        <path
                                                d="M533.4 415.878 533.789 415.956 535.967 417.2 537.522 418.133 537.6 418.289 537.444 419.922 537.6 421.556 537.989 423.033 538.533 424.2 538.533 424.433 536.356 425.678 534.489 426.767 530.444 429.1 529.122 429.878 528.889 429.878 528.189 428.4 527.8 427.078 527.644 426.144 527.567 424.822 527.722 423.344 527.956 422.256 528.5 420.778 529.044 419.767 529.744 418.756 530.678 417.744 531.533 416.967 532.933 416.111Z"
                                        />
                                        <path
                                                d="M553.7 424.433 554.089 424.511 555.956 425.6 562.022 429.1 563.344 429.878 563.189 430.267 562.644 431.044 561.944 431.9 561.4 432.444 560.233 433.3 558.989 434 557.511 434.544 556.344 434.778 555.878 434.856 553.544 434.856 552.378 434.622 551.133 434.233 549.811 433.611 548.878 432.989 548.878 428.322 549.578 428.011 550.9 427.311 551.833 426.611 552.922 425.522Z"
                                        />
                                        <path
                                                d="M536.667 405.067 538.378 405.067 539.856 405.3 541.489 405.844 542.811 406.544 543.433 406.933 543.433 411.678 542.033 412.3 540.944 413 540.089 413.7 539.544 414.244 538.611 415.567 538.144 415.411 536.822 414.633 530.756 411.133 529.044 410.122 528.967 409.967 529.511 409.111 530.367 408.1 530.989 407.478 532.156 406.622 533.244 406 534.722 405.456 535.578 405.222Z"
                                        />
                                        <path
                                                d="M540.167 426.533 540.478 426.611 541.644 427.467 542.967 428.089 544.211 428.478 545.144 428.633 546.078 428.711 546.156 428.789 546.156 439.833 544.989 439.833 543.433 439.522 542.111 439.056 540.711 438.278 539.7 437.5 538.922 436.8 538.144 435.867 537.367 434.622 536.744 433.222 536.356 431.744 536.2 430.344 536.2 429.489 536.278 428.789 538.222 427.7 539.544 426.922Z"
                                        />
                                        <path
                                                d="M563.267 410.044 563.422 410.044 563.967 411.133 564.433 412.533 564.667 413.778 564.744 415.333 564.589 416.733 564.278 418.056 563.656 419.533 563.111 420.467 562.489 421.322 561.633 422.256 560.467 423.189 559.456 423.811 558.756 424.122 556.811 423.033 554.944 421.944 554.711 421.789 554.867 420.389 554.867 419.222 555.567 418.522 556.578 417.2 557.278 416.033 557.978 414.556 558.522 412.844 559.222 412.378 561.167 411.289 563.033 410.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c13041"
                                d="M371.5 419C371.5 405.469 382.469 394.5 396 394.5 409.531 394.5 420.5 405.469 420.5 419 420.5 432.531 409.531 443.5 396 443.5 382.469 443.5 371.5 432.531 371.5 419Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate6 ?>">
                            <g clip-path="url(#clip35)">
                                <g clip-path="url(#clip36)">
                                    <g clip-path="url(#clip37)">
                                        <path
                                                d="M396.689 412.933 397.622 412.933 398.944 413.167 400.033 413.633 400.889 414.178 401.9 415.189 402.522 416.122 402.989 417.367 403.144 418.067 403.144 419.933 402.833 421.1 402.211 422.344 401.589 423.122 401.044 423.667 399.956 424.367 398.711 424.833 397.933 424.989 396.378 424.989 395.133 424.678 394.278 424.289 393.422 423.744 392.567 422.967 392.022 422.189 391.478 421.1 391.167 419.856 391.089 418.922 391.244 417.678 391.556 416.667 392.178 415.5 393.033 414.567 393.656 414.022 394.978 413.322 396.144 413.011Z"
                                        />
                                        <path
                                                d="M397.156 399.089 398.011 399.089 399.489 399.322 400.967 399.789 402.211 400.411 403.144 401.033 403.922 401.733 404.856 402.667 405.711 403.911 406.333 405.156 406.8 406.556 407.033 407.722 407.111 408.344 407.111 409.822 406.878 411.3 406.489 412.622 405.867 413.944 405.089 415.033 404.933 415.033 404.311 413.944 403.378 412.856 402.522 412.078 401.433 411.378 400.267 410.833 398.944 410.444 397.156 410.211Z"
                                        />
                                        <path
                                                d="M384.4 414.878 384.789 414.956 386.967 416.2 388.522 417.133 388.6 417.289 388.444 418.922 388.6 420.556 388.989 422.033 389.533 423.2 389.533 423.433 387.356 424.678 385.489 425.767 381.444 428.1 380.122 428.878 379.889 428.878 379.189 427.4 378.8 426.078 378.644 425.144 378.567 423.822 378.722 422.344 378.956 421.256 379.5 419.778 380.044 418.767 380.744 417.756 381.678 416.744 382.533 415.967 383.933 415.111Z"
                                        />
                                        <path
                                                d="M404.7 423.433 405.089 423.511 406.956 424.6 413.022 428.1 414.344 428.878 414.189 429.267 413.644 430.044 412.944 430.9 412.4 431.444 411.233 432.3 409.989 433 408.511 433.544 407.344 433.778 406.878 433.856 404.544 433.856 403.378 433.622 402.133 433.233 400.811 432.611 399.878 431.989 399.878 427.322 400.578 427.011 401.9 426.311 402.833 425.611 403.922 424.522Z"
                                        />
                                        <path
                                                d="M387.667 404.067 389.378 404.067 390.856 404.3 392.489 404.844 393.811 405.544 394.433 405.933 394.433 410.678 393.033 411.3 391.944 412 391.089 412.7 390.544 413.244 389.611 414.567 389.144 414.411 387.822 413.633 381.756 410.133 380.044 409.122 379.967 408.967 380.511 408.111 381.367 407.1 381.989 406.478 383.156 405.622 384.244 405 385.722 404.456 386.578 404.222Z"
                                        />
                                        <path
                                                d="M391.167 425.533 391.478 425.611 392.644 426.467 393.967 427.089 395.211 427.478 396.144 427.633 397.078 427.711 397.156 427.789 397.156 438.833 395.989 438.833 394.433 438.522 393.111 438.056 391.711 437.278 390.7 436.5 389.922 435.8 389.144 434.867 388.367 433.622 387.744 432.222 387.356 430.744 387.2 429.344 387.2 428.489 387.278 427.789 389.222 426.7 390.544 425.922Z"
                                        />
                                        <path
                                                d="M414.267 409.044 414.422 409.044 414.967 410.133 415.433 411.533 415.667 412.778 415.744 414.333 415.589 415.733 415.278 417.056 414.656 418.533 414.111 419.467 413.489 420.322 412.633 421.256 411.467 422.189 410.456 422.811 409.756 423.122 407.811 422.033 405.944 420.944 405.711 420.789 405.867 419.389 405.867 418.222 406.567 417.522 407.578 416.2 408.278 415.033 408.978 413.556 409.522 411.844 410.222 411.378 412.167 410.289 414.033 409.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c130411"
                                d="M1126.5 420C1126.5 406.469 1137.47 395.5 1151 395.5 1164.53 395.5 1175.5 406.469 1175.5 420 1175.5 433.531 1164.53 444.5 1151 444.5 1137.47 444.5 1126.5 433.531 1126.5 420Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip38)">
                                <g clip-path="url(#clip39)">
                                    <g clip-path="url(#clip40)">
                                        <path
                                                d="M1150.69 413.933 1151.62 413.933 1152.94 414.167 1154.03 414.633 1154.89 415.178 1155.9 416.189 1156.52 417.122 1156.99 418.367 1157.14 419.067 1157.14 420.933 1156.83 422.1 1156.21 423.344 1155.59 424.122 1155.04 424.667 1153.96 425.367 1152.71 425.833 1151.93 425.989 1150.38 425.989 1149.13 425.678 1148.28 425.289 1147.42 424.744 1146.57 423.967 1146.02 423.189 1145.48 422.1 1145.17 420.856 1145.09 419.922 1145.24 418.678 1145.56 417.667 1146.18 416.5 1147.03 415.567 1147.66 415.022 1148.98 414.322 1150.14 414.011Z"
                                        />
                                        <path
                                                d="M1151.16 400.089 1152.01 400.089 1153.49 400.322 1154.97 400.789 1156.21 401.411 1157.14 402.033 1157.92 402.733 1158.86 403.667 1159.71 404.911 1160.33 406.156 1160.8 407.556 1161.03 408.722 1161.11 409.344 1161.11 410.822 1160.88 412.3 1160.49 413.622 1159.87 414.944 1159.09 416.033 1158.93 416.033 1158.31 414.944 1157.38 413.856 1156.52 413.078 1155.43 412.378 1154.27 411.833 1152.94 411.444 1151.16 411.211Z"
                                        />
                                        <path
                                                d="M1138.4 415.878 1138.79 415.956 1140.97 417.2 1142.52 418.133 1142.6 418.289 1142.44 419.922 1142.6 421.556 1142.99 423.033 1143.53 424.2 1143.53 424.433 1141.36 425.678 1139.49 426.767 1135.44 429.1 1134.12 429.878 1133.89 429.878 1133.19 428.4 1132.8 427.078 1132.64 426.144 1132.57 424.822 1132.72 423.344 1132.96 422.256 1133.5 420.778 1134.04 419.767 1134.74 418.756 1135.68 417.744 1136.53 416.967 1137.93 416.111Z"
                                        />
                                        <path
                                                d="M1158.7 424.433 1159.09 424.511 1160.96 425.6 1167.02 429.1 1168.34 429.878 1168.19 430.267 1167.64 431.044 1166.94 431.9 1166.4 432.444 1165.23 433.3 1163.99 434 1162.51 434.544 1161.34 434.778 1160.88 434.856 1158.54 434.856 1157.38 434.622 1156.13 434.233 1154.81 433.611 1153.88 432.989 1153.88 428.322 1154.58 428.011 1155.9 427.311 1156.83 426.611 1157.92 425.522Z"
                                        />
                                        <path
                                                d="M1141.67 405.067 1143.38 405.067 1144.86 405.3 1146.49 405.844 1147.81 406.544 1148.43 406.933 1148.43 411.678 1147.03 412.3 1145.94 413 1145.09 413.7 1144.54 414.244 1143.61 415.567 1143.14 415.411 1141.82 414.633 1135.76 411.133 1134.04 410.122 1133.97 409.967 1134.51 409.111 1135.37 408.1 1135.99 407.478 1137.16 406.622 1138.24 406 1139.72 405.456 1140.58 405.222Z"
                                        />
                                        <path
                                                d="M1145.17 426.533 1145.48 426.611 1146.64 427.467 1147.97 428.089 1149.21 428.478 1150.14 428.633 1151.08 428.711 1151.16 428.789 1151.16 439.833 1149.99 439.833 1148.43 439.522 1147.11 439.056 1145.71 438.278 1144.7 437.5 1143.92 436.8 1143.14 435.867 1142.37 434.622 1141.74 433.222 1141.36 431.744 1141.2 430.344 1141.2 429.489 1141.28 428.789 1143.22 427.7 1144.54 426.922Z"
                                        />
                                        <path
                                                d="M1168.27 410.044 1168.42 410.044 1168.97 411.133 1169.43 412.533 1169.67 413.778 1169.74 415.333 1169.59 416.733 1169.28 418.056 1168.66 419.533 1168.11 420.467 1167.49 421.322 1166.63 422.256 1165.47 423.189 1164.46 423.811 1163.76 424.122 1161.81 423.033 1159.94 421.944 1159.71 421.789 1159.87 420.389 1159.87 419.222 1160.57 418.522 1161.58 417.2 1162.28 416.033 1162.98 414.556 1163.52 412.844 1164.22 412.378 1166.17 411.289 1168.03 410.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M806.763 452.258 899.872 452.258 899.872 465.058 806.763 465.058Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.763 465.058 899.872 465.058 899.872 477.858 806.763 477.858Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.763 477.858 899.872 477.858 899.872 490.658 806.763 490.658Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.763 490.658 899.872 490.658 899.872 503.458 806.763 503.458Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.763 503.458 899.872 503.458 899.872 516.258 806.763 516.258Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.763 516.258 899.872 516.258 899.872 529.058 806.763 529.058Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.097 465.058 900.538 465.058"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.097 477.858 900.538 477.858"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.097 490.658 900.538 490.658"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.097 503.458 900.538 503.458"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.097 516.258 900.538 516.258"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.763 451.591 806.763 529.724"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M899.872 451.591 899.872 529.724"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.097 452.258 900.538 452.258"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M806.097 529.058 900.538 529.058"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip41)">
                            <text id="g1304"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(810.543 462)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip42)">
                            <text id="g1305"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(810.543 475)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip43)">
                            <text id="a1304"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(810.543 488)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip44)">
                            <text id="k1304"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(810.543 501)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip45)">
                            <text id="n1304"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(810.543 513)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip46)">
                            <text id="w1304" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(810.543 526)"
                            >
                                Qвода
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

        fetch('/samarqand/server-urgut')
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
                    if(item.id === 258) {
                        const value = document.getElementById("g258");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(258);
                        } else {
                            falseAnimation(258);
                        }
                    } else if(item.id === 257) {
                        const value = document.getElementById("g257");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(258);
                        } else {
                            falseAnimation(258);
                        }
                    } else if(item.id === 1319) {
                        const value = document.getElementById("g1319");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1319);
                            trueAnimation(13191);
                            trueAnimation(13192);
                            trueAnimation(13193);
                            trueAnimation(13194);
                            trueAnimation(13195);
                        } else {
                            falseAnimation(1319);
                            falseAnimation(13191);
                            falseAnimation(13192);
                            falseAnimation(13193);
                            falseAnimation(13194);
                            falseAnimation(13195);
                        }
                    } else if(item.id === 1334) {
                        const value = document.getElementById("g1334");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1334);
                        } else {
                            falseAnimation(1334);
                        }
                    } else if(item.id === 1312) {
                        const value = document.getElementById("g1312");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 83) {
                        const value = document.getElementById("g83");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }

                    //Aggregate-1
                    else if(item.id === 1304) {
                        const value = document.getElementById("g1304");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a1304");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 0.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(1);
                        } else {
                            falseAnimation(1);
                            falseAnimation(1304);
                            falseAnimation(13041);
                            falseAnimation(13042);
                            falseAnimation(13043);
                        }
                        if (item.value > 2.5) {
                            trueAnimation(1304);
                            trueAnimation(13041);
                            trueAnimation(13042);
                            trueAnimation(13043);
                            trueAnimation(13044);
                            trueAnimation(13045);
                            trueAnimation(13046);
                            trueAnimation(13047);
                            trueAnimation(13048);
                            trueAnimation(13049);
                            trueAnimation(130410);
                            trueAnimation(130411);
                        } else if (item.value < 2.5 && item.value > 2) {
                            falseAnimation(1304);
                            falseAnimation(13041);
                            trueAnimation(13042);
                            trueAnimation(13043);
                            trueAnimation(13044);
                            trueAnimation(13045);
                            trueAnimation(13046);
                            trueAnimation(13047);
                            trueAnimation(13048);
                            trueAnimation(13049);
                            trueAnimation(130410);
                            trueAnimation(130411);
                        } else if (item.value < 2 && item.value > 1.5) {
                            falseAnimation(1304);
                            falseAnimation(13041);
                            falseAnimation(13042);
                            falseAnimation(13043);
                            trueAnimation(13044);
                            trueAnimation(13045);
                            trueAnimation(13046);
                            trueAnimation(13047);
                            trueAnimation(13048);
                            trueAnimation(13049);
                            trueAnimation(130410);
                            trueAnimation(130411);
                        } else if (item.value < 1.5 && item.value > 1) {
                            falseAnimation(1304);
                            falseAnimation(13041);
                            falseAnimation(13042);
                            falseAnimation(13043);
                            falseAnimation(13044);
                            falseAnimation(13045);
                            trueAnimation(13046);
                            trueAnimation(13047);
                            trueAnimation(13048);
                            trueAnimation(13049);
                            trueAnimation(130410);
                            trueAnimation(130411);
                            trueAnimation(2);
                        } else if (item.value < 1 && item.value > 0.5) {
                            falseAnimation(1304);
                            falseAnimation(13041);
                            falseAnimation(13042);
                            falseAnimation(13043);
                            falseAnimation(13044);
                            falseAnimation(13045);
                            falseAnimation(13046);
                            falseAnimation(13047);
                            trueAnimation(13048);
                            trueAnimation(13049);
                            trueAnimation(130410);
                            trueAnimation(130411);
                            trueAnimation(2);
                        } else if (item.value < 0.5 && item.value > 0) {
                            falseAnimation(1304);
                            falseAnimation(13041);
                            falseAnimation(13042);
                            falseAnimation(13043);
                            falseAnimation(13044);
                            falseAnimation(13045);
                            falseAnimation(13046);
                            falseAnimation(13047);
                            falseAnimation(13048);
                            falseAnimation(13049);
                            trueAnimation(130410);
                            trueAnimation(130411);
                            trueAnimation(2);
                        } else {
                            falseAnimation(1);
                            falseAnimation(2);
                            falseAnimation(1304);
                            falseAnimation(13041);
                            falseAnimation(13042);
                            falseAnimation(13043);
                            falseAnimation(13044);
                            falseAnimation(13045);
                            falseAnimation(13046);
                            falseAnimation(13047);
                            falseAnimation(13048);
                            falseAnimation(13049);
                            falseAnimation(130410);
                            falseAnimation(130411);
                        }
                    } else if(item.id === 1305) {
                        const value = document.getElementById("g1305");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 1306) {
                        const value = document.getElementById("k1304");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 1307) {
                        const value = document.getElementById("n1304");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 1308) {
                        const value = document.getElementById("w1304");
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