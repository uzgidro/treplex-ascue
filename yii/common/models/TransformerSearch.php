<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Transformer;
use Yii;

/**
 * TransformerSearch represents the model behind the search form of `common\models\Transformer`.
 */
class TransformerSearch extends Transformer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_organization', 'id_org', 'year_of_issue', 'power'], 'integer'],
            [['small_type', 'type', 'voltage', 'overall_dimensions', 'winding_connection', 'photo'], 'safe'],
            [['year_of_commissioning', 'loss_of_idle_speed', 'gross_weight', 'gross_oil_weight'], 'number'],
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
        if (Yii::$app->user->identity->type == 9) {
            $query = Transformer::find();
        } else {
            $query = $query = Transformer::find()->where(['id_org' => Yii::$app->user->identity->id_organization]);
        }
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
            'id_org' => $this->id_org,
            'year_of_issue' => $this->year_of_issue,
            'year_of_commissioning' => $this->year_of_commissioning,
            'power' => $this->power,
            'loss_of_idle_speed' => $this->loss_of_idle_speed,
            'gross_weight' => $this->gross_weight,
            'gross_oil_weight' => $this->gross_oil_weight,
        ]);

        $query->andFilterWhere(['like', 'small_type', $this->small_type])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'voltage', $this->voltage])
            ->andFilterWhere(['like', 'overall_dimensions', $this->overall_dimensions])
            ->andFilterWhere(['like', 'winding_connection', $this->winding_connection])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
