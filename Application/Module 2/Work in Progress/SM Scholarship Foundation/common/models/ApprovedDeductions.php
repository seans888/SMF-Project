<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "approved_deductions".
 *
 * @property integer $deduction_id
 * @property string $deduction_date
 * @property string $deduction_amount
 * @property string $deduction_remark
 * @property integer $deduction_scholar_id
 * @property string $approval_status
 * @property string $approved_by
 * @property string $approved_remark
 */
class ApprovedDeductions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'approved_deductions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deduction_date', 'deduction_amount', 'deduction_remark', 'deduction_scholar_id'], 'required'],
            [['deduction_date'], 'safe'],
            [['deduction_amount'], 'number'],
            [['deduction_scholar_id'], 'integer'],
            [['approval_status'], 'string'],
            [['deduction_remark', 'approved_by', 'approved_remark'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'deduction_id' => 'Deduction ID',
            'deduction_date' => 'Deduction Date',
            'deduction_amount' => 'Deduction Amount',
            'deduction_remark' => 'Deduction Remark',
            'deduction_scholar_id' => 'Deduction Scholar ID',
            'approval_status' => 'Approval Status',
            'approved_by' => 'Approved By',
            'approved_remark' => 'Approved Remark',
        ];
    }
}
