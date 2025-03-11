<?php

namespace frontend\controllers;

use common\models\Water;

class KfkController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes9()
    {
        return $this->render('ges9');
    }

    public function actionChortoq()
    {
        return $this->render('chortoq');
    }

    public function actionYangiariq()
    {
        return $this->render('yangiariq');
    }

    protected string $url = "http://user:kdbsu_sr@192.168.40.215:10138/crq?req=current";

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

    public function actionServer9()
    {
        $CONST = 1000000;
        $kvt = 1000;
        $energy = new Energy();
        header('Content-Type: application/json');
        $data = $this->fetchData();

        // Optimize Water query - avoid multiple queries
        $water9 = Water::find()->where(['id_organization' => 68])->orderBy(['date' => SORT_DESC])->one();
        $upBef9 = $water9 ? $water9['up_bef'] : 0;
        $downBef9 = $water9 ? $water9['down_bef'] : 0;
        $pressure9 = $upBef9 - $downBef9;

        $water8 = Water::find()->where(['id_organization' => 67])->orderBy(['date' => SORT_DESC])->one();
        $upBef8 = $water8 ? $water8['up_bef'] : 0;
        $downBef8 = $water8 ? $water8['down_bef'] : 0;
        $pressure8 = $upBef8 - $downBef8;

        $gesKfk25 = $this->getValue($data, "B25");
        $gesKfk26 = $this->getValue($data, "B26");

        $gesKfk147 = $this->getValue($data, "G147");
        $gesKfk93 = $this->getValue($data, "G93");
        $gesKfk12 = $this->getValue($data, "G12");
        $gesKfk13 = $this->getValue($data, "G13");
        $gesKfk39 = $this->getValue($data, "G39");
        $gesKfk40 = $this->getValue($data, "G40");
        $gesKfk201 = $this->getValue($data, "G201");
        $gesKfk202 = $this->getValue($data, "G202");
        $gesKfk228 = $this->getValue($data, "G228");
        $gesKfk229 = $this->getValue($data, "G229");
        $gesKfk66 = $this->getValue($data, "G66");
        $gesKfk255 = $this->getValue($data, "G255");
        $gesKfk137 = $this->getValue($data, "G137");
        $gesKfk285 = $this->getValue($data, "G285");
        $gesKfk96 = $this->getValue($data, "G96");
        $gesKfk282 = $this->getValue($data, "G282");

        $setKfk93 = $gesKfk93[2] * 10500 / $CONST;
        $setKfk25 = $gesKfk25[2] * 165000 / $CONST;
        $setKfk26 = $gesKfk26[2] * 165000 / $CONST;

        $setKfk282 = $gesKfk282[2] * 10500 / $CONST;
        $setKfk147 = $gesKfk147[2] * 33000 / $CONST;

        $setKfk255 = $gesKfk255[2] * 60 / $kvt;
        $setKfk66 = $gesKfk66[2] * 60 / $kvt;

        $powerKfk12 = $gesKfk12[2] * 6300 / $CONST;//active
        $reactiveKfk13 = $gesKfk13[2] * 6300 / $CONST;//reactive
        $waterKfk12 = $energy->getWater($powerKfk12, $pressure8, 0.94, 0.94);//water
        $kpdKfk12 = $energy->getKpd($powerKfk12, $waterKfk12, $pressure8, 0.9398);//kpd

        $powerKfk39 = $gesKfk39[2] * 6300 / $CONST;//active
        $reactiveKfk40 = $gesKfk40[2] * 6300 / $CONST;//reactive
        $waterKfk39 = $energy->getWater($powerKfk39, $pressure8, 0.94, 0.94);//water
        $kpdKfk39 = $energy->getKpd($powerKfk39, $waterKfk39, $pressure8, 0.9398);//kpd

        $powerKfk201 = $gesKfk201[2] * 6300 / $CONST;//active
        $reactiveKfk202 = $gesKfk202[2] * 6300 / $CONST;//reactive
        $waterKfk201 = $energy->getWater($powerKfk201, $pressure9, 0.94, 0.928);//water
        $kpdKfk201 = $energy->getKpd($powerKfk201, $waterKfk201, $pressure9, 0.9398);//kpd

        $powerKfk228 = $gesKfk228[2] * 6300 / $CONST;//active
        $reactiveKfk229 = $gesKfk229[2] * 6300 / $CONST;//reactive
        $waterKfk228 = $energy->getWater($powerKfk228, $pressure9, 0.94, 0.928);//water
        $kpdKfk228 = $energy->getKpd($powerKfk228, $waterKfk228, $pressure9, 0.9398);//kpd

        $data = array(
            array("id" => 93, "value" => $setKfk93),
            array("id" => 25, "value" => $setKfk25),
            array("id" => 26, "value" => $setKfk26),
            array("id" => 282, "value" => $setKfk282),
            array("id" => 147, "value" => $setKfk147),

            array("id" => 96, "value" => $energy->getVoltages($gesKfk96[2], 60)),
            array("id" => 285, "value" => $energy->getVoltages($gesKfk285[2], 60)),

            array("id" => 255, "value" => $setKfk255),
            array("id" => 66, "value" => $setKfk66),

            array("id" => 12, "value" => $powerKfk12),//active
            array("id" => 13, "value" => $reactiveKfk13),//reactive
            array("id" => 14, "value" => $kpdKfk12),//КПД
            array("id" => 15, "value" => 0),//HA
            array("id" => 16, "value" => $waterKfk12),//water

            array("id" => 39, "value" => $powerKfk39),//active
            array("id" => 40, "value" => $reactiveKfk40),//reactive
            array("id" => 41, "value" => $kpdKfk39),//КПД
            array("id" => 42, "value" => 0),//HA
            array("id" => 43, "value" => $waterKfk39),//water

            array("id" => 201, "value" => $powerKfk201),//active
            array("id" => 202, "value" => $reactiveKfk202),//reactive
            array("id" => 203, "value" => $kpdKfk201),//КПД
            array("id" => 204, "value" => 0),//HA
            array("id" => 205, "value" => $waterKfk201),//water

            array("id" => 228, "value" => $powerKfk228),//active
            array("id" => 229, "value" => $reactiveKfk229),//reactive
            array("id" => 230, "value" => $kpdKfk228),//КПД
            array("id" => 231, "value" => 0),//HA
            array("id" => 232, "value" => $waterKfk228),//water

            array("id" => 1, "value" => $powerKfk12 + $powerKfk39 + $powerKfk201 + $powerKfk228),
            array("id" => 2, "value" => $reactiveKfk13 + $reactiveKfk40 + $reactiveKfk202 + $reactiveKfk229),
            array("id" => 3, "value" => $setKfk147 > 0 ? $setKfk147 : 0),
            array("id" => 4, "value" => $setKfk147 < 0 ? $setKfk147 : 0),
            array("id" => 5, "value" => $setKfk255 + $setKfk66),
            array("id" => 6, "value" => $waterKfk12 + $waterKfk39 + $waterKfk201 + $waterKfk228),
            array("id" => 7, "value" => $gesKfk137[2]),
            array("id" => 8, "value" => $upBef8),
            array("id" => 9, "value" => $downBef8),
            array("id" => 10, "value" => $pressure8),
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
        $water9 = Water::find()->where(['id_organization' => 68])->orderBy(['date' => SORT_DESC])->one();
        $upBef9 = $water9 ? $water9['up_bef'] : 0;
        $downBef9 = $water9 ? $water9['down_bef'] : 0;
        $pressure9 = $upBef9 - $downBef9;

        $water8 = Water::find()->where(['id_organization' => 67])->orderBy(['date' => SORT_DESC])->one();
        $upBef8 = $water8 ? $water8['up_bef'] : 0;
        $downBef8 = $water8 ? $water8['down_bef'] : 0;
        $pressure8 = $upBef8 - $downBef8;

        $gesKfk174 = $this->getValue($data, "G174");
        $gesKfk12 = $this->getValue($data, "G12");
        $gesKfk13 = $this->getValue($data, "G13");
        $gesKfk39 = $this->getValue($data, "G39");
        $gesKfk40 = $this->getValue($data, "G40");
        $gesKfk201 = $this->getValue($data, "G201");
        $gesKfk202 = $this->getValue($data, "G202");
        $gesKfk228 = $this->getValue($data, "G228");
        $gesKfk229 = $this->getValue($data, "G229");
        $gesKfk66 = $this->getValue($data, "G66");
        $gesKfk255 = $this->getValue($data, "G255");

        $setKfk174 = (float)$gesKfk174[2] * 165000 / $CONST;

        $setKfk255 = $gesKfk255[2] * 60 / $kvt;
        $setKfk66 = $gesKfk66[2] * 60 / $kvt;

        $powerKfk12 = $gesKfk12[2] * 6300 / $CONST;//active
        $reactiveKfk13 = $gesKfk13[2] * 6300 / $CONST;//reactive
        $waterKfk12 = $energy->getWater($powerKfk12, $pressure8, 0.94, 0.94);//water

        $powerKfk39 = $gesKfk39[2] * 6300 / $CONST;//active
        $reactiveKfk40 = $gesKfk40[2] * 6300 / $CONST;//reactive
        $waterKfk39 = $energy->getWater($powerKfk39, $pressure8, 0.94, 0.94);//water

        $powerKfk201 = $gesKfk201[2] * 6300 / $CONST;//active
        $reactiveKfk202 = $gesKfk202[2] * 6300 / $CONST;//reactive
        $waterKfk201 = $energy->getWater($powerKfk201, $pressure9, 0.94, 0.928);//water

        $powerKfk228 = $gesKfk228[2] * 6300 / $CONST;//active
        $reactiveKfk229 = $gesKfk229[2] * 6300 / $CONST;//reactive
        $waterKfk228 = $energy->getWater($powerKfk228, $pressure9, 0.94, 0.928);//water

        $gesKfkActive = $powerKfk12 + $powerKfk39 + $powerKfk201 + $powerKfk228;
        $gesKfkReactive = $reactiveKfk13 + $reactiveKfk40 + $reactiveKfk202 + $reactiveKfk229;
        $gesKfkActiveOut = ($setKfk174 > 0 ? $setKfk174 : 0);
        $gesKfkActiveIn = ($setKfk174 < 0 ? $setKfk174 : 0);
        $gesKfkOwnNeeds = $setKfk255 + $setKfk66;
        $gesKfkWater = $waterKfk12 + $waterKfk39 + $waterKfk201 + $waterKfk228;
        $gesKfkAggregateTrue = ($gesKfk12[2] > 0 ? 1 : 0) + ($gesKfk39[2] > 0 ? 1 : 0) + ($gesKfk201[2] > 0 ? 1 : 0) + ($gesKfk228[2] > 0 ? 1 : 0);
        $gesKfkAggregateError = 0;
        $gesKfkAggregateFalse = ($gesKfk12[2] <= 0 ? 1 : 0) + ($gesKfk39[2] <= 0 ? 1 : 0) + ($gesKfk201[2] <= 0 ? 1 : 0) + ($gesKfk228[2] <= 0 ? 1 : 0) - $gesKfkAggregateError;

        $active = $gesKfkActive;
        $reactive = $gesKfkReactive;
        $activeOut = $gesKfkActiveOut;
        $activeIn = $gesKfkActiveIn;
        $ownNeeds = $gesKfkOwnNeeds;
        $water = $gesKfkWater;
        $true = $gesKfkAggregateTrue;
        $error = $gesKfkAggregateError;
        $false = $gesKfkAggregateFalse;

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

            array("id" => 10, "value" => $gesKfkActive),
            array("id" => 11, "value" => $gesKfkAggregateTrue),
            array("id" => 12, "value" => $gesKfkAggregateFalse),
            array("id" => 13, "value" => $gesKfkAggregateError),
        );

        echo json_encode($data);
    }
}
