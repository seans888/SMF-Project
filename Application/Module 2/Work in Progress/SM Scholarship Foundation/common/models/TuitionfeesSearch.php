<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tuitionfees;

/**
 * TuitionfeesSearch represents the model behind the search form about `common\models\Tuitionfees`.
 */
class TuitionfeesSearch extends Tuitionfees
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuitionfee_id', 'tuitionfee_amount','tuitionfee_scholar_id'], 'integer'],
            [['tuitionfee_scholar_lastName', 'tuitionfee_scholar_firstName', 'tuitionfee_scholar_middleName', 'tuitionfee_dateOfEnrollment', 'tuitionfee_dateOfPayment', 'tuitionfee_paidStatus'], 'safe'],
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
        $query = Tuitionfees::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
		
		$query->joinWith('tuitionfeeScholar');
		
        $query->andFilterWhere([
            'tuitionfee_id' => $this->tuitionfee_id,
            'tuitionfee_scholar_id' => $this->tuitionfee_scholar_id,
            'tuitionfee_amount' => $this->tuitionfee_amount,
            'tuitionfee_dateOfEnrollment' => $this->tuitionfee_dateOfEnrollment,
            'tuitionfee_dateOfPayment' => $this->tuitionfee_dateOfPayment,
        ]);

        $query->andFilterWhere(['like', 'scholars.scholar_lastName', $this->tuitionfee_scholar_lastName])
            ->andFilterWhere(['like', 'scholars.scholar_firstName', $this->tuitionfee_scholar_firstName])
            ->andFilterWhere(['like', 'scholars.scholar_middleName', $this->tuitionfee_scholar_middleName])
            ->andFilterWhere(['like', 'tuitionfee_paidStatus', $this->tuitionfee_paidStatus]);

        return $dataProvider;
    }
}
