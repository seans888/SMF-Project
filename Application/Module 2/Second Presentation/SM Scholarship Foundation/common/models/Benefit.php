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
}
