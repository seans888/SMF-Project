<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ApprovedUploadedforms;

/**
 * ApprovedUploadedformsSearch represents the model behind the search form about `common\models\ApprovedUploadedforms`.
 */
class ApprovedUploadedformsSearch extends ApprovedUploadedforms
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'uploaded_scholar_id'], 'integer'],
            [['uploadedForm', 'fileName', 'approval_status', 'approved_by', 'approved_remark'], 'safe'],
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
        $query = ApprovedUploadedforms::find();

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
            'uploaded_scholar_id' => $this->uploaded_scholar_id,
        ]);

        $query->andFilterWhere(['like', 'uploadedForm', $this->uploadedForm])
            ->andFilterWhere(['like', 'fileName', $this->fileName])
            ->andFilterWhere(['like', 'approval_status', $this->approval_status])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by])
            ->andFilterWhere(['like', 'approved_remark', $this->approved_remark]);

        return $dataProvider;
    }
}
