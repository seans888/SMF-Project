<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tuition;

/**
 * TuitionSearch represents the model behind the search form about `frontend\models\Tuition`.
 */
class TuitionSearch extends Tuition
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuitionfee_id', 'tuitionfee_scholar_id', 'tuitionfee_amount'], 'integer'],
            [['tuitionfee_scholar_lastName', 'tuitionfee_scholar_firstName', 'tuitionfee_scholar_middleName', 'tuitionfee_dateOfEnrollment', 'tuitionfee_dateOfPayment', 'tuitionfee_paidStatus', 'tuitionfee_registrationForm'], 'safe'],
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
        $query = Tuition::find();

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

        $query->andFilterWhere(['like', 'tuitionfee_scholar_lastName', $this->tuitionfee_scholar_lastName])
            ->andFilterWhere(['like', 'tuitionfee_scholar_firstName', $this->tuitionfee_scholar_firstName])
            ->andFilterWhere(['like', 'tuitionfee_scholar_middleName', $this->tuitionfee_scholar_middleName])
            ->andFilterWhere(['like', 'tuitionfee_paidStatus', $this->tuitionfee_paidStatus])
            ->andFilterWhere(['like', 'tuitionfee_registrationForm', $this->tuitionfee_registrationForm]);

        return $dataProvider;
    }
}
