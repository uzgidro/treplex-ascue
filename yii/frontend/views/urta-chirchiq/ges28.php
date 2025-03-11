<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-28 Ғазалкент ГЭС';
$energy = new Energy();
$dashboard = new Dashboard();
$id = 26;
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);

$urlTransformer1 = $energy->getTransformer($id, 19);
$urlTransformer2 = $energy->getTransformer($id, 20);
$urlTransformer3 = $energy->getTransformer($id, 21);
$urlTransformer4 = $energy->getTransformer($id, 22);
$urlTransformer5 = $energy->getTransformer($id, 23);
$urlTransformer6 = $energy->getTransformer($id, 24);
$urlTransformer7 = $energy->getTransformer($id, 25);
$urlTransformer8 = $energy->getTransformer($id, 26);

$urlSwitch1 = $energy->getSwitch($id, 106);
$urlSwitch2 = $energy->getSwitch($id, 107);
$urlSwitch3 = $energy->getSwitch($id, 108);
$urlSwitch4 = $energy->getSwitch($id, 109);
$urlSwitch5 = $energy->getSwitch($id, 110);
$urlSwitch6 = $energy->getSwitch($id, 111);
$urlSwitch7 = $energy->getSwitch($id, 112);
$urlSwitch8 = $energy->getSwitch($id, 113);
$urlSwitch9 = $energy->getSwitch($id, 114);
$urlSwitch10 = $energy->getSwitch($id, 115);
$urlSwitch11 = $energy->getSwitch($id, 116);
$urlSwitch12 = $energy->getSwitch($id, 117);
$urlSwitch13 = $energy->getSwitch($id, 118);
$urlSwitch14 = $energy->getSwitch($id, 119);
$urlSwitch15 = $energy->getSwitch($id, 120);
$urlSwitch16 = $energy->getSwitch($id, 121);
$urlSwitch17 = $energy->getSwitch($id, 122);
$urlSwitch18 = $energy->getSwitch($id, 123);
$urlSwitch19 = $energy->getSwitch($id, 124);
$urlSwitch20 = $energy->getSwitch($id, 125);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['urta-chirchiq/index']) ?>">"Ўрта Чирчиқ ГЭСлар каскади" Филиали</a></li>
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
                    viewBox="0 0 1300 650"
                    height="100%"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    overflow="hidden"
                >
                    <defs>
                        <filter
                            id="fx0"
                            x="-10%"
                            y="-10%"
                            width="120%"
                            height="120%"
                            filterUnits="userSpaceOnUse"
                            primitiveUnits="userSpaceOnUse"
                        >
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="discrete" tableValues="0 0" />
                                <feFuncG type="discrete" tableValues="0 0" />
                                <feFuncB type="discrete" tableValues="0 0" />
                                <feFuncA type="linear" slope="0.631373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="2 2" />
                        </filter>
                        <filter
                            id="fx1"
                            x="-10%"
                            y="-10%"
                            width="120%"
                            height="120%"
                            filterUnits="userSpaceOnUse"
                            primitiveUnits="userSpaceOnUse"
                        >
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="discrete" tableValues="0 0" />
                                <feFuncG type="discrete" tableValues="0 0" />
                                <feFuncB type="discrete" tableValues="0 0" />
                                <feFuncA type="linear" slope="0.631373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="2 2" />
                        </filter>
                        <image
                            width="128"
                            height="128"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img2"
                        ></image>
                        <clipPath id="clip3">
                            <rect x="0" y="0" width="876300" height="876300" />
                        </clipPath>
                        <clipPath id="clip4">
                            <rect x="0" y="0" width="876300" height="876300" />
                        </clipPath>
                        <clipPath id="clip5">
                            <path
                                d="M281 147 281 166 300 166 300 147ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip6">
                            <path
                                d="M487 146 487 165 506 165 506 146ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="876300" height="876300" />
                        </clipPath>
                        <clipPath id="clip8">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img9"
                        ></image>
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOpJREFUSEvt12sSgyAMBODYKiL4uv9pK7oKIcFeIN8vS3amlpWZSoXuw32xXukxznpMuAHTbMCEs5zlEstZLrGc5RLLWS6xnPpHzI2YZt5hdpgCRAxLEbMwE1b+oQUX72aigMs363GjvXZjlXODNnxoW85fTHJDOH/FyL1/c9yRU5oodUgdJixpAjKJW7EoxaI7oh2r0oYEtGoZMX94DLhUBKfXojyp9dtCgiI4+UDcRXBic6L+XiFqKYrgeC1iS7Jyc3gRXFlLVQSXN2fCSsO9ObII7q7leTZbrtOiFsGl06IXwTlfnAgg+gEGAhJwZdPnjwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img16"
                        ></image>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip25">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="0" y="0" width="47625" height="114300" />
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
                        <clipPath id="clip30">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip31">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip32">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip33">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip34">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip35">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip36">
                            <rect x="9.31323e-10" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip37">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip38">
                            <rect x="0" y="0" width="1190625" height="581025" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img39"
                        ></image>
                        <clipPath id="clip40">
                            <rect x="0" y="0" width="1190625" height="580048" />
                        </clipPath>
                        <clipPath id="clip41">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip42">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip43">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip44">
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
                        <g transform="matrix(0.000104987 0 0 0.000104987 1109 518)">
                            <g clip-path="url(#clip3)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(6846.09 6846.09)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 971 518)">
                            <g clip-path="url(#clip4)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(6846.09 6846.09)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(866.599 445)"
                        >
                            А-СП-СН-1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(994.197 448)"
                        >
                            А-СП-СН-2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1138.42 446)"
                        >
                            А-СП-СН-3
                        </text>
                        <path
                            d="M1.5-7.95483e-07 1.5001 197.968-1.49989 197.968-1.5 7.95483e-07ZM4.5001 197.968C4.50011 200.453 2.48539 202.468 0.000107373 202.468-2.48517 202.468-4.49989 200.453-4.4999 197.968-4.4999 195.483-2.48518 193.468 0.0001026 193.468 2.48538 193.468 4.5001 195.483 4.5001 197.968Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 973.5 602.468)"
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
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(584.149 19)"
                        >
                            ГЭС-28 (Газалкент)
                        </text>
                        <path
                            d="M195.863 306.885 195.5 263.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 312.554 1.08577"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1121.05 156.5)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(76.2696 169)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(81.6029 169)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(85.1029 169)"
                        >
                            сл
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(95.7696 169)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(99.2696 169)"
                        >
                            110кВ
                        </text>
                        <path
                            d="M0 0 633.307 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 701.807 157.5)"
                        />
                        <path
                            d="M1.5-3.07977e-06 1.5001 51.1339-1.49989 51.1339-1.5 3.07977e-06ZM4.5001 51.1338C4.50011 53.6191 2.4854 55.6339 0.000114226 55.6339-2.48517 55.6339-4.49989 53.6191-4.4999 51.1339-4.4999 48.6486-2.48519 46.6339 9.57476e-05 46.6339 2.48538 46.6339 4.5001 48.6486 4.5001 51.1338Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 195.5 208.634)"
                        />
                        <g clip-path="url(#clip5)">
                            <g filter="url(#fx0)" transform="translate(272 140)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#0099FF"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch2 ?>">
                            <rect
                                id="c1"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 281 166)"
                            />
                        </a>
                        <g clip-path="url(#clip6)">
                            <g filter="url(#fx1)" transform="translate(478 139)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#0099FF"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch3 ?>">
                            <rect
                                id="c2"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 487 165)"
                            />
                        </a>
                        <path
                            d="M1.5-3.00272e-06 1.50009 46.4459-1.49991 46.4459-1.5 3.00272e-06ZM-4.5 9.00815e-06C-4.5-2.48527-2.48529-4.49999-9.00815e-06-4.5 2.48527-4.5 4.49999-2.48529 4.5-9.00815e-06 4.5 2.48527 2.48529 4.49999 9.00815e-06 4.5-2.48527 4.5-4.49999 2.48529-4.5 9.00815e-06ZM9.2976e-05 46.4459 4.50009 43.4459 0.000104987 52.4459-4.49991 43.4459Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 222.5 156.946)"
                        />
                        <a href="<?= $urlSwitch1 ?>">
                            <rect
                                id="c6573"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 186.5 191.5)"
                            />
                        </a>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1033.49 130)"
                        >
                            В.Ф.СН
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1071.16 130)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1074.66 130)"
                        >
                            28
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(839.683 130)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(846.85 130)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(850.35 130)"
                        >
                            27
                        </text>
                        <path
                            d="M849.817 433.679 849.001 405.544 851.999 405.457 852.816 433.592ZM846.002 405.631C845.93 403.146 847.885 401.074 850.37 401.002 852.854 400.93 854.926 402.885 854.998 405.37 855.07 407.854 853.115 409.926 850.631 409.998 848.146 410.07 846.074 408.115 846.002 405.631Z"
                            fill="#989898"
                        />
                        <path
                            d="M780.5 599.5 853.559 599.5"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(736.475 558)"
                        >
                            Сол
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(754.308 558)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(757.808 558)"
                        >
                            Пан
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(738.308 571)"
                        >
                            100 кВт
                        </text>
                        <path
                            d="M0 0 66.4863 0.720735"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1038.99 601.5)"
                        />
                        <path
                            d="M0 0 0.000104987 196.851"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1116.5 601.351)"
                        />
                        <path
                            d="M1114.5 601.5 1177.65 601.5"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 296.031 0.96"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 673.5 404.46)"
                        />
                        <path
                            d="M392.57 288 317.5 288 317.5 285 392.57 285ZM392.57 282C395.055 282 397.07 284.015 397.07 286.5 397.07 288.985 395.055 291 392.57 291 390.085 291 388.07 288.985 388.07 286.5 388.07 284.015 390.085 282 392.57 282Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M1036.07 285.416 851.5 284.5"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(762.167 383)"
                        >
                            АС
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(929.612 394)"
                        >
                            СН
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(949.612 394)"
                        >
                            -
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(954.112 394)"
                        >
                            2
                        </text>
                        <path
                            d="M0 0 0.337638 138.68"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 122.5 423.18)"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c6574"
                                d="M0 15.5C-1.97336e-15 6.93959 6.93959-1.97336e-15 15.5-3.94671e-15 24.0604-7.89343e-15 31 6.93959 31 15.5 31 24.0604 24.0604 31 15.5 31 6.93959 31-9.86678e-15 24.0604 0 15.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 106.5 453.5)"
                            />
                            <path id="c6575"
                                  d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                  stroke="#989898"
                                  stroke-width="3"
                                  stroke-miterlimit="8"
                                  fill="#FFFFFF"
                                  fill-rule="evenodd"
                                  transform="matrix(1 0 0 -1 106.5 478.5)"
                            />
                        </a>
                        <path
                            d="M2.14639e-06-1.5 73.3698-1.49989 73.3698 1.5001-2.14639e-06 1.5ZM-6.43918e-06 4.5C-2.48529 4.5-4.5 2.48528-4.5-6.43918e-06-4.5-2.48529-2.48528-4.5 6.43918e-06-4.5 2.48529-4.5 4.5-2.48528 4.5 6.43918e-06 4.5 2.48529 2.48528 4.5-6.43918e-06 4.5Z"
                            fill="#6600CC"
                            transform="matrix(-1 0 0 1 194.87 285.5)"
                        />
                        <path
                            d="M2.14638e-06-1.5 73.3701-1.49989 73.3701 1.5001-2.14638e-06 1.5ZM-6.43915e-06 4.5C-2.48529 4.5-4.5 2.48528-4.5-6.43915e-06-4.5-2.48529-2.48528-4.5 6.43915e-06-4.5 2.48529-4.5 4.5-2.48528 4.5 6.43915e-06 4.5 2.48529 2.48528 4.5-6.43915e-06 4.5Z"
                            fill="#6600CC"
                            transform="matrix(-1 0 0 1 579.87 285.5)"
                        />
                        <path
                            d="M669.295 535.379 121.5 534.5"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(186.031 96)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(194.031 96)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(197.531 96)"
                        >
                            27
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(208.198 96)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(211.698 96)"
                        >
                            Чирчи
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(243.865 96)"
                        >
                            қ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(250.031 96)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(253.531 96)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(585.43 95)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(593.43 95)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(596.93 95)"
                        >
                            27
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(607.597 95)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(611.097 95)"
                        >
                            Чирчи
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(643.263 95)"
                        >
                            қ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(649.43 95)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(652.93 95)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(232.416 310)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(239.25 310)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(242.75 310)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(232.416 323)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(253.75 323)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(232.416 336)"
                        >
                            40 МВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(232.416 349)"
                        >
                            СВ 808/130
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(284.916 349)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(288.416 349)"
                        >
                            44
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(429.053 314)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(435.887 314)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(439.387 314)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(429.053 327)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(450.387 327)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(429.053 340)"
                        >
                            40 МВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(429.053 353)"
                        >
                            СВ 808/130
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(481.553 353)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(485.053 353)"
                        >
                            44
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(619.754 313)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(626.588 313)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(630.088 313)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(619.754 326)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(641.088 326)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(619.754 339)"
                        >
                            40 МВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(619.754 352)"
                        >
                            СВ 808/130
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(672.254 352)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(675.754 352)"
                        >
                            44
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(649.107 167)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(654.44 167)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(657.94 167)"
                        >
                            сл
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(668.607 167)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(672.107 167)"
                        >
                            110кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(219.501 220)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(226.668 220)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(230.168 220)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(219.501 233)"
                        >
                            10,5/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(259.834 233)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(219.501 246)"
                        >
                            80 000
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(251.501 246)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(219.501 259)"
                        >
                            ТДЦ 80 000/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(417.946 219)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(425.113 219)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(428.613 219)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(417.946 232)"
                        >
                            10,5/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(458.279 232)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(417.946 245)"
                        >
                            80 000
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(449.946 245)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(417.946 258)"
                        >
                            ТДЦ 80 000/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(607.517 220)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(614.684 220)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(618.184 220)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(607.517 233)"
                        >
                            10,5/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(647.85 233)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(607.517 246)"
                        >
                            80 000
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(639.517 246)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(607.517 259)"
                        >
                            ТДЦ 80 000/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(162.628 185)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(169.794 185)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(173.294 185)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(277.489 141)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(284.655 141)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(288.155 141)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(293.489 141)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(296.989 141)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(483.003 140)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(490.17 140)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(493.67 140)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(499.003 140)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(502.503 140)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(591.055 184)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(598.221 184)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(601.721 184)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(78.9757 441)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(93.8091 441)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(97.3091 441)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(51.6424 454)"
                        >
                            10,5/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(89.3091 454)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(62.9757 467)"
                        >
                            400
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(81.6424 467)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(49.8091 480)"
                        >
                            ТСЗ 400/10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(275.402 442)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(290.236 442)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(293.736 442)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(248.069 455)"
                        >
                            10,5/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(285.736 455)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(259.402 468)"
                        >
                            400
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(278.069 468)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(246.236 481)"
                        >
                            ТСЗ 400/10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(464.888 443)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(479.721 443)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(483.221 443)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(437.554 456)"
                        >
                            10,5/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(475.221 456)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(448.888 469)"
                        >
                            400
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(467.554 469)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(435.721 482)"
                        >
                            ТСЗ 400/10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(902.309 183)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(917.143 183)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(920.643 183)"
                        >
                            4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(880.309 196)"
                        >
                            6,3/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(912.643 196)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(886.309 209)"
                        >
                            630
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(904.976 209)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(873.143 222)"
                        >
                            ТСЗ 400/10
                        </text>
                        <text
                                fill="#8A94AD"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(958 255)"
                        >
                            А-ТС-4
                        </text>
                        <text
                                fill="#8A94AD"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(1028 255)"
                        >
                            А-ТС-5
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1092.78 181)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1107.61 181)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1111.11 181)"
                        >
                            5
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1092.78 194)"
                        >
                            6,3/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1125.11 194)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1092.78 207)"
                        >
                            630
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1111.45 207)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1092.78 220)"
                        >
                            ТСЗ 400/10
                        </text>
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c6571"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 180.5 263.5)"
                            />
                            <path
                                d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 180.5 263.5)"
                            />
                            <path id="c6572"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 180.5 239.5)"
                            />
                        </a>

                        <path
                            d="M0 0 0.250184 57.019"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 121.5 535.519)"
                        />
                        <path
                            d="M149.072 358.712 242.18 358.712 242.18 371.512 149.072 371.512Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M149.072 371.512 242.18 371.512 242.18 384.312 149.072 384.312Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M149.072 384.312 242.18 384.312 242.18 397.112 149.072 397.112Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M149.072 397.112 242.18 397.112 242.18 409.912 149.072 409.912Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M149.072 409.912 242.18 409.912 242.18 422.712 149.072 422.712Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M149.072 422.712 242.18 422.712 242.18 435.512 149.072 435.512Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M148.406 371.512 242.847 371.512"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M148.406 384.312 242.847 384.312"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M148.406 397.112 242.847 397.112"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M148.406 409.912 242.847 409.912"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M148.406 422.712 242.847 422.712"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M149.072 358.045 149.072 436.178"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M242.18 358.045 242.18 436.178"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M148.406 358.712 242.847 358.712"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M148.406 435.512 242.847 435.512"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g657"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(152.852 369)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g659"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(152.852 382)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a657"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(152.852 394)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k657"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(152.852 407)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n657"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(152.852 420)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w657"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(152.852 433)"
                                fill="blue"
                            >
                                Qвода
                            </text>
                        </g>
                        <a href="<?= $urlSwitch5 ?>">
                            <rect
                                id="c6576"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 112.5 513.5)"
                            />
                        </a>
                        <path
                            d="M392.863 306.885 392.5 263.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.33333-2.73757e-06 1.33344 51.1339-1.33323 51.1339-1.33333 2.73757e-06ZM4.0001 51.1338C4.00011 53.343 2.20925 55.1339 0.0001132 55.1339-2.20903 55.1339-3.99989 53.343-3.99989 51.1339-3.9999 48.9247-2.20904 47.1339 9.67742e-05 47.1339 2.20924 47.1339 4.0001 48.9247 4.0001 51.1338Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 393.5 208.634)"
                        />
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c6811"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 377.5 263.5)"
                            />
                            <path
                                d="M-1.50712 15.5-1.17395 12.0849-0.216285 8.89693 1.30033 6.00964 3.31087 3.49161 5.75173 1.4106 8.55931-0.164108 11.6669-1.16091 15-1.50812 18.3331-1.16091 21.4407-0.164108 24.2483 1.4106 26.6891 3.49161 28.6997 6.00964 30.2163 8.89693 31.1739 12.0849 31.5071 15.5 31.1739 18.9151 30.2163 22.1031 28.6997 24.9904 26.6891 27.5084 24.2483 29.5894 21.4407 31.1641 18.3331 32.1609 15 32.5081 11.6669 32.1609 8.55931 31.1641 5.75173 29.5894 3.31087 27.5084 1.30033 24.9904-0.216285 22.1031-1.17395 18.9151ZM1.79766 18.4781 1.74133 18.1922 2.61535 21.1017 2.50672 20.8358 3.88971 23.4687 3.73395 23.2303 5.56558 25.5242 5.36658 25.3187 7.58654 27.2114 7.34713 27.0446 9.8951 28.4737 9.61948 28.3536 12.4351 29.2568 12.1324 29.1932 15.1554 29.5081 14.8446 29.5081 17.8676 29.1932 17.5649 29.2568 20.3805 28.3536 20.1049 28.4737 22.6529 27.0446 22.4135 27.2114 24.6334 25.3187 24.4344 25.5242 26.2661 23.2303 26.1103 23.4687 27.4933 20.8358 27.3846 21.1017 28.2587 18.1922 28.2023 18.4781 28.5071 15.3544 28.5071 15.6456 28.2023 12.5219 28.2587 12.8078 27.3846 9.89825 27.4933 10.1642 26.1103 7.53134 26.2661 7.76974 24.4344 5.47579 24.6334 5.6813 22.4135 3.78861 22.6529 3.95543 20.1049 2.52634 20.3805 2.64639 17.5649 1.74322 17.8676 1.80683 14.8446 1.49193 15.1554 1.49193 12.1324 1.80683 12.4351 1.74322 9.61948 2.64639 9.8951 2.52634 7.34713 3.95543 7.58654 3.78861 5.36658 5.6813 5.56558 5.47579 3.73395 7.76974 3.88971 7.53134 2.50672 10.1642 2.61535 9.89825 1.74133 12.8078 1.79766 12.5219 1.49291 15.6456 1.49291 15.3544Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 377.5 263.5)"
                            />
                            <path id="c6812"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 377.5 238.5)"
                            />
                        </a>
                        <path
                            d="M344.444 358.712 437.552 358.712 437.552 371.512 344.444 371.512Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M344.444 371.512 437.552 371.512 437.552 384.312 344.444 384.312Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M344.444 384.312 437.552 384.312 437.552 397.112 344.444 397.112Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M344.444 397.112 437.552 397.112 437.552 409.912 344.444 409.912Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M344.444 409.912 437.552 409.912 437.552 422.712 344.444 422.712Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M344.444 422.712 437.552 422.712 437.552 435.512 344.444 435.512Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.777 371.512 438.219 371.512"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.777 384.312 438.219 384.312"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.777 397.112 438.219 397.112"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.777 409.912 438.219 409.912"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.777 422.712 438.219 422.712"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M344.444 358.045 344.444 436.178"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M437.552 358.045 437.552 436.178"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.777 358.712 438.219 358.712"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.777 435.512 438.219 435.512"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g681"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(348.224 369)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g683"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(348.224 382)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a681"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(348.224 394)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k681"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(348.224 407)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n681"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(348.224 420)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w681"
                                fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(348.224 433)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M863.843 324.248 947.442 324.248 947.442 337.839 863.843 337.839Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M863.843 323.581 863.843 338.506"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M947.442 323.581 947.442 338.506"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M863.176 324.248 948.109 324.248"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M863.176 337.839 948.109 337.839"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g801"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(867.622 334)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip43)"
                            transform="matrix(0.000104987 0 0 0.000104987 939 325)"
                        >
                            <g clip-path="url(#clip44)" transform="matrix(1 0 0 1.02857 -1 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img16"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M579.863 305.885 579.5 262.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.33333-2.73757e-06 1.33344 51.1339-1.33323 51.1339-1.33333 2.73757e-06ZM4.0001 51.1338C4.00011 53.343 2.20925 55.1339 0.0001132 55.1339-2.20903 55.1339-3.99989 53.343-3.99989 51.1339-3.9999 48.9247-2.20904 47.1339 9.67742e-05 47.1339 2.20924 47.1339 4.0001 48.9247 4.0001 51.1338Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 579.5 207.634)"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect
                                id="c7053"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 570.5 190.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c7051"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 564.5 262.5)"
                            />
                            <path
                                d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 564.5 262.5)"
                            />
                            <path id="c7052"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 564.5 238.5)"
                            />
                        </a>
                        <path
                            d="M532.943 358.712 626.051 358.712 626.051 371.512 532.943 371.512Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.943 371.512 626.051 371.512 626.051 384.312 532.943 384.312Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.943 384.312 626.051 384.312 626.051 397.112 532.943 397.112Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.943 397.112 626.051 397.112 626.051 409.912 532.943 409.912Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.943 409.912 626.051 409.912 626.051 422.712 532.943 422.712Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.943 422.712 626.051 422.712 626.051 435.512 532.943 435.512Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.276 371.512 626.718 371.512"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.276 384.312 626.718 384.312"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.276 397.112 626.718 397.112"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.276 409.912 626.718 409.912"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.276 422.712 626.718 422.712"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.943 358.045 532.943 436.178"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M626.051 358.045 626.051 436.178"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.276 358.712 626.718 358.712"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.276 435.512 626.718 435.512"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g705"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(536.722 369)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g707"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(536.722 382)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a705"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(536.722 394)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k705"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(536.722 407)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n705"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(536.722 420)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w705"
                                fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(536.722 433)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M320.484 425.18 319.5 286.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M318.327 536.017 318 479.509 321 479.491 321.327 536ZM324.327 535.982C324.341 538.467 322.338 540.494 319.853 540.508 317.368 540.522 315.342 538.519 315.327 536.034 315.313 533.549 317.316 531.523 319.801 531.508 322.286 531.494 324.313 533.497 324.327 535.982Z"
                            fill="#989898"
                        />
                        <path
                            d="M508.484 423.18 507.5 284.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M507.236 536.014 507 479.506 510 479.494 510.236 536.002ZM513.236 535.989C513.247 538.475 511.24 540.498 508.755 540.508 506.27 540.519 504.247 538.512 504.236 536.027 504.226 533.542 506.232 531.519 508.718 531.508 511.203 531.498 513.226 533.504 513.236 535.989Z"
                            fill="#989898"
                        />
                        <a href="<?= $urlSwitch7 ?>">
                            <rect
                                id="c7056"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 498.5 513.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch6 ?>">
                            <rect
                                id="c6815"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 310.5 513.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch16 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 759.5 412.5)"
                            />
                        </a>
                        <path
                            d="M1.5-2.78133e-06 1.5001 56.6206-1.49989 56.6206-1.5 2.78133e-06ZM-4.5 8.34398e-06C-4.5-2.48527-2.48529-4.5-8.34398e-06-4.5 2.48527-4.5 4.5-2.48529 4.5-8.34398e-06 4.5 2.48527 2.48529 4.5 8.34398e-06 4.5-2.48527 4.5-4.5 2.48529-4.5 8.34398e-06Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 945.5 284.121)"
                        />
                        <a href="<?= $urlSwitch10 ?>">
                            <rect
                                id="c825"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 935.5 261.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c6813"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 304.5 453.5)"
                            />
                            <path id="c6814"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 304.5 479.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer6 ?>">
                            <path id="c7054"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 493.5 453.5)"
                            />
                            <path id="c7055"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 493.5 479.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer7 ?>">
                            <path id="c8252"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 930.5 201.5)"
                            />
                            <path id="c8251"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 930.5 227.5)"
                            />
                        </a>
                        <path
                            d="M1.49997-0.00870485 1.57903 13.6137-1.42092 13.6311-1.49997 0.00870485ZM4.57898 13.5962C4.5934 16.0815 2.59041 18.1079 0.10517 18.1223-2.38007 18.1367-4.40645 16.1337-4.42087 13.6485-4.43529 11.1632-2.4323 9.13686 0.0529406 9.12244 2.53818 9.10802 4.56456 11.111 4.57898 13.5962Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 945.5 171.122)"
                        />
                        <path
                            d="M1.5-3.00506e-06 1.50009 46.405-1.49991 46.405-1.5 3.00506e-06ZM-4.5 9.01518e-06C-4.5-2.48527-2.48529-4.49999-9.01518e-06-4.5 2.48527-4.5 4.49999-2.48529 4.5-9.01518e-06 4.5 2.48527 2.48529 4.49999 9.01518e-06 4.5-2.48527 4.5-4.49999 2.48529-4.5 9.01518e-06ZM9.29666e-05 46.405 4.50009 43.405 0.000104987 52.405-4.49991 43.405Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 624.5 157.905)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(809.299 96)"
                        >
                            СН
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(825.299 96)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(828.799 96)"
                        >
                            27
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(839.466 96)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(842.966 96)"
                        >
                            28
                        </text>
                        <path
                            d="M1.49997-0.00871811 1.79571 50.8726-1.20424 50.8901-1.49997 0.00871811ZM-4.49992 0.0261543C-4.51437-2.45909-2.51139-4.48548-0.0261543-4.49992 2.45909-4.51437 4.48548-2.51139 4.49992-0.0261543 4.51437 2.45909 2.51139 4.48548 0.0261543 4.49992-2.45909 4.51437-4.48548 2.51139-4.49992 0.0261543ZM0.295731 50.8814 4.77822 47.8553 0.330604 56.8813-4.22163 47.9076Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 828.5 157.381)"
                        />
                        <a href="<?= $urlSwitch8 ?>">
                            <rect
                                id="c874"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 819.5 138.5)"
                            />
                        </a>
                        <path
                            d="M1.49997-0.00871811 1.79571 50.8726-1.20424 50.8901-1.49997 0.00871811ZM-4.49992 0.0261543C-4.51437-2.45909-2.51139-4.48548-0.0261543-4.49992 2.45909-4.51437 4.48548-2.51139 4.49992-0.0261543 4.51437 2.45909 2.51139 4.48548 0.0261543 4.49992-2.45909 4.51437-4.48548 2.51139-4.49992 0.0261543ZM0.295731 50.8814 4.77822 47.8553 0.330604 56.8813-4.22163 47.9076Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 1020.5 155.381)"
                        />
                        <a href="<?= $urlSwitch9 ?>">
                            <rect
                                id="c182"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1010.5 137.5)"
                            />
                        </a>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(980.887 96)"
                        >
                            С
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(988.554 96)"
                        >
                            об.нужд
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1026.39 96)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1029.89 96)"
                        >
                            ГЭС28
                        </text>
                        <path
                            d="M1074.76 314.723 1074.5 226.5"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch11 ?>">
                            <rect
                                id="c849"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1064.5 261.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer8 ?>">
                            <path id="c8492"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1059.5 200.5)"
                            />
                            <path id="c8491"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1059.5 226.5)"
                            />
                        </a>
                        <path
                            d="M1.49997-0.00870485 1.57903 13.6137-1.42092 13.6311-1.49997 0.00870485ZM4.57898 13.5962C4.5934 16.0815 2.59041 18.1079 0.10517 18.1223-2.38007 18.1367-4.40645 16.1337-4.42087 13.6485-4.43529 11.1632-2.4323 9.13686 0.0529406 9.12244 2.53818 9.10802 4.56456 11.111 4.57898 13.5962Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 1074.5 170.122)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(520.102 507)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(527.769 507)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(531.269 507)"
                        >
                            ТС3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(331.44 507)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(339.106 507)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(342.606 507)"
                        >
                            ТС2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(134.067 507)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(141.733 507)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(145.233 507)"
                        >
                            ТС1
                        </text>
                        <a href="<?= $urlSwitch19 ?>">
                            <rect
                                id="c921"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 964.5 452.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch20 ?>">
                            <rect
                                id="c945"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1106.5 452.5)"
                            />
                        </a>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(1054.7 399)"
                        >
                            СН
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(1074.7 399)"
                        >
                            -
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(1079.2 399)"
                        >
                            3
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(684.85 396)"
                        >
                            СН
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(704.85 396)"
                        >
                            -
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(709.35 396)"
                        >
                            1
                        </text>
                        <path
                            d="M710 405.5 710 463.752 707 463.752 707 405.5ZM704 405.5C704 403.015 706.015 401 708.5 401 710.985 401 713 403.015 713 405.5 713 407.985 710.985 410 708.5 410 706.015 410 704 407.985 704 405.5ZM708.5 463.752 713 460.752 708.5 469.752 704 460.752Z"
                            fill="#989898"
                        />
                        <a href="<?= $urlSwitch17 ?>">
                            <rect
                                id="c777"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 698.5 453.5)"
                            />
                        </a>
                        <path
                            d="M1.5-1.30797e-06 1.5001 120.401-1.49989 120.401-1.5 1.30797e-06ZM-4.5 3.92391e-06C-4.5-2.48528-2.48529-4.5-3.92391e-06-4.5 2.48528-4.5 4.5-2.48529 4.5-3.92391e-06 4.5 2.48528 2.48529 4.5 3.92391e-06 4.5-2.48528 4.5-4.5 2.48529-4.5 3.92391e-06ZM4.5001 120.401C4.50011 122.886 2.48539 124.901 0.000108911 124.901-2.48517 124.901-4.49989 122.886-4.4999 120.401-4.4999 117.915-2.48518 115.901 0.000101063 115.901 2.48538 115.901 4.5001 117.915 4.5001 120.401Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 1036.5 404.901)"
                        />
                        <a href="<?= $urlSwitch13 ?>">
                            <rect
                                id="c8254"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1027.5 341.5)"
                            />
                        </a>
                        <path
                            d="M1177.84 314.71 1074.5 313.5"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(980.545 334)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(988.212 334)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(991.712 334)"
                        >
                            СН3Ш
                        </text>
                        <path
                            d="M1.5-1.30797e-06 1.5001 120.401-1.49989 120.401-1.5 1.30797e-06ZM-4.5 3.92391e-06C-4.5-2.48528-2.48529-4.5-3.92391e-06-4.5 2.48528-4.5 4.5-2.48529 4.5-3.92391e-06 4.5 2.48528 2.48529 4.5 3.92391e-06 4.5-2.48528 4.5-4.5 2.48529-4.5 3.92391e-06ZM4.5001 120.401C4.50011 122.886 2.48539 124.901 0.000108911 124.901-2.48517 124.901-4.49989 122.886-4.4999 120.401-4.4999 117.915-2.48518 115.901 0.000101063 115.901 2.48538 115.901 4.5001 117.915 4.5001 120.401Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 851.5 404.901)"
                        />
                        <a href="<?= $urlSwitch12 ?>">
                            <rect
                                id="c801"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 841.5 341.5)"
                            />
                        </a>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(699.068 496)"
                        >
                            СН
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(715.068 496)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(718.568 496)"
                        >
                            1
                        </text>
                        <path
                            d="M671 405.5 671 535.646 668 535.646 668 405.5ZM665 405.5C665 403.015 667.015 401 669.5 401 671.985 401 674 403.015 674 405.5 674 407.985 671.985 410 669.5 410 667.015 410 665 407.985 665 405.5ZM674 535.646C674 538.132 671.985 540.146 669.5 540.146 667.015 540.146 665 538.132 665 535.646 665 533.161 667.015 531.146 669.5 531.146 671.985 531.146 674 533.161 674 535.646Z"
                            fill="#989898"
                        />
                        <path
                            d="M0 0 0.000104987 96.4289"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1177.5 410.929)"
                        />
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(1190.97 400)"
                        >
                            СН
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(1210.97 400)"
                        >
                            -
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(1215.47 400)"
                        >
                            4
                        </text>
                        <path
                            d="M1038.5 405.5 1147.65 405.5"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1182.5 359.5 1222.72 359.573"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1215.94 333)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1223.61 333)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1227.11 333)"
                        >
                            СН3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1102.28 340)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1109.95 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1113.45 340)"
                        >
                            5
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1118.78 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1122.28 340)"
                        >
                            2
                        </text>
                        <path
                            d="M0 0 91.5834 0.786982"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1175.5 409.287)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(791.468 334)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(799.135 334)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(802.635 334)"
                        >
                            СН2Ш
                        </text>
                        <path
                            d="M1.5-1.06856e-06 1.5001 147.376-1.49989 147.376-1.5 1.06856e-06ZM4.5001 147.376C4.50011 149.861 2.48539 151.876 0.000108193 151.876-2.48517 151.876-4.49989 149.861-4.4999 147.376-4.4999 144.89-2.48518 142.876 0.000101781 142.876 2.48538 142.876 4.5001 144.89 4.5001 147.376Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 851.5 599.876)"
                        />
                        <a href="<?= $urlSwitch18 ?>">
                            <rect
                                id="c897"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 842.5 452.5)"
                            />
                        </a>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1052.49 564)"
                        >
                            Сол
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1070.32 564)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1073.82 564)"
                        >
                            Пан
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1054.32 577)"
                        >
                            200 кВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1187.89 563)"
                        >
                            Сол
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1205.72 563)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1209.22 563)"
                        >
                            Пан
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1189.72 576)"
                        >
                            200 кВт
                        </text>
                        <path
                            d="M1128.16 404.46 1128 361.506 1131 361.495 1131.16 404.449ZM1134.16 404.438C1134.17 406.923 1132.16 408.946 1129.68 408.955 1127.19 408.964 1125.17 406.957 1125.16 404.471 1125.15 401.986 1127.16 399.964 1129.64 399.955 1132.13 399.946 1134.15 401.953 1134.16 404.438ZM1125 361.517C1124.99 359.031 1127 357.009 1129.48 357 1131.97 356.991 1133.99 358.998 1134 361.483 1134.01 363.969 1132 365.991 1129.52 366 1127.03 366.009 1125.01 364.002 1125 361.517Z"
                            fill="#989898"
                        />
                        <path
                            d="M1230.07 408.407 1230 365.503 1233 365.497 1233.07 408.402ZM1236.07 408.397C1236.08 410.882 1234.07 412.9 1231.58 412.905 1229.1 412.909 1227.08 410.898 1227.07 408.412 1227.07 405.927 1229.08 403.909 1231.57 403.905 1234.05 403.9 1236.07 405.912 1236.07 408.397ZM1227 365.508C1227 363.022 1229.01 361.004 1231.49 361 1233.98 360.996 1236 363.007 1236 365.492 1236 367.978 1233.99 369.996 1231.51 370 1229.02 370.004 1227 367.993 1227 365.508Z"
                            fill="#989898"
                        />
                        <a href="<?= $urlSwitch14 ?>">
                            <rect
                                id="c8493"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1120.5 367.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch15 ?>">
                            <rect
                                id="c8494"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1222.5 368.5)"
                            />
                        </a>
                        <path
                            d="M1112.18 409.542C1110.5 407.711 1110.63 404.864 1112.46 403.184 1114.29 401.504 1117.14 401.627 1118.82 403.458 1120.5 405.289 1120.37 408.136 1118.54 409.816 1116.71 411.496 1113.86 411.374 1112.18 409.542ZM1115.5 406.5C1115.5 406.5 1115.5 406.5 1115.5 406.5 1115.5 406.5 1115.5 406.5 1115.5 406.5 1115.5 406.5 1115.5 406.5 1115.5 406.5 1115.5 406.5 1115.5 406.5 1115.5 406.5Z"
                            fill="#989898"
                        />
                        <path
                            d="M1171.56 359.795C1171.08 356.789 1173.35 353.997 1176.63 353.558 1179.91 353.119 1182.96 355.2 1183.44 358.206 1183.52 358.752 1183.52 359.308 1183.43 359.854"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1137.5 359.5 1172.27 359.5"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path id="c657"
                            d="M170.5 330C170.5 316.469 181.469 305.5 195 305.5 208.531 305.5 219.5 316.469 219.5 330 219.5 343.531 208.531 354.5 195 354.5 181.469 354.5 170.5 343.531 170.5 330Z"
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
                                        d="M193.689 323.933 194.622 323.933 195.944 324.167 197.033 324.633 197.889 325.178 198.9 326.189 199.522 327.122 199.989 328.367 200.144 329.067 200.144 330.933 199.833 332.1 199.211 333.344 198.589 334.122 198.044 334.667 196.956 335.367 195.711 335.833 194.933 335.989 193.378 335.989 192.133 335.678 191.278 335.289 190.422 334.744 189.567 333.967 189.022 333.189 188.478 332.1 188.167 330.856 188.089 329.922 188.244 328.678 188.556 327.667 189.178 326.5 190.033 325.567 190.656 325.022 191.978 324.322 193.144 324.011Z"
                                    />
                                    <path
                                        d="M194.156 310.089 195.011 310.089 196.489 310.322 197.967 310.789 199.211 311.411 200.144 312.033 200.922 312.733 201.856 313.667 202.711 314.911 203.333 316.156 203.8 317.556 204.033 318.722 204.111 319.344 204.111 320.822 203.878 322.3 203.489 323.622 202.867 324.944 202.089 326.033 201.933 326.033 201.311 324.944 200.378 323.856 199.522 323.078 198.433 322.378 197.267 321.833 195.944 321.444 194.156 321.211Z"
                                    />
                                    <path
                                        d="M181.4 325.878 181.789 325.956 183.967 327.2 185.522 328.133 185.6 328.289 185.444 329.922 185.6 331.556 185.989 333.033 186.533 334.2 186.533 334.433 184.356 335.678 182.489 336.767 178.444 339.1 177.122 339.878 176.889 339.878 176.189 338.4 175.8 337.078 175.644 336.144 175.567 334.822 175.722 333.344 175.956 332.256 176.5 330.778 177.044 329.767 177.744 328.756 178.678 327.744 179.533 326.967 180.933 326.111Z"
                                    />
                                    <path
                                        d="M201.7 334.433 202.089 334.511 203.956 335.6 210.022 339.1 211.344 339.878 211.189 340.267 210.644 341.044 209.944 341.9 209.4 342.444 208.233 343.3 206.989 344 205.511 344.544 204.344 344.778 203.878 344.856 201.544 344.856 200.378 344.622 199.133 344.233 197.811 343.611 196.878 342.989 196.878 338.322 197.578 338.011 198.9 337.311 199.833 336.611 200.922 335.522Z"
                                    />
                                    <path
                                        d="M184.667 315.067 186.378 315.067 187.856 315.3 189.489 315.844 190.811 316.544 191.433 316.933 191.433 321.678 190.033 322.3 188.944 323 188.089 323.7 187.544 324.244 186.611 325.567 186.144 325.411 184.822 324.633 178.756 321.133 177.044 320.122 176.967 319.967 177.511 319.111 178.367 318.1 178.989 317.478 180.156 316.622 181.244 316 182.722 315.456 183.578 315.222Z"
                                    />
                                    <path
                                        d="M188.167 336.533 188.478 336.611 189.644 337.467 190.967 338.089 192.211 338.478 193.144 338.633 194.078 338.711 194.156 338.789 194.156 349.833 192.989 349.833 191.433 349.522 190.111 349.056 188.711 348.278 187.7 347.5 186.922 346.8 186.144 345.867 185.367 344.622 184.744 343.222 184.356 341.744 184.2 340.344 184.2 339.489 184.278 338.789 186.222 337.7 187.544 336.922Z"
                                    />
                                    <path
                                        d="M211.267 320.044 211.422 320.044 211.967 321.133 212.433 322.533 212.667 323.778 212.744 325.333 212.589 326.733 212.278 328.056 211.656 329.533 211.111 330.467 210.489 331.322 209.633 332.256 208.467 333.189 207.456 333.811 206.756 334.122 204.811 333.033 202.944 331.944 202.711 331.789 202.867 330.389 202.867 329.222 203.567 328.522 204.578 327.2 205.278 326.033 205.978 324.556 206.522 322.844 207.222 322.378 209.167 321.289 211.033 320.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c681"
                            d="M368.5 330C368.5 316.469 379.469 305.5 393 305.5 406.531 305.5 417.5 316.469 417.5 330 417.5 343.531 406.531 354.5 393 354.5 379.469 354.5 368.5 343.531 368.5 330Z"
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
                                        d="M392.689 323.933 393.622 323.933 394.944 324.167 396.033 324.633 396.889 325.178 397.9 326.189 398.522 327.122 398.989 328.367 399.144 329.067 399.144 330.933 398.833 332.1 398.211 333.344 397.589 334.122 397.044 334.667 395.956 335.367 394.711 335.833 393.933 335.989 392.378 335.989 391.133 335.678 390.278 335.289 389.422 334.744 388.567 333.967 388.022 333.189 387.478 332.1 387.167 330.856 387.089 329.922 387.244 328.678 387.556 327.667 388.178 326.5 389.033 325.567 389.656 325.022 390.978 324.322 392.144 324.011Z"
                                    />
                                    <path
                                        d="M393.156 310.089 394.011 310.089 395.489 310.322 396.967 310.789 398.211 311.411 399.144 312.033 399.922 312.733 400.856 313.667 401.711 314.911 402.333 316.156 402.8 317.556 403.033 318.722 403.111 319.344 403.111 320.822 402.878 322.3 402.489 323.622 401.867 324.944 401.089 326.033 400.933 326.033 400.311 324.944 399.378 323.856 398.522 323.078 397.433 322.378 396.267 321.833 394.944 321.444 393.156 321.211Z"
                                    />
                                    <path
                                        d="M380.4 325.878 380.789 325.956 382.967 327.2 384.522 328.133 384.6 328.289 384.444 329.922 384.6 331.556 384.989 333.033 385.533 334.2 385.533 334.433 383.356 335.678 381.489 336.767 377.444 339.1 376.122 339.878 375.889 339.878 375.189 338.4 374.8 337.078 374.644 336.144 374.567 334.822 374.722 333.344 374.956 332.256 375.5 330.778 376.044 329.767 376.744 328.756 377.678 327.744 378.533 326.967 379.933 326.111Z"
                                    />
                                    <path
                                        d="M400.7 334.433 401.089 334.511 402.956 335.6 409.022 339.1 410.344 339.878 410.189 340.267 409.644 341.044 408.944 341.9 408.4 342.444 407.233 343.3 405.989 344 404.511 344.544 403.344 344.778 402.878 344.856 400.544 344.856 399.378 344.622 398.133 344.233 396.811 343.611 395.878 342.989 395.878 338.322 396.578 338.011 397.9 337.311 398.833 336.611 399.922 335.522Z"
                                    />
                                    <path
                                        d="M383.667 315.067 385.378 315.067 386.856 315.3 388.489 315.844 389.811 316.544 390.433 316.933 390.433 321.678 389.033 322.3 387.944 323 387.089 323.7 386.544 324.244 385.611 325.567 385.144 325.411 383.822 324.633 377.756 321.133 376.044 320.122 375.967 319.967 376.511 319.111 377.367 318.1 377.989 317.478 379.156 316.622 380.244 316 381.722 315.456 382.578 315.222Z"
                                    />
                                    <path
                                        d="M387.167 336.533 387.478 336.611 388.644 337.467 389.967 338.089 391.211 338.478 392.144 338.633 393.078 338.711 393.156 338.789 393.156 349.833 391.989 349.833 390.433 349.522 389.111 349.056 387.711 348.278 386.7 347.5 385.922 346.8 385.144 345.867 384.367 344.622 383.744 343.222 383.356 341.744 383.2 340.344 383.2 339.489 383.278 338.789 385.222 337.7 386.544 336.922Z"
                                    />
                                    <path
                                        d="M410.267 320.044 410.422 320.044 410.967 321.133 411.433 322.533 411.667 323.778 411.744 325.333 411.589 326.733 411.278 328.056 410.656 329.533 410.111 330.467 409.489 331.322 408.633 332.256 407.467 333.189 406.456 333.811 405.756 334.122 403.811 333.033 401.944 331.944 401.711 331.789 401.867 330.389 401.867 329.222 402.567 328.522 403.578 327.2 404.278 326.033 404.978 324.556 405.522 322.844 406.222 322.378 408.167 321.289 410.033 320.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c705"
                            d="M556.5 330C556.5 316.469 567.469 305.5 581 305.5 594.531 305.5 605.5 316.469 605.5 330 605.5 343.531 594.531 354.5 581 354.5 567.469 354.5 556.5 343.531 556.5 330Z"
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
                                        d="M579.689 323.933 580.622 323.933 581.944 324.167 583.033 324.633 583.889 325.178 584.9 326.189 585.522 327.122 585.989 328.367 586.144 329.067 586.144 330.933 585.833 332.1 585.211 333.344 584.589 334.122 584.044 334.667 582.956 335.367 581.711 335.833 580.933 335.989 579.378 335.989 578.133 335.678 577.278 335.289 576.422 334.744 575.567 333.967 575.022 333.189 574.478 332.1 574.167 330.856 574.089 329.922 574.244 328.678 574.556 327.667 575.178 326.5 576.033 325.567 576.656 325.022 577.978 324.322 579.144 324.011Z"
                                    />
                                    <path
                                        d="M580.156 310.089 581.011 310.089 582.489 310.322 583.967 310.789 585.211 311.411 586.144 312.033 586.922 312.733 587.856 313.667 588.711 314.911 589.333 316.156 589.8 317.556 590.033 318.722 590.111 319.344 590.111 320.822 589.878 322.3 589.489 323.622 588.867 324.944 588.089 326.033 587.933 326.033 587.311 324.944 586.378 323.856 585.522 323.078 584.433 322.378 583.267 321.833 581.944 321.444 580.156 321.211Z"
                                    />
                                    <path
                                        d="M567.4 325.878 567.789 325.956 569.967 327.2 571.522 328.133 571.6 328.289 571.444 329.922 571.6 331.556 571.989 333.033 572.533 334.2 572.533 334.433 570.356 335.678 568.489 336.767 564.444 339.1 563.122 339.878 562.889 339.878 562.189 338.4 561.8 337.078 561.644 336.144 561.567 334.822 561.722 333.344 561.956 332.256 562.5 330.778 563.044 329.767 563.744 328.756 564.678 327.744 565.533 326.967 566.933 326.111Z"
                                    />
                                    <path
                                        d="M587.7 334.433 588.089 334.511 589.956 335.6 596.022 339.1 597.344 339.878 597.189 340.267 596.644 341.044 595.944 341.9 595.4 342.444 594.233 343.3 592.989 344 591.511 344.544 590.344 344.778 589.878 344.856 587.544 344.856 586.378 344.622 585.133 344.233 583.811 343.611 582.878 342.989 582.878 338.322 583.578 338.011 584.9 337.311 585.833 336.611 586.922 335.522Z"
                                    />
                                    <path
                                        d="M570.667 315.067 572.378 315.067 573.856 315.3 575.489 315.844 576.811 316.544 577.433 316.933 577.433 321.678 576.033 322.3 574.944 323 574.089 323.7 573.544 324.244 572.611 325.567 572.144 325.411 570.822 324.633 564.756 321.133 563.044 320.122 562.967 319.967 563.511 319.111 564.367 318.1 564.989 317.478 566.156 316.622 567.244 316 568.722 315.456 569.578 315.222Z"
                                    />
                                    <path
                                        d="M574.167 336.533 574.478 336.611 575.644 337.467 576.967 338.089 578.211 338.478 579.144 338.633 580.078 338.711 580.156 338.789 580.156 349.833 578.989 349.833 577.433 349.522 576.111 349.056 574.711 348.278 573.7 347.5 572.922 346.8 572.144 345.867 571.367 344.622 570.744 343.222 570.356 341.744 570.2 340.344 570.2 339.489 570.278 338.789 572.222 337.7 573.544 336.922Z"
                                    />
                                    <path
                                        d="M597.267 320.044 597.422 320.044 597.967 321.133 598.433 322.533 598.667 323.778 598.744 325.333 598.589 326.733 598.278 328.056 597.656 329.533 597.111 330.467 596.489 331.322 595.633 332.256 594.467 333.189 593.456 333.811 592.756 334.122 590.811 333.033 588.944 331.944 588.711 331.789 588.867 330.389 588.867 329.222 589.567 328.522 590.578 327.2 591.278 326.033 591.978 324.556 592.522 322.844 593.222 322.378 595.167 321.289 597.033 320.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <g transform="matrix(0.000104987 0 0 0.000104987 766 516)">
                            <g clip-path="url(#clip7)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(6846.09 6846.09)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M765.899 601.642 849.499 601.642 849.499 615.233 765.899 615.233Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M765.899 600.975 765.899 615.9"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M849.499 600.975 849.499 615.9"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M765.232 601.642 850.165 601.642"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M765.232 615.233 850.165 615.233"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(769.679 612)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip8)"
                            transform="matrix(0.000104987 0 0 0.000104987 842 602)"
                        >
                            <g clip-path="url(#clip10)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M972.792 604.609 1056.39 604.609 1056.39 618.2 972.792 618.2Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M972.792 603.942 972.792 618.867"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1056.39 603.942 1056.39 618.867"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M972.125 604.609 1057.06 604.609"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M972.125 618.2 1057.06 618.2"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g921"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(976.572 615)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip11)"
                            transform="matrix(0.000104987 0 0 0.000104987 1049 605)"
                        >
                            <g clip-path="url(#clip12)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1113.6 604.188 1197.2 604.188 1197.2 617.779 1113.6 617.779Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1113.6 603.521 1113.6 618.445"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1197.2 603.521 1197.2 618.445"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1112.94 604.188 1197.87 604.188"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1112.94 617.779 1197.87 617.779"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g945"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1117.38 614)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip13)"
                            transform="matrix(0.000104987 0 0 0.000104987 1190 605)"
                        >
                            <g clip-path="url(#clip14)" transform="matrix(1 0 0 1.02857 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M69.3503 142.146 122.064 142.146 122.064 154.946 69.3503 154.946Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M69.3503 141.48 69.3503 155.613"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M122.064 141.48 122.064 155.613"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M68.6837 142.146 122.731 142.146"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M68.6837 154.946 122.731 154.946"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g722"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(73.1299 152)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M648.917 141.952 701.631 141.952 701.631 154.752 648.917 154.752Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M648.917 141.285 648.917 155.418"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M701.631 141.285 701.631 155.418"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M648.25 141.952 702.297 141.952"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M648.25 154.752 702.297 154.752"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="w722"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(652.696 152)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M185.996 54.2234 269.596 54.2234 269.596 67.8146 185.996 67.8146Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M185.996 67.8146 269.596 67.8146 269.596 81.4058 185.996 81.4058Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M185.33 67.8146 270.263 67.8146"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M185.996 53.5567 185.996 82.0724"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M269.596 53.5567 269.596 82.0724"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M185.33 54.2234 270.263 54.2234"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M185.33 81.4058 270.263 81.4058"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g729"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(189.776 64)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g730"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(189.776 78)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip15)"
                            transform="matrix(0.000104987 0 0 0.000104987 261 55)"
                        >
                            <g clip-path="url(#clip17)" transform="matrix(1 0 0 1.02857 0 -0.03125)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 262 69)"
                        >
                            <g clip-path="url(#clip19)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M579.042 54.8041 662.642 54.8041 662.642 68.3953 579.042 68.3953Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M579.042 68.3953 662.642 68.3953 662.642 81.9865 579.042 81.9865Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M578.375 68.3953 663.308 68.3953"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M579.042 54.1374 579.042 82.6531"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M662.642 54.1374 662.642 82.6531"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M578.375 54.8041 663.308 54.8041"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M578.375 81.9865 663.308 81.9865"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g753"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(582.822 65)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g754"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(582.822 78)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip20)"
                            transform="matrix(0.000104987 0 0 0.000104987 654 55)"
                        >
                            <g clip-path="url(#clip21)" transform="matrix(1 0 0 1.02857 0 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img16"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip22)"
                            transform="matrix(0.000104987 0 0 0.000104987 655 69)"
                        >
                            <g clip-path="url(#clip23)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M788.284 54.283 871.883 54.283 871.883 67.8742 788.284 67.8742Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M788.284 67.8742 871.883 67.8742 871.883 81.4654 788.284 81.4654Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M787.617 67.8742 872.55 67.8742"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M788.284 53.6164 788.284 82.1321"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M871.883 53.6164 871.883 82.1321"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M787.617 54.283 872.55 54.283"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M787.617 81.4654 872.55 81.4654"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g874"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(792.063 64)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g873"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(792.063 78)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip24)"
                            transform="matrix(0.000104987 0 0 0.000104987 864 55)"
                        >
                            <g clip-path="url(#clip25)" transform="matrix(1 0 0 1.02857 0 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img16"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip26)"
                            transform="matrix(0.000104987 0 0 0.000104987 864 69)"
                        >
                            <g clip-path="url(#clip27)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M977.915 53.5885 1061.51 53.5885 1061.51 67.1796 977.915 67.1796Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M977.915 67.1796 1061.51 67.1796 1061.51 80.7708 977.915 80.7708Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M977.248 67.1796 1062.18 67.1796"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M977.915 52.9218 977.915 81.4375"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1061.51 52.9218 1061.51 81.4375"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M977.248 53.5885 1062.18 53.5885"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M977.248 80.7708 1062.18 80.7708"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g182"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(981.694 64)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g181"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(981.694 77)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip28)"
                            transform="matrix(0.000104987 0 0 0.000104987 1053 54)"
                        >
                            <g clip-path="url(#clip29)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img16"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip30)"
                            transform="matrix(0.000104987 0 0 0.000104987 1054 68)"
                        >
                            <g clip-path="url(#clip31)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1089.5 237.549 1173.1 237.549 1173.1 251.14 1089.5 251.14Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1089.5 251.14 1173.1 251.14 1173.1 264.731 1089.5 264.731Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1088.83 251.14 1173.77 251.14"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1089.5 236.882 1089.5 265.398"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1173.1 236.882 1173.1 265.398"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1088.83 237.549 1173.77 237.549"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1088.83 264.731 1173.77 264.731"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g849"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1093.28 248)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g850"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1093.28 261)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip32)"
                            transform="matrix(0.000104987 0 0 0.000104987 1165 238)"
                        >
                            <g clip-path="url(#clip33)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img16"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip34)"
                            transform="matrix(0.000104987 0 0 0.000104987 1165 252)"
                        >
                            <g clip-path="url(#clip35)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M857.442 245.73 931.089 245.73 931.089 259.463 857.442 259.463Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M857.442 245.063 857.442 260.13"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M931.089 245.063 931.089 260.13"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M856.775 245.73 931.755 245.73"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M856.775 259.463 931.755 259.463"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g825"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(861.221 256)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M673.096 472.345 756.696 472.345 756.696 485.936 673.096 485.936Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M673.096 471.678 673.096 486.603"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M756.696 471.678 756.696 486.603"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M672.43 472.345 757.363 472.345"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M672.43 485.936 757.363 485.936"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g777"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(676.876 482)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip36)"
                            transform="matrix(0.000104987 0 0 0.000104987 748 473)"
                        >
                            <g clip-path="url(#clip37)" transform="matrix(1.16667 0 0 1 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img16"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip38)"
                            transform="matrix(0.000104987 0 0 0.000104987 1076 35)"
                        >
                            <g clip-path="url(#clip40)" transform="matrix(1 0 0 1.00168 0 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img39"
                                    transform="scale(7632.21 7632.21)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1098.17 31.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1196.5 85.1712)"
                        />
                        <path
                            d="M1194.55 97.0309 1186.86 88.6543 1187.35 88.2035 1195.04 96.58ZM1187.11 88.4289 1186.95 92.1967 1183.5 84.5001 1190.87 88.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1203.95 97.8892 1194.5 97.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.85 17.3032 1174.51 17.3032 1174.51 30.1032 1101.85 30.1032Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.85 16.6365 1101.85 30.7699"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.51 16.6365 1174.51 30.7699"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.18 17.3032 1175.17 17.3032"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.18 30.1032 1175.17 30.1032"
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
                                transform="translate(1105.63 27)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1116.13 27)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1097.5 31.5001 1116.69 31.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1204.34 84.3869 1275.33 84.3869 1275.33 97.1869 1204.34 97.1869Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1204.34 83.7202 1204.34 97.8535"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1275.33 83.7202 1275.33 97.8535"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1203.68 84.3869 1276 84.3869"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1203.68 97.1869 1276 97.1869"
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
                                transform="translate(1208.12 94)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1218.62 94)"
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
                            transform="matrix(1 0 0 -1 1094.5 39.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1203.99 57.5001)"
                        />
                        <path
                            d="M1204.5 57.5001 1223.69 57.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1208.54 44.2034 1266.33 44.2034 1266.33 57.0034 1208.54 57.0034Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1208.54 43.5367 1208.54 57.67"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1266.33 43.5367 1266.33 57.67"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1207.87 44.2034 1267 44.2034"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1207.87 57.0034 1267 57.0034"
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
                                transform="translate(1212.32 54)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1180.5 85.5001 1203.21 85.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M6.50005 579C6.50005 573.753 10.7533 569.5 16.0001 569.5 21.2468 569.5 25.5001 573.753 25.5001 579 25.5001 584.247 21.2468 588.5 16.0001 588.5 10.7533 588.5 6.50005 584.247 6.50005 579Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M6.50005 601C6.50005 595.753 10.7533 591.5 16.0001 591.5 21.2468 591.5 25.5001 595.753 25.5001 601 25.5001 606.247 21.2468 610.5 16.0001 610.5 10.7533 610.5 6.50005 606.247 6.50005 601Z"
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
                            transform="translate(31.1924 581)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(31.1097 603)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M6 556.5C6 551.253 10.2533 547 15.5 547 20.7467 547 25 551.253 25 556.5 25 561.747 20.7467 566 15.5 566 10.2533 566 6 561.747 6 556.5Z"
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
                            transform="translate(31.1097 559)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(31.3746 536)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(31.1098 513)"
                        >
                            прием
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 11 501)">
                            <g clip-path="url(#clip41)" transform="scale(1 1.07143)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img16"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 11 523)">
                            <g clip-path="url(#clip42)" transform="scale(1.05 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
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
        fetch('/urta-chirchiq/server28', { signal: controller.signal })
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

                let v1 = 0; let v2 = 0; let v3 = 0;
                data.forEach(item => {

                   if(item.id === 730) {
                        const value = document.getElementById("g730");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                   } else if(item.id === 729) {
                        const value = document.getElementById("g729");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                   } else if(item.id === 754) {
                        const value = document.getElementById("g754");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                   } else if(item.id === 753) {
                        const value = document.getElementById("g753");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                   } else if(item.id === 874) {
                        const value = document.getElementById("g874");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(874);
                        } else {
                            falseAnimation(874);
                        }
                   } else if(item.id === 873) {
                        const value = document.getElementById("g873");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(874);
                        } else {
                            falseAnimation(874);
                        }
                   } else if(item.id === 182) {
                        const value = document.getElementById("g182");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(182);
                        } else {
                            falseAnimation(182);
                        }
                   }  else if(item.id === 181) {
                       const value = document.getElementById("g181");
                       value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                       if (item.value !== 0) {
                           trueAnimation(182);
                       } else {
                           falseAnimation(182);
                       }
                   } else if(item.id === 825) {
                       const value = document.getElementById("g825");
                       value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                       if (item.value !== 0) {
                           trueAnimation(825);
                           trueAnimation(8251);
                           trueAnimation(8252);
                           trueAnimation(8254);
                       } else {
                           falseAnimation(825);
                           falseAnimation(8251);
                           falseAnimation(8252);
                           falseAnimation(8254);
                       }
                   } else if(item.id === 849) {
                       const value = document.getElementById("g849");
                       value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                       if (item.value !== 0) {
                           trueAnimation(849);
                           trueAnimation(8491);
                           trueAnimation(8492);
                           trueAnimation(8493);
                           trueAnimation(8494);
                       } else {
                           falseAnimation(849);
                           falseAnimation(8491);
                           falseAnimation(8492);
                           falseAnimation(8493);
                           falseAnimation(8494);
                       }
                   } else if(item.id === 850) {
                       const value = document.getElementById("g850");
                       value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                       if (item.value !== 0) {
                           trueAnimation(849);
                           trueAnimation(8491);
                           trueAnimation(8492);
                       } else {
                           falseAnimation(849);
                           falseAnimation(8491);
                           falseAnimation(8492);
                       }
                   } else if(item.id === 777) {
                       const value = document.getElementById("g777");
                       value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                       if (item.value !== 0) {
                           trueAnimation(777);
                       } else {
                           falseAnimation(777);
                       }
                   } else if(item.id === 801) {
                       const value = document.getElementById("g801");
                       value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                       if (item.value !== 0) {
                           trueAnimation(801);
                       } else {
                           falseAnimation(801);
                       }
                   } else if(item.id === 897) {
                       const value = document.getElementById("g897");
                       value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                       if (item.value !== 0) {
                           trueAnimation(897);
                       } else {
                           falseAnimation(897);
                       }
                   } else if(item.id === 921) {
                       const value = document.getElementById("g921");
                       value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                       if (item.value !== 0) {
                           trueAnimation(921);
                       } else {
                           falseAnimation(921);
                       }
                   } else if(item.id === 945) {
                       const value = document.getElementById("g945");
                       value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                       if (item.value !== 0) {
                           trueAnimation(945);
                       } else {
                           falseAnimation(945);
                       }
                   } else if(item.id === 722) {
                       const value = document.getElementById("g722");
                       value.textContent = formatNumber(item.value, 3, ',', ' ') + " кВ";
                       const w = document.getElementById("w722");
                       w.textContent = formatNumber(item.value, 3, ',', ' ') + " кВ";

                   }
                   //Г-1
                   else if(item.id === 657) {
                        const value = document.getElementById("g657");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a657");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 40 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(657);
                            trueAnimation(6571);
                            trueAnimation(6572);
                            trueAnimation(6573);
                            trueAnimation(6574);
                            trueAnimation(6575);
                            v1 = 1;
                        } else {
                            falseAnimation(657);
                            falseAnimation(6571);
                            falseAnimation(6572);
                            falseAnimation(6573);
                            falseAnimation(6574);
                            falseAnimation(6575);
                            v1 = 0;
                        }
                   } else if(item.id === 659) {
                        const value = document.getElementById("g659");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                   } else if(item.id === 660) {
                        const value = document.getElementById("k657");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                   } else if(item.id === 661) {
                       const value = document.getElementById("n657");
                       value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                   } else if(item.id === 662) {
                       const value = document.getElementById("w657");
                       value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                   }
                   //Г-2
                   else if(item.id === 681) {
                       const value = document.getElementById("g681");
                       value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                       const kpd = document.getElementById("a681");
                       kpd.textContent = "КИУМ= " + formatNumber(item.value / 40 * 100, 1, ',', ' ') + " %";
                       if (item.value > 0) {
                           trueAnimation(681);
                           trueAnimation(6811);
                           trueAnimation(6812);
                           trueAnimation(6813);
                           trueAnimation(6814);
                           v2 = 1;
                           trueAnimation(1);
                           trueAnimation(2);
                       } else {
                           falseAnimation(681);
                           falseAnimation(6811);
                           falseAnimation(6812);
                           falseAnimation(6813);
                           falseAnimation(6814);
                           v2 = 0;
                           falseAnimation(1);
                           falseAnimation(2);
                       }
                   } else if(item.id === 683) {
                       const value = document.getElementById("g683");
                       value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                   } else if(item.id === 684) {
                       const value = document.getElementById("k681");
                       value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                   } else if(item.id === 685) {
                       const value = document.getElementById("n681");
                       value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                   } else if(item.id === 686) {
                       const value = document.getElementById("w681");
                       value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                   }
                    //Г-3
                   else if(item.id === 705) {
                       const value = document.getElementById("g705");
                       value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                       const kpd = document.getElementById("a705");
                       kpd.textContent = "КИУМ= " + formatNumber(item.value / 40 * 100, 1, ',', ' ') + " %";
                       if (item.value > 0) {
                           trueAnimation(705);
                           trueAnimation(7051);
                           trueAnimation(7052);
                           trueAnimation(7053);
                           trueAnimation(7054);
                           trueAnimation(7055);
                           v3 = 0;
                       } else {
                           errorAnimation(705);
                           errorAnimation(7051);
                           errorAnimation(7052);
                           errorAnimation(7053);
                           falseAnimation(7054);
                           falseAnimation(7055);
                           v3 = 0;
                       }
                   } else if(item.id === 707) {
                       const value = document.getElementById("g707");
                       value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                   } else if(item.id === 708) {
                       const value = document.getElementById("k705");
                       value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                   } else if(item.id === 709) {
                       const value = document.getElementById("n705");
                       value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                   } else if(item.id === 710) {
                       const value = document.getElementById("w705");
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
                if (v1 > 0) {
                    trueAnimation(6576);
                    falseAnimation(6815);
                    falseAnimation(7056);
                } else if (v2 > 0) {
                    trueAnimation(6815);
                    falseAnimation(6576);
                    falseAnimation(7056);
                } else if (v3 > 0) {
                    trueAnimation(7056);
                    falseAnimation(6576);
                    falseAnimation(6815);
                } else {
                    falseAnimation(6576);
                    falseAnimation(6815);
                    falseAnimation(7056);
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