<?php

namespace frontend\models;

use common\models\Organization;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $id_organization
 * @property string $username
 * @property int $type
 * @property string|null $auth_key
 * @property string $password
 * @property string|null $password_reset_token
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $value
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'username', 'type', 'password', 'created_at', 'updated_at', 'value'], 'required'],
            [['id_organization', 'type', 'status', 'created_at', 'updated_at', 'value'], 'integer'],
            [['username', 'password', 'password_reset_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['password_reset_token'], 'unique'],
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
            'username' => 'Фойдаланувчи номи',
            'type' => 'Type',
            'auth_key' => 'Auth Key',
            'password' => 'Махфий сўз',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'value' => 'Тури',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(),['id' => 'id_organization']);
    }
}
