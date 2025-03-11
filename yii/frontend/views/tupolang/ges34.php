<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-34';
$energy = new Energy();

$id = 71;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);
$urlAggregate4 = $energy->getInformation($id, 4);

$urlSwitch1 = $energy->getSwitch($id, 1);
$urlSwitch2 = $energy->getSwitch($id, 2);
$urlSwitch3 = $energy->getSwitch($id, 3);
$urlSwitch4 = $energy->getSwitch($id, 4);
$urlSwitch5 = $energy->getSwitch($id, 5);
$urlSwitch6 = $energy->getSwitch($id, 6);
$urlSwitch7 = $energy->getSwitch($id, 7);
$urlSwitch8 = $energy->getSwitch($id, 8);
$urlSwitch9 = $energy->getSwitch($id, 9);
$urlSwitch10 = $energy->getSwitch($id, 10);
$urlSwitch11 = $energy->getSwitch($id, 11);
$urlSwitch12 = $energy->getSwitch($id, 12);
$urlSwitch13 = $energy->getSwitch($id, 13);
$urlSwitch14 = $energy->getSwitch($id, 14);
$urlSwitch15 = $energy->getSwitch($id, 15);
$urlSwitch15 = $energy->getSwitch($id, 15);

$urlTransformer1 = $energy->getTransformer($id, 28);
$urlTransformer2 = $energy->getTransformer($id, 29);
$urlTransformer3 = $energy->getTransformer($id, 30);
$urlTransformer4 = $energy->getTransformer($id, 31);
$urlTransformer5 = $energy->getTransformer($id, 32);
$urlTransformer6 = $energy->getTransformer($id, 33);
$urlTransformer7 = $energy->getTransformer($id, 35);
$urlTransformer8 = $energy->getTransformer($id, 34);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);

?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['tupolang/index']) ?>">"Тўполанг ГЭС" Филиали</a></li>
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
                            <rect x="0" y="0" width="47625" height="104775" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOpJREFUSEvt12sSgyAMBODYKiL4uv9pK7oKIcFeIN8vS3amlpWZSoXuw32xXukxznpMuAHTbMCEs5zlEstZLrGc5RLLWS6xnPpHzI2YZt5hdpgCRAxLEbMwE1b+oQUX72aigMs363GjvXZjlXODNnxoW85fTHJDOH/FyL1/c9yRU5oodUgdJixpAjKJW7EoxaI7oh2r0oYEtGoZMX94DLhUBKfXojyp9dtCgiI4+UDcRXBic6L+XiFqKYrgeC1iS7Jyc3gRXFlLVQSXN2fCSsO9ObII7q7leTZbrtOiFsGl06IXwTlfnAgg+gEGAhJwZdPnjwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img1"
                        ></image>
                        <clipPath id="clip2">
                            <rect x="0" y="0" width="44903.6" height="104775" />
                        </clipPath>
                        <clipPath id="clip3">
                            <rect x="0" y="0" width="47625" height="114300" />
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
                            <rect x="0" y="5.82077e-11" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip13">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip14">
                            <rect x="9.31323e-10" y="0" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7V0JVFRXmk73TE93umemz/TMnD7T0zM9p8+ZnnO6J53uGJdEE2NiUKPEqEjUGMUlxiUmre0SEzfcAQUX9oKCojb2fXFDkE0odhVwQaEKF9yFAjSZ6Df/f+sVFsVDUMCF1M/5znvvvvduvffux7/c+9/3XniS4uzs/O6qFSsUb7755ku8vWTRop2RGv1FvVZ3yR5r1qypBvADcaJDHPI4snnzZlVDQwOGDBkysaSk5EdbtmwJb21pgT1aCDqdrslBOIf0SpRKZT0T7rVhw3bpdToQ4QS55OAgnEN6JdOmTftVRkbG/QtEuKGvDva+ceMG4mJjZcnGIMLdkk51yEAUw/mm/ykytnoWN5hHsbkThaRhTKb7L55oaHm5tL51SqWx7Y3jxtZXj58z//J4owWl52/+pqShaVhxfdP4sot33q24fP9n4lwS1lAl527+vMzUPHL+gqVLGxsvQxBu8GDv69evI1YQrrUT2RhardZBuIEoJaaWFcX15gtFxpb7JQ1tKCaUGFu+KzGaBYrrW+6VmNpgaLhj2UdL3haQtosF7goYjC33DKa2SwZTa02JqbXJUN9yv9h0F74h2vvmFnMHwsXFxcmSjeHQcANUSkx3VBbC9B+YlGFqPRGJCXcBg3tAOIeGG6BCWogIx9pJnix9gfwz1xEZbTGfFy9exCuvvJIufLjvuYZbtmzZi06jR6+m1e9PcNTfhGPTq0nLw6lTNUQki7928OBBODTcCy9Mnjz5N5s3uiMqKupFqWjgy5PQcB6+4YiNjiTECOzYvr1bwiUkJFySLnHAyqhRowaplGFYtWrVr6WigS/9T7g2bPTYh/jEZEIK4pOS4em1SxBOq9YgLTUVTU1NnQhXUVFRn5qaOiglJeXlpKSkP1qRlpb2Epfv3r178PTp0/9Fuo3nUkaMGDE6J/soXCdNelkqGvjSv4TjqJfMan0LiuvMFtSboU45ilClCmu+Xg+tLgrh4eE4dOgQzGZzO+Fu376Nq1ev4sqVKx3AZQyj0YixY8culm7juZRFny2aWVdXByLeSKlo4MuTMKlyKGlopWUb0g1n4ROoQhSZ2vCwcOTk5HTQdF2ByTlhwoRl0m08l+Ls7LyItfugQYM+kIoGvjwdwkmaz7o0tSI+qxy+QeFISExAGPk1xcXFskSzxaRJk1ZIt/Fcipub29pvv/kWI0eO/EQqGvjytDScHJiAmtQcBIREICUphYinxInjx2XJxphLDSbdxnMpK5at8L537x6mfzj9S6lo4MuzRDgB012UGFuhiMqAUqVFWkqa8PFOnTrViXAL5s3zk27juZStm7eG3b9/H59/9pmXVDTw5ZkjnA0Kz5vhq4qHVh8notkIVQTOnz9PZGuFubUFXp6e8Nrhlfee03tjpdt5qsJRs4uLy7/3FES4/RwArV6xUs/bGzZs+FupqoEr/U04MfZqV9YT2J6Xd+Y69ih0iE1IQnJyMtTqCDFiEanTify5qpMnsWvXrsIxY8aMf5opTZs2bTp95MgRZGVl9Qx87BHLMjo6GsOHD39LqmrgSn8RTgQEJl63DPJ3PuZBmfz+zjhy8gJ8glRIzziIxPg4bN+2rUNXSk1NDby9vUvGjRv3AWmLH0q3+MQkUqM9rYqgiDsykhDVLYKDg+FJWnrfvn1i9MVBuMeE0E6mNmzx2ocwTRSUmhiEaGIRrI6HvyoGe8MY8ThUYZRI2TOUSMfuLz4Lb98QlJaUIjgoGFevXG0nHePMmTPY7eNT8f748S5PknhMuJiYGFKyFmH/7GFy4cIFFBYW4vSp08hIS8dIB+EeH0dPXsbadevJ7OkRqdcjSh+JaPqvjouJRXxcHGKpYQKCFdit0CL7xAU6xzbVqTuQRjS2YV9YLPLyChAeqsSpms5BRW1tLWuPE++///40Mll/I91yv0mkVnuah+6YaKWlpXTfluG8GBlwuVajET7p6dNEuHQH4XqF8MRs1NfVdyIBw8xoNiMjNQ1qVTiUYWrsDdEjp+aKbF3y4Jy8O9CkHEVCUhpSkpLBw0Ryv8eNunfv3mpnZ+eZ/emYWwl38+ZNJCYmdtBwvC4HFoeG6wPsDdGhxca/6go8hBVDDjNrwgi1DnuVUcg7fU2YZFs/rysY6NrTj9UgKDQCBfkFiI6J7uDX2YKHw3x9fc9MnDjRbcGCBZas5j4UK+HYH7t165YgU0/EoeF6CyKLIowIJ9Po9rDO0rp25QpFn2oyt/HQaKPgGx6DgrM35eu3h+kuck9dwa59IaisrISCnHFODrD/LSsaTCYEBQSec3VxmT916tS/kx5Fr8VKuAMHDqC5uVmiU/fi0HC9RV2zII1cY3cH1kJhYWE4kJ4BlUYPf3Uijp2/LVLcu4tmDcYW+ARrUELBREiIQvhwcr9hxUVy2oMDg+qnTpmycOnSpT+WHsljy2MTzqHheoeEnOM4dqyQGlV+gkxPUFVVRcRT4ujRowiPIOJpklFIRJb7vQew+HWKmP04cChT5Nvl5+fL1m+Ly5cuQaFQmFxcXD6bPXv2T6RH88jyuIQ7Q4Q7mLEf7771js+4MeMWTuhjcJ2M0W+/vfCjjz76R+lyn470JeGsUaZfRCJukw8j17iPiiIiroo0XnFxCRThGgRHpsNQb5Z+s+vINuFIOcJJQ+bn5iI+Ib5Lv84WjY2NUIaGXpoxY8YyIt8jZ+H2RsOVlpSgqLAIhqK+R5F13WDAtGnT/iBd7tORvtZw7MT7h/KEGflGfRwwWQ6RI84jDJUnjiNIqYEy5iCKyYTKXYMA+XVZlQ3Y7ReKEydOIDQ0VDjycvXb4yr5k+Hh4Y0zZ8xYsXjx4r+XHlW3YiVcQUGBiIytUWh3ckby4ZLiE0Rkb+wHxMbE4kjmkYFFONHhS1onhDSRXEP2Fpw7lpCQgMioKNTUnEKAQoWE7Arp9+X9u6JzTdjpF0akOwlFUDCM9fJdNXK4dvUq1BERV2fOmLlm7ty5/yA9si7FSjjOAImia2RNx1rTnnjl5eU4eOAgzp45I/ZZfbjCY8ekI/peOM+Qh90GnIbLrmpEcmq6bAP2Fa5fvwGdToukpGQcOHiY/LsE0mic0Cl/TRw1B6oTkJtXIIaUiosMsvV2BY54iXg3Zs2atZai2p9Lj66TWAnHwkTi/jgOgC6Rj2iVb7/9lmekocXcAr1Oj2+++aY9Si0scBDukREam9llh29fg4eGyNlHXl4evMh05lY30jXI3wsHE/r0fETHJSE7OxspKSmydT4MN4joer3+1ly3uRvIz/sn6RG2iy3hrMLuQHJSEjNQIJ/MrclkpD33kUMBEZt5q4Y75tBwjw5fZRRa6b9XrsH6BdSgiQmJZL72QxmhQ8yhYrqOrrpP7mK/oRb+weFkYo+Tn6YSHc+y9XYB7je8RZqLNOWtefPmbf34g4//WXqUnQh3jwimVe2F+9cLEKvbI7B53QKoQ71x524bcq2Ec2i4x0dwOHf4dh8R9jXYL+JMjcwj2dirioXBaCatxvfVOZItOHMdXr4K0dBBQUFCU8rV2R2YLDExMeZPP/lkB0W1/6q1IxybVY2fK5prP0NL7acw1y5EU+0SpKqnURR/kzRctkPD9QZFdU0USUZSYzx+/1tvcPXqNQSTiS0qLBTZJNnHOSlA7lpJAxpbsZei6dLScjGIzoSVq7M7sMZrunWbkxJaQxSKOx013D3MnDISG//6Gtpq56H13Dz4b3sbLhMGodnc7NBwvQFHp4k5J2AwdD/5pV9B5pwHzrkbJUIfA216gTQu2/maDXTNqvjDIr/u8KFD2J+xX77OHoCJx68f66Dh6E/r50IabiFpOCIcwUyaLlU9lUw5abgchw/XC9zF3vA4YSrkGuRJo6KiAhHko+Xl5WNPSCQM9Z1HKdjU8pBZUk4lQskVqKysEJOzm5o7T8zuDoJwMZ0Jp/P7QGi3OxJ4PUPzAZrId2wn3PdPw3VsiMeFX6hWtjGeFq5fuw4ycygrLcVuvxAcKqsX1yk3Jptb1YidvkFi/DU4MAiXL1+WrbMryBHuHkHvN7GdbFbCpWkmopkJ9whRallZGfuLHCWLcx5VnkHC2Ws53paBcMTtj+NuhzaEUZQo1xhPG0lJSWRiDyAyJgERSdl21y8R0EQ+aL0Z3gEqVFVVQ6VS4eTJk7L1yUFewwE6f3vCzReEa7p96wHhutFwXP8md3cy+RkICgwUnd89HcWwyjNDuHXbd8d5+qrOefiHn/fyU9ftDNDWe/lrjF4B2gbPIO0FrwDdpZ0K/SVvhf6KjyLyinew/rp3cOR1b0XUzV3Bkbd2KaKbGDv91c2rV3/ZrNNozZF6fXOkTm+OiYwxk1/TkhCf0EYP6Q75VneTk5O/TUlJ+b+0tLTvCPfS6T87gx4k98pzHtnhw4fFg+G+Mh645wfF/Ww8XMQagFOyiw0GkVFbTv/1JqNRNLY9AezBaUs83bCIzvUO1ogRCMs/ih35aDtYl4Kso7lIJxJkZmbK1mcPWcIRKQI9nXG+yI0wC+cIvK4JeJ8Ix1Fq9xruu+++E/d/YP9+1J6tFQgMCMDNGzceiXTPDOH6SuiefmAPnk/Aqd2cZRsUFPQjBq3/3Z49e35My5/wAPmECRN+yhg0aNBP33333Z9xNsOyZct+sWbNml+uXLnyV59//vl/Llq06Lfz58//He37PZ3z0qTx418eO3bsn8c7OQ1ymTx5EWkHam95ItiCRwxCghWoJP9uX4AS+w1n27tOLISzaDouiz5YBF1UbHuqOA/Gy9VpRTvhbOY0cJSam52Jre5rkXU4XWDH1g04fCBdjDjkEglu3bTRcDKE4y6bwIBAkc3MBGUcpX9Gf1+/7zfhnqaMGjXqD7t37z7JLzmUI4MtRM9/coqIYjk1PTTuoHAHOk/maSOfrw57A0Jx7tw5BPFknWsdJ+vYg6PU6Kho3GlrI9xBg6kBWzZtFsELaX7otFpEkKlmshTk5yOTtDn7iicqj4M1PfubnE7F2twKnhbZXp5fIJYMTw+PDsday/kYObApfiYG7weKLFiw4KekDUM5M0SODPbg48LDwlBRVgFvfxWOtWcX2wYUbSiovUXBhJKCifNQKpXC/MnVx/DeuRM+3t74Yunn+OKzz/EXsVxq2V7KS5t1Kp/+4TQs/nQh1n71tcj/06jVwndkrcbzbgUuXMQlQmJ8Ak5V10CjisAFIjKXtR9D4HOWL1+OQH9/QgCCbMDbX65chSwH4fpeyOR+RFqhuSf5b8LEhoSI95f4BauQkl9tQ7YHoMAKfuExKCouQWJSIpk1+Tc8cTYLD5X1FBwENJAPGhkZCf5+xTHSVLt9fLBpw0a4b9gA94203OiOjbRcv3YdNlLZurVraR/vdxf7LMdsxOpVq4TP25U4TGo/yjvvvPM7Ly+v8mvXrskSowPMLUhNSaGA5QD27z+A4MhUi4ntRLy7UCdnkYnLEAmN/Mr/npD6YWCzfom0E8+6txJu7aYVmPGJM2YseA/TCR8xFr6HRV9NwUyxnIzZi9/DJ6umUPkEOm4cHTMBH7qNQWJyvESvzuIgXD8Lp4ovWbLEv7y8/L5cY9vDamJPVlVjl1848k9fl4hmE1DQMq2gBoEhEThXew6KEAV64jd2BY7KmXA8a81KOPd9SzBn++tw8xiC2TuGEYZi7u5h2JHzPub5DIHnUWcs8H8d29ImYb7PG5jjMRTzPN+C25bh0MYpJXp1FgfhnpC4TJo0NT4u7jZrMrlGtwV3FIeSia2qOokgpRqJ7cmdVlhIl1d9lfy6EJiMDSI9irN75errDqzhLpMvFmslHEWp7r6LMZcIN8djMOYQ4ebsGIJ5RDhPQbjBgnCf+r2Ore2EG4L5niPhtnU4dLEOwj0TQib2t9u2bSu+0tgo2/D2SE1NxcEDB3A4M1vMGuNZ/pw6b806Ect6M/YEqXHiZJXoCmGyyNX1MPBrZlm7sQ/G7yPxo+j1i03TiXDDBZGYcG6k4SyEc8ZcJhwtF/qNwBZBuBGkCUkDOgj37An3/y1csMC7uLi4RyaWRxk4W/f0mVPwpig1p/qyjaaTiGe6g5DodBw6nIW83FwkJSQJn1CuPjk0U5DReOmy6CrhCJS7Sdbu+VSYVCacm5VwPkPhJQg3BF5HJwgNt5kIN89nuES4tzB7y+tEuFCJXp3FQbinJBMnTnTW6/XXe+Lws3/Gk29qqqqgjNAjWja58y7ij5RCpY0ScxTCQpVi9ECuvq5gGzSs8VwA15VD4bpqEKasfgWuq4fgo/WDsVrjhGnug7BKNwbTNg3CCgUFFV8PhQsdM33165i6fDC00WESvTqLg3BPUZycnP7D3d09l+cayBHAHjzExUNL/OIcv7AYYU4tY8oPyHeksgE+/goxuZqTOk0mk2xdcrAl3Pm6WlRUlAuUV5aKrJe09FTM3jYUf40YhWWatzF7zbsoryiTjqtAJR9L2zyHoitxEO4pCw+3zZ8/fzv5XvfkSGAPHtDnjt+683UiufPI8QvCpNqSznC+CV5+ShHB6nR6MddUri57cGcv+4yaCDUqyok8BOuSkZqWglnuQ/GX0DexnOC20gnlZURGm2PKy4mAtOwKHIFzQOQg3FOWsWPHOqnV6sbuxkoZ7Sa2uhpafTR06fmdUp2YhP7qBOQfKxIahYes5OqyBY8S8EhDNaGGiG2LI4cOY93XX+OrjcvhNOclTJg1DDu9t8F9/UYcy89HDQUtHc/hbXtQOR2XlJDoINyzIGPGjPm3DevXH+FPa8oRwh7WDBdDcSl8QiJRVNcsEjktpLPModCnFyA2LgnV1VVQqyLEyIJcXd1h3969WPrFp3Bd8We4bRuGOWRaJy98Dbt2eSKEyC93Tlfgmf0Owj0jQib2h25ubhvy8vK+k2sse7DWUFKAcIF8NR+/EBwuq7PRdKz17iLDcBb+QTwv9aLw6/gdIvX19T0CT9hmf5AnVG8PXAGP3PHwzHsPHnnjsCNzIvRxKui0NvmHFARlZR1FSLiWApxIqDWRuGSXRMqEc3V1/V/plh3yLMj48ePfCg8Pv9jc1L2JZSddqQwT7xaOikuEKilLaLcHOXZt4tOdO/eF4ELDRZG1kZebJyG3S3DaUlJiElJTkrFl82Ys3zILnvljiXDj4MWkOzIB7tu+xuZNm8hsZ6GyvAIBwWFIzqsSv804dv4WduwLJXP9QGs7CPeMCk/5++qrrzJY09gSrCuwed2fniaSPHcFaVB0/rYgnLWj2GBqgb8qHgHKaEIUAm0QEEYQ65ESorBzTxB/gwJbtrtj+/ZNcP3kHXwWNKIdi/2GY9YcV2ylffxi7ekffYyUYzXtv2clu6HOjDDVg7R/B+GeYWETO2vmzNVZWVnf2pKrK9RU1wgTe/niJewJCEVG0Zn2hmciPPDxLBCasAOs82fvQnegCHv27saMVcOxOswJH61/DYv3jMQnnsMxbd0QrFA6YSr5dF/rxsFp2iAEK1Xg11nY1i8IR3UFinkmlmmbDsI9B+Lk5PS6QqEwyn1i0x48I587fqspik1KSYMyVkru7ECEh4PNYeT+QiiUAVgZPh5zdg7FF6FvY2ngcCzYMxwrtaMxa9urWBM3Fi4b/owlW8dAExktQziu6y5CbN5E6iDccyJkYn+xatWqJM78tSVYV+A8N45kq2tOY5d/GApOX4OB3+LZDdgUFxK0aXkIDQmG88I/wW3T6/jwy0GYuupVuG19De8v+hMW7n4T4+b+AUt938ZI5z9Co48hs00akv03JhqBNWrOyUsUKSe0X5eDcM+RAPjBxx9//JfMzMy7tuTqCvxtMO6zu9J4BcnJaUhOsiCJQdsd0F6eKhAaEgY/P1/s9NiBtRs3YYvHLmz18MZmwrYdPrTtTds7abkTHl4+VL4XpcY2lFpJR8tjZ29g++5A8VYA6zU5CPccyjvvvDM4ICDgXE/61djE8nyG6KgoMXzFiOoC1v0xUbSk47k7hD96ok7NEQRiMpWSibQQyrJUp5ImVOkRoYlBGCFcG02IgUoXI7TeNbs5GA7CPafC74hbsWJFFH/xxrZB+xrnamsRQebVOvfXHn6aZDFdUO5cOfA7Vxwdv8+xUOMtzMjIuCPXuH2Bc7VnhRaTIxuDX7R980bPXq3B0xgLCw1IOFp5odjYWldiaj1Pfl9KqenO1rL6lvUlJkbrluL6lmyKmJPoGM8SU/OGMmPzomJj02zat6SkvmVDibE1xGBsO1ZS16zi7fIG88xSU/ObJcbmNyouNo+ovNj2RqnR/KHB1Lqdjs0qNpqXl15q+w27JNJjc0hvZNSoUS/v27fvFHcCyzV0b1BLhNM8hHARKTkiIu54HneByOMYES45v0rqfuHggrti5KJoqYwzYsh02+9nc96+Lratpp7LeP2u6JJpP5eWRabWbw0NLTulx+aQ3gi/eHr58uWxPKjfsfF7ByYcazgrQWwhIlFTK3b5KXE4MwuXLzeK5IKb1693idycXKQQ4ez7BPsHHd0ACzFbI6RH5pC+EFcX1zkpKSnEFXkCPSoaL19GoD5d0hxysGiiA4az4jj+mPE+VUKX2BMej7zTPfy6T5/CkjvoIFw/yNi33/79nl3eJx726aWeotVshndghGgs+YZkWPfZLh8G23OfFByE61dZ5uLy4tKlS0OOV1b2aP5E12hFamo60gpPCb9IvjGfBzgI90Rk6pQp0xPiE5p68lXFhyFEqRafk5Lz5fofclqyK3R1nmXbQbgnIKNHj/5vDw+PsqtXH/4inO5w6FCmmJYYFn+YNN5ppBedIZxFRh+A60knP5DrTSmoeYB8m3Xrtn2ZLaz77Y5LlbbjMksTpMfikP4U/lIhRbK+ZWVlj21i+aPG/DkCY70R2dk5ItnySB8iKyubltmYPHmqZtiIt4YPG/Fun2Pk6LHDpEfikCchH3zwweTY2NibvX0nSX9iyZIl26XLdchAkDFjxvzXtm3bivgbXHIN3nfoKak7HvfZ4sU7pEt1yEAR/vw5vwXAUGToZRTb9yDT7yDcQBVnZ+cJkT18C8CTgoNwA1xGjhz5643r1iUogoPzrQgJVtCSEZwfLEGheFDWPRRSHQ/KrHXYl1tAZVw/wdXV9VO+rvT09B8zxEX2mbzwwv8Dqz2REX1DUHMAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img21"
                        ></image>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="1173079" height="571500" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="0" y="0" width="76200" height="177800" />
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
                            d="M390.827 382.933 390.168 366.554 392.832 366.446 393.491 382.826ZM387.503 366.661C387.414 364.453 389.132 362.592 391.339 362.503 393.547 362.414 395.408 364.132 395.497 366.339 395.586 368.547 393.868 370.408 391.661 370.497 389.453 370.586 387.592 368.868 387.503 366.661Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M0 0 277.671 0.000104987"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 635.171 366.5)"
                        />
                        <path
                            d="M0 0 1024.92 2.061"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1176.42 184.5)"
                        />
                        <path
                            d="M0 0 239.918 0.000104987"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 332.418 365.5)"
                        />
                        <path
                            d="M0 0 1062.92 0.310236"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1214.42 141.5)"
                        />
                        <path
                            d="M1.5-4.27338e-06 1.5001 36.8514-1.49989 36.8514-1.5 4.27338e-06ZM4.5001 36.8514C4.50011 39.3367 2.4854 41.3514 0.000117807 41.3514-2.48516 41.3514-4.49989 39.3367-4.4999 36.8515-4.4999 34.3662-2.48519 32.3514 9.21667e-05 32.3514 2.48537 32.3514 4.5001 34.3661 4.5001 36.8514Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1163.5 222.352)"
                        />
                        <path
                            d="M1203.44 222.181 1203 141.508 1206 141.492 1206.44 222.165ZM1200 141.525C1199.99 139.039 1201.99 137.014 1204.48 137 1206.96 136.987 1208.99 138.99 1209 141.475 1209.01 143.961 1207.01 145.986 1204.52 146 1202.04 146.014 1200.01 144.01 1200 141.525Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.49997-0.0091365 1.76842 44.0635-1.23152 44.0818-1.49997 0.0091365ZM-4.49992 0.0274095C-4.51505-2.45783-2.51265-4.48478-0.0274095-4.49992 2.45783-4.51505 4.48478-2.51265 4.49992-0.0274095 4.51505 2.45783 2.51265 4.48478 0.0274095 4.49992-2.45783 4.51505-4.48478 2.51265-4.49992 0.0274095Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 978.5 272.573)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(734.929 222)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(742.095 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(745.595 222)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(752.095 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(755.595 222)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(145.728 181)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(149.228 181)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(152.728 181)"
                        >
                            СШ 110 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(150.077 285)"
                        >
                            ОСШ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(175.743 285)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(179.243 285)"
                        >
                            110кВ
                        </text>
                        <rect
                            id="c253"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 382.5 401.5)"
                        />
                        <path
                            d="M0 0 0.243465 16.6785"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 392.5 418.179)"
                        />
                        <path
                            d="M240.435 382.096 240.167 364.52 242.833 364.48 243.102 382.055ZM237.501 364.561C237.467 362.352 239.23 360.534 241.439 360.501 243.648 360.467 245.466 362.23 245.5 364.439 245.533 366.648 243.77 368.466 241.561 368.5 239.352 368.533 237.534 366.77 237.501 364.561Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M0 0 0.000104987 25.5427"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 241.5 421.043)"
                        />
                        <path
                            d="M1.33333-7.42316e-06 1.33344 18.8575-1.33323 18.8575-1.33333 7.42316e-06ZM-4 2.22695e-05C-4.00001-2.20912-2.20916-3.99999-2.22695e-05-4 2.20912-4.00001 3.99999-2.20916 4-2.22695e-05 4.00001 2.20912 2.20916 3.99999 2.22695e-05 4-2.20912 4.00001-3.99999 2.20916-4 2.22695e-05Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 1067.5 364.358)"
                        />
                        <path
                            d="M1068.19 423.281 1067.5 365.5"
                            stroke="#6600CC"
                            stroke-width="2.66667"
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
                            font-size="19"
                            transform="translate(542.105 24)"
                        >
                            ТЎПОЛАНГ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(654.678 24)"
                        >
                            ГЭС (ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(741.512 24)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(747.678 24)"
                        >
                            34)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(97.954 356)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(101.454 356)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(104.954 356)"
                        >
                            СШ 10.5 кВ
                        </text>
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c6132"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#767171"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 689.5 477.5)"
                            />
                            <path id="c6131"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 690.5 451.5)"
                            />
                        </a>
                        <path
                            d="M1.33327-0.0129357 1.66062 33.727-1.00592 33.7529-1.33327 0.0129357ZM6.07435 26.3557 0.353026 36.386-5.56184 26.4686C-5.93903 25.8361-5.73212 25.0177-5.09968 24.6405-4.46724 24.2633-3.64877 24.4702-3.27157 25.1026L1.47249 33.057-0.830816 33.0793 3.75802 25.0344C4.12287 24.3948 4.93717 24.172 5.57681 24.5369 6.21645 24.9018 6.43921 25.7161 6.07435 26.3557Z"
                            fill="#767171"
                            transform="matrix(-1 0 0 1 705.853 477.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 704.5 368.5)"
                        />
                        <rect
                            id="c293"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 232.5 401.5)"
                        />
                        <rect
                            id="c133"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1058.5 407.5)"
                        />
                        <a href="<?= $urlTransformer1 ?>">
                            <path
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1051.5 345.5)"
                            />
                            <path
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1051.5 320.5)"
                            />
                        </a>
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 1176.5 231.5)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 969.5 228.5)"
                        />
                        <rect
                            id="c14"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 529.5 227.5)"
                        />
                        <path
                            d="M351.528 365.326 350.834 343.036 353.166 342.964 353.86 365.254ZM356.692 365.165C356.76 367.374 355.026 369.219 352.818 369.288 350.61 369.357 348.764 367.622 348.696 365.414 348.627 363.206 350.361 361.361 352.569 361.292 354.777 361.223 356.623 362.957 356.692 365.165Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M340.738 285.149 340.5 277.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(361.168 221)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(368.334 221)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(371.834 221)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(378.334 221)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(381.834 221)"
                        >
                            3
                        </text>

                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1087.75 400)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1094.92 400)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1098.42 400)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1104.58 400)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1108.08 400)"
                        >
                            1
                        </text>
                        <path
                            d="M842.435 384.86 842.167 366.52 844.833 366.481 845.102 384.821ZM839.5 366.559C839.468 364.35 841.233 362.533 843.442 362.5 845.65 362.468 847.467 364.233 847.5 366.442 847.532 368.65 845.767 370.467 843.559 370.5 841.35 370.532 839.533 368.767 839.5 366.559Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M844.525 419.604 844.5 402.5"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <rect
                            id="c173"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 834.5 403.5)"
                        />
                        <a href="<?= $urlTransformer2 ?>">
                            <path
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 792.5 320.5)"
                            />
                            <path
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 792.5 347.5)"
                            />
                        </a>
                        <path
                            d="M0 0 185.822 0.000104987"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1217.32 364.5)"
                        />
                        <path
                            d="M864.786 366.5 684.5 366.5"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />

                        <path
                            d="M1.16667-5.58478e-06 1.16677 21.9319-1.16656 21.9319-1.16667 5.58478e-06ZM-4 1.91478e-05C-4.00001-2.20912-2.20916-3.99999-1.91478e-05-4 2.20912-4.00001 3.99999-2.20916 4-1.91478e-05 4.00001 2.20912 2.20916 3.99999 1.91478e-05 4-2.20912 4.00001-3.99999 2.20916-4 1.91478e-05Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 329 364.932)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(995.372 221)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1002.54 221)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1006.04 221)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1012.54 221)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1016.04 221)"
                        >
                            1
                        </text>
                        <path
                            d="M1221.19 273.139 151.5 272.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M977.883 211.182 977.001 187.556 979.999 187.444 980.881 211.07ZM974.003 187.668C973.911 185.184 975.849 183.096 978.332 183.003 980.816 182.911 982.904 184.849 982.997 187.332 983.09 189.816 981.151 191.904 978.668 191.997 976.184 192.09 974.096 190.151 974.003 187.668Z"
                            fill="#0099FF"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(147.088 155)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(154.088 155)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(157.588 155)"
                        >
                            СШ 110 кВ
                        </text>
                        <path
                            d="M1.49992-0.0157141 1.96165 44.0569-1.03819 44.0884-1.49992 0.0157141ZM-4.49975 0.0471422C-4.52579-2.438-2.53229-4.47372-0.0471422-4.49975 2.438-4.52579 4.47372-2.53229 4.49975-0.0471422 4.52579 2.438 2.53229 4.47372 0.0471422 4.49975-2.438 4.52579-4.47372 2.53229-4.49975 0.0471422Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 538.5 271.573)"
                        />
                        <path
                            d="M513.513 240 538.267 240.212 538.241 243.212 513.487 243ZM538.293 237.213C540.778 237.234 542.775 239.266 542.754 241.751 542.732 244.236 540.701 246.234 538.215 246.212 535.73 246.191 533.733 244.159 533.754 241.674 533.775 239.189 535.807 237.191 538.293 237.213Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.5-0.00147783 1.52845 28.8768-1.47155 28.8798-1.5 0.00147783ZM4.52845 28.8739C4.5309 31.3592 2.51817 33.3759 0.0328849 33.3783-2.4524 33.3808-4.4691 31.368-4.47155 28.8828-4.47399 26.3975-2.46126 24.3808 0.024018 24.3783 2.5093 24.3759 4.526 26.3886 4.52845 28.8739Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 867.5 215.378)"
                        />
                        <rect
                            id="c54"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 858.5 228.5)"
                        />
                        <path
                            d="M1.49997-0.0090851 1.76832 44.2956-1.23163 44.3138-1.49997 0.0090851ZM-4.49992 0.0272553C-4.51497-2.45798-2.51249-4.48486-0.0272553-4.49992 2.45798-4.51497 4.48486-2.51249 4.49992-0.0272553 4.51497 2.45798 2.51249 4.48486 0.0272553 4.49992-2.45798 4.51497-4.48486 2.51249-4.49992 0.0272553Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 867.5 272.805)"
                        />
                        <path
                            d="M842.5 240 867.46 240 867.46 243 842.5 243ZM867.46 237C869.945 237 871.96 239.015 871.96 241.5 871.96 243.985 869.945 246 867.46 246 864.974 246 862.96 243.985 862.96 241.5 862.96 239.015 864.974 237 867.46 237Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1163.5 220.5 1176.98 220.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 12.0031 0.0334908"
                            stroke="#4472C4"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1194.5 221.534)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1161.47 244)"
                        >
                            МСВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1185.31 244)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1188.81 244)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1207.47 244)"
                        >
                            кВ
                        </text>
                        <path
                            d="M978.502 248 1068.52 248.136 1068.51 251.136 978.498 251ZM978.493 254C976.008 253.996 973.996 251.979 974 249.493 974.004 247.008 976.022 244.996 978.507 245 980.992 245.004 983.004 247.022 983 249.507 982.996 251.992 980.979 254.004 978.493 254Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M0 0 0.000104987 18.5174"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1066.5 267.017)"
                        />
                        <path
                            d="M1.49997-0.0091365 1.76842 44.0635-1.23152 44.0818-1.49997 0.0091365ZM-4.49992 0.0274095C-4.51505-2.45783-2.51265-4.48478-0.0274095-4.49992 2.45783-4.51505 4.48478-2.51265 4.49992-0.0274095 4.51505 2.45783 2.51265 4.48478 0.0274095 4.49992-2.45783 4.51505-4.48478 2.51265-4.49992 0.0274095Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 722.5 272.573)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 713.5 228.5)"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 722.5 179.219)"
                        />
                        <path
                            d="M0.00406978-1.49999 88.0737-1.26104 88.0655 1.73894-0.00406978 1.49999ZM-0.0122093 4.49998C-2.49748 4.49324-4.50673 2.47306-4.49998-0.0122093-4.49324-2.49748-2.47306-4.50673 0.0122093-4.49998 2.49748-4.49324 4.50673-2.47306 4.49998 0.0122093 4.49324 2.49748 2.47306 4.50673-0.0122093 4.49998Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 722.5 250.739)"
                        />
                        <path
                            d="M1.49997-0.00913648 1.76842 44.0636-1.23152 44.0819-1.49997 0.00913648ZM-4.49992 0.0274094C-4.51505-2.45783-2.51264-4.48478-0.0274094-4.49992 2.45783-4.51505 4.48478-2.51264 4.49992-0.0274094 4.51505 2.45783 2.51264 4.48478 0.0274094 4.49992-2.45783 4.51505-4.48478 2.51264-4.49992 0.0274094Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 404.5 270.573)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 395.5 226.5)"
                        />
                        <path
                            d="M403.419 208.419 403 185.527 406 185.473 406.418 208.364ZM400.001 185.582C399.955 183.097 401.933 181.046 404.418 181.001 406.903 180.955 408.954 182.933 408.999 185.418 409.045 187.903 407.067 189.954 404.582 189.999 402.097 190.045 400.046 188.067 400.001 185.582Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M0.0168071-1.49991 64.159-0.781166 64.1253 2.21865-0.0168071 1.49991ZM64.1926-3.78098C66.6777-3.75313 68.6697-1.71596 68.6419 0.769161 68.614 3.25429 66.5769 5.2463 64.0917 5.21846 61.6066 5.19061 59.6146 3.15344 59.6424 0.668319 59.6703-1.81681 61.7074-3.80882 64.1926-3.78098Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 340.5 252.219)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(865.444 395)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(872.611 395)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(876.111 395)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(882.277 395)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(885.777 395)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(349.596 393)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(356.763 393)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(360.263 393)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(366.43 393)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(369.93 393)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(140 393)"
                        >
                            В-ТСН-4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(261.078 393)"
                        >
                            В-Г-4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(510 393)"
                        >
                            В-ТСН-5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(610 393)"
                        >
                            В-ТСН-3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(390.726 360)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(397.726 360)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(401.226 360)"
                        >
                            СШ 10.5 кВ
                        </text>
                        <path
                            d="M1.49997-0.0091365 1.76842 44.0635-1.23152 44.0818-1.49997 0.0091365ZM-4.49992 0.0274095C-4.51505-2.45783-2.51265-4.48478-0.0274095-4.49992 2.45783-4.51505 4.48478-2.51265 4.49992-0.0274095 4.51505 2.45783 2.51265 4.48478 0.0274095 4.49992-2.45783 4.51505-4.48478 2.51265-4.49992 0.0274095Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1130.5 273.573)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 1120.5 229.5)"
                        />
                        <path
                            d="M1.5-9.39785e-06 1.5001 16.757-1.49989 16.7571-1.5 9.39785e-06ZM4.5001 16.757C4.50012 19.2423 2.48541 21.257 0.00013318 21.2571-2.48515 21.2571-4.49988 19.2424-4.4999 16.7571-4.49991 14.2718-2.4852 12.2571 7.67933e-05 12.2571 2.48536 12.257 4.50009 14.2717 4.5001 16.757Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1116.5 201.257)"
                        />
                        <path
                            d="M1116.5 200 1129.98 200 1129.98 203 1116.5 203ZM1129.98 197C1132.46 197 1134.48 199.015 1134.48 201.5 1134.48 203.985 1132.46 206 1129.98 206 1127.49 206 1125.48 203.985 1125.48 201.5 1125.48 199.015 1127.49 197 1129.98 197Z"
                            fill="#0099FF"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1072.13 221)"
                        >
                            ОВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1086.96 221)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1090.46 221)"
                        >
                            110кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="16"
                            transform="translate(55.7206 194)"
                        >
                            ОРУ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="16"
                            transform="translate(93.3206 194)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="16"
                            transform="translate(120.441 194)"
                        >
                            кВ
                        </text>
                        <path
                            d="M340.772 266.559C343.504 266.116 346.045 268.194 346.447 271.199 346.849 274.204 344.96 276.999 342.228 277.441 341.727 277.523 341.218 277.519 340.718 277.432"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M340.81 266.313 340.5 250.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 1.32094 10.5025"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 808.5 290.003)"
                        />
                        <path
                            d="M0 0 0.000104987 18.2635"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 809.5 267.764)"
                        />
                        <path
                            d="M513.558 241.616 513.5 192.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M514.206 180.563C517.211 180.084 520.004 182.354 520.442 185.633 520.881 188.912 518.8 191.958 515.795 192.437 515.248 192.524 514.692 192.521 514.146 192.427"
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
                            transform="matrix(1 0 0 -1 513.5 180.141)"
                        />
                        <path
                            d="M514.772 135.559C517.504 135.116 520.045 137.194 520.447 140.199 520.849 143.204 518.96 145.999 516.228 146.441 515.727 146.523 515.218 146.519 514.718 146.432"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-3.54253e-06 1.50009 38.4542-1.49991 38.4542-1.5 3.54253e-06ZM9.08167e-05 38.4542 4.50008 35.4542 0.000104987 44.4542-4.49992 35.4542Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 514.5 134.954)"
                        />
                        <path
                            d="M842.558 241.616 842.5 192.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M842.271 181.549C845.281 181.146 848.049 183.26 848.451 186.271 848.854 189.281 846.74 192.049 843.73 192.451 843.227 192.519 842.718 192.516 842.216 192.444"
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
                            transform="matrix(1 0 0 -1 842.5 181.141)"
                        />
                        <path
                            d="M842.707 135.576C845.434 135.051 847.999 137.277 848.437 140.549 848.875 143.821 847.019 146.899 844.293 147.424 843.748 147.529 843.192 147.525 842.648 147.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-3.54253e-06 1.50009 38.4542-1.49991 38.4542-1.5 3.54253e-06ZM9.08167e-05 38.4542 4.50008 35.4542 0.000104987 44.4542-4.49992 35.4542Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 842.5 135.954)"
                        />
                        <path
                            d="M722.271 179.549C725.281 179.146 728.049 181.26 728.451 184.271 728.854 187.281 726.74 190.049 723.73 190.451 723.227 190.519 722.718 190.516 722.216 190.444"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M722.585 209.861 722.5 189.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 1129.5 179.219)"
                        />
                        <path
                            d="M1130.27 179.549C1133.28 179.146 1136.05 181.26 1136.45 184.271 1136.85 187.281 1134.74 190.049 1131.73 190.451 1131.23 190.519 1130.72 190.516 1130.22 190.444"
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
                            transform="matrix(1 0 0 -1 1130.5 209.861)"
                        />
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 538.5 179.219)"
                        />
                        <path
                            d="M538.772 179.559C541.504 179.116 544.045 181.194 544.447 184.199 544.849 187.204 542.96 189.999 540.228 190.441 539.727 190.523 539.218 190.519 538.718 190.432"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M538.865 208.661 538.5 190.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlTransformer7 ?>">
                            <path id="c4132"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#767171"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 478.5 476.5)"
                            />
                            <path id="c4131"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 478.5 450.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.15811 48.3579"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 494.5 416.858)"
                        />
                        <path
                            d="M1.33327-0.01308 1.68133 35.4658-0.985204 35.4919-1.33327 0.01308ZM6.09427 28.094 0.374024 38.1249-5.54192 28.2081C-5.91918 27.5757-5.71235 26.7572-5.07995 26.38-4.44755 26.0027-3.62906 26.2095-3.2518 26.8419L1.49312 34.7958-0.810176 34.8184 3.77779 26.773C4.14257 26.1333 4.95684 25.9104 5.59652 26.2752 6.2362 26.64 6.45905 27.4543 6.09427 28.094Z"
                            fill="#767171"
                            transform="matrix(-1 0 0 1 494.874 476.5)"
                        />
                        <path
                            d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 492.5 368.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(881.132 222)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(888.299 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(891.799 222)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(899.799 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(903.299 222)"
                        >
                            34
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(913.965 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(917.465 222)"
                        >
                            З
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(923.132 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(926.632 222)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(553.819 222)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(560.986 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(564.486 222)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(572.486 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(575.986 222)"
                        >
                            34
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(586.653 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(590.153 222)"
                        >
                            З
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(595.819 222)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(599.319 222)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1019.75 427)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1026.59 427)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1030.09 427)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1000.75 440)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1022.09 440)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(991.753 453)"
                        >
                            72,5 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(967.92 466)"
                        >
                            СВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(982.753 466)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(986.253 466)"
                        >
                            480/178
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1021.25 466)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1024.75 466)"
                        >
                            16
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(869.359 425)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(876.192 425)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(879.692 425)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(869.359 438)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(890.692 438)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(869.359 451)"
                        >
                            72,5 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(869.359 464)"
                        >
                            СВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(884.192 464)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(887.692 464)"
                        >
                            480/178
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(922.692 464)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(926.192 464)"
                        >
                            16
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1028.95 302)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1036.12 302)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1039.62 302)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(993.95 315)"
                        >
                            110/10,5кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(991.617 328)"
                        >
                            125000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1026.28 328)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1022.12 341)"
                        >
                            ТДЦ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(772.545 308)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(779.712 308)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(783.212 308)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(737.545 321)"
                        >
                            110/10,5кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(735.212 334)"
                        >
                            125000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(769.878 334)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(765.712 347)"
                        >
                            ТДЦ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(283.633 296)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(290.8 296)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(294.3 296)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(248.633 309)"
                        >
                            110/10,5кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(251.633 322)"
                        >
                            40000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(280.967 322)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(270.3 335)"
                        >
                            ТРДН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(344.305 425)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(351.138 425)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(354.638 425)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(325.305 438)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(346.638 438)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(324.305 451)"
                        >
                            15 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(297.805 464)"
                        >
                            СВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(312.638 464)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(316.138 464)"
                        >
                            271/140
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(351.138 464)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(354.638 464)"
                        >
                            8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(195.294 425)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(202.128 425)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(205.628 425)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(176.294 438)"
                        >
                            10,5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(197.628 438)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(175.294 451)"
                        >
                            15 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(148.794 464)"
                        >
                            СВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(163.628 464)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(167.128 464)"
                        >
                            271/140
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(202.128 464)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(205.628 464)"
                        >
                            8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1192.92 434)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1216.09 434)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1219.59 434)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1192.92 447)"
                        >
                            10,5/0,4кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1192.92 460)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1211.59 460)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1192.92 473)"
                        >
                            ТСЗ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(614.966 432)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(638.132 432)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(641.632 432)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(614.966 445)"
                        >
                            10,5/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(652.632 445)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(614.966 458)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(633.632 458)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(614.966 471)"
                        >
                            ТСЗ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(726.246 432)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(749.413 432)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(752.913 432)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(726.246 445)"
                        >
                            10,5/0,4кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(726.246 458)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(744.913 458)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(726.246 471)"
                        >
                            ТСЗ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(511.994 431)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(535.16 431)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(538.66 431)"
                        >
                            5
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(511.994 444)"
                        >
                            10,5/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(549.66 444)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(511.994 457)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(530.66 457)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(511.994 470)"
                        >
                            ТСЗ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(65.4445 423)"
                        >
                            ТСН-4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(46.4445 436)"
                        >
                            10,5/0,4 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(60.1111 449)"
                        >
                            630 кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(76.9445 462)"
                        >
                            ТСЗ
                        </text>
                        <path
                            d="M194.595 484.75 287.704 484.75 287.704 497.55 194.595 497.55Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M194.595 497.55 287.704 497.55 287.704 510.35 194.595 510.35Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M194.595 510.35 287.704 510.35 287.704 523.15 194.595 523.15Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M194.595 523.15 287.704 523.15 287.704 535.95 194.595 535.95Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M194.595 535.95 287.704 535.95 287.704 548.75 194.595 548.75Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M194.595 548.75 287.704 548.75 287.704 561.55 194.595 561.55Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M193.929 497.55 288.37 497.55"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M193.929 510.35 288.37 510.35"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M193.929 523.15 288.37 523.15"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M193.929 535.95 288.37 535.95"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M193.929 548.75 288.37 548.75"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M194.595 484.083 194.595 562.217"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M287.704 484.083 287.704 562.217"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M193.929 484.75 288.37 484.75"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M193.929 561.55 288.37 561.55"
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
                                transform="translate(198.375 495)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g295"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(198.375 508)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a293"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(198.375 520)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k293"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(198.375 533)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n293"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(198.375 546)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w293" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(198.375 559)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M342.295 484.418 435.403 484.418 435.403 497.218 342.295 497.218Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.295 497.218 435.403 497.218 435.403 510.018 342.295 510.018Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.295 510.018 435.403 510.018 435.403 522.818 342.295 522.818Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.295 522.818 435.403 522.818 435.403 535.618 342.295 535.618Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.295 535.618 435.403 535.618 435.403 548.418 342.295 548.418Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.295 548.418 435.403 548.418 435.403 561.218 342.295 561.218Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M341.628 497.218 436.069 497.218"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M341.628 510.018 436.069 510.018"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M341.628 522.818 436.069 522.818"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M341.628 535.618 436.069 535.618"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M341.628 548.418 436.069 548.418"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.295 483.751 342.295 561.885"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M435.403 483.751 435.403 561.885"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M341.628 484.418 436.069 484.418"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M341.628 561.218 436.069 561.218"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g253"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.074 494)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g255"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.074 507)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a253"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.074 520)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k253"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.074 533)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n253"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.074 546)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w253" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.074 558)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M796.942 481.793 905.333 481.793 905.333 494.593 796.942 494.593Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.942 494.593 905.333 494.593 905.333 507.393 796.942 507.393Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.942 507.393 905.333 507.393 905.333 520.193 796.942 520.193Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.942 520.193 905.333 520.193 905.333 532.993 796.942 532.993Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.942 532.993 905.333 532.993 905.333 545.793 796.942 545.793Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.942 545.793 905.333 545.793 905.333 558.593 796.942 558.593Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.275 494.593 906 494.593"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.275 507.393 906 507.393"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.275 520.193 906 520.193"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.275 532.993 906 532.993"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.275 545.793 906 545.793"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.942 481.127 796.942 559.26"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M905.333 481.127 905.333 559.26"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.275 481.793 906 481.793"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M796.275 558.593 906 558.593"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g173"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.721 492)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g175"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.721 505)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a173"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.721 517)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k173"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.721 530)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n173"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.721 543)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w173" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(800.721 556)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M1020.94 481.238 1129.33 481.238 1129.33 494.038 1020.94 494.038Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.94 494.038 1129.33 494.038 1129.33 506.838 1020.94 506.838Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.94 506.838 1129.33 506.838 1129.33 519.638 1020.94 519.638Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.94 519.638 1129.33 519.638 1129.33 532.438 1020.94 532.438Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.94 532.438 1129.33 532.438 1129.33 545.238 1020.94 545.238Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.94 545.238 1129.33 545.238 1129.33 558.038 1020.94 558.038Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.27 494.038 1130 494.038"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.27 506.838 1130 506.838"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.27 519.638 1130 519.638"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.27 532.438 1130 532.438"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.27 545.238 1130 545.238"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.94 480.571 1020.94 558.705"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1129.33 480.571 1129.33 558.705"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.27 481.238 1130 481.238"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1020.27 558.038 1130 558.038"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g133"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1024.72 491)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g135"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1024.72 504)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a133"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1024.72 517)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k133"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1024.72 530)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n133"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1024.72 542)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w133" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1024.72 555)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M670.669 524.656 744.315 524.656 744.315 538.39 670.669 538.39Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M670.669 523.99 670.669 539.056"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M744.315 523.99 744.315 539.056"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M670.002 524.656 744.982 524.656"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M670.002 538.39 744.982 538.39"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g613"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(674.448 535)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M556.683 524.839 630.33 524.839 630.33 538.573 556.683 538.573Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M556.683 524.173 556.683 539.239"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M630.33 524.173 630.33 539.239"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M556.016 524.839 630.996 524.839"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M556.016 538.573 630.996 538.573"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g333"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(560.462 535)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M460.942 524.84 534.589 524.84 534.589 538.573 460.942 538.573Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M460.942 524.173 460.942 539.24"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M534.589 524.173 534.589 539.24"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M460.275 524.84 535.255 524.84"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M460.275 538.573 535.255 538.573"
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
                                transform="translate(464.721 535)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M87.0738 515.405 160.721 515.405 160.721 529.138 87.0738 529.138Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M87.0738 514.738 87.0738 529.805"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.721 514.738 160.721 529.805"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M86.4071 515.405 161.387 515.405"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M86.4071 529.138 161.387 529.138"
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
                                transform="translate(90.8533 525)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M1150.84 522.308 1224.49 522.308 1224.49 536.041 1150.84 536.041Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1150.84 521.641 1150.84 536.708"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1224.49 521.641 1224.49 536.708"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1150.18 522.308 1225.16 522.308"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1150.18 536.041 1225.16 536.041"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g573"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1154.62 532)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M156.677 252.146 245.909 252.146 245.909 264.946 156.677 264.946Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M156.677 251.48 156.677 265.613"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M245.909 251.48 245.909 265.613"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M156.011 252.146 246.576 252.146"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M156.011 264.946 246.576 264.946"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g83"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(160.457 262)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M158.185 192.6 247.417 192.6 247.417 205.4 158.185 205.4Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M158.185 191.933 158.185 206.067"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M247.417 191.933 247.417 206.067"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.519 192.6 248.084 192.6"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.519 205.4 248.084 205.4"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g43"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(161.965 203)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M158.185 122.338 247.417 122.338 247.417 135.138 158.185 135.138Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M158.185 121.672 158.185 135.805"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M247.417 121.672 247.417 135.805"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.519 122.338 248.084 122.338"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M157.519 135.138 248.084 135.138"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g3"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(161.965 132)"
                            >
                                U
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(480.914 84)"
                        >
                            Л-34-Зарчоб-1
                        </text>
                        <path
                            d="M477.727 42.8381 561.327 42.8381 561.327 56.4293 477.727 56.4293Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M477.727 56.4293 561.327 56.4293 561.327 70.0205 477.727 70.0205Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M477.061 56.4293 561.994 56.4293"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M477.727 42.1714 477.727 70.6871"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M561.327 42.1714 561.327 70.6871"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M477.061 42.8381 561.994 42.8381"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M477.061 70.0205 561.994 70.0205"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g13"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(481.507 53)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g14"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(481.507 66)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 553 44)"
                        >
                            <g clip-path="url(#clip2)" transform="scale(1.06061 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1151.37 1151.37)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip3)"
                            transform="matrix(0.000104987 0 0 0.000104987 554 57)"
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
                        <path
                            d="M800.498 42.5635 884.097 42.5635 884.097 56.1546 800.498 56.1546Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.498 56.1546 884.097 56.1546 884.097 69.7458 800.498 69.7458Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M799.831 56.1546 884.764 56.1546"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M800.498 41.8968 800.498 70.4125"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M884.097 41.8968 884.097 70.4125"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M799.831 42.5635 884.764 42.5635"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M799.831 69.7458 884.764 69.7458"
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
                                transform="translate(804.277 53)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g54"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(804.277 66)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip6)"
                            transform="matrix(0.000104987 0 0 0.000104987 876 43)"
                        >
                            <g clip-path="url(#clip7)" transform="matrix(1 0 0 1.02857 0 -0.03125)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 876 57)"
                        >
                            <g clip-path="url(#clip9)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(807.949 85)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(815.949 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(819.449 85)"
                        >
                            34
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(830.116 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(833.616 85)"
                        >
                            3арчоб
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(866.949 85)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(870.449 85)"
                        >
                            2
                        </text>
                        <rect
                            id="c413"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 485.5 401.5)"
                        />
                        <a href="<?= $urlTransformer6 ?>">
                            <path id="c3332"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#767171"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 576.5 477.5)"
                            />
                            <path id="c3331"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 576.5 450.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.15811 48.3579"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 593.5 416.858)"
                        />
                        <path
                            d="M1.33327-0.01308 1.68133 35.4658-0.985204 35.4919-1.33327 0.01308ZM6.09427 28.094 0.374024 38.1249-5.54192 28.2081C-5.91918 27.5757-5.71235 26.7572-5.07995 26.38-4.44755 26.0027-3.62906 26.2095-3.2518 26.8419L1.49312 34.7958-0.810176 34.8184 3.77779 26.773C4.14257 26.1333 4.95684 25.9104 5.59652 26.2752 6.2362 26.64 6.45905 27.4543 6.09427 28.094Z"
                            fill="#767171"
                            transform="matrix(-1 0 0 1 593.874 477.5)"
                        />
                        <path
                            d="M0 2C-2.54627e-16 0.89543 0.89543 -2.54627e-16 2 -5.09253e-16 3.10457-1.01851e-15 4 0.89543 4 2 4 3.10457 3.10457 4 2 4 0.89543 4-1.27313e-15 3.10457 0 2Z"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 591.5 368.5)"
                        />
                        <rect
                            id="c333"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 583.5 401.5)"
                        />
                        <path
                            d="M808.206 267.563C811.211 267.084 814.004 269.354 814.442 272.633 814.881 275.912 812.8 278.958 809.795 279.437 809.248 279.524 808.692 279.521 808.146 279.427"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M707.623 417.371 707.5 368.5"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.33333-2.64181e-06 1.33344 52.9874-1.33323 52.9874-1.33333 2.64181e-06ZM4.0001 52.9874C4.00011 55.1965 2.20925 56.9874 0.000112912 56.9874-2.20903 56.9874-3.99989 55.1965-3.99989 52.9874-3.9999 50.7783-2.20904 48.9874 9.70614e-05 48.9874 2.20924 48.9874 4.0001 50.7783 4.0001 52.9874Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 1172.5 418.487)"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c5732"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#767171"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1156.5 478.5)"
                            />
                            <path id="c5731"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1156.5 452.5)"
                            />
                        </a>
                        <path
                            d="M1173.83 478.5 1173.83 508.832 1171.17 508.832 1171.17 478.5ZM1178.32 501.504 1172.5 511.479 1166.68 501.504C1166.31 500.868 1166.53 500.052 1167.16 499.681 1167.8 499.31 1168.61 499.524 1168.99 500.161L1173.65 508.161 1171.35 508.161 1176.02 500.16C1176.39 499.524 1177.2 499.31 1177.84 499.681 1178.47 500.052 1178.69 500.868 1178.32 501.504Z"
                            fill="#767171"
                        />
                        <a href="<?= $urlTransformer8 ?>">
                            <path id="c3732"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#767171"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 107.5 476.5)"
                            />
                            <path id="c3731"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 107.5 449.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.15811 48.3579"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 124.5 415.858)"
                        />
                        <path
                            d="M1.33327-0.01308 1.68133 35.4658-0.985204 35.4919-1.33327 0.01308ZM6.09427 28.094 0.374024 38.1249-5.54192 28.2081C-5.91918 27.5757-5.71235 26.7572-5.07995 26.38-4.44755 26.0027-3.62906 26.2095-3.2518 26.8419L1.49312 34.7958-0.810176 34.8184 3.77779 26.773C4.14257 26.1333 4.95684 25.9104 5.59652 26.2752 6.2362 26.64 6.45905 27.4543 6.09427 28.094Z"
                            fill="#767171"
                            transform="matrix(-1 0 0 1 123.874 476.5)"
                        />
                        <path
                            d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 121.5 367.5)"
                        />
                        <rect
                            id="c373"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#6600CC"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 114.5 400.5)"
                        />
                        <g
                            clip-path="url(#clip10)"
                            transform="matrix(0.000104987 0 0 0.000104987 153 516)"
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
                            transform="matrix(0.000104987 0 0 0.000104987 527 526)"
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
                            transform="matrix(0.000104987 0 0 0.000104987 623 526)"
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
                            transform="matrix(0.000104987 0 0 0.000104987 737 526)"
                        >
                            <g clip-path="url(#clip17)" transform="scale(1 1.02857)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 1217 523)"
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
                        <path
                            d="M806.167 366.449 806.167 347.5 808.833 347.5 808.833 366.449ZM811.5 366.449C811.5 368.658 809.709 370.449 807.5 370.449 805.291 370.449 803.5 368.658 803.5 366.449 803.5 364.24 805.291 362.449 807.5 362.449 809.709 362.449 811.5 364.24 811.5 366.449Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M1065.71 266.576C1068.43 266.051 1071 268.277 1071.44 271.549 1071.87 274.821 1070.02 277.899 1067.29 278.424 1066.75 278.529 1066.19 278.525 1065.65 278.412"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1066.5 289.571 1066.5 277.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path id="c2931"
                            d="M216.5 445C216.5 431.469 227.469 420.5 241 420.5 254.531 420.5 265.5 431.469 265.5 445 265.5 458.531 254.531 469.5 241 469.5 227.469 469.5 216.5 458.531 216.5 445Z"
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
                                        d="M240.689 438.933 241.622 438.933 242.944 439.167 244.033 439.633 244.889 440.178 245.9 441.189 246.522 442.122 246.989 443.367 247.144 444.067 247.144 445.933 246.833 447.1 246.211 448.344 245.589 449.122 245.044 449.667 243.956 450.367 242.711 450.833 241.933 450.989 240.378 450.989 239.133 450.678 238.278 450.289 237.422 449.744 236.567 448.967 236.022 448.189 235.478 447.1 235.167 445.856 235.089 444.922 235.244 443.678 235.556 442.667 236.178 441.5 237.033 440.567 237.656 440.022 238.978 439.322 240.144 439.011Z"
                                    />
                                    <path
                                        d="M241.156 425.089 242.011 425.089 243.489 425.322 244.967 425.789 246.211 426.411 247.144 427.033 247.922 427.733 248.856 428.667 249.711 429.911 250.333 431.156 250.8 432.556 251.033 433.722 251.111 434.344 251.111 435.822 250.878 437.3 250.489 438.622 249.867 439.944 249.089 441.033 248.933 441.033 248.311 439.944 247.378 438.856 246.522 438.078 245.433 437.378 244.267 436.833 242.944 436.444 241.156 436.211Z"
                                    />
                                    <path
                                        d="M228.4 440.878 228.789 440.956 230.967 442.2 232.522 443.133 232.6 443.289 232.444 444.922 232.6 446.556 232.989 448.033 233.533 449.2 233.533 449.433 231.356 450.678 229.489 451.767 225.444 454.1 224.122 454.878 223.889 454.878 223.189 453.4 222.8 452.078 222.644 451.144 222.567 449.822 222.722 448.344 222.956 447.256 223.5 445.778 224.044 444.767 224.744 443.756 225.678 442.744 226.533 441.967 227.933 441.111Z"
                                    />
                                    <path
                                        d="M248.7 449.433 249.089 449.511 250.956 450.6 257.022 454.1 258.344 454.878 258.189 455.267 257.644 456.044 256.944 456.9 256.4 457.444 255.233 458.3 253.989 459 252.511 459.544 251.344 459.778 250.878 459.856 248.544 459.856 247.378 459.622 246.133 459.233 244.811 458.611 243.878 457.989 243.878 453.322 244.578 453.011 245.9 452.311 246.833 451.611 247.922 450.522Z"
                                    />
                                    <path
                                        d="M231.667 430.067 233.378 430.067 234.856 430.3 236.489 430.844 237.811 431.544 238.433 431.933 238.433 436.678 237.033 437.3 235.944 438 235.089 438.7 234.544 439.244 233.611 440.567 233.144 440.411 231.822 439.633 225.756 436.133 224.044 435.122 223.967 434.967 224.511 434.111 225.367 433.1 225.989 432.478 227.156 431.622 228.244 431 229.722 430.456 230.578 430.222Z"
                                    />
                                    <path
                                        d="M235.167 451.533 235.478 451.611 236.644 452.467 237.967 453.089 239.211 453.478 240.144 453.633 241.078 453.711 241.156 453.789 241.156 464.833 239.989 464.833 238.433 464.522 237.111 464.056 235.711 463.278 234.7 462.5 233.922 461.8 233.144 460.867 232.367 459.622 231.744 458.222 231.356 456.744 231.2 455.344 231.2 454.489 231.278 453.789 233.222 452.7 234.544 451.922Z"
                                    />
                                    <path
                                        d="M258.267 435.044 258.422 435.044 258.967 436.133 259.433 437.533 259.667 438.778 259.744 440.333 259.589 441.733 259.278 443.056 258.656 444.533 258.111 445.467 257.489 446.322 256.633 447.256 255.467 448.189 254.456 448.811 253.756 449.122 251.811 448.033 249.944 446.944 249.711 446.789 249.867 445.389 249.867 444.222 250.567 443.522 251.578 442.2 252.278 441.033 252.978 439.556 253.522 437.844 254.222 437.378 256.167 436.289 258.033 435.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c2531"
                            d="M368.5 443C368.5 429.469 379.469 418.5 393 418.5 406.531 418.5 417.5 429.469 417.5 443 417.5 456.531 406.531 467.5 393 467.5 379.469 467.5 368.5 456.531 368.5 443Z"
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
                                        d="M391.689 435.933 392.622 435.933 393.944 436.167 395.033 436.633 395.889 437.178 396.9 438.189 397.522 439.122 397.989 440.367 398.144 441.067 398.144 442.933 397.833 444.1 397.211 445.344 396.589 446.122 396.044 446.667 394.956 447.367 393.711 447.833 392.933 447.989 391.378 447.989 390.133 447.678 389.278 447.289 388.422 446.744 387.567 445.967 387.022 445.189 386.478 444.1 386.167 442.856 386.089 441.922 386.244 440.678 386.556 439.667 387.178 438.5 388.033 437.567 388.656 437.022 389.978 436.322 391.144 436.011Z"
                                    />
                                    <path
                                        d="M392.156 422.089 393.011 422.089 394.489 422.322 395.967 422.789 397.211 423.411 398.144 424.033 398.922 424.733 399.856 425.667 400.711 426.911 401.333 428.156 401.8 429.556 402.033 430.722 402.111 431.344 402.111 432.822 401.878 434.3 401.489 435.622 400.867 436.944 400.089 438.033 399.933 438.033 399.311 436.944 398.378 435.856 397.522 435.078 396.433 434.378 395.267 433.833 393.944 433.444 392.156 433.211Z"
                                    />
                                    <path
                                        d="M379.4 437.878 379.789 437.956 381.967 439.2 383.522 440.133 383.6 440.289 383.444 441.922 383.6 443.556 383.989 445.033 384.533 446.2 384.533 446.433 382.356 447.678 380.489 448.767 376.444 451.1 375.122 451.878 374.889 451.878 374.189 450.4 373.8 449.078 373.644 448.144 373.567 446.822 373.722 445.344 373.956 444.256 374.5 442.778 375.044 441.767 375.744 440.756 376.678 439.744 377.533 438.967 378.933 438.111Z"
                                    />
                                    <path
                                        d="M399.7 446.433 400.089 446.511 401.956 447.6 408.022 451.1 409.344 451.878 409.189 452.267 408.644 453.044 407.944 453.9 407.4 454.444 406.233 455.3 404.989 456 403.511 456.544 402.344 456.778 401.878 456.856 399.544 456.856 398.378 456.622 397.133 456.233 395.811 455.611 394.878 454.989 394.878 450.322 395.578 450.011 396.9 449.311 397.833 448.611 398.922 447.522Z"
                                    />
                                    <path
                                        d="M382.667 427.067 384.378 427.067 385.856 427.3 387.489 427.844 388.811 428.544 389.433 428.933 389.433 433.678 388.033 434.3 386.944 435 386.089 435.7 385.544 436.244 384.611 437.567 384.144 437.411 382.822 436.633 376.756 433.133 375.044 432.122 374.967 431.967 375.511 431.111 376.367 430.1 376.989 429.478 378.156 428.622 379.244 428 380.722 427.456 381.578 427.222Z"
                                    />
                                    <path
                                        d="M386.167 448.533 386.478 448.611 387.644 449.467 388.967 450.089 390.211 450.478 391.144 450.633 392.078 450.711 392.156 450.789 392.156 461.833 390.989 461.833 389.433 461.522 388.111 461.056 386.711 460.278 385.7 459.5 384.922 458.8 384.144 457.867 383.367 456.622 382.744 455.222 382.356 453.744 382.2 452.344 382.2 451.489 382.278 450.789 384.222 449.7 385.544 448.922Z"
                                    />
                                    <path
                                        d="M409.267 432.044 409.422 432.044 409.967 433.133 410.433 434.533 410.667 435.778 410.744 437.333 410.589 438.733 410.278 440.056 409.656 441.533 409.111 442.467 408.489 443.322 407.633 444.256 406.467 445.189 405.456 445.811 404.756 446.122 402.811 445.033 400.944 443.944 400.711 443.789 400.867 442.389 400.867 441.222 401.567 440.522 402.578 439.2 403.278 438.033 403.978 436.556 404.522 434.844 405.222 434.378 407.167 433.289 409.033 432.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c1731"
                            d="M819.5 444C819.5 430.469 830.469 419.5 844 419.5 857.531 419.5 868.5 430.469 868.5 444 868.5 457.531 857.531 468.5 844 468.5 830.469 468.5 819.5 457.531 819.5 444Z"
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
                                        transform="matrix(1.01205 0 0 1 842.689 437.506)"
                                    />
                                    <path
                                        d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                        transform="matrix(1.01205 0 0 1 843.156 423.826)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                        transform="matrix(1.01205 0 0 1 830.4 439.427)"
                                    />
                                    <path
                                        d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                        transform="matrix(1.01205 0 0 1 850.7 447.881)"
                                    />
                                    <path
                                        d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                        transform="matrix(1.01205 0 0 1 833.667 428.744)"
                                    />
                                    <path
                                        d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                        transform="matrix(1.01205 0 0 1 837.167 449.956)"
                                    />
                                    <path
                                        d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                        transform="matrix(1.01205 0 0 1 860.267 433.663)"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c1331"
                            d="M1042.5 446C1042.5 432.469 1053.47 421.5 1067 421.5 1080.53 421.5 1091.5 432.469 1091.5 446 1091.5 459.531 1080.53 470.5 1067 470.5 1053.47 470.5 1042.5 459.531 1042.5 446Z"
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
                                        d="M1065.69 438.933 1066.62 438.933 1067.94 439.167 1069.03 439.633 1069.89 440.178 1070.9 441.189 1071.52 442.122 1071.99 443.367 1072.14 444.067 1072.14 445.933 1071.83 447.1 1071.21 448.344 1070.59 449.122 1070.04 449.667 1068.96 450.367 1067.71 450.833 1066.93 450.989 1065.38 450.989 1064.13 450.678 1063.28 450.289 1062.42 449.744 1061.57 448.967 1061.02 448.189 1060.48 447.1 1060.17 445.856 1060.09 444.922 1060.24 443.678 1060.56 442.667 1061.18 441.5 1062.03 440.567 1062.66 440.022 1063.98 439.322 1065.14 439.011Z"
                                    />
                                    <path
                                        d="M1066.16 425.089 1067.01 425.089 1068.49 425.322 1069.97 425.789 1071.21 426.411 1072.14 427.033 1072.92 427.733 1073.86 428.667 1074.71 429.911 1075.33 431.156 1075.8 432.556 1076.03 433.722 1076.11 434.344 1076.11 435.822 1075.88 437.3 1075.49 438.622 1074.87 439.944 1074.09 441.033 1073.93 441.033 1073.31 439.944 1072.38 438.856 1071.52 438.078 1070.43 437.378 1069.27 436.833 1067.94 436.444 1066.16 436.211Z"
                                    />
                                    <path
                                        d="M1053.4 440.878 1053.79 440.956 1055.97 442.2 1057.52 443.133 1057.6 443.289 1057.44 444.922 1057.6 446.556 1057.99 448.033 1058.53 449.2 1058.53 449.433 1056.36 450.678 1054.49 451.767 1050.44 454.1 1049.12 454.878 1048.89 454.878 1048.19 453.4 1047.8 452.078 1047.64 451.144 1047.57 449.822 1047.72 448.344 1047.96 447.256 1048.5 445.778 1049.04 444.767 1049.74 443.756 1050.68 442.744 1051.53 441.967 1052.93 441.111Z"
                                    />
                                    <path
                                        d="M1073.7 449.433 1074.09 449.511 1075.96 450.6 1082.02 454.1 1083.34 454.878 1083.19 455.267 1082.64 456.044 1081.94 456.9 1081.4 457.444 1080.23 458.3 1078.99 459 1077.51 459.544 1076.34 459.778 1075.88 459.856 1073.54 459.856 1072.38 459.622 1071.13 459.233 1069.81 458.611 1068.88 457.989 1068.88 453.322 1069.58 453.011 1070.9 452.311 1071.83 451.611 1072.92 450.522Z"
                                    />
                                    <path
                                        d="M1056.67 430.067 1058.38 430.067 1059.86 430.3 1061.49 430.844 1062.81 431.544 1063.43 431.933 1063.43 436.678 1062.03 437.3 1060.94 438 1060.09 438.7 1059.54 439.244 1058.61 440.567 1058.14 440.411 1056.82 439.633 1050.76 436.133 1049.04 435.122 1048.97 434.967 1049.51 434.111 1050.37 433.1 1050.99 432.478 1052.16 431.622 1053.24 431 1054.72 430.456 1055.58 430.222Z"
                                    />
                                    <path
                                        d="M1060.17 451.533 1060.48 451.611 1061.64 452.467 1062.97 453.089 1064.21 453.478 1065.14 453.633 1066.08 453.711 1066.16 453.789 1066.16 464.833 1064.99 464.833 1063.43 464.522 1062.11 464.056 1060.71 463.278 1059.7 462.5 1058.92 461.8 1058.14 460.867 1057.37 459.622 1056.74 458.222 1056.36 456.744 1056.2 455.344 1056.2 454.489 1056.28 453.789 1058.22 452.7 1059.54 451.922Z"
                                    />
                                    <path
                                        d="M1083.27 435.044 1083.42 435.044 1083.97 436.133 1084.43 437.533 1084.67 438.778 1084.74 440.333 1084.59 441.733 1084.28 443.056 1083.66 444.533 1083.11 445.467 1082.49 446.322 1081.63 447.256 1080.47 448.189 1079.46 448.811 1078.76 449.122 1076.81 448.033 1074.94 446.944 1074.71 446.789 1074.87 445.389 1074.87 444.222 1075.57 443.522 1076.58 442.2 1077.28 441.033 1077.98 439.556 1078.52 437.844 1079.22 437.378 1081.17 436.289 1083.03 435.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <g
                            clip-path="url(#clip20)"
                            transform="matrix(0.000104987 0 0 0.000104987 1043 44)"
                        >
                            <g clip-path="url(#clip22)" transform="scale(1.01496 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img21"
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
                            d="M2.50005 525C2.50005 519.753 6.75335 515.5 12.0001 515.5 17.2468 515.5 21.5001 519.753 21.5001 525 21.5001 530.247 17.2468 534.5 12.0001 534.5 6.75335 534.5 2.50005 530.247 2.50005 525Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M2.50005 547C2.50005 541.753 6.75335 537.5 12.0001 537.5 17.2468 537.5 21.5001 541.753 21.5001 547 21.5001 552.247 17.2468 556.5 12.0001 556.5 6.75335 556.5 2.50005 552.247 2.50005 547Z"
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
                            transform="translate(27.0713 527)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(26.9886 549)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M2 502.5C2 497.253 6.25329 493 11.5 493 16.7467 493 21 497.253 21 502.5 21 507.747 16.7467 512 11.5 512 6.25329 512 2 507.747 2 502.5Z"
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
                            transform="translate(26.9886 505)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(27.2534 482)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(26.9887 459)"
                        >
                            прием
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 7 447)">
                            <g clip-path="url(#clip23)" transform="scale(1 1.07143)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 7 469)">
                            <g clip-path="url(#clip24)" transform="scale(1 1.07143)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <a href="<?= $urlTransformer3 ?>">
                            <path
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#6600CC"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 313.5 343.5)"
                            />
                            <path
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#0099FF"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 324.5 318.5)"
                            />
                            <path
                                    d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                    stroke="#6600CC"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FF0000"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 336.5 343.5)"
                            />
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

        // Add thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        fetch('/tupolang/server34', { signal: controller.signal })
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

                    if (item.id === 14) {
                        const value = document.getElementById("g14");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(14);
                        } else {
                            falseAnimation(14);
                        }
                    } else if(item.id === 13) {
                        const value = document.getElementById("g13");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(14);
                        } else {
                            falseAnimation(14);
                        }
                    } else if (item.id === 54) {
                        const value = document.getElementById("g54");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(54);
                        } else {
                            falseAnimation(54);
                        }
                    } else if(item.id === 53) {
                        const value = document.getElementById("g53");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(54);
                        } else {
                            falseAnimation(54);
                        }
                    } else if(item.id === 300) {
                        const value = document.getElementById("g3");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 43) {
                        const value = document.getElementById("g43");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 83) {
                        const value = document.getElementById("g83");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 373) {
                        const value = document.getElementById("g373");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(373);
                            trueAnimation(3731);
                            trueAnimation(3732);
                        } else {
                            falseAnimation(373);
                            falseAnimation(3731);
                            falseAnimation(3732);
                        }
                    } else if(item.id === 413) {
                        const value = document.getElementById("g413");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(413);
                            trueAnimation(4131);
                            trueAnimation(4132);
                        } else {
                            falseAnimation(413);
                            falseAnimation(4131);
                            falseAnimation(4132);
                        }
                    } else if(item.id === 333) {
                        const value = document.getElementById("g333");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(333);
                            trueAnimation(3331);
                            trueAnimation(3332);
                        } else {
                            falseAnimation(333);
                            falseAnimation(3331);
                            falseAnimation(3332);
                        }
                    } else if(item.id === 613) {
                        const value = document.getElementById("g613");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(6131);
                            trueAnimation(6132);
                        } else {
                            falseAnimation(6131);
                            falseAnimation(6132);
                        }
                    } else if(item.id === 573) {
                        const value = document.getElementById("g573");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(5731);
                            trueAnimation(5732);
                        } else {
                            falseAnimation(5731);
                            falseAnimation(5732);
                        }
                    }
                    //aggregate-4
                    else if(item.id === 293) {
                        const value = document.getElementById("g293");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a293");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 15 * 100, 1, ',', ' ') + " %";
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
                    //aggregate-3
                    else if(item.id === 253) {
                        const value = document.getElementById("g253");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a253");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 15 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(253);
                            trueAnimation(2531);
                        } else {
                            falseAnimation(253);
                            falseAnimation(2531);
                        }
                    } else if(item.id === 255) {
                        const value = document.getElementById("g255");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 256) {
                        const value = document.getElementById("k253");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 257) {
                        const value = document.getElementById("n253");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 258) {
                        const value = document.getElementById("w253");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //aggregate-2
                    else if(item.id === 173) {
                        const value = document.getElementById("g173");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a173");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 72.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(173);
                            trueAnimation(1731);
                        } else {
                            falseAnimation(173);
                            falseAnimation(1731);
                        }
                    } else if(item.id === 175) {
                        const value = document.getElementById("g175");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 176) {
                        const value = document.getElementById("k173");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 177) {
                        const value = document.getElementById("n173");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 178) {
                        const value = document.getElementById("w173");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //aggregate-1
                    else if(item.id === 133) {
                        const value = document.getElementById("g133");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a133");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 72.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(133);
                            trueAnimation(1331);
                        } else {
                            falseAnimation(133);
                            falseAnimation(1331);
                        }
                    } else if(item.id === 135) {
                        const value = document.getElementById("g135");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 136) {
                        const value = document.getElementById("k133");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 137) {
                        const value = document.getElementById("n133");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 138) {
                        const value = document.getElementById("w133");
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
                        value.textContent = "ВБ=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " м";
                    } else if(item.id === 9) {
                        const value = document.getElementById("water2");
                        value.textContent = "НБ=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " м";
                    } else if(item.id === 10) {
                        const value = document.getElementById("water3");
                        value.textContent = "Н=" + formatNumber(item.value, 2, ',', ' ').replace("-", "") + " м";
                    }

                })
                // if (c1 === 0 && c2 === 0 && c3 === 0 && c4 === 0){
                //     trueAnimation(1);
                //     trueAnimation(2);
                //     trueAnimation(3);
                //     trueAnimation(4);
                //     trueAnimation(5);
                //
                // } else {
                //     falseAnimation(1);
                //     falseAnimation(2);
                //     falseAnimation(3);
                //     falseAnimation(4);
                //     falseAnimation(5);
                // }
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