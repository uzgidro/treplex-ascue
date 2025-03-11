<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property int $id
 * @property int $id_organization
 * @property int $id_year
 * @property float $january
 * @property float $february
 * @property float $march
 * @property float $april
 * @property float $may
 * @property float $june
 * @property float $july
 * @property float $august
 * @property float $september
 * @property float $october
 * @property float $november
 * @property float $december
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'id_year', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'], 'required'],
            [['id_organization', 'id_year'], 'integer'],
            [['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_organization' => 'Ташкилот номи',
            'id_year' => 'Йил',
            'january' => 'Январ',
            'february' => 'Феврал',
            'march' => 'Март',
            'april' => 'Апрел',
            'may' => 'Май',
            'june' => 'Июн',
            'july' => 'Июл',
            'august' => 'Август',
            'september' => 'Сентябр',
            'october' => 'Октябр',
            'november' => 'Ноябр',
            'december' => 'Декабр',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(),['id' => 'id_organization']);
    }

    public function getYear()
    {
        return $this->hasOne(Year::className(),['id' => 'id_year']);
    }
}
