<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "applicants".
 *
 * @property integer $applicant_id
 *
 * @property Academic $academic
 * @property User $applicant
 * @property College $college
 * @property Family $family
 * @property Personal $personal
 */
class Applicants extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'applicants';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'applicant_id' => 'Applicant ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademic()
    {
        return $this->hasOne(Academic::className(), ['academic_id' => 'applicant_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicant()
    {
        return $this->hasOne(User::className(), ['id' => 'applicant_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollege()
    {
        return $this->hasOne(College::className(), ['college_plan_id' => 'applicant_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamily()
    {
        return $this->hasOne(Family::className(), ['fam_background_id' => 'applicant_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonal()
    {
        return $this->hasOne(Personal::className(), ['personal_id' => 'applicant_id']);
    }
}
