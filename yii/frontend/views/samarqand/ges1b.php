<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Талигулян-1 (ГЭС-1Б)';
$energy = new Energy();
$id = 52; $idTwo = 53;
$dashboard = new Dashboard();
$power = new Day();

$power->getHour([$id, $idTwo]);
//$power->getDay([$id, $idTwo]);

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($idTwo, 3);
$urlAggregate4 = $energy->getInformation($idTwo, 4);
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
                            <rect x="-4.65661e-10" y="0" width="47625" height="114300" />
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
                            <rect x="-4.65661e-10" y="-2.32831e-10" width="57150" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img4"
                        ></image>
                        <clipPath id="clip5">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip6">
                            <rect x="9.31323e-10" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip8">
                            <rect x="9.31323e-10" y="0" width="57150" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
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
                            <rect x="0" y="-4.65661e-10" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip31">
                            <rect x="0" y="0" width="85725" height="200025" />
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
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7V0JVFRXmk73TE93umemz/TMnD7T0zM9p8+ZnnO6J53uGJdEE2NiUKPEqEjUGMUlxiUmre0SEzfcAQUX9oKCojb2fXFDkE0odhVwQaEKF9yFAjSZ6Df/f+sVFsVDUMCF1M/5znvvvvduvffux7/c+9/3XniS4uzs/O6qFSsUb7755ku8vWTRop2RGv1FvVZ3yR5r1qypBvADcaJDHPI4snnzZlVDQwOGDBkysaSk5EdbtmwJb21pgT1aCDqdrslBOIf0SpRKZT0T7rVhw3bpdToQ4QS55OAgnEN6JdOmTftVRkbG/QtEuKGvDva+ceMG4mJjZcnGIMLdkk51yEAUw/mm/ykytnoWN5hHsbkThaRhTKb7L55oaHm5tL51SqWx7Y3jxtZXj58z//J4owWl52/+pqShaVhxfdP4sot33q24fP9n4lwS1lAl527+vMzUPHL+gqVLGxsvQxBu8GDv69evI1YQrrUT2RhardZBuIEoJaaWFcX15gtFxpb7JQ1tKCaUGFu+KzGaBYrrW+6VmNpgaLhj2UdL3haQtosF7goYjC33DKa2SwZTa02JqbXJUN9yv9h0F74h2vvmFnMHwsXFxcmSjeHQcANUSkx3VBbC9B+YlGFqPRGJCXcBg3tAOIeGG6BCWogIx9pJnix9gfwz1xEZbTGfFy9exCuvvJIufLjvuYZbtmzZi06jR6+m1e9PcNTfhGPTq0nLw6lTNUQki7928OBBODTcCy9Mnjz5N5s3uiMqKupFqWjgy5PQcB6+4YiNjiTECOzYvr1bwiUkJFySLnHAyqhRowaplGFYtWrVr6WigS/9T7g2bPTYh/jEZEIK4pOS4em1SxBOq9YgLTUVTU1NnQhXUVFRn5qaOiglJeXlpKSkP1qRlpb2Epfv3r178PTp0/9Fuo3nUkaMGDE6J/soXCdNelkqGvjSv4TjqJfMan0LiuvMFtSboU45ilClCmu+Xg+tLgrh4eE4dOgQzGZzO+Fu376Nq1ev4sqVKx3AZQyj0YixY8culm7juZRFny2aWVdXByLeSKlo4MuTMKlyKGlopWUb0g1n4ROoQhSZ2vCwcOTk5HTQdF2ByTlhwoRl0m08l+Ls7LyItfugQYM+kIoGvjwdwkmaz7o0tSI+qxy+QeFISExAGPk1xcXFskSzxaRJk1ZIt/Fcipub29pvv/kWI0eO/EQqGvjytDScHJiAmtQcBIREICUphYinxInjx2XJxphLDSbdxnMpK5at8L537x6mfzj9S6lo4MuzRDgB012UGFuhiMqAUqVFWkqa8PFOnTrViXAL5s3zk27juZStm7eG3b9/H59/9pmXVDTw5ZkjnA0Kz5vhq4qHVh8notkIVQTOnz9PZGuFubUFXp6e8Nrhlfee03tjpdt5qsJRs4uLy7/3FES4/RwArV6xUs/bGzZs+FupqoEr/U04MfZqV9YT2J6Xd+Y69ih0iE1IQnJyMtTqCDFiEanTify5qpMnsWvXrsIxY8aMf5opTZs2bTp95MgRZGVl9Qx87BHLMjo6GsOHD39LqmrgSn8RTgQEJl63DPJ3PuZBmfz+zjhy8gJ8glRIzziIxPg4bN+2rUNXSk1NDby9vUvGjRv3AWmLH0q3+MQkUqM9rYqgiDsykhDVLYKDg+FJWnrfvn1i9MVBuMeE0E6mNmzx2ocwTRSUmhiEaGIRrI6HvyoGe8MY8ThUYZRI2TOUSMfuLz4Lb98QlJaUIjgoGFevXG0nHePMmTPY7eNT8f748S5PknhMuJiYGFKyFmH/7GFy4cIFFBYW4vSp08hIS8dIB+EeH0dPXsbadevJ7OkRqdcjSh+JaPqvjouJRXxcHGKpYQKCFdit0CL7xAU6xzbVqTuQRjS2YV9YLPLyChAeqsSpms5BRW1tLWuPE++///40Mll/I91yv0mkVnuah+6YaKWlpXTfluG8GBlwuVajET7p6dNEuHQH4XqF8MRs1NfVdyIBw8xoNiMjNQ1qVTiUYWrsDdEjp+aKbF3y4Jy8O9CkHEVCUhpSkpLBw0Ryv8eNunfv3mpnZ+eZ/emYWwl38+ZNJCYmdtBwvC4HFoeG6wPsDdGhxca/6go8hBVDDjNrwgi1DnuVUcg7fU2YZFs/rysY6NrTj9UgKDQCBfkFiI6J7uDX2YKHw3x9fc9MnDjRbcGCBZas5j4UK+HYH7t165YgU0/EoeF6CyKLIowIJ9Po9rDO0rp25QpFn2oyt/HQaKPgGx6DgrM35eu3h+kuck9dwa59IaisrISCnHFODrD/LSsaTCYEBQSec3VxmT916tS/kx5Fr8VKuAMHDqC5uVmiU/fi0HC9RV2zII1cY3cH1kJhYWE4kJ4BlUYPf3Uijp2/LVLcu4tmDcYW+ARrUELBREiIQvhwcr9hxUVy2oMDg+qnTpmycOnSpT+WHsljy2MTzqHheoeEnOM4dqyQGlV+gkxPUFVVRcRT4ujRowiPIOJpklFIRJb7vQew+HWKmP04cChT5Nvl5+fL1m+Ly5cuQaFQmFxcXD6bPXv2T6RH88jyuIQ7Q4Q7mLEf7771js+4MeMWTuhjcJ2M0W+/vfCjjz76R+lyn470JeGsUaZfRCJukw8j17iPiiIiroo0XnFxCRThGgRHpsNQb5Z+s+vINuFIOcJJQ+bn5iI+Ib5Lv84WjY2NUIaGXpoxY8YyIt8jZ+H2RsOVlpSgqLAIhqK+R5F13WDAtGnT/iBd7tORvtZw7MT7h/KEGflGfRwwWQ6RI84jDJUnjiNIqYEy5iCKyYTKXYMA+XVZlQ3Y7ReKEydOIDQ0VDjycvXb4yr5k+Hh4Y0zZ8xYsXjx4r+XHlW3YiVcQUGBiIytUWh3ckby4ZLiE0Rkb+wHxMbE4kjmkYFFONHhS1onhDSRXEP2Fpw7lpCQgMioKNTUnEKAQoWE7Arp9+X9u6JzTdjpF0akOwlFUDCM9fJdNXK4dvUq1BERV2fOmLlm7ty5/yA9si7FSjjOAImia2RNx1rTnnjl5eU4eOAgzp45I/ZZfbjCY8ekI/peOM+Qh90GnIbLrmpEcmq6bAP2Fa5fvwGdToukpGQcOHiY/LsE0mic0Cl/TRw1B6oTkJtXIIaUiosMsvV2BY54iXg3Zs2atZai2p9Lj66TWAnHwkTi/jgOgC6Rj2iVb7/9lmekocXcAr1Oj2+++aY9Si0scBDukREam9llh29fg4eGyNlHXl4evMh05lY30jXI3wsHE/r0fETHJSE7OxspKSmydT4MN4joer3+1ly3uRvIz/sn6RG2iy3hrMLuQHJSEjNQIJ/MrclkpD33kUMBEZt5q4Y75tBwjw5fZRRa6b9XrsH6BdSgiQmJZL72QxmhQ8yhYrqOrrpP7mK/oRb+weFkYo+Tn6YSHc+y9XYB7je8RZqLNOWtefPmbf34g4//WXqUnQh3jwimVe2F+9cLEKvbI7B53QKoQ71x524bcq2Ec2i4x0dwOHf4dh8R9jXYL+JMjcwj2dirioXBaCatxvfVOZItOHMdXr4K0dBBQUFCU8rV2R2YLDExMeZPP/lkB0W1/6q1IxybVY2fK5prP0NL7acw1y5EU+0SpKqnURR/kzRctkPD9QZFdU0USUZSYzx+/1tvcPXqNQSTiS0qLBTZJNnHOSlA7lpJAxpbsZei6dLScjGIzoSVq7M7sMZrunWbkxJaQxSKOx013D3MnDISG//6Gtpq56H13Dz4b3sbLhMGodnc7NBwvQFHp4k5J2AwdD/5pV9B5pwHzrkbJUIfA216gTQu2/maDXTNqvjDIr/u8KFD2J+xX77OHoCJx68f66Dh6E/r50IabiFpOCIcwUyaLlU9lUw5abgchw/XC9zF3vA4YSrkGuRJo6KiAhHko+Xl5WNPSCQM9Z1HKdjU8pBZUk4lQskVqKysEJOzm5o7T8zuDoJwMZ0Jp/P7QGi3OxJ4PUPzAZrId2wn3PdPw3VsiMeFX6hWtjGeFq5fuw4ycygrLcVuvxAcKqsX1yk3Jptb1YidvkFi/DU4MAiXL1+WrbMryBHuHkHvN7GdbFbCpWkmopkJ9whRallZGfuLHCWLcx5VnkHC2Ws53paBcMTtj+NuhzaEUZQo1xhPG0lJSWRiDyAyJgERSdl21y8R0EQ+aL0Z3gEqVFVVQ6VS4eTJk7L1yUFewwE6f3vCzReEa7p96wHhutFwXP8md3cy+RkICgwUnd89HcWwyjNDuHXbd8d5+qrOefiHn/fyU9ftDNDWe/lrjF4B2gbPIO0FrwDdpZ0K/SVvhf6KjyLyinew/rp3cOR1b0XUzV3Bkbd2KaKbGDv91c2rV3/ZrNNozZF6fXOkTm+OiYwxk1/TkhCf0EYP6Q75VneTk5O/TUlJ+b+0tLTvCPfS6T87gx4k98pzHtnhw4fFg+G+Mh645wfF/Ww8XMQagFOyiw0GkVFbTv/1JqNRNLY9AezBaUs83bCIzvUO1ogRCMs/ih35aDtYl4Kso7lIJxJkZmbK1mcPWcIRKQI9nXG+yI0wC+cIvK4JeJ8Ix1Fq9xruu+++E/d/YP9+1J6tFQgMCMDNGzceiXTPDOH6SuiefmAPnk/Aqd2cZRsUFPQjBq3/3Z49e35My5/wAPmECRN+yhg0aNBP33333Z9xNsOyZct+sWbNml+uXLnyV59//vl/Llq06Lfz58//He37PZ3z0qTx418eO3bsn8c7OQ1ymTx5EWkHam95ItiCRwxCghWoJP9uX4AS+w1n27tOLISzaDouiz5YBF1UbHuqOA/Gy9VpRTvhbOY0cJSam52Jre5rkXU4XWDH1g04fCBdjDjkEglu3bTRcDKE4y6bwIBAkc3MBGUcpX9Gf1+/7zfhnqaMGjXqD7t37z7JLzmUI4MtRM9/coqIYjk1PTTuoHAHOk/maSOfrw57A0Jx7tw5BPFknWsdJ+vYg6PU6Kho3GlrI9xBg6kBWzZtFsELaX7otFpEkKlmshTk5yOTtDn7iicqj4M1PfubnE7F2twKnhbZXp5fIJYMTw+PDsday/kYObApfiYG7weKLFiw4KekDUM5M0SODPbg48LDwlBRVgFvfxWOtWcX2wYUbSiovUXBhJKCifNQKpXC/MnVx/DeuRM+3t74Yunn+OKzz/EXsVxq2V7KS5t1Kp/+4TQs/nQh1n71tcj/06jVwndkrcbzbgUuXMQlQmJ8Ak5V10CjisAFIjKXtR9D4HOWL1+OQH9/QgCCbMDbX65chSwH4fpeyOR+RFqhuSf5b8LEhoSI95f4BauQkl9tQ7YHoMAKfuExKCouQWJSIpk1+Tc8cTYLD5X1FBwENJAPGhkZCf5+xTHSVLt9fLBpw0a4b9gA94203OiOjbRcv3YdNlLZurVraR/vdxf7LMdsxOpVq4TP25U4TGo/yjvvvPM7Ly+v8mvXrskSowPMLUhNSaGA5QD27z+A4MhUi4ntRLy7UCdnkYnLEAmN/Mr/npD6YWCzfom0E8+6txJu7aYVmPGJM2YseA/TCR8xFr6HRV9NwUyxnIzZi9/DJ6umUPkEOm4cHTMBH7qNQWJyvESvzuIgXD8Lp4ovWbLEv7y8/L5cY9vDamJPVlVjl1848k9fl4hmE1DQMq2gBoEhEThXew6KEAV64jd2BY7KmXA8a81KOPd9SzBn++tw8xiC2TuGEYZi7u5h2JHzPub5DIHnUWcs8H8d29ImYb7PG5jjMRTzPN+C25bh0MYpJXp1FgfhnpC4TJo0NT4u7jZrMrlGtwV3FIeSia2qOokgpRqJ7cmdVlhIl1d9lfy6EJiMDSI9irN75errDqzhLpMvFmslHEWp7r6LMZcIN8djMOYQ4ebsGIJ5RDhPQbjBgnCf+r2Ore2EG4L5niPhtnU4dLEOwj0TQib2t9u2bSu+0tgo2/D2SE1NxcEDB3A4M1vMGuNZ/pw6b806Ect6M/YEqXHiZJXoCmGyyNX1MPBrZlm7sQ/G7yPxo+j1i03TiXDDBZGYcG6k4SyEc8ZcJhwtF/qNwBZBuBGkCUkDOgj37An3/y1csMC7uLi4RyaWRxk4W/f0mVPwpig1p/qyjaaTiGe6g5DodBw6nIW83FwkJSQJn1CuPjk0U5DReOmy6CrhCJS7Sdbu+VSYVCacm5VwPkPhJQg3BF5HJwgNt5kIN89nuES4tzB7y+tEuFCJXp3FQbinJBMnTnTW6/XXe+Lws3/Gk29qqqqgjNAjWja58y7ij5RCpY0ScxTCQpVi9ECuvq5gGzSs8VwA15VD4bpqEKasfgWuq4fgo/WDsVrjhGnug7BKNwbTNg3CCgUFFV8PhQsdM33165i6fDC00WESvTqLg3BPUZycnP7D3d09l+cayBHAHjzExUNL/OIcv7AYYU4tY8oPyHeksgE+/goxuZqTOk0mk2xdcrAl3Pm6WlRUlAuUV5aKrJe09FTM3jYUf40YhWWatzF7zbsoryiTjqtAJR9L2zyHoitxEO4pCw+3zZ8/fzv5XvfkSGAPHtDnjt+683UiufPI8QvCpNqSznC+CV5+ShHB6nR6MddUri57cGcv+4yaCDUqyok8BOuSkZqWglnuQ/GX0DexnOC20gnlZURGm2PKy4mAtOwKHIFzQOQg3FOWsWPHOqnV6sbuxkoZ7Sa2uhpafTR06fmdUp2YhP7qBOQfKxIahYes5OqyBY8S8EhDNaGGiG2LI4cOY93XX+OrjcvhNOclTJg1DDu9t8F9/UYcy89HDQUtHc/hbXtQOR2XlJDoINyzIGPGjPm3DevXH+FPa8oRwh7WDBdDcSl8QiJRVNcsEjktpLPModCnFyA2LgnV1VVQqyLEyIJcXd1h3969WPrFp3Bd8We4bRuGOWRaJy98Dbt2eSKEyC93Tlfgmf0Owj0jQib2h25ubhvy8vK+k2sse7DWUFKAcIF8NR+/EBwuq7PRdKz17iLDcBb+QTwv9aLw6/gdIvX19T0CT9hmf5AnVG8PXAGP3PHwzHsPHnnjsCNzIvRxKui0NvmHFARlZR1FSLiWApxIqDWRuGSXRMqEc3V1/V/plh3yLMj48ePfCg8Pv9jc1L2JZSddqQwT7xaOikuEKilLaLcHOXZt4tOdO/eF4ELDRZG1kZebJyG3S3DaUlJiElJTkrFl82Ys3zILnvljiXDj4MWkOzIB7tu+xuZNm8hsZ6GyvAIBwWFIzqsSv804dv4WduwLJXP9QGs7CPeMCk/5++qrrzJY09gSrCuwed2fniaSPHcFaVB0/rYgnLWj2GBqgb8qHgHKaEIUAm0QEEYQ65ESorBzTxB/gwJbtrtj+/ZNcP3kHXwWNKIdi/2GY9YcV2ylffxi7ekffYyUYzXtv2clu6HOjDDVg7R/B+GeYWETO2vmzNVZWVnf2pKrK9RU1wgTe/niJewJCEVG0Zn2hmciPPDxLBCasAOs82fvQnegCHv27saMVcOxOswJH61/DYv3jMQnnsMxbd0QrFA6YSr5dF/rxsFp2iAEK1Xg11nY1i8IR3UFinkmlmmbDsI9B+Lk5PS6QqEwyn1i0x48I587fqspik1KSYMyVkru7ECEh4PNYeT+QiiUAVgZPh5zdg7FF6FvY2ngcCzYMxwrtaMxa9urWBM3Fi4b/owlW8dAExktQziu6y5CbN5E6iDccyJkYn+xatWqJM78tSVYV+A8N45kq2tOY5d/GApOX4OB3+LZDdgUFxK0aXkIDQmG88I/wW3T6/jwy0GYuupVuG19De8v+hMW7n4T4+b+AUt938ZI5z9Co48hs00akv03JhqBNWrOyUsUKSe0X5eDcM+RAPjBxx9//JfMzMy7tuTqCvxtMO6zu9J4BcnJaUhOsiCJQdsd0F6eKhAaEgY/P1/s9NiBtRs3YYvHLmz18MZmwrYdPrTtTds7abkTHl4+VL4XpcY2lFpJR8tjZ29g++5A8VYA6zU5CPccyjvvvDM4ICDgXE/61djE8nyG6KgoMXzFiOoC1v0xUbSk47k7hD96ok7NEQRiMpWSibQQyrJUp5ImVOkRoYlBGCFcG02IgUoXI7TeNbs5GA7CPafC74hbsWJFFH/xxrZB+xrnamsRQebVOvfXHn6aZDFdUO5cOfA7Vxwdv8+xUOMtzMjIuCPXuH2Bc7VnhRaTIxuDX7R980bPXq3B0xgLCw1IOFp5odjYWldiaj1Pfl9KqenO1rL6lvUlJkbrluL6lmyKmJPoGM8SU/OGMmPzomJj02zat6SkvmVDibE1xGBsO1ZS16zi7fIG88xSU/ObJcbmNyouNo+ovNj2RqnR/KHB1Lqdjs0qNpqXl15q+w27JNJjc0hvZNSoUS/v27fvFHcCyzV0b1BLhNM8hHARKTkiIu54HneByOMYES45v0rqfuHggrti5KJoqYwzYsh02+9nc96+Lratpp7LeP2u6JJpP5eWRabWbw0NLTulx+aQ3gi/eHr58uWxPKjfsfF7ByYcazgrQWwhIlFTK3b5KXE4MwuXLzeK5IKb1693idycXKQQ4ez7BPsHHd0ACzFbI6RH5pC+EFcX1zkpKSnEFXkCPSoaL19GoD5d0hxysGiiA4az4jj+mPE+VUKX2BMej7zTPfy6T5/CkjvoIFw/yNi33/79nl3eJx726aWeotVshndghGgs+YZkWPfZLh8G23OfFByE61dZ5uLy4tKlS0OOV1b2aP5E12hFamo60gpPCb9IvjGfBzgI90Rk6pQp0xPiE5p68lXFhyFEqRafk5Lz5fofclqyK3R1nmXbQbgnIKNHj/5vDw+PsqtXH/4inO5w6FCmmJYYFn+YNN5ppBedIZxFRh+A60knP5DrTSmoeYB8m3Xrtn2ZLaz77Y5LlbbjMksTpMfikP4U/lIhRbK+ZWVlj21i+aPG/DkCY70R2dk5ItnySB8iKyubltmYPHmqZtiIt4YPG/Fun2Pk6LHDpEfikCchH3zwweTY2NibvX0nSX9iyZIl26XLdchAkDFjxvzXtm3bivgbXHIN3nfoKak7HvfZ4sU7pEt1yEAR/vw5vwXAUGToZRTb9yDT7yDcQBVnZ+cJkT18C8CTgoNwA1xGjhz5643r1iUogoPzrQgJVtCSEZwfLEGheFDWPRRSHQ/KrHXYl1tAZVw/wdXV9VO+rvT09B8zxEX2mbzwwv8Dqz2REX1DUHMAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img37"
                        ></image>
                        <clipPath id="clip38">
                            <rect x="0" y="0" width="1173079" height="571500" />
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
                            d="M1.5-2.4546e-06 1.5001 64.1572-1.49989 64.1572-1.5 2.4546e-06ZM-4.5 7.36381e-06C-4.5-2.48527-2.48529-4.5-7.36381e-06-4.5 2.48527-4.5 4.5-2.48529 4.5-7.36381e-06 4.5 2.48527 2.48529 4.5 7.36381e-06 4.5-2.48527 4.5-4.5 2.48529-4.5 7.36381e-06Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 336.5 236.657)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(300.638 85)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(308.638 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(312.138 85)"
                        >
                            ГЭС1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(339.138 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(342.638 85)"
                        >
                            ГЭС3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(563.603 320)"
                        >
                            ТМГ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(549.936 333)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(574.269 333)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(547.936 346)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(566.603 346)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(544.103 359)"
                        >
                            ТМГ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(568.103 359)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(571.603 359)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(673.45 146)"
                        >
                            Фидер
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(703.117 146)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(706.617 146)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(711.95 146)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(322.727 319)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(329.56 319)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(333.06 319)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(322.727 332)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(330.727 332)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(322.727 345)"
                        >
                            1,5МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(322.727 358)"
                        >
                            ATJ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(183.904 320)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(190.737 320)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(194.237 320)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(183.904 333)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(191.904 333)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(183.904 346)"
                        >
                            1,5 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(183.904 359)"
                        >
                            ATJ
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
                            transform="translate(534.921 23)"
                        >
                            Талигулян
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(626.654 23)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(632.821 23)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(646.821 23)"
                        >
                            (ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(690.987 23)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(697.154 23)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(706.487 23)"
                        >
                            Б)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(52.1586 250)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(57.492 250)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(60.992 250)"
                        >
                            СШ 6 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(438.204 330)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(459.538 330)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(463.038 330)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(438.204 343)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(462.538 343)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(780.11 447)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(786.944 447)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(790.444 447)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(780.11 460)"
                        >
                            0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(796.11 460)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(780.11 473)"
                        >
                            0,22 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(780.11 486)"
                        >
                            SFWE
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(810.444 486)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(813.944 486)"
                        >
                            W250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(840.61 486)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(844.11 486)"
                        >
                            12/850
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1151.32 250)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1156.65 250)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1159.99 250)"
                        >
                            СШ 6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1185.15 250)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(566.033 444)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(572.866 444)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(576.366 444)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(566.033 457)"
                        >
                            0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(582.033 457)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(566.033 470)"
                        >
                            0,22 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(566.033 483)"
                        >
                            SFWE
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(596.366 483)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(599.866 483)"
                        >
                            W250
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(626.533 483)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(630.033 483)"
                        >
                            12/850
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(350.354 198)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(357.521 198)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(361.021 198)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(369.021 198)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(372.521 198)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(377.854 198)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(381.354 198)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(711.418 192)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(718.585 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(722.085 192)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(730.585 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(734.085 192)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(739.418 192)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(354.715 129)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(361.882 129)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(365.382 129)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(354.715 142)"
                        >
                            6/35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(376.382 142)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(354.715 155)"
                        >
                            3750 кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(354.715 168)"
                        >
                            ТМ 160/6,56
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(882.357 146)"
                        >
                            Фидер
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(912.023 146)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(915.523 146)"
                        >
                            60
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(925.478 193)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(932.645 193)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(936.145 193)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(944.645 193)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(948.145 193)"
                        >
                            60
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(996.732 150)"
                        >
                            Фидер
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1026.4 150)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1029.9 150)"
                        >
                            88
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1034.78 192)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1041.94 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1045.44 192)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1053.94 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1057.44 192)"
                        >
                            88
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1091.27 148)"
                        >
                            Фидер
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1120.94 148)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1124.44 148)"
                        >
                            Иртишар
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1146.6 191)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1153.76 191)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1157.26 191)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1165.76 191)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1169.26 191)"
                        >
                            И
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(773.695 148)"
                        >
                            Фидер
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(803.362 148)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(806.862 148)"
                        >
                            47
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(812.272 192)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(819.439 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(822.939 192)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(831.439 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(834.939 192)"
                        >
                            47
                        </text>
                        <path
                            d="M1197.35 236.3 45.5002 235.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <rect id="c780"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 685.5 198.5)"
                        />
                        <path
                            d="M694.871 236.685 694 198.534 697 198.466 697.871 236.616ZM700.87 236.548C700.926 239.032 698.958 241.093 696.474 241.149 693.989 241.206 691.929 239.238 691.872 236.753 691.815 234.269 693.784 232.208 696.268 232.152 698.753 232.095 700.813 234.063 700.87 236.548Z"
                            fill="#006600"
                        />
                        <path
                            d="M0 0 0.000104987 15.84"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 695.5 180.34)"
                        />
                        <rect id="c106"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 786.5 197.5)"
                        />
                        <path
                            d="M0 0 0.000104987 15.84"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 795.5 178.34)"
                        />
                        <path
                            d="M794.462 236.96 794 197.518 797 197.482 797.462 236.925ZM800.462 236.89C800.491 239.375 798.5 241.413 796.015 241.442 793.53 241.471 791.491 239.48 791.462 236.995 791.433 234.51 793.424 232.472 795.909 232.443 798.394 232.414 800.433 234.405 800.462 236.89Z"
                            fill="#006600"
                        />
                        <path
                            d="M903.371 236.775 903 198.515 906 198.486 906.371 236.746ZM909.371 236.717C909.395 239.202 907.4 241.236 904.914 241.26 902.429 241.284 900.395 239.289 900.371 236.804 900.347 234.319 902.342 232.285 904.827 232.261 907.312 232.237 909.347 234.232 909.371 236.717Z"
                            fill="#006600"
                        />
                        <rect id="c102"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 895.5 198.5)"
                        />
                        <path
                            d="M0 0 0.000104987 15.84"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 904.5 179.34)"
                        />
                        <path
                            d="M1017.37 236.107 1017 196.514 1020 196.486 1020.37 236.079ZM1023.37 236.051C1023.39 238.536 1021.4 240.57 1018.91 240.593 1016.43 240.617 1014.39 238.621 1014.37 236.136 1014.35 233.65 1016.34 231.617 1018.83 231.594 1021.31 231.57 1023.35 233.566 1023.37 236.051Z"
                            fill="#006600"
                        />
                        <rect id="c110"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1009.5 196.5)"
                        />
                        <path
                            d="M0 0 0.000104987 15.84"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1019.5 178.34)"
                        />
                        <path
                            d="M697 158.5 697 166.291 694 166.291 694 158.5ZM695.5 158.5 691 161.5 695.5 152.5 700 161.5Z"
                            fill="#006600"
                        />
                        <path
                            d="M797 159.5 797 167.291 794 167.291 794 159.5ZM795.5 159.5 791 162.5 795.5 153.5 800 162.5Z"
                            fill="#006600"
                        />
                        <path
                            d="M906 160.5 906 168.291 903 168.291 903 160.5ZM904.5 160.5 900 163.5 904.5 154.5 909 163.5Z"
                            fill="#006600"
                        />
                        <path
                            d="M1021 160.5 1021 168.291 1018 168.291 1018 160.5ZM1019.5 160.5 1015 163.5 1019.5 154.5 1024 163.5Z"
                            fill="#006600"
                        />
                        <rect id="c114"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1119.5 197.5)"
                        />
                        <path
                            d="M1128.62 236.763 1128 197.524 1131 197.476 1131.62 236.716ZM1134.62 236.668C1134.66 239.153 1132.68 241.2 1130.2 241.239 1127.71 241.279 1125.66 239.296 1125.62 236.811 1125.59 234.326 1127.57 232.28 1130.05 232.24 1132.54 232.201 1134.58 234.183 1134.62 236.668Z"
                            fill="#006600"
                        />
                        <path
                            d="M1127.12 178.185 1127.03 161.508 1130.03 161.492 1130.12 178.169ZM1128.53 161.5 1124.05 164.525 1128.5 155.5 1133.05 164.475Z"
                            fill="#006600"
                        />
                        <path
                            d="M603.128 311.721 603 237.503 606 237.497 606.128 311.716ZM600 237.508C599.996 235.023 602.007 233.004 604.492 233 606.978 232.996 608.996 235.007 609 237.492 609.004 239.978 606.993 241.996 604.508 242 602.023 242.004 600.004 239.993 600 237.508Z"
                            fill="#006600"
                        />
                        <path
                            d="M1.5-2.08623e-06 1.5001 75.4857-1.49989 75.4857-1.5 2.08623e-06ZM4.5001 75.4857C4.50011 77.9709 2.48539 79.9857 0.000111246 79.9857-2.48517 79.9857-4.49989 77.971-4.4999 75.4857-4.4999 73.0004-2.48518 70.9857 9.87282e-05 70.9857 2.48538 70.9857 4.5001 73.0004 4.5001 75.4857Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 155.5 312.986)"
                        />
                        <path id="c7432"
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 320.5 172.5)"
                        />
                        <path id="c7431"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 320.5 148.5)"
                        />
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 320.5 148.5)"
                        />
                        <rect id="c743"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 326.5 205.5)"
                        />
                        <path
                            d="M1.5-7.01521e-06 1.50008 16.4484-1.49992 16.4484-1.5 7.01521e-06ZM7.6926e-05 16.4484 4.50006 13.4484 0.000104987 22.4484-4.49994 13.4484Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 335.5 118.948)"
                        />
                        <path id="c7582"
                            d="M0 15.5C-1.97336e-15 6.93959 6.93959-1.97336e-15 15.5-3.94671e-15 24.0604-7.89343e-15 31 6.93959 31 15.5 31 24.0604 24.0604 31 15.5 31 6.93959 31-9.86678e-15 24.0604 0 15.5Z"
                            stroke="#989898"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 403.5 365.5)"
                        />
                        <path id="c7581"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 403.5 341.5)"
                        />
                        <path id="c8632"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#7030A0"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 590.5 365.5)"
                        />
                        <path id="c8631"
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#4472C4"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 589.5 341.5)"
                        />
                        <path
                            d="M420 364.5 420 404.359 417 404.359 417 364.5ZM418.5 404.359 423 401.359 418.5 410.359 414 401.359Z"
                            fill="#989898"
                        />
                        <path
                            d="M607 365.5 607 385.687 604 385.687 604 365.5ZM610 385.687C610 388.172 607.985 390.187 605.5 390.187 603.015 390.187 601 388.172 601 385.687 601 383.202 603.015 381.187 605.5 381.187 607.985 381.187 610 383.202 610 385.687Z"
                            fill="#767171"
                        />
                        <path
                            d="M0 0 215.749 0.000104987"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 753.249 385.5)"
                        />
                        <path
                            d="M0 0 0.112231 54.1784"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 539.612 383.5)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 642.5 247.5)"
                        />
                        <rect id="c863"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 595.5 281.5)"
                        />
                        <rect id="c713"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 145.5 281.5)"
                        />
                        <path
                            d="M417.03 311.767 417 236.501 420 236.499 420.03 311.765ZM414 236.502C413.999 234.017 416.013 232.001 418.498 232 420.984 231.999 422.999 234.013 423 236.498 423.001 238.984 420.987 240.999 418.502 241 416.017 241.001 414.001 238.987 414 236.502Z"
                            fill="#006600"
                        />
                        <rect id="c758"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 409.5 279.5)"
                        />
                        <path
                            d="M491.637 490.758 584.746 490.758 584.746 503.558 491.637 503.558Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M491.637 503.558 584.746 503.558 584.746 516.358 491.637 516.358Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M491.637 516.358 584.746 516.358 584.746 529.158 491.637 529.158Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M491.637 529.158 584.746 529.158 584.746 541.958 491.637 541.958Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M491.637 541.958 584.746 541.958 584.746 554.758 491.637 554.758Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M491.637 554.758 584.746 554.758 584.746 567.558 491.637 567.558Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M490.971 503.558 585.412 503.558"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M490.971 516.358 585.412 516.358"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M490.971 529.158 585.412 529.158"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M490.971 541.958 585.412 541.958"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M490.971 554.758 585.412 554.758"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M491.637 490.092 491.637 568.225"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M584.746 490.092 584.746 568.225"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M490.971 490.758 585.412 490.758"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M490.971 567.558 585.412 567.558"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g817"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(495.417 501)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g819"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(495.417 514)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a817"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(495.417 526)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k817"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(495.417 539)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n817"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(495.417 552)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w817" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(495.417 565)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M705.127 490.873 798.235 490.873 798.235 503.673 705.127 503.673Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.127 503.673 798.235 503.673 798.235 516.473 705.127 516.473Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.127 516.473 798.235 516.473 798.235 529.273 705.127 529.273Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.127 529.273 798.235 529.273 798.235 542.073 705.127 542.073Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.127 542.073 798.235 542.073 798.235 554.873 705.127 554.873Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.127 554.873 798.235 554.873 798.235 567.673 705.127 567.673Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M704.46 503.673 798.902 503.673"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M704.46 516.473 798.902 516.473"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M704.46 529.273 798.902 529.273"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M704.46 542.073 798.902 542.073"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M704.46 554.873 798.902 554.873"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.127 490.206 705.127 568.339"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M798.235 490.206 798.235 568.339"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M704.46 490.873 798.902 490.873"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M704.46 567.673 798.902 567.673"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g840"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(708.907 501)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g842"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(708.907 514)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a840"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(708.907 526)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k840"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(708.907 539)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n840"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(708.907 552)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w840" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(708.907 565)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M0 0 0.222677 54.8508"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 752.723 384.5)"
                        />
                        <rect id="c840"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 742.5 422.5)"
                        />
                        <rect id="c817"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 529.5 422.5)"
                        />
                        <path
                            d="M107.354 364.856 200.462 364.856 200.462 377.656 107.354 377.656Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M107.354 377.656 200.462 377.656 200.462 390.456 107.354 390.456Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M107.354 390.456 200.462 390.456 200.462 403.256 107.354 403.256Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M107.354 403.256 200.462 403.256 200.462 416.056 107.354 416.056Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M107.354 416.056 200.462 416.056 200.462 428.856 107.354 428.856Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M107.354 428.856 200.462 428.856 200.462 441.656 107.354 441.656Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M106.687 377.656 201.129 377.656"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M106.687 390.456 201.129 390.456"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M106.687 403.256 201.129 403.256"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M106.687 416.056 201.129 416.056"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M106.687 428.856 201.129 428.856"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M107.354 364.19 107.354 442.323"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M200.462 364.19 200.462 442.323"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M106.687 364.856 201.129 364.856"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M106.687 441.656 201.129 441.656"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g713"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(111.133 375)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g714"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(111.133 388)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a713"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(111.133 400)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k713"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(111.133 413)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n713"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(111.133 426)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w713" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(111.133 439)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M1.5-2.10228e-06 1.5001 74.9093-1.49989 74.9093-1.5 2.10228e-06ZM4.5001 74.9093C4.50011 77.3946 2.48539 79.4093 0.000111294 79.4093-2.48517 79.4093-4.49989 77.3946-4.4999 74.9093-4.4999 72.424-2.48518 70.4093 9.868e-05 70.4093 2.48538 70.4093 4.5001 72.424 4.5001 74.9093Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 292.5 311.409)"
                        />
                        <rect id="c728"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 283.5 280.5)"
                        />
                        <path
                            d="M244.25 365.383 337.358 365.383 337.358 378.183 244.25 378.183Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M244.25 378.183 337.358 378.183 337.358 390.983 244.25 390.983Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M244.25 390.983 337.358 390.983 337.358 403.783 244.25 403.783Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M244.25 403.783 337.358 403.783 337.358 416.583 244.25 416.583Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M244.25 416.583 337.358 416.583 337.358 429.383 244.25 429.383Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M244.25 429.383 337.358 429.383 337.358 442.183 244.25 442.183Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M243.583 378.183 338.025 378.183"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M243.583 390.983 338.025 390.983"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M243.583 403.783 338.025 403.783"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M243.583 416.583 338.025 416.583"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M243.583 429.383 338.025 429.383"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M244.25 364.717 244.25 442.85"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M337.358 364.717 337.358 442.85"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M243.583 365.383 338.025 365.383"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M243.583 442.183 338.025 442.183"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g728"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(248.029 375)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g729"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(248.029 388)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a728"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(248.029 401)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k728"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(248.029 414)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n728"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(248.029 427)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w728" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(248.029 439)"
                            >
                                Qвода
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(552.532 415)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(559.699 415)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(563.199 415)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(570.032 415)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(573.532 415)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(766.519 415)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(773.685 415)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(777.185 415)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(784.019 415)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(787.519 415)"
                        >
                            1
                        </text>
                        <rect
                            x="484.5"
                            y="253.5"
                            width="408"
                            height="329"
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
                            transform="translate(810.935 273)"
                        >
                            Микро ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(868.935 273)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(872.435 273)"
                        >
                            1Б
                        </text>
                        <rect
                            x="919.5"
                            y="373.5"
                            width="181"
                            height="210"
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
                            transform="translate(988.831 472)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1012 472)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1015.5 472)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(988.831 485)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(988.831 498)"
                        >
                            100
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1007.5 498)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(988.831 511)"
                        >
                            ТН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1004.33 511)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1007.83 511)"
                        >
                            100/6
                        </text>
                        <path id="c1252"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#989898"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 956.5 515.5)"
                        />
                        <path id="c1251"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 956.5 491.5)"
                        />
                        <path
                            d="M973 514.5 973 545.132 970 545.132 970 514.5ZM971.5 545.132 976 542.132 971.5 551.132 967 542.132Z"
                            fill="#989898"
                        />
                        <path
                            d="M970.03 461.767 970 386.501 973 386.499 973.03 461.765ZM967 386.502C966.999 384.017 969.013 382.001 971.498 382 973.984 381.999 975.999 384.013 976 386.498 976.001 388.984 973.987 390.999 971.502 391 969.017 391.001 967.001 388.987 967 386.502Z"
                            fill="#006600"
                        />
                        <rect id="c125"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#006600"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 961.5 429.5)"
                        />
                        <path
                            d="M0 0 81.6044 0.000104987"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1011.1 385.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1039.86 386)"
                        >
                            Ф.Иртишар
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1051.94 399)"
                        >
                            ТП
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1063.94 399)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1067.27 399)"
                        >
                            875
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(985.297 424)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1008.46 424)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1011.96 424)"
                        >
                            2
                        </text>
                        <path
                            d="M227.695 134.429 311.295 134.429 311.295 148.02 227.695 148.02Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M227.695 148.02 311.295 148.02 311.295 161.611 227.695 161.611Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M227.028 148.02 311.961 148.02"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M227.695 133.762 227.695 162.278"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M311.295 133.762 311.295 162.278"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M227.028 134.429 311.961 134.429"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M227.028 161.611 311.961 161.611"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g743Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(230.362 144)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g743Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(230.362 158)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 303 135)"
                        >
                            <g clip-path="url(#clip2)" transform="matrix(1 0 0 1.02857 0 -0.125)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 303 149)"
                        >
                            <g clip-path="url(#clip5)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M647.557 100.55 731.156 100.55 731.156 114.141 647.557 114.141Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M647.557 114.141 731.156 114.141 731.156 127.732 647.557 127.732Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M646.89 114.141 731.823 114.141"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M647.557 99.883 647.557 128.399"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M731.156 99.883 731.156 128.399"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M646.89 100.55 731.823 100.55"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M646.89 127.732 731.823 127.732"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g780"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(650.224 111)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g779"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(650.224 124)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip6)"
                            transform="matrix(0.000104987 0 0 0.000104987 723 101)"
                        >
                            <g clip-path="url(#clip7)" transform="scale(1 1.02857)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 723 115)"
                        >
                            <g clip-path="url(#clip9)" transform="matrix(1.16667 0 0 1 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M751.505 100.657 835.105 100.657 835.105 114.248 751.505 114.248Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M751.505 114.248 835.105 114.248 835.105 127.839 751.505 127.839Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M750.839 114.248 835.772 114.248"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M751.505 99.9903 751.505 128.506"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M835.105 99.9903 835.105 128.506"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M750.839 100.657 835.772 100.657"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M750.839 127.839 835.772 127.839"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g106"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(754.172 111)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g105"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(754.172 124)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 827 101)"
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
                            transform="matrix(0.000104987 0 0 0.000104987 827 115)"
                        >
                            <g clip-path="url(#clip13)" transform="matrix(1 0 0 1.02857 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M860.951 100.492 944.55 100.492 944.55 114.083 860.951 114.083Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M860.951 114.083 944.55 114.083 944.55 127.675 860.951 127.675Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M860.284 114.083 945.217 114.083"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M860.951 99.8256 860.951 128.341"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M944.55 99.8256 944.55 128.341"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M860.284 100.492 945.217 100.492"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M860.284 127.675 945.217 127.675"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g102"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(863.617 110)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g101"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(863.617 124)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip14)"
                            transform="matrix(0.000104987 0 0 0.000104987 936 101)"
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
                            transform="matrix(0.000104987 0 0 0.000104987 937 115)"
                        >
                            <g clip-path="url(#clip17)" transform="matrix(1 0 0 1.02857 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M971.448 100.452 1055.05 100.452 1055.05 114.043 971.448 114.043Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M971.448 114.043 1055.05 114.043 1055.05 127.634 971.448 127.634Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M970.781 114.043 1055.71 114.043"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M971.448 99.7854 971.448 128.301"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1055.05 99.7854 1055.05 128.301"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M970.781 100.452 1055.71 100.452"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M970.781 127.634 1055.71 127.634"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g110"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(974.114 110)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g109"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(974.114 124)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip18)"
                            transform="matrix(0.000104987 0 0 0.000104987 1047 101)"
                        >
                            <g clip-path="url(#clip19)" transform="scale(1 1.02857)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 1047 115)"
                        >
                            <g clip-path="url(#clip21)" transform="matrix(1 0 0 1.02857 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1086.44 100.322 1170.04 100.322 1170.04 113.913 1086.44 113.913Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1086.44 113.913 1170.04 113.913 1170.04 127.504 1086.44 127.504Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.77 113.913 1170.7 113.913"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1086.44 99.655 1086.44 128.171"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1170.04 99.655 1170.04 128.171"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.77 100.322 1170.7 100.322"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.77 127.504 1170.7 127.504"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g114"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1089.1 110)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g113"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1089.1 124)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip22)"
                            transform="matrix(0.000104987 0 0 0.000104987 1162 101)"
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
                            transform="matrix(0.000104987 0 0 0.000104987 1162 115)"
                        >
                            <g clip-path="url(#clip25)" transform="matrix(1 0 0 1.02857 -1 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M629.232 322.432 712.832 322.432 712.832 336.024 629.232 336.024Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M629.232 336.024 712.832 336.024 712.832 349.615 629.232 349.615Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M628.566 336.024 713.499 336.024"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M629.232 321.766 629.232 350.281"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M712.832 321.766 712.832 350.281"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M628.566 322.432 713.499 322.432"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M628.566 349.615 713.499 349.615"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g863"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(631.899 332)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g864"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(631.899 346)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip26)"
                            transform="matrix(0.000104987 0 0 0.000104987 705 323)"
                        >
                            <g clip-path="url(#clip27)" transform="scale(1 1.02857)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 705 337)"
                        >
                            <g clip-path="url(#clip29)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
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
                            <g clip-path="url(#clip30)" transform="scale(1.05 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 24 493)">
                            <g clip-path="url(#clip31)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(2198.08 2198.08)"
                                ></use>
                            </g>
                        </g>
                        <path id="c7131"
                            d="M130.5 335C130.5 321.469 141.469 310.5 155 310.5 168.531 310.5 179.5 321.469 179.5 335 179.5 348.531 168.531 359.5 155 359.5 141.469 359.5 130.5 348.531 130.5 335Z"
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
                                        d="M153.689 328.933 154.622 328.933 155.944 329.167 157.033 329.633 157.889 330.178 158.9 331.189 159.522 332.122 159.989 333.367 160.144 334.067 160.144 335.933 159.833 337.1 159.211 338.344 158.589 339.122 158.044 339.667 156.956 340.367 155.711 340.833 154.933 340.989 153.378 340.989 152.133 340.678 151.278 340.289 150.422 339.744 149.567 338.967 149.022 338.189 148.478 337.1 148.167 335.856 148.089 334.922 148.244 333.678 148.556 332.667 149.178 331.5 150.033 330.567 150.656 330.022 151.978 329.322 153.144 329.011Z"
                                    />
                                    <path
                                        d="M154.156 315.089 155.011 315.089 156.489 315.322 157.967 315.789 159.211 316.411 160.144 317.033 160.922 317.733 161.856 318.667 162.711 319.911 163.333 321.156 163.8 322.556 164.033 323.722 164.111 324.344 164.111 325.822 163.878 327.3 163.489 328.622 162.867 329.944 162.089 331.033 161.933 331.033 161.311 329.944 160.378 328.856 159.522 328.078 158.433 327.378 157.267 326.833 155.944 326.444 154.156 326.211Z"
                                    />
                                    <path
                                        d="M141.4 330.878 141.789 330.956 143.967 332.2 145.522 333.133 145.6 333.289 145.444 334.922 145.6 336.556 145.989 338.033 146.533 339.2 146.533 339.433 144.356 340.678 142.489 341.767 138.444 344.1 137.122 344.878 136.889 344.878 136.189 343.4 135.8 342.078 135.644 341.144 135.567 339.822 135.722 338.344 135.956 337.256 136.5 335.778 137.044 334.767 137.744 333.756 138.678 332.744 139.533 331.967 140.933 331.111Z"
                                    />
                                    <path
                                        d="M161.7 339.433 162.089 339.511 163.956 340.6 170.022 344.1 171.344 344.878 171.189 345.267 170.644 346.044 169.944 346.9 169.4 347.444 168.233 348.3 166.989 349 165.511 349.544 164.344 349.778 163.878 349.856 161.544 349.856 160.378 349.622 159.133 349.233 157.811 348.611 156.878 347.989 156.878 343.322 157.578 343.011 158.9 342.311 159.833 341.611 160.922 340.522Z"
                                    />
                                    <path
                                        d="M144.667 320.067 146.378 320.067 147.856 320.3 149.489 320.844 150.811 321.544 151.433 321.933 151.433 326.678 150.033 327.3 148.944 328 148.089 328.7 147.544 329.244 146.611 330.567 146.144 330.411 144.822 329.633 138.756 326.133 137.044 325.122 136.967 324.967 137.511 324.111 138.367 323.1 138.989 322.478 140.156 321.622 141.244 321 142.722 320.456 143.578 320.222Z"
                                    />
                                    <path
                                        d="M148.167 341.533 148.478 341.611 149.644 342.467 150.967 343.089 152.211 343.478 153.144 343.633 154.078 343.711 154.156 343.789 154.156 354.833 152.989 354.833 151.433 354.522 150.111 354.056 148.711 353.278 147.7 352.5 146.922 351.8 146.144 350.867 145.367 349.622 144.744 348.222 144.356 346.744 144.2 345.344 144.2 344.489 144.278 343.789 146.222 342.7 147.544 341.922Z"
                                    />
                                    <path
                                        d="M171.267 325.044 171.422 325.044 171.967 326.133 172.433 327.533 172.667 328.778 172.744 330.333 172.589 331.733 172.278 333.056 171.656 334.533 171.111 335.467 170.489 336.322 169.633 337.256 168.467 338.189 167.456 338.811 166.756 339.122 164.811 338.033 162.944 336.944 162.711 336.789 162.867 335.389 162.867 334.222 163.567 333.522 164.578 332.2 165.278 331.033 165.978 329.556 166.522 327.844 167.222 327.378 169.167 326.289 171.033 325.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c7281"
                            d="M268.5 335C268.5 321.469 279.469 310.5 293 310.5 306.531 310.5 317.5 321.469 317.5 335 317.5 348.531 306.531 359.5 293 359.5 279.469 359.5 268.5 348.531 268.5 335Z"
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
                                        d="M291.689 327.933 292.622 327.933 293.944 328.167 295.033 328.633 295.889 329.178 296.9 330.189 297.522 331.122 297.989 332.367 298.144 333.067 298.144 334.933 297.833 336.1 297.211 337.344 296.589 338.122 296.044 338.667 294.956 339.367 293.711 339.833 292.933 339.989 291.378 339.989 290.133 339.678 289.278 339.289 288.422 338.744 287.567 337.967 287.022 337.189 286.478 336.1 286.167 334.856 286.089 333.922 286.244 332.678 286.556 331.667 287.178 330.5 288.033 329.567 288.656 329.022 289.978 328.322 291.144 328.011Z"
                                    />
                                    <path
                                        d="M292.156 314.089 293.011 314.089 294.489 314.322 295.967 314.789 297.211 315.411 298.144 316.033 298.922 316.733 299.856 317.667 300.711 318.911 301.333 320.156 301.8 321.556 302.033 322.722 302.111 323.344 302.111 324.822 301.878 326.3 301.489 327.622 300.867 328.944 300.089 330.033 299.933 330.033 299.311 328.944 298.378 327.856 297.522 327.078 296.433 326.378 295.267 325.833 293.944 325.444 292.156 325.211Z"
                                    />
                                    <path
                                        d="M279.4 329.878 279.789 329.956 281.967 331.2 283.522 332.133 283.6 332.289 283.444 333.922 283.6 335.556 283.989 337.033 284.533 338.2 284.533 338.433 282.356 339.678 280.489 340.767 276.444 343.1 275.122 343.878 274.889 343.878 274.189 342.4 273.8 341.078 273.644 340.144 273.567 338.822 273.722 337.344 273.956 336.256 274.5 334.778 275.044 333.767 275.744 332.756 276.678 331.744 277.533 330.967 278.933 330.111Z"
                                    />
                                    <path
                                        d="M299.7 338.433 300.089 338.511 301.956 339.6 308.022 343.1 309.344 343.878 309.189 344.267 308.644 345.044 307.944 345.9 307.4 346.444 306.233 347.3 304.989 348 303.511 348.544 302.344 348.778 301.878 348.856 299.544 348.856 298.378 348.622 297.133 348.233 295.811 347.611 294.878 346.989 294.878 342.322 295.578 342.011 296.9 341.311 297.833 340.611 298.922 339.522Z"
                                    />
                                    <path
                                        d="M282.667 319.067 284.378 319.067 285.856 319.3 287.489 319.844 288.811 320.544 289.433 320.933 289.433 325.678 288.033 326.3 286.944 327 286.089 327.7 285.544 328.244 284.611 329.567 284.144 329.411 282.822 328.633 276.756 325.133 275.044 324.122 274.967 323.967 275.511 323.111 276.367 322.1 276.989 321.478 278.156 320.622 279.244 320 280.722 319.456 281.578 319.222Z"
                                    />
                                    <path
                                        d="M286.167 340.533 286.478 340.611 287.644 341.467 288.967 342.089 290.211 342.478 291.144 342.633 292.078 342.711 292.156 342.789 292.156 353.833 290.989 353.833 289.433 353.522 288.111 353.056 286.711 352.278 285.7 351.5 284.922 350.8 284.144 349.867 283.367 348.622 282.744 347.222 282.356 345.744 282.2 344.344 282.2 343.489 282.278 342.789 284.222 341.7 285.544 340.922Z"
                                    />
                                    <path
                                        d="M309.267 324.044 309.422 324.044 309.967 325.133 310.433 326.533 310.667 327.778 310.744 329.333 310.589 330.733 310.278 332.056 309.656 333.533 309.111 334.467 308.489 335.322 307.633 336.256 306.467 337.189 305.456 337.811 304.756 338.122 302.811 337.033 300.944 335.944 300.711 335.789 300.867 334.389 300.867 333.222 301.567 332.522 302.578 331.2 303.278 330.033 303.978 328.556 304.522 326.844 305.222 326.378 307.167 325.289 309.033 324.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c8171"
                            d="M514.5 462C514.5 448.469 525.469 437.5 539 437.5 552.531 437.5 563.5 448.469 563.5 462 563.5 475.531 552.531 486.5 539 486.5 525.469 486.5 514.5 475.531 514.5 462Z"
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
                                        transform="matrix(1 0 0 1.01205 538.193 454.933)"
                                    />
                                    <path
                                        d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                        transform="matrix(1 0 0 1.01205 538.654 441.089)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                        transform="matrix(1 0 0 1.01205 526.05 456.878)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                        transform="matrix(1 0 0 1.01205 546.108 465.433)"
                                    />
                                    <path
                                        d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                        transform="matrix(1 0 0 1.01205 529.278 446.067)"
                                    />
                                    <path
                                        d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                        transform="matrix(1 0 0 1.01205 532.736 467.533)"
                                    />
                                    <path
                                        d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                        transform="matrix(1 0 0 1.01205 555.561 451.044)"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c8401"
                            d="M728.5 461C728.5 447.469 739.469 436.5 753 436.5 766.531 436.5 777.5 447.469 777.5 461 777.5 474.531 766.531 485.5 753 485.5 739.469 485.5 728.5 474.531 728.5 461Z"
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
                                        d="M751.689 453.933 752.622 453.933 753.944 454.167 755.033 454.633 755.889 455.178 756.9 456.189 757.522 457.122 757.989 458.367 758.144 459.067 758.144 460.933 757.833 462.1 757.211 463.344 756.589 464.122 756.044 464.667 754.956 465.367 753.711 465.833 752.933 465.989 751.378 465.989 750.133 465.678 749.278 465.289 748.422 464.744 747.567 463.967 747.022 463.189 746.478 462.1 746.167 460.856 746.089 459.922 746.244 458.678 746.556 457.667 747.178 456.5 748.033 455.567 748.656 455.022 749.978 454.322 751.144 454.011Z"
                                    />
                                    <path
                                        d="M752.156 440.089 753.011 440.089 754.489 440.322 755.967 440.789 757.211 441.411 758.144 442.033 758.922 442.733 759.856 443.667 760.711 444.911 761.333 446.156 761.8 447.556 762.033 448.722 762.111 449.344 762.111 450.822 761.878 452.3 761.489 453.622 760.867 454.944 760.089 456.033 759.933 456.033 759.311 454.944 758.378 453.856 757.522 453.078 756.433 452.378 755.267 451.833 753.944 451.444 752.156 451.211Z"
                                    />
                                    <path
                                        d="M739.4 455.878 739.789 455.956 741.967 457.2 743.522 458.133 743.6 458.289 743.444 459.922 743.6 461.556 743.989 463.033 744.533 464.2 744.533 464.433 742.356 465.678 740.489 466.767 736.444 469.1 735.122 469.878 734.889 469.878 734.189 468.4 733.8 467.078 733.644 466.144 733.567 464.822 733.722 463.344 733.956 462.256 734.5 460.778 735.044 459.767 735.744 458.756 736.678 457.744 737.533 456.967 738.933 456.111Z"
                                    />
                                    <path
                                        d="M759.7 464.433 760.089 464.511 761.956 465.6 768.022 469.1 769.344 469.878 769.189 470.267 768.644 471.044 767.944 471.9 767.4 472.444 766.233 473.3 764.989 474 763.511 474.544 762.344 474.778 761.878 474.856 759.544 474.856 758.378 474.622 757.133 474.233 755.811 473.611 754.878 472.989 754.878 468.322 755.578 468.011 756.9 467.311 757.833 466.611 758.922 465.522Z"
                                    />
                                    <path
                                        d="M742.667 445.067 744.378 445.067 745.856 445.3 747.489 445.844 748.811 446.544 749.433 446.933 749.433 451.678 748.033 452.3 746.944 453 746.089 453.7 745.544 454.244 744.611 455.567 744.144 455.411 742.822 454.633 736.756 451.133 735.044 450.122 734.967 449.967 735.511 449.111 736.367 448.1 736.989 447.478 738.156 446.622 739.244 446 740.722 445.456 741.578 445.222Z"
                                    />
                                    <path
                                        d="M746.167 466.533 746.478 466.611 747.644 467.467 748.967 468.089 750.211 468.478 751.144 468.633 752.078 468.711 752.156 468.789 752.156 479.833 750.989 479.833 749.433 479.522 748.111 479.056 746.711 478.278 745.7 477.5 744.922 476.8 744.144 475.867 743.367 474.622 742.744 473.222 742.356 471.744 742.2 470.344 742.2 469.489 742.278 468.789 744.222 467.7 745.544 466.922Z"
                                    />
                                    <path
                                        d="M769.267 450.044 769.422 450.044 769.967 451.133 770.433 452.533 770.667 453.778 770.744 455.333 770.589 456.733 770.278 458.056 769.656 459.533 769.111 460.467 768.489 461.322 767.633 462.256 766.467 463.189 765.456 463.811 764.756 464.122 762.811 463.033 760.944 461.944 760.711 461.789 760.867 460.389 760.867 459.222 761.567 458.522 762.578 457.2 763.278 456.033 763.978 454.556 764.522 452.844 765.222 452.378 767.167 451.289 769.033 450.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path
                            d="M43.1396 218.847 118.413 218.847 118.413 231.647 43.1396 231.647Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M43.1396 218.18 43.1396 232.314"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M118.413 218.18 118.413 232.314"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M42.473 218.847 119.08 218.847"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M42.473 231.647 119.08 231.647"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g773"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(46.9192 229)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M1142.41 218.847 1217.68 218.847 1217.68 231.647 1142.41 231.647Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1142.41 218.18 1142.41 232.314"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1217.68 218.18 1217.68 232.314"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1141.74 218.847 1218.35 218.847"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1141.74 231.647 1218.35 231.647"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="w773"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1146.19 229)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M372.997 420.061 456.597 420.061 456.597 433.652 372.997 433.652Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M372.997 419.394 372.997 434.318"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M456.597 419.394 456.597 434.318"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M372.331 420.061 457.264 420.061"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M372.331 433.652 457.264 433.652"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g758"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(375.664 430)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip32)"
                            transform="matrix(0.000104987 0 0 0.000104987 448 421)"
                        >
                            <g clip-path="url(#clip33)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M929.648 559.097 1013.25 559.097 1013.25 572.688 929.648 572.688Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M929.648 558.43 929.648 573.355"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013.25 558.43 1013.25 573.355"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M928.981 559.097 1013.91 559.097"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M928.981 572.688 1013.91 572.688"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g125"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(932.315 569)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip34)"
                            transform="matrix(0.000104987 0 0 0.000104987 1005 560)"
                        >
                            <g clip-path="url(#clip35)" transform="matrix(1 0 0 1.02857 0 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip36)"
                            transform="matrix(0.000104987 0 0 0.000104987 1057 29)"
                        >
                            <g clip-path="url(#clip38)" transform="scale(1.01496 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img37"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1079.17 24.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1177.5 78.1712)"
                        />
                        <path
                            d="M1175.55 91.0309 1167.86 82.6543 1168.35 82.2035 1176.04 90.58ZM1168.11 82.4289 1167.95 86.1967 1164.5 78.5001 1171.87 82.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1184.95 90.8892 1175.5 90.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1082.8 11.0222 1177.17 11.0222 1177.17 23.8222 1082.8 23.8222Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1082.8 10.3555 1082.8 24.4888"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1177.17 10.3555 1177.17 24.4888"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1082.14 11.0222 1177.84 11.0222"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1082.14 23.8222 1177.84 23.8222"
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
                                transform="translate(1086.58 21)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1097.08 21)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1078.5 25.5001 1097.69 25.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1185.3 78.1058 1272.95 78.1058 1272.95 90.9058 1185.3 90.9058Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1185.3 77.4392 1185.3 91.5725"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1272.95 77.4392 1272.95 91.5725"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1184.63 78.1058 1273.62 78.1058"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1184.63 90.9058 1273.62 90.9058"
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
                                transform="translate(1189.08 88)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1199.58 88)"
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
                            transform="matrix(1 0 0 -1 1075.5 32.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1184.99 50.5001)"
                        />
                        <path
                            d="M1185.5 51.5001 1204.69 51.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1189.49 37.9223 1262.69 37.9223 1262.69 50.7223 1189.49 50.7223Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1189.49 37.2556 1189.49 51.389"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1262.69 37.2556 1262.69 51.389"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.83 37.9223 1263.36 37.9223"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.83 50.7223 1263.36 50.7223"
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
                                transform="translate(1193.27 48)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1161.5 79.5001 1184.21 79.5002"
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

        fetch('/samarqand/server1b')
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
                    if (item.id === 743) {
                        const plus = document.getElementById("g743Plus");
                        const minus = document.getElementById("g743Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(743);
                            trueAnimation(7431);
                            trueAnimation(7432);
                        } else {
                            falseAnimation(743);
                            falseAnimation(7431);
                            falseAnimation(7432);
                        }
                    } else if(item.id === 780) {
                        const value = document.getElementById("g780");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(780);
                        } else {
                            falseAnimation(780);
                        }
                    } else if(item.id === 779) {
                        const value = document.getElementById("g779");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(780);
                        } else {
                            falseAnimation(780);
                        }
                    } else if(item.id === 106) {
                        const value = document.getElementById("g106");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(106);
                        } else {
                            falseAnimation(106);
                        }
                    } else if(item.id === 105) {
                        const value = document.getElementById("g105");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(106);
                        } else {
                            falseAnimation(106);
                        }
                    } else if(item.id === 102) {
                        const value = document.getElementById("g102");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(102);
                        } else {
                            falseAnimation(102);
                        }
                    } else if(item.id === 101) {
                        const value = document.getElementById("g101");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(102);
                        } else {
                            falseAnimation(102);
                        }
                    } else if(item.id === 109) {
                        const value = document.getElementById("g109");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(110);
                        } else {
                            falseAnimation(110);
                        }
                    } else if(item.id === 110) {
                        const value = document.getElementById("g110");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(110);
                        } else {
                            falseAnimation(110);
                        }
                    } else if(item.id === 114) {
                        const value = document.getElementById("g114");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(114);
                        } else {
                            falseAnimation(114);
                        }
                    } else if(item.id === 113) {
                        const value = document.getElementById("g113");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(114);
                        } else {
                            falseAnimation(114);
                        }
                    } else if(item.id === 863) {
                        const value = document.getElementById("g863");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(863);
                            trueAnimation(8631);
                            trueAnimation(8632);
                        } else {
                            falseAnimation(863);
                            falseAnimation(8631);
                            falseAnimation(8632);
                        }
                    } else if(item.id === 864) {
                        const value = document.getElementById("g864");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(863);
                            trueAnimation(8631);
                            trueAnimation(8632);
                        } else {
                            falseAnimation(863);
                            falseAnimation(8631);
                            falseAnimation(8632);
                        }
                    } else if(item.id === 773) {
                        const value = document.getElementById("g773");
                        value.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                        const valueW = document.getElementById("w773");
                        valueW.textContent = "U= " + formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 758) {
                        const value = document.getElementById("g758");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(758);
                            trueAnimation(7581);
                            trueAnimation(7582);
                        } else {
                            falseAnimation(758);
                            falseAnimation(7581);
                            falseAnimation(7582);
                        }
                    } else if(item.id === 125) {
                        const value = document.getElementById("g125");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(125);
                            trueAnimation(1251);
                            trueAnimation(1252);
                        } else {
                            falseAnimation(125);
                            falseAnimation(1251);
                            falseAnimation(1252);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 713) {
                        const value = document.getElementById("g713");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a713");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 1.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(713);
                            trueAnimation(7131);
                        } else {
                            falseAnimation(713);
                            falseAnimation(7131);
                        }
                    } else if(item.id === 714) {
                        const value = document.getElementById("g714");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 715) {
                        const value = document.getElementById("k713");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 716) {
                        const value = document.getElementById("n713");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 717) {
                        const value = document.getElementById("w713");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 728) {
                        const value = document.getElementById("g728");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a728");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 1.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(728);
                            trueAnimation(7281);
                        } else {
                            errorAnimation(728);
                            errorAnimation(7281);
                        }
                    } else if(item.id === 729) {
                        const value = document.getElementById("g729");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 730) {
                        const value = document.getElementById("k728");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 731) {
                        const value = document.getElementById("n728");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 732) {
                        const value = document.getElementById("w728");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 817) {
                        const value = document.getElementById("g817");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a817");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 0.22 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(817);
                            trueAnimation(8171);
                        } else {
                            falseAnimation(817);
                            falseAnimation(8171);
                        }
                    } else if(item.id === 819) {
                        const value = document.getElementById("g819");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 820) {
                        const value = document.getElementById("k817");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 821) {
                        const value = document.getElementById("n817");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 822) {
                        const value = document.getElementById("w817");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-4
                    else if(item.id === 840) {
                        const value = document.getElementById("g840");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a840");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 0.22 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(840);
                            trueAnimation(8401);
                        } else {
                            falseAnimation(840);
                            falseAnimation(8401);
                        }
                    } else if(item.id === 842) {
                        const value = document.getElementById("g842");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 843) {
                        const value = document.getElementById("k840");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 844) {
                        const value = document.getElementById("n840");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 845) {
                        const value = document.getElementById("w840");
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

    function errorAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "#FFFF00";
    }
</script>