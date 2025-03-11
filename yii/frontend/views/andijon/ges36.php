<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Андижон ГЭС (ГЭС-36)';
$energy = new Energy();
$id = 59;
$energy = new Energy();
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
        <li class="breadcrumb-item"><a href="<?= Url::to(['andijon/index']) ?>">"Андижон ГЭС" Филиали</a></li>
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
                    viewBox="0 0 1300 480"
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
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img7"
                        ></image>
                        <clipPath id="clip8">
                            <rect x="0" y="0" width="1173079" height="571500" />
                        </clipPath>
                        <clipPath id="clip9">
                            <rect x="0" y="0" width="76200" height="190500" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="76200" height="177800" />
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
                            d="M1.5-2.01395e-06 1.5001 78.1946-1.49989 78.1946-1.5 2.01395e-06ZM-4.5 6.04186e-06C-4.5-2.48528-2.48529-4.5-6.04186e-06-4.5 2.48528-4.5 4.5-2.48529 4.5-6.04186e-06 4.5 2.48528 2.48529 4.5 6.04186e-06 4.5-2.48528 4.5-4.5 2.48529-4.5 6.04186e-06Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 618.5 304.695)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(650.183 185)"
                        >
                            2Т-1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(638.017 198)"
                        >
                            10/110 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(636.85 211)"
                        >
                            63000 кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(641.27 224)"
                        >
                            SF63000
                        </text>
                        <path
                            d="M768.354 91.1543 464.5 89.5"
                            stroke="#4472C4"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(642.991 143)"
                        >
                            В-2Т-1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(290.272 332)"
                        >
                            ТН-1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(268.605 345)"
                        >
                            10//0,4 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(277.272 358)"
                        >
                            630 кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(283.105 371)"
                        >
                            CSB10
                        </text>
                        <path
                            d="M0 0 356.053 0.000104987"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 577.553 275.5)"
                        />
                        <path
                            d="M0 0 458.37 0.000104987"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1114.87 274.5)"
                        />
                        <path
                            d="M1.33327-0.0129733 1.61589 29.0324-1.05065 29.0583-1.33327 0.0129733ZM4.28243 29.0064C4.30393 31.2155 2.53058 33.0237 0.321545 33.0452-1.88749 33.0667-3.69569 31.2933-3.71719 29.0843-3.73868 26.8752-1.96533 25.067 0.243705 25.0455 2.45274 25.024 4.26094 26.7974 4.28243 29.0064Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 562.5 304.545)"
                        />
                        <path
                            d="M561.5 304.5 673.752 304.5"
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
                            font-size="10"
                            transform="translate(466.251 83)"
                        >
                            ОРУ-110 кВ ГЭС-29
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(699.496 84)"
                        >
                            II-СШ 110 кВ
                        </text>
                        <path
                            d="M678.146 96.4096 767.378 96.4096 767.378 109.21 678.146 109.21Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M678.146 95.7429 678.146 109.876"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M767.378 95.7429 767.378 109.876"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M677.479 96.4096 768.045 96.4096"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M677.479 109.21 768.045 109.21"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g659"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(681.926 106)"
                            >
                                U
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(1053.13 286)"
                        >
                            II-СШ 10 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(236.212 286)"
                        >
                            I-СШ 10 кВ
                        </text>
                        <path
                            d="M300.443 412.365 374.09 412.365 374.09 426.098 300.443 426.098Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M300.443 411.698 300.443 426.765"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M374.09 411.698 374.09 426.765"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M299.777 412.365 374.757 412.365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M299.777 426.098 374.757 426.098"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g549"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(304.223 422)"
                            >
                                Р
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(452.659 332)"
                        >
                            Г-1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(441.659 345)"
                        >
                            10 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(432.659 358)"
                        >
                            25 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(406.659 371)"
                        >
                            SF25-16/4250
                        </text>
                        <path
                            d="M890.711 412.365 964.357 412.365 964.357 426.098 890.711 426.098Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M890.711 411.698 890.711 426.765"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M964.357 411.698 964.357 426.765"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M890.044 412.365 965.024 412.365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M890.044 426.098 965.024 426.098"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g629"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(894.49 422)"
                            >
                                Р
                            </text>
                        </g>
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
                            transform="translate(494.771 20)"
                        >
                            АНДИЖАНСКАЯ ГЭС(ГЭС-36)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(456.352 32)"
                        >
                            Установленный мощность
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(588.185 32)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(594.352 32)"
                        >
                            50 МВт Количество гидроагрегатов
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(783.185 32)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(789.352 32)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(797.352 32)"
                        >
                            шт
                        </text>
                        <path id="c6702"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 603.5 226.5)"
                        />
                        <path id="c6701"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#4472C4"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 603.5 202.5)"
                        />
                        <path
                            d="M1.5-1.89188e-06 1.5001 83.2403-1.49989 83.2403-1.5 1.89188e-06ZM4.5001 83.2403C4.50011 85.7256 2.48539 87.7403 0.000110662 87.7403-2.48517 87.7403-4.49989 85.7256-4.4999 83.2403-4.4999 80.755-2.48518 78.7403 9.93112e-05 78.7403 2.48538 78.7403 4.5001 80.755 4.5001 83.2403Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 618.5 172.74)"
                        />
                        <rect
                            id="c670"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 609.5 147.5)"
                        />
                        <path
                            d="M496.167 327.209 496.167 275.5 498.833 275.5 498.833 327.209ZM493.5 275.5C493.5 273.291 495.291 271.5 497.5 271.5 499.709 271.5 501.5 273.291 501.5 275.5 501.5 277.709 499.709 279.5 497.5 279.5 495.291 279.5 493.5 277.709 493.5 275.5Z"
                            fill="#6600CC"
                        />
                        <rect
                            id="c509"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 488.5 310.5)"
                        />
                        <path
                            d="M742.167 326.209 742.167 274.5 744.833 274.5 744.833 326.209ZM739.5 274.5C739.5 272.291 741.291 270.5 743.5 270.5 745.709 270.5 747.5 272.291 747.5 274.5 747.5 276.709 745.709 278.5 743.5 278.5 741.291 278.5 739.5 276.709 739.5 274.5Z"
                            fill="#6600CC"
                        />
                        <rect
                            id="c589"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 734.5 309.5)"
                        />
                        <path
                            d="M1.33333-4.81945e-06 1.33344 29.0454-1.33323 29.0454-1.33333 4.81945e-06ZM4.0001 29.0453C4.00011 31.2545 2.20926 33.0453 0.000119445 33.0454-2.20902 33.0454-3.99989 31.2545-3.99989 29.0454-3.9999 26.8362-2.20905 25.0454 9.05285e-05 25.0454 2.20923 25.0453 4.0001 26.8362 4.0001 29.0453Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 672.5 304.545)"
                        />
                        <path
                            d="M1.33328-0.0122 1.58797 27.8215-1.07859 27.8459-1.33328 0.0122ZM6.00576 20.4526 0.278902 30.4798-5.63049 20.5591C-6.00734 19.9264-5.79997 19.1081-5.16732 18.7312-4.53467 18.3544-3.71632 18.5618-3.33947 19.1944L1.4002 27.1514-0.903115 27.1724 3.69016 19.1301C4.05536 18.4906 4.86978 18.2683 5.50922 18.6335 6.14866 18.9987 6.37097 19.8132 6.00576 20.4526Z"
                            fill="#7F7F7F"
                            transform="matrix(-1 0 0 1 926.779 375.5)"
                        />
                        <path id="c6291"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7F7F7F"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 912.5 374.5)"
                        />
                        <path id="c6292"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 912.5 350.5)"
                        />
                        <path
                            d="M-1.34009 15-1.00841 11.7098-0.0556968 8.64066 1.45135 5.86413 3.44627 3.44627 5.86413 1.45135 8.64066-0.0556968 11.7098-1.00841 15-1.34009 18.2902-1.00841 21.3593-0.0556967 24.1359 1.45135 26.5537 3.44627 28.5486 5.86413 30.0557 8.64065 31.0084 11.7098 31.3401 15 31.0084 18.2902 30.0557 21.3593 28.5486 24.1359 26.5537 26.5537 24.1359 28.5486 21.3593 30.0557 18.2902 31.0084 15 31.3401 11.7098 31.0084 8.64065 30.0557 5.86413 28.5486 3.44627 26.5537 1.45135 24.1359-0.0556967 21.3593-1.00841 18.2902ZM1.63136 17.8893 1.57814 17.6277 2.45217 20.4434 2.35062 20.2026 3.73361 22.7506 3.59022 22.5381 5.42186 24.758 5.24195 24.5781 7.46191 26.4098 7.24941 26.2664 9.79738 27.6494 9.5566 27.5478 12.3723 28.4219 12.1107 28.3686 15.1337 28.6734 14.8663 28.6734 17.8893 28.3686 17.6277 28.4219 20.4434 27.5478 20.2026 27.6494 22.7506 26.2664 22.5381 26.4098 24.758 24.5781 24.5781 24.758 26.4098 22.5381 26.2664 22.7506 27.6494 20.2026 27.5478 20.4434 28.4219 17.6277 28.3686 17.8893 28.6734 14.8663 28.6734 15.1337 28.3686 12.1107 28.4219 12.3723 27.5478 9.5566 27.6494 9.79738 26.2664 7.24941 26.4098 7.46191 24.5781 5.24195 24.758 5.42186 22.5381 3.59022 22.7506 3.73361 20.2026 2.35062 20.4434 2.45217 17.6277 1.57814 17.8893 1.63136 14.8663 1.32661 15.1337 1.32661 12.1107 1.63136 12.3723 1.57814 9.55661 2.45217 9.79738 2.35062 7.24941 3.73361 7.46191 3.59022 5.24195 5.42186 5.42186 5.24195 3.59022 7.46191 3.73361 7.24941 2.35062 9.79738 2.45217 9.55661 1.57814 12.3723 1.63136 12.1107 1.32661 15.1337 1.32661 14.8663Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 912.5 350.5)"
                        />
                        <path
                            d="M1.33333-3.07704e-06 1.33344 45.4926-1.33323 45.4926-1.33333 3.07704e-06ZM4.0001 45.4926C4.00011 47.7017 2.20925 49.4926 0.000114218 49.4926-2.20902 49.4926-3.99989 47.7017-3.99989 45.4926-3.9999 43.2835-2.20904 41.4926 9.57558e-05 41.4926 2.20923 41.4926 4.0001 43.2835 4.0001 45.4926Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 927.5 319.993)"
                        />
                        <rect
                            id="c629"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 917.5 308.5)"
                        />
                        <path
                            d="M1.33328-0.0122 1.58797 27.8215-1.07859 27.8459-1.33328 0.0122ZM6.00576 20.4526 0.278902 30.4798-5.63049 20.5591C-6.00734 19.9264-5.79997 19.1081-5.16732 18.7312-4.53467 18.3544-3.71632 18.5618-3.33947 19.1944L1.4002 27.1514-0.903115 27.1724 3.69016 19.1301C4.05536 18.4906 4.86978 18.2683 5.50922 18.6335 6.14866 18.9987 6.37097 19.8132 6.00576 20.4526Z"
                            fill="#7F7F7F"
                            transform="matrix(-1 0 0 1 335.779 375.5)"
                        />
                        <path id="c5491"
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#7F7F7F"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 320.5 375.5)"
                        />
                        <path id="c5492"
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 320.5 350.5)"
                        />
                        <path
                            d="M-1.34055 15-0.996931 11.7013-0.0105331 8.6262 1.54799 5.84746 3.60808 3.43115 6.10121 1.44049 8.96024-0.0612783 12.1172-1.00965 15.5-1.33966 18.8828-1.00965 22.0398-0.0612782 24.8988 1.44049 27.3919 3.43115 29.452 5.84746 31.0105 8.6262 31.9969 11.7013 32.3405 15 31.9969 18.2986 31.0105 21.3738 29.452 24.1525 27.3919 26.5688 24.8988 28.5595 22.0398 30.0613 18.8828 31.0097 15.5 31.3397 12.1172 31.0097 8.96024 30.0613 6.10121 28.5595 3.60808 26.5688 1.54799 24.1525-0.0105333 21.3738-0.996931 18.2986ZM1.64106 17.8849 1.58452 17.6158 2.48768 20.4314 2.38097 20.1864 3.81006 22.7344 3.66178 22.5216 5.55447 24.7416 5.37179 24.5647 7.66575 26.3963 7.45383 26.2578 10.0867 27.6408 9.8503 27.5443 12.7598 28.4183 12.5057 28.3682 15.6295 28.673 15.3705 28.673 18.4943 28.3682 18.2402 28.4183 21.1497 27.5443 20.9133 27.6408 23.5462 26.2578 23.3342 26.3963 25.6282 24.5647 25.4455 24.7416 27.3382 22.5216 27.1899 22.7344 28.619 20.1864 28.5123 20.4314 29.4155 17.6158 29.3589 17.8849 29.6738 14.8619 29.6738 15.1381 29.3589 12.1151 29.4155 12.3842 28.5123 9.56857 28.619 9.81357 27.1899 7.2656 27.3382 7.47841 25.4455 5.25845 25.6282 5.43534 23.3342 3.6037 23.5462 3.74216 20.9133 2.35917 21.1497 2.45573 18.2402 1.58171 18.4943 1.63178 15.3705 1.32703 15.6295 1.32703 12.5057 1.63178 12.7598 1.58171 9.8503 2.45573 10.0867 2.35917 7.45383 3.74216 7.66575 3.6037 5.37179 5.43534 5.55447 5.25845 3.66178 7.47841 3.81006 7.2656 2.38097 9.81357 2.48768 9.56857 1.58452 12.3842 1.64106 12.1151 1.32616 15.1381 1.32616 14.8619Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 320.5 350.5)"
                        />
                        <path
                            d="M1.33333-3.07704e-06 1.33344 45.4926-1.33323 45.4926-1.33333 3.07704e-06ZM4.0001 45.4926C4.00011 47.7017 2.20925 49.4926 0.000114218 49.4926-2.20902 49.4926-3.99989 47.7017-3.99989 45.4926-3.9999 43.2835-2.20904 41.4926 9.57558e-05 41.4926 2.20923 41.4926 4.0001 43.2835 4.0001 45.4926Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 336.5 320.993)"
                        />
                        <rect
                            id="c549"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 326.5 309.5)"
                        />
                        <path
                            d="M506.06 183.756 589.66 183.756 589.66 197.347 506.06 197.347Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M506.06 197.347 589.66 197.347 589.66 210.938 506.06 210.938Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M505.393 197.347 590.326 197.347"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M506.06 183.089 506.06 211.605"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M589.66 183.089 589.66 211.605"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M505.393 183.756 590.326 183.756"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M505.393 210.938 590.326 210.938"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g670"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(509.839 194)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g669"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(509.839 207)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 583 184)"
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
                            transform="matrix(0.000104987 0 0 0.000104987 584 198)"
                        >
                            <g clip-path="url(#clip5)" transform="matrix(1 0 0 1.02857 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M221.447 256.059 305.047 256.059 305.047 269.65 221.447 269.65Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.447 255.392 221.447 270.317"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M305.047 255.392 305.047 270.317"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.781 256.059 305.714 256.059"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.781 269.65 305.714 269.65"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g539"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(225.227 266)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M1030.86 254.949 1114.46 254.949 1114.46 268.54 1030.86 268.54Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1030.86 254.282 1030.86 269.206"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1114.46 254.282 1114.46 269.206"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1030.19 254.949 1115.13 254.949"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1030.19 268.54 1115.13 268.54"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g619"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1034.64 265)"
                            >
                                U
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(700.44 330)"
                        >
                            Г-2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(689.44 343)"
                        >
                            10 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(680.44 356)"
                        >
                            25 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(654.44 369)"
                        >
                            SF25-16/4250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(511.684 304)"
                        >
                            В-Г1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(757.39 303)"
                        >
                            В-Г2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(883.079 332)"
                        >
                            ТН-2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(861.413 345)"
                        >
                            10//0,4 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(870.079 358)"
                        >
                            630 кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(875.913 371)"
                        >
                            CSB10
                        </text>
                        <path
                            d="M449.904 380.365 543.012 380.365 543.012 393.165 449.904 393.165Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.904 393.165 543.012 393.165 543.012 405.965 449.904 405.965Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.904 405.965 543.012 405.965 543.012 418.765 449.904 418.765Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.904 418.765 543.012 418.765 543.012 431.565 449.904 431.565Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.904 431.565 543.012 431.565 543.012 444.365 449.904 444.365Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.904 444.365 543.012 444.365 543.012 457.165 449.904 457.165Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.237 393.165 543.679 393.165"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.237 405.965 543.679 405.965"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.237 418.765 543.679 418.765"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.237 431.565 543.679 431.565"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.237 444.365 543.679 444.365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.904 379.698 449.904 457.831"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M543.012 379.698 543.012 457.831"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.237 380.365 543.679 380.365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M449.237 457.165 543.679 457.165"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g509"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(453.683 390)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g511"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(453.683 403)"
                            >
                                Qвар
                        </text>
                        <g>
                            <text id="a509"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(453.683 416)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k509"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(453.683 429)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n509"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(453.683 442)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w509" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(453.683 454)"
                            >
                                Qвода
                        </text>
                        <path
                            d="M694.233 380.18 787.341 380.18 787.341 392.98 694.233 392.98Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M694.233 392.98 787.341 392.98 787.341 405.78 694.233 405.78Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M694.233 405.78 787.341 405.78 787.341 418.58 694.233 418.58Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M694.233 418.58 787.341 418.58 787.341 431.38 694.233 431.38Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M694.233 431.38 787.341 431.38 787.341 444.18 694.233 444.18Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M694.233 444.18 787.341 444.18 787.341 456.98 694.233 456.98Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M693.566 392.98 788.008 392.98"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M693.566 405.78 788.008 405.78"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M693.566 418.58 788.008 418.58"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M693.566 431.38 788.008 431.38"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M693.566 444.18 788.008 444.18"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M694.233 379.513 694.233 457.647"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M787.341 379.513 787.341 457.647"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M693.566 380.18 788.008 380.18"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M693.566 456.98 788.008 456.98"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g589"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(698.012 390)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g591"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(698.012 403)"
                            >
                                Qвар
                        </text>
                        <g>
                            <text id="a589"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(698.012 416)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k589"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(698.012 429)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n589"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(698.012 441)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w589"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(698.012 454)"
                            >
                                Qвода
                        </text>
                        <g
                            clip-path="url(#clip6)"
                            transform="matrix(0.000104987 0 0 0.000104987 942 85)"
                        >
                            <g clip-path="url(#clip8)" transform="matrix(1.01496 0 0 1 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 964.17 80.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1062.5 134.171)"
                        />
                        <path
                            d="M1060.55 147.031 1052.86 138.654 1053.35 138.203 1061.04 146.58ZM1053.11 138.429 1052.95 142.197 1049.5 134.5 1056.87 138.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1069.95 146.889 1060.5 146.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M967.748 66.9089 1062.12 66.9089 1062.12 79.7089 967.748 79.7089Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M967.748 66.2422 967.748 80.3755"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1062.12 66.2422 1062.12 80.3755"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M967.081 66.9089 1062.78 66.9089"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M967.081 79.7089 1062.78 79.7089"
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
                                transform="translate(971.528 77)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(982.028 77)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M963.5 81.5001 982.692 81.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1070.24 133.993 1157.9 133.993 1157.9 146.793 1070.24 146.793Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1070.24 133.326 1070.24 147.459"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1157.9 133.326 1157.9 147.459"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1069.57 133.993 1158.56 133.993"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1069.57 146.793 1158.56 146.793"
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
                                transform="translate(1074.02 144)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1084.52 144)"
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
                            transform="matrix(1 0 0 -1 960.5 88.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1069.99 106.5)"
                        />
                        <path
                            d="M1070.5 107.5 1089.69 107.647"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1074.44 93.809 1147.64 93.809 1147.64 106.609 1074.44 106.609Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1074.44 93.1424 1074.44 107.276"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1147.64 93.1424 1147.64 107.276"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1073.77 93.809 1148.3 93.809"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1073.77 106.609 1148.3 106.609"
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
                                transform="translate(1078.22 104)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1046.5 135.5 1069.21 135.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M9.50005 424C9.50005 418.753 13.7533 414.5 19.0001 414.5 24.2468 414.5 28.5001 418.753 28.5001 424 28.5001 429.247 24.2468 433.5 19.0001 433.5 13.7533 433.5 9.50005 429.247 9.50005 424Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M9.50005 446C9.50005 440.753 13.7533 436.5 19.0001 436.5 24.2468 436.5 28.5001 440.753 28.5001 446 28.5001 451.247 24.2468 455.5 19.0001 455.5 13.7533 455.5 9.50005 451.247 9.50005 446Z"
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
                            transform="translate(33.8817 426)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.799 448)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M9 401.5C9 396.253 13.2533 392 18.5 392 23.7467 392 28 396.253 28 401.5 28 406.747 23.7467 411 18.5 411 13.2533 411 9 406.747 9 401.5Z"
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
                            transform="translate(33.799 404)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(34.0638 381)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.7991 358)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip9)"
                            transform="matrix(0.000104987 0 0 0.000104987 14 346)"
                        >
                            <g clip-path="url(#clip10)" transform="matrix(1 0 0 1.07143 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 14 368)">
                            <g clip-path="url(#clip11)" transform="scale(1 1.07143)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <path id="c5891"
                            d="M721.5 350C721.5 336.469 732.469 325.5 746 325.5 759.531 325.5 770.5 336.469 770.5 350 770.5 363.531 759.531 374.5 746 374.5 732.469 374.5 721.5 363.531 721.5 350Z"
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
                                        d="M744.689 343.933 745.622 343.933 746.944 344.167 748.033 344.633 748.889 345.178 749.9 346.189 750.522 347.122 750.989 348.367 751.144 349.067 751.144 350.933 750.833 352.1 750.211 353.344 749.589 354.122 749.044 354.667 747.956 355.367 746.711 355.833 745.933 355.989 744.378 355.989 743.133 355.678 742.278 355.289 741.422 354.744 740.567 353.967 740.022 353.189 739.478 352.1 739.167 350.856 739.089 349.922 739.244 348.678 739.556 347.667 740.178 346.5 741.033 345.567 741.656 345.022 742.978 344.322 744.144 344.011Z"
                                    />
                                    <path
                                        d="M745.156 330.089 746.011 330.089 747.489 330.322 748.967 330.789 750.211 331.411 751.144 332.033 751.922 332.733 752.856 333.667 753.711 334.911 754.333 336.156 754.8 337.556 755.033 338.722 755.111 339.344 755.111 340.822 754.878 342.3 754.489 343.622 753.867 344.944 753.089 346.033 752.933 346.033 752.311 344.944 751.378 343.856 750.522 343.078 749.433 342.378 748.267 341.833 746.944 341.444 745.156 341.211Z"
                                    />
                                    <path
                                        d="M732.4 345.878 732.789 345.956 734.967 347.2 736.522 348.133 736.6 348.289 736.444 349.922 736.6 351.556 736.989 353.033 737.533 354.2 737.533 354.433 735.356 355.678 733.489 356.767 729.444 359.1 728.122 359.878 727.889 359.878 727.189 358.4 726.8 357.078 726.644 356.144 726.567 354.822 726.722 353.344 726.956 352.256 727.5 350.778 728.044 349.767 728.744 348.756 729.678 347.744 730.533 346.967 731.933 346.111Z"
                                    />
                                    <path
                                        d="M752.7 354.433 753.089 354.511 754.956 355.6 761.022 359.1 762.344 359.878 762.189 360.267 761.644 361.044 760.944 361.9 760.4 362.444 759.233 363.3 757.989 364 756.511 364.544 755.344 364.778 754.878 364.856 752.544 364.856 751.378 364.622 750.133 364.233 748.811 363.611 747.878 362.989 747.878 358.322 748.578 358.011 749.9 357.311 750.833 356.611 751.922 355.522Z"
                                    />
                                    <path
                                        d="M735.667 335.067 737.378 335.067 738.856 335.3 740.489 335.844 741.811 336.544 742.433 336.933 742.433 341.678 741.033 342.3 739.944 343 739.089 343.7 738.544 344.244 737.611 345.567 737.144 345.411 735.822 344.633 729.756 341.133 728.044 340.122 727.967 339.967 728.511 339.111 729.367 338.1 729.989 337.478 731.156 336.622 732.244 336 733.722 335.456 734.578 335.222Z"
                                    />
                                    <path
                                        d="M739.167 356.533 739.478 356.611 740.644 357.467 741.967 358.089 743.211 358.478 744.144 358.633 745.078 358.711 745.156 358.789 745.156 369.833 743.989 369.833 742.433 369.522 741.111 369.056 739.711 368.278 738.7 367.5 737.922 366.8 737.144 365.867 736.367 364.622 735.744 363.222 735.356 361.744 735.2 360.344 735.2 359.489 735.278 358.789 737.222 357.7 738.544 356.922Z"
                                    />
                                    <path
                                        d="M762.267 340.044 762.422 340.044 762.967 341.133 763.433 342.533 763.667 343.778 763.744 345.333 763.589 346.733 763.278 348.056 762.656 349.533 762.111 350.467 761.489 351.322 760.633 352.256 759.467 353.189 758.456 353.811 757.756 354.122 755.811 353.033 753.944 351.944 753.711 351.789 753.867 350.389 753.867 349.222 754.567 348.522 755.578 347.2 756.278 346.033 756.978 344.556 757.522 342.844 758.222 342.378 760.167 341.289 762.033 340.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c5091"
                            d="M473.5 351C473.5 337.469 484.469 326.5 498 326.5 511.531 326.5 522.5 337.469 522.5 351 522.5 364.531 511.531 375.5 498 375.5 484.469 375.5 473.5 364.531 473.5 351Z"
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
                                        d="M496.689 343.933 497.622 343.933 498.944 344.167 500.033 344.633 500.889 345.178 501.9 346.189 502.522 347.122 502.989 348.367 503.144 349.067 503.144 350.933 502.833 352.1 502.211 353.344 501.589 354.122 501.044 354.667 499.956 355.367 498.711 355.833 497.933 355.989 496.378 355.989 495.133 355.678 494.278 355.289 493.422 354.744 492.567 353.967 492.022 353.189 491.478 352.1 491.167 350.856 491.089 349.922 491.244 348.678 491.556 347.667 492.178 346.5 493.033 345.567 493.656 345.022 494.978 344.322 496.144 344.011Z"
                                    />
                                    <path
                                        d="M497.156 330.089 498.011 330.089 499.489 330.322 500.967 330.789 502.211 331.411 503.144 332.033 503.922 332.733 504.856 333.667 505.711 334.911 506.333 336.156 506.8 337.556 507.033 338.722 507.111 339.344 507.111 340.822 506.878 342.3 506.489 343.622 505.867 344.944 505.089 346.033 504.933 346.033 504.311 344.944 503.378 343.856 502.522 343.078 501.433 342.378 500.267 341.833 498.944 341.444 497.156 341.211Z"
                                    />
                                    <path
                                        d="M484.4 345.878 484.789 345.956 486.967 347.2 488.522 348.133 488.6 348.289 488.444 349.922 488.6 351.556 488.989 353.033 489.533 354.2 489.533 354.433 487.356 355.678 485.489 356.767 481.444 359.1 480.122 359.878 479.889 359.878 479.189 358.4 478.8 357.078 478.644 356.144 478.567 354.822 478.722 353.344 478.956 352.256 479.5 350.778 480.044 349.767 480.744 348.756 481.678 347.744 482.533 346.967 483.933 346.111Z"
                                    />
                                    <path
                                        d="M504.7 354.433 505.089 354.511 506.956 355.6 513.022 359.1 514.344 359.878 514.189 360.267 513.644 361.044 512.944 361.9 512.4 362.444 511.233 363.3 509.989 364 508.511 364.544 507.344 364.778 506.878 364.856 504.544 364.856 503.378 364.622 502.133 364.233 500.811 363.611 499.878 362.989 499.878 358.322 500.578 358.011 501.9 357.311 502.833 356.611 503.922 355.522Z"
                                    />
                                    <path
                                        d="M487.667 335.067 489.378 335.067 490.856 335.3 492.489 335.844 493.811 336.544 494.433 336.933 494.433 341.678 493.033 342.3 491.944 343 491.089 343.7 490.544 344.244 489.611 345.567 489.144 345.411 487.822 344.633 481.756 341.133 480.044 340.122 479.967 339.967 480.511 339.111 481.367 338.1 481.989 337.478 483.156 336.622 484.244 336 485.722 335.456 486.578 335.222Z"
                                    />
                                    <path
                                        d="M491.167 356.533 491.478 356.611 492.644 357.467 493.967 358.089 495.211 358.478 496.144 358.633 497.078 358.711 497.156 358.789 497.156 369.833 495.989 369.833 494.433 369.522 493.111 369.056 491.711 368.278 490.7 367.5 489.922 366.8 489.144 365.867 488.367 364.622 487.744 363.222 487.356 361.744 487.2 360.344 487.2 359.489 487.278 358.789 489.222 357.7 490.544 356.922Z"
                                    />
                                    <path
                                        d="M514.267 340.044 514.422 340.044 514.967 341.133 515.433 342.533 515.667 343.778 515.744 345.333 515.589 346.733 515.278 348.056 514.656 349.533 514.111 350.467 513.489 351.322 512.633 352.256 511.467 353.189 510.456 353.811 509.756 354.122 507.811 353.033 505.944 351.944 505.711 351.789 505.867 350.389 505.867 349.222 506.567 348.522 507.578 347.2 508.278 346.033 508.978 344.556 509.522 342.844 510.222 342.378 512.167 341.289 514.033 340.2Z"
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

        fetch('/andijon/server36')
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
                    if (item.id === 670) {
                        const value = document.getElementById("g670");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(670);
                            trueAnimation(6701);
                            trueAnimation(6702);
                        } else {
                            falseAnimation(670);
                            falseAnimation(6701);
                            falseAnimation(6702);
                        }
                    } else if(item.id === 669) {
                        const value = document.getElementById("g669");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(670);
                            trueAnimation(6701);
                            trueAnimation(6702);
                        } else {
                            falseAnimation(670);
                            falseAnimation(6701);
                            falseAnimation(6702);
                        }
                    } else if(item.id === 539) {
                        const value = document.getElementById("g539");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 659) {
                        const value = document.getElementById("g659");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 619) {
                        const value = document.getElementById("g619");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 549) {
                        const value = document.getElementById("g549");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(549);
                            trueAnimation(5491);
                            trueAnimation(5492);
                        } else {
                            falseAnimation(549);
                            falseAnimation(5491);
                            falseAnimation(5492);
                        }
                    } else if(item.id === 629) {
                        const value = document.getElementById("g629");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(629);
                            trueAnimation(6291);
                            trueAnimation(6292);
                        } else {
                            falseAnimation(629);
                            falseAnimation(6291);
                            falseAnimation(6292);
                        }
                    }
                    //G-1
                    else if(item.id === 509) {
                        const value = document.getElementById("g509");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a509");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 35 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(509);
                            trueAnimation(5091);
                        } else {
                            falseAnimation(509);
                            falseAnimation(5091);
                        }
                    } else if(item.id === 511) {
                        const value = document.getElementById("g511");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 512) {
                        const value = document.getElementById("k509");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 513) {
                        const value = document.getElementById("n509");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 514) {
                        const value = document.getElementById("w509");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //G-2
                    else if(item.id === 589) {
                        const value = document.getElementById("g589");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a589");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 35 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(589);
                            trueAnimation(5891);
                        } else {
                            falseAnimation(589);
                            falseAnimation(5891);
                        }
                    } else if(item.id === 591) {
                        const value = document.getElementById("g591");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 592) {
                        const value = document.getElementById("k589");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 593) {
                        const value = document.getElementById("n589");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 594) {
                        const value = document.getElementById("w589");
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

    function trueAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "red";
    }

</script>