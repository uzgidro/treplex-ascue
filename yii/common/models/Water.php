<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "water".
 *
 * @property int $id
 * @property int $id_organization
 * @property string|null $date
 * @property float $up_bef
 * @property float $down_bef
 * @property int|null $id_org
 */
class Water extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'water';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'up_bef', 'down_bef'], 'required'],
            [['id_organization', 'id_org'], 'integer'],
            [['date'], 'safe'],
            [['up_bef', 'down_bef'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_org' => 'Id Org',
            'id' => 'ID',
            'id_organization' => 'Имя организация',
            'date' => 'Дата',
            'up_bef' => 'Верхный бъеф, м',
            'down_bef' => 'Нежный бъеф, м',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }
}
