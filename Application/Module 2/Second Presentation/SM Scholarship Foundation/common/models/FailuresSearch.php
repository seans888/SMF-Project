<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Failures;

/**
 * FailuresSearch represents the model behind the search form about `common\models\Failures`.
 */
class FailuresSearch extends Failures
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fail_id', 'fail_units', 'fail_scholar_id', 'fail_school_id'], 'integer'],
            [['fail_subject', 'failures_scholar_lastName', 'failures_scholar_firstName', 'failures_scholar_middleName'], 'safe'],
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
        $query = Failures::find();

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
            'fail_id' => $this->fail_id,
            'fail_units' => $this->fail_units,
            'fail_scholar_id' => $this->fail_scholar_id,
            'fail_school_id' => $this->fail_school_id,
        ]);

        $query->andFilterWhere(['like', 'fail_subject', $this->fail_subject])
            ->andFilterWhere(['like', 'failures_scholar_lastName', $this->failures_scholar_lastName])
            ->andFilterWhere(['like', 'failures_scholar_firstName', $this->failures_scholar_firstName])
            ->andFilterWhere(['like', 'failures_scholar_middleName', $this->failures_scholar_middleName]);

        return $dataProvider;
    }
}
