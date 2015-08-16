<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Scholar;

/**
 * ScholarSearch represents the model behind the search form about `common\models\Scholar`.
 */
class ScholarSearch extends Scholar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_id', 'school_school_id', 'scholar_year_level'], 'integer'],
            [['scholar_first_name', 'scholar_middle_name', 'scholar_last_name', 'scholar_gender', 'scholar_address', 'scholar_course', 'scholar_graduate_status', 'scholar_contact_email', 'scholar_contact_number', 'scholar_allowance_status', 'scholar_cash_card_number', 'scholar_type', 'scholar_sponsor', 'allowance_allowance_area'], 'safe'],
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
        $query = Scholar::find();

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
            'scholar_id' => $this->scholar_id,
            'school_school_id' => $this->school_school_id,
            'scholar_year_level' => $this->scholar_year_level,
        ]);

        $query->andFilterWhere(['like', 'scholar_first_name', $this->scholar_first_name])
            ->andFilterWhere(['like', 'scholar_middle_name', $this->scholar_middle_name])
            ->andFilterWhere(['like', 'scholar_last_name', $this->scholar_last_name])
            ->andFilterWhere(['like', 'scholar_gender', $this->scholar_gender])
            ->andFilterWhere(['like', 'scholar_address', $this->scholar_address])
            ->andFilterWhere(['like', 'scholar_course', $this->scholar_course])
            ->andFilterWhere(['like', 'scholar_graduate_status', $this->scholar_graduate_status])
            ->andFilterWhere(['like', 'scholar_contact_email', $this->scholar_contact_email])
            ->andFilterWhere(['like', 'scholar_contact_number', $this->scholar_contact_number])
            ->andFilterWhere(['like', 'scholar_allowance_status', $this->scholar_allowance_status])
            ->andFilterWhere(['like', 'scholar_cash_card_number', $this->scholar_cash_card_number])
            ->andFilterWhere(['like', 'scholar_type', $this->scholar_type])
            ->andFilterWhere(['like', 'scholar_sponsor', $this->scholar_sponsor])
            ->andFilterWhere(['like', 'allowance_allowance_area', $this->allowance_allowance_area]);

        return $dataProvider;
    }
}
