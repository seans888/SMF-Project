<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Employee;

/**
 * EmployeeSearch represents the model behind the search form about `frontend\models\Employee`.
 */
class EmployeeSearch extends Employee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'user_id'], 'integer'],
            [['emp_firstname', 'emp_lastname', 'emp_midname', 'emp_position', 'emp_department'], 'safe'],
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
        $query = Employee::find();

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
            'employee_id' => $this->employee_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'emp_firstname', $this->emp_firstname])
            ->andFilterWhere(['like', 'emp_lastname', $this->emp_lastname])
            ->andFilterWhere(['like', 'emp_midname', $this->emp_midname])
            ->andFilterWhere(['like', 'emp_position', $this->emp_position])
            ->andFilterWhere(['like', 'emp_department', $this->emp_department]);

        return $dataProvider;
    }
}
