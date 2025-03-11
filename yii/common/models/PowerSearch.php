<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Power;

/**
 * PowerSearch represents the model behind the search form of `common\models\Power`.
 */
class PowerSearch extends Power
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_organization', 'id_aggregate', 'time', 'power'], 'integer'],
            [['date'], 'safe'],
            [['water', 'pressure', 'power_real'], 'number'],
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
        $query = Power::find();

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
            'id_aggregate' => $this->id_aggregate,
            'date' => $this->date,
            'time' => $this->time,
            'power' => $this->power,
            'water' => $this->water,
            'pressure' => $this->pressure,
            'power_real' => $this->power_real,
        ]);

        return $dataProvider;
    }
}
