<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Logs;

/**
 * LogsSearch represents the model behind the search form about `app\models\Logs`.
 */
class LogsSearch extends Logs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logs_id', 'employee_employee_id', 'employee_user_user_id'], 'integer'],
            [['logs_descript', 'logs_date'], 'safe'],
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
        $query = Logs::find();

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
            'logs_id' => $this->logs_id,
            'logs_date' => $this->logs_date,
            'employee_employee_id' => $this->employee_employee_id,
            'employee_user_user_id' => $this->employee_user_user_id,
        ]);

        $query->andFilterWhere(['like', 'logs_descript', $this->logs_descript]);

        return $dataProvider;
    }
}
