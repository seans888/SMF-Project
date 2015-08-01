<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Allowance;

/**
 * AllowanceSearch represents the model behind the search form about `common\models\Allowance`.
 */
class AllowanceSearch extends Allowance
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['allowance_id', 'allowance_amount', 'allowance_scholar_id', 'allowance_school_id', 'benefit_allowance_id'], 'integer'],
            [['allowance_remark', 'allowance_payStatus', 'allowance_scholar_lastName', 'allowance_scholar_firstName', 'allowance_scholar_middleName', 'allowance_paidDate'], 'safe'],
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
        $query = Allowance::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('allowanceScholar');
        
        $query->andFilterWhere([
            'allowance_id' => $this->allowance_id,
            'allowance_amount' => $this->allowance_amount,
            'allowance_scholar_id' => $this->allowance_scholar_id,
            'allowance_school_id' => $this->allowance_school_id,
            'benefit_allowance_id' => $this->benefit_allowance_id,
            'allowance_paidDate' => $this->allowance_paidDate,
        ]);

        $query->andFilterWhere(['like', 'allowance_remark', $this->allowance_remark])
            ->andFilterWhere(['like', 'allowance_payStatus', $this->allowance_payStatus])
            ->andFilterWhere(['like', 'scholars.scholar_lastName', $this->allowance_scholar_lastName])
            ->andFilterWhere(['like', 'scholars.scholar_firstName', $this->allowance_scholar_firstName])
            ->andFilterWhere(['like', 'scholars.scholar_middleName', $this->allowance_scholar_middleName]);

        return $dataProvider;
    }
}
