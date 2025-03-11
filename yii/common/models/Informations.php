<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "informations".
 *
 * @property int $id
 * @property int $id_organization
 * @property int $aggregate
 * @property string $type_generation Тип генератора
 * @property int $year_aggregate Год выпуска
 * @property int $year_exp Год ввода в эксплуатацию
 * @property float $active_power Активная мощность
 * @property float $naprijeniya_generator Напряжение генератора
 * @property float $chastota Частота генератора
 * @property float $tok_statora Ток статора
 * @property float $naprijeniya_rotora Напряжение ротора
 * @property float $tok_rotora Ток ротора
 * @property float $vrasheniya_generatora Частота вращения генератора
 * @property float $kpd_generator
 * @property string|null $phoro_aggregate фото агрегата
 * @property string $type_trubina Тип Турбина
 * @property int $year_turbin Год выпуска турбина
 * @property int $year_turbin_exp Год ввода в эксплуатацию
 * @property float $moshnost Мощность
 * @property float $raschyot_napor Расчетный напор
 * @property float $oborot Оборот
 * @property int $count_lopastey Колическтво лопастей
 * @property float $kpd_turbina
 * @property string|null $photo_turbin Фото турбин
 * @property int|null $id_org
 */
class Informations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'informations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organization', 'aggregate', 'type_generation', 'year_aggregate', 'year_exp', 'active_power', 'naprijeniya_generator', 'chastota', 'tok_statora', 'naprijeniya_rotora', 'tok_rotora', 'vrasheniya_generatora', 'kpd_generator', 'type_trubina', 'year_turbin', 'year_turbin_exp', 'moshnost', 'raschyot_napor', 'oborot', 'count_lopastey', 'kpd_turbina'], 'required'],
            [['id_organization', 'aggregate', 'year_aggregate', 'year_exp', 'year_turbin', 'year_turbin_exp', 'count_lopastey', 'id_org'], 'integer'],
            [['active_power', 'naprijeniya_generator', 'chastota', 'tok_statora', 'naprijeniya_rotora', 'tok_rotora', 'vrasheniya_generatora', 'kpd_generator', 'moshnost', 'raschyot_napor', 'oborot', 'kpd_turbina'], 'number'],
            [['type_generation', 'phoro_aggregate', 'type_trubina', 'photo_turbin'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kpd_generator' => 'КПД генератора',
            'kpd_turbina' => 'КПД турбины',
            'id_org' => 'Id Org',
            'id_organization' => 'ГЭС номи',
            'aggregate' => 'Гидроагрегат',
            'type_generation' => 'Тип генератора',
            'year_aggregate' => 'Год выпуска',
            'year_exp' => 'Год ввода в эксплуатацию',
            'active_power' => 'Активная мощность, МВт',
            'naprijeniya_generator' => 'Напряжение генератора, кВ',
            'chastota' => 'Частота генератора, Гц',
            'tok_statora' => 'Ток статора, А',
            'naprijeniya_rotora' => 'Напряжение ротора, В',
            'tok_rotora' => 'Ток ротора, А',
            'vrasheniya_generatora' => 'Частота вращения генератора, об/мин',
            'phoro_aggregate' => 'Фото',
            'type_trubina' => 'Тип Турбина',
            'year_turbin' => 'Год выпуска',
            'year_turbin_exp' => 'Год ввода в эксплуатацию',
            'moshnost' => 'Мощность, МВт',
            'raschyot_napor' => 'Расчетный напор, м',
            'oborot' => 'Оборот, об/мин',
            'count_lopastey' => 'Колическтво лопастей, шт',
            'photo_turbin' => 'Фото',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'id_organization']);
    }
}
