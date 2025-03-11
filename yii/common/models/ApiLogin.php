<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "api_login".
 *
 * @property int $id
 * @property int $id_organization
 * @property string $password
 * @property int $port
 * @property int|null $one
 * @property int|null $two
 * @property int|null $three
 * @property int|null $four
 * @property int|null $coefficient
 */
class ApiLogin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'api_login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'password', 'port'], 'required'],
            [['id_organization', 'port', 'one', 'two', 'three', 'four', 'coefficient'], 'integer'],
            [['password'], 'string', 'max' => 50],
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
            'password' => 'Password',
            'port' => 'Port',
            'one' => 'One',
            'two' => 'Two',
            'three' => 'Three',
            'four' => 'Four',
            'coefficient' => 'Coefficient',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }
}
