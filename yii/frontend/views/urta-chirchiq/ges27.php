<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-27 Ходжикент ГЭС';
$energy = new Energy();
$dashboard = new Dashboard();

$id = 25;
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);

$urlSwitch1 = $energy->getSwitch($id, 16);
$urlSwitch2 = $energy->getSwitch($id, 17);
$urlSwitch3 = $energy->getSwitch($id, 18);
$urlSwitch4 = $energy->getSwitch($id, 19);
$urlSwitch5 = $energy->getSwitch($id, 20);
$urlSwitch6 = $energy->getSwitch($id, 21);
$urlSwitch7 = $energy->getSwitch($id, 22);
$urlSwitch8 = $energy->getSwitch($id, 23);
$urlSwitch9 = $energy->getSwitch($id, 24);
$urlSwitch10 = $energy->getSwitch($id, 25);
$urlSwitch11 = $energy->getSwitch($id, 26);
$urlSwitch12 = $energy->getSwitch($id, 27);
$urlSwitch13 = $energy->getSwitch($id, 28);
$urlSwitch14 = $energy->getSwitch($id, 29);
$urlSwitch15 = $energy->getSwitch($id, 30);
$urlSwitch16 = $energy->getSwitch($id, 31);
$urlSwitch17 = $energy->getSwitch($id, 32);
$urlSwitch18 = $energy->getSwitch($id, 33);
$urlSwitch19 = $energy->getSwitch($id, 34);
$urlSwitch20 = $energy->getSwitch($id, 25);

$urlTransformer1 = $energy->getTransformer($id, 10);
$urlTransformer2 = $energy->getTransformer($id, 11);
$urlTransformer3 = $energy->getTransformer($id, 12);
$urlTransformer4 = $energy->getTransformer($id, 13);
$urlTransformer5 = $energy->getTransformer($id, 14);
$urlTransformer6 = $energy->getTransformer($id, 15);
$urlTransformer7 = $energy->getTransformer($id, 16);
$urlTransformer8 = $energy->getTransformer($id, 17);
$urlTransformer9 = $energy->getTransformer($id, 18);
$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['urta-chirchiq/index']) ?>">"Ўрта Чирчиқ ГЭСлар каскади" Филиали</a></li>
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
                        <clipPath id="clip1">
                            <path
                                d="M899.5 419.5 899.5 437.5 917.5 437.5 917.5 419.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip2">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOpJREFUSEvt12sSgyAMBODYKiL4uv9pK7oKIcFeIN8vS3amlpWZSoXuw32xXukxznpMuAHTbMCEs5zlEstZLrGc5RLLWS6xnPpHzI2YZt5hdpgCRAxLEbMwE1b+oQUX72aigMs363GjvXZjlXODNnxoW85fTHJDOH/FyL1/c9yRU5oodUgdJixpAjKJW7EoxaI7oh2r0oYEtGoZMX94DLhUBKfXojyp9dtCgiI4+UDcRXBic6L+XiFqKYrgeC1iS7Jyc3gRXFlLVQSXN2fCSsO9ObII7q7leTZbrtOiFsGl06IXwTlfnAgg+gEGAhJwZdPnjwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img3"
                        ></image>
                        <clipPath id="clip4">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip5">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img6"
                        ></image>
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
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="0" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="57150" height="123825" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="53067.9" height="123825" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip25">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip27">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip28">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip29">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip30">
                            <rect x="0" y="0" width="57150" height="123825" />
                        </clipPath>
                        <clipPath id="clip31">
                            <rect x="0" y="0" width="53067.9" height="123825" />
                        </clipPath>
                        <clipPath id="clip32">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip33">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip34">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip35">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip36">
                            <rect x="-1.86265e-09" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip37">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip38">
                            <rect x="-1.86265e-09" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip39">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip40">
                            <rect x="0" y="0" width="1181100" height="581025" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7V0JVFRXmk73TE93umemz/TMnD7T0zM9p8+ZnnO6J53uGJdEE2NiUKPEqEjUGMUlxiUmre0SEzfcAQUX9oKCojb2fXFDkE0odhVwQaEKF9yFAjSZ6Df/f+sVFsVDUMCF1M/5znvvvvduvffux7/c+9/3XniS4uzs/O6qFSsUb7755ku8vWTRop2RGv1FvVZ3yR5r1qypBvADcaJDHPI4snnzZlVDQwOGDBkysaSk5EdbtmwJb21pgT1aCDqdrslBOIf0SpRKZT0T7rVhw3bpdToQ4QS55OAgnEN6JdOmTftVRkbG/QtEuKGvDva+ceMG4mJjZcnGIMLdkk51yEAUw/mm/ykytnoWN5hHsbkThaRhTKb7L55oaHm5tL51SqWx7Y3jxtZXj58z//J4owWl52/+pqShaVhxfdP4sot33q24fP9n4lwS1lAl527+vMzUPHL+gqVLGxsvQxBu8GDv69evI1YQrrUT2RhardZBuIEoJaaWFcX15gtFxpb7JQ1tKCaUGFu+KzGaBYrrW+6VmNpgaLhj2UdL3haQtosF7goYjC33DKa2SwZTa02JqbXJUN9yv9h0F74h2vvmFnMHwsXFxcmSjeHQcANUSkx3VBbC9B+YlGFqPRGJCXcBg3tAOIeGG6BCWogIx9pJnix9gfwz1xEZbTGfFy9exCuvvJIufLjvuYZbtmzZi06jR6+m1e9PcNTfhGPTq0nLw6lTNUQki7928OBBODTcCy9Mnjz5N5s3uiMqKupFqWjgy5PQcB6+4YiNjiTECOzYvr1bwiUkJFySLnHAyqhRowaplGFYtWrVr6WigS/9T7g2bPTYh/jEZEIK4pOS4em1SxBOq9YgLTUVTU1NnQhXUVFRn5qaOiglJeXlpKSkP1qRlpb2Epfv3r178PTp0/9Fuo3nUkaMGDE6J/soXCdNelkqGvjSv4TjqJfMan0LiuvMFtSboU45ilClCmu+Xg+tLgrh4eE4dOgQzGZzO+Fu376Nq1ev4sqVKx3AZQyj0YixY8culm7juZRFny2aWVdXByLeSKlo4MuTMKlyKGlopWUb0g1n4ROoQhSZ2vCwcOTk5HTQdF2ByTlhwoRl0m08l+Ls7LyItfugQYM+kIoGvjwdwkmaz7o0tSI+qxy+QeFISExAGPk1xcXFskSzxaRJk1ZIt/Fcipub29pvv/kWI0eO/EQqGvjytDScHJiAmtQcBIREICUphYinxInjx2XJxphLDSbdxnMpK5at8L537x6mfzj9S6lo4MuzRDgB012UGFuhiMqAUqVFWkqa8PFOnTrViXAL5s3zk27juZStm7eG3b9/H59/9pmXVDTw5ZkjnA0Kz5vhq4qHVh8notkIVQTOnz9PZGuFubUFXp6e8Nrhlfee03tjpdt5qsJRs4uLy7/3FES4/RwArV6xUs/bGzZs+FupqoEr/U04MfZqV9YT2J6Xd+Y69ih0iE1IQnJyMtTqCDFiEanTify5qpMnsWvXrsIxY8aMf5opTZs2bTp95MgRZGVl9Qx87BHLMjo6GsOHD39LqmrgSn8RTgQEJl63DPJ3PuZBmfz+zjhy8gJ8glRIzziIxPg4bN+2rUNXSk1NDby9vUvGjRv3AWmLH0q3+MQkUqM9rYqgiDsykhDVLYKDg+FJWnrfvn1i9MVBuMeE0E6mNmzx2ocwTRSUmhiEaGIRrI6HvyoGe8MY8ThUYZRI2TOUSMfuLz4Lb98QlJaUIjgoGFevXG0nHePMmTPY7eNT8f748S5PknhMuJiYGFKyFmH/7GFy4cIFFBYW4vSp08hIS8dIB+EeH0dPXsbadevJ7OkRqdcjSh+JaPqvjouJRXxcHGKpYQKCFdit0CL7xAU6xzbVqTuQRjS2YV9YLPLyChAeqsSpms5BRW1tLWuPE++///40Mll/I91yv0mkVnuah+6YaKWlpXTfluG8GBlwuVajET7p6dNEuHQH4XqF8MRs1NfVdyIBw8xoNiMjNQ1qVTiUYWrsDdEjp+aKbF3y4Jy8O9CkHEVCUhpSkpLBw0Ryv8eNunfv3mpnZ+eZ/emYWwl38+ZNJCYmdtBwvC4HFoeG6wPsDdGhxca/6go8hBVDDjNrwgi1DnuVUcg7fU2YZFs/rysY6NrTj9UgKDQCBfkFiI6J7uDX2YKHw3x9fc9MnDjRbcGCBZas5j4UK+HYH7t165YgU0/EoeF6CyKLIowIJ9Po9rDO0rp25QpFn2oyt/HQaKPgGx6DgrM35eu3h+kuck9dwa59IaisrISCnHFODrD/LSsaTCYEBQSec3VxmT916tS/kx5Fr8VKuAMHDqC5uVmiU/fi0HC9RV2zII1cY3cH1kJhYWE4kJ4BlUYPf3Uijp2/LVLcu4tmDcYW+ARrUELBREiIQvhwcr9hxUVy2oMDg+qnTpmycOnSpT+WHsljy2MTzqHheoeEnOM4dqyQGlV+gkxPUFVVRcRT4ujRowiPIOJpklFIRJb7vQew+HWKmP04cChT5Nvl5+fL1m+Ly5cuQaFQmFxcXD6bPXv2T6RH88jyuIQ7Q4Q7mLEf7771js+4MeMWTuhjcJ2M0W+/vfCjjz76R+lyn470JeGsUaZfRCJukw8j17iPiiIiroo0XnFxCRThGgRHpsNQb5Z+s+vINuFIOcJJQ+bn5iI+Ib5Lv84WjY2NUIaGXpoxY8YyIt8jZ+H2RsOVlpSgqLAIhqK+R5F13WDAtGnT/iBd7tORvtZw7MT7h/KEGflGfRwwWQ6RI84jDJUnjiNIqYEy5iCKyYTKXYMA+XVZlQ3Y7ReKEydOIDQ0VDjycvXb4yr5k+Hh4Y0zZ8xYsXjx4r+XHlW3YiVcQUGBiIytUWh3ckby4ZLiE0Rkb+wHxMbE4kjmkYFFONHhS1onhDSRXEP2Fpw7lpCQgMioKNTUnEKAQoWE7Arp9+X9u6JzTdjpF0akOwlFUDCM9fJdNXK4dvUq1BERV2fOmLlm7ty5/yA9si7FSjjOAImia2RNx1rTnnjl5eU4eOAgzp45I/ZZfbjCY8ekI/peOM+Qh90GnIbLrmpEcmq6bAP2Fa5fvwGdToukpGQcOHiY/LsE0mic0Cl/TRw1B6oTkJtXIIaUiosMsvV2BY54iXg3Zs2atZai2p9Lj66TWAnHwkTi/jgOgC6Rj2iVb7/9lmekocXcAr1Oj2+++aY9Si0scBDukREam9llh29fg4eGyNlHXl4evMh05lY30jXI3wsHE/r0fETHJSE7OxspKSmydT4MN4joer3+1ly3uRvIz/sn6RG2iy3hrMLuQHJSEjNQIJ/MrclkpD33kUMBEZt5q4Y75tBwjw5fZRRa6b9XrsH6BdSgiQmJZL72QxmhQ8yhYrqOrrpP7mK/oRb+weFkYo+Tn6YSHc+y9XYB7je8RZqLNOWtefPmbf34g4//WXqUnQh3jwimVe2F+9cLEKvbI7B53QKoQ71x524bcq2Ec2i4x0dwOHf4dh8R9jXYL+JMjcwj2dirioXBaCatxvfVOZItOHMdXr4K0dBBQUFCU8rV2R2YLDExMeZPP/lkB0W1/6q1IxybVY2fK5prP0NL7acw1y5EU+0SpKqnURR/kzRctkPD9QZFdU0USUZSYzx+/1tvcPXqNQSTiS0qLBTZJNnHOSlA7lpJAxpbsZei6dLScjGIzoSVq7M7sMZrunWbkxJaQxSKOx013D3MnDISG//6Gtpq56H13Dz4b3sbLhMGodnc7NBwvQFHp4k5J2AwdD/5pV9B5pwHzrkbJUIfA216gTQu2/maDXTNqvjDIr/u8KFD2J+xX77OHoCJx68f66Dh6E/r50IabiFpOCIcwUyaLlU9lUw5abgchw/XC9zF3vA4YSrkGuRJo6KiAhHko+Xl5WNPSCQM9Z1HKdjU8pBZUk4lQskVqKysEJOzm5o7T8zuDoJwMZ0Jp/P7QGi3OxJ4PUPzAZrId2wn3PdPw3VsiMeFX6hWtjGeFq5fuw4ycygrLcVuvxAcKqsX1yk3Jptb1YidvkFi/DU4MAiXL1+WrbMryBHuHkHvN7GdbFbCpWkmopkJ9whRallZGfuLHCWLcx5VnkHC2Ws53paBcMTtj+NuhzaEUZQo1xhPG0lJSWRiDyAyJgERSdl21y8R0EQ+aL0Z3gEqVFVVQ6VS4eTJk7L1yUFewwE6f3vCzReEa7p96wHhutFwXP8md3cy+RkICgwUnd89HcWwyjNDuHXbd8d5+qrOefiHn/fyU9ftDNDWe/lrjF4B2gbPIO0FrwDdpZ0K/SVvhf6KjyLyinew/rp3cOR1b0XUzV3Bkbd2KaKbGDv91c2rV3/ZrNNozZF6fXOkTm+OiYwxk1/TkhCf0EYP6Q75VneTk5O/TUlJ+b+0tLTvCPfS6T87gx4k98pzHtnhw4fFg+G+Mh645wfF/Ww8XMQagFOyiw0GkVFbTv/1JqNRNLY9AezBaUs83bCIzvUO1ogRCMs/ih35aDtYl4Kso7lIJxJkZmbK1mcPWcIRKQI9nXG+yI0wC+cIvK4JeJ8Ix1Fq9xruu+++E/d/YP9+1J6tFQgMCMDNGzceiXTPDOH6SuiefmAPnk/Aqd2cZRsUFPQjBq3/3Z49e35My5/wAPmECRN+yhg0aNBP33333Z9xNsOyZct+sWbNml+uXLnyV59//vl/Llq06Lfz58//He37PZ3z0qTx418eO3bsn8c7OQ1ymTx5EWkHam95ItiCRwxCghWoJP9uX4AS+w1n27tOLISzaDouiz5YBF1UbHuqOA/Gy9VpRTvhbOY0cJSam52Jre5rkXU4XWDH1g04fCBdjDjkEglu3bTRcDKE4y6bwIBAkc3MBGUcpX9Gf1+/7zfhnqaMGjXqD7t37z7JLzmUI4MtRM9/coqIYjk1PTTuoHAHOk/maSOfrw57A0Jx7tw5BPFknWsdJ+vYg6PU6Kho3GlrI9xBg6kBWzZtFsELaX7otFpEkKlmshTk5yOTtDn7iicqj4M1PfubnE7F2twKnhbZXp5fIJYMTw+PDsday/kYObApfiYG7weKLFiw4KekDUM5M0SODPbg48LDwlBRVgFvfxWOtWcX2wYUbSiovUXBhJKCifNQKpXC/MnVx/DeuRM+3t74Yunn+OKzz/EXsVxq2V7KS5t1Kp/+4TQs/nQh1n71tcj/06jVwndkrcbzbgUuXMQlQmJ8Ak5V10CjisAFIjKXtR9D4HOWL1+OQH9/QgCCbMDbX65chSwH4fpeyOR+RFqhuSf5b8LEhoSI95f4BauQkl9tQ7YHoMAKfuExKCouQWJSIpk1+Tc8cTYLD5X1FBwENJAPGhkZCf5+xTHSVLt9fLBpw0a4b9gA94203OiOjbRcv3YdNlLZurVraR/vdxf7LMdsxOpVq4TP25U4TGo/yjvvvPM7Ly+v8mvXrskSowPMLUhNSaGA5QD27z+A4MhUi4ntRLy7UCdnkYnLEAmN/Mr/npD6YWCzfom0E8+6txJu7aYVmPGJM2YseA/TCR8xFr6HRV9NwUyxnIzZi9/DJ6umUPkEOm4cHTMBH7qNQWJyvESvzuIgXD8Lp4ovWbLEv7y8/L5cY9vDamJPVlVjl1848k9fl4hmE1DQMq2gBoEhEThXew6KEAV64jd2BY7KmXA8a81KOPd9SzBn++tw8xiC2TuGEYZi7u5h2JHzPub5DIHnUWcs8H8d29ImYb7PG5jjMRTzPN+C25bh0MYpJXp1FgfhnpC4TJo0NT4u7jZrMrlGtwV3FIeSia2qOokgpRqJ7cmdVlhIl1d9lfy6EJiMDSI9irN75errDqzhLpMvFmslHEWp7r6LMZcIN8djMOYQ4ebsGIJ5RDhPQbjBgnCf+r2Ore2EG4L5niPhtnU4dLEOwj0TQib2t9u2bSu+0tgo2/D2SE1NxcEDB3A4M1vMGuNZ/pw6b806Ect6M/YEqXHiZJXoCmGyyNX1MPBrZlm7sQ/G7yPxo+j1i03TiXDDBZGYcG6k4SyEc8ZcJhwtF/qNwBZBuBGkCUkDOgj37An3/y1csMC7uLi4RyaWRxk4W/f0mVPwpig1p/qyjaaTiGe6g5DodBw6nIW83FwkJSQJn1CuPjk0U5DReOmy6CrhCJS7Sdbu+VSYVCacm5VwPkPhJQg3BF5HJwgNt5kIN89nuES4tzB7y+tEuFCJXp3FQbinJBMnTnTW6/XXe+Lws3/Gk29qqqqgjNAjWja58y7ij5RCpY0ScxTCQpVi9ECuvq5gGzSs8VwA15VD4bpqEKasfgWuq4fgo/WDsVrjhGnug7BKNwbTNg3CCgUFFV8PhQsdM33165i6fDC00WESvTqLg3BPUZycnP7D3d09l+cayBHAHjzExUNL/OIcv7AYYU4tY8oPyHeksgE+/goxuZqTOk0mk2xdcrAl3Pm6WlRUlAuUV5aKrJe09FTM3jYUf40YhWWatzF7zbsoryiTjqtAJR9L2zyHoitxEO4pCw+3zZ8/fzv5XvfkSGAPHtDnjt+683UiufPI8QvCpNqSznC+CV5+ShHB6nR6MddUri57cGcv+4yaCDUqyok8BOuSkZqWglnuQ/GX0DexnOC20gnlZURGm2PKy4mAtOwKHIFzQOQg3FOWsWPHOqnV6sbuxkoZ7Sa2uhpafTR06fmdUp2YhP7qBOQfKxIahYes5OqyBY8S8EhDNaGGiG2LI4cOY93XX+OrjcvhNOclTJg1DDu9t8F9/UYcy89HDQUtHc/hbXtQOR2XlJDoINyzIGPGjPm3DevXH+FPa8oRwh7WDBdDcSl8QiJRVNcsEjktpLPModCnFyA2LgnV1VVQqyLEyIJcXd1h3969WPrFp3Bd8We4bRuGOWRaJy98Dbt2eSKEyC93Tlfgmf0Owj0jQib2h25ubhvy8vK+k2sse7DWUFKAcIF8NR+/EBwuq7PRdKz17iLDcBb+QTwv9aLw6/gdIvX19T0CT9hmf5AnVG8PXAGP3PHwzHsPHnnjsCNzIvRxKui0NvmHFARlZR1FSLiWApxIqDWRuGSXRMqEc3V1/V/plh3yLMj48ePfCg8Pv9jc1L2JZSddqQwT7xaOikuEKilLaLcHOXZt4tOdO/eF4ELDRZG1kZebJyG3S3DaUlJiElJTkrFl82Ys3zILnvljiXDj4MWkOzIB7tu+xuZNm8hsZ6GyvAIBwWFIzqsSv804dv4WduwLJXP9QGs7CPeMCk/5++qrrzJY09gSrCuwed2fniaSPHcFaVB0/rYgnLWj2GBqgb8qHgHKaEIUAm0QEEYQ65ESorBzTxB/gwJbtrtj+/ZNcP3kHXwWNKIdi/2GY9YcV2ylffxi7ekffYyUYzXtv2clu6HOjDDVg7R/B+GeYWETO2vmzNVZWVnf2pKrK9RU1wgTe/niJewJCEVG0Zn2hmciPPDxLBCasAOs82fvQnegCHv27saMVcOxOswJH61/DYv3jMQnnsMxbd0QrFA6YSr5dF/rxsFp2iAEK1Xg11nY1i8IR3UFinkmlmmbDsI9B+Lk5PS6QqEwyn1i0x48I587fqspik1KSYMyVkru7ECEh4PNYeT+QiiUAVgZPh5zdg7FF6FvY2ngcCzYMxwrtaMxa9urWBM3Fi4b/owlW8dAExktQziu6y5CbN5E6iDccyJkYn+xatWqJM78tSVYV+A8N45kq2tOY5d/GApOX4OB3+LZDdgUFxK0aXkIDQmG88I/wW3T6/jwy0GYuupVuG19De8v+hMW7n4T4+b+AUt938ZI5z9Co48hs00akv03JhqBNWrOyUsUKSe0X5eDcM+RAPjBxx9//JfMzMy7tuTqCvxtMO6zu9J4BcnJaUhOsiCJQdsd0F6eKhAaEgY/P1/s9NiBtRs3YYvHLmz18MZmwrYdPrTtTds7abkTHl4+VL4XpcY2lFpJR8tjZ29g++5A8VYA6zU5CPccyjvvvDM4ICDgXE/61djE8nyG6KgoMXzFiOoC1v0xUbSk47k7hD96ok7NEQRiMpWSibQQyrJUp5ImVOkRoYlBGCFcG02IgUoXI7TeNbs5GA7CPafC74hbsWJFFH/xxrZB+xrnamsRQebVOvfXHn6aZDFdUO5cOfA7Vxwdv8+xUOMtzMjIuCPXuH2Bc7VnhRaTIxuDX7R980bPXq3B0xgLCw1IOFp5odjYWldiaj1Pfl9KqenO1rL6lvUlJkbrluL6lmyKmJPoGM8SU/OGMmPzomJj02zat6SkvmVDibE1xGBsO1ZS16zi7fIG88xSU/ObJcbmNyouNo+ovNj2RqnR/KHB1Lqdjs0qNpqXl15q+w27JNJjc0hvZNSoUS/v27fvFHcCyzV0b1BLhNM8hHARKTkiIu54HneByOMYES45v0rqfuHggrti5KJoqYwzYsh02+9nc96+Lratpp7LeP2u6JJpP5eWRabWbw0NLTulx+aQ3gi/eHr58uWxPKjfsfF7ByYcazgrQWwhIlFTK3b5KXE4MwuXLzeK5IKb1693idycXKQQ4ez7BPsHHd0ACzFbI6RH5pC+EFcX1zkpKSnEFXkCPSoaL19GoD5d0hxysGiiA4az4jj+mPE+VUKX2BMej7zTPfy6T5/CkjvoIFw/yNi33/79nl3eJx726aWeotVshndghGgs+YZkWPfZLh8G23OfFByE61dZ5uLy4tKlS0OOV1b2aP5E12hFamo60gpPCb9IvjGfBzgI90Rk6pQp0xPiE5p68lXFhyFEqRafk5Lz5fofclqyK3R1nmXbQbgnIKNHj/5vDw+PsqtXH/4inO5w6FCmmJYYFn+YNN5ppBedIZxFRh+A60knP5DrTSmoeYB8m3Xrtn2ZLaz77Y5LlbbjMksTpMfikP4U/lIhRbK+ZWVlj21i+aPG/DkCY70R2dk5ItnySB8iKyubltmYPHmqZtiIt4YPG/Fun2Pk6LHDpEfikCchH3zwweTY2NibvX0nSX9iyZIl26XLdchAkDFjxvzXtm3bivgbXHIN3nfoKak7HvfZ4sU7pEt1yEAR/vw5vwXAUGToZRTb9yDT7yDcQBVnZ+cJkT18C8CTgoNwA1xGjhz5643r1iUogoPzrQgJVtCSEZwfLEGheFDWPRRSHQ/KrHXYl1tAZVw/wdXV9VO+rvT09B8zxEX2mbzwwv8Dqz2REX1DUHMAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img41"
                        ></image>
                        <clipPath id="clip42">
                            <rect x="0" y="0" width="1181100" height="575408" />
                        </clipPath>
                        <clipPath id="clip43">
                            <rect x="0" y="0" width="76200" height="190500" />
                        </clipPath>
                        <clipPath id="clip44">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip45">
                            <rect x="0" y="0" width="85725" height="200025" />
                        </clipPath>
                        <clipPath id="clip46">
                            <rect x="-0.0078125" y="-0.5" width="85725" height="200025" />
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
                            d="M0 0 0.000104987 45.1028"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 195.5 393.603)"
                        />
                        <path
                            d="M1079.47 550.165 1079 470.509 1082 470.491 1082.47 550.147ZM1080.97 550.157 1085.45 547.13 1081.01 556.156 1076.45 547.183Z"
                            fill="#989898"
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
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(607.307 19)"
                        >
                            ГЭС-27 (Хўжакент)
                        </text>
                        <path
                            d="M0 0 1181.35 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1226.85 186.5)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(188.168 90)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(196.168 90)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(199.668 90)"
                        >
                            27
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(210.335 90)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(213.835 90)"
                        >
                            Консерва
                        </text>
                        <path
                            d="M0 0 1221.61 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1267.11 142.5)"
                        />
                        <path
                            d="M1.5-4.27338e-06 1.5001 36.8514-1.49989 36.8514-1.5 4.27338e-06ZM4.5001 36.8514C4.50011 39.3367 2.4854 41.3514 0.000117807 41.3514-2.48516 41.3514-4.49989 39.3367-4.4999 36.8515-4.4999 34.3662-2.48519 32.3514 9.21667e-05 32.3514 2.48537 32.3514 4.5001 34.3661 4.5001 36.8514Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1213.5 224.352)"
                        />
                        <path
                            d="M1258.44 223.181 1258 142.508 1261 142.492 1261.44 223.165ZM1255 142.525C1254.99 140.039 1256.99 138.014 1259.48 138 1261.96 137.987 1263.99 139.99 1264 142.475 1264.01 144.961 1262.01 146.986 1259.52 147 1257.04 147.014 1255.01 145.01 1255 142.525Z"
                            fill="#0099FF"
                        />
                        <a href="<?= $urlSwitch13 ?>">
                            <rect
                                id="c1"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1227.5 233.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch3 ?>">
                            <rect
                                id="c370"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 348.5 229.5)"
                            />
                        </a>
                        <path
                            d="M0 0 1146.77 1.28462"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1192.27 275.5)"
                        />
                        <path
                            d="M1.49992-0.0156364 1.99661 47.6296-1.00323 47.6609-1.49992 0.0156364ZM-4.49976 0.0469091C-4.52566-2.43824-2.53206-4.47385-0.0469091-4.49976 2.43824-4.52566 4.47385-2.53206 4.49976-0.0469091 4.52566 2.43824 2.53206 4.47385 0.0469091 4.49976-2.43824 4.52566-4.47385 2.53206-4.49976 0.0469091Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 357.5 277.145)"
                        />
                        <path
                            d="M331.533 242 357.086 242.553 357.021 245.552 331.468 245ZM357.15 239.554C359.635 239.608 361.606 241.665 361.552 244.15 361.498 246.635 359.441 248.605 356.956 248.552 354.471 248.498 352.5 246.44 352.554 243.955 352.608 241.471 354.666 239.5 357.15 239.554Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1213.5 222.5 1226.98 222.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1244.5 222.5 1259.39 222.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.49997-0.00913648 1.76842 44.0636-1.23152 44.0819-1.49997 0.00913648ZM-4.49992 0.0274094C-4.51505-2.45783-2.51264-4.48478-0.0274094-4.49992 2.45783-4.51505 4.48478-2.51264 4.49992-0.0274094 4.51505 2.45783 2.51264 4.48478 0.0274094 4.49992-2.45783 4.51505-4.48478 2.51264-4.49992 0.0274094Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1128.5 275.573)"
                        />
                        <a href="<?= $urlSwitch12 ?>">
                            <rect
                                id="c514"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1119.5 231.5)"
                            />
                        </a>
                        <path
                            d="M1.5-9.39785e-06 1.5001 16.757-1.49989 16.7571-1.5 9.39785e-06ZM4.5001 16.757C4.50012 19.2423 2.48541 21.257 0.00013318 21.2571-2.48515 21.2571-4.49988 19.2424-4.4999 16.7571-4.49991 14.2718-2.4852 12.2571 7.67933e-05 12.2571 2.48536 12.257 4.50009 14.2717 4.5001 16.757Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1115.5 202.257)"
                        />
                        <path
                            d="M1114.5 201 1127.98 201 1127.98 204 1114.5 204ZM1127.98 198C1130.46 198 1132.48 200.015 1132.48 202.5 1132.48 204.985 1130.46 207 1127.98 207 1125.49 207 1123.48 204.985 1123.48 202.5 1123.48 200.015 1125.49 198 1127.98 198Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M332.888 244.899 332.5 194.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M332.206 182.563C335.211 182.084 338.004 184.354 338.442 187.633 338.881 190.912 336.8 193.958 333.795 194.437 333.248 194.524 332.692 194.521 332.146 194.427"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.728504 33.6405"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 332.5 182.141)"
                        />
                        <path
                            d="M333.271 137.549C336.281 137.146 339.049 139.26 339.451 142.271 339.854 145.281 337.74 148.049 334.73 148.451 334.227 148.519 333.718 148.516 333.216 148.444"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-3.54253e-06 1.50009 38.4542-1.49991 38.4542-1.5 3.54253e-06ZM9.08167e-05 38.4542 4.50008 35.4542 0.000104987 44.4542-4.49992 35.4542Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 333.5 136.954)"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1128.5 180.219)"
                        />
                        <path
                            d="M1128.21 180.563C1131.21 180.084 1134 182.354 1134.44 185.633 1134.88 188.912 1132.8 191.958 1129.79 192.437 1129.25 192.524 1128.69 192.521 1128.15 192.427"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.183832 20.3606"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1128.5 211.861)"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c2735"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 84.5001 453.5)"
                            />
                            <path id="c2734"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 84.5001 429.5)"
                            />
                        </a>
                        <path
                            d="M1.5-6.11294e-06 1.5001 25.7618-1.49989 25.7618-1.5 6.11294e-06ZM4.5001 25.7618C4.50011 28.247 2.4854 30.2618 0.000123326 30.2618-2.48516 30.2618-4.49988 28.2471-4.4999 25.7618-4.49991 23.2765-2.48519 21.2618 8.6648e-05 21.2618 2.48537 21.2618 4.50009 23.2765 4.5001 25.7618Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 100.5 396.262)"
                        />
                        <path
                            d="M100.5 453.5 101.545 539.335"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M196.118 371 81.5001 371 81.5001 368 196.118 368ZM196.118 365C198.603 365 200.618 367.015 200.618 369.5 200.618 371.985 198.603 374 196.118 374 193.633 374 191.618 371.985 191.618 369.5 191.618 367.015 193.633 365 196.118 365Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M1.49997-0.00913648 1.76842 44.0636-1.23152 44.0819-1.49997 0.00913648ZM-4.49992 0.0274094C-4.51505-2.45783-2.51264-4.48478-0.0274094-4.49992 2.45783-4.51505 4.48478-2.51264 4.49992-0.0274094 4.51505 2.45783 2.51264 4.48478 0.0274094 4.49992-2.45783 4.51505-4.48478 2.51264-4.49992 0.0274094Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 165.5 275.573)"
                        />
                        <a href="<?= $urlSwitch1 ?>">
                            <rect
                                id="c2733"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 156.5 231.5)"
                            />
                        </a>
                        <path
                            d="M165.5 250 197.404 250 197.404 253 165.5 253ZM165.5 256C163.015 256 161 253.985 161 251.5 161 249.015 163.015 247 165.5 247 167.985 247 170 249.015 170 251.5 170 253.985 167.985 256 165.5 256Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M196.626 293.338 196.5 281.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 18.2635"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 196.5 269.764)"
                        />
                        <a href="<?= $urlSwitch5 ?>">
                            <rect
                                id="c346"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 536.5 229.5)"
                            />
                        </a>
                        <path
                            d="M1.49997-0.00867652 1.76832 46.3824-1.23163 46.3998-1.49997 0.00867652ZM-4.49992 0.0260296C-4.5143-2.45921-2.51127-4.48555-0.0260296-4.49992 2.45921-4.5143 4.48555-2.51127 4.49992-0.0260296 4.5143 2.45921 2.51127 4.48555 0.0260296 4.49992-2.45921 4.5143-4.48555 2.51127-4.49992 0.0260296Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 545.5 275.891)"
                        />
                        <path
                            d="M520.513 242 545.267 242.212 545.241 245.212 520.487 245ZM545.293 239.213C547.778 239.234 549.775 241.266 549.754 243.751 549.732 246.236 547.701 248.234 545.215 248.212 542.73 248.191 540.733 246.159 540.754 243.674 540.775 241.189 542.807 239.191 545.293 239.213Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M520.558 242.616 520.5 193.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M520.707 182.576C523.434 182.051 525.999 184.277 526.437 187.549 526.875 190.821 525.019 193.899 522.293 194.424 521.748 194.529 521.192 194.525 520.648 194.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.728504 33.6405"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 520.5 182.141)"
                        />
                        <path
                            d="M1.5-3.54253e-06 1.50009 38.4542-1.49991 38.4542-1.5 3.54253e-06ZM9.08167e-05 38.4542 4.50008 35.4542 0.000104987 44.4542-4.49992 35.4542Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 521.5 136.954)"
                        />
                        <path
                            d="M1.5-3.41038e-06 1.5001 46.1768-1.49989 46.1768-1.5 3.41038e-06ZM-4.5 1.02311e-05C-4.50001-2.48527-2.48529-4.49999-1.02311e-05-4.5 2.48527-4.50001 4.49999-2.48529 4.5-1.02311e-05 4.50001 2.48527 2.48529 4.49999 1.02311e-05 4.5-2.48527 4.50001-4.49999 2.48529-4.5 1.02311e-05Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 448.5 276.677)"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect
                                id="c2973"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 438.5 230.5)"
                            />
                        </a>
                        <path
                            d="M5.52688e-06-1.5 28.4935-1.49989 28.4935 1.5001-5.52688e-06 1.5ZM-1.65806e-05 4.5C-2.4853 4.49999-4.50001 2.48526-4.5-1.65806e-05-4.49999-2.4853-2.48526-4.50001 1.65806e-05-4.5 2.4853-4.49999 4.50001-2.48526 4.5 1.65806e-05 4.49999 2.4853 2.48526 4.50001-1.65806e-05 4.5Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 447.5 252.5)"
                        />
                        <path
                            d="M476.626 293.338 476.5 281.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 18.2635"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 476.5 269.764)"
                        />
                        <path
                            d="M1.49997-0.00872662 1.76832 46.116-1.23163 46.1334-1.49997 0.00872662ZM-4.49992 0.0261799C-4.51438-2.45906-2.51142-4.48547-0.0261799-4.49992 2.45906-4.51438 4.48547-2.51142 4.49992-0.0261799 4.51438 2.45906 2.51142 4.48547 0.0261799 4.49992-2.45906 4.51438-4.48547 2.51142-4.49992 0.0261799Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 732.5 276.625)"
                        />
                        <a href="<?= $urlSwitch7 ?>">
                            <rect
                                id="c3213"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 723.5 230.5)"
                            />
                        </a>
                        <path
                            d="M731.5 250 767.873 250 767.873 253 731.5 253ZM731.5 256C729.015 256 727 253.985 727 251.5 727 249.015 729.015 247 731.5 247 733.985 247 736 249.015 736 251.5 736 253.985 733.985 256 731.5 256Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M0 0 0.000104987 13.0014"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 767.5 294.501)"
                        />
                        <path
                            d="M766.707 269.576C769.434 269.051 771.999 271.277 772.437 274.549 772.875 277.821 771.019 280.899 768.293 281.424 767.748 281.529 767.192 281.525 766.648 281.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 18.2635"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 766.5 269.764)"
                        />
                        <a href="<?= $urlSwitch2 ?>">
                            <rect
                                id="c490"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 240.5 230.5)"
                            />
                        </a>
                        <path
                            d="M1.49992-0.0156364 1.99661 47.6296-1.00323 47.6609-1.49992 0.0156364ZM-4.49976 0.0469091C-4.52566-2.43824-2.53206-4.47385-0.0469091-4.49976 2.43824-4.52566 4.47385-2.53206 4.49976-0.0469091 4.52566 2.43824 2.53206 4.47385 0.0469091 4.49976-2.43824 4.52566-4.47385 2.53206-4.49976 0.0469091Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 249.5 278.145)"
                        />
                        <path
                            d="M223.532 242 249.086 242.553 249.021 245.552 223.468 245ZM249.15 239.554C251.635 239.608 253.606 241.665 253.552 244.15 253.498 246.635 251.44 248.605 248.956 248.552 246.471 248.498 244.5 246.44 244.554 243.955 244.608 241.471 246.666 239.5 249.15 239.554Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M224.888 244.899 224.5 194.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.728504 33.6405"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 224.5 183.141)"
                        />
                        <path
                            d="M1.5-3.54253e-06 1.50009 38.4542-1.49991 38.4542-1.5 3.54253e-06ZM9.08167e-05 38.4542 4.50008 35.4542 0.000104987 44.4542-4.49992 35.4542Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 225.5 137.954)"
                        />
                        <a href="<?= $urlSwitch6 ?>">
                            <rect
                                id="c442"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 638.5 230.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.268346 46.3911"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 647.5 276.891)"
                        />
                        <path
                            d="M622.513 242 647.267 242.212 647.241 245.212 622.487 245ZM647.293 239.213C649.778 239.234 651.775 241.266 651.754 243.751 651.732 246.236 649.701 248.234 647.215 248.212 644.73 248.191 642.733 246.159 642.754 243.674 642.775 241.189 644.807 239.191 647.293 239.213Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M622.558 243.616 622.5 194.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.728504 33.6405"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 622.5 183.141)"
                        />
                        <path
                            d="M1.5-3.54253e-06 1.50009 38.4542-1.49991 38.4542-1.5 3.54253e-06ZM9.08167e-05 38.4542 4.50008 35.4542 0.000104987 44.4542-4.49992 35.4542Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 623.5 137.954)"
                        />
                        <a href="<?= $urlSwitch8 ?>">
                            <rect
                                id="c466"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 796.5 229.5)"
                            />
                        </a>
                        <path
                            d="M1.49997-0.00867652 1.76832 46.3824-1.23163 46.3998-1.49997 0.00867652ZM-4.49992 0.0260296C-4.5143-2.45921-2.51127-4.48555-0.0260296-4.49992 2.45921-4.5143 4.48555-2.51127 4.49992-0.0260296 4.5143 2.45921 2.51127 4.48555 0.0260296 4.49992-2.45921 4.5143-4.48555 2.51127-4.49992 0.0260296Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 805.5 275.891)"
                        />
                        <path
                            d="M780.513 241 805.267 241.212 805.241 244.212 780.487 244ZM805.293 238.213C807.778 238.234 809.775 240.266 809.754 242.751 809.732 245.236 807.701 247.234 805.215 247.212 802.73 247.191 800.733 245.159 800.754 242.674 800.775 240.189 802.807 238.191 805.293 238.213Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M780.558 242.616 780.5 193.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.728504 33.6405"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 781.5 182.141)"
                        />
                        <path
                            d="M1.5-3.54253e-06 1.50009 38.4542-1.49991 38.4542-1.5 3.54253e-06ZM9.08167e-05 38.4542 4.50008 35.4542 0.000104987 44.4542-4.49992 35.4542Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 781.5 136.954)"
                        />
                        <a href="<?= $urlSwitch9 ?>">
                            <rect
                                id="c394"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 882.5 229.5)"
                            />
                        </a>
                        <path
                            d="M1.49997-0.00867652 1.76832 46.3824-1.23163 46.3998-1.49997 0.00867652ZM-4.49992 0.0260296C-4.5143-2.45921-2.51127-4.48555-0.0260296-4.49992 2.45921-4.5143 4.48555-2.51127 4.49992-0.0260296 4.5143 2.45921 2.51127 4.48555 0.0260296 4.49992-2.45921 4.5143-4.48555 2.51127-4.49992 0.0260296Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 891.5 275.891)"
                        />
                        <path
                            d="M866.513 242 891.267 242.212 891.241 245.212 866.487 245ZM891.293 239.213C893.778 239.234 895.775 241.266 895.754 243.751 895.732 246.236 893.701 248.234 891.215 248.212 888.73 248.191 886.733 246.159 886.754 243.674 886.775 241.189 888.807 239.191 891.293 239.213Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M866.707 182.576C869.434 182.051 871.999 184.277 872.437 187.549 872.875 190.821 871.019 193.899 868.293 194.424 867.748 194.529 867.192 194.525 866.648 194.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.728504 33.6405"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 866.5 182.141)"
                        />
                        <path
                            d="M867.772 137.559C870.504 137.116 873.045 139.194 873.447 142.199 873.849 145.204 871.96 147.999 869.228 148.441 868.727 148.523 868.218 148.519 867.718 148.432"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-3.54253e-06 1.50009 38.4542-1.49991 38.4542-1.5 3.54253e-06ZM9.08167e-05 38.4542 4.50008 35.4542 0.000104987 44.4542-4.49992 35.4542Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 867.5 136.954)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(303.477 92)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(311.477 92)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(314.977 92)"
                        >
                            27
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(325.643 92)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(329.143 92)"
                        >
                            Чирчи
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(361.31 92)"
                        >
                            қ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(367.477 92)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(370.977 92)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(479.468 88)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(487.468 88)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(490.968 88)"
                        >
                            27
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(501.635 88)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(505.135 88)"
                        >
                            Чирчиқ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(543.468 88)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(546.968 88)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(599.584 90)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(607.584 90)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(611.084 90)"
                        >
                            Чорбоғ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(645.751 90)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(649.251 90)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(750.837 88)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(758.837 88)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(762.337 88)"
                        >
                            Чорбоғ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(797.004 88)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(800.504 88)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(838.685 89)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(846.685 89)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(850.185 89)"
                        >
                            Қайнар
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(886.852 89)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(890.352 89)"
                        >
                            1
                        </text>
                        <path
                            d="M1.5-3.13731e-06 1.5001 50.196-1.49989 50.196-1.5 3.13731e-06ZM-4.5 9.41192e-06C-4.50001-2.48527-2.48529-4.49999-9.41192e-06-4.5 2.48527-4.50001 4.49999-2.48529 4.5-9.41192e-06 4.50001 2.48527 2.48529 4.49999 9.41192e-06 4.5-2.48527 4.50001-4.49999 2.48529-4.5 9.41192e-06Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 989.5 397.696)"
                        />
                        <a href="<?= $urlSwitch18 ?>">
                            <rect
                                id="c537"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 980.5 381.5)"
                            />
                        </a>
                        <path
                            d="M0 0 310.823 0.163989"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1200.32 397.5)"
                        />
                        <a href="<?= $urlSwitch19 ?>">
                            <rect
                                id="c609"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1071.5 499.5)"
                            />
                        </a>
                        <path
                            d="M1.50001 5.99999 1.5001 71.9521-1.49989 71.9521-1.49999 6ZM8.75473e-06 6-4.49999 9.00001 0 0 4.50001 8.99999ZM4.5001 71.9521C4.50011 74.4374 2.48539 76.4521 0.000111553 76.4521-2.48517 76.4521-4.49989 74.4374-4.4999 71.9521-4.4999 69.4669-2.48518 67.4521 9.84208e-05 67.4521 2.48538 67.4521 4.5001 69.4668 4.5001 71.9521Z"
                            fill="#546600"
                            transform="matrix(1 0 0 -1 908.5 469.452)"
                        />
                        <g clip-path="url(#clip1)">
                            <g filter="url(#fx0)" transform="translate(891 413)">
                                <g>
                                    <rect
                                        x="0"
                                        y="0"
                                        width="18"
                                        height="18"
                                        stroke="#546600"
                                        stroke-width="3"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        fill="#FF0000"
                                        transform="matrix(1 0 0 -1 8.50006 26.5001)"
                                    />
                                </g>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch17 ?>">
                            <rect
                                id="c561"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#546600"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 899.5 437.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch11 ?>">
                            <rect
                                id="c418"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1038.5 229.5)"
                            />
                        </a>
                        <path
                            d="M1.49997-0.00867652 1.76832 46.3824-1.23163 46.3998-1.49997 0.00867652ZM-4.49992 0.0260296C-4.5143-2.45921-2.51127-4.48555-0.0260296-4.49992 2.45921-4.5143 4.48555-2.51127 4.49992-0.0260296 4.5143 2.45921 2.51127 4.48555 0.0260296 4.49992-2.45921 4.5143-4.48555 2.51127-4.49992 0.0260296Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1047.5 275.891)"
                        />
                        <path
                            d="M1021.5 241 1047.41 241 1047.41 244 1021.5 244ZM1047.41 238C1049.9 238 1051.91 240.015 1051.91 242.5 1051.91 244.985 1049.9 247 1047.41 247 1044.93 247 1042.91 244.985 1042.91 242.5 1042.91 240.015 1044.93 238 1047.41 238Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1022.56 242.616 1022.5 193.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.728504 33.6405"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1022.5 182.141)"
                        />
                        <path
                            d="M1.5-3.54253e-06 1.50009 38.4542-1.49991 38.4542-1.5 3.54253e-06ZM9.08167e-05 38.4542 4.50008 35.4542 0.000104987 44.4542-4.49992 35.4542Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1023.5 136.954)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(995.473 89)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1003.47 89)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1006.97 89)"
                        >
                            Кайнар
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1043.64 89)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1047.14 89)"
                        >
                            2
                        </text>
                        <path
                            d="M1.50002 6 1.5001 37.7953-1.49989 37.7953-1.49998 6.00001ZM1.66667e-05 6-4.49997 9.00001 0 0 4.50002 8.99999ZM4.5001 37.7953C4.50011 40.2805 2.4854 42.2953 0.000117487 42.2953-2.48516 42.2953-4.49989 40.2806-4.4999 37.7953-4.4999 35.31-2.48519 33.2953 9.24869e-05 33.2953 2.48537 33.2953 4.5001 35.31 4.5001 37.7953Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 988.5 554.295)"
                        />
                        <path
                            d="M1.5-6.77635e-06 1.5001 23.2397-1.49989 23.2397-1.5 6.77635e-06ZM4.5001 23.2397C4.50012 25.7249 2.48541 27.7397 0.000125316 27.7397-2.48516 27.7397-4.49988 25.725-4.4999 23.2397-4.49991 20.7544-2.4852 18.7397 8.46578e-05 18.7397 2.48537 18.7397 4.50009 20.7544 4.5001 23.2397Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1048.5 210.74)"
                        />

                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c2731"
                                  d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                  fill="#FFFFFF"
                                  fill-rule="evenodd"
                                  transform="matrix(1 0 0 -1 181.5 348.5)"
                            />
                            <path
                                d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 181.5 348.5)"
                            />
                            <path id="c2732"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 181.5 324.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.000104987 45.1028"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 477.5 392.603)"
                        />
                        <path
                            d="M477.118 370 362.5 370 362.5 367 477.118 367ZM477.118 364C479.603 364 481.618 366.015 481.618 368.5 481.618 370.985 479.603 373 477.118 373 474.633 373 472.618 370.985 472.618 368.5 472.618 366.015 474.633 364 477.118 364Z"
                            fill="#6600CC"
                        />
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c2971"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 462.5 347.5)"
                            />
                            <path
                                d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 462.5 347.5)"
                            />
                            <path id="c2972"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 462.5 323.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.000104987 45.1028"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 766.5 393.603)"
                        />
                        <path
                            d="M767.118 371 652.5 371 652.5 368 767.118 368ZM767.118 365C769.603 365 771.618 367.015 771.618 369.5 771.618 371.985 769.603 374 767.118 374 764.633 374 762.618 371.985 762.618 369.5 762.618 367.015 764.633 365 767.118 365Z"
                            fill="#6600CC"
                        />
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c3211"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 752.5 348.5)"
                            />
                            <path
                                d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 752.5 348.5)"
                            />
                            <path id="c3212"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 752.5 324.5)"
                            />
                        </a>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(927.377 431)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(934.544 431)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(938.044 431)"
                        >
                            28
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(36.4235 183)"
                        >
                            I
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(40.5902 183)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(44.0902 183)"
                        >
                            СШ 110 кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(38.9156 291)"
                        >
                            ОСШ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(66.5823 291)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(70.0823 291)"
                        >
                            110кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(37.7835 157)"
                        >
                            II
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(46.1169 157)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(49.6169 157)"
                        >
                            СШ 110 кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(962.658 583)"
                        >
                            ЩИТ Н1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(224.213 404)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(231.047 404)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(234.547 404)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(224.213 417)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(245.547 417)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(224.213 430)"
                        >
                            55 МВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(224.213 443)"
                        >
                            СВ 808/130
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(276.713 443)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(280.213 443)"
                        >
                            40
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(214.422 308)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(221.589 308)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(225.089 308)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(214.422 321)"
                        >
                            10,5/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(254.755 321)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(214.422 334)"
                        >
                            80 000
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(246.422 334)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(214.422 347)"
                        >
                            ТДЦ 80 000/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(53.789 405)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(68.6223 405)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(72.1223 405)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(26.4556 418)"
                        >
                            10,5/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(64.1223 418)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(37.789 431)"
                        >
                            400
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(56.4556 431)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(24.6223 444)"
                        >
                            ТСЗ 400/10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(505.322 404)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(512.156 404)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(515.656 404)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(505.322 417)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(526.656 417)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(505.322 430)"
                        >
                            55 МВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(505.322 443)"
                        >
                            СВ 808/130
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(557.822 443)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(561.322 443)"
                        >
                            40
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(794.36 400)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(801.193 400)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(804.693 400)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(794.36 413)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(815.693 413)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(794.36 426)"
                        >
                            55 МВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(794.36 439)"
                        >
                            СВ 808/130
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(846.86 439)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(850.36 439)"
                        >
                            40
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(496.313 309)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(503.48 309)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(506.98 309)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(496.313 322)"
                        >
                            10,5/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(536.646 322)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(496.313 335)"
                        >
                            80 000
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(528.313 335)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(496.313 348)"
                        >
                            ТДЦ 80 000/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(787.052 308)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(794.219 308)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(797.719 308)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(787.052 321)"
                        >
                            10,5/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(827.385 321)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(787.052 334)"
                        >
                            80 000
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(819.052 334)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(787.052 347)"
                        >
                            ТДЦ 80 000/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1009.28 305)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1024.11 305)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1027.61 305)"
                        >
                            4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1009.28 318)"
                        >
                            6,3/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1044.28 318)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1009.28 331)"
                        >
                            2 500
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1035.95 331)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1009.28 344)"
                        >
                            ТМН 2 500/110 У1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(338.284 404)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(353.117 404)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(356.617 404)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(310.951 417)"
                        >
                            10,5/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(348.617 417)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(322.284 430)"
                        >
                            400
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(340.951 430)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(309.117 443)"
                        >
                            ТСЗ 400/10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(627.284 405)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(642.117 405)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(645.617 405)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(599.95 418)"
                        >
                            10,5/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(637.617 418)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(611.284 431)"
                        >
                            400
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(629.95 431)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(598.117 444)"
                        >
                            ТСЗ 400/10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1104.18 424)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1119.02 424)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1122.52 424)"
                        >
                            5
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1104.18 437)"
                        >
                            6,3/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1136.52 437)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1104.18 450)"
                        >
                            630
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1122.85 450)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1104.18 463)"
                        >
                            ТСЗ 630/10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1209.78 426)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1224.62 426)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1228.12 426)"
                        >
                            6
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1209.78 439)"
                        >
                            6,3/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1242.12 439)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1209.78 452)"
                        >
                            630
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1228.45 452)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1209.78 465)"
                        >
                            ТСЗ 630/10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1219.91 243)"
                        >
                            МШВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1248.74 243)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1252.24 243)"
                        >
                            110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1140.19 227)"
                        >
                            ОВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1155.69 227)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1159.19 227)"
                        >
                            110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(383.978 224)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(391.145 224)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(394.645 224)"
                        >
                            Ч
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(402.478 224)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(405.978 224)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(177.973 224)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(185.14 224)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(188.64 224)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(572.491 223)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(579.657 223)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(583.157 223)"
                        >
                            Ч
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(590.991 223)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(594.491 223)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(472.851 226)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(480.017 226)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(483.517 226)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(751.369 224)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(758.535 224)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(762.035 224)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(270.571 224)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(277.737 224)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(281.237 224)"
                        >
                            К
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(670.178 223)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(677.345 223)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(680.845 223)"
                        >
                            Чар
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(700.012 223)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(703.512 223)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(818.475 223)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(825.642 223)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(829.142 223)"
                        >
                            Чар
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(848.309 223)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(851.809 223)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(905.548 224)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(912.715 224)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(916.215 224)"
                        >
                            Ка
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(929.215 224)"
                        >
                            й
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(935.382 224)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(938.882 224)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1066.88 222)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1074.05 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1077.55 222)"
                        >
                            Кай
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1096.71 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1100.21 222)"
                        >
                            2
                        </text>
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c2975"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 367.5 453.5)"
                            />
                            <path id="c2974"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 367.5 429.5)"
                            />
                        </a>
                        <path
                            d="M1.5-5.82009e-06 1.5001 27.0581-1.49989 27.0581-1.5 5.82009e-06ZM4.5001 27.058C4.50011 29.5433 2.4854 31.558 0.000122447 31.5581-2.48516 31.5581-4.49989 29.5434-4.4999 27.0581-4.4999 24.5728-2.48519 22.5581 8.75266e-05 22.5581 2.48537 22.558 4.50009 24.5728 4.5001 27.058Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 384.5 395.558)"
                        />
                        <path
                            d="M386 453.488 386.677 537.755 383.677 537.78 383 453.512ZM389.677 537.731C389.697 540.216 387.698 542.247 385.213 542.267 382.728 542.287 380.697 540.289 380.677 537.804 380.657 535.318 382.656 533.288 385.141 533.268 387.626 533.248 389.657 535.246 389.677 537.731Z"
                            fill="#989898"
                        />
                        <a href="<?= $urlTransformer6 ?>">
                            <path id="c3215"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 656.5 453.5)"
                            />
                            <path id="c3214"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 656.5 429.5)"
                            />
                        </a>
                        <path
                            d="M1.5-5.82009e-06 1.5001 27.0581-1.49989 27.0581-1.5 5.82009e-06ZM4.5001 27.058C4.50011 29.5433 2.4854 31.558 0.000122447 31.5581-2.48516 31.5581-4.49989 29.5434-4.4999 27.0581-4.4999 24.5728-2.48519 22.5581 8.75266e-05 22.5581 2.48537 22.558 4.50009 24.5728 4.5001 27.058Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 672.5 396.558)"
                        />
                        <path
                            d="M674 453.5 674 537.662 671 537.662 671 453.5ZM677 537.662C677 540.147 674.985 542.162 672.5 542.162 670.015 542.162 668 540.147 668 537.662 668 535.177 670.015 533.162 672.5 533.162 674.985 533.162 677 535.177 677 537.662Z"
                            fill="#989898"
                        />
                        <a href="<?= $urlTransformer7 ?>">
                            <path id="c5371"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 974.5 347.5)"
                            />
                            <path id="c5372"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 974.5 322.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer8 ?>">
                            <path id="c6091"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1065.5 470.5)"
                            />
                            <path id="c6092"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1065.5 446.5)"
                            />
                        </a>
                        <path
                            d="M1082 398.5 1082 416.277 1079 416.277 1079 398.5ZM1076 398.5C1076 396.015 1078.01 394 1080.5 394 1082.99 394 1085 396.015 1085 398.5 1085 400.985 1082.99 403 1080.5 403 1078.01 403 1076 400.985 1076 398.5Z"
                            fill="#006600"
                        />
                        <path
                            d="M1.45727e-06-1.5 108.065-1.49989 108.065 1.5001-1.45727e-06 1.5ZM-4.37182e-06 4.5C-2.48529 4.5-4.5 2.48528-4.5-4.37182e-06-4.5-2.48529-2.48528-4.5 4.37182e-06-4.5 2.48529-4.5 4.5-2.48528 4.5 4.37182e-06 4.5 2.48529 2.48528 4.5-4.37182e-06 4.5Z"
                            fill="#989898"
                            transform="matrix(-1 0 0 1 1080.57 516.5)"
                        />
                        <path
                            d="M1.51379 5.9967 1.6959 85.205-1.30409 85.212-1.4862 6.00359ZM0.0137948 5.99998-4.4793 9.01032 0 0 4.52068 8.98963Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 1180.5 556.709)"
                        />
                        <a href="<?= $urlSwitch20 ?>">
                            <rect
                                id="c633"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1172.5 500.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer9 ?>">
                            <path id="c6331"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1166.5 471.5)"
                            />
                            <path id="c6332"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1166.5 446.5)"
                            />
                        </a>
                        <path
                            d="M1183 398.5 1183 416.277 1180 416.277 1180 398.5ZM1177 398.5C1177 396.015 1179.01 394 1181.5 394 1183.99 394 1186 396.015 1186 398.5 1186 400.985 1183.99 403 1181.5 403 1179.01 403 1177 400.985 1177 398.5Z"
                            fill="#006600"
                        />
                        <path
                            d="M151.687 448.3 244.795 448.3 244.795 461.1 151.687 461.1Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.687 461.1 244.795 461.1 244.795 473.9 151.687 473.9Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.687 473.9 244.795 473.9 244.795 486.7 151.687 486.7Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.687 486.7 244.795 486.7 244.795 499.5 151.687 499.5Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.687 499.5 244.795 499.5 244.795 512.3 151.687 512.3Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.687 512.3 244.795 512.3 244.795 525.1 151.687 525.1Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.02 461.1 245.462 461.1"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.02 473.9 245.462 473.9"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.02 486.7 245.462 486.7"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.02 499.5 245.462 499.5"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.02 512.3 245.462 512.3"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.687 447.633 151.687 525.766"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M244.795 447.633 244.795 525.766"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.02 448.3 245.462 448.3"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M151.02 525.1 245.462 525.1"
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
                                transform="translate(155.467 458)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g275"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(155.467 471)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a273"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(155.467 484)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k273"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(155.467 497)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n273"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(155.467 509)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w273"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(155.467 522)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M429.733 446.164 522.841 446.164 522.841 458.964 429.733 458.964Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.733 458.964 522.841 458.964 522.841 471.764 429.733 471.764Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.733 471.764 522.841 471.764 522.841 484.564 429.733 484.564Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.733 484.564 522.841 484.564 522.841 497.364 429.733 497.364Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.733 497.364 522.841 497.364 522.841 510.164 429.733 510.164Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.733 510.164 522.841 510.164 522.841 522.964 429.733 522.964Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.066 458.964 523.508 458.964"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.066 471.764 523.508 471.764"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.066 484.564 523.508 484.564"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.066 497.364 523.508 497.364"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.066 510.164 523.508 510.164"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.733 445.498 429.733 523.631"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M522.841 445.498 522.841 523.631"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.066 446.164 523.508 446.164"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M429.066 522.964 523.508 522.964"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g297"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(433.512 456)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g299"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(433.512 469)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a297"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(433.512 482)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k297"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(433.512 495)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n297"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(433.512 507)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w297"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(433.512 520)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M719.772 445.12 812.88 445.12 812.88 457.92 719.772 457.92Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.772 457.92 812.88 457.92 812.88 470.72 719.772 470.72Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.772 470.72 812.88 470.72 812.88 483.52 719.772 483.52Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.772 483.52 812.88 483.52 812.88 496.32 719.772 496.32Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.772 496.32 812.88 496.32 812.88 509.12 719.772 509.12Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.772 509.12 812.88 509.12 812.88 521.92 719.772 521.92Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.106 457.92 813.547 457.92"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.106 470.72 813.547 470.72"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.106 483.52 813.547 483.52"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.106 496.32 813.547 496.32"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.106 509.12 813.547 509.12"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.772 444.453 719.772 522.586"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M812.88 444.453 812.88 522.586"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.106 445.12 813.547 445.12"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M719.106 521.92 813.547 521.92"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g321"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(723.552 455)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g323"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(723.552 468)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a321"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(723.552 481)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k321"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(723.552 494)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n321"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(723.552 506)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w321"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(723.552 519)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M1.77305e-07-1.5 888.189-1.49989 888.189 1.5001-1.77305e-07 1.5ZM888.189-4.4999C890.674-4.49989 892.689-2.48518 892.689 0.000105519 892.689 2.48539 890.674 4.50011 888.189 4.5001 885.704 4.5001 883.689 2.48539 883.689 0.000104455 883.689-2.48518 885.704-4.4999 888.189-4.4999Z"
                            fill="#989898"
                            transform="matrix(1 0 0 -1 100.5 537.5)"
                        />
                        <a href="<?= $urlSwitch10 ?>">
                            <rect
                                id="c5373"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 957.5 230.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.000104987 19.7986"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 988.5 269.299)"
                        />
                        <path
                            d="M0 0 0.000104987 13.0014"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 988.5 293.501)"
                        />
                        <path
                            d="M0 0 21.2738 0.0588976"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 967.5 249.559)"
                        />
                        <path
                            d="M866.558 243.616 866.5 194.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.49997-0.00913648 1.76842 44.0636-1.23152 44.0819-1.49997 0.00913648ZM-4.49992 0.0274094C-4.51505-2.45783-2.51264-4.48478-0.0274094-4.49992 2.45783-4.51505 4.48478-2.51264 4.49992-0.0274094 4.51505 2.45783 2.51264 4.48478 0.0274094 4.49992-2.45783 4.51505-4.48478 2.51264-4.49992 0.0274094Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 966.5 276.573)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(980.172 224)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(987.338 224)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(990.838 224)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1005.67 224)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1009.17 224)"
                        >
                            4
                        </text>
                        <a href="<?= $urlSwitch14 ?>">
                            <rect
                                id="c2736"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 90.5001 498.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch15 ?>">
                            <rect
                                id="c2976"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 375.5 498.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch16 ?>">
                            <rect
                                id="c3216"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 662.5 499.5)"
                            />
                        </a>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="10"
                            transform="translate(115 493)"
                        >
                            А-ТС-1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(336.234 496)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(343.901 496)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(347.401 496)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(362.234 496)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(365.734 496)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(623.43 493)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(631.096 493)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(634.596 493)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(649.43 493)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(652.93 493)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1094.43 494)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1102.09 494)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1105.59 494)"
                        >
                            2Н
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1194.02 494)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1201.68 494)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1205.18 494)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1220.02 494)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1223.52 494)"
                        >
                            6
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1004.99 375)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1012.16 375)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1015.66 375)"
                        >
                            КРУ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(885.818 511)"
                        >
                            СН
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(901.818 511)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(905.318 511)"
                        >
                            27
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(915.985 511)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(919.485 511)"
                        >
                            28
                        </text>
                        <path
                            d="M1048.5 201.5 1061.98 201.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1061.5 179.219)"
                        />
                        <path
                            d="M1061.5 191.5 1061.5 202.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-6.77635e-06 1.5001 23.2397-1.49989 23.2397-1.5 6.77635e-06ZM4.5001 23.2397C4.50012 25.7249 2.48541 27.7397 0.000125316 27.7397-2.48516 27.7397-4.49988 25.725-4.4999 23.2397-4.49991 20.7544-2.4852 18.7397 8.46578e-05 18.7397 2.48537 18.7397 4.50009 20.7544 4.5001 23.2397Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 965.5 210.74)"
                        />
                        <path
                            d="M965.5 201.5 978.976 201.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 978.5 180.219)"
                        />
                        <path
                            d="M978.707 179.576C981.434 179.051 983.999 181.277 984.437 184.549 984.875 187.821 983.019 190.899 980.293 191.424 979.748 191.529 979.192 191.525 978.648 191.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M978.5 191.5 978.5 202.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-6.77635e-06 1.5001 23.2397-1.49989 23.2397-1.5 6.77635e-06ZM4.5001 23.2397C4.50012 25.7249 2.48541 27.7397 0.000125316 27.7397-2.48516 27.7397-4.49988 25.725-4.4999 23.2397-4.49991 20.7544-2.4852 18.7397 8.46578e-05 18.7397 2.48537 18.7397 4.50009 20.7544 4.5001 23.2397Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 892.5 210.74)"
                        />
                        <path
                            d="M892.5 201.5 905.976 201.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 905.5 180.219)"
                        />
                        <path
                            d="M905.707 179.576C908.434 179.051 910.999 181.277 911.437 184.549 911.875 187.821 910.019 190.899 907.293 191.424 906.748 191.529 906.192 191.525 905.648 191.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M905.5 191.5 905.5 202.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-6.77635e-06 1.5001 23.2397-1.49989 23.2397-1.5 6.77635e-06ZM4.5001 23.2397C4.50012 25.7249 2.48541 27.7397 0.000125316 27.7397-2.48516 27.7397-4.49988 25.725-4.4999 23.2397-4.49991 20.7544-2.4852 18.7397 8.46578e-05 18.7397 2.48537 18.7397 4.50009 20.7544 4.5001 23.2397Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 249.5 210.74)"
                        />
                        <path
                            d="M249.5 201.5 262.976 201.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 262.5 179.219)"
                        />
                        <path
                            d="M262.707 179.576C265.434 179.051 267.999 181.277 268.437 184.549 268.875 187.821 267.019 190.899 264.293 191.424 263.748 191.529 263.192 191.525 262.648 191.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M262.5 190.5 262.5 201.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-6.77635e-06 1.5001 23.2397-1.49989 23.2397-1.5 6.77635e-06ZM4.5001 23.2397C4.50012 25.7249 2.48541 27.7397 0.000125316 27.7397-2.48516 27.7397-4.49988 25.725-4.4999 23.2397-4.49991 20.7544-2.4852 18.7397 8.46578e-05 18.7397 2.48537 18.7397 4.50009 20.7544 4.5001 23.2397Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 648.5 210.74)"
                        />
                        <path
                            d="M647.5 201.5 660.976 201.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.27925e-06 1.5001 36.8009-1.49989 36.8009-1.5 4.27925e-06ZM4.5001 36.8009C4.50011 39.2862 2.4854 41.3009 0.000117825 41.3009-2.48516 41.3009-4.49989 39.2862-4.4999 36.801-4.4999 34.3157-2.48519 32.3009 9.21491e-05 32.3009 2.48537 32.3009 4.5001 34.3156 4.5001 36.8009Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 661.5 179.301)"
                        />
                        <path
                            d="M661.5 190.5 661.5 201.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-6.77635e-06 1.5001 23.2397-1.49989 23.2397-1.5 6.77635e-06ZM4.5001 23.2397C4.50012 25.7249 2.48541 27.7397 0.000125316 27.7397-2.48516 27.7397-4.49988 25.725-4.4999 23.2397-4.49991 20.7544-2.4852 18.7397 8.46578e-05 18.7397 2.48537 18.7397 4.50009 20.7544 4.5001 23.2397Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 545.5 209.74)"
                        />
                        <path
                            d="M545.5 200.5 558.976 200.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 559.5 179.219)"
                        />
                        <path
                            d="M558.5 190.5 558.5 201.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-6.77635e-06 1.5001 23.2397-1.49989 23.2397-1.5 6.77635e-06ZM4.5001 23.2397C4.50012 25.7249 2.48541 27.7397 0.000125316 27.7397-2.48516 27.7397-4.49988 25.725-4.4999 23.2397-4.49991 20.7544-2.4852 18.7397 8.46578e-05 18.7397 2.48537 18.7397 4.50009 20.7544 4.5001 23.2397Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 448.5 210.74)"
                        />
                        <path
                            d="M447.5 200.5 460.976 200.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 461.5 179.219)"
                        />
                        <path
                            d="M461.5 190.5 461.5 201.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-6.77635e-06 1.5001 23.2397-1.49989 23.2397-1.5 6.77635e-06ZM4.5001 23.2397C4.50012 25.7249 2.48541 27.7397 0.000125316 27.7397-2.48516 27.7397-4.49988 25.725-4.4999 23.2397-4.49991 20.7544-2.4852 18.7397 8.46578e-05 18.7397 2.48537 18.7397 4.50009 20.7544 4.5001 23.2397Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 357.5 210.74)"
                        />
                        <path
                            d="M357.5 201.5 370.976 201.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 370.5 179.219)"
                        />
                        <path
                            d="M370.5 190.5 370.5 201.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M370.206 179.563C373.211 179.084 376.004 181.354 376.442 184.633 376.881 187.912 374.8 190.958 371.795 191.437 371.248 191.524 370.692 191.521 370.146 191.427"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M164.315 212.835 164 187.519 167 187.481 167.314 212.797ZM161 187.556C160.97 185.071 162.959 183.031 165.444 183 167.929 182.97 169.969 184.959 170 187.444 170.031 189.929 168.041 191.969 165.556 192 163.071 192.031 161.031 190.041 161 187.556Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M165.5 200.5 178.976 200.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 178.5 179.219)"
                        />
                        <path
                            d="M178.5 190.5 178.5 201.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M178.271 179.549C181.281 179.146 184.049 181.26 184.451 184.271 184.854 187.281 182.74 190.049 179.73 190.451 179.227 190.519 178.718 190.516 178.216 190.444"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M223.271 182.549C226.281 182.146 229.049 184.26 229.451 187.271 229.854 190.281 227.74 193.049 224.73 193.451 224.227 193.519 223.718 193.516 223.216 193.444"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M224.271 138.549C227.281 138.146 230.049 140.26 230.451 143.271 230.854 146.281 228.74 149.049 225.73 149.451 225.227 149.519 224.718 149.516 224.216 149.444"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M475.707 269.576C478.434 269.051 480.999 271.277 481.437 274.549 481.875 277.821 480.019 280.899 477.293 281.424 476.748 281.529 476.192 281.525 475.648 281.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M621.707 182.576C624.434 182.051 626.999 184.277 627.437 187.549 627.875 190.821 626.019 193.899 623.293 194.424 622.748 194.529 622.192 194.525 621.648 194.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M622.206 137.563C625.211 137.084 628.004 139.354 628.442 142.633 628.881 145.912 626.8 148.958 623.794 149.437 623.248 149.524 622.692 149.521 622.146 149.427"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M520.772 137.559C523.504 137.116 526.045 139.194 526.447 142.199 526.849 145.204 524.96 147.999 522.228 148.441 521.727 148.523 521.218 148.519 520.718 148.432"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M558.203 179.563C561.209 179.083 564.002 181.352 564.442 184.631 564.882 187.91 562.802 190.957 559.797 191.437 559.249 191.524 558.693 191.521 558.146 191.427"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M660.707 179.576C663.434 179.051 665.999 181.277 666.437 184.549 666.875 187.821 665.019 190.899 662.293 191.424 661.748 191.529 661.192 191.525 660.648 191.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M460.772 179.559C463.504 179.116 466.045 181.194 466.447 184.199 466.849 187.204 464.96 189.999 462.228 190.441 461.727 190.523 461.218 190.519 460.718 190.432"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M780.707 136.576C783.434 136.051 785.999 138.277 786.437 141.549 786.875 144.821 785.019 147.899 782.293 148.424 781.748 148.529 781.192 148.525 780.648 148.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M780.206 181.563C783.211 181.084 786.004 183.354 786.442 186.633 786.881 189.912 784.8 192.958 781.794 193.437 781.248 193.524 780.692 193.521 780.146 193.427"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M195.707 269.576C198.434 269.051 200.999 271.277 201.437 274.549 201.875 277.821 200.019 280.899 197.293 281.424 196.748 281.529 196.192 281.525 195.648 281.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M987.707 269.576C990.434 269.051 992.999 271.277 993.437 274.549 993.875 277.821 992.019 280.899 989.293 281.424 988.748 281.529 988.192 281.525 987.648 281.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1022.21 181.563C1025.21 181.084 1028 183.354 1028.44 186.633 1028.88 189.912 1026.8 192.958 1023.79 193.437 1023.25 193.524 1022.69 193.521 1022.15 193.427"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1022.71 136.576C1025.43 136.051 1028 138.277 1028.44 141.549 1028.87 144.821 1027.02 147.899 1024.29 148.424 1023.75 148.529 1023.19 148.525 1022.65 148.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1060.71 179.576C1063.43 179.051 1066 181.277 1066.44 184.549 1066.87 187.821 1065.02 190.899 1062.29 191.424 1061.75 191.529 1061.19 191.525 1060.65 191.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path id="c273"
                            d="M171.5 418C171.5 404.469 182.469 393.5 196 393.5 209.531 393.5 220.5 404.469 220.5 418 220.5 431.531 209.531 442.5 196 442.5 182.469 442.5 171.5 431.531 171.5 418Z"
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
                                        d="M194.689 411.933 195.622 411.933 196.944 412.167 198.033 412.633 198.889 413.178 199.9 414.189 200.522 415.122 200.989 416.367 201.144 417.067 201.144 418.933 200.833 420.1 200.211 421.344 199.589 422.122 199.044 422.667 197.956 423.367 196.711 423.833 195.933 423.989 194.378 423.989 193.133 423.678 192.278 423.289 191.422 422.744 190.567 421.967 190.022 421.189 189.478 420.1 189.167 418.856 189.089 417.922 189.244 416.678 189.556 415.667 190.178 414.5 191.033 413.567 191.656 413.022 192.978 412.322 194.144 412.011Z"
                                    />
                                    <path
                                        d="M195.156 398.089 196.011 398.089 197.489 398.322 198.967 398.789 200.211 399.411 201.144 400.033 201.922 400.733 202.856 401.667 203.711 402.911 204.333 404.156 204.8 405.556 205.033 406.722 205.111 407.344 205.111 408.822 204.878 410.3 204.489 411.622 203.867 412.944 203.089 414.033 202.933 414.033 202.311 412.944 201.378 411.856 200.522 411.078 199.433 410.378 198.267 409.833 196.944 409.444 195.156 409.211Z"
                                    />
                                    <path
                                        d="M182.4 413.878 182.789 413.956 184.967 415.2 186.522 416.133 186.6 416.289 186.444 417.922 186.6 419.556 186.989 421.033 187.533 422.2 187.533 422.433 185.356 423.678 183.489 424.767 179.444 427.1 178.122 427.878 177.889 427.878 177.189 426.4 176.8 425.078 176.644 424.144 176.567 422.822 176.722 421.344 176.956 420.256 177.5 418.778 178.044 417.767 178.744 416.756 179.678 415.744 180.533 414.967 181.933 414.111Z"
                                    />
                                    <path
                                        d="M202.7 422.433 203.089 422.511 204.956 423.6 211.022 427.1 212.344 427.878 212.189 428.267 211.644 429.044 210.944 429.9 210.4 430.444 209.233 431.3 207.989 432 206.511 432.544 205.344 432.778 204.878 432.856 202.544 432.856 201.378 432.622 200.133 432.233 198.811 431.611 197.878 430.989 197.878 426.322 198.578 426.011 199.9 425.311 200.833 424.611 201.922 423.522Z"
                                    />
                                    <path
                                        d="M185.667 403.067 187.378 403.067 188.856 403.3 190.489 403.844 191.811 404.544 192.433 404.933 192.433 409.678 191.033 410.3 189.944 411 189.089 411.7 188.544 412.244 187.611 413.567 187.144 413.411 185.822 412.633 179.756 409.133 178.044 408.122 177.967 407.967 178.511 407.111 179.367 406.1 179.989 405.478 181.156 404.622 182.244 404 183.722 403.456 184.578 403.222Z"
                                    />
                                    <path
                                        d="M189.167 424.533 189.478 424.611 190.644 425.467 191.967 426.089 193.211 426.478 194.144 426.633 195.078 426.711 195.156 426.789 195.156 437.833 193.989 437.833 192.433 437.522 191.111 437.056 189.711 436.278 188.7 435.5 187.922 434.8 187.144 433.867 186.367 432.622 185.744 431.222 185.356 429.744 185.2 428.344 185.2 427.489 185.278 426.789 187.222 425.7 188.544 424.922Z"
                                    />
                                    <path
                                        d="M212.267 408.044 212.422 408.044 212.967 409.133 213.433 410.533 213.667 411.778 213.744 413.333 213.589 414.733 213.278 416.056 212.656 417.533 212.111 418.467 211.489 419.322 210.633 420.256 209.467 421.189 208.456 421.811 207.756 422.122 205.811 421.033 203.944 419.944 203.711 419.789 203.867 418.389 203.867 417.222 204.567 416.522 205.578 415.2 206.278 414.033 206.978 412.556 207.522 410.844 208.222 410.378 210.167 409.289 212.033 408.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c297"
                            d="M451.5 416C451.5 402.469 462.469 391.5 476 391.5 489.531 391.5 500.5 402.469 500.5 416 500.5 429.531 489.531 440.5 476 440.5 462.469 440.5 451.5 429.531 451.5 416Z"
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
                                        d="M475.689 409.933 476.622 409.933 477.944 410.167 479.033 410.633 479.889 411.178 480.9 412.189 481.522 413.122 481.989 414.367 482.144 415.067 482.144 416.933 481.833 418.1 481.211 419.344 480.589 420.122 480.044 420.667 478.956 421.367 477.711 421.833 476.933 421.989 475.378 421.989 474.133 421.678 473.278 421.289 472.422 420.744 471.567 419.967 471.022 419.189 470.478 418.1 470.167 416.856 470.089 415.922 470.244 414.678 470.556 413.667 471.178 412.5 472.033 411.567 472.656 411.022 473.978 410.322 475.144 410.011Z"
                                    />
                                    <path
                                        d="M476.156 396.089 477.011 396.089 478.489 396.322 479.967 396.789 481.211 397.411 482.144 398.033 482.922 398.733 483.856 399.667 484.711 400.911 485.333 402.156 485.8 403.556 486.033 404.722 486.111 405.344 486.111 406.822 485.878 408.3 485.489 409.622 484.867 410.944 484.089 412.033 483.933 412.033 483.311 410.944 482.378 409.856 481.522 409.078 480.433 408.378 479.267 407.833 477.944 407.444 476.156 407.211Z"
                                    />
                                    <path
                                        d="M463.4 411.878 463.789 411.956 465.967 413.2 467.522 414.133 467.6 414.289 467.444 415.922 467.6 417.556 467.989 419.033 468.533 420.2 468.533 420.433 466.356 421.678 464.489 422.767 460.444 425.1 459.122 425.878 458.889 425.878 458.189 424.4 457.8 423.078 457.644 422.144 457.567 420.822 457.722 419.344 457.956 418.256 458.5 416.778 459.044 415.767 459.744 414.756 460.678 413.744 461.533 412.967 462.933 412.111Z"
                                    />
                                    <path
                                        d="M483.7 420.433 484.089 420.511 485.956 421.6 492.022 425.1 493.344 425.878 493.189 426.267 492.644 427.044 491.944 427.9 491.4 428.444 490.233 429.3 488.989 430 487.511 430.544 486.344 430.778 485.878 430.856 483.544 430.856 482.378 430.622 481.133 430.233 479.811 429.611 478.878 428.989 478.878 424.322 479.578 424.011 480.9 423.311 481.833 422.611 482.922 421.522Z"
                                    />
                                    <path
                                        d="M466.667 401.067 468.378 401.067 469.856 401.3 471.489 401.844 472.811 402.544 473.433 402.933 473.433 407.678 472.033 408.3 470.944 409 470.089 409.7 469.544 410.244 468.611 411.567 468.144 411.411 466.822 410.633 460.756 407.133 459.044 406.122 458.967 405.967 459.511 405.111 460.367 404.1 460.989 403.478 462.156 402.622 463.244 402 464.722 401.456 465.578 401.222Z"
                                    />
                                    <path
                                        d="M470.167 422.533 470.478 422.611 471.644 423.467 472.967 424.089 474.211 424.478 475.144 424.633 476.078 424.711 476.156 424.789 476.156 435.833 474.989 435.833 473.433 435.522 472.111 435.056 470.711 434.278 469.7 433.5 468.922 432.8 468.144 431.867 467.367 430.622 466.744 429.222 466.356 427.744 466.2 426.344 466.2 425.489 466.278 424.789 468.222 423.7 469.544 422.922Z"
                                    />
                                    <path
                                        d="M493.267 406.044 493.422 406.044 493.967 407.133 494.433 408.533 494.667 409.778 494.744 411.333 494.589 412.733 494.278 414.056 493.656 415.533 493.111 416.467 492.489 417.322 491.633 418.256 490.467 419.189 489.456 419.811 488.756 420.122 486.811 419.033 484.944 417.944 484.711 417.789 484.867 416.389 484.867 415.222 485.567 414.522 486.578 413.2 487.278 412.033 487.978 410.556 488.522 408.844 489.222 408.378 491.167 407.289 493.033 406.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c321"
                            d="M741.5 416C741.5 402.469 752.469 391.5 766 391.5 779.531 391.5 790.5 402.469 790.5 416 790.5 429.531 779.531 440.5 766 440.5 752.469 440.5 741.5 429.531 741.5 416Z"
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
                                        d="M0 0 0.922222 0 2.2287 0.230556 3.30463 0.691667 4.15 1.22963 5.14907 2.2287 5.76389 3.15093 6.225 4.38056 6.3787 5.07222 6.3787 6.91667 6.0713 8.06944 5.45648 9.29907 4.84167 10.0676 4.3037 10.6056 3.22778 11.2972 1.99815 11.7583 1.22963 11.912-0.307407 11.912-1.53704 11.6046-2.38241 11.2204-3.22778 10.6824-4.07315 9.91389-4.61111 9.14537-5.14907 8.06944-5.45648 6.83981-5.53333 5.91759-5.37963 4.68796-5.07222 3.68889-4.45741 2.53611-3.61204 1.61389-2.99722 1.07593-1.69074 0.384259-0.537963 0.0768519Z"
                                        transform="matrix(1 0 0 1.01205 765.193 408.933)"
                                    />
                                    <path
                                        d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                        transform="matrix(1 0 0 1.01205 765.654 395.089)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                        transform="matrix(1 0 0 1.01205 753.05 410.878)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                        transform="matrix(1 0 0 1.01205 773.108 419.433)"
                                    />
                                    <path
                                        d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                        transform="matrix(1 0 0 1.01205 756.278 400.067)"
                                    />
                                    <path
                                        d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                        transform="matrix(1 0 0 1.01205 759.736 421.533)"
                                    />
                                    <path
                                        d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                        transform="matrix(1 0 0 1.01205 782.561 405.044)"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M901.42 365.315 975.067 365.315 975.067 379.048 901.42 379.048Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M901.42 364.648 901.42 379.715"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M975.067 364.648 975.067 379.715"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M900.753 365.315 975.733 365.315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M900.753 379.048 975.733 379.048"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g537"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(905.199 375)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M950.132 558.817 1023.78 558.817 1023.78 572.551 950.132 572.551Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M950.132 558.151 950.132 573.217"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1023.78 558.151 1023.78 573.217"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M949.465 558.817 1024.45 558.817"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M949.465 572.551 1024.45 572.551"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g585"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(953.911 569)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M1043.23 558.567 1116.87 558.567 1116.87 572.3 1043.23 572.3Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1043.23 557.901 1043.23 572.967"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1116.87 557.901 1116.87 572.967"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1042.56 558.567 1117.54 558.567"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1042.56 572.3 1117.54 572.3"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g609"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1047.01 569)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M1142.73 558.401 1216.37 558.401 1216.37 572.134 1142.73 572.134Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1142.73 557.734 1142.73 572.8"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1216.37 557.734 1216.37 572.8"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1142.06 558.401 1217.04 558.401"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1142.06 572.134 1217.04 572.134"
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
                                transform="translate(1146.51 568)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M182.821 51.4347 266.421 51.4347 266.421 65.0259 182.821 65.0259Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M182.821 65.0259 266.421 65.0259 266.421 78.6171 182.821 78.6171Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M182.155 65.0259 267.088 65.0259"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M182.821 50.7681 182.821 79.2838"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M266.421 50.7681 266.421 79.2838"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M182.155 51.4347 267.088 51.4347"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M182.155 78.6171 267.088 78.6171"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g489"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(186.601 61)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g490"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(186.601 75)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip2)"
                            transform="matrix(0.000104987 0 0 0.000104987 258 52)"
                        >
                            <g clip-path="url(#clip4)" transform="matrix(1 0 0 1.02857 0 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip5)"
                            transform="matrix(0.000104987 0 0 0.000104987 259 66)"
                        >
                            <g clip-path="url(#clip7)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M289.222 51.1848 372.822 51.1848 372.822 64.776 289.222 64.776Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M289.222 64.776 372.822 64.776 372.822 78.3671 289.222 78.3671Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M288.556 64.776 373.488 64.776"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M289.222 50.5181 289.222 79.0338"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M372.822 50.5181 372.822 79.0338"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M288.556 51.1848 373.488 51.1848"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M288.556 78.3671 373.488 78.3671"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g369"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(293.002 61)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g370"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(293.002 75)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip8)"
                            transform="matrix(0.000104987 0 0 0.000104987 365 52)"
                        >
                            <g
                                clip-path="url(#clip9)"
                                transform="matrix(1 0 0 1.02857 -0.25 -0.03125)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 365 65)"
                        >
                            <g
                                clip-path="url(#clip11)"
                                transform="matrix(1 0 0 1.11429 -0.25 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M479.321 51.0382 562.92 51.0382 562.92 64.6294 479.321 64.6294Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M479.321 64.6294 562.92 64.6294 562.92 78.2206 479.321 78.2206Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M478.654 64.6294 563.587 64.6294"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M479.321 50.3715 479.321 78.8872"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M562.92 50.3715 562.92 78.8872"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M478.654 51.0382 563.587 51.0382"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M478.654 78.2206 563.587 78.2206"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g345"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(483.1 61)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g346"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(483.1 75)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip12)"
                            transform="matrix(0.000104987 0 0 0.000104987 555 52)"
                        >
                            <g
                                clip-path="url(#clip13)"
                                transform="matrix(1 0 0 1.02857 -0.5 -0.03125)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip14)"
                            transform="matrix(0.000104987 0 0 0.000104987 555 65)"
                        >
                            <g
                                clip-path="url(#clip15)"
                                transform="matrix(1 0 0 1.02857 -0.5 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M579.947 50.6765 663.547 50.6765 663.547 64.2677 579.947 64.2677Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M579.947 64.2677 663.547 64.2677 663.547 77.8589 579.947 77.8589Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M579.28 64.2677 664.213 64.2677"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M579.947 50.0099 579.947 78.5256"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M663.547 50.0099 663.547 78.5256"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M579.28 50.6765 664.213 50.6765"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M579.28 77.8589 664.213 77.8589"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g441"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(583.727 61)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g442"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(583.727 74)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip16)"
                            transform="matrix(0.000104987 0 0 0.000104987 655 51)"
                        >
                            <g clip-path="url(#clip17)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip18)"
                            transform="matrix(0.000104987 0 0 0.000104987 656 65)"
                        >
                            <g clip-path="url(#clip19)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M738.66 50.1849 822.259 50.1849 822.259 63.7761 738.66 63.7761Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M738.66 63.7761 822.259 63.7761 822.259 77.3672 738.66 77.3672Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.993 63.7761 822.926 63.7761"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M738.66 49.5182 738.66 78.0339"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M822.259 49.5182 822.259 78.0339"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.993 50.1849 822.926 50.1849"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.993 77.3672 822.926 77.3672"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g465"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(742.439 60)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g466"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(742.439 74)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip20)"
                            transform="matrix(0.000104987 0 0 0.000104987 814 51)"
                        >
                            <g clip-path="url(#clip21)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip22)"
                            transform="matrix(0.000104987 0 0 0.000104987 814 64)"
                        >
                            <g clip-path="url(#clip23)" transform="scale(1.07692 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1360.71 1360.71)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M824.552 50.0029 908.152 50.0029 908.152 63.5941 824.552 63.5941Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M824.552 63.5941 908.152 63.5941 908.152 77.1853 824.552 77.1853Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M823.886 63.5941 908.819 63.5941"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M824.552 49.3363 824.552 77.852"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M908.152 49.3363 908.152 77.852"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M823.886 50.0029 908.819 50.0029"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M823.886 77.1853 908.819 77.1853"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g393"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(828.332 60)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g394"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(828.332 74)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip24)"
                            transform="matrix(0.000104987 0 0 0.000104987 900 51)"
                        >
                            <g clip-path="url(#clip25)" transform="matrix(1 0 0 1.02857 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip26)"
                            transform="matrix(0.000104987 0 0 0.000104987 900 64)"
                        >
                            <g clip-path="url(#clip27)" transform="matrix(1.16667 0 0 1 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M981.552 50.1417 1065.15 50.1417 1065.15 63.7329 981.552 63.7329Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M981.552 63.7329 1065.15 63.7329 1065.15 77.3241 981.552 77.3241Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M980.886 63.7329 1065.82 63.7329"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M981.552 49.4751 981.552 77.9908"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1065.15 49.4751 1065.15 77.9908"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M980.886 50.1417 1065.82 50.1417"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M980.886 77.3241 1065.82 77.3241"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g417"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(985.332 60)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g418"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(985.332 74)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip28)"
                            transform="matrix(0.000104987 0 0 0.000104987 1057 51)"
                        >
                            <g clip-path="url(#clip29)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip30)"
                            transform="matrix(0.000104987 0 0 0.000104987 1057 64)"
                        >
                            <g clip-path="url(#clip31)" transform="scale(1.07692 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1360.71 1360.71)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M866.352 472.911 949.952 472.911 949.952 486.502 866.352 486.502Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M866.352 486.502 949.952 486.502 949.952 500.093 866.352 500.093Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M865.685 486.502 950.618 486.502"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M866.352 472.244 866.352 500.76"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M949.952 472.244 949.952 500.76"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M865.685 472.911 950.618 472.911"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M865.685 500.093 950.618 500.093"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g561"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(870.132 483)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g562"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(870.132 497)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip32)"
                            transform="matrix(0.000104987 0 0 0.000104987 942 474)"
                        >
                            <g clip-path="url(#clip33)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip34)"
                            transform="matrix(0.000104987 0 0 0.000104987 942 487)"
                        >
                            <g clip-path="url(#clip35)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1132.31 234.808 1206.85 234.808 1206.85 248.399 1132.31 248.399Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1132.31 248.399 1206.85 248.399 1206.85 261.99 1132.31 261.99Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1131.64 248.399 1207.52 248.399"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1132.31 234.141 1132.31 262.657"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1206.85 234.141 1206.85 262.657"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1131.64 234.808 1207.52 234.808"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1131.64 261.99 1207.52 261.99"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g514"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1136.09 245)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g513"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1136.09 258)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip36)"
                            transform="matrix(0.000104987 0 0 0.000104987 1199 235)"
                        >
                            <g clip-path="url(#clip37)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip38)"
                            transform="matrix(0.000104987 0 0 0.000104987 1199 249)"
                        >
                            <g clip-path="url(#clip39)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M40.0848 125.795 97.6189 125.795 97.6189 138.595 40.0848 138.595Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M40.0848 125.129 40.0848 139.262"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M97.6189 125.129 97.6189 139.262"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M39.4182 125.795 98.2856 125.795"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M39.4182 138.595 98.2856 138.595"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g338"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(43.8644 136)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M39.6756 189.76 97.2097 189.76 97.2097 202.56 39.6756 202.56Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M39.6756 189.094 39.6756 203.227"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M97.2097 189.094 97.2097 203.227"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M39.0089 189.76 97.8763 189.76"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M39.0089 202.56 97.8763 202.56"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g362"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(43.4551 200)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M42.8002 259.421 100.334 259.421 100.334 272.221 42.8002 272.221Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M42.8002 258.754 42.8002 272.888"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M100.334 258.754 100.334 272.888"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M42.1335 259.421 101.001 259.421"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M42.1335 272.221 101.001 272.221"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g506"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(46.5797 269)"
                            >
                                U
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip40)"
                            transform="matrix(0.000104987 0 0 0.000104987 1076 30)"
                        >
                            <g clip-path="url(#clip42)" transform="matrix(1 0 0 1.00976 0 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img41"
                                    transform="scale(7571.15 7571.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1097.17 26.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1196.5 80.1712)"
                        />
                        <path
                            d="M1193.55 93.0309 1185.86 84.6543 1186.35 84.2035 1194.04 92.58ZM1186.11 84.4289 1185.95 88.1967 1182.5 80.5001 1189.87 84.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1203.95 92.8892 1194.5 92.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.23 12.4812 1174.5 12.4812 1174.5 25.2812 1101.23 25.2812Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.23 11.8145 1101.23 25.9478"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.5 11.8145 1174.5 25.9478"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1100.56 12.4812 1175.17 12.4812"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1100.56 25.2812 1175.17 25.2812"
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
                                transform="translate(1105.01 22)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1115.51 22)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1096.5 26.5001 1115.69 26.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1203.72 79.5648 1275 79.5648 1275 92.3648 1203.72 92.3648Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1203.72 78.8982 1203.72 93.0315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1275 78.8982 1275 93.0315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1203.05 79.5648 1275.67 79.5648"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1203.05 92.3648 1275.67 92.3648"
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
                                transform="translate(1207.5 90)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1218 90)"
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
                            transform="matrix(1 0 0 -1 1093.5 34.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1203.99 52.5001)"
                        />
                        <path
                            d="M1203.5 52.5001 1222.69 52.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1207.92 39.3813 1262.5 39.3813 1262.5 52.1813 1207.92 52.1813Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1207.92 38.7146 1207.92 52.848"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1262.5 38.7146 1262.5 52.848"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1207.25 39.3813 1263.17 39.3813"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1207.25 52.1813 1263.17 52.1813"
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
                                transform="translate(1211.7 49)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1179.5 80.5001 1202.21 80.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M4.50005 551C4.50005 545.753 8.75335 541.5 14.0001 541.5 19.2468 541.5 23.5001 545.753 23.5001 551 23.5001 556.247 19.2468 560.5 14.0001 560.5 8.75335 560.5 4.50005 556.247 4.50005 551Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M4.50005 573C4.50005 567.753 8.75335 563.5 14.0001 563.5 19.2468 563.5 23.5001 567.753 23.5001 573 23.5001 578.247 19.2468 582.5 14.0001 582.5 8.75335 582.5 4.50005 578.247 4.50005 573Z"
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
                            transform="translate(29.1831 553)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(29.1004 575)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M4 528.5C4 523.253 8.25329 519 13.5 519 18.7467 519 23 523.253 23 528.5 23 533.747 18.7467 538 13.5 538 8.25329 538 4 533.747 4 528.5Z"
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
                            transform="translate(29.1004 531)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(29.3652 508)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(29.1005 485)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip43)"
                            transform="matrix(0.000104987 0 0 0.000104987 9 473)"
                        >
                            <g
                                clip-path="url(#clip44)"
                                transform="matrix(1 0 0 1.07143 -0.0078125 0)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip45)"
                            transform="matrix(0.000104987 0 0 0.000104987 9 495)"
                        >
                            <g clip-path="url(#clip46)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="matrix(2198.08 0 0 2198.08 -0.0078125 -0.5)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1.5-6.77635e-06 1.5001 23.2397-1.49989 23.2397-1.5 6.77635e-06ZM4.5001 23.2397C4.50012 25.7249 2.48541 27.7397 0.000125316 27.7397-2.48516 27.7397-4.49988 25.725-4.4999 23.2397-4.49991 20.7544-2.4852 18.7397 8.46578e-05 18.7397 2.48537 18.7397 4.50009 20.7544 4.5001 23.2397Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 805.5 210.74)"
                        />
                        <path
                            d="M805.5 202.5 818.976 202.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M818.5 191.5 818.5 202.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M818.271 181.549C821.281 181.146 824.049 183.26 824.451 186.271 824.854 189.281 822.74 192.049 819.73 192.451 819.227 192.519 818.718 192.516 818.216 192.444"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 819.5 180.219)"
                        />
                        <path
                            d="M731.5 199 742.839 199 742.839 202 731.5 202ZM731.5 205C729.015 205 727 202.985 727 200.5 727 198.015 729.015 196 731.5 196 733.985 196 736 198.015 736 200.5 736 202.985 733.985 205 731.5 205Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M731.18 212.967 731 186.51 734 186.49 734.18 212.947ZM728 186.531C727.983 184.046 729.984 182.017 732.469 182 734.955 181.983 736.983 183.984 737 186.469 737.017 188.955 735.016 190.983 732.531 191 730.046 191.017 728.017 189.016 728 186.531Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M743.271 180.549C746.281 180.146 749.049 182.26 749.451 185.271 749.854 188.281 747.74 191.049 744.73 191.451 744.227 191.519 743.718 191.516 743.216 191.444"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M744.5 190.5 744.5 201.849"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 744.5 179.219)"
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

        fetch('/urta-chirchiq/server27')
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
                let v1 = 0; let v2 = 0; let v3 = 0;
                data.forEach(item => {

                    if (item.id === 490) {
                        const value = document.getElementById("g490");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(490);
                        } else {
                            falseAnimation(490);
                        }
                    } else if(item.id === 489) {
                        const value = document.getElementById("g489");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(490);
                        } else {
                            falseAnimation(490);
                        }
                    } else if(item.id === 370) {
                        const value = document.getElementById("g370");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(370);
                        } else {
                            falseAnimation(370);
                        }
                    } else if(item.id === 369) {
                        const value = document.getElementById("g369");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(370);
                        } else {
                            falseAnimation(370);
                        }
                    } else if(item.id === 346) {
                        const value = document.getElementById("g346");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(346);
                        } else {
                            falseAnimation(346);
                        }
                    } else if(item.id === 345) {
                        const value = document.getElementById("g345");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(346);
                        } else {
                            falseAnimation(346);
                        }
                    } else if(item.id === 442) {
                        const value = document.getElementById("g442");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(442);
                        } else {
                            falseAnimation(442);
                        }
                    }  else if(item.id === 441) {
                        const value = document.getElementById("g441");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(442);
                        } else {
                            falseAnimation(442);
                        }
                    } else if(item.id === 466) {
                        const value = document.getElementById("g466");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(466);
                        } else {
                            falseAnimation(466);
                        }
                    } else if(item.id === 465) {
                        const value = document.getElementById("g465");
                        value.textContent = "P= " + formatNumber(item.value,3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(466);
                        } else {
                            falseAnimation(466);
                        }
                    } else if(item.id === 394) {
                        const value = document.getElementById("g394");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(394);
                        } else {
                            falseAnimation(394);
                        }
                    } else if(item.id === 393) {
                        const value = document.getElementById("g393");
                        value.textContent = "P= " + formatNumber(item.value,3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(394);
                        } else {
                            falseAnimation(394);
                        }
                    } else if(item.id === 418) {
                        const value = document.getElementById("g418");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(418);
                        } else {
                            falseAnimation(418);
                        }
                    } else if(item.id === 417) {
                        const value = document.getElementById("g417");
                        value.textContent = "P= " + formatNumber(item.value,3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(418);
                        } else {
                            falseAnimation(418);
                        }
                    } else if(item.id === 514) {
                        const value = document.getElementById("g514");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(514);
                        } else {
                            falseAnimation(514);
                        }
                    } else if(item.id === 513) {
                        const value = document.getElementById("g513");
                        value.textContent = "P= " + formatNumber(item.value,3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(514);
                        } else {
                            falseAnimation(514);
                        }
                    } else if(item.id === 537) {
                        const value = document.getElementById("g537");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(537);
                            trueAnimation(5371);
                            trueAnimation(5372);
                            trueAnimation(5373);
                        } else {
                            falseAnimation(537);
                            falseAnimation(5371);
                            falseAnimation(5372);
                            falseAnimation(5373);
                        }
                    } else if(item.id === 561) {
                        const value = document.getElementById("g561");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(561);
                        } else {
                            falseAnimation(561);
                        }
                    } else if(item.id === 562) {
                        const value = document.getElementById("g562");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(561);
                        } else {
                            falseAnimation(561);
                        }
                    } else if(item.id === 585) {
                        const value = document.getElementById("g585");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                    } else if(item.id === 609) {
                        const value = document.getElementById("g609");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(609);
                            trueAnimation(6091);
                            trueAnimation(6092);
                        } else {
                            falseAnimation(609);
                            falseAnimation(6091);
                            falseAnimation(6092);
                        }
                    } else if(item.id === 633) {
                        const value = document.getElementById("g633");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(633);
                            trueAnimation(6331);
                            trueAnimation(6332);
                        } else {
                            falseAnimation(633);
                            falseAnimation(6331);
                            falseAnimation(6332);
                        }
                    } else if(item.id === 338) {
                        const value = document.getElementById("g338");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 362) {
                        const value = document.getElementById("g362");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 506) {
                        const value = document.getElementById("g506");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    }
                    //Aggregate-1
                    else if(item.id === 273) {
                        const value = document.getElementById("g273");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a273");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 55 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(273);
                            trueAnimation(2731);
                            trueAnimation(2732);
                            trueAnimation(2733);
                            trueAnimation(2734);
                            trueAnimation(2735);
                            v1 = 1;
                        } else {
                            falseAnimation(273);
                            falseAnimation(2731);
                            falseAnimation(2732);
                            falseAnimation(2733);
                            falseAnimation(2734);
                            falseAnimation(2735);
                            v1 = 0;
                        }
                    } else if(item.id === 275) {
                        const value = document.getElementById("g275");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 276) {
                        const value = document.getElementById("k273");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    }  else if(item.id === 277) {
                        const value = document.getElementById("n273");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    }else if(item.id === 278) {
                        const value = document.getElementById("w273");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 297) {
                        const value = document.getElementById("g297");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a297");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 55 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(297);
                            trueAnimation(2971);
                            trueAnimation(2972);
                            trueAnimation(2973);
                            trueAnimation(2974);
                            trueAnimation(2975);
                            v2 = 1;
                        } else {
                            errorAnimation(297);
                            errorAnimation(2971);
                            errorAnimation(2972);
                            errorAnimation(2973);
                            falseAnimation(2974);
                            falseAnimation(2975);
                            v2 = 0;
                        }
                    } else if(item.id === 299) {
                        const value = document.getElementById("g299");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 300) {
                        const value = document.getElementById("k297");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 301) {
                        const value = document.getElementById("n297");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    }else if(item.id === 302) {
                        const value = document.getElementById("w297");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 321) {
                        const value = document.getElementById("g321");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a321");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 55 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(321);
                            trueAnimation(3211);
                            trueAnimation(3212);
                            trueAnimation(3213);
                            trueAnimation(3214);
                            trueAnimation(3215);
                            v3 = 1;
                        } else {
                            falseAnimation(321);
                            falseAnimation(3211);
                            falseAnimation(3212);
                            falseAnimation(3213);
                            falseAnimation(3214);
                            falseAnimation(3215);
                            v3 = 0;
                        }
                    } else if(item.id === 323) {
                        const value = document.getElementById("g323");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 324) {
                        const value = document.getElementById("k321");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 325) {
                        const value = document.getElementById("n321");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 326) {
                        const value = document.getElementById("w321");
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
                    if (v1 > 0) {
                        trueAnimation(2736);
                        falseAnimation(2976);
                        falseAnimation(3216);
                    } else if (v2 > 0) {
                        trueAnimation(2976);
                        falseAnimation(2736);
                        falseAnimation(3216);
                    } else if (v3 > 0) {
                        trueAnimation(3216);
                        falseAnimation(2736);
                        falseAnimation(2976);
                    } else {
                        falseAnimation(2736);
                        falseAnimation(2976);
                        falseAnimation(3216);
                    }
                    falseAnimation(1);
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