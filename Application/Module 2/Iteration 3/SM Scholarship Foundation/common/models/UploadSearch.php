<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Upload;

/**
 * UploadSearch represents the model behind the search form about `common\models\Upload`.
 */
class UploadSearch extends Upload
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['upload_id', 'scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['upload_form', 'upload_file_name'], 'safe'],
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
        $query = Upload::find();

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
            'upload_id' => $this->upload_id,
            'scholar_scholar_id' => $this->scholar_scholar_id,
            'scholar_school_school_id' => $this->scholar_school_school_id,
        ]);

        $query->andFilterWhere(['like', 'upload_form', $this->upload_form])
            ->andFilterWhere(['like', 'upload_file_name', $this->upload_file_name]);

        return $dataProvider;
    }
}
