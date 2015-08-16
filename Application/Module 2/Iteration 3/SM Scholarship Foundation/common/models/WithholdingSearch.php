<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Withholding;

/**
 * WithholdingSearch represents the model behind the search form about `common\models\Withholding`.
 */
class WithholdingSearch extends Withholding
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['withholding_id', 'scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['scholar_allowance_allowance_area', 'withholding_start_date', 'withholding_end_date', 'withholding_remark'], 'safe'],
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
        $query = Withholding::find();

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
            'withholding_id' => $this->withholding_id,
            'scholar_scholar_id' => $this->scholar_scholar_id,
            'scholar_school_school_id' => $this->scholar_school_school_id,
            'withholding_start_date' => $this->withholding_start_date,
            'withholding_end_date' => $this->withholding_end_date,
        ]);

        $query->andFilterWhere(['like', 'scholar_allowance_allowance_area', $this->scholar_allowance_allowance_area])
            ->andFilterWhere(['like', 'withholding_remark', $this->withholding_remark]);

        return $dataProvider;
    }
}
