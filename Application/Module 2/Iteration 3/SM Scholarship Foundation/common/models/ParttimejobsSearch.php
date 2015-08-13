<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Parttimejobs;

/**
 * ParttimejobsSearch represents the model behind the search form about `common\models\Parttimejobs`.
 */
class ParttimejobsSearch extends Parttimejobs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'job_scholar_id'], 'integer'],
            [['job_location', 'job_startDate', 'job_endDate', 'job_description'], 'safe'],
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
        $query = Parttimejobs::find();

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
            'job_scholar_id' => $this->job_scholar_id,
            'job_startDate' => $this->job_startDate,
            'job_endDate' => $this->job_endDate,
        ]);

        $query->andFilterWhere(['like', 'job_location', $this->job_location])
            ->andFilterWhere(['like', 'job_description', $this->job_description]);

        return $dataProvider;
    }
	
}
