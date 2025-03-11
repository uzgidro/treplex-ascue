<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$id = 33;

$this->title = 'Оқ-қовоқ ГЭС (ГЭС-15)';

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
        <li class="breadcrumb-item"><a href="<?= Url::to(['qodiriya/index']) ?>">"Қодирия ГЭСлар каскади" Филиали</a></li>
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
                            <rect x="0" y="0" width="1280" height="720" />
                        </clipPath>
                        <clipPath id="clip1">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOZJREFUSEvtl1EOhCAMRCuriKKu9z/tBhRpp3VP0PdJX6LOQCJEnSFIPmzGGEELYUSlMqEWJlQq7rlXcM+9gnvuFdxzr+Ce+SMWZ9RCin28rDcZrRBCbsONcPQC7bhishGtuGZwRKLRejGgBvTFVcV+fbIORJJacv+fnM+WoW6CMzSNaMEZY+0axQOnD5l1R3Ti+OHLNXqtZZYaUUKjUoqQ2LUYOxVvC4W7CIneEK0IiQon2/cKVQsrQiJrUZF0eDiyCAmvBYqQ9HAWHElaOLoISavl2ZtvXKfFLEJSTotdhCQmdiIefgYCEnC+WqtNAAAAAElFTkSuQmCC"
                            preserveAspectRatio="none"
                            id="img2"
                        ></image>
                        <clipPath id="clip3">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip4">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbBAMAAAACbYG8AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAPUExURQAAACPbFSHaFCLbFCDbFHf/K8sAAAAFdFJOUwD/v38/zK3xaQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAKBJREFUSMft1cERgzAMRFE2oYAsUAApIR04/TeFhSIh2YfknLFOzBv/AdsHpsmGD3uCG7j0+CJLh6T3uOo6LT4FS8ZZzHrE2nrEmtwjam09Uv3p4R8ZlireHbcLvdYeudb+xFvA1fAdkIbRpEd+TZ1FMdXSo62lR1tLj/Ny8hR0de3R1XVgx5uRP6/Mx7SHk/dNfb2jgQMHDvwztJ/UqngAbPs4v0Sv6eMAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img5"
                        ></image>
                        <clipPath id="clip6">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip8">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip9">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip13">
                            <rect x="9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip14">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip15">
                            <rect x="0" y="-1.16415e-10" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip16">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="76200" height="190500" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="76200" height="190500" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="-2.91038e-11" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img24"
                        ></image>
                        <clipPath id="clip25">
                            <rect x="0" y="0" width="1173079" height="571500" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip27">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip28">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip29">
                            <rect x="0" y="0" width="47625" height="111125" />
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
                            d="M1.49999-0.00482149 1.76834 83.4793-1.23165 83.4889-1.49999 0.00482149ZM-4.49998 0.0144645C-4.50797-2.4708-2.49973-4.49199-0.0144645-4.49998 2.4708-4.50797 4.49199-2.49973 4.49998-0.0144645 4.50797 2.4708 2.49973 4.49199 0.0144645 4.49998-2.4708 4.50797-4.49199 2.49973-4.49998 0.0144645Z"
                            fill="#548235"
                            transform="matrix(-1 0 0 1 508.768 380.5)"
                        />
                        <path
                            d="M1.5-2.60514e-06 1.5001 60.4498-1.49989 60.4498-1.5 2.60514e-06ZM-4.5 7.81543e-06C-4.5-2.48527-2.48529-4.5-7.81543e-06-4.5 2.48527-4.5 4.5-2.48529 4.5-7.81543e-06 4.5 2.48527 2.48529 4.5 7.81543e-06 4.5-2.48527 4.5-4.5 2.48529-4.5 7.81543e-06Z"
                            fill="#548235"
                            transform="matrix(1 0 0 -1 244.5 379.95)"
                        />
                        <path
                            d="M0 0 0.000104987 84.7613"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 244.5 464.261)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(260.198 355)"
                        >
                            В6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(272.698 355)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(276.198 355)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(282.698 355)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(286.198 355)"
                        >
                            1
                        </text>
                        <rect
                            id="c791"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#546600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 234.5 446.5)"
                        />
                        <path
                            d="M0 0 414.265 0.167664"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 547.765 380.5)"
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
                            font-weight="400"
                            font-size="11"
                            transform="translate(139.096 393)"
                        >
                            КРУН 6 кВ
                        </text>
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#546600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 234.5 362.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(259.615 247)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(266.782 247)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(270.282 247)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(280.949 247)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(284.449 247)"
                        >
                            Т1
                        </text>
                        <path
                            d="M368 463.955 368 380.5 371 380.5 371 463.955ZM365 380.5C365 378.015 367.015 376 369.5 376 371.985 376 374 378.015 374 380.5 374 382.985 371.985 385 369.5 385 367.015 385 365 382.985 365 380.5Z"
                            fill="#548235"
                        />
                        <rect
                            id="c806"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#546600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 360.5 447.5)"
                        />
                        <rect
                            id="c821"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#546600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 499.5 446.5)"
                        />
                        <path id="c8212"
                            d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 491.5 521.5)"
                        />
                        <path id="c8211"
                            d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                            stroke="#546600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 491.5 497.5)"
                        />
                        <path
                            d="M508.5 521.5 508.5 556.197"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M903 446.5 903 469.966 900 469.966 900 446.5ZM901.5 469.966 906 466.966 901.5 475.966 897 466.966Z"
                            fill="#767171"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(257.153 440)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(264.32 440)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(267.82 440)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(273.986 440)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(277.486 440)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(383.609 440)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(390.776 440)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(394.276 440)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(400.443 440)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(403.943 440)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(522.439 440)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(529.606 440)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(533.106 440)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(546.772 440)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(550.272 440)"
                        >
                            1
                        </text>
                        <path
                            d="M243.072 264.742 243 205.502 246 205.498 246.072 264.738ZM240 205.506C239.997 203.02 242.009 201.003 244.495 201 246.98 200.997 248.997 203.009 249 205.495 249.003 207.98 246.991 209.997 244.506 210 242.02 210.003 240.003 207.991 240 205.506Z"
                            fill="#663300"
                        />
                        <path
                            d="M644.666 205.5 60.5001 205.5"
                            stroke="#663300"
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
                            transform="translate(115.773 198)"
                        >
                            С.Ш 35 кВ
                        </text>
                        <path
                            d="M273.268 160.467 273.062 140.515 276.062 140.484 276.268 160.436ZM274.562 140.5 270.093 143.546 274.5 134.5 279.093 143.453Z"
                            fill="#663300"
                        />
                        <path
                            d="M0 0 0.000104987 60.0134"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 633.5 382.513)"
                        />
                        <path
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#546600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 618.5 322.5)"
                        />
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 618.5 297.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(645.848 355)"
                        >
                            В6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(658.348 355)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(661.848 355)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(668.348 355)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(671.848 355)"
                        >
                            2
                        </text>
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#546600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 624.5 362.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(647.088 248)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(654.255 248)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(657.755 248)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(668.422 248)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(671.922 248)"
                        >
                            Т2
                        </text>
                        <path
                            d="M631.481 267.511 631 205.512 634 205.488 634.481 267.487ZM628 205.535C627.981 203.05 629.98 201.019 632.465 201 634.95 200.981 636.981 202.98 637 205.465 637.019 207.95 635.02 209.981 632.535 210 630.05 210.019 628.019 208.02 628 205.535Z"
                            fill="#663300"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1180.7 198)"
                        >
                            КРУН 6 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(254.834 129)"
                        >
                            Л ЁКУБ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(400.28 130)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(407.446 130)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(410.946 130)"
                        >
                            15
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(421.613 130)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(425.113 130)"
                        >
                            Твердый
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(538.655 127)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(545.822 127)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(549.322 127)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(559.988 127)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(563.488 127)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(583.822 127)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(587.322 127)"
                        >
                            15
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(597.988 127)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(601.488 127)"
                        >
                            ГЭС
                        </text>
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#0070C0"
                            stroke-width="2"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 264 178)"
                        />
                        <path
                            d="M1.5-5.9649e-06 1.5001 26.4011-1.49989 26.4012-1.5 5.9649e-06ZM-4.5 1.78947e-05C-4.50001-2.48526-2.4853-4.49999-1.78947e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.78947e-05 4.50001 2.48526 2.4853 4.49999 1.78947e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.78947e-05Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 274.5 205.901)"
                        />
                        <path
                            d="M1.5-6.2374e-06 1.50008 19.2478-1.49992 19.2478-1.5 6.2374e-06ZM8.00373e-05 19.2478 4.50007 16.2477 0.000104987 25.2478-4.49993 16.2478Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 434.5 159.748)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#0070C0"
                            stroke-width="2"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 425 178)"
                        />
                        <path
                            d="M1.49992-0.0155384 1.76827 25.888-1.23157 25.9191-1.49992 0.0155384ZM-4.49976 0.0466151C-4.5255-2.43853-2.53176-4.47401-0.0466151-4.49976 2.43853-4.5255 4.47401-2.53176 4.49976-0.0466151 4.5255 2.43853 2.53176 4.47401 0.0466151 4.49976-2.43853 4.5255-4.47401 2.53176-4.49976 0.0466151Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 434.5 205.404)"
                        />
                        <path
                            d="M1.5-6.2374e-06 1.50008 19.2478-1.49992 19.2478-1.5 6.2374e-06ZM8.00373e-05 19.2478 4.50007 16.2477 0.000104987 25.2478-4.49993 16.2478Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 579.5 159.748)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#0070C0"
                            stroke-width="2"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 570 178)"
                        />
                        <path
                            d="M1.5-5.62455e-06 1.5001 27.9987-1.49989 27.9987-1.5 5.62455e-06ZM-4.5 1.68737e-05C-4.50001-2.48526-2.4853-4.49999-1.68737e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.68737e-05 4.50001 2.48526 2.4853 4.49999 1.68737e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.68737e-05Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 580.5 205.499)"
                        />
                        <text
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(290.822 172)"
                        >
                            В
                        </text>
                        <text
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(297.989 172)"
                        >
                            -
                        </text>
                        <text
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(301.489 172)"
                        >
                            Ё
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(448.18 173)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(455.347 173)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(458.847 173)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(593.753 171)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(600.919 171)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(604.419 171)"
                        >
                            10
                        </text>
                        <path
                            d="M0 0 105.893 1.04661"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 632.5 381.547)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1133.8 128)"
                        >
                            Ф.
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1147.63 128)"
                        >
                            Абдували
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(961.846 130)"
                        >
                            Ф. Низом
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(789.317 129)"
                        >
                            Ф. Д
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(810.483 129)"
                        >
                            ом отдых
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1179.24 171)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1186.41 171)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1189.91 171)"
                        >
                            А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(997.716 173)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1004.88 173)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1008.38 173)"
                        >
                            Низом
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(838.061 173)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(845.228 173)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(848.728 173)"
                        >
                            Д/О
                        </text>
                        <path
                            d="M0 0 287.204 0.823202"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1071.7 380.5)"
                        />
                        <rect
                            id="c942"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 892.5 446.5)"
                        />
                        <path
                            d="M903 380.5 903 427.463 900 427.463 900 380.5ZM897 380.5C897 378.015 899.015 376 901.5 376 903.985 376 906 378.015 906 380.5 906 382.985 903.985 385 901.5 385 899.015 385 897 382.985 897 380.5Z"
                            fill="#767171"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(916 440)"
                        >
                            В-СН-04
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1044.2 375)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1049.53 375)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1053.03 375)"
                        >
                            С
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1060.2 375)"
                        >
                            Ш
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1071.03 375)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1074.53 375)"
                        >
                            0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1090.53 375)"
                        >
                            кВ
                        </text>
                        <path
                            d="M1.5-2.44127e-06 1.5001 64.5075-1.49989 64.5075-1.5 2.44127e-06ZM-4.5 7.3238e-06C-4.5-2.48527-2.48529-4.5-7.3238e-06-4.5 2.48527-4.5 4.5-2.48529 4.5-7.3238e-06 4.5 2.48527 2.48529 4.5 7.3238e-06 4.5-2.48527 4.5-4.5 2.48529-4.5 7.3238e-06Z"
                            fill="#767171"
                            transform="matrix(1 0 0 -1 1012.5 380.008)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 1002.5 362.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(1025 355)"
                        >
                            В-ТП-154
                        </text>
                        <path
                            d="M1.5-6.94444e-06 1.50008 16.6772-1.49992 16.6772-1.5 6.94444e-06ZM7.72091e-05 16.6772 4.50006 13.6771 0.000104987 22.6772-4.49994 13.6772Z"
                            fill="#990099"
                            transform="matrix(1 0 0 -1 1012.5 262.177)"
                        />
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 997.5 315.5)"
                        />
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 997.5 291.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(976.872 233)"
                        >
                            Л.Дархон
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1023.04 233)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1036.37 233)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(555.071 18)"
                        >
                            ОҚ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(587.238 18)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(594.404 18)"
                        >
                            ҚОВОҚ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(672.904 18)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(680.071 18)"
                        >
                            2 ГЭС (15
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(773.238 18)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(780.404 18)"
                        >
                            ГЭС)
                        </text>
                        <path
                            d="M1227.89 204.686 726.5 204.5"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-6.2374e-06 1.50008 19.2478-1.49992 19.2478-1.5 6.2374e-06ZM8.00373e-05 19.2478 4.50007 16.2477 0.000104987 25.2478-4.49993 16.2478Z"
                            fill="#548235"
                            transform="matrix(1 0 0 -1 824.5 159.748)"
                        />
                        <rect
                            id="c902"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#172C51"
                            stroke-width="2"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 815 179)"
                        />
                        <path
                            d="M823.25 206.21 823 179.514 826 179.486 826.25 206.182ZM829.25 206.154C829.273 208.639 827.277 210.673 824.792 210.696 822.307 210.719 820.273 208.724 820.25 206.239 820.227 203.753 822.223 201.72 824.708 201.697 827.193 201.673 829.227 203.669 829.25 206.154Z"
                            fill="#548235"
                        />
                        <path
                            d="M1.5-6.2374e-06 1.50008 19.2478-1.49992 19.2478-1.5 6.2374e-06ZM8.00373e-05 19.2478 4.50007 16.2477 0.000104987 25.2478-4.49993 16.2478Z"
                            fill="#548235"
                            transform="matrix(1 0 0 -1 984.5 159.748)"
                        />
                        <rect
                            id="c925"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#172C51"
                            stroke-width="2"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 975 179)"
                        />
                        <path
                            d="M1.5-6.06818e-06 1.5001 25.9518-1.49989 25.9518-1.5 6.06818e-06ZM-4.5 1.82045e-05C-4.50001-2.48526-2.4853-4.49999-1.82045e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.82045e-05 4.50001 2.48526 2.4853 4.49999 1.82045e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.82045e-05Z"
                            fill="#548235"
                            transform="matrix(1 0 0 -1 984.5 205.452)"
                        />
                        <path
                            d="M1.5-6.2374e-06 1.50008 19.2478-1.49992 19.2478-1.5 6.2374e-06ZM8.00373e-05 19.2478 4.50007 16.2477 0.000104987 25.2478-4.49993 16.2478Z"
                            fill="#548235"
                            transform="matrix(1 0 0 -1 1163.5 158.748)"
                        />
                        <rect
                            id="c881"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#172C51"
                            stroke-width="2"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1154 178)"
                        />
                        <path
                            d="M1.5-6.06818e-06 1.5001 25.9518-1.49989 25.9518-1.5 6.06818e-06ZM-4.5 1.82045e-05C-4.50001-2.48526-2.4853-4.49999-1.82045e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.82045e-05 4.50001 2.48526 2.4853 4.49999 1.82045e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.82045e-05Z"
                            fill="#548235"
                            transform="matrix(1 0 0 -1 1163.5 204.452)"
                        />
                        <path
                            d="M1.5-8.8977e-07 1.5001 176.99-1.49989 176.99-1.5 8.8977e-07ZM4.5001 176.99C4.50011 179.475 2.48539 181.49 0.000107656 181.49-2.48517 181.49-4.49989 179.475-4.4999 176.99-4.4999 174.505-2.48518 172.49 0.000102318 172.49 2.48538 172.49 4.5001 174.505 4.5001 176.99Z"
                            fill="#548235"
                            transform="matrix(1 0 0 -1 737.5 381.49)"
                        />
                        <path
                            d="M0 0 307.428 0.52336"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 506.5 556.023)"
                        />
                        <path
                            d="M814 381.492 814.968 555.99 811.968 556.007 811 381.508ZM808 381.525C807.986 379.04 809.99 377.014 812.475 377 814.96 376.986 816.986 378.99 817 381.475 817.014 383.96 815.01 385.986 812.525 386 810.04 386.014 808.014 384.01 808 381.525Z"
                            fill="#767171"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(208.608 275)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(215.775 275)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(219.275 275)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(189.608 288)"
                        >
                            6/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(211.275 288)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(174.275 301)"
                        >
                            12000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(203.608 301)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(163.608 314)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(180.775 314)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(184.275 314)"
                        >
                            12000/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(958.162 273)"
                        >
                            ТП
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(973.662 273)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(977.162 273)"
                        >
                            154
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(950.162 286)"
                        >
                            10/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(979.829 286)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(953.495 299)"
                        >
                            160
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(972.162 299)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(956.495 312)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(973.662 312)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(977.162 312)"
                        >
                            160
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(198.52 468)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(205.354 468)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(208.854 468)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(192.854 481)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(200.854 481)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(175.854 494)"
                        >
                            4,5 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(180.187 507)"
                        >
                            АТУ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(202.854 507)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(206.354 507)"
                        >
                            У
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(398.354 468)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(405.188 468)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(408.688 468)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(398.354 481)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(406.354 481)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(398.354 494)"
                        >
                            4,5 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(398.354 507)"
                        >
                            АТУ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(421.021 507)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(424.521 507)"
                        >
                            У
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(526.763 475)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(541.597 475)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(545.097 475)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(529.43 488)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(534.763 488)"
                        >
                            /0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(553.763 488)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(526.763 501)"
                        >
                            200
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(545.43 501)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(526.763 514)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(543.93 514)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(547.43 514)"
                        >
                            200/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(597.729 279)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(604.896 279)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(608.396 279)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(578.729 292)"
                        >
                            35/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(600.396 292)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(568.729 305)"
                        >
                            1600
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(592.729 305)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(558.063 318)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(575.229 318)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(578.729 318)"
                        >
                            1600/35
                        </text>
                        <path
                            d="M196.698 517.406 289.806 517.406 289.806 530.206 196.698 530.206Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.698 530.206 289.806 530.206 289.806 543.006 196.698 543.006Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.698 543.006 289.806 543.006 289.806 555.807 196.698 555.807Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.698 555.807 289.806 555.807 289.806 568.607 196.698 568.607Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.698 568.607 289.806 568.607 289.806 581.406 196.698 581.406Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.698 581.406 289.806 581.406 289.806 594.206 196.698 594.206Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.031 530.206 290.473 530.206"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.031 543.006 290.473 543.006"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.031 555.807 290.473 555.807"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.031 568.607 290.473 568.607"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.031 581.406 290.473 581.406"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.698 516.74 196.698 594.873"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M289.806 516.74 289.806 594.873"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.031 517.406 290.473 517.406"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.031 594.206 290.473 594.206"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g791"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(200.477 527)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g792"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(200.477 540)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a791"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(200.477 553)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k791"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(200.477 566)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n791"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(200.477 579)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w791" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(200.477 591)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M326.057 518.072 419.166 518.072 419.166 530.872 326.057 530.872Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M326.057 530.872 419.166 530.872 419.166 543.672 326.057 543.672Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M326.057 543.672 419.166 543.672 419.166 556.472 326.057 556.472Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M326.057 556.472 419.166 556.472 419.166 569.272 326.057 569.272Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M326.057 569.272 419.166 569.272 419.166 582.072 326.057 582.072Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M326.057 582.072 419.166 582.072 419.166 594.872 326.057 594.872Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M325.391 530.872 419.832 530.872"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M325.391 543.672 419.832 543.672"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M325.391 556.472 419.832 556.472"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M325.391 569.272 419.832 569.272"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M325.391 582.072 419.832 582.072"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M326.057 517.405 326.057 595.539"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M419.166 517.405 419.166 595.539"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M325.391 518.072 419.832 518.072"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M325.391 594.872 419.832 594.872"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g806"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(329.837 528)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g807"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(329.837 541)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a806"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(329.837 554)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k806"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(329.837 566)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n806"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(329.837 579)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w806" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(329.837 592)"
                            >
                                Qвода
                            </text>
                        </g>
                        <rect
                            id="c836"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 264.5 179.5)"
                        />
                        <rect
                            id="c851"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 425.5 179.5)"
                        />
                        <rect
                            id="c866"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 570.5 179.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(290.822 172)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(297.989 172)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(301.489 172)"
                        >
                            Ё
                        </text>
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            transform="matrix(1 0 0 -1 815.5 179.5)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            transform="matrix(1 0 0 -1 975.5 179.5)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            transform="matrix(1 0 0 -1 1154.5 178.5)"
                        />
                        <path
                            d="M234.713 88.3116 318.312 88.3116 318.312 101.903 234.713 101.903Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M234.713 101.903 318.312 101.903 318.312 115.494 234.713 115.494Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M234.046 101.903 318.979 101.903"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M234.713 87.6449 234.713 116.161"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M318.312 87.6449 318.312 116.161"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M234.046 88.3116 318.979 88.3116"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M234.046 115.494 318.979 115.494"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g836Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(238.492 98)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g836Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(238.492 112)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip1)"
                            transform="matrix(0.000104987 0 0 0.000104987 310 89)"
                        >
                            <g
                                clip-path="url(#clip3)"
                                transform="matrix(1 0 0 1.02857 -0.25 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip4)"
                            transform="matrix(0.000104987 0 0 0.000104987 311 103)"
                        >
                            <g clip-path="url(#clip6)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M392.87 88.4299 476.47 88.4299 476.47 102.021 392.87 102.021Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M392.87 102.021 476.47 102.021 476.47 115.612 392.87 115.612Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M392.203 102.021 477.136 102.021"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M392.87 87.7633 392.87 116.279"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M476.47 87.7633 476.47 116.279"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M392.203 88.4299 477.136 88.4299"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M392.203 115.612 477.136 115.612"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g851Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(396.649 98)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g851Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(396.649 112)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip7)"
                            transform="matrix(0.000104987 0 0 0.000104987 468 89)"
                        >
                            <g clip-path="url(#clip8)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip9)"
                            transform="matrix(0.000104987 0 0 0.000104987 469 103)"
                        >
                            <g clip-path="url(#clip10)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M537.216 88.3717 620.815 88.3717 620.815 101.963 537.216 101.963Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M537.216 101.963 620.815 101.963 620.815 115.554 537.216 115.554Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M536.549 101.963 621.482 101.963"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M537.216 87.705 537.216 116.221"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M620.815 87.705 620.815 116.221"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M536.549 88.3717 621.482 88.3717"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M536.549 115.554 621.482 115.554"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g866Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(540.995 98)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g866Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(540.995 112)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip11)"
                            transform="matrix(0.000104987 0 0 0.000104987 613 89)"
                        >
                            <g clip-path="url(#clip12)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip13)"
                            transform="matrix(0.000104987 0 0 0.000104987 613 103)"
                        >
                            <g clip-path="url(#clip14)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M784.563 95.1469 868.162 95.1469 868.162 108.738 784.563 108.738Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M784.563 94.4802 784.563 109.405"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M868.162 94.4802 868.162 109.405"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M783.896 95.1469 868.829 95.1469"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M783.896 108.738 868.829 108.738"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g902"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(788.342 105)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip15)"
                            transform="matrix(0.000104987 0 0 0.000104987 860 96)"
                        >
                            <g clip-path="url(#clip16)" transform="matrix(1.16667 0 0 1 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#546600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 229.5 319.5)"
                        />
                        <path
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 229.5 295.5)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 234.5 251.5)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 623.5 252.5)"
                        />
                        <path id="c7911"
                            d="M220.5 487C220.5 473.469 231.469 462.5 245 462.5 258.531 462.5 269.5 473.469 269.5 487 269.5 500.531 258.531 511.5 245 511.5 231.469 511.5 220.5 500.531 220.5 487Z"
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
                                            d="M244.689 480.933 245.622 480.933 246.944 481.167 248.033 481.633 248.889 482.178 249.9 483.189 250.522 484.122 250.989 485.367 251.144 486.067 251.144 487.933 250.833 489.1 250.211 490.344 249.589 491.122 249.044 491.667 247.956 492.367 246.711 492.833 245.933 492.989 244.378 492.989 243.133 492.678 242.278 492.289 241.422 491.744 240.567 490.967 240.022 490.189 239.478 489.1 239.167 487.856 239.089 486.922 239.244 485.678 239.556 484.667 240.178 483.5 241.033 482.567 241.656 482.022 242.978 481.322 244.144 481.011Z"
                                        />
                                        <path
                                            d="M245.156 467.089 246.011 467.089 247.489 467.322 248.967 467.789 250.211 468.411 251.144 469.033 251.922 469.733 252.856 470.667 253.711 471.911 254.333 473.156 254.8 474.556 255.033 475.722 255.111 476.344 255.111 477.822 254.878 479.3 254.489 480.622 253.867 481.944 253.089 483.033 252.933 483.033 252.311 481.944 251.378 480.856 250.522 480.078 249.433 479.378 248.267 478.833 246.944 478.444 245.156 478.211Z"
                                        />
                                        <path
                                            d="M232.4 482.878 232.789 482.956 234.967 484.2 236.522 485.133 236.6 485.289 236.444 486.922 236.6 488.556 236.989 490.033 237.533 491.2 237.533 491.433 235.356 492.678 233.489 493.767 229.444 496.1 228.122 496.878 227.889 496.878 227.189 495.4 226.8 494.078 226.644 493.144 226.567 491.822 226.722 490.344 226.956 489.256 227.5 487.778 228.044 486.767 228.744 485.756 229.678 484.744 230.533 483.967 231.933 483.111Z"
                                        />
                                        <path
                                            d="M252.7 491.433 253.089 491.511 254.956 492.6 261.022 496.1 262.344 496.878 262.189 497.267 261.644 498.044 260.944 498.9 260.4 499.444 259.233 500.3 257.989 501 256.511 501.544 255.344 501.778 254.878 501.856 252.544 501.856 251.378 501.622 250.133 501.233 248.811 500.611 247.878 499.989 247.878 495.322 248.578 495.011 249.9 494.311 250.833 493.611 251.922 492.522Z"
                                        />
                                        <path
                                            d="M235.667 472.067 237.378 472.067 238.856 472.3 240.489 472.844 241.811 473.544 242.433 473.933 242.433 478.678 241.033 479.3 239.944 480 239.089 480.7 238.544 481.244 237.611 482.567 237.144 482.411 235.822 481.633 229.756 478.133 228.044 477.122 227.967 476.967 228.511 476.111 229.367 475.1 229.989 474.478 231.156 473.622 232.244 473 233.722 472.456 234.578 472.222Z"
                                        />
                                        <path
                                            d="M239.167 493.533 239.478 493.611 240.644 494.467 241.967 495.089 243.211 495.478 244.144 495.633 245.078 495.711 245.156 495.789 245.156 506.833 243.989 506.833 242.433 506.522 241.111 506.056 239.711 505.278 238.7 504.5 237.922 503.8 237.144 502.867 236.367 501.622 235.744 500.222 235.356 498.744 235.2 497.344 235.2 496.489 235.278 495.789 237.222 494.7 238.544 493.922Z"
                                        />
                                        <path
                                            d="M262.267 477.044 262.422 477.044 262.967 478.133 263.433 479.533 263.667 480.778 263.744 482.333 263.589 483.733 263.278 485.056 262.656 486.533 262.111 487.467 261.489 488.322 260.633 489.256 259.467 490.189 258.456 490.811 257.756 491.122 255.811 490.033 253.944 488.944 253.711 488.789 253.867 487.389 253.867 486.222 254.567 485.522 255.578 484.2 256.278 483.033 256.978 481.556 257.522 479.844 258.222 479.378 260.167 478.289 262.033 477.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c8061"
                            d="M345.5 488C345.5 474.469 356.469 463.5 370 463.5 383.531 463.5 394.5 474.469 394.5 488 394.5 501.531 383.531 512.5 370 512.5 356.469 512.5 345.5 501.531 345.5 488Z"
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
                                            d="M368.689 481.933 369.622 481.933 370.944 482.167 372.033 482.633 372.889 483.178 373.9 484.189 374.522 485.122 374.989 486.367 375.144 487.067 375.144 488.933 374.833 490.1 374.211 491.344 373.589 492.122 373.044 492.667 371.956 493.367 370.711 493.833 369.933 493.989 368.378 493.989 367.133 493.678 366.278 493.289 365.422 492.744 364.567 491.967 364.022 491.189 363.478 490.1 363.167 488.856 363.089 487.922 363.244 486.678 363.556 485.667 364.178 484.5 365.033 483.567 365.656 483.022 366.978 482.322 368.144 482.011Z"
                                        />
                                        <path
                                            d="M369.156 468.089 370.011 468.089 371.489 468.322 372.967 468.789 374.211 469.411 375.144 470.033 375.922 470.733 376.856 471.667 377.711 472.911 378.333 474.156 378.8 475.556 379.033 476.722 379.111 477.344 379.111 478.822 378.878 480.3 378.489 481.622 377.867 482.944 377.089 484.033 376.933 484.033 376.311 482.944 375.378 481.856 374.522 481.078 373.433 480.378 372.267 479.833 370.944 479.444 369.156 479.211Z"
                                        />
                                        <path
                                            d="M356.4 483.878 356.789 483.956 358.967 485.2 360.522 486.133 360.6 486.289 360.444 487.922 360.6 489.556 360.989 491.033 361.533 492.2 361.533 492.433 359.356 493.678 357.489 494.767 353.444 497.1 352.122 497.878 351.889 497.878 351.189 496.4 350.8 495.078 350.644 494.144 350.567 492.822 350.722 491.344 350.956 490.256 351.5 488.778 352.044 487.767 352.744 486.756 353.678 485.744 354.533 484.967 355.933 484.111Z"
                                        />
                                        <path
                                            d="M376.7 492.433 377.089 492.511 378.956 493.6 385.022 497.1 386.344 497.878 386.189 498.267 385.644 499.044 384.944 499.9 384.4 500.444 383.233 501.3 381.989 502 380.511 502.544 379.344 502.778 378.878 502.856 376.544 502.856 375.378 502.622 374.133 502.233 372.811 501.611 371.878 500.989 371.878 496.322 372.578 496.011 373.9 495.311 374.833 494.611 375.922 493.522Z"
                                        />
                                        <path
                                            d="M359.667 473.067 361.378 473.067 362.856 473.3 364.489 473.844 365.811 474.544 366.433 474.933 366.433 479.678 365.033 480.3 363.944 481 363.089 481.7 362.544 482.244 361.611 483.567 361.144 483.411 359.822 482.633 353.756 479.133 352.044 478.122 351.967 477.967 352.511 477.111 353.367 476.1 353.989 475.478 355.156 474.622 356.244 474 357.722 473.456 358.578 473.222Z"
                                        />
                                        <path
                                            d="M363.167 494.533 363.478 494.611 364.644 495.467 365.967 496.089 367.211 496.478 368.144 496.633 369.078 496.711 369.156 496.789 369.156 507.833 367.989 507.833 366.433 507.522 365.111 507.056 363.711 506.278 362.7 505.5 361.922 504.8 361.144 503.867 360.367 502.622 359.744 501.222 359.356 499.744 359.2 498.344 359.2 497.489 359.278 496.789 361.222 495.7 362.544 494.922Z"
                                        />
                                        <path
                                            d="M386.267 478.044 386.422 478.044 386.967 479.133 387.433 480.533 387.667 481.778 387.744 483.333 387.589 484.733 387.278 486.056 386.656 487.533 386.111 488.467 385.489 489.322 384.633 490.256 383.467 491.189 382.456 491.811 381.756 492.122 379.811 491.033 377.944 489.944 377.711 489.789 377.867 488.389 377.867 487.222 378.567 486.522 379.578 485.2 380.278 484.033 380.978 482.556 381.522 480.844 382.222 480.378 384.167 479.289 386.033 478.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                            d="M15.5001 565C15.5001 559.753 19.7533 555.5 25.0001 555.5 30.2468 555.5 34.5001 559.753 34.5001 565 34.5001 570.247 30.2468 574.5 25.0001 574.5 19.7533 574.5 15.5001 570.247 15.5001 565Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M15.5001 586.5C15.5001 581.529 19.7533 577.5 25.0001 577.5 30.2468 577.5 34.5001 581.529 34.5001 586.5 34.5001 591.471 30.2468 595.5 25.0001 595.5 19.7533 595.5 15.5001 591.471 15.5001 586.5Z"
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
                            transform="translate(40.0765 567)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(39.9938 589)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M15 542.5C15 537.253 19.2533 533 24.5 533 29.7467 533 34 537.253 34 542.5 34 547.747 29.7467 552 24.5 552 19.2533 552 15 547.747 15 542.5Z"
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
                            transform="translate(39.9938 545)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(40.2587 522)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(39.9939 498)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip17)"
                            transform="matrix(0.000104987 0 0 0.000104987 20 487)"
                        >
                            <g clip-path="url(#clip18)" transform="matrix(1 0 0 1.07143 -0.015625 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip19)"
                            transform="matrix(0.000104987 0 0 0.000104987 20 509)"
                        >
                            <g clip-path="url(#clip20)" transform="matrix(1 0 0 1.07143 -0.015625 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M125.679 363.232 214.911 363.232 214.911 376.032 125.679 376.032Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M125.679 362.565 125.679 376.698"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M214.911 362.565 214.911 376.698"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M125.012 363.232 215.578 363.232"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M125.012 376.032 215.578 376.032"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g829"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(129.459 373)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M63.7213 210.361 152.953 210.361 152.953 223.161 63.7213 223.161Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M63.7213 209.694 63.7213 223.827"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M152.953 209.694 152.953 223.827"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M63.0546 210.361 153.62 210.361"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M63.0546 223.161 153.62 223.161"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g844"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(67.5008 220)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M1169.64 210.361 1258.87 210.361 1258.87 223.161 1169.64 223.161Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1169.64 209.694 1169.64 223.827"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1258.87 209.694 1258.87 223.827"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1168.97 210.361 1259.54 210.361"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1168.97 223.161 1259.54 223.161"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="w844"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1173.42 220)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M1019.3 386.37 1108.53 386.37 1108.53 399.17 1019.3 399.17Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1019.3 385.704 1019.3 399.837"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1108.53 385.704 1108.53 399.837"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1018.64 386.37 1109.2 386.37"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1018.64 399.17 1109.2 399.17"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g950"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1023.08 396)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M864.984 481.94 938.631 481.94 938.631 495.673 864.984 495.673Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.984 481.273 864.984 496.34"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M938.631 481.273 938.631 496.34"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.317 481.94 939.297 481.94"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.317 495.673 939.297 495.673"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g942"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(868.763 492)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M513.651 536.599 587.298 536.599 587.298 550.332 513.651 550.332Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.651 535.932 513.651 550.999"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M587.298 535.932 587.298 550.999"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M512.984 536.599 587.964 536.599"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M512.984 550.332 587.964 550.332"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g821"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(517.43 547)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip21)"
                            transform="matrix(0.000104987 0 0 0.000104987 581 537)"
                        >
                            <g clip-path="url(#clip22)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip23)"
                            transform="matrix(0.000104987 0 0 0.000104987 1064 24)"
                        >
                            <g clip-path="url(#clip25)" transform="scale(1.01496 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1086.17 19.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1184.5 73.1712)"
                        />
                        <path
                            d="M1182.55 86.0309 1174.86 77.6543 1175.35 77.2035 1183.04 85.58ZM1175.11 77.4289 1174.95 81.1967 1171.5 73.5001 1178.87 77.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1191.95 85.8892 1182.5 85.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1089.6 5.91601 1183.97 5.91601 1183.97 18.716 1089.6 18.716Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1089.6 5.24934 1089.6 19.3827"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1183.97 5.24934 1183.97 19.3827"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1088.94 5.91601 1184.64 5.91601"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1088.94 18.716 1184.64 18.716"
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
                                transform="translate(1093.38 16)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1103.88 16)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1085.5 20.5001 1104.69 20.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1192.1 72.9997 1279.75 72.9997 1279.75 85.7997 1192.1 85.7997Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1192.1 72.333 1192.1 86.4664"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1279.75 72.333 1279.75 86.4664"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1191.43 72.9997 1280.42 72.9997"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1191.43 85.7997 1280.42 85.7997"
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
                                transform="translate(1195.88 83)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1206.38 83)"
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
                            transform="matrix(1 0 0 -1 1082.5 27.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1191.99 45.5001)"
                        />
                        <path
                            d="M1192.5 46.5001 1211.69 46.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1196.29 32.8162 1269.49 32.8162 1269.49 45.6162 1196.29 45.6162Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1196.29 32.1495 1196.29 46.2828"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1269.49 32.1495 1269.49 46.2828"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1195.63 32.8162 1270.16 32.8162"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1195.63 45.6162 1270.16 45.6162"
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
                                transform="translate(1200.07 43)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1167.5 74.5001 1190.21 74.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M941.162 95.2878 1024.76 95.2878 1024.76 108.879 941.162 108.879Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M941.162 94.6211 941.162 109.546"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1024.76 94.6211 1024.76 109.546"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M940.495 95.2878 1025.43 95.2878"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M940.495 108.879 1025.43 108.879"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g925"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(944.941 105)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip26)"
                            transform="matrix(0.000104987 0 0 0.000104987 1017 96)"
                        >
                            <g clip-path="url(#clip27)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1121.5 96.6438 1205.1 96.6438 1205.1 110.235 1121.5 110.235Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1121.5 95.9771 1121.5 110.902"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1205.1 95.9771 1205.1 110.902"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1120.83 96.6438 1205.76 96.6438"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1120.83 110.235 1205.76 110.235"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g881"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1125.28 107)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip28)"
                            transform="matrix(0.000104987 0 0 0.000104987 1197 97)"
                        >
                            <g clip-path="url(#clip29)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
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
        fetch('/qodiriya/server15', { signal: controller.signal })
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
                    if (item.id === 836) {
                        const plus = document.getElementById("g836Plus");
                        const minus = document.getElementById("g836Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(836);
                        } else {
                            falseAnimation(836);
                        }
                    } else if(item.id === 851) {
                        const plus = document.getElementById("g851Plus");
                        const minus = document.getElementById("g851Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(851);
                        } else {
                            falseAnimation(851);
                        }
                    } else if(item.id === 866) {
                        const plus = document.getElementById("g866Plus");
                        const minus = document.getElementById("g866Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(866);
                        } else {
                            falseAnimation(866);
                        }
                    } else if(item.id === 881) {
                        const plus = document.getElementById("g881");
                        plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(881);
                        } else {
                            falseAnimation(881);
                        }
                    } else if(item.id === 902) {
                        const value = document.getElementById("g902");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(902);
                        } else {
                            falseAnimation(902);
                        }
                    }
                    else if(item.id === 925) {
                        const value = document.getElementById("g925");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(925);
                        } else {
                            falseAnimation(925);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 791) {
                        const value = document.getElementById("g791");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a791");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 4.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(791);
                            trueAnimation(7911);
                        } else {
                            falseAnimation(791);
                            falseAnimation(7911);
                        }
                    } else if(item.id === 792) {
                        const value = document.getElementById("g792");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 793) {
                        const value = document.getElementById("k791");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 794) {
                        const value = document.getElementById("n791");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 795) {
                        const value = document.getElementById("w791");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 806) {
                        const value = document.getElementById("g806");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a806");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 4.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(806);
                            trueAnimation(8061);
                        } else {
                            falseAnimation(806);
                            falseAnimation(8061);
                        }
                    } else if(item.id === 807) {
                        const value = document.getElementById("g807");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 808) {
                        const value = document.getElementById("k806");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 809) {
                        const value = document.getElementById("n806");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 810) {
                        const value = document.getElementById("w806");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }


                    else if(item.id === 821) {
                        const value = document.getElementById("g821");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(821);
                            trueAnimation(8211);
                            trueAnimation(8212);
                        } else {
                            falseAnimation(821);
                            falseAnimation(8211);
                            falseAnimation(8212);
                        }
                    } else if(item.id === 942) {
                        const value = document.getElementById("g942");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(942);
                        } else {
                            falseAnimation(942);
                        }
                    }

                    else if(item.id === 829) {
                        const value = document.getElementById("g829");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 844) {
                        const value = document.getElementById("g844");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                        const m = document.getElementById("w844");
                        m.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 950) {
                        const value = document.getElementById("g950");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
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

            })
            .catch(error => {
                if (error.name === 'AbortError') {
                    console.log('Запрос был отменен из-за таймаута');
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