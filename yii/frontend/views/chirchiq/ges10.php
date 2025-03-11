<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-10 Оққовоқ ГЭС';
$energy = new Energy();
$dashboard = new Dashboard();
$id = 31;
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);

$urlTransformer1 = $energy->getTransformer($id, 86);
$urlTransformer2 = $energy->getTransformer($id, 87);
$urlTransformer3 = $energy->getTransformer($id, 88);
$urlTransformer4 = $energy->getTransformer($id, 89);
$urlTransformer5 = $energy->getTransformer($id, 90);

$urlSwitch1 = $energy->getSwitch($id, 188);
$urlSwitch2 = $energy->getSwitch($id, 189);
$urlSwitch3 = $energy->getSwitch($id, 190);
$urlSwitch4 = $energy->getSwitch($id, 191);
$urlSwitch5 = $energy->getSwitch($id, 192);
$urlSwitch6 = $energy->getSwitch($id, 193);
$urlSwitch7 = $energy->getSwitch($id, 194);
$urlSwitch8 = $energy->getSwitch($id, 195);
$urlSwitch9 = $energy->getSwitch($id, 196);
$urlSwitch10 = $energy->getSwitch($id, 197);
$urlSwitch11 = $energy->getSwitch($id, 198);
$urlSwitch12 = $energy->getSwitch($id, 199);
$urlSwitch13 = $energy->getSwitch($id, 200);


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
<div class="card" style="backdrop-filter: blur(15px);">
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
                        <filter
                            id="fx2"
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
                            id="fx3"
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
                            id="fx4"
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
                            id="fx5"
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
                            id="fx6"
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
                            id="fx7"
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
                            id="fx8"
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
                            id="fx9"
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
                            id="fx10"
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
                            id="fx11"
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
                            id="fx12"
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
                            width="119"
                            height="113"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img13"
                        ></image>
                        <clipPath id="clip14">
                            <rect x="2.32831e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="18"
                            height="41"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAALBAMAAABFS1qmAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAYUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAKh5qUYAAAAIdFJOUwDl/zzxTfP3PLqfygAAAAlwSFlzAAAOwwAADsMBx2+oZAAAABxJREFUGNNjYFRkwolNVJgYgpSYGNjUmRgYFJgAKRcCHpfvay0AAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img15"
                        ></image>
                        <clipPath id="clip16">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="2.32831e-10" y="0" width="57150" height="114300" />
                        </clipPath>
                        <image
                            width="18"
                            height="42"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAMBAMAAABYTmoeAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAASUExURQAAACPbFSPbFSTbFCPcFSPbFTG2KJYAAAAGdFJOUwD/500k5bagUF4AAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAdSURBVBjTY2AQYGRgEmJkMBRkZBAEYlZRPFiUEQAjKAFlq49k+QAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img18"
                        ></image>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="4.65661e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="4.65661e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip24">
                            <path
                                d="M129.5 133.5 129.5 152.5 148.5 152.5 148.5 133.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip25">
                            <path
                                d="M254.5 133.5 254.5 152.5 272.5 152.5 272.5 133.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip26">
                            <path
                                d="M375.5 133.5 375.5 152.5 394.5 152.5 394.5 133.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip27">
                            <path
                                d="M491.5 131.5 491.5 150.5 510.5 150.5 510.5 131.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip28">
                            <path
                                d="M645.5 132.5 645.5 151.5 664.5 151.5 664.5 132.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip29">
                            <path
                                d="M767.5 131.5 767.5 150.5 786.5 150.5 786.5 131.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip30">
                            <path
                                d="M880.5 134.5 880.5 153.5 899.5 153.5 899.5 134.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip31">
                            <path
                                d="M1048.5 189.5 1048.5 208.5 1067.5 208.5 1067.5 189.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip32">
                            <path
                                d="M314.5 250.5 314.5 268.5 332.5 268.5 332.5 250.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip33">
                            <path
                                d="M834.5 252.5 834.5 271.5 853.5 271.5 853.5 252.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip34">
                            <path
                                d="M447.5 411.5 447.5 430.5 466.5 430.5 466.5 411.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip35">
                            <path
                                d="M702.5 413.5 702.5 432.5 721.5 432.5 721.5 413.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip36">
                            <path
                                d="M1192 325 1192 344 1211 344 1211 325ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img37"
                        ></image>
                        <clipPath id="clip38">
                            <rect x="0" y="0" width="1190625" height="580048" />
                        </clipPath>
                        <clipPath id="clip39">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip40">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip41">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip42">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip43">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip44">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip45">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip46">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip47">
                            <rect x="9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip48">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip49">
                            <rect x="9.31323e-10" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip50">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip51">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip52">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip53">
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip54">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip55">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip56">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip57">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip58">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip59">
                            <rect x="0" y="0" width="47625" height="104775" />
                        </clipPath>
                        <clipPath id="clip60">
                            <rect x="0" y="0" width="45998.8" height="104775" />
                        </clipPath>
                        <clipPath id="clip61">
                            <rect x="0" y="4.65661e-10" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip62">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip63">
                            <rect x="0" y="-4.65661e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip64">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip65">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip66">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip67">
                            <rect x="2.91038e-11" y="0" width="85725" height="190500" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOpJREFUSEvt12sSgyAMBODYKiL4uv9pK7oKIcFeIN8vS3amlpWZSoXuw32xXukxznpMuAHTbMCEs5zlEstZLrGc5RLLWS6xnPpHzI2YZt5hdpgCRAxLEbMwE1b+oQUX72aigMs363GjvXZjlXODNnxoW85fTHJDOH/FyL1/c9yRU5oodUgdJixpAjKJW7EoxaI7oh2r0oYEtGoZMX94DLhUBKfXojyp9dtCgiI4+UDcRXBic6L+XiFqKYrgeC1iS7Jyc3gRXFlLVQSXN2fCSsO9ObII7q7leTZbrtOiFsGl06IXwTlfnAgg+gEGAhJwZdPnjwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img68"
                        ></image>
                        <clipPath id="clip69">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip70">
                            <rect x="2.91038e-11" y="0" width="85725" height="200025" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img71"
                        ></image>
                        <clipPath id="clip72">
                            <rect x="-0.015625" y="0" width="85725" height="200025" />
                        </clipPath>
                        <clipPath id="clip73">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip74">
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
                            transform="translate(532.71 22)"
                        >
                            Оқ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(558.043 22)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(564.21 22)"
                        >
                            қовоқ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(613.95 22)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(620.117 22)"
                        >
                            1 ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(676.783 22)"
                        >
                            (
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(682.95 22)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(720.95 22)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(727.117 22)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(745.783 22)"
                        >
                            )
                        </text>
                        <path
                            d="M842 304.953 842 219.5 845 219.5 845 304.953ZM839 219.5C839 217.015 841.015 215 843.5 215 845.985 215 848 217.015 848 219.5 848 221.985 845.985 224 843.5 224 841.015 224 839 221.985 839 219.5Z"
                            fill="#663300"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(869.941 268)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(877.108 268)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(880.608 268)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(887.774 268)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(891.274 268)"
                        >
                            2
                        </text>
                        <path
                            d="M0 0 0.20315 102.194"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 323.5 461.694)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(274.684 469)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(281.518 469)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(285.018 469)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(261.018 482)"
                        >
                            6,3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(277.018 482)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(246.684 495)"
                        >
                            10,7 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(245.851 508)"
                        >
                            СВ750/80
                        </text>
                        <path
                            d="M457 451.439 457 228"
                            stroke="#663300"
                            stroke-width="3.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(405.984 469)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(420.818 469)"
                        >
                            Н
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(429.151 469)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(432.651 469)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(394.984 482)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(405.651 482)"
                        >
                            /0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(424.651 482)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(398.318 495)"
                        >
                            400 кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(388.984 508)"
                        >
                            S11 400/35
                        </text>
                        <path
                            d="M712 451.473 712 227"
                            stroke="#663300"
                            stroke-width="3.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M323.606 304.182 323.5 215.5"
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
                            transform="translate(348.178 264)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(355.345 264)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(358.845 264)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(366.011 264)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(369.511 264)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(286.887 312)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(294.054 312)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(297.554 312)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(259.887 325)"
                        >
                            6,3/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(289.554 325)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(254.887 338)"
                        >
                            16000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(284.22 338)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(231.554 351)"
                        >
                            СФ11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(259.054 351)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(262.554 351)"
                        >
                            16000/35
                        </text>
                        <path
                            d="M459 506.5 459 533.134 456 533.134 456 506.5ZM457.5 533.134 462 530.134 457.5 539.134 453 530.134Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M1031.7 183.543 74.5001 181.5"
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
                            transform="translate(45.448 172)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(48.948 172)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(52.448 172)"
                        >
                            СШ 35 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(49.9683 230)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(56.9683 230)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(60.4683 230)"
                        >
                            СШ 35 кВ
                        </text>
                        <path
                            d="M0 0 957.203 0.000104987"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1031.7 218.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1074.66 197)"
                        >
                            МШВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1076.91 210)"
                        >
                            35кВ
                        </text>
                        <path
                            d="M1022 156.458 1022.72 182.282 1019.72 182.365 1019 156.542ZM1025.72 182.198C1025.78 184.683 1023.83 186.753 1021.34 186.822 1018.86 186.89 1016.79 184.932 1016.72 182.448 1016.65 179.964 1018.61 177.894 1021.09 177.825 1023.58 177.756 1025.65 179.714 1025.72 182.198Z"
                            fill="#663300"
                        />
                        <path
                            d="M1023 217.5 1023 240.669 1020 240.669 1020 217.5ZM1017 217.5C1017 215.015 1019.01 213 1021.5 213 1023.99 213 1026 215.015 1026 217.5 1026 219.985 1023.99 222 1021.5 222 1019.01 222 1017 219.985 1017 217.5Z"
                            fill="#663300"
                        />
                        <path
                            d="M0 0 39.0206 0.000104987"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1059.52 240.5)"
                        />
                        <path
                            d="M0 0 40.0209 0.000104987"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1059.52 158.5)"
                        />
                        <path
                            d="M1057.5 158.5 1057.5 189.625"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1057.5 208.5 1057.5 240.143"
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
                            transform="translate(842.172 85)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(848.672 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(852.172 85)"
                        >
                            4 (Трансформатор
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(934.839 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(938.339 85)"
                        >
                            4)
                        </text>
                        <path
                            d="M139 152 139 174.358"
                            stroke="#663300"
                            stroke-width="3.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.72222e-06 1.50009 27.3488-1.49991 27.3488-1.5 4.72222e-06ZM8.6098e-05 27.3488 4.50008 24.3488 0.000104987 33.3488-4.49992 24.3488Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 139.5 132.849)"
                        />
                        <path
                            d="M5.81307 0.130315C9.62308-0.712498 13.2431 2.57536 13.8986 7.47394 14.5542 12.3725 11.9969 17.0269 8.18692 17.8697 7.37187 18.05 6.53841 18.0431 5.72521 17.8495"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 132.5 190.5)"
                        />
                        <path
                            d="M139.5 189.5 139.5 219.736"
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
                            transform="matrix(1 0 0 -1 137.5 220.5)"
                        />
                        <path
                            d="M137.5 165.5 164.405 165.755"
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
                            transform="matrix(1 0 0 -1 137.5 167.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 320.5 220.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(109.726 85)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(116.892 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(120.392 85)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(131.059 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(134.559 85)"
                        >
                            01 (
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(151.392 85)"
                        >
                            п/с 0
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(172.726 85)"
                        >
                            )
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(335.357 83)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(342.523 83)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(346.023 83)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(356.69 83)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(360.19 83)"
                        >
                            Ч2(
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(376.023 83)"
                        >
                            п/с Чирчик)
                        </text>
                        <path
                            d="M162.5 164.5 162.5 182.714"
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
                            transform="matrix(1 0 0 -1 159.5 183.5)"
                        />
                        <path
                            d="M263 152 263 174.358"
                            stroke="#663300"
                            stroke-width="3.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.72222e-06 1.50009 27.3488-1.49991 27.3488-1.5 4.72222e-06ZM8.6098e-05 27.3488 4.50008 24.3488 0.000104987 33.3488-4.49992 24.3488Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 263.5 133.849)"
                        />
                        <path
                            d="M5.31579 0.15063C8.84556-0.754938 12.2372 2.47296 12.8912 7.36033 13.5452 12.2477 11.214 16.9438 7.68421 17.8494 6.87203 18.0577 6.03861 18.0499 5.22857 17.8262"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 256.5 191.5)"
                        />
                        <path
                            d="M263.5 191.5 263.5 219.8"
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
                            transform="matrix(1 0 0 -1 261.5 220.5)"
                        />
                        <path
                            d="M261.5 165.5 288.405 165.755"
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
                            transform="matrix(1 0 0 -1 261.5 167.5)"
                        />
                        <path
                            d="M286.5 164.5 286.5 182.714"
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
                            transform="matrix(1 0 0 -1 283.5 183.5)"
                        />
                        <path
                            d="M385 152 385 174.358"
                            stroke="#663300"
                            stroke-width="3.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.72222e-06 1.50009 27.3488-1.49991 27.3488-1.5 4.72222e-06ZM8.6098e-05 27.3488 4.50008 24.3488 0.000104987 33.3488-4.49992 24.3488Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 385.5 132.849)"
                        />
                        <path
                            d="M5.37958 0.12724C8.9157-0.681955 12.2839 2.41068 12.9027 7.03483 13.5215 11.659 11.1566 16.0636 7.62044 16.8728 6.85125 17.0488 6.06411 17.0421 5.29673 16.8531"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 378.5 190.5)"
                        />
                        <path
                            d="M385.5 190.5 385.5 218.8"
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
                            transform="matrix(1 0 0 -1 383.5 220.5)"
                        />
                        <path
                            d="M383.5 165.5 410.405 165.755"
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
                            transform="matrix(1 0 0 -1 383.5 167.5)"
                        />
                        <path
                            d="M408.5 164.5 408.5 182.714"
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
                            transform="matrix(1 0 0 -1 405.5 183.5)"
                        />
                        <path
                            d="M500.5 150.5 500.5 172.858"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.72222e-06 1.50009 27.3488-1.49991 27.3488-1.5 4.72222e-06ZM8.6098e-05 27.3488 4.50008 24.3488 0.000104987 33.3488-4.49992 24.3488Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 500.5 131.849)"
                        />
                        <path
                            d="M5.87727 0.110043C9.69322-0.642895 13.2893 2.50304 13.9094 7.13668 14.5295 11.7703 11.9387 16.137 8.12273 16.89 7.35111 17.0422 6.56393 17.0364 5.79387 16.8729"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 493.5 189.5)"
                        />
                        <path
                            d="M500.5 189.5 500.5 217.8"
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
                            transform="matrix(1 0 0 -1 498.5 220.5)"
                        />
                        <path
                            d="M498.5 163.5 525.405 163.755"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 498.5 165.5)"
                        />
                        <path
                            d="M523.5 162.5 523.5 180.714"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M654.5 151.5 654.5 173.858"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.72222e-06 1.50009 27.3488-1.49991 27.3488-1.5 4.72222e-06ZM8.6098e-05 27.3488 4.50008 24.3488 0.000104987 33.3488-4.49992 24.3488Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 654.5 131.849)"
                        />
                        <path
                            d="M5.87727 0.110043C9.69322-0.642895 13.2893 2.50304 13.9094 7.13668 14.5295 11.7703 11.9387 16.137 8.12273 16.89 7.35111 17.0422 6.56393 17.0364 5.79387 16.8729"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 647.5 189.5)"
                        />
                        <path
                            d="M654.5 189.5 654.5 217.8"
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
                            transform="matrix(1 0 0 -1 652.5 220.5)"
                        />
                        <path
                            d="M652.5 163.5 679.405 163.755"
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
                            transform="matrix(1 0 0 -1 652.5 166.5)"
                        />
                        <path
                            d="M677.5 162.5 677.5 180.714"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M776.5 150.5 776.5 172.858"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.72222e-06 1.50009 27.3488-1.49991 27.3488-1.5 4.72222e-06ZM8.6098e-05 27.3488 4.50008 24.3488 0.000104987 33.3488-4.49992 24.3488Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 776.5 131.849)"
                        />
                        <path
                            d="M5.37958 0.12724C8.9157-0.681955 12.2839 2.41068 12.9027 7.03483 13.5215 11.659 11.1566 16.0636 7.62044 16.8728 6.85125 17.0488 6.06411 17.0421 5.29673 16.8531"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 770.5 188.5)"
                        />
                        <path
                            d="M776.5 189.5 776.5 217.8"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 774.5 220.5)"
                        />
                        <path
                            d="M774.5 163.5 801.405 163.755"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 774.5 165.5)"
                        />
                        <path
                            d="M799.5 162.5 799.5 180.714"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 797.5 184.5)"
                        />
                        <path
                            d="M890.5 153.5 890.5 175.858"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.72222e-06 1.50009 27.3488-1.49991 27.3488-1.5 4.72222e-06ZM8.6098e-05 27.3488 4.50008 24.3488 0.000104987 33.3488-4.49992 24.3488Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 890.5 134.849)"
                        />
                        <path
                            d="M5.87727 0.110043C9.69322-0.642895 13.2893 2.50304 13.9094 7.13668 14.5295 11.7703 11.9387 16.137 8.12273 16.89 7.35111 17.0422 6.56393 17.0364 5.79387 16.8729"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 882.5 192.5)"
                        />
                        <path
                            d="M890.5 192.5 890.5 220.8"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2C-2.54627e-16 0.89543 0.89543 -2.54627e-16 2 -5.09253e-16 3.10457-1.01851e-15 4 0.89543 4 2 4 3.10457 3.10457 4 2 4 0.89543 4-1.27313e-15 3.10457 0 2Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 888.5 221.5)"
                        />
                        <path
                            d="M888.5 166.5 915.405 166.755"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2C-2.54627e-16 0.89543 0.89543 -2.54627e-16 2 -5.09253e-16 3.10457-1.01851e-15 4 0.89543 4 2 4 3.10457 3.10457 4 2 4 0.89543 4-1.27313e-15 3.10457 0 2Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 888.5 168.5)"
                        />
                        <path
                            d="M913.5 165.5 913.5 183.714"
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
                            transform="matrix(1 0 0 -1 910.5 185.5)"
                        />
                        <path
                            d="M5.81307 0.130315C9.62308-0.712498 13.2431 2.57536 13.8986 7.47394 14.5542 12.3725 11.9969 17.0269 8.18692 17.8697 7.37187 18.05 6.53841 18.0431 5.72521 17.8495"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 337.5 228.5)"
                        />
                        <path
                            d="M343.5 183.5 343.5 211.8"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 320.5 236.5)"
                        />
                        <path
                            d="M0 2C-2.54627e-16 0.89543 0.89543 -2.54627e-16 2 -5.09253e-16 3.10457-1.01851e-15 4 0.89543 4 2 4 3.10457 3.10457 4 2 4 0.89543 4-1.27313e-15 3.10457 0 2Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 341.5 183.5)"
                        />
                        <path
                            d="M320.5 235.5 345.719 235.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 8.36976"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 344.5 234.87)"
                        />
                        <path
                            d="M5.81307 0.130315C9.62308-0.712498 13.2431 2.57536 13.8986 7.47394 14.5542 12.3725 11.9969 17.0269 8.18692 17.8697 7.37187 18.05 6.53841 18.0431 5.72521 17.8495"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 856.5 228.5)"
                        />
                        <path
                            d="M863.5 184.5 863.5 212.8"
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
                            transform="matrix(1 0 0 -1 842.5 238.5)"
                        />
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 861.5 184.5)"
                        />
                        <path
                            d="M840.5 236.5 865.719 236.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 6.66152"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 864.5 234.162)"
                        />
                        <path
                            d="M5.87727 0.110043C9.69322-0.642895 13.2893 2.50304 13.9094 7.13668 14.5295 11.7703 11.9387 16.137 8.12273 16.89 7.35111 17.0422 6.56393 17.0364 5.79387 16.8729"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 450.5 228.5)"
                        />
                        <path
                            d="M457.5 182.5 457.5 213.324"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M456.5 243.5 481.719 243.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M481.5 216.5 481.5 244.8"
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
                            transform="matrix(1 0 0 -1 454.5 184.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 478.5 220.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 454.5 245.5)"
                        />
                        <path
                            d="M5.87727 0.110043C9.69322-0.642895 13.2893 2.50304 13.9094 7.13668 14.5295 11.7703 11.9387 16.137 8.12273 16.89 7.35111 17.0422 6.56393 17.0364 5.79387 16.8729"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 705.5 228.5)"
                        />
                        <path
                            d="M712.5 181.5 712.5 212.324"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M711.5 242.5 736.719 242.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M736.5 215.5 736.5 243.8"
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
                            transform="matrix(1 0 0 -1 709.5 184.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 734.5 221.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 709.5 245.5)"
                        />
                        <use
                            width="100%"
                            height="100%"
                            xlink:href="#img13"
                            fill="none"
                            transform="translate(1067 432)"
                        ></use>
                        <path
                            d="M1201.32 388.563 1200.07 282.518 1203.07 282.482 1204.32 388.527ZM1201.57 282.5 1197.11 285.552 1201.5 276.5 1206.11 285.446Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M1155.5 521.5 1203.26 521.5"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.232966 78.892"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1202.5 522.392)"
                        />
                        <path id="c2092"
                            d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1186.5 443.5)"
                        />
                        <path id="c2091"
                            d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1186.5 421.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1223.32 419)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(231.188 85)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(238.355 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(241.855 85)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(252.521 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(256.021 85)"
                        >
                            02 (
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(272.855 85)"
                        >
                            п/с
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(288.855 85)"
                        >
                            0)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(456.408 83)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(463.574 83)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(467.074 83)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(477.741 83)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(481.241 83)"
                        >
                            Ч1 (п/с Чирчик)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(599.23 85)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(606.396 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(609.896 85)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(620.563 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(624.063 85)"
                        >
                            Т (Твердый сплав)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(734.242 85)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(741.409 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(744.909 85)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(755.576 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(759.076 85)"
                        >
                            15 (ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(796.242 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(799.742 85)"
                        >
                            15)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(868.669 471)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(875.503 471)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(879.003 471)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(868.669 484)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(890.003 484)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(868.669 497)"
                        >
                            29 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(868.669 510)"
                        >
                            SV29
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(893.003 510)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(896.503 510)"
                        >
                            32/5760
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(805.769 317)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(812.936 317)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(816.436 317)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(781.436 330)"
                        >
                            10/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(808.436 330)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(773.769 343)"
                        >
                            40
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(784.436 343)"
                        >
                            000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(803.102 343)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(750.436 356)"
                        >
                            СФ11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(777.936 356)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(781.436 356)"
                        >
                            40
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(792.102 356)"
                        >
                            000/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(654.052 472)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(668.886 472)"
                        >
                            Н
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(677.219 472)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(680.719 472)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(643.052 485)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(653.719 485)"
                        >
                            /0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(672.719 485)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(646.386 498)"
                        >
                            400 кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(637.052 511)"
                        >
                            S11 400/35
                        </text>
                        <path
                            d="M101.696 44.9549 185.296 44.9549 185.296 58.546 101.696 58.546Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M101.696 58.546 185.296 58.546 185.296 72.1372 101.696 72.1372Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M101.029 58.546 185.962 58.546"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M101.696 44.2882 101.696 72.8039"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M185.296 44.2882 185.296 72.8039"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M101.029 44.9549 185.962 44.9549"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M101.029 72.1372 185.962 72.1372"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g700"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(104.363 55)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g701"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(104.363 69)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip14)"
                            transform="matrix(0.000104987 0 0 0.000104987 177 46)"
                        >
                            <g clip-path="url(#clip16)" transform="matrix(1 0 0 1.05366 -0.125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img15"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip17)"
                            transform="matrix(0.000104987 0 0 0.000104987 177 59)"
                        >
                            <g clip-path="url(#clip19)" transform="matrix(1.16667 0 0 1 -0.125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img18"
                                    transform="scale(2721.43 2721.43)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M223.31 44.2939 306.909 44.2939 306.909 57.885 223.31 57.885Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M223.31 57.885 306.909 57.885 306.909 71.4762 223.31 71.4762Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M222.643 57.885 307.576 57.885"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M223.31 43.6272 223.31 72.1429"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M306.909 43.6272 306.909 72.1429"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M222.643 44.2939 307.576 44.2939"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M222.643 71.4762 307.576 71.4762"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g724"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(225.976 54)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g723"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(225.976 68)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip20)"
                            transform="matrix(0.000104987 0 0 0.000104987 299 45)"
                        >
                            <g
                                clip-path="url(#clip21)"
                                transform="matrix(1 0 0 1.05366 -0.25 -0.03125)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img15"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip22)"
                            transform="matrix(0.000104987 0 0 0.000104987 299 59)"
                        >
                            <g clip-path="url(#clip23)" transform="matrix(1 0 0 1.02857 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img18"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M276.983 519.977 370.091 519.977 370.091 532.777 276.983 532.777Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.983 532.777 370.091 532.777 370.091 545.577 276.983 545.577Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.983 545.577 370.091 545.577 370.091 558.377 276.983 558.377Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.983 558.377 370.091 558.377 370.091 571.177 276.983 571.177Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.983 571.177 370.091 571.177 370.091 583.977 276.983 583.977Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.983 583.977 370.091 583.977 370.091 596.777 276.983 596.777Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.316 532.777 370.758 532.777"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.316 545.577 370.758 545.577"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.316 558.377 370.758 558.377"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.316 571.177 370.758 571.177"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.316 583.977 370.758 583.977"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.983 519.311 276.983 597.444"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M370.091 519.311 370.091 597.444"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.316 519.977 370.758 519.977"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M276.316 596.777 370.758 596.777"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g654"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(280.763 530)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g656"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(280.763 543)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a654"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(280.763 556)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k654"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(280.763 568)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n654"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(280.763 581)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w654" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(280.763 594)"
                            >
                                Qвода
                            </text>
                        </g>
                        <g clip-path="url(#clip24)">
                            <g filter="url(#fx0)" transform="translate(121 127)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50005 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch1 ?>">
                            <rect
                                id="c701"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 129.5 152.5)"
                            />
                        </a>
                        <g clip-path="url(#clip25)">
                            <g filter="url(#fx1)" transform="translate(246 127)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="18"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50005 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch2 ?>">
                            <rect
                                id="c724"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 254.5 152.5)"
                            />
                        </a>
                        <g clip-path="url(#clip26)">
                            <g filter="url(#fx2)" transform="translate(367 127)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50006 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch3 ?>">
                            <rect
                                id="c770"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 375.5 152.5)"
                            />
                        </a>
                        <g clip-path="url(#clip27)">
                            <g filter="url(#fx3)" transform="translate(483 125)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50006 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch4 ?>">
                            <rect
                                id="c747"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 491.5 150.5)"
                            />
                        </a>
                        <g clip-path="url(#clip28)">
                            <g filter="url(#fx4)" transform="translate(637 126)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50006 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch5 ?>">
                            <rect
                                id="c816"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 645.5 151.5)"
                            />
                        </a>
                        <g clip-path="url(#clip29)">
                            <g filter="url(#fx5)" transform="translate(759 125)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50006 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch6 ?>">
                            <rect
                                id="c793"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 767.5 150.5)"
                            />
                        </a>
                        <g clip-path="url(#clip30)">
                            <g filter="url(#fx6)" transform="translate(872 128)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50006 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch7 ?>">
                            <rect
                                id="c839"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 880.5 153.5)"
                            />
                        </a>
                        <g clip-path="url(#clip31)">
                            <g filter="url(#fx7)" transform="translate(1040 183)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.5 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch8 ?>">
                            <rect
                                id="c1"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1048.5 208.5)"
                            />
                        </a>
                        <g clip-path="url(#clip32)">
                            <g filter="url(#fx8)" transform="translate(306 244)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="18"
                                        height="18"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50006 26.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch9 ?>">
                            <rect
                                id="c9312"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 314.5 268.5)"
                            />
                        </a>
                        <g clip-path="url(#clip33)">
                            <g filter="url(#fx9)" transform="translate(826 246)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50006 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch10 ?>">
                            <rect
                                id="c9532"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 834.5 271.5)"
                            />
                        </a>
                        <g clip-path="url(#clip34)">
                            <g filter="url(#fx10)" transform="translate(439 405)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50006 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch11 ?>">
                            <rect
                                id="c8612"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 447.5 430.5)"
                            />
                        </a>
                        <g clip-path="url(#clip35)">
                            <g filter="url(#fx11)" transform="translate(694 407)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50006 27.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch12 ?>">
                            <rect
                                id="c8842"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 702.5 432.5)"
                            />
                        </a>
                        <g clip-path="url(#clip36)">
                            <g filter="url(#fx12)" transform="translate(1183 318)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#989898"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch13 ?>">
                            <rect
                                id="c209"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1192 344)"
                            />
                        </a>
                        <path
                            d="M800.694 518.94 893.802 518.94 893.802 531.74 800.694 531.74Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.694 531.74 893.802 531.74 893.802 544.54 800.694 544.54Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.694 544.54 893.802 544.54 893.802 557.34 800.694 557.34Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.694 557.34 893.802 557.34 893.802 570.14 800.694 570.14Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.694 570.14 893.802 570.14 893.802 582.94 800.694 582.94Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.694 582.94 893.802 582.94 893.802 595.74 800.694 595.74Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.027 531.74 894.469 531.74"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.027 544.54 894.469 544.54"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.027 557.34 894.469 557.34"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.027 570.14 894.469 570.14"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.027 582.94 894.469 582.94"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.694 518.274 800.694 596.407"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M893.802 518.274 893.802 596.407"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.027 518.94 894.469 518.94"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.027 595.74 894.469 595.74"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g677"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(804.474 529)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g679"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(804.474 542)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a677"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(804.474 555)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k677"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(804.474 567)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n677"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(804.474 580)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w677" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(804.474 593)"
                            >
                                Qвода
                            </text>
                        </g>
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c931"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 308.5 359.5)"
                            />
                            <path id="c9311"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 308.5 334.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c953"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 828.5 359.5)"
                            />
                            <path id="c9531"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 828.5 334.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c861"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 442.5 506.5)"
                            />
                            <path id="c8611"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 442.5 482.5)"
                            />
                        </a>
                        <path
                            d="M714 507.5 714 534.134 711 534.134 711 507.5ZM712.5 534.134 717 531.134 712.5 540.134 708 531.134Z"
                            fill="#7F7F7F"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c884"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 697.5 507.5)"
                            />
                            <path id="c8841"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 697.5 482.5)"
                            />
                        </a>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 675.5 184.5)"
                        />
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 521.5 184.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(471.153 424)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(478.32 424)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(481.82 424)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(488.987 424)"
                        >
                            C
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(496.653 424)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(500.153 424)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(724.241 426)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(731.407 426)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(734.907 426)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(742.074 426)"
                        >
                            C
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(749.741 426)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(753.241 426)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(95.3205 147)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(102.487 147)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(105.987 147)"
                        >
                            01
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(220 147)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(227.166 147)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(230.666 147)"
                        >
                            02
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(341.371 147)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(348.538 147)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(352.038 147)"
                        >
                            Ч2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(455.917 147)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(463.084 147)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(466.584 147)"
                        >
                            Ч1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(613.062 147)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(620.229 147)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(623.729 147)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(733.308 147)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(740.474 147)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(743.974 147)"
                        >
                            15
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(839.378 147)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(846.545 147)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(850.045 147)"
                        >
                            Т4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1151.52 338)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1158.69 338)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1162.19 338)"
                        >
                            ВЭУ
                        </text>
                        <path
                            d="M0 0 0.20315 102.194"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 842.5 461.694)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(968.183 396)"
                        >
                            ТВГ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(989.35 396)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(992.85 396)"
                        >
                            1000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(968.183 409)"
                        >
                            10/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(968.183 422)"
                        >
                            500кВА
                        </text>
                        <path
                            d="M949 432.5 949 459.134 946 459.134 946 432.5ZM947.5 459.134 952 456.134 947.5 465.134 943 456.134Z"
                            fill="#7F7F7F"
                        />
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c9071"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 932.5 432.5)"
                            />
                            <path id="c907"
                                  d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                  stroke="#6600CC"
                                  stroke-width="3"
                                  stroke-miterlimit="8"
                                  fill="#FFFFFF"
                                  fill-rule="evenodd"
                                  transform="matrix(1 0 0 -1 932.5 407.5)"
                            />
                        </a>
                        <path
                            d="M842.5 367 948.327 367 948.327 370 842.5 370ZM842.5 373C840.015 373 838 370.985 838 368.5 838 366.015 840.015 364 842.5 364 844.985 364 847 366.015 847 368.5 847 370.985 844.985 373 842.5 373Z"
                            fill="#7030A0"
                        />
                        <path
                            d="M0 0 0.000104987 11.4999"
                            stroke="#7030A0"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 948.5 378)"
                        />
                        <g transform="matrix(0.000104987 0 0 0.000104987 1057 46)">
                            <g clip-path="url(#clip38)" transform="scale(1 1.00168)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img37"
                                    transform="scale(7632.21 7632.21)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1079.17 42.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1177.5 96.1712)"
                        />
                        <path
                            d="M1175.55 108.031 1167.86 99.6543 1168.35 99.2035 1176.04 107.58ZM1168.11 99.4289 1167.95 103.197 1164.5 95.5001 1171.87 99.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1184.95 108.889 1175.5 108.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1082.62 28.1699 1176.99 28.1699 1176.99 40.9699 1082.62 40.9699Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1082.62 27.5032 1082.62 41.6365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1176.99 27.5032 1176.99 41.6365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1081.95 28.1699 1177.65 28.1699"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1081.95 40.9699 1177.65 40.9699"
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
                                transform="translate(1086.4 38)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1096.9 38)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1078.5 42.5001 1097.69 42.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1185.11 95.2535 1272.77 95.2535 1272.77 108.054 1185.11 108.054Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1185.11 94.5869 1185.11 108.72"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1272.77 94.5869 1272.77 108.72"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1184.44 95.2535 1273.43 95.2535"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1184.44 108.054 1273.43 108.054"
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
                                transform="translate(1188.89 105)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1199.39 105)"
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
                            transform="matrix(1 0 0 -1 1075.5 50.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1184.99 68.5001)"
                        />
                        <path
                            d="M1185.5 68.5001 1204.69 68.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1189.31 55.07 1262.5 55.07 1262.5 67.87 1189.31 67.87Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1189.31 54.4034 1189.31 68.5367"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1262.5 54.4034 1262.5 68.5367"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.64 55.07 1263.17 55.07"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.64 67.87 1263.17 67.87"
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
                                transform="translate(1193.09 65)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1160.5 96.5001 1183.21 96.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M340.64 43.4416 424.239 43.4416 424.239 57.0328 340.64 57.0328Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M340.64 57.0328 424.239 57.0328 424.239 70.6239 340.64 70.6239Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M339.973 57.0328 424.906 57.0328"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M340.64 42.7749 340.64 71.2906"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M424.239 42.7749 424.239 71.2906"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M339.973 43.4416 424.906 43.4416"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M339.973 70.6239 424.906 70.6239"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g769"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(343.306 53)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g770"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(343.306 67)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip39)"
                            transform="matrix(0.000104987 0 0 0.000104987 416 44)"
                        >
                            <g clip-path="url(#clip40)" transform="matrix(1 0 0 1.05366 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img15"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip41)"
                            transform="matrix(0.000104987 0 0 0.000104987 416 58)"
                        >
                            <g clip-path="url(#clip42)" transform="matrix(1.16667 0 0 1 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img18"
                                    transform="scale(2721.43 2721.43)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M458.639 43.6968 542.239 43.6968 542.239 57.288 458.639 57.288Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M458.639 57.288 542.239 57.288 542.239 70.8792 458.639 70.8792Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M457.973 57.288 542.905 57.288"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M458.639 43.0301 458.639 71.5458"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M542.239 43.0301 542.239 71.5458"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M457.973 43.6968 542.905 43.6968"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M457.973 70.8792 542.905 70.8792"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g747"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(461.306 54)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g746"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(461.306 67)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip43)"
                            transform="matrix(0.000104987 0 0 0.000104987 534 44)"
                        >
                            <g clip-path="url(#clip44)" transform="scale(1 1.05366)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img15"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip45)"
                            transform="matrix(0.000104987 0 0 0.000104987 534 58)"
                        >
                            <g clip-path="url(#clip46)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img18"
                                    transform="scale(2721.43 2721.43)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M612.694 43.7364 696.293 43.7364 696.293 57.3276 612.694 57.3276Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M612.694 57.3276 696.293 57.3276 696.293 70.9187 612.694 70.9187Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M612.027 57.3276 696.96 57.3276"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M612.694 43.0697 612.694 71.5854"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M696.293 43.0697 696.293 71.5854"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M612.027 43.7364 696.96 43.7364"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M612.027 70.9187 696.96 70.9187"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g815"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(615.36 54)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g816"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(615.36 67)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip47)"
                            transform="matrix(0.000104987 0 0 0.000104987 688 44)"
                        >
                            <g clip-path="url(#clip48)" transform="matrix(1 0 0 1.05366 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img15"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip49)"
                            transform="matrix(0.000104987 0 0 0.000104987 688 58)"
                        >
                            <g clip-path="url(#clip50)" transform="matrix(1.16667 0 0 1 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img18"
                                    transform="scale(2721.43 2721.43)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M737.076 44.3286 820.675 44.3286 820.675 57.9198 737.076 57.9198Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.076 57.9198 820.675 57.9198 820.675 71.511 737.076 71.511Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M736.409 57.9198 821.342 57.9198"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.076 43.6619 737.076 72.1776"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M820.675 43.6619 820.675 72.1776"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M736.409 44.3286 821.342 44.3286"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M736.409 71.511 821.342 71.511"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g792"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(739.742 54)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g793"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(739.742 68)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip51)"
                            transform="matrix(0.000104987 0 0 0.000104987 812 45)"
                        >
                            <g
                                clip-path="url(#clip52)"
                                transform="matrix(1 0 0 1.05366 -0.5 -0.03125)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img15"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip53)"
                            transform="matrix(0.000104987 0 0 0.000104987 813 59)"
                        >
                            <g clip-path="url(#clip54)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img18"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M843.4 43.9458 927 43.9458 927 57.537 843.4 57.537Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M843.4 57.537 927 57.537 927 71.1282 843.4 71.1282Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M842.734 57.537 927.667 57.537"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M843.4 43.2792 843.4 71.7949"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M927 43.2792 927 71.7949"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M842.734 43.9458 927.667 43.9458"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M842.734 71.1282 927.667 71.1282"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g838"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(846.067 54)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g839"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(846.067 68)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip55)"
                            transform="matrix(0.000104987 0 0 0.000104987 919 45)"
                        >
                            <g clip-path="url(#clip56)" transform="matrix(1 0 0 1.05366 -1 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img15"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip57)"
                            transform="matrix(0.000104987 0 0 0.000104987 919 58)"
                        >
                            <g clip-path="url(#clip58)" transform="matrix(1 0 0 1.02857 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img18"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M345.523 319.823 429.123 319.823 429.123 333.414 345.523 333.414Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M345.523 333.414 429.123 333.414 429.123 347.005 345.523 347.005Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M344.857 333.414 429.79 333.414"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M345.523 319.156 345.523 347.672"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.123 319.156 429.123 347.672"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M344.857 319.823 429.79 319.823"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M344.857 347.005 429.79 347.005"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g932"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(348.19 330)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g931"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(348.19 343)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip59)"
                            transform="matrix(0.000104987 0 0 0.000104987 421 321)"
                        >
                            <g clip-path="url(#clip60)" transform="matrix(1.03535 0 0 1 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img15"
                                    transform="scale(2555.49 2555.49)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip61)"
                            transform="matrix(0.000104987 0 0 0.000104987 421 334)"
                        >
                            <g clip-path="url(#clip62)" transform="matrix(1.16667 0 0 1 -0.25 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img18"
                                    transform="scale(2721.43 2721.43)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M865 317.487 948.6 317.487 948.6 331.078 865 331.078Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M865 331.078 948.6 331.078 948.6 344.669 865 344.669Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.334 331.078 949.267 331.078"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M865 316.82 865 345.336"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M948.6 316.82 948.6 345.336"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.334 317.487 949.267 317.487"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.334 344.669 949.267 344.669"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g953Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(867.667 327)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g953Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(867.667 341)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip63)"
                            transform="matrix(0.000104987 0 0 0.000104987 940 318)"
                        >
                            <g clip-path="url(#clip64)" transform="matrix(1 0 0 1.05366 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img15"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip65)"
                            transform="matrix(0.000104987 0 0 0.000104987 941 332)"
                        >
                            <g clip-path="url(#clip66)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img18"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path id="c654"
                            d="M298.5 486C298.5 472.469 309.469 461.5 323 461.5 336.531 461.5 347.5 472.469 347.5 486 347.5 499.531 336.531 510.5 323 510.5 309.469 510.5 298.5 499.531 298.5 486Z"
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
                                        d="M322.689 478.933 323.622 478.933 324.944 479.167 326.033 479.633 326.889 480.178 327.9 481.189 328.522 482.122 328.989 483.367 329.144 484.067 329.144 485.933 328.833 487.1 328.211 488.344 327.589 489.122 327.044 489.667 325.956 490.367 324.711 490.833 323.933 490.989 322.378 490.989 321.133 490.678 320.278 490.289 319.422 489.744 318.567 488.967 318.022 488.189 317.478 487.1 317.167 485.856 317.089 484.922 317.244 483.678 317.556 482.667 318.178 481.5 319.033 480.567 319.656 480.022 320.978 479.322 322.144 479.011Z"
                                    />
                                    <path
                                        d="M323.156 465.089 324.011 465.089 325.489 465.322 326.967 465.789 328.211 466.411 329.144 467.033 329.922 467.733 330.856 468.667 331.711 469.911 332.333 471.156 332.8 472.556 333.033 473.722 333.111 474.344 333.111 475.822 332.878 477.3 332.489 478.622 331.867 479.944 331.089 481.033 330.933 481.033 330.311 479.944 329.378 478.856 328.522 478.078 327.433 477.378 326.267 476.833 324.944 476.444 323.156 476.211Z"
                                    />
                                    <path
                                        d="M310.4 480.878 310.789 480.956 312.967 482.2 314.522 483.133 314.6 483.289 314.444 484.922 314.6 486.556 314.989 488.033 315.533 489.2 315.533 489.433 313.356 490.678 311.489 491.767 307.444 494.1 306.122 494.878 305.889 494.878 305.189 493.4 304.8 492.078 304.644 491.144 304.567 489.822 304.722 488.344 304.956 487.256 305.5 485.778 306.044 484.767 306.744 483.756 307.678 482.744 308.533 481.967 309.933 481.111Z"
                                    />
                                    <path
                                        d="M330.7 489.433 331.089 489.511 332.956 490.6 339.022 494.1 340.344 494.878 340.189 495.267 339.644 496.044 338.944 496.9 338.4 497.444 337.233 498.3 335.989 499 334.511 499.544 333.344 499.778 332.878 499.856 330.544 499.856 329.378 499.622 328.133 499.233 326.811 498.611 325.878 497.989 325.878 493.322 326.578 493.011 327.9 492.311 328.833 491.611 329.922 490.522Z"
                                    />
                                    <path
                                        d="M313.667 470.067 315.378 470.067 316.856 470.3 318.489 470.844 319.811 471.544 320.433 471.933 320.433 476.678 319.033 477.3 317.944 478 317.089 478.7 316.544 479.244 315.611 480.567 315.144 480.411 313.822 479.633 307.756 476.133 306.044 475.122 305.967 474.967 306.511 474.111 307.367 473.1 307.989 472.478 309.156 471.622 310.244 471 311.722 470.456 312.578 470.222Z"
                                    />
                                    <path
                                        d="M317.167 491.533 317.478 491.611 318.644 492.467 319.967 493.089 321.211 493.478 322.144 493.633 323.078 493.711 323.156 493.789 323.156 504.833 321.989 504.833 320.433 504.522 319.111 504.056 317.711 503.278 316.7 502.5 315.922 501.8 315.144 500.867 314.367 499.622 313.744 498.222 313.356 496.744 313.2 495.344 313.2 494.489 313.278 493.789 315.222 492.7 316.544 491.922Z"
                                    />
                                    <path
                                        d="M340.267 475.044 340.422 475.044 340.967 476.133 341.433 477.533 341.667 478.778 341.744 480.333 341.589 481.733 341.278 483.056 340.656 484.533 340.111 485.467 339.489 486.322 338.633 487.256 337.467 488.189 336.456 488.811 335.756 489.122 333.811 488.033 331.944 486.944 331.711 486.789 331.867 485.389 331.867 484.222 332.567 483.522 333.578 482.2 334.278 481.033 334.978 479.556 335.522 477.844 336.222 477.378 338.167 476.289 340.033 475.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c677"
                            d="M819.5 486C819.5 472.469 830.469 461.5 844 461.5 857.531 461.5 868.5 472.469 868.5 486 868.5 499.531 857.531 510.5 844 510.5 830.469 510.5 819.5 499.531 819.5 486Z"
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
                                        d="M842.689 478.933 843.622 478.933 844.944 479.167 846.033 479.633 846.889 480.178 847.9 481.189 848.522 482.122 848.989 483.367 849.144 484.067 849.144 485.933 848.833 487.1 848.211 488.344 847.589 489.122 847.044 489.667 845.956 490.367 844.711 490.833 843.933 490.989 842.378 490.989 841.133 490.678 840.278 490.289 839.422 489.744 838.567 488.967 838.022 488.189 837.478 487.1 837.167 485.856 837.089 484.922 837.244 483.678 837.556 482.667 838.178 481.5 839.033 480.567 839.656 480.022 840.978 479.322 842.144 479.011Z"
                                    />
                                    <path
                                        d="M843.156 465.089 844.011 465.089 845.489 465.322 846.967 465.789 848.211 466.411 849.144 467.033 849.922 467.733 850.856 468.667 851.711 469.911 852.333 471.156 852.8 472.556 853.033 473.722 853.111 474.344 853.111 475.822 852.878 477.3 852.489 478.622 851.867 479.944 851.089 481.033 850.933 481.033 850.311 479.944 849.378 478.856 848.522 478.078 847.433 477.378 846.267 476.833 844.944 476.444 843.156 476.211Z"
                                    />
                                    <path
                                        d="M830.4 480.878 830.789 480.956 832.967 482.2 834.522 483.133 834.6 483.289 834.444 484.922 834.6 486.556 834.989 488.033 835.533 489.2 835.533 489.433 833.356 490.678 831.489 491.767 827.444 494.1 826.122 494.878 825.889 494.878 825.189 493.4 824.8 492.078 824.644 491.144 824.567 489.822 824.722 488.344 824.956 487.256 825.5 485.778 826.044 484.767 826.744 483.756 827.678 482.744 828.533 481.967 829.933 481.111Z"
                                    />
                                    <path
                                        d="M850.7 489.433 851.089 489.511 852.956 490.6 859.022 494.1 860.344 494.878 860.189 495.267 859.644 496.044 858.944 496.9 858.4 497.444 857.233 498.3 855.989 499 854.511 499.544 853.344 499.778 852.878 499.856 850.544 499.856 849.378 499.622 848.133 499.233 846.811 498.611 845.878 497.989 845.878 493.322 846.578 493.011 847.9 492.311 848.833 491.611 849.922 490.522Z"
                                    />
                                    <path
                                        d="M833.667 470.067 835.378 470.067 836.856 470.3 838.489 470.844 839.811 471.544 840.433 471.933 840.433 476.678 839.033 477.3 837.944 478 837.089 478.7 836.544 479.244 835.611 480.567 835.144 480.411 833.822 479.633 827.756 476.133 826.044 475.122 825.967 474.967 826.511 474.111 827.367 473.1 827.989 472.478 829.156 471.622 830.244 471 831.722 470.456 832.578 470.222Z"
                                    />
                                    <path
                                        d="M837.167 491.533 837.478 491.611 838.644 492.467 839.967 493.089 841.211 493.478 842.144 493.633 843.078 493.711 843.156 493.789 843.156 504.833 841.989 504.833 840.433 504.522 839.111 504.056 837.711 503.278 836.7 502.5 835.922 501.8 835.144 500.867 834.367 499.622 833.744 498.222 833.356 496.744 833.2 495.344 833.2 494.489 833.278 493.789 835.222 492.7 836.544 491.922Z"
                                    />
                                    <path
                                        d="M860.267 475.044 860.422 475.044 860.967 476.133 861.433 477.533 861.667 478.778 861.744 480.333 861.589 481.733 861.278 483.056 860.656 484.533 860.111 485.467 859.489 486.322 858.633 487.256 857.467 488.189 856.456 488.811 855.756 489.122 853.811 488.033 851.944 486.944 851.711 486.789 851.867 485.389 851.867 484.222 852.567 483.522 853.578 482.2 854.278 481.033 854.978 479.556 855.522 477.844 856.222 477.378 858.167 476.289 860.033 475.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M419.557 547.858 493.204 547.858 493.204 561.591 419.557 561.591Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M419.557 547.191 419.557 562.258"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M493.204 547.191 493.204 562.258"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M418.89 547.858 493.87 547.858"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M418.89 561.591 493.87 561.591"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g861"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(423.336 558)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M675.057 543.843 748.704 543.843 748.704 557.576 675.057 557.576Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M675.057 543.176 675.057 558.243"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M748.704 543.176 748.704 558.243"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M674.39 543.843 749.37 543.843"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M674.39 557.576 749.37 557.576"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g884"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(678.836 554)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M15.5001 564C15.5001 558.753 19.7533 554.5 25.0001 554.5 30.2468 554.5 34.5001 558.753 34.5001 564 34.5001 569.247 30.2468 573.5 25.0001 573.5 19.7533 573.5 15.5001 569.247 15.5001 564Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M15.5001 586C15.5001 580.753 19.7533 576.5 25.0001 576.5 30.2468 576.5 34.5001 580.753 34.5001 586 34.5001 591.247 30.2468 595.5 25.0001 595.5 19.7533 595.5 15.5001 591.247 15.5001 586Z"
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
                            transform="translate(39.7194 566)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(39.6366 588)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M15 542C15 537.029 19.2533 533 24.5 533 29.7467 533 34 537.029 34 542 34 546.971 29.7467 551 24.5 551 19.2533 551 15 546.971 15 542Z"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-miterlimit="8"
                            fill="#FFFF00"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(39.6366 544)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(39.9015 521)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(39.6367 498)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip67)"
                            transform="matrix(0.000104987 0 0 0.000104987 19 486)"
                        >
                            <g clip-path="url(#clip69)" transform="matrix(1.05 0 0 1 -0.015625 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img68"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip70)"
                            transform="matrix(0.000104987 0 0 0.000104987 19 508)"
                        >
                            <g clip-path="url(#clip72)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img71"
                                    transform="matrix(2198.08 0 0 2198.08 -0.015625 0)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M946.232 470.74 1019.88 470.74 1019.88 484.474 946.232 484.474Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M946.232 470.074 946.232 485.14"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1019.88 470.074 1019.88 485.14"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M945.565 470.74 1020.55 470.74"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M945.565 484.474 1020.55 484.474"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g907"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(950.011 481)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M1155.76 253.564 1239.36 253.564 1239.36 267.155 1155.76 267.155Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1155.76 252.897 1155.76 267.822"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1239.36 252.897 1239.36 267.822"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1155.09 253.564 1240.02 253.564"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1155.09 267.155 1240.02 267.155"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g209"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1158.42 264)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip73)"
                            transform="matrix(0.000104987 0 0 0.000104987 1231 254)"
                        >
                            <g clip-path="url(#clip74)" transform="matrix(1 0 0 1.11429 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img71"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M945.88 165.136 1013.4 165.136 1013.4 178.869 945.88 178.869Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M945.88 164.469 945.88 179.535"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013.4 164.469 1013.4 179.535"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M945.213 165.136 1014.07 165.136"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M945.213 178.869 1014.07 178.869"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g694"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(949.659 175)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M947.953 221.926 1015.47 221.926 1015.47 235.66 947.953 235.66Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M947.953 221.26 947.953 236.326"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1015.47 221.26 1015.47 236.326"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M947.286 221.926 1016.14 221.926"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M947.286 235.66 1016.14 235.66"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="w694"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(951.732 232)"
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

        // Add thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);

        fetch('/chirchiq/server10', { signal: controller.signal })
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

                let c1 = 0; let c2 = 0; let c3 = 0; let c4 = 0;
                data.forEach(item => {
                    if (item.id === 953) {
                        const plus = document.getElementById("g953Plus");
                        const minus = document.getElementById("g953Minus");

                        if (parseFloat(item.value) > 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(953);
                            trueAnimation(9531);
                            trueAnimation(9532);
                        } else {
                            falseAnimation(953);
                            falseAnimation(9531);
                            falseAnimation(9532);
                        }
                    } else if(item.id === 700) {
                        const value = document.getElementById("g700");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(701);
                        } else {
                            falseAnimation(701);
                        }
                    } else if(item.id === 701) {
                        const value = document.getElementById("g701");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(701);
                        } else {
                            falseAnimation(701);
                        }
                    } else if(item.id === 723) {
                        const value = document.getElementById("g723");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(724);
                        } else {
                            falseAnimation(724);
                        }
                    } else if(item.id === 724) {
                        const value = document.getElementById("g724");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(724);
                        } else {
                            falseAnimation(724);
                        }
                    } else if(item.id === 770) {
                        const value = document.getElementById("g770");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(770);
                        } else {
                            falseAnimation(770);
                        }
                    } else if(item.id === 769) {
                        const value = document.getElementById("g769");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(770);
                        } else {
                            falseAnimation(770);
                        }
                    } else if(item.id === 747) {
                        const value = document.getElementById("g747");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(747);
                        } else {
                            falseAnimation(747);
                        }
                    } else if(item.id === 746) {
                        const value = document.getElementById("g746");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(747);
                        } else {
                            falseAnimation(747);
                        }
                    } else if(item.id === 793) {
                        const value = document.getElementById("g793");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(793);
                        } else {
                            falseAnimation(793);
                        }
                    } else if(item.id === 792) {
                        const value = document.getElementById("g792");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(793);
                        } else {
                            falseAnimation(793);
                        }
                    } else if(item.id === 815) {
                        const value = document.getElementById("g815");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(816);
                        } else {
                            falseAnimation(816);
                        }
                    } else if(item.id === 816) {
                        const value = document.getElementById("g816");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(816);
                        } else {
                            falseAnimation(816);
                        }
                    } else if(item.id === 838) {
                        const value = document.getElementById("g838");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(839);
                        } else {
                            falseAnimation(839);
                        }
                    } else if(item.id === 839) {
                        const value = document.getElementById("g839");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(839);
                        } else {
                            falseAnimation(839);
                        }
                    } else if(item.id === 931) {
                        const value = document.getElementById("g931");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(931);
                            trueAnimation(9311);
                            trueAnimation(9312);
                        } else {
                            falseAnimation(931);
                            falseAnimation(9311);
                            falseAnimation(9312);
                        }
                    } else if(item.id === 932) {
                        const value = document.getElementById("g932");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(931);
                            trueAnimation(9311);
                            trueAnimation(9312);
                        } else {
                            falseAnimation(931);
                            falseAnimation(9311);
                            falseAnimation(9312);
                        }
                    } else if(item.id === 694) {
                        const value = document.getElementById("g694");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                        const w = document.getElementById("w694");
                        w.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 907) {
                        const value = document.getElementById("g907");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(907);
                            trueAnimation(9071);
                        } else {
                            falseAnimation(907);
                            falseAnimation(9071);
                        }
                    }

                    else if(item.id === 209) {
                        const value = document.getElementById("g209");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(209);
                            trueAnimation(2091);
                            trueAnimation(2092);
                        } else {
                            falseAnimation(209);
                            falseAnimation(2091);
                            falseAnimation(2092);
                        }
                    }else if(item.id === 861) {
                        const value = document.getElementById("g861");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(861);
                            trueAnimation(8611);
                            trueAnimation(8612);
                            c2 = 1;
                        } else {
                            falseAnimation(861);
                            falseAnimation(8611);
                            falseAnimation(8612);
                            c2 = 0;
                        }
                    } else if(item.id === 884) {
                        const value = document.getElementById("g884");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(884);
                            trueAnimation(8841);
                            trueAnimation(8842);
                            c3 = 1;
                        } else {
                            falseAnimation(884);
                            falseAnimation(8841);
                            falseAnimation(8842);
                            c3 = 0;
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 654) {
                        const value = document.getElementById("g654");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a654");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 10.7 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(654);
                            c1 = 1;
                        } else {
                            falseAnimation(654);
                            c1 = 0;
                        }
                    } else if(item.id === 656) {
                        const value = document.getElementById("g656");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 657) {
                        const value = document.getElementById("k654");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 658) {
                        const value = document.getElementById("n654");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 659) {
                        const value = document.getElementById("w654");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 677) {
                        const value = document.getElementById("g677");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a677");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 29 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(677);
                            c4 = 1;
                        } else {
                            falseAnimation(677);
                            c4 = 0;
                        }
                    } else if(item.id === 679) {
                        const value = document.getElementById("g679");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 680) {
                        const value = document.getElementById("k677");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 681) {
                        const value = document.getElementById("n677");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 682) {
                        const value = document.getElementById("w677");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }

                    else if(item.id === 1) {
                        const value = document.getElementById("active");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 2) {
                        const value = document.getElementById("reactive");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 3) {
                        const value = document.getElementById("activeOut");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 4) {
                        const value = document.getElementById("activeIn");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 5) {
                        const value = document.getElementById("ownNeeds");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " KВт";
                    } else if(item.id === 6) {
                        const value = document.getElementById("water");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " м3/с";
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
                if (c1 > 0 || c2 > 0 || c3 > 0 || c4 > 0) {
                    trueAnimation(1);
                } else {
                    falseAnimation(1);
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