<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "applicantform".
 *
 * @property integer $id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property integer $city_address
 * @property integer $telephone_no
 * @property string $email
 * @property integer $cellphone_no
 * @property string $birthday
 * @property string $status
 * @property string $sex
 * @property string $birth_place
 * @property string $nationality
 * @property integer $height
 * @property integer $weight
 * @property string $religion
 * @property string $name_of_public_high_school_graduating_from
 * @property string $section
 * @property string $complete_address_of_school
 * @property string $name_of_principal
 * @property integer $telephone_numbers
 * @property string $org_1
 * @property string $position_held1
 * @property string $school_you_want_to_enroll_in
 * @property string $course_you_plan_to_take
 */
class Applicantform extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'applicantform';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'city_address', 'telephone_no', 'email', 'cellphone_no', 'birthday', 'status', 'sex', 'birth_place', 'nationality', 'height', 'weight', 'religion', 'name_of_public_high_school_graduating_from', 'section', 'complete_address_of_school', 'name_of_principal', 'telephone_numbers', 'org_1', 'position_held1', 'school_you_want_to_enroll_in', 'course_you_plan_to_take'], 'required'],
            [['city_address', 'telephone_no', 'cellphone_no', 'height', 'weight', 'telephone_numbers'], 'integer'],
            [['birthday'], 'safe'],
            [['status', 'sex'], 'string'],
            [['last_name', 'first_name', 'middle_name', 'email', 'birth_place', 'nationality', 'religion', 'name_of_public_high_school_graduating_from', 'section', 'complete_address_of_school', 'name_of_principal', 'org_1', 'position_held1', 'school_you_want_to_enroll_in', 'course_you_plan_to_take'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'city_address' => 'City Address',
            'telephone_no' => 'Telephone No',
            'email' => 'Email',
            'cellphone_no' => 'Cellphone No',
            'birthday' => 'Birthday',
            'status' => 'Status',
            'sex' => 'Sex',
            'birth_place' => 'Birth Place',
            'nationality' => 'Nationality',
            'height' => 'Height',
            'weight' => 'Weight',
            'religion' => 'Religion',
            'name_of_public_high_school_graduating_from' => 'Name Of Public High School Graduating From',
            'section' => 'Section',
            'complete_address_of_school' => 'Complete Address Of School',
            'name_of_principal' => 'Name Of Principal',
            'telephone_numbers' => 'Telephone Numbers',
            'org_1' => 'Org 1',
            'position_held1' => 'Position Held1',
            'school_you_want_to_enroll_in' => 'School You Want To Enroll In',
            'course_you_plan_to_take' => 'Course You Plan To Take',
        ];
    }
}
