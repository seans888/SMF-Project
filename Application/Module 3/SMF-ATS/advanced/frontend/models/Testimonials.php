<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property integer $id
 * @property string $testimonial_name
 * @property string $testimonial_description
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['testimonial_name', 'testimonial_description'], 'required'],
            [['testimonial_name', 'testimonial_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'testimonial_name' => 'Testimonial Name',
            'testimonial_description' => 'Testimonial Description',
        ];
    }
}
