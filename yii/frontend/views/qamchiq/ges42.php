<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Қамчиқ ГЭС-42';
$energy = new Energy();
$id = 78;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);
$urlAggregate4 = $energy->getInformation($id, 4);

$urlTransformer1 = $energy->getTransformer($id, 61);
$urlTransformer2 = $energy->getTransformer($id, 62);
$urlTransformer3 = $energy->getTransformer($id, 63);
$urlTransformer4 = $energy->getTransformer($id, 64);
$urlTransformer5 = $energy->getTransformer($id, 65);
$urlTransformer6 = $energy->getTransformer($id, 66);
$urlTransformer7 = $energy->getTransformer($id, 67);
$urlTransformer8 = $energy->getTransformer($id, 68);

$urlSwitch1 = $energy->getSwitch($id, 126);
$urlSwitch2 = $energy->getSwitch($id, 127);
$urlSwitch3 = $energy->getSwitch($id, 128);
$urlSwitch4 = $energy->getSwitch($id, 129);
$urlSwitch5 = $energy->getSwitch($id, 130);
$urlSwitch6 = $energy->getSwitch($id, 131);
$urlSwitch7 = $energy->getSwitch($id, 132);
$urlSwitch8 = $energy->getSwitch($id, 133);
$urlSwitch9 = $energy->getSwitch($id, 134);
$urlSwitch10 = $energy->getSwitch($id, 135);
$urlSwitch11 = $energy->getSwitch($id, 136);
$urlSwitch12 = $energy->getSwitch($id, 137);
$urlSwitch13 = $energy->getSwitch($id, 138);
$urlSwitch14 = $energy->getSwitch($id, 139);
$urlSwitch15 = $energy->getSwitch($id, 140);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['qamchiq/index']) ?>">"Қамчиқ ГЭС" Филиали</a></li>
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
                            <path
                                    d="M0 0 1280 0 1280 720 0 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip1">
                            <path
                                    d="M832 406 832 425 851 425 851 406ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img2"
                        ></image>
                        <clipPath id="clip3">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip4">
                            <path
                                    d="M1206.5 409.5 1206.5 427.5 1225.5 427.5 1225.5 409.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="36"
                                height="35"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAjCAMAAADL21gSAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADYUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFfwuloAAABIdFJOUwABAgMEBQYHCAkLDA0ODxASExQWFxkaGx4fISIjJC4vNDY3OD0/QEZHSFNUVVtcXV9gYW1ud3t8fYCKjo+QkZSZmpudnp+goep7BjYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF1SURBVDhP7ZTbcoIwFEXlWgFBsd4QKFVQURRRuSiCgqL9/z9qRCYitlPb567HM2vmZJK9U/olSIFsfOMyRAsURCBgOEEWIHAMiJkCHIwo0yxXvYNjaYrEoIVgJFNrdrqSnEMShRbPQAtBCeZVfOtrg2GOgaYqUoMh0UzCyjXxfTSZWYslZGGZht6TeApLJQTB6ebbaL5yXG8N8VzHnutKi8bTfQhCsJ3+ZLXxt+EOEm79jW2oAkuk+xCU5LrazPH3UXyAxNHed0yty10PBaSqNLDcIDomJ0hyjALXGkjVmyQPF14YJ+ccSRx6i6F8Jy3Xu8Pp/AE5nw679fJf+pP0xI0/83YgBebXKRChRLCCatgbP8jnKQB5moI8ZRJIZkvR5/ZDMq2x0mauyQQZp3ippxtmIePTcV+uZxm/HIppSIr62Ba5Ubluu+wDveNbgljsXbteeYHtvFgUw2bNhXBMvsHA+vkvAHz3q+SdlHSYIxs/R6n0CUCPjI3DxcZdAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img5"
                        ></image>
                        <clipPath id="clip6">
                            <path d="M0 0 36 0 36 35 0 35Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip7">
                            <path
                                    d="M629 380 629 399 648 399 648 380ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img8"
                        ></image>
                        <clipPath id="clip9">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip10">
                            <path
                                    d="M115 458 209 458 209 549 115 549Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip11">
                            <path
                                    d="M115 471 209 471 209 561 115 561Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip12">
                            <path
                                    d="M115 484 209 484 209 574 115 574Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip13">
                            <path
                                    d="M115 496 209 496 209 587 115 587Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip14">
                            <path
                                    d="M115 509 209 509 209 600 115 600Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip15">
                            <path
                                    d="M115 522 209 522 209 613 115 613Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip16">
                            <path
                                    d="M282 459 376 459 376 549 282 549Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip17">
                            <path
                                    d="M282 471 376 471 376 562 282 562Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip18">
                            <path
                                    d="M282 484 376 484 376 575 282 575Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip19">
                            <path
                                    d="M282 497 376 497 376 588 282 588Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip20">
                            <path
                                    d="M282 510 376 510 376 600 282 600Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip21">
                            <path
                                    d="M282 523 376 523 376 613 282 613Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip22">
                            <path
                                    d="M1033 456 1127 456 1127 547 1033 547Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip23">
                            <path
                                    d="M1033 469 1127 469 1127 560 1033 560Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip24">
                            <path
                                    d="M1033 482 1127 482 1127 572 1033 572Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip25">
                            <path
                                    d="M1033 495 1127 495 1127 585 1033 585Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip26">
                            <path
                                    d="M1033 507 1127 507 1127 598 1033 598Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip27">
                            <path
                                    d="M1033 520 1127 520 1127 611 1033 611Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip28">
                            <path
                                    d="M319 406 319 425 338 425 338 406ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img29"
                        ></image>
                        <clipPath id="clip30">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip31">
                            <path
                                    d="M697 406 697 425 716 425 716 406ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img32"
                        ></image>
                        <clipPath id="clip33">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip34">
                            <path
                                    d="M561 406 561 425 580 425 580 406ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img35"
                        ></image>
                        <clipPath id="clip36">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip37">
                            <path
                                    d="M455 256 455 275 474 275 474 256ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img38"
                        ></image>
                        <clipPath id="clip39">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip40">
                            <path
                                    d="M485 277 570 277 570 368 485 368Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip41">
                            <path
                                    d="M485 291 570 291 570 382 485 382Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP0AAP0AAP4AAP4AAP4AAP4AAP4AAP8AAMVaHOIAAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA6klEQVRIS+3XaxKDIAwE4OCjvkB6/9NWdJUEgr1Avl+W7EwtKzOVmOkrfbBe6DDOOkykAdNswESynOUSy1kusZzlEstZLrGc+kfMbZhmwWF2WDxEDLmImV8JK//QjIt3K5HH5Zv9uNFOu7HCuUEjPrTN5y+mekOkcMXIvX9z7JFTmuAmpA4LljQemcTtWKxF1h1Rj9XaiAS0atkwfwQMpFSEpNeiPKnl20KCIqT6gbiLkKrNifp7RVULK0KStVRbkvHNkUVIvJaiCClvzoKVhntz6iKku5bn2Wy5TotahJROi16E5AI7EUD0A7L3auODNhWvAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img42"
                        ></image>
                        <clipPath id="clip43">
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
                                id="img44"
                        ></image>
                        <clipPath id="clip45">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip46">
                            <path
                                    d="M800 277 885 277 885 367 800 367Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip47">
                            <path
                                    d="M800 290 885 290 885 381 800 381Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip48">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip49">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip50">
                            <path
                                    d="M612 198 612 217 630 217 630 198ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="36"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAlCAMAAAAdgrsPAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTElEQVQ4T+2UXXNDQBSGs1iWRKs+oiEoQkRJkJBI+v9/VxGztiad6lVv+lyeeWbnzOz7ntkvASP68UA7pEaMxEagGciOgAzdiL3SODTDIV6Yf0HgEQdpbAGaRQtJVrUlgabKkohYupcABdGTohumZRNYpqErzwhSdwvQ3EJZOa4fhFtMGPius1JErn8KMEjSHT+Kk3SPSZM42ji6hJhOAgDysuFGhywvjpgizw6RZ8g87FYHFCuoph9np7I6Y6rylMW+qQpst1QjzTUrSPLyUl8x9aXMk8DS5oRkh2lR1TeCuirS0Calpb3dH8/X2wfmdj0f91t7+S/9oTTp76ak4Js8vftrnKcumd6DZO6GZPYZ3+zGGd8RGW/bIjZt8cZt8d5W6tCWx71bG6/q0LuuweKDBr8QDW5vAfzxFky6Kg0T7tOddkjSj6cxm30C8cF9R6rH25cAAAAASUVORK5CYII="
                                preserveAspectRatio="none"
                                id="img51"
                        ></image>
                        <clipPath id="clip52">
                            <path d="M0 0 36 0 36 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip53">
                            <path
                                    d="M155 256 155 275 174 275 174 256ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img54"
                        ></image>
                        <clipPath id="clip55">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip56">
                            <path
                                    d="M771 256 771 275 790 275 790 256ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img57"
                        ></image>
                        <clipPath id="clip58">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip59">
                            <path
                                    d="M1074 257 1074 276 1093 276 1093 257ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img60"
                        ></image>
                        <clipPath id="clip61">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip62">
                            <path
                                    d="M799 460 893 460 893 551 799 551Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip63">
                            <path
                                    d="M799 473 893 473 893 564 799 564Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip64">
                            <path
                                    d="M799 486 893 486 893 576 799 576Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip65">
                            <path
                                    d="M799 499 893 499 893 589 799 589Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip66">
                            <path
                                    d="M799 511 893 511 893 602 799 602Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip67">
                            <path
                                    d="M799 524 893 524 893 615 799 615Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip68">
                            <path
                                    d="M219 158 219 177 238 177 238 158ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img69"
                        ></image>
                        <clipPath id="clip70">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip71">
                            <path
                                    d="M219 69 219 88 238 88 238 69ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img72"
                        ></image>
                        <clipPath id="clip73">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip74">
                            <path
                                    d="M925 158 925 177 944 177 944 158ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img75"
                        ></image>
                        <clipPath id="clip76">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip77">
                            <path
                                    d="M925 69 925 88 944 88 944 69ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img78"
                        ></image>
                        <clipPath id="clip79">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip80">
                            <path
                                    d="M246 117 331 117 331 207 246 207Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip81">
                            <path
                                    d="M246 130 331 130 331 221 246 221Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip82">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip83">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip84">
                            <path
                                    d="M246 27 331 27 331 118 246 118Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip85">
                            <path
                                    d="M246 41 331 41 331 131 246 131Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip86">
                            <path
                                    d="M0 0 4.71429 0 4.71429 11 0 11Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip87">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip88">
                            <path
                                    d="M950 116 1034 116 1034 207 950 207Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip89">
                            <path
                                    d="M950 130 1034 130 1034 220 950 220Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip90">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip91">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip92">
                            <path
                                    d="M950 27 1034 27 1034 117 950 117Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip93">
                            <path
                                    d="M950 40 1034 40 1034 131 950 131Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip94">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip95">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip96">
                            <path
                                    d="M455 406 455 425 474 425 474 406ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img97"
                        ></image>
                        <clipPath id="clip98">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip99">
                            <path
                                    d="M69 152 124 152 124 243 69 243Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip100">
                            <path
                                    d="M959 335 1013 335 1013 426 959 426Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip101">
                            <path
                                    d="M1180 153 1234 153 1234 243 1180 243Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip102">
                            <path
                                    d="M185 287 270 287 270 378 185 378Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip103">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip104">
                            <path
                                    d="M1102 283 1186 283 1186 373 1102 373Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip105">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip106">
                            <path
                                    d="M123 423 207 423 207 507 123 507Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip107">
                            <path
                                    d="M123 423 207 423 207 507 123 507Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip108">
                            <path
                                    d="M123 423 207 423 207 507 123 507Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip109">
                            <path
                                    d="M286 426 370 426 370 510 286 510Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip110">
                            <path
                                    d="M286 426 370 426 370 510 286 510Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip111">
                            <path
                                    d="M286 426 370 426 370 510 286 510Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip112">
                            <path
                                    d="M799 426 883 426 883 510 799 510Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip113">
                            <path
                                    d="M799 426 883 426 883 510 799 510Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip114">
                            <path
                                    d="M799 426 883 426 883 510 799 510Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip115">
                            <path
                                    d="M1040 423 1124 423 1124 507 1040 507Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip116">
                            <path
                                    d="M1040 423 1124 423 1124 507 1040 507Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip117">
                            <path
                                    d="M1040 423 1124 423 1124 507 1040 507Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip118">
                            <path
                                    d="M427 497 501 497 501 588 427 588Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip119">
                            <path
                                    d="M533 497 608 497 608 588 533 588Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip120">
                            <path
                                    d="M671 497 746 497 746 587 671 587Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip121">
                            <path
                                    d="M1179 497 1254 497 1254 588 1179 588Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip122">
                            <path
                                    d="M0 0 8.57143 0 8.57143 20 0 20Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip123">
                            <path
                                    d="M9 514 18 514 18 535 9 535Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7V0JVFRXmk73TE93umemz/TMnD7T0zM9p8+ZnnO6J53uGJdEE2NiUKPEqEjUGMUlxiUmre0SEzfcAQUX9oKCojb2fXFDkE0odhVwQaEKF9yFAjSZ6Df/f+sVFsVDUMCF1M/5znvvvvduvffux7/c+9/3XniS4uzs/O6qFSsUb7755ku8vWTRop2RGv1FvVZ3yR5r1qypBvADcaJDHPI4snnzZlVDQwOGDBkysaSk5EdbtmwJb21pgT1aCDqdrslBOIf0SpRKZT0T7rVhw3bpdToQ4QS55OAgnEN6JdOmTftVRkbG/QtEuKGvDva+ceMG4mJjZcnGIMLdkk51yEAUw/mm/ykytnoWN5hHsbkThaRhTKb7L55oaHm5tL51SqWx7Y3jxtZXj58z//J4owWl52/+pqShaVhxfdP4sot33q24fP9n4lwS1lAl527+vMzUPHL+gqVLGxsvQxBu8GDv69evI1YQrrUT2RhardZBuIEoJaaWFcX15gtFxpb7JQ1tKCaUGFu+KzGaBYrrW+6VmNpgaLhj2UdL3haQtosF7goYjC33DKa2SwZTa02JqbXJUN9yv9h0F74h2vvmFnMHwsXFxcmSjeHQcANUSkx3VBbC9B+YlGFqPRGJCXcBg3tAOIeGG6BCWogIx9pJnix9gfwz1xEZbTGfFy9exCuvvJIufLjvuYZbtmzZi06jR6+m1e9PcNTfhGPTq0nLw6lTNUQki7928OBBODTcCy9Mnjz5N5s3uiMqKupFqWjgy5PQcB6+4YiNjiTECOzYvr1bwiUkJFySLnHAyqhRowaplGFYtWrVr6WigS/9T7g2bPTYh/jEZEIK4pOS4em1SxBOq9YgLTUVTU1NnQhXUVFRn5qaOiglJeXlpKSkP1qRlpb2Epfv3r178PTp0/9Fuo3nUkaMGDE6J/soXCdNelkqGvjSv4TjqJfMan0LiuvMFtSboU45ilClCmu+Xg+tLgrh4eE4dOgQzGZzO+Fu376Nq1ev4sqVKx3AZQyj0YixY8culm7juZRFny2aWVdXByLeSKlo4MuTMKlyKGlopWUb0g1n4ROoQhSZ2vCwcOTk5HTQdF2ByTlhwoRl0m08l+Ls7LyItfugQYM+kIoGvjwdwkmaz7o0tSI+qxy+QeFISExAGPk1xcXFskSzxaRJk1ZIt/Fcipub29pvv/kWI0eO/EQqGvjytDScHJiAmtQcBIREICUphYinxInjx2XJxphLDSbdxnMpK5at8L537x6mfzj9S6lo4MuzRDgB012UGFuhiMqAUqVFWkqa8PFOnTrViXAL5s3zk27juZStm7eG3b9/H59/9pmXVDTw5ZkjnA0Kz5vhq4qHVh8notkIVQTOnz9PZGuFubUFXp6e8Nrhlfee03tjpdt5qsJRs4uLy7/3FES4/RwArV6xUs/bGzZs+FupqoEr/U04MfZqV9YT2J6Xd+Y69ih0iE1IQnJyMtTqCDFiEanTify5qpMnsWvXrsIxY8aMf5opTZs2bTp95MgRZGVl9Qx87BHLMjo6GsOHD39LqmrgSn8RTgQEJl63DPJ3PuZBmfz+zjhy8gJ8glRIzziIxPg4bN+2rUNXSk1NDby9vUvGjRv3AWmLH0q3+MQkUqM9rYqgiDsykhDVLYKDg+FJWnrfvn1i9MVBuMeE0E6mNmzx2ocwTRSUmhiEaGIRrI6HvyoGe8MY8ThUYZRI2TOUSMfuLz4Lb98QlJaUIjgoGFevXG0nHePMmTPY7eNT8f748S5PknhMuJiYGFKyFmH/7GFy4cIFFBYW4vSp08hIS8dIB+EeH0dPXsbadevJ7OkRqdcjSh+JaPqvjouJRXxcHGKpYQKCFdit0CL7xAU6xzbVqTuQRjS2YV9YLPLyChAeqsSpms5BRW1tLWuPE++///40Mll/I91yv0mkVnuah+6YaKWlpXTfluG8GBlwuVajET7p6dNEuHQH4XqF8MRs1NfVdyIBw8xoNiMjNQ1qVTiUYWrsDdEjp+aKbF3y4Jy8O9CkHEVCUhpSkpLBw0Ryv8eNunfv3mpnZ+eZ/emYWwl38+ZNJCYmdtBwvC4HFoeG6wPsDdGhxca/6go8hBVDDjNrwgi1DnuVUcg7fU2YZFs/rysY6NrTj9UgKDQCBfkFiI6J7uDX2YKHw3x9fc9MnDjRbcGCBZas5j4UK+HYH7t165YgU0/EoeF6CyKLIowIJ9Po9rDO0rp25QpFn2oyt/HQaKPgGx6DgrM35eu3h+kuck9dwa59IaisrISCnHFODrD/LSsaTCYEBQSec3VxmT916tS/kx5Fr8VKuAMHDqC5uVmiU/fi0HC9RV2zII1cY3cH1kJhYWE4kJ4BlUYPf3Uijp2/LVLcu4tmDcYW+ARrUELBREiIQvhwcr9hxUVy2oMDg+qnTpmycOnSpT+WHsljy2MTzqHheoeEnOM4dqyQGlV+gkxPUFVVRcRT4ujRowiPIOJpklFIRJb7vQew+HWKmP04cChT5Nvl5+fL1m+Ly5cuQaFQmFxcXD6bPXv2T6RH88jyuIQ7Q4Q7mLEf7771js+4MeMWTuhjcJ2M0W+/vfCjjz76R+lyn470JeGsUaZfRCJukw8j17iPiiIiroo0XnFxCRThGgRHpsNQb5Z+s+vINuFIOcJJQ+bn5iI+Ib5Lv84WjY2NUIaGXpoxY8YyIt8jZ+H2RsOVlpSgqLAIhqK+R5F13WDAtGnT/iBd7tORvtZw7MT7h/KEGflGfRwwWQ6RI84jDJUnjiNIqYEy5iCKyYTKXYMA+XVZlQ3Y7ReKEydOIDQ0VDjycvXb4yr5k+Hh4Y0zZ8xYsXjx4r+XHlW3YiVcQUGBiIytUWh3ckby4ZLiE0Rkb+wHxMbE4kjmkYFFONHhS1onhDSRXEP2Fpw7lpCQgMioKNTUnEKAQoWE7Arp9+X9u6JzTdjpF0akOwlFUDCM9fJdNXK4dvUq1BERV2fOmLlm7ty5/yA9si7FSjjOAImia2RNx1rTnnjl5eU4eOAgzp45I/ZZfbjCY8ekI/peOM+Qh90GnIbLrmpEcmq6bAP2Fa5fvwGdToukpGQcOHiY/LsE0mic0Cl/TRw1B6oTkJtXIIaUiosMsvV2BY54iXg3Zs2atZai2p9Lj66TWAnHwkTi/jgOgC6Rj2iVb7/9lmekocXcAr1Oj2+++aY9Si0scBDukREam9llh29fg4eGyNlHXl4evMh05lY30jXI3wsHE/r0fETHJSE7OxspKSmydT4MN4joer3+1ly3uRvIz/sn6RG2iy3hrMLuQHJSEjNQIJ/MrclkpD33kUMBEZt5q4Y75tBwjw5fZRRa6b9XrsH6BdSgiQmJZL72QxmhQ8yhYrqOrrpP7mK/oRb+weFkYo+Tn6YSHc+y9XYB7je8RZqLNOWtefPmbf34g4//WXqUnQh3jwimVe2F+9cLEKvbI7B53QKoQ71x524bcq2Ec2i4x0dwOHf4dh8R9jXYL+JMjcwj2dirioXBaCatxvfVOZItOHMdXr4K0dBBQUFCU8rV2R2YLDExMeZPP/lkB0W1/6q1IxybVY2fK5prP0NL7acw1y5EU+0SpKqnURR/kzRctkPD9QZFdU0USUZSYzx+/1tvcPXqNQSTiS0qLBTZJNnHOSlA7lpJAxpbsZei6dLScjGIzoSVq7M7sMZrunWbkxJaQxSKOx013D3MnDISG//6Gtpq56H13Dz4b3sbLhMGodnc7NBwvQFHp4k5J2AwdD/5pV9B5pwHzrkbJUIfA216gTQu2/maDXTNqvjDIr/u8KFD2J+xX77OHoCJx68f66Dh6E/r50IabiFpOCIcwUyaLlU9lUw5abgchw/XC9zF3vA4YSrkGuRJo6KiAhHko+Xl5WNPSCQM9Z1HKdjU8pBZUk4lQskVqKysEJOzm5o7T8zuDoJwMZ0Jp/P7QGi3OxJ4PUPzAZrId2wn3PdPw3VsiMeFX6hWtjGeFq5fuw4ycygrLcVuvxAcKqsX1yk3Jptb1YidvkFi/DU4MAiXL1+WrbMryBHuHkHvN7GdbFbCpWkmopkJ9whRallZGfuLHCWLcx5VnkHC2Ws53paBcMTtj+NuhzaEUZQo1xhPG0lJSWRiDyAyJgERSdl21y8R0EQ+aL0Z3gEqVFVVQ6VS4eTJk7L1yUFewwE6f3vCzReEa7p96wHhutFwXP8md3cy+RkICgwUnd89HcWwyjNDuHXbd8d5+qrOefiHn/fyU9ftDNDWe/lrjF4B2gbPIO0FrwDdpZ0K/SVvhf6KjyLyinew/rp3cOR1b0XUzV3Bkbd2KaKbGDv91c2rV3/ZrNNozZF6fXOkTm+OiYwxk1/TkhCf0EYP6Q75VneTk5O/TUlJ+b+0tLTvCPfS6T87gx4k98pzHtnhw4fFg+G+Mh645wfF/Ww8XMQagFOyiw0GkVFbTv/1JqNRNLY9AezBaUs83bCIzvUO1ogRCMs/ih35aDtYl4Kso7lIJxJkZmbK1mcPWcIRKQI9nXG+yI0wC+cIvK4JeJ8Ix1Fq9xruu+++E/d/YP9+1J6tFQgMCMDNGzceiXTPDOH6SuiefmAPnk/Aqd2cZRsUFPQjBq3/3Z49e35My5/wAPmECRN+yhg0aNBP33333Z9xNsOyZct+sWbNml+uXLnyV59//vl/Llq06Lfz58//He37PZ3z0qTx418eO3bsn8c7OQ1ymTx5EWkHam95ItiCRwxCghWoJP9uX4AS+w1n27tOLISzaDouiz5YBF1UbHuqOA/Gy9VpRTvhbOY0cJSam52Jre5rkXU4XWDH1g04fCBdjDjkEglu3bTRcDKE4y6bwIBAkc3MBGUcpX9Gf1+/7zfhnqaMGjXqD7t37z7JLzmUI4MtRM9/coqIYjk1PTTuoHAHOk/maSOfrw57A0Jx7tw5BPFknWsdJ+vYg6PU6Kho3GlrI9xBg6kBWzZtFsELaX7otFpEkKlmshTk5yOTtDn7iicqj4M1PfubnE7F2twKnhbZXp5fIJYMTw+PDsday/kYObApfiYG7weKLFiw4KekDUM5M0SODPbg48LDwlBRVgFvfxWOtWcX2wYUbSiovUXBhJKCifNQKpXC/MnVx/DeuRM+3t74Yunn+OKzz/EXsVxq2V7KS5t1Kp/+4TQs/nQh1n71tcj/06jVwndkrcbzbgUuXMQlQmJ8Ak5V10CjisAFIjKXtR9D4HOWL1+OQH9/QgCCbMDbX65chSwH4fpeyOR+RFqhuSf5b8LEhoSI95f4BauQkl9tQ7YHoMAKfuExKCouQWJSIpk1+Tc8cTYLD5X1FBwENJAPGhkZCf5+xTHSVLt9fLBpw0a4b9gA94203OiOjbRcv3YdNlLZurVraR/vdxf7LMdsxOpVq4TP25U4TGo/yjvvvPM7Ly+v8mvXrskSowPMLUhNSaGA5QD27z+A4MhUi4ntRLy7UCdnkYnLEAmN/Mr/npD6YWCzfom0E8+6txJu7aYVmPGJM2YseA/TCR8xFr6HRV9NwUyxnIzZi9/DJ6umUPkEOm4cHTMBH7qNQWJyvESvzuIgXD8Lp4ovWbLEv7y8/L5cY9vDamJPVlVjl1848k9fl4hmE1DQMq2gBoEhEThXew6KEAV64jd2BY7KmXA8a81KOPd9SzBn++tw8xiC2TuGEYZi7u5h2JHzPub5DIHnUWcs8H8d29ImYb7PG5jjMRTzPN+C25bh0MYpJXp1FgfhnpC4TJo0NT4u7jZrMrlGtwV3FIeSia2qOokgpRqJ7cmdVlhIl1d9lfy6EJiMDSI9irN75errDqzhLpMvFmslHEWp7r6LMZcIN8djMOYQ4ebsGIJ5RDhPQbjBgnCf+r2Ore2EG4L5niPhtnU4dLEOwj0TQib2t9u2bSu+0tgo2/D2SE1NxcEDB3A4M1vMGuNZ/pw6b806Ect6M/YEqXHiZJXoCmGyyNX1MPBrZlm7sQ/G7yPxo+j1i03TiXDDBZGYcG6k4SyEc8ZcJhwtF/qNwBZBuBGkCUkDOgj37An3/y1csMC7uLi4RyaWRxk4W/f0mVPwpig1p/qyjaaTiGe6g5DodBw6nIW83FwkJSQJn1CuPjk0U5DReOmy6CrhCJS7Sdbu+VSYVCacm5VwPkPhJQg3BF5HJwgNt5kIN89nuES4tzB7y+tEuFCJXp3FQbinJBMnTnTW6/XXe+Lws3/Gk29qqqqgjNAjWja58y7ij5RCpY0ScxTCQpVi9ECuvq5gGzSs8VwA15VD4bpqEKasfgWuq4fgo/WDsVrjhGnug7BKNwbTNg3CCgUFFV8PhQsdM33165i6fDC00WESvTqLg3BPUZycnP7D3d09l+cayBHAHjzExUNL/OIcv7AYYU4tY8oPyHeksgE+/goxuZqTOk0mk2xdcrAl3Pm6WlRUlAuUV5aKrJe09FTM3jYUf40YhWWatzF7zbsoryiTjqtAJR9L2zyHoitxEO4pCw+3zZ8/fzv5XvfkSGAPHtDnjt+683UiufPI8QvCpNqSznC+CV5+ShHB6nR6MddUri57cGcv+4yaCDUqyok8BOuSkZqWglnuQ/GX0DexnOC20gnlZURGm2PKy4mAtOwKHIFzQOQg3FOWsWPHOqnV6sbuxkoZ7Sa2uhpafTR06fmdUp2YhP7qBOQfKxIahYes5OqyBY8S8EhDNaGGiG2LI4cOY93XX+OrjcvhNOclTJg1DDu9t8F9/UYcy89HDQUtHc/hbXtQOR2XlJDoINyzIGPGjPm3DevXH+FPa8oRwh7WDBdDcSl8QiJRVNcsEjktpLPModCnFyA2LgnV1VVQqyLEyIJcXd1h3969WPrFp3Bd8We4bRuGOWRaJy98Dbt2eSKEyC93Tlfgmf0Owj0jQib2h25ubhvy8vK+k2sse7DWUFKAcIF8NR+/EBwuq7PRdKz17iLDcBb+QTwv9aLw6/gdIvX19T0CT9hmf5AnVG8PXAGP3PHwzHsPHnnjsCNzIvRxKui0NvmHFARlZR1FSLiWApxIqDWRuGSXRMqEc3V1/V/plh3yLMj48ePfCg8Pv9jc1L2JZSddqQwT7xaOikuEKilLaLcHOXZt4tOdO/eF4ELDRZG1kZebJyG3S3DaUlJiElJTkrFl82Ys3zILnvljiXDj4MWkOzIB7tu+xuZNm8hsZ6GyvAIBwWFIzqsSv804dv4WduwLJXP9QGs7CPeMCk/5++qrrzJY09gSrCuwed2fniaSPHcFaVB0/rYgnLWj2GBqgb8qHgHKaEIUAm0QEEYQ65ESorBzTxB/gwJbtrtj+/ZNcP3kHXwWNKIdi/2GY9YcV2ylffxi7ekffYyUYzXtv2clu6HOjDDVg7R/B+GeYWETO2vmzNVZWVnf2pKrK9RU1wgTe/niJewJCEVG0Zn2hmciPPDxLBCasAOs82fvQnegCHv27saMVcOxOswJH61/DYv3jMQnnsMxbd0QrFA6YSr5dF/rxsFp2iAEK1Xg11nY1i8IR3UFinkmlmmbDsI9B+Lk5PS6QqEwyn1i0x48I587fqspik1KSYMyVkru7ECEh4PNYeT+QiiUAVgZPh5zdg7FF6FvY2ngcCzYMxwrtaMxa9urWBM3Fi4b/owlW8dAExktQziu6y5CbN5E6iDccyJkYn+xatWqJM78tSVYV+A8N45kq2tOY5d/GApOX4OB3+LZDdgUFxK0aXkIDQmG88I/wW3T6/jwy0GYuupVuG19De8v+hMW7n4T4+b+AUt938ZI5z9Co48hs00akv03JhqBNWrOyUsUKSe0X5eDcM+RAPjBxx9//JfMzMy7tuTqCvxtMO6zu9J4BcnJaUhOsiCJQdsd0F6eKhAaEgY/P1/s9NiBtRs3YYvHLmz18MZmwrYdPrTtTds7abkTHl4+VL4XpcY2lFpJR8tjZ29g++5A8VYA6zU5CPccyjvvvDM4ICDgXE/61djE8nyG6KgoMXzFiOoC1v0xUbSk47k7hD96ok7NEQRiMpWSibQQyrJUp5ImVOkRoYlBGCFcG02IgUoXI7TeNbs5GA7CPafC74hbsWJFFH/xxrZB+xrnamsRQebVOvfXHn6aZDFdUO5cOfA7Vxwdv8+xUOMtzMjIuCPXuH2Bc7VnhRaTIxuDX7R980bPXq3B0xgLCw1IOFp5odjYWldiaj1Pfl9KqenO1rL6lvUlJkbrluL6lmyKmJPoGM8SU/OGMmPzomJj02zat6SkvmVDibE1xGBsO1ZS16zi7fIG88xSU/ObJcbmNyouNo+ovNj2RqnR/KHB1Lqdjs0qNpqXl15q+w27JNJjc0hvZNSoUS/v27fvFHcCyzV0b1BLhNM8hHARKTkiIu54HneByOMYES45v0rqfuHggrti5KJoqYwzYsh02+9nc96+Lratpp7LeP2u6JJpP5eWRabWbw0NLTulx+aQ3gi/eHr58uWxPKjfsfF7ByYcazgrQWwhIlFTK3b5KXE4MwuXLzeK5IKb1693idycXKQQ4ez7BPsHHd0ACzFbI6RH5pC+EFcX1zkpKSnEFXkCPSoaL19GoD5d0hxysGiiA4az4jj+mPE+VUKX2BMej7zTPfy6T5/CkjvoIFw/yNi33/79nl3eJx726aWeotVshndghGgs+YZkWPfZLh8G23OfFByE61dZ5uLy4tKlS0OOV1b2aP5E12hFamo60gpPCb9IvjGfBzgI90Rk6pQp0xPiE5p68lXFhyFEqRafk5Lz5fofclqyK3R1nmXbQbgnIKNHj/5vDw+PsqtXH/4inO5w6FCmmJYYFn+YNN5ppBedIZxFRh+A60knP5DrTSmoeYB8m3Xrtn2ZLaz77Y5LlbbjMksTpMfikP4U/lIhRbK+ZWVlj21i+aPG/DkCY70R2dk5ItnySB8iKyubltmYPHmqZtiIt4YPG/Fun2Pk6LHDpEfikCchH3zwweTY2NibvX0nSX9iyZIl26XLdchAkDFjxvzXtm3bivgbXHIN3nfoKak7HvfZ4sU7pEt1yEAR/vw5vwXAUGToZRTb9yDT7yDcQBVnZ+cJkT18C8CTgoNwA1xGjhz5643r1iUogoPzrQgJVtCSEZwfLEGheFDWPRRSHQ/KrHXYl1tAZVw/wdXV9VO+rvT09B8zxEX2mbzwwv8Dqz2REX1DUHMAAAAASUVORK5CYII="
                                preserveAspectRatio="none"
                                id="img124"
                        ></image>
                        <clipPath id="clip125">
                            <path
                                    d="M0 0 125 0 125 60.8974 0 60.8974Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip126">
                            <path
                                    d="M1080-9 1176-9 1176 81 1080 81Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip127">
                            <path
                                    d="M1183 58 1271 58 1271 148 1183 148Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip128">
                            <path
                                    d="M1187 17 1261 17 1261 108 1187 108Z"
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
                        <path
                                d="M231 52.5 231 207.976 228 207.976 228 52.5ZM229.5 52.5001 225 55.5001 229.5 46.5001 234 55.5ZM234 207.976C234 210.462 231.985 212.476 229.5 212.476 227.015 212.476 225 210.462 225 207.976 225 205.491 227.015 203.476 229.5 203.476 231.985 203.476 234 205.491 234 207.976Z"
                                fill="#663300"
                        />
                        <path
                                d="M0 0 0.000104987 19.2208"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 164.5 375.721)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(126.196 315)"
                        >
                            Т-1
                            <tspan x="-40" y="13">10,5/38,5 кВ</tspan>
                            <tspan x="-34" y="26">16000 кВА</tspan>
                            <tspan x="-48.5" y="39">SF-16000/38,5</tspan>
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
                        <path
                                d="M0 0 1182.46 0.000104987"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1252.96 208.5)"
                        />
                        <path
                                d="M1.5-1.6598e-06 1.5001 94.8789-1.49989 94.8789-1.5 1.6598e-06ZM4.5001 94.8789C4.50011 97.3642 2.48539 99.3789 0.000109966 99.3789-2.48517 99.3789-4.49989 97.3642-4.4999 94.879-4.4999 92.3937-2.48518 90.3789 0.000100007 90.3789 2.48538 90.3789 4.5001 92.3937 4.5001 94.8789Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 164.5 303.379)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(58.196 223)"
                        >
                            I-СШ 35 кВ
                            <tspan x="1107.94" y="-3">II-СШ 35 кВ</tspan>
                            <tspan x="538.536" y="-31">МСВ-35</tspan>
                        </text>
                        <path
                                d="M0 0 0.000104987 11.7354"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 164.5 407.235)"
                        />
                        <path
                                d="M840.048 444.201 840 390.501 843 390.499 843.048 444.198ZM837 390.504C836.998 388.019 839.011 386.002 841.496 386 843.981 385.998 845.998 388.011 846 390.496 846.002 392.981 843.989 394.998 841.504 395 839.019 395.002 837.002 392.989 837 390.504Z"
                                fill="#6600CC"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(282.483 448)"
                        >
                            Г-3
                            <tspan x="-3.66666" y="13">10,5</tspan>
                            <tspan x="-27.6667" y="26">2,75 МВт</tspan>
                            <tspan x="-64.1667" y="39">SFW 2750-6/1730</tspan>
                            <tspan x="-168.14" y="0">Г-1</tspan>

                            <tspan x="-186.807" y="13">10,5 кВ</tspan>
                            <tspan x="-195.807" y="26">10,5 МВт</tspan>
                            <tspan x="-224.973" y="39">SF 10,5-10/2860</tspan>
                        </text>
                        <path
                                d="M164.5 358.5 164.958 441.765"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 723.297 0.000104987"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 290.5 390.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(619.233 372)"
                        >
                            МСВ-10
                            <tspan x="-513.13" y="-102">В-Т-1-35</tspan>
                            <tspan x="-192.596" y="-56">Т-3</tspan>
                            <tspan x="-232.596" y="-43">10,5/38,5 кВ</tspan>
                            <tspan x="-221.263" y="-30">4000 кВА</tspan>
                            <tspan x="-240.43" y="-17">S11-4000/38,5</tspan>
                            <tspan x="-211.825" y="-99">В-Т-3-35</tspan>
                            <tspan x="-509.79" y="-200">В-35 Л-ГЭС Камчик-1</tspan>
                        </text>
                        <g clip-path="url(#clip1)">
                            <g clip-path="url(#clip3)" transform="translate(823 399)">
                                <use width="100%" height="100%" xlink:href="#img2"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch15 ?>">
                            <rect id="c2551"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 832 425)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(264.643 418)"
                        >
                            В-Г-3-10
                            <tspan x="590.725" y="0">В-Г-4-10</tspan>
                            <tspan x="455.574" y="-146">В-Т-4-35</tspan>
                            <tspan x="533.502" y="-181">ШР-Т-4</tspan>
                        </text>
                        <path
                                d="M709 498.5 709 525.472 706 525.472 706 498.5ZM707.5 525.472 712 522.472 707.5 531.472 703 522.472Z"
                                fill="#989898"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(151.013 84)"
                        >
                            В-Л-Эртош-1
                            <tspan x="663.414" y="88">В-35 Л-ГЭС Камчик-2</tspan>
                            <tspan x="709.802" y="0">В-Л-Эртош-2</tspan>
                        </text>
                        <a href="<?= $urlTransformer8 ?>">
                            <path id="c4172"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#989898"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 1199.5 497.5)"
                            />
                            <path id="c4171"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 1199.5 473.5)"
                            />
                        </a>
                        <path
                                d="M1215.32 440.662 1214.5 388.5"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1217 498.5 1217 525.472 1214 525.472 1214 498.5ZM1215.5 525.472 1220 522.472 1215.5 531.472 1211 522.472Z"
                                fill="#989898"
                        />
                        <path
                                d="M0 0 59.1584 0.532913"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1244.66 387.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(1178.24 379)"
                        >
                            ТСН П/С-Эртош
                            <tspan x="-982.131" y="-340">Л-Навгарзан-1</tspan>
                            <tspan x="-281.682" y="-348">Л-Навгарзан-2</tspan>
                            <tspan font-weight="700" font-size="17" x="-737.888" y="-362">
                                Қамчиқ ГЭС-42 бир чизиқли схемаси
                            </tspan>
                        </text>
                        <g clip-path="url(#clip7)">
                            <g clip-path="url(#clip9)" transform="translate(620 373)">
                                <use width="100%" height="100%" xlink:href="#img8"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch10 ?>">
                            <rect
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FF0000"
                                    transform="matrix(1 0 0 -1 629 399)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(744.176 315)"
                        >
                            Т-4
                            <tspan x="-40" y="13">10,5/38,5 кВ</tspan>
                            <tspan x="-28.6667" y="26">4000 кВА</tspan>
                            <tspan x="-47.8333" y="39">S11-4000/38,5</tspan>
                            <tspan x="55.5035" y="139">Г-4</tspan>
                            <tspan x="36.8368" y="152">10,5 кВ</tspan>
                            <tspan x="27.8368" y="165">2,75 МВт</tspan>
                            <tspan x="-8.66321" y="178">SFW 2750-6/1730</tspan>
                            <tspan x="-93.1694" y="132">ТСН-2</tspan>
                            <tspan x="-99.0828" y="145">10/0,4 кВ</tspan>
                            <tspan x="-97.4161" y="158">400 кВА</tspan>
                            <tspan x="-95.3361" y="171">SCB11-400/10,5</tspan>
                            <tspan x="426.115" y="132">ТСН</tspan>
                            <tspan x="420.449" y="145">6/0,4</tspan>
                            <tspan x="414.115" y="158">40 кВА</tspan>
                            <tspan x="406.615" y="171">ТМ G-40/</tspan>
                            <tspan x="420.949" y="184">10-Y1</tspan>

                        </text>
                        <path
                                d="M115.423 496.839 208.531 496.839 208.531 509.639 115.423 509.639Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M115.423 509.639 208.531 509.639 208.531 522.439 115.423 522.439Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M115.423 522.439 208.531 522.439 208.531 535.239 115.423 535.239Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M115.423 535.239 208.531 535.239 208.531 548.039 115.423 548.039Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M115.423 548.039 208.531 548.039 208.531 560.839 115.423 560.839Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M115.423 560.839 208.531 560.839 208.531 573.639 115.423 573.639Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M114.756 509.639 209.198 509.639"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M114.756 522.439 209.198 522.439"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M114.756 535.239 209.198 535.239"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M114.756 548.039 209.198 548.039"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M114.756 560.839 209.198 560.839"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M115.423 496.172 115.423 574.305"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M208.531 496.172 208.531 574.305"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M114.756 496.839 209.198 496.839"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M114.756 573.639 209.198 573.639"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip10)">
                            <text id="g174"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(119.203 507)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip11)">
                            <text id="g175"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(119.203 520)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip12)">
                            <text id="a174"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(119.203 532)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip13)">
                            <text id="k174"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(119.203 545)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip14)">
                            <text id="n174"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(119.203 558)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip15)">
                            <text id="w174" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(119.203 571)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M282.714 497.426 375.822 497.426 375.822 510.226 282.714 510.226Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.714 510.226 375.822 510.226 375.822 523.026 282.714 523.026Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.714 523.026 375.822 523.026 375.822 535.826 282.714 535.826Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.714 535.826 375.822 535.826 375.822 548.626 282.714 548.626Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.714 548.626 375.822 548.626 375.822 561.426 282.714 561.426Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.714 561.426 375.822 561.426 375.822 574.226 282.714 574.226Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.047 510.226 376.488 510.226"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.047 523.026 376.488 523.026"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.047 535.826 376.488 535.826"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.047 548.626 376.488 548.626"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.047 561.426 376.488 561.426"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.714 496.759 282.714 574.893"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M375.822 496.759 375.822 574.893"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.047 497.426 376.488 497.426"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M282.047 574.226 376.488 574.226"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip16)">
                            <text id="g201"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(286.493 507)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip17)">
                            <text id="g202"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(286.493 520)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip18)">
                            <text id="a201"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(286.493 533)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip19)">
                            <text id="k201"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(286.493 546)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip20)">
                            <text id="n201"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(286.493 559)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip21)">
                            <text id="w201" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(286.493 571)"
                            >
                                Qвода
                            </text>
                        </g>
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c6602"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 149.5 358.5)"
                            />
                            <path id="c6601"
                                    d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 149.5 334.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.000104987 19.2208"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1082.5 373.721)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(1044.4 313)"
                        >
                            Т-2
                            <tspan x="-40" y="13">10,5/38,5</tspan>
                            <tspan x="3" y="13">кВ</tspan>
                            <tspan x="-34" y="26">16000 кВА</tspan>
                            <tspan x="-48.5" y="39">SF</tspan>
                            -16000/38,5
                        </text>
                        <path
                                d="M1.66667-1.84422e-06 1.66677 94.8789-1.66656 94.8789-1.66667 1.84422e-06ZM5.0001 94.8789C5.00011 97.6404 2.76153 99.8789 0.00011052 99.8789-2.76131 99.8789-4.99989 97.6404-4.99989 94.879-4.9999 92.1175-2.76132 89.8789 9.94542e-05 89.8789 2.76152 89.8789 5.0001 92.1175 5.0001 94.8789Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 1083.5 303.379)"
                        />
                        <path
                                d="M0 0 0.000104987 11.7354"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1082.5 405.235)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(1032.55 446)"
                        >
                            Г-2
                            <tspan x="-18.6666" y="13">10,5 кВ</tspan>
                            <tspan x="-27.6666" y="26">10,5 МВт</tspan>
                            <tspan x="-56.8333" y="39">SF 10,5-10/2860</tspan>
                        </text>
                        <path
                                d="M1082.5 356.5 1082.96 439.765"
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
                                font-size="10"
                                transform="translate(1024.31 268)"
                        >
                            В
                            <tspan x="7.16663" y="0">-</tspan>
                            Т-2
                            <tspan x="26" y="0">-</tspan>
                            35
                        </text>
                        <path
                                d="M1033.63 495.172 1126.74 495.172 1126.74 507.972 1033.63 507.972Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1033.63 507.972 1126.74 507.972 1126.74 520.772 1033.63 520.772Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1033.63 520.772 1126.74 520.772 1126.74 533.572 1033.63 533.572Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1033.63 533.572 1126.74 533.572 1126.74 546.372 1033.63 546.372Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1033.63 546.372 1126.74 546.372 1126.74 559.172 1033.63 559.172Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1033.63 559.172 1126.74 559.172 1126.74 571.972 1033.63 571.972Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1032.96 507.972 1127.4 507.972"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1032.96 520.772 1127.4 520.772"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1032.96 533.572 1127.4 533.572"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1032.96 546.372 1127.4 546.372"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1032.96 559.172 1127.4 559.172"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1033.63 494.505 1033.63 572.639"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1126.74 494.505 1126.74 572.639"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1032.96 495.172 1127.4 495.172"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1032.96 571.972 1127.4 571.972"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip22)">
                            <text id="g282"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1037.41 505)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip23)">
                            <text id="g283"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1037.41 518)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip24)">
                            <text id="a282"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1037.41 531)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip25)">
                            <text id="k282"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1037.41 544)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip26)">
                            <text id="n282"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1037.41 556)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip27)">
                            <text id="w282" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1037.41 569)"
                            >
                                Qвода
                            </text>
                        </g>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c1472"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 1067.5 356.5)"
                            />
                            <path id="c1471"
                                    d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 1067.5 332.5)"
                            />
                        </a>
                        <path
                                d="M327.048 444.201 327 390.501 330 390.499 330.048 444.198ZM324 390.504C323.998 388.019 326.011 386.002 328.496 386 330.981 385.998 332.998 388.011 333 390.496 333.002 392.981 330.989 394.998 328.504 395 326.019 395.002 324.002 392.989 324 390.504Z"
                                fill="#6600CC"
                        />
                        <g clip-path="url(#clip28)">
                            <g clip-path="url(#clip30)" transform="translate(310 399)">
                                <use width="100%" height="100%" xlink:href="#img29"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch11 ?>">
                            <rect id="c201"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 319 425)"
                            />
                        </a>
                        <path
                                d="M1.5-0.00114086 1.53779 49.692-1.4622 49.6943-1.5 0.00114086ZM4.53779 49.6897C4.53968 52.175 2.5265 54.1912 0.0412179 54.1931-2.44406 54.195-4.46031 52.1818-4.4622 49.6965-4.46409 47.2113-2.45091 45.195 0.0343727 45.1931 2.51965 45.1912 4.5359 47.2044 4.53779 49.6897Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 707.5 440.193)"
                        />
                        <g clip-path="url(#clip31)">
                            <g clip-path="url(#clip33)" transform="translate(688 399)">
                                <use width="100%" height="100%" xlink:href="#img32"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch14 ?>">
                            <rect id="c336"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 697 425)"
                            />
                        </a>
                        <a href="<?= $urlTransformer6 ?>">
                            <path id="c3362"
                                  d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                  stroke="#989898"
                                  stroke-width="3.33333"
                                  stroke-miterlimit="8"
                                  fill="#FFFFFF"
                                  fill-rule="evenodd"
                                  transform="matrix(1 0 0 -1 690.5 498.5)"
                            />
                            <path id="c3361"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 690.5 473.5)"
                            />
                        </a>
                        <path
                                d="M-1.50666 16.5-1.1652 12.8805-0.0727182 9.53478 1.56418 6.46559 3.81066 3.81066 6.46559 1.56418 9.53478-0.0727182 12.8805-1.1652 16.5-1.50666 20.115-1.16562 23.5238-0.0748213 26.5969 1.56418 29.2606 3.81805 31.4412 6.47571 33.0727 9.53478 34.1652 12.8805 34.5067 16.5 34.1656 20.115 33.0748 23.5238 31.4412 26.5868 29.2533 29.2533 26.5868 31.4412 23.5238 33.0748 20.115 34.1656 16.5 34.5067 12.8805 34.1652 9.53478 33.0727 6.47571 31.4412 3.81805 29.2606 1.56418 26.5969-0.0748213 23.5238-1.16562 20.115ZM1.80587 19.6716 1.74114 19.3553 2.74114 22.4803 2.63603 22.2316 4.13603 25.0441 3.95758 24.7811 6.02008 27.2186 5.82647 27.0279 8.26397 29.0279 8.01838 28.864 10.8309 30.364 10.5906 30.2616 13.6531 31.2616 13.3284 31.1941 16.6409 31.5066 16.3591 31.5066 19.6716 31.1941 19.3553 31.2589 22.4803 30.2589 22.2316 30.364 25.0441 28.864 24.7985 29.0279 27.236 27.0279 27.0279 27.236 29.0279 24.7985 28.864 25.0441 30.364 22.2316 30.2589 22.4803 31.2589 19.3553 31.1941 19.6716 31.5066 16.3591 31.5066 16.6409 31.1941 13.3284 31.2616 13.6531 30.2616 10.5906 30.364 10.8309 28.864 8.01838 29.0279 8.26397 27.0279 5.82647 27.2186 6.02008 24.7811 3.95758 25.0441 4.13603 22.2316 2.63603 22.4803 2.74114 19.3553 1.74114 19.6716 1.80587 16.3591 1.49337 16.6409 1.49337 13.3284 1.80587 13.6531 1.73841 10.5906 2.73841 10.8309 2.63603 8.01838 4.13603 8.28141 3.95758 5.84391 6.02008 6.02008 5.84391 3.95758 8.28141 4.13603 8.01838 2.63603 10.8309 2.73841 10.5906 1.73841 13.6531 1.80587 13.3284 1.49337 16.6409 1.49337 16.3591Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 690.5 473.5)"
                        />
                        <path
                                d="M573 498.5 573 525.472 570 525.472 570 498.5ZM571.5 525.472 576 522.472 571.5 531.472 567 522.472Z"
                                fill="#989898"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(515.551 448)"
                        >
                            ТСН
                            <tspan x="21.3333" y="0">-</tspan>
                            1
                            <tspan x="-5.91336" y="13">10/0,4</tspan>
                            <tspan x="23.7533" y="13">кВ</tspan>
                            <tspan x="-4.2467" y="26">400</tspan>
                            <tspan x="14.42" y="26">кВА</tspan>
                            <tspan x="-2.16669" y="39">SCB11</tspan>
                            <tspan x="28.8333" y="39">-</tspan>
                            <tspan x="-3.7467" y="52">400/10,5</tspan>
                        </text>
                        <path
                                d="M1.5-0.00114086 1.53779 49.692-1.4622 49.6943-1.5 0.00114086ZM4.53779 49.6897C4.53968 52.175 2.5265 54.1912 0.0412179 54.1931-2.44406 54.195-4.46031 52.1818-4.4622 49.6965-4.46409 47.2113-2.45091 45.195 0.0343727 45.1931 2.51965 45.1912 4.5359 47.2044 4.53779 49.6897Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 571.5 440.193)"
                        />
                        <g clip-path="url(#clip34)">
                            <g clip-path="url(#clip36)" transform="translate(552 399)">
                                <use width="100%" height="100%" xlink:href="#img35"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch13 ?>">
                            <rect id="c309"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 561 425)"
                            />
                        </a>
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c3092"
                                  d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                  stroke="#989898"
                                  stroke-width="3.33333"
                                  stroke-miterlimit="8"
                                  fill="#FFFFFF"
                                  fill-rule="evenodd"
                                  transform="matrix(1 0 0 -1 554.5 498.5)"
                            />
                            <path id="c3091"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 554.5 473.5)"
                            />
                        </a>
                        <path
                                d="M-1.50666 16.5-1.1652 12.8805-0.0727182 9.53478 1.56418 6.46559 3.81066 3.81066 6.46559 1.56418 9.53478-0.0727182 12.8805-1.1652 16.5-1.50666 20.115-1.16562 23.5238-0.0748213 26.5969 1.56418 29.2606 3.81805 31.4412 6.47571 33.0727 9.53478 34.1652 12.8805 34.5067 16.5 34.1656 20.115 33.0748 23.5238 31.4412 26.5868 29.2533 29.2533 26.5868 31.4412 23.5238 33.0748 20.115 34.1656 16.5 34.5067 12.8805 34.1652 9.53478 33.0727 6.47571 31.4412 3.81805 29.2606 1.56418 26.5969-0.0748213 23.5238-1.16562 20.115ZM1.80587 19.6716 1.74114 19.3553 2.74114 22.4803 2.63603 22.2316 4.13603 25.0441 3.95758 24.7811 6.02008 27.2186 5.82647 27.0279 8.26397 29.0279 8.01838 28.864 10.8309 30.364 10.5906 30.2616 13.6531 31.2616 13.3284 31.1941 16.6409 31.5066 16.3591 31.5066 19.6716 31.1941 19.3553 31.2589 22.4803 30.2589 22.2316 30.364 25.0441 28.864 24.7985 29.0279 27.236 27.0279 27.0279 27.236 29.0279 24.7985 28.864 25.0441 30.364 22.2316 30.2589 22.4803 31.2589 19.3553 31.1941 19.6716 31.5066 16.3591 31.5066 16.6409 31.1941 13.3284 31.2616 13.6531 30.2616 10.5906 30.364 10.8309 28.864 8.01838 29.0279 8.26397 27.0279 5.82647 27.2186 6.02008 24.7811 3.95758 25.0441 4.13603 22.2316 2.63603 22.4803 2.74114 19.3553 1.74114 19.6716 1.80587 16.3591 1.49337 16.6409 1.49337 13.3284 1.80587 13.6531 1.73841 10.5906 2.73841 10.8309 2.63603 8.01838 4.13603 8.28141 3.95758 5.84391 6.02008 6.02008 5.84391 3.95758 8.28141 4.13603 8.01838 2.63603 10.8309 2.73841 10.5906 1.73841 13.6531 1.80587 13.3284 1.49337 16.6409 1.49337 16.3591Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 554.5 473.5)"
                        />
                        <path
                                d="M0 0 0.0198425 31.4369"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 464.5 389.937)"
                        />
                        <path
                                d="M1.66667-1.84422e-06 1.66677 94.8789-1.66656 94.8789-1.66667 1.84422e-06ZM5.0001 94.8789C5.00011 97.6404 2.76153 99.8789 0.00011052 99.8789-2.76131 99.8789-4.99989 97.6404-4.99989 94.879-4.9999 92.1175-2.76132 89.8789 9.94542e-05 89.8789 2.76152 89.8789 5.0001 92.1175 5.0001 94.8789Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 464.5 303.379)"
                        />
                        <g clip-path="url(#clip37)">
                            <g clip-path="url(#clip39)" transform="translate(446 249)">
                                <use width="100%" height="100%" xlink:href="#img38"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch7 ?>">
                            <rect id="c93"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 455 275)"
                            />
                        </a>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c9302"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 449.5 358.5)"
                            />
                            <path id="c9301"
                                    d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 449.5 334.5)"
                            />
                        </a>
                        <path
                                d="M485.552 316.332 569.152 316.332 569.152 329.923 485.552 329.923Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M485.552 329.923 569.152 329.923 569.152 343.514 485.552 343.514Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M484.885 329.923 569.818 329.923"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M485.552 315.665 485.552 344.181"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M569.152 315.665 569.152 344.181"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M484.885 316.332 569.818 316.332"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M484.885 343.514 569.818 343.514"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip40)">
                            <text id="g93Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(489.332 326)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip41)">
                            <text id="g93Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(489.332 340)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip43)" transform="matrix(1 0 -0 1.02857 561 317)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img42"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip45)" transform="matrix(1.16667 0 -0 1 561 331)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img44"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <path
                                d="M1.5-0.00094678 1.51984 31.4359-1.48016 31.4378-1.5 0.00094678ZM-4.5 0.00284034C-4.50157-2.48244-2.48812-4.49843-0.00284034-4.5 2.48244-4.50157 4.49843-2.48812 4.5-0.00284034 4.50157 2.48244 2.48812 4.49843 0.00284034 4.5-2.48244 4.50157-4.49843 2.48812-4.5 0.00284034Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 780.5 390.937)"
                        />
                        <path
                                d="M1.66667-1.84422e-06 1.66677 94.8789-1.66656 94.8789-1.66667 1.84422e-06ZM5.0001 94.8789C5.00011 97.6404 2.76153 99.8789 0.00011052 99.8789-2.76131 99.8789-4.99989 97.6404-4.99989 94.879-4.9999 92.1175-2.76132 89.8789 9.94542e-05 89.8789 2.76152 89.8789 5.0001 92.1175 5.0001 94.8789Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 780.5 303.379)"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c1202"
                                    d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 765.5 359.5)"
                            />
                            <path id="c1201"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 765.5 334.5)"
                            />
                        </a>
                        <path
                                d="M800.428 315.746 884.028 315.746 884.028 329.337 800.428 329.337Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M800.428 329.337 884.028 329.337 884.028 342.928 800.428 342.928Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M799.762 329.337 884.694 329.337"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M800.428 315.079 800.428 343.595"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M884.028 315.079 884.028 343.595"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M799.762 315.746 884.694 315.746"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M799.762 342.928 884.694 342.928"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip46)">
                            <text id="g120Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(804.208 326)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip47)">
                            <text id="g120Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(804.208 339)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip48)" transform="matrix(1 0 -0 1.02857 876 316)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img42"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip49)" transform="matrix(1 0 -0 1.02857 876 330)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img44"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip50)">
                            <g clip-path="url(#clip52)" transform="translate(603 191)">
                                <use width="100%" height="100%" xlink:href="#img51"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch5 ?>">
                            <rect
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FF0000"
                                    transform="matrix(1 0 0 -1 612 217)"
                            />
                        </a>
                        <g clip-path="url(#clip53)">
                            <g clip-path="url(#clip55)" transform="translate(146 249)">
                                <use width="100%" height="100%" xlink:href="#img54"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch6 ?>">
                            <rect id="c66"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 155 275)"
                            />
                        </a>
                        <g clip-path="url(#clip56)">
                            <g clip-path="url(#clip58)" transform="translate(762 249)">
                                <use width="100%" height="100%" xlink:href="#img57"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch8 ?>">
                            <rect id="c120"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 771 275)"
                            />
                        </a>
                        <g clip-path="url(#clip59)">
                            <g clip-path="url(#clip61)" transform="translate(1065 250)">
                                <use width="100%" height="100%" xlink:href="#img60"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch9 ?>">
                            <rect id="c147"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 1074 276)"
                            />
                        </a>
                        <path
                                d="M799.648 499.034 892.756 499.034 892.756 511.834 799.648 511.834Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M799.648 511.834 892.756 511.834 892.756 524.634 799.648 524.634Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M799.648 524.634 892.756 524.634 892.756 537.434 799.648 537.434Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M799.648 537.434 892.756 537.434 892.756 550.234 799.648 550.234Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M799.648 550.234 892.756 550.234 892.756 563.034 799.648 563.034Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M799.648 563.034 892.756 563.034 892.756 575.834 799.648 575.834Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M798.981 511.834 893.423 511.834"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M798.981 524.634 893.423 524.634"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M798.981 537.434 893.423 537.434"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M798.981 550.234 893.423 550.234"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M798.981 563.034 893.423 563.034"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M799.648 498.367 799.648 576.5"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M892.756 498.367 892.756 576.5"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M798.981 499.034 893.423 499.034"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M798.981 575.834 893.423 575.834"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip62)">
                            <text id="g255"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(803.427 509)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip63)">
                            <text id="g256"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(803.427 522)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip64)">
                            <text id="a255"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(803.427 535)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip65)">
                            <text id="k255"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(803.427 547)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip66)">
                            <text id="n255"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(803.427 560)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip67)">
                            <text id="w255" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(803.427 573)"
                            >
                                Qвода
                            </text>
                        </g>
                        <g clip-path="url(#clip68)">
                            <g clip-path="url(#clip70)" transform="translate(210 151)">
                                <use width="100%" height="100%" xlink:href="#img69"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch2 ?>">
                            <rect id="c12"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 219 177)"
                            />
                        </a>
                        <g clip-path="url(#clip71)">
                            <g clip-path="url(#clip73)" transform="translate(210 62)">
                                <use width="100%" height="100%" xlink:href="#img72"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch1 ?>">
                            <rect id="c363"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 219 88)"
                            />
                        </a>
                        <path
                                d="M937 52.5 937 207.976 934 207.976 934 52.5ZM935.5 52.5001 931 55.5001 935.5 46.5001 940 55.5ZM940 207.976C940 210.462 937.985 212.476 935.5 212.476 933.015 212.476 931 210.462 931 207.976 931 205.491 933.015 203.476 935.5 203.476 937.985 203.476 940 205.491 940 207.976Z"
                                fill="#663300"
                        />
                        <g clip-path="url(#clip74)">
                            <g clip-path="url(#clip76)" transform="translate(916 151)">
                                <use width="100%" height="100%" xlink:href="#img75"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch4 ?>">
                            <rect id="c39"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 925 177)"
                            />
                        </a>
                        <g clip-path="url(#clip77)">
                            <g clip-path="url(#clip79)" transform="translate(916 62)">
                                <use width="100%" height="100%" xlink:href="#img78"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch3 ?>">
                            <rect id="c390"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 925 88)"
                            />
                        </a>
                        <path
                                d="M246.815 155.525 330.415 155.525 330.415 169.117 246.815 169.117Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.815 169.117 330.415 169.117 330.415 182.708 246.815 182.708Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.148 169.117 331.081 169.117"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.815 154.859 246.815 183.374"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M330.415 154.859 330.415 183.374"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.148 155.525 331.081 155.525"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.148 182.708 331.081 182.708"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip80)">
                            <text id="g12Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(250.595 166)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip81)">
                            <text id="g12Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(250.595 179)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip82)" transform="matrix(1 0 -0 1.02857 322 156)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img42"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip83)" transform="matrix(1 0 -0 1.02857 323 170)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img44"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M246.815 65.8423 330.415 65.8423 330.415 79.4335 246.815 79.4335Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.815 79.4335 330.415 79.4335 330.415 93.0247 246.815 93.0247Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.148 79.4335 331.081 79.4335"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.815 65.1756 246.815 93.6913"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M330.415 65.1756 330.415 93.6913"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.148 65.8423 331.081 65.8423"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.148 93.0247 331.081 93.0247"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip84)">
                            <text id="g363Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(250.595 76)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip85)">
                            <text id="g363Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(250.595 89)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip86)" transform="matrix(1.06061 0 -0 1 322 67)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img42"
                                    transform="scale(0.120879 0.120879)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip87)" transform="matrix(1 0 -0 1.02857 323 80)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img44"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M950.264 155.145 1033.86 155.145 1033.86 168.736 950.264 168.736Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M950.264 168.736 1033.86 168.736 1033.86 182.327 950.264 182.327Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M949.598 168.736 1034.53 168.736"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M950.264 154.478 950.264 182.994"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1033.86 154.478 1033.86 182.994"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M949.598 155.145 1034.53 155.145"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M949.598 182.327 1034.53 182.327"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip88)">
                            <text id="g39Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(954.044 165)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip89)">
                            <text id="g39Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(954.044 179)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip90)" transform="matrix(1 0 -0 1.02857 1026 156)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img42"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip91)" transform="matrix(1 0 -0 1.11429 1026 169)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img44"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M950.264 65.4617 1033.86 65.4617 1033.86 79.0529 950.264 79.0529Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M950.264 79.0529 1033.86 79.0529 1033.86 92.6441 950.264 92.6441Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M949.598 79.0529 1034.53 79.0529"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M950.264 64.7951 950.264 93.3108"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1033.86 64.7951 1033.86 93.3108"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M949.598 65.4617 1034.53 65.4617"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M949.598 92.6441 1034.53 92.6441"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip92)">
                            <text id="g390Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(954.044 75)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip93)">
                            <text id="g390Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(954.044 89)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip94)" transform="matrix(1 0 -0 1.02857 1026 66)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img42"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip95)" transform="matrix(1 0 -0 1.02857 1026 80)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img44"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(722.064 418)"
                        >
                            В
                            <tspan x="7.16669" y="0">-</tspan>
                            ТСН
                            <tspan x="32" y="0">-</tspan>
                            2
                            <tspan x="234.721" y="-14">СШ</tspan>
                            -10
                            <tspan x="269.554" y="-14">кВ</tspan>
                            <tspan x="-312.059" y="-1">В</tspan>
                            <tspan x="-304.892" y="-1">-</tspan>
                            ТСН
                            <tspan x="-280.059" y="-1">-</tspan>
                            3
                            <tspan x="-138.771" y="0">В</tspan>
                            <tspan x="-131.604" y="0">-</tspan>
                            ТСН
                            <tspan x="-106.771" y="0">-</tspan>
                            1
                        </text>
                        <path
                                d="M467 498.5 467 525.472 464 525.472 464 498.5ZM465.5 525.472 470 522.472 465.5 531.472 461 522.472Z"
                                fill="#989898"
                        />
                        <path
                                d="M1.5-0.00114086 1.53779 49.692-1.4622 49.6943-1.5 0.00114086ZM4.53779 49.6897C4.53968 52.175 2.5265 54.1912 0.0412179 54.1931-2.44406 54.195-4.46031 52.1818-4.4622 49.6965-4.46409 47.2113-2.45091 45.195 0.0343727 45.1931 2.51965 45.1912 4.5359 47.2044 4.53779 49.6897Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 464.5 440.193)"
                        />
                        <g clip-path="url(#clip96)">
                            <g clip-path="url(#clip98)" transform="translate(446 399)">
                                <use width="100%" height="100%" xlink:href="#img97"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch12 ?>">
                            <rect id="c228"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 455 425)"
                            />
                        </a>
                        <a href="<?= $urlTransformer7 ?>">
                            <path id="c2282"
                                  d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                  stroke="#989898"
                                  stroke-width="3.33333"
                                  stroke-miterlimit="8"
                                  fill="#FFFFFF"
                                  fill-rule="evenodd"
                                  transform="matrix(1 0 0 -1 448.5 498.5)"
                            />
                            <path id="c2281"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 448.5 473.5)"
                            />
                        </a>
                        <path
                                d="M-1.50666 16.5-1.1652 12.8805-0.0727182 9.53478 1.56418 6.46559 3.81066 3.81066 6.46559 1.56418 9.53478-0.0727182 12.8805-1.1652 16.5-1.50666 20.115-1.16562 23.5238-0.0748213 26.5969 1.56418 29.2606 3.81805 31.4412 6.47571 33.0727 9.53478 34.1652 12.8805 34.5067 16.5 34.1656 20.115 33.0748 23.5238 31.4412 26.5868 29.2533 29.2533 26.5868 31.4412 23.5238 33.0748 20.115 34.1656 16.5 34.5067 12.8805 34.1652 9.53478 33.0727 6.47571 31.4412 3.81805 29.2606 1.56418 26.5969-0.0748213 23.5238-1.16562 20.115ZM1.80587 19.6716 1.74114 19.3553 2.74114 22.4803 2.63603 22.2316 4.13603 25.0441 3.95758 24.7811 6.02008 27.2186 5.82647 27.0279 8.26397 29.0279 8.01838 28.864 10.8309 30.364 10.5906 30.2616 13.6531 31.2616 13.3284 31.1941 16.6409 31.5066 16.3591 31.5066 19.6716 31.1941 19.3553 31.2589 22.4803 30.2589 22.2316 30.364 25.0441 28.864 24.7985 29.0279 27.236 27.0279 27.0279 27.236 29.0279 24.7985 28.864 25.0441 30.364 22.2316 30.2589 22.4803 31.2589 19.3553 31.1941 19.6716 31.5066 16.3591 31.5066 16.6409 31.1941 13.3284 31.2616 13.6531 30.2616 10.5906 30.364 10.8309 28.864 8.01838 29.0279 8.26397 27.0279 5.82647 27.2186 6.02008 24.7811 3.95758 25.0441 4.13603 22.2316 2.63603 22.4803 2.74114 19.3553 1.74114 19.6716 1.80587 16.3591 1.49337 16.6409 1.49337 13.3284 1.80587 13.6531 1.73841 10.5906 2.73841 10.8309 2.63603 8.01838 4.13603 8.28141 3.95758 5.84391 6.02008 6.02008 5.84391 3.95758 8.28141 4.13603 8.01838 2.63603 10.8309 2.73841 10.5906 1.73841 13.6531 1.80587 13.3284 1.49337 16.6409 1.49337 16.3591Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 448.5 473.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(413.92 447)"
                        >
                            ТСН
                            <tspan x="21.3333" y="0">-</tspan>
                            3
                            <tspan x="-11.8333" y="13">10/0,4</tspan>
                            <tspan x="17.8333" y="13">кВ</tspan>
                            <tspan x="-3.16666" y="26">40</tspan>
                            <tspan x="10.1667" y="26">кВА</tspan>
                            <tspan x="-10.6667" y="39">ТМ</tspan>
                            G
                            <tspan x="13" y="39">-</tspan>
                            40/
                            <tspan x="3" y="52">10</tspan>
                            <tspan x="13.6667" y="52">-</tspan>
                            Y1
                        </text>
                        <path
                                d="M69.847 191.317 123.05 191.317 123.05 204.117 69.847 204.117Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M69.847 190.65 69.847 204.784"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M123.05 190.65 123.05 204.784"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M69.1804 191.317 123.717 191.317"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M69.1804 204.117 123.717 204.117"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip99)">
                            <text id="g15"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(73.6266 201)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M959.554 374.316 1012.76 374.316 1012.76 387.116 959.554 387.116Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M959.554 373.649 959.554 387.782"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1012.76 373.649 1012.76 387.782"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M958.887 374.316 1013.42 374.316"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M958.887 387.116 1013.42 387.116"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip100)">
                            <text id="g96"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(963.333 384)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M1180.07 191.645 1233.28 191.645 1233.28 204.445 1180.07 204.445Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1180.07 190.978 1180.07 205.111"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1233.28 190.978 1233.28 205.111"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1179.41 191.645 1233.94 191.645"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1179.41 204.445 1233.94 204.445"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip101)">
                            <text id="g42"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1183.85 202)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M185.497 326.304 269.096 326.304 269.096 339.895 185.497 339.895Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M185.497 325.637 185.497 340.562"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M269.096 325.637 269.096 340.562"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M184.83 326.304 269.763 326.304"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M184.83 339.895 269.763 339.895"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip102)">
                            <text id="g66"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(188.163 336)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip103)" transform="matrix(1 0 -0 1.02857 262 327)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img44"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M1102.27 321.677 1185.87 321.677 1185.87 335.268 1102.27 335.268Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1102.27 321.011 1102.27 335.935"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1185.87 321.011 1185.87 335.935"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1101.6 321.677 1186.54 321.677"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1101.6 335.268 1186.54 335.268"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip104)">
                            <text id="g147"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1104.94 332)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip105)" transform="matrix(1 0 -0 1.11429 1179 322)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img44"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path id="c174"
                                d="M141.5 465C141.5 451.469 152.469 440.5 166 440.5 179.531 440.5 190.5 451.469 190.5 465 190.5 478.531 179.531 489.5 166 489.5 152.469 489.5 141.5 478.531 141.5 465Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip106)">
                                <g clip-path="url(#clip107)">
                                    <g clip-path="url(#clip108)">
                                        <path
                                                d="M164.689 458.933 165.622 458.933 166.944 459.167 168.033 459.633 168.889 460.178 169.9 461.189 170.522 462.122 170.989 463.367 171.144 464.067 171.144 465.933 170.833 467.1 170.211 468.344 169.589 469.122 169.044 469.667 167.956 470.367 166.711 470.833 165.933 470.989 164.378 470.989 163.133 470.678 162.278 470.289 161.422 469.744 160.567 468.967 160.022 468.189 159.478 467.1 159.167 465.856 159.089 464.922 159.244 463.678 159.556 462.667 160.178 461.5 161.033 460.567 161.656 460.022 162.978 459.322 164.144 459.011Z"
                                        />
                                        <path
                                                d="M165.156 445.089 166.011 445.089 167.489 445.322 168.967 445.789 170.211 446.411 171.144 447.033 171.922 447.733 172.856 448.667 173.711 449.911 174.333 451.156 174.8 452.556 175.033 453.722 175.111 454.344 175.111 455.822 174.878 457.3 174.489 458.622 173.867 459.944 173.089 461.033 172.933 461.033 172.311 459.944 171.378 458.856 170.522 458.078 169.433 457.378 168.267 456.833 166.944 456.444 165.156 456.211Z"
                                        />
                                        <path
                                                d="M152.4 460.878 152.789 460.956 154.967 462.2 156.522 463.133 156.6 463.289 156.444 464.922 156.6 466.556 156.989 468.033 157.533 469.2 157.533 469.433 155.356 470.678 153.489 471.767 149.444 474.1 148.122 474.878 147.889 474.878 147.189 473.4 146.8 472.078 146.644 471.144 146.567 469.822 146.722 468.344 146.956 467.256 147.5 465.778 148.044 464.767 148.744 463.756 149.678 462.744 150.533 461.967 151.933 461.111Z"
                                        />
                                        <path
                                                d="M172.7 469.433 173.089 469.511 174.956 470.6 181.022 474.1 182.344 474.878 182.189 475.267 181.644 476.044 180.944 476.9 180.4 477.444 179.233 478.3 177.989 479 176.511 479.544 175.344 479.778 174.878 479.856 172.544 479.856 171.378 479.622 170.133 479.233 168.811 478.611 167.878 477.989 167.878 473.322 168.578 473.011 169.9 472.311 170.833 471.611 171.922 470.522Z"
                                        />
                                        <path
                                                d="M155.667 450.067 157.378 450.067 158.856 450.3 160.489 450.844 161.811 451.544 162.433 451.933 162.433 456.678 161.033 457.3 159.944 458 159.089 458.7 158.544 459.244 157.611 460.567 157.144 460.411 155.822 459.633 149.756 456.133 148.044 455.122 147.967 454.967 148.511 454.111 149.367 453.1 149.989 452.478 151.156 451.622 152.244 451 153.722 450.456 154.578 450.222Z"
                                        />
                                        <path
                                                d="M159.167 471.533 159.478 471.611 160.644 472.467 161.967 473.089 163.211 473.478 164.144 473.633 165.078 473.711 165.156 473.789 165.156 484.833 163.989 484.833 162.433 484.522 161.111 484.056 159.711 483.278 158.7 482.5 157.922 481.8 157.144 480.867 156.367 479.622 155.744 478.222 155.356 476.744 155.2 475.344 155.2 474.489 155.278 473.789 157.222 472.7 158.544 471.922Z"
                                        />
                                        <path
                                                d="M182.267 455.044 182.422 455.044 182.967 456.133 183.433 457.533 183.667 458.778 183.744 460.333 183.589 461.733 183.278 463.056 182.656 464.533 182.111 465.467 181.489 466.322 180.633 467.256 179.467 468.189 178.456 468.811 177.756 469.122 175.811 468.033 173.944 466.944 173.711 466.789 173.867 465.389 173.867 464.222 174.567 463.522 175.578 462.2 176.278 461.033 176.978 459.556 177.522 457.844 178.222 457.378 180.167 456.289 182.033 455.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c2011"
                                d="M304.5 468C304.5 454.469 315.469 443.5 329 443.5 342.531 443.5 353.5 454.469 353.5 468 353.5 481.531 342.531 492.5 329 492.5 315.469 492.5 304.5 481.531 304.5 468Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate3 ?>">
                            <g clip-path="url(#clip109)">
                                <g clip-path="url(#clip110)">
                                    <g clip-path="url(#clip111)">
                                        <path
                                                d="M327.689 461.933 328.622 461.933 329.944 462.167 331.033 462.633 331.889 463.178 332.9 464.189 333.522 465.122 333.989 466.367 334.144 467.067 334.144 468.933 333.833 470.1 333.211 471.344 332.589 472.122 332.044 472.667 330.956 473.367 329.711 473.833 328.933 473.989 327.378 473.989 326.133 473.678 325.278 473.289 324.422 472.744 323.567 471.967 323.022 471.189 322.478 470.1 322.167 468.856 322.089 467.922 322.244 466.678 322.556 465.667 323.178 464.5 324.033 463.567 324.656 463.022 325.978 462.322 327.144 462.011Z"
                                        />
                                        <path
                                                d="M328.156 448.089 329.011 448.089 330.489 448.322 331.967 448.789 333.211 449.411 334.144 450.033 334.922 450.733 335.856 451.667 336.711 452.911 337.333 454.156 337.8 455.556 338.033 456.722 338.111 457.344 338.111 458.822 337.878 460.3 337.489 461.622 336.867 462.944 336.089 464.033 335.933 464.033 335.311 462.944 334.378 461.856 333.522 461.078 332.433 460.378 331.267 459.833 329.944 459.444 328.156 459.211Z"
                                        />
                                        <path
                                                d="M315.4 463.878 315.789 463.956 317.967 465.2 319.522 466.133 319.6 466.289 319.444 467.922 319.6 469.556 319.989 471.033 320.533 472.2 320.533 472.433 318.356 473.678 316.489 474.767 312.444 477.1 311.122 477.878 310.889 477.878 310.189 476.4 309.8 475.078 309.644 474.144 309.567 472.822 309.722 471.344 309.956 470.256 310.5 468.778 311.044 467.767 311.744 466.756 312.678 465.744 313.533 464.967 314.933 464.111Z"
                                        />
                                        <path
                                                d="M335.7 472.433 336.089 472.511 337.956 473.6 344.022 477.1 345.344 477.878 345.189 478.267 344.644 479.044 343.944 479.9 343.4 480.444 342.233 481.3 340.989 482 339.511 482.544 338.344 482.778 337.878 482.856 335.544 482.856 334.378 482.622 333.133 482.233 331.811 481.611 330.878 480.989 330.878 476.322 331.578 476.011 332.9 475.311 333.833 474.611 334.922 473.522Z"
                                        />
                                        <path
                                                d="M318.667 453.067 320.378 453.067 321.856 453.3 323.489 453.844 324.811 454.544 325.433 454.933 325.433 459.678 324.033 460.3 322.944 461 322.089 461.7 321.544 462.244 320.611 463.567 320.144 463.411 318.822 462.633 312.756 459.133 311.044 458.122 310.967 457.967 311.511 457.111 312.367 456.1 312.989 455.478 314.156 454.622 315.244 454 316.722 453.456 317.578 453.222Z"
                                        />
                                        <path
                                                d="M322.167 474.533 322.478 474.611 323.644 475.467 324.967 476.089 326.211 476.478 327.144 476.633 328.078 476.711 328.156 476.789 328.156 487.833 326.989 487.833 325.433 487.522 324.111 487.056 322.711 486.278 321.7 485.5 320.922 484.8 320.144 483.867 319.367 482.622 318.744 481.222 318.356 479.744 318.2 478.344 318.2 477.489 318.278 476.789 320.222 475.7 321.544 474.922Z"
                                        />
                                        <path
                                                d="M345.267 458.044 345.422 458.044 345.967 459.133 346.433 460.533 346.667 461.778 346.744 463.333 346.589 464.733 346.278 466.056 345.656 467.533 345.111 468.467 344.489 469.322 343.633 470.256 342.467 471.189 341.456 471.811 340.756 472.122 338.811 471.033 336.944 469.944 336.711 469.789 336.867 468.389 336.867 467.222 337.567 466.522 338.578 465.2 339.278 464.033 339.978 462.556 340.522 460.844 341.222 460.378 343.167 459.289 345.033 458.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c255"
                                d="M817.5 468C817.5 454.469 828.469 443.5 842 443.5 855.531 443.5 866.5 454.469 866.5 468 866.5 481.531 855.531 492.5 842 492.5 828.469 492.5 817.5 481.531 817.5 468Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate4 ?>">
                            <g clip-path="url(#clip112)">
                                <g clip-path="url(#clip113)">
                                    <g clip-path="url(#clip114)">
                                        <path
                                                d="M840.689 461.933 841.622 461.933 842.944 462.167 844.033 462.633 844.889 463.178 845.9 464.189 846.522 465.122 846.989 466.367 847.144 467.067 847.144 468.933 846.833 470.1 846.211 471.344 845.589 472.122 845.044 472.667 843.956 473.367 842.711 473.833 841.933 473.989 840.378 473.989 839.133 473.678 838.278 473.289 837.422 472.744 836.567 471.967 836.022 471.189 835.478 470.1 835.167 468.856 835.089 467.922 835.244 466.678 835.556 465.667 836.178 464.5 837.033 463.567 837.656 463.022 838.978 462.322 840.144 462.011Z"
                                        />
                                        <path
                                                d="M841.156 448.089 842.011 448.089 843.489 448.322 844.967 448.789 846.211 449.411 847.144 450.033 847.922 450.733 848.856 451.667 849.711 452.911 850.333 454.156 850.8 455.556 851.033 456.722 851.111 457.344 851.111 458.822 850.878 460.3 850.489 461.622 849.867 462.944 849.089 464.033 848.933 464.033 848.311 462.944 847.378 461.856 846.522 461.078 845.433 460.378 844.267 459.833 842.944 459.444 841.156 459.211Z"
                                        />
                                        <path
                                                d="M828.4 463.878 828.789 463.956 830.967 465.2 832.522 466.133 832.6 466.289 832.444 467.922 832.6 469.556 832.989 471.033 833.533 472.2 833.533 472.433 831.356 473.678 829.489 474.767 825.444 477.1 824.122 477.878 823.889 477.878 823.189 476.4 822.8 475.078 822.644 474.144 822.567 472.822 822.722 471.344 822.956 470.256 823.5 468.778 824.044 467.767 824.744 466.756 825.678 465.744 826.533 464.967 827.933 464.111Z"
                                        />
                                        <path
                                                d="M848.7 472.433 849.089 472.511 850.956 473.6 857.022 477.1 858.344 477.878 858.189 478.267 857.644 479.044 856.944 479.9 856.4 480.444 855.233 481.3 853.989 482 852.511 482.544 851.344 482.778 850.878 482.856 848.544 482.856 847.378 482.622 846.133 482.233 844.811 481.611 843.878 480.989 843.878 476.322 844.578 476.011 845.9 475.311 846.833 474.611 847.922 473.522Z"
                                        />
                                        <path
                                                d="M831.667 453.067 833.378 453.067 834.856 453.3 836.489 453.844 837.811 454.544 838.433 454.933 838.433 459.678 837.033 460.3 835.944 461 835.089 461.7 834.544 462.244 833.611 463.567 833.144 463.411 831.822 462.633 825.756 459.133 824.044 458.122 823.967 457.967 824.511 457.111 825.367 456.1 825.989 455.478 827.156 454.622 828.244 454 829.722 453.456 830.578 453.222Z"
                                        />
                                        <path
                                                d="M835.167 474.533 835.478 474.611 836.644 475.467 837.967 476.089 839.211 476.478 840.144 476.633 841.078 476.711 841.156 476.789 841.156 487.833 839.989 487.833 838.433 487.522 837.111 487.056 835.711 486.278 834.7 485.5 833.922 484.8 833.144 483.867 832.367 482.622 831.744 481.222 831.356 479.744 831.2 478.344 831.2 477.489 831.278 476.789 833.222 475.7 834.544 474.922Z"
                                        />
                                        <path
                                                d="M858.267 458.044 858.422 458.044 858.967 459.133 859.433 460.533 859.667 461.778 859.744 463.333 859.589 464.733 859.278 466.056 858.656 467.533 858.111 468.467 857.489 469.322 856.633 470.256 855.467 471.189 854.456 471.811 853.756 472.122 851.811 471.033 849.944 469.944 849.711 469.789 849.867 468.389 849.867 467.222 850.567 466.522 851.578 465.2 852.278 464.033 852.978 462.556 853.522 460.844 854.222 460.378 856.167 459.289 858.033 458.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c282"
                                d="M1058.5 465C1058.5 451.469 1069.47 440.5 1083 440.5 1096.53 440.5 1107.5 451.469 1107.5 465 1107.5 478.531 1096.53 489.5 1083 489.5 1069.47 489.5 1058.5 478.531 1058.5 465Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip115)">
                                <g clip-path="url(#clip116)">
                                    <g clip-path="url(#clip117)">
                                        <path
                                                d="M1081.69 458.933 1082.62 458.933 1083.94 459.167 1085.03 459.633 1085.89 460.178 1086.9 461.189 1087.52 462.122 1087.99 463.367 1088.14 464.067 1088.14 465.933 1087.83 467.1 1087.21 468.344 1086.59 469.122 1086.04 469.667 1084.96 470.367 1083.71 470.833 1082.93 470.989 1081.38 470.989 1080.13 470.678 1079.28 470.289 1078.42 469.744 1077.57 468.967 1077.02 468.189 1076.48 467.1 1076.17 465.856 1076.09 464.922 1076.24 463.678 1076.56 462.667 1077.18 461.5 1078.03 460.567 1078.66 460.022 1079.98 459.322 1081.14 459.011Z"
                                        />
                                        <path
                                                d="M1082.16 445.089 1083.01 445.089 1084.49 445.322 1085.97 445.789 1087.21 446.411 1088.14 447.033 1088.92 447.733 1089.86 448.667 1090.71 449.911 1091.33 451.156 1091.8 452.556 1092.03 453.722 1092.11 454.344 1092.11 455.822 1091.88 457.3 1091.49 458.622 1090.87 459.944 1090.09 461.033 1089.93 461.033 1089.31 459.944 1088.38 458.856 1087.52 458.078 1086.43 457.378 1085.27 456.833 1083.94 456.444 1082.16 456.211Z"
                                        />
                                        <path
                                                d="M1069.4 460.878 1069.79 460.956 1071.97 462.2 1073.52 463.133 1073.6 463.289 1073.44 464.922 1073.6 466.556 1073.99 468.033 1074.53 469.2 1074.53 469.433 1072.36 470.678 1070.49 471.767 1066.44 474.1 1065.12 474.878 1064.89 474.878 1064.19 473.4 1063.8 472.078 1063.64 471.144 1063.57 469.822 1063.72 468.344 1063.96 467.256 1064.5 465.778 1065.04 464.767 1065.74 463.756 1066.68 462.744 1067.53 461.967 1068.93 461.111Z"
                                        />
                                        <path
                                                d="M1089.7 469.433 1090.09 469.511 1091.96 470.6 1098.02 474.1 1099.34 474.878 1099.19 475.267 1098.64 476.044 1097.94 476.9 1097.4 477.444 1096.23 478.3 1094.99 479 1093.51 479.544 1092.34 479.778 1091.88 479.856 1089.54 479.856 1088.38 479.622 1087.13 479.233 1085.81 478.611 1084.88 477.989 1084.88 473.322 1085.58 473.011 1086.9 472.311 1087.83 471.611 1088.92 470.522Z"
                                        />
                                        <path
                                                d="M1072.67 450.067 1074.38 450.067 1075.86 450.3 1077.49 450.844 1078.81 451.544 1079.43 451.933 1079.43 456.678 1078.03 457.3 1076.94 458 1076.09 458.7 1075.54 459.244 1074.61 460.567 1074.14 460.411 1072.82 459.633 1066.76 456.133 1065.04 455.122 1064.97 454.967 1065.51 454.111 1066.37 453.1 1066.99 452.478 1068.16 451.622 1069.24 451 1070.72 450.456 1071.58 450.222Z"
                                        />
                                        <path
                                                d="M1076.17 471.533 1076.48 471.611 1077.64 472.467 1078.97 473.089 1080.21 473.478 1081.14 473.633 1082.08 473.711 1082.16 473.789 1082.16 484.833 1080.99 484.833 1079.43 484.522 1078.11 484.056 1076.71 483.278 1075.7 482.5 1074.92 481.8 1074.14 480.867 1073.37 479.622 1072.74 478.222 1072.36 476.744 1072.2 475.344 1072.2 474.489 1072.28 473.789 1074.22 472.7 1075.54 471.922Z"
                                        />
                                        <path
                                                d="M1099.27 455.044 1099.42 455.044 1099.97 456.133 1100.43 457.533 1100.67 458.778 1100.74 460.333 1100.59 461.733 1100.28 463.056 1099.66 464.533 1099.11 465.467 1098.49 466.322 1097.63 467.256 1096.47 468.189 1095.46 468.811 1094.76 469.122 1092.81 468.033 1090.94 466.944 1090.71 466.789 1090.87 465.389 1090.87 464.222 1091.57 463.522 1092.58 462.2 1093.28 461.033 1093.98 459.556 1094.52 457.844 1095.22 457.378 1097.17 456.289 1099.03 455.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M427.318 535.826 500.965 535.826 500.965 549.559 427.318 549.559Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M427.318 535.159 427.318 550.226"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M500.965 535.159 500.965 550.226"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M426.651 535.826 501.632 535.826"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M426.651 549.559 501.632 549.559"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip118)">
                            <text id="g228"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(431.097 546)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M533.504 536.11 607.151 536.11 607.151 549.843 533.504 549.843Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M533.504 535.443 533.504 550.51"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M607.151 535.443 607.151 550.51"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M532.837 536.11 607.817 536.11"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M532.837 549.843 607.817 549.843"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip119)">
                            <text id="g309"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(537.283 546)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M671.369 535.438 745.016 535.438 745.016 549.171 671.369 549.171Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M671.369 534.772 671.369 549.838"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M745.016 534.772 745.016 549.838"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M670.703 535.438 745.683 535.438"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M670.703 549.171 745.683 549.171"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip120)">
                            <text id="g336"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(675.149 545)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M1179.72 536.109 1253.37 536.109 1253.37 549.843 1179.72 549.843Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1179.72 535.443 1179.72 550.509"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1253.37 535.443 1253.37 550.509"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1179.05 536.109 1254.03 536.109"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1179.05 549.843 1254.03 549.843"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip121)">
                            <text id="g417"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1183.5 546)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M5.50005 570C5.50005 564.753 9.52949 560.5 14.5001 560.5 19.4706 560.5 23.5 564.753 23.5 570 23.5 575.247 19.4706 579.5 14.5001 579.5 9.52949 579.5 5.50005 575.247 5.50005 570Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M5.50005 592C5.50005 586.753 9.52949 582.5 14.5001 582.5 19.4706 582.5 23.5 586.753 23.5 592 23.5 597.247 19.4706 601.5 14.5001 601.5 9.52949 601.5 5.50005 597.247 5.50005 592Z"
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
                                transform="translate(29.5747 572)"
                        >
                            в работе
                            <tspan x="-0.0827293" y="22">в резерве</tspan>
                        </text>
                        <path
                                d="M5 548C5 543.029 9.02944 539 14 539 18.9706 539 23 543.029 23 548 23 552.971 18.9706 557 14 557 9.02944 557 5 552.971 5 548Z"
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
                                transform="translate(29.492 550)"
                        >
                            в ремонте
                            <tspan x="0.264883" y="-23">отдача</tspan>
                            <tspan x="0.000104904" y="-46">прием</tspan>
                        </text>
                        <g clip-path="url(#clip122)" transform="matrix(1.05 0 -0 1 9 492)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img42"
                                    transform="scale(0.21978 0.21978)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip123)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img44"
                                    transform="matrix(0.230769 0 0 0.230769 9 514)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip125)" transform="matrix(1 0 -0 1.00168 1055 47)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img124"
                                    transform="scale(0.801282 0.801282)"
                            ></use>
                        </g>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1077.17 43.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 1175.5 97.1712)"
                        />
                        <path
                                d="M1173.55 110.031 1165.86 101.654 1166.35 101.203 1174.04 109.58ZM1166.11 101.429 1165.95 105.197 1162.5 97.5001 1169.87 101.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M1182.95 109.889 1173.5 109.5"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1080.67 29.4475 1175.04 29.4475 1175.04 42.2475 1080.67 42.2475Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1080.67 28.7808 1080.67 42.9141"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1175.04 28.7808 1175.04 42.9141"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1080 29.4475 1175.7 29.4475"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1080 42.2475 1175.7 42.2475"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip126)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="10"
                                    transform="translate(1084.45 39)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1094.95 39)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M1076.5 43.5001 1095.69 43.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1183.16 96.5311 1270.82 96.5311 1270.82 109.331 1183.16 109.331Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1183.16 95.8645 1183.16 109.998"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1270.82 95.8645 1270.82 109.998"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1182.49 96.5311 1271.49 96.5311"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1182.49 109.331 1271.49 109.331"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip127)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="10"
                                    transform="translate(1186.94 107)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1197.44 107)"
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
                                transform="matrix(1 0 0 -1 1073.5 51.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1182.99 69.5001)"
                        />
                        <path
                                d="M1183.5 69.5001 1202.69 69.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1187.36 56.3476 1260.56 56.3476 1260.56 69.1476 1187.36 69.1476Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1187.36 55.6809 1187.36 69.8143"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1260.56 55.6809 1260.56 69.8143"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1186.69 56.3476 1261.22 56.3476"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1186.69 69.1476 1261.22 69.1476"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip128)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1191.14 66)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M1158.5 97.5001 1181.21 97.5002"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                        />
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

        fetch('/qamchiq/server42')
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

                    if (item.id === 363) {
                        const plus = document.getElementById("g363Plus");
                        const minus = document.getElementById("g363Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }

                        if (item.value !== 0) {
                            trueAnimation(363);
                        } else {
                            falseAnimation(363);
                        }

                    } else if(item.id === 390) {
                        const plus = document.getElementById("g390Plus");
                        const minus = document.getElementById("g390Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(390);
                        } else {
                            falseAnimation(390);
                        }
                    } else if(item.id === 12) {
                        const plus = document.getElementById("g12Plus");
                        const minus = document.getElementById("g12Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }

                        if (item.value !== 0) {
                            trueAnimation(12);
                        } else {
                            falseAnimation(12);
                        }
                    } else if(item.id === 39) {
                        const plus = document.getElementById("g39Plus");
                        const minus = document.getElementById("g39Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }

                        if (item.value !== 0) {
                            trueAnimation(39);
                        } else {
                            falseAnimation(39);
                        }
                    } else if(item.id === 15) {
                        const value = document.getElementById("g15");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 42) {
                        const value = document.getElementById("g42");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 96) {
                        const value = document.getElementById("g96");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 66) {
                        const value = document.getElementById("g66");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(66);
                            trueAnimation(6601);
                            trueAnimation(6602);
                        } else {
                            falseAnimation(66);
                            falseAnimation(6601);
                            falseAnimation(6602);
                        }
                    } else if(item.id === 93) {
                        const plus = document.getElementById("g93Plus");
                        const minus = document.getElementById("g93Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }

                        if (item.value !== 0) {
                            trueAnimation(93);
                            trueAnimation(9301);
                            trueAnimation(9302);
                        } else {
                            falseAnimation(93);
                            falseAnimation(9301);
                            falseAnimation(9302);
                        }
                    } else if(item.id === 120) {
                        const plus = document.getElementById("g120Plus");
                        const minus = document.getElementById("g120Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }

                        if (item.value !== 0) {
                            trueAnimation(120);
                            trueAnimation(1201);
                            trueAnimation(1202);
                        } else {
                            falseAnimation(120);
                            falseAnimation(1201);
                            falseAnimation(1202);
                        }
                    } else if(item.id === 147) {
                        const value = document.getElementById("g147");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(147);
                            trueAnimation(1471);
                            trueAnimation(1472);
                        } else {
                            falseAnimation(147);
                            falseAnimation(1471);
                            falseAnimation(1472);
                        }
                    } else if(item.id === 228) {
                        const value = document.getElementById("g228");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(228);
                            trueAnimation(2281);
                            trueAnimation(2282);
                        } else {
                            falseAnimation(228);
                            falseAnimation(2281);
                            falseAnimation(2282);
                        }
                    } else if(item.id === 309) {
                        const value = document.getElementById("g309");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(309);
                            trueAnimation(3091);
                            trueAnimation(3092);
                        } else {
                            falseAnimation(309);
                            falseAnimation(3091);
                            falseAnimation(3092);
                        }
                    } else if(item.id === 336) {
                        const value = document.getElementById("g336");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(336);
                            trueAnimation(3361);
                            trueAnimation(3362);
                        } else {
                            falseAnimation(336);
                            falseAnimation(3361);
                            falseAnimation(3362);
                        }
                    } else if(item.id === 417) {
                        const value = document.getElementById("g417");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(4171);
                            trueAnimation(4172);
                        } else {
                            falseAnimation(4171);
                            falseAnimation(4172);
                        }
                    }
                    //G-1
                    else if(item.id === 174) {
                        const value = document.getElementById("g174");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a174");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 10.5 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(174);
                        } else {
                            falseAnimation(174);
                        }
                    } else if(item.id === 175) {
                        const value = document.getElementById("g175");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 176) {
                        const value = document.getElementById("k174");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 177) {
                        const value = document.getElementById("n174");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 178) {
                        const value = document.getElementById("w174");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //G-2
                    else if(item.id === 201) {
                        const value = document.getElementById("g201");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a201");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.75 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(201);
                            trueAnimation(2011);
                        } else {
                            falseAnimation(201);
                            falseAnimation(2011);
                        }
                    } else if(item.id === 202) {
                        const value = document.getElementById("g202");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 203) {
                        const value = document.getElementById("k201");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 204) {
                        const value = document.getElementById("n201");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 205) {
                        const value = document.getElementById("w201");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //G-3
                    else if(item.id === 255) {
                        const value = document.getElementById("g255");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a255");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.75 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(255);
                            trueAnimation(2551);
                        } else {
                            falseAnimation(255);
                            falseAnimation(2551);
                        }
                    } else if(item.id === 256) {
                        const value = document.getElementById("g256");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 257) {
                        const value = document.getElementById("k255");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 258) {
                        const value = document.getElementById("n255");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 259) {
                        const value = document.getElementById("w255");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //G-4
                    else if(item.id === 282) {
                        const value = document.getElementById("g282");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a282");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.75 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(282);
                        } else {
                            falseAnimation(282);
                        }
                    } else if(item.id === 283) {
                        const value = document.getElementById("g283");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 284) {
                        const value = document.getElementById("k282");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 285) {
                        const value = document.getElementById("n282");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 286) {
                        const value = document.getElementById("w282");
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

    function errorAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "#FFFF00";
    }

    function trueAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "red";
    }

</script>