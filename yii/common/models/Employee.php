<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property int $id_organization
 * @property string $fio
 * @property int $id_position
 * @property string $phone
 * @property int $tel
 * @property string|null $photo
 * @property int|null $id_org
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'fio', 'id_position', 'phone', 'tel'], 'required'],
            [['id_organization', 'id_position', 'tel', 'id_org'], 'integer'],
            [['fio', 'photo'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_org' => 'Id Org',
            'photo' => 'Фото',
            'id_organization' => 'Ташкилот номи',
            'fio' => 'ФИШ',
            'id_position' => 'Лавозими',
            'phone' => 'Уяли тел.',
            'tel' => 'Ички тел.',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }

    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'id_position']);
    }
}
