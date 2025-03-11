<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "repair".
 *
 * @property int $id
 * @property int $id_organization ГЭС номи
 * @property int $aggregate Гидроагрегат
 * @property string $name Наименования оборудования (узел)
 * @property int $typy_repair Вид ремонта
 * @property string $first_date Дата начало ремонта
 * @property string $last_date Дата начало ремонта
 * @property string|null $files Перечень работ
 * @property float $expenditure_of_funds Расход средств (млн.сум)
 * @property int $id_org
 */
class Repair extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'repair';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'aggregate', 'name', 'typy_repair', 'first_date', 'last_date', 'expenditure_of_funds', 'id_org'], 'required'],
            [['id_organization', 'aggregate', 'typy_repair', 'id_org'], 'integer'],
            [['first_date', 'last_date'], 'safe'],
            [['expenditure_of_funds'], 'number'],
            [['name', 'files'], 'string', 'max' => 255],
            [['files'], 'file', 'extensions' => 'pdf'/*, 'maxSize' => 1024 * 1024 * 2*/], // ограничение по типам и размеру файла (2 МБ)
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
            'aggregate' => 'Гидроагрегат',
            'name' => 'Наименования оборудования (узел)',
            'typy_repair' => 'Вид ремонта',
            'first_date' => 'Дата начало ремонта',
            'last_date' => 'Дата окончания ремонта',
            'files' => 'Перечень работ',
            'expenditure_of_funds' => 'Расход средств (млн.сум)',
            'id_org' => 'Id Org',
        ];
    }

    public function getOrganization(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }

    public function getType(): \yii\db\ActiveQuery
    {
        return $this->hasOne(TypeRepair::className(), ['id' => 'typy_repair']);
    }
}
