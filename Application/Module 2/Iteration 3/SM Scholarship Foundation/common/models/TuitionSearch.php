<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tuition;

/**
 * TuitionSearch represents the model behind the search form about `common\models\Tuition`.
 */
class TuitionSearch extends Tuition
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuition_id', 'scholar_scholar_id', 'scholar_school_school_id', 'tuition_term', 'tuition_school_year_start', 'tuition_school_year_end'], 'integer'],
            [['firstName','middleName','lastName','tuition_enrollment_date', 'tuition_paid_status', 'tuition_payment_date'], 'safe'],
            [['tuition_amount'], 'number'],
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
        $query = Tuition::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

		$query->joinWith('scholarScholar');
		
        $query->andFilterWhere([
            'tuition_id' => $this->tuition_id,
            'scholar_scholar_id' => $this->scholar_scholar_id,
            'scholar_school_school_id' => $this->scholar_school_school_id,
            'tuition_term' => $this->tuition_term,
            'tuition_school_year_start' => $this->tuition_school_year_start,
            'tuition_school_year_end' => $this->tuition_school_year_end,
            'tuition_enrollment_date' => $this->tuition_enrollment_date,
            'tuition_amount' => $this->tuition_amount,
            'tuition_payment_date' => $this->tuition_payment_date,
        ]);

        $query->andFilterWhere(['like', 'tuition_paid_status', $this->tuition_paid_status])
		->andFilterWhere(['like', 'scholar.scholar_first_name', $this->firstName])
		->andFilterWhere(['like', 'scholar.scholar_middle_name', $this->middleName])
		->andFilterWhere(['like', 'scholar.scholar_last_name', $this->lastName]);

        return $dataProvider;
    }
}
