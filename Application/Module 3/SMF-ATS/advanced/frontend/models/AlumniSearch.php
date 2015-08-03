<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumni;

/**
 * AlumniSearch represents the model behind the search form about `app\models\Alumni`.
 */
class AlumniSearch extends Alumni
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alumni_id', 'user_user_id', 'user_id'], 'integer'],
            [['alumni_firstname', 'alumni_lastname', 'alumni_midname', 'alumni_course', 'alumni_school', 'alumni_year_graduated', 'alumni_status', 'alumni_email', 'alumni_cur_work', 'alumni_prev_work', 'alumni_further_study'], 'safe'],
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
        $query = Alumni::find();

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
            'alumni_id' => $this->alumni_id,
            'alumni_year_graduated' => $this->alumni_year_graduated,
            'user_user_id' => $this->user_user_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'alumni_firstname', $this->alumni_firstname])
            ->andFilterWhere(['like', 'alumni_lastname', $this->alumni_lastname])
            ->andFilterWhere(['like', 'alumni_midname', $this->alumni_midname])
            ->andFilterWhere(['like', 'alumni_course', $this->alumni_course])
            ->andFilterWhere(['like', 'alumni_school', $this->alumni_school])
            ->andFilterWhere(['like', 'alumni_status', $this->alumni_status])
            ->andFilterWhere(['like', 'alumni_email', $this->alumni_email])
            ->andFilterWhere(['like', 'alumni_cur_work', $this->alumni_cur_work])
            ->andFilterWhere(['like', 'alumni_prev_work', $this->alumni_prev_work])
            ->andFilterWhere(['like', 'alumni_further_study', $this->alumni_further_study]);

        return $dataProvider;
    }
}
