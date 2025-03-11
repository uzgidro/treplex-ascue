<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-8А, ГЭС-9А';
$energy = new Energy();
$id = 68; $idTwo = 67;
$dashboard = new Dashboard();
$power = new Day();

$power->getHour([$id, $idTwo]);
//$power->getDay([$id, $idTwo]);

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
$urlTwoAggregate1 = $energy->getInformation($idTwo, 1);
$urlTwoAggregate2 = $energy->getInformation($idTwo, 2);
$urlEmployeeTwo = Url::to(['site/employee/', 'id' => $idTwo]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['kfk/index']) ?>">"КФК КГЭСлар каскади" Филиали</a></li>
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
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img0"
                        ></image>
                        <clipPath id="clip1">
                            <rect x="0" y="0" width="1181100" height="575408" />
                        </clipPath>
                        <clipPath id="clip2">
                            <rect x="-4.65661e-10" y="-4.65661e-10" width="57150" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOpJREFUSEvt12sSgyAMBODYKiL4uv9pK7oKIcFeIN8vS3amlpWZSoXuw32xXukxznpMuAHTbMCEs5zlEstZLrGc5RLLWS6xnPpHzI2YZt5hdpgCRAxLEbMwE1b+oQUX72aigMs363GjvXZjlXODNnxoW85fTHJDOH/FyL1/c9yRU5oodUgdJixpAjKJW7EoxaI7oh2r0oYEtGoZMX94DLhUBKfXojyp9dtCgiI4+UDcRXBic6L+XiFqKYrgeC1iS7Jyc3gRXFlLVQSXN2fCSsO9ObII7q7leTZbrtOiFsGl06IXwTlfnAgg+gEGAhJwZdPnjwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img3"
                        ></image>
                        <clipPath id="clip4">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip5">
                            <rect x="4.65661e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img6"
                        ></image>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip8">
                            <rect x="0" y="4.65661e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip9">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="-1.86265e-09" y="0" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="85725" height="190500" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="85725" height="190500" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="81642.9" height="190500" />
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
                            d="M0 0 478.59 0.000104987"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1158.09 390.5)"
                        />
                        <path
                            d="M0 0 575.524 0.000104987"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 926.024 210.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(945.113 342)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(952.28 342)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(955.78 342)"
                        >
                            Т2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(968.28 342)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(971.78 342)"
                        >
                            10кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(943.193 355)"
                        >
                            VBG
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(966.36 355)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(969.86 355)"
                        >
                            E
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(977.026 355)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(980.526 355)"
                        >
                            12P
                        </text>
                        <path
                            d="M858 441.407 858 391.5 861 391.5 861 441.407ZM855 391.5C855 389.015 857.015 387 859.5 387 861.985 387 864 389.015 864 391.5 864 393.985 861.985 396 859.5 396 857.015 396 855 393.985 855 391.5Z"
                            fill="#7030A0"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(502.858 22)"
                        >
                            “
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(512.191 22)"
                        >
                            КФК КГЭСлар какади
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(704.911 22)"
                        >
                            ”
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(714.245 22)"
                        >
                            УК
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(660.871 403)"
                        >
                            СШ 10 кВ
                        </text>
                        <path id="c6602"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 714.5 496.5)"
                        />
                        <path id="c6601"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 714.5 472.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(678.267 448)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(701.433 448)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(704.933 448)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(669.933 461)"
                        >
                            10/0,4кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(672.933 474)"
                        >
                            160
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(691.6 474)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(675.267 487)"
                        >
                            SCB11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(706.767 487)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(672.6 500)"
                        >
                            160/10,5
                        </text>
                        <path
                            d="M730.833 496.496 731.032 562.466 728.365 562.474 728.167 496.504ZM729.698 562.47 733.69 559.791 729.714 567.803 725.69 559.815Z"
                            fill="#989898"
                        />
                        <rect id="c12"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 850.5 423.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(371.546 343)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(378.713 343)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(382.213 343)"
                        >
                            Т3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(394.713 343)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(398.213 343)"
                        >
                            10кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(369.633 356)"
                        >
                            VBG
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(392.799 356)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(396.299 356)"
                        >
                            E
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(403.466 356)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(406.966 356)"
                        >
                            12P
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(313.284 262)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(320.451 262)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(323.951 262)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(272.951 275)"
                        >
                            10,5/10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(315.951 275)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(286.951 288)"
                        >
                            8000кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(273.784 301)"
                        >
                            SF8000/10,5
                        </text>
                        <path
                            d="M1.5-1.83297e-06 1.5001 85.9155-1.49989 85.9155-1.5 1.83297e-06ZM-4.5 5.4989e-06C-4.5-2.48528-2.48529-4.5-5.4989e-06-4.5 2.48528-4.5 4.5-2.48529 4.5-5.4989e-06 4.5 2.48528 2.48529 4.5 5.4989e-06 4.5-2.48528 4.5-4.5 2.48529-4.5 5.4989e-06Z"
                            fill="#7030A0"
                            transform="matrix(1 0 0 -1 1094.5 390.416)"
                        />
                        <path
                            d="M1.5-2.03196e-06 1.5001 71.5015-1.4999 71.5015-1.5 2.03196e-06ZM9.6859e-05 71.5015 4.50009 68.5015 0.000104987 77.5015-4.49991 68.5015Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1094.5 251.002)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1054.11 262)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1061.27 262)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1064.77 262)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1016.44 275)"
                        >
                            10,5/
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1038.11 275)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1056.77 275)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1022.44 288)"
                        >
                            16000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1049.11 288)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1011.94 301)"
                        >
                            SF16000/121
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1108.83 211)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1115.99 211)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1119.49 211)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1131.99 211)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1135.49 211)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1154.16 211)"
                        >
                            Кв
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1114.24 224)"
                        >
                            LW36
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1142.74 224)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1146.24 224)"
                        >
                            126
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(550.468 60)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(588.468 60)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(594.635 60)"
                        >
                            8А, ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(664.801 60)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(670.968 60)"
                        >
                            9А
                        </text>
                        <rect id="c174"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1085.5 220.5)"
                        />
                        <rect
                            x="117"
                            y="106"
                            width="496"
                            height="519"
                            stroke="#172C51"
                            stroke-width="1.66667"
                            stroke-miterlimit="8"
                            stroke-dasharray="6.66667 5"
                            fill="none"
                        />
                        <rect
                            x="637"
                            y="105"
                            width="575"
                            height="520"
                            stroke="#172C51"
                            stroke-width="1.66667"
                            stroke-miterlimit="8"
                            stroke-dasharray="6.66667 5"
                            fill="none"
                        />
                        <a href="<?= $urlEmployee ?>" style="">
                            <text
                                fill="#85a9ff"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(142.967 148)"
                            >
                                Сотрудники
                            </text>
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(142.967 128)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(170.134 128)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(174.634 128)"
                        >
                            9А
                        </text>
                        <a href="<?= $urlEmployeeTwo ?>" style="">
                            <text
                                fill="#85a9ff"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(665.567 148)"
                            >
                                Сотрудники
                            </text>
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(665.567 128)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(692.734 128)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(697.234 128)"
                        >
                            8А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1030.52 165)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1038.52 165)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1042.02 165)"
                        >
                            8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1047.36 165)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1050.86 165)"
                        >
                            п/с Кизилровот 110кВ
                        </text>
                        <path
                            d="M350.5 209.5 350.769 251.703"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path id="c9302"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 335.5 305.5)"
                        />
                        <path id="c9301"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 335.5 282.5)"
                        />
                        <path
                            d="M1.5-1.85243e-06 1.5001 85.0127-1.49989 85.0127-1.5 1.85243e-06ZM-4.5 5.55729e-06C-4.5-2.48528-2.48529-4.5-5.55729e-06-4.5 2.48528-4.5 4.5-2.48529 4.5-5.55729e-06 4.5 2.48528 2.48529 4.5 5.55729e-06 4.5-2.48528 4.5-4.5 2.48529-4.5 5.55729e-06Z"
                            fill="#7030A0"
                            transform="matrix(1 0 0 -1 350.5 390.513)"
                        />
                        <rect id="c93"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 341.5 356.5)"
                        />
                        <path
                            d="M924.5 209.5 924.769 251.703"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path id="c9305"
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 909.5 305.5)"
                        />
                        <path id="c9304"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 909.5 282.5)"
                        />
                        <path
                            d="M1.5-1.85243e-06 1.5001 85.0127-1.49989 85.0127-1.5 1.85243e-06ZM-4.5 5.55729e-06C-4.5-2.48528-2.48529-4.5-5.55729e-06-4.5 2.48528-4.5 4.5-2.48529 4.5-5.55729e-06 4.5 2.48528 2.48529 4.5 5.55729e-06 4.5-2.48528 4.5-4.5 2.48529-4.5 5.55729e-06Z"
                            fill="#7030A0"
                            transform="matrix(1 0 0 -1 924.5 390.513)"
                        />
                        <rect id="c9303"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 916.5 355.5)"
                        />
                        <path id="c1471"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1079.5 304.5)"
                        />
                        <path id="c147"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1079.5 281.5)"
                        />
                        <path
                            d="M1009 440.407 1009 390.5 1012 390.5 1012 440.407ZM1006 390.5C1006 388.015 1008.01 386 1010.5 386 1012.99 386 1015 388.015 1015 390.5 1015 392.985 1012.99 395 1010.5 395 1008.01 395 1006 392.985 1006 390.5Z"
                            fill="#7030A0"
                        />
                        <rect id="c39"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1001.5 422.5)"
                        />
                        <path
                            d="M729 441.407 729 391.5 732 391.5 732 441.407ZM726 391.5C726 389.015 728.015 387 730.5 387 732.985 387 735 389.015 735 391.5 735 393.985 732.985 396 730.5 396 728.015 396 726 393.985 726 391.5Z"
                            fill="#7030A0"
                        />
                        <rect id="c66"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 721.5 423.5)"
                        />
                        <path
                            d="M0 0 427.087 0.000104987"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 578.587 390.5)"
                        />
                        <path
                            d="M349 441.407 349 391.5 352 391.5 352 441.407ZM346 391.5C346 389.015 348.015 387 350.5 387 352.985 387 355 389.015 355 391.5 355 393.985 352.985 396 350.5 396 348.015 396 346 393.985 346 391.5Z"
                            fill="#7030A0"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(306.478 450)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(313.311 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(316.811 450)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(298.144 463)"
                        >
                            10кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(291.811 476)"
                        >
                            3 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(250.311 489)"
                        >
                            SF3000/40/4250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(142.289 401)"
                        >
                            СШ 10 кВ
                        </text>
                        <path id="c2552"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 191.5 496.5)"
                        />
                        <path id="c2551"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 191.5 472.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(155.489 448)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(178.656 448)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(182.156 448)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(147.156 461)"
                        >
                            10/0,4кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(150.156 474)"
                        >
                            160
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(168.822 474)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(152.489 487)"
                        >
                            SCB11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(183.989 487)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(149.822 500)"
                        >
                            160/10,5
                        </text>
                        <path
                            d="M207.833 496.495 208.029 553.644 205.363 553.653 205.167 496.505ZM206.696 553.648 210.687 550.968 206.714 558.982 202.687 550.995Z"
                            fill="#989898"
                        />
                        <rect id="c201"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 341.5 423.5)"
                        />
                        <path
                            d="M516 440.407 516 390.5 519 390.5 519 440.407ZM513 390.5C513 388.015 515.015 386 517.5 386 519.985 386 522 388.015 522 390.5 522 392.985 519.985 395 517.5 395 515.015 395 513 392.985 513 390.5Z"
                            fill="#7030A0"
                        />
                        <rect id="c228"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 507.5 422.5)"
                        />
                        <path
                            d="M206 441.407 206 391.5 209 391.5 209 441.407ZM203 391.5C203 389.015 205.015 387 207.5 387 209.985 387 212 389.015 212 391.5 212 393.985 209.985 396 207.5 396 205.015 396 203 393.985 203 391.5Z"
                            fill="#7030A0"
                        />
                        <rect id="c255"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 197.5 423.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(474.019 450)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(480.852 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(484.352 450)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(465.685 463)"
                        >
                            10кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(459.352 476)"
                        >
                            3 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(417.852 489)"
                        >
                            SF3000/40/4250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(816.056 450)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(822.889 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(826.389 450)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(807.723 463)"
                        >
                            10кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(801.389 476)"
                        >
                            3 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(759.889 489)"
                        >
                            SF3000/40/4250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(965.186 450)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(972.019 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(975.519 450)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(956.853 463)"
                        >
                            10кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(950.519 476)"
                        >
                            3 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(909.019 489)"
                        >
                            SF3000/40/4250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(889.098 262)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(896.265 262)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(899.765 262)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(848.765 275)"
                        >
                            10,5/10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(891.765 275)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(862.765 288)"
                        >
                            8000кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(849.598 301)"
                        >
                            SF8000/10,5
                        </text>
                        <path
                            d="M148.542 371.969 218.021 371.969 218.021 384.769 148.542 384.769Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M148.542 371.302 148.542 385.435"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M218.021 371.302 218.021 385.435"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M147.875 371.969 218.688 371.969"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M147.875 384.769 218.688 384.769"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g285"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(152.321 382)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M653.603 372.657 723.083 372.657 723.083 385.457 653.603 385.457Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M653.603 371.99 653.603 386.123"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M723.083 371.99 723.083 386.123"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M652.936 372.657 723.749 372.657"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M652.936 385.457 723.749 385.457"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g96"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(657.382 383)"
                            >
                                U
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1023.1 416)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1030.27 416)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1033.77 416)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1040.6 416)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1044.1 416)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(872.197 417)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(879.364 417)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(882.864 417)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(889.697 417)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(893.197 417)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(742.323 417)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(749.49 417)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(752.99 417)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(776.156 417)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(779.656 417)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(529.758 416)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(536.924 416)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(540.424 416)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(547.258 416)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(550.758 416)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(363.691 416)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(370.858 416)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(374.358 416)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(381.191 416)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(384.691 416)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(232.629 417)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(239.796 417)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(243.296 417)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(266.462 417)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(269.962 417)"
                        >
                            1
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 1047 32)">
                            <g clip-path="url(#clip1)" transform="scale(1 1.00976)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img0"
                                    transform="scale(7571.15 7571.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1068.17 28.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1167.5 82.1712)"
                        />
                        <path
                            d="M1164.55 95.0309 1156.86 86.6543 1157.35 86.2035 1165.04 94.58ZM1157.11 86.4289 1156.95 90.1967 1153.5 82.5001 1160.87 86.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1174.95 94.8892 1165.5 94.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1072.38 14.4289 1166.75 14.4289 1166.75 27.2289 1072.38 27.2289Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1072.38 13.7622 1072.38 27.8955"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1166.75 13.7622 1166.75 27.8955"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1071.71 14.4289 1167.41 14.4289"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1071.71 27.2289 1167.41 27.2289"
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
                                transform="translate(1076.16 24)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1086.66 24)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1068.5 28.5001 1087.69 28.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.87 81.5125 1262.53 81.5125 1262.53 94.3125 1174.87 94.3125Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.87 80.8459 1174.87 94.9792"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1262.53 80.8459 1262.53 94.9792"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.2 81.5125 1263.19 81.5125"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.2 94.3125 1263.19 94.3125"
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
                                transform="translate(1178.65 92)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1189.15 92)"
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
                            transform="matrix(1 0 0 -1 1064.5 36.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1174.99 54.5001)"
                        />
                        <path
                            d="M1174.5 54.5001 1193.69 54.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.07 41.329 1252.26 41.329 1252.26 54.129 1179.07 54.129Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.07 40.6624 1179.07 54.7957"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1252.26 40.6624 1252.26 54.7957"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1178.4 41.329 1252.93 41.329"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1178.4 54.129 1252.93 54.129"
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
                                transform="translate(1182.85 51)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1150.5 82.5001 1173.21 82.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M253.128 332.594 336.727 332.594 336.727 346.185 253.128 346.185Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M253.128 346.185 336.727 346.185 336.727 359.776 253.128 359.776Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M252.461 346.185 337.394 346.185"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M253.128 331.927 253.128 360.443"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M336.727 331.927 336.727 360.443"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M252.461 332.594 337.394 332.594"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M252.461 359.776 337.394 359.776"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g282Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(255.794 343)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g282Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(255.794 356)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip2)"
                            transform="matrix(0.000104987 0 0 0.000104987 328 333)"
                        >
                            <g clip-path="url(#clip4)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip5)"
                            transform="matrix(0.000104987 0 0 0.000104987 329 347)"
                        >
                            <g clip-path="url(#clip7)" transform="matrix(1 0 0 1.02857 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M825.966 333.07 909.566 333.07 909.566 346.661 825.966 346.661Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M825.966 346.661 909.566 346.661 909.566 360.252 825.966 360.252Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M825.3 346.661 910.233 346.661"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M825.966 332.403 825.966 360.919"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M909.566 332.403 909.566 360.919"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M825.3 333.07 910.233 333.07"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M825.3 360.252 910.233 360.252"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g93Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(828.633 343)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g93Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(828.633 357)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip8)"
                            transform="matrix(0.000104987 0 0 0.000104987 901 334)"
                        >
                            <g clip-path="url(#clip9)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 902 347)"
                        >
                            <g clip-path="url(#clip11)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1116.84 264.693 1200.44 264.693 1200.44 278.284 1116.84 278.284Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1116.84 278.284 1200.44 278.284 1200.44 291.875 1116.84 291.875Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1116.17 278.284 1201.1 278.284"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1116.84 264.026 1116.84 292.542"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1200.44 264.026 1200.44 292.542"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1116.17 264.693 1201.1 264.693"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1116.17 291.875 1201.1 291.875"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g147Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1119.5 275)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g147Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1119.5 288)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip12)"
                            transform="matrix(0.000104987 0 0 0.000104987 1192 265)"
                        >
                            <g clip-path="url(#clip13)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip14)"
                            transform="matrix(0.000104987 0 0 0.000104987 1193 279)"
                        >
                            <g clip-path="url(#clip15)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1052.14 126.315 1135.74 126.315 1135.74 139.906 1052.14 139.906Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1052.14 139.906 1135.74 139.906 1135.74 153.497 1052.14 153.497Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1051.47 139.906 1136.41 139.906"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1052.14 125.648 1052.14 154.164"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1135.74 125.648 1135.74 154.164"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1051.47 126.315 1136.41 126.315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1051.47 153.497 1136.41 153.497"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="w147Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1054.81 136)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="w147Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1054.81 150)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip16)"
                            transform="matrix(0.000104987 0 0 0.000104987 1127 127)"
                        >
                            <g clip-path="url(#clip17)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip18)"
                            transform="matrix(0.000104987 0 0 0.000104987 1128 141)"
                        >
                            <g clip-path="url(#clip19)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M303.058 500.453 396.166 500.453 396.166 513.253 303.058 513.253Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M303.058 513.253 396.166 513.253 396.166 526.053 303.058 526.053Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M303.058 526.053 396.166 526.053 396.166 538.853 303.058 538.853Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M303.058 538.853 396.166 538.853 396.166 551.653 303.058 551.653Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M303.058 551.653 396.166 551.653 396.166 564.453 303.058 564.453Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M303.058 564.453 396.166 564.453 396.166 577.253 303.058 577.253Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M302.391 513.253 396.833 513.253"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M302.391 526.053 396.833 526.053"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M302.391 538.853 396.833 538.853"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M302.391 551.653 396.833 551.653"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M302.391 564.453 396.833 564.453"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M303.058 499.787 303.058 577.92"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M396.166 499.787 396.166 577.92"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M302.391 500.453 396.833 500.453"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M302.391 577.253 396.833 577.253"
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
                                transform="translate(306.837 510)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g202"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(306.837 523)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a201"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(306.837 536)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k201"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(306.837 549)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n201"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(306.837 562)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w201" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(306.837 574)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c2011"
                            d="M327.5 465C327.5 451.469 338.469 440.5 352 440.5 365.531 440.5 376.5 451.469 376.5 465 376.5 478.531 365.531 489.5 352 489.5 338.469 489.5 327.5 478.531 327.5 465Z"
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
                                        d="M350.689 458.933 351.622 458.933 352.944 459.167 354.033 459.633 354.889 460.178 355.9 461.189 356.522 462.122 356.989 463.367 357.144 464.067 357.144 465.933 356.833 467.1 356.211 468.344 355.589 469.122 355.044 469.667 353.956 470.367 352.711 470.833 351.933 470.989 350.378 470.989 349.133 470.678 348.278 470.289 347.422 469.744 346.567 468.967 346.022 468.189 345.478 467.1 345.167 465.856 345.089 464.922 345.244 463.678 345.556 462.667 346.178 461.5 347.033 460.567 347.656 460.022 348.978 459.322 350.144 459.011Z"
                                    />
                                    <path
                                        d="M351.156 445.089 352.011 445.089 353.489 445.322 354.967 445.789 356.211 446.411 357.144 447.033 357.922 447.733 358.856 448.667 359.711 449.911 360.333 451.156 360.8 452.556 361.033 453.722 361.111 454.344 361.111 455.822 360.878 457.3 360.489 458.622 359.867 459.944 359.089 461.033 358.933 461.033 358.311 459.944 357.378 458.856 356.522 458.078 355.433 457.378 354.267 456.833 352.944 456.444 351.156 456.211Z"
                                    />
                                    <path
                                        d="M338.4 460.878 338.789 460.956 340.967 462.2 342.522 463.133 342.6 463.289 342.444 464.922 342.6 466.556 342.989 468.033 343.533 469.2 343.533 469.433 341.356 470.678 339.489 471.767 335.444 474.1 334.122 474.878 333.889 474.878 333.189 473.4 332.8 472.078 332.644 471.144 332.567 469.822 332.722 468.344 332.956 467.256 333.5 465.778 334.044 464.767 334.744 463.756 335.678 462.744 336.533 461.967 337.933 461.111Z"
                                    />
                                    <path
                                        d="M358.7 469.433 359.089 469.511 360.956 470.6 367.022 474.1 368.344 474.878 368.189 475.267 367.644 476.044 366.944 476.9 366.4 477.444 365.233 478.3 363.989 479 362.511 479.544 361.344 479.778 360.878 479.856 358.544 479.856 357.378 479.622 356.133 479.233 354.811 478.611 353.878 477.989 353.878 473.322 354.578 473.011 355.9 472.311 356.833 471.611 357.922 470.522Z"
                                    />
                                    <path
                                        d="M341.667 450.067 343.378 450.067 344.856 450.3 346.489 450.844 347.811 451.544 348.433 451.933 348.433 456.678 347.033 457.3 345.944 458 345.089 458.7 344.544 459.244 343.611 460.567 343.144 460.411 341.822 459.633 335.756 456.133 334.044 455.122 333.967 454.967 334.511 454.111 335.367 453.1 335.989 452.478 337.156 451.622 338.244 451 339.722 450.456 340.578 450.222Z"
                                    />
                                    <path
                                        d="M345.167 471.533 345.478 471.611 346.644 472.467 347.967 473.089 349.211 473.478 350.144 473.633 351.078 473.711 351.156 473.789 351.156 484.833 349.989 484.833 348.433 484.522 347.111 484.056 345.711 483.278 344.7 482.5 343.922 481.8 343.144 480.867 342.367 479.622 341.744 478.222 341.356 476.744 341.2 475.344 341.2 474.489 341.278 473.789 343.222 472.7 344.544 471.922Z"
                                    />
                                    <path
                                        d="M368.267 455.044 368.422 455.044 368.967 456.133 369.433 457.533 369.667 458.778 369.744 460.333 369.589 461.733 369.278 463.056 368.656 464.533 368.111 465.467 367.489 466.322 366.633 467.256 365.467 468.189 364.456 468.811 363.756 469.122 361.811 468.033 359.944 466.944 359.711 466.789 359.867 465.389 359.867 464.222 360.567 463.522 361.578 462.2 362.278 461.033 362.978 459.556 363.522 457.844 364.222 457.378 366.167 456.289 368.033 455.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M470.297 500.14 563.405 500.14 563.405 512.94 470.297 512.94Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M470.297 512.94 563.405 512.94 563.405 525.74 470.297 525.74Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M470.297 525.74 563.405 525.74 563.405 538.54 470.297 538.54Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M470.297 538.54 563.405 538.54 563.405 551.34 470.297 551.34Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M470.297 551.34 563.405 551.34 563.405 564.14 470.297 564.14Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M470.297 564.14 563.405 564.14 563.405 576.94 470.297 576.94Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M469.63 512.94 564.072 512.94"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M469.63 525.74 564.072 525.74"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M469.63 538.54 564.072 538.54"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M469.63 551.34 564.072 551.34"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M469.63 564.14 564.072 564.14"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M470.297 499.473 470.297 577.607"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M563.405 499.473 563.405 577.607"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M469.63 500.14 564.072 500.14"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M469.63 576.94 564.072 576.94"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g228"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(474.076 510)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g229"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(474.076 523)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a228"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(474.076 536)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k228"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(474.076 549)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n228"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(474.076 561)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w228" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(474.076 574)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c2281"
                            d="M494.5 465C494.5 451.469 505.469 440.5 519 440.5 532.531 440.5 543.5 451.469 543.5 465 543.5 478.531 532.531 489.5 519 489.5 505.469 489.5 494.5 478.531 494.5 465Z"
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
                                        d="M517.689 458.933 518.622 458.933 519.944 459.167 521.033 459.633 521.889 460.178 522.9 461.189 523.522 462.122 523.989 463.367 524.144 464.067 524.144 465.933 523.833 467.1 523.211 468.344 522.589 469.122 522.044 469.667 520.956 470.367 519.711 470.833 518.933 470.989 517.378 470.989 516.133 470.678 515.278 470.289 514.422 469.744 513.567 468.967 513.022 468.189 512.478 467.1 512.167 465.856 512.089 464.922 512.244 463.678 512.556 462.667 513.178 461.5 514.033 460.567 514.656 460.022 515.978 459.322 517.144 459.011Z"
                                    />
                                    <path
                                        d="M518.156 445.089 519.011 445.089 520.489 445.322 521.967 445.789 523.211 446.411 524.144 447.033 524.922 447.733 525.856 448.667 526.711 449.911 527.333 451.156 527.8 452.556 528.033 453.722 528.111 454.344 528.111 455.822 527.878 457.3 527.489 458.622 526.867 459.944 526.089 461.033 525.933 461.033 525.311 459.944 524.378 458.856 523.522 458.078 522.433 457.378 521.267 456.833 519.944 456.444 518.156 456.211Z"
                                    />
                                    <path
                                        d="M505.4 460.878 505.789 460.956 507.967 462.2 509.522 463.133 509.6 463.289 509.444 464.922 509.6 466.556 509.989 468.033 510.533 469.2 510.533 469.433 508.356 470.678 506.489 471.767 502.444 474.1 501.122 474.878 500.889 474.878 500.189 473.4 499.8 472.078 499.644 471.144 499.567 469.822 499.722 468.344 499.956 467.256 500.5 465.778 501.044 464.767 501.744 463.756 502.678 462.744 503.533 461.967 504.933 461.111Z"
                                    />
                                    <path
                                        d="M525.7 469.433 526.089 469.511 527.956 470.6 534.022 474.1 535.344 474.878 535.189 475.267 534.644 476.044 533.944 476.9 533.4 477.444 532.233 478.3 530.989 479 529.511 479.544 528.344 479.778 527.878 479.856 525.544 479.856 524.378 479.622 523.133 479.233 521.811 478.611 520.878 477.989 520.878 473.322 521.578 473.011 522.9 472.311 523.833 471.611 524.922 470.522Z"
                                    />
                                    <path
                                        d="M508.667 450.067 510.378 450.067 511.856 450.3 513.489 450.844 514.811 451.544 515.433 451.933 515.433 456.678 514.033 457.3 512.944 458 512.089 458.7 511.544 459.244 510.611 460.567 510.144 460.411 508.822 459.633 502.756 456.133 501.044 455.122 500.967 454.967 501.511 454.111 502.367 453.1 502.989 452.478 504.156 451.622 505.244 451 506.722 450.456 507.578 450.222Z"
                                    />
                                    <path
                                        d="M512.167 471.533 512.478 471.611 513.644 472.467 514.967 473.089 516.211 473.478 517.144 473.633 518.078 473.711 518.156 473.789 518.156 484.833 516.989 484.833 515.433 484.522 514.111 484.056 512.711 483.278 511.7 482.5 510.922 481.8 510.144 480.867 509.367 479.622 508.744 478.222 508.356 476.744 508.2 475.344 508.2 474.489 508.278 473.789 510.222 472.7 511.544 471.922Z"
                                    />
                                    <path
                                        d="M535.267 455.044 535.422 455.044 535.967 456.133 536.433 457.533 536.667 458.778 536.744 460.333 536.589 461.733 536.278 463.056 535.656 464.533 535.111 465.467 534.489 466.322 533.633 467.256 532.467 468.189 531.456 468.811 530.756 469.122 528.811 468.033 526.944 466.944 526.711 466.789 526.867 465.389 526.867 464.222 527.567 463.522 528.578 462.2 529.278 461.033 529.978 459.556 530.522 457.844 531.222 457.378 533.167 456.289 535.033 455.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M810.504 500.477 903.612 500.477 903.612 513.277 810.504 513.277Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M810.504 513.277 903.612 513.277 903.612 526.077 810.504 526.077Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M810.504 526.077 903.612 526.077 903.612 538.877 810.504 538.877Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M810.504 538.877 903.612 538.877 903.612 551.677 810.504 551.677Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M810.504 551.677 903.612 551.677 903.612 564.477 810.504 564.477Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M810.504 564.477 903.612 564.477 903.612 577.277 810.504 577.277Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.837 513.277 904.279 513.277"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.837 526.077 904.279 526.077"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.837 538.877 904.279 538.877"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.837 551.677 904.279 551.677"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.837 564.477 904.279 564.477"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M810.504 499.811 810.504 577.944"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M903.612 499.811 903.612 577.944"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.837 500.477 904.279 500.477"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.837 577.277 904.279 577.277"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g12"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(814.283 510)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g13"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(814.283 523)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a12"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(814.283 536)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k12"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(814.283 549)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n12"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(814.283 562)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w12" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(814.283 574)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c1201"
                            d="M834.5 465C834.5 451.469 845.469 440.5 859 440.5 872.531 440.5 883.5 451.469 883.5 465 883.5 478.531 872.531 489.5 859 489.5 845.469 489.5 834.5 478.531 834.5 465Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlTwoAggregate1 ?>">
                            <g>
                            <g>
                                <g>
                                    <path
                                        d="M0 0 0.922222 0 2.2287 0.230556 3.30463 0.691667 4.15 1.22963 5.14907 2.2287 5.76389 3.15093 6.225 4.38056 6.3787 5.07222 6.3787 6.91667 6.0713 8.06944 5.45648 9.29907 4.84167 10.0676 4.3037 10.6056 3.22778 11.2972 1.99815 11.7583 1.22963 11.912-0.307407 11.912-1.53704 11.6046-2.38241 11.2204-3.22778 10.6824-4.07315 9.91389-4.61111 9.14537-5.14907 8.06944-5.45648 6.83981-5.53333 5.91759-5.37963 4.68796-5.07222 3.68889-4.45741 2.53611-3.61204 1.61389-2.99722 1.07593-1.69074 0.384259-0.537963 0.0768519Z"
                                        transform="matrix(1 0 0 1.01205 858.193 458.933)"
                                    />
                                    <path
                                        d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                        transform="matrix(1 0 0 1.01205 858.654 445.089)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                        transform="matrix(1 0 0 1.01205 846.05 460.878)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                        transform="matrix(1 0 0 1.01205 866.108 469.433)"
                                    />
                                    <path
                                        d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                        transform="matrix(1 0 0 1.01205 849.278 450.067)"
                                    />
                                    <path
                                        d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                        transform="matrix(1 0 0 1.01205 852.736 471.533)"
                                    />
                                    <path
                                        d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                        transform="matrix(1 0 0 1.01205 875.561 455.044)"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M963.446 500.019 1056.55 500.019 1056.55 512.819 963.446 512.819Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M963.446 512.819 1056.55 512.819 1056.55 525.619 963.446 525.619Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M963.446 525.619 1056.55 525.619 1056.55 538.419 963.446 538.419Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M963.446 538.419 1056.55 538.419 1056.55 551.219 963.446 551.219Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M963.446 551.219 1056.55 551.219 1056.55 564.019 963.446 564.019Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M963.446 564.019 1056.55 564.019 1056.55 576.819 963.446 576.819Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M962.779 512.819 1057.22 512.819"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M962.779 525.619 1057.22 525.619"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M962.779 538.419 1057.22 538.419"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M962.779 551.219 1057.22 551.219"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M962.779 564.019 1057.22 564.019"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M963.446 499.353 963.446 577.486"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1056.55 499.353 1056.55 577.486"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M962.779 500.019 1057.22 500.019"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M962.779 576.819 1057.22 576.819"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g39"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(967.226 510)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g40"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(967.226 523)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a39"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(967.226 536)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k39"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(967.226 548)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n39"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(967.226 561)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w39" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(967.226 574)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c3901"
                            d="M987.5 465C987.5 451.469 998.469 440.5 1012 440.5 1025.53 440.5 1036.5 451.469 1036.5 465 1036.5 478.531 1025.53 489.5 1012 489.5 998.469 489.5 987.5 478.531 987.5 465Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlTwoAggregate2 ?>">
                            <g>
                            <g>
                                <g>
                                    <path
                                        d="M1010.69 458.933 1011.62 458.933 1012.94 459.167 1014.03 459.633 1014.89 460.178 1015.9 461.189 1016.52 462.122 1016.99 463.367 1017.14 464.067 1017.14 465.933 1016.83 467.1 1016.21 468.344 1015.59 469.122 1015.04 469.667 1013.96 470.367 1012.71 470.833 1011.93 470.989 1010.38 470.989 1009.13 470.678 1008.28 470.289 1007.42 469.744 1006.57 468.967 1006.02 468.189 1005.48 467.1 1005.17 465.856 1005.09 464.922 1005.24 463.678 1005.56 462.667 1006.18 461.5 1007.03 460.567 1007.66 460.022 1008.98 459.322 1010.14 459.011Z"
                                    />
                                    <path
                                        d="M1011.16 445.089 1012.01 445.089 1013.49 445.322 1014.97 445.789 1016.21 446.411 1017.14 447.033 1017.92 447.733 1018.86 448.667 1019.71 449.911 1020.33 451.156 1020.8 452.556 1021.03 453.722 1021.11 454.344 1021.11 455.822 1020.88 457.3 1020.49 458.622 1019.87 459.944 1019.09 461.033 1018.93 461.033 1018.31 459.944 1017.38 458.856 1016.52 458.078 1015.43 457.378 1014.27 456.833 1012.94 456.444 1011.16 456.211Z"
                                    />
                                    <path
                                        d="M998.4 460.878 998.789 460.956 1000.97 462.2 1002.52 463.133 1002.6 463.289 1002.44 464.922 1002.6 466.556 1002.99 468.033 1003.53 469.2 1003.53 469.433 1001.36 470.678 999.489 471.767 995.444 474.1 994.122 474.878 993.889 474.878 993.189 473.4 992.8 472.078 992.644 471.144 992.567 469.822 992.722 468.344 992.956 467.256 993.5 465.778 994.044 464.767 994.744 463.756 995.678 462.744 996.533 461.967 997.933 461.111Z"
                                    />
                                    <path
                                        d="M1018.7 469.433 1019.09 469.511 1020.96 470.6 1027.02 474.1 1028.34 474.878 1028.19 475.267 1027.64 476.044 1026.94 476.9 1026.4 477.444 1025.23 478.3 1023.99 479 1022.51 479.544 1021.34 479.778 1020.88 479.856 1018.54 479.856 1017.38 479.622 1016.13 479.233 1014.81 478.611 1013.88 477.989 1013.88 473.322 1014.58 473.011 1015.9 472.311 1016.83 471.611 1017.92 470.522Z"
                                    />
                                    <path
                                        d="M1001.67 450.067 1003.38 450.067 1004.86 450.3 1006.49 450.844 1007.81 451.544 1008.43 451.933 1008.43 456.678 1007.03 457.3 1005.94 458 1005.09 458.7 1004.54 459.244 1003.61 460.567 1003.14 460.411 1001.82 459.633 995.756 456.133 994.044 455.122 993.967 454.967 994.511 454.111 995.367 453.1 995.989 452.478 997.156 451.622 998.244 451 999.722 450.456 1000.58 450.222Z"
                                    />
                                    <path
                                        d="M1005.17 471.533 1005.48 471.611 1006.64 472.467 1007.97 473.089 1009.21 473.478 1010.14 473.633 1011.08 473.711 1011.16 473.789 1011.16 484.833 1009.99 484.833 1008.43 484.522 1007.11 484.056 1005.71 483.278 1004.7 482.5 1003.92 481.8 1003.14 480.867 1002.37 479.622 1001.74 478.222 1001.36 476.744 1001.2 475.344 1001.2 474.489 1001.28 473.789 1003.22 472.7 1004.54 471.922Z"
                                    />
                                    <path
                                        d="M1028.27 455.044 1028.42 455.044 1028.97 456.133 1029.43 457.533 1029.67 458.778 1029.74 460.333 1029.59 461.733 1029.28 463.056 1028.66 464.533 1028.11 465.467 1027.49 466.322 1026.63 467.256 1025.47 468.189 1024.46 468.811 1023.76 469.122 1021.81 468.033 1019.94 466.944 1019.71 466.789 1019.87 465.389 1019.87 464.222 1020.57 463.522 1021.58 462.2 1022.28 461.033 1022.98 459.556 1023.52 457.844 1024.22 457.378 1026.17 456.289 1028.03 455.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M169.577 566.134 243.224 566.134 243.224 579.867 169.577 579.867Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M169.577 565.467 169.577 580.534"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M243.224 565.467 243.224 580.534"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M168.91 566.134 243.89 566.134"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M168.91 579.867 243.89 579.867"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g255"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(173.356 576)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M692.243 573.768 765.89 573.768 765.89 587.501 692.243 587.501Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M692.243 573.101 692.243 588.168"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M765.89 573.101 765.89 588.168"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M691.576 573.768 766.557 573.768"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M691.576 587.501 766.557 587.501"
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
                                transform="translate(696.023 584)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M8.50005 587C8.50005 581.753 12.7533 577.5 18.0001 577.5 23.2468 577.5 27.5001 581.753 27.5001 587 27.5001 592.247 23.2468 596.5 18.0001 596.5 12.7533 596.5 8.50005 592.247 8.50005 587Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M8.50005 609C8.50005 603.753 12.7533 599.5 18.0001 599.5 23.2468 599.5 27.5001 603.753 27.5001 609 27.5001 614.247 23.2468 618.5 18.0001 618.5 12.7533 618.5 8.50005 614.247 8.50005 609Z"
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
                            transform="translate(33.3013 589)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.2186 611)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M8 564.5C8 559.253 12.2533 555 17.5 555 22.7467 555 27 559.253 27 564.5 27 569.747 22.7467 574 17.5 574 12.2533 574 8 569.747 8 564.5Z"
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
                            transform="translate(33.2186 567)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.4835 544)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.2187 521)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip20)"
                            transform="matrix(0.000104987 0 0 0.000104987 13 509)"
                        >
                            <g clip-path="url(#clip21)" transform="matrix(1.05 0 0 1 -0.0078125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip22)"
                            transform="matrix(0.000104987 0 0 0.000104987 13 531)"
                        >
                            <g clip-path="url(#clip23)" transform="matrix(1.05 0 0 1 -0.0078125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</div>
<div class="col-auto">
    <div class="card mt-2" style="backdrop-filter: blur(5px);">
        <div class="card-body">
            <div class="row g-1 g-sm-3 lh-1">
                <canvas id="myLineChart" width="1500" height="200"></canvas>
            </div>
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
    <?= $dashboard->GesDashboard([$id], "chartdiv2")?>

    <?php
    $today = date('Y-m-d');
    $yesterday = date("Y-m-d", strtotime("yesterday"));
    ?>
    const dataDay8 = <?= $dashboard->YesterdayHourGes($id) ?>;
    const dataToday8 = <?= $dashboard->TodayHourGes($id) ?>;
    const dataDay9 = <?= $dashboard->YesterdayHourGes($idTwo) ?>;
    const dataToday9 = <?= $dashboard->TodayHourGes($idTwo) ?>;
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
                    label: today + "(ГЭС-8А)",
                    data: dataToday8,
                    borderColor: '#CD5C5C',
                    backgroundColor: '#CD5C5C',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: '#CD5C5C',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: yesterday + "(ГЭС-8А)",
                    data: dataDay8,
                    borderColor: '#5A9',
                    backgroundColor: '#5A9', // Transparent fill
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: '#5A9',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: today + "(ГЭС-9А)",
                    data: dataToday9,
                    borderColor: '#0D98BA',
                    backgroundColor: '#0D98BA',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: '#0D98BA',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: yesterday + "(ГЭС-9А)",
                    data: dataDay9,
                    borderColor: '#F4A460',
                    backgroundColor: '#F4A460', // Transparent fill
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: '#F4A460',
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
        fetch('/kfk/server9', { signal: controller.signal })
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
                    // if (item.id === 25) {
                    //     const value = document.getElementById("g25");
                    //     value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                    //     if (item.value !== 0) {
                    //         trueAnimation(174);
                    //     } else {
                    //         falseAnimation(174);
                    //     }
                    // } else if (item.id === 26) {
                    //     const value = document.getElementById("g26");
                    //     value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                    //     if (item.value !== 0) {
                    //         trueAnimation(174);
                    //     } else {
                    //         falseAnimation(174);
                    //     }
                    // }
                    // else
                        if (item.id === 93) {
                        const plus = document.getElementById("g93Plus");
                        const minus = document.getElementById("g93Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(9303);
                            trueAnimation(9304);
                            trueAnimation(9305);
                        } else {
                            falseAnimation(9303);
                            falseAnimation(9304);
                            falseAnimation(9305);
                        }
                    }  else if (item.id === 282) {
                        const plus = document.getElementById("g282Plus");
                        const minus = document.getElementById("g282Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(93);
                            trueAnimation(9301);
                            trueAnimation(9302);
                        } else {
                            falseAnimation(93);
                            falseAnimation(9301);
                            falseAnimation(9302);
                        }
                    } else if (item.id === 147) {
                        const plus = document.getElementById("g147Plus");
                        const minus = document.getElementById("g147Minus");

                        const plusW = document.getElementById("w147Plus");
                        const minusW = document.getElementById("w147Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                            plusW.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minusW.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                            minusW.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plusW.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(147);
                            trueAnimation(1471);
                            trueAnimation(174);
                        } else {
                            falseAnimation(147);
                            falseAnimation(1471);
                            falseAnimation(174);
                        }
                    }
                    else if(item.id === 96) {
                        const value = document.getElementById("g96");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 285) {
                        const value = document.getElementById("g285");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }
                    else if(item.id === 255) {
                        const value = document.getElementById("g255");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(255);
                            trueAnimation(2551);
                            trueAnimation(2552);
                        } else {
                            falseAnimation(255);
                            falseAnimation(2551);
                            falseAnimation(2552);
                        }
                    } else if(item.id === 66) {
                        const value = document.getElementById("g66");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(66);
                            trueAnimation(6601);
                            trueAnimation(6602);
                        } else {
                            falseAnimation(66);
                            falseAnimation(6601);
                            falseAnimation(6602);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 12) {
                        const value = document.getElementById("g12");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a12");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 3 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(12);
                            trueAnimation(1201);
                        } else {
                            falseAnimation(12);
                            falseAnimation(1201);
                        }
                    } else if(item.id === 13) {
                        const value = document.getElementById("g13");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 14) {
                        const value = document.getElementById("k12");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 15) {
                        const value = document.getElementById("n12");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 16) {
                        const value = document.getElementById("w12");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 39) {
                        const value = document.getElementById("g39");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a39");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 3 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(39);
                            trueAnimation(3901);
                        } else {
                            falseAnimation(39);
                            falseAnimation(3901);
                        }
                    } else if(item.id === 40) {
                        const value = document.getElementById("g40");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 41) {
                        const value = document.getElementById("k39");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 42) {
                        const value = document.getElementById("n39");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 43) {
                        const value = document.getElementById("w39");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 201) {
                        const value = document.getElementById("g201");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a201");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 3 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(201);
                            trueAnimation(2011);
                        } else {
                            falseAnimation(201);
                            falseAnimation(2011);
                        }
                    } else if(item.id === 202) {
                        const value = document.getElementById("g202");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
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
                    //Aggregate-4
                    else if(item.id === 228) {
                        const value = document.getElementById("g228");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a228");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 3 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(228);
                            trueAnimation(2281);
                        } else {
                            falseAnimation(228);
                            falseAnimation(2281);
                        }
                    } else if(item.id === 229) {
                        const value = document.getElementById("g229");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 230) {
                        const value = document.getElementById("k228");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 231) {
                        const value = document.getElementById("n228");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 232) {
                        const value = document.getElementById("w228");
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