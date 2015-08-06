<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "family".
 *
 * @property integer $fam_background_id
 * @property string $name_of_father
 * @property string $father_occupation
 * @property string $father_company_address
 * @property integer $father_phonenum
 * @property string $father_birthdate
 * @property string $name_of_mother
 * @property string $mother_occupation
 * @property string $mother_company_address
 * @property integer $mother_phonenum
 * @property string $mother_birthdate
 * @property string $sibling1_name
 * @property integer $sibling1_age
 * @property string $sibling1_school
 * @property integer $sibling1_grade_or_year
 * @property string $sibling1_employed
 * @property string $sibling1_married
 * @property string $sibling2_name
 * @property integer $sibling2_age
 * @property string $sibling2_school
 * @property integer $sibling2_grade_or_year
 * @property string $sibling2_employed
 * @property string $sibling2_married
 * @property string $income_per_year
 * @property string $income_per_year_in_words
 *
 * @property Applicants[] $applicants
 */
class Family extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'family';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_of_father', 'father_occupation', 'father_company_address', 'father_phonenum', 'father_birthdate', 'name_of_mother', 'mother_occupation', 'mother_company_address', 'mother_phonenum', 'mother_birthdate', 'sibling1_name', 'sibling1_age', 'sibling1_school', 'sibling1_grade_or_year', 'sibling1_employed', 'sibling1_married', 'sibling2_name', 'sibling2_age', 'sibling2_school', 'sibling2_grade_or_year', 'sibling2_employed', 'sibling2_married', 'income_per_year', 'income_per_year_in_words'], 'required'],
            [['father_company_address', 'mother_company_address', 'sibling1_employed', 'sibling1_married', 'sibling2_employed', 'sibling2_married'], 'string'],
            [['father_phonenum', 'mother_phonenum', 'sibling1_age', 'sibling1_grade_or_year', 'sibling2_age', 'sibling2_grade_or_year'], 'integer'],
            [['father_birthdate', 'mother_birthdate'], 'safe'],
            [['income_per_year'], 'number'],
            [['name_of_father', 'father_occupation', 'name_of_mother', 'mother_occupation', 'sibling1_name'], 'string', 'max' => 45],
            [['sibling1_school', 'sibling2_school', 'income_per_year_in_words'], 'string', 'max' => 100],
            [['sibling2_name'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fam_background_id' => 'Fam Background ID',
            'name_of_father' => 'Name Of Father',
            'father_occupation' => 'Father Occupation',
            'father_company_address' => 'Father Company Address',
            'father_phonenum' => 'Father Phonenum',
            'father_birthdate' => 'Father Birthdate',
            'name_of_mother' => 'Name Of Mother',
            'mother_occupation' => 'Mother Occupation',
            'mother_company_address' => 'Mother Company Address',
            'mother_phonenum' => 'Mother Phonenum',
            'mother_birthdate' => 'Mother Birthdate',
            'sibling1_name' => 'Sibling1 Name',
            'sibling1_age' => 'Sibling1 Age',
            'sibling1_school' => 'Sibling1 School',
            'sibling1_grade_or_year' => 'Sibling1 Grade Or Year',
            'sibling1_employed' => 'Sibling1 Employed',
            'sibling1_married' => 'Sibling1 Married',
            'sibling2_name' => 'Sibling2 Name',
            'sibling2_age' => 'Sibling2 Age',
            'sibling2_school' => 'Sibling2 School',
            'sibling2_grade_or_year' => 'Sibling2 Grade Or Year',
            'sibling2_employed' => 'Sibling2 Employed',
            'sibling2_married' => 'Sibling2 Married',
            'income_per_year' => 'Income Per Year',
            'income_per_year_in_words' => 'Income Per Year In Words',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicants::className(), ['applicant_family_id' => 'fam_background_id']);
    }
}
