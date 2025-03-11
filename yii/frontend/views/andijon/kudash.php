<?php
use yii\helpers\Html;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;
use yii\helpers\Url;
use frontend\controllers\Energy;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Кудаш ГЭС';
$energy = new Energy();
$id = 60;
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
        <li class="breadcrumb-item"><a href="<?= Url::to(['andijon/index']) ?>">"Андижон ГЭС" Филиали</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= Html::encode($this->title) ?></li>
    </ol>
</nav>
<div class="col-xl-12 col-xxl-12">
    <div class="card mb-3" style="backdrop-filter: blur(15px);">
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
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="active">0 кВт </p>
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
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="activeOut">0 кВт </p>
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
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="activeIn">0 кВт</p>
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
<div class="card mb-2" style="backdrop-filter: blur(15px);">
    <div class="card-body">
        <div class="row align-items-center g-3">
            <div class="col-12 col-sm-auto flex-1">
                <svg
                    style="z-index: 1"
                    width="100%"
                    viewBox="0 0 1300 480"
                    height="100%"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    overflow="hidden"
                >
                    <defs>
                        <clipPath id="clip0">
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7V0JVFRXmk73TE93umemz/TMnD7T0zM9p8+ZnnO6J53uGJdEE2NiUKPEqEjUGMUlxiUmre0SEzfcAQUX9oKCojb2fXFDkE0odhVwQaEKF9yFAjSZ6Df/f+sVFsVDUMCF1M/5znvvvvduvffux7/c+9/3XniS4uzs/O6qFSsUb7755ku8vWTRop2RGv1FvVZ3yR5r1qypBvADcaJDHPI4snnzZlVDQwOGDBkysaSk5EdbtmwJb21pgT1aCDqdrslBOIf0SpRKZT0T7rVhw3bpdToQ4QS55OAgnEN6JdOmTftVRkbG/QtEuKGvDva+ceMG4mJjZcnGIMLdkk51yEAUw/mm/ykytnoWN5hHsbkThaRhTKb7L55oaHm5tL51SqWx7Y3jxtZXj58z//J4owWl52/+pqShaVhxfdP4sot33q24fP9n4lwS1lAl527+vMzUPHL+gqVLGxsvQxBu8GDv69evI1YQrrUT2RhardZBuIEoJaaWFcX15gtFxpb7JQ1tKCaUGFu+KzGaBYrrW+6VmNpgaLhj2UdL3haQtosF7goYjC33DKa2SwZTa02JqbXJUN9yv9h0F74h2vvmFnMHwsXFxcmSjeHQcANUSkx3VBbC9B+YlGFqPRGJCXcBg3tAOIeGG6BCWogIx9pJnix9gfwz1xEZbTGfFy9exCuvvJIufLjvuYZbtmzZi06jR6+m1e9PcNTfhGPTq0nLw6lTNUQki7928OBBODTcCy9Mnjz5N5s3uiMqKupFqWjgy5PQcB6+4YiNjiTECOzYvr1bwiUkJFySLnHAyqhRowaplGFYtWrVr6WigS/9T7g2bPTYh/jEZEIK4pOS4em1SxBOq9YgLTUVTU1NnQhXUVFRn5qaOiglJeXlpKSkP1qRlpb2Epfv3r178PTp0/9Fuo3nUkaMGDE6J/soXCdNelkqGvjSv4TjqJfMan0LiuvMFtSboU45ilClCmu+Xg+tLgrh4eE4dOgQzGZzO+Fu376Nq1ev4sqVKx3AZQyj0YixY8culm7juZRFny2aWVdXByLeSKlo4MuTMKlyKGlopWUb0g1n4ROoQhSZ2vCwcOTk5HTQdF2ByTlhwoRl0m08l+Ls7LyItfugQYM+kIoGvjwdwkmaz7o0tSI+qxy+QeFISExAGPk1xcXFskSzxaRJk1ZIt/Fcipub29pvv/kWI0eO/EQqGvjytDScHJiAmtQcBIREICUphYinxInjx2XJxphLDSbdxnMpK5at8L537x6mfzj9S6lo4MuzRDgB012UGFuhiMqAUqVFWkqa8PFOnTrViXAL5s3zk27juZStm7eG3b9/H59/9pmXVDTw5ZkjnA0Kz5vhq4qHVh8notkIVQTOnz9PZGuFubUFXp6e8Nrhlfee03tjpdt5qsJRs4uLy7/3FES4/RwArV6xUs/bGzZs+FupqoEr/U04MfZqV9YT2J6Xd+Y69ih0iE1IQnJyMtTqCDFiEanTify5qpMnsWvXrsIxY8aMf5opTZs2bTp95MgRZGVl9Qx87BHLMjo6GsOHD39LqmrgSn8RTgQEJl63DPJ3PuZBmfz+zjhy8gJ8glRIzziIxPg4bN+2rUNXSk1NDby9vUvGjRv3AWmLH0q3+MQkUqM9rYqgiDsykhDVLYKDg+FJWnrfvn1i9MVBuMeE0E6mNmzx2ocwTRSUmhiEaGIRrI6HvyoGe8MY8ThUYZRI2TOUSMfuLz4Lb98QlJaUIjgoGFevXG0nHePMmTPY7eNT8f748S5PknhMuJiYGFKyFmH/7GFy4cIFFBYW4vSp08hIS8dIB+EeH0dPXsbadevJ7OkRqdcjSh+JaPqvjouJRXxcHGKpYQKCFdit0CL7xAU6xzbVqTuQRjS2YV9YLPLyChAeqsSpms5BRW1tLWuPE++///40Mll/I91yv0mkVnuah+6YaKWlpXTfluG8GBlwuVajET7p6dNEuHQH4XqF8MRs1NfVdyIBw8xoNiMjNQ1qVTiUYWrsDdEjp+aKbF3y4Jy8O9CkHEVCUhpSkpLBw0Ryv8eNunfv3mpnZ+eZ/emYWwl38+ZNJCYmdtBwvC4HFoeG6wPsDdGhxca/6go8hBVDDjNrwgi1DnuVUcg7fU2YZFs/rysY6NrTj9UgKDQCBfkFiI6J7uDX2YKHw3x9fc9MnDjRbcGCBZas5j4UK+HYH7t165YgU0/EoeF6CyKLIowIJ9Po9rDO0rp25QpFn2oyt/HQaKPgGx6DgrM35eu3h+kuck9dwa59IaisrISCnHFODrD/LSsaTCYEBQSec3VxmT916tS/kx5Fr8VKuAMHDqC5uVmiU/fi0HC9RV2zII1cY3cH1kJhYWE4kJ4BlUYPf3Uijp2/LVLcu4tmDcYW+ARrUELBREiIQvhwcr9hxUVy2oMDg+qnTpmycOnSpT+WHsljy2MTzqHheoeEnOM4dqyQGlV+gkxPUFVVRcRT4ujRowiPIOJpklFIRJb7vQew+HWKmP04cChT5Nvl5+fL1m+Ly5cuQaFQmFxcXD6bPXv2T6RH88jyuIQ7Q4Q7mLEf7771js+4MeMWTuhjcJ2M0W+/vfCjjz76R+lyn470JeGsUaZfRCJukw8j17iPiiIiroo0XnFxCRThGgRHpsNQb5Z+s+vINuFIOcJJQ+bn5iI+Ib5Lv84WjY2NUIaGXpoxY8YyIt8jZ+H2RsOVlpSgqLAIhqK+R5F13WDAtGnT/iBd7tORvtZw7MT7h/KEGflGfRwwWQ6RI84jDJUnjiNIqYEy5iCKyYTKXYMA+XVZlQ3Y7ReKEydOIDQ0VDjycvXb4yr5k+Hh4Y0zZ8xYsXjx4r+XHlW3YiVcQUGBiIytUWh3ckby4ZLiE0Rkb+wHxMbE4kjmkYFFONHhS1onhDSRXEP2Fpw7lpCQgMioKNTUnEKAQoWE7Arp9+X9u6JzTdjpF0akOwlFUDCM9fJdNXK4dvUq1BERV2fOmLlm7ty5/yA9si7FSjjOAImia2RNx1rTnnjl5eU4eOAgzp45I/ZZfbjCY8ekI/peOM+Qh90GnIbLrmpEcmq6bAP2Fa5fvwGdToukpGQcOHiY/LsE0mic0Cl/TRw1B6oTkJtXIIaUiosMsvV2BY54iXg3Zs2atZai2p9Lj66TWAnHwkTi/jgOgC6Rj2iVb7/9lmekocXcAr1Oj2+++aY9Si0scBDukREam9llh29fg4eGyNlHXl4evMh05lY30jXI3wsHE/r0fETHJSE7OxspKSmydT4MN4joer3+1ly3uRvIz/sn6RG2iy3hrMLuQHJSEjNQIJ/MrclkpD33kUMBEZt5q4Y75tBwjw5fZRRa6b9XrsH6BdSgiQmJZL72QxmhQ8yhYrqOrrpP7mK/oRb+weFkYo+Tn6YSHc+y9XYB7je8RZqLNOWtefPmbf34g4//WXqUnQh3jwimVe2F+9cLEKvbI7B53QKoQ71x524bcq2Ec2i4x0dwOHf4dh8R9jXYL+JMjcwj2dirioXBaCatxvfVOZItOHMdXr4K0dBBQUFCU8rV2R2YLDExMeZPP/lkB0W1/6q1IxybVY2fK5prP0NL7acw1y5EU+0SpKqnURR/kzRctkPD9QZFdU0USUZSYzx+/1tvcPXqNQSTiS0qLBTZJNnHOSlA7lpJAxpbsZei6dLScjGIzoSVq7M7sMZrunWbkxJaQxSKOx013D3MnDISG//6Gtpq56H13Dz4b3sbLhMGodnc7NBwvQFHp4k5J2AwdD/5pV9B5pwHzrkbJUIfA216gTQu2/maDXTNqvjDIr/u8KFD2J+xX77OHoCJx68f66Dh6E/r50IabiFpOCIcwUyaLlU9lUw5abgchw/XC9zF3vA4YSrkGuRJo6KiAhHko+Xl5WNPSCQM9Z1HKdjU8pBZUk4lQskVqKysEJOzm5o7T8zuDoJwMZ0Jp/P7QGi3OxJ4PUPzAZrId2wn3PdPw3VsiMeFX6hWtjGeFq5fuw4ycygrLcVuvxAcKqsX1yk3Jptb1YidvkFi/DU4MAiXL1+WrbMryBHuHkHvN7GdbFbCpWkmopkJ9whRallZGfuLHCWLcx5VnkHC2Ws53paBcMTtj+NuhzaEUZQo1xhPG0lJSWRiDyAyJgERSdl21y8R0EQ+aL0Z3gEqVFVVQ6VS4eTJk7L1yUFewwE6f3vCzReEa7p96wHhutFwXP8md3cy+RkICgwUnd89HcWwyjNDuHXbd8d5+qrOefiHn/fyU9ftDNDWe/lrjF4B2gbPIO0FrwDdpZ0K/SVvhf6KjyLyinew/rp3cOR1b0XUzV3Bkbd2KaKbGDv91c2rV3/ZrNNozZF6fXOkTm+OiYwxk1/TkhCf0EYP6Q75VneTk5O/TUlJ+b+0tLTvCPfS6T87gx4k98pzHtnhw4fFg+G+Mh645wfF/Ww8XMQagFOyiw0GkVFbTv/1JqNRNLY9AezBaUs83bCIzvUO1ogRCMs/ih35aDtYl4Kso7lIJxJkZmbK1mcPWcIRKQI9nXG+yI0wC+cIvK4JeJ8Ix1Fq9xruu+++E/d/YP9+1J6tFQgMCMDNGzceiXTPDOH6SuiefmAPnk/Aqd2cZRsUFPQjBq3/3Z49e35My5/wAPmECRN+yhg0aNBP33333Z9xNsOyZct+sWbNml+uXLnyV59//vl/Llq06Lfz58//He37PZ3z0qTx418eO3bsn8c7OQ1ymTx5EWkHam95ItiCRwxCghWoJP9uX4AS+w1n27tOLISzaDouiz5YBF1UbHuqOA/Gy9VpRTvhbOY0cJSam52Jre5rkXU4XWDH1g04fCBdjDjkEglu3bTRcDKE4y6bwIBAkc3MBGUcpX9Gf1+/7zfhnqaMGjXqD7t37z7JLzmUI4MtRM9/coqIYjk1PTTuoHAHOk/maSOfrw57A0Jx7tw5BPFknWsdJ+vYg6PU6Kho3GlrI9xBg6kBWzZtFsELaX7otFpEkKlmshTk5yOTtDn7iicqj4M1PfubnE7F2twKnhbZXp5fIJYMTw+PDsday/kYObApfiYG7weKLFiw4KekDUM5M0SODPbg48LDwlBRVgFvfxWOtWcX2wYUbSiovUXBhJKCifNQKpXC/MnVx/DeuRM+3t74Yunn+OKzz/EXsVxq2V7KS5t1Kp/+4TQs/nQh1n71tcj/06jVwndkrcbzbgUuXMQlQmJ8Ak5V10CjisAFIjKXtR9D4HOWL1+OQH9/QgCCbMDbX65chSwH4fpeyOR+RFqhuSf5b8LEhoSI95f4BauQkl9tQ7YHoMAKfuExKCouQWJSIpk1+Tc8cTYLD5X1FBwENJAPGhkZCf5+xTHSVLt9fLBpw0a4b9gA94203OiOjbRcv3YdNlLZurVraR/vdxf7LMdsxOpVq4TP25U4TGo/yjvvvPM7Ly+v8mvXrskSowPMLUhNSaGA5QD27z+A4MhUi4ntRLy7UCdnkYnLEAmN/Mr/npD6YWCzfom0E8+6txJu7aYVmPGJM2YseA/TCR8xFr6HRV9NwUyxnIzZi9/DJ6umUPkEOm4cHTMBH7qNQWJyvESvzuIgXD8Lp4ovWbLEv7y8/L5cY9vDamJPVlVjl1848k9fl4hmE1DQMq2gBoEhEThXew6KEAV64jd2BY7KmXA8a81KOPd9SzBn++tw8xiC2TuGEYZi7u5h2JHzPub5DIHnUWcs8H8d29ImYb7PG5jjMRTzPN+C25bh0MYpJXp1FgfhnpC4TJo0NT4u7jZrMrlGtwV3FIeSia2qOokgpRqJ7cmdVlhIl1d9lfy6EJiMDSI9irN75errDqzhLpMvFmslHEWp7r6LMZcIN8djMOYQ4ebsGIJ5RDhPQbjBgnCf+r2Ore2EG4L5niPhtnU4dLEOwj0TQib2t9u2bSu+0tgo2/D2SE1NxcEDB3A4M1vMGuNZ/pw6b806Ect6M/YEqXHiZJXoCmGyyNX1MPBrZlm7sQ/G7yPxo+j1i03TiXDDBZGYcG6k4SyEc8ZcJhwtF/qNwBZBuBGkCUkDOgj37An3/y1csMC7uLi4RyaWRxk4W/f0mVPwpig1p/qyjaaTiGe6g5DodBw6nIW83FwkJSQJn1CuPjk0U5DReOmy6CrhCJS7Sdbu+VSYVCacm5VwPkPhJQg3BF5HJwgNt5kIN89nuES4tzB7y+tEuFCJXp3FQbinJBMnTnTW6/XXe+Lws3/Gk29qqqqgjNAjWja58y7ij5RCpY0ScxTCQpVi9ECuvq5gGzSs8VwA15VD4bpqEKasfgWuq4fgo/WDsVrjhGnug7BKNwbTNg3CCgUFFV8PhQsdM33165i6fDC00WESvTqLg3BPUZycnP7D3d09l+cayBHAHjzExUNL/OIcv7AYYU4tY8oPyHeksgE+/goxuZqTOk0mk2xdcrAl3Pm6WlRUlAuUV5aKrJe09FTM3jYUf40YhWWatzF7zbsoryiTjqtAJR9L2zyHoitxEO4pCw+3zZ8/fzv5XvfkSGAPHtDnjt+683UiufPI8QvCpNqSznC+CV5+ShHB6nR6MddUri57cGcv+4yaCDUqyok8BOuSkZqWglnuQ/GX0DexnOC20gnlZURGm2PKy4mAtOwKHIFzQOQg3FOWsWPHOqnV6sbuxkoZ7Sa2uhpafTR06fmdUp2YhP7qBOQfKxIahYes5OqyBY8S8EhDNaGGiG2LI4cOY93XX+OrjcvhNOclTJg1DDu9t8F9/UYcy89HDQUtHc/hbXtQOR2XlJDoINyzIGPGjPm3DevXH+FPa8oRwh7WDBdDcSl8QiJRVNcsEjktpLPModCnFyA2LgnV1VVQqyLEyIJcXd1h3969WPrFp3Bd8We4bRuGOWRaJy98Dbt2eSKEyC93Tlfgmf0Owj0jQib2h25ubhvy8vK+k2sse7DWUFKAcIF8NR+/EBwuq7PRdKz17iLDcBb+QTwv9aLw6/gdIvX19T0CT9hmf5AnVG8PXAGP3PHwzHsPHnnjsCNzIvRxKui0NvmHFARlZR1FSLiWApxIqDWRuGSXRMqEc3V1/V/plh3yLMj48ePfCg8Pv9jc1L2JZSddqQwT7xaOikuEKilLaLcHOXZt4tOdO/eF4ELDRZG1kZebJyG3S3DaUlJiElJTkrFl82Ys3zILnvljiXDj4MWkOzIB7tu+xuZNm8hsZ6GyvAIBwWFIzqsSv804dv4WduwLJXP9QGs7CPeMCk/5++qrrzJY09gSrCuwed2fniaSPHcFaVB0/rYgnLWj2GBqgb8qHgHKaEIUAm0QEEYQ65ESorBzTxB/gwJbtrtj+/ZNcP3kHXwWNKIdi/2GY9YcV2ylffxi7ekffYyUYzXtv2clu6HOjDDVg7R/B+GeYWETO2vmzNVZWVnf2pKrK9RU1wgTe/niJewJCEVG0Zn2hmciPPDxLBCasAOs82fvQnegCHv27saMVcOxOswJH61/DYv3jMQnnsMxbd0QrFA6YSr5dF/rxsFp2iAEK1Xg11nY1i8IR3UFinkmlmmbDsI9B+Lk5PS6QqEwyn1i0x48I587fqspik1KSYMyVkru7ECEh4PNYeT+QiiUAVgZPh5zdg7FF6FvY2ngcCzYMxwrtaMxa9urWBM3Fi4b/owlW8dAExktQziu6y5CbN5E6iDccyJkYn+xatWqJM78tSVYV+A8N45kq2tOY5d/GApOX4OB3+LZDdgUFxK0aXkIDQmG88I/wW3T6/jwy0GYuupVuG19De8v+hMW7n4T4+b+AUt938ZI5z9Co48hs00akv03JhqBNWrOyUsUKSe0X5eDcM+RAPjBxx9//JfMzMy7tuTqCvxtMO6zu9J4BcnJaUhOsiCJQdsd0F6eKhAaEgY/P1/s9NiBtRs3YYvHLmz18MZmwrYdPrTtTds7abkTHl4+VL4XpcY2lFpJR8tjZ29g++5A8VYA6zU5CPccyjvvvDM4ICDgXE/61djE8nyG6KgoMXzFiOoC1v0xUbSk47k7hD96ok7NEQRiMpWSibQQyrJUp5ImVOkRoYlBGCFcG02IgUoXI7TeNbs5GA7CPafC74hbsWJFFH/xxrZB+xrnamsRQebVOvfXHn6aZDFdUO5cOfA7Vxwdv8+xUOMtzMjIuCPXuH2Bc7VnhRaTIxuDX7R980bPXq3B0xgLCw1IOFp5odjYWldiaj1Pfl9KqenO1rL6lvUlJkbrluL6lmyKmJPoGM8SU/OGMmPzomJj02zat6SkvmVDibE1xGBsO1ZS16zi7fIG88xSU/ObJcbmNyouNo+ovNj2RqnR/KHB1Lqdjs0qNpqXl15q+w27JNJjc0hvZNSoUS/v27fvFHcCyzV0b1BLhNM8hHARKTkiIu54HneByOMYES45v0rqfuHggrti5KJoqYwzYsh02+9nc96+Lratpp7LeP2u6JJpP5eWRabWbw0NLTulx+aQ3gi/eHr58uWxPKjfsfF7ByYcazgrQWwhIlFTK3b5KXE4MwuXLzeK5IKb1693idycXKQQ4ez7BPsHHd0ACzFbI6RH5pC+EFcX1zkpKSnEFXkCPSoaL19GoD5d0hxysGiiA4az4jj+mPE+VUKX2BMej7zTPfy6T5/CkjvoIFw/yNi33/79nl3eJx726aWeotVshndghGgs+YZkWPfZLh8G23OfFByE61dZ5uLy4tKlS0OOV1b2aP5E12hFamo60gpPCb9IvjGfBzgI90Rk6pQp0xPiE5p68lXFhyFEqRafk5Lz5fofclqyK3R1nmXbQbgnIKNHj/5vDw+PsqtXH/4inO5w6FCmmJYYFn+YNN5ppBedIZxFRh+A60knP5DrTSmoeYB8m3Xrtn2ZLaz77Y5LlbbjMksTpMfikP4U/lIhRbK+ZWVlj21i+aPG/DkCY70R2dk5ItnySB8iKyubltmYPHmqZtiIt4YPG/Fun2Pk6LHDpEfikCchH3zwweTY2NibvX0nSX9iyZIl26XLdchAkDFjxvzXtm3bivgbXHIN3nfoKak7HvfZ4sU7pEt1yEAR/vw5vwXAUGToZRTb9yDT7yDcQBVnZ+cJkT18C8CTgoNwA1xGjhz5643r1iUogoPzrQgJVtCSEZwfLEGheFDWPRRSHQ/KrHXYl1tAZVw/wdXV9VO+rvT09B8zxEX2mbzwwv8Dqz2REX1DUHMAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img1"
                        ></image>
                        <clipPath id="clip2">
                            <rect x="0" y="0" width="1173079" height="571500" />
                        </clipPath>
                        <clipPath id="clip3">
                            <rect x="-1.16415e-10" y="0" width="76200" height="190500" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbBAMAAAACbYG8AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAPUExURQAAAP8AAP8AAP8AAP4AAGvGb7UAAAAFdFJOUwB//z+/TK8GtwAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAJhJREFUSMft1dsNgzAMQFHjMgBiApp2AMQEqPsP1ciOn0QsQPKXI67y+gBoTIXHh2bIiA3LwIEDBz4Bd4c/wY1R5zYQSg/XHmIPr/1W8ci4VJwz0j5zTZiW2glT346ZakaMNePk7Ku3FOuG6JcRfKm93SWH+vaN5NPwk5JHOQOiqxXB1YaH1YZotSHIJgPWfrngrLVD0BrwD7sXbqpEtQVyAAAAAElFTkSuQmCC"
                            preserveAspectRatio="none"
                            id="img4"
                        ></image>
                        <clipPath id="clip5">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbBAMAAAACbYG8AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAPUExURQAAACPbFSHaFCLbFCDbFHf/K8sAAAAFdFJOUwD/v38/zK3xaQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAKNJREFUSMft1UESgjAMheE+9QAGPQAewRvg/S9FQ3hp0i507TQr5qffAO2C4iN3XsEbZBnjW2Tj/abFPZqu08eXxtMz3rTRI2p6RC2yxmiaHkmfHv6SYanFq8dni67NI2vzR7yE+GD8hCiMsalHfkydxWLS6tFr9ei1ehyHk2fDoKvHoOuA25uj/Lwyb9Madt4/6usZzTjjjDP+WeRPSn8SpWAHbPs4v/nDGPsAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img6"
                        ></image>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="76200" height="177800" />
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
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 974 39)"
                        >
                            <g clip-path="url(#clip2)" transform="scale(1.01496 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M905.498 193.394 904 110.527 907 110.473 908.497 193.34ZM901.001 110.581C900.956 108.096 902.934 106.046 905.419 106.001 907.904 105.956 909.954 107.934 909.999 110.419 910.044 112.904 908.066 114.954 905.581 114.999 903.096 115.044 901.046 113.066 901.001 110.581Z"
                            fill="#663300"
                        />
                        <path
                            d="M0 0 473.472 0.934068"
                            stroke="#546600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 757.972 293.5)"
                        />
                        <path
                            d="M0 0 764.998 0.000104987"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 987.498 111.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(226.057 103)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(230.224 103)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(233.724 103)"
                        >
                            СШ 35 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(555.542 358)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(562.376 358)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(565.876 358)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(549.876 371)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(557.876 371)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(532.876 384)"
                        >
                            2,5 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(368.394 361)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(375.227 361)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(378.727 361)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(362.727 374)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(370.727 374)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(345.727 387)"
                        >
                            2,5 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(299.004 307)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(303.171 307)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(306.671 307)"
                        >
                            СШ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(328.671 307)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(336.671 307)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(681.825 356)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(704.992 356)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(708.492 356)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(676.159 369)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(700.492 369)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(676.492 382)"
                        >
                            100
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(695.159 382)"
                        >
                            кВа
                        </text>
                        <path
                            d="M525 192.342 525 112.5 528 112.5 528 192.342ZM522 112.5C522 110.015 524.015 108 526.5 108 528.985 108 531 110.015 531 112.5 531 114.985 528.985 117 526.5 117 524.015 117 522 114.985 522 112.5Z"
                            fill="#663300"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(546.669 159)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(553.836 159)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(557.336 159)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(564.503 159)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(568.003 159)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(573.336 159)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(576.836 159)"
                        >
                            6
                        </text>
                        <rect
                            id="c750"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 516.5 164.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(477.557 207)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(484.724 207)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(488.224 207)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(493.557 207)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(497.057 207)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(467.391 220)"
                        >
                            35/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(489.057 220)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(459.724 233)"
                        >
                            5600
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(483.724 233)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(453.557 246)"
                        >
                            ТАМ 5600
                        </text>
                        <path
                            d="M600 346.209 600 294.5 603 294.5 603 346.209ZM597 294.5C597 292.015 599.015 290 601.5 290 603.985 290 606 292.015 606 294.5 606 296.985 603.985 299 601.5 299 599.015 299 597 296.985 597 294.5Z"
                            fill="#546600"
                        />
                        <rect
                            id="c796"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 591.5 332.5)"
                        />
                        <path
                            d="M905.808 293.284 905 248.527 908 248.473 908.808 293.23ZM911.807 293.176C911.852 295.661 909.874 297.712 907.389 297.757 904.904 297.801 902.854 295.823 902.809 293.338 902.764 290.854 904.742 288.803 907.227 288.758 909.712 288.713 911.762 290.691 911.807 293.176Z"
                            fill="#990099"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(927.111 160)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(934.278 160)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(937.778 160)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(944.945 160)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(948.445 160)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(953.778 160)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(957.278 160)"
                        >
                            6
                        </text>
                        <rect
                            id="c4"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 896.5 166.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(869.759 206)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(876.926 206)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(880.426 206)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(845.426 219)"
                        >
                            35/10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(872.426 219)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(843.093 232)"
                        >
                            4000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(867.093 232)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(836.259 245)"
                        >
                            ТМН 4000
                        </text>
                        <path
                            d="M0 0 113.724 0.771549"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 975.224 292.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(933.71 362)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(956.877 362)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(960.377 362)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(928.21 375)"
                        >
                            10/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(957.877 375)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(933.71 388)"
                        >
                            25
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(947.044 388)"
                        >
                            кВа
                        </text>
                        <path
                            d="M907.5 293.5 907.5 348.232"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path id="c3"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7F7F7F"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 893.5 402.5)"
                        />
                        <path id="c2"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 892.5 379.5)"
                        />
                        <rect
                            id="c1"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 898.5 330.5)"
                        />
                        <path
                            d="M1.33328-0.0122 1.58797 27.8215-1.07859 27.8459-1.33328 0.0122ZM6.00576 20.4526 0.278902 30.4798-5.63049 20.5591C-6.00734 19.9264-5.79997 19.1081-5.16732 18.7312-4.53467 18.3544-3.71632 18.5618-3.33947 19.1944L1.4002 27.1514-0.903115 27.1724 3.69016 19.1301C4.05536 18.4906 4.86978 18.2683 5.50922 18.6335 6.14866 18.9987 6.37097 19.8132 6.00576 20.4526Z"
                            fill="#7F7F7F"
                            transform="matrix(-1 0 0 1 731.779 402.5)"
                        />
                        <path id="c8142"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7F7F7F"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 717.5 401.5)"
                        />
                        <path id="c8141"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 717.5 377.5)"
                        />
                        <path
                            d="M1.49993-0.0145789 2.01499 52.9773-0.984863 53.0065-1.49993 0.0145789ZM5.01485 52.9482C5.03901 55.4333 3.04397 57.4675 0.558802 57.4917-1.92636 57.5159-3.96057 55.5208-3.98472 53.0357-4.00888 50.5505-2.01384 48.5163 0.471329 48.4921 2.95649 48.468 4.9907 50.463 5.01485 52.9482Z"
                            fill="#546600"
                            transform="matrix(1 0 0 -1 732.5 347.492)"
                        />
                        <rect
                            id="c814"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 723.5 331.5)"
                        />
                        <path
                            d="M413.036 345.888 413 294.501 416 294.499 416.036 345.886ZM410 294.503C409.998 292.018 412.012 290.002 414.497 290 416.982 289.998 418.998 292.012 419 294.497 419.002 296.982 416.989 298.998 414.503 299 412.018 299.002 410.002 296.988 410 294.503Z"
                            fill="#546600"
                        />
                        <rect
                            id="c778"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 404.5 332.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(427.431 326)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(434.598 326)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(438.098 326)"
                        >
                            Г1
                        </text>
                        <path
                            d="M1.49999-0.00411956 1.62482 45.4482-1.37516 45.4564-1.49999 0.00411956ZM4.62481 45.4399C4.63164 47.9252 2.62246 49.9454 0.137188 49.9523-2.34808 49.9591-4.36833 47.9499-4.37515 45.4646-4.38198 42.9794-2.3728 40.9591 0.112471 40.9523 2.59774 40.9455 4.61799 42.9547 4.62481 45.4399Z"
                            fill="#546600"
                            transform="matrix(-1 0 0 1 526.625 247.5)"
                        />
                        <path
                            d="M366.47 401.612 459.578 401.612 459.578 414.412 366.47 414.412Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M366.47 414.412 459.578 414.412 459.578 427.212 366.47 427.212Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M366.47 427.212 459.578 427.212 459.578 440.012 366.47 440.012Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M366.47 440.012 459.578 440.012 459.578 452.812 366.47 452.812Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M366.47 452.812 459.578 452.812 459.578 465.612 366.47 465.612Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M366.47 465.612 459.578 465.612 459.578 478.412 366.47 478.412Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M365.803 414.412 460.245 414.412"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M365.803 427.212 460.245 427.212"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M365.803 440.012 460.245 440.012"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M365.803 452.812 460.245 452.812"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M365.803 465.612 460.245 465.612"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M366.47 400.945 366.47 479.078"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M459.578 400.945 459.578 479.078"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M365.803 401.612 460.245 401.612"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M365.803 478.412 460.245 478.412"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g778"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(370.25 412)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g779"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(370.25 424)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a778"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(370.25 437)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k778"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(370.25 450)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n778"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(370.25 463)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w778" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(370.25 476)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M553.589 399.762 646.697 399.762 646.697 412.562 553.589 412.562Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M553.589 412.562 646.697 412.562 646.697 425.362 553.589 425.362Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M553.589 425.362 646.697 425.362 646.697 438.162 553.589 438.162Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M553.589 438.162 646.697 438.162 646.697 450.962 553.589 450.962Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M553.589 450.962 646.697 450.962 646.697 463.762 553.589 463.762Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M553.589 463.762 646.697 463.762 646.697 476.562 553.589 476.562Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M552.922 412.562 647.364 412.562"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M552.922 425.362 647.364 425.362"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M552.922 438.162 647.364 438.162"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M552.922 450.962 647.364 450.962"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M552.922 463.762 647.364 463.762"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M553.589 399.096 553.589 477.229"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M646.697 399.096 646.697 477.229"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M552.922 399.762 647.364 399.762"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M552.922 476.562 647.364 476.562"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g796"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(557.369 410)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g797"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(557.369 423)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a796"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(557.369 435)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k796"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(557.369 448)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n796"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(557.369 461)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w796" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(557.369 474)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M1.33328-0.0121455 1.5992 29.1799-1.06735 29.2041-1.33328 0.0121455ZM6.0173 21.8112 0.29003 31.8381-5.61896 21.9172C-5.99578 21.2845-5.78837 20.4661-5.15571 20.0893-4.52305 19.7125-3.7047 19.9199-3.32788 20.5526L1.41146 28.5097-0.891851 28.5307 3.70175 20.4885C4.06698 19.8491 4.88141 19.6268 5.52083 19.9921 6.16026 20.3573 6.38253 21.1717 6.0173 21.8112Z"
                            fill="#7F7F7F"
                            transform="matrix(-1 0 0 1 908.79 402.5)"
                        />
                        <path id="c7502"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 511.5 247.5)"
                        />
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#546600"
                            transform="matrix(1 0 0 -1 511.5 247.5)"
                        />
                        <path id="c7501"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 511.5 223.5)"
                        />
                        <path id="c6"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 891.5 248.5)"
                        />
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#990099"
                            transform="matrix(1 0 0 -1 891.5 248.5)"
                        />
                        <path id="c5"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 891.5 224.5)"
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
                            transform="translate(592.202 20)"
                        >
                            КУДАШ ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(475.822 32)"
                        >
                            Установленный мощность
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(607.655 32)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(613.822 32)"
                        >
                            5 МВт Количество гидроагрегатов
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(794.655 32)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(800.822 32)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(808.822 32)"
                        >
                            шт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(947.377 303)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(960.711 303)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(616.908 326)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(624.075 326)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(627.575 326)"
                        >
                            Г2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(750.907 326)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(758.073 326)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(761.573 326)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(784.74 326)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(788.24 326)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(920.545 326)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(927.712 326)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(931.212 326)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(954.378 326)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(957.878 326)"
                        >
                            2
                        </text>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 996.17 34.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1095.5 88.1712)"
                        />
                        <path
                            d="M1092.55 101.031 1084.86 92.6543 1085.35 92.2035 1093.04 100.58ZM1085.11 92.4289 1084.95 96.1967 1081.5 88.5001 1088.87 92.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1101.95 100.889 1092.5 100.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1000.09 20.5264 1094.46 20.5264 1094.46 33.3264 1000.09 33.3264Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1000.09 19.8597 1000.09 33.9931"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1094.46 19.8597 1094.46 33.9931"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M999.42 20.5264 1095.12 20.5264"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M999.42 33.3264 1095.12 33.3264"
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
                                transform="translate(1003.87 31)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1014.37 31)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M995.5 34.5001 1014.69 34.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1102.58 87.6101 1190.24 87.6101 1190.24 100.41 1102.58 100.41Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1102.58 86.9434 1102.58 101.077"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1190.24 86.9434 1190.24 101.077"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.91 87.6101 1190.9 87.6101"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.91 100.41 1190.9 100.41"
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
                                transform="translate(1106.36 98)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1116.86 98)"
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
                            transform="matrix(1 0 0 -1 992.5 42.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1101.99 60.5001)"
                        />
                        <path
                            d="M1102.5 60.5001 1121.69 60.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1106.78 47.4266 1179.97 47.4266 1179.97 60.2266 1106.78 60.2266Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1106.78 46.7599 1106.78 60.8932"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.97 46.7599 1179.97 60.8932"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1106.11 47.4266 1180.64 47.4266"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1106.11 60.2266 1180.64 60.2266"
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
                                transform="translate(1110.56 57)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1078.5 88.5001 1101.21 88.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M91.5001 449C91.5001 443.753 95.7533 439.5 101 439.5 106.247 439.5 110.5 443.753 110.5 449 110.5 454.247 106.247 458.5 101 458.5 95.7533 458.5 91.5001 454.247 91.5001 449Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M91.5001 471C91.5001 465.753 95.7533 461.5 101 461.5 106.247 461.5 110.5 465.753 110.5 471 110.5 476.247 106.247 480.5 101 480.5 95.7533 480.5 91.5001 476.247 91.5001 471Z"
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
                            transform="translate(115.878 451)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(115.795 473)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M91 426.5C91 421.253 95.2533 417 100.5 417 105.747 417 110 421.253 110 426.5 110 431.747 105.747 436 100.5 436 95.2533 436 91 431.747 91 426.5Z"
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
                            transform="translate(115.795 429)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(116.06 406)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(115.795 383)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip3)"
                            transform="matrix(0.000104987 0 0 0.000104987 96 371)"
                        >
                            <g clip-path="url(#clip5)" transform="matrix(1 0 0 1.07143 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 96 393)">
                            <g clip-path="url(#clip7)" transform="scale(1 1.07143)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M284.424 277.929 373.656 277.929 373.656 290.729 284.424 290.729Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M284.424 277.262 284.424 291.396"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M373.656 277.262 373.656 291.396"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M283.757 277.929 374.323 277.929"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M283.757 290.729 374.323 290.729"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g822"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(288.203 288)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M223.595 114.254 312.827 114.254 312.827 127.054 223.595 127.054Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M223.595 113.587 223.595 127.721"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M312.827 113.587 312.827 127.721"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M222.928 114.254 313.493 114.254"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M222.928 127.054 313.493 127.054"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g739"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(227.374 124)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M549.639 209.341 633.238 209.341 633.238 222.932 549.639 222.932Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.639 222.932 633.238 222.932 633.238 236.523 549.639 236.523Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M548.972 222.932 633.905 222.932"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.639 208.674 549.639 237.19"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M633.238 208.674 633.238 237.19"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M548.972 209.341 633.905 209.341"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M548.972 236.523 633.905 236.523"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g750"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(553.418 219)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g749"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(553.418 233)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip8)"
                            transform="matrix(0.000104987 0 0 0.000104987 627 210)"
                        >
                            <g clip-path="url(#clip9)" transform="matrix(1 0 0 1.02857 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 627 224)"
                        >
                            <g clip-path="url(#clip11)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path id="c7781"
                            d="M390.5 369C390.5 355.469 401.469 344.5 415 344.5 428.531 344.5 439.5 355.469 439.5 369 439.5 382.531 428.531 393.5 415 393.5 401.469 393.5 390.5 382.531 390.5 369Z"
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
                                        d="M0 0 0.922222 0 2.2287 0.230556 3.30463 0.691667 4.15 1.22963 5.14907 2.2287 5.76389 3.15093 6.225 4.38056 6.3787 5.07222 6.3787 6.91667 6.0713 8.06944 5.45648 9.29907 4.84167 10.0676 4.3037 10.6056 3.22778 11.2972 1.99815 11.7583 1.22963 11.912-0.307407 11.912-1.53704 11.6046-2.38241 11.2204-3.22778 10.6824-4.07315 9.91389-4.61111 9.14537-5.14907 8.06944-5.45648 6.83981-5.53333 5.91759-5.37963 4.68796-5.07222 3.68889-4.45741 2.53611-3.61204 1.61389-2.99722 1.07593-1.69074 0.384259-0.537963 0.0768519Z"
                                        transform="matrix(1 0 0 1.01205 414.193 362.933)"
                                    />
                                    <path
                                        d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                        transform="matrix(1 0 0 1.01205 414.654 349.089)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                        transform="matrix(1 0 0 1.01205 402.05 364.878)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                        transform="matrix(1 0 0 1.01205 422.108 373.433)"
                                    />
                                    <path
                                        d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                        transform="matrix(1 0 0 1.01205 405.278 354.067)"
                                    />
                                    <path
                                        d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                        transform="matrix(1 0 0 1.01205 408.736 375.533)"
                                    />
                                    <path
                                        d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                        transform="matrix(1 0 0 1.01205 431.561 359.044)"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c7961"
                            d="M578.5 369C578.5 355.469 589.469 344.5 603 344.5 616.531 344.5 627.5 355.469 627.5 369 627.5 382.531 616.531 393.5 603 393.5 589.469 393.5 578.5 382.531 578.5 369Z"
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
                                        d="M601.689 362.933 602.622 362.933 603.944 363.167 605.033 363.633 605.889 364.178 606.9 365.189 607.522 366.122 607.989 367.367 608.144 368.067 608.144 369.933 607.833 371.1 607.211 372.344 606.589 373.122 606.044 373.667 604.956 374.367 603.711 374.833 602.933 374.989 601.378 374.989 600.133 374.678 599.278 374.289 598.422 373.744 597.567 372.967 597.022 372.189 596.478 371.1 596.167 369.856 596.089 368.922 596.244 367.678 596.556 366.667 597.178 365.5 598.033 364.567 598.656 364.022 599.978 363.322 601.144 363.011Z"
                                    />
                                    <path
                                        d="M602.156 349.089 603.011 349.089 604.489 349.322 605.967 349.789 607.211 350.411 608.144 351.033 608.922 351.733 609.856 352.667 610.711 353.911 611.333 355.156 611.8 356.556 612.033 357.722 612.111 358.344 612.111 359.822 611.878 361.3 611.489 362.622 610.867 363.944 610.089 365.033 609.933 365.033 609.311 363.944 608.378 362.856 607.522 362.078 606.433 361.378 605.267 360.833 603.944 360.444 602.156 360.211Z"
                                    />
                                    <path
                                        d="M589.4 364.878 589.789 364.956 591.967 366.2 593.522 367.133 593.6 367.289 593.444 368.922 593.6 370.556 593.989 372.033 594.533 373.2 594.533 373.433 592.356 374.678 590.489 375.767 586.444 378.1 585.122 378.878 584.889 378.878 584.189 377.4 583.8 376.078 583.644 375.144 583.567 373.822 583.722 372.344 583.956 371.256 584.5 369.778 585.044 368.767 585.744 367.756 586.678 366.744 587.533 365.967 588.933 365.111Z"
                                    />
                                    <path
                                        d="M609.7 373.433 610.089 373.511 611.956 374.6 618.022 378.1 619.344 378.878 619.189 379.267 618.644 380.044 617.944 380.9 617.4 381.444 616.233 382.3 614.989 383 613.511 383.544 612.344 383.778 611.878 383.856 609.544 383.856 608.378 383.622 607.133 383.233 605.811 382.611 604.878 381.989 604.878 377.322 605.578 377.011 606.9 376.311 607.833 375.611 608.922 374.522Z"
                                    />
                                    <path
                                        d="M592.667 354.067 594.378 354.067 595.856 354.3 597.489 354.844 598.811 355.544 599.433 355.933 599.433 360.678 598.033 361.3 596.944 362 596.089 362.7 595.544 363.244 594.611 364.567 594.144 364.411 592.822 363.633 586.756 360.133 585.044 359.122 584.967 358.967 585.511 358.111 586.367 357.1 586.989 356.478 588.156 355.622 589.244 355 590.722 354.456 591.578 354.222Z"
                                    />
                                    <path
                                        d="M596.167 375.533 596.478 375.611 597.644 376.467 598.967 377.089 600.211 377.478 601.144 377.633 602.078 377.711 602.156 377.789 602.156 388.833 600.989 388.833 599.433 388.522 598.111 388.056 596.711 387.278 595.7 386.5 594.922 385.8 594.144 384.867 593.367 383.622 592.744 382.222 592.356 380.744 592.2 379.344 592.2 378.489 592.278 377.789 594.222 376.7 595.544 375.922Z"
                                    />
                                    <path
                                        d="M619.267 359.044 619.422 359.044 619.967 360.133 620.433 361.533 620.667 362.778 620.744 364.333 620.589 365.733 620.278 367.056 619.656 368.533 619.111 369.467 618.489 370.322 617.633 371.256 616.467 372.189 615.456 372.811 614.756 373.122 612.811 372.033 610.944 370.944 610.711 370.789 610.867 369.389 610.867 368.222 611.567 367.522 612.578 366.2 613.278 365.033 613.978 363.556 614.522 361.844 615.222 361.378 617.167 360.289 619.033 359.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M696.102 436.241 769.749 436.241 769.749 449.974 696.102 449.974Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M696.102 435.574 696.102 450.64"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M769.749 435.574 769.749 450.64"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M695.435 436.241 770.415 436.241"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M695.435 449.974 770.415 449.974"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g814"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(699.881 446)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M872.908 436.24 946.555 436.24 946.555 449.974 872.908 449.974Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M872.908 435.574 872.908 450.64"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M946.555 435.574 946.555 450.64"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M872.242 436.24 947.222 436.24"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M872.242 449.974 947.222 449.974"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id=""
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(876.688 446)"
                            >
                                Р= 0 кВт
                            </text>
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

        fetch('/andijon/server-kudash')
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
                    if (item.id === 750) {
                        const value = document.getElementById("g750");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(750);
                            trueAnimation(7501);
                            trueAnimation(7502);
                        } else {
                            falseAnimation(750);
                            falseAnimation(7501);
                            falseAnimation(7502);
                        }
                    } else if(item.id === 749) {
                        const value = document.getElementById("g749");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(750);
                            trueAnimation(7501);
                            trueAnimation(7502);
                        } else {
                            falseAnimation(750);
                            falseAnimation(7501);
                            falseAnimation(7502);
                        }
                    }
                    else if(item.id === 739) {
                        const value = document.getElementById("g739");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 822) {
                        const value = document.getElementById("g822");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }
                    else if(item.id === 814) {
                        const value = document.getElementById("g814");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(814);
                            trueAnimation(8141);
                            trueAnimation(8142);
                        } else {
                            falseAnimation(814);
                            falseAnimation(8141);
                            falseAnimation(8142);
                        }
                    }
                    //G-1
                    else if(item.id === 778) {
                        const value = document.getElementById("g778");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a778");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.5 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(778);
                            trueAnimation(7781);
                        } else {
                            falseAnimation(778);
                            falseAnimation(7781);
                        }
                    } else if(item.id === 779) {
                        const value = document.getElementById("g779");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 780) {
                        const value = document.getElementById("k778");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 781) {
                        const value = document.getElementById("n778");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 782) {
                        const value = document.getElementById("w778");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //G-2
                    else if(item.id === 796) {
                        const value = document.getElementById("g796");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a796");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 2.5 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(796);
                            trueAnimation(7961);
                        } else {
                            falseAnimation(796);
                            falseAnimation(7961);
                        }
                    } else if(item.id === 797) {
                        const value = document.getElementById("g797");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 798) {
                        const value = document.getElementById("k796");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 799) {
                        const value = document.getElementById("n796");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 800) {
                        const value = document.getElementById("w796");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }

                    else if(item.id === 1) {
                        const value = document.getElementById("active");
                        value.textContent = "∑ " + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " кВт";
                    } else if(item.id === 2) {
                        const value = document.getElementById("reactive");
                        value.textContent = "∑ " + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " МВАр";
                    } else if(item.id === 3) {
                        const value = document.getElementById("activeOut");
                        value.textContent = "∑ " + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " кВт";
                    } else if(item.id === 4) {
                        const value = document.getElementById("activeIn");
                        value.textContent = "∑ " + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " кВт";
                    } else if(item.id === 5) {
                        const value = document.getElementById("ownNeeds");
                        value.textContent = "∑ " + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " кВт";
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
                falseAnimation(1);
                falseAnimation(2);
                falseAnimation(3);
                falseAnimation(4);
                falseAnimation(5);
                falseAnimation(6);

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