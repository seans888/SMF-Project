<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "allowance".
 *
 * @property integer $allowance_id
 * @property integer $allowance_amount
 * @property string $allowance_remark
 * @property integer $allowance_scholar_id
 * @property integer $allowance_school_id
 * @property string $allowance_payStatus
 * @property integer $benefit_allowance_id
 * @property string $allowance_scholar_lastName
 * @property string $allowance_scholar_firstName
 * @property string $allowance_scholar_middleName
 * @property string $allowance_paidDate
 *
 * @property Scholars $allowanceScholar
 * @property Schools $allowanceSchool
 * @property Benefit $benefitAllowance
 */
class Allowance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 
	public $allowance_scholar_lastName;
	public $allowance_scholar_firstName;
	public $allowance_scholar_middleName;
	
    public static function tableName()
    {
        return 'allowance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['allowance_amount', 'allowance_scholar_id', 'allowance_school_id', 'benefit_allowance_id'], 'integer'],
            [['allowance_payStatus'], 'string'],
            [['allowance_paidDate'], 'safe'],
            [['allowance_remark'], 'string', 'max' => 255],
            [['allowance_scholar_lastName', 'allowance_scholar_firstName', 'allowance_scholar_middleName'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'allowance_id' => 'Allowance ID',
            'allowance_amount' => 'Amount',
            'allowance_remark' => 'Remark',
            'allowance_scholar_id' => 'Scholar ID',
            'allowance_school_id' => 'School Name',
            'allowance_payStatus' => 'Pay Status',
            'benefit_allowance_id' => 'Benefit Allowance ID',
            'allowance_scholar_lastName' => 'Last Name',
            'allowance_scholar_firstName' => 'First Name',
            'allowance_scholar_middleName' => 'Middle Name',
            'allowance_paidDate' => 'Paid Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAllowanceScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'allowance_scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAllowanceSchool()
    {
        return $this->hasOne(Schools::className(), ['school_id' => 'allowance_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBenefitAllowance()
    {
        return $this->hasOne(Benefit::className(), ['benefit_id' => 'benefit_allowance_id']);
    }
}
