<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Grades;

/**
 * GradesSearch represents the model behind the search form about `common\models\Grades`.
 */
class GradesSearch extends Grades
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade_id', 'grade_scholar_id'], 'integer'],
            [['grade_school_year', 'grade_school_term', 'grade_value'], 'safe'],
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
        $query = Grades::find();

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
            'grade_scholar_id' => $this->grade_scholar_id,
        ]);

        $query->andFilterWhere(['like', 'grade_school_year', $this->grade_school_year])
            ->andFilterWhere(['like', 'grade_school_term', $this->grade_school_term])
            ->andFilterWhere(['like', 'grade_value', $this->grade_value]);

        return $dataProvider;
    }
}
