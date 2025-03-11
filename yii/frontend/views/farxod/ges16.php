<?php
use common\models\Informations;
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Фарход ГЭС-16';
$energy = new Energy();
$id = 7;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlAggregate3 = $energy->getInformation($id, 3);
$urlAggregate4 = $energy->getInformation($id, 4);

$urlSwitch1 = $energy->getSwitch($id, 70);
$urlSwitch2 = $energy->getSwitch($id, 71);
$urlSwitch3 = $energy->getSwitch($id, 72);
$urlSwitch4 = $energy->getSwitch($id, 73);
$urlSwitch5 = $energy->getSwitch($id, 74);
$urlSwitch6 = $energy->getSwitch($id, 75);
$urlSwitch7 = $energy->getSwitch($id, 76);
$urlSwitch8 = $energy->getSwitch($id, 77);
$urlSwitch9 = $energy->getSwitch($id, 78);
$urlSwitch10 = $energy->getSwitch($id, 79);
$urlSwitch11 = $energy->getSwitch($id, 80);
$urlSwitch12 = $energy->getSwitch($id, 81);
$urlSwitch13 = $energy->getSwitch($id, 82);
$urlSwitch14 = $energy->getSwitch($id, 83);
$urlSwitch15 = $energy->getSwitch($id, 84);
$urlSwitch16 = $energy->getSwitch($id, 85);
$urlSwitch17 = $energy->getSwitch($id, 86);
$urlSwitch18 = $energy->getSwitch($id, 87);
$urlSwitch19 = $energy->getSwitch($id, 88);
$urlSwitch20 = $energy->getSwitch($id, 89);
$urlSwitch21 = $energy->getSwitch($id, 90);
$urlSwitch22 = $energy->getSwitch($id, 91);
$urlSwitch23 = $energy->getSwitch($id, 92);
$urlSwitch24 = $energy->getSwitch($id, 93);
$urlSwitch25 = $energy->getSwitch($id, 94);
$urlSwitch26 = $energy->getSwitch($id, 95);
$urlSwitch27 = $energy->getSwitch($id, 96);
$urlSwitch28 = $energy->getSwitch($id, 97);
$urlSwitch29 = $energy->getSwitch($id, 98);
$urlSwitch30 = $energy->getSwitch($id, 99);
$urlSwitch31 = $energy->getSwitch($id, 100);
$urlSwitch32 = $energy->getSwitch($id, 101);
$urlSwitch33 = $energy->getSwitch($id, 102);
$urlTransformer1 = $energy->getTransformer($id, 54);
$urlTransformer2 = $energy->getTransformer($id, 55);
$urlTransformer3 = $energy->getTransformer($id, 56);
$urlTransformer4 = $energy->getTransformer($id, 57);
$urlTransformer5 = $energy->getTransformer($id, 58);
$urlTransformer6 = $energy->getTransformer($id, 59);
$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['farxod/index']) ?>">"Фарход ГЭС" Филиали</a></li>
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
                    viewBox="0 0 1300 650"
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
                                <feFuncA type="linear" slope="0.431373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="0.376246 0.376246" />
                        </filter>
                        <filter
                            id="fx1"
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
                                <feFuncA type="linear" slope="0.431373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="0.376246 0.376246" />
                        </filter>
                        <filter
                            id="fx2"
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
                                <feFuncA type="linear" slope="0.431373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="0.376246 0.376246" />
                        </filter>
                        <filter
                            id="fx3"
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
                                <feFuncA type="linear" slope="0.431373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="0.376246 0.376246" />
                        </filter>
                        <filter
                            id="fx4"
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
                                <feFuncA type="linear" slope="0.431373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="0.376246 0.376246" />
                        </filter>
                        <filter
                            id="fx5"
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
                                <feFuncA type="linear" slope="0.431373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="0.376246 0.376246" />
                        </filter>
                        <filter
                            id="fx6"
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
                                <feFuncA type="linear" slope="0.431373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="0.376246 0.376246" />
                        </filter>
                        <filter
                            id="fx7"
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
                                <feFuncA type="linear" slope="0.431373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="0.376246 0.376246" />
                        </filter>
                        <filter
                            id="fx8"
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
                                <feFuncA type="linear" slope="0.431373" intercept="0" />
                            </feComponentTransfer>
                            <feGaussianBlur stdDeviation="0.376246 0.376246" />
                        </filter>
                        <clipPath id="clip9"><rect x="9" y="8" width="27" height="10" /></clipPath>
                        <clipPath id="clip10"><rect x="8" y="12" width="6" height="4" /></clipPath>
                        <clipPath id="clip11"><rect x="9" y="8" width="39" height="10" /></clipPath>
                        <clipPath id="clip12"><rect x="9" y="6" width="25" height="12" /></clipPath>
                        <clipPath id="clip13"><rect x="8" y="12" width="6" height="4" /></clipPath>
                        <clipPath id="clip14"><rect x="9" y="8" width="32" height="10" /></clipPath>
                        <clipPath id="clip15"><rect x="9" y="7" width="27" height="10" /></clipPath>
                        <clipPath id="clip16"><rect x="8" y="11" width="6" height="4" /></clipPath>
                        <clipPath id="clip17"><rect x="8" y="7" width="32" height="10" /></clipPath>
                        <clipPath id="clip18">
                            <rect x="0" y="0" width="1190625" height="571500" />
                        </clipPath>
                        <image
                            width="156"
                            height="76"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABonSURBVHhe7V0JUFRZlrV6epmejonZZzomeqIjemKie6arurpbLa0SxSrXEssNUNpCUFAssbQLtbQUUXZIIEHZV1mSXfZ939ckAcEVASETkEVEIElAq+RMvJeZkP6faIJAAZUn4sTP/MvLv5y8775733t/xYoFxGc7Ptt+4ezX/hs2bHiPfD9x/LhLVHhEV2R4xGNFRkREPL5w4cI9AO8wy1BDDZVhbW0d1tHRgQ8++GC3QCD4iZ2NTahEPAIWR0YQFhY2uGLFCrXg1Jg9QkJC2ongPly7lhsZEQErS0uMjIwopVpwarwV9PT0/jMrK2uCCG71qlWuT58+RXR0NEtoCoJ7xixDjWUEQdvw76pFEvuatmcf37lz56crgHeID3Wre+IXt9pG/lQvkuwRCEfX14kkqxse9v+qoYNQ8qtG4dhvGjqG1ta1jXxaJxzbfP/+xN/LyyTHNwrxTw2i4Q3Gx7483dPTjU4iuNWrXfv7+xEdRQQnkfFVwYWGhqoFtxwhEI2cqxVKuvkdoxCIRlEjWwpEEhml38l2um1yu2x/0RhqOgjHpZSu7xWIRh/WiCQj5HuNaByegeEQj4hfFZzawv3wIGgfD5UKZv4oEI0hNCIGI0oEJxaLWWJTC24ZQyAaCyUWiCmSuWT5w37ExMZTIXV1dWHNmjWpagu3YoWhoeHfan366V9/UI0jgUgyj4KTVrvh6WW4f//+pK+Wl5eHNwnuh+DD7du379fWllaI4cb8nLlt2WK+BUd8PEePG8hMT0NmRiblNbdrbxRcTExMN/Nclxs+/vjjlSE3gnH+/PlfMbctW8yv4Makgrvmj/zCEhQUlSC/qATe3r54+rQfIcEhyMvNxeDgIEtwAoGgPSUl5c+pqanvZ2Rk/EGRZD2Hw1m1c+fOf2Vez1KChobG5pKiYuzfu/d95rZli/kVnNTC1YpGFShBZEYp4hNTYGPniOSUdHh6eqKkpARDQ8OTghsaGqJWcDo+fvwYO3bsMGVez1LCuXPnDNrb2qGhoaHJ3LZsMb+Cm55EeESQuXVtsHfzQVpaBrw8vVBVVTVty1WRZJ+dO3eaMa9nKWHXrl0nyR9r5cqVe5jbli0WVnDy3yExvTEa06NLkQTJJY3gegQgIzMTPl7eqK+rY4mMKbjdu3efY17PUoKBvr7Vi+fPoampeYy5bdliYQX3ehIBRqSXwisgBJkZWfDz88W9u3dZYpPTyMDgEvN6lhLOmpldm3j5EgcPHFjSf5wZYTEJjlI0Tn09n4hU8CJvIi01DUFBQXj48CFLcEcOH3HX1dX9G+Y1LRXY2NgET0xM4KvTp+2Z25YtFp3gFCmUwNk3HAnJGUhKSkRYaBgePXpE43liyQjcr1/HpYuXBAe0tdcvBuFpamr+8sMPP/y1qrSytMomgfCvz5yLIt91dXV/yixz2WG+BSdQsk4VkuPkPl51+yBsub7IySvEzZs3ERUVCdLrJC42lvada21pgbm5eaOOjo7m1atXf8y8xoWCo6NjU1lZGYqLi1Vj0dQyJSUF69at28gsc9lhvgRHE/5CEhaRJfpZ+0jFpBLJ+YnGUN78BFcc3VBRxUc4LwzOHCcaPpFXse3t7bh8+fLdzz//fJOJiclPmNc634iJjG7y8fWhrW1vFeho74BvvvkGlpaWyMjIUAtu9iQiG8Pp81dw2dIelg6u4Fz3h2dQNAKjU8BLzkdMZgXyGkUKvU1eQ9k+AtE4+KIxFN3uwBVbLu7fewBPDw/09fa+4tsR63fZ3LxZX09vy0JWU0RwsbGxmIAUxD97HTo7O2kYqOlBEzLTM6CpFtzsWXKnB0ePmcDJkUN9rQA/f0TweEhJSkJ+Xh7Ky8vh7euP64FRKLrdyTr+9ZQK2tmHh1u3GuHj6YlHra2sRgUJDl+5cqVdX19/+/bt23/GvPa5Rkx0dFNsTCwV2u3bt2FnZweSK52OVywsaGOoqakJmRlqwc2a/I4xBCcWor1dyBIBcfbF5LN4BJlp6VSEPn6B8AqJRcn9XloFM8ublqJxhCYVIDU9C7HRMaiurGL9HmFvby+srKw6DA0NtUgPDeY9mCsQwd2MiaWpusTExFcsHPmsjARqC/e2FI3B1Y+HERUyBkR4ISHBSE9Ng6e3H3wjklDa1Cf1/VTw8/gd48gVtMDLNwhlZeW4GXcTw8NTKTJFPnnyhPhLPQYGBrvmQ3hyC5ednU19S1WhtnBvS9EoAkMiWQ/8dRweGoab2zWUlpTAw9MXgdFpKH/4lF22Moqeo/rRM1hz3NHa0gqP6+4038r8DTnJeAoba+uBw4cP71u7du2cdQ1SFBwRvapQW7i3ZfswIiNjWQ9aFRIrZO9gj4b6enCveSAkPhcVLQO0mn5zdTsKW1c/tDS34No1N4g6OljlK/LZwDNwHByHDAwM9u/cufPvmPdmppi14NQW7u2YVNKIKupPsQfHqEqRUESd7odNTeA4X0NYciEqWodYv/UqpY0Jr4hUFJWUgcfjoe4NOVnCocFBODs7iw0NDT9/G+HNWnAPmpCTmYUDOjrmX544oTUvPHZCy8jQUMvMzGzOLPqsMJeCk8baRuERHI9hhfjYbEmCundv34Ezh0MFaGnnhOiMclQ9mhIeO74nZVrZXQQGh6GspBiJSYkq9UCh1bqL65iRkdHhLVu2/IJ5r96EWQuuqQn1dfXo6uykLWuSfZhzdnairrYWenp6v2ee94JiLgVHyBeNwytQ7r+9+SGryuLiInh5eaLrcRcuWzkgLpeP6jYx6/cnKRpH5cN+2HKuo72tDR4eHnj27BmrXGUkYnF3d3+hf/CgyUyEJxccyR6QWOCb4nByyH24spJSfPviBb598e0c8wUKCgpQkF+wvARHqjPSsgzmzazBMBPGxcUhKioKPT29MLewRVZNC+s8Xjkn4SiuOlxHV2cXXJxd0N3dzSpzWorF8Pfx/faQ3uenVBGeYhzO19cXjY2NGBgYYIVHiLUhccMnfX30u9yHq6ysfEWIcwnSwZWIblkJjrD4Xi9SUjPYD2+OSawd6Z6enZ0L74gk8IUjrHOZ4ijc/CNRV9+AoMAg3LtzB2Ixu8zXMcDf/+Whg4fOvk54ioIjePnyJTIzM2k1Kcd3330Hmo14OYHYmBg8f/580sJVzaPgiNXNz89ffoILvJkLoZKA73yQxLrs7e3xqLUFF62dUdE8IM27ss5L2pi4mVON6JsJ9J+elpamkl/HZGho6MRBPb2LyoTHFBwmJiCRjCApMWky0FtWWoaODhHZiNLiYlrNL4SFW7aCc/ePpM4+80HNF8lvxURFo7y8FK7XPZFZef81HQOeo/RuNzgu7hAKhdSvU0z+q0L5tUVHRU3o6OjYKgqPKTiyDAlyx9nTRgj24+KGvyvOnj6MAG9XjD8fQ0lxkVRwags3W44iIDRqThsLqrK5uRnuHh6orKiES0AU+EIxBKLnk9ZN8TwFwhFcsubQALCDg8Nrg8RvYkJCArS1tV1IOCVaieB4nnsw+PAYJM1HIWkxweBDE6SF7MPQs4Epwakt3OzIbxsGjxcN8VvE396GxC+zsbVFV1cnzlvYobp5mkyFbE4UW1d/tLQ8gre3F1paWljlqUJi8QjTU1Lh5eE5QXKpkz7cxEsc1dfG2eMfYbTFGJIWYzhe0sSBvZshGZWgtERt4WZNYkWSS2+Dz69hPZSFJumkSVJkXv6BSCxumDYvS7IXYfH5yMzMQU5WNnJycqUdC2ZBIrqEuHgoCm4CE4j03ouRlmMYaTGW8SjSefswOPgMJWofbvYkSfRrQTEYGmIPav4+SDpjurpwcffOHdi4BqBGSSuWBI2J6PLrHsHN3QftwnZ4e3jOqjGhVHATE4jy3oOxFmMZj1JLl8HbQ7MbP1AfTjwHsydJe/Z6BvJYD+J7pXgEdja2eNLXi2/MrVBFWrF0TCzb2tW0ifHNVVsqNhsrm1k1JpiCewkg2nu3guCMqeDSw3fLBKe6hauvr0dISAjlTLIYciwiwUlUFxyxhNQRZ1tE0o1cOiUX+2F830xMTEBhYT5Cw6MQm10JPktw5Lv0mizs3GhQ2dXVFSKRiFXWdFQmOLKI9GEK7qhMcApV6hssHMkW+Hj7UD8zPT0d/OrqqdCLilg0gjt2+us7Z8ztcc7CAV9f4eCCFRff2Ljikv11mDt44KqTNyxdfGHrFgi7a0HgeITByTMMXN9IcP2icO1GHK4Hx9HAqrm5BZITk6gDTW5gbnYOCvPz6Y0lg0sqKirA5/NpQr2hoQF37tyhsyqRFmZrayva2tpoVUgeNMn/kYApyQyQDpSkFwlpTZKWJYnekwc1+GwQ4mExtWRMATBJyuRwOBAK23DRznWy5cq0dmS9Ny8ZZeUVdIhiUVERqyxlVC64CUR460DcbIrh1uOUI82mSA3XxfAgaaVOWTgypmE6C3fv3j16r0h5JJhMZg4ly5mIbtEITjY32RRlU60q49WrV3+kjCsIV1z90dUVK360Qgnl+5GhfKpSU1Pzx28iGSiza7uWHpmRiSkAZSRVkYOdPfp6euhYi/L7PexAMbXi40grvwP/wGBqVUiailkWk0RwiTLByTEx8ZKGPyJ54RgceIrBgX5ERfDQ39dLBUMaNqSL1OssHBn3kJuTQ/cbpH+yZ/QPFx0ZNWPBFSwSwS156Orq/tLCwqKbKQJlJD5aWmoqbZWmJKcjKD5Hau1eidUREY6isnkAV20c6TG2tnYQi5X3JJ4UXHy8NG1FhDAB9Pb0wM/bhybliYUn4zhKS0uRlJiI6upqmt98NjCApvsPqIUjfxxizRXZ2NBIxTi5rke6DA4OZu1LtpEBRX29fSymJKcsjuT9cgGxePv37w9T1e8imQaOoyN6uh7jgqUTakXsViwRXXW7GObWXDx9OkD9OlLNM8uS0/3aNWSkpyM+Lg4JN6WMly0pyfo46br42DhqbXmhYVT8xKVISUqmgh0bG5vi6BjGR8dQkJuH3u4exMXexNiIBONjY5SK+5qZmdGhhxwl/NL0JHVv1IKbW7yjpaW1Kz4+/iVTDMpIBrs4OzvTniR2Tm7Ib+iQVbGMRoVQAq5fOOobGhGXEI+K8nJWWfLyiE+mKknLVNQuRGSkdGA38XGDbwSjKK8AhQX5KCRdigqKkE+Ym0stVF5uHgrzC1GYXyTdnl9Ic8PEuhLrSapqZSS+6KLoLbIcoa+v/++XLl16pFI8TSymPToyMtJQWFgEj7B41DIsHalySZwxLqcKMbEJuHv3Lq3SWGXNkMQ3e9zZRWcCJYKrrKjAl2ZHobH1j9DY9ntobHsPG7b+Aeu3vYdtuiuxYdt72Kq7Chs/fQ+btP+Mddul2zZsex8am9/FzbgYpus2icXUaFiWIA0KPT09b9ICZj5oZSRVrLOzE/WFLlk6Q9Au79z5qrUrvN0BR647Bp4OgOPkNKsgsZw5RHBdMsGJpIKz9jwFI0cNHHH6AEZO63CEswZG3DXglOyCMfcDOBfvgonXh7BP24ejbhowcl4DE+4mGNmvR2R8MFNnk1ALbmHwjvYe7a1RkVEvmA9bGYkD70bjb0K4evohq6qJ5dORZXXzICxsuXg2MAgul4uenh5WWaqQWLjuzi7Eyi1cZSWsvU7CmLMOR5xWw1gmuCOuH8C5ZBeMuKvgVPwZTLw+gm36Xhx1XQ9jpzU47vIJjB2I4G4wdTYJteAWEDo6Ov924fyFB8rmEmaSWKzc3FykpaSiqooPrl8k9etICkxx/AS/XQyOeyAeNjcjJjqKzEnMKutNJBaO+FVEtMQ3i4iIwAWnwzCWWThjp49kglsDp5LPJgX3haeGTHAaOOL8IY5x5YJTW7hFAzLHiJ6enjMJoDIfvDKSALSLiwt6n/TA3NoF/FZpWozp24Um5iIzKxe1gloaG2OW8zqS9FlPdzdCg4Px4O49OgWGhfsXMOIoCm6tzMJ9Jl0W76QWziZ9L4zd1uGI8xocc/kERlRwQbTLgDKoBff94B1tbe2NISEh48yHr4xPB56SwTRob3uEgKAwJBTdotUqHSM7yXFk8Zvg5RuAnu4euLm6zdivU2w0WHl8CSPrjThsowFDew0csdkAExcNOGbsgbHrOthn7YOx21pYx+nCmLMBhnYfwcRuC4wsNyIyTl2lLkqQ6fbPnTsnIBF75sNnkoiHhCOSk5LQ0NAIB/cbEJCYHQ0UyxsU4yi93wsbjiv1A0m8jqTimGVNR0XB9ff3orNLRNnxuB2dnSJUVJXC9Pp6WCZvh0XKDphY7Zjcp4uwk3wWQiIRM3U2CbXgvmeQKlZfX9+6traWJQBlJHle4msRIVnbu9JpKOTjcOXWrqp1ELauPrTFGR4eTvPFzHKUkex7q/6WNKPQ00MbITSjIMsq8GuqcYK7HpbxO3A1YTu+uLIL5M2M0uwC2Vd6jPQ45UxNTkFiQoJacN83Dh48uC4gIEDMFIEyko4D3t7eNL8aFR2HqIwK9vQTwlH4hiehrKKKprJIF3RmOUySDgok00DmRWljkPh2zhxHXLj8V2j+5X+xRXcluG6O8HL3xMP7D1j7T8dHLa1U0GrBLQKQKvas2ZmS/r43V4Okii0sLKRCunf/Aaxd/VAjkjD8ujEkFtaDFx6FdmEbvD29Z+zXyRkcfAOn/2qKjQf/G9tNf4sdJ3+LDXv/D34+3rRVy9z/dayuqlILbrGABIoNDAwuEKvEfFDKSAYyk9me+vv6YO/igdI7jxUEJ31HbP4tIbhuXtQyksl1+vr6MDg4RFNgU2R+H8TQ4BBtwQ4PD9G8rIPPGXCKdsCpWAuc4m1wzN2FqPgwxMbcnDwf0nmgorwS5765jPMXr8LVjT3TABHc/v3732VeuxrfI/T09Nb4ePkMMAWmjKR/nr9/AI3FJSSn4UZCnmwybKnwyEuNy5r6Ye/ijd6ePjrbZTNhM1k2yyhbJ1vf0txM9yN94Ej3eBKIPs85Aqfy7XAq2wGnsk/hWLATTm62cHNzQ21tHVqbW+Du5Y9MfrNsTuUxlDQ/pS/V6+6e6mygFtwixaZNm/7FzMwsW5VpIUhVWVRYiKT4eCoUK64vHYZILZ2sy1NVuxg3ojPg5hUGN+9QKb2kS1cZ3bxCpPQOhYOzJ6wsLBASGowrly9h/9GPcS7sY3wdtglfh23EmRuf4C+f78Ply5dgYW6Bzw8ZIlvQwhooVN02jHCFadPUglvEINPv6x/UNysoKJhgikwZydT9Hu7ueNL3BFwPH+TVt8sEwOzOPh2nQiyR2dXgurpg3+mVOBP4Cf5yeTWMnT/CMe5H0L74J5wJ3oRdp/8A8+jt2LjvfXj6BkwOfVQsk/iVvkHEz5MO21QLbglAV1d3pYeHR48qTv/T/n7cCArCgwcPkJWTB9/INJbVeRNJdRiTVYWAG964GL4LBo6rcSZ0C0w918Lk+jp8Hb4Jh2xX4VLip9hn8UectNuG0HCSfmMLjviRN0KnxpmoBbdEsHXr1n/+6quvElXp3CmvYkkrtqX1Eey4XqhpG6LBYtUoRnRWBYIC/bHL9E8wddXEgYsrYWilgcN2a6B7ZjVOumti54n3Yea3BVt1ViGEF0UHBtHZq2Qk3anItBZx8YlqwS1FkHEWBgYGJ7Kzs79jikwZSbcoL09P9D/pB58vgKCmHgJBPQQ1ddLPLNahRkBYi6SEZJw7dxZfHDuKg4ZHcPjYCRgdNZUtT+LIMVMYHTuOwybHYXLcFF+eNUetkLyLVvouCyq4NvL2Hi86BkI+uFstuCUILS2t993c3ETTzZSuSFLFhoWEwtnJCU4qkOxH3q7jxOHQEWYWly3ASyuhQzCpoITjlAJC0ShCEgoREMRDaFg0QngxCA2PQUh4DB2umZmdRzMRiudDXkKiFtwSxO7du//x1KlTUSQ7wBTZXLK1uRlhaWUyf4xND14y7QjKPG46qgO/Sxhk2OShQ4eM0tLSvmU+2Llia0szwuWCY5JMns1LUllwJDBcVVWNpKIGYY1wvLlGONpcIxotqBON+tYLR67XiEavC0QjPnzRaFWNaDS/RigOqhMOu99qGzpTKxoyqhENn68TjrjzhaMJNR2jNTXt4hSBcMS9TjhkeFs0uLpROLiKkHy+JRLr1Yok/jUdYxX89sErja09/8G8f2rMElpaWu9yudyHqnTunClbXie4jjGEppTg/r37rOOmY2UVHynldycD06QFTapmaXmKIRxZi5eO0WUOoZQ2ShQ/y/1G+X70nWiyPwX5zheNvuB3jA3UdoidmPdPjVlAV1f3H86cORPb9OAB6yG/DYngeGllrPntpGIZQzV5n6xHIAoKi2l3dzILu3hoaFpWVlQhtewuK++7UBSIJGHMe6fGLEGr2IMHDyUmJqrUuVMVkt7AvlEZLAszxVH6dsX0ygfgpRQjPLkAvJRC5UwuRHBiPsofPpv2VQPzRnr+xGqqBTfn2Ll16+9cnJzuko6YTAHNlBKxGNf8wxnVHZPTrV9EVAtufqGvr/+LU6dO+ZFXWDJFNFOmpqYjveoB9YtYD3KpUC24hcHBAwcPJMTHi1WZ3Wk6ksxFwI0wJJXeXviqkFJuXVWlsuOk39U+3AJg8+bN/+Po4FA/kzEOLIpHUFhQBGfPIATF5SC79hFy6tqQW9dOmacCX7cf2ZZT107LzeI3vz2rlazjtyC1rDGeeX/UmAfo6Oj8/OTJkx5kFkuWmFQkSU9JxCP0TYlFxaUoLCqZYxZT7t6rE/LHVes/mg+uW7d5LfPeqDGP0NbW3hcbGzvIFNNi4okTJ2yY563GEoaWltZv7OzsqhXznAv5IpU30dTU1JZ5zmoscZAhiqZffMEVLIJXDDCpFtwyxp7PPtsZEx3dr0rnzoWiWnDLHFvXr/8vyytXEwL9/MsC/f3LyDLAP6CcLP392aT7yEmOkR/HWhc4+Xnq2MCpfRT3VyhfR0fnKDmvjIyMnxEyz/dt8f9zXNlOSND3lgAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img19"
                        ></image>
                        <clipPath id="clip20">
                            <rect x="0" y="0" width="1173079" height="571500" />
                        </clipPath>
                        <clipPath id="clip21">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP4AAP4AAP0AAP4AAP4AAP0AAP8AAP4AAP8AAP8AAK0sk/sAAAARdFJOUwBw/2AgQBCvz4+/75+A31Awgb+lOAAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOZJREFUSEvtl1EOhCAMRCuriKKu9z/tBhRpp3VP0PdJX6LOQCJEnSFIPmzGGEELYUSlMqEWJlQq7rlXcM+9gnvuFdxzr+Ce+SMWZ9RCin28rDcZrRBCbsONcPQC7bhishGtuGZwRKLRejGgBvTFVcV+fbIORJJacv+fnM+WoW6CMzSNaMEZY+0axQOnD5l1R3Ti+OHLNXqtZZYaUUKjUoqQ2LUYOxVvC4W7CIneEK0IiQon2/cKVQsrQiJrUZF0eDiyCAmvBYqQ9HAWHElaOLoISavl2ZtvXKfFLEJSTotdhCQmdiIefgYCEnC+WqtNAAAAAElFTkSuQmCC"
                            preserveAspectRatio="none"
                            id="img22"
                        ></image>
                        <clipPath id="clip23">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip24">
                            <rect x="2.32831e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACXaFSPaFSPbFSLbFCDfECLcFCTbFiPZFiDXGCPcEyHaFSTbFSLbFCTbFCPcEyPaFdiVP6cAAAARdFJOUwAw7//PEK+AUCDfv49wQJ9gSfjR3QAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAOFJREFUSEvtl1kOxTAIA5PQfX33P+0TXbFDb8B8wkiR7EZKU2JykabloUMjIh0Pa3pRBh4z+dCkjLxA2un0ZOYNslyayMory/BoIpmXL20xXsPbl85oIguvb1bQRDYWTkZ7qjL5tWgRiBvOWQTihLOxo9S1PEUgVTgYyUuPmi0CgVqgCATCmXlrMLVwEchTS/4+VSn3yXURyHVbvCKQ47a4RSBay0cRyJzSzjOXPvHkg7TPF1445V6asNs6ns79oH+sfVyQOqDwlPDCU8ILTwkvPCW88JSRNale9yf8ELN/C393qxyRJJMMtwAAAABJRU5ErkJggg=="
                            preserveAspectRatio="none"
                            id="img25"
                        ></image>
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
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip30">
                            <rect x="0" y="0" width="48985.7" height="114300" />
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
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip36">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip37">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip38">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip39">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip40">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip41">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip42">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip43">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip44">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip45">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip46">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip47">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip48">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip49">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip50">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip51">
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip52">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip53">
                            <rect x="-9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip54">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip55">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip56">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip57">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip58">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip59">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip60">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip61">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip62">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip63">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip64">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip65">
                            <rect x="0" y="0" width="57150" height="123825" />
                        </clipPath>
                        <clipPath id="clip66">
                            <rect x="0" y="0" width="53067.9" height="123825" />
                        </clipPath>
                        <clipPath id="clip67">
                            <rect x="0" y="-1.16415e-10" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip68">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip69">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip70">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip71">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip72">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip73">
                            <rect x="0" y="0" width="47625" height="123825" />
                        </clipPath>
                        <clipPath id="clip74">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip75">
                            <rect x="0" y="0" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip76">
                            <rect x="0" y="0" width="48985.7" height="114300" />
                        </clipPath>
                        <clipPath id="clip77">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip78">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip79">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip80">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip81">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip82">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip83">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip84">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip85">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip86">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip87">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip88">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip89">
                            <rect x="9.31323e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip90">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip91">
                            <rect x="-4.65661e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip92">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip93">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip94">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip95">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip96">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip97">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip98">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip99">
                            <rect x="-1.16415e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip100">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip101">
                            <rect x="-1.16415e-10" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip102">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip103">
                            <rect x="0" y="0" width="47625" height="114300" />
                        </clipPath>
                        <clipPath id="clip104">
                            <rect x="0" y="0" width="47625" height="111125" />
                        </clipPath>
                        <clipPath id="clip105">
                            <rect x="0" y="-9.31323e-10" width="57150" height="114300" />
                        </clipPath>
                        <clipPath id="clip106">
                            <rect x="0" y="0" width="48985.7" height="114300" />
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
                            d="M1016.83 209.5 1016.83 251.698 1014.17 251.698 1014.17 209.5ZM1011.5 209.5C1011.5 207.291 1013.29 205.5 1015.5 205.5 1017.71 205.5 1019.5 207.291 1019.5 209.5 1019.5 211.709 1017.71 213.5 1015.5 213.5 1013.29 213.5 1011.5 211.709 1011.5 209.5ZM1019.5 251.698C1019.5 253.907 1017.71 255.698 1015.5 255.698 1013.29 255.698 1011.5 253.907 1011.5 251.698 1011.5 249.489 1013.29 247.698 1015.5 247.698 1017.71 247.698 1019.5 249.489 1019.5 251.698Z"
                            fill="#663300"
                        />
                        <path
                            d="M798.5 314.5 904.931 314.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 85.3398 0.000104987"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 517.84 447.5)"
                        />
                        <path
                            d="M890.5 374.5 890.5 450.091"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 442.183 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 470.683 213.5)"
                        />
                        <path
                            d="M0 0 325.806 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 814.306 212.5)"
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
                            font-weight="400"
                            font-size="11"
                            transform="translate(15.1101 206)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(18.6101 206)"
                        >
                            –
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(23.9435 206)"
                        >
                            III C
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(44.2768 206)"
                        >
                            Ш 110 кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(78.9565 392)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(85.1232 392)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(88.6232 392)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(62.9565 405)"
                        >
                            10,5кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(56.6232 418)"
                        >
                            30,8мВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(27.7899 431)"
                        >
                            СВ 562/130
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(79.7899 431)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(83.2899 431)"
                        >
                            32
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(461.5 200)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(468.667 200)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(472.167 200)"
                        >
                            C
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(479.333 200)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(486.5 200)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(490 200)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(229.964 315)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(235.131 315)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(238.464 315)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(199.798 328)"
                        >
                            10/110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(232.964 328)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(179.964 341)"
                        >
                            ТДЦ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(198.798 341)"
                        >
                            42000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(227.798 341)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(932.871 345)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(939.371 345)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(942.704 345)"
                        >
                            8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(932.871 358)"
                        >
                            110/35/10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(980.871 358)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(932.871 371)"
                        >
                            ТДНТ40
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(967.371 371)"
                        >
                            000
                        </text>
                        <path
                            d="M902.5 322.521 902.5 313.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.5-1.55528e-06 1.5001 101.256-1.49989 101.256-1.5 1.55528e-06ZM4.5001 101.256C4.50011 103.741 2.48539 105.756 0.000109653 105.756-2.48517 105.756-4.49989 103.741-4.4999 101.256-4.4999 98.7703-2.48518 96.7555 0.000100321 96.7555 2.48538 96.7555 4.5001 98.7702 4.5001 101.256Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 799.5 313.756)"
                        />
                        <g clip-path="url(#clip9)" filter="url(#fx0)" transform="translate(406 73)">
                            <g>
                                <path
                                    d="M0.499512-3.93164C0.499512-5.21712 0.857585-6.21794 1.57373-6.93408 2.28988-7.65023 3.28711-8.0083 4.56543-8.0083 5.87598-8.0083 6.88574-7.65649 7.59473-6.95288 8.30371-6.24927 8.6582-5.26367 8.6582-3.99609 8.6582-3.07585 8.50334-2.32121 8.1936-1.73218 7.88387-1.14315 7.43628-0.684814 6.85083-0.357178 6.26538-0.029541 5.53581 0.134277 4.66211 0.134277 3.77409 0.134277 3.03914-0.00716146 2.45728-0.290039 1.87541-0.572917 1.40365-1.02051 1.04199-1.63281 0.680339-2.24512 0.499512-3.01139 0.499512-3.93164ZM2.93262-3.9209C2.93262-3.12598 3.08032-2.55485 3.37573-2.20752 3.67114-1.86019 4.07308-1.68652 4.58154-1.68652 5.10433-1.68652 5.50895-1.85661 5.79541-2.19678 6.08187-2.53695 6.2251-3.14746 6.2251-4.02832 6.2251-4.76953 6.0756-5.31112 5.77661-5.65308 5.47762-5.99504 5.0721-6.16602 4.56006-6.16602 4.0695-6.16602 3.67562-5.99235 3.37842-5.64502 3.08122-5.29769 2.93262-4.72298 2.93262-3.9209ZM9.08578-7.87402 16.4818-7.87402 16.4818-5.92969 14.0003-5.92969 14.0003 0 11.5672 0 11.5672-5.92969 9.08578-5.92969ZM24.4653 0 21.7252 0 20.7761-2.03329C20.5515-2.51418 20.3768-2.81472 20.252-2.93493 20.1273-3.05513 19.9544-3.11523 19.7334-3.11523L19.7334 0 17.3057 0 17.3057-7.87402 19.7334-7.87402 19.7334-4.8501C19.9447-4.86084 20.1094-4.93604 20.2275-5.07568 20.3457-5.21533 20.5301-5.61637 20.7808-6.27881 20.9634-6.76937 21.1478-7.12117 21.334-7.33423 21.5202-7.54728 21.8228-7.70036 22.2417-7.79346 22.6606-7.88656 23.3177-7.93311 24.2129-7.93311L24.2129-6.26807 24.0894-6.26807C23.674-6.26807 23.366-6.18929 23.1655-6.03174 22.965-5.87419 22.8003-5.61906 22.6714-5.26636 22.5425-4.91366 22.4037-4.65047 22.2551-4.47681 22.1065-4.30314 21.9033-4.16439 21.6455-4.06055 21.9964-3.94596 22.3026-3.74813 22.564-3.46704 22.8254-3.18595 23.1029-2.74821 23.3965-2.15381Z"
                                    fill="#828897"
                                    transform="translate(9.79004 17)"
                                />
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Arial Black,Arial Black_MSFontService,sans-serif"
                            font-weight="900"
                            font-size="11"
                            transform="translate(414.992 89)"
                        >
                            ОТК
                        </text>
                        <g
                            clip-path="url(#clip10)"
                            filter="url(#fx1)"
                            transform="translate(431 73)"
                        >
                            <g>
                                <path
                                    d="M0.241699-3.7168 3.42139-3.7168 3.42139-2.0249 0.241699-2.0249Z"
                                    fill="#828897"
                                    transform="translate(9.12338 17)"
                                />
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Arial Black,Arial Black_MSFontService,sans-serif"
                            font-weight="900"
                            font-size="11"
                            transform="translate(439.325 89)"
                        >
                            -
                        </text>
                        <g
                            clip-path="url(#clip11)"
                            filter="url(#fx2)"
                            transform="translate(434 73)"
                        >
                            <g>
                                <path
                                    d="M5.40869-8.0083 5.40869 0 3.1958 0 3.1958-5.24756C2.83773-4.97542 2.49129-4.75521 2.15649-4.58691 1.8217-4.41862 1.40186-4.25749 0.896973-4.10352L0.896973-5.89746C1.64176-6.13737 2.22005-6.42562 2.63184-6.76221 3.04362-7.09879 3.36589-7.51416 3.59863-8.0083ZM12.5754-8.0083 12.5754 0 10.3625 0 10.3625-5.24756C10.0044-4.97542 9.65796-4.75521 9.32316-4.58691 8.98836-4.41862 8.56852-4.25749 8.06364-4.10352L8.06364-5.89746C8.80843-6.13737 9.38672-6.42562 9.7985-6.76221 10.2103-7.09879 10.5326-7.51416 10.7653-8.0083ZM14.7845-3.96924C14.7845-5.46598 15.054-6.51335 15.5929-7.11133 16.1318-7.70931 16.9526-8.0083 18.0555-8.0083 18.5854-8.0083 19.0205-7.94295 19.3607-7.81226 19.7008-7.68156 19.9784-7.51147 20.1932-7.302 20.408-7.09253 20.5772-6.87231 20.7008-6.64136 20.8243-6.4104 20.9237-6.14095 20.9989-5.83301 21.1457-5.24577 21.2191-4.63346 21.2191-3.99609 21.2191-2.56738 20.9774-1.52181 20.494-0.859375 20.0106-0.19694 19.1781 0.134277 17.9964 0.134277 17.334 0.134277 16.7987 0.0286458 16.3905-0.182617 15.9823-0.39388 15.6475-0.703613 15.3861-1.11182 15.1963-1.40186 15.0486-1.79842 14.943-2.30151 14.8373-2.80461 14.7845-3.36051 14.7845-3.96924ZM16.9544-3.96387C16.9544-2.96126 17.043-2.27645 17.2203-1.90942 17.3975-1.5424 17.6545-1.35889 17.991-1.35889 18.2131-1.35889 18.4055-1.43677 18.5684-1.59253 18.7314-1.74829 18.8513-1.99447 18.9283-2.33105 19.0053-2.66764 19.0438-3.19222 19.0438-3.90479 19.0438-4.95036 18.9552-5.65308 18.7779-6.01294 18.6007-6.3728 18.3348-6.55273 17.9803-6.55273 17.6187-6.55273 17.3573-6.36922 17.1961-6.0022 17.035-5.63517 16.9544-4.95573 16.9544-3.96387ZM28.5093 0 26.0423 0 25.2085-1.57524C25.0756-1.82522 24.9454-1.98235 24.818-2.04664 24.6905-2.11092 24.5334-2.14307 24.3467-2.14307L24.3467 0 22.1606 0 22.1606-5.7041 24.3467-5.7041 24.3467-3.6416C24.5257-3.65951 24.6582-3.71859 24.7441-3.81885 24.8301-3.91911 24.9545-4.13932 25.1174-4.47949 25.2804-4.81966 25.4263-5.06852 25.5552-5.22607 25.6841-5.38363 25.8488-5.50179 26.0493-5.58057 26.2498-5.65934 26.5005-5.70947 26.8013-5.73096 27.1021-5.75244 27.5496-5.76318 28.144-5.76318L28.144-4.21094 28.0474-4.21094C27.7537-4.21094 27.5299-4.1993 27.376-4.17603 27.222-4.15275 27.0985-4.10352 27.0054-4.02832 26.9123-3.95312 26.8048-3.79915 26.6831-3.56641 26.5614-3.33366 26.4602-3.17163 26.3796-3.08032 26.2991-2.98901 26.18-2.92725 26.0225-2.89502 26.3268-2.86637 26.5614-2.80103 26.7261-2.69897 26.8908-2.59692 27.1396-2.26839 27.4727-1.71338ZM29.1444-7.87402 33.6991-7.87402C34.4582-7.87402 35.0409-7.68604 35.4473-7.31006 35.8538-6.93408 36.057-6.46859 36.057-5.91357 36.057-5.44808 35.9119-5.04883 35.6219-4.71582 35.4286-4.49381 35.1457-4.31836 34.7733-4.18945 35.339-4.05339 35.7553-3.81974 36.0221-3.48853 36.2888-3.15731 36.4222-2.74105 36.4222-2.23975 36.4222-1.83154 36.3273-1.46452 36.1375-1.13867 35.9478-0.812826 35.6882-0.555013 35.3587-0.365234 35.1546-0.24707 34.8467-0.161133 34.4349-0.107422 33.887-0.0358073 33.5236 0 33.3446 0L29.1444 0ZM31.599-4.78564 32.6571-4.78564C33.0366-4.78564 33.3007-4.85099 33.4493-4.98169 33.5979-5.11239 33.6722-5.30127 33.6722-5.54834 33.6722-5.77751 33.5979-5.95654 33.4493-6.08545 33.3007-6.21436 33.042-6.27881 32.6732-6.27881L31.599-6.27881ZM31.599-1.69189 32.8397-1.69189C33.2586-1.69189 33.554-1.76619 33.7259-1.91479 33.8978-2.0634 33.9837-2.26302 33.9837-2.51367 33.9837-2.74642 33.8987-2.93351 33.7286-3.07495 33.5585-3.21639 33.2604-3.28711 32.8343-3.28711L31.599-3.28711Z"
                                    fill="#828897"
                                    transform="translate(9.62338 17)"
                                />
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Arial Black,Arial Black_MSFontService,sans-serif"
                            font-weight="900"
                            font-size="11"
                            transform="translate(442.825 89)"
                        >
                            110кВ
                        </text>
                        <path
                            d="M1191 251.494 1192.51 617.991 1189.51 618.004 1188 251.506ZM1185 251.519C1184.99 249.033 1187 247.01 1189.48 247 1191.97 246.99 1193.99 248.996 1194 251.481 1194.01 253.967 1192 255.99 1189.52 256 1187.03 256.01 1185.01 254.004 1185 251.519Z"
                            fill="#663300"
                        />
                        <path
                            d="M0 0 782.224 0.0600525"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 407.5 617.56)"
                        />
                        <path
                            d="M0 0 0.892913 142.925"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1059.39 256.5)"
                        />
                        <path
                            d="M518.5 445.5 518.5 584.432"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 248.625 0.000104987"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 877.125 525.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(756.907 559)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(763.073 559)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(766.24 559)"
                        >
                            СН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(779.073 559)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(782.24 559)"
                        >
                            Т10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(473.757 559)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(479.924 559)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(483.09 559)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(492.424 559)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(495.59 559)"
                        >
                            Т7
                        </text>
                        <g
                            clip-path="url(#clip12)"
                            filter="url(#fx3)"
                            transform="translate(840 504)"
                        >
                            <g>
                                <path
                                    d="M0.800293-7.87402 7.3208-7.87402 7.3208-6.19287 3.23877-6.19287 3.23877-4.94141 7.02539-4.94141 7.02539-3.33545 3.23877-3.33545 3.23877-1.7832 7.43896-1.7832 7.43896 0 0.800293 0ZM2.1377-9.71631 3.53418-9.71631 3.53418-8.37354 2.1377-8.37354ZM4.41504-9.71631 5.82764-9.71631 5.82764-8.37354 4.41504-8.37354ZM7.91911-7.87402 15.3151-7.87402 15.3151-5.92969 12.8337-5.92969 12.8337 0 10.4006 0 10.4006-5.92969 7.91911-5.92969ZM23.2987 0 20.5585 0 19.6094-2.03329C19.3848-2.51418 19.2101-2.81472 19.0854-2.93493 18.9606-3.05513 18.7877-3.11523 18.5667-3.11523L18.5667 0 16.139 0 16.139-7.87402 18.5667-7.87402 18.5667-4.8501C18.778-4.86084 18.9427-4.93604 19.0609-5.07568 19.179-5.21533 19.3634-5.61637 19.6141-6.27881 19.7967-6.76937 19.9811-7.12117 20.1673-7.33423 20.3535-7.54728 20.6561-7.70036 21.075-7.79346 21.494-7.88656 22.151-7.93311 23.0462-7.93311L23.0462-6.26807 22.9227-6.26807C22.5073-6.26807 22.1994-6.18929 21.9989-6.03174 21.7983-5.87419 21.6336-5.61906 21.5047-5.26636 21.3758-4.91366 21.2371-4.65047 21.0885-4.47681 20.9399-4.30314 20.7367-4.16439 20.4788-4.06055 20.8298-3.94596 21.1359-3.74813 21.3973-3.46704 21.6587-3.18595 21.9362-2.74821 22.2298-2.15381Z"
                                    fill="#828897"
                                    transform="translate(9.29553 17)"
                                />
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Arial Black,Arial Black_MSFontService,sans-serif"
                            font-weight="900"
                            font-size="11"
                            transform="translate(848.497 520)"
                        >
                            ЁТК
                        </text>
                        <g
                            clip-path="url(#clip13)"
                            filter="url(#fx4)"
                            transform="translate(863 504)"
                        >
                            <g>
                                <path
                                    d="M0.241699-3.7168 3.42139-3.7168 3.42139-2.0249 0.241699-2.0249Z"
                                    fill="#828897"
                                    transform="translate(9.46216 17)"
                                />
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Arial Black,Arial Black_MSFontService,sans-serif"
                            font-weight="900"
                            font-size="11"
                            transform="translate(871.664 520)"
                        >
                            -
                        </text>
                        <g
                            clip-path="url(#clip14)"
                            filter="url(#fx5)"
                            transform="translate(866 504)"
                        >
                            <g>
                                <path
                                    d="M5.40869-8.0083 5.40869 0 3.1958 0 3.1958-5.24756C2.83773-4.97542 2.49129-4.75521 2.15649-4.58691 1.8217-4.41862 1.40186-4.25749 0.896973-4.10352L0.896973-5.89746C1.64176-6.13737 2.22005-6.42562 2.63184-6.76221 3.04362-7.09879 3.36589-7.51416 3.59863-8.0083ZM7.61784-3.96924C7.61784-5.46598 7.88729-6.51335 8.42619-7.11133 8.96509-7.70931 9.78597-8.0083 10.8888-8.0083 11.4188-8.0083 11.8538-7.94295 12.194-7.81226 12.5342-7.68156 12.8117-7.51147 13.0265-7.302 13.2414-7.09253 13.4106-6.87231 13.5341-6.64136 13.6576-6.4104 13.757-6.14095 13.8322-5.83301 13.979-5.24577 14.0524-4.63346 14.0524-3.99609 14.0524-2.56738 13.8107-1.52181 13.3273-0.859375 12.8439-0.19694 12.0114 0.134277 10.8298 0.134277 10.1673 0.134277 9.632 0.0286458 9.2238-0.182617 8.81559-0.39388 8.48079-0.703613 8.2194-1.11182 8.02962-1.40186 7.88192-1.79842 7.77629-2.30151 7.67065-2.80461 7.61784-3.36051 7.61784-3.96924ZM9.78776-3.96387C9.78776-2.96126 9.87638-2.27645 10.0536-1.90942 10.2309-1.5424 10.4878-1.35889 10.8244-1.35889 11.0464-1.35889 11.2389-1.43677 11.4018-1.59253 11.5647-1.74829 11.6847-1.99447 11.7616-2.33105 11.8386-2.66764 11.8771-3.19222 11.8771-3.90479 11.8771-4.95036 11.7885-5.65308 11.6112-6.01294 11.434-6.3728 11.1681-6.55273 10.8136-6.55273 10.452-6.55273 10.1906-6.36922 10.0295-6.0022 9.86833-5.63517 9.78776-4.95573 9.78776-3.96387ZM21.3426 0 18.8756 0 18.0418-1.57524C17.9089-1.82522 17.7788-1.98235 17.6513-2.04664 17.5238-2.11092 17.3667-2.14307 17.18-2.14307L17.18 0 14.994 0 14.994-5.7041 17.18-5.7041 17.18-3.6416C17.3591-3.65951 17.4915-3.71859 17.5775-3.81885 17.6634-3.91911 17.7878-4.13932 17.9508-4.47949 18.1137-4.81966 18.2596-5.06852 18.3885-5.22607 18.5174-5.38363 18.6821-5.50179 18.8827-5.58057 19.0832-5.65934 19.3338-5.70947 19.6346-5.73096 19.9354-5.75244 20.383-5.76318 20.9774-5.76318L20.9774-4.21094 20.8807-4.21094C20.5871-4.21094 20.3633-4.1993 20.2093-4.17603 20.0553-4.15275 19.9318-4.10352 19.8387-4.02832 19.7456-3.95312 19.6382-3.79915 19.5164-3.56641 19.3947-3.33366 19.2935-3.17163 19.213-3.08032 19.1324-2.98901 19.0133-2.92725 18.8558-2.89502 19.1602-2.86637 19.3947-2.80103 19.5594-2.69897 19.7241-2.59692 19.973-2.26839 20.306-1.71338ZM21.9777-7.87402 26.5324-7.87402C27.2915-7.87402 27.8743-7.68604 28.2807-7.31006 28.6871-6.93408 28.8903-6.46859 28.8903-5.91357 28.8903-5.44808 28.7453-5.04883 28.4552-4.71582 28.2619-4.49381 27.979-4.31836 27.6066-4.18945 28.1724-4.05339 28.5886-3.81974 28.8554-3.48853 29.1222-3.15731 29.2555-2.74105 29.2555-2.23975 29.2555-1.83154 29.1606-1.46452 28.9709-1.13867 28.7811-0.812826 28.5215-0.555013 28.1921-0.365234 27.988-0.24707 27.68-0.161133 27.2682-0.107422 26.7204-0.0358073 26.3569 0 26.1779 0L21.9777 0ZM24.4323-4.78564 25.4904-4.78564C25.87-4.78564 26.134-4.85099 26.2826-4.98169 26.4312-5.11239 26.5055-5.30127 26.5055-5.54834 26.5055-5.77751 26.4312-5.95654 26.2826-6.08545 26.134-6.21436 25.8753-6.27881 25.5065-6.27881L24.4323-6.27881ZM24.4323-1.69189 25.673-1.69189C26.092-1.69189 26.3874-1.76619 26.5592-1.91479 26.7311-2.0634 26.8171-2.26302 26.8171-2.51367 26.8171-2.74642 26.732-2.93351 26.5619-3.07495 26.3918-3.21639 26.0938-3.28711 25.6676-3.28711L24.4323-3.28711Z"
                                    fill="#828897"
                                    transform="translate(9.96216 17)"
                                />
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Arial Black,Arial Black_MSFontService,sans-serif"
                            font-weight="900"
                            font-size="11"
                            transform="translate(875.164 520)"
                        >
                            10кВ
                        </text>
                        <a href="<?= $urlSwitch16 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 470.5 222.5)"
                            />
                        </a>
                        <path
                            d="M697 525.496 697.138 578.182 694.138 578.189 694 525.504ZM691 525.512C690.994 523.027 693.003 521.007 695.488 521 697.974 520.994 699.994 523.003 700 525.488 700.007 527.974 697.997 529.994 695.512 530 693.027 530.007 691.007 527.997 691 525.512ZM695.638 578.186 700.13 575.174 695.653 584.186 691.13 575.197Z"
                            fill="#6600CC"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(707.11 559)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(713.276 559)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(716.443 559)"
                        >
                            СН
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(729.276 559)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(732.443 559)"
                        >
                            Т11
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(423.174 559)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(429.341 559)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(432.507 559)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(441.841 559)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(445.007 559)"
                        >
                            Т7
                        </text>
                        <path
                            d="M840.5 209.5 1245.25 209.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g
                            clip-path="url(#clip15)"
                            filter="url(#fx6)"
                            transform="translate(1021 75)"
                        >
                            <g>
                                <path
                                    d="M0.499512-3.93164C0.499512-5.21712 0.857585-6.21794 1.57373-6.93408 2.28988-7.65023 3.28711-8.0083 4.56543-8.0083 5.87598-8.0083 6.88574-7.65649 7.59473-6.95288 8.30371-6.24927 8.6582-5.26367 8.6582-3.99609 8.6582-3.07585 8.50334-2.32121 8.1936-1.73218 7.88387-1.14315 7.43628-0.684814 6.85083-0.357178 6.26538-0.029541 5.53581 0.134277 4.66211 0.134277 3.77409 0.134277 3.03914-0.00716146 2.45728-0.290039 1.87541-0.572917 1.40365-1.02051 1.04199-1.63281 0.680339-2.24512 0.499512-3.01139 0.499512-3.93164ZM2.93262-3.9209C2.93262-3.12598 3.08032-2.55485 3.37573-2.20752 3.67114-1.86019 4.07308-1.68652 4.58154-1.68652 5.10433-1.68652 5.50895-1.85661 5.79541-2.19678 6.08187-2.53695 6.2251-3.14746 6.2251-4.02832 6.2251-4.76953 6.0756-5.31112 5.77661-5.65308 5.47762-5.99504 5.0721-6.16602 4.56006-6.16602 4.0695-6.16602 3.67562-5.99235 3.37842-5.64502 3.08122-5.29769 2.93262-4.72298 2.93262-3.9209ZM9.08578-7.87402 16.4818-7.87402 16.4818-5.92969 14.0003-5.92969 14.0003 0 11.5672 0 11.5672-5.92969 9.08578-5.92969ZM24.4653 0 21.7252 0 20.7761-2.03329C20.5515-2.51418 20.3768-2.81472 20.252-2.93493 20.1273-3.05513 19.9544-3.11523 19.7334-3.11523L19.7334 0 17.3057 0 17.3057-7.87402 19.7334-7.87402 19.7334-4.8501C19.9447-4.86084 20.1094-4.93604 20.2275-5.07568 20.3457-5.21533 20.5301-5.61637 20.7808-6.27881 20.9634-6.76937 21.1478-7.12117 21.334-7.33423 21.5202-7.54728 21.8228-7.70036 22.2417-7.79346 22.6606-7.88656 23.3177-7.93311 24.2129-7.93311L24.2129-6.26807 24.0894-6.26807C23.674-6.26807 23.366-6.18929 23.1655-6.03174 22.965-5.87419 22.8003-5.61906 22.6714-5.26636 22.5425-4.91366 22.4037-4.65047 22.2551-4.47681 22.1065-4.30314 21.9033-4.16439 21.6455-4.06055 21.9964-3.94596 22.3026-3.74813 22.564-3.46704 22.8254-3.18595 23.1029-2.74821 23.3965-2.15381Z"
                                    fill="#828897"
                                    transform="translate(9.66821 16)"
                                />
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Arial Black,Arial Black_MSFontService,sans-serif"
                            font-weight="900"
                            font-size="11"
                            transform="translate(1029.87 90)"
                        >
                            ОТК
                        </text>
                        <g
                            clip-path="url(#clip16)"
                            filter="url(#fx7)"
                            transform="translate(1046 75)"
                        >
                            <g>
                                <path
                                    d="M0.241699-3.7168 3.42139-3.7168 3.42139-2.0249 0.241699-2.0249Z"
                                    fill="#828897"
                                    transform="translate(9.00159 16)"
                                />
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Arial Black,Arial Black_MSFontService,sans-serif"
                            font-weight="900"
                            font-size="11"
                            transform="translate(1054.2 90)"
                        >
                            -
                        </text>
                        <g
                            clip-path="url(#clip17)"
                            filter="url(#fx8)"
                            transform="translate(1049 75)"
                        >
                            <g>
                                <path
                                    d="M2.57275-5.59668 0.504883-5.96729C0.676758-6.62614 1.00708-7.13102 1.49585-7.48193 1.98462-7.83284 2.6766-8.0083 3.57178-8.0083 4.59945-8.0083 5.34245-7.81673 5.80078-7.43359 6.25911-7.05046 6.48828-6.56885 6.48828-5.98877 6.48828-5.6486 6.39518-5.34066 6.20898-5.06494 6.02279-4.78923 5.7417-4.54753 5.36572-4.33984 5.67008-4.26465 5.90283-4.17692 6.06396-4.07666 6.32536-3.91553 6.52856-3.70337 6.67358-3.44019 6.8186-3.177 6.89111-2.86279 6.89111-2.49756 6.89111-2.03923 6.77116-1.59969 6.53125-1.17896 6.29134-0.758219 5.9458-0.434163 5.49463-0.206787 5.04346 0.0205892 4.45085 0.134277 3.7168 0.134277 3.00065 0.134277 2.43579 0.0501302 2.02222-0.118164 1.60864-0.286458 1.26847-0.532633 1.00171-0.856689 0.734945-1.18075 0.529948-1.58805 0.386719-2.07861L2.57275-2.36865C2.65869-1.92822 2.79207-1.62297 2.9729-1.45288 3.15373-1.2828 3.38379-1.19775 3.66309-1.19775 3.95671-1.19775 4.20109-1.30518 4.39624-1.52002 4.59139-1.73486 4.68896-2.02132 4.68896-2.37939 4.68896-2.74463 4.59497-3.02751 4.40698-3.22803 4.21899-3.42855 3.96387-3.52881 3.6416-3.52881 3.46973-3.52881 3.2334-3.48584 2.93262-3.3999L3.04541-4.96289C3.16715-4.94499 3.26204-4.93604 3.33008-4.93604 3.61654-4.93604 3.85555-5.02734 4.04712-5.20996 4.23869-5.39258 4.33447-5.60921 4.33447-5.85986 4.33447-6.09977 4.26286-6.29134 4.11963-6.43457 3.9764-6.5778 3.77946-6.64941 3.52881-6.64941 3.271-6.64941 3.06152-6.57153 2.90039-6.41577 2.73926-6.26001 2.63005-5.98698 2.57275-5.59668ZM8.50407-7.87402 13.6979-7.87402 13.6979-6.12842 10.1799-6.12842 9.99186-4.94678C10.2354-5.06136 10.4762-5.1473 10.7143-5.20459 10.9524-5.26188 11.1878-5.29053 11.4206-5.29053 12.2083-5.29053 12.8475-5.05241 13.3381-4.57617 13.8286-4.09993 14.0739-3.50016 14.0739-2.77686 14.0739-2.26839 13.9477-1.77962 13.6952-1.31055 13.4428-0.841471 13.0847-0.483398 12.621-0.236328 12.1573 0.0107422 11.5638 0.134277 10.8405 0.134277 10.3213 0.134277 9.87638 0.0850423 9.50578-0.0134277 9.13517-0.111898 8.82007-0.258708 8.56047-0.453857 8.30086-0.649007 8.09049-0.870117 7.92936-1.11719 7.76823-1.36426 7.63395-1.6722 7.52653-2.04102L9.73942-2.28271C9.79313-1.92822 9.91846-1.65877 10.1154-1.47437 10.3123-1.28996 10.5469-1.19775 10.819-1.19775 11.1234-1.19775 11.3749-1.31323 11.5736-1.54419 11.7724-1.77515 11.8717-2.11979 11.8717-2.57812 11.8717-3.0472 11.7715-3.39095 11.571-3.60938 11.3704-3.8278 11.1037-3.93701 10.7707-3.93701 10.5594-3.93701 10.3553-3.88509 10.1584-3.78125 10.0116-3.70605 9.85042-3.56999 9.67497-3.37305L7.8112-3.6416ZM21.3426 0 18.8756 0 18.0418-1.57524C17.9089-1.82522 17.7788-1.98235 17.6513-2.04664 17.5238-2.11092 17.3667-2.14307 17.18-2.14307L17.18 0 14.994 0 14.994-5.7041 17.18-5.7041 17.18-3.6416C17.3591-3.65951 17.4915-3.71859 17.5775-3.81885 17.6634-3.91911 17.7878-4.13932 17.9508-4.47949 18.1137-4.81966 18.2596-5.06852 18.3885-5.22607 18.5174-5.38363 18.6821-5.50179 18.8827-5.58057 19.0832-5.65934 19.3338-5.70947 19.6346-5.73096 19.9354-5.75244 20.383-5.76318 20.9774-5.76318L20.9774-4.21094 20.8807-4.21094C20.5871-4.21094 20.3633-4.1993 20.2093-4.17603 20.0553-4.15275 19.9318-4.10352 19.8387-4.02832 19.7456-3.95312 19.6382-3.79915 19.5164-3.56641 19.3947-3.33366 19.2935-3.17163 19.213-3.08032 19.1324-2.98901 19.0133-2.92725 18.8558-2.89502 19.1602-2.86637 19.3947-2.80103 19.5594-2.69897 19.7241-2.59692 19.973-2.26839 20.306-1.71338ZM21.9777-7.87402 26.5324-7.87402C27.2915-7.87402 27.8743-7.68604 28.2807-7.31006 28.6871-6.93408 28.8903-6.46859 28.8903-5.91357 28.8903-5.44808 28.7453-5.04883 28.4552-4.71582 28.2619-4.49381 27.979-4.31836 27.6066-4.18945 28.1724-4.05339 28.5886-3.81974 28.8554-3.48853 29.1222-3.15731 29.2555-2.74105 29.2555-2.23975 29.2555-1.83154 29.1606-1.46452 28.9709-1.13867 28.7811-0.812826 28.5215-0.555013 28.1921-0.365234 27.988-0.24707 27.68-0.161133 27.2682-0.107422 26.7204-0.0358073 26.3569 0 26.1779 0L21.9777 0ZM24.4323-4.78564 25.4904-4.78564C25.87-4.78564 26.134-4.85099 26.2826-4.98169 26.4312-5.11239 26.5055-5.30127 26.5055-5.54834 26.5055-5.77751 26.4312-5.95654 26.2826-6.08545 26.134-6.21436 25.8753-6.27881 25.5065-6.27881L24.4323-6.27881ZM24.4323-1.69189 25.673-1.69189C26.092-1.69189 26.3874-1.76619 26.5592-1.91479 26.7311-2.0634 26.8171-2.26302 26.8171-2.51367 26.8171-2.74642 26.732-2.93351 26.5619-3.07495 26.3918-3.21639 26.0938-3.28711 25.6676-3.28711L24.4323-3.28711Z"
                                    fill="#828897"
                                    transform="translate(9.50159 16)"
                                />
                            </g>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Arial Black,Arial Black_MSFontService,sans-serif"
                            font-weight="900"
                            font-size="11"
                            transform="translate(1057.7 90)"
                        >
                            35кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1010.95 286)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1017.11 286)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1020.28 286)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1029.61 286)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1032.78 286)"
                        >
                            Т8
                        </text>
                        <a href="<?= $urlSwitch26 ?>">
                            <rect
                                id="c109"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 61.5001 575.5)"
                            />
                        </a>
                        <path
                            d="M30.5001 542.5 30.7288 575.706"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M112.5 542.5 112.729 575.706"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 33.392 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 113.892 566.5)"
                        />
                        <path
                            d="M0 0 32.0518 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 61.5518 566.5)"
                        />
                        <path
                            d="M72.8334 542.5 72.8335 554.222 70.1668 554.222 70.1667 542.5ZM77.3185 546.894 71.5002 556.868 65.6817 546.894C65.3107 546.258 65.5255 545.442 66.1616 545.07 66.7976 544.699 67.6141 544.914 67.9851 545.55L72.6518 553.55 70.3484 553.55 75.015 545.55C75.3861 544.914 76.2025 544.699 76.8386 545.07 77.4746 545.441 77.6895 546.258 77.3185 546.894Z"
                            fill="#0099FF"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(50.605 537)"
                        >
                            ОВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(68.105 537)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(71.605 537)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(75.105 537)"
                        >
                            СШ
                        </text>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 28.5001 569.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 109.5 569.5)"
                        />
                        <a href="<?= $urlSwitch27 ?>">
                            <rect
                                id="c115"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 174.5 575.5)"
                            />
                        </a>
                        <path
                            d="M142.5 541.5 142.729 574.706"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M224.5 542.5 224.729 575.706"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 33.392 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 225.892 566.5)"
                        />
                        <path
                            d="M0 0 32.0518 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 174.552 566.5)"
                        />
                        <path
                            d="M184.833 542.5 184.833 554.222 182.167 554.222 182.167 542.5ZM189.318 546.894 183.5 556.868 177.682 546.894C177.311 546.258 177.525 545.442 178.162 545.07 178.798 544.699 179.614 544.914 179.985 545.55L184.652 553.55 182.348 553.55 187.015 545.55C187.386 544.914 188.202 544.699 188.839 545.07 189.475 545.441 189.689 546.258 189.318 546.894Z"
                            fill="#0099FF"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(162.987 539)"
                        >
                            ОВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(180.487 539)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(190.153 539)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(193.653 539)"
                        >
                            СШ
                        </text>
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 140.5 569.5)"
                        />
                        <path
                            d="M0 2.5C-3.18283e-16 1.11929 1.11929 -3.18283e-16 2.5 -6.36567e-16 3.88071-1.27313e-15 5 1.11929 5 2.5 5 3.88071 3.88071 5 2.5 5 1.11929 5-1.59142e-15 3.88071 0 2.5Z"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 221.5 568.5)"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(563.361 36)"
                        >
                            Фарход ГЭС
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(683.601 36)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="21"
                            transform="translate(690.767 36)"
                        >
                            16
                        </text>
                        <a href="<?= $urlSwitch29 ?>">
                            <rect
                                id="c163"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 509.5 564.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch5 ?>">
                            <rect
                                id="c73"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 512.5 190.5)"
                            />
                        </a>
                        <path
                            d="M520.435 171.873 520.241 157.851 522.907 157.814 523.102 171.836ZM521.574 157.833 517.611 160.555 521.5 152.5 525.611 160.444Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.33324-0.0157523 1.60148 22.6876-1.065 22.7191-1.33324 0.0157523ZM-3.99972 0.047257C-4.02582-2.16173-2.25624-3.97362-0.047257-3.99972 2.16173-4.02582 3.97362-2.25624 3.99972-0.047257 4.02582 2.16173 2.25624 3.97362 0.047257 3.99972-2.16173 4.02582-3.97362 2.25624-3.99972 0.047257Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 521.5 213.203)"
                        />
                        <a href="<?= $urlSwitch6 ?>">
                            <rect
                                id="c67"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 599.5 191.5)"
                            />
                        </a>
                        <path
                            d="M607.435 172.873 607.241 158.851 609.907 158.814 610.102 172.836ZM608.574 158.833 604.611 161.555 608.5 153.5 612.611 161.444Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.33323-0.0168719 1.60157 21.188-1.06488 21.2217-1.33323 0.0168719ZM-3.99968 0.0506158C-4.02763-2.15835-2.25958-3.97173-0.0506158-3.99968 2.15835-4.02763 3.97173-2.25958 3.99968-0.0506158 4.02763 2.15835 2.25958 3.97173 0.0506158 3.99968-2.15835 4.02763-3.97173 2.25958-3.99968 0.0506158Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 608.5 212.705)"
                        />
                        <a href="<?= $urlSwitch8 ?>">
                            <rect
                                id="c10001"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 764.5 191.5)"
                            />
                        </a>
                        <path
                            d="M772.435 172.873 772.241 158.851 774.907 158.814 775.102 172.836ZM773.574 158.833 769.611 161.555 773.5 153.5 777.611 161.444Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.33323-0.0168719 1.60157 21.188-1.06488 21.2217-1.33323 0.0168719ZM-3.99968 0.0506158C-4.02763-2.15835-2.25958-3.97173-0.0506158-3.99968 2.15835-4.02763 3.97173-2.25958 3.99968-0.0506158 4.02763 2.15835 2.25958 3.97173 0.0506158 3.99968-2.15835 4.02763-3.97173 2.25958-3.99968 0.0506158Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 773.5 212.705)"
                        />
                        <a href="<?= $urlSwitch1 ?>">
                            <rect
                                id="c103"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 113.5 191.5)"
                            />
                        </a>
                        <path
                            d="M122.435 172.872 122.241 158.851 124.907 158.814 125.102 172.835ZM123.574 158.833 119.611 161.555 123.5 153.5 127.611 161.444Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.33323-0.0168719 1.60157 21.1881-1.06488 21.2218-1.33323 0.0168719ZM-3.99968 0.0506156C-4.02763-2.15835-2.25958-3.97173-0.0506156-3.99968 2.15835-4.02763 3.97173-2.25958 3.99968-0.0506156 4.02763 2.15835 2.25958 3.97173 0.0506156 3.99968-2.15835 4.02763-3.97173 2.25958-3.99968 0.0506156Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 123.5 212.705)"
                        />
                        <a href="<?= $urlSwitch3 ?>">
                            <rect
                                id="c91"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 281.5 191.5)"
                            />
                        </a>
                        <path
                            d="M289.435 172.873 289.241 158.851 291.907 158.814 292.102 172.836ZM290.574 158.833 286.611 161.555 290.5 153.5 294.611 161.444Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.33323-0.0168719 1.60157 21.188-1.06488 21.2217-1.33323 0.0168719ZM-3.99968 0.0506158C-4.02763-2.15835-2.25958-3.97173-0.0506158-3.99968 2.15835-4.02763 3.97173-2.25958 3.99968-0.0506158 4.02763 2.15835 2.25958 3.97173 0.0506158 3.99968-2.15835 4.02763-3.97173 2.25958-3.99968 0.0506158Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 290.5 212.705)"
                        />
                        <a href="<?= $urlSwitch4 ?>">
                            <rect
                                id="c85"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 365.5 190.5)"
                            />
                        </a>
                        <path
                            d="M374.435 171.872 374.241 157.851 376.907 157.814 377.102 171.835ZM375.574 157.833 371.611 160.555 375.5 152.5 379.611 160.444Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.33331-0.00748596 1.58224 44.3279-1.08439 44.3429-1.33331 0.00748596ZM-3.99994 0.0224579C-4.01234-2.18665-2.23156-3.98753-0.0224579-3.99994 2.18665-4.01234 3.98753-2.23156 3.99994-0.0224579 4.01234 2.18665 2.23156 3.98753 0.0224579 3.99994-2.18665 4.01234-3.98753 2.23156-3.99994 0.0224579Z"
                            fill="#0099FF"
                            transform="matrix(-1 0 0 1 122.749 252.5)"
                        />
                        <a href="<?= $urlTransformer1 ?>">
                            <path id="c9002"
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 107.5 350.5)"
                            />
                            <path id="c9001"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#4472C4"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 107.5 327.5)"
                            />
                        </a>
                        <path
                            d="M123.659 381.882 123.5 350.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch19 ?>">
                            <rect
                                id="c9"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 114.5 287.5)"
                            />
                        </a>
                        <path
                            d="M74.9742 436.324 168.082 436.324 168.082 449.124 74.9742 449.124Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.9742 449.124 168.082 449.124 168.082 461.924 74.9742 461.924Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.9742 461.924 168.082 461.924 168.082 474.724 74.9742 474.724Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.9742 474.724 168.082 474.724 168.082 487.524 74.9742 487.524Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.9742 487.524 168.082 487.524 168.082 500.324 74.9742 500.324Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.9742 500.324 168.082 500.324 168.082 513.124 74.9742 513.124Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.3075 449.124 168.749 449.124"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.3075 461.924 168.749 461.924"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.3075 474.724 168.749 474.724"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.3075 487.524 168.749 487.524"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.3075 500.324 168.749 500.324"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.9742 435.657 74.9742 513.79"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M168.082 435.657 168.082 513.79"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.3075 436.324 168.749 436.324"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M74.3075 513.124 168.749 513.124"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g10"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(78.7537 446)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g12"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(78.7537 459)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a10"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(78.7537 472)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k10"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(78.7537 485)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n10"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(78.7537 498)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w10" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(78.7537 510)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                            d="M269.5 287.5 269.677 296.973"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlTransformer2 ?>">
                            <path id="c2002"
                                d="M0 15.5C-1.97336e-15 6.93959 6.93959-1.97336e-15 15.5-3.94671e-15 24.0604-7.89343e-15 31 6.93959 31 15.5 31 24.0604 24.0604 31 15.5 31 6.93959 31-9.86678e-15 24.0604 0 15.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 254.5 351.5)"
                            />
                            <path id="c2001"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#4472C4"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 254.5 327.5)"
                            />
                        </a>
                        <path
                            d="M270.659 382.882 270.5 351.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch20 ?>">
                            <rect
                                id="c20"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 260.5 287.5)"
                            />
                        </a>
                        <path
                            d="M221.965 436.723 315.073 436.723 315.073 449.523 221.965 449.523Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.965 449.523 315.073 449.523 315.073 462.323 221.965 462.323Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.965 462.323 315.073 462.323 315.073 475.123 221.965 475.123Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.965 475.123 315.073 475.123 315.073 487.923 221.965 487.923Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.965 487.923 315.073 487.923 315.073 500.723 221.965 500.723Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.965 500.723 315.073 500.723 315.073 513.523 221.965 513.523Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.298 449.523 315.74 449.523"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.298 462.323 315.74 462.323"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.298 475.123 315.74 475.123"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.298 487.923 315.74 487.923"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.298 500.723 315.74 500.723"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.965 436.056 221.965 514.189"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M315.073 436.056 315.073 514.189"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.298 436.723 315.74 436.723"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M221.298 513.523 315.74 513.523"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g21"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(225.744 447)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g23"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(225.744 460)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a21"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(225.744 472)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k21"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(225.744 485)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n21"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(225.744 498)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w21" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(225.744 511)"
                            >
                                Qвода
                            </text>
                        </g>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(365.228 296)"
                        >
                            ВТ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(378.895 296)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(382.395 296)"
                        >
                            7
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(387.728 296)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(391.228 296)"
                        >
                            110
                        </text>
                        <path
                            d="M422 252.5 422 320.532 419 320.532 419 252.5ZM416 252.5C416 250.015 418.015 248 420.5 248 422.985 248 425 250.015 425 252.5 425 254.985 422.985 257 420.5 257 418.015 257 416 254.985 416 252.5Z"
                            fill="#0099FF"
                        />
                        <a href="<?= $urlTransformer5 ?>">
                            <path id="c3"
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 417.5 373.5)"
                            />
                            <path id="c1"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 405.5 351.5)"
                            />
                            <path id="c2"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 393.5 374.5)"
                            />
                        </a>
                        <path
                            d="M433.5 446.311 433.5 374.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 245.254"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 408.5 619.754)"
                        />
                        <a href="<?= $urlSwitch21 ?>">
                            <rect
                                id="c79"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 411.5 302.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch28 ?>">
                            <rect
                                id="c126"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 398.5 564.5)"
                            />
                        </a>
                        <path
                            d="M518.5 583.5 642.768 583.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M644 525.5 644 585.239 641 585.239 641 525.5ZM638 525.5C638 523.015 640.015 521 642.5 521 644.985 521 647 523.015 647 525.5 647 527.985 644.985 530 642.5 530 640.015 530 638 527.985 638 525.5Z"
                            fill="#6600CC"
                        />
                        <a href="<?= $urlSwitch32 ?>">
                            <rect
                                id="c10002"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 741.5 534.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch30 ?>">
                            <rect
                                id="c168"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 687.5 564.5)"
                            />
                        </a>
                        <path
                            d="M810 525.488 810.401 576.637 807.401 576.661 807 525.512ZM804 525.535C803.981 523.05 805.98 521.02 808.465 521 810.95 520.981 812.98 522.98 813 525.465 813.019 527.95 811.021 529.98 808.535 530 806.05 530.019 804.02 528.021 804 525.535ZM808.901 576.649 813.378 573.614 808.948 582.649 804.378 573.684Z"
                            fill="#6600CC"
                        />
                        <a href="<?= $urlSwitch31 ?>">
                            <rect
                                id="c198"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 799.5 565.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(614.073 306)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(620.573 306)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(624.073 306)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(614.073 319)"
                        >
                            10/110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(646.406 319)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(614.073 332)"
                        >
                            ОДЦ16
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(647.406 332)"
                        >
                            000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(614.073 345)"
                        >
                            А/Б/С
                        </text>
                        <path
                            d="M598.833 251.498 598.901 296.667 596.234 296.671 596.167 251.502ZM593.5 251.506C593.497 249.297 595.285 247.503 597.494 247.5 599.703 247.497 601.497 249.285 601.5 251.494 601.503 253.703 599.715 255.497 597.506 255.5 595.297 255.503 593.503 253.715 593.5 251.506Z"
                            fill="#0099FF"
                        />
                        <a href="<?= $urlTransformer3 ?>">
                            <path id="c3102"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 582.5 350.5)"
                            />
                            <path id="c3101"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#4472C4"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 582.5 326.5)"
                            />
                        </a>
                        <path
                            d="M597.659 381.882 597.5 350.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch22 ?>">
                            <rect
                                id="c31"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 588.5 287.5)"
                            />
                        </a>
                        <path
                            d="M549.735 435.926 642.844 435.926 642.844 448.726 549.735 448.726Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.735 448.726 642.844 448.726 642.844 461.526 549.735 461.526Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.735 461.526 642.844 461.526 642.844 474.326 549.735 474.326Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.735 474.326 642.844 474.326 642.844 487.126 549.735 487.126Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.735 487.126 642.844 487.126 642.844 499.926 549.735 499.926Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.735 499.926 642.844 499.926 642.844 512.726 549.735 512.726Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.069 448.726 643.51 448.726"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.069 461.526 643.51 461.526"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.069 474.326 643.51 474.326"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.069 487.126 643.51 487.126"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.069 499.926 643.51 499.926"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.735 435.259 549.735 513.393"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M642.844 435.259 642.844 513.393"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.069 435.926 643.51 435.926"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M549.069 512.726 643.51 512.726"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g32"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(553.515 446)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g34"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(553.515 459)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a32"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(553.515 472)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k32"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(553.515 484)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n32"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(553.515 497)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w32" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(553.515 510)"
                            >
                                Qвода
                            </text>
                        </g>
                        <a href="<?= $urlSwitch7 ?>">
                            <rect
                                id="c10000"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 683.5 191.5)"
                            />
                        </a>
                        <path
                            d="M691.435 172.873 691.241 158.851 693.907 158.814 694.102 172.836ZM692.574 158.833 688.611 161.555 692.5 153.5 696.611 161.444Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.33323-0.0168719 1.60157 21.188-1.06488 21.2217-1.33323 0.0168719ZM-3.99968 0.0506158C-4.02763-2.15835-2.25958-3.97173-0.0506158-3.99968 2.15835-4.02763 3.97173-2.25958 3.99968-0.0506158 4.02763 2.15835 2.25958 3.97173 0.0506158 3.99968-2.15835 4.02763-3.97173 2.25958-3.99968 0.0506158Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 692.5 212.705)"
                        />
                        <a href="<?= $urlTransformer4 ?>">
                            <path id="c4202"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 743.5 349.5)"
                            />
                            <path id="c4201"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#4472C4"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 743.5 326.5)"
                            />
                        </a>
                        <path
                            d="M758.659 380.882 758.5 349.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M710.599 435.389 803.707 435.389 803.707 448.189 710.599 448.189Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M710.599 448.189 803.707 448.189 803.707 460.989 710.599 460.989Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M710.599 460.989 803.707 460.989 803.707 473.789 710.599 473.789Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M710.599 473.789 803.707 473.789 803.707 486.589 710.599 486.589Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M710.599 486.589 803.707 486.589 803.707 499.389 710.599 499.389Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M710.599 499.389 803.707 499.389 803.707 512.189 710.599 512.189Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M709.932 448.189 804.374 448.189"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M709.932 460.989 804.374 460.989"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M709.932 473.789 804.374 473.789"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M709.932 486.589 804.374 486.589"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M709.932 499.389 804.374 499.389"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M710.599 434.723 710.599 512.856"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M803.707 434.723 803.707 512.856"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M709.932 435.389 804.374 435.389"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M709.932 512.189 804.374 512.189"
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
                                transform="translate(714.378 445)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g45"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(714.378 458)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g>
                            <text id="a43"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(714.378 471)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text id="k43"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(714.378 484)"
                            >
                                КПД
                            </text>
                        </g>
                        <g>
                            <text id="n43"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(714.378 497)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text id="w43" fill="blue"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(714.378 509)"
                            >
                                Qвода
                            </text>
                        </g>
                        <a href="<?= $urlTransformer6 ?>">
                            <path id="c4"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 900.5 374.5)"
                            />
                            <path id="c5"
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#0099FF"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 887.5 352.5)"
                            />
                            <path id="c6"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 875.5 375.5)"
                            />
                        </a>
                        <path
                            d="M0 0 85.3398 0.000104987"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 976.84 448.5)"
                        />
                        <path
                            d="M975.5 447.5 976.302 586.432"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch33 ?>">
                            <rect
                                id="c205"
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 967.5 565.5)"
                            />
                        </a>
                        <path
                            d="M860.5 585.5 977.749 585.5"
                            stroke="#6600CC"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M863 525.5 863 585.239 860 585.239 860 525.5ZM857 525.5C857 523.015 859.015 521 861.5 521 863.985 521 866 523.015 866 525.5 866 527.985 863.985 530 861.5 530 859.015 530 857 527.985 857 525.5Z"
                            fill="#6600CC"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(931.931 560)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(938.098 560)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(941.264 560)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(950.598 560)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(953.764 560)"
                        >
                            Т8
                        </text>
                        <path
                            d="M915.5 374.5 915.5 400.957"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 143.165 0.333228"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1059.66 399.5)"
                        />
                        <a href="<?= $urlSwitch9 ?>">
                            <rect
                                id="c157"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 885.5 188.5)"
                            />
                        </a>
                        <path
                            d="M893.435 168.873 893.241 154.851 895.907 154.814 896.102 168.836ZM894.574 154.833 890.611 157.555 894.5 149.5 898.611 157.444Z"
                            fill="#663300"
                        />
                        <path
                            d="M1.33323-0.0168719 1.60157 21.188-1.06488 21.2217-1.33323 0.0168719ZM-3.99968 0.0506158C-4.02763-2.15835-2.25958-3.97173-0.0506158-3.99968 2.15835-4.02763 3.97173-2.25958 3.99968-0.0506158 4.02763 2.15835 2.25958 3.97173 0.0506158 3.99968-2.15835 4.02763-3.97173 2.25958-3.99968 0.0506158Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 894.5 209.705)"
                        />
                        <a href="<?= $urlSwitch10 ?>">
                            <rect
                                id="c151"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 969.5 188.5)"
                            />
                        </a>
                        <path
                            d="M978.435 168.873 978.241 154.851 980.907 154.814 981.102 168.836ZM979.574 154.833 975.611 157.555 979.5 149.5 983.611 157.444Z"
                            fill="#663300"
                        />
                        <path
                            d="M1.33323-0.0168719 1.60157 21.188-1.06488 21.2217-1.33323 0.0168719ZM-3.99968 0.0506158C-4.02763-2.15835-2.25958-3.97173-0.0506158-3.99968 2.15835-4.02763 3.97173-2.25958 3.99968-0.0506158 4.02763 2.15835 2.25958 3.97173 0.0506158 3.99968-2.15835 4.02763-3.97173 2.25958-3.99968 0.0506158Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 979.5 209.705)"
                        />
                        <a href="<?= $urlSwitch11 ?>">
                            <rect
                                id="c145"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1049.5 189.5)"
                            />
                        </a>
                        <path
                            d="M1058.44 170.873 1058.24 156.851 1060.91 156.814 1061.1 170.836ZM1059.57 156.833 1055.61 159.555 1059.5 151.5 1063.61 159.444Z"
                            fill="#663300"
                        />
                        <path
                            d="M1.33323-0.0168719 1.60157 21.188-1.06488 21.2217-1.33323 0.0168719ZM-3.99968 0.0506158C-4.02763-2.15835-2.25958-3.97173-0.0506158-3.99968 2.15835-4.02763 3.97173-2.25958 3.99968-0.0506158 4.02763 2.15835 2.25958 3.97173 0.0506158 3.99968-2.15835 4.02763-3.97173 2.25958-3.99968 0.0506158Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 1059.5 210.705)"
                        />
                        <a href="<?= $urlSwitch12 ?>">
                            <rect
                                id="c139"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1136.5 188.5)"
                            />
                        </a>
                        <path
                            d="M1144.44 169.873 1144.24 155.851 1146.91 155.814 1147.1 169.836ZM1145.57 155.833 1141.61 158.555 1145.5 150.5 1149.61 158.444Z"
                            fill="#663300"
                        />
                        <path
                            d="M1.33323-0.0168719 1.60157 21.188-1.06488 21.2217-1.33323 0.0168719ZM-3.99968 0.0506158C-4.02763-2.15835-2.25958-3.97173-0.0506158-3.99968 2.15835-4.02763 3.97173-2.25958 3.99968-0.0506158 4.02763 2.15835 2.25958 3.97173 0.0506158 3.99968-2.15835 4.02763-3.97173 2.25958-3.99968 0.0506158Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 1145.5 209.705)"
                        />
                        <a href="<?= $urlSwitch13 ?>">
                            <rect
                                id="c133"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1214.5 188.5)"
                            />
                        </a>
                        <path
                            d="M1222.44 169.873 1222.24 155.851 1224.91 155.814 1225.1 169.836ZM1223.57 155.833 1219.61 158.555 1223.5 150.5 1227.61 158.444Z"
                            fill="#663300"
                        />
                        <path
                            d="M1.33323-0.0168719 1.60157 21.188-1.06488 21.2217-1.33323 0.0168719ZM-3.99968 0.0506158C-4.02763-2.15835-2.25958-3.97173-0.0506158-3.99968 2.15835-4.02763 3.97173-2.25958 3.99968-0.0506158 4.02763 2.15835 2.25958 3.97173 0.0506158 3.99968-2.15835 4.02763-3.97173 2.25958-3.99968 0.0506158Z"
                            fill="#663300"
                            transform="matrix(1 0 0 -1 1223.5 209.705)"
                        />
                        <a href="<?= $urlSwitch25 ?>">
                            <rect
                                id="c121"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 1049.5 293.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch24 ?>">
                            <rect
                                id="c49"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 839.5 323.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(828.237 334)"
                        >
                            ВТ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(841.904 334)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(845.404 334)"
                        >
                            8
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(850.737 334)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(854.237 334)"
                        >
                            110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(372.939 341)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(379.439 341)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(382.939 341)"
                        >
                            7
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(329.439 354)"
                        >
                            110/35/10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(377.439 354)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(337.772 367)"
                        >
                            ТДНТ40
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(372.272 367)"
                        >
                            000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(579.021 138)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(586.187 138)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(589.687 138)"
                        >
                            Тошлок
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(99.7074 135)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(106.874 135)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(110.374 135)"
                        >
                            Нурчи
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(176.413 135)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(183.58 135)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(187.08 135)"
                        >
                            Достон
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(220.08 135)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(223.58 135)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(265.672 136)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(272.838 136)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(276.338 136)"
                        >
                            Гулзор
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(334.068 137)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(341.235 137)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(344.735 137)"
                        >
                            16
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(355.401 137)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(358.901 137)"
                        >
                            Металлургия
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(418.568 137)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(422.068 137)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(662.591 138)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(669.758 138)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(673.258 138)"
                        >
                            Узловой
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(711.591 138)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(715.091 138)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(742.886 138)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(750.053 138)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(753.553 138)"
                        >
                            Узловой
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(791.886 138)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(795.386 138)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(861.688 139)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(868.022 139)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(871.188 139)"
                        >
                            Далварзин
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(913.188 139)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(916.355 139)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(944.431 139)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(950.764 139)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(953.931 139)"
                        >
                            Металлзавод
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1005.43 139)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1008.6 139)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1111.65 138)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1117.98 138)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1121.15 138)"
                        >
                            Цементзавод
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1172.48 138)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1175.65 138)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1192.09 137)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1198.42 137)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1201.59 137)"
                        >
                            Цементзавод
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1252.92 137)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1256.09 137)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(475.634 138)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(482.801 138)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(486.301 138)"
                        >
                            16
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(496.967 138)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(500.467 138)"
                        >
                            Металлургия
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(560.134 138)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(563.634 138)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1021.85 139)"
                        >
                            Л
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1028.19 139)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1031.35 139)"
                        >
                            Металлзавод
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1082.85 139)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(1086.02 139)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(88.5731 316)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(95.0731 316)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(98.4064 316)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(59.7397 329)"
                        >
                            10/110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(92.9064 329)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(39.9064 342)"
                        >
                            ТДЦ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(58.7397 342)"
                        >
                            42000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(87.7397 342)"
                        >
                            кВа
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(226.942 389)"
                        >
                            Г-2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(210.942 402)"
                        >
                            10,5кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(204.609 415)"
                        >
                            30,8мВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(175.775 428)"
                        >
                            СВ 562/130
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(227.775 428)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(231.275 428)"
                        >
                            32
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(552.63 389)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(559.464 389)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(562.964 389)"
                        >
                            3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(536.297 402)"
                        >
                            10,5кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(529.964 415)"
                        >
                            33,3мВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(501.63 428)"
                        >
                            СВ 864/127
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(554.13 428)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(557.63 428)"
                        >
                            56
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(714.196 388)"
                        >
                            Г
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(721.029 388)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(724.529 388)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(697.862 401)"
                        >
                            10,5кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(691.529 414)"
                        >
                            33,3мВт
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(663.196 427)"
                        >
                            СВ 864/127
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(715.696 427)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(719.196 427)"
                        >
                            56
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(722.643 306)"
                        >
                            Т
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(729.143 306)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(732.476 306)"
                        >
                            4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(693.809 319)"
                        >
                            10/110
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(726.976 319)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(690.476 332)"
                        >
                            ОДЦ16
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(721.809 332)"
                        >
                            000
                        </text>
                        <text
                            fill="#828897"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(711.976 344)"
                        >
                            А/Б/С
                        </text>
                        <a href="<?= $urlSwitch14 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 73.5001 242.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(21.4382 236)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(28.6048 236)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(32.1048 236)"
                        >
                            МШВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(59.6048 236)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(63.1048 236)"
                        >
                            1
                        </text>
                        <path
                            d="M0 0 446.986 1.7685"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 470.486 252.5)"
                        />
                        <path
                            d="M1.33333-1.34744e-05 1.33344 10.3888-1.33323 10.3888-1.33333 1.34744e-05ZM-4 4.04232e-05C-4.00002-2.2091-2.20918-3.99998-4.04232e-05-4 2.2091-4.00002 3.99998-2.20918 4-4.04232e-05 4.00002 2.2091 2.20918 3.99998 4.04232e-05 4-2.2091 4.00002-3.99998 2.20918-4 4.04232e-05Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 82.5001 252.889)"
                        />
                        <path
                            d="M83.8334 212.5 83.8335 223.991 81.1668 223.991 81.1667 212.5ZM78.5001 212.5C78.5 210.291 80.2909 208.5 82.5 208.5 84.7092 208.5 86.5 210.291 86.5001 212.5 86.5001 214.709 84.7092 216.5 82.5001 216.5 80.291 216.5 78.5001 214.709 78.5001 212.5Z"
                            fill="#0099FF"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(14.1371 267)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(21.1371 267)"
                        >
                            –
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(26.4704 267)"
                        >
                            IV
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(40.3037 267)"
                        >
                            СШ 110 кВ
                        </text>
                        <path
                            d="M1.33323-0.0168937 1.78393 35.5523-0.882518 35.5861-1.33323 0.0168937ZM-3.99968 0.0506811C-4.02767-2.15828-2.25964-3.97169-0.0506811-3.99968 2.15828-4.02767 3.97169-2.25964 3.99968-0.0506811 4.02767 2.15828 2.25964 3.97169 0.0506811 3.99968-2.15828 4.02767-3.97169 2.25964-3.99968 0.0506811Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 374.5 253.069)"
                        />
                        <path
                            d="M374.203 206.545C377.766 206.139 381.011 208.476 381.451 211.764 381.891 215.053 379.36 218.049 375.797 218.455 375.111 218.533 374.416 218.51 373.738 218.386"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 15.5151"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 375.5 206.015)"
                        />
                        <path
                            d="M268.5 268.834 268.5 259.5"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1.33325-0.0151248 1.73304 35.2262-0.933458 35.2565-1.33325 0.0151248ZM-3.99974 0.0453745C-4.0248-2.16362-2.25437-3.97468-0.0453745-3.99974 2.16362-4.0248 3.97468-2.25437 3.99974-0.0453745 4.0248 2.16362 2.25437 3.97468 0.0453745 3.99974-2.16362 4.0248-3.97468 2.25437-3.99974 0.0453745Z"
                            fill="#0099FF"
                            transform="matrix(-1 0 0 1 269.9 212.5)"
                        />
                        <path
                            d="M0 0 295.273 0.000104987"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 784.773 252.5)"
                        />
                        <a href="<?= $urlSwitch17 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 470.5 261.5)"
                            />
                        </a>
                        <a href="<?= $urlSwitch15 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="18"
                                height="18"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 429.5 241.5)"
                            />
                        </a>
                        <path
                            d="M1.33333-1.34744e-05 1.33344 10.3888-1.33323 10.3888-1.33333 1.34744e-05ZM-4 4.04232e-05C-4.00002-2.2091-2.20918-3.99998-4.04232e-05-4 2.2091-4.00002 3.99998-2.20918 4-4.04232e-05 4.00002 2.2091 2.20918 3.99998 4.04232e-05 4-2.2091 4.00002-3.99998 2.20918-4 4.04232e-05Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 438.5 251.889)"
                        />
                        <path
                            d="M439.833 212.5 439.833 223.991 437.167 223.991 437.167 212.5ZM434.5 212.5C434.5 210.291 436.291 208.5 438.5 208.5 440.709 208.5 442.5 210.291 442.5 212.5 442.5 214.709 440.709 216.5 438.5 216.5 436.291 216.5 434.5 214.709 434.5 212.5Z"
                            fill="#0099FF"
                        />
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(385.539 235)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(391.705 235)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(394.872 235)"
                        >
                            МШВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(418.705 235)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(421.872 235)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(462.636 240)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(469.803 240)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(473.303 240)"
                        >
                            C
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(480.47 240)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(487.636 240)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(491.136 240)"
                        >
                            2
                        </text>
                        <path
                            d="M840.5 250.5 1245.25 250.5"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <a href="<?= $urlSwitch18 ?>">
                            <rect
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 1005.5 240.5)"
                            />
                        </a>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(945.086 234)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(952.252 234)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(955.752 234)"
                        >
                            МШВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(983.252 234)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(986.752 234)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(834.589 206)"
                        >
                            I
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(838.089 206)"
                        >
                            –
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(843.422 206)"
                        >
                            C
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(850.589 206)"
                        >
                            Ш
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(864.089 206)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(874.755 206)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(839.878 261)"
                        >
                            II
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(846.878 261)"
                        >
                            –
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(852.211 261)"
                        >
                            C
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(859.378 261)"
                        >
                            Ш
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(872.878 261)"
                        >
                            35
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(883.544 261)"
                        >
                            кВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(387.432 186)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(394.599 186)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(398.099 186)"
                        >
                            М2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(301.742 185)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(308.909 185)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(312.409 185)"
                        >
                            Гулзор
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(217.509 185)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(224.675 185)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(228.175 185)"
                        >
                            Достон
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(136.502 185)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(143.668 185)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(147.168 185)"
                        >
                            Нурчи
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(533.007 183)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(540.174 183)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(543.674 183)"
                        >
                            М1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(619.593 184)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(626.76 184)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(630.26 184)"
                        >
                            Тошлок
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(704.953 187)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(712.12 187)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(715.62 187)"
                        >
                            У1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(787.236 187)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(794.403 187)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(797.903 187)"
                        >
                            У2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(905.994 182)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(913.161 182)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(916.661 182)"
                        >
                            ДВЗ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(936.494 182)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(939.994 182)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(993.301 182)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1000.47 182)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1003.97 182)"
                        >
                            МЗ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1018.8 182)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1022.3 182)"
                        >
                            2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1071.39 182)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1078.56 182)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1082.06 182)"
                        >
                            МЗ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1096.89 182)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1100.39 182)"
                        >
                            1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1162.44 182)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1169.61 182)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1173.11 182)"
                        >
                            Ц2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1235.86 182)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1243.02 182)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(1246.52 182)"
                        >
                            Ц1
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(739.319 544)"
                        >
                            СВ
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(751.652 544)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(754.819 544)"
                        >
                            10
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(608.982 281)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(615.148 281)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(618.315 281)"
                        >
                            Т3
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(725.522 280)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(731.689 280)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(734.856 280)"
                        >
                            Т4
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(282.851 280)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(289.017 280)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(292.184 280)"
                        >
                            Т2
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(135.637 281)"
                        >
                            В
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(141.803 281)"
                        >
                            -
                        </text>
                        <text
                            fill="#828897"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="9"
                            transform="translate(144.97 281)"
                        >
                            Т1
                        </text>
                        <a href="<?= $urlSwitch2 ?>">
                            <rect
                                id="c97"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 195.5 192.5)"
                            />
                        </a>
                        <path
                            d="M204.435 173.872 204.241 159.851 206.907 159.814 207.102 173.835ZM205.574 159.833 201.611 162.555 205.5 154.5 209.611 162.444Z"
                            fill="#0099FF"
                        />
                        <path
                            d="M1.33323-0.0168937 1.78393 35.5523-0.882518 35.5861-1.33323 0.0168937ZM-3.99968 0.0506811C-4.02767-2.15828-2.25964-3.97169-0.0506811-3.99968 2.15828-4.02767 3.97169-2.25964 3.99968-0.0506811 4.02767 2.15828 2.25964 3.97169 0.0506811 3.99968-2.15828 4.02767-3.97169 2.25964-3.99968 0.0506811Z"
                            fill="#0099FF"
                            transform="matrix(1 0 0 -1 204.5 254.069)"
                        />
                        <path
                            d="M204.203 206.545C207.766 206.139 211.011 208.476 211.451 211.764 211.891 215.053 209.36 218.049 205.797 218.455 205.111 218.533 204.416 218.51 203.738 218.386"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.000104987 15.5151"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 205.5 208.015)"
                        />
                        <path
                            d="M267.889 247.531C271.185 247.194 274.131 249.592 274.469 252.889 274.807 256.185 272.408 259.131 269.112 259.469 268.5 259.531 267.883 259.5 267.281 259.375"
                            stroke="#0099FF"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M756.167 297.849 756.167 251.5 758.833 251.5 758.833 297.849ZM753.5 251.5C753.5 249.291 755.291 247.5 757.5 247.5 759.709 247.5 761.5 249.291 761.5 251.5 761.5 253.709 759.709 255.5 757.5 255.5 755.291 255.5 753.5 253.709 753.5 251.5Z"
                            fill="#0099FF"
                        />
                        <a href="<?= $urlSwitch23 ?>">
                            <rect
                                id="c42"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#0099FF"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 748.5 287.5)"
                            />
                        </a>
                        <path
                            d="M1058.2 244.545C1061.77 244.139 1065.01 246.476 1065.45 249.764 1065.89 253.053 1063.36 256.049 1059.8 256.455 1059.11 256.533 1058.42 256.51 1057.74 256.386"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M0 0 0.446509 37.3903"
                            stroke="#663300"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 1058.95 208.5)"
                        />
                        <g
                            clip-path="url(#clip18)"
                            transform="matrix(0.000104987 0 0 0.000104987 1047 27)"
                        >
                            <g clip-path="url(#clip20)" transform="scale(1.01496 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img19"
                                    transform="scale(7519.74 7519.74)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1069.17 22.5001)"
                        />
                        <path
                            d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 1168.5 76.1712)"
                        />
                        <path
                            d="M1165.55 89.0309 1157.86 80.6543 1158.35 80.2035 1166.04 88.58ZM1158.11 80.4289 1157.95 84.1967 1154.5 76.5001 1161.87 80.59Z"
                            fill="#4472C4"
                        />
                        <path
                            d="M1073.14 8.4989 1167.51 8.4989 1167.51 21.2989 1073.14 21.2989Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1073.14 7.83223 1073.14 21.9656"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1167.51 7.83223 1167.51 21.9656"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1072.47 8.4989 1168.17 8.4989"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1072.47 21.2989 1168.17 21.2989"
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
                                transform="translate(1076.92 18)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1087.42 18)"
                        >
                            ВБ
                        </text>
                        <path
                            d="M1068.5 22.5001 1087.69 22.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1175.63 75.5826 1263.29 75.5826 1263.29 88.3826 1175.63 88.3826Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1175.63 74.9159 1175.63 89.0492"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1263.29 74.9159 1263.29 89.0492"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.96 75.5826 1263.95 75.5826"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1174.96 88.3826 1263.95 88.3826"
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
                                transform="translate(1179.41 86)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="9"
                            transform="translate(1189.91 86)"
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
                            transform="matrix(1 0 0 -1 1065.5 30.5552)"
                        />
                        <path
                            d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                            fill="#4472C4"
                            transform="matrix(-1 0 0 1 1175.99 48.5001)"
                        />
                        <path
                            d="M1175.5 48.5001 1194.69 48.6472"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.83 35.3991 1253.02 35.3991 1253.02 48.1991 1179.83 48.1991Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.83 34.7324 1179.83 48.8657"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1253.02 34.7324 1253.02 48.8657"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.16 35.3991 1253.69 35.3991"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1179.16 48.1991 1253.69 48.1991"
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
                                transform="translate(1183.61 45)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                            d="M1151.5 76.5001 1174.21 76.5002"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            stroke-dasharray="2.66667 2"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M76.1786 97.4709 159.778 97.4709 159.778 111.062 76.1786 111.062Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M76.1786 111.062 159.778 111.062 159.778 124.653 76.1786 124.653Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M75.5119 111.062 160.445 111.062"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M76.1786 96.8042 76.1786 125.32"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M159.778 96.8042 159.778 125.32"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M75.5119 97.4709 160.445 97.4709"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M75.5119 124.653 160.445 124.653"
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
                                transform="translate(78.8453 107)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g103"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(78.8453 121)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip21)"
                            transform="matrix(0.000104987 0 0 0.000104987 151 98)"
                        >
                            <g clip-path="url(#clip23)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip24)"
                            transform="matrix(0.000104987 0 0 0.000104987 152 112)"
                        >
                            <g clip-path="url(#clip26)" transform="matrix(1 0 0 1.02857 -0.125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M162.535 97.8047 246.135 97.8047 246.135 111.396 162.535 111.396Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M162.535 111.396 246.135 111.396 246.135 124.987 162.535 124.987Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M161.868 111.396 246.801 111.396"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M162.535 97.1381 162.535 125.654"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M246.135 97.1381 246.135 125.654"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M161.868 97.8047 246.801 97.8047"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M161.868 124.987 246.801 124.987"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g96"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(165.202 108)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g97"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(165.202 121)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip27)"
                            transform="matrix(0.000104987 0 0 0.000104987 238 98)"
                        >
                            <g clip-path="url(#clip28)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip29)"
                            transform="matrix(0.000104987 0 0 0.000104987 238 112)"
                        >
                            <g clip-path="url(#clip30)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M249.818 97.4464 333.417 97.4464 333.417 111.038 249.818 111.038Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M249.818 111.038 333.417 111.038 333.417 124.629 249.818 124.629Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M249.151 111.038 334.084 111.038"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M249.818 96.7797 249.818 125.295"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M333.417 96.7797 333.417 125.295"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M249.151 97.4464 334.084 97.4464"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M249.151 124.629 334.084 124.629"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g90"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(252.485 107)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g91"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(252.485 121)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip31)"
                            transform="matrix(0.000104987 0 0 0.000104987 325 98)"
                        >
                            <g clip-path="url(#clip32)" transform="matrix(1 0 0 1.02857 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip33)"
                            transform="matrix(0.000104987 0 0 0.000104987 326 112)"
                        >
                            <g clip-path="url(#clip34)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M336.15 97.483 419.749 97.483 419.749 111.074 336.15 111.074Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M336.15 111.074 419.749 111.074 419.749 124.665 336.15 124.665Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M335.483 111.074 420.416 111.074"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M336.15 96.8164 336.15 125.332"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M419.749 96.8164 419.749 125.332"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M335.483 97.483 420.416 97.483"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M335.483 124.665 420.416 124.665"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g84"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(338.816 107)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g85"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(338.816 121)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip35)"
                            transform="matrix(0.000104987 0 0 0.000104987 411 98)"
                        >
                            <g clip-path="url(#clip36)" transform="matrix(1.16667 0 0 1 -0.25 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip37)"
                            transform="matrix(0.000104987 0 0 0.000104987 412 112)"
                        >
                            <g clip-path="url(#clip38)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M472.259 98.4153 555.859 98.4153 555.859 112.007 472.259 112.007Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M472.259 112.007 555.859 112.007 555.859 125.598 472.259 125.598Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M471.593 112.007 556.526 112.007"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M472.259 97.7487 472.259 126.264"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M555.859 97.7487 555.859 126.264"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M471.593 98.4153 556.526 98.4153"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M471.593 125.598 556.526 125.598"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g72"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(474.926 108)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g73"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(474.926 122)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip39)"
                            transform="matrix(0.000104987 0 0 0.000104987 548 99)"
                        >
                            <g clip-path="url(#clip40)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip41)"
                            transform="matrix(0.000104987 0 0 0.000104987 548 113)"
                        >
                            <g clip-path="url(#clip42)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M558.616 98.7492 642.216 98.7492 642.216 112.34 558.616 112.34Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M558.616 112.34 642.216 112.34 642.216 125.932 558.616 125.932Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M557.949 112.34 642.882 112.34"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M558.616 98.0825 558.616 126.598"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M642.216 98.0825 642.216 126.598"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M557.949 98.7492 642.882 98.7492"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M557.949 125.932 642.882 125.932"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g66"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(561.283 109)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g67"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(561.283 122)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip43)"
                            transform="matrix(0.000104987 0 0 0.000104987 634 99)"
                        >
                            <g clip-path="url(#clip44)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip45)"
                            transform="matrix(0.000104987 0 0 0.000104987 634 113)"
                        >
                            <g clip-path="url(#clip46)" transform="scale(1.16667 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M645.899 98.3909 729.498 98.3909 729.498 111.982 645.899 111.982Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M645.899 111.982 729.498 111.982 729.498 125.573 645.899 125.573Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M645.232 111.982 730.165 111.982"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M645.899 97.7242 645.899 126.24"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M729.498 97.7242 729.498 126.24"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M645.232 98.3909 730.165 98.3909"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M645.232 125.573 730.165 125.573"
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
                                transform="translate(648.565 108)"
                            >
                                Р= 0,000 МВт
                            </text>
                        </g>
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(648.565 122)"
                            >
                                Р= 0,000 МВт
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip47)"
                            transform="matrix(0.000104987 0 0 0.000104987 721 99)"
                        >
                            <g
                                clip-path="url(#clip48)"
                                transform="matrix(1 0 0 1.02857 -0.5 -0.0625)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip49)"
                            transform="matrix(0.000104987 0 0 0.000104987 722 113)"
                        >
                            <g clip-path="url(#clip50)" transform="matrix(1 0 0 1.02857 -0.5 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M732.231 98.4275 815.83 98.4275 815.83 112.019 732.231 112.019Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M732.231 112.019 815.83 112.019 815.83 125.61 732.231 125.61Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M731.564 112.019 816.497 112.019"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M732.231 97.7608 732.231 126.277"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M815.83 97.7608 815.83 126.277"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M731.564 98.4275 816.497 98.4275"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M731.564 125.61 816.497 125.61"
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
                                transform="translate(734.897 108)"
                            >
                                Р= 0,000 МВт
                            </text>
                        </g>
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(734.897 122)"
                            >
                                Р= 0,000 МВт
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip51)"
                            transform="matrix(0.000104987 0 0 0.000104987 808 99)"
                        >
                            <g clip-path="url(#clip52)" transform="matrix(1 0 0 1.02857 0 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip53)"
                            transform="matrix(0.000104987 0 0 0.000104987 808 113)"
                        >
                            <g clip-path="url(#clip54)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M842.057 100.165 925.656 100.165 925.656 113.756 842.057 113.756Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M842.057 113.756 925.656 113.756 925.656 127.347 842.057 127.347Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M841.39 113.756 926.323 113.756"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M842.057 99.4984 842.057 128.014"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M925.656 99.4984 925.656 128.014"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M841.39 100.165 926.323 100.165"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M841.39 127.347 926.323 127.347"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g156"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(844.723 110)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g157"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(844.723 124)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip55)"
                            transform="matrix(0.000104987 0 0 0.000104987 917 101)"
                        >
                            <g clip-path="url(#clip56)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip57)"
                            transform="matrix(0.000104987 0 0 0.000104987 918 114)"
                        >
                            <g clip-path="url(#clip58)" transform="scale(1 1.11429)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M928.413 100.499 1012.01 100.499 1012.01 114.09 928.413 114.09Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M928.413 114.09 1012.01 114.09 1012.01 127.681 928.413 127.681Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M927.747 114.09 1012.68 114.09"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M928.413 99.8322 928.413 128.348"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1012.01 99.8322 1012.01 128.348"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M927.747 100.499 1012.68 100.499"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M927.747 127.681 1012.68 127.681"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g150"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(931.08 110)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g151"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(931.08 124)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip59)"
                            transform="matrix(0.000104987 0 0 0.000104987 1004 101)"
                        >
                            <g clip-path="url(#clip60)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip61)"
                            transform="matrix(0.000104987 0 0 0.000104987 1004 115)"
                        >
                            <g clip-path="url(#clip62)" transform="matrix(1 0 0 1.02857 0 -0.125)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1015.7 100.141 1099.3 100.141 1099.3 113.732 1015.7 113.732Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1015.7 113.732 1099.3 113.732 1099.3 127.323 1015.7 127.323Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1015.03 113.732 1099.96 113.732"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1015.7 99.4739 1015.7 127.99"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1099.3 99.4739 1099.3 127.99"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1015.03 100.141 1099.96 100.141"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1015.03 127.323 1099.96 127.323"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g144"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1018.36 110)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g145"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1018.36 124)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip63)"
                            transform="matrix(0.000104987 0 0 0.000104987 1091 101)"
                        >
                            <g clip-path="url(#clip64)" transform="matrix(1 0 0 1.02857 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip65)"
                            transform="matrix(0.000104987 0 0 0.000104987 1091 114)"
                        >
                            <g clip-path="url(#clip66)" transform="matrix(1.07692 0 0 1 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1360.71 1360.71)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1102.03 100.177 1185.63 100.177 1185.63 113.768 1102.03 113.768Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1102.03 113.768 1185.63 113.768 1185.63 127.36 1102.03 127.36Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.36 113.768 1186.29 113.768"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1102.03 99.5106 1102.03 128.026"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1185.63 99.5106 1185.63 128.026"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.36 100.177 1186.29 100.177"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1101.36 127.36 1186.29 127.36"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g138"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1104.69 110)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g139"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1104.69 124)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip67)"
                            transform="matrix(0.000104987 0 0 0.000104987 1177 101)"
                        >
                            <g clip-path="url(#clip68)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip69)"
                            transform="matrix(0.000104987 0 0 0.000104987 1178 114)"
                        >
                            <g clip-path="url(#clip70)" transform="scale(1 1.11429)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1189.44 99.1052 1273.04 99.1052 1273.04 112.696 1189.44 112.696Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1189.44 112.696 1273.04 112.696 1273.04 126.288 1189.44 126.288Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.78 112.696 1273.71 112.696"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1189.44 98.4385 1189.44 126.954"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1273.04 98.4385 1273.04 126.954"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.78 99.1052 1273.71 99.1052"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1188.78 126.288 1273.71 126.288"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g132"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1192.11 109)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g133"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1192.11 123)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip71)"
                            transform="matrix(0.000104987 0 0 0.000104987 1265 100)"
                        >
                            <g clip-path="url(#clip72)" transform="matrix(1 0 0 1.02857 -1 -0.0625)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip73)"
                            transform="matrix(0.000104987 0 0 0.000104987 1265 113)"
                        >
                            <g clip-path="url(#clip74)" transform="matrix(1 0 0 1.11429 -1 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1181.95 84.8892 1172.5 84.5001"
                            stroke="#4472C4"
                            stroke-width="0.666667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M435.101 279.369 518.701 279.369 518.701 292.961 435.101 292.961Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M435.101 292.961 518.701 292.961 518.701 306.552 435.101 306.552Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M434.434 292.961 519.367 292.961"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M435.101 278.703 435.101 307.218"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M518.701 278.703 518.701 307.218"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M434.434 279.369 519.367 279.369"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M434.434 306.552 519.367 306.552"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g79"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(437.768 289)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g78"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(437.768 303)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip75)"
                            transform="matrix(0.000104987 0 0 0.000104987 510 280)"
                        >
                            <g clip-path="url(#clip76)" transform="matrix(1.16667 0 0 1 -0.5 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip77)"
                            transform="matrix(0.000104987 0 0 0.000104987 511 294)"
                        >
                            <g clip-path="url(#clip78)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M809.896 272.651 893.495 272.651 893.495 286.242 809.896 286.242Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.896 286.242 893.495 286.242 893.495 299.834 809.896 299.834Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.229 286.242 894.162 286.242"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.896 271.985 809.896 300.5"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M893.495 271.985 893.495 300.5"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.229 272.651 894.162 272.651"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M809.229 299.834 894.162 299.834"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g49"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(812.562 283)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g48"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(812.562 296)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip79)"
                            transform="matrix(0.000104987 0 0 0.000104987 885 273)"
                        >
                            <g clip-path="url(#clip80)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip81)"
                            transform="matrix(0.000104987 0 0 0.000104987 886 287)"
                        >
                            <g clip-path="url(#clip82)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1073.04 269.305 1156.64 269.305 1156.64 282.896 1073.04 282.896Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1073.04 282.896 1156.64 282.896 1156.64 296.487 1073.04 296.487Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1072.37 282.896 1157.31 282.896"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1073.04 268.638 1073.04 297.154"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1156.64 268.638 1156.64 297.154"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1072.37 269.305 1157.31 269.305"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1072.37 296.487 1157.31 296.487"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g121"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1075.71 279)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g120"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1075.71 293)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip83)"
                            transform="matrix(0.000104987 0 0 0.000104987 1148 270)"
                        >
                            <g clip-path="url(#clip84)" transform="matrix(1 0 0 1.02857 0 -0.25)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip85)"
                            transform="matrix(0.000104987 0 0 0.000104987 1149 284)"
                        >
                            <g clip-path="url(#clip86)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M23.7263 181.248 86.9551 181.248 86.9551 194.048 23.7263 194.048Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M23.7263 180.581 23.7263 194.715"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M86.9551 180.581 86.9551 194.715"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M23.0596 181.248 87.6217 181.248"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M23.0596 194.048 87.6217 194.048"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g82"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(27.5058 191)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M19.8448 272.17 83.0736 272.17 83.0736 284.97 19.8448 284.97Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M19.8448 271.503 19.8448 285.637"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M83.0736 271.503 83.0736 285.637"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M19.1782 272.17 83.7403 272.17"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M19.1782 284.97 83.7403 284.97"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g76"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(23.6244 282)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M831.118 233.623 894.347 233.623 894.347 246.423 831.118 246.423Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M831.118 232.956 831.118 247.089"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M894.347 232.956 894.347 247.089"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M830.452 233.623 895.014 233.623"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M830.452 246.423 895.014 246.423"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g124"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(834.898 244)"
                            >
                                U
                            </text>
                        </g>
                        <path
                            d="M831.118 215.744 894.347 215.744 894.347 228.544 831.118 228.544Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M831.118 215.078 831.118 229.211"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M894.347 215.078 894.347 229.211"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M830.452 215.744 895.014 215.744"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M830.452 228.544 895.014 228.544"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g118"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(834.898 226)"
                            >
                                U
                            </text>
                        </g>
                        <path id="c9003"
                            d="M98.5001 405C98.5001 391.469 109.469 380.5 123 380.5 136.531 380.5 147.5 391.469 147.5 405 147.5 418.531 136.531 429.5 123 429.5 109.469 429.5 98.5001 418.531 98.5001 405Z"
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
                                            d="M122.689 398.933 123.622 398.933 124.944 399.167 126.033 399.633 126.889 400.178 127.9 401.189 128.522 402.122 128.989 403.367 129.144 404.067 129.144 405.933 128.833 407.1 128.211 408.344 127.589 409.122 127.044 409.667 125.956 410.367 124.711 410.833 123.933 410.989 122.378 410.989 121.133 410.678 120.278 410.289 119.422 409.744 118.567 408.967 118.022 408.189 117.478 407.1 117.167 405.856 117.089 404.922 117.244 403.678 117.556 402.667 118.178 401.5 119.033 400.567 119.656 400.022 120.978 399.322 122.144 399.011Z"
                                        />
                                        <path
                                            d="M123.156 385.089 124.011 385.089 125.489 385.322 126.967 385.789 128.211 386.411 129.144 387.033 129.922 387.733 130.856 388.667 131.711 389.911 132.333 391.156 132.8 392.556 133.033 393.722 133.111 394.344 133.111 395.822 132.878 397.3 132.489 398.622 131.867 399.944 131.089 401.033 130.933 401.033 130.311 399.944 129.378 398.856 128.522 398.078 127.433 397.378 126.267 396.833 124.944 396.444 123.156 396.211Z"
                                        />
                                        <path
                                            d="M110.4 400.878 110.789 400.956 112.967 402.2 114.522 403.133 114.6 403.289 114.444 404.922 114.6 406.556 114.989 408.033 115.533 409.2 115.533 409.433 113.356 410.678 111.489 411.767 107.444 414.1 106.122 414.878 105.889 414.878 105.189 413.4 104.8 412.078 104.644 411.144 104.567 409.822 104.722 408.344 104.956 407.256 105.5 405.778 106.044 404.767 106.744 403.756 107.678 402.744 108.533 401.967 109.933 401.111Z"
                                        />
                                        <path
                                            d="M130.7 409.433 131.089 409.511 132.956 410.6 139.022 414.1 140.344 414.878 140.189 415.267 139.644 416.044 138.944 416.9 138.4 417.444 137.233 418.3 135.989 419 134.511 419.544 133.344 419.778 132.878 419.856 130.544 419.856 129.378 419.622 128.133 419.233 126.811 418.611 125.878 417.989 125.878 413.322 126.578 413.011 127.9 412.311 128.833 411.611 129.922 410.522Z"
                                        />
                                        <path
                                            d="M113.667 390.067 115.378 390.067 116.856 390.3 118.489 390.844 119.811 391.544 120.433 391.933 120.433 396.678 119.033 397.3 117.944 398 117.089 398.7 116.544 399.244 115.611 400.567 115.144 400.411 113.822 399.633 107.756 396.133 106.044 395.122 105.967 394.967 106.511 394.111 107.367 393.1 107.989 392.478 109.156 391.622 110.244 391 111.722 390.456 112.578 390.222Z"
                                        />
                                        <path
                                            d="M117.167 411.533 117.478 411.611 118.644 412.467 119.967 413.089 121.211 413.478 122.144 413.633 123.078 413.711 123.156 413.789 123.156 424.833 121.989 424.833 120.433 424.522 119.111 424.056 117.711 423.278 116.7 422.5 115.922 421.8 115.144 420.867 114.367 419.622 113.744 418.222 113.356 416.744 113.2 415.344 113.2 414.489 113.278 413.789 115.222 412.7 116.544 411.922Z"
                                        />
                                        <path
                                            d="M140.267 395.044 140.422 395.044 140.967 396.133 141.433 397.533 141.667 398.778 141.744 400.333 141.589 401.733 141.278 403.056 140.656 404.533 140.111 405.467 139.489 406.322 138.633 407.256 137.467 408.189 136.456 408.811 135.756 409.122 133.811 408.033 131.944 406.944 131.711 406.789 131.867 405.389 131.867 404.222 132.567 403.522 133.578 402.2 134.278 401.033 134.978 399.556 135.522 397.844 136.222 397.378 138.167 396.289 140.033 395.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c2003"
                            d="M245.5 405C245.5 391.469 256.469 380.5 270 380.5 283.531 380.5 294.5 391.469 294.5 405 294.5 418.531 283.531 429.5 270 429.5 256.469 429.5 245.5 418.531 245.5 405Z"
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
                                            d="M268.689 398.933 269.622 398.933 270.944 399.167 272.033 399.633 272.889 400.178 273.9 401.189 274.522 402.122 274.989 403.367 275.144 404.067 275.144 405.933 274.833 407.1 274.211 408.344 273.589 409.122 273.044 409.667 271.956 410.367 270.711 410.833 269.933 410.989 268.378 410.989 267.133 410.678 266.278 410.289 265.422 409.744 264.567 408.967 264.022 408.189 263.478 407.1 263.167 405.856 263.089 404.922 263.244 403.678 263.556 402.667 264.178 401.5 265.033 400.567 265.656 400.022 266.978 399.322 268.144 399.011Z"
                                        />
                                        <path
                                            d="M269.156 385.089 270.011 385.089 271.489 385.322 272.967 385.789 274.211 386.411 275.144 387.033 275.922 387.733 276.856 388.667 277.711 389.911 278.333 391.156 278.8 392.556 279.033 393.722 279.111 394.344 279.111 395.822 278.878 397.3 278.489 398.622 277.867 399.944 277.089 401.033 276.933 401.033 276.311 399.944 275.378 398.856 274.522 398.078 273.433 397.378 272.267 396.833 270.944 396.444 269.156 396.211Z"
                                        />
                                        <path
                                            d="M256.4 400.878 256.789 400.956 258.967 402.2 260.522 403.133 260.6 403.289 260.444 404.922 260.6 406.556 260.989 408.033 261.533 409.2 261.533 409.433 259.356 410.678 257.489 411.767 253.444 414.1 252.122 414.878 251.889 414.878 251.189 413.4 250.8 412.078 250.644 411.144 250.567 409.822 250.722 408.344 250.956 407.256 251.5 405.778 252.044 404.767 252.744 403.756 253.678 402.744 254.533 401.967 255.933 401.111Z"
                                        />
                                        <path
                                            d="M276.7 409.433 277.089 409.511 278.956 410.6 285.022 414.1 286.344 414.878 286.189 415.267 285.644 416.044 284.944 416.9 284.4 417.444 283.233 418.3 281.989 419 280.511 419.544 279.344 419.778 278.878 419.856 276.544 419.856 275.378 419.622 274.133 419.233 272.811 418.611 271.878 417.989 271.878 413.322 272.578 413.011 273.9 412.311 274.833 411.611 275.922 410.522Z"
                                        />
                                        <path
                                            d="M259.667 390.067 261.378 390.067 262.856 390.3 264.489 390.844 265.811 391.544 266.433 391.933 266.433 396.678 265.033 397.3 263.944 398 263.089 398.7 262.544 399.244 261.611 400.567 261.144 400.411 259.822 399.633 253.756 396.133 252.044 395.122 251.967 394.967 252.511 394.111 253.367 393.1 253.989 392.478 255.156 391.622 256.244 391 257.722 390.456 258.578 390.222Z"
                                        />
                                        <path
                                            d="M263.167 411.533 263.478 411.611 264.644 412.467 265.967 413.089 267.211 413.478 268.144 413.633 269.078 413.711 269.156 413.789 269.156 424.833 267.989 424.833 266.433 424.522 265.111 424.056 263.711 423.278 262.7 422.5 261.922 421.8 261.144 420.867 260.367 419.622 259.744 418.222 259.356 416.744 259.2 415.344 259.2 414.489 259.278 413.789 261.222 412.7 262.544 411.922Z"
                                        />
                                        <path
                                            d="M286.267 395.044 286.422 395.044 286.967 396.133 287.433 397.533 287.667 398.778 287.744 400.333 287.589 401.733 287.278 403.056 286.656 404.533 286.111 405.467 285.489 406.322 284.633 407.256 283.467 408.189 282.456 408.811 281.756 409.122 279.811 408.033 277.944 406.944 277.711 406.789 277.867 405.389 277.867 404.222 278.567 403.522 279.578 402.2 280.278 401.033 280.978 399.556 281.522 397.844 282.222 397.378 284.167 396.289 286.033 395.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c3103"
                            d="M573.5 405C573.5 391.469 584.469 380.5 598 380.5 611.531 380.5 622.5 391.469 622.5 405 622.5 418.531 611.531 429.5 598 429.5 584.469 429.5 573.5 418.531 573.5 405Z"
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
                                            d="M597.689 397.933 598.622 397.933 599.944 398.167 601.033 398.633 601.889 399.178 602.9 400.189 603.522 401.122 603.989 402.367 604.144 403.067 604.144 404.933 603.833 406.1 603.211 407.344 602.589 408.122 602.044 408.667 600.956 409.367 599.711 409.833 598.933 409.989 597.378 409.989 596.133 409.678 595.278 409.289 594.422 408.744 593.567 407.967 593.022 407.189 592.478 406.1 592.167 404.856 592.089 403.922 592.244 402.678 592.556 401.667 593.178 400.5 594.033 399.567 594.656 399.022 595.978 398.322 597.144 398.011Z"
                                        />
                                        <path
                                            d="M598.156 384.089 599.011 384.089 600.489 384.322 601.967 384.789 603.211 385.411 604.144 386.033 604.922 386.733 605.856 387.667 606.711 388.911 607.333 390.156 607.8 391.556 608.033 392.722 608.111 393.344 608.111 394.822 607.878 396.3 607.489 397.622 606.867 398.944 606.089 400.033 605.933 400.033 605.311 398.944 604.378 397.856 603.522 397.078 602.433 396.378 601.267 395.833 599.944 395.444 598.156 395.211Z"
                                        />
                                        <path
                                            d="M585.4 399.878 585.789 399.956 587.967 401.2 589.522 402.133 589.6 402.289 589.444 403.922 589.6 405.556 589.989 407.033 590.533 408.2 590.533 408.433 588.356 409.678 586.489 410.767 582.444 413.1 581.122 413.878 580.889 413.878 580.189 412.4 579.8 411.078 579.644 410.144 579.567 408.822 579.722 407.344 579.956 406.256 580.5 404.778 581.044 403.767 581.744 402.756 582.678 401.744 583.533 400.967 584.933 400.111Z"
                                        />
                                        <path
                                            d="M605.7 408.433 606.089 408.511 607.956 409.6 614.022 413.1 615.344 413.878 615.189 414.267 614.644 415.044 613.944 415.9 613.4 416.444 612.233 417.3 610.989 418 609.511 418.544 608.344 418.778 607.878 418.856 605.544 418.856 604.378 418.622 603.133 418.233 601.811 417.611 600.878 416.989 600.878 412.322 601.578 412.011 602.9 411.311 603.833 410.611 604.922 409.522Z"
                                        />
                                        <path
                                            d="M588.667 389.067 590.378 389.067 591.856 389.3 593.489 389.844 594.811 390.544 595.433 390.933 595.433 395.678 594.033 396.3 592.944 397 592.089 397.7 591.544 398.244 590.611 399.567 590.144 399.411 588.822 398.633 582.756 395.133 581.044 394.122 580.967 393.967 581.511 393.111 582.367 392.1 582.989 391.478 584.156 390.622 585.244 390 586.722 389.456 587.578 389.222Z"
                                        />
                                        <path
                                            d="M592.167 410.533 592.478 410.611 593.644 411.467 594.967 412.089 596.211 412.478 597.144 412.633 598.078 412.711 598.156 412.789 598.156 423.833 596.989 423.833 595.433 423.522 594.111 423.056 592.711 422.278 591.7 421.5 590.922 420.8 590.144 419.867 589.367 418.622 588.744 417.222 588.356 415.744 588.2 414.344 588.2 413.489 588.278 412.789 590.222 411.7 591.544 410.922Z"
                                        />
                                        <path
                                            d="M615.267 394.044 615.422 394.044 615.967 395.133 616.433 396.533 616.667 397.778 616.744 399.333 616.589 400.733 616.278 402.056 615.656 403.533 615.111 404.467 614.489 405.322 613.633 406.256 612.467 407.189 611.456 407.811 610.756 408.122 608.811 407.033 606.944 405.944 606.711 405.789 606.867 404.389 606.867 403.222 607.567 402.522 608.578 401.2 609.278 400.033 609.978 398.556 610.522 396.844 611.222 396.378 613.167 395.289 615.033 394.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c4203"
                            d="M735.5 404C735.5 390.469 746.469 379.5 760 379.5 773.531 379.5 784.5 390.469 784.5 404 784.5 417.531 773.531 428.5 760 428.5 746.469 428.5 735.5 417.531 735.5 404Z"
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
                                            d="M0 0 0.922222 0 2.2287 0.230556 3.30463 0.691667 4.15 1.22963 5.14907 2.2287 5.76389 3.15093 6.225 4.38056 6.3787 5.07222 6.3787 6.91667 6.0713 8.06944 5.45648 9.29907 4.84167 10.0676 4.3037 10.6056 3.22778 11.2972 1.99815 11.7583 1.22963 11.912-0.307407 11.912-1.53704 11.6046-2.38241 11.2204-3.22778 10.6824-4.07315 9.91389-4.61111 9.14537-5.14907 8.06944-5.45648 6.83981-5.53333 5.91759-5.37963 4.68796-5.07222 3.68889-4.45741 2.53611-3.61204 1.61389-2.99722 1.07593-1.69074 0.384259-0.537963 0.0768519Z"
                                            transform="matrix(1.01205 0 0 1 758.689 397.506)"
                                        />
                                        <path
                                            d="M0 0 0.84537 0 2.30556 0.230556 3.76574 0.691667 4.99537 1.30648 5.91759 1.9213 6.68611 2.61296 7.60833 3.53519 8.4537 4.76481 9.06852 5.99444 9.52963 7.37778 9.76019 8.53056 9.83704 9.14537 9.83704 10.6056 9.60648 12.0657 9.22222 13.3722 8.60741 14.6787 7.83889 15.7546 7.68519 15.7546 7.07037 14.6787 6.14815 13.6028 5.30278 12.8343 4.22685 12.1426 3.07407 11.6046 1.76759 11.2204 0 10.9898Z"
                                            transform="matrix(1.01205 0 0 1 759.156 383.826)"
                                        />
                                        <path
                                            d="M0 0 0.384259 0.0768519 2.53611 1.30648 4.07315 2.2287 4.15 2.38241 3.9963 3.9963 4.15 5.61019 4.53426 7.07037 5.07222 8.22315 5.07222 8.4537 2.92037 9.68333 1.07593 10.7593-2.92037 13.0648-4.22685 13.8333-4.45741 13.8333-5.14907 12.3731-5.53333 11.0667-5.68704 10.1444-5.76389 8.83796-5.61019 7.37778-5.37963 6.30185-4.84167 4.84167-4.3037 3.84259-3.61204 2.84352-2.68981 1.84444-1.84444 1.07593-0.461111 0.230556Z"
                                            transform="matrix(1.01205 0 0 1 746.4 399.427)"
                                        />
                                        <path
                                            d="M0 0 0.384259 0.0768519 2.2287 1.15278 8.22315 4.61111 9.52963 5.37963 9.37593 5.76389 8.83796 6.53241 8.1463 7.37778 7.60833 7.91574 6.45556 8.76111 5.22593 9.45278 3.76574 9.99074 2.61296 10.2213 2.15185 10.2981-0.153704 10.2981-1.30648 10.0676-2.53611 9.68333-3.84259 9.06852-4.76481 8.4537-4.76481 3.84259-4.07315 3.53519-2.76667 2.84352-1.84444 2.15185-0.768519 1.07593Z"
                                            transform="matrix(1.01205 0 0 1 766.7 407.881)"
                                        />
                                        <path
                                            d="M0 0 1.69074 0 3.15093 0.230556 4.76481 0.768519 6.0713 1.46019 6.68611 1.84444 6.68611 6.53241 5.30278 7.14722 4.22685 7.83889 3.38148 8.53056 2.84352 9.06852 1.9213 10.375 1.46019 10.2213 0.153704 9.45278-5.84074 5.99444-7.53148 4.99537-7.60833 4.84167-7.07037 3.9963-6.225 2.99722-5.61019 2.38241-4.45741 1.53704-3.38148 0.922222-1.9213 0.384259-1.07593 0.153704Z"
                                            transform="matrix(1.01205 0 0 1 749.667 388.744)"
                                        />
                                        <path
                                            d="M0 0 0.307407 0.0768519 1.46019 0.922222 2.76667 1.53704 3.9963 1.9213 4.91852 2.075 5.84074 2.15185 5.91759 2.2287 5.91759 13.1417 4.76481 13.1417 3.22778 12.8343 1.9213 12.3731 0.537963 11.6046-0.461111 10.8361-1.22963 10.1444-1.99815 9.22222-2.76667 7.99259-3.38148 6.60926-3.76574 5.14907-3.91944 3.76574-3.91944 2.92037-3.84259 2.2287-1.9213 1.15278-0.614815 0.384259Z"
                                            transform="matrix(1.01205 0 0 1 753.167 409.956)"
                                        />
                                        <path
                                            d="M0 0 0.153704 0 0.691667 1.07593 1.15278 2.45926 1.38333 3.68889 1.46019 5.22593 1.30648 6.60926 0.999074 7.91574 0.384259 9.37593-0.153704 10.2981-0.768519 11.1435-1.61389 12.0657-2.76667 12.988-3.76574 13.6028-4.45741 13.9102-6.3787 12.8343-8.22315 11.7583-8.4537 11.6046-8.3 10.2213-8.3 9.06852-7.60833 8.37685-6.60926 7.07037-5.91759 5.91759-5.22593 4.45741-4.68796 2.76667-3.9963 2.30556-2.075 1.22963-0.230556 0.153704Z"
                                            transform="matrix(1.01205 0 0 1 776.267 393.663)"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                            d="M532.062 541.433 615.662 541.433 615.662 555.024 532.062 555.024Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.062 555.024 615.662 555.024 615.662 568.615 532.062 568.615Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M531.396 555.024 616.329 555.024"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M532.062 540.766 532.062 569.282"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M615.662 540.766 615.662 569.282"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M531.396 541.433 616.329 541.433"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M531.396 568.615 616.329 568.615"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g162"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(534.729 551)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g163"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(534.729 565)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip87)"
                            transform="matrix(0.000104987 0 0 0.000104987 607 542)"
                        >
                            <g clip-path="url(#clip88)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip89)"
                            transform="matrix(0.000104987 0 0 0.000104987 608 556)"
                        >
                            <g clip-path="url(#clip90)" transform="matrix(1 0 0 1.02857 -0.5 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M309.052 540.724 392.651 540.724 392.651 554.315 309.052 554.315Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M309.052 554.315 392.651 554.315 392.651 567.906 309.052 567.906Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M308.385 554.315 393.318 554.315"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M309.052 540.057 309.052 568.573"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M392.651 540.057 392.651 568.573"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M308.385 540.724 393.318 540.724"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M308.385 567.906 393.318 567.906"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g126"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(311.718 551)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g127"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(311.718 564)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip91)"
                            transform="matrix(0.000104987 0 0 0.000104987 384 541)"
                        >
                            <g clip-path="url(#clip92)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip93)"
                            transform="matrix(0.000104987 0 0 0.000104987 385 555)"
                        >
                            <g clip-path="url(#clip94)" transform="matrix(1 0 0 1.02857 -0.25 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M990.231 541.491 1073.83 541.491 1073.83 555.082 990.231 555.082Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M990.231 555.082 1073.83 555.082 1073.83 568.673 990.231 568.673Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M989.564 555.082 1074.5 555.082"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M990.231 540.824 990.231 569.34"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M1073.83 540.824 1073.83 569.34"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M989.564 541.491 1074.5 541.491"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M989.564 568.673 1074.5 568.673"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g204"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(992.898 551)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g205"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(992.898 565)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip95)"
                            transform="matrix(0.000104987 0 0 0.000104987 1066 542)"
                        >
                            <g clip-path="url(#clip96)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip97)"
                            transform="matrix(0.000104987 0 0 0.000104987 1066 556)"
                        >
                            <g clip-path="url(#clip98)" transform="matrix(1 0 0 1.02857 0 -0.5)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M30.2989 582.326 113.898 582.326 113.898 595.917 30.2989 595.917Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M30.2989 595.917 113.898 595.917 113.898 609.508 30.2989 609.508Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M29.6322 595.917 114.565 595.917"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M30.2989 581.659 30.2989 610.175"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M113.898 581.659 113.898 610.175"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M29.6322 582.326 114.565 582.326"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M29.6322 609.508 114.565 609.508"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g109"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(32.9656 592)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g108"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(32.9656 606)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip99)"
                            transform="matrix(0.000104987 0 0 0.000104987 106 583)"
                        >
                            <g clip-path="url(#clip100)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip101)"
                            transform="matrix(0.000104987 0 0 0.000104987 106 597)"
                        >
                            <g clip-path="url(#clip102)" transform="scale(1 1.02857)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M142.588 581.292 226.187 581.292 226.187 594.884 142.588 594.884Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M142.588 594.884 226.187 594.884 226.187 608.475 142.588 608.475Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M141.921 594.884 226.854 594.884"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M142.588 580.626 142.588 609.141"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M226.187 580.626 226.187 609.141"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M141.921 581.292 226.854 581.292"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M141.921 608.475 226.854 608.475"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g115"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(145.254 591)"
                            >
                                Р
                            </text>
                        </g>
                        <g>
                            <text id="g114"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(145.254 605)"
                            >
                                Р
                            </text>
                        </g>
                        <g
                            clip-path="url(#clip103)"
                            transform="matrix(0.000104987 0 0 0.000104987 218 582)"
                        >
                            <g clip-path="url(#clip104)" transform="matrix(1 0 0 1.02857 -0.125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img22"
                                    transform="scale(1221.15 1221.15)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip105)"
                            transform="matrix(0.000104987 0 0 0.000104987 218 596)"
                        >
                            <g clip-path="url(#clip106)" transform="matrix(1.16667 0 0 1 -0.125 0)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img25"
                                    transform="scale(1256.04 1256.04)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M658.382 590.278 732.028 590.278 732.028 604.011 658.382 604.011Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M658.382 589.611 658.382 604.678"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M732.028 589.611 732.028 604.678"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M657.715 590.278 732.695 590.278"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M657.715 604.011 732.695 604.011"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g168"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(662.161 600)"
                            >
                                Р
                            </text>
                        </g>
                        <path
                            d="M772.696 590.53 846.342 590.53 846.342 604.263 772.696 604.263Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M772.696 589.863 772.696 604.93"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M846.342 589.863 846.342 604.93"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M772.029 590.53 847.009 590.53"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M772.029 604.263 847.009 604.263"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text id="g198"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(776.475 601)"
                            >
                                Р
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

        fetch('/farxod/server16')
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
                let c5 = 0;
                let c6 = 0;

                data.forEach(item => {

                    if (item.id === 97) {
                        const value = document.getElementById("g97");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(97);
                        } else {
                            falseAnimation(97)
                        }
                    } else if(item.id === 96) {
                        const value = document.getElementById("g96");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(97);
                        } else {
                            falseAnimation(97)
                        }
                    } else if (item.id === 103) {
                        const value = document.getElementById("g103");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(103);
                        } else {
                            falseAnimation(103)
                        }
                    } else if(item.id === 102) {
                        const value = document.getElementById("g102");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(103);
                        } else {
                            falseAnimation(103)
                        }
                    } else if (item.id === 85) {
                        const value = document.getElementById("g85");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(85);
                        } else {
                            falseAnimation(85)
                        }
                    } else if(item.id === 84) {
                        const value = document.getElementById("g84");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(85);
                        } else {
                            falseAnimation(85)
                        }
                    } else if (item.id === 91) {
                        const value = document.getElementById("g91");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(91);
                        } else {
                            falseAnimation(91)
                        }
                    } else if(item.id === 90) {
                        const value = document.getElementById("g90");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(91);
                        } else {
                            falseAnimation(91)
                        }
                    } else if (item.id === 67) {
                        const value = document.getElementById("g67");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(67);
                        } else {
                            falseAnimation(67)
                        }
                    } else if(item.id === 66) {
                        const value = document.getElementById("g66");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(67);
                        } else {
                            falseAnimation(67)
                        }
                    } else if (item.id === 73) {
                        const value = document.getElementById("g73");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(73);
                        } else {
                            falseAnimation(73)
                        }
                    } else if(item.id === 72) {
                        const value = document.getElementById("g72");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(73);
                        } else {
                            falseAnimation(73)
                        }
                    } else if (item.id === 157) {
                        const value = document.getElementById("g157");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(157);
                        } else {
                            falseAnimation(157)
                        }
                    } else if(item.id === 156) {
                        const value = document.getElementById("g156");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(157);
                        } else {
                            falseAnimation(157)
                        }
                    } else if (item.id === 151) {
                        const value = document.getElementById("g151");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(151);
                        } else {
                            falseAnimation(151)
                        }
                    } else if(item.id === 150) {
                        const value = document.getElementById("g150");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(151);
                        } else {
                            falseAnimation(151)
                        }
                    } else if (item.id === 145) {
                        const value = document.getElementById("g145");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(145);
                        } else {
                            falseAnimation(145)
                        }
                    } else if(item.id === 144) {
                        const value = document.getElementById("g144");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(145);
                        } else {
                            falseAnimation(145)
                        }
                    } else if (item.id === 139) {
                        const value = document.getElementById("g139");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(139);
                        } else {
                            falseAnimation(139)
                        }
                    } else if(item.id === 138) {
                        const value = document.getElementById("g138");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(139);
                        } else {
                            falseAnimation(139)
                        }
                    } else if (item.id === 133) {
                        const value = document.getElementById("g133");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(133);
                        } else {
                            falseAnimation(133)
                        }
                    } else if(item.id === 132) {
                        const value = document.getElementById("g132");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(133);
                        } else {
                            falseAnimation(133)
                        }
                    } else if (item.id === 79) {
                        const value = document.getElementById("g79");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(79);
                            c1 = 1;
                        } else {
                            falseAnimation(79)
                            c1 = 0;
                        }
                    } else if(item.id === 78) {
                        const value = document.getElementById("g78");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(79);
                            c1 = 1;
                        } else {
                            falseAnimation(79);
                            c1 = 0;
                        }
                    } else if (item.id === 49) {
                        const value = document.getElementById("g49");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(49);
                            c4 = 1;
                        } else {
                            falseAnimation(49);
                            c4 = 0;
                        }
                    } else if(item.id === 48) {
                        const value = document.getElementById("g48");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(49);
                            c4 = 1;
                        } else {
                            falseAnimation(49);
                            c4 = 0;
                        }
                    } else if (item.id === 121) {
                        const value = document.getElementById("g121");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(121);
                        } else {
                            falseAnimation(121)
                        }
                    } else if(item.id === 120) {
                        const value = document.getElementById("g120");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(121);
                        } else {
                            falseAnimation(121)
                        }
                    } else if (item.id === 109) {
                        const value = document.getElementById("g109");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(109);
                        } else {
                            falseAnimation(109)
                        }
                    } else if(item.id === 108) {
                        const value = document.getElementById("g108");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(109);
                        } else {
                            falseAnimation(109)
                        }
                    } else if (item.id === 115) {
                        const value = document.getElementById("g115");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(115);
                        } else {
                            falseAnimation(115)
                        }
                    } else if(item.id === 114) {
                        const value = document.getElementById("g114");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(115);
                        } else {
                            falseAnimation(115)
                        }
                    } else if (item.id === 127) {
                        const value = document.getElementById("g127");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(126);
                            c2 = 1;
                        } else {
                            falseAnimation(126)
                            c2 = 0;
                        }
                    } else if(item.id === 126) {
                        const value = document.getElementById("g126");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(126);
                            c2 = 1;
                        } else {
                            falseAnimation(126)
                            c2 = 0;
                        }
                    } else if (item.id === 163) {
                        const value = document.getElementById("g163");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(163);
                            c3 = 1;
                        } else {
                            falseAnimation(163);
                            c3 = 0;
                        }
                    } else if(item.id === 162) {
                        const value = document.getElementById("g162");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(163);
                            c3 = 1;
                        } else {
                            falseAnimation(163);
                            c3 = 0;
                        }
                    } else if (item.id === 205) {
                        const value = document.getElementById("g205");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(205);
                            c5 = 1;
                        } else {
                            falseAnimation(205)
                            c5 = 0;
                        }
                    } else if(item.id === 204) {
                        const value = document.getElementById("g204");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(205);
                            c5 = 1;
                        } else {
                            falseAnimation(205)
                            c5 = 0;
                        }
                    }
                    //Aggregate-1
                    else if(item.id === 900) {
                        const value = document.getElementById("g10");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a10");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 30.8 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(9);
                            trueAnimation(9001);
                            trueAnimation(9002);
                            trueAnimation(9003);
                        } else {
                            falseAnimation(9);
                            falseAnimation(9001);
                            falseAnimation(9002);
                            falseAnimation(9003);
                        }
                    } else if(item.id === 901) {
                        const value = document.getElementById("g12");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 902) {
                        const value = document.getElementById("k10");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 903) {
                        const value = document.getElementById("n10");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 904) {
                        const value = document.getElementById("w10");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 20) {
                        const value = document.getElementById("g21");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a21");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 30.8 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(20);
                            trueAnimation(2001);
                            trueAnimation(2002);
                            trueAnimation(2003);
                        } else {
                            falseAnimation(20);
                            falseAnimation(2001);
                            falseAnimation(2002);
                            falseAnimation(2003);
                        }
                    } else if(item.id === 22) {
                        const value = document.getElementById("g23");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 23) {
                        const value = document.getElementById("k21");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 24) {
                        const value = document.getElementById("n21");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 25) {
                        const value = document.getElementById("w21");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-3
                    else if(item.id === 31) {
                        const value = document.getElementById("g32");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a32");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 33.3 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(31);
                            trueAnimation(3101);
                            trueAnimation(3102);
                            trueAnimation(3103);
                        } else {
                            falseAnimation(31);
                            falseAnimation(3101);
                            falseAnimation(3102);
                            falseAnimation(3103);
                        }
                    } else if(item.id === 33) {
                        const value = document.getElementById("g34");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 34) {
                        const value = document.getElementById("k32");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 35) {
                        const value = document.getElementById("n32");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 36) {
                        const value = document.getElementById("w32");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-4
                    else if(item.id === 42) {
                        const value = document.getElementById("g43");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a43");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 33.3 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(42);
                            trueAnimation(4201);
                            trueAnimation(4202);
                            trueAnimation(4203);
                        } else {
                            falseAnimation(42);
                            falseAnimation(4201);
                            falseAnimation(4202);
                            falseAnimation(4203);
                        }
                    } else if(item.id === 44) {
                        const value = document.getElementById("g45");
                        value.textContent = "Qвар= " + formatNumber(item.value, 2, ',', ' ') + " МВАр";
                    } else if(item.id === 45) {
                        const value = document.getElementById("k43");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 46) {
                        const value = document.getElementById("n43");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 47) {
                        const value = document.getElementById("w43");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    else if(item.id === 168) {
                        const value = document.getElementById("g168");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " КВт";
                        if (item.value > 0) {
                            trueAnimation(168);
                        } else {
                            falseAnimation(168);
                        }
                    } else if(item.id === 198) {
                        const value = document.getElementById("g198");
                        value.textContent = "P= " + formatNumber(item.value, 2, ',', ' ') + " КВт";
                        if (item.value > 0) {
                            trueAnimation(198);
                            c6 = 1;
                        } else {
                            falseAnimation(198);
                            c6 = 0;
                        }
                    } else if(item.id === 82) {
                        const value = document.getElementById("g82");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 76) {
                        const value = document.getElementById("g76");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 118) {
                        const value = document.getElementById("g118");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
                    } else if(item.id === 124) {
                        const value = document.getElementById("g124");
                        value.textContent = "U= " + formatNumber(item.value, 1, ',', ' ') + " кВ";
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
                if (c1 > 0 || c2 > 0 || c3 > 0) {
                    trueAnimation(1);
                    trueAnimation(2);
                    trueAnimation(3);
                } else {
                    falseAnimation(1);
                    falseAnimation(2);
                    falseAnimation(3);
                }
                if (c4 > 0 || c5 > 0 || c6 > 0) {
                    trueAnimation(4);
                    trueAnimation(5);
                    trueAnimation(6);
                } else {
                    falseAnimation(4);
                    falseAnimation(5);
                    falseAnimation(6);
                }

                falseAnimation(10000);
                falseAnimation(10001);
                falseAnimation(10002);
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