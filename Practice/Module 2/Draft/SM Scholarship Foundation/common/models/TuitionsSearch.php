<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tuitions;

/**
 * TuitionsSearch represents the model behind the search form about `common\models\Tuitions`.
 */
class TuitionsSearch extends Tuitions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuition_id', 'tuition_scholar_id'], 'integer'],
            [['tuition_full_amount'], 'safe'],
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
        $query = Tuitions::find();

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
            'tuition_id' => $this->tuition_id,
            'tuition_scholar_id' => $this->tuition_scholar_id,
        ]);

        $query->andFilterWhere(['like', 'tuition_full_amount', $this->tuition_full_amount]);

        return $dataProvider;
    }
}
