<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Optionalwork;

/**
 * OptionalworkSearch represents the model behind the search form about `common\models\Optionalwork`.
 */
class OptionalworkSearch extends Optionalwork
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['optionalwork_id', 'scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['firstName','middleName','lastName','optionalwork_location', 'optionalwork_start_date', 'optionalwork_end_date', 'optional_work_company_name'], 'safe'],
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
        $query = Optionalwork::find();

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
            'optionalwork_id' => $this->optionalwork_id,
            'scholar_scholar_id' => $this->scholar_scholar_id,
            'scholar_school_school_id' => $this->scholar_school_school_id,
            'optionalwork_start_date' => $this->optionalwork_start_date,
            'optionalwork_end_date' => $this->optionalwork_end_date,
        ]);

        $query->andFilterWhere(['like', 'optionalwork_location', $this->optionalwork_location])
            ->andFilterWhere(['like', 'optional_work_company_name', $this->optional_work_company_name])
			->andFilterWhere(['like', 'scholar.scholar_first_name', $this->firstName])
			->andFilterWhere(['like', 'scholar.scholar_middle_name', $this->middleName])
			->andFilterWhere(['like', 'scholar.scholar_last_name', $this->lastName]);

        return $dataProvider;
    }
}
