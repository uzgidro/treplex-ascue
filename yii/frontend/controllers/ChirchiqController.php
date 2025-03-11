<?php

namespace frontend\controllers;

use common\models\Water;

class ChirchiqController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes7()
    {
        return $this->render('ges7');
    }

    public function actionGes8()
    {
        return $this->render('ges8');
    }

    public function actionGes10()
    {
        return $this->render('ges10');
    }

    public function actionGes46()
    {
        return $this->render('ges46');
    }

    protected string $url = "http://user:hrU_s20r@192.168.40.215:10206/crq?req=current";

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

    //(ГЭС-7)
    public function actionServer7()
    {
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 29])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges7Chirchiq378 = $this->getValue($data, "G378");
        $ges7Chirchiq333 = $this->getValue($data, "G333");
        $ges7Chirchiq423 = $this->getValue($data, "G423");
        $ges7Chirchiq393 = $this->getValue($data, "G393");
        $ges7Chirchiq408 = $this->getValue($data, "G408");
        $ges7Chirchiq348 = $this->getValue($data, "G348");
        $ges7Chirchiq363 = $this->getValue($data, "G363");
        $ges7Chirchiq332 = $this->getValue($data, "G332");
        $ges7Chirchiq386 = $this->getValue($data, "G386");
        $ges7Chirchiq401 = $this->getValue($data, "G401");
        $ges7Chirchiq347 = $this->getValue($data, "G347");
        $ges7Chirchiq377 = $this->getValue($data, "G377");
        $ges7Chirchiq362 = $this->getValue($data, "G362");
        $ges7Chirchiq438 = $this->getValue($data, "G438");
        $ges7Chirchiq453 = $this->getValue($data, "G453");
        $ges7Chirchiq241 = $this->getValue($data, "G241");
        $ges7Chirchiq97 = $this->getValue($data, "B97");
        $ges7Chirchiq273 = $this->getValue($data, "G273");
        $ges7Chirchiq274 = $this->getValue($data, "G274");
        $ges7Chirchiq288 = $this->getValue($data, "G288");
        $ges7Chirchiq289 = $this->getValue($data, "G289");
        $ges7Chirchiq303 = $this->getValue($data, "G303");
        $ges7Chirchiq304 = $this->getValue($data, "G304");
        $ges7Chirchiq318 = $this->getValue($data, "G318");
        $ges7Chirchiq319 = $this->getValue($data, "G319");
        $ges7Chirchiq12 = $this->getValue($data, "G12");
        $ges7Chirchiq39 = $this->getValue($data, "G39");

        $CONST = 1000000;
        $kvt = 1000;

        $set7Chirchiq378 = $ges7Chirchiq378[2] * 42000 / $CONST;
        $set7Chirchiq333 = $ges7Chirchiq333[2] * 42000 / $CONST;
        $set7Chirchiq423 = $ges7Chirchiq423[2] * 28000 / $CONST;
        $set7Chirchiq393 = $ges7Chirchiq393[2] * 14000 / $CONST;
        $set7Chirchiq408 = $ges7Chirchiq408[2] * 28000 / $CONST;
        $set7Chirchiq348 = $ges7Chirchiq348[2] * 42000 / $CONST;
        $set7Chirchiq363 = $ges7Chirchiq363[2] * 42000 / $CONST;

        $set7Chirchiq438 = $ges7Chirchiq438[2] * 120 / $kvt;
        $set7Chirchiq453 = $ges7Chirchiq453[2] * 120 / $kvt;

        $power7Chirchiq273 = $ges7Chirchiq273[2] * 40000 / $CONST;//active
        $reactive7Chirchiq274 = $ges7Chirchiq274[2] * 40000 / $CONST;//reactive
        $water7Chirchiq273 = $energy->getWater($power7Chirchiq273, $pressure, 0.95, 0.9);//water
        $kpd7Chirchiq273 = $energy->getKpd($power7Chirchiq273, $water7Chirchiq273, $pressure, 0.95);//kpd

        $power7Chirchiq288 = $ges7Chirchiq288[2] * 40000 / $CONST;//active
        $reactive7Chirchiq289 = $ges7Chirchiq289[2] * 40000 / $CONST;//reactive
        $water7Chirchiq288 = $energy->getWater($power7Chirchiq288, $pressure, 0.95, 0.9);//water
        $kpd7Chirchiq288 = $energy->getKpd($power7Chirchiq288, $water7Chirchiq288, $pressure, 0.95);//kpd

        $power7Chirchiq303 = $ges7Chirchiq303[2] * 40000 / $CONST;//active
        $reactive7Chirchiq304 = $ges7Chirchiq304[2] * 40000 / $CONST;//reactive
        $water7Chirchiq303 = $energy->getWater($power7Chirchiq303, $pressure, 0.95, 0.9);//water
        $kpd7Chirchiq303 = $energy->getKpd($power7Chirchiq303, $water7Chirchiq303, $pressure, 0.95);//kpd

        $power7Chirchiq318 = $ges7Chirchiq318[2] * 40000 / $CONST;//active
        $reactive7Chirchiq319 = $ges7Chirchiq319[2] * 40000 / $CONST;//reactive
        $water7Chirchiq318 = $energy->getWater($power7Chirchiq318, $pressure, 0.95, 0.9);//water
        $kpd7Chirchiq318 = $energy->getKpd($power7Chirchiq318, $water7Chirchiq318, $pressure, 0.95);//kpd

        $data = array(
            array("id" => 12, "value" => $ges7Chirchiq12[2]),
            array("id" => 39, "value" => $ges7Chirchiq39[2]),
            array("id" => 378, "value" => $set7Chirchiq378),
            array("id" => 333, "value" => $set7Chirchiq333),
            array("id" => 423, "value" => $set7Chirchiq423),
            array("id" => 393, "value" => $set7Chirchiq393),
            array("id" => 408, "value" => $set7Chirchiq408),
            array("id" => 348, "value" => $set7Chirchiq348),
            array("id" => 363, "value" => $set7Chirchiq363),

            array("id" => 386, "value" => $energy->getVoltages($ges7Chirchiq386[2], 350) > 0 ? $energy->getVoltages($ges7Chirchiq386[2], 350) :
                ($energy->getVoltages($ges7Chirchiq401[2], 350) > 0 ? $energy->getVoltages($ges7Chirchiq401[2], 350)  : $energy->getVoltages($ges7Chirchiq241[2], 350)) ),

            array("id" => 438, "value" => $set7Chirchiq438),
            array("id" => 453, "value" => $set7Chirchiq453),

            array("id" => 97, "value" => $ges7Chirchiq97[2] * 10 / $kvt),

            array("id" => 273, "value" => $power7Chirchiq273),//active
            array("id" => 274, "value" => $reactive7Chirchiq274),//reactive
            array("id" => 275, "value" => $kpd7Chirchiq273),//КПД
            array("id" => 276, "value" => 0),//HA
            array("id" => 277, "value" => $water7Chirchiq273),//water

            array("id" => 288, "value" => $power7Chirchiq288),//active
            array("id" => 289, "value" => $reactive7Chirchiq289),//reactive
            array("id" => 290, "value" => $kpd7Chirchiq288),//КПД
            array("id" => 291, "value" => 0),//HA
            array("id" => 292, "value" => $water7Chirchiq288),//water

            array("id" => 303, "value" => $power7Chirchiq303),//active
            array("id" => 304, "value" => $reactive7Chirchiq304),//reactive
            array("id" => 305, "value" => $kpd7Chirchiq303),//КПД
            array("id" => 306, "value" => 0),//HA
            array("id" => 307, "value" => $water7Chirchiq303),//water

            array("id" => 318, "value" => $power7Chirchiq318),//active
            array("id" => 319, "value" => $reactive7Chirchiq319),//reactive
            array("id" => 320, "value" => $kpd7Chirchiq318),//КПД
            array("id" => 321, "value" => 0),//HA
            array("id" => 322, "value" => $water7Chirchiq318),//water

            array("id" => 1, "value" => $power7Chirchiq273 + $power7Chirchiq288 + $power7Chirchiq303 + $power7Chirchiq318),
            array("id" => 2, "value" => $reactive7Chirchiq274 + $reactive7Chirchiq289 + $reactive7Chirchiq304 + $reactive7Chirchiq319),
            array("id" => 3, "value" => ((-1) * $set7Chirchiq378 > 0 ? $set7Chirchiq378 : 0) +
                                        ((-1) * $set7Chirchiq333 > 0 ? $set7Chirchiq333 : 0) +
                                        ((-1) * $set7Chirchiq423 > 0 ? $set7Chirchiq423 : 0) +
                                        ((-1) * $set7Chirchiq393 > 0 ? $set7Chirchiq393 : 0) +
                                        ((-1) * $set7Chirchiq408 > 0 ? $set7Chirchiq408 : 0) +
                                        ((-1) * $set7Chirchiq348 > 0 ? $set7Chirchiq348 : 0) +
                                        ((-1) * $set7Chirchiq363 > 0 ? $set7Chirchiq363 : 0)),
            array("id" => 4, "value" => ((-1) * $set7Chirchiq378 < 0 ? $set7Chirchiq378 : 0) +
                                        ((-1) * $set7Chirchiq333 < 0 ? $set7Chirchiq333 : 0) +
                                        ((-1) * $set7Chirchiq423 < 0 ? $set7Chirchiq423 : 0) +
                                        ((-1) * $set7Chirchiq393 < 0 ? $set7Chirchiq393 : 0) +
                                        ((-1) * $set7Chirchiq408 < 0 ? $set7Chirchiq408 : 0) +
                                        ((-1) * $set7Chirchiq348 < 0 ? $set7Chirchiq348 : 0) +
                                        ((-1) * $set7Chirchiq363 < 0 ? $set7Chirchiq363 : 0)),
            array("id" => 5, "value" => $set7Chirchiq438 + $set7Chirchiq453),
            array("id" => 6, "value" => $water7Chirchiq273 + $water7Chirchiq288 + $water7Chirchiq303 + $water7Chirchiq318),
            array("id" => 7, "value" => $ges7Chirchiq332[2] > 0 ? $ges7Chirchiq332[2] :
                ($ges7Chirchiq347[2] > 0 ? $ges7Chirchiq347[2] :
                    ($ges7Chirchiq362[2] > 0 ? $ges7Chirchiq362[2] : $ges7Chirchiq377[2]) ) ),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ГЭС-8)
    public function actionServer8()
    {
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 28])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges8Chirchiq573 = $this->getValue($data, "G573");
        $ges8Chirchiq588 = $this->getValue($data, "G588");
        $ges8Chirchiq603 = $this->getValue($data, "G603");
        $ges8Chirchiq543 = $this->getValue($data, "G543");
        $ges8Chirchiq558 = $this->getValue($data, "G558");
        $ges8Chirchiq528 = $this->getValue($data, "G528");
        $ges8Chirchiq468 = $this->getValue($data, "G468");
        $ges8Chirchiq469 = $this->getValue($data, "G469");
        $ges8Chirchiq483 = $this->getValue($data, "G483");
        $ges8Chirchiq484 = $this->getValue($data, "G484");
        $ges8Chirchiq498 = $this->getValue($data, "G498");
        $ges8Chirchiq499 = $this->getValue($data, "G499");
        $ges8Chirchiq513 = $this->getValue($data, "G513");
        $ges8Chirchiq514 = $this->getValue($data, "G514");
        $ges8Chirchiq618 = $this->getValue($data, "G618");
        $ges8Chirchiq633 = $this->getValue($data, "G633");
        $ges8Chirchiq581 = $this->getValue($data, "G581");
        $ges8Chirchiq536 = $this->getValue($data, "G536");
        $ges8Chirchiq476 = $this->getValue($data, "G476");
        $ges8Chirchiq572 = $this->getValue($data, "G572");
        $ges8Chirchiq527 = $this->getValue($data, "G527");
        $ges8Chirchiq467 = $this->getValue($data, "G467");
        $ges8Chirchiq617 = $this->getValue($data, "G617");
        $ges8Chirchiq491 = $this->getValue($data, "G491");
        $ges8Chirchiq506 = $this->getValue($data, "G506");
        $ges8Chirchiq521 = $this->getValue($data, "G521");
        $ges8Chirchiq497 = $this->getValue($data, "G497");
        $ges8Chirchiq512 = $this->getValue($data, "G512");
        $ges8Chirchiq482 = $this->getValue($data, "G482");

        $CONST = 1000000;
        $kvt = 1000;

        $set8Chirchiq573 = $ges8Chirchiq573[2] * 10500 / $CONST;
        $set8Chirchiq588 = $ges8Chirchiq588[2] * 28000 / $CONST;
        $set8Chirchiq603 = $ges8Chirchiq603[2] * 7200 / $CONST;
        $set8Chirchiq543 = $ges8Chirchiq543[2] * 165000 / $CONST;
        $set8Chirchiq558 = $ges8Chirchiq558[2] * 165000 / $CONST;
        $set8Chirchiq528 = $ges8Chirchiq528[2] * 165000 / $CONST;

        $set8Chirchiq618 = $ges8Chirchiq618[2] * 60 / $kvt;
        $set8Chirchiq633 = $ges8Chirchiq633[2] * 120 / $kvt;

        $power8Chirchiq468 = $ges8Chirchiq468[2] * 30000 / $CONST;//active
        $reactive8Chirchiq469 = $ges8Chirchiq469[2] * 30000 / $CONST;//reactive
        $water8Chirchiq468 = $energy->getWater($power8Chirchiq468, $pressure, 0.95, 0.8282);//water
        $kpd8Chirchiq468 = $energy->getKpd($power8Chirchiq468, $water8Chirchiq468, $pressure, 0.95);//kpd

        $power8Chirchiq483 = $ges8Chirchiq483[2] * 30000 / $CONST;//active
        $reactive8Chirchiq484 = $ges8Chirchiq484[2] * 30000 / $CONST;//reactive
        $water8Chirchiq483 = $energy->getWater($power8Chirchiq483, $pressure, 0.95, 0.8282);//water
        $kpd8Chirchiq483 = $energy->getKpd($power8Chirchiq483, $water8Chirchiq483, $pressure, 0.95);//kpd

        $power8Chirchiq498 = $ges8Chirchiq498[2] * 30000 / $CONST;//active
        $reactive8Chirchiq499 = $ges8Chirchiq499[2] * 30000 / $CONST;//reactive
        $water8Chirchiq498 = $energy->getWater($power8Chirchiq498, $pressure, 0.95, 0.8282);//water
        $kpd8Chirchiq498 = $energy->getKpd($power8Chirchiq498, $water8Chirchiq498, $pressure, 0.95);//kpd

        $power8Chirchiq513 = $ges8Chirchiq513[2] * 40000 / $CONST;//active
        $reactive8Chirchiq514 = $ges8Chirchiq514[2] * 40000 / $CONST;//reactive
        $water8Chirchiq513 = $energy->getWater($power8Chirchiq513, $pressure, 0.95, 0.8282);//water
        $kpd8Chirchiq513 = $energy->getKpd($power8Chirchiq513, $water8Chirchiq513, $pressure, 0.95);//kpd

        $data = array(
            array("id" => 573, "value" => $set8Chirchiq573),
            array("id" => 588, "value" => $set8Chirchiq588),
            array("id" => 603, "value" => $set8Chirchiq603),
            array("id" => 543, "value" => $set8Chirchiq543),
            array("id" => 558, "value" => $set8Chirchiq558),
            array("id" => 528, "value" => $set8Chirchiq528),

            array("id" => 581, "value" => $energy->getVoltages($ges8Chirchiq581[2], 350)),
            array("id" => 536, "value" => $energy->getVoltages($ges8Chirchiq536[2], 1100)),
            array("id" => 476, "value" => $energy->getVoltages($ges8Chirchiq476[2], 100) > 0 ? $energy->getVoltages($ges8Chirchiq476[2], 100) : ($energy->getVoltages($ges8Chirchiq506[2], 100) > 0 ? $energy->getVoltages($ges8Chirchiq506[2], 100) : ($energy->getVoltages($ges8Chirchiq491[2], 100) > 0 ? $energy->getVoltages($ges8Chirchiq491[2], 100) : $energy->getVoltages($ges8Chirchiq521[2], 100)))),

            array("id" => 618, "value" => $set8Chirchiq618),
            array("id" => 633, "value" => $set8Chirchiq633),

            array("id" => 468, "value" => $power8Chirchiq468),//active
            array("id" => 469, "value" => $reactive8Chirchiq469),//reactive
            array("id" => 470, "value" => $kpd8Chirchiq468),//КПД
            array("id" => 471, "value" => 0),//HA
            array("id" => 472, "value" => $water8Chirchiq468),//water

            array("id" => 483, "value" => $power8Chirchiq483),//active
            array("id" => 484, "value" => $reactive8Chirchiq484),//reactive
            array("id" => 485, "value" => $kpd8Chirchiq483),//КПД
            array("id" => 486, "value" => 0),//HA
            array("id" => 487, "value" => $water8Chirchiq483),//water

            array("id" => 498, "value" => $power8Chirchiq498),//active
            array("id" => 499, "value" => $reactive8Chirchiq499),//reactive
            array("id" => 500, "value" => $kpd8Chirchiq498),//КПД
            array("id" => 501, "value" => 0),//HA
            array("id" => 502, "value" => $water8Chirchiq498),//water

            array("id" => 513, "value" => $power8Chirchiq513),//active
            array("id" => 514, "value" => $reactive8Chirchiq514),//reactive
            array("id" => 515, "value" => $kpd8Chirchiq513),//КПД
            array("id" => 516, "value" => 0),//HA
            array("id" => 517, "value" => $water8Chirchiq513),//water

            array("id" => 1, "value" => $power8Chirchiq468 + $power8Chirchiq483 + $power8Chirchiq498 + $power8Chirchiq513),
            array("id" => 2, "value" => $reactive8Chirchiq469 + $reactive8Chirchiq484 + $reactive8Chirchiq499 + $reactive8Chirchiq514),
            array("id" => 3, "value" => (-1 * $set8Chirchiq573 > 0 ? $set8Chirchiq573 : 0) +
                                        (-1 * $set8Chirchiq588 > 0 ? $set8Chirchiq588 : 0) +
                                        (-1 * $set8Chirchiq603 > 0 ? $set8Chirchiq603 : 0) +
                                        (-1 * $set8Chirchiq543 > 0 ? $set8Chirchiq543 : 0) +
                                        (-1 * $set8Chirchiq558 > 0 ? $set8Chirchiq558 : 0) +
                                        (-1 * $set8Chirchiq528 > 0 ? $set8Chirchiq528 : 0)),
            array("id" => 4, "value" => (-1 * $set8Chirchiq573 < 0 ? $set8Chirchiq573 : 0) +
                                        (-1 * $set8Chirchiq588 < 0 ? $set8Chirchiq588 : 0) +
                                        (-1 * $set8Chirchiq603 < 0 ? $set8Chirchiq603 : 0) +
                                        (-1 * $set8Chirchiq543 < 0 ? $set8Chirchiq543 : 0) +
                                        (-1 * $set8Chirchiq558 < 0 ? $set8Chirchiq558 : 0) +
                                        (-1 * $set8Chirchiq528 < 0 ? $set8Chirchiq528 : 0)),
            array("id" => 5, "value" => $set8Chirchiq618 + $set8Chirchiq633),
            array("id" => 6, "value" => $water8Chirchiq468 + $water8Chirchiq483 + $water8Chirchiq498 + $water8Chirchiq513),
            array("id" => 7, "value" => $ges8Chirchiq572[2] > 0 ? $ges8Chirchiq572[2] :
                ($ges8Chirchiq527[2] > 0 ? $ges8Chirchiq527[2] :
                    ($ges8Chirchiq467[2] > 0 ? $ges8Chirchiq467[2] :
                        ($ges8Chirchiq497[2] > 0 ? $ges8Chirchiq497[2] :
                            ($ges8Chirchiq482[2] > 0 ? $ges8Chirchiq482[2] : $ges8Chirchiq512[2]))))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ГЭС-10)
    public function actionServer10()
    {
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 31])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        header('Content-Type: application/json');
        $data = $this->fetchData();

        $ges10Chirchiq654 = $this->getValue($data, "G654");
        $ges10Chirchiq656 = $this->getValue($data, "G656");
        $ges10Chirchiq677 = $this->getValue($data, "G677");
        $ges10Chirchiq679 = $this->getValue($data, "G679");
        $ges10Chirchiq700 = $this->getValue($data, "G700");
        $ges10Chirchiq701 = $this->getValue($data, "G701");
        $ges10Chirchiq723 = $this->getValue($data, "G723");
        $ges10Chirchiq724 = $this->getValue($data, "G724");
        $ges10Chirchiq770 = $this->getValue($data, "G770");
        $ges10Chirchiq769 = $this->getValue($data, "G769");
        $ges10Chirchiq747 = $this->getValue($data, "G747");
        $ges10Chirchiq746 = $this->getValue($data, "G746");
        $ges10Chirchiq816 = $this->getValue($data, "G816");
        $ges10Chirchiq815 = $this->getValue($data, "G815");
        $ges10Chirchiq793 = $this->getValue($data, "G793");
        $ges10Chirchiq792 = $this->getValue($data, "G792");
        $ges10Chirchiq839 = $this->getValue($data, "G839");
        $ges10Chirchiq838 = $this->getValue($data, "G838");
        $ges10Chirchiq931 = $this->getValue($data, "G931");
        $ges10Chirchiq932 = $this->getValue($data, "G932");
        $ges10Chirchiq953 = $this->getValue($data, "G953");
        $ges10Chirchiq209 = $this->getValue($data, "B209");
        $ges10Chirchiq861 = $this->getValue($data, "G861");
        $ges10Chirchiq884 = $this->getValue($data, "G884");
        $ges10Chirchiq694 = $this->getValue($data, "G694");
        $ges10Chirchiq740 = $this->getValue($data, "G740");
        $ges10Chirchiq786 = $this->getValue($data, "G786");
        $ges10Chirchiq693 = $this->getValue($data, "G693");
        $ges10Chirchiq716 = $this->getValue($data, "G716");
        $ges10Chirchiq808 = $this->getValue($data, "G808");
        $ges10Chirchiq831 = $this->getValue($data, "G831");
        $ges10Chirchiq762 = $this->getValue($data, "G762");
        $ges10Chirchiq907 = $this->getValue($data, "G907");

        $CONST = 1000000;
        $kvt = 1000;

        $set10Chirchiq700 = $ges10Chirchiq700[2] * 210000 / $CONST;
        $set10Chirchiq701 = $ges10Chirchiq701[2] * 210000 / $CONST;
        $set10Chirchiq723 = $ges10Chirchiq723[2] * 210000 / $CONST;
        $set10Chirchiq724 = $ges10Chirchiq724[2] * 210000 / $CONST;
        $set10Chirchiq770 = $ges10Chirchiq770[2] * 210000 / $CONST;
        $set10Chirchiq769 = $ges10Chirchiq769[2] * 210000 / $CONST;
        $set10Chirchiq747 = $ges10Chirchiq747[2] * 210000 / $CONST;
        $set10Chirchiq746 = $ges10Chirchiq746[2] * 210000 / $CONST;
        $set10Chirchiq816 = $ges10Chirchiq816[2] * 210000 / $CONST;
        $set10Chirchiq815 = $ges10Chirchiq815[2] * 210000 / $CONST;
        $set10Chirchiq793 = $ges10Chirchiq793[2] * 210000 / $CONST;
        $set10Chirchiq792 = $ges10Chirchiq792[2] * 210000 / $CONST;
        $set10Chirchiq839 = $ges10Chirchiq839[2] * 140000 / $CONST;
        $set10Chirchiq838 = $ges10Chirchiq838[2] * 140000 / $CONST;
        $set10Chirchiq931 = $ges10Chirchiq931[2] * 140000 / $CONST;
        $set10Chirchiq932 = $ges10Chirchiq932[2] * 140000 / $CONST;
        $set10Chirchiq953 = $ges10Chirchiq953[2] * 280000 / $CONST;

        $set10Chirchiq861 = $ges10Chirchiq861[2] * 350 / $kvt;
        $set10Chirchiq884 = $ges10Chirchiq884[2] * 350 / $kvt;

        $energy = new Energy();
        $power10Chirchiq654 = $ges10Chirchiq654[2] * 96000 / $CONST;//active
        $reactive10Chirchiq656 = $ges10Chirchiq656[2] * 96000 / $CONST;//reactive
        $water10Chirchiq654 = $energy->getWater($power10Chirchiq654, $pressure, 0.95, 0.86);//water
        $kpd10Chirchiq654 = $energy->getKpd($power10Chirchiq654, $water10Chirchiq654, $pressure, 0.95);//kpd

        $power10Chirchiq677 = $ges10Chirchiq677[2] * 250000 / $CONST;//active
        $reactive10Chirchiq679 = $ges10Chirchiq679[2] * 250000 / $CONST;//reactive
        $water10Chirchiq677 = $energy->getWater($power10Chirchiq677, $pressure, 0.96, 0.921);//water
        $kpd10Chirchiq677 = $energy->getKpd($power10Chirchiq677, $water10Chirchiq677, $pressure, 0.96);//kpd

        $data = array(
            array("id" => 700, "value" => $set10Chirchiq700),
            array("id" => 701, "value" => $set10Chirchiq701),
            array("id" => 723, "value" => $set10Chirchiq723),
            array("id" => 724, "value" => $set10Chirchiq724),
            array("id" => 770, "value" => $set10Chirchiq770),
            array("id" => 769, "value" => $set10Chirchiq769),
            array("id" => 747, "value" => $set10Chirchiq747),
            array("id" => 746, "value" => $set10Chirchiq746),
            array("id" => 816, "value" => $set10Chirchiq816),
            array("id" => 815, "value" => $set10Chirchiq815),
            array("id" => 793, "value" => $set10Chirchiq793),
            array("id" => 792, "value" => $set10Chirchiq792),
            array("id" => 839, "value" => $set10Chirchiq839),
            array("id" => 838, "value" => $set10Chirchiq838),
            array("id" => 931, "value" => $set10Chirchiq931),
            array("id" => 932, "value" => $set10Chirchiq932),
            array("id" => 953, "value" => $set10Chirchiq953),

            array("id" => 209, "value" => $ges10Chirchiq209[2] * 4000 / $kvt),
            array("id" => 907, "value" => $ges10Chirchiq907[2] * 4000 / $kvt),

            array("id" => 694, "value" => $energy->getVoltages($ges10Chirchiq694[2], 350) > 0 ? $energy->getVoltages($ges10Chirchiq694[2], 350) : ($energy->getVoltages($ges10Chirchiq740[2], 350) > 0 ? $energy->getVoltages($ges10Chirchiq740[2], 350) : $energy->getVoltages($ges10Chirchiq786[2], 350))),

            array("id" => 861, "value" => $set10Chirchiq861),
            array("id" => 884, "value" => $set10Chirchiq884),

            array("id" => 654, "value" => $power10Chirchiq654),//active
            array("id" => 656, "value" => $reactive10Chirchiq656),//reactive
            array("id" => 657, "value" => $kpd10Chirchiq654),//КПД
            array("id" => 658, "value" => 0),//HA
            array("id" => 659, "value" => $water10Chirchiq654),//water

            array("id" => 677, "value" => $power10Chirchiq677),//active
            array("id" => 679, "value" => $reactive10Chirchiq679),//reactive
            array("id" => 680, "value" => $kpd10Chirchiq677),//КПД
            array("id" => 681, "value" => 0),//HA
            array("id" => 682, "value" => $water10Chirchiq677),//water

            array("id" => 1, "value" => $power10Chirchiq654 + $power10Chirchiq677),
            array("id" => 2, "value" => $reactive10Chirchiq656 + $reactive10Chirchiq679),
            array("id" => 3, "value" => ($set10Chirchiq701) +
                                        ($set10Chirchiq723) +
                                        ($set10Chirchiq746) +
                                        ($set10Chirchiq770) +
                                        ($set10Chirchiq793) +
                                        ($set10Chirchiq816) +
                                        ($set10Chirchiq839)),
            array("id" => 4, "value" => ($set10Chirchiq700) +
                                        ($set10Chirchiq724) +
                                        ($set10Chirchiq747) +
                                        ($set10Chirchiq769) +
                                        ($set10Chirchiq792) +
                                        ($set10Chirchiq815) +
                                        ($set10Chirchiq838)),
            array("id" => 5, "value" => $set10Chirchiq861 + $set10Chirchiq884),
            array("id" => 6, "value" => $water10Chirchiq654 + $water10Chirchiq677),
            array("id" => 7, "value" => $ges10Chirchiq693[2] > 0 ? $ges10Chirchiq693[2] : ($ges10Chirchiq716[2] > 0 ? $ges10Chirchiq716[2] : ($ges10Chirchiq762[2] > 0 ? $ges10Chirchiq762[2] : ($ges10Chirchiq808[2] > 0 ? $ges10Chirchiq808[2] : ($ges10Chirchiq831[2]))))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ГЭС-46)
    public function actionServer46()
    {
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 30])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();

        $ges46Chirchiq12 = $this->getValue($data, "G12");
        $ges46Chirchiq39 = $this->getValue($data, "G39");
        $ges46Chirchiq15 = $this->getValue($data, "G15");
        $ges46Chirchiq2 = $this->getValue($data, "G2");
        $ges46Chirchiq177 = $this->getValue($data, "G177");
        $ges46Chirchiq204 = $this->getValue($data, "G204");
        $ges46Chirchiq137 = $this->getValue($data, "G137");
        $ges46Chirchiq42 = $this->getValue($data, "G42");
        $ges46Chirchiq29 = $this->getValue($data, "G29");
        $ges46Chirchiq69 = $this->getValue($data, "G69");
        $ges46Chirchiq110 = $this->getValue($data, "G110");
        $ges46Chirchiq147 = $this->getValue($data, "G147");
        $ges46Chirchiq120 = $this->getValue($data, "G120");
        $ges46Chirchiq201 = $this->getValue($data, "G201");
        $ges46Chirchiq202 = $this->getValue($data, "G202");
        $ges46Chirchiq174 = $this->getValue($data, "G174");
        $ges46Chirchiq175 = $this->getValue($data, "G175");
        $ges46Chirchiq66 = $this->getValue($data, "G66");
        $ges46Chirchiq67 = $this->getValue($data, "G67");
        $ges46Chirchiq93 = $this->getValue($data, "G93");
        $ges46Chirchiq94 = $this->getValue($data, "G94");

        $CONST = 1000000;
        $kvt = 1000;

        $set46Chirchiq12 = $ges46Chirchiq12[2] * 21000 / $CONST;
        $set46Chirchiq39 = $ges46Chirchiq39[2] * 21000 / $CONST;
        $set46Chirchiq147 = $ges46Chirchiq147[2] * 100 / $kvt;
        $set46Chirchiq120 = $ges46Chirchiq120[2] * 100 / $kvt;

        $power46Chirchiq201 = $ges46Chirchiq201[2] * 3780 / $CONST;//active
        $reactive46Chirchiq202 = $ges46Chirchiq202[2] * 3780 / $CONST;//reactive
        $water46Chirchiq201 = $energy->getWater($power46Chirchiq201, $pressure, 0.96, 0.897);//water
        $kpd46Chirchiq201 = $energy->getKpd($power46Chirchiq201, $water46Chirchiq201, $pressure, 0.96);//kpd

        $power46Chirchiq174 = $ges46Chirchiq174[2] * 3780 / $CONST;//active
        $reactive46Chirchiq175 = $ges46Chirchiq175[2] * 3780 / $CONST;//reactive
        $water46Chirchiq174 = $energy->getWater($power46Chirchiq174, $pressure, 0.96, 0.897);//water
        $kpd46Chirchiq174 = $energy->getKpd($power46Chirchiq174, $water46Chirchiq174, $pressure, 0.96);//kpd

        $power46Chirchiq93 = $ges46Chirchiq93[2] * 3780 / $CONST;//active
        $reactive46Chirchiq94 = $ges46Chirchiq94[2] * 3780 / $CONST;//reactive
        $water46Chirchiq93 = $energy->getWater($power46Chirchiq93, $pressure, 0.96, 0.897);//water
        $kpd46Chirchiq93 = $energy->getKpd($power46Chirchiq93, $water46Chirchiq93, $pressure, 0.96);//kpd

        $power46Chirchiq66 = $ges46Chirchiq66[2] * 3780 / $CONST;//active
        $reactive46Chirchiq67 = $ges46Chirchiq67[2] * 3780 / $CONST;//reactive
        $water46Chirchiq66 = $energy->getWater($power46Chirchiq66, $pressure, 0.96, 0.897);//water
        $kpd46Chirchiq66 = $energy->getKpd($power46Chirchiq66, $water46Chirchiq66, $pressure, 0.96);//kpd

        $data = array(
            array("id" => 12, "value" => $set46Chirchiq12),
            array("id" => 39, "value" => $set46Chirchiq39),

            array("id" => 15, "value" => $energy->getVoltages($ges46Chirchiq15[2], 350)),
            array("id" => 42, "value" => $energy->getVoltages($ges46Chirchiq42[2], 350)),
            array("id" => 177, "value" => $energy->getVoltages($ges46Chirchiq177[2], 63) > 0 ? $energy->getVoltages($ges46Chirchiq177[2], 63) : $energy->getVoltages($ges46Chirchiq204[2], 63)),
            array("id" => 69, "value" => $energy->getVoltages($ges46Chirchiq69[2], 63) > 0 ? $energy->getVoltages($ges46Chirchiq69[2], 63) : $energy->getVoltages($ges46Chirchiq42[2], 350)),

            array("id" => 147, "value" => $set46Chirchiq147),
            array("id" => 120, "value" => $set46Chirchiq120),

            array("id" => 201, "value" => $power46Chirchiq201),//active
            array("id" => 202, "value" => $reactive46Chirchiq202),//reactive
            array("id" => 203, "value" => $kpd46Chirchiq201),//КПД
            array("id" => 204, "value" => 0),//HA
            array("id" => 205, "value" => $water46Chirchiq201),//water

            array("id" => 174, "value" => $power46Chirchiq174),//active
            array("id" => 175, "value" => $reactive46Chirchiq175),//reactive
            array("id" => 176, "value" => $kpd46Chirchiq174),//КПД
            array("id" => 179, "value" => 0),//HA
            array("id" => 178, "value" => $water46Chirchiq174),//water

            array("id" => 93, "value" => $power46Chirchiq93),//active
            array("id" => 94, "value" => $reactive46Chirchiq94),//reactive
            array("id" => 95, "value" => $kpd46Chirchiq93),//КПД
            array("id" => 96, "value" => 0),//HA
            array("id" => 97, "value" => $water46Chirchiq93),//water

            array("id" => 66, "value" => $power46Chirchiq66),//active
            array("id" => 67, "value" => $reactive46Chirchiq67),//reactive
            array("id" => 68, "value" => $kpd46Chirchiq66),//КПД
            array("id" => 71, "value" => 0),//HA
            array("id" => 70, "value" => $water46Chirchiq66),//water

            array("id" => 1, "value" => $power46Chirchiq201 + $power46Chirchiq174 + $power46Chirchiq93 + $power46Chirchiq66),
            array("id" => 2, "value" => $reactive46Chirchiq202 + $reactive46Chirchiq175 + $reactive46Chirchiq94 + $reactive46Chirchiq67),
            array("id" => 3, "value" => ($set46Chirchiq12 > 0 ? $set46Chirchiq12 : 0) + ($set46Chirchiq39 > 0 ? $set46Chirchiq39 : 0)),
            array("id" => 4, "value" => ($set46Chirchiq12 < 0 ? $set46Chirchiq12 : 0) + ($set46Chirchiq39 < 0 ? $set46Chirchiq39 : 0)),
            array("id" => 5, "value" => $set46Chirchiq147 + $set46Chirchiq120),
            array("id" => 6, "value" => $water46Chirchiq201 + $water46Chirchiq174 + $water46Chirchiq93 + $water46Chirchiq66),
            array("id" => 7, "value" => $ges46Chirchiq2[2] > 0 ? $ges46Chirchiq2[2] :
                ($ges46Chirchiq29[2] > 0 ? $ges46Chirchiq29[2] :
                    ($ges46Chirchiq137[2] > 0 ? $ges46Chirchiq137[2] : $ges46Chirchiq110[2]))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    public function actionServer()
    {
        // Optimize Water query - avoid multiple queries
        $water7 = Water::find()->where(['id_organization' => 29])->orderBy(['date' => SORT_DESC])->one();
        $upBef7 = $water7 ? $water7['up_bef'] : 0;
        $downBef7 = $water7 ? $water7['down_bef'] : 0;
        $pressure7 = $upBef7 - $downBef7;

        $energy = new Energy();
        $CONST = 1000000;
        $kvt = 1000;

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges7Chirchiq378 = $this->getValue($data, "G378");
        $ges7Chirchiq333 = $this->getValue($data, "G333");
        $ges7Chirchiq423 = $this->getValue($data, "G423");
        $ges7Chirchiq393 = $this->getValue($data, "G393");
        $ges7Chirchiq408 = $this->getValue($data, "G408");
        $ges7Chirchiq348 = $this->getValue($data, "G348");
        $ges7Chirchiq363 = $this->getValue($data, "G363");
        $ges7Chirchiq438 = $this->getValue($data, "G438");
        $ges7Chirchiq453 = $this->getValue($data, "G453");
        $ges7Chirchiq273 = $this->getValue($data, "G273");
        $ges7Chirchiq274 = $this->getValue($data, "G274");
        $ges7Chirchiq288 = $this->getValue($data, "G288");
        $ges7Chirchiq289 = $this->getValue($data, "G289");
        $ges7Chirchiq303 = $this->getValue($data, "G303");
        $ges7Chirchiq304 = $this->getValue($data, "G304");
        $ges7Chirchiq318 = $this->getValue($data, "G318");
        $ges7Chirchiq319 = $this->getValue($data, "G319");

        $set7Chirchiq378 = $ges7Chirchiq378[2] * 42000 / $CONST;
        $set7Chirchiq333 = $ges7Chirchiq333[2] * 42000 / $CONST;
        $set7Chirchiq423 = $ges7Chirchiq423[2] * 28000 / $CONST;
        $set7Chirchiq393 = $ges7Chirchiq393[2] * 14000 / $CONST;
        $set7Chirchiq408 = $ges7Chirchiq408[2] * 28000 / $CONST;
        $set7Chirchiq348 = $ges7Chirchiq348[2] * 42000 / $CONST;
        $set7Chirchiq363 = $ges7Chirchiq363[2] * 42000 / $CONST;

        $set7Chirchiq438 = $ges7Chirchiq438[2] * 120 / $kvt;
        $set7Chirchiq453 = $ges7Chirchiq453[2] * 120 / $kvt;

        $power7Chirchiq273 = $ges7Chirchiq273[2] * 40000 / $CONST;//active
        $reactive7Chirchiq274 = $ges7Chirchiq274[2] * 40000 / $CONST;//reactive
        $water7Chirchiq273 = $energy->getWater($power7Chirchiq273, $pressure7, 0.95, 0.9);//water
        $kpd7Chirchiq273 = $energy->getKpd($power7Chirchiq273, $water7Chirchiq273, $pressure7, 0.95);//kpd

        $power7Chirchiq288 = $ges7Chirchiq288[2] * 40000 / $CONST;//active
        $reactive7Chirchiq289 = $ges7Chirchiq289[2] * 40000 / $CONST;//reactive
        $water7Chirchiq288 = $energy->getWater($power7Chirchiq288, $pressure7, 0.95, 0.9);//water
        $kpd7Chirchiq288 = $energy->getKpd($power7Chirchiq288, $water7Chirchiq288, $pressure7, 0.95);//kpd

        $power7Chirchiq303 = $ges7Chirchiq303[2] * 40000 / $CONST;//active
        $reactive7Chirchiq304 = $ges7Chirchiq304[2] * 40000 / $CONST;//reactive
        $water7Chirchiq303 = $energy->getWater($power7Chirchiq303, $pressure7, 0.95, 0.9);//water
        $kpd7Chirchiq303 = $energy->getKpd($power7Chirchiq303, $water7Chirchiq303, $pressure7, 0.95);//kpd

        $power7Chirchiq318 = $ges7Chirchiq318[2] * 40000 / $CONST;//active
        $reactive7Chirchiq319 = $ges7Chirchiq319[2] * 40000 / $CONST;//reactive
        $water7Chirchiq318 = $energy->getWater($power7Chirchiq318, $pressure7, 0.95, 0.9);//water
        $kpd7Chirchiq318 = $energy->getKpd($power7Chirchiq318, $water7Chirchiq318, $pressure7, 0.95);//kpd

        $ges7ChirchiqActive = $power7Chirchiq273 + $power7Chirchiq288 + $power7Chirchiq303 + $power7Chirchiq318;
        $ges7ChirchiqReactive = $reactive7Chirchiq274 + $reactive7Chirchiq289 + $reactive7Chirchiq304 + $reactive7Chirchiq319;
        $ges7ChirchiqActiveOut = ((-1) * $set7Chirchiq378 > 0 ? $set7Chirchiq378 : 0) +
                                ((-1) * $set7Chirchiq333 > 0 ? $set7Chirchiq333 : 0) +
                                ((-1) * $set7Chirchiq423 > 0 ? $set7Chirchiq423 : 0) +
                                ((-1) * $set7Chirchiq393 > 0 ? $set7Chirchiq393 : 0) +
                                ((-1) * $set7Chirchiq408 > 0 ? $set7Chirchiq408 : 0) +
                                ((-1) * $set7Chirchiq348 > 0 ? $set7Chirchiq348 : 0) +
                                ((-1) * $set7Chirchiq363 > 0 ? $set7Chirchiq363 : 0);
        $ges7ChirchiqActiveIn = ((-1) * $set7Chirchiq378 < 0 ? $set7Chirchiq378 : 0) +
                                ((-1) * $set7Chirchiq333 < 0 ? $set7Chirchiq333 : 0) +
                                ((-1) * $set7Chirchiq423 < 0 ? $set7Chirchiq423 : 0) +
                                ((-1) * $set7Chirchiq393 < 0 ? $set7Chirchiq393 : 0) +
                                ((-1) * $set7Chirchiq408 < 0 ? $set7Chirchiq408 : 0) +
                                ((-1) * $set7Chirchiq348 < 0 ? $set7Chirchiq348 : 0) +
                                ((-1) * $set7Chirchiq363 < 0 ? $set7Chirchiq363 : 0);
        $ges7ChirchiqOwnNeeds = $set7Chirchiq438 + $set7Chirchiq453;
        $ges7ChirchiqWater = $kpd7Chirchiq273 + $kpd7Chirchiq288 + $kpd7Chirchiq303 + $kpd7Chirchiq318;
        $ges7ChirchiqAggregateTrue = ($ges7Chirchiq273[2] != 0 ? 1 : 0) + ($ges7Chirchiq288[2] != 0 ? 1 : 0) + ($ges7Chirchiq303[2] != 0 ? 1 : 0) + ($ges7Chirchiq318[2] != 0 ? 1 : 0);
        $ges7ChirchiqAggregateError = 0;
        $ges7ChirchiqAggregateFalse = ($ges7Chirchiq273[2] == 0 ? 1 : 0) + ($ges7Chirchiq288[2] == 0 ? 1 : 0)  + ($ges7Chirchiq303[2] == 0 ? 1 : 0)  + ($ges7Chirchiq318[2] == 0 ? 1 : 0) - $ges7ChirchiqAggregateError;

        // Optimize Water query - avoid multiple queries
        $water8 = Water::find()->where(['id_organization' => 28])->orderBy(['date' => SORT_DESC])->one();
        $upBef8 = $water8 ? $water8['up_bef'] : 0;
        $downBef8 = $water8 ? $water8['down_bef'] : 0;
        $pressure8 = $upBef8 - $downBef8;

        $ges8Chirchiq573 = $this->getValue($data, "G573");
        $ges8Chirchiq588 = $this->getValue($data, "G588");
        $ges8Chirchiq603 = $this->getValue($data, "G603");
        $ges8Chirchiq543 = $this->getValue($data, "G543");
        $ges8Chirchiq558 = $this->getValue($data, "G558");
        $ges8Chirchiq528 = $this->getValue($data, "G528");
        $ges8Chirchiq468 = $this->getValue($data, "G468");
        $ges8Chirchiq469 = $this->getValue($data, "G469");
        $ges8Chirchiq483 = $this->getValue($data, "G483");
        $ges8Chirchiq484 = $this->getValue($data, "G484");
        $ges8Chirchiq498 = $this->getValue($data, "G498");
        $ges8Chirchiq499 = $this->getValue($data, "G499");
        $ges8Chirchiq513 = $this->getValue($data, "G513");
        $ges8Chirchiq514 = $this->getValue($data, "G514");
        $ges8Chirchiq618 = $this->getValue($data, "G618");
        $ges8Chirchiq633 = $this->getValue($data, "G633");

        $set8Chirchiq573 = $ges8Chirchiq573[2] * 10500 / $CONST;
        $set8Chirchiq588 = $ges8Chirchiq588[2] * 28000 / $CONST;
        $set8Chirchiq603 = $ges8Chirchiq603[2] * 7200 / $CONST;
        $set8Chirchiq543 = $ges8Chirchiq543[2] * 165000 / $CONST;
        $set8Chirchiq558 = $ges8Chirchiq558[2] * 165000 / $CONST;
        $set8Chirchiq528 = $ges8Chirchiq528[2] * 165000 / $CONST;

        $set8Chirchiq618 = $ges8Chirchiq618[2] * 60 / $kvt;
        $set8Chirchiq633 = $ges8Chirchiq633[2] * 120 / $kvt;

        $power8Chirchiq468 = $ges8Chirchiq468[2] * 30000 / $CONST;//active
        $reactive8Chirchiq469 = $ges8Chirchiq469[2] * 30000 / $CONST;//reactive
        $water8Chirchiq468 = $energy->getWater($power8Chirchiq468, $pressure8, 0.95, 0.8282);//water

        $power8Chirchiq483 = $ges8Chirchiq483[2] * 30000 / $CONST;//active
        $reactive8Chirchiq484 = $ges8Chirchiq484[2] * 30000 / $CONST;//reactive
        $water8Chirchiq483 = $energy->getWater($power8Chirchiq483, $pressure8, 0.95, 0.8282);//water

        $power8Chirchiq498 = $ges8Chirchiq498[2] * 30000 / $CONST;//active
        $reactive8Chirchiq499 = $ges8Chirchiq499[2] * 30000 / $CONST;//reactive
        $water8Chirchiq498 = $energy->getWater($power8Chirchiq498, $pressure8, 0.95, 0.8282);//water

        $power8Chirchiq513 = $ges8Chirchiq513[2] * 40000 / $CONST;//active
        $reactive8Chirchiq514 = $ges8Chirchiq514[2] * 40000 / $CONST;//reactive
        $water8Chirchiq513 = $energy->getWater($power8Chirchiq513, $pressure8, 0.95, 0.8282);//water

        $ges8ChirchiqActive = $power8Chirchiq468 + $power8Chirchiq483 + $power8Chirchiq498 + $power8Chirchiq513;
        $ges8ChirchiqReactive = $reactive8Chirchiq469 + $reactive8Chirchiq484 + $reactive8Chirchiq499 + $reactive8Chirchiq514;
        $ges8ChirchiqActiveOut = (-1 * $set8Chirchiq573 > 0 ? $set8Chirchiq573 : 0) +
            (-1 * $set8Chirchiq588 > 0 ? $set8Chirchiq588 : 0) +
            (-1 * $set8Chirchiq603 > 0 ? $set8Chirchiq603 : 0) +
            (-1 * $set8Chirchiq543 > 0 ? $set8Chirchiq543 : 0) +
            (-1 * $set8Chirchiq558 > 0 ? $set8Chirchiq558 : 0) +
            (-1 * $set8Chirchiq528 > 0 ? $set8Chirchiq528 : 0);
        $ges8ChirchiqActiveIn = (-1 * $set8Chirchiq573 < 0 ? $set8Chirchiq573 : 0) +
            (-1 * $set8Chirchiq588 < 0 ? $set8Chirchiq588 : 0) +
            (-1 * $set8Chirchiq603 < 0 ? $set8Chirchiq603 : 0) +
            (-1 * $set8Chirchiq543 < 0 ? $set8Chirchiq543 : 0) +
            (-1 * $set8Chirchiq558 < 0 ? $set8Chirchiq558 : 0) +
            (-1 * $set8Chirchiq528 < 0 ? $set8Chirchiq528 : 0);
        $ges8ChirchiqOwnNeeds = $set8Chirchiq618 + $set8Chirchiq633;
        $ges8ChirchiqWater = $water8Chirchiq468 + $water8Chirchiq483 + $water8Chirchiq498 + $water8Chirchiq513;
        $ges8ChirchiqAggregateTrue = ($ges8Chirchiq468[2] != 0 ? 1 : 0) + ($ges8Chirchiq483[2] != 0 ? 1 : 0) + ($ges8Chirchiq498[2] != 0 ? 1 : 0) + ($ges8Chirchiq513[2] != 0 ? 1 : 0);
        $ges8ChirchiqAggregateError = 1;
        $ges8ChirchiqAggregateFalse = ($ges8Chirchiq468[2] == 0 ? 1 : 0) + ($ges8Chirchiq483[2] == 0 ? 1 : 0)  + ($ges8Chirchiq498[2] == 0 ? 1 : 0)  + ($ges8Chirchiq513[2] == 0 ? 1 : 0) - $ges8ChirchiqAggregateError;

        $water10 = Water::find()->where(['id_organization' => 31])->orderBy(['date' => SORT_DESC])->one();
        $upBef10 = $water10 ? $water10['up_bef'] : 0;
        $downBef10 = $water10 ? $water10['down_bef'] : 0;
        $pressure10 = $upBef10 - $downBef10;

        $ges10Chirchiq654 = $this->getValue($data, "G654");
        $ges10Chirchiq656 = $this->getValue($data, "G656");
        $ges10Chirchiq677 = $this->getValue($data, "G677");
        $ges10Chirchiq679 = $this->getValue($data, "G679");
        $ges10Chirchiq700 = $this->getValue($data, "G700");
        $ges10Chirchiq701 = $this->getValue($data, "G701");
        $ges10Chirchiq723 = $this->getValue($data, "G723");
        $ges10Chirchiq724 = $this->getValue($data, "G724");
        $ges10Chirchiq770 = $this->getValue($data, "G770");
        $ges10Chirchiq769 = $this->getValue($data, "G769");
        $ges10Chirchiq747 = $this->getValue($data, "G747");
        $ges10Chirchiq746 = $this->getValue($data, "G746");
        $ges10Chirchiq816 = $this->getValue($data, "G816");
        $ges10Chirchiq815 = $this->getValue($data, "G815");
        $ges10Chirchiq793 = $this->getValue($data, "G793");
        $ges10Chirchiq792 = $this->getValue($data, "G792");
        $ges10Chirchiq839 = $this->getValue($data, "G839");
        $ges10Chirchiq838 = $this->getValue($data, "G838");
        $ges10Chirchiq861 = $this->getValue($data, "G861");
        $ges10Chirchiq884 = $this->getValue($data, "G884");

        $set10Chirchiq700 = $ges10Chirchiq700[2] * 210000 / $CONST;
        $set10Chirchiq701 = $ges10Chirchiq701[2] * 210000 / $CONST;
        $set10Chirchiq723 = $ges10Chirchiq723[2] * 210000 / $CONST;
        $set10Chirchiq724 = $ges10Chirchiq724[2] * 210000 / $CONST;
        $set10Chirchiq770 = $ges10Chirchiq770[2] * 210000 / $CONST;
        $set10Chirchiq769 = $ges10Chirchiq769[2] * 210000 / $CONST;
        $set10Chirchiq747 = $ges10Chirchiq747[2] * 210000 / $CONST;
        $set10Chirchiq746 = $ges10Chirchiq746[2] * 210000 / $CONST;
        $set10Chirchiq816 = $ges10Chirchiq816[2] * 210000 / $CONST;
        $set10Chirchiq815 = $ges10Chirchiq815[2] * 210000 / $CONST;
        $set10Chirchiq793 = $ges10Chirchiq793[2] * 210000 / $CONST;
        $set10Chirchiq792 = $ges10Chirchiq792[2] * 210000 / $CONST;
        $set10Chirchiq839 = $ges10Chirchiq839[2] * 140000 / $CONST;
        $set10Chirchiq838 = $ges10Chirchiq838[2] * 140000 / $CONST;

        $set10Chirchiq861 = $ges10Chirchiq861[2] * 350 / $kvt;
        $set10Chirchiq884 = $ges10Chirchiq884[2] * 350 / $kvt;

        $power10Chirchiq654 = $ges10Chirchiq654[2] * 96000 / $CONST;//active
        $reactive10Chirchiq656 = $ges10Chirchiq656[2] * 96000 / $CONST;//reactive
        $water10Chirchiq654 = $energy->getWater($power10Chirchiq654, $pressure10, 0.95, 0.86);//water

        $power10Chirchiq677 = $ges10Chirchiq677[2] * 250000 / $CONST;//active
        $reactive10Chirchiq679 = $ges10Chirchiq679[2] * 250000 / $CONST;//reactive
        $water10Chirchiq677 = $energy->getWater($power10Chirchiq677, $pressure10, 0.96, 0.921);//water

        $ges10ChirchiqActive = $power10Chirchiq654 + $power10Chirchiq677;
        $ges10ChirchiqReactive = $reactive10Chirchiq656 + $reactive10Chirchiq679;
        $ges10ChirchiqActiveOut = ($set10Chirchiq701) +
            ($set10Chirchiq723) +
            ($set10Chirchiq746) +
            ($set10Chirchiq770) +
            ($set10Chirchiq793) +
            ($set10Chirchiq816) +
            ($set10Chirchiq839);
        $ges10ChirchiqActiveIn = ($set10Chirchiq700) +
            ($set10Chirchiq724) +
            ($set10Chirchiq747) +
            ($set10Chirchiq769) +
            ($set10Chirchiq792) +
            ($set10Chirchiq815) +
            ($set10Chirchiq838);
        $ges10ChirchiqOwnNeeds = $set10Chirchiq861 + $set10Chirchiq884;
        $ges10ChirchiqWater = $water10Chirchiq654 + $water10Chirchiq677;
        $ges10ChirchiqAggregateTrue = ($ges10Chirchiq654[2] != 0 ? 1 : 0) + ($ges10Chirchiq677[2] != 0 ? 1 : 0);
        $ges10ChirchiqAggregateError = 0;
        $ges10ChirchiqAggregateFalse = ($ges10Chirchiq654[2] == 0 ? 1 : 0) + ($ges10Chirchiq677[2] == 0 ? 1 : 0) - $ges10ChirchiqAggregateError;

        $water = Water::find()->where(['id_organization' => 30])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges46Chirchiq12 = $this->getValue($data, "G12");
        $ges46Chirchiq39 = $this->getValue($data, "G39");
        $ges46Chirchiq147 = $this->getValue($data, "G147");
        $ges46Chirchiq120 = $this->getValue($data, "G120");
        $ges46Chirchiq201 = $this->getValue($data, "G201");
        $ges46Chirchiq202 = $this->getValue($data, "G202");
        $ges46Chirchiq174 = $this->getValue($data, "G174");
        $ges46Chirchiq175 = $this->getValue($data, "G175");
        $ges46Chirchiq66 = $this->getValue($data, "G66");
        $ges46Chirchiq67 = $this->getValue($data, "G67");
        $ges46Chirchiq93 = $this->getValue($data, "G93");
        $ges46Chirchiq94 = $this->getValue($data, "G94");

        $set46Chirchiq12 = $ges46Chirchiq12[2] * 21000 / $CONST;
        $set46Chirchiq39 = $ges46Chirchiq39[2] * 21000 / $CONST;
        $set46Chirchiq147 = $ges46Chirchiq147[2] * 100 / $kvt;
        $set46Chirchiq120 = $ges46Chirchiq120[2] * 100 / $kvt;

        $power46Chirchiq201 = $ges46Chirchiq201[2] * 3780 / $CONST;//active
        $reactive46Chirchiq202 = $ges46Chirchiq202[2] * 3780 / $CONST;//reactive
        $water46Chirchiq201 = $energy->getWater($power46Chirchiq201, $pressure, 0.96, 0.897);//water

        $power46Chirchiq174 = $ges46Chirchiq174[2] * 3780 / $CONST;//active
        $reactive46Chirchiq175 = $ges46Chirchiq175[2] * 3780 / $CONST;//reactive
        $water46Chirchiq174 = $energy->getWater($power46Chirchiq174, $pressure, 0.96, 0.897);//water

        $power46Chirchiq93 = $ges46Chirchiq93[2] * 3780 / $CONST;//active
        $reactive46Chirchiq94 = $ges46Chirchiq94[2] * 3780 / $CONST;//reactive
        $water46Chirchiq93 = $energy->getWater($power46Chirchiq93, $pressure, 0.96, 0.897);//water

        $power46Chirchiq66 = $ges46Chirchiq66[2] * 3780 / $CONST;//active
        $reactive46Chirchiq67 = $ges46Chirchiq67[2] * 3780 / $CONST;//reactive
        $water46Chirchiq66 = $energy->getWater($power46Chirchiq66, $pressure, 0.96, 0.897);//water

        $ges46ChirchiqActive = $power46Chirchiq201 + $power46Chirchiq174 + $power46Chirchiq93 + $power46Chirchiq66;
        $ges46ChirchiqReactive = $reactive46Chirchiq202 + $reactive46Chirchiq175 + $reactive46Chirchiq94 + $reactive46Chirchiq67;
        $ges46ChirchiqActiveOut = ($set46Chirchiq12 > 0 ? $set46Chirchiq12 : 0) + ($set46Chirchiq39 > 0 ? $set46Chirchiq39 : 0);
        $ges46ChirchiqActiveIn = ($set46Chirchiq12 < 0 ? $set46Chirchiq12 : 0) + ($set46Chirchiq39 < 0 ? $set46Chirchiq39 : 0);
        $ges46ChirchiqOwnNeeds = $set46Chirchiq147 + $set46Chirchiq120;
        $ges46ChirchiqWater = $water46Chirchiq201 + $water46Chirchiq174 + $water46Chirchiq93 + $water46Chirchiq66;
        $ges46ChirchiqAggregateTrue = ($ges46Chirchiq201[2] != 0 ? 1 : 0) + ($ges46Chirchiq174[2] != 0 ? 1 : 0) + ($ges46Chirchiq93[2] != 0 ? 1 : 0) + ($ges46Chirchiq66[2] != 0 ? 1 : 0);
        $ges46ChirchiqAggregateError = 0;
        $ges46ChirchiqAggregateFalse = ($ges46Chirchiq201[2] == 0 ? 1 : 0) + ($ges46Chirchiq174[2] == 0 ? 1 : 0) + ($ges46Chirchiq93[2] == 0 ? 1 : 0) + ($ges46Chirchiq66[2] == 0 ? 1 : 0) - $ges46ChirchiqAggregateError;

        $active = $ges7ChirchiqActive + $ges8ChirchiqActive + $ges10ChirchiqActive + $ges46ChirchiqActive;
        $reactive = $ges7ChirchiqReactive + $ges8ChirchiqReactive + $ges10ChirchiqReactive + $ges46ChirchiqReactive;
        $activeOut = $ges7ChirchiqActiveOut + $ges8ChirchiqActiveOut + $ges10ChirchiqActiveOut + $ges46ChirchiqActiveOut;
        $activeIn = $ges7ChirchiqActiveIn + $ges8ChirchiqActiveIn + $ges10ChirchiqActiveIn + $ges46ChirchiqActiveIn;
        $ownNeeds = $ges7ChirchiqOwnNeeds + $ges8ChirchiqOwnNeeds + $ges10ChirchiqOwnNeeds + $ges46ChirchiqOwnNeeds;
        $water = $ges7ChirchiqWater + $ges8ChirchiqWater + $ges10ChirchiqWater + $ges46ChirchiqWater;
        $true = $ges7ChirchiqAggregateTrue + $ges8ChirchiqAggregateTrue + $ges10ChirchiqAggregateTrue + $ges46ChirchiqAggregateTrue;
        $error = $ges7ChirchiqAggregateError + $ges8ChirchiqAggregateError + $ges10ChirchiqAggregateError + $ges46ChirchiqAggregateError;
        $false = $ges7ChirchiqAggregateFalse + $ges8ChirchiqAggregateFalse + $ges10ChirchiqAggregateFalse + $ges46ChirchiqAggregateFalse;

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

            array("id" => 10, "value" => $ges8ChirchiqActive),
            array("id" => 11, "value" => $ges8ChirchiqAggregateTrue),
            array("id" => 12, "value" => $ges8ChirchiqAggregateFalse),
            array("id" => 13, "value" => $ges8ChirchiqAggregateError),

            array("id" => 14, "value" => $ges7ChirchiqActive),
            array("id" => 15, "value" => $ges7ChirchiqAggregateTrue),
            array("id" => 16, "value" => $ges7ChirchiqAggregateFalse),
            array("id" => 17, "value" => $ges7ChirchiqAggregateError),

            array("id" => 18, "value" => $ges10ChirchiqActive),
            array("id" => 19, "value" => $ges10ChirchiqAggregateTrue),
            array("id" => 20, "value" => $ges10ChirchiqAggregateFalse),
            array("id" => 21, "value" => $ges10ChirchiqAggregateError),

            array("id" => 22, "value" => $ges46ChirchiqActive),
            array("id" => 23, "value" => $ges46ChirchiqAggregateTrue),
            array("id" => 24, "value" => $ges46ChirchiqAggregateFalse),
            array("id" => 25, "value" => $ges46ChirchiqAggregateError),

        );

        echo json_encode($data);
    }
}
