<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-22';

$id = 45;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$energy = new Energy();
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);

$urlTransformer1 = $energy->getTransformer($id, 107);
$urlTransformer2 = $energy->getTransformer($id, 108);
$urlTransformer3 = $energy->getTransformer($id, 109);
$urlTransformer4 = $energy->getTransformer($id, 110);

$urlSwitch1 = $energy->getSwitch($id, 262);
$urlSwitch2 = $energy->getSwitch($id, 263);
$urlSwitch3 = $energy->getSwitch($id, 264);
$urlSwitch4 = $energy->getSwitch($id, 265);
$urlSwitch5 = $energy->getSwitch($id, 266);
$urlSwitch6 = $energy->getSwitch($id, 267);
$urlSwitch7 = $energy->getSwitch($id, 268);
$urlSwitch8 = $energy->getSwitch($id, 269);
$urlSwitch9 = $energy->getSwitch($id, 270);
$urlSwitch10 = $energy->getSwitch($id, 271);
$urlSwitch11 = $energy->getSwitch($id, 272);
$urlSwitch12 = $energy->getSwitch($id, 273);
$urlSwitch13 = $energy->getSwitch($id, 274);
$urlSwitch14 = $energy->getSwitch($id, 275);
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
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOFJREFUSEvtl1kOxTAIA5PQfX33P+0TXbFDb8B8wkiR7EZKU2JykabloUMjIh0Pa3pRBh4z+dCkjLxA2un0ZOYNslyayMory/BoIpmXL20xXsPbl85oIguvb1bQRDYWTkZ7qjL5tWgRiBvOWQTihLOxo9S1PEUgVTgYyUuPmi0CgVqgCATCmXlrMLVwEchTS/4+VSn3yXURyHVbvCKQ47a4RSBay0cRyJzSzjOXPvHkg7TPF1445V6asNs6ns79oH+sfVyQOqDwlPDCU8ILTwkvPCW88JSRNale9yf8ELN/C393qxyRJJMMtwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img5"
                        ></image>
                        <clipPath id="clip6">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip7">
                            <rect x="0" y="-4.65661e-10" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip13">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip14">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip15">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip16">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img18"
                        ></image>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="1173079" height="571500" />
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
                            d="M0 0 277.855 1.3937"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 623.355 188.5)"
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
                            transform="translate(541.88 86)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(549.88 86)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(553.38 86)"
                        >
                            Айдын
                        </text>
                        <path
                            d="M1214.56 396.49 164.5 394.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 451.212 1.28567"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1119.71 187.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(696.905 88)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(704.905 88)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(708.405 88)"
                        >
                            22
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(719.071 88)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(722.571 88)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(695.643 234)"
                        >
                            ОД
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(711.309 234)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(714.809 234)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(727.309 234)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(730.809 234)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(353.858 207)"
                        >
                            СШ 35 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(434.89 461)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(441.723 461)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(445.223 461)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(434.89 474)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(442.89 474)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(434.89 487)"
                        >
                            2.2 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(434.89 500)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(456.556 500)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(460.056 500)"
                        >
                            325/49
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(489.723 500)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(493.223 500)"
                        >
                            32
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1171.22 412)"
                        >
                            СШ 6 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(609.282 476)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(624.115 476)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(627.615 476)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(609.282 489)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(633.615 489)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(609.282 502)"
                        >
                            100
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(627.949 502)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(609.282 515)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(626.449 515)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(629.949 515)"
                        >
                            100/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(727.56 476)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(742.393 476)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(745.893 476)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(727.56 489)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(751.893 489)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(727.56 502)"
                        >
                            100
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(746.227 502)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(727.56 515)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(744.727 515)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(748.227 515)"
                        >
                            100/6
                        </text>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 486.5 191.5)"
                        />
                        <path
                            d="M489.69 213.764 489.5 191.5"
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
                            transform="translate(509.718 226)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(516.885 226)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(520.385 226)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(527.551 226)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(531.051 226)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(536.385 226)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(539.885 226)"
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
                            transform="matrix(1 0 0 -1 638.5 397.5)"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect id="c12781"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 480.5 231.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(672.18 279)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(679.346 279)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(682.846 279)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(672.18 292)"
                        >
                            110/35/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(712.846 292)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(672.18 305)"
                        >
                            16 000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(704.18 305)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(672.18 318)"
                        >
                            ТДТН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(702.18 318)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(705.68 318)"
                        >
                            16000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(914.375 525)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(923.542 525)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(927.042 525)"
                        >
                            Божхона
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(969.208 525)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(972.708 525)"
                        >
                            2 (П)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1024.47 527)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1033.64 527)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1037.14 527)"
                        >
                            Пахтакор
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(845.263 497)"
                        >
                            КТП
                        </text>
                        <a href="<?= $urlSwitch7 ?>">
                            <rect id="c1209"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 631.5 356.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(586.959 349)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(594.126 349)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(597.626 349)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(610.126 349)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(613.626 349)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(534.986 16)"
                        >
                            Қуйи Бўзсув
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(645.406 16)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(656.24 16)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(670.24 16)"
                        >
                            (ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(714.406 16)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(720.573 16)"
                        >
                            22)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(915.089 86)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(923.089 86)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(926.589 86)"
                        >
                            22
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(937.256 86)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(940.756 86)"
                        >
                            Чиназ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(835.447 436)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(842.613 436)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(846.113 436)"
                        >
                            КТП
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(602.396 434)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(609.563 434)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(613.063 434)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(627.896 434)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(631.396 434)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(973.633 434)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(980.8 434)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(984.3 434)"
                        >
                            Б
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1074.82 434)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1081.98 434)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1085.48 434)"
                        >
                            Пах
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(527.223 163)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(534.389 163)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(537.889 163)"
                        >
                            А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(735.052 164)"
                        >
                            Р
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(741.552 164)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(745.052 164)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(753.052 164)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(756.552 164)"
                        >
                            22
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(957.108 162)"
                        >
                            Р
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(963.608 162)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(967.108 162)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(975.108 162)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(978.608 162)"
                        >
                            Ч
                        </text>
                        <path
                            d="M0 0 0.00178478 15.563"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 640.5 338.063)"
                        />
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c12093"
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(-1 1.22465e-16 1.22465e-16 1 643.5 270.5)"
                            />
                            <path id="c12092"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(-1 1.22465e-16 1.22465e-16 1 655.5 292.5)"
                            />
                            <path id="c12091"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(-1 1.22465e-16 1.22465e-16 1 667.5 271.5)"
                            />
                        </a>
                        <path
                            d="M652.5 271.548 652.5 251.5 714.505 251.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 19.2045 0 19.2045 138.614 38.4089 138.614"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1.83697e-16 -1 -1 1.83697e-16 628.115 269.909)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 789.5 191.5)"
                        />
                        <path
                            d="M791.69 213.764 791.5 191.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M640.779 392.84 640.5 356.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M564.739 188.974 564.5 169.5"
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
                            transform="matrix(1 0 0 -1 562.5 190.5)"
                        />
                        <a href="<?= $urlSwitch1 ?>">
                            <rect id="c1278"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 555.5 169.5)"
                            />
                        </a>
                        <path
                            d="M564.722 151.598 564.5 98.5001"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M563.222 151.605 563.025 104.506 566.025 104.494 566.222 151.592ZM564.525 104.5 560.038 107.519 564.5 98.5001 569.038 107.481Z"
                            fill="#663300"
                        />
                        <path
                            d="M716.739 188.974 716.5 169.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 713.5 191.5)"
                        />
                        <a href="<?= $urlSwitch2 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 707.5 169.5)"
                            />
                        </a>
                        <path
                            d="M715.722 151.598 715.5 98.5001"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M714.222 151.605 714.025 104.506 717.025 104.494 717.222 151.592ZM715.525 104.5 711.038 107.519 715.5 98.5001 720.038 107.481Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M522.617 42.9593 606.217 42.9593 606.217 56.5504 522.617 56.5504Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M522.617 56.5504 606.217 56.5504 606.217 70.1416 522.617 70.1416Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M521.951 56.5504 606.884 56.5504"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M522.617 42.2926 522.617 70.8083"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M606.217 42.2926 606.217 70.8083"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M521.951 42.9593 606.884 42.9593"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M521.951 70.1416 606.884 70.1416"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1278Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(526.397 53)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1278Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(526.397 67)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip1)"
                            transform="matrix(0.000104987 0 0 0.000104987 600 44)"
                        >
                            <g clip-path="url(#clip3)" transform="matrix(1 0 0 1.02857 -0.5 0)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 600 57)"
                        >
                            <g clip-path="url(#clip6)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M657.618 332.171 741.218 332.171 741.218 345.762 657.618 345.762Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M657.618 345.762 741.218 345.762 741.218 359.353 657.618 359.353Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M656.952 345.762 741.885 345.762"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M657.618 331.504 657.618 360.02"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M741.218 331.504 741.218 360.02"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M656.952 332.171 741.885 332.171"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M656.952 359.353 741.885 359.353"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1209Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(661.398 342)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1209Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(661.398 356)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip7)"
                            transform="matrix(0.000104987 0 0 0.000104987 735 333)"
                        >
                            <g clip-path="url(#clip8)" transform="scale(1 1.02857)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 735 346)"
                        >
                            <g clip-path="url(#clip10)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M943.739 188.974 943.5 169.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 940.5 190.5)"
                        />
                        <a href="<?= $urlSwitch3 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 933.5 169.5)"
                            />
                        </a>
                        <path
                            d="M942.722 151.598 942.5 98.5001"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M941.222 151.605 941.025 104.506 944.025 104.494 944.222 151.592ZM942.525 104.5 938.038 107.519 942.5 98.5001 947.038 107.481Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1044.02 170.586 1119.54 170.586 1119.54 183.386 1044.02 183.386Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1044.02 169.92 1044.02 184.053"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1119.54 169.92 1119.54 184.053"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1043.35 170.586 1120.21 170.586"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1043.35 183.386 1120.21 183.386"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(1047.8 181)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M0 0 0.147507 22.8548"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 402.5 419.355)"
                        />
                        <a href="<?= $urlSwitch9 ?>">
                            <rect id="c1117"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 393.5 435.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(418.098 429)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(425.265 429)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(428.765 429)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(435.598 429)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(439.098 429)"
                        >
                            2
                        </text>
                        <path
                            d="M402.648 452.092 402.5 435.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M584.867 461.901 584.5 397.5"
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
                            transform="matrix(1 0 0 -1 582.5 397.5)"
                        />
                        <a href="<?= $urlSwitch10 ?>">
                            <rect id="c1163"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 576.5 440.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c11632"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 568.5 519.5)"
                            />
                            <path id="c11631"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 568.5 495.5)"
                            />
                        </a>
                        <path
                            d="M587 519.5 587 544.429 584 544.429 584 519.5ZM592.046 536.184 585.5 547.406 578.954 536.184C578.537 535.469 578.779 534.55 579.494 534.133 580.21 533.716 581.128 533.957 581.546 534.673L586.796 543.673 584.204 543.673 589.454 534.673C589.872 533.957 590.79 533.716 591.506 534.133 592.221 534.55 592.463 535.469 592.046 536.184Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M549.631 569.311 623.278 569.311 623.278 583.044 549.631 583.044Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.631 568.645 549.631 583.711"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M623.278 568.645 623.278 583.711"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M548.964 569.311 623.944 569.311"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M548.964 583.044 623.944 583.044"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1163"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(553.41 579)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M0 0 0.170289 23.1157"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1053.67 398.5)"
                        />
                        <a href="<?= $urlSwitch14 ?>">
                            <rect id="c1186"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1044.5 440.5)"
                            />
                        </a>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1051.5 398.5)"
                        />
                        <path
                            d="M1055 440.5 1055 494.596 1052 494.596 1052 440.5ZM1060.05 486.352 1053.5 497.573 1046.95 486.352C1046.54 485.636 1046.78 484.718 1047.49 484.3 1048.21 483.883 1049.13 484.124 1049.55 484.84L1054.8 493.84 1052.2 493.84 1057.45 484.84C1057.87 484.124 1058.79 483.883 1059.51 484.3 1060.22 484.718 1060.46 485.636 1060.05 486.352Z"
                            fill="#006600"
                        />
                        <path
                            d="M1018.88 498.11 1092.52 498.11 1092.52 511.843 1018.88 511.843Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1018.88 497.443 1018.88 512.51"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1092.52 497.443 1092.52 512.51"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1018.21 498.11 1093.19 498.11"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1018.21 511.843 1093.19 511.843"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1186"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1022.65 508)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M0 0 0.183727 23.514"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 951.684 398.5)"
                        />
                        <a href="<?= $urlSwitch13 ?>">
                            <rect id="c1255"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 942.5 440.5)"
                            />
                        </a>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 949.5 398.5)"
                        />
                        <path
                            d="M953 440.5 953 494.596 950 494.596 950 440.5ZM958.046 486.352 951.5 497.573 944.954 486.352C944.537 485.636 944.779 484.718 945.494 484.3 946.21 483.883 947.128 484.124 947.546 484.84L952.796 493.84 950.204 493.84 955.454 484.84C955.872 484.124 956.79 483.883 957.506 484.3 958.221 484.718 958.463 485.636 958.046 486.352Z"
                            fill="#006600"
                        />
                        <path
                            d="M917.152 498.11 990.799 498.11 990.799 511.843 917.152 511.843Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M917.152 497.443 917.152 512.51"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M990.799 497.443 990.799 512.51"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M916.486 498.11 991.466 498.11"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M916.486 511.843 991.466 511.843"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1255"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(920.932 508)"
                            >
                                Р
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(722.414 435)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(729.581 435)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(733.081 435)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(747.914 435)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(751.414 435)"
                        >
                            2
                        </text>
                        <path
                            d="M704.867 462.901 704.5 398.5"
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
                            transform="matrix(1 0 0 -1 702.5 398.5)"
                        />
                        <a href="<?= $urlSwitch11 ?>">
                            <rect id="c1140"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 696.5 441.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c11402"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 688.5 520.5)"
                            />
                            <path id="c11401"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 688.5 496.5)"
                            />
                        </a>
                        <path
                            d="M707 520.495 707.126 559.518 704.126 559.528 704 520.505ZM712.145 551.258 705.635 562.5 699.053 551.3C698.634 550.586 698.872 549.667 699.587 549.247 700.301 548.827 701.22 549.066 701.64 549.78L706.919 558.763 704.328 558.771 709.549 549.755C709.964 549.038 710.881 548.793 711.598 549.208 712.315 549.623 712.56 550.541 712.145 551.258Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M667.667 569.915 741.313 569.915 741.313 583.648 667.667 583.648Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M667.667 569.248 667.667 584.315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M741.313 569.248 741.313 584.315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M667 569.915 741.98 569.915"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M667 583.648 741.98 583.648"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1140"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(671.446 580)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M816.867 462.901 816.5 398.5"
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
                            transform="matrix(1 0 0 -1 814.5 398.5)"
                        />
                        <a href="<?= $urlSwitch12 ?>">
                            <rect id="c1232"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 808.5 441.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c12322"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 800.5 520.5)"
                            />
                            <path id="c12321"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 800.5 496.5)"
                            />
                        </a>
                        <path
                            d="M819 520.495 819.126 559.518 816.126 559.528 816 520.505ZM824.145 551.258 817.635 562.5 811.053 551.3C810.634 550.586 810.872 549.667 811.587 549.247 812.301 548.827 813.22 549.066 813.64 549.78L818.919 558.763 816.328 558.771 821.549 549.755C821.964 549.038 822.881 548.793 823.598 549.208 824.315 549.623 824.56 550.541 824.145 551.258Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M779.667 569.915 853.313 569.915 853.313 583.648 779.667 583.648Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M779.667 569.248 779.667 584.315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M853.313 569.248 853.313 584.315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M779 569.915 853.98 569.915"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M779 583.648 853.98 583.648"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1232"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(783.446 580)"
                            >
                                Р
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(248.913 461)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(255.747 461)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(259.247 461)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(248.913 474)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(256.913 474)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(248.913 487)"
                        >
                            2.2 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(248.913 500)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(270.58 500)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(274.08 500)"
                        >
                            325/49
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(303.747 500)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(307.247 500)"
                        >
                            32
                        </text>
                        <path
                            d="M0 0 0.000104987 22.5761"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 217.5 417.076)"
                        />
                        <a href="<?= $urlSwitch8 ?>">
                            <rect id="c1094"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 208.5 435.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(232.639 430)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(239.806 430)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(243.306 430)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(250.139 430)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(253.639 430)"
                        >
                            1
                        </text>
                        <path
                            d="M218.672 452.092 218.5 435.5"
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
                            transform="matrix(1 0 0 -1 215.5 398.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 399.5 398.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(558.346 561)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(567.513 561)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(571.013 561)"
                        >
                            Поселок
                        </text>
                        <g
                            clip-path="url(#clip11)"
                            transform="matrix(-0.000104987 1.28572e-20 -1.28572e-20 -0.000104987 999 511)"
                        >
                            <g
                                clip-path="url(#clip12)"
                                transform="matrix(1 1.35342e-23 -2.45364e-24 1.02857 1 -9.31323e-10)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip13)"
                            transform="matrix(-0.000104987 1.28572e-20 -1.28572e-20 -0.000104987 1101 510)"
                        >
                            <g
                                clip-path="url(#clip14)"
                                transform="matrix(1 1.35342e-23 -2.45364e-24 1.02857 1 0.5)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch6 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 712.5 260.5)"
                            />
                        </a>
                        <path
                            d="M0 0 59.9008 0.164199"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 731.5 250.664)"
                        />
                        <a href="<?= $urlSwitch5 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 782.5 232.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.000104987 18.0929"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 791.5 250.593)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(807.86 226)"
                        >
                            Р
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(814.36 226)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(817.86 226)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(830.36 226)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(833.86 226)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1061.73 203)"
                        >
                            СШ 110 кВ
                        </text>
                        <path
                            d="M343.113 504.724 466.163 504.724 466.163 517.524 343.113 517.524Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.113 517.524 466.163 517.524 466.163 530.324 343.113 530.324Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.113 530.324 466.163 530.324 466.163 543.124 343.113 543.124Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.113 543.124 466.163 543.124 466.163 555.924 343.113 555.924Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.113 555.924 466.163 555.924 466.163 568.724 343.113 568.724Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.113 568.724 466.163 568.724 466.163 581.524 343.113 581.524Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.447 517.524 466.83 517.524"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.447 530.324 466.83 530.324"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.447 543.124 466.83 543.124"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.447 555.924 466.83 555.924"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.447 568.724 466.83 568.724"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.113 504.057 343.113 582.191"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M466.163 504.057 466.163 582.191"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.447 504.724 466.83 504.724"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.447 581.524 466.83 581.524"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1117"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.893 515)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1118"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.893 528)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a1117"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.893 540)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k1117"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.893 553)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n1117"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.893 566)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w1117" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.893 579)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M158.113 504.724 281.163 504.724 281.163 517.524 158.113 517.524Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M158.113 517.524 281.163 517.524 281.163 530.324 158.113 530.324Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M158.113 530.324 281.163 530.324 281.163 543.124 158.113 543.124Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M158.113 543.124 281.163 543.124 281.163 555.924 158.113 555.924Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M158.113 555.924 281.163 555.924 281.163 568.724 158.113 568.724Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M158.113 568.724 281.163 568.724 281.163 581.524 158.113 581.524Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.447 517.524 281.83 517.524"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.447 530.324 281.83 530.324"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.447 543.124 281.83 543.124"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.447 555.924 281.83 555.924"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.447 568.724 281.83 568.724"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M158.113 504.057 158.113 582.191"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M281.163 504.057 281.163 582.191"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.447 504.724 281.83 504.724"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.447 581.524 281.83 581.524"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1094"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(161.893 515)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1095"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(161.893 528)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a1094"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(161.893 540)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k1094"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(161.893 553)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n1094"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(161.893 566)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w1094" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(161.893 579)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c10941"
                            d="M194.5 477C194.5 463.469 205.469 452.5 219 452.5 232.531 452.5 243.5 463.469 243.5 477 243.5 490.531 232.531 501.5 219 501.5 205.469 501.5 194.5 490.531 194.5 477Z"
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
                                            d="M218.689 470.933 219.622 470.933 220.944 471.167 222.033 471.633 222.889 472.178 223.9 473.189 224.522 474.122 224.989 475.367 225.144 476.067 225.144 477.933 224.833 479.1 224.211 480.344 223.589 481.122 223.044 481.667 221.956 482.367 220.711 482.833 219.933 482.989 218.378 482.989 217.133 482.678 216.278 482.289 215.422 481.744 214.567 480.967 214.022 480.189 213.478 479.1 213.167 477.856 213.089 476.922 213.244 475.678 213.556 474.667 214.178 473.5 215.033 472.567 215.656 472.022 216.978 471.322 218.144 471.011Z"
                                        />
                                        <path
                                            d="M219.156 457.089 220.011 457.089 221.489 457.322 222.967 457.789 224.211 458.411 225.144 459.033 225.922 459.733 226.856 460.667 227.711 461.911 228.333 463.156 228.8 464.556 229.033 465.722 229.111 466.344 229.111 467.822 228.878 469.3 228.489 470.622 227.867 471.944 227.089 473.033 226.933 473.033 226.311 471.944 225.378 470.856 224.522 470.078 223.433 469.378 222.267 468.833 220.944 468.444 219.156 468.211Z"
                                        />
                                        <path
                                            d="M206.4 472.878 206.789 472.956 208.967 474.2 210.522 475.133 210.6 475.289 210.444 476.922 210.6 478.556 210.989 480.033 211.533 481.2 211.533 481.433 209.356 482.678 207.489 483.767 203.444 486.1 202.122 486.878 201.889 486.878 201.189 485.4 200.8 484.078 200.644 483.144 200.567 481.822 200.722 480.344 200.956 479.256 201.5 477.778 202.044 476.767 202.744 475.756 203.678 474.744 204.533 473.967 205.933 473.111Z"
                                        />
                                        <path
                                            d="M226.7 481.433 227.089 481.511 228.956 482.6 235.022 486.1 236.344 486.878 236.189 487.267 235.644 488.044 234.944 488.9 234.4 489.444 233.233 490.3 231.989 491 230.511 491.544 229.344 491.778 228.878 491.856 226.544 491.856 225.378 491.622 224.133 491.233 222.811 490.611 221.878 489.989 221.878 485.322 222.578 485.011 223.9 484.311 224.833 483.611 225.922 482.522Z"
                                        />
                                        <path
                                            d="M209.667 462.067 211.378 462.067 212.856 462.3 214.489 462.844 215.811 463.544 216.433 463.933 216.433 468.678 215.033 469.3 213.944 470 213.089 470.7 212.544 471.244 211.611 472.567 211.144 472.411 209.822 471.633 203.756 468.133 202.044 467.122 201.967 466.967 202.511 466.111 203.367 465.1 203.989 464.478 205.156 463.622 206.244 463 207.722 462.456 208.578 462.222Z"
                                        />
                                        <path
                                            d="M213.167 483.533 213.478 483.611 214.644 484.467 215.967 485.089 217.211 485.478 218.144 485.633 219.078 485.711 219.156 485.789 219.156 496.833 217.989 496.833 216.433 496.522 215.111 496.056 213.711 495.278 212.7 494.5 211.922 493.8 211.144 492.867 210.367 491.622 209.744 490.222 209.356 488.744 209.2 487.344 209.2 486.489 209.278 485.789 211.222 484.7 212.544 483.922Z"
                                        />
                                        <path
                                            d="M236.267 467.044 236.422 467.044 236.967 468.133 237.433 469.533 237.667 470.778 237.744 472.333 237.589 473.733 237.278 475.056 236.656 476.533 236.111 477.467 235.489 478.322 234.633 479.256 233.467 480.189 232.456 480.811 231.756 481.122 229.811 480.033 227.944 478.944 227.711 478.789 227.867 477.389 227.867 476.222 228.567 475.522 229.578 474.2 230.278 473.033 230.978 471.556 231.522 469.844 232.222 469.378 234.167 468.289 236.033 467.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c11171"
                            d="M378.5 477C378.5 463.469 389.469 452.5 403 452.5 416.531 452.5 427.5 463.469 427.5 477 427.5 490.531 416.531 501.5 403 501.5 389.469 501.5 378.5 490.531 378.5 477Z"
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
                                            d="M0 0 0.922222 0 2.2287 0.230556 3.30463 0.691667 4.15 1.22963 5.14907 2.2287 5.76389 3.15093 6.225 4.38056 6.3787 5.07222 6.3787 6.91667 6.0713 8.06944 5.45648 9.29907 4.84167 10.0676 4.3037 10.6056 3.22778 11.2972 1.99815 11.7583 1.22963 11.912-0.307407 11.912-1.53704 11.6046-2.38241 11.2204-3.22778 10.6824-4.07315 9.91389-4.61111 9.14537-5.14907 8.06944-5.45648 6.83981-5.53333 5.91759-5.37963 4.68796-5.07222 3.68889-4.45741 2.53611-3.61204 1.61389-2.99722 1.07593-1.69074 0.384259-0.537963 0.0768519Z"
                                            transform="matrix(1 0 0 1.01205 402.193 469.933)"
                                        />
                                        <path
                                            d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                            transform="matrix(1 0 0 1.01205 402.654 456.089)"
                                        />
                                        <path
                                            d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                            transform="matrix(1 0 0 1.01205 390.05 471.878)"
                                        />
                                        <path
                                            d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                            transform="matrix(1 0 0 1.01205 410.108 480.433)"
                                        />
                                        <path
                                            d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                            transform="matrix(1 0 0 1.01205 393.278 461.067)"
                                        />
                                        <path
                                            d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                            transform="matrix(1 0 0 1.01205 396.736 482.533)"
                                        />
                                        <path
                                            d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                            transform="matrix(1 0 0 1.01205 419.561 466.044)"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                            d="M27.5001 535C27.5001 529.753 31.7533 525.5 37.0001 525.5 42.2468 525.5 46.5001 529.753 46.5001 535 46.5001 540.247 42.2468 544.5 37.0001 544.5 31.7533 544.5 27.5001 540.247 27.5001 535Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M27.5001 556C27.5001 550.753 31.7533 546.5 37.0001 546.5 42.2468 546.5 46.5001 550.753 46.5001 556 46.5001 561.247 42.2468 565.5 37.0001 565.5 31.7533 565.5 27.5001 561.247 27.5001 556Z"
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
                            transform="translate(52.432 537)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(52.3493 559)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M27 512.5C27 507.253 31.2533 503 36.5 503 41.7467 503 46 507.253 46 512.5 46 517.747 41.7467 522 36.5 522 31.2533 522 27 517.747 27 512.5Z"
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
                            transform="translate(52.3493 515)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(52.6142 491)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(52.3494 468)"
                        >
                            прием
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 32 457)">
                            <g clip-path="url(#clip15)" transform="scale(1.05 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 32 479)">
                            <g clip-path="url(#clip16)" transform="scale(1.05 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip17)"
                            transform="matrix(0.000104987 0 0 0.000104987 1037 56)"
                        >
                            <g clip-path="url(#clip19)" transform="scale(1.01496 1)">
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
                            transform="matrix(-1 0 0 1 1059.17 51.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1157.5 105.171)"
                        />
                        <path
                            d="M1155.55 118.031 1147.86 109.654 1148.35 109.203 1156.04 117.58ZM1148.11 109.429 1147.95 113.197 1144.5 105.5 1151.87 109.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1164.95 117.889 1155.5 117.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1062.67 37.678 1157.03 37.678 1157.03 50.478 1062.67 50.478Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1062.67 37.0113 1062.67 51.1447"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1157.03 37.0113 1157.03 51.1447"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1062 37.678 1157.7 37.678"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1062 50.478 1157.7 50.478"
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
                                transform="translate(1066.44 48)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1076.94 48)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1058.5 51.5001 1077.69 51.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1165.16 104.762 1252.82 104.762 1252.82 117.562 1165.16 117.562Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1165.16 104.095 1165.16 118.228"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1252.82 104.095 1252.82 118.228"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1164.49 104.762 1253.48 104.762"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1164.49 117.562 1253.48 117.562"
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
                                transform="translate(1168.94 115)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1179.44 115)"
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
                            transform="matrix(1 0 0 -1 1055.5 59.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1164.99 77.5001)"
                        />
                        <path
                            d="M1165.5 77.5001 1184.69 77.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1169.35 64.5782 1242.55 64.5782 1242.55 77.3782 1169.35 77.3782Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1169.35 63.9115 1169.35 78.0448"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1242.55 63.9115 1242.55 78.0448"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1168.69 64.5782 1243.22 64.5782"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1168.69 77.3782 1243.22 77.3782"
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
                                transform="translate(1173.13 75)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1140.5 105.5 1163.21 105.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M346.323 171.899 421.841 171.899 421.841 184.699 346.323 184.699Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M346.323 171.232 346.323 185.365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M421.841 171.232 421.841 185.365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M345.656 171.899 422.507 171.899"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M345.656 184.699 422.507 184.699"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1290"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(350.102 182)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M1138.93 380.106 1214.45 380.106 1214.45 392.906 1138.93 392.906Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1138.93 379.439 1138.93 393.573"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1214.45 379.439 1214.45 393.573"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1138.26 380.106 1215.12 380.106"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1138.26 392.906 1215.12 392.906"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1221"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1142.71 390)"
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
        fetch('/quyi-buzsuv/server22', { signal: controller.signal })
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
                    if (item.id === 1278) {
                        const plus = document.getElementById("g1278Plus");
                        const minus = document.getElementById("g1278Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1278);
                        } else {
                            falseAnimation(1278);
                        }
                    } else if (item.id === 1209) {
                        const plus = document.getElementById("g1209Plus");
                        const minus = document.getElementById("g1209Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1209);
                        } else {
                            falseAnimation(1209);
                        }
                    } else if(item.id === 1255) {
                        const value = document.getElementById("g1255");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1255);
                        } else {
                            falseAnimation(1255);
                        }
                    } else if(item.id === 1186) {
                        const value = document.getElementById("g1186");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1186);
                        } else {
                            falseAnimation(1186);
                        }
                    } else if(item.id === 1290) {
                        const value = document.getElementById("g1290");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1221) {
                        const value = document.getElementById("g1221");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1163) {
                        const value = document.getElementById("g1163");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1163);
                            trueAnimation(11631);
                            trueAnimation(11632);
                        } else {
                            falseAnimation(1163);
                            falseAnimation(11631);
                            falseAnimation(11632);
                        }
                    } else if(item.id === 1140) {
                        const value = document.getElementById("g1140");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1140);
                            trueAnimation(11401);
                            trueAnimation(11402);
                        } else {
                            falseAnimation(1140);
                            falseAnimation(11401);
                            falseAnimation(11402);
                        }
                    } else if(item.id === 1232) {
                        const value = document.getElementById("g1232");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1232);
                            trueAnimation(12321);
                            trueAnimation(12322);
                        } else {
                            falseAnimation(1232);
                            falseAnimation(12321);
                            falseAnimation(12322);
                        }
                    } else if(item.id === 1255) {
                        const value = document.getElementById("g1255");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1255);
                        } else {
                            falseAnimation(1255);
                        }
                    } else if(item.id === 1186) {
                        const value = document.getElementById("g1186");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1186);
                        } else {
                            falseAnimation(1186);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 1094) {
                        const value = document.getElementById("g1094");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a1094");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.2 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(1094);
                            trueAnimation(10941);
                        } else {
                            falseAnimation(1094);
                            falseAnimation(10941);
                        }
                    } else if(item.id === 1095) {
                        const value = document.getElementById("g1095");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 1096) {
                        const value = document.getElementById("k1094");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 1097) {
                        const value = document.getElementById("n1094");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 1098) {
                        const value = document.getElementById("w1094");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 1117) {
                        const value = document.getElementById("g1117");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a1117");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.2 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(1117);
                            trueAnimation(11171);
                        } else {
                            falseAnimation(1117);
                            falseAnimation(11171);
                        }
                    } else if(item.id === 1118) {
                        const value = document.getElementById("g1118");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 1119) {
                        const value = document.getElementById("k1117");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 1120) {
                        const value = document.getElementById("n1117");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 1121) {
                        const value = document.getElementById("w1117");
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