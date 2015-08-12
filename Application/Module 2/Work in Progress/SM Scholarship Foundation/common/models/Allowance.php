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
            [['allowance_scholar_id', 'allowance_school_id'], 'integer'],
			[['allowance_amount'], 'number'],
            [['allowance_payStatus'], 'string'],
            [['allowance_paidDate'], 'safe'],
            [['allowance_remark'], 'string', 'max' => 255],
            [['allowance_scholar_lastName', 'allowance_scholar_firstName', 'allowance_scholar_middleName',
			'uploaded_by', 'checked_by','checked_remark','updated_by'], 'string', 'max' => 100]
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
            'allowance_scholar_lastName' => 'Last Name',
            'allowance_scholar_firstName' => 'First Name',
            'allowance_scholar_middleName' => 'Middle Name',
            'allowance_paidDate' => 'Paid Date',
            'uploaded_by' => 'Created By',
            'checked_by' => 'Checked By',
            'checked_remark' => 'Remark',
            'updated_by' => 'Updated By',
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
        return $this->hasOne(Schools::className(), ['School_id' => 'allowance_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
}
