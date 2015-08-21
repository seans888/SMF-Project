<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deduction".
 *
 * @property integer $deduction_id
 * @property integer $scholar_scholar_id
 * @property integer $scholar_school_school_id
 * @property string $deduction_date
 * @property string $deduction_amount
 * @property string $deduction_remark
 *
 * @property Scholar $scholarScholar
 * @property Scholar $scholarSchoolSchool
<<<<<<< HEAD
=======
 * @property Scholar $scholarScholar0
>>>>>>> 08583c20015e1e5dbee7ec6ff0fe0b12366fe05a
 */
class Deduction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deduction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_scholar_id', 'scholar_school_school_id'], 'required'],
            [['scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['deduction_date'], 'safe'],
            [['deduction_amount'], 'number'],
            [['deduction_remark'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'deduction_id' => 'Deduction ID',
            'scholar_scholar_id' => 'Scholar Scholar ID',
            'scholar_school_school_id' => 'Scholar School School ID',
            'deduction_date' => 'Deduction Date',
            'deduction_amount' => 'Deduction Amount',
            'deduction_remark' => 'Deduction Remark',
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
<<<<<<< HEAD
=======
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarScholar0()
    {
        return $this->hasOne(Scholar::className(), ['scholar_id' => 'scholar_scholar_id', 'school_school_id' => 'scholar_school_school_id']);
>>>>>>> 08583c20015e1e5dbee7ec6ff0fe0b12366fe05a
    }
}
