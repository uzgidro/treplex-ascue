<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'ГЭС-23';

$id = 44;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$energy = new Energy();
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);

$urlTransformer1 = $energy->getTransformer($id, 98);
$urlTransformer2 = $energy->getTransformer($id, 99);
$urlTransformer3 = $energy->getTransformer($id, 100);
$urlTransformer4 = $energy->getTransformer($id, 101);
$urlTransformer5 = $energy->getTransformer($id, 102);

$urlSwitch1 = $energy->getSwitch($id, 245);
$urlSwitch2 = $energy->getSwitch($id, 246);
$urlSwitch3 = $energy->getSwitch($id, 247);
$urlSwitch4 = $energy->getSwitch($id, 248);
$urlSwitch5 = $energy->getSwitch($id, 249);
$urlSwitch6 = $energy->getSwitch($id, 250);
$urlSwitch7 = $energy->getSwitch($id, 251);
$urlSwitch8 = $energy->getSwitch($id, 252);
$urlSwitch9 = $energy->getSwitch($id, 253);
$urlSwitch10 = $energy->getSwitch($id, 254);
$urlSwitch11 = $energy->getSwitch($id, 255);
$urlSwitch12 = $energy->getSwitch($id, 256);
$urlSwitch13 = $energy->getSwitch($id, 257);
$urlSwitch14 = $energy->getSwitch($id, 258);
$urlSwitch15 = $energy->getSwitch($id, 259);
$urlSwitch16 = $energy->getSwitch($id, 260);
$urlSwitch17 = $energy->getSwitch($id, 261);

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
                            <rect x="0" y="0" width="1280" height="720" />
                        </clipPath>
                        <clipPath id="clip1">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOZJREFUSEvtl1EOhCAMRCuriKKu9z/tBhRpp3VP0PdJX6LOQCJEnSFIPmzGGEELYUSlMqEWJlQq7rlXcM+9gnvuFdxzr+Ce+SMWZ9RCin28rDcZrRBCbsONcPQC7bhishGtuGZwRKLRejGgBvTFVcV+fbIORJJacv+fnM+WoW6CMzSNaMEZY+0axQOnD5l1R3Ti+OHLNXqtZZYaUUKjUoqQ2LUYOxVvC4W7CIneEK0IiQon2/cKVQsrQiJrUZF0eDiyCAmvBYqQ9HAWHElaOLoISavl2ZtvXKfFLEJSTotdhCQmdiIefgYCEnC+WqtNAAAAAElFTkSuQmCC"
                            preserveAspectRatio="none"
                            id="img2"
                        ></image>
                        <clipPath id="clip3">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip4">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOFJREFUSEvtl1kOxTAIA5PQfX33P+0TXbFDb8B8wkiR7EZKU2JykabloUMjIh0Pa3pRBh4z+dCkjLxA2un0ZOYNslyayMory/BoIpmXL20xXsPbl85oIguvb1bQRDYWTkZ7qjL5tWgRiBvOWQTihLOxo9S1PEUgVTgYyUuPmi0CgVqgCATCmXlrMLVwEchTS/4+VSn3yXURyHVbvCKQ47a4RSBay0cRyJzSzjOXPvHkg7TPF1445V6asNs6ns79oH+sfVyQOqDwlPDCU8ILTwkvPCW88JSRNale9yf8ELN/C393qxyRJJMMtwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img5"
                        ></image>
                        <clipPath id="clip6">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
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
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip12">
                            <rect x="0" y="0" width="48985.7" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip22">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="47625" height="104775" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="0" y="0" width="44903.6" height="104775" />
                        </clipPath>
                        <clipPath id="clip25">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip26">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip27">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip28">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip29">
                            <rect x="0" y="0" width="47625" height="114300" />
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
                            <rect x="0" y="0" width="1181100" height="581025" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7Z0JUJRnmsczuzv37k7t7G5N7ezsztZU7WzVzM5kJo5HohNjNKhRYtSWeEXxCPHO6KCOiYooohyCB2ffTd800NwIyn03zaUCogh0c4iKBzSgk43+t563aYSvGyEKHqSfql91f0e/dH/fn+e9nuf9XnvtOZqrq+t7ezw9BW+//fZvaHvr5s2BGoW6Ta1UtXPZt29fLYBvcctwmtNGbUeOHJG1tLRgypQpi4xG47d9fHykvT094NLT0wOVStXlFJzTnsnEYnEzCe7NadNOqFUq+Pj4MHE5wik4pz2TLV++/KdpaWmPWltaMPUPk4Nu376N2JgYO6ENEtxdbhlOm0BmaOz6n1JTr39Zi2UWVXdsJ/Ats/nR9y+29Lxe3ty7tNrU98cLpt4/XLhm+cmFDivljXd+bmzpmlbW3LWgou3+e1XXH/3QViZ5KOO1Oz+qMHfP3OixfXtHx3UwwU2eHNTZ2YkYJrheO7ERSqXSKbiJaEZzj2dZs6W11NTzyNjSh7KWPhhNPV8ZTRZGWXPPQ6O5D4aW+9ZjLfdB24z+7TLGA4bB1PPQYO5rN5h764zm3i5Dc8+jMvMDhAiVjyw9liGCi42NtROa08NNcDOa78usghk/SJQSuRo9THCtmDwKwTk93AQ1o7lXZvVO9kIZKwqvdEITba0+29ra8MYbb6SyNtwTBPdN8HA7d+78vsucOXtfe+21b07naLwFR1WvIqUAly/XDbTXMjIy4PRwr722ZMmSnx855A2tVvt97rEJa+MtOMIvRIqYaA1ionWM48eOjSg4vV7fzv2uE81mzZo1SSaWYM+ePT/jHpuwNv6C68MhvzOIi09EXHwS4hIS4R9wgglOKVcgJTkZXV1ddoKrqqpqTk5OnpSUlPR6QkLCb22kpKT8hvafPHly8ooVK/6F+3teJZsxY8acvJxcuC1e/Dr32IS18RUc9Xrvw9jcg7Imi5VmC+RJuRCJZdj3xUEoVVpIpVKcO3cOFotlQHD37t3DzZs3cePGjSHQPsJkMmHevHlbuL/nVbLN2zavbmpqwowZM2Zyj01YG1/BDY+xpZcJMtVwFcERMmijdZBKpMjLy7Pzdo4gcS5cuHAn9/e8Subq6rqZvPukSZM+5B6bsPZiBNfv+Wyv5l7EZVciJFIKfbweErEEZWVldiLjsnjxYk/u73mVzN3dff+Xf/0SM2fO/IR7bMLaixGcY0iAiuQ8hAujkJSQBIlYjIsXLtgJzcZ6d/f93N/zKpnnTs+ghw8fYsVHK/7CPTZh7WUSHMP8AEZTLwTaNIhlSqQkpbA23uXLl+0E57FhQyj397xKdvTIUcmjR4+wY9u2AO6xCWsvneAGUdJoQYgsDkp1LOvNRsmi0NjYyMbzLL09CPD3R8DxgIL3Xd6fx/1dL8Ko18zj8f59tBw9cvQsdYD2eu5W07aXl9ffccuccDbegmNzrw72j8TgzxVc6cQpgQox+gQkJiZCLo9iMxYalYrFz9VcuoQTJ06UzJ07d8GLDGk6fPhwfVZWFrKzs0cHnZtlfY2Ojsb06dPf4ZY54Wy8BMc6BGZ6b53k5x63dRwGzrU7bk/WpVYER8qQmpaB+LhYHPP1HTKUUldXh6CgIOP8+fM/9PLy+hvubx1v0yiU9bIoGbQaDbQa7Yjw+Xz4+/vjzJkzbPbFKbinxBZR4hNwBhKFFmKFDkJFDPjyOITJdDgtIeJwrsrUL8rRYew/92zZVQSFCFFuLAc/ko+bN24OadtduXIFJ4ODqz5YsID3PIVHgtPpdLAZtc+eZK2trSgpKUH95XqkpaRiplNwT0/upevYf+AgNCo1NGo1tGoNojVaxOpiEBcbixidDuF8AU4KlMi52DoQ+sQtxzF9KDP14YwkBgUFRZCKxLhcZ9+paGhoIO9x8YMPPlgeHR39t9zfPtamUSrraeqOhFZeXg6N2jqdp3MA7VcqFKxNWl9fj7RUp+CeCWl8Dpqbmu1EQFiIbgvSklMgl0khlshxWqhGXt0Nu3KGh2Ly7kORlAt9QgqSEhJB00Tcv0XQTT19+nStq6vr6vFsmNsEd+fOHcTHxw/xcPTeEWRODzcGnBaq0DOofTUcNIWli45mnjBKrsJpsRYF9bdYlTy4nTcchpYHSC2uQ6QoCkWFRYjWRQ9p1w2GpsNCQkKuLFq0yN3Dw8Ma1TyGZhMctcfu3r07qPJ8sjk93LNi7oNAorK74Y6wZWndunEDcrkccbFxUCi1CJHqUHT1jn3ZjjA/QP7lGzhxRojq6moI+HwWHMD9WzZazGZEhkdcc+PxNi5btuw73GvytGYTXHp6Orq7u7m6GtacHu5ZaepmouHe6NFAXkgikSA9NQ0yhRph8ngUN95jIe4j9WYNph4E8xUwGsshFApYG45b/mDaWlvBj4hsXrZ06abt27d/l3ttvq49teCcHu7Z0OddQHFxybAJMqOhpqYGEokYubm5kEapEaZIRElTt93fGoq1XSfQnUX6uUwWb1dYWGhXNpfr7e0QCARmHo+3be3atd/jXqPR2tMK7kp9PTLSzuK9d2YHz587f9PCMYbKJOa8++6mVatW/SP3ez9XG0vB2XqZoVHxuHf3rt2NfRpKi0sgk9BkvhECqQJ8TSoMzZb+vzl8z1afVQmpQo3C/HzE6eOGbdcNpqOjA2KRqH3lypU7eTze147CfVrBkYcrNxpRWlIKQ+nYU2p7bzBg+fLlv+Z+7+dqYyk4ghrxYSJKmLG/oU8LieVcRgabYai+eAGRYgXEugyUmXrs/v4A5gfIrm7ByVARLl68CJFIxBry3LIdcfPGDZq/7Vi9cqXnli1b/p57zYYzm+CKiopYz3ikcTibXelvwyXE6VnP3jQOxOhikJWZNbEEZ52O6oNQqrC7iWMBxY7p9XpotFrU1V1GuEAGfU5V/9933L4rvdaFwFAJLl68BEEkH6Zmx0M1jrh18ybkUVE3V69cvW/9+vX/wL12XLMJjiJAtFot83TkNbnCq6ysREZ6Bq5eucKO2dpwJcXFQ84bS6M4Q5p2m1CCI3JqOpCYnGp388aSzs7bUKmUSEhIRHrGeYQp9CgzU0Cn/fdhmPsQIdcjv6CITSmVlRrsynwS1OOVR0XdXrNmzf5ly5b9iHsNbWYTHBkJicbjqAPU3t4+cOO//PJLykhDj6UHapUaf/3rXwd6qSVFTsF9bUQxmcMO+I41NDUkEAhQUFCAgFAR8ms7+hOy7b8XdSbUqYWIjk1ATk4OkpKS7Mobidudt6FWq++ud1/vtXLlyn/iXsvBgrMZNQcSExJIgYzCoiKYzSaSJPJyc1k1b/NwxU4P9/UJEWvRa7G/WeOGxYJ4fTzS089CHKWC7lzZsNUr/c6zhgaE8aW4ePECpFIZG3i2K/MJ0Ljh3Tt3yFPe3bBhw9GPP/z4n23Xkiu4h48eQSk7De8vPBCjOsU4csADclEQ7j/oQ75NcE4P9/TwpTTgO3KPcKyhdhFFamRm5eC0LAYGkwVGM/0u+55s0ZVOBIQI2I2OjIxknpJb3mggseh0Osunn3xynMfj/auSIziqVhWhbuhu2Iaehk9hadiEroatSJYvx727d5CXm+P0cM9CaVMX5HLNM42/PQs3b94CXyBAaUkJiybJuUBBAfbf0zr534vTIjXKyyvZJDoJllveaCCP13X3HgUl9AoFgvtDPdxDrF46E4f+/Cb6Gjag99oGhPm+C97CSei2dDs93LNAvdP4vIswGEZOfhlXLD1s4pyGUaLUOihTi/rnZe2/s6GlD7K48yy+7vy5czibdta+vFFCwqPlx4Z4ODyCMpSH7oZN6CHBNWyApeFTJMuX4d69O8jLc7bhnoEHOC2NZVUF92a8CKqqqhAllaGgoBCnhBoYmu1nKaiqpSmzhLxqiKQqVFdXseTsrm77xOyRYILT2QtOFfoh8273+6H3aYoP0XXv3mPBffM8HFc8T0eoSGl3I14knbc6IRQIUFFejpOhQpyraGbf09GcbH5NBwJDItn8Kz8iEtevX7cr70k4EtxDAOrQRQNiswkuRbEI3SS4r9FLraiooPYi9ZK/ViSKzV5CwXG9HG07gDXEuedZI3wlUaOLEHneJCQk4FxGOjQ6PaIScuzEZguHL222IChchpqaWshkMly6dMmurOFwJDga7lWFcQW3kQmu697dx4IbwcNR+Ye9vXE2LQ2RERFs8Js7mDySvTSCO3DsZKx/iOyaX5i0MSBU3hQYrmwOCFOYAsKVLf6RytaAcFV7oEDdHiRQ3wgWaG4E8dWdQXxNZ5BAe+cEX3P3hCC6iwgMk3fv3fuXbpVCadGo1d0aldqi0+gssTExPfo4fZ9er78fHx//IDEx8cukpKT/S0lJ+SolJeVhamoq0tLS2Kg8xZGdP3+eXRgaK6OJe7pQNM5G00XkASgku8xgYBG1lRUVMJtMAyFOT4LClijdsNRgQBBfwWYgrP8oHPGZ74OvSkJ2bj5SU1KRmZlpV5YjHAru0SNE+LuisdQdjaVrcK10DXuvCP8AXdSGG4WH++qrr9jvTz97Fg1XGxgR4eG4c/v21xLdSyO4sTLKluJC+QQU2k1RtpGRkd8mvLy8vnPq1Knvenl5fY8myBcuXPgDYtKkST947733fkjRDDt37vzxvn37frJ79+6f7tix4z83b978i40bN/5y1apVv+LxeL9ZvGDB6/Pmzfv9AheXSbwlSzanpaT2cgXgCJoxEPIFqK6qwplwMc4arg4MnVgFZ/V0tC86oxQqbcxAqDhNxnPLcyi4QTkN1EvNz8nEUe/9yD6fyjh+1Avn01PZjEN+Xh7u3hnk4RwIjoZsIsIjWDQzCZTIzclBWEjoN1twL9JmzZr165MnT16iRQ65QuDCRv4Tk1gvlkLTRbEZ1l6sXTJPH85VNOF0uAjXrl1DJCXr3BqarMOFeqnR2mjc7+vD/b77aDG3wOfwEdZ5USmUUCmViJLJmFiKCguRef48ayterL4A8vTU3qRwKvLmNigtcmB/YRF7Jfz9/Iaca9tP5ziCquKXYvJ+opiHh8cPduzYIaLIEK4QHEHnSSUSVFVUIShMhuKB6OLBHYo+FDXcRWCIGA0NjRCLxaz645ZlIygwEMFBQfhs+w58tm0H/sRet1u3t9ProPfbtmPFR8ux5dNN2P/5Fyz+TyGXs7YjeTXKu2W0tqG9tQ3xcXpcrq2DQhaFVnML2zdwTlsb+8yuXbsQERaGiLBwRA6Ctv+yew+ynYIbe+PxeKsSExO7RxP/xqpYoZCtXxLKlyGpsNauQ2Ft1/UiVKpDaZkR8QnxyMt1vMITRbPQVNlooU5Ai8kEjUYDen5FcVERpTfisNcheHt5wfvQIXgf8sahQ4dwcP8BHPLywoH9++HNjnuzY9ZzDmHvnj2szTucOavUcbTZs2f/MiAgoPLWrVt2orDD0oPkpCRkZKTj7Nl08DXJwwwUP4A8MRuJiWksoJGW/B+NqJ8EVevtbW0s694muP2HPbHyE1es9HgfKzzexypi0/vY/PlSrGavS7B2y/v4ZM9SrNq0ECs95mOVx0J85D4X8YlxXJ0NmFNw42wUKr5169awysrKR9wb7QhbFXupphYnQqUorO/kVLHW15SiOkQIo3Ct4RoEQgFG024cDuqVk+Aoa80mOO8zW7Hu2Ftw95uCtcenYe3xqVh/chqO532ADcFT4J/rCo+wt+Cbshgbg/+IdX5TscH/Hbj7TIcyVszV2YA5BfecjLd48bK42Nh75Mm4N5wLDRSLhELU1FxCpFiO+IHgzsdtOnotqL2JwBAhzKYWFh5lXWDHvryRIA93vbUNMTbBFRfDO2QL1h97C+v8JmPd8WlYd3wKNpycBn8muMlMcJ+GvoWjA4Kbgo3+M+F+dDpUMU7BvRQ2e/bsX/j6+pbd6Oiwu+mOSE5ORkZ6Os5n5rCsMcryp9B5W9QJe2224FSkHBcv1bChEBILt5yRoGVmybtRG4zWIwkNCcVnh1dg/bHpTEgkOPfjU/sF54r1JLg8V2wKnQEfJrgZcPebivVOwb18RuN/mzw8gsrKykZVxdIsA0Xr1l+5jKAQMfJqr9u162iQWBidinPns1GQn48EfQJrE3LLGo7uri50tF9nQyXUA6Vhkv2nPmVVKgnO3Sa44KkIYIKbgoDchczDHUlZjA3B0/sF9w7W+rwFVYyIq7MBcwruBdmiRYtc1Wp152ga/NQ+o+SbupoaiKPUiHYY3PkAcVnlkCm1LEdBIhKPOlnHxuBOwz5/D7jtngq3PZOwdO8bcNs7BasOTsZehQuWe0/CHtVcLD88CZ6C97Hii6ng7X0DK/a+hWW7JkMZLeHqbMCcgnuB5uLi8h/e3t75lGvAvfmOoCkumlqihXNCJTpWnVrnlB+LL6u6BcFhApZcTUGdZrPZrpzhGCy4xqYGVFVVMiqry1nUS0pqMtb6TsWfo2Zhp+JdrN33HiqrKvrPq0I1nVtVwXIohjOn4F6w0XTbxo0bjxUXFz/kCsARNKFPA79NjU0suDPrQmv/POxj0RkauxAQKmY9WJVKzXJNueU4ggZ7qc2oiJKjqrKSBYPaXonklCSs8Z6KP4nexi7R23Df7YLKivIh51RWVrDt4aAeOHWInIJ7wTZv3jwXuVzeMdJcKTFQxdbWQqmOhiq10C7UiUQYJtejsLiUeRSasuKWw4VmCWimobamBnU1tUPIOnceB774Ap8f2gWXdb/BwjXTEBjkC++Dh1BcWIi6S9zP0DaXWnZegj7eKbiXwebOnftvXgcPZtGjNblicIQtwsVQVo5goQalTd39j/e0ejzqxapTixATm4Da2hrIZVFfO1nHxpnTp7H9s0/h5vl7uPtOwzrfqViy6U2cOOEPoUhkd/6ToMx+p+BeEqPIFnd3d6+CgoKvuDfKEeQ1xCIxWs1mBIcKcb6iaZCnI6/3AGmGqwiLpLzUNtauozVEmpubRwUlbFN7kBKqj0V4wi9/AfwL3odfwXwcz1wEdawMKuWg+EOLBdnZuRBKlRBHaSBXaNDOCSIlwbm5uf0v97c77QXaggUL3pFKpW3dXSNXsdRIF4slbG1hbWw8ZAnZ/cvNPhYePboz8IwQrS1tLGqjIL+gn/xhobClhPgEJCclwufIEezyWQP/wnnwL5iPABJd1kJ4+36BI4cPIysrG9WVVQjnS5BYUMP+NlHceBfHz4jQ2vrYazsF95Iapfx9/vnnaeRpuCJzBFWvZ1NTWJDniUgFShvvWdtzts6EuQdhsjiEi6MRLtYiYhDhEm3/Pk0/WgSeiqRnUMDnmDeOHTsMt09mY1vkjAG2hE7HmnVuOHrsMFtYe8Wqj5FUXMdJh+yDockCiexx2L9TcC+xURW7ZvXqvdnZ2V9yBeaIuto6VsVeb2vHqXAR0kqvDGnTPW7j9Xcu7LDlzz6AKr0Up06fxMo907FX4oJVB9/EllMz8Yn/dCw/MAWeYhcs8/w9vlDNh8vySeCLZWw5i8HlM8G1PEAEyzOxpm06BfcKmIuLy1sCgcDk6BGbXCgjnwZ+a2trkZCUAnFMf3AnR2xPgqpDzdkSCMTh2C1dgHWBU/GZ6F1sj5gOj1PTsVs5B2t8/4B9sfPA8/o9th6dC4Um2oHgrJHLwkErkToF94oYj8f78Z49exIo8pcrMkdQnBv1ZGvr6nEiTIKi+lsw0CqeI0BVcUnjPShTCiAS8uG66XdwP/wWPvrLJCzb8we4H30TH2z+HTadfBvz1/8a20PexUzX30Kh1sFgti7GaPOY5FHzLrUjJlbvFNyraJSj8fHHH/8pMzPzAVdgjqBng9GY3Y2OG0hMTEFigpUEIpHDwP5khkgoQWhoCAL9jmP/ocPw8TuBo35BOOIXBN/jwfDxC8JRv0D4+AXCLyAYR/xOo9zUh3Kb6Mx9KL56G8dORrBVAZyCe4Vt9uzZk8PDw6+NZlyNqljKZ4jWatn0FaEdBttxnTaanU/DIfTQE3lyHhMQiamcHnzXn+RDr/LkAohkakQpdJAodJAqoyFV6iBT6ZjXu8XJwXAK7hU1WiPO09NTS0+84YpsLLnW0IColAIHOcNWQhWJLF2Q+7nhoDVXnAO/r7AtX758U1pa2n3ujR0rrjVcZV6MKzQbtND2ndujW1qD0hhLSgzQ51a3lpl6m4zm3kaDuS+p3Hz/aEVzz0Gjmej1KWvuyTG29CWUmXr9jeZurwpT9+YyU9dao7l3q7G5x8to6hUaTH3FxqZuGW1XtlhWl5u73zaauv9Y1dY9o7qt74/lJstHBnPvMaOpN7vMZNlV3t738xf50L0JZbNmzXr9zJkzl2kQmHuTn5WGhqtQPEFwUUl5rEc89HM0BOKY4hIDEgtrBgWSjvDgPYqIsUufHJo8bh3otlX1tI/eP2BDMgOfpVUNzL1fGlp6ArnXz2lPYbTw9K5du2JoUp8rmmeBBEcebuiA7uMbbTD34kSoGOczs3H9egcLLrjT2Tks+Xn5SCqssRsTHB+GNgOswuyN4l47pz2DufHc1iUlJfVwhfO0dFy/jgh1qt1yFI+xeqJ0w1V2Hj3M+IxMPyynpHEoqB/l033GlP6FIZ2CG3ub9+67vzp1Iujikx69NFp6LRYERUQ5iDIezNCsMuvrk+B+/nngFNy42k4e7/vbt28XXqiuHlX+xPD0Ijk5FSkll/vXQOHeyFcFp+Ceiy1bunSFPk7fNZqnKj4JoVjOHiflqC03/nA95JMY7nPWbafgnoPNmTPnv/38/Cpu3nzyQjgjce5cJktLlMSdR0pJPVJLryC19CrSxgAqJ9VwlZWbVFT3mMJB723b3H2OjnPOS+7fjs0s13Ovj9PGwehJhVu2bAmpqKh46iqWHmpMjyMwNZuQk5PHgi2zxpDs7BxkZedgyZJlimkz3pk+bcZ7Y87MOfOmca+N08bRPvzwwyUxMTF3RpOi+KLYunXrMe73dtorbHPnzv0vX1/fUnoGF/dmjy2jFfXQ87Zt2XKc+52d9oobPf6cVgEwlBqeuoodL7Y4BTdxzdXVdaFmlKsAPC+cgpvgNnPmzJ8dOnBAL+DzC20I+YJCAYNfyO9HIHi8b2QE/WU83mcrg7vfdj4rXyAodHNz+5S+V2pq6ncJ7vd9Vvt/qz2REaXX6REAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img36"
                        ></image>
                        <clipPath id="clip37">
                            <rect x="0" y="0" width="1181100" height="575408" />
                        </clipPath>
                        <clipPath id="clip38">
                            <rect x="0" y="0" width="85725" height="190500" />
                        </clipPath>
                        <clipPath id="clip39">
                            <rect x="0" y="0" width="81642.9" height="190500" />
                        </clipPath>
                        <clipPath id="clip40">
                            <rect x="0" y="0" width="85725" height="200025" />
                        </clipPath>
                        <clipPath id="clip41">
                            <rect x="-0.0078125" y="0" width="85725" height="200025" />
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
                            d="M0 0 522.518 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 624.018 215.5)"
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
                            transform="translate(538.354 118)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(546.354 118)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(549.854 118)"
                        >
                            22
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(560.521 118)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(564.021 118)"
                        >
                            23
                        </text>
                        <path
                            d="M1016.94 394.017 101.5 393.5"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 519.142 3.3432"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1226.64 213.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(718.201 116)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(726.201 116)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(729.701 116)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(740.368 116)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(743.868 116)"
                        >
                            Д
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(742.217 254)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(749.384 254)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(752.884 254)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(764.717 254)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(768.217 254)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(431.349 252)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(438.516 252)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(442.016 252)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(453.849 252)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(457.349 252)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(592.196 295)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(599.363 295)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(602.863 295)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(554.196 308)"
                        >
                            110/35/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(594.863 308)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(555.196 321)"
                        >
                            20 000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(587.196 321)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(530.53 334)"
                        >
                            ТДТГ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(559.03 334)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(562.53 334)"
                        >
                            20000/110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(776.232 525)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(785.398 525)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(788.898 525)"
                        >
                            РП
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(803.732 525)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(807.232 525)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(950.542 526)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(959.708 526)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(963.208 526)"
                        >
                            Заур
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="17"
                            transform="translate(542.297 15)"
                        >
                            Қуйи Бўзсув
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="17"
                            transform="translate(644.737 15)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="17"
                            transform="translate(654.903 15)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="17"
                            transform="translate(667.903 15)"
                        >
                            (ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="17"
                            transform="translate(709.07 15)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="17"
                            transform="translate(714.903 15)"
                        >
                            23)
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(936.593 117)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(944.593 117)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(948.093 117)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(958.76 117)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(962.26 117)"
                        >
                            ПТФ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(810.747 426)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(817.914 426)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(821.414 426)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(830.581 426)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(834.081 426)"
                        >
                            РП
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(848.914 426)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(852.414 426)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(983.586 425)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(990.753 425)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(994.253 425)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1003.42 425)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1006.92 425)"
                        >
                            Заур
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(377.153 120)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(385.153 120)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(388.653 120)"
                        >
                            19
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(399.32 120)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(402.82 120)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(263.744 118)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(271.744 118)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(275.244 118)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(285.911 118)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(289.411 118)"
                        >
                            Алмазар
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(835.734 117)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(843.734 117)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(847.234 117)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(857.901 117)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(861.401 117)"
                        >
                            Пахта
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(857.049 525)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(866.216 525)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(869.716 525)"
                        >
                            Поселка
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(898.238 425)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(905.404 425)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(908.904 425)"
                        >
                            Ф
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(918.071 425)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(921.571 425)"
                        >
                            Пос
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(412.505 192)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(419.672 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(423.172 192)"
                        >
                            19
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(433.838 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(437.338 192)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(314.637 192)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(321.804 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(325.304 192)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(335.97 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(339.47 192)"
                        >
                            А
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(573.071 191)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(580.238 191)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(583.738 191)"
                        >
                            22
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(594.405 191)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(597.905 191)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(752.519 191)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(759.686 191)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(763.186 191)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(773.852 191)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(777.352 191)"
                        >
                            Д
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(881.83 192)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(888.997 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(892.497 192)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(903.163 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(906.663 192)"
                        >
                            П
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(980.285 192)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(987.452 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(990.952 192)"
                        >
                            23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1001.62 192)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1005.12 192)"
                        >
                            ПТФ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1171.23 229)"
                        >
                            СШ 35 кВ
                        </text>
                        <path
                            d="M735.739 216.974 735.5 197.5"
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
                            transform="matrix(1 0 0 -1 733.5 218.5)"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect id="c1542"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 726.5 197.5)"
                            />
                        </a>
                        <path d="M735.722 178.598 735.5 125.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M734.222 178.605 734.025 131.506 737.025 131.494 737.222 178.592ZM735.525 131.5 731.038 134.519 735.5 125.5 740.038 134.481Z"
                            fill="#663300"
                        />
                        <path
                            d="M693.49 70.4616 777.089 70.4616 777.089 84.0528 693.49 84.0528Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M693.49 84.0528 777.089 84.0528 777.089 97.644 693.49 97.644Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M692.823 84.0528 777.756 84.0528"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M693.49 69.795 693.49 98.3107"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M777.089 69.795 777.089 98.3107"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M692.823 70.4616 777.756 70.4616"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M692.823 97.644 777.756 97.644"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1542Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(697.269 80)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1542Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(697.269 94)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip1)"
                            transform="matrix(0.000104987 0 0 0.000104987 770 71)"
                        >
                            <g clip-path="url(#clip3)" transform="matrix(1.16667 0 0 1 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip4)"
                            transform="matrix(0.000104987 0 0 0.000104987 771 85)"
                        >
                            <g clip-path="url(#clip6)" transform="matrix(1 0 0 1.02857 -0.5 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M864.739 216.974 864.5 197.5"
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
                            transform="matrix(1 0 0 -1 862.5 218.5)"
                        />
                        <a href="<?= $urlSwitch5 ?>">
                            <rect id="c1588"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 855.5 197.5)"
                            />
                        </a>
                        <path d="M864.722 178.598 864.5 125.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M863.222 178.605 863.025 131.506 866.025 131.494 866.222 178.592ZM864.525 131.5 860.038 134.519 864.5 125.5 869.038 134.481Z"
                            fill="#663300"
                        />
                        <path
                            d="M822.57 70.5595 906.17 70.5595 906.17 84.1507 822.57 84.1507Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M822.57 84.1507 906.17 84.1507 906.17 97.7418 822.57 97.7418Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M821.903 84.1507 906.836 84.1507"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M822.57 69.8928 822.57 98.4085"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M906.17 69.8928 906.17 98.4085"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M821.903 70.5595 906.836 70.5595"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M821.903 97.7418 906.836 97.7418"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1588Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(826.349 81)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1588Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(826.349 94)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip7)"
                            transform="matrix(0.000104987 0 0 0.000104987 900 71)"
                        >
                            <g clip-path="url(#clip8)" transform="matrix(1 0 0 1.02857 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip9)"
                            transform="matrix(0.000104987 0 0 0.000104987 900 85)"
                        >
                            <g clip-path="url(#clip10)" transform="matrix(1 0 0 1.02857 -1 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M962.739 216.974 962.5 197.5"
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
                            transform="matrix(1 0 0 -1 960.5 218.5)"
                        />
                        <a href="<?= $urlSwitch6 ?>">
                            <rect id="c1566"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 953.5 197.5)"
                            />
                        </a>
                        <path d="M962.722 178.598 962.5 125.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M961.222 178.605 961.025 131.506 964.025 131.494 964.222 178.592ZM962.525 131.5 958.038 134.519 962.5 125.5 967.038 134.481Z"
                            fill="#663300"
                        />
                        <path
                            d="M920.435 70.6577 1004.03 70.6577 1004.03 84.2489 920.435 84.2489Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M920.435 84.2489 1004.03 84.2489 1004.03 97.8401 920.435 97.8401Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M919.769 84.2489 1004.7 84.2489"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M920.435 69.9911 920.435 98.5068"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1004.03 69.9911 1004.03 98.5068"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M919.769 70.6577 1004.7 70.6577"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M919.769 97.8401 1004.7 97.8401"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1566Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(924.215 81)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1566Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(924.215 94)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip11)"
                            transform="matrix(0.000104987 0 0 0.000104987 997 71)"
                        >
                            <g clip-path="url(#clip12)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip13)"
                            transform="matrix(0.000104987 0 0 0.000104987 998 85)"
                        >
                            <g clip-path="url(#clip14)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(102.376 227)"
                        >
                            СШ 110 кВ
                        </text>
                        <path
                            d="M297.739 216.974 297.5 197.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 295.5 218.5)"
                        />
                        <a href="<?= $urlSwitch1 ?>">
                            <rect id="c1611"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 288.5 197.5)"
                            />
                        </a>
                        <path d="M297.722 178.598 297.5 125.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M296.222 178.605 296.025 131.506 299.025 131.494 299.222 178.592ZM297.525 131.5 293.038 134.519 297.5 125.5 302.038 134.481Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M254.687 69.7219 338.287 69.7219 338.287 83.3131 254.687 83.3131Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M254.687 83.3131 338.287 83.3131 338.287 96.9043 254.687 96.9043Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M254.021 83.3131 338.954 83.3131"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M254.687 69.0552 254.687 97.5709"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M338.287 69.0552 338.287 97.5709"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M254.021 69.7219 338.954 69.7219"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M254.021 96.9043 338.954 96.9043"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1611Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(258.467 80)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1611Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(258.467 93)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip15)"
                            transform="matrix(0.000104987 0 0 0.000104987 332 70)"
                        >
                            <g clip-path="url(#clip16)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip17)"
                            transform="matrix(0.000104987 0 0 0.000104987 332 84)"
                        >
                            <g clip-path="url(#clip18)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M101.366 197.54 179.396 197.54 179.396 210.34 101.366 210.34Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M101.366 196.873 101.366 211.007"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M179.396 196.873 179.396 211.007"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M100.699 197.54 180.062 197.54"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M100.699 210.34 180.062 210.34"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1669"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(105.145 208)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M395.739 216.974 395.5 197.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 393.5 218.5)"
                        />
                        <a href="<?= $urlSwitch2 ?>">
                            <rect id="c1634"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 386.5 197.5)"
                            />
                        </a>
                        <path d="M395.722 178.598 395.5 125.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M394.222 178.605 394.025 131.506 397.025 131.494 397.222 178.592ZM395.525 131.5 391.038 134.519 395.5 125.5 400.038 134.481Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M353.142 69.8197 436.741 69.8197 436.741 83.4109 353.142 83.4109Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M353.142 83.4109 436.741 83.4109 436.741 97.0021 353.142 97.0021Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M352.475 83.4109 437.408 83.4109"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M353.142 69.1531 353.142 97.6688"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M436.741 69.1531 436.741 97.6688"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M352.475 69.8197 437.408 69.8197"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M352.475 97.0021 437.408 97.0021"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1634Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(356.921 80)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1634Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(356.921 93)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip19)"
                            transform="matrix(0.000104987 0 0 0.000104987 430 70)"
                        >
                            <g
                                clip-path="url(#clip20)"
                                transform="matrix(1 0 0 1.02857 -0.25 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip21)"
                            transform="matrix(0.000104987 0 0 0.000104987 431 84)"
                        >
                            <g
                                clip-path="url(#clip22)"
                                transform="matrix(1 0 0 1.02857 -0.25 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M556.739 216.974 556.5 197.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 2C-3.18283e-16 0.89543 1.11929 -2.54627e-16 2.5 -5.09253e-16 3.88071-1.01851e-15 5 0.89543 5 2 5 3.10457 3.88071 4 2.5 4 1.11929 4-1.59142e-15 3.10457 0 2Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 554.5 218.5)"
                        />
                        <a href="<?= $urlSwitch3 ?>">
                            <rect id="c1657"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 547.5 197.5)"
                            />
                        </a>
                        <path d="M556.722 178.598 556.5 125.5" fill="#FF0000" fill-rule="evenodd" />
                        <path
                            d="M555.222 178.605 555.025 131.506 558.025 131.494 558.222 178.592ZM556.525 131.5 552.038 134.519 556.5 125.5 561.038 134.481Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M514.026 69.9174 597.625 69.9174 597.625 83.5086 514.026 83.5086Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M514.026 83.5086 597.625 83.5086 597.625 97.0997 514.026 97.0997Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.359 83.5086 598.292 83.5086"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M514.026 69.2507 514.026 97.7664"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M597.625 69.2507 597.625 97.7664"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.359 69.9174 598.292 69.9174"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.359 97.0997 598.292 97.0997"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1657Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(517.805 80)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1657Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(517.805 94)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip23)"
                            transform="matrix(0.000104987 0 0 0.000104987 591 71)"
                        >
                            <g clip-path="url(#clip24)" transform="matrix(1.06061 0 0 1 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1151.37 1151.37)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip25)"
                            transform="matrix(0.000104987 0 0 0.000104987 591 84)"
                        >
                            <g
                                clip-path="url(#clip26)"
                                transform="matrix(1.16667 0 0 1 -0.5 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <a href="<?= $urlSwitch9 ?>">
                            <rect id="c1496"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 631.5 373.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(658.682 368)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(665.849 368)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(669.349 368)"
                        >
                            Т1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(681.849 368)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(685.349 368)"
                        >
                            6
                        </text>
                        <path
                            d="M0 0 0.00178478 16.563"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 640.5 355.063)"
                        />
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c14961"
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(-1 1.22465e-16 1.22465e-16 1 643.5 286.5)"
                            />
                            <path id="c14963"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(-1 1.22465e-16 1.22465e-16 1 655.5 308.5)"
                            />
                            <path id="c14962"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(-1 1.22465e-16 1.22465e-16 1 667.5 287.5)"
                            />
                        </a>
                        <path
                            d="M652.5 287.597 652.5 273.549 791.154 273.549 791.154 259.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 13.453 0 13.453 138.614 26.9059 138.614"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1.83697e-16 -1 -1 1.83697e-16 628.115 286.406)"
                        />
                        <a href="<?= $urlSwitch7 ?>">
                            <rect id="c0"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 480.5 258.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.0710761 21.2639"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 489.571 218.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 487.5 218.5)"
                        />
                        <a href="<?= $urlSwitch8 ?>">
                            <rect id="c1519"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 782.5 259.5)"
                            />
                        </a>
                        <path
                            d="M0 0 0.0710761 21.2639"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 791.571 219.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 789.5 218.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 638.5 396.5)"
                        />
                        <path
                            d="M640.779 391.84 640.5 373.5"
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
                            transform="translate(1021.2 403)"
                        >
                            СШ 6 кВ
                        </text>
                        <path
                            d="M0 0 0.170289 14.884"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 967.67 397.5)"
                        />
                        <a href="<?= $urlSwitch16 ?>">
                            <rect id="c1450"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 958.5 430.5)"
                            />
                        </a>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 964.5 397.5)"
                        />
                        <path
                            d="M969 430.5 969 484.596 966 484.596 966 430.5ZM974.046 476.352 967.5 487.573 960.954 476.352C960.537 475.636 960.779 474.718 961.494 474.3 962.21 473.883 963.128 474.124 963.546 474.84L968.796 483.84 966.204 483.84 971.454 474.84C971.872 474.124 972.79 473.883 973.506 474.3 974.221 474.718 974.463 475.636 974.046 476.352Z"
                            fill="#006600"
                        />
                        <path
                            d="M932.396 496.819 1006.04 496.819 1006.04 510.552 932.396 510.552Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M932.396 496.152 932.396 511.218"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1006.04 496.152 1006.04 511.218"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M931.73 496.819 1006.71 496.819"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M931.73 510.552 1006.71 510.552"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1450"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(936.176 507)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M0 0 0.170289 14.884"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 881.67 397.5)"
                        />
                        <a href="<?= $urlSwitch15 ?>">
                            <rect id="c1427"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 872.5 431.5)"
                            />
                        </a>
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 879.5 397.5)"
                        />
                        <path
                            d="M883 431.5 883 485.596 880 485.596 880 431.5ZM888.046 477.352 881.5 488.573 874.954 477.352C874.537 476.636 874.779 475.718 875.494 475.3 876.21 474.883 877.128 475.124 877.546 475.84L882.796 484.84 880.204 484.84 885.454 475.84C885.872 475.124 886.79 474.883 887.506 475.3 888.221 475.718 888.463 476.636 888.046 477.352Z"
                            fill="#006600"
                        />
                        <path
                            d="M846.507 496.916 920.154 496.916 920.154 510.65 846.507 510.65Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M846.507 496.25 846.507 511.316"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M920.154 496.25 920.154 511.316"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M845.84 496.916 920.82 496.916"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M845.84 510.65 920.82 510.65"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1427"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(850.286 507)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M0 0 0.170289 14.884"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 795.67 397.5)"
                        />
                        <a href="<?= $urlSwitch14 ?>">
                            <rect id="c1473"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 786.5 431.5)"
                            />
                        </a>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 793.5 397.5)"
                        />
                        <path
                            d="M797 431.5 797 485.596 794 485.596 794 431.5ZM802.046 477.352 795.5 488.573 788.954 477.352C788.537 476.636 788.779 475.718 789.494 475.3 790.21 474.883 791.128 475.124 791.546 475.84L796.796 484.84 794.204 484.84 799.454 475.84C799.872 475.124 800.79 474.883 801.506 475.3 802.221 475.718 802.463 476.636 802.046 477.352Z"
                            fill="#006600"
                        />
                        <path
                            d="M760.617 497.014 834.264 497.014 834.264 510.748 760.617 510.748Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M760.617 496.348 760.617 511.414"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M834.264 496.348 834.264 511.414"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M759.95 497.014 834.93 497.014"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M759.95 510.748 834.93 510.748"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1473"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(764.396 507)"
                            >
                                Р
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(701.646 474)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(716.479 474)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(719.979 474)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(701.646 487)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(725.979 487)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(701.646 500)"
                        >
                            160
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(720.312 500)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(701.646 513)"
                        >
                            ТМ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(718.812 513)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(722.312 513)"
                        >
                            160/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(696.5 434)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(703.667 434)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(707.167 434)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(722 434)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(725.5 434)"
                        >
                            2
                        </text>
                        <path
                            d="M0 0 0.299213 63.7339"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 679.5 461.234)"
                        />
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 677.5 397.5)"
                        />
                        <a href="<?= $urlSwitch13 ?>">
                            <rect id="c1397"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 670.5 440.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c13972"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 662.5 519.5)"
                            />
                            <path id="c13971"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 662.5 494.5)"
                            />
                        </a>
                        <path
                            d="M681 519.495 681.126 558.518 678.126 558.528 678 519.505ZM686.145 550.258 679.635 561.5 673.053 550.3C672.634 549.586 672.872 548.667 673.587 548.247 674.301 547.827 675.22 548.066 675.64 548.78L680.919 557.763 678.328 557.771 683.549 548.755C683.964 548.038 684.881 547.793 685.598 548.208 686.315 548.623 686.56 549.541 686.145 550.258Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M641.752 568.526 715.399 568.526 715.399 582.259 641.752 582.259Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M641.752 567.859 641.752 582.926"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M715.399 567.859 715.399 582.926"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M641.086 568.526 716.066 568.526"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M641.086 582.259 716.066 582.259"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1397"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(645.532 579)"
                            >
                                Р
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(590.431 474)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(605.264 474)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(608.764 474)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(590.431 487)"
                        >
                            6/0,4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(614.764 487)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(590.431 500)"
                        >
                            180
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(609.097 500)"
                        >
                            кВА
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(590.431 513)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(605.264 513)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(608.764 513)"
                        >
                            180/6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(585.285 434)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(592.452 434)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(595.952 434)"
                        >
                            ТС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(610.785 434)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(614.285 434)"
                        >
                            1
                        </text>
                        <path
                            d="M0 0 0.299213 64.4005"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 568.5 461.901)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 565.5 397.5)"
                        />
                        <a href="<?= $urlSwitch12 ?>">
                            <rect id="c1357"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 559.5 440.5)"
                            />
                        </a>
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c13572"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 551.5 519.5)"
                            />
                            <path id="c13571"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 551.5 494.5)"
                            />
                        </a>
                        <path
                            d="M570 519.495 570.126 558.518 567.126 558.528 567 519.505ZM575.145 550.258 568.635 561.5 562.053 550.3C561.634 549.586 561.872 548.667 562.587 548.247 563.301 547.827 564.22 548.066 564.64 548.78L569.919 557.763 567.328 557.771 572.549 548.755C572.964 548.038 573.881 547.793 574.598 548.208 575.315 548.623 575.56 549.541 575.145 550.258Z"
                            fill="#7F7F7F"
                        />
                        <path
                            d="M530.537 568.624 604.184 568.624 604.184 582.357 530.537 582.357Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M530.537 567.958 530.537 583.024"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M604.184 567.958 604.184 583.024"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M529.871 568.624 604.851 568.624"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M529.871 582.357 604.851 582.357"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1357"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(534.317 579)"
                            >
                                Р
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(433.913 460)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(440.747 460)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(444.247 460)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(433.913 473)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(441.913 473)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(433.913 486)"
                        >
                            8,8 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(433.913 499)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(455.58 499)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(459.08 499)"
                        >
                            375/79
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(488.747 499)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(492.247 499)"
                        >
                            24
                        </text>
                        <path
                            d="M0 0 0.000104987 15.5416"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 402.5 410.042)"
                        />
                        <a href="<?= $urlSwitch11 ?>">
                            <rect id="c1324"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 393.5 429.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(418.098 423)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(425.265 423)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(428.765 423)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(435.598 423)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(439.098 423)"
                        >
                            2
                        </text>
                        <path
                            d="M402.971 451.904 402.5 429.5"
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
                            transform="matrix(1 0 0 -1 400.5 396.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(251.434 459)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(258.268 459)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(261.768 459)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(251.434 472)"
                        >
                            6
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(259.434 472)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(251.434 485)"
                        >
                            8,8 МВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(251.434 498)"
                        >
                            ВГС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(273.101 498)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(276.601 498)"
                        >
                            375/79
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(306.268 498)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(309.768 498)"
                        >
                            24
                        </text>
                        <path
                            d="M0 0 0.000104987 15.5416"
                            stroke="#006600"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 220.5 410.042)"
                        />
                        <a href="<?= $urlSwitch10 ?>">
                            <rect id="c1301"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 210.5 428.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(235.619 423)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(242.786 423)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(246.286 423)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(253.119 423)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(256.619 423)"
                        >
                            1
                        </text>
                        <path
                            d="M220.971 450.904 220.5 428.5"
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
                            transform="matrix(1 0 0 -1 217.5 396.5)"
                        />
                        <path
                            d="M807.356 237.408 890.955 237.408 890.955 250.999 807.356 250.999Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M807.356 250.999 890.955 250.999 890.955 264.59 807.356 264.59Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M806.689 250.999 891.622 250.999"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M807.356 236.741 807.356 265.257"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M890.955 236.741 890.955 265.257"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M806.689 237.408 891.622 237.408"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M806.689 264.59 891.622 264.59"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1519Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(811.135 247)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1519Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(811.135 261)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip27)"
                            transform="matrix(0.000104987 0 0 0.000104987 884 238)"
                        >
                            <g clip-path="url(#clip28)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip29)"
                            transform="matrix(0.000104987 0 0 0.000104987 885 252)"
                        >
                            <g clip-path="url(#clip30)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M541.781 350.784 625.38 350.784 625.38 364.375 541.781 364.375Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M541.781 364.375 625.38 364.375 625.38 377.966 541.781 377.966Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M541.114 364.375 626.047 364.375"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M541.781 350.117 541.781 378.633"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M625.38 350.117 625.38 378.633"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M541.114 350.784 626.047 350.784"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M541.114 377.966 626.047 377.966"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1496Plus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(545.56 361)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1496Minus"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(545.56 374)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip31)"
                            transform="matrix(0.000104987 0 0 0.000104987 619 351)"
                        >
                            <g clip-path="url(#clip32)" transform="matrix(1 0 0 1.02857 -0.5 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip33)"
                            transform="matrix(0.000104987 0 0 0.000104987 619 365)"
                        >
                            <g clip-path="url(#clip34)" transform="matrix(1 0 0 1.02857 -0.5 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1119.7 524)"
                        >
                            Гидроузел 23
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1167.86 423)"
                        >
                            ГУ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1182.52 423)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1186.02 423)"
                        >
                            23
                        </text>
                        <path
                            d="M0 0 0.170289 14.884"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1150.67 396.5)"
                        />
                        <a href="<?= $urlSwitch17 ?>">
                            <rect id="c1680"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#989898"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1141.5 429.5)"
                            />
                        </a>
                        <path
                            d="M0 2.5C-2.54627e-16 1.11929 0.89543 -3.18283e-16 2 -6.36567e-16 3.10457-1.27313e-15 4 1.11929 4 2.5 4 3.88071 3.10457 5 2 5 0.89543 5-1.27313e-15 3.88071 0 2.5Z"
                            stroke="#989898"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 1148.5 396.5)"
                        />
                        <path
                            d="M1152 429.5 1152 483.596 1149 483.596 1149 429.5ZM1157.05 475.352 1150.5 486.573 1143.95 475.352C1143.54 474.636 1143.78 473.718 1144.49 473.3 1145.21 472.883 1146.13 473.124 1146.55 473.84L1151.8 482.84 1149.2 482.84 1154.45 473.84C1154.87 473.124 1155.79 472.883 1156.51 473.3 1157.22 473.718 1157.46 474.636 1157.05 475.352Z"
                            fill="#989898"
                        />
                        <path
                            d="M1115.47 495.773 1189.11 495.773 1189.11 509.506 1115.47 509.506Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1115.47 495.106 1115.47 510.173"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1189.11 495.106 1189.11 510.173"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1114.8 495.773 1189.78 495.773"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1114.8 509.506 1189.78 509.506"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1680"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1119.25 506)"
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
                            transform="matrix(-1 0 0 1 1176.51 394.5)"
                        />
                        <path
                            d="M1.5-5.50253e-06 1.50008 22.6196-1.49992 22.6196-1.5 5.50253e-06ZM8.29768e-05 22.6196 4.50007 19.6196 0.000104987 28.6196-4.49993 19.6196Z"
                            fill="#006600"
                            transform="matrix(1 0 0 -1 1150.5 310.12)"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c16802"
                                d="M0 16.5C-2.10067e-15 7.3873 7.3873-2.10067e-15 16.5-4.20134e-15 25.6127-8.40268e-15 33 7.3873 33 16.5 33 25.6127 25.6127 33 16.5 33 7.3873 33-1.05034e-14 25.6127 0 16.5Z"
                                stroke="#7F7F7F"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1133.5 367.5)"
                            />
                            <path id="c16801"
                                d="M0 17C-2.10067e-15 7.61116 7.3873-2.16433e-15 16.5-4.32865e-15 25.6127-8.65731e-15 33 7.61116 33 17 33 26.3888 25.6127 34 16.5 34 7.3873 34-1.05034e-14 26.3888 0 17Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1133.5 343.5)"
                            />
                        </a>
                        <path
                            d="M1150.5 367.5 1150.82 391.721"
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
                            transform="translate(1170.99 342)"
                        >
                            ТП
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1186.49 342)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(1189.99 342)"
                        >
                            115
                        </text>
                        <rect
                            x="1096.5"
                            y="262.5"
                            width="165"
                            height="294"
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
                            transform="translate(1187.75 278)"
                        >
                            ГИДРОУЗЕЛ
                        </text>
                        <g
                            clip-path="url(#clip35)"
                            transform="matrix(0.000104987 0 0 0.000104987 1060 46)"
                        >
                            <g clip-path="url(#clip37)" transform="matrix(1 0 0 1.00976 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img36"
                                    transform="scale(7571.15 7571.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1081.17 42.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1180.5 96.1712)"
                        />
                        <path
                            d="M1177.55 109.031 1169.86 100.654 1170.35 100.203 1178.04 108.58ZM1170.11 100.429 1169.95 104.197 1166.5 96.5001 1173.87 100.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1187.95 108.889 1178.5 108.5"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.2 28.4523 1179.57 28.4523 1179.57 41.2523 1085.2 41.2523Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1085.2 27.7856 1085.2 41.9189"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.57 27.7856 1179.57 41.9189"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1084.53 28.4523 1180.23 28.4523"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1084.53 41.2523 1180.23 41.2523"
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
                                transform="translate(1088.98 38)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1099.48 38)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1080.5 42.5001 1099.69 42.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1187.69 95.536 1275.35 95.536 1275.35 108.336 1187.69 108.336Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1187.69 94.8693 1187.69 109.003"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1275.35 94.8693 1275.35 109.003"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1187.02 95.536 1276.01 95.536"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1187.02 108.336 1276.01 108.336"
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
                                transform="translate(1191.47 106)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1201.97 106)"
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
                            transform="matrix(1 0 0 -1 1077.5 50.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1187.99 68.5001)"
                        />
                        <path
                            d="M1187.5 68.5001 1206.69 68.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1191.89 55.3524 1265.09 55.3524 1265.09 68.1524 1191.89 68.1524Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1191.89 54.6858 1191.89 68.8191"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1265.09 54.6858 1265.09 68.8191"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1191.22 55.3524 1265.75 55.3524"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1191.22 68.1524 1265.75 68.1524"
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
                                transform="translate(1195.67 65)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1163.5 96.5001 1186.21 96.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1148.6 197.425 1226.63 197.425 1226.63 210.225 1148.6 210.225Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1148.6 196.758 1148.6 210.891"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1226.63 196.758 1226.63 210.891"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1147.93 197.425 1227.3 197.425"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1147.93 210.225 1227.3 210.225"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1531"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1152.38 207)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M973.986 378.07 1052.02 378.07 1052.02 390.87 973.986 390.87Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M973.986 377.403 973.986 391.537"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1052.02 377.403 1052.02 391.537"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M973.319 378.07 1052.68 378.07"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M973.319 390.87 1052.68 390.87"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1508"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(977.766 388)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M343.218 505.643 466.268 505.643 466.268 518.443 343.218 518.443Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.218 518.443 466.268 518.443 466.268 531.243 343.218 531.243Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.218 531.243 466.268 531.243 466.268 544.043 343.218 544.043Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.218 544.043 466.268 544.043 466.268 556.843 343.218 556.843Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.218 556.843 466.268 556.843 466.268 569.643 343.218 569.643Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.218 569.643 466.268 569.643 466.268 582.443 343.218 582.443Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.551 518.443 466.935 518.443"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.551 531.243 466.935 531.243"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.551 544.043 466.935 544.043"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.551 556.843 466.935 556.843"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.551 569.643 466.935 569.643"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M343.218 504.976 343.218 583.109"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M466.268 504.976 466.268 583.109"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.551 505.643 466.935 505.643"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M342.551 582.443 466.935 582.443"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1324"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.997 516)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1325"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.997 528)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a1324"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.997 541)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k1324"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.997 554)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n1324"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.997 567)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w1324" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(346.997 580)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M160.739 505.152 283.789 505.152 283.789 517.952 160.739 517.952Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.739 517.952 283.789 517.952 283.789 530.752 160.739 530.752Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.739 530.752 283.789 530.752 283.789 543.552 160.739 543.552Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.739 543.552 283.789 543.552 283.789 556.352 160.739 556.352Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.739 556.352 283.789 556.352 283.789 569.152 160.739 569.152Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.739 569.152 283.789 569.152 283.789 581.952 160.739 581.952Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.072 517.952 284.456 517.952"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.072 530.752 284.456 530.752"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.072 543.552 284.456 543.552"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.072 556.352 284.456 556.352"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.072 569.152 284.456 569.152"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.739 504.485 160.739 582.619"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M283.789 504.485 283.789 582.619"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.072 505.152 284.456 505.152"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M160.072 581.952 284.456 581.952"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g1301"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(164.518 515)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g1302"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(164.518 528)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a1301"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(164.518 541)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k1301"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(164.518 554)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n1301"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(164.518 566)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w1301" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(164.518 579)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M8.50005 552C8.50005 546.753 12.7533 542.5 18.0001 542.5 23.2468 542.5 27.5001 546.753 27.5001 552 27.5001 557.247 23.2468 561.5 18.0001 561.5 12.7533 561.5 8.50005 557.247 8.50005 552Z"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M8.50005 574C8.50005 568.753 12.7533 564.5 18.0001 564.5 23.2468 564.5 27.5001 568.753 27.5001 574 27.5001 579.247 23.2468 583.5 18.0001 583.5 12.7533 583.5 8.50005 579.247 8.50005 574Z"
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
                            transform="translate(33.2016 554)"
                        >
                            в работе
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.1188 576)"
                        >
                            в резерве
                        </text>
                        <path
                            d="M8 530.5C8 525.253 12.2533 521 17.5 521 22.7467 521 27 525.253 27 530.5 27 535.747 22.7467 540 17.5 540 12.2533 540 8 535.747 8 530.5Z"
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
                            transform="translate(33.1188 532)"
                        >
                            в ремонте
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.3837 509)"
                        >
                            отдача
                        </text>
                        <text
                            fill="#8A94AD"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(33.1189 486)"
                        >
                            прием
                        </text>
                        <g
                            clip-path="url(#clip38)"
                            transform="matrix(0.000104987 0 0 0.000104987 13 474)"
                        >
                            <g clip-path="url(#clip39)" transform="matrix(1.05 0 0 1 -0.0078125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img2"
                                    transform="scale(2093.41 2093.41)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip40)"
                            transform="matrix(0.000104987 0 0 0.000104987 13 496)"
                        >
                            <g clip-path="url(#clip41)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img5"
                                    transform="matrix(2198.08 0 0 2198.08 -0.0078125 0)"
                                ></use>
                            </g>
                        </g>
                        <path id="c13011"
                            d="M194.5 476C194.5 462.469 205.469 451.5 219 451.5 232.531 451.5 243.5 462.469 243.5 476 243.5 489.531 232.531 500.5 219 500.5 205.469 500.5 194.5 489.531 194.5 476Z"
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
                                            transform="matrix(1 0 0 1.01205 218.193 469.933)"
                                        />
                                        <path
                                            d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                            transform="matrix(1 0 0 1.01205 218.654 456.089)"
                                        />
                                        <path
                                            d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                            transform="matrix(1 0 0 1.01205 206.05 471.878)"
                                        />
                                        <path
                                            d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                            transform="matrix(1 0 0 1.01205 226.108 480.433)"
                                        />
                                        <path
                                            d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                            transform="matrix(1 0 0 1.01205 209.278 461.067)"
                                        />
                                        <path
                                            d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                            transform="matrix(1 0 0 1.01205 212.736 482.533)"
                                        />
                                        <path
                                            d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                            transform="matrix(1 0 0 1.01205 235.561 466.044)"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c13241"
                            d="M380.5 476C380.5 462.469 391.469 451.5 405 451.5 418.531 451.5 429.5 462.469 429.5 476 429.5 489.531 418.531 500.5 405 500.5 391.469 500.5 380.5 489.531 380.5 476Z"
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
                                            d="M404.689 469.933 405.622 469.933 406.944 470.167 408.033 470.633 408.889 471.178 409.9 472.189 410.522 473.122 410.989 474.367 411.144 475.067 411.144 476.933 410.833 478.1 410.211 479.344 409.589 480.122 409.044 480.667 407.956 481.367 406.711 481.833 405.933 481.989 404.378 481.989 403.133 481.678 402.278 481.289 401.422 480.744 400.567 479.967 400.022 479.189 399.478 478.1 399.167 476.856 399.089 475.922 399.244 474.678 399.556 473.667 400.178 472.5 401.033 471.567 401.656 471.022 402.978 470.322 404.144 470.011Z"
                                        />
                                        <path
                                            d="M405.156 456.089 406.011 456.089 407.489 456.322 408.967 456.789 410.211 457.411 411.144 458.033 411.922 458.733 412.856 459.667 413.711 460.911 414.333 462.156 414.8 463.556 415.033 464.722 415.111 465.344 415.111 466.822 414.878 468.3 414.489 469.622 413.867 470.944 413.089 472.033 412.933 472.033 412.311 470.944 411.378 469.856 410.522 469.078 409.433 468.378 408.267 467.833 406.944 467.444 405.156 467.211Z"
                                        />
                                        <path
                                            d="M392.4 471.878 392.789 471.956 394.967 473.2 396.522 474.133 396.6 474.289 396.444 475.922 396.6 477.556 396.989 479.033 397.533 480.2 397.533 480.433 395.356 481.678 393.489 482.767 389.444 485.1 388.122 485.878 387.889 485.878 387.189 484.4 386.8 483.078 386.644 482.144 386.567 480.822 386.722 479.344 386.956 478.256 387.5 476.778 388.044 475.767 388.744 474.756 389.678 473.744 390.533 472.967 391.933 472.111Z"
                                        />
                                        <path
                                            d="M412.7 480.433 413.089 480.511 414.956 481.6 421.022 485.1 422.344 485.878 422.189 486.267 421.644 487.044 420.944 487.9 420.4 488.444 419.233 489.3 417.989 490 416.511 490.544 415.344 490.778 414.878 490.856 412.544 490.856 411.378 490.622 410.133 490.233 408.811 489.611 407.878 488.989 407.878 484.322 408.578 484.011 409.9 483.311 410.833 482.611 411.922 481.522Z"
                                        />
                                        <path
                                            d="M395.667 461.067 397.378 461.067 398.856 461.3 400.489 461.844 401.811 462.544 402.433 462.933 402.433 467.678 401.033 468.3 399.944 469 399.089 469.7 398.544 470.244 397.611 471.567 397.144 471.411 395.822 470.633 389.756 467.133 388.044 466.122 387.967 465.967 388.511 465.111 389.367 464.1 389.989 463.478 391.156 462.622 392.244 462 393.722 461.456 394.578 461.222Z"
                                        />
                                        <path
                                            d="M399.167 482.533 399.478 482.611 400.644 483.467 401.967 484.089 403.211 484.478 404.144 484.633 405.078 484.711 405.156 484.789 405.156 495.833 403.989 495.833 402.433 495.522 401.111 495.056 399.711 494.278 398.7 493.5 397.922 492.8 397.144 491.867 396.367 490.622 395.744 489.222 395.356 487.744 395.2 486.344 395.2 485.489 395.278 484.789 397.222 483.7 398.544 482.922Z"
                                        />
                                        <path
                                            d="M422.267 466.044 422.422 466.044 422.967 467.133 423.433 468.533 423.667 469.778 423.744 471.333 423.589 472.733 423.278 474.056 422.656 475.533 422.111 476.467 421.489 477.322 420.633 478.256 419.467 479.189 418.456 479.811 417.756 480.122 415.811 479.033 413.944 477.944 413.711 477.789 413.867 476.389 413.867 475.222 414.567 474.522 415.578 473.2 416.278 472.033 416.978 470.556 417.522 468.844 418.222 468.378 420.167 467.289 422.033 466.2Z"
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

        // Add a thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        fetch('/quyi-buzsuv/server23', { signal: controller.signal })
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
                data.forEach(item => {
                    if (item.id === 1611) {
                        const plus = document.getElementById("g1611Plus");
                        const minus = document.getElementById("g1611Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1611);
                            c1 = 1;
                        } else {
                            falseAnimation(1611);
                        }
                    } else if (item.id === 1634) {
                        const plus = document.getElementById("g1634Plus");
                        const minus = document.getElementById("g1634Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1634);
                            c1 = 1;
                        } else {
                            falseAnimation(1634);
                        }
                    } else if (item.id === 1657) {
                        const plus = document.getElementById("g1657Plus");
                        const minus = document.getElementById("g1657Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1657);
                            c1 = 1;
                        } else {
                            falseAnimation(1657);
                        }
                    } else if (item.id === 1542) {
                        const plus = document.getElementById("g1542Plus");
                        const minus = document.getElementById("g1542Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1542);
                        } else {
                            falseAnimation(1542);
                        }
                    } else if (item.id === 1588) {
                        const plus = document.getElementById("g1588Plus");
                        const minus = document.getElementById("g1588Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1588);
                        } else {
                            falseAnimation(1588);
                        }
                    } else if (item.id === 1566) {
                        const plus = document.getElementById("g1566Plus");
                        const minus = document.getElementById("g1566Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1566);
                        } else {
                            falseAnimation(1566);
                        }
                    } else if (item.id === 1519) {
                        const plus = document.getElementById("g1519Plus");
                        const minus = document.getElementById("g1519Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1519);
                        } else {
                            falseAnimation(1519);
                        }
                    } else if (item.id === 1496) {
                        const plus = document.getElementById("g1496Plus");
                        const minus = document.getElementById("g1496Minus");

                        if (parseFloat(item.value) >= 0) {
                            plus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            minus.textContent = "P= 0,000 МВт";
                        } else {
                            minus.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                            plus.textContent = "P= 0,000 МВт";
                        }
                        if (item.value !== 0) {
                            trueAnimation(1496);
                            trueAnimation(14961);
                            trueAnimation(14962);
                            trueAnimation(14963);
                        } else {
                            falseAnimation(1496);
                            falseAnimation(14961);
                            falseAnimation(14962);
                            falseAnimation(14963);
                        }
                    } else if(item.id === 1669) {
                        const value = document.getElementById("g1669");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1531) {
                        const value = document.getElementById("g1531");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1508) {
                        const value = document.getElementById("g1508");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 1357) {
                        const value = document.getElementById("g1357");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1357);
                            trueAnimation(13571);
                            trueAnimation(13572);
                        } else {
                            falseAnimation(1357);
                            falseAnimation(13571);
                            falseAnimation(13572);
                        }
                    } else if(item.id === 1397) {
                        const value = document.getElementById("g1397");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1397);
                            trueAnimation(13971);
                            trueAnimation(13972);
                        } else {
                            falseAnimation(1397);
                            falseAnimation(13971);
                            falseAnimation(13972);
                        }
                    } else if(item.id === 1473) {
                        const value = document.getElementById("g1473");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1473);
                        } else {
                            falseAnimation(1473);
                        }
                    } else if(item.id === 1427) {
                        const value = document.getElementById("g1427");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1427);
                        } else {
                            falseAnimation(1427);
                        }
                    } else if(item.id === 1450) {
                        const value = document.getElementById("g1450");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(1450);
                        } else {
                            falseAnimation(1450);
                        }
                    } else if(item.id === 1680) {
                        const value = document.getElementById("g1680");
                        value.textContent = "P=" + formatNumber(item.value, 3, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(1680);
                            trueAnimation(16801);
                            trueAnimation(16802);
                        } else {
                            falseAnimation(1680);
                            falseAnimation(16801);
                            falseAnimation(16802);
                        }
                    }

                    //Aggregate-1
                    else if(item.id === 1301) {
                        const value = document.getElementById("g1301");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a1301");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 8.8 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(1301);
                            trueAnimation(13011);
                        } else {
                            falseAnimation(1301);
                            falseAnimation(13011);
                        }
                    } else if(item.id === 1302) {
                        const value = document.getElementById("g1302");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 1303) {
                        const value = document.getElementById("k1301");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 1304) {
                        const value = document.getElementById("n1301");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 1305) {
                        const value = document.getElementById("w1301");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 1324) {
                        const value = document.getElementById("g1324");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a1324");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 8.8 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(1324);
                            trueAnimation(13241);
                        } else {
                            falseAnimation(1324);
                            falseAnimation(13241);
                        }
                    } else if(item.id === 1325) {
                        const value = document.getElementById("g1325");
                        value.textContent = "Qвар=" + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 1326) {
                        const value = document.getElementById("k1324");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 1327) {
                        const value = document.getElementById("n1324");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 1328) {
                        const value = document.getElementById("w1324");
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
                    trueAnimation(0);
                } else {
                    falseAnimation(0)
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