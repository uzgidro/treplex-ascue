<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "type_repair".
 *
 * @property int $id
 * @property string $name
 */
class TypeRepair extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_repair';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
            'name' => 'Вид ремонта',
        ];
    }
}
