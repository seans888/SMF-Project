<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "optionalwork".
 *
 * @property integer $optionalwork_id
 * @property integer $scholar_scholar_id
 * @property integer $scholar_school_school_id
 * @property string $optionalwork_location
 * @property string $optionalwork_start_date
 * @property string $optionalwork_end_date
 *
 * @property Scholar $scholarScholar
 * @property Scholar $scholarSchoolSchool
 */
class Optionalwork extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $firstName;
	public $middleName;
	public $lastName;
	
    public static function tableName()
    {
        return 'optionalwork';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_scholar_id', 'scholar_school_school_id', 
				'firstName', 'middleName', 
				'lastName'], 'required'],
			[['firstName','middleName', 
				'lastName'], 'string', 'max' => 100],	
            [['scholar_scholar_id', 'scholar_school_school_id',], 'integer'],
            [['optionalwork_start_date', 'optionalwork_end_date'], 'safe'],
            [['optionalwork_location'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'optionalwork_id' => 'Optionalwork ID',
            'scholar_scholar_id' => 'Scholar Scholar ID',
            'scholar_school_school_id' => 'Scholar School School ID',
			'firstName' => 'First Name',
			'middleName' => 'Middle Name',
			'lastName' => 'Last Name',
            'optionalwork_location' => 'Optionalwork Location',
            'optionalwork_start_date' => 'Optionalwork Start Date',
            'optionalwork_end_date' => 'Optionalwork End Date',
			/*
			'scholar_scholar_first_name' => 'Scholar First Name',
			'scholar_scholar_middle_name' => 'Scholar Middle Name',
			'scholar_scholar_last_name' => 'Scholar Last Name',
			*/
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
	
	//my edit
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarFirstName()
    {
        return $this->hasOne(Scholar::className(), ['scholar_first_name' => 'scholar_scholar_first_name']);
    }
	/**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarMiddleName()
    {
        return $this->hasOne(Scholar::className(), ['scholar_middle_name' => 'scholar_scholar_middle_name']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarLastName()
    {
        return $this->hasOne(Scholar::className(), ['scholar_last_name' => 'scholar_scholar_last_name']);
    }
}
