<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$id = 11;

$this->title = 'Андижон ГЭС (ГЭС-29)';
$energy = new Energy();
$dashboard = new Dashboard();
$power = new Day();

$power->getHour([$id]);
//$power->getDay([$id]);

$urlDay = "http://user:usrAn_Ge@192.168.40.215:10042/crq?req=archive&type=b&n1=33&n2=45&t1=20241022000000w&t2=20241022000000w&interval=day";

$data   = file_get_contents($urlDay);
$data = json_encode($data);

function Value($data, $value) {
    $position = strpos($data, $value);
    $substring = substr($data, $position);
    return explode(",", $substring);
}

$CONST = 1000000;

$B33 = Value($data, "B33");
$B37 = Value($data, "B37");
$B41 = Value($data, "B41");
$B45 = Value($data, "B45");

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);
$urlAggregate4 = $energy->getInformation($id, 4);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['andijon/index']) ?>">"Андижон ГЭС" Филиали</a></li>
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
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
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
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip10">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip11">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip13">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
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
                            <rect x="-9.31323e-10" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip18">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip19">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="-1.16415e-10" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip25">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip27">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip28">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip29">
                            <rect x="0" y="-4.65661e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip30">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip31">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip32">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip33">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip34">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip35">
                            <rect x="0" y="0" width="57150" height="123825" />
                        </clipPath>
                        <clipPath id="clip36">
                            <rect x="0" y="0" width="53067.9" height="123825" />
                        </clipPath>
                        <clipPath id="clip37">
                            <rect x="0" y="0" width="76200" height="177800" />
                        </clipPath>
                        <clipPath id="clip38">
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
                        <g
                            clip-path="url(#clip0)"
                            transform="matrix(0.000104987 0 0 0.000104987 1039 61)"
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
                            d="M1.3333-0.00982292 1.97096 86.5423-0.695634 86.5619-1.3333 0.00982292ZM-3.99989 0.0294688C-4.01617-2.17961-2.23855-3.98362-0.0294688-3.99989 2.17961-4.01617 3.98362-2.23855 3.99989-0.0294688 4.01617 2.17961 2.23855 3.98362 0.0294688 3.99989-2.17961 4.01617-3.98362 2.23855-3.99989 0.0294688ZM0.637664 86.5522 4.61791 83.8561 0.676955 91.8854-3.38187 83.915Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 179.5 242.385)"
                        />
                        <path
                            d="M1.33328-0.0122 1.58797 27.8215-1.07859 27.8459-1.33328 0.0122ZM6.00576 20.4526 0.278902 30.4798-5.63049 20.5591C-6.00734 19.9264-5.79997 19.1081-5.16732 18.7312-4.53467 18.3544-3.71632 18.5618-3.33947 19.1944L1.4002 27.1514-0.903115 27.1724 3.69016 19.1301C4.05536 18.4906 4.86978 18.2683 5.50922 18.6335 6.14866 18.9987 6.37097 19.8132 6.00576 20.4526Z"
                            fill="#7F7F7F"
                            transform="matrix(-1 0 0 1 658.779 521.5)"
                        />
                        <path
                            d="M1.33326-0.0136313 1.58512 24.6201-1.08141 24.6474-1.33326 0.0136313ZM5.995 17.2465 0.278908 27.2798-5.64113 17.3654C-6.01866 16.7332-5.81216 15.9146-5.17992 15.5371-4.54768 15.1596-3.7291 15.366-3.35158 15.9983L1.39663 23.9502-0.906658 23.9737 3.67798 15.9264C4.04249 15.2866 4.85668 15.0634 5.49651 15.4279 6.13634 15.7924 6.35952 16.6066 5.995 17.2465Z"
                            fill="#7F7F7F"
                            transform="matrix(-1 0 0 1 510.779 520.5)"
                        />
                        <path
                            d="M531.089 420.006 101.5 418.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 458.47 2.53921"
                            stroke="#4472C4"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 526.971 240.5)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(142.234 136)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(150.234 136)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(153.734 136)"
                        >
                            29
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(164.4 136)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(167.9 136)"
                        >
                            Карасув
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(268.571 136)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(276.571 136)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(280.071 136)"
                        >
                            Кампир
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(318.738 136)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(322.238 136)"
                        >
                            Рават
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(412.017 136)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(420.017 136)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(423.517 136)"
                        >
                            Сув
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(445.017 136)"
                        >
                            Омбор
                        </text>
                        <path
                            d="M0 0 374.482 0.000104987"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 997.982 420.5)"
                        />
                        <path
                            d="M742.186 420.224 742.167 387.501 744.833 387.499 744.853 420.223ZM747.519 420.221C747.521 422.43 745.731 424.222 743.522 424.223 741.313 424.225 739.521 422.435 739.519 420.226 739.518 418.017 741.308 416.225 743.517 416.223 745.726 416.222 747.518 418.012 747.519 420.221Z"
                            fill="#6600CC"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(705.573 343)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(712.74 343)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(716.24 343)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(675.907 356)"
                        >
                            10/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(708.24 356)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(668.24 369)"
                        >
                            125000
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(702.907 369)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(666.74 382)"
                        >
                            ТДЦ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(689.573 382)"
                        >
                            125000
                        </text>
                        <path
                            d="M0 0 676.08 0.000104987"
                            stroke="#4472C4"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1248.58 241.5)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(600.182 136)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(608.182 136)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(611.682 136)"
                        >
                            29
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(622.348 136)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(625.848 136)"
                        >
                            Джалал
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(663.515 136)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(667.015 136)"
                        >
                            А
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(674.682 136)"
                        >
                            бад
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(722.891 134)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(730.891 134)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(734.391 134)"
                        >
                            29
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(745.058 134)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(748.558 134)"
                        >
                            Фозилмон
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(841.106 133)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(849.106 133)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(852.606 133)"
                        >
                            Ташахур
                        </text>
                        <path
                            d="M742.33 333.234 741.5 293.5"
                            stroke="#4472C4"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.33333-4.16677e-06 1.33344 33.595-1.33323 33.595-1.33333 4.16677e-06ZM4.0001 33.5949C4.00011 35.8041 2.20926 37.595 0.000117487 37.595-2.20902 37.595-3.99989 35.8041-3.99989 33.595-3.9999 31.3858-2.20905 29.595 9.24866e-05 29.595 2.20923 29.595 4.0001 31.3858 4.0001 33.5949Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 741.5 275.095)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(760 290)"
                        >
                            В-Т-2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(86.7979 255)"
                        >
                            I
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(90.9646 255)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(94.4646 255)"
                        >
                            СШ 110 кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(939.487 255)"
                        >
                            II
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(947.82 255)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(951.32 255)"
                        >
                            СШ 110 кВ
                        </text>
                        <path
                            d="M0 0 143.622 0.000104987"
                            stroke="#4472C4"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 477.5 302.5)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(528.051 289)"
                        >
                            ОВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(543.551 289)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(547.051 289)"
                        >
                            110кВ
                        </text>
                        <path
                            d="M1.33333-2.30011e-06 1.33343 58.219-1.33323 58.219-1.33333 2.30011e-06ZM5.81846 50.8908 0.000104815 60.8652-5.81828 50.8908C-6.18933 50.2548-5.97448 49.4383-5.33841 49.0673-4.70234 48.6963-3.88592 48.9111-3.51488 49.5472L1.1518 57.5472-1.15161 57.5472 3.51505 49.5472C3.88609 48.9111 4.70251 48.6962 5.33858 49.0673 5.97465 49.4383 6.1895 50.2548 5.81846 50.8908Z"
                            fill="#2E75B6"
                            transform="matrix(1 0 0 -1 478.5 303.359)"
                        />
                        <path
                            d="M1.33333-2.33105e-06 1.33343 57.4113-1.33323 57.4113-1.33333 2.33105e-06ZM5.81846 50.0832 0.000104754 60.0575-5.81828 50.0832C-6.18933 49.4471-5.97448 48.6307-5.33841 48.2596-4.70234 47.8886-3.88592 48.1034-3.51488 48.7395L1.1518 56.7395-1.15161 56.7395 3.51505 48.7395C3.88609 48.1034 4.70251 47.8886 5.33858 48.2596 5.97465 48.6307 6.1895 49.4471 5.81846 50.0832Z"
                            fill="#2E75B6"
                            transform="matrix(1 0 0 -1 620.5 302.551)"
                        />
                        <path
                            d="M1.33333-2.85655e-06 1.33343 46.3641-1.33323 46.3641-1.33333 2.85655e-06ZM5.81846 39.0359 0.000104991 49.0103-5.81829 39.0359C-6.18933 38.3999-5.97448 37.5834-5.33842 37.2124-4.70235 36.8414-3.88592 37.0562-3.51488 37.6923L1.1518 45.6923-1.15161 45.6923 3.51504 37.6923C3.88608 37.0562 4.7025 36.8413 5.33857 37.2124 5.97464 37.5834 6.18949 38.3998 5.81846 39.0359Z"
                            fill="#2E75B6"
                            transform="matrix(1 0 0 -1 549.5 363.504)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(174.927 476)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(181.76 476)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(185.26 476)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(163.927 489)"
                        >
                            10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(177.26 489)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(157.593 502)"
                        >
                            35МВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(126.593 515)"
                        >
                            СВ508/115
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(176.427 515)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(179.927 515)"
                        >
                            18
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(960.294 432)"
                        >
                            II
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(968.627 432)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(972.127 432)"
                        >
                            СШ 10 кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(109.285 432)"
                        >
                            I
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(113.451 432)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(116.951 432)"
                        >
                            СШ 10 кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(565.363 315)"
                        >
                            О
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(573.696 315)"
                        >
                            СШ 110 кВ
                        </text>
                        <path id="c4292"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7F7F7F"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 495.5 520.5)"
                        />
                        <path id="c4291"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 495.5 496.5)"
                        />
                        <path
                            d="M-1.34009 15-1.00841 11.7098-0.0556968 8.64066 1.45135 5.86413 3.44627 3.44627 5.86413 1.45135 8.64066-0.0556968 11.7098-1.00841 15-1.34009 18.2902-1.00841 21.3593-0.0556967 24.1359 1.45135 26.5537 3.44627 28.5486 5.86413 30.0557 8.64065 31.0084 11.7098 31.3401 15 31.0084 18.2902 30.0557 21.3593 28.5486 24.1359 26.5537 26.5537 24.1359 28.5486 21.3593 30.0557 18.2902 31.0084 15 31.3401 11.7098 31.0084 8.64065 30.0557 5.86413 28.5486 3.44627 26.5537 1.45135 24.1359-0.0556967 21.3593-1.00841 18.2902ZM1.63136 17.8893 1.57814 17.6277 2.45217 20.4434 2.35062 20.2026 3.73361 22.7506 3.59022 22.5381 5.42186 24.758 5.24195 24.5781 7.46191 26.4098 7.24941 26.2664 9.79738 27.6494 9.5566 27.5478 12.3723 28.4219 12.1107 28.3686 15.1337 28.6734 14.8663 28.6734 17.8893 28.3686 17.6277 28.4219 20.4434 27.5478 20.2026 27.6494 22.7506 26.2664 22.5381 26.4098 24.758 24.5781 24.5781 24.758 26.4098 22.5381 26.2664 22.7506 27.6494 20.2026 27.5478 20.4434 28.4219 17.6277 28.3686 17.8893 28.6734 14.8663 28.6734 15.1337 28.3686 12.1107 28.4219 12.3723 27.5478 9.5566 27.6494 9.79738 26.2664 7.24941 26.4098 7.46191 24.5781 5.24195 24.758 5.42186 22.5381 3.59022 22.7506 3.73361 20.2026 2.35062 20.4434 2.45217 17.6277 1.57814 17.8893 1.63136 14.8663 1.32661 15.1337 1.32661 12.1107 1.63136 12.3723 1.57814 9.55661 2.45217 9.79738 2.35062 7.24941 3.73361 7.46191 3.59022 5.24195 5.42186 5.42186 5.24195 3.59022 7.46191 3.73361 7.24941 2.35062 9.79738 2.45217 9.55661 1.57814 12.3723 1.63136 12.1107 1.32661 15.1337 1.32661 14.8663Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 495.5 496.5)"
                        />
                        <path
                            d="M509.338 465.376 509.167 420.505 511.833 420.495 512.004 465.365ZM506.5 420.515C506.492 418.306 508.276 416.509 510.485 416.5 512.694 416.492 514.492 418.276 514.5 420.485 514.508 422.694 512.724 424.492 510.515 424.5 508.306 424.508 506.508 422.724 506.5 420.515Z"
                            fill="#6600CC"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(470.237 476)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(477.404 476)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(480.904 476)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(486.237 476)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(448.57 489)"
                        >
                            10/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(478.237 489)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(456.904 502)"
                        >
                            400кВа
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(452.737 515)"
                        >
                            ТМЗ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(475.57 515)"
                        >
                            400
                        </text>
                        <path id="c200002"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 727.5 387.5)"
                        />
                        <path id="c200001"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 727.5 363.5)"
                        />
                        <rect
                            id="c236"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 539.5 311.5)"
                        />
                        <rect
                            id="c2"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 732.5 293.5)"
                        />
                        <rect
                            id="c80"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2F5597"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 170.5 193.5)"
                        />
                        <path
                            d="M1.33333-0.00242496 1.49218 87.3364-1.17449 87.3412-1.33333 0.00242496ZM4.15884 87.3315C4.16286 89.5407 2.37526 91.3348 0.16612 91.3388-2.04302 91.3428-3.83713 89.5552-3.84115 87.3461-3.84517 85.1369-2.05757 83.3428 0.15157 83.3388 2.36071 83.3348 4.15482 85.1224 4.15884 87.3315Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 339.5 328.839)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(353.599 286)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(360.765 286)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(364.265 286)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(371.432 286)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(374.932 286)"
                        >
                            1
                        </text>
                        <path id="c100002"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 324.5 383.5)"
                        />
                        <path id="c100001"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 324.5 358.5)"
                        />
                        <rect
                            id="c1"
                            x="0"
                            y="0"
                            width="19"
                            height="18"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 330.5 292.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(303.742 339)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(310.908 339)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(314.408 339)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(274.075 352)"
                        >
                            10/110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(306.408 352)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(266.408 365)"
                        >
                            125000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(301.075 365)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(264.908 378)"
                        >
                            ТДЦ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(287.742 378)"
                        >
                            125000
                        </text>
                        <path
                            d="M0 0 70.9053 0.548976"
                            stroke="#4472C4"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 513.5 215.049)"
                        />
                        <path
                            d="M1.33333-5.27712e-06 1.33344 26.5263-1.33323 26.5263-1.33333 5.27712e-06ZM-4 1.58314e-05C-4.00001-2.20912-2.20915-3.99999-1.58314e-05-4 2.20912-4.00001 3.99999-2.20915 4-1.58314e-05 4.00001 2.20912 2.20915 3.99999 1.58314e-05 4-2.20912 4.00001-3.99999 2.20915-4 1.58314e-05Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 514.5 240.026)"
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
                            transform="matrix(1 0 0 -1 538.5 224.5)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(519.52 202)"
                        >
                            М
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(529.52 202)"
                        >
                            СВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(544.353 202)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(547.853 202)"
                        >
                            110кВ
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
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(506.046 20)"
                        >
                            АНДИЖАНСКАЯ ГЭС (ГЭС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(753.379 20)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="19"
                            transform="translate(759.546 20)"
                        >
                            29)
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(464.959 33)"
                        >
                            Установленный мощность
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(596.792 33)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(602.959 33)"
                        >
                            140 МВт Количество гидроагрегатов
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(797.126 33)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(803.292 33)"
                        >
                            4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(811.292 33)"
                        >
                            шт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(196.241 187)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(203.408 187)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(206.908 187)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(214.908 187)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(218.408 187)"
                        >
                            29
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(229.074 187)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(232.574 187)"
                        >
                            К
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(326.303 185)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(333.47 185)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(336.97 185)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(344.97 185)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(348.47 185)"
                        >
                            Кр
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(459.173 186)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(466.34 186)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(469.84 186)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(477.84 186)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(481.34 186)"
                        >
                            СО
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(664.309 184)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(671.476 184)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(674.976 184)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(682.976 184)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(686.476 184)"
                        >
                            29
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(697.143 184)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(700.643 184)"
                        >
                            Д
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(773.579 185)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(780.745 185)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(784.245 185)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(792.245 185)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(795.745 185)"
                        >
                            29
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(806.412 185)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(809.912 185)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(887.194 184)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(894.361 184)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(897.861 184)"
                        >
                            Л
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(905.861 184)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(909.361 184)"
                        >
                            Таш
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1147.01 292)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1154.18 292)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1157.68 292)"
                        >
                            2Т1
                        </text>
                        <path
                            d="M472.923 570.534 546.569 570.534 546.569 584.267 472.923 584.267Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M472.923 569.867 472.923 584.934"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M546.569 569.867 546.569 584.934"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M472.256 570.534 547.236 570.534"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M472.256 584.267 547.236 584.267"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g429"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(476.702 581)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M622.57 570.067 696.216 570.067 696.216 583.801 622.57 583.801Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M622.57 569.401 622.57 584.467"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M696.216 569.401 696.216 584.467"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M621.903 570.067 696.883 570.067"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M621.903 583.801 696.883 583.801"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g469"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(626.349 580)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M77.1979 223.363 166.43 223.363 166.43 236.163 77.1979 236.163Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M77.1979 222.696 77.1979 236.83"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M166.43 222.696 166.43 236.83"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M76.5312 223.363 167.097 223.363"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M76.5312 236.163 167.097 236.163"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g70"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(80.9774 233)"
                            >
                                U
                        </text>
                        <path
                            d="M101.107 400.466 190.339 400.466 190.339 413.266 101.107 413.266Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M101.107 399.8 101.107 413.933"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M190.339 399.8 190.339 413.933"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M100.44 400.466 191.005 400.466"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M100.44 413.266 191.005 413.266"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g419"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(104.886 410)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M948.625 403.848 1025.32 403.848 1025.32 416.648 948.625 416.648Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M948.625 403.181 948.625 417.315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1025.32 403.181 1025.32 417.315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M947.958 403.848 1025.99 403.848"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M947.958 416.648 1025.99 416.648"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g459"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(952.404 414)"
                            >
                                U
                            </text>
                        </g>
                        <rect
                            id="c429"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 501.5 454.5)"
                        />
                        <path id="c4692"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7F7F7F"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 643.5 521.5)"
                        />
                        <path id="c4691"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 643.5 497.5)"
                        />
                        <path
                            d="M-1.33966 15.5-1.00965 12.1172-0.0612783 8.96024 1.44049 6.10121 3.43115 3.60808 5.84746 1.54799 8.6262-0.0105331 11.7013-0.996931 15-1.34055 18.2986-0.996931 21.3738-0.0105333 24.1525 1.54799 26.5688 3.60808 28.5595 6.10121 30.0613 8.96024 31.0097 12.1172 31.3397 15.5 31.0097 18.8828 30.0613 22.0398 28.5595 24.8988 26.5688 27.3919 24.1525 29.452 21.3738 31.0105 18.2986 31.9969 15 32.3405 11.7013 31.9969 8.6262 31.0105 5.84746 29.452 3.43115 27.3919 1.44049 24.8988-0.0612782 22.0398-1.00965 18.8828ZM1.63178 18.4943 1.58171 18.2402 2.45573 21.1497 2.35917 20.9133 3.74216 23.5462 3.6037 23.3342 5.43534 25.6282 5.25845 25.4455 7.47841 27.3382 7.2656 27.1899 9.81357 28.619 9.56857 28.5123 12.3842 29.4155 12.1151 29.3589 15.1381 29.6738 14.8619 29.6738 17.8849 29.3589 17.6158 29.4155 20.4314 28.5123 20.1864 28.619 22.7344 27.1899 22.5216 27.3382 24.7416 25.4455 24.5647 25.6282 26.3963 23.3342 26.2578 23.5462 27.6408 20.9133 27.5443 21.1497 28.4183 18.2402 28.3682 18.4943 28.673 15.3705 28.673 15.6295 28.3682 12.5057 28.4183 12.7598 27.5443 9.8503 27.6408 10.0867 26.2578 7.45383 26.3963 7.66575 24.5647 5.37179 24.7416 5.55447 22.5216 3.66178 22.7344 3.81006 20.1864 2.38097 20.4314 2.48768 17.6158 1.58452 17.8849 1.64106 14.8619 1.32616 15.1381 1.32616 12.1151 1.64106 12.3842 1.58452 9.56857 2.48768 9.81357 2.38097 7.2656 3.81006 7.47841 3.66178 5.25845 5.55447 5.43534 5.37179 3.6037 7.66575 3.74216 7.45383 2.35917 10.0867 2.45573 9.8503 1.58171 12.7598 1.63178 12.5057 1.32703 15.6295 1.32703 15.3705Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 643.5 497.5)"
                        />
                        <path
                            d="M1.33333-3.07704e-06 1.33344 45.4926-1.33323 45.4926-1.33333 3.07704e-06ZM4.0001 45.4926C4.00011 47.7017 2.20925 49.4926 0.000114218 49.4926-2.20902 49.4926-3.99989 47.7017-3.99989 45.4926-3.9999 43.2835-2.20904 41.4926 9.57558e-05 41.4926 2.20923 41.4926 4.0001 43.2835 4.0001 45.4926Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 658.5 465.993)"
                        />
                        <rect
                            id="c469"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 648.5 455.5)"
                        />
                        <path
                            d="M371.167 471.209 371.167 419.5 373.833 419.5 373.833 471.209ZM368.5 419.5C368.5 417.291 370.291 415.5 372.5 415.5 374.709 415.5 376.5 417.291 376.5 419.5 376.5 421.709 374.709 423.5 372.5 423.5 370.291 423.5 368.5 421.709 368.5 419.5Z"
                            fill="#6600CC"
                        />
                        <rect
                            id="c309"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 362.5 454.5)"
                        />
                        <path
                            d="M219.167 471.209 219.167 419.5 221.833 419.5 221.833 471.209ZM216.5 419.5C216.5 417.291 218.291 415.5 220.5 415.5 222.709 415.5 224.5 417.291 224.5 419.5 224.5 421.709 222.709 423.5 220.5 423.5 218.291 423.5 216.5 421.709 216.5 419.5Z"
                            fill="#6600CC"
                        />
                        <rect
                            id="c269"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 211.5 455.5)"
                        />
                        <path
                            d="M784.167 472.209 784.167 420.5 786.833 420.5 786.833 472.209ZM781.5 420.5C781.5 418.291 783.291 416.5 785.5 416.5 787.709 416.5 789.5 418.291 789.5 420.5 789.5 422.709 787.709 424.5 785.5 424.5 783.291 424.5 781.5 422.709 781.5 420.5Z"
                            fill="#6600CC"
                        />
                        <rect
                            id="c349"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 776.5 455.5)"
                        />
                        <path
                            d="M929.167 472.209 929.167 420.5 931.833 420.5 931.833 472.209ZM926.5 420.5C926.5 418.291 928.291 416.5 930.5 416.5 932.709 416.5 934.5 418.291 934.5 420.5 934.5 422.709 932.709 424.5 930.5 424.5 928.291 424.5 926.5 422.709 926.5 420.5Z"
                            fill="#6600CC"
                        />
                        <rect
                            id="c389"
                            x="0"
                            y="0"
                            width="18"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 921.5 455.5)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(326.994 474)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(333.827 474)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(337.327 474)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(315.994 487)"
                        >
                            10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(329.327 487)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(309.66 500)"
                        >
                            35МВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(278.66 513)"
                        >
                            СВ508/115
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(328.494 513)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(331.994 513)"
                        >
                            18
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(742.443 474)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(749.276 474)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(752.776 474)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(731.443 487)"
                        >
                            10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(744.776 487)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(725.11 500)"
                        >
                            35МВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(694.11 513)"
                        >
                            СВ508/115
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(743.943 513)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(747.443 513)"
                        >
                            18
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(886.415 475)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(893.248 475)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(896.748 475)"
                        >
                            4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(875.415 488)"
                        >
                            10
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(888.748 488)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(869.081 501)"
                        >
                            35МВт
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(838.081 514)"
                        >
                            СВ508/115
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(887.915 514)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(891.415 514)"
                        >
                            18
                        </text>
                        <path
                            d="M935.761 224.621 1024.99 224.621 1024.99 237.421 935.761 237.421Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M935.761 223.955 935.761 238.088"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1024.99 223.955 1024.99 238.088"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M935.094 224.621 1025.66 224.621"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M935.094 237.421 1025.66 237.421"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g659"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(939.54 235)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M1.3333-0.00982292 1.97096 86.5423-0.695634 86.5619-1.3333 0.00982292ZM-3.99989 0.0294688C-4.01617-2.17961-2.23855-3.98362-0.0294688-3.99989 2.17961-4.01617 3.98362-2.23855 3.99989-0.0294688 4.01617 2.17961 2.23855 3.98362 0.0294688 3.99989-2.17961 4.01617-3.98362 2.23855-3.99989 0.0294688ZM0.637664 86.5522 4.61791 83.8561 0.676955 91.8854-3.38187 83.915Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 308.5 241.385)"
                        />
                        <rect
                            id="c40"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 299.5 192.5)"
                        />
                        <path
                            d="M1.3333-0.00982292 1.97096 86.5423-0.695634 86.5619-1.3333 0.00982292ZM-3.99989 0.0294688C-4.01617-2.17961-2.23855-3.98362-0.0294688-3.99989 2.17961-4.01617 3.98362-2.23855 3.99989-0.0294688 4.01617 2.17961 2.23855 3.98362 0.0294688 3.99989-2.17961 4.01617-3.98362 2.23855-3.99989 0.0294688ZM0.637664 86.5522 4.61791 83.8561 0.676955 91.8854-3.38187 83.915Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 444.5 240.385)"
                        />
                        <rect
                            id="c190"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 435.5 192.5)"
                        />
                        <path
                            d="M1.3333-0.00982292 1.97096 86.5423-0.695634 86.5619-1.3333 0.00982292ZM-3.99989 0.0294688C-4.01617-2.17961-2.23855-3.98362-0.0294688-3.99989 2.17961-4.01617 3.98362-2.23855 3.99989-0.0294688 4.01617 2.17961 2.23855 3.98362 0.0294688 3.99989-2.17961 4.01617-3.98362 2.23855-3.99989 0.0294688ZM0.637664 86.5522 4.61791 83.8561 0.676955 91.8854-3.38187 83.915Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 645.5 241.385)"
                        />
                        <rect
                            id="c120"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 636.5 194.5)"
                        />
                        <path
                            d="M1.33333-1.49893e-06 1.33343 88.0547-1.33323 88.0547-1.33333 1.49893e-06ZM-4 4.4968e-06C-4-2.20913-2.20914-4-4.4968e-06-4 2.20913-4 4-2.20914 4-4.4968e-06 4 2.20913 2.20914 4 4.4968e-06 4-2.20913 4-4 2.20914-4 4.4968e-06ZM9.89911e-05 88.0547 4.0001 85.388 0.000104987 93.388-3.9999 85.388Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 759.5 241.888)"
                        />
                        <rect
                            id="c213"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 750.5 193.5)"
                        />
                        <path
                            d="M1.3333-0.00982292 1.97096 86.5423-0.695634 86.5619-1.3333 0.00982292ZM-3.99989 0.0294688C-4.01617-2.17961-2.23855-3.98362-0.0294688-3.99989 2.17961-4.01617 3.98362-2.23855 3.99989-0.0294688 4.01617 2.17961 2.23855 3.98362 0.0294688 3.99989-2.17961 4.01617-3.98362 2.23855-3.99989 0.0294688ZM0.637664 86.5522 4.61791 83.8561 0.676955 91.8854-3.38187 83.915Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 871.5 241.385)"
                        />
                        <rect
                            id="c160"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 862.5 194.5)"
                        />
                        <path
                            d="M1.16667-3.47724e-06 1.16677 35.2247-1.16656 35.2247-1.16667 3.47724e-06ZM-4 1.1922e-05C-4.00001-2.20913-2.20915-3.99999-1.1922e-05-4 2.20913-4.00001 3.99999-2.20915 4-1.1922e-05 4.00001 2.20913 2.20915 3.99999 1.1922e-05 4-2.20913 4.00001-3.99999 2.20915-4 1.1922e-05Z"
                            fill="#6600CC"
                            transform="matrix(1 0 0 -1 339 418.225)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(617.096 477)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(624.262 477)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(627.762 477)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(633.096 477)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(595.429 490)"
                        >
                            10/0,4
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(625.096 490)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(601.096 503)"
                        >
                            400
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(619.762 503)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(599.596 516)"
                        >
                            ТМЗ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(622.429 516)"
                        >
                            400
                        </text>
                        <path
                            d="M1.33333-5.27712e-06 1.33344 26.5263-1.33323 26.5263-1.33333 5.27712e-06ZM-4 1.58314e-05C-4.00001-2.20912-2.20915-3.99999-1.58314e-05-4 2.20912-4.00001 3.99999-2.20915 4-1.58314e-05 4.00001 2.20912 2.20915 3.99999 1.58314e-05 4-2.20912 4.00001-3.99999 2.20915-4 1.58314e-05Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 582.5 242.026)"
                        />
                        <path
                            d="M1134.19 422.224 1134.17 389.501 1136.83 389.499 1136.85 422.223ZM1139.52 422.221C1139.52 424.43 1137.73 426.222 1135.52 426.223 1133.31 426.225 1131.52 424.435 1131.52 422.226 1131.52 420.017 1133.31 418.225 1135.52 418.223 1137.73 418.222 1139.52 420.012 1139.52 422.221Z"
                            fill="#6600CC"
                        />
                        <path
                            d="M0 0 0.268346 38.7653"
                            stroke="#4472C4"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1134.5 336.265)"
                        />
                        <path
                            d="M1.33333-3.79791e-06 1.33344 36.8577-1.33323 36.8577-1.33333 3.79791e-06ZM4.0001 36.8577C4.00011 39.0669 2.20926 40.8577 0.000116381 40.8577-2.20902 40.8577-3.99989 39.0669-3.99989 36.8577-3.9999 34.6486-2.20905 32.8577 9.35931e-05 32.8577 2.20923 32.8577 4.0001 34.6486 4.0001 36.8577Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1134.5 278.358)"
                        />
                        <path id="c6702"
                            d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1119.5 390.5)"
                        />
                        <path id="c6701"
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1119.5 366.5)"
                        />
                        <rect
                            id="c670"
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FFFFFF"
                            transform="matrix(1 0 0 -1 1125.5 297.5)"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1093.19 348)"
                        >
                            2Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1105.69 348)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1109.19 348)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1068.86 361)"
                        >
                            10/110
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1101.19 361)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1066.53 374)"
                        >
                            63000
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1095.86 374)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1075.36 387)"
                        >
                            SF63000
                        </text>
                        <path
                            d="M1217.84 422.759 1105.5 422.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="16"
                            transform="translate(1194.14 450)"
                        >
                            ГЭС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="16"
                            transform="translate(1226.64 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="16"
                            transform="translate(1231.97 450)"
                        >
                            36
                        </text>
                        <rect
                            x="1031.5"
                            y="184.5"
                            width="228"
                            height="277"
                            stroke="#172C51"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            stroke-dasharray="5.33333 4"
                            fill="none"
                        />
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="16"
                            transform="translate(1093.95 178)"
                        >
                            Андижанская ГЭС
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="16"
                            transform="translate(1230.04 178)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="16"
                            transform="translate(1235.38 178)"
                        >
                            2
                        </text>
                        <path id="c3891"
                            d="M905.5 495C905.5 481.469 916.469 470.5 930 470.5 943.531 470.5 954.5 481.469 954.5 495 954.5 508.531 943.531 519.5 930 519.5 916.469 519.5 905.5 508.531 905.5 495Z"
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
                                            d="M928.689 487.933 929.622 487.933 930.944 488.167 932.033 488.633 932.889 489.178 933.9 490.189 934.522 491.122 934.989 492.367 935.144 493.067 935.144 494.933 934.833 496.1 934.211 497.344 933.589 498.122 933.044 498.667 931.956 499.367 930.711 499.833 929.933 499.989 928.378 499.989 927.133 499.678 926.278 499.289 925.422 498.744 924.567 497.967 924.022 497.189 923.478 496.1 923.167 494.856 923.089 493.922 923.244 492.678 923.556 491.667 924.178 490.5 925.033 489.567 925.656 489.022 926.978 488.322 928.144 488.011Z"
                                        />
                                        <path
                                            d="M929.156 474.089 930.011 474.089 931.489 474.322 932.967 474.789 934.211 475.411 935.144 476.033 935.922 476.733 936.856 477.667 937.711 478.911 938.333 480.156 938.8 481.556 939.033 482.722 939.111 483.344 939.111 484.822 938.878 486.3 938.489 487.622 937.867 488.944 937.089 490.033 936.933 490.033 936.311 488.944 935.378 487.856 934.522 487.078 933.433 486.378 932.267 485.833 930.944 485.444 929.156 485.211Z"
                                        />
                                        <path
                                            d="M916.4 489.878 916.789 489.956 918.967 491.2 920.522 492.133 920.6 492.289 920.444 493.922 920.6 495.556 920.989 497.033 921.533 498.2 921.533 498.433 919.356 499.678 917.489 500.767 913.444 503.1 912.122 503.878 911.889 503.878 911.189 502.4 910.8 501.078 910.644 500.144 910.567 498.822 910.722 497.344 910.956 496.256 911.5 494.778 912.044 493.767 912.744 492.756 913.678 491.744 914.533 490.967 915.933 490.111Z"
                                        />
                                        <path
                                            d="M936.7 498.433 937.089 498.511 938.956 499.6 945.022 503.1 946.344 503.878 946.189 504.267 945.644 505.044 944.944 505.9 944.4 506.444 943.233 507.3 941.989 508 940.511 508.544 939.344 508.778 938.878 508.856 936.544 508.856 935.378 508.622 934.133 508.233 932.811 507.611 931.878 506.989 931.878 502.322 932.578 502.011 933.9 501.311 934.833 500.611 935.922 499.522Z"
                                        />
                                        <path
                                            d="M919.667 479.067 921.378 479.067 922.856 479.3 924.489 479.844 925.811 480.544 926.433 480.933 926.433 485.678 925.033 486.3 923.944 487 923.089 487.7 922.544 488.244 921.611 489.567 921.144 489.411 919.822 488.633 913.756 485.133 912.044 484.122 911.967 483.967 912.511 483.111 913.367 482.1 913.989 481.478 915.156 480.622 916.244 480 917.722 479.456 918.578 479.222Z"
                                        />
                                        <path
                                            d="M923.167 500.533 923.478 500.611 924.644 501.467 925.967 502.089 927.211 502.478 928.144 502.633 929.078 502.711 929.156 502.789 929.156 513.833 927.989 513.833 926.433 513.522 925.111 513.056 923.711 512.278 922.7 511.5 921.922 510.8 921.144 509.867 920.367 508.622 919.744 507.222 919.356 505.744 919.2 504.344 919.2 503.489 919.278 502.789 921.222 501.7 922.544 500.922Z"
                                        />
                                        <path
                                            d="M946.267 484.044 946.422 484.044 946.967 485.133 947.433 486.533 947.667 487.778 947.744 489.333 947.589 490.733 947.278 492.056 946.656 493.533 946.111 494.467 945.489 495.322 944.633 496.256 943.467 497.189 942.456 497.811 941.756 498.122 939.811 497.033 937.944 495.944 937.711 495.789 937.867 494.389 937.867 493.222 938.567 492.522 939.578 491.2 940.278 490.033 940.978 488.556 941.522 486.844 942.222 486.378 944.167 485.289 946.033 484.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                            d="M137.88 95.2562 221.48 95.2562 221.48 108.847 137.88 108.847Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.88 108.847 221.48 108.847 221.48 122.439 137.88 122.439Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.213 108.847 222.146 108.847"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.88 94.5895 137.88 123.105"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.48 94.5895 221.48 123.105"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.213 95.2562 222.146 95.2562"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M137.213 122.439 222.146 122.439"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g80"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(141.66 105)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g81"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(141.66 119)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip3)"
                            transform="matrix(0.000104987 0 0 0.000104987 213 96)"
                        >
                            <g clip-path="url(#clip5)" transform="matrix(1 0 0 1.02857 -0.125 0)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 214 110)"
                        >
                            <g clip-path="url(#clip8)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M267.106 95.334 350.706 95.334 350.706 108.925 267.106 108.925Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M267.106 108.925 350.706 108.925 350.706 122.516 267.106 122.516Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M266.44 108.925 351.373 108.925"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M267.106 94.6673 267.106 123.183"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M350.706 94.6673 350.706 123.183"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M266.44 95.334 351.373 95.334"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M266.44 122.516 351.373 122.516"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g40"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(270.886 105)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g41"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(270.886 119)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M409.295 95.3807 492.894 95.3807 492.894 108.972 409.295 108.972Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M409.295 108.972 492.894 108.972 492.894 122.563 409.295 122.563Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M408.628 108.972 493.561 108.972"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M409.295 94.714 409.295 123.23"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M492.894 94.714 492.894 123.23"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M408.628 95.3807 493.561 95.3807"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M408.628 122.563 493.561 122.563"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g190Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(413.074 105)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g190Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(413.074 119)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip9)"
                            transform="matrix(0.000104987 0 0 0.000104987 342 96)"
                        >
                            <g clip-path="url(#clip10)" transform="scale(1 1.02857)">
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
                            transform="matrix(0.000104987 0 0 0.000104987 342 110)"
                        >
                            <g clip-path="url(#clip12)" transform="matrix(1.16667 0 0 1 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip13)"
                            transform="matrix(0.000104987 0 0 0.000104987 486 96)"
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
                            transform="matrix(0.000104987 0 0 0.000104987 487 110)"
                        >
                            <g clip-path="url(#clip16)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M604.121 95.6443 687.721 95.6443 687.721 109.235 604.121 109.235Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M604.121 109.235 687.721 109.235 687.721 122.827 604.121 122.827Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M603.455 109.235 688.388 109.235"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M604.121 94.9776 604.121 123.493"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M687.721 94.9776 687.721 123.493"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M603.455 95.6443 688.388 95.6443"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M603.455 122.827 688.388 122.827"
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
                                transform="translate(607.901 106)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g121"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(607.901 119)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip17)"
                            transform="matrix(0.000104987 0 0 0.000104987 681 96)"
                        >
                            <g clip-path="url(#clip18)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip19)"
                            transform="matrix(0.000104987 0 0 0.000104987 682 110)"
                        >
                            <g
                                clip-path="url(#clip20)"
                                transform="matrix(1 0 0 1.02857 -0.5 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M717.515 95.6443 801.114 95.6443 801.114 109.235 717.515 109.235Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M717.515 109.235 801.114 109.235 801.114 122.827 717.515 122.827Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M716.848 109.235 801.781 109.235"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M717.515 94.9776 717.515 123.493"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M801.114 94.9776 801.114 123.493"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M716.848 95.6443 801.781 95.6443"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M716.848 122.827 801.781 122.827"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g213Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(721.294 106)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g213Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(721.294 119)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip21)"
                            transform="matrix(0.000104987 0 0 0.000104987 794 96)"
                        >
                            <g clip-path="url(#clip22)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip23)"
                            transform="matrix(0.000104987 0 0 0.000104987 795 110)"
                        >
                            <g clip-path="url(#clip24)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M829.711 95.4931 913.311 95.4931 913.311 109.084 829.711 109.084Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M829.711 109.084 913.311 109.084 913.311 122.675 829.711 122.675Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M829.045 109.084 913.978 109.084"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M829.711 94.8265 829.711 123.342"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M913.311 94.8265 913.311 123.342"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M829.045 95.4931 913.978 95.4931"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M829.045 122.675 913.978 122.675"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g160"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(833.491 105)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g161"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(833.491 119)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip25)"
                            transform="matrix(0.000104987 0 0 0.000104987 907 96)"
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
                        <g
                            clip-path="url(#clip27)"
                            transform="matrix(0.000104987 0 0 0.000104987 907 110)"
                        >
                            <g clip-path="url(#clip28)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M459.713 332.088 543.313 332.088 543.313 345.679 459.713 345.679Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M459.713 345.679 543.313 345.679 543.313 359.27 459.713 359.27Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M459.047 345.679 543.98 345.679"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M459.713 331.421 459.713 359.937"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M543.313 331.421 543.313 359.937"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M459.047 332.088 543.98 332.088"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M459.047 359.27 543.98 359.27"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g236Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(463.493 342)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g236Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(463.493 356)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip29)"
                            transform="matrix(0.000104987 0 0 0.000104987 537 333)"
                        >
                            <g clip-path="url(#clip30)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip31)"
                            transform="matrix(0.000104987 0 0 0.000104987 537 346)"
                        >
                            <g clip-path="url(#clip32)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1036.89 275.23 1120.49 275.23 1120.49 288.822 1036.89 288.822Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1036.89 288.822 1120.49 288.822 1120.49 302.413 1036.89 302.413Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1036.22 288.822 1121.15 288.822"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1036.89 274.564 1036.89 303.079"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1120.49 274.564 1120.49 303.079"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1036.22 275.23 1121.15 275.23"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1036.22 302.413 1121.15 302.413"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g670"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1040.67 285)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g669"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1040.67 299)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip33)"
                            transform="matrix(0.000104987 0 0 0.000104987 1114 276)"
                        >
                            <g clip-path="url(#clip34)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip35)"
                            transform="matrix(0.000104987 0 0 0.000104987 1114 289)"
                        >
                            <g clip-path="url(#clip36)" transform="scale(1.07692 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1360.71 1360.71)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(382.972 449)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(390.139 449)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(393.639 449)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(400.472 449)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(403.972 449)"
                        >
                            2
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(232.943 450)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(240.11 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(243.61 450)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(250.443 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(253.943 450)"
                        >
                            1
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(522.418 450)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(529.585 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(533.085 450)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(540.251 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(543.751 450)"
                        >
                            11
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(669.22 450)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(676.387 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(679.887 450)"
                        >
                            Т
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(687.053 450)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(690.553 450)"
                        >
                            12
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(797.696 449)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(804.862 449)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(808.362 449)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(815.196 449)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(818.696 449)"
                        >
                            3
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(943.13 449)"
                        >
                            В
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(950.297 449)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(953.797 449)"
                        >
                            Г
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(960.63 449)"
                        >
                            -
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(964.13 449)"
                        >
                            4
                        </text>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1061.17 56.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1159.5 110.171)"
                        />
                        <path
                            d="M1157.55 123.031 1149.86 114.654 1150.35 114.203 1158.04 122.58ZM1150.11 114.429 1149.95 118.197 1146.5 110.5 1153.87 114.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1166.95 122.889 1157.5 122.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1064.78 42.6381 1159.15 42.6381 1159.15 55.4381 1064.78 55.4381Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1064.78 41.9714 1064.78 56.1048"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1159.15 41.9714 1159.15 56.1048"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1064.11 42.6381 1159.81 42.6381"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1064.11 55.4381 1159.81 55.4381"
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
                                transform="translate(1068.56 53)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1079.06 53)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1060.5 56.5001 1079.69 56.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1167.27 109.722 1254.93 109.722 1254.93 122.522 1167.27 122.522Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1167.27 109.055 1167.27 123.188"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1254.93 109.055 1254.93 123.188"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1166.6 109.722 1255.6 109.722"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1166.6 122.522 1255.6 122.522"
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
                                transform="translate(1171.05 120)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1181.55 120)"
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
                            transform="matrix(1 0 0 -1 1057.5 64.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1166.99 82.5001)"
                        />
                        <path
                            d="M1167.5 82.5001 1186.69 82.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1171.47 69.5383 1244.67 69.5383 1244.67 82.3383 1171.47 82.3383Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1171.47 68.8716 1171.47 83.0049"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1244.67 68.8716 1244.67 83.0049"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1170.8 69.5383 1245.33 69.5383"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1170.8 82.3383 1245.33 82.3383"
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
                                transform="translate(1175.25 80)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1143.5 110.5 1166.21 110.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M172.231 520.773 265.339 520.773 265.339 533.573 172.231 533.573Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M172.231 533.573 265.339 533.573 265.339 546.373 172.231 546.373Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M172.231 546.373 265.339 546.373 265.339 559.173 172.231 559.173Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M172.231 559.173 265.339 559.173 265.339 571.973 172.231 571.973Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M172.231 571.973 265.339 571.973 265.339 584.773 172.231 584.773Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M172.231 584.773 265.339 584.773 265.339 597.573 172.231 597.573Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M171.564 533.573 266.006 533.573"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M171.564 546.373 266.006 546.373"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M171.564 559.173 266.006 559.173"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M171.564 571.973 266.006 571.973"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M171.564 584.773 266.006 584.773"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M172.231 520.106 172.231 598.24"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M265.339 520.106 265.339 598.24"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M171.564 520.773 266.006 520.773"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M171.564 597.573 266.006 597.573"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g269"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(176.01 531)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g271"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(176.01 544)"
                            >
                                Qвар
                        </text>
                        <g>
                            <text id="a269"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(176.01 556)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k269"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(176.01 569)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n269"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(176.01 582)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w269" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(176.01 595)"
                            >
                                Qвода
                        </text>
                        <path
                            d="M322.666 520.241 415.774 520.241 415.774 533.041 322.666 533.041Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M322.666 533.041 415.774 533.041 415.774 545.841 322.666 545.841Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M322.666 545.841 415.774 545.841 415.774 558.641 322.666 558.641Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M322.666 558.641 415.774 558.641 415.774 571.441 322.666 571.441Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M322.666 571.441 415.774 571.441 415.774 584.241 322.666 584.241Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M322.666 584.241 415.774 584.241 415.774 597.041 322.666 597.041Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M321.999 533.041 416.441 533.041"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M321.999 545.841 416.441 545.841"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M321.999 558.641 416.441 558.641"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M321.999 571.441 416.441 571.441"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M321.999 584.241 416.441 584.241"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M322.666 519.574 322.666 597.708"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M415.774 519.574 415.774 597.708"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M321.999 520.241 416.441 520.241"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M321.999 597.041 416.441 597.041"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g309"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(326.445 530)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g311"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(326.445 543)"
                            >
                                Qвар
                        </text>
                        <g>
                            <text id="a309"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(326.445 556)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k309"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(326.445 569)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n309"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(326.445 581)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w309" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(326.445 594)"
                            >
                                Qвода
                        </text>
                        <path
                            d="M737.699 523.99 830.807 523.99 830.807 536.79 737.699 536.79Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.699 536.79 830.807 536.79 830.807 549.59 737.699 549.59Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.699 549.59 830.807 549.59 830.807 562.39 737.699 562.39Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.699 562.39 830.807 562.39 830.807 575.19 737.699 575.19Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.699 575.19 830.807 575.19 830.807 587.99 737.699 587.99Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.699 587.99 830.807 587.99 830.807 600.79 737.699 600.79Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.032 536.79 831.474 536.79"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.032 549.59 831.474 549.59"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.032 562.39 831.474 562.39"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.032 575.19 831.474 575.19"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.032 587.99 831.474 587.99"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.699 523.323 737.699 601.457"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M830.807 523.323 830.807 601.457"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.032 523.99 831.474 523.99"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M737.032 600.79 831.474 600.79"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g349"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(741.478 534)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g351"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(741.478 547)"
                            >
                                Qвар
                        </text>
                        <g>
                            <text id="a349"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(741.478 560)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k349"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(741.478 572)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n349"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(741.478 585)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w349" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(741.478 598)"
                            >
                                Qвода
                        </text>
                        <path
                            d="M881.631 521.777 974.74 521.777 974.74 534.577 881.631 534.577Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M881.631 534.577 974.74 534.577 974.74 547.377 881.631 547.377Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M881.631 547.377 974.74 547.377 974.74 560.177 881.631 560.177Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M881.631 560.177 974.74 560.177 974.74 572.977 881.631 572.977Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M881.631 572.977 974.74 572.977 974.74 585.777 881.631 585.777Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M881.631 585.777 974.74 585.777 974.74 598.577 881.631 598.577Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M880.965 534.577 975.406 534.577"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M880.965 547.377 975.406 547.377"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M880.965 560.177 975.406 560.177"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M880.965 572.977 975.406 572.977"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M880.965 585.777 975.406 585.777"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M881.631 521.11 881.631 599.244"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M974.74 521.11 974.74 599.244"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M880.965 521.777 975.406 521.777"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M880.965 598.577 975.406 598.577"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g389"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(885.411 532)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g391"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(885.411 545)"
                            >
                                Qвар
                        </text>
                        <g>
                            <text id="a389"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(885.411 557)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k389"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(885.411 570)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n389"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(885.411 583)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w389" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(885.411 596)"
                            >
                                Qвода
                        </text>
                        <path
                            d="M9.50005 566.5C9.50005 561.529 13.7533 557.5 19.0001 557.5 24.2468 557.5 28.5001 561.529 28.5001 566.5 28.5001 571.471 24.2468 575.5 19.0001 575.5 13.7533 575.5 9.50005 571.471 9.50005 566.5Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M9.50005 588C9.50005 582.753 13.7533 578.5 19.0001 578.5 24.2468 578.5 28.5001 582.753 28.5001 588 28.5001 593.247 24.2468 597.5 19.0001 597.5 13.7533 597.5 9.50005 593.247 9.50005 588Z"
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
                            transform="translate(33.9575 569)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.8748 591)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M9 544.5C9 539.253 13.2533 535 18.5 535 23.7467 535 28 539.253 28 544.5 28 549.747 23.7467 554 18.5 554 13.2533 554 9 549.747 9 544.5Z"
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
                            transform="translate(33.8748 547)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(34.1396 523)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.8749 500)"
                        >
                            прием
                        </text>
                        <g transform="matrix(0.000104987 0 0 0.000104987 14 489)">
                            <g clip-path="url(#clip37)" transform="scale(1 1.07143)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img4"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <g transform="matrix(0.000104987 0 0 0.000104987 14 511)">
                            <g clip-path="url(#clip38)" transform="scale(1 1.07143)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img7"
                                    transform="scale(1953.85 1953.85)"
                                ></use>
                            </g>
                        </g>
                        <path id="c3491"
                            d="M762.5 497C762.5 483.469 773.469 472.5 787 472.5 800.531 472.5 811.5 483.469 811.5 497 811.5 510.531 800.531 521.5 787 521.5 773.469 521.5 762.5 510.531 762.5 497Z"
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
                                            d="M785.689 490.933 786.622 490.933 787.944 491.167 789.033 491.633 789.889 492.178 790.9 493.189 791.522 494.122 791.989 495.367 792.144 496.067 792.144 497.933 791.833 499.1 791.211 500.344 790.589 501.122 790.044 501.667 788.956 502.367 787.711 502.833 786.933 502.989 785.378 502.989 784.133 502.678 783.278 502.289 782.422 501.744 781.567 500.967 781.022 500.189 780.478 499.1 780.167 497.856 780.089 496.922 780.244 495.678 780.556 494.667 781.178 493.5 782.033 492.567 782.656 492.022 783.978 491.322 785.144 491.011Z"
                                        />
                                        <path
                                            d="M786.156 477.089 787.011 477.089 788.489 477.322 789.967 477.789 791.211 478.411 792.144 479.033 792.922 479.733 793.856 480.667 794.711 481.911 795.333 483.156 795.8 484.556 796.033 485.722 796.111 486.344 796.111 487.822 795.878 489.3 795.489 490.622 794.867 491.944 794.089 493.033 793.933 493.033 793.311 491.944 792.378 490.856 791.522 490.078 790.433 489.378 789.267 488.833 787.944 488.444 786.156 488.211Z"
                                        />
                                        <path
                                            d="M773.4 492.878 773.789 492.956 775.967 494.2 777.522 495.133 777.6 495.289 777.444 496.922 777.6 498.556 777.989 500.033 778.533 501.2 778.533 501.433 776.356 502.678 774.489 503.767 770.444 506.1 769.122 506.878 768.889 506.878 768.189 505.4 767.8 504.078 767.644 503.144 767.567 501.822 767.722 500.344 767.956 499.256 768.5 497.778 769.044 496.767 769.744 495.756 770.678 494.744 771.533 493.967 772.933 493.111Z"
                                        />
                                        <path
                                            d="M793.7 501.433 794.089 501.511 795.956 502.6 802.022 506.1 803.344 506.878 803.189 507.267 802.644 508.044 801.944 508.9 801.4 509.444 800.233 510.3 798.989 511 797.511 511.544 796.344 511.778 795.878 511.856 793.544 511.856 792.378 511.622 791.133 511.233 789.811 510.611 788.878 509.989 788.878 505.322 789.578 505.011 790.9 504.311 791.833 503.611 792.922 502.522Z"
                                        />
                                        <path
                                            d="M776.667 482.067 778.378 482.067 779.856 482.3 781.489 482.844 782.811 483.544 783.433 483.933 783.433 488.678 782.033 489.3 780.944 490 780.089 490.7 779.544 491.244 778.611 492.567 778.144 492.411 776.822 491.633 770.756 488.133 769.044 487.122 768.967 486.967 769.511 486.111 770.367 485.1 770.989 484.478 772.156 483.622 773.244 483 774.722 482.456 775.578 482.222Z"
                                        />
                                        <path
                                            d="M780.167 503.533 780.478 503.611 781.644 504.467 782.967 505.089 784.211 505.478 785.144 505.633 786.078 505.711 786.156 505.789 786.156 516.833 784.989 516.833 783.433 516.522 782.111 516.056 780.711 515.278 779.7 514.5 778.922 513.8 778.144 512.867 777.367 511.622 776.744 510.222 776.356 508.744 776.2 507.344 776.2 506.489 776.278 505.789 778.222 504.7 779.544 503.922Z"
                                        />
                                        <path
                                            d="M803.267 487.044 803.422 487.044 803.967 488.133 804.433 489.533 804.667 490.778 804.744 492.333 804.589 493.733 804.278 495.056 803.656 496.533 803.111 497.467 802.489 498.322 801.633 499.256 800.467 500.189 799.456 500.811 798.756 501.122 796.811 500.033 794.944 498.944 794.711 498.789 794.867 497.389 794.867 496.222 795.567 495.522 796.578 494.2 797.278 493.033 797.978 491.556 798.522 489.844 799.222 489.378 801.167 488.289 803.033 487.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c3091"
                            d="M347.5 493C347.5 479.469 358.469 468.5 372 468.5 385.531 468.5 396.5 479.469 396.5 493 396.5 506.531 385.531 517.5 372 517.5 358.469 517.5 347.5 506.531 347.5 493Z"
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
                                            d="M370.689 486.933 371.622 486.933 372.944 487.167 374.033 487.633 374.889 488.178 375.9 489.189 376.522 490.122 376.989 491.367 377.144 492.067 377.144 493.933 376.833 495.1 376.211 496.344 375.589 497.122 375.044 497.667 373.956 498.367 372.711 498.833 371.933 498.989 370.378 498.989 369.133 498.678 368.278 498.289 367.422 497.744 366.567 496.967 366.022 496.189 365.478 495.1 365.167 493.856 365.089 492.922 365.244 491.678 365.556 490.667 366.178 489.5 367.033 488.567 367.656 488.022 368.978 487.322 370.144 487.011Z"
                                        />
                                        <path
                                            d="M371.156 473.089 372.011 473.089 373.489 473.322 374.967 473.789 376.211 474.411 377.144 475.033 377.922 475.733 378.856 476.667 379.711 477.911 380.333 479.156 380.8 480.556 381.033 481.722 381.111 482.344 381.111 483.822 380.878 485.3 380.489 486.622 379.867 487.944 379.089 489.033 378.933 489.033 378.311 487.944 377.378 486.856 376.522 486.078 375.433 485.378 374.267 484.833 372.944 484.444 371.156 484.211Z"
                                        />
                                        <path
                                            d="M358.4 488.878 358.789 488.956 360.967 490.2 362.522 491.133 362.6 491.289 362.444 492.922 362.6 494.556 362.989 496.033 363.533 497.2 363.533 497.433 361.356 498.678 359.489 499.767 355.444 502.1 354.122 502.878 353.889 502.878 353.189 501.4 352.8 500.078 352.644 499.144 352.567 497.822 352.722 496.344 352.956 495.256 353.5 493.778 354.044 492.767 354.744 491.756 355.678 490.744 356.533 489.967 357.933 489.111Z"
                                        />
                                        <path
                                            d="M378.7 497.433 379.089 497.511 380.956 498.6 387.022 502.1 388.344 502.878 388.189 503.267 387.644 504.044 386.944 504.9 386.4 505.444 385.233 506.3 383.989 507 382.511 507.544 381.344 507.778 380.878 507.856 378.544 507.856 377.378 507.622 376.133 507.233 374.811 506.611 373.878 505.989 373.878 501.322 374.578 501.011 375.9 500.311 376.833 499.611 377.922 498.522Z"
                                        />
                                        <path
                                            d="M361.667 478.067 363.378 478.067 364.856 478.3 366.489 478.844 367.811 479.544 368.433 479.933 368.433 484.678 367.033 485.3 365.944 486 365.089 486.7 364.544 487.244 363.611 488.567 363.144 488.411 361.822 487.633 355.756 484.133 354.044 483.122 353.967 482.967 354.511 482.111 355.367 481.1 355.989 480.478 357.156 479.622 358.244 479 359.722 478.456 360.578 478.222Z"
                                        />
                                        <path
                                            d="M365.167 499.533 365.478 499.611 366.644 500.467 367.967 501.089 369.211 501.478 370.144 501.633 371.078 501.711 371.156 501.789 371.156 512.833 369.989 512.833 368.433 512.522 367.111 512.056 365.711 511.278 364.7 510.5 363.922 509.8 363.144 508.867 362.367 507.622 361.744 506.222 361.356 504.744 361.2 503.344 361.2 502.489 361.278 501.789 363.222 500.7 364.544 499.922Z"
                                        />
                                        <path
                                            d="M388.267 483.044 388.422 483.044 388.967 484.133 389.433 485.533 389.667 486.778 389.744 488.333 389.589 489.733 389.278 491.056 388.656 492.533 388.111 493.467 387.489 494.322 386.633 495.256 385.467 496.189 384.456 496.811 383.756 497.122 381.811 496.033 379.944 494.944 379.711 494.789 379.867 493.389 379.867 492.222 380.567 491.522 381.578 490.2 382.278 489.033 382.978 487.556 383.522 485.844 384.222 485.378 386.167 484.289 388.033 483.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c2691"
                            d="M197.5 493C197.5 479.469 208.469 468.5 222 468.5 235.531 468.5 246.5 479.469 246.5 493 246.5 506.531 235.531 517.5 222 517.5 208.469 517.5 197.5 506.531 197.5 493Z"
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
                                            d="M220.689 486.933 221.622 486.933 222.944 487.167 224.033 487.633 224.889 488.178 225.9 489.189 226.522 490.122 226.989 491.367 227.144 492.067 227.144 493.933 226.833 495.1 226.211 496.344 225.589 497.122 225.044 497.667 223.956 498.367 222.711 498.833 221.933 498.989 220.378 498.989 219.133 498.678 218.278 498.289 217.422 497.744 216.567 496.967 216.022 496.189 215.478 495.1 215.167 493.856 215.089 492.922 215.244 491.678 215.556 490.667 216.178 489.5 217.033 488.567 217.656 488.022 218.978 487.322 220.144 487.011Z"
                                        />
                                        <path
                                            d="M221.156 473.089 222.011 473.089 223.489 473.322 224.967 473.789 226.211 474.411 227.144 475.033 227.922 475.733 228.856 476.667 229.711 477.911 230.333 479.156 230.8 480.556 231.033 481.722 231.111 482.344 231.111 483.822 230.878 485.3 230.489 486.622 229.867 487.944 229.089 489.033 228.933 489.033 228.311 487.944 227.378 486.856 226.522 486.078 225.433 485.378 224.267 484.833 222.944 484.444 221.156 484.211Z"
                                        />
                                        <path
                                            d="M208.4 488.878 208.789 488.956 210.967 490.2 212.522 491.133 212.6 491.289 212.444 492.922 212.6 494.556 212.989 496.033 213.533 497.2 213.533 497.433 211.356 498.678 209.489 499.767 205.444 502.1 204.122 502.878 203.889 502.878 203.189 501.4 202.8 500.078 202.644 499.144 202.567 497.822 202.722 496.344 202.956 495.256 203.5 493.778 204.044 492.767 204.744 491.756 205.678 490.744 206.533 489.967 207.933 489.111Z"
                                        />
                                        <path
                                            d="M228.7 497.433 229.089 497.511 230.956 498.6 237.022 502.1 238.344 502.878 238.189 503.267 237.644 504.044 236.944 504.9 236.4 505.444 235.233 506.3 233.989 507 232.511 507.544 231.344 507.778 230.878 507.856 228.544 507.856 227.378 507.622 226.133 507.233 224.811 506.611 223.878 505.989 223.878 501.322 224.578 501.011 225.9 500.311 226.833 499.611 227.922 498.522Z"
                                        />
                                        <path
                                            d="M211.667 478.067 213.378 478.067 214.856 478.3 216.489 478.844 217.811 479.544 218.433 479.933 218.433 484.678 217.033 485.3 215.944 486 215.089 486.7 214.544 487.244 213.611 488.567 213.144 488.411 211.822 487.633 205.756 484.133 204.044 483.122 203.967 482.967 204.511 482.111 205.367 481.1 205.989 480.478 207.156 479.622 208.244 479 209.722 478.456 210.578 478.222Z"
                                        />
                                        <path
                                            d="M215.167 499.533 215.478 499.611 216.644 500.467 217.967 501.089 219.211 501.478 220.144 501.633 221.078 501.711 221.156 501.789 221.156 512.833 219.989 512.833 218.433 512.522 217.111 512.056 215.711 511.278 214.7 510.5 213.922 509.8 213.144 508.867 212.367 507.622 211.744 506.222 211.356 504.744 211.2 503.344 211.2 502.489 211.278 501.789 213.222 500.7 214.544 499.922Z"
                                        />
                                        <path
                                            d="M238.267 483.044 238.422 483.044 238.967 484.133 239.433 485.533 239.667 486.778 239.744 488.333 239.589 489.733 239.278 491.056 238.656 492.533 238.111 493.467 237.489 494.322 236.633 495.256 235.467 496.189 234.456 496.811 233.756 497.122 231.811 496.033 229.944 494.944 229.711 494.789 229.867 493.389 229.867 492.222 230.567 491.522 231.578 490.2 232.278 489.033 232.978 487.556 233.522 485.844 234.222 485.378 236.167 484.289 238.033 483.2Z"
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

        fetch('/andijon/server29')
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

                let c269 = 0;
                let c309 = 0;
                let c429 = 0;
                let c469 = 0;
                let c349 = 0;
                let c389 = 0;
                data.forEach(item => {

                    if (item.id === 190) {
                        const plus = document.getElementById("g190Plus");
                        const minus = document.getElementById("g190Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }

                        if (item.value > 0) {
                            trueAnimation(190);
                        } else {
                            falseAnimation(190);
                        }

                    } else if(item.id === 213) {
                        const plus = document.getElementById("g213Plus");
                        const minus = document.getElementById("g213Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value > 0) {
                            trueAnimation(213);
                        } else {
                            falseAnimation(213);
                        }
                    } else if(item.id === 236) {
                        const plus = document.getElementById("g236Plus");
                        const minus = document.getElementById("g236Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }

                        if (item.value !== 0) {
                            trueAnimation(236);
                        } else {
                            falseAnimation(236);
                        }
                    } else if(item.id === 80) {
                        const value = document.getElementById("g80");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(80);
                        } else {
                            falseAnimation(80);
                        }
                    } else if(item.id === 81) {
                        const value = document.getElementById("g81");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(80);
                        } else {
                            falseAnimation(80);
                        }
                    } else if(item.id === 40) {
                        const value = document.getElementById("g40");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(40);
                        } else {
                            falseAnimation(40);
                        }
                    } else if(item.id === 41) {
                        const value = document.getElementById("g41");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(40);
                        } else {
                            falseAnimation(40);
                        }
                    } else if(item.id === 120) {
                        const value = document.getElementById("g120");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(120);
                        } else {
                            falseAnimation(120);
                        }
                    } else if(item.id === 121) {
                        const value = document.getElementById("g121");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(120);
                        } else {
                            falseAnimation(120);
                        }
                    } else if(item.id === 160) {
                        const value = document.getElementById("g160");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(160);
                        } else {
                            falseAnimation(160);
                        }
                    }  else if(item.id === 161) {
                        const value = document.getElementById("g161");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(160);
                        } else {
                            falseAnimation(160);
                        }
                    } else if(item.id === 670) {
                        const value = document.getElementById("g670");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(670);
                            trueAnimation(6701);
                            trueAnimation(6702);
                        } else {
                            falseAnimation(670);
                            falseAnimation(6701);
                            falseAnimation(6702);
                        }
                    } else if(item.id === 669) {
                        const value = document.getElementById("g669");
                        value.textContent = "P= " + formatNumber(item.value,3, ',', ' ') + " МВт";
                        if (item.value > 0) {
                            trueAnimation(670);
                            trueAnimation(6701);
                            trueAnimation(6702);
                        } else {
                            falseAnimation(670);
                            falseAnimation(6701);
                            falseAnimation(6702);
                        }
                    } else if(item.id === 70) {
                        const value = document.getElementById("g70");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 659) {
                        const value = document.getElementById("g659");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 429) {
                        const value = document.getElementById("g429");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " КВт";
                        if (item.value > 0) {
                            trueAnimation(429);
                            trueAnimation(4291);
                            trueAnimation(4292);
                            c429 = 1;
                        } else {
                            falseAnimation(429);
                            falseAnimation(4291);
                            falseAnimation(4292);
                            c429 = 0;
                        }
                    } else if(item.id === 469) {
                        const value = document.getElementById("g469");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " КВт";
                        if (item.value > 0) {
                            trueAnimation(469);
                            trueAnimation(4691);
                            trueAnimation(4692);
                            c469 = 1;
                        } else {
                            falseAnimation(469);
                            falseAnimation(4691);
                            falseAnimation(4692);
                            c469 = 0;
                        }
                    } else if(item.id === 419) {
                        const value = document.getElementById("g419");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 459) {
                        const value = document.getElementById("g459");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    }
                    //G-1
                    else if(item.id === 269) {
                        const value = document.getElementById("g269");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a269");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 35 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(269);
                            trueAnimation(2691);
                            c269 = 1;
                        } else {
                            falseAnimation(269);
                            falseAnimation(2691);
                            c269 = 0;
                        }
                    } else if(item.id === 271) {
                        const value = document.getElementById("g271");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 272) {
                        const value = document.getElementById("k269");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 273) {
                        const value = document.getElementById("n269");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 274) {
                        const value = document.getElementById("w269");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //G-2
                    else if(item.id === 309) {
                        const value = document.getElementById("g309");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a309");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 35 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(309);
                            trueAnimation(3091);
                            c309 = 1;
                        } else {
                            falseAnimation(309);
                            falseAnimation(3091);
                            c309 = 0;
                        }
                    } else if(item.id === 311) {
                        const value = document.getElementById("g311");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 312) {
                        const value = document.getElementById("k309");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 313) {
                        const value = document.getElementById("n309");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 314) {
                        const value = document.getElementById("w309");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //G-3
                    else if(item.id === 349) {
                        const value = document.getElementById("g349");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a349");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 35 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(349);
                            trueAnimation(3491);
                            c349 = 1;
                        } else {
                            falseAnimation(349);
                            falseAnimation(3491);
                            c349 = 0;
                        }
                    } else if(item.id === 351) {
                        const value = document.getElementById("g351");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 352) {
                        const value = document.getElementById("k349");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 353) {
                        const value = document.getElementById("n349");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 354) {
                        const value = document.getElementById("w349");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //G-4
                    else if(item.id === 389) {
                        const value = document.getElementById("g389");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a389");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 35 * 100, 1, ',', ' ') + " %";
                        if (item.value > 0) {
                            trueAnimation(389);
                            trueAnimation(3891);
                            c389 = 1;
                        } else {
                            falseAnimation(389);
                            falseAnimation(3891);
                            c389 = 0;
                        }
                    } else if(item.id === 391) {
                        const value = document.getElementById("g391");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 392) {
                        const value = document.getElementById("k389");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 393) {
                        const value = document.getElementById("n389");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 394) {
                        const value = document.getElementById("w389");
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

                if (c269 > 0 || c309 > 0 || c429) {
                    trueAnimation(1);
                    trueAnimation(100001);
                    trueAnimation(100002);
                } else {
                    falseAnimation(1);
                    falseAnimation(100001);
                    falseAnimation(100002);
                }

                if (c469 > 0 || c349 > 0 || c389) {
                    trueAnimation(2);
                    trueAnimation(200001);
                    trueAnimation(200002);
                } else {
                    falseAnimation(2);
                    falseAnimation(200001);
                    falseAnimation(200002);
                }

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