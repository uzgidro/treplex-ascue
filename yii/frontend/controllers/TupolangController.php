<?php

namespace frontend\controllers;

use common\models\Guides;
use common\models\Water;

class TupolangController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes34()
    {
        return $this->render('ges34');
    }

    public function actionGes43()
    {
        return $this->render('ges43');
    }

    public function actionGes44()
    {
        return $this->render('ges44');
    }

    public function actionGes1()
    {
        return $this->render('ges1');
    }

    protected string $url = "http://user:rsuLa_tU@192.168.40.215:10018/crq?req=current";

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

    protected function getPressure($id, $pressure, $power) {
        $guide = 0;
        $result = Guides::find()->where(['pressure' => (int) round($pressure)])->andWhere(['id_organization' => $id])->orderBy(['power' => SORT_ASC])->all();
        foreach ($result as $item) {
            if (intval($power) <= $item['power'] && $power != 0) {
                $guide = $item['guide']; break;
            }
        }
        return $guide;
    }

    public function actionServer34()
    {
        $water = Water::find()->where(['id_organization' => 71])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges34Tupolang14 = $this->getValue($data, "G14");
        $ges34Tupolang13 = $this->getValue($data, "G13");
        $ges34Tupolang54 = $this->getValue($data, "G54");
        $ges34Tupolang53 = $this->getValue($data, "G53");
        $ges34Tupolang3 = $this->getValue($data, "G3");
        $ges34Tupolang43 = $this->getValue($data, "G43");
        $ges34Tupolang2 = $this->getValue($data, "G2");
        $ges34Tupolang42 = $this->getValue($data, "G42");
        $ges34Tupolang83 = $this->getValue($data, "G83");
        $ges34Tupolang373 = $this->getValue($data, "G373");
        $ges34Tupolang413 = $this->getValue($data, "G413");
        $ges34Tupolang333 = $this->getValue($data, "G333");
        $ges34Tupolang613 = $this->getValue($data, "G613");
        $ges34Tupolang573 = $this->getValue($data, "G573");
        $ges34Tupolang293 = $this->getValue($data, "G293");
        $ges34Tupolang295 = $this->getValue($data, "G295");
        $ges34Tupolang253 = $this->getValue($data, "G253");
        $ges34Tupolang255 = $this->getValue($data, "G255");
        $ges34Tupolang173 = $this->getValue($data, "G173");
        $ges34Tupolang175 = $this->getValue($data, "G175");
        $ges34Tupolang133 = $this->getValue($data, "G133");
        $ges34Tupolang135 = $this->getValue($data, "G135");

        $CONST = 1000000;
        $kvt = 1000;

        $set34Tupolang13 = $ges34Tupolang13[2] * 1100000 / $CONST;
        $set34Tupolang14 = $ges34Tupolang14[2] * 1100000 / $CONST;
        $set34Tupolang53 = $ges34Tupolang53[2] * 1100000 / $CONST;
        $set34Tupolang54 = $ges34Tupolang54[2] * 1100000 / $CONST;

        $set34Tupolang373 = $ges34Tupolang373[2] * 4000 / $kvt;
        $set34Tupolang413 = $ges34Tupolang413[2] * 4000 / $kvt;
        $set34Tupolang333 = $ges34Tupolang333[2] * 4000 / $kvt;
        $set34Tupolang613 = $ges34Tupolang613[2] * 4000 / $kvt;
        $set34Tupolang573 = $ges34Tupolang573[2] * 4000 / $kvt;

        $power34Tupolang293 = $ges34Tupolang293[2] * 24000 / $CONST;//active
        $reactive34Tupolang295 = $ges34Tupolang295[2] * 24000 / $CONST;//reactive
        $water34Tupolang293 = $energy->getWater($power34Tupolang293, $pressure, 0.96, 0.929);//water
        $kpd34Tupolang293 = $energy->getKpd($power34Tupolang293, $water34Tupolang293, $pressure, 0.96);//kpd

        $power34Tupolang253 = $ges34Tupolang253[2] * 24000 / $CONST;//active
        $reactive34Tupolang255 = $ges34Tupolang255[2] * 24000 / $CONST;//reactive
        $water34Tupolang253 = $energy->getWater($power34Tupolang253, $pressure, 0.96, 0.929);//water
        $kpd34Tupolang253 = $energy->getKpd($power34Tupolang253, $water34Tupolang253, $pressure, 0.96);//kpd

        $power34Tupolang173 = $ges34Tupolang173[2] * 100000 / $CONST;//active
        $reactive34Tupolang175 = $ges34Tupolang175[2] * 100000 / $CONST;//reactive
        $water34Tupolang173 = $energy->getWater($power34Tupolang173, $pressure, 0.96, 0.942);//water
        $kpd34Tupolang173 = $energy->getKpd($power34Tupolang173, $water34Tupolang173, $pressure, 0.962);//kpd

        $power34Tupolang133 = $ges34Tupolang133[2] * 100000 / $CONST;//active
        $reactive34Tupolang135 = $ges34Tupolang135[2] * 100000 / $CONST;//reactive
        $water34Tupolang133 = $energy->getWater($power34Tupolang133, $pressure, 0.96, 0.942);//water
        $kpd34Tupolang133 = $energy->getKpd($power34Tupolang133, $water34Tupolang133, $pressure, 0.962);//kpd


        $data = array(
            array("id" => 13, "value" => $set34Tupolang13),
            array("id" => 14, "value" => $set34Tupolang14),
            array("id" => 53, "value" => $set34Tupolang53),
            array("id" => 54, "value" => $set34Tupolang54),

            array("id" => 373, "value" => $set34Tupolang373),
            array("id" => 413, "value" => $set34Tupolang413),
            array("id" => 333, "value" => $set34Tupolang333),
            array("id" => 613, "value" => $set34Tupolang613),
            array("id" => 573, "value" => $set34Tupolang573),

            array("id" => 300, "value" => $energy->getVoltages($ges34Tupolang3[2], 1100)),
            array("id" => 43, "value" => $energy->getVoltages($ges34Tupolang43[2], 1100)),
            array("id" => 83, "value" => $energy->getVoltages($ges34Tupolang83[2], 1100)),

            array("id" => 293, "value" => $power34Tupolang293),//active
            array("id" => 295, "value" => $reactive34Tupolang295),//reactive
            array("id" => 296, "value" => $kpd34Tupolang293),//КПД
            array("id" => 297, "value" => 0),//HA
            array("id" => 298, "value" => $water34Tupolang293),//water

            array("id" => 253, "value" => $power34Tupolang253),//active
            array("id" => 255, "value" => $reactive34Tupolang255),//reactive
            array("id" => 256, "value" => $kpd34Tupolang253),//КПД
            array("id" => 257, "value" => 0),//HA
            array("id" => 258, "value" => $water34Tupolang253),//water

            array("id" => 173, "value" => $power34Tupolang173),//active
            array("id" => 175, "value" => $reactive34Tupolang175),//reactive
            array("id" => 176, "value" => $kpd34Tupolang173),//КПД
            array("id" => 177, "value" => 0),//HA
            array("id" => 178, "value" => $water34Tupolang173),//water

            array("id" => 133, "value" => $power34Tupolang133),//active
            array("id" => 135, "value" => $reactive34Tupolang135),//reactive
            array("id" => 136, "value" => $kpd34Tupolang133),//КПД
            array("id" => 137, "value" => 0),//HA
            array("id" => 138, "value" => $water34Tupolang133),//water

            array("id" => 1, "value" => $power34Tupolang293 + $power34Tupolang253 + $power34Tupolang173 + $power34Tupolang133),
            array("id" => 2, "value" => $reactive34Tupolang295 + $reactive34Tupolang255 + $reactive34Tupolang175 + $reactive34Tupolang135),
            array("id" => 3, "value" => $set34Tupolang14 + $set34Tupolang54),
            array("id" => 4, "value" => $set34Tupolang13 + $set34Tupolang53),
            array("id" => 5, "value" => $set34Tupolang373 + $set34Tupolang413 + $set34Tupolang333 + $set34Tupolang613 + $set34Tupolang573),
            array("id" => 6, "value" => $water34Tupolang293 + $water34Tupolang253 + $water34Tupolang173 + $water34Tupolang133),
            array("id" => 7, "value" => $ges34Tupolang2[2] > 0 ? $ges34Tupolang2[2] : $ges34Tupolang42[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    public function actionServer43()
    {
        $water = Water::find()->where(['id_organization' => 72])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges43Tupolang867 = $this->getValue($data, "G867");
        $ges43Tupolang868 = $this->getValue($data, "G868");
        $ges43Tupolang890 = $this->getValue($data, "G890");
        $ges43Tupolang891 = $this->getValue($data, "G891");
        $ges43Tupolang861 = $this->getValue($data, "G861");
        $ges43Tupolang884 = $this->getValue($data, "G884");
        $ges43Tupolang821 = $this->getValue($data, "G821");
        $ges43Tupolang775 = $this->getValue($data, "G775");
        $ges43Tupolang844 = $this->getValue($data, "G844");
        $ges43Tupolang798 = $this->getValue($data, "G798");
        $ges43Tupolang729 = $this->getValue($data, "G729");
        $ges43Tupolang731 = $this->getValue($data, "G731");
        $ges43Tupolang752 = $this->getValue($data, "G752");
        $ges43Tupolang754 = $this->getValue($data, "G754");
        $ges43Tupolang860 = $this->getValue($data, "G860");
        $ges43Tupolang883 = $this->getValue($data, "G883");

        $CONST = 1000000;
        $kvt = 1000;

        $set43Tupolang867 = $ges43Tupolang867[2] * 550000 / $CONST;//550000
        $set43Tupolang868 = $ges43Tupolang868[2] * 550000 / $CONST;//550000
        $set43Tupolang890 = $ges43Tupolang890[2] * 550000 / $CONST;//550000
        $set43Tupolang891 = $ges43Tupolang891[2] * 550000 / $CONST;//550000

        $set43Tupolang775 = $ges43Tupolang775[2] * 1050 / $kvt;//1050
        $set43Tupolang798 = $ges43Tupolang798[2] * 1050 / $kvt;//1050
        $set43Tupolang821 = $ges43Tupolang821[2] * 1050 / $kvt;//1050
        $set43Tupolang844 = $ges43Tupolang844[2] * 105 / $kvt;//1050

        $power43Tupolang729 = $ges43Tupolang729[2] * 31500 / $CONST;//active
        $reactive43Tupolang731 = $ges43Tupolang731[2] * 31500 / $CONST;//reactive
        $water43Tupolang729 = $energy->getWater($power43Tupolang729, $pressure, 0.95, 0.931);//water
        $kpd43Tupolang729 = $energy->getKpd($power43Tupolang729, $water43Tupolang729, $pressure, 0.953);//kpd

        $power43Tupolang752 = $ges43Tupolang752[2] * 31500 / $CONST;//active
        $reactive43Tupolang754 = $ges43Tupolang754[2] * 31500 / $CONST;//reactive
        $water43Tupolang752 = $energy->getWater($power43Tupolang752, $pressure, 0.95, 0.931);//water
        $kpd43Tupolang752 = $energy->getKpd($power43Tupolang752, $water43Tupolang752, $pressure, 0.953);//kpd

        $data = array(
            array("id" => 868, "value" => $set43Tupolang868),
            array("id" => 867, "value" => $set43Tupolang867),
            array("id" => 890, "value" => $set43Tupolang890),
            array("id" => 891, "value" => $set43Tupolang891),

            array("id" => 821, "value" => $set43Tupolang821),
            array("id" => 775, "value" => $set43Tupolang775),
            array("id" => 844, "value" => $set43Tupolang844),
            array("id" => 798, "value" => $set43Tupolang798),

            array("id" => 861, "value" => $energy->getVoltages($ges43Tupolang861[2], 100)),
            array("id" => 884, "value" => $energy->getVoltages($ges43Tupolang884[2], 100)),

            array("id" => 729, "value" => $power43Tupolang729),//active
            array("id" => 731, "value" => $reactive43Tupolang731),//reactive
            array("id" => 732, "value" => $kpd43Tupolang729),//КПД
            array("id" => 733, "value" => 0),//HA
            array("id" => 734, "value" => $water43Tupolang729),//water

            array("id" => 752, "value" => $power43Tupolang752),//active
            array("id" => 754, "value" => $reactive43Tupolang754),//reactive
            array("id" => 755, "value" => $kpd43Tupolang752),//КПД
            array("id" => 756, "value" => 0),//HA
            array("id" => 757, "value" => $water43Tupolang752),//water

            array("id" => 1, "value" => $power43Tupolang729 + $power43Tupolang752),
            array("id" => 2, "value" => $reactive43Tupolang731 + $reactive43Tupolang754),
            array("id" => 3, "value" => $set43Tupolang867 + $set43Tupolang890),
            array("id" => 4, "value" => $set43Tupolang868 + $set43Tupolang891),
            array("id" => 5, "value" => $set43Tupolang821 + $set43Tupolang775 + $set43Tupolang844 + $set43Tupolang798),
            array("id" => 6, "value" => $water43Tupolang729 + $water43Tupolang752),
            array("id" => 7, "value" => $ges43Tupolang860[2] > 0 ? $ges43Tupolang860[2] : $ges43Tupolang883[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    public function actionServer44()
    {
        $water = Water::find()->where(['id_organization' => 73])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges44Tupolang1051 = $this->getValue($data, "G1051");
        $ges44Tupolang1052 = $this->getValue($data, "G1052");
        $ges44Tupolang1074 = $this->getValue($data, "G1074");
        $ges44Tupolang1075 = $this->getValue($data, "G1075");
        $ges44Tupolang1045 = $this->getValue($data, "G1045");
        $ges44Tupolang1068 = $this->getValue($data, "G1068");
        $ges44Tupolang1005 = $this->getValue($data, "G1005");
        $ges44Tupolang1028 = $this->getValue($data, "G1028");
        $ges44Tupolang959 = $this->getValue($data, "G959");
        $ges44Tupolang961 = $this->getValue($data, "G961");
        $ges44Tupolang982 = $this->getValue($data, "G982");
        $ges44Tupolang984 = $this->getValue($data, "G984");
        $ges44Tupolang1044 = $this->getValue($data, "G1044");
        $ges44Tupolang1067 = $this->getValue($data, "G1067");

        $CONST = 1000000;
        $kvt = 1000;

        $set44Tupolang1051 = $ges44Tupolang1051[2] * 275000 / $CONST;
        $set44Tupolang1052 = $ges44Tupolang1052[2] * 275000 / $CONST;
        $set44Tupolang1074 = $ges44Tupolang1074[2] * 275000 / $CONST;
        $set44Tupolang1075 = $ges44Tupolang1075[2] * 275000 / $CONST;

        $set44Tupolang1005 = $ges44Tupolang1005[2] * 1050 / $kvt;
        $set44Tupolang1028 = $ges44Tupolang1028[2] * 1050 / $kvt;

        $power44Tupolang959 = $ges44Tupolang959[2] * 31500 / $CONST;//active
        $reactive44Tupolang961 = $ges44Tupolang961[2] * 31500 / $CONST;//reactive
        $water44Tupolang959 = $energy->getWater($power44Tupolang959, $pressure, 0.95, 0.922);//water
        $kpd44Tupolang959 = $energy->getKpd($power44Tupolang959, $water44Tupolang959, $pressure, 0.953);//kpd

        $power44Tupolang982 = $ges44Tupolang982[2] * 31500 / $CONST;//active
        $reactive44Tupolang984 = $ges44Tupolang984[2] * 31500 / $CONST;//reactive
        $water44Tupolang982 = $energy->getWater($power44Tupolang982, $pressure, 0.95, 0.922);//water
        $kpd44Tupolang982 = $energy->getKpd($power44Tupolang982, $water44Tupolang982, $pressure, 0.953);//kpd

        $data = array(
            array("id" => 1051, "value" => $set44Tupolang1051),
            array("id" => 1052, "value" => $set44Tupolang1052),
            array("id" => 1074, "value" => $set44Tupolang1074),
            array("id" => 1075, "value" => $set44Tupolang1075),

            array("id" => 1005, "value" => $set44Tupolang1005),
            array("id" => 1028, "value" => $set44Tupolang1028),

            array("id" => 1045, "value" => $energy->getVoltages($ges44Tupolang1045[2], 100)),
            array("id" => 1068, "value" => $energy->getVoltages($ges44Tupolang1068[2], 100)),

            array("id" => 959, "value" => $power44Tupolang959),//active
            array("id" => 961, "value" => $reactive44Tupolang961),//reactive
            array("id" => 962, "value" => $kpd44Tupolang959),//КПД
            array("id" => 963, "value" => 0),//HA
            array("id" => 964, "value" => $water44Tupolang959),//water

            array("id" => 982, "value" => $power44Tupolang982),//active
            array("id" => 984, "value" => $reactive44Tupolang984),//reactive
            array("id" => 985, "value" => $kpd44Tupolang982),//КПД
            array("id" => 986, "value" => 0),//HA
            array("id" => 987, "value" => $water44Tupolang982),//water

            array("id" => 1, "value" => $power44Tupolang959 + $power44Tupolang982),
            array("id" => 2, "value" => $reactive44Tupolang961 + $reactive44Tupolang984),
            array("id" => 3, "value" => $set44Tupolang1051 + $set44Tupolang1074),
            array("id" => 4, "value" => $set44Tupolang1052 + $set44Tupolang1075),
            array("id" => 5, "value" => $set44Tupolang1005 + $set44Tupolang1028),
            array("id" => 6, "value" => $water44Tupolang959 + $water44Tupolang982),
            array("id" => 7, "value" => $ges44Tupolang1044[2] > 0 ? $ges44Tupolang1044[2] : $ges44Tupolang1067[2]),
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
        $ges34Tupolang14 = $this->getValue($data, "G14");
        $ges34Tupolang13 = $this->getValue($data, "G13");
        $ges34Tupolang54 = $this->getValue($data, "G54");
        $ges34Tupolang53 = $this->getValue($data, "G53");
        $ges34Tupolang373 = $this->getValue($data, "G373");
        $ges34Tupolang413 = $this->getValue($data, "G413");
        $ges34Tupolang333 = $this->getValue($data, "G333");
        $ges34Tupolang613 = $this->getValue($data, "G613");
        $ges34Tupolang573 = $this->getValue($data, "G573");
        $ges34Tupolang293 = $this->getValue($data, "G293");
        $ges34Tupolang295 = $this->getValue($data, "G295");
        $ges34Tupolang253 = $this->getValue($data, "G253");
        $ges34Tupolang255 = $this->getValue($data, "G255");
        $ges34Tupolang173 = $this->getValue($data, "G173");
        $ges34Tupolang175 = $this->getValue($data, "G175");
        $ges34Tupolang133 = $this->getValue($data, "G133");
        $ges34Tupolang135 = $this->getValue($data, "G135");
        $ges43Tupolang867 = $this->getValue($data, "G867");
        $ges43Tupolang868 = $this->getValue($data, "G868");
        $ges43Tupolang890 = $this->getValue($data, "G890");
        $ges43Tupolang891 = $this->getValue($data, "G891");
        $ges43Tupolang821 = $this->getValue($data, "G821");
        $ges43Tupolang775 = $this->getValue($data, "G775");
        $ges43Tupolang844 = $this->getValue($data, "G844");
        $ges43Tupolang798 = $this->getValue($data, "G798");
        $ges43Tupolang729 = $this->getValue($data, "G729");
        $ges43Tupolang731 = $this->getValue($data, "G731");
        $ges43Tupolang752 = $this->getValue($data, "G752");
        $ges43Tupolang754 = $this->getValue($data, "G754");
        $ges44Tupolang1051 = $this->getValue($data, "G1051");
        $ges44Tupolang1052 = $this->getValue($data, "G1052");
        $ges44Tupolang1074 = $this->getValue($data, "G1074");
        $ges44Tupolang1075 = $this->getValue($data, "G1075");
        $ges44Tupolang1005 = $this->getValue($data, "G1005");
        $ges44Tupolang1028 = $this->getValue($data, "G1028");
        $ges44Tupolang959 = $this->getValue($data, "G959");
        $ges44Tupolang961 = $this->getValue($data, "G961");
        $ges44Tupolang982 = $this->getValue($data, "G982");
        $ges44Tupolang984 = $this->getValue($data, "G984");

        $CONST = 1000000;
        $kvt = 1000;

        $energy = new Energy();
        $water34 = Water::find()->where(['id_organization' => 71])->orderBy(['date' => SORT_DESC])->one();
        $upBef34 = $water34 ? $water34['up_bef'] : 0;
        $downBef34 = $water34 ? $water34['down_bef'] : 0;
        $pressure34 = $upBef34 - $downBef34;

        $set34Tupolang13 = $ges34Tupolang13[2] * 110000 / $CONST;
        $set34Tupolang14 = $ges34Tupolang14[2] * 110000 / $CONST;
        $set34Tupolang53 = $ges34Tupolang53[2] * 110000 / $CONST;
        $set34Tupolang54 = $ges34Tupolang54[2] * 110000 / $CONST;

        $set34Tupolang373 = $ges34Tupolang373[2] * 4000 / $kvt;
        $set34Tupolang413 = $ges34Tupolang413[2] * 4000 / $kvt;
        $set34Tupolang333 = $ges34Tupolang333[2] * 4000 / $kvt;
        $set34Tupolang613 = $ges34Tupolang613[2] * 4000 / $kvt;
        $set34Tupolang573 = $ges34Tupolang573[2] * 4000 / $kvt;

        $power34Tupolang293 = $ges34Tupolang293[2] * 24000 / $CONST;//active
        $reactive34Tupolang295 = $ges34Tupolang295[2] * 24000 / $CONST;//reactive
        $water34Tupolang293 = $energy->getWater($power34Tupolang293, $pressure34, 0.96, 0.929);//water
        $power34Tupolang253 = $ges34Tupolang253[2] * 24000 / $CONST;//active
        $reactive34Tupolang255 = $ges34Tupolang255[2] * 24000 / $CONST;//reactive
        $water34Tupolang253 = $energy->getWater($power34Tupolang253, $pressure34, 0.96, 0.929);//water
        $power34Tupolang173 = $ges34Tupolang173[2] * 100000 / $CONST;//active
        $reactive34Tupolang175 = $ges34Tupolang175[2] * 100000 / $CONST;//reactive
        $water34Tupolang173 = $energy->getWater($power34Tupolang173, $pressure34, 0.96, 0.942);//water
        $power34Tupolang133 = $ges34Tupolang133[2] * 100000 / $CONST;//active
        $reactive34Tupolang135 = $ges34Tupolang135[2] * 100000 / $CONST;//reactive
        $water34Tupolang133 = $energy->getWater($power34Tupolang133, $pressure34, 0.96, 0.942);//water

        $ges34TupolangActive = $power34Tupolang293 + $power34Tupolang253 + $power34Tupolang173 + $power34Tupolang133;//active
        $ges34TupolangReactive = $reactive34Tupolang295 + $reactive34Tupolang255 + $reactive34Tupolang175 + $reactive34Tupolang135;//reactive
        $ges34TupolangActiveOut = $set34Tupolang14 + $set34Tupolang54;
        $ges34TupolangActiveIn = $set34Tupolang13 + $set34Tupolang53;
        $ges34TupolangOwnNeeds = $set34Tupolang373 + $set34Tupolang413 + $set34Tupolang333 + $set34Tupolang613 + $set34Tupolang573;
        $ges34TupolangWater = $water34Tupolang293 + $water34Tupolang253 + $water34Tupolang173 + $water34Tupolang133;//water
        $ges34TupolangAggregateTrue = ($ges34Tupolang293[2] > 0 ? 1 : 0) +
            ($ges34Tupolang253[2] > 0 ? 1 : 0) +
            ($ges34Tupolang173[2] > 0 ? 1 : 0) +
            ($ges34Tupolang133[2] > 0 ? 1 : 0);
        $ges34TupolangAggregateFalse = ($ges34Tupolang293[2] <= 0 ? 1 : 0) +
            ($ges34Tupolang253[2] <= 0 ? 1 : 0) +
            ($ges34Tupolang173[2] <= 0 ? 1 : 0) +
            ($ges34Tupolang133[2] <= 0 ? 1 : 0);
        //****************
        $water43 = Water::find()->where(['id_organization' => 72])->orderBy(['date' => SORT_DESC])->one();
        $upBef43 = $water43 ? $water43['up_bef'] : 0;
        $downBef43 = $water43 ? $water43['down_bef'] : 0;
        $pressure43 = $upBef43 - $downBef43;
        $set43Tupolang868 = $ges43Tupolang868[2] * 550000 / $CONST;
        $set43Tupolang867 = $ges43Tupolang867[2] * 550000 / $CONST;
        $set43Tupolang890 = $ges43Tupolang890[2] * 550000 / $CONST;
        $set43Tupolang891 = $ges43Tupolang891[2] * 550000 / $CONST;

        $set43Tupolang821 = $ges43Tupolang821[2] * 1050 / $kvt;
        $set43Tupolang775 = $ges43Tupolang775[2] * 1050 / $kvt;
        $set43Tupolang844 = $ges43Tupolang844[2] * 1050 / $kvt;
        $set43Tupolang798 = $ges43Tupolang798[2] * 1050 / $kvt;

        $power43Tupolang729 = $ges43Tupolang729[2] * 31500 / $CONST;//active
        $reactive43Tupolang731 = $ges43Tupolang731[2] * 31500 / $CONST;//reactive
        $water43Tupolang729 = $energy->getWater($power43Tupolang729, $pressure43, 0.95, 0.931);//water

        $power43Tupolang752 = $ges43Tupolang752[2] * 31500 / $CONST;//active
        $reactive43Tupolang754 = $ges43Tupolang754[2] * 31500 / $CONST;//reactive
        $water43Tupolang752 = $energy->getWater($power43Tupolang752, $pressure43, 0.95, 0.931);//water

        $ges43TupolangActive = $power43Tupolang729 + $power43Tupolang752;//active
        $ges43TupolangReactive = $reactive43Tupolang731 + $reactive43Tupolang754;//reactive
        $ges43TupolangActiveOut = $set43Tupolang867 + $set43Tupolang890;
        $ges43TupolangActiveIn = $set43Tupolang868 + $set43Tupolang891;
        $ges43TupolangOwnNeeds = $set43Tupolang821 + $set43Tupolang775 + $set43Tupolang844 + $set43Tupolang798;
        $ges43TupolangWater = $water43Tupolang729 + $water43Tupolang752;//water
        $ges43TupolangAggregateTrue = ($ges43Tupolang729[2] > 0 ? 1 : 0) +
            ($ges43Tupolang752[2] > 0 ? 1 : 0);
        $ges43TupolangAggregateFalse = ($ges43Tupolang729[2] <= 0 ? 1 : 0) +
            ($ges43Tupolang752[2] <= 0 ? 1 : 0);
        //**************
        $water44 = Water::find()->where(['id_organization' => 73])->orderBy(['date' => SORT_DESC])->one();
        $upBef44 = $water44 ? $water44['up_bef'] : 0;
        $downBef44 = $water44 ? $water44['down_bef'] : 0;
        $pressure44 = $upBef44 - $downBef44;
        $set44Tupolang1051 = $ges44Tupolang1051[2] * 275000 / $CONST;
        $set44Tupolang1052 = $ges44Tupolang1052[2] * 275000 / $CONST;
        $set44Tupolang1074 = $ges44Tupolang1074[2] * 275000 / $CONST;
        $set44Tupolang1075 = $ges44Tupolang1075[2] * 275000 / $CONST;

        $set44Tupolang1005 = $ges44Tupolang1005[2] * 1050 / $kvt;
        $set44Tupolang1028 = $ges44Tupolang1028[2] * 1050 / $kvt;

        $power44Tupolang959 = $ges44Tupolang959[2] * 31500 / $CONST;//active
        $reactive44Tupolang961 = $ges44Tupolang961[2] * 31500 / $CONST;//reactive
        $water44Tupolang959 = $energy->getWater($power44Tupolang959, $pressure44, 0.95, 0.922);//water

        $power44Tupolang982 = $ges44Tupolang982[2] * 31500 / $CONST;//active
        $reactive44Tupolang984 = $ges44Tupolang984[2] * 31500 / $CONST;//reactive
        $water44Tupolang982 = $energy->getWater($power44Tupolang982, $pressure44, 0.95, 0.922);//water

        $ges44TupolangActive = $power44Tupolang959 + $power44Tupolang982;//active
        $ges44TupolangReactive = $reactive44Tupolang961 + $reactive44Tupolang984;//reactive
        $ges44TupolangActiveOut = $set44Tupolang1051 + $set44Tupolang1074;
        $ges44TupolangActiveIn = $set44Tupolang1052 + $set44Tupolang1075;
        $ges44TupolangOwnNeeds = $set44Tupolang1005 + $set44Tupolang1028;
        $ges44TupolangWater = $water44Tupolang959 + $water44Tupolang982;//water
        $ges44TupolangAggregateTrue = ($ges44Tupolang959[2] > 0 ? 1 : 0) +
            ($ges44Tupolang982[2] > 0 ? 1 : 0);
        $ges44TupolangAggregateFalse = ($ges44Tupolang959[2] <= 0 ? 1 : 0) +
            ($ges44Tupolang982[2] <= 0 ? 1 : 0);

        $active = $ges34TupolangActive + $ges43TupolangActive + $ges44TupolangActive;
        $reactive = $ges34TupolangReactive + $ges43TupolangReactive + $ges44TupolangReactive;
        $activeOut = $ges34TupolangActiveOut + $ges43TupolangActiveOut + $ges44TupolangActiveOut;
        $activeIn = $ges34TupolangActiveIn + $ges43TupolangActiveIn + $ges44TupolangActiveIn;
        $ownNeeds = $ges34TupolangOwnNeeds + $ges43TupolangOwnNeeds + $ges44TupolangOwnNeeds;
        $water = $ges34TupolangWater + $ges43TupolangWater + $ges44TupolangWater;
        $true = $ges34TupolangAggregateTrue + $ges43TupolangAggregateTrue + $ges44TupolangAggregateTrue;
        $false = $ges34TupolangAggregateFalse + $ges43TupolangAggregateFalse + $ges44TupolangAggregateFalse;
        $error = 0;

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

            array("id" => 10, "value" => $ges34TupolangActive),
            array("id" => 12, "value" => $ges34TupolangAggregateTrue),
            array("id" => 13, "value" => $ges34TupolangAggregateFalse),

            array("id" => 14, "value" => $ges43TupolangActive),
            array("id" => 15, "value" => $ges43TupolangAggregateTrue),
            array("id" => 16, "value" => $ges43TupolangAggregateFalse),

            array("id" => 17, "value" => $ges44TupolangActive),
            array("id" => 18, "value" => $ges44TupolangAggregateTrue),
            array("id" => 19, "value" => $ges44TupolangAggregateFalse),
        );

        echo json_encode($data);
    }
}
