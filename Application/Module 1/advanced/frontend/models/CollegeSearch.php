<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\College;

/**
 * CollegeSearch represents the model behind the search form about `frontend\models\College`.
 */
class CollegeSearch extends College
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_plan_to_enroll_in', 'course_plan_to_take1', 'course_plan_to_take2'], 'safe'],
            [['college_plan_id'], 'integer'],
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
        $query = College::find();

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
            'college_plan_id' => $this->college_plan_id,
        ]);

        $query->andFilterWhere(['like', 'school_plan_to_enroll_in', $this->school_plan_to_enroll_in])
            ->andFilterWhere(['like', 'course_plan_to_take1', $this->course_plan_to_take1])
            ->andFilterWhere(['like', 'course_plan_to_take2', $this->course_plan_to_take2]);

        return $dataProvider;
    }
}
