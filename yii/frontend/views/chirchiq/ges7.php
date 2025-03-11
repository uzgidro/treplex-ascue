<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Чирчиқ ГЭС (ГЭС-7)';
$energy = new Energy();
$dashboard = new Dashboard();

$id = 29;
$power = new Day();

$power->getHour([$id]);
//$power->getDay([$id]);

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);
$urlAggregate4 = $energy->getInformation($id, 4);

$urlTransformer1 = $energy->getTransformer($id, 69);
$urlTransformer2 = $energy->getTransformer($id, 70);
$urlTransformer3 = $energy->getTransformer($id, 71);
$urlTransformer4 = $energy->getTransformer($id, 72);
$urlTransformer5 = $energy->getTransformer($id, 73);
$urlTransformer6 = $energy->getTransformer($id, 74);
$urlTransformer7 = $energy->getTransformer($id, 81);

$urlSwitch1 = $energy->getSwitch($id, 141);
$urlSwitch2 = $energy->getSwitch($id, 142);
$urlSwitch3 = $energy->getSwitch($id, 143);
$urlSwitch4 = $energy->getSwitch($id, 144);
$urlSwitch5 = $energy->getSwitch($id, 145);
$urlSwitch6 = $energy->getSwitch($id, 146);
$urlSwitch7 = $energy->getSwitch($id, 147);
$urlSwitch8 = $energy->getSwitch($id, 148);
$urlSwitch9 = $energy->getSwitch($id, 149);
$urlSwitch10 = $energy->getSwitch($id, 150);
$urlSwitch11 = $energy->getSwitch($id, 151);
$urlSwitch12 = $energy->getSwitch($id, 152);
$urlSwitch13 = $energy->getSwitch($id, 153);
$urlSwitch14 = $energy->getSwitch($id, 154);
$urlSwitch15 = $energy->getSwitch($id, 155);
$urlSwitch16 = $energy->getSwitch($id, 156);
$urlSwitch17 = $energy->getSwitch($id, 178);

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
                        <filter
                            id="fx15"
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
                            id="fx16"
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
                        <clipPath id="clip17">
                            <path
                                d="M235 154 235 173 254 173 254 154ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip18">
                            <path
                                d="M1033 209 1033 228 1052 228 1052 209ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip19">
                            <path
                                d="M172 288 172 307 190 307 190 288ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip20">
                            <path
                                d="M627 355 627 374 646 374 646 355ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip21">
                            <path
                                d="M494 353 494 372 513 372 513 353ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip22">
                            <path
                                d="M117 155 117 174 136 174 136 155ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip23">
                            <path
                                d="M354 153 354 172 373 172 373 153ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip24">
                            <path
                                d="M494 154 494 173 513 173 513 154ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip25">
                            <path
                                d="M663 154 663 173 682 173 682 154ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip26">
                            <path
                                d="M771 154 771 173 790 173 790 154ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip27">
                            <path
                                d="M870 154 870 173 889 173 889 154ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip28">
                            <path
                                d="M307 288 307 307 326 307 326 288ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip29">
                            <path
                                d="M750 288 750 307 769 307 769 288ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip30">
                            <path
                                d="M871 288 871 307 890 307 890 288ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip31">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="18"
                            height="41"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAALBAMAAABFS1qmAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAYUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAKh5qUYAAAAIdFJOUwDl/zzxTfP3PLqfygAAAAlwSFlzAAAOwwAADsMBx2+oZAAAABxJREFUGNNjYFRkwolNVJgYgpSYGNjUmRgYFJgAKRcCHpfvay0AAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img32"
                        ></image>
                        <clipPath id="clip33">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip34">
                            <rect x="-2.32831e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="18"
                            height="42"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAMBAMAAABYTmoeAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAASUExURQAAACPbFSPbFSTbFCPcFSPbFTG2KJYAAAAGdFJOUwD/500k5bagUF4AAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAdSURBVBjTY2AQYGRgEmJkMBRkZBAEYlZRPFiUEQAjKAFlq49k+QAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img35"
                        ></image>
                        <clipPath id="clip36">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip37">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip38">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip39">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip40">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip41">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip42">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip43">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip44">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip45">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip46">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip47">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip48">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip49">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip50">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip51">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip52">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip53">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip54">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip55">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip56">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip57">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip58">
                            <rect x="0" y="0" width="47625" height="108479" />
                        </clipPath>
                        <clipPath id="clip59">
                            <rect x="9.31323e-10" y="1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip60">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip61">
                            <path
                                d="M1162 212 1162 231 1181 231 1181 212ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip62">
                            <path
                                d="M393 354 393 373 412 373 412 354ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip63">
                            <path
                                d="M560 354 560 373 579 373 579 354ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip64">
                            <rect x="0" y="0" width="876300" height="876300" />
                        </clipPath>
                        <image
                            width="128"
                            height="128"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img65"
                        ></image>
                        <clipPath id="clip66">
                            <rect x="-1" y="0" width="876300" height="876300" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABoVSURBVHhe7Z0HVFRplsft3Qk7O2fP5t05e2bPnDN79uzsTuiZUVu7jT2Gts0tGMbGhKnFbqdRW1sRyaGAAiVHyVFyzjlTgGAWEKpMqKhksLvlv9/96pWUxUNLBEW67uF/3qtX7328V+9X994vvZr2Om3V8lXLjh76ynf+/Pm/pdf79u51igwLvxURFn5bXeHh4bePHj16CcA7/ECd6WwsZmlpGXLjxg289957a2Qy2Q9trKyC+3p6MUK9vQgJCelkh+iA09nYLSgoqI2Ae3/2bGlEeDgszM3Ry+ASkw44nb2Sbdq06T8yMzOHCLiZM2Y4P3jwAFFRUaKwkRhwj4RDdTYVTdba/asqRZ9tTeujDy9cuPCjaSx/ohzq3J2hn55r7f1DvaJvrUzeP69O0Tez4VrHzxtukPp+3igf+GXDja7Zda29H9fJBxZfvjz0d0KRrAi80yjHPzYouufv3P35gfb2O7hJwM2c6dzR0YGoSAKuT9CzwAUHB+uAm4omU/QerpX33am+0Q+Zoh81wlKm6BOkfE3v8/eevq9UjWKAbScNKqXcfpfpWo2ir5de1ygG4e4fhp7enmeB03m475/J2gaDlcBMnGQMyuDwaAbSSOB6enpGwKYDbgobgyGYPJAYKOOlsmsdiI6J4yDdunULs2bNStF5uGnTtm3b9jcrPv74L2z1+1M5YmFzAoFTht2wtFJcvnyZgaTM1XJzc/Ei4L4POdy6det+YWlugWhp9E+ETVPfJho4yvHs3c4gIy0VGekZXKdcTr0QuOjo6DvCKU5Z+/DDD6cHnQnEkSNHfi5smvo2scAxEXCnfJFXUIz8wmLkMXl6euPBgw4EBQYhNycHnZ2dI4CTyWRtycnJf0xJSXk3PT39d+qi7RKJZMbKlSv/RbiMt9Lmzp27uLiwCBs++eRdYdPUt9fh4WpZWB1WHyLSSxCXkAwrG3skJafB3d0dxcXF6OrqfgpcV1cX94Kj6fbt21i+fLmRcBlvpR0+fHhrW2sbGHgLhE1T3ybcw40iAo+AzKlrha2LF1JT0+Hh7oHKyspRa67qon2YhzMWLuOttNWrV++nL9b06dPXCpumvr1e4FT/h9r0BnibHl8y+JKKGyF180N6Rga8PDxRX1cnCppKBNyaNWsOC5fxVtpWAwOLbx4/xoIFC3YLm6a+vSkPJyYCMDytBB5+QaxykQkfH29cunhRFDiS4datx4XLeCvtkLHxqaEnT7B548a3+ovzUjaZgONi50K5nld4CkIjziI1JRUBAQG4du3aCOB2bN/hun79+r8WLuWtMysrq8ChoSF8eeCArbBp6tukA05d8j44eochPikdiYkJCAkOwfXr1xlsfejp64Xr6dM4fuy4bKOe3rzJAB4LjT97//33f6GtLMwtsqgh/KuDhyPpNbuGHwlFTV2baOBkItu0ER2nyvGq2jphLfVGdm4Bzp49i8jICNCok9iYGD52rqW5GSYmJo36+voLzMzMfiBc2ms3e3v7q6WlpSgqKtJOhcPL5ORkzJkzZ6FQ1NS1iQKOehiq5dQsInT0j9hHCZNWovNTDKCs6T5O2rugvLIaYaEhcJQ48OYTVYhta2vDiRMnLn766aeL9uzZ80PhEl+bRUdEXfXy9uK1bU8tZG9rh6+//hrm5uZIT0/XATd2EWQDOHDkJE6Y28LczhmS075wD4iCf1QyQpPyEJ1RjtxGBQdJvAw1CfvI2HlWs/XC8zdw0lqKy5euwN3NDffu3n0KHYm83wkTkyaDTZuWvM4wRcDFMK87BKVRfvY8u3nzJm8GunrlKjLS0rFAB9zYVXyhHbt274GDvYTnWn4+vggPDUVyYiLycnNRVlYGT29fnPaPZADdFC1jdCmBdvQKxblzjfByd8f1lpZnoCNR4/DJkyfbDAwMljH7sXDJE2bRUQy4aAYcA+38+fOwsbEB9ZWOppOmprwydPUqA455OB1wY1Q1U2BCAQtx8hEQULLfQ+s9vchITeMQevn4wyMoBsWX7/IQLFamqNh5ByfmIyUtEzFR0aiqqBzx/0h3mQe0sLC4sW3bthU0QkO49HE3Au4sA4666hISEp7xcLQuJjKdh3tVMe/j7BPKoHpxjwGBFxQUiLSUVLh7+sA7PBElV+9x8FSVhuep+sYgcmTN8PAOQGlpGc7GnkV393AXmbru379P+VL71q1bV08EeCoPl5WVxXNLbU3n4V5VDBb/oAjRmz6auru64eJyCiXFxXBz92a5XirKrj0QL19Tiseouv4IlhJXVmNtgdtpV97fKvZ/SDSfwsrS8uH27dvXzZ49e9yGBqkDR9BrazoP96pq60ZERIzozX6RyAvZ2tmiob4e0lNuCIrLQXnzQx6mXxxu+2Ht7IPmpmacOuUCBas8iP0PlR49fASJnX0X83gbVq5c+bfCRzJmGzNwOg/3akosbkQlz6dGTo7RVgq5gifd19jNkDieQkhSAcpbukT/37CUlQmP8BQUFpcilOWHdS/okyV1sZzL0dGxh4XZT18FvFfxcNkZmdior2/y+b59KyZEu/etMGQ5rLGx8Zsd7DmewCnb2vrhFhjHQuRw+9hYRY26F89fgKNEwgE0t3FAVHoZKq8Pgzdaw3Jq6UX4B4agtLgICYkJWo1A4WHdyXnA0NBw+5IlS34qfERa26t4uPq6ety6eZPXrKn3YdzFyq6rrcWmTZt+LZzum7Hx9nDVrCwPf1X+pkWlQUsVFRXCw8Mdt27fwgkLO8TmVKOqtUf0HLjYeVRc64C15DTaWlvh5uaGR48eiZatKYLF1dX1G4PNm/e8DHgq4Kj3gNoCVbXQF5kqhystLsG333zD9O046xvk5+cjPy9/agFH4YxqloGhL1dheBnFxsYiMjIS7e13YWJqjcyaZtFzUUkm74eZ3Wn2Db8FJ0cn3LlzR7RcUTGv6Ovl/e2WTZ9+oQ14KuAING9vbzQ2NuLhw4fPgEfr5G2o3fD+vXv8tSqHq6ioEPYaf6MBrgTdlPNwRZfuIjklXfwGjqPI29Hw9KysHHiGJ6Ja3it6Pkr1w8U3AnX1DQjwD8ClCxdYiBUvdzT5+fo+2bJ5y6HngacOHNmTJ0+QkZHBw6TKvvvuO/DeiCdDiImOxuPHj596uMoJBI68bl5e3tQDzv9sDuQiDb4TIWrrsrW1Zd6iGccsHVHe9JCH0pHnpaxMnM2uQtTZeP5NT01N1Sqv01RwcPDQ5k2bjomBpwkcW0FfXy8SExL5NlJpSSkLtwp6EyUMAgrzr8PDTVngXJknoWRf7GZNhOh/RUdGoaysBM6n3ZFRcZmdx2jNJ49RcvEOJE6ukMvlPK9T7/zXRqpri4qMHNLX17dWB08TOFoGBbji0AFDBPpIccbXma1vh5+nMwYfD6CY5aUcOJ2HG6v64RccyW7I+FUWtFVTUxNcGUAV5RVw8otkIbaHebXH/JzIu6mfp4yF3+OWEt4AbGdn99xG4hcpPj4eenp6TtScEiUCXKj7WnRe242+pl3oa97D1vcgNWgduh49HAZO5+HGpurWboSGRqHnFdrfXkWUl1lZW+PWrZs4YmqDqqZReiqoAZlBaO3si+bm6/D09GDLZtEyXyTyeKS05BR4uLkPUV+qCrgnQ0+wy0APh/Z+gP7mnQy4nbA/vgAbP1mMvv4+lBTrPNyYRV4kqeQ8qqtrRG/M6xQN0qQuMg9ffyQUNXDAxPplqfciJC6PJfbZyM7MQnZ2jnJgwRhE0MXHxkEdOJa1IcLzE/Q272baKWgX0kLXobPzEfNwuhxuzKJO9FMB0SwnGjmp+U2IBmM6O0lxkdVIrZz9UCNSi6VGY4Iur+46XFy90CZvg6eb+5gqE6LAsWWk51oMMNCU2sU9XXroWt678T3N4XrG4elJFKL64e4fKnoz3phYiLWxssb9e3fxtYkFKqkWy86XJumMuIbWHnxtZs1hs7KwGlNlQhO4J0xRnmvUgNvJgUsLWyMAp72Hq6+vR1BQENfL9GKobHJ5OM0PfzSRJ+SJ+EiPSMPIlY/kEr8hb1IJCfEoKMhDcFgkYrIqUD0COHqtvCZTGxfeqOzs7AyFQiFanpjEPRwQ4aUJHAupHDi1kPoCD0e9BV6eXjzPTEtLQ3VV1dP/oa1NGuB2H/jqwkETWxw2tcNXJyU4aiHF11bOOG57GiZ2bjBz8IS5kzesXfxhcyoAErcQOLiHQOodAalPJE6dicXpwFjesGpiYoqkhESeQNMHmJOVjQJ2kfTB0uSS8vJyluNV8w71hoYGXGDhjp6qRDXMlpYWtLa28lBIN5r6/6jBlHoGaAAljSKh2iTVLKn1nm5U56NO9HSz8KdFIy6VKZFIIJe34piN89Oaq6a3o+2eoUkoLSvnUxQLCwtFy9PUaCE13FMfPU1G6G7Zy9XL1lPC1qO7k2qpwx6O5jSM5uEuXbrEPysqjxqT6cmhtHwZ6CYNcMzo2WTDEh61KiYzM7O/EtM00jS2Pm0aW46Uaj+ayqetFixY8IMXiSbKrF62YhM9kUkMAk1RKLKzscW99nY+16LscrvSa6sBp/Tig0gtuwBf/0DuVaibSqw8dRFwCQJwKhtitVRq/ogIDUPnwwdMHYgMD0UHC/EEDFVsaIjU8zwczXvIyc7m+3XyL9kj/oWLioh8aeDyJwlwb70xQH9mamp6RwwETVGOlpqSwmulyUlpCIjLVno7weMpRRD2o4LlfGZW9vwYa2sbthQfSUziwMXFKbutCAT2d5eB7cNCIXXKk4eneRwlJSVITEhAFQuL1L/5iMFz9fIV7uHoi0PeXF2NDY0cxqfbWLinZWBg4PA2tfdoQtG9u/dGKDkpeXJ03k8VI4+3YcOGEG3zLuppkNjbo/3WbRw1d2ChVawvth9VbT0wsZSyUP6Q53UU5sXKI7meOoV0lmPFxcYi/qxSccKSi7Yz0ba4mFjubUODQzj8lFIkJyZxYAcGBobVP4BBpvycXNy9047YmLMY6O3DIHuPpL6vsbExn3ooEdHnRvt5eqMDbnztnRUrVqyOi4t7IgaEpmiyi6OjIx9JYuPggryGG0KI1ahUyPtYvhqGeuZtYuPjUM481WjlUU6mrahmqmiTIyJCObGbctzAM4EozM1HQX4eUz7y8wuRR8rJ4R4ql4FXkFfAVKh8n61T3zB5V/KeFKrFRLnopBgtMhXNwMDg344fP35dq/Y0tg+N6EhPT2U12UK4hcShVh02Jgq51M4Ym12J6Jh4XLx4kYc00fJeQpSb3Waw05NACbgKBtznxrswd+nvMfejXzP9FvOX/g7z2PKj9dMxny2Xrp+BhR//Fov0/og5y5Tvzf/oXcxd/BucjY0WMraRNpkqDVPSqELBPlxPqgGL3WxNUYh1dHTgudBxc0fIWChVAvestys4fwP2Ulc8ZCFW4uAwpkZilbIJOFYb58AplMBZun8BQ/u52OHwHgwd5mCHZBYMpbMgKV6NndL34Fi0Gns83odt6jrscpkLQ8dZ2CNdBEPbeYiICxTwGmk64F6PvaO3Vm9pZETkN2I3XFOUwLvw9jc5nN19kFl59RnYVPBVNXXC1FrK9u+EVCpFO6sciJX3IpGHu8M8XIzKw7FaqqXHfuyUMNAcZmKnANwOZwYaA85QOgMORasYcB/AOu0T7HKex/aZhb1Of8JOOwLujIDXSNMB9xpNX1//X48eOXpF7FnCmiKPlcPypdTkFFRWVrPcLYLnddQFpj5/opp5QImrP64xDxodFUnPJBYt73kiD0d5FUFLuVl4eDiOOmzHTsHD7XT4QABuFhyKVz0F7jP3uQJwbD/H97FbqgJO5+Emja1fv/5H7MN2pAZUsZuvKWqAdnJywt377ayW6oTqFmW3mLootwtOyEFGZg5qZbW8bUysrNFE3Wftd+4gmOWDVy5e4o/AMHX9DIYSdeBmCx5ulXJZtJJ7OCsG3E4X5gFZSN3NPJwhBy6AoSXeNqcD7s3YO3p6eguDgoIGxQDQ1IOHD2gyDdpar8MvIATxhecYaPQzUOrgDSKz+io8vP0YPO0sJLu8dF6nXmmwcPschpYLsd1qLrbZMvCs5mOP01zYp6/FTuc5sM1cx0CbDcvY9Sz0zsc2mw+wx2YJDM0XIiJWF1InpdHj9g8fPiyjFnsxANRF8FBzRFJiIhoaGmHneoZ5tl6hoVhVoRhEyeW7sJI48zyQ2uuoK06sPDGpA9fRcRc3bym4btxuw82bCpRXlsDo9DyYJy2DafJy7LFY/nSfWyS2z81bcvT19Qh4jTQdcG/YKMQaGBhY1tbWikKgKernpVyLQLK0deaPoVDNw1V5u8qWTlg7e/EaZ1hYGO8vFitLU7Tvufpzyh4FVgGhSgjvURB6FaprqrBPyoCLWw6z+GX47ORqto+yj5n2Vx2jPE5cKUnJSIiP1wH3pm3z5s1z/Pz8esRA0BQNHPD09OT9q5FRsYhML2eeTrORuB/eYYkoLa/kXVk0BF2sLHXRAAXqaaDnorRqiHI7R4k9jp74Cxb8+X+xZP10SF3s4eHqjmuXr4zYfzRdZyKgdcBNAqMQe8j4YHHHvReHQQqxBQUFHKRL7IZbOvsw6Po08roBJBTUIzQsEm3yVni6e465vS4w8AwO/MUICzf/F5YZ/Q+W7/8fzP/k/+Dj5clrtWLHjKaqykodcJPFqKF469atR8krid0sTdFEZnraU8e9e7B1ckPJhdtqwDGvpxhE3jk580Ye3DPSw3XusX07O7t4F9iwNF93oottoxpsd3cX75e18zoISeFyOBStgKToI9jnrEZkXAhios8+PR8aPFBeVoHDX5/AkWNmcHYZ+aQBAm7Dhg2/ES5ZZ5PBmAeY5eXh9VD9Ro0mGp/n6+vH2+Lik1JxJj6X53Wq9jr6UePSqx0MSE+WR93jT7tsIjXRskmQsE3Y3szKov1oDBwNj6eG6COSHXAoWwaHUgZd6cewz18JBxdrBrwLamvr0NLUDFcPX2RUN/EQT801xU0P+I/q3bkzPNhAB9wktUWLFv2zsbFxljaPhaBQWchCbGJcHAfFQurNpyFyTycMeaps68GZqHS4eITAxTNYKQ/l0lmQi0eQUmzdztEdFqamCAoOxMkTx7Fh14c4HPIhvgpZxLQQB8/8CX/+dB1OsPdMTUzx6ZZtyJI1M9CfzSerWrsRpvbYNB1wk9jMzMx+YLDZwDg/P39IHbDRRI/ud3N1xX2WB0rdvJBb3yYAoFGpGFWq/QYRkVUFqbMT1h2YjoP+DK4TM7HT8QPsln4AvWN/wMHARVh94HcwiVqGhevehbu3n7LyIgCuEuWV3gGU5ymnbeqAewts/fr1093c3Nq1SfofsBB7JiAAV65cQWZ2LrwjUkd4nReJwmF0ZiX8znjiWNhqbLWfiYPBS2DkPht7Ts/BV2GLsMV6Bo4nfIx1pr/HfpuPEBxG3W8jgaM88kzw8DwTHXBviS1duvSfvvzyywRtBneqQizVYptbrsNG6oGa1i7eWKydehCVWY4Af1+sNvoDjJwXYOOx6dhmMRfbbWZh/cGZ2O+6ACv3vQtjnyVYqj8DQaGRfGIQwaoSDaeix1rExiU8PTcdcG+R0TwLVovdl5WV9Z06YKOJhkV5uLuj434HqqtlkNXUQyZjqqlTro9QHWpkpFokxifh8OFD+Gz3LmzetgPbd++D4S4jYbkfO3YbwXD3Xmzfsxd79hrh80MmqJXTb9ESbINK4Frp13s8+BwI1eRuHXBvoa1YseJdVjtU0IQcTcg0RSE2JCgYjg4OcNBCtB/9uo6DRMJnmJmeMEVoajEDiMFEQMkHuWQkti0ovgB+AaEIDoliXi6ahdZoBDHRdM2MrFzeE6F+PvQjJDrg3kJbs2bNP3zxxReR1DugfkPHWy3MS4aklgr52Ei5hSbxgaBix4qJPJyu4fctNQDvbNmyxTA1NfVbsZs7HmppbkKYCjhNMeA8QhO1Bo4ahisrq5BY2CCvkQ821cj7m1hFI79O0e9dL+89zdZPsxzSi+WClWw9r0beE1An73Y919p1sFbRZVij6D5SJ+91rZb3x7MadU1NW0+yjL2uk3dtO6/onNko75xBovVzip5NtYo+X3ae5dVtnScbW9r/XfjYdPaqxkLsb6RS6TXqIRC70a+i5ucBxxScXIzLly6LHiumispqJJddfNowTTVoCs3K8mipts69KM3RpaVyf5UoR1RfV+WNqv34b6LR+8JrBvE37PXD2hs9DsLHprNXMVah+PuDBw/GXL1yRfRGj1UEXCgDTv0Gq0TQVNHvybr5I7+giA93p6ew93R1jaqK8kqklF5UwvAGJFP0hQgfmc5e1XiI3bx5S0JCglaDO7URjQb2jkwf4WGG1c9/XTGt4gpCk4sQlpTPlgXiSipAYEIeyq49eurhXpv4+ZPX1AE37rZy6dJfOTk4XKSBmGIQvYz6enpwyjdMebOehjtNjbZ9EkkH3MSagYHBT1kt1od+wlIMpJdRSkoa0iqv8LxI9Ga+DdIB93ps88bNG+Pj4nq0ebrTaKKeC78zIUgsOf/6QyGXyrtqK7HjlK91OdxrsMWLF/+3vZ1d/cvMcRghBmxBfiEc3QMQEJuNrNrryK5rRU5dG1euFnrefvReNhOVm1nd9OqqEtlW3cwqLI1xwseis4k0fX39n+zfv9+NnmIpCpQWou6pPgYe/VJiYVEJCgqLx1lFXGs+0Q/6/Yx5H0yE5sxZPFv4SHT2OkxPT29dTExMpxhQk0X79u2zEk5XZ1PBVqxY8UsbG5sq9X5O6gVQv+lvUkZGRtbCqepsqhhNUTT67DOpbBL8xICmdMBNYVu7atXK6KiojrHO6JoI6YCb4rZ03rz/ND9pFu/v41vq78vEln6+fmW09GWvNcX3UYmOUR03Ypv/0/XhY9k21T7q+wvvk1gFZxedV3p6+o9J/CTHzaZN+39zXNlOdbB2LgAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img67"
                        ></image>
                        <clipPath id="clip68">
                            <rect x="0" y="0" width="1190625" height="580048" />
                        </clipPath>
                        <clipPath id="clip69">
                            <rect x="0" y="0" width="85725" height="190500" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOpJREFUSEvt12sSgyAMBODYKiL4uv9pK7oKIcFeIN8vS3amlpWZSoXuw32xXukxznpMuAHTbMCEs5zlEstZLrGc5RLLWS6xnPpHzI2YZt5hdpgCRAxLEbMwE1b+oQUX72aigMs363GjvXZjlXODNnxoW85fTHJDOH/FyL1/c9yRU5oodUgdJixpAjKJW7EoxaI7oh2r0oYEtGoZMX94DLhUBKfXojyp9dtCgiI4+UDcRXBic6L+XiFqKYrgeC1iS7Jyc3gRXFlLVQSXN2fCSsO9ObII7q7leTZbrtOiFsGl06IXwTlfnAgg+gEGAhJwZdPnjwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img70"
                        ></image>
                        <clipPath id="clip71">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip72">
                            <rect x="0" y="0" width="85725" height="190500" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img73"
                        ></image>
                        <clipPath id="clip74">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip75">
                            <rect x="1.86265e-09" y="-2.32831e-10" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip76">
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
                            d="M403 245.484 404.311 366.879 401.311 366.911 400 245.516ZM402.811 366.896 407.279 363.847 402.876 372.895 398.279 363.944Z"
                            fill="#663300"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 364.5 153.81)"
                        />
                        <path
                            d="M364.5 172.5 364.5 194.539"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M639 328.5 639 406.069 636 406.069 636 328.5ZM637.5 406.069 642 403.069 637.5 412.069 633 403.069Z"
                            fill="#989898"
                        />
                        <path
                            d="M1013.7 201.5 112.5 201.5"
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
                            transform="translate(79.8245 106)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(86.9911 106)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(90.4911 106)"
                        >
                            7
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(95.8245 106)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(99.3245 106)"
                        >
                            Ч (п/с Чирчик)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(218.56 107)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(225.726 107)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(229.226 107)"
                        >
                            702 (п/с 0)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(329.442 108)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(336.609 108)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(340.109 108)"
                        >
                            7
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(345.442 108)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(348.942 108)"
                        >
                            В(п/с
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(375.609 108)"
                        >
                            Восточ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(408.109 108)"
                        >
                            )
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(455.293 108)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(462.46 108)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(465.96 108)"
                        >
                            7
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(471.293 108)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(474.793 108)"
                        >
                            К1(Комсомол
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(537.626 108)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(541.126 108)"
                        >
                            1)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(626.874 108)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(634.041 108)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(637.541 108)"
                        >
                            7
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(642.874 108)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(646.374 108)"
                        >
                            К2 (Комсомол
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(711.874 108)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(715.374 108)"
                        >
                            2)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(753.273 107)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(760.44 107)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(763.94 107)"
                        >
                            703(
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(783.44 107)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(786.94 107)"
                        >
                            п/с 0)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(855.687 107)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(862.854 107)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(866.354 107)"
                        >
                            704 (п/с 0)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(55.1429 202)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(58.6429 202)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(62.1429 202)"
                        >
                            СШ 35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(53.6791 246)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(60.6791 246)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(64.1791 246)"
                        >
                            СШ 35
                        </text>
                        <path
                            d="M182.499 362.972 181.5 244.5"
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
                            transform="translate(139.554 446)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(145.721 446)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(149.221 446)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(120.887 459)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(142.221 459)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(119.887 472)"
                        >
                            21 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(93.7206 485)"
                        >
                            СВ 750/75
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(140.387 485)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(143.887 485)"
                        >
                            40
                        </text>
                        <path
                            d="M0 0 0.199265 21.0129"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 182.5 438.513)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(135.146 303)"
                        >
                            ВТ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(148.812 303)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(152.312 303)"
                        >
                            1
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
                            transform="translate(550.15 23)"
                        >
                            Чирчиқ ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(664.017 23)"
                        >
                            (
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(670.183 23)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(708.183 23)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(714.35 23)"
                        >
                            7
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(723.683 23)"
                        >
                            )
                        </text>
                        <path
                            d="M0 0 910.812 0.000104987"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1013.31 238.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1069.14 222)"
                        >
                            МШВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(444.09 284)"
                        >
                            ТСН№1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(438.923 297)"
                        >
                            35/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(468.59 297)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(445.256 310)"
                        >
                            560
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(463.923 310)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(445.423 323)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(461.423 323)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(464.923 323)"
                        >
                            560
                        </text>
                        <g clip-path="url(#clip17)">
                            <g filter="url(#fx0)" transform="translate(226 147)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c333"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 235 173)"
                            />
                        </a>
                        <path
                            d="M245.5 173.5 245.5 195.663"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 244.5 154.81)"
                        />
                        <path
                            d="M5.37958 0.12724C8.9157-0.681955 12.2839 2.41068 12.9027 7.03483 13.5215 11.659 11.1566 16.0636 7.62044 16.8728 6.85125 17.0488 6.06411 17.0421 5.29673 16.8531"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 239.5 211.5)"
                        />
                        <path
                            d="M248 210.5 248 238.8 245 238.8 245 210.5ZM251 238.8C251 241.285 248.985 243.3 246.5 243.3 244.015 243.3 242 241.285 242 238.8 242 236.315 244.015 234.3 246.5 234.3 248.985 234.3 251 236.315 251 238.8Z"
                            fill="#663300"
                        />
                        <path
                            d="M505 201.5 505 228.898 502 228.898 502 201.5ZM499 201.5C499 199.015 501.015 197 503.5 197 505.985 197 508 199.015 508 201.5 508 203.985 505.985 206 503.5 206 501.015 206 499 203.985 499 201.5Z"
                            fill="#663300"
                        />
                        <path
                            d="M5.87727 0.110043C9.69322-0.642895 13.2893 2.50304 13.9094 7.13668 14.5295 11.7703 11.9387 16.137 8.12273 16.89 7.35111 17.0422 6.56393 17.0364 5.79387 16.8729"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 496.5 246.5)"
                        />
                        <path
                            d="M503.5 245.5 503.5 273.8"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.49997-0.00997043 1.74154 36.3329-1.25839 36.3529-1.49997 0.00997043ZM-4.4999 0.0299113C-4.51642-2.45532-2.51514-4.48338-0.0299113-4.4999 2.45532-4.51642 4.48338-2.51514 4.4999-0.0299113 4.51642 2.45532 2.51514 4.48338 0.0299113 4.4999-2.45532 4.51642-4.48338 2.51514-4.4999 0.0299113Z"
                            fill="#663300"
                            transform="matrix(-1 0 0 1 637.742 236.5)"
                        />
                        <path
                            d="M505 328.5 505 404.628 502 404.628 502 328.5ZM503.5 404.628 508 401.628 503.5 410.628 499 401.628Z"
                            fill="#989898"
                        />
                        <g clip-path="url(#clip18)">
                            <g filter="url(#fx1)" transform="translate(1024 202)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c1"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1033 228)"
                            />
                        </a>
                        <path
                            d="M1006 176.5 1006 200.907 1003 200.907 1003 176.5ZM1009 200.907C1009 203.392 1006.99 205.407 1004.5 205.407 1002.01 205.407 1000 203.392 1000 200.907 1000 198.422 1002.01 196.407 1004.5 196.407 1006.99 196.407 1009 198.422 1009 200.907Z"
                            fill="#663300"
                        />
                        <path
                            d="M1007 237.5 1007 262.067 1004 262.067 1004 237.5ZM1001 237.5C1001 235.015 1003.01 233 1005.5 233 1007.99 233 1010 235.015 1010 237.5 1010 239.985 1007.99 242 1005.5 242 1003.01 242 1001 239.985 1001 237.5Z"
                            fill="#663300"
                        />
                        <path
                            d="M0 0 37.7953 0.000104987"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1043.3 261.5)"
                        />
                        <path
                            d="M0 0 40.0209 0.000104987"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1043.52 177.5)"
                        />
                        <path
                            d="M1042.5 176.5 1042.5 209.408"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1042.5 228.5 1042.5 262.516"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M6.00653 0.0759186C9.83339-0.511956 13.3805 2.33535 13.9291 6.43556 14.4778 10.5358 11.8203 14.3362 7.99349 14.9241 7.30963 15.0291 6.61502 15.0251 5.93226 14.9122"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 174.5 245.5)"
                        />
                        <path
                            d="M183 201.5 183 232.43 180 232.43 180 201.5ZM177 201.5C177 199.015 179.015 197 181.5 197 183.985 197 186 199.015 186 201.5 186 203.985 183.985 206 181.5 206 179.015 206 177 203.985 177 201.5Z"
                            fill="#663300"
                        />
                        <g clip-path="url(#clip19)">
                            <g filter="url(#fx2)" transform="translate(163 281)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="18"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch9 ?>">
                            <rect
                                id="c2733"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 172 307)"
                            />
                        </a>
                        <g clip-path="url(#clip20)">
                            <g filter="url(#fx3)" transform="translate(618 348)">
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
                        <a href="<?= $urlSwitch14 ?>">
                            <rect
                                id="c453"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 627 374)"
                            />
                        </a>
                        <g clip-path="url(#clip21)">
                            <g filter="url(#fx4)" transform="translate(485 346)">
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
                        <a href="<?= $urlSwitch12 ?>">
                            <rect
                                id="c438"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 494 372)"
                            />
                        </a>
                        <path
                            d="M1.5-1.20957e-06 1.5001 124.195-1.4999 124.195-1.5 1.20957e-06ZM0.000100149 124.195 4.5001 121.195 0.000104987 130.195-4.4999 121.195Z"
                            fill="#767171"
                            transform="matrix(1 0 0 -1 1171.5 302.695)"
                        />
                        <path
                            d="M1124.5 434.5 1172.26 434.5"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.232966 78.892"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1171.5 435.392)"
                        />
                        <a href="<?= $urlTransformer7 ?>">
                            <path id="c9702"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#767171"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1155.5 356.5)"
                            />
                            <path id="c9701"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#767171"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1155.5 335.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1192.33 325)"
                        >
                            Солнечный
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1197.5 338)"
                        >
                            инвертор
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1034.4 408)"
                        >
                            Солночн
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1074.23 408)"
                        >
                            ый
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1056.23 421)"
                        >
                            панель
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1051.4 434)"
                        >
                            120 кВт
                        </text>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#4472C4"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 125.5 240.5)"
                        />
                        <g clip-path="url(#clip22)">
                            <g filter="url(#fx5)" transform="translate(108 148)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c378"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 117 174)"
                            />
                        </a>
                        <path
                            d="M127.5 173.5 127.5 195.663"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 126.5 155.81)"
                        />
                        <path
                            d="M5.87727 0.110043C9.69322-0.642895 13.2893 2.50304 13.9094 7.13668 14.5295 11.7703 11.9387 16.137 8.12273 16.89 7.35111 17.0422 6.56393 17.0364 5.79387 16.8729"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 121.5 211.5)"
                        />
                        <path
                            d="M128.5 210.5 128.5 238.8"
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
                            transform="matrix(1 0 0 -1 126.5 239.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#4472C4"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 362.5 239.5)"
                        />
                        <g clip-path="url(#clip23)">
                            <g filter="url(#fx6)" transform="translate(345 146)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c423"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 354 172)"
                            />
                        </a>
                        <path
                            d="M5.87727 0.110043C9.69322-0.642895 13.2893 2.50304 13.9094 7.13668 14.5295 11.7703 11.9387 16.137 8.12273 16.89 7.35111 17.0422 6.56393 17.0364 5.79387 16.8729"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 357.5 210.5)"
                        />
                        <path
                            d="M365.5 209.5 365.5 237.8"
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
                            transform="matrix(1 0 0 -1 362.5 238.5)"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 504.5 154.81)"
                        />
                        <path
                            d="M0 0 0.00272966 25.7643"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 504.503 173.5)"
                        />
                        <g clip-path="url(#clip24)">
                            <g filter="url(#fx7)" transform="translate(485 147)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c393"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 494 173)"
                            />
                        </a>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 501.5 204.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#4472C4"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 671.5 240.5)"
                        />
                        <g clip-path="url(#clip25)">
                            <g filter="url(#fx8)" transform="translate(654 147)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c408"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 663 173)"
                            />
                        </a>
                        <path
                            d="M673.5 173.5 673.5 195.663"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 672.5 154.81)"
                        />
                        <path
                            d="M5.31579 0.15063C8.84556-0.754938 12.2372 2.47296 12.8912 7.36033 13.5452 12.2477 11.214 16.9438 7.68421 17.8494 6.87203 18.0577 6.03861 18.0499 5.22857 17.8262"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 667.5 211.5)"
                        />
                        <path
                            d="M674.5 209.5 674.5 237.8"
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
                            transform="matrix(1 0 0 -1 671.5 239.5)"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 781.5 153.81)"
                        />
                        <path
                            d="M0 0 0.00272966 25.7643"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 781.503 173.5)"
                        />
                        <g clip-path="url(#clip26)">
                            <g filter="url(#fx9)" transform="translate(762 147)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c348"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 771 173)"
                            />
                        </a>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 778.5 203.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#4472C4"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 878.5 240.5)"
                        />
                        <g clip-path="url(#clip27)">
                            <g filter="url(#fx10)" transform="translate(861 147)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c363"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 870 173)"
                            />
                        </a>
                        <path
                            d="M880.5 173.5 880.5 195.663"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-5.56281e-06 1.50008 22.3095-1.49992 22.3095-1.5 5.56281e-06ZM8.27356e-05 22.3095 4.50007 19.3095 0.000104987 28.3095-4.49993 19.3095Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 880.5 154.81)"
                        />
                        <path
                            d="M5.87727 0.110043C9.69322-0.642895 13.2893 2.50304 13.9094 7.13668 14.5295 11.7703 11.9387 16.137 8.12273 16.89 7.35111 17.0422 6.56393 17.0364 5.79387 16.8729"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 874.5 210.5)"
                        />
                        <path
                            d="M133.424 498.859 226.532 498.859 226.532 511.659 133.424 511.659Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M133.424 511.659 226.532 511.659 226.532 524.459 133.424 524.459Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M133.424 524.459 226.532 524.459 226.532 537.259 133.424 537.259Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M133.424 537.259 226.532 537.259 226.532 550.059 133.424 550.059Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M133.424 550.059 226.532 550.059 226.532 562.859 133.424 562.859Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M133.424 562.859 226.532 562.859 226.532 575.659 133.424 575.659Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M132.757 511.659 227.199 511.659"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M132.757 524.459 227.199 524.459"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M132.757 537.259 227.199 537.259"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M132.757 550.059 227.199 550.059"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M132.757 562.859 227.199 562.859"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M133.424 498.192 133.424 576.326"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M226.532 498.192 226.532 576.326"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M132.757 498.859 227.199 498.859"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M132.757 575.659 227.199 575.659"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g273"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(137.203 509)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g274"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(137.203 522)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a273"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(137.203 534)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k273"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(137.203 547)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n273"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(137.203 560)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w273" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(137.203 573)"
                            >
                                Qвода
                            </text>
                        </g>
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c2731"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#990099"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 167.5 417.5)"
                            />
                            <path id="c2732"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 167.5 393.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(146.117 373)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(152.617 373)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(156.117 373)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(106.117 386)"
                        >
                            10,5/38,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(149.117 386)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(115.117 399)"
                        >
                            27000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(144.45 399)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(96.9503 412)"
                        >
                            3хОЦ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(122.95 412)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(126.45 412)"
                        >
                            9000/35
                        </text>
                        <path
                            d="M318 239.494 318.539 363.142 315.539 363.156 315 239.507ZM312 239.52C311.989 237.034 313.995 235.011 316.48 235 318.966 234.989 320.989 236.995 321 239.48 321.011 241.966 319.005 243.989 316.52 244 314.034 244.011 312.011 242.005 312 239.52Z"
                            fill="#663300"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(274.65 445)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(280.816 445)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(284.316 445)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(255.983 458)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(277.316 458)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(254.983 471)"
                        >
                            21 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(228.816 484)"
                        >
                            СВ 750/75
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(275.483 484)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(278.983 484)"
                        >
                            40
                        </text>
                        <path
                            d="M0 0 0.199265 21.0129"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 317.5 438.513)"
                        />
                        <g clip-path="url(#clip28)">
                            <g filter="url(#fx11)" transform="translate(298 281)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c2883"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 307 307)"
                            />
                        </a>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c2881"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#990099"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 302.5 417.5)"
                            />
                            <path id="c2882"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 302.5 392.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(281.039 372)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(287.539 372)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(291.039 372)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(241.039 385)"
                        >
                            10,5/38,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(284.039 385)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(250.039 398)"
                        >
                            27000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(279.373 398)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(231.873 411)"
                        >
                            3хОЦ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(257.873 411)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(261.373 411)"
                        >
                            9000/35
                        </text>
                        <path
                            d="M760.499 362.972 759.5 244.5"
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
                            transform="translate(718.003 446)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(724.17 446)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(727.67 446)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(699.336 459)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(720.67 459)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(698.336 472)"
                        >
                            21 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(672.17 485)"
                        >
                            СВ 750/75
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(718.836 485)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(722.336 485)"
                        >
                            40
                        </text>
                        <path
                            d="M0 0 0.199265 21.0129"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 760.5 438.513)"
                        />
                        <path
                            d="M6.00653 0.0759186C9.83339-0.511956 13.3805 2.33535 13.9291 6.43556 14.4778 10.5358 11.8203 14.3362 7.99349 14.9241 7.30963 15.0291 6.61502 15.0251 5.93226 14.9122"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 752.5 245.5)"
                        />
                        <path
                            d="M761 201.5 761 232.43 758 232.43 758 201.5ZM755 201.5C755 199.015 757.015 197 759.5 197 761.985 197 764 199.015 764 201.5 764 203.985 761.985 206 759.5 206 757.015 206 755 203.985 755 201.5Z"
                            fill="#663300"
                        />
                        <g clip-path="url(#clip29)">
                            <g filter="url(#fx12)" transform="translate(741 281)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch15 ?>">
                            <rect
                                id="c3033"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 750 307)"
                            />
                        </a>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c3031"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#990099"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 745.5 417.5)"
                            />
                            <path id="c3032"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 745.5 393.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(725.863 375)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(732.363 375)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(735.863 375)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(685.863 388)"
                        >
                            10,5/38,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(728.863 388)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(694.863 401)"
                        >
                            27000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(724.196 401)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(676.696 414)"
                        >
                            3хОЦ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(702.696 414)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(706.196 414)"
                        >
                            9000/35
                        </text>
                        <path
                            d="M269.575 498.93 362.683 498.93 362.683 511.73 269.575 511.73Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M269.575 511.73 362.683 511.73 362.683 524.53 269.575 524.53Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M269.575 524.53 362.683 524.53 362.683 537.33 269.575 537.33Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M269.575 537.33 362.683 537.33 362.683 550.13 269.575 550.13Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M269.575 550.13 362.683 550.13 362.683 562.93 269.575 562.93Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M269.575 562.93 362.683 562.93 362.683 575.73 269.575 575.73Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M268.909 511.73 363.35 511.73"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M268.909 524.53 363.35 524.53"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M268.909 537.33 363.35 537.33"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M268.909 550.13 363.35 550.13"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M268.909 562.93 363.35 562.93"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M269.575 498.263 269.575 576.397"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M362.683 498.263 362.683 576.397"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M268.909 498.93 363.35 498.93"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M268.909 575.73 363.35 575.73"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g288"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(273.355 509)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g289"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(273.355 522)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a288"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(273.355 535)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k288"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(273.355 547)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n288"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(273.355 560)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w288"
                                fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(273.355 573)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M714.435 498.859 807.543 498.859 807.543 511.659 714.435 511.659Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M714.435 511.659 807.543 511.659 807.543 524.459 714.435 524.459Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M714.435 524.459 807.543 524.459 807.543 537.259 714.435 537.259Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M714.435 537.259 807.543 537.259 807.543 550.059 714.435 550.059Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M714.435 550.059 807.543 550.059 807.543 562.859 714.435 562.859Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M714.435 562.859 807.543 562.859 807.543 575.659 714.435 575.659Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M713.768 511.659 808.21 511.659"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M713.768 524.459 808.21 524.459"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M713.768 537.259 808.21 537.259"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M713.768 550.059 808.21 550.059"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M713.768 562.859 808.21 562.859"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M714.435 498.192 714.435 576.326"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M807.543 498.192 807.543 576.326"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M713.768 498.859 808.21 498.859"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M713.768 575.659 808.21 575.659"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g303"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(718.214 509)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g304"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(718.214 522)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a303"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(718.214 534)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k303"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(718.214 547)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n303"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(718.214 560)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w303" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(718.214 573)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M883 239.494 883.539 363.142 880.539 363.156 880 239.507ZM877 239.52C876.989 237.034 878.995 235.011 881.48 235 883.966 234.989 885.989 236.995 886 239.48 886.011 241.966 884.005 243.989 881.52 244 879.034 244.011 877.011 242.005 877 239.52Z"
                            fill="#663300"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(839.445 445)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(845.612 445)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(849.112 445)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(820.778 458)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(842.112 458)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(819.778 471)"
                        >
                            21 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(793.612 484)"
                        >
                            СВ 750/75
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(840.278 484)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(843.778 484)"
                        >
                            40
                        </text>
                        <path
                            d="M0 0 0.199265 21.0129"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 882.5 438.513)"
                        />
                        <g clip-path="url(#clip30)">
                            <g filter="url(#fx13)" transform="translate(862 281)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
                                        stroke-width="4"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 9 28)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch16 ?>">
                            <rect
                                id="c3183"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 871 307)"
                            />
                        </a>
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c3181"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#990099"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 867.5 417.5)"
                            />
                            <path id="c3182"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 867.5 392.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(847.305 375)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(853.805 375)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(857.305 375)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(807.305 388)"
                        >
                            10,5/38,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(850.305 388)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(816.305 401)"
                        >
                            27000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(845.638 401)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(798.138 414)"
                        >
                            3хОЦ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(824.138 414)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(827.638 414)"
                        >
                            9000/35
                        </text>
                        <path
                            d="M881.5 211.5 881.5 242.43"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c4381"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 488.5 328.5)"
                            />
                            <path id="c4382"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 488.5 303.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer6 ?>">
                            <path id="c4531"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 621.5 328.5)"
                            />
                            <path id="c4532"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 621.5 304.5)"
                            />
                        </a>
                        <path
                            d="M83.0783 63.865 166.678 63.865 166.678 77.4562 83.0783 77.4562Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M83.0783 77.4562 166.678 77.4562 166.678 91.0473 83.0783 91.0473Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M82.4117 77.4562 167.345 77.4562"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M83.0783 63.1983 83.0783 91.714"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M166.678 63.1983 166.678 91.714"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M82.4117 63.865 167.345 63.865"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M82.4117 91.0473 167.345 91.0473"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g378Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(85.745 74)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g378Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(85.745 87)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip31)"
                            transform="matrix(0.000104987 0 0 0.000104987 158 65)"
                        >
                            <g clip-path="url(#clip33)" transform="matrix(1 0 0 1.05366 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img32"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip34)"
                            transform="matrix(0.000104987 0 0 0.000104987 159 78)"
                        >
                            <g clip-path="url(#clip36)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M203.282 64.2766 286.881 64.2766 286.881 77.8678 203.282 77.8678Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M203.282 77.8678 286.881 77.8678 286.881 91.459 203.282 91.459Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M202.615 77.8678 287.548 77.8678"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M203.282 63.61 203.282 92.1257"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M286.881 63.61 286.881 92.1257"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M202.615 64.2766 287.548 64.2766"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M202.615 91.459 287.548 91.459"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g333Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(205.949 74)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g333Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(205.949 88)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip37)"
                            transform="matrix(0.000104987 0 0 0.000104987 279 65)"
                        >
                            <g clip-path="url(#clip38)" transform="matrix(1 0 0 1.05366 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img32"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip39)"
                            transform="matrix(0.000104987 0 0 0.000104987 279 79)"
                        >
                            <g clip-path="url(#clip40)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M324.924 64.7701 408.524 64.7701 408.524 78.3613 324.924 78.3613Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M324.924 78.3613 408.524 78.3613 408.524 91.9524 324.924 91.9524Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M324.257 78.3613 409.19 78.3613"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M324.924 64.1034 324.924 92.6191"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M408.524 64.1034 408.524 92.6191"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M324.257 64.7701 409.19 64.7701"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M324.257 91.9524 409.19 91.9524"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g423Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(327.591 75)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g423Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(327.591 88)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip41)"
                            transform="matrix(0.000104987 0 0 0.000104987 400 65)"
                        >
                            <g
                                clip-path="url(#clip42)"
                                transform="matrix(1 0 0 1.05366 -0.25 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img32"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip43)"
                            transform="matrix(0.000104987 0 0 0.000104987 401 79)"
                        >
                            <g clip-path="url(#clip44)" transform="matrix(1 0 0 1.02857 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M836.717 499.028 929.826 499.028 929.826 511.828 836.717 511.828Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.717 511.828 929.826 511.828 929.826 524.628 836.717 524.628Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.717 524.628 929.826 524.628 929.826 537.428 836.717 537.428Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.717 537.428 929.826 537.428 929.826 550.228 836.717 550.228Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.717 550.228 929.826 550.228 929.826 563.028 836.717 563.028Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.717 563.028 929.826 563.028 929.826 575.828 836.717 575.828Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.051 511.828 930.492 511.828"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.051 524.628 930.492 524.628"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.051 537.428 930.492 537.428"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.051 550.228 930.492 550.228"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.051 563.028 930.492 563.028"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.717 498.361 836.717 576.494"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M929.826 498.361 929.826 576.494"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.051 499.028 930.492 499.028"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.051 575.828 930.492 575.828"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g318"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.497 509)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g319"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.497 522)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a318"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.497 535)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k318"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.497 547)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n318"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.497 560)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w318" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.497 573)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M461.007 65.9884 544.606 65.9884 544.606 79.5796 461.007 79.5796Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M461.007 79.5796 544.606 79.5796 544.606 93.1708 461.007 93.1708Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M460.34 79.5796 545.273 79.5796"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M461.007 65.3218 461.007 93.8375"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M544.606 65.3218 544.606 93.8375"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M460.34 65.9884 545.273 65.9884"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M460.34 93.1708 545.273 93.1708"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g393Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(463.673 76)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g393Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(463.673 90)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip45)"
                            transform="matrix(0.000104987 0 0 0.000104987 536 67)"
                        >
                            <g clip-path="url(#clip46)" transform="scale(1 1.05366)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img32"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip47)"
                            transform="matrix(0.000104987 0 0 0.000104987 537 80)"
                        >
                            <g clip-path="url(#clip48)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M740.037 66.1902 823.636 66.1902 823.636 79.7814 740.037 79.7814Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M740.037 79.7814 823.636 79.7814 823.636 93.3726 740.037 93.3726Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M739.37 79.7814 824.303 79.7814"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M740.037 65.5236 740.037 94.0393"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M823.636 65.5236 823.636 94.0393"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M739.37 66.1902 824.303 66.1902"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M739.37 93.3726 824.303 93.3726"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g348Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(742.704 76)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g348Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(742.704 90)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip49)"
                            transform="matrix(0.000104987 0 0 0.000104987 815 67)"
                        >
                            <g clip-path="url(#clip50)" transform="scale(1 1.05366)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img32"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip51)"
                            transform="matrix(0.000104987 0 0 0.000104987 816 80)"
                        >
                            <g clip-path="url(#clip52)" transform="matrix(1 0 0 1.11429 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M840.973 65.6991 924.573 65.6991 924.573 79.2903 840.973 79.2903Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M840.973 79.2903 924.573 79.2903 924.573 92.8815 840.973 92.8815Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M840.307 79.2903 925.24 79.2903"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M840.973 65.0324 840.973 93.5481"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M924.573 65.0324 924.573 93.5481"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M840.307 65.6991 925.24 65.6991"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M840.307 92.8815 925.24 92.8815"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g363Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(843.64 76)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g363Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(843.64 89)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip53)"
                            transform="matrix(0.000104987 0 0 0.000104987 916 66)"
                        >
                            <g clip-path="url(#clip54)" transform="scale(1 1.05366)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img32"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip55)"
                            transform="matrix(0.000104987 0 0 0.000104987 917 80)"
                        >
                            <g clip-path="url(#clip56)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M631.971 66.2962 715.571 66.2962 715.571 79.8873 631.971 79.8873Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M631.971 79.8873 715.571 79.8873 715.571 93.4785 631.971 93.4785Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M631.305 79.8873 716.238 79.8873"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M631.971 65.6295 631.971 94.1452"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M715.571 65.6295 715.571 94.1452"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M631.305 66.2962 716.238 66.2962"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M631.305 93.4785 716.238 93.4785"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g408Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(634.638 76)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g408Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(634.638 90)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip57)"
                            transform="matrix(0.000104987 0 0 0.000104987 707 67)"
                        >
                            <g clip-path="url(#clip58)" transform="scale(1 1.05366)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img32"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip59)"
                            transform="matrix(0.000104987 0 0 0.000104987 708 81)"
                        >
                            <g
                                clip-path="url(#clip60)"
                                transform="matrix(1 0 0 1.02857 -0.5 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(2645.83 2645.83)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(655.287 285)"
                        >
                            ТСН№2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(655.287 298)"
                        >
                            35/0,4кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(655.287 311)"
                        >
                            560
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(673.954 311)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(655.287 324)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(671.287 324)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(674.787 324)"
                        >
                            560
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(277.638 301)"
                        >
                            ВТ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(291.305 301)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(294.805 301)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(719.103 303)"
                        >
                            ВТ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(732.769 303)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(736.269 303)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(842.433 303)"
                        >
                            ВТ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(856.1 303)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(859.6 303)"
                        >
                            4
                        </text>
                        <g clip-path="url(#clip61)">
                            <g filter="url(#fx14)" transform="translate(1153 205)">
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
                        <a href="<?= $urlSwitch17 ?>">
                            <rect
                                id="c97"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#4472C4"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1162 231)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(88.2306 170)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(95.3972 170)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(98.8972 170)"
                        >
                            Ч
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(195.339 170)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(202.506 170)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(206.006 170)"
                        >
                            02
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(325.281 170)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(332.448 170)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(335.948 170)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(458.415 170)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(465.582 170)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(469.082 170)"
                        >
                            К1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(627.387 170)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(634.554 170)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(638.054 170)"
                        >
                            К2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(741.055 170)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(748.221 170)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(751.721 170)"
                        >
                            03
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(836.279 170)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(843.446 170)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(846.946 170)"
                        >
                            04
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(448.415 366)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(455.582 366)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(459.082 366)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(472.749 366)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(476.249 366)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(655.822 366)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(662.989 366)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(666.489 366)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(680.155 366)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(683.655 366)"
                        >
                            2
                        </text>
                        <path
                            d="M6.00653 0.0759186C9.83339-0.511956 13.3805 2.33535 13.9291 6.43556 14.4778 10.5358 11.8203 14.3362 7.99349 14.9241 7.30963 15.0291 6.61502 15.0251 5.93226 14.9122"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 -1.22465e-16 -1.22465e-16 -1 395.5 245.5)"
                        />
                        <path
                            d="M404 201.5 404 232.43 401 232.43 401 201.5ZM398 201.5C398 199.015 400.015 197 402.5 197 404.985 197 407 199.015 407 201.5 407 203.985 404.985 206 402.5 206 400.015 206 398 203.985 398 201.5Z"
                            fill="#663300"
                        />
                        <g clip-path="url(#clip62)">
                            <g filter="url(#fx15)" transform="translate(384 347)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c12"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 393 373)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(354.389 366)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(361.556 366)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(365.056 366)"
                        >
                            46
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(375.722 366)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(379.222 366)"
                        >
                            1
                        </text>
                        <path
                            d="M570 238.483 571.354 354.458 568.354 354.493 567 238.518ZM564 238.553C563.971 236.067 565.962 234.029 568.448 234 570.933 233.971 572.971 235.962 573 238.448 573.029 240.933 571.038 242.971 568.553 243 566.068 243.029 564.029 241.038 564 238.553Z"
                            fill="#663300"
                        />
                        <g clip-path="url(#clip63)">
                            <g filter="url(#fx16)" transform="translate(551 347)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="19"
                                        height="19"
                                        stroke="#663300"
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
                                id="c39"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3.66667"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 560 373)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(583.835 366)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(591.002 366)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(594.502 366)"
                        >
                            46
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(605.168 366)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(608.668 366)"
                        >
                            2
                        </text>
                        <path
                            d="M1.49996-0.0112918 1.79064 38.6023-1.20927 38.6249-1.49996 0.0112918ZM0.290686 38.6136 4.76798 35.5798 0.335853 44.6134-4.23177 35.6476Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 402.5 419.113)"
                        />
                        <path
                            d="M1.5-0.00181698 1.55236 43.2276-1.44763 43.2312-1.5 0.00181698ZM0.0523646 43.2294 4.54873 40.2239 0.0596325 49.2294-4.45127 40.2349Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 569.5 422.729)"
                        />
                        <g
                            clip-path="url(#clip64)"
                            transform="matrix(0.000104987 0 0 0.000104987 1080 362)"
                        >
                            <g clip-path="url(#clip66)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img65"
                                    transform="matrix(6846.09 0 0 6846.09 -1 0)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 1052 46)">
                            <g clip-path="url(#clip68)" transform="scale(1 1.00168)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img67"
                                    transform="scale(7632.21 7632.21)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1074.17 42.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1172.5 96.1712)"
                        />
                        <path
                            d="M1170.55 108.031 1162.86 99.6543 1163.35 99.2035 1171.04 107.58ZM1163.11 99.4289 1162.95 103.197 1159.5 95.5001 1166.87 99.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1179.95 108.889 1170.5 108.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1077.53 28.201 1171.9 28.201 1171.9 41.001 1077.53 41.001Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1077.53 27.5344 1077.53 41.6677"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1171.9 27.5344 1171.9 41.6677"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1076.87 28.201 1172.57 28.201"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1076.87 41.001 1172.57 41.001"
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
                                transform="translate(1081.31 38)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1091.81 38)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1073.5 42.5001 1092.69 42.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1180.03 95.2847 1267.68 95.2847 1267.68 108.085 1180.03 108.085Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1180.03 94.6181 1180.03 108.751"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1267.68 94.6181 1267.68 108.751"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.36 95.2847 1268.35 95.2847"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.36 108.085 1268.35 108.085"
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
                                transform="translate(1183.81 105)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1194.31 105)"
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
                            transform="matrix(1 0 0 -1 1070.5 50.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1179.99 68.5001)"
                        />
                        <path
                            d="M1179.5 68.5001 1198.69 68.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1184.22 55.1012 1257.42 55.1012 1257.42 67.9012 1184.22 67.9012Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1184.22 54.4345 1184.22 68.5679"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1257.42 54.4345 1257.42 68.5679"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1183.56 55.1012 1258.09 55.1012"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1183.56 67.9012 1258.09 67.9012"
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
                                transform="translate(1188 65)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1155.5 96.5001 1178.21 96.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M933.118 185.083 993.201 185.083 993.201 197.883 933.118 197.883Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M933.118 184.416 933.118 198.55"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M993.201 184.416 993.201 198.55"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M932.451 185.083 993.868 185.083"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M932.451 197.883 993.868 197.883"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g386"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(936.898 195)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M933.681 240.232 993.764 240.232 993.764 253.032 933.681 253.032Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M933.681 239.566 933.681 253.699"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M993.764 239.566 993.764 253.699"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M933.014 240.232 994.431 240.232"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M933.014 253.032 994.431 253.032"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="w386"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(937.46 250)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M464.287 422.288 537.934 422.288 537.934 436.021 464.287 436.021Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M464.287 421.621 464.287 436.687"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M537.934 421.621 537.934 436.687"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M463.62 422.288 538.601 422.288"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M463.62 436.021 538.601 436.021"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g438"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(468.067 432)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M597.331 422.642 670.978 422.642 670.978 436.376 597.331 436.376Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M597.331 421.976 597.331 437.042"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M670.978 421.976 670.978 437.042"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M596.664 422.642 671.645 422.642"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M596.664 436.376 671.645 436.376"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g453"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(601.11 433)"
                            >
                                Р
                            </text>
                        </g>
                        <path id="c273"
                            d="M157.5 462C157.5 448.469 168.469 437.5 182 437.5 195.531 437.5 206.5 448.469 206.5 462 206.5 475.531 195.531 486.5 182 486.5 168.469 486.5 157.5 475.531 157.5 462Z"
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
                                        d="M180.689 454.933 181.622 454.933 182.944 455.167 184.033 455.633 184.889 456.178 185.9 457.189 186.522 458.122 186.989 459.367 187.144 460.067 187.144 461.933 186.833 463.1 186.211 464.344 185.589 465.122 185.044 465.667 183.956 466.367 182.711 466.833 181.933 466.989 180.378 466.989 179.133 466.678 178.278 466.289 177.422 465.744 176.567 464.967 176.022 464.189 175.478 463.1 175.167 461.856 175.089 460.922 175.244 459.678 175.556 458.667 176.178 457.5 177.033 456.567 177.656 456.022 178.978 455.322 180.144 455.011Z"
                                    />
                                    <path
                                        d="M181.156 441.089 182.011 441.089 183.489 441.322 184.967 441.789 186.211 442.411 187.144 443.033 187.922 443.733 188.856 444.667 189.711 445.911 190.333 447.156 190.8 448.556 191.033 449.722 191.111 450.344 191.111 451.822 190.878 453.3 190.489 454.622 189.867 455.944 189.089 457.033 188.933 457.033 188.311 455.944 187.378 454.856 186.522 454.078 185.433 453.378 184.267 452.833 182.944 452.444 181.156 452.211Z"
                                    />
                                    <path
                                        d="M168.4 456.878 168.789 456.956 170.967 458.2 172.522 459.133 172.6 459.289 172.444 460.922 172.6 462.556 172.989 464.033 173.533 465.2 173.533 465.433 171.356 466.678 169.489 467.767 165.444 470.1 164.122 470.878 163.889 470.878 163.189 469.4 162.8 468.078 162.644 467.144 162.567 465.822 162.722 464.344 162.956 463.256 163.5 461.778 164.044 460.767 164.744 459.756 165.678 458.744 166.533 457.967 167.933 457.111Z"
                                    />
                                    <path
                                        d="M188.7 465.433 189.089 465.511 190.956 466.6 197.022 470.1 198.344 470.878 198.189 471.267 197.644 472.044 196.944 472.9 196.4 473.444 195.233 474.3 193.989 475 192.511 475.544 191.344 475.778 190.878 475.856 188.544 475.856 187.378 475.622 186.133 475.233 184.811 474.611 183.878 473.989 183.878 469.322 184.578 469.011 185.9 468.311 186.833 467.611 187.922 466.522Z"
                                    />
                                    <path
                                        d="M171.667 446.067 173.378 446.067 174.856 446.3 176.489 446.844 177.811 447.544 178.433 447.933 178.433 452.678 177.033 453.3 175.944 454 175.089 454.7 174.544 455.244 173.611 456.567 173.144 456.411 171.822 455.633 165.756 452.133 164.044 451.122 163.967 450.967 164.511 450.111 165.367 449.1 165.989 448.478 167.156 447.622 168.244 447 169.722 446.456 170.578 446.222Z"
                                    />
                                    <path
                                        d="M175.167 467.533 175.478 467.611 176.644 468.467 177.967 469.089 179.211 469.478 180.144 469.633 181.078 469.711 181.156 469.789 181.156 480.833 179.989 480.833 178.433 480.522 177.111 480.056 175.711 479.278 174.7 478.5 173.922 477.8 173.144 476.867 172.367 475.622 171.744 474.222 171.356 472.744 171.2 471.344 171.2 470.489 171.278 469.789 173.222 468.7 174.544 467.922Z"
                                    />
                                    <path
                                        d="M198.267 451.044 198.422 451.044 198.967 452.133 199.433 453.533 199.667 454.778 199.744 456.333 199.589 457.733 199.278 459.056 198.656 460.533 198.111 461.467 197.489 462.322 196.633 463.256 195.467 464.189 194.456 464.811 193.756 465.122 191.811 464.033 189.944 462.944 189.711 462.789 189.867 461.389 189.867 460.222 190.567 459.522 191.578 458.2 192.278 457.033 192.978 455.556 193.522 453.844 194.222 453.378 196.167 452.289 198.033 451.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c288"
                            d="M295.5 460C295.5 446.469 306.469 435.5 320 435.5 333.531 435.5 344.5 446.469 344.5 460 344.5 473.531 333.531 484.5 320 484.5 306.469 484.5 295.5 473.531 295.5 460Z"
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
                                        d="M318.689 452.933 319.622 452.933 320.944 453.167 322.033 453.633 322.889 454.178 323.9 455.189 324.522 456.122 324.989 457.367 325.144 458.067 325.144 459.933 324.833 461.1 324.211 462.344 323.589 463.122 323.044 463.667 321.956 464.367 320.711 464.833 319.933 464.989 318.378 464.989 317.133 464.678 316.278 464.289 315.422 463.744 314.567 462.967 314.022 462.189 313.478 461.1 313.167 459.856 313.089 458.922 313.244 457.678 313.556 456.667 314.178 455.5 315.033 454.567 315.656 454.022 316.978 453.322 318.144 453.011Z"
                                    />
                                    <path
                                        d="M319.156 439.089 320.011 439.089 321.489 439.322 322.967 439.789 324.211 440.411 325.144 441.033 325.922 441.733 326.856 442.667 327.711 443.911 328.333 445.156 328.8 446.556 329.033 447.722 329.111 448.344 329.111 449.822 328.878 451.3 328.489 452.622 327.867 453.944 327.089 455.033 326.933 455.033 326.311 453.944 325.378 452.856 324.522 452.078 323.433 451.378 322.267 450.833 320.944 450.444 319.156 450.211Z"
                                    />
                                    <path
                                        d="M306.4 454.878 306.789 454.956 308.967 456.2 310.522 457.133 310.6 457.289 310.444 458.922 310.6 460.556 310.989 462.033 311.533 463.2 311.533 463.433 309.356 464.678 307.489 465.767 303.444 468.1 302.122 468.878 301.889 468.878 301.189 467.4 300.8 466.078 300.644 465.144 300.567 463.822 300.722 462.344 300.956 461.256 301.5 459.778 302.044 458.767 302.744 457.756 303.678 456.744 304.533 455.967 305.933 455.111Z"
                                    />
                                    <path
                                        d="M326.7 463.433 327.089 463.511 328.956 464.6 335.022 468.1 336.344 468.878 336.189 469.267 335.644 470.044 334.944 470.9 334.4 471.444 333.233 472.3 331.989 473 330.511 473.544 329.344 473.778 328.878 473.856 326.544 473.856 325.378 473.622 324.133 473.233 322.811 472.611 321.878 471.989 321.878 467.322 322.578 467.011 323.9 466.311 324.833 465.611 325.922 464.522Z"
                                    />
                                    <path
                                        d="M309.667 444.067 311.378 444.067 312.856 444.3 314.489 444.844 315.811 445.544 316.433 445.933 316.433 450.678 315.033 451.3 313.944 452 313.089 452.7 312.544 453.244 311.611 454.567 311.144 454.411 309.822 453.633 303.756 450.133 302.044 449.122 301.967 448.967 302.511 448.111 303.367 447.1 303.989 446.478 305.156 445.622 306.244 445 307.722 444.456 308.578 444.222Z"
                                    />
                                    <path
                                        d="M313.167 465.533 313.478 465.611 314.644 466.467 315.967 467.089 317.211 467.478 318.144 467.633 319.078 467.711 319.156 467.789 319.156 478.833 317.989 478.833 316.433 478.522 315.111 478.056 313.711 477.278 312.7 476.5 311.922 475.8 311.144 474.867 310.367 473.622 309.744 472.222 309.356 470.744 309.2 469.344 309.2 468.489 309.278 467.789 311.222 466.7 312.544 465.922Z"
                                    />
                                    <path
                                        d="M336.267 449.044 336.422 449.044 336.967 450.133 337.433 451.533 337.667 452.778 337.744 454.333 337.589 455.733 337.278 457.056 336.656 458.533 336.111 459.467 335.489 460.322 334.633 461.256 333.467 462.189 332.456 462.811 331.756 463.122 329.811 462.033 327.944 460.944 327.711 460.789 327.867 459.389 327.867 458.222 328.567 457.522 329.578 456.2 330.278 455.033 330.978 453.556 331.522 451.844 332.222 451.378 334.167 450.289 336.033 449.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c303"
                            d="M737.5 460C737.5 446.469 748.469 435.5 762 435.5 775.531 435.5 786.5 446.469 786.5 460 786.5 473.531 775.531 484.5 762 484.5 748.469 484.5 737.5 473.531 737.5 460Z"
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
                                        d="M760.689 452.933 761.622 452.933 762.944 453.167 764.033 453.633 764.889 454.178 765.9 455.189 766.522 456.122 766.989 457.367 767.144 458.067 767.144 459.933 766.833 461.1 766.211 462.344 765.589 463.122 765.044 463.667 763.956 464.367 762.711 464.833 761.933 464.989 760.378 464.989 759.133 464.678 758.278 464.289 757.422 463.744 756.567 462.967 756.022 462.189 755.478 461.1 755.167 459.856 755.089 458.922 755.244 457.678 755.556 456.667 756.178 455.5 757.033 454.567 757.656 454.022 758.978 453.322 760.144 453.011Z"
                                    />
                                    <path
                                        d="M761.156 439.089 762.011 439.089 763.489 439.322 764.967 439.789 766.211 440.411 767.144 441.033 767.922 441.733 768.856 442.667 769.711 443.911 770.333 445.156 770.8 446.556 771.033 447.722 771.111 448.344 771.111 449.822 770.878 451.3 770.489 452.622 769.867 453.944 769.089 455.033 768.933 455.033 768.311 453.944 767.378 452.856 766.522 452.078 765.433 451.378 764.267 450.833 762.944 450.444 761.156 450.211Z"
                                    />
                                    <path
                                        d="M748.4 454.878 748.789 454.956 750.967 456.2 752.522 457.133 752.6 457.289 752.444 458.922 752.6 460.556 752.989 462.033 753.533 463.2 753.533 463.433 751.356 464.678 749.489 465.767 745.444 468.1 744.122 468.878 743.889 468.878 743.189 467.4 742.8 466.078 742.644 465.144 742.567 463.822 742.722 462.344 742.956 461.256 743.5 459.778 744.044 458.767 744.744 457.756 745.678 456.744 746.533 455.967 747.933 455.111Z"
                                    />
                                    <path
                                        d="M768.7 463.433 769.089 463.511 770.956 464.6 777.022 468.1 778.344 468.878 778.189 469.267 777.644 470.044 776.944 470.9 776.4 471.444 775.233 472.3 773.989 473 772.511 473.544 771.344 473.778 770.878 473.856 768.544 473.856 767.378 473.622 766.133 473.233 764.811 472.611 763.878 471.989 763.878 467.322 764.578 467.011 765.9 466.311 766.833 465.611 767.922 464.522Z"
                                    />
                                    <path
                                        d="M751.667 444.067 753.378 444.067 754.856 444.3 756.489 444.844 757.811 445.544 758.433 445.933 758.433 450.678 757.033 451.3 755.944 452 755.089 452.7 754.544 453.244 753.611 454.567 753.144 454.411 751.822 453.633 745.756 450.133 744.044 449.122 743.967 448.967 744.511 448.111 745.367 447.1 745.989 446.478 747.156 445.622 748.244 445 749.722 444.456 750.578 444.222Z"
                                    />
                                    <path
                                        d="M755.167 465.533 755.478 465.611 756.644 466.467 757.967 467.089 759.211 467.478 760.144 467.633 761.078 467.711 761.156 467.789 761.156 478.833 759.989 478.833 758.433 478.522 757.111 478.056 755.711 477.278 754.7 476.5 753.922 475.8 753.144 474.867 752.367 473.622 751.744 472.222 751.356 470.744 751.2 469.344 751.2 468.489 751.278 467.789 753.222 466.7 754.544 465.922Z"
                                    />
                                    <path
                                        d="M778.267 449.044 778.422 449.044 778.967 450.133 779.433 451.533 779.667 452.778 779.744 454.333 779.589 455.733 779.278 457.056 778.656 458.533 778.111 459.467 777.489 460.322 776.633 461.256 775.467 462.189 774.456 462.811 773.756 463.122 771.811 462.033 769.944 460.944 769.711 460.789 769.867 459.389 769.867 458.222 770.567 457.522 771.578 456.2 772.278 455.033 772.978 453.556 773.522 451.844 774.222 451.378 776.167 450.289 778.033 449.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c318"
                            d="M856.5 460C856.5 446.469 867.469 435.5 881 435.5 894.531 435.5 905.5 446.469 905.5 460 905.5 473.531 894.531 484.5 881 484.5 867.469 484.5 856.5 473.531 856.5 460Z"
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
                                        d="M879.689 452.933 880.622 452.933 881.944 453.167 883.033 453.633 883.889 454.178 884.9 455.189 885.522 456.122 885.989 457.367 886.144 458.067 886.144 459.933 885.833 461.1 885.211 462.344 884.589 463.122 884.044 463.667 882.956 464.367 881.711 464.833 880.933 464.989 879.378 464.989 878.133 464.678 877.278 464.289 876.422 463.744 875.567 462.967 875.022 462.189 874.478 461.1 874.167 459.856 874.089 458.922 874.244 457.678 874.556 456.667 875.178 455.5 876.033 454.567 876.656 454.022 877.978 453.322 879.144 453.011Z"
                                    />
                                    <path
                                        d="M880.156 439.089 881.011 439.089 882.489 439.322 883.967 439.789 885.211 440.411 886.144 441.033 886.922 441.733 887.856 442.667 888.711 443.911 889.333 445.156 889.8 446.556 890.033 447.722 890.111 448.344 890.111 449.822 889.878 451.3 889.489 452.622 888.867 453.944 888.089 455.033 887.933 455.033 887.311 453.944 886.378 452.856 885.522 452.078 884.433 451.378 883.267 450.833 881.944 450.444 880.156 450.211Z"
                                    />
                                    <path
                                        d="M867.4 454.878 867.789 454.956 869.967 456.2 871.522 457.133 871.6 457.289 871.444 458.922 871.6 460.556 871.989 462.033 872.533 463.2 872.533 463.433 870.356 464.678 868.489 465.767 864.444 468.1 863.122 468.878 862.889 468.878 862.189 467.4 861.8 466.078 861.644 465.144 861.567 463.822 861.722 462.344 861.956 461.256 862.5 459.778 863.044 458.767 863.744 457.756 864.678 456.744 865.533 455.967 866.933 455.111Z"
                                    />
                                    <path
                                        d="M887.7 463.433 888.089 463.511 889.956 464.6 896.022 468.1 897.344 468.878 897.189 469.267 896.644 470.044 895.944 470.9 895.4 471.444 894.233 472.3 892.989 473 891.511 473.544 890.344 473.778 889.878 473.856 887.544 473.856 886.378 473.622 885.133 473.233 883.811 472.611 882.878 471.989 882.878 467.322 883.578 467.011 884.9 466.311 885.833 465.611 886.922 464.522Z"
                                    />
                                    <path
                                        d="M870.667 444.067 872.378 444.067 873.856 444.3 875.489 444.844 876.811 445.544 877.433 445.933 877.433 450.678 876.033 451.3 874.944 452 874.089 452.7 873.544 453.244 872.611 454.567 872.144 454.411 870.822 453.633 864.756 450.133 863.044 449.122 862.967 448.967 863.511 448.111 864.367 447.1 864.989 446.478 866.156 445.622 867.244 445 868.722 444.456 869.578 444.222Z"
                                    />
                                    <path
                                        d="M874.167 465.533 874.478 465.611 875.644 466.467 876.967 467.089 878.211 467.478 879.144 467.633 880.078 467.711 880.156 467.789 880.156 478.833 878.989 478.833 877.433 478.522 876.111 478.056 874.711 477.278 873.7 476.5 872.922 475.8 872.144 474.867 871.367 473.622 870.744 472.222 870.356 470.744 870.2 469.344 870.2 468.489 870.278 467.789 872.222 466.7 873.544 465.922Z"
                                    />
                                    <path
                                        d="M897.267 449.044 897.422 449.044 897.967 450.133 898.433 451.533 898.667 452.778 898.744 454.333 898.589 455.733 898.278 457.056 897.656 458.533 897.111 459.467 896.489 460.322 895.633 461.256 894.467 462.189 893.456 462.811 892.756 463.122 890.811 462.033 888.944 460.944 888.711 460.789 888.867 459.389 888.867 458.222 889.567 457.522 890.578 456.2 891.278 455.033 891.978 453.556 892.522 451.844 893.222 451.378 895.167 450.289 897.033 449.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M11.5001 543C11.5001 537.753 15.5295 533.5 20.5001 533.5 25.4706 533.5 29.5 537.753 29.5 543 29.5 548.247 25.4706 552.5 20.5001 552.5 15.5295 552.5 11.5001 548.247 11.5001 543Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M11.5001 564C11.5001 558.753 15.5295 554.5 20.5001 554.5 25.4706 554.5 29.5 558.753 29.5 564 29.5 569.247 25.4706 573.5 20.5001 573.5 15.5295 573.5 11.5001 569.247 11.5001 564Z"
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
                            transform="translate(35.5802 545)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(35.4974 567)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M11 520.5C11 515.253 15.0294 511 20 511 24.9706 511 29 515.253 29 520.5 29 525.747 24.9706 530 20 530 15.0294 530 11 525.747 11 520.5Z"
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
                            transform="translate(35.4974 523)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(35.7623 499)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(35.4975 476)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip69)"
                            transform="matrix(0.000104987 0 0 0.000104987 15 465)"
                        >
                            <g clip-path="url(#clip71)" transform="matrix(1.05 0 0 1 -0.015625 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img70"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip72)"
                            transform="matrix(0.000104987 0 0 0.000104987 15 487)"
                        >
                            <g clip-path="url(#clip74)" transform="matrix(1.05 0 0 1 -0.015625 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img73"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1129.1 153.703 1212.7 153.703 1212.7 167.295 1129.1 167.295Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1129.1 153.037 1129.1 167.961"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1212.7 153.037 1212.7 167.961"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1128.44 153.703 1213.37 153.703"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1128.44 167.295 1213.37 167.295"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="b97"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1131.77 164)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip75)"
                            transform="matrix(0.000104987 0 0 0.000104987 1206 154)"
                        >
                            <g clip-path="url(#clip76)" transform="scale(1 1.11429)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img73"
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
        fetch('/chirchiq/server7', { signal: controller.signal })
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
                    if (item.id === 378) {
                        const plus = document.getElementById("g378Plus");
                        const minus = document.getElementById("g378Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(378);
                        } else {
                            falseAnimation(378);
                        }
                    } else if (item.id === 333) {
                        const plus = document.getElementById("g333Plus");
                        const minus = document.getElementById("g333Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(333);
                        } else {
                            falseAnimation(333);
                        }
                    } else if (item.id === 423) {
                        const plus = document.getElementById("g423Plus");
                        const minus = document.getElementById("g423Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(423);
                        } else {
                            falseAnimation(423);
                        }
                    } else if (item.id === 393) {
                        const plus = document.getElementById("g393Plus");
                        const minus = document.getElementById("g393Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(393);
                        } else {
                            falseAnimation(393);
                        }
                    } else if (item.id === 408) {
                        const plus = document.getElementById("g408Plus");
                        const minus = document.getElementById("g408Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(408);
                        } else {
                            falseAnimation(408);
                        }
                    } else if (item.id === 348) {
                        const plus = document.getElementById("g348Plus");
                        const minus = document.getElementById("g348Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(348);
                        } else {
                            falseAnimation(348);
                        }
                    } else if (item.id === 363) {
                        const plus = document.getElementById("g363Plus");
                        const minus = document.getElementById("g363Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (-1 * item.value !== 0) {
                            trueAnimation(363);
                        } else {
                            falseAnimation(363);
                        }
                    }
                    else if(item.id === 386) {
                        const value = document.getElementById("g386");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                        const w = document.getElementById("w386");
                        w.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 438) {
                        const value = document.getElementById("g438");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (-1 * item.value !== 0) {
                            trueAnimation(438);
                            trueAnimation(4381);
                            trueAnimation(4382);
                        } else {
                            falseAnimation(438);
                            falseAnimation(4381);
                            falseAnimation(4382);
                        }
                    } else if(item.id === 453) {
                        const value = document.getElementById("g453");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (-1 * item.value !== 0) {
                            trueAnimation(453);
                            trueAnimation(4531);
                            trueAnimation(4532);
                            c2 = 1;
                        } else {
                            falseAnimation(453);
                            falseAnimation(4531);
                            falseAnimation(4532);
                            c2 = 0;
                        }
                    } else if(item.id === 97) {
                        const value = document.getElementById("b97");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(97);
                            trueAnimation(9701);
                            trueAnimation(9702);
                        } else {
                            falseAnimation(97);
                            falseAnimation(9701);
                            falseAnimation(9702);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 273) {
                        const value = document.getElementById("g273");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a273");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 21 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(273);
                            trueAnimation(2731);
                            trueAnimation(2732);
                            trueAnimation(2733);
                        } else {
                            falseAnimation(273);
                            falseAnimation(2731);
                            falseAnimation(2732);
                            falseAnimation(2733);
                        }
                    } else if(item.id === 274) {
                        const value = document.getElementById("g274");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 275) {
                        const value = document.getElementById("k273");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 276) {
                        const value = document.getElementById("n273");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 277) {
                        const value = document.getElementById("w273");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 288) {
                        const value = document.getElementById("g288");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a288");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 21.6 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(288);
                            trueAnimation(2881);
                            trueAnimation(2882);
                            trueAnimation(2883);
                            c1 = 1;
                        } else {
                            falseAnimation(288);
                            falseAnimation(2881);
                            falseAnimation(2882);
                            falseAnimation(2883);
                            c1 = 0;
                        }
                    } else if(item.id === 289) {
                        const value = document.getElementById("g289");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 290) {
                        const value = document.getElementById("k288");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 291) {
                        const value = document.getElementById("n288");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 292) {
                        const value = document.getElementById("w288");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 303) {
                        const value = document.getElementById("g303");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a303");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 21.6 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(303);
                            trueAnimation(3031);
                            trueAnimation(3032);
                            trueAnimation(3033);
                        } else {
                            falseAnimation(303);
                            falseAnimation(3031);
                            falseAnimation(3032);
                            falseAnimation(3033);
                        }
                    } else if(item.id === 304) {
                        const value = document.getElementById("g304");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 305) {
                        const value = document.getElementById("k303");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 306) {
                        const value = document.getElementById("n303");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 307) {
                        const value = document.getElementById("w303");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-4
                    else if(item.id === 318) {
                        const value = document.getElementById("g318");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a318");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 21.6 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(318);
                            trueAnimation(3181);
                            trueAnimation(3182);
                            trueAnimation(3183);
                            c3 = 1;
                        } else {
                            falseAnimation(318);
                            falseAnimation(3181);
                            falseAnimation(3182);
                            falseAnimation(3183);
                            c3 = 0;
                        }
                    } else if(item.id === 319) {
                        const value = document.getElementById("g319");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 320) {
                        const value = document.getElementById("k318");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 321) {
                        const value = document.getElementById("n318");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 322) {
                        const value = document.getElementById("w318");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }

                    else if(item.id === 39) {
                        if (item.value !== 0) {
                            trueAnimation(39);
                            c4 = 1;
                        } else {
                            falseAnimation(39);
                            c4 = 0;
                        }
                    } else if(item.id === 12) {
                        if (item.value !== 0) {
                            trueAnimation(12);
                        } else {
                            falseAnimation(12);
                        }
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