<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$energy = new Energy();
$dashboard = new Dashboard();
$power = new Day();

$this->title = 'Товоқсой ГЭС (ГЭС-8)';
$id = 28;

$power->getHour([$id]);
//$power->getDay([$id]);

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);
$urlAggregate4 = $energy->getInformation($id, 4);

$urlTransformer1 = $energy->getTransformer($id, 75);
$urlTransformer2 = $energy->getTransformer($id, 76);
$urlTransformer3 = $energy->getTransformer($id, 77);
$urlTransformer4 = $energy->getTransformer($id, 78);
$urlTransformer5 = $energy->getTransformer($id, 79);
$urlTransformer6 = $energy->getTransformer($id, 80);

$urlSwitch1 = $energy->getSwitch($id, 157);
$urlSwitch2 = $energy->getSwitch($id, 158);
$urlSwitch3 = $energy->getSwitch($id, 159);
$urlSwitch4 = $energy->getSwitch($id, 160);
$urlSwitch5 = $energy->getSwitch($id, 161);
$urlSwitch6 = $energy->getSwitch($id, 162);
$urlSwitch7 = $energy->getSwitch($id, 163);
$urlSwitch8 = $energy->getSwitch($id, 164);
$urlSwitch9 = $energy->getSwitch($id, 165);
$urlSwitch10 = $energy->getSwitch($id, 166);
$urlSwitch11 = $energy->getSwitch($id, 167);
$urlSwitch12 = $energy->getSwitch($id, 168);
$urlSwitch13 = $energy->getSwitch($id, 169);
$urlSwitch14 = $energy->getSwitch($id, 170);
$urlSwitch15 = $energy->getSwitch($id, 171);
$urlSwitch16 = $energy->getSwitch($id, 172);
$urlSwitch17 = $energy->getSwitch($id, 173);
$urlSwitch18 = $energy->getSwitch($id, 174);
$urlSwitch19 = $energy->getSwitch($id, 175);
$urlSwitch20 = $energy->getSwitch($id, 176);
$urlSwitch21 = $energy->getSwitch($id, 177);

$urlSwitch16 = $energy->getSwitch($id, 156);$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
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
                        <filter
                            id="fx13"
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
                            id="fx14"
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
                        <clipPath id="clip15">
                            <path
                                d="M357 206 357 225 376 225 376 206ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip16">
                            <path
                                d="M325 130 325 149 344 149 344 130ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip17">
                            <path
                                d="M453 130 453 149 472 149 472 130ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip18">
                            <path
                                d="M590 130 590 149 609 149 609 130ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip19">
                            <path
                                d="M734 131 734 150 753 150 753 131ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip20">
                            <path
                                d="M865 130 865 149 883 149 883 130ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip21">
                            <path
                                d="M1000 130 1000 149 1018 149 1018 130ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip22">
                            <path
                                d="M519 204 519 223 538 223 538 204ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="18"
                            height="41"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAALBAMAAABFS1qmAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAYUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAKh5qUYAAAAIdFJOUwDl/zzxTfP3PLqfygAAAAlwSFlzAAAOwwAADsMBx2+oZAAAABxJREFUGNNjYFRkwolNVJgYgpSYGNjUmRgYFJgAKRcCHpfvay0AAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img24"
                        ></image>
                        <clipPath id="clip25">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="18"
                            height="42"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAMBAMAAABYTmoeAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAASUExURQAAACPbFSPbFSTbFCPcFSPbFTG2KJYAAAAGdFJOUwD/500k5bagUF4AAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAdSURBVBjTY2AQYGRgEmJkMBRkZBAEYlZRPFiUEQAjKAFlq49k+QAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img27"
                        ></image>
                        <clipPath id="clip28">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip29">
                            <rect x="0" y="0" width="50180.5" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip34">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip35">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip36">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip37">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip38">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip39">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip40">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip41">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip42">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip43">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip44">
                            <path
                                d="M801 206 801 224 820 224 820 206ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip45">
                            <path
                                d="M801 323 801 342 820 342 820 323ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip46">
                            <path
                                d="M942 206 942 225 961 225 961 206ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip47">
                            <path
                                d="M942 321 942 340 961 340 961 321ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip48">
                            <rect x="0" y="-5.82077e-11" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip49">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip50">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip51">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip52">
                            <path
                                d="M519 323 519 342 538 342 538 323ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip53">
                            <path
                                d="M357 321 357 340 376 340 376 321ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip54">
                            <path
                                d="M1071 378 1071 397 1090 397 1090 378ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip55">
                            <rect x="0" y="0" width="1190625" height="581025" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABoVSURBVHhe7Z0HVFRplsft3Qk7O2fP5t05e2bPnDN79uzsTuiZUVu7jT2Gts0tGMbGhKnFbqdRW1sRyaGAAiVHyVFyzjlTgGAWEKpMqKhksLvlv9/96pWUxUNLBEW67uF/3qtX7328V+9X994vvZr2Om3V8lXLjh76ynf+/Pm/pdf79u51igwLvxURFn5bXeHh4bePHj16CcA7/ECd6WwsZmlpGXLjxg289957a2Qy2Q9trKyC+3p6MUK9vQgJCelkh+iA09nYLSgoqI2Ae3/2bGlEeDgszM3Ry+ASkw44nb2Sbdq06T8yMzOHCLiZM2Y4P3jwAFFRUaKwkRhwj4RDdTYVTdba/asqRZ9tTeujDy9cuPCjaSx/ohzq3J2hn55r7f1DvaJvrUzeP69O0Tez4VrHzxtukPp+3igf+GXDja7Zda29H9fJBxZfvjz0d0KRrAi80yjHPzYouufv3P35gfb2O7hJwM2c6dzR0YGoSAKuT9CzwAUHB+uAm4omU/QerpX33am+0Q+Zoh81wlKm6BOkfE3v8/eevq9UjWKAbScNKqXcfpfpWo2ir5de1ygG4e4fhp7enmeB03m475/J2gaDlcBMnGQMyuDwaAbSSOB6enpGwKYDbgobgyGYPJAYKOOlsmsdiI6J4yDdunULs2bNStF5uGnTtm3b9jcrPv74L2z1+1M5YmFzAoFTht2wtFJcvnyZgaTM1XJzc/Ei4L4POdy6det+YWlugWhp9E+ETVPfJho4yvHs3c4gIy0VGekZXKdcTr0QuOjo6DvCKU5Z+/DDD6cHnQnEkSNHfi5smvo2scAxEXCnfJFXUIz8wmLkMXl6euPBgw4EBQYhNycHnZ2dI4CTyWRtycnJf0xJSXk3PT39d+qi7RKJZMbKlSv/RbiMt9Lmzp27uLiwCBs++eRdYdPUt9fh4WpZWB1WHyLSSxCXkAwrG3skJafB3d0dxcXF6OrqfgpcV1cX94Kj6fbt21i+fLmRcBlvpR0+fHhrW2sbGHgLhE1T3ybcw40iAo+AzKlrha2LF1JT0+Hh7oHKyspRa67qon2YhzMWLuOttNWrV++nL9b06dPXCpumvr1e4FT/h9r0BnibHl8y+JKKGyF180N6Rga8PDxRX1cnCppKBNyaNWsOC5fxVtpWAwOLbx4/xoIFC3YLm6a+vSkPJyYCMDytBB5+QaxykQkfH29cunhRFDiS4datx4XLeCvtkLHxqaEnT7B548a3+ovzUjaZgONi50K5nld4CkIjziI1JRUBAQG4du3aCOB2bN/hun79+r8WLuWtMysrq8ChoSF8eeCArbBp6tukA05d8j44eochPikdiYkJCAkOwfXr1xlsfejp64Xr6dM4fuy4bKOe3rzJAB4LjT97//33f6GtLMwtsqgh/KuDhyPpNbuGHwlFTV2baOBkItu0ER2nyvGq2jphLfVGdm4Bzp49i8jICNCok9iYGD52rqW5GSYmJo36+voLzMzMfiBc2ms3e3v7q6WlpSgqKtJOhcPL5ORkzJkzZ6FQ1NS1iQKOehiq5dQsInT0j9hHCZNWovNTDKCs6T5O2rugvLIaYaEhcJQ48OYTVYhta2vDiRMnLn766aeL9uzZ80PhEl+bRUdEXfXy9uK1bU8tZG9rh6+//hrm5uZIT0/XATd2EWQDOHDkJE6Y28LczhmS075wD4iCf1QyQpPyEJ1RjtxGBQdJvAw1CfvI2HlWs/XC8zdw0lqKy5euwN3NDffu3n0KHYm83wkTkyaDTZuWvM4wRcDFMK87BKVRfvY8u3nzJm8GunrlKjLS0rFAB9zYVXyhHbt274GDvYTnWn4+vggPDUVyYiLycnNRVlYGT29fnPaPZADdFC1jdCmBdvQKxblzjfByd8f1lpZnoCNR4/DJkyfbDAwMljH7sXDJE2bRUQy4aAYcA+38+fOwsbEB9ZWOppOmprwydPUqA455OB1wY1Q1U2BCAQtx8hEQULLfQ+s9vchITeMQevn4wyMoBsWX7/IQLFamqNh5ByfmIyUtEzFR0aiqqBzx/0h3mQe0sLC4sW3bthU0QkO49HE3Au4sA4666hISEp7xcLQuJjKdh3tVMe/j7BPKoHpxjwGBFxQUiLSUVLh7+sA7PBElV+9x8FSVhuep+sYgcmTN8PAOQGlpGc7GnkV393AXmbru379P+VL71q1bV08EeCoPl5WVxXNLbU3n4V5VDBb/oAjRmz6auru64eJyCiXFxXBz92a5XirKrj0QL19Tiseouv4IlhJXVmNtgdtpV97fKvZ/SDSfwsrS8uH27dvXzZ49e9yGBqkDR9BrazoP96pq60ZERIzozX6RyAvZ2tmiob4e0lNuCIrLQXnzQx6mXxxu+2Ht7IPmpmacOuUCBas8iP0PlR49fASJnX0X83gbVq5c+bfCRzJmGzNwOg/3akosbkQlz6dGTo7RVgq5gifd19jNkDieQkhSAcpbukT/37CUlQmP8BQUFpcilOWHdS/okyV1sZzL0dGxh4XZT18FvFfxcNkZmdior2/y+b59KyZEu/etMGQ5rLGx8Zsd7DmewCnb2vrhFhjHQuRw+9hYRY26F89fgKNEwgE0t3FAVHoZKq8Pgzdaw3Jq6UX4B4agtLgICYkJWo1A4WHdyXnA0NBw+5IlS34qfERa26t4uPq6ety6eZPXrKn3YdzFyq6rrcWmTZt+LZzum7Hx9nDVrCwPf1X+pkWlQUsVFRXCw8Mdt27fwgkLO8TmVKOqtUf0HLjYeVRc64C15DTaWlvh5uaGR48eiZatKYLF1dX1G4PNm/e8DHgq4Kj3gNoCVbXQF5kqhystLsG333zD9O046xvk5+cjPy9/agFH4YxqloGhL1dheBnFxsYiMjIS7e13YWJqjcyaZtFzUUkm74eZ3Wn2Db8FJ0cn3LlzR7RcUTGv6Ovl/e2WTZ9+oQ14KuAING9vbzQ2NuLhw4fPgEfr5G2o3fD+vXv8tSqHq6ioEPYaf6MBrgTdlPNwRZfuIjklXfwGjqPI29Hw9KysHHiGJ6Ja3it6Pkr1w8U3AnX1DQjwD8ClCxdYiBUvdzT5+fo+2bJ5y6HngacOHNmTJ0+QkZHBw6TKvvvuO/DeiCdDiImOxuPHj596uMoJBI68bl5e3tQDzv9sDuQiDb4TIWrrsrW1Zd6iGccsHVHe9JCH0pHnpaxMnM2uQtTZeP5NT01N1Sqv01RwcPDQ5k2bjomBpwkcW0FfXy8SExL5NlJpSSkLtwp6EyUMAgrzr8PDTVngXJknoWRf7GZNhOh/RUdGoaysBM6n3ZFRcZmdx2jNJ49RcvEOJE6ukMvlPK9T7/zXRqpri4qMHNLX17dWB08TOFoGBbji0AFDBPpIccbXma1vh5+nMwYfD6CY5aUcOJ2HG6v64RccyW7I+FUWtFVTUxNcGUAV5RVw8otkIbaHebXH/JzIu6mfp4yF3+OWEt4AbGdn99xG4hcpPj4eenp6TtScEiUCXKj7WnRe242+pl3oa97D1vcgNWgduh49HAZO5+HGpurWboSGRqHnFdrfXkWUl1lZW+PWrZs4YmqDqqZReiqoAZlBaO3si+bm6/D09GDLZtEyXyTyeKS05BR4uLkPUV+qCrgnQ0+wy0APh/Z+gP7mnQy4nbA/vgAbP1mMvv4+lBTrPNyYRV4kqeQ8qqtrRG/M6xQN0qQuMg9ffyQUNXDAxPplqfciJC6PJfbZyM7MQnZ2jnJgwRhE0MXHxkEdOJa1IcLzE/Q272baKWgX0kLXobPzEfNwuhxuzKJO9FMB0SwnGjmp+U2IBmM6O0lxkdVIrZz9UCNSi6VGY4Iur+46XFy90CZvg6eb+5gqE6LAsWWk51oMMNCU2sU9XXroWt678T3N4XrG4elJFKL64e4fKnoz3phYiLWxssb9e3fxtYkFKqkWy86XJumMuIbWHnxtZs1hs7KwGlNlQhO4J0xRnmvUgNvJgUsLWyMAp72Hq6+vR1BQENfL9GKobHJ5OM0PfzSRJ+SJ+EiPSMPIlY/kEr8hb1IJCfEoKMhDcFgkYrIqUD0COHqtvCZTGxfeqOzs7AyFQiFanpjEPRwQ4aUJHAupHDi1kPoCD0e9BV6eXjzPTEtLQ3VV1dP/oa1NGuB2H/jqwkETWxw2tcNXJyU4aiHF11bOOG57GiZ2bjBz8IS5kzesXfxhcyoAErcQOLiHQOodAalPJE6dicXpwFjesGpiYoqkhESeQNMHmJOVjQJ2kfTB0uSS8vJyluNV8w71hoYGXGDhjp6qRDXMlpYWtLa28lBIN5r6/6jBlHoGaAAljSKh2iTVLKn1nm5U56NO9HSz8KdFIy6VKZFIIJe34piN89Oaq6a3o+2eoUkoLSvnUxQLCwtFy9PUaCE13FMfPU1G6G7Zy9XL1lPC1qO7k2qpwx6O5jSM5uEuXbrEPysqjxqT6cmhtHwZ6CYNcMzo2WTDEh61KiYzM7O/EtM00jS2Pm0aW46Uaj+ayqetFixY8IMXiSbKrF62YhM9kUkMAk1RKLKzscW99nY+16LscrvSa6sBp/Tig0gtuwBf/0DuVaibSqw8dRFwCQJwKhtitVRq/ogIDUPnwwdMHYgMD0UHC/EEDFVsaIjU8zwczXvIyc7m+3XyL9kj/oWLioh8aeDyJwlwb70xQH9mamp6RwwETVGOlpqSwmulyUlpCIjLVno7weMpRRD2o4LlfGZW9vwYa2sbthQfSUziwMXFKbutCAT2d5eB7cNCIXXKk4eneRwlJSVITEhAFQuL1L/5iMFz9fIV7uHoi0PeXF2NDY0cxqfbWLinZWBg4PA2tfdoQtG9u/dGKDkpeXJ03k8VI4+3YcOGEG3zLuppkNjbo/3WbRw1d2ChVawvth9VbT0wsZSyUP6Q53UU5sXKI7meOoV0lmPFxcYi/qxSccKSi7Yz0ba4mFjubUODQzj8lFIkJyZxYAcGBobVP4BBpvycXNy9047YmLMY6O3DIHuPpL6vsbExn3ooEdHnRvt5eqMDbnztnRUrVqyOi4t7IgaEpmiyi6OjIx9JYuPggryGG0KI1ahUyPtYvhqGeuZtYuPjUM481WjlUU6mrahmqmiTIyJCObGbctzAM4EozM1HQX4eUz7y8wuRR8rJ4R4ql4FXkFfAVKh8n61T3zB5V/KeFKrFRLnopBgtMhXNwMDg344fP35dq/Y0tg+N6EhPT2U12UK4hcShVh02Jgq51M4Ym12J6Jh4XLx4kYc00fJeQpSb3Waw05NACbgKBtznxrswd+nvMfejXzP9FvOX/g7z2PKj9dMxny2Xrp+BhR//Fov0/og5y5Tvzf/oXcxd/BucjY0WMraRNpkqDVPSqELBPlxPqgGL3WxNUYh1dHTgudBxc0fIWChVAvestys4fwP2Ulc8ZCFW4uAwpkZilbIJOFYb58AplMBZun8BQ/u52OHwHgwd5mCHZBYMpbMgKV6NndL34Fi0Gns83odt6jrscpkLQ8dZ2CNdBEPbeYiICxTwGmk64F6PvaO3Vm9pZETkN2I3XFOUwLvw9jc5nN19kFl59RnYVPBVNXXC1FrK9u+EVCpFO6sciJX3IpGHu8M8XIzKw7FaqqXHfuyUMNAcZmKnANwOZwYaA85QOgMORasYcB/AOu0T7HKex/aZhb1Of8JOOwLujIDXSNMB9xpNX1//X48eOXpF7FnCmiKPlcPypdTkFFRWVrPcLYLnddQFpj5/opp5QImrP64xDxodFUnPJBYt73kiD0d5FUFLuVl4eDiOOmzHTsHD7XT4QABuFhyKVz0F7jP3uQJwbD/H97FbqgJO5+Emja1fv/5H7MN2pAZUsZuvKWqAdnJywt377ayW6oTqFmW3mLootwtOyEFGZg5qZbW8bUysrNFE3Wftd+4gmOWDVy5e4o/AMHX9DIYSdeBmCx5ulXJZtJJ7OCsG3E4X5gFZSN3NPJwhBy6AoSXeNqcD7s3YO3p6eguDgoIGxQDQ1IOHD2gyDdpar8MvIATxhecYaPQzUOrgDSKz+io8vP0YPO0sJLu8dF6nXmmwcPschpYLsd1qLrbZMvCs5mOP01zYp6/FTuc5sM1cx0CbDcvY9Sz0zsc2mw+wx2YJDM0XIiJWF1InpdHj9g8fPiyjFnsxANRF8FBzRFJiIhoaGmHneoZ5tl6hoVhVoRhEyeW7sJI48zyQ2uuoK06sPDGpA9fRcRc3bym4btxuw82bCpRXlsDo9DyYJy2DafJy7LFY/nSfWyS2z81bcvT19Qh4jTQdcG/YKMQaGBhY1tbWikKgKernpVyLQLK0deaPoVDNw1V5u8qWTlg7e/EaZ1hYGO8vFitLU7Tvufpzyh4FVgGhSgjvURB6FaprqrBPyoCLWw6z+GX47ORqto+yj5n2Vx2jPE5cKUnJSIiP1wH3pm3z5s1z/Pz8esRA0BQNHPD09OT9q5FRsYhML2eeTrORuB/eYYkoLa/kXVk0BF2sLHXRAAXqaaDnorRqiHI7R4k9jp74Cxb8+X+xZP10SF3s4eHqjmuXr4zYfzRdZyKgdcBNAqMQe8j4YHHHvReHQQqxBQUFHKRL7IZbOvsw6Po08roBJBTUIzQsEm3yVni6e465vS4w8AwO/MUICzf/F5YZ/Q+W7/8fzP/k/+Dj5clrtWLHjKaqykodcJPFqKF469atR8krid0sTdFEZnraU8e9e7B1ckPJhdtqwDGvpxhE3jk580Ye3DPSw3XusX07O7t4F9iwNF93oottoxpsd3cX75e18zoISeFyOBStgKToI9jnrEZkXAhios8+PR8aPFBeVoHDX5/AkWNmcHYZ+aQBAm7Dhg2/ES5ZZ5PBmAeY5eXh9VD9Ro0mGp/n6+vH2+Lik1JxJj6X53Wq9jr6UePSqx0MSE+WR93jT7tsIjXRskmQsE3Y3szKov1oDBwNj6eG6COSHXAoWwaHUgZd6cewz18JBxdrBrwLamvr0NLUDFcPX2RUN/EQT801xU0P+I/q3bkzPNhAB9wktUWLFv2zsbFxljaPhaBQWchCbGJcHAfFQurNpyFyTycMeaps68GZqHS4eITAxTNYKQ/l0lmQi0eQUmzdztEdFqamCAoOxMkTx7Fh14c4HPIhvgpZxLQQB8/8CX/+dB1OsPdMTUzx6ZZtyJI1M9CfzSerWrsRpvbYNB1wk9jMzMx+YLDZwDg/P39IHbDRRI/ud3N1xX2WB0rdvJBb3yYAoFGpGFWq/QYRkVUFqbMT1h2YjoP+DK4TM7HT8QPsln4AvWN/wMHARVh94HcwiVqGhevehbu3n7LyIgCuEuWV3gGU5ymnbeqAewts/fr1093c3Nq1SfofsBB7JiAAV65cQWZ2LrwjUkd4nReJwmF0ZiX8znjiWNhqbLWfiYPBS2DkPht7Ts/BV2GLsMV6Bo4nfIx1pr/HfpuPEBxG3W8jgaM88kzw8DwTHXBviS1duvSfvvzyywRtBneqQizVYptbrsNG6oGa1i7eWKydehCVWY4Af1+sNvoDjJwXYOOx6dhmMRfbbWZh/cGZ2O+6ACv3vQtjnyVYqj8DQaGRfGIQwaoSDaeix1rExiU8PTcdcG+R0TwLVovdl5WV9Z06YKOJhkV5uLuj434HqqtlkNXUQyZjqqlTro9QHWpkpFokxifh8OFD+Gz3LmzetgPbd++D4S4jYbkfO3YbwXD3Xmzfsxd79hrh80MmqJXTb9ESbINK4Frp13s8+BwI1eRuHXBvoa1YseJdVjtU0IQcTcg0RSE2JCgYjg4OcNBCtB/9uo6DRMJnmJmeMEVoajEDiMFEQMkHuWQkti0ovgB+AaEIDoliXi6ahdZoBDHRdM2MrFzeE6F+PvQjJDrg3kJbs2bNP3zxxReR1DugfkPHWy3MS4aklgr52Ei5hSbxgaBix4qJPJyu4fctNQDvbNmyxTA1NfVbsZs7HmppbkKYCjhNMeA8QhO1Bo4ahisrq5BY2CCvkQ821cj7m1hFI79O0e9dL+89zdZPsxzSi+WClWw9r0beE1An73Y919p1sFbRZVij6D5SJ+91rZb3x7MadU1NW0+yjL2uk3dtO6/onNko75xBovVzip5NtYo+X3ae5dVtnScbW9r/XfjYdPaqxkLsb6RS6TXqIRC70a+i5ucBxxScXIzLly6LHiumispqJJddfNowTTVoCs3K8mipts69KM3RpaVyf5UoR1RfV+WNqv34b6LR+8JrBvE37PXD2hs9DsLHprNXMVah+PuDBw/GXL1yRfRGj1UEXCgDTv0Gq0TQVNHvybr5I7+giA93p6ew93R1jaqK8kqklF5UwvAGJFP0hQgfmc5e1XiI3bx5S0JCglaDO7URjQb2jkwf4WGG1c9/XTGt4gpCk4sQlpTPlgXiSipAYEIeyq49eurhXpv4+ZPX1AE37rZy6dJfOTk4XKSBmGIQvYz6enpwyjdMebOehjtNjbZ9EkkH3MSagYHBT1kt1od+wlIMpJdRSkoa0iqv8LxI9Ga+DdIB93ps88bNG+Pj4nq0ebrTaKKeC78zIUgsOf/6QyGXyrtqK7HjlK91OdxrsMWLF/+3vZ1d/cvMcRghBmxBfiEc3QMQEJuNrNrryK5rRU5dG1euFnrefvReNhOVm1nd9OqqEtlW3cwqLI1xwseis4k0fX39n+zfv9+NnmIpCpQWou6pPgYe/VJiYVEJCgqLx1lFXGs+0Q/6/Yx5H0yE5sxZPFv4SHT2OkxPT29dTExMpxhQk0X79u2zEk5XZ1PBVqxY8UsbG5sq9X5O6gVQv+lvUkZGRtbCqepsqhhNUTT67DOpbBL8xICmdMBNYVu7atXK6KiojrHO6JoI6YCb4rZ03rz/ND9pFu/v41vq78vEln6+fmW09GWvNcX3UYmOUR03Ypv/0/XhY9k21T7q+wvvk1gFZxedV3p6+o9J/CTHzaZN+39zXNlOdbB2LgAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img56"
                        ></image>
                        <clipPath id="clip57">
                            <rect x="0" y="0" width="1190625" height="580048" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOpJREFUSEvt12sSgyAMBODYKiL4uv9pK7oKIcFeIN8vS3amlpWZSoXuw32xXukxznpMuAHTbMCEs5zlEstZLrGc5RLLWS6xnPpHzI2YZt5hdpgCRAxLEbMwE1b+oQUX72aigMs363GjvXZjlXODNnxoW85fTHJDOH/FyL1/c9yRU5oodUgdJixpAjKJW7EoxaI7oh2r0oYEtGoZMX94DLhUBKfXojyp9dtCgiI4+UDcRXBic6L+XiFqKYrgeC1iS7Jyc3gRXFlLVQSXN2fCSsO9ObII7q7leTZbrtOiFsGl06IXwTlfnAgg+gEGAhJwZdPnjwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img58"
                        ></image>
                        <clipPath id="clip59">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img60"
                        ></image>
                        <clipPath id="clip61">
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
                            d="M1051.66 397.766 165.5 395.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M577.5 403.5 579.592 467.913"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M841.5 403.5 843.592 467.913"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M841.41 389.071 841.001 375.545 843.999 375.455 844.409 388.98ZM838.002 375.636C837.927 373.152 839.88 371.077 842.364 371.002 844.848 370.927 846.923 372.88 846.998 375.364 847.073 377.848 845.12 379.923 842.636 379.998 840.152 380.073 838.077 378.12 838.002 375.636Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M6.00653 0.0759186C9.83339-0.511956 13.3805 2.33535 13.9291 6.43556 14.4778 10.5358 11.8203 14.3362 7.99349 14.9241 7.30963 15.0291 6.61502 15.0251 5.93226 14.9122"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 835.5 403.5)"
                        />
                        <path
                            d="M281.5 403.5 283.592 467.913"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M465 149.5 465 171.663 462 171.663 462 149.5ZM468 171.663C468 174.149 465.985 176.163 463.5 176.163 461.015 176.163 459 174.149 459 171.663 459 169.178 461.015 167.163 463.5 167.163 465.985 167.163 468 169.178 468 171.663Z"
                            fill="#663300"
                        />
                        <path
                            d="M0 0 889.3 0.0752756"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1054.8 374.5)"
                        />
                        <path
                            d="M0 0 411.972 0.489659"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 651.472 170.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(410.852 95)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(418.019 95)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(421.519 95)"
                        >
                            И
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(429.186 95)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(432.686 95)"
                        >
                            2 (Искандандар
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(503.352 95)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(506.852 95)"
                        >
                            2)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(550.021 92)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(556.521 92)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(560.021 92)"
                        >
                            4 (Трансформатор
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(642.688 92)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(646.188 92)"
                        >
                            4)
                        </text>
                        <path
                            d="M1118.63 171.66 701.5 171.5"
                            stroke="#0099FF"
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
                            transform="translate(712.866 95)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(720.033 95)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(723.533 95)"
                        >
                            801 (п/с 0)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(838.055 93)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(845.221 93)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(848.721 93)"
                        >
                            8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(854.055 93)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(857.555 93)"
                        >
                            О (
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(871.388 93)"
                        >
                            Оксокота
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(914.055 93)"
                        >
                            )
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(544.751 217)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(551.918 217)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(555.418 217)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(566.084 217)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(569.584 217)"
                        >
                            Т5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(108.509 378)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(112.009 378)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(115.509 378)"
                        >
                            СШ 10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(237.522 472)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(243.689 472)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(247.189 472)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(233.855 485)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(217.855 498)"
                        >
                            18 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(193.855 511)"
                        >
                            СВ750
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(224.189 511)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(227.689 511)"
                        >
                            60
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(238.355 511)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(241.855 511)"
                        >
                            40
                        </text>
                        <path
                            d="M368 171.5 368 252.135 365 252.135 365 171.5ZM362 171.5C362 169.015 364.015 167 366.5 167 368.985 167 371 169.015 371 171.5 371 173.985 368.985 176 366.5 176 364.015 176 362 173.985 362 171.5Z"
                            fill="#663300"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(385.232 217)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(392.399 217)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(395.899 217)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(406.565 217)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(410.065 217)"
                        >
                            Т3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(830.289 217)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(837.456 217)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(840.956 217)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(856.956 217)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(860.456 217)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(968.49 217)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(975.657 217)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(979.157 217)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(995.157 217)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(998.657 217)"
                        >
                            Т2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(237.877 183)"
                        >
                            СШ 35 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1051.88 183)"
                        >
                            СШ 110 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(297.889 95)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(305.056 95)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(308.556 95)"
                        >
                            Т (Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(327.723 95)"
                        >
                            овоксой)
                        </text>
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
                            transform="translate(546.168 22)"
                        >
                            Товоқсой
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(629.901 22)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(672.568 22)"
                        >
                            (
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(678.734 22)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(716.734 22)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(722.901 22)"
                        >
                            8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(732.234 22)"
                        >
                            )
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(980.162 93)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(987.329 93)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(990.829 93)"
                        >
                            802 (п/с 0)
                        </text>
                        <path
                            d="M281.41 388.071 281.001 374.545 283.999 374.455 284.409 387.98ZM278.002 374.636C277.927 372.152 279.88 370.077 282.364 370.002 284.848 369.927 286.923 371.88 286.998 374.364 287.073 376.848 285.12 378.923 282.636 378.998 280.152 379.073 278.077 377.12 278.002 374.636Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M684.283 466.992 682.001 395.548 684.999 395.452 687.282 466.896ZM679.002 395.644C678.923 393.16 680.872 391.082 683.356 391.002 685.84 390.923 687.918 392.872 687.998 395.356 688.077 397.84 686.128 399.918 683.644 399.998 681.16 400.077 679.082 398.128 679.002 395.644Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M582 521.5 582 541.533 579 541.533 579 521.5ZM580.5 541.533 585 538.533 580.5 547.533 576 538.533Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M687 522.5 687 541.969 684 541.969 684 522.5ZM685.5 541.969 690 538.969 685.5 547.969 681 538.969Z"
                            fill="#7F7F7F"
                        />
                        <g clip-path="url(#clip15)">
                            <g filter="url(#fx0)" transform="translate(348 199)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#4472C4"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch7 ?>">
                            <rect
                                id="c111"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#4472C4"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 357 225)"
                            />
                        </a>
                        <path
                            d="M336 148.5 336 170.663 333 170.663 333 148.5ZM339 170.663C339 173.149 336.985 175.163 334.5 175.163 332.015 175.163 330 173.149 330 170.663 330 168.178 332.015 166.163 334.5 166.163 336.985 166.163 339 168.178 339 170.663Z"
                            fill="#663300"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 334.5 130.81)"
                        />
                        <path
                            d="M1.5-2.32496e-06 1.5001 67.7346-1.49989 67.7346-1.5 2.32496e-06ZM-4.5 6.97488e-06C-4.5-2.48527-2.48529-4.5-6.97488e-06-4.5 2.48527-4.5 4.5-2.48529 4.5-6.97488e-06 4.5 2.48527 2.48529 4.5 6.97488e-06 4.5-2.48527 4.5-4.5 2.48529-4.5 6.97488e-06Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 367.5 374.235)"
                        />
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c1111"
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 351.5 306.5)"
                            />
                            <path id="c1112"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 352.5 282.5)"
                            />
                        </a>
                        <g clip-path="url(#clip16)">
                            <g filter="url(#fx1)" transform="translate(316 123)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#4472C4"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch1 ?>">
                            <rect
                                id="c573"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#4472C4"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 325 149)"
                            />
                        </a>
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 463.5 130.81)"
                        />
                        <g clip-path="url(#clip17)">
                            <g filter="url(#fx2)" transform="translate(444 123)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#4472C4"
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
                                id="c588"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#4472C4"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 453 149)"
                            />
                        </a>
                        <path
                            d="M602 148.5 602 170.663 599 170.663 599 148.5ZM605 170.663C605 173.149 602.985 175.163 600.5 175.163 598.015 175.163 596 173.149 596 170.663 596 168.178 598.015 166.163 600.5 166.163 602.985 166.163 605 168.178 605 170.663Z"
                            fill="#663300"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 600.5 129.81)"
                        />
                        <g clip-path="url(#clip18)">
                            <g filter="url(#fx3)" transform="translate(581 123)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#4472C4"
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
                                id="c603"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#4472C4"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 590 149)"
                            />
                        </a>
                        <path
                            d="M745 149.5 745 171.663 742 171.663 742 149.5ZM748 171.663C748 174.149 745.985 176.163 743.5 176.163 741.015 176.163 739 174.149 739 171.663 739 169.178 741.015 167.163 743.5 167.163 745.985 167.163 748 169.178 748 171.663Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 743.5 131.81)"
                        />
                        <g clip-path="url(#clip19)">
                            <g filter="url(#fx4)" transform="translate(725 124)">
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
                        <a href="<?= $urlSwitch4 ?>">
                            <rect
                                id="c543"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 734 150)"
                            />
                        </a>
                        <path
                            d="M876 148.5 876 170.663 873 170.663 873 148.5ZM879 170.663C879 173.149 876.985 175.163 874.5 175.163 872.015 175.163 870 173.149 870 170.663 870 168.178 872.015 166.163 874.5 166.163 876.985 166.163 879 168.178 879 170.663Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 874.5 130.81)"
                        />
                        <g clip-path="url(#clip20)">
                            <g filter="url(#fx5)" transform="translate(856 123)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="18"
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
                        <a href="<?= $urlSwitch5 ?>">
                            <rect
                                id="c558"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 865 149)"
                            />
                        </a>
                        <path
                            d="M1011 148.5 1011 170.663 1008 170.663 1008 148.5ZM1014 170.663C1014 173.149 1011.99 175.163 1009.5 175.163 1007.01 175.163 1005 173.149 1005 170.663 1005 168.178 1007.01 166.163 1009.5 166.163 1011.99 166.163 1014 168.178 1014 170.663Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1009.5 130.81)"
                        />
                        <g clip-path="url(#clip21)">
                            <g filter="url(#fx6)" transform="translate(991 123)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="18"
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
                        <a href="<?= $urlSwitch6 ?>">
                            <rect
                                id="c528"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1000 149)"
                            />
                        </a>
                        <path
                            d="M530 171.496 530.217 250.679 527.217 250.687 527 171.504ZM524 171.512C523.993 169.027 526.003 167.007 528.488 167 530.973 166.993 532.993 169.002 533 171.488 533.007 173.973 530.998 175.993 528.512 176 526.027 176.007 524.007 173.998 524 171.512Z"
                            fill="#663300"
                        />
                        <g clip-path="url(#clip22)">
                            <g filter="url(#fx7)" transform="translate(510 197)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#4472C4"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch8 ?>">
                            <rect
                                id="c222"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#4472C4"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 519 223)"
                            />
                        </a>
                        <path
                            d="M1.5-0.00313172 1.64446 69.1897-1.35553 69.196-1.5 0.00313172ZM-4.49999 0.00939515C-4.50518-2.47588-2.49467-4.4948-0.00939515-4.49999 2.47588-4.50518 4.4948-2.49467 4.49999-0.00939515 4.50518 2.47588 2.49467 4.4948 0.00939515 4.49999-2.47588 4.50518-4.4948 2.49467-4.49999 0.00939515Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 528.5 374.693)"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c2222"
                                d="M0 15.5C-1.97336e-15 6.93959 6.93959-1.97336e-15 15.5-3.94671e-15 24.0604-7.89343e-15 31 6.93959 31 15.5 31 24.0604 24.0604 31 15.5 31 6.93959 31-9.86678e-15 24.0604 0 15.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 513.5 305.5)"
                            />
                            <path id="c2221"
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 513.5 280.5)"
                            />
                        </a>
                        <path
                            d="M291.385 54.956 374.985 54.956 374.985 68.5472 291.385 68.5472Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M291.385 68.5472 374.985 68.5472 374.985 82.1384 291.385 82.1384Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.719 68.5472 375.652 68.5472"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M291.385 54.2893 291.385 82.805"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M374.985 54.2893 374.985 82.805"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.719 54.956 375.652 54.956"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.719 82.1384 375.652 82.1384"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g573Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(294.052 65)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g573Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(294.052 79)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip23)"
                            transform="matrix(0.000104987 0 0 0.000104987 367 56)"
                        >
                            <g clip-path="url(#clip25)" transform="scale(1 1.05366)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip26)"
                            transform="matrix(0.000104987 0 0 0.000104987 367 69)"
                        >
                            <g clip-path="url(#clip28)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M422.097 55.2963 505.697 55.2963 505.697 68.8875 422.097 68.8875Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M422.097 68.8875 505.697 68.8875 505.697 82.4786 422.097 82.4786Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M421.43 68.8875 506.363 68.8875"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M422.097 54.6296 422.097 83.1453"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M505.697 54.6296 505.697 83.1453"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M421.43 55.2963 506.363 55.2963"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M421.43 82.4786 506.363 82.4786"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g588Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(424.764 65)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g588Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(424.764 79)"
                            >
                                Р
                            </text>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 497 56)">
                            <g clip-path="url(#clip29)" transform="scale(1.13889 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(2787.8 2787.8)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip30)"
                            transform="matrix(0.000104987 0 0 0.000104987 498 70)"
                        >
                            <g clip-path="url(#clip31)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M558.685 54.6778 642.285 54.6778 642.285 68.269 558.685 68.269Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M558.685 68.269 642.285 68.269 642.285 81.8602 558.685 81.8602Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M558.018 68.269 642.951 68.269"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M558.685 54.0111 558.685 82.5268"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M642.285 54.0111 642.285 82.5268"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M558.018 54.6778 642.951 54.6778"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M558.018 81.8602 642.951 81.8602"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g603Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(561.352 65)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g603Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(561.352 78)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip32)"
                            transform="matrix(0.000104987 0 0 0.000104987 634 55)"
                        >
                            <g clip-path="url(#clip33)" transform="matrix(1 0 0 1.05366 0 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip34)"
                            transform="matrix(0.000104987 0 0 0.000104987 634 69)"
                        >
                            <g clip-path="url(#clip35)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(2721.43 2721.43)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M701.372 54.5474 784.972 54.5474 784.972 68.1386 701.372 68.1386Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M701.372 68.1386 784.972 68.1386 784.972 81.7298 701.372 81.7298Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M700.705 68.1386 785.638 68.1386"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M701.372 53.8807 701.372 82.3964"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M784.972 53.8807 784.972 82.3964"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M700.705 54.5474 785.638 54.5474"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M700.705 81.7298 785.638 81.7298"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g543Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(704.039 65)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g543Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(704.039 78)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip36)"
                            transform="matrix(0.000104987 0 0 0.000104987 777 55)"
                        >
                            <g clip-path="url(#clip37)" transform="matrix(1 0 0 1.05366 0 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip38)"
                            transform="matrix(0.000104987 0 0 0.000104987 777 69)"
                        >
                            <g clip-path="url(#clip39)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M832.466 54.1598 916.065 54.1598 916.065 67.751 832.466 67.751Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M832.466 67.751 916.065 67.751 916.065 81.3421 832.466 81.3421Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M831.799 67.751 916.732 67.751"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M832.466 53.4931 832.466 82.0088"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M916.065 53.4931 916.065 82.0088"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M831.799 54.1598 916.732 54.1598"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M831.799 81.3421 916.732 81.3421"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g558Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(835.133 64)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g558Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(835.133 78)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip40)"
                            transform="matrix(0.000104987 0 0 0.000104987 908 55)"
                        >
                            <g clip-path="url(#clip41)" transform="matrix(1 0 0 1.05366 0 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip42)"
                            transform="matrix(0.000104987 0 0 0.000104987 908 68)"
                        >
                            <g clip-path="url(#clip43)" transform="scale(1 1.11429)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M813 171.5 813 252.135 810 252.135 810 171.5ZM807 171.5C807 169.015 809.015 167 811.5 167 813.985 167 816 169.015 816 171.5 816 173.985 813.985 176 811.5 176 809.015 176 807 173.985 807 171.5Z"
                            fill="#0099FF"
                        />
                        <g clip-path="url(#clip44)">
                            <g filter="url(#fx8)" transform="translate(792 199)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="18"
                                        stroke="#0099FF"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 27)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch9 ?>">
                            <rect
                                id="c333"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 801 224)"
                            />
                        </a>
                        <path
                            d="M1.5-2.32496e-06 1.5001 67.7346-1.49989 67.7346-1.5 2.32496e-06ZM-4.5 6.97488e-06C-4.5-2.48527-2.48529-4.5-6.97488e-06-4.5 2.48527-4.5 4.5-2.48529 4.5-6.97488e-06 4.5 2.48527 2.48529 4.5 6.97488e-06 4.5-2.48527 4.5-4.5 2.48529-4.5 6.97488e-06Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 811.5 374.235)"
                        />
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c3332"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 796.5 306.5)"
                            />
                            <path id="c3331"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 796.5 282.5)"
                            />
                        </a>
                        <g clip-path="url(#clip45)">
                            <g filter="url(#fx9)" transform="translate(792 316)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#6600CC"
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
                                id="c3333"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 801 342)"
                            />
                        </a>
                        <path
                            d="M953 171.5 953 252.135 950 252.135 950 171.5ZM947 171.5C947 169.015 949.015 167 951.5 167 953.985 167 956 169.015 956 171.5 956 173.985 953.985 176 951.5 176 949.015 176 947 173.985 947 171.5Z"
                            fill="#0099FF"
                        />
                        <g clip-path="url(#clip46)">
                            <g filter="url(#fx10)" transform="translate(933 199)">
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
                        <a href="<?= $urlSwitch10 ?>">
                            <rect
                                id="c444"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 942 225)"
                            />
                        </a>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c4443"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 937.5 305.5)"
                            />
                            <path id="c4441"
                                  d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                  stroke="#0099FF"
                                  stroke-width="3"
                                  stroke-miterlimit="8"
                                  fill="#FFFFFF"
                                  fill-rule="evenodd"
                                  transform="matrix(1 0 0 -1 936.5 282.5)"
                            />
                        </a>
                        <path
                                d="M1.5-2.25756e-06 1.5001 69.7569-1.49989 69.7569-1.5 2.25756e-06ZM-4.5 6.77268e-06C-4.5-2.48527-2.48529-4.5-6.77268e-06-4.5 2.48527-4.5 4.5-2.48529 4.5-6.77268e-06 4.5 2.48527 2.48529 4.5 6.77268e-06 4.5-2.48527 4.5-4.5 2.48529-4.5 6.77268e-06Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 952.5 375.257)"
                        />
                        <g clip-path="url(#clip47)">
                            <g filter="url(#fx11)" transform="translate(933 314)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#6600CC"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch14 ?>">
                            <rect
                                id="c4442"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 942 340)"
                            />
                        </a>
                        <path
                            d="M967.615 52.7219 1051.21 52.7219 1051.21 66.3131 967.615 66.3131Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M967.615 66.3131 1051.21 66.3131 1051.21 79.9043 967.615 79.9043Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M966.949 66.3131 1051.88 66.3131"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M967.615 52.0552 967.615 80.5709"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1051.21 52.0552 1051.21 80.5709"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M966.949 52.7219 1051.88 52.7219"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M966.949 79.9043 1051.88 79.9043"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g528Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(970.282 63)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g528Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(970.282 76)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip48)"
                            transform="matrix(0.000104987 0 0 0.000104987 1043 53)"
                        >
                            <g clip-path="url(#clip49)" transform="scale(1 1.05366)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img24"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip50)"
                            transform="matrix(0.000104987 0 0 0.000104987 1043 67)"
                        >
                            <g clip-path="url(#clip51)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(2721.43 2721.43)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(328.403 263)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(334.903 263)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(338.403 263)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(288.403 276)"
                        >
                            10,5/38,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(331.403 276)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(297.403 289)"
                        >
                            10000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(326.737 289)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(256.737 302)"
                        >
                            ТД
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(270.57 302)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(274.07 302)"
                        >
                            10000 38,5/10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(550.181 265)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(556.681 265)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(560.181 265)"
                        >
                            5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(550.181 278)"
                        >
                            10,5/38,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(593.181 278)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(550.181 291)"
                        >
                            10000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(579.514 291)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(550.181 304)"
                        >
                            ТД
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(564.014 304)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(567.514 304)"
                        >
                            10000 38,5/10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(776.243 265)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(782.743 265)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(786.243 265)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(738.909 278)"
                        >
                            10,5/
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(760.576 278)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(779.243 278)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(745.243 291)"
                        >
                            45
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(755.909 291)"
                        >
                            000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(774.576 291)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(721.743 304)"
                        >
                            KWUF
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(753.076 304)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(756.576 304)"
                        >
                            151/125
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(974.87 263)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(981.37 263)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(984.87 263)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(974.87 276)"
                        >
                            10,5/
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(996.537 276)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1015.2 276)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(974.87 289)"
                        >
                            60
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(985.537 289)"
                        >
                            000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1004.2 289)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(974.87 302)"
                        >
                            ОЦК 20000/110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(398.561 472)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(404.728 472)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(408.228 472)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(394.895 485)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(378.895 498)"
                        >
                            18 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(354.895 511)"
                        >
                            СВ750
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(385.228 511)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(388.728 511)"
                        >
                            60
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(399.395 511)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(402.895 511)"
                        >
                            40
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(797.946 471)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(804.113 471)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(807.613 471)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(794.28 484)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(778.28 497)"
                        >
                            18 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(754.28 510)"
                        >
                            СВ750
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(784.613 510)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(788.113 510)"
                        >
                            75
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(798.78 510)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(802.28 510)"
                        >
                            40
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(945.216 475)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(951.382 475)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(954.882 475)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(941.549 488)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(925.549 501)"
                        >
                            18 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(901.549 514)"
                        >
                            СВ750
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(931.882 514)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(935.382 514)"
                        >
                            75
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(946.049 514)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(949.549 514)"
                        >
                            40
                        </text>
                        <a href="<?= $urlSwitch15 ?>">
                            <rect
                                id="c4681"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 274.5 438.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch17 ?>">
                            <rect
                                id="c6182"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 570.5 439.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch18 ?>">
                            <rect
                                id="c6332"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 675.5 438.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c6181"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 565.5 496.5)"
                            />
                            <path id="c618"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 565.5 521.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer6 ?>">
                            <path id="c6331"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 670.5 497.5)"
                            />
                            <path id="c633"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 670.5 522.5)"
                            />
                        </a>
                        <path
                            d="M438.354 465.067 438 395.508 441 395.492 441.354 465.052ZM435 395.523C434.987 393.038 436.992 391.013 439.477 391 441.962 390.987 443.987 392.992 444 395.477 444.013 397.962 442.008 399.987 439.523 400 437.038 400.013 435.013 398.008 435 395.523Z"
                            fill="#6600CC"
                        />
                        <a href="<?= $urlSwitch16 ?>">
                            <rect
                                id="c4831"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 429.5 438.5)"
                            />
                        </a>
                        <path
                            d="M236.428 520.8 329.537 520.8 329.537 533.6 236.428 533.6Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M236.428 533.6 329.537 533.6 329.537 546.4 236.428 546.4Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M236.428 546.4 329.537 546.4 329.537 559.2 236.428 559.2Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M236.428 559.2 329.537 559.2 329.537 572 236.428 572Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M236.428 572 329.537 572 329.537 584.8 236.428 584.8Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M236.428 584.8 329.537 584.8 329.537 597.6 236.428 597.6Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M235.762 533.6 330.203 533.6"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M235.762 546.4 330.203 546.4"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M235.762 559.2 330.203 559.2"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M235.762 572 330.203 572"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M235.762 584.8 330.203 584.8"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M236.428 520.133 236.428 598.267"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M329.537 520.133 329.537 598.267"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M235.762 520.8 330.203 520.8"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M235.762 597.6 330.203 597.6"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g468"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(240.208 531)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g469"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(240.208 544)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a468"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(240.208 556)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k468"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(240.208 569)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n468"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(240.208 582)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w468" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(240.208 595)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M390.041 521.659 483.15 521.659 483.15 534.459 390.041 534.459Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M390.041 534.459 483.15 534.459 483.15 547.259 390.041 547.259Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M390.041 547.259 483.15 547.259 483.15 560.059 390.041 560.059Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M390.041 560.059 483.15 560.059 483.15 572.859 390.041 572.859Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M390.041 572.859 483.15 572.859 483.15 585.659 390.041 585.659Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M390.041 585.659 483.15 585.659 483.15 598.459 390.041 598.459Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M389.375 534.459 483.816 534.459"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M389.375 547.259 483.816 547.259"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M389.375 560.059 483.816 560.059"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M389.375 572.859 483.816 572.859"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M389.375 585.659 483.816 585.659"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M390.041 520.993 390.041 599.126"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M483.15 520.993 483.15 599.126"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M389.375 521.659 483.816 521.659"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M389.375 598.459 483.816 598.459"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g483"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(393.821 532)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g484"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(393.821 544)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a483"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(393.821 557)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k483"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(393.821 570)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n483"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(393.821 583)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w483" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(393.821 596)"
                            >
                                Qвода
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(301.957 430)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(309.124 430)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(312.624 430)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(318.79 430)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(322.29 430)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(464.048 433)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(471.214 433)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(474.714 433)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(480.881 433)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(484.381 433)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(594.713 432)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(601.88 432)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(605.38 432)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(626.713 432)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(630.213 432)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(698.813 433)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(705.979 433)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(709.479 433)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(730.813 433)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(734.313 433)"
                        >
                            2
                        </text>
                        <g clip-path="url(#clip52)">
                            <g filter="url(#fx12)" transform="translate(510 316)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#6600CC"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch12 ?>">
                            <rect
                                id="c2223"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 519 342)"
                            />
                        </a>
                        <g clip-path="url(#clip53)">
                            <g filter="url(#fx13)" transform="translate(348 314)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#6600CC"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch11 ?>">
                            <rect
                                id="c1113"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 357 340)"
                            />
                        </a>
                        <path
                            d="M796.716 519.22 889.824 519.22 889.824 532.02 796.716 532.02Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.716 532.02 889.824 532.02 889.824 544.82 796.716 544.82Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.716 544.82 889.824 544.82 889.824 557.62 796.716 557.62Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.716 557.62 889.824 557.62 889.824 570.42 796.716 570.42Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.716 570.42 889.824 570.42 889.824 583.22 796.716 583.22Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.716 583.22 889.824 583.22 889.824 596.02 796.716 596.02Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.049 532.02 890.491 532.02"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.049 544.82 890.491 544.82"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.049 557.62 890.491 557.62"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.049 570.42 890.491 570.42"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.049 583.22 890.491 583.22"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.716 518.554 796.716 596.687"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M889.824 518.554 889.824 596.687"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.049 519.22 890.491 519.22"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.049 596.02 890.491 596.02"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g498"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.495 529)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g499"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.495 542)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a498"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.495 555)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k498"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.495 568)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n498"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.495 580)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w498" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.495 593)"
                            >
                                Qвода
                            </text>
                        </g>
                        <a href="<?= $urlSwitch19 ?>">
                            <rect
                                id="c4981"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 832.5 438.5)"
                            />
                        </a>
                        <path
                            d="M1.5-0.00375159 1.67417 69.6358-1.32582 69.6433-1.5 0.00375159ZM4.67416 69.6283C4.68038 72.1136 2.6707 74.1334 0.185428 74.1396-2.29985 74.1458-4.3196 72.1361-4.32581 69.6508-4.33203 67.1656-2.32236 65.1458 0.162918 65.1396 2.64819 65.1334 4.66794 67.1431 4.67416 69.6283Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 993.5 467.14)"
                        />
                        <a href="<?= $urlSwitch20 ?>">
                            <rect
                                id="c5131"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 983.5 439.5)"
                            />
                        </a>
                        <path
                            d="M944.896 520.73 1038 520.73 1038 533.53 944.896 533.53Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.896 533.53 1038 533.53 1038 546.33 944.896 546.33Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.896 546.33 1038 546.33 1038 559.13 944.896 559.13Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.896 559.13 1038 559.13 1038 571.93 944.896 571.93Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.896 571.93 1038 571.93 1038 584.73 944.896 584.73Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.896 584.73 1038 584.73 1038 597.53 944.896 597.53Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.229 533.53 1038.67 533.53"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.229 546.33 1038.67 546.33"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.229 559.13 1038.67 559.13"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.229 571.93 1038.67 571.93"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.229 584.73 1038.67 584.73"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.896 520.064 944.896 598.197"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1038 520.064 1038 598.197"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.229 520.73 1038.67 520.73"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.229 597.53 1038.67 597.53"
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
                                transform="translate(948.675 531)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g514"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(948.675 544)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a513"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(948.675 556)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k513"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(948.675 569)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n513"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(948.675 582)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w513" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(948.675 595)"
                            >
                                Qвода
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(858.017 431)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(865.184 431)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(868.684 431)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(874.851 431)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(878.351 431)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1006.33 433)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1013.49 433)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1016.99 433)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1023.16 433)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1026.66 433)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(628.223 480)"
                        >
                            ТСН№2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(630.056 493)"
                        >
                            10,5/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(629.39 506)"
                        >
                            560
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(648.056 506)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(633.056 519)"
                        >
                            ТМ560
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(525.042 478)"
                        >
                            ТСН№1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(526.875 491)"
                        >
                            10,5/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(526.208 504)"
                        >
                            560
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(544.875 504)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(529.875 517)"
                        >
                            ТМ560
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(545.292 337)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(552.458 337)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(555.958 337)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(566.625 337)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(570.125 337)"
                        >
                            Т5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(383.196 335)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(390.362 335)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(393.862 335)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(404.529 335)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(408.029 335)"
                        >
                            Т3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(831.99 335)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(839.157 335)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(842.657 335)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(853.324 335)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(856.824 335)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(974.249 335)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(981.416 335)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(984.916 335)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(995.583 335)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(999.083 335)"
                        >
                            Т2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(355.171 145)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(362.338 145)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(365.838 145)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(478.533 143)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(485.699 143)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(489.199 143)"
                        >
                            И
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(496.866 143)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(500.366 143)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(620.724 145)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(627.891 145)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(631.391 145)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(642.057 145)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(645.557 145)"
                        >
                            Т4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(761.48 143)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(768.647 143)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(772.147 143)"
                        >
                            01
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(887.838 143)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(895.004 143)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(898.504 143)"
                        >
                            8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(903.838 143)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(907.338 143)"
                        >
                            О
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1028.77 143)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1035.94 143)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1039.44 143)"
                        >
                            02
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(106.759 398)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(113.759 398)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(117.259 398)"
                        >
                            СШ 10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1026.35 389)"
                        >
                            МШВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1053.85 389)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1057.35 389)"
                        >
                            10
                        </text>
                        <g clip-path="url(#clip54)">
                            <g filter="url(#fx14)" transform="translate(1062 371)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#6600CC"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch21 ?>">
                            <rect
                                id="c1"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1071 397)"
                            />
                        </a>
                        <path
                            d="M1044 344.5 1044 375.395 1041 375.395 1041 344.5ZM1047 375.395C1047 377.88 1044.99 379.895 1042.5 379.895 1040.01 379.895 1038 377.88 1038 375.395 1038 372.909 1040.01 370.895 1042.5 370.895 1044.99 370.895 1047 372.909 1047 375.395Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M1045 397.5 1045 428.951 1042 428.951 1042 397.5ZM1039 397.5C1039 395.015 1041.01 393 1043.5 393 1045.99 393 1048 395.015 1048 397.5 1048 399.985 1045.99 402 1043.5 402 1041.01 402 1039 399.985 1039 397.5Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M0 0 34.9741 0.000104987"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1079.47 427.5)"
                        />
                        <path
                            d="M0 0 40.0209 0.000104987"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1081.52 345.5)"
                        />
                        <path
                            d="M1080.5 345.5 1080.5 378.408"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M6.00653 0.0759186C9.83339-0.511956 13.3805 2.33535 13.9291 6.43556 14.4778 10.5358 11.8203 14.3362 7.99349 14.9241 7.30963 15.0291 6.61502 15.0251 5.93226 14.9122"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 275.5 403.5)"
                        />
                        <path
                            d="M577.41 388.071 577.001 374.545 579.999 374.455 580.409 387.98ZM574.002 374.636C573.927 372.152 575.88 370.077 578.364 370.002 580.848 369.927 582.923 371.88 582.998 374.364 583.073 376.848 581.12 378.923 578.636 378.998 576.152 379.073 574.077 377.12 574.002 374.636Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M5.50812 0.0878445C9.05593-0.544235 12.3761 2.2619 12.9239 6.35553 13.4717 10.4492 11.0397 14.2801 7.49189 14.9122 6.80972 15.0337 6.11514 15.0291 5.43423 14.8985"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 572.5 403.5)"
                        />
                        <path
                            d="M1080.5 395.5 1080.5 428.408"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g
                            clip-path="url(#clip55)"
                            transform="matrix(0.000104987 0 0 0.000104987 1060 21)"
                        >
                            <g
                                clip-path="url(#clip57)"
                                transform="matrix(1 0 0 1.00168 -1 -0.015625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img56"
                                    transform="scale(7632.21 7632.21)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1082.17 17.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1180.5 71.1712)"
                        />
                        <path
                            d="M1178.55 83.0309 1170.86 74.6543 1171.35 74.2035 1179.04 82.58ZM1171.11 74.4289 1170.95 78.1967 1167.5 70.5001 1174.87 74.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1187.95 83.8892 1178.5 83.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.65 3.28451 1180.02 3.28451 1180.02 16.0845 1085.65 16.0845Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.65 2.61785 1085.65 16.7512"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1180.02 2.61785 1180.02 16.7512"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1084.99 3.28451 1180.69 3.28451"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1084.99 16.0845 1180.69 16.0845"
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
                                transform="translate(1089.43 13)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1099.93 13)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1081.5 17.5001 1100.69 17.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.14 70.3682 1275.8 70.3682 1275.8 83.1682 1188.14 83.1682Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.14 69.7015 1188.14 83.8349"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1275.8 69.7015 1275.8 83.8349"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1187.48 70.3682 1276.47 70.3682"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1187.48 83.1682 1276.47 83.1682"
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
                                transform="translate(1191.92 80)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1202.42 80)"
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
                            transform="matrix(1 0 0 -1 1078.5 25.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1187.99 43.5001)"
                        />
                        <path
                            d="M1188.5 43.5001 1207.69 43.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1192.34 30.1847 1265.54 30.1847 1265.54 42.9847 1192.34 42.9847Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1192.34 29.518 1192.34 43.6513"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1265.54 29.518 1265.54 43.6513"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1191.68 30.1847 1266.21 30.1847"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1191.68 42.9847 1266.21 42.9847"
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
                                transform="translate(1196.12 40)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1163.5 71.5001 1186.21 71.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1051.21 155.93 1112 155.93 1112 168.73 1051.21 168.73Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1051.21 155.264 1051.21 169.397"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1112 155.264 1112 169.397"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1050.55 155.93 1112.67 155.93"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1050.55 168.73 1112.67 168.73"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g536"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1054.99 166)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M239.442 154.889 300.228 154.889 300.228 167.689 239.442 167.689Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M239.442 154.222 239.442 168.356"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M300.228 154.222 300.228 168.356"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M238.776 154.889 300.894 154.889"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M238.776 167.689 300.894 167.689"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g581"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(243.222 165)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M164.703 357.752 225.488 357.752 225.488 370.552 164.703 370.552Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M164.703 357.085 164.703 371.218"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M225.488 357.085 225.488 371.218"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M164.036 357.752 226.155 357.752"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M164.036 370.552 226.155 370.552"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g476"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(168.482 368)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M165.058 398.345 225.843 398.345 225.843 411.145 165.058 411.145Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M165.058 397.678 165.058 411.811"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M225.843 397.678 225.843 411.811"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M164.391 398.345 226.51 398.345"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M164.391 411.145 226.51 411.145"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="w476"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(168.838 408)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M543.573 550.801 617.219 550.801 617.219 564.534 543.573 564.534Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M543.573 550.135 543.573 565.201"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M617.219 550.135 617.219 565.201"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M542.906 550.801 617.886 550.801"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M542.906 564.534 617.886 564.534"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g618"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(547.352 561)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M648.153 550.801 721.8 550.801 721.8 564.534 648.153 564.534Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M648.153 550.135 648.153 565.201"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M721.8 550.135 721.8 565.201"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M647.486 550.801 722.466 550.801"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M647.486 564.534 722.466 564.534"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g633"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(651.932 561)"
                            >
                                Р
                            </text>
                        </g>
                        <path id="c468"
                            d="M259.5 491C259.5 477.469 270.469 466.5 284 466.5 297.531 466.5 308.5 477.469 308.5 491 308.5 504.531 297.531 515.5 284 515.5 270.469 515.5 259.5 504.531 259.5 491Z"
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
                                        d="M282.689 484.933 283.622 484.933 284.944 485.167 286.033 485.633 286.889 486.178 287.9 487.189 288.522 488.122 288.989 489.367 289.144 490.067 289.144 491.933 288.833 493.1 288.211 494.344 287.589 495.122 287.044 495.667 285.956 496.367 284.711 496.833 283.933 496.989 282.378 496.989 281.133 496.678 280.278 496.289 279.422 495.744 278.567 494.967 278.022 494.189 277.478 493.1 277.167 491.856 277.089 490.922 277.244 489.678 277.556 488.667 278.178 487.5 279.033 486.567 279.656 486.022 280.978 485.322 282.144 485.011Z"
                                    />
                                    <path
                                        d="M283.156 471.089 284.011 471.089 285.489 471.322 286.967 471.789 288.211 472.411 289.144 473.033 289.922 473.733 290.856 474.667 291.711 475.911 292.333 477.156 292.8 478.556 293.033 479.722 293.111 480.344 293.111 481.822 292.878 483.3 292.489 484.622 291.867 485.944 291.089 487.033 290.933 487.033 290.311 485.944 289.378 484.856 288.522 484.078 287.433 483.378 286.267 482.833 284.944 482.444 283.156 482.211Z"
                                    />
                                    <path
                                        d="M270.4 486.878 270.789 486.956 272.967 488.2 274.522 489.133 274.6 489.289 274.444 490.922 274.6 492.556 274.989 494.033 275.533 495.2 275.533 495.433 273.356 496.678 271.489 497.767 267.444 500.1 266.122 500.878 265.889 500.878 265.189 499.4 264.8 498.078 264.644 497.144 264.567 495.822 264.722 494.344 264.956 493.256 265.5 491.778 266.044 490.767 266.744 489.756 267.678 488.744 268.533 487.967 269.933 487.111Z"
                                    />
                                    <path
                                        d="M290.7 495.433 291.089 495.511 292.956 496.6 299.022 500.1 300.344 500.878 300.189 501.267 299.644 502.044 298.944 502.9 298.4 503.444 297.233 504.3 295.989 505 294.511 505.544 293.344 505.778 292.878 505.856 290.544 505.856 289.378 505.622 288.133 505.233 286.811 504.611 285.878 503.989 285.878 499.322 286.578 499.011 287.9 498.311 288.833 497.611 289.922 496.522Z"
                                    />
                                    <path
                                        d="M273.667 476.067 275.378 476.067 276.856 476.3 278.489 476.844 279.811 477.544 280.433 477.933 280.433 482.678 279.033 483.3 277.944 484 277.089 484.7 276.544 485.244 275.611 486.567 275.144 486.411 273.822 485.633 267.756 482.133 266.044 481.122 265.967 480.967 266.511 480.111 267.367 479.1 267.989 478.478 269.156 477.622 270.244 477 271.722 476.456 272.578 476.222Z"
                                    />
                                    <path
                                        d="M277.167 497.533 277.478 497.611 278.644 498.467 279.967 499.089 281.211 499.478 282.144 499.633 283.078 499.711 283.156 499.789 283.156 510.833 281.989 510.833 280.433 510.522 279.111 510.056 277.711 509.278 276.7 508.5 275.922 507.8 275.144 506.867 274.367 505.622 273.744 504.222 273.356 502.744 273.2 501.344 273.2 500.489 273.278 499.789 275.222 498.7 276.544 497.922Z"
                                    />
                                    <path
                                        d="M300.267 481.044 300.422 481.044 300.967 482.133 301.433 483.533 301.667 484.778 301.744 486.333 301.589 487.733 301.278 489.056 300.656 490.533 300.111 491.467 299.489 492.322 298.633 493.256 297.467 494.189 296.456 494.811 295.756 495.122 293.811 494.033 291.944 492.944 291.711 492.789 291.867 491.389 291.867 490.222 292.567 489.522 293.578 488.2 294.278 487.033 294.978 485.556 295.522 483.844 296.222 483.378 298.167 482.289 300.033 481.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c483"
                            d="M414.5 489C414.5 475.469 425.469 464.5 439 464.5 452.531 464.5 463.5 475.469 463.5 489 463.5 502.531 452.531 513.5 439 513.5 425.469 513.5 414.5 502.531 414.5 489Z"
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
                                        d="M438.689 482.933 439.622 482.933 440.944 483.167 442.033 483.633 442.889 484.178 443.9 485.189 444.522 486.122 444.989 487.367 445.144 488.067 445.144 489.933 444.833 491.1 444.211 492.344 443.589 493.122 443.044 493.667 441.956 494.367 440.711 494.833 439.933 494.989 438.378 494.989 437.133 494.678 436.278 494.289 435.422 493.744 434.567 492.967 434.022 492.189 433.478 491.1 433.167 489.856 433.089 488.922 433.244 487.678 433.556 486.667 434.178 485.5 435.033 484.567 435.656 484.022 436.978 483.322 438.144 483.011Z"
                                    />
                                    <path
                                        d="M439.156 469.089 440.011 469.089 441.489 469.322 442.967 469.789 444.211 470.411 445.144 471.033 445.922 471.733 446.856 472.667 447.711 473.911 448.333 475.156 448.8 476.556 449.033 477.722 449.111 478.344 449.111 479.822 448.878 481.3 448.489 482.622 447.867 483.944 447.089 485.033 446.933 485.033 446.311 483.944 445.378 482.856 444.522 482.078 443.433 481.378 442.267 480.833 440.944 480.444 439.156 480.211Z"
                                    />
                                    <path
                                        d="M426.4 484.878 426.789 484.956 428.967 486.2 430.522 487.133 430.6 487.289 430.444 488.922 430.6 490.556 430.989 492.033 431.533 493.2 431.533 493.433 429.356 494.678 427.489 495.767 423.444 498.1 422.122 498.878 421.889 498.878 421.189 497.4 420.8 496.078 420.644 495.144 420.567 493.822 420.722 492.344 420.956 491.256 421.5 489.778 422.044 488.767 422.744 487.756 423.678 486.744 424.533 485.967 425.933 485.111Z"
                                    />
                                    <path
                                        d="M446.7 493.433 447.089 493.511 448.956 494.6 455.022 498.1 456.344 498.878 456.189 499.267 455.644 500.044 454.944 500.9 454.4 501.444 453.233 502.3 451.989 503 450.511 503.544 449.344 503.778 448.878 503.856 446.544 503.856 445.378 503.622 444.133 503.233 442.811 502.611 441.878 501.989 441.878 497.322 442.578 497.011 443.9 496.311 444.833 495.611 445.922 494.522Z"
                                    />
                                    <path
                                        d="M429.667 474.067 431.378 474.067 432.856 474.3 434.489 474.844 435.811 475.544 436.433 475.933 436.433 480.678 435.033 481.3 433.944 482 433.089 482.7 432.544 483.244 431.611 484.567 431.144 484.411 429.822 483.633 423.756 480.133 422.044 479.122 421.967 478.967 422.511 478.111 423.367 477.1 423.989 476.478 425.156 475.622 426.244 475 427.722 474.456 428.578 474.222Z"
                                    />
                                    <path
                                        d="M433.167 495.533 433.478 495.611 434.644 496.467 435.967 497.089 437.211 497.478 438.144 497.633 439.078 497.711 439.156 497.789 439.156 508.833 437.989 508.833 436.433 508.522 435.111 508.056 433.711 507.278 432.7 506.5 431.922 505.8 431.144 504.867 430.367 503.622 429.744 502.222 429.356 500.744 429.2 499.344 429.2 498.489 429.278 497.789 431.222 496.7 432.544 495.922Z"
                                    />
                                    <path
                                        d="M456.267 479.044 456.422 479.044 456.967 480.133 457.433 481.533 457.667 482.778 457.744 484.333 457.589 485.733 457.278 487.056 456.656 488.533 456.111 489.467 455.489 490.322 454.633 491.256 453.467 492.189 452.456 492.811 451.756 493.122 449.811 492.033 447.944 490.944 447.711 490.789 447.867 489.389 447.867 488.222 448.567 487.522 449.578 486.2 450.278 485.033 450.978 483.556 451.522 481.844 452.222 481.378 454.167 480.289 456.033 479.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c498"
                            d="M818.5 491C818.5 477.469 829.469 466.5 843 466.5 856.531 466.5 867.5 477.469 867.5 491 867.5 504.531 856.531 515.5 843 515.5 829.469 515.5 818.5 504.531 818.5 491Z"
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
                                        d="M841.689 484.933 842.622 484.933 843.944 485.167 845.033 485.633 845.889 486.178 846.9 487.189 847.522 488.122 847.989 489.367 848.144 490.067 848.144 491.933 847.833 493.1 847.211 494.344 846.589 495.122 846.044 495.667 844.956 496.367 843.711 496.833 842.933 496.989 841.378 496.989 840.133 496.678 839.278 496.289 838.422 495.744 837.567 494.967 837.022 494.189 836.478 493.1 836.167 491.856 836.089 490.922 836.244 489.678 836.556 488.667 837.178 487.5 838.033 486.567 838.656 486.022 839.978 485.322 841.144 485.011Z"
                                    />
                                    <path
                                        d="M842.156 471.089 843.011 471.089 844.489 471.322 845.967 471.789 847.211 472.411 848.144 473.033 848.922 473.733 849.856 474.667 850.711 475.911 851.333 477.156 851.8 478.556 852.033 479.722 852.111 480.344 852.111 481.822 851.878 483.3 851.489 484.622 850.867 485.944 850.089 487.033 849.933 487.033 849.311 485.944 848.378 484.856 847.522 484.078 846.433 483.378 845.267 482.833 843.944 482.444 842.156 482.211Z"
                                    />
                                    <path
                                        d="M829.4 486.878 829.789 486.956 831.967 488.2 833.522 489.133 833.6 489.289 833.444 490.922 833.6 492.556 833.989 494.033 834.533 495.2 834.533 495.433 832.356 496.678 830.489 497.767 826.444 500.1 825.122 500.878 824.889 500.878 824.189 499.4 823.8 498.078 823.644 497.144 823.567 495.822 823.722 494.344 823.956 493.256 824.5 491.778 825.044 490.767 825.744 489.756 826.678 488.744 827.533 487.967 828.933 487.111Z"
                                    />
                                    <path
                                        d="M849.7 495.433 850.089 495.511 851.956 496.6 858.022 500.1 859.344 500.878 859.189 501.267 858.644 502.044 857.944 502.9 857.4 503.444 856.233 504.3 854.989 505 853.511 505.544 852.344 505.778 851.878 505.856 849.544 505.856 848.378 505.622 847.133 505.233 845.811 504.611 844.878 503.989 844.878 499.322 845.578 499.011 846.9 498.311 847.833 497.611 848.922 496.522Z"
                                    />
                                    <path
                                        d="M832.667 476.067 834.378 476.067 835.856 476.3 837.489 476.844 838.811 477.544 839.433 477.933 839.433 482.678 838.033 483.3 836.944 484 836.089 484.7 835.544 485.244 834.611 486.567 834.144 486.411 832.822 485.633 826.756 482.133 825.044 481.122 824.967 480.967 825.511 480.111 826.367 479.1 826.989 478.478 828.156 477.622 829.244 477 830.722 476.456 831.578 476.222Z"
                                    />
                                    <path
                                        d="M836.167 497.533 836.478 497.611 837.644 498.467 838.967 499.089 840.211 499.478 841.144 499.633 842.078 499.711 842.156 499.789 842.156 510.833 840.989 510.833 839.433 510.522 838.111 510.056 836.711 509.278 835.7 508.5 834.922 507.8 834.144 506.867 833.367 505.622 832.744 504.222 832.356 502.744 832.2 501.344 832.2 500.489 832.278 499.789 834.222 498.7 835.544 497.922Z"
                                    />
                                    <path
                                        d="M859.267 481.044 859.422 481.044 859.967 482.133 860.433 483.533 860.667 484.778 860.744 486.333 860.589 487.733 860.278 489.056 859.656 490.533 859.111 491.467 858.489 492.322 857.633 493.256 856.467 494.189 855.456 494.811 854.756 495.122 852.811 494.033 850.944 492.944 850.711 492.789 850.867 491.389 850.867 490.222 851.567 489.522 852.578 488.2 853.278 487.033 853.978 485.556 854.522 483.844 855.222 483.378 857.167 482.289 859.033 481.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c513"
                            d="M969.5 491C969.5 477.469 980.469 466.5 994 466.5 1007.53 466.5 1018.5 477.469 1018.5 491 1018.5 504.531 1007.53 515.5 994 515.5 980.469 515.5 969.5 504.531 969.5 491Z"
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
                                        d="M992.689 484.933 993.622 484.933 994.944 485.167 996.033 485.633 996.889 486.178 997.9 487.189 998.522 488.122 998.989 489.367 999.144 490.067 999.144 491.933 998.833 493.1 998.211 494.344 997.589 495.122 997.044 495.667 995.956 496.367 994.711 496.833 993.933 496.989 992.378 496.989 991.133 496.678 990.278 496.289 989.422 495.744 988.567 494.967 988.022 494.189 987.478 493.1 987.167 491.856 987.089 490.922 987.244 489.678 987.556 488.667 988.178 487.5 989.033 486.567 989.656 486.022 990.978 485.322 992.144 485.011Z"
                                    />
                                    <path
                                        d="M993.156 471.089 994.011 471.089 995.489 471.322 996.967 471.789 998.211 472.411 999.144 473.033 999.922 473.733 1000.86 474.667 1001.71 475.911 1002.33 477.156 1002.8 478.556 1003.03 479.722 1003.11 480.344 1003.11 481.822 1002.88 483.3 1002.49 484.622 1001.87 485.944 1001.09 487.033 1000.93 487.033 1000.31 485.944 999.378 484.856 998.522 484.078 997.433 483.378 996.267 482.833 994.944 482.444 993.156 482.211Z"
                                    />
                                    <path
                                        d="M980.4 486.878 980.789 486.956 982.967 488.2 984.522 489.133 984.6 489.289 984.444 490.922 984.6 492.556 984.989 494.033 985.533 495.2 985.533 495.433 983.356 496.678 981.489 497.767 977.444 500.1 976.122 500.878 975.889 500.878 975.189 499.4 974.8 498.078 974.644 497.144 974.567 495.822 974.722 494.344 974.956 493.256 975.5 491.778 976.044 490.767 976.744 489.756 977.678 488.744 978.533 487.967 979.933 487.111Z"
                                    />
                                    <path
                                        d="M1000.7 495.433 1001.09 495.511 1002.96 496.6 1009.02 500.1 1010.34 500.878 1010.19 501.267 1009.64 502.044 1008.94 502.9 1008.4 503.444 1007.23 504.3 1005.99 505 1004.51 505.544 1003.34 505.778 1002.88 505.856 1000.54 505.856 999.378 505.622 998.133 505.233 996.811 504.611 995.878 503.989 995.878 499.322 996.578 499.011 997.9 498.311 998.833 497.611 999.922 496.522Z"
                                    />
                                    <path
                                        d="M983.667 476.067 985.378 476.067 986.856 476.3 988.489 476.844 989.811 477.544 990.433 477.933 990.433 482.678 989.033 483.3 987.944 484 987.089 484.7 986.544 485.244 985.611 486.567 985.144 486.411 983.822 485.633 977.756 482.133 976.044 481.122 975.967 480.967 976.511 480.111 977.367 479.1 977.989 478.478 979.156 477.622 980.244 477 981.722 476.456 982.578 476.222Z"
                                    />
                                    <path
                                        d="M987.167 497.533 987.478 497.611 988.644 498.467 989.967 499.089 991.211 499.478 992.144 499.633 993.078 499.711 993.156 499.789 993.156 510.833 991.989 510.833 990.433 510.522 989.111 510.056 987.711 509.278 986.7 508.5 985.922 507.8 985.144 506.867 984.367 505.622 983.744 504.222 983.356 502.744 983.2 501.344 983.2 500.489 983.278 499.789 985.222 498.7 986.544 497.922Z"
                                    />
                                    <path
                                        d="M1010.27 481.044 1010.42 481.044 1010.97 482.133 1011.43 483.533 1011.67 484.778 1011.74 486.333 1011.59 487.733 1011.28 489.056 1010.66 490.533 1010.11 491.467 1009.49 492.322 1008.63 493.256 1007.47 494.189 1006.46 494.811 1005.76 495.122 1003.81 494.033 1001.94 492.944 1001.71 492.789 1001.87 491.389 1001.87 490.222 1002.57 489.522 1003.58 488.2 1004.28 487.033 1004.98 485.556 1005.52 483.844 1006.22 483.378 1008.17 482.289 1010.03 481.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M12.5001 561.5C12.5001 556.529 16.7533 552.5 22.0001 552.5 27.2468 552.5 31.5001 556.529 31.5001 561.5 31.5001 566.471 27.2468 570.5 22.0001 570.5 16.7533 570.5 12.5001 566.471 12.5001 561.5Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M12.5001 583C12.5001 577.753 16.7533 573.5 22.0001 573.5 27.2468 573.5 31.5001 577.753 31.5001 583 31.5001 588.247 27.2468 592.5 22.0001 592.5 16.7533 592.5 12.5001 588.247 12.5001 583Z"
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
                            transform="translate(37.4929 564)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(37.4102 586)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M12 539.5C12 534.253 16.2533 530 21.5 530 26.7467 530 31 534.253 31 539.5 31 544.747 26.7467 549 21.5 549 16.2533 549 12 544.747 12 539.5Z"
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
                            transform="translate(37.4102 542)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(37.6751 518)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(37.4103 495)"
                        >
                            прием
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 17 484)">
                            <g clip-path="url(#clip59)" transform="scale(1.05 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img58"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 17 506)">
                            <g clip-path="url(#clip61)" transform="scale(1.05 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img60"
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
        fetch('/chirchiq/server8', { signal: controller.signal })
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

                let c1 = 0; let c2 = 0; let c3 = 0; let c4 = 0; let c5 = 0; let c6 = 0; let c7 = 0; let c8 = 0; let c9 = 0;
                data.forEach(item => {
                    if (item.id === 573) {
                        const plus = document.getElementById("g573Plus");
                        const minus = document.getElementById("g573Minus");

                        if (parseFloat(item.value) > 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(573);
                            c1 = 1;
                        } else {
                            falseAnimation(573);
                            c1 = 0;
                        }

                    } else if (item.id === 588) {
                        const plus = document.getElementById("g588Plus");
                        const minus = document.getElementById("g588Minus");

                        if (parseFloat(item.value) > 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(588);
                            c2 = 1;
                        } else {
                            falseAnimation(588);
                            c2 = 0;
                        }
                    } else if (item.id === 603) {
                        const plus = document.getElementById("g603Plus");
                        const minus = document.getElementById("g603Minus");

                        if (parseFloat(item.value) > 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(603);
                            c3 = 1;
                        } else {
                            falseAnimation(603);
                            c3 = 0;
                        }
                    } else if (item.id === 543) {
                        const plus = document.getElementById("g543Plus");
                        const minus = document.getElementById("g543Minus");

                        if (parseFloat(item.value) > 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(543);
                            c4 = 1; c5 = 1; c6 = 1;
                        } else {
                            falseAnimation(543);
                            c4 = 0; c5 = 0; c6 = 0;
                        }

                    } else if (item.id === 558) {
                        const plus = document.getElementById("g558Plus");
                        const minus = document.getElementById("g558Minus");

                        if (parseFloat(item.value) > 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(558);
                            c4 = 1; c5 = 1; c6 = 1;
                        } else {
                            falseAnimation(558);
                            c4 = 0; c5 = 0; c6 = 0;
                        }
                    } else if (item.id === 528) {
                        const plus = document.getElementById("g528Plus");
                        const minus = document.getElementById("g528Minus");

                        if (parseFloat(item.value) > 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(528);
                            c4 = 1; c5 = 1; c6 = 1;
                        } else {
                            falseAnimation(528);
                            c4 = 0; c5 = 0; c6 = 0;
                        }
                    } else if(item.id === 581) {
                        const value = document.getElementById("g581");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 536) {
                        const value = document.getElementById("g536");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }else if(item.id === 476) {
                        const value = document.getElementById("g476");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                        const w = document.getElementById("w476");
                        w.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }
                    else if(item.id === 618) {
                        const value = document.getElementById("g618");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(618);
                            trueAnimation(6181);
                            trueAnimation(6182);
                        } else {
                            falseAnimation(618);
                            falseAnimation(6181);
                            falseAnimation(6182);
                        }
                    } else if(item.id === 633) {
                        const value = document.getElementById("g633");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (-1 * item.value !== 0) {
                            trueAnimation(633);
                            trueAnimation(6331);
                            trueAnimation(6332);
                            c7 = 1;
                        } else {
                            falseAnimation(633);
                            falseAnimation(6331);
                            falseAnimation(6332);
                            c7 = 0;
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 468) {
                        const value = document.getElementById("g468");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a468");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 18 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(468);
                            trueAnimation(4681);
                        } else {
                            errorAnimation(468);
                            errorAnimation(4681);
                        }
                    } else if(item.id === 469) {
                        const value = document.getElementById("g469");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 470) {
                        const value = document.getElementById("k468");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 471) {
                        const value = document.getElementById("n468");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 472) {
                        const value = document.getElementById("w468");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 483) {
                        const value = document.getElementById("g483");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a483");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 18 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(483);
                            trueAnimation(4831);
                            c8 = 1;
                        } else {
                            falseAnimation(483);
                            falseAnimation(4831);
                            c8 = 0;
                        }
                    } else if(item.id === 484) {
                        const value = document.getElementById("g484");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 485) {
                        const value = document.getElementById("k483");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 486) {
                        const value = document.getElementById("n483");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 487) {
                        const value = document.getElementById("w483");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 498) {
                        const value = document.getElementById("g498");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a498");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 18 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(498);
                            trueAnimation(4981);
                        } else {
                            falseAnimation(498);
                            falseAnimation(4981);
                        }
                    } else if(item.id === 499) {
                        const value = document.getElementById("g499");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 500) {
                        const value = document.getElementById("k498");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 501) {
                        const value = document.getElementById("n498");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 502) {
                        const value = document.getElementById("w498");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-4
                    else if(item.id === 513) {
                        const value = document.getElementById("g513");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a513");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 18 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(513);
                            trueAnimation(5131);
                            c9 = 1;
                        } else {
                            falseAnimation(513);
                            falseAnimation(5131);
                            c9 = 0;
                        }
                    } else if(item.id === 514) {
                        const value = document.getElementById("g514");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 515) {
                        const value = document.getElementById("k513");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 516) {
                        const value = document.getElementById("n513");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 517) {
                        const value = document.getElementById("w513");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }



                    else if(item.id === 1) {
                        const value = document.getElementById("active");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') .replace("-", "")+ " МВт";
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
                    if (c1 > 0 || c2 > 0 || c3 > 0) {
                        trueAnimation(111);
                        trueAnimation(1111);
                        trueAnimation(1112);
                        trueAnimation(1113);
                        trueAnimation(222);
                        trueAnimation(2221);
                        trueAnimation(2222);
                        trueAnimation(2223);
                    } else {
                        falseAnimation(111);
                        falseAnimation(1111);
                        falseAnimation(1112);
                        falseAnimation(1113);
                        falseAnimation(222);
                        falseAnimation(2221);
                        falseAnimation(2222);
                        falseAnimation(2223);
                    }
                    if (c4 > 0 || c5 > 0 || c6 > 0) {
                        trueAnimation(333);
                        trueAnimation(3331);
                        trueAnimation(3332);
                        trueAnimation(3333);
                        trueAnimation(444);
                        trueAnimation(4441);
                        trueAnimation(4442);
                        trueAnimation(4443);
                    } else {
                        falseAnimation(333);
                        falseAnimation(3331);
                        falseAnimation(3332);
                        falseAnimation(3333);
                        falseAnimation(444);
                        falseAnimation(4441);
                        falseAnimation(4442);
                        falseAnimation(4443);
                    }
                    if (c7 > 0 || c8 > 0 || c9 > 0) {
                        trueAnimation(1);
                    } else {
                        falseAnimation(1);
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

    function errorAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "#FFFF00";
    }

    function trueAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "red";
    }


</script>