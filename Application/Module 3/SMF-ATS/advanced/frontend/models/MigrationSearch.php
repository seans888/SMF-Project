<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Migration;

/**
 * MigrationSearch represents the model behind the search form about `app\models\Migration`.
 */
class MigrationSearch extends Migration
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['migration_id', 'employee_employee_id', 'employee_user_user_id'], 'integer'],
            [['migration_year'], 'safe'],
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
        $query = Migration::find();

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
            'migration_id' => $this->migration_id,
            'employee_employee_id' => $this->employee_employee_id,
            'employee_user_user_id' => $this->employee_user_user_id,
        ]);

        $query->andFilterWhere(['like', 'migration_year', $this->migration_year]);

        return $dataProvider;
    }
}
