<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "approved_refunds".
 *
 * @property integer $refund_id
 * @property string $refund_amount
 * @property string $refund_smShare
 * @property string $refund_scholarShare
 * @property integer $refund_scholar_id
 * @property integer $refund_tuitionfee_id
 * @property string $refund_description
 * @property string $refund_date
 * @property string $approval_status
 * @property string $approved_by
 * @property string $approved_remark
 *
 * @property Scholars $refundScholar
 */
class ApprovedRefunds extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'approved_refunds';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['refund_amount', 'refund_smShare', 'refund_scholarShare', 'refund_scholar_id', 'refund_description', 'refund_date'], 'required'],
            [['refund_amount', 'refund_smShare', 'refund_scholarShare'], 'number'],
            [['refund_scholar_id', 'refund_tuitionfee_id'], 'integer'],
            [['refund_date'], 'safe'],
            [['approval_status'], 'string'],
            [['refund_description', 'approved_by', 'approved_remark'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'refund_id' => 'Refund ID',
            'refund_amount' => 'Refund Amount',
            'refund_smShare' => 'Refund Sm Share',
            'refund_scholarShare' => 'Refund Scholar Share',
            'refund_scholar_id' => 'Refund Scholar ID',
            'refund_tuitionfee_id' => 'Refund Tuitionfee ID',
            'refund_description' => 'Refund Description',
            'refund_date' => 'Refund Date',
            'approval_status' => 'Approval Status',
            'approved_by' => 'Approved By',
            'approved_remark' => 'Approved Remark',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefundScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'refund_scholar_id']);
    }
}
