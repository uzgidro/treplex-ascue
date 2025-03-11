<?php

namespace common\models;

use common\models\Informations;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use Yii;

/**
 * InformationsSearch represents the model behind the search form of `common\models\Informations`.
 */
class InformationsSearch extends Informations
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_organization', 'aggregate', 'year_aggregate', 'year_exp', 'year_turbin', 'year_turbin_exp', 'count_lopastey', 'id_org'], 'integer'],
            [['type_generation', 'phoro_aggregate', 'type_trubina', 'photo_turbin'], 'safe'],
            [['active_power', 'naprijeniya_generator', 'chastota', 'tok_statora', 'naprijeniya_rotora', 'tok_rotora', 'vrasheniya_generatora', 'kpd_generator', 'moshnost', 'raschyot_napor', 'oborot', 'kpd_turbina'], 'number'],
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
            $query = Informations::find();
        } else {
            $query = $query = Informations::find()->where(['id_org' => Yii::$app->user->identity->id_organization]);
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
            'year_aggregate' => $this->year_aggregate,
            'year_exp' => $this->year_exp,
            'active_power' => $this->active_power,
            'naprijeniya_generator' => $this->naprijeniya_generator,
            'chastota' => $this->chastota,
            'tok_statora' => $this->tok_statora,
            'naprijeniya_rotora' => $this->naprijeniya_rotora,
            'tok_rotora' => $this->tok_rotora,
            'vrasheniya_generatora' => $this->vrasheniya_generatora,
            'kpd_generator' => $this->kpd_generator,
            'year_turbin' => $this->year_turbin,
            'year_turbin_exp' => $this->year_turbin_exp,
            'moshnost' => $this->moshnost,
            'raschyot_napor' => $this->raschyot_napor,
            'oborot' => $this->oborot,
            'count_lopastey' => $this->count_lopastey,
            'kpd_turbina' => $this->kpd_turbina,
            'id_org' => $this->id_org,
        ]);

        $query->andFilterWhere(['like', 'type_generation', $this->type_generation])
            ->andFilterWhere(['like', 'phoro_aggregate', $this->phoro_aggregate])
            ->andFilterWhere(['like', 'type_trubina', $this->type_trubina])
            ->andFilterWhere(['like', 'photo_turbin', $this->photo_turbin]);

        return $dataProvider;
    }
}
