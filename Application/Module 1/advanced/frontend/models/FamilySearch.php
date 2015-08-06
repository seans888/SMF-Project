<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Family;

/**
 * FamilySearch represents the model behind the search form about `frontend\models\Family`.
 */
class FamilySearch extends Family
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fam_background_id', 'father_phonenum', 'mother_phonenum', 'sibling1_age', 'sibling1_grade_or_year', 'sibling2_age', 'sibling2_grade_or_year'], 'integer'],
            [['name_of_father', 'father_occupation', 'father_company_address', 'father_birthdate', 'name_of_mother', 'mother_occupation', 'mother_company_address', 'mother_birthdate', 'sibling1_name', 'sibling1_school', 'sibling1_employed', 'sibling1_married', 'sibling2_name', 'sibling2_school', 'sibling2_employed', 'sibling2_married', 'income_per_year_in_words'], 'safe'],
            [['income_per_year'], 'number'],
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
        $query = Family::find();

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
            'fam_background_id' => $this->fam_background_id,
            'father_phonenum' => $this->father_phonenum,
            'father_birthdate' => $this->father_birthdate,
            'mother_phonenum' => $this->mother_phonenum,
            'mother_birthdate' => $this->mother_birthdate,
            'sibling1_age' => $this->sibling1_age,
            'sibling1_grade_or_year' => $this->sibling1_grade_or_year,
            'sibling2_age' => $this->sibling2_age,
            'sibling2_grade_or_year' => $this->sibling2_grade_or_year,
            'income_per_year' => $this->income_per_year,
        ]);

        $query->andFilterWhere(['like', 'name_of_father', $this->name_of_father])
            ->andFilterWhere(['like', 'father_occupation', $this->father_occupation])
            ->andFilterWhere(['like', 'father_company_address', $this->father_company_address])
            ->andFilterWhere(['like', 'name_of_mother', $this->name_of_mother])
            ->andFilterWhere(['like', 'mother_occupation', $this->mother_occupation])
            ->andFilterWhere(['like', 'mother_company_address', $this->mother_company_address])
            ->andFilterWhere(['like', 'sibling1_name', $this->sibling1_name])
            ->andFilterWhere(['like', 'sibling1_school', $this->sibling1_school])
            ->andFilterWhere(['like', 'sibling1_employed', $this->sibling1_employed])
            ->andFilterWhere(['like', 'sibling1_married', $this->sibling1_married])
            ->andFilterWhere(['like', 'sibling2_name', $this->sibling2_name])
            ->andFilterWhere(['like', 'sibling2_school', $this->sibling2_school])
            ->andFilterWhere(['like', 'sibling2_employed', $this->sibling2_employed])
            ->andFilterWhere(['like', 'sibling2_married', $this->sibling2_married])
            ->andFilterWhere(['like', 'income_per_year_in_words', $this->income_per_year_in_words]);

        return $dataProvider;
    }
}
