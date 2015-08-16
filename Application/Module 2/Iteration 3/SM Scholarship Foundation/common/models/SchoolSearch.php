<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\School;

/**
 * SchoolSearch represents the model behind the search form about `common\models\School`.
 */
class SchoolSearch extends School
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id'], 'integer'],
            [['school_name', 'school_area', 'school_address', 'school_contact_emails', 'school_contact_numbers', 'school_vendor_code'], 'safe'],
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
        $query = School::find();

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
            ->andFilterWhere(['like', 'school_area', $this->school_area])
            ->andFilterWhere(['like', 'school_address', $this->school_address])
            ->andFilterWhere(['like', 'school_contact_emails', $this->school_contact_emails])
            ->andFilterWhere(['like', 'school_contact_numbers', $this->school_contact_numbers])
            ->andFilterWhere(['like', 'school_vendor_code', $this->school_vendor_code]);

        return $dataProvider;
    }
}
