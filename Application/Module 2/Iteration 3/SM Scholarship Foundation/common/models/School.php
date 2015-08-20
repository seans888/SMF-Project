<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "school".
 *
 * @property integer $school_id
 * @property string $school_name
 * @property string $school_area
 * @property string $school_address
 * @property string $school_contact_emails
 * @property string $school_contact_numbers
 * @property string $school_vendor_code
 *
 * @property Equivalence[] $equivalences
 * @property Scholar[] $scholars
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_name', 'school_contact_emails', 'school_contact_numbers'], 'string', 'max' => 100],
            [['school_area'], 'string', 'max' => 45],
            [['school_address'], 'string', 'max' => 255],
            [['school_vendor_code'], 'string', 'max' => 10]
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
            'school_area' => 'School Area',
            'school_address' => 'School Address',
            'school_contact_emails' => 'School Contact Emails',
            'school_contact_numbers' => 'School Contact Numbers',
            'school_vendor_code' => 'School Vendor Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquivalences()
    {
        return $this->hasMany(Equivalence::className(), ['school_school_id' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholars()
    {
        return $this->hasMany(Scholar::className(), ['school_school_id' => 'school_id']);
    }
}
