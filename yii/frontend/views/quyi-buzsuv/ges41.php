<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-41';

$id = 46;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$energy = new Energy();
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);

$urlTransformer1 = $energy->getTransformer($id, 111);
$urlTransformer2 = $energy->getTransformer($id, 112);
$urlTransformer3 = $energy->getTransformer($id, 113);
$urlTransformer4 = $energy->getTransformer($id, 114);
$urlTransformer5 = $energy->getTransformer($id, 115);

$urlSwitch1 = $energy->getSwitch($id, 276);
$urlSwitch2 = $energy->getSwitch($id, 277);
$urlSwitch3 = $energy->getSwitch($id, 278);
$urlSwitch4 = $energy->getSwitch($id, 279);
$urlSwitch5 = $energy->getSwitch($id, 280);
$urlSwitch6 = $energy->getSwitch($id, 281);
$urlSwitch7 = $energy->getSwitch($id, 282);
$urlSwitch8 = $energy->getSwitch($id, 283);
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
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOZJREFUSEvtl1EOhCAMRCuriKKu9z/tBhRpp3VP0PdJX6LOQCJEnSFIPmzGGEELYUSlMqEWJlQq7rlXcM+9gnvuFdxzr+Ce+SMWZ9RCin28rDcZrRBCbsONcPQC7bhishGtuGZwRKLRejGgBvTFVcV+fbIORJJacv+fnM+WoW6CMzSNaMEZY+0axQOnD5l1R3Ti+OHLNXqtZZYaUUKjUoqQ2LUYOxVvC4W7CIneEK0IiQon2/cKVQsrQiJrUZF0eDiyCAmvBYqQ9HAWHElaOLoISavl2ZtvXKfFLEJSTotdhCQmdiIefgYCEnC+WqtNAAAAAElFTkSuQmCC"
                            preserveAspectRatio="none"
                            id="img1"
                        ></image>
                        <clipPath id="clip2">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip3">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOFJREFUSEvtl1kOxTAIA5PQfX33P+0TXbFDb8B8wkiR7EZKU2JykabloUMjIh0Pa3pRBh4z+dCkjLxA2un0ZOYNslyayMory/BoIpmXL20xXsPbl85oIguvb1bQRDYWTkZ7qjL5tWgRiBvOWQTihLOxo9S1PEUgVTgYyUuPmi0CgVqgCATCmXlrMLVwEchTS/4+VSn3yXURyHVbvCKQ47a4RSBay0cRyJzSzjOXPvHkg7TPF1445V6asNs6ns79oH+sfVyQOqDwlPDCU8ILTwkvPCW88JSRNale9yf8ELN/C393qxyRJJMMtwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img4"
                        ></image>
                        <clipPath id="clip5">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip6">
                            <rect x="-4.65661e-10" y="9.31323e-10" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="-4.65661e-10" width="47625" height="114300" />
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
                            <rect x="0" y="-4.65661e-10" width="47625" height="114300" />
                        </clipPath>
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
                            <rect x="0" y="0" width="1247775" height="1238250" />
                        </clipPath>
                        <image
                            width="256"
                            height="256"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAACxMAAAsTAQCanBgAAFpxSURBVHhe7Z0HWFTXur+3JsaYGBUrKp0BlKLY6WhiN0VjT8QSY48Jauzi0MsMvaMgRUB670VEkCIgitiiCWrO+Z9y7znk3lPuuTc5+f7P2nvWnj177xlAMcd41u953ifFYdYAvt9aa++11qYoEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISklcuK79O1F61L02L//9JSEhe4Sw/eE5nmWv8tWWuF2DJlxf+ufTQhfT3d8e9xX8dCQnJK5ilX52/guRnOXQBln0VH8h/HQkJySsW5/2RI5e5JqjKf+gCLDl04T7/tSQkJK9YPvoqcQxffqYAxPfwX0tCQvKKhRQAEpJfYd774tzWJQfj6xZ/GX91ycGEAxQFQ/iv6U/YAsCRnykACc9cANAFxGWuSd7LDie3LjucVLTM9YIj/zUkJCTPmCUHzx1Y8mU8MCQwfBHvwX9df0IXAJ78yw4lwpJDSc9cABYfSyteeiwNlhxPhyUnLsF7x9P/18kt05b/OhISkmfI4i/O3VeR/8sEeO/LhH+855pgxH9tX6ELwOFEWHY4CZYdSYalX6fA0qOpsPjri89UAN71KFizyL0AuMw6mgJjtwVc5L+WhITkGbLki/jfs/J/dQGWuCbC4kNJ8N7XSfn81/YVZ2n+mEXu+SAkd8AFYHlY2XBn94JvufJbuCaA1lY/GO3iW8J/PQkJyTPE2S0nwflsLjhJ8zjk0zi45b/Hf72mDGYBWOSed5Irv8kXsbT8iDEuvvv5rychIXmGvHsqc6qDNPevfPnpAiDN7XKW1r3O/xp1WS4tGyWUH5H3kP9aTXH0zp28SJr330h857N5oL83gpV/9Kc+dylnab8/EwkJSR9xPJvrJlYAEI5ncw/wX68pi9xzO/kFYKFH/jn+6zRlkXtBIpLf0S0Hpu4KYeXXcvED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"
                            preserveAspectRatio="none"
                            id="img21"
                        ></image>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="1238250" height="1238250" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip25">
                            <rect x="0" y="0" width="1190625" height="581025" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img26"
                        ></image>
                        <clipPath id="clip27">
                            <rect x="0" y="0" width="1190625" height="580048" />
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
                            d="M174.5 575.5 233.09 575.5"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 509.858 0.920735"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 829.358 509.5)"
                        />
                        <path
                            d="M1239.81 311.54 640.5 311.5"
                            stroke="#6600CC"
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
                            font-weight="700"
                            font-size="11"
                            transform="translate(1033.4 192)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1040.57 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1044.07 192)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1051.23 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1054.73 192)"
                        >
                            1
                        </text>
                        <path
                            d="M0 0 0.0529134 70.9395"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 697.5 506.44)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(713.49 351)"
                        >
                            Р
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(719.99 351)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(723.49 351)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(746.656 351)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(750.156 351)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(641.761 377)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(664.927 377)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(668.427 377)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(633.427 390)"
                        >
                            10/0,4кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(634.094 403)"
                        >
                            250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(652.761 403)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(601.094 416)"
                        >
                            SCB11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(632.594 416)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(636.094 416)"
                        >
                            250/10,5
                        </text>
                        <path
                            d="M1.83333-2.18851e-06 1.83343 80.6149-1.83324 80.6149-1.83333 2.18851e-06ZM9.62328e-05 80.6149 5.50009 76.9482 0.000104987 87.9482-5.49991 76.9482Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 1018 216.948)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(976.715 230)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(983.882 230)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(987.382 230)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(952.382 243)"
                        >
                            10/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(979.382 243)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(939.715 256)"
                        >
                            16 000 кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(928.382 269)"
                        >
                            SF
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(940.882 269)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(944.382 269)"
                        >
                            16000/38,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(568.526 26)"
                        >
                            Куйи
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(617.226 26)"
                        >
                            Бузсув
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(678.013 26)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(716.013 26)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(722.179 26)"
                        >
                            41
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(292.609 119)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(302.943 119)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(306.943 119)"
                        >
                            Плотина 6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(366.443 119)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(152.248 413)"
                        >
                            Солнечный
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(157.415 426)"
                        >
                            инвертор
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(69.7388 327)"
                        >
                            КРУ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(90.4055 327)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(93.9055 327)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(115.239 327)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(135.621 472)"
                        >
                            SIFRA
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(165.954 472)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(169.454 472)"
                        >
                            B
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(138.287 485)"
                        >
                            100 кВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(552.233 534)"
                        >
                            МСА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(970.597 114)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(979.597 114)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(983.597 114)"
                        >
                            Пскент
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(1023.1 114)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(1027.1 114)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(1036.1 114)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="12"
                            transform="translate(1051.1 114)"
                        >
                            кВ
                        </text>
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 695.5 511.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(765.589 519)"
                        >
                            СШ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(786.256 519)"
                        >
                            0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(802.256 519)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1130.91 377)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1137.75 377)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1141.25 377)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1130.91 390)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1152.25 390)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1130.91 403)"
                        >
                            5,7 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1130.91 416)"
                        >
                            SF5700
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1164.75 416)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1168.25 416)"
                        >
                            24/3900
                        </text>
                        <path
                            d="M0 0 0.000104987 15.5416"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1099.5 327.042)"
                        />
                        <a href="<?= $urlSwitch6 ?>">
                            <rect id="c1736"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1090.5 346.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1115.1 340)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1122.26 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1125.76 340)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1132.6 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1136.1 340)"
                        >
                            2
                        </text>
                        <path
                            d="M1099.97 368.904 1099.5 346.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1097.5 314.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(943.912 377)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(950.746 377)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(954.246 377)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(943.912 390)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(965.246 390)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(943.912 403)"
                        >
                            5,7 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(943.912 416)"
                        >
                            SF5700
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(977.746 416)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(981.246 416)"
                        >
                            24/3900
                        </text>
                        <path
                            d="M0 0 0.000104987 15.5416"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 912.5 327.042)"
                        />
                        <a href="<?= $urlSwitch5 ?>">
                            <rect id="c1708"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 903.5 346.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(928.098 340)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(935.264 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(938.764 340)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(945.598 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(949.098 340)"
                        >
                            1
                        </text>
                        <path
                            d="M912.971 368.904 912.5 346.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 910.5 314.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1180.75 326)"
                        >
                            КРУ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1201.42 326)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1204.92 326)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1226.25 326)"
                        >
                            кВ
                        </text>
                        <path
                            d="M1163.27 291.022 1231.19 291.022 1231.19 303.822 1163.27 303.822Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1163.27 290.355 1163.27 304.489"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1231.19 290.355 1231.19 304.489"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1162.6 291.022 1231.85 291.022"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1162.6 303.822 1231.85 303.822"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1852"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1167.05 301)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M697.867 377.901 697.5 313.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 694.5 313.5)"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect id="c1768"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 688.5 356.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c17682"
                                d="M0 16.5C-2.03701e-15 7.3873 7.16344-2.10067e-15 16-4.20134e-15 24.8366-8.40268e-15 32 7.3873 32 16.5 32 25.6127 24.8366 33 16 33 7.16344 33-1.01851e-14 25.6127 0 16.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 681.5 435.5)"
                            />
                            <path id="c17681"
                                d="M0 16.5C-2.03701e-15 7.3873 7.16344-2.10067e-15 16-4.20134e-15 24.8366-8.40268e-15 32 7.3873 32 16.5 32 25.6127 24.8366 33 16 33 7.16344 33-1.01851e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 681.5 411.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch2 ?>">
                            <rect id="c1858"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1009.5 196.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c18582"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1001.5 275.5)"
                            />
                            <path id="c18581"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1001.5 251.5)"
                            />
                        </a>
                        <path
                            d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1015.5 313.5)"
                        />
                        <path
                            d="M1018.56 309.216 1018.5 275.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M976.464 67.8151 1060.06 67.8151 1060.06 81.4063 976.464 81.4063Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M976.464 81.4063 1060.06 81.4063 1060.06 94.9975 976.464 94.9975Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M975.797 81.4063 1060.73 81.4063"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M976.464 67.1485 976.464 95.6641"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1060.06 67.1485 1060.06 95.6641"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M975.797 67.8151 1060.73 67.8151"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M975.797 94.9975 1060.73 94.9975"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1824"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(980.243 78)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1823"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(980.243 91)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 1053 68)"
                        >
                            <g clip-path="url(#clip2)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip3)"
                            transform="matrix(0.000104987 0 0 0.000104987 1054 82)"
                        >
                            <g clip-path="url(#clip5)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch8 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 555.5 519.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.0529134 70.9395"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 432.5 507.44)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(448.823 352)"
                        >
                            Р
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(455.323 352)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(458.823 352)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(481.99 352)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(485.49 352)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(456.761 378)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(479.927 378)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(483.427 378)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(456.761 391)"
                        >
                            10/0,4кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(456.761 404)"
                        >
                            250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(475.427 404)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(456.761 417)"
                        >
                            SCB11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(488.261 417)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(491.761 417)"
                        >
                            250/10,5
                        </text>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 430.5 512.5)"
                        />
                        <path
                            d="M432.867 378.901 432.5 314.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 430.5 314.5)"
                        />
                        <a href="<?= $urlSwitch3 ?>">
                            <rect id="c1795"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 424.5 357.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c17952"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 416.5 436.5)"
                            />
                            <path id="c17951"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 416.5 412.5)"
                            />
                        </a>
                        <path
                            d="M0 0 425.553 0.684199"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 489.053 311.5)"
                        />
                        <path
                            d="M1.83333-2.18851e-06 1.83343 80.6149-1.83324 80.6149-1.83333 2.18851e-06ZM9.62328e-05 80.6149 5.50009 76.9482 0.000104987 87.9482-5.49991 76.9482Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 337 216.948)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(296.1 227)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(303.267 227)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(306.767 227)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(269.1 240)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(279.767 240)"
                        >
                            ,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(287.767 240)"
                        >
                            /
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(290.767 240)"
                        >
                            6 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(275.1 253)"
                        >
                            250кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(213.1 270)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(230.267 270)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(233.767 270)"
                        >
                            250/10,5 У112:09
                        </text>
                        <a href="<?= $urlSwitch1 ?>">
                            <rect id="c17953"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 328.5 195.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c17955"
                                d="M0 16.5C-2.03701e-15 7.3873 7.16344-2.10067e-15 16-4.20134e-15 24.8366-8.40268e-15 32 7.3873 32 16.5 32 25.6127 24.8366 33 16 33 7.16344 33-1.01851e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 321.5 274.5)"
                            />
                            <path id="c17954"
                                d="M0 16.5C-2.03701e-15 7.3873 7.16344-2.10067e-15 16-4.20134e-15 24.8366-8.40268e-15 32 7.3873 32 16.5 32 25.6127 24.8366 33 16 33 7.16344 33-1.01851e-14 25.6127 0 16.5Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 321.5 250.5)"
                            />
                        </a>
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 335.5 314.5)"
                        />
                        <path
                            d="M337.565 309.051 337.5 274.5"
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
                            font-size="11"
                            transform="translate(355.438 192)"
                        >
                            Р
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(361.938 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(365.438 192)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(372.604 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(376.104 192)"
                        >
                            2
                        </text>
                        <path
                            d="M0 0 0.000104987 127.994"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 231.5 575.494)"
                        />
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c18902"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 214.5 447.5)"
                            />
                            <path id="c18901"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 214.5 423.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.000104987 21.03"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 231.5 389.53)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(361.093 478)"
                        >
                            А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(368.759 478)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(372.259 478)"
                        >
                            СП
                        </text>
                        <path
                            d="M251.859 468.687 335.459 468.687 335.459 482.278 251.859 482.278Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M251.859 468.02 251.859 482.944"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M335.459 468.02 335.459 482.944"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M251.193 468.687 336.126 468.687"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M251.193 482.278 336.126 482.278"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1890"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(255.639 479)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip6)"
                            transform="matrix(-0.000104987 1.28572e-20 -1.28572e-20 -0.000104987 330 481)"
                        >
                            <g
                                clip-path="url(#clip7)"
                                transform="matrix(1 1.35342e-23 -2.45364e-24 1.02857 0.25 0)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0 0 118.955 0.000104987"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 351.455 369.5)"
                        />
                        <path
                            d="M1.5-1.12161e-06 1.5001 140.406-1.49989 140.406-1.5 1.12161e-06ZM-4.5 3.36482e-06C-4.5-2.48528-2.48528-4.5-3.36482e-06-4.5 2.48528-4.5 4.5-2.48528 4.5-3.36482e-06 4.5 2.48528 2.48528 4.5 3.36482e-06 4.5-2.48528 4.5-4.5 2.48528-4.5 3.36482e-06Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 350.5 508.906)"
                        />
                        <a href="<?= $urlSwitch7 ?>">
                            <rect id="c1890"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 340.5 484.5)"
                            />
                        </a>
                        <path
                            d="M1041.23 229.662 1124.83 229.662 1124.83 243.253 1041.23 243.253Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1041.23 243.253 1124.83 243.253 1124.83 256.844 1041.23 256.844Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1040.57 243.253 1125.5 243.253"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1041.23 228.995 1041.23 257.511"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1124.83 228.995 1124.83 257.511"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1040.57 229.662 1125.5 229.662"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1040.57 256.844 1125.5 256.844"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1858Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1045.01 240)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1858Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1045.01 253)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip8)"
                            transform="matrix(0.000104987 0 0 0.000104987 1118 230)"
                        >
                            <g clip-path="url(#clip9)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 1119 244)"
                        >
                            <g clip-path="url(#clip11)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M455.818 423.654 539.418 423.654 539.418 437.245 455.818 437.245Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M455.818 437.245 539.418 437.245 539.418 450.836 455.818 450.836Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M455.152 437.245 540.085 437.245"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M455.818 422.987 455.818 451.503"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M539.418 422.987 539.418 451.503"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M455.152 423.654 540.085 423.654"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M455.152 450.836 540.085 450.836"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1795Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(459.598 434)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1795Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(459.598 447)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip12)"
                            transform="matrix(0.000104987 0 0 0.000104987 533 424)"
                        >
                            <g clip-path="url(#clip13)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip14)"
                            transform="matrix(0.000104987 0 0 0.000104987 533 438)"
                        >
                            <g clip-path="url(#clip15)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M594.805 423.654 678.404 423.654 678.404 437.245 594.805 437.245Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M594.805 437.245 678.404 437.245 678.404 450.836 594.805 450.836Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M594.138 437.245 679.071 437.245"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M594.805 422.987 594.805 451.503"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M678.404 422.987 678.404 451.503"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M594.138 423.654 679.071 423.654"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M594.138 450.836 679.071 450.836"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1768Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(598.584 434)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1768Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(598.584 447)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip16)"
                            transform="matrix(0.000104987 0 0 0.000104987 672 424)"
                        >
                            <g clip-path="url(#clip17)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip18)"
                            transform="matrix(0.000104987 0 0 0.000104987 672 438)"
                        >
                            <g clip-path="url(#clip19)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M652.833 510 652.833 534.73 649.167 534.73 649.167 510ZM651 534.73 656.5 531.063 651 542.063 645.5 531.063Z"
                            fill="#989898"
                        />
                        <path
                            d="M620.833 511 620.833 535.73 617.167 535.73 617.167 511ZM619 535.73 624.5 532.063 619 543.063 613.5 532.063Z"
                            fill="#989898"
                        />
                        <path
                            d="M415.833 509 415.833 533.73 412.167 533.73 412.167 509ZM414 533.73 419.5 530.063 414 541.063 408.5 530.063Z"
                            fill="#989898"
                        />
                        <path
                            d="M383.833 510 383.833 534.73 380.167 534.73 380.167 510ZM382 534.73 387.5 531.063 382 542.063 376.5 531.063Z"
                            fill="#989898"
                        />
                        <g
                            clip-path="url(#clip20)"
                            transform="matrix(0.000104987 0 0 0.000104987 110 480)"
                        >
                            <g
                                clip-path="url(#clip22)"
                                transform="matrix(1.00769 0 0 1 -0.0625 -0.5)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img21"
                                    transform="scale(4836.91 4836.91)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M19.5001 570C19.5001 564.753 23.7533 560.5 29.0001 560.5 34.2468 560.5 38.5001 564.753 38.5001 570 38.5001 575.247 34.2468 579.5 29.0001 579.5 23.7533 579.5 19.5001 575.247 19.5001 570Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M19.5001 592C19.5001 586.753 23.7533 582.5 29.0001 582.5 34.2468 582.5 38.5001 586.753 38.5001 592 38.5001 597.247 34.2468 601.5 29.0001 601.5 23.7533 601.5 19.5001 597.247 19.5001 592Z"
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
                            transform="translate(44.0168 572)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(43.9341 594)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M19 547.5C19 542.253 23.2533 538 28.5 538 33.7467 538 38 542.253 38 547.5 38 552.747 33.7467 557 28.5 557 23.2533 557 19 552.747 19 547.5Z"
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
                            transform="translate(43.9341 550)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(44.199 527)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(43.9342 504)"
                        >
                            прием
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 24 492)">
                            <g clip-path="url(#clip23)" transform="scale(1 1.07143)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 24 514)">
                            <g clip-path="url(#clip24)" transform="scale(1 1.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip25)"
                            transform="matrix(0.000104987 0 0 0.000104987 1053 26)"
                        >
                            <g clip-path="url(#clip27)" transform="matrix(1 0 0 1.00168 0 -0.015625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img26"
                                    transform="scale(7632.21 7632.21)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1075.17 22.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1174.5 76.1712)"
                        />
                        <path
                            d="M1171.55 88.0309 1163.86 79.6543 1164.35 79.2035 1172.04 87.58ZM1164.11 79.4289 1163.95 83.1967 1160.5 75.5001 1167.87 79.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1181.95 88.8892 1172.5 88.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1079.12 8.22478 1173.49 8.22478 1173.49 21.0248 1079.12 21.0248Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1079.12 7.55811 1079.12 21.6914"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1173.49 7.55811 1173.49 21.6914"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1078.45 8.22478 1174.15 8.22478"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1078.45 21.0248 1174.15 21.0248"
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
                                transform="translate(1082.9 18)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1093.4 18)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1074.5 22.5001 1093.69 22.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1181.61 75.3084 1269.27 75.3084 1269.27 88.1084 1181.61 88.1084Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1181.61 74.6418 1181.61 88.7751"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1269.27 74.6418 1269.27 88.7751"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1180.94 75.3084 1269.93 75.3084"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1180.94 88.1084 1269.93 88.1084"
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
                                transform="translate(1185.39 85)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1195.89 85)"
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
                            transform="matrix(1 0 0 -1 1071.5 30.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1180.99 48.5001)"
                        />
                        <path
                            d="M1181.5 48.5001 1200.69 48.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1185.81 35.1249 1259 35.1249 1259 47.9249 1185.81 47.9249Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1185.81 34.4583 1185.81 48.5916"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1259 34.4583 1259 48.5916"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1185.14 35.1249 1259.67 35.1249"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1185.14 47.9249 1259.67 47.9249"
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
                                transform="translate(1189.59 45)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1157.5 76.5001 1180.21 76.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M64.6954 295.626 132.615 295.626 132.615 308.426 64.6954 308.426Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M64.6954 294.96 64.6954 309.093"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M132.615 294.96 132.615 309.093"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M64.0288 295.626 133.282 295.626"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M64.0288 308.426 133.282 308.426"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(68.475 306)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M762.162 492.33 830.082 492.33 830.082 505.13 762.162 505.13Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M762.162 491.664 762.162 505.797"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M830.082 491.664 830.082 505.797"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M761.496 492.33 830.749 492.33"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M761.496 505.13 830.749 505.13"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1798"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(765.942 502)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M1040.22 420.814 1163.27 420.814 1163.27 433.614 1040.22 433.614Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1040.22 433.614 1163.27 433.614 1163.27 446.414 1040.22 446.414Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1040.22 446.414 1163.27 446.414 1163.27 459.214 1040.22 459.214Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1040.22 459.214 1163.27 459.214 1163.27 472.014 1040.22 472.014Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1040.22 472.014 1163.27 472.014 1163.27 484.814 1040.22 484.814Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1040.22 484.814 1163.27 484.814 1163.27 497.614 1040.22 497.614Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1039.55 433.614 1163.93 433.614"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1039.55 446.414 1163.93 446.414"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1039.55 459.214 1163.93 459.214"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1039.55 472.014 1163.93 472.014"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1039.55 484.814 1163.93 484.814"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1040.22 420.148 1040.22 498.281"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1163.27 420.148 1163.27 498.281"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1039.55 420.814 1163.93 420.814"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1039.55 497.614 1163.93 497.614"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1736"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1044 431)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1740"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1044 444)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a1736"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1044 456)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k1736"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1044 469)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n1736"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1044 482)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w1736" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1044 495)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M853.217 420.814 976.267 420.814 976.267 433.614 853.217 433.614Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M853.217 433.614 976.267 433.614 976.267 446.414 853.217 446.414Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M853.217 446.414 976.267 446.414 976.267 459.214 853.217 459.214Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M853.217 459.214 976.267 459.214 976.267 472.014 853.217 472.014Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M853.217 472.014 976.267 472.014 976.267 484.814 853.217 484.814Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M853.217 484.814 976.267 484.814 976.267 497.614 853.217 497.614Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M852.55 433.614 976.934 433.614"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M852.55 446.414 976.934 446.414"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M852.55 459.214 976.934 459.214"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M852.55 472.014 976.934 472.014"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M852.55 484.814 976.934 484.814"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M853.217 420.148 853.217 498.281"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M976.267 420.148 976.267 498.281"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M852.55 420.814 976.934 420.814"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M852.55 497.614 976.934 497.614"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1708"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(856.996 431)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1712"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(856.996 444)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a1708"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(856.996 456)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k1708"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(856.996 469)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n1708"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(856.996 482)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w1708" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(856.996 495)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c17361"
                            d="M1076.5 391.5C1076.5 378.245 1087.47 367.5 1101 367.5 1114.53 367.5 1125.5 378.245 1125.5 391.5 1125.5 404.755 1114.53 415.5 1101 415.5 1087.47 415.5 1076.5 404.755 1076.5 391.5Z"
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
                                            transform="matrix(1 0 0 1.01205 1100.19 384.933)"
                                        />
                                        <path
                                            d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                            transform="matrix(1 0 0 1.01205 1100.65 371.089)"
                                        />
                                        <path
                                            d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                            transform="matrix(1 0 0 1.01205 1088.05 386.878)"
                                        />
                                        <path
                                            d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                            transform="matrix(1 0 0 1.01205 1108.11 395.433)"
                                        />
                                        <path
                                            d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                            transform="matrix(1 0 0 1.01205 1091.28 376.067)"
                                        />
                                        <path
                                            d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                            transform="matrix(1 0 0 1.01205 1094.74 397.533)"
                                        />
                                        <path
                                            d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                            transform="matrix(1 0 0 1.01205 1117.56 381.044)"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c17081"
                            d="M889.5 392C889.5 378.469 900.469 367.5 914 367.5 927.531 367.5 938.5 378.469 938.5 392 938.5 405.531 927.531 416.5 914 416.5 900.469 416.5 889.5 405.531 889.5 392Z"
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
                                            d="M912.689 385.933 913.622 385.933 914.944 386.167 916.033 386.633 916.889 387.178 917.9 388.189 918.522 389.122 918.989 390.367 919.144 391.067 919.144 392.933 918.833 394.1 918.211 395.344 917.589 396.122 917.044 396.667 915.956 397.367 914.711 397.833 913.933 397.989 912.378 397.989 911.133 397.678 910.278 397.289 909.422 396.744 908.567 395.967 908.022 395.189 907.478 394.1 907.167 392.856 907.089 391.922 907.244 390.678 907.556 389.667 908.178 388.5 909.033 387.567 909.656 387.022 910.978 386.322 912.144 386.011Z"
                                        />
                                        <path
                                            d="M913.156 372.089 914.011 372.089 915.489 372.322 916.967 372.789 918.211 373.411 919.144 374.033 919.922 374.733 920.856 375.667 921.711 376.911 922.333 378.156 922.8 379.556 923.033 380.722 923.111 381.344 923.111 382.822 922.878 384.3 922.489 385.622 921.867 386.944 921.089 388.033 920.933 388.033 920.311 386.944 919.378 385.856 918.522 385.078 917.433 384.378 916.267 383.833 914.944 383.444 913.156 383.211Z"
                                        />
                                        <path
                                            d="M900.4 387.878 900.789 387.956 902.967 389.2 904.522 390.133 904.6 390.289 904.444 391.922 904.6 393.556 904.989 395.033 905.533 396.2 905.533 396.433 903.356 397.678 901.489 398.767 897.444 401.1 896.122 401.878 895.889 401.878 895.189 400.4 894.8 399.078 894.644 398.144 894.567 396.822 894.722 395.344 894.956 394.256 895.5 392.778 896.044 391.767 896.744 390.756 897.678 389.744 898.533 388.967 899.933 388.111Z"
                                        />
                                        <path
                                            d="M920.7 396.433 921.089 396.511 922.956 397.6 929.022 401.1 930.344 401.878 930.189 402.267 929.644 403.044 928.944 403.9 928.4 404.444 927.233 405.3 925.989 406 924.511 406.544 923.344 406.778 922.878 406.856 920.544 406.856 919.378 406.622 918.133 406.233 916.811 405.611 915.878 404.989 915.878 400.322 916.578 400.011 917.9 399.311 918.833 398.611 919.922 397.522Z"
                                        />
                                        <path
                                            d="M903.667 377.067 905.378 377.067 906.856 377.3 908.489 377.844 909.811 378.544 910.433 378.933 910.433 383.678 909.033 384.3 907.944 385 907.089 385.7 906.544 386.244 905.611 387.567 905.144 387.411 903.822 386.633 897.756 383.133 896.044 382.122 895.967 381.967 896.511 381.111 897.367 380.1 897.989 379.478 899.156 378.622 900.244 378 901.722 377.456 902.578 377.222Z"
                                        />
                                        <path
                                            d="M907.167 398.533 907.478 398.611 908.644 399.467 909.967 400.089 911.211 400.478 912.144 400.633 913.078 400.711 913.156 400.789 913.156 411.833 911.989 411.833 910.433 411.522 909.111 411.056 907.711 410.278 906.7 409.5 905.922 408.8 905.144 407.867 904.367 406.622 903.744 405.222 903.356 403.744 903.2 402.344 903.2 401.489 903.278 400.789 905.222 399.7 906.544 398.922Z"
                                        />
                                        <path
                                            d="M930.267 382.044 930.422 382.044 930.967 383.133 931.433 384.533 931.667 385.778 931.744 387.333 931.589 388.733 931.278 390.056 930.656 391.533 930.111 392.467 929.489 393.322 928.633 394.256 927.467 395.189 926.456 395.811 925.756 396.122 923.811 395.033 921.944 393.944 921.711 393.789 921.867 392.389 921.867 391.222 922.567 390.522 923.578 389.2 924.278 388.033 924.978 386.556 925.522 384.844 926.222 384.378 928.167 383.289 930.033 382.2Z"
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

        // Add a thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        fetch('/quyi-buzsuv/server41', { signal: controller.signal })
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
                    if (item.id === 1795) {
                        const plus = document.getElementById("g1795Plus");
                        const minus = document.getElementById("g1795Minus");
                        const g = document.getElementById("g1");
                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            g.textContent = "U= 10,5 кВ";
                            trueAnimation(1795);
                            trueAnimation(17951);
                            trueAnimation(17952);
                            trueAnimation(17953);
                            trueAnimation(17954);
                            trueAnimation(17955);
                        } else {
                            g.textContent = "U= 0,0 кВ";
                            falseAnimation(1795);
                            falseAnimation(17951);
                            falseAnimation(17952);
                            falseAnimation(17953);
                            falseAnimation(17954);
                            falseAnimation(17955);
                        }
                    } else if (item.id === 1768) {
                        const plus = document.getElementById("g1768Plus");
                        const minus = document.getElementById("g1768Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1768);
                            trueAnimation(17681);
                            trueAnimation(17682);
                        } else {
                            falseAnimation(1768);
                            falseAnimation(17681);
                            falseAnimation(17682);
                        }
                    } else if (item.id === 1858) {
                        const plus = document.getElementById("g1858Plus");
                        const minus = document.getElementById("g1858Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1858);
                            trueAnimation(18581);
                            trueAnimation(18582);
                        } else {
                            falseAnimation(1858);
                            falseAnimation(18581);
                            falseAnimation(18582);
                        }
                    } else if(item.id === 1824) {
                        const value = document.getElementById("g1824");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                    } else if(item.id === 1823) {
                        const value = document.getElementById("g1823");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                    } else if(item.id === 1852) {
                        const value = document.getElementById("g1852");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1798) {
                        const value = document.getElementById("g1798");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1890) {
                        const value = document.getElementById("g1890");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1890);
                            trueAnimation(18901);
                            trueAnimation(18902);
                        } else {
                            falseAnimation(1890);
                            falseAnimation(18901);
                            falseAnimation(18902);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 1708) {
                        const value = document.getElementById("g1708");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a1708");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 5.7 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(1708);
                            trueAnimation(17081);
                        } else {
                            falseAnimation(1708);
                            falseAnimation(17081);
                        }
                    } else if(item.id === 1712) {
                        const value = document.getElementById("g1712");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 1713) {
                        const value = document.getElementById("k1708");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 1714) {
                        const value = document.getElementById("n1708");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 1715) {
                        const value = document.getElementById("w1708");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 1736) {
                        const value = document.getElementById("g1736");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a1736");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 5.7 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(1736);
                            trueAnimation(17361);
                        } else {
                            falseAnimation(1736);
                            falseAnimation(17361);
                        }
                    } else if(item.id === 1740) {
                        const value = document.getElementById("g1740");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 1741) {
                        const value = document.getElementById("k1736");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 1742) {
                        const value = document.getElementById("n1736");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 1743) {
                        const value = document.getElementById("w1736");
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