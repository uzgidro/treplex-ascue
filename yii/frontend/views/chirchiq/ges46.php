<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Камолот ГЭС (ГЭС-46)';
$energy = new Energy();
$id = 30;
$power = new Day();
$dashboard = new Dashboard();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);
$urlAggregate4 = $energy->getInformation($id, 4);

$urlTransformer1 = $energy->getTransformer($id, 82);
$urlTransformer2 = $energy->getTransformer($id, 83);
$urlTransformer3 = $energy->getTransformer($id, 84);
$urlTransformer4 = $energy->getTransformer($id, 85);

$urlSwitch1 = $energy->getSwitch($id, 179);
$urlSwitch2 = $energy->getSwitch($id, 180);
$urlSwitch3 = $energy->getSwitch($id, 181);
$urlSwitch4 = $energy->getSwitch($id, 182);
$urlSwitch5 = $energy->getSwitch($id, 183);
$urlSwitch6 = $energy->getSwitch($id, 184);
$urlSwitch7 = $energy->getSwitch($id, 185);
$urlSwitch8 = $energy->getSwitch($id, 186);
$urlSwitch9 = $energy->getSwitch($id, 187);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['chirchiq/index']) ?>">"Чирчиқ ГЭСлар каскади" Филиали</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= Html::encode($this->title) ?></li>
    </ol>
</nav>
<?= $dashboard->HeaderGes() ?>
<div class="card mb-3" style="backdrop-filter: blur(15px);">
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip9">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="0" y="0" width="85725" height="190500" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="0" width="85725" height="190500" />
                        </clipPath>
                        <clipPath id="clip13">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip14">
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img15"
                        ></image>
                        <clipPath id="clip16">
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
                            d="M562.072 446.392 562 382.502 565 382.498 565.072 446.389ZM559 382.505C558.997 380.02 561.01 378.003 563.495 378 565.98 377.997 567.997 380.01 568 382.495 568.003 384.98 565.99 386.997 563.505 387 561.02 387.003 559.003 384.99 559 382.505Z"
                            fill="#006600"
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
                            transform="translate(560.523 23)"
                        >
                            Камолот ГЭС(ГЭС-46)
                        </text>
                        <path
                            d="M0 0 459.105 0.000104987"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 582.605 382.5)"
                        />
                        <path
                            d="M0 0 440.18 0.0140682"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 563.681 203.5)"
                        />
                        <path
                            d="M1180.27 381.5 726.5 381.5"
                            stroke="#006600"
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
                            transform="translate(969.594 90)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(977.594 90)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(981.094 90)"
                        >
                            46
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(991.761 90)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(995.261 90)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1016.93 90)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1020.43 90)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(953.345 244)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(960.512 244)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(964.012 244)"
                        >
                            Т2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(976.512 244)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(980.012 244)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(123.302 215)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(127.469 215)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(130.969 215)"
                        >
                            СШ 35 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1117.63 217)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1125.97 217)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1129.47 217)"
                        >
                            СШ 35 кВ
                        </text>
                        <path
                            d="M239 450.878 239 380.5 242 380.5 242 450.878ZM236 380.5C236 378.015 238.015 376 240.5 376 242.985 376 245 378.015 245 380.5 245 382.985 242.985 385 240.5 385 238.015 385 236 382.985 236 380.5Z"
                            fill="#006600"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(255 419)"
                        >
                            В-Г1
                        </text>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(432 419)"
                        >
                            В-Г2
                        </text>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(900 419)"
                        >
                            В-Г3
                        </text>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(1075 419)"
                        >
                            В-Г4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(195.65 459)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(202.483 459)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(205.983 459)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(181.983 472)"
                        >
                            6,3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(197.983 472)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(167.65 485)"
                        >
                            2,04 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(156.65 498)"
                        >
                            GSV800S10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1122.57 393)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1130.9 393)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1134.4 393)"
                        >
                            СШ 6 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(135.076 395)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(139.243 395)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(142.743 395)"
                        >
                            СШ 6 кВ
                        </text>
                        <a href="<?= $urlSwitch6 ?>">
                            <rect
                                id="c201"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 231.5 423.5)"
                            />
                        </a>
                        <path
                            d="M998.04 203.403 997.06 104.515 1000.06 104.485 1001.04 203.373ZM1004.04 203.344C1004.06 205.829 1002.07 207.863 999.585 207.888 997.099 207.913 995.065 205.918 995.04 203.433 995.016 200.948 997.01 198.913 999.495 198.888 1001.98 198.864 1004.02 200.858 1004.04 203.344ZM998.56 104.5 994.089 107.544 998.5 98.5001 1003.09 107.455Z"
                            fill="#663300"
                        />
                        <a href="<?= $urlSwitch5 ?>">
                            <rect
                                id="c39"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#2E75B6"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 989.5 157.5)"
                            />
                        </a>
                        <path
                            d="M291 203.328 291 106.5 294 106.5 294 203.328ZM297 203.328C297 205.813 294.985 207.828 292.5 207.828 290.015 207.828 288 205.813 288 203.328 288 200.843 290.015 198.828 292.5 198.828 294.985 198.828 297 200.843 297 203.328ZM292.5 106.5 288 109.5 292.5 100.5 297 109.5Z"
                            fill="#663300"
                        />
                        <a href="<?= $urlSwitch1 ?>">
                            <rect
                                id="c12"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#2E75B6"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 283.5 155.5)"
                            />
                        </a>
                        <path
                            d="M361.086 382.24 361 356.505 364 356.495 364.086 382.23ZM367.086 382.22C367.094 384.705 365.086 386.726 362.601 386.735 360.116 386.743 358.094 384.735 358.086 382.25 358.078 379.764 360.086 377.743 362.571 377.735 365.056 377.726 367.078 379.734 367.086 382.22Z"
                            fill="#006600"
                        />
                        <path
                            d="M361.183 302.17 360 204.518 363 204.482 364.183 302.133ZM357 204.555C356.97 202.069 358.96 200.031 361.446 200 363.931 199.97 365.97 201.96 366 204.446 366.03 206.931 364.04 208.97 361.555 209 359.069 209.03 357.03 207.04 357 204.555Z"
                            fill="#663300"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(382.966 251)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(390.132 251)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(393.632 251)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(406.132 251)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(409.632 251)"
                        >
                            35
                        </text>
                        <a href="<?= $urlSwitch2 ?>">
                            <rect
                                id="c2"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#2E75B6"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 352.5 254.5)"
                            />
                        </a>
                        <path
                            d="M0 0 99.3086 0.404514"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 550.5 163.905)"
                        />
                        <path
                            d="M551 203.132 551 162.5 554 162.5 554 203.132ZM557 203.132C557 205.617 554.985 207.632 552.5 207.632 550.015 207.632 548 205.617 548 203.132 548 200.647 550.015 198.632 552.5 198.632 554.985 198.632 557 200.647 557 203.132Z"
                            fill="#663300"
                        />
                        <path
                            d="M668.5 163.5 759.752 163.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch3 ?>">
                            <rect
                                id="c1"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#2E75B6"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 650.5 173.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(632.325 151)"
                        >
                            М
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(642.325 151)"
                        >
                            СВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(657.158 151)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(660.658 151)"
                        >
                            35кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(310.752 149)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(317.918 149)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(321.418 149)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(329.418 149)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(332.918 149)"
                        >
                            46
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(343.585 149)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(347.085 149)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1012.71 150)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1019.88 150)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1023.38 150)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1031.38 150)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1034.88 150)"
                        >
                            46
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1045.55 150)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1049.05 150)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(324.264 313)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(331.431 313)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(334.931 313)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(297.264 326)"
                        >
                            6,3/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(326.931 326)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(297.597 339)"
                        >
                            6300
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(321.597 339)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(291.597 352)"
                        >
                            SC6,3/38,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(898.061 313)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(905.227 313)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(908.727 313)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(871.061 326)"
                        >
                            6,3/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(900.727 326)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(871.394 339)"
                        >
                            6300
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(895.394 339)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(865.394 352)"
                        >
                            SC6,3/38,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(374.327 460)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(381.161 460)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(384.661 460)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(360.661 473)"
                        >
                            6,3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(376.661 473)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(346.327 486)"
                        >
                            2,04 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(335.327 499)"
                        >
                            GSV800S10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1011.36 459)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1018.2 459)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1021.7 459)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(997.697 472)"
                        >
                            6,3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1013.7 472)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(983.364 485)"
                        >
                            2,04 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(972.364 498)"
                        >
                            GSV800S10
                        </text>
                        <path
                            d="M418 451.878 418 381.5 421 381.5 421 451.878ZM415 381.5C415 379.015 417.015 377 419.5 377 421.985 377 424 379.015 424 381.5 424 383.985 421.985 386 419.5 386 417.015 386 415 383.985 415 381.5Z"
                            fill="#006600"
                        />
                        <a href="<?= $urlSwitch7 ?>">
                            <rect
                                id="c174"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 409.5 424.5)"
                            />
                        </a>
                        <path
                            d="M192.889 506.678 285.997 506.678 285.997 519.478 192.889 519.478Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.889 519.478 285.997 519.478 285.997 532.278 192.889 532.278Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.889 532.278 285.997 532.278 285.997 545.078 192.889 545.078Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.889 545.078 285.997 545.078 285.997 557.878 192.889 557.878Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.889 557.878 285.997 557.878 285.997 570.678 192.889 570.678Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.889 570.678 285.997 570.678 285.997 583.478 192.889 583.478Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.222 519.478 286.664 519.478"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.222 532.278 286.664 532.278"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.222 545.078 286.664 545.078"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.222 557.878 286.664 557.878"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.222 570.678 286.664 570.678"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.889 506.011 192.889 584.144"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M285.997 506.011 285.997 584.144"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.222 506.678 286.664 506.678"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.222 583.478 286.664 583.478"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g201"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(196.668 517)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g202"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(196.668 529)"
                            >
                                Qвар
                        </text>
                        <g>
                            <text id="a201"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(196.668 542)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k201"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(196.668 555)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n201"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(196.668 568)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w201"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(196.668 581)"
                                fill="blue"
                            >
                                Qвода
                        </text>
                        <path
                            d="M371.961 505.922 465.07 505.922 465.07 518.722 371.961 518.722Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.961 518.722 465.07 518.722 465.07 531.522 371.961 531.522Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.961 531.522 465.07 531.522 465.07 544.322 371.961 544.322Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.961 544.322 465.07 544.322 465.07 557.122 371.961 557.122Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.961 557.122 465.07 557.122 465.07 569.922 371.961 569.922Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.961 569.922 465.07 569.922 465.07 582.722 371.961 582.722Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.295 518.722 465.736 518.722"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.295 531.522 465.736 531.522"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.295 544.322 465.736 544.322"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.295 557.122 465.736 557.122"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.295 569.922 465.736 569.922"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.961 505.255 371.961 583.388"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M465.07 505.255 465.07 583.388"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.295 505.922 465.736 505.922"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M371.295 582.722 465.736 582.722"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g174"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(375.741 516)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g175"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(375.741 529)"
                            >
                                Qвар
                        </text>
                        <g>
                            <text id="a174"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(375.741 542)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k174"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(375.741 554)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n174"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(375.741 567)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w174"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(375.741 580)"
                                fill="blue"
                            >
                                Qвода
                        </text>
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c4"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 347.5 356.5)"
                            />
                            <path id="c3"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 347.5 332.5)"
                            />
                        </a>
                        <path
                            d="M565 501.5 565 528.134 562 528.134 562 501.5ZM563.5 528.134 568 525.134 563.5 534.134 559 525.134Z"
                            fill="#7F7F7F"
                        />
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c1472"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 548.5 501.5)"
                            />
                            <path id="c1471"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 548.5 476.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(507.506 458)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(530.672 458)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(534.172 458)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(493.839 471)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(499.172 471)"
                        >
                            ,3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(507.172 471)"
                        >
                            /0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(526.172 471)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(502.172 484)"
                        >
                            250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(520.839 484)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(499.506 497)"
                        >
                            ТСЗ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(520.005 497)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(523.505 497)"
                        >
                            250
                        </text>
                        <path
                            d="M747.072 446.392 747 382.502 750 382.498 750.072 446.389ZM744 382.505C743.997 380.02 746.01 378.003 748.495 378 750.98 377.997 752.997 380.01 753 382.495 753.003 384.98 750.99 386.997 748.505 387 746.02 387.003 744.003 384.99 744 382.505Z"
                            fill="#006600"
                        />
                        <path
                            d="M750 501.5 750 528.134 747 528.134 747 501.5ZM748.5 528.134 753 525.134 748.5 534.134 744 525.134Z"
                            fill="#7F7F7F"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c1202"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 733.5 501.5)"
                            />
                            <path id="c1201"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 733.5 476.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(692.367 457)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(715.533 457)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(719.033 457)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(678.7 470)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(684.033 470)"
                        >
                            ,3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(692.033 470)"
                        >
                            /0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(711.033 470)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(687.033 483)"
                        >
                            250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(705.7 483)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(684.367 496)"
                        >
                            ТСЗ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(704.867 496)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(708.367 496)"
                        >
                            250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(839.973 462)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(846.806 462)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(850.306 462)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(826.306 475)"
                        >
                            6,3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(842.306 475)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(811.973 488)"
                        >
                            2,04 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(800.973 501)"
                        >
                            GSV800S10
                        </text>
                        <path
                            d="M884 452.878 884 382.5 887 382.5 887 452.878ZM881 382.5C881 380.015 883.015 378 885.5 378 887.985 378 890 380.015 890 382.5 890 384.985 887.985 387 885.5 387 883.015 387 881 384.985 881 382.5Z"
                            fill="#006600"
                        />
                        <a href="<?= $urlSwitch8 ?>">
                            <rect
                                id="c93"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 875.5 425.5)"
                            />
                        </a>
                        <path
                            d="M838.507 506.662 931.615 506.662 931.615 519.462 838.507 519.462Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M838.507 519.462 931.615 519.462 931.615 532.262 838.507 532.262Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M838.507 532.262 931.615 532.262 931.615 545.062 838.507 545.062Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M838.507 545.062 931.615 545.062 931.615 557.862 838.507 557.862Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M838.507 557.862 931.615 557.862 931.615 570.662 838.507 570.662Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M838.507 570.662 931.615 570.662 931.615 583.462 838.507 583.462Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M837.84 519.462 932.281 519.462"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M837.84 532.262 932.281 532.262"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M837.84 545.062 932.281 545.062"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M837.84 557.862 932.281 557.862"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M837.84 570.662 932.281 570.662"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M838.507 505.996 838.507 584.129"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M931.615 505.996 931.615 584.129"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M837.84 506.662 932.281 506.662"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M837.84 583.462 932.281 583.462"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g93"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(842.286 517)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g94"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(842.286 529)"
                            >
                                Qвар
                        </text>
                        <g>
                            <text id="a93"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(842.286 542)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k93"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(842.286 555)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n93"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(842.286 568)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w93"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(842.286 581)"
                                fill="blue"
                            >
                                Qвода
                        </text>
                        <path
                            d="M1058 453.878 1058 383.5 1061 383.5 1061 453.878ZM1055 383.5C1055 381.015 1057.01 379 1059.5 379 1061.99 379 1064 381.015 1064 383.5 1064 385.985 1061.99 388 1059.5 388 1057.01 388 1055 385.985 1055 383.5Z"
                            fill="#006600"
                        />
                        <a href="<?= $urlSwitch9 ?>">
                            <rect
                                id="c66"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1049.5 426.5)"
                            />
                        </a>
                        <path
                            d="M1011.51 505.843 1104.62 505.843 1104.62 518.643 1011.51 518.643Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1011.51 518.643 1104.62 518.643 1104.62 531.443 1011.51 531.443Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1011.51 531.443 1104.62 531.443 1104.62 544.243 1011.51 544.243Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1011.51 544.243 1104.62 544.243 1104.62 557.043 1011.51 557.043Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1011.51 557.043 1104.62 557.043 1104.62 569.843 1011.51 569.843Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1011.51 569.843 1104.62 569.843 1104.62 582.643 1011.51 582.643Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1010.84 518.643 1105.29 518.643"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1010.84 531.443 1105.29 531.443"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1010.84 544.243 1105.29 544.243"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1010.84 557.043 1105.29 557.043"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1010.84 569.843 1105.29 569.843"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1011.51 505.176 1011.51 583.31"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1104.62 505.176 1104.62 583.31"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1010.84 505.843 1105.29 505.843"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1010.84 582.643 1105.29 582.643"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g66"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1015.29 516)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g67"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1015.29 529)"
                            >
                                Qвар
                        </text>
                        <g>
                            <text id="a66"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1015.29 541)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k66"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1015.29 554)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n66"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1015.29 567)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w66"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1015.29 580)"
                                fill="blue"
                            >
                                Qвода
                        </text>
                        <path
                            d="M758 203.132 758 162.5 761 162.5 761 203.132ZM764 203.132C764 205.617 761.985 207.632 759.5 207.632 757.015 207.632 755 205.617 755 203.132 755 200.647 757.015 198.632 759.5 198.632 761.985 198.632 764 200.647 764 203.132Z"
                            fill="#663300"
                        />
                        <path
                            d="M936.086 381.24 936 355.505 939 355.495 939.086 381.23ZM942.086 381.22C942.094 383.705 940.086 385.726 937.601 385.735 935.116 385.743 933.094 383.735 933.086 381.25 933.078 378.764 935.086 376.743 937.571 376.735 940.056 376.726 942.078 378.734 942.086 381.22Z"
                            fill="#006600"
                        />
                        <path
                            d="M936.183 301.17 935 203.518 938 203.482 939.183 301.133ZM932 203.555C931.97 201.069 933.96 199.031 936.446 199 938.931 198.97 940.97 200.96 941 203.446 941.03 205.931 939.04 207.97 936.555 208 934.069 208.03 932.031 206.04 932 203.555Z"
                            fill="#663300"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect
                                id="c5"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#2E75B6"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 927.5 253.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c7"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 922.5 355.5)"
                            />
                            <path id="c6"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 922.5 330.5)"
                            />
                        </a>
                        <path
                            d="M1180.58 203.913 743.5 202.5"
                            stroke="#663300"
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
                            transform="translate(264.267 92)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(272.267 92)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(275.767 92)"
                        >
                            46
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(286.434 92)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(289.934 92)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(311.601 92)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(315.101 92)"
                        >
                            1
                        </text>
                        <path
                            d="M260.488 48.0461 344.088 48.0461 344.088 61.6373 260.488 61.6373Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M260.488 61.6373 344.088 61.6373 344.088 75.2285 260.488 75.2285Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M259.822 61.6373 344.754 61.6373"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M260.488 47.3794 260.488 75.8951"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M344.088 47.3794 344.088 75.8951"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M259.822 48.0461 344.754 48.0461"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M259.822 75.2285 344.754 75.2285"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g39Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(264.268 58)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g39Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(264.268 72)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 336 49)"
                        >
                            <g clip-path="url(#clip2)" transform="matrix(1 0 0 1.02857 -0.25 0)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 336 62)"
                        >
                            <g clip-path="url(#clip5)" transform="matrix(1 0 0 1.02857 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M956.918 48.7277 1040.52 48.7277 1040.52 62.3188 956.918 62.3188Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M956.918 62.3188 1040.52 62.3188 1040.52 75.91 956.918 75.91Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M956.251 62.3188 1041.18 62.3188"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M956.918 48.061 956.918 76.5767"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1040.52 48.061 1040.52 76.5767"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M956.251 48.7277 1041.18 48.7277"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M956.251 75.91 1041.18 75.91"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g12Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(960.697 59)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g12Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(960.697 72)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip6)"
                            transform="matrix(0.000104987 0 0 0.000104987 1032 49)"
                        >
                            <g clip-path="url(#clip7)" transform="scale(1 1.02857)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 1033 63)"
                        >
                            <g clip-path="url(#clip9)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M121.852 185.563 211.084 185.563 211.084 198.363 121.852 198.363Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M121.852 184.896 121.852 199.03"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.084 184.896 211.084 199.03"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M121.185 185.563 211.751 185.563"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M121.185 198.363 211.751 198.363"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g15"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(125.631 196)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M1094.42 185.811 1183.65 185.811 1183.65 198.611 1094.42 198.611Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1094.42 185.145 1094.42 199.278"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1183.65 185.145 1183.65 199.278"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1093.75 185.811 1184.32 185.811"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1093.75 198.611 1184.32 198.611"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g42"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1098.2 196)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M1094.07 362.99 1183.31 362.99 1183.31 375.79 1094.07 375.79Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1094.07 362.324 1094.07 376.457"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1183.31 362.324 1183.31 376.457"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1093.41 362.99 1183.97 362.99"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1093.41 375.79 1183.97 375.79"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g69"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1097.85 373)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M121.852 362.93 211.084 362.93 211.084 375.73 121.852 375.73Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M121.852 362.263 121.852 376.397"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.084 362.263 211.084 376.397"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M121.185 362.93 211.75 362.93"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M121.185 375.73 211.75 375.73"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g177"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(125.631 373)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M705.927 542.722 779.573 542.722 779.573 556.455 705.927 556.455Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.927 542.055 705.927 557.122"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M779.573 542.055 779.573 557.122"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.26 542.722 780.24 542.722"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.26 556.455 780.24 556.455"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g120"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(709.706 553)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M525.628 542.246 599.275 542.246 599.275 555.979 525.628 555.979Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M525.628 541.58 525.628 556.646"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M599.275 541.58 599.275 556.646"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M524.961 542.246 599.942 542.246"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M524.961 555.979 599.942 555.979"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g147"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(529.408 552)"
                            >
                                Р
                            </text>
                        </g>
                        <path id="c2011"
                            d="M216.5 475C216.5 461.469 227.469 450.5 241 450.5 254.531 450.5 265.5 461.469 265.5 475 265.5 488.531 254.531 499.5 241 499.5 227.469 499.5 216.5 488.531 216.5 475Z"
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
                                        d="M239.689 468.933 240.622 468.933 241.944 469.167 243.033 469.633 243.889 470.178 244.9 471.189 245.522 472.122 245.989 473.367 246.144 474.067 246.144 475.933 245.833 477.1 245.211 478.344 244.589 479.122 244.044 479.667 242.956 480.367 241.711 480.833 240.933 480.989 239.378 480.989 238.133 480.678 237.278 480.289 236.422 479.744 235.567 478.967 235.022 478.189 234.478 477.1 234.167 475.856 234.089 474.922 234.244 473.678 234.556 472.667 235.178 471.5 236.033 470.567 236.656 470.022 237.978 469.322 239.144 469.011Z"
                                    />
                                    <path
                                        d="M240.156 455.089 241.011 455.089 242.489 455.322 243.967 455.789 245.211 456.411 246.144 457.033 246.922 457.733 247.856 458.667 248.711 459.911 249.333 461.156 249.8 462.556 250.033 463.722 250.111 464.344 250.111 465.822 249.878 467.3 249.489 468.622 248.867 469.944 248.089 471.033 247.933 471.033 247.311 469.944 246.378 468.856 245.522 468.078 244.433 467.378 243.267 466.833 241.944 466.444 240.156 466.211Z"
                                    />
                                    <path
                                        d="M227.4 470.878 227.789 470.956 229.967 472.2 231.522 473.133 231.6 473.289 231.444 474.922 231.6 476.556 231.989 478.033 232.533 479.2 232.533 479.433 230.356 480.678 228.489 481.767 224.444 484.1 223.122 484.878 222.889 484.878 222.189 483.4 221.8 482.078 221.644 481.144 221.567 479.822 221.722 478.344 221.956 477.256 222.5 475.778 223.044 474.767 223.744 473.756 224.678 472.744 225.533 471.967 226.933 471.111Z"
                                    />
                                    <path
                                        d="M247.7 479.433 248.089 479.511 249.956 480.6 256.022 484.1 257.344 484.878 257.189 485.267 256.644 486.044 255.944 486.9 255.4 487.444 254.233 488.3 252.989 489 251.511 489.544 250.344 489.778 249.878 489.856 247.544 489.856 246.378 489.622 245.133 489.233 243.811 488.611 242.878 487.989 242.878 483.322 243.578 483.011 244.9 482.311 245.833 481.611 246.922 480.522Z"
                                    />
                                    <path
                                        d="M230.667 460.067 232.378 460.067 233.856 460.3 235.489 460.844 236.811 461.544 237.433 461.933 237.433 466.678 236.033 467.3 234.944 468 234.089 468.7 233.544 469.244 232.611 470.567 232.144 470.411 230.822 469.633 224.756 466.133 223.044 465.122 222.967 464.967 223.511 464.111 224.367 463.1 224.989 462.478 226.156 461.622 227.244 461 228.722 460.456 229.578 460.222Z"
                                    />
                                    <path
                                        d="M234.167 481.533 234.478 481.611 235.644 482.467 236.967 483.089 238.211 483.478 239.144 483.633 240.078 483.711 240.156 483.789 240.156 494.833 238.989 494.833 237.433 494.522 236.111 494.056 234.711 493.278 233.7 492.5 232.922 491.8 232.144 490.867 231.367 489.622 230.744 488.222 230.356 486.744 230.2 485.344 230.2 484.489 230.278 483.789 232.222 482.7 233.544 481.922Z"
                                    />
                                    <path
                                        d="M257.267 465.044 257.422 465.044 257.967 466.133 258.433 467.533 258.667 468.778 258.744 470.333 258.589 471.733 258.278 473.056 257.656 474.533 257.111 475.467 256.489 476.322 255.633 477.256 254.467 478.189 253.456 478.811 252.756 479.122 250.811 478.033 248.944 476.944 248.711 476.789 248.867 475.389 248.867 474.222 249.567 473.522 250.578 472.2 251.278 471.033 251.978 469.556 252.522 467.844 253.222 467.378 255.167 466.289 257.033 465.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c1741"
                            d="M396.5 476C396.5 462.469 407.469 451.5 421 451.5 434.531 451.5 445.5 462.469 445.5 476 445.5 489.531 434.531 500.5 421 500.5 407.469 500.5 396.5 489.531 396.5 476Z"
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
                                        d="M419.689 469.933 420.622 469.933 421.944 470.167 423.033 470.633 423.889 471.178 424.9 472.189 425.522 473.122 425.989 474.367 426.144 475.067 426.144 476.933 425.833 478.1 425.211 479.344 424.589 480.122 424.044 480.667 422.956 481.367 421.711 481.833 420.933 481.989 419.378 481.989 418.133 481.678 417.278 481.289 416.422 480.744 415.567 479.967 415.022 479.189 414.478 478.1 414.167 476.856 414.089 475.922 414.244 474.678 414.556 473.667 415.178 472.5 416.033 471.567 416.656 471.022 417.978 470.322 419.144 470.011Z"
                                    />
                                    <path
                                        d="M420.156 456.089 421.011 456.089 422.489 456.322 423.967 456.789 425.211 457.411 426.144 458.033 426.922 458.733 427.856 459.667 428.711 460.911 429.333 462.156 429.8 463.556 430.033 464.722 430.111 465.344 430.111 466.822 429.878 468.3 429.489 469.622 428.867 470.944 428.089 472.033 427.933 472.033 427.311 470.944 426.378 469.856 425.522 469.078 424.433 468.378 423.267 467.833 421.944 467.444 420.156 467.211Z"
                                    />
                                    <path
                                        d="M407.4 471.878 407.789 471.956 409.967 473.2 411.522 474.133 411.6 474.289 411.444 475.922 411.6 477.556 411.989 479.033 412.533 480.2 412.533 480.433 410.356 481.678 408.489 482.767 404.444 485.1 403.122 485.878 402.889 485.878 402.189 484.4 401.8 483.078 401.644 482.144 401.567 480.822 401.722 479.344 401.956 478.256 402.5 476.778 403.044 475.767 403.744 474.756 404.678 473.744 405.533 472.967 406.933 472.111Z"
                                    />
                                    <path
                                        d="M427.7 480.433 428.089 480.511 429.956 481.6 436.022 485.1 437.344 485.878 437.189 486.267 436.644 487.044 435.944 487.9 435.4 488.444 434.233 489.3 432.989 490 431.511 490.544 430.344 490.778 429.878 490.856 427.544 490.856 426.378 490.622 425.133 490.233 423.811 489.611 422.878 488.989 422.878 484.322 423.578 484.011 424.9 483.311 425.833 482.611 426.922 481.522Z"
                                    />
                                    <path
                                        d="M410.667 461.067 412.378 461.067 413.856 461.3 415.489 461.844 416.811 462.544 417.433 462.933 417.433 467.678 416.033 468.3 414.944 469 414.089 469.7 413.544 470.244 412.611 471.567 412.144 471.411 410.822 470.633 404.756 467.133 403.044 466.122 402.967 465.967 403.511 465.111 404.367 464.1 404.989 463.478 406.156 462.622 407.244 462 408.722 461.456 409.578 461.222Z"
                                    />
                                    <path
                                        d="M414.167 482.533 414.478 482.611 415.644 483.467 416.967 484.089 418.211 484.478 419.144 484.633 420.078 484.711 420.156 484.789 420.156 495.833 418.989 495.833 417.433 495.522 416.111 495.056 414.711 494.278 413.7 493.5 412.922 492.8 412.144 491.867 411.367 490.622 410.744 489.222 410.356 487.744 410.2 486.344 410.2 485.489 410.278 484.789 412.222 483.7 413.544 482.922Z"
                                    />
                                    <path
                                        d="M437.267 466.044 437.422 466.044 437.967 467.133 438.433 468.533 438.667 469.778 438.744 471.333 438.589 472.733 438.278 474.056 437.656 475.533 437.111 476.467 436.489 477.322 435.633 478.256 434.467 479.189 433.456 479.811 432.756 480.122 430.811 479.033 428.944 477.944 428.711 477.789 428.867 476.389 428.867 475.222 429.567 474.522 430.578 473.2 431.278 472.033 431.978 470.556 432.522 468.844 433.222 468.378 435.167 467.289 437.033 466.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c9301"
                            d="M861.5 475C861.5 461.469 872.469 450.5 886 450.5 899.531 450.5 910.5 461.469 910.5 475 910.5 488.531 899.531 499.5 886 499.5 872.469 499.5 861.5 488.531 861.5 475Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate3 ?>">
                            <g>
                            <g>
                                <g>
                                    <path
                                        d="M884.689 468.933 885.622 468.933 886.944 469.167 888.033 469.633 888.889 470.178 889.9 471.189 890.522 472.122 890.989 473.367 891.144 474.067 891.144 475.933 890.833 477.1 890.211 478.344 889.589 479.122 889.044 479.667 887.956 480.367 886.711 480.833 885.933 480.989 884.378 480.989 883.133 480.678 882.278 480.289 881.422 479.744 880.567 478.967 880.022 478.189 879.478 477.1 879.167 475.856 879.089 474.922 879.244 473.678 879.556 472.667 880.178 471.5 881.033 470.567 881.656 470.022 882.978 469.322 884.144 469.011Z"
                                    />
                                    <path
                                        d="M885.156 455.089 886.011 455.089 887.489 455.322 888.967 455.789 890.211 456.411 891.144 457.033 891.922 457.733 892.856 458.667 893.711 459.911 894.333 461.156 894.8 462.556 895.033 463.722 895.111 464.344 895.111 465.822 894.878 467.3 894.489 468.622 893.867 469.944 893.089 471.033 892.933 471.033 892.311 469.944 891.378 468.856 890.522 468.078 889.433 467.378 888.267 466.833 886.944 466.444 885.156 466.211Z"
                                    />
                                    <path
                                        d="M872.4 470.878 872.789 470.956 874.967 472.2 876.522 473.133 876.6 473.289 876.444 474.922 876.6 476.556 876.989 478.033 877.533 479.2 877.533 479.433 875.356 480.678 873.489 481.767 869.444 484.1 868.122 484.878 867.889 484.878 867.189 483.4 866.8 482.078 866.644 481.144 866.567 479.822 866.722 478.344 866.956 477.256 867.5 475.778 868.044 474.767 868.744 473.756 869.678 472.744 870.533 471.967 871.933 471.111Z"
                                    />
                                    <path
                                        d="M892.7 479.433 893.089 479.511 894.956 480.6 901.022 484.1 902.344 484.878 902.189 485.267 901.644 486.044 900.944 486.9 900.4 487.444 899.233 488.3 897.989 489 896.511 489.544 895.344 489.778 894.878 489.856 892.544 489.856 891.378 489.622 890.133 489.233 888.811 488.611 887.878 487.989 887.878 483.322 888.578 483.011 889.9 482.311 890.833 481.611 891.922 480.522Z"
                                    />
                                    <path
                                        d="M875.667 460.067 877.378 460.067 878.856 460.3 880.489 460.844 881.811 461.544 882.433 461.933 882.433 466.678 881.033 467.3 879.944 468 879.089 468.7 878.544 469.244 877.611 470.567 877.144 470.411 875.822 469.633 869.756 466.133 868.044 465.122 867.967 464.967 868.511 464.111 869.367 463.1 869.989 462.478 871.156 461.622 872.244 461 873.722 460.456 874.578 460.222Z"
                                    />
                                    <path
                                        d="M879.167 481.533 879.478 481.611 880.644 482.467 881.967 483.089 883.211 483.478 884.144 483.633 885.078 483.711 885.156 483.789 885.156 494.833 883.989 494.833 882.433 494.522 881.111 494.056 879.711 493.278 878.7 492.5 877.922 491.8 877.144 490.867 876.367 489.622 875.744 488.222 875.356 486.744 875.2 485.344 875.2 484.489 875.278 483.789 877.222 482.7 878.544 481.922Z"
                                    />
                                    <path
                                        d="M902.267 465.044 902.422 465.044 902.967 466.133 903.433 467.533 903.667 468.778 903.744 470.333 903.589 471.733 903.278 473.056 902.656 474.533 902.111 475.467 901.489 476.322 900.633 477.256 899.467 478.189 898.456 478.811 897.756 479.122 895.811 478.033 893.944 476.944 893.711 476.789 893.867 475.389 893.867 474.222 894.567 473.522 895.578 472.2 896.278 471.033 896.978 469.556 897.522 467.844 898.222 467.378 900.167 466.289 902.033 465.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c6601"
                            d="M1034.5 476C1034.5 462.469 1045.47 451.5 1059 451.5 1072.53 451.5 1083.5 462.469 1083.5 476 1083.5 489.531 1072.53 500.5 1059 500.5 1045.47 500.5 1034.5 489.531 1034.5 476Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate4 ?>">
                            <g>
                            <g>
                                <g>
                                    <path
                                        d="M1057.69 469.933 1058.62 469.933 1059.94 470.167 1061.03 470.633 1061.89 471.178 1062.9 472.189 1063.52 473.122 1063.99 474.367 1064.14 475.067 1064.14 476.933 1063.83 478.1 1063.21 479.344 1062.59 480.122 1062.04 480.667 1060.96 481.367 1059.71 481.833 1058.93 481.989 1057.38 481.989 1056.13 481.678 1055.28 481.289 1054.42 480.744 1053.57 479.967 1053.02 479.189 1052.48 478.1 1052.17 476.856 1052.09 475.922 1052.24 474.678 1052.56 473.667 1053.18 472.5 1054.03 471.567 1054.66 471.022 1055.98 470.322 1057.14 470.011Z"
                                    />
                                    <path
                                        d="M1058.16 456.089 1059.01 456.089 1060.49 456.322 1061.97 456.789 1063.21 457.411 1064.14 458.033 1064.92 458.733 1065.86 459.667 1066.71 460.911 1067.33 462.156 1067.8 463.556 1068.03 464.722 1068.11 465.344 1068.11 466.822 1067.88 468.3 1067.49 469.622 1066.87 470.944 1066.09 472.033 1065.93 472.033 1065.31 470.944 1064.38 469.856 1063.52 469.078 1062.43 468.378 1061.27 467.833 1059.94 467.444 1058.16 467.211Z"
                                    />
                                    <path
                                        d="M1045.4 471.878 1045.79 471.956 1047.97 473.2 1049.52 474.133 1049.6 474.289 1049.44 475.922 1049.6 477.556 1049.99 479.033 1050.53 480.2 1050.53 480.433 1048.36 481.678 1046.49 482.767 1042.44 485.1 1041.12 485.878 1040.89 485.878 1040.19 484.4 1039.8 483.078 1039.64 482.144 1039.57 480.822 1039.72 479.344 1039.96 478.256 1040.5 476.778 1041.04 475.767 1041.74 474.756 1042.68 473.744 1043.53 472.967 1044.93 472.111Z"
                                    />
                                    <path
                                        d="M1065.7 480.433 1066.09 480.511 1067.96 481.6 1074.02 485.1 1075.34 485.878 1075.19 486.267 1074.64 487.044 1073.94 487.9 1073.4 488.444 1072.23 489.3 1070.99 490 1069.51 490.544 1068.34 490.778 1067.88 490.856 1065.54 490.856 1064.38 490.622 1063.13 490.233 1061.81 489.611 1060.88 488.989 1060.88 484.322 1061.58 484.011 1062.9 483.311 1063.83 482.611 1064.92 481.522Z"
                                    />
                                    <path
                                        d="M1048.67 461.067 1050.38 461.067 1051.86 461.3 1053.49 461.844 1054.81 462.544 1055.43 462.933 1055.43 467.678 1054.03 468.3 1052.94 469 1052.09 469.7 1051.54 470.244 1050.61 471.567 1050.14 471.411 1048.82 470.633 1042.76 467.133 1041.04 466.122 1040.97 465.967 1041.51 465.111 1042.37 464.1 1042.99 463.478 1044.16 462.622 1045.24 462 1046.72 461.456 1047.58 461.222Z"
                                    />
                                    <path
                                        d="M1052.17 482.533 1052.48 482.611 1053.64 483.467 1054.97 484.089 1056.21 484.478 1057.14 484.633 1058.08 484.711 1058.16 484.789 1058.16 495.833 1056.99 495.833 1055.43 495.522 1054.11 495.056 1052.71 494.278 1051.7 493.5 1050.92 492.8 1050.14 491.867 1049.37 490.622 1048.74 489.222 1048.36 487.744 1048.2 486.344 1048.2 485.489 1048.28 484.789 1050.22 483.7 1051.54 482.922Z"
                                    />
                                    <path
                                        d="M1075.27 466.044 1075.42 466.044 1075.97 467.133 1076.43 468.533 1076.67 469.778 1076.74 471.333 1076.59 472.733 1076.28 474.056 1075.66 475.533 1075.11 476.467 1074.49 477.322 1073.63 478.256 1072.47 479.189 1071.46 479.811 1070.76 480.122 1068.81 479.033 1066.94 477.944 1066.71 477.789 1066.87 476.389 1066.87 475.222 1067.57 474.522 1068.58 473.2 1069.28 472.033 1069.98 470.556 1070.52 468.844 1071.22 468.378 1073.17 467.289 1075.03 466.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M8.50005 551C8.50005 545.753 12.7533 541.5 18.0001 541.5 23.2468 541.5 27.5001 545.753 27.5001 551 27.5001 556.247 23.2468 560.5 18.0001 560.5 12.7533 560.5 8.50005 556.247 8.50005 551Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M8.50005 572.5C8.50005 567.529 12.7533 563.5 18.0001 563.5 23.2468 563.5 27.5001 567.529 27.5001 572.5 27.5001 577.471 23.2468 581.5 18.0001 581.5 12.7533 581.5 8.50005 577.471 8.50005 572.5Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#92D050"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.2016 553)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.1188 575)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M8 528.5C8 523.253 12.2533 519 17.5 519 22.7467 519 27 523.253 27 528.5 27 533.747 22.7467 538 17.5 538 12.2533 538 8 533.747 8 528.5Z"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-miterlimit="8"
                            fill="#FFFF00"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.1188 531)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.3837 508)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.1189 484)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 13 473)"
                        >
                            <g clip-path="url(#clip11)" transform="matrix(1.05 0 0 1 -0.0078125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip12)"
                            transform="matrix(0.000104987 0 0 0.000104987 13 495)"
                        >
                            <g
                                clip-path="url(#clip13)"
                                transform="matrix(1.05 0 0 1 -0.0078125 -0.5)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip14)"
                            transform="matrix(0.000104987 0 0 0.000104987 1063 79)"
                        >
                            <g clip-path="url(#clip16)" transform="scale(1.01496 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img15"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1085.17 75.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1183.5 129.171)"
                        />
                        <path
                            d="M1181.55 141.031 1173.86 132.654 1174.35 132.203 1182.04 140.58ZM1174.11 132.429 1173.95 136.197 1170.5 128.5 1177.87 132.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1190.95 140.889 1181.5 140.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1088.66 61.0689 1183.03 61.0689 1183.03 73.8689 1088.66 73.8689Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1088.66 60.4022 1088.66 74.5355"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1183.03 60.4022 1183.03 74.5355"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1087.99 61.0689 1183.69 61.0689"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1087.99 73.8689 1183.69 73.8689"
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
                                transform="translate(1092.44 71)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1102.94 71)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1084.5 75.5001 1103.69 75.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1191.15 128.153 1278.81 128.153 1278.81 140.953 1191.15 140.953Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1191.15 127.486 1191.15 141.619"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1278.81 127.486 1278.81 141.619"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1190.48 128.153 1279.47 128.153"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1190.48 140.953 1279.47 140.953"
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
                                transform="translate(1194.93 138)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1205.43 138)"
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
                            transform="matrix(1 0 0 -1 1081.5 82.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1190.99 100.5)"
                        />
                        <path
                            d="M1191.5 101.5 1210.69 101.647"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1195.35 87.969 1268.54 87.969 1268.54 100.769 1195.35 100.769Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1195.35 87.3024 1195.35 101.436"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1268.54 87.3024 1268.54 101.436"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1194.68 87.969 1269.21 87.969"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1194.68 100.769 1269.21 100.769"
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
                                transform="translate(1199.13 98)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1166.5 129.5 1189.21 129.5"
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

<div class="card mt-2" style="backdrop-filter: blur(5px);">
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

        // Add a thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        fetch('/chirchiq/server46', { signal: controller.signal })
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
                let c2 = 0; let c3 = 0;let c4 = 0;
                let c5 = 0; let c6 = 0;let c7 = 0;
                data.forEach(item => {
                    if (item.id === 12) {
                        const plus = document.getElementById("g12Plus");
                        const minus = document.getElementById("g12Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(12);
                        } else {
                            falseAnimation(12);
                        }
                    } else if (item.id === 39) {
                        const plus = document.getElementById("g39Plus");
                        const minus = document.getElementById("g39Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(39);
                        } else {
                            falseAnimation(39);
                        }
                    }
                    else if(item.id === 147) {
                        const value = document.getElementById("g147");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1471);
                            trueAnimation(1472);
                            c4 = 1;
                        } else {
                            falseAnimation(1471);
                            falseAnimation(1472);
                            c4 = 0;
                        }
                    } else if(item.id === 120) {
                        const value = document.getElementById("g120");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1201);
                            trueAnimation(1202);
                            c5 = 1;
                        } else {
                            falseAnimation(1201);
                            falseAnimation(1202);
                            c5 = 0;
                        }
                    } else if(item.id === 15) {
                        const value = document.getElementById("g15");
                        value.textContent = "U=" + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }
                    // else if(item.id === 20) {
                    //     const value = document.getElementById("g2");
                    //     value.textContent = "Гц=" + formatNumber(item.value, 2, ',', ' ') + " Гц";
                    // }
                    else if(item.id === 177) {
                        const value = document.getElementById("g177");
                        value.textContent = "U=" + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }
                    // else if(item.id === 137) {
                    //     const value = document.getElementById("g137");
                    //     value.textContent = "Гц=" + formatNumber(item.value, 2, ',', ' ') + " Гц";
                    // }
                    else if(item.id === 42) {
                        const value = document.getElementById("g42");
                        value.textContent = "U=" + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }
                    // else if(item.id === 29) {
                    //     const value = document.getElementById("g29");
                    //     value.textContent = "Гц=" + formatNumber(item.value, 2, ',', ' ') + " Гц";
                    // }
                    else if(item.id === 69) {
                        const value = document.getElementById("g69");
                        value.textContent = "U=" + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }
                    // else if(item.id === 110) {
                    //     const value = document.getElementById("g110");
                    //     value.textContent = "Гц=" + formatNumber(item.value, 2, ',', ' ') + " Гц";
                    // }
                    //Aggregate-1
                    else if(item.id === 201) {
                        const value = document.getElementById("g201");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a201");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.4 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(201);
                            trueAnimation(2011);
                            c2 = 1;
                        } else {
                            falseAnimation(201);
                            falseAnimation(2011);
                            c2 = 0;
                        }
                    } else if(item.id === 202) {
                        const value = document.getElementById("g202");
                        value.textContent = "Qвар= " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 203) {
                        const value = document.getElementById("k201");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 204) {
                        const value = document.getElementById("n201");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 205) {
                        const value = document.getElementById("w201");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 174) {
                        const value = document.getElementById("g174");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a174");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.4 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(174);
                            trueAnimation(1741);
                            c3 = 1;
                        } else {
                            falseAnimation(174);
                            falseAnimation(1741);
                            c3 = 0;
                        }
                    } else if(item.id === 175) {
                        const value = document.getElementById("g175");
                        value.textContent = "Qвар= " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 176) {
                        const value = document.getElementById("k174");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 179) {
                        const value = document.getElementById("n174");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 178) {
                        const value = document.getElementById("w174");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 93) {
                        const value = document.getElementById("g93");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a93");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.4 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(93);
                            trueAnimation(9301);
                            c6 = 1;
                        } else {
                            falseAnimation(93);
                            falseAnimation(9301);
                            c6 = 0;
                        }
                    } else if(item.id === 94) {
                        const value = document.getElementById("g94");
                        value.textContent = "Qвар= " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 95) {
                        const value = document.getElementById("k93");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 96) {
                        const value = document.getElementById("n93");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 97) {
                        const value = document.getElementById("w93");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-4
                    else if(item.id === 66) {
                        const value = document.getElementById("g66");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a66");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.4 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(66);
                            trueAnimation(6601);
                            c7 = 1;
                        } else {
                            falseAnimation(66);
                            falseAnimation(6601);
                            c7 = 0;
                        }
                    } else if(item.id === 67) {
                        const value = document.getElementById("g67");
                        value.textContent = "Qвар= " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 68) {
                        const value = document.getElementById("k66");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 71) {
                        const value = document.getElementById("n66");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 70) {
                        const value = document.getElementById("w66");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    else if(item.id === 1) {
                        const value = document.getElementById("active");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 2) {
                        const value = document.getElementById("reactive");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВАр";
                    } else if(item.id === 3) {
                        const value = document.getElementById("activeOut");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 4) {
                        const value = document.getElementById("activeIn");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 5) {
                        const value = document.getElementById("ownNeeds");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " KВт";
                    } else if(item.id === 6) {
                        const value = document.getElementById("water");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " м3/с";
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
                falseAnimation(1);
                if (c2 > 0 || c3 > 0 || c4 > 0) {
                    trueAnimation(2);
                    trueAnimation(3);
                    trueAnimation(4);
                } else {
                    falseAnimation(2);
                    falseAnimation(3);
                    falseAnimation(4);
                }

                if (c5 > 0 || c6 > 0 || c7 > 0) {
                    trueAnimation(5);
                    trueAnimation(6);
                    trueAnimation(7);
                } else {
                    falseAnimation(5);
                    falseAnimation(6);
                    falseAnimation(7);
                }
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