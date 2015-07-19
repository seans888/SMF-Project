<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "benefit".
 *
 * @property integer $benefit_id
 * @property integer $benefit_amount
 * @property integer $benefit_scholarShare
 * @property integer $benefit_tuitionfee_id
 * @property integer $benefit_scholar_id
 * @property integer $benefit_school_id
 *
 * @property Allowance[] $allowances
 * @property Schools $benefitSchool
 * @property Tuitionfees $benefitTuitionfee
 * @property Scholars $benefitScholar
 */
class Benefit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	
	public $benefit_scholar_lastName;
	public $benefit_scholar_firstName;
	public $benefit_scholar_middleName;
	
    public static function tableName()
    {
        return 'benefit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['benefit_amount', 'benefit_scholarShare', 'benefit_tuitionfee_id',
			'benefit_scholar_id', 'benefit_school_id'], 'integer'],
			[['benefit_scholar_lastName', 'benefit_scholar_firstName', 
			'benefit_scholar_middleName'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'benefit_id' => 'Benefit ID',
            'benefit_amount' => 'Amount',
            'benefit_scholarShare' => 'Scholar Share',
            'benefit_tuitionfee_id' => 'Benefit Tuitionfee ID',
            'benefit_scholar_id' => 'Scholar ID',
            'benefit_school_id' => 'School Name',
			'benefit_scholar_lastName' => 'Last Name',
			'benefit_scholar_firstName' => 'First Name',
			'benefit_scholar_middleName' => 'Middle Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAllowances()
    {
        return $this->hasMany(Allowance::className(), ['benefit_allowance_id' => 'benefit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBenefitSchool()
    {
        return $this->hasOne(Schools::className(), ['school_id' => 'benefit_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBenefitTuitionfee()
    {
        return $this->hasOne(Tuitionfees::className(), ['tuitionfee_id' => 'benefit_tuitionfee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBenefitScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'benefit_scholar_id']);
    }
}
