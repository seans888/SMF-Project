<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ApprovedTuitionFees".
 *
 * @property integer $tuitionfee_id
 * @property integer $tuitionfee_scholar_id
 * @property string $tuitionfee_scholar_lastName
 * @property string $tuitionfee_scholar_firstName
 * @property string $tuitionfee_scholar_middleName
 * @property integer $tuitionfee_amount
 * @property string $tuitionfee_dateOfEnrollment
 * @property string $tuitionfee_dateOfPayment
 * @property string $tuitionfee_paidStatus
 *
 * @property Scholars $tuitionfeeScholar
 */
class ApprovedTuitionFees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 
	public $tuitionfee_scholar_lastName;
	public $tuitionfee_scholar_firstName;
	public $tuitionfee_scholar_middleName;
	
    public static function tableName()
    {
        return 'approved_tuitionfees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuitionfee_scholar_id'], 'integer','message'=>'Only numbers are allowed'],
			[['tuitionfee_amount'], 'number','message'=>'Only numbers are allowed'],
            [['tuitionfee_dateOfEnrollment', 'tuitionfee_dateOfPayment'], 'safe'],
			[['tuitionfee_scholar_id','tuitionfee_amount','tuitionfee_paidStatus'],'required'],
            [['tuitionfee_term','tuitionfee_paidStatus'], 'string'],
            [['tuitionfee_scholar_lastName', 'tuitionfee_scholar_firstName', 'tuitionfee_scholar_middleName','approved_by',
			'approval_status'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tuitionfee_id' => 'Tuitionfee ID',
            'tuitionfee_scholar_id' => 'Scholar ID',
            'tuitionfee_scholar_lastName' => 'Last Name',
            'tuitionfee_scholar_firstName' => 'First Name',
            'tuitionfee_scholar_middleName' => 'Middle Name',
            'tuitionfee_amount' => 'Tuition Amount',
			'tuitionfee_term' => 'Term',
            'tuitionfee_dateOfEnrollment' => 'Date Of Enrollment',
            'tuitionfee_dateOfPayment' => 'Date Of Payment',
            'tuitionfee_paidStatus' => 'Payment Status',
			'approved_by' => 'Approved By',
			'approval_status' => 'Approved Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTuitionfeeScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'tuitionfee_scholar_id']);
    }
}
