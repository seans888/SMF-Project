<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ApprovedAllowance;

/**
 * ApprovedAllowanceSearch represents the model behind the search form about `common\models\ApprovedAllowance`.
 */
class ApprovedAllowanceSearch extends ApprovedAllowance
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['allowance_id', 'allowance_scholar_id', 'allowance_school_id'], 'integer'],
            [['allowance_amount'], 'number'],
            [['allowance_remark', 'allowance_payStatus', 'allowance_paidDate', 'approval_status', 'approved_by', 'approved_remark'], 'safe'],
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
        $query = ApprovedAllowance::find();

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
            'allowance_id' => $this->allowance_id,
            'allowance_amount' => $this->allowance_amount,
            'allowance_scholar_id' => $this->allowance_scholar_id,
            'allowance_school_id' => $this->allowance_school_id,
            'allowance_paidDate' => $this->allowance_paidDate,
        ]);

        $query->andFilterWhere(['like', 'allowance_remark', $this->allowance_remark])
            ->andFilterWhere(['like', 'allowance_payStatus', $this->allowance_payStatus])
            ->andFilterWhere(['like', 'approval_status', $this->approval_status])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by])
            ->andFilterWhere(['like', 'approved_remark', $this->approved_remark]);

        return $dataProvider;
    }
}
