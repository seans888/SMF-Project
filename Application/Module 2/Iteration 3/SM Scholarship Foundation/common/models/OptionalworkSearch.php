<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Optionalwork;

/**
 * OptionalworkSearch represents the model behind the search form about `common\models\Optionalwork`.
 */
class OptionalworkSearch extends Optionalwork
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['optionalwork_id', 'scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['optionalwork_location', 'optionalwork_start_date', 'optionalwork_end_date'], 'safe'],
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
        $query = Optionalwork::find();

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
            'optionalwork_id' => $this->optionalwork_id,
            'scholar_scholar_id' => $this->scholar_scholar_id,
            'scholar_school_school_id' => $this->scholar_school_school_id,
            'optionalwork_start_date' => $this->optionalwork_start_date,
            'optionalwork_end_date' => $this->optionalwork_end_date,
        ]);

        $query->andFilterWhere(['like', 'optionalwork_location', $this->optionalwork_location]);

        return $dataProvider;
    }
}