<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "withholding".
 *
 * @property integer $withholding_id
 * @property integer $scholar_scholar_id
 * @property integer $scholar_school_school_id
 * @property string $scholar_allowance_allowance_area
 * @property string $withholding_start_date
 * @property string $withholding_end_date
 * @property string $withholding_remark
 *
 * @property Scholar $scholarScholar
 * @property Scholar $scholarSchoolSchool
 * @property Scholar $scholarAllowanceAllowanceArea
 */
class Withholding extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $firstName;
	public $middleName;
	public $lastName;
    public static function tableName()
    {
        return 'withholding';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_scholar_id'], 'required'],
            [['scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['scholar_allowance_allowance_area'], 'string'],
            [['withholding_start_date', 'withholding_end_date'], 'safe'],
            [['withholding_remark'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
/*             'withholding_id' => 'Withholding ID',
            'scholar_scholar_id' => 'Scholar Scholar ID',
            'scholar_school_school_id' => 'Scholar School School ID',
            'scholar_allowance_allowance_area' => 'Scholar Allowance Allowance Area',
            'withholding_start_date' => 'Withholding Start Date',
            'withholding_end_date' => 'Withholding End Date',
            'withholding_remark' => 'Withholding Remark', */
			'firstName' => 'First Name',
            'middleName' => 'Middle Name',
			'lastName' => 'Last Name',
            'withholding_id' => 'Withholding ID',
            'scholar_scholar_id' => 'Scholar ID',
            'scholar_school_school_id' => 'School ID',
            'scholar_allowance_allowance_area' => 'Area',
            'withholding_start_date' => 'Start Date',
            'withholding_end_date' => 'End Date',
            'withholding_remark' => 'Remark',
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
    public function getScholarSchoolSchool()
    {
        return $this->hasOne(Scholar::className(), ['school_school_id' => 'scholar_school_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarAllowanceAllowanceArea()
    {
        return $this->hasOne(Scholar::className(), ['allowance_allowance_area' => 'scholar_allowance_allowance_area']);
    }
}
