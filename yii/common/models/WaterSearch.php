<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Water;
use Yii;
/**
 * WaterSearch represents the model behind the search form of `common\models\Water`.
 */
class WaterSearch extends Water
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_organization', 'id_org'], 'integer'],
            [['date'], 'safe'],
            [['up_bef', 'down_bef'], 'number'],
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
            $query = Water::find();
        } else {
            $query = Water::find()->where(['id_org' => Yii::$app->user->identity->id_organization]);
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
            'date' => $this->date,
            'up_bef' => $this->up_bef,
            'down_bef' => $this->down_bef,
            'id_org' => $this->id_org,
        ]);

        return $dataProvider;
    }
}
