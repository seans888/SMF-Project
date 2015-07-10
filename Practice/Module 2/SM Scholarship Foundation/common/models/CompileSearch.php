<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Compile;

/**
 * CompileSearch represents the model behind the search form about `common\models\Compile`.
 */
class CompileSearch extends Compile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['compile_id', 'compile_scholar_id', 'compile_school_id', 'compile_tuitionfee_id', 'compile_grade_id'], 'integer'],
            [['compile_scholar_firstName', 'compile_scholar_lastName', 'compile_scholar_middleName', 'compile_school_name', 'compile_school_area', 'compile_pendingPaymentToSchool', 'compile_pendingPaymentToStudent'], 'safe'],
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
        $query = Compile::find();

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
            'compile_id' => $this->compile_id,
            'compile_scholar_id' => $this->compile_scholar_id,
            'compile_school_id' => $this->compile_school_id,
            'compile_tuitionfee_id' => $this->compile_tuitionfee_id,
            'compile_grade_id' => $this->compile_grade_id,
        ]);

        $query->andFilterWhere(['like', 'compile_scholar_firstName', $this->compile_scholar_firstName])
            ->andFilterWhere(['like', 'compile_scholar_lastName', $this->compile_scholar_lastName])
            ->andFilterWhere(['like', 'compile_scholar_middleName', $this->compile_scholar_middleName])
            ->andFilterWhere(['like', 'compile_school_name', $this->compile_school_name])
            ->andFilterWhere(['like', 'compile_school_area', $this->compile_school_area])
            ->andFilterWhere(['like', 'compile_pendingPaymentToSchool', $this->compile_pendingPaymentToSchool])
            ->andFilterWhere(['like', 'compile_pendingPaymentToStudent', $this->compile_pendingPaymentToStudent]);

        return $dataProvider;
    }
}
