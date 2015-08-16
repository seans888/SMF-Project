<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Refunds;

/**
 * RefundsSearch represents the model behind the search form about `common\models\Refunds`.
 */
class RefundsSearch extends Refunds
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['refund_id', 'refund_scholar_id', 'refund_tuitionfee_id'], 'integer'],
            [['refund_amount', 'refund_smShare', 'refund_scholarShare'], 'number'],
            [['refund_description', 'refund_date'], 'safe'],
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
        $query = Refunds::find();

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

        $query->andFilterWhere(['like', 'refund_description', $this->refund_description]);

        return $dataProvider;
    }
}
