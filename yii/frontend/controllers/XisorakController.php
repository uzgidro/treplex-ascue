<?php

namespace frontend\controllers;

use common\models\Water;

class XisorakController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes37()
    {
        return $this->render('ges37');
    }

    protected string $url = "http://user:gh_us_91@192.168.40.215:10026/crq?req=current";

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

    //(ГЭС-37)
    public function actionServer37()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();

        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 77])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges37Hisorak22c = $this->getValue($data, "B22");
        $ges37Hisorak21 = $this->getValue($data, "B21");
        $ges37Hisorak26 = $this->getValue($data, "B26");
        $ges37Hisorak25 = $this->getValue($data, "B25");
        $ges37Hisorak3 = $this->getValue($data, "G3");
        $ges37Hisorak15 = $this->getValue($data, "G15");
        $ges37Hisorak35 = $this->getValue($data, "G35");
        $ges37Hisorak47 = $this->getValue($data, "G47");
        $ges37Hisorak59 = $this->getValue($data, "G59");
        $ges37Hisorak26c = $this->getValue($data, "G26");
        $ges37Hisorak38 = $this->getValue($data, "G38");
        $ges37Hisorak50 = $this->getValue($data, "G50");
        $ges37Hisorak10 = $this->getValue($data, "G10");
        $ges37Hisorak12 = $this->getValue($data, "G12");
        $ges37Hisorak22 = $this->getValue($data, "G22");
        $ges37Hisorak24 = $this->getValue($data, "G24");
        $ges37Hisorak70 = $this->getValue($data, "G70");



        $set37Hisorak34 = $ges37Hisorak35[2] * 6000 / $kvt;
        $set37Hisorak46 = $ges37Hisorak47[2] * 6000 / $kvt;
        $set37Hisorak58 = $ges37Hisorak59[2] * 6000 / $kvt;
        $set37Hisorak70 = $ges37Hisorak70[2] * 120 / $kvt;

        $power37Hisorak10 = $ges37Hisorak10[2] * 40000 / $CONST;//active
        $reactive37Hisorak12 = $ges37Hisorak12[2] * 40000 / $CONST;//reactive
        $water37Hisorak10 = $energy->getWater($power37Hisorak10, $pressure, 0.96, 0.9258);//water
        $kpd37Hisorak10 = $energy->getKpd($power37Hisorak10, $water37Hisorak10, $pressure, 0.96);//kpd

        $power37Hisorak22 = $ges37Hisorak22[2] * 40000 / $CONST;//active
        $reactive37Hisorak24 = $ges37Hisorak24[2] * 40000 / $CONST;//reactive
        $water37Hisorak22 = $energy->getWater($power37Hisorak22, $pressure, 0.96, 0.9258);//water
        $kpd37Hisorak22 = $energy->getKpd($power37Hisorak22, $water37Hisorak22, $pressure, 0.96);//kpd

        $set37Hisorak21 = $power37Hisorak10;//$ges37Hisorak21[2] * 66000 / $CONST;
        $set37Hisorak22c = ($set37Hisorak34 + $set37Hisorak46 + $set37Hisorak58) / 1000;//$ges37Hisorak22c[2] * 66000 / $CONST;
        $set37Hisorak25 = $power37Hisorak22;//$ges37Hisorak25[2] * 66000 / $CONST;
        $set37Hisorak26 = 0;//$ges37Hisorak26[2] * 66000 / $CONST;


        $data = array(
            array("id" => 70, "value" => $set37Hisorak70),
            array("id" => 210, "value" => $set37Hisorak21),
            array("id" => 220, "value" => $set37Hisorak22c),
            array("id" => 250, "value" => $set37Hisorak25),
            array("id" => 260, "value" => $set37Hisorak26),

            array("id" => 34, "value" => $set37Hisorak34),
            array("id" => 46, "value" => $set37Hisorak46),
            array("id" => 58, "value" => $set37Hisorak58),

            array("id" => 300, "value" => $energy->getVoltages($ges37Hisorak3[2], 100)),
            array("id" => 15, "value" => $energy->getVoltages($ges37Hisorak15[2], 100)),

            array("id" => 100, "value" => $power37Hisorak10),//active
            array("id" => 12, "value" => $reactive37Hisorak12),//reactive
            array("id" => 13, "value" => $kpd37Hisorak10),//КПД
            array("id" => 14, "value" => 0),//HA
            array("id" => 150, "value" => $water37Hisorak10),//water

            array("id" => 22, "value" => $power37Hisorak22),//active
            array("id" => 24, "value" => $reactive37Hisorak24),//reactive
            array("id" => 25, "value" => $kpd37Hisorak22),//КПД
            array("id" => 26, "value" => 0),//HA
            array("id" => 27, "value" => $water37Hisorak22),//water

            array("id" => 1, "value" => $power37Hisorak10 + $power37Hisorak22),
            array("id" => 2, "value" => $reactive37Hisorak12 + $reactive37Hisorak24),
            array("id" => 3, "value" => $set37Hisorak21 + $set37Hisorak25 + $set37Hisorak70 / 1000),
            array("id" => 4, "value" => $set37Hisorak22c + $set37Hisorak26 + 0.003),
            array("id" => 5, "value" => $set37Hisorak34 + $set37Hisorak46 + $set37Hisorak58),
            array("id" => 6, "value" => $water37Hisorak10 + $water37Hisorak22),
            array("id" => 7, "value" => $ges37Hisorak26c[2] > 0 ? $ges37Hisorak26c[2] : ($ges37Hisorak38[2] > 0 ? $ges37Hisorak38[2] : $ges37Hisorak50[2])),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),
        );

        echo json_encode($data);
    }

    public function actionServerSamak()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();

        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 88])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges37Hisorak22c = $this->getValue($data, "B22");
        $ges37Hisorak21 = $this->getValue($data, "B21");
        $ges37Hisorak26 = $this->getValue($data, "B26");
        $ges37Hisorak25 = $this->getValue($data, "B25");
        $ges37Hisorak3 = $this->getValue($data, "G3");
        $ges37Hisorak15 = $this->getValue($data, "G15");
        $ges37Hisorak34 = $this->getValue($data, "G34");
        $ges37Hisorak46 = $this->getValue($data, "G46");
        $ges37Hisorak58 = $this->getValue($data, "G58");
        $ges37Hisorak26c = $this->getValue($data, "G26");
        $ges37Hisorak38 = $this->getValue($data, "G38");
        $ges37Hisorak50 = $this->getValue($data, "G50");
        $ges37Hisorak10 = $this->getValue($data, "G10");
        $ges37Hisorak12 = $this->getValue($data, "G12");
        $ges37Hisorak22 = $this->getValue($data, "G22");
        $ges37Hisorak24 = $this->getValue($data, "G24");

        $set37Hisorak21 = $ges37Hisorak21[2] * 3600 / $CONST;
        $set37Hisorak22c = $ges37Hisorak22c[2] * 3600 / $CONST;
        $set37Hisorak25 = $ges37Hisorak25[2] * 3600 / $CONST;
        $set37Hisorak26 = $ges37Hisorak26[2] * 3600 / $CONST;

        $set37Hisorak34 = $ges37Hisorak34[2] * 3600 / $kvt;
        $set37Hisorak46 = $ges37Hisorak46[2] * 3600 / $kvt;
        $set37Hisorak58 = $ges37Hisorak58[2] * 3600 / $kvt;

        $power37Hisorak10 = $ges37Hisorak10[2] * 3600 / $CONST;//active
        $reactive37Hisorak12 = $ges37Hisorak12[2] * 3600 / $CONST;//reactive
        $water37Hisorak10 = $energy->getWater($power37Hisorak10, $pressure, 0.96, 0.9258);//water
        $kpd37Hisorak10 = $energy->getKpd($power37Hisorak10, $water37Hisorak10, $pressure, 0.96);//kpd

        $power37Hisorak22 = $ges37Hisorak22[2] * 3600 / $CONST;//active
        $reactive37Hisorak24 = $ges37Hisorak24[2] * 3600 / $CONST;//reactive
        $water37Hisorak22 = $energy->getWater($power37Hisorak22, $pressure, 0.96, 0.9258);//water
        $kpd37Hisorak22 = $energy->getKpd($power37Hisorak22, $water37Hisorak22, $pressure, 0.96);//kpd

        $data = array(
            array("id" => 210, "value" => $set37Hisorak21),
            array("id" => 220, "value" => $set37Hisorak22c),
            array("id" => 250, "value" => $set37Hisorak25),
            array("id" => 260, "value" => $set37Hisorak26),

            array("id" => 34, "value" => $set37Hisorak34),
            array("id" => 46, "value" => $set37Hisorak46),
            array("id" => 58, "value" => $set37Hisorak58),

            array("id" => 300, "value" => $energy->getVoltages($ges37Hisorak3[2], 1)),
            array("id" => 15, "value" => $energy->getVoltages($ges37Hisorak15[2], 1)),

            array("id" => 100, "value" => $power37Hisorak10),//active
            array("id" => 12, "value" => $reactive37Hisorak12),//reactive
            array("id" => 13, "value" => $kpd37Hisorak10),//КПД
            array("id" => 14, "value" => 0),//HA
            array("id" => 150, "value" => $water37Hisorak10),//water

            array("id" => 22, "value" => $power37Hisorak22),//active
            array("id" => 24, "value" => $reactive37Hisorak24),//reactive
            array("id" => 25, "value" => $kpd37Hisorak22),//КПД
            array("id" => 26, "value" => 0),//HA
            array("id" => 27, "value" => $water37Hisorak22),//water

            array("id" => 1, "value" => $power37Hisorak10 + $power37Hisorak22),
            array("id" => 2, "value" => $reactive37Hisorak12 + $reactive37Hisorak24),
            array("id" => 3, "value" => $set37Hisorak21 + $set37Hisorak25),
            array("id" => 4, "value" => $set37Hisorak22c + $set37Hisorak26),
            array("id" => 5, "value" => $set37Hisorak34 + $set37Hisorak46 + $set37Hisorak58),
            array("id" => 6, "value" => $water37Hisorak10 + $water37Hisorak22),
            array("id" => 7, "value" => $ges37Hisorak26c[2] > 0 ? $ges37Hisorak26c[2] : ($ges37Hisorak38[2] > 0 ? $ges37Hisorak38[2] : $ges37Hisorak50[2])),
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
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 77])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $ges37Hisorak35 = $this->getValue($data, "G35");
        $ges37Hisorak47 = $this->getValue($data, "G47");
        $ges37Hisorak59 = $this->getValue($data, "G59");
        $ges37Hisorak10 = $this->getValue($data, "G10");
        $ges37Hisorak12 = $this->getValue($data, "G12");
        $ges37Hisorak22 = $this->getValue($data, "G22");
        $ges37Hisorak24 = $this->getValue($data, "G24");
        $ges37Hisorak70 = $this->getValue($data, "G70");

        $set37Hisorak34 = $ges37Hisorak35[2] * 6000 / $kvt;
        $set37Hisorak46 = $ges37Hisorak47[2] * 6000 / $kvt;
        $set37Hisorak58 = $ges37Hisorak59[2] * 6000 / $kvt;
        $set37Hisorak70 = $ges37Hisorak70[2] * 120 / $kvt;

        $power37Hisorak10 = $ges37Hisorak10[2] * 40000 / $CONST;//active
        $reactive37Hisorak12 = $ges37Hisorak12[2] * 40000 / $CONST;//reactive
        $water37Hisorak10 = $energy->getWater($power37Hisorak10, $pressure, 0.96, 0.9258);//water
        $kpd37Hisorak10 = $energy->getKpd($power37Hisorak10, $water37Hisorak10, $pressure, 0.96);//kpd

        $power37Hisorak22 = $ges37Hisorak22[2] * 40000 / $CONST;//active
        $reactive37Hisorak24 = $ges37Hisorak24[2] * 40000 / $CONST;//reactive
        $water37Hisorak22 = $energy->getWater($power37Hisorak22, $pressure, 0.96, 0.9258);//water
        $kpd37Hisorak22 = $energy->getKpd($power37Hisorak22, $water37Hisorak22, $pressure, 0.96);//kpd

        $set37Hisorak21 = $power37Hisorak10;//$ges37Hisorak21[2] * 66000 / $CONST;
        $set37Hisorak22c = ($set37Hisorak34 + $set37Hisorak46 + $set37Hisorak58) / 1000;//$ges37Hisorak22c[2] * 66000 / $CONST;
        $set37Hisorak25 = $power37Hisorak22;//$ges37Hisorak25[2] * 66000 / $CONST;
        $set37Hisorak26 = 0;//$ges37Hisorak26[2] * 66000 / $CONST;

        $ges37HisorakActive = $power37Hisorak10 + $power37Hisorak22;
        $ges37HisorakReactive = $reactive37Hisorak12 + $reactive37Hisorak24;
        $ges37HisorakActiveOut = $set37Hisorak21 + $set37Hisorak25 + $set37Hisorak70 / 1000;
        $ges37HisorakActiveIn = $set37Hisorak22c + $set37Hisorak26 + 0.003;
        $ges37HisorakOwnNeeds = $set37Hisorak34 + $set37Hisorak46 + $set37Hisorak58;
        $ges37HisorakWater = $water37Hisorak10 + $water37Hisorak22;
        $ges37HisorakAggregateTrue = ($ges37Hisorak10[2] > 0 ? 1 : 0) + ($ges37Hisorak22[2] > 0 ? 1 : 0);
        $ges37HisorakAggregateError = 0;
        $ges37HisorakAggregateFalse = ($ges37Hisorak10[2] <= 0 ? 1 : 0) + ($ges37Hisorak22[2] <= 0 ? 1 : 0) - $ges37HisorakAggregateError;

        $active = $ges37HisorakActive;
        $reactive = $ges37HisorakReactive;
        $activeOut = $ges37HisorakActiveOut;
        $activeIn = $ges37HisorakActiveIn;
        $ownNeeds = $ges37HisorakOwnNeeds;
        $water = $ges37HisorakWater;
        $true = $ges37HisorakAggregateTrue;
        $error = $ges37HisorakAggregateError;
        $false = $ges37HisorakAggregateFalse;

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

            array("id" => 10, "value" => $ges37HisorakActive),
            array("id" => 11, "value" => $ges37HisorakAggregateTrue),
            array("id" => 12, "value" => $ges37HisorakAggregateFalse),
            array("id" => 13, "value" => $ges37HisorakAggregateError),
        );

        echo json_encode($data);
    }
}
