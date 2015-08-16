<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deduction".
 *
 * @property integer $deduction_id
 * @property integer $scholar_scholar_id
 * @property integer $scholar_school_school_id
 * @property string $deduction_date
 * @property string $deduction_amount
 * @property string $deduction_remark
 *
 * @property Scholar $scholarScholar
 */
class Deduction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deduction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deduction_id', 'scholar_scholar_id', 'scholar_school_school_id'], 'required'],
            [['deduction_id', 'scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['deduction_date'], 'safe'],
            [['deduction_amount'], 'number'],
            [['deduction_remark'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'deduction_id' => 'Deduction ID',
            'scholar_scholar_id' => 'Scholar Scholar ID',
            'scholar_school_school_id' => 'Scholar School School ID',
            'deduction_date' => 'Deduction Date',
            'deduction_amount' => 'Deduction Amount',
            'deduction_remark' => 'Deduction Remark',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarScholar()
    {
        return $this->hasOne(Scholar::className(), ['scholar_id' => 'scholar_scholar_id', 'school_school_id' => 'scholar_school_school_id']);
    }
}
