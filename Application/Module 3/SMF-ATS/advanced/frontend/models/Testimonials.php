<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property integer $testimonial_id
 * @property string $testimonial_name
 * @property string $testimonial_description
 * @property string $testiomonial_date
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 
	public $file;
	 
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
			[['file'],'file'],
            [['testiomonial_date'], 'safe'],
            [['testimonial_name','testimonee'], 'string', 'max' => 50],
            [['testimonial_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'testimonial_id' => 'Testimonial ID',
            'testimonial_name' => 'Testimonial Name',
            'testimonial_description' => 'Testimonial Description',
            'testiomonial_date' => 'Testiomonial Date',
			'file' => 'Testimonee',
        ];
    }
}
