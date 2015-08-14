<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property integer $School_id
 * @property string $school_name
 * @property string $school_area
 * @property string $school_address
 * @property string $school_contactEmail
 * @property integer $school_contactNumber
 *
 * @property Allowance[] $allowances
 * @property Benefit[] $benefits
 * @property Compile[] $compiles
 * @property Equivalence[] $equivalences
 * @property Failures[] $failures
 * @property Scholars[] $scholars
 */
class Schools extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_name', 'school_area', 'school_contactNumber'], 'required'],
            [['school_area'], 'string'],
            [['school_contactNumber'], 'integer'],
            [['school_name', 'school_address', 'school_contactEmail'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'School_id' => 'School ID',
            'school_name' => 'School Name',
            'school_area' => 'School Area',
            'school_address' => 'School Address',
            'school_contactEmail' => 'School Contact Email',
            'school_contactNumber' => 'School Contact Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAllowances()
    {
        return $this->hasMany(Allowance::className(), ['allowance_school_id' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBenefits()
    {
        return $this->hasMany(Benefit::className(), ['benefit_school_id' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompiles()
    {
        return $this->hasMany(Compile::className(), ['compile_school_id' => 'School_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquivalences()
    {
        return $this->hasMany(Equivalence::className(), ['School_id' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFailures()
    {
        return $this->hasMany(Failures::className(), ['fail_school_id' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholars()
    {
        return $this->hasMany(Scholars::className(), ['scholar_school_id' => 'School_id']);
    }
}
