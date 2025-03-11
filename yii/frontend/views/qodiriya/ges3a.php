<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Қодирия ГЭС (ГЭС-3А)';
$energy = new Energy();
$id = 76;
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
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOFJREFUSEvtl1kOxTAIA5PQfX33P+0TXbFDb8B8wkiR7EZKU2JykabloUMjIh0Pa3pRBh4z+dCkjLxA2un0ZOYNslyayMory/BoIpmXL20xXsPbl85oIguvb1bQRDYWTkZ7qjL5tWgRiBvOWQTihLOxo9S1PEUgVTgYyUuPmi0CgVqgCATCmXlrMLVwEchTS/4+VSn3yXURyHVbvCKQ47a4RSBay0cRyJzSzjOXPvHkg7TPF1445V6asNs6ns79oH+sfVyQOqDwlPDCU8ILTwkvPCW88JSRNale9yf8ELN/C393qxyRJJMMtwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img2"
                        ></image>
                        <clipPath id="clip3">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip4">
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img5"
                        ></image>
                        <clipPath id="clip6">
                            <rect x="0" y="0" width="1173079" height="571500" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="-5.82077e-11" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip13">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip14">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip15">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip16">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
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
                            <rect x="9.31323e-10" y="4.65661e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip29">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip30">
                            <rect x="9.31323e-10" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip31">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip32">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip33">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip34">
                            <rect x="0" y="4.65661e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip35">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip36">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip37">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip38">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip39">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip40">
                            <rect x="0" y="0" width="876300" height="876300" />
                        </clipPath>
                        <image
                            width="128"
                            height="128"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none"
                            id="img41"
                        ></image>
                        <clipPath id="clip42">
                            <rect x="-1" y="-0.5" width="876300" height="876300" />
                        </clipPath>
                        <clipPath id="clip43">
                            <rect x="0" y="0" width="876300" height="876300" />
                        </clipPath>
                        <clipPath id="clip44">
                            <rect x="-9.31323e-10" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip45">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip46">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip47">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip48">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip49">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip50">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip51">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip52">
                            <rect x="-4.65661e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip53">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip54">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip55">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip56">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip57">
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
                            d="M1.33333-2.14645e-06 1.33343 59.8824-1.33324 59.8824-1.33333 2.14645e-06ZM9.64011e-05 59.8824 4.00009 57.2157 0.000104987 65.2157-3.99991 57.2158Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 590.5 155.716)"
                        />
                        <path
                            d="M0 0 0.000104987 57.3594"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 269.5 304.859)"
                        />
                        <path
                            d="M662.452 452.768 662 386.51 665 386.49 665.452 452.748ZM659 386.531C658.983 384.046 660.984 382.017 663.469 382 665.955 381.983 667.983 383.984 668 386.469 668.017 388.955 666.016 390.983 663.531 391 661.046 391.017 659.017 389.016 659 386.531Z"
                            fill="#990099"
                        />
                        <path
                            d="M268 455.998 268 385.5 271 385.5 271 455.998ZM265 385.5C265 383.015 267.015 381 269.5 381 271.985 381 274 383.015 274 385.5 274 387.985 271.985 390 269.5 390 267.015 390 265 387.985 265 385.5Z"
                            fill="#990099"
                        />
                        <path id="c2822"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 254.5 360.5)"
                        />
                        <path id="c2821"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 254.5 336.5)"
                        />
                        <rect
                            id="c282"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 260.5 291.5)"
                        />
                        <rect
                            id="c147"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 138.5 430.5)"
                        />
                        <path id="c1472"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 132.5 506.5)"
                        />
                        <path
                            d="M-1.50712 15.5-1.17395 12.0849-0.216285 8.89693 1.30033 6.00964 3.31087 3.49161 5.75173 1.4106 8.55931-0.164108 11.6669-1.16091 15-1.50812 18.3331-1.16091 21.4407-0.164108 24.2483 1.4106 26.6891 3.49161 28.6997 6.00964 30.2163 8.89693 31.1739 12.0849 31.5071 15.5 31.1739 18.9151 30.2163 22.1031 28.6997 24.9904 26.6891 27.5084 24.2483 29.5894 21.4407 31.1641 18.3331 32.1609 15 32.5081 11.6669 32.1609 8.55931 31.1641 5.75173 29.5894 3.31087 27.5084 1.30033 24.9904-0.216285 22.1031-1.17395 18.9151ZM1.79766 18.4781 1.74133 18.1922 2.61535 21.1017 2.50672 20.8358 3.88971 23.4687 3.73395 23.2303 5.56558 25.5242 5.36658 25.3187 7.58654 27.2114 7.34713 27.0446 9.8951 28.4737 9.61948 28.3536 12.4351 29.2568 12.1324 29.1932 15.1554 29.5081 14.8446 29.5081 17.8676 29.1932 17.5649 29.2568 20.3805 28.3536 20.1049 28.4737 22.6529 27.0446 22.4135 27.2114 24.6334 25.3187 24.4344 25.5242 26.2661 23.2303 26.1103 23.4687 27.4933 20.8358 27.3846 21.1017 28.2587 18.1922 28.2023 18.4781 28.5071 15.3544 28.5071 15.6456 28.2023 12.5219 28.2587 12.8078 27.3846 9.89825 27.4933 10.1642 26.1103 7.53134 26.2661 7.76974 24.4344 5.47579 24.6334 5.6813 22.4135 3.78861 22.6529 3.95543 20.1049 2.52634 20.3805 2.64639 17.5649 1.74322 17.8676 1.80683 14.8446 1.49193 15.1554 1.49193 12.1324 1.80683 12.4351 1.74322 9.61948 2.64639 9.8951 2.52634 7.34713 3.95543 7.58654 3.78861 5.36658 5.6813 5.56558 5.47579 3.73395 7.76974 3.88971 7.53134 2.50672 10.1642 2.61535 9.89825 1.74133 12.8078 1.79766 12.5219 1.49291 15.6456 1.49291 15.3544Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 132.5 506.5)"
                        />
                        <path id="c1471"
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 132.5 481.5)"
                        />
                        <path
                            d="M150 385.5 150 410.967 147 410.967 147 385.5ZM144 385.5C144 383.015 146.015 381 148.5 381 150.985 381 153 383.015 153 385.5 153 387.985 150.985 390 148.5 390 146.015 390 144 387.985 144 385.5Z"
                            fill="#990099"
                        />
                        <path
                            d="M1.49998-0.00753114 1.63902 27.6846-1.36094 27.6996-1.49998 0.00753114ZM4.63145 26.1695 0.176693 35.192-4.36844 26.2147Z"
                            fill="#989898"
                            transform="matrix(-1 0 0 1 147.677 506.5)"
                        />
                        <path
                            d="M0 0 0.0984777 20.816"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 148.599 430.5)"
                        />
                        <path
                            d="M0 0 648.451 0.000104987"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 695.951 161.5)"
                        />
                        <path
                            d="M1.33333-5.54435e-06 1.33342 19.9144-1.33325 19.9144-1.33333 5.54435e-06ZM8.28095e-05 19.9144 4.00007 17.2478 0.000104987 25.2478-3.99993 17.2478Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 223.5 115.748)"
                        />
                        <rect
                            id="c309"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 214.5 134.5)"
                        />
                        <path
                            d="M1.49999-0.00569373 1.60781 28.3995-1.39217 28.4108-1.49999 0.00569373ZM-4.49997 0.0170812C-4.5094-2.46818-2.50234-4.49053-0.0170812-4.49997 2.46818-4.5094 4.49053-2.50234 4.49997-0.0170812 4.5094 2.46818 2.50234 4.49053 0.0170812 4.49997-2.46818 4.5094-4.49053 2.50234-4.49997 0.0170812Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 224.5 161.905)"
                        />
                        <path
                            d="M0 0 369.099 0.000104987"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 441.599 385.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 266.5 164.5)"
                        />
                        <path
                            d="M200 208.5 200 239.846 197 239.846 197 208.5ZM203 239.846C203 242.331 200.985 244.346 198.5 244.346 196.015 244.346 194 242.331 194 239.846 194 237.361 196.015 235.346 198.5 235.346 200.985 235.346 203 237.361 203 239.846Z"
                            fill="#663300"
                        />
                        <path
                            d="M200 160.5 200 190.099 197 190.099 197 160.5ZM194 160.5C194 158.015 196.015 156 198.5 156 200.985 156 203 158.015 203 160.5 203 162.985 200.985 165 198.5 165 196.015 165 194 162.985 194 160.5Z"
                            fill="#663300"
                        />
                        <path
                            d="M696.107 242.753 48.5001 240.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 25.7222"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 663.5 386.222)"
                        />
                        <path id="c2012"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 648.5 360.5)"
                        />
                        <path id="c2011"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 648.5 336.5)"
                        />
                        <path
                            d="M817.099 386.11 481.5 385.5"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <rect
                            id="c93"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 774.5 432.5)"
                        />
                        <path id="c9302"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 768.5 507.5)"
                        />
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 768.5 507.5)"
                        />
                        <path id="c9301"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 768.5 483.5)"
                        />
                        <path
                            d="M785 385.5 785 414.207 782 414.207 782 385.5ZM779 385.5C779 383.015 781.015 381 783.5 381 785.985 381 788 383.015 788 385.5 788 387.985 785.985 390 783.5 390 781.015 390 779 387.985 779 385.5Z"
                            fill="#990099"
                        />
                        <path
                            d="M785 507.474 785.916 559.456 782.917 559.509 782 507.526ZM788.889 557.903 784.549 566.981 779.891 558.062Z"
                            fill="#989898"
                        />
                        <path
                            d="M783.5 432.5 783.679 453.434"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <rect
                            id="c39"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 260.5 430.5)"
                        />
                        <path
                            d="M268.385 235.516C271.416 235.768 273.699 238.874 273.487 242.455 273.279 245.947 270.77 248.617 267.81 248.496"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.211864 72.6698"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 268.712 163.5)"
                        />
                        <rect
                            id="c66"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 654.5 430.5)"
                        />
                        <path
                            d="M672.5 91.5001 737.425 91.5002"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.0282415 190.488"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 736.5 281.988)"
                        />
                        <path
                            d="M734.5 282.5 869.062 282.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path id="c3362"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 852.5 256.5)"
                        />
                        <path id="c3361"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 852.5 232.5)"
                        />
                        <path
                            d="M0 0 0.000104987 26.1973"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 867.5 282.697)"
                        />
                        <path
                            d="M1.5-3.89374e-06 1.5001 40.4445-1.49989 40.4445-1.5 3.89374e-06ZM4.5001 40.4445C4.50011 42.9298 2.4854 44.9445 0.000116668 44.9445-2.48516 44.9445-4.49989 42.9298-4.4999 40.4445-4.4999 37.9592-2.48519 35.9445 9.33057e-05 35.9445 2.48537 35.9445 4.5001 37.9592 4.5001 40.4445Z"
                            fill="#548235"
                            transform="matrix(1 0 0 -1 867.5 201.945)"
                        />
                        <path
                            d="M769.5 161.5 1076.28 161.5"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M925.268 116.496 925.06 95.5147 928.06 95.4848 928.268 116.466ZM926.56 95.4998 922.09 98.5444 926.5 89.5 931.089 98.4548Z"
                            fill="#548235"
                        />
                        <rect
                            id="c383"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 917.5 135.5)"
                        />
                        <path
                            d="M1.5-0.00107962 1.51837 25.5256-1.48163 25.5278-1.5 0.00107962ZM-4.5 0.00323885C-4.50179-2.48204-2.48852-4.49821-0.00323885-4.5 2.48204-4.50179 4.49821-2.48852 4.5-0.00323885 4.50179 2.48204 2.48852 4.49821 0.00323885 4.5-2.48204 4.50179-4.49821 2.48852-4.5 0.00323885Z"
                            fill="#548235"
                            transform="matrix(1 0 0 -1 927.5 161.027)"
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
                            transform="translate(289.054 285)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(296.221 285)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(299.721 285)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(311.554 285)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(315.054 285)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(161.039 425)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(168.206 425)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(171.706 425)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(193.039 425)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(196.539 425)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(45.5457 173)"
                        >
                            1 С.Ш 35 кВ КРУН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(809.715 210)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(816.215 210)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(819.715 210)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(786.215 223)"
                        >
                            38,5кВ/6,3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(836.215 223)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(686.357 130)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(693.524 130)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(697.024 130)"
                        >
                            Т3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(708.857 130)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(712.357 130)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(185.988 83)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(193.154 83)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(196.654 83)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(201.988 83)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(205.488 83)"
                        >
                            11 (ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(242.654 83)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(246.154 83)"
                        >
                            11)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(430.795 81)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(437.962 81)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(441.462 81)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(446.795 81)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(450.295 81)"
                        >
                            К (п/с
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(479.629 81)"
                        >
                            Кодирия
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(519.129 81)"
                        >
                            )
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(236.387 128)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(243.554 128)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(247.054 128)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(254.221 128)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(257.721 128)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(263.054 128)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(266.554 128)"
                        >
                            11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(370.074 128)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(377.241 128)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(380.741 128)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(387.908 128)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(391.408 128)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(396.741 128)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(400.241 128)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(488.99 129)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(496.157 129)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(499.657 129)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(506.823 129)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(510.323 129)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(515.657 129)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(519.157 129)"
                        >
                            К
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(47.2536 251)"
                        >
                            2 СШ 35 кВ КРУН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(129.384 203)"
                        >
                            МШВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(156.884 203)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(160.384 203)"
                        >
                            35кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(553.661 82)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(560.828 82)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(564.328 82)"
                        >
                            12
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(574.994 82)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(578.494 82)"
                        >
                            3 (ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(610.328 82)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(613.828 82)"
                        >
                            12)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(601.594 131)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(608.761 131)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(612.261 131)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(619.427 131)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(622.927 131)"
                        >
                            12
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(633.594 131)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(637.094 131)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(410.658 427)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(417.824 427)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(421.324 427)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(442.658 427)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(446.158 427)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(676.776 287)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(683.943 287)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(687.443 287)"
                        >
                            Т2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(699.276 287)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(702.776 287)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(576.379 427)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(583.545 427)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(587.045 427)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(608.379 427)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(611.879 427)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(798.685 427)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(805.851 427)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(809.351 427)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(830.685 427)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(834.185 427)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(64.904 396)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(71.0707 396)"
                        >
                            СШ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(91.7373 396)"
                        >
                            10 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(478.347 397)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(488.014 397)"
                        >
                            СШ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(508.68 397)"
                        >
                            10 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(822.158 129)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(829.325 129)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(832.825 129)"
                        >
                            К
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(839.992 129)"
                        >
                            a
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(844.658 129)"
                        >
                            д
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(941.006 129)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(948.173 129)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(951.673 129)"
                        >
                            Я
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(784.93 85)"
                        >
                            Ф. Кадирия
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(901.967 87)"
                        >
                            Ф.
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(915.8 87)"
                        >
                            Ялангач
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(284.758 427)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(291.924 427)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(295.424 427)"
                        >
                            Г1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(688.534 426)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(695.701 426)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(699.201 426)"
                        >
                            Г2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(533.637 15)"
                        >
                            Қодирия ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(666.691 15)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(673.857 15)"
                        >
                            3А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1025.33 174)"
                        >
                            СШ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1046 174)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1054 174)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(690.421 462)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(697.254 462)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(700.754 462)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(690.421 475)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(698.421 475)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(690.421 488)"
                        >
                            7,67 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(690.421 501)"
                        >
                            SF7670
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(724.254 501)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(727.754 501)"
                        >
                            22/3250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(294.7 462)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(301.534 462)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(305.034 462)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(294.7 475)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(302.7 475)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(294.7 488)"
                        >
                            7,67 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(294.7 501)"
                        >
                            SF7670
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(328.534 501)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(332.034 501)"
                        >
                            22/3250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(407.837 462)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(431.003 462)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(434.503 462)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(407.837 475)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(426.503 475)"
                        >
                            /
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(429.503 475)"
                        >
                            0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(445.503 475)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(407.837 488)"
                        >
                            160
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(426.503 488)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(407.837 501)"
                        >
                            SCB10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(439.337 501)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(442.837 501)"
                        >
                            160/10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(558.027 458)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(581.194 458)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(584.694 458)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(558.027 471)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(576.694 471)"
                        >
                            /
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(579.694 471)"
                        >
                            0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(595.694 471)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(558.027 484)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(576.694 484)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(558.027 497)"
                        >
                            SCB10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(592.194 497)"
                        >
                            –
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(600.194 497)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(164.952 463)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(188.118 463)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(191.618 463)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(164.952 476)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(183.618 476)"
                        >
                            /
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(186.618 476)"
                        >
                            0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(202.618 476)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(164.952 489)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(183.618 489)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(164.952 502)"
                        >
                            SCB10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(196.452 502)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(199.952 502)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(801.662 461)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(824.829 461)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(828.329 461)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(801.662 474)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(820.329 474)"
                        >
                            /
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(823.329 474)"
                        >
                            0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(839.329 474)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(801.662 487)"
                        >
                            160
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(820.329 487)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(801.662 500)"
                        >
                            SCB10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(833.162 500)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(836.662 500)"
                        >
                            160/10,5
                        </text>
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 189.5 208.5)"
                        />
                        <path
                            d="M1.33333-5.54435e-06 1.33342 19.9144-1.33325 19.9144-1.33333 5.54435e-06ZM8.28095e-05 19.9144 4.00007 17.2478 0.000104987 25.2478-3.99993 17.2478Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 359.5 115.748)"
                        />
                        <rect
                            id="c255"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 349.5 134.5)"
                        />
                        <path
                            d="M1.49999-0.00569373 1.60781 28.3995-1.39217 28.4108-1.49999 0.00569373ZM-4.49997 0.0170812C-4.5094-2.46818-2.50234-4.49053-0.0170812-4.49997 2.46818-4.5094 4.49053-2.50234 4.49997-0.0170812 4.5094 2.46818 2.50234 4.49053 0.0170812 4.49997-2.46818 4.5094-4.49053 2.50234-4.49997 0.0170812Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 359.5 161.905)"
                        />
                        <path
                            d="M1.33333-2.14645e-06 1.33343 59.8824-1.33324 59.8824-1.33333 2.14645e-06ZM9.64011e-05 59.8824 4.00009 57.2157 0.000104987 65.2157-3.99991 57.2158Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 474.5 155.716)"
                        />
                        <rect
                            id="c228"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 465.5 135.5)"
                        />
                        <path
                            d="M473.74 241.74 473 168.515 476 168.485 476.739 241.709ZM479.739 241.679C479.764 244.164 477.77 246.199 475.285 246.224 472.8 246.249 470.765 244.255 470.74 241.77 470.715 239.285 472.709 237.25 475.194 237.225 477.679 237.2 479.714 239.194 479.739 241.679Z"
                            fill="#663300"
                        />
                        <rect
                            id="c174"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 580.5 136.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(290.427 317)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(297.594 317)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(301.094 317)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(290.427 330)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(309.094 330)"
                        >
                            /3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(317.427 330)"
                        >
                            8,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(333.427 330)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(290.427 343)"
                        >
                            10000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(319.761 343)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(290.427 356)"
                        >
                            SF
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(302.927 356)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(306.427 356)"
                        >
                            10000/38,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(683.34 318)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(690.507 318)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(694.007 318)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(683.34 331)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(702.007 331)"
                        >
                            /3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(710.34 331)"
                        >
                            8,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(726.34 331)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(683.34 344)"
                        >
                            10000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(712.673 344)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(683.34 357)"
                        >
                            SF
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(695.84 357)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(699.34 357)"
                        >
                            10000/38,5
                        </text>
                        <path
                            d="M269.5 360.5 269.5 384.785"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <rect
                            id="c12"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 381.5 430.5)"
                        />
                        <path id="c12002"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 374.5 506.5)"
                        />
                        <path
                            d="M-1.50712 15.5-1.17395 12.0849-0.216285 8.89693 1.30033 6.00964 3.31087 3.49161 5.75173 1.4106 8.55931-0.164108 11.6669-1.16091 15-1.50812 18.3331-1.16091 21.4407-0.164108 24.2483 1.4106 26.6891 3.49161 28.6997 6.00964 30.2163 8.89693 31.1739 12.0849 31.5071 15.5 31.1739 18.9151 30.2163 22.1031 28.6997 24.9904 26.6891 27.5084 24.2483 29.5894 21.4407 31.1641 18.3331 32.1609 15 32.5081 11.6669 32.1609 8.55931 31.1641 5.75173 29.5894 3.31087 27.5084 1.30033 24.9904-0.216285 22.1031-1.17395 18.9151ZM1.79766 18.4781 1.74133 18.1922 2.61535 21.1017 2.50672 20.8358 3.88971 23.4687 3.73395 23.2303 5.56558 25.5242 5.36658 25.3187 7.58654 27.2114 7.34713 27.0446 9.8951 28.4737 9.61948 28.3536 12.4351 29.2568 12.1324 29.1932 15.1554 29.5081 14.8446 29.5081 17.8676 29.1932 17.5649 29.2568 20.3805 28.3536 20.1049 28.4737 22.6529 27.0446 22.4135 27.2114 24.6334 25.3187 24.4344 25.5242 26.2661 23.2303 26.1103 23.4687 27.4933 20.8358 27.3846 21.1017 28.2587 18.1922 28.2023 18.4781 28.5071 15.3544 28.5071 15.6456 28.2023 12.5219 28.2587 12.8078 27.3846 9.89825 27.4933 10.1642 26.1103 7.53134 26.2661 7.76974 24.4344 5.47579 24.6334 5.6813 22.4135 3.78861 22.6529 3.95543 20.1049 2.52634 20.3805 2.64639 17.5649 1.74322 17.8676 1.80683 14.8446 1.49193 15.1554 1.49193 12.1324 1.80683 12.4351 1.74322 9.61948 2.64639 9.8951 2.52634 7.34713 3.95543 7.58654 3.78861 5.36658 5.6813 5.56558 5.47579 3.73395 7.76974 3.88971 7.53134 2.50672 10.1642 2.61535 9.89825 1.74133 12.8078 1.79766 12.5219 1.49291 15.6456 1.49291 15.3544Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 374.5 506.5)"
                        />
                        <path id="c12001"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 375.5 481.5)"
                        />
                        <path
                            d="M392 385.5 392 410.967 389 410.967 389 385.5ZM386 385.5C386 383.015 388.015 381 390.5 381 392.985 381 395 383.015 395 385.5 395 387.985 392.985 390 390.5 390 388.015 390 386 387.985 386 385.5Z"
                            fill="#990099"
                        />
                        <path
                            d="M1.49996-0.01062 1.82639 46.0939-1.17353 46.1151-1.49996 0.01062ZM4.81569 44.5727 0.379528 53.6043-4.18408 44.6364Z"
                            fill="#989898"
                            transform="matrix(-1 0 0 1 389.88 506.5)"
                        />
                        <path
                            d="M0 0 0.0984777 20.816"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 390.599 430.5)"
                        />
                        <path
                            d="M220.32 509.559 313.428 509.559 313.428 522.359 220.32 522.359Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.32 522.359 313.428 522.359 313.428 535.159 220.32 535.159Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.32 535.159 313.428 535.159 313.428 547.959 220.32 547.959Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.32 547.959 313.428 547.959 313.428 560.759 220.32 560.759Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.32 560.759 313.428 560.759 313.428 573.559 220.32 573.559Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.32 573.559 313.428 573.559 313.428 586.359 220.32 586.359Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M219.653 522.359 314.095 522.359"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M219.653 535.159 314.095 535.159"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M219.653 547.959 314.095 547.959"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M219.653 560.759 314.095 560.759"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M219.653 573.559 314.095 573.559"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.32 508.893 220.32 587.026"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M313.428 508.893 313.428 587.026"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M219.653 509.559 314.095 509.559"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M219.653 586.359 314.095 586.359"
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
                                transform="translate(224.1 520)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g40"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(224.1 532)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a39"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(224.1 545)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k39"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(224.1 558)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n39"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(224.1 571)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w39"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(224.1 584)"
                            >
                                Qвода
                            </text>
                        </g>
                        <rect
                            id="c120"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 530.5 430.5)"
                        />
                        <path id="c1202"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 524.5 506.5)"
                        />
                        <path
                            d="M-1.50712 15.5-1.17395 12.0849-0.216285 8.89693 1.30033 6.00964 3.31087 3.49161 5.75173 1.4106 8.55931-0.164108 11.6669-1.16091 15-1.50812 18.3331-1.16091 21.4407-0.164108 24.2483 1.4106 26.6891 3.49161 28.6997 6.00964 30.2163 8.89693 31.1739 12.0849 31.5071 15.5 31.1739 18.9151 30.2163 22.1031 28.6997 24.9904 26.6891 27.5084 24.2483 29.5894 21.4407 31.1641 18.3331 32.1609 15 32.5081 11.6669 32.1609 8.55931 31.1641 5.75173 29.5894 3.31087 27.5084 1.30033 24.9904-0.216285 22.1031-1.17395 18.9151ZM1.79766 18.4781 1.74133 18.1922 2.61535 21.1017 2.50672 20.8358 3.88971 23.4687 3.73395 23.2303 5.56558 25.5242 5.36658 25.3187 7.58654 27.2114 7.34713 27.0446 9.8951 28.4737 9.61948 28.3536 12.4351 29.2568 12.1324 29.1932 15.1554 29.5081 14.8446 29.5081 17.8676 29.1932 17.5649 29.2568 20.3805 28.3536 20.1049 28.4737 22.6529 27.0446 22.4135 27.2114 24.6334 25.3187 24.4344 25.5242 26.2661 23.2303 26.1103 23.4687 27.4933 20.8358 27.3846 21.1017 28.2587 18.1922 28.2023 18.4781 28.5071 15.3544 28.5071 15.6456 28.2023 12.5219 28.2587 12.8078 27.3846 9.89825 27.4933 10.1642 26.1103 7.53134 26.2661 7.76974 24.4344 5.47579 24.6334 5.6813 22.4135 3.78861 22.6529 3.95543 20.1049 2.52634 20.3805 2.64639 17.5649 1.74322 17.8676 1.80683 14.8446 1.49193 15.1554 1.49193 12.1324 1.80683 12.4351 1.74322 9.61948 2.64639 9.8951 2.52634 7.34713 3.95543 7.58654 3.78861 5.36658 5.6813 5.56558 5.47579 3.73395 7.76974 3.88971 7.53134 2.50672 10.1642 2.61535 9.89825 1.74133 12.8078 1.79766 12.5219 1.49291 15.6456 1.49291 15.3544Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 524.5 506.5)"
                        />
                        <path id="c1201"
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 524.5 481.5)"
                        />
                        <path
                            d="M542 385.5 542 410.967 539 410.967 539 385.5ZM536 385.5C536 383.015 538.015 381 540.5 381 542.985 381 545 383.015 545 385.5 545 387.985 542.985 390 540.5 390 538.015 390 536 387.985 536 385.5Z"
                            fill="#990099"
                        />
                        <path
                            d="M541 506.5 541 551.854 538 551.854 538 506.5ZM544 550.354 539.5 559.354 535 550.354Z"
                            fill="#989898"
                        />
                        <path
                            d="M0 0 0.0984777 20.816"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 539.599 430.5)"
                        />
                        <path
                            d="M620.338 508.765 713.446 508.765 713.446 521.565 620.338 521.565Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M620.338 521.565 713.446 521.565 713.446 534.365 620.338 534.365Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M620.338 534.365 713.446 534.365 713.446 547.165 620.338 547.165Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M620.338 547.165 713.446 547.165 713.446 559.965 620.338 559.965Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M620.338 559.965 713.446 559.965 713.446 572.765 620.338 572.765Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M620.338 572.765 713.446 572.765 713.446 585.565 620.338 585.565Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M619.671 521.565 714.113 521.565"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M619.671 534.365 714.113 534.365"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M619.671 547.165 714.113 547.165"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M619.671 559.965 714.113 559.965"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M619.671 572.765 714.113 572.765"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M620.338 508.098 620.338 586.231"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M713.446 508.098 713.446 586.231"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M619.671 508.765 714.113 508.765"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M619.671 585.565 714.113 585.565"
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
                                transform="translate(624.118 519)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g67"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(624.118 532)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a66"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(624.118 544)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k66"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(624.118 557)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n66"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(624.118 570)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w66" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(624.118 583)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M1.5-2.46475e-06 1.5001 63.893-1.49989 63.893-1.5 2.46475e-06ZM4.5001 63.893C4.50011 66.3783 2.48539 68.393 0.000112381 68.393-2.48517 68.393-4.49989 66.3783-4.4999 63.893-4.4999 61.4077-2.48518 59.393 9.75926e-05 59.393 2.48538 59.393 4.5001 61.4077 4.5001 63.893Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 663.5 306.393)"
                        />
                        <rect
                            id="c201"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 653.5 292.5)"
                        />
                        <path
                            d="M809.268 116.496 809.06 95.5147 812.06 95.4848 812.268 116.466ZM810.56 95.4998 806.09 98.5444 810.5 89.5 815.089 98.4548Z"
                            fill="#548235"
                        />
                        <rect
                            id="c360"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 801.5 135.5)"
                        />
                        <path
                            d="M1.5-0.00107962 1.51837 25.5256-1.48163 25.5278-1.5 0.00107962ZM-4.5 0.00323885C-4.50179-2.48204-2.48852-4.49821-0.00323885-4.5 2.48204-4.50179 4.49821-2.48852 4.5-0.00323885 4.50179 2.48204 2.48852 4.49821 0.00323885 4.5-2.48204 4.50179-4.49821 2.48852-4.5 0.00323885Z"
                            fill="#548235"
                            transform="matrix(1 0 0 -1 810.5 161.027)"
                        />
                        <path
                            d="M674.712 114.51 674.5 90.5001"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 665.5 133.5)"
                        />
                        <path
                            d="M673 160.562 673 133.5 676 133.5 676 160.562ZM679 160.562C679 163.048 676.985 165.062 674.5 165.062 672.015 165.062 670 163.048 670 160.562 670 158.077 672.015 156.062 674.5 156.062 676.985 156.062 679 158.077 679 160.562Z"
                            fill="#663300"
                        />
                        <path
                            d="M1040.99 405.902 1040.21 313.845 1042.88 313.822 1043.66 405.88ZM1041.55 313.833 1037.57 316.534 1041.5 308.5 1045.57 316.466Z"
                            fill="#2E75B6"
                        />
                        <path
                            d="M994.5 536.5 1042.26 536.5"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 90.1581"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1041.5 537.658)"
                        />
                        <path id="c53002"
                            d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1025.5 458.5)"
                        />
                        <path id="c53001"
                            d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1025.5 437.5)"
                        />
                        <rect
                            id="c53"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1032.5 389.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1186.94 428)"
                        >
                            MIR
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1179.52 441)"
                        >
                            SALAR
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1179.19 454)"
                        >
                            100 кВт
                        </text>
                        <path
                            d="M1.33328-0.012336 2.18503 92.0456-0.481518 92.0703-1.33328 0.012336ZM0.851758 92.058 4.82691 89.3544 0.901102 97.3911-3.17274 89.4284Z"
                            fill="#2E75B6"
                            transform="matrix(1 0 0 -1 1139.5 405.891)"
                        />
                        <path
                            d="M0 0 52.2361 0.000104987"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1191.74 537.5)"
                        />
                        <path
                            d="M1140.5 538.658 1140.5 448.5"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path id="c57002"
                            d="M1157.5 443C1157.5 452.113 1149.44 459.5 1139.5 459.5 1129.56 459.5 1121.5 452.113 1121.5 443 1121.5 433.887 1129.56 426.5 1139.5 426.5 1149.44 426.5 1157.5 433.887 1157.5 443Z"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                        />
                        <path id="c57001"
                            d="M1157.5 422C1157.5 431.113 1149.44 438.5 1139.5 438.5 1129.56 438.5 1121.5 431.113 1121.5 422 1121.5 412.887 1129.56 405.5 1139.5 405.5 1149.44 405.5 1157.5 412.887 1157.5 422Z"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                        />
                        <rect
                            id="c57"
                            x="1129.5"
                            y="372.5"
                            width="20"
                            height="18"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1061.99 270)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1069.16 270)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1072.66 270)"
                        >
                            УГТС 0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1118.66 270)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1062.41 427)"
                        >
                            Солнечный
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1067.58 440)"
                        >
                            инвертор
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(969.883 437)"
                        >
                            SIFRA
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1000.22 437)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1003.72 437)"
                        >
                            B
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(972.549 450)"
                        >
                            100 кВт
                        </text>
                        <g
                            clip-path="url(#clip1)"
                            transform="matrix(0.000104987 0 0 0.000104987 1071 286)"
                        >
                            <g clip-path="url(#clip3)" transform="matrix(1 0 0 1.02857 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(326.192 82)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(333.359 82)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(336.859 82)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(342.192 82)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(345.692 82)"
                        >
                            Л (Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(366.192 82)"
                        >
                            афарга)
                        </text>
                        <rect
                            id="c336"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 857.5 193.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(886.193 187)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(893.36 187)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(896.86 187)"
                        >
                            Т3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(908.693 187)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(912.193 187)"
                        >
                            6
                        </text>
                        <path
                            d="M475.385 155.516C478.416 155.768 480.699 158.874 480.487 162.455 480.279 165.947 477.77 168.617 474.81 168.496"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M590.74 240.74 590 167.515 593 167.485 593.739 240.709ZM596.739 240.679C596.764 243.164 594.77 245.199 592.285 245.224 589.8 245.249 587.765 243.255 587.74 240.77 587.715 238.285 589.709 236.25 592.194 236.225 594.679 236.2 596.714 238.194 596.739 240.679Z"
                            fill="#663300"
                        />
                        <path
                            d="M591.886 154.513C595.192 154.744 597.701 157.835 597.488 161.418 597.28 164.918 594.546 167.608 591.31 167.497"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g
                            clip-path="url(#clip4)"
                            transform="matrix(0.000104987 0 0 0.000104987 1047 58)"
                        >
                            <g clip-path="url(#clip6)" transform="scale(1.01496 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1069.17 53.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1167.5 107.171)"
                        />
                        <path
                            d="M1165.55 120.031 1157.86 111.654 1158.35 111.203 1166.04 119.58ZM1158.11 111.429 1157.95 115.197 1154.5 107.5 1161.87 111.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1174.95 119.889 1165.5 119.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1072.56 39.6248 1166.93 39.6248 1166.93 52.4248 1072.56 52.4248Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1072.56 38.9581 1072.56 53.0914"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1166.93 38.9581 1166.93 53.0914"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1071.9 39.6248 1167.6 39.6248"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1071.9 52.4248 1167.6 52.4248"
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
                                transform="translate(1076.34 50)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1086.84 50)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1068.5 53.5001 1087.69 53.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1175.06 106.708 1262.72 106.708 1262.72 119.508 1175.06 119.508Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1175.06 106.042 1175.06 120.175"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1262.72 106.042 1262.72 120.175"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.39 106.708 1263.38 106.708"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.39 119.508 1263.38 119.508"
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
                                transform="translate(1178.84 117)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1189.34 117)"
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
                            transform="matrix(1 0 0 -1 1065.5 61.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1174.99 79.5001)"
                        />
                        <path
                            d="M1174.5 79.5001 1193.69 79.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.25 66.5249 1252.45 66.5249 1252.45 79.3249 1179.25 79.3249Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.25 65.8583 1179.25 79.9916"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1252.45 65.8583 1252.45 79.9916"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1178.59 66.5249 1253.12 66.5249"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1178.59 79.3249 1253.12 79.3249"
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
                                transform="translate(1183.03 77)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1150.5 107.5 1173.21 107.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M182.454 39.5032 266.053 39.5032 266.053 53.0944 182.454 53.0944Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M182.454 53.0944 266.053 53.0944 266.053 66.6856 182.454 66.6856Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M181.787 53.0944 266.72 53.0944"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M182.454 38.8365 182.454 67.3522"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M266.053 38.8365 266.053 67.3522"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M181.787 39.5032 266.72 39.5032"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M181.787 66.6856 266.72 66.6856"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g309Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(186.233 50)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g309Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(186.233 63)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip7)"
                            transform="matrix(0.000104987 0 0 0.000104987 258 40)"
                        >
                            <g clip-path="url(#clip9)" transform="matrix(1 0 0 1.02857 0 -0.03125)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 258 54)"
                        >
                            <g clip-path="url(#clip11)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M314.403 40.1415 398.002 40.1415 398.002 53.7327 314.403 53.7327Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M314.403 53.7327 398.002 53.7327 398.002 67.3239 314.403 67.3239Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M313.736 53.7327 398.669 53.7327"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M314.403 39.4749 314.403 67.9905"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M398.002 39.4749 398.002 67.9905"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M313.736 40.1415 398.669 40.1415"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M313.736 67.3239 398.669 67.3239"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g255Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(318.182 50)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g255Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(318.182 64)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip12)"
                            transform="matrix(0.000104987 0 0 0.000104987 390 41)"
                        >
                            <g clip-path="url(#clip13)" transform="matrix(1 0 0 1.02857 -0.25 0)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 390 54)"
                        >
                            <g clip-path="url(#clip15)" transform="matrix(1 0 0 1.11429 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M439.535 39.5124 523.134 39.5124 523.134 53.1036 439.535 53.1036Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M439.535 53.1036 523.134 53.1036 523.134 66.6948 439.535 66.6948Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M438.868 53.1036 523.801 53.1036"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M439.535 38.8458 439.535 67.3615"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M523.134 38.8458 523.134 67.3615"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M438.868 39.5124 523.801 39.5124"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M438.868 66.6948 523.801 66.6948"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g228Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(443.314 50)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g228Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(443.314 63)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip16)"
                            transform="matrix(0.000104987 0 0 0.000104987 515 40)"
                        >
                            <g
                                clip-path="url(#clip17)"
                                transform="matrix(1 0 0 1.02857 -0.5 -0.03125)"
                            >
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
                            transform="matrix(0.000104987 0 0 0.000104987 515 54)"
                        >
                            <g clip-path="url(#clip19)" transform="matrix(1.16667 0 0 1 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M550.731 39.4781 634.331 39.4781 634.331 53.0693 550.731 53.0693Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M550.731 53.0693 634.331 53.0693 634.331 66.6605 550.731 66.6605Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M550.064 53.0693 634.997 53.0693"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M550.731 38.8114 550.731 67.3271"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M634.331 38.8114 634.331 67.3271"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M550.064 39.4781 634.997 39.4781"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M550.064 66.6605 634.997 66.6605"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g174Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(554.511 49)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g174Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(554.511 63)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip20)"
                            transform="matrix(0.000104987 0 0 0.000104987 626 40)"
                        >
                            <g clip-path="url(#clip21)" transform="matrix(1 0 0 1.02857 0 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip22)"
                            transform="matrix(0.000104987 0 0 0.000104987 627 54)"
                        >
                            <g clip-path="url(#clip23)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M890.967 212.47 974.567 212.47 974.567 226.061 890.967 226.061Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M890.967 226.061 974.567 226.061 974.567 239.653 890.967 239.653Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M890.3 226.061 975.233 226.061"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M890.967 211.804 890.967 240.319"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M974.567 211.804 974.567 240.319"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M890.3 212.47 975.233 212.47"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M890.3 239.653 975.233 239.653"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g336Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(894.746 222)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g336Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(894.746 236)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip24)"
                            transform="matrix(0.000104987 0 0 0.000104987 966 213)"
                        >
                            <g clip-path="url(#clip25)" transform="matrix(1 0 0 1.02857 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip26)"
                            transform="matrix(0.000104987 0 0 0.000104987 967 227)"
                        >
                            <g clip-path="url(#clip27)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M557.347 318.14 640.947 318.14 640.947 331.731 557.347 331.731Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M557.347 331.731 640.947 331.731 640.947 345.322 557.347 345.322Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M556.68 331.731 641.613 331.731"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M557.347 317.473 557.347 345.989"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M640.947 317.473 640.947 345.989"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M556.68 318.14 641.613 318.14"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M556.68 345.322 641.613 345.322"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g201Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(561.127 328)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g201Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(561.127 342)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip28)"
                            transform="matrix(0.000104987 0 0 0.000104987 633 319)"
                        >
                            <g clip-path="url(#clip29)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip30)"
                            transform="matrix(0.000104987 0 0 0.000104987 633 332)"
                        >
                            <g clip-path="url(#clip31)" transform="scale(1 1.11429)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M165.08 319.348 248.68 319.348 248.68 332.939 165.08 332.939Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M165.08 332.939 248.68 332.939 248.68 346.531 165.08 346.531Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M164.414 332.939 249.347 332.939"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M165.08 318.681 165.08 347.197"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M248.68 318.681 248.68 347.197"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M164.414 319.348 249.347 319.348"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M164.414 346.531 249.347 346.531"
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
                                transform="translate(168.86 329)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g282Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(168.86 343)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip32)"
                            transform="matrix(0.000104987 0 0 0.000104987 240 320)"
                        >
                            <g clip-path="url(#clip33)" transform="matrix(1.16667 0 0 1 -0.25 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip34)"
                            transform="matrix(0.000104987 0 0 0.000104987 241 334)"
                        >
                            <g clip-path="url(#clip35)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M474.105 368.593 534.448 368.593 534.448 381.393 474.105 381.393Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M474.105 367.926 474.105 382.059"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M534.448 367.926 534.448 382.059"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M473.439 368.593 535.115 368.593"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M473.439 381.393 535.115 381.393"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g69"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(477.885 379)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M998.752 287.784 1082.35 287.784 1082.35 301.375 998.752 301.375Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M998.752 287.117 998.752 302.042"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1082.35 287.117 1082.35 302.042"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M998.086 287.784 1083.02 287.784"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M998.086 301.375 1083.02 301.375"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g53"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1002.53 298)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip36)"
                            transform="matrix(0.000104987 0 0 0.000104987 1074 289)"
                        >
                            <g clip-path="url(#clip37)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1100.57 287.784 1184.17 287.784 1184.17 301.375 1100.57 301.375Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1100.57 287.117 1100.57 302.042"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1184.17 287.117 1184.17 302.042"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1099.9 287.784 1184.84 287.784"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1099.9 301.375 1184.84 301.375"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g57"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1104.35 298)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip38)"
                            transform="matrix(0.000104987 0 0 0.000104987 1176 289)"
                        >
                            <g clip-path="url(#clip39)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M66.1814 368.609 126.524 368.609 126.524 381.409 66.1814 381.409Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M66.1814 367.943 66.1814 382.076"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M126.524 367.943 126.524 382.076"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M65.5148 368.609 127.191 368.609"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M65.5148 381.409 127.191 381.409"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g42"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(69.9609 379)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M46.6589 222.894 107.002 222.894 107.002 235.694 46.6589 235.694Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M46.6589 222.228 46.6589 236.361"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M107.002 222.228 107.002 236.361"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M45.9922 222.894 107.668 222.894"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M45.9922 235.694 107.668 235.694"
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
                                transform="translate(50.4384 233)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M45.8529 144.616 106.196 144.616 106.196 157.416 45.8529 157.416Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M45.8529 143.95 45.8529 158.083"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M106.196 143.95 106.196 158.083"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M45.1862 144.616 106.862 144.616"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M45.1862 157.416 106.862 157.416"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g204"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(49.6324 155)"
                            >
                                U
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip40)"
                            transform="matrix(0.000104987 0 0 0.000104987 950 455)"
                        >
                            <g clip-path="url(#clip42)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img41"
                                    transform="matrix(6846.09 0 0 6846.09 -1 -0.5)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 1149 456)">
                            <g clip-path="url(#clip43)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img41"
                                    transform="scale(6846.09 6846.09)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1015.59 144.402 1075.93 144.402 1075.93 157.202 1015.59 157.202Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1015.59 143.736 1015.59 157.869"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1075.93 143.736 1075.93 157.869"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1014.92 144.402 1076.6 144.402"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1014.92 157.202 1076.6 157.202"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g354"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1019.37 154)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M772.669 56.9573 856.269 56.9573 856.269 70.5485 772.669 70.5485Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M772.669 56.2906 772.669 71.2151"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M856.269 56.2906 856.269 71.2151"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M772.003 56.9573 856.936 56.9573"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M772.003 70.5485 856.936 70.5485"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g360"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(776.449 67)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip44)"
                            transform="matrix(0.000104987 0 0 0.000104987 848 58)"
                        >
                            <g clip-path="url(#clip45)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M888.11 57.1189 971.71 57.1189 971.71 70.7101 888.11 70.7101Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M888.11 56.4523 888.11 71.3768"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M971.71 56.4523 971.71 71.3768"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M887.444 57.1189 972.376 57.1189"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M887.444 70.7101 972.376 70.7101"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g383"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(891.89 67)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip46)"
                            transform="matrix(0.000104987 0 0 0.000104987 964 58)"
                        >
                            <g clip-path="url(#clip47)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path id="c39001"
                            d="M244.5 480C244.5 466.469 255.469 455.5 269 455.5 282.531 455.5 293.5 466.469 293.5 480 293.5 493.531 282.531 504.5 269 504.5 255.469 504.5 244.5 493.531 244.5 480Z"
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
                                            d="M268.689 472.933 269.622 472.933 270.944 473.167 272.033 473.633 272.889 474.178 273.9 475.189 274.522 476.122 274.989 477.367 275.144 478.067 275.144 479.933 274.833 481.1 274.211 482.344 273.589 483.122 273.044 483.667 271.956 484.367 270.711 484.833 269.933 484.989 268.378 484.989 267.133 484.678 266.278 484.289 265.422 483.744 264.567 482.967 264.022 482.189 263.478 481.1 263.167 479.856 263.089 478.922 263.244 477.678 263.556 476.667 264.178 475.5 265.033 474.567 265.656 474.022 266.978 473.322 268.144 473.011Z"
                                        />
                                        <path
                                            d="M269.156 459.089 270.011 459.089 271.489 459.322 272.967 459.789 274.211 460.411 275.144 461.033 275.922 461.733 276.856 462.667 277.711 463.911 278.333 465.156 278.8 466.556 279.033 467.722 279.111 468.344 279.111 469.822 278.878 471.3 278.489 472.622 277.867 473.944 277.089 475.033 276.933 475.033 276.311 473.944 275.378 472.856 274.522 472.078 273.433 471.378 272.267 470.833 270.944 470.444 269.156 470.211Z"
                                        />
                                        <path
                                            d="M256.4 474.878 256.789 474.956 258.967 476.2 260.522 477.133 260.6 477.289 260.444 478.922 260.6 480.556 260.989 482.033 261.533 483.2 261.533 483.433 259.356 484.678 257.489 485.767 253.444 488.1 252.122 488.878 251.889 488.878 251.189 487.4 250.8 486.078 250.644 485.144 250.567 483.822 250.722 482.344 250.956 481.256 251.5 479.778 252.044 478.767 252.744 477.756 253.678 476.744 254.533 475.967 255.933 475.111Z"
                                        />
                                        <path
                                            d="M276.7 483.433 277.089 483.511 278.956 484.6 285.022 488.1 286.344 488.878 286.189 489.267 285.644 490.044 284.944 490.9 284.4 491.444 283.233 492.3 281.989 493 280.511 493.544 279.344 493.778 278.878 493.856 276.544 493.856 275.378 493.622 274.133 493.233 272.811 492.611 271.878 491.989 271.878 487.322 272.578 487.011 273.9 486.311 274.833 485.611 275.922 484.522Z"
                                        />
                                        <path
                                            d="M259.667 464.067 261.378 464.067 262.856 464.3 264.489 464.844 265.811 465.544 266.433 465.933 266.433 470.678 265.033 471.3 263.944 472 263.089 472.7 262.544 473.244 261.611 474.567 261.144 474.411 259.822 473.633 253.756 470.133 252.044 469.122 251.967 468.967 252.511 468.111 253.367 467.1 253.989 466.478 255.156 465.622 256.244 465 257.722 464.456 258.578 464.222Z"
                                        />
                                        <path
                                            d="M263.167 485.533 263.478 485.611 264.644 486.467 265.967 487.089 267.211 487.478 268.144 487.633 269.078 487.711 269.156 487.789 269.156 498.833 267.989 498.833 266.433 498.522 265.111 498.056 263.711 497.278 262.7 496.5 261.922 495.8 261.144 494.867 260.367 493.622 259.744 492.222 259.356 490.744 259.2 489.344 259.2 488.489 259.278 487.789 261.222 486.7 262.544 485.922Z"
                                        />
                                        <path
                                            d="M286.267 469.044 286.422 469.044 286.967 470.133 287.433 471.533 287.667 472.778 287.744 474.333 287.589 475.733 287.278 477.056 286.656 478.533 286.111 479.467 285.489 480.322 284.633 481.256 283.467 482.189 282.456 482.811 281.756 483.122 279.811 482.033 277.944 480.944 277.711 480.789 277.867 479.389 277.867 478.222 278.567 477.522 279.578 476.2 280.278 475.033 280.978 473.556 281.522 471.844 282.222 471.378 284.167 470.289 286.033 469.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c66001"
                            d="M639.5 479C639.5 465.469 650.469 454.5 664 454.5 677.531 454.5 688.5 465.469 688.5 479 688.5 492.531 677.531 503.5 664 503.5 650.469 503.5 639.5 492.531 639.5 479Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                        />
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M663.689 471.933 664.622 471.933 665.944 472.167 667.033 472.633 667.889 473.178 668.9 474.189 669.522 475.122 669.989 476.367 670.144 477.067 670.144 478.933 669.833 480.1 669.211 481.344 668.589 482.122 668.044 482.667 666.956 483.367 665.711 483.833 664.933 483.989 663.378 483.989 662.133 483.678 661.278 483.289 660.422 482.744 659.567 481.967 659.022 481.189 658.478 480.1 658.167 478.856 658.089 477.922 658.244 476.678 658.556 475.667 659.178 474.5 660.033 473.567 660.656 473.022 661.978 472.322 663.144 472.011Z"
                                    />
                                    <path
                                        d="M664.156 458.089 665.011 458.089 666.489 458.322 667.967 458.789 669.211 459.411 670.144 460.033 670.922 460.733 671.856 461.667 672.711 462.911 673.333 464.156 673.8 465.556 674.033 466.722 674.111 467.344 674.111 468.822 673.878 470.3 673.489 471.622 672.867 472.944 672.089 474.033 671.933 474.033 671.311 472.944 670.378 471.856 669.522 471.078 668.433 470.378 667.267 469.833 665.944 469.444 664.156 469.211Z"
                                    />
                                    <path
                                        d="M651.4 473.878 651.789 473.956 653.967 475.2 655.522 476.133 655.6 476.289 655.444 477.922 655.6 479.556 655.989 481.033 656.533 482.2 656.533 482.433 654.356 483.678 652.489 484.767 648.444 487.1 647.122 487.878 646.889 487.878 646.189 486.4 645.8 485.078 645.644 484.144 645.567 482.822 645.722 481.344 645.956 480.256 646.5 478.778 647.044 477.767 647.744 476.756 648.678 475.744 649.533 474.967 650.933 474.111Z"
                                    />
                                    <path
                                        d="M671.7 482.433 672.089 482.511 673.956 483.6 680.022 487.1 681.344 487.878 681.189 488.267 680.644 489.044 679.944 489.9 679.4 490.444 678.233 491.3 676.989 492 675.511 492.544 674.344 492.778 673.878 492.856 671.544 492.856 670.378 492.622 669.133 492.233 667.811 491.611 666.878 490.989 666.878 486.322 667.578 486.011 668.9 485.311 669.833 484.611 670.922 483.522Z"
                                    />
                                    <path
                                        d="M654.667 463.067 656.378 463.067 657.856 463.3 659.489 463.844 660.811 464.544 661.433 464.933 661.433 469.678 660.033 470.3 658.944 471 658.089 471.7 657.544 472.244 656.611 473.567 656.144 473.411 654.822 472.633 648.756 469.133 647.044 468.122 646.967 467.967 647.511 467.111 648.367 466.1 648.989 465.478 650.156 464.622 651.244 464 652.722 463.456 653.578 463.222Z"
                                    />
                                    <path
                                        d="M658.167 484.533 658.478 484.611 659.644 485.467 660.967 486.089 662.211 486.478 663.144 486.633 664.078 486.711 664.156 486.789 664.156 497.833 662.989 497.833 661.433 497.522 660.111 497.056 658.711 496.278 657.7 495.5 656.922 494.8 656.144 493.867 655.367 492.622 654.744 491.222 654.356 489.744 654.2 488.344 654.2 487.489 654.278 486.789 656.222 485.7 657.544 484.922Z"
                                    />
                                    <path
                                        d="M681.267 468.044 681.422 468.044 681.967 469.133 682.433 470.533 682.667 471.778 682.744 473.333 682.589 474.733 682.278 476.056 681.656 477.533 681.111 478.467 680.489 479.322 679.633 480.256 678.467 481.189 677.456 481.811 676.756 482.122 674.811 481.033 672.944 479.944 672.711 479.789 672.867 478.389 672.867 477.222 673.567 476.522 674.578 475.2 675.278 474.033 675.978 472.556 676.522 470.844 677.222 470.378 679.167 469.289 681.033 468.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        <path
                            d="M7.50005 552C7.50005 546.753 11.7533 542.5 17.0001 542.5 22.2468 542.5 26.5001 546.753 26.5001 552 26.5001 557.247 22.2468 561.5 17.0001 561.5 11.7533 561.5 7.50005 557.247 7.50005 552Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M7.50005 573.5C7.50005 568.529 11.7533 564.5 17.0001 564.5 22.2468 564.5 26.5001 568.529 26.5001 573.5 26.5001 578.471 22.2468 582.5 17.0001 582.5 11.7533 582.5 7.50005 578.471 7.50005 573.5Z"
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
                            transform="translate(31.985 554)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(31.9023 576)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M7 529.5C7 524.253 11.2533 520 16.5 520 21.7467 520 26 524.253 26 529.5 26 534.747 21.7467 539 16.5 539 11.2533 539 7 534.747 7 529.5Z"
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
                            transform="translate(31.9023 532)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(32.1671 509)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(31.9024 485)"
                        >
                            прием
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 12 474)">
                            <g clip-path="url(#clip48)" transform="scale(1 1.07143)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 12 496)">
                            <g clip-path="url(#clip49)" transform="scale(1 1.07143)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M110.113 544.375 193.713 544.375 193.713 557.966 110.113 557.966Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M110.113 543.708 110.113 558.633"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M193.713 543.708 193.713 558.633"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M109.447 544.375 194.379 544.375"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M109.447 557.966 194.379 557.966"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g147"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(113.893 554)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip50)"
                            transform="matrix(0.000104987 0 0 0.000104987 185 545)"
                        >
                            <g clip-path="url(#clip51)" transform="matrix(1.16667 0 0 1 -0.125 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M348.901 565.239 432.501 565.239 432.501 578.83 348.901 578.83Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M348.901 564.572 348.901 579.496"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M432.501 564.572 432.501 579.496"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M348.235 565.239 433.168 565.239"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M348.235 578.83 433.168 578.83"
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
                                transform="translate(352.681 575)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip52)"
                            transform="matrix(0.000104987 0 0 0.000104987 424 566)"
                        >
                            <g clip-path="url(#clip53)" transform="matrix(1 0 0 1.02857 0 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M496.723 565.239 580.322 565.239 580.322 578.83 496.723 578.83Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M496.723 564.572 496.723 579.496"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M580.322 564.572 580.322 579.496"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M496.056 565.239 580.989 565.239"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M496.056 578.83 580.989 578.83"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g120"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(500.502 575)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip54)"
                            transform="matrix(0.000104987 0 0 0.000104987 572 566)"
                        >
                            <g clip-path="url(#clip55)" transform="matrix(1 0 0 1.02857 0 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M743.639 570.877 827.238 570.877 827.238 584.468 743.639 584.468Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M743.639 570.21 743.639 585.135"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M827.238 570.21 827.238 585.135"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M742.972 570.877 827.905 570.877"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M742.972 584.468 827.905 584.468"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g93"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(747.418 581)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip56)"
                            transform="matrix(0.000104987 0 0 0.000104987 819 572)"
                        >
                            <g clip-path="url(#clip57)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img8"
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

        fetch('/qodiriya/server3a')
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
                    if (item.id === 309) {
                        const plus = document.getElementById("g309Plus");
                        const minus = document.getElementById("g309Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(309);
                        } else {
                            falseAnimation(309);
                        }
                    } else if(item.id === 255) {
                        const plus = document.getElementById("g255Plus");
                        const minus = document.getElementById("g255Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(255);
                        } else {
                            falseAnimation(255);
                        }
                    } else if(item.id === 228) {
                        const plus = document.getElementById("g228Plus");
                        const minus = document.getElementById("g228Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(228);
                        } else {
                            falseAnimation(228);
                        }
                    } else if(item.id === 174) {
                        const plus = document.getElementById("g174Plus");
                        const minus = document.getElementById("g174Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(174);
                        } else {
                            falseAnimation(174);
                        }
                    } else if(item.id === 360) {
                        const value = document.getElementById("g360");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(360);
                        } else {
                            falseAnimation(360);
                        }
                    } else if(item.id === 383) {
                        const value = document.getElementById("g383");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(383);
                        } else {
                            falseAnimation(383);
                        }
                    } else if(item.id === 336) {
                        const plus = document.getElementById("g336Plus");
                        const minus = document.getElementById("g336Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(336);
                            trueAnimation(3361);
                            trueAnimation(3362);
                        } else {
                            falseAnimation(336);
                            falseAnimation(3361);
                            falseAnimation(3362);
                        }
                    } else if(item.id === 282) {
                        const plus = document.getElementById("g282Plus");
                        const minus = document.getElementById("g282Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(282);
                            trueAnimation(2821);
                            trueAnimation(2822);
                        } else {
                            falseAnimation(282);
                            falseAnimation(2821);
                            falseAnimation(2822);
                        }
                    } else if(item.id === 201) {
                        const plus = document.getElementById("g201Plus");
                        const minus = document.getElementById("g201Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(201);
                            trueAnimation(2011);
                            trueAnimation(2012);
                        } else {
                            falseAnimation(201);
                            falseAnimation(2011);
                            falseAnimation(2012);
                        }
                    } else if(item.id === 147) {
                        const value = document.getElementById("g147");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " KВт";
                        if (item.value !== 0) {
                            trueAnimation(147);
                            trueAnimation(1471);
                            trueAnimation(1472);
                        } else {
                            falseAnimation(147);
                            falseAnimation(1471);
                            falseAnimation(1472);
                        }
                    } else if(item.id === 12) {
                        const value = document.getElementById("g12");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " KВт";
                        if (item.value !== 0) {
                            trueAnimation(12);
                            trueAnimation(12001);
                            trueAnimation(12002);
                        } else {
                            falseAnimation(12);
                            falseAnimation(12001);
                            falseAnimation(12002);
                        }
                    } else if(item.id === 120) {
                        const value = document.getElementById("g120");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " KВт";
                        if (item.value !== 0) {
                            trueAnimation(120);
                            trueAnimation(1201);
                            trueAnimation(1202);
                        } else {
                            falseAnimation(120);
                            falseAnimation(1201);
                            falseAnimation(1202);
                        }
                    } else if(item.id === 93) {
                        const value = document.getElementById("g93");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " KВт";
                        if (item.value !== 0) {
                            trueAnimation(93);
                            trueAnimation(9301);
                            trueAnimation(9302);
                        } else {
                            falseAnimation(93);
                            falseAnimation(9301);
                            falseAnimation(9302);
                        }
                    } else if(item.id === 53) {
                        const value = document.getElementById("g53");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " KВт";
                        if (item.value !== 0) {
                            trueAnimation(53);
                            trueAnimation(53001);
                            trueAnimation(53002);
                        } else {
                            falseAnimation(53);
                            falseAnimation(53001);
                            falseAnimation(53002);
                        }
                    } else if(item.id === 57) {
                        const value = document.getElementById("g57");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " KВт";
                        if (item.value !== 0) {
                            trueAnimation(57);
                            trueAnimation(57001);
                            trueAnimation(57002);
                        } else {
                            falseAnimation(57);
                            falseAnimation(57001);
                            falseAnimation(57002);
                        }
                    } else if(item.id === 204) {
                        const value = document.getElementById("g204");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 285) {
                        const value = document.getElementById("g285");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 354) {
                        const value = document.getElementById("g354");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 42) {
                        const value = document.getElementById("g42");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 69) {
                        const value = document.getElementById("g69");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }
                    //Aggregate-1
                    else if(item.id === 39) {
                        const value = document.getElementById("g39");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a39");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 7.67 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(39);
                            trueAnimation(39001);
                        } else {
                            falseAnimation(39);
                            falseAnimation(39001);
                        }
                    } else if(item.id === 40) {
                        const value = document.getElementById("g40");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 41) {
                        const value = document.getElementById("k39");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 420) {
                        const value = document.getElementById("n39");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 43) {
                        const value = document.getElementById("w39");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 66) {
                        const value = document.getElementById("g66");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a66");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 7.67 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(66);
                            trueAnimation(66001);
                        } else {
                            falseAnimation(66);
                            falseAnimation(66001);
                        }
                    } else if(item.id === 67) {
                        const value = document.getElementById("g67");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 68) {
                        const value = document.getElementById("k66");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 690) {
                        const value = document.getElementById("n66");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 70) {
                        const value = document.getElementById("w66");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
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
            .catch(error => console.error('Error:', error));
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

    function trueAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "red";
    }
</script>