<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Testimonials;

/**
 * TestimonialsSearch represents the model behind the search form about `app\models\Testimonials`.
 */
class TestimonialsSearch extends Testimonials
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['testimonial_id'], 'integer'],
            [['testimonial_name', 'testimonial_description', 'testiomonial_date'], 'safe'],
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
        $query = Testimonials::find();

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
            'testimonial_id' => $this->testimonial_id,
            'testiomonial_date' => $this->testiomonial_date,
        ]);

        $query->andFilterWhere(['like', 'testimonial_name', $this->testimonial_name])
            ->andFilterWhere(['like', 'testimonial_description', $this->testimonial_description]);

        return $dataProvider;
    }
}
