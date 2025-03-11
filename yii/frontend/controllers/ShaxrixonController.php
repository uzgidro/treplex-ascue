<?php

namespace frontend\controllers;

use common\models\Water;

class ShaxrixonController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes5()
    {
        return $this->render('ges5');
    }

    public function actionGes6()
    {
        return $this->render('ges6');
    }

    public function actionGes3()
    {
        return $this->render('ges3');
    }

    public function actionJfk1()
    {
        return $this->render('jfk1');
    }

    public function actionJfk2()
    {
        return $this->render('jfk2');
    }

    protected string $url = "http://user:usr_g3S4@192.168.40.215:10134/crq?req=current";

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

    //(ГЭС-5A)
    public function actionServer5()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $water = Water::find()->where(['id_organization' => 41])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges5Shaxrixon624 = $this->getValue($data, "G624");
        $ges5Shaxrixon601 = $this->getValue($data, "G601");
        $ges5Shaxrixon670 = $this->getValue($data, "G670");
        $ges5Shaxrixon647 = $this->getValue($data, "G647");
        $ges5Shaxrixon475 = $this->getValue($data, "G475");
        $ges5Shaxrixon498 = $this->getValue($data, "G498");
        $ges5Shaxrixon452 = $this->getValue($data, "G452");
        $ges5Shaxrixon383 = $this->getValue($data, "G383");
        $ges5Shaxrixon613 = $this->getValue($data, "G613");
        $ges5Shaxrixon600 = $this->getValue($data, "G600");
        $ges5Shaxrixon637 = $this->getValue($data, "G637");
        $ges5Shaxrixon623 = $this->getValue($data, "G623");
        $ges5Shaxrixon487 = $this->getValue($data, "G487");
        $ges5Shaxrixon510 = $this->getValue($data, "G510");
        $ges5Shaxrixon474 = $this->getValue($data, "G474");
        $ges5Shaxrixon497 = $this->getValue($data, "G497");
        $ges5Shaxrixon406 = $this->getValue($data, "G406");
        $ges5Shaxrixon407 = $this->getValue($data, "G407");
        $ges5Shaxrixon429 = $this->getValue($data, "G429");
        $ges5Shaxrixon430 = $this->getValue($data, "G430");
        $ges5Shaxrixon314 = $this->getValue($data, "G314");
        $ges5Shaxrixon337 = $this->getValue($data, "G337");
        $ges5Shaxrixon693 = $this->getValue($data, "G693");
        $ges5Shaxrixon360 = $this->getValue($data, "G360");
        $ges5Shaxrixon291 = $this->getValue($data, "G291");
        $ges5Shaxrixon531 = $this->getValue($data, "G531");
        $ges5Shaxrixon571 = $this->getValue($data, "G571");
        $ges5Shaxrixon418 = $this->getValue($data, "G418");
        $ges5Shaxrixon441 = $this->getValue($data, "G441");
        $ges5Shaxrixon382 = $this->getValue($data, "G382");
        $ges5Shaxrixon451 = $this->getValue($data, "G451");
        $ges5Shaxrixon474 = $this->getValue($data, "G474");
        $ges5Shaxrixon497 = $this->getValue($data, "G497");

        $set5Shaxrixon670 = $ges5Shaxrixon670[2] * 10500 / $CONST;
        $set5Shaxrixon647 = $ges5Shaxrixon647[2] * 21000 / $CONST;
        $set5Shaxrixon624 = $ges5Shaxrixon624[2] * 21000 / $CONST;
        $set5Shaxrixon601 = $ges5Shaxrixon601[2] * 21000 / $CONST;
        $set5Shaxrixon498 = $ges5Shaxrixon498[2] * 66000 / $CONST;
        $set5Shaxrixon475 = $ges5Shaxrixon475[2] * 44000 / $CONST;
        $set5Shaxrixon452 = $ges5Shaxrixon452[2] * 44000 / $CONST;
        $set5Shaxrixon383 = $ges5Shaxrixon383[2] * 88000 / $CONST;

        $power5Shaxrixon406 = $ges5Shaxrixon406[2] * 10080 / $CONST;//active
        $reactive5Shaxrixon407 = $ges5Shaxrixon407[2] * 10080 / $CONST;//reactive
        $water5Shaxrixon406 = $energy->getWater($power5Shaxrixon406, $pressure, 0.95, 0.914);//water
        $kpd5Shaxrixon406 = $energy->getKpd($power5Shaxrixon406, $water5Shaxrixon406, $pressure, 0.9535);//kpd

        $power5Shaxrixon429 = $ges5Shaxrixon429[2] * 10080 / $CONST;//active
        $reactive5Shaxrixon430 = $ges5Shaxrixon430[2] * 10080 / $CONST;//reactive
        $water5Shaxrixon429 = $energy->getWater($power5Shaxrixon429, $pressure, 0.95, 0.914);//water
        $kpd5Shaxrixon429 = $energy->getKpd($power5Shaxrixon429, $water5Shaxrixon429, $pressure, 0.952);//kpd

        $set5Shaxrixon314 = $ges5Shaxrixon314[2] * 100.8 / $kvt;
        $set5Shaxrixon337 = $ges5Shaxrixon337[2] * 100.8 / $kvt;
        $set5Shaxrixon693 = $ges5Shaxrixon693[2] * 20 / $kvt;

        $set5Shaxrixon291 = $ges5Shaxrixon291[2] * 1260 / $CONST;
        $set5Shaxrixon360 = $ges5Shaxrixon360[2] * 3780 / $CONST;
        $set5Shaxrixon531 = $ges5Shaxrixon531[2] * 1260 / $CONST;
        $set5Shaxrixon571 = $ges5Shaxrixon571[2] * 630 / $CONST;

        $data = array(
            array("id" => 624, "value" => $set5Shaxrixon624),
            array("id" => 601, "value" => $set5Shaxrixon601),
            array("id" => 670, "value" => $set5Shaxrixon670),
            array("id" => 647, "value" => $set5Shaxrixon647),
            array("id" => 475, "value" => $set5Shaxrixon475),
            array("id" => 498, "value" => $set5Shaxrixon498),
            array("id" => 452, "value" => $set5Shaxrixon452),
            array("id" => 383, "value" => $set5Shaxrixon383),

            array("id" => 613, "value" => $ges5Shaxrixon613[2] > 0 ? $energy->getVoltages($ges5Shaxrixon613[2], 350) : $energy->getVoltages($ges5Shaxrixon637[2], 350)),
            array("id" => 487, "value" => $ges5Shaxrixon487[2] > 0 ? $energy->getVoltages($ges5Shaxrixon487[2], 1100) : $energy->getVoltages($ges5Shaxrixon510[2], 1100)),
            array("id" => 418, "value" => $ges5Shaxrixon418[2] > 0 ? $energy->getVoltages($ges5Shaxrixon418[2], 63) : $energy->getVoltages($ges5Shaxrixon441[2], 63)),

            array("id" => 406, "value" => $power5Shaxrixon406),//active
            array("id" => 407, "value" => $reactive5Shaxrixon407),//reactive
            array("id" => 408, "value" => $kpd5Shaxrixon406),//КПД
            array("id" => 409, "value" => 0),//HA
            array("id" => 410, "value" => $water5Shaxrixon406),//water

            array("id" => 429, "value" => $power5Shaxrixon429),//active
            array("id" => 430, "value" => $reactive5Shaxrixon430),//reactive
            array("id" => 431, "value" => $kpd5Shaxrixon429),//КПД
            array("id" => 432, "value" => 0),//HA
            array("id" => 433, "value" => $water5Shaxrixon429),//water

            array("id" => 314, "value" => $set5Shaxrixon314),
            array("id" => 337, "value" => $set5Shaxrixon337),
            array("id" => 693, "value" => $set5Shaxrixon693),

            array("id" => 360, "value" => $set5Shaxrixon360),
            array("id" => 291, "value" => $set5Shaxrixon291),
            array("id" => 531, "value" => $set5Shaxrixon531),
            array("id" => 571, "value" => $set5Shaxrixon571),

            array("id" => 1, "value" => $power5Shaxrixon406 + $power5Shaxrixon429),
            array("id" => 2, "value" => $reactive5Shaxrixon407 + $reactive5Shaxrixon430),
            array("id" => 3, "value" =>
            ($set5Shaxrixon624 > 0 ? $set5Shaxrixon624 : 0) +
            ($set5Shaxrixon601 > 0 ? $set5Shaxrixon601 : 0) +
            ($set5Shaxrixon670 > 0 ? $set5Shaxrixon670 : 0) +
            ($set5Shaxrixon647 > 0 ? $set5Shaxrixon647 : 0) +
            ($set5Shaxrixon475 > 0 ? $set5Shaxrixon475 : 0) +
            ($set5Shaxrixon498 > 0 ? $set5Shaxrixon498 : 0) +
            ($set5Shaxrixon452 > 0 ? $set5Shaxrixon452 : 0) +
            ($set5Shaxrixon383 > 0 ? $set5Shaxrixon383 : 0) +
            $set5Shaxrixon360 +
            $set5Shaxrixon291 +
            $set5Shaxrixon531 +
            $set5Shaxrixon571),
            array("id" => 4, "value" =>
                ($set5Shaxrixon624 < 0 ? $set5Shaxrixon624 : 0) +
                ($set5Shaxrixon601 < 0 ? $set5Shaxrixon601 : 0) +
                ($set5Shaxrixon670 < 0 ? $set5Shaxrixon670 : 0) +
                ($set5Shaxrixon647 < 0 ? $set5Shaxrixon647 : 0) +
                ($set5Shaxrixon475 < 0 ? $set5Shaxrixon475 : 0) +
                ($set5Shaxrixon498 < 0 ? $set5Shaxrixon498 : 0) +
                ($set5Shaxrixon452 < 0 ? $set5Shaxrixon452 : 0) +
                ($set5Shaxrixon383 < 0 ? $set5Shaxrixon383 : 0)
            ),
            array("id" => 5, "value" => $set5Shaxrixon314),
            array("id" => 6, "value" => $water5Shaxrixon406 + $water5Shaxrixon429),
            array("id" => 7, "value" => $ges5Shaxrixon382[2] > 0 ? $ges5Shaxrixon382[2] :
                ($ges5Shaxrixon451[2] > 0 ? $ges5Shaxrixon451[2] : ($ges5Shaxrixon474[2] > 0 ? $ges5Shaxrixon474[2] : $ges5Shaxrixon497[2]))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ГЭС-6A)
    public function actionServer6()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $water = Water::find()->where(['id_organization' => 64])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges6Shaxrixon49 = $this->getValue($data, "G49");
        $ges6Shaxrixon72 = $this->getValue($data, "G72");
        $ges6Shaxrixon623 = $this->getValue($data, "G623");
        $ges6Shaxrixon600 = $this->getValue($data, "G600");
        $ges6Shaxrixon187 = $this->getValue($data, "G187");
        $ges6Shaxrixon188 = $this->getValue($data, "G188");
        $ges6Shaxrixon210 = $this->getValue($data, "G210");
        $ges6Shaxrixon211 = $this->getValue($data, "G211");
        $ges6Shaxrixon3 = $this->getValue($data, "G3");
        $ges6Shaxrixon26 = $this->getValue($data, "G26");
        $ges6Shaxrixon118 = $this->getValue($data, "G118");
        $ges6Shaxrixon141 = $this->getValue($data, "G141");
        $ges6Shaxrixon272 = $this->getValue($data, "G272");
        $ges6Shaxrixon164 = $this->getValue($data, "G164");
        $ges6Shaxrixon243 = $this->getValue($data, "G243");
        $ges6Shaxrixon95 = $this->getValue($data, "G95");
        $ges6Shaxrixon71 = $this->getValue($data, "G71");
        $ges6Shaxrixon48 = $this->getValue($data, "G48");
        $ges6Shaxrixon84 = $this->getValue($data, "G84");
        $ges6Shaxrixon61 = $this->getValue($data, "G61");
        $ges6Shaxrixon222 = $this->getValue($data, "G222");
        $ges6Shaxrixon199 = $this->getValue($data, "G199");
        $ges6Shaxrixon38 = $this->getValue($data, "G38");

        $set6Shaxrixon49 = $ges6Shaxrixon49[2] * 10500 / $CONST;
        $set6Shaxrixon72 = $ges6Shaxrixon72[2] * 14000 / $CONST;

        $set6Shaxrixon95 = $ges6Shaxrixon95[2] * 2400 / $CONST;
        $set6Shaxrixon118 = $ges6Shaxrixon118[2] * 4800 / $CONST;
        $set6Shaxrixon141 = $ges6Shaxrixon141[2] * 3600 / $CONST;
        $set6Shaxrixon164 = $ges6Shaxrixon164[2] * 600 / $CONST;
        $set6Shaxrixon243 = $ges6Shaxrixon243[2] * 3600 / $CONST;
        $set6Shaxrixon272 = $ges6Shaxrixon272[2] * 3600 / $CONST;

        $power6Shaxrixon187 = $ges6Shaxrixon187[2] * 9000 / $CONST;//active
        $reactive6Shaxrixon188 = $ges6Shaxrixon188[2] * 9000 / $CONST;//reactive
        $water6Shaxrixon187 = $energy->getWater($power6Shaxrixon187, $pressure, 0.96, 0.914);//water
        $kpd6Shaxrixon187 = $energy->getKpd($power6Shaxrixon187, $water6Shaxrixon187, $pressure, 0.955);//kpd

        $power6Shaxrixon210 = $ges6Shaxrixon210[2] * 9000 / $CONST;//active
        $reactive6Shaxrixon211 = $ges6Shaxrixon211[2] * 9000 / $CONST;//reactive
        $water6Shaxrixon210 = $energy->getWater($power6Shaxrixon210, $pressure, 0.96, 0.914);//water
        $kpd6Shaxrixon210 = $energy->getKpd($power6Shaxrixon210, $water6Shaxrixon210, $pressure, 0.955);//kpd

        $set6Shaxrixon3 = $ges6Shaxrixon3[2] * 120 / $kvt;
        $set6Shaxrixon26 = $ges6Shaxrixon26[2] * 120 / $kvt;

        $data = array(
            array("id" => 49, "value" => $set6Shaxrixon49),
            array("id" => 72, "value" => $set6Shaxrixon72),

            array("id" => 61, "value" => $ges6Shaxrixon61[2] > 0 ? $energy->getVoltages($ges6Shaxrixon61[2], 350) : $energy->getVoltages($ges6Shaxrixon84[2], 350)),
            array("id" => 38, "value" => $ges6Shaxrixon38[2] > 0 ? $energy->getVoltages($ges6Shaxrixon38[2], 60) :
                ($ges6Shaxrixon199[2] > 0 ? $energy->getVoltages($ges6Shaxrixon199[2], 60) : $energy->getVoltages($ges6Shaxrixon222[2], 60))),

            array("id" => 300, "value" => $set6Shaxrixon3),
            array("id" => 26, "value" => $set6Shaxrixon26),

            array("id" => 118, "value" =>  $set6Shaxrixon118),
            array("id" => 141, "value" =>  $set6Shaxrixon141),
            array("id" => 272, "value" =>  $set6Shaxrixon272),
            array("id" => 164, "value" =>  $set6Shaxrixon164),
            array("id" => 95, "value" =>  $set6Shaxrixon95),
            array("id" => 243, "value" =>  $set6Shaxrixon243),

            array("id" => 187, "value" => $power6Shaxrixon187),//active
            array("id" => 188, "value" => $reactive6Shaxrixon188),//reactive
            array("id" => 189, "value" => $kpd6Shaxrixon187),//КПД
            array("id" => 190, "value" => 0),//HA
            array("id" => 191, "value" => $water6Shaxrixon187),//water

            array("id" => 210, "value" => $power6Shaxrixon210),//active
            array("id" => 211, "value" => $reactive6Shaxrixon211),//reactive
            array("id" => 212, "value" => $kpd6Shaxrixon210),//КПД
            array("id" => 213, "value" => 0),//HA
            array("id" => 214, "value" => $water6Shaxrixon210),//water

            array("id" => 1, "value" => $power6Shaxrixon187 + $power6Shaxrixon210),
            array("id" => 2, "value" => $reactive6Shaxrixon188 + $reactive6Shaxrixon211),
            array("id" => 3, "value" =>
                ($set6Shaxrixon49 > 0 ? $set6Shaxrixon49 : 0) +
                ($set6Shaxrixon72 > 0 ? $set6Shaxrixon72 : 0) +
                $set6Shaxrixon118 + $set6Shaxrixon141 + $set6Shaxrixon272 + $set6Shaxrixon164 + $set6Shaxrixon95 + $set6Shaxrixon243),
            array("id" => 4, "value" =>
                ($set6Shaxrixon49 < 0 ? $set6Shaxrixon49 : 0) +
                ($set6Shaxrixon72 < 0 ? $set6Shaxrixon72 : 0)
            ),
            array("id" => 5, "value" => $set6Shaxrixon3 + $set6Shaxrixon26),
            array("id" => 6, "value" => $water6Shaxrixon187 + $water6Shaxrixon210),
            array("id" => 7, "value" => $ges6Shaxrixon71[2] > 0 ? $ges6Shaxrixon71[2] : $ges6Shaxrixon48[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ЮФК-1)
    public function actionServer1()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $water = Water::find()->where(['id_organization' => 65])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges1Shaxrixon1087 = $this->getValue($data, "G1087");
        $ges1Shaxrixon1110 = $this->getValue($data, "G1110");
        $ges1Shaxrixon1133 = $this->getValue($data, "G1133");
        $ges1Shaxrixon1202 = $this->getValue($data, "G1202");
        $ges1Shaxrixon1179 = $this->getValue($data, "G1179");
        $ges1Shaxrixon1191 = $this->getValue($data, "G1191");
        $ges1Shaxrixon1214 = $this->getValue($data, "G1214");
        $ges1Shaxrixon1178 = $this->getValue($data, "G1178");
        $ges1Shaxrixon1099 = $this->getValue($data, "G1099");
        $ges1Shaxrixon1122 = $this->getValue($data, "G1122");
        $ges1Shaxrixon1156 = $this->getValue($data, "G1156");
        $ges1Shaxrixon1157 = $this->getValue($data, "G1157");
        $ges1Shaxrixon1064 = $this->getValue($data, "G1064");
        $ges1Shaxrixon1132 = $this->getValue($data, "G1132");

        $power1Shaxrixon1156 = $ges1Shaxrixon1156[2] * 1890 / $CONST;//active
        $reactive1Shaxrixon1157 = $ges1Shaxrixon1157[2] * 1890 / $CONST;//reactive
        $water1Shaxrixon1156 = $energy->getWater($power1Shaxrixon1156, $pressure, 0.95, 0.894);//water
        $kpd1Shaxrixon1156 = $energy->getKpd($power1Shaxrixon1156, $water1Shaxrixon1156, $pressure, 0.95);//kpd

        $set1Shaxrixon1064 = $ges1Shaxrixon1064[2] * 50 / $kvt;

        $set1Shaxrixon1087 = $ges1Shaxrixon1087[2] * 10500 / $CONST;
        $set1Shaxrixon1110 = $ges1Shaxrixon1110[2] * 10500 / $CONST;
        $set1Shaxrixon1133 = $ges1Shaxrixon1133[2] * 10500 / $CONST;
        $set1Shaxrixon1202 = $ges1Shaxrixon1202[2] * 6300 / $CONST;
        $set1Shaxrixon1179 = $ges1Shaxrixon1179[2] * 6300 / $CONST;

        $data = array(
            array("id" => 1087, "value" => $set1Shaxrixon1087),
            array("id" => 1110, "value" => $set1Shaxrixon1110),
            array("id" => 1133, "value" => $set1Shaxrixon1133),
            array("id" => 1202, "value" => $set1Shaxrixon1202),
            array("id" => 1179, "value" => $set1Shaxrixon1179),

            array("id" => 1191, "value" => $ges1Shaxrixon1191[2] > 0 ? $energy->getVoltages($ges1Shaxrixon1191[2], 105) : $energy->getVoltages($ges1Shaxrixon1214[2], 105)),
            array("id" => 1099, "value" => $ges1Shaxrixon1099[2] > 0 ? $energy->getVoltages($ges1Shaxrixon1099[2], 350) : $energy->getVoltages($ges1Shaxrixon1122[2], 350)),

            array("id" => 1156, "value" => $power1Shaxrixon1156),//active
            array("id" => 1157, "value" => $reactive1Shaxrixon1157),//reactive
            array("id" => 1158, "value" => $kpd1Shaxrixon1156),//КПД
            array("id" => 1159, "value" => 0),//HA
            array("id" => 1160, "value" => $water1Shaxrixon1156),//water

            array("id" => 1064, "value" => $set1Shaxrixon1064),

            array("id" => 1, "value" => $power1Shaxrixon1156),
            array("id" => 2, "value" => $reactive1Shaxrixon1157),
            array("id" => 3, "value" =>
                ($set1Shaxrixon1087 > 0 ? $set1Shaxrixon1087 : 0) +
                ($set1Shaxrixon1110 > 0 ? $set1Shaxrixon1110 : 0) +
                ($set1Shaxrixon1133 > 0 ? $set1Shaxrixon1133 : 0) +
                $set1Shaxrixon1202 +
                $set1Shaxrixon1179),
            array("id" => 4, "value" =>
                ($set1Shaxrixon1087 < 0 ? $set1Shaxrixon1087 : 0) +
                ($set1Shaxrixon1110 < 0 ? $set1Shaxrixon1110 : 0) +
                ($set1Shaxrixon1133 < 0 ? $set1Shaxrixon1133 : 0)),
            array("id" => 5, "value" => $set1Shaxrixon1064),
            array("id" => 6, "value" => $water1Shaxrixon1156),
            array("id" => 7, "value" => $ges1Shaxrixon1132[2] > 0 ? $ges1Shaxrixon1132[2] : $ges1Shaxrixon1178[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //(ЮФК-2)
    public function actionServer2()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $water = Water::find()->where(['id_organization' => 66])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges2Shaxrixon846 = $this->getValue($data, "G846");
        $ges2Shaxrixon819 = $this->getValue($data, "G819");
        $ges2Shaxrixon792 = $this->getValue($data, "G792");
        $ges2Shaxrixon873 = $this->getValue($data, "G873");
        $ges2Shaxrixon795 = $this->getValue($data, "G795");
        $ges2Shaxrixon876 = $this->getValue($data, "G876");
        $ges2Shaxrixon1053 = $this->getValue($data, "G1053");
        $ges2Shaxrixon900 = $this->getValue($data, "G900");
        $ges2Shaxrixon901 = $this->getValue($data, "G901");
        $ges2Shaxrixon1041 = $this->getValue($data, "G1041");
        $ges2Shaxrixon1018 = $this->getValue($data, "G1018");
        $ges2Shaxrixon1004 = $this->getValue($data, "G1004");
        $ges2Shaxrixon927 = $this->getValue($data, "G927");
        $ges2Shaxrixon981 = $this->getValue($data, "G981");
        $ges2Shaxrixon954 = $this->getValue($data, "G954");
        $ges2Shaxrixon482 = $this->getValue($data, "G482");
        $ges2Shaxrixon971 = $this->getValue($data, "G971");
        $ges2Shaxrixon863 = $this->getValue($data, "G863");
        $ges2Shaxrixon836 = $this->getValue($data, "G836");
        $ges2Shaxrixon809 = $this->getValue($data, "G809");

        $power2Shaxrixon900 = $ges2Shaxrixon900[2] * 12600 / $CONST;//active
        $reactive2Shaxrixon901 = $ges2Shaxrixon901[2] * 12600 / $CONST;//reactive
        $water2Shaxrixon900 = $energy->getWater($power2Shaxrixon900, $pressure, 0.91, 0.91);//water
        $kpd2Shaxrixon900 = $energy->getKpd($power2Shaxrixon900, $water2Shaxrixon900, $pressure, 0.91);//kpd

        $set2Shaxrixon981 = $ges2Shaxrixon981[2] * 100 / $kvt;
        $set2Shaxrixon954 = $ges2Shaxrixon954[2] * 100 / $kvt;

        $set2Shaxrixon792 = $ges2Shaxrixon792[2] * 10500 / $CONST;
        $set2Shaxrixon819 = $ges2Shaxrixon819[2] * 16500 / $CONST;
        $set2Shaxrixon846 = $ges2Shaxrixon846[2] * 16500 / $CONST;
        $set2Shaxrixon873 = $ges2Shaxrixon873[2] * 10500 / $CONST;
        $set2Shaxrixon927 = $ges2Shaxrixon927[2] * 2100 / $CONST;
        $set2Shaxrixon1004 = $ges2Shaxrixon1004[2] * 2100 / $CONST;
        $set2Shaxrixon1018 = $ges2Shaxrixon1018[2] * 2100 / $CONST;
        $set2Shaxrixon1041 = $ges2Shaxrixon1041[2] * 2100 / $CONST;

        $data = array(
            array("id" => 792, "value" => $set2Shaxrixon792),
            array("id" => 819, "value" => $set2Shaxrixon819),
            array("id" => 846, "value" => $set2Shaxrixon846),
            array("id" => 873, "value" => $set2Shaxrixon873),
            array("id" => 927, "value" => $set2Shaxrixon927),
            array("id" => 1004, "value" => $set2Shaxrixon1004),
            array("id" => 1018, "value" => $set2Shaxrixon1018),
            array("id" => 1041, "value" => $set2Shaxrixon1041),

            array("id" => 795, "value" => $energy->getVoltages($ges2Shaxrixon795[2], 350)),
            array("id" => 876, "value" => $energy->getVoltages($ges2Shaxrixon876[2], 350)),
            array("id" => 1053, "value" => $ges2Shaxrixon1053[2] > 0 ? $energy->getVoltages($ges2Shaxrixon1053[2], 105) : $energy->getVoltages($ges2Shaxrixon795[2], 350)),

            array("id" => 900, "value" => $power2Shaxrixon900),//active
            array("id" => 901, "value" => $reactive2Shaxrixon901),//reactive
            array("id" => 902, "value" => $kpd2Shaxrixon900),//КПД
            array("id" => 903, "value" => 0),//HA
            array("id" => 904, "value" => $water2Shaxrixon900),//water

            array("id" => 981, "value" => $set2Shaxrixon981),
            array("id" => 954, "value" => $set2Shaxrixon954),

            array("id" => 1, "value" => $power2Shaxrixon900),
            array("id" => 2, "value" => $reactive2Shaxrixon901),
            array("id" => 3, "value" =>
                ($set2Shaxrixon792 > 0 ? $set2Shaxrixon792 : 0) +
                ($set2Shaxrixon819 > 0 ? $set2Shaxrixon819 : 0) +
                ($set2Shaxrixon846 > 0 ? $set2Shaxrixon846 : 0) +
                ($set2Shaxrixon873 > 0 ? $set2Shaxrixon873 : 0) +
                ($set2Shaxrixon927 > 0 ? $set2Shaxrixon927 : 0) +
                ($set2Shaxrixon1004 > 0 ? $set2Shaxrixon1004 : 0) +
                ($set2Shaxrixon1018 > 0 ? $set2Shaxrixon1018 : 0) +
                ($set2Shaxrixon1041 > 0 ? $set2Shaxrixon1041 : 0)),
            array("id" => 4, "value" =>
                ($set2Shaxrixon792 < 0 ? $set2Shaxrixon792 : 0) +
                ($set2Shaxrixon819 < 0 ? $set2Shaxrixon819 : 0) +
                ($set2Shaxrixon846 < 0 ? $set2Shaxrixon846 : 0) +
                ($set2Shaxrixon873 < 0 ? $set2Shaxrixon873 : 0) +
                ($set2Shaxrixon927 < 0 ? $set2Shaxrixon927 : 0) +
                ($set2Shaxrixon1004 < 0 ? $set2Shaxrixon1004 : 0) +
                ($set2Shaxrixon1018 < 0 ? $set2Shaxrixon1018 : 0) +
                ($set2Shaxrixon1041 < 0 ? $set2Shaxrixon1041 : 0)
            ),
            array("id" => 5, "value" => $set2Shaxrixon981 + $set2Shaxrixon954),
            array("id" => 6, "value" => $water2Shaxrixon900),
            array("id" => 7, "value" => $ges2Shaxrixon482[2] > 0 ? $ges2Shaxrixon482[2] :
                ($ges2Shaxrixon971[2] > 0 ? $ges2Shaxrixon971[2] :
                    ($ges2Shaxrixon863[2] > 0 ? $ges2Shaxrixon863[2] :
                        ($ges2Shaxrixon836[2] > 0 ? $ges2Shaxrixon836[2] : $ges2Shaxrixon809[2])))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //Заврак МГЭС
    public function actionServer3()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $water = Water::find()->where(['id_organization' => 61])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges3Shaxrixon727 = $this->getValue($data, "G727");
        $ges3Shaxrixon726 = $this->getValue($data, "G726");
        $ges3Shaxrixon715 = $this->getValue($data, "G715");

        $set3Shaxrixon727 = $ges3Shaxrixon727[2] * 16500 / $CONST;
        $set3Shaxrixon726 = $ges3Shaxrixon726[2] * 16500 / $CONST;

        $power3Shaxrixon = 0;// $ges2Shaxrixon900[2] * 12600 / $CONST;//active
        $reactive3Shaxrixon = 0;// $ges2Shaxrixon901[2] * 12600 / $CONST;//reactive
        $water3Shaxrixon = 0;// $energy->getWater($power2Shaxrixon900, $pressure, 0.91, 0.91);//water
        $kpd3Shaxrixon = 0;// $energy->getKpd($power2Shaxrixon900, $water2Shaxrixon900, $pressure, 0.91);//kpd

        $data = array(
            array("id" => 727, "value" => $set3Shaxrixon727),
            array("id" => 726, "value" => $set3Shaxrixon726),

            array("id" => 900, "value" => $power3Shaxrixon),//active
            array("id" => 901, "value" => $reactive3Shaxrixon),//reactive
            array("id" => 902, "value" => $kpd3Shaxrixon),//КПД
            array("id" => 903, "value" => 0),//HA
            array("id" => 904, "value" => $water3Shaxrixon),//water

            array("id" => 1, "value" => $power3Shaxrixon),
            array("id" => 2, "value" => $reactive3Shaxrixon),
            array("id" => 3, "value" => $set3Shaxrixon726),
            array("id" => 4, "value" => $set3Shaxrixon727),
            array("id" => 5, "value" => 0),
            array("id" => 6, "value" => $water3Shaxrixon),
            array("id" => 7, "value" => $ges3Shaxrixon715[2]),
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
        $water5 = Water::find()->where(['id_organization' => 41])->orderBy(['date' => SORT_DESC])->one();
        $upBef5 = $water5 ? $water5['up_bef'] : 0;
        $downBef5 = $water5 ? $water5['down_bef'] : 0;
        $pressure5 = $upBef5 - $downBef5;

        $ges5Shaxrixon624 = $this->getValue($data, "G624");
        $ges5Shaxrixon601 = $this->getValue($data, "G601");
        $ges5Shaxrixon670 = $this->getValue($data, "G670");
        $ges5Shaxrixon647 = $this->getValue($data, "G647");
        $ges5Shaxrixon475 = $this->getValue($data, "G475");
        $ges5Shaxrixon498 = $this->getValue($data, "G498");
        $ges5Shaxrixon452 = $this->getValue($data, "G452");
        $ges5Shaxrixon383 = $this->getValue($data, "G383");
        $ges5Shaxrixon406 = $this->getValue($data, "G406");
        $ges5Shaxrixon407 = $this->getValue($data, "G407");
        $ges5Shaxrixon429 = $this->getValue($data, "G429");
        $ges5Shaxrixon430 = $this->getValue($data, "G430");
        $ges5Shaxrixon314 = $this->getValue($data, "G314");
        $ges5Shaxrixon360 = $this->getValue($data, "G360");
        $ges5Shaxrixon291 = $this->getValue($data, "G291");
        $ges5Shaxrixon531 = $this->getValue($data, "G531");
        $ges5Shaxrixon571 = $this->getValue($data, "G571");

        $set5Shaxrixon670 = $ges5Shaxrixon670[2] * 10500 / $CONST;
        $set5Shaxrixon647 = $ges5Shaxrixon647[2] * 21000 / $CONST;
        $set5Shaxrixon624 = $ges5Shaxrixon624[2] * 21000 / $CONST;
        $set5Shaxrixon601 = $ges5Shaxrixon601[2] * 21000 / $CONST;
        $set5Shaxrixon498 = $ges5Shaxrixon498[2] * 66000 / $CONST;
        $set5Shaxrixon475 = $ges5Shaxrixon475[2] * 44000 / $CONST;
        $set5Shaxrixon452 = $ges5Shaxrixon452[2] * 44000 / $CONST;
        $set5Shaxrixon383 = $ges5Shaxrixon383[2] * 88000 / $CONST;

        $power5Shaxrixon406 = $ges5Shaxrixon406[2] * 10080 / $CONST;//active
        $reactive5Shaxrixon407 = $ges5Shaxrixon407[2] * 10080 / $CONST;//reactive
        $water5Shaxrixon406 = $energy->getWater($power5Shaxrixon406, $pressure5, 0.95, 0.914);//water

        $power5Shaxrixon429 = $ges5Shaxrixon429[2] * 10080 / $CONST;//active
        $reactive5Shaxrixon430 = $ges5Shaxrixon430[2] * 10080 / $CONST;//reactive
        $water5Shaxrixon429 = $energy->getWater($power5Shaxrixon429, $pressure5, 0.95, 0.914);//water

        $set5Shaxrixon314 = $ges5Shaxrixon314[2] * 100.8 / $kvt;

        $set5Shaxrixon291 = $ges5Shaxrixon291[2] * 1260 / $CONST;
        $set5Shaxrixon360 = $ges5Shaxrixon360[2] * 3780 / $CONST;
        $set5Shaxrixon531 = $ges5Shaxrixon531[2] * 1260 / $CONST;
        $set5Shaxrixon571 = $ges5Shaxrixon571[2] * 630 / $CONST;

        $ges5ShaxrixonActive = $power5Shaxrixon406 + $power5Shaxrixon429;
        $ges5ShaxrixonReactive = $reactive5Shaxrixon407 + $reactive5Shaxrixon430;
        $ges5ShaxrixonActiveOut = ($set5Shaxrixon624 > 0 ? $set5Shaxrixon624 : 0) +
            ($set5Shaxrixon601 > 0 ? $set5Shaxrixon601 : 0) +
            ($set5Shaxrixon670 > 0 ? $set5Shaxrixon670 : 0) +
            ($set5Shaxrixon647 > 0 ? $set5Shaxrixon647 : 0) +
            ($set5Shaxrixon475 > 0 ? $set5Shaxrixon475 : 0) +
            ($set5Shaxrixon498 > 0 ? $set5Shaxrixon498 : 0) +
            ($set5Shaxrixon452 > 0 ? $set5Shaxrixon452 : 0) +
            ($set5Shaxrixon383 > 0 ? $set5Shaxrixon383 : 0) +
            $set5Shaxrixon360 +
            $set5Shaxrixon291 +
            $set5Shaxrixon531 +
            $set5Shaxrixon571;
        $ges5ShaxrixonActiveIn = ($set5Shaxrixon624 < 0 ? $set5Shaxrixon624 : 0) +
            ($set5Shaxrixon601 < 0 ? $set5Shaxrixon601 : 0) +
            ($set5Shaxrixon670 < 0 ? $set5Shaxrixon670 : 0) +
            ($set5Shaxrixon647 < 0 ? $set5Shaxrixon647 : 0) +
            ($set5Shaxrixon475 < 0 ? $set5Shaxrixon475 : 0) +
            ($set5Shaxrixon498 < 0 ? $set5Shaxrixon498 : 0) +
            ($set5Shaxrixon452 < 0 ? $set5Shaxrixon452 : 0) +
            ($set5Shaxrixon383 < 0 ? $set5Shaxrixon383 : 0);
        $ges5ShaxrixonOwnNeeds = $set5Shaxrixon314;
        $ges5ShaxrixonWater = $water5Shaxrixon406 + $water5Shaxrixon429;
        $ges5ShaxrixonAggregateTrue = ($ges5Shaxrixon406[2] > 0 ? 1 : 0) + ($ges5Shaxrixon429[2] > 0 ? 1 : 0);
        $ges5ShaxrixonAggregateError = 1;
        $ges5ShaxrixonAggregateFalse = ($ges5Shaxrixon406[2] <= 0 ? 1 : 0) + ($ges5Shaxrixon429[2] <= 0 ? 1 : 0) - $ges5ShaxrixonAggregateError;

        $water6 = Water::find()->where(['id_organization' => 64])->orderBy(['date' => SORT_DESC])->one();
        $upBef6 = $water6 ? $water6['up_bef'] : 0;
        $downBef6 = $water6 ? $water6['down_bef'] : 0;
        $pressure6 = $upBef6 - $downBef6;

        $ges6Shaxrixon49 = $this->getValue($data, "G49");
        $ges6Shaxrixon72 = $this->getValue($data, "G72");
        $ges6Shaxrixon187 = $this->getValue($data, "G187");
        $ges6Shaxrixon188 = $this->getValue($data, "G188");
        $ges6Shaxrixon210 = $this->getValue($data, "G210");
        $ges6Shaxrixon211 = $this->getValue($data, "G211");
        $ges6Shaxrixon3 = $this->getValue($data, "G3");
        $ges6Shaxrixon26 = $this->getValue($data, "G26");
        $ges6Shaxrixon118 = $this->getValue($data, "G118");
        $ges6Shaxrixon141 = $this->getValue($data, "G141");
        $ges6Shaxrixon272 = $this->getValue($data, "G272");
        $ges6Shaxrixon164 = $this->getValue($data, "G164");
        $ges6Shaxrixon243 = $this->getValue($data, "G243");
        $ges6Shaxrixon95 = $this->getValue($data, "G95");

        $set6Shaxrixon49 = $ges6Shaxrixon49[2] * 10500 / $CONST;
        $set6Shaxrixon72 = $ges6Shaxrixon72[2] * 14000 / $CONST;

        $set6Shaxrixon95 = $ges6Shaxrixon95[2] * 2400 / $CONST;
        $set6Shaxrixon118 = $ges6Shaxrixon118[2] * 4800 / $CONST;
        $set6Shaxrixon141 = $ges6Shaxrixon141[2] * 3600 / $CONST;
        $set6Shaxrixon164 = $ges6Shaxrixon164[2] * 600 / $CONST;
        $set6Shaxrixon243 = $ges6Shaxrixon243[2] * 3600 / $CONST;
        $set6Shaxrixon272 = $ges6Shaxrixon272[2] * 3600 / $CONST;

        $power6Shaxrixon187 = $ges6Shaxrixon187[2] * 9000 / $CONST;//active
        $reactive6Shaxrixon188 = $ges6Shaxrixon188[2] * 9000 / $CONST;//reactive
        $water6Shaxrixon187 = $energy->getWater($power6Shaxrixon187, $pressure6, 0.96, 0.914);//water

        $power6Shaxrixon210 = $ges6Shaxrixon210[2] * 9000 / $CONST;//active
        $reactive6Shaxrixon211 = $ges6Shaxrixon211[2] * 9000 / $CONST;//reactive
        $water6Shaxrixon210 = $energy->getWater($power6Shaxrixon210, $pressure6, 0.96, 0.914);//water

        $set6Shaxrixon3 = $ges6Shaxrixon3[2] * 120 / $kvt;
        $set6Shaxrixon26 = $ges6Shaxrixon26[2] * 120 / $kvt;

        $ges6ShaxrixonActive = $power6Shaxrixon187 + $power6Shaxrixon210;
        $ges6ShaxrixonReactive = $reactive6Shaxrixon188 + $reactive6Shaxrixon211;
        $ges6ShaxrixonActiveOut = ($set6Shaxrixon49 > 0 ? $set6Shaxrixon49 : 0) +
            ($set6Shaxrixon72 > 0 ? $set6Shaxrixon72 : 0) +
            $set6Shaxrixon118 + $set6Shaxrixon141 + $set6Shaxrixon272 + $set6Shaxrixon164 + $set6Shaxrixon95 + $set6Shaxrixon243;
        $ges6ShaxrixonActiveIn =  ($set6Shaxrixon49 < 0 ? $set6Shaxrixon49 : 0) +
            ($set6Shaxrixon72 < 0 ? $set6Shaxrixon72 : 0);
        $ges6ShaxrixonOwnNeeds = $set6Shaxrixon3 + $set6Shaxrixon26;
        $ges6ShaxrixonWater = $water6Shaxrixon187 + $water6Shaxrixon210;
        $ges6ShaxrixonAggregateTrue = ($ges6Shaxrixon187[2] > 0 ? 1 : 0) + ($ges6Shaxrixon210[2] > 0 ? 1 : 0);
        $ges6ShaxrixonAggregateError = 0;
        $ges6ShaxrixonAggregateFalse = ($ges6Shaxrixon187[2] <= 0 ? 1 : 0) + ($ges6Shaxrixon210[2] <= 0 ? 1 : 0) - $ges6ShaxrixonAggregateError;

        $water1 = Water::find()->where(['id_organization' => 65])->orderBy(['date' => SORT_DESC])->one();
        $upBef1 = $water1 ? $water1['up_bef'] : 0;
        $downBef1 = $water1 ? $water1['down_bef'] : 0;
        $pressure1 = $upBef1 - $downBef1;

        $ges1Shaxrixon1087 = $this->getValue($data, "G1087");
        $ges1Shaxrixon1110 = $this->getValue($data, "G1110");
        $ges1Shaxrixon1133 = $this->getValue($data, "G1133");
        $ges1Shaxrixon1202 = $this->getValue($data, "G1202");
        $ges1Shaxrixon1179 = $this->getValue($data, "G1179");
        $ges1Shaxrixon1156 = $this->getValue($data, "G1156");
        $ges1Shaxrixon1157 = $this->getValue($data, "G1157");
        $ges1Shaxrixon1064 = $this->getValue($data, "G1064");

        $power1Shaxrixon1156 = $ges1Shaxrixon1156[2] * 1890 / $CONST;//active
        $reactive1Shaxrixon1157 = $ges1Shaxrixon1157[2] * 1890 / $CONST;//reactive
        $water1Shaxrixon1156 = $energy->getWater($power1Shaxrixon1156, $pressure1, 0.95, 0.894);//water

        $set1Shaxrixon1064 = $ges1Shaxrixon1064[2] * 50 / $kvt;

        $set1Shaxrixon1087 = $ges1Shaxrixon1087[2] * 10500 / $CONST;
        $set1Shaxrixon1110 = $ges1Shaxrixon1110[2] * 10500 / $CONST;
        $set1Shaxrixon1133 = $ges1Shaxrixon1133[2] * 10500 / $CONST;
        $set1Shaxrixon1202 = $ges1Shaxrixon1202[2] * 6300 / $CONST;
        $set1Shaxrixon1179 = $ges1Shaxrixon1179[2] * 6300 / $CONST;

        $ges1ShaxrixonActive = $power1Shaxrixon1156;
        $ges1ShaxrixonReactive = $reactive1Shaxrixon1157;
        $ges1ShaxrixonActiveOut = ($set1Shaxrixon1087 > 0 ? $set1Shaxrixon1087 : 0) +
            ($set1Shaxrixon1110 > 0 ? $set1Shaxrixon1110 : 0) +
            ($set1Shaxrixon1133 > 0 ? $set1Shaxrixon1133 : 0) +
            $set1Shaxrixon1202 +
            $set1Shaxrixon1179;
        $ges1ShaxrixonActiveIn = ($set1Shaxrixon1087 < 0 ? $set1Shaxrixon1087 : 0) +
            ($set1Shaxrixon1110 < 0 ? $set1Shaxrixon1110 : 0) +
            ($set1Shaxrixon1133 < 0 ? $set1Shaxrixon1133 : 0);
        $ges1ShaxrixonOwnNeeds = $set1Shaxrixon1064;
        $ges1ShaxrixonWater = $water1Shaxrixon1156;
        $ges1ShaxrixonAggregateTrue = ($ges1Shaxrixon1156[2] > 0 ? 1 : 0);
        $ges1ShaxrixonAggregateError = 0;
        $ges1ShaxrixonAggregateFalse = ($ges1Shaxrixon1156[2] <= 0 ? 1 : 0) - $ges1ShaxrixonAggregateError;

        $water2 = Water::find()->where(['id_organization' => 66])->orderBy(['date' => SORT_DESC])->one();
        $upBef2 = $water2 ? $water2['up_bef'] : 0;
        $downBef2 = $water2 ? $water2['down_bef'] : 0;
        $pressure2 = $upBef2 - $downBef2;

        $ges2Shaxrixon846 = $this->getValue($data, "G846");
        $ges2Shaxrixon819 = $this->getValue($data, "G819");
        $ges2Shaxrixon792 = $this->getValue($data, "G792");
        $ges2Shaxrixon873 = $this->getValue($data, "G873");
        $ges2Shaxrixon900 = $this->getValue($data, "G900");
        $ges2Shaxrixon901 = $this->getValue($data, "G901");
        $ges2Shaxrixon1041 = $this->getValue($data, "G1041");
        $ges2Shaxrixon1018 = $this->getValue($data, "G1018");
        $ges2Shaxrixon1004 = $this->getValue($data, "G1004");
        $ges2Shaxrixon927 = $this->getValue($data, "G927");
        $ges2Shaxrixon981 = $this->getValue($data, "G981");
        $ges2Shaxrixon954 = $this->getValue($data, "G954");

        $power2Shaxrixon900 = $ges2Shaxrixon900[2] * 12600 / $CONST;//active
        $reactive2Shaxrixon901 = $ges2Shaxrixon901[2] * 12600 / $CONST;//reactive
        $water2Shaxrixon900 = $energy->getWater($power2Shaxrixon900, $pressure2, 0.91, 0.91);//water

        $set2Shaxrixon981 = $ges2Shaxrixon981[2] * 100 / $kvt;
        $set2Shaxrixon954 = $ges2Shaxrixon954[2] * 100 / $kvt;

        $set2Shaxrixon792 = $ges2Shaxrixon792[2] * 10500 / $CONST;
        $set2Shaxrixon819 = $ges2Shaxrixon819[2] * 16500 / $CONST;
        $set2Shaxrixon846 = $ges2Shaxrixon846[2] * 16500 / $CONST;
        $set2Shaxrixon873 = $ges2Shaxrixon873[2] * 10500 / $CONST;
        $set2Shaxrixon927 = $ges2Shaxrixon927[2] * 2100 / $CONST;
        $set2Shaxrixon1004 = $ges2Shaxrixon1004[2] * 2100 / $CONST;
        $set2Shaxrixon1018 = $ges2Shaxrixon1018[2] * 2100 / $CONST;
        $set2Shaxrixon1041 = $ges2Shaxrixon1041[2] * 2100 / $CONST;

        $ges2ShaxrixonActive = $power2Shaxrixon900;
        $ges2ShaxrixonReactive = $reactive2Shaxrixon901;
        $ges2ShaxrixonActiveOut = ($set2Shaxrixon792 > 0 ? $set2Shaxrixon792 : 0) +
            ($set2Shaxrixon819 > 0 ? $set2Shaxrixon819 : 0) +
            ($set2Shaxrixon846 > 0 ? $set2Shaxrixon846 : 0) +
            ($set2Shaxrixon873 > 0 ? $set2Shaxrixon873 : 0) +
            ($set2Shaxrixon927 > 0 ? $set2Shaxrixon927 : 0) +
            ($set2Shaxrixon1004 > 0 ? $set2Shaxrixon1004 : 0) +
            ($set2Shaxrixon1018 > 0 ? $set2Shaxrixon1018 : 0) +
            ($set2Shaxrixon1041 > 0 ? $set2Shaxrixon1041 : 0);
        $ges2ShaxrixonActiveIn = ($set2Shaxrixon792 < 0 ? $set2Shaxrixon792 : 0) +
            ($set2Shaxrixon819 < 0 ? $set2Shaxrixon819 : 0) +
            ($set2Shaxrixon846 < 0 ? $set2Shaxrixon846 : 0) +
            ($set2Shaxrixon873 < 0 ? $set2Shaxrixon873 : 0) +
            ($set2Shaxrixon927 < 0 ? $set2Shaxrixon927 : 0) +
            ($set2Shaxrixon1004 < 0 ? $set2Shaxrixon1004 : 0) +
            ($set2Shaxrixon1018 < 0 ? $set2Shaxrixon1018 : 0) +
            ($set2Shaxrixon1041 < 0 ? $set2Shaxrixon1041 : 0);
        $ges2ShaxrixonOwnNeeds = $set2Shaxrixon981 + $set2Shaxrixon954;
        $ges2ShaxrixonWater = $water2Shaxrixon900;
        $ges2ShaxrixonAggregateTrue = ($ges2Shaxrixon900[2] > 0 ? 1 : 0);
        $ges2ShaxrixonAggregateError = 0;
        $ges2ShaxrixonAggregateFalse = ($ges2Shaxrixon900[2] <= 0 ? 1 : 0) - $ges2ShaxrixonAggregateError;

        $water = Water::find()->where(['id_organization' => 61])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges3Shaxrixon727 = $this->getValue($data, "G727");
        $ges3Shaxrixon726 = $this->getValue($data, "G726");

        $set3Shaxrixon727 = $ges3Shaxrixon727[2] * 16500 / $CONST;
        $set3Shaxrixon726 = $ges3Shaxrixon726[2] * 16500 / $CONST;

        $power3Shaxrixon = 0;// $ges2Shaxrixon900[2] * 12600 / $CONST;//active
        $reactive3Shaxrixon = 0;// $ges2Shaxrixon901[2] * 12600 / $CONST;//reactive
        $water3Shaxrixon = 0;// $energy->getWater($power2Shaxrixon900, $pressure, 0.91, 0.91);//water

        $ges3ShaxrixonActive = $power3Shaxrixon;
        $ges3ShaxrixonReactive = $reactive3Shaxrixon;
        $ges3ShaxrixonActiveOut = $set3Shaxrixon726;
        $ges3ShaxrixonActiveIn = $set3Shaxrixon727;
        $ges3ShaxrixonOwnNeeds = 0;
        $ges3ShaxrixonWater = $water3Shaxrixon;
        $ges3ShaxrixonAggregateTrue = ($power3Shaxrixon > 0 ? 1 : 0);
        $ges3ShaxrixonAggregateError = 0;
        $ges3ShaxrixonAggregateFalse = ($power3Shaxrixon <= 0 ? 1 : 0) - $ges3ShaxrixonAggregateError;

        $active = $ges5ShaxrixonActive + $ges6ShaxrixonActive + $ges1ShaxrixonActive + $ges2ShaxrixonActive + $ges3ShaxrixonActive;
        $reactive = $ges5ShaxrixonReactive + $ges6ShaxrixonReactive + $ges1ShaxrixonReactive + $ges2ShaxrixonReactive + $ges3ShaxrixonReactive;
        $activeOut = $ges5ShaxrixonActiveOut + $ges6ShaxrixonActiveOut + $ges1ShaxrixonActiveOut + $ges2ShaxrixonActiveOut + $ges3ShaxrixonActiveOut;
        $activeIn = $ges5ShaxrixonActiveIn + $ges6ShaxrixonActiveIn + $ges1ShaxrixonActiveIn + $ges2ShaxrixonActiveIn + $ges3ShaxrixonActiveIn;
        $ownNeeds = $ges5ShaxrixonOwnNeeds + $ges6ShaxrixonOwnNeeds + $ges1ShaxrixonOwnNeeds + $ges2ShaxrixonOwnNeeds + $ges3ShaxrixonOwnNeeds;
        $water = $ges5ShaxrixonWater + $ges6ShaxrixonWater + $ges1ShaxrixonWater + $ges2ShaxrixonWater + $ges3ShaxrixonWater;
        $true = $ges5ShaxrixonAggregateTrue + $ges6ShaxrixonAggregateTrue + $ges1ShaxrixonAggregateTrue + $ges2ShaxrixonAggregateTrue + $ges3ShaxrixonAggregateTrue;
        $error = $ges5ShaxrixonAggregateError + $ges6ShaxrixonAggregateError + $ges1ShaxrixonAggregateError + $ges2ShaxrixonAggregateError + $ges3ShaxrixonAggregateError;
        $false = $ges5ShaxrixonAggregateFalse + $ges6ShaxrixonAggregateFalse + $ges1ShaxrixonAggregateFalse + $ges2ShaxrixonAggregateFalse + $ges3ShaxrixonAggregateFalse;

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

            array("id" => 10, "value" => $ges5ShaxrixonActive),
            array("id" => 11, "value" => $ges5ShaxrixonAggregateTrue),
            array("id" => 12, "value" => $ges5ShaxrixonAggregateFalse),
            array("id" => 13, "value" => $ges5ShaxrixonAggregateError),

            array("id" => 14, "value" => $ges6ShaxrixonActive),
            array("id" => 15, "value" => $ges6ShaxrixonAggregateTrue),
            array("id" => 16, "value" => $ges6ShaxrixonAggregateFalse),
            array("id" => 17, "value" => $ges6ShaxrixonAggregateError),

            array("id" => 18, "value" => $ges1ShaxrixonActive),
            array("id" => 19, "value" => $ges1ShaxrixonAggregateTrue),
            array("id" => 20, "value" => $ges1ShaxrixonAggregateFalse),
            array("id" => 21, "value" => $ges1ShaxrixonAggregateError),

            array("id" => 22, "value" => $ges2ShaxrixonActive),
            array("id" => 23, "value" => $ges2ShaxrixonAggregateTrue),
            array("id" => 24, "value" => $ges2ShaxrixonAggregateFalse),
            array("id" => 25, "value" => $ges2ShaxrixonAggregateError),

            array("id" => 26, "value" => $ges3ShaxrixonActive),
            array("id" => 27, "value" => $ges3ShaxrixonAggregateTrue),
            array("id" => 28, "value" => $ges3ShaxrixonAggregateFalse),
            array("id" => 29, "value" => $ges3ShaxrixonAggregateError),
        );

        echo json_encode($data);
    }
}
