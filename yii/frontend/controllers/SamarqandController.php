<?php

namespace frontend\controllers;

use common\models\Water;
use Yii;

class SamarqandController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes2b()
    {
        return $this->render('ges2b');
    }

    public function actionGes1b()
    {
        return $this->render('ges1b');
    }

    public function actionGes3b()
    {
        return $this->render('ges3b');
    }

    public function actionGes5b()
    {
        return $this->render('ges5b');
    }

    public function actionShaudar1()
    {
        return $this->render('shaudar1');
    }

    public function actionShaudar2()
    {
        return $this->render('shaudar2');
    }

    public function actionUrgut()
    {
        return $this->render('urgut');
    }

    protected string $url = "http://user:usrG2b_h@192.168.40.215:10122/crq?req=current";

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

    //Самарқанд ГЭС-2Б (Хишрав)
    public function actionServer2b()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 29])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges2bSamarqand254 = $this->getValue($data, "G254");
        $ges2bSamarqand253 = $this->getValue($data, "G253");
        $ges2bSamarqand614 = $this->getValue($data, "G614");
        $ges2bSamarqand613 = $this->getValue($data, "G613");
        $ges2bSamarqand29 = $this->getValue($data, "G29");
        $ges2bSamarqand28 = $this->getValue($data, "G28");
        $ges2bSamarqand94 = $this->getValue($data, "G94");
        $ges2bSamarqand93 = $this->getValue($data, "G93");
        $ges2bSamarqand14 = $this->getValue($data, "G14");
        $ges2bSamarqand13 = $this->getValue($data, "G13");
        $ges2bSamarqand322 = $this->getValue($data, "G322");
        $ges2bSamarqand522 = $this->getValue($data, "G522");
        $ges2bSamarqand333 = $this->getValue($data, "G333");
        $ges2bSamarqand334 = $this->getValue($data, "G334");
        $ges2bSamarqand533 = $this->getValue($data, "G533");
        $ges2bSamarqand534 = $this->getValue($data, "G534");
        $ges2bSamarqand373 = $this->getValue($data, "G373");
        $ges2bSamarqand453 = $this->getValue($data, "G453");
        $ges2bSamarqand77 = $this->getValue($data, "B77");
        $ges2bSamarqand293 = $this->getValue($data, "G293");
        $ges2bSamarqand295 = $this->getValue($data, "G295");
        $ges2bSamarqand493 = $this->getValue($data, "G493");
        $ges2bSamarqand495 = $this->getValue($data, "G495");
        $ges2bSamarqand413 = $this->getValue($data, "G413");
        $ges2bSamarqand415 = $this->getValue($data, "G415");
        $ges2bSamarqand323 = $this->getValue($data, "G323");
        $ges2bSamarqand523 = $this->getValue($data, "G523");
        $ges2bSamarqand283 = $this->getValue($data, "G283");
        $ges2bSamarqand403 = $this->getValue($data, "G403");
        $ges2bSamarqand483 = $this->getValue($data, "G483");

        $set2bSamarqand14 = $ges2bSamarqand14[2] * 42000 / $CONST;
        $set2bSamarqand29 = $ges2bSamarqand29[2] * 42000 / $CONST;
        $set2bSamarqand94 = $ges2bSamarqand94[2] * 42000 / $CONST;
        $set2bSamarqand254 = $ges2bSamarqand254[2] * 42000 / $CONST;
        $set2bSamarqand614 = $ges2bSamarqand614[2] * 42000 / $CONST;

        $set2bSamarqand13 = $ges2bSamarqand13[2] * 42000 / $CONST;
        $set2bSamarqand28 = $ges2bSamarqand28[2] * 42000 / $CONST;
        $set2bSamarqand93 = $ges2bSamarqand93[2] * 42000 / $CONST;
        $set2bSamarqand253 = $ges2bSamarqand253[2] * 42000 / $CONST;
        $set2bSamarqand613 = $ges2bSamarqand613[2] * 42000 / $CONST;

        $set2bSamarqand373 = $ges2bSamarqand373[2] * 42000 / $CONST;
        $set2bSamarqand453 = $ges2bSamarqand453[2] * 42000 / $CONST;
        $set2bSamarqand77 = $ges2bSamarqand77[2] * 42000 / $CONST;

        $power2bSamarqand293 = $ges2bSamarqand293[2] * 40000 / $CONST;//active
        $reactive2bSamarqand295 = $ges2bSamarqand295[2] * 40000 / $CONST;//reactive
        $water2bSamarqand293 = $energy->getWater($power2bSamarqand293, $pressure, 0.92, 0.97);//water
        $kpd2bSamarqand293 = $energy->getKpd($power2bSamarqand293, $water2bSamarqand293, $pressure, 0.965);//kpd

        $power2bSamarqand493 = $ges2bSamarqand493[2] * 40000 / $CONST;//active
        $reactive2bSamarqand495 = $ges2bSamarqand495[2] * 40000 / $CONST;//reactive
        $water2bSamarqand493 = $energy->getWater($power2bSamarqand493, $pressure, 0.92, 0.97);//water
        $kpd2bSamarqand493 = $energy->getKpd($power2bSamarqand493, $water2bSamarqand493, $pressure, 0.965);//kpd

        $power2bSamarqand413 = $ges2bSamarqand413[2] * 40000 / $CONST;//active
        $reactive2bSamarqand415 = $ges2bSamarqand415[2] * 40000 / $CONST;//reactive
        $water2bSamarqand413 = $energy->getWater($power2bSamarqand413, $pressure, 0.92, 0.97);//water
        $kpd2bSamarqand413 = $energy->getKpd($power2bSamarqand413, $water2bSamarqand413, $pressure, 0.965);//kpd

        $data = array(
            array("id" => 14, "value" => $set2bSamarqand14),
            array("id" => 29, "value" => $set2bSamarqand29),
            array("id" => 94, "value" => $set2bSamarqand94),
            array("id" => 254, "value" => $set2bSamarqand254),
            array("id" => 614, "value" => $set2bSamarqand614),
            array("id" => 13, "value" => $set2bSamarqand13),
            array("id" => 28, "value" => $set2bSamarqand28),
            array("id" => 93, "value" => $set2bSamarqand93),
            array("id" => 253, "value" => $set2bSamarqand253),
            array("id" => 613, "value" => $set2bSamarqand613),

            array("id" => 373, "value" => $set2bSamarqand373),
            array("id" => 453, "value" => $set2bSamarqand453),
            array("id" => 77, "value" => $set2bSamarqand77),

            array("id" => 323, "value" => $ges2bSamarqand323[2] > 0 ? $energy->getVoltages($ges2bSamarqand323[2], 1) : $energy->getVoltages($ges2bSamarqand523[2], 1)),
            array("id" => 283, "value" => $ges2bSamarqand283[2] > 0 ? $energy->getVoltages($ges2bSamarqand283[2], 1) :
                ($ges2bSamarqand403[2] > 0 ? $energy->getVoltages($ges2bSamarqand403[2], 1) : $energy->getVoltages($ges2bSamarqand483[2], 1))),

            array("id" => 333, "value" => $ges2bSamarqand333[2] * 42000 / $CONST),
            array("id" => 334, "value" => $ges2bSamarqand334[2] * 42000 / $CONST),
            array("id" => 533, "value" => $ges2bSamarqand533[2] * 42000 / $CONST),
            array("id" => 534, "value" => $ges2bSamarqand534[2] * 42000 / $CONST),

            array("id" => 293, "value" => $power2bSamarqand293),//active
            array("id" => 295, "value" => $reactive2bSamarqand295),//reactive
            array("id" => 296, "value" => $kpd2bSamarqand293),//КПД
            array("id" => 297, "value" => 0),//HA
            array("id" => 298, "value" => $water2bSamarqand293),//water

            array("id" => 493, "value" => $power2bSamarqand493),//active
            array("id" => 495, "value" => $reactive2bSamarqand495),//reactive
            array("id" => 496, "value" => $kpd2bSamarqand493),//КПД
            array("id" => 497, "value" => 0),//HA
            array("id" => 498, "value" => $water2bSamarqand493),//water

            array("id" => 413, "value" => $power2bSamarqand413),//active
            array("id" => 415, "value" => $reactive2bSamarqand415),//reactive
            array("id" => 416, "value" => $kpd2bSamarqand413),//КПД
            array("id" => 417, "value" => 0),//HA
            array("id" => 418, "value" => $water2bSamarqand413),//water

            array("id" => 1, "value" => $power2bSamarqand293 + $power2bSamarqand493 + $power2bSamarqand413),
            array("id" => 2, "value" => $reactive2bSamarqand295 + $reactive2bSamarqand495 + $reactive2bSamarqand415),
            array("id" => 3, "value" =>
                    $set2bSamarqand13 +
                    $set2bSamarqand28 +
                    $set2bSamarqand93 +
                    $set2bSamarqand253 +
                    $set2bSamarqand613),
            array("id" => 4, "value" =>
                    $set2bSamarqand14 +
                    $set2bSamarqand29 +
                    $set2bSamarqand94 +
                    $set2bSamarqand254 +
                    $set2bSamarqand614),
            array("id" => 5, "value" => $set2bSamarqand373 + $set2bSamarqand453 + $set2bSamarqand77),
            array("id" => 6, "value" => $water2bSamarqand293 + $water2bSamarqand493 + $water2bSamarqand413),
            array("id" => 7, "value" => $ges2bSamarqand322[2] > 0 ? $ges2bSamarqand322[2] : $ges2bSamarqand522[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //Шаудар-2 (ПК-135)
    public function actionServerShaudar2()
    {
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $get1470 = $this->getValue($data, "G1470");
        $get1471 = $this->getValue($data, "G1471");
        $get1424 = $this->getValue($data, "G1424");
        $get1426 = $this->getValue($data, "G1426");
        $get1447 = $this->getValue($data, "G1447");
        $get1449 = $this->getValue($data, "G1449");

        $CONST = 1000000;
        $kvt = 1000;

        $data = array(
            array("id" => 1470, "value" => $get1470[2] * 1000 / $CONST),
            array("id" => 1471, "value" => $get1471[2] * 1000 / $CONST),
            array("id" => 1472, "value" => $get1470[2] * 1000 / $CONST),
            array("id" => 1424, "value" => $get1424[2] * 10500 / $CONST),
            array("id" => 1426, "value" => $get1426[2] * 10500 / $CONST),
            array("id" => 1425, "value" => $get1424[2] * 10500 / $CONST / 0.96 / 0.96 / 10.6 / 9.81 * $kvt),
            array("id" => 1447, "value" => $get1447[2] * 10500 / $CONST),
            array("id" => 1449, "value" => $get1449[2] * 10500 / $CONST),
            array("id" => 1448, "value" => $get1447[2] * 10500 / $CONST / 0.96 / 0.96 / 10.6 / 9.81 * $kvt),

            array("id" => 1, "value" => ($get1424[2] * 10500 / $CONST) + ($get1447[2] * 10500 / $CONST)),
            array("id" => 2, "value" => ($get1426[2] * 10500 / $CONST) + ($get1449[2] * 10500 / $CONST)),
            array("id" => 3, "value" => 0),
            array("id" => 4, "value" => 0),
            array("id" => 5, "value" => 0),
            array("id" => 6, "value" => ($get1424[2] * 10500 / $CONST / 0.96 / 0.96 / 10.6 / 9.81 * $kvt) + ($get1447[2] * 10500 / $CONST / 0.96 / 0.96 / 10.6 / 9.81 * $kvt)),
        );

        echo json_encode($data);
    }

    //Шаудар ГЭС-1
    public function actionServerShaudar1()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 58])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $gesShaudar1Samarqand273 = $this->getValue($data, "B273");
        $gesShaudar1Samarqand274 = $this->getValue($data, "B274");
        $gesShaudar1Samarqand1401 = $this->getValue($data, "G1401");
        $gesShaudar1Samarqand1355 = $this->getValue($data, "G1355");
        $gesShaudar1Samarqand1357 = $this->getValue($data, "G1357");
        $gesShaudar1Samarqand1378 = $this->getValue($data, "G1378");
        $gesShaudar1Samarqand1380 = $this->getValue($data, "G1380");
        $gesShaudar1Samarqand1348 = $this->getValue($data, "G1348");
        $gesShaudar1Samarqand1371 = $this->getValue($data, "G1371");
        $gesShaudar1Samarqand1394 = $this->getValue($data, "G1394");

        $powerShaudar1Samarqand1355 = $gesShaudar1Samarqand1355[2] * 15750 / $CONST;//active
        $reactiveShaudar1Samarqand1357 = $gesShaudar1Samarqand1357[2] * 15750 / $CONST;//reactive
        $waterShaudar1Samarqand1355 = $energy->getWater($powerShaudar1Samarqand1355, $pressure, 0.96, 0.96);//water
        $kpdShaudar1Samarqand1355 = $energy->getKpd($powerShaudar1Samarqand1355, $waterShaudar1Samarqand1355, $pressure, 0.956);//kpd

        $powerShaudar1Samarqand1378 = $gesShaudar1Samarqand1378[2] * 15750 / $CONST;//active
        $reactiveShaudar1Samarqand1380 = $gesShaudar1Samarqand1380[2] * 15750 / $CONST;//reactive
        $waterShaudar1Samarqand1378 = $energy->getWater($powerShaudar1Samarqand1378, $pressure, 0.96, 0.96);//water
        $kpdShaudar1Samarqand1378 = $energy->getKpd($powerShaudar1Samarqand1378, $waterShaudar1Samarqand1378, $pressure, 0.956);//kpd

        $setShaudar1Samarqand1401 = $gesShaudar1Samarqand1401[2] * 800 / $kvt;

        $setShaudar1Samarqand273 = $gesShaudar1Samarqand273[2] * 330000 / $CONST;
        $setShaudar1Samarqand274 = $gesShaudar1Samarqand274[2] * 330000 / $CONST;

        $data = array(
            array("id" => 273, "value" => $setShaudar1Samarqand273),
            array("id" => 274, "value" => $setShaudar1Samarqand274),
            array("id" => 1401, "value" => $setShaudar1Samarqand1401),

            array("id" => 1355, "value" => $powerShaudar1Samarqand1355),//active
            array("id" => 1357, "value" => $reactiveShaudar1Samarqand1357),//reactive
            array("id" => 1358, "value" => $kpdShaudar1Samarqand1355),//КПД
            array("id" => 1359, "value" => 0),//HA
            array("id" => 1360, "value" => $waterShaudar1Samarqand1355),//water

            array("id" => 1378, "value" => $powerShaudar1Samarqand1378),//active
            array("id" => 1380, "value" => $reactiveShaudar1Samarqand1380),//reactive
            array("id" => 1381, "value" => $kpdShaudar1Samarqand1378),//КПД
            array("id" => 1382, "value" => 0),//HA
            array("id" => 1383, "value" => $waterShaudar1Samarqand1378),//water

            array("id" => 1, "value" => $powerShaudar1Samarqand1355 + $powerShaudar1Samarqand1378),
            array("id" => 2, "value" => $reactiveShaudar1Samarqand1357 + $reactiveShaudar1Samarqand1380),
            array("id" => 3, "value" => $setShaudar1Samarqand273),
            array("id" => 4, "value" => $setShaudar1Samarqand274),
            array("id" => 5, "value" => $setShaudar1Samarqand1401),
            array("id" => 6, "value" => $waterShaudar1Samarqand1355 + $waterShaudar1Samarqand1378),
            array("id" => 7, "value" => $gesShaudar1Samarqand1348[2] > 0 ? $gesShaudar1Samarqand1348[2] :
                ($gesShaudar1Samarqand1371[2] > 0 ? $gesShaudar1Samarqand1371[2] : $gesShaudar1Samarqand1394[2])),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
            );

        echo json_encode($data);
    }

    //Талигулян-1 (ГЭС-1Б)
    public function actionServer1b()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 29])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges1bSamarqand863 = $this->getValue($data, "G863");
        $ges1bSamarqand864 = $this->getValue($data, "G864");
        $ges1bSamarqand101 = $this->getValue($data, "B101");
        $ges1bSamarqand102 = $this->getValue($data, "B102");
        $ges1bSamarqand105 = $this->getValue($data, "B105");
        $ges1bSamarqand106 = $this->getValue($data, "B106");
        $ges1bSamarqand109 = $this->getValue($data, "B109");
        $ges1bSamarqand110 = $this->getValue($data, "B110");
        $ges1bSamarqand113 = $this->getValue($data, "B113");
        $ges1bSamarqand114 = $this->getValue($data, "B114");
        $ges1bSamarqand743 = $this->getValue($data, "G743");
        $ges1bSamarqand779 = $this->getValue($data, "G779");
        $ges1bSamarqand780 = $this->getValue($data, "G780");
        $ges1bSamarqand125 = $this->getValue($data, "B125");
        $ges1bSamarqand713 = $this->getValue($data, "G713");
        $ges1bSamarqand714 = $this->getValue($data, "G714");
        $ges1bSamarqand728 = $this->getValue($data, "G728");
        $ges1bSamarqand729 = $this->getValue($data, "G729");
        $ges1bSamarqand817 = $this->getValue($data, "G817");
        $ges1bSamarqand819 = $this->getValue($data, "G819");
        $ges1bSamarqand840 = $this->getValue($data, "G840");
        $ges1bSamarqand842 = $this->getValue($data, "G842");
        $ges1bSamarqand742 = $this->getValue($data, "G742");
        $ges1bSamarqand772 = $this->getValue($data, "G772");
        $ges1bSamarqand758 = $this->getValue($data, "G758");
        $ges1bSamarqand751 = $this->getValue($data, "G751");
        $ges1bSamarqand773 = $this->getValue($data, "G773");

        $power1bSamarqand713 = $ges1bSamarqand713[2] * 2400 / $CONST;//active
        $reactive1bSamarqand714 = $ges1bSamarqand714[2] * 2400 / $CONST;//reactive
        $water1bSamarqand713 = $energy->getWater($power1bSamarqand713, $pressure, 0.8, 0.94);//water
        $kpd1bSamarqand713 = $energy->getKpd($power1bSamarqand713, $water1bSamarqand713, $pressure, 0.95);//kpd

        $power1bSamarqand728 = $ges1bSamarqand728[2] * 2400 / $CONST;//active
        $reactive1bSamarqand729 = $ges1bSamarqand729[2] * 2400 / $CONST;//reactive
        $water1bSamarqand728 = $energy->getWater($power1bSamarqand728, $pressure, 0.8, 0.94);//water
        $kpd1bSamarqand728 = $energy->getKpd($power1bSamarqand728, $water1bSamarqand728, $pressure, 0.95);//kpd

        $power1bSamarqand817 = $ges1bSamarqand817[2] * 120 / $CONST;//active
        $reactive1bSamarqand819 = $ges1bSamarqand819[2] * 120 / $CONST;//reactive
        $water1bSamarqand817 = $energy->getWater($power1bSamarqand817, $pressure, 0.87, 0.92);//water
        $kpd1bSamarqand817 = $energy->getKpd($power1bSamarqand817, $water1bSamarqand817, $pressure, 0.932);//kpd

        $power1bSamarqand840 = $ges1bSamarqand840[2] * 120 / $CONST;//active
        $reactive1bSamarqand842 = $ges1bSamarqand842[2] * 120 / $CONST;//reactive
        $water1bSamarqand840 = $energy->getWater($power1bSamarqand840, $pressure, 0.87, 0.92);//water
        $kpd1bSamarqand840 = $energy->getKpd($power1bSamarqand840, $water1bSamarqand840, $pressure, 0.932);//kpd

        $set1bSamarqand758 = $ges1bSamarqand758[2] * 600 / $kvt;
        $set1bSamarqand125 = $ges1bSamarqand125[2] * 40 / $kvt;

        $set1bSamarqand101 = $ges1bSamarqand101[2] * 1800 / $CONST;
        $set1bSamarqand102 = $ges1bSamarqand102[2] * 1800 / $CONST;
        $set1bSamarqand105 = $ges1bSamarqand105[2] * 4800 / $CONST;
        $set1bSamarqand106 = $ges1bSamarqand106[2] * 4800 / $CONST;
        $set1bSamarqand109 = $ges1bSamarqand109[2] * 3600 / $CONST;
        $set1bSamarqand110 = $ges1bSamarqand110[2] * 3600 / $CONST;
        $set1bSamarqand113 = $ges1bSamarqand113[2] * 4800 / $CONST;
        $set1bSamarqand114 = $ges1bSamarqand114[2] * 4800 / $CONST;
        $set1bSamarqand743 = $ges1bSamarqand743[2] * 14000 / $CONST;
        $set1bSamarqand779 = $ges1bSamarqand779[2] * 7200 / $CONST;
        $set1bSamarqand780 = $ges1bSamarqand780[2] * 7200 / $CONST;
        $data = array(
            array("id" => 863, "value" => $ges1bSamarqand863[2] * 20 / $CONST),
            array("id" => 864, "value" => $ges1bSamarqand864[2] * 20 / $CONST),

            array("id" => 713, "value" => $power1bSamarqand713),//active
            array("id" => 714, "value" => $reactive1bSamarqand714),//reactive
            array("id" => 715, "value" => $kpd1bSamarqand713),//КПД
            array("id" => 716, "value" => 0),//HA
            array("id" => 717, "value" => $water1bSamarqand713),//water

            array("id" => 728, "value" => $power1bSamarqand728),//active
            array("id" => 729, "value" => $reactive1bSamarqand729),//reactive
            array("id" => 730, "value" => $kpd1bSamarqand728),//КПД
            array("id" => 731, "value" => 0),//HA
            array("id" => 732, "value" => $water1bSamarqand728),//water

            array("id" => 817, "value" => $power1bSamarqand817),//active
            array("id" => 819, "value" => $reactive1bSamarqand819),//reactive
            array("id" => 820, "value" => $kpd1bSamarqand817),//КПД
            array("id" => 821, "value" => 0),//HA
            array("id" => 822, "value" => $water1bSamarqand817),//water

            array("id" => 840, "value" => $power1bSamarqand840),//active
            array("id" => 842, "value" => $reactive1bSamarqand842),//reactive
            array("id" => 843, "value" => $kpd1bSamarqand840),//КПД
            array("id" => 844, "value" => 0),//HA
            array("id" => 845, "value" => $water1bSamarqand840),//water

            array("id" => 101, "value" => $set1bSamarqand101),
            array("id" => 102, "value" => $set1bSamarqand102),
            array("id" => 105, "value" => $set1bSamarqand105),
            array("id" => 106, "value" => $set1bSamarqand106),
            array("id" => 109, "value" => $set1bSamarqand109),
            array("id" => 110, "value" => $set1bSamarqand110),
            array("id" => 113, "value" => $set1bSamarqand113),
            array("id" => 114, "value" => $set1bSamarqand114),
            array("id" => 743, "value" => $set1bSamarqand743),
            array("id" => 779, "value" => $set1bSamarqand779),
            array("id" => 780, "value" => $set1bSamarqand780),

            array("id" => 773, "value" => $ges1bSamarqand773[2] > 0 ? $energy->getVoltages($ges1bSamarqand773[2], 52.2) : $energy->getVoltages($ges1bSamarqand751[2], 350)),

            array("id" => 758, "value" => $set1bSamarqand758),
            array("id" => 125, "value" => $set1bSamarqand125),

            array("id" => 1, "value" => $power1bSamarqand713 + $power1bSamarqand728 + $power1bSamarqand817 + $power1bSamarqand840),
            array("id" => 2, "value" => $reactive1bSamarqand714 + $reactive1bSamarqand729 + $reactive1bSamarqand819 + $reactive1bSamarqand842),
            array("id" => 3, "value" => $set1bSamarqand101 + $set1bSamarqand105 + $set1bSamarqand109 + $set1bSamarqand113 + ($set1bSamarqand743 > 0 ? $set1bSamarqand743 : 0) + $set1bSamarqand779),
            array("id" => 4, "value" => $set1bSamarqand102 + $set1bSamarqand106 + $set1bSamarqand110 + $set1bSamarqand114 + ($set1bSamarqand743 < 0 ? $set1bSamarqand743 : 0) + $set1bSamarqand780),
            array("id" => 5, "value" => $set1bSamarqand758 + $set1bSamarqand125),
            array("id" => 6, "value" => $water1bSamarqand713 + $water1bSamarqand728 + $water1bSamarqand817 + $water1bSamarqand840),
            array("id" => 7, "value" => $ges1bSamarqand742[2] > 0 ? $ges1bSamarqand742[2] : $ges1bSamarqand772[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //Иртишар ГЭС(ГЭС-3Б)
    public function actionServer3b()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 50])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges3bSamarqand925 = $this->getValue($data, "G925");
        $ges3bSamarqand910 = $this->getValue($data, "G910");
        $ges3bSamarqand985 = $this->getValue($data, "G985");
        $ges3bSamarqand970 = $this->getValue($data, "G970");
        $ges3bSamarqand940 = $this->getValue($data, "G940");
        $ges3bSamarqand955 = $this->getValue($data, "G955");
        $ges3bSamarqand880 = $this->getValue($data, "G880");
        $ges3bSamarqand881 = $this->getValue($data, "G881");
        $ges3bSamarqand895 = $this->getValue($data, "G895");
        $ges3bSamarqand896 = $this->getValue($data, "G896");
        $ges3bSamarqand1029 = $this->getValue($data, "G1029");
        $ges3bSamarqand1031 = $this->getValue($data, "G1031");
        $ges3bSamarqand894 = $this->getValue($data, "G894");
        $ges3bSamarqand924 = $this->getValue($data, "G924");
        $ges3bSamarqand909 = $this->getValue($data, "G909");

        $power3bSamarqand880 = $ges3bSamarqand880[2] * 7200 / $CONST;//active
        $reactive3bSamarqand881 = $ges3bSamarqand881[2] * 7200 / $CONST;//reactive
        $water3bSamarqand880 = $energy->getWater($power3bSamarqand880, $pressure, 0.9, 0.95);//water
        $kpd3bSamarqand880 = $energy->getKpd($power3bSamarqand880, $water3bSamarqand880, $pressure, 0.95);//kpd

        $power3bSamarqand895 = $ges3bSamarqand895[2] * 7200 / $CONST;//active
        $reactive3bSamarqand896 = $ges3bSamarqand896[2] * 7200 / $CONST;//reactive
        $water3bSamarqand895 = $energy->getWater($power3bSamarqand895, $pressure, 0.9, 0.95);//water
        $kpd3bSamarqand895 = $energy->getKpd($power3bSamarqand895, $water3bSamarqand895, $pressure, 0.95);//kpd

        $power3bSamarqand1029 = $ges3bSamarqand1029[2] * 120 / $CONST;//active
        $reactive3bSamarqand1031 = $ges3bSamarqand1031[2] * 120 / $CONST;//reactive
        $water3bSamarqand1029 = $energy->getWater($power3bSamarqand1029, $pressure, 0.87, 0.92);//water
        $kpd3bSamarqand1029 = $energy->getKpd($power3bSamarqand1029, $water3bSamarqand1029, $pressure, 0.932);//kpd

        $set3bSamarqand940 = $ges3bSamarqand940[2] * 60 / $kvt;
        $set3bSamarqand955 = $ges3bSamarqand955[2] * 60 / $kvt;

        $set3bSamarqand910 = $ges3bSamarqand910[2] * 140000 / $CONST;
        $set3bSamarqand925 = $ges3bSamarqand925[2] * 210000 / $CONST;
        $set3bSamarqand970 = $ges3bSamarqand970[2] * 2400 / $CONST;
        $set3bSamarqand985 = $ges3bSamarqand985[2] * 2400 / $CONST;

        $data = array(
            array("id" => 910, "value" => $set3bSamarqand910),
            array("id" => 925, "value" => $set3bSamarqand925),
            array("id" => 970, "value" => $set3bSamarqand970),
            array("id" => 985, "value" => $set3bSamarqand985),

            array("id" => 940, "value" => $set3bSamarqand940),
            array("id" => 955, "value" => $set3bSamarqand955),

            array("id" => 880, "value" => $power3bSamarqand880),//active
            array("id" => 881, "value" => $reactive3bSamarqand881),//reactive
            array("id" => 882, "value" => $kpd3bSamarqand880),//КПД
            array("id" => 883, "value" => 0),//HA
            array("id" => 884, "value" => $water3bSamarqand880),//water

            array("id" => 895, "value" => $power3bSamarqand895),//active
            array("id" => 896, "value" => $reactive3bSamarqand896),//reactive
            array("id" => 897, "value" => $kpd3bSamarqand895),//КПД
            array("id" => 898, "value" => 0),//HA
            array("id" => 899, "value" => $water3bSamarqand895),//water

            array("id" => 1029, "value" => $power3bSamarqand1029),//active
            array("id" => 1031, "value" => $reactive3bSamarqand1031),//reactive
            array("id" => 1032, "value" => $kpd3bSamarqand1029),//КПД
            array("id" => 1033, "value" => 0),//HA
            array("id" => 1034, "value" => $water3bSamarqand1029),//water

            array("id" => 1, "value" => $power3bSamarqand880 + $power3bSamarqand895 + $power3bSamarqand1029),
            array("id" => 2, "value" => $reactive3bSamarqand881 + $reactive3bSamarqand896 + $reactive3bSamarqand1031),
            array("id" => 3, "value" =>
                ($set3bSamarqand910 > 0 ? $set3bSamarqand910 : 0) +
                ($set3bSamarqand925 > 0 ? $set3bSamarqand925 : 0) +
                ($set3bSamarqand970 > 0 ? $set3bSamarqand970 : 0) +
                ($set3bSamarqand985 > 0 ? $set3bSamarqand985 : 0)),
            array("id" => 4, "value" =>
                ($set3bSamarqand910 < 0 ? $set3bSamarqand910 : 0) +
                ($set3bSamarqand925 < 0 ? $set3bSamarqand925 : 0) +
                ($set3bSamarqand970 < 0 ? $set3bSamarqand970 : 0) +
                ($set3bSamarqand985 < 0 ? $set3bSamarqand985 : 0)),
            array("id" => 5, "value" => $set3bSamarqand940 + $set3bSamarqand955),
            array("id" => 6, "value" => $water3bSamarqand880 + $water3bSamarqand895 + $water3bSamarqand1029),
            array("id" => 7, "value" => $ges3bSamarqand894[2] > 0 ? $ges3bSamarqand894[2] : ($ges3bSamarqand924[2] > 0 ? $ges3bSamarqand924[2] : $ges3bSamarqand909[2])),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //Талигулян-3 (ГЭС-5Б)
    public function actionServer5b()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        // Optimize Water query - avoid multiple queries
        $water55 = Water::find()->where(['id_organization' => 55])->orderBy(['date' => SORT_DESC])->one();
        $upBef55 = $water55 ? $water55['up_bef'] : 0;
        $downBef55 = $water55 ? $water55['down_bef'] : 0;
        $pressure55 = $upBef55 - $downBef55;
        $water54 = Water::find()->where(['id_organization' => 54])->orderBy(['date' => SORT_DESC])->one();
        $upBef54 = $water54 ? $water54['up_bef'] : 0;
        $downBef54 = $water54 ? $water54['down_bef'] : 0;
        $pressure54 = $upBef54 - $downBef54;

        $ges5bSamarqand1182 = $this->getValue($data, "G1182");
        $ges5bSamarqand1204 = $this->getValue($data, "G1204");
        $ges5bSamarqand1203 = $this->getValue($data, "G1203");
        $ges5bSamarqand1220 = $this->getValue($data, "G1220");
        $ges5bSamarqand1152 = $this->getValue($data, "G1152");
        $ges5bSamarqand1137 = $this->getValue($data, "G1137");
        $ges5bSamarqand1167 = $this->getValue($data, "G1167");
        $ges5bSamarqand1287 = $this->getValue($data, "G1287");
        $ges5bSamarqand1069 = $this->getValue($data, "G1069");
        $ges5bSamarqand1070 = $this->getValue($data, "G1070");
        $ges5bSamarqand1084 = $this->getValue($data, "G1084");
        $ges5bSamarqand1085 = $this->getValue($data, "G1085");
        $ges5bSamarqand1241 = $this->getValue($data, "G1241");
        $ges5bSamarqand1243 = $this->getValue($data, "G1243");
        $ges5bSamarqand1264 = $this->getValue($data, "G1264");
        $ges5bSamarqand1266 = $this->getValue($data, "G1266");
        $ges5bSamarqand1068 = $this->getValue($data, "G1068");
        $ges5bSamarqand1077 = $this->getValue($data, "G1077");
        $ges5bSamarqand1083 = $this->getValue($data, "G1083");
        $ges5bSamarqand1120 = $this->getValue($data, "G1120");
        $ges5bSamarqand1190 = $this->getValue($data, "G1190");
        $ges5bSamarqand1197 = $this->getValue($data, "G1197");
        $ges5bSamarqand1228 = $this->getValue($data, "G1228");

        $power5bSamarqand1069 = $ges5bSamarqand1069[2] * 7200 / $CONST;//active
        $reactive5bSamarqand1070 = $ges5bSamarqand1070[2] * 7200 / $CONST;//reactive
        $water5bSamarqand1069 = $energy->getWater($power5bSamarqand1069, $pressure54, 0.81, 0.95);//water
        $kpd5bSamarqand1069 = $energy->getKpd($power5bSamarqand1069, $water5bSamarqand1069, $pressure54, 0.95);//kpd

        $power5bSamarqand1084 = $ges5bSamarqand1084[2] * 7200 / $CONST;//active
        $reactive5bSamarqand1085 = $ges5bSamarqand1085[2] * 7200 / $CONST;//reactive
        $water5bSamarqand1084 = $energy->getWater($power5bSamarqand1084, $pressure54, 0.81, 0.95);//water
        $kpd5bSamarqand1084 = $energy->getKpd($power5bSamarqand1084, $water5bSamarqand1084, $pressure54, 0.95);//kpd

        $power5bSamarqand1241 = $ges5bSamarqand1241[2] * 120 / $CONST;//active
        $reactive5bSamarqand1243 = $ges5bSamarqand1243[2] * 120 / $CONST;//reactive
        $water5bSamarqand1241 = $energy->getWater($power5bSamarqand1241, $pressure55, 0.81, 0.95);//water
        $kpd5bSamarqand1241 = $energy->getKpd($power5bSamarqand1241, $water5bSamarqand1241, $pressure55, 0.92);//kpd

        $power5bSamarqand1264 = $ges5bSamarqand1264[2] * 120 / $CONST;//active
        $reactive5bSamarqand1266 = $ges5bSamarqand1266[2] * 120 / $CONST;//reactive
        $water5bSamarqand1264 = $energy->getWater($power5bSamarqand1264, $pressure55, 0.81, 0.95);//water
        $kpd5bSamarqand1264 = $energy->getKpd($power5bSamarqand1264, $water5bSamarqand1264, $pressure55, 0.92);//kpd

        $set5bSamarqand1120 = $ges5bSamarqand1120[2] * 60 / $kvt;
        $set5bSamarqand1287 = $ges5bSamarqand1287[2] * 10 / $kvt;

        $set5bSamarqand1137 = $ges5bSamarqand1137[2] * 3600 / $CONST;
        $set5bSamarqand1152 = $ges5bSamarqand1152[2] * 2400 / $CONST;
        $set5bSamarqand1167 = $ges5bSamarqand1167[2] * 1200 / $CONST;
        $set5bSamarqand1182 = $ges5bSamarqand1182[2] * 14000 / $CONST;
        $set5bSamarqand1203 = $ges5bSamarqand1203[2] * 14000 / $CONST;
        $set5bSamarqand1204 = $ges5bSamarqand1204[2] * 14000 / $CONST;
        $set5bSamarqand1220 = $ges5bSamarqand1220[2] * 70000 / $CONST;

        $data = array(
            array("id" => 1069, "value" => $power5bSamarqand1069),//active
            array("id" => 1070, "value" => $reactive5bSamarqand1070),//reactive
            array("id" => 1071, "value" => $kpd5bSamarqand1069),//КПД
            array("id" => 1072, "value" => 0),//HA
            array("id" => 1073, "value" => $water5bSamarqand1069),//water

            array("id" => 1084, "value" => $power5bSamarqand1084),//active
            array("id" => 1085, "value" => $reactive5bSamarqand1085),//reactive
            array("id" => 1086, "value" => $kpd5bSamarqand1084),//КПД
            array("id" => 1087, "value" => 0),//HA
            array("id" => 1088, "value" => $water5bSamarqand1084),//water

            array("id" => 1241, "value" => $power5bSamarqand1241),//active
            array("id" => 1243, "value" => $reactive5bSamarqand1243),//reactive
            array("id" => 1244, "value" => $kpd5bSamarqand1241),//КПД
            array("id" => 1245, "value" => 0),//HA
            array("id" => 1246, "value" => $water5bSamarqand1241),//water

            array("id" => 1264, "value" => $power5bSamarqand1264),//active
            array("id" => 1266, "value" => $reactive5bSamarqand1266),//reactive
            array("id" => 1267, "value" => $kpd5bSamarqand1264),//КПД
            array("id" => 1268, "value" => 0),//HA
            array("id" => 1269, "value" => $water5bSamarqand1264),//water

            array("id" => 1120, "value" => $set5bSamarqand1120),
            array("id" => 1287, "value" => $set5bSamarqand1287),

            array("id" => 1137, "value" => $set5bSamarqand1137),
            array("id" => 1152, "value" => $set5bSamarqand1152),
            array("id" => 1167, "value" => $set5bSamarqand1167),
            array("id" => 1182, "value" => $set5bSamarqand1182),
            array("id" => 1203, "value" => $set5bSamarqand1203),
            array("id" => 1204, "value" => $set5bSamarqand1204),
            array("id" => 1220, "value" => $set5bSamarqand1220),

            array("id" => 1190, "value" => $ges5bSamarqand1190[2] > 0 ? $energy->getVoltages($ges5bSamarqand1190[2], 350) :
                ($ges5bSamarqand1197[2] > 0 ? $energy->getVoltages($ges5bSamarqand1197[2], 350) : $energy->getVoltages($ges5bSamarqand1228[2], 350))),
            array("id" => 1077, "value" =>  $ges5bSamarqand1077[2] > 0 ? $energy->getVoltages($ges5bSamarqand1077[2], 60) : $energy->getVoltages($ges5bSamarqand1084[2], 60)),

            array("id" => 1, "value" => $power5bSamarqand1069 + $power5bSamarqand1084 + $power5bSamarqand1241 + $power5bSamarqand1264),
            array("id" => 2, "value" => $reactive5bSamarqand1070 + $reactive5bSamarqand1085 + $reactive5bSamarqand1243 + $reactive5bSamarqand1266),
            array("id" => 3, "value" =>
                ($set5bSamarqand1137 > 0 ? $set5bSamarqand1137 : 0) +
                ($set5bSamarqand1152 > 0 ? $set5bSamarqand1152 : 0) +
                ($set5bSamarqand1167 > 0 ? $set5bSamarqand1167 : 0) +
                ($set5bSamarqand1182 > 0 ? $set5bSamarqand1182 : 0) +
                $set5bSamarqand1203 +
                ($set5bSamarqand1220 > 0 ? $set5bSamarqand1220 : 0)),
            array("id" => 4, "value" =>
                ($set5bSamarqand1137 < 0 ? $set5bSamarqand1137 : 0) +
                ($set5bSamarqand1152 < 0 ? $set5bSamarqand1152 : 0) +
                ($set5bSamarqand1167 < 0 ? $set5bSamarqand1167 : 0) +
                ($set5bSamarqand1182 < 0 ? $set5bSamarqand1182 : 0) +
                $set5bSamarqand1204 +
                ($set5bSamarqand1220 < 0 ? $set5bSamarqand1220 : 0)),
            array("id" => 5, "value" => $set5bSamarqand1120 + $set5bSamarqand1287),
            array("id" => 6, "value" => $water5bSamarqand1069 + $water5bSamarqand1084 + $water5bSamarqand1241 + $water5bSamarqand1264),
            array("id" => 7, "value" => $ges5bSamarqand1068[2] > 0 ? $ges5bSamarqand1068[2] : $ges5bSamarqand1083[2]),
            array("id" => 8, "value" => $upBef54),
            array("id" => 9, "value" => $downBef54),
            array("id" => 10, "value" => $pressure54),
    );

        echo json_encode($data);
    }

    //Ургут
    public function actionServerUrgut()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 56])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $gesUrgutSamarqand258 = $this->getValue($data, "B258");
        $gesUrgutSamarqand257 = $this->getValue($data, "B257");
        $gesUrgutSamarqand1304 = $this->getValue($data, "G1304");
        $gesUrgutSamarqand1305 = $this->getValue($data, "G1305");
        $gesUrgutSamarqand1319 = $this->getValue($data, "G1319");
        $gesUrgutSamarqand1312 = $this->getValue($data, "G1312");
        $gesUrgutSamarqand1318 = $this->getValue($data, "G1318");
        $gesUrgutSamarqand1333 = $this->getValue($data, "G1333");
        $gesUrgutSamarqand1334 = $this->getValue($data, "G1334");

        $powerUrgutSamarqand1304 = $gesUrgutSamarqand1304[2] * 4800 / $CONST;//active
        $reactiveUrgutSamarqand1305 = $gesUrgutSamarqand1305[2] * 4800 / $CONST;//reactive
        $waterUrgutSamarqand1304 = $energy->getWater($powerUrgutSamarqand1304, $pressure, 0.77, 0.93);//water
        $kpdUrgutSamarqand1304 = $energy->getKpd($powerUrgutSamarqand1304, $waterUrgutSamarqand1304, $pressure, 0.93);//kpd

        $setUrgutSamarqand1319 = $gesUrgutSamarqand1319[2] * 10 / $kvt;
        $setUrgutSamarqand1334 = $gesUrgutSamarqand1334[2] * 10 / $kvt;

        $gesUrgutSamarqand257 = $gesUrgutSamarqand257[2] * 3600 / $CONST;
        $gesUrgutSamarqand258 = $gesUrgutSamarqand258[2] * 3600 / $CONST;

        $data = array(
            array("id" => 83, "value" => $energy->getVoltages($gesUrgutSamarqand1312[2], 60)),
            array("id" => 1312, "value" => $energy->getVoltages($gesUrgutSamarqand1312[2], 60)),

            array("id" => 1334, "value" => $setUrgutSamarqand1334),

            array("id" => 258, "value" => $gesUrgutSamarqand258),
            array("id" => 257, "value" => $gesUrgutSamarqand257),
            array("id" => 1319, "value" => $setUrgutSamarqand1319),

            array("id" => 1304, "value" => $powerUrgutSamarqand1304),//active
            array("id" => 1305, "value" => $reactiveUrgutSamarqand1305),//reactive
            array("id" => 1306, "value" => $kpdUrgutSamarqand1304),//КПД
            array("id" => 1307, "value" => 0),//HA
            array("id" => 1308, "value" => $waterUrgutSamarqand1304),//water

            array("id" => 1, "value" => $powerUrgutSamarqand1304),
            array("id" => 2, "value" => $reactiveUrgutSamarqand1305),
            array("id" => 3, "value" => $gesUrgutSamarqand257),
            array("id" => 4, "value" => $gesUrgutSamarqand258),
            array("id" => 5, "value" => $setUrgutSamarqand1319),
            array("id" => 6, "value" => $waterUrgutSamarqand1304),
            array("id" => 7, "value" => $gesUrgutSamarqand1318[2] > 0 ? $gesUrgutSamarqand1318[2] : $gesUrgutSamarqand1333[2]),
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
        header('Content-Type: application/json');
        $data = $this->fetchData();
        // Optimize Water query - avoid multiple queries
        $water2b = Water::find()->where(['id_organization' => 29])->orderBy(['date' => SORT_DESC])->one();
        $upBef2b = $water2b ? $water2b['up_bef'] : 0;
        $downBef2b = $water2b ? $water2b['down_bef'] : 0;
        $pressure2b = $upBef2b - $downBef2b;

        $ges2bSamarqand254 = $this->getValue($data, "G254");
        $ges2bSamarqand253 = $this->getValue($data, "G253");
        $ges2bSamarqand614 = $this->getValue($data, "G614");
        $ges2bSamarqand613 = $this->getValue($data, "G613");
        $ges2bSamarqand29 = $this->getValue($data, "G29");
        $ges2bSamarqand28 = $this->getValue($data, "G28");
        $ges2bSamarqand94 = $this->getValue($data, "G94");
        $ges2bSamarqand93 = $this->getValue($data, "G93");
        $ges2bSamarqand14 = $this->getValue($data, "G14");
        $ges2bSamarqand13 = $this->getValue($data, "G13");
        $ges2bSamarqand373 = $this->getValue($data, "G373");
        $ges2bSamarqand453 = $this->getValue($data, "G453");
        $ges2bSamarqand77 = $this->getValue($data, "B77");
        $ges2bSamarqand293 = $this->getValue($data, "G293");
        $ges2bSamarqand295 = $this->getValue($data, "G295");
        $ges2bSamarqand493 = $this->getValue($data, "G493");
        $ges2bSamarqand495 = $this->getValue($data, "G495");
        $ges2bSamarqand413 = $this->getValue($data, "G413");
        $ges2bSamarqand415 = $this->getValue($data, "G415");

        $set2bSamarqand14 = $ges2bSamarqand14[2] * 42000 / $CONST;
        $set2bSamarqand29 = $ges2bSamarqand29[2] * 42000 / $CONST;
        $set2bSamarqand94 = $ges2bSamarqand94[2] * 42000 / $CONST;
        $set2bSamarqand254 = $ges2bSamarqand254[2] * 42000 / $CONST;
        $set2bSamarqand614 = $ges2bSamarqand614[2] * 42000 / $CONST;

        $set2bSamarqand13 = $ges2bSamarqand13[2] * 42000 / $CONST;
        $set2bSamarqand28 = $ges2bSamarqand28[2] * 42000 / $CONST;
        $set2bSamarqand93 = $ges2bSamarqand93[2] * 42000 / $CONST;
        $set2bSamarqand253 = $ges2bSamarqand253[2] * 42000 / $CONST;
        $set2bSamarqand613 = $ges2bSamarqand613[2] * 42000 / $CONST;

        $set2bSamarqand373 = $ges2bSamarqand373[2] * 42000 / $CONST;
        $set2bSamarqand453 = $ges2bSamarqand453[2] * 42000 / $CONST;
        $set2bSamarqand77 = $ges2bSamarqand77[2] * 42000 / $CONST;

        $power2bSamarqand293 = $ges2bSamarqand293[2] * 40000 / $CONST;//active
        $reactive2bSamarqand295 = $ges2bSamarqand295[2] * 40000 / $CONST;//reactive
        $water2bSamarqand293 = $energy->getWater($power2bSamarqand293, $pressure2b, 0.92, 0.97);//water

        $power2bSamarqand493 = $ges2bSamarqand493[2] * 40000 / $CONST;//active
        $reactive2bSamarqand495 = $ges2bSamarqand495[2] * 40000 / $CONST;//reactive
        $water2bSamarqand493 = $energy->getWater($power2bSamarqand493, $pressure2b, 0.92, 0.97);//water

        $power2bSamarqand413 = $ges2bSamarqand413[2] * 40000 / $CONST;//active
        $reactive2bSamarqand415 = $ges2bSamarqand415[2] * 40000 / $CONST;//reactive
        $water2bSamarqand413 = $energy->getWater($power2bSamarqand413, $pressure2b, 0.92, 0.97);//water

        $ges2bSamarqandActive = $power2bSamarqand293 + $power2bSamarqand493 + $power2bSamarqand413;
        $ges2bSamarqandReactive = $reactive2bSamarqand295 + $reactive2bSamarqand495 + $reactive2bSamarqand415;
        $ges2bSamarqandActiveOut =  $set2bSamarqand13 +
            $set2bSamarqand28 +
            $set2bSamarqand93 +
            $set2bSamarqand253 +
            $set2bSamarqand613;
        $ges2bSamarqandActiveIn = $set2bSamarqand14 +
            $set2bSamarqand29 +
            $set2bSamarqand94 +
            $set2bSamarqand254 +
            $set2bSamarqand614;
        $ges2bSamarqandOwnNeeds = $set2bSamarqand373 + $set2bSamarqand453 + $set2bSamarqand77;
        $ges2bSamarqandWater = $water2bSamarqand293 + $water2bSamarqand493 + $water2bSamarqand413;
        $ges2bSamarqandAggregateTrue = ($ges2bSamarqand293[2] > 0 ? 1 : 0) + ($ges2bSamarqand493[2] > 0 ? 1 : 0) + ($ges2bSamarqand413[2] > 0 ? 1 : 0);
        $ges2bSamarqandAggregateError = 0;
        $ges2bSamarqandAggregateFalse = ($ges2bSamarqand293[2] <= 0 ? 1 : 0) + ($ges2bSamarqand493[2] <= 0 ? 1 : 0) + ($ges2bSamarqand413[2] <= 0 ? 1 : 0) - $ges2bSamarqandAggregateError;

        $water3b = Water::find()->where(['id_organization' => 29])->orderBy(['date' => SORT_DESC])->one();
        $upBef3b = $water3b ? $water3b['up_bef'] : 0;
        $downBef3b = $water3b ? $water3b['down_bef'] : 0;
        $pressure3b = $upBef3b - $downBef3b;

        $ges3bSamarqand925 = $this->getValue($data, "G925");
        $ges3bSamarqand910 = $this->getValue($data, "G910");
        $ges3bSamarqand985 = $this->getValue($data, "G985");
        $ges3bSamarqand970 = $this->getValue($data, "G970");
        $ges3bSamarqand940 = $this->getValue($data, "G940");
        $ges3bSamarqand955 = $this->getValue($data, "G955");
        $ges3bSamarqand880 = $this->getValue($data, "G880");
        $ges3bSamarqand881 = $this->getValue($data, "G881");
        $ges3bSamarqand895 = $this->getValue($data, "G895");
        $ges3bSamarqand896 = $this->getValue($data, "G896");
        $ges3bSamarqand1029 = $this->getValue($data, "G1029");
        $ges3bSamarqand1031 = $this->getValue($data, "G1031");

        $power3bSamarqand880 = $ges3bSamarqand880[2] * 7200 / $CONST;//active
        $reactive3bSamarqand881 = $ges3bSamarqand881[2] * 7200 / $CONST;//reactive
        $water3bSamarqand880 = $energy->getWater($power3bSamarqand880, $pressure3b, 0.9, 0.95);//water

        $power3bSamarqand895 = $ges3bSamarqand895[2] * 7200 / $CONST;//active
        $reactive3bSamarqand896 = $ges3bSamarqand896[2] * 7200 / $CONST;//reactive
        $water3bSamarqand895 = $energy->getWater($power3bSamarqand895, $pressure3b, 0.9, 0.95);//water

        $power3bSamarqand1029 = $ges3bSamarqand1029[2] * 120 / $CONST;//active
        $reactive3bSamarqand1031 = $ges3bSamarqand1031[2] * 120 / $CONST;//reactive
        $water3bSamarqand1029 = $energy->getWater($power3bSamarqand1029, $pressure3b, 0.87, 0.92);//water

        $set3bSamarqand940 = $ges3bSamarqand940[2] * 60 / $kvt;
        $set3bSamarqand955 = $ges3bSamarqand955[2] * 60 / $kvt;

        $set3bSamarqand910 = $ges3bSamarqand910[2] * 140000 / $CONST;
        $set3bSamarqand925 = $ges3bSamarqand925[2] * 210000 / $CONST;
        $set3bSamarqand970 = $ges3bSamarqand970[2] * 2400 / $CONST;
        $set3bSamarqand985 = $ges3bSamarqand985[2] * 2400 / $CONST;

        $ges3bSamarqandActive = $power3bSamarqand880 + $power3bSamarqand895 + $power3bSamarqand1029;
        $ges3bSamarqandReactive = $reactive3bSamarqand881 + $reactive3bSamarqand896 + $reactive3bSamarqand1031;
        $ges3bSamarqandActiveOut =  ($set3bSamarqand910 > 0 ? $set3bSamarqand910 : 0) +
            ($set3bSamarqand925 > 0 ? $set3bSamarqand925 : 0) +
            ($set3bSamarqand970 > 0 ? $set3bSamarqand970 : 0) +
            ($set3bSamarqand985 > 0 ? $set3bSamarqand985 : 0);
        $ges3bSamarqandActiveIn = ($set3bSamarqand910 < 0 ? $set3bSamarqand910 : 0) +
            ($set3bSamarqand925 < 0 ? $set3bSamarqand925 : 0) +
            ($set3bSamarqand970 < 0 ? $set3bSamarqand970 : 0) +
            ($set3bSamarqand985 < 0 ? $set3bSamarqand985 : 0);
        $ges3bSamarqandOwnNeeds = $set3bSamarqand940 + $set3bSamarqand955;
        $ges3bSamarqandWater = $water3bSamarqand880 + $water3bSamarqand895 + $water3bSamarqand1029;
        $ges3bSamarqandAggregateTrue = ($ges3bSamarqand880[2] > 0 ? 1 : 0) + ($ges3bSamarqand895[2] > 0 ? 1 : 0) + ($ges3bSamarqand1029[2] > 0 ? 1 : 0);
        $ges3bSamarqandAggregateError = 0;
        $ges3bSamarqandAggregateFalse = ($ges3bSamarqand880[2] <= 0 ? 1 : 0) + ($ges3bSamarqand895[2] <= 0 ? 1 : 0) + ($ges3bSamarqand1029[2] <= 0 ? 1 : 0) - $ges3bSamarqandAggregateError;

        $water1b = Water::find()->where(['id_organization' => 29])->orderBy(['date' => SORT_DESC])->one();
        $upBef1b = $water1b ? $water1b['up_bef'] : 0;
        $downBef1b = $water1b ? $water1b['down_bef'] : 0;
        $pressure1b = $upBef1b - $downBef1b;

        $ges1bSamarqand101 = $this->getValue($data, "B101");
        $ges1bSamarqand102 = $this->getValue($data, "B102");
        $ges1bSamarqand105 = $this->getValue($data, "B105");
        $ges1bSamarqand106 = $this->getValue($data, "B106");
        $ges1bSamarqand109 = $this->getValue($data, "B109");
        $ges1bSamarqand110 = $this->getValue($data, "B110");
        $ges1bSamarqand113 = $this->getValue($data, "B113");
        $ges1bSamarqand114 = $this->getValue($data, "B114");
        $ges1bSamarqand743 = $this->getValue($data, "G743");
        $ges1bSamarqand779 = $this->getValue($data, "G779");
        $ges1bSamarqand780 = $this->getValue($data, "G780");
        $ges1bSamarqand125 = $this->getValue($data, "B125");
        $ges1bSamarqand713 = $this->getValue($data, "G713");
        $ges1bSamarqand714 = $this->getValue($data, "G714");
        $ges1bSamarqand728 = $this->getValue($data, "G728");
        $ges1bSamarqand729 = $this->getValue($data, "G729");
        $ges1bSamarqand817 = $this->getValue($data, "G817");
        $ges1bSamarqand819 = $this->getValue($data, "G819");
        $ges1bSamarqand840 = $this->getValue($data, "G840");
        $ges1bSamarqand842 = $this->getValue($data, "G842");
        $ges1bSamarqand758 = $this->getValue($data, "G758");

        $power1bSamarqand713 = $ges1bSamarqand713[2] * 2400 / $CONST;//active
        $reactive1bSamarqand714 = $ges1bSamarqand714[2] * 2400 / $CONST;//reactive
        $water1bSamarqand713 = $energy->getWater($power1bSamarqand713, $pressure1b, 0.8, 0.94);//water

        $power1bSamarqand728 = $ges1bSamarqand728[2] * 2400 / $CONST;//active
        $reactive1bSamarqand729 = $ges1bSamarqand729[2] * 2400 / $CONST;//reactive
        $water1bSamarqand728 = $energy->getWater($power1bSamarqand728, $pressure1b, 0.8, 0.94);//water

        $power1bSamarqand817 = $ges1bSamarqand817[2] * 120 / $CONST;//active
        $reactive1bSamarqand819 = $ges1bSamarqand819[2] * 120 / $CONST;//reactive
        $water1bSamarqand817 = $energy->getWater($power1bSamarqand817, $pressure1b, 0.87, 0.92);//water

        $power1bSamarqand840 = $ges1bSamarqand840[2] * 120 / $CONST;//active
        $reactive1bSamarqand842 = $ges1bSamarqand842[2] * 120 / $CONST;//reactive
        $water1bSamarqand840 = $energy->getWater($power1bSamarqand840, $pressure1b, 0.87, 0.92);//water

        $set1bSamarqand758 = $ges1bSamarqand758[2] * 600 / $kvt;
        $set1bSamarqand125 = $ges1bSamarqand125[2] * 40 / $kvt;

        $set1bSamarqand101 = $ges1bSamarqand101[2] * 1800 / $CONST;
        $set1bSamarqand102 = $ges1bSamarqand102[2] * 1800 / $CONST;
        $set1bSamarqand105 = $ges1bSamarqand105[2] * 4800 / $CONST;
        $set1bSamarqand106 = $ges1bSamarqand106[2] * 4800 / $CONST;
        $set1bSamarqand109 = $ges1bSamarqand109[2] * 3600 / $CONST;
        $set1bSamarqand110 = $ges1bSamarqand110[2] * 3600 / $CONST;
        $set1bSamarqand113 = $ges1bSamarqand113[2] * 4800 / $CONST;
        $set1bSamarqand114 = $ges1bSamarqand114[2] * 4800 / $CONST;
        $set1bSamarqand743 = $ges1bSamarqand743[2] * 14000 / $CONST;
        $set1bSamarqand779 = $ges1bSamarqand779[2] * 7200 / $CONST;
        $set1bSamarqand780 = $ges1bSamarqand780[2] * 7200 / $CONST;

        $ges1bSamarqandActive = $power1bSamarqand713 + $power1bSamarqand728 + $power1bSamarqand817 + $power1bSamarqand840;
        $ges1bSamarqandReactive = $reactive1bSamarqand714 + $reactive1bSamarqand729 + $reactive1bSamarqand819 + $reactive1bSamarqand842;
        $ges1bSamarqandActiveOut =  $set1bSamarqand101 + $set1bSamarqand105 + $set1bSamarqand109 + $set1bSamarqand113 + ($set1bSamarqand743 > 0 ? $set1bSamarqand743 : 0) + $set1bSamarqand779;
        $ges1bSamarqandActiveIn = $set1bSamarqand102 + $set1bSamarqand106 + $set1bSamarqand110 + $set1bSamarqand114 + ($set1bSamarqand743 < 0 ? $set1bSamarqand743 : 0) + $set1bSamarqand780;
        $ges1bSamarqandOwnNeeds = $set1bSamarqand758 + $set1bSamarqand125;
        $ges1bSamarqandWater = $water1bSamarqand713 + $water1bSamarqand728 + $water1bSamarqand817 + $water1bSamarqand840;
        $ges1bSamarqandAggregateTrue = ($ges1bSamarqand713[2] > 0 ? 1 : 0) + ($ges1bSamarqand728[2] > 0 ? 1 : 0) + ($ges1bSamarqand817[2] > 0 ? 1 : 0) + ($ges1bSamarqand840[2] > 0 ? 1 : 0);
        $ges1bSamarqandAggregateError = 1;
        $ges1bSamarqandAggregateFalse = ($ges1bSamarqand713[2] <= 0 ? 1 : 0) + ($ges1bSamarqand728[2] <= 0 ? 1 : 0) + ($ges1bSamarqand817[2] <= 0 ? 1 : 0) + ($ges1bSamarqand840[2] <= 0 ? 1 : 0) - $ges1bSamarqandAggregateError;

        $water55 = Water::find()->where(['id_organization' => 55])->orderBy(['date' => SORT_DESC])->one();
        $upBef55 = $water55 ? $water55['up_bef'] : 0;
        $downBef55 = $water55 ? $water55['down_bef'] : 0;
        $pressure55 = $upBef55 - $downBef55;
        $water54 = Water::find()->where(['id_organization' => 54])->orderBy(['date' => SORT_DESC])->one();
        $upBef54 = $water54 ? $water54['up_bef'] : 0;
        $downBef54 = $water54 ? $water54['down_bef'] : 0;
        $pressure54 = $upBef54 - $downBef54;

        $ges5bSamarqand1182 = $this->getValue($data, "G1182");
        $ges5bSamarqand1204 = $this->getValue($data, "G1204");
        $ges5bSamarqand1203 = $this->getValue($data, "G1203");
        $ges5bSamarqand1220 = $this->getValue($data, "G1220");
        $ges5bSamarqand1152 = $this->getValue($data, "G1152");
        $ges5bSamarqand1137 = $this->getValue($data, "G1137");
        $ges5bSamarqand1167 = $this->getValue($data, "G1167");
        $ges5bSamarqand1287 = $this->getValue($data, "G1287");
        $ges5bSamarqand1069 = $this->getValue($data, "G1069");
        $ges5bSamarqand1070 = $this->getValue($data, "G1070");
        $ges5bSamarqand1084 = $this->getValue($data, "G1084");
        $ges5bSamarqand1085 = $this->getValue($data, "G1085");
        $ges5bSamarqand1241 = $this->getValue($data, "G1241");
        $ges5bSamarqand1243 = $this->getValue($data, "G1243");
        $ges5bSamarqand1264 = $this->getValue($data, "G1264");
        $ges5bSamarqand1266 = $this->getValue($data, "G1266");
        $ges5bSamarqand1120 = $this->getValue($data, "G1120");

        $power5bSamarqand1069 = $ges5bSamarqand1069[2] * 7200 / $CONST;//active
        $reactive5bSamarqand1070 = $ges5bSamarqand1070[2] * 7200 / $CONST;//reactive
        $water5bSamarqand1069 = $energy->getWater($power5bSamarqand1069, $pressure54, 0.81, 0.95);//water

        $power5bSamarqand1084 = $ges5bSamarqand1084[2] * 7200 / $CONST;//active
        $reactive5bSamarqand1085 = $ges5bSamarqand1085[2] * 7200 / $CONST;//reactive
        $water5bSamarqand1084 = $energy->getWater($power5bSamarqand1084, $pressure54, 0.81, 0.95);//water

        $power5bSamarqand1241 = $ges5bSamarqand1241[2] * 120 / $CONST;//active
        $reactive5bSamarqand1243 = $ges5bSamarqand1243[2] * 120 / $CONST;//reactive
        $water5bSamarqand1241 = $energy->getWater($power5bSamarqand1241, $pressure55, 0.81, 0.95);//water

        $power5bSamarqand1264 = $ges5bSamarqand1264[2] * 120 / $CONST;//active
        $reactive5bSamarqand1266 = $ges5bSamarqand1266[2] * 120 / $CONST;//reactive
        $water5bSamarqand1264 = $energy->getWater($power5bSamarqand1264, $pressure55, 0.81, 0.95);//water

        $set5bSamarqand1120 = $ges5bSamarqand1120[2] * 60 / $kvt;
        $set5bSamarqand1287 = $ges5bSamarqand1287[2] * 10 / $kvt;

        $set5bSamarqand1137 = $ges5bSamarqand1137[2] * 3600 / $CONST;
        $set5bSamarqand1152 = $ges5bSamarqand1152[2] * 2400 / $CONST;
        $set5bSamarqand1167 = $ges5bSamarqand1167[2] * 1200 / $CONST;
        $set5bSamarqand1182 = $ges5bSamarqand1182[2] * 14000 / $CONST;
        $set5bSamarqand1203 = $ges5bSamarqand1203[2] * 14000 / $CONST;
        $set5bSamarqand1204 = $ges5bSamarqand1204[2] * 14000 / $CONST;
        $set5bSamarqand1220 = $ges5bSamarqand1220[2] * 70000 / $CONST;

        $ges5bSamarqandActive = $power5bSamarqand1069 + $power5bSamarqand1084 + $power5bSamarqand1241 + $power5bSamarqand1264;
        $ges5bSamarqandReactive = $reactive5bSamarqand1070 + $reactive5bSamarqand1085 + $reactive5bSamarqand1243 + $reactive5bSamarqand1266;
        $ges5bSamarqandActiveOut =  ($set5bSamarqand1137 > 0 ? $set5bSamarqand1137 : 0) +
            ($set5bSamarqand1152 > 0 ? $set5bSamarqand1152 : 0) +
            ($set5bSamarqand1167 > 0 ? $set5bSamarqand1167 : 0) +
            ($set5bSamarqand1182 > 0 ? $set5bSamarqand1182 : 0) +
            $set5bSamarqand1203 +
            ($set5bSamarqand1220 > 0 ? $set5bSamarqand1220 : 0);
        $ges5bSamarqandActiveIn = ($set5bSamarqand1137 < 0 ? $set5bSamarqand1137 : 0) +
            ($set5bSamarqand1152 < 0 ? $set5bSamarqand1152 : 0) +
            ($set5bSamarqand1167 < 0 ? $set5bSamarqand1167 : 0) +
            ($set5bSamarqand1182 < 0 ? $set5bSamarqand1182 : 0) +
            $set5bSamarqand1204 +
            ($set5bSamarqand1220 < 0 ? $set5bSamarqand1220 : 0);
        $ges5bSamarqandOwnNeeds = $set5bSamarqand1120 + $set5bSamarqand1287;
        $ges5bSamarqandWater = $water5bSamarqand1069 + $water5bSamarqand1084 + $water5bSamarqand1241 + $water5bSamarqand1264;
        $ges5bSamarqandAggregateTrue = ($ges5bSamarqand1069[2] > 0 ? 1 : 0) + ($ges5bSamarqand1084[2] > 0 ? 1 : 0) + ($ges5bSamarqand1241[2] > 0 ? 1 : 0) + ($ges5bSamarqand1264[2] > 0 ? 1 : 0);
        $ges5bSamarqandAggregateError = 1;
        $ges5bSamarqandAggregateFalse = ($ges5bSamarqand1069[2] <= 0 ? 1 : 0) + ($ges5bSamarqand1084[2] <= 0 ? 1 : 0) + ($ges5bSamarqand1241[2] <= 0 ? 1 : 0) + ($ges5bSamarqand1264[2] <= 0 ? 1 : 0) - $ges5bSamarqandAggregateError;

        $waterUrgut = Water::find()->where(['id_organization' => 56])->orderBy(['date' => SORT_DESC])->one();
        $upBefUrgut = $waterUrgut ? $waterUrgut['up_bef'] : 0;
        $downBefUrgut = $waterUrgut ? $waterUrgut['down_bef'] : 0;
        $pressureUrgut = $upBefUrgut - $downBefUrgut;

        $gesUrgutSamarqand258 = $this->getValue($data, "B258");
        $gesUrgutSamarqand257 = $this->getValue($data, "B257");
        $gesUrgutSamarqand1304 = $this->getValue($data, "G1304");
        $gesUrgutSamarqand1305 = $this->getValue($data, "G1305");
        $gesUrgutSamarqand1319 = $this->getValue($data, "G1319");

        $powerUrgutSamarqand1304 = $gesUrgutSamarqand1304[2] * 4800 / $CONST;//active
        $reactiveUrgutSamarqand1305 = $gesUrgutSamarqand1305[2] * 4800 / $CONST;//reactive
        $waterUrgutSamarqand1304 = $energy->getWater($powerUrgutSamarqand1304, $pressureUrgut, 0.77, 0.93);//water

        $setUrgutSamarqand1319 = $gesUrgutSamarqand1319[2] * 10 / $kvt;

        $gesUrgutSamarqand257 = $gesUrgutSamarqand257[2] * 3600 / $CONST;
        $gesUrgutSamarqand258 = $gesUrgutSamarqand258[2] * 3600 / $CONST;
        if ($powerUrgutSamarqand1304 > 2.5) {
            $allTrue = 6;
            $allFalse = 0;
        } else if ($powerUrgutSamarqand1304 < 2.5 && $powerUrgutSamarqand1304 > 2) {
            $allTrue = 5;
            $allFalse = 1;
        } else if ($powerUrgutSamarqand1304 < 2 && $powerUrgutSamarqand1304 > 1.5) {
            $allTrue = 4;
            $allFalse = 2;
        } else if ($powerUrgutSamarqand1304 < 1.5 && $powerUrgutSamarqand1304 > 1) {
            $allTrue = 3;
            $allFalse = 3;
        } else if ($powerUrgutSamarqand1304 < 1 && $powerUrgutSamarqand1304 > 0.5) {
            $allTrue = 2;
            $allFalse = 4;
        } else if ($powerUrgutSamarqand1304 < 0.5 && $powerUrgutSamarqand1304 > 0) {
            $allTrue = 1;
            $allFalse = 5;
        } else {
            $allTrue = 0;
            $allFalse = 6;
        }
        $gesUrgutSamarqandActive = $powerUrgutSamarqand1304;
        $gesUrgutSamarqandReactive = $reactiveUrgutSamarqand1305;
        $gesUrgutSamarqandActiveOut =  $gesUrgutSamarqand257;
        $gesUrgutSamarqandActiveIn = $gesUrgutSamarqand258;
        $gesUrgutSamarqandOwnNeeds = $setUrgutSamarqand1319;
        $gesUrgutSamarqandWater = $waterUrgutSamarqand1304;
        $gesUrgutSamarqandAggregateTrue = $allTrue;
        $gesUrgutSamarqandAggregateError = 0;
        $gesUrgutSamarqandAggregateFalse = $allFalse - $gesUrgutSamarqandAggregateError;

        $waterShaudar1 = Water::find()->where(['id_organization' => 58])->orderBy(['date' => SORT_DESC])->one();
        $upBefShaudar1 = $waterShaudar1 ? $waterShaudar1['up_bef'] : 0;
        $downBefShaudar1 = $waterShaudar1 ? $waterShaudar1['down_bef'] : 0;
        $pressureShaudar1 = $upBefShaudar1 - $downBefShaudar1;

        $gesShaudar1Samarqand273 = $this->getValue($data, "B273");
        $gesShaudar1Samarqand274 = $this->getValue($data, "B274");
        $gesShaudar1Samarqand1401 = $this->getValue($data, "G1401");
        $gesShaudar1Samarqand1355 = $this->getValue($data, "G1355");
        $gesShaudar1Samarqand1357 = $this->getValue($data, "G1357");
        $gesShaudar1Samarqand1378 = $this->getValue($data, "G1378");
        $gesShaudar1Samarqand1380 = $this->getValue($data, "G1380");
        $gesShaudar1Samarqand1348 = $this->getValue($data, "G1348");
        $gesShaudar1Samarqand1371 = $this->getValue($data, "G1371");
        $gesShaudar1Samarqand1394 = $this->getValue($data, "G1394");

        $powerShaudar1Samarqand1355 = $gesShaudar1Samarqand1355[2] * 15750 / $CONST;//active
        $reactiveShaudar1Samarqand1357 = $gesShaudar1Samarqand1357[2] * 15750 / $CONST;//reactive
        $waterShaudar1Samarqand1355 = $energy->getWater($powerShaudar1Samarqand1355, $pressureShaudar1, 0.96, 0.96);//water

        $powerShaudar1Samarqand1378 = $gesShaudar1Samarqand1378[2] * 15750 / $CONST;//active
        $reactiveShaudar1Samarqand1380 = $gesShaudar1Samarqand1380[2] * 15750 / $CONST;//reactive
        $waterShaudar1Samarqand1378 = $energy->getWater($powerShaudar1Samarqand1378, $pressureShaudar1, 0.96, 0.96);//water

        $setShaudar1Samarqand1401 = $gesShaudar1Samarqand1401[2] * 800 / $kvt;

        $setShaudar1Samarqand273 = $gesShaudar1Samarqand273[2] * 330000 / $CONST;
        $setShaudar1Samarqand274 = $gesShaudar1Samarqand274[2] * 330000 / $CONST;

        $gesShaudar1SamarqandActive = $powerShaudar1Samarqand1355 + $powerShaudar1Samarqand1378;
        $gesShaudar1SamarqandReactive = $reactiveShaudar1Samarqand1357 + $reactiveShaudar1Samarqand1380;
        $gesShaudar1SamarqandActiveOut =  $setShaudar1Samarqand273;
        $gesShaudar1SamarqandActiveIn = $setShaudar1Samarqand274;
        $gesShaudar1SamarqandOwnNeeds = $setShaudar1Samarqand1401;
        $gesShaudar1SamarqandWater = $waterShaudar1Samarqand1355 + $waterShaudar1Samarqand1378;
        $gesShaudar1SamarqandAggregateTrue = ($gesShaudar1Samarqand1355[2] > 0 ? 1 : 0) + ($gesShaudar1Samarqand1378[2] > 0 ? 1 : 0);
        $gesShaudar1SamarqandAggregateError = 1;
        $gesShaudar1SamarqandAggregateFalse = ($gesShaudar1Samarqand1355[2] <= 0 ? 1 : 0) + ($gesShaudar1Samarqand1378[2] <= 0 ? 1 : 0) - $gesShaudar1SamarqandAggregateError;




        $active = $ges2bSamarqandActive + $ges3bSamarqandActive + $ges1bSamarqandActive + $ges5bSamarqandActive + $gesUrgutSamarqandActive + $gesShaudar1SamarqandActive;
        $reactive = $ges2bSamarqandReactive + $ges3bSamarqandReactive + $ges1bSamarqandReactive + $ges5bSamarqandReactive + $gesUrgutSamarqandReactive + $gesShaudar1SamarqandReactive;
        $activeOut = $ges2bSamarqandActiveOut + $ges3bSamarqandActiveOut + $ges1bSamarqandActiveOut + $ges5bSamarqandActiveOut + $gesUrgutSamarqandActiveOut + $gesShaudar1SamarqandActiveOut;
        $activeIn = $ges2bSamarqandActiveIn + $ges3bSamarqandActiveIn + $ges1bSamarqandActiveIn + $ges5bSamarqandActiveIn + $gesUrgutSamarqandActiveIn + $gesShaudar1SamarqandActiveIn;
        $ownNeeds = $ges2bSamarqandOwnNeeds + $ges3bSamarqandOwnNeeds + $ges1bSamarqandOwnNeeds + $ges5bSamarqandOwnNeeds + $gesUrgutSamarqandOwnNeeds + $gesShaudar1SamarqandOwnNeeds;
        $water = $ges2bSamarqandWater + $ges3bSamarqandWater + $ges1bSamarqandWater + $ges5bSamarqandWater + $gesUrgutSamarqandWater + $gesShaudar1SamarqandWater;
        $true = $ges2bSamarqandAggregateTrue + $ges3bSamarqandAggregateTrue + $ges1bSamarqandAggregateTrue + $ges5bSamarqandAggregateTrue + $gesUrgutSamarqandAggregateTrue + $gesShaudar1SamarqandAggregateTrue;
        $error = $ges2bSamarqandAggregateError + $ges3bSamarqandAggregateError + $ges1bSamarqandAggregateError + $ges5bSamarqandAggregateError + $gesUrgutSamarqandAggregateError + $gesShaudar1SamarqandAggregateError;
        $false = $ges2bSamarqandAggregateFalse + $ges3bSamarqandAggregateFalse + $ges1bSamarqandAggregateFalse + $ges5bSamarqandAggregateFalse + $gesUrgutSamarqandAggregateFalse + $gesShaudar1SamarqandAggregateFalse;

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

            array("id" => 10, "value" => $ges2bSamarqandActive),
            array("id" => 11, "value" => $ges2bSamarqandAggregateTrue),
            array("id" => 12, "value" => $ges2bSamarqandAggregateFalse),
            array("id" => 13, "value" => $ges2bSamarqandAggregateError),

            array("id" => 14, "value" => $ges3bSamarqandActive),
            array("id" => 15, "value" => $ges3bSamarqandAggregateTrue),
            array("id" => 16, "value" => $ges3bSamarqandAggregateFalse),
            array("id" => 17, "value" => $ges3bSamarqandAggregateError),

            array("id" => 18, "value" => $ges1bSamarqandActive),
            array("id" => 19, "value" => $ges1bSamarqandAggregateTrue),
            array("id" => 20, "value" => $ges1bSamarqandAggregateFalse),
            array("id" => 21, "value" => $ges1bSamarqandAggregateError),

            array("id" => 22, "value" => $ges5bSamarqandActive),
            array("id" => 23, "value" => $ges5bSamarqandAggregateTrue),
            array("id" => 24, "value" => $ges5bSamarqandAggregateFalse),
            array("id" => 25, "value" => $ges5bSamarqandAggregateError),

            array("id" => 26, "value" => $gesUrgutSamarqandActive),
            array("id" => 27, "value" => $gesUrgutSamarqandAggregateTrue),
            array("id" => 28, "value" => $gesUrgutSamarqandAggregateFalse),
            array("id" => 29, "value" => $gesUrgutSamarqandAggregateError),

            array("id" => 30, "value" => $gesShaudar1SamarqandActive),
            array("id" => 31, "value" => $gesShaudar1SamarqandAggregateTrue),
            array("id" => 32, "value" => $gesShaudar1SamarqandAggregateFalse),
            array("id" => 33, "value" => $gesShaudar1SamarqandAggregateError),

            array("id" => 34, "value" => $gesUrgutSamarqandActive),
            array("id" => 35, "value" => $gesUrgutSamarqandAggregateTrue),
            array("id" => 36, "value" => $gesUrgutSamarqandAggregateFalse),
            array("id" => 37, "value" => $gesUrgutSamarqandAggregateError),
        );

        echo json_encode($data);
    }
}
