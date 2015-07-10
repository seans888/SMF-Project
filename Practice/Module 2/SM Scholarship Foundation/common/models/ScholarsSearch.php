<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Scholars;

/**
 * ScholarsSearch represents the model behind the search form about `common\models\Scholars`.
 */
class ScholarsSearch extends Scholars
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_id', 'scholar_school_id', 'scholar_yearLevel', 'scholar_contactNum', 'scholar_cashCardNum'], 'integer'],
            [['scholar_firstName', 'scholar_lastName', 'scholar_middleName', 'scholar_gender', 'scholar_address', 'scholar_course', 'scholar_email'], 'safe'],
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
        $query = Scholars::find();

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
            'scholar_id' => $this->scholar_id,
            'scholar_school_id' => $this->scholar_school_id,
            'scholar_yearLevel' => $this->scholar_yearLevel,
            'scholar_contactNum' => $this->scholar_contactNum,
            'scholar_cashCardNum' => $this->scholar_cashCardNum,
        ]);

        $query->andFilterWhere(['like', 'scholar_firstName', $this->scholar_firstName])
            ->andFilterWhere(['like', 'scholar_lastName', $this->scholar_lastName])
            ->andFilterWhere(['like', 'scholar_middleName', $this->scholar_middleName])
            ->andFilterWhere(['like', 'scholar_gender', $this->scholar_gender])
            ->andFilterWhere(['like', 'scholar_address', $this->scholar_address])
            ->andFilterWhere(['like', 'scholar_course', $this->scholar_course])
            ->andFilterWhere(['like', 'scholar_email', $this->scholar_email]);

        return $dataProvider;
    }
}
