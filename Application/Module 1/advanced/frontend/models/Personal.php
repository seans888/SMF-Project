<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $city_address
 * @property integer $cellphone_no
 * @property string $date_of_birth
 * @property integer $age
 * @property string $status
 * @property string $sex
 * @property string $place_of_birth
 * @property string $nationality
 * @property string $height
 * @property string $weight
 * @property string $religion
 * @property integer $personal_id
 *
 * @property Applicants[] $applicants
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'city_address', 'cellphone_no', 'date_of_birth', 'age', 'status', 'sex', 'place_of_birth', 'nationality', 'height', 'weight', 'religion'], 'required'],
            [['cellphone_no', 'age'], 'integer'],
            [['date_of_birth'], 'safe'],
            [['status', 'sex'], 'string'],
            [['height', 'weight'], 'number'],
            [['last_name', 'first_name', 'middle_name', 'place_of_birth', 'nationality', 'religion'], 'string', 'max' => 30],
            [['city_address'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'city_address' => 'City Address',
            'cellphone_no' => 'Cellphone No',
            'date_of_birth' => 'Date Of Birth',
            'age' => 'Age',
            'status' => 'Status',
            'sex' => 'Sex',
            'place_of_birth' => 'Place Of Birth',
            'nationality' => 'Nationality',
            'height' => 'Height',
            'weight' => 'Weight',
            'religion' => 'Religion',
            'personal_id' => 'Personal ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicants::className(), ['applicant_personal_id' => 'personal_id']);
    }
}
