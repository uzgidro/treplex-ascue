<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "switch_name".
 *
 * @property int $id
 * @property int $id_organization
 * @property string $name
 */
class SwitchName extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'switch_name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'name'], 'required'],
            [['id_organization'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_organization' => 'Название организации',
            'name' => 'Имя выключателя',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }
}
