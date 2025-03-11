<?php

namespace common\models;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Yii;

/**
 * This is the model class for table "explotation".
 *
 * @property int $id
 * @property int $id_organization
 * @property string $date
 * @property string|null $obxavo
 * @property string|null $obxavo_icon
 * @property float|null $yuqori_bef_suv_xajmi
 * @property float|null $suv_ombori_suv_xajmi
 * @property float|null $suv_bosimi
 * @property float|null $suv_omboridan_kelayotgan_suv
 * @property float|null $suv_omboridan_chiqayotgan_suv
 * @property float|null $geslar_orqali
 * @property float|null $salt_tashlama
 * @property float|null $ishlayotgan_agregatlar_soni
 * @property float|null $day_energiya
 */
class Explotation extends \yii\db\ActiveRecord
{
    public $excelFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'explotation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'date', 'excelFile'], 'required'],
            [['id_organization'], 'integer'],
            [['date'], 'safe'],
            [['yuqori_bef_suv_xajmi', 'suv_ombori_suv_xajmi', 'suv_bosimi', 'suv_omboridan_kelayotgan_suv', 'suv_omboridan_chiqayotgan_suv', 'geslar_orqali', 'salt_tashlama', 'ishlayotgan_agregatlar_soni', 'day_energiya'], 'number'],
            [['obxavo'], 'string', 'max' => 50],
            [['obxavo_icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'salt_tashlama' => 'Отбор, салт ташлама,  м3/с',
            'id_organization' => 'Ташкилот номи',
            'date' => 'Сана',
            'yuqori_bef_suv_xajmi' => 'Юқори бъефнинг сув сатҳи, м',
            'suv_ombori_suv_xajmi' => 'Сув омборидаги сув ҳажми, млн.м3',
            'suv_bosimi' => 'Сув босими, м',
            'suv_omboridan_kelayotgan_suv' => 'Сув омборига келаётган сув м3/с',
            'suv_omboridan_chiqayotgan_suv' => 'Сув омборидан чиқаётган сув м3/с',
            'geslar_orqali' => 'Агрегатлар орқали, м3/с',
            'ishlayotgan_agregatlar_soni' => 'Ишлаётган агрегатлар сони',
            'day_energiya' => '1 кунда ишлаб чиқарилган электр энергия, млн.кВт.соат',
            'obxavo' => 'Obxavo',
            'obxavo_icon' => 'Obxavo Icon',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(),['id' => 'id_organization']);
    }

    public function saveExplotation($excelFile) {

        if ($excelFile) {
            $inputFileName = $excelFile->tempName;

            $spreadsheet = IOFactory::load($inputFileName);
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

            $i = 0;

            // Обработка $sheetData по мере необходимости
            foreach ($sheetData as $row) {
                if ($i == 0) {
                    $i++; continue;
                }

                // $row['A'] содержит данные из столбца A, $row['B'] из столбца B и так далее
                $count = Organization::find()->where(['like', 'name', "%".$row['A']."%", false])->count();

                if ($count == 0) {
                    continue;
                } else {
                    $name = Organization::find()->where(['like', 'name', "%".$row['A']."%", false])->one();
                    if ($name['name'] == '"Ўрта Чирчиқ ГЭСлар каскади" УК'
                        || $name['name'] == '"Чирчиқ ГЭСлар каскади" УК'
                        || $name['name'] == '"Қодирия ГЭСлар каскади" УК'
                        || $name['name'] == '"Тошкент ГЭСлар каскади" УК'
                        || $name['name'] == '"Қуйи Бўзсув ГЭСлар каскади" УК'
                        || $name['name'] == '"Фарход ГЭС" УК'
                        || $name['name'] == '"Самарқанд ГЭСлар каскади" УК'
                        || $name['name'] == '"Андижон ГЭС" УК'
                        || $name['name'] == '"Шахрихон ГЭСлар каскади" ФЛ'
                        || $name['name'] == '"КФК КГЭСлар каскади" УК '
                        || $name['name'] == '"Тўполанг ГЭСлар каскади" УК'
                        || $name['name'] == '"Оҳангарон ГЭС" УК') {
                        continue;
                    }
                }

                $date = $row['M'];
                $exp = explode("/", $date);
                $year = $exp[2];
                $month = $exp[0] < 10 ? "0".$exp[0] : $exp[0];
                $day = $exp[1] < 10 ? "0".$exp[1] : $exp[1];

                $countExp = Explotation::find()->where(['id_organization' => $name['id']])->andWhere(['date' => $year."-".$month."-".$day])->count();
                if ($countExp > 0) { continue; }

                $this->id = null;
                $this->isNewRecord = true;

                $this->date = $year."-".$month."-".$day;
                $this->id_organization = $name['id'];
                $this->obxavo = !empty($row['B']) ? $row['B'] : null;
                $this->obxavo_icon = !empty($row['C']) ? $row['C'] : null;
                $this->yuqori_bef_suv_xajmi = !empty($row['D']) ? str_replace(',', '.', $row['D']) : null;
                $this->suv_ombori_suv_xajmi = !empty($row['E']) ? str_replace(',', '.', $row['E']) : null;
                $this->suv_bosimi = !empty($row['F']) ? str_replace(',', '.', $row['F']) : null;
                $this->suv_omboridan_kelayotgan_suv = !empty($row['G']) ? str_replace(',', '.', $row['G']) : null;
                $this->suv_omboridan_chiqayotgan_suv = !empty($row['H']) ? str_replace(',', '.', $row['H']) : null;
                $this->geslar_orqali = !empty($row['I']) ? str_replace(',', '.', $row['I']) : null;
                $this->salt_tashlama = !empty($row['J']) ? str_replace(',', '.', $row['J']) : null;
                $this->ishlayotgan_agregatlar_soni = !empty($row['K']) ? str_replace(',', '.', $row['K']) : null;
                $this->day_energiya = !empty($row['L']) ? str_replace(',', '.', $row['L']) : null;

                if (!$this->save()) {
                    return false;
                }

                $i++;
            }

            return true;
        } else {
            return false;
        }

    }
}
