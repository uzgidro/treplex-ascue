<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-18';
$energy = new Energy();
$id = 42;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);

$urlTransformer1 = $energy->getTransformer($id, 91);
$urlTransformer2 = $energy->getTransformer($id, 92);

$urlSwitch1 = $energy->getSwitch($id, 201);
$urlSwitch2 = $energy->getSwitch($id, 202);
$urlSwitch3 = $energy->getSwitch($id, 203);
$urlSwitch4 = $energy->getSwitch($id, 204);
$urlSwitch5 = $energy->getSwitch($id, 205);
$urlSwitch6 = $energy->getSwitch($id, 206);
$urlSwitch7 = $energy->getSwitch($id, 207);
$urlSwitch8 = $energy->getSwitch($id, 208);
$urlSwitch9 = $energy->getSwitch($id, 209);
$urlSwitch10 = $energy->getSwitch($id, 210);
$urlSwitch11 = $energy->getSwitch($id, 211);
$urlSwitch12 = $energy->getSwitch($id, 212);
$urlSwitch13 = $energy->getSwitch($id, 213);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['quyi-buzsuv/index']) ?>">"Қуйи Бўзсув ГЭСлар каскади" Филиали</a></li>
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOFJREFUSEvtl1kOxTAIA5PQfX33P+0TXbFDb8B8wkiR7EZKU2JykabloUMjIh0Pa3pRBh4z+dCkjLxA2un0ZOYNslyayMory/BoIpmXL20xXsPbl85oIguvb1bQRDYWTkZ7qjL5tWgRiBvOWQTihLOxo9S1PEUgVTgYyUuPmi0CgVqgCATCmXlrMLVwEchTS/4+VSn3yXURyHVbvCKQ47a4RSBay0cRyJzSzjOXPvHkg7TPF1445V6asNs6ns79oH+sfVyQOqDwlPDCU8ILTwkvPCW88JSRNale9yf8ELN/C393qxyRJJMMtwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img1"
                        ></image>
                        <clipPath id="clip2">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip3">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip4">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip5">
                            <rect x="4.65661e-10" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip6">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOZJREFUSEvtl1EOhCAMRCuriKKu9z/tBhRpp3VP0PdJX6LOQCJEnSFIPmzGGEELYUSlMqEWJlQq7rlXcM+9gnvuFdxzr+Ce+SMWZ9RCin28rDcZrRBCbsONcPQC7bhishGtuGZwRKLRejGgBvTFVcV+fbIORJJacv+fnM+WoW6CMzSNaMEZY+0axQOnD5l1R3Ti+OHLNXqtZZYaUUKjUoqQ2LUYOxVvC4W7CIneEK0IiQon2/cKVQsrQiJrUZF0eDiyCAmvBYqQ9HAWHElaOLoISavl2ZtvXKfFLEJSTotdhCQmdiIefgYCEnC+WqtNAAAAAElFTkSuQmCC"
                            preserveAspectRatio="none"
                            id="img8"
                        ></image>
                        <clipPath id="clip9">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="0" width="47625" height="114300" />
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
                            <rect x="4.65661e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="4.65661e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img21"
                        ></image>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="1173079" height="571500" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="5.82077e-11" y="0" width="76200" height="190500" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip25">
                            <rect x="5.82077e-11" y="0" width="76200" height="200025" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip27">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip28">
                            <rect x="0" y="0" width="47625" height="111125" />
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
                            d="M1.5-2.69503e-06 1.5001 58.4336-1.49989 58.4336-1.5 2.69503e-06ZM4.5001 58.4336C4.50011 60.9189 2.48539 62.9336 0.000113072 62.9336-2.48517 62.9336-4.49989 60.9189-4.4999 58.4336-4.4999 55.9483-2.48518 53.9336 9.69018e-05 53.9336 2.48538 53.9336 4.5001 55.9483 4.5001 58.4336Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 855.5 434.934)"
                        />
                        <path
                            d="M1185.53 377.448 73.5 373.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1177.11 203.469 143.5 200.5"
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
                            font-weight="400"
                            font-size="11"
                            transform="translate(74.4708 385)"
                        >
                            СШ 6 кВ
                        </text>
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c3"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 639.5 312.5)"
                            />
                            <path id="c2"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 639.5 286.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(678.571 267)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(685.738 267)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(689.238 267)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(678.571 280)"
                        >
                            6/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(700.238 280)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(678.571 293)"
                        >
                            8050
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(702.571 293)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(678.571 306)"
                        >
                            26
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(689.238 306)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(692.738 306)"
                        >
                            TRB
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(150.827 214)"
                        >
                            СШ 35 кВ
                        </text>
                        <path
                            d="M0 0 0.343622 46.0103"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 655.5 253.51)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(828.14 174)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(835.306 174)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(838.806 174)"
                        >
                            Рез
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(521.114 179)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(528.28 179)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(531.78 179)"
                        >
                            18
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(542.447 179)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(545.947 179)"
                        >
                            Д
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(474.633 103)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(484.633 103)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(489.133 103)"
                        >
                            18
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(502.467 103)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(506.967 103)"
                        >
                            Джун
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(786.53 101)"
                        >
                            РЕЗЕРВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1000.83 176)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1008 176)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1011.5 176)"
                        >
                            18
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1022.16 176)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1025.66 176)"
                        >
                            П
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(955.024 101)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(965.024 101)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(969.524 101)"
                        >
                            18
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(982.858 101)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(987.358 101)"
                        >
                            ПТФ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(330.742 175)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(337.908 175)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(341.408 175)"
                        >
                            14
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(352.075 175)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(355.575 175)"
                        >
                            18
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(292.687 100)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(302.687 100)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(307.187 100)"
                        >
                            14
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(320.52 100)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(325.02 100)"
                        >
                            18
                        </text>
                        <path
                            d="M0 0 0.000104987 63.9292"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 655.5 376.429)"
                        />
                        <a href="<?= $urlSwitch8 ?>">
                            <rect id="c4"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 646.5 350.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(671.257 343)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(678.423 343)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(681.923 343)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(687.257 343)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(690.757 343)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(697.923 343)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(701.423 343)"
                        >
                            1
                        </text>
                        <path
                            d="M342 432.344 342 375.5 345 375.5 345 432.344ZM339 375.5C339 373.015 341.015 371 343.5 371 345.985 371 348 373.015 348 375.5 348 377.985 345.985 380 343.5 380 341.015 380 339 377.985 339 375.5Z"
                            fill="#006600"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(371.269 438)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(378.103 438)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(381.603 438)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(371.269 451)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(379.269 451)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(371.269 464)"
                        >
                            2,34 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(371.269 477)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(392.936 477)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(396.436 477)"
                        >
                            325/49
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(426.103 477)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(429.603 477)"
                        >
                            32
                        </text>
                        <a href="<?= $urlSwitch10 ?>">
                            <rect id="c480"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 333.5 409.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(358.548 403)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(365.714 403)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(369.214 403)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(376.048 403)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(379.548 403)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(845.53 351)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(854.697 351)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(858.197 351)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(865.364 351)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(868.864 351)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(792.338 282)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(803.838 282)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(808.338 282)"
                        >
                            Фар
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(833.838 282)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(838.338 282)"
                        >
                            Ваб
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(531.738 351)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(538.905 351)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(542.405 351)"
                        >
                            К
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(455.883 282)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(467.383 282)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(471.883 282)"
                        >
                            Компр
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(512.216 282)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(516.716 282)"
                        >
                            ный
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(531.607 24)"
                        >
                            Қуйи Бўзсув
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(642.027 24)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(652.86 24)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(666.86 24)"
                        >
                            (ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(711.027 24)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(717.193 24)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(726.527 24)"
                        >
                            8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(735.86 24)"
                        >
                            )
                        </text>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 985.5 205.5)"
                        />
                        <path
                            d="M0 0 0.000104987 21.876"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 987.5 203.376)"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect id="c612"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 978.5 181.5)"
                            />
                        </a>
                        <path d="M987.722 163.598 987.5 110.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M986.222 163.605 986.025 116.506 989.025 116.494 989.222 163.592ZM987.525 116.5 983.038 119.519 987.5 110.5 992.038 119.481Z"
                            fill="#663300"
                        />
                        <path
                            d="M0 2C-2.54627e-16 0.89543 0.89543 -2.54627e-16 2 -5.09253e-16 3.10457-1.01851e-15 4 0.89543 4 2 4 3.10457 3.10457 4 2 4 0.89543 4-1.27313e-15 3.10457 0 2Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 808.5 204.5)"
                        />
                        <path
                            d="M0 0 0.000104987 21.876"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 810.5 202.376)"
                        />
                        <a href="<?= $urlSwitch3 ?>">
                            <rect id="c0"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 802.5 180.5)"
                            />
                        </a>
                        <path d="M811.722 162.598 811.5 109.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M810.388 162.604 810.189 114.839 812.856 114.828 813.055 162.593ZM811.522 114.833 807.534 117.517 811.5 109.5 815.533 117.483Z"
                            fill="#663300"
                        />
                        <path
                            d="M508.739 201.974 508.5 182.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 506.5 203.5)"
                        />
                        <a href="<?= $urlSwitch2 ?>">
                            <rect id="c566"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 499.5 182.5)"
                            />
                        </a>
                        <path d="M508.722 164.598 508.5 111.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M507.222 164.605 507.025 117.506 510.025 117.494 510.222 164.592ZM508.525 117.5 504.038 120.519 508.5 111.5 513.038 120.481Z"
                            fill="#663300"
                        />
                        <path
                            d="M316.739 201.974 316.5 182.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 314.5 203.5)"
                        />
                        <a href="<?= $urlSwitch1 ?>">
                            <rect id="c589"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 307.5 182.5)"
                            />
                        </a>
                        <path d="M316.722 163.598 316.5 110.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M315.222 163.605 315.025 116.506 318.025 116.494 318.222 163.592ZM316.525 116.5 312.038 119.519 316.5 110.5 321.038 119.481Z"
                            fill="#663300"
                        />
                        <path
                            d="M150.402 181.652 206.612 181.652 206.612 194.452 150.402 194.452Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M150.402 180.986 150.402 195.119"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M206.612 180.986 206.612 195.119"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M149.735 181.652 207.279 181.652"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M149.735 194.452 207.279 194.452"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g578"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(154.181 192)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 653.5 205.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 825.5 379.5)"
                        />
                        <path
                            d="M827.739 377.974 827.5 358.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch9 ?>">
                            <rect id="c635"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 818.5 358.5)"
                            />
                        </a>
                        <path d="M827.722 339.598 827.5 286.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M826.222 339.605 826.025 292.506 829.025 292.494 829.222 339.592ZM827.525 292.5 823.038 295.519 827.5 286.5 832.038 295.481Z"
                            fill="#006600"
                        />
                        <path
                            d="M785.118 252.987 868.718 252.987 868.718 266.578 785.118 266.578Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M785.118 252.32 785.118 267.245"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M868.718 252.32 868.718 267.245"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M784.451 252.987 869.384 252.987"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M784.451 266.578 869.384 266.578"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g635"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(788.898 263)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 861 254)"
                        >
                            <g clip-path="url(#clip2)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 504.5 378.5)"
                        />
                        <path
                            d="M506.739 376.974 506.5 357.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch7 ?>">
                            <rect id="c658"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 497.5 357.5)"
                            />
                        </a>
                        <path d="M506.722 338.598 506.5 285.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M505.222 338.605 505.025 291.506 508.025 291.494 508.222 338.592ZM506.525 291.5 502.038 294.519 506.5 285.5 511.038 294.481Z"
                            fill="#006600"
                        />
                        <path
                            d="M462.13 253.097 545.729 253.097 545.729 266.689 462.13 266.689Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.13 252.431 462.13 267.355"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M545.729 252.431 545.729 267.355"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M461.463 253.097 546.396 253.097"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M461.463 266.689 546.396 266.689"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g658"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(465.909 263)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip3)"
                            transform="matrix(0.000104987 0 0 0.000104987 538 254)"
                        >
                            <g clip-path="url(#clip4)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M541.471 432.356 541 375.512 544 375.488 544.471 432.331ZM538 375.537C537.98 373.052 539.978 371.021 542.463 371 544.948 370.98 546.979 372.978 547 375.463 547.021 377.948 545.023 379.979 542.537 380 540.052 380.02 538.021 378.023 538 375.537Z"
                            fill="#006600"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(574.863 441)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(581.696 441)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(585.196 441)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(574.863 454)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(582.863 454)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(574.863 467)"
                        >
                            2,34 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(574.863 480)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(596.529 480)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(600.029 480)"
                        >
                            325/49
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(629.696 480)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(633.196 480)"
                        >
                            32
                        </text>
                        <a href="<?= $urlSwitch11 ?>">
                            <rect id="c457"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 533.5 409.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(558.12 404)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(565.287 404)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(568.787 404)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(575.62 404)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(579.12 404)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(886.898 443)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(893.731 443)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(897.231 443)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(886.898 456)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(894.898 456)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(886.898 469)"
                        >
                            2,34 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(886.898 482)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(908.565 482)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(912.065 482)"
                        >
                            325/49
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(941.731 482)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(945.231 482)"
                        >
                            32
                        </text>
                        <a href="<?= $urlSwitch12 ?>">
                            <rect id="c434"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 845.5 412.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(870.155 406)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(877.322 406)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(880.822 406)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(887.655 406)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(891.155 406)"
                        >
                            1
                        </text>
                        <a href="<?= $urlSwitch5 ?>">
                            <rect id="c1"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 646.5 234.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(667.253 228)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(674.42 228)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(677.92 228)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(683.253 228)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(686.753 228)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(693.92 228)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(697.42 228)"
                        >
                            35
                        </text>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 287.5 376.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(306.244 350)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(313.411 350)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(316.911 350)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(326.078 350)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(329.578 350)"
                        >
                            РП
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(344.411 350)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(347.911 350)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(353.244 350)"
                        >
                            8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(265.291 276)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(276.791 276)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(281.291 276)"
                        >
                            РП
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(299.791 276)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(304.291 276)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(310.958 276)"
                        >
                            8
                        </text>
                        <path
                            d="M289.739 374.974 289.5 355.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch6 ?>">
                            <rect id="c543"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 280.5 355.5)"
                            />
                        </a>
                        <path d="M289.722 336.598 289.5 283.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M288.222 336.605 288.025 289.506 291.025 289.494 291.222 336.592ZM289.525 289.5 285.038 292.519 289.5 283.5 294.038 292.481Z"
                            fill="#006600"
                        />
                        <path
                            d="M244.493 248.749 328.093 248.749 328.093 262.34 244.493 262.34Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M244.493 248.082 244.493 263.007"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M328.093 248.082 328.093 263.007"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M243.827 248.749 328.76 248.749"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M243.827 262.34 328.76 262.34"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g543"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(248.273 259)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip5)"
                            transform="matrix(0.000104987 0 0 0.000104987 319 249)"
                        >
                            <g clip-path="url(#clip6)" transform="matrix(1.16667 0 0 1 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c5132"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1050.5 494.5)"
                            />
                            <path id="c5131"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1050.5 470.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1086.53 452)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1109.7 452)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1113.2 452)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1089.2 465)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1113.53 465)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1086.53 478)"
                        >
                            180
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1105.2 478)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1086.53 491)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1103.7 491)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1107.2 491)"
                        >
                            180/6,3
                        </text>
                        <path
                            d="M1.49993-0.014715 1.84476 35.1342-1.1551 35.1636-1.49993 0.014715ZM6.80931 26.8409 0.374031 38.1257-6.2814 26.9693C-6.70582 26.2579-6.47314 25.337-5.76169 24.9126-5.05024 24.4882-4.12944 24.7209-3.70502 25.4323L1.63302 34.3804-0.958193 34.4058 4.20326 25.3548C4.61365 24.6351 5.52971 24.3844 6.24934 24.7948 6.96898 25.2052 7.21969 26.1212 6.80931 26.8409Z"
                            fill="#7F7F7F"
                            transform="matrix(-1 0 0 1 1065.87 494.5)"
                        />
                        <path
                            d="M1.49997-0.00937786 1.87393 59.8053-1.12601 59.8241-1.49997 0.00937786ZM4.87388 59.7866C4.88941 62.2718 2.88733 64.2991 0.402097 64.3146-2.08314 64.3301-4.11041 62.3281-4.12595 59.8428-4.14149 57.3576-2.1394 55.3303 0.34583 55.3148 2.83106 55.2992 4.85834 57.3013 4.87388 59.7866Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 1066.5 436.315)"
                        />
                        <a href="<?= $urlSwitch13 ?>">
                            <rect id="c513"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1057.5 410.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1086.53 405)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1093.7 405)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1097.2 405)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1120.37 405)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1123.87 405)"
                        >
                            1
                        </text>
                        <path
                            d="M282.198 487.066 405.248 487.066 405.248 499.866 282.198 499.866Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M282.198 499.866 405.248 499.866 405.248 512.666 282.198 512.666Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M282.198 512.666 405.248 512.666 405.248 525.466 282.198 525.466Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M282.198 525.466 405.248 525.466 405.248 538.266 282.198 538.266Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M282.198 538.266 405.248 538.266 405.248 551.065 282.198 551.065Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M282.198 551.065 405.248 551.065 405.248 563.866 282.198 563.866Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.531 499.866 405.914 499.866"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.531 512.666 405.914 512.666"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.531 525.466 405.914 525.466"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.531 538.266 405.914 538.266"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.531 551.065 405.914 551.065"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M282.198 486.399 282.198 564.532"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M405.248 486.399 405.248 564.532"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.531 487.066 405.914 487.066"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.531 563.866 405.914 563.866"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g480"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(285.977 497)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g481"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(285.977 510)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a480"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(285.977 523)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k480"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(285.977 535)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n480"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(285.977 548)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w480" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(285.977 561)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M482.47 484.426 605.521 484.426 605.521 497.226 482.47 497.226Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M482.47 497.226 605.521 497.226 605.521 510.026 482.47 510.026Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M482.47 510.026 605.521 510.026 605.521 522.826 482.47 522.826Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M482.47 522.826 605.521 522.826 605.521 535.626 482.47 535.626Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M482.47 535.626 605.521 535.626 605.521 548.426 482.47 548.426Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M482.47 548.426 605.521 548.426 605.521 561.226 482.47 561.226Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M481.804 497.226 606.187 497.226"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M481.804 510.026 606.187 510.026"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M481.804 522.826 606.187 522.826"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M481.804 535.626 606.187 535.626"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M481.804 548.426 606.187 548.426"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M482.47 483.759 482.47 561.892"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M605.521 483.759 605.521 561.892"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M481.804 484.426 606.187 484.426"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M481.804 561.226 606.187 561.226"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g457"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(486.25 494)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g458"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(486.25 507)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a457"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(486.25 520)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k457"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(486.25 533)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n457"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(486.25 546)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w457" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(486.25 558)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M795.347 487.856 918.397 487.856 918.397 500.656 795.347 500.656Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M795.347 500.656 918.397 500.656 918.397 513.456 795.347 513.456Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M795.347 513.456 918.397 513.456 918.397 526.256 795.347 526.256Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M795.347 526.256 918.397 526.256 918.397 539.056 795.347 539.056Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M795.347 539.056 918.397 539.056 918.397 551.856 795.347 551.856Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M795.347 551.856 918.397 551.856 918.397 564.656 795.347 564.656Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M794.68 500.656 919.064 500.656"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M794.68 513.456 919.064 513.456"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M794.68 526.256 919.064 526.256"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M794.68 539.056 919.064 539.056"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M794.68 551.856 919.064 551.856"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M795.347 487.19 795.347 565.323"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M918.397 487.19 918.397 565.323"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M794.68 487.856 919.064 487.856"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M794.68 564.656 919.064 564.656"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g434"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(799.126 498)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g435"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(799.126 511)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a434"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(799.126 523)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k434"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(799.126 536)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n434"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(799.126 549)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w434" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(799.126 562)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c4801"
                            d="M318.5 457C318.5 443.469 329.469 432.5 343 432.5 356.531 432.5 367.5 443.469 367.5 457 367.5 470.531 356.531 481.5 343 481.5 329.469 481.5 318.5 470.531 318.5 457Z"
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
                                            d="M342.689 449.933 343.622 449.933 344.944 450.167 346.033 450.633 346.889 451.178 347.9 452.189 348.522 453.122 348.989 454.367 349.144 455.067 349.144 456.933 348.833 458.1 348.211 459.344 347.589 460.122 347.044 460.667 345.956 461.367 344.711 461.833 343.933 461.989 342.378 461.989 341.133 461.678 340.278 461.289 339.422 460.744 338.567 459.967 338.022 459.189 337.478 458.1 337.167 456.856 337.089 455.922 337.244 454.678 337.556 453.667 338.178 452.5 339.033 451.567 339.656 451.022 340.978 450.322 342.144 450.011Z"
                                        />
                                        <path
                                            d="M343.156 436.089 344.011 436.089 345.489 436.322 346.967 436.789 348.211 437.411 349.144 438.033 349.922 438.733 350.856 439.667 351.711 440.911 352.333 442.156 352.8 443.556 353.033 444.722 353.111 445.344 353.111 446.822 352.878 448.3 352.489 449.622 351.867 450.944 351.089 452.033 350.933 452.033 350.311 450.944 349.378 449.856 348.522 449.078 347.433 448.378 346.267 447.833 344.944 447.444 343.156 447.211Z"
                                        />
                                        <path
                                            d="M330.4 451.878 330.789 451.956 332.967 453.2 334.522 454.133 334.6 454.289 334.444 455.922 334.6 457.556 334.989 459.033 335.533 460.2 335.533 460.433 333.356 461.678 331.489 462.767 327.444 465.1 326.122 465.878 325.889 465.878 325.189 464.4 324.8 463.078 324.644 462.144 324.567 460.822 324.722 459.344 324.956 458.256 325.5 456.778 326.044 455.767 326.744 454.756 327.678 453.744 328.533 452.967 329.933 452.111Z"
                                        />
                                        <path
                                            d="M350.7 460.433 351.089 460.511 352.956 461.6 359.022 465.1 360.344 465.878 360.189 466.267 359.644 467.044 358.944 467.9 358.4 468.444 357.233 469.3 355.989 470 354.511 470.544 353.344 470.778 352.878 470.856 350.544 470.856 349.378 470.622 348.133 470.233 346.811 469.611 345.878 468.989 345.878 464.322 346.578 464.011 347.9 463.311 348.833 462.611 349.922 461.522Z"
                                        />
                                        <path
                                            d="M333.667 441.067 335.378 441.067 336.856 441.3 338.489 441.844 339.811 442.544 340.433 442.933 340.433 447.678 339.033 448.3 337.944 449 337.089 449.7 336.544 450.244 335.611 451.567 335.144 451.411 333.822 450.633 327.756 447.133 326.044 446.122 325.967 445.967 326.511 445.111 327.367 444.1 327.989 443.478 329.156 442.622 330.244 442 331.722 441.456 332.578 441.222Z"
                                        />
                                        <path
                                            d="M337.167 462.533 337.478 462.611 338.644 463.467 339.967 464.089 341.211 464.478 342.144 464.633 343.078 464.711 343.156 464.789 343.156 475.833 341.989 475.833 340.433 475.522 339.111 475.056 337.711 474.278 336.7 473.5 335.922 472.8 335.144 471.867 334.367 470.622 333.744 469.222 333.356 467.744 333.2 466.344 333.2 465.489 333.278 464.789 335.222 463.7 336.544 462.922Z"
                                        />
                                        <path
                                            d="M360.267 446.044 360.422 446.044 360.967 447.133 361.433 448.533 361.667 449.778 361.744 451.333 361.589 452.733 361.278 454.056 360.656 455.533 360.111 456.467 359.489 457.322 358.633 458.256 357.467 459.189 356.456 459.811 355.756 460.122 353.811 459.033 351.944 457.944 351.711 457.789 351.867 456.389 351.867 455.222 352.567 454.522 353.578 453.2 354.278 452.033 354.978 450.556 355.522 448.844 356.222 448.378 358.167 447.289 360.033 446.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c4571"
                            d="M519.5 455C519.5 441.469 530.469 430.5 544 430.5 557.531 430.5 568.5 441.469 568.5 455 568.5 468.531 557.531 479.5 544 479.5 530.469 479.5 519.5 468.531 519.5 455Z"
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
                                            d="M542.689 448.933 543.622 448.933 544.944 449.167 546.033 449.633 546.889 450.178 547.9 451.189 548.522 452.122 548.989 453.367 549.144 454.067 549.144 455.933 548.833 457.1 548.211 458.344 547.589 459.122 547.044 459.667 545.956 460.367 544.711 460.833 543.933 460.989 542.378 460.989 541.133 460.678 540.278 460.289 539.422 459.744 538.567 458.967 538.022 458.189 537.478 457.1 537.167 455.856 537.089 454.922 537.244 453.678 537.556 452.667 538.178 451.5 539.033 450.567 539.656 450.022 540.978 449.322 542.144 449.011Z"
                                        />
                                        <path
                                            d="M543.156 435.089 544.011 435.089 545.489 435.322 546.967 435.789 548.211 436.411 549.144 437.033 549.922 437.733 550.856 438.667 551.711 439.911 552.333 441.156 552.8 442.556 553.033 443.722 553.111 444.344 553.111 445.822 552.878 447.3 552.489 448.622 551.867 449.944 551.089 451.033 550.933 451.033 550.311 449.944 549.378 448.856 548.522 448.078 547.433 447.378 546.267 446.833 544.944 446.444 543.156 446.211Z"
                                        />
                                        <path
                                            d="M530.4 450.878 530.789 450.956 532.967 452.2 534.522 453.133 534.6 453.289 534.444 454.922 534.6 456.556 534.989 458.033 535.533 459.2 535.533 459.433 533.356 460.678 531.489 461.767 527.444 464.1 526.122 464.878 525.889 464.878 525.189 463.4 524.8 462.078 524.644 461.144 524.567 459.822 524.722 458.344 524.956 457.256 525.5 455.778 526.044 454.767 526.744 453.756 527.678 452.744 528.533 451.967 529.933 451.111Z"
                                        />
                                        <path
                                            d="M550.7 459.433 551.089 459.511 552.956 460.6 559.022 464.1 560.344 464.878 560.189 465.267 559.644 466.044 558.944 466.9 558.4 467.444 557.233 468.3 555.989 469 554.511 469.544 553.344 469.778 552.878 469.856 550.544 469.856 549.378 469.622 548.133 469.233 546.811 468.611 545.878 467.989 545.878 463.322 546.578 463.011 547.9 462.311 548.833 461.611 549.922 460.522Z"
                                        />
                                        <path
                                            d="M533.667 440.067 535.378 440.067 536.856 440.3 538.489 440.844 539.811 441.544 540.433 441.933 540.433 446.678 539.033 447.3 537.944 448 537.089 448.7 536.544 449.244 535.611 450.567 535.144 450.411 533.822 449.633 527.756 446.133 526.044 445.122 525.967 444.967 526.511 444.111 527.367 443.1 527.989 442.478 529.156 441.622 530.244 441 531.722 440.456 532.578 440.222Z"
                                        />
                                        <path
                                            d="M537.167 461.533 537.478 461.611 538.644 462.467 539.967 463.089 541.211 463.478 542.144 463.633 543.078 463.711 543.156 463.789 543.156 474.833 541.989 474.833 540.433 474.522 539.111 474.056 537.711 473.278 536.7 472.5 535.922 471.8 535.144 470.867 534.367 469.622 533.744 468.222 533.356 466.744 533.2 465.344 533.2 464.489 533.278 463.789 535.222 462.7 536.544 461.922Z"
                                        />
                                        <path
                                            d="M560.267 445.044 560.422 445.044 560.967 446.133 561.433 447.533 561.667 448.778 561.744 450.333 561.589 451.733 561.278 453.056 560.656 454.533 560.111 455.467 559.489 456.322 558.633 457.256 557.467 458.189 556.456 458.811 555.756 459.122 553.811 458.033 551.944 456.944 551.711 456.789 551.867 455.389 551.867 454.222 552.567 453.522 553.578 452.2 554.278 451.033 554.978 449.556 555.522 447.844 556.222 447.378 558.167 446.289 560.033 445.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c4341"
                            d="M830.5 459C830.5 445.469 841.469 434.5 855 434.5 868.531 434.5 879.5 445.469 879.5 459 879.5 472.531 868.531 483.5 855 483.5 841.469 483.5 830.5 472.531 830.5 459Z"
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
                                            d="M854.689 452.933 855.622 452.933 856.944 453.167 858.033 453.633 858.889 454.178 859.9 455.189 860.522 456.122 860.989 457.367 861.144 458.067 861.144 459.933 860.833 461.1 860.211 462.344 859.589 463.122 859.044 463.667 857.956 464.367 856.711 464.833 855.933 464.989 854.378 464.989 853.133 464.678 852.278 464.289 851.422 463.744 850.567 462.967 850.022 462.189 849.478 461.1 849.167 459.856 849.089 458.922 849.244 457.678 849.556 456.667 850.178 455.5 851.033 454.567 851.656 454.022 852.978 453.322 854.144 453.011Z"
                                        />
                                        <path
                                            d="M855.156 439.089 856.011 439.089 857.489 439.322 858.967 439.789 860.211 440.411 861.144 441.033 861.922 441.733 862.856 442.667 863.711 443.911 864.333 445.156 864.8 446.556 865.033 447.722 865.111 448.344 865.111 449.822 864.878 451.3 864.489 452.622 863.867 453.944 863.089 455.033 862.933 455.033 862.311 453.944 861.378 452.856 860.522 452.078 859.433 451.378 858.267 450.833 856.944 450.444 855.156 450.211Z"
                                        />
                                        <path
                                            d="M842.4 454.878 842.789 454.956 844.967 456.2 846.522 457.133 846.6 457.289 846.444 458.922 846.6 460.556 846.989 462.033 847.533 463.2 847.533 463.433 845.356 464.678 843.489 465.767 839.444 468.1 838.122 468.878 837.889 468.878 837.189 467.4 836.8 466.078 836.644 465.144 836.567 463.822 836.722 462.344 836.956 461.256 837.5 459.778 838.044 458.767 838.744 457.756 839.678 456.744 840.533 455.967 841.933 455.111Z"
                                        />
                                        <path
                                            d="M862.7 463.433 863.089 463.511 864.956 464.6 871.022 468.1 872.344 468.878 872.189 469.267 871.644 470.044 870.944 470.9 870.4 471.444 869.233 472.3 867.989 473 866.511 473.544 865.344 473.778 864.878 473.856 862.544 473.856 861.378 473.622 860.133 473.233 858.811 472.611 857.878 471.989 857.878 467.322 858.578 467.011 859.9 466.311 860.833 465.611 861.922 464.522Z"
                                        />
                                        <path
                                            d="M845.667 444.067 847.378 444.067 848.856 444.3 850.489 444.844 851.811 445.544 852.433 445.933 852.433 450.678 851.033 451.3 849.944 452 849.089 452.7 848.544 453.244 847.611 454.567 847.144 454.411 845.822 453.633 839.756 450.133 838.044 449.122 837.967 448.967 838.511 448.111 839.367 447.1 839.989 446.478 841.156 445.622 842.244 445 843.722 444.456 844.578 444.222Z"
                                        />
                                        <path
                                            d="M849.167 465.533 849.478 465.611 850.644 466.467 851.967 467.089 853.211 467.478 854.144 467.633 855.078 467.711 855.156 467.789 855.156 478.833 853.989 478.833 852.433 478.522 851.111 478.056 849.711 477.278 848.7 476.5 847.922 475.8 847.144 474.867 846.367 473.622 845.744 472.222 845.356 470.744 845.2 469.344 845.2 468.489 845.278 467.789 847.222 466.7 848.544 465.922Z"
                                        />
                                        <path
                                            d="M872.267 449.044 872.422 449.044 872.967 450.133 873.433 451.533 873.667 452.778 873.744 454.333 873.589 455.733 873.278 457.056 872.656 458.533 872.111 459.467 871.489 460.322 870.633 461.256 869.467 462.189 868.456 462.811 867.756 463.122 865.811 462.033 863.944 460.944 863.711 460.789 863.867 459.389 863.867 458.222 864.567 457.522 865.578 456.2 866.278 455.033 866.978 453.556 867.522 451.844 868.222 451.378 870.167 450.289 872.033 449.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                            d="M942.946 58.3305 1026.55 58.3305 1026.55 71.9217 942.946 71.9217Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M942.946 71.9217 1026.55 71.9217 1026.55 85.5129 942.946 85.5129Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M942.279 71.9217 1027.21 71.9217"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M942.946 57.6638 942.946 86.1795"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1026.55 57.6638 1026.55 86.1795"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M942.279 58.3305 1027.21 58.3305"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M942.279 85.5129 1027.21 85.5129"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g612Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(946.725 68)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g612Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(946.725 82)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip7)"
                            transform="matrix(0.000104987 0 0 0.000104987 1020 59)"
                        >
                            <g clip-path="url(#clip9)" transform="matrix(1 0 0 1.02857 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 1020 73)"
                        >
                            <g clip-path="url(#clip11)" transform="matrix(1.16667 0 0 1 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M475.741 56.5924 559.34 56.5924 559.34 70.1836 475.741 70.1836Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M475.741 70.1836 559.34 70.1836 559.34 83.7748 475.741 83.7748Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M475.074 70.1836 560.007 70.1836"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M475.741 55.9258 475.741 84.4415"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M559.34 55.9258 559.34 84.4415"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M475.074 56.5924 560.007 56.5924"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M475.074 83.7748 560.007 83.7748"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g566Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(479.52 67)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g566Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(479.52 80)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip12)"
                            transform="matrix(0.000104987 0 0 0.000104987 553 57)"
                        >
                            <g clip-path="url(#clip13)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip14)"
                            transform="matrix(0.000104987 0 0 0.000104987 553 71)"
                        >
                            <g clip-path="url(#clip15)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M281.697 56.6126 365.297 56.6126 365.297 70.2038 281.697 70.2038Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.697 70.2038 365.297 70.2038 365.297 83.795 281.697 83.795Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.031 70.2038 365.963 70.2038"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.697 55.9459 281.697 84.4616"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M365.297 55.9459 365.297 84.4616"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.031 56.6126 365.963 56.6126"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.031 83.795 365.963 83.795"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g589Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(285.477 67)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g589Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(285.477 80)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip16)"
                            transform="matrix(0.000104987 0 0 0.000104987 359 57)"
                        >
                            <g clip-path="url(#clip17)" transform="matrix(1 0 0 1.02857 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip18)"
                            transform="matrix(0.000104987 0 0 0.000104987 359 71)"
                        >
                            <g clip-path="url(#clip19)" transform="matrix(1 0 0 1.02857 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip20)"
                            transform="matrix(0.000104987 0 0 0.000104987 1060 37)"
                        >
                            <g clip-path="url(#clip22)" transform="matrix(1.01496 0 0 1 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img21"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1082.17 32.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1181.5 86.1712)"
                        />
                        <path
                            d="M1178.55 99.0309 1170.86 90.6543 1171.35 90.2035 1179.04 98.58ZM1171.11 90.4289 1170.95 94.1967 1167.5 86.5001 1174.87 90.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1187.95 98.8892 1178.5 98.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.98 18.7862 1180.35 18.7862 1180.35 31.5862 1085.98 31.5862Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.98 18.1196 1085.98 32.2529"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1180.35 18.1196 1180.35 32.2529"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.31 18.7862 1181.01 18.7862"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.31 31.5862 1181.01 31.5862"
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
                                transform="translate(1089.76 29)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1100.26 29)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1081.5 33.5001 1100.69 33.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.47 85.8699 1276.13 85.8699 1276.13 98.6699 1188.47 98.6699Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.47 85.2033 1188.47 99.3366"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1276.13 85.2033 1276.13 99.3366"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1187.8 85.8699 1276.79 85.8699"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1187.8 98.6699 1276.79 98.6699"
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
                                transform="translate(1192.25 96)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1202.75 96)"
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
                            transform="matrix(1 0 0 -1 1078.5 40.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1187.99 58.5001)"
                        />
                        <path
                            d="M1188.5 58.5001 1207.69 58.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1192.67 45.6864 1265.87 45.6864 1265.87 58.4864 1192.67 58.4864Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1192.67 45.0197 1192.67 59.1531"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1265.87 45.0197 1265.87 59.1531"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1192 45.6864 1266.53 45.6864"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1192 58.4864 1266.53 58.4864"
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
                                transform="translate(1196.45 56)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1164.5 86.5001 1187.21 86.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M33.5001 526C33.5001 520.753 37.7533 516.5 43.0001 516.5 48.2468 516.5 52.5001 520.753 52.5001 526 52.5001 531.247 48.2468 535.5 43.0001 535.5 37.7533 535.5 33.5001 531.247 33.5001 526Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M33.5001 548C33.5001 542.753 37.7533 538.5 43.0001 538.5 48.2468 538.5 52.5001 542.753 52.5001 548 52.5001 553.247 48.2468 557.5 43.0001 557.5 37.7533 557.5 33.5001 553.247 33.5001 548Z"
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
                            transform="translate(57.9697 528)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(57.8869 550)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M33 504.5C33 499.253 37.2533 495 42.5 495 47.7467 495 52 499.253 52 504.5 52 509.747 47.7467 514 42.5 514 37.2533 514 33 509.747 33 504.5Z"
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
                            transform="translate(57.8869 506)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(58.1518 483)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(57.887 460)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip23)"
                            transform="matrix(0.000104987 0 0 0.000104987 38 448)"
                        >
                            <g clip-path="url(#clip24)" transform="matrix(1 0 0 1.07143 -0.03125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip25)"
                            transform="matrix(0.000104987 0 0 0.000104987 38 470)"
                        >
                            <g clip-path="url(#clip26)" transform="matrix(1 0 0 1.125 -0.03125 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1026.62 540.621 1100.27 540.621 1100.27 554.355 1026.62 554.355Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1026.62 539.955 1026.62 555.021"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1100.27 539.955 1100.27 555.021"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1025.95 540.621 1100.93 540.621"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1025.95 554.355 1100.93 554.355"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g513"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1030.4 551)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip27)"
                            transform="matrix(0.000104987 0 0 0.000104987 1093 541)"
                        >
                            <g clip-path="url(#clip28)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M77.4026 357.209 133.613 357.209 133.613 370.009 77.4026 370.009Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M77.4026 356.542 77.4026 370.676"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M133.613 356.542 133.613 370.676"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M76.736 357.209 134.28 357.209"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M76.736 370.009 134.28 370.009"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g446"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(81.1822 367)"
                            >
                                U
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

        // Add a thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        fetch('/quyi-buzsuv/server18', { signal: controller.signal })
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

                let c1 = 0;
                data.forEach(item => {
                    if (item.id === 589) {
                        const plus = document.getElementById("g589Plus");
                        const minus = document.getElementById("g589Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(589);
                            c1 = 1;
                        } else {
                            falseAnimation(589);
                        }
                    } else if (item.id === 566) {
                        const plus = document.getElementById("g566Plus");
                        const minus = document.getElementById("g566Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(566);
                            c1 = 1;
                        } else {
                            falseAnimation(566);
                        }
                    } else if (item.id === 612) {
                        const plus = document.getElementById("g612Plus");
                        const minus = document.getElementById("g612Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(612);
                            c1 = 1;
                        } else {
                            falseAnimation(612);
                        }
                    } else if(item.id === 578) {
                        const value = document.getElementById("g578");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 446) {
                        const value = document.getElementById("g446");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 513) {
                        const value = document.getElementById("g513");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(513);
                            trueAnimation(5131);
                            trueAnimation(5132);
                        } else {
                            falseAnimation(513);
                            falseAnimation(5131);
                            falseAnimation(5132);
                        }
                    } else if(item.id === 543) {
                        const value = document.getElementById("g543");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(543);
                        } else {
                            falseAnimation(543);
                        }
                    } else if(item.id === 658) {
                        const value = document.getElementById("g658");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(658);
                        } else {
                            falseAnimation(658);
                        }
                    } else if(item.id === 635) {
                        const value = document.getElementById("g635");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(635);
                        } else {
                            falseAnimation(635);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 480) {
                        const value = document.getElementById("g480");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a480");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.34 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(480);
                            trueAnimation(4801);
                        } else {
                            falseAnimation(480);
                            falseAnimation(4801);
                        }
                    } else if(item.id === 481) {
                        const value = document.getElementById("g481");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 482) {
                        const value = document.getElementById("k480");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 483) {
                        const value = document.getElementById("n480");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 484) {
                        const value = document.getElementById("w480");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 457) {
                        const value = document.getElementById("g457");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a457");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.34 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(457);
                            trueAnimation(4571);
                        } else {
                            falseAnimation(457);
                            falseAnimation(4571);
                        }
                    } else if(item.id === 458) {
                        const value = document.getElementById("g458");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 459) {
                        const value = document.getElementById("k457");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 460) {
                        const value = document.getElementById("n457");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 461) {
                        const value = document.getElementById("w457");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 434) {
                        const value = document.getElementById("g434");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a434");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.34 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(434);
                            trueAnimation(4341);
                        } else {
                            falseAnimation(434);
                            falseAnimation(4341);
                        }
                    } else if(item.id === 435) {
                        const value = document.getElementById("g435");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 436) {
                        const value = document.getElementById("k434");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 437) {
                        const value = document.getElementById("n434");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 438) {
                        const value = document.getElementById("w434");
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
                if (c1 > 0) {
                    trueAnimation(1);
                    trueAnimation(2);
                    trueAnimation(3);
                    trueAnimation(4);
                } else {
                    falseAnimation(1);
                    falseAnimation(2);
                    falseAnimation(3);
                    falseAnimation(4);
                }
                falseAnimation(0);
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