<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "approved_allowance".
 *
 * @property integer $allowance_id
 * @property string $allowance_amount
 * @property string $allowance_remark
 * @property integer $allowance_scholar_id
 * @property integer $allowance_school_id
 * @property string $allowance_payStatus
 * @property string $allowance_paidDate
 * @property string $allowance_status
 * @property string $approval_status
 * @property string $approved_by
 * @property string $approved_remark
 *
 * @property Scholars $allowanceScholar
 * @property Schools $allowanceSchool
 */
class ApprovedAllowance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'approved_allowance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['allowance_amount', 'allowance_remark', 'allowance_scholar_id', 'allowance_school_id', 'allowance_payStatus', 'allowance_paidDate', 'allowance_status'], 'required'],
            [['allowance_amount'], 'number'],
            [['allowance_scholar_id', 'allowance_school_id'], 'integer'],
            [['allowance_payStatus', 'allowance_status', 'approval_status'], 'string'],
            [['allowance_paidDate'], 'safe'],
            [['allowance_remark'], 'string', 'max' => 255],
            [['approved_by', 'approved_remark'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'allowance_id' => 'Allowance ID',
            'allowance_amount' => 'Allowance Amount',
            'allowance_remark' => 'Allowance Remark',
            'allowance_scholar_id' => 'Allowance Scholar ID',
            'allowance_school_id' => 'Allowance School ID',
            'allowance_payStatus' => 'Allowance Pay Status',
            'allowance_paidDate' => 'Allowance Paid Date',
            'allowance_status' => 'Allowance Status',
            'approval_status' => 'Approval Status',
            'approved_by' => 'Approved By',
            'approved_remark' => 'Approved Remark',
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
}
