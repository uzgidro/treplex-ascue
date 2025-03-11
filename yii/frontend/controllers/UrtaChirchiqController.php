<?php

namespace frontend\controllers;

use common\models\Guides;
use common\models\Water;

class UrtaChirchiqController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes6()
    {
        return $this->render('ges6');
    }

    public function actionGes27()
    {
        return $this->render('ges27');
    }

    public function actionGes28()
    {
        return $this->render('ges28');
    }

    public function actionIspaysoy()
    {
        return $this->render('ispaysoy');
    }

    protected string $url = "http://user:c8H_us3r@192.168.40.215:10006/crq?req=current";

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

    /*protected function getPressure($id, $pressure, $power) {
        $result = Guides::find()->where(['pressure' => round($pressure)])->andWhere(['id_organization' => $id])->orderBy(['power' => SORT_ASC])->all();
        foreach ($result as $item) {
            if (intval($power) <= $item['power'] && $power != 0) {
                $guide = $item['guide']; break;
            }
        }
        return $guide ?? 0;
    }*/

    protected function getPressure($id, $pressure, $power)
    {
        // Ensure power is not zero before proceeding
        if ($power == 0) {
            return 0;
        }

        // Query the database for the first matching record
        $result = Guides::find()
            ->where(['pressure' => round($pressure)])
            ->andWhere(['id_organization' => $id])
            ->andWhere(['>=', 'power', intval($power)]) // Only fetch records with power >= $power
            ->orderBy(['power' => SORT_ASC]) // Sort by power in ascending order
            ->one(); // Fetch only the first matching record

        // Return the guide value if found, otherwise return 0
        return $result ? $result['guide'] : 0;
    }

    public function actionServer6()
    {
        $water = Water::find()->where(['id_organization' => 24])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges6UrtaChirchiq226 = $this->getValue($data, "G226");
        $ges6UrtaChirchiq225 = $this->getValue($data, "G225");
        $ges6UrtaChirchiq202 = $this->getValue($data, "G202");
        $ges6UrtaChirchiq201 = $this->getValue($data, "G201");
        $ges6UrtaChirchiq250 = $this->getValue($data, "G250");
        $ges6UrtaChirchiq249 = $this->getValue($data, "G249");
        $ges6UrtaChirchiq218 = $this->getValue($data, "G218");
        $ges6UrtaChirchiq242 = $this->getValue($data, "G242");
        $ges6UrtaChirchiq194 = $this->getValue($data, "G194");
        $ges6UrtaChirchiq105 = $this->getValue($data, "G105");
        $ges6UrtaChirchiq129 = $this->getValue($data, "G129");
        $ges6UrtaChirchiq153 = $this->getValue($data, "G153");
        $ges6UrtaChirchiq177 = $this->getValue($data, "G177");
        $ges6UrtaChirchiq9 = $this->getValue($data, "G9");
        $ges6UrtaChirchiq11 = $this->getValue($data, "G11");
        $ges6UrtaChirchiq33 = $this->getValue($data, "G33");
        $ges6UrtaChirchiq35 = $this->getValue($data, "G35");
        $ges6UrtaChirchiq57 = $this->getValue($data, "G57");
        $ges6UrtaChirchiq59 = $this->getValue($data, "G59");
        $ges6UrtaChirchiq81 = $this->getValue($data, "G81");
        $ges6UrtaChirchiq83 = $this->getValue($data, "G83");
        $ges6UrtaChirchiq193 = $this->getValue($data, "G193");
        $ges6UrtaChirchiq217 = $this->getValue($data, "G217");
        $ges6UrtaChirchiq241 = $this->getValue($data, "G241");

        $CONST = 1000000;
        $kvt = 1000;

        $set6UrtaChirchiq226 = $ges6UrtaChirchiq226[2] * 2200000 / $CONST;
        $set6UrtaChirchiq225 = $ges6UrtaChirchiq225[2] * 2200000 / $CONST;
        $set6UrtaChirchiq202 = $ges6UrtaChirchiq202[2] * 2200000 / $CONST;
        $set6UrtaChirchiq201 = $ges6UrtaChirchiq201[2] * 2200000 / $CONST;
        $set6UrtaChirchiq250 = $ges6UrtaChirchiq250[2] * 2200000 / $CONST;
        $set6UrtaChirchiq249 = $ges6UrtaChirchiq249[2] * 2200000 / $CONST;

        $power6UrtaChirchiq9 = $ges6UrtaChirchiq9[2] * 276000 / $CONST;//active
        $reactive6UrtaChirchiq11 = $ges6UrtaChirchiq11[2] * 276000 / $CONST;//reactive
        $water6UrtaChirchiq9 = $energy->getWater($power6UrtaChirchiq9, $pressure, 0.99, 0.944);//water
        $kpd6UrtaChirchiq9 = $energy->getKpd($power6UrtaChirchiq9, $water6UrtaChirchiq9, $pressure, 0.985);//kpd

        $power6UrtaChirchiq33 = $ges6UrtaChirchiq33[2] * 276000 / $CONST;//active
        $reactive6UrtaChirchiq35 = $ges6UrtaChirchiq35[2] * 276000 / $CONST;//reactive
        $water6UrtaChirchiq33 = $energy->getWater($power6UrtaChirchiq33, $pressure, 0.99, 0.944);//water
        $kpd6UrtaChirchiq33 = $energy->getKpd($power6UrtaChirchiq33, $water6UrtaChirchiq33, $pressure, 0.985);//kpd

        $power6UrtaChirchiq57 = $ges6UrtaChirchiq57[2] * 276000 / $CONST;//active
        $reactive6UrtaChirchiq59 = $ges6UrtaChirchiq59[2] * 276000 / $CONST;//reactive
        $water6UrtaChirchiq57 = $energy->getWater($power6UrtaChirchiq57, $pressure, 0.98, 0.942);//water
        $kpd6UrtaChirchiq57 = $energy->getKpd($power6UrtaChirchiq57, $water6UrtaChirchiq57, $pressure, 0.985);//kpd

        $power6UrtaChirchiq81 = $ges6UrtaChirchiq81[2] * 276000 / $CONST;//active
        $reactive6UrtaChirchiq83 = $ges6UrtaChirchiq83[2] * 276000 / $CONST;//reactive
        $water6UrtaChirchiq81 = $energy->getWater($power6UrtaChirchiq81, $pressure, 0.99, 0.944);//water
        $kpd6UrtaChirchiq81 = $energy->getKpd($power6UrtaChirchiq81, $water6UrtaChirchiq81, $pressure, 0.985);//kpd

        $set6UrtaChirchiq105 = $ges6UrtaChirchiq105[2] * 300 / $kvt;
        $set6UrtaChirchiq129 = $ges6UrtaChirchiq129[2] * 300 / $kvt;
        $set6UrtaChirchiq153 = $ges6UrtaChirchiq153[2] * 300 / $kvt;
        $set6UrtaChirchiq177 = $ges6UrtaChirchiq177[2] * 300 / $kvt;

        $data = array(
            array("id" => 226, "value" => $set6UrtaChirchiq226),
            array("id" => 225, "value" => $set6UrtaChirchiq225),
            array("id" => 202, "value" => $set6UrtaChirchiq202),
            array("id" => 201, "value" => $set6UrtaChirchiq201),
            array("id" => 250, "value" => $set6UrtaChirchiq250),
            array("id" => 249, "value" => $set6UrtaChirchiq249),

            array("id" => 218, "value" => $ges6UrtaChirchiq218[2] > 0 ? $ges6UrtaChirchiq218[2] * 1.73 * 2200 / $kvt : $ges6UrtaChirchiq242[2] * 1.73 * 2200 / $kvt),
            array("id" => 194, "value" => $ges6UrtaChirchiq194[2] > 0 ? $ges6UrtaChirchiq194[2] * 1.73 * 2200 / $kvt : $ges6UrtaChirchiq242[2] * 1.73 * 2200 / $kvt),
            array("id" => 242, "value" => $energy->getVoltages($ges6UrtaChirchiq242[2], 2200)),

            array("id" => 105, "value" => $set6UrtaChirchiq105),
            array("id" => 129, "value" => $set6UrtaChirchiq129),
            array("id" => 153, "value" => $set6UrtaChirchiq153),
            array("id" => 177, "value" => $set6UrtaChirchiq177),

            array("id" => 900, "value" => $power6UrtaChirchiq9),//active
            array("id" => 1100, "value" => $reactive6UrtaChirchiq11),//reactive
            array("id" => 1200, "value" => $kpd6UrtaChirchiq9),//КПД
            array("id" => 1300, "value" => $this->getPressure(24, $pressure, $power6UrtaChirchiq9)),//HA
            array("id" => 1400, "value" => $water6UrtaChirchiq9),//water

            array("id" => 33, "value" => $power6UrtaChirchiq33),//active
            array("id" => 35, "value" => $reactive6UrtaChirchiq35),//reactive
            array("id" => 36, "value" => $kpd6UrtaChirchiq33),//КПД
            array("id" => 37, "value" => $this->getPressure(24, $pressure, $power6UrtaChirchiq33)),//HA
            array("id" => 38, "value" => $water6UrtaChirchiq33),//water

            array("id" => 57, "value" => $power6UrtaChirchiq57),//active
            array("id" => 59, "value" => $reactive6UrtaChirchiq59),//reactive
            array("id" => 60, "value" => $kpd6UrtaChirchiq57),//КПД
            array("id" => 61, "value" => $this->getPressure(24, $pressure, $power6UrtaChirchiq57)),//HA
            array("id" => 62, "value" => $water6UrtaChirchiq57),//water

            array("id" => 81, "value" => $power6UrtaChirchiq81),//active
            array("id" => 83, "value" => $reactive6UrtaChirchiq83),//reactive
            array("id" => 84, "value" => $kpd6UrtaChirchiq81),//КПД
            array("id" => 85, "value" => $this->getPressure(24, $pressure, $power6UrtaChirchiq81)),//HA
            array("id" => 86, "value" => $water6UrtaChirchiq81),//water

            array("id" => 1, "value" => $power6UrtaChirchiq9 + $power6UrtaChirchiq33 + $power6UrtaChirchiq57 + $power6UrtaChirchiq81),
            array("id" => 2, "value" => $reactive6UrtaChirchiq11 + $reactive6UrtaChirchiq35 + $reactive6UrtaChirchiq59 + $reactive6UrtaChirchiq83),
            array("id" => 3, "value" => $set6UrtaChirchiq226  + $set6UrtaChirchiq202 + $set6UrtaChirchiq250),
            array("id" => 4, "value" => $set6UrtaChirchiq225  + $set6UrtaChirchiq201 + $set6UrtaChirchiq249),
            array("id" => 5, "value" => $set6UrtaChirchiq105 + $set6UrtaChirchiq129 + $set6UrtaChirchiq153 + $set6UrtaChirchiq177),
            array("id" => 6, "value" => $water6UrtaChirchiq9  + $water6UrtaChirchiq33 + $water6UrtaChirchiq57 + $water6UrtaChirchiq81),
            array("id" => 7, "value" => $ges6UrtaChirchiq193[2] > 0 ? $ges6UrtaChirchiq193[2] : ($ges6UrtaChirchiq241[2] > 0 ? $ges6UrtaChirchiq241[2] : $ges6UrtaChirchiq217[2])),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    public function actionServer27()
    {
        $water = Water::find()->where(['id_organization' => 25])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges27UrtaChirchiq489 = $this->getValue($data, "G489");
        $ges27UrtaChirchiq490 = $this->getValue($data, "G490");
        $ges27UrtaChirchiq369 = $this->getValue($data, "G369");
        $ges27UrtaChirchiq370 = $this->getValue($data, "G370");
        $ges27UrtaChirchiq345 = $this->getValue($data, "G345");
        $ges27UrtaChirchiq346 = $this->getValue($data, "G346");
        $ges27UrtaChirchiq441 = $this->getValue($data, "G441");
        $ges27UrtaChirchiq442 = $this->getValue($data, "G442");
        $ges27UrtaChirchiq465 = $this->getValue($data, "G465");
        $ges27UrtaChirchiq466 = $this->getValue($data, "G466");
        $ges27UrtaChirchiq393 = $this->getValue($data, "G393");
        $ges27UrtaChirchiq394 = $this->getValue($data, "G394");
        $ges27UrtaChirchiq417 = $this->getValue($data, "G417");
        $ges27UrtaChirchiq418 = $this->getValue($data, "G418");
        $ges27UrtaChirchiq513 = $this->getValue($data, "G513");
        $ges27UrtaChirchiq514 = $this->getValue($data, "G514");
        $ges27UrtaChirchiq537 = $this->getValue($data, "G537");
        $ges27UrtaChirchiq561 = $this->getValue($data, "G561");
        $ges27UrtaChirchiq585 = $this->getValue($data, "G585");
        $ges27UrtaChirchiq609 = $this->getValue($data, "G609");
        $ges27UrtaChirchiq633 = $this->getValue($data, "G633");
        $ges27UrtaChirchiq338 = $this->getValue($data, "G338");
        $ges27UrtaChirchiq386 = $this->getValue($data, "G386");
        $ges27UrtaChirchiq434 = $this->getValue($data, "G434");
        $ges27UrtaChirchiq362 = $this->getValue($data, "G362");
        $ges27UrtaChirchiq410 = $this->getValue($data, "G410");
        $ges27UrtaChirchiq506 = $this->getValue($data, "G506");
        $ges27UrtaChirchiq273 = $this->getValue($data, "G273");
        $ges27UrtaChirchiq275 = $this->getValue($data, "G275");
        $ges27UrtaChirchiq297 = $this->getValue($data, "G297");
        $ges27UrtaChirchiq299 = $this->getValue($data, "G299");
        $ges27UrtaChirchiq321 = $this->getValue($data, "G321");
        $ges27UrtaChirchiq323 = $this->getValue($data, "G323");
        $ges27UrtaChirchiq337 = $this->getValue($data, "G337");
        $ges27UrtaChirchiq361 = $this->getValue($data, "G361");
        $ges27UrtaChirchiq385 = $this->getValue($data, "G385");
        $ges27UrtaChirchiq409 = $this->getValue($data, "G409");
        $ges27UrtaChirchiq433 = $this->getValue($data, "G433");
        $ges27UrtaChirchiq505 = $this->getValue($data, "G505");
        $ges27UrtaChirchiq562 = $this->getValue($data, "G562");

        $CONST = 1000000;
        $kvt = 1000;

        $power27UrtaChirchiq273 = $ges27UrtaChirchiq273[2] * 80000 / $CONST;//active
        $reactive27UrtaChirchiq275 = $ges27UrtaChirchiq275[2] * 80000 / $CONST;//reactive
        $water27UrtaChirchiq273 = $energy->getWater($power27UrtaChirchiq273, $pressure, 0.96, 0.931);//water
        $kpd27UrtaChirchiq273 = $energy->getKpd($power27UrtaChirchiq273, $water27UrtaChirchiq273, $pressure, 0.96);//kpd

        $power27UrtaChirchiq297 = $ges27UrtaChirchiq297[2] * 80000 / $CONST;//active
        $reactive27UrtaChirchiq299 = $ges27UrtaChirchiq299[2] * 80000 / $CONST;//reactive
        $water27UrtaChirchiq297 = $energy->getWater($power27UrtaChirchiq297, $pressure, 0.96, 0.931);//water
        $kpd27UrtaChirchiq297 = $energy->getKpd($power27UrtaChirchiq297, $water27UrtaChirchiq297, $pressure, 0.96);//kpd

        $power27UrtaChirchiq321 = $ges27UrtaChirchiq321[2] * 80000 / $CONST;//active
        $reactive27UrtaChirchiq323 = $ges27UrtaChirchiq323[2] * 80000 / $CONST;//reactive
        $water27UrtaChirchiq321 = $energy->getWater($power27UrtaChirchiq321, $pressure, 0.96, 0.931);//water
        $kpd27UrtaChirchiq321 = $energy->getKpd($power27UrtaChirchiq321, $water27UrtaChirchiq321, $pressure, 0.96);//kpd

        $set27UrtaChirchiq489 = $ges27UrtaChirchiq489[2] * 66000 / $CONST;
        $set27UrtaChirchiq490 = $ges27UrtaChirchiq490[2] * 66000 / $CONST;
        $set27UrtaChirchiq369 = $ges27UrtaChirchiq369[2] * 825000 / $CONST;
        $set27UrtaChirchiq370 = $ges27UrtaChirchiq370[2] * 825000 / $CONST;
        $set27UrtaChirchiq345 = $ges27UrtaChirchiq345[2] * 825000 / $CONST;
        $set27UrtaChirchiq346 = $ges27UrtaChirchiq346[2] * 825000 / $CONST;
        $set27UrtaChirchiq441 = $ges27UrtaChirchiq441[2] * 66000 / $CONST;
        $set27UrtaChirchiq442 = $ges27UrtaChirchiq442[2] * 66000 / $CONST;
        $set27UrtaChirchiq465 = $ges27UrtaChirchiq465[2] * 66000 / $CONST;
        $set27UrtaChirchiq466 = $ges27UrtaChirchiq466[2] * 66000 / $CONST;
        $set27UrtaChirchiq393 = $ges27UrtaChirchiq393[2] * 44000 / $CONST;
        $set27UrtaChirchiq394 = $ges27UrtaChirchiq394[2] * 44000 / $CONST;
        $set27UrtaChirchiq417 = $ges27UrtaChirchiq417[2] * 44000 / $CONST;
        $set27UrtaChirchiq418 = $ges27UrtaChirchiq418[2] * 44000 / $CONST;
        $set27UrtaChirchiq513 = $ges27UrtaChirchiq513[2] * 44000 / $CONST;
        $set27UrtaChirchiq514 = $ges27UrtaChirchiq514[2] * 44000 / $CONST;

        $data = array(
            array("id" => 489, "value" => $set27UrtaChirchiq489),
            array("id" => 490, "value" => $set27UrtaChirchiq490),
            array("id" => 369, "value" => $set27UrtaChirchiq369),
            array("id" => 370, "value" => $set27UrtaChirchiq370),
            array("id" => 345, "value" => $set27UrtaChirchiq345),
            array("id" => 346, "value" => $set27UrtaChirchiq346),
            array("id" => 441, "value" => $set27UrtaChirchiq441),
            array("id" => 442, "value" => $set27UrtaChirchiq442),
            array("id" => 465, "value" => $set27UrtaChirchiq465),
            array("id" => 466, "value" => $set27UrtaChirchiq466),
            array("id" => 393, "value" => $set27UrtaChirchiq393),
            array("id" => 394, "value" => $set27UrtaChirchiq394),
            array("id" => 417, "value" => $set27UrtaChirchiq417),
            array("id" => 418, "value" => $set27UrtaChirchiq418),
            array("id" => 513, "value" => $set27UrtaChirchiq513),
            array("id" => 514, "value" => $set27UrtaChirchiq514),

            array("id" => 537, "value" => $ges27UrtaChirchiq537[2] * 3600 / $kvt),
            array("id" => 561, "value" => $ges27UrtaChirchiq561[2] * 2400 / $kvt),
            array("id" => 562, "value" => $ges27UrtaChirchiq562[2] * 2400 / $kvt),
            array("id" => 585, "value" => $ges27UrtaChirchiq585[2] * 200 / $kvt),
            array("id" => 609, "value" => $ges27UrtaChirchiq609[2] * 1200 * 60 / $kvt),
            array("id" => 633, "value" => $ges27UrtaChirchiq633[2] * 1200 * 60 / $kvt),

            array("id" => 338, "value" => $ges27UrtaChirchiq338[2] > 0 ? $energy->getVoltages($ges27UrtaChirchiq338[2], 1100) : ($ges27UrtaChirchiq386[2] > 0 ? $energy->getVoltages($ges27UrtaChirchiq386[2], 1100) : $energy->getVoltages($ges27UrtaChirchiq434[2], 1100))),
            array("id" => 362, "value" => $ges27UrtaChirchiq362[2] > 0 ? $energy->getVoltages($ges27UrtaChirchiq362[2], 1100) : $energy->getVoltages($ges27UrtaChirchiq410[2], 1100)),
            array("id" => 506, "value" => $energy->getVoltages($ges27UrtaChirchiq506[2], 1100)),

            array("id" => 273, "value" => $power27UrtaChirchiq273),//active
            array("id" => 275, "value" => $reactive27UrtaChirchiq275),//reactive
            array("id" => 276, "value" => $kpd27UrtaChirchiq273),//КПД
            array("id" => 277, "value" => $this->getPressure(25, $pressure, $power27UrtaChirchiq273)),//HA
            array("id" => 278, "value" => $water27UrtaChirchiq273),//water

            array("id" => 297, "value" => $power27UrtaChirchiq297),//active
            array("id" => 299, "value" => $reactive27UrtaChirchiq299),//reactive
            array("id" => 300, "value" => $kpd27UrtaChirchiq297),//КПД
            array("id" => 301, "value" => $this->getPressure(25, $pressure, $power27UrtaChirchiq297)),//HA
            array("id" => 302, "value" => $water27UrtaChirchiq297),//water

            array("id" => 321, "value" => $power27UrtaChirchiq321),//active
            array("id" => 323, "value" => $reactive27UrtaChirchiq323),//reactive
            array("id" => 324, "value" => $kpd27UrtaChirchiq321),//КПД
            array("id" => 325, "value" => $this->getPressure(25, $pressure, $power27UrtaChirchiq321)),//HA
            array("id" => 326, "value" => $water27UrtaChirchiq321),//water

            array("id" => 1, "value" => $power27UrtaChirchiq273 + $power27UrtaChirchiq297 + $power27UrtaChirchiq321),
            array("id" => 2, "value" => $reactive27UrtaChirchiq275 + $reactive27UrtaChirchiq299 + $reactive27UrtaChirchiq323),
            array("id" => 3, "value" => (
                $set27UrtaChirchiq346 +
                $set27UrtaChirchiq370 +
                $set27UrtaChirchiq394 +
                $set27UrtaChirchiq418 +
                $set27UrtaChirchiq442 +
                $set27UrtaChirchiq466 +
                $set27UrtaChirchiq490 +
                $set27UrtaChirchiq514
            )),
            array("id" => 4, "value" =>
                $set27UrtaChirchiq345 +
                $set27UrtaChirchiq369 +
                $set27UrtaChirchiq393 +
                $set27UrtaChirchiq417 +
                $set27UrtaChirchiq441 +
                $set27UrtaChirchiq465 +
                $set27UrtaChirchiq489 +
                $set27UrtaChirchiq513
            ),
            array("id" => 5, "value" =>
                $ges27UrtaChirchiq585[2] * 200 / $kvt +
                $ges27UrtaChirchiq609[2] * 1200 * 60 / $kvt +
                $ges27UrtaChirchiq633[2] * 1200 * 60 / $kvt),
            array("id" => 6, "value" => $water27UrtaChirchiq273 + $water27UrtaChirchiq297 + $water27UrtaChirchiq321),
            array("id" => 7, "value" => $ges27UrtaChirchiq337[2] > 0 ? $ges27UrtaChirchiq337[2] : ($ges27UrtaChirchiq361[2] > 0 ? $ges27UrtaChirchiq361[2] : ($ges27UrtaChirchiq385[2] > 0 ? $ges27UrtaChirchiq385[2] : ($ges27UrtaChirchiq409[2] > 0 ? $ges27UrtaChirchiq409[2] : ($ges27UrtaChirchiq433[2] > 0 ? $ges27UrtaChirchiq433[2] : $ges27UrtaChirchiq505[2]))))),//G337,G361,G385,G409,G433,G505
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }
/*
    public function actionServer28()
    {
        // Fetch water data
        $id = 26;
        $water = Water::find()->where(['id_organization' => $id])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        // Constants
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();

        // Fetch data
        header('Content-Type: application/json');
        $data = $this->fetchData();

        // Helper function to calculate power, reactive, water, and KPD
        $calculateMetrics = function ($idActive, $idReactive, $efficiencyFactor1, $efficiencyFactor2) use ($data, $energy, $CONST, $pressure) {
            $activeValue = $this->getValue($data, "G$idActive")[2] ?? 0;
            $reactiveValue = $this->getValue($data, "G$idReactive")[2] ?? 0;

            $power = $activeValue * 60000 / $CONST; // Active power
            $reactive = $reactiveValue * 60000 / $CONST; // Reactive power
            $waterValue = $energy->getWater($power, $pressure, $efficiencyFactor1, $efficiencyFactor2); // Water
            $kpd = $energy->getKpd($power, $waterValue, $pressure, 0.977); // Efficiency (KPD)

            return [
                'power' => $power,
                'reactive' => $reactive,
                'water' => $waterValue,
                'kpd' => $kpd,
            ];
        };

        // Define IDs and their corresponding efficiency factors
        $ids = [
            ['active' => 657, 'reactive' => 659, 'eff1' => 0.98, 'eff2' => 0.935],
            ['active' => 681, 'reactive' => 683, 'eff1' => 0.98, 'eff2' => 0.935],
            ['active' => 705, 'reactive' => 707, 'eff1' => 0.98, 'eff2' => 0.935],
        ];

        // Calculate metrics for each ID
        $metrics = [];
        foreach ($ids as $id) {
            $metrics[$id['active']] = $calculateMetrics($id['active'], $id['reactive'], $id['eff1'], $id['eff2']);
        }

        // Calculate SET values
        $setValues = [];
        foreach ([730, 729, 754, 753] as $id) {
            $value = $this->getValue($data, "G$id")[2] ?? 0;
            $setValues[$id] = $value * 660000 / $CONST;
        }
        foreach ([874, 873, 182, 181] as $id) {
            $value = $this->getValue($data, "G$id")[2] ?? 0;
            $setValues[$id] = $value * 2400 / $CONST;
        }

        // Additional calculations
        $additionalValues = [
            825 => ($this->getValue($data, "G825")[2] ?? 0) * 1200 / $kvt,
            777 => ($this->getValue($data, "G777")[2] ?? 0) * 200 / $kvt,
            801 => ($this->getValue($data, "G801")[2] ?? 0) * 200 / $kvt,
            897 => ($this->getValue($data, "G897")[2] ?? 0) * 40 / $kvt,
            921 => ($this->getValue($data, "G921")[2] ?? 0) * 80 / $kvt,
            945 => ($this->getValue($data, "G945")[2] ?? 0) * 80 / $kvt,
            722 => $this->getValue($data, "G722")[2] > 0
                ? $energy->getVoltages($this->getValue($data, "G722")[2], 1100)
                : $energy->getVoltages($this->getValue($data, "G746")[2], 1100),
            849 => ($this->getValue($data, "G849")[2] ?? 0) * 200 / $CONST,
            850 => ($this->getValue($data, "G850")[2] ?? 0) * 200 / $CONST,
            7 => $this->getValue($data, "G721")[2] ?: $this->getValue($data, "G745")[2],
        ];

        // Aggregate results
        $result = [];
        foreach ($setValues as $id => $value) {
            $result[] = ['id' => $id, 'value' => $value];
        }
        foreach ($additionalValues as $id => $value) {
            $result[] = ['id' => $id, 'value' => $value];
        }
        foreach ($metrics as $id => $metric) {
            $result[] = ['id' => $id, 'value' => $metric['power']];
            $result[] = ['id' => $id + 2, 'value' => $metric['reactive']];
            $result[] = ['id' => $id + 3, 'value' => $metric['kpd']];
            $result[] = ['id' => $id + 4, 'value' => $this->getPressure($id, $pressure, $metric['power'])];
            $result[] = ['id' => $id + 5, 'value' => $metric['water']];
        }

        // Final aggregated values
        $result[] = ['id' => 1, 'value' => array_sum(array_column($metrics, 'power'))];
        $result[] = ['id' => 2, 'value' => array_sum(array_column($metrics, 'reactive'))];
        $result[] = ['id' => 3, 'value' => array_sum(array_slice($setValues, 0, 3))];
        $result[] = ['id' => 4, 'value' => array_sum(array_slice($setValues, 3, 3))];
        $result[] = ['id' => 5, 'value' => array_sum(array_column($setValues, 'value'))];
        $result[] = ['id' => 6, 'value' => array_sum(array_column($metrics, 'water'))];
        $result[] = ['id' => 8, 'value' => $upBef];
        $result[] = ['id' => 9, 'value' => $downBef];
        $result[] = ['id' => 10, 'value' => $pressure];

        // Output JSON
        echo json_encode($result);
    }
*/
    public function actionServer28()
    {
        $id = 26;
        $water = Water::find()->where(['id_organization' => $id])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges28UrtaChirchiq730 = $this->getValue($data, "G730");
        $ges28UrtaChirchiq729 = $this->getValue($data, "G729");
        $ges28UrtaChirchiq754 = $this->getValue($data, "G754");
        $ges28UrtaChirchiq753 = $this->getValue($data, "G753");
        $ges28UrtaChirchiq874 = $this->getValue($data, "G874");
        $ges28UrtaChirchiq873 = $this->getValue($data, "G873");
        $ges28UrtaChirchiq182 = $this->getValue($data, "G182");
        $ges28UrtaChirchiq181 = $this->getValue($data, "G181");
        $ges28UrtaChirchiq825 = $this->getValue($data, "G825");
        $ges28UrtaChirchiq849 = $this->getValue($data, "G849");
        $ges28UrtaChirchiq850 = $this->getValue($data, "G850");
        $ges28UrtaChirchiq777 = $this->getValue($data, "G777");
        $ges28UrtaChirchiq801 = $this->getValue($data, "G801");
        $ges28UrtaChirchiq897 = $this->getValue($data, "G897");
        $ges28UrtaChirchiq921 = $this->getValue($data, "G921");
        $ges28UrtaChirchiq945 = $this->getValue($data, "G945");
        $ges28UrtaChirchiq657 = $this->getValue($data, "G657");
        $ges28UrtaChirchiq659 = $this->getValue($data, "G659");
        $ges28UrtaChirchiq681 = $this->getValue($data, "G681");
        $ges28UrtaChirchiq683 = $this->getValue($data, "G683");
        $ges28UrtaChirchiq705 = $this->getValue($data, "G705");
        $ges28UrtaChirchiq707 = $this->getValue($data, "G707");
        $ges28UrtaChirchiq722 = $this->getValue($data, "G722");
        $ges28UrtaChirchiq746 = $this->getValue($data, "G746");
        $ges28UrtaChirchiq721 = $this->getValue($data, "G721");
        $ges28UrtaChirchiq745 = $this->getValue($data, "G745");

        $CONST = 1000000;
        $kvt = 1000;

        $set28UrtaChirchiq730 = $ges28UrtaChirchiq730[2] * 660000 / $CONST;
        $set28UrtaChirchiq729 = $ges28UrtaChirchiq729[2] * 660000 / $CONST;
        $set28UrtaChirchiq754 = $ges28UrtaChirchiq754[2] * 660000 / $CONST;
        $set28UrtaChirchiq753 = $ges28UrtaChirchiq753[2] * 660000 / $CONST;
        $set28UrtaChirchiq874 = $ges28UrtaChirchiq874[2] * 2400 / $CONST;
        $set28UrtaChirchiq873 = $ges28UrtaChirchiq873[2] * 2400 / $CONST;
        $set28UrtaChirchiq182 = $ges28UrtaChirchiq182[2] * 2400 / $CONST;
        $set28UrtaChirchiq181 = $ges28UrtaChirchiq181[2] * 2400 / $CONST;

        $set28UrtaChirchiq825 = $ges28UrtaChirchiq825[2] * 1200 / $kvt;
        $set28UrtaChirchiq777 = $ges28UrtaChirchiq777[2] * 200 / $kvt;
        $set28UrtaChirchiq801 = $ges28UrtaChirchiq801[2] * 200 / $kvt;
        $set28UrtaChirchiq897 = $ges28UrtaChirchiq897[2] * 40 / $kvt;
        $set28UrtaChirchiq921 = $ges28UrtaChirchiq921[2] * 80 / $kvt;
        $set28UrtaChirchiq945 = $ges28UrtaChirchiq945[2] * 80 / $kvt;

        $power28UrtaChirchiq657 = $ges28UrtaChirchiq657[2] * 60000 / $CONST;//active
        $reactive28UrtaChirchiq659 = $ges28UrtaChirchiq659[2] * 60000 / $CONST;//reactive
        $water28UrtaChirchiq657 = $energy->getWater($power28UrtaChirchiq657, $pressure, 0.98, 0.935);//water
        $kpd28UrtaChirchiq657 = $energy->getKpd($power28UrtaChirchiq657, $water28UrtaChirchiq657, $pressure, 0.977);//kpd

        $power28UrtaChirchiq681 = $ges28UrtaChirchiq681[2] * 60000 / $CONST;//active
        $reactive28UrtaChirchiq683 = $ges28UrtaChirchiq683[2] * 60000 / $CONST;//reactive
        $water28UrtaChirchiq681 = $energy->getWater($power28UrtaChirchiq681, $pressure, 0.98, 0.935);//water
        $kpd28UrtaChirchiq681 = $energy->getKpd($power28UrtaChirchiq681, $water28UrtaChirchiq681, $pressure, 0.977);//kpd

        $power28UrtaChirchiq705 = $ges28UrtaChirchiq705[2] * 60000 / $CONST;//active
        $reactive28UrtaChirchiq707 = $ges28UrtaChirchiq707[2] * 60000 / $CONST;//reactive
        $water28UrtaChirchiq705 = $energy->getWater($power28UrtaChirchiq705, $pressure, 0.98, 0.935);//water
        $kpd28UrtaChirchiq705 = $energy->getKpd($power28UrtaChirchiq705, $water28UrtaChirchiq705, $pressure, 0.977);//kpd

        $data = array(
            array("id" => 730, "value" => $set28UrtaChirchiq730),
            array("id" => 729, "value" => $set28UrtaChirchiq729),
            array("id" => 754, "value" => $set28UrtaChirchiq754),
            array("id" => 753, "value" => $set28UrtaChirchiq753),
            array("id" => 874, "value" => $set28UrtaChirchiq874),
            array("id" => 873, "value" => $set28UrtaChirchiq873),
            array("id" => 182, "value" => $set28UrtaChirchiq182),
            array("id" => 181, "value" => $set28UrtaChirchiq181),

            array("id" => 825, "value" => $set28UrtaChirchiq825),
            array("id" => 777, "value" => $set28UrtaChirchiq777),
            array("id" => 801, "value" => $set28UrtaChirchiq801),

            array("id" => 722, "value" => $ges28UrtaChirchiq722[2] > 0 ? $energy->getVoltages($ges28UrtaChirchiq722[2], 1100) : $energy->getVoltages($ges28UrtaChirchiq746[2], 1100)),

            array("id" => 849, "value" => $ges28UrtaChirchiq849[2] * 200 / $CONST),
            array("id" => 850, "value" => $ges28UrtaChirchiq850[2] * 200 / $CONST),

            array("id" => 897, "value" => $set28UrtaChirchiq897),
            array("id" => 921, "value" => $set28UrtaChirchiq921),
            array("id" => 945, "value" => $set28UrtaChirchiq945),

            array("id" => 657, "value" => $power28UrtaChirchiq657),//active
            array("id" => 659, "value" => $reactive28UrtaChirchiq659),//reactive
            array("id" => 660, "value" => $kpd28UrtaChirchiq657),//КПД
            array("id" => 661, "value" => $this->getPressure($id, $pressure, $power28UrtaChirchiq657)),//HA
            array("id" => 662, "value" => $water28UrtaChirchiq657),//water

            array("id" => 681, "value" => $power28UrtaChirchiq681),//active
            array("id" => 683, "value" => $reactive28UrtaChirchiq683),//reactive
            array("id" => 684, "value" => $kpd28UrtaChirchiq681),//КПД
            array("id" => 685, "value" => $this->getPressure($id, $pressure, $power28UrtaChirchiq681)),//HA
            array("id" => 686, "value" => $water28UrtaChirchiq681),//water

            array("id" => 705, "value" => $power28UrtaChirchiq705),//active
            array("id" => 707, "value" => $reactive28UrtaChirchiq707),//reactive
            array("id" => 708, "value" => $kpd28UrtaChirchiq705),//КПД
            array("id" => 709, "value" => $this->getPressure($id, $pressure, $power28UrtaChirchiq705)),//HA
            array("id" => 710, "value" => $water28UrtaChirchiq705),//water

            array("id" => 1, "value" => $power28UrtaChirchiq657 + $power28UrtaChirchiq681 + $power28UrtaChirchiq705),
            array("id" => 2, "value" => $reactive28UrtaChirchiq659 + $reactive28UrtaChirchiq683 + $reactive28UrtaChirchiq707),
            array("id" => 3, "value" => $set28UrtaChirchiq730 + $set28UrtaChirchiq754 + $set28UrtaChirchiq873),
            array("id" => 4, "value" => $set28UrtaChirchiq729 + $set28UrtaChirchiq753 + $set28UrtaChirchiq874),
            array("id" => 5, "value" => $set28UrtaChirchiq825 + $set28UrtaChirchiq777 + $set28UrtaChirchiq801),
            array("id" => 6, "value" => $water28UrtaChirchiq657 + $water28UrtaChirchiq681 + $water28UrtaChirchiq705),
            array("id" => 7, "value" => $ges28UrtaChirchiq721[2] > 0 ? $ges28UrtaChirchiq721[2] : $ges28UrtaChirchiq745[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    public function actionServerIspaysoy()
    {
        $water = Water::find()->where(['id_organization' => 27])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $gesIspayUrtaChirchiq210 = $this->getValue($data, "B210");
        $gesIspayUrtaChirchiq209 = $this->getValue($data, "B209");
        $gesIspayUrtaChirchiq205 = $this->getValue($data, "B205");
        $gesIspayUrtaChirchiq197 = $this->getValue($data, "B197");
        $gesIspayUrtaChirchiq198 = $this->getValue($data, "B198");
        $gesIspayUrtaChirchiq201 = $this->getValue($data, "B201");
        $gesIspayUrtaChirchiq202 = $this->getValue($data, "B202");

        $CONST = 1000000;
        $kvt = 1000;

        $setIspayUrtaChirchiq210 = $gesIspayUrtaChirchiq210[2] * 1 / $CONST;
        $setIspayUrtaChirchiq209 = $gesIspayUrtaChirchiq209[2] * 1 / $CONST;

        $setIspayUrtaChirchiq205 = $gesIspayUrtaChirchiq205[2] * 1 / $kvt;


        $powerIspayUrtaChirchiq197 = $gesIspayUrtaChirchiq197[2] * 300 / $CONST;//active
        $reactiveIspayUrtaChirchiq198 = $gesIspayUrtaChirchiq198[2] * 300 / $CONST;//reactive
        $waterIspayUrtaChirchiq197 = $energy->getWater($powerIspayUrtaChirchiq197, $pressure, 0.92, 0.837);//water
        $kpdIspayUrtaChirchiq197 = $energy->getKpd($powerIspayUrtaChirchiq197, $waterIspayUrtaChirchiq197, $pressure, 0.92);//kpd

        $powerIspayUrtaChirchiq201 = $gesIspayUrtaChirchiq201[2] * 300 / $CONST;//active
        $reactiveIspayUrtaChirchiq202 = $gesIspayUrtaChirchiq202[2] * 300 / $CONST;//reactive
        $waterIspayUrtaChirchiq201 = $energy->getWater($powerIspayUrtaChirchiq201, $pressure, 0.92, 0.837);//water
        $kpdIspayUrtaChirchiq201 = $energy->getKpd($powerIspayUrtaChirchiq201, $waterIspayUrtaChirchiq201, $pressure, 0.92);//kpd

        $data = array(
            array("id" => 210, "value" => $setIspayUrtaChirchiq210),
            array("id" => 209, "value" => $setIspayUrtaChirchiq209),
            array("id" => 205, "value" => $setIspayUrtaChirchiq205),


            array("id" => 197, "value" => $powerIspayUrtaChirchiq197),//active
            array("id" => 198, "value" => $reactiveIspayUrtaChirchiq198),//reactive
            array("id" => 199, "value" => $kpdIspayUrtaChirchiq197),//КПД
            array("id" => 200, "value" => 0),//HA
            array("id" => 211, "value" => $waterIspayUrtaChirchiq197),//water

            array("id" => 201, "value" => $powerIspayUrtaChirchiq201),//active
            array("id" => 202, "value" => $reactiveIspayUrtaChirchiq202),//reactive
            array("id" => 203, "value" => $kpdIspayUrtaChirchiq201),//КПД
            array("id" => 204, "value" => 0),//HA
            array("id" => 212, "value" => $waterIspayUrtaChirchiq201),//water

//            array("id" => 1, "value" => $power28UrtaChirchiq657 + $power28UrtaChirchiq681 + $power28UrtaChirchiq705),
//            array("id" => 2, "value" => $reactive28UrtaChirchiq659 + $reactive28UrtaChirchiq683 + $reactive28UrtaChirchiq707),
//            array("id" => 3, "value" => $set28UrtaChirchiq729 + $set28UrtaChirchiq754 + $set28UrtaChirchiq873),
//            array("id" => 4, "value" => $set28UrtaChirchiq730 + $set28UrtaChirchiq753 + $set28UrtaChirchiq874),
//            array("id" => 5, "value" => $set28UrtaChirchiq825 + $set28UrtaChirchiq777 + $set28UrtaChirchiq801),
//            array("id" => 6, "value" => $water28UrtaChirchiq657 + $water28UrtaChirchiq681 + $water28UrtaChirchiq705),
//            array("id" => 7, "value" => $ges28UrtaChirchiq721[2] > 0 ? $ges28UrtaChirchiq721[2] : $ges28UrtaChirchiq745[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    public function actionServer()
    {
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges6UrtaChirchiq226 = $this->getValue($data, "G226");
        $ges6UrtaChirchiq225 = $this->getValue($data, "G225");
        $ges6UrtaChirchiq202 = $this->getValue($data, "G202");
        $ges6UrtaChirchiq201 = $this->getValue($data, "G201");
        $ges6UrtaChirchiq250 = $this->getValue($data, "G250");
        $ges6UrtaChirchiq249 = $this->getValue($data, "G249");
        $ges6UrtaChirchiq105 = $this->getValue($data, "G105");
        $ges6UrtaChirchiq129 = $this->getValue($data, "G129");
        $ges6UrtaChirchiq153 = $this->getValue($data, "G153");
        $ges6UrtaChirchiq177 = $this->getValue($data, "G177");
        $ges6UrtaChirchiq9 = $this->getValue($data, "G9");
        $ges6UrtaChirchiq11 = $this->getValue($data, "G11");
        $ges6UrtaChirchiq33 = $this->getValue($data, "G33");
        $ges6UrtaChirchiq35 = $this->getValue($data, "G35");
        $ges6UrtaChirchiq57 = $this->getValue($data, "G57");
        $ges6UrtaChirchiq59 = $this->getValue($data, "G59");
        $ges6UrtaChirchiq81 = $this->getValue($data, "G81");
        $ges6UrtaChirchiq83 = $this->getValue($data, "G83");
        $ges27UrtaChirchiq489 = $this->getValue($data, "G489");
        $ges27UrtaChirchiq490 = $this->getValue($data, "G490");
        $ges27UrtaChirchiq369 = $this->getValue($data, "G369");
        $ges27UrtaChirchiq370 = $this->getValue($data, "G370");
        $ges27UrtaChirchiq345 = $this->getValue($data, "G345");
        $ges27UrtaChirchiq346 = $this->getValue($data, "G346");
        $ges27UrtaChirchiq441 = $this->getValue($data, "G441");
        $ges27UrtaChirchiq442 = $this->getValue($data, "G442");
        $ges27UrtaChirchiq465 = $this->getValue($data, "G465");
        $ges27UrtaChirchiq466 = $this->getValue($data, "G466");
        $ges27UrtaChirchiq393 = $this->getValue($data, "G393");
        $ges27UrtaChirchiq394 = $this->getValue($data, "G394");
        $ges27UrtaChirchiq417 = $this->getValue($data, "G417");
        $ges27UrtaChirchiq418 = $this->getValue($data, "G418");
        $ges27UrtaChirchiq513 = $this->getValue($data, "G513");
        $ges27UrtaChirchiq514 = $this->getValue($data, "G514");
        $ges27UrtaChirchiq585 = $this->getValue($data, "G585");
        $ges27UrtaChirchiq609 = $this->getValue($data, "G609");
        $ges27UrtaChirchiq633 = $this->getValue($data, "G633");
        $ges27UrtaChirchiq273 = $this->getValue($data, "G273");
        $ges27UrtaChirchiq275 = $this->getValue($data, "G275");
        $ges27UrtaChirchiq297 = $this->getValue($data, "G297");
        $ges27UrtaChirchiq299 = $this->getValue($data, "G299");
        $ges27UrtaChirchiq321 = $this->getValue($data, "G321");
        $ges27UrtaChirchiq323 = $this->getValue($data, "G323");

        $CONST = 1000000;
        $kvt = 1000;

        $energy = new Energy();

        $water6UrtaChirchiq = Water::find()->where(['id_organization' => 24])->orderBy(['date' => SORT_DESC])->one();
        $upBef6UrtaChirchiq = $water6UrtaChirchiq ? $water6UrtaChirchiq['up_bef'] : 0;
        $downBef6UrtaChirchiq = $water6UrtaChirchiq ? $water6UrtaChirchiq['down_bef'] : 0;
        $pressure6UrtaChirchiq = $upBef6UrtaChirchiq - $downBef6UrtaChirchiq;
        $set6UrtaChirchiq226 = $ges6UrtaChirchiq226[2] * 2200000 / $CONST;
        $set6UrtaChirchiq225 = $ges6UrtaChirchiq225[2] * 2200000 / $CONST;
        $set6UrtaChirchiq202 = $ges6UrtaChirchiq202[2] * 2200000 / $CONST;
        $set6UrtaChirchiq201 = $ges6UrtaChirchiq201[2] * 2200000 / $CONST;
        $set6UrtaChirchiq250 = $ges6UrtaChirchiq250[2] * 2200000 / $CONST;
        $set6UrtaChirchiq249 = $ges6UrtaChirchiq249[2] * 2200000 / $CONST;
        $set6UrtaChirchiq105 = $ges6UrtaChirchiq105[2] * 300 / $kvt;
        $set6UrtaChirchiq129 = $ges6UrtaChirchiq129[2] * 300 / $kvt;
        $set6UrtaChirchiq153 = $ges6UrtaChirchiq153[2] * 300 / $kvt;
        $set6UrtaChirchiq177 = $ges6UrtaChirchiq177[2] * 300 / $kvt;

        $power6UrtaChirchiq9 = $ges6UrtaChirchiq9[2] * 276000 / $CONST;//active
        $reactive6UrtaChirchiq11 = $ges6UrtaChirchiq11[2] * 276000 / $CONST;//reactive
        $water6UrtaChirchiq9 = $energy->getWater($power6UrtaChirchiq9, $pressure6UrtaChirchiq, 0.97, 0.934);//water

        $power6UrtaChirchiq33 = $ges6UrtaChirchiq33[2] * 276000 / $CONST;//active
        $reactive6UrtaChirchiq35 = $ges6UrtaChirchiq35[2] * 276000 / $CONST;//reactive
        $water6UrtaChirchiq33 = $energy->getWater($power6UrtaChirchiq33, $pressure6UrtaChirchiq, 0.97, 0.934);//water

        $power6UrtaChirchiq57 = $ges6UrtaChirchiq57[2] * 276000 / $CONST;//active
        $reactive6UrtaChirchiq59 = $ges6UrtaChirchiq59[2] * 276000 / $CONST;//reactive
        $water6UrtaChirchiq57 = $energy->getWater($power6UrtaChirchiq57, $pressure6UrtaChirchiq, 0.97, 0.934);//water

        $power6UrtaChirchiq81 = $ges6UrtaChirchiq81[2] * 276000 / $CONST;//active
        $reactive6UrtaChirchiq83 = $ges6UrtaChirchiq83[2] * 276000 / $CONST;//reactive
        $water6UrtaChirchiq81 = $energy->getWater($power6UrtaChirchiq81, $pressure6UrtaChirchiq, 0.97, 0.934);//water
        $ges6UrtaChirchiqActive = $power6UrtaChirchiq9 + $power6UrtaChirchiq33 + $power6UrtaChirchiq57 + $power6UrtaChirchiq81;
        $ges6UrtaChirchiqReactive = $reactive6UrtaChirchiq11 + $reactive6UrtaChirchiq35 + $reactive6UrtaChirchiq59 + $reactive6UrtaChirchiq83;
        $ges6UrtaChirchiqActiveOut = $set6UrtaChirchiq226  + $set6UrtaChirchiq202 + $set6UrtaChirchiq250;
        $ges6UrtaChirchiqActiveIn = $set6UrtaChirchiq225  + $set6UrtaChirchiq201 + $set6UrtaChirchiq249;
        $ges6UrtaChirchiqOwnNeeds = $set6UrtaChirchiq105 + $set6UrtaChirchiq129 + $set6UrtaChirchiq153 + $set6UrtaChirchiq177;
        $ges6UrtaChirchiqWater = $water6UrtaChirchiq9  + $water6UrtaChirchiq33 + $water6UrtaChirchiq57 + $water6UrtaChirchiq81;
        $ges6UrtaChirchiqAggregateTrue = ($ges6UrtaChirchiq9[2] > 0 ? 1 : 0) +
            ($ges6UrtaChirchiq33[2] > 0 ? 1 : 0) +
            ($ges6UrtaChirchiq57[2] > 0 ? 1 : 0) +
            ($ges6UrtaChirchiq81[2] > 0 ? 1 : 0);
        $ges6UrtaChirchiqAggregateFalse = ($ges6UrtaChirchiq9[2] <= 0 ? 1 : 0) +
            ($ges6UrtaChirchiq33[2] <= 0 ? 1 : 0) +
            ($ges6UrtaChirchiq57[2] <= 0 ? 1 : 0) +
            ($ges6UrtaChirchiq81[2] <= 0 ? 1 : 0);
        //27
        $water27UrtaChirchiq = Water::find()->where(['id_organization' => 25])->orderBy(['date' => SORT_DESC])->one();
        $upBef27UrtaChirchiq = $water27UrtaChirchiq ? $water27UrtaChirchiq['up_bef'] : 0;
        $downBef27UrtaChirchiq = $water27UrtaChirchiq ? $water27UrtaChirchiq['down_bef'] : 0;
        $pressure27UrtaChirchiq = $upBef27UrtaChirchiq - $downBef27UrtaChirchiq;

        $power27UrtaChirchiq273 = $ges27UrtaChirchiq273[2] * 80000 / $CONST;//active
        $reactive27UrtaChirchiq275 = $ges27UrtaChirchiq275[2] * 80000 / $CONST;//reactive
        $water27UrtaChirchiq273 = $energy->getWater($power27UrtaChirchiq273, $pressure27UrtaChirchiq, 0.97, 0.934);//water

        $power27UrtaChirchiq297 = $ges27UrtaChirchiq297[2] * 80000 / $CONST;//active
        $reactive27UrtaChirchiq299 = $ges27UrtaChirchiq299[2] * 80000 / $CONST;//reactive
        $water27UrtaChirchiq297 = $energy->getWater($power27UrtaChirchiq297, $pressure27UrtaChirchiq, 0.97, 0.934);//water

        $power27UrtaChirchiq321 = $ges27UrtaChirchiq321[2] * 80000 / $CONST;//active
        $reactive27UrtaChirchiq323 = $ges27UrtaChirchiq323[2] * 80000 / $CONST;//reactive
        $water27UrtaChirchiq321 = $energy->getWater($power27UrtaChirchiq321, $pressure27UrtaChirchiq, 0.97, 0.934);//water

        $ges27UrtaChirchiqActive = $power27UrtaChirchiq273 + $power27UrtaChirchiq297 + $power27UrtaChirchiq321;
        $ges27UrtaChirchiqReactive = $reactive27UrtaChirchiq275 + $reactive27UrtaChirchiq299 + $reactive27UrtaChirchiq323;
        $ges27UrtaChirchiqActiveOut = ($ges27UrtaChirchiq346[2] * 825000 / $CONST ) + ($ges27UrtaChirchiq370[2] * 825000 / $CONST ) + ($ges27UrtaChirchiq394[2] * 44000 / $CONST ) + ($ges27UrtaChirchiq418[2] * 44000 / $CONST ) + ($ges27UrtaChirchiq442[2] * 66000 / $CONST ) + ($ges27UrtaChirchiq466[2] * 66000 / $CONST ) + ($ges27UrtaChirchiq490[2] * 66000 / $CONST ) + ($ges27UrtaChirchiq514[2] * 44000 / $CONST);
        $ges27UrtaChirchiqActiveIn = ($ges27UrtaChirchiq345[2] * 825000 / $CONST) + ($ges27UrtaChirchiq369[2] * 825000 / $CONST) + ($ges27UrtaChirchiq393[2] * 44000 / $CONST) + ($ges27UrtaChirchiq417[2] * 44000 / $CONST) + ($ges27UrtaChirchiq441[2] * 66000 / $CONST) + ($ges27UrtaChirchiq465[2] * 66000 / $CONST) + ($ges27UrtaChirchiq489[2] * 66000 / $CONST) + ($ges27UrtaChirchiq513[2] * 44000 / $CONST);
        $ges27UrtaChirchiqOwnNeeds = ($ges27UrtaChirchiq585[2] * 200 / $kvt) + ($ges27UrtaChirchiq609[2] * 1200 * 60 / $kvt) + ($ges27UrtaChirchiq633[2] * 1200 * 60 / $kvt);
        $ges27UrtaChirchiqWater = $water27UrtaChirchiq273 + $water27UrtaChirchiq297 + $water27UrtaChirchiq321;
        $ges27UrtaChirchiqAggregateTrue = ($ges27UrtaChirchiq273[2] > 0 ? 1 : 0) + ($ges27UrtaChirchiq297[2] > 0 ? 1 : 0) + ($ges27UrtaChirchiq321[2] > 0 ? 1 : 0);
        $ges27UrtaChirchiqAggregateFalse = ($ges27UrtaChirchiq273[2] <= 0 ? 1 : 0) + ($ges27UrtaChirchiq297[2] <= 0 ? 1 : 0) + ($ges27UrtaChirchiq321[2] <= 0 ? 1 : 0);
        //28
        $water28UrtaChirchiq = Water::find()->where(['id_organization' => 26])->orderBy(['date' => SORT_DESC])->one();
        $upBef28UrtaChirchiq = $water28UrtaChirchiq ? $water28UrtaChirchiq['up_bef'] : 0;
        $downBef28UrtaChirchiq = $water28UrtaChirchiq ? $water28UrtaChirchiq['down_bef'] : 0;
        $pressure28UrtaChirchiq = $upBef28UrtaChirchiq - $downBef28UrtaChirchiq;
        $ges28UrtaChirchiq730 = $this->getValue($data, "G730");
        $ges28UrtaChirchiq729 = $this->getValue($data, "G729");
        $ges28UrtaChirchiq754 = $this->getValue($data, "G754");
        $ges28UrtaChirchiq753 = $this->getValue($data, "G753");
        $ges28UrtaChirchiq874 = $this->getValue($data, "G874");
        $ges28UrtaChirchiq873 = $this->getValue($data, "G873");
        $ges28UrtaChirchiq825 = $this->getValue($data, "G825");
        $ges28UrtaChirchiq777 = $this->getValue($data, "G777");
        $ges28UrtaChirchiq801 = $this->getValue($data, "G801");
        $ges28UrtaChirchiq657 = $this->getValue($data, "G657");
        $ges28UrtaChirchiq659 = $this->getValue($data, "G659");
        $ges28UrtaChirchiq681 = $this->getValue($data, "G681");
        $ges28UrtaChirchiq683 = $this->getValue($data, "G683");
        $ges28UrtaChirchiq705 = $this->getValue($data, "G705");
        $ges28UrtaChirchiq707 = $this->getValue($data, "G707");

        $CONST = 1000000;
        $kvt = 1000;

        $set28UrtaChirchiq730 = $ges28UrtaChirchiq730[2] * 660000 / $CONST;
        $set28UrtaChirchiq729 = $ges28UrtaChirchiq729[2] * 660000 / $CONST;
        $set28UrtaChirchiq754 = $ges28UrtaChirchiq754[2] * 660000 / $CONST;
        $set28UrtaChirchiq753 = $ges28UrtaChirchiq753[2] * 660000 / $CONST;
        $set28UrtaChirchiq874 = $ges28UrtaChirchiq874[2] * 2400 / $CONST;
        $set28UrtaChirchiq873 = $ges28UrtaChirchiq873[2] * 2400 / $CONST;

        $set28UrtaChirchiq825 = $ges28UrtaChirchiq825[2] * 1200 / $kvt;
        $set28UrtaChirchiq777 = $ges28UrtaChirchiq777[2] * 200 / $kvt;
        $set28UrtaChirchiq801 = $ges28UrtaChirchiq801[2] * 200 / $kvt;

        $power28UrtaChirchiq657 = $ges28UrtaChirchiq657[2] * 60000 / $CONST;//active
        $reactive28UrtaChirchiq659 = $ges28UrtaChirchiq659[2] * 60000 / $CONST;//reactive
        $water28UrtaChirchiq657 = $energy->getWater($power28UrtaChirchiq657, $pressure28UrtaChirchiq, 0.98, 0.935);//water

        $power28UrtaChirchiq681 = $ges28UrtaChirchiq681[2] * 60000 / $CONST;//active
        $reactive28UrtaChirchiq683 = $ges28UrtaChirchiq683[2] * 60000 / $CONST;//reactive
        $water28UrtaChirchiq681 = $energy->getWater($power28UrtaChirchiq681, $pressure28UrtaChirchiq, 0.98, 0.935);//water

        $power28UrtaChirchiq705 = $ges28UrtaChirchiq705[2] * 60000 / $CONST;//active
        $reactive28UrtaChirchiq707 = $ges28UrtaChirchiq707[2] * 60000 / $CONST;//reactive
        $water28UrtaChirchiq705 = $energy->getWater($power28UrtaChirchiq705, $pressure28UrtaChirchiq, 0.98, 0.935);//water

        $ges28UrtaChirchiqActive = $power28UrtaChirchiq657 + $power28UrtaChirchiq681 + $power28UrtaChirchiq705;
        $ges28UrtaChirchiqReactive = $reactive28UrtaChirchiq659 + $reactive28UrtaChirchiq683 + $reactive28UrtaChirchiq707;
        $ges28UrtaChirchiqActiveOut = $set28UrtaChirchiq730 + $set28UrtaChirchiq754 + $set28UrtaChirchiq873;
        $ges28UrtaChirchiqActiveIn = $set28UrtaChirchiq729 + $set28UrtaChirchiq753 + $set28UrtaChirchiq874;
        $ges28UrtaChirchiqOwnNeeds = $set28UrtaChirchiq825 + $set28UrtaChirchiq777 + $set28UrtaChirchiq801;
        $ges28UrtaChirchiqWater = $water28UrtaChirchiq657 + $water28UrtaChirchiq681 + $water28UrtaChirchiq705;
        $ges28UrtaChirchiqAggregateTrue =
            ($ges28UrtaChirchiq657[2] > 0 ? 1 : 0) +
            ($ges28UrtaChirchiq681[2] > 0 ? 1 : 0) +
            ($ges28UrtaChirchiq705[2] > 0 ? 1 : 0);
        $ges28UrtaChirchiqAggregateError = 0;
        $ges28UrtaChirchiqAggregateFalse =
            ($ges28UrtaChirchiq657[2] <= 0 ? 1 : 0) +
            ($ges28UrtaChirchiq681[2] <= 0 ? 1 : 0) +
            ($ges28UrtaChirchiq705[2] <= 0 ? 1 : 0) - $ges28UrtaChirchiqAggregateError;

        $active = $ges6UrtaChirchiqActive + $ges27UrtaChirchiqActive + $ges28UrtaChirchiqActive;
        $reactive = $ges6UrtaChirchiqReactive + $ges27UrtaChirchiqReactive + $ges28UrtaChirchiqReactive;
        $activeOut = $ges6UrtaChirchiqActiveOut + $ges27UrtaChirchiqActiveOut + $ges28UrtaChirchiqActiveOut;
        $activeIn = $ges6UrtaChirchiqActiveIn + $ges27UrtaChirchiqActiveIn + $ges28UrtaChirchiqActiveIn;
        $ownNeeds = $ges6UrtaChirchiqOwnNeeds + $ges27UrtaChirchiqOwnNeeds + $ges28UrtaChirchiqOwnNeeds;
        $water = $ges6UrtaChirchiqWater + $ges27UrtaChirchiqWater + $ges28UrtaChirchiqWater;
        $true = $ges6UrtaChirchiqAggregateTrue + $ges27UrtaChirchiqAggregateTrue + $ges28UrtaChirchiqAggregateTrue;
        $false = $ges6UrtaChirchiqAggregateFalse + $ges27UrtaChirchiqAggregateFalse + $ges28UrtaChirchiqAggregateFalse;
        $error = $ges28UrtaChirchiqAggregateError;

        $data = array(
            array("id" => 1, "value" => $active),
            array("id" => 2, "value" => $reactive),
            array("id" => 3, "value" => $activeOut),
            array("id" => 4, "value" => $activeIn),
            array("id" => 5, "value" => $ownNeeds),
            array("id" => 6, "value" => $water),
            array("id" => 7, "value" => $true),
            array("id" => 8, "value" => $false + 2),
            array("id" => 9, "value" => $error),

            array("id" => 10, "value" => $ges6UrtaChirchiqActive),
            array("id" => 12, "value" => $ges6UrtaChirchiqAggregateTrue),
            array("id" => 13, "value" => $ges6UrtaChirchiqAggregateFalse),

            array("id" => 14, "value" => $ges27UrtaChirchiqActive),
            array("id" => 15, "value" => $ges27UrtaChirchiqAggregateTrue),
            array("id" => 16, "value" => $ges27UrtaChirchiqAggregateFalse),

            array("id" => 17, "value" => $ges28UrtaChirchiqActive),
            array("id" => 18, "value" => $ges28UrtaChirchiqAggregateTrue),
            array("id" => 19, "value" => $ges28UrtaChirchiqAggregateFalse),
            array("id" => 20, "value" => $ges28UrtaChirchiqAggregateError),

        );

        echo json_encode($data);
    }

}
