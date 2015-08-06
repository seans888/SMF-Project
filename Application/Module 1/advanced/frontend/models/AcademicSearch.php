<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Academic;

/**
 * AcademicSearch represents the model behind the search form about `frontend\models\Academic`.
 */
class AcademicSearch extends Academic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Public_high_school_graduating_from', 'complete_school_address', 'principal_fullname', 'organization', 'position_held'], 'safe'],
            [['section_no', 'academic_id'], 'integer'],
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
        $query = Academic::find();

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
            'section_no' => $this->section_no,
            'academic_id' => $this->academic_id,
        ]);

        $query->andFilterWhere(['like', 'Public_high_school_graduating_from', $this->Public_high_school_graduating_from])
            ->andFilterWhere(['like', 'complete_school_address', $this->complete_school_address])
            ->andFilterWhere(['like', 'principal_fullname', $this->principal_fullname])
            ->andFilterWhere(['like', 'organization', $this->organization])
            ->andFilterWhere(['like', 'position_held', $this->position_held]);

        return $dataProvider;
    }
}
