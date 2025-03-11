<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$id = 41;

$this->title = 'ГЭС-14';

$energy = new Energy();
$dashboard = new Dashboard();
$power = new Day();

$power->getHour([$id]);
//$power->getDay([$id]);

$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);

$urlTransformer1 = $energy->getTransformer($id, 91);
$urlTransformer2 = $energy->getTransformer($id, 92);
$urlTransformer3 = $energy->getTransformer($id, 93);
$urlTransformer4 = $energy->getTransformer($id, 94);
$urlTransformer5 = $energy->getTransformer($id, 95);

$urlSwitch1 = $energy->getSwitch($id, 214);
$urlSwitch2 = $energy->getSwitch($id, 215);
$urlSwitch3 = $energy->getSwitch($id, 216);
$urlSwitch4 = $energy->getSwitch($id, 217);
$urlSwitch5 = $energy->getSwitch($id, 218);
$urlSwitch6 = $energy->getSwitch($id, 219);
$urlSwitch7 = $energy->getSwitch($id, 220);
$urlSwitch8 = $energy->getSwitch($id, 221);
$urlSwitch9 = $energy->getSwitch($id, 222);
$urlSwitch10 = $energy->getSwitch($id, 223);
$urlSwitch11 = $energy->getSwitch($id, 224);
$urlSwitch12 = $energy->getSwitch($id, 224);
$urlSwitch13 = $energy->getSwitch($id, 226);
$urlSwitch14 = $energy->getSwitch($id, 227);
$urlSwitch15 = $energy->getSwitch($id, 228);
$urlSwitch16 = $energy->getSwitch($id, 229);

$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['quyi-buzsuv/index']) ?>">"Қуйи Бўзсув ГЭСлар каскади" Филиали</a></li>
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
                            <path
                                    d="M0 0 1280 0 1280 720 0 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip1">
                            <path
                                    d="M443 470 523 470 523 560 443 560Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip2">
                            <path
                                    d="M443 482 523 482 523 573 443 573Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip3">
                            <path
                                    d="M443 495 523 495 523 586 443 586Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip4">
                            <path
                                    d="M443 508 523 508 523 599 443 599Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip5">
                            <path
                                    d="M443 521 523 521 523 611 443 611Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip6">
                            <path
                                    d="M443 534 523 534 523 624 443 624Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip7">
                            <path
                                    d="M408 44 492 44 492 135 408 135Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip8">
                            <path
                                    d="M408 58 492 58 492 148 408 148Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP0AAP0AAP4AAP4AAP4AAP4AAP4AAP8AAMVaHOIAAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA6klEQVRIS+3XaxKDIAwE4OCjvkB6/9NWdJUEgr1Avl+W7EwtKzOVmOkrfbBe6DDOOkykAdNswESynOUSy1kusZzlEstZLrGc+kfMbZhmwWF2WDxEDLmImV8JK//QjIt3K5HH5Zv9uNFOu7HCuUEjPrTN5y+mekOkcMXIvX9z7JFTmuAmpA4LljQemcTtWKxF1h1Rj9XaiAS0atkwfwQMpFSEpNeiPKnl20KCIqT6gbiLkKrNifp7RVULK0KStVRbkvHNkUVIvJaiCClvzoKVhntz6iKku5bn2Wy5TotahJROi16E5AI7EUD0A7L3auODNhWvAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img9"
                        ></image>
                        <clipPath id="clip10">
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
                                id="img11"
                        ></image>
                        <clipPath id="clip12">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip13">
                            <path
                                    d="M599 44 684 44 684 135 599 135Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip14">
                            <path
                                    d="M599 58 684 58 684 148 599 148Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip15">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip16">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip17">
                            <path
                                    d="M217 44 301 44 301 135 217 135Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip18">
                            <path
                                    d="M217 58 301 58 301 148 217 148Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip19">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip20">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip21">
                            <path
                                    d="M319 529 393 529 393 620 319 620Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip22">
                            <path
                                    d="M214 529 288 529 288 620 214 620Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip23">
                            <path
                                    d="M837 528 912 528 912 619 837 619Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip24">
                            <path
                                    d="M935 527 1009 527 1009 618 935 618Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip25">
                            <path
                                    d="M1031 527 1105 527 1105 618 1031 618Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip26">
                            <path
                                    d="M42 344 111 344 111 435 42 435Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip27">
                            <path
                                    d="M766 45 851 45 851 136 766 136Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip28">
                            <path
                                    d="M766 59 851 59 851 149 766 149Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip29">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip30">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip31">
                            <path
                                    d="M931 45 1016 45 1016 135 931 135Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip32">
                            <path
                                    d="M931 58 1016 58 1016 149 931 149Z"
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
                                    d="M125 529 200 529 200 620 125 620Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip36">
                            <path
                                    d="M1064 270 1139 270 1139 361 1064 361Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip37">
                            <path
                                    d="M1154 269 1229 269 1229 360 1154 360Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip38">
                            <path
                                    d="M30 174 99 174 99 264 30 264Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip39">
                            <path
                                    d="M1081 343 1150 343 1150 434 1081 434Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip40">
                            <path
                                    d="M441 435 525 435 525 519 441 519Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip41">
                            <path
                                    d="M441 435 525 435 525 519 441 519Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip42">
                            <path
                                    d="M441 435 525 435 525 519 441 519Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip43">
                            <path
                                    d="M726 436 810 436 810 520 726 520Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip44">
                            <path
                                    d="M726 436 810 436 810 520 726 520Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip45">
                            <path
                                    d="M726 436 810 436 810 520 726 520Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip46">
                            <path
                                    d="M729 470 809 470 809 560 729 560Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip47">
                            <path
                                    d="M729 482 809 482 809 573 729 573Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip48">
                            <path
                                    d="M729 495 809 495 809 586 729 586Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip49">
                            <path
                                    d="M729 508 809 508 809 599 729 599Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip50">
                            <path
                                    d="M729 521 809 521 809 611 729 611Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip51">
                            <path
                                    d="M729 534 809 534 809 624 729 624Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7V0JVFRXmk73TE93umemz/TMnD7T0zM9p8+ZnnO6J53uGJdEE2NiUKPEqEjUGMUlxiUmre0SEzfcAQUX9oKCojb2fXFDkE0odhVwQaEKF9yFAjSZ6Df/f+sVFsVDUMCF1M/5znvvvvduvffux7/c+9/3XniS4uzs/O6qFSsUb7755ku8vWTRop2RGv1FvVZ3yR5r1qypBvADcaJDHPI4snnzZlVDQwOGDBkysaSk5EdbtmwJb21pgT1aCDqdrslBOIf0SpRKZT0T7rVhw3bpdToQ4QS55OAgnEN6JdOmTftVRkbG/QtEuKGvDva+ceMG4mJjZcnGIMLdkk51yEAUw/mm/ykytnoWN5hHsbkThaRhTKb7L55oaHm5tL51SqWx7Y3jxtZXj58z//J4owWl52/+pqShaVhxfdP4sot33q24fP9n4lwS1lAl527+vMzUPHL+gqVLGxsvQxBu8GDv69evI1YQrrUT2RhardZBuIEoJaaWFcX15gtFxpb7JQ1tKCaUGFu+KzGaBYrrW+6VmNpgaLhj2UdL3haQtosF7goYjC33DKa2SwZTa02JqbXJUN9yv9h0F74h2vvmFnMHwsXFxcmSjeHQcANUSkx3VBbC9B+YlGFqPRGJCXcBg3tAOIeGG6BCWogIx9pJnix9gfwz1xEZbTGfFy9exCuvvJIufLjvuYZbtmzZi06jR6+m1e9PcNTfhGPTq0nLw6lTNUQki7928OBBODTcCy9Mnjz5N5s3uiMqKupFqWjgy5PQcB6+4YiNjiTECOzYvr1bwiUkJFySLnHAyqhRowaplGFYtWrVr6WigS/9T7g2bPTYh/jEZEIK4pOS4em1SxBOq9YgLTUVTU1NnQhXUVFRn5qaOiglJeXlpKSkP1qRlpb2Epfv3r178PTp0/9Fuo3nUkaMGDE6J/soXCdNelkqGvjSv4TjqJfMan0LiuvMFtSboU45ilClCmu+Xg+tLgrh4eE4dOgQzGZzO+Fu376Nq1ev4sqVKx3AZQyj0YixY8culm7juZRFny2aWVdXByLeSKlo4MuTMKlyKGlopWUb0g1n4ROoQhSZ2vCwcOTk5HTQdF2ByTlhwoRl0m08l+Ls7LyItfugQYM+kIoGvjwdwkmaz7o0tSI+qxy+QeFISExAGPk1xcXFskSzxaRJk1ZIt/Fcipub29pvv/kWI0eO/EQqGvjytDScHJiAmtQcBIREICUphYinxInjx2XJxphLDSbdxnMpK5at8L537x6mfzj9S6lo4MuzRDgB012UGFuhiMqAUqVFWkqa8PFOnTrViXAL5s3zk27juZStm7eG3b9/H59/9pmXVDTw5ZkjnA0Kz5vhq4qHVh8notkIVQTOnz9PZGuFubUFXp6e8Nrhlfee03tjpdt5qsJRs4uLy7/3FES4/RwArV6xUs/bGzZs+FupqoEr/U04MfZqV9YT2J6Xd+Y69ih0iE1IQnJyMtTqCDFiEanTify5qpMnsWvXrsIxY8aMf5opTZs2bTp95MgRZGVl9Qx87BHLMjo6GsOHD39LqmrgSn8RTgQEJl63DPJ3PuZBmfz+zjhy8gJ8glRIzziIxPg4bN+2rUNXSk1NDby9vUvGjRv3AWmLH0q3+MQkUqM9rYqgiDsykhDVLYKDg+FJWnrfvn1i9MVBuMeE0E6mNmzx2ocwTRSUmhiEaGIRrI6HvyoGe8MY8ThUYZRI2TOUSMfuLz4Lb98QlJaUIjgoGFevXG0nHePMmTPY7eNT8f748S5PknhMuJiYGFKyFmH/7GFy4cIFFBYW4vSp08hIS8dIB+EeH0dPXsbadevJ7OkRqdcjSh+JaPqvjouJRXxcHGKpYQKCFdit0CL7xAU6xzbVqTuQRjS2YV9YLPLyChAeqsSpms5BRW1tLWuPE++///40Mll/I91yv0mkVnuah+6YaKWlpXTfluG8GBlwuVajET7p6dNEuHQH4XqF8MRs1NfVdyIBw8xoNiMjNQ1qVTiUYWrsDdEjp+aKbF3y4Jy8O9CkHEVCUhpSkpLBw0Ryv8eNunfv3mpnZ+eZ/emYWwl38+ZNJCYmdtBwvC4HFoeG6wPsDdGhxca/6go8hBVDDjNrwgi1DnuVUcg7fU2YZFs/rysY6NrTj9UgKDQCBfkFiI6J7uDX2YKHw3x9fc9MnDjRbcGCBZas5j4UK+HYH7t165YgU0/EoeF6CyKLIowIJ9Po9rDO0rp25QpFn2oyt/HQaKPgGx6DgrM35eu3h+kuck9dwa59IaisrISCnHFODrD/LSsaTCYEBQSec3VxmT916tS/kx5Fr8VKuAMHDqC5uVmiU/fi0HC9RV2zII1cY3cH1kJhYWE4kJ4BlUYPf3Uijp2/LVLcu4tmDcYW+ARrUELBREiIQvhwcr9hxUVy2oMDg+qnTpmycOnSpT+WHsljy2MTzqHheoeEnOM4dqyQGlV+gkxPUFVVRcRT4ujRowiPIOJpklFIRJb7vQew+HWKmP04cChT5Nvl5+fL1m+Ly5cuQaFQmFxcXD6bPXv2T6RH88jyuIQ7Q4Q7mLEf7771js+4MeMWTuhjcJ2M0W+/vfCjjz76R+lyn470JeGsUaZfRCJukw8j17iPiiIiroo0XnFxCRThGgRHpsNQb5Z+s+vINuFIOcJJQ+bn5iI+Ib5Lv84WjY2NUIaGXpoxY8YyIt8jZ+H2RsOVlpSgqLAIhqK+R5F13WDAtGnT/iBd7tORvtZw7MT7h/KEGflGfRwwWQ6RI84jDJUnjiNIqYEy5iCKyYTKXYMA+XVZlQ3Y7ReKEydOIDQ0VDjycvXb4yr5k+Hh4Y0zZ8xYsXjx4r+XHlW3YiVcQUGBiIytUWh3ckby4ZLiE0Rkb+wHxMbE4kjmkYFFONHhS1onhDSRXEP2Fpw7lpCQgMioKNTUnEKAQoWE7Arp9+X9u6JzTdjpF0akOwlFUDCM9fJdNXK4dvUq1BERV2fOmLlm7ty5/yA9si7FSjjOAImia2RNx1rTnnjl5eU4eOAgzp45I/ZZfbjCY8ekI/peOM+Qh90GnIbLrmpEcmq6bAP2Fa5fvwGdToukpGQcOHiY/LsE0mic0Cl/TRw1B6oTkJtXIIaUiosMsvV2BY54iXg3Zs2atZai2p9Lj66TWAnHwkTi/jgOgC6Rj2iVb7/9lmekocXcAr1Oj2+++aY9Si0scBDukREam9llh29fg4eGyNlHXl4evMh05lY30jXI3wsHE/r0fETHJSE7OxspKSmydT4MN4joer3+1ly3uRvIz/sn6RG2iy3hrMLuQHJSEjNQIJ/MrclkpD33kUMBEZt5q4Y75tBwjw5fZRRa6b9XrsH6BdSgiQmJZL72QxmhQ8yhYrqOrrpP7mK/oRb+weFkYo+Tn6YSHc+y9XYB7je8RZqLNOWtefPmbf34g4//WXqUnQh3jwimVe2F+9cLEKvbI7B53QKoQ71x524bcq2Ec2i4x0dwOHf4dh8R9jXYL+JMjcwj2dirioXBaCatxvfVOZItOHMdXr4K0dBBQUFCU8rV2R2YLDExMeZPP/lkB0W1/6q1IxybVY2fK5prP0NL7acw1y5EU+0SpKqnURR/kzRctkPD9QZFdU0USUZSYzx+/1tvcPXqNQSTiS0qLBTZJNnHOSlA7lpJAxpbsZei6dLScjGIzoSVq7M7sMZrunWbkxJaQxSKOx013D3MnDISG//6Gtpq56H13Dz4b3sbLhMGodnc7NBwvQFHp4k5J2AwdD/5pV9B5pwHzrkbJUIfA216gTQu2/maDXTNqvjDIr/u8KFD2J+xX77OHoCJx68f66Dh6E/r50IabiFpOCIcwUyaLlU9lUw5abgchw/XC9zF3vA4YSrkGuRJo6KiAhHko+Xl5WNPSCQM9Z1HKdjU8pBZUk4lQskVqKysEJOzm5o7T8zuDoJwMZ0Jp/P7QGi3OxJ4PUPzAZrId2wn3PdPw3VsiMeFX6hWtjGeFq5fuw4ycygrLcVuvxAcKqsX1yk3Jptb1YidvkFi/DU4MAiXL1+WrbMryBHuHkHvN7GdbFbCpWkmopkJ9whRallZGfuLHCWLcx5VnkHC2Ws53paBcMTtj+NuhzaEUZQo1xhPG0lJSWRiDyAyJgERSdl21y8R0EQ+aL0Z3gEqVFVVQ6VS4eTJk7L1yUFewwE6f3vCzReEa7p96wHhutFwXP8md3cy+RkICgwUnd89HcWwyjNDuHXbd8d5+qrOefiHn/fyU9ftDNDWe/lrjF4B2gbPIO0FrwDdpZ0K/SVvhf6KjyLyinew/rp3cOR1b0XUzV3Bkbd2KaKbGDv91c2rV3/ZrNNozZF6fXOkTm+OiYwxk1/TkhCf0EYP6Q75VneTk5O/TUlJ+b+0tLTvCPfS6T87gx4k98pzHtnhw4fFg+G+Mh645wfF/Ww8XMQagFOyiw0GkVFbTv/1JqNRNLY9AezBaUs83bCIzvUO1ogRCMs/ih35aDtYl4Kso7lIJxJkZmbK1mcPWcIRKQI9nXG+yI0wC+cIvK4JeJ8Ix1Fq9xruu+++E/d/YP9+1J6tFQgMCMDNGzceiXTPDOH6SuiefmAPnk/Aqd2cZRsUFPQjBq3/3Z49e35My5/wAPmECRN+yhg0aNBP33333Z9xNsOyZct+sWbNml+uXLnyV59//vl/Llq06Lfz58//He37PZ3z0qTx418eO3bsn8c7OQ1ymTx5EWkHam95ItiCRwxCghWoJP9uX4AS+w1n27tOLISzaDouiz5YBF1UbHuqOA/Gy9VpRTvhbOY0cJSam52Jre5rkXU4XWDH1g04fCBdjDjkEglu3bTRcDKE4y6bwIBAkc3MBGUcpX9Gf1+/7zfhnqaMGjXqD7t37z7JLzmUI4MtRM9/coqIYjk1PTTuoHAHOk/maSOfrw57A0Jx7tw5BPFknWsdJ+vYg6PU6Kho3GlrI9xBg6kBWzZtFsELaX7otFpEkKlmshTk5yOTtDn7iicqj4M1PfubnE7F2twKnhbZXp5fIJYMTw+PDsday/kYObApfiYG7weKLFiw4KekDUM5M0SODPbg48LDwlBRVgFvfxWOtWcX2wYUbSiovUXBhJKCifNQKpXC/MnVx/DeuRM+3t74Yunn+OKzz/EXsVxq2V7KS5t1Kp/+4TQs/nQh1n71tcj/06jVwndkrcbzbgUuXMQlQmJ8Ak5V10CjisAFIjKXtR9D4HOWL1+OQH9/QgCCbMDbX65chSwH4fpeyOR+RFqhuSf5b8LEhoSI95f4BauQkl9tQ7YHoMAKfuExKCouQWJSIpk1+Tc8cTYLD5X1FBwENJAPGhkZCf5+xTHSVLt9fLBpw0a4b9gA94203OiOjbRcv3YdNlLZurVraR/vdxf7LMdsxOpVq4TP25U4TGo/yjvvvPM7Ly+v8mvXrskSowPMLUhNSaGA5QD27z+A4MhUi4ntRLy7UCdnkYnLEAmN/Mr/npD6YWCzfom0E8+6txJu7aYVmPGJM2YseA/TCR8xFr6HRV9NwUyxnIzZi9/DJ6umUPkEOm4cHTMBH7qNQWJyvESvzuIgXD8Lp4ovWbLEv7y8/L5cY9vDamJPVlVjl1848k9fl4hmE1DQMq2gBoEhEThXew6KEAV64jd2BY7KmXA8a81KOPd9SzBn++tw8xiC2TuGEYZi7u5h2JHzPub5DIHnUWcs8H8d29ImYb7PG5jjMRTzPN+C25bh0MYpJXp1FgfhnpC4TJo0NT4u7jZrMrlGtwV3FIeSia2qOokgpRqJ7cmdVlhIl1d9lfy6EJiMDSI9irN75errDqzhLpMvFmslHEWp7r6LMZcIN8djMOYQ4ebsGIJ5RDhPQbjBgnCf+r2Ore2EG4L5niPhtnU4dLEOwj0TQib2t9u2bSu+0tgo2/D2SE1NxcEDB3A4M1vMGuNZ/pw6b806Ect6M/YEqXHiZJXoCmGyyNX1MPBrZlm7sQ/G7yPxo+j1i03TiXDDBZGYcG6k4SyEc8ZcJhwtF/qNwBZBuBGkCUkDOgj37An3/y1csMC7uLi4RyaWRxk4W/f0mVPwpig1p/qyjaaTiGe6g5DodBw6nIW83FwkJSQJn1CuPjk0U5DReOmy6CrhCJS7Sdbu+VSYVCacm5VwPkPhJQg3BF5HJwgNt5kIN89nuES4tzB7y+tEuFCJXp3FQbinJBMnTnTW6/XXe+Lws3/Gk29qqqqgjNAjWja58y7ij5RCpY0ScxTCQpVi9ECuvq5gGzSs8VwA15VD4bpqEKasfgWuq4fgo/WDsVrjhGnug7BKNwbTNg3CCgUFFV8PhQsdM33165i6fDC00WESvTqLg3BPUZycnP7D3d09l+cayBHAHjzExUNL/OIcv7AYYU4tY8oPyHeksgE+/goxuZqTOk0mk2xdcrAl3Pm6WlRUlAuUV5aKrJe09FTM3jYUf40YhWWatzF7zbsoryiTjqtAJR9L2zyHoitxEO4pCw+3zZ8/fzv5XvfkSGAPHtDnjt+683UiufPI8QvCpNqSznC+CV5+ShHB6nR6MddUri57cGcv+4yaCDUqyok8BOuSkZqWglnuQ/GX0DexnOC20gnlZURGm2PKy4mAtOwKHIFzQOQg3FOWsWPHOqnV6sbuxkoZ7Sa2uhpafTR06fmdUp2YhP7qBOQfKxIahYes5OqyBY8S8EhDNaGGiG2LI4cOY93XX+OrjcvhNOclTJg1DDu9t8F9/UYcy89HDQUtHc/hbXtQOR2XlJDoINyzIGPGjPm3DevXH+FPa8oRwh7WDBdDcSl8QiJRVNcsEjktpLPModCnFyA2LgnV1VVQqyLEyIJcXd1h3969WPrFp3Bd8We4bRuGOWRaJy98Dbt2eSKEyC93Tlfgmf0Owj0jQib2h25ubhvy8vK+k2sse7DWUFKAcIF8NR+/EBwuq7PRdKz17iLDcBb+QTwv9aLw6/gdIvX19T0CT9hmf5AnVG8PXAGP3PHwzHsPHnnjsCNzIvRxKui0NvmHFARlZR1FSLiWApxIqDWRuGSXRMqEc3V1/V/plh3yLMj48ePfCg8Pv9jc1L2JZSddqQwT7xaOikuEKilLaLcHOXZt4tOdO/eF4ELDRZG1kZebJyG3S3DaUlJiElJTkrFl82Ys3zILnvljiXDj4MWkOzIB7tu+xuZNm8hsZ6GyvAIBwWFIzqsSv804dv4WduwLJXP9QGs7CPeMCk/5++qrrzJY09gSrCuwed2fniaSPHcFaVB0/rYgnLWj2GBqgb8qHgHKaEIUAm0QEEYQ65ESorBzTxB/gwJbtrtj+/ZNcP3kHXwWNKIdi/2GY9YcV2ylffxi7ekffYyUYzXtv2clu6HOjDDVg7R/B+GeYWETO2vmzNVZWVnf2pKrK9RU1wgTe/niJewJCEVG0Zn2hmciPPDxLBCasAOs82fvQnegCHv27saMVcOxOswJH61/DYv3jMQnnsMxbd0QrFA6YSr5dF/rxsFp2iAEK1Xg11nY1i8IR3UFinkmlmmbDsI9B+Lk5PS6QqEwyn1i0x48I587fqspik1KSYMyVkru7ECEh4PNYeT+QiiUAVgZPh5zdg7FF6FvY2ngcCzYMxwrtaMxa9urWBM3Fi4b/owlW8dAExktQziu6y5CbN5E6iDccyJkYn+xatWqJM78tSVYV+A8N45kq2tOY5d/GApOX4OB3+LZDdgUFxK0aXkIDQmG88I/wW3T6/jwy0GYuupVuG19De8v+hMW7n4T4+b+AUt938ZI5z9Co48hs00akv03JhqBNWrOyUsUKSe0X5eDcM+RAPjBxx9//JfMzMy7tuTqCvxtMO6zu9J4BcnJaUhOsiCJQdsd0F6eKhAaEgY/P1/s9NiBtRs3YYvHLmz18MZmwrYdPrTtTds7abkTHl4+VL4XpcY2lFpJR8tjZ29g++5A8VYA6zU5CPccyjvvvDM4ICDgXE/61djE8nyG6KgoMXzFiOoC1v0xUbSk47k7hD96ok7NEQRiMpWSibQQyrJUp5ImVOkRoYlBGCFcG02IgUoXI7TeNbs5GA7CPafC74hbsWJFFH/xxrZB+xrnamsRQebVOvfXHn6aZDFdUO5cOfA7Vxwdv8+xUOMtzMjIuCPXuH2Bc7VnhRaTIxuDX7R980bPXq3B0xgLCw1IOFp5odjYWldiaj1Pfl9KqenO1rL6lvUlJkbrluL6lmyKmJPoGM8SU/OGMmPzomJj02zat6SkvmVDibE1xGBsO1ZS16zi7fIG88xSU/ObJcbmNyouNo+ovNj2RqnR/KHB1Lqdjs0qNpqXl15q+w27JNJjc0hvZNSoUS/v27fvFHcCyzV0b1BLhNM8hHARKTkiIu54HneByOMYES45v0rqfuHggrti5KJoqYwzYsh02+9nc96+Lratpp7LeP2u6JJpP5eWRabWbw0NLTulx+aQ3gi/eHr58uWxPKjfsfF7ByYcazgrQWwhIlFTK3b5KXE4MwuXLzeK5IKb1693idycXKQQ4ez7BPsHHd0ACzFbI6RH5pC+EFcX1zkpKSnEFXkCPSoaL19GoD5d0hxysGiiA4az4jj+mPE+VUKX2BMej7zTPfy6T5/CkjvoIFw/yNi33/79nl3eJx726aWeotVshndghGgs+YZkWPfZLh8G23OfFByE61dZ5uLy4tKlS0OOV1b2aP5E12hFamo60gpPCb9IvjGfBzgI90Rk6pQp0xPiE5p68lXFhyFEqRafk5Lz5fofclqyK3R1nmXbQbgnIKNHj/5vDw+PsqtXH/4inO5w6FCmmJYYFn+YNN5ppBedIZxFRh+A60knP5DrTSmoeYB8m3Xrtn2ZLaz77Y5LlbbjMksTpMfikP4U/lIhRbK+ZWVlj21i+aPG/DkCY70R2dk5ItnySB8iKyubltmYPHmqZtiIt4YPG/Fun2Pk6LHDpEfikCchH3zwweTY2NibvX0nSX9iyZIl26XLdchAkDFjxvzXtm3bivgbXHIN3nfoKak7HvfZ4sU7pEt1yEAR/vw5vwXAUGToZRTb9yDT7yDcQBVnZ+cJkT18C8CTgoNwA1xGjhz5643r1iUogoPzrQgJVtCSEZwfLEGheFDWPRRSHQ/KrHXYl1tAZVw/wdXV9VO+rvT09B8zxEX2mbzwwv8Dqz2REX1DUHMAAAAASUVORK5CYII="
                                preserveAspectRatio="none"
                                id="img52"
                        ></image>
                        <clipPath id="clip53">
                            <path
                                    d="M0 0 123.158 0 123.158 60 0 60Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip54">
                            <path
                                    d="M1071-25 1167-25 1167 66 1071 66Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip55">
                            <path
                                    d="M1174 42 1263 42 1263 133 1174 133Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip56">
                            <path
                                    d="M1178 2 1252 2 1252 92 1178 92Z"
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
                                d="M443.26 508.473 522.153 508.473 522.153 521.273 443.26 521.273Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M443.26 521.273 522.153 521.273 522.153 534.073 443.26 534.073Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M443.26 534.073 522.153 534.073 522.153 546.873 443.26 546.873Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M443.26 546.873 522.153 546.873 522.153 559.673 443.26 559.673Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M443.26 559.673 522.153 559.673 522.153 572.473 443.26 572.473Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M443.26 572.473 522.153 572.473 522.153 585.273 443.26 585.273Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M442.593 521.273 522.82 521.273"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M442.593 534.073 522.82 534.073"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M442.593 546.873 522.82 546.873"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M442.593 559.673 522.82 559.673"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M442.593 572.473 522.82 572.473"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M443.26 507.807 443.26 585.94"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M522.153 507.807 522.153 585.94"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M442.593 508.473 522.82 508.473"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M442.593 585.273 522.82 585.273"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip1)">
                            <text id="g12"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(447.04 518)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip2)">
                            <text id="g13"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(447.04 531)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip3)">
                            <text id="a12"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(447.04 544)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip4)">
                            <text id="k12"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(447.04 557)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip5)">
                            <text id="n12"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(447.04 570)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip6)">
                            <text id="w12" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(447.04 582)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M768.891 413.879 768.5 397.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1149.59 399.086 722.5 398.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 517.948 0.805774"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 559.448 398.5)"
                        />
                        <path
                                d="M991.021 232.926 31.5001 228.5"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch13 ?>">
                            <rect id="c39"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 759.5 432.5)"
                            />
                        </a>
                        <path
                                d="M768.799 454.939 768.5 432.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 0.000104987 15.8447"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 483.5 414.345)"
                        />
                        <path
                                d="M483.518 453.368 483.5 432.5"
                                stroke="#006600"
                                stroke-width="3"
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
                                font-size="11"
                                transform="translate(515.071 460)"
                        >
                            Г
                            <tspan x="6.83331" y="0">-</tspan>
                            1
                            <tspan x="0" y="13">6,3</tspan>
                            кВ
                            <tspan x="0" y="26">7,5 МВт</tspan>
                            <tspan x="0" y="39">SF7.5</tspan>
                            <tspan x="25.8333" y="39">-</tspan>
                            36/4230
                            <tspan font-weight="400" x="-465.655" y="-44">I</tspan>
                            <tspan font-weight="400" x="-462.155" y="-44">-</tspan>
                            <tspan font-weight="400" x="-458.655" y="-44">СШ 6 кВ</tspan>
                        </text>
                        <a href="<?= $urlSwitch12 ?>">
                            <rect id="c12"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 473.5 432.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(677.223 289)"
                        >
                            Т
                            <tspan x="7.16663" y="0">-</tspan>
                            1
                            <tspan x="0" y="13">6/35</tspan>
                            <tspan x="21.6666" y="13">кВ</tspan>
                            <tspan x="0" y="26">25 000</tspan>
                            <tspan x="32" y="26">кВА</tspan>
                            <tspan x="0" y="39">SFF</tspan>
                            -25000/35
                        </text>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c2552"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#7F7F7F"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 340.5 517.5)"
                            />
                            <path id="c2551"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 340.5 493.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(304.577 477)"
                        >
                            ТСН
                            <tspan x="23.1667" y="0">-</tspan>
                            1
                            <tspan x="-5.66666" y="13">6/0,4</tspan>
                            <tspan x="18.6667" y="13">кВ</tspan>
                            <tspan x="-7.66666" y="26">250</tspan>
                            <tspan x="11" y="26">кВА</tspan>
                            <tspan x="-28.1667" y="39">SC11</tspan>
                            <tspan x="-3.83334" y="39">-</tspan>
                            250/6,3
                        </text>
                        <path
                                d="M1.49993-0.014715 1.81503 32.1043-1.18482 32.1337-1.49993 0.014715ZM0.315103 32.119 4.78546 29.075 0.373963 38.1187-4.21411 29.1633Z"
                                fill="#7F7F7F"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 356.874 517.5)"
                        />
                        <path
                                d="M356.874 460.455 356.5 398.5"
                                stroke="#006600"
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
                                transform="translate(64.774 244)"
                        >
                            СШ 35 кВ
                            <tspan font-weight="700" x="436.718" y="184">В</tspan>
                            <tspan font-weight="700" x="443.885" y="184">-</tspan>
                            <tspan font-weight="700" x="447.385" y="184">Г</tspan>
                            <tspan font-weight="700" x="454.218" y="184">-</tspan>
                            <tspan font-weight="700" x="457.718" y="184">1</tspan>
                            <tspan x="1023.93" y="167">II</tspan>
                            -СШ 6,3 кВ
                            <tspan font-weight="700" x="651.584" y="218">Г</tspan>
                            <tspan font-weight="700" x="658.417" y="218">-</tspan>
                            <tspan font-weight="700" x="661.917" y="218">2</tspan>
                            <tspan font-weight="700" x="637.917" y="231">6,3</tspan>
                            <tspan font-weight="700" x="653.917" y="231">кВ</tspan>
                            <tspan font-weight="700" x="628.917" y="244">7,5 МВт</tspan>
                            <tspan font-weight="700" x="602.917" y="257">SF7.5</tspan>
                            <tspan font-weight="700" x="628.75" y="257">-</tspan>
                            <tspan font-weight="700" x="632.25" y="257">36/4230</tspan>
                            <tspan font-weight="700" x="829.453" y="229">ТСН</tspan>
                            <tspan font-weight="700" x="852.62" y="229">-</tspan>
                            <tspan font-weight="700" x="856.12" y="229">2</tspan>
                            <tspan font-weight="700" x="829.453" y="242">6/0,4</tspan>
                            <tspan font-weight="700" x="829.453" y="255">250</tspan>
                            <tspan font-weight="700" x="848.12" y="255">кВА</tspan>
                            <tspan font-weight="700" x="829.453" y="268">SC11</tspan>
                            <tspan font-weight="700" x="853.786" y="268">-</tspan>
                            <tspan font-weight="700" x="857.286" y="268">250/6,3</tspan>
                        </text>
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 638.5 231.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(658.598 205)"
                        >
                            В
                            <tspan x="7.16669" y="0">-</tspan>
                            14
                            <tspan x="21.3333" y="0">-</tspan>
                            Э
                        </text>
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 803.5 234.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(823.685 205)"
                        >
                            В
                            <tspan x="7.16663" y="0">-</tspan>
                            14
                            <tspan x="21.3333" y="0">-</tspan>
                            18
                        </text>
                        <path
                                d="M450.739 227.974 450.5 208.5"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 448.5 230.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(465.743 205)"
                        >
                            В
                            <tspan x="7.16666" y="0">-</tspan>
                            14
                            <tspan x="21.3333" y="0">-</tspan>
                            Ю
                            <tspan font-size="13" x="-50.8513" y="-76">Л</tspan>
                            <tspan font-size="13" x="-40.8513" y="-76">-</tspan>
                            <tspan font-size="13" x="-36.3513" y="-76">14</tspan>
                            <tspan font-size="13" x="-23.018" y="-76">-</tspan>
                            <tspan font-size="13" x="-18.518" y="-76">Юксак</tspan>
                            <tspan font-size="13" x="140.908" y="-77">Л</tspan>
                            <tspan font-size="13" x="150.908" y="-77">-</tspan>
                            <tspan font-size="13" x="155.408" y="-77">14</tspan>
                            <tspan font-size="13" x="168.741" y="-77">-</tspan>
                            <tspan font-size="13" x="173.241" y="-77">Эфир</tspan>
                            <tspan font-size="13" x="312.448" y="-77">Л</tspan>
                            <tspan font-size="13" x="322.448" y="-77">-</tspan>
                            <tspan font-size="13" x="326.948" y="-77">14</tspan>
                            <tspan font-size="13" x="340.281" y="-77">-</tspan>
                            <tspan font-size="13" x="344.781" y="-77">18</tspan>
                        </text>
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 958.5 234.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(979.328 204)"
                        >
                            В
                            <tspan x="7.16663" y="0">-</tspan>
                            14
                            <tspan x="21.3333" y="0">-</tspan>
                            У
                            <tspan font-size="13" x="-48.2235" y="-72">Л</tspan>
                            <tspan font-size="13" x="-38.2235" y="-72">-</tspan>
                            <tspan font-size="13" x="-33.7235" y="-72">14</tspan>
                            <tspan font-size="13" x="-20.3901" y="-72">-</tspan>
                            <tspan font-size="13" x="-15.8901" y="-72">Урт</tspan>
                            <tspan font-size="13" x="7.77649" y="-72">-</tspan>
                            <tspan font-size="13" x="12.2765" y="-72">Аул</tspan>
                        </text>
                        <a href="<?= $urlSwitch1 ?>">
                            <rect id="c66"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 250.5 208.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.000104987 20.2401"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 259.5 228.74)"
                        />
                        <path
                                d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 257.5 229.5)"
                        />
                        <path
                                d="M0 0 0.056168 53.0983"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 259.5 190.598)"
                        />
                        <path
                                d="M1.5-0.00158672 1.54982 47.0967-1.45018 47.0998-1.5 0.00158672ZM0.0498211 47.0983 4.54665 44.0935 0.056168 53.0983-4.45335 44.103Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 259.5 190.598)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(274.004 203)"
                        >
                            В
                            <tspan x="7.16666" y="0">-</tspan>
                            Юв
                            <tspan x="28.5" y="0">-</tspan>
                            1
                            <tspan x="-9.89456" y="227">В</tspan>
                            <tspan x="-2.72787" y="227">-</tspan>
                            Ф
                            <tspan x="9.93878" y="227">-</tspan>
                            Бек
                            <tspan x="31.2721" y="227">-</tspan>
                            1
                        </text>
                        <a href="<?= $urlSwitch16 ?>">
                            <rect id="c416"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1070.5 415.5)"
                            />
                        </a>
                        <path
                                d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1063.5 395.5)"
                        />
                        <path
                                d="M0 0 1.46499 121.34"
                                fill="#FF0000"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1061.97 434.5)"
                        />
                        <path
                                d="M1.49989-0.0181088 2.89244 115.322-0.10734 115.358-1.49989 0.0181088ZM1.39255 115.34 5.85601 112.286 1.46499 121.34-3.14334 112.395Z"
                                fill="#006600"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1061.97 434.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(1074.08 429)"
                        >
                            В
                            <tspan x="7.16675" y="0">-</tspan>
                            РП
                            <tspan x="25.5" y="0">-</tspan>
                            14
                            <tspan x="-348.235" y="-4">В</tspan>
                            <tspan x="-341.068" y="-4">-</tspan>
                            Г
                            <tspan x="-330.735" y="-4">-</tspan>
                            2
                        </text>
                        <a href="<?= $urlSwitch10 ?>">
                            <rect id="c201"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 261.5 416.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.000104987 20.2401"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 251.5 396.5)"
                        />
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 254.5 396.5)"
                        />
                        <path d="M252.5 435.5 253.819 556.282" fill="#FF0000" fill-rule="evenodd" />
                        <path
                                d="M254 435.484 255.254 550.266 252.254 550.298 251 435.516ZM253.754 550.282 258.221 547.233 253.819 556.282 249.221 547.331Z"
                                fill="#006600"
                        />
                        <a href="<?= $urlSwitch15 ?>">
                            <rect id="c228"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 982.5 414.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.465512 17.2287"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 973.966 397.5)"
                        />
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 976.5 395.5)"
                        />
                        <path d="M973.5 433.5 973.5 554.161" fill="#FF0000" fill-rule="evenodd" />
                        <path
                                d="M975 433.5 975 548.161 972 548.161 972 433.5ZM973.5 548.161 978 545.161 973.5 554.161 969 545.161Z"
                                fill="#006600"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(985.743 429)"
                        >
                            В
                            <tspan x="7.16669" y="0">-</tspan>
                            Ф
                            <tspan x="19.8334" y="0">-</tspan>
                            Бек
                            <tspan x="41.1667" y="0">-</tspan>
                            2
                        </text>
                        <path
                                d="M0 0 0.000104987 51.7002"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 738.5 396.2)"
                        />
                        <a href="<?= $urlSwitch8 ?>">
                            <rect id="c2"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 728.5 376.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(494.491 368)"
                        >
                            В
                            <tspan x="7.16666" y="0">-</tspan>
                            1
                            <tspan x="16" y="0">-</tspan>
                            Т
                            <tspan x="26.6666" y="0">-</tspan>
                            1
                            <tspan x="256.286" y="0">В</tspan>
                            <tspan x="263.453" y="0">-</tspan>
                            2
                            <tspan x="272.286" y="0">-</tspan>
                            Т
                            <tspan x="282.953" y="0">-</tspan>
                            1
                            <tspan font-size="19" x="56.3096" y="-344">Қуйи Бўзсув</tspan>
                            <tspan font-size="19" x="166.73" y="-344">-</tspan>
                            <tspan font-size="19" x="177.563" y="-344">1</tspan>
                            <tspan font-size="19" x="191.563" y="-344">(ГЭС</tspan>
                            <tspan font-size="19" x="235.73" y="-344">-</tspan>
                            <tspan font-size="19" x="241.896" y="-344">14)</tspan>
                        </text>
                        <path
                                d="M408.374 82.8351 491.974 82.8351 491.974 96.4262 408.374 96.4262Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M408.374 96.4262 491.974 96.4262 491.974 110.017 408.374 110.017Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M407.707 96.4262 492.64 96.4262"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M408.374 82.1684 408.374 110.684"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M491.974 82.1684 491.974 110.684"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M407.707 82.8351 492.64 82.8351"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M407.707 110.017 492.64 110.017"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip7)">
                            <text id="g93Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(412.154 93)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip8)">
                            <text id="g93Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(412.154 106)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip10)" transform="matrix(1 0 -0 1.02857 485 83)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip12)" transform="matrix(1 0 -0 1.02857 486 97)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M599.881 83.1344 683.481 83.1344 683.481 96.7256 599.881 96.7256Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M599.881 96.7256 683.481 96.7256 683.481 110.317 599.881 110.317Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M599.214 96.7256 684.147 96.7256"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M599.881 82.4677 599.881 110.983"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M683.481 82.4677 683.481 110.983"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M599.214 83.1344 684.147 83.1344"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M599.214 110.317 684.147 110.317"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip13)">
                            <text id="g147Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(603.661 93)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip14)">
                            <text id="g147Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(603.661 107)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip15)" transform="matrix(1 0 -0 1.02857 677 84)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip16)" transform="matrix(1.16667 0 -0 1 677 97)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="13"
                                transform="translate(209.825 129)"
                        >
                            Л-Ювелирная
                            <tspan x="86.6667" y="0">-</tspan>
                            1
                        </text>
                        <path
                                d="M217.299 82.8597 300.898 82.8597 300.898 96.4509 217.299 96.4509Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M217.299 96.4509 300.898 96.4509 300.898 110.042 217.299 110.042Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M216.632 96.4509 301.565 96.4509"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M217.299 82.1931 217.299 110.709"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M300.898 82.1931 300.898 110.709"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M216.632 82.8597 301.565 82.8597"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M216.632 110.042 301.565 110.042"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip17)">
                            <text id="g66Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(221.078 93)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip18)">
                            <text id="g66Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(221.078 106)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip19)" transform="matrix(1 0 -0 1.02857 294 83)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip20)" transform="matrix(1 0 -0 1.02857 295 97)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M737.907 345.994 653.5 345.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c6"
                                    d="M0 15.5C-1.97336e-15 6.93959 6.93959-1.97336e-15 15.5-3.94671e-15 24.0604-7.89343e-15 31 6.93959 31 15.5 31 24.0604 24.0604 31 15.5 31 6.93959 31-9.86678e-15 24.0604 0 15.5Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 638.5 333.5)"
                            />
                            <path id="c5"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#663300"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 626.5 310.5)"
                            />
                            <path id="c4"
                                    d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 613.5 332.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.000104987 13.3795"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 654.5 346.88)"
                        />
                        <path
                                d="M0 0 0.112441 13.697"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 628.5 346.197)"
                        />
                        <path
                                d="M0 0 0.000104987 54.9262"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 544.5 397.426)"
                        />
                        <a href="<?= $urlSwitch7 ?>">
                            <rect id="c1"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 534.5 375.5)"
                            />
                        </a>
                        <path
                                d="M628.907 344.994 544.5 344.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M319.167 567.946 392.814 567.946 392.814 581.68 319.167 581.68Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M319.167 567.28 319.167 582.346"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M392.814 567.28 392.814 582.346"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M318.501 567.946 393.481 567.946"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M318.501 581.68 393.481 581.68"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip21)">
                            <text id="g255"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(322.947 578)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M214.253 567.99 287.9 567.99 287.9 581.723 214.253 581.723Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M214.253 567.323 214.253 582.39"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M287.9 567.323 287.9 582.39"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M213.586 567.99 288.566 567.99"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M213.586 581.723 288.566 581.723"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip22)">
                            <text id="g201"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(218.032 578)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M837.856 566.966 911.503 566.966 911.503 580.699 837.856 580.699Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M837.856 566.299 837.856 581.366"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M911.503 566.299 911.503 581.366"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M837.189 566.966 912.169 566.966"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M837.189 580.699 912.169 580.699"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip23)">
                            <text id="g282"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(841.635 577)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M935.163 566.31 1008.81 566.31 1008.81 580.044 935.163 580.044Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M935.163 565.644 935.163 580.71"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1008.81 565.644 1008.81 580.71"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M934.496 566.31 1009.48 566.31"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M934.496 580.044 1009.48 580.044"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip24)">
                            <text id="g228"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(938.942 576)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M1031.05 566.31 1104.7 566.31 1104.7 580.044 1031.05 580.044Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1031.05 565.644 1031.05 580.71"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1104.7 565.644 1104.7 580.71"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1030.38 566.31 1105.36 566.31"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1030.38 580.044 1105.36 580.044"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip25)">
                            <text id="g416"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1034.83 576)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M42.1761 382.823 110.092 382.823 110.092 395.623 42.1761 395.623Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M42.1761 382.156 42.1761 396.289"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M110.092 382.156 110.092 396.289"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M41.5094 382.823 110.759 382.823"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M41.5094 395.623 110.759 395.623"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip26)">
                            <text id="g258"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(45.9556 393)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M766.64 83.8391 850.24 83.8391 850.24 97.4302 766.64 97.4302Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M766.64 97.4302 850.24 97.4302 850.24 111.021 766.64 111.021Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M765.973 97.4302 850.906 97.4302"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M766.64 83.1724 766.64 111.688"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M850.24 83.1724 850.24 111.688"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M765.973 83.8391 850.906 83.8391"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M765.973 111.021 850.906 111.021"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip27)">
                            <text id="g120Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(770.419 94)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip28)">
                            <text id="g120Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(770.419 107)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip29)" transform="matrix(1 0 -0 1.02857 844 84)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip30)" transform="matrix(1 0 -0 1.02857 844 98)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <path
                                d="M931.781 83.7468 1015.38 83.7468 1015.38 97.338 931.781 97.338Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M931.781 97.338 1015.38 97.338 1015.38 110.929 931.781 110.929Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M931.115 97.338 1016.05 97.338"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M931.781 83.0801 931.781 111.596"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1015.38 83.0801 1015.38 111.596"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M931.115 83.7468 1016.05 83.7468"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M931.115 110.929 1016.05 110.929"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip31)">
                            <text id="g174Plus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(935.561 94)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip32)">
                            <text id="g174Minus"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(935.561 107)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip33)" transform="matrix(1 0 -0 1.02857 1009 84)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img9"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip34)" transform="matrix(1 0 -0 1.02857 1009 98)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img11"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <a href="<?= $urlSwitch2 ?>">
                            <rect id="c93"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 441.5 208.5)"
                            />
                        </a>
                        <path d="M450.722 190.598 450.5 137.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                                d="M449.222 190.605 449.025 143.506 452.025 143.494 452.222 190.592ZM450.525 143.5 446.038 146.519 450.5 137.5 455.038 146.481Z"
                                fill="#663300"
                        />
                        <path
                                d="M642.139 280.757 641.5 209.5"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch3 ?>">
                            <rect id="c147"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="19"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 631.5 209.5)"
                            />
                        </a>
                        <path d="M640.722 190.598 640.5 137.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                                d="M639.222 190.605 639.025 143.506 642.025 143.494 642.222 190.592ZM640.525 143.5 636.038 146.519 640.5 137.5 645.038 146.481Z"
                                fill="#663300"
                        />
                        <path
                                d="M0 0 0.000104987 21.876"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 806.5 232.376)"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect id="c120"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 797.5 210.5)"
                            />
                        </a>
                        <path d="M806.722 192.598 806.5 139.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                                d="M805.222 192.605 805.025 145.506 808.025 145.494 808.222 192.592ZM806.525 145.5 802.038 148.519 806.5 139.5 811.038 148.481Z"
                                fill="#663300"
                        />
                        <path
                                d="M0 0 0.000104987 21.876"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 959.5 231.376)"
                        />
                        <a href="<?= $urlSwitch5 ?>">
                            <rect id="c174"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#663300"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 950.5 209.5)"
                            />
                        </a>
                        <path d="M959.722 191.598 959.5 138.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                                d="M958.222 191.605 958.025 144.506 961.025 144.494 961.222 191.592ZM959.525 144.5 955.038 147.519 959.5 138.5 964.038 147.481Z"
                                fill="#663300"
                        />
                        <path
                                d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 766.5 399.5)"
                        />
                        <path
                                d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 736.5 400.5)"
                        />
                        <path
                                d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 542.5 400.5)"
                        />
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 480.5 401.5)"
                        />
                        <path
                                d="M0 2C-2.54627e-16 0.89543 0.89543 -2.54627e-16 2 -5.09253e-16 3.10457-1.01851e-15 4 0.89543 4 2 4 3.10457 3.10457 4 2 4 0.89543 4-1.27313e-15 3.10457 0 2Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 354.5 400.5)"
                        />
                        <a href="<?= $urlSwitch11 ?>">
                            <rect id="c255"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="19"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 365.5 417.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c2822"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#7F7F7F"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 857.5 522.5)"
                            />
                            <path id="c2821"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 857.5 495.5)"
                            />
                        </a>
                        <path
                                d="M1.49993-0.014715 1.81503 32.1043-1.18482 32.1337-1.49993 0.014715ZM0.315103 32.119 4.78546 29.075 0.373963 38.1187-4.21411 29.1633Z"
                                fill="#7F7F7F"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 873.874 523.5)"
                        />
                        <path
                                d="M873.874 461.455 873.5 399.5"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 870.5 401.5)"
                        />
                        <a href="<?= $urlSwitch14 ?>">
                            <rect id="c282"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 884.5 415.5)"
                            />
                        </a>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(371.858 429)"
                        >
                            В
                            <tspan x="7.16666" y="0">-</tspan>
                            ТСН
                            <tspan x="33.8333" y="0">-</tspan>
                            1
                            <tspan x="516.33" y="2">В</tspan>
                            -ТСН-2
                            <tspan x="-191.44" y="0">Резерв</tspan>
                        </text>
                        <a href="<?= $urlSwitch9 ?>">
                            <rect id="c0"
                                    x="0"
                                    y="0"
                                    width="18"
                                    height="18"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 171.5 417.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.000104987 20.2401"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 162.5 397.5)"
                        />
                        <path
                                d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 164.5 396.5)"
                        />
                        <path d="M162.5 435.5 162.5 555.627" fill="#FF0000" fill-rule="evenodd" />
                        <path
                                d="M164 435.5 164 549.627 161 549.627 161 435.5ZM162.5 549.627 167 546.627 162.5 555.627 158 546.627Z"
                                fill="#006600"
                        />
                        <path
                                d="M125.596 567.81 199.243 567.81 199.243 581.543 125.596 581.543Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M125.596 567.143 125.596 582.21"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M199.243 567.143 199.243 582.21"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M124.929 567.81 199.91 567.81"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M124.929 581.543 199.91 581.543"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip35)">
                            <text
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(129.376 578)"
                            >
                                Р= 0,00 кВт
                            </text>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(585.683 252)"
                        >
                            В
                            <tspan x="7.16663" y="0">-</tspan>
                            Т
                            <tspan x="17.8333" y="0">-</tspan>
                            1
                            <tspan x="26.6666" y="0">-</tspan>
                            35
                        </text>
                        <a href="<?= $urlSwitch6 ?>">
                            <rect id="c3"
                                    x="0"
                                    y="0"
                                    width="19"
                                    height="18"
                                    stroke="#006600"
                                    stroke-width="2.66667"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    transform="matrix(1 0 0 -1 632.5 259.5)"
                            />
                        </a>
                        <path
                                d="M0 0 0.465512 17.2287"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1060.97 400.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(1066.81 336)"
                        >
                            Гидроузел 14
                            <tspan x="42.1666" y="-79">А</tspan>
                        </text>
                        <path
                                d="M0 0 0.0604724 22.5964"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1096.56 225.5)"
                        />
                        <rect id="c350"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1088.5 264.5)"
                        />
                        <path
                                d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1094.5 225.5)"
                        />
                        <path
                                d="M1099 264.5 1099 298.456 1096 298.456 1096 264.5ZM1104.05 290.211 1097.5 301.433 1090.95 290.211C1090.54 289.496 1090.78 288.577 1091.49 288.16 1092.21 287.743 1093.13 287.984 1093.55 288.7L1098.8 297.7 1096.2 297.7 1101.45 288.7C1101.87 287.984 1102.79 287.743 1103.51 288.16 1104.22 288.577 1104.46 289.496 1104.05 290.211Z"
                                fill="#989898"
                        />
                        <path
                                d="M1064.49 309.111 1138.14 309.111 1138.14 322.844 1064.49 322.844Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1064.49 308.444 1064.49 323.511"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1138.14 308.444 1138.14 323.511"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1063.82 309.111 1138.8 309.111"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1063.82 322.844 1138.8 322.844"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip36)">
                            <text id="g350"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1068.27 319)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                                d="M0 0 53.0092 0.000104987"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1123.51 222.5)"
                        />
                        <path
                                d="M1.5-5.50253e-06 1.50008 22.6196-1.49992 22.6196-1.5 5.50253e-06ZM8.29768e-05 22.6196 4.50007 19.6196 0.000104987 28.6196-4.49993 19.6196Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 1096.5 146.12)"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c3502"
                                    d="M0 17C-2.03701e-15 7.61116 7.16344-2.16433e-15 16-4.32865e-15 24.8366-8.65731e-15 32 7.61116 32 17 32 26.3888 24.8366 34 16 34 7.16344 34-1.01851e-14 26.3888 0 17Z"
                                    stroke="#7F7F7F"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 1080.5 211.5)"
                            />
                            <path id="c3501"
                                    d="M0 17C-2.03701e-15 7.61116 7.16344-2.16433e-15 16-4.32865e-15 24.8366-8.65731e-15 32 7.61116 32 17 32 26.3888 24.8366 34 16 34 7.16344 34-1.01851e-14 26.3888 0 17Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 1080.5 178.5)"
                            />
                        </a>
                        <path
                                d="M1096.5 211.5 1096.5 224.541"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(1114.04 180)"
                        >
                            ТП-778
                        </text>
                        <rect
                                x="1055.5"
                                y="101.5"
                                width="215"
                                height="245"
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
                                transform="translate(1195.29 112)"
                        >
                            ГИДРОУЗЕЛ
                        </text>
                        <path
                                d="M0 0 0.0604724 22.5964"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1182.56 222.5)"
                        />
                        <rect id="c310"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1173.5 261.5)"
                        />
                        <path
                                d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1180.5 222.5)"
                        />
                        <path
                                d="M1185 261.5 1185 295.456 1182 295.456 1182 261.5ZM1190.05 287.211 1183.5 298.433 1176.95 287.211C1176.54 286.496 1176.78 285.577 1177.49 285.16 1178.21 284.743 1179.13 284.984 1179.55 285.7L1184.8 294.7 1182.2 294.7 1187.45 285.7C1187.87 284.984 1188.79 284.743 1189.51 285.16 1190.22 285.577 1190.46 286.496 1190.05 287.211Z"
                                fill="#989898"
                        />
                        <path
                                d="M0 0 53.0092 0.000104987"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1209.51 220.5)"
                        />
                        <path
                                d="M1.5-5.50253e-06 1.50008 22.6196-1.49992 22.6196-1.5 5.50253e-06ZM8.29768e-05 22.6196 4.50007 19.6196 0.000104987 28.6196-4.49993 19.6196Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 1182.5 143.12)"
                        />
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c3102"
                                    d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                    stroke="#7F7F7F"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 1165.5 208.5)"
                            />
                            <path id="c3101"
                                    d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                    stroke="#006600"
                                    stroke-width="3"
                                    stroke-miterlimit="8"
                                    fill="#FFFFFF"
                                    fill-rule="evenodd"
                                    transform="matrix(1 0 0 -1 1165.5 174.5)"
                            />
                        </a>
                        <path
                                d="M1182.5 208.5 1182.5 221.541"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(1207.94 180)"
                        >
                            КТП
                            <tspan x="23.1666" y="0">-</tspan>
                            108
                        </text>
                        <path
                                d="M1154.48 308.371 1228.13 308.371 1228.13 322.104 1154.48 322.104Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1154.48 307.705 1154.48 322.771"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1228.13 307.705 1228.13 322.771"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1153.81 308.371 1228.79 308.371"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1153.81 322.104 1228.79 322.104"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip37)">
                            <text id="g310"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1158.26 318)"
                            >
                                Р
                            </text>
                        </g>
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(1200.36 255)"
                        >
                            А
                        </text>
                        <path
                                d="M30.9633 212.571 98.8795 212.571 98.8795 225.371 30.9633 225.371Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M30.9633 211.904 30.9633 226.038"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M98.8795 211.904 98.8795 226.038"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M30.2966 212.571 99.5461 212.571"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M30.2966 225.371 99.5461 225.371"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip38)">
                            <text id="g69"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(34.7428 223)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M1081.7 381.974 1149.62 381.974 1149.62 394.774 1081.7 394.774Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1081.7 381.307 1081.7 395.441"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1149.62 381.307 1149.62 395.441"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1081.04 381.974 1150.28 381.974"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1081.04 394.774 1150.28 394.774"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip39)">
                            <text id="g231"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1085.48 392)"
                            >
                                U
                            </text>
                        </g>
                        <path id="c1201"
                                d="M458.5 478C458.5 464.469 469.469 453.5 483 453.5 496.531 453.5 507.5 464.469 507.5 478 507.5 491.531 496.531 502.5 483 502.5 469.469 502.5 458.5 491.531 458.5 478Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip40)">
                                <g clip-path="url(#clip41)">
                                    <g clip-path="url(#clip42)">
                                        <path
                                                d="M482.689 470.933 483.622 470.933 484.944 471.167 486.033 471.633 486.889 472.178 487.9 473.189 488.522 474.122 488.989 475.367 489.144 476.067 489.144 477.933 488.833 479.1 488.211 480.344 487.589 481.122 487.044 481.667 485.956 482.367 484.711 482.833 483.933 482.989 482.378 482.989 481.133 482.678 480.278 482.289 479.422 481.744 478.567 480.967 478.022 480.189 477.478 479.1 477.167 477.856 477.089 476.922 477.244 475.678 477.556 474.667 478.178 473.5 479.033 472.567 479.656 472.022 480.978 471.322 482.144 471.011Z"
                                        />
                                        <path
                                                d="M483.156 457.089 484.011 457.089 485.489 457.322 486.967 457.789 488.211 458.411 489.144 459.033 489.922 459.733 490.856 460.667 491.711 461.911 492.333 463.156 492.8 464.556 493.033 465.722 493.111 466.344 493.111 467.822 492.878 469.3 492.489 470.622 491.867 471.944 491.089 473.033 490.933 473.033 490.311 471.944 489.378 470.856 488.522 470.078 487.433 469.378 486.267 468.833 484.944 468.444 483.156 468.211Z"
                                        />
                                        <path
                                                d="M470.4 472.878 470.789 472.956 472.967 474.2 474.522 475.133 474.6 475.289 474.444 476.922 474.6 478.556 474.989 480.033 475.533 481.2 475.533 481.433 473.356 482.678 471.489 483.767 467.444 486.1 466.122 486.878 465.889 486.878 465.189 485.4 464.8 484.078 464.644 483.144 464.567 481.822 464.722 480.344 464.956 479.256 465.5 477.778 466.044 476.767 466.744 475.756 467.678 474.744 468.533 473.967 469.933 473.111Z"
                                        />
                                        <path
                                                d="M490.7 481.433 491.089 481.511 492.956 482.6 499.022 486.1 500.344 486.878 500.189 487.267 499.644 488.044 498.944 488.9 498.4 489.444 497.233 490.3 495.989 491 494.511 491.544 493.344 491.778 492.878 491.856 490.544 491.856 489.378 491.622 488.133 491.233 486.811 490.611 485.878 489.989 485.878 485.322 486.578 485.011 487.9 484.311 488.833 483.611 489.922 482.522Z"
                                        />
                                        <path
                                                d="M473.667 462.067 475.378 462.067 476.856 462.3 478.489 462.844 479.811 463.544 480.433 463.933 480.433 468.678 479.033 469.3 477.944 470 477.089 470.7 476.544 471.244 475.611 472.567 475.144 472.411 473.822 471.633 467.756 468.133 466.044 467.122 465.967 466.967 466.511 466.111 467.367 465.1 467.989 464.478 469.156 463.622 470.244 463 471.722 462.456 472.578 462.222Z"
                                        />
                                        <path
                                                d="M477.167 483.533 477.478 483.611 478.644 484.467 479.967 485.089 481.211 485.478 482.144 485.633 483.078 485.711 483.156 485.789 483.156 496.833 481.989 496.833 480.433 496.522 479.111 496.056 477.711 495.278 476.7 494.5 475.922 493.8 475.144 492.867 474.367 491.622 473.744 490.222 473.356 488.744 473.2 487.344 473.2 486.489 473.278 485.789 475.222 484.7 476.544 483.922Z"
                                        />
                                        <path
                                                d="M500.267 467.044 500.422 467.044 500.967 468.133 501.433 469.533 501.667 470.778 501.744 472.333 501.589 473.733 501.278 475.056 500.656 476.533 500.111 477.467 499.489 478.322 498.633 479.256 497.467 480.189 496.456 480.811 495.756 481.122 493.811 480.033 491.944 478.944 491.711 478.789 491.867 477.389 491.867 476.222 492.567 475.522 493.578 474.2 494.278 473.033 494.978 471.556 495.522 469.844 496.222 469.378 498.167 468.289 500.033 467.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c3901"
                                d="M743.5 479C743.5 465.469 754.469 454.5 768 454.5 781.531 454.5 792.5 465.469 792.5 479 792.5 492.531 781.531 503.5 768 503.5 754.469 503.5 743.5 492.531 743.5 479Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip43)">
                                <g clip-path="url(#clip44)">
                                    <g clip-path="url(#clip45)">
                                        <path
                                                d="M767.689 471.933 768.622 471.933 769.944 472.167 771.033 472.633 771.889 473.178 772.9 474.189 773.522 475.122 773.989 476.367 774.144 477.067 774.144 478.933 773.833 480.1 773.211 481.344 772.589 482.122 772.044 482.667 770.956 483.367 769.711 483.833 768.933 483.989 767.378 483.989 766.133 483.678 765.278 483.289 764.422 482.744 763.567 481.967 763.022 481.189 762.478 480.1 762.167 478.856 762.089 477.922 762.244 476.678 762.556 475.667 763.178 474.5 764.033 473.567 764.656 473.022 765.978 472.322 767.144 472.011Z"
                                        />
                                        <path
                                                d="M768.156 458.089 769.011 458.089 770.489 458.322 771.967 458.789 773.211 459.411 774.144 460.033 774.922 460.733 775.856 461.667 776.711 462.911 777.333 464.156 777.8 465.556 778.033 466.722 778.111 467.344 778.111 468.822 777.878 470.3 777.489 471.622 776.867 472.944 776.089 474.033 775.933 474.033 775.311 472.944 774.378 471.856 773.522 471.078 772.433 470.378 771.267 469.833 769.944 469.444 768.156 469.211Z"
                                        />
                                        <path
                                                d="M755.4 473.878 755.789 473.956 757.967 475.2 759.522 476.133 759.6 476.289 759.444 477.922 759.6 479.556 759.989 481.033 760.533 482.2 760.533 482.433 758.356 483.678 756.489 484.767 752.444 487.1 751.122 487.878 750.889 487.878 750.189 486.4 749.8 485.078 749.644 484.144 749.567 482.822 749.722 481.344 749.956 480.256 750.5 478.778 751.044 477.767 751.744 476.756 752.678 475.744 753.533 474.967 754.933 474.111Z"
                                        />
                                        <path
                                                d="M775.7 482.433 776.089 482.511 777.956 483.6 784.022 487.1 785.344 487.878 785.189 488.267 784.644 489.044 783.944 489.9 783.4 490.444 782.233 491.3 780.989 492 779.511 492.544 778.344 492.778 777.878 492.856 775.544 492.856 774.378 492.622 773.133 492.233 771.811 491.611 770.878 490.989 770.878 486.322 771.578 486.011 772.9 485.311 773.833 484.611 774.922 483.522Z"
                                        />
                                        <path
                                                d="M758.667 463.067 760.378 463.067 761.856 463.3 763.489 463.844 764.811 464.544 765.433 464.933 765.433 469.678 764.033 470.3 762.944 471 762.089 471.7 761.544 472.244 760.611 473.567 760.144 473.411 758.822 472.633 752.756 469.133 751.044 468.122 750.967 467.967 751.511 467.111 752.367 466.1 752.989 465.478 754.156 464.622 755.244 464 756.722 463.456 757.578 463.222Z"
                                        />
                                        <path
                                                d="M762.167 484.533 762.478 484.611 763.644 485.467 764.967 486.089 766.211 486.478 767.144 486.633 768.078 486.711 768.156 486.789 768.156 497.833 766.989 497.833 765.433 497.522 764.111 497.056 762.711 496.278 761.7 495.5 760.922 494.8 760.144 493.867 759.367 492.622 758.744 491.222 758.356 489.744 758.2 488.344 758.2 487.489 758.278 486.789 760.222 485.7 761.544 484.922Z"
                                        />
                                        <path
                                                d="M785.267 468.044 785.422 468.044 785.967 469.133 786.433 470.533 786.667 471.778 786.744 473.333 786.589 474.733 786.278 476.056 785.656 477.533 785.111 478.467 784.489 479.322 783.633 480.256 782.467 481.189 781.456 481.811 780.756 482.122 778.811 481.033 776.944 479.944 776.711 479.789 776.867 478.389 776.867 477.222 777.567 476.522 778.578 475.2 779.278 474.033 779.978 472.556 780.522 470.844 781.222 470.378 783.167 469.289 785.033 468.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M729.632 508.473 808.525 508.473 808.525 521.273 729.632 521.273Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M729.632 521.273 808.525 521.273 808.525 534.073 729.632 534.073Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M729.632 534.073 808.525 534.073 808.525 546.873 729.632 546.873Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M729.632 546.873 808.525 546.873 808.525 559.673 729.632 559.673Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M729.632 559.673 808.525 559.673 808.525 572.473 729.632 572.473Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M729.632 572.473 808.525 572.473 808.525 585.273 729.632 585.273Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M728.966 521.273 809.192 521.273"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M728.966 534.073 809.192 534.073"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M728.966 546.873 809.192 546.873"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M728.966 559.673 809.192 559.673"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M728.966 572.473 809.192 572.473"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M729.632 507.807 729.632 585.94"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M808.525 507.807 808.525 585.94"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M728.966 508.473 809.192 508.473"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M728.966 585.273 809.192 585.273"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip46)">
                            <text id="g39"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(733.412 518)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip47)">
                            <text id="g40"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(733.412 531)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip48)">
                            <text id="a39"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(733.412 544)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip49)">
                            <text id="k39"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(733.412 557)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip50)">
                            <text id="n39"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(733.412 570)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip51)">
                            <text id="w39" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(733.412 582)"
                            >
                                Qвода
                            </text>
                        </g>
                        <g clip-path="url(#clip53)" transform="matrix(1.01496 0 -0 1 1046 32)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img52"
                                    transform="scale(0.789474 0.789474)"
                            ></use>
                        </g>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1068.17 27.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 1167.5 81.1712)"
                        />
                        <path
                                d="M1164.55 94.0309 1156.86 85.6543 1157.35 85.2035 1165.04 93.58ZM1157.11 85.4289 1156.95 89.1967 1153.5 81.5001 1160.87 85.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M1173.95 93.8892 1164.5 93.5001"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1071.96 13.8022 1166.33 13.8022 1166.33 26.6022 1071.96 26.6022Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1071.96 13.1355 1071.96 27.2689"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1166.33 13.1355 1166.33 27.2689"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1071.29 13.8022 1166.99 13.8022"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1071.29 26.6022 1166.99 26.6022"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip54)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1075.74 24)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1086.24 24)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M1067.5 28.5001 1086.69 28.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1174.45 80.8859 1262.11 80.8859 1262.11 93.6859 1174.45 93.6859Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1174.45 80.2192 1174.45 94.3525"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1262.11 80.2192 1262.11 94.3525"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1173.78 80.8859 1262.77 80.8859"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1173.78 93.6859 1262.77 93.6859"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip55)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1178.23 91)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1188.73 91)"
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
                                transform="matrix(1 0 0 -1 1064.5 35.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1173.99 53.5001)"
                        />
                        <path
                                d="M1174.5 53.5001 1193.69 53.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1178.65 40.7024 1251.85 40.7024 1251.85 53.5024 1178.65 53.5024Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1178.65 40.0357 1178.65 54.169"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1251.85 40.0357 1251.85 54.169"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.98 40.7024 1252.51 40.7024"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1177.98 53.5024 1252.51 53.5024"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip56)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1182.43 51)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M1150.5 81.5001 1173.21 81.5002"
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
        fetch('/quyi-buzsuv/server14', { signal: controller.signal })
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

                let c1 = 0; let c2 = 0; let c3 = 0; let c4 = 0; let c5 = 0; let c6 = 0;
                data.forEach(item => {
                    if (item.id === 66) {
                        const plus = document.getElementById("g66Plus");
                        const minus = document.getElementById("g66Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(66);
                        } else {
                            falseAnimation(66);
                        }
                    } else if (item.id === 93) {
                        const plus = document.getElementById("g93Plus");
                        const minus = document.getElementById("g93Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(93);
                        } else {
                            falseAnimation(93);
                        }
                    } else if (item.id === 147) {
                        const plus = document.getElementById("g147Plus");
                        const minus = document.getElementById("g147Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(147);
                        } else {
                            falseAnimation(147);
                        }
                    } else if (item.id === 120) {
                        const plus = document.getElementById("g120Plus");
                        const minus = document.getElementById("g120Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(120);
                        } else {
                            falseAnimation(120);
                        }
                    } else if (item.id === 174) {
                        const plus = document.getElementById("g174Plus");
                        const minus = document.getElementById("g174Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,00 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,00 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(174);
                        } else {
                            falseAnimation(174);
                        }
                    } else if(item.id === 69) {
                        const value = document.getElementById("g69");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 258) {
                        const value = document.getElementById("g258");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 231) {
                        const value = document.getElementById("g231");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 350) {
                        const value = document.getElementById("g350");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(350);
                            trueAnimation(3501);
                            trueAnimation(3502);
                        } else {
                            falseAnimation(350);
                            falseAnimation(3501);
                            falseAnimation(3502);
                        }
                    } else if(item.id === 310) {
                        const value = document.getElementById("g310");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(310);
                            trueAnimation(3101);
                            trueAnimation(3102);
                        } else {
                            falseAnimation(310);
                            falseAnimation(3101);
                            falseAnimation(3102);
                        }
                    } else if(item.id === 201) {
                        const value = document.getElementById("g201");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(201);
                            c1 = 1;
                        } else {
                            falseAnimation(201);
                        }
                    } else if(item.id === 255) {
                        const value = document.getElementById("g255");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(255);
                            trueAnimation(2551);
                            trueAnimation(2552);
                            c1 = 1;
                        } else {
                            falseAnimation(255);
                            falseAnimation(2551);
                            falseAnimation(2552);
                        }
                    } else if(item.id === 282) {
                        const value = document.getElementById("g282");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(282);
                            trueAnimation(2821);
                            trueAnimation(2822);
                            c2 = 1;
                        } else {
                            falseAnimation(282);
                            falseAnimation(2821);
                            falseAnimation(2822);
                        }
                    } else if(item.id === 228) {
                        const value = document.getElementById("g228");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(228);
                            c2 = 1;
                        } else {
                            falseAnimation(228);
                        }
                    } else if(item.id === 416) {
                        const value = document.getElementById("g416");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(416);
                            c2 = 1;
                        } else {
                            falseAnimation(416);
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 12) {
                        const value = document.getElementById("g12");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a12");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 7.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(12);
                            trueAnimation(1201);
                            c1 = 1;
                        } else {
                            falseAnimation(12);
                            falseAnimation(1201);
                        }
                    } else if(item.id === 13) {
                        const value = document.getElementById("g13");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 14) {
                        const value = document.getElementById("k12");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 15) {
                        const value = document.getElementById("n12");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 16) {
                        const value = document.getElementById("w12");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 39) {
                        const value = document.getElementById("g39");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a39");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 7.5 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(39);
                            trueAnimation(3901);
                            c2 = 1;
                        } else {
                            falseAnimation(39);
                            falseAnimation(3901);
                        }
                    } else if(item.id === 40) {
                        const value = document.getElementById("g40");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 41) {
                        const value = document.getElementById("k39");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 42) {
                        const value = document.getElementById("n39");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 43) {
                        const value = document.getElementById("w39");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }

                    else if(item.id === 1) {
                        const value = document.getElementById("active");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                    } else if(item.id === 2) {
                        const value = document.getElementById("reactive");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 3) {
                        const value = document.getElementById("activeOut");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 4) {
                        const value = document.getElementById("activeIn");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                    } else if(item.id === 5) {
                        const value = document.getElementById("ownNeeds");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " KВт";
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
                if (c1 > 0) {
                    trueAnimation(1);
                } else {
                    falseAnimation(1);
                }
                if (c2 > 0) {
                    trueAnimation(2);
                } else {
                    falseAnimation(2);
                }
                if (c1 > 0 || c2 > 0) {
                    trueAnimation(3);
                    trueAnimation(4);
                    trueAnimation(5);
                    trueAnimation(6);
                } else {
                    falseAnimation(3);
                    falseAnimation(4);
                    falseAnimation(5);
                    falseAnimation(6);
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