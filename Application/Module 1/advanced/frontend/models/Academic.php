<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "academic".
 *
 * @property string $Public_high_school_graduating_from
 * @property string $complete_school_address
 * @property string $principal_fullname
 * @property integer $section_no
 * @property string $organization
 * @property string $position_held
 * @property integer $academic_id
 *
 * @property Applicants[] $applicants
 */
class Academic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'academic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Public_high_school_graduating_from', 'complete_school_address', 'principal_fullname', 'section_no', 'organization', 'position_held'], 'required'],
            [['section_no'], 'integer'],
            [['organization', 'position_held'], 'string'],
            [['Public_high_school_graduating_from', 'principal_fullname'], 'string', 'max' => 45],
            [['complete_school_address'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Public_high_school_graduating_from' => 'Public High School Graduating From',
            'complete_school_address' => 'Complete School Address',
            'principal_fullname' => 'Principal Fullname',
            'section_no' => 'Section No',
            'organization' => 'Organization',
            'position_held' => 'Position Held',
            'academic_id' => 'Academic ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicants::className(), ['applicant_academic_id' => 'academic_id']);
    }
}
