<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Deduction;

/**
 * DeductionSearch represents the model behind the search form about `common\models\Deduction`.
 */
class DeductionSearch extends Deduction
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deduction_id', 'scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['firstName','middleName','lastName','deduction_date', 'deduction_remark'], 'safe'],
            [['deduction_amount'], 'number'],
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
        $query = Deduction::find();

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
            'deduction_id' => $this->deduction_id,
            'scholar_scholar_id' => $this->scholar_scholar_id,
            'scholar_school_school_id' => $this->scholar_school_school_id,
            'deduction_date' => $this->deduction_date,
            'deduction_amount' => $this->deduction_amount,
        ]);

        $query->andFilterWhere(['like', 'deduction_remark', $this->deduction_remark])
			->andFilterWhere(['like', 'scholar.scholar_first_name', $this->firstName])
			->andFilterWhere(['like', 'scholar.scholar_middle_name', $this->middleName])
			->andFilterWhere(['like', 'scholar.scholar_last_name', $this->lastName]);

        return $dataProvider;
    }
}
