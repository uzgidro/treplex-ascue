<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Aggregate;

/**
 * AggregateSearch represents the model behind the search form of `common\models\Aggregate`.
 */
class AggregateSearch extends Aggregate
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_organization', 'port', 'id_aggregate', 'chanel', 'coefficient'], 'integer'],
            [['password'], 'safe'],
            [['one', 'two'], 'number'],
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
        $query = Aggregate::find();

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
            'port' => $this->port,
            'id_aggregate' => $this->id_aggregate,
            'one' => $this->one,
            'two' => $this->two,
            'chanel' => $this->chanel,
            'coefficient' => $this->coefficient,
        ]);

        $query->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
