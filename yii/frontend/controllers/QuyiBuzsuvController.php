<?php

namespace frontend\controllers;

use common\models\Water;

class QuyiBuzsuvController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes14()
    {
        return $this->render('ges14');
    }

    public function actionGes18()
    {
        return $this->render('ges18');
    }

    public function actionGes19()
    {
        return $this->render('ges19');
    }

    public function actionGes22()
    {
        return $this->render('ges22');
    }

    public function actionGes23()
    {
        return $this->render('ges23');
    }

    public function actionGes41()
    {
        return $this->render('ges41');
    }


    protected string $url = "http://user:N6_3jf8g@192.168.40.215:10190/crq?req=current";

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

    //(ГЭС-14)
    public function actionServer14()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();

        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 41])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges14Quyibuzsuv66 = $this->getValue($data, "G66");
        $ges14Quyibuzsuv93 = $this->getValue($data, "G93");
        $ges14Quyibuzsuv147 = $this->getValue($data, "G147");
        $ges14Quyibuzsuv120 = $this->getValue($data, "G120");
        $ges14Quyibuzsuv174 = $this->getValue($data, "G174");
        $ges14Quyibuzsuv201 = $this->getValue($data, "G201");
        $ges14Quyibuzsuv228 = $this->getValue($data, "G228");
        $ges14Quyibuzsuv416 = $this->getValue($data, "G416");
        $ges14Quyibuzsuv69 = $this->getValue($data, "G69");
        $ges14Quyibuzsuv96 = $this->getValue($data, "G96");
        $ges14Quyibuzsuv123 = $this->getValue($data, "G123");
        $ges14Quyibuzsuv150 = $this->getValue($data, "G150");
        $ges14Quyibuzsuv177 = $this->getValue($data, "G177");
        $ges14Quyibuzsuv1231 = $this->getValue($data, "G1231");
        $ges14Quyibuzsuv1277 = $this->getValue($data, "G1277");
        $ges14Quyibuzsuv255 = $this->getValue($data, "G255");
        $ges14Quyibuzsuv282 = $this->getValue($data, "G282");
        $ges14Quyibuzsuv310 = $this->getValue($data, "G310");
        $ges14Quyibuzsuv350 = $this->getValue($data, "G350");
        $ges14Quyibuzsuv258 = $this->getValue($data, "G258");
        $ges14Quyibuzsuv231 = $this->getValue($data, "G231");
        $ges14Quyibuzsuv285 = $this->getValue($data, "G285");
        $ges14Quyibuzsuv42 = $this->getValue($data, "G42");
        $ges14Quyibuzsuv15 = $this->getValue($data, "G15");
        $ges14Quyibuzsuv12 = $this->getValue($data, "G12");
        $ges14Quyibuzsuv13 = $this->getValue($data, "G13");
        $ges14Quyibuzsuv39 = $this->getValue($data, "G39");
        $ges14Quyibuzsuv40 = $this->getValue($data, "G40");

        $set14Quyibuzsuv66 = $ges14Quyibuzsuv66[2] * 42000 / $CONST;
        $set14Quyibuzsuv93 = $ges14Quyibuzsuv93[2] * 42000 / $CONST;
        $set14Quyibuzsuv147 = $ges14Quyibuzsuv147[2] * 42000 / $CONST;
        $set14Quyibuzsuv120 = $ges14Quyibuzsuv120[2] * 42000 / $CONST;
        $set14Quyibuzsuv174 = $ges14Quyibuzsuv174[2] * 42000 / $CONST;
        $set14Quyibuzsuv201 = $ges14Quyibuzsuv201[2] * 7560 / $CONST;
        $set14Quyibuzsuv228 = $ges14Quyibuzsuv228[2] * 630 / $CONST;
        $set14Quyibuzsuv416 = $ges14Quyibuzsuv416[2] * 3780 / $CONST;

        $set14Quyibuzsuv255 = $ges14Quyibuzsuv255[2] * 630  / $kvt;
        $set14Quyibuzsuv282 = $ges14Quyibuzsuv282[2] * 630 / $kvt;
        $set14Quyibuzsuv310 = 0;//$ges14Quyibuzsuv310[2] * 20 / $kvt;
        $set14Quyibuzsuv350 = 0;//$ges14Quyibuzsuv350[2] * 20 / $kvt;

        $power14Quyibuzsuv12 = $ges14Quyibuzsuv12[2] * 12600 / $CONST;//active
        $reactive14Quyibuzsuv13 = $ges14Quyibuzsuv13[2] * 12600 / $CONST;//reactive
        $water14Quyibuzsuv12 = $energy->getWater($power14Quyibuzsuv12, $pressure, 0.9615, 0.9);//water
        $kpd14Quyibuzsuv12 = $energy->getKpd($power14Quyibuzsuv12, $water14Quyibuzsuv12, $pressure, 0.965);//kpd

        $power14Quyibuzsuv39 = $ges14Quyibuzsuv39[2] * 12600 / $CONST;//active
        $reactive14Quyibuzsuv40 = $ges14Quyibuzsuv40[2] * 12600 / $CONST;//reactive
        $water14Quyibuzsuv39 = $energy->getWater($power14Quyibuzsuv39, $pressure, 0.9615, 0.9);//water
        $kpd14Quyibuzsuv39 = $energy->getKpd($power14Quyibuzsuv39, $water14Quyibuzsuv39, $pressure, 0.965);//kpd

        $data = array(
            array("id" => 66, "value" => $set14Quyibuzsuv66),
            array("id" => 93, "value" => $set14Quyibuzsuv93),
            array("id" => 147, "value" => $set14Quyibuzsuv147),
            array("id" => 120, "value" => $set14Quyibuzsuv120),
            array("id" => 174, "value" => $set14Quyibuzsuv174),
            array("id" => 201, "value" => $set14Quyibuzsuv201),
            array("id" => 228, "value" => $set14Quyibuzsuv228),
            array("id" => 416, "value" => $set14Quyibuzsuv416),

            array("id" => 255, "value" => $set14Quyibuzsuv255),
            array("id" => 282, "value" => $set14Quyibuzsuv282),
            array("id" => 310, "value" => $set14Quyibuzsuv310),
            array("id" => 350, "value" => $set14Quyibuzsuv350),

            array("id" => 69, "value" =>
                $ges14Quyibuzsuv69[2] > 0 ? $energy->getVoltages($ges14Quyibuzsuv69[2], 60) :
                    ($ges14Quyibuzsuv96[2] > 0 ? $energy->getVoltages($ges14Quyibuzsuv96[2], 60)  :
                        ($ges14Quyibuzsuv123[2] > 0 ? $energy->getVoltages($ges14Quyibuzsuv123[2], 60)  :
                            ($ges14Quyibuzsuv150[2] > 0 ? $energy->getVoltages($ges14Quyibuzsuv150[2], 60)  : $energy->getVoltages($ges14Quyibuzsuv177[2], 60))))),

            array("id" => 258, "value" =>
                $ges14Quyibuzsuv258[2] > 0 ? $energy->getVoltages($ges14Quyibuzsuv258[2], 60) : $energy->getVoltages($ges14Quyibuzsuv15[2], 60)),

            array("id" => 231, "value" =>
                $ges14Quyibuzsuv231[2] > 0 ? $energy->getVoltages($ges14Quyibuzsuv231[2], 60) :
                    ($ges14Quyibuzsuv42[2] > 0 ? $energy->getVoltages($ges14Quyibuzsuv42[2], 60)  : $energy->getVoltages($ges14Quyibuzsuv285[2], 60))),

            array("id" => 12, "value" => $power14Quyibuzsuv12),//active
            array("id" => 13, "value" => $reactive14Quyibuzsuv13),//reactive
            array("id" => 14, "value" => $kpd14Quyibuzsuv12),//КПД
            array("id" => 15, "value" => 0),//HA
            array("id" => 16, "value" => $water14Quyibuzsuv12),//water

            array("id" => 39, "value" => $power14Quyibuzsuv39),//active
            array("id" => 40, "value" => $reactive14Quyibuzsuv40),//reactive
            array("id" => 41, "value" => $kpd14Quyibuzsuv39),//КПД
            array("id" => 42, "value" => 0),//HA
            array("id" => 43, "value" => $water14Quyibuzsuv39),//water

            array("id" => 1, "value" => $power14Quyibuzsuv12 + $power14Quyibuzsuv39),
            array("id" => 2, "value" => $reactive14Quyibuzsuv13 + $reactive14Quyibuzsuv40),
            array("id" => 3, "value" =>
                (-1 * $set14Quyibuzsuv66 > 0 ? -1 * $set14Quyibuzsuv66 : 0) +
                (-1 * $set14Quyibuzsuv93 > 0 ? -1 * $set14Quyibuzsuv93 : 0) +
                (-1 * $set14Quyibuzsuv147 > 0 ? -1 * $set14Quyibuzsuv147 : 0) +
                (-1 * $set14Quyibuzsuv120 > 0 ? -1 * $set14Quyibuzsuv120 : 0) +
                (-1 * $set14Quyibuzsuv174 > 0 ? -1 * $set14Quyibuzsuv174 : 0) +
                $set14Quyibuzsuv201 +
                $set14Quyibuzsuv228 +
                $set14Quyibuzsuv416),
            array("id" => 4, "value" =>
                (-1 * $set14Quyibuzsuv66 < 0 ? -1 * $set14Quyibuzsuv66 : 0) +
                (-1 * $set14Quyibuzsuv93 < 0 ? -1 * $set14Quyibuzsuv93 : 0) +
                (-1 * $set14Quyibuzsuv147 < 0 ? -1 * $set14Quyibuzsuv147 : 0) +
                (-1 * $set14Quyibuzsuv120 < 0 ? -1 * $set14Quyibuzsuv120 : 0) +
                (-1 * $set14Quyibuzsuv174 < 0 ? -1 * $set14Quyibuzsuv174 : 0)),
            array("id" => 5, "value" => $set14Quyibuzsuv255 + $set14Quyibuzsuv282 + $set14Quyibuzsuv310 + $set14Quyibuzsuv350),
            array("id" => 6, "value" => $water14Quyibuzsuv12 + $water14Quyibuzsuv39),
            array("id" => 7, "value" => $ges14Quyibuzsuv1231[2] > 0 ? $ges14Quyibuzsuv1231[2] : $ges14Quyibuzsuv1277[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ГЭС-18)
    public function actionServer18()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();

        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 42])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges18Quyibuzsuv589 = $this->getValue($data, "G589");
        $ges18Quyibuzsuv566 = $this->getValue($data, "G566");
        $ges18Quyibuzsuv612 = $this->getValue($data, "G612");
        $ges18Quyibuzsuv543 = $this->getValue($data, "G543");
        $ges18Quyibuzsuv658 = $this->getValue($data, "G658");
        $ges18Quyibuzsuv635 = $this->getValue($data, "G635");
        $ges18Quyibuzsuv588 = $this->getValue($data, "G588");
        $ges18Quyibuzsuv565 = $this->getValue($data, "G565");
        $ges18Quyibuzsuv578 = $this->getValue($data, "G578");
        $ges18Quyibuzsuv601 = $this->getValue($data, "G601");
        $ges18Quyibuzsuv446 = $this->getValue($data, "G446");
        $ges18Quyibuzsuv469 = $this->getValue($data, "G469");
        $ges18Quyibuzsuv492 = $this->getValue($data, "G492");
        $ges18Quyibuzsuv513 = $this->getValue($data, "G513");
        $ges18Quyibuzsuv480 = $this->getValue($data, "G480");
        $ges18Quyibuzsuv481 = $this->getValue($data, "G481");
        $ges18Quyibuzsuv457 = $this->getValue($data, "G457");
        $ges18Quyibuzsuv458 = $this->getValue($data, "G458");
        $ges18Quyibuzsuv434 = $this->getValue($data, "G434");
        $ges18Quyibuzsuv435 = $this->getValue($data, "G435");

        $set18Quyibuzsuv543 = $ges18Quyibuzsuv543[2] * 4800 / $CONST;
        $set18Quyibuzsuv566 = $ges18Quyibuzsuv566[2] * 21000 / $CONST;
        $set18Quyibuzsuv589 = $ges18Quyibuzsuv589[2] * 21000 / $CONST;
        $set18Quyibuzsuv612 = $ges18Quyibuzsuv612[2] * 14000 / $CONST;
        $set18Quyibuzsuv635 = $ges18Quyibuzsuv635[2] * 1200 / $CONST;
        $set18Quyibuzsuv658 = $ges18Quyibuzsuv658[2] * 1200 / $CONST;

        $set18Quyibuzsuv513 = $ges18Quyibuzsuv513[2] * 60 / $kvt;

        $power18Quyibuzsuv480 = $ges18Quyibuzsuv480[2] * 4800 / $CONST;//active
        $reactive18Quyibuzsuv481 = $ges18Quyibuzsuv481[2] * 4800 / $CONST;//reactive
        $water18Quyibuzsuv480 = $energy->getWater($power18Quyibuzsuv480, $pressure, 0.945, 0.8321);//water
        $kpd18Quyibuzsuv480 = $energy->getKpd($power18Quyibuzsuv480, $water18Quyibuzsuv480, $pressure, 0.945);//kpd

        $power18Quyibuzsuv457 = $ges18Quyibuzsuv457[2] * 4800 / $CONST;//active
        $reactive18Quyibuzsuv458 = $ges18Quyibuzsuv458[2] * 4800 / $CONST;//reactive
        $water18Quyibuzsuv457 = $energy->getWater($power18Quyibuzsuv457, $pressure, 0.945, 0.8321);//water
        $kpd18Quyibuzsuv457 = $energy->getKpd($power18Quyibuzsuv457, $water18Quyibuzsuv457, $pressure, 0.945);//kpd

        $power18Quyibuzsuv434 = $ges18Quyibuzsuv434[2] * 4800 / $CONST;//active
        $reactive18Quyibuzsuv435 = $ges18Quyibuzsuv435[2] * 4800 / $CONST;//reactive
        $water18Quyibuzsuv434 = $energy->getWater($power18Quyibuzsuv434, $pressure, 0.945, 0.8321);//water
        $kpd18Quyibuzsuv434 = $energy->getKpd($power18Quyibuzsuv434, $water18Quyibuzsuv434, $pressure, 0.945);//kpd

        $data = array(
            array("id" => 589, "value" => $set18Quyibuzsuv589),
            array("id" => 566, "value" => $set18Quyibuzsuv566),
            array("id" => 612, "value" => $set18Quyibuzsuv612),
            array("id" => 543, "value" => $set18Quyibuzsuv543),
            array("id" => 658, "value" => $set18Quyibuzsuv658),
            array("id" => 635, "value" => $set18Quyibuzsuv635),

            array("id" => 513, "value" => $set18Quyibuzsuv513),

            array("id" => 578, "value" =>
                $ges18Quyibuzsuv578[2] > 0 ? $energy->getVoltages($ges18Quyibuzsuv578[2], 60) : $energy->getVoltages($ges18Quyibuzsuv601[2], 60)),

            array("id" => 446, "value" =>
                $ges18Quyibuzsuv446[2] > 0 ? $energy->getVoltages($ges18Quyibuzsuv446[2], 60) :
                    ($ges18Quyibuzsuv469[2] > 0 ? $energy->getVoltages($ges18Quyibuzsuv469[2], 60)  : $energy->getVoltages($ges18Quyibuzsuv492[2], 60))),

            array("id" => 480, "value" => $power18Quyibuzsuv480),//active
            array("id" => 481, "value" => $reactive18Quyibuzsuv481),//reactive
            array("id" => 482, "value" => $kpd18Quyibuzsuv480),//КПД
            array("id" => 483, "value" => 0),//HA
            array("id" => 484, "value" => $water18Quyibuzsuv480),//water

            array("id" => 457, "value" => $power18Quyibuzsuv457),//active
            array("id" => 458, "value" => $reactive18Quyibuzsuv458),//reactive
            array("id" => 459, "value" => $kpd18Quyibuzsuv457),//КПД
            array("id" => 460, "value" => 0),//HA
            array("id" => 461, "value" => $water18Quyibuzsuv457),//water

            array("id" => 434, "value" => $power18Quyibuzsuv434),//active
            array("id" => 435, "value" => $reactive18Quyibuzsuv435),//reactive
            array("id" => 436, "value" => $kpd18Quyibuzsuv434),//КПД
            array("id" => 437, "value" => 0),//HA
            array("id" => 438, "value" => $water18Quyibuzsuv434),//water

            array("id" => 1, "value" => $power18Quyibuzsuv480 + $power18Quyibuzsuv457 + $power18Quyibuzsuv434),
            array("id" => 2, "value" => $reactive18Quyibuzsuv481 + $reactive18Quyibuzsuv458 + $reactive18Quyibuzsuv435),
            array("id" => 3, "value" =>
                ($set18Quyibuzsuv589 > 0 ? $set18Quyibuzsuv589 : 0) +
                ($set18Quyibuzsuv566 > 0 ? $set18Quyibuzsuv566 : 0) +
                ($set18Quyibuzsuv612 > 0 ? $set18Quyibuzsuv612 : 0) +
                $set18Quyibuzsuv543 +
                $set18Quyibuzsuv658 +
                $set18Quyibuzsuv635),
            array("id" => 4, "value" =>
                ($set18Quyibuzsuv589 < 0 ? $set18Quyibuzsuv589 : 0) +
                ($set18Quyibuzsuv566 < 0 ? $set18Quyibuzsuv566 : 0) +
                ($set18Quyibuzsuv612 < 0 ? $set18Quyibuzsuv612 : 0)),
            array("id" => 5, "value" => $set18Quyibuzsuv513),
            array("id" => 6, "value" => $water18Quyibuzsuv480 + $water18Quyibuzsuv457 + $water18Quyibuzsuv434),
            array("id" => 7, "value" => $ges18Quyibuzsuv588[2] > 0 ? $ges18Quyibuzsuv588[2] : $ges18Quyibuzsuv565[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ГЭС-19)
    public function actionServer19()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();

        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 43])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges19Quyibuzsuv859 = $this->getValue($data, "G859");
        $ges19Quyibuzsuv836 = $this->getValue($data, "G836");
        $ges19Quyibuzsuv916 = $this->getValue($data, "G916");
        $ges19Quyibuzsuv915 = $this->getValue($data, "G915");
        $ges19Quyibuzsuv882 = $this->getValue($data, "G882");
        $ges19Quyibuzsuv968 = $this->getValue($data, "G968");
        $ges19Quyibuzsuv945 = $this->getValue($data, "G945");
        $ges19Quyibuzsuv158 = $this->getValue($data, "B158");
        $ges19Quyibuzsuv157 = $this->getValue($data, "B157");
        $ges19Quyibuzsuv871 = $this->getValue($data, "G871");
        $ges19Quyibuzsuv848 = $this->getValue($data, "G848");
        $ges19Quyibuzsuv905 = $this->getValue($data, "G905");
        $ges19Quyibuzsuv716 = $this->getValue($data, "G716");
        $ges19Quyibuzsuv750 = $this->getValue($data, "G750");
        $ges19Quyibuzsuv894 = $this->getValue($data, "G894");
        $ges19Quyibuzsuv957 = $this->getValue($data, "G957");
        $ges19Quyibuzsuv739 = $this->getValue($data, "G739");
        $ges19Quyibuzsuv760 = $this->getValue($data, "G760");
        $ges19Quyibuzsuv813 = $this->getValue($data, "G813");
        $ges19Quyibuzsuv790 = $this->getValue($data, "G790");
        $ges19Quyibuzsuv991 = $this->getValue($data, "G991");
        $ges19Quyibuzsuv1024 = $this->getValue($data, "G1024");
        $ges19Quyibuzsuv704 = $this->getValue($data, "G704");
        $ges19Quyibuzsuv705 = $this->getValue($data, "G705");
        $ges19Quyibuzsuv727 = $this->getValue($data, "G727");
        $ges19Quyibuzsuv728 = $this->getValue($data, "G728");
        $ges19Quyibuzsuv881 = $this->getValue($data, "G881");
        $ges19Quyibuzsuv904 = $this->getValue($data, "G904");

        $set19Quyibuzsuv836 = $ges19Quyibuzsuv836[2] * 132000 / $CONST;
        $set19Quyibuzsuv859 = $ges19Quyibuzsuv859[2] * 132000 / $CONST;
        $set19Quyibuzsuv882 = $ges19Quyibuzsuv882[2] * 132000 / $CONST;
        $set19Quyibuzsuv915 = $ges19Quyibuzsuv915[2] * 132000 / $CONST;
        $set19Quyibuzsuv916 = $ges19Quyibuzsuv916[2] * 132000 / $CONST;
        $set19Quyibuzsuv945 = $ges19Quyibuzsuv945[2] * 132000 / $CONST;
        $set19Quyibuzsuv968 = $ges19Quyibuzsuv968[2] * 132000 / $CONST;
        $set19Quyibuzsuv157 = $ges19Quyibuzsuv157[2] * 21 / $CONST;
        $set19Quyibuzsuv158 = $ges19Quyibuzsuv158[2] * 21 / $CONST;

        $set19Quyibuzsuv760 = $ges19Quyibuzsuv760[2] * 120 / $kvt;
        $set19Quyibuzsuv790 = $ges19Quyibuzsuv790[2] * 1200 / $kvt;
        $set19Quyibuzsuv813 = $ges19Quyibuzsuv813[2] * 1800 / $kvt;
        $set19Quyibuzsuv991 = 0;//$ges19Quyibuzsuv991[2] * 30 / $kvt;
        $set19Quyibuzsuv1024 = $ges19Quyibuzsuv1024[2] * 20 / $kvt;

        $power19Quyibuzsuv704 = $ges19Quyibuzsuv704[2] * 9600 / $CONST;//active
        $reactive19Quyibuzsuv705 = $ges19Quyibuzsuv705[2] * 9600 / $CONST;//reactive
        $water19Quyibuzsuv704 = $energy->getWater($power19Quyibuzsuv704, $pressure, 0.95, 0.9614);//water
        $kpd19Quyibuzsuv704 = $energy->getKpd($power19Quyibuzsuv704, $water19Quyibuzsuv704, $pressure, 0.95);//kpd

        $power19Quyibuzsuv727 = $ges19Quyibuzsuv727[2] * 9600 / $CONST;//active
        $reactive19Quyibuzsuv728 = $ges19Quyibuzsuv728[2] * 9600 / $CONST;//reactive
        $water19Quyibuzsuv727 = $energy->getWater($power19Quyibuzsuv727, $pressure, 0.95, 0.9614);//water
        $kpd19Quyibuzsuv727 = $energy->getKpd($power19Quyibuzsuv727, $water19Quyibuzsuv727, $pressure, 0.95);//kpd

        $data = array(
            array("id" => 836, "value" => $set19Quyibuzsuv836),
            array("id" => 859, "value" => $set19Quyibuzsuv859),
            array("id" => 882, "value" => $set19Quyibuzsuv882),
            array("id" => 915, "value" => $set19Quyibuzsuv915),
            array("id" => 916, "value" => $set19Quyibuzsuv916),
            array("id" => 945, "value" => $set19Quyibuzsuv945),
            array("id" => 968, "value" => $set19Quyibuzsuv968),
            array("id" => 157, "value" => $set19Quyibuzsuv157),
            array("id" => 158, "value" => $set19Quyibuzsuv158),

            array("id" => 760, "value" => $set19Quyibuzsuv760),
            array("id" => 790, "value" => $set19Quyibuzsuv790),
            array("id" => 813, "value" => $set19Quyibuzsuv813),
            array("id" => 991, "value" => $set19Quyibuzsuv991),
            array("id" => 1024, "value" => $set19Quyibuzsuv1024),

            array("id" => 716, "value" =>
                $ges19Quyibuzsuv716[2] > 0 ? $energy->getVoltages($ges19Quyibuzsuv716[2], 60) : $energy->getVoltages($ges19Quyibuzsuv750[2], 60)),
            array("id" => 894, "value" =>
                $ges19Quyibuzsuv894[2] > 0 ? $energy->getVoltages($ges19Quyibuzsuv894[2], 60) : $energy->getVoltages($ges19Quyibuzsuv957[2], 60)),
            array("id" => 739, "value" =>
                $ges19Quyibuzsuv739[2] > 0 ? $energy->getVoltages($ges19Quyibuzsuv739[2], 60) : $energy->getVoltages($ges19Quyibuzsuv750[2], 60)),
            array("id" => 871, "value" =>
                $ges19Quyibuzsuv871[2] > 0 ? $energy->getVoltages($ges19Quyibuzsuv871[2], 60) :
                    ($ges19Quyibuzsuv848[2] > 0 ? $energy->getVoltages($ges19Quyibuzsuv848[2], 60)  : $energy->getVoltages($ges19Quyibuzsuv905[2], 60))),

            array("id" => 704, "value" => $power19Quyibuzsuv704),//active
            array("id" => 705, "value" => $reactive19Quyibuzsuv705),//reactive
            array("id" => 706, "value" => $kpd19Quyibuzsuv704),//КПД
            array("id" => 707, "value" => 0),//HA
            array("id" => 708, "value" => $water19Quyibuzsuv704),//water

            array("id" => 727, "value" => $power19Quyibuzsuv727),//active
            array("id" => 728, "value" => $reactive19Quyibuzsuv728),//reactive
            array("id" => 729, "value" => $kpd19Quyibuzsuv727),//КПД
            array("id" => 730, "value" => 0),//HA
            array("id" => 731, "value" => $water19Quyibuzsuv727),//water

            array("id" => 1, "value" => $power19Quyibuzsuv704 + $power19Quyibuzsuv727),
            array("id" => 2, "value" => $reactive19Quyibuzsuv705 + $reactive19Quyibuzsuv728),
            array("id" => 3, "value" =>
                ($set19Quyibuzsuv836 > 0 ? $set19Quyibuzsuv836 : 0) +
                ($set19Quyibuzsuv859 > 0 ? $set19Quyibuzsuv859 : 0) +
                ($set19Quyibuzsuv882 > 0 ? $set19Quyibuzsuv882 : 0) +
                $set19Quyibuzsuv915 +
                ($set19Quyibuzsuv945 > 0 ? $set19Quyibuzsuv945 : 0) +
                ($set19Quyibuzsuv968 > 0 ? $set19Quyibuzsuv968 : 0) +
                ($set19Quyibuzsuv157 > 0 ? $set19Quyibuzsuv157 : 0) +
                ($set19Quyibuzsuv158 > 0 ? $set19Quyibuzsuv158 : 0)),

            array("id" => 4, "value" =>
                ($set19Quyibuzsuv836 < 0 ? $set19Quyibuzsuv836 : 0) +
                ($set19Quyibuzsuv859 < 0 ? $set19Quyibuzsuv859 : 0) +
                ($set19Quyibuzsuv882 < 0 ? $set19Quyibuzsuv882 : 0) +
                $set19Quyibuzsuv916 +
                ($set19Quyibuzsuv945 < 0 ? $set19Quyibuzsuv945 : 0) +
                ($set19Quyibuzsuv968 < 0 ? $set19Quyibuzsuv968 : 0) +
                ($set19Quyibuzsuv157 < 0 ? $set19Quyibuzsuv157 : 0) +
                ($set19Quyibuzsuv158 < 0 ? $set19Quyibuzsuv158 : 0)),
            array("id" => 5, "value" => $set19Quyibuzsuv760 + $set19Quyibuzsuv790 + $set19Quyibuzsuv813 + $set19Quyibuzsuv991 + $set19Quyibuzsuv1024),
            array("id" => 6, "value" => $water19Quyibuzsuv704 + $water19Quyibuzsuv727),
            array("id" => 7, "value" => $ges19Quyibuzsuv881[2] > 0 ? $ges19Quyibuzsuv881[2] : $ges19Quyibuzsuv904[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ГЭС-23)
    public function actionServer23()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();

        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 44])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges23Quyibuzsuv1301 = $this->getValue($data, "G1301");
        $ges23Quyibuzsuv1302 = $this->getValue($data, "G1302");
        $ges23Quyibuzsuv1611 = $this->getValue($data, "G1611");
        $ges23Quyibuzsuv1634 = $this->getValue($data, "G1634");
        $ges23Quyibuzsuv1657 = $this->getValue($data, "G1657");
        $ges23Quyibuzsuv1542 = $this->getValue($data, "G1542");
        $ges23Quyibuzsuv1588 = $this->getValue($data, "G1588");
        $ges23Quyibuzsuv1566 = $this->getValue($data, "G1566");
        $ges23Quyibuzsuv1519 = $this->getValue($data, "G1519");
        $ges23Quyibuzsuv1496 = $this->getValue($data, "G1496");
        $ges23Quyibuzsuv1427 = $this->getValue($data, "G1427");
        $ges23Quyibuzsuv1473 = $this->getValue($data, "G1473");
        $ges23Quyibuzsuv1450 = $this->getValue($data, "G1450");
        $ges23Quyibuzsuv1324 = $this->getValue($data, "G1324");
        $ges23Quyibuzsuv1325 = $this->getValue($data, "G1325");
        $ges23Quyibuzsuv1518 = $this->getValue($data, "G1518");
        $ges23Quyibuzsuv1541 = $this->getValue($data, "G1541");
        $ges23Quyibuzsuv1669 = $this->getValue($data, "G1669");
        $ges23Quyibuzsuv1646 = $this->getValue($data, "G1646");
        $ges23Quyibuzsuv1531 = $this->getValue($data, "G1531");
        $ges23Quyibuzsuv1554 = $this->getValue($data, "G1554");
        $ges23Quyibuzsuv1508 = $this->getValue($data, "G1508");
        $ges23Quyibuzsuv1313 = $this->getValue($data, "G1313");
        $ges23Quyibuzsuv1336 = $this->getValue($data, "G1336");
        $ges23Quyibuzsuv1357 = $this->getValue($data, "G1357");
        $ges23Quyibuzsuv1397 = $this->getValue($data, "G1397");
        $ges23Quyibuzsuv1680 = $this->getValue($data, "G1680");

        $set23Quyibuzsuv1427 = $ges23Quyibuzsuv1427[2] * 600 / $CONST;
        $set23Quyibuzsuv1450 = $ges23Quyibuzsuv1450[2] * 1200 / $CONST;
        $set23Quyibuzsuv1473 = $ges23Quyibuzsuv1473[2] * 3600 / $CONST;
        $set23Quyibuzsuv1542 = $ges23Quyibuzsuv1542[2] * 14000 / $CONST;
        $set23Quyibuzsuv1566 = $ges23Quyibuzsuv1566[2] * 14000 / $CONST;
        $set23Quyibuzsuv1588 = $ges23Quyibuzsuv1588[2] * 21000 / $CONST;
        $set23Quyibuzsuv1611 = $ges23Quyibuzsuv1611[2] * 33000 / $CONST;
        $set23Quyibuzsuv1634 = $ges23Quyibuzsuv1634[2] * 132000 / $CONST;
        $set23Quyibuzsuv1657 = $ges23Quyibuzsuv1657[2] * 132000 / $CONST;

        $set23Quyibuzsuv1357 = $ges23Quyibuzsuv1357[2] * 60 / $kvt;
        $set23Quyibuzsuv1397 = $ges23Quyibuzsuv1397[2] * 60 / $kvt;
        $set23Quyibuzsuv1680 = 0;//$ges23Quyibuzsuv1680[2] * 20 / $kvt;

        $power23Quyibuzsuv1301 = $ges23Quyibuzsuv1301[2] * 18000 / $CONST;//active
        $reactive23Quyibuzsuv1302 = $ges23Quyibuzsuv1302[2] * 18000 / $CONST;//reactive
        $water23Quyibuzsuv1301 = $energy->getWater($power23Quyibuzsuv1301, $pressure, 0.95, 0.8382);//water
        $kpd23Quyibuzsuv1301 = $energy->getKpd($power23Quyibuzsuv1301, $water23Quyibuzsuv1301, $pressure, 0.95);//kpd

        $power23Quyibuzsuv1324 = $ges23Quyibuzsuv1324[2] * 18000 / $CONST;//active
        $reactive23Quyibuzsuv1325 = $ges23Quyibuzsuv1325[2] * 18000 / $CONST;//reactive
        $water23Quyibuzsuv1324 = $energy->getWater($power23Quyibuzsuv1324, $pressure, 0.95, 0.8382);//water
        $kpd23Quyibuzsuv1324 = $energy->getKpd($power23Quyibuzsuv1324, $water23Quyibuzsuv1324, $pressure, 0.95);//kpd

        $data = array(
            array("id" => 1611, "value" => $set23Quyibuzsuv1611),
            array("id" => 1634, "value" => $set23Quyibuzsuv1634),
            array("id" => 1657, "value" => $set23Quyibuzsuv1657),
            array("id" => 1542, "value" => $set23Quyibuzsuv1542),
            array("id" => 1588, "value" => $set23Quyibuzsuv1588),
            array("id" => 1566, "value" => $set23Quyibuzsuv1566),
            array("id" => 1473, "value" => $set23Quyibuzsuv1473),
            array("id" => 1427, "value" => $set23Quyibuzsuv1427),
            array("id" => 1450, "value" => $set23Quyibuzsuv1450),

            array("id" => 1357, "value" => $set23Quyibuzsuv1357),
            array("id" => 1397, "value" => $set23Quyibuzsuv1397),
            array("id" => 1680, "value" => $set23Quyibuzsuv1680),

            array("id" => 1519, "value" => $ges23Quyibuzsuv1519[2] * 21000 / $CONST),
            array("id" => 1496, "value" => $ges23Quyibuzsuv1496[2] * 24000 / $CONST),

            array("id" => 1669, "value" =>
                $ges23Quyibuzsuv1669[2] > 0 ? $energy->getVoltages($ges23Quyibuzsuv1669[2], 60) : $energy->getVoltages($ges23Quyibuzsuv1646[2], 60)),
            array("id" => 1531, "value" =>
                $ges23Quyibuzsuv1531[2] > 0 ? $energy->getVoltages($ges23Quyibuzsuv1531[2], 60) : $energy->getVoltages($ges23Quyibuzsuv1554[2], 60)),
            array("id" => 1508, "value" =>
                $ges23Quyibuzsuv1508[2] > 0 ? $energy->getVoltages($ges23Quyibuzsuv1508[2], 60) :
                    ($ges23Quyibuzsuv1313[2] > 0 ? $energy->getVoltages($ges23Quyibuzsuv1313[2], 60)  : $energy->getVoltages($ges23Quyibuzsuv1336[2], 60))),

            array("id" => 1301, "value" => $power23Quyibuzsuv1301),//active
            array("id" => 1302, "value" => $reactive23Quyibuzsuv1302),//reactive
            array("id" => 1303, "value" => $kpd23Quyibuzsuv1301),//КПД
            array("id" => 1304, "value" => 0),//HA
            array("id" => 1305, "value" => $water23Quyibuzsuv1301),//water

            array("id" => 1324, "value" => $power23Quyibuzsuv1324),//active
            array("id" => 1325, "value" => $reactive23Quyibuzsuv1325),//reactive
            array("id" => 1326, "value" => $kpd23Quyibuzsuv1324),//КПД
            array("id" => 1327, "value" => 0),//HA
            array("id" => 1328, "value" => $water23Quyibuzsuv1324),//water

            array("id" => 1, "value" => $power23Quyibuzsuv1301 + $power23Quyibuzsuv1324),
            array("id" => 2, "value" => $reactive23Quyibuzsuv1302 + $reactive23Quyibuzsuv1325),
            array("id" => 3, "value" =>
                ($set23Quyibuzsuv1611 > 0 ? $set23Quyibuzsuv1611 : 0) +
                ($set23Quyibuzsuv1634 > 0 ? $set23Quyibuzsuv1634 : 0) +
                ($set23Quyibuzsuv1657 > 0 ? $set23Quyibuzsuv1657 : 0) +
                ($set23Quyibuzsuv1542 > 0 ? $set23Quyibuzsuv1542 : 0) +
                ($set23Quyibuzsuv1588 > 0 ? $set23Quyibuzsuv1588 : 0) +
                ($set23Quyibuzsuv1566 > 0 ? $set23Quyibuzsuv1566 : 0) +
                $set23Quyibuzsuv1473 + $set23Quyibuzsuv1427 + $set23Quyibuzsuv1450),

            array("id" => 4, "value" =>
                ($set23Quyibuzsuv1611 < 0 ? $set23Quyibuzsuv1611 : 0) +
                ($set23Quyibuzsuv1634 < 0 ? $set23Quyibuzsuv1634 : 0) +
                ($set23Quyibuzsuv1657 < 0 ? $set23Quyibuzsuv1657 : 0) +
                ($set23Quyibuzsuv1542 < 0 ? $set23Quyibuzsuv1542 : 0) +
                ($set23Quyibuzsuv1588 < 0 ? $set23Quyibuzsuv1588 : 0) +
                ($set23Quyibuzsuv1566 < 0 ? $set23Quyibuzsuv1566 : 0)),
            array("id" => 5, "value" => $set23Quyibuzsuv1357 + $set23Quyibuzsuv1397 + $set23Quyibuzsuv1680),
            array("id" => 6, "value" => $water23Quyibuzsuv1301 + $water23Quyibuzsuv1324),
            array("id" => 7, "value" => $ges23Quyibuzsuv1518[2] > 0 ? $ges23Quyibuzsuv1518[2] : $ges23Quyibuzsuv1541[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ГЭС-22)
    public function actionServer22()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();

        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 45])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges22Quyibuzsuv1278 = $this->getValue($data, "G1278");
        $ges22Quyibuzsuv1290 = $this->getValue($data, "G1290");
        $ges22Quyibuzsuv1209 = $this->getValue($data, "G1209");
        $ges22Quyibuzsuv1221 = $this->getValue($data, "G1221");
        $ges22Quyibuzsuv1106 = $this->getValue($data, "G1106");
        $ges22Quyibuzsuv1129 = $this->getValue($data, "G1129");
        $ges22Quyibuzsuv1094 = $this->getValue($data, "G1094");
        $ges22Quyibuzsuv1095 = $this->getValue($data, "G1095");
        $ges22Quyibuzsuv1117 = $this->getValue($data, "G1117");
        $ges22Quyibuzsuv1118 = $this->getValue($data, "G1118");
        $ges22Quyibuzsuv1163 = $this->getValue($data, "G1163");
        $ges22Quyibuzsuv1140 = $this->getValue($data, "G1140");
        $ges22Quyibuzsuv1232 = $this->getValue($data, "G1232");
        $ges22Quyibuzsuv1255 = $this->getValue($data, "G1255");
        $ges22Quyibuzsuv1186 = $this->getValue($data, "G1186");
        $ges22Quyibuzsuv1231 = $this->getValue($data, "G1231");
        $ges22Quyibuzsuv1277 = $this->getValue($data, "G1277");

        $set22Quyibuzsuv1186 = $ges22Quyibuzsuv1186[2] * 3600 / $CONST;
        $set22Quyibuzsuv1209 = $ges22Quyibuzsuv1209[2] * 60 / $CONST;
        $set22Quyibuzsuv1255 = $ges22Quyibuzsuv1255[2] * 480 / $CONST;
        $set22Quyibuzsuv1278 = $ges22Quyibuzsuv1278[2] * 1 / $CONST;

        $set22Quyibuzsuv1140 = $ges22Quyibuzsuv1140[2] * 14000 / $kvt;
        $set22Quyibuzsuv1163 = $ges22Quyibuzsuv1163[2] * 1 / $kvt;
        $set22Quyibuzsuv1232 = $ges22Quyibuzsuv1232[2] * 18000 / $kvt;

        $power22Quyibuzsuv1094 = $ges22Quyibuzsuv1094[2] * 3600 / $CONST;//active
        $reactive22Quyibuzsuv1095 = $ges22Quyibuzsuv1095[2] * 3600 / $CONST;//reactive
        $water22Quyibuzsuv1094 = $energy->getWater($power22Quyibuzsuv1094, $pressure, 0.941, 0.8536);//water
        $kpd22Quyibuzsuv1094 = $energy->getKpd($power22Quyibuzsuv1094, $water22Quyibuzsuv1094, $pressure, 0.941);//kpd

        $power22Quyibuzsuv1117 = $ges22Quyibuzsuv1117[2] * 3600 / $CONST;//active
        $reactive22Quyibuzsuv1118 = $ges22Quyibuzsuv1118[2] * 3600 / $CONST;//reactive
        $water22Quyibuzsuv1117 = $energy->getWater($power22Quyibuzsuv1117, $pressure, 0.941, 0.8536);//water
        $kpd22Quyibuzsuv1117 = $energy->getKpd($power22Quyibuzsuv1117, $water22Quyibuzsuv1117, $pressure, 0.941);//kpd

        $data = array(
            array("id" => 1278, "value" => $set22Quyibuzsuv1278),
            array("id" => 1209, "value" => $set22Quyibuzsuv1209),
            array("id" => 1255, "value" => $set22Quyibuzsuv1255),
            array("id" => 1186, "value" => $set22Quyibuzsuv1186),

            array("id" => 1163, "value" => $set22Quyibuzsuv1163),
            array("id" => 1140, "value" => $set22Quyibuzsuv1140),
            array("id" => 1232, "value" => $set22Quyibuzsuv1232),

            array("id" => 1290, "value" => $energy->getVoltages($ges22Quyibuzsuv1290[2], 60)),
            array("id" => 1221, "value" =>
                $ges22Quyibuzsuv1221[2] > 0 ? $energy->getVoltages($ges22Quyibuzsuv1221[2], 60) :
                    ($ges22Quyibuzsuv1106[2] > 0 ? $energy->getVoltages($ges22Quyibuzsuv1106[2], 60)  : $energy->getVoltages($ges22Quyibuzsuv1129[2], 60))),

            array("id" => 1094, "value" => $power22Quyibuzsuv1094),//active
            array("id" => 1095, "value" => $reactive22Quyibuzsuv1095),//reactive
            array("id" => 1096, "value" => $kpd22Quyibuzsuv1094),//КПД
            array("id" => 1097, "value" => 0),//HA
            array("id" => 1098, "value" => $water22Quyibuzsuv1094),//water

            array("id" => 1117, "value" => $power22Quyibuzsuv1117),//active
            array("id" => 1118, "value" => $reactive22Quyibuzsuv1118),//reactive
            array("id" => 1119, "value" => $kpd22Quyibuzsuv1117),//КПД
            array("id" => 1120, "value" => 0),//HA
            array("id" => 1121, "value" => $water22Quyibuzsuv1117),//water

            array("id" => 1, "value" => $power22Quyibuzsuv1094 + $power22Quyibuzsuv1117),
            array("id" => 2, "value" => $reactive22Quyibuzsuv1095 + $reactive22Quyibuzsuv1118),
            array("id" => 3, "value" =>
                ($set22Quyibuzsuv1278 > 0 ? $set22Quyibuzsuv1278 : 0) +
                ($set22Quyibuzsuv1209 > 0 ? $set22Quyibuzsuv1209 : 0) +
                $set22Quyibuzsuv1255 + $set22Quyibuzsuv1186),
            array("id" => 4, "value" =>
                ($set22Quyibuzsuv1278 < 0 ? $set22Quyibuzsuv1278 : 0) +
                ($set22Quyibuzsuv1209 < 0 ? $set22Quyibuzsuv1209 : 0)),
            array("id" => 5, "value" => $set22Quyibuzsuv1163 + $set22Quyibuzsuv1140 + $set22Quyibuzsuv1232),
            array("id" => 6, "value" => $water22Quyibuzsuv1094 + $water22Quyibuzsuv1117),
            array("id" => 7, "value" => $ges22Quyibuzsuv1231[2] > 0 ? $ges22Quyibuzsuv1231[2] : $ges22Quyibuzsuv1277[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ГЭС-41)
    public function actionServer41()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();

        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 46])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges41Quyibuzsuv1823 = $this->getValue($data, "G1823");
        $ges41Quyibuzsuv1824 = $this->getValue($data, "G1824");
        $ges41Quyibuzsuv1858 = $this->getValue($data, "G1858");
        $ges41Quyibuzsuv1852 = $this->getValue($data, "G1852");
        $ges41Quyibuzsuv1798 = $this->getValue($data, "G1798");
        $ges41Quyibuzsuv1771 = $this->getValue($data, "G1771");
        $ges41Quyibuzsuv1708 = $this->getValue($data, "G1708");
        $ges41Quyibuzsuv1712 = $this->getValue($data, "G1712");
        $ges41Quyibuzsuv1736 = $this->getValue($data, "G1736");
        $ges41Quyibuzsuv1740 = $this->getValue($data, "G1740");
        $ges41Quyibuzsuv1812 = $this->getValue($data, "G1812");
        $ges41Quyibuzsuv1728 = $this->getValue($data, "G1728");
        $ges41Quyibuzsuv1756 = $this->getValue($data, "G1756");
        $ges41Quyibuzsuv285 = $this->getValue($data, "B285");
        $ges41Quyibuzsuv1795 = $this->getValue($data, "G1795");
        $ges41Quyibuzsuv1768 = $this->getValue($data, "G1768");

        $set41Quyibuzsuv1823 = $ges41Quyibuzsuv1823[2] * 21000 / $CONST;
        $set41Quyibuzsuv1824 = $ges41Quyibuzsuv1824[2] * 21000 / $CONST;

        $set41Quyibuzsuv1795 = $ges41Quyibuzsuv1795[2] * 100 / $CONST;
        $set41Quyibuzsuv1768 = $ges41Quyibuzsuv1768[2] * 100 / $CONST;

        $power41Quyibuzsuv1708 = $ges41Quyibuzsuv1708[2] * 10500 / $kvt;//active
        $reactive41Quyibuzsuv1712 = $ges41Quyibuzsuv1712[2] * 10500 / $kvt;//reactive
        $water41Quyibuzsuv1708 = $energy->getWater($power41Quyibuzsuv1708, $pressure, 0.956, 0.9276);//water
        $kpd41Quyibuzsuv1708 = $energy->getKpd($power41Quyibuzsuv1708, $water41Quyibuzsuv1708, $pressure, 0.962);//kpd

        $power41Quyibuzsuv1736 = $ges41Quyibuzsuv1736[2] * 10500 / $kvt;//active
        $reactive41Quyibuzsuv1740 = $ges41Quyibuzsuv1740[2] * 10500 / $kvt;//reactive
        $water41Quyibuzsuv1736 = $energy->getWater($power41Quyibuzsuv1736, $pressure, 0.956, 0.9276);//water
        $kpd41Quyibuzsuv1736 = $energy->getKpd($power41Quyibuzsuv1736, $water41Quyibuzsuv1736, $pressure, 0.962);//kpd

        $set41Quyibuzsuv285 = $ges41Quyibuzsuv285[2] * 40 / $CONST;
        $data = array(
            array("id" => 1823, "value" => $set41Quyibuzsuv1823),
            array("id" => 1824, "value" => $set41Quyibuzsuv1824),

            array("id" => 1795, "value" => $set41Quyibuzsuv1795),
            array("id" => 1768, "value" => $set41Quyibuzsuv1768),

            array("id" => 1858, "value" => $ges41Quyibuzsuv1858[2] * 21000 / $kvt),
            array("id" => 1890, "value" => $set41Quyibuzsuv285),

            array("id" => 1852, "value" => $energy->getVoltages($ges41Quyibuzsuv1852[2], 60)),
            array("id" => 1798, "value" => $ges41Quyibuzsuv1798[2] > 0 ? $energy->getVoltages($ges41Quyibuzsuv1798[2], 60) : $energy->getVoltages($ges41Quyibuzsuv1771[2], 60)),

            array("id" => 1708, "value" => $power41Quyibuzsuv1708),//active
            array("id" => 1712, "value" => $reactive41Quyibuzsuv1712),//reactive
            array("id" => 1713, "value" => $kpd41Quyibuzsuv1708),//КПД
            array("id" => 1714, "value" => 0),//HA
            array("id" => 1715, "value" => $water41Quyibuzsuv1708),//water

            array("id" => 1736, "value" => $power41Quyibuzsuv1736),//active
            array("id" => 1740, "value" => $reactive41Quyibuzsuv1740),//reactive
            array("id" => 1741, "value" => $kpd41Quyibuzsuv1736),//КПД
            array("id" => 1742, "value" => 0),//HA
            array("id" => 1743, "value" => $water41Quyibuzsuv1736),//water

            array("id" => 1, "value" => $power41Quyibuzsuv1708 + $power41Quyibuzsuv1736),
            array("id" => 2, "value" => $reactive41Quyibuzsuv1712 + $reactive41Quyibuzsuv1740),
            array("id" => 3, "value" => $set41Quyibuzsuv1823),
            array("id" => 4, "value" => $set41Quyibuzsuv1824),
            array("id" => 5, "value" => $set41Quyibuzsuv1795 + $set41Quyibuzsuv1768),
            array("id" => 6, "value" => $water41Quyibuzsuv1708 + $water41Quyibuzsuv1736),
            array("id" => 7, "value" => $ges41Quyibuzsuv1812[2] > 0 ? $ges41Quyibuzsuv1812[2] : ($ges41Quyibuzsuv1728[2] > 0 ? $ges41Quyibuzsuv1728[2] : $ges41Quyibuzsuv1756[2])),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    public function actionServer()
    {
        $energy = new Energy();
        $CONST = 1000000;
        $kvt = 1000;

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $water14 = Water::find()->where(['id_organization' => 41])->orderBy(['date' => SORT_DESC])->one();
        $upBef14 = $water14 ? $water14['up_bef'] : 0;
        $downBef14 = $water14 ? $water14['down_bef'] : 0;
        $pressure14 = $upBef14 - $downBef14;
        $ges14Quyibuzsuv66 = $this->getValue($data, "G66");
        $ges14Quyibuzsuv93 = $this->getValue($data, "G93");
        $ges14Quyibuzsuv147 = $this->getValue($data, "G147");
        $ges14Quyibuzsuv120 = $this->getValue($data, "G120");
        $ges14Quyibuzsuv174 = $this->getValue($data, "G174");
        $ges14Quyibuzsuv201 = $this->getValue($data, "G201");
        $ges14Quyibuzsuv228 = $this->getValue($data, "G228");
        $ges14Quyibuzsuv416 = $this->getValue($data, "G416");
        $ges14Quyibuzsuv255 = $this->getValue($data, "G255");
        $ges14Quyibuzsuv282 = $this->getValue($data, "G282");
        $ges14Quyibuzsuv12 = $this->getValue($data, "G12");
        $ges14Quyibuzsuv13 = $this->getValue($data, "G13");
        $ges14Quyibuzsuv39 = $this->getValue($data, "G39");
        $ges14Quyibuzsuv40 = $this->getValue($data, "G40");

        $set14Quyibuzsuv66 = $ges14Quyibuzsuv66[2] * 42000 / $CONST;
        $set14Quyibuzsuv93 = $ges14Quyibuzsuv93[2] * 42000 / $CONST;
        $set14Quyibuzsuv147 = $ges14Quyibuzsuv147[2] * 42000 / $CONST;
        $set14Quyibuzsuv120 = $ges14Quyibuzsuv120[2] * 42000 / $CONST;
        $set14Quyibuzsuv174 = $ges14Quyibuzsuv174[2] * 42000 / $CONST;
        $set14Quyibuzsuv201 = $ges14Quyibuzsuv201[2] * 7560 / $CONST;
        $set14Quyibuzsuv228 = $ges14Quyibuzsuv228[2] * 630 / $CONST;
        $set14Quyibuzsuv416 = $ges14Quyibuzsuv416[2] * 3780 / $CONST;

        $set14Quyibuzsuv255 = $ges14Quyibuzsuv255[2] * 630  / $kvt;
        $set14Quyibuzsuv282 = $ges14Quyibuzsuv282[2] * 630 / $kvt;
        $set14Quyibuzsuv310 = 0;//$ges14Quyibuzsuv310[2] * 20 / $kvt;
        $set14Quyibuzsuv350 = 0;//$ges14Quyibuzsuv350[2] * 20 / $kvt;

        $power14Quyibuzsuv12 = $ges14Quyibuzsuv12[2] * 12600 / $CONST;//active
        $reactive14Quyibuzsuv13 = $ges14Quyibuzsuv13[2] * 12600 / $CONST;//reactive
        $water14Quyibuzsuv12 = $energy->getWater($power14Quyibuzsuv12, $pressure14, 0.9615, 0.9);//water

        $power14Quyibuzsuv39 = $ges14Quyibuzsuv39[2] * 12600 / $CONST;//active
        $reactive14Quyibuzsuv40 = $ges14Quyibuzsuv40[2] * 12600 / $CONST;//reactive
        $water14Quyibuzsuv39 = $energy->getWater($power14Quyibuzsuv39, $pressure14, 0.9615, 0.9);//water

        $ges14QuyibuzsuvActive = $power14Quyibuzsuv12 + $power14Quyibuzsuv39;
        $ges14QuyibuzsuvReactive = $reactive14Quyibuzsuv13 + $reactive14Quyibuzsuv40;
        $ges14QuyibuzsuvActiveOut = (-1 * $set14Quyibuzsuv66 > 0 ? -1 * $set14Quyibuzsuv66 : 0) +
            (-1 * $set14Quyibuzsuv93 > 0 ? -1 * $set14Quyibuzsuv93 : 0) +
            (-1 * $set14Quyibuzsuv147 > 0 ? -1 * $set14Quyibuzsuv147 : 0) +
            (-1 * $set14Quyibuzsuv120 > 0 ? -1 * $set14Quyibuzsuv120 : 0) +
            (-1 * $set14Quyibuzsuv174 > 0 ? -1 * $set14Quyibuzsuv174 : 0) +
            $set14Quyibuzsuv201 +
            $set14Quyibuzsuv228 +
            $set14Quyibuzsuv416;
        $ges14QuyibuzsuvActiveIn = (-1 * $set14Quyibuzsuv66 < 0 ? -1 * $set14Quyibuzsuv66 : 0) +
            (-1 * $set14Quyibuzsuv93 < 0 ? -1 * $set14Quyibuzsuv93 : 0) +
            (-1 * $set14Quyibuzsuv147 < 0 ? -1 * $set14Quyibuzsuv147 : 0) +
            (-1 * $set14Quyibuzsuv120 < 0 ? -1 * $set14Quyibuzsuv120 : 0) +
            (-1 * $set14Quyibuzsuv174 < 0 ? -1 * $set14Quyibuzsuv174 : 0);
        $ges14QuyibuzsuvOwnNeeds = $set14Quyibuzsuv255 + $set14Quyibuzsuv282 + $set14Quyibuzsuv310 + $set14Quyibuzsuv350;
        $ges14QuyibuzsuvWater = $water14Quyibuzsuv12 + $water14Quyibuzsuv39;
        $ges14QuyibuzsuvAggregateTrue = ($ges14Quyibuzsuv12[2] > 0 ? 1 : 0) + ($ges14Quyibuzsuv39[2] > 0 ? 1 : 0);
        $ges14QuyibuzsuvAggregateError = 0;
        $ges14QuyibuzsuvAggregateFalse = ($ges14Quyibuzsuv12[2] <= 0 ? 1 : 0) + ($ges14Quyibuzsuv39[2] <= 0 ? 1 : 0) - $ges14QuyibuzsuvAggregateError;

        $water18 = Water::find()->where(['id_organization' => 42])->orderBy(['date' => SORT_DESC])->one();
        $upBef18 = $water18 ? $water18['up_bef'] : 0;
        $downBef18 = $water18 ? $water18['down_bef'] : 0;
        $pressure18 = $upBef18 - $downBef18;
        $ges18Quyibuzsuv589 = $this->getValue($data, "G589");
        $ges18Quyibuzsuv566 = $this->getValue($data, "G566");
        $ges18Quyibuzsuv612 = $this->getValue($data, "G612");
        $ges18Quyibuzsuv543 = $this->getValue($data, "G543");
        $ges18Quyibuzsuv658 = $this->getValue($data, "G658");
        $ges18Quyibuzsuv635 = $this->getValue($data, "G635");
        $ges18Quyibuzsuv513 = $this->getValue($data, "G513");
        $ges18Quyibuzsuv480 = $this->getValue($data, "G480");
        $ges18Quyibuzsuv481 = $this->getValue($data, "G481");
        $ges18Quyibuzsuv457 = $this->getValue($data, "G457");
        $ges18Quyibuzsuv458 = $this->getValue($data, "G458");
        $ges18Quyibuzsuv434 = $this->getValue($data, "G434");
        $ges18Quyibuzsuv435 = $this->getValue($data, "G435");
        $set18Quyibuzsuv543 = $ges18Quyibuzsuv543[2] * 4800 / $CONST;
        $set18Quyibuzsuv566 = $ges18Quyibuzsuv566[2] * 21000 / $CONST;
        $set18Quyibuzsuv589 = $ges18Quyibuzsuv589[2] * 21000 / $CONST;
        $set18Quyibuzsuv612 = $ges18Quyibuzsuv612[2] * 14000 / $CONST;
        $set18Quyibuzsuv635 = $ges18Quyibuzsuv635[2] * 1200 / $CONST;
        $set18Quyibuzsuv658 = $ges18Quyibuzsuv658[2] * 1200 / $CONST;
        $set18Quyibuzsuv513 = $ges18Quyibuzsuv513[2] * 60 / $kvt;
        $power18Quyibuzsuv480 = $ges18Quyibuzsuv480[2] * 4800 / $CONST;//active
        $reactive18Quyibuzsuv481 = $ges18Quyibuzsuv481[2] * 4800 / $CONST;//reactive
        $water18Quyibuzsuv480 = $energy->getWater($power18Quyibuzsuv480, $pressure18, 0.945, 0.8321);//water
        $power18Quyibuzsuv457 = $ges18Quyibuzsuv457[2] * 4800 / $CONST;//active
        $reactive18Quyibuzsuv458 = $ges18Quyibuzsuv458[2] * 4800 / $CONST;//reactive
        $water18Quyibuzsuv457 = $energy->getWater($power18Quyibuzsuv457, $pressure18, 0.945, 0.8321);//water
        $power18Quyibuzsuv434 = $ges18Quyibuzsuv434[2] * 4800 / $CONST;//active
        $reactive18Quyibuzsuv435 = $ges18Quyibuzsuv435[2] * 4800 / $CONST;//reactive
        $water18Quyibuzsuv434 = $energy->getWater($power18Quyibuzsuv434, $pressure18, 0.945, 0.8321);//water

        $ges18QuyibuzsuvActive = $power18Quyibuzsuv480 + $power18Quyibuzsuv457 + $power18Quyibuzsuv434;
        $ges18QuyibuzsuvReactive = $reactive18Quyibuzsuv481 + $reactive18Quyibuzsuv458 + $reactive18Quyibuzsuv435;
        $ges18QuyibuzsuvActiveOut = ($set18Quyibuzsuv589 > 0 ? $set18Quyibuzsuv589 : 0) +
            ($set18Quyibuzsuv566 > 0 ? $set18Quyibuzsuv566 : 0) +
            ($set18Quyibuzsuv612 > 0 ? $set18Quyibuzsuv612 : 0) +
            $set18Quyibuzsuv543 +
            $set18Quyibuzsuv658 +
            $set18Quyibuzsuv635;
        $ges18QuyibuzsuvActiveIn = ($set18Quyibuzsuv589 < 0 ? $set18Quyibuzsuv589 : 0) +
            ($set18Quyibuzsuv566 < 0 ? $set18Quyibuzsuv566 : 0) +
            ($set18Quyibuzsuv612 < 0 ? $set18Quyibuzsuv612 : 0);
        $ges18QuyibuzsuvOwnNeeds = $set18Quyibuzsuv513;
        $ges18QuyibuzsuvWater = $water18Quyibuzsuv480 + $water18Quyibuzsuv457 + $water18Quyibuzsuv434;
        $ges18QuyibuzsuvAggregateTrue = ($ges18Quyibuzsuv480[2] > 0 ? 1 : 0) + ($ges18Quyibuzsuv457[2] > 0 ? 1 : 0) + ($ges18Quyibuzsuv434[2] > 0 ? 1 : 0);
        $ges18QuyibuzsuvAggregateError = 0;
        $ges18QuyibuzsuvAggregateFalse = ($ges18Quyibuzsuv480[2] <= 0 ? 1 : 0) + ($ges18Quyibuzsuv457[2] <= 0 ? 1 : 0) + ($ges18Quyibuzsuv434[2] <= 0 ? 1 : 0) - $ges18QuyibuzsuvAggregateError;

        $water19 = Water::find()->where(['id_organization' => 43])->orderBy(['date' => SORT_DESC])->one();
        $upBef19 = $water19 ? $water19['up_bef'] : 0;
        $downBef19 = $water19 ? $water19['down_bef'] : 0;
        $pressure19 = $upBef19 - $downBef19;

        $ges19Quyibuzsuv859 = $this->getValue($data, "G859");
        $ges19Quyibuzsuv836 = $this->getValue($data, "G836");
        $ges19Quyibuzsuv916 = $this->getValue($data, "G916");
        $ges19Quyibuzsuv915 = $this->getValue($data, "G915");
        $ges19Quyibuzsuv882 = $this->getValue($data, "G882");
        $ges19Quyibuzsuv968 = $this->getValue($data, "G968");
        $ges19Quyibuzsuv945 = $this->getValue($data, "G945");
        $ges19Quyibuzsuv158 = $this->getValue($data, "B158");
        $ges19Quyibuzsuv157 = $this->getValue($data, "B157");
        $ges19Quyibuzsuv760 = $this->getValue($data, "G760");
        $ges19Quyibuzsuv813 = $this->getValue($data, "G813");
        $ges19Quyibuzsuv790 = $this->getValue($data, "G790");
        $ges19Quyibuzsuv1024 = $this->getValue($data, "G1024");
        $ges19Quyibuzsuv704 = $this->getValue($data, "G704");
        $ges19Quyibuzsuv705 = $this->getValue($data, "G705");
        $ges19Quyibuzsuv727 = $this->getValue($data, "G727");
        $ges19Quyibuzsuv728 = $this->getValue($data, "G728");

        $set19Quyibuzsuv836 = $ges19Quyibuzsuv836[2] * 132000 / $CONST;
        $set19Quyibuzsuv859 = $ges19Quyibuzsuv859[2] * 132000 / $CONST;
        $set19Quyibuzsuv882 = $ges19Quyibuzsuv882[2] * 132000 / $CONST;
        $set19Quyibuzsuv915 = $ges19Quyibuzsuv915[2] * 132000 / $CONST;
        $set19Quyibuzsuv916 = $ges19Quyibuzsuv916[2] * 132000 / $CONST;
        $set19Quyibuzsuv945 = $ges19Quyibuzsuv945[2] * 132000 / $CONST;
        $set19Quyibuzsuv968 = $ges19Quyibuzsuv968[2] * 132000 / $CONST;
        $set19Quyibuzsuv157 = $ges19Quyibuzsuv157[2] * 21 / $CONST;
        $set19Quyibuzsuv158 = $ges19Quyibuzsuv158[2] * 21 / $CONST;

        $set19Quyibuzsuv760 = $ges19Quyibuzsuv760[2] * 120 / $kvt;
        $set19Quyibuzsuv790 = $ges19Quyibuzsuv790[2] * 1200 / $kvt;
        $set19Quyibuzsuv813 = $ges19Quyibuzsuv813[2] * 1800 / $kvt;
        $set19Quyibuzsuv991 = 0;//$ges19Quyibuzsuv991[2] * 30 / $kvt;
        $set19Quyibuzsuv1024 = $ges19Quyibuzsuv1024[2] * 20 / $kvt;

        $power19Quyibuzsuv704 = $ges19Quyibuzsuv704[2] * 9600 / $CONST;//active
        $reactive19Quyibuzsuv705 = $ges19Quyibuzsuv705[2] * 9600 / $CONST;//reactive
        $water19Quyibuzsuv704 = $energy->getWater($power19Quyibuzsuv704, $pressure19, 0.95, 0.9614);//water

        $power19Quyibuzsuv727 = $ges19Quyibuzsuv727[2] * 9600 / $CONST;//active
        $reactive19Quyibuzsuv728 = $ges19Quyibuzsuv728[2] * 9600 / $CONST;//reactive
        $water19Quyibuzsuv727 = $energy->getWater($power19Quyibuzsuv727, $pressure19, 0.95, 0.9614);//water

        $ges19QuyibuzsuvActive = $power19Quyibuzsuv704 + $power19Quyibuzsuv727;
        $ges19QuyibuzsuvReactive = $reactive19Quyibuzsuv705 + $reactive19Quyibuzsuv728;
        $ges19QuyibuzsuvActiveOut = ($set19Quyibuzsuv836 > 0 ? $set19Quyibuzsuv836 : 0) +
            ($set19Quyibuzsuv859 > 0 ? $set19Quyibuzsuv859 : 0) +
            ($set19Quyibuzsuv882 > 0 ? $set19Quyibuzsuv882 : 0) +
            $set19Quyibuzsuv915 +
            ($set19Quyibuzsuv945 > 0 ? $set19Quyibuzsuv945 : 0) +
            ($set19Quyibuzsuv968 > 0 ? $set19Quyibuzsuv968 : 0) +
            ($set19Quyibuzsuv157 > 0 ? $set19Quyibuzsuv157 : 0) +
            ($set19Quyibuzsuv158 > 0 ? $set19Quyibuzsuv158 : 0);
        $ges19QuyibuzsuvActiveIn = ($set19Quyibuzsuv836 < 0 ? $set19Quyibuzsuv836 : 0) +
            ($set19Quyibuzsuv859 < 0 ? $set19Quyibuzsuv859 : 0) +
            ($set19Quyibuzsuv882 < 0 ? $set19Quyibuzsuv882 : 0) +
            $set19Quyibuzsuv916 +
            ($set19Quyibuzsuv945 < 0 ? $set19Quyibuzsuv945 : 0) +
            ($set19Quyibuzsuv968 < 0 ? $set19Quyibuzsuv968 : 0) +
            ($set19Quyibuzsuv157 < 0 ? $set19Quyibuzsuv157 : 0) +
            ($set19Quyibuzsuv158 < 0 ? $set19Quyibuzsuv158 : 0);
        $ges19QuyibuzsuvOwnNeeds = $set19Quyibuzsuv760 + $set19Quyibuzsuv790 + $set19Quyibuzsuv813 + $set19Quyibuzsuv991 + $set19Quyibuzsuv1024;
        $ges19QuyibuzsuvWater = $water19Quyibuzsuv704 + $water19Quyibuzsuv727;
        $ges19QuyibuzsuvAggregateTrue = ($ges19Quyibuzsuv704[2] > 0 ? 1 : 0) + ($ges19Quyibuzsuv727[2] > 0 ? 1 : 0);
        $ges19QuyibuzsuvAggregateError = 1;
        $ges19QuyibuzsuvAggregateFalse = ($ges19Quyibuzsuv704[2] <= 0 ? 1 : 0) + ($ges19Quyibuzsuv727[2] <= 0 ? 1 : 0) - $ges19QuyibuzsuvAggregateError;

        $water23 = Water::find()->where(['id_organization' => 44])->orderBy(['date' => SORT_DESC])->one();
        $upBef23 = $water23 ? $water23['up_bef'] : 0;
        $downBef23 = $water23 ? $water23['down_bef'] : 0;
        $pressure23 = $upBef23 - $downBef23;

        $ges23Quyibuzsuv1301 = $this->getValue($data, "G1301");
        $ges23Quyibuzsuv1302 = $this->getValue($data, "G1302");
        $ges23Quyibuzsuv1611 = $this->getValue($data, "G1611");
        $ges23Quyibuzsuv1634 = $this->getValue($data, "G1634");
        $ges23Quyibuzsuv1657 = $this->getValue($data, "G1657");
        $ges23Quyibuzsuv1542 = $this->getValue($data, "G1542");
        $ges23Quyibuzsuv1588 = $this->getValue($data, "G1588");
        $ges23Quyibuzsuv1566 = $this->getValue($data, "G1566");
        $ges23Quyibuzsuv1427 = $this->getValue($data, "G1427");
        $ges23Quyibuzsuv1473 = $this->getValue($data, "G1473");
        $ges23Quyibuzsuv1450 = $this->getValue($data, "G1450");
        $ges23Quyibuzsuv1324 = $this->getValue($data, "G1324");
        $ges23Quyibuzsuv1325 = $this->getValue($data, "G1325");
        $ges23Quyibuzsuv1357 = $this->getValue($data, "G1357");
        $ges23Quyibuzsuv1397 = $this->getValue($data, "G1397");

        $set23Quyibuzsuv1427 = $ges23Quyibuzsuv1427[2] * 600 / $CONST;
        $set23Quyibuzsuv1450 = $ges23Quyibuzsuv1450[2] * 1200 / $CONST;
        $set23Quyibuzsuv1473 = $ges23Quyibuzsuv1473[2] * 3600 / $CONST;
        $set23Quyibuzsuv1542 = $ges23Quyibuzsuv1542[2] * 14000 / $CONST;
        $set23Quyibuzsuv1566 = $ges23Quyibuzsuv1566[2] * 14000 / $CONST;
        $set23Quyibuzsuv1588 = $ges23Quyibuzsuv1588[2] * 21000 / $CONST;
        $set23Quyibuzsuv1611 = $ges23Quyibuzsuv1611[2] * 33000 / $CONST;
        $set23Quyibuzsuv1634 = $ges23Quyibuzsuv1634[2] * 132000 / $CONST;
        $set23Quyibuzsuv1657 = $ges23Quyibuzsuv1657[2] * 132000 / $CONST;

        $set23Quyibuzsuv1357 = $ges23Quyibuzsuv1357[2] * 60 / $kvt;
        $set23Quyibuzsuv1397 = $ges23Quyibuzsuv1397[2] * 60 / $kvt;
        $set23Quyibuzsuv1680 = 0;//$ges23Quyibuzsuv1680[2] * 20 / $kvt;

        $power23Quyibuzsuv1301 = $ges23Quyibuzsuv1301[2] * 18000 / $CONST;//active
        $reactive23Quyibuzsuv1302 = $ges23Quyibuzsuv1302[2] * 18000 / $CONST;//reactive
        $water23Quyibuzsuv1301 = $energy->getWater($power23Quyibuzsuv1301, $pressure23, 0.95, 0.8382);//water

        $power23Quyibuzsuv1324 = $ges23Quyibuzsuv1324[2] * 18000 / $CONST;//active
        $reactive23Quyibuzsuv1325 = $ges23Quyibuzsuv1325[2] * 18000 / $CONST;//reactive
        $water23Quyibuzsuv1324 = $energy->getWater($power23Quyibuzsuv1324, $pressure23, 0.95, 0.8382);//water

        $ges23QuyibuzsuvActive = $power23Quyibuzsuv1301 + $power23Quyibuzsuv1324;
        $ges23QuyibuzsuvReactive = $reactive23Quyibuzsuv1302 + $reactive23Quyibuzsuv1325;
        $ges23QuyibuzsuvActiveOut = ($set23Quyibuzsuv1611 > 0 ? $set23Quyibuzsuv1611 : 0) +
            ($set23Quyibuzsuv1634 > 0 ? $set23Quyibuzsuv1634 : 0) +
            ($set23Quyibuzsuv1657 > 0 ? $set23Quyibuzsuv1657 : 0) +
            ($set23Quyibuzsuv1542 > 0 ? $set23Quyibuzsuv1542 : 0) +
            ($set23Quyibuzsuv1588 > 0 ? $set23Quyibuzsuv1588 : 0) +
            ($set23Quyibuzsuv1566 > 0 ? $set23Quyibuzsuv1566 : 0) +
            $set23Quyibuzsuv1473 + $set23Quyibuzsuv1427 + $set23Quyibuzsuv1450;
        $ges23QuyibuzsuvActiveIn = ($set23Quyibuzsuv1611 < 0 ? $set23Quyibuzsuv1611 : 0) +
            ($set23Quyibuzsuv1634 < 0 ? $set23Quyibuzsuv1634 : 0) +
            ($set23Quyibuzsuv1657 < 0 ? $set23Quyibuzsuv1657 : 0) +
            ($set23Quyibuzsuv1542 < 0 ? $set23Quyibuzsuv1542 : 0) +
            ($set23Quyibuzsuv1588 < 0 ? $set23Quyibuzsuv1588 : 0) +
            ($set23Quyibuzsuv1566 < 0 ? $set23Quyibuzsuv1566 : 0);
        $ges23QuyibuzsuvOwnNeeds = $set23Quyibuzsuv1357 + $set23Quyibuzsuv1397 + $set23Quyibuzsuv1680;
        $ges23QuyibuzsuvWater = $water23Quyibuzsuv1301 + $water23Quyibuzsuv1324;
        $ges23QuyibuzsuvAggregateTrue = ($ges23Quyibuzsuv1301[2] > 0 ? 1 : 0) + ($ges23Quyibuzsuv1324[2] > 0 ? 1 : 0);
        $ges23QuyibuzsuvAggregateError = 0;
        $ges23QuyibuzsuvAggregateFalse = ($ges23Quyibuzsuv1301[2] <= 0 ? 1 : 0) + ($ges23Quyibuzsuv1324[2] <= 0 ? 1 : 0) - $ges23QuyibuzsuvAggregateError;

        $water22 = Water::find()->where(['id_organization' => 45])->orderBy(['date' => SORT_DESC])->one();
        $upBef22 = $water22 ? $water22['up_bef'] : 0;
        $downBef22 = $water22 ? $water22['down_bef'] : 0;
        $pressure22 = $upBef22 - $downBef22;

        $ges22Quyibuzsuv1278 = $this->getValue($data, "G1278");
        $ges22Quyibuzsuv1209 = $this->getValue($data, "G1209");
        $ges22Quyibuzsuv1094 = $this->getValue($data, "G1094");
        $ges22Quyibuzsuv1095 = $this->getValue($data, "G1095");
        $ges22Quyibuzsuv1117 = $this->getValue($data, "G1117");
        $ges22Quyibuzsuv1118 = $this->getValue($data, "G1118");
        $ges22Quyibuzsuv1163 = $this->getValue($data, "G1163");
        $ges22Quyibuzsuv1140 = $this->getValue($data, "G1140");
        $ges22Quyibuzsuv1232 = $this->getValue($data, "G1232");
        $ges22Quyibuzsuv1255 = $this->getValue($data, "G1255");
        $ges22Quyibuzsuv1186 = $this->getValue($data, "G1186");

        $set22Quyibuzsuv1186 = $ges22Quyibuzsuv1186[2] * 3600 / $CONST;
        $set22Quyibuzsuv1209 = $ges22Quyibuzsuv1209[2] * 60 / $CONST;
        $set22Quyibuzsuv1255 = $ges22Quyibuzsuv1255[2] * 480 / $CONST;
        $set22Quyibuzsuv1278 = $ges22Quyibuzsuv1278[2] * 1 / $CONST;

        $set22Quyibuzsuv1140 = $ges22Quyibuzsuv1140[2] * 14000 / $kvt;
        $set22Quyibuzsuv1163 = $ges22Quyibuzsuv1163[2] * 1 / $kvt;
        $set22Quyibuzsuv1232 = $ges22Quyibuzsuv1232[2] * 18000 / $kvt;

        $power22Quyibuzsuv1094 = $ges22Quyibuzsuv1094[2] * 3600 / $CONST;//active
        $reactive22Quyibuzsuv1095 = $ges22Quyibuzsuv1095[2] * 3600 / $CONST;//reactive
        $water22Quyibuzsuv1094 = $energy->getWater($power22Quyibuzsuv1094, $pressure22, 0.941, 0.8536);//water

        $power22Quyibuzsuv1117 = $ges22Quyibuzsuv1117[2] * 3600 / $CONST;//active
        $reactive22Quyibuzsuv1118 = $ges22Quyibuzsuv1118[2] * 3600 / $CONST;//reactive
        $water22Quyibuzsuv1117 = $energy->getWater($power22Quyibuzsuv1117, $pressure22, 0.941, 0.8536);//water

        $ges22QuyibuzsuvActive = $power22Quyibuzsuv1094 + $power22Quyibuzsuv1117;
        $ges22QuyibuzsuvReactive = $reactive22Quyibuzsuv1095 + $reactive22Quyibuzsuv1118;
        $ges22QuyibuzsuvActiveOut = ($set22Quyibuzsuv1278 > 0 ? $set22Quyibuzsuv1278 : 0) +
            ($set22Quyibuzsuv1209 > 0 ? $set22Quyibuzsuv1209 : 0) +
            $set22Quyibuzsuv1255 + $set22Quyibuzsuv1186;
        $ges22QuyibuzsuvActiveIn = ($set22Quyibuzsuv1278 < 0 ? $set22Quyibuzsuv1278 : 0) +
            ($set22Quyibuzsuv1209 < 0 ? $set22Quyibuzsuv1209 : 0);
        $ges22QuyibuzsuvOwnNeeds = $set22Quyibuzsuv1163 + $set22Quyibuzsuv1140 + $set22Quyibuzsuv1232;
        $ges22QuyibuzsuvWater = $water22Quyibuzsuv1094 + $water22Quyibuzsuv1117;
        $ges22QuyibuzsuvAggregateTrue = ($ges22Quyibuzsuv1094[2] > 0 ? 1 : 0) + ($ges22Quyibuzsuv1117[2] > 0 ? 1 : 0);
        $ges22QuyibuzsuvAggregateError = 0;
        $ges22QuyibuzsuvAggregateFalse = ($ges22Quyibuzsuv1094[2] <= 0 ? 1 : 0) + ($ges22Quyibuzsuv1117[2] <= 0 ? 1 : 0) - $ges22QuyibuzsuvAggregateError;

        $water = Water::find()->where(['id_organization' => 46])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges41Quyibuzsuv1823 = $this->getValue($data, "G1823");
        $ges41Quyibuzsuv1824 = $this->getValue($data, "G1824");
        $ges41Quyibuzsuv1708 = $this->getValue($data, "G1708");
        $ges41Quyibuzsuv1712 = $this->getValue($data, "G1712");
        $ges41Quyibuzsuv1736 = $this->getValue($data, "G1736");
        $ges41Quyibuzsuv1740 = $this->getValue($data, "G1740");
        $ges41Quyibuzsuv1795 = $this->getValue($data, "G1795");
        $ges41Quyibuzsuv1768 = $this->getValue($data, "G1768");

        $set41Quyibuzsuv1823 = $ges41Quyibuzsuv1823[2] * 21000 / $CONST;
        $set41Quyibuzsuv1824 = $ges41Quyibuzsuv1824[2] * 21000 / $CONST;

        $set41Quyibuzsuv1795 = $ges41Quyibuzsuv1795[2] * 100 / $CONST;
        $set41Quyibuzsuv1768 = $ges41Quyibuzsuv1768[2] * 100 / $CONST;

        $power41Quyibuzsuv1708 = $ges41Quyibuzsuv1708[2] * 10500 / $kvt;//active
        $reactive41Quyibuzsuv1712 = $ges41Quyibuzsuv1712[2] * 10500 / $kvt;//reactive
        $water41Quyibuzsuv1708 = $energy->getWater($power41Quyibuzsuv1708, $pressure, 0.956, 0.9276);//water

        $power41Quyibuzsuv1736 = $ges41Quyibuzsuv1736[2] * 10500 / $kvt;//active
        $reactive41Quyibuzsuv1740 = $ges41Quyibuzsuv1740[2] * 10500 / $kvt;//reactive
        $water41Quyibuzsuv1736 = $energy->getWater($power41Quyibuzsuv1736, $pressure, 0.956, 0.9276);//water

        $ges41QuyibuzsuvActive = $power41Quyibuzsuv1708 + $power41Quyibuzsuv1736;
        $ges41QuyibuzsuvReactive = $reactive41Quyibuzsuv1712 + $reactive41Quyibuzsuv1740;
        $ges41QuyibuzsuvActiveOut = $set41Quyibuzsuv1823;
        $ges41QuyibuzsuvActiveIn = $set41Quyibuzsuv1824;
        $ges41QuyibuzsuvOwnNeeds = $set41Quyibuzsuv1795 + $set41Quyibuzsuv1768;
        $ges41QuyibuzsuvWater = $water41Quyibuzsuv1708 + $water41Quyibuzsuv1736;
        $ges41QuyibuzsuvAggregateTrue = ($ges41Quyibuzsuv1708[2] > 0 ? 1 : 0) + ($ges41Quyibuzsuv1736[2] > 0 ? 1 : 0);
        $ges41QuyibuzsuvAggregateError = 0;
        $ges41QuyibuzsuvAggregateFalse = ($ges41Quyibuzsuv1708[2] <= 0 ? 1 : 0) + ($ges41Quyibuzsuv1736[2] <= 0 ? 1 : 0) - $ges41QuyibuzsuvAggregateError;

        $active = $ges14QuyibuzsuvActive + $ges18QuyibuzsuvActive + $ges19QuyibuzsuvActive + $ges23QuyibuzsuvActive + $ges22QuyibuzsuvActive  + $ges41QuyibuzsuvActive;
        $reactive = $ges14QuyibuzsuvReactive + $ges18QuyibuzsuvReactive + $ges19QuyibuzsuvReactive + $ges23QuyibuzsuvReactive + $ges22QuyibuzsuvReactive  + $ges41QuyibuzsuvReactive;
        $activeOut = $ges14QuyibuzsuvActiveOut + $ges18QuyibuzsuvActiveOut + $ges19QuyibuzsuvActiveOut + $ges23QuyibuzsuvActiveOut + $ges22QuyibuzsuvActiveOut  + $ges41QuyibuzsuvActiveOut;
        $activeIn = $ges14QuyibuzsuvActiveIn + $ges18QuyibuzsuvActiveIn + $ges19QuyibuzsuvActiveIn + $ges23QuyibuzsuvActiveIn + $ges22QuyibuzsuvActiveIn  + $ges41QuyibuzsuvActiveIn;
        $ownNeeds = $ges14QuyibuzsuvOwnNeeds + $ges18QuyibuzsuvOwnNeeds + $ges19QuyibuzsuvOwnNeeds + $ges23QuyibuzsuvOwnNeeds + $ges22QuyibuzsuvOwnNeeds  + $ges41QuyibuzsuvOwnNeeds;
        $water = $ges14QuyibuzsuvWater + $ges18QuyibuzsuvWater + $ges19QuyibuzsuvWater + $ges23QuyibuzsuvWater + $ges22QuyibuzsuvWater  + $ges41QuyibuzsuvWater;
        $true = $ges14QuyibuzsuvAggregateTrue + $ges18QuyibuzsuvAggregateTrue + $ges19QuyibuzsuvAggregateTrue + $ges23QuyibuzsuvAggregateTrue + $ges22QuyibuzsuvAggregateTrue  + $ges41QuyibuzsuvAggregateTrue;
        $error = $ges14QuyibuzsuvAggregateError + $ges18QuyibuzsuvAggregateError + $ges19QuyibuzsuvAggregateError + $ges23QuyibuzsuvAggregateError + $ges22QuyibuzsuvAggregateError  + $ges41QuyibuzsuvAggregateError;
        $false = $ges14QuyibuzsuvAggregateFalse + $ges18QuyibuzsuvAggregateFalse + $ges19QuyibuzsuvAggregateFalse + $ges23QuyibuzsuvAggregateFalse + $ges22QuyibuzsuvAggregateFalse  + $ges41QuyibuzsuvAggregateFalse;

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

            array("id" => 10, "value" => $ges14QuyibuzsuvActive),
            array("id" => 11, "value" => $ges14QuyibuzsuvAggregateTrue),
            array("id" => 12, "value" => $ges14QuyibuzsuvAggregateFalse),
            array("id" => 13, "value" => $ges14QuyibuzsuvAggregateError),

            array("id" => 14, "value" => $ges18QuyibuzsuvActive),
            array("id" => 15, "value" => $ges18QuyibuzsuvAggregateTrue),
            array("id" => 16, "value" => $ges18QuyibuzsuvAggregateFalse),
            array("id" => 17, "value" => $ges18QuyibuzsuvAggregateError),

            array("id" => 18, "value" => $ges19QuyibuzsuvActive),
            array("id" => 19, "value" => $ges19QuyibuzsuvAggregateTrue),
            array("id" => 20, "value" => $ges19QuyibuzsuvAggregateFalse),
            array("id" => 21, "value" => $ges19QuyibuzsuvAggregateError),

            array("id" => 22, "value" => $ges23QuyibuzsuvActive),
            array("id" => 23, "value" => $ges23QuyibuzsuvAggregateTrue),
            array("id" => 24, "value" => $ges23QuyibuzsuvAggregateFalse),
            array("id" => 25, "value" => $ges23QuyibuzsuvAggregateError),

            array("id" => 26, "value" => $ges22QuyibuzsuvActive),
            array("id" => 27, "value" => $ges22QuyibuzsuvAggregateTrue),
            array("id" => 28, "value" => $ges22QuyibuzsuvAggregateFalse),
            array("id" => 29, "value" => $ges22QuyibuzsuvAggregateError),

            array("id" => 30, "value" => $ges41QuyibuzsuvActive),
            array("id" => 31, "value" => $ges41QuyibuzsuvAggregateTrue),
            array("id" => 32, "value" => $ges41QuyibuzsuvAggregateFalse),
            array("id" => 33, "value" => $ges41QuyibuzsuvAggregateError),
        );

        echo json_encode($data);
    }
}
