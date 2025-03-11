<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "aggregate".
 *
 * @property int $id
 * @property int $id_organization
 * @property string $password
 * @property int $port
 * @property int $id_aggregate
 * @property float $one
 * @property float $two
 * @property int $chanel
 * @property int $coefficient
 */
class Aggregate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aggregate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'password', 'port', 'id_aggregate', 'one', 'two', 'chanel', 'coefficient'], 'required'],
            [['id_organization', 'port', 'id_aggregate', 'chanel', 'coefficient'], 'integer'],
            [['one', 'two'], 'number'],
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
            'id_aggregate' => 'Id Aggregate',
            'one' => 'One',
            'two' => 'Two',
            'chanel' => 'Chanel',
            'coefficient' => 'Coefficient',
        ];
    }
}
