<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Switchs;
use Yii;

/**
 * SwitchsSearch represents the model behind the search form of `common\models\Switchs`.
 */
class SwitchsSearch extends Switchs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_organization', 'id_org', 'id_switch', 'year_of_issue', 'year_of_commissioning'], 'integer'],
            [['small', 'type', 'overall_dimensions', 'photo'], 'safe'],
            [['nominal_current', 'nominal_voltage', 'gross_weight', 'gross_oil_weight'], 'number'],
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
            $query = Switchs::find();
        } else {
            $query = $query = Switchs::find()->where(['id_org' => Yii::$app->user->identity->id_organization]);
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
            'id_switch' => $this->id_switch,
            'year_of_issue' => $this->year_of_issue,
            'year_of_commissioning' => $this->year_of_commissioning,
            'nominal_current' => $this->nominal_current,
            'nominal_voltage' => $this->nominal_voltage,
            'gross_weight' => $this->gross_weight,
            'gross_oil_weight' => $this->gross_oil_weight,
        ]);

        $query->andFilterWhere(['like', 'small', $this->small])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'overall_dimensions', $this->overall_dimensions])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
