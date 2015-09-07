<?php

namespace backend\models;

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
            [['id', 'user_id'], 'integer'],
            [['alumni_id', 'alumni_firstname', 'alumni_lastname', 'alumni_midinit', 'alumni_gender', 'alumni_address', 'alumni_contactno', 'alumni_remarks', 'alumni_office_local_no', 'alumni_email', 'alumni_year_graduated', 'alumni_course', 'alumni_school', 'alumni_company', 'alumni_status', 'alumni_area', 'alumni_cur_work', 'alumni_prev_work', 'alumni_further_study', 'alumni_achievements', 'alumni_legends'], 'safe'],
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
            'id' => $this->id,
            'alumni_year_graduated' => $this->alumni_year_graduated,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'alumni_id', $this->alumni_id])
            ->andFilterWhere(['like', 'alumni_firstname', $this->alumni_firstname])
            ->andFilterWhere(['like', 'alumni_lastname', $this->alumni_lastname])
            ->andFilterWhere(['like', 'alumni_midinit', $this->alumni_midinit])
            ->andFilterWhere(['like', 'alumni_gender', $this->alumni_gender])
            ->andFilterWhere(['like', 'alumni_address', $this->alumni_address])
            ->andFilterWhere(['like', 'alumni_contactno', $this->alumni_contactno])
            ->andFilterWhere(['like', 'alumni_remarks', $this->alumni_remarks])
            ->andFilterWhere(['like', 'alumni_office_local_no', $this->alumni_office_local_no])
            ->andFilterWhere(['like', 'alumni_email', $this->alumni_email])
            ->andFilterWhere(['like', 'alumni_course', $this->alumni_course])
            ->andFilterWhere(['like', 'alumni_school', $this->alumni_school])
            ->andFilterWhere(['like', 'alumni_company', $this->alumni_company])
            ->andFilterWhere(['like', 'alumni_status', $this->alumni_status])
            ->andFilterWhere(['like', 'alumni_area', $this->alumni_area])
            ->andFilterWhere(['like', 'alumni_cur_work', $this->alumni_cur_work])
            ->andFilterWhere(['like', 'alumni_prev_work', $this->alumni_prev_work])
            ->andFilterWhere(['like', 'alumni_further_study', $this->alumni_further_study])
            ->andFilterWhere(['like', 'alumni_achievements', $this->alumni_achievements])
            ->andFilterWhere(['like', 'alumni_legends', $this->alumni_legends]);

        return $dataProvider;
    }
}
