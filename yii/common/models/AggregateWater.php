<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "aggregate_water".
 *
 * @property int $id
 * @property int $id_organization
 * @property int $id_aggregate
 * @property float $one
 * @property float $two
 * @property int $chanel
 * @property int $coefficient
 */
class AggregateWater extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aggregate_water';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'id_aggregate', 'one', 'two', 'chanel', 'coefficient'], 'required'],
            [['id_organization', 'id_aggregate', 'chanel', 'coefficient'], 'integer'],
            [['one', 'two'], 'number'],
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
            'id_aggregate' => 'Id Aggregate',
            'one' => 'One',
            'two' => 'Two',
            'chanel' => 'Chanel',
            'coefficient' => 'Coefficient',
        ];
    }
}
