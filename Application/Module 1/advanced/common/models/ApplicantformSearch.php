<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Applicantform;

/**
 * ApplicantformSearch represents the model behind the search form about `common\models\Applicantform`.
 */
class ApplicantformSearch extends Applicantform
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'city_address', 'telephone_no', 'cellphone_no', 'height', 'weight', 'telephone_numbers'], 'integer'],
            [['last_name', 'first_name', 'middle_name', 'email', 'birthday', 'status', 'sex', 'birth_place', 'nationality', 'religion', 'name_of_public_high_school_graduating_from', 'section', 'complete_address_of_school', 'name_of_principal', 'org_1', 'position_held1', 'school_you_want_to_enroll_in', 'course_you_plan_to_take'], 'safe'],
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
        $query = Applicantform::find();

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
            'city_address' => $this->city_address,
            'telephone_no' => $this->telephone_no,
            'cellphone_no' => $this->cellphone_no,
            'birthday' => $this->birthday,
            'height' => $this->height,
            'weight' => $this->weight,
            'telephone_numbers' => $this->telephone_numbers,
        ]);

        $query->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'name_of_public_high_school_graduating_from', $this->name_of_public_high_school_graduating_from])
            ->andFilterWhere(['like', 'section', $this->section])
            ->andFilterWhere(['like', 'complete_address_of_school', $this->complete_address_of_school])
            ->andFilterWhere(['like', 'name_of_principal', $this->name_of_principal])
            ->andFilterWhere(['like', 'org_1', $this->org_1])
            ->andFilterWhere(['like', 'position_held1', $this->position_held1])
            ->andFilterWhere(['like', 'school_you_want_to_enroll_in', $this->school_you_want_to_enroll_in])
            ->andFilterWhere(['like', 'course_you_plan_to_take', $this->course_you_plan_to_take]);

        return $dataProvider;
    }
}
