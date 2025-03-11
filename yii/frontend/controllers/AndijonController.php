<?php

namespace frontend\controllers;

use common\models\Guides;
use common\models\Water;

class AndijonController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes29()
    {
        return $this->render('ges29');
    }

    public function actionGes36()
    {
        return $this->render('ges36');
    }

    public function actionKudash()
    {
        return $this->render('kudash');
    }

    public function actionXonobod()
    {
        return $this->render('xonobod');
    }

    protected string $url = "http://user:usrAn_Ge@192.168.40.215:10042/crq?req=current";

    private function fetchData()
    {
        $data = file_get_contents($this->url);
        return json_encode($data);
    }

    private function getValue($data, $value)
    {
        $position = strpos($data, $value);
        $substring = substr($data, $position);
        return explode(",", $substring);
    }

    protected function getPressure($pressure, $power) {
        $napor = 0;
        if ($pressure >= 45 && $pressure < 50) {
            $napor = 45;
        } else if ($pressure >= 50 && $pressure < 55) {
            $napor = 50;
        } else if ($pressure >= 55 && $pressure < 60) {
            $napor = 55;
        } else if ($pressure >= 60 && $pressure < 65) {
            $napor = 60;
        } else if ($pressure >= 65 && $pressure < 70) {
            $napor = 65;
        } else if ($pressure >= 70 && $pressure < 75) {
            $napor = 70;
        } else if ($pressure >= 75 && $pressure < 80) {
            $napor = 75;
        } else if ($pressure >= 80 && $pressure < 85) {
            $napor = 80;
        } else if ($pressure >= 85 && $pressure < 90) {
            $napor = 85;
        } else if ($pressure >= 90 && $pressure < 95) {
            $napor = 90;
        } else if ($pressure >= 95 && $pressure < 99) {
            $napor = 95;
        } else if ($pressure == 99) {
            $napor = 99;
        }

        $result = Guides::find()->where(['pressure' => $napor])->andWhere(['id_organization' => 11])->orderBy(['power' => SORT_ASC])->all();
        $guide = 0;
        foreach ($result as $item) {
            if ($power <= $item['power'] && ($power + 0.5) > $item['power']) {
                $guide = $item['guide'] / 510 * 100;
            }
        }
        return $guide;
    }

    protected function getWater($power, $pressure) {
        return $pressure == 0 || $power == 0 ? 0 : $power * 60000 / 1000000 / 0.97 / 0.934 / $pressure / 9.81 * 1000;
    }
    //Андижон ГЭС-29
    public function actionServer29()
    {
        $water = Water::find()->where(['id_organization' => 11])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges29Andijon80 = $this->getValue($data, "G80");
        $ges29Andijon81 = $this->getValue($data, "G81");
        $ges29Andijon40 = $this->getValue($data, "G40");
        $ges29Andijon41 = $this->getValue($data, "G41");
        $ges29Andijon190 = $this->getValue($data, "G190");
        $ges29Andijon120 = $this->getValue($data, "G120");
        $ges29Andijon121 = $this->getValue($data, "G121");
        $ges29Andijon213 = $this->getValue($data, "G213");
        $ges29Andijon160 = $this->getValue($data, "G160");
        $ges29Andijon161 = $this->getValue($data, "G161");
        $ges29Andijon670 = $this->getValue($data, "G670");
        $ges29Andijon669 = $this->getValue($data, "G669");
        $ges29Andijon236 = $this->getValue($data, "G236");
        $ges29Andijon70 = $this->getValue($data, "G70");
        $ges29Andijon69 = $this->getValue($data, "G69");
        $ges29Andijon659 = $this->getValue($data, "G659");
        $ges29Andijon658 = $this->getValue($data, "G658");
        $ges29Andijon429 = $this->getValue($data, "G429");
        $ges29Andijon469 = $this->getValue($data, "G469");
        $ges29Andijon269 = $this->getValue($data, "G269");
        $ges29Andijon271 = $this->getValue($data, "G271");
        $ges29Andijon309 = $this->getValue($data, "G309");
        $ges29Andijon311 = $this->getValue($data, "G311");
        $ges29Andijon349 = $this->getValue($data, "G349");
        $ges29Andijon351 = $this->getValue($data, "G351");
        $ges29Andijon389 = $this->getValue($data, "G389");
        $ges29Andijon391 = $this->getValue($data, "G391");
        $ges29Andijon418 = $this->getValue($data, "G418");
        $ges29Andijon458 = $this->getValue($data, "G458");

        $CONST = 1000000;
        $kvt = 1000;

        $set29Andijon80 = $ges29Andijon80[2] * 176000 / $CONST;
        $set29Andijon81 = $ges29Andijon81[2] * 176000 / $CONST;
        $set29Andijon40 = $ges29Andijon40[2] * 88000 / $CONST;
        $set29Andijon41 = $ges29Andijon41[2] * 88000 / $CONST;
        $set29Andijon190 = $ges29Andijon190[2] * 660000 / $CONST;
        $set29Andijon120 = $ges29Andijon120[2] * 176000 / $CONST;
        $set29Andijon121 = $ges29Andijon121[2] * 176000 / $CONST;
        $set29Andijon213 = $ges29Andijon213[2] * 660000 / $CONST;
        $set29Andijon160 = $ges29Andijon160[2] * 66000 / $CONST;
        $set29Andijon161 = $ges29Andijon161[2] * 66000 / $CONST;
        $set29Andijon670 = $ges29Andijon670[2] * 132000 / $CONST;
        $set29Andijon669 = $ges29Andijon669[2] * 132000 / $CONST;
        $set29Andijon236 = $ges29Andijon236[2] * 660000 / $CONST;

        $set29Andijon429 = $ges29Andijon429[2] * 160 / $kvt;
        $set29Andijon469 = $ges29Andijon469[2] * 160 / $kvt;

        $power29Andijon269 = $ges29Andijon269[2] * 60000 / $CONST;//active
        $reactive29Andijon271 = $ges29Andijon271[2] * 60000 / $CONST;//reactive
        $water29Andijon269 = $energy->getWater($power29Andijon269, $pressure, 0.97, 0.934);//water
        $kpd29Andijon269 = $energy->getKpd($power29Andijon269, $water29Andijon269, $pressure, 0.9735);//kpd

        $power29Andijon309 = $ges29Andijon309[2] * 60000 / $CONST;//active
        $reactive29Andijon311 = $ges29Andijon311[2] * 60000 / $CONST;//reactive
        $water29Andijon309 = $energy->getWater($power29Andijon309, $pressure, 0.97, 0.934);//water
        $kpd29Andijon309 = $energy->getKpd($power29Andijon309, $water29Andijon309, $pressure, 0.9735);//kpd

        $power29Andijon349 = $ges29Andijon349[2] * 60000 / $CONST;//active
        $reactive29Andijon351 = $ges29Andijon351[2] * 60000 / $CONST;//reactive
        $water29Andijon349 = $energy->getWater($power29Andijon349, $pressure, 0.97, 0.934);//water
        $kpd29Andijon349 = $energy->getKpd($power29Andijon349, $water29Andijon349, $pressure, 0.9735);//kpd

        $power29Andijon389 = $ges29Andijon389[2] * 60000 / $CONST;//active
        $reactive29Andijon391 = $ges29Andijon391[2] * 60000 / $CONST;//reactive
        $water29Andijon389 = $energy->getWater($power29Andijon389, $pressure, 0.97, 0.934);//water
        $kpd29Andijon389 = $energy->getKpd($power29Andijon389, $water29Andijon389, $pressure, 0.9735);//kpd

        $data = array(
            array("id" => 1, "value" => $power29Andijon269 + $power29Andijon309 + $power29Andijon349 + $power29Andijon389),
            array("id" => 2, "value" => $reactive29Andijon271 + $reactive29Andijon311 + $reactive29Andijon351 + $reactive29Andijon391),
            array("id" => 3, "value" => (
                $set29Andijon81 +
                $set29Andijon41 +
                ((-1 * $set29Andijon190) > 0 ? (-1) * $set29Andijon190 : 0) +
                $set29Andijon121 +
                ($set29Andijon213 > 0 ? $set29Andijon213 : 0) +
                $set29Andijon161 +
                $set29Andijon670 +
                (-1 * $set29Andijon236 > 0 ? -1 * $set29Andijon236 : 0)
            )),
            array("id" => 4, "value" =>
                $set29Andijon80 +
                $set29Andijon40 +
                ((-1) * $set29Andijon190 < 0 ? (-1) * $set29Andijon190 : 0) +
                $set29Andijon120 +
                ($set29Andijon213 <= 0 ? $set29Andijon213 : 0) +
                $set29Andijon160 +
                $set29Andijon669 +
                (-1 * $set29Andijon236 < 0 ? -1 * $set29Andijon236 : 0)
            ),
            array("id" => 5, "value" => $set29Andijon429 + $set29Andijon469),
            array("id" => 6, "value" => $water29Andijon269 + $water29Andijon309 + $water29Andijon349 + $water29Andijon389),

            array("id" => 11, "value" => ($ges29Andijon269[2] != 0 ? 1 : 0) + ($ges29Andijon309[2] != 0 ? 1 : 0) + ($ges29Andijon349[2] != 0 ? 1 : 0) + ($ges29Andijon389[2] != 0 ? 1 : 0)),
            array("id" => 13, "value" => ($ges29Andijon269[2] == 0 ? 1 : 0) + ($ges29Andijon309[2] == 0 ? 1 : 0) + ($ges29Andijon349[2] == 0 ? 1 : 0) + ($ges29Andijon389[2] == 0 ? 1 : 0)),
            array("id" => 12, "value" => 0),

            array("id" => 7, "value" => $ges29Andijon69[2] > 0 ? $ges29Andijon69[2] : ($ges29Andijon658[2] > 0 ? $ges29Andijon658[2] : ($ges29Andijon418[2] > 0 ? $ges29Andijon418[2] : ($ges29Andijon458[2])))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),

            array("id" => 80, "value" => $set29Andijon80),
            array("id" => 81, "value" => $set29Andijon81),
            array("id" => 40, "value" => $set29Andijon40),
            array("id" => 41, "value" => $set29Andijon41),
            array("id" => 190, "value" => $set29Andijon190),
            array("id" => 120, "value" => $set29Andijon120),
            array("id" => 121, "value" => $set29Andijon121),
            array("id" => 213, "value" => $set29Andijon213),
            array("id" => 160, "value" => $set29Andijon160),
            array("id" => 161, "value" => $set29Andijon161),
            array("id" => 670, "value" => $set29Andijon670),
            array("id" => 669, "value" => $set29Andijon669),
            array("id" => 236, "value" => $set29Andijon236),

            array("id" => 70, "value" => $energy->getVoltages($ges29Andijon70[2], 1100)),
            array("id" => 659, "value" => $energy->getVoltages($ges29Andijon659[2], 1100)),
            array("id" => 419, "value" => $power29Andijon269 > 0 || $power29Andijon309 > 0 || $set29Andijon429 > 0 ? 10 : 0),
            array("id" => 459, "value" => $power29Andijon349 > 0 || $power29Andijon389 > 0 || $set29Andijon469 > 0 ? 10.1 : 0),

            array("id" => 429, "value" => $set29Andijon429),
            array("id" => 469, "value" => $set29Andijon469),

            array("id" => 269, "value" => $power29Andijon269),//active
            array("id" => 271, "value" => $reactive29Andijon271),//reactive
            array("id" => 272, "value" => $kpd29Andijon269),//КПД
            array("id" => 273, "value" => $this->getPressure($pressure, $power29Andijon269)),//HA
            array("id" => 274, "value" => $water29Andijon269),//water

            array("id" => 309, "value" => $power29Andijon309),//active
            array("id" => 311, "value" => $reactive29Andijon311),//reactive
            array("id" => 312, "value" => $kpd29Andijon309),//КПД
            array("id" => 313, "value" => $this->getPressure($pressure, $power29Andijon309)),//HA
            array("id" => 314, "value" => $water29Andijon309),//water

            array("id" => 349, "value" => $power29Andijon349),//active
            array("id" => 351, "value" => $reactive29Andijon351),//reactive
            array("id" => 352, "value" => $kpd29Andijon349),//КПД
            array("id" => 353, "value" => $this->getPressure($pressure, $power29Andijon349)),//HA
            array("id" => 354, "value" => $water29Andijon349),//water

            array("id" => 389, "value" => $power29Andijon389),//active
            array("id" => 391, "value" => $reactive29Andijon391),//reactive
            array("id" => 392, "value" => $kpd29Andijon389),//КПД
            array("id" => 393, "value" => $this->getPressure($pressure, $power29Andijon389)),//HA
            array("id" => 394, "value" => $water29Andijon389),//water
        );

        echo json_encode($data);
    }

    //Андижон ГЭС-36
    public function actionServer36()
    {
        $organizationId = 59;
        $water = Water::find()
            ->select(['up_bef', 'down_bef'])
            ->where(['id_organization' => $organizationId])
            ->orderBy(['date' => SORT_DESC])
            ->one();

        $upBef = $water['up_bef'] ?? 0;
        $downBef = $water['down_bef'] ?? 0;
        $pressure = $upBef - $downBef;

        $CONST = 1000000;
        $kvt = 1000;
        $coefficients = [
            'G670' => 132000 / $CONST,
            'G669' => 132000 / $CONST,
            'G549' => 6300 / $kvt,
            'G629' => 6300 / $kvt,
            'G509' => 42000 / $CONST,
            'G511' => 42000 / $CONST,
            'G589' => 42000 / $CONST,
            'G591' => 42000 / $CONST,
        ];

        $data = $this->fetchData();
        $energy = new Energy();

        $values = [];
        foreach ($coefficients as $key => $multiplier) {
            $values[$key] = $this->getValue($data, $key)[2] * $multiplier;
        }

        $waterAndEfficiency = function ($power, $pressure, $efficiency1, $efficiency2) use ($energy) {
            $water = $energy->getWater($power, $pressure, $efficiency1, $efficiency2);
            $kpd = $energy->getKpd($power, $water, $pressure, $efficiency1);
            return [$water, $kpd];
        };

        [$water509, $kpd509] = $waterAndEfficiency($values['G509'], $pressure, 0.98, 0.913);
        [$water589, $kpd589] = $waterAndEfficiency($values['G589'], $pressure, 0.98, 0.913);

        $voltage659 = $energy->getVoltages($this->getValue($data, "G659")[2], 1100);
        $voltage539 = $energy->getVoltages($this->getValue($data, "G539")[2], 105);
        $voltage619 = $energy->getVoltages($this->getValue($data, "G619")[2], 105);

        $backupVoltage = $this->getValue($data, "G658")[2] > 0
            ? $this->getValue($data, "G658")[2]
            : ($this->getValue($data, "G538")[2] > 0
                ? $this->getValue($data, "G538")[2]
                : $this->getValue($data, "G618")[2]);

        $response = [
            ["id" => 1, "value" => $values['G509'] + $values['G589']],
            ["id" => 2, "value" => $values['G511'] + $values['G591']],
            ["id" => 3, "value" =>  $values['G669']],
            ["id" => 4, "value" => $values['G670']],
            ["id" => 5, "value" => $values['G549'] + $values['G629']],
            ["id" => 6, "value" => $values['G509'] + $values['G589']],

            ["id" => 11, "value" => ($values['G509'] != 0 ? 1 : 0) + ($values['G589'] != 0 ? 1 : 0)],
            ["id" => 13, "value" => ($values['G509'] == 0 ? 1 : 0) + ($values['G589'] == 0 ? 1 : 0)],
            ["id" => 12, "value" => 0],

            ["id" => 7, "value" => $backupVoltage],
            ["id" => 8, "value" => $upBef],
            ["id" => 9, "value" => $downBef],
            ["id" => 10, "value" => $pressure],

            ["id" => 670, "value" => $values['G670']],
            ["id" => 669, "value" => $values['G669']],
            ["id" => 659, "value" => $voltage659],
            ["id" => 539, "value" => $voltage539],
            ["id" => 619, "value" => $voltage619],
            ["id" => 549, "value" => $values['G549']],
            ["id" => 629, "value" => $values['G629']],
            ["id" => 509, "value" => $values['G509']],
            ["id" => 511, "value" => $values['G511']],
            ["id" => 512, "value" => $kpd509],
            ["id" => 513, "value" => 0],
            ["id" => 514, "value" => $water509],
            ["id" => 589, "value" => $values['G589']],
            ["id" => 591, "value" => $values['G591']],
            ["id" => 592, "value" => $kpd589],
            ["id" => 593, "value" => 0],
            ["id" => 594, "value" => $water589],
        ];

        header('Content-Type: application/json');
        echo json_encode($response);
    }


    //Андижон Кудаш
    public function actionServerKudash()
    {
        $water = Water::find()->where(['id_organization' => 60])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $gesKudashAndijon750 = $this->getValue($data, "G750");
        $gesKudashAndijon749 = $this->getValue($data, "G749");
        $gesKudashAndijon739 = $this->getValue($data, "G739");
        $gesKudashAndijon738 = $this->getValue($data, "G738");
        $gesKudashAndijon814 = $this->getValue($data, "G814");
        $gesKudashAndijon778 = $this->getValue($data, "G778");
        $gesKudashAndijon779 = $this->getValue($data, "G779");
        $gesKudashAndijon796 = $this->getValue($data, "G796");
        $gesKudashAndijon797 = $this->getValue($data, "G797");
        $gesKudashAndijon822 = $this->getValue($data, "G822");
        $gesKudashAndijon831 = $this->getValue($data, "G831");

        $CONST = 1000000;
        $kvt = 1000;
        $setKudashAndijon750 = $gesKudashAndijon750[2] * 7200 / $kvt;//7200
        $setKudashAndijon749 = $gesKudashAndijon749[2] * 7200 / $kvt;//7200

        $setKudashAndijon814 = $gesKudashAndijon814[2] * 360 / $kvt;//360

        $powerKudashAndijon778 = $gesKudashAndijon778[2] * 4800 / $kvt;//active
        $reactiveKudashAndijon779 = $gesKudashAndijon779[2] * 4800 / $kvt;//reactive
        $waterKudashAndijon778 = $energy->getWater($powerKudashAndijon778, $pressure, 0.98, 0.873);//water
        $kpdKudashAndijon778 = $energy->getKpd($powerKudashAndijon778, $waterKudashAndijon778, $pressure, 0.98);//kpd

        $powerKudashAndijon796 = $gesKudashAndijon796[2] * 4800 / $kvt;//active
        $reactiveKudashAndijon797 = $gesKudashAndijon797[2] * 4800 / $kvt;//reactive
        $waterKudashAndijon796 = $energy->getWater($powerKudashAndijon796, $pressure, 0.98, 0.873);//water
        $kpdKudashAndijon796 = $energy->getKpd($powerKudashAndijon796, $waterKudashAndijon796, $pressure, 0.98);//kpd

        $data = array(
            array("id" => 1, "value" => $powerKudashAndijon778 + $powerKudashAndijon796),
            array("id" => 2, "value" => $reactiveKudashAndijon779 + $reactiveKudashAndijon797),
            array("id" => 3, "value" => $setKudashAndijon749),
            array("id" => 4, "value" => $setKudashAndijon750),
            array("id" => 5, "value" => $setKudashAndijon814),
            array("id" => 6, "value" => $waterKudashAndijon778 + $waterKudashAndijon796),

            array("id" => 11, "value" => ($gesKudashAndijon778[2] != 0 ? 1 : 0) + ($gesKudashAndijon796[2] != 0 ? 1 : 0)),
            array("id" => 13, "value" => ($gesKudashAndijon778[2] == 0 ? 1 : 0) + ($gesKudashAndijon796[2] == 0 ? 1 : 0)),
            array("id" => 12, "value" => 0),

            array("id" => 7, "value" => $gesKudashAndijon738[2] > 0 ? $gesKudashAndijon738[2] : $gesKudashAndijon831[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),

            array("id" => 750, "value" => $setKudashAndijon750),
            array("id" => 749, "value" => $setKudashAndijon749),
            array("id" => 739, "value" => $energy->getVoltages($gesKudashAndijon739[2], 72)),
            array("id" => 822, "value" => $energy->getVoltages($gesKudashAndijon822[2], 72)),

            array("id" => 814, "value" => $setKudashAndijon814),

            array("id" => 778, "value" => $powerKudashAndijon778),//active
            array("id" => 779, "value" => $reactiveKudashAndijon779),//reactive
            array("id" => 780, "value" => $kpdKudashAndijon778),//КПД
            array("id" => 781, "value" => 0),//HA
            array("id" => 782, "value" => $waterKudashAndijon778),//water

            array("id" => 796, "value" => $powerKudashAndijon796),//active
            array("id" => 797, "value" => $reactiveKudashAndijon797),//reactive
            array("id" => 798, "value" => $kpdKudashAndijon796),//КПД
            array("id" => 799, "value" => 0),//HA
            array("id" => 800, "value" => $waterKudashAndijon796),//water
        );

        echo json_encode($data);
    }

    public function actionServer()
    {
        $CONST = 1000000;
        $kvt = 1000;

        $water29 = Water::find()->where(['id_organization' => 11])->orderBy(['date' => SORT_DESC])->one();
        $upBef29 = $water29 ? $water29['up_bef'] : 0;
        $downBef29 = $water29 ? $water29['down_bef'] : 0;
        $pressure29 = $upBef29 - $downBef29;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges29Andijon80 = $this->getValue($data, "G80");
        $ges29Andijon81 = $this->getValue($data, "G81");
        $ges29Andijon40 = $this->getValue($data, "G40");
        $ges29Andijon41 = $this->getValue($data, "G41");
        $ges29Andijon190 = $this->getValue($data, "G190");
        $ges29Andijon120 = $this->getValue($data, "G120");
        $ges29Andijon121 = $this->getValue($data, "G121");
        $ges29Andijon213 = $this->getValue($data, "G213");
        $ges29Andijon160 = $this->getValue($data, "G160");
        $ges29Andijon161 = $this->getValue($data, "G161");
        $ges29Andijon236 = $this->getValue($data, "G236");
        $ges29Andijon429 = $this->getValue($data, "G429");
        $ges29Andijon469 = $this->getValue($data, "G469");
        $ges29Andijon269 = $this->getValue($data, "G269");
        $ges29Andijon271 = $this->getValue($data, "G271");
        $ges29Andijon309 = $this->getValue($data, "G309");
        $ges29Andijon311 = $this->getValue($data, "G311");
        $ges29Andijon349 = $this->getValue($data, "G349");
        $ges29Andijon351 = $this->getValue($data, "G351");
        $ges29Andijon389 = $this->getValue($data, "G389");
        $ges29Andijon391 = $this->getValue($data, "G391");

        $set29Andijon80 = $ges29Andijon80[2] * 176000 / $CONST;
        $set29Andijon81 = $ges29Andijon81[2] * 176000 / $CONST;
        $set29Andijon40 = $ges29Andijon40[2] * 88000 / $CONST;
        $set29Andijon41 = $ges29Andijon41[2] * 88000 / $CONST;
        $set29Andijon190 = $ges29Andijon190[2] * 660000 / $CONST;
        $set29Andijon120 = $ges29Andijon120[2] * 176000 / $CONST;
        $set29Andijon121 = $ges29Andijon121[2] * 176000 / $CONST;
        $set29Andijon213 = $ges29Andijon213[2] * 660000 / $CONST;
        $set29Andijon160 = $ges29Andijon160[2] * 66000 / $CONST;
        $set29Andijon161 = $ges29Andijon161[2] * 66000 / $CONST;
        $set29Andijon236 = $ges29Andijon236[2] * 660000 / $CONST;

        $set29Andijon429 = $ges29Andijon429[2] * 160 / $kvt;
        $set29Andijon469 = $ges29Andijon469[2] * 160 / $kvt;

        $power29Andijon269 = $ges29Andijon269[2] * 60000 / $CONST;//active
        $reactive29Andijon271 = $ges29Andijon271[2] * 60000 / $CONST;//reactive
        $water29Andijon269 = $energy->getWater($power29Andijon269, $pressure29, 0.97, 0.934);//water

        $power29Andijon309 = $ges29Andijon309[2] * 60000 / $CONST;//active
        $reactive29Andijon311 = $ges29Andijon311[2] * 60000 / $CONST;//reactive
        $water29Andijon309 = $energy->getWater($power29Andijon309, $pressure29, 0.97, 0.934);//water

        $power29Andijon349 = $ges29Andijon349[2] * 60000 / $CONST;//active
        $reactive29Andijon351 = $ges29Andijon351[2] * 60000 / $CONST;//reactive
        $water29Andijon349 = $energy->getWater($power29Andijon349, $pressure29, 0.97, 0.934);//water

        $power29Andijon389 = $ges29Andijon389[2] * 60000 / $CONST;//active
        $reactive29Andijon391 = $ges29Andijon391[2] * 60000 / $CONST;//reactive
        $water29Andijon389 = $energy->getWater($power29Andijon389, $pressure29, 0.97, 0.934);//water

        $ges29AndijonActive = $power29Andijon269 + $power29Andijon309 + $power29Andijon349 + $power29Andijon389;
        $ges29AndijonReactive = $reactive29Andijon271 + $reactive29Andijon311 + $reactive29Andijon351 + $reactive29Andijon391;
        $ges29AndijonActiveOut = (
            $set29Andijon81 +
            $set29Andijon41 +
            ((-1 * $set29Andijon190) > 0 ? (-1) * $set29Andijon190 : 0) +
            $set29Andijon121 +
            ($set29Andijon213 > 0 ? $set29Andijon213 : 0) +
            $set29Andijon161 +
//                $set29Andijon670 +
            (-1 * $set29Andijon236 > 0 ? -1 * $set29Andijon236 : 0)
        );
        $ges29AndijonActiveIn = $set29Andijon80 +
            $set29Andijon40 +
            ((-1) * $set29Andijon190 < 0 ? (-1) * $set29Andijon190 : 0) +
            $set29Andijon120 +
            ($set29Andijon213 <= 0 ? $set29Andijon213 : 0) +
            $set29Andijon160 +
//                $set29Andijon669 +
            (-1 * $set29Andijon236 < 0 ? -1 * $set29Andijon236 : 0);
        $ges29AndijonOwnNeeds = $set29Andijon429 + $set29Andijon469;
        $ges29AndijonWater = $water29Andijon269 + $water29Andijon309 + $water29Andijon349 + $water29Andijon389;
        $ges29AndijonAggregateTrue = ($ges29Andijon269[2] > 0 ? 1 : 0) + ($ges29Andijon309[2] > 0 ? 1 : 0) + ($ges29Andijon349[2] > 0 ? 1 : 0) + ($ges29Andijon389[2] > 0 ? 1 : 0);
        $ges29AndijonAggregateError = 0;
        $ges29AndijonAggregateFalse = ($ges29Andijon269[2] <= 0 ? 1 : 0) + ($ges29Andijon309[2] <= 0 ? 1 : 0) + ($ges29Andijon349[2] <= 0 ? 1 : 0) + ($ges29Andijon389[2] <= 0 ? 1 : 0) - $ges29AndijonAggregateError;

        $water36 = Water::find()->where(['id_organization' => 59])->orderBy(['date' => SORT_DESC])->one();
        $upBef36 = $water36 ? $water36['up_bef'] : 0;
        $downBef36 = $water36 ? $water36['down_bef'] : 0;
        $pressure36 = $upBef36 - $downBef36;

        $ges36Andijon670 = $this->getValue($data, "G670");
        $ges36Andijon669 = $this->getValue($data, "G669");
        $ges36Andijon549 = $this->getValue($data, "G549");
        $ges36Andijon629 = $this->getValue($data, "G629");
        $ges36Andijon509 = $this->getValue($data, "G509");
        $ges36Andijon511 = $this->getValue($data, "G511");
        $ges36Andijon589 = $this->getValue($data, "G589");
        $ges36Andijon591 = $this->getValue($data, "G591");

        $set36Andijon670 = $ges36Andijon670[2] * 132000 / $CONST;
        $set36Andijon669 = $ges36Andijon669[2] * 132000 / $CONST;

        $set36Andijon549 = $ges36Andijon549[2] * 6300 / $kvt;
        $set36Andijon629 = $ges36Andijon629[2] * 6300 / $kvt;

        $power36Andijon509 = $ges36Andijon509[2] * 42000 / $CONST;//active
        $reactive36Andijon511 = $ges36Andijon511[2] * 42000 / $CONST;//reactive
        $water36Andijon509 = $energy->getWater($power36Andijon509, $pressure36, 0.98, 0.913);//water

        $power36Andijon589 = $ges36Andijon589[2] * 42000 / $CONST;//active
        $reactive36Andijon591 = $ges36Andijon591[2] * 42000 / $CONST;//reactive
        $water36Andijon589 = $energy->getWater($power36Andijon589, $pressure36, 0.98, 0.913);//water

        $ges36AndijonActive =$power36Andijon509 + $power36Andijon589;
        $ges36AndijonReactive =$reactive36Andijon511 + $reactive36Andijon591;
        $ges36AndijonActiveOut =$set36Andijon669;
        $ges36AndijonActiveIn =$set36Andijon670;
        $ges36AndijonOwnNeeds =$set36Andijon549 + $set36Andijon629;
        $ges36AndijonWater =$water36Andijon509 + $water36Andijon589;
        $ges36AndijonAggregateTrue = ($ges36Andijon509[2] > 0 ? 1 : 0) + ($ges36Andijon589[2] > 0 ? 1 : 0);
        $ges36AndijonAggregateError = 0;
        $ges36AndijonAggregateFalse = ($ges36Andijon509[2] <= 0 ? 1 : 0) + ($ges36Andijon589[2] <= 0 ? 1 : 0) - $ges36AndijonAggregateError;

        $water = Water::find()->where(['id_organization' => 60])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $gesKudashAndijon750 = $this->getValue($data, "G750");
        $gesKudashAndijon749 = $this->getValue($data, "G749");
        $gesKudashAndijon814 = $this->getValue($data, "G814");
        $gesKudashAndijon778 = $this->getValue($data, "G778");
        $gesKudashAndijon779 = $this->getValue($data, "G779");
        $gesKudashAndijon796 = $this->getValue($data, "G796");
        $gesKudashAndijon797 = $this->getValue($data, "G797");

        $setKudashAndijon750 = $gesKudashAndijon750[2] * 7200 / $CONST;
        $setKudashAndijon749 = $gesKudashAndijon749[2] * 7200 / $CONST;

        $setKudashAndijon814 = $gesKudashAndijon814[2] * 360 / $kvt;

        $powerKudashAndijon778 = $gesKudashAndijon778[2] * 4800 / $CONST;//active
        $reactiveKudashAndijon779 = $gesKudashAndijon779[2] * 4800 / $CONST;//reactive
        $waterKudashAndijon778 = $energy->getWater($powerKudashAndijon778, $pressure, 0.98, 0.873);//water

        $powerKudashAndijon796 = $gesKudashAndijon796[2] * 4800 / $CONST;//active
        $reactiveKudashAndijon797 = $gesKudashAndijon797[2] * 4800 / $CONST;//reactive
        $waterKudashAndijon796 = $energy->getWater($powerKudashAndijon796, $pressure, 0.98, 0.873);//water

        $gesKudashAndijonActive = $powerKudashAndijon778 + $powerKudashAndijon796;
        $gesKudashAndijonReactive = $reactiveKudashAndijon779 + $reactiveKudashAndijon797;
        $gesKudashAndijonActiveOut = $setKudashAndijon749;
        $gesKudashAndijonActiveIn = $setKudashAndijon750;
        $gesKudashAndijonOwnNeeds = $setKudashAndijon814;
        $gesKudashAndijonWater = $waterKudashAndijon778 + $waterKudashAndijon796;
        $gesKudashAndijonAggregateTrue = ($gesKudashAndijon778[2] > 0 ? 1 : 0) + ($gesKudashAndijon796[2] > 0 ? 1 : 0);
        $gesKudashAndijonAggregateError = 0;
        $gesKudashAndijonAggregateFalse = ($gesKudashAndijon778[2] <= 0 ? 1 : 0) + ($gesKudashAndijon796[2] <= 0 ? 1 : 0) - $gesKudashAndijonAggregateError;

        $active = $ges29AndijonActive + $ges36AndijonActive + $gesKudashAndijonActive;
        $reactive = $ges29AndijonReactive + $ges36AndijonReactive + $gesKudashAndijonReactive;
        $activeOut = $ges29AndijonActiveOut + $ges36AndijonActiveOut + $gesKudashAndijonActiveOut;
        $activeIn = $ges29AndijonActiveIn + $ges36AndijonActiveIn + $gesKudashAndijonActiveIn;
        $ownNeeds = $ges29AndijonOwnNeeds + $ges36AndijonOwnNeeds + $gesKudashAndijonOwnNeeds;
        $water = $ges29AndijonWater + $ges36AndijonWater + $gesKudashAndijonWater;
        $true = $ges29AndijonAggregateTrue + $ges36AndijonAggregateTrue + $gesKudashAndijonAggregateTrue;
        $error = $ges29AndijonAggregateError + $ges36AndijonAggregateError + $gesKudashAndijonAggregateError;
        $false = $ges29AndijonAggregateFalse + $ges36AndijonAggregateFalse + $gesKudashAndijonAggregateFalse - $error;

        // Example array data
        $data = array(
            array("id" => 1, "value" => $active),
            array("id" => 2, "value" => $reactive),
            array("id" => 3, "value" => $activeOut),
            array("id" => 4, "value" => $activeIn),
            array("id" => 5, "value" => $ownNeeds),
            array("id" => 6, "value" => $water),
            array("id" => 7, "value" => $true),
            array("id" => 8, "value" => $false),
            array("id" => 9, "value" => $error),

            array("id" => 10, "value" => $ges29AndijonActive),
            array("id" => 11, "value" => $ges29AndijonAggregateTrue),
            array("id" => 12, "value" => $ges29AndijonAggregateFalse),
            array("id" => 13, "value" => $ges29AndijonAggregateError),

            array("id" => 14, "value" => $ges36AndijonActive),
            array("id" => 15, "value" => $ges36AndijonAggregateTrue),
            array("id" => 16, "value" => $ges36AndijonAggregateFalse),
            array("id" => 17, "value" => $ges36AndijonAggregateError),

            array("id" => 18, "value" => $gesKudashAndijonActive),
            array("id" => 19, "value" => $gesKudashAndijonAggregateTrue),
            array("id" => 20, "value" => $gesKudashAndijonAggregateFalse),
            array("id" => 21, "value" => $gesKudashAndijonAggregateError),

        );

        echo json_encode($data);
    }
}
