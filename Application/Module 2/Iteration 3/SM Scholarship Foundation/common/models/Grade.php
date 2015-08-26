<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "grade".
 *
 * @property integer $grade_id
 * @property integer $subject_subject_id
 * @property integer $subject_scholar_scholar_id
 * @property integer $subject_scholar_school_school_id
 * @property integer $grade_school_year_start
 * @property integer $grade_school_year_end
 * @property string $grade_raw_grade
 * @property string $grade_approval_status
 * @property string $grade_approved_by
 *
 * @property Subject $subjectSubject
 * @property Subject $subjectScholarScholar
 * @property Subject $subjectScholarSchoolSchool
 */
class Grade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $firstName;
	public $middleName;
	public $lastName;
	public $takenStatus;
    public static function tableName()
    {
        return 'grade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['subject_subject_id', 'subject_scholar_scholar_id', 'subject_scholar_school_school_id', 'grade_approval_status'], 'required'],
            [['subject_subject_id', 'subject_scholar_scholar_id', 'subject_scholar_school_school_id', 'grade_school_year_start', 'grade_school_year_end'], 'integer'],
            [['takenStatus','firstName','middleName','lastName','grade_approval_status'], 'string'],
            [['grade_raw_grade'], 'string', 'max' => 45],
            [['grade_approved_by'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
/* 			'takenStatus' => 'Taken Status',
			'firstName' => 'First Name',
            'middleName' => 'Middle Name',
			'lastName' => 'Last Name',
			'grade_id' => 'Grade ID',
            'subject_subject_id' => 'Subject Subject ID',
            'subject_scholar_scholar_id' => 'Subject Scholar Scholar ID',
            'subject_scholar_school_school_id' => 'Subject Scholar School School ID',
            'grade_school_year_start' => 'Grade School Year Start',
            'grade_school_year_end' => 'Grade School Year End',
            'grade_raw_grade' => 'Grade Raw Grade',
            'grade_approval_status' => 'Grade Approval Status',
            'grade_approved_by' => 'Grade Approved By', */
			'takenStatus' => 'Taken Status',
			'firstName' => 'Scholar First Name',
            'middleName' => 'Scholar Middle Name',
			'lastName' => 'Scholar Last Name',
			'grade_id' => 'Grade ID',
            'subject_subject_id' => 'Subject ID',
            'subject_scholar_scholar_id' => 'Scholar ID',
            'subject_scholar_school_school_id' => 'School ID',
            'grade_school_year_start' => 'School Year Start',
            'grade_school_year_end' => 'School Year End',
            'grade_raw_grade' => 'Raw Grade',
            'grade_approval_status' => 'Approval Status',
            'grade_approved_by' => 'Approved By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectSubject()
    {
        return $this->hasOne(Subject::className(), ['subject_id' => 'subject_subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarScholar()
    {
        return $this->hasOne(Scholar::className(), ['scholar_id' => 'subject_scholar_scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolSchool()
    {
        return $this->hasOne(School::className(), ['school_id' => 'subject_scholar_school_school_id']);
    }
}
