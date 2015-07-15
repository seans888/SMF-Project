<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Benefit;

/**
 * BenefitSearch represents the model behind the search form about `common\models\Benefit`.
 */
class BenefitSearch extends Benefit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['benefit_id', 'benefit_amount', 'benefit_scholarShare', 'benefit_tuitionfee_id', 'benefit_scholar_id', 'benefit_school_id'], 'integer'],
            [['benefit_scholar_lastName', 'benefit_scholar_firstName', 'benefit_scholar_middleName'], 'safe'],
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
        $query = Benefit::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('benefitScholar');
        
        $query->andFilterWhere([
            'benefit_id' => $this->benefit_id,
            'benefit_amount' => $this->benefit_amount,
            'benefit_scholarShare' => $this->benefit_scholarShare,
            'benefit_tuitionfee_id' => $this->benefit_tuitionfee_id,
            'benefit_scholar_id' => $this->benefit_scholar_id,
            'benefit_school_id' => $this->benefit_school_id,
        ]);

        $query->andFilterWhere(['like', 'scholars.scholar_lastName', $this->benefit_scholar_lastName])
            ->andFilterWhere(['like', 'scholars.scholar_firstName', $this->benefit_scholar_firstName])
            ->andFilterWhere(['like', 'scholars.scholar_middleName', $this->benefit_scholar_middleName]);

        return $dataProvider;
    }
}
