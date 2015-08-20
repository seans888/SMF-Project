<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "school".
 *
 * @property integer $id
 * @property string $school_name
 * @property string $school_area
 * @property string $school_address
 * @property string $school_email
 * @property string $school_contact
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
            [['school_name', 'school_area', 'school_address', 'school_contact'], 'required'],
            [['school_name', 'school_area', 'school_address', 'school_email', 'school_contact'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'school_name' => 'School Name',
            'school_area' => 'School Area',
            'school_address' => 'School Address',
            'school_email' => 'School Email',
            'school_contact' => 'School Contact',
        ];
    }
}
