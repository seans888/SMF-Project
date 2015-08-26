<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $subject_id
 * @property integer $scholar_scholar_id
 * @property integer $scholar_school_school_id
 * @property integer $subject_term
 * @property string $subject_name
 * @property string $subject_units
 * @property string $subject_taken_status
 * @property string $subject_approval_status
 * @property string $subject_approved_by
 *
 * @property Grade[] $grades
 * @property Grade[] $grades0
 * @property Grade[] $grades1
 * @property Scholar $scholarScholar
 * @property Scholar $scholarSchoolSchool
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['scholar_scholar_id', 'scholar_school_school_id'], 'required'],
            [['scholar_scholar_id', 'scholar_school_school_id', 'subject_term'], 'integer'],
            [['subject_units'], 'number'],
            [['subject_taken_status', 'subject_approval_status'], 'string'],
            [['subject_name', 'subject_approved_by'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
/*             'subject_id' => 'Subject ID',
            'scholar_scholar_id' => 'Scholar Scholar ID',
            'scholar_school_school_id' => 'Scholar School School ID',
            'subject_term' => 'Subject Term',
            'subject_name' => 'Subject Name',
            'subject_units' => 'Subject Units',
            'subject_taken_status' => 'Subject Taken Status',
            'subject_approval_status' => 'Subject Approval Status',
            'subject_approved_by' => 'Subject Approved By', */
            'subject_id' => 'Subject ID',
            'scholar_scholar_id' => 'Scholar ID',
            'scholar_school_school_id' => 'School ID',
            'subject_term' => 'Subject Term',
            'subject_name' => 'Subject Name',
            'subject_units' => 'Subject Units',
            'subject_taken_status' => 'Subject Taken Status',
            'subject_approval_status' => 'Subject Approval Status',
            'subject_approved_by' => 'Subject Approved By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grade::className(), ['subject_subject_id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades0()
    {
        return $this->hasMany(Grade::className(), ['subject_scholar_scholar_id' => 'scholar_scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades1()
    {
        return $this->hasMany(Grade::className(), ['subject_scholar_school_school_id' => 'scholar_school_school_id']);
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
    public function getScholarSchoolSchool()
    {
        return $this->hasOne(Scholar::className(), ['school_school_id' => 'scholar_school_school_id']);
    }
}
