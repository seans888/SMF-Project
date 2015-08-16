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
            [['allowance_area'], 'safe'],
            [['allowance_amount'], 'number'],
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

        $query->andFilterWhere([
            'allowance_amount' => $this->allowance_amount,
        ]);

        $query->andFilterWhere(['like', 'allowance_area', $this->allowance_area]);

        return $dataProvider;
    }
}
