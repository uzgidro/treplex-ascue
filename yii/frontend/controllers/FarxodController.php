<?php

namespace frontend\controllers;

use common\models\Water;

class FarxodController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes16()
    {
        return $this->render('ges16');
    }

    public function actionZomin()
    {
        return $this->render('zomin');
    }

    protected string $url = "http://user:ah_Rtnmi@192.168.40.215:10182/crq?req=current";

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

    //ГЭС-16
    public function actionServer16()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $water = Water::find()->where(['id_organization' => 7])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges16Farxod97 = $this->getValue($data, "G97");
        $ges16Farxod96 = $this->getValue($data, "G96");
        $ges16Farxod102 = $this->getValue($data, "G102");
        $ges16Farxod103 = $this->getValue($data, "G103");
        $ges16Farxod84 = $this->getValue($data, "G84");
        $ges16Farxod85 = $this->getValue($data, "G85");
        $ges16Farxod90 = $this->getValue($data, "G90");
        $ges16Farxod91 = $this->getValue($data, "G91");
        $ges16Farxod66 = $this->getValue($data, "G66");
        $ges16Farxod67 = $this->getValue($data, "G67");
        $ges16Farxod72 = $this->getValue($data, "G72");
        $ges16Farxod73 = $this->getValue($data, "G73");
        $ges16Farxod156 = $this->getValue($data, "G156");
        $ges16Farxod157 = $this->getValue($data, "G157");
        $ges16Farxod150 = $this->getValue($data, "G150");
        $ges16Farxod151 = $this->getValue($data, "G151");
        $ges16Farxod144 = $this->getValue($data, "G144");
        $ges16Farxod145 = $this->getValue($data, "G145");
        $ges16Farxod138 = $this->getValue($data, "G138");
        $ges16Farxod139 = $this->getValue($data, "G139");
        $ges16Farxod132 = $this->getValue($data, "G132");
        $ges16Farxod133 = $this->getValue($data, "G133");
        $ges16Farxod79 = $this->getValue($data, "G79");
        $ges16Farxod78 = $this->getValue($data, "G78");
        $ges16Farxod48 = $this->getValue($data, "G48");
        $ges16Farxod49 = $this->getValue($data, "G49");
        $ges16Farxod120 = $this->getValue($data, "G120");
        $ges16Farxod121 = $this->getValue($data, "G121");
        $ges16Farxod108 = $this->getValue($data, "G108");
        $ges16Farxod109 = $this->getValue($data, "G109");
        $ges16Farxod114 = $this->getValue($data, "G114");
        $ges16Farxod115 = $this->getValue($data, "G115");
        $ges16Farxod126 = $this->getValue($data, "G126");
        $ges16Farxod127 = $this->getValue($data, "G127");
        $ges16Farxod163 = $this->getValue($data, "G163");
        $ges16Farxod162 = $this->getValue($data, "G162");
        $ges16Farxod204 = $this->getValue($data, "G204");
        $ges16Farxod205 = $this->getValue($data, "G205");
        $ges16Farxod10 = $this->getValue($data, "G10");
        $ges16Farxod12 = $this->getValue($data, "G12");
        $ges16Farxod23 = $this->getValue($data, "G23");
        $ges16Farxod21 = $this->getValue($data, "G21");
        $ges16Farxod32 = $this->getValue($data, "G32");
        $ges16Farxod34 = $this->getValue($data, "G34");
        $ges16Farxod43 = $this->getValue($data, "G43");
        $ges16Farxod45 = $this->getValue($data, "G45");
        $ges16Farxod168 = $this->getValue($data, "G168");
        $ges16Farxod198 = $this->getValue($data, "G198");
        $ges16Farxod82 = $this->getValue($data, "G82");
        $ges16Farxod100 = $this->getValue($data, "G100");
        $ges16Farxod124 = $this->getValue($data, "G124");
        $ges16Farxod148 = $this->getValue($data, "G148");
        $ges16Farxod76 = $this->getValue($data, "G76");
        $ges16Farxod94 = $this->getValue($data, "G94");
        $ges16Farxod118 = $this->getValue($data, "G118");
        $ges16Farxod142 = $this->getValue($data, "G142");
        $ges16Farxod88 = $this->getValue($data, "G88");
        $ges16Farxod154 = $this->getValue($data, "G154");
        $ges16Farxod2 = $this->getValue($data, "G2");
        $ges16Farxod13 = $this->getValue($data, "G13");
        $ges16Farxod24 = $this->getValue($data, "G24");
        $ges16Farxod35 = $this->getValue($data, "G35");

        $set16Farxod66 = $ges16Farxod66[2] * 660000 / $CONST;//
        $set16Farxod67 = $ges16Farxod67[2] * 660000 / $CONST;//
        $set16Farxod72 = $ges16Farxod72[2] * 660000 / $CONST;//
        $set16Farxod73 = $ges16Farxod73[2] * 660000 / $CONST;//
        $set16Farxod84 = $ges16Farxod84[2] * 660000 / $CONST;//
        $set16Farxod85 = $ges16Farxod85[2] * 660000 / $CONST;//
        $set16Farxod90 = $ges16Farxod90[2] * 660000 / $CONST;//
        $set16Farxod91 = $ges16Farxod91[2] * 660000 / $CONST;//
        $set16Farxod96 = $ges16Farxod96[2] * 660000 / $CONST;//
        $set16Farxod97 = $ges16Farxod97[2] * 660000 / $CONST;//
        $set16Farxod102 = $ges16Farxod102[2] * 660000 / $CONST;//
        $set16Farxod103 = $ges16Farxod103[2] * 660000 / $CONST;//
        $set16Farxod132 = $ges16Farxod132[2] * 56000 / $CONST;//
        $set16Farxod133 = $ges16Farxod133[2] * 56000 / $CONST;//
        $set16Farxod138 = $ges16Farxod138[2] * 56000 / $CONST;//
        $set16Farxod139 = $ges16Farxod139[2] * 56000 / $CONST;//
        $set16Farxod144 = $ges16Farxod144[2] * 56000 / $CONST;//
        $set16Farxod145 = $ges16Farxod145[2] * 56000 / $CONST;//
        $set16Farxod150 = $ges16Farxod150[2] * 56000 / $CONST;//
        $set16Farxod151 = $ges16Farxod151[2] * 56000 / $CONST;//
        $set16Farxod156 = $ges16Farxod156[2] * 56000 / $CONST;//
        $set16Farxod157 = $ges16Farxod157[2] * 56000 / $CONST;//

        $set16Farxod168 = $ges16Farxod168[2] * 4000 / $kvt;//
        $set16Farxod198 = $ges16Farxod198[2] * 4000 / $kvt;//

        $power16Farxod10 = $ges16Farxod10[2] * 50000 / $CONST;//active
        $reactive16Farxod12 = $ges16Farxod12[2] * 50000 / $CONST;//reactive
        $water16Farxod10 = $energy->getWater($power16Farxod10, $pressure, 0.978, 0.95);//water
        $kpd16Farxod10 = $energy->getKpd($power16Farxod10, $water16Farxod10, $pressure, 0.9784);//kpd

        $power16Farxod21 = $ges16Farxod21[2] * 50000 / $CONST;//active
        $reactive16Farxod23 = $ges16Farxod23[2] * 50000 / $CONST;//reactive
        $water16Farxod21 = $energy->getWater($power16Farxod21, $pressure, 0.978, 0.95);//water
        $kpd16Farxod21 = $energy->getKpd($power16Farxod21, $water16Farxod21, $pressure, 0.9784);//kpd

        $power16Farxod32 = $ges16Farxod32[2] * 50000 / $CONST;//active
        $reactive16Farxod34 = $ges16Farxod34[2] * 50000 / $CONST;//reactive
        $water16Farxod32 = $energy->getWater($power16Farxod32, $pressure, 0.959654, 0.963);//water
        $kpd16Farxod32 = $energy->getKpd($power16Farxod32, $water16Farxod32, $pressure, 0.98);//kpd

        $power16Farxod43 = $ges16Farxod43[2] * 50000 / $CONST;//active
        $reactive16Farxod45 = $ges16Farxod45[2] * 50000 / $CONST;//reactive
        $water16Farxod43 = $energy->getWater($power16Farxod43, $pressure, 0.959654, 0.963);//water
        $kpd16Farxod43 = $energy->getKpd($power16Farxod43, $water16Farxod43, $pressure, 0.98);//kpd

        $data = array(
            array("id" => 1, "value" => $power16Farxod10 + $power16Farxod21 + $power16Farxod32 + $power16Farxod43),
            array("id" => 2, "value" => $reactive16Farxod12 + $reactive16Farxod23 + $reactive16Farxod34 + $reactive16Farxod45),
            array("id" => 3, "value" => $set16Farxod67 + $set16Farxod73 + $set16Farxod85 + $set16Farxod91 + $set16Farxod97 + $set16Farxod103 + $set16Farxod133 + $set16Farxod139 + $set16Farxod145 + $set16Farxod151 + $set16Farxod157),
            array("id" => 4, "value" => $set16Farxod66 + $set16Farxod72 + $set16Farxod84 + $set16Farxod90 + $set16Farxod96 + $set16Farxod102 + $set16Farxod132 + $set16Farxod138 + $set16Farxod144 + $set16Farxod150 + $set16Farxod156),
            array("id" => 5, "value" => $set16Farxod168 + $set16Farxod198),
            array("id" => 6, "value" => $water16Farxod10 + $water16Farxod21 +  $water16Farxod32 + $water16Farxod43),

            array("id" => 11, "value" => ($ges16Farxod10[2] != 0 ? 1 : 0) + ($ges16Farxod21[2] != 0 ? 1 : 0) + ($ges16Farxod32[2] != 0 ? 1 : 0) + ($ges16Farxod43[2] != 0 ? 1 : 0)),
            array("id" => 13, "value" => ($ges16Farxod10[2] == 0 ? 1 : 0) + ($ges16Farxod21[2] == 0 ? 1 : 0) + ($ges16Farxod32[2] == 0 ? 1 : 0) + ($ges16Farxod43[2] == 0 ? 1 : 0)),
            array("id" => 12, "value" => 0),

            array("id" => 7, "value" => $ges16Farxod2[2] > 0 ? $ges16Farxod2[2] :
                ($ges16Farxod13[2] > 0 ? $ges16Farxod13[2] :
                    ($ges16Farxod24[2] > 0 ? $ges16Farxod24[2] : $ges16Farxod35[2]))),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),

            array("id" => 78, "value" => $ges16Farxod78[2] * 330000 / $CONST),
            array("id" => 79, "value" => $ges16Farxod79[2] * 330000 / $CONST),
            array("id" => 48, "value" => $ges16Farxod48[2] * 330000 / $CONST),
            array("id" => 49, "value" => $ges16Farxod49[2] * 330000 / $CONST),
            array("id" => 120, "value" => $ges16Farxod120[2] * 330000 / $CONST),
            array("id" => 121, "value" => $ges16Farxod121[2] * 330000 / $CONST),
            array("id" => 109, "value" => $ges16Farxod109[2] * 660000 / $CONST),
            array("id" => 108, "value" => $ges16Farxod108[2] * 660000 / $CONST),
            array("id" => 114, "value" => $ges16Farxod114[2] * 660000 / $CONST),
            array("id" => 115, "value" => $ges16Farxod115[2] * 660000 / $CONST),
            array("id" => 126, "value" => $ges16Farxod126[2] * 56000 / $CONST),
            array("id" => 127, "value" => $ges16Farxod127[2] * 56000 / $CONST),
            array("id" => 162, "value" => $ges16Farxod162[2] * 8000 / $CONST),
            array("id" => 163, "value" => $ges16Farxod163[2] * 8000 / $CONST),
            array("id" => 204, "value" => $ges16Farxod204[2] * 8000 / $CONST),
            array("id" => 205, "value" => $ges16Farxod205[2] * 8000 / $CONST),

            array("id" => 82, "value" => $ges16Farxod82[2] > 0 ? $energy->getVoltages( $ges16Farxod82[2], 1100) : $energy->getVoltages($ges16Farxod100[2], 1100)),
            array("id" => 76, "value" => $ges16Farxod76[2] > 0 ? $energy->getVoltages( $ges16Farxod76[2], 1100) :
                ($ges16Farxod148[2] > 0 ? $energy->getVoltages($ges16Farxod148[2],350) : $energy->getVoltages($ges16Farxod94[2],1100))),
            array("id" => 118, "value" => $ges16Farxod118[2] > 0 ? $energy->getVoltages($ges16Farxod118[2],350) :
                ($ges16Farxod88[2] > 0 ? $energy->getVoltages($ges16Farxod88[2], 1100) : ($ges16Farxod142[2] > 0 ? $energy->getVoltages($ges16Farxod142[2],350) : $energy->getVoltages($ges16Farxod154[2],350)))),
            array("id" => 124, "value" => $energy->getVoltages($ges16Farxod124[2], 350)),

            array("id" => 66, "value" => $set16Farxod66),
            array("id" => 67, "value" => $set16Farxod67),
            array("id" => 72, "value" => $set16Farxod72),
            array("id" => 73, "value" => $set16Farxod73),
            array("id" => 84, "value" => $set16Farxod84),
            array("id" => 85, "value" => $set16Farxod85),
            array("id" => 90, "value" => $set16Farxod90),
            array("id" => 91, "value" => $set16Farxod91),
            array("id" => 96, "value" => $set16Farxod96),
            array("id" => 97, "value" => $set16Farxod97),
            array("id" => 102, "value" => $set16Farxod102),
            array("id" => 103, "value" => $set16Farxod103),
            array("id" => 132, "value" => $set16Farxod132),
            array("id" => 133, "value" => $set16Farxod133),
            array("id" => 138, "value" => $set16Farxod138),
            array("id" => 139, "value" => $set16Farxod139),
            array("id" => 144, "value" => $set16Farxod144),
            array("id" => 145, "value" => $set16Farxod145),
            array("id" => 150, "value" => $set16Farxod150),
            array("id" => 151, "value" => $set16Farxod151),
            array("id" => 156, "value" => $set16Farxod156),
            array("id" => 157, "value" => $set16Farxod157),

            array("id" => 168, "value" => $set16Farxod168),
            array("id" => 198, "value" => $set16Farxod198),

            array("id" => 900, "value" => $power16Farxod10),//active
            array("id" => 901, "value" => $reactive16Farxod12),//reactive
            array("id" => 902, "value" => $kpd16Farxod10),//КПД
            array("id" => 903, "value" => 0),//HA
            array("id" => 904, "value" => $water16Farxod10),//water

            array("id" => 20, "value" => $power16Farxod21),//active
            array("id" => 22, "value" => $reactive16Farxod23),//reactive
            array("id" => 23, "value" => $kpd16Farxod21),//КПД
            array("id" => 24, "value" => 0),//HA
            array("id" => 25, "value" => $water16Farxod21),//water

            array("id" => 31, "value" => $power16Farxod32),//active
            array("id" => 33, "value" => $reactive16Farxod34),//reactive
            array("id" => 34, "value" => $kpd16Farxod32),//КПД
            array("id" => 35, "value" => 0),//HA
            array("id" => 36, "value" => $water16Farxod32),//water

            array("id" => 42, "value" => $power16Farxod43),//active
            array("id" => 44, "value" => $reactive16Farxod45),//reactive
            array("id" => 45, "value" => $kpd16Farxod43),//КПД
            array("id" => 46, "value" => 0),//HA
            array("id" => 47, "value" => $water16Farxod43),//water
        );

        echo json_encode($data);
    }

    public function actionServerZomin()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $water = Water::find()->where(['id_organization' => 48])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $gesZominFarxod315 = $this->getValue($data, "G315");
        $gesZominFarxod316 = $this->getValue($data, "G316");
        $gesZominFarxod273 = $this->getValue($data, "G273");
        $gesZominFarxod288 = $this->getValue($data, "G288");
        $gesZominFarxod239 = $this->getValue($data, "G239");
        $gesZominFarxod240 = $this->getValue($data, "G240");
        $gesZominFarxod258 = $this->getValue($data, "G258");
        $gesZominFarxod259 = $this->getValue($data, "G259");
        $gesZominFarxod238 = $this->getValue($data, "G238");
        $gesZominFarxod257 = $this->getValue($data, "G257");
        $gesZominFarxod314 = $this->getValue($data, "G314");

        $setZominFarxod315 = (float)$gesZominFarxod315[2] * 80 / $CONST;//
        $setZominFarxod316 = (float)$gesZominFarxod316[2] * 80 / $CONST;//

        $setZominFarxod273 = $gesZominFarxod273[2] * 1 / $kvt;//
        $setZominFarxod288 = $gesZominFarxod288[2] * 1 / $kvt;//

        $powerZominFarxod239 = $gesZominFarxod239[2] * 80 / $CONST;//active
        $reactiveZominFarxod240 = $gesZominFarxod240[2] * 80 / $CONST;//reactive
        $waterZominFarxod239 = $energy->getWater($powerZominFarxod239, $pressure, 0.917, 0.837);//water
        $kpdZominFarxod239 = $energy->getKpd($powerZominFarxod239, $waterZominFarxod239, $pressure, 0.9174);//kpd

        $powerZominFarxod258 = $gesZominFarxod258[2] * 80 / $CONST;//active
        $reactiveZominFarxod259 = $gesZominFarxod259[2] * 80 / $CONST;//reactive
        $waterZominFarxod258 = $energy->getWater($powerZominFarxod258, $pressure, 0.917, 0.837);//water
        $kpdZominFarxod258 = $energy->getKpd($powerZominFarxod258, $waterZominFarxod258, $pressure, 0.9174);//kpd

        $data = array(
            array("id" => 1, "value" => $powerZominFarxod239 + $powerZominFarxod258),
            array("id" => 2, "value" => $reactiveZominFarxod240 + $reactiveZominFarxod259),
            array("id" => 3, "value" => $setZominFarxod315),
            array("id" => 4, "value" => $setZominFarxod316),
            array("id" => 5, "value" => $setZominFarxod273 + $setZominFarxod288),
            array("id" => 6, "value" => $waterZominFarxod239 + $waterZominFarxod258),

            array("id" => 11, "value" => ($powerZominFarxod239 != 0 ? 1 : 0) + ($powerZominFarxod258 != 0 ? 1 : 0)),
            array("id" => 13, "value" => ($powerZominFarxod239 == 0 ? 1 : 0) + ($powerZominFarxod258 == 0 ? 1 : 0)),
            array("id" => 12, "value" => 0),

            array("id" => 7, "value" => $gesZominFarxod238[2] > 0 ? $gesZominFarxod238[2] : ($gesZominFarxod257[2] > 0 ? $gesZominFarxod257[2] : $gesZominFarxod314[2])),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),

            array("id" => 315, "value" => $setZominFarxod315),
            array("id" => 316, "value" => $setZominFarxod316),

            array("id" => 273, "value" => $setZominFarxod273),
            array("id" => 288, "value" => $setZominFarxod288),

            array("id" => 239, "value" => $powerZominFarxod239),//active
            array("id" => 240, "value" => $reactiveZominFarxod240),//reactive
            array("id" => 241, "value" => $kpdZominFarxod239),//КПД
            array("id" => 242, "value" => 0),//HA
            array("id" => 243, "value" => $waterZominFarxod239),//water

            array("id" => 258, "value" => $powerZominFarxod258),//active
            array("id" => 259, "value" => $reactiveZominFarxod259),//reactive
            array("id" => 260, "value" => $kpdZominFarxod258),//КПД
            array("id" => 261, "value" => 0),//HA
            array("id" => 262, "value" => $waterZominFarxod258),//water

            array("id" => 1, "value" => $powerZominFarxod239 + $powerZominFarxod258),
            array("id" => 2, "value" => $reactiveZominFarxod240 + $reactiveZominFarxod259),
            array("id" => 3, "value" => $setZominFarxod315),
            array("id" => 4, "value" => $setZominFarxod316),
            array("id" => 5, "value" => $setZominFarxod273 + $setZominFarxod288),
            array("id" => 6, "value" => $waterZominFarxod239 + $waterZominFarxod258),
            array("id" => 7, "value" => $gesZominFarxod238[2] > 0 ? $gesZominFarxod238[2] : ($gesZominFarxod257[2] > 0 ? $gesZominFarxod257[2] : $gesZominFarxod314[2])),
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
        $water16 = Water::find()->where(['id_organization' => 7])->orderBy(['date' => SORT_DESC])->one();
        $upBef16 = $water16 ? $water16['up_bef'] : 0;
        $downBef16 = $water16 ? $water16['down_bef'] : 0;
        $pressure16 = $upBef16 - $downBef16;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges16Farxod97 = $this->getValue($data, "G97");
        $ges16Farxod96 = $this->getValue($data, "G96");
        $ges16Farxod102 = $this->getValue($data, "G102");
        $ges16Farxod103 = $this->getValue($data, "G103");
        $ges16Farxod84 = $this->getValue($data, "G84");
        $ges16Farxod85 = $this->getValue($data, "G85");
        $ges16Farxod90 = $this->getValue($data, "G90");
        $ges16Farxod91 = $this->getValue($data, "G91");
        $ges16Farxod66 = $this->getValue($data, "G66");
        $ges16Farxod67 = $this->getValue($data, "G67");
        $ges16Farxod72 = $this->getValue($data, "G72");
        $ges16Farxod73 = $this->getValue($data, "G73");
        $ges16Farxod156 = $this->getValue($data, "G156");
        $ges16Farxod157 = $this->getValue($data, "G157");
        $ges16Farxod150 = $this->getValue($data, "G150");
        $ges16Farxod151 = $this->getValue($data, "G151");
        $ges16Farxod144 = $this->getValue($data, "G144");
        $ges16Farxod145 = $this->getValue($data, "G145");
        $ges16Farxod138 = $this->getValue($data, "G138");
        $ges16Farxod139 = $this->getValue($data, "G139");
        $ges16Farxod132 = $this->getValue($data, "G132");
        $ges16Farxod133 = $this->getValue($data, "G133");
        $ges16Farxod10 = $this->getValue($data, "G10");
        $ges16Farxod12 = $this->getValue($data, "G12");
        $ges16Farxod23 = $this->getValue($data, "G23");
        $ges16Farxod21 = $this->getValue($data, "G21");
        $ges16Farxod32 = $this->getValue($data, "G32");
        $ges16Farxod34 = $this->getValue($data, "G34");
        $ges16Farxod43 = $this->getValue($data, "G43");
        $ges16Farxod45 = $this->getValue($data, "G45");
        $ges16Farxod168 = $this->getValue($data, "G168");
        $ges16Farxod198 = $this->getValue($data, "G198");

        $set16Farxod66 = $ges16Farxod66[2] * 660000 / $CONST;//
        $set16Farxod67 = $ges16Farxod67[2] * 660000 / $CONST;//
        $set16Farxod72 = $ges16Farxod72[2] * 660000 / $CONST;//
        $set16Farxod73 = $ges16Farxod73[2] * 660000 / $CONST;//
        $set16Farxod84 = $ges16Farxod84[2] * 660000 / $CONST;//
        $set16Farxod85 = $ges16Farxod85[2] * 660000 / $CONST;//
        $set16Farxod90 = $ges16Farxod90[2] * 660000 / $CONST;//
        $set16Farxod91 = $ges16Farxod91[2] * 660000 / $CONST;//
        $set16Farxod96 = $ges16Farxod96[2] * 660000 / $CONST;//
        $set16Farxod97 = $ges16Farxod97[2] * 660000 / $CONST;//
        $set16Farxod102 = $ges16Farxod102[2] * 660000 / $CONST;//
        $set16Farxod103 = $ges16Farxod103[2] * 660000 / $CONST;//
        $set16Farxod132 = $ges16Farxod132[2] * 56000 / $CONST;//
        $set16Farxod133 = $ges16Farxod133[2] * 56000 / $CONST;//
        $set16Farxod138 = $ges16Farxod138[2] * 56000 / $CONST;//
        $set16Farxod139 = $ges16Farxod139[2] * 56000 / $CONST;//
        $set16Farxod144 = $ges16Farxod144[2] * 56000 / $CONST;//
        $set16Farxod145 = $ges16Farxod145[2] * 56000 / $CONST;//
        $set16Farxod150 = $ges16Farxod150[2] * 56000 / $CONST;//
        $set16Farxod151 = $ges16Farxod151[2] * 56000 / $CONST;//
        $set16Farxod156 = $ges16Farxod156[2] * 56000 / $CONST;//
        $set16Farxod157 = $ges16Farxod157[2] * 56000 / $CONST;//
        $set16Farxod168 = $ges16Farxod168[2] * 4000 / $kvt;//
        $set16Farxod198 = $ges16Farxod198[2] * 4000 / $kvt;//
        $power16Farxod10 = $ges16Farxod10[2] * 50000 / $CONST;//active
        $reactive16Farxod12 = $ges16Farxod12[2] * 50000 / $CONST;//reactive
        $water16Farxod10 = $energy->getWater($power16Farxod10, $pressure16, 0.978, 0.95);//water
        $power16Farxod21 = $ges16Farxod21[2] * 50000 / $CONST;//active
        $reactive16Farxod23 = $ges16Farxod23[2] * 50000 / $CONST;//reactive
        $water16Farxod21 = $energy->getWater($power16Farxod21, $pressure16, 0.978, 0.95);//water
        $power16Farxod32 = $ges16Farxod32[2] * 50000 / $CONST;//active
        $reactive16Farxod34 = $ges16Farxod34[2] * 50000 / $CONST;//reactive
        $water16Farxod32 = $energy->getWater($power16Farxod32, $pressure16, 0.959654, 0.963);//water
        $power16Farxod43 = $ges16Farxod43[2] * 50000 / $CONST;//active
        $reactive16Farxod45 = $ges16Farxod45[2] * 50000 / $CONST;//reactive
        $water16Farxod43 = $energy->getWater($power16Farxod43, $pressure16, 0.959654, 0.963);//water

        $ges16FarxodActive = $power16Farxod10 + $power16Farxod21 + $power16Farxod32 + $power16Farxod43;
        $ges16FarxodReactive = $reactive16Farxod12 + $reactive16Farxod23 + $reactive16Farxod34 + $reactive16Farxod45;
        $ges16FarxodActiveOut = $set16Farxod67 + $set16Farxod73 + $set16Farxod85 + $set16Farxod91 + $set16Farxod97 + $set16Farxod103 + $set16Farxod133 + $set16Farxod139 + $set16Farxod145 + $set16Farxod151 + $set16Farxod157;
        $ges16FarxodActiveIn = $set16Farxod66 + $set16Farxod72 + $set16Farxod84 + $set16Farxod90 + $set16Farxod96 + $set16Farxod102 + $set16Farxod132 + $set16Farxod138 + $set16Farxod144 + $set16Farxod150 + $set16Farxod156;
        $ges16FarxodOwnNeeds = $set16Farxod168 + $set16Farxod198;
        $ges16FarxodWater = $water16Farxod10 + $water16Farxod21 +  $water16Farxod32 + $water16Farxod43;
        $ges16FarxodAggregateTrue = ( $ges16Farxod10[2] > 0 ? 1 : 0) +
            ($ges16Farxod21[2] > 0 ? 1 : 0) +
            ($ges16Farxod32[2] > 0 ? 1 : 0) +
            ($ges16Farxod43[2] > 0 ? 1 : 0);
        $ges16FarxodAggregateError = 0;
        $ges16FarxodAggregateFalse = ( $ges16Farxod10[2] <= 0 ? 1 : 0) +
            ($ges16Farxod21[2] <= 0 ? 1 : 0) +
            ($ges16Farxod32[2] <= 0 ? 1 : 0) +
            ($ges16Farxod43[2] <= 0 ? 1 : 0) - $ges16FarxodAggregateError;

        $water = Water::find()->where(['id_organization' => 48])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;
        $gesZominFarxod315 = $this->getValue($data, "G315");
        $gesZominFarxod316 = $this->getValue($data, "G316");
        $gesZominFarxod273 = $this->getValue($data, "G273");
        $gesZominFarxod288 = $this->getValue($data, "G288");
        $gesZominFarxod239 = $this->getValue($data, "G239");
        $gesZominFarxod240 = $this->getValue($data, "G240");
        $gesZominFarxod258 = $this->getValue($data, "G258");
        $gesZominFarxod259 = $this->getValue($data, "G259");

        $setZominFarxod315 = (float)$gesZominFarxod315[2] * 80 / $CONST;//
        $setZominFarxod316 = (float)$gesZominFarxod316[2] * 80 / $CONST;//

        $setZominFarxod273 = $gesZominFarxod273[2] * 1 / $kvt;//
        $setZominFarxod288 = $gesZominFarxod288[2] * 1 / $kvt;//

        $powerZominFarxod239 = $gesZominFarxod239[2] * 80 / $CONST;//active
        $reactiveZominFarxod240 = $gesZominFarxod240[2] * 80 / $CONST;//reactive
        $waterZominFarxod239 = $energy->getWater($powerZominFarxod239, $pressure, 0.917, 0.837);//water

        $powerZominFarxod258 = $gesZominFarxod258[2] * 80 / $CONST;//active
        $reactiveZominFarxod259 = $gesZominFarxod259[2] * 80 / $CONST;//reactive
        $waterZominFarxod258 = $energy->getWater($powerZominFarxod258, $pressure, 0.917, 0.837);//water

        $gesZominFarxodActive = $powerZominFarxod239 + $powerZominFarxod258;
        $gesZominFarxodReactive = $reactiveZominFarxod240 + $reactiveZominFarxod259;
        $gesZominFarxodActiveOut = $setZominFarxod315;
        $gesZominFarxodActiveIn = $setZominFarxod316;
        $gesZominFarxodOwnNeeds = $setZominFarxod273 + $setZominFarxod288;
        $gesZominFarxodWater = $waterZominFarxod239 + $waterZominFarxod258;
        $gesZominFarxodAggregateTrue = ( $gesZominFarxod239[2] > 0 ? 1 : 0) +
            ($gesZominFarxod258[2] > 0 ? 1 : 0);
        $gesZominFarxodAggregateError = 0;
        $gesZominFarxodAggregateFalse = ( $gesZominFarxod239[2] <= 0 ? 1 : 0) +
            ($gesZominFarxod258[2] <= 0 ? 1 : 0) - $gesZominFarxodAggregateError;

        $active = $ges16FarxodActive + $gesZominFarxodActive;
        $reactive = $ges16FarxodReactive + $gesZominFarxodReactive;
        $activeOut = $ges16FarxodActiveOut + $gesZominFarxodActiveOut;
        $activeIn = $ges16FarxodActiveIn + $gesZominFarxodActiveIn;
        $ownNeeds = $ges16FarxodOwnNeeds + $gesZominFarxodOwnNeeds;
        $water = $ges16FarxodWater + $gesZominFarxodWater;
        $true = $ges16FarxodAggregateTrue + $gesZominFarxodAggregateTrue;
        $error = $ges16FarxodAggregateError + $gesZominFarxodAggregateError;
        $false = $ges16FarxodAggregateFalse + $gesZominFarxodAggregateFalse - $error;

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

            array("id" => 10, "value" => $ges16FarxodActive),
            array("id" => 11, "value" => $ges16FarxodAggregateTrue),
            array("id" => 12, "value" => $ges16FarxodAggregateFalse - $ges16FarxodAggregateError),
            array("id" => 13, "value" => $ges16FarxodAggregateError),

            array("id" => 14, "value" => $gesZominFarxodActive),
            array("id" => 15, "value" => $gesZominFarxodAggregateTrue),
            array("id" => 16, "value" => $gesZominFarxodAggregateFalse - $gesZominFarxodAggregateError),
            array("id" => 17, "value" => $gesZominFarxodAggregateError),

        );

        echo json_encode($data);
    }
}
