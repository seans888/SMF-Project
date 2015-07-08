<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property integer $school_id
 * @property string $school_name
 * @property string $school_email
 * @property string $school_address
 *
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
            [['school_name', 'school_email', 'school_address'], 'required'],
            [['school_name', 'school_email', 'school_address'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_id' => 'School ID',
            'school_name' => 'School Name',
            'school_email' => 'School Email',
            'school_address' => 'School Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholars()
    {
        return $this->hasMany(Scholars::className(), ['scholar_school_id' => 'school_id']);
    }
}
