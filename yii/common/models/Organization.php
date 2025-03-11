<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property int $id
 * @property string $name
 * @property int|null $stir
 * @property int|null $id_organization
 * @property int|null $agregat
 * @property float|null $quwwat
 * @property int $sort
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'sort'], 'required'],
            [['stir', 'id_organization', 'agregat', 'sort'], 'integer'],
            [['quwwat'], 'number'],
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
            'quwwat' => 'Ўрнатилган қуввати, МВт',
            'sort' => 'Жойлашиш ўрни',
            'agregat' => 'Агрегатлар сони',
            'name' => 'Ташкилот номи',
            'stir' => 'СТИР',
            'id_organization' => 'Юқори турувчи ташкилот',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }
}
