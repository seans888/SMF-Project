<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "failures".
 *
 * @property integer $fail_id
 * @property string $fail_subject
 * @property integer $fail_units
 * @property integer $fail_scholar_id
 * @property integer $fail_school_id
 * @property string $failures_scholar_lastName
 * @property string $failures_scholar_firstName
 * @property string $failures_scholar_middleName
 *
 * @property Scholars $failScholar
 * @property Schools $failSchool
 */
class Failures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'failures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fail_units', 'fail_scholar_id', 'fail_school_id'], 'integer'],
            [['fail_subject'], 'string', 'max' => 45],
            [['failures_scholar_lastName', 'failures_scholar_firstName', 'failures_scholar_middleName'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fail_id' => 'Fail ID',
            //'fail_subject' => 'Fail Subject',
			'fail_subject' => 'Subject Failed',
            //'fail_units' => 'Fail Units',
			'fail_units' => '# of Units Failed',
            //'fail_scholar_id' => 'Fail Scholar ID',
			'fail_scholar_id' => 'Scholar ID',
            //'fail_school_id' => 'Fail School ID',
			'fail_school_id' => 'School ID',
            /* 'failures_scholar_lastName' => 'Failures Scholar Last Name',
            'failures_scholar_firstName' => 'Failures Scholar First Name',
            'failures_scholar_middleName' => 'Failures Scholar Middle Name', */
			'failures_scholar_lastName' => 'Scholar Last Name',
            'failures_scholar_firstName' => 'Scholar First Name',
            'failures_scholar_middleName' => 'Scholar Middle Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFailScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'fail_scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFailSchool()
    {
        return $this->hasOne(Schools::className(), ['school_id' => 'fail_school_id']);
    }
}
