<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transformer".
 *
 * @property int $id
 * @property int $id_organization
 * @property int|null $id_org
 * @property string $small_type
 * @property string $type Тип
 * @property int $year_of_issue Год выпуска
 * @property float $year_of_commissioning Год ввода в эксплуатацию
 * @property int $power Мощность
 * @property string $voltage Напряжение
 * @property float $loss_of_idle_speed Потерия холостого хода
 * @property string $overall_dimensions Габаритные размеры, мм (дл. Х шир Х выс)
 * @property string $winding_connection Схема и группа соединения обмоток
 * @property float $gross_weight Полная масса (кг)
 * @property float $gross_oil_weight Полная масса масла (кг)
 * @property string|null $photo
 * @property int|null $id_tansformer
 */
class Transformer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transformer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'small_type', 'type', 'year_of_issue', 'year_of_commissioning', 'power', 'voltage', 'loss_of_idle_speed', 'overall_dimensions', 'winding_connection', 'gross_weight', 'gross_oil_weight'], 'required'],
            [['id_organization', 'id_org', 'year_of_issue', 'power', 'id_tansformer'], 'integer'],
            [['year_of_commissioning', 'loss_of_idle_speed', 'gross_weight', 'gross_oil_weight'], 'number'],
            [['small_type', 'voltage'], 'string', 'max' => 50],
            [['type', 'overall_dimensions', 'winding_connection', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tansformer' => 'Id Tansformer',
            'id_organization' => 'ГЭС номи',
            'id_org' => 'Id Org',
            'small_type' => 'Диспетчерские наименования',
            'type' => 'Тип',
            'year_of_issue' => 'Год выпуска',
            'year_of_commissioning' => 'Год ввода в эксплуатацию',
            'power' => 'Мощность, кВа',
            'voltage' => 'Напряжение, кВ',
            'loss_of_idle_speed' => 'Потерия холостого хода, кВт',
            'overall_dimensions' => 'Габаритные размеры, мм (дл. Х шир Х выс)',
            'winding_connection' => 'Схема и группа соединения обмоток',
            'gross_weight' => 'Полная масса (кг)',
            'gross_oil_weight' => 'Полная масса масла (кг)',
            'photo' => 'Photo',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }

    public static function getWorksList($id)
    {
        return TransformerName::find()
            ->where(['id_organization' => $id])->asArray()->all();
    }

    public function getTansformer()
    {
        return $this->hasOne(TransformerName::className(), ['id' => 'id_tansformer']);
    }
}
