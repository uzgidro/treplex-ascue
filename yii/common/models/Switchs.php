<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "switchs".
 *
 * @property int $id
 * @property int $id_organization
 * @property int|null $id_org
 * @property int|null $id_switch
 * @property string $small
 * @property string $type Тип
 * @property int $year_of_issue Год выпуска
 * @property int $year_of_commissioning Год ввода в эксплуатацию
 * @property float $nominal_current Номинальное ток (А)
 * @property float $nominal_voltage Номинальное напряжение (кВ)
 * @property string $overall_dimensions Габаритные размеры, мм (дл. Х шир Х выс)
 * @property float $gross_weight Полная масса (кг)
 * @property float $gross_oil_weight масса масла, (элегаза*) ( кг)
 * @property string|null $photo
 */
class Switchs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'switchs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'small', 'type', 'year_of_issue', 'year_of_commissioning', 'nominal_current', 'nominal_voltage', 'overall_dimensions', 'gross_weight', 'gross_oil_weight'], 'required'],
            [['id_organization', 'id_org', 'id_switch', 'year_of_issue', 'year_of_commissioning'], 'integer'],
            [['nominal_current', 'nominal_voltage', 'gross_weight', 'gross_oil_weight'], 'number'],
            [['small'], 'string', 'max' => 50],
            [['type', 'overall_dimensions', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_organization' => 'ГЭС номи',
            'id_org' => 'Id Org',
            'id_switch' => 'Id Switch',
            'small' => 'Диспетчерские наименования',
            'type' => 'Тип',
            'year_of_issue' => 'Год выпуска',
            'year_of_commissioning' => 'Год ввода в эксплуатацию',
            'nominal_current' => 'Номинальное ток (А)',
            'nominal_voltage' => 'Номинальное напряжение (кВ)',
            'overall_dimensions' => 'Габаритные размеры, мм (дл. Х шир Х выс)',
            'gross_weight' => 'Полная масса (кг)',
            'gross_oil_weight' => 'Масса масла, (элегаза*) (кг)',
            'photo' => 'Photo',
        ];
    }

    public static function getWorksList($id)
    {
        return SwitchName::find()
            ->where(['id_organization' => $id])->asArray()->all();
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }

    public function getSwitch()
    {
        return $this->hasOne(SwitchName::className(), ['id' => 'id_switch']);
    }
}
