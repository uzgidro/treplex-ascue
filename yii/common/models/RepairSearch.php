<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Repair;
use Yii;

/**
 * RepairSearch represents the model behind the search form of `common\models\Repair`.
 */
class RepairSearch extends Repair
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_organization', 'aggregate', 'typy_repair', 'id_org'], 'integer'],
            [['name', 'first_date', 'last_date', 'files'], 'safe'],
            [['expenditure_of_funds'], 'number'],
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
            $query = Repair::find();
        } else {
            $query = Repair::find()->where(['id_org' => Yii::$app->user->identity->id_organization]);
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
            'aggregate' => $this->aggregate,
            'typy_repair' => $this->typy_repair,
            'first_date' => $this->first_date,
            'last_date' => $this->last_date,
            'expenditure_of_funds' => $this->expenditure_of_funds,
            'id_org' => $this->id_org,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'files', $this->files]);

        return $dataProvider;
    }
}
