<?php

namespace common\models;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Yii;

/**
 * This is the model class for table "guides".
 *
 * @property int $id
 * @property int $id_organization
 * @property float $pressure
 * @property float $power
 * @property float $guide
 */
class Guides extends \yii\db\ActiveRecord
{
    public $excelFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guides';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'pressure', 'power', 'guide'], 'required'],
            [['id_organization'], 'integer'],
            [['power', 'guide', 'pressure'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'excelFile' => 'Excel файл',
            'id' => 'ID',
            'id_organization' => 'ГЭС номи',
            'pressure' => 'Напор, м',
            'power' => 'Қувват',
            'guide' => 'НА',
        ];
    }

    public function getOrganization(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }
}
