<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ApprovedRefunds;

/**
 * ApprovedRefundsSearch represents the model behind the search form about `common\models\ApprovedRefunds`.
 */
class ApprovedRefundsSearch extends ApprovedRefunds
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['refund_id', 'refund_scholar_id', 'refund_tuitionfee_id'], 'integer'],
            [['refund_amount', 'refund_smShare', 'refund_scholarShare'], 'number'],
            [['refund_description', 'refund_date', 'approval_status', 'approved_by', 'approved_remark'], 'safe'],
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
        $query = ApprovedRefunds::find();

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
            'refund_id' => $this->refund_id,
            'refund_amount' => $this->refund_amount,
            'refund_smShare' => $this->refund_smShare,
            'refund_scholarShare' => $this->refund_scholarShare,
            'refund_scholar_id' => $this->refund_scholar_id,
            'refund_tuitionfee_id' => $this->refund_tuitionfee_id,
            'refund_date' => $this->refund_date,
        ]);

        $query->andFilterWhere(['like', 'refund_description', $this->refund_description])
            ->andFilterWhere(['like', 'approval_status', $this->approval_status])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by])
            ->andFilterWhere(['like', 'approved_remark', $this->approved_remark]);

        return $dataProvider;
    }
}
