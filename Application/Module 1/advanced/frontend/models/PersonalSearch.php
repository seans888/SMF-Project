<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Personal;

/**
 * PersonalSearch represents the model behind the search form about `frontend\models\Personal`.
 */
class PersonalSearch extends Personal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'middle_name', 'city_address', 'date_of_birth', 'status', 'sex', 'place_of_birth', 'nationality', 'religion'], 'safe'],
            [['cellphone_no', 'age', 'personal_id'], 'integer'],
            [['height', 'weight'], 'number'],
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
        $query = Personal::find();

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
            'cellphone_no' => $this->cellphone_no,
            'date_of_birth' => $this->date_of_birth,
            'age' => $this->age,
            'height' => $this->height,
            'weight' => $this->weight,
            'personal_id' => $this->personal_id,
        ]);

        $query->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'city_address', $this->city_address])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'place_of_birth', $this->place_of_birth])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'religion', $this->religion]);

        return $dataProvider;
    }
}
