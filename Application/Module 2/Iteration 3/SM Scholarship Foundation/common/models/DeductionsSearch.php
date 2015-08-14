<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Deductions;

/**
 * DeductionsSearch represents the model behind the search form about `common\models\Deductions`.
 */
class DeductionsSearch extends Deductions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deduction_id', 'deduction_scholar_id'], 'integer'],
            [['deduction_date', 'deduction_remark'], 'safe'],
            [['deduction_amount'], 'number'],
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
        $query = Deductions::find();

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
            'deduction_id' => $this->deduction_id,
            'deduction_date' => $this->deduction_date,
            'deduction_amount' => $this->deduction_amount,
            'deduction_scholar_id' => $this->deduction_scholar_id,
        ]);

        $query->andFilterWhere(['like', 'deduction_remark', $this->deduction_remark]);

        return $dataProvider;
    }
}
