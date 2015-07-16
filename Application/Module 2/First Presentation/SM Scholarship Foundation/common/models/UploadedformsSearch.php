<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Uploadedforms;

/**
 * UploadedformsSearch represents the model behind the search form about `common\models\Uploadedforms`.
 */
class UploadedformsSearch extends Uploadedforms
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'scholar_id'], 'integer'],
            [['scholar_lastName', 'scholar_firstName', 'scholar_middleName', 'uploadedForm'], 'safe'],
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
        $query = Uploadedforms::find();

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
            'scholar_id' => $this->scholar_id,
        ]);

        $query->andFilterWhere(['like', 'scholar_lastName', $this->scholar_lastName])
            ->andFilterWhere(['like', 'scholar_firstName', $this->scholar_firstName])
            ->andFilterWhere(['like', 'scholar_middleName', $this->scholar_middleName])
            ->andFilterWhere(['like', 'uploadedForm', $this->uploadedForm]);

        return $dataProvider;
    }
}
