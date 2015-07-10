<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "scholars".
 *
 * @property integer $scholar_id
 * @property string $scholar_firstName
 * @property string $scholar_lastName
 * @property string $scholar_middleName
 * @property string $scholar_gender
 * @property string $scholar_address
 * @property integer $scholar_school_id
 * @property string $scholar_course
 * @property integer $scholar_yearLevel
 * @property string $scholar_email
 * @property integer $scholar_contactNum
 * @property integer $scholar_cashCardNum
 *
 * @property Schools $scholarSchool
 */
class Scholars extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scholars';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_gender'], 'string'],
            [['scholar_school_id', 'scholar_yearLevel', 'scholar_contactNum', 'scholar_cashCardNum'], 'integer'],
            [['scholar_firstName', 'scholar_lastName', 'scholar_middleName', 'scholar_address', 'scholar_course', 'scholar_email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'scholar_id' => 'Scholar ID',
            'scholar_firstName' => 'Scholar First Name',
            'scholar_lastName' => 'Scholar Last Name',
            'scholar_middleName' => 'Scholar Middle Name',
            'scholar_gender' => 'Scholar Gender',
            'scholar_address' => 'Scholar Address',
            'scholar_school_id' => 'Scholar School ID',
            'scholar_course' => 'Scholar Course',
            'scholar_yearLevel' => 'Scholar Year Level',
            'scholar_email' => 'Scholar Email',
            'scholar_contactNum' => 'Scholar Contact Num',
            'scholar_cashCardNum' => 'Scholar Cash Card Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarSchool()
    {
        return $this->hasOne(Schools::className(), ['school_id' => 'scholar_school_id']);
    }
}
