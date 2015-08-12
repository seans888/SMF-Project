<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ApprovedGrades;

/**
 * ApprovedGradesSearch represents the model behind the search form about `common\models\ApprovedGrades`.
 */
class ApprovedGradesSearch extends ApprovedGrades
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade_id', 'grade_schoolYear', 'grade_Term', 'grade_scholar_id', 'grade_value', 'equivalence_grade_rule', 'School_id'], 'integer'],
            [['grade_subject', 'approval_status', 'approved_by', 'approved_remark'], 'safe'],
            [['grade_units'], 'number'],
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
        $query = ApprovedGrades::find();

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
            'grade_id' => $this->grade_id,
            'grade_schoolYear' => $this->grade_schoolYear,
            'grade_Term' => $this->grade_Term,
            'grade_scholar_id' => $this->grade_scholar_id,
            'grade_units' => $this->grade_units,
            'grade_value' => $this->grade_value,
            'equivalence_grade_rule' => $this->equivalence_grade_rule,
            'School_id' => $this->School_id,
        ]);

        $query->andFilterWhere(['like', 'grade_subject', $this->grade_subject])
            ->andFilterWhere(['like', 'approval_status', $this->approval_status])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by])
            ->andFilterWhere(['like', 'approved_remark', $this->approved_remark]);

        return $dataProvider;
    }
}
