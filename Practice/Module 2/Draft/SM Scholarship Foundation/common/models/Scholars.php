<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "scholars".
 *
 * @property integer $scholar_id
 * @property string $scholar_first_name
 * @property string $scholar_last_name
 * @property string $scholar_middle_initial
 * @property integer $scholar_school_id
 * @property string $scholar_course
 * @property string $scholar_email
 *
 * @property Schools $scholarSchool
 */
class Scholars extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scholars';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_first_name', 'scholar_last_name', 'scholar_middle_initial', 'scholar_school_id', 'scholar_course', 'scholar_email'], 'required'],
            [['scholar_school_id'], 'integer'],
            [['scholar_first_name', 'scholar_last_name', 'scholar_middle_initial', 'scholar_course', 'scholar_email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'scholar_id' => 'Scholar ID',
            'scholar_first_name' => 'Scholar First Name',
            'scholar_last_name' => 'Scholar Last Name',
            'scholar_middle_initial' => 'Scholar Middle Initial',
            'scholar_school_id' => 'School Name',
            'scholar_course' => 'Scholar Course',
            'scholar_email' => 'Scholar Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarSchool()
    {
        return $this->hasOne(Schools::className(), ['school_id' => 'scholar_school_id']);
    }
}
