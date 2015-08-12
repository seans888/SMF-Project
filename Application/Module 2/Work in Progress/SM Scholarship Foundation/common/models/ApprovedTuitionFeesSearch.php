<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ApprovedTuitionFees;

/**
 * ApprovedTuitionFeesSearch represents the model behind the search form about `common\models\ApprovedTuitionFees`.
 */
class ApprovedTuitionFeesSearch extends ApprovedTuitionFees
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuitionfee_id', 'tuitionfee_scholar_id'], 'integer'],
            [['tuitionfee_term', 'tuitionfee_dateOfEnrollment', 'tuitionfee_dateOfPayment', 'tuitionfee_paidStatus', 'approval_status', 'approved_by'], 'safe'],
            [['tuitionfee_amount'], 'number'],
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
        $query = ApprovedTuitionFees::find();

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
            'tuitionfee_id' => $this->tuitionfee_id,
            'tuitionfee_scholar_id' => $this->tuitionfee_scholar_id,
            'tuitionfee_amount' => $this->tuitionfee_amount,
            'tuitionfee_dateOfEnrollment' => $this->tuitionfee_dateOfEnrollment,
            'tuitionfee_dateOfPayment' => $this->tuitionfee_dateOfPayment,
        ]);

        $query->andFilterWhere(['like', 'tuitionfee_term', $this->tuitionfee_term])
            ->andFilterWhere(['like', 'tuitionfee_paidStatus', $this->tuitionfee_paidStatus])
            ->andFilterWhere(['like', 'approval_status', $this->approval_status])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by]);

        return $dataProvider;
    }
}
