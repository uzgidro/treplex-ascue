<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$id = 24;

$this->title = 'ГЭС-6 Чорбоғ ГЭС';
$energy = new Energy();
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

$urlTransformer1 = $energy->getTransformer($id, 1);
$urlTransformer2 = $energy->getTransformer($id, 2);
$urlTransformer3 = $energy->getTransformer($id, 3);
$urlTransformer4 = $energy->getTransformer($id, 4);
$urlTransformer5 = $energy->getTransformer($id, 5);
$urlTransformer6 = $energy->getTransformer($id, 6);
$urlTransformer7 = $energy->getTransformer($id, 7);
$urlTransformer8 = $energy->getTransformer($id, 8);
$urlTransformer9 = $energy->getTransformer($id, 9);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);

?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-2">
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
                        <clipPath id="clip0">
                            <rect x="0" y="0" width="1181100" height="571500" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOpJREFUSEvt12sSgyAMBODYKiL4uv9pK7oKIcFeIN8vS3amlpWZSoXuw32xXukxznpMuAHTbMCEs5zlEstZLrGc5RLLWS6xnPpHzI2YZt5hdpgCRAxLEbMwE1b+oQUX72aigMs363GjvXZjlXODNnxoW85fTHJDOH/FyL1/c9yRU5oodUgdJixpAjKJW7EoxaI7oh2r0oYEtGoZMX94DLhUBKfXojyp9dtCgiI4+UDcRXBic6L+XiFqKYrgeC1iS7Jyc3gRXFlLVQSXN2fCSsO9ObII7q7leTZbrtOiFsGl06IXwTlfnAgg+gEGAhJwZdPnjwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img4"
                        ></image>
                        <clipPath id="clip5">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip6">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOtJREFUSEvt12sOhCAMBGCk4gtd9/6nXaujUCnsBfr9QpjEpCPJrit0nvqAdUtPRAPWDeMRI5rwVNWdMfIznivCcuUoYqNiRYxow45qQoh12FMEjwzrsakYELms2C1sCNw+2H+Z87eyRa+Fi5DU4VxFSMpwPjgSylqeIqRiOHIkyYhzyIuQRC2iCEkMJ2JTk9XyLkJ6ajluRIu/31wWIeG2aEVI521Ri5C4lkoR0vFB7Fi2jQ6Lf9weQRuOx1nMhh3K8QzqB/3FaaJfkHJAlmOWsxyznOWY5SzHLGc5NuM0qfzpev8QS/8WnPsBd6sckelqSMUAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img7"
                        ></image>
                        <clipPath id="clip8">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip9">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
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
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip16">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip17">
                            <rect x="0" y="0" width="85725" height="190500" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="85725" height="190500" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="-4.65661e-10" width="47625" height="114300" />
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
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip27">
                            <rect x="-1.86265e-09" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip28">
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
                        <path
                            d="M1186.5 189.5 1226.56 189.5"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 25.0035"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 258.5 347.504)"
                        />
                        <path
                            d="M0 0 0.000104987 11.7354"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 258.5 367.235)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(167.421 373)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(174.254 373)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(177.754 373)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(167.421 386)"
                        >
                            13,8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(188.754 386)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(167.421 399)"
                        >
                            168 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(167.421 412)"
                        >
                            СВ 850/235
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(219.921 412)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(223.421 412)"
                        >
                            32
                        </text>
                        <path
                            d="M0 0 0.516325 45.1028"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 259.016 322.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(202.517 190)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(209.684 190)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(213.184 190)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(866.633 191)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(873.799 191)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Tempus Sans ITC,Tempus Sans ITC_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(877.299 191)"
                        >
                            3
                        </text>
                        <path
                            d="M1060.5 335 1208.45 335 1208.45 338 1060.5 338ZM1060.5 341C1058.01 341 1056 338.985 1056 336.5 1056 334.015 1058.01 332 1060.5 332 1062.99 332 1065 334.015 1065 336.5 1065 338.985 1062.99 341 1060.5 341Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M101.5 334.167 258.643 334.167 258.643 336.833 101.5 336.833ZM258.643 331.5C260.852 331.5 262.643 333.291 262.643 335.5 262.643 337.709 260.852 339.5 258.643 339.5 256.433 339.5 254.643 337.709 254.643 335.5 254.643 333.291 256.433 331.5 258.643 331.5Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M436.5 335 558.786 335 558.786 338 436.5 338ZM436.5 341C434.015 341 432 338.985 432 336.5 432 334.015 434.015 332 436.5 332 438.985 332 441 334.015 441 336.5 441 338.985 438.985 341 436.5 341Z"
                            fill="#6600CC"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(343.063 372)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(349.896 372)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(353.396 372)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(343.063 385)"
                        >
                            13,8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(364.396 385)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(343.063 398)"
                        >
                            162 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(343.063 411)"
                        >
                            СВ 850/235
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(395.563 411)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(399.063 411)"
                        >
                            32
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(908.218 375)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(915.051 375)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(918.551 375)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(908.218 388)"
                        >
                            13,8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(929.551 388)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(908.218 401)"
                        >
                            168 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(908.218 414)"
                        >
                            СВ 850/235
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(960.718 414)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(964.218 414)"
                        >
                            32
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1086.33 375)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1093.17 375)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1096.67 375)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1086.33 388)"
                        >
                            13,8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1107.67 388)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1086.33 401)"
                        >
                            168 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1086.33 414)"
                        >
                            СВ 850/235
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1138.83 414)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1142.33 414)"
                        >
                            32
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(223.204 279)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(230.371 279)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(233.871 279)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(185.538 292)"
                        >
                            13,8/220
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(225.871 292)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(180.871 305)"
                        >
                            200 000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(218.204 305)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(160.038 318)"
                        >
                            ТДЦ 200 000/220
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(401.087 279)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(408.254 279)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(411.754 279)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(363.421 292)"
                        >
                            13,8/220
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(403.754 292)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(358.754 305)"
                        >
                            200 000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(396.087 305)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(337.921 318)"
                        >
                            ТДЦ 200 000/220
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(844.766 279)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(851.933 279)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(855.433 279)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(807.1 292)"
                        >
                            13,8/220
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(847.433 292)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(802.433 305)"
                        >
                            200 000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(839.766 305)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(781.6 318)"
                        >
                            ТДЦ 200 000/220
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1020.71 287)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1027.88 287)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1031.38 287)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(983.045 300)"
                        >
                            13,8/220
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1023.38 300)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(978.378 313)"
                        >
                            200 000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1015.71 313)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(957.545 326)"
                        >
                            ТДЦ 200 000/220
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(58.9645 373)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(82.1312 373)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(85.6312 373)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(39.9645 386)"
                        >
                            13,8/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(77.6312 386)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(51.2978 399)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(69.9645 399)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(38.1312 412)"
                        >
                            ТСЗ 630/15
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(474.425 369)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(497.591 369)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(501.091 369)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(474.425 382)"
                        >
                            13,8/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(512.091 382)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(474.425 395)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(493.091 395)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(474.425 408)"
                        >
                            ТСЗ 630/15
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(741.126 372)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(764.293 372)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(767.793 372)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(722.126 385)"
                        >
                            13,8/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(759.793 385)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(733.46 398)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(752.126 398)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(720.293 411)"
                        >
                            ТСЗ 630/15
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1205.58 370)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1228.75 370)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1232.25 370)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1205.58 383)"
                        >
                            13,8/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1243.25 383)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1205.58 396)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1224.25 396)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1205.58 409)"
                        >
                            ТСЗ 630/15
                        </text>
                        <path
                            d="M211.936 420.285 305.044 420.285 305.044 433.085 211.936 433.085Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.936 433.085 305.044 433.085 305.044 445.885 211.936 445.885Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.936 445.885 305.044 445.885 305.044 458.685 211.936 458.685Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.936 458.685 305.044 458.685 305.044 471.484 211.936 471.484Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.936 471.484 305.044 471.484 305.044 484.285 211.936 484.285Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.936 484.285 305.044 484.285 305.044 497.085 211.936 497.085Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.269 433.085 305.711 433.085"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.269 445.885 305.711 445.885"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.269 458.685 305.711 458.685"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.269 471.484 305.711 471.484"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.269 484.285 305.711 484.285"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.936 419.618 211.936 497.751"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M305.044 419.618 305.044 497.751"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.269 420.285 305.711 420.285"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M211.269 497.085 305.711 497.085"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g9"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(215.715 430)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g11"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(215.715 443)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a9"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(215.715 456)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k9"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(215.715 469)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n9"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(215.715 481)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w9"
                                fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(215.715 494)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M113.5 413.5 113.5 531.503"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.49976-0.026619 1.88276 21.5519-1.11677 21.6051-1.49976 0.026619ZM4.88228 21.4986C4.92639 23.9835 2.94774 26.0337 0.462849 26.0778-2.02204 26.1219-4.0722 24.1432-4.1163 21.6583-4.1604 19.1734-2.18176 17.1233 0.303135 17.0792 2.78803 17.0351 4.83818 19.0137 4.88228 21.4986Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 113.5 359.079)"
                        />
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c9001"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 243.5 322.5)"
                            />
                            <path
                                d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 243.5 322.5)"
                            />
                            <path id="c9002"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#B5B500"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 243.5 298.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.000104987 25.0035"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 436.5 347.504)"
                        />
                        <path
                            d="M0 0 0.000104987 11.7354"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 436.5 367.235)"
                        />
                        <path
                            d="M0 0 0.101627 43.4964"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 436.602 323.5)"
                        />
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c3301"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 421.5 323.5)"
                            />
                            <path id="c3302"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 421.5 299.5)"
                            />
                        </a>
                        <path
                            d="M-1.50712 15.5-1.17395 12.0849-0.216285 8.89693 1.30033 6.00964 3.31087 3.49161 5.75173 1.4106 8.55931-0.164108 11.6669-1.16091 15-1.50812 18.3331-1.16091 21.4407-0.164108 24.2483 1.4106 26.6891 3.49161 28.6997 6.00964 30.2163 8.89693 31.1739 12.0849 31.5071 15.5 31.1739 18.9151 30.2163 22.1031 28.6997 24.9904 26.6891 27.5084 24.2483 29.5894 21.4407 31.1641 18.3331 32.1609 15 32.5081 11.6669 32.1609 8.55931 31.1641 5.75173 29.5894 3.31087 27.5084 1.30033 24.9904-0.216285 22.1031-1.17395 18.9151ZM1.79766 18.4781 1.74133 18.1922 2.61535 21.1017 2.50672 20.8358 3.88971 23.4687 3.73395 23.2303 5.56558 25.5242 5.36658 25.3187 7.58654 27.2114 7.34713 27.0446 9.8951 28.4737 9.61948 28.3536 12.4351 29.2568 12.1324 29.1932 15.1554 29.5081 14.8446 29.5081 17.8676 29.1932 17.5649 29.2568 20.3805 28.3536 20.1049 28.4737 22.6529 27.0446 22.4135 27.2114 24.6334 25.3187 24.4344 25.5242 26.2661 23.2303 26.1103 23.4687 27.4933 20.8358 27.3846 21.1017 28.2587 18.1922 28.2023 18.4781 28.5071 15.3544 28.5071 15.6456 28.2023 12.5219 28.2587 12.8078 27.3846 9.89825 27.4933 10.1642 26.1103 7.53134 26.2661 7.76974 24.4344 5.47579 24.6334 5.6813 22.4135 3.78861 22.6529 3.95543 20.1049 2.52634 20.3805 2.64639 17.5649 1.74322 17.8676 1.80683 14.8446 1.49193 15.1554 1.49193 12.1324 1.80683 12.4351 1.74322 9.61948 2.64639 9.8951 2.52634 7.34713 3.95543 7.58654 3.78861 5.36658 5.6813 5.56558 5.47579 3.73395 7.76974 3.88971 7.53134 2.50672 10.1642 2.61535 9.89825 1.74133 12.8078 1.79766 12.5219 1.49291 15.6456 1.49291 15.3544Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 421.5 299.5)"
                        />
                        <path
                            d="M0 0 0.000104987 25.0035"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 881.5 348.504)"
                        />
                        <path
                            d="M0 0 0.000104987 11.7354"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 881.5 368.235)"
                        />
                        <path
                            d="M0 0 0.000104987 45.1028"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 881.5 323.5)"
                        />
                        <path
                            d="M789.5 336 881.594 336 881.594 339 789.5 339ZM881.594 333C884.079 333 886.094 335.015 886.094 337.5 886.094 339.985 884.079 342 881.594 342 879.109 342 877.094 339.985 877.094 337.5 877.094 335.015 879.109 333 881.594 333Z"
                            fill="#6600CC"
                        />
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c5701"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 866.5 323.5)"
                            />
                            <path
                                d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 866.5 323.5)"
                            />
                            <path id="c5702"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 866.5 299.5)"
                            />
                        </a>
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 866.5 299.5)"
                        />
                        <path
                            d="M836.299 420.285 929.407 420.285 929.407 433.085 836.299 433.085Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.299 433.085 929.407 433.085 929.407 445.885 836.299 445.885Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.299 445.885 929.407 445.885 929.407 458.685 836.299 458.685Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.299 458.685 929.407 458.685 929.407 471.484 836.299 471.484Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.299 471.484 929.407 471.484 929.407 484.285 836.299 484.285Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.299 484.285 929.407 484.285 929.407 497.085 836.299 497.085Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M835.632 433.085 930.073 433.085"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M835.632 445.885 930.073 445.885"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M835.632 458.685 930.073 458.685"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M835.632 471.484 930.073 471.484"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M835.632 484.285 930.073 484.285"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M836.299 419.618 836.299 497.751"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M929.407 419.618 929.407 497.751"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M835.632 420.285 930.073 420.285"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M835.632 497.085 930.073 497.085"
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
                                transform="translate(840.078 430)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g59"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.078 443)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a57"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.078 456)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k57"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.078 469)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n57"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.078 481)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w57"
                                fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(840.078 494)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M0 0 0.000104987 25.0035"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1059.5 348.504)"
                        />
                        <path
                            d="M0 0 0.000104987 11.7354"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1059.5 368.235)"
                        />
                        <path
                            d="M1059.5 323.5 1060.23 368.603"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c8101"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1044.5 323.5)"
                            />
                            <path id="c8102"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1044.5 299.5)"
                            />
                        </a>
                        <path
                            d="M-1.50712 15.5-1.17395 12.0849-0.216285 8.89693 1.30033 6.00964 3.31087 3.49161 5.75173 1.4106 8.55931-0.164108 11.6669-1.16091 15-1.50812 18.3331-1.16091 21.4407-0.164108 24.2483 1.4106 26.6891 3.49161 28.6997 6.00964 30.2163 8.89693 31.1739 12.0849 31.5071 15.5 31.1739 18.9151 30.2163 22.1031 28.6997 24.9904 26.6891 27.5084 24.2483 29.5894 21.4407 31.1641 18.3331 32.1609 15 32.5081 11.6669 32.1609 8.55931 31.1641 5.75173 29.5894 3.31087 27.5084 1.30033 24.9904-0.216285 22.1031-1.17395 18.9151ZM1.79766 18.4781 1.74133 18.1922 2.61535 21.1017 2.50672 20.8358 3.88971 23.4687 3.73395 23.2303 5.56558 25.5242 5.36658 25.3187 7.58654 27.2114 7.34713 27.0446 9.8951 28.4737 9.61948 28.3536 12.4351 29.2568 12.1324 29.1932 15.1554 29.5081 14.8446 29.5081 17.8676 29.1932 17.5649 29.2568 20.3805 28.3536 20.1049 28.4737 22.6529 27.0446 22.4135 27.2114 24.6334 25.3187 24.4344 25.5242 26.2661 23.2303 26.1103 23.4687 27.4933 20.8358 27.3846 21.1017 28.2587 18.1922 28.2023 18.4781 28.5071 15.3544 28.5071 15.6456 28.2023 12.5219 28.2587 12.8078 27.3846 9.89825 27.4933 10.1642 26.1103 7.53134 26.2661 7.76974 24.4344 5.47579 24.6334 5.6813 22.4135 3.78861 22.6529 3.95543 20.1049 2.52634 20.3805 2.64639 17.5649 1.74322 17.8676 1.80683 14.8446 1.49193 15.1554 1.49193 12.1324 1.80683 12.4351 1.74322 9.61948 2.64639 9.8951 2.52634 7.34713 3.95543 7.58654 3.78861 5.36658 5.6813 5.56558 5.47579 3.73395 7.76974 3.88971 7.53134 2.50672 10.1642 2.61535 9.89825 1.74133 12.8078 1.79766 12.5219 1.49291 15.6456 1.49291 15.3544Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 1044.5 299.5)"
                        />
                        <path
                            d="M1013.66 420.417 1106.77 420.417 1106.77 433.217 1013.66 433.217Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013.66 433.217 1106.77 433.217 1106.77 446.017 1013.66 446.017Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013.66 446.017 1106.77 446.017 1106.77 458.817 1013.66 458.817Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013.66 458.817 1106.77 458.817 1106.77 471.617 1013.66 471.617Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013.66 471.617 1106.77 471.617 1106.77 484.417 1013.66 484.417Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013.66 484.417 1106.77 484.417 1106.77 497.217 1013.66 497.217Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013 433.217 1107.44 433.217"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013 446.017 1107.44 446.017"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013 458.817 1107.44 458.817"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013 471.617 1107.44 471.617"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013 484.417 1107.44 484.417"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013.66 419.751 1013.66 497.884"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1106.77 419.751 1106.77 497.884"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013 420.417 1107.44 420.417"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1013 497.217 1107.44 497.217"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g81"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1017.44 430)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g83"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1017.44 443)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a81"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1017.44 456)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k81"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1017.44 469)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n81"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1017.44 482)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w81"
                                fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1017.44 494)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M1.5-5.68949e-06 1.5001 27.6792-1.49989 27.6792-1.5 5.68949e-06ZM4.5001 27.6791C4.50011 30.1644 2.4854 32.1791 0.000122055 32.1792-2.48516 32.1792-4.49989 30.1645-4.4999 27.6792-4.4999 25.1939-2.48519 23.1792 8.79184e-05 23.1792 2.48537 23.1791 4.5001 25.1939 4.5001 27.6791Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 547.5 364.179)"
                        />
                        <path
                            d="M1.49999-0.00600878 2.05631 138.871-0.943662 138.883-1.49999 0.00600878ZM5.05629 138.859C5.06625 141.344 3.05961 143.367 0.574352 143.377-1.91091 143.387-3.93368 141.38-3.94364 138.895-3.95359 136.41-1.94696 134.387 0.538299 134.377 3.02356 134.367 5.04633 136.374 5.05629 138.859Z"
                            fill="#7F7F7F"
                            transform="matrix(-1 0 0 1 805.056 417.5)"
                        />
                        <path
                            d="M1.5-6.06318e-06 1.5001 25.9732-1.49989 25.9732-1.5 6.06318e-06ZM4.5001 25.9732C4.50011 28.4585 2.4854 30.4732 0.000123176 30.4732-2.48516 30.4732-4.49989 28.4585-4.4999 25.9732-4.4999 23.488-2.48519 21.4732 8.67973e-05 21.4732 2.48537 21.4732 4.50009 23.4879 4.5001 25.9732Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 804.5 364.473)"
                        />
                        <path
                            d="M1182.5 411.5 1182.67 534.62"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-7.83077e-06 1.5001 20.1104-1.49989 20.1105-1.5 7.83077e-06ZM4.5001 20.1104C4.50012 22.5957 2.48541 24.6104 0.000128479 24.6104-2.48515 24.6105-4.49988 22.5958-4.4999 20.1105-4.49991 17.6252-2.4852 15.6105 8.14946e-05 15.6104 2.48536 15.6104 4.50009 17.6251 4.5001 20.1104Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 1182.5 357.611)"
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
                            transform="translate(597.327 19)"
                        >
                            ГЭС-6 (Чорбоғ)
                        </text>
                        <path
                            d="M0 0 1174.7 0.000104987"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1201.2 154.5)"
                        />
                        <path
                            d="M0 0 1221.61 0.000104987"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1248.11 110.5)"
                        />
                        <path
                            d="M0 0 0.000104987 36.8514"
                            fill="#FF0000"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1185.5 190.352)"
                        />
                        <path
                            d="M1.5-4.27338e-06 1.5001 36.8514-1.49989 36.8514-1.5 4.27338e-06ZM4.5001 36.8514C4.50011 39.3367 2.4854 41.3514 0.000117807 41.3514-2.48516 41.3514-4.49989 39.3367-4.4999 36.8515-4.4999 34.3662-2.48519 32.3514 9.21667e-05 32.3514 2.48537 32.3514 4.5001 34.3661 4.5001 36.8514Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 1185.5 190.352)"
                        />
                        <path
                            d="M1225.94 190.173 1225.5 109.5"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1224.44 190.181 1224 109.508 1227 109.492 1227.44 190.165ZM1221 109.525C1220.99 107.039 1222.99 105.014 1225.48 105 1227.96 104.987 1229.99 106.99 1230 109.475 1230.01 111.961 1228.01 113.986 1225.52 114 1223.04 114.014 1221.01 112.01 1221 109.525Z"
                            fill="#B5B500"
                        />
                        <a href="<?= $urlSwitch5 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#B5B500"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 1196.5 199.5)"
                            />
                        </a>
                        <path
                            d="M0 0 1146.77 0.000104987"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1173.27 225.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1188.47 213)"
                        >
                            СВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1203.3 213)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1206.8 213)"
                        >
                            220
                        </text>
                        <path
                            d="M1.5-6.14241e-06 1.5001 25.6382-1.49989 25.6382-1.5 6.14241e-06ZM-4.5 1.84272e-05C-4.50001-2.48526-2.4853-4.49999-1.84272e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.84272e-05 4.50001 2.48526 2.4853 4.49999 1.84272e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.84272e-05Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 736.5 224.138)"
                        />
                        <a href="<?= $urlSwitch8 ?>">
                            <rect
                                id="c250"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#B5B500"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 727.5 198.5)"
                            />
                        </a>
                        <path
                            d="M1.5-9.39785e-06 1.5001 16.757-1.49989 16.7571-1.5 9.39785e-06ZM4.5001 16.757C4.50012 19.2423 2.48541 21.257 0.00013318 21.2571-2.48515 21.2571-4.49988 19.2424-4.4999 16.7571-4.49991 14.2718-2.4852 12.2571 7.67933e-05 12.2571 2.48536 12.257 4.50009 14.2717 4.5001 16.757Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 722.5 171.257)"
                        />
                        <path
                            d="M722.5 169 735.976 169 735.976 172 722.5 172ZM735.976 166C738.461 166 740.476 168.015 740.476 170.5 740.476 172.985 738.461 175 735.976 175 733.49 175 731.476 172.985 731.476 170.5 731.476 168.015 733.49 166 735.976 166Z"
                            fill="#B5B500"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(747.918 191)"
                        >
                            ОВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(763.418 191)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(766.918 191)"
                        >
                            220
                        </text>
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 736.5 148.219)"
                        />
                        <path
                            d="M736.206 148.563C739.211 148.084 742.004 150.354 742.442 153.633 742.881 156.912 740.8 159.958 737.794 160.437 737.248 160.524 736.692 160.521 736.146 160.427"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.183832 20.3606"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 736.5 179.861)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(554.01 191)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(561.177 191)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(564.677 191)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(478.573 55)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(486.573 55)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(490.073 55)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(495.406 55)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(498.906 55)"
                        >
                            Тошкент
                        </text>
                        <path
                            d="M1.5-5.80612e-06 1.5001 27.1231-1.49989 27.1232-1.5 5.80612e-06ZM-4.5 1.74184e-05C-4.50001-2.48526-2.4853-4.49999-1.74184e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.74184e-05 4.50001 2.48526 2.4853 4.49999 1.74184e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.74184e-05Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 231.5 225.623)"
                        />
                        <a href="<?= $urlSwitch3 ?>">
                            <rect
                                id="c9003"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#B5B500"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 222.5 198.5)"
                            />
                        </a>
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 231.5 149.219)"
                        />
                        <path
                            d="M5.52688e-06-1.5 28.4935-1.49989 28.4935 1.5001-5.52688e-06 1.5ZM-1.65806e-05 4.5C-2.4853 4.49999-4.50001 2.48526-4.5-1.65806e-05-4.49999-2.4853-2.48526-4.50001 1.65806e-05-4.5 2.4853-4.49999 4.50001-2.48526 4.5 1.65806e-05 4.49999 2.4853 2.48526 4.50001-1.65806e-05 4.5Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 231.5 208.5)"
                        />
                        <path
                            d="M0 0 0.000104987 9.99034"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 258.5 217.49)"
                        />
                        <path
                            d="M231.206 148.563C234.211 148.084 237.004 150.354 237.442 153.633 237.881 156.912 235.8 159.958 232.794 160.437 232.248 160.524 231.692 160.521 231.146 160.427"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.183832 20.3606"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 231.5 179.861)"
                        />
                        <path
                            d="M257.707 218.576C260.434 218.051 262.999 220.277 263.437 223.549 263.875 226.821 262.019 229.899 259.293 230.424 258.748 230.529 258.192 230.525 257.648 230.412"
                            stroke="#B5B500"
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
                            transform="translate(421.556 191)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(428.723 191)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(432.223 191)"
                        >
                            2
                        </text>
                        <a href="<?= $urlSwitch6 ?>">
                            <rect
                                id="c3303"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#B5B500"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 400.5 197.5)"
                            />
                        </a>
                        <path
                            d="M1.5-1.22693e-05 1.5001 12.8353-1.49989 12.8353-1.5 1.22693e-05ZM4.5001 12.8352C4.50013 15.3205 2.48542 17.3353 0.000141795 17.3353-2.48514 17.3353-4.49987 15.3206-4.4999 12.8353-4.49992 10.35-2.48521 8.3353 6.81789e-05 8.33528 2.48535 8.33525 4.50008 10.35 4.5001 12.8352Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 409.5 168.335)"
                        />
                        <path
                            d="M0 0 0.183832 20.3606"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 409.5 178.861)"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect
                                id="c5703"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#B5B500"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 845.5 198.5)"
                            />
                        </a>
                        <path
                            d="M1.5-4.17512e-06 1.5001 37.7187-1.49989 37.7187-1.5 4.17512e-06ZM4.5001 37.7187C4.50011 40.204 2.4854 42.2187 0.000117512 42.2187-2.48516 42.2187-4.49989 40.204-4.4999 37.7188-4.4999 35.2335-2.48519 33.2187 9.24615e-05 33.2187 2.48537 33.2187 4.5001 35.2334 4.5001 37.7187Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 855.5 148.219)"
                        />
                        <path
                            d="M854.206 148.563C857.211 148.084 860.004 150.354 860.442 153.633 860.881 156.912 858.8 159.958 855.794 160.437 855.248 160.524 854.692 160.521 854.146 160.427"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.183832 20.3606"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 854.5 179.861)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1044.08 192)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1051.24 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1054.74 192)"
                        >
                            4
                        </text>
                        <a href="<?= $urlSwitch7 ?>">
                            <rect
                                id="c8103"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#B5B500"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1023.5 198.5)"
                            />
                        </a>
                        <path
                            d="M1.5-7.92841e-06 1.5001 19.8628-1.49989 19.8628-1.5 7.92841e-06ZM4.5001 19.8628C4.50012 22.348 2.48541 24.3628 0.000128772 24.3628-2.48515 24.3628-4.49988 22.3481-4.4999 19.8628-4.49991 17.3775-2.4852 15.3628 8.12016e-05 15.3628 2.48536 15.3628 4.50009 17.3775 4.5001 19.8628Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 1032.5 173.363)"
                        />
                        <path
                            d="M0 0 0.183832 20.3606"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1032.5 179.861)"
                        />
                        <path
                            d="M388.539 420.454 481.647 420.454 481.647 433.254 388.539 433.254Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M388.539 433.254 481.647 433.254 481.647 446.054 388.539 446.054Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M388.539 446.054 481.647 446.054 481.647 458.854 388.539 458.854Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M388.539 458.854 481.647 458.854 481.647 471.654 388.539 471.654Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M388.539 471.654 481.647 471.654 481.647 484.454 388.539 484.454Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M388.539 484.454 481.647 484.454 481.647 497.254 388.539 497.254Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M387.872 433.254 482.314 433.254"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M387.872 446.054 482.314 446.054"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M387.872 458.854 482.314 458.854"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M387.872 471.654 482.314 471.654"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M387.872 484.454 482.314 484.454"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M388.539 419.787 388.539 497.92"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M481.647 419.787 481.647 497.92"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M387.872 420.454 482.314 420.454"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M387.872 497.254 482.314 497.254"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g33"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(392.319 430)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g35"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(392.319 443)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a33"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(392.319 456)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k33"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(392.319 469)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n33"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(392.319 482)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w33"
                                fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(392.319 494)"
                            >
                                Qвода
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Tempus Sans ITC,Tempus Sans ITC_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(30.5008 122)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(36.3341 122)"
                        >
                            СШ 220 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Tempus Sans ITC,Tempus Sans ITC_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(34.3889 166)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(43.3889 166)"
                        >
                            СШ 220 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(35.7922 235)"
                        >
                            ОСШ 220 кВ
                        </text>
                        <path
                            d="M0 0 0.233596 38.4136"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 258.5 267.914)"
                        />
                        <path
                            d="M113.5 530.5 485.952 532.28"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M457.5 557.5 608.384 557.5"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M626.5 557.5 742.29 557.5"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M761.5 557.5 894.851 557.5"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 308.917 0.000104987"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1181.42 533.5)"
                        />
                        <path
                            d="M0 0 198.14 0.000104987"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 772.64 337.5)"
                        />
                        <path
                            d="M678 501.5 678 559.432 675 559.432 675 501.5ZM681 559.432C681 561.917 678.985 563.932 676.5 563.932 674.015 563.932 672 561.917 672 559.432 672 556.946 674.015 554.932 676.5 554.932 678.985 554.932 681 556.946 681 559.432Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M1.5-1.41534e-06 1.5001 111.267-1.49989 111.267-1.5 1.41534e-06ZM4.5001 111.267C4.50011 113.752 2.48539 115.767 0.000109233 115.767-2.48517 115.767-4.49989 113.752-4.4999 111.267-4.4999 108.781-2.48518 106.767 0.000100741 106.767 2.48538 106.767 4.5001 108.781 4.5001 111.267Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 676.5 447.767)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(706.792 326)"
                        >
                            КРУ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(728.792 326)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(732.292 326)"
                        >
                            6кВ
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(488.874 550)"
                        >
                            ЩИТ 1
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(524.04 550)"
                        >
                            -
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(527.54 550)"
                        >
                            Н
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(686.643 551)"
                        >
                            ЩИТ Н
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(808.936 550)"
                        >
                            ЩИТ 2
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(844.102 550)"
                        >
                            -
                        </text>
                        <text
                            fill="#FF0000"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(847.602 550)"
                        >
                            Н
                        </text>
                        <a href="<?= $urlSwitch13 ?>">
                            <rect
                                id="c4"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 607.5 566.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch14 ?>">
                            <rect
                                id="c5"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 742.5 566.5)"
                            />
                        </a>
                        <path
                            d="M1.50003 5.99999 1.5001 21.2669-1.49989 21.2669-1.49997 6.00001ZM2.96198e-05 6-4.49996 9.00002 0 0 4.50004 8.99998ZM4.5001 21.2669C4.50012 23.7521 2.48541 25.7669 0.000127202 25.7669-2.48515 25.7669-4.49988 23.7522-4.4999 21.2669-4.49991 18.7816-2.4852 16.7669 8.2772e-05 16.7669 2.48536 16.7669 4.50009 18.7816 4.5001 21.2669Z"
                            fill="#7F7F7F"
                            transform="matrix(1 0 0 -1 548.5 577.767)"
                        />
                        <path
                            d="M1.50003 5.99999 1.5001 21.2669-1.49989 21.2669-1.49997 6.00001ZM2.96198e-05 6-4.49996 9.00002 0 0 4.50004 8.99998ZM4.5001 21.2669C4.50012 23.7521 2.48541 25.7669 0.000127202 25.7669-2.48515 25.7669-4.49988 23.7522-4.4999 21.2669-4.49991 18.7816-2.4852 16.7669 8.2772e-05 16.7669 2.48536 16.7669 4.50009 18.7816 4.5001 21.2669Z"
                            fill="#7F7F7F"
                            transform="matrix(1 0 0 -1 803.5 578.767)"
                        />
                        <path
                            d="M1.5-5.80612e-06 1.5001 27.1231-1.49989 27.1232-1.5 5.80612e-06ZM-4.5 1.74184e-05C-4.50001-2.48526-2.4853-4.49999-1.74184e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.74184e-05 4.50001 2.48526 2.4853 4.49999 1.74184e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.74184e-05Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 409.5 225.623)"
                        />
                        <path
                            d="M5.52688e-06-1.5 28.4935-1.49989 28.4935 1.5001-5.52688e-06 1.5ZM-1.65806e-05 4.5C-2.4853 4.49999-4.50001 2.48526-4.5-1.65806e-05-4.49999-2.4853-2.48526-4.50001 1.65806e-05-4.5 2.4853-4.49999 4.50001-2.48526 4.5 1.65806e-05 4.49999 2.4853 2.48526 4.50001-1.65806e-05 4.5Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 409.5 209.5)"
                        />
                        <path
                            d="M0 0 0.000104987 9.99034"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 437.5 217.49)"
                        />
                        <path
                            d="M436.271 219.549C439.281 219.146 442.049 221.26 442.451 224.271 442.854 227.281 440.74 230.049 437.73 230.451 437.227 230.519 436.718 230.516 436.216 230.444"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 38.4679"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 436.5 268.968)"
                        />
                        <path
                            d="M1.5-5.80612e-06 1.5001 27.1231-1.49989 27.1232-1.5 5.80612e-06ZM-4.5 1.74184e-05C-4.50001-2.48526-2.4853-4.49999-1.74184e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.74184e-05 4.50001 2.48526 2.4853 4.49999 1.74184e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.74184e-05Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 854.5 225.623)"
                        />
                        <path
                            d="M5.52688e-06-1.5 28.4935-1.49989 28.4935 1.5001-5.52688e-06 1.5ZM-1.65806e-05 4.5C-2.4853 4.49999-4.50001 2.48526-4.5-1.65806e-05-4.49999-2.4853-2.48526-4.50001 1.65806e-05-4.5 2.4853-4.49999 4.50001-2.48526 4.5 1.65806e-05 4.49999 2.4853 2.48526 4.50001-1.65806e-05 4.5Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 854.5 209.5)"
                        />
                        <path
                            d="M0 0 0.000104987 9.99034"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 882.5 217.49)"
                        />
                        <path
                            d="M881.206 219.563C884.211 219.084 887.004 221.354 887.442 224.633 887.881 227.912 885.8 230.958 882.794 231.437 882.248 231.524 881.692 231.521 881.146 231.427"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 38.5214"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 881.5 269.021)"
                        />
                        <path
                            d="M1.5-5.80612e-06 1.5001 27.1231-1.49989 27.1232-1.5 5.80612e-06ZM-4.5 1.74184e-05C-4.50001-2.48526-2.4853-4.49999-1.74184e-05-4.5 2.48526-4.50001 4.49999-2.4853 4.5-1.74184e-05 4.50001 2.48526 2.4853 4.49999 1.74184e-05 4.5-2.48526 4.50001-4.49999 2.4853-4.5 1.74184e-05Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 1032.5 224.623)"
                        />
                        <path
                            d="M5.52688e-06-1.5 28.4935-1.49989 28.4935 1.5001-5.52688e-06 1.5ZM-1.65806e-05 4.5C-2.4853 4.49999-4.50001 2.48526-4.5-1.65806e-05-4.49999-2.4853-2.48526-4.50001 1.65806e-05-4.5 2.4853-4.49999 4.50001-2.48526 4.5 1.65806e-05 4.49999 2.4853 2.48526 4.50001-1.65806e-05 4.5Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 1032.5 208.5)"
                        />
                        <path
                            d="M0 0 0.000104987 9.99034"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1060.5 216.49)"
                        />
                        <path
                            d="M1059.27 218.549C1062.28 218.146 1065.05 220.26 1065.45 223.271 1065.85 226.281 1063.74 229.049 1060.73 229.451 1060.23 229.519 1059.72 229.516 1059.22 229.444"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.558005 39.6096"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1059.5 269.11)"
                        />
                        <path
                            d="M1.5-5.46699e-06 1.5001 28.8057-1.49989 28.8057-1.5 5.46699e-06ZM-4.5 1.6401e-05C-4.50001-2.48527-2.4853-4.49999-1.6401e-05-4.5 2.48527-4.50001 4.49999-2.4853 4.5-1.6401e-05 4.50001 2.48527 2.4853 4.49999 1.6401e-05 4.5-2.48527 4.50001-4.49999 2.4853-4.5 1.6401e-05Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 537.5 225.306)"
                        />
                        <path
                            d="M511.5 209 537.336 209 537.336 212 511.5 212ZM537.336 206C539.821 206 541.836 208.015 541.836 210.5 541.836 212.985 539.821 215 537.336 215 534.85 215 532.836 212.985 532.836 210.5 532.836 208.015 534.85 206 537.336 206Z"
                            fill="#B5B500"
                        />
                        <path
                            d="M512.888 210.899 512.5 160.5"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.728504 33.6405"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 512.5 149.141)"
                        />
                        <path
                            d="M513.772 104.559C516.504 104.116 519.045 106.194 519.447 109.199 519.849 112.204 517.96 114.999 515.228 115.441 514.727 115.523 514.218 115.519 513.718 115.432"
                            stroke="#B5B500"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-3.54253e-06 1.50009 38.4542-1.49991 38.4542-1.5 3.54253e-06ZM9.08167e-05 38.4542 4.50008 35.4542 0.000104987 44.4542-4.49992 35.4542Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 513.5 103.954)"
                        />
                        <path
                            d="M1.49992-0.015067 1.7878 28.6428-1.21205 28.6729-1.49992 0.015067ZM4.78765 28.6126C4.81261 31.0978 2.81823 33.1327 0.333075 33.1576-2.15208 33.1826-4.18693 31.1882-4.2119 28.703-4.23686 26.2179-2.24248 24.183 0.242673 24.1581 2.72783 24.1331 4.76268 26.1275 4.78765 28.6126Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 537.5 182.158)"
                        />
                        <path
                            d="M512.206 149.563C515.211 149.084 518.004 151.354 518.442 154.633 518.881 157.912 516.8 160.958 513.794 161.437 513.248 161.524 512.692 161.521 512.146 161.427"
                            stroke="#B5B500"
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
                            transform="translate(625.064 374)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(632.23 374)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(635.73 374)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(650.564 374)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(654.064 374)"
                        >
                            0
                        </text>
                        <a href="<?= $urlTransformer9 ?>">
                            <path id="c3"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#7F7F7F"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 661.5 501.5)"
                            />
                            <path id="c2"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 661.5 477.5)"
                            />
                        </a>
                        <path
                            d="M-1.34009 15-1.00841 11.7098-0.0556968 8.64066 1.45135 5.86413 3.44627 3.44627 5.86413 1.45135 8.64066-0.0556968 11.7098-1.00841 15-1.34009 18.2902-1.00841 21.3593-0.0556967 24.1359 1.45135 26.5537 3.44627 28.5486 5.86413 30.0557 8.64065 31.0084 11.7098 31.3401 15 31.0084 18.2902 30.0557 21.3593 28.5486 24.1359 26.5537 26.5537 24.1359 28.5486 21.3593 30.0557 18.2902 31.0084 15 31.3401 11.7098 31.0084 8.64065 30.0557 5.86413 28.5486 3.44627 26.5537 1.45135 24.1359-0.0556967 21.3593-1.00841 18.2902ZM1.63136 17.8893 1.57814 17.6277 2.45217 20.4434 2.35062 20.2026 3.73361 22.7506 3.59022 22.5381 5.42186 24.758 5.24195 24.5781 7.46191 26.4098 7.24941 26.2664 9.79738 27.6494 9.5566 27.5478 12.3723 28.4219 12.1107 28.3686 15.1337 28.6734 14.8663 28.6734 17.8893 28.3686 17.6277 28.4219 20.4434 27.5478 20.2026 27.6494 22.7506 26.2664 22.5381 26.4098 24.758 24.5781 24.5781 24.758 26.4098 22.5381 26.2664 22.7506 27.6494 20.2026 27.5478 20.4434 28.4219 17.6277 28.3686 17.8893 28.6734 14.8663 28.6734 15.1337 28.3686 12.1107 28.4219 12.3723 27.5478 9.5566 27.6494 9.79738 26.2664 7.24941 26.4098 7.46191 24.5781 5.24195 24.758 5.42186 22.5381 3.59022 22.7506 3.73361 20.2026 2.35062 20.4434 2.45217 17.6277 1.57814 17.8893 1.63136 14.8663 1.32661 15.1337 1.32661 12.1107 1.63136 12.3723 1.57814 9.55661 2.45217 9.79738 2.35062 7.24941 3.73361 7.46191 3.59022 5.24195 5.42186 5.42186 5.24195 3.59022 7.46191 3.73361 7.24941 2.35062 9.79738 2.45217 9.55661 1.57814 12.3723 1.63136 12.1107 1.32661 15.1337 1.32661 14.8663Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 661.5 477.5)"
                        />
                        <a href="<?= $urlSwitch11 ?>">
                            <rect
                                id="c1"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 666.5 380.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(697.305 466)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(720.471 466)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(723.971 466)"
                        >
                            0
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(697.305 479)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(721.638 479)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(697.305 492)"
                        >
                            630
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(715.971 492)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(697.305 505)"
                        >
                            ТСЗ630
                        </text>
                        <a href="<?= $urlSwitch10 ?>">
                            <rect
                                id="c105"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 104.5 444.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer6 ?>">
                            <path id="c1292"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 532.5 419.5)"
                            />
                            <path id="c1291"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 532.5 394.5)"
                            />
                            <path
                                d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                                fill="#6600CC"
                                transform="matrix(1 0 0 -1 532.5 394.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c1051"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 98.5001 413.5)"
                            />
                            <path id="c1052"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 98.5001 389.5)"
                            />
                        </a>
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 98.5001 389.5)"
                        />
                        <a href="<?= $urlTransformer7 ?>">
                            <path id="c1532"
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 789.5 417.5)"
                            />
                            <path id="c1531"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 789.5 394.5)"
                            />
                        </a>
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 789.5 394.5)"
                        />
                        <a href="<?= $urlSwitch15 ?>">
                            <rect
                                id="c153"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 794.5 453.5)"
                            />
                        </a>
                        <path
                            d="M678 276.5 678 335.905 675 335.905 675 276.5ZM676.5 276.5 672 279.5 676.5 270.5 681 279.5ZM681 335.905C681 338.39 678.985 340.405 676.5 340.405 674.015 340.405 672 338.39 672 335.905 672 333.419 674.015 331.405 676.5 331.405 678.985 331.405 681 333.419 681 335.905Z"
                            fill="#006600"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(641.716 265)"
                        >
                            От п/с Чарвак
                        </text>
                        <a href="<?= $urlSwitch12 ?>">
                            <rect
                                id="c177"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1173.5 441.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer8 ?>">
                            <path id="c1771"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1167.5 411.5)"
                            />
                            <path id="c1772"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1167.5 387.5)"
                            />
                        </a>
                        <path
                            d="M-1.5076 15-1.17255 11.6764-0.210006 8.57557 1.31255 5.77047 3.32788 3.32788 5.77047 1.31255 8.57557-0.210006 11.6764-1.17255 15-1.5076 18.3236-1.17255 21.4244-0.210006 24.2295 1.31255 26.6721 3.32788 28.6874 5.77047 30.21 8.57557 31.1726 11.6764 31.5076 15 31.1726 18.3236 30.21 21.4244 28.6874 24.2295 26.6721 26.6721 24.2295 28.6874 21.4244 30.21 18.3236 31.1726 15 31.5076 11.6764 31.1726 8.57557 30.21 5.77047 28.6874 3.32788 26.6721 1.31255 24.2295-0.210006 21.4244-1.17255 18.3236ZM1.79718 17.8726 1.73731 17.5783 2.61134 20.394 2.4971 20.1231 3.88009 22.6711 3.71878 22.432 5.55042 24.652 5.34802 24.4496 7.56798 26.2812 7.32892 26.1199 9.87688 27.5029 9.60602 27.3887 12.4217 28.2627 12.1274 28.2028 15.1505 28.5076 14.8495 28.5076 17.8726 28.2028 17.5783 28.2627 20.394 27.3887 20.1231 27.5029 22.6711 26.1199 22.432 26.2812 24.652 24.4496 24.4496 24.652 26.2812 22.432 26.1199 22.6711 27.5029 20.1231 27.3887 20.394 28.2627 17.5783 28.2028 17.8726 28.5076 14.8495 28.5076 15.1505 28.2028 12.1274 28.2627 12.4217 27.3887 9.60602 27.5029 9.87688 26.1199 7.32892 26.2812 7.56798 24.4496 5.34802 24.652 5.55042 22.432 3.71878 22.6711 3.88009 20.1231 2.4971 20.394 2.61134 17.5783 1.73731 17.8726 1.79718 14.8495 1.49244 15.1505 1.49244 12.1274 1.79718 12.4217 1.73731 9.60602 2.61134 9.87688 2.4971 7.32892 3.88009 7.56798 3.71878 5.34802 5.55042 5.55042 5.34802 3.71878 7.56798 3.88009 7.32892 2.4971 9.87688 2.61134 9.60602 1.73731 12.4217 1.79718 12.1274 1.49244 15.1505 1.49244 14.8495Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 1167.5 387.5)"
                        />
                        <path
                            d="M488 530.5 488 557.167 485 557.167 485 530.5ZM491 557.167C491 559.652 488.985 561.667 486.5 561.667 484.015 561.667 482 559.652 482 557.167 482 554.681 484.015 552.667 486.5 552.667 488.985 552.667 491 554.681 491 557.167Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M875 532.5 875 557.567 872 557.567 872 532.5ZM878 557.567C878 560.052 875.985 562.067 873.5 562.067 871.015 562.067 869 560.052 869 557.567 869 555.081 871.015 553.067 873.5 553.067 875.985 553.067 878 555.081 878 557.567Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M1.33333-4.85955e-06 1.33344 28.8057-1.33323 28.8057-1.33333 4.85955e-06ZM-4 1.45786e-05C-4.00001-2.20912-2.20915-3.99999-1.45786e-05-4 2.20912-4.00001 3.99999-2.20915 4-1.45786e-05 4.00001 2.20912 2.20915 3.99999 1.45786e-05 4-2.20912 4.00001-3.99999 2.20915-4 1.45786e-05Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 332.5 225.306)"
                        />
                        <path
                            d="M306.5 209.167 332.336 209.167 332.336 211.833 306.5 211.833ZM332.336 206.5C334.545 206.5 336.336 208.291 336.336 210.5 336.336 212.709 334.545 214.5 332.336 214.5 330.126 214.5 328.336 212.709 328.336 210.5 328.336 208.291 330.127 206.5 332.336 206.5Z"
                            fill="#B5B500"
                        />
                        <path
                            d="M307.888 211.899 307.5 161.5"
                            stroke="#B5B500"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.728504 33.6405"
                            stroke="#B5B500"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 307.5 149.141)"
                        />
                        <path
                            d="M308.772 104.559C311.504 104.116 314.045 106.194 314.447 109.199 314.849 112.204 312.96 114.999 310.228 115.441 309.727 115.523 309.218 115.519 308.718 115.432"
                            stroke="#B5B500"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.33333-3.14892e-06 1.33343 39.1208-1.33324 39.1208-1.33333 3.14892e-06ZM9.23912e-05 39.1208 4.00009 36.4542 0.000104987 44.4542-3.99991 36.4542Z"
                            fill="#B5B500"
                            transform="matrix(1 0 0 -1 308.5 103.954)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(285.716 192)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(292.882 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(296.382 192)"
                        >
                            Ч
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(277.899 57)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(285.899 57)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(289.399 57)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(294.732 57)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(298.232 57)"
                        >
                            Ч
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(306.065 57)"
                        >
                            ирчик
                        </text>
                        <path
                            d="M307.206 149.563C310.211 149.084 313.004 151.354 313.442 154.633 313.881 157.912 311.8 160.958 308.795 161.437 308.248 161.524 307.692 161.521 307.146 161.427"
                            stroke="#B5B500"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M332.062 178.152 331 111.524 334 111.476 335.061 178.105ZM328.001 111.572C327.961 109.087 329.943 107.04 332.428 107.001 334.913 106.961 336.96 108.943 336.999 111.428 337.039 113.913 335.057 115.96 332.572 115.999 330.087 116.039 328.04 114.057 328.001 111.572Z"
                            fill="#B5B500"
                        />
                        <a href="<?= $urlSwitch2 ?>">
                            <rect
                                id="c225"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#B5B500"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 323.5 196.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch1 ?>">
                            <rect
                                id="c202"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#B5B500"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 528.5 196.5)"
                            />
                        </a>
                        <path
                            d="M547.5 419.5 547.96 558.759"
                            stroke="#7F7F7F"
                            stroke-width="3"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch9 ?>">
                            <rect
                                id="c129"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 537.5 452.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(745.083 460)"
                        >
                            А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(752.749 460)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(756.249 460)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(779.416 460)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(782.916 460)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(492.092 446)"
                        >
                            А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(499.759 446)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(503.259 446)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(526.426 446)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(529.926 446)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(128.286 440)"
                        >
                            А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(135.953 440)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(139.453 440)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(162.619 440)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(166.119 440)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1198.71 450)"
                        >
                            А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1206.38 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1209.88 450)"
                        >
                            ТСН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1233.04 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1236.54 450)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(600.122 541)"
                        >
                            А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(607.789 541)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(611.289 541)"
                        >
                            1Н
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(624.955 541)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(628.455 541)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(740.571 542)"
                        >
                            А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(748.238 542)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(751.738 542)"
                        >
                            2Н
                        </text>
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 1039 32)"
                        >
                            <g clip-path="url(#clip2)" transform="scale(1.00684 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img1"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1060.17 27.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1159.5 81.1712)"
                        />
                        <path
                            d="M1156.55 94.0309 1148.86 85.6543 1149.35 85.2035 1157.04 93.58ZM1149.11 85.4289 1148.95 89.1967 1145.5 81.5001 1152.87 85.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1166.95 93.8892 1157.5 93.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1064.32 13.8155 1158.69 13.8155 1158.69 26.6155 1064.32 26.6155Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1064.32 13.1489 1064.32 27.2822"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1158.69 13.1489 1158.69 27.2822"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1063.65 13.8155 1159.36 13.8155"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1063.65 26.6155 1159.36 26.6155"
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
                                transform="translate(1068.1 24)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1078.6 24)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1060.5 28.5001 1079.69 28.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1166.81 80.8992 1254.47 80.8992 1254.47 93.6992 1166.81 93.6992Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1166.81 80.2326 1166.81 94.3659"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1254.47 80.2326 1254.47 94.3659"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1166.15 80.8992 1255.14 80.8992"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1166.15 93.6992 1255.14 93.6992"
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
                                transform="translate(1170.59 91)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1181.09 91)"
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
                            transform="matrix(1 0 0 -1 1056.5 35.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1166.99 53.5001)"
                        />
                        <path
                            d="M1166.5 53.5001 1185.69 53.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1171.01 40.7157 1244.21 40.7157 1244.21 53.5157 1171.01 53.5157Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1171.01 40.049 1171.01 54.1824"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1244.21 40.049 1244.21 54.1824"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1170.34 40.7157 1244.87 40.7157"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1170.34 53.5157 1244.87 53.5157"
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
                                transform="translate(1174.79 51)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1142.5 82.5001 1165.21 82.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M273.227 14.2886 356.827 14.2886 356.827 27.8798 273.227 27.8798Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M273.227 27.8798 356.827 27.8798 356.827 41.471 273.227 41.471Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M272.56 27.8798 357.493 27.8798"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M273.227 13.6219 273.227 42.1376"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M356.827 13.6219 356.827 42.1376"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M272.56 14.2886 357.493 14.2886"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M272.56 41.471 357.493 41.471"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g225"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(277.007 24)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g226"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(277.007 38)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip3)"
                            transform="matrix(0.000104987 0 0 0.000104987 350 15)"
                        >
                            <g
                                clip-path="url(#clip5)"
                                transform="matrix(1 0 0 1.02857 -0.25 -0.015625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip6)"
                            transform="matrix(0.000104987 0 0 0.000104987 351 29)"
                        >
                            <g clip-path="url(#clip8)" transform="matrix(1 0 0 1.02857 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M474.798 14.4518 558.398 14.4518 558.398 28.0429 474.798 28.0429Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M474.798 28.0429 558.398 28.0429 558.398 41.6341 474.798 41.6341Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M474.132 28.0429 559.065 28.0429"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M474.798 13.7851 474.798 42.3008"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M558.398 13.7851 558.398 42.3008"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M474.132 14.4518 559.065 14.4518"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M474.132 41.6341 559.065 41.6341"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g201"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(478.578 24)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g202"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(478.578 38)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip9)"
                            transform="matrix(0.000104987 0 0 0.000104987 552 15)"
                        >
                            <g clip-path="url(#clip10)" transform="matrix(1 0 0 1.02857 0 -0.015625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip11)"
                            transform="matrix(0.000104987 0 0 0.000104987 552 29)"
                        >
                            <g clip-path="url(#clip12)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M636.912 175.794 720.511 175.794 720.511 189.385 636.912 189.385Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M636.912 189.385 720.511 189.385 720.511 202.976 636.912 202.976Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M636.245 189.385 721.178 189.385"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M636.912 175.127 636.912 203.643"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M720.511 175.127 720.511 203.643"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M636.245 175.794 721.178 175.794"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M636.245 202.976 721.178 202.976"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g250"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(640.691 186)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g249"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(640.691 199)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip13)"
                            transform="matrix(0.000104987 0 0 0.000104987 714 176)"
                        >
                            <g clip-path="url(#clip14)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip15)"
                            transform="matrix(0.000104987 0 0 0.000104987 714 190)"
                        >
                            <g clip-path="url(#clip16)" transform="matrix(1.16667 0 0 1 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M25.7106 93.0774 114.943 93.0774 114.943 105.877 25.7106 105.877Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M25.7106 92.4107 25.7106 106.544"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M114.943 92.4107 114.943 106.544"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M25.0439 93.0774 115.609 93.0774"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M25.0439 105.877 115.609 105.877"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g218"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(29.4901 103)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M25.7106 137.729 114.943 137.729 114.943 150.529 25.7106 150.529Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M25.7106 137.062 25.7106 151.196"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M114.943 137.062 114.943 151.196"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M25.0439 137.729 115.609 137.729"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M25.0439 150.529 115.609 150.529"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g194"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(29.4901 148)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M25.7106 207.883 114.943 207.883 114.943 220.683 25.7106 220.683Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M25.7106 207.216 25.7106 221.349"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M114.943 207.216 114.943 221.349"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M25.0439 207.883 115.609 207.883"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M25.0439 220.683 115.609 220.683"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g242"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(29.4901 218)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M9.50005 540C9.50005 534.753 13.7533 530.5 19.0001 530.5 24.2468 530.5 28.5001 534.753 28.5001 540 28.5001 545.247 24.2468 549.5 19.0001 549.5 13.7533 549.5 9.50005 545.247 9.50005 540Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M9.50005 561.5C9.50005 556.529 13.7533 552.5 19.0001 552.5 24.2468 552.5 28.5001 556.529 28.5001 561.5 28.5001 566.471 24.2468 570.5 19.0001 570.5 13.7533 570.5 9.50005 566.471 9.50005 561.5Z"
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
                            transform="translate(33.6948 542)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.6121 564)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M9 517.5C9 512.253 13.2533 508 18.5 508 23.7467 508 28 512.253 28 517.5 28 522.747 23.7467 527 18.5 527 13.2533 527 9 522.747 9 517.5Z"
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
                            transform="translate(33.6121 520)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.877 497)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.6122 473)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip17)"
                            transform="matrix(0.000104987 0 0 0.000104987 13 462)"
                        >
                            <g clip-path="url(#clip18)" transform="matrix(1.05 0 0 1 -0.0078125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip19)"
                            transform="matrix(0.000104987 0 0 0.000104987 13 484)"
                        >
                            <g clip-path="url(#clip20)" transform="matrix(1.05 0 0 1 -0.0078125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M16.2396 428.316 99.8392 428.316 99.8392 441.907 16.2396 441.907Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M16.2396 427.649 16.2396 442.574"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M99.8392 427.649 99.8392 442.574"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M15.5729 428.316 100.506 428.316"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M15.5729 441.907 100.506 441.907"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g105"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(20.0191 438)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip21)"
                            transform="matrix(0.000104987 0 0 0.000104987 93 429)"
                        >
                            <g clip-path="url(#clip22)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M560.135 435.725 643.734 435.725 643.734 449.316 560.135 449.316Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M560.135 435.058 560.135 449.982"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M643.734 435.058 643.734 449.982"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M559.468 435.725 644.401 435.725"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M559.468 449.316 644.401 449.316"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g129"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(563.914 446)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip23)"
                            transform="matrix(0.000104987 0 0 0.000104987 637 436)"
                        >
                            <g clip-path="url(#clip24)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M705.952 437.048 789.552 437.048 789.552 450.639 705.952 450.639Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.952 436.381 705.952 451.306"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M789.552 436.381 789.552 451.306"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.285 437.048 790.218 437.048"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M705.285 450.639 790.218 450.639"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g153"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(709.731 447)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip25)"
                            transform="matrix(0.000104987 0 0 0.000104987 783 438)"
                        >
                            <g clip-path="url(#clip26)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1195.16 424.531 1278.76 424.531 1278.76 438.122 1195.16 438.122Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1195.16 423.864 1195.16 438.789"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1278.76 423.864 1278.76 438.789"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1194.49 424.531 1279.43 424.531"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1194.49 438.122 1279.43 438.122"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g177"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1198.94 435)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip27)"
                            transform="matrix(0.000104987 0 0 0.000104987 1272 425)"
                        >
                            <g clip-path="url(#clip28)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path id="c9"
                            d="M234.5 392C234.5 378.469 245.469 367.5 259 367.5 272.531 367.5 283.5 378.469 283.5 392 283.5 405.531 272.531 416.5 259 416.5 245.469 416.5 234.5 405.531 234.5 392Z"
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
                                        d="M258.689 385.933 259.622 385.933 260.944 386.167 262.033 386.633 262.889 387.178 263.9 388.189 264.522 389.122 264.989 390.367 265.144 391.067 265.144 392.933 264.833 394.1 264.211 395.344 263.589 396.122 263.044 396.667 261.956 397.367 260.711 397.833 259.933 397.989 258.378 397.989 257.133 397.678 256.278 397.289 255.422 396.744 254.567 395.967 254.022 395.189 253.478 394.1 253.167 392.856 253.089 391.922 253.244 390.678 253.556 389.667 254.178 388.5 255.033 387.567 255.656 387.022 256.978 386.322 258.144 386.011Z"
                                    />
                                    <path
                                        d="M259.156 372.089 260.011 372.089 261.489 372.322 262.967 372.789 264.211 373.411 265.144 374.033 265.922 374.733 266.856 375.667 267.711 376.911 268.333 378.156 268.8 379.556 269.033 380.722 269.111 381.344 269.111 382.822 268.878 384.3 268.489 385.622 267.867 386.944 267.089 388.033 266.933 388.033 266.311 386.944 265.378 385.856 264.522 385.078 263.433 384.378 262.267 383.833 260.944 383.444 259.156 383.211Z"
                                    />
                                    <path
                                        d="M246.4 387.878 246.789 387.956 248.967 389.2 250.522 390.133 250.6 390.289 250.444 391.922 250.6 393.556 250.989 395.033 251.533 396.2 251.533 396.433 249.356 397.678 247.489 398.767 243.444 401.1 242.122 401.878 241.889 401.878 241.189 400.4 240.8 399.078 240.644 398.144 240.567 396.822 240.722 395.344 240.956 394.256 241.5 392.778 242.044 391.767 242.744 390.756 243.678 389.744 244.533 388.967 245.933 388.111Z"
                                    />
                                    <path
                                        d="M266.7 396.433 267.089 396.511 268.956 397.6 275.022 401.1 276.344 401.878 276.189 402.267 275.644 403.044 274.944 403.9 274.4 404.444 273.233 405.3 271.989 406 270.511 406.544 269.344 406.778 268.878 406.856 266.544 406.856 265.378 406.622 264.133 406.233 262.811 405.611 261.878 404.989 261.878 400.322 262.578 400.011 263.9 399.311 264.833 398.611 265.922 397.522Z"
                                    />
                                    <path
                                        d="M249.667 377.067 251.378 377.067 252.856 377.3 254.489 377.844 255.811 378.544 256.433 378.933 256.433 383.678 255.033 384.3 253.944 385 253.089 385.7 252.544 386.244 251.611 387.567 251.144 387.411 249.822 386.633 243.756 383.133 242.044 382.122 241.967 381.967 242.511 381.111 243.367 380.1 243.989 379.478 245.156 378.622 246.244 378 247.722 377.456 248.578 377.222Z"
                                    />
                                    <path
                                        d="M253.167 398.533 253.478 398.611 254.644 399.467 255.967 400.089 257.211 400.478 258.144 400.633 259.078 400.711 259.156 400.789 259.156 411.833 257.989 411.833 256.433 411.522 255.111 411.056 253.711 410.278 252.7 409.5 251.922 408.8 251.144 407.867 250.367 406.622 249.744 405.222 249.356 403.744 249.2 402.344 249.2 401.489 249.278 400.789 251.222 399.7 252.544 398.922Z"
                                    />
                                    <path
                                        d="M276.267 382.044 276.422 382.044 276.967 383.133 277.433 384.533 277.667 385.778 277.744 387.333 277.589 388.733 277.278 390.056 276.656 391.533 276.111 392.467 275.489 393.322 274.633 394.256 273.467 395.189 272.456 395.811 271.756 396.122 269.811 395.033 267.944 393.944 267.711 393.789 267.867 392.389 267.867 391.222 268.567 390.522 269.578 389.2 270.278 388.033 270.978 386.556 271.522 384.844 272.222 384.378 274.167 383.289 276.033 382.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c33"
                            d="M413.5 391C413.5 377.469 424.469 366.5 438 366.5 451.531 366.5 462.5 377.469 462.5 391 462.5 404.531 451.531 415.5 438 415.5 424.469 415.5 413.5 404.531 413.5 391Z"
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
                                        d="M436.689 383.933 437.622 383.933 438.944 384.167 440.033 384.633 440.889 385.178 441.9 386.189 442.522 387.122 442.989 388.367 443.144 389.067 443.144 390.933 442.833 392.1 442.211 393.344 441.589 394.122 441.044 394.667 439.956 395.367 438.711 395.833 437.933 395.989 436.378 395.989 435.133 395.678 434.278 395.289 433.422 394.744 432.567 393.967 432.022 393.189 431.478 392.1 431.167 390.856 431.089 389.922 431.244 388.678 431.556 387.667 432.178 386.5 433.033 385.567 433.656 385.022 434.978 384.322 436.144 384.011Z"
                                    />
                                    <path
                                        d="M437.156 370.089 438.011 370.089 439.489 370.322 440.967 370.789 442.211 371.411 443.144 372.033 443.922 372.733 444.856 373.667 445.711 374.911 446.333 376.156 446.8 377.556 447.033 378.722 447.111 379.344 447.111 380.822 446.878 382.3 446.489 383.622 445.867 384.944 445.089 386.033 444.933 386.033 444.311 384.944 443.378 383.856 442.522 383.078 441.433 382.378 440.267 381.833 438.944 381.444 437.156 381.211Z"
                                    />
                                    <path
                                        d="M424.4 385.878 424.789 385.956 426.967 387.2 428.522 388.133 428.6 388.289 428.444 389.922 428.6 391.556 428.989 393.033 429.533 394.2 429.533 394.433 427.356 395.678 425.489 396.767 421.444 399.1 420.122 399.878 419.889 399.878 419.189 398.4 418.8 397.078 418.644 396.144 418.567 394.822 418.722 393.344 418.956 392.256 419.5 390.778 420.044 389.767 420.744 388.756 421.678 387.744 422.533 386.967 423.933 386.111Z"
                                    />
                                    <path
                                        d="M444.7 394.433 445.089 394.511 446.956 395.6 453.022 399.1 454.344 399.878 454.189 400.267 453.644 401.044 452.944 401.9 452.4 402.444 451.233 403.3 449.989 404 448.511 404.544 447.344 404.778 446.878 404.856 444.544 404.856 443.378 404.622 442.133 404.233 440.811 403.611 439.878 402.989 439.878 398.322 440.578 398.011 441.9 397.311 442.833 396.611 443.922 395.522Z"
                                    />
                                    <path
                                        d="M427.667 375.067 429.378 375.067 430.856 375.3 432.489 375.844 433.811 376.544 434.433 376.933 434.433 381.678 433.033 382.3 431.944 383 431.089 383.7 430.544 384.244 429.611 385.567 429.144 385.411 427.822 384.633 421.756 381.133 420.044 380.122 419.967 379.967 420.511 379.111 421.367 378.1 421.989 377.478 423.156 376.622 424.244 376 425.722 375.456 426.578 375.222Z"
                                    />
                                    <path
                                        d="M431.167 396.533 431.478 396.611 432.644 397.467 433.967 398.089 435.211 398.478 436.144 398.633 437.078 398.711 437.156 398.789 437.156 409.833 435.989 409.833 434.433 409.522 433.111 409.056 431.711 408.278 430.7 407.5 429.922 406.8 429.144 405.867 428.367 404.622 427.744 403.222 427.356 401.744 427.2 400.344 427.2 399.489 427.278 398.789 429.222 397.7 430.544 396.922Z"
                                    />
                                    <path
                                        d="M454.267 380.044 454.422 380.044 454.967 381.133 455.433 382.533 455.667 383.778 455.744 385.333 455.589 386.733 455.278 388.056 454.656 389.533 454.111 390.467 453.489 391.322 452.633 392.256 451.467 393.189 450.456 393.811 449.756 394.122 447.811 393.033 445.944 391.944 445.711 391.789 445.867 390.389 445.867 389.222 446.567 388.522 447.578 387.2 448.278 386.033 448.978 384.556 449.522 382.844 450.222 382.378 452.167 381.289 454.033 380.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c57"
                            d="M857.5 391C857.5 377.469 868.469 366.5 882 366.5 895.531 366.5 906.5 377.469 906.5 391 906.5 404.531 895.531 415.5 882 415.5 868.469 415.5 857.5 404.531 857.5 391Z"
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
                                        d="M880.689 383.933 881.622 383.933 882.944 384.167 884.033 384.633 884.889 385.178 885.9 386.189 886.522 387.122 886.989 388.367 887.144 389.067 887.144 390.933 886.833 392.1 886.211 393.344 885.589 394.122 885.044 394.667 883.956 395.367 882.711 395.833 881.933 395.989 880.378 395.989 879.133 395.678 878.278 395.289 877.422 394.744 876.567 393.967 876.022 393.189 875.478 392.1 875.167 390.856 875.089 389.922 875.244 388.678 875.556 387.667 876.178 386.5 877.033 385.567 877.656 385.022 878.978 384.322 880.144 384.011Z"
                                    />
                                    <path
                                        d="M881.156 370.089 882.011 370.089 883.489 370.322 884.967 370.789 886.211 371.411 887.144 372.033 887.922 372.733 888.856 373.667 889.711 374.911 890.333 376.156 890.8 377.556 891.033 378.722 891.111 379.344 891.111 380.822 890.878 382.3 890.489 383.622 889.867 384.944 889.089 386.033 888.933 386.033 888.311 384.944 887.378 383.856 886.522 383.078 885.433 382.378 884.267 381.833 882.944 381.444 881.156 381.211Z"
                                    />
                                    <path
                                        d="M868.4 385.878 868.789 385.956 870.967 387.2 872.522 388.133 872.6 388.289 872.444 389.922 872.6 391.556 872.989 393.033 873.533 394.2 873.533 394.433 871.356 395.678 869.489 396.767 865.444 399.1 864.122 399.878 863.889 399.878 863.189 398.4 862.8 397.078 862.644 396.144 862.567 394.822 862.722 393.344 862.956 392.256 863.5 390.778 864.044 389.767 864.744 388.756 865.678 387.744 866.533 386.967 867.933 386.111Z"
                                    />
                                    <path
                                        d="M888.7 394.433 889.089 394.511 890.956 395.6 897.022 399.1 898.344 399.878 898.189 400.267 897.644 401.044 896.944 401.9 896.4 402.444 895.233 403.3 893.989 404 892.511 404.544 891.344 404.778 890.878 404.856 888.544 404.856 887.378 404.622 886.133 404.233 884.811 403.611 883.878 402.989 883.878 398.322 884.578 398.011 885.9 397.311 886.833 396.611 887.922 395.522Z"
                                    />
                                    <path
                                        d="M871.667 375.067 873.378 375.067 874.856 375.3 876.489 375.844 877.811 376.544 878.433 376.933 878.433 381.678 877.033 382.3 875.944 383 875.089 383.7 874.544 384.244 873.611 385.567 873.144 385.411 871.822 384.633 865.756 381.133 864.044 380.122 863.967 379.967 864.511 379.111 865.367 378.1 865.989 377.478 867.156 376.622 868.244 376 869.722 375.456 870.578 375.222Z"
                                    />
                                    <path
                                        d="M875.167 396.533 875.478 396.611 876.644 397.467 877.967 398.089 879.211 398.478 880.144 398.633 881.078 398.711 881.156 398.789 881.156 409.833 879.989 409.833 878.433 409.522 877.111 409.056 875.711 408.278 874.7 407.5 873.922 406.8 873.144 405.867 872.367 404.622 871.744 403.222 871.356 401.744 871.2 400.344 871.2 399.489 871.278 398.789 873.222 397.7 874.544 396.922Z"
                                    />
                                    <path
                                        d="M898.267 380.044 898.422 380.044 898.967 381.133 899.433 382.533 899.667 383.778 899.744 385.333 899.589 386.733 899.278 388.056 898.656 389.533 898.111 390.467 897.489 391.322 896.633 392.256 895.467 393.189 894.456 393.811 893.756 394.122 891.811 393.033 889.944 391.944 889.711 391.789 889.867 390.389 889.867 389.222 890.567 388.522 891.578 387.2 892.278 386.033 892.978 384.556 893.522 382.844 894.222 382.378 896.167 381.289 898.033 380.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        </a>
                        <path id="c81"
                            d="M1036.5 392C1036.5 378.469 1047.47 367.5 1061 367.5 1074.53 367.5 1085.5 378.469 1085.5 392 1085.5 405.531 1074.53 416.5 1061 416.5 1047.47 416.5 1036.5 405.531 1036.5 392Z"
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
                                        d="M1059.69 384.933 1060.62 384.933 1061.94 385.167 1063.03 385.633 1063.89 386.178 1064.9 387.189 1065.52 388.122 1065.99 389.367 1066.14 390.067 1066.14 391.933 1065.83 393.1 1065.21 394.344 1064.59 395.122 1064.04 395.667 1062.96 396.367 1061.71 396.833 1060.93 396.989 1059.38 396.989 1058.13 396.678 1057.28 396.289 1056.42 395.744 1055.57 394.967 1055.02 394.189 1054.48 393.1 1054.17 391.856 1054.09 390.922 1054.24 389.678 1054.56 388.667 1055.18 387.5 1056.03 386.567 1056.66 386.022 1057.98 385.322 1059.14 385.011Z"
                                    />
                                    <path
                                        d="M1060.16 371.089 1061.01 371.089 1062.49 371.322 1063.97 371.789 1065.21 372.411 1066.14 373.033 1066.92 373.733 1067.86 374.667 1068.71 375.911 1069.33 377.156 1069.8 378.556 1070.03 379.722 1070.11 380.344 1070.11 381.822 1069.88 383.3 1069.49 384.622 1068.87 385.944 1068.09 387.033 1067.93 387.033 1067.31 385.944 1066.38 384.856 1065.52 384.078 1064.43 383.378 1063.27 382.833 1061.94 382.444 1060.16 382.211Z"
                                    />
                                    <path
                                        d="M1047.4 386.878 1047.79 386.956 1049.97 388.2 1051.52 389.133 1051.6 389.289 1051.44 390.922 1051.6 392.556 1051.99 394.033 1052.53 395.2 1052.53 395.433 1050.36 396.678 1048.49 397.767 1044.44 400.1 1043.12 400.878 1042.89 400.878 1042.19 399.4 1041.8 398.078 1041.64 397.144 1041.57 395.822 1041.72 394.344 1041.96 393.256 1042.5 391.778 1043.04 390.767 1043.74 389.756 1044.68 388.744 1045.53 387.967 1046.93 387.111Z"
                                    />
                                    <path
                                        d="M1067.7 395.433 1068.09 395.511 1069.96 396.6 1076.02 400.1 1077.34 400.878 1077.19 401.267 1076.64 402.044 1075.94 402.9 1075.4 403.444 1074.23 404.3 1072.99 405 1071.51 405.544 1070.34 405.778 1069.88 405.856 1067.54 405.856 1066.38 405.622 1065.13 405.233 1063.81 404.611 1062.88 403.989 1062.88 399.322 1063.58 399.011 1064.9 398.311 1065.83 397.611 1066.92 396.522Z"
                                    />
                                    <path
                                        d="M1050.67 376.067 1052.38 376.067 1053.86 376.3 1055.49 376.844 1056.81 377.544 1057.43 377.933 1057.43 382.678 1056.03 383.3 1054.94 384 1054.09 384.7 1053.54 385.244 1052.61 386.567 1052.14 386.411 1050.82 385.633 1044.76 382.133 1043.04 381.122 1042.97 380.967 1043.51 380.111 1044.37 379.1 1044.99 378.478 1046.16 377.622 1047.24 377 1048.72 376.456 1049.58 376.222Z"
                                    />
                                    <path
                                        d="M1054.17 397.533 1054.48 397.611 1055.64 398.467 1056.97 399.089 1058.21 399.478 1059.14 399.633 1060.08 399.711 1060.16 399.789 1060.16 410.833 1058.99 410.833 1057.43 410.522 1056.11 410.056 1054.71 409.278 1053.7 408.5 1052.92 407.8 1052.14 406.867 1051.37 405.622 1050.74 404.222 1050.36 402.744 1050.2 401.344 1050.2 400.489 1050.28 399.789 1052.22 398.7 1053.54 397.922Z"
                                    />
                                    <path
                                        d="M1077.27 381.044 1077.42 381.044 1077.97 382.133 1078.43 383.533 1078.67 384.778 1078.74 386.333 1078.59 387.733 1078.28 389.056 1077.66 390.533 1077.11 391.467 1076.49 392.322 1075.63 393.256 1074.47 394.189 1073.46 394.811 1072.76 395.122 1070.81 394.033 1068.94 392.944 1068.71 392.789 1068.87 391.389 1068.87 390.222 1069.57 389.522 1070.58 388.2 1071.28 387.033 1071.98 385.556 1072.52 383.844 1073.22 383.378 1075.17 382.289 1077.03 381.2Z"
                                    />
                                </g>
                            </g>
                        </g>
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
        fetch('/urta-chirchiq/server6', { signal: controller.signal })
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
                let c1 = 0;
                let c2 = 0;
                let c3 = 0;
                let c4 = 0;
                data.forEach(item => {

                    if (item.id === 226) {
                        const value = document.getElementById("g226");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(225);
                        } else {
                            falseAnimation(225);
                        }
                    } else if(item.id === 225) {
                        const value = document.getElementById("g225");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(225);
                        } else {
                            falseAnimation(225);
                        }
                    } else if(item.id === 202) {
                        const value = document.getElementById("g202");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(202);
                        } else {
                            falseAnimation(202);
                        }
                    } else if(item.id === 201) {
                        const value = document.getElementById("g201");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(202);
                        } else {
                            falseAnimation(202);
                        }
                    } else if(item.id === 250) {
                        const value = document.getElementById("g250");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(250);
                        } else {
                            falseAnimation(250);
                        }
                    } else if(item.id === 249) {
                        const value = document.getElementById("g249");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(250);
                        } else {
                            falseAnimation(250);
                        }
                    } else if(item.id === 218) {
                        const value = document.getElementById("g218");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 194) {
                        const value = document.getElementById("g194");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 242) {
                        const value = document.getElementById("g242");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 105) {
                        const value = document.getElementById("g105");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(105);
                            trueAnimation(1051);
                            trueAnimation(1052);
                        } else {
                            falseAnimation(105);
                            falseAnimation(1051);
                            falseAnimation(1052);
                        }
                    } else if(item.id === 129) {
                        const value = document.getElementById("g129");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value > 0) {
                            trueAnimation(129);
                            trueAnimation(1291);
                            trueAnimation(1292);
                        } else {
                            falseAnimation(129);
                            falseAnimation(1291);
                            falseAnimation(1292);
                        }
                    } else if(item.id === 153) {
                        const value = document.getElementById("g153");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(153);
                            trueAnimation(1531);
                            trueAnimation(1532);
                        } else {
                            falseAnimation(153);
                            falseAnimation(1531);
                            falseAnimation(1532);
                        }
                    } else if(item.id === 177) {
                        const value = document.getElementById("g177");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(177);
                            trueAnimation(1771);
                            trueAnimation(1772);
                        } else {
                            falseAnimation(177);
                            falseAnimation(1771);
                            falseAnimation(1772);
                        }
                    }

                    else if(item.id === 900) {
                        const value = document.getElementById("g9");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a9");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 168 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(9);
                            trueAnimation(9001);
                            trueAnimation(9002);
                            trueAnimation(9003);
                            c1 = 1;
                        } else {
                            falseAnimation(9);
                            falseAnimation(9001);
                            falseAnimation(9002);
                            falseAnimation(9003);
                            c1 = 0;
                        }
                    } else if(item.id === 1100) {
                        const value = document.getElementById("g11");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 1200) {
                        const value = document.getElementById("k9");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 1300) {
                        const value = document.getElementById("n9");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 1400) {
                        const value = document.getElementById("w9");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }

                    else if(item.id === 33) {
                        const value = document.getElementById("g33");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a33");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 168 * 100, 1, ',', ' ') + " %";

                        if (item.value !== 0) {
                            trueAnimation(33);
                            trueAnimation(3301);
                            trueAnimation(3302);
                            trueAnimation(3303);
                            c2 = 1;
                        } else {
                            falseAnimation(33);
                            falseAnimation(3301);
                            falseAnimation(3302);
                            falseAnimation(3303);
                            c2 = 0;
                        }
                    } else if(item.id === 35) {
                        const value = document.getElementById("g35");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 36) {
                        const value = document.getElementById("k33");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 37) {
                        const value = document.getElementById("n33");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 38) {
                        const value = document.getElementById("w33");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }

                    else if(item.id === 57) {
                        const value = document.getElementById("g57");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a57");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 168 * 100, 1, ',', ' ') + " %";

                        if (item.value !== 0) {
                            trueAnimation(57);
                            trueAnimation(5701);
                            trueAnimation(5702);
                            trueAnimation(5703);
                            c3 = 1;
                        } else {
                            falseAnimation(57);
                            falseAnimation(5701);
                            falseAnimation(5702);
                            falseAnimation(5703);
                             c3 = 0;
                        }
                    } else if(item.id === 59) {
                        const value = document.getElementById("g59");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 60) {
                        const value = document.getElementById("k57");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 61) {
                        const value = document.getElementById("n57");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 62) {
                        const value = document.getElementById("w57");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }

                    else if(item.id === 81) {
                        const value = document.getElementById("g81");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a81");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 168 * 100, 1, ',', ' ') + " %";

                        if (item.value !== 0) {
                            trueAnimation(81);
                            trueAnimation(8101);
                            trueAnimation(8102);
                            trueAnimation(8103);
                            c4 = 1;
                        } else {
                            falseAnimation(81);
                            falseAnimation(8101);
                            falseAnimation(8102);
                            falseAnimation(8103);
                            c4 = 0;
                        }
                    } else if(item.id === 83) {
                        const value = document.getElementById("g83");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 84) {
                        const value = document.getElementById("k81");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 85) {
                        const value = document.getElementById("n81");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 86) {
                        const value = document.getElementById("w81");
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
                if (c1 === 0 && c2 === 0 && c3 === 0 && c4 === 0){
                    trueAnimation(1);
                    trueAnimation(2);
                    trueAnimation(3);
                    trueAnimation(4);
                    trueAnimation(5);

                } else {
                    falseAnimation(1);
                    falseAnimation(2);
                    falseAnimation(3);
                    falseAnimation(4);
                    falseAnimation(5);
                }
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

    let intervalTime = 180000; // Set the interval time in milliseconds (e.g., 1000ms = 1 second)

    let timer = setInterval(
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


