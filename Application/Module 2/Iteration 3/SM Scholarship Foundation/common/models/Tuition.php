<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tuition".
 *
 * @property integer $tuition_id
 * @property integer $scholar_scholar_id
 * @property integer $scholar_school_school_id
 * @property integer $tuition_term
 * @property integer $tuition_school_year_start
 * @property integer $tuition_school_year_end
 * @property string $tuition_enrollment_date
 * @property string $tuition_amount
 * @property string $tuition_paid_status
 * @property string $tuition_payment_date
 *
 * @property Scholar $scholarScholar
 * @property Scholar $scholarSchoolSchool
 */
class Tuition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tuition';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_scholar_id'], 'required'],
            [['scholar_scholar_id', 'scholar_school_school_id', 'tuition_term', 'tuition_school_year_start', 'tuition_school_year_end'], 'integer'],
            [['tuition_enrollment_date', 'tuition_payment_date'], 'safe'],
            [['tuition_amount'], 'number'],
            [['tuition_paid_status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tuition_id' => 'Tuition ID',
            'scholar_scholar_id' => 'Scholar Scholar ID',
            'scholar_school_school_id' => 'Scholar School School ID',
            'tuition_term' => 'Tuition Term',
            'tuition_school_year_start' => 'Tuition School Year Start',
            'tuition_school_year_end' => 'Tuition School Year End',
            'tuition_enrollment_date' => 'Tuition Enrollment Date',
            'tuition_amount' => 'Tuition Amount',
            'tuition_paid_status' => 'Tuition Paid Status',
            'tuition_payment_date' => 'Tuition Payment Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarScholar()
    {
        return $this->hasOne(Scholar::className(), ['scholar_id' => 'scholar_scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolSchool()
    {
        return $this->hasOne(School::className(), ['school_id' => 'scholar_school_school_id']);
    }
}
