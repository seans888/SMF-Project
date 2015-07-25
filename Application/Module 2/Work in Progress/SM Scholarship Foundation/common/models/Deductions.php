<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deductions".
 *
 * @property integer $deduction_id
 * @property string $deduction_date
 * @property string $deduction_amount
 * @property string $deduction_remark
 * @property integer $deduction_scholar_id
 *
 * @property Scholars $deductionScholar
 */
class Deductions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deductions';
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
            [['deduction_remark'], 'string', 'max' => 100]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeductionScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'deduction_scholar_id']);
    }
}
