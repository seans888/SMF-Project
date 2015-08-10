<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "approved_tuitionfees".
 *
 * @property integer $tuitionfee_id
 * @property integer $tuitionfee_scholar_id
 * @property string $tuitionfee_term
 * @property string $tuitionfee_amount
 * @property string $tuitionfee_dateOfEnrollment
 * @property string $tuitionfee_dateOfPayment
 * @property string $tuitionfee_paidStatus
 * @property string $approval_status
 * @property string $approved_by
 */
class ApprovedTuitionfees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['tuitionfee_scholar_id', 'tuitionfee_term', 'tuitionfee_amount', 'tuitionfee_dateOfEnrollment', 'tuitionfee_paidStatus'], 'required'],
            [['tuitionfee_scholar_id'], 'integer'],
            [['tuitionfee_amount'], 'number'],
            [['tuitionfee_dateOfEnrollment', 'tuitionfee_dateOfPayment'], 'safe'],
            [['tuitionfee_paidStatus', 'approval_status'], 'string'],
            [['tuitionfee_term'], 'string', 'max' => 10],
            [['approved_by'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tuitionfee_id' => 'Tuitionfee ID',
            'tuitionfee_scholar_id' => 'Tuitionfee Scholar ID',
            'tuitionfee_term' => 'Tuitionfee Term',
            'tuitionfee_amount' => 'Tuitionfee Amount',
            'tuitionfee_dateOfEnrollment' => 'Tuitionfee Date Of Enrollment',
            'tuitionfee_dateOfPayment' => 'Tuitionfee Date Of Payment',
            'tuitionfee_paidStatus' => 'Tuitionfee Paid Status',
            'approval_status' => 'Approval Status',
            'approved_by' => 'Approved By',
        ];
    }
}
