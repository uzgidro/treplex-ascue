<?php

namespace frontend\controllers;

use common\models\Water;

class QamchiqController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes42()
    {
        return $this->render('ges42');
    }

    protected string $url = "http://user:kase_10w@192.168.40.215:10150/crq?req=current";

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
    public function actionServer42()
    {
        $CONST = 1000000;
        $kvt = 1000;

        $water = Water::find()->where(['id_organization' => 78])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();

        $ges42Qamchiq363 = $this->getValue($data, "G363");
        $ges42Qamchiq390 = $this->getValue($data, "G390");
        $ges42Qamchiq12 = $this->getValue($data, "G12");
        $ges42Qamchiq39 = $this->getValue($data, "G39");
        $ges42Qamchiq15 = $this->getValue($data, "G15");
        $ges42Qamchiq42 = $this->getValue($data, "G42");
        $ges42Qamchiq66 = $this->getValue($data, "G66");
        $ges42Qamchiq93 = $this->getValue($data, "G93");
        $ges42Qamchiq120 = $this->getValue($data, "G120");
        $ges42Qamchiq147 = $this->getValue($data, "G147");
        $ges42Qamchiq123 = $this->getValue($data, "G123");
        $ges42Qamchiq96 = $this->getValue($data, "G96");
        $ges42Qamchiq228 = $this->getValue($data, "G228");
        $ges42Qamchiq336 = $this->getValue($data, "G336");
        $ges42Qamchiq309 = $this->getValue($data, "G309");
        $ges42Qamchiq417 = $this->getValue($data, "G417");
        $ges42Qamchiq174 = $this->getValue($data, "G174");
        $ges42Qamchiq175 = $this->getValue($data, "G175");
        $ges42Qamchiq201 = $this->getValue($data, "G201");
        $ges42Qamchiq202 = $this->getValue($data, "G202");
        $ges42Qamchiq255 = $this->getValue($data, "G255");
        $ges42Qamchiq256 = $this->getValue($data, "G256");
        $ges42Qamchiq282 = $this->getValue($data, "G282");
        $ges42Qamchiq283 = $this->getValue($data, "G283");
        $ges42Qamchiq353 = $this->getValue($data, "G353");
        $ges42Qamchiq380 = $this->getValue($data, "G380");

        $set42Qamchiq390 = $ges42Qamchiq390[2] * 56000 / $CONST;
        $set42Qamchiq363 = $ges42Qamchiq363[2] * 56000 / $CONST;

        $set42Qamchiq228 = $ges42Qamchiq228[2] * 1050 / $kvt;
        $set42Qamchiq309 = $ges42Qamchiq309[2] * 150 / $kvt;
        $set42Qamchiq336 = $ges42Qamchiq336[2] * 150 / $kvt;
        $set42Qamchiq417 = $ges42Qamchiq417[2] * 1 / $kvt;

        $power42Qamchiq174 = $ges42Qamchiq174[2] * 21000 / $CONST;//active
        $reactive42Qamchiq175 = $ges42Qamchiq175[2] * 21000 / $CONST;//reactive
        $water42Qamchiq174 = $energy->getWater($power42Qamchiq174, $pressure, 0.95, 0.944);//water
        $kpd42Qamchiq174 = $energy->getKpd($power42Qamchiq174, $water42Qamchiq174, $pressure, 0.9735);//kpd

        $power42Qamchiq201 = $ges42Qamchiq201[2] * 5250 / $CONST;//active
        $reactive42Qamchiq202 = $ges42Qamchiq202[2] * 5250 / $CONST;//reactive
        $water42Qamchiq201 = $energy->getWater($power42Qamchiq201, $pressure, 0.95, 0.944);//water
        $kpd42Qamchiq201 = $energy->getKpd($power42Qamchiq201, $water42Qamchiq201, $pressure, 0.95);//kpd

        $power42Qamchiq255 = $ges42Qamchiq255[2] * 5250 / $CONST;//active
        $reactive42Qamchiq256 = $ges42Qamchiq256[2] * 5250 / $CONST;//reactive
        $water42Qamchiq255 = $energy->getWater($power42Qamchiq255, $pressure, 0.95, 0.917);//water
        $kpd42Qamchiq255 = $energy->getKpd($power42Qamchiq255, $water42Qamchiq255, $pressure, 0.95);//kpd

        $power42Qamchiq282 = $ges42Qamchiq282[2] * 21000 / $CONST;//active
        $reactive42Qamchiq283 = $ges42Qamchiq283[2] * 21000 / $CONST;//reactive
        $water42Qamchiq282 = $energy->getWater($power42Qamchiq282, $pressure, 0.95, 0.917);//water
        $kpd42Qamchiq282 = $energy->getKpd($power42Qamchiq282, $water42Qamchiq282, $pressure, 0.95);//kpd

        $data = array(
            array("id" => 390, "value" => $set42Qamchiq390),
            array("id" => 363, "value" => $set42Qamchiq363),

            array("id" => 228, "value" => $set42Qamchiq228),
            array("id" => 309, "value" => $set42Qamchiq309),
            array("id" => 336, "value" => $set42Qamchiq336),
            array("id" => 417, "value" => $set42Qamchiq417),

            array("id" => 12, "value" => $ges42Qamchiq12[2] * 28000 / $CONST),
            array("id" => 39, "value" => $ges42Qamchiq39[2] * 28000 / $CONST),
            array("id" => 66, "value" => $ges42Qamchiq66[2] * 21000 / $CONST),
            array("id" => 93, "value" => $ges42Qamchiq93[2] * 7000 / $CONST),
            array("id" => 120, "value" => $ges42Qamchiq120[2] * 7000 / $CONST),
            array("id" => 147, "value" => $ges42Qamchiq147[2] * 21000 / $CONST),

            array("id" => 15, "value" => $energy->getVoltages($ges42Qamchiq15[2], 350)),
            array("id" => 42, "value" => $energy->getVoltages($ges42Qamchiq42[2], 350)),
            array("id" => 96, "value" => $ges42Qamchiq96[2] > 0 ? $energy->getVoltages($ges42Qamchiq96[2], 350) : $energy->getVoltages($ges42Qamchiq123[2], 350)),

            array("id" => 174, "value" => $power42Qamchiq174),//active
            array("id" => 175, "value" => $reactive42Qamchiq175),//reactive
            array("id" => 176, "value" => $kpd42Qamchiq174),//КПД
            array("id" => 177, "value" => 0),//HA
            array("id" => 178, "value" => $water42Qamchiq174),//water

            array("id" => 201, "value" => $power42Qamchiq201),//active
            array("id" => 202, "value" => $reactive42Qamchiq202),//reactive
            array("id" => 203, "value" => $kpd42Qamchiq201),//КПД
            array("id" => 204, "value" => 0),//HA
            array("id" => 205, "value" => $water42Qamchiq201),//water

            array("id" => 255, "value" => $power42Qamchiq255),//active
            array("id" => 256, "value" => $reactive42Qamchiq256),//reactive
            array("id" => 257, "value" => $kpd42Qamchiq255),//КПД
            array("id" => 258, "value" => 0),//HA
            array("id" => 259, "value" => $water42Qamchiq255),//water

            array("id" => 282, "value" => $power42Qamchiq282),//active
            array("id" => 283, "value" => $reactive42Qamchiq283),//reactive
            array("id" => 284, "value" => $kpd42Qamchiq282),//КПД
            array("id" => 285, "value" => 0),//HA
            array("id" => 286, "value" => $water42Qamchiq282),//water

            array("id" => 1, "value" => $power42Qamchiq174 + $power42Qamchiq201 + $power42Qamchiq255 + $power42Qamchiq282),
            array("id" => 2, "value" => $reactive42Qamchiq175 + $reactive42Qamchiq202 + $reactive42Qamchiq256 + $reactive42Qamchiq283),
            array("id" => 3, "value" => ($set42Qamchiq390 > 0 ? $set42Qamchiq390 : 0) + ($set42Qamchiq363 > 0 ? $set42Qamchiq363 : 0)),
            array("id" => 4, "value" => ($set42Qamchiq390 < 0 ? $set42Qamchiq390 : 0) + ($set42Qamchiq363 < 0 ? $set42Qamchiq363 : 0)),
            array("id" => 5, "value" => $set42Qamchiq228 + $set42Qamchiq309 + $set42Qamchiq336 + $set42Qamchiq417),
            array("id" => 6, "value" => $water42Qamchiq174 + $water42Qamchiq201 + $water42Qamchiq255 + $water42Qamchiq282),
            array("id" => 7, "value" => $ges42Qamchiq353[2] > 0 ? $ges42Qamchiq353[2] : $ges42Qamchiq380[2]),
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

        $water = Water::find()->where(['id_organization' => 78])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();

        $ges42Qamchiq363 = $this->getValue($data, "G363");
        $ges42Qamchiq390 = $this->getValue($data, "G390");
        $ges42Qamchiq12 = $this->getValue($data, "G12");
        $ges42Qamchiq39 = $this->getValue($data, "G39");
        $ges42Qamchiq15 = $this->getValue($data, "G15");
        $ges42Qamchiq42 = $this->getValue($data, "G42");
        $ges42Qamchiq66 = $this->getValue($data, "G66");
        $ges42Qamchiq93 = $this->getValue($data, "G93");
        $ges42Qamchiq120 = $this->getValue($data, "G120");
        $ges42Qamchiq147 = $this->getValue($data, "G147");
        $ges42Qamchiq123 = $this->getValue($data, "G123");
        $ges42Qamchiq96 = $this->getValue($data, "G96");
        $ges42Qamchiq228 = $this->getValue($data, "G228");
        $ges42Qamchiq336 = $this->getValue($data, "G336");
        $ges42Qamchiq309 = $this->getValue($data, "G309");
        $ges42Qamchiq417 = $this->getValue($data, "G417");
        $ges42Qamchiq174 = $this->getValue($data, "G174");
        $ges42Qamchiq175 = $this->getValue($data, "G175");
        $ges42Qamchiq201 = $this->getValue($data, "G201");
        $ges42Qamchiq202 = $this->getValue($data, "G202");
        $ges42Qamchiq255 = $this->getValue($data, "G255");
        $ges42Qamchiq256 = $this->getValue($data, "G256");
        $ges42Qamchiq282 = $this->getValue($data, "G282");
        $ges42Qamchiq283 = $this->getValue($data, "G283");
        $ges42Qamchiq353 = $this->getValue($data, "G353");
        $ges42Qamchiq380 = $this->getValue($data, "G380");

        $set42Qamchiq390 = $ges42Qamchiq390[2] * 56000 / $CONST;
        $set42Qamchiq363 = $ges42Qamchiq363[2] * 56000 / $CONST;

        $set42Qamchiq228 = $ges42Qamchiq228[2] * 1050 / $kvt;
        $set42Qamchiq309 = $ges42Qamchiq309[2] * 150 / $kvt;
        $set42Qamchiq336 = $ges42Qamchiq336[2] * 150 / $kvt;
        $set42Qamchiq417 = $ges42Qamchiq417[2] * 1 / $kvt;

        $power42Qamchiq174 = $ges42Qamchiq174[2] * 21000 / $CONST;//active
        $reactive42Qamchiq175 = $ges42Qamchiq175[2] * 21000 / $CONST;//reactive
        $water42Qamchiq174 = $energy->getWater($power42Qamchiq174, $pressure, 0.95, 0.944);//water

        $power42Qamchiq201 = $ges42Qamchiq201[2] * 5250 / $CONST;//active
        $reactive42Qamchiq202 = $ges42Qamchiq202[2] * 5250 / $CONST;//reactive
        $water42Qamchiq201 = $energy->getWater($power42Qamchiq201, $pressure, 0.95, 0.944);//water

        $power42Qamchiq255 = $ges42Qamchiq255[2] * 5250 / $CONST;//active
        $reactive42Qamchiq256 = $ges42Qamchiq256[2] * 5250 / $CONST;//reactive
        $water42Qamchiq255 = $energy->getWater($power42Qamchiq255, $pressure, 0.95, 0.917);//water

        $power42Qamchiq282 = $ges42Qamchiq282[2] * 21000 / $CONST;//active
        $reactive42Qamchiq283 = $ges42Qamchiq283[2] * 21000 / $CONST;//reactive
        $water42Qamchiq282 = $energy->getWater($power42Qamchiq282, $pressure, 0.95, 0.917);//water

        $ges42QamchiqActive = $power42Qamchiq174 + $power42Qamchiq201 + $power42Qamchiq255 + $power42Qamchiq282;
        $ges42QamchiqReactive = $reactive42Qamchiq175 + $reactive42Qamchiq202 + $reactive42Qamchiq256 + $reactive42Qamchiq283;
        $ges42QamchiqActiveOut = ($set42Qamchiq390 > 0 ? $set42Qamchiq390 : 0) + ($set42Qamchiq363 > 0 ? $set42Qamchiq363 : 0);
        $ges42QamchiqActiveIn = ($set42Qamchiq390 < 0 ? $set42Qamchiq390 : 0) + ($set42Qamchiq363 < 0 ? $set42Qamchiq363 : 0);
        $ges42QamchiqOwnNeeds = $set42Qamchiq228 + $set42Qamchiq309 + $set42Qamchiq336 + $set42Qamchiq417;
        $ges42QamchiqWater = $water42Qamchiq174 + $water42Qamchiq201 + $water42Qamchiq255 + $water42Qamchiq282;
        $ges42QamchiqAggregateTrue = ($ges42Qamchiq174[2] > 0 ? 1 : 0) + ($ges42Qamchiq201[2] > 0 ? 1 : 0) + ($ges42Qamchiq255[2] > 0 ? 1 : 0) + ($ges42Qamchiq282[2] > 0 ? 1 : 0);
        $ges42QamchiqAggregateError = 0;
        $ges42QamchiqAggregateFalse = ($ges42Qamchiq174[2] <= 0 ? 1 : 0) + ($ges42Qamchiq201[2] <= 0 ? 1 : 0) + ($ges42Qamchiq255[2] <= 0 ? 1 : 0) + ($ges42Qamchiq282[2] <= 0 ? 1 : 0) - $ges42QamchiqAggregateError;

        $active = $ges42QamchiqActive;
        $reactive = $ges42QamchiqReactive;
        $activeOut = $ges42QamchiqActiveOut;
        $activeIn = $ges42QamchiqActiveIn;
        $ownNeeds = $ges42QamchiqOwnNeeds;
        $water = $ges42QamchiqWater;
        $true = $ges42QamchiqAggregateTrue;
        $error = $ges42QamchiqAggregateError;
        $false = $ges42QamchiqAggregateFalse;

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

            array("id" => 10, "value" => $ges42QamchiqActive),
            array("id" => 11, "value" => $ges42QamchiqAggregateTrue),
            array("id" => 12, "value" => $ges42QamchiqAggregateFalse),
            array("id" => 13, "value" => $ges42QamchiqAggregateError),
        );

        echo json_encode($data);
    }
}
