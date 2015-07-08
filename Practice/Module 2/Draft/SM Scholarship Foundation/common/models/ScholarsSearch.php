<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Scholars;

/**
 * ScholarsSearch represents the model behind the search form about `common\models\Scholars`.
 */
class ScholarsSearch extends Scholars
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_id'], 'integer'],
            [['scholar_school_id','scholar_first_name', 'scholar_last_name', 'scholar_middle_initial', 'scholar_course', 'scholar_email'], 'safe'],
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
        $query = Scholars::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
		
		$query->joinWith('scholarSchool');
		
        $query->andFilterWhere([
            'scholar_id' => $this->scholar_id,
      //      'scholar_school_id' => $this->scholar_school_id,
        ]);

        $query->andFilterWhere(['like', 'scholar_first_name', $this->scholar_first_name])
            ->andFilterWhere(['like', 'scholar_last_name', $this->scholar_last_name])
            ->andFilterWhere(['like', 'scholar_middle_initial', $this->scholar_middle_initial])
            ->andFilterWhere(['like', 'scholar_course', $this->scholar_course])
            ->andFilterWhere(['like', 'scholar_email', $this->scholar_email])
			->andFilterWhere(['like', 'schools.school_name', $this->scholar_school_id]);

        return $dataProvider;
    }
}
