<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Grade;

/**
 * GradeSearch represents the model behind the search form about `common\models\Grade`.
 */
class GradeSearch extends Grade
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade_id', 'subject_subject_id', 'subject_scholar_scholar_id', 'subject_scholar_school_school_id', 'grade_school_year_start', 'grade_school_year_end'], 'integer'],
            [['firstName','middleName','lastName','grade_raw_grade', 'grade_approval_status', 'grade_approved_by'], 'safe'],
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
        $query = Grade::find();

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
            'grade_id' => $this->grade_id,
            'subject_subject_id' => $this->subject_subject_id,
            'subject_scholar_scholar_id' => $this->subject_scholar_scholar_id,
            'subject_scholar_school_school_id' => $this->subject_scholar_school_school_id,
            'grade_school_year_start' => $this->grade_school_year_start,
            'grade_school_year_end' => $this->grade_school_year_end,
        ]);

        $query->andFilterWhere(['like', 'grade_raw_grade', $this->grade_raw_grade])
            ->andFilterWhere(['like', 'grade_approval_status', $this->grade_approval_status])
            ->andFilterWhere(['like', 'grade_approved_by', $this->grade_approved_by])
			->andFilterWhere(['like', 'scholar.scholar_first_name', $this->firstName]);

        return $dataProvider;
    }
}
