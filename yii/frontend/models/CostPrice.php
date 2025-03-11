<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cost_price".
 *
 * @property int $id
 * @property int $id_cost
 * @property int $id_name
 * @property string $unit_of_measure
 * @property int $quarter
 * @property float $quantity
 * @property float $price
 * @property float $chigirma
 */
class CostPrice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cost_price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cost', 'id_name', 'unit_of_measure', 'quarter', 'quantity', 'price', 'chigirma'], 'required'],
            [['id_cost', 'id_name', 'quarter'], 'integer'],
            [['quantity', 'price', 'chigirma'], 'number'],
            [['unit_of_measure'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_cost' => 'Id Cost',
            'id_name' => 'Id Name',
            'unit_of_measure' => 'Unit Of Measure',
            'quarter' => 'Quarter',
            'quantity' => 'Quantity',
            'price' => 'Price',
            'chigirma' => 'Chigirma',
        ];
    }
}
