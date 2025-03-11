<?php

namespace frontend\controllers;

use common\models\Water;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class OxangaronController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes35()
    {
        return $this->render('ges35');
    }

    public function actionErtoshsoy()
    {
        return $this->render('ertoshsoy');
    }

    protected string $url = "http://user:usr_Oh_ge@192.168.40.215:10034/crq?req=current";

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

    public function getWater() {
        $url = "http://10.151.170.10:8080/api/v1/water-level-gauges/reservoir/measurements/latest?secret_key=g3fXbUlLCV";

        try {
            $client = new Client();
            // Create and send the request with a 5-second timeout
            $request = new Request('GET', $url);
            $res = $client->sendAsync($request, ['timeout' => 5])->wait();

            // Retrieve and decode the response body
            $body = $res->getBody();
            $array = json_decode($body, true);

            // Validate JSON decoding
            if (json_last_error() === JSON_ERROR_NONE) {
                $result = $array['data']['upper'];
                if ($result[0]['virtualPressure'] > 0) {
                    $value = $result[0]['hydroPressure'];
                } else if ($result[1]['virtualPressure'] > 0) {
                    $value = $result[0]['hydroPressure'];
                } else {
                    $value = $result[2]['hydroPressure'];
                }

                return $value;
            } else {
                // Handle invalid JSON
                return 0;
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle exceptions (e.g., timeout, network errors)
            return 0;
        }
    }
    //(ГЭС-7)
    public function actionServer35()
    {
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 17])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $ges35Oxangaron693 = $this->getValue($data, "G693");
        $ges35Oxangaron670 = $this->getValue($data, "G670");
        $ges35Oxangaron493 = $this->getValue($data, "G493");
        $ges35Oxangaron494 = $this->getValue($data, "G494");
        $ges35Oxangaron533 = $this->getValue($data, "G533");
        $ges35Oxangaron534 = $this->getValue($data, "G534");
        $ges35Oxangaron672 = $this->getValue($data, "G672");
        $ges35Oxangaron695 = $this->getValue($data, "G695");
        $ges35Oxangaron333 = $this->getValue($data, "G333");
        $ges35Oxangaron572 = $this->getValue($data, "G572");
        $ges35Oxangaron13 = $this->getValue($data, "G13");
        $ges35Oxangaron53 = $this->getValue($data, "G53");
        $ges35Oxangaron55 = $this->getValue($data, "G55");
        $ges35Oxangaron373 = $this->getValue($data, "G373");
        $ges35Oxangaron293 = $this->getValue($data, "G293");
        $ges35Oxangaron295 = $this->getValue($data, "G295");
        $ges35Oxangaron453 = $this->getValue($data, "G453");
        $ges35Oxangaron455 = $this->getValue($data, "G455");

        $ges35Oxangaron323 = $this->getValue($data, "G323");
        $ges35Oxangaron283 = $this->getValue($data, "G283");
        $ges35Oxangaron3 = $this->getValue($data, "G3");
        $ges35Oxangaron43 = $this->getValue($data, "G43");
        $ges35Oxangaron692 = $this->getValue($data, "G692");
        $ges35Oxangaron669 = $this->getValue($data, "G669");

        $CONST = 1000000;
        $kvt = 1000;

        $set35Oxangaron693 = $ges35Oxangaron693[2] * 21000 / $CONST;//21000
        $set35Oxangaron670 = $ges35Oxangaron670[2] * 21000 / $CONST;//21000

        $set35Oxangaron493 = $ges35Oxangaron493[2] * 4000 / $CONST;//4000
        $set35Oxangaron494 = $ges35Oxangaron494[2] * 4000 / $CONST;//4000
        $set35Oxangaron533 = $ges35Oxangaron533[2] * 4000 / $CONST;//4000
        $set35Oxangaron534 = $ges35Oxangaron534[2] * 4000 / $CONST;//4000

        $set35Oxangaron333 = $ges35Oxangaron333[2] * 4200 / $kvt;//4200
        $set35Oxangaron13 = $ges35Oxangaron13[2] * 4200 / $kvt;//4200
        $set35Oxangaron373 = $ges35Oxangaron373[2] * 2100 / $kvt;//2100

        $power35Oxangaron293 = $ges35Oxangaron293[2] * 21000 / $CONST;//active 21000
        $reactive35Oxangaron295 = $ges35Oxangaron295[2] * 21000 / $CONST;//reactive 21000
        $water35Oxangaron293 = $energy->getWater($power35Oxangaron293, $pressure, 0.99, 0.904);//water
        $kpd35Oxangaron293 = $energy->getKpd($power35Oxangaron293, $water35Oxangaron293, $pressure, 0.97);//kpd

        $power35Oxangaron453 = $ges35Oxangaron453[2] * 4000 / $CONST;//active 4000
        $reactive35Oxangaron455 = $ges35Oxangaron455[2] * 4000 / $CONST;//reactive 4000
        $water35Oxangaron453 = $energy->getWater($power35Oxangaron453, $pressure, 0.99, 0.904);//water
        $kpd35Oxangaron453 = $energy->getKpd($power35Oxangaron453, $water35Oxangaron453, $pressure, 0.96);//kpd

        $power35Oxangaron53 = $ges35Oxangaron53[2] * 21000 / $CONST;//active 21000
        $reactive35Oxangaron55 = $ges35Oxangaron55[2] * 21000 / $CONST;//reactive 21000
        $water35Oxangaron53 = $energy->getWater($power35Oxangaron53, $pressure, 0.99, 0.904);//water
        $kpd35Oxangaron53 = $energy->getKpd($power35Oxangaron53, $water35Oxangaron53, $pressure, 0.96);//kpd

        $data = array(
            array("id" => 1, "value" => $power35Oxangaron293 + $power35Oxangaron453 + $power35Oxangaron53),
            array("id" => 2, "value" => $reactive35Oxangaron295 + $reactive35Oxangaron455 + $reactive35Oxangaron55),
            array("id" => 3, "value" =>
                (-1 * $set35Oxangaron693 > 0 ? $set35Oxangaron693 : 0) +
                (-1 * $set35Oxangaron670 > 0 ? $set35Oxangaron670 : 0)
            ),
            array("id" => 4, "value" =>
                (-1 * $set35Oxangaron693 < 0 ? $set35Oxangaron693 : 0) +
                (-1 * $set35Oxangaron670 < 0 ? $set35Oxangaron670 : 0)
            ),
            array("id" => 5, "value" => $set35Oxangaron333 + $set35Oxangaron13 + $set35Oxangaron373),
            array("id" => 6, "value" => $water35Oxangaron293 + $water35Oxangaron453 + $water35Oxangaron53),

            array("id" => 1111, "value" => ($ges35Oxangaron293[2] != 0 ? 1 : 0) + ($ges35Oxangaron453[2] != 0 ? 1 : 0) + ($ges35Oxangaron53[2] != 0 ? 1 : 0)),
            array("id" => 1113, "value" => ($ges35Oxangaron293[2] == 0 ? 1 : 0) + ($ges35Oxangaron453[2] == 0 ? 1 : 0) + ($ges35Oxangaron53[2] == 0 ? 1 : 0)),
            array("id" => 1112, "value" => 0),

            array("id" => 7, "value" => $ges35Oxangaron692[2] > 0 ? $ges35Oxangaron692[2] : $ges35Oxangaron669[2]),
            array("id" => 8, "value" => $upBef),
            array("id" => 9, "value" => $downBef),
            array("id" => 10, "value" => $pressure),

            array("id" => 693, "value" => $set35Oxangaron670),
            array("id" => 670, "value" => $set35Oxangaron693),
            array("id" => 493, "value" => $set35Oxangaron533),
            array("id" => 494, "value" => $set35Oxangaron534),
            array("id" => 533, "value" => $set35Oxangaron493),
            array("id" => 534, "value" => $set35Oxangaron494),
            array("id" => 323, "value" => $ges35Oxangaron323[2] > 0 ? $energy->getVoltages($ges35Oxangaron323[2], 105) : $energy->getVoltages($ges35Oxangaron283[2], 105)),
            array("id" => 43, "value" => $ges35Oxangaron43[2] > 0 ? $energy->getVoltages($ges35Oxangaron43[2], 105) : $energy->getVoltages($ges35Oxangaron3[2], 105)),

            array("id" => 333, "value" => $set35Oxangaron333),
            array("id" => 13, "value" => $set35Oxangaron13),
            array("id" => 373, "value" => $set35Oxangaron373),

            array("id" => 293, "value" => $power35Oxangaron293),//active
            array("id" => 295, "value" => $reactive35Oxangaron295),//reactive
            array("id" => 296, "value" => $kpd35Oxangaron293),//КПД
            array("id" => 297, "value" => 0),//HA
            array("id" => 298, "value" => $water35Oxangaron293),//water

            array("id" => 453, "value" => $power35Oxangaron453),//active
            array("id" => 455, "value" => $reactive35Oxangaron455),//reactive
            array("id" => 456, "value" => $kpd35Oxangaron453),//КПД
            array("id" => 457, "value" => 0),//HA
            array("id" => 458, "value" => $water35Oxangaron453),//water

            array("id" => 53, "value" => $power35Oxangaron53),//active
            array("id" => 55, "value" => $reactive35Oxangaron55),//reactive
            array("id" => 56, "value" => $kpd35Oxangaron53),//КПД
            array("id" => 57, "value" => 0),//HA
            array("id" => 58, "value" => $water35Oxangaron53),//water
        );

        echo json_encode($data);
    }
    //Ertosh
    public function actionServerErtosh()
    {
        // Optimize Water query - avoid multiple queries
        $water = Water::find()->where(['id_organization' => 75])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        header('Content-Type: application/json');
        $data = $this->fetchData();
        $gesErtoshOxangaron600 = $this->getValue($data, "G600");
        $gesErtoshOxangaron601 = $this->getValue($data, "G601");
        $gesErtoshOxangaron640 = $this->getValue($data, "G640");
        $gesErtoshOxangaron641 = $this->getValue($data, "G641");
        $gesErtoshOxangaron173 = $this->getValue($data, "G173");
        $gesErtoshOxangaron213 = $this->getValue($data, "G213");
        $gesErtoshOxangaron630 = $this->getValue($data, "G630");
        $gesErtoshOxangaron163 = $this->getValue($data, "G163");
        $gesErtoshOxangaron590 = $this->getValue($data, "G590");
        $gesErtoshOxangaron203 = $this->getValue($data, "G203");
        $gesErtoshOxangaron93 = $this->getValue($data, "G93");
        $gesErtoshOxangaron95 = $this->getValue($data, "G95");
        $gesErtoshOxangaron133 = $this->getValue($data, "G133");
        $gesErtoshOxangaron135 = $this->getValue($data, "G135");
        $gesErtoshOxangaron589 = $this->getValue($data, "G589");
        $gesErtoshOxangaron629 = $this->getValue($data, "G629");

        $CONST = 1000000;
        $kvt = 1000;

        $setErtoshOxangaron600 = $gesErtoshOxangaron600[2] * 1800 / $CONST;//1800
        $setErtoshOxangaron601 = $gesErtoshOxangaron601[2] * 1800 / $CONST;//1800
        $setErtoshOxangaron640 = $gesErtoshOxangaron640[2] * 1800 / $CONST;//1800
        $setErtoshOxangaron641 = $gesErtoshOxangaron641[2] * 1800 / $CONST;//1800

        $setErtoshOxangaron173 = $gesErtoshOxangaron173[2] * 100 / $kvt;//100
        $setErtoshOxangaron213 = $gesErtoshOxangaron213[2] * 100 / $kvt;//100

        $powerErtoshOxangaron93 = $gesErtoshOxangaron93[2] * 1500 / $CONST;//active 1500
        $reactiveErtoshOxangaron95 = $gesErtoshOxangaron95[2] * 1500 / $CONST;//reactive 1500
        $waterErtoshOxangaron93 = $energy->getWater($powerErtoshOxangaron93, $pressure, 0.96, 0.871);//water
        $kpdErtoshOxangaron93 = $energy->getKpd($powerErtoshOxangaron93, $waterErtoshOxangaron93, $pressure, 0.957);//kpd

        $powerErtoshOxangaron133 = $gesErtoshOxangaron133[2] * 1500 / $CONST;//active 1500
        $reactiveErtoshOxangaron135 = $gesErtoshOxangaron135[2] * 1500 / $CONST;//reactive 1500
        $waterErtoshOxangaron133 = $energy->getWater($powerErtoshOxangaron133, $pressure, 0.96, 0.871);//water
        $kpdErtoshOxangaron133 = $energy->getKpd($powerErtoshOxangaron133, $waterErtoshOxangaron133, $pressure, 0.957);//kpd

        $data = array(
            array("id" => 600, "value" => $setErtoshOxangaron600),
            array("id" => 601, "value" => $setErtoshOxangaron601),
            array("id" => 640, "value" => $setErtoshOxangaron640),
            array("id" => 641, "value" => $setErtoshOxangaron641),
            array("id" => 173, "value" => $setErtoshOxangaron173),
            array("id" => 213, "value" => $setErtoshOxangaron213),

            array("id" => 163, "value" => $energy->getVoltages($gesErtoshOxangaron163[2], 100)),
            array("id" => 203, "value" => $energy->getVoltages($gesErtoshOxangaron203[2], 100)),
            array("id" => 590, "value" => $energy->getVoltages($gesErtoshOxangaron590[2], 60)),
            array("id" => 630, "value" => $energy->getVoltages($gesErtoshOxangaron630[2], 60)),
//
            array("id" => 93, "value" => $powerErtoshOxangaron93),//active
            array("id" => 95, "value" => $reactiveErtoshOxangaron95),//reactive
            array("id" => 96, "value" => $kpdErtoshOxangaron93),//КПД
            array("id" => 97, "value" => 0),//HA
            array("id" => 98, "value" => $waterErtoshOxangaron93),//water

            array("id" => 133, "value" => $powerErtoshOxangaron133),//active
            array("id" => 135, "value" => $reactiveErtoshOxangaron135),//reactive
            array("id" => 136, "value" => $kpdErtoshOxangaron133),//КПД
            array("id" => 137, "value" => 0),//HA
            array("id" => 138, "value" => $waterErtoshOxangaron133),//water

            array("id" => 1, "value" => $powerErtoshOxangaron93 + $powerErtoshOxangaron133),
            array("id" => 2, "value" => $reactiveErtoshOxangaron95 + $reactiveErtoshOxangaron135),
            array("id" => 3, "value" => $setErtoshOxangaron600 + $setErtoshOxangaron640),
            array("id" => 4, "value" => $setErtoshOxangaron601 + $setErtoshOxangaron641),
            array("id" => 5, "value" => $setErtoshOxangaron173 + $setErtoshOxangaron213),
            array("id" => 6, "value" => $waterErtoshOxangaron93 + $waterErtoshOxangaron133),
            array("id" => 7, "value" => $gesErtoshOxangaron589[2] > 0 ? $gesErtoshOxangaron589[2] : $gesErtoshOxangaron629[2]),
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

        $ges35Oxangaron693 = $this->getValue($data, "G693");
        $ges35Oxangaron670 = $this->getValue($data, "G670");
        $ges35Oxangaron333 = $this->getValue($data, "G333");
        $ges35Oxangaron572 = $this->getValue($data, "G572");
        $ges35Oxangaron13 = $this->getValue($data, "G13");
        $ges35Oxangaron53 = $this->getValue($data, "G53");
        $ges35Oxangaron55 = $this->getValue($data, "G55");
        $ges35Oxangaron373 = $this->getValue($data, "G373");
        $ges35Oxangaron293 = $this->getValue($data, "G293");
        $ges35Oxangaron295 = $this->getValue($data, "G295");
        $ges35Oxangaron453 = $this->getValue($data, "G453");
        $ges35Oxangaron455 = $this->getValue($data, "G455");

        $gesErtoshOxangaron600 = $this->getValue($data, "G600");
        $gesErtoshOxangaron601 = $this->getValue($data, "G601");
        $gesErtoshOxangaron640 = $this->getValue($data, "G640");
        $gesErtoshOxangaron641 = $this->getValue($data, "G641");
        $gesErtoshOxangaron173 = $this->getValue($data, "G173");
        $gesErtoshOxangaron213 = $this->getValue($data, "G213");
        $gesErtoshOxangaron93 = $this->getValue($data, "G93");
        $gesErtoshOxangaron95 = $this->getValue($data, "G95");
        $gesErtoshOxangaron133 = $this->getValue($data, "G133");
        $gesErtoshOxangaron135 = $this->getValue($data, "G135");

        $CONST = 1000000;
        $kvt = 1000;
        $water35Oxangaron = Water::find()->where(['id_organization' => 17])->orderBy(['date' => SORT_DESC])->one();
        $upBef35Oxangaron = $water35Oxangaron ? $water35Oxangaron['up_bef'] : 0;
        $downBef35Oxangaron = $water35Oxangaron ? $water35Oxangaron['down_bef'] : 0;
        $pressure35Oxangaron = $upBef35Oxangaron - $downBef35Oxangaron;

        $water = Water::find()->where(['id_organization' => 75])->orderBy(['date' => SORT_DESC])->one();
        $upBef = $water ? $water['up_bef'] : 0;
        $downBef = $water ? $water['down_bef'] : 0;
        $pressure = $upBef - $downBef;

        $energy = new Energy();

        $set35Oxangaron693 = $ges35Oxangaron693[2] * 21000 / $CONST;//21000
        $set35Oxangaron670 = $ges35Oxangaron670[2] * 21000 / $CONST;//21000

        $set35Oxangaron333 = $ges35Oxangaron333[2] * 4200 / $kvt;//4200
        $set35Oxangaron13 = $ges35Oxangaron13[2] * 4200 / $kvt;//4200
        $set35Oxangaron373 = $ges35Oxangaron373[2] * 2100 / $kvt;//2100

        $power35Oxangaron293 = $ges35Oxangaron293[2] * 21000 / $CONST;//active 21000
        $reactive35Oxangaron295 = $ges35Oxangaron295[2] * 21000 / $CONST;//reactive 21000
        $water35Oxangaron293 = $energy->getWater($power35Oxangaron293, $pressure35Oxangaron, 0.99, 0.904);//water

        $power35Oxangaron453 = $ges35Oxangaron453[2] * 4000 / $CONST;//active 4000
        $reactive35Oxangaron455 = $ges35Oxangaron455[2] * 4000 / $CONST;//reactive 4000
        $water35Oxangaron453 = $energy->getWater($power35Oxangaron453, $pressure35Oxangaron, 0.99, 0.904);//water

        $power35Oxangaron53 = $ges35Oxangaron53[2] * 21000 / $CONST;//active 21000
        $reactive35Oxangaron55 = $ges35Oxangaron55[2] * 21000 / $CONST;//reactive 21000
        $water35Oxangaron53 = $energy->getWater($power35Oxangaron53, $pressure35Oxangaron, 0.99, 0.904);//water

        $ges35OxangaronActive = $power35Oxangaron293 + $power35Oxangaron453 + $power35Oxangaron53;
        $ges35OxangaronReactive = $reactive35Oxangaron295 + $reactive35Oxangaron455 + $reactive35Oxangaron55;
        $ges35OxangaronActiveOut = (-1 * $set35Oxangaron693 > 0 ? $set35Oxangaron693 : 0) + (-1 * $set35Oxangaron670 > 0 ? $set35Oxangaron670 : 0);
        $ges35OxangaronActiveIn = (-1 * $set35Oxangaron693 < 0 ? $set35Oxangaron693 : 0) + (-1 * $set35Oxangaron670 < 0 ? $set35Oxangaron670 : 0);
        $ges35OxangaronOwnNeeds = $set35Oxangaron333 + $set35Oxangaron13 + $set35Oxangaron373;
        $ges35OxangaronWater = $water35Oxangaron293 + $water35Oxangaron453 + $water35Oxangaron53;
        $ges35OxangaronAggregateTrue = ($ges35Oxangaron293[2] > 0 ? 1 : 0) + ($ges35Oxangaron453[2] > 0 ? 1 : 0) + ($ges35Oxangaron53[2] > 0 ? 1 : 0);
        $ges35OxangaronAggregateFalse = ($ges35Oxangaron293[2] <= 0 ? 1 : 0) + ($ges35Oxangaron453[2] <= 0 ? 1 : 0) + ($ges35Oxangaron53[2] <= 0 ? 1 : 0);



        $setErtoshOxangaron600 = $gesErtoshOxangaron600[2] * 1800 / $CONST;//1800
        $setErtoshOxangaron601 = $gesErtoshOxangaron601[2] * 1800 / $CONST;//1800
        $setErtoshOxangaron640 = $gesErtoshOxangaron640[2] * 1800 / $CONST;//1800
        $setErtoshOxangaron641 = $gesErtoshOxangaron641[2] * 1800 / $CONST;//1800

        $setErtoshOxangaron173 = $gesErtoshOxangaron173[2] * 100 / $kvt;//100
        $setErtoshOxangaron213 = $gesErtoshOxangaron213[2] * 100 / $kvt;//100

        $powerErtoshOxangaron93 = $gesErtoshOxangaron93[2] * 1500 / $CONST;//active 1500
        $reactiveErtoshOxangaron95 = $gesErtoshOxangaron95[2] * 1500 / $CONST;//reactive 1500
        $waterErtoshOxangaron93 = $energy->getWater($powerErtoshOxangaron93, $pressure, 0.96, 0.871);//water

        $powerErtoshOxangaron133 = $gesErtoshOxangaron133[2] * 1500 / $CONST;//active 1500
        $reactiveErtoshOxangaron135 = $gesErtoshOxangaron135[2] * 1500 / $CONST;//reactive 1500
        $waterErtoshOxangaron133 = $energy->getWater($powerErtoshOxangaron133, $pressure, 0.96, 0.871);//water

        $gesErtoshOxangaronActive = $powerErtoshOxangaron93 + $powerErtoshOxangaron133;
        $gesErtoshOxangaronReactive = $reactiveErtoshOxangaron95 + $reactiveErtoshOxangaron135;
        $gesErtoshOxangaronActiveOut = $setErtoshOxangaron600 + $setErtoshOxangaron640;
        $gesErtoshOxangaronActiveIn = $setErtoshOxangaron601 + $setErtoshOxangaron641;
        $gesErtoshOxangaronOwnNeeds = $setErtoshOxangaron173 + $setErtoshOxangaron213;
        $gesErtoshOxangaronWater = $waterErtoshOxangaron93 + $waterErtoshOxangaron133;
        $gesErtoshOxangaronAggregateTrue = ($gesErtoshOxangaron93[2] > 0 ? 1 : 0) + ($gesErtoshOxangaron133[2] > 0 ? 1 : 0);
        $gesErtoshOxangaronAggregateError = 1;
        $gesErtoshOxangaronAggregateFalse = ($gesErtoshOxangaron93[2] <= 0 ? 1 : 0) + ($gesErtoshOxangaron133[2] <= 0 ? 1 : 0) - $gesErtoshOxangaronAggregateError;

        $active = $ges35OxangaronActive + $gesErtoshOxangaronActive;
        $reactive = $ges35OxangaronReactive + $gesErtoshOxangaronReactive;
        $activeOut = $ges35OxangaronActiveOut + $gesErtoshOxangaronActiveOut;
        $activeIn = $ges35OxangaronActiveIn + $gesErtoshOxangaronActiveIn;
        $ownNeeds = $ges35OxangaronOwnNeeds + $gesErtoshOxangaronOwnNeeds;
        $water = $ges35OxangaronWater + $gesErtoshOxangaronWater;
        $true = $ges35OxangaronAggregateTrue + $gesErtoshOxangaronAggregateTrue;
        $error = $gesErtoshOxangaronAggregateError;
        $false = $ges35OxangaronAggregateFalse + $gesErtoshOxangaronAggregateFalse;

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

            array("id" => 10, "value" => $ges35OxangaronActive),
            array("id" => 12, "value" => $ges35OxangaronAggregateTrue),
            array("id" => 13, "value" => $ges35OxangaronAggregateFalse),

            array("id" => 14, "value" => $gesErtoshOxangaronActive),
            array("id" => 15, "value" => $gesErtoshOxangaronAggregateTrue),
            array("id" => 16, "value" => $gesErtoshOxangaronAggregateFalse),
            array("id" => 17, "value" => $gesErtoshOxangaronAggregateError),

        );

        echo json_encode($data);
    }

}
