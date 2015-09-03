<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Subject;

/**
 * SubjectSearch represents the model behind the search form about `common\models\Subject`.
 */
class SubjectSearch extends Subject
{
    /**
     * @inheritdoc
     */
	
    public function rules()
    {
        return [
            [['subject_id', 'scholar_scholar_id', 'scholar_school_school_id', 'subject_term'], 'integer'],
            [['firstName','middleName','lastName','subject_name', 'subject_taken_status', 'subject_approval_status', 'subject_approved_by'], 'safe'],
            [['subject_units','rawGrade'], 'number'],
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
        $query = Subject::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
		$query->joinWith('grades');
        $query->joinWith('scholarScholar');
		
		$query->andFilterWhere([
            'subject_id' => $this->subject_id,
            'scholar_scholar_id' => $this->scholar_scholar_id,
            'scholar_school_school_id' => $this->scholar_school_school_id,
            'subject_term' => $this->subject_term,
            'subject_units' => $this->subject_units,
        ]);

        $query->andFilterWhere(['like', 'subject_name', $this->subject_name])
            ->andFilterWhere(['like', 'subject_taken_status', $this->subject_taken_status])
            ->andFilterWhere(['like', 'subject_approval_status', $this->subject_approval_status])
            ->andFilterWhere(['like', 'subject_approved_by', $this->subject_approved_by])
			->andFilterWhere(['like', 'grades.grade_raw_grade', $this->rawGrade])
			->andFilterWhere(['like', 'scholar.scholar_first_name', $this->firstName])
			->andFilterWhere(['like', 'scholar.scholar_middle_name', $this->middleName])
			->andFilterWhere(['like', 'scholar.scholar_last_name', $this->lastName]);
			
	

        return $dataProvider;
    }
}
