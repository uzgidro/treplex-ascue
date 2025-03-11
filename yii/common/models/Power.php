<?php

namespace common\models;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Yii;

/**
 * This is the model class for table "power".
 *
 * @property int $id
 * @property int $id_organization
 * @property int $id_aggregate
 * @property string $date
 * @property int $time
 * @property int $power
 * @property float $water
 * @property float $pressure
 * @property float $power_real
 */
class Power extends \yii\db\ActiveRecord
{
    public $excelFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'power';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'id_aggregate', 'date', 'time', 'power', 'water', 'pressure', 'power_real'], 'required'],
            [['id_organization', 'id_aggregate', 'time', 'power'], 'integer'],
            [['date'], 'safe'],
            [['water', 'pressure', 'power_real'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_organization' => 'Id Organization',
            'id_aggregate' => 'Id Aggregate',
            'date' => 'Date',
            'time' => 'Time',
            'power' => 'Power',
            'water' => 'Water',
            'pressure' => 'Pressure',
            'power_real' => 'Power Real',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }

    function getWater($power, $pressure, $one, $two) : float {
        return $pressure == 0 || $power == 0 ? 0 : ($power / 1000 / $one / $two / $pressure / 9.81) * 1000;
    }

    public function savePower($excelFile): bool
    {
        if (!$excelFile) {
            return false;
        }
        $inputFileName = $excelFile->tempName;
        $spreadsheet = IOFactory::load($inputFileName);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        // Process each row from the Excel file
        foreach ($sheetData as $g => $row) {
            if ($g == 1) {
                continue;
            }

            $id_organization = $row['A'];
            $id_aggregate = $row['B'];
//            $password = $row['C'];
//            $port = $row['D'];
            $channel = $row['E'];
            $date = $row['F'];
            $coefficient = $row['G'];
            $pressure = (float)str_replace(',', '', $row['H']);
            $one = $row['I'];
            $two  = $row['J'];

            $login = ApiLogin::find()->where(['id_organization' => $id_organization])->one();
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://user:{$login['password']}@192.168.40.215:{$login['port']}/crq?req=archive&type=b&n1={$channel}&n2={$channel}&t1=".str_replace("-", "", $date)."000000w&t2=".str_replace("-", "", $date)."233000w&interval=main",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);


            curl_close($curl);
            $result = explode(",", $response);
            if (!isset($result[5])) {
                continue;
            }
            $k = 5; $j = 8;
            for ($i = 1; $i <= 24; $i++) {
                $count = Power::find()->where(['date' => $date])->andWhere(['id_organization' => $id_organization])->andWhere(['id_aggregate' => $id_aggregate])->andWhere(['time' => $i])->count();
                if ($count > 0) { continue; }

                if (!isset($result[$k]) || !isset($result[$j])) { continue; }

                $power = ((float)$result[$k] + (float)$result[$j]) * $coefficient;
                $this->id = null;
                $this->isNewRecord = true;
                $this->id_organization = $id_organization;
                $this->id_aggregate = $id_aggregate;
                $this->date = $date;
                $this->time = $i;
                $this->power = (int)number_format($power, 0, ".", "");
                $this->water = $this->getWater($power, $pressure, $one, $two);
                $this->pressure = $pressure;
                $this->power_real = (float)$result[$k] + (float)$result[$j];

                if (!$this->save()) {
                    return false;
                }
                $k += 6; $j += 6;
            }
        }
        return true;
    }
}
