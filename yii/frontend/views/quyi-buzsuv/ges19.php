<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-19';
$energy = new Energy();
$id = 43;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);

$urlTransformer1 = $energy->getTransformer($id, 98);
$urlTransformer2 = $energy->getTransformer($id, 99);
$urlTransformer3 = $energy->getTransformer($id, 100);
$urlTransformer4 = $energy->getTransformer($id, 101);
$urlTransformer5 = $energy->getTransformer($id, 102);

$urlSwitch1 = $energy->getSwitch($id, 230);
$urlSwitch2 = $energy->getSwitch($id, 231);
$urlSwitch3 = $energy->getSwitch($id, 232);
$urlSwitch4 = $energy->getSwitch($id, 233);
$urlSwitch5 = $energy->getSwitch($id, 234);
$urlSwitch6 = $energy->getSwitch($id, 235);
$urlSwitch7 = $energy->getSwitch($id, 236);
$urlSwitch8 = $energy->getSwitch($id, 237);
$urlSwitch9 = $energy->getSwitch($id, 238);
$urlSwitch10 = $energy->getSwitch($id, 239);
$urlSwitch11 = $energy->getSwitch($id, 240);
$urlSwitch12 = $energy->getSwitch($id, 241);
$urlSwitch13 = $energy->getSwitch($id, 242);
$urlSwitch14 = $energy->getSwitch($id, 243);
$urlSwitch15 = $energy->getSwitch($id, 244);

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
                            <path
                                    d="M0 0 1280 0 1280 720 0 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,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"
                                preserveAspectRatio="none"
                                id="img1"
                        ></image>
                        <clipPath id="clip2">
                            <path
                                    d="M0 0 124 0 124 60.4103 0 60.4103Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip3">
                            <path
                                    d="M302 11 387 11 387 101 302 101Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip4">
                            <path
                                    d="M302 24 387 24 387 115 302 115Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP0AAP0AAP4AAP4AAP4AAP4AAP4AAP8AAMVaHOIAAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA6klEQVRIS+3XaxKDIAwE4OCjvkB6/9NWdJUEgr1Avl+W7EwtKzOVmOkrfbBe6DDOOkykAdNswESynOUSy1kusZzlEstZLrGc+kfMbZhmwWF2WDxEDLmImV8JK//QjIt3K5HH5Zv9uNFOu7HCuUEjPrTN5y+mekOkcMXIvX9z7JFTmuAmpA4LljQemcTtWKxF1h1Rj9XaiAS0atkwfwQMpFSEpNeiPKnl20KCIqT6gbiLkKrNifp7RVULK0KStVRbkvHNkUVIvJaiCClvzoKVhntz6iKku5bn2Wy5TotahJROi16E5AI7EUD0A7L3auODNhWvAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img5"
                        ></image>
                        <clipPath id="clip6">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACDfECDXGCXaFSTbFCPZFiPaFSLbFCTbFiTbFSPcEyLcFCHaFSLbFCPcEyPaFSPbFdh6Az4AAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA60lEQVRIS+3Xaw6EIAwEYPCxvnDp/U+7VkehUtgL9PuFMIlJR5JdV+gj7R7rlp2INqwb5iNGNOKpqj9jFDs8V/jvlaOAjYoFMaIJO6oRIdZjT+EjMmzHpmJD5LJgtzAhcBuw/9Llb2VfvRYuQlKHcxUhKcMZcCSUtTxFSMVw5EiSGeeQFyGJWkQRkhhOwKYmq+VdhPTUctyIlni/uSxCwm3RipDO26IWIXEtlSKk44NYsWybHRb/uDWANpyIs5AN25fj2dQP+oPTRL8g5YAsxyxnOWY5yzHLWY5ZznKsw2lS+dP1/iGW/i049wN/6mrjj3LfTQAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img7"
                        ></image>
                        <clipPath id="clip8">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip9">
                            <path
                                    d="M171 11 256 11 256 101 171 101Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip10">
                            <path
                                    d="M171 24 256 24 256 115 171 115Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip11">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip12">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip13">
                            <path
                                    d="M95 139 172 139 172 229 95 229Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip14">
                            <path
                                    d="M420 11 505 11 505 101 420 101Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip15">
                            <path
                                    d="M420 24 505 24 505 115 420 115Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip16">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip17">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip18">
                            <path
                                    d="M724 11 809 11 809 101 724 101Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip19">
                            <path
                                    d="M724 24 809 24 809 115 724 115Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip20">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip21">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip22">
                            <path
                                    d="M824 9 908 9 908 100 824 100Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip23">
                            <path
                                    d="M824 23 908 23 908 113 824 113Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip24">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip25">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip26">
                            <path
                                    d="M555 476 629 476 629 567 555 567Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip27">
                            <path
                                    d="M672 476 747 476 747 566 672 566Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip28">
                            <path
                                    d="M359 475 434 475 434 566 359 566Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip29">
                            <path
                                    d="M930 10 1014 10 1014 100 930 100Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip30">
                            <path
                                    d="M930 23 1014 23 1014 114 930 114Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip31">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip32">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip33">
                            <path
                                    d="M469 476 543 476 543 566 469 566Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip34">
                            <path
                                    d="M1158 233 1243 233 1243 324 1158 324Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip35">
                            <path
                                    d="M1158 247 1243 247 1243 337 1158 337Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip36">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip37">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip38">
                            <path
                                    d="M779 476 854 476 854 567 779 567Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip39">
                            <path
                                    d="M1075-14 1170-14 1170 77 1075 77Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip40">
                            <path
                                    d="M1177 54 1266 54 1266 144 1177 144Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip41">
                            <path
                                    d="M1181 13 1256 13 1256 104 1181 104Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip42">
                            <path
                                    d="M14 429 23 429 23 450 14 450Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip43">
                            <path
                                    d="M0 0 8.57143 0 8.57143 20 0 20Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip44">
                            <path
                                    d="M150 379 234 379 234 463 150 463Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip45">
                            <path
                                    d="M150 379 234 379 234 463 150 463Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip46">
                            <path
                                    d="M150 379 234 379 234 463 150 463Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip47">
                            <path
                                    d="M918 380 1002 380 1002 464 918 464Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip48">
                            <path
                                    d="M918 380 1002 380 1002 464 918 464Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip49">
                            <path
                                    d="M918 380 1002 380 1002 464 918 464Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip50">
                            <path
                                    d="M145 415 239 415 239 505 145 505Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip51">
                            <path
                                    d="M145 427 239 427 239 518 145 518Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip52">
                            <path
                                    d="M145 440 239 440 239 531 145 531Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip53">
                            <path
                                    d="M145 453 239 453 239 544 145 544Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip54">
                            <path
                                    d="M145 466 239 466 239 556 145 556Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip55">
                            <path
                                    d="M145 479 239 479 239 569 145 569Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip56">
                            <path
                                    d="M913 412 1007 412 1007 503 913 503Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip57">
                            <path
                                    d="M913 425 1007 425 1007 516 913 516Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip58">
                            <path
                                    d="M913 438 1007 438 1007 528 913 528Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip59">
                            <path
                                    d="M913 451 1007 451 1007 541 913 541Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip60">
                            <path
                                    d="M913 463 1007 463 1007 554 913 554Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip61">
                            <path
                                    d="M913 476 1007 476 1007 567 913 567Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip62">
                            <path
                                    d="M82 284 159 284 159 375 82 375Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip63">
                            <path
                                    d="M1015 284 1092 284 1092 374 1015 374Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip64">
                            <path
                                    d="M1059 142 1136 142 1136 233 1059 233Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="128"
                                height="128"
                                xlink:href="data:image/png;base64,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"
                                preserveAspectRatio="none"
                                id="img65"
                        ></image>
                        <clipPath id="clip66">
                            <path
                                    d="M1107 455 1199 455 1199 547 1107 547Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
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
                        <g clip-path="url(#clip2)" transform="matrix(1 0 -0 1.00976 1050 43)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(0.794872 0.794872)"
                            ></use>
                        </g>
                        <path
                                d="M0 0 0.0258268 90.0228"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 463.5 195.523)"
                        />
                        <path
                                d="M1.5-0.000430337 1.52411 84.0223-1.47589 84.0232-1.5 0.000430337ZM-4.5 0.00129101C-4.50071-2.48399-2.48657-4.49929-0.00129101-4.5 2.48399-4.50071 4.49929-2.48657 4.5-0.00129101 4.50071 2.48399 2.48657 4.49929 0.00129101 4.5-2.48399 4.50071-4.49929 2.48657-4.5 0.00129101ZM0.0241054 84.0228 4.52324 81.0215 0.0258268 90.0228-4.47676 81.0241Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 463.5 195.523)"
                        />
                        <path
                                d="M0 0 0.438425 90.0228"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 344.5 195.523)"
                        />
                        <path
                                d="M1.49998-0.00730515 1.90919 84.0155-1.09078 84.0301-1.49998 0.00730515ZM-4.49995 0.0219154C-4.51205-2.46334-2.50717-4.48784-0.0219154-4.49995 2.46334-4.51205 4.48784-2.50717 4.49995-0.0219154 4.51205 2.46334 2.50717 4.48784 0.0219154 4.49995-2.46334 4.51205-4.48784 2.50717-4.49995 0.0219154ZM0.409205 84.0229 4.89454 81.001 0.438425 90.0228-4.10535 81.0448Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 344.5 195.523)"
                        />
                        <path
                                d="M0 0 0.000104987 91.6071"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 214.5 196.107)"
                        />
                        <path
                                d="M1.5-1.71908e-06 1.5001 85.6071-1.4999 85.6071-1.5 1.71908e-06ZM-4.5 5.15725e-06C-4.5-2.48528-2.48529-4.5-5.15725e-06-4.5 2.48528-4.5 4.5-2.48529 4.5-5.15725e-06 4.5 2.48528 2.48529 4.5 5.15725e-06 4.5-2.48528 4.5-4.5 2.48529-4.5 5.15725e-06ZM9.81105e-05 85.6071 4.50009 82.6071 0.000104987 91.6071-4.49991 82.6071Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 214.5 196.107)"
                        />
                        <path
                                d="M724.723 199.451 724.5 154.5"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1074.86 339.5 145.5 339.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 476 0.000104987"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 569.5 195.5)"
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
                                transform="translate(180.444 97)"
                        >
                            Л-19
                            <tspan x="22.1667" y="0">-</tspan>
                            Озодлик
                            <tspan x="123.154" y="3">Л</tspan>
                            -19
                            <tspan x="145.321" y="3">-</tspan>
                            Сергели (Д)
                            <tspan x="251.224" y="0">Л</tspan>
                            -Янгийў
                            <tspan x="299.057" y="0">л</tspan>
                            -2
                        </text>
                        <path
                                d="M0 0 428.287 0.000104987"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1136.79 197.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(735.862 97)"
                        >
                            Л-Янгийўл
                            <tspan x="53.8333" y="0">-</tspan>
                            1
                            <tspan x="112.285" y="-2">Л</tspan>
                            -19
                            <tspan x="134.451" y="-2">-</tspan>
                            23
                            <tspan font-weight="400" x="-618.857" y="110">I</tspan>
                            <tspan font-weight="400" x="-615.357" y="110">-</tspan>
                            <tspan font-weight="400" x="-611.857" y="110">СШ 110 кВ</tspan>
                            <tspan x="-509.805" y="307">Г</tspan>
                            -1
                            <tspan x="-509.805" y="320">6</tspan>
                            кВ
                            <tspan x="-509.805" y="333">5,6 МВт</tspan>
                            <tspan x="-509.805" y="346">AEG</tspan>
                            <tspan x="-655.719" y="253">I-СШ 6 кВ</tspan>
                        </text>
                        <path
                                d="M1.5-3.25492e-06 1.5001 48.3823-1.49989 48.3823-1.5 3.25492e-06ZM4.5001 48.3822C4.50011 50.8675 2.4854 52.8822 0.000114752 52.8823-2.48517 52.8823-4.49989 50.8675-4.4999 48.3823-4.4999 45.897-2.48519 43.8823 9.52221e-05 43.8823 2.48538 43.8822 4.5001 45.897 4.5001 48.3822Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 397.5 388.882)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(347.853 400)"
                        >
                            ТС
                            <tspan x="14.8333" y="0">-</tspan>
                            1
                            <tspan x="-14" y="13">6/0,4</tspan>
                            <tspan x="10.3333" y="13">кВ</tspan>
                            <tspan x="-16" y="26">400</tspan>
                            <tspan x="2.66669" y="26">кВА</tspan>
                            <tspan x="-7.66666" y="39">JDU/A</tspan>
                        </text>
                        <path
                                d="M594 365.5 594 379.93 591 379.93 591 365.5ZM588 365.5C588 363.015 590.015 361 592.5 361 594.985 361 597 363.015 597 365.5 597 367.985 594.985 370 592.5 370 590.015 370 588 367.985 588 365.5Z"
                                fill="#006600"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(614.696 430)"
                        >
                            ТР
                            <tspan x="0" y="13">6/0,4</tspan>
                            <tspan x="24.3334" y="13">кВ</tspan>
                            <tspan x="0" y="26">560</tspan>
                            <tspan x="18.6667" y="26">кВА</tspan>
                        </text>
                        <path
                                d="M1.5-2.49518e-06 1.5001 63.1138-1.49989 63.1138-1.5 2.49518e-06ZM4.5001 63.1138C4.50011 65.5991 2.48539 67.6138 0.000112472 67.6138-2.48517 67.6138-4.49989 65.5991-4.4999 63.1138-4.4999 60.6285-2.48518 58.6138 9.75013e-05 58.6138 2.48538 58.6138 4.5001 60.6285 4.5001 63.1138Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 271.5 258.614)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(283.051 227)"
                        >
                            В
                            <tspan x="7.16666" y="0">-</tspan>
                            Т
                            <tspan x="17.8333" y="0">-</tspan>
                            1
                        </text>
                        <a href="<?= $urlSwitch8 ?>">
                            <rect
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#0099FC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    transform="matrix(1 0 0 -1 261.5 233.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(231.334 270)"
                        >
                            Т
                            <tspan x="7.16667" y="0">-</tspan>
                            1
                            <tspan x="-24.3333" y="13">6/110</tspan>
                            <tspan x="2.66667" y="13">кВ</tspan>
                            <tspan x="-29" y="26">8000</tspan>
                            кВА
                            <tspan x="-11.1667" y="39">JDUF</tspan>
                        </text>
                        <path
                                d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 722.5 199.5)"
                        />
                        <path
                                d="M0 0 77.0478 0.285984"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 553.5 155.786)"
                        />
                        <path
                                d="M1.5-3.85156e-06 1.5001 40.8875-1.49989 40.8875-1.5 3.85156e-06ZM-4.5 1.15547e-05C-4.50001-2.48527-2.48529-4.49999-1.15547e-05-4.5 2.48527-4.50001 4.49999-2.48529 4.5-1.15547e-05 4.50001 2.48527 2.48529 4.49999 1.15547e-05 4.5-2.48527 4.50001-4.49999 2.48529-4.5 1.15547e-05Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 553.5 196.388)"
                        />
                        <path
                                d="M0 0 77.0477 1.05249"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 648.5 155.553)"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#0099FF"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    transform="matrix(1 0 0 -1 630.5 164.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(609.959 180)"
                        >
                            МСВ
                            <tspan x="24.8334" y="0">-</tspan>
                            110кВ
                            <tspan font-size="19" x="-74.935" y="-161">Қуйи Бўзсув</tspan>
                            <tspan font-size="19" x="35.485" y="-161">-</tspan>
                            <tspan font-size="19" x="46.3184" y="-161">3</tspan>
                            <tspan font-size="19" x="60.3184" y="-161">(ГЭС</tspan>
                            <tspan font-size="19" x="104.485" y="-161">-</tspan>
                            <tspan font-size="19" x="110.652" y="-161">19)</tspan>
                            <tspan x="-383.811" y="-9">В</tspan>
                            -19-О
                            <tspan x="-252.609" y="-9">В</tspan>
                            <tspan x="-245.442" y="-9">-</tspan>
                            19
                            <tspan x="-231.275" y="-9">-</tspan>
                            С
                            <tspan x="-133.916" y="-9">В</tspan>
                            <tspan x="-126.749" y="-9">-</tspan>
                            Я
                            <tspan x="-115.583" y="-9">-</tspan>
                            2
                            <tspan x="170.482" y="-8">В</tspan>
                            <tspan x="177.649" y="-8">-</tspan>
                            Я
                            <tspan x="188.815" y="-8">-</tspan>
                            1
                            <tspan x="270.666" y="-8">В</tspan>
                            <tspan x="277.833" y="-8">-</tspan>
                            19
                            <tspan x="292" y="-8">-</tspan>
                            23
                        </text>
                        <a href="<?= $urlSwitch11 ?>">
                            <rect
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    transform="matrix(1 0 0 -1 774.5 349.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch10 ?>">
                            <rect
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    transform="matrix(1 0 0 -1 330.5 349.5)"
                            />
                        </a>
                        <path
                                d="M710 365.5 710 422.193 707 422.193 707 365.5ZM704 365.5C704 363.015 706.015 361 708.5 361 710.985 361 713 363.015 713 365.5 713 367.985 710.985 370 708.5 370 706.015 370 704 367.985 704 365.5Z"
                                fill="#006600"
                        />
                        <a href="<?= $urlSwitch14 ?>">
                            <rect id="c813"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 583.5 398.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch15 ?>">
                            <rect id="c790"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 699.5 439.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(384.814 539)"
                        >
                            ТС
                            <tspan x="14.8333" y="0">-</tspan>
                            1
                            <tspan x="189.612" y="2">ТП</tspan>
                            -207
                            <tspan x="311.074" y="4">Ф</tspan>
                            <tspan x="320.241" y="4">-</tspan>
                            9К
                            <tspan font-weight="400" x="48.8626" y="-209">СШ 6 кВ</tspan>
                            <tspan x="-61.5783" y="-216">В</tspan>
                            <tspan x="-54.4117" y="-216">-</tspan>
                            ПГ
                            <tspan x="-35.745" y="-216">-</tspan>
                            1
                            <tspan x="384.376" y="-213">В</tspan>
                            <tspan x="391.543" y="-213">-</tspan>
                            ПГ
                            <tspan x="410.21" y="-213">-</tspan>
                            2
                            <tspan x="336.453" y="-106">В</tspan>
                            <tspan x="343.619" y="-106">-</tspan>
                            Ф
                            <tspan x="356.286" y="-106">-</tspan>
                            9К
                            <tspan x="219.985" y="-148">В</tspan>
                            <tspan x="227.152" y="-148">-</tspan>
                            ТП-207
                        </text>
                        <path
                                d="M1.49999-0.00399495 1.65359 57.6671-1.3464 57.6751-1.49999 0.00399495ZM4.65358 57.6591C4.6602 60.1444 2.65085 62.1644 0.165581 62.1711-2.31969 62.1777-4.33977 60.1683-4.34639 57.6831-4.35301 55.1978-2.34366 53.1777 0.141611 53.1711 2.62688 53.1645 4.64696 55.1738 4.65358 57.6591Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 193.5 398.171)"
                        />
                        <a href="<?= $urlTransformer1 ?>">
                            <path
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 256.5 312.5)"
                            />
                            <path
                                    d="M0 15.5C-1.97336e-15 6.93959 6.93959-1.97336e-15 15.5-3.94671e-15 24.0604-7.89343e-15 31 6.93959 31 15.5 31 24.0604 24.0604 31 15.5 31 6.93959 31-9.86678e-15 24.0604 0 15.5Z"
                                    stroke="#0099FF"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 255.5 289.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.000104987 27.9135"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 271.5 340.414)"
                        />
                        <a href="<?= $urlSwitch2 ?>">
                            <rect id="c836"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#0099FC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 336.5 177.5)"
                            />
                        </a>
                        <path
                                d="M302.66 49.6406 386.259 49.6406 386.259 63.2318 302.66 63.2318Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M302.66 63.2318 386.259 63.2318 386.259 76.823 302.66 76.823Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M301.993 63.2318 386.926 63.2318"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M302.66 48.974 302.66 77.4897"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M386.259 48.974 386.259 77.4897"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M301.993 49.6406 386.926 49.6406"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M301.993 76.823 386.926 76.823"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip3)">
                            <text id="g836Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(306.439 60)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip4)">
                            <text id="g836Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(306.439 73)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip6)" transform="matrix(1 0 -0 1.02857 380 50)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip8)" transform="matrix(1 0 -0 1.02857 380 64)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <a href="<?= $urlSwitch1 ?>">
                            <rect id="c859"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#0099FC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 205.5 177.5)"
                            />
                        </a>
                        <path
                                d="M171.94 49.64 255.54 49.64 255.54 63.2312 171.94 63.2312Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M171.94 63.2312 255.54 63.2312 255.54 76.8224 171.94 76.8224Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M171.274 63.2312 256.207 63.2312"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M171.94 48.9733 171.94 77.489"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M255.54 48.9733 255.54 77.489"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M171.274 49.64 256.207 49.64"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M171.274 76.8224 256.207 76.8224"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip9)">
                            <text id="g859Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(175.72 60)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip10)">
                            <text id="g859Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(175.72 73)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip11)" transform="matrix(1 0 -0 1.02857 249 50)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip12)" transform="matrix(1.16667 0 -0 1 249 64)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <path
                                d="M95.6677 177.47 171.598 177.47 171.598 190.27 95.6677 190.27Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M95.6677 176.803 95.6677 190.937"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M171.598 176.803 171.598 190.937"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M95.0011 177.47 172.264 177.47"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M95.0011 190.27 172.264 190.27"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip13)">
                            <text id="g871"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(99.4472 187)"
                            >
                                U
                            </text>
                        </g>
                        <a href="<?= $urlSwitch3 ?>">
                            <rect id="c916"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#0099FC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 454.5 177.5)"
                            />
                        </a>
                        <path
                                d="M420.993 49.6406 504.593 49.6406 504.593 63.2318 420.993 63.2318Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M420.993 63.2318 504.593 63.2318 504.593 76.823 420.993 76.823Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M420.326 63.2318 505.259 63.2318"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M420.993 48.974 420.993 77.4897"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M504.593 48.974 504.593 77.4897"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M420.326 49.6406 505.259 49.6406"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M420.326 76.823 505.259 76.823"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip14)">
                            <text id="g916"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(424.772 60)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip15)">
                            <text id="g915"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(424.772 73)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip16)" transform="matrix(1 0 -0 1.02857 498 50)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip17)" transform="matrix(1.16667 0 -0 1 498 64)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <path
                                d="M724.7 49.6406 808.3 49.6406 808.3 63.2318 724.7 63.2318Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M724.7 63.2318 808.3 63.2318 808.3 76.823 724.7 76.823Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M724.033 63.2318 808.966 63.2318"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M724.7 48.974 724.7 77.4897"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M808.3 48.974 808.3 77.4897"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M724.033 49.6406 808.966 49.6406"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M724.033 76.823 808.966 76.823"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip18)">
                            <text id="g882Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(728.48 60)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip19)">
                            <text id="g882Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(728.48 73)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip20)" transform="matrix(1 0 -0 1.02857 802 50)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip21)" transform="matrix(1 0 -0 1.02857 802 64)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M824.004 47.8396 907.604 47.8396 907.604 61.4308 824.004 61.4308Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M824.004 61.4308 907.604 61.4308 907.604 75.0219 824.004 75.0219Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M823.337 61.4308 908.27 61.4308"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M824.004 47.1729 824.004 75.6886"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M907.604 47.1729 907.604 75.6886"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M823.337 47.8396 908.27 47.8396"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M823.337 75.0219 908.27 75.0219"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip22)">
                            <text id="g968Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(827.784 58)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip23)">
                            <text id="g968Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(827.784 71)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip24)" transform="matrix(1 0 -0 1.02857 901 48)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip25)" transform="matrix(1.16667 0 -0 1 901 62)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(1060.33 209)"
                        >
                            II-СШ 110 кВ
                        </text>
                        <path
                                d="M902.692 259.346 902.5 233.5"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.5-9.38985e-06 1.5001 16.7713-1.49989 16.7713-1.5 9.38985e-06ZM4.5001 16.7713C4.50012 19.2566 2.48541 21.2713 0.000133156 21.2713-2.48515 21.2714-4.49988 19.2566-4.4999 16.7714-4.49991 14.2861-2.4852 12.2714 7.68173e-05 12.2713 2.48536 12.2713 4.50009 14.286 4.5001 16.7713Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 903.5 214.271)"
                        />
                        <a href="<?= $urlSwitch9 ?>">
                            <rect
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#0099FC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    transform="matrix(1 0 0 -1 893.5 233.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(927.091 270)"
                        >
                            Т
                            <tspan x="7.16663" y="0">-</tspan>
                            2
                            <tspan x="0" y="13">6/110</tspan>
                            <tspan x="27" y="13">кВ</tspan>
                            <tspan x="0" y="26">8000</tspan>
                            кВА
                            <tspan x="0" y="39">JDUF</tspan>
                        </text>
                        <a href="<?= $urlTransformer2 ?>">
                            <path
                                    d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 887.5 312.5)"
                            />
                            <path
                                    d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                    stroke="#0099FF"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 887.5 289.5)"
                            />
                        </a>
                        <path
                                d="M1.5-5.64173e-06 1.5001 27.9135-1.49989 27.9135-1.5 5.64173e-06ZM-4.5 1.69252e-05C-4.50001-2.48526-2.4853-4.49999-1.69252e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.69252e-05 4.50001 2.48526 2.4853 4.49999 1.69252e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.69252e-05Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 903.5 340.414)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(1031.75 354)"
                        >
                            II-СШ 6 кВ
                        </text>
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c8132"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#7F7F7F"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 576.5 468.5)"
                            />
                            <path id="c8131"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 576.5 444.5)"
                            />
                        </a>
                        <path
                                d="M1.49993-0.014715 1.84476 35.1342-1.1551 35.1636-1.49993 0.014715ZM6.80931 26.8409 0.374031 38.1257-6.2814 26.9693C-6.70582 26.2579-6.47314 25.337-5.76169 24.9126-5.05024 24.4882-4.12944 24.7209-3.70502 25.4323L1.63302 34.3804-0.958193 34.4058 4.20326 25.3548C4.61365 24.6351 5.52971 24.3844 6.24934 24.7948 6.96898 25.2052 7.21969 26.1212 6.80931 26.8409Z"
                                fill="#7F7F7F"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 592.874 468.5)"
                        />
                        <path
                                d="M592.716 411.47 592.5 399.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M555.221 514.821 628.868 514.821 628.868 528.555 555.221 528.555Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M555.221 514.155 555.221 529.221"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M628.868 514.155 628.868 529.221"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M554.555 514.821 629.535 514.821"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M554.555 528.555 629.535 528.555"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip26)">
                            <text id="g813"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(559.001 525)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M711 439.482 711.747 500.523 708.747 500.56 708 439.518ZM716.691 492.218 710.283 503.518 703.601 492.378C703.175 491.668 703.405 490.746 704.116 490.32 704.826 489.894 705.747 490.125 706.173 490.835L711.533 499.77 708.942 499.802 714.082 490.738C714.49 490.018 715.406 489.765 716.126 490.173 716.847 490.582 717.1 491.497 716.691 492.218Z"
                                fill="#006600"
                        />
                        <path
                                d="M672.525 514.791 746.172 514.791 746.172 528.524 672.525 528.524Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M672.525 514.124 672.525 529.191"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M746.172 514.124 746.172 529.191"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M671.858 514.791 746.838 514.791"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M671.858 528.524 746.838 528.524"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip27)">
                            <text id="g790"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(676.304 525)"
                            >
                                Р
                            </text>
                        </g>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c7602"
                                    d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                    stroke="#7F7F7F"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 379.5 442.5)"
                            />
                            <path id="c7601"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 380.5 422.5)"
                            />
                        </a>
                        <path
                                d="M396.5 442.5 396.732 453.545"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch12 ?>">
                            <rect id="c760"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#7F7F7F"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 387.5 471.5)"
                            />
                        </a>
                        <path
                                d="M1.49994-0.0136786 1.7917 31.9797-1.20818 32.007-1.49994 0.0136786ZM6.76198 23.6898 0.318909 34.9702-6.32881 23.8092C-6.75274 23.0975-6.51942 22.1768-5.80768 21.7529-5.09594 21.329-4.1753 21.5623-3.75137 22.274L1.58048 31.2258-1.01075 31.2494 4.15697 22.2019C4.56784 21.4826 5.48408 21.2325 6.20343 21.6434 6.92279 22.0542 7.17286 22.9705 6.76198 23.6898Z"
                                fill="#7F7F7F"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 395.819 471.5)"
                        />
                        <path
                                d="M359.969 513.917 433.616 513.917 433.616 527.651 359.969 527.651Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M359.969 513.251 359.969 528.317"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M433.616 513.251 433.616 528.317"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M359.302 513.917 434.282 513.917"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M359.302 527.651 434.282 527.651"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip28)">
                            <text id="g760"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(363.748 524)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M1.5-2.73292e-06 1.5001 57.6235-1.49989 57.6235-1.5 2.73292e-06ZM4.5001 57.6235C4.50011 60.1088 2.48539 62.1235 0.000113186 62.1235-2.48517 62.1235-4.49989 60.1088-4.4999 57.6235-4.4999 55.1382-2.48518 53.1235 9.67881e-05 53.1235 2.48538 53.1235 4.5001 55.1382 4.5001 57.6235Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 960.5 397.124)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(988.807 403)"
                        >
                            Г
                            <tspan x="6.83331" y="0">-</tspan>
                            2
                            <tspan x="0" y="13">6</tspan>
                            кВ
                            <tspan x="0" y="26">5,6 МВт</tspan>
                            <tspan x="0" y="39">AEG</tspan>
                            <tspan x="-3.17816" y="-232">В</tspan>
                            <tspan x="3.98853" y="-232">-</tspan>
                            Х
                            <tspan x="15.1552" y="-232">-</tspan>
                            2
                        </text>
                        <path
                                d="M930.227 48.6201 1013.83 48.6201 1013.83 62.2112 930.227 62.2112Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M930.227 62.2112 1013.83 62.2112 1013.83 75.8024 930.227 75.8024Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M929.56 62.2112 1014.49 62.2112"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M930.227 47.9534 930.227 76.4691"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1013.83 47.9534 1013.83 76.4691"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M929.56 48.6201 1014.49 48.6201"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M929.56 75.8024 1014.49 75.8024"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip29)">
                            <text id="g945Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(934.006 59)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip30)">
                            <text id="g945Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(934.006 72)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip31)" transform="matrix(1 0 -0 1.02857 1007 49)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip32)" transform="matrix(1 0 -0 1.02857 1008 63)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(944.459 97)"
                        >
                            Л-Халкабод-2
                        </text>
                        <path
                                d="M1.6989e-06-1.5 92.6955-1.49989 92.6955 1.5001-1.6989e-06 1.5ZM-5.09669e-06 4.5C-2.48529 4.5-4.5 2.48528-4.5-5.09669e-06-4.5-2.48529-2.48528-4.5 5.09669e-06-4.5 2.48529-4.5 4.5-2.48528 4.5 5.09669e-06 4.5 2.48529 2.48528 4.5-5.09669e-06 4.5Z"
                                fill="#7F7F7F"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 593.196 481.5)"
                        />
                        <path
                                d="M502 480.471 502.503 506.386 499.503 506.445 499 480.529ZM507.388 498.046 501.061 509.392 494.299 498.3C493.867 497.593 494.091 496.67 494.799 496.238 495.506 495.807 496.429 496.031 496.86 496.738L502.284 505.635 499.693 505.685 504.767 496.585C505.171 495.861 506.084 495.602 506.808 496.005 507.531 496.409 507.791 497.322 507.388 498.046Z"
                                fill="#7F7F7F"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(483.742 541)"
                        >
                            Хоз
                            <tspan x="20" y="0">нужд</tspan>
                        </text>
                        <path
                                d="M469.287 514.69 542.934 514.69 542.934 528.423 469.287 528.423Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M469.287 514.023 469.287 529.09"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M542.934 514.023 542.934 529.09"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M468.62 514.69 543.6 514.69"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M468.62 528.423 543.6 528.423"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip33)">
                            <text id="g1024"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(473.066 525)"
                            >
                                Р
                            </text>
                        </g>
                        <a href="<?= $urlSwitch13 ?>">
                            <rect id="c1024"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#7F7F7F"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 517.5 490.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(511.271 466)"
                        >
                            А
                            <tspan x="7.66669" y="0">-</tspan>
                            Х.Н
                        </text>
                        <path
                                d="M570.5 365.5 726.033 365.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.5-6.11088e-06 1.5001 25.7705-1.49989 25.7705-1.5 6.11088e-06ZM-4.5 1.83326e-05C-4.50001-2.48526-2.4853-4.49999-1.83326e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.83326e-05 4.50001 2.48526 2.4853 4.49999 1.83326e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.83326e-05ZM4.5001 25.7705C4.50011 28.2558 2.4854 30.2705 0.000123319 30.2705-2.48516 30.2705-4.49988 28.2558-4.4999 25.7705-4.49991 23.2852-2.48519 21.2705 8.66542e-05 21.2705 2.48537 21.2705 4.50009 23.2852 4.5001 25.7705Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 648.5 365.271)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(365.132 464)"
                        >
                            А
                            <tspan x="7.66666" y="0">-</tspan>
                            1
                            <tspan x="550.558" y="-238">В</tspan>
                            <tspan x="557.725" y="-238">-</tspan>
                            Т-2
                        </text>
                        <path
                                d="M0 0 0.0258268 90.0228"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 768.5 197.523)"
                        />
                        <path
                                d="M1.5-0.000430337 1.52411 84.0223-1.47589 84.0232-1.5 0.000430337ZM-4.5 0.00129101C-4.50071-2.48399-2.48657-4.49929-0.00129101-4.5 2.48399-4.50071 4.49929-2.48657 4.5-0.00129101 4.50071 2.48399 2.48657 4.49929 0.00129101 4.5-2.48399 4.50071-4.49929 2.48657-4.5 0.00129101ZM0.0241054 84.0228 4.52324 81.0215 0.0258268 90.0228-4.47676 81.0241Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 768.5 197.523)"
                        />
                        <a href="<?= $urlSwitch5 ?>">
                            <rect id="c882"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#0099FC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 758.5 178.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.0258268 90.0228"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 868.5 197.523)"
                        />
                        <path
                                d="M1.5-0.000430337 1.52411 84.0223-1.47589 84.0232-1.5 0.000430337ZM-4.5 0.00129101C-4.50071-2.48399-2.48657-4.49929-0.00129101-4.5 2.48399-4.50071 4.49929-2.48657 4.5-0.00129101 4.50071 2.48399 2.48657 4.49929 0.00129101 4.5-2.48399 4.50071-4.49929 2.48657-4.5 0.00129101ZM0.0241054 84.0228 4.52324 81.0215 0.0258268 90.0228-4.47676 81.0241Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 868.5 197.523)"
                        />
                        <a href="<?= $urlSwitch6 ?>">
                            <rect id="c968"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#0099FC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 859.5 178.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.0258268 90.0228"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 973.5 197.523)"
                        />
                        <path
                                d="M1.5-0.000430337 1.52411 84.0223-1.47589 84.0232-1.5 0.000430337ZM-4.5 0.00129101C-4.50071-2.48399-2.48657-4.49929-0.00129101-4.5 2.48399-4.50071 4.49929-2.48657 4.5-0.00129101 4.50071 2.48399 2.48657 4.49929 0.00129101 4.5-2.48399 4.50071-4.49929 2.48657-4.5 0.00129101ZM0.0241054 84.0228 4.52324 81.0215 0.0258268 90.0228-4.47676 81.0241Z"
                                fill="#0099FF"
                                transform="matrix(1 0 0 -1 973.5 197.523)"
                        />
                        <a href="<?= $urlSwitch7 ?>">
                            <rect id="c945"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#0099FC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 964.5 178.5)"
                            />
                        </a>
                        <path
                                d="M1.5-2.48616e-06 1.5001 57.3427-1.4999 57.3427-1.5 2.48616e-06ZM9.50422e-05 57.3427 4.50009 54.3427 0.000104987 63.3427-4.49991 54.3427Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 1199.5 381.843)"
                        />
                        <path
                                d="M1151.5 527.5 1199.26 527.5"
                                stroke="#767171"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 0.000104987 92.4852"
                                stroke="#767171"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1199.5 528.985)"
                        />
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c1581"
                                    d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                    stroke="#767171"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 1182.5 436.5)"
                            />
                            <path id="c158"
                                    d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 1182.5 415.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(1064.54 501)"
                        >
                            Солночн
                            <tspan x="39.8334" y="0">ый</tspan>
                            <tspan x="21.8334" y="13">панель</tspan>
                            <tspan x="17" y="26">120 кВт</tspan>
                            <tspan font-weight="700" x="68.252" y="-112">ТП</tspan>
                            <tspan font-weight="700" x="83.752" y="-112">-</tspan>
                            <tspan font-weight="700" x="87.252" y="-112">ФЭС</tspan>
                            <tspan font-weight="700" x="73.5853" y="-99">6/0,4</tspan>
                            <tspan font-weight="700" x="97.9187" y="-99">кВ</tspan>
                            <tspan font-weight="700" x="71.5853" y="-86">630</tspan>
                            <tspan font-weight="700" x="90.252" y="-86">кВА</tspan>
                            <tspan font-weight="700" x="65.0853" y="-73">S11M</tspan>
                            <tspan font-weight="700" x="91.752" y="-73">-</tspan>
                            <tspan font-weight="700" x="95.252" y="-73">630</tspan>
                            <tspan x="121.392" y="-190">Ф</tspan>
                            -9
                            <tspan x="138.726" y="-190">-</tspan>
                            К
                        </text>
                        <path
                                d="M1158.68 271.847 1242.28 271.847 1242.28 285.438 1158.68 285.438Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1158.68 285.438 1242.28 285.438 1242.28 299.029 1158.68 299.029Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1158.01 285.438 1242.95 285.438"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1158.68 271.18 1158.68 299.696"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1242.28 271.18 1242.28 299.696"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1158.01 271.847 1242.95 271.847"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1158.01 299.029 1242.95 299.029"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip34)">
                            <text id="g158"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1162.46 282)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip35)">
                            <text id="g157"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1162.46 295)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip36)" transform="matrix(1 0 -0 1.02857 1236 272)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip37)" transform="matrix(1 0 -0 1.02857 1236 286)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(783.541 541)"
                        >
                            Гидроузел 19
                            <tspan x="37.2288" y="-160">ГУ</tspan>
                            <tspan x="51.8954" y="-160">-</tspan>
                            19
                        </text>
                        <path
                                d="M818 365.5 818 420.765 815 420.765 815 365.5ZM812 365.5C812 363.015 814.015 361 816.5 361 818.985 361 821 363.015 821 365.5 821 367.985 818.985 370 816.5 370 814.015 370 812 367.985 812 365.5Z"
                                fill="#989898"
                        />
                        <rect id="c991"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 807.5 439.5)"
                        />
                        <path
                                d="M818 439.5 818 502.101 815 502.101 815 439.5ZM823.046 493.857 816.5 505.078 809.954 493.857C809.537 493.142 809.779 492.223 810.494 491.806 811.21 491.388 812.128 491.63 812.546 492.346L817.796 501.346 815.204 501.346 820.454 492.346C820.872 491.63 821.79 491.388 822.506 491.806 823.222 492.223 823.463 493.142 823.046 493.857Z"
                                fill="#989898"
                        />
                        <path
                                d="M779.942 515.328 853.589 515.328 853.589 529.062 779.942 529.062Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M779.942 514.662 779.942 529.728"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M853.589 514.662 853.589 529.728"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M779.276 515.328 854.256 515.328"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M779.276 529.062 854.256 529.062"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip38)">
                            <text id="g991"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(783.722 525)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M0 0 53.0092 0.000104987"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 843.509 366.5)"
                        />
                        <rect
                                x="772.5"
                                y="357.5"
                                width="122"
                                height="194"
                                stroke="#172C51"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                stroke-dasharray="5.33333 4"
                                fill="none"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(849.224 366)"
                        >
                            Поселка
                        </text>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1071.17 39.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 1170.5 93.1712)"
                        />
                        <path
                                d="M1167.55 105.031 1159.86 96.6543 1160.35 96.2035 1168.04 104.58ZM1160.11 96.4289 1159.95 100.197 1156.5 92.5001 1163.87 96.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M1177.95 105.889 1168.5 105.5"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1075.22 25.3319 1169.59 25.3319 1169.59 38.1319 1075.22 38.1319Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1075.22 24.6652 1075.22 38.7985"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1169.59 24.6652 1169.59 38.7985"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1074.56 25.3319 1170.26 25.3319"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1074.56 38.1319 1170.26 38.1319"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip39)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1079 35)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1089.5 35)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M1070.5 39.5001 1089.69 39.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.71 92.4155 1265.37 92.4155 1265.37 105.216 1177.71 105.216Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.71 91.7489 1177.71 105.882"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1265.37 91.7489 1265.37 105.882"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.05 92.4155 1266.04 92.4155"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.05 105.216 1266.04 105.216"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip40)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1181.49 102)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1191.99 102)"
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
                                transform="matrix(1 0 0 -1 1067.5 47.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1177.99 65.5001)"
                        />
                        <path
                                d="M1177.5 65.5001 1196.69 65.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1181.91 52.232 1255.11 52.232 1255.11 65.032 1181.91 65.032Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1181.91 51.5654 1181.91 65.6987"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1255.11 51.5654 1255.11 65.6987"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1181.24 52.232 1255.78 52.232"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1181.24 65.032 1255.78 65.032"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip41)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1185.69 62)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M1153.5 93.5001 1176.21 93.5002"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M10.5001 507.5C10.5001 502.53 14.5295 498.5 19.5001 498.5 24.4706 498.5 28.5 502.53 28.5 507.5 28.5 512.471 24.4706 516.5 19.5001 516.5 14.5295 516.5 10.5001 512.471 10.5001 507.5Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M10.5001 529C10.5001 523.753 14.5295 519.5 19.5001 519.5 24.4706 519.5 28.5 523.753 28.5 529 28.5 534.247 24.4706 538.5 19.5001 538.5 14.5295 538.5 10.5001 534.247 10.5001 529Z"
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
                                transform="translate(34.6707 510)"
                        >
                            в работе
                            <tspan x="-0.0827293" y="22">в резерве</tspan>
                        </text>
                        <path
                                d="M10 485.5C10 480.253 14.0294 476 19 476 23.9706 476 28 480.253 28 485.5 28 490.747 23.9706 495 19 495 14.0294 495 10 490.747 10 485.5Z"
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
                                transform="translate(34.5879 488)"
                        >
                            в ремонте
                            <tspan x="0.264885" y="-24">отдача</tspan>
                            <tspan fill="#828897" x="0.000106812" y="-47">прием</tspan>
                        </text>
                        <g clip-path="url(#clip42)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="matrix(0.230769 0 0 0.230769 14 429)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip43)" transform="matrix(1.05 0 -0 1 14 452)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(0.21978 0.21978)"
                            ></use>
                        </g>
                        <path id="c704"
                                d="M168.5 421C168.5 407.469 179.469 396.5 193 396.5 206.531 396.5 217.5 407.469 217.5 421 217.5 434.531 206.531 445.5 193 445.5 179.469 445.5 168.5 434.531 168.5 421Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip44)">
                                <g clip-path="url(#clip45)">
                                    <g clip-path="url(#clip46)">
                                        <path
                                                d="M191.689 414.933 192.622 414.933 193.944 415.167 195.033 415.633 195.889 416.178 196.9 417.189 197.522 418.122 197.989 419.367 198.144 420.067 198.144 421.933 197.833 423.1 197.211 424.344 196.589 425.122 196.044 425.667 194.956 426.367 193.711 426.833 192.933 426.989 191.378 426.989 190.133 426.678 189.278 426.289 188.422 425.744 187.567 424.967 187.022 424.189 186.478 423.1 186.167 421.856 186.089 420.922 186.244 419.678 186.556 418.667 187.178 417.5 188.033 416.567 188.656 416.022 189.978 415.322 191.144 415.011Z"
                                        />
                                        <path
                                                d="M192.156 401.089 193.011 401.089 194.489 401.322 195.967 401.789 197.211 402.411 198.144 403.033 198.922 403.733 199.856 404.667 200.711 405.911 201.333 407.156 201.8 408.556 202.033 409.722 202.111 410.344 202.111 411.822 201.878 413.3 201.489 414.622 200.867 415.944 200.089 417.033 199.933 417.033 199.311 415.944 198.378 414.856 197.522 414.078 196.433 413.378 195.267 412.833 193.944 412.444 192.156 412.211Z"
                                        />
                                        <path
                                                d="M179.4 416.878 179.789 416.956 181.967 418.2 183.522 419.133 183.6 419.289 183.444 420.922 183.6 422.556 183.989 424.033 184.533 425.2 184.533 425.433 182.356 426.678 180.489 427.767 176.444 430.1 175.122 430.878 174.889 430.878 174.189 429.4 173.8 428.078 173.644 427.144 173.567 425.822 173.722 424.344 173.956 423.256 174.5 421.778 175.044 420.767 175.744 419.756 176.678 418.744 177.533 417.967 178.933 417.111Z"
                                        />
                                        <path
                                                d="M199.7 425.433 200.089 425.511 201.956 426.6 208.022 430.1 209.344 430.878 209.189 431.267 208.644 432.044 207.944 432.9 207.4 433.444 206.233 434.3 204.989 435 203.511 435.544 202.344 435.778 201.878 435.856 199.544 435.856 198.378 435.622 197.133 435.233 195.811 434.611 194.878 433.989 194.878 429.322 195.578 429.011 196.9 428.311 197.833 427.611 198.922 426.522Z"
                                        />
                                        <path
                                                d="M182.667 406.067 184.378 406.067 185.856 406.3 187.489 406.844 188.811 407.544 189.433 407.933 189.433 412.678 188.033 413.3 186.944 414 186.089 414.7 185.544 415.244 184.611 416.567 184.144 416.411 182.822 415.633 176.756 412.133 175.044 411.122 174.967 410.967 175.511 410.111 176.367 409.1 176.989 408.478 178.156 407.622 179.244 407 180.722 406.456 181.578 406.222Z"
                                        />
                                        <path
                                                d="M186.167 427.533 186.478 427.611 187.644 428.467 188.967 429.089 190.211 429.478 191.144 429.633 192.078 429.711 192.156 429.789 192.156 440.833 190.989 440.833 189.433 440.522 188.111 440.056 186.711 439.278 185.7 438.5 184.922 437.8 184.144 436.867 183.367 435.622 182.744 434.222 182.356 432.744 182.2 431.344 182.2 430.489 182.278 429.789 184.222 428.7 185.544 427.922Z"
                                        />
                                        <path
                                                d="M209.267 411.044 209.422 411.044 209.967 412.133 210.433 413.533 210.667 414.778 210.744 416.333 210.589 417.733 210.278 419.056 209.656 420.533 209.111 421.467 208.489 422.322 207.633 423.256 206.467 424.189 205.456 424.811 204.756 425.122 202.811 424.033 200.944 422.944 200.711 422.789 200.867 421.389 200.867 420.222 201.567 419.522 202.578 418.2 203.278 417.033 203.978 415.556 204.522 413.844 205.222 413.378 207.167 412.289 209.033 411.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c727"
                                d="M936.5 422C936.5 408.469 947.469 397.5 961 397.5 974.531 397.5 985.5 408.469 985.5 422 985.5 435.531 974.531 446.5 961 446.5 947.469 446.5 936.5 435.531 936.5 422Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip47)">
                                <g clip-path="url(#clip48)">
                                    <g clip-path="url(#clip49)">
                                        <path
                                                d="M959.689 415.933 960.622 415.933 961.944 416.167 963.033 416.633 963.889 417.178 964.9 418.189 965.522 419.122 965.989 420.367 966.144 421.067 966.144 422.933 965.833 424.1 965.211 425.344 964.589 426.122 964.044 426.667 962.956 427.367 961.711 427.833 960.933 427.989 959.378 427.989 958.133 427.678 957.278 427.289 956.422 426.744 955.567 425.967 955.022 425.189 954.478 424.1 954.167 422.856 954.089 421.922 954.244 420.678 954.556 419.667 955.178 418.5 956.033 417.567 956.656 417.022 957.978 416.322 959.144 416.011Z"
                                        />
                                        <path
                                                d="M960.156 402.089 961.011 402.089 962.489 402.322 963.967 402.789 965.211 403.411 966.144 404.033 966.922 404.733 967.856 405.667 968.711 406.911 969.333 408.156 969.8 409.556 970.033 410.722 970.111 411.344 970.111 412.822 969.878 414.3 969.489 415.622 968.867 416.944 968.089 418.033 967.933 418.033 967.311 416.944 966.378 415.856 965.522 415.078 964.433 414.378 963.267 413.833 961.944 413.444 960.156 413.211Z"
                                        />
                                        <path
                                                d="M947.4 417.878 947.789 417.956 949.967 419.2 951.522 420.133 951.6 420.289 951.444 421.922 951.6 423.556 951.989 425.033 952.533 426.2 952.533 426.433 950.356 427.678 948.489 428.767 944.444 431.1 943.122 431.878 942.889 431.878 942.189 430.4 941.8 429.078 941.644 428.144 941.567 426.822 941.722 425.344 941.956 424.256 942.5 422.778 943.044 421.767 943.744 420.756 944.678 419.744 945.533 418.967 946.933 418.111Z"
                                        />
                                        <path
                                                d="M967.7 426.433 968.089 426.511 969.956 427.6 976.022 431.1 977.344 431.878 977.189 432.267 976.644 433.044 975.944 433.9 975.4 434.444 974.233 435.3 972.989 436 971.511 436.544 970.344 436.778 969.878 436.856 967.544 436.856 966.378 436.622 965.133 436.233 963.811 435.611 962.878 434.989 962.878 430.322 963.578 430.011 964.9 429.311 965.833 428.611 966.922 427.522Z"
                                        />
                                        <path
                                                d="M950.667 407.067 952.378 407.067 953.856 407.3 955.489 407.844 956.811 408.544 957.433 408.933 957.433 413.678 956.033 414.3 954.944 415 954.089 415.7 953.544 416.244 952.611 417.567 952.144 417.411 950.822 416.633 944.756 413.133 943.044 412.122 942.967 411.967 943.511 411.111 944.367 410.1 944.989 409.478 946.156 408.622 947.244 408 948.722 407.456 949.578 407.222Z"
                                        />
                                        <path
                                                d="M954.167 428.533 954.478 428.611 955.644 429.467 956.967 430.089 958.211 430.478 959.144 430.633 960.078 430.711 960.156 430.789 960.156 441.833 958.989 441.833 957.433 441.522 956.111 441.056 954.711 440.278 953.7 439.5 952.922 438.8 952.144 437.867 951.367 436.622 950.744 435.222 950.356 433.744 950.2 432.344 950.2 431.489 950.278 430.789 952.222 429.7 953.544 428.922Z"
                                        />
                                        <path
                                                d="M977.267 412.044 977.422 412.044 977.967 413.133 978.433 414.533 978.667 415.778 978.744 417.333 978.589 418.733 978.278 420.056 977.656 421.533 977.111 422.467 976.489 423.322 975.633 424.256 974.467 425.189 973.456 425.811 972.756 426.122 970.811 425.033 968.944 423.944 968.711 423.789 968.867 422.389 968.867 421.222 969.567 420.522 970.578 419.2 971.278 418.033 971.978 416.556 972.522 414.844 973.222 414.378 975.167 413.289 977.033 412.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M145.766 453.544 238.322 453.544 238.322 466.344 145.766 466.344Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.766 466.344 238.322 466.344 238.322 479.144 145.766 479.144Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.766 479.144 238.322 479.144 238.322 491.944 145.766 491.944Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.766 491.944 238.322 491.944 238.322 504.744 145.766 504.744Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.766 504.744 238.322 504.744 238.322 517.544 145.766 517.544Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.766 517.544 238.322 517.544 238.322 530.344 145.766 530.344Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.099 466.344 238.989 466.344"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.099 479.144 238.989 479.144"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.099 491.944 238.989 491.944"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.099 504.744 238.989 504.744"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.099 517.544 238.989 517.544"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.766 452.878 145.766 531.011"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M238.322 452.878 238.322 531.011"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.099 453.544 238.989 453.544"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M145.099 530.344 238.989 530.344"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip50)">
                            <text id="g704"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(149.546 464)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip51)">
                            <text id="g705"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(149.546 476)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip52)">
                            <text id="a704"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(149.546 489)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip53)">
                            <text id="k704"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(149.546 502)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip54)">
                            <text id="n704"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(149.546 515)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip55)">
                            <text id="w704" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(149.546 528)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M913.47 451.029 1006.03 451.029 1006.03 463.829 913.47 463.829Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M913.47 463.829 1006.03 463.829 1006.03 476.629 913.47 476.629Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M913.47 476.629 1006.03 476.629 1006.03 489.429 913.47 489.429Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M913.47 489.429 1006.03 489.429 1006.03 502.229 913.47 502.229Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M913.47 502.229 1006.03 502.229 1006.03 515.029 913.47 515.029Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M913.47 515.029 1006.03 515.029 1006.03 527.829 913.47 527.829Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M912.803 463.829 1006.69 463.829"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M912.803 476.629 1006.69 476.629"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M912.803 489.429 1006.69 489.429"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M912.803 502.229 1006.69 502.229"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M912.803 515.029 1006.69 515.029"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M913.47 450.362 913.47 528.495"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1006.03 450.362 1006.03 528.495"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M912.803 451.029 1006.69 451.029"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M912.803 527.829 1006.69 527.829"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip56)">
                            <text id="g727"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(917.249 461)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip57)">
                            <text id="g728"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(917.249 474)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip58)">
                            <text id="a727"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(917.249 487)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip59)">
                            <text id="k727"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(917.249 499)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip60)">
                            <text id="n727"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(917.249 512)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip61)">
                            <text id="w727" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(917.249 525)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M82.431 323.289 158.361 323.289 158.361 336.089 82.431 336.089Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M82.431 322.622 82.431 336.756"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M158.361 322.622 158.361 336.756"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M81.7643 323.289 159.028 323.289"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M81.7643 336.089 159.028 336.089"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip62)">
                            <text id="g716"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(86.2105 333)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M1015.65 322.483 1091.58 322.483 1091.58 335.283 1015.65 335.283Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1015.65 321.817 1015.65 335.95"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1091.58 321.817 1091.58 335.95"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1014.98 322.483 1092.24 322.483"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1014.98 335.283 1092.24 335.283"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip63)">
                            <text id="g739"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1019.43 332)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M1059.76 180.827 1135.69 180.827 1135.69 193.627 1059.76 193.627Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1059.76 180.16 1059.76 194.294"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1135.69 180.16 1135.69 194.294"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1059.09 180.827 1136.35 180.827"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1059.09 193.627 1136.35 193.627"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip64)">
                            <text id="g894"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1063.53 191)"
                            >
                                U
                            </text>
                        </g>
                        <g clip-path="url(#clip66)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img65"
                                    transform="matrix(0.71875 0 0 0.71875 1107 455)"
                            ></use>
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
        fetch('/quyi-buzsuv/server19', { signal: controller.signal })
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
                    if (item.id === 859) {
                        const plus = document.getElementById("g859Plus");
                        const minus = document.getElementById("g859Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(859);
                        } else {
                            falseAnimation(859);
                        }
                    } else if (item.id === 836) {
                        const plus = document.getElementById("g836Plus");
                        const minus = document.getElementById("g836Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(836);
                        } else {
                            falseAnimation(836);
                        }
                    } else if (item.id === 882) {
                        const plus = document.getElementById("g882Plus");
                        const minus = document.getElementById("g882Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(882);
                        } else {
                            falseAnimation(882);
                        }
                    } else if (item.id === 968) {
                        const plus = document.getElementById("g968Plus");
                        const minus = document.getElementById("g968Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(968);
                        } else {
                            falseAnimation(968);
                        }
                    } else if (item.id === 945) {
                        const plus = document.getElementById("g945Plus");
                        const minus = document.getElementById("g945Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(945);
                        } else {
                            falseAnimation(945);
                        }
                    } else if(item.id === 916) {
                        const value = document.getElementById("g916");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(916);
                        } else {
                            falseAnimation(916);
                        }
                    } else if(item.id === 915) {
                        const value = document.getElementById("g915");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(916);
                        } else {
                            falseAnimation(916);
                        }
                    } else if(item.id === 871) {
                        const value = document.getElementById("g871");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 716) {
                        const value = document.getElementById("g716");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 894) {
                        const value = document.getElementById("g894");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 739) {
                        const value = document.getElementById("g739");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 760) {
                        const value = document.getElementById("g760");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(760);
                            trueAnimation(7601);
                            trueAnimation(7602);
                        } else {
                            falseAnimation(760);
                            falseAnimation(7601);
                            falseAnimation(7602);
                        }
                    } else if(item.id === 813) {
                        const value = document.getElementById("g813");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(813);
                            trueAnimation(8131);
                            trueAnimation(8132);
                        } else {
                            falseAnimation(813);
                            falseAnimation(8131);
                            falseAnimation(8132);
                        }
                    } else if(item.id === 1024) {
                        const value = document.getElementById("g1024");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1024);
                        } else {
                            falseAnimation(1024);
                        }
                    } else if(item.id === 790) {
                        const value = document.getElementById("g790");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(790);
                        } else {
                            falseAnimation(790);
                        }
                    } else if(item.id === 991) {
                        const value = document.getElementById("g991");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(991);
                        } else {
                            falseAnimation(991);
                        }
                    } else if(item.id === 158) {
                        const value = document.getElementById("g158");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(158);
                            trueAnimation(1581);
                        } else {
                            falseAnimation(158);
                            falseAnimation(1581);
                        }
                    } else if(item.id === 157) {
                        const value = document.getElementById("g157");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(158);
                            trueAnimation(1581);
                        } else {
                            falseAnimation(158);
                            falseAnimation(1581);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 704) {
                        const value = document.getElementById("g704");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a704");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 5.6 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(704);
                        } else {
                            errorAnimation(704);
                        }
                    } else if(item.id === 705) {
                        const value = document.getElementById("g705");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 706) {
                        const value = document.getElementById("k704");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 707) {
                        const value = document.getElementById("n704");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 708) {
                        const value = document.getElementById("w704");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 727) {
                        const value = document.getElementById("g727");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a727");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 5.6 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(727);
                        } else {
                            falseAnimation(727);
                        }
                    } else if(item.id === 728) {
                        const value = document.getElementById("g728");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 729) {
                        const value = document.getElementById("k727");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 730) {
                        const value = document.getElementById("n727");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 731) {
                        const value = document.getElementById("w727");
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

    function errorAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "#FFFF00";
    }

    function trueAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "red";
    }

</script>