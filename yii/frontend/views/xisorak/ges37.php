<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Ҳисорак ГЭС (ГЭС-37)';
$energy = new Energy();
$id = 77;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);

$urlTransformer1 = $energy->getTransformer($id, 120);
$urlTransformer2 = $energy->getTransformer($id, 121);
$urlTransformer3 = $energy->getTransformer($id, 122);
$urlTransformer4 = $energy->getTransformer($id, 123);
$urlTransformer5 = $energy->getTransformer($id, 124);

$urlSwitch1 = $energy->getSwitch($id, 324);
$urlSwitch2 = $energy->getSwitch($id, 325);
$urlSwitch3 = $energy->getSwitch($id, 326);
$urlSwitch4 = $energy->getSwitch($id, 327);
$urlSwitch5 = $energy->getSwitch($id, 328);
$urlSwitch6 = $energy->getSwitch($id, 329);
$urlSwitch7 = $energy->getSwitch($id, 330);
$urlSwitch8 = $energy->getSwitch($id, 331);
$urlSwitch9 = $energy->getSwitch($id, 332);
$urlSwitch10 = $energy->getSwitch($id,333);
$urlSwitch11 = $energy->getSwitch($id,334);
$urlSwitch12 = $energy->getSwitch($id,335);
$urlSwitch13 = $energy->getSwitch($id,336);
$urlSwitch14 = $energy->getSwitch($id,337);
$urlSwitch15 = $energy->getSwitch($id,338);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['xisorak/index']) ?>">"Ҳисорак ГЭС" Филиали</a></li>
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
                        <image
                                width="23"
                                height="75"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAABLCAMAAACsuOweAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFxUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABNZWugAAAB7dFJOUwABAgMEBQYHCAkKCwwNDg8QERITFBUWFxgZGhscHR4fICEjJCUmJygpKissLS4vMDEyMzQ1Njc4OTs8PT4/QEFCQ0RFRkdISUpLTE1OT1BRUlNVVldYWVpcXV9gYWJlZmdoaWprbG5vdXh6fH1/gIGDhoeKjI2Oj5CSlMaP2awAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAH7SURBVEhL7ZXZV9pQEMa5yU0gCRoKSWSRtTYBizSCVLsQcEFkKatBu1pptba4tLXWtn99byAsCT54PMfji99bfpPM3Jl78o3lpgK69EddAGA4hBDHjAGAQdJGMwxFwvEIwAmK5dxeN8dSBD7kACMYl1+MywtigGMIbBAAkHKF5UyhvKXIYY6COgcYyfrldfVDZ6+dXwywpP4BwG2cmFEPu6fdLzuKxFN6BQBp90Jhr3v++/z4YzHhYfREADJeufzp7PLfn+8H1aTPPuKeRHH/5OLv5Wmn9MQ7fB+neCn3+ujHr59f367FRvkx0hFcqu5/O+t+ri+HHdZBA6iwICnqwdHh7mpsBqUZcK2BZPFN5/2rdMhhHRsEpIRotvVuZyM+PKUmgFudD5/VdptjXfWEKodXKu1GRnTZjJwNLVfU2os55yQv33ONPy2ptZePJueWLm3XzfMEBBvsc87EpwNLRcSlq3irrkic4b40nupx4z3e877unEfNfMqf2mo1ruLJQquRHblATwBOzWo8FxMm+KLG5wXazOVNxB/P3B7PN1FdM7f7EuuNqjJxTsYTz1ZKz0VzX7QgrqzlUhHjf4Qs90Ewnk5FfdMDF+4JObqdD8xFZp1D1+4LOZndyfMOhhxPgzjA0cKgbWgrGLgWQAvGvF+Q9HVkxteTxfIfHIyEXu1TPjkAAAAASUVORK5CYII="
                                preserveAspectRatio="none"
                                id="img1"
                        ></image>
                        <clipPath id="clip2">
                            <path d="M0 0 23 0 23 75 0 75Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip3">
                            <path
                                    d="M271 424 271 443 289 443 289 424ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="36"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAlCAMAAAAdgrsPAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTElEQVQ4T+2UXXNDQBSGs1iWRKs+oiEoQkRJkJBI+v9/VxGztiad6lVv+lyeeWbnzOz7ntkvASP68UA7pEaMxEagGciOgAzdiL3SODTDIV6Yf0HgEQdpbAGaRQtJVrUlgabKkohYupcABdGTohumZRNYpqErzwhSdwvQ3EJZOa4fhFtMGPius1JErn8KMEjSHT+Kk3SPSZM42ji6hJhOAgDysuFGhywvjpgizw6RZ8g87FYHFCuoph9np7I6Y6rylMW+qQpst1QjzTUrSPLyUl8x9aXMk8DS5oRkh2lR1TeCuirS0Calpb3dH8/X2wfmdj0f91t7+S/9oTTp76ak4Js8vftrnKcumd6DZO6GZPYZ3+zGGd8RGW/bIjZt8cZt8d5W6tCWx71bG6/q0LuuweKDBr8QDW5vAfzxFky6Kg0T7tOddkjSj6cxm30C8cF9R6rH25cAAAAASUVORK5CYII="
                                preserveAspectRatio="none"
                                id="img4"
                        ></image>
                        <clipPath id="clip5">
                            <path d="M0 0 36 0 36 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip6">
                            <path
                                    d="M320 124 320 143 339 143 339 124ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img7"
                        ></image>
                        <clipPath id="clip8">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip9">
                            <path
                                    d="M321 229 321 247 340 247 340 229ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="36"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAkCAMAAAA5HAOUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaUPfet6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1x9awHxr028+S8+nOr8lpUug8SuGapLBN9HJ9l+h1J9F1O4SqHc5dO5yPmULa8aRpc/1dIU1rWis8au1bp7X1BUA/X4Bh16RiyGW6UA9vaOcDGY2+AbOofUdG6BsFAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img10"
                        ></image>
                        <clipPath id="clip11">
                            <path d="M0 0 37 0 37 36 0 36Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip12">
                            <path
                                    d="M805 125 805 144 824 144 824 125ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img13"
                        ></image>
                        <clipPath id="clip14">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip15">
                            <path
                                    d="M804 229 804 247 823 247 823 229ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="36"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAkCAMAAAA5HAOUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaUPfet6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1x9awHxr028+S8+nOr8lpUug8SuGapLBN9HJ9l+h1J9F1O4SqHc5dO5yPmULa8aRpc/1dIU1rWis8au1bp7X1BUA/X4Bh16RiyGW6UA9vaOcDGY2+AbOofUdG6BsFAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img16"
                        ></image>
                        <clipPath id="clip17">
                            <path d="M0 0 37 0 37 36 0 36Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <image
                                width="499"
                                height="17"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfMAAAARCAMAAAD+KrVEAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACrUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADQ1tEQAAAA5dFJOUwABAgMEBQYHCAkKCw0PEBESFBUWFxkbHB0fICEiJSYoLS4xMjU2Nzg5Oj0/Q0dJS01OT1BRU1ZYWaheIjAAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADNSURBVGhD7dhZEoIwEEVRQgKKEGdEBcVZHHHW/a9MLVE07qDzzmd+b6XSaQM0xoCyrHLueWgCZUr3R28uLBsoswT/is4Yt4quJ8tAl/RKBWF+ojNuu5Vm0A0joCrstOqy+InOmHCq7Xg0TRZAVDKfDHu+LPB3c9P2/Hi2TvdHIOqw267GUc0ReXMZDJbp+XK9AU3Xy2kz7zdckY1xuOf0/d1zvOfkqe855nYNKHM7/uc6UP7n2MPp4HcP94B9O3nKvv3leQhkZZVBR4ZxB1AAhwhy5lPaAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img18"
                        ></image>
                        <clipPath id="clip19">
                            <path
                                    d="M0 0 499 0 499 17 0 17Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="367"
                                height="17"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW8AAAARCAMAAAAlvd0jAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACrUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADQ1tEQAAAA5dFJOUwABAgMEBQYHCAkKCw0PEBESFBUWFxkbHB0fICEiJSYoLS4xMjU2Nzg5Oj0/Q0dJS01OT1BRU1ZYWaheIjAAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADLSURBVFhH7djHEoIwFIVhQkITYlfs2MGKFXz/J1NHbHHr1c35lln+k0luosGfMKCSFX66LupARWl+ac2FYQIVQ/CX4Ixxw3Y9mQca0stZQn8EZ9x0C1W/1e4AhXazXpb2Izhjwik2guEkmgGBKBwPujVp8Xtv3fRqwXQZb/dAYLdZL0adkiOevaXfn8fHJD3B96XJYRX2Kq7Irkzsb1of+xvnNyn1/MZ8QkyZTzB/U1Pmb7wvqb2/Ly/wf0JK+T+5uS4Ciaww/JqmnQFUsNahWEre0wAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img20"
                        ></image>
                        <clipPath id="clip21">
                            <path
                                    d="M0 0 367 0 367 17 0 17Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip22">
                            <path
                                    d="M154 124 154 143 173 143 173 124ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img23"
                        ></image>
                        <clipPath id="clip24">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip25">
                            <path
                                    d="M66 80 150 80 150 171 66 171Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip26">
                            <path
                                    d="M66 94 150 94 150 184 66 184Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP0AAP0AAP4AAP4AAP4AAP4AAP4AAP8AAMVaHOIAAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA6klEQVRIS+3XaxKDIAwE4OCjvkB6/9NWdJUEgr1Avl+W7EwtKzOVmOkrfbBe6DDOOkykAdNswESynOUSy1kusZzlEstZLrGc+kfMbZhmwWF2WDxEDLmImV8JK//QjIt3K5HH5Zv9uNFOu7HCuUEjPrTN5y+mekOkcMXIvX9z7JFTmuAmpA4LljQemcTtWKxF1h1Rj9XaiAS0atkwfwQMpFSEpNeiPKnl20KCIqT6gbiLkKrNifp7RVULK0KStVRbkvHNkUVIvJaiCClvzoKVhntz6iKku5bn2Wy5TotahJROi16E5AI7EUD0A7L3auODNhWvAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img27"
                        ></image>
                        <clipPath id="clip28">
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
                                id="img29"
                        ></image>
                        <clipPath id="clip30">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip31">
                            <path
                                    d="M1011 81 1095 81 1095 172 1011 172Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip32">
                            <path
                                    d="M1011 95 1095 95 1095 185 1011 185Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip33">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip34">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip35">
                            <path
                                    d="M983 124 983 143 1002 143 1002 124ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img36"
                        ></image>
                        <clipPath id="clip37">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip38">
                            <path
                                    d="M394 424 394 442 412 442 412 424ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="36"
                                height="36"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABS0lEQVQ4T+2UXXNDQBSGs1iWRKs+oiEoQkRJkJBI+v9/VxGztiad6kXv+lyeeWbnzOz7ntkvASP68UA7pEaMxEagGciOgAzdiL3SODTDIV6Yf0HgEQdpbAGaRQtJVrUlgabKkohYupcABdGTohumZRNYpqErzwhSdwvQ3EJZOa4fhFtMGPius1JErn8KMEjSHT+Kk3SPSZM42ji6hJhOAgDysuFGhywvjpgizw6RZ8g87FYHFCuoph9np7I6Y6rylMW+qQpst1QjzTUrSPLyUl8x9aXMk8DS5oRkh2lR1TeCuirS0Calpb3dH8/X2wfmdj0f91t7+S/9jTTpW6Z88DdReffXOCpd6LwHodsNoevju9mN47sj4tsWQWyK4I2L4L2t1KEIjyu1Nl7VoVJdOcUH5XwhytnWHP5Y80kHo2HC6bnTDkn68TRms08R8Hf3EAQVBAAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img39"
                        ></image>
                        <clipPath id="clip40">
                            <path d="M0 0 36 0 36 36 0 36Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip41">
                            <path
                                    d="M852 424 852 443 871 443 871 424ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img42"
                        ></image>
                        <clipPath id="clip43">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip44">
                            <path
                                    d="M530 424 530 443 548 443 548 424ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="36"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAlCAMAAAAdgrsPAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTElEQVQ4T+2UXXNDQBSGs1iWRKs+oiEoQkRJkJBI+v9/VxGztiad6lVv+lyeeWbnzOz7ntkvASP68UA7pEaMxEagGciOgAzdiL3SODTDIV6Yf0HgEQdpbAGaRQtJVrUlgabKkohYupcABdGTohumZRNYpqErzwhSdwvQ3EJZOa4fhFtMGPius1JErn8KMEjSHT+Kk3SPSZM42ji6hJhOAgDysuFGhywvjpgizw6RZ8g87FYHFCuoph9np7I6Y6rylMW+qQpst1QjzTUrSPLyUl8x9aXMk8DS5oRkh2lR1TeCuirS0Calpb3dH8/X2wfmdj0f91t7+S/9oTTp76ak4Js8vftrnKcumd6DZO6GZPYZ3+zGGd8RGW/bIjZt8cZt8d5W6tCWx71bG6/q0LuuweKDBr8QDW5vAfzxFky6Kg0T7tOddkjSj6cxm30C8cF9R6rH25cAAAAASUVORK5CYII="
                                preserveAspectRatio="none"
                                id="img45"
                        ></image>
                        <clipPath id="clip46">
                            <path d="M0 0 36 0 36 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip47">
                            <path
                                    d="M971 424 971 442 989 442 989 424ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="36"
                                height="36"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABS0lEQVQ4T+2UXXNDQBSGs1iWRKs+oiEoQkRJkJBI+v9/VxGztiad6kXv+lyeeWbnzOz7ntkvASP68UA7pEaMxEagGciOgAzdiL3SODTDIV6Yf0HgEQdpbAGaRQtJVrUlgabKkohYupcABdGTohumZRNYpqErzwhSdwvQ3EJZOa4fhFtMGPius1JErn8KMEjSHT+Kk3SPSZM42ji6hJhOAgDysuFGhywvjpgizw6RZ8g87FYHFCuoph9np7I6Y6rylMW+qQpst1QjzTUrSPLyUl8x9aXMk8DS5oRkh2lR1TeCuirS0Calpb3dH8/X2wfmdj0f91t7+S/9jTTpW6Z88DdReffXOCpd6LwHodsNoevju9mN47sj4tsWQWyK4I2L4L2t1KEIjyu1Nl7VoVJdOcUH5XwhytnWHP5Y80kHo2HC6bnTDkn68TRms08R8Hf3EAQVBAAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img48"
                        ></image>
                        <clipPath id="clip49">
                            <path d="M0 0 36 0 36 36 0 36Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip50">
                            <path
                                    d="M571 361 571 380 590 380 590 361ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img51"
                        ></image>
                        <clipPath id="clip52">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <image
                                width="23"
                                height="74"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAABKCAMAAABn5D+7AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFQUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACQ9i7QAAABwdFJOUwABAgMEBQYHCAkKCwwODxAREhMUFRYXGBkaHB4fICEiIyUmJygqKywtLi8wMTIzNDY3ODk6Oz5AQUJDREVHSUtMTU5PUFFSVFdYWVpbXF1eYWJkZWdoaWprbW5vdXZ4e3x+gIGCg4aIiYqNjo+Qk5SuzbogAAAACXBIWXMAAA7DAAAOwwHHb6hkAAABoklEQVQ4T+2V2VeCQBjFHWZkVTGxNAgtk7I0rRTLMkPTTG2zzbTFbN/7/9+CAkXzodNb53jf+N3vuwM83LH8VUCX/qgLAAwihCDWbQAM4STN0BSOMJMBMCtl5zxeD+egrLBtqJge4gOhcGhS4BhrewMgakicTWaUzFLEx1FI5wDDHfxsunRwclhZmxNYXE8CkOQCyVK9eX11tp0KuimDI9oTyhw0H1+eWsdKeJTRgwBivOFs7eb14+2uno/yNhOfWT9qPb+/3tRykc48pNzB1N7F/fPD5X5aGm7nYzg7Np8/ad5enW4u+ljC+DI1aDi4VGmcN3ZS0ogaY3CIO4SYUq1Vc7Gxzri2QI9IK+VqeXVKG9eptkC6JpLF3WIy4CI74+rJhHNcLlQK8riTMP1o7Y38iXy5IPtZvA/PJwZ8wAfc0D/jpX7cF9/Y2oj7fnBxQSkqC2IvtwvRdDYdFexdHCCbV5KXZcmrlmGHa9XnEqcj06LLKL1vqUE2Ny/ybps5RguCBMM6WUYtNzPXDCtBEmr5d2HNwCDsvUa+1OfW+bUslk9+JXTAi+cX/AAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img53"
                        ></image>
                        <clipPath id="clip54">
                            <path d="M0 0 23 0 23 74 0 74Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip55">
                            <path
                                    d="M706 422 706 441 724 441 724 422ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="36"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAlCAMAAAAdgrsPAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTElEQVQ4T+2UXXNDQBSGs1iWRKs+oiEoQkRJkJBI+v9/VxGztiad6lVv+lyeeWbnzOz7ntkvASP68UA7pEaMxEagGciOgAzdiL3SODTDIV6Yf0HgEQdpbAGaRQtJVrUlgabKkohYupcABdGTohumZRNYpqErzwhSdwvQ3EJZOa4fhFtMGPius1JErn8KMEjSHT+Kk3SPSZM42ji6hJhOAgDysuFGhywvjpgizw6RZ8g87FYHFCuoph9np7I6Y6rylMW+qQpst1QjzTUrSPLyUl8x9aXMk8DS5oRkh2lR1TeCuirS0Calpb3dH8/X2wfmdj0f91t7+S/9oTTp76ak4Js8vftrnKcumd6DZO6GZPYZ3+zGGd8RGW/bIjZt8cZt8d5W6tCWx71bG6/q0LuuweKDBr8QDW5vAfzxFky6Kg0T7tOddkjSj6cxm30C8cF9R6rH25cAAAAASUVORK5CYII="
                                preserveAspectRatio="none"
                                id="img56"
                        ></image>
                        <clipPath id="clip57">
                            <path d="M0 0 36 0 36 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip58">
                            <path
                                    d="M706 360 706 379 725 379 725 360ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="37"
                                height="37"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAMAAADyQNAxAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAC3UExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFrln0MAAAA9dFJOUwABAgMEBQYICw0PEBESFBUYGR4gISMkLC0zNjs8P0BERVFSWlteYGFrbHV2enx9fomOkJGUmZqbnZ6foKFo7O49AAAACXBIWXMAAA7DAAAOwwHHb6hkAAABTUlEQVQ4T+2U226CQBRFHYaBAaWlXKSCQAVBpKCAgqL9/+8qIHEQNaVvfeh6PFmZnGT2PqPfAvq0c0I9pPr0zMqANGL6IBpWZutUEqRZzPHjW3gOswheNQAZPBElRZ12URVJFDADWwtQCL/Imm6YVhfT0DX5FSPqogHITuSZvXA9f0XwPXdhz2SBbR8DNBY12w3CKN4Q4igMlrYmYrqxAECcpC+CbZJmO0KWJtvA0SUONfsDiuEVww2TfV4cCEW+T0LXUHimWayyxqrpRWl+LE+E8pinkWeq445l+XFWlOcuZZHFvtW1ptZqszuczl+E8+mw26ys6b/1J6xh/zgoE8/y9enOr/lqsuo8yuqaZLXN/XJ9l/t1J/d1h4SqQ85dh5yPmUI69KSPc/1dIX1sui086vZbp9v1nUA/34lhN6diyP26UA9vaOcDGY2+ATuVgtOg1VX6AAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img59"
                        ></image>
                        <clipPath id="clip60">
                            <path d="M0 0 37 0 37 37 0 37Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip61">
                            <path
                                    d="M431 79 500 79 500 170 431 170Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip62">
                            <path
                                    d="M431 183 500 183 500 274 431 274Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7V0JVFRXmk73TE93umemz/TMnD7T0zM9p8+ZnnO6J53uGJdEE2NiUKPEqEjUGMUlxiUmre0SEzfcAQUX9oKCojb2fXFDkE0odhVwQaEKF9yFAjSZ6Df/f+sVFsVDUMCF1M/5znvvvvduvffux7/c+9/3XniS4uzs/O6qFSsUb7755ku8vWTRop2RGv1FvVZ3yR5r1qypBvADcaJDHPI4snnzZlVDQwOGDBkysaSk5EdbtmwJb21pgT1aCDqdrslBOIf0SpRKZT0T7rVhw3bpdToQ4QS55OAgnEN6JdOmTftVRkbG/QtEuKGvDva+ceMG4mJjZcnGIMLdkk51yEAUw/mm/ykytnoWN5hHsbkThaRhTKb7L55oaHm5tL51SqWx7Y3jxtZXj58z//J4owWl52/+pqShaVhxfdP4sot33q24fP9n4lwS1lAl527+vMzUPHL+gqVLGxsvQxBu8GDv69evI1YQrrUT2RhardZBuIEoJaaWFcX15gtFxpb7JQ1tKCaUGFu+KzGaBYrrW+6VmNpgaLhj2UdL3haQtosF7goYjC33DKa2SwZTa02JqbXJUN9yv9h0F74h2vvmFnMHwsXFxcmSjeHQcANUSkx3VBbC9B+YlGFqPRGJCXcBg3tAOIeGG6BCWogIx9pJnix9gfwz1xEZbTGfFy9exCuvvJIufLjvuYZbtmzZi06jR6+m1e9PcNTfhGPTq0nLw6lTNUQki7928OBBODTcCy9Mnjz5N5s3uiMqKupFqWjgy5PQcB6+4YiNjiTECOzYvr1bwiUkJFySLnHAyqhRowaplGFYtWrVr6WigS/9T7g2bPTYh/jEZEIK4pOS4em1SxBOq9YgLTUVTU1NnQhXUVFRn5qaOiglJeXlpKSkP1qRlpb2Epfv3r178PTp0/9Fuo3nUkaMGDE6J/soXCdNelkqGvjSv4TjqJfMan0LiuvMFtSboU45ilClCmu+Xg+tLgrh4eE4dOgQzGZzO+Fu376Nq1ev4sqVKx3AZQyj0YixY8culm7juZRFny2aWVdXByLeSKlo4MuTMKlyKGlopWUb0g1n4ROoQhSZ2vCwcOTk5HTQdF2ByTlhwoRl0m08l+Ls7LyItfugQYM+kIoGvjwdwkmaz7o0tSI+qxy+QeFISExAGPk1xcXFskSzxaRJk1ZIt/Fcipub29pvv/kWI0eO/EQqGvjytDScHJiAmtQcBIREICUphYinxInjx2XJxphLDSbdxnMpK5at8L537x6mfzj9S6lo4MuzRDgB012UGFuhiMqAUqVFWkqa8PFOnTrViXAL5s3zk27juZStm7eG3b9/H59/9pmXVDTw5ZkjnA0Kz5vhq4qHVh8notkIVQTOnz9PZGuFubUFXp6e8Nrhlfee03tjpdt5qsJRs4uLy7/3FES4/RwArV6xUs/bGzZs+FupqoEr/U04MfZqV9YT2J6Xd+Y69ih0iE1IQnJyMtTqCDFiEanTify5qpMnsWvXrsIxY8aMf5opTZs2bTp95MgRZGVl9Qx87BHLMjo6GsOHD39LqmrgSn8RTgQEJl63DPJ3PuZBmfz+zjhy8gJ8glRIzziIxPg4bN+2rUNXSk1NDby9vUvGjRv3AWmLH0q3+MQkUqM9rYqgiDsykhDVLYKDg+FJWnrfvn1i9MVBuMeE0E6mNmzx2ocwTRSUmhiEaGIRrI6HvyoGe8MY8ThUYZRI2TOUSMfuLz4Lb98QlJaUIjgoGFevXG0nHePMmTPY7eNT8f748S5PknhMuJiYGFKyFmH/7GFy4cIFFBYW4vSp08hIS8dIB+EeH0dPXsbadevJ7OkRqdcjSh+JaPqvjouJRXxcHGKpYQKCFdit0CL7xAU6xzbVqTuQRjS2YV9YLPLyChAeqsSpms5BRW1tLWuPE++///40Mll/I91yv0mkVnuah+6YaKWlpXTfluG8GBlwuVajET7p6dNEuHQH4XqF8MRs1NfVdyIBw8xoNiMjNQ1qVTiUYWrsDdEjp+aKbF3y4Jy8O9CkHEVCUhpSkpLBw0Ryv8eNunfv3mpnZ+eZ/emYWwl38+ZNJCYmdtBwvC4HFoeG6wPsDdGhxca/6go8hBVDDjNrwgi1DnuVUcg7fU2YZFs/rysY6NrTj9UgKDQCBfkFiI6J7uDX2YKHw3x9fc9MnDjRbcGCBZas5j4UK+HYH7t165YgU0/EoeF6CyKLIowIJ9Po9rDO0rp25QpFn2oyt/HQaKPgGx6DgrM35eu3h+kuck9dwa59IaisrISCnHFODrD/LSsaTCYEBQSec3VxmT916tS/kx5Fr8VKuAMHDqC5uVmiU/fi0HC9RV2zII1cY3cH1kJhYWE4kJ4BlUYPf3Uijp2/LVLcu4tmDcYW+ARrUELBREiIQvhwcr9hxUVy2oMDg+qnTpmycOnSpT+WHsljy2MTzqHheoeEnOM4dqyQGlV+gkxPUFVVRcRT4ujRowiPIOJpklFIRJb7vQew+HWKmP04cChT5Nvl5+fL1m+Ly5cuQaFQmFxcXD6bPXv2T6RH88jyuIQ7Q4Q7mLEf7771js+4MeMWTuhjcJ2M0W+/vfCjjz76R+lyn470JeGsUaZfRCJukw8j17iPiiIiroo0XnFxCRThGgRHpsNQb5Z+s+vINuFIOcJJQ+bn5iI+Ib5Lv84WjY2NUIaGXpoxY8YyIt8jZ+H2RsOVlpSgqLAIhqK+R5F13WDAtGnT/iBd7tORvtZw7MT7h/KEGflGfRwwWQ6RI84jDJUnjiNIqYEy5iCKyYTKXYMA+XVZlQ3Y7ReKEydOIDQ0VDjycvXb4yr5k+Hh4Y0zZ8xYsXjx4r+XHlW3YiVcQUGBiIytUWh3ckby4ZLiE0Rkb+wHxMbE4kjmkYFFONHhS1onhDSRXEP2Fpw7lpCQgMioKNTUnEKAQoWE7Arp9+X9u6JzTdjpF0akOwlFUDCM9fJdNXK4dvUq1BERV2fOmLlm7ty5/yA9si7FSjjOAImia2RNx1rTnnjl5eU4eOAgzp45I/ZZfbjCY8ekI/peOM+Qh90GnIbLrmpEcmq6bAP2Fa5fvwGdToukpGQcOHiY/LsE0mic0Cl/TRw1B6oTkJtXIIaUiosMsvV2BY54iXg3Zs2atZai2p9Lj66TWAnHwkTi/jgOgC6Rj2iVb7/9lmekocXcAr1Oj2+++aY9Si0scBDukREam9llh29fg4eGyNlHXl4evMh05lY30jXI3wsHE/r0fETHJSE7OxspKSmydT4MN4joer3+1ly3uRvIz/sn6RG2iy3hrMLuQHJSEjNQIJ/MrclkpD33kUMBEZt5q4Y75tBwjw5fZRRa6b9XrsH6BdSgiQmJZL72QxmhQ8yhYrqOrrpP7mK/oRb+weFkYo+Tn6YSHc+y9XYB7je8RZqLNOWtefPmbf34g4//WXqUnQh3jwimVe2F+9cLEKvbI7B53QKoQ71x524bcq2Ec2i4x0dwOHf4dh8R9jXYL+JMjcwj2dirioXBaCatxvfVOZItOHMdXr4K0dBBQUFCU8rV2R2YLDExMeZPP/lkB0W1/6q1IxybVY2fK5prP0NL7acw1y5EU+0SpKqnURR/kzRctkPD9QZFdU0USUZSYzx+/1tvcPXqNQSTiS0qLBTZJNnHOSlA7lpJAxpbsZei6dLScjGIzoSVq7M7sMZrunWbkxJaQxSKOx013D3MnDISG//6Gtpq56H13Dz4b3sbLhMGodnc7NBwvQFHp4k5J2AwdD/5pV9B5pwHzrkbJUIfA216gTQu2/maDXTNqvjDIr/u8KFD2J+xX77OHoCJx68f66Dh6E/r50IabiFpOCIcwUyaLlU9lUw5abgchw/XC9zF3vA4YSrkGuRJo6KiAhHko+Xl5WNPSCQM9Z1HKdjU8pBZUk4lQskVqKysEJOzm5o7T8zuDoJwMZ0Jp/P7QGi3OxJ4PUPzAZrId2wn3PdPw3VsiMeFX6hWtjGeFq5fuw4ycygrLcVuvxAcKqsX1yk3Jptb1YidvkFi/DU4MAiXL1+WrbMryBHuHkHvN7GdbFbCpWkmopkJ9whRallZGfuLHCWLcx5VnkHC2Ws53paBcMTtj+NuhzaEUZQo1xhPG0lJSWRiDyAyJgERSdl21y8R0EQ+aL0Z3gEqVFVVQ6VS4eTJk7L1yUFewwE6f3vCzReEa7p96wHhutFwXP8md3cy+RkICgwUnd89HcWwyjNDuHXbd8d5+qrOefiHn/fyU9ftDNDWe/lrjF4B2gbPIO0FrwDdpZ0K/SVvhf6KjyLyinew/rp3cOR1b0XUzV3Bkbd2KaKbGDv91c2rV3/ZrNNozZF6fXOkTm+OiYwxk1/TkhCf0EYP6Q75VneTk5O/TUlJ+b+0tLTvCPfS6T87gx4k98pzHtnhw4fFg+G+Mh645wfF/Ww8XMQagFOyiw0GkVFbTv/1JqNRNLY9AezBaUs83bCIzvUO1ogRCMs/ih35aDtYl4Kso7lIJxJkZmbK1mcPWcIRKQI9nXG+yI0wC+cIvK4JeJ8Ix1Fq9xruu+++E/d/YP9+1J6tFQgMCMDNGzceiXTPDOH6SuiefmAPnk/Aqd2cZRsUFPQjBq3/3Z49e35My5/wAPmECRN+yhg0aNBP33333Z9xNsOyZct+sWbNml+uXLnyV59//vl/Llq06Lfz58//He37PZ3z0qTx418eO3bsn8c7OQ1ymTx5EWkHam95ItiCRwxCghWoJP9uX4AS+w1n27tOLISzaDouiz5YBF1UbHuqOA/Gy9VpRTvhbOY0cJSam52Jre5rkXU4XWDH1g04fCBdjDjkEglu3bTRcDKE4y6bwIBAkc3MBGUcpX9Gf1+/7zfhnqaMGjXqD7t37z7JLzmUI4MtRM9/coqIYjk1PTTuoHAHOk/maSOfrw57A0Jx7tw5BPFknWsdJ+vYg6PU6Kho3GlrI9xBg6kBWzZtFsELaX7otFpEkKlmshTk5yOTtDn7iicqj4M1PfubnE7F2twKnhbZXp5fIJYMTw+PDsday/kYObApfiYG7weKLFiw4KekDUM5M0SODPbg48LDwlBRVgFvfxWOtWcX2wYUbSiovUXBhJKCifNQKpXC/MnVx/DeuRM+3t74Yunn+OKzz/EXsVxq2V7KS5t1Kp/+4TQs/nQh1n71tcj/06jVwndkrcbzbgUuXMQlQmJ8Ak5V10CjisAFIjKXtR9D4HOWL1+OQH9/QgCCbMDbX65chSwH4fpeyOR+RFqhuSf5b8LEhoSI95f4BauQkl9tQ7YHoMAKfuExKCouQWJSIpk1+Tc8cTYLD5X1FBwENJAPGhkZCf5+xTHSVLt9fLBpw0a4b9gA94203OiOjbRcv3YdNlLZurVraR/vdxf7LMdsxOpVq4TP25U4TGo/yjvvvPM7Ly+v8mvXrskSowPMLUhNSaGA5QD27z+A4MhUi4ntRLy7UCdnkYnLEAmN/Mr/npD6YWCzfom0E8+6txJu7aYVmPGJM2YseA/TCR8xFr6HRV9NwUyxnIzZi9/DJ6umUPkEOm4cHTMBH7qNQWJyvESvzuIgXD8Lp4ovWbLEv7y8/L5cY9vDamJPVlVjl1848k9fl4hmE1DQMq2gBoEhEThXew6KEAV64jd2BY7KmXA8a81KOPd9SzBn++tw8xiC2TuGEYZi7u5h2JHzPub5DIHnUWcs8H8d29ImYb7PG5jjMRTzPN+C25bh0MYpJXp1FgfhnpC4TJo0NT4u7jZrMrlGtwV3FIeSia2qOokgpRqJ7cmdVlhIl1d9lfy6EJiMDSI9irN75errDqzhLpMvFmslHEWp7r6LMZcIN8djMOYQ4ebsGIJ5RDhPQbjBgnCf+r2Ore2EG4L5niPhtnU4dLEOwj0TQib2t9u2bSu+0tgo2/D2SE1NxcEDB3A4M1vMGuNZ/pw6b806Ect6M/YEqXHiZJXoCmGyyNX1MPBrZlm7sQ/G7yPxo+j1i03TiXDDBZGYcG6k4SyEc8ZcJhwtF/qNwBZBuBGkCUkDOgj37An3/y1csMC7uLi4RyaWRxk4W/f0mVPwpig1p/qyjaaTiGe6g5DodBw6nIW83FwkJSQJn1CuPjk0U5DReOmy6CrhCJS7Sdbu+VSYVCacm5VwPkPhJQg3BF5HJwgNt5kIN89nuES4tzB7y+tEuFCJXp3FQbinJBMnTnTW6/XXe+Lws3/Gk29qqqqgjNAjWja58y7ij5RCpY0ScxTCQpVi9ECuvq5gGzSs8VwA15VD4bpqEKasfgWuq4fgo/WDsVrjhGnug7BKNwbTNg3CCgUFFV8PhQsdM33165i6fDC00WESvTqLg3BPUZycnP7D3d09l+cayBHAHjzExUNL/OIcv7AYYU4tY8oPyHeksgE+/goxuZqTOk0mk2xdcrAl3Pm6WlRUlAuUV5aKrJe09FTM3jYUf40YhWWatzF7zbsoryiTjqtAJR9L2zyHoitxEO4pCw+3zZ8/fzv5XvfkSGAPHtDnjt+683UiufPI8QvCpNqSznC+CV5+ShHB6nR6MddUri57cGcv+4yaCDUqyok8BOuSkZqWglnuQ/GX0DexnOC20gnlZURGm2PKy4mAtOwKHIFzQOQg3FOWsWPHOqnV6sbuxkoZ7Sa2uhpafTR06fmdUp2YhP7qBOQfKxIahYes5OqyBY8S8EhDNaGGiG2LI4cOY93XX+OrjcvhNOclTJg1DDu9t8F9/UYcy89HDQUtHc/hbXtQOR2XlJDoINyzIGPGjPm3DevXH+FPa8oRwh7WDBdDcSl8QiJRVNcsEjktpLPModCnFyA2LgnV1VVQqyLEyIJcXd1h3969WPrFp3Bd8We4bRuGOWRaJy98Dbt2eSKEyC93Tlfgmf0Owj0jQib2h25ubhvy8vK+k2sse7DWUFKAcIF8NR+/EBwuq7PRdKz17iLDcBb+QTwv9aLw6/gdIvX19T0CT9hmf5AnVG8PXAGP3PHwzHsPHnnjsCNzIvRxKui0NvmHFARlZR1FSLiWApxIqDWRuGSXRMqEc3V1/V/plh3yLMj48ePfCg8Pv9jc1L2JZSddqQwT7xaOikuEKilLaLcHOXZt4tOdO/eF4ELDRZG1kZebJyG3S3DaUlJiElJTkrFl82Ys3zILnvljiXDj4MWkOzIB7tu+xuZNm8hsZ6GyvAIBwWFIzqsSv804dv4WduwLJXP9QGs7CPeMCk/5++qrrzJY09gSrCuwed2fniaSPHcFaVB0/rYgnLWj2GBqgb8qHgHKaEIUAm0QEEYQ65ESorBzTxB/gwJbtrtj+/ZNcP3kHXwWNKIdi/2GY9YcV2ylffxi7ekffYyUYzXtv2clu6HOjDDVg7R/B+GeYWETO2vmzNVZWVnf2pKrK9RU1wgTe/niJewJCEVG0Zn2hmciPPDxLBCasAOs82fvQnegCHv27saMVcOxOswJH61/DYv3jMQnnsMxbd0QrFA6YSr5dF/rxsFp2iAEK1Xg11nY1i8IR3UFinkmlmmbDsI9B+Lk5PS6QqEwyn1i0x48I587fqspik1KSYMyVkru7ECEh4PNYeT+QiiUAVgZPh5zdg7FF6FvY2ngcCzYMxwrtaMxa9urWBM3Fi4b/owlW8dAExktQziu6y5CbN5E6iDccyJkYn+xatWqJM78tSVYV+A8N45kq2tOY5d/GApOX4OB3+LZDdgUFxK0aXkIDQmG88I/wW3T6/jwy0GYuupVuG19De8v+hMW7n4T4+b+AUt938ZI5z9Co48hs00akv03JhqBNWrOyUsUKSe0X5eDcM+RAPjBxx9//JfMzMy7tuTqCvxtMO6zu9J4BcnJaUhOsiCJQdsd0F6eKhAaEgY/P1/s9NiBtRs3YYvHLmz18MZmwrYdPrTtTds7abkTHl4+VL4XpcY2lFpJR8tjZ29g++5A8VYA6zU5CPccyjvvvDM4ICDgXE/61djE8nyG6KgoMXzFiOoC1v0xUbSk47k7hD96ok7NEQRiMpWSibQQyrJUp5ImVOkRoYlBGCFcG02IgUoXI7TeNbs5GA7CPafC74hbsWJFFH/xxrZB+xrnamsRQebVOvfXHn6aZDFdUO5cOfA7Vxwdv8+xUOMtzMjIuCPXuH2Bc7VnhRaTIxuDX7R980bPXq3B0xgLCw1IOFp5odjYWldiaj1Pfl9KqenO1rL6lvUlJkbrluL6lmyKmJPoGM8SU/OGMmPzomJj02zat6SkvmVDibE1xGBsO1ZS16zi7fIG88xSU/ObJcbmNyouNo+ovNj2RqnR/KHB1Lqdjs0qNpqXl15q+w27JNJjc0hvZNSoUS/v27fvFHcCyzV0b1BLhNM8hHARKTkiIu54HneByOMYES45v0rqfuHggrti5KJoqYwzYsh02+9nc96+Lratpp7LeP2u6JJpP5eWRabWbw0NLTulx+aQ3gi/eHr58uWxPKjfsfF7ByYcazgrQWwhIlFTK3b5KXE4MwuXLzeK5IKb1693idycXKQQ4ez7BPsHHd0ACzFbI6RH5pC+EFcX1zkpKSnEFXkCPSoaL19GoD5d0hxysGiiA4az4jj+mPE+VUKX2BMej7zTPfy6T5/CkjvoIFw/yNi33/79nl3eJx726aWeotVshndghGgs+YZkWPfZLh8G23OfFByE61dZ5uLy4tKlS0OOV1b2aP5E12hFamo60gpPCb9IvjGfBzgI90Rk6pQp0xPiE5p68lXFhyFEqRafk5Lz5fofclqyK3R1nmXbQbgnIKNHj/5vDw+PsqtXH/4inO5w6FCmmJYYFn+YNN5ppBedIZxFRh+A60knP5DrTSmoeYB8m3Xrtn2ZLaz77Y5LlbbjMksTpMfikP4U/lIhRbK+ZWVlj21i+aPG/DkCY70R2dk5ItnySB8iKyubltmYPHmqZtiIt4YPG/Fun2Pk6LHDpEfikCchH3zwweTY2NibvX0nSX9iyZIl26XLdchAkDFjxvzXtm3bivgbXHIN3nfoKak7HvfZ4sU7pEt1yEAR/vw5vwXAUGToZRTb9yDT7yDcQBVnZ+cJkT18C8CTgoNwA1xGjhz5643r1iUogoPzrQgJVtCSEZwfLEGheFDWPRRSHQ/KrHXYl1tAZVw/wdXV9VO+rvT09B8zxEX2mbzwwv8Dqz2REX1DUHMAAAAASUVORK5CYII="
                                preserveAspectRatio="none"
                                id="img63"
                        ></image>
                        <clipPath id="clip64">
                            <path
                                    d="M0 0 125 0 125 60.8974 0 60.8974Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip65">
                            <path
                                    d="M1080-13 1175-13 1175 78 1080 78Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip66">
                            <path
                                    d="M1182 54 1271 54 1271 145 1182 145Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip67">
                            <path
                                    d="M1186 14 1261 14 1261 105 1186 105Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip68">
                            <path
                                    d="M1001 351 1070 351 1070 441 1001 441Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="128"
                                height="128"
                                xlink:href="data:image/png;base64,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"
                                preserveAspectRatio="none"
                                id="img69"
                        ></image>
                        <clipPath id="clip70">
                            <path
                                    d="M1095 465 1187 465 1187 557 1095 557Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip71">
                            <path
                                    d="M238 445 322 445 322 529 238 529Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip72">
                            <path
                                    d="M238 445 322 445 322 529 238 529Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip73">
                            <path
                                    d="M238 445 322 445 322 529 238 529Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip74">
                            <path
                                    d="M233 483 327 483 327 574 233 574Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip75">
                            <path
                                    d="M233 496 327 496 327 586 233 586Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip76">
                            <path
                                    d="M233 509 327 509 327 599 233 599Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip77">
                            <path
                                    d="M233 521 327 521 327 612 233 612Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip78">
                            <path
                                    d="M233 534 327 534 327 625 233 625Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip79">
                            <path
                                    d="M233 547 327 547 327 638 233 638Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip80">
                            <path
                                    d="M673 443 757 443 757 527 673 527Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip81">
                            <path
                                    d="M673 443 757 443 757 527 673 527Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip82">
                            <path
                                    d="M673 443 757 443 757 527 673 527Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip83">
                            <path
                                    d="M669 481 762 481 762 571 669 571Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip84">
                            <path
                                    d="M669 493 762 493 762 584 669 584Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip85">
                            <path
                                    d="M669 506 762 506 762 597 669 597Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip86">
                            <path
                                    d="M669 519 762 519 762 610 669 610Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip87">
                            <path
                                    d="M669 532 762 532 762 622 669 622Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip88">
                            <path
                                    d="M669 545 762 545 762 635 669 635Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip89">
                            <path
                                    d="M0 0 8 0 8 18.6667 0 18.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip90">
                            <path
                                    d="M0 0 8.57143 0 8.57143 20 0 20Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip91">
                            <path
                                    d="M135 374 204 374 204 464 135 464Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip92">
                            <path
                                    d="M360 524 445 524 445 615 360 615Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip93">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip94">
                            <path
                                    d="M499 524 584 524 584 615 499 615Z"
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
                                    d="M824 525 909 525 909 616 824 616Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip97">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip98">
                            <path
                                    d="M1140 251 1224 251 1224 341 1140 341Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip99">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
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
                                d="M405 406.487 405.466 460.867 402.466 460.893 402 406.513ZM399 406.539C398.979 404.053 400.976 402.022 403.462 402 405.947 401.979 407.979 403.976 408 406.462 408.021 408.947 406.024 410.979 403.539 411 401.053 411.021 399.022 409.024 399 406.539Z"
                                fill="#6600CC"
                        />
                        <g clip-path="url(#clip2)" transform="translate(269 397)">
                            <use width="100%" height="100%" xlink:href="#img1"></use>
                        </g>
                        <path d="M280.846 463.078 280.5 406.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                                d="M279.346 463.088 279 406.509 282 406.491 282.346 463.069ZM276 406.528C275.985 404.042 277.987 402.015 280.473 402 282.958 401.985 284.985 403.987 285 406.473 285.015 408.958 283.013 410.985 280.528 411 278.042 411.015 276.015 409.013 276 406.528Z"
                                fill="#6600CC"
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
                                transform="translate(602.407 23)"
                        >
                            Ҳисорак ГЭС
                            <tspan font-weight="400" font-size="11" x="365.454" y="58">Л-ГЭС-2</tspan>
                            <tspan font-weight="400" font-size="11" x="-464.06" y="377">1-СШ 10 кВ</tspan>
                            <tspan font-weight="400" font-size="11" x="405.88" y="398">2-СШ 10 кВ</tspan>
                        </text>
                        <path
                                d="M1.5-1.58947e-06 1.5001 93.0775-1.4999 93.0775-1.5 1.58947e-06ZM9.8629e-05 93.0775 4.5001 90.0775 0.000104987 99.0775-4.4999 90.0775Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 163.5 183.578)"
                        />
                        <g clip-path="url(#clip3)">
                            <g clip-path="url(#clip5)" transform="translate(262 417)">
                                <use width="100%" height="100%" xlink:href="#img4"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch9 ?>">
                            <rect id="c10"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 271 443)"
                            />
                        </a>
                        <path
                                d="M232.5 134.5 918.646 135.812"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M232.5 132.5 232.5 239.839"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M231.5 238.5 918.2 238.5"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M916.5 135.5 917.005 238.518"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip6)">
                            <g clip-path="url(#clip8)" transform="translate(311 117)">
                                <use width="100%" height="100%" xlink:href="#img7"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch1 ?>">
                            <rect id="c11111"
                                    x="320"
                                    y="124"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                            />
                        </a>
                        <g clip-path="url(#clip9)">
                            <g clip-path="url(#clip11)" transform="translate(312 222)">
                                <use width="100%" height="100%" xlink:href="#img10"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch3 ?>">
                            <rect id="c1112"
                                    x="321"
                                    y="229"
                                    width="19"
                                    height="18"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                            />
                        </a>
                        <g clip-path="url(#clip12)">
                            <g clip-path="url(#clip14)" transform="translate(796 118)">
                                <use width="100%" height="100%" xlink:href="#img13"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch2 ?>">
                            <rect id="c3333"
                                    x="805"
                                    y="125"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                            />
                        </a>
                        <g clip-path="url(#clip15)">
                            <g clip-path="url(#clip17)" transform="translate(795 222)">
                                <use width="100%" height="100%" xlink:href="#img16"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch4 ?>">
                            <rect id="c4444"
                                    x="804"
                                    y="229"
                                    width="19"
                                    height="18"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                            />
                        </a>
                        <path
                                d="M162.5 182 232.271 182 232.271 185 162.5 185ZM232.271 179C234.756 179 236.771 181.015 236.771 183.5 236.771 185.985 234.756 188 232.271 188 229.786 188 227.771 185.985 227.771 183.5 227.771 181.015 229.786 179 232.271 179Z"
                                fill="#663300"
                        />
                        <path
                                d="M2.02928e-06-1.5 77.6041-1.49989 77.6041 1.5001-2.02928e-06 1.5ZM-6.08783e-06 4.5C-2.48529 4.5-4.5 2.48528-4.5-6.08783e-06-4.5-2.48529-2.48528-4.5 6.08783e-06-4.5 2.48529-4.5 4.5-2.48528 4.5 6.08783e-06 4.5 2.48529 2.48528 4.5-6.08783e-06 4.5Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 916.5 182.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(801.215 118)"
                        >
                            В-1-2
                            <tspan x="-483.193" y="-2">В-1-1</tspan>
                            <tspan x="-481.806" y="100">В-2-1</tspan>
                            <tspan x="0.291443" y="98">В-2-2</tspan>
                            <tspan x="-656.595" y="-37">Л-ГЭС-1</tspan>
                        </text>
                        <g clip-path="url(#clip19)" transform="translate(129 400)">
                            <use width="100%" height="100%" xlink:href="#img18"></use>
                        </g>
                        <path
                                d="M135.5 406.5 619.166 406.5"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip21)" transform="translate(677 400)">
                            <use width="100%" height="100%" xlink:href="#img20"></use>
                        </g>
                        <path
                                d="M683.5 406.5 1035.15 406.5"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M403 521 403 548.792"
                                stroke="#4472C4"
                                stroke-width="3.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M404.833 515.996 404.903 549.712 401.236 549.72 401.167 516.004ZM403.07 549.716 408.562 546.038 403.085 557.049 397.562 546.061Z"
                                fill="#989898"
                        />
                        <path
                                d="M1182.67 371.8 1182.21 313.844 1184.88 313.823 1185.33 371.779ZM1183.54 313.833 1179.56 316.531 1183.5 308.5 1187.56 316.468Z"
                                fill="#989898"
                        />
                        <path
                                d="M1136.5 537.5 1184.26 537.5"
                                stroke="#2E75B6"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 0.316325 147.784"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1183.5 538.284)"
                        />
                        <a href="<?= $urlSwitch15 ?>">
                            <rect id="c1111"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#989898"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 1174.5 390.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(1195.83 455)"
                        >
                            Инвертор
                            <tspan x="5.16663" y="13"></tspan>
                            <tspan x="-130" y="56">Қуёш</tspan>
                            <tspan x="-134.867" y="69">панели</tspan>
                            <tspan x="-135.947" y="82">200 кВт</tspan>
                            <tspan x="-47.7998" y="-190">СН</tspan>
                            <tspan x="-32.9664" y="-190">-</tspan>
                            0,4 кВ
                            <tspan font-weight="700" x="1.53357" y="-190">ТСН</tspan>
                            <tspan font-weight="700" x="24.7002" y="-190">-</tspan>
                            <tspan font-weight="700" x="28.2002" y="-190">11</tspan>
                            <tspan x="-35.2131" y="-177">Хисорак</tspan>
                            <tspan x="5.95349" y="-177">ГЭС</tspan>
                            <tspan font-weight="700" x="-959.306" y="19">Г</tspan>
                            <tspan font-weight="700" x="-952.473" y="19">-</tspan>
                            <tspan font-weight="700" x="-948.973" y="19">1</tspan>
                            <tspan font-weight="700" x="-978.306" y="32">10,5</tspan>
                            <tspan font-weight="700" x="-956.973" y="32">кВ</tspan>
                            <tspan font-weight="700" x="-984.639" y="45">22,5МВт</tspan>
                            <tspan font-weight="700" x="-1039.97" y="58">СВ</tspan>
                            <tspan font-weight="700" x="-1025.14" y="58">-</tspan>
                            <tspan font-weight="700" x="-1021.64" y="58">335/121</tspan>
                            <tspan font-weight="700" x="-986.639" y="58">-</tspan>
                            <tspan font-weight="700" x="-983.139" y="58">12УХЛ4</tspan>
                            <tspan font-weight="700" x="-772.351" y="22">ТСН</tspan>
                            <tspan font-weight="700" x="-749.185" y="22">-</tspan>
                            <tspan font-weight="700" x="-745.685" y="22">2</tspan>
                            <tspan font-weight="700" x="-772.351" y="35">10/0,4</tspan>
                            <tspan font-weight="700" x="-742.685" y="35">кВ</tspan>
                            <tspan font-weight="700" x="-772.351" y="48">630</tspan>
                            <tspan font-weight="700" x="-753.685" y="48">кВа</tspan>
                            <tspan font-weight="700" x="-772.351" y="61">КТП</tspan>
                            <tspan font-weight="700" x="-749.185" y="61">-</tspan>
                            <tspan font-weight="700" x="-745.685" y="61">630/10/0,4</tspan>
                            <tspan font-weight="700" x="-314.589" y="22">ТСН</tspan>
                            <tspan font-weight="700" x="-291.422" y="22">-</tspan>
                            <tspan font-weight="700" x="-287.922" y="22">12</tspan>
                            <tspan font-weight="700" x="-314.589" y="35">10/0,4</tspan>
                            <tspan font-weight="700" x="-284.922" y="35">кВ</tspan>
                            <tspan font-weight="700" x="-314.589" y="48">630</tspan>
                            <tspan font-weight="700" x="-295.922" y="48">кВа</tspan>
                            <tspan font-weight="700" x="-314.589" y="61">КТП</tspan>
                            <tspan font-weight="700" x="-291.422" y="61">-</tspan>
                            <tspan font-weight="700" x="-287.922" y="61">630/10/0,4</tspan>
                        </text>
                        <g clip-path="url(#clip22)">
                            <g clip-path="url(#clip24)" transform="translate(145 117)">
                                <use width="100%" height="100%" xlink:href="#img23"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch5 ?>">
                            <rect id="c220"
                                    x="154"
                                    y="124"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                            />
                        </a>
                        <path
                                d="M66.365 118.924 149.965 118.924 149.965 132.515 66.365 132.515Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M66.365 132.515 149.965 132.515 149.965 146.106 66.365 146.106Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M65.6984 132.515 150.631 132.515"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M66.365 118.257 66.365 146.773"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M149.965 118.257 149.965 146.773"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M65.6984 118.924 150.631 118.924"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M65.6984 146.106 150.631 146.106"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip25)">
                            <text id="b22"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(69.0317 129)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip26)">
                            <text id="b21"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(69.0317 143)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip28)" transform="matrix(1 0 -0 1.02857 142 120)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip30)" transform="matrix(1 0 -0 1.02857 142 133)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img29"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M1011.31 120.16 1094.91 120.16 1094.91 133.752 1011.31 133.752Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1011.31 133.752 1094.91 133.752 1094.91 147.343 1011.31 147.343Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1010.64 133.752 1095.57 133.752"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1011.31 119.494 1011.31 148.009"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1094.91 119.494 1094.91 148.009"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1010.64 120.16 1095.57 120.16"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1010.64 147.343 1095.57 147.343"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip31)">
                            <text id="b26"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1013.97 130)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip32)">
                            <text id="b25"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1013.97 144)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip33)" transform="matrix(1 0 -0 1.02857 1087 121)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip34)" transform="matrix(1 0 -0 1.11429 1087 134)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img29"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M1.5-1.58947e-06 1.5001 93.0775-1.4999 93.0775-1.5 1.58947e-06ZM9.8629e-05 93.0775 4.5001 90.0775 0.000104987 99.0775-4.4999 90.0775Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 992.5 183.578)"
                        />
                        <g clip-path="url(#clip35)">
                            <g clip-path="url(#clip37)" transform="translate(974 117)">
                                <use width="100%" height="100%" xlink:href="#img36"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch6 ?>">
                            <rect id="c260"
                                    x="983"
                                    y="124"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                            />
                        </a>
                        <g clip-path="url(#clip38)">
                            <g clip-path="url(#clip40)" transform="translate(385 417)">
                                <use width="100%" height="100%" xlink:href="#img39"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch10 ?>">
                            <rect id="c34"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 394 442)"
                            />
                        </a>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c3402"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#989898"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 388.5 516.5)"
                            />
                            <path id="c3401"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 388.5 492.5)"
                            />
                        </a>
                        <path
                                d="M863 406.487 863.466 460.867 860.466 460.893 860 406.513ZM857 406.539C856.979 404.053 858.976 402.022 861.462 402 863.947 401.979 865.979 403.976 866 406.462 866.021 408.947 864.024 410.979 861.539 411 859.053 411.021 857.021 409.024 857 406.539Z"
                                fill="#6600CC"
                        />
                        <path
                                d="M862 521 862 548.792"
                                stroke="#4472C4"
                                stroke-width="3.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M862.833 516.996 862.903 550.712 859.236 550.72 859.167 517.004ZM861.07 550.716 866.562 547.038 861.085 558.049 855.562 547.061Z"
                                fill="#989898"
                        />
                        <g clip-path="url(#clip41)">
                            <g clip-path="url(#clip43)" transform="translate(843 417)">
                                <use width="100%" height="100%" xlink:href="#img42"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch13 ?>">
                            <rect id="c46"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 852 443)"
                            />
                        </a>
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c4602"
                                    d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                    stroke="#989898"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 846.5 517.5)"
                            />
                            <path id="c4601"
                                    d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 846.5 492.5)"
                            />
                        </a>
                        <path
                                d="M542 407.487 542.466 461.867 539.466 461.893 539 407.513ZM536 407.539C535.979 405.053 537.976 403.022 540.462 403 542.947 402.979 544.979 404.976 545 407.462 545.021 409.947 543.024 411.979 540.539 412 538.053 412.021 536.021 410.024 536 407.539Z"
                                fill="#6600CC"
                        />
                        <path
                                d="M540 521 540 548.792"
                                stroke="#4472C4"
                                stroke-width="3.66667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M541.833 516.996 541.903 550.712 538.236 550.72 538.167 517.004ZM540.07 550.716 545.562 547.038 540.085 558.049 534.562 547.061Z"
                                fill="#989898"
                        />
                        <g clip-path="url(#clip44)">
                            <g clip-path="url(#clip46)" transform="translate(521 417)">
                                <use width="100%" height="100%" xlink:href="#img45"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch11 ?>">
                            <rect id="c58"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 530 443)"
                            />
                        </a>
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c5802"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#989898"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 525.5 517.5)"
                            />
                            <path id="c5801"
                                    d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 525.5 493.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(557.232 477)"
                        >
                            ТСН
                            <tspan x="23.1667" y="0">-</tspan>
                            11
                            <tspan x="0" y="13">10/0,4</tspan>
                            <tspan x="29.6667" y="13">кВ</tspan>
                            <tspan x="0" y="26">630</tspan>
                            <tspan x="18.6667" y="26">кВа</tspan>
                            <tspan x="0" y="39">КТП</tspan>
                            <tspan x="23.1667" y="39">-</tspan>
                            630/10/0,4
                            <tspan x="178.608" y="-174">Т</tspan>
                            <tspan x="185.775" y="-174">-</tspan>
                            2
                            <tspan x="178.608" y="-161">110/10,5</tspan>
                            <tspan x="218.941" y="-161">кВ</tspan>
                            <tspan x="178.608" y="-148">32000</tspan>
                            <tspan x="207.941" y="-148">кВа</tspan>
                            <tspan x="178.608" y="-135">ТД</tspan>
                            32000
                        </text>
                        <path
                                d="M717 238.497 717.122 291.129 714.122 291.136 714 238.504ZM711 238.51C710.994 236.025 713.004 234.006 715.49 234 717.975 233.994 719.994 236.004 720 238.49 720.006 240.975 717.996 242.994 715.51 243 713.025 243.006 711.006 240.996 711 238.51Z"
                                fill="#663300"
                        />
                        <path
                                d="M983 406.5 983 484.138 980 484.138 980 406.5ZM977 406.5C977 404.015 979.015 402 981.5 402 983.985 402 986 404.015 986 406.5 986 408.985 983.985 411 981.5 411 979.015 411 977 408.985 977 406.5ZM981.5 484.138 986 481.138 981.5 490.138 977 481.138Z"
                                fill="#6600CC"
                        />
                        <g clip-path="url(#clip47)">
                            <g clip-path="url(#clip49)" transform="translate(962 417)">
                                <use width="100%" height="100%" xlink:href="#img48"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch14 ?>">
                            <rect id="c7"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 971 442)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(419.996 436)"
                        >
                            В-ТСН-2

                            <tspan x="135.306" y="2">В-ТСН-11</tspan>
                            <tspan x="458.86" y="2">В-ТСН-12</tspan>
                            <tspan x="573.375" y="3">В-Рез</tspan>
                            <tspan x="176.901" y="-63">В-Т-1</tspan>
                            <tspan x="254.552" y="-63">В-Т-2</tspan>
                            <tspan x="117.595" y="-127">Т-1</tspan>
                            <tspan x="79.9286" y="-114">110/10,5</tspan>
                            <tspan x="120.262" y="-114">кВ</tspan>
                            <tspan x="85.5953" y="-101">32000</tspan>
                            <tspan x="114.929" y="-101">кВа</tspan>
                            <tspan x="92.4286" y="-88">ТД</tspan>
                            32000
                        </text>
                        <path
                                d="M580.5 244.5 580.9 291.124"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M578.575 231.584C581.849 230.987 584.917 233.601 585.428 237.42 585.939 241.24 583.7 244.82 580.426 245.416 579.789 245.532 579.141 245.528 578.506 245.403"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1.5-1.59222e-06 1.5001 98.9062-1.49989 98.9062-1.5 1.59222e-06ZM4.5001 98.9062C4.50011 101.392 2.48539 103.406 0.000109764 103.406-2.48517 103.406-4.49989 101.392-4.4999 98.9063-4.4999 96.421-2.48518 94.4062 0.00010021 94.4062 2.48538 94.4062 4.5001 96.421 4.5001 98.9062Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 580.5 232.406)"
                        />
                        <path
                                d="M1.5-0.00374494 1.64771 59.1624-1.35228 59.1699-1.5 0.00374494ZM-4.49999 0.0112348C-4.50619-2.47404-2.49651-4.49378-0.0112348-4.49999 2.47404-4.50619 4.49378-2.49651 4.49999-0.0112348 4.50619 2.47404 2.49651 4.49378 0.0112348 4.49999-2.47404 4.50619-4.49378 2.49651-4.49999 0.0112348Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 580.5 405.666)"
                        />
                        <g clip-path="url(#clip50)">
                            <g clip-path="url(#clip52)" transform="translate(562 354)">
                                <use width="100%" height="100%" xlink:href="#img51"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch7 ?>">
                            <rect id="c1"
                                    x="571"
                                    y="361"
                                    width="19"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                            />
                        </a>
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c3"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 565.5 346.5)"
                            />
                            <path id="c2"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#663300"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 565.5 321.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="10"
                                transform="translate(296.7 435)"
                        >
                            В-Г-1
                            <tspan x="447.96" y="33">Г-2</tspan>
                            <tspan x="447.96" y="46">10,5 кВ</tspan>
                            <tspan x="447.96" y="59">22,5 МВт</tspan>
                            <tspan x="447.96" y="72">СВ-335/121-12УХЛ4</tspan>
                        </text>
                        <g clip-path="url(#clip54)" transform="translate(704 396)">
                            <use width="100%" height="100%" xlink:href="#img53"></use>
                        </g>
                        <path
                                d="M0 0 0.000104987 55.2645"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 715.5 460.765)"
                        />
                        <path
                                d="M1.5-2.84958e-06 1.5001 55.2645-1.49989 55.2645-1.5 2.84958e-06ZM4.5001 55.2645C4.50011 57.7497 2.48539 59.7645 0.000113536 59.7645-2.48517 59.7645-4.49989 57.7497-4.4999 55.2645-4.4999 52.7792-2.48519 50.7645 9.64381e-05 50.7645 2.48538 50.7645 4.5001 52.7792 4.5001 55.2645Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 715.5 460.765)"
                        />
                        <g clip-path="url(#clip55)">
                            <g clip-path="url(#clip57)" transform="translate(697 415)">
                                <use width="100%" height="100%" xlink:href="#img56"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch12 ?>">
                            <rect id="c22"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 706 441)"
                            />
                        </a>
                        <path
                                d="M1.5-0.00374494 1.64771 59.1624-1.35228 59.1699-1.5 0.00374494ZM-4.49999 0.0112348C-4.50619-2.47404-2.49651-4.49378-0.0112348-4.49999 2.47404-4.50619 4.49378-2.49651 4.49999-0.0112348 4.50619 2.47404 2.49651 4.49378 0.0112348 4.49999-2.47404 4.50619-4.49378 2.49651-4.49999 0.0112348Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 715.5 404.666)"
                        />
                        <g clip-path="url(#clip58)">
                            <g clip-path="url(#clip60)" transform="translate(697 353)">
                                <use width="100%" height="100%" xlink:href="#img59"></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch8 ?>">
                            <rect id="c4"
                                    x="706"
                                    y="360"
                                    width="19"
                                    height="19"
                                    stroke="#6600CC"
                                    stroke-width="3.66667"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    fill="#FFFFFF"
                            />
                        </a>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c6"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#6600CC"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 700.5 345.5)"
                            />
                            <path id="c5"
                                    d="M0 15.5C-1.97336e-15 6.93959 6.93959-1.97336e-15 15.5-3.94671e-15 24.0604-7.89343e-15 31 6.93959 31 15.5 31 24.0604 24.0604 31 15.5 31 6.93959 31-9.86678e-15 24.0604 0 15.5Z"
                                    stroke="#663300"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 700.5 321.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(730.823 434)"
                        >
                            В
                            <tspan x="7.16669" y="0">-</tspan>
                            Г
                            <tspan x="17.5" y="0">-</tspan>
                            2
                        </text>
                        <path
                                d="M431.672 118.384 499.767 118.384 499.767 131.184 431.672 131.184Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.672 117.717 431.672 131.851"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M499.767 117.717 499.767 131.851"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.005 118.384 500.434 118.384"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.005 131.184 500.434 131.184"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip61)">
                            <text
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(435.451 128)"
                            >
                                U= 110,0 кВ
                            </text>
                        </g>
                        <path
                                d="M431.763 222.323 499.858 222.323 499.858 235.123 431.763 235.123Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.763 221.656 431.763 235.79"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M499.858 221.656 499.858 235.79"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.096 222.323 500.525 222.323"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M431.096 235.123 500.525 235.123"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip62)">
                            <text
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(435.542 232)"
                            >
                                U= 110,0 кВ
                            </text>
                        </g>
                        <g clip-path="url(#clip64)" transform="matrix(1 0 -0 1.00168 1054 44)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img63"
                                    transform="scale(0.801282 0.801282)"
                            ></use>
                        </g>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1076.17 40.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 1175.5 94.1712)"
                        />
                        <path
                                d="M1172.55 106.031 1164.86 97.6543 1165.35 97.2035 1173.04 105.58ZM1165.11 97.4289 1164.95 101.197 1161.5 93.5001 1168.87 97.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M1182.95 106.889 1173.5 106.5"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1080.12 26.2515 1174.49 26.2515 1174.49 39.0515 1080.12 39.0515Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1080.12 25.5849 1080.12 39.7182"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1174.49 25.5849 1174.49 39.7182"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1079.46 26.2515 1175.16 26.2515"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1079.46 39.0515 1175.16 39.0515"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip65)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1083.9 36)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1094.4 36)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M1075.5 40.5001 1094.69 40.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1182.62 93.3352 1270.27 93.3352 1270.27 106.135 1182.62 106.135Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1182.62 92.6686 1182.62 106.802"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1270.27 92.6686 1270.27 106.802"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1181.95 93.3352 1270.94 93.3352"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1181.95 106.135 1270.94 106.135"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip66)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1186.4 103)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1196.9 103)"
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
                                transform="matrix(1 0 0 -1 1072.5 48.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1181.99 66.5001)"
                        />
                        <path
                                d="M1182.5 66.5001 1201.69 66.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1186.81 53.1517 1260.01 53.1517 1260.01 65.9517 1186.81 65.9517Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1186.81 52.485 1186.81 66.6184"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1260.01 52.485 1260.01 66.6184"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1186.15 53.1517 1260.68 53.1517"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1186.15 65.9517 1260.68 65.9517"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip67)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1190.59 63)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M1158.5 94.5001 1181.21 94.5002"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1001.72 389.451 1069.81 389.451 1069.81 402.251 1001.72 402.251Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1001.72 388.785 1001.72 402.918"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1069.81 388.785 1069.81 402.918"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1001.05 389.451 1070.48 389.451"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1001.05 402.251 1070.48 402.251"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip68)">
                            <text id="g15"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1005.5 399)"
                            >
                                U
                            </text>
                        </g>
                        <g clip-path="url(#clip70)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img69"
                                    transform="matrix(0.71875 0 0 0.71875 1095 465)"
                            ></use>
                        </g>
                        <path id="c1001"
                                d="M255.5 487C255.5 473.469 266.469 462.5 280 462.5 293.531 462.5 304.5 473.469 304.5 487 304.5 500.531 293.531 511.5 280 511.5 266.469 511.5 255.5 500.531 255.5 487Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip71)">
                                <g clip-path="url(#clip72)">
                                    <g clip-path="url(#clip73)">
                                        <path
                                                d="M279.689 480.933 280.622 480.933 281.944 481.167 283.033 481.633 283.889 482.178 284.9 483.189 285.522 484.122 285.989 485.367 286.144 486.067 286.144 487.933 285.833 489.1 285.211 490.344 284.589 491.122 284.044 491.667 282.956 492.367 281.711 492.833 280.933 492.989 279.378 492.989 278.133 492.678 277.278 492.289 276.422 491.744 275.567 490.967 275.022 490.189 274.478 489.1 274.167 487.856 274.089 486.922 274.244 485.678 274.556 484.667 275.178 483.5 276.033 482.567 276.656 482.022 277.978 481.322 279.144 481.011Z"
                                        />
                                        <path
                                                d="M280.156 467.089 281.011 467.089 282.489 467.322 283.967 467.789 285.211 468.411 286.144 469.033 286.922 469.733 287.856 470.667 288.711 471.911 289.333 473.156 289.8 474.556 290.033 475.722 290.111 476.344 290.111 477.822 289.878 479.3 289.489 480.622 288.867 481.944 288.089 483.033 287.933 483.033 287.311 481.944 286.378 480.856 285.522 480.078 284.433 479.378 283.267 478.833 281.944 478.444 280.156 478.211Z"
                                        />
                                        <path
                                                d="M267.4 482.878 267.789 482.956 269.967 484.2 271.522 485.133 271.6 485.289 271.444 486.922 271.6 488.556 271.989 490.033 272.533 491.2 272.533 491.433 270.356 492.678 268.489 493.767 264.444 496.1 263.122 496.878 262.889 496.878 262.189 495.4 261.8 494.078 261.644 493.144 261.567 491.822 261.722 490.344 261.956 489.256 262.5 487.778 263.044 486.767 263.744 485.756 264.678 484.744 265.533 483.967 266.933 483.111Z"
                                        />
                                        <path
                                                d="M287.7 491.433 288.089 491.511 289.956 492.6 296.022 496.1 297.344 496.878 297.189 497.267 296.644 498.044 295.944 498.9 295.4 499.444 294.233 500.3 292.989 501 291.511 501.544 290.344 501.778 289.878 501.856 287.544 501.856 286.378 501.622 285.133 501.233 283.811 500.611 282.878 499.989 282.878 495.322 283.578 495.011 284.9 494.311 285.833 493.611 286.922 492.522Z"
                                        />
                                        <path
                                                d="M270.667 472.067 272.378 472.067 273.856 472.3 275.489 472.844 276.811 473.544 277.433 473.933 277.433 478.678 276.033 479.3 274.944 480 274.089 480.7 273.544 481.244 272.611 482.567 272.144 482.411 270.822 481.633 264.756 478.133 263.044 477.122 262.967 476.967 263.511 476.111 264.367 475.1 264.989 474.478 266.156 473.622 267.244 473 268.722 472.456 269.578 472.222Z"
                                        />
                                        <path
                                                d="M274.167 493.533 274.478 493.611 275.644 494.467 276.967 495.089 278.211 495.478 279.144 495.633 280.078 495.711 280.156 495.789 280.156 506.833 278.989 506.833 277.433 506.522 276.111 506.056 274.711 505.278 273.7 504.5 272.922 503.8 272.144 502.867 271.367 501.622 270.744 500.222 270.356 498.744 270.2 497.344 270.2 496.489 270.278 495.789 272.222 494.7 273.544 493.922Z"
                                        />
                                        <path
                                                d="M297.267 477.044 297.422 477.044 297.967 478.133 298.433 479.533 298.667 480.778 298.744 482.333 298.589 483.733 298.278 485.056 297.656 486.533 297.111 487.467 296.489 488.322 295.633 489.256 294.467 490.189 293.456 490.811 292.756 491.122 290.811 490.033 288.944 488.944 288.711 488.789 288.867 487.389 288.867 486.222 289.567 485.522 290.578 484.2 291.278 483.033 291.978 481.556 292.522 479.844 293.222 479.378 295.167 478.289 297.033 477.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M233.683 521.816 326.239 521.816 326.239 534.616 233.683 534.616Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.683 534.616 326.239 534.616 326.239 547.416 233.683 547.416Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.683 547.416 326.239 547.416 326.239 560.216 233.683 560.216Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.683 560.216 326.239 560.216 326.239 573.016 233.683 573.016Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.683 573.016 326.239 573.016 326.239 585.816 233.683 585.816Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.683 585.816 326.239 585.816 326.239 598.616 233.683 598.616Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.017 534.616 326.906 534.616"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.017 547.416 326.906 547.416"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.017 560.216 326.906 560.216"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.017 573.016 326.906 573.016"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.017 585.816 326.906 585.816"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.683 521.15 233.683 599.283"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M326.239 521.15 326.239 599.283"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.017 521.816 326.906 521.816"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M233.017 598.616 326.906 598.616"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip74)">
                            <text id="g10"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(237.463 532)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip75)">
                            <text id="g12"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(237.463 545)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip76)">
                            <text id="a100"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(237.463 557)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip77)">
                            <text id="k10"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(237.463 570)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip78)">
                            <text id="n10"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(237.463 583)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip79)">
                            <text id="w10" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(237.463 596)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c2201"
                                d="M691.5 485C691.5 471.469 702.469 460.5 716 460.5 729.531 460.5 740.5 471.469 740.5 485 740.5 498.531 729.531 509.5 716 509.5 702.469 509.5 691.5 498.531 691.5 485Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip80)">
                                <g clip-path="url(#clip81)">
                                    <g clip-path="url(#clip82)">
                                        <path
                                                d="M714.689 478.933 715.622 478.933 716.944 479.167 718.033 479.633 718.889 480.178 719.9 481.189 720.522 482.122 720.989 483.367 721.144 484.067 721.144 485.933 720.833 487.1 720.211 488.344 719.589 489.122 719.044 489.667 717.956 490.367 716.711 490.833 715.933 490.989 714.378 490.989 713.133 490.678 712.278 490.289 711.422 489.744 710.567 488.967 710.022 488.189 709.478 487.1 709.167 485.856 709.089 484.922 709.244 483.678 709.556 482.667 710.178 481.5 711.033 480.567 711.656 480.022 712.978 479.322 714.144 479.011Z"
                                        />
                                        <path
                                                d="M715.156 465.089 716.011 465.089 717.489 465.322 718.967 465.789 720.211 466.411 721.144 467.033 721.922 467.733 722.856 468.667 723.711 469.911 724.333 471.156 724.8 472.556 725.033 473.722 725.111 474.344 725.111 475.822 724.878 477.3 724.489 478.622 723.867 479.944 723.089 481.033 722.933 481.033 722.311 479.944 721.378 478.856 720.522 478.078 719.433 477.378 718.267 476.833 716.944 476.444 715.156 476.211Z"
                                        />
                                        <path
                                                d="M702.4 480.878 702.789 480.956 704.967 482.2 706.522 483.133 706.6 483.289 706.444 484.922 706.6 486.556 706.989 488.033 707.533 489.2 707.533 489.433 705.356 490.678 703.489 491.767 699.444 494.1 698.122 494.878 697.889 494.878 697.189 493.4 696.8 492.078 696.644 491.144 696.567 489.822 696.722 488.344 696.956 487.256 697.5 485.778 698.044 484.767 698.744 483.756 699.678 482.744 700.533 481.967 701.933 481.111Z"
                                        />
                                        <path
                                                d="M722.7 489.433 723.089 489.511 724.956 490.6 731.022 494.1 732.344 494.878 732.189 495.267 731.644 496.044 730.944 496.9 730.4 497.444 729.233 498.3 727.989 499 726.511 499.544 725.344 499.778 724.878 499.856 722.544 499.856 721.378 499.622 720.133 499.233 718.811 498.611 717.878 497.989 717.878 493.322 718.578 493.011 719.9 492.311 720.833 491.611 721.922 490.522Z"
                                        />
                                        <path
                                                d="M705.667 470.067 707.378 470.067 708.856 470.3 710.489 470.844 711.811 471.544 712.433 471.933 712.433 476.678 711.033 477.3 709.944 478 709.089 478.7 708.544 479.244 707.611 480.567 707.144 480.411 705.822 479.633 699.756 476.133 698.044 475.122 697.967 474.967 698.511 474.111 699.367 473.1 699.989 472.478 701.156 471.622 702.244 471 703.722 470.456 704.578 470.222Z"
                                        />
                                        <path
                                                d="M709.167 491.533 709.478 491.611 710.644 492.467 711.967 493.089 713.211 493.478 714.144 493.633 715.078 493.711 715.156 493.789 715.156 504.833 713.989 504.833 712.433 504.522 711.111 504.056 709.711 503.278 708.7 502.5 707.922 501.8 707.144 500.867 706.367 499.622 705.744 498.222 705.356 496.744 705.2 495.344 705.2 494.489 705.278 493.789 707.222 492.7 708.544 491.922Z"
                                        />
                                        <path
                                                d="M732.267 475.044 732.422 475.044 732.967 476.133 733.433 477.533 733.667 478.778 733.744 480.333 733.589 481.733 733.278 483.056 732.656 484.533 732.111 485.467 731.489 486.322 730.633 487.256 729.467 488.189 728.456 488.811 727.756 489.122 725.811 488.033 723.944 486.944 723.711 486.789 723.867 485.389 723.867 484.222 724.567 483.522 725.578 482.2 726.278 481.033 726.978 479.556 727.522 477.844 728.222 477.378 730.167 476.289 732.033 475.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M669.085 519.585 761.641 519.585 761.641 532.385 669.085 532.385Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M669.085 532.385 761.641 532.385 761.641 545.185 669.085 545.185Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M669.085 545.185 761.641 545.185 761.641 557.985 669.085 557.985Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M669.085 557.985 761.641 557.985 761.641 570.785 669.085 570.785Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M669.085 570.785 761.641 570.785 761.641 583.585 669.085 583.585Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M669.085 583.585 761.641 583.585 761.641 596.385 669.085 596.385Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M668.418 532.385 762.307 532.385"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M668.418 545.185 762.307 545.185"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M668.418 557.985 762.307 557.985"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M668.418 570.785 762.307 570.785"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M668.418 583.585 762.307 583.585"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M669.085 518.918 669.085 597.052"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M761.641 518.918 761.641 597.052"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M668.418 519.585 762.307 519.585"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M668.418 596.385 762.307 596.385"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip83)">
                            <text id="g22"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(672.864 530)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip84)">
                            <text id="g24"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(672.864 542)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip85)">
                            <text id="a22"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(672.864 555)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip86)">
                            <text id="k22"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(672.864 568)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip87)">
                            <text id="n22"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(672.864 581)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip88)">
                            <text id="w22" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(672.864 594)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M25.5001 568C25.5001 562.753 29.7533 558.5 35.0001 558.5 40.2468 558.5 44.5001 562.753 44.5001 568 44.5001 573.247 40.2468 577.5 35.0001 577.5 29.7533 577.5 25.5001 573.247 25.5001 568Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M25.5001 589.5C25.5001 584.529 29.7533 580.5 35.0001 580.5 40.2468 580.5 44.5001 584.529 44.5001 589.5 44.5001 594.471 40.2468 598.5 35.0001 598.5 29.7533 598.5 25.5001 594.471 25.5001 589.5Z"
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
                                transform="translate(49.8528 570)"
                        >
                            в работе
                            <tspan x="-0.0827293" y="22">в резерве</tspan>
                        </text>
                        <path
                                d="M25 545.5C25 540.253 29.2533 536 34.5 536 39.7467 536 44 540.253 44 545.5 44 550.747 39.7467 555 34.5 555 29.2533 555 25 550.747 25 545.5Z"
                                stroke="#000000"
                                stroke-width="2"
                                stroke-miterlimit="8"
                                fill="#FFFF00"
                                fill-rule="evenodd"
                        />
                        <text
                                fill="#828897"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(49.7701 548)"
                        >
                            в ремонте
                            <tspan fill="#8A94AD" x="0.264881" y="-23">отдача</tspan>
                            <tspan fill="#8A94AD" x="0.000102997" y="-47">прием</tspan>
                        </text>
                        <g clip-path="url(#clip89)" transform="matrix(1 0 -0 1.07143 30 490)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(0.205128 0.205128)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip90)" transform="matrix(1.05 0 -0 1 29 512)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img29"
                                    transform="scale(0.21978 0.21978)"
                            ></use>
                        </g>
                        <path
                                d="M135.309 412.446 203.404 412.446 203.404 425.246 135.309 425.246Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M135.309 411.779 135.309 425.912"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M203.404 411.779 203.404 425.912"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M134.642 412.446 204.071 412.446"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M134.642 425.246 204.071 425.246"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip91)">
                            <text id="g3"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(139.088 422)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M360.428 563.117 444.028 563.117 444.028 576.708 360.428 576.708Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M360.428 562.45 360.428 577.375"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M444.028 562.45 444.028 577.375"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M359.762 563.117 444.695 563.117"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M359.762 576.708 444.695 576.708"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip92)">
                            <text id="g34"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(364.208 573)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip93)" transform="matrix(1 0 -0 1.02857 436 564)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M499.767 563.117 583.367 563.117 583.367 576.708 499.767 576.708Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M499.767 562.45 499.767 577.375"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M583.367 562.45 583.367 577.375"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M499.101 563.117 584.034 563.117"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M499.101 576.708 584.034 576.708"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip94)">
                            <text id="g58"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(503.547 573)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip95)" transform="matrix(1 0 -0 1.02857 575 564)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M824.556 563.935 908.156 563.935 908.156 577.526 824.556 577.526Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M824.556 563.268 824.556 578.192"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M908.156 563.268 908.156 578.192"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M823.89 563.935 908.823 563.935"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M823.89 577.526 908.823 577.526"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip96)">
                            <text id="g46"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(828.336 574)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip97)" transform="matrix(1 0 -0 1.02857 900 565)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img27"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M1140.18 289.646 1223.78 289.646 1223.78 303.237 1140.18 303.237Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1140.18 288.979 1140.18 303.904"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1223.78 288.979 1223.78 303.904"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1139.51 289.646 1224.45 289.646"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1139.51 303.237 1224.45 303.237"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip98)">
                            <text id="g70"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1143.96 300)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip99)" transform="matrix(1 0 -0 1.02857 1216 290)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img29"
                                    transform="scale(0.128205 0.128205)"
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
        fetch('/xisorak/server37', { signal: controller.signal })
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

                let c1 = 0; let c2 = 0;

                const idToElementMap = {
                    220: { elementId: "b22", format: "P= %s МВт", animationIds: [220, 11111, 1112] },
                    210: { elementId: "b21", format: "P= %s МВт", animationIds: [220, 11111, 1112] },
                    260: { elementId: "b26", format: "P= %s МВт", animationIds: [260] },
                    250: { elementId: "b25", format: "P= %s МВт", animationIds: [260] },
                    300: { elementId: "g3", format: "U=%s кВ" },
                    15: { elementId: "g15", format: "U=%s кВ" },
                    34: { elementId: "g34", format: "P=%s кВт", animationIds: [34, 3401, 3402, 1, 2, 3] },
                    46: { elementId: "g46", format: "P=%s кВт", animationIds: [46, 4601, 4602] },
                    58: { elementId: "g58", format: "P=%s кВт", animationIds: [58, 5801, 5802, 1, 2, 3] },
                    12: { elementId: "g12", format: "Qвар= %s МВАр" },
                    13: { elementId: "k10", format: "КПД= %s %" },
                    14: { elementId: "n10", format: "НА= %s %" },
                    150: { elementId: "w10", format: "Qвода= %s м3/с" },
                    22: { elementId: "g22", format: "P= %s МВт", animationIds: [22, 2201], kium: true },
                    100: { elementId: "g10", format: "P= %s МВт", animationIds: [10, 1001, 1, 2, 3], kium: true },
                    24: { elementId: "g24", format: "Qвар= %s МВАр" },
                    25: { elementId: "k22", format: "КПД= %s %" },
                    26: { elementId: "n22", format: "НА= %s %" },
                    27: { elementId: "w22", format: "Qвода= %s м3/с" },
                    70: { elementId: "g70", format: "P= %s кВт", animationIds: [1111]  },
                    // Новые условия
                    1: { elementId: "active", format: "∑ %s МВт" },
                    2: { elementId: "reactive", format: "∑ %s МВАр" },
                    3: { elementId: "activeOut", format: "∑ %s МВт" },
                    4: { elementId: "activeIn", format: "∑ %s МВт" },
                    5: { elementId: "ownNeeds", format: "∑ %s KВт" },
                    6: { elementId: "water", format: "∑ %s м3/с" },
                    7: { elementId: "hertz", format: "%s Гц" },
                    8: { elementId: "water1", format: "ВБ=%s м" },
                    9: { elementId: "water2", format: "НБ=%s м" },
                    10: { elementId: "water3", format: "Н=%s м" }
                };

                data.forEach(item => {
                    const config = idToElementMap[item.id];
                    if (!config) return;

                    const value = document.getElementById(config.elementId);
                    if (value) {
                        value.textContent = config.format.replace('%s', formatNumber(Math.abs(item.value), 2, ',', ' '));
                    }

                    // Handle animations
                    if (config.animationIds) {
                        const isActive = item.value !== 0;
                        config.animationIds.forEach(id => {
                            if (isActive) {
                                trueAnimation(id);
                            } else {
                                falseAnimation(id);
                            }
                        });
                    }

                    // Handle KIUM calculation
                    if (config.kium) {
                        const kpdElement = document.getElementById(`a${item.id}`);
                        if (kpdElement) {
                            kpdElement.textContent = `КИУМ= ${formatNumber(item.value / 22.5 * 100, 1, ',', ' ')} %`;
                        }
                    }
                })
                // if (c1 === 1) {
                //     trueAnimation(1);
                //     trueAnimation(2);
                //     trueAnimation(3);
                // } else {
                //     falseAnimation(1);
                //     falseAnimation(2);
                //     falseAnimation(3);
                // }
                if (c2 === 1) {
                    trueAnimation(4);
                    trueAnimation(5);
                    trueAnimation(6);
                } else {
                    falseAnimation(4);
                    falseAnimation(5);
                    falseAnimation(6);
                }
                falseAnimation(7);
                falseAnimation(3333);
                falseAnimation(4444);
            })
            .catch(error => {
                if (error.name === 'AbortError') {
                    console.log('Запрос был отменен из-за таймаута');
                } else {
                    console.error('Произошла ошибка:', error);
                }
            })
            .finally(() => clearTimeout(timeoutId)); // Очистить таймаут
    }

    document.addEventListener('DOMContentLoaded', function() {
        getServer();
    });

    var intervalTime = 18000; // Set the interval time in milliseconds (e.g., 1000ms = 1 second)

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