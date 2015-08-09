<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "college".
 *
 * @property string $school_plan_to_enroll_in
 * @property string $course_plan_to_take1
 * @property string $course_plan_to_take2
 * @property integer $college_plan_id
 *
 * @property Applicants $collegePlan
 */
class College extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'college';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_plan_to_enroll_in', 'course_plan_to_take1', 'course_plan_to_take2'], 'required'],
            [['school_plan_to_enroll_in', 'course_plan_to_take1', 'course_plan_to_take2'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_plan_to_enroll_in' => 'School Plan To Enroll In',
            'course_plan_to_take1' => 'Course Plan To Take1',
            'course_plan_to_take2' => 'Course Plan To Take2',
            'college_plan_id' => 'College Plan ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollegePlan()
    {
        return $this->hasOne(Applicants::className(), ['applicant_id' => 'college_plan_id']);
    }
}
