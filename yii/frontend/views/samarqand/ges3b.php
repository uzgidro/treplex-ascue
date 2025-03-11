<?php
use frontend\controllers\Dashboard;
use frontend\controllers\Day;
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Иртишар ГЭС(ГЭС-3Б)';
$energy = new Energy();
$id = 50; $idTwo = 51;
$dashboard = new Dashboard();
$power = new Day();

$power->getHour([$id, $idTwo]);
//$power->getDay([$id, $idTwo]);

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($idTwo, 3);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['samarqand/index']) ?>">"Самарқанд ГЭСлар каскади" Филиали</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= Html::encode($this->title) ?></li>
    </ol>
</nav>
<div class="col-xl-12 col-xxl-12">
    <div class="card mb-3"  style="backdrop-filter: blur(15px);">
        <div class="card-body">
            <div class="row g-4 g-xl-1 g-xxl-3 justify-content-between">
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity text-info-dark"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">
                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Активноя мощность</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="active">0 МВт </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">
                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Реактивноя мощность</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="reactive">0 МВар </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize-2 text-info-dark"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Отдача</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="activeOut">0 МВт </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Приём</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="activeIn">0 МВт</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-info-dark"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Расход воды через турбины</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="water">0 м3/с</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Собствинные нужды</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="ownNeeds">0 KВт</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar text-info-dark"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Частота</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="hertz">0 Гц</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports"><?= date('Y-m-d') ?></p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="clock"></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3"  style="backdrop-filter: blur(15px);">
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
                            <rect x="9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOpJREFUSEvt12sSgyAMBODYKiL4uv9pK7oKIcFeIN8vS3amlpWZSoXuw32xXukxznpMuAHTbMCEs5zlEstZLrGc5RLLWS6xnPpHzI2YZt5hdpgCRAxLEbMwE1b+oQUX72aigMs363GjvXZjlXODNnxoW85fTHJDOH/FyL1/c9yRU5oodUgdJixpAjKJW7EoxaI7oh2r0oYEtGoZMX94DLhUBKfXojyp9dtCgiI4+UDcRXBic6L+XiFqKYrgeC1iS7Jyc3gRXFlLVQSXN2fCSsO9ObII7q7leTZbrtOiFsGl06IXwTlfnAgg+gEGAhJwZdPnjwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img1"
                        ></image>
                        <clipPath id="clip2">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip3">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip4">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip5">
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7V0JVFRXmk73TE93umemz/TMnD7T0zM9p8+ZnnO6J53uGJdEE2NiUKPEqEjUGMUlxiUmre0SEzfcAQUX9oKCojb2fXFDkE0odhVwQaEKF9yFAjSZ6Df/f+sVFsVDUMCF1M/5znvvvvduvffux7/c+9/3XniS4uzs/O6qFSsUb7755ku8vWTRop2RGv1FvVZ3yR5r1qypBvADcaJDHPI4snnzZlVDQwOGDBkysaSk5EdbtmwJb21pgT1aCDqdrslBOIf0SpRKZT0T7rVhw3bpdToQ4QS55OAgnEN6JdOmTftVRkbG/QtEuKGvDva+ceMG4mJjZcnGIMLdkk51yEAUw/mm/ykytnoWN5hHsbkThaRhTKb7L55oaHm5tL51SqWx7Y3jxtZXj58z//J4owWl52/+pqShaVhxfdP4sot33q24fP9n4lwS1lAl527+vMzUPHL+gqVLGxsvQxBu8GDv69evI1YQrrUT2RhardZBuIEoJaaWFcX15gtFxpb7JQ1tKCaUGFu+KzGaBYrrW+6VmNpgaLhj2UdL3haQtosF7goYjC33DKa2SwZTa02JqbXJUN9yv9h0F74h2vvmFnMHwsXFxcmSjeHQcANUSkx3VBbC9B+YlGFqPRGJCXcBg3tAOIeGG6BCWogIx9pJnix9gfwz1xEZbTGfFy9exCuvvJIufLjvuYZbtmzZi06jR6+m1e9PcNTfhGPTq0nLw6lTNUQki7928OBBODTcCy9Mnjz5N5s3uiMqKupFqWjgy5PQcB6+4YiNjiTECOzYvr1bwiUkJFySLnHAyqhRowaplGFYtWrVr6WigS/9T7g2bPTYh/jEZEIK4pOS4em1SxBOq9YgLTUVTU1NnQhXUVFRn5qaOiglJeXlpKSkP1qRlpb2Epfv3r178PTp0/9Fuo3nUkaMGDE6J/soXCdNelkqGvjSv4TjqJfMan0LiuvMFtSboU45ilClCmu+Xg+tLgrh4eE4dOgQzGZzO+Fu376Nq1ev4sqVKx3AZQyj0YixY8culm7juZRFny2aWVdXByLeSKlo4MuTMKlyKGlopWUb0g1n4ROoQhSZ2vCwcOTk5HTQdF2ByTlhwoRl0m08l+Ls7LyItfugQYM+kIoGvjwdwkmaz7o0tSI+qxy+QeFISExAGPk1xcXFskSzxaRJk1ZIt/Fcipub29pvv/kWI0eO/EQqGvjytDScHJiAmtQcBIREICUphYinxInjx2XJxphLDSbdxnMpK5at8L537x6mfzj9S6lo4MuzRDgB012UGFuhiMqAUqVFWkqa8PFOnTrViXAL5s3zk27juZStm7eG3b9/H59/9pmXVDTw5ZkjnA0Kz5vhq4qHVh8notkIVQTOnz9PZGuFubUFXp6e8Nrhlfee03tjpdt5qsJRs4uLy7/3FES4/RwArV6xUs/bGzZs+FupqoEr/U04MfZqV9YT2J6Xd+Y69ih0iE1IQnJyMtTqCDFiEanTify5qpMnsWvXrsIxY8aMf5opTZs2bTp95MgRZGVl9Qx87BHLMjo6GsOHD39LqmrgSn8RTgQEJl63DPJ3PuZBmfz+zjhy8gJ8glRIzziIxPg4bN+2rUNXSk1NDby9vUvGjRv3AWmLH0q3+MQkUqM9rYqgiDsykhDVLYKDg+FJWnrfvn1i9MVBuMeE0E6mNmzx2ocwTRSUmhiEaGIRrI6HvyoGe8MY8ThUYZRI2TOUSMfuLz4Lb98QlJaUIjgoGFevXG0nHePMmTPY7eNT8f748S5PknhMuJiYGFKyFmH/7GFy4cIFFBYW4vSp08hIS8dIB+EeH0dPXsbadevJ7OkRqdcjSh+JaPqvjouJRXxcHGKpYQKCFdit0CL7xAU6xzbVqTuQRjS2YV9YLPLyChAeqsSpms5BRW1tLWuPE++///40Mll/I91yv0mkVnuah+6YaKWlpXTfluG8GBlwuVajET7p6dNEuHQH4XqF8MRs1NfVdyIBw8xoNiMjNQ1qVTiUYWrsDdEjp+aKbF3y4Jy8O9CkHEVCUhpSkpLBw0Ryv8eNunfv3mpnZ+eZ/emYWwl38+ZNJCYmdtBwvC4HFoeG6wPsDdGhxca/6go8hBVDDjNrwgi1DnuVUcg7fU2YZFs/rysY6NrTj9UgKDQCBfkFiI6J7uDX2YKHw3x9fc9MnDjRbcGCBZas5j4UK+HYH7t165YgU0/EoeF6CyKLIowIJ9Po9rDO0rp25QpFn2oyt/HQaKPgGx6DgrM35eu3h+kuck9dwa59IaisrISCnHFODrD/LSsaTCYEBQSec3VxmT916tS/kx5Fr8VKuAMHDqC5uVmiU/fi0HC9RV2zII1cY3cH1kJhYWE4kJ4BlUYPf3Uijp2/LVLcu4tmDcYW+ARrUELBREiIQvhwcr9hxUVy2oMDg+qnTpmycOnSpT+WHsljy2MTzqHheoeEnOM4dqyQGlV+gkxPUFVVRcRT4ujRowiPIOJpklFIRJb7vQew+HWKmP04cChT5Nvl5+fL1m+Ly5cuQaFQmFxcXD6bPXv2T6RH88jyuIQ7Q4Q7mLEf7771js+4MeMWTuhjcJ2M0W+/vfCjjz76R+lyn470JeGsUaZfRCJukw8j17iPiiIiroo0XnFxCRThGgRHpsNQb5Z+s+vINuFIOcJJQ+bn5iI+Ib5Lv84WjY2NUIaGXpoxY8YyIt8jZ+H2RsOVlpSgqLAIhqK+R5F13WDAtGnT/iBd7tORvtZw7MT7h/KEGflGfRwwWQ6RI84jDJUnjiNIqYEy5iCKyYTKXYMA+XVZlQ3Y7ReKEydOIDQ0VDjycvXb4yr5k+Hh4Y0zZ8xYsXjx4r+XHlW3YiVcQUGBiIytUWh3ckby4ZLiE0Rkb+wHxMbE4kjmkYFFONHhS1onhDSRXEP2Fpw7lpCQgMioKNTUnEKAQoWE7Arp9+X9u6JzTdjpF0akOwlFUDCM9fJdNXK4dvUq1BERV2fOmLlm7ty5/yA9si7FSjjOAImia2RNx1rTnnjl5eU4eOAgzp45I/ZZfbjCY8ekI/peOM+Qh90GnIbLrmpEcmq6bAP2Fa5fvwGdToukpGQcOHiY/LsE0mic0Cl/TRw1B6oTkJtXIIaUiosMsvV2BY54iXg3Zs2atZai2p9Lj66TWAnHwkTi/jgOgC6Rj2iVb7/9lmekocXcAr1Oj2+++aY9Si0scBDukREam9llh29fg4eGyNlHXl4evMh05lY30jXI3wsHE/r0fETHJSE7OxspKSmydT4MN4joer3+1ly3uRvIz/sn6RG2iy3hrMLuQHJSEjNQIJ/MrclkpD33kUMBEZt5q4Y75tBwjw5fZRRa6b9XrsH6BdSgiQmJZL72QxmhQ8yhYrqOrrpP7mK/oRb+weFkYo+Tn6YSHc+y9XYB7je8RZqLNOWtefPmbf34g4//WXqUnQh3jwimVe2F+9cLEKvbI7B53QKoQ71x524bcq2Ec2i4x0dwOHf4dh8R9jXYL+JMjcwj2dirioXBaCatxvfVOZItOHMdXr4K0dBBQUFCU8rV2R2YLDExMeZPP/lkB0W1/6q1IxybVY2fK5prP0NL7acw1y5EU+0SpKqnURR/kzRctkPD9QZFdU0USUZSYzx+/1tvcPXqNQSTiS0qLBTZJNnHOSlA7lpJAxpbsZei6dLScjGIzoSVq7M7sMZrunWbkxJaQxSKOx013D3MnDISG//6Gtpq56H13Dz4b3sbLhMGodnc7NBwvQFHp4k5J2AwdD/5pV9B5pwHzrkbJUIfA216gTQu2/maDXTNqvjDIr/u8KFD2J+xX77OHoCJx68f66Dh6E/r50IabiFpOCIcwUyaLlU9lUw5abgchw/XC9zF3vA4YSrkGuRJo6KiAhHko+Xl5WNPSCQM9Z1HKdjU8pBZUk4lQskVqKysEJOzm5o7T8zuDoJwMZ0Jp/P7QGi3OxJ4PUPzAZrId2wn3PdPw3VsiMeFX6hWtjGeFq5fuw4ycygrLcVuvxAcKqsX1yk3Jptb1YidvkFi/DU4MAiXL1+WrbMryBHuHkHvN7GdbFbCpWkmopkJ9whRallZGfuLHCWLcx5VnkHC2Ws53paBcMTtj+NuhzaEUZQo1xhPG0lJSWRiDyAyJgERSdl21y8R0EQ+aL0Z3gEqVFVVQ6VS4eTJk7L1yUFewwE6f3vCzReEa7p96wHhutFwXP8md3cy+RkICgwUnd89HcWwyjNDuHXbd8d5+qrOefiHn/fyU9ftDNDWe/lrjF4B2gbPIO0FrwDdpZ0K/SVvhf6KjyLyinew/rp3cOR1b0XUzV3Bkbd2KaKbGDv91c2rV3/ZrNNozZF6fXOkTm+OiYwxk1/TkhCf0EYP6Q75VneTk5O/TUlJ+b+0tLTvCPfS6T87gx4k98pzHtnhw4fFg+G+Mh645wfF/Ww8XMQagFOyiw0GkVFbTv/1JqNRNLY9AezBaUs83bCIzvUO1ogRCMs/ih35aDtYl4Kso7lIJxJkZmbK1mcPWcIRKQI9nXG+yI0wC+cIvK4JeJ8Ix1Fq9xruu+++E/d/YP9+1J6tFQgMCMDNGzceiXTPDOH6SuiefmAPnk/Aqd2cZRsUFPQjBq3/3Z49e35My5/wAPmECRN+yhg0aNBP33333Z9xNsOyZct+sWbNml+uXLnyV59//vl/Llq06Lfz58//He37PZ3z0qTx418eO3bsn8c7OQ1ymTx5EWkHam95ItiCRwxCghWoJP9uX4AS+w1n27tOLISzaDouiz5YBF1UbHuqOA/Gy9VpRTvhbOY0cJSam52Jre5rkXU4XWDH1g04fCBdjDjkEglu3bTRcDKE4y6bwIBAkc3MBGUcpX9Gf1+/7zfhnqaMGjXqD7t37z7JLzmUI4MtRM9/coqIYjk1PTTuoHAHOk/maSOfrw57A0Jx7tw5BPFknWsdJ+vYg6PU6Kho3GlrI9xBg6kBWzZtFsELaX7otFpEkKlmshTk5yOTtDn7iicqj4M1PfubnE7F2twKnhbZXp5fIJYMTw+PDsday/kYObApfiYG7weKLFiw4KekDUM5M0SODPbg48LDwlBRVgFvfxWOtWcX2wYUbSiovUXBhJKCifNQKpXC/MnVx/DeuRM+3t74Yunn+OKzz/EXsVxq2V7KS5t1Kp/+4TQs/nQh1n71tcj/06jVwndkrcbzbgUuXMQlQmJ8Ak5V10CjisAFIjKXtR9D4HOWL1+OQH9/QgCCbMDbX65chSwH4fpeyOR+RFqhuSf5b8LEhoSI95f4BauQkl9tQ7YHoMAKfuExKCouQWJSIpk1+Tc8cTYLD5X1FBwENJAPGhkZCf5+xTHSVLt9fLBpw0a4b9gA94203OiOjbRcv3YdNlLZurVraR/vdxf7LMdsxOpVq4TP25U4TGo/yjvvvPM7Ly+v8mvXrskSowPMLUhNSaGA5QD27z+A4MhUi4ntRLy7UCdnkYnLEAmN/Mr/npD6YWCzfom0E8+6txJu7aYVmPGJM2YseA/TCR8xFr6HRV9NwUyxnIzZi9/DJ6umUPkEOm4cHTMBH7qNQWJyvESvzuIgXD8Lp4ovWbLEv7y8/L5cY9vDamJPVlVjl1848k9fl4hmE1DQMq2gBoEhEThXew6KEAV64jd2BY7KmXA8a81KOPd9SzBn++tw8xiC2TuGEYZi7u5h2JHzPub5DIHnUWcs8H8d29ImYb7PG5jjMRTzPN+C25bh0MYpJXp1FgfhnpC4TJo0NT4u7jZrMrlGtwV3FIeSia2qOokgpRqJ7cmdVlhIl1d9lfy6EJiMDSI9irN75errDqzhLpMvFmslHEWp7r6LMZcIN8djMOYQ4ebsGIJ5RDhPQbjBgnCf+r2Ore2EG4L5niPhtnU4dLEOwj0TQib2t9u2bSu+0tgo2/D2SE1NxcEDB3A4M1vMGuNZ/pw6b806Ect6M/YEqXHiZJXoCmGyyNX1MPBrZlm7sQ/G7yPxo+j1i03TiXDDBZGYcG6k4SyEc8ZcJhwtF/qNwBZBuBGkCUkDOgj37An3/y1csMC7uLi4RyaWRxk4W/f0mVPwpig1p/qyjaaTiGe6g5DodBw6nIW83FwkJSQJn1CuPjk0U5DReOmy6CrhCJS7Sdbu+VSYVCacm5VwPkPhJQg3BF5HJwgNt5kIN89nuES4tzB7y+tEuFCJXp3FQbinJBMnTnTW6/XXe+Lws3/Gk29qqqqgjNAjWja58y7ij5RCpY0ScxTCQpVi9ECuvq5gGzSs8VwA15VD4bpqEKasfgWuq4fgo/WDsVrjhGnug7BKNwbTNg3CCgUFFV8PhQsdM33165i6fDC00WESvTqLg3BPUZycnP7D3d09l+cayBHAHjzExUNL/OIcv7AYYU4tY8oPyHeksgE+/goxuZqTOk0mk2xdcrAl3Pm6WlRUlAuUV5aKrJe09FTM3jYUf40YhWWatzF7zbsoryiTjqtAJR9L2zyHoitxEO4pCw+3zZ8/fzv5XvfkSGAPHtDnjt+683UiufPI8QvCpNqSznC+CV5+ShHB6nR6MddUri57cGcv+4yaCDUqyok8BOuSkZqWglnuQ/GX0DexnOC20gnlZURGm2PKy4mAtOwKHIFzQOQg3FOWsWPHOqnV6sbuxkoZ7Sa2uhpafTR06fmdUp2YhP7qBOQfKxIahYes5OqyBY8S8EhDNaGGiG2LI4cOY93XX+OrjcvhNOclTJg1DDu9t8F9/UYcy89HDQUtHc/hbXtQOR2XlJDoINyzIGPGjPm3DevXH+FPa8oRwh7WDBdDcSl8QiJRVNcsEjktpLPModCnFyA2LgnV1VVQqyLEyIJcXd1h3969WPrFp3Bd8We4bRuGOWRaJy98Dbt2eSKEyC93Tlfgmf0Owj0jQib2h25ubhvy8vK+k2sse7DWUFKAcIF8NR+/EBwuq7PRdKz17iLDcBb+QTwv9aLw6/gdIvX19T0CT9hmf5AnVG8PXAGP3PHwzHsPHnnjsCNzIvRxKui0NvmHFARlZR1FSLiWApxIqDWRuGSXRMqEc3V1/V/plh3yLMj48ePfCg8Pv9jc1L2JZSddqQwT7xaOikuEKilLaLcHOXZt4tOdO/eF4ELDRZG1kZebJyG3S3DaUlJiElJTkrFl82Ys3zILnvljiXDj4MWkOzIB7tu+xuZNm8hsZ6GyvAIBwWFIzqsSv804dv4WduwLJXP9QGs7CPeMCk/5++qrrzJY09gSrCuwed2fniaSPHcFaVB0/rYgnLWj2GBqgb8qHgHKaEIUAm0QEEYQ65ESorBzTxB/gwJbtrtj+/ZNcP3kHXwWNKIdi/2GY9YcV2ylffxi7ekffYyUYzXtv2clu6HOjDDVg7R/B+GeYWETO2vmzNVZWVnf2pKrK9RU1wgTe/niJewJCEVG0Zn2hmciPPDxLBCasAOs82fvQnegCHv27saMVcOxOswJH61/DYv3jMQnnsMxbd0QrFA6YSr5dF/rxsFp2iAEK1Xg11nY1i8IR3UFinkmlmmbDsI9B+Lk5PS6QqEwyn1i0x48I587fqspik1KSYMyVkru7ECEh4PNYeT+QiiUAVgZPh5zdg7FF6FvY2ngcCzYMxwrtaMxa9urWBM3Fi4b/owlW8dAExktQziu6y5CbN5E6iDccyJkYn+xatWqJM78tSVYV+A8N45kq2tOY5d/GApOX4OB3+LZDdgUFxK0aXkIDQmG88I/wW3T6/jwy0GYuupVuG19De8v+hMW7n4T4+b+AUt938ZI5z9Co48hs00akv03JhqBNWrOyUsUKSe0X5eDcM+RAPjBxx9//JfMzMy7tuTqCvxtMO6zu9J4BcnJaUhOsiCJQdsd0F6eKhAaEgY/P1/s9NiBtRs3YYvHLmz18MZmwrYdPrTtTds7abkTHl4+VL4XpcY2lFpJR8tjZ29g++5A8VYA6zU5CPccyjvvvDM4ICDgXE/61djE8nyG6KgoMXzFiOoC1v0xUbSk47k7hD96ok7NEQRiMpWSibQQyrJUp5ImVOkRoYlBGCFcG02IgUoXI7TeNbs5GA7CPafC74hbsWJFFH/xxrZB+xrnamsRQebVOvfXHn6aZDFdUO5cOfA7Vxwdv8+xUOMtzMjIuCPXuH2Bc7VnhRaTIxuDX7R980bPXq3B0xgLCw1IOFp5odjYWldiaj1Pfl9KqenO1rL6lvUlJkbrluL6lmyKmJPoGM8SU/OGMmPzomJj02zat6SkvmVDibE1xGBsO1ZS16zi7fIG88xSU/ObJcbmNyouNo+ovNj2RqnR/KHB1Lqdjs0qNpqXl15q+w27JNJjc0hvZNSoUS/v27fvFHcCyzV0b1BLhNM8hHARKTkiIu54HneByOMYES45v0rqfuHggrti5KJoqYwzYsh02+9nc96+Lratpp7LeP2u6JJpP5eWRabWbw0NLTulx+aQ3gi/eHr58uWxPKjfsfF7ByYcazgrQWwhIlFTK3b5KXE4MwuXLzeK5IKb1693idycXKQQ4ez7BPsHHd0ACzFbI6RH5pC+EFcX1zkpKSnEFXkCPSoaL19GoD5d0hxysGiiA4az4jj+mPE+VUKX2BMej7zTPfy6T5/CkjvoIFw/yNi33/79nl3eJx726aWeotVshndghGgs+YZkWPfZLh8G23OfFByE61dZ5uLy4tKlS0OOV1b2aP5E12hFamo60gpPCb9IvjGfBzgI90Rk6pQp0xPiE5p68lXFhyFEqRafk5Lz5fofclqyK3R1nmXbQbgnIKNHj/5vDw+PsqtXH/4inO5w6FCmmJYYFn+YNN5ppBedIZxFRh+A60knP5DrTSmoeYB8m3Xrtn2ZLaz77Y5LlbbjMksTpMfikP4U/lIhRbK+ZWVlj21i+aPG/DkCY70R2dk5ItnySB8iKyubltmYPHmqZtiIt4YPG/Fun2Pk6LHDpEfikCchH3zwweTY2NibvX0nSX9iyZIl26XLdchAkDFjxvzXtm3bivgbXHIN3nfoKak7HvfZ4sU7pEt1yEAR/vw5vwXAUGToZRTb9yDT7yDcQBVnZ+cJkT18C8CTgoNwA1xGjhz5643r1iUogoPzrQgJVtCSEZwfLEGheFDWPRRSHQ/KrHXYl1tAZVw/wdXV9VO+rvT09B8zxEX2mbzwwv8Dqz2REX1DUHMAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img6"
                        ></image>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="1173079" height="571500" />
                        </clipPath>
                        <clipPath id="clip8">
                            <rect x="0" y="1.16415e-10" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip9">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img11"
                        ></image>
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
                        <clipPath id="clip16">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="-9.31323e-10" y="2.32831e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="2.32831e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip25">
                            <rect x="0" y="2.32831e-10" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip27">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip28">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip29">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip30">
                            <rect x="0" y="0" width="85725" height="200025" />
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
                            d="M318.26 131.982 318.024 73.5061 321.024 73.494 321.26 131.97ZM324.26 131.958C324.27 134.443 322.263 136.466 319.778 136.476 317.293 136.486 315.27 134.479 315.26 131.994 315.25 129.509 317.257 127.486 319.742 127.476 322.227 127.466 324.25 129.472 324.26 131.958ZM319.524 73.5 315.036 76.5181 319.5 67.5001 324.036 76.4819Z"
                            fill="#663300"
                        />
                        <path
                            d="M502.26 131.982 502.024 73.5061 505.024 73.494 505.26 131.97ZM508.26 131.958C508.27 134.443 506.263 136.466 503.778 136.476 501.293 136.486 499.27 134.479 499.26 131.994 499.25 129.509 501.257 127.486 503.742 127.476 506.227 127.466 508.25 129.472 508.26 131.958ZM503.524 73.5 499.036 76.5181 503.5 67.5001 508.036 76.4819Z"
                            fill="#663300"
                        />
                        <path
                            d="M1.5-2.68383e-06 1.5001 58.6775-1.49989 58.6775-1.5 2.68383e-06ZM4.5001 58.6775C4.50011 61.1628 2.48539 63.1775 0.000113038 63.1775-2.48517 63.1775-4.49989 61.1628-4.4999 58.6775-4.4999 56.1922-2.48518 54.1775 9.69354e-05 54.1775 2.48538 54.1775 4.5001 56.1922 4.5001 58.6775Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 645.5 348.178)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(544.728 125)"
                        >
                            СШ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(565.395 125)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(568.895 125)"
                        >
                            35 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(534.429 358)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(540.595 358)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(544.095 358)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(534.429 371)"
                        >
                            3,2 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(534.429 384)"
                        >
                            6кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(534.429 397)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(554.929 397)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(558.429 397)"
                        >
                            325/59
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(588.095 397)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(591.595 397)"
                        >
                            28
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(365.951 358)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(372.117 358)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(375.617 358)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(365.951 371)"
                        >
                            3,2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(381.951 371)"
                        >
                            МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(365.951 384)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(373.951 384)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(365.951 397)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(386.451 397)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(389.951 397)"
                        >
                            325/59
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(419.617 397)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(423.117 397)"
                        >
                            28
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
                            transform="translate(561.698 23)"
                        >
                            Иртишар ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(689.118 23)"
                        >
                            (ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(733.285 23)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(739.452 23)"
                        >
                            3Б)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1076.57 305)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1080.07 305)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1083.57 305)"
                        >
                            СШ 6 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(664.258 358)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(685.592 358)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(689.092 358)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(664.258 371)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(688.592 371)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(664.258 384)"
                        >
                            180кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(664.258 397)"
                        >
                            ТМ 180/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(580.942 180)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(588.108 180)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(591.608 180)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(598.108 180)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(601.608 180)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(606.942 180)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(610.442 180)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(584.369 225)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(590.869 225)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(594.369 225)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(584.369 238)"
                        >
                            7500
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(608.369 238)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(584.369 251)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(600.369 251)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(603.869 251)"
                        >
                            7500/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(956.142 211)"
                        >
                            Фидер 68
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(939.991 450)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(946.158 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(949.658 450)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(939.991 463)"
                        >
                            0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(955.991 463)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(939.991 476)"
                        >
                            220
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(958.658 476)"
                        >
                            кВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(939.991 489)"
                        >
                            SFWE
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(968.491 489)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(971.991 489)"
                        >
                            W250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(997.991 489)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1001.49 489)"
                        >
                            12/850
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(930.514 358)"
                        >
                            ТМГ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(930.514 371)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(935.848 371)"
                        >
                            /0,4 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(930.514 384)"
                        >
                            400кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(930.514 397)"
                        >
                            ТМГ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(952.681 397)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(956.181 397)"
                        >
                            400
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(295.347 61)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(302.513 61)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(306.013 61)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(326.347 61)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(329.847 61)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(335.18 61)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(338.68 61)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(333.479 101)"
                        >
                            B
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(340.646 101)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(344.146 101)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(351.313 101)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(354.813 101)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(360.146 101)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(363.646 101)"
                        >
                            2
                        </text>
                        <rect id="c925"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 310.5 107.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(478.556 60)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(485.723 60)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(489.223 60)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(509.556 60)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(513.056 60)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(518.39 60)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(521.89 60)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(517.161 99)"
                        >
                            B
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(524.327 99)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(527.827 99)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(534.994 99)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(538.494 99)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(543.827 99)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(547.327 99)"
                        >
                            1
                        </text>
                        <rect id="c910"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 494.5 106.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(788.283 210)"
                        >
                            Фидер Тор
                        </text>
                        <rect id="c985"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 805.5 265.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(990.536 261)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(997.703 261)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1001.2 261)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1009.7 261)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1013.2 261)"
                        >
                            68
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(826.408 260)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(833.574 260)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(837.074 260)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(845.574 260)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(849.074 260)"
                        >
                            Т
                        </text>
                        <rect id="c940"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 635.5 328.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(173.795 362)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(195.128 362)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(198.628 362)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(173.795 375)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(198.128 375)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(173.795 388)"
                        >
                            180кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(173.795 401)"
                        >
                            ТМ 180/6
                        </text>
                        <path
                            d="M0 0 947.721 1.49312"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1212.22 287.5)"
                        />
                        <path
                            d="M338.352 349.532 338 288.509 341 288.491 341.352 349.515ZM335 288.526C334.986 286.041 336.989 284.014 339.474 284 341.959 283.986 343.986 285.989 344 288.474 344.014 290.959 342.011 292.986 339.526 293 337.041 293.014 335.014 291.011 335 288.526Z"
                            fill="#006600"
                        />
                        <path id="c9402"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#989898"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 630.5 402.5)"
                        />
                        <path id="c9401"
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 629.5 379.5)"
                        />
                        <path
                            d="M647 404.5 647 451.756 644 451.756 644 404.5ZM645.5 451.756 650 448.756 645.5 457.756 641 448.756Z"
                            fill="#989898"
                        />
                        <path
                            d="M0 0 0.000104987 42.6861"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 910.5 445.186)"
                        />
                        <path
                            d="M0 0 0.213753 23.8556"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 814.5 289.356)"
                        />
                        <path
                            d="M1.5-5.80853e-06 1.5001 27.1119-1.49989 27.1119-1.5 5.80853e-06ZM-4.5 1.74256e-05C-4.50001-2.48526-2.4853-4.49999-1.74256e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.74256e-05 4.50001 2.48526 2.4853 4.49999 1.74256e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.74256e-05Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 565.5 288.612)"
                        />
                        <path
                            d="M0 0 0.000104987 19.8294"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 814.5 247.329)"
                        />
                        <path
                            d="M816 221.5 816 229.291 813 229.291 813 221.5ZM814.5 221.5 810 224.5 814.5 215.5 819 224.5Z"
                            fill="#006600"
                        />
                        <path
                            d="M1.51179 5.99708 1.64404 73.2705-1.35596 73.2764-1.4882 6.00298ZM0.0117949 5.99999-4.4823 9.00883 0 0 4.51768 8.99114ZM4.64403 73.2646C4.64892 75.7499 2.63816 77.7686 0.152888 77.7735-2.33239 77.7784-4.35106 75.7676-4.35595 73.2823-4.36083 70.7971-2.35008 68.7784 0.135196 68.7735 2.62047 68.7686 4.63915 70.7794 4.64403 73.2646Z"
                            fill="#006600"
                            transform="matrix(-1 0 0 1 978.644 216.5)"
                        />
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 550.5 262.5)"
                        />
                        <path
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 550.5 236.5)"
                        />
                        <path
                            d="M1.5-2.14164e-06 1.5001 73.5325-1.49989 73.5325-1.5 2.14164e-06ZM4.5001 73.5325C4.50011 76.0178 2.48539 78.0325 0.000111412 78.0325-2.48517 78.0325-4.49989 76.0178-4.4999 73.5325-4.4999 71.0472-2.48518 69.0325 9.85619e-05 69.0325 2.48538 69.0325 4.5001 71.0472 4.5001 73.5325Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 565.5 206.033)"
                        />
                        <path
                            d="M0 0 351.507 0.000104987"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 591.007 132.5)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 555.5 185.5)"
                        />
                        <rect id="c880"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 330.5 327.5)"
                        />
                        <path
                            d="M506.352 348.532 506 287.509 509 287.491 509.352 348.515ZM503 287.526C502.986 285.041 504.989 283.014 507.474 283 509.959 282.986 511.986 284.989 512 287.474 512.014 289.959 510.011 291.986 507.526 292 505.041 292.014 503.014 290.011 503 287.526Z"
                            fill="#006600"
                        />
                        <rect id="c895"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 498.5 326.5)"
                        />
                        <path
                            d="M1.5-2.60293e-06 1.5001 60.5012-1.49989 60.5012-1.5 2.60293e-06ZM4.5001 60.5012C4.50011 62.9865 2.48539 65.0012 0.000112796 65.0012-2.48517 65.0012-4.49989 62.9865-4.4999 60.5012-4.4999 58.0159-2.48518 56.0012 9.71781e-05 56.0012 2.48538 56.0012 4.5001 58.0159 4.5001 60.5012Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 151.5 350.001)"
                        />
                        <rect id="c955"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 142.5 328.5)"
                        />
                        <path id="c9552"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#989898"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 136.5 403.5)"
                        />
                        <path id="c9551"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 136.5 380.5)"
                        />
                        <path
                            d="M153 404.5 153 435.9 150 435.9 150 404.5ZM151.5 435.9 156 432.9 151.5 441.9 147 432.9Z"
                            fill="#989898"
                        />
                        <path
                            d="M1.5-2.68383e-06 1.5001 58.6775-1.49989 58.6775-1.5 2.68383e-06ZM4.5001 58.6775C4.50011 61.1628 2.48539 63.1775 0.000113038 63.1775-2.48517 63.1775-4.49989 61.1628-4.4999 58.6775-4.4999 56.1922-2.48518 54.1775 9.69354e-05 54.1775 2.48538 54.1775 4.5001 56.1922 4.5001 58.6775Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 910.5 347.178)"
                        />
                        <rect id="c1029"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 901.5 327.5)"
                        />
                        <path id="c10292"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#989898"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 895.5 402.5)"
                        />
                        <path id="c10291"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 895.5 378.5)"
                        />
                        <rect id="c10293"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 901.5 432.5)"
                        />
                        <path
                            d="M291.146 407.635 384.254 407.635 384.254 420.435 291.146 420.435Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M291.146 420.435 384.254 420.435 384.254 433.235 291.146 433.235Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M291.146 433.235 384.254 433.235 384.254 446.035 291.146 446.035Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M291.146 446.035 384.254 446.035 384.254 458.835 291.146 458.835Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M291.146 458.835 384.254 458.835 384.254 471.635 291.146 471.635Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M291.146 471.635 384.254 471.635 384.254 484.435 291.146 484.435Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.479 420.435 384.921 420.435"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.479 433.235 384.921 433.235"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.479 446.035 384.921 446.035"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.479 458.835 384.921 458.835"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.479 471.635 384.921 471.635"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M291.146 406.968 291.146 485.102"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M384.254 406.968 384.254 485.102"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.479 407.635 384.921 407.635"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.479 484.435 384.921 484.435"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g880"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(294.925 418)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g881"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(294.925 430)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a880"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(294.925 443)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k880"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(294.925 456)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n880"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(294.925 469)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w880" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(294.925 482)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M462.744 405.97 555.852 405.97 555.852 418.77 462.744 418.77Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.744 418.77 555.852 418.77 555.852 431.57 462.744 431.57Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.744 431.57 555.852 431.57 555.852 444.37 462.744 444.37Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.744 444.37 555.852 444.37 555.852 457.17 462.744 457.17Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.744 457.17 555.852 457.17 555.852 469.97 462.744 469.97Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.744 469.97 555.852 469.97 555.852 482.77 462.744 482.77Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.078 418.77 556.519 418.77"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.078 431.57 556.519 431.57"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.078 444.37 556.519 444.37"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.078 457.17 556.519 457.17"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.078 469.97 556.519 469.97"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.744 405.304 462.744 483.437"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M555.852 405.304 555.852 483.437"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.078 405.97 556.519 405.97"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M462.078 482.77 556.519 482.77"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g895"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(466.524 416)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g896"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(466.524 429)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a895"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(466.524 442)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k895"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(466.524 454)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n895"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(466.524 467)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w895" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(466.524 480)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M864.674 498.227 961.584 498.227 961.584 511.027 864.674 511.027Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.674 511.027 961.584 511.027 961.584 523.827 864.674 523.827Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.674 523.827 961.584 523.827 961.584 536.627 864.674 536.627Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.674 536.627 961.584 536.627 961.584 549.427 864.674 549.427Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.674 549.427 961.584 549.427 961.584 562.227 864.674 562.227Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.674 562.227 961.584 562.227 961.584 575.027 864.674 575.027Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.007 511.027 962.251 511.027"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.007 523.827 962.251 523.827"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.007 536.627 962.251 536.627"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.007 549.427 962.251 549.427"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.007 562.227 962.251 562.227"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.674 497.56 864.674 575.693"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M961.584 497.56 961.584 575.693"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.007 498.227 962.251 498.227"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M864.007 575.027 962.251 575.027"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1029"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(868.453 508)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1031"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(868.453 521)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a1029"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(868.453 534)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k1029"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(868.453 547)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n1029"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(868.453 559)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w1029" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(868.453 572)"
                            >
                                Qвода
                            </text>
                        </g>
                        <rect id="c970"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 969.5 267.5)"
                        />
                        <rect
                            x="841.5"
                            y="293.5"
                            width="413"
                            height="288"
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
                            font-size="13"
                            transform="translate(1149.33 310)"
                        >
                            Микро ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(1221.83 310)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="13"
                            transform="translate(1226.33 310)"
                        >
                            3Б)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1127.82 206)"
                        >
                            Фидер Пардаев
                        </text>
                        <path
                            d="M1.51179 5.99708 1.64404 73.2705-1.35596 73.2764-1.4882 6.00298ZM0.0117949 5.99999-4.4823 9.00883 0 0 4.51768 8.99114ZM4.64403 73.2646C4.64892 75.7499 2.63816 77.7686 0.152888 77.7735-2.33239 77.7784-4.35106 75.7676-4.35595 73.2823-4.36083 70.7971-2.35008 68.7784 0.135196 68.7735 2.62047 68.7686 4.63915 70.7794 4.64403 73.2646Z"
                            fill="#006600"
                            transform="matrix(-1 0 0 1 1163.64 214.5)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 1154.5 262.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1178.38 258)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1185.55 258)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1189.05 258)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1197.55 258)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1201.05 258)"
                        >
                            Пардаев
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="12"
                            transform="translate(154.239 258)"
                        >
                            Фидер
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="12"
                            transform="translate(190.739 258)"
                        >
                            Иртишар
                        </text>
                        <path
                            d="M234.407 288.5 76.5 288.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <rect
                            x="58.5001"
                            y="244.5"
                            width="191"
                            height="220"
                            stroke="#172C51"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            stroke-dasharray="5.33333 4"
                            fill="none"
                        />
                        <path id="c8801"
                            d="M315.5 374C315.5 360.469 326.469 349.5 340 349.5 353.531 349.5 364.5 360.469 364.5 374 364.5 387.531 353.531 398.5 340 398.5 326.469 398.5 315.5 387.531 315.5 374Z"
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
                                        d="M339.689 366.933 340.622 366.933 341.944 367.167 343.033 367.633 343.889 368.178 344.9 369.189 345.522 370.122 345.989 371.367 346.144 372.067 346.144 373.933 345.833 375.1 345.211 376.344 344.589 377.122 344.044 377.667 342.956 378.367 341.711 378.833 340.933 378.989 339.378 378.989 338.133 378.678 337.278 378.289 336.422 377.744 335.567 376.967 335.022 376.189 334.478 375.1 334.167 373.856 334.089 372.922 334.244 371.678 334.556 370.667 335.178 369.5 336.033 368.567 336.656 368.022 337.978 367.322 339.144 367.011Z"
                                    />
                                    <path
                                        d="M340.156 353.089 341.011 353.089 342.489 353.322 343.967 353.789 345.211 354.411 346.144 355.033 346.922 355.733 347.856 356.667 348.711 357.911 349.333 359.156 349.8 360.556 350.033 361.722 350.111 362.344 350.111 363.822 349.878 365.3 349.489 366.622 348.867 367.944 348.089 369.033 347.933 369.033 347.311 367.944 346.378 366.856 345.522 366.078 344.433 365.378 343.267 364.833 341.944 364.444 340.156 364.211Z"
                                    />
                                    <path
                                        d="M327.4 368.878 327.789 368.956 329.967 370.2 331.522 371.133 331.6 371.289 331.444 372.922 331.6 374.556 331.989 376.033 332.533 377.2 332.533 377.433 330.356 378.678 328.489 379.767 324.444 382.1 323.122 382.878 322.889 382.878 322.189 381.4 321.8 380.078 321.644 379.144 321.567 377.822 321.722 376.344 321.956 375.256 322.5 373.778 323.044 372.767 323.744 371.756 324.678 370.744 325.533 369.967 326.933 369.111Z"
                                    />
                                    <path
                                        d="M347.7 377.433 348.089 377.511 349.956 378.6 356.022 382.1 357.344 382.878 357.189 383.267 356.644 384.044 355.944 384.9 355.4 385.444 354.233 386.3 352.989 387 351.511 387.544 350.344 387.778 349.878 387.856 347.544 387.856 346.378 387.622 345.133 387.233 343.811 386.611 342.878 385.989 342.878 381.322 343.578 381.011 344.9 380.311 345.833 379.611 346.922 378.522Z"
                                    />
                                    <path
                                        d="M330.667 358.067 332.378 358.067 333.856 358.3 335.489 358.844 336.811 359.544 337.433 359.933 337.433 364.678 336.033 365.3 334.944 366 334.089 366.7 333.544 367.244 332.611 368.567 332.144 368.411 330.822 367.633 324.756 364.133 323.044 363.122 322.967 362.967 323.511 362.111 324.367 361.1 324.989 360.478 326.156 359.622 327.244 359 328.722 358.456 329.578 358.222Z"
                                    />
                                    <path
                                        d="M334.167 379.533 334.478 379.611 335.644 380.467 336.967 381.089 338.211 381.478 339.144 381.633 340.078 381.711 340.156 381.789 340.156 392.833 338.989 392.833 337.433 392.522 336.111 392.056 334.711 391.278 333.7 390.5 332.922 389.8 332.144 388.867 331.367 387.622 330.744 386.222 330.356 384.744 330.2 383.344 330.2 382.489 330.278 381.789 332.222 380.7 333.544 379.922Z"
                                    />
                                    <path
                                        d="M357.267 363.044 357.422 363.044 357.967 364.133 358.433 365.533 358.667 366.778 358.744 368.333 358.589 369.733 358.278 371.056 357.656 372.533 357.111 373.467 356.489 374.322 355.633 375.256 354.467 376.189 353.456 376.811 352.756 377.122 350.811 376.033 348.944 374.944 348.711 374.789 348.867 373.389 348.867 372.222 349.567 371.522 350.578 370.2 351.278 369.033 351.978 367.556 352.522 365.844 353.222 365.378 355.167 364.289 357.033 363.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c8951"
                            d="M482.5 374C482.5 360.469 493.469 349.5 507 349.5 520.531 349.5 531.5 360.469 531.5 374 531.5 387.531 520.531 398.5 507 398.5 493.469 398.5 482.5 387.531 482.5 374Z"
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
                                        d="M506.689 366.933 507.622 366.933 508.944 367.167 510.033 367.633 510.889 368.178 511.9 369.189 512.522 370.122 512.989 371.367 513.144 372.067 513.144 373.933 512.833 375.1 512.211 376.344 511.589 377.122 511.044 377.667 509.956 378.367 508.711 378.833 507.933 378.989 506.378 378.989 505.133 378.678 504.278 378.289 503.422 377.744 502.567 376.967 502.022 376.189 501.478 375.1 501.167 373.856 501.089 372.922 501.244 371.678 501.556 370.667 502.178 369.5 503.033 368.567 503.656 368.022 504.978 367.322 506.144 367.011Z"
                                    />
                                    <path
                                        d="M507.156 353.089 508.011 353.089 509.489 353.322 510.967 353.789 512.211 354.411 513.144 355.033 513.922 355.733 514.856 356.667 515.711 357.911 516.333 359.156 516.8 360.556 517.033 361.722 517.111 362.344 517.111 363.822 516.878 365.3 516.489 366.622 515.867 367.944 515.089 369.033 514.933 369.033 514.311 367.944 513.378 366.856 512.522 366.078 511.433 365.378 510.267 364.833 508.944 364.444 507.156 364.211Z"
                                    />
                                    <path
                                        d="M494.4 368.878 494.789 368.956 496.967 370.2 498.522 371.133 498.6 371.289 498.444 372.922 498.6 374.556 498.989 376.033 499.533 377.2 499.533 377.433 497.356 378.678 495.489 379.767 491.444 382.1 490.122 382.878 489.889 382.878 489.189 381.4 488.8 380.078 488.644 379.144 488.567 377.822 488.722 376.344 488.956 375.256 489.5 373.778 490.044 372.767 490.744 371.756 491.678 370.744 492.533 369.967 493.933 369.111Z"
                                    />
                                    <path
                                        d="M514.7 377.433 515.089 377.511 516.956 378.6 523.022 382.1 524.344 382.878 524.189 383.267 523.644 384.044 522.944 384.9 522.4 385.444 521.233 386.3 519.989 387 518.511 387.544 517.344 387.778 516.878 387.856 514.544 387.856 513.378 387.622 512.133 387.233 510.811 386.611 509.878 385.989 509.878 381.322 510.578 381.011 511.9 380.311 512.833 379.611 513.922 378.522Z"
                                    />
                                    <path
                                        d="M497.667 358.067 499.378 358.067 500.856 358.3 502.489 358.844 503.811 359.544 504.433 359.933 504.433 364.678 503.033 365.3 501.944 366 501.089 366.7 500.544 367.244 499.611 368.567 499.144 368.411 497.822 367.633 491.756 364.133 490.044 363.122 489.967 362.967 490.511 362.111 491.367 361.1 491.989 360.478 493.156 359.622 494.244 359 495.722 358.456 496.578 358.222Z"
                                    />
                                    <path
                                        d="M501.167 379.533 501.478 379.611 502.644 380.467 503.967 381.089 505.211 381.478 506.144 381.633 507.078 381.711 507.156 381.789 507.156 392.833 505.989 392.833 504.433 392.522 503.111 392.056 501.711 391.278 500.7 390.5 499.922 389.8 499.144 388.867 498.367 387.622 497.744 386.222 497.356 384.744 497.2 383.344 497.2 382.489 497.278 381.789 499.222 380.7 500.544 379.922Z"
                                    />
                                    <path
                                        d="M524.267 363.044 524.422 363.044 524.967 364.133 525.433 365.533 525.667 366.778 525.744 368.333 525.589 369.733 525.278 371.056 524.656 372.533 524.111 373.467 523.489 374.322 522.633 375.256 521.467 376.189 520.456 376.811 519.756 377.122 517.811 376.033 515.944 374.944 515.711 374.789 515.867 373.389 515.867 372.222 516.567 371.522 517.578 370.2 518.278 369.033 518.978 367.556 519.522 365.844 520.222 365.378 522.167 364.289 524.033 363.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c10294"
                            d="M886.5 469C886.5 455.469 897.469 444.5 911 444.5 924.531 444.5 935.5 455.469 935.5 469 935.5 482.531 924.531 493.5 911 493.5 897.469 493.5 886.5 482.531 886.5 469Z"
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
                                        d="M910.689 461.933 911.622 461.933 912.944 462.167 914.033 462.633 914.889 463.178 915.9 464.189 916.522 465.122 916.989 466.367 917.144 467.067 917.144 468.933 916.833 470.1 916.211 471.344 915.589 472.122 915.044 472.667 913.956 473.367 912.711 473.833 911.933 473.989 910.378 473.989 909.133 473.678 908.278 473.289 907.422 472.744 906.567 471.967 906.022 471.189 905.478 470.1 905.167 468.856 905.089 467.922 905.244 466.678 905.556 465.667 906.178 464.5 907.033 463.567 907.656 463.022 908.978 462.322 910.144 462.011Z"
                                    />
                                    <path
                                        d="M911.156 448.089 912.011 448.089 913.489 448.322 914.967 448.789 916.211 449.411 917.144 450.033 917.922 450.733 918.856 451.667 919.711 452.911 920.333 454.156 920.8 455.556 921.033 456.722 921.111 457.344 921.111 458.822 920.878 460.3 920.489 461.622 919.867 462.944 919.089 464.033 918.933 464.033 918.311 462.944 917.378 461.856 916.522 461.078 915.433 460.378 914.267 459.833 912.944 459.444 911.156 459.211Z"
                                    />
                                    <path
                                        d="M898.4 463.878 898.789 463.956 900.967 465.2 902.522 466.133 902.6 466.289 902.444 467.922 902.6 469.556 902.989 471.033 903.533 472.2 903.533 472.433 901.356 473.678 899.489 474.767 895.444 477.1 894.122 477.878 893.889 477.878 893.189 476.4 892.8 475.078 892.644 474.144 892.567 472.822 892.722 471.344 892.956 470.256 893.5 468.778 894.044 467.767 894.744 466.756 895.678 465.744 896.533 464.967 897.933 464.111Z"
                                    />
                                    <path
                                        d="M918.7 472.433 919.089 472.511 920.956 473.6 927.022 477.1 928.344 477.878 928.189 478.267 927.644 479.044 926.944 479.9 926.4 480.444 925.233 481.3 923.989 482 922.511 482.544 921.344 482.778 920.878 482.856 918.544 482.856 917.378 482.622 916.133 482.233 914.811 481.611 913.878 480.989 913.878 476.322 914.578 476.011 915.9 475.311 916.833 474.611 917.922 473.522Z"
                                    />
                                    <path
                                        d="M901.667 453.067 903.378 453.067 904.856 453.3 906.489 453.844 907.811 454.544 908.433 454.933 908.433 459.678 907.033 460.3 905.944 461 905.089 461.7 904.544 462.244 903.611 463.567 903.144 463.411 901.822 462.633 895.756 459.133 894.044 458.122 893.967 457.967 894.511 457.111 895.367 456.1 895.989 455.478 897.156 454.622 898.244 454 899.722 453.456 900.578 453.222Z"
                                    />
                                    <path
                                        d="M905.167 474.533 905.478 474.611 906.644 475.467 907.967 476.089 909.211 476.478 910.144 476.633 911.078 476.711 911.156 476.789 911.156 487.833 909.989 487.833 908.433 487.522 907.111 487.056 905.711 486.278 904.7 485.5 903.922 484.8 903.144 483.867 902.367 482.622 901.744 481.222 901.356 479.744 901.2 478.344 901.2 477.489 901.278 476.789 903.222 475.7 904.544 474.922Z"
                                    />
                                    <path
                                        d="M928.267 458.044 928.422 458.044 928.967 459.133 929.433 460.533 929.667 461.778 929.744 463.333 929.589 464.733 929.278 466.056 928.656 467.533 928.111 468.467 927.489 469.322 926.633 470.256 925.467 471.189 924.456 471.811 923.756 472.122 921.811 471.033 919.944 469.944 919.711 469.789 919.867 468.389 919.867 467.222 920.567 466.522 921.578 465.2 922.278 464.033 922.978 462.556 923.522 460.844 924.222 460.378 926.167 459.289 928.033 458.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M602.844 464.235 686.443 464.235 686.443 477.826 602.844 477.826Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M602.844 463.568 602.844 478.492"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M686.443 463.568 686.443 478.492"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M602.177 464.235 687.11 464.235"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M602.177 477.826 687.11 477.826"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g940"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(605.51 474)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 678 465)"
                        >
                            <g clip-path="url(#clip2)" transform="matrix(1 0 0 1.02857 -0.5 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M110.538 445.717 194.138 445.717 194.138 459.309 110.538 459.309Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M110.538 445.051 110.538 459.975"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M194.138 445.051 194.138 459.975"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M109.871 445.717 194.804 445.717"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M109.871 459.309 194.804 459.309"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g955"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(113.205 456)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip3)"
                            transform="matrix(0.000104987 0 0 0.000104987 186 446)"
                        >
                            <g clip-path="url(#clip4)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M224.748 136.615 300.021 136.615 300.021 149.415 224.748 149.415Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M224.748 135.949 224.748 150.082"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M300.021 135.949 300.021 150.082"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M224.081 136.615 300.688 136.615"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M224.081 149.415 300.688 149.415"
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
                                transform="translate(228.527 147)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M1061.02 271.024 1136.29 271.024 1136.29 283.824 1061.02 283.824Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1061.02 270.357 1061.02 284.491"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1136.29 270.357 1136.29 284.491"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1060.35 271.024 1136.96 271.024"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1060.35 283.824 1136.96 283.824"
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
                                transform="translate(1064.8 281)"
                            >
                                U
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip5)"
                            transform="matrix(0.000104987 0 0 0.000104987 1043 44)"
                        >
                            <g clip-path="url(#clip7)" transform="scale(1.01496 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1065.17 39.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1163.5 93.1712)"
                        />
                        <path
                            d="M1161.55 106.031 1153.86 97.6543 1154.35 97.2035 1162.04 105.58ZM1154.11 97.4289 1153.95 101.197 1150.5 93.5001 1157.87 97.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1170.95 105.889 1161.5 105.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1068.78 25.7485 1163.14 25.7485 1163.14 38.5485 1068.78 38.5485Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1068.78 25.0818 1068.78 39.2151"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1163.14 25.0818 1163.14 39.2151"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1068.11 25.7485 1163.81 25.7485"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1068.11 38.5485 1163.81 38.5485"
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
                                transform="translate(1072.55 36)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1083.05 36)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1064.5 39.5001 1083.69 39.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1171.27 92.8321 1258.93 92.8321 1258.93 105.632 1171.27 105.632Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1171.27 92.1655 1171.27 106.299"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1258.93 92.1655 1258.93 106.299"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1170.6 92.8321 1259.59 92.8321"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1170.6 105.632 1259.59 105.632"
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
                                transform="translate(1175.05 103)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1185.55 103)"
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
                            transform="matrix(1 0 0 -1 1061.5 47.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1170.99 65.5001)"
                        />
                        <path
                            d="M1171.5 65.5001 1190.69 65.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1175.46 52.6486 1248.66 52.6486 1248.66 65.4486 1175.46 65.4486Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1175.46 51.9819 1175.46 66.1153"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1248.66 51.9819 1248.66 66.1153"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.8 52.6486 1249.33 52.6486"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.8 65.4486 1249.33 65.4486"
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
                                transform="translate(1179.24 63)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1147.5 93.5001 1170.21 93.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.139 85.0103 303.738 85.0103 303.738 98.6015 220.139 98.6015Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.139 98.6015 303.738 98.6015 303.738 112.193 220.139 112.193Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M219.472 98.6015 304.405 98.6015"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M220.139 84.3436 220.139 112.859"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M303.738 84.3436 303.738 112.859"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M219.472 85.0103 304.405 85.0103"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M219.472 112.193 304.405 112.193"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g925Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(222.806 95)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g925Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(222.806 109)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip8)"
                            transform="matrix(0.000104987 0 0 0.000104987 295 86)"
                        >
                            <g
                                clip-path="url(#clip9)"
                                transform="matrix(1.16667 0 0 1 -0.25 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 296 99)"
                        >
                            <g clip-path="url(#clip12)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M403.823 83.5538 487.423 83.5538 487.423 97.145 403.823 97.145Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M403.823 97.145 487.423 97.145 487.423 110.736 403.823 110.736Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M403.157 97.145 488.09 97.145"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M403.823 82.8871 403.823 111.403"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M487.423 82.8871 487.423 111.403"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M403.157 83.5538 488.09 83.5538"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M403.157 110.736 488.09 110.736"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g910Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(406.49 94)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g910Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(406.49 107)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip13)"
                            transform="matrix(0.000104987 0 0 0.000104987 479 84)"
                        >
                            <g clip-path="url(#clip14)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip15)"
                            transform="matrix(0.000104987 0 0 0.000104987 480 98)"
                        >
                            <g clip-path="url(#clip16)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M767.489 167.798 851.089 167.798 851.089 181.389 767.489 181.389Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M767.489 181.389 851.089 181.389 851.089 194.98 767.489 194.98Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M766.822 181.389 851.755 181.389"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M767.489 167.131 767.489 195.647"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M851.089 167.131 851.089 195.647"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M766.822 167.798 851.755 167.798"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M766.822 194.98 851.755 194.98"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g985Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(770.156 178)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g985Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(770.156 191)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip17)"
                            transform="matrix(0.000104987 0 0 0.000104987 843 168)"
                        >
                            <g clip-path="url(#clip18)" transform="matrix(1 0 0 1.02857 -0.5 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip19)"
                            transform="matrix(0.000104987 0 0 0.000104987 843 182)"
                        >
                            <g clip-path="url(#clip20)" transform="matrix(1 0 0 1.02857 -0.5 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M928.712 166.689 1012.31 166.689 1012.31 180.28 928.712 180.28Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M928.712 180.28 1012.31 180.28 1012.31 193.871 928.712 193.871Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M928.045 180.28 1012.98 180.28"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M928.712 166.022 928.712 194.538"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1012.31 166.022 1012.31 194.538"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M928.045 166.689 1012.98 166.689"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M928.045 193.871 1012.98 193.871"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g970Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(931.378 177)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g970Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(931.378 190)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip21)"
                            transform="matrix(0.000104987 0 0 0.000104987 1004 167)"
                        >
                            <g clip-path="url(#clip22)" transform="matrix(1 0 0 1.02857 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip23)"
                            transform="matrix(0.000104987 0 0 0.000104987 1005 181)"
                        >
                            <g clip-path="url(#clip24)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1114.17 166.182 1197.77 166.182 1197.77 179.773 1114.17 179.773Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1114.17 179.773 1197.77 179.773 1197.77 193.364 1114.17 193.364Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1113.5 179.773 1198.43 179.773"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1114.17 165.515 1114.17 194.031"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1197.77 165.515 1197.77 194.031"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1113.5 166.182 1198.43 166.182"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1113.5 193.364 1198.43 193.364"
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
                                transform="translate(1116.83 176)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(1116.83 190)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip25)"
                            transform="matrix(0.000104987 0 0 0.000104987 1189 167)"
                        >
                            <g clip-path="url(#clip26)" transform="matrix(1.16667 0 0 1 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip27)"
                            transform="matrix(0.000104987 0 0 0.000104987 1190 180)"
                        >
                            <g clip-path="url(#clip28)" transform="matrix(1 0 0 1.11429 -1 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M19.5001 549C19.5001 543.753 23.7533 539.5 29.0001 539.5 34.2468 539.5 38.5001 543.753 38.5001 549 38.5001 554.247 34.2468 558.5 29.0001 558.5 23.7533 558.5 19.5001 554.247 19.5001 549Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M19.5001 571C19.5001 565.753 23.7533 561.5 29.0001 561.5 34.2468 561.5 38.5001 565.753 38.5001 571 38.5001 576.247 34.2468 580.5 29.0001 580.5 23.7533 580.5 19.5001 576.247 19.5001 571Z"
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
                            transform="translate(44.5616 551)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(44.4788 573)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M19 526.5C19 521.253 23.2533 517 28.5 517 33.7467 517 38 521.253 38 526.5 38 531.747 33.7467 536 28.5 536 23.2533 536 19 531.747 19 526.5Z"
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
                            transform="translate(44.4788 529)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(44.7437 506)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(44.479 483)"
                        >
                            прием
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 24 471)">
                            <g clip-path="url(#clip29)" transform="scale(1.05 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 24 493)">
                            <g clip-path="url(#clip30)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(2198.08 2198.08)"
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

    <?= $dashboard->GesDashboard([$id, $idTwo], "chartdiv2")?>

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

        fetch('/samarqand/server3b')
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
                    if (item.id === 925) {
                        const plus = document.getElementById("g925Plus");
                        const minus = document.getElementById("g925Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(925);
                        } else {
                            falseAnimation(925);
                        }
                    } else if (item.id === 910) {
                        const plus = document.getElementById("g910Plus");
                        const minus = document.getElementById("g910Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(910);
                        } else {
                            falseAnimation(910);
                        }
                    } else if (item.id === 985) {
                        const plus = document.getElementById("g985Plus");
                        const minus = document.getElementById("g985Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(985);
                        } else {
                            falseAnimation(985);
                        }
                    } else if (item.id === 970) {
                        const plus = document.getElementById("g970Plus");
                        const minus = document.getElementById("g970Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(970);
                        } else {
                            falseAnimation(970);
                        }
                    } else if(item.id === 940) {
                        const value = document.getElementById("g940");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(940);
                            trueAnimation(9401);
                            trueAnimation(9402);
                        } else {
                            falseAnimation(940);
                            falseAnimation(9401);
                            falseAnimation(9402);
                        }
                    } else if(item.id === 955) {
                        const value = document.getElementById("g955");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(955);
                            trueAnimation(9551);
                            trueAnimation(9552);
                        } else {
                            falseAnimation(955);
                            falseAnimation(9551);
                            falseAnimation(9552);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 880) {
                        const value = document.getElementById("g880");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a880");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 3.2 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(880);
                            trueAnimation(8801);
                        } else {
                            falseAnimation(880);
                            falseAnimation(8801);
                        }
                    } else if(item.id === 881) {
                        const value = document.getElementById("g881");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 882) {
                        const value = document.getElementById("k880");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 883) {
                        const value = document.getElementById("n880");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 884) {
                        const value = document.getElementById("w880");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 895) {
                        const value = document.getElementById("g895");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a895");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 3.2 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(895);
                            trueAnimation(8951);
                        } else {
                            falseAnimation(895);
                            falseAnimation(8951);
                        }
                    } else if(item.id === 896) {
                        const value = document.getElementById("g896");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 897) {
                        const value = document.getElementById("k895");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 898) {
                        const value = document.getElementById("n895");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 899) {
                        const value = document.getElementById("w895");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 1029) {
                        const value = document.getElementById("g1029");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a1029");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 0.22 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(1029);
                            trueAnimation(10291);
                            trueAnimation(10292);
                            trueAnimation(10293);
                            trueAnimation(10294);
                        } else {
                            falseAnimation(1029);
                            falseAnimation(10291);
                            falseAnimation(10292);
                            falseAnimation(10293);
                            falseAnimation(10294);
                        }
                    } else if(item.id === 1031) {
                        const value = document.getElementById("g1031");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 1032) {
                        const value = document.getElementById("k1029");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 1033) {
                        const value = document.getElementById("n1029");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 1034) {
                        const value = document.getElementById("w1029");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
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
            })
            .catch(error => console.error('Error:', error));
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