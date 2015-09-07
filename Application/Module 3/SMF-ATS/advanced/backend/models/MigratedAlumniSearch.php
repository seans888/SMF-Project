<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\migratedalumni;

/**
 * MigratedAlumniSearch represents the model behind the search form about `app\models\migratedalumni`.
 */
class MigratedAlumniSearch extends migratedalumni
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['migalu_id', 'migalu_lastname', 'migalu_firstname', 'migalu_midinit', 'migalu_address', 'migalu_gender', 'migalu_school', 'migalu_course', 'migalu_email', 'migalu_contactno', 'migalu_remarks', 'migalu_area', 'migalu_office_local_no', 'migalu_year_graduated', 'migalu_status', 'migalu_cur_work', 'migalu_prev_work', 'migalu_achievements', 'migalu_company', 'migalu_legends'], 'safe'],
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
        $query = migratedalumni::find();

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
            'migalu_year_graduated' => $this->migalu_year_graduated,
        ]);

        $query->andFilterWhere(['like', 'migalu_id', $this->migalu_id])
            ->andFilterWhere(['like', 'migalu_lastname', $this->migalu_lastname])
            ->andFilterWhere(['like', 'migalu_firstname', $this->migalu_firstname])
            ->andFilterWhere(['like', 'migalu_midinit', $this->migalu_midinit])
            ->andFilterWhere(['like', 'migalu_address', $this->migalu_address])
            ->andFilterWhere(['like', 'migalu_gender', $this->migalu_gender])
            ->andFilterWhere(['like', 'migalu_school', $this->migalu_school])
            ->andFilterWhere(['like', 'migalu_course', $this->migalu_course])
            ->andFilterWhere(['like', 'migalu_email', $this->migalu_email])
            ->andFilterWhere(['like', 'migalu_contactno', $this->migalu_contactno])
            ->andFilterWhere(['like', 'migalu_remarks', $this->migalu_remarks])
            ->andFilterWhere(['like', 'migalu_area', $this->migalu_area])
            ->andFilterWhere(['like', 'migalu_office_local_no', $this->migalu_office_local_no])
            ->andFilterWhere(['like', 'migalu_status', $this->migalu_status])
            ->andFilterWhere(['like', 'migalu_cur_work', $this->migalu_cur_work])
            ->andFilterWhere(['like', 'migalu_prev_work', $this->migalu_prev_work])
            ->andFilterWhere(['like', 'migalu_achievements', $this->migalu_achievements])
            ->andFilterWhere(['like', 'migalu_company', $this->migalu_company])
            ->andFilterWhere(['like', 'migalu_legends', $this->migalu_legends]);

        return $dataProvider;
    }
}
