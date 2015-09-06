<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "scholar".
 *
 * @property integer $scholar_id
 * @property integer $school_school_id
 * @property string $scholar_first_name
 * @property string $scholar_middle_name
 * @property string $scholar_last_name
 * @property string $scholar_gender
 * @property string $scholar_address
 * @property string $scholar_course
 * @property string $scholar_graduate_status
 * @property integer $scholar_year_level
 * @property string $scholar_contact_email
 * @property string $scholar_contact_number
 * @property string $scholar_allowance_status
 * @property string $scholar_cash_card_number
 * @property string $scholar_type
 * @property string $scholar_sponsor
 * @property string $allowance_allowance_area
 *
 * @property Deduction[] $deductions
 * @property Deduction[] $deductions0
 * @property Incentive[] $incentives
 * @property Incentive[] $incentives0
 * @property Incentive[] $incentives1
 * @property Optionalwork[] $optionalworks
 * @property Optionalwork[] $optionalworks0
 * @property School $schoolSchool
 * @property Allowance $allowanceAllowanceArea
 * @property Subject[] $subjects
 * @property Subject[] $subjects0
 * @property Tuition[] $tuitions
 * @property Tuition[] $tuitions0
 * @property Upload[] $uploads
 * @property Upload[] $uploads0
 * @property Withholding[] $withholdings
 * @property Withholding[] $withholdings0
 * @property Withholding[] $withholdings1
 */
class Scholar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scholar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['school_school_id', 'scholar_first_name', 'scholar_middle_name', 'scholar_last_name', 'scholar_gender', 
			// 'scholar_address', 'scholar_course', 'scholar_graduate_status', 'scholar_year_level', 
			// 'scholar_contact_email', 'scholar_contact_number', 'scholar_allowance_status', 
			// 'scholar_cash_card_number', 'scholar_type', 'scholar_sponsor', 'allowance_allowance_area'], 'required'],
            [['school_school_id', 'scholar_year_level'], 'integer'],
            [['scholar_gender', 'scholar_graduate_status', 'scholar_vendor_code', 'scholar_type', 'allowance_allowance_area'], 'string'],
            [['scholar_first_name', 'scholar_middle_name', 'scholar_last_name', 'scholar_course', 'scholar_contact_email', 'scholar_contact_number', 'scholar_sponsor'], 'string', 'max' => 100],
            [['scholar_address'], 'string', 'max' => 255],
            [['scholar_cash_card_number'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
/*             'scholar_id' => 'Scholar ID',
            'school_school_id' => 'School School ID',
            'scholar_first_name' => 'Scholar First Name',
            'scholar_middle_name' => 'Scholar Middle Name',
            'scholar_last_name' => 'Scholar Last Name',
            'scholar_gender' => 'Scholar Gender',
            'scholar_address' => 'Scholar Address',
            'scholar_course' => 'Scholar Course',
            'scholar_graduate_status' => 'Scholar Graduate Status',
            'scholar_year_level' => 'Scholar Year Level',
            'scholar_contact_email' => 'Scholar Contact Email',
            'scholar_contact_number' => 'Scholar Contact Number',
            'scholar_vendor_code' => 'Scholar Vendor Code',
            'scholar_cash_card_number' => 'Scholar Cash Card Number',
            'scholar_type' => 'Scholar Type',
            'scholar_sponsor' => 'Scholar Sponsor',
            'allowance_allowance_area' => 'Allowance Allowance Area', */
            'scholar_id' => 'Scholar ID',
            //'school_school_id' => 'School ID',
			'school_school_id' => 'School Name',
            'scholar_first_name' => 'First Name',
            'scholar_middle_name' => 'Middle Name',
            'scholar_last_name' => 'Last Name',
            'scholar_gender' => 'Gender',
            'scholar_address' => 'Address',
            'scholar_course' => 'Course',
            'scholar_graduate_status' => 'Graduate Status',
            'scholar_year_level' => 'Year Level',
            'scholar_contact_email' => 'Contact Email',
            'scholar_contact_number' => 'Contact Number',
            'scholar_vendor_code' => 'Vendor Code',
            'scholar_cash_card_number' => 'Cash Card Number',
            'scholar_type' => 'Scholar Type',
            'scholar_sponsor' => 'Scholar Sponsor',
            'allowance_allowance_area' => 'Allowance Allowance Area',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeductions()
    {
        return $this->hasMany(Deduction::className(), ['scholar_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeductions0()
    {
        return $this->hasMany(Deduction::className(), ['scholar_school_school_id' => 'school_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIncentives()
    {
        return $this->hasMany(Incentive::className(), ['scholar_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIncentives0()
    {
        return $this->hasMany(Incentive::className(), ['scholar_school_school_id' => 'school_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIncentives1()
    {
        return $this->hasMany(Incentive::className(), ['scholar_allowance_allowance_area' => 'allowance_allowance_area']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptionalworks()
    {
        return $this->hasMany(Optionalwork::className(), ['scholar_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptionalworks0()
    {
        return $this->hasMany(Optionalwork::className(), ['scholar_school_school_id' => 'school_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolSchool()
    {
        return $this->hasOne(School::className(), ['school_id' => 'school_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAllowanceAllowanceArea()
    {
        return $this->hasOne(Allowance::className(), ['allowance_area' => 'allowance_allowance_area']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['scholar_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects0()
    {
        return $this->hasMany(Subject::className(), ['scholar_school_school_id' => 'school_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTuitions()
    {
        return $this->hasMany(Tuition::className(), ['scholar_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTuitions0()
    {
        return $this->hasMany(Tuition::className(), ['scholar_school_school_id' => 'school_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUploads()
    {
        return $this->hasMany(Upload::className(), ['scholar_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUploads0()
    {
        return $this->hasMany(Upload::className(), ['scholar_school_school_id' => 'school_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWithholdings()
    {
        return $this->hasMany(Withholding::className(), ['scholar_scholar_id' => 'scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWithholdings0()
    {
        return $this->hasMany(Withholding::className(), ['scholar_school_school_id' => 'school_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWithholdings1()
    {
        return $this->hasMany(Withholding::className(), ['scholar_allowance_allowance_area' => 'allowance_allowance_area']);
    }
}
