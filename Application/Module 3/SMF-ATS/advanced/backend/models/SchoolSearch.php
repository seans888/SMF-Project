<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\school;

/**
 * SchoolSearch represents the model behind the search form about `app\models\school`.
 */
class SchoolSearch extends school
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['school_name', 'school_area', 'school_address', 'school_email', 'school_contact'], 'safe'],
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
        $query = school::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'school_name', $this->school_name])
            ->andFilterWhere(['like', 'school_area', $this->school_area])
            ->andFilterWhere(['like', 'school_address', $this->school_address])
            ->andFilterWhere(['like', 'school_email', $this->school_email])
            ->andFilterWhere(['like', 'school_contact', $this->school_contact]);

        return $dataProvider;
    }
}
