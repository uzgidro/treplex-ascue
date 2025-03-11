<?php

namespace frontend\controllers;

use common\models\Water;

class ToshkentController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes9()
    {
        return $this->render('ges9');
    }

    public function actionGes4()
    {
        return $this->render('ges4');
    }

    public function actionGes1()
    {
        return $this->render('ges1');
    }

    public function actionGes21()
    {
        return $this->render('ges21');
    }

    protected string $url = "http://user:sU_sb07s@192.168.40.215:10178/crq?req=current";

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

    public function actionServer21()
    {
        $CONST = 1000000;
        $kvt = 1000;

        $water = Water::find()->where(['id_organization' => 38])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges21Toshkent818 = $this->getValue($data, "G818");
        $ges21Toshkent911 = $this->getValue($data, "G911");
        $ges21Toshkent910 = $this->getValue($data, "G910");
        $ges21Toshkent934 = $this->getValue($data, "G934");
        $ges21Toshkent933 = $this->getValue($data, "G933");
        $ges21Toshkent841 = $this->getValue($data, "G841");
        $ges21Toshkent864 = $this->getValue($data, "G864");
        $ges21Toshkent887 = $this->getValue($data, "G887");
        $ges21Toshkent767 = $this->getValue($data, "G767");
        $ges21Toshkent782 = $this->getValue($data, "G782");
        $ges21Toshkent789 = $this->getValue($data, "G789");
        $ges21Toshkent759 = $this->getValue($data, "G759");
        $ges21Toshkent760 = $this->getValue($data, "G760");
        $ges21Toshkent774 = $this->getValue($data, "G774");
        $ges21Toshkent775 = $this->getValue($data, "G775");
        $ges21Toshkent795 = $this->getValue($data, "G795");
        $ges21Toshkent797 = $this->getValue($data, "G797");
        $ges21Toshkent758 = $this->getValue($data, "G758");
        $ges21Toshkent773 = $this->getValue($data, "G773");
        $ges21Toshkent788 = $this->getValue($data, "G788");

        $set21Toshkent818 = $ges21Toshkent818[2] * 4800 / $CONST;
        $set21Toshkent910 = $ges21Toshkent910[2] * 12000 / $CONST;
        $set21Toshkent911 = $ges21Toshkent911[2] * 12000 / $CONST;
        $set21Toshkent934 = $ges21Toshkent934[2] * 12000 / $CONST;
        $set21Toshkent933 = $ges21Toshkent933[2] * 12000 / $CONST;
        $set21Toshkent841 = $ges21Toshkent841[2] * 2400 / $CONST;

        $power21Toshkent759 = $ges21Toshkent759[2] * 1800 / $CONST;//active
        $reactive21Toshkent760 = $ges21Toshkent760[2] * 1800 / $CONST;//reactive
        $water21Toshkent759 = $energy->getWater($power21Toshkent759, $pressure, 0.8465, 0.94);//water
        $kpd21Toshkent759 = $energy->getKpd($power21Toshkent759, $water21Toshkent759, $pressure, 0.994);//kpd

        $power21Toshkent774 = $ges21Toshkent774[2] * 1800 / $CONST;//active
        $reactive21Toshkent775 = $ges21Toshkent775[2] * 1800 / $CONST;//reactive
        $water21Toshkent774 = $energy->getWater($power21Toshkent774, $pressure, 0.8465, 0.94);//water
        $kpd21Toshkent774 = $energy->getKpd($power21Toshkent774, $water21Toshkent774, $pressure, 0.994);//kpd

        $power21Toshkent795 = $ges21Toshkent795[2] * 2400 / $CONST;//active
        $reactive21Toshkent797 = $ges21Toshkent797[2] * 2400 / $CONST;//reactive
        $water21Toshkent795 = $energy->getWater($power21Toshkent795, $pressure, 0.862, 0.94);//water
        $kpd21Toshkent795 = $energy->getKpd($power21Toshkent795, $water21Toshkent795, $pressure, 0.994);//kpd

        $set21Toshkent864 = $ges21Toshkent864[2] * 600 / $kvt;
        $set21Toshkent887 = $ges21Toshkent887[2] * 480 / $kvt;

        $data = array(
            array("id" => 767, "value" => $ges21Toshkent767[2] > 0 ? $energy->getVoltages($ges21Toshkent767[2], 60) : ($ges21Toshkent782[2] > 0 ? $energy->getVoltages($ges21Toshkent782[2], 60) : $energy->getVoltages($ges21Toshkent789[2], 60))),

            array("id" => 818, "value" => $set21Toshkent818),
            array("id" => 841, "value" => $set21Toshkent841),
            array("id" => 910, "value" => $set21Toshkent910),
            array("id" => 933, "value" => $set21Toshkent933),

            array("id" => 911, "value" => $set21Toshkent911),
            array("id" => 934, "value" => $set21Toshkent934),

            array("id" => 864, "value" => $set21Toshkent864),
            array("id" => 887, "value" => $set21Toshkent887),

            array("id" => 759, "value" => $power21Toshkent759),//active
            array("id" => 760, "value" => $reactive21Toshkent760),//reactive
            array("id" => 761, "value" => $kpd21Toshkent759),//КПД
            array("id" => 762, "value" => 0),//HA
            array("id" => 763, "value" => $water21Toshkent759),//water

            array("id" => 774, "value" => $power21Toshkent774),//active
            array("id" => 775, "value" => $reactive21Toshkent775),//reactive
            array("id" => 776, "value" => $kpd21Toshkent774),//КПД
            array("id" => 777, "value" => 0),//HA
            array("id" => 778, "value" => $water21Toshkent774),//water

            array("id" => 795, "value" => $power21Toshkent795),//active
            array("id" => 797, "value" => $reactive21Toshkent797),//reactive
            array("id" => 798, "value" => $kpd21Toshkent795),//КПД
            array("id" => 799, "value" => 0),//HA
            array("id" => 800, "value" => $water21Toshkent795),//water

            array("id" => 1, "value" => $power21Toshkent759 + $power21Toshkent774 + $power21Toshkent795),
            array("id" => 2, "value" => $reactive21Toshkent760 + $reactive21Toshkent775 + $reactive21Toshkent797),
            array("id" => 3, "value" => $set21Toshkent818 + $set21Toshkent841 + $set21Toshkent910 + $set21Toshkent934),
            array("id" => 4, "value" => $set21Toshkent911 + $set21Toshkent933),
            array("id" => 5, "value" => $set21Toshkent864 + $set21Toshkent887),
            array("id" => 6, "value" => $water21Toshkent759 + $water21Toshkent774 + $water21Toshkent795),
            array("id" => 7, "value" => $ges21Toshkent758[2] > 0 ? $ges21Toshkent758[2] : ($ges21Toshkent773[2] > 0 ? $ges21Toshkent773[2] : $ges21Toshkent788[2])),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //Ок-Тепа (ГЭС-9)
    public function actionServer9()
    {
        $CONST = 1000000;
        $kvt = 1000;

        $water = Water::find()->where(['id_organization' => 40])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();

        $ges9Toshkent1702 = $this->getValue($data, "G1702");
        $ges9Toshkent1687 = $this->getValue($data, "G1687");
        $ges9Toshkent1278 = $this->getValue($data, "G1278");
        $ges9Toshkent1769 = $this->getValue($data, "G1769");
        $ges9Toshkent1370 = $this->getValue($data, "G1370");
        $ges9Toshkent1582 = $this->getValue($data, "G1582");
        $ges9Toshkent1318 = $this->getValue($data, "G1318");
        $ges9Toshkent1317 = $this->getValue($data, "G1317");
        $ges9Toshkent1202 = $this->getValue($data, "G1202");
        $ges9Toshkent1203 = $this->getValue($data, "G1203");
        $ges9Toshkent1723 = $this->getValue($data, "G1723");
        $ges9Toshkent1672 = $this->getValue($data, "G1672");
        $ges9Toshkent1657 = $this->getValue($data, "G1657");
        $ges9Toshkent1642 = $this->getValue($data, "G1642");
        $ges9Toshkent1627 = $this->getValue($data, "G1627");
        $ges9Toshkent1567 = $this->getValue($data, "G1567");
        $ges9Toshkent1552 = $this->getValue($data, "G1552");
        $ges9Toshkent1537 = $this->getValue($data, "G1537");
        $ges9Toshkent1746 = $this->getValue($data, "G1746");
        $ges9Toshkent1522 = $this->getValue($data, "G1522");
        $ges9Toshkent1507 = $this->getValue($data, "G1507");
        $ges9Toshkent1612 = $this->getValue($data, "G1612");
        $ges9Toshkent1597 = $this->getValue($data, "G1597");
        $ges9Toshkent1387 = $this->getValue($data, "G1387");
        $ges9Toshkent1402 = $this->getValue($data, "G1402");
        $ges9Toshkent1325 = $this->getValue($data, "G1325");
        $ges9Toshkent1324 = $this->getValue($data, "G1324");
        $ges9Toshkent1210 = $this->getValue($data, "G1210");
        $ges9Toshkent1209 = $this->getValue($data, "G1209");
        $ges9Toshkent1233 = $this->getValue($data, "G1233");
        $ges9Toshkent1232 = $this->getValue($data, "G1232");
        $ges9Toshkent1348 = $this->getValue($data, "G1348");
        $ges9Toshkent1347 = $this->getValue($data, "G1347");
        $ges9Toshkent1187 = $this->getValue($data, "G1187");
        $ges9Toshkent1186 = $this->getValue($data, "G1186");
        $ges9Toshkent1301 = $this->getValue($data, "G1301");
        $ges9Toshkent1225 = $this->getValue($data, "G1225");
        $ges9Toshkent1226 = $this->getValue($data, "G1226");
        $ges9Toshkent1141 = $this->getValue($data, "G1141");
        $ges9Toshkent1140 = $this->getValue($data, "G1140");
        $ges9Toshkent1133 = $this->getValue($data, "G1133");
        $ges9Toshkent1134 = $this->getValue($data, "G1134");
        $ges9Toshkent956 = $this->getValue($data, "G956");
        $ges9Toshkent958 = $this->getValue($data, "G958");
        $ges9Toshkent1048 = $this->getValue($data, "G1048");
        $ges9Toshkent1255 = $this->getValue($data, "G1255");
        $ges9Toshkent1256 = $this->getValue($data, "G1256");
        $ges9Toshkent1094 = $this->getValue($data, "G1094");
        $ges9Toshkent1095 = $this->getValue($data, "G1095");
        $ges9Toshkent1117 = $this->getValue($data, "G1117");
        $ges9Toshkent1118 = $this->getValue($data, "G1118");
        $ges9Toshkent1249 = $this->getValue($data, "G1249");
        $ges9Toshkent1492 = $this->getValue($data, "G1492");
        $ges9Toshkent1477 = $this->getValue($data, "G1477");
        $ges9Toshkent1432 = $this->getValue($data, "G1432");
        $ges9Toshkent1417 = $this->getValue($data, "G1417");
        $ges9Toshkent1462 = $this->getValue($data, "G1462");
        $ges9Toshkent1447 = $this->getValue($data, "G1447");
        $ges9Toshkent1111 = $this->getValue($data, "G1111");
        $ges9Toshkent1088 = $this->getValue($data, "G1088");
        $ges9Toshkent1363 = $this->getValue($data, "G1363");
        $ges9Toshkent1364 = $this->getValue($data, "G1364");
        $ges9Toshkent1770 = $this->getValue($data, "G1770");
        $ges9Toshkent979 = $this->getValue($data, "G979");
        $ges9Toshkent981 = $this->getValue($data, "G981");

        $set9Toshkent1209 = $ges9Toshkent1209[2] * 44000 / $CONST;
        $set9Toshkent1210 = $ges9Toshkent1210[2] * 44000 / $CONST;
        $set9Toshkent1232 = $ges9Toshkent1232[2] * 44000 / $CONST;
        $set9Toshkent1233 = $ges9Toshkent1233[2] * 44000 / $CONST;
        $set9Toshkent1278 = $ges9Toshkent1278[2] * 4000 / $CONST;
        $set9Toshkent1324 = $ges9Toshkent1324[2] * 2000 / $CONST;
        $set9Toshkent1347 = $ges9Toshkent1347[2] * 2000 / $CONST;
        $set9Toshkent1370 = $ges9Toshkent1370[2] * 4000 / $CONST;
        $set9Toshkent1387 = $ges9Toshkent1387[2] * 42000 / $CONST;
        $set9Toshkent1402 = $ges9Toshkent1402[2] * 42000 / $CONST;
        $set9Toshkent1417 = (-1) * $ges9Toshkent1417[2] * 4800 / $CONST;
        $set9Toshkent1432 = (-1) * $ges9Toshkent1432[2] * 4800 / $CONST;
        $set9Toshkent1447 = (-1) * $ges9Toshkent1447[2] * 3600 / $CONST;
        $set9Toshkent1462 = (-1) * $ges9Toshkent1462[2] * 4800 / $CONST;
        $set9Toshkent1477 = (-1) * $ges9Toshkent1477[2] * 3600 / $CONST;
        $set9Toshkent1492 = (-1) * $ges9Toshkent1492[2] * 2400 / $CONST;
        $set9Toshkent1507 = (-1) * $ges9Toshkent1507[2] * 3000 / $CONST;
        $set9Toshkent1522 = (-1) * $ges9Toshkent1522[2] * 12000 / $CONST;
        $set9Toshkent1537 = (-1) * $ges9Toshkent1537[2] * 12000 / $CONST;
        $set9Toshkent1552 = (-1) * $ges9Toshkent1552[2] * 6000 / $CONST;
        $set9Toshkent1567 = (-1) * $ges9Toshkent1567[2] * 8000 / $CONST;
        $set9Toshkent1582 = (-1) * $ges9Toshkent1582[2] * 12000 / $CONST;
        $set9Toshkent1597 = (-1) * $ges9Toshkent1597[2] * 6000 / $CONST;
        $set9Toshkent1612 = (-1) * $ges9Toshkent1612[2] * 6000 / $CONST;
        $set9Toshkent1627 = (-1) * $ges9Toshkent1627[2] * 6000 / $CONST;
        $set9Toshkent1642 = (-1) * $ges9Toshkent1642[2] * 3000 / $CONST;
        $set9Toshkent1657 = $ges9Toshkent1657[2] * 12000 / $CONST;
        $set9Toshkent1672 = (-1) * $ges9Toshkent1672[2] * 6000 / $CONST;
        $set9Toshkent1687 = $ges9Toshkent1687[2] * 6000 / $CONST;
        $set9Toshkent1702 = $ges9Toshkent1702[2] * 12000 / $CONST;
        $set9Toshkent1723 = $ges9Toshkent1723[2] * 6000 / $CONST;
        $set9Toshkent1746 = $ges9Toshkent1746[2] * 6000 / $CONST;
        $set9Toshkent1769 = $ges9Toshkent1769[2] * 12000 / $CONST;
        $set9Toshkent1770 = $ges9Toshkent1770[2] * 12000 / $CONST;

        $power9Toshkent979 = $ges9Toshkent979[2] * 15750 / $CONST;//active
        $reactive9Toshkent981 = $ges9Toshkent981[2] * 15750 / $CONST;//reactive
        $water9Toshkent979 = $energy->getWater($power9Toshkent979, $pressure, 0.9489, 0.9585);//water
        $kpd9Toshkent979 = $energy->getKpd($power9Toshkent979, $water9Toshkent979, $pressure, 0.94);//kpd

        $power9Toshkent956 = $ges9Toshkent956[2] * 15750 / $CONST;//active
        $reactive9Toshkent958 = $ges9Toshkent958[2] * 15750 / $CONST;//reactive
        $water9Toshkent956 = $energy->getWater($power9Toshkent956, $pressure, 0.9489, 0.9585);//water
        $kpd9Toshkent956 = $energy->getKpd($power9Toshkent956, $water9Toshkent956, $pressure, 0.94);//kpd

        $set9Toshkent1301 = $ges9Toshkent1301[2] * 2000 / $kvt;
        $set9Toshkent1048 = $ges9Toshkent1048[2] * 600 / $kvt;

        $data = array(
            array("id" => 1111, "value" => $ges9Toshkent1111[2] > 0 ? $energy->getVoltages($ges9Toshkent1111[2], 60) : $energy->getVoltages($ges9Toshkent1088[2], 60)),
            array("id" => 1134, "value" => $energy->getVoltages($ges9Toshkent1134[2], 350)),
            array("id" => 1203, "value" => $energy->getVoltages($ges9Toshkent1203[2], 1100)),
            array("id" => 1226, "value" => $energy->getVoltages($ges9Toshkent1226[2], 1100)),
            array("id" => 1249, "value" => $energy->getVoltages($ges9Toshkent1249[2], 350)),
            array("id" => 1318, "value" => $energy->getVoltages($ges9Toshkent1318[2], 100)),

            array("id" => 1094, "value" => $ges9Toshkent1094[2] * 12000 / $CONST),
            array("id" => 1095, "value" => $ges9Toshkent1095[2] * 12000 / $CONST),
            array("id" => 1117, "value" => $ges9Toshkent1117[2] * 9000 / $CONST),
            array("id" => 1118, "value" => $ges9Toshkent1118[2] * 9000 / $CONST),
            array("id" => 1140, "value" => $ges9Toshkent1140[2] * 14000 / $CONST),
            array("id" => 1141, "value" => $ges9Toshkent1141[2] * 14000 / $CONST),
            array("id" => 1186, "value" => $ges9Toshkent1186[2] * 28000 / $CONST),
            array("id" => 1187, "value" => $ges9Toshkent1187[2] * 28000 / $CONST),
            array("id" => 1255, "value" => $ges9Toshkent1255[2] * 14000 / $CONST),
            array("id" => 1256, "value" => $ges9Toshkent1256[2] * 14000 / $CONST),
            array("id" => 1325, "value" => $ges9Toshkent1325[2] * 2000 / $CONST),
            array("id" => 1348, "value" => $ges9Toshkent1348[2] * 2000 / $CONST),
            array("id" => 1363, "value" => $ges9Toshkent1363[2] * 4000 / $CONST),
            array("id" => 1364, "value" => $ges9Toshkent1364[2] * 4000 / $CONST),

            array("id" => 1210, "value" => $set9Toshkent1210),
            array("id" => 1233, "value" => $set9Toshkent1233),
            array("id" => 1387, "value" => $set9Toshkent1387),
            array("id" => 1402, "value" => $set9Toshkent1402),
            array("id" => 1770, "value" => $set9Toshkent1770),

            array("id" => 1702, "value" => $set9Toshkent1702),
            array("id" => 1687, "value" => $set9Toshkent1687),
            array("id" => 1209, "value" => $set9Toshkent1209),
            array("id" => 1278, "value" => $set9Toshkent1278),
            array("id" => 1370, "value" => $set9Toshkent1370),
            array("id" => 1582, "value" => $set9Toshkent1582),
            array("id" => 1232, "value" => $set9Toshkent1232),
            array("id" => 1723, "value" => $set9Toshkent1723),
            array("id" => 1672, "value" => $set9Toshkent1672),
            array("id" => 1657, "value" => $set9Toshkent1657),
            array("id" => 1642, "value" => $set9Toshkent1642),
            array("id" => 1627, "value" => $set9Toshkent1627),
            array("id" => 1567, "value" => $set9Toshkent1567),
            array("id" => 1552, "value" => $set9Toshkent1552),
            array("id" => 1537, "value" => $set9Toshkent1537),
            array("id" => 1746, "value" => $set9Toshkent1746),
            array("id" => 1522, "value" => $set9Toshkent1522),
            array("id" => 1507, "value" => $set9Toshkent1507),
            array("id" => 1612, "value" => $set9Toshkent1612),
            array("id" => 1597, "value" => $set9Toshkent1597),
            array("id" => 1324, "value" => $set9Toshkent1324),
            array("id" => 1347, "value" => $set9Toshkent1347),
            array("id" => 1492, "value" => $set9Toshkent1492),
            array("id" => 1477, "value" => $set9Toshkent1477),
            array("id" => 1432, "value" => $set9Toshkent1432),
            array("id" => 1417, "value" => $set9Toshkent1417),
            array("id" => 1462, "value" => $set9Toshkent1462),
            array("id" => 1447, "value" => $set9Toshkent1447),
            array("id" => 1769, "value" => $set9Toshkent1769),

            array("id" => 1048, "value" => $set9Toshkent1048),
            array("id" => 1301, "value" => $set9Toshkent1301),

            array("id" => 979, "value" => $power9Toshkent979),//active
            array("id" => 981, "value" => $reactive9Toshkent981),//reactive
            array("id" => 982, "value" => $kpd9Toshkent979),//КПД
            array("id" => 983, "value" => 0),//HA
            array("id" => 984, "value" => $water9Toshkent979),//water

            array("id" => 956, "value" => $power9Toshkent956),//active
            array("id" => 958, "value" => $reactive9Toshkent958),//reactive
            array("id" => 959, "value" => $kpd9Toshkent956),//КПД
            array("id" => 960, "value" => 0),//HA
            array("id" => 961, "value" => $water9Toshkent956),//water

            array("id" => 1, "value" => $power9Toshkent979 + $power9Toshkent956),
            array("id" => 2, "value" => $reactive9Toshkent981 + $reactive9Toshkent958),
            array("id" => 3, "value" =>
                $set9Toshkent1209 + $set9Toshkent1702 + $set9Toshkent1687 + $set9Toshkent1370 + $set9Toshkent1582 +
                $set9Toshkent1232 + $set9Toshkent1723 + $set9Toshkent1672 + $set9Toshkent1657 + $set9Toshkent1642 +
                $set9Toshkent1627 + $set9Toshkent1567 + $set9Toshkent1552 + $set9Toshkent1537 + $set9Toshkent1746 + $set9Toshkent1522 +
                $set9Toshkent1507 + $set9Toshkent1612 + $set9Toshkent1597 + $set9Toshkent1492 + $set9Toshkent1477 +
                $set9Toshkent1432 + $set9Toshkent1417 + $set9Toshkent1462 + $set9Toshkent1447 + $set9Toshkent1769 +
                $set9Toshkent1387 + $set9Toshkent1402
            ),
            array("id" => 4, "value" => $set9Toshkent1210 + $set9Toshkent1233 + $set9Toshkent1387 + $set9Toshkent1402 + $set9Toshkent1770),
            array("id" => 5, "value" => $set9Toshkent1048 + $set9Toshkent1301),
            array("id" => 6, "value" => $water9Toshkent979 + $water9Toshkent956),
            array("id" => 7, "value" => $ges9Toshkent1317[2] > 0 ? $ges9Toshkent1317[2] : ($ges9Toshkent1202[2] > 0 ? $ges9Toshkent1202[2] : ($ges9Toshkent1225[2] > 0 ? $ges9Toshkent1225[2] : $ges9Toshkent1133[2]))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    //Бўрижар (ГЭС-4)
    public function actionServer4()
    {
        $CONST = 1000000;
        $kvt = 1000;

        $water = Water::find()->where(['id_organization' => 39])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges4Toshkent650 = $this->getValue($data, "G650");
        $ges4Toshkent627 = $this->getValue($data, "G627");
        $ges4Toshkent604 = $this->getValue($data, "G604");
        $ges4Toshkent605 = $this->getValue($data, "G605");
        $ges4Toshkent719 = $this->getValue($data, "G719");
        $ges4Toshkent673 = $this->getValue($data, "G673");
        $ges4Toshkent535 = $this->getValue($data, "G535");
        $ges4Toshkent581 = $this->getValue($data, "G581");
        $ges4Toshkent558 = $this->getValue($data, "G558");
        $ges4Toshkent475 = $this->getValue($data, "G475");
        $ges4Toshkent442 = $this->getValue($data, "G442");
        $ges4Toshkent443 = $this->getValue($data, "G443");
        $ges4Toshkent461 = $this->getValue($data, "G461");
        $ges4Toshkent462 = $this->getValue($data, "G462");
        $ges4Toshkent476 = $this->getValue($data, "G476");
        $ges4Toshkent742 = $this->getValue($data, "G742");
        $ges4Toshkent484 = $this->getValue($data, "G484");
        $ges4Toshkent696 = $this->getValue($data, "G696");
        $ges4Toshkent598 = $this->getValue($data, "G598");
        $ges4Toshkent597 = $this->getValue($data, "G597");

        $set4Toshkent476 = $ges4Toshkent476[2] * 28000 / $CONST;
        $set4Toshkent604 = $ges4Toshkent604[2] * 4800 / $CONST;
        $set4Toshkent605 = $ges4Toshkent605[2] * 4800 / $CONST;
        $set4Toshkent627 = $ges4Toshkent627[2] * 7200 / $CONST;
        $set4Toshkent650 = $ges4Toshkent650[2] * 3600 / $CONST;
        $set4Toshkent673 = $ges4Toshkent673[2] * 3600 / $CONST;
        $set4Toshkent696 = $ges4Toshkent696[2] * 3600 / $CONST;
        $set4Toshkent719 = $ges4Toshkent719[2] * 3600 / $CONST;
        $set4Toshkent742 = $ges4Toshkent742[2] * 3600 / $CONST;

        $set4Toshkent535 = $ges4Toshkent535[2] * 60 / $kvt;
        $set4Toshkent558 = $ges4Toshkent558[2] * 60 / $kvt;
        $set4Toshkent581 = $ges4Toshkent581[2] * 40 / $kvt;

        $power4Toshkent442 = $ges4Toshkent442[2] * 4800 / $CONST;//active
        $reactive4Toshkent443 = $ges4Toshkent443[2] * 4800 / $CONST;//reactive
        $water4Toshkent442 = $energy->getWater($power4Toshkent442, $pressure, 0.842, 0.9537);//water
        $kpd4Toshkent442 = $energy->getKpd($power4Toshkent442, $water4Toshkent442, $pressure, 0.9537);//kpd

        $power4Toshkent461 = $ges4Toshkent461[2] * 4800 / $CONST;//active
        $reactive4Toshkent462 = $ges4Toshkent462[2] * 4800 / $CONST;//reactive
        $water4Toshkent461 = $energy->getWater($power4Toshkent461, $pressure, 0.842, 0.9537);//water
        $kpd4Toshkent461 = $energy->getKpd($power4Toshkent461, $water4Toshkent461, $pressure, 0.9537);//kpd

        $data = array(
            array("id" => 484, "value" => $ges4Toshkent484[2] > 0 ? $energy->getVoltages($ges4Toshkent484[2],350) : $energy->getVoltages($ges4Toshkent598[2], 60)),

            array("id" => 476, "value" => $set4Toshkent476),
            array("id" => 604, "value" => $set4Toshkent604),
            array("id" => 605, "value" => $set4Toshkent605),
            array("id" => 627, "value" => $set4Toshkent627),
            array("id" => 650, "value" => $set4Toshkent650),
            array("id" => 673, "value" => $set4Toshkent673),
            array("id" => 696, "value" => $set4Toshkent696),
            array("id" => 719, "value" => $set4Toshkent719),
            array("id" => 742, "value" => $set4Toshkent742),

            array("id" => 535, "value" => $set4Toshkent535),
            array("id" => 558, "value" => $set4Toshkent558),
            array("id" => 581, "value" => $set4Toshkent581),

            array("id" => 442, "value" => $power4Toshkent442),//active
            array("id" => 443, "value" => $reactive4Toshkent443),//reactive
            array("id" => 444, "value" => $kpd4Toshkent442),//КПД
            array("id" => 445, "value" => 0),//HA
            array("id" => 446, "value" => $water4Toshkent442),//water

            array("id" => 461, "value" => $power4Toshkent461),//active
            array("id" => 462, "value" => $reactive4Toshkent462),//reactive
            array("id" => 463, "value" => $kpd4Toshkent461),//КПД
            array("id" => 464, "value" => 0),//HA
            array("id" => 465, "value" => $water4Toshkent461),//water

            array("id" => 1, "value" => $power4Toshkent442 + $power4Toshkent461),
            array("id" => 2, "value" => $reactive4Toshkent443 + $reactive4Toshkent462),
            array("id" => 3, "value" => (-1 * $set4Toshkent476 > 0 ? -1 * $set4Toshkent476 : 0) + $set4Toshkent604 + $set4Toshkent627 + $set4Toshkent650 + $set4Toshkent673 + $set4Toshkent696 + $set4Toshkent719 + $set4Toshkent742),
            array("id" => 4, "value" => (-1 * $set4Toshkent476 < 0 ? -1 * $set4Toshkent476 : 0) + $set4Toshkent605),
            array("id" => 5, "value" => $set4Toshkent535 + $set4Toshkent581 + $set4Toshkent558),
            array("id" => 6, "value" => $water4Toshkent442 + $water4Toshkent461),
            array("id" => 7, "value" => $ges4Toshkent597[2] > 0 ? $ges4Toshkent597[2] : $ges4Toshkent475[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
            );

        echo json_encode($data);
    }

    //ГЭС-1 Бўзсув
    public function actionServer1()
    {
        $water = Water::find()->where(['id_organization' => 37])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges1Tashkent133 = $this->getValue($data, "G133");
        $ges1Tashkent135 = $this->getValue($data, "G135");
        $ges1Tashkent173 = $this->getValue($data, "G173");
        $ges1Tashkent213 = $this->getValue($data, "G213");
        $ges1Tashkent26 = $this->getValue($data, "B26");
        $ges1Tashkent25 = $this->getValue($data, "B25");
        $ges1Tashkent49 = $this->getValue($data, "B49");
        $ges1Tashkent33 = $this->getValue($data, "B33");
        $ges1Tashkent37 = $this->getValue($data, "B37");
        $ges1Tashkent41 = $this->getValue($data, "B41");
        $ges1Tashkent45 = $this->getValue($data, "B45");
        $ges1Tashkent14 = $this->getValue($data, "G14");
        $ges1Tashkent13 = $this->getValue($data, "G13");
        $ges1Tashkent30 = $this->getValue($data, "B30");
        $ges1Tashkent29 = $this->getValue($data, "B29");
        $ges1Tashkent54 = $this->getValue($data, "G54");
        $ges1Tashkent53 = $this->getValue($data, "G53");
        $ges1Tashkent42 = $this->getValue($data, "G42");
        $ges1Tashkent2 = $this->getValue($data, "G2");
        $ges1Tashkent93 = $this->getValue($data, "G93");
        $ges1Tashkent95 = $this->getValue($data, "G95");
        $ges1Tashkent123 = $this->getValue($data, "G123");
        $ges1Tashkent203 = $this->getValue($data, "G203");
        $ges1Tashkent163 = $this->getValue($data, "G163");
        $ges1Tashkent83 = $this->getValue($data, "G83");

        $CONST = 1000000;
        $kvt = 1000;
        $set1Tashkent14 = $ges1Tashkent14[2] * 52500 / $CONST;//52500
        $set1Tashkent13 = $ges1Tashkent13[2] * 52500 / $CONST;//52500
        $set1Tashkent54 = $ges1Tashkent54[2] * 52500 / $CONST;//52500
        $set1Tashkent53 = $ges1Tashkent53[2] * 52500 / $CONST;//52500

        $power1Tashkent133 = $ges1Tashkent133[2] * 30000 / $CONST;//active
        $reactive1Tashkent135 = $ges1Tashkent135[2] * 30000 / $CONST;//reactive
        $water1Tashkent133 = $energy->getWater($power1Tashkent133, $pressure, 0.93, 0.962);//water
        $kpd1Tashkent133 = $energy->getKpd($power1Tashkent133, $water1Tashkent133, $pressure, 0.962);//kpd

        $power1Tashkent93 = $ges1Tashkent93[2] * 30000 / $CONST;//active
        $reactive1Tashkent95 = $ges1Tashkent95[2] * 30000 / $CONST;//reactive
        $water1Tashkent93 = $energy->getWater($power1Tashkent93, $pressure, 0.93, 0.962);//water
        $kpd1Tashkent93 = $energy->getKpd($power1Tashkent93, $water1Tashkent93, $pressure, 0.962);//kpd

        $set1Tashkent213 = $ges1Tashkent213[2] * 10000 / $kvt;
        $set1Tashkent173 = $ges1Tashkent173[2] * 10000 / $kvt;

        $b25 = 0;//$ges1Tashkent25[2] * 52500 / $CONST;
        $b26 = 0;//$ges1Tashkent26[2] * 52500 / $CONST
        $b29 = 0;//$ges1Tashkent29[2] * 52500 / $CONST
        $b30 = 0;//$ges1Tashkent30[2] * 52500 / $CONST

        $data = array(
            array("id" => 26, "value" => $b26),
            array("id" => 25, "value" => $b25),
            array("id" => 30, "value" => $b30),
            array("id" => 29, "value" => $b29),
            array("id" => 33, "value" => $ges1Tashkent33[2] * 2400 / $CONST),
            array("id" => 37, "value" => $ges1Tashkent37[2] * 3600 / $CONST),
            array("id" => 41, "value" => $ges1Tashkent41[2] * 4800 / $CONST),
            array("id" => 45, "value" => $ges1Tashkent45[2] * 15 / $kvt),
            array("id" => 49, "value" => $ges1Tashkent49[2] * 40 / $kvt),

            array("id" => 123, "value" => $ges1Tashkent123[2] > 0 ? $energy->getVoltages($ges1Tashkent123[2], 100) : $energy->getVoltages($ges1Tashkent203[2], 100)),
            array("id" => 163, "value" => $ges1Tashkent163[2] > 0 ? $energy->getVoltages($ges1Tashkent163[2], 100) : $energy->getVoltages($ges1Tashkent83[2], 100)),

            array("id" => 14, "value" => $set1Tashkent14),
            array("id" => 13, "value" => $set1Tashkent13),
            array("id" => 54, "value" => $set1Tashkent54),
            array("id" => 53, "value" => $set1Tashkent53),

            array("id" => 213, "value" => $set1Tashkent213),
            array("id" => 173, "value" => $set1Tashkent173),

            array("id" => 133, "value" => $power1Tashkent133),//active
            array("id" => 135, "value" => $reactive1Tashkent135),//reactive
            array("id" => 136, "value" => $kpd1Tashkent133),//КПД
            array("id" => 137, "value" => 0),//HA
            array("id" => 138, "value" => $water1Tashkent133),//water

            array("id" => 93, "value" => $power1Tashkent93),//active
            array("id" => 95, "value" => $reactive1Tashkent95),//reactive
            array("id" => 96, "value" => $kpd1Tashkent93),//КПД
            array("id" => 97, "value" => 0),//HA
            array("id" => 98, "value" => $water1Tashkent93),//water

            array("id" => 1, "value" => $power1Tashkent133 + $power1Tashkent93),
            array("id" => 2, "value" => $reactive1Tashkent135 + $reactive1Tashkent95),
            array("id" => 3, "value" => $set1Tashkent13 + $set1Tashkent53),
            array("id" => 4, "value" => $set1Tashkent14 + $set1Tashkent54),
            array("id" => 5, "value" => $set1Tashkent213 + $set1Tashkent173),
            array("id" => 6, "value" => $water1Tashkent133 + $water1Tashkent93),
            array("id" => 7, "value" => $ges1Tashkent2[2] > 0 ? $ges1Tashkent2[2] : $ges1Tashkent42[2]),
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

        $water4 = Water::find()->where(['id_organization' => 39])->orderBy(['date' => SORT_DESC])->one();
        $upBef4 = $water4 ? $water4['up_bef'] : 0;
        $downBef4 = $water4 ? $water4['down_bef'] : 0;
        $pressure4 = $upBef4 - $downBef4;

        $ges4Toshkent650 = $this->getValue($data, "G650");
        $ges4Toshkent627 = $this->getValue($data, "G627");
        $ges4Toshkent604 = $this->getValue($data, "G604");
        $ges4Toshkent605 = $this->getValue($data, "G605");
        $ges4Toshkent719 = $this->getValue($data, "G719");
        $ges4Toshkent673 = $this->getValue($data, "G673");
        $ges4Toshkent535 = $this->getValue($data, "G535");
        $ges4Toshkent581 = $this->getValue($data, "G581");
        $ges4Toshkent558 = $this->getValue($data, "G558");
        $ges4Toshkent442 = $this->getValue($data, "G442");
        $ges4Toshkent443 = $this->getValue($data, "G443");
        $ges4Toshkent461 = $this->getValue($data, "G461");
        $ges4Toshkent462 = $this->getValue($data, "G462");
        $ges4Toshkent476 = $this->getValue($data, "G476");
        $ges4Toshkent742 = $this->getValue($data, "G742");
        $ges4Toshkent696 = $this->getValue($data, "G696");

        $set4Toshkent476 = $ges4Toshkent476[2] * 28000 / $CONST;
        $set4Toshkent604 = $ges4Toshkent604[2] * 4800 / $CONST;
        $set4Toshkent605 = $ges4Toshkent605[2] * 4800 / $CONST;
        $set4Toshkent627 = $ges4Toshkent627[2] * 7200 / $CONST;
        $set4Toshkent650 = $ges4Toshkent650[2] * 3600 / $CONST;
        $set4Toshkent673 = $ges4Toshkent673[2] * 3600 / $CONST;
        $set4Toshkent696 = $ges4Toshkent696[2] * 3600 / $CONST;
        $set4Toshkent719 = $ges4Toshkent719[2] * 3600 / $CONST;
        $set4Toshkent742 = $ges4Toshkent742[2] * 3600 / $CONST;

        $set4Toshkent535 = $ges4Toshkent535[2] * 60 / $kvt;
        $set4Toshkent558 = $ges4Toshkent558[2] * 60 / $kvt;
        $set4Toshkent581 = $ges4Toshkent581[2] * 40 / $kvt;

        $power4Toshkent442 = $ges4Toshkent442[2] * 4800 / $CONST;//active
        $reactive4Toshkent443 = $ges4Toshkent443[2] * 4800 / $CONST;//reactive
        $water4Toshkent442 = $energy->getWater($power4Toshkent442, $pressure4, 0.842, 0.9537);//water

        $power4Toshkent461 = $ges4Toshkent461[2] * 4800 / $CONST;//active
        $reactive4Toshkent462 = $ges4Toshkent462[2] * 4800 / $CONST;//reactive
        $water4Toshkent461 = $energy->getWater($power4Toshkent461, $pressure4, 0.842, 0.9537);//water

        $ges4ToshkentActive = $power4Toshkent442 + $power4Toshkent461;
        $ges4ToshkentReactive = $reactive4Toshkent443 + $reactive4Toshkent462;
        $ges4ToshkentActiveOut = (-1 * $set4Toshkent476 > 0 ? -1 * $set4Toshkent476 : 0) + $set4Toshkent604 + $set4Toshkent627 + $set4Toshkent650 + $set4Toshkent673 + $set4Toshkent696 + $set4Toshkent719 + $set4Toshkent742;
        $ges4ToshkentActiveIn = (-1 * $set4Toshkent476 < 0 ? -1 * $set4Toshkent476 : 0) + $set4Toshkent605;
        $ges4ToshkentOwnNeeds = $set4Toshkent535 + $set4Toshkent581 + $set4Toshkent558;
        $ges4ToshkentWater = $water4Toshkent442 + $water4Toshkent461;
        $ges4ToshkentAggregateTrue = ($ges4Toshkent442[2] > 0 ? 1 : 0) + ($ges4Toshkent461[2] > 0 ? 1 : 0);
        $ges4ToshkentAggregateError = 0;
        $ges4ToshkentAggregateFalse = ($ges4Toshkent442[2] <= 0 ? 1 : 0) + ($ges4Toshkent461[2] <= 0 ? 1 : 0) - $ges4ToshkentAggregateError;

        $water21 = Water::find()->where(['id_organization' => 38])->orderBy(['date' => SORT_DESC])->one();
        $upBef21 = $water21 ? $water21['up_bef'] : 0;
        $downBef21 = $water21 ? $water21['down_bef'] : 0;
        $pressure21 = $upBef21 - $downBef21;
        $ges21Toshkent818 = $this->getValue($data, "G818");
        $ges21Toshkent911 = $this->getValue($data, "G911");
        $ges21Toshkent910 = $this->getValue($data, "G910");
        $ges21Toshkent934 = $this->getValue($data, "G934");
        $ges21Toshkent933 = $this->getValue($data, "G933");
        $ges21Toshkent841 = $this->getValue($data, "G841");
        $ges21Toshkent864 = $this->getValue($data, "G864");
        $ges21Toshkent887 = $this->getValue($data, "G887");
        $ges21Toshkent759 = $this->getValue($data, "G759");
        $ges21Toshkent760 = $this->getValue($data, "G760");
        $ges21Toshkent774 = $this->getValue($data, "G774");
        $ges21Toshkent775 = $this->getValue($data, "G775");
        $ges21Toshkent795 = $this->getValue($data, "G795");
        $ges21Toshkent797 = $this->getValue($data, "G797");

        $set21Toshkent818 = $ges21Toshkent818[2] * 4800 / $CONST;
        $set21Toshkent910 = $ges21Toshkent910[2] * 12000 / $CONST;
        $set21Toshkent911 = $ges21Toshkent911[2] * 12000 / $CONST;
        $set21Toshkent934 = $ges21Toshkent934[2] * 12000 / $CONST;
        $set21Toshkent933 = $ges21Toshkent933[2] * 12000 / $CONST;
        $set21Toshkent841 = $ges21Toshkent841[2] * 2400 / $CONST;

        $power21Toshkent759 = $ges21Toshkent759[2] * 1800 / $CONST;//active
        $reactive21Toshkent760 = $ges21Toshkent760[2] * 1800 / $CONST;//reactive
        $water21Toshkent759 = $energy->getWater($power21Toshkent759, $pressure21, 0.8465, 0.94);//water

        $power21Toshkent774 = $ges21Toshkent774[2] * 1800 / $CONST;//active
        $reactive21Toshkent775 = $ges21Toshkent775[2] * 1800 / $CONST;//reactive
        $water21Toshkent774 = $energy->getWater($power21Toshkent774, $pressure21, 0.8465, 0.94);//water

        $power21Toshkent795 = $ges21Toshkent795[2] * 2400 / $CONST;//active
        $reactive21Toshkent797 = $ges21Toshkent797[2] * 2400 / $CONST;//reactive
        $water21Toshkent795 = $energy->getWater($power21Toshkent795, $pressure21, 0.862, 0.94);//water

        $set21Toshkent864 = $ges21Toshkent864[2] * 600 / $kvt;
        $set21Toshkent887 = $ges21Toshkent887[2] * 480 / $kvt;

        $ges21ToshkentActive = $power21Toshkent759 + $power21Toshkent774 + $power21Toshkent795;
        $ges21ToshkentReactive = $reactive21Toshkent760 + $reactive21Toshkent775 + $reactive21Toshkent797;
        $ges21ToshkentActiveOut = $set21Toshkent818 + $set21Toshkent841 + $set21Toshkent910 + $set21Toshkent934;
        $ges21ToshkentActiveIn = $set21Toshkent911 + $set21Toshkent933;
        $ges21ToshkentOwnNeeds = $set21Toshkent864 + $set21Toshkent887;
        $ges21ToshkentWater = $water21Toshkent759 + $water21Toshkent774 + $water21Toshkent795;
        $ges21ToshkentAggregateTrue = ($ges21Toshkent759[2] > 0 ? 1 : 0) + ($ges21Toshkent774[2] > 0 ? 1 : 0) +  + ($ges21Toshkent795[2] > 0 ? 1 : 0);
        $ges21ToshkentAggregateError = 0;
        $ges21ToshkentAggregateFalse = ($ges21Toshkent759[2] <= 0 ? 1 : 0) + ($ges21Toshkent774[2] <= 0 ? 1 : 0) +  + ($ges21Toshkent795[2] <= 0 ? 1 : 0) - $ges21ToshkentAggregateError;

        $water1 = Water::find()->where(['id_organization' => 37])->orderBy(['date' => SORT_DESC])->one();
        $upBef1 = $water1 ? $water1['up_bef'] : 0;
        $downBef1 = $water1 ? $water1['down_bef'] : 0;
        $pressure1 = $upBef1 - $downBef1;

        $ges1Tashkent133 = $this->getValue($data, "G133");
        $ges1Tashkent135 = $this->getValue($data, "G135");
        $ges1Tashkent173 = $this->getValue($data, "G173");
        $ges1Tashkent213 = $this->getValue($data, "G213");
        $ges1Tashkent14 = $this->getValue($data, "G14");
        $ges1Tashkent13 = $this->getValue($data, "G13");
        $ges1Tashkent54 = $this->getValue($data, "G54");
        $ges1Tashkent53 = $this->getValue($data, "G53");
        $ges1Tashkent93 = $this->getValue($data, "G93");
        $ges1Tashkent95 = $this->getValue($data, "G95");

        $set1Tashkent14 = $ges1Tashkent14[2] * 52500 / $CONST;//52500
        $set1Tashkent13 = $ges1Tashkent13[2] * 52500 / $CONST;//52500
        $set1Tashkent54 = $ges1Tashkent54[2] * 52500 / $CONST;//52500
        $set1Tashkent53 = $ges1Tashkent53[2] * 52500 / $CONST;//52500

        $power1Tashkent133 = $ges1Tashkent133[2] * 30000 / $CONST;//active
        $reactive1Tashkent135 = $ges1Tashkent135[2] * 30000 / $CONST;//reactive
        $water1Tashkent133 = $energy->getWater($power1Tashkent133, $pressure1, 0.93, 0.962);//water

        $power1Tashkent93 = $ges1Tashkent93[2] * 30000 / $CONST;//active
        $reactive1Tashkent95 = $ges1Tashkent95[2] * 30000 / $CONST;//reactive
        $water1Tashkent93 = $energy->getWater($power1Tashkent93, $pressure1, 0.93, 0.962);//water

        $set1Tashkent213 = $ges1Tashkent213[2] * 10000 / $kvt;
        $set1Tashkent173 = $ges1Tashkent173[2] * 10000 / $kvt;

        $ges1ToshkentActive = $power1Tashkent133 + $power1Tashkent93;
        $ges1ToshkentReactive = $reactive1Tashkent135 + $reactive1Tashkent95;
        $ges1ToshkentActiveOut = $set1Tashkent13 + $set1Tashkent53;
        $ges1ToshkentActiveIn = $set1Tashkent14 + $set1Tashkent54;
        $ges1ToshkentOwnNeeds = $set1Tashkent213 + $set1Tashkent173;
        $ges1ToshkentWater = $water1Tashkent133 + $water1Tashkent93;
        $ges1ToshkentAggregateTrue = ($ges1Tashkent133[2] > 0 ? 1 : 0) + ($ges1Tashkent93[2] > 0 ? 1 : 0);
        $ges1ToshkentAggregateError = 0;
        $ges1ToshkentAggregateFalse = ($ges1Tashkent133[2] <= 0 ? 1 : 0) + ($ges1Tashkent93[2] <= 0 ? 1 : 0) - $ges1ToshkentAggregateError;


        $water = Water::find()->where(['id_organization' => 40])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges9Toshkent1702 = $this->getValue($data, "G1702");
        $ges9Toshkent1687 = $this->getValue($data, "G1687");
        $ges9Toshkent1278 = $this->getValue($data, "G1278");
        $ges9Toshkent1769 = $this->getValue($data, "G1769");
        $ges9Toshkent1370 = $this->getValue($data, "G1370");
        $ges9Toshkent1582 = $this->getValue($data, "G1582");
        $ges9Toshkent1723 = $this->getValue($data, "G1723");
        $ges9Toshkent1672 = $this->getValue($data, "G1672");
        $ges9Toshkent1657 = $this->getValue($data, "G1657");
        $ges9Toshkent1642 = $this->getValue($data, "G1642");
        $ges9Toshkent1627 = $this->getValue($data, "G1627");
        $ges9Toshkent1567 = $this->getValue($data, "G1567");
        $ges9Toshkent1552 = $this->getValue($data, "G1552");
        $ges9Toshkent1537 = $this->getValue($data, "G1537");
        $ges9Toshkent1746 = $this->getValue($data, "G1746");
        $ges9Toshkent1522 = $this->getValue($data, "G1522");
        $ges9Toshkent1507 = $this->getValue($data, "G1507");
        $ges9Toshkent1612 = $this->getValue($data, "G1612");
        $ges9Toshkent1597 = $this->getValue($data, "G1597");
        $ges9Toshkent1387 = $this->getValue($data, "G1387");
        $ges9Toshkent1402 = $this->getValue($data, "G1402");
        $ges9Toshkent1324 = $this->getValue($data, "G1324");
        $ges9Toshkent1210 = $this->getValue($data, "G1210");
        $ges9Toshkent1209 = $this->getValue($data, "G1209");
        $ges9Toshkent1233 = $this->getValue($data, "G1233");
        $ges9Toshkent1232 = $this->getValue($data, "G1232");
        $ges9Toshkent1347 = $this->getValue($data, "G1347");
        $ges9Toshkent1301 = $this->getValue($data, "G1301");
        $ges9Toshkent956 = $this->getValue($data, "G956");
        $ges9Toshkent958 = $this->getValue($data, "G958");
        $ges9Toshkent1048 = $this->getValue($data, "G1048");
        $ges9Toshkent1492 = $this->getValue($data, "G1492");
        $ges9Toshkent1477 = $this->getValue($data, "G1477");
        $ges9Toshkent1432 = $this->getValue($data, "G1432");
        $ges9Toshkent1417 = $this->getValue($data, "G1417");
        $ges9Toshkent1462 = $this->getValue($data, "G1462");
        $ges9Toshkent1447 = $this->getValue($data, "G1447");
        $ges9Toshkent1770 = $this->getValue($data, "G1770");
        $ges9Toshkent979 = $this->getValue($data, "G979");
        $ges9Toshkent981 = $this->getValue($data, "G981");

        $set9Toshkent1209 = $ges9Toshkent1209[2] * 44000 / $CONST;
        $set9Toshkent1210 = $ges9Toshkent1210[2] * 44000 / $CONST;
        $set9Toshkent1232 = $ges9Toshkent1232[2] * 44000 / $CONST;
        $set9Toshkent1233 = $ges9Toshkent1233[2] * 44000 / $CONST;
        $set9Toshkent1370 = $ges9Toshkent1370[2] * 4000 / $CONST;
        $set9Toshkent1387 = $ges9Toshkent1387[2] * 42000 / $CONST;
        $set9Toshkent1402 = $ges9Toshkent1402[2] * 42000 / $CONST;
        $set9Toshkent1417 = (-1) * $ges9Toshkent1417[2] * 4800 / $CONST;
        $set9Toshkent1432 = (-1) * $ges9Toshkent1432[2] * 4800 / $CONST;
        $set9Toshkent1447 = (-1) * $ges9Toshkent1447[2] * 3600 / $CONST;
        $set9Toshkent1462 = (-1) * $ges9Toshkent1462[2] * 4800 / $CONST;
        $set9Toshkent1477 = (-1) * $ges9Toshkent1477[2] * 3600 / $CONST;
        $set9Toshkent1492 = (-1) * $ges9Toshkent1492[2] * 2400 / $CONST;
        $set9Toshkent1507 = (-1) * $ges9Toshkent1507[2] * 3000 / $CONST;
        $set9Toshkent1522 = (-1) * $ges9Toshkent1522[2] * 12000 / $CONST;
        $set9Toshkent1537 = (-1) * $ges9Toshkent1537[2] * 12000 / $CONST;
        $set9Toshkent1552 = (-1) * $ges9Toshkent1552[2] * 6000 / $CONST;
        $set9Toshkent1567 = (-1) * $ges9Toshkent1567[2] * 8000 / $CONST;
        $set9Toshkent1582 = (-1) * $ges9Toshkent1582[2] * 12000 / $CONST;
        $set9Toshkent1597 = (-1) * $ges9Toshkent1597[2] * 6000 / $CONST;
        $set9Toshkent1612 = (-1) * $ges9Toshkent1612[2] * 6000 / $CONST;
        $set9Toshkent1627 = (-1) * $ges9Toshkent1627[2] * 6000 / $CONST;
        $set9Toshkent1642 = (-1) * $ges9Toshkent1642[2] * 3000 / $CONST;
        $set9Toshkent1657 = $ges9Toshkent1657[2] * 12000 / $CONST;
        $set9Toshkent1672 = (-1) * $ges9Toshkent1672[2] * 6000 / $CONST;
        $set9Toshkent1687 = $ges9Toshkent1687[2] * 6000 / $CONST;
        $set9Toshkent1702 = $ges9Toshkent1702[2] * 12000 / $CONST;
        $set9Toshkent1723 = $ges9Toshkent1723[2] * 6000 / $CONST;
        $set9Toshkent1746 = $ges9Toshkent1746[2] * 6000 / $CONST;
        $set9Toshkent1769 = $ges9Toshkent1769[2] * 12000 / $CONST;
        $set9Toshkent1770 = $ges9Toshkent1770[2] * 12000 / $CONST;

        $power9Toshkent979 = $ges9Toshkent979[2] * 15750 / $CONST;//active
        $reactive9Toshkent981 = $ges9Toshkent981[2] * 15750 / $CONST;//reactive
        $water9Toshkent979 = $energy->getWater($power9Toshkent979, $pressure, 0.9489, 0.9585);//water

        $power9Toshkent956 = $ges9Toshkent956[2] * 15750 / $CONST;//active
        $reactive9Toshkent958 = $ges9Toshkent958[2] * 15750 / $CONST;//reactive
        $water9Toshkent956 = $energy->getWater($power9Toshkent956, $pressure, 0.9489, 0.9585);//water

        $set9Toshkent1301 = $ges9Toshkent1301[2] * 2000 / $kvt;
        $set9Toshkent1048 = $ges9Toshkent1048[2] * 600 / $kvt;

        $ges9ToshkentActive = $power9Toshkent979 + $power9Toshkent956;
        $ges9ToshkentReactive = $reactive9Toshkent981 + $reactive9Toshkent958;
        $ges9ToshkentActiveOut = $set9Toshkent1209 + $set9Toshkent1702 + $set9Toshkent1687 + $set9Toshkent1370 + $set9Toshkent1582 +
            $set9Toshkent1232 + $set9Toshkent1723 + $set9Toshkent1672 + $set9Toshkent1657 + $set9Toshkent1642 +
            $set9Toshkent1627 + $set9Toshkent1567 + $set9Toshkent1552 + $set9Toshkent1537 + $set9Toshkent1746 + $set9Toshkent1522 +
            $set9Toshkent1507 + $set9Toshkent1612 + $set9Toshkent1597 + $set9Toshkent1492 + $set9Toshkent1477 +
            $set9Toshkent1432 + $set9Toshkent1417 + $set9Toshkent1462 + $set9Toshkent1447 + $set9Toshkent1769 +
            $set9Toshkent1387 + $set9Toshkent1402;
        $ges9ToshkentActiveIn = $set9Toshkent1210 + $set9Toshkent1233 + $set9Toshkent1387 + $set9Toshkent1402 + $set9Toshkent1770;
        $ges9ToshkentOwnNeeds = $set9Toshkent1048 + $set9Toshkent1301;
        $ges9ToshkentWater = $water9Toshkent979 + $water9Toshkent956;
        $ges9ToshkentAggregateTrue = ($ges9Toshkent979[2] > 0 ? 1 : 0) + ($ges9Toshkent956[2] > 0 ? 1 : 0);
        $ges9ToshkentAggregateError = 0;
        $ges9ToshkentAggregateFalse = ($ges9Toshkent979[2] <= 0 ? 1 : 0) + ($ges9Toshkent956[2] <= 0 ? 1 : 0) - $ges9ToshkentAggregateError;

        $active = $ges4ToshkentActive + $ges21ToshkentActive + $ges1ToshkentActive + $ges9ToshkentActive;
        $reactive = $ges4ToshkentReactive + $ges21ToshkentReactive + $ges1ToshkentReactive + $ges9ToshkentReactive;
        $activeOut = $ges4ToshkentActiveOut + $ges21ToshkentActiveOut + $ges1ToshkentActiveOut + $ges9ToshkentActiveOut;
        $activeIn = $ges4ToshkentActiveIn + $ges21ToshkentActiveIn + $ges1ToshkentActiveIn + $ges9ToshkentActiveIn;
        $ownNeeds = $ges4ToshkentOwnNeeds + $ges21ToshkentOwnNeeds + $ges1ToshkentOwnNeeds + $ges9ToshkentOwnNeeds;
        $water = $ges4ToshkentWater + $ges21ToshkentWater + $ges1ToshkentWater + $ges9ToshkentWater;
        $true = $ges4ToshkentAggregateTrue + $ges21ToshkentAggregateTrue + $ges1ToshkentAggregateTrue + $ges9ToshkentAggregateTrue;
        $error = $ges4ToshkentAggregateError + $ges21ToshkentAggregateError + $ges1ToshkentAggregateError + $ges9ToshkentAggregateError;
        $false = $ges4ToshkentAggregateFalse + $ges21ToshkentAggregateFalse + $ges1ToshkentAggregateFalse + $ges9ToshkentAggregateFalse;


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

            array("id" => 10, "value" => $ges4ToshkentActive),
            array("id" => 11, "value" => $ges4ToshkentAggregateTrue),
            array("id" => 12, "value" => $ges4ToshkentAggregateFalse),
            array("id" => 13, "value" => $ges4ToshkentAggregateError),

            array("id" => 14, "value" => $ges21ToshkentActive),
            array("id" => 15, "value" => $ges21ToshkentAggregateTrue),
            array("id" => 16, "value" => $ges21ToshkentAggregateFalse),
            array("id" => 17, "value" => $ges21ToshkentAggregateError),

            array("id" => 18, "value" => $ges1ToshkentActive),
            array("id" => 19, "value" => $ges1ToshkentAggregateTrue),
            array("id" => 20, "value" => $ges1ToshkentAggregateFalse),
            array("id" => 21, "value" => $ges1ToshkentAggregateError),

            array("id" => 22, "value" => $ges9ToshkentActive),
            array("id" => 23, "value" => $ges9ToshkentAggregateTrue),
            array("id" => 24, "value" => $ges9ToshkentAggregateFalse),
            array("id" => 25, "value" => $ges9ToshkentAggregateError),
        );

        echo json_encode($data);
    }
}
