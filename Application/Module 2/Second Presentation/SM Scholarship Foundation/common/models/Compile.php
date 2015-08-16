<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "compile".
 *
 * @property integer $compile_id
 * @property integer $compile_scholar_id
 * @property integer $compile_school_id
 * @property integer $compile_tuitionfee_id
 * @property integer $compile_grade_id
 * @property string $compile_scholar_firstName
 * @property string $compile_scholar_lastName
 * @property string $compile_scholar_middleName
 * @property string $compile_school_name
 * @property string $compile_school_area
 * @property string $compile_pendingPaymentToSchool
 * @property string $compile_pendingPaymentToStudent
 *
 * @property Scholars $compileScholar
 * @property Schools $compileSchool
 * @property Tuitionfees $compileTuitionfee
 * @property Grades $compileGrade
 */
class Compile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['compile_scholar_id', 'compile_school_id', 'compile_tuitionfee_id', 'compile_grade_id'], 'integer'],
            [['compile_pendingPaymentToSchool', 'compile_pendingPaymentToStudent'], 'string'],
            [['compile_scholar_firstName', 'compile_scholar_lastName', 'compile_scholar_middleName', 'compile_school_name', 'compile_school_area'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'compile_id' => 'Compile ID',
            'compile_scholar_id' => 'Compile Scholar ID',
            'compile_school_id' => 'Compile School ID',
            'compile_tuitionfee_id' => 'Compile Tuitionfee ID',
            'compile_grade_id' => 'Compile Grade ID',
            'compile_scholar_firstName' => 'Compile Scholar First Name',
            'compile_scholar_lastName' => 'Compile Scholar Last Name',
            'compile_scholar_middleName' => 'Compile Scholar Middle Name',
            'compile_school_name' => 'Compile School Name',
            'compile_school_area' => 'Compile School Area',
            'compile_pendingPaymentToSchool' => 'Compile Pending Payment To School',
            'compile_pendingPaymentToStudent' => 'Compile Pending Payment To Student',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompileScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'compile_scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompileSchool()
    {
        return $this->hasOne(Schools::className(), ['school_id' => 'compile_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompileTuitionfee()
    {
        return $this->hasOne(Tuitionfees::className(), ['tuitionfee_id' => 'compile_tuitionfee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompileGrade()
    {
        return $this->hasOne(Grades::className(), ['grade_id' => 'compile_grade_id']);
    }
}
