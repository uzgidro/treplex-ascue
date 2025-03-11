<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Explotation;

/**
 * ExplotationSearch represents the model behind the search form of `common\models\Explotation`.
 */
class ExplotationSearch extends Explotation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_organization'], 'integer'],
            [['date', 'obxavo', 'obxavo_icon'], 'safe'],
            [['yuqori_bef_suv_xajmi', 'suv_ombori_suv_xajmi', 'suv_bosimi', 'suv_omboridan_kelayotgan_suv', 'suv_omboridan_chiqayotgan_suv', 'geslar_orqali', 'salt_tashlama', 'ishlayotgan_agregatlar_soni', 'day_energiya'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Explotation::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_organization' => $this->id_organization,
            'date' => $this->date,
            'yuqori_bef_suv_xajmi' => $this->yuqori_bef_suv_xajmi,
            'suv_ombori_suv_xajmi' => $this->suv_ombori_suv_xajmi,
            'suv_bosimi' => $this->suv_bosimi,
            'suv_omboridan_kelayotgan_suv' => $this->suv_omboridan_kelayotgan_suv,
            'suv_omboridan_chiqayotgan_suv' => $this->suv_omboridan_chiqayotgan_suv,
            'geslar_orqali' => $this->geslar_orqali,
            'salt_tashlama' => $this->salt_tashlama,
            'ishlayotgan_agregatlar_soni' => $this->ishlayotgan_agregatlar_soni,
            'day_energiya' => $this->day_energiya,
        ]);

        $query->andFilterWhere(['like', 'obxavo', $this->obxavo])
            ->andFilterWhere(['like', 'obxavo_icon', $this->obxavo_icon]);

        return $dataProvider;
    }
}
