<?php

namespace frontend\controllers;

use common\models\Water;
use Yii;
class QodiriyaController extends \yii\web\Controller
{
    protected string $url = "http://user:R_kSa_ir@192.168.40.215:10174/crq?req=current";

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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes3a()
    {
        return $this->render('ges3a');
    }

    public function actionGes3()
    {
        return $this->render('ges3');
    }

    public function actionGes15()
    {
        return $this->render('ges15');
    }

    public function actionGes11()
    {
        return $this->render('ges11');
    }

    public function actionGes12()
    {
        return $this->render('ges12');
    }

    //GES-3A
    public function actionServer3a()
    {
        $CONST = 1000000;
        $kvt = 1000;

        $water = Water::find()->where(['id_organization' => 76])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges3aQodiriya309 = $this->getValue($data, "G309");
        $ges3aQodiriya255 = $this->getValue($data, "G255");
        $ges3aQodiriya228 = $this->getValue($data, "G228");
        $ges3aQodiriya174 = $this->getValue($data, "G174");
        $ges3aQodiriya336 = $this->getValue($data, "G336");
        $ges3aQodiriya360 = $this->getValue($data, "G360");
        $ges3aQodiriya245 = $this->getValue($data, "G245");
        $ges3aQodiriya383 = $this->getValue($data, "G383");
        $ges3aQodiriya299 = $this->getValue($data, "G299");
        $ges3aQodiriya282 = $this->getValue($data, "G282");
        $ges3aQodiriya201 = $this->getValue($data, "G201");
        $ges3aQodiriya147 = $this->getValue($data, "G147");
        $ges3aQodiriya12 = $this->getValue($data, "G12");
        $ges3aQodiriya120 = $this->getValue($data, "G120");
        $ges3aQodiriya93 = $this->getValue($data, "G93");
        $ges3aQodiriya353 = $this->getValue($data, "G353");
        $ges3aQodiriya272 = $this->getValue($data, "G272");
        $ges3aQodiriya376 = $this->getValue($data, "G376");
        $ges3aQodiriya53 = $this->getValue($data, "B53");
        $ges3aQodiriya57 = $this->getValue($data, "B57");
        $ges3aQodiriya204 = $this->getValue($data, "G204");
        $ges3aQodiriya285 = $this->getValue($data, "G285");
        $ges3aQodiriya354 = $this->getValue($data, "G354");
        $ges3aQodiriya377 = $this->getValue($data, "G377");
        $ges3aQodiriya42 = $this->getValue($data, "G42");
        $ges3aQodiriya69 = $this->getValue($data, "G69");
        $ges3aQodiriya39 = $this->getValue($data, "G39");
        $ges3aQodiriya40 = $this->getValue($data, "G40");
        $ges3aQodiriya66 = $this->getValue($data, "G66");
        $ges3aQodiriya67 = $this->getValue($data, "G67");

        $set3aQodiriya174 = $ges3aQodiriya174[2] * 42000 / $CONST;//42000
        $set3aQodiriya228 = $ges3aQodiriya228[2] * 42000 / $CONST;//42000
        $set3aQodiriya255 = $ges3aQodiriya255[2] * 42000 / $CONST;//42000
        $set3aQodiriya309 = $ges3aQodiriya309[2] * 42000 / $CONST;//42000
        $set3aQodiriya360 = $ges3aQodiriya360[2] * 2400 / $CONST;//2400
        $set3aQodiriya383 = $ges3aQodiriya383[2] * 2400 / $CONST;//2400

        $set3aQodiriya12 = $ges3aQodiriya12[2] * 630 / $kvt;//630
        $set3aQodiriya93 = $ges3aQodiriya93[2] * 630 / $kvt;//630
        $set3aQodiriya120 = $ges3aQodiriya120[2] * 240 / $kvt;//240
        $set3aQodiriya147 = $ges3aQodiriya147[2] * 240 / $kvt;//240

        $power3aQodiriya39 = $ges3aQodiriya39[2] * 16800 / $CONST;//active
        $reactive3aQodiriya40 = $ges3aQodiriya40[2] * 16800 / $CONST;//reactive
        $water3aQodiriya39 = $energy->getWater($power3aQodiriya39, $pressure, 0.97, 0.939);//water
        $kpd3aQodiriya39 = $energy->getKpd($power3aQodiriya39, $water3aQodiriya39, $pressure, 0.965);//kpd

        $power3aQodiriya66 = $ges3aQodiriya66[2] * 16800 / $CONST;//active
        $reactive3aQodiriya67 = $ges3aQodiriya67[2] * 16800 / $CONST;//reactive
        $water3aQodiriya66 = $energy->getWater($power3aQodiriya66, $pressure, 0.97, 0.939);//water
        $kpd3aQodiriya66 = $energy->getKpd($power3aQodiriya66, $water3aQodiriya66, $pressure, 0.965);//kpd

        $data = array(
            array("id" => 53, "value" => $ges3aQodiriya53[2] / $kvt),//
            array("id" => 57, "value" => $ges3aQodiriya57[2] / $kvt),//

            array("id" => 174, "value" => $set3aQodiriya174),
            array("id" => 228, "value" => $set3aQodiriya228),
            array("id" => 255, "value" => $set3aQodiriya255),
            array("id" => 309, "value" => $set3aQodiriya309),
            array("id" => 360, "value" => $set3aQodiriya360),
            array("id" => 383, "value" => $set3aQodiriya383),

            array("id" => 201, "value" => $ges3aQodiriya201[2] * 14000 / $CONST),//?
            array("id" => 282, "value" => $ges3aQodiriya282[2] * 14000 / $CONST),//14000
            array("id" => 336, "value" => $ges3aQodiriya336[2] * 3500 / $CONST),//3500

            array("id" => 42, "value" => $energy->getVoltages($ges3aQodiriya42[2], 105)),
            array("id" => 69, "value" => $energy->getVoltages($ges3aQodiriya69[2], 105)),
            array("id" => 204, "value" => $energy->getVoltages($ges3aQodiriya204[2], 350)),
            array("id" => 285, "value" => $energy->getVoltages($ges3aQodiriya285[2], 350)),
            array("id" => 354, "value" => $ges3aQodiriya354[2] > 0 ? $energy->getVoltages($ges3aQodiriya354[2], 60) : $energy->getVoltages($ges3aQodiriya377[2], 60)),

            array("id" => 12, "value" => $set3aQodiriya12),
            array("id" => 93, "value" => $set3aQodiriya93),
            array("id" => 120, "value" => $set3aQodiriya120),
            array("id" => 147, "value" => $set3aQodiriya147),

            array("id" => 39, "value" => $power3aQodiriya39),//active
            array("id" => 40, "value" => $reactive3aQodiriya40),//reactive
            array("id" => 41, "value" => $kpd3aQodiriya39),//КПД
            array("id" => 420, "value" => 0),//HA
            array("id" => 43, "value" => $water3aQodiriya39),//water

            array("id" => 66, "value" => $power3aQodiriya66),//active
            array("id" => 67, "value" => $reactive3aQodiriya67),//reactive
            array("id" => 68, "value" => $kpd3aQodiriya66),//КПД
            array("id" => 690, "value" => 0),//HA
            array("id" => 70, "value" => $water3aQodiriya66),//water

            array("id" => 1, "value" => $power3aQodiriya39 + $power3aQodiriya66),
            array("id" => 2, "value" => $reactive3aQodiriya40 + $reactive3aQodiriya67),
            array("id" => 3, "value" =>
                (-1 * $set3aQodiriya174 > 0 ? $set3aQodiriya174 : 0) +
                (-1 * $set3aQodiriya228 > 0 ? $set3aQodiriya228 : 0) +
                (-1 * $set3aQodiriya255 > 0 ? $set3aQodiriya255 : 0) +
                (-1 * $set3aQodiriya309 > 0 ? $set3aQodiriya309 : 0) +
                $set3aQodiriya360 +
                $set3aQodiriya383
            ),
            array("id" => 4, "value" =>
                (-1 * $set3aQodiriya174 <= 0 ? $set3aQodiriya174 : 0) +
                (-1 * $set3aQodiriya228 <= 0 ? $set3aQodiriya228 : 0) +
                (-1 * $set3aQodiriya255 <= 0 ? $set3aQodiriya255 : 0) +
                (-1 * $set3aQodiriya309 <= 0 ? $set3aQodiriya309 : 0)
            ),
            array("id" => 5, "value" => $set3aQodiriya12 + $set3aQodiriya93 + $set3aQodiriya120 + $set3aQodiriya147),
            array("id" => 6, "value" => $water3aQodiriya39 + $water3aQodiriya66),
            array("id" => 7, "value" => $ges3aQodiriya245[2] > 0 ? $ges3aQodiriya245[2] :
                ($ges3aQodiriya272[2] > 0 ? $ges3aQodiriya272[2] :
                    ($ges3aQodiriya299[2] > 0 ? $ges3aQodiriya299[2] :
                        ($ges3aQodiriya353[2] > 0 ? $ges3aQodiriya353[2] : $ges3aQodiriya376[2])))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //GES-12
    public function actionServer12()
    {
        $CONST = 1000000;
        $kvt = 1000;

        $water = Water::find()->where(['id_organization' => 36])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges12Qodiriya655 = $this->getValue($data, "G655");
        $ges12Qodiriya640 = $this->getValue($data, "G640");
        $ges12Qodiriya670 = $this->getValue($data, "G670");
        $ges12Qodiriya625 = $this->getValue($data, "G625");
        $ges12Qodiriya715 = $this->getValue($data, "G715");
        $ges12Qodiriya730 = $this->getValue($data, "G730");
        $ges12Qodiriya693 = $this->getValue($data, "G693");
        $ges12Qodiriya751 = $this->getValue($data, "G751");
        $ges12Qodiriya775 = $this->getValue($data, "G775");
        $ges12Qodiriya774 = $this->getValue($data, "G774");
        $ges12Qodiriya700 = $this->getValue($data, "G700");
        $ges12Qodiriya685 = $this->getValue($data, "G685");
        $ges12Qodiriya610 = $this->getValue($data, "G610");
        $ges12Qodiriya611 = $this->getValue($data, "G611");
        $ges12Qodiriya624 = $this->getValue($data, "G624");
        $ges12Qodiriya639 = $this->getValue($data, "G639");
        $ges12Qodiriya654 = $this->getValue($data, "G654");
        $ges12Qodiriya669 = $this->getValue($data, "G669");

        $set12Qodiriya655 = $ges12Qodiriya655[2] * 42000 / $CONST;//42000
        $set12Qodiriya640 = $ges12Qodiriya640[2] * 21000 / $CONST;//21000
        $set12Qodiriya670 = $ges12Qodiriya670[2] * 21000 / $CONST;//21000
        $set12Qodiriya625 = $ges12Qodiriya625[2] * 21000 / $CONST;//21000
        $set12Qodiriya715 = $ges12Qodiriya715[2] * 3600 / $CONST;//3600
        $set12Qodiriya730 = $ges12Qodiriya730[2] * 3600 / $CONST;//3600
        $set12Qodiriya751 = $ges12Qodiriya751[2] * 3600 / $CONST;//3600
        $set12Qodiriya775 = $ges12Qodiriya775[2] * 3600 / $CONST;//3600
        $set12Qodiriya774 = $ges12Qodiriya774[2] * 3600 / $CONST;//3600

        $set12Qodiriya700 = $ges12Qodiriya700[2] * 1800 / $CONST;//1800
        $set12Qodiriya685 = $ges12Qodiriya685[2] * 1800 / $CONST;//1800

        $power12Qodiriya610 = $ges12Qodiriya610[2] * 18000 / $CONST;//active
        $reactive12Qodiriya611 = $ges12Qodiriya611[2] * 18000 / $CONST;//reactive
        $water12Qodiriya610 = $energy->getWater($power12Qodiriya610, $pressure, 0.94, 0.872);//water
        $kpd12Qodiriya610 = $energy->getKpd($power12Qodiriya610, $water12Qodiriya610, $pressure, 0.94);//kpd

        $data = array(
            array("id" => 625, "value" => $set12Qodiriya625),
            array("id" => 640, "value" => $set12Qodiriya640),
            array("id" => 655, "value" => $set12Qodiriya655),
            array("id" => 670, "value" => $set12Qodiriya670),
            array("id" => 715, "value" => $set12Qodiriya715),
            array("id" => 730, "value" => $set12Qodiriya730),
            array("id" => 751, "value" => $set12Qodiriya751),
            array("id" => 775, "value" => $set12Qodiriya775),
            array("id" => 774, "value" => $set12Qodiriya774),

            array("id" => 693, "value" => $energy->getVoltages($ges12Qodiriya693[2], 60)),

            array("id" => 700, "value" => $set12Qodiriya700),
            array("id" => 685, "value" => $set12Qodiriya685),

            array("id" => 610, "value" => $power12Qodiriya610),//active
            array("id" => 611, "value" => $reactive12Qodiriya611),//reactive
            array("id" => 612, "value" => $kpd12Qodiriya610),//КПД
            array("id" => 613, "value" => 0),//HA
            array("id" => 614, "value" => $water12Qodiriya610),//water

            array("id" => 1, "value" => $power12Qodiriya610),
            array("id" => 2, "value" => $reactive12Qodiriya611),
            array("id" => 3, "value" =>
                (-1 * $set12Qodiriya655 > 0 ? $set12Qodiriya655 : 0) +
                (-1 * $set12Qodiriya670 > 0 ? $set12Qodiriya670 : 0) +
                $set12Qodiriya625 +
                $set12Qodiriya640 +
                $set12Qodiriya715 +
                $set12Qodiriya730 +
                $set12Qodiriya751 +
                $set12Qodiriya774
            ),
            array("id" => 4, "value" =>
                (-1 * $set12Qodiriya655 <= 0 ? $set12Qodiriya655 : 0) +
                (-1 * $set12Qodiriya670 <= 0 ? $set12Qodiriya670 : 0) +
                $set12Qodiriya775
            ),
            array("id" => 5, "value" => $set12Qodiriya700 + $set12Qodiriya685),
            array("id" => 6, "value" => $water12Qodiriya610),
            array("id" => 7, "value" => $ges12Qodiriya624[2] > 0 ? $ges12Qodiriya624[2] :
                ($ges12Qodiriya639[2] > 0 ? $ges12Qodiriya639[2] :
                    ($ges12Qodiriya654[2] > 0 ? $ges12Qodiriya654[2] : $ges12Qodiriya669[2]))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //GES-11
    public function actionServer11()
    {
        $water = Water::find()->where(['id_organization' => 34])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges11Qodiriya580 = $this->getValue($data, "G580");
        $ges11Qodiriya551 = $this->getValue($data, "G551");
        $ges11Qodiriya565 = $this->getValue($data, "G565");
        $ges11Qodiriya535 = $this->getValue($data, "G535");
        $ges11Qodiriya595 = $this->getValue($data, "G595");
        $ges11Qodiriya543 = $this->getValue($data, "G543");
        $ges11Qodiriya528 = $this->getValue($data, "G528");
        $ges11Qodiriya534 = $this->getValue($data, "G534");
        $ges11Qodiriya520 = $this->getValue($data, "G520");
        $ges11Qodiriya521 = $this->getValue($data, "G521");
        $ges11Qodiriya966 = $this->getValue($data, "G966");

        $CONST = 1000000;
        $kvt = 1000;

        $set11Qodiriya551 = $ges11Qodiriya551[2] * 21000 / $CONST;
        $set11Qodiriya565 = $ges11Qodiriya565[2] * 42000 / $CONST;
        $set11Qodiriya580 = $ges11Qodiriya580[2] * 21000 / $CONST;
        $set11Qodiriya595 = $ges11Qodiriya595[2] * 10500 / $CONST;

        $set11Qodiriya966 = $ges11Qodiriya966[2] * 350 / $kvt;

        $power11Qodiriya520 = $ges11Qodiriya520[2] * 18000 / $CONST;//active
        $reactive11Qodiriya521 = $ges11Qodiriya521[2] * 18000 / $CONST;//reactive
        $water11Qodiriya520 = $energy->getWater($power11Qodiriya520, $pressure, 0.94, 0.846);//water
        $kpd11Qodiriya520 = $energy->getKpd($power11Qodiriya520, $water11Qodiriya520, $pressure, 0.941);//kpd


        $data = array(
            array("id" => 535, "value" => $ges11Qodiriya535[2] * 42000 / $CONST),
            array("id" => 551, "value" => $set11Qodiriya551),
            array("id" => 565, "value" => $set11Qodiriya565),
            array("id" => 580, "value" => $set11Qodiriya580),
            array("id" => 595, "value" => $set11Qodiriya595),

            array("id" => 543, "value" =>  $energy->getVoltages($ges11Qodiriya543[2], 350)),
            array("id" => 528, "value" =>  $energy->getVoltages($ges11Qodiriya528[2], 60)),

            array("id" => 534, "value" =>  $set11Qodiriya966),

            array("id" => 520, "value" => $power11Qodiriya520),//active
            array("id" => 521, "value" => $reactive11Qodiriya521),//reactive
            array("id" => 522, "value" => $kpd11Qodiriya520),//КПД
            array("id" => 523, "value" => 0),//HA
            array("id" => 524, "value" => $water11Qodiriya520),//water

            array("id" => 966, "value" => $set11Qodiriya966),

            array("id" => 1, "value" => $power11Qodiriya520),
            array("id" => 2, "value" => $reactive11Qodiriya521),
            array("id" => 3, "value" =>
                (-1 * $set11Qodiriya551 > 0 ? -1 * $set11Qodiriya551 : 0) +
                (-1 * $set11Qodiriya565 > 0 ? -1 * $set11Qodiriya565 : 0) +
                (-1 * $set11Qodiriya580 > 0 ? -1 * $set11Qodiriya580 : 0) +
                (-1 * $set11Qodiriya595 > 0 ? -1 * $set11Qodiriya595 : 0)
            ),
            array("id" => 4, "value" =>
                (-1 * $set11Qodiriya551 < 0 ? -1 * $set11Qodiriya551 : 0) +
                (-1 * $set11Qodiriya565 < 0 ? -1 * $set11Qodiriya565 : 0) +
                (-1 * $set11Qodiriya580 < 0 ? -1 * $set11Qodiriya580 : 0) +
                (-1 * $set11Qodiriya595 < 0 ? -1 * $set11Qodiriya595 : 0)
            ),
            array("id" => 5, "value" => $set11Qodiriya966),
            array("id" => 6, "value" => $water11Qodiriya520),
            array("id" => 7, "value" => $ges11Qodiriya534[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //GES-15
    public function actionServer15()
    {
        $water = Water::find()->where(['id_organization' => 33])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges15Qodiriya836 = $this->getValue($data, "G836");
        $ges15Qodiriya851 = $this->getValue($data, "G851");
        $ges15Qodiriya866 = $this->getValue($data, "G866");
        $ges15Qodiriya881 = $this->getValue($data, "G881");
        $ges15Qodiriya902 = $this->getValue($data, "G902");
        $ges15Qodiriya925 = $this->getValue($data, "G925");
        $ges15Qodiriya791 = $this->getValue($data, "G791");
        $ges15Qodiriya792 = $this->getValue($data, "G792");
        $ges15Qodiriya806 = $this->getValue($data, "G806");
        $ges15Qodiriya807 = $this->getValue($data, "G807");
        $ges15Qodiriya821 = $this->getValue($data, "G821");
        $ges15Qodiriya942 = $this->getValue($data, "G942");
        $ges15Qodiriya829 = $this->getValue($data, "G829");
        $ges15Qodiriya844 = $this->getValue($data, "G844");
        $ges15Qodiriya859 = $this->getValue($data, "G859");
        $ges15Qodiriya874 = $this->getValue($data, "G874");
        $ges15Qodiriya835 = $this->getValue($data, "G835");
        $ges15Qodiriya850 = $this->getValue($data, "G850");
        $ges15Qodiriya950 = $this->getValue($data, "G950");
        $ges15Qodiriya790 = $this->getValue($data, "G790");
        $ges15Qodiriya805 = $this->getValue($data, "G805");

        $CONST = 1000000;
        $kvt = 1000;
        $set15Qodiriya836 = $ges15Qodiriya836[2] * 42000 / $CONST;
        $set15Qodiriya851 = $ges15Qodiriya851[2] * 42000 / $CONST;
        $set15Qodiriya866 = $ges15Qodiriya866[2] * 42000 / $CONST;
        $set15Qodiriya881 = $ges15Qodiriya881[2] * 7200 / $CONST;
        $set15Qodiriya902 = $ges15Qodiriya902[2] * 2400 / $CONST;
        $set15Qodiriya925 = $ges15Qodiriya925[2] * 900 / $CONST;

        $power15Qodiriya791 = $ges15Qodiriya791[2] * 9600 / $CONST;//active
        $reactive15Qodiriya792 = $ges15Qodiriya792[2] * 9600 / $CONST;//reactive
        $water15Qodiriya791 = $energy->getWater($power15Qodiriya791, $pressure, 0.91, 0.923);//water
        $kpd15Qodiriya791 = $energy->getKpd($power15Qodiriya791, $water15Qodiriya791, $pressure, 0.91);//kpd

        $power15Qodiriya806 = $ges15Qodiriya806[2] * 9600 / $CONST;//active
        $reactive15Qodiriya807 = $ges15Qodiriya807[2] * 9600 / $CONST;//reactive
        $water15Qodiriya806 = $energy->getWater($power15Qodiriya806, $pressure, 0.91, 0.923);//water
        $kpd15Qodiriya806 = $energy->getKpd($power15Qodiriya806, $water15Qodiriya806, $pressure, 0.91);//kpd

        $set15Qodiriya942 = $ges15Qodiriya942[2] * 20 / $kvt;
        $set15Qodiriya821 = $ges15Qodiriya821[2] * 60 / $kvt;

        $data = array(
            array("id" => 836, "value" => $set15Qodiriya836),
            array("id" => 851, "value" => $set15Qodiriya851),
            array("id" => 866, "value" => $set15Qodiriya866),
            array("id" => 881, "value" => $set15Qodiriya881),
            array("id" => 902, "value" => $set15Qodiriya902),
            array("id" => 925, "value" => $set15Qodiriya925),

            array("id" => 791, "value" => $power15Qodiriya791),//active
            array("id" => 792, "value" => $reactive15Qodiriya792),//reactive
            array("id" => 793, "value" => $kpd15Qodiriya791),//КПД
            array("id" => 794, "value" => 0),//HA
            array("id" => 795, "value" => $water15Qodiriya791),//water

            array("id" => 806, "value" => $power15Qodiriya806),//active
            array("id" => 807, "value" => $reactive15Qodiriya807),//reactive
            array("id" => 808, "value" => $kpd15Qodiriya806),//КПД
            array("id" => 809, "value" => 0),//HA
            array("id" => 810, "value" => $water15Qodiriya806),//water

            array("id" => 942, "value" => $set15Qodiriya942),
            array("id" => 821, "value" => $set15Qodiriya821),

            array("id" => 829, "value" => $energy->getVoltages($ges15Qodiriya829[2], 60)),
            array("id" => 844, "value" => $energy->getVoltages($ges15Qodiriya844[2], 350) > 0 ? $energy->getVoltages($ges15Qodiriya844[2], 350) : ($energy->getVoltages($ges15Qodiriya859[2], 350) > 0 ? ($energy->getVoltages($ges15Qodiriya859[2], 350)) : $energy->getVoltages($ges15Qodiriya874[2], 350))),
            array("id" => 950, "value" => $energy->getVoltages($ges15Qodiriya950[2], 20) > 0 ? $energy->getVoltages($ges15Qodiriya950[2], 20) : $energy->getVoltages($ges15Qodiriya829[2], 60)),

            array("id" => 1, "value" => $power15Qodiriya791 + $power15Qodiriya806),
            array("id" => 2, "value" => $reactive15Qodiriya792 + $reactive15Qodiriya807),
            array("id" => 3, "value" =>
                (-1 * $set15Qodiriya836 > 0 ? -1 * $set15Qodiriya836 : 0) +
                (-1 * $set15Qodiriya851 > 0 ? -1 * $set15Qodiriya851 : 0) +
                (-1 * $set15Qodiriya866 > 0 ? -1 * $set15Qodiriya866 : 0) +
                $set15Qodiriya881 +
                $set15Qodiriya902 +
                $set15Qodiriya925
            ),
            array("id" => 4, "value" =>
                (-1 * $set15Qodiriya836 < 0 ? -1 * $set15Qodiriya836 : 0) +
                (-1 * $set15Qodiriya851 < 0 ? -1 * $set15Qodiriya851 : 0) +
                (-1 * $set15Qodiriya866 < 0 ? -1 * $set15Qodiriya866 : 0)
            ),
            array("id" => 5, "value" => $set15Qodiriya821),
            array("id" => 6, "value" => $water15Qodiriya791 + $water15Qodiriya806),
            array("id" => 7, "value" => $ges15Qodiriya790[2] > 0 ? $ges15Qodiriya790[2] :
                ($ges15Qodiriya805[2] > 0 ? $ges15Qodiriya805[2] :
                    ($ges15Qodiriya835[2] > 0 ? $ges15Qodiriya835[2] : $ges15Qodiriya850[2]))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //GES-3
    public function actionServer3()
    {
        $water = Water::find()->where(['id_organization' => 35])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges3Qodiriya475 = $this->getValue($data, "G475");
        $ges3Qodiriya490 = $this->getValue($data, "G490");
        $ges3Qodiriya460 = $this->getValue($data, "G460");
        $ges3Qodiriya309 = $this->getValue($data,"G309");
        $ges3Qodiriya505 = $this->getValue($data, "G505");
        $ges3Qodiriya400 = $this->getValue($data, "G400");
        $ges3Qodiriya401 = $this->getValue($data, "G401");
        $ges3Qodiriya415 = $this->getValue($data, "G415");
        $ges3Qodiriya416 = $this->getValue($data, "G416");
        $ges3Qodiriya430 = $this->getValue($data, "G430");
        $ges3Qodiriya431 = $this->getValue($data, "G431");
        $ges3Qodiriya445 = $this->getValue($data, "G445");
        $ges3Qodiriya446 = $this->getValue($data, "G446");
        $ges3Qodiriya504 = $this->getValue($data, "G504");
        $ges3Qodiriya513 = $this->getValue($data, "G513");

        $CONST = 1000000;
        $kvt = 1000;

        $set3Qodiriya505 = $ges3Qodiriya505[2] * 10000 / $CONST;
        $set3Qodiriya475 = $ges3Qodiriya475[2] * 10000 / $CONST;
        $set3Qodiriya490 = $ges3Qodiriya490[2] * 10000 / $CONST;

        $set3Qodiriya460 = $ges3Qodiriya460[2] * 1 / $kvt;

        $power3Qodiriya400 = $ges3Qodiriya400[2] * 10000 / $CONST;//active
        $reactive3Qodiriya401 = $ges3Qodiriya401[2] * 10000 / $CONST;//reactive
        $water3Qodiriya400 = $energy->getWater($power3Qodiriya400, $pressure, 0.97, 0.939);//water
        $kpd3Qodiriya400 = $energy->getKpd($power3Qodiriya400, $water3Qodiriya400, $pressure, 0.965);//kpd

        $power3Qodiriya415 = $ges3Qodiriya415[2] * 10000 / $CONST;//active
        $reactive3Qodiriya416 = $ges3Qodiriya416[2] * 10000 / $CONST;//reactive
        $water3Qodiriya415 = $energy->getWater($power3Qodiriya415, $pressure, 0.97, 0.939);//water
        $kpd3Qodiriya415 = $energy->getKpd($power3Qodiriya415, $water3Qodiriya415, $pressure, 0.965);//kpd

        $power3Qodiriya430 = $ges3Qodiriya430[2] * 10000 / $CONST;//active
        $reactive3Qodiriya431 = $ges3Qodiriya431[2] * 10000 / $CONST;//reactive
        $water3Qodiriya430 = $energy->getWater($power3Qodiriya430, $pressure, 0.97, 0.939);//water
        $kpd3Qodiriya430 = $energy->getKpd($power3Qodiriya430, $water3Qodiriya430, $pressure, 0.965);//kpd

        $power3Qodiriya445 = $ges3Qodiriya445[2] * 10000 / $CONST;//active
        $reactive3Qodiriya446 = $ges3Qodiriya446[2] * 10000 / $CONST;//reactive
        $water3Qodiriya445 = $energy->getWater($power3Qodiriya445, $pressure, 0.97, 0.939);//water
        $kpd3Qodiriya445 = $energy->getKpd($power3Qodiriya445, $water3Qodiriya445, $pressure, 0.965);//kpd

        $data = array(
            array("id" => 475, "value" => $set3Qodiriya475),
            array("id" => 490, "value" => $set3Qodiriya490),
            array("id" => 505, "value" => $set3Qodiriya505),

            array("id" => 460, "value" => $set3Qodiriya460),

            array("id" => 400, "value" => $power3Qodiriya400),//active
            array("id" => 401, "value" => $reactive3Qodiriya401),//reactive
            array("id" => 402, "value" => $kpd3Qodiriya400),//КПД
            array("id" => 403, "value" => 0),//HA
            array("id" => 404, "value" => $water3Qodiriya400),//water

            array("id" => 415, "value" => $power3Qodiriya415),//active
            array("id" => 416, "value" => $reactive3Qodiriya416),//reactive
            array("id" => 417, "value" => $kpd3Qodiriya415),//КПД
            array("id" => 418, "value" => 0),//HA
            array("id" => 419, "value" => $water3Qodiriya415),//water

            array("id" => 430, "value" => $power3Qodiriya430),//active
            array("id" => 431, "value" => $reactive3Qodiriya431),//reactive
            array("id" => 432, "value" => $kpd3Qodiriya430),//КПД
            array("id" => 433, "value" => 0),//HA
            array("id" => 434, "value" => $water3Qodiriya430),//water

            array("id" => 445, "value" => $power3Qodiriya445),//active
            array("id" => 446, "value" => $reactive3Qodiriya446),//reactive
            array("id" => 447, "value" => $kpd3Qodiriya445),//КПД
            array("id" => 448, "value" => 0),//HA
            array("id" => 449, "value" => $water3Qodiriya445),//water

            array("id" => 513, "value" => $energy->getVoltages($ges3Qodiriya513[2], 60)),

            array("id" => 1, "value" => $power3Qodiriya400 + $power3Qodiriya415 + $power3Qodiriya430 + $power3Qodiriya445),
            array("id" => 2, "value" => $reactive3Qodiriya401 + $reactive3Qodiriya416 + $reactive3Qodiriya431 + $reactive3Qodiriya446),
            array("id" => 3, "value" => $set3Qodiriya475 +
                                        $set3Qodiriya490 +
                ($set3Qodiriya505 > 0 ? $set3Qodiriya505 : 0)),
            array("id" => 4, "value" => $set3Qodiriya505 < 0 ? $set3Qodiriya505 : 0),
            array("id" => 5, "value" => $set3Qodiriya460),
            array("id" => 6, "value" => $water3Qodiriya400 + $water3Qodiriya415 + $water3Qodiriya430 + $water3Qodiriya445),
            array("id" => 7, "value" => $ges3Qodiriya504[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    public function actionServer()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        $water15 = Water::find()->where(['id_organization' => 33])->orderBy(['date' => SORT_DESC])->one();
        $upBef15 = $water15 ? $water15['up_bef'] : 0;
        $downBef15 = $water15 ? $water15['down_bef'] : 0;
        $pressure15 = $upBef15 - $downBef15;

        header('Content-Type: application/json');
        $data = $this->fetchData();

        $ges15Qodiriya836 = $this->getValue($data, "G836");
        $ges15Qodiriya851 = $this->getValue($data, "G851");
        $ges15Qodiriya866 = $this->getValue($data, "G866");
        $ges15Qodiriya881 = $this->getValue($data, "G881");
        $ges15Qodiriya902 = $this->getValue($data, "G902");
        $ges15Qodiriya925 = $this->getValue($data, "G925");
        $ges15Qodiriya791 = $this->getValue($data, "G791");
        $ges15Qodiriya792 = $this->getValue($data, "G792");
        $ges15Qodiriya806 = $this->getValue($data, "G806");
        $ges15Qodiriya807 = $this->getValue($data, "G807");
        $ges15Qodiriya821 = $this->getValue($data, "G821");

        $set15Qodiriya836 = $ges15Qodiriya836[2] * 42000 / $CONST;
        $set15Qodiriya851 = $ges15Qodiriya851[2] * 42000 / $CONST;
        $set15Qodiriya866 = $ges15Qodiriya866[2] * 42000 / $CONST;
        $set15Qodiriya881 = $ges15Qodiriya881[2] * 7200 / $CONST;
        $set15Qodiriya902 = $ges15Qodiriya902[2] * 2400 / $CONST;
        $set15Qodiriya925 = $ges15Qodiriya925[2] * 900 / $CONST;

        $power15Qodiriya791 = $ges15Qodiriya791[2] * 9600 / $CONST;//active
        $reactive15Qodiriya792 = $ges15Qodiriya792[2] * 9600 / $CONST;//reactive
        $water15Qodiriya791 = $energy->getWater($power15Qodiriya791, $pressure15, 0.91, 0.923);//water

        $power15Qodiriya806 = $ges15Qodiriya806[2] * 9600 / $CONST;//active
        $reactive15Qodiriya807 = $ges15Qodiriya807[2] * 9600 / $CONST;//reactive
        $water15Qodiriya806 = $energy->getWater($power15Qodiriya806, $pressure15, 0.91, 0.923);//water

        $set15Qodiriya821 = $ges15Qodiriya821[2] * 60 / $kvt;

        $ges15QodiriyaActive = $power15Qodiriya791 + $power15Qodiriya806;
        $ges15QodiriyaReactive = $reactive15Qodiriya792 + $reactive15Qodiriya807;
        $ges15QodiriyaActiveOut = (-1 * $set15Qodiriya836 > 0 ? -1 * $set15Qodiriya836 : 0) +
            (-1 * $set15Qodiriya851 > 0 ? -1 * $set15Qodiriya851 : 0) +
            (-1 * $set15Qodiriya866 > 0 ? -1 * $set15Qodiriya866 : 0) +
            $set15Qodiriya881 +
            $set15Qodiriya902 +
            $set15Qodiriya925;
        $ges15QodiriyaActiveIn = (-1 * $set15Qodiriya836 < 0 ? -1 * $set15Qodiriya836 : 0) +
            (-1 * $set15Qodiriya851 < 0 ? -1 * $set15Qodiriya851 : 0) +
            (-1 * $set15Qodiriya866 < 0 ? -1 * $set15Qodiriya866 : 0);
        $ges15QodiriyaOwnNeeds = $set15Qodiriya821;
        $ges15QodiriyaWater = $water15Qodiriya791 + $water15Qodiriya806;
        $ges15QodiriyaAggregateTrue = ($ges15Qodiriya791[2] > 0 ? 1 : 0) +
            ($ges15Qodiriya806[2] > 0 ? 1 : 0);
        $ges15QodiriyaAggregateError = 0;
        $ges15QodiriyaAggregateFalse = ($ges15Qodiriya791[2] <= 0 ? 1 : 0) +
            ($ges15Qodiriya806[2] <= 0 ? 1 : 0) - $ges15QodiriyaAggregateError;

        $water12 = Water::find()->where(['id_organization' => 36])->orderBy(['date' => SORT_DESC])->one();
        $upBef12 = $water12 ? $water12['up_bef'] : 0;
        $downBef12 = $water12 ? $water12['down_bef'] : 0;
        $pressure12 = $upBef12 - $downBef12;

        $ges12Qodiriya655 = $this->getValue($data, "G655");
        $ges12Qodiriya640 = $this->getValue($data, "G640");
        $ges12Qodiriya670 = $this->getValue($data, "G670");
        $ges12Qodiriya625 = $this->getValue($data, "G625");
        $ges12Qodiriya715 = $this->getValue($data, "G715");
        $ges12Qodiriya730 = $this->getValue($data, "G730");
        $ges12Qodiriya751 = $this->getValue($data, "G751");
        $ges12Qodiriya775 = $this->getValue($data, "G775");
        $ges12Qodiriya774 = $this->getValue($data, "G774");
        $ges12Qodiriya700 = $this->getValue($data, "G700");
        $ges12Qodiriya685 = $this->getValue($data, "G685");
        $ges12Qodiriya610 = $this->getValue($data, "G610");
        $ges12Qodiriya611 = $this->getValue($data, "G611");

        $set12Qodiriya655 = $ges12Qodiriya655[2] * 42000 / $CONST;//42000
        $set12Qodiriya640 = $ges12Qodiriya640[2] * 21000 / $CONST;//21000
        $set12Qodiriya670 = $ges12Qodiriya670[2] * 21000 / $CONST;//21000
        $set12Qodiriya625 = $ges12Qodiriya625[2] * 21000 / $CONST;//21000
        $set12Qodiriya715 = $ges12Qodiriya715[2] * 3600 / $CONST;//3600
        $set12Qodiriya730 = $ges12Qodiriya730[2] * 3600 / $CONST;//3600
        $set12Qodiriya751 = $ges12Qodiriya751[2] * 3600 / $CONST;//3600
        $set12Qodiriya775 = $ges12Qodiriya775[2] * 3600 / $CONST;//3600
        $set12Qodiriya774 = $ges12Qodiriya774[2] * 3600 / $CONST;//3600

        $set12Qodiriya700 = $ges12Qodiriya700[2] * 1800 / $CONST;//1800
        $set12Qodiriya685 = $ges12Qodiriya685[2] * 1800 / $CONST;//1800

        $power12Qodiriya610 = $ges12Qodiriya610[2] * 18000 / $CONST;//active
        $reactive12Qodiriya611 = $ges12Qodiriya611[2] * 18000 / $CONST;//reactive
        $water12Qodiriya610 = $energy->getWater($power12Qodiriya610, $pressure12, 0.94, 0.872);//water

       $ges12QodiriyaActive = $power12Qodiriya610;
       $ges12QodiriyaReactive = $reactive12Qodiriya611;
       $ges12QodiriyaActiveOut = (-1 * $set12Qodiriya655 > 0 ? $set12Qodiriya655 : 0) +
           (-1 * $set12Qodiriya670 > 0 ? $set12Qodiriya670 : 0) +
           $set12Qodiriya625 +
           $set12Qodiriya640 +
           $set12Qodiriya715 +
           $set12Qodiriya730 +
           $set12Qodiriya751 +
           $set12Qodiriya774;
       $ges12QodiriyaActiveIn = (-1 * $set12Qodiriya655 <= 0 ? $set12Qodiriya655 : 0) +
           (-1 * $set12Qodiriya670 <= 0 ? $set12Qodiriya670 : 0) +
           $set12Qodiriya775;
       $ges12QodiriyaOwnNeeds = $set12Qodiriya700 + $set12Qodiriya685;
       $ges12QodiriyaWater = $water12Qodiriya610;
       $ges12QodiriyaAggregateTrue = ($ges12Qodiriya610[2] > 0 ? 1 : 0);
       $ges12QodiriyaAggregateError = 0;
       $ges12QodiriyaAggregateFalse = ($ges12Qodiriya610[2] <= 0 ? 1 : 0) - $ges12QodiriyaAggregateError;

        $water3 = Water::find()->where(['id_organization' => 34])->orderBy(['date' => SORT_DESC])->one();
        $upBef3 = $water3 ? $water3['up_bef'] : 0;
        $downBef3 = $water3 ? $water3['down_bef'] : 0;
        $pressure3 = $upBef3 - $downBef3;

        $ges3Qodiriya475 = $this->getValue($data, "G475");
        $ges3Qodiriya490 = $this->getValue($data, "G490");
        $ges3Qodiriya460 = $this->getValue($data, "G460");
        $ges3Qodiriya505 = $this->getValue($data, "G505");
        $ges3Qodiriya400 = $this->getValue($data, "G400");
        $ges3Qodiriya401 = $this->getValue($data, "G401");
        $ges3Qodiriya415 = $this->getValue($data, "G415");
        $ges3Qodiriya416 = $this->getValue($data, "G416");
        $ges3Qodiriya430 = $this->getValue($data, "G430");
        $ges3Qodiriya431 = $this->getValue($data, "G431");
        $ges3Qodiriya445 = $this->getValue($data, "G445");
        $ges3Qodiriya446 = $this->getValue($data, "G446");

        $set3Qodiriya505 = $ges3Qodiriya505[2] * 10000 / $CONST;
        $set3Qodiriya475 = $ges3Qodiriya475[2] * 10000 / $CONST;
        $set3Qodiriya490 = $ges3Qodiriya490[2] * 10000 / $CONST;

        $set3Qodiriya460 = $ges3Qodiriya460[2] * 1 / $kvt;

        $power3Qodiriya400 = $ges3Qodiriya400[2] * 10000 / $CONST;//active
        $reactive3Qodiriya401 = $ges3Qodiriya401[2] * 10000 / $CONST;//reactive
        $water3Qodiriya400 = $energy->getWater($power3Qodiriya400, $pressure3, 0.97, 0.939);//water

        $power3Qodiriya415 = $ges3Qodiriya415[2] * 10000 / $CONST;//active
        $reactive3Qodiriya416 = $ges3Qodiriya416[2] * 10000 / $CONST;//reactive
        $water3Qodiriya415 = $energy->getWater($power3Qodiriya415, $pressure3, 0.97, 0.939);//water

        $power3Qodiriya430 = $ges3Qodiriya430[2] * 10000 / $CONST;//active
        $reactive3Qodiriya431 = $ges3Qodiriya431[2] * 10000 / $CONST;//reactive
        $water3Qodiriya430 = $energy->getWater($power3Qodiriya430, $pressure3, 0.97, 0.939);//water

        $power3Qodiriya445 = $ges3Qodiriya445[2] * 10000 / $CONST;//active
        $reactive3Qodiriya446 = $ges3Qodiriya446[2] * 10000 / $CONST;//reactive
        $water3Qodiriya445 = $energy->getWater($power3Qodiriya445, $pressure3, 0.97, 0.939);//water

        $ges3QodiriyaActive = $power3Qodiriya400 + $power3Qodiriya415 + $power3Qodiriya430 + $power3Qodiriya445;
        $ges3QodiriyaReactive = $reactive3Qodiriya401 + $reactive3Qodiriya416 + $reactive3Qodiriya431 + $reactive3Qodiriya446;
        $ges3QodiriyaActiveOut = $set3Qodiriya475 +
            $set3Qodiriya490 +
            ($set3Qodiriya505 > 0 ? $set3Qodiriya505 : 0);
        $ges3QodiriyaActiveIn = $set3Qodiriya505 < 0 ? $set3Qodiriya505 : 0;
        $ges3QodiriyaOwnNeeds = $set3Qodiriya460;
        $ges3QodiriyaWater = $water3Qodiriya400 + $water3Qodiriya415 + $water3Qodiriya430 + $water3Qodiriya445;
        $ges3QodiriyaAggregateTrue = ($ges3Qodiriya400[2] > 0 ? 1 : 0) +
            ($ges3Qodiriya430[2] > 0 ? 1 : 0) +
            ($ges3Qodiriya445[2] > 0 ? 1 : 0) +
            ($ges3Qodiriya415[2] > 0 ? 1 : 0);
        $ges3QodiriyaAggregateError = 0;
        $ges3QodiriyaAggregateFalse = ($ges3Qodiriya400[2] <= 0 ? 1 : 0) +
            ($ges3Qodiriya430[2] <= 0 ? 1 : 0) +
            ($ges3Qodiriya445[2] <= 0 ? 1 : 0) +
            ($ges3Qodiriya415[2] <= 0 ? 1 : 0)- $ges3QodiriyaAggregateError;

        $water11 = Water::find()->where(['id_organization' => 34])->orderBy(['date' => SORT_DESC])->one();
        $upBef11 = $water11 ? $water11['up_bef'] : 0;
        $downBef11 = $water11 ? $water11['down_bef'] : 0;
        $pressure11 = $upBef11 - $downBef11;

        $ges11Qodiriya580 = $this->getValue($data, "G580");
        $ges11Qodiriya551 = $this->getValue($data, "G551");
        $ges11Qodiriya565 = $this->getValue($data, "G565");
        $ges11Qodiriya595 = $this->getValue($data, "G595");
        $ges11Qodiriya520 = $this->getValue($data, "G520");
        $ges11Qodiriya521 = $this->getValue($data, "G521");
        $ges11Qodiriya966 = $this->getValue($data, "G966");

        $set11Qodiriya551 = $ges11Qodiriya551[2] * 21000 / $CONST;
        $set11Qodiriya565 = $ges11Qodiriya565[2] * 42000 / $CONST;
        $set11Qodiriya580 = $ges11Qodiriya580[2] * 21000 / $CONST;
        $set11Qodiriya595 = $ges11Qodiriya595[2] * 10500 / $CONST;

        $set11Qodiriya966 = $ges11Qodiriya966[2] * 350 / $kvt;

        $power11Qodiriya520 = $ges11Qodiriya520[2] * 18000 / $CONST;//active
        $reactive11Qodiriya521 = $ges11Qodiriya521[2] * 18000 / $CONST;//reactive
        $water11Qodiriya520 = $energy->getWater($power11Qodiriya520, $pressure11, 0.94, 0.846);//water

        $ges11QodiriyaActive = $power11Qodiriya520;
        $ges11QodiriyaReactive = $reactive11Qodiriya521;
        $ges11QodiriyaActiveOut = (-1 * $set11Qodiriya551 > 0 ? -1 * $set11Qodiriya551 : 0) +
            (-1 * $set11Qodiriya565 > 0 ? -1 * $set11Qodiriya565 : 0) +
            (-1 * $set11Qodiriya580 > 0 ? -1 * $set11Qodiriya580 : 0) +
            (-1 * $set11Qodiriya595 > 0 ? -1 * $set11Qodiriya595 : 0);
        $ges11QodiriyaActiveIn = (-1 * $set11Qodiriya551 < 0 ? -1 * $set11Qodiriya551 : 0) +
            (-1 * $set11Qodiriya565 < 0 ? -1 * $set11Qodiriya565 : 0) +
            (-1 * $set11Qodiriya580 < 0 ? -1 * $set11Qodiriya580 : 0) +
            (-1 * $set11Qodiriya595 < 0 ? -1 * $set11Qodiriya595 : 0);
        $ges11QodiriyaOwnNeeds = $set11Qodiriya966;
        $ges11QodiriyaWater = $water11Qodiriya520;
        $ges11QodiriyaAggregateTrue = ($ges11Qodiriya520[2] > 0 ? 1 : 0);
        $ges11QodiriyaAggregateError = 0;
        $ges11QodiriyaAggregateFalse = ($ges11Qodiriya520[2] <= 0 ? 1 : 0) - $ges11QodiriyaAggregateError;

        $water = Water::find()->where(['id_organization' => 36])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges3aQodiriya309 = $this->getValue($data, "G309");
        $ges3aQodiriya255 = $this->getValue($data, "G255");
        $ges3aQodiriya228 = $this->getValue($data, "G228");
        $ges3aQodiriya174 = $this->getValue($data, "G174");
        $ges3aQodiriya360 = $this->getValue($data, "G360");
        $ges3aQodiriya383 = $this->getValue($data, "G383");
        $ges3aQodiriya147 = $this->getValue($data, "G147");
        $ges3aQodiriya12 = $this->getValue($data, "G12");
        $ges3aQodiriya120 = $this->getValue($data, "G120");
        $ges3aQodiriya93 = $this->getValue($data, "G93");
        $ges3aQodiriya39 = $this->getValue($data, "G39");
        $ges3aQodiriya40 = $this->getValue($data, "G40");
        $ges3aQodiriya66 = $this->getValue($data, "G66");
        $ges3aQodiriya67 = $this->getValue($data, "G67");

        $set3aQodiriya174 = $ges3aQodiriya174[2] * 42000 / $CONST;//42000
        $set3aQodiriya228 = $ges3aQodiriya228[2] * 42000 / $CONST;//42000
        $set3aQodiriya255 = $ges3aQodiriya255[2] * 42000 / $CONST;//42000
        $set3aQodiriya309 = $ges3aQodiriya309[2] * 42000 / $CONST;//42000
        $set3aQodiriya360 = $ges3aQodiriya360[2] * 2400 / $CONST;//2400
        $set3aQodiriya383 = $ges3aQodiriya383[2] * 2400 / $CONST;//2400

        $set3aQodiriya12 = $ges3aQodiriya12[2] * 630 / $kvt;//630
        $set3aQodiriya93 = $ges3aQodiriya93[2] * 630 / $kvt;//630
        $set3aQodiriya120 = $ges3aQodiriya120[2] * 240 / $kvt;//240
        $set3aQodiriya147 = $ges3aQodiriya147[2] * 240 / $kvt;//240

        $power3aQodiriya39 = $ges3aQodiriya39[2] * 16800 / $CONST;//active
        $reactive3aQodiriya40 = $ges3aQodiriya40[2] * 16800 / $CONST;//reactive
        $water3aQodiriya39 = $energy->getWater($power3aQodiriya39, $pressure, 0.97, 0.939);//water

        $power3aQodiriya66 = $ges3aQodiriya66[2] * 16800 / $CONST;//active
        $reactive3aQodiriya67 = $ges3aQodiriya67[2] * 16800 / $CONST;//reactive
        $water3aQodiriya66 = $energy->getWater($power3aQodiriya66, $pressure, 0.97, 0.939);//water

        $ges3aQodiriyaActive = $power3aQodiriya39 + $power3aQodiriya66;
        $ges3aQodiriyaReactive = $reactive3aQodiriya40 + $reactive3aQodiriya67;
        $ges3aQodiriyaActiveOut = (-1 * $set3aQodiriya174 > 0 ? $set3aQodiriya174 : 0) +
            (-1 * $set3aQodiriya228 > 0 ? $set3aQodiriya228 : 0) +
            (-1 * $set3aQodiriya255 > 0 ? $set3aQodiriya255 : 0) +
            (-1 * $set3aQodiriya309 > 0 ? $set3aQodiriya309 : 0) +
            $set3aQodiriya360 +
            $set3aQodiriya383;
        $ges3aQodiriyaActiveIn =  (-1 * $set3aQodiriya174 <= 0 ? $set3aQodiriya174 : 0) +
            (-1 * $set3aQodiriya228 <= 0 ? $set3aQodiriya228 : 0) +
            (-1 * $set3aQodiriya255 <= 0 ? $set3aQodiriya255 : 0) +
            (-1 * $set3aQodiriya309 <= 0 ? $set3aQodiriya309 : 0);
        $ges3aQodiriyaOwnNeeds = $set3aQodiriya12 + $set3aQodiriya93 + $set3aQodiriya120 + $set3aQodiriya147;
        $ges3aQodiriyaWater = $water3aQodiriya39 + $water3aQodiriya66;
        $ges3aQodiriyaAggregateTrue = ($ges3aQodiriya39[2] > 0 ? 1 : 0) + ($ges3aQodiriya66[2] > 0 ? 1 : 0);
        $ges3aQodiriyaAggregateError = 0;
        $ges3aQodiriyaAggregateFalse = ($ges3aQodiriya39[2] <= 0 ? 1 : 0) + ($ges3aQodiriya66[2] <= 0 ? 1 : 0) - $ges3aQodiriyaAggregateError;

        $active = $ges15QodiriyaActive + $ges12QodiriyaActive + $ges3QodiriyaActive + $ges11QodiriyaActive + $ges3aQodiriyaActive;
        $reactive = $ges15QodiriyaReactive + $ges12QodiriyaReactive + $ges3QodiriyaReactive + $ges11QodiriyaReactive + $ges3aQodiriyaReactive;
        $activeOut = $ges15QodiriyaActiveOut + $ges12QodiriyaActiveOut + $ges3QodiriyaActiveOut + $ges11QodiriyaActiveOut + $ges3aQodiriyaActiveOut;
        $activeIn = $ges15QodiriyaActiveIn + $ges12QodiriyaActiveIn + $ges3QodiriyaActiveIn + $ges11QodiriyaActiveIn + $ges3aQodiriyaActiveIn;
        $ownNeeds = $ges15QodiriyaOwnNeeds + $ges12QodiriyaOwnNeeds + $ges3QodiriyaOwnNeeds + $ges11QodiriyaOwnNeeds + $ges3aQodiriyaOwnNeeds;
        $water = $ges15QodiriyaWater + $ges12QodiriyaWater + $ges3QodiriyaWater + $ges11QodiriyaWater + $ges3aQodiriyaWater;
        $true = $ges15QodiriyaAggregateTrue +  $ges12QodiriyaAggregateTrue + $ges3QodiriyaAggregateTrue + $ges11QodiriyaAggregateTrue + $ges3aQodiriyaAggregateTrue;
        $error = $ges15QodiriyaAggregateError +  $ges12QodiriyaAggregateError + $ges3QodiriyaAggregateError + $ges11QodiriyaAggregateError + $ges3aQodiriyaAggregateError;
        $false = $ges15QodiriyaAggregateFalse +  $ges12QodiriyaAggregateFalse + $ges3QodiriyaAggregateFalse + $ges11QodiriyaAggregateFalse + $ges3aQodiriyaAggregateFalse - $error;

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

            array("id" => 10, "value" => $ges15QodiriyaActive),
            array("id" => 11, "value" => $ges15QodiriyaAggregateTrue),
            array("id" => 12, "value" => $ges15QodiriyaAggregateFalse - $ges15QodiriyaAggregateError),
            array("id" => 13, "value" => $ges15QodiriyaAggregateError),

            array("id" => 14, "value" => $ges12QodiriyaActive),
            array("id" => 15, "value" => $ges12QodiriyaAggregateTrue),
            array("id" => 16, "value" => $ges12QodiriyaAggregateFalse - $ges12QodiriyaAggregateError),
            array("id" => 17, "value" => $ges12QodiriyaAggregateError),

            array("id" => 18, "value" => $ges3QodiriyaActive),
            array("id" => 19, "value" => $ges3QodiriyaAggregateTrue),
            array("id" => 20, "value" => $ges3QodiriyaAggregateFalse - $ges3QodiriyaAggregateError),
            array("id" => 21, "value" => $ges3QodiriyaAggregateError),

            array("id" => 22, "value" => $ges11QodiriyaActive),
            array("id" => 23, "value" => $ges11QodiriyaAggregateTrue),
            array("id" => 24, "value" => $ges11QodiriyaAggregateFalse - $ges11QodiriyaAggregateError),
            array("id" => 25, "value" => $ges11QodiriyaAggregateError),

            array("id" => 26, "value" => $ges3aQodiriyaActive),
            array("id" => 27, "value" => $ges3aQodiriyaAggregateTrue),
            array("id" => 28, "value" => $ges3aQodiriyaAggregateFalse - $ges3aQodiriyaAggregateError),
            array("id" => 29, "value" => $ges3aQodiriyaAggregateError),
        );

        echo json_encode($data);
    }
}

