<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "grades".
 *
 * @property integer $grade_id
 * @property integer $grade_schoolYear
 * @property integer $grade_Term
 * @property integer $grade_scholar_id
 * @property string $grade_scholar_lastName
 * @property string $grade_scholar_firstName
 * @property string $grade_scholar_middleName
 * @property string $grade_value
 * @property string $grade_grade_form
 *
 * @property Compile[] $compiles
 * @property Scholars $gradeScholar
 */
class Grades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	
	public $file;
	
    public static function tableName()
    {
        return 'grades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade_schoolYear', 'grade_Term', 'grade_scholar_id'], 'integer'],
            [['grade_scholar_id','grade_value','grade_schoolYear','grade_Term'], 'required'],
        	[['file'],'file'],
            [['grade_scholar_lastName', 'grade_scholar_firstName', 'grade_scholar_middleName', 'grade_value', 'grade_grade_form'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grade_id' => 'Grade ID',
            'grade_schoolYear' => 'School Year',
            'grade_Term' => 'Term',
            'grade_scholar_id' => 'Scholar ID',
            'grade_scholar_lastName' => 'Last Name',
            'grade_scholar_firstName' => 'First Name',
            'grade_scholar_middleName' => 'Middle Name',
            'grade_value' => 'Grade Value',
            'grade_grade_form' => 'Grade Form',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompiles()
    {
        return $this->hasMany(Compile::className(), ['compile_grade_id' => 'grade_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGradeScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'grade_scholar_id']);
    }
}
