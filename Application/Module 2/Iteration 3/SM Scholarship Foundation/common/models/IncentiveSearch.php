<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Incentive;

/**
 * IncentiveSearch represents the model behind the search form about `common\models\Incentive`.
 */
class IncentiveSearch extends Incentive
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['incentive_id', 'scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['scholar_allowance_allowance_area', 'incentive_remark', 'incentive_date'], 'safe'],
            [['incentive_amount'], 'number'],
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
        $query = Incentive::find();

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
            'incentive_id' => $this->incentive_id,
            'scholar_scholar_id' => $this->scholar_scholar_id,
            'scholar_school_school_id' => $this->scholar_school_school_id,
            'incentive_amount' => $this->incentive_amount,
            'incentive_date' => $this->incentive_date,
        ]);

        $query->andFilterWhere(['like', 'scholar_allowance_allowance_area', $this->scholar_allowance_allowance_area])
            ->andFilterWhere(['like', 'incentive_remark', $this->incentive_remark]);

        return $dataProvider;
    }
}
