<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Email;

/**
 * EmailSearch represents the model behind the search form about `common\models\Email`.
 */
class EmailSearch extends Email
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_id', 'email_scholar_id'], 'integer'],
            [['subject', 'content'], 'safe'],
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
        $query = Email::find();

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
            'email_id' => $this->email_id,
            'email_scholar_id' => $this->email_scholar_id,
        ]);

        $query->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
