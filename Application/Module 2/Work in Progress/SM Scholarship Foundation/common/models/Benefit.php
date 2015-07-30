<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "benefit".
 *
 * @property integer $benefit_id
 * @property integer $benefit_scholar_id
 * @property integer $benefit_allowance_id
 * @property integer $benefit_refund_id
 * @property integer $benefit_deduction_id
 *
 * @property Deductions $benefitDeduction
 * @property Scholars $benefitScholar
 * @property Allowance $benefitAllowance
 * @property Refunds $benefitRefund
 */
class Benefit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['benefit_scholar_id'], 'required'],
            [['benefit_scholar_id', 'benefit_allowance_id', 'benefit_refund_id', 'benefit_deduction_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'benefit_id' => 'Benefit ID',
            'benefit_scholar_id' => 'Benefit Scholar ID',
            'benefit_allowance_id' => 'Benefit Allowance ID',
            'benefit_refund_id' => 'Benefit Refund ID',
            'benefit_deduction_id' => 'Benefit Deduction ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBenefitDeduction()
    {
        return $this->hasOne(Deductions::className(), ['deduction_id' => 'benefit_deduction_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBenefitScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'benefit_scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBenefitAllowance()
    {
        return $this->hasOne(Allowance::className(), ['allowance_id' => 'benefit_allowance_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBenefitRefund()
    {
        return $this->hasOne(Refunds::className(), ['refund_id' => 'benefit_refund_id']);
    }
}
