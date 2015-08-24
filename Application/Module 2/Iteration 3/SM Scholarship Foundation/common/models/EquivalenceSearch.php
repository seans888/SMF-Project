<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Equivalence;

/**
 * EquivalenceSearch represents the model behind the search form about `common\models\Equivalence`.
 */
class EquivalenceSearch extends Equivalence
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['equivalence_id', 'school_school_id'], 'integer'],
            [['equivalence_numerical_grade', 'equivalence_percentile_lower', 'equivalence_percentile_upper'], 'number'],
            [['equivalence_letter_grade', 'equivalence_school_rating', 'equivalence_foundation_rating'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Equivalence::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'equivalence_id' => $this->equivalence_id,
            'school_school_id' => $this->school_school_id,
            'equivalence_numerical_grade' => $this->equivalence_numerical_grade,
            'equivalence_percentile_lower' => $this->equivalence_percentile_lower,
            'equivalence_percentile_upper' => $this->equivalence_percentile_upper,
        ]);

        $query->andFilterWhere(['like', 'equivalence_letter_grade', $this->equivalence_letter_grade])
            ->andFilterWhere(['like', 'equivalence_school_rating', $this->equivalence_school_rating])
            ->andFilterWhere(['like', 'equivalence_foundation_rating', $this->equivalence_foundation_rating]);

        return $dataProvider;
    }
}
