<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Самарқанд ГЭС-2Б (Хишрав)';
$energy = new Energy();
$id = 49;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);
$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['samarqand/index']) ?>">"Самарқанд ГЭСлар каскади" Филиали</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= Html::encode($this->title) ?></li>
    </ol>
</nav>
<?= $dashboard->HeaderGes() ?>
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
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
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
                            <rect x="0" y="1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img4"
                        ></image>
                        <clipPath id="clip5">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip6">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip8">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip9">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip13">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip14">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip15">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip16">
                            <rect x="0" y="1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip29">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip30">
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip31">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip32">
                            <rect x="-9.31323e-10" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip33">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip34">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip35">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip36">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip37">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip38">
                            <rect x="-1.86265e-09" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip39">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip40">
                            <rect x="0" y="0" width="85725" height="200025" />
                        </clipPath>
                        <clipPath id="clip41">
                            <rect x="0" y="0" width="85725" height="200025" />
                        </clipPath>
                        <clipPath id="clip42">
                            <rect x="0" y="0" width="1190625" height="581025" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7V0JVFRXmk73TE93umemz/TMnD7T0zM9p8+ZnnO6J53uGJdEE2NiUKPEqEjUGMUlxiUmre0SEzfcAQUX9oKCojb2fXFDkE0odhVwQaEKF9yFAjSZ6Df/f+sVFsVDUMCF1M/5znvvvvduvffux7/c+9/3XniS4uzs/O6qFSsUb7755ku8vWTRop2RGv1FvVZ3yR5r1qypBvADcaJDHPI4snnzZlVDQwOGDBkysaSk5EdbtmwJb21pgT1aCDqdrslBOIf0SpRKZT0T7rVhw3bpdToQ4QS55OAgnEN6JdOmTftVRkbG/QtEuKGvDva+ceMG4mJjZcnGIMLdkk51yEAUw/mm/ykytnoWN5hHsbkThaRhTKb7L55oaHm5tL51SqWx7Y3jxtZXj58z//J4owWl52/+pqShaVhxfdP4sot33q24fP9n4lwS1lAl527+vMzUPHL+gqVLGxsvQxBu8GDv69evI1YQrrUT2RhardZBuIEoJaaWFcX15gtFxpb7JQ1tKCaUGFu+KzGaBYrrW+6VmNpgaLhj2UdL3haQtosF7goYjC33DKa2SwZTa02JqbXJUN9yv9h0F74h2vvmFnMHwsXFxcmSjeHQcANUSkx3VBbC9B+YlGFqPRGJCXcBg3tAOIeGG6BCWogIx9pJnix9gfwz1xEZbTGfFy9exCuvvJIufLjvuYZbtmzZi06jR6+m1e9PcNTfhGPTq0nLw6lTNUQki7928OBBODTcCy9Mnjz5N5s3uiMqKupFqWjgy5PQcB6+4YiNjiTECOzYvr1bwiUkJFySLnHAyqhRowaplGFYtWrVr6WigS/9T7g2bPTYh/jEZEIK4pOS4em1SxBOq9YgLTUVTU1NnQhXUVFRn5qaOiglJeXlpKSkP1qRlpb2Epfv3r178PTp0/9Fuo3nUkaMGDE6J/soXCdNelkqGvjSv4TjqJfMan0LiuvMFtSboU45ilClCmu+Xg+tLgrh4eE4dOgQzGZzO+Fu376Nq1ev4sqVKx3AZQyj0YixY8culm7juZRFny2aWVdXByLeSKlo4MuTMKlyKGlopWUb0g1n4ROoQhSZ2vCwcOTk5HTQdF2ByTlhwoRl0m08l+Ls7LyItfugQYM+kIoGvjwdwkmaz7o0tSI+qxy+QeFISExAGPk1xcXFskSzxaRJk1ZIt/Fcipub29pvv/kWI0eO/EQqGvjytDScHJiAmtQcBIREICUphYinxInjx2XJxphLDSbdxnMpK5at8L537x6mfzj9S6lo4MuzRDgB012UGFuhiMqAUqVFWkqa8PFOnTrViXAL5s3zk27juZStm7eG3b9/H59/9pmXVDTw5ZkjnA0Kz5vhq4qHVh8notkIVQTOnz9PZGuFubUFXp6e8Nrhlfee03tjpdt5qsJRs4uLy7/3FES4/RwArV6xUs/bGzZs+FupqoEr/U04MfZqV9YT2J6Xd+Y69ih0iE1IQnJyMtTqCDFiEanTify5qpMnsWvXrsIxY8aMf5opTZs2bTp95MgRZGVl9Qx87BHLMjo6GsOHD39LqmrgSn8RTgQEJl63DPJ3PuZBmfz+zjhy8gJ8glRIzziIxPg4bN+2rUNXSk1NDby9vUvGjRv3AWmLH0q3+MQkUqM9rYqgiDsykhDVLYKDg+FJWnrfvn1i9MVBuMeE0E6mNmzx2ocwTRSUmhiEaGIRrI6HvyoGe8MY8ThUYZRI2TOUSMfuLz4Lb98QlJaUIjgoGFevXG0nHePMmTPY7eNT8f748S5PknhMuJiYGFKyFmH/7GFy4cIFFBYW4vSp08hIS8dIB+EeH0dPXsbadevJ7OkRqdcjSh+JaPqvjouJRXxcHGKpYQKCFdit0CL7xAU6xzbVqTuQRjS2YV9YLPLyChAeqsSpms5BRW1tLWuPE++///40Mll/I91yv0mkVnuah+6YaKWlpXTfluG8GBlwuVajET7p6dNEuHQH4XqF8MRs1NfVdyIBw8xoNiMjNQ1qVTiUYWrsDdEjp+aKbF3y4Jy8O9CkHEVCUhpSkpLBw0Ryv8eNunfv3mpnZ+eZ/emYWwl38+ZNJCYmdtBwvC4HFoeG6wPsDdGhxca/6go8hBVDDjNrwgi1DnuVUcg7fU2YZFs/rysY6NrTj9UgKDQCBfkFiI6J7uDX2YKHw3x9fc9MnDjRbcGCBZas5j4UK+HYH7t165YgU0/EoeF6CyKLIowIJ9Po9rDO0rp25QpFn2oyt/HQaKPgGx6DgrM35eu3h+kuck9dwa59IaisrISCnHFODrD/LSsaTCYEBQSec3VxmT916tS/kx5Fr8VKuAMHDqC5uVmiU/fi0HC9RV2zII1cY3cH1kJhYWE4kJ4BlUYPf3Uijp2/LVLcu4tmDcYW+ARrUELBREiIQvhwcr9hxUVy2oMDg+qnTpmycOnSpT+WHsljy2MTzqHheoeEnOM4dqyQGlV+gkxPUFVVRcRT4ujRowiPIOJpklFIRJb7vQew+HWKmP04cChT5Nvl5+fL1m+Ly5cuQaFQmFxcXD6bPXv2T6RH88jyuIQ7Q4Q7mLEf7771js+4MeMWTuhjcJ2M0W+/vfCjjz76R+lyn470JeGsUaZfRCJukw8j17iPiiIiroo0XnFxCRThGgRHpsNQb5Z+s+vINuFIOcJJQ+bn5iI+Ib5Lv84WjY2NUIaGXpoxY8YyIt8jZ+H2RsOVlpSgqLAIhqK+R5F13WDAtGnT/iBd7tORvtZw7MT7h/KEGflGfRwwWQ6RI84jDJUnjiNIqYEy5iCKyYTKXYMA+XVZlQ3Y7ReKEydOIDQ0VDjycvXb4yr5k+Hh4Y0zZ8xYsXjx4r+XHlW3YiVcQUGBiIytUWh3ckby4ZLiE0Rkb+wHxMbE4kjmkYFFONHhS1onhDSRXEP2Fpw7lpCQgMioKNTUnEKAQoWE7Arp9+X9u6JzTdjpF0akOwlFUDCM9fJdNXK4dvUq1BERV2fOmLlm7ty5/yA9si7FSjjOAImia2RNx1rTnnjl5eU4eOAgzp45I/ZZfbjCY8ekI/peOM+Qh90GnIbLrmpEcmq6bAP2Fa5fvwGdToukpGQcOHiY/LsE0mic0Cl/TRw1B6oTkJtXIIaUiosMsvV2BY54iXg3Zs2atZai2p9Lj66TWAnHwkTi/jgOgC6Rj2iVb7/9lmekocXcAr1Oj2+++aY9Si0scBDukREam9llh29fg4eGyNlHXl4evMh05lY30jXI3wsHE/r0fETHJSE7OxspKSmydT4MN4joer3+1ly3uRvIz/sn6RG2iy3hrMLuQHJSEjNQIJ/MrclkpD33kUMBEZt5q4Y75tBwjw5fZRRa6b9XrsH6BdSgiQmJZL72QxmhQ8yhYrqOrrpP7mK/oRb+weFkYo+Tn6YSHc+y9XYB7je8RZqLNOWtefPmbf34g4//WXqUnQh3jwimVe2F+9cLEKvbI7B53QKoQ71x524bcq2Ec2i4x0dwOHf4dh8R9jXYL+JMjcwj2dirioXBaCatxvfVOZItOHMdXr4K0dBBQUFCU8rV2R2YLDExMeZPP/lkB0W1/6q1IxybVY2fK5prP0NL7acw1y5EU+0SpKqnURR/kzRctkPD9QZFdU0USUZSYzx+/1tvcPXqNQSTiS0qLBTZJNnHOSlA7lpJAxpbsZei6dLScjGIzoSVq7M7sMZrunWbkxJaQxSKOx013D3MnDISG//6Gtpq56H13Dz4b3sbLhMGodnc7NBwvQFHp4k5J2AwdD/5pV9B5pwHzrkbJUIfA216gTQu2/maDXTNqvjDIr/u8KFD2J+xX77OHoCJx68f66Dh6E/r50IabiFpOCIcwUyaLlU9lUw5abgchw/XC9zF3vA4YSrkGuRJo6KiAhHko+Xl5WNPSCQM9Z1HKdjU8pBZUk4lQskVqKysEJOzm5o7T8zuDoJwMZ0Jp/P7QGi3OxJ4PUPzAZrId2wn3PdPw3VsiMeFX6hWtjGeFq5fuw4ycygrLcVuvxAcKqsX1yk3Jptb1YidvkFi/DU4MAiXL1+WrbMryBHuHkHvN7GdbFbCpWkmopkJ9whRallZGfuLHCWLcx5VnkHC2Ws53paBcMTtj+NuhzaEUZQo1xhPG0lJSWRiDyAyJgERSdl21y8R0EQ+aL0Z3gEqVFVVQ6VS4eTJk7L1yUFewwE6f3vCzReEa7p96wHhutFwXP8md3cy+RkICgwUnd89HcWwyjNDuHXbd8d5+qrOefiHn/fyU9ftDNDWe/lrjF4B2gbPIO0FrwDdpZ0K/SVvhf6KjyLyinew/rp3cOR1b0XUzV3Bkbd2KaKbGDv91c2rV3/ZrNNozZF6fXOkTm+OiYwxk1/TkhCf0EYP6Q75VneTk5O/TUlJ+b+0tLTvCPfS6T87gx4k98pzHtnhw4fFg+G+Mh645wfF/Ww8XMQagFOyiw0GkVFbTv/1JqNRNLY9AezBaUs83bCIzvUO1ogRCMs/ih35aDtYl4Kso7lIJxJkZmbK1mcPWcIRKQI9nXG+yI0wC+cIvK4JeJ8Ix1Fq9xruu+++E/d/YP9+1J6tFQgMCMDNGzceiXTPDOH6SuiefmAPnk/Aqd2cZRsUFPQjBq3/3Z49e35My5/wAPmECRN+yhg0aNBP33333Z9xNsOyZct+sWbNml+uXLnyV59//vl/Llq06Lfz58//He37PZ3z0qTx418eO3bsn8c7OQ1ymTx5EWkHam95ItiCRwxCghWoJP9uX4AS+w1n27tOLISzaDouiz5YBF1UbHuqOA/Gy9VpRTvhbOY0cJSam52Jre5rkXU4XWDH1g04fCBdjDjkEglu3bTRcDKE4y6bwIBAkc3MBGUcpX9Gf1+/7zfhnqaMGjXqD7t37z7JLzmUI4MtRM9/coqIYjk1PTTuoHAHOk/maSOfrw57A0Jx7tw5BPFknWsdJ+vYg6PU6Kho3GlrI9xBg6kBWzZtFsELaX7otFpEkKlmshTk5yOTtDn7iicqj4M1PfubnE7F2twKnhbZXp5fIJYMTw+PDsday/kYObApfiYG7weKLFiw4KekDUM5M0SODPbg48LDwlBRVgFvfxWOtWcX2wYUbSiovUXBhJKCifNQKpXC/MnVx/DeuRM+3t74Yunn+OKzz/EXsVxq2V7KS5t1Kp/+4TQs/nQh1n71tcj/06jVwndkrcbzbgUuXMQlQmJ8Ak5V10CjisAFIjKXtR9D4HOWL1+OQH9/QgCCbMDbX65chSwH4fpeyOR+RFqhuSf5b8LEhoSI95f4BauQkl9tQ7YHoMAKfuExKCouQWJSIpk1+Tc8cTYLD5X1FBwENJAPGhkZCf5+xTHSVLt9fLBpw0a4b9gA94203OiOjbRcv3YdNlLZurVraR/vdxf7LMdsxOpVq4TP25U4TGo/yjvvvPM7Ly+v8mvXrskSowPMLUhNSaGA5QD27z+A4MhUi4ntRLy7UCdnkYnLEAmN/Mr/npD6YWCzfom0E8+6txJu7aYVmPGJM2YseA/TCR8xFr6HRV9NwUyxnIzZi9/DJ6umUPkEOm4cHTMBH7qNQWJyvESvzuIgXD8Lp4ovWbLEv7y8/L5cY9vDamJPVlVjl1848k9fl4hmE1DQMq2gBoEhEThXew6KEAV64jd2BY7KmXA8a81KOPd9SzBn++tw8xiC2TuGEYZi7u5h2JHzPub5DIHnUWcs8H8d29ImYb7PG5jjMRTzPN+C25bh0MYpJXp1FgfhnpC4TJo0NT4u7jZrMrlGtwV3FIeSia2qOokgpRqJ7cmdVlhIl1d9lfy6EJiMDSI9irN75errDqzhLpMvFmslHEWp7r6LMZcIN8djMOYQ4ebsGIJ5RDhPQbjBgnCf+r2Ore2EG4L5niPhtnU4dLEOwj0TQib2t9u2bSu+0tgo2/D2SE1NxcEDB3A4M1vMGuNZ/pw6b806Ect6M/YEqXHiZJXoCmGyyNX1MPBrZlm7sQ/G7yPxo+j1i03TiXDDBZGYcG6k4SyEc8ZcJhwtF/qNwBZBuBGkCUkDOgj37An3/y1csMC7uLi4RyaWRxk4W/f0mVPwpig1p/qyjaaTiGe6g5DodBw6nIW83FwkJSQJn1CuPjk0U5DReOmy6CrhCJS7Sdbu+VSYVCacm5VwPkPhJQg3BF5HJwgNt5kIN89nuES4tzB7y+tEuFCJXp3FQbinJBMnTnTW6/XXe+Lws3/Gk29qqqqgjNAjWja58y7ij5RCpY0ScxTCQpVi9ECuvq5gGzSs8VwA15VD4bpqEKasfgWuq4fgo/WDsVrjhGnug7BKNwbTNg3CCgUFFV8PhQsdM33165i6fDC00WESvTqLg3BPUZycnP7D3d09l+cayBHAHjzExUNL/OIcv7AYYU4tY8oPyHeksgE+/goxuZqTOk0mk2xdcrAl3Pm6WlRUlAuUV5aKrJe09FTM3jYUf40YhWWatzF7zbsoryiTjqtAJR9L2zyHoitxEO4pCw+3zZ8/fzv5XvfkSGAPHtDnjt+683UiufPI8QvCpNqSznC+CV5+ShHB6nR6MddUri57cGcv+4yaCDUqyok8BOuSkZqWglnuQ/GX0DexnOC20gnlZURGm2PKy4mAtOwKHIFzQOQg3FOWsWPHOqnV6sbuxkoZ7Sa2uhpafTR06fmdUp2YhP7qBOQfKxIahYes5OqyBY8S8EhDNaGGiG2LI4cOY93XX+OrjcvhNOclTJg1DDu9t8F9/UYcy89HDQUtHc/hbXtQOR2XlJDoINyzIGPGjPm3DevXH+FPa8oRwh7WDBdDcSl8QiJRVNcsEjktpLPModCnFyA2LgnV1VVQqyLEyIJcXd1h3969WPrFp3Bd8We4bRuGOWRaJy98Dbt2eSKEyC93Tlfgmf0Owj0jQib2h25ubhvy8vK+k2sse7DWUFKAcIF8NR+/EBwuq7PRdKz17iLDcBb+QTwv9aLw6/gdIvX19T0CT9hmf5AnVG8PXAGP3PHwzHsPHnnjsCNzIvRxKui0NvmHFARlZR1FSLiWApxIqDWRuGSXRMqEc3V1/V/plh3yLMj48ePfCg8Pv9jc1L2JZSddqQwT7xaOikuEKilLaLcHOXZt4tOdO/eF4ELDRZG1kZebJyG3S3DaUlJiElJTkrFl82Ys3zILnvljiXDj4MWkOzIB7tu+xuZNm8hsZ6GyvAIBwWFIzqsSv804dv4WduwLJXP9QGs7CPeMCk/5++qrrzJY09gSrCuwed2fniaSPHcFaVB0/rYgnLWj2GBqgb8qHgHKaEIUAm0QEEYQ65ESorBzTxB/gwJbtrtj+/ZNcP3kHXwWNKIdi/2GY9YcV2ylffxi7ekffYyUYzXtv2clu6HOjDDVg7R/B+GeYWETO2vmzNVZWVnf2pKrK9RU1wgTe/niJewJCEVG0Zn2hmciPPDxLBCasAOs82fvQnegCHv27saMVcOxOswJH61/DYv3jMQnnsMxbd0QrFA6YSr5dF/rxsFp2iAEK1Xg11nY1i8IR3UFinkmlmmbDsI9B+Lk5PS6QqEwyn1i0x48I587fqspik1KSYMyVkru7ECEh4PNYeT+QiiUAVgZPh5zdg7FF6FvY2ngcCzYMxwrtaMxa9urWBM3Fi4b/owlW8dAExktQziu6y5CbN5E6iDccyJkYn+xatWqJM78tSVYV+A8N45kq2tOY5d/GApOX4OB3+LZDdgUFxK0aXkIDQmG88I/wW3T6/jwy0GYuupVuG19De8v+hMW7n4T4+b+AUt938ZI5z9Co48hs00akv03JhqBNWrOyUsUKSe0X5eDcM+RAPjBxx9//JfMzMy7tuTqCvxtMO6zu9J4BcnJaUhOsiCJQdsd0F6eKhAaEgY/P1/s9NiBtRs3YYvHLmz18MZmwrYdPrTtTds7abkTHl4+VL4XpcY2lFpJR8tjZ29g++5A8VYA6zU5CPccyjvvvDM4ICDgXE/61djE8nyG6KgoMXzFiOoC1v0xUbSk47k7hD96ok7NEQRiMpWSibQQyrJUp5ImVOkRoYlBGCFcG02IgUoXI7TeNbs5GA7CPafC74hbsWJFFH/xxrZB+xrnamsRQebVOvfXHn6aZDFdUO5cOfA7Vxwdv8+xUOMtzMjIuCPXuH2Bc7VnhRaTIxuDX7R980bPXq3B0xgLCw1IOFp5odjYWldiaj1Pfl9KqenO1rL6lvUlJkbrluL6lmyKmJPoGM8SU/OGMmPzomJj02zat6SkvmVDibE1xGBsO1ZS16zi7fIG88xSU/ObJcbmNyouNo+ovNj2RqnR/KHB1Lqdjs0qNpqXl15q+w27JNJjc0hvZNSoUS/v27fvFHcCyzV0b1BLhNM8hHARKTkiIu54HneByOMYES45v0rqfuHggrti5KJoqYwzYsh02+9nc96+Lratpp7LeP2u6JJpP5eWRabWbw0NLTulx+aQ3gi/eHr58uWxPKjfsfF7ByYcazgrQWwhIlFTK3b5KXE4MwuXLzeK5IKb1693idycXKQQ4ez7BPsHHd0ACzFbI6RH5pC+EFcX1zkpKSnEFXkCPSoaL19GoD5d0hxysGiiA4az4jj+mPE+VUKX2BMej7zTPfy6T5/CkjvoIFw/yNi33/79nl3eJx726aWeotVshndghGgs+YZkWPfZLh8G23OfFByE61dZ5uLy4tKlS0OOV1b2aP5E12hFamo60gpPCb9IvjGfBzgI90Rk6pQp0xPiE5p68lXFhyFEqRafk5Lz5fofclqyK3R1nmXbQbgnIKNHj/5vDw+PsqtXH/4inO5w6FCmmJYYFn+YNN5ppBedIZxFRh+A60knP5DrTSmoeYB8m3Xrtn2ZLaz77Y5LlbbjMksTpMfikP4U/lIhRbK+ZWVlj21i+aPG/DkCY70R2dk5ItnySB8iKyubltmYPHmqZtiIt4YPG/Fun2Pk6LHDpEfikCchH3zwweTY2NibvX0nSX9iyZIl26XLdchAkDFjxvzXtm3bivgbXHIN3nfoKak7HvfZ4sU7pEt1yEAR/vw5vwXAUGToZRTb9yDT7yDcQBVnZ+cJkT18C8CTgoNwA1xGjhz5643r1iUogoPzrQgJVtCSEZwfLEGheFDWPRRSHQ/KrHXYl1tAZVw/wdXV9VO+rvT09B8zxEX2mbzwwv8Dqz2REX1DUHMAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img43"
                        ></image>
                        <clipPath id="clip44">
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
                            d="M384 130.5 384 189.119 381 189.119 381 130.5ZM382.5 130.5 378 133.5 382.5 124.5 387 133.5ZM387 189.119C387 191.605 384.985 193.619 382.5 193.619 380.015 193.619 378 191.605 378 189.119 378 186.634 380.015 184.619 382.5 184.619 384.985 184.619 387 186.634 387 189.119Z"
                            fill="#663300"
                        />
                        <path
                            d="M1.5-2.93228e-06 1.5001 53.7057-1.49989 53.7057-1.5 2.93228e-06ZM-4.5 8.79685e-06C-4.5-2.48527-2.48529-4.49999-8.79685e-06-4.5 2.48527-4.5 4.49999-2.48529 4.5-8.79685e-06 4.5 2.48527 2.48529 4.49999 8.79685e-06 4.5-2.48527 4.5-4.49999 2.48529-4.5 8.79685e-06Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 310.5 362.206)"
                        />
                        <path
                            d="M1.5-2.35382e-06 1.5001 66.904-1.49989 66.904-1.5 2.35382e-06ZM4.5001 66.904C4.50011 69.3893 2.48539 71.404 0.000112048 71.404-2.48517 71.404-4.49989 69.3893-4.4999 66.904-4.4999 64.4188-2.48518 62.404 9.79254e-05 62.404 2.48538 62.404 4.5001 64.4188 4.5001 66.904Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 309.5 256.404)"
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
                            transform="translate(524.498 22)"
                        >
                            Самарканд ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(662.425 22)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(668.591 22)"
                        >
                            2Б (Хишрав)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(110.164 273)"
                        >
                            Тр
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(123.331 273)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(126.831 273)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(97.1639 286)"
                        >
                            10/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(118.831 286)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(76.9973 299)"
                        >
                            S11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(93.6639 299)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(97.1639 299)"
                        >
                            1600/10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(165.042 340)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(172.209 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(175.709 340)"
                        >
                            Тр
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(187.542 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(191.042 340)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(71.0696 357)"
                        >
                            СШ 10,5 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(133.416 120)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(141.916 120)"
                        >
                            идер
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(163.083 120)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(166.583 120)"
                        >
                            61
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(920.463 271)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(927.63 271)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(931.13 271)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(920.463 284)"
                        >
                            10/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(947.463 284)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(920.463 297)"
                        >
                            SFP11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(950.13 297)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(953.63 297)"
                        >
                            25000/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(911.966 340)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(919.133 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(922.633 340)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(929.133 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(932.633 340)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(922.778 235)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(929.945 235)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(933.445 235)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(939.945 235)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(943.445 235)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(738.006 449)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(761.173 449)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(764.673 449)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(726.839 462)"
                        >
                            10/0,4 Кв
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(733.006 475)"
                        >
                            630кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(705.339 488)"
                        >
                            SCB11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(736.839 488)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(740.339 488)"
                        >
                            630/10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(324.835 338)"
                        >
                            В-Т-1
                        </text>
                        <rect id="c334"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 300.5 345.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(325.015 228)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(332.182 228)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(335.682 228)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(342.182 228)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(345.682 228)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(336.155 117)"
                        >
                            Линия
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(365.155 117)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(368.655 117)"
                        >
                            Самарканд
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(420.988 117)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(424.488 117)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(429.822 117)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(433.322 117)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(506.266 118)"
                        >
                            Линия
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(535.266 118)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(538.766 118)"
                        >
                            Самарканд
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(588.433 118)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(591.933 118)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(597.266 118)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(600.766 118)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(397.325 155)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(404.491 155)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(407.991 155)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(415.158 155)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(418.658 155)"
                        >
                            С
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(425.825 155)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(429.325 155)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(434.658 155)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(438.158 155)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(570.342 156)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(577.508 156)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(581.008 156)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(588.175 156)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(591.675 156)"
                        >
                            С
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(598.842 156)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(602.342 156)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(607.675 156)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(611.175 156)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(726.75 160)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(733.917 160)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(737.417 160)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(744.583 160)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(748.083 160)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(753.417 160)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(756.917 160)"
                        >
                            СФ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(838.016 117)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(845.183 117)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(848.683 117)"
                        >
                            ГЭС2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(874.349 117)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(877.849 117)"
                        >
                            ГЭС3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(880.463 156)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(887.629 156)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(891.129 156)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(898.296 156)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(901.796 156)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(907.129 156)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(910.629 156)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1060.96 268)"
                        >
                            Тр
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1074.12 268)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1077.62 268)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1060.96 281)"
                        >
                            10/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1082.62 281)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1060.96 294)"
                        >
                            1600кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1060.96 307)"
                        >
                            S11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1077.62 307)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1081.12 307)"
                        >
                            1600/10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1054.3 340)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1061.46 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1064.96 340)"
                        >
                            Тр
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1076.8 340)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1080.3 340)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(998.356 121)"
                        >
                            Фидер
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1028.02 121)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1031.52 121)"
                        >
                            Иртышар
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1074.52 121)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1078.02 121)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(219.665 182)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(225.831 182)"
                        >
                            СШ 35 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(275.335 271)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(282.502 271)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(286.002 271)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(251.002 284)"
                        >
                            10/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(278.002 284)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(217.835 297)"
                        >
                            SFP11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(247.502 297)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(251.002 297)"
                        >
                            25000/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(676.557 118)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(683.724 118)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(687.224 118)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(692.557 118)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(696.057 118)"
                        >
                            СФ (резерв)
                        </text>
                        <rect id="c29"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 373.5 162.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(180.872 443)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(187.706 443)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(191.206 443)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(169.872 456)"
                        >
                            10 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(158.206 469)"
                        >
                            9,5 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(121.539 482)"
                        >
                            SF
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(136.706 482)"
                        >
                            9500
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(158.039 482)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(161.539 482)"
                        >
                            22/4000
                        </text>
                        <path
                            d="M0 0 406.656 0.000104987"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 454.156 362.5)"
                        />
                        <path
                            d="M1.5-2.0865e-06 1.5001 75.4759-1.49989 75.4759-1.5 2.0865e-06ZM4.5001 75.4759C4.50011 77.9612 2.48539 79.9759 0.000111246 79.9759-2.48517 79.9759-4.49989 77.9612-4.4999 75.4759-4.4999 72.9906-2.48518 70.9759 9.87274e-05 70.9759 2.48538 70.9759 4.5001 72.9906 4.5001 75.4759Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 942.5 437.976)"
                        />
                        <path id="c2542"
                            d="M0 14.5C-1.9097e-15 6.49187 6.71573-1.84604e-15 15-3.69209e-15 23.2843-7.38417e-15 30 6.49187 30 14.5 30 22.5081 23.2843 29 15 29 6.71573 29-9.5485e-15 22.5081 0 14.5Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 136.5 308.5)"
                        />
                        <path id="c2541"
                            d="M0 14.5C-1.97336e-15 6.49187 6.93959-1.84604e-15 15.5-3.69209e-15 24.0604-7.38417e-15 31 6.49187 31 14.5 31 22.5081 24.0604 29 15.5 29 6.93959 29-9.86678e-15 22.5081 0 14.5Z"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 135.5 285.5)"
                        />
                        <path id="c3732"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 372.5 485.5)"
                        />
                        <path id="c3731"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 372.5 462.5)"
                        />
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 372.5 462.5)"
                        />
                        <path
                            d="M386.172 432.582 385 362.525 388 362.475 389.171 432.532ZM382.001 362.575C381.959 360.09 383.94 358.042 386.425 358.001 388.91 357.959 390.958 359.94 390.999 362.425 391.041 364.91 389.06 366.958 386.575 366.999 384.09 367.041 382.042 365.06 382.001 362.575Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M389 485.498 389.04 516.172 386.04 516.176 386 485.502ZM387.54 516.174 392.036 513.169 387.547 522.174 383.036 513.18Z"
                            fill="#989898"
                        />
                        <path
                            d="M149.143 363.043 149 309.504 152 309.496 152.143 363.035ZM155.143 363.027C155.149 365.512 153.14 367.532 150.655 367.539 148.17 367.545 146.149 365.536 146.143 363.051 146.136 360.566 148.146 358.546 150.631 358.539 153.116 358.532 155.136 360.542 155.143 363.027Z"
                            fill="#6600CC"
                        />
                        <path id="c3342"
                            d="M0 14.5C-1.97336e-15 6.49187 6.93959-1.84604e-15 15.5-3.69209e-15 24.0604-7.38417e-15 31 6.49187 31 14.5 31 22.5081 24.0604 29 15.5 29 6.93959 29-9.86678e-15 22.5081 0 14.5Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 294.5 308.5)"
                        />
                        <path id="c3341"
                            d="M0 14.5C-1.9097e-15 6.49187 6.71573-1.84604e-15 15-3.69209e-15 23.2843-7.38417e-15 30 6.49187 30 14.5 30 22.5081 23.2843 29 15 29 6.71573 29-9.5485e-15 22.5081 0 14.5Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 294.5 285.5)"
                        />
                        <path
                            d="M-1.50813 14.5-1.17102 11.2673-0.203171 8.25338 1.32564 5.53065 3.34576 3.16385 5.78983 1.21453 8.59209-0.255784 11.6859-1.18416 15-1.50711 18.3141-1.18416 21.4079-0.255785 24.2102 1.21453 26.6542 3.16385 28.6744 5.53065 30.2032 8.25338 31.171 11.2673 31.5081 14.5 31.171 17.7327 30.2032 20.7466 28.6744 23.4694 26.6542 25.8361 24.2102 27.7855 21.4079 29.2558 18.3141 30.1842 15 30.5071 11.6859 30.1842 8.59209 29.2558 5.78983 27.7855 3.34576 25.8361 1.32564 23.4694-0.203171 20.7466-1.17102 17.7327ZM1.79666 17.2667 1.73292 16.9636 2.60694 19.6854 2.4867 19.4097 3.86969 21.8727 3.70269 21.6333 5.53432 23.7792 5.3287 23.5804 7.54866 25.3509 7.31028 25.1954 9.85825 26.5323 9.59244 26.4238 12.4081 27.2687 12.1225 27.2125 15.1455 27.5071 14.8545 27.5071 17.8775 27.2125 17.5919 27.2687 20.4076 26.4238 20.1417 26.5323 22.6897 25.1954 22.4513 25.3509 24.6713 23.5804 24.4657 23.7792 26.2973 21.6333 26.1303 21.8727 27.5133 19.4097 27.3931 19.6854 28.2671 16.9636 28.2033 17.2667 28.5081 14.3444 28.5081 14.6556 28.2033 11.7333 28.2671 12.0364 27.3931 9.31456 27.5133 9.59034 26.1303 7.12731 26.2973 7.36672 24.4657 5.22076 24.6713 5.41964 22.4513 3.64906 22.6897 3.80464 20.1417 2.46775 20.4076 2.57619 17.5919 1.7313 17.8775 1.78752 14.8545 1.49293 15.1455 1.49293 12.1225 1.78752 12.4081 1.7313 9.59244 2.57619 9.85825 2.46775 7.31028 3.80464 7.54866 3.64906 5.3287 5.41964 5.53432 5.22076 3.70269 7.36672 3.86969 7.12731 2.4867 9.59034 2.60694 9.31456 1.73292 12.0364 1.79666 11.7333 1.49191 14.6556 1.49191 14.3444Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 294.5 285.5)"
                        />
                        <path
                            d="M978.171 189.5 220.5 189.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M382.509 142.782 382.5 131.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5205 5.99499 1.91773 122.24-1.08225 122.25-1.47949 6.00524ZM0.0205035 5.99996-4.46922 9.01532 0 0 4.53073 8.98457Z"
                            fill="#006600"
                            transform="matrix(-1 0 0 1 150.918 134.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(900.187 444)"
                        >
                            Г-2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(889.187 457)"
                        >
                            10 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(877.52 470)"
                        >
                            9,5 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(840.854 483)"
                        >
                            SF 9500-22/4000
                        </text>
                        <rect id="c3343"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 300.5 235.5)"
                        />
                        <path
                            d="M177.06 488.87 270.168 488.87 270.168 501.67 177.06 501.67Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M177.06 501.67 270.168 501.67 270.168 514.47 177.06 514.47Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M177.06 514.47 270.168 514.47 270.168 527.27 177.06 527.27Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M177.06 527.27 270.168 527.27 270.168 540.07 177.06 540.07Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M177.06 540.07 270.168 540.07 270.168 552.87 177.06 552.87Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M177.06 552.87 270.168 552.87 270.168 565.67 177.06 565.67Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M176.393 501.67 270.835 501.67"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M176.393 514.47 270.835 514.47"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M176.393 527.27 270.835 527.27"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M176.393 540.07 270.835 540.07"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M176.393 552.87 270.835 552.87"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M177.06 488.204 177.06 566.337"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M270.168 488.204 270.168 566.337"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M176.393 488.87 270.835 488.87"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M176.393 565.67 270.835 565.67"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g293"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(180.84 499)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g295"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(180.84 512)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a293"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(180.84 524)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k293"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(180.84 537)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n293"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(180.84 550)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w293" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(180.84 563)"
                            >
                                Qвода
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(531.471 442)"
                        >
                            Г-3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(520.471 455)"
                        >
                            10 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(508.805 468)"
                        >
                            7,6 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(472.138 481)"
                        >
                            SF 7600-22/4000
                        </text>
                        <path
                            d="M1.5-2.1557e-06 1.5001 73.053-1.49989 73.053-1.5 2.1557e-06ZM4.5001 73.053C4.50011 75.5383 2.48539 77.553 0.000111454 77.553-2.48517 77.553-4.49989 75.5383-4.4999 73.053-4.4999 70.5677-2.48518 68.553 9.85198e-05 68.553 2.48538 68.553 4.5001 70.5677 4.5001 73.053Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 575.5 435.553)"
                        />
                        <rect id="c493"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 565.5 411.5)"
                        />
                        <path
                            d="M527.659 488.093 620.767 488.093 620.767 500.893 527.659 500.893Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M527.659 500.893 620.767 500.893 620.767 513.693 527.659 513.693Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M527.659 513.693 620.767 513.693 620.767 526.493 527.659 526.493Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M527.659 526.493 620.767 526.493 620.767 539.293 527.659 539.293Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M527.659 539.293 620.767 539.293 620.767 552.093 527.659 552.093Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M527.659 552.093 620.767 552.093 620.767 564.893 527.659 564.893Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M526.992 500.893 621.434 500.893"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M526.992 513.693 621.434 513.693"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M526.992 526.493 621.434 526.493"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M526.992 539.293 621.434 539.293"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M526.992 552.093 621.434 552.093"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M527.659 487.426 527.659 565.559"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M620.767 487.426 620.767 565.559"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M526.992 488.093 621.434 488.093"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M526.992 564.893 621.434 564.893"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g493"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(531.439 498)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g495"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(531.439 511)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a493"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(531.439 524)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k493"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(531.439 536)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n493"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(531.439 549)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w493" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(531.439 562)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M223.014 436.331 223 362.5 226 362.5 226.014 436.331ZM220 362.501C220 360.016 222.014 358.001 224.499 358 226.985 358 229 360.014 229 362.499 229.001 364.984 226.986 367 224.501 367 222.016 367.001 220.001 364.986 220 362.501Z"
                            fill="#6600CC"
                        />
                        <rect id="c2931"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 215.5 411.5)"
                        />
                        <rect id="c254"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 141.5 345.5)"
                        />
                        <rect id="c413"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 933.5 411.5)"
                        />
                        <path
                            d="M1.5-2.93228e-06 1.5001 53.7057-1.49989 53.7057-1.5 2.93228e-06ZM-4.5 8.79685e-06C-4.5-2.48527-2.48529-4.49999-8.79685e-06-4.5 2.48527-4.5 4.49999-2.48529 4.5-8.79685e-06 4.5 2.48527 2.48529 4.49999 8.79685e-06 4.5-2.48527 4.5-4.49999 2.48529-4.5 8.79685e-06Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 899.5 362.206)"
                        />
                        <path
                            d="M1.5-2.35382e-06 1.5001 66.904-1.49989 66.904-1.5 2.35382e-06ZM4.5001 66.904C4.50011 69.3893 2.48539 71.404 0.000112048 71.404-2.48517 71.404-4.49989 69.3893-4.4999 66.904-4.4999 64.4188-2.48518 62.404 9.79254e-05 62.404 2.48538 62.404 4.5001 64.4188 4.5001 66.904Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 899.5 256.404)"
                        />
                        <rect id="c534"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 889.5 345.5)"
                        />
                        <path id="c5342"
                            d="M0 14C-1.9097e-15 6.26801 6.71573-1.78239e-15 15-3.56477e-15 23.2843-7.12955e-15 30 6.26801 30 14 30 21.732 23.2843 28 15 28 6.71573 28-9.5485e-15 21.732 0 14Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 884.5 308.5)"
                        />
                        <path id="c5341"
                            d="M0 14.5C-1.9097e-15 6.49187 6.71573-1.84604e-15 15-3.69209e-15 23.2843-7.38417e-15 30 6.49187 30 14.5 30 22.5081 23.2843 29 15 29 6.71573 29-9.5485e-15 22.5081 0 14.5Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 884.5 285.5)"
                        />
                        <path
                            d="M-1.50813 14.5-1.17102 11.2673-0.203171 8.25338 1.32564 5.53065 3.34576 3.16385 5.78983 1.21453 8.59209-0.255784 11.6859-1.18416 15-1.50711 18.3141-1.18416 21.4079-0.255785 24.2102 1.21453 26.6542 3.16385 28.6744 5.53065 30.2032 8.25338 31.171 11.2673 31.5081 14.5 31.171 17.7327 30.2032 20.7466 28.6744 23.4694 26.6542 25.8361 24.2102 27.7855 21.4079 29.2558 18.3141 30.1842 15 30.5071 11.6859 30.1842 8.59209 29.2558 5.78983 27.7855 3.34576 25.8361 1.32564 23.4694-0.203171 20.7466-1.17102 17.7327ZM1.79666 17.2667 1.73292 16.9636 2.60694 19.6854 2.4867 19.4097 3.86969 21.8727 3.70269 21.6333 5.53432 23.7792 5.3287 23.5804 7.54866 25.3509 7.31028 25.1954 9.85825 26.5323 9.59244 26.4238 12.4081 27.2687 12.1225 27.2125 15.1455 27.5071 14.8545 27.5071 17.8775 27.2125 17.5919 27.2687 20.4076 26.4238 20.1417 26.5323 22.6897 25.1954 22.4513 25.3509 24.6713 23.5804 24.4657 23.7792 26.2973 21.6333 26.1303 21.8727 27.5133 19.4097 27.3931 19.6854 28.2671 16.9636 28.2033 17.2667 28.5081 14.3444 28.5081 14.6556 28.2033 11.7333 28.2671 12.0364 27.3931 9.31456 27.5133 9.59034 26.1303 7.12731 26.2973 7.36672 24.4657 5.22076 24.6713 5.41964 22.4513 3.64906 22.6897 3.80464 20.1417 2.46775 20.4076 2.57619 17.5919 1.7313 17.8775 1.78752 14.8545 1.49293 15.1455 1.49293 12.1225 1.78752 12.4081 1.7313 9.59244 2.57619 9.85825 2.46775 7.31028 3.80464 7.54866 3.64906 5.3287 5.41964 5.53432 5.22076 3.70269 7.36672 3.86969 7.12731 2.4867 9.59034 2.60694 9.31456 1.73292 12.0364 1.79666 11.7333 1.49191 14.6556 1.49191 14.3444Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 884.5 285.5)"
                        />
                        <rect id="c5343"
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 890.5 235.5)"
                        />
                        <path
                            d="M556 130.5 556 189.119 553 189.119 553 130.5ZM554.5 130.5 550 133.5 554.5 124.5 559 133.5ZM559 189.119C559 191.605 556.985 193.619 554.5 193.619 552.015 193.619 550 191.605 550 189.119 550 186.634 552.015 184.619 554.5 184.619 556.985 184.619 559 186.634 559 189.119Z"
                            fill="#663300"
                        />
                        <rect id="c94"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 545.5 162.5)"
                        />
                        <path
                            d="M554.509 142.782 554.5 131.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M716 130.5 716 189.119 713 189.119 713 130.5ZM714.5 130.5 710 133.5 714.5 124.5 719 133.5ZM719 189.119C719 191.605 716.985 193.619 714.5 193.619 712.015 193.619 710 191.605 710 189.119 710 186.634 712.015 184.619 714.5 184.619 716.985 184.619 719 186.634 719 189.119Z"
                            fill="#663300"
                        />
                        <rect id="c0"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 705.5 162.5)"
                        />
                        <path
                            d="M714.509 142.782 714.5 131.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M869 131.5 869 190.119 866 190.119 866 131.5ZM867.5 131.5 863 134.5 867.5 125.5 872 134.5ZM872 190.119C872 192.605 869.985 194.619 867.5 194.619 865.015 194.619 863 192.605 863 190.119 863 187.634 865.015 185.619 867.5 185.619 869.985 185.619 872 187.634 872 190.119Z"
                            fill="#663300"
                        />
                        <rect id="c14"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#663300"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 858.5 162.5)"
                        />
                        <path
                            d="M867.509 143.782 867.5 132.5"
                            stroke="#663300"
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
                            transform="translate(538.039 404)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(545.206 404)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(548.706 404)"
                        >
                            Г3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(957.787 403)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(964.954 403)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(968.454 403)"
                        >
                            Г2
                        </text>
                        <rect id="c373"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 377.5 411.5)"
                        />
                        <path id="c4532"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 775.5 485.5)"
                        />
                        <path id="c4531"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 775.5 461.5)"
                        />
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 775.5 461.5)"
                        />
                        <path
                            d="M1.49987-0.0199094 2.42113 69.3829-0.578608 69.4227-1.49987 0.0199094ZM5.42086 69.3431C5.45385 71.8282 3.46605 73.8694 0.980988 73.9024-1.50407 73.9354-3.54536 71.9476-3.57834 69.4626-3.61133 66.9775-1.62353 64.9362 0.861532 64.9032 3.34659 64.8702 5.38788 66.858 5.42086 69.3431Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 790.5 431.903)"
                        />
                        <path
                            d="M792 485.498 792.04 516.172 789.04 516.176 789 485.502ZM790.54 516.174 795.036 513.169 790.547 522.174 786.036 513.18Z"
                            fill="#989898"
                        />
                        <rect id="c453"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 781.5 410.5)"
                        />
                        <path
                            d="M896.577 489.913 989.685 489.913 989.685 502.713 896.577 502.713Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M896.577 502.713 989.685 502.713 989.685 515.513 896.577 515.513Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M896.577 515.513 989.685 515.513 989.685 528.313 896.577 528.313Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M896.577 528.313 989.685 528.313 989.685 541.113 896.577 541.113Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M896.577 541.113 989.685 541.113 989.685 553.913 896.577 553.913Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M896.577 553.913 989.685 553.913 989.685 566.713 896.577 566.713Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M895.91 502.713 990.352 502.713"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M895.91 515.513 990.352 515.513"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M895.91 528.313 990.352 528.313"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M895.91 541.113 990.352 541.113"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M895.91 553.913 990.352 553.913"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M896.577 489.247 896.577 567.38"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M989.685 489.247 989.685 567.38"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M895.91 489.913 990.352 489.913"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M895.91 566.713 990.352 566.713"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g413"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(900.357 500)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g415"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(900.357 513)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a413"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(900.357 526)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k413"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(900.357 538)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n413"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(900.357 551)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w413" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(900.357 564)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path id="c6142"
                            d="M0 14C-1.9097e-15 6.26801 6.71573-1.78239e-15 15-3.56477e-15 23.2843-7.12955e-15 30 6.26801 30 14 30 21.732 23.2843 28 15 28 6.71573 28-9.5485e-15 21.732 0 14Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1025.5 307.5)"
                        />
                        <path id="c6141"
                            d="M0 14.5C-1.9097e-15 6.49187 6.71573-1.84604e-15 15-3.69209e-15 23.2843-7.38417e-15 30 6.49187 30 14.5 30 22.5081 23.2843 29 15 29 6.71573 29-9.5485e-15 22.5081 0 14.5Z"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1025.5 284.5)"
                        />
                        <path
                            d="M1038.14 362.043 1038 308.504 1041 308.496 1041.14 362.035ZM1044.14 362.027C1044.15 364.512 1042.14 366.532 1039.65 366.539 1037.17 366.545 1035.15 364.536 1035.14 362.051 1035.14 359.566 1037.15 357.546 1039.63 357.539 1042.12 357.532 1044.14 359.542 1044.14 362.027Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M1042 141.5 1042 256.103 1039 256.103 1039 141.5ZM1040.5 141.5 1036 144.5 1040.5 135.5 1045 144.5Z"
                            fill="#006600"
                        />
                        <rect id="c614"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1030.5 344.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(335.133 443)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(358.3 443)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(361.8 443)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(324.133 456)"
                        >
                            10/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(353.8 456)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(330.133 469)"
                        >
                            630кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(302.466 482)"
                        >
                            SCB11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(333.966 482)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(337.466 482)"
                        >
                            630/10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1120.33 448)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1143.49 448)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1146.99 448)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1109.33 461)"
                        >
                            10/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1138.99 461)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1115.33 474)"
                        >
                            400
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1131.33 474)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1099.49 487)"
                        >
                            ZBW
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1124.49 487)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1127.99 487)"
                        >
                            12/04
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1183.36 343)"
                        >
                            ПС. Самарканд
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1183.36 356)"
                        >
                            Ф.
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1197.19 356)"
                        >
                            Сам.Пром
                        </text>
                        <path id="c772"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1157.5 486.5)"
                        />
                        <path id="c771"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1157.5 463.5)"
                        />
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 1157.5 463.5)"
                        />
                        <path
                            d="M1171.17 433.582 1170 363.525 1173 363.475 1174.17 433.532ZM1167 363.575C1166.96 361.09 1168.94 359.042 1171.42 359.001 1173.91 358.959 1175.96 360.94 1176 363.425 1176.04 365.91 1174.06 367.958 1171.58 367.999 1169.09 368.041 1167.04 366.06 1167 363.575Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M1174 486.498 1174.04 517.172 1171.04 517.176 1171 486.502ZM1172.54 517.174 1177.04 514.169 1172.55 523.174 1168.04 514.18Z"
                            fill="#989898"
                        />
                        <rect id="c77"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1162.5 412.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1109.41 406)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1116.57 406)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1120.07 406)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1143.24 406)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1146.74 406)"
                        >
                            3
                        </text>
                        <rect
                            x="1097.5"
                            y="330.5"
                            width="161"
                            height="233"
                            stroke="#172C51"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            stroke-dasharray="5.33333 4"
                            fill="none"
                        />
                        <path
                            d="M1219.82 363.73 1115.5 362.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-3.22897e-06 1.5001 48.771-1.49989 48.771-1.5 3.22897e-06ZM-4.5 9.68692e-06C-4.50001-2.48527-2.48529-4.49999-9.68692e-06-4.5 2.48527-4.50001 4.49999-2.48529 4.5-9.68692e-06 4.50001 2.48527 2.48529 4.49999 9.68692e-06 4.5-2.48527 4.50001-4.49999 2.48529-4.5 9.68692e-06Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 444.5 362.271)"
                        />
                        <path
                            d="M445.5 313 526.933 313 526.933 316 445.5 316ZM445.5 319C443.015 319 441 316.985 441 314.5 441 312.015 443.015 310 445.5 310 447.985 310 450 312.015 450 314.5 450 316.985 447.985 319 445.5 319Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M1.5-3.3446e-06 1.5001 47.0849-1.49989 47.0849-1.5 3.3446e-06ZM-4.5 1.00338e-05C-4.50001-2.48527-2.48529-4.49999-1.00338e-05-4.5 2.48527-4.50001 4.49999-2.48529 4.5-1.00338e-05 4.50001 2.48527 2.48529 4.49999 1.00338e-05 4.5-2.48527 4.50001-4.49999 2.48529-4.5 1.00338e-05ZM4.5001 47.0849C4.50011 49.5702 2.4854 51.5849 0.000115021 51.5849-2.48517 51.5849-4.49989 49.5702-4.4999 47.0849-4.4999 44.5997-2.48519 42.5849 9.49531e-05 42.5849 2.48538 42.5849 4.5001 44.5996 4.5001 47.0849Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 527.5 361.585)"
                        />
                        <path
                            d="M0 0 124.389 0.000104987"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 642.89 361.5)"
                        />
                        <path
                            d="M1.5-3.22897e-06 1.5001 48.771-1.49989 48.771-1.5 3.22897e-06ZM-4.5 9.68692e-06C-4.50001-2.48527-2.48529-4.49999-9.68692e-06-4.5 2.48527-4.50001 4.49999-2.48529 4.5-9.68692e-06 4.50001 2.48527 2.48529 4.49999 9.68692e-06 4.5-2.48527 4.50001-4.49999 2.48529-4.5 9.68692e-06Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 634.5 362.271)"
                        />
                        <path
                            d="M634.5 313 715.933 313 715.933 316 634.5 316ZM634.5 319C632.015 319 630 316.985 630 314.5 630 312.015 632.015 310 634.5 310 636.985 310 639 312.015 639 314.5 639 316.985 636.985 319 634.5 319Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M1.5-3.3446e-06 1.5001 47.0849-1.49989 47.0849-1.5 3.3446e-06ZM-4.5 1.00338e-05C-4.50001-2.48527-2.48529-4.49999-1.00338e-05-4.5 2.48527-4.50001 4.49999-2.48529 4.5-1.00338e-05 4.50001 2.48527 2.48529 4.49999 1.00338e-05 4.5-2.48527 4.50001-4.49999 2.48529-4.5 1.00338e-05ZM4.5001 47.0849C4.50011 49.5702 2.4854 51.5849 0.000115021 51.5849-2.48517 51.5849-4.49989 49.5702-4.4999 47.0849-4.4999 44.5997-2.48519 42.5849 9.49531e-05 42.5849 2.48538 42.5849 4.5001 44.5996 4.5001 47.0849Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 717.5 361.585)"
                        />
                        <path
                            d="M1093.72 363.059 707.5 362.5"
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
                            transform="translate(189.318 407)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(196.485 407)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(199.985 407)"
                        >
                            Г1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(328.15 404)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(335.316 404)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(338.816 404)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(361.983 404)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(365.483 404)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(733.667 403)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(740.834 403)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(744.334 403)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(767.5 403)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(771 403)"
                        >
                            2
                        </text>
                        <path
                            d="M109.273 76.5001 192.873 76.5001 192.873 90.0912 109.273 90.0912Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M109.273 90.0912 192.873 90.0912 192.873 103.682 109.273 103.682Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M108.607 90.0912 193.539 90.0912"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M109.273 75.8334 109.273 104.349"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M192.873 75.8334 192.873 104.349"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M108.607 76.5001 193.539 76.5001"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M108.607 103.682 193.539 103.682"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g254"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(111.94 87)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g253"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(111.94 100)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 185 77)"
                        >
                            <g clip-path="url(#clip2)" transform="matrix(1 0 0 1.02857 -0.125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip3)"
                            transform="matrix(0.000104987 0 0 0.000104987 185 91)"
                        >
                            <g
                                clip-path="url(#clip5)"
                                transform="matrix(1 0 0 1.02857 -0.125 -0.0625)"
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
                            d="M339.684 76.0505 423.283 76.0505 423.283 89.6417 339.684 89.6417Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M339.684 89.6417 423.283 89.6417 423.283 103.233 339.684 103.233Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M339.017 89.6417 423.95 89.6417"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M339.684 75.3838 339.684 103.9"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M423.283 75.3838 423.283 103.9"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M339.017 76.0505 423.95 76.0505"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M339.017 103.233 423.95 103.233"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g29"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(342.351 86)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g28"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(342.351 100)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip6)"
                            transform="matrix(0.000104987 0 0 0.000104987 415 77)"
                        >
                            <g clip-path="url(#clip7)" transform="matrix(1 0 0 1.02857 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip8)"
                            transform="matrix(0.000104987 0 0 0.000104987 415 90)"
                        >
                            <g
                                clip-path="url(#clip9)"
                                transform="matrix(1.16667 0 0 1 -0.25 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M512.443 76.231 596.043 76.231 596.043 89.8222 512.443 89.8222Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M512.443 89.8222 596.043 89.8222 596.043 103.413 512.443 103.413Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M511.777 89.8222 596.71 89.8222"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M512.443 75.5643 512.443 104.08"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M596.043 75.5643 596.043 104.08"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M511.777 76.231 596.71 76.231"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M511.777 103.413 596.71 103.413"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g94"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(515.11 86)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g93"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(515.11 100)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 588 77)"
                        >
                            <g clip-path="url(#clip11)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip12)"
                            transform="matrix(0.000104987 0 0 0.000104987 588 91)"
                        >
                            <g clip-path="url(#clip13)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M671.302 76.7458 754.901 76.7458 754.901 90.337 671.302 90.337Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M671.302 90.337 754.901 90.337 754.901 103.928 671.302 103.928Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M670.635 90.337 755.568 90.337"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M671.302 76.0792 671.302 104.595"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M754.901 76.0792 754.901 104.595"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M670.635 76.7458 755.568 76.7458"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M670.635 103.928 755.568 103.928"
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
                                font-weight="700"
                                font-size="9"
                                transform="translate(673.968 87)"
                            >
                                Р= 0,00 МВт
                            </text>
                        </g>
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(673.968 100)"
                            >
                                Р= 0,00 МВт
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip14)"
                            transform="matrix(0.000104987 0 0 0.000104987 747 77)"
                        >
                            <g clip-path="url(#clip15)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip16)"
                            transform="matrix(0.000104987 0 0 0.000104987 747 91)"
                        >
                            <g clip-path="url(#clip17)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M824.372 76.1363 907.972 76.1363 907.972 89.7275 824.372 89.7275Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M824.372 89.7275 907.972 89.7275 907.972 103.319 824.372 103.319Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M823.706 89.7275 908.639 89.7275"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M824.372 75.4696 824.372 103.985"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M907.972 75.4696 907.972 103.985"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M823.706 76.1363 908.639 76.1363"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M823.706 103.319 908.639 103.319"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g14"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(827.039 86)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g13"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(827.039 100)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip18)"
                            transform="matrix(0.000104987 0 0 0.000104987 900 77)"
                        >
                            <g clip-path="url(#clip19)" transform="matrix(1 0 0 1.02857 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip20)"
                            transform="matrix(0.000104987 0 0 0.000104987 900 90)"
                        >
                            <g clip-path="url(#clip21)" transform="matrix(1 0 0 1.11429 -1 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M995.74 76.0433 1079.34 76.0433 1079.34 89.6344 995.74 89.6344Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M995.74 89.6344 1079.34 89.6344 1079.34 103.226 995.74 103.226Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M995.074 89.6344 1080.01 89.6344"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M995.74 75.3766 995.74 103.892"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1079.34 75.3766 1079.34 103.892"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M995.074 76.0433 1080.01 76.0433"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M995.074 103.226 1080.01 103.226"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g614"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(998.407 86)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g613"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(998.407 100)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip22)"
                            transform="matrix(0.000104987 0 0 0.000104987 1071 77)"
                        >
                            <g clip-path="url(#clip23)" transform="matrix(1 0 0 1.02857 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip24)"
                            transform="matrix(0.000104987 0 0 0.000104987 1072 90)"
                        >
                            <g clip-path="url(#clip25)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M334.934 268.707 418.534 268.707 418.534 282.298 334.934 282.298Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M334.934 282.298 418.534 282.298 418.534 295.89 334.934 295.89Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M334.268 282.298 419.201 282.298"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M334.934 268.041 334.934 296.556"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M418.534 268.041 418.534 296.556"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M334.268 268.707 419.201 268.707"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M334.268 295.89 419.201 295.89"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g334"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(337.601 279)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g333"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(337.601 292)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip26)"
                            transform="matrix(0.000104987 0 0 0.000104987 410 269)"
                        >
                            <g clip-path="url(#clip27)" transform="matrix(1 0 0 1.02857 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip28)"
                            transform="matrix(0.000104987 0 0 0.000104987 411 283)"
                        >
                            <g clip-path="url(#clip29)" transform="matrix(1 0 0 1.02857 -0.25 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M792.646 269.422 876.246 269.422 876.246 283.013 792.646 283.013Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M792.646 283.013 876.246 283.013 876.246 296.604 792.646 296.604Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M791.979 283.013 876.912 283.013"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M792.646 268.755 792.646 297.271"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M876.246 268.755 876.246 297.271"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M791.979 269.422 876.912 269.422"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M791.979 296.604 876.912 296.604"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g534"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(795.313 279)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g533"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(795.313 293)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip30)"
                            transform="matrix(0.000104987 0 0 0.000104987 868 270)"
                        >
                            <g clip-path="url(#clip31)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip32)"
                            transform="matrix(0.000104987 0 0 0.000104987 868 284)"
                        >
                            <g clip-path="url(#clip33)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M750.846 530.759 834.446 530.759 834.446 544.35 750.846 544.35Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M750.846 530.092 750.846 545.016"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M834.446 530.092 834.446 545.016"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M750.18 530.759 835.112 530.759"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M750.18 544.35 835.112 544.35"
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
                                transform="translate(753.513 541)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip34)"
                            transform="matrix(0.000104987 0 0 0.000104987 826 531)"
                        >
                            <g clip-path="url(#clip35)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M341.782 531.44 425.382 531.44 425.382 545.031 341.782 545.031Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M341.782 530.773 341.782 545.698"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M425.382 530.773 425.382 545.698"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M341.116 531.44 426.048 531.44"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M341.116 545.031 426.048 545.031"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g373"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(344.449 541)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip36)"
                            transform="matrix(0.000104987 0 0 0.000104987 417 532)"
                        >
                            <g clip-path="url(#clip37)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1136.64 529.535 1220.24 529.535 1220.24 543.126 1136.64 543.126Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1136.64 528.868 1136.64 543.792"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1220.24 528.868 1220.24 543.792"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1135.98 529.535 1220.91 529.535"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1135.98 543.126 1220.91 543.126"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g77"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1139.31 540)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip38)"
                            transform="matrix(0.000104987 0 0 0.000104987 1212 530)"
                        >
                            <g clip-path="url(#clip39)" transform="matrix(1 0 0 1.02857 0 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M215.592 192.783 290.865 192.783 290.865 205.583 215.592 205.583Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M215.592 192.116 215.592 206.25"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M290.865 192.116 290.865 206.25"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M214.925 192.783 291.532 192.783"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M214.925 205.583 291.532 205.583"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g323"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(219.371 203)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M58.2073 366.201 133.481 366.201 133.481 379.001 58.2073 379.001Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M58.2073 365.534 58.2073 379.668"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M133.481 365.534 133.481 379.668"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M57.5407 366.201 134.148 366.201"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M57.5407 379.001 134.148 379.001"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g283"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(61.9869 376)"
                            >
                                U
                            </text>
                        </g>
                        <path id="c293"
                            d="M201.5 460C201.5 446.469 212.469 435.5 226 435.5 239.531 435.5 250.5 446.469 250.5 460 250.5 473.531 239.531 484.5 226 484.5 212.469 484.5 201.5 473.531 201.5 460Z"
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
                                        d="M224.689 452.933 225.622 452.933 226.944 453.167 228.033 453.633 228.889 454.178 229.9 455.189 230.522 456.122 230.989 457.367 231.144 458.067 231.144 459.933 230.833 461.1 230.211 462.344 229.589 463.122 229.044 463.667 227.956 464.367 226.711 464.833 225.933 464.989 224.378 464.989 223.133 464.678 222.278 464.289 221.422 463.744 220.567 462.967 220.022 462.189 219.478 461.1 219.167 459.856 219.089 458.922 219.244 457.678 219.556 456.667 220.178 455.5 221.033 454.567 221.656 454.022 222.978 453.322 224.144 453.011Z"
                                    />
                                    <path
                                        d="M225.156 439.089 226.011 439.089 227.489 439.322 228.967 439.789 230.211 440.411 231.144 441.033 231.922 441.733 232.856 442.667 233.711 443.911 234.333 445.156 234.8 446.556 235.033 447.722 235.111 448.344 235.111 449.822 234.878 451.3 234.489 452.622 233.867 453.944 233.089 455.033 232.933 455.033 232.311 453.944 231.378 452.856 230.522 452.078 229.433 451.378 228.267 450.833 226.944 450.444 225.156 450.211Z"
                                    />
                                    <path
                                        d="M212.4 454.878 212.789 454.956 214.967 456.2 216.522 457.133 216.6 457.289 216.444 458.922 216.6 460.556 216.989 462.033 217.533 463.2 217.533 463.433 215.356 464.678 213.489 465.767 209.444 468.1 208.122 468.878 207.889 468.878 207.189 467.4 206.8 466.078 206.644 465.144 206.567 463.822 206.722 462.344 206.956 461.256 207.5 459.778 208.044 458.767 208.744 457.756 209.678 456.744 210.533 455.967 211.933 455.111Z"
                                    />
                                    <path
                                        d="M232.7 463.433 233.089 463.511 234.956 464.6 241.022 468.1 242.344 468.878 242.189 469.267 241.644 470.044 240.944 470.9 240.4 471.444 239.233 472.3 237.989 473 236.511 473.544 235.344 473.778 234.878 473.856 232.544 473.856 231.378 473.622 230.133 473.233 228.811 472.611 227.878 471.989 227.878 467.322 228.578 467.011 229.9 466.311 230.833 465.611 231.922 464.522Z"
                                    />
                                    <path
                                        d="M215.667 444.067 217.378 444.067 218.856 444.3 220.489 444.844 221.811 445.544 222.433 445.933 222.433 450.678 221.033 451.3 219.944 452 219.089 452.7 218.544 453.244 217.611 454.567 217.144 454.411 215.822 453.633 209.756 450.133 208.044 449.122 207.967 448.967 208.511 448.111 209.367 447.1 209.989 446.478 211.156 445.622 212.244 445 213.722 444.456 214.578 444.222Z"
                                    />
                                    <path
                                        d="M219.167 465.533 219.478 465.611 220.644 466.467 221.967 467.089 223.211 467.478 224.144 467.633 225.078 467.711 225.156 467.789 225.156 478.833 223.989 478.833 222.433 478.522 221.111 478.056 219.711 477.278 218.7 476.5 217.922 475.8 217.144 474.867 216.367 473.622 215.744 472.222 215.356 470.744 215.2 469.344 215.2 468.489 215.278 467.789 217.222 466.7 218.544 465.922Z"
                                    />
                                    <path
                                        d="M242.267 449.044 242.422 449.044 242.967 450.133 243.433 451.533 243.667 452.778 243.744 454.333 243.589 455.733 243.278 457.056 242.656 458.533 242.111 459.467 241.489 460.322 240.633 461.256 239.467 462.189 238.456 462.811 237.756 463.122 235.811 462.033 233.944 460.944 233.711 460.789 233.867 459.389 233.867 458.222 234.567 457.522 235.578 456.2 236.278 455.033 236.978 453.556 237.522 451.844 238.222 451.378 240.167 450.289 242.033 449.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c4931"
                            d="M551.5 459C551.5 445.469 562.469 434.5 576 434.5 589.531 434.5 600.5 445.469 600.5 459 600.5 472.531 589.531 483.5 576 483.5 562.469 483.5 551.5 472.531 551.5 459Z"
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
                                        transform="matrix(1 0 0 1.01205 575.193 451.933)"
                                    />
                                    <path
                                        d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                        transform="matrix(1 0 0 1.01205 575.654 438.089)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                        transform="matrix(1 0 0 1.01205 563.05 453.878)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                        transform="matrix(1 0 0 1.01205 583.108 462.433)"
                                    />
                                    <path
                                        d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                        transform="matrix(1 0 0 1.01205 566.278 443.067)"
                                    />
                                    <path
                                        d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                        transform="matrix(1 0 0 1.01205 569.736 464.533)"
                                    />
                                    <path
                                        d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                        transform="matrix(1 0 0 1.01205 592.561 448.044)"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c4131"
                            d="M919.5 462C919.5 448.469 930.469 437.5 944 437.5 957.531 437.5 968.5 448.469 968.5 462 968.5 475.531 957.531 486.5 944 486.5 930.469 486.5 919.5 475.531 919.5 462Z"
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
                                        d="M942.689 454.933 943.622 454.933 944.944 455.167 946.033 455.633 946.889 456.178 947.9 457.189 948.522 458.122 948.989 459.367 949.144 460.067 949.144 461.933 948.833 463.1 948.211 464.344 947.589 465.122 947.044 465.667 945.956 466.367 944.711 466.833 943.933 466.989 942.378 466.989 941.133 466.678 940.278 466.289 939.422 465.744 938.567 464.967 938.022 464.189 937.478 463.1 937.167 461.856 937.089 460.922 937.244 459.678 937.556 458.667 938.178 457.5 939.033 456.567 939.656 456.022 940.978 455.322 942.144 455.011Z"
                                    />
                                    <path
                                        d="M943.156 441.089 944.011 441.089 945.489 441.322 946.967 441.789 948.211 442.411 949.144 443.033 949.922 443.733 950.856 444.667 951.711 445.911 952.333 447.156 952.8 448.556 953.033 449.722 953.111 450.344 953.111 451.822 952.878 453.3 952.489 454.622 951.867 455.944 951.089 457.033 950.933 457.033 950.311 455.944 949.378 454.856 948.522 454.078 947.433 453.378 946.267 452.833 944.944 452.444 943.156 452.211Z"
                                    />
                                    <path
                                        d="M930.4 456.878 930.789 456.956 932.967 458.2 934.522 459.133 934.6 459.289 934.444 460.922 934.6 462.556 934.989 464.033 935.533 465.2 935.533 465.433 933.356 466.678 931.489 467.767 927.444 470.1 926.122 470.878 925.889 470.878 925.189 469.4 924.8 468.078 924.644 467.144 924.567 465.822 924.722 464.344 924.956 463.256 925.5 461.778 926.044 460.767 926.744 459.756 927.678 458.744 928.533 457.967 929.933 457.111Z"
                                    />
                                    <path
                                        d="M950.7 465.433 951.089 465.511 952.956 466.6 959.022 470.1 960.344 470.878 960.189 471.267 959.644 472.044 958.944 472.9 958.4 473.444 957.233 474.3 955.989 475 954.511 475.544 953.344 475.778 952.878 475.856 950.544 475.856 949.378 475.622 948.133 475.233 946.811 474.611 945.878 473.989 945.878 469.322 946.578 469.011 947.9 468.311 948.833 467.611 949.922 466.522Z"
                                    />
                                    <path
                                        d="M933.667 446.067 935.378 446.067 936.856 446.3 938.489 446.844 939.811 447.544 940.433 447.933 940.433 452.678 939.033 453.3 937.944 454 937.089 454.7 936.544 455.244 935.611 456.567 935.144 456.411 933.822 455.633 927.756 452.133 926.044 451.122 925.967 450.967 926.511 450.111 927.367 449.1 927.989 448.478 929.156 447.622 930.244 447 931.722 446.456 932.578 446.222Z"
                                    />
                                    <path
                                        d="M937.167 467.533 937.478 467.611 938.644 468.467 939.967 469.089 941.211 469.478 942.144 469.633 943.078 469.711 943.156 469.789 943.156 480.833 941.989 480.833 940.433 480.522 939.111 480.056 937.711 479.278 936.7 478.5 935.922 477.8 935.144 476.867 934.367 475.622 933.744 474.222 933.356 472.744 933.2 471.344 933.2 470.489 933.278 469.789 935.222 468.7 936.544 467.922Z"
                                    />
                                    <path
                                        d="M960.267 451.044 960.422 451.044 960.967 452.133 961.433 453.533 961.667 454.778 961.744 456.333 961.589 457.733 961.278 459.056 960.656 460.533 960.111 461.467 959.489 462.322 958.633 463.256 957.467 464.189 956.456 464.811 955.756 465.122 953.811 464.033 951.944 462.944 951.711 462.789 951.867 461.389 951.867 460.222 952.567 459.522 953.578 458.2 954.278 457.033 954.978 455.556 955.522 453.844 956.222 453.378 958.167 452.289 960.033 451.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M18.5001 542C18.5001 536.753 22.7533 532.5 28.0001 532.5 33.2468 532.5 37.5001 536.753 37.5001 542 37.5001 547.247 33.2468 551.5 28.0001 551.5 22.7533 551.5 18.5001 547.247 18.5001 542Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M18.5001 564C18.5001 558.753 22.7533 554.5 28.0001 554.5 33.2468 554.5 37.5001 558.753 37.5001 564 37.5001 569.247 33.2468 573.5 28.0001 573.5 22.7533 573.5 18.5001 569.247 18.5001 564Z"
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
                            transform="translate(42.7733 544)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(42.6906 566)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M18 520.5C18 515.253 22.2533 511 27.5 511 32.7467 511 37 515.253 37 520.5 37 525.747 32.7467 530 27.5 530 22.2533 530 18 525.747 18 520.5Z"
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
                            transform="translate(42.6906 522)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(42.9555 499)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(42.6907 476)"
                        >
                            прием
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 22 464)">
                            <g clip-path="url(#clip40)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(2198.08 2198.08)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 22 486)">
                            <g clip-path="url(#clip41)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(2198.08 2198.08)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip42)"
                            transform="matrix(0.000104987 0 0 0.000104987 1054 36)"
                        >
                            <g clip-path="url(#clip44)" transform="matrix(1 0 0 1.00168 0 -0.03125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img43"
                                    transform="scale(7632.21 7632.21)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1076.17 32.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1175.5 86.1712)"
                        />
                        <path
                            d="M1172.55 98.0309 1164.86 89.6543 1165.35 89.2035 1173.04 97.58ZM1165.11 89.4289 1164.95 93.1967 1161.5 85.5001 1168.87 89.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1182.95 98.8892 1173.5 98.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1080.17 18.1573 1174.54 18.1573 1174.54 30.9573 1080.17 30.9573Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1080.17 17.4906 1080.17 31.6239"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.54 17.4906 1174.54 31.6239"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1079.5 18.1573 1175.2 18.1573"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1079.5 30.9573 1175.2 30.9573"
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
                                transform="translate(1083.95 28)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1094.45 28)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1075.5 32.5001 1094.69 32.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1182.66 85.2409 1270.32 85.2409 1270.32 98.0409 1182.66 98.0409Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1182.66 84.5743 1182.66 98.7076"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1270.32 84.5743 1270.32 98.7076"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1181.99 85.2409 1270.99 85.2409"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1181.99 98.0409 1270.99 98.0409"
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
                                transform="translate(1186.44 95)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1196.94 95)"
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
                            transform="matrix(1 0 0 -1 1072.5 40.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1182.99 58.5001)"
                        />
                        <path
                            d="M1182.5 58.5001 1201.69 58.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1186.86 45.0574 1260.06 45.0574 1260.06 57.8574 1186.86 57.8574Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1186.86 44.3908 1186.86 58.5241"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1260.06 44.3908 1260.06 58.5241"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1186.19 45.0574 1260.72 45.0574"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1186.19 57.8574 1260.72 57.8574"
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
                                transform="translate(1190.64 55)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1158.5 86.5001 1181.21 86.5002"
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

        // Add a thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        fetch('/samarqand/server2b', { signal: controller.signal })
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
                    if(item.id === 323) {
                        const value = document.getElementById("g323");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 283) {
                        const value = document.getElementById("g283");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 254) {
                        const value = document.getElementById("g254");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(254);
                            trueAnimation(2541);
                            trueAnimation(2542);
                        } else {
                            falseAnimation(254);
                            falseAnimation(2541);
                            falseAnimation(2542);
                        }
                    } else if(item.id === 253) {
                        const value = document.getElementById("g253");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(254);
                            trueAnimation(2541);
                            trueAnimation(2542);
                        } else {
                            falseAnimation(254);
                            falseAnimation(2541);
                            falseAnimation(2542);
                        }
                    } else if(item.id === 29) {
                        const value = document.getElementById("g29");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(29);
                        } else {
                            falseAnimation(29);
                        }
                    } else if(item.id === 28) {
                        const value = document.getElementById("g28");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(29);
                        } else {
                            falseAnimation(29);
                        }
                    } else if(item.id === 94) {
                        const value = document.getElementById("g94");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(94);
                        } else {
                            falseAnimation(94);
                        }
                    } else if(item.id === 93) {
                        const value = document.getElementById("g93");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(94);
                        } else {
                            falseAnimation(94);
                        }
                    } else if(item.id === 14) {
                        const value = document.getElementById("g14");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(14);
                        } else {
                            falseAnimation(14);
                        }
                    } else if(item.id === 13) {
                        const value = document.getElementById("g13");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(14);
                        } else {
                            falseAnimation(14);
                        }
                    } else if(item.id === 614) {
                        const value = document.getElementById("g614");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(614);
                            trueAnimation(6141);
                            trueAnimation(6142);
                        } else {
                            falseAnimation(614);
                            falseAnimation(6141);
                            falseAnimation(6142);
                        }
                    } else if(item.id === 613) {
                        const value = document.getElementById("g613");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(614);
                            trueAnimation(6141);
                            trueAnimation(6142);
                        } else {
                            falseAnimation(614);
                            falseAnimation(6141);
                            falseAnimation(6142);
                        }
                    } else if(item.id === 334) {
                        const value = document.getElementById("g334");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(334);
                            trueAnimation(3341);
                            trueAnimation(3342);
                            trueAnimation(3343);
                        } else {
                            falseAnimation(334);
                            falseAnimation(3341);
                            falseAnimation(3342);
                            falseAnimation(3343);
                        }
                    } else if(item.id === 333) {
                        const value = document.getElementById("g333");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(334);
                            trueAnimation(3341);
                            trueAnimation(3342);
                            trueAnimation(3343);
                        } else {
                            falseAnimation(334);
                            falseAnimation(3341);
                            falseAnimation(3342);
                            falseAnimation(3343);
                        }
                    } else if(item.id === 534) {
                        const value = document.getElementById("g534");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(534);
                            trueAnimation(5341);
                            trueAnimation(5342);
                            trueAnimation(5343);
                        } else {
                            falseAnimation(534);
                            falseAnimation(5341);
                            falseAnimation(5342);
                            falseAnimation(5343);
                        }
                    } else if(item.id === 533) {
                        const value = document.getElementById("g533");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(534);
                            trueAnimation(5341);
                            trueAnimation(5342);
                            trueAnimation(5343);
                        } else {
                            falseAnimation(534);
                            falseAnimation(5341);
                            falseAnimation(5342);
                            falseAnimation(5343);
                        }
                    } else if(item.id === 373) {
                        const value = document.getElementById("g373");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(373);
                            trueAnimation(3731);
                            trueAnimation(3732);
                        } else {
                            falseAnimation(373);
                            falseAnimation(3731);
                            falseAnimation(3732);
                        }
                    } else if(item.id === 453) {
                        const value = document.getElementById("g453");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(453);
                            trueAnimation(4531);
                            trueAnimation(4532);
                        } else {
                            falseAnimation(453);
                            falseAnimation(4531);
                            falseAnimation(4532);
                        }
                    } else if(item.id === 77) {
                        const value = document.getElementById("g77");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(77);
                            trueAnimation(771);
                            trueAnimation(772);
                        } else {
                            falseAnimation(77);
                            falseAnimation(771);
                            falseAnimation(772);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 293) {
                        const value = document.getElementById("g293");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a293");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 9.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(293);
                            trueAnimation(2931);
                        } else {
                            falseAnimation(293);
                            falseAnimation(2931);
                        }
                    } else if(item.id === 295) {
                        const value = document.getElementById("g295");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 296) {
                        const value = document.getElementById("k293");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 297) {
                        const value = document.getElementById("n293");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 298) {
                        const value = document.getElementById("w293");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 493) {
                        const value = document.getElementById("g493");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a493");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 9.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(493);
                            trueAnimation(4931);
                        } else {
                            falseAnimation(493);
                            falseAnimation(4931);
                        }
                    } else if(item.id === 495) {
                        const value = document.getElementById("g495");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 496) {
                        const value = document.getElementById("k493");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 497) {
                        const value = document.getElementById("n493");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 498) {
                        const value = document.getElementById("w493");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 413) {
                        const value = document.getElementById("g413");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a413");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 7.6 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(413);
                            trueAnimation(4131);
                        } else {
                            falseAnimation(413);
                            falseAnimation(4131);
                        }
                    } else if(item.id === 415) {
                        const value = document.getElementById("g415");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 416) {
                        const value = document.getElementById("k413");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 417) {
                        const value = document.getElementById("n413");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 418) {
                        const value = document.getElementById("w413");
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
                falseAnimation(0);
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