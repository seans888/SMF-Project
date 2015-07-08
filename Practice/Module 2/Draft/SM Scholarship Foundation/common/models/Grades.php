<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "grades".
 *
 * @property integer $grade_id
 * @property string $grade_school_year
 * @property string $grade_school_term
 * @property string $grade_value
 * @property integer $grade_scholar_id
 *
 * @property Scholars $gradeScholar
 */
class Grades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['grade_school_year', 'grade_school_term', 'grade_value', 'grade_scholar_id'], 'required'],
            [['grade_scholar_id'], 'integer'],
            [['grade_school_year', 'grade_school_term', 'grade_value'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grade_id' => 'Grade ID',
            'grade_school_year' => 'Grade School Year',
            'grade_school_term' => 'Grade School Term',
            'grade_value' => 'Grade Value',
            'grade_scholar_id' => 'Grade Scholar ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGradeScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'grade_scholar_id']);
    }
}
