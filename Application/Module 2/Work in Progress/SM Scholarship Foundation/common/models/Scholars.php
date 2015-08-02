<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "scholars".
 *
 * @property integer $scholar_id
 * @property string $scholar_firstName
 * @property string $scholar_lastName
 * @property string $scholar_middleName
 * @property string $scholar_gender
 * @property string $scholar_address
 * @property integer $scholar_school_id
 * @property string $scholar_course
 * @property integer $scholar_yearLevel
 * @property string $scholar_email
 * @property integer $scholar_contactNum
 * @property integer $scholar_cashCardNum
 * @property string $scholar_school_area
 *
 * @property Allowance[] $allowances
 * @property Benefit[] $benefits
 * @property Compile[] $compiles
 * @property Failures[] $failures
 * @property Grades[] $grades
 * @property Schools $scholarSchool
 * @property Tuitionfees[] $tuitionfees
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
            [['scholar_firstName', 'scholar_lastName', 'scholar_gender', 'scholar_school_id', 'scholar_contactNum'], 'required'],
            [['scholar_gender', 'scholar_school_area'], 'string'],
            [['scholar_school_id', 'scholar_yearLevel', 'scholar_contactNum', 'scholar_cashCardNum'], 'integer'],
			[['scholar_email'], 'email'],
            [['scholar_sponsors','scholar_firstName', 'scholar_lastName', 'scholar_middleName', 'scholar_address', 'scholar_course', 'scholar_email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'scholar_id' => 'Scholar ID',
            'scholar_firstName' => 'First Name',
            'scholar_lastName' => 'Last Name',
            'scholar_middleName' => 'Middle Name',
            'scholar_gender' => 'Gender',
            'scholar_address' => 'Address',
            'scholar_school_id' => 'School Name',
            'scholar_course' => 'Course',
            'scholar_yearLevel' => 'Year Level',
            'scholar_email' => 'Email',
            'scholar_contactNum' => 'Contact Num',
            'scholar_cashCardNum' => 'Cash Card Num',
            'scholar_school_area' => 'School Area',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAllowances()
    {
        return $this->hasMany(Allowance::className(), ['allowance_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBenefits()
    {
        return $this->hasMany(Benefit::className(), ['benefit_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompiles()
    {
        return $this->hasMany(Compile::className(), ['compile_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFailures()
    {
        return $this->hasMany(Failures::className(), ['fail_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grades::className(), ['grade_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarSchool()
    {
        return $this->hasOne(Schools::className(), ['School_id' => 'scholar_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTuitionfees()
    {
        return $this->hasMany(Tuitionfees::className(), ['tuitionfee_scholar_id' => 'scholar_id']);
    }
}
