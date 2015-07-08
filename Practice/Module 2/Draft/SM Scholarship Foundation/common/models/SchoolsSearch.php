<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Schools;

/**
 * SchoolsSearch represents the model behind the search form about `common\models\Schools`.
 */
class SchoolsSearch extends Schools
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id'], 'integer'],
            [['school_name', 'school_email', 'school_address'], 'safe'],
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
        $query = Schools::find();

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
            'school_id' => $this->school_id,
        ]);

        $query->andFilterWhere(['like', 'school_name', $this->school_name])
            ->andFilterWhere(['like', 'school_email', $this->school_email])
            ->andFilterWhere(['like', 'school_address', $this->school_address]);

        return $dataProvider;
    }
}
