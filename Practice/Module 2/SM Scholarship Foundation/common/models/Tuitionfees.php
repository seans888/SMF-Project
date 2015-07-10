<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tuitionfees".
 *
 * @property integer $tuitionfee_id
 * @property integer $tuitionfee_scholar_id
 * @property string $tuitionfee_scholar_lastName
 * @property string $tuitionfee_scholar_firstName
 * @property string $tuitionfee_scholar_middleName
 * @property integer $tuitionfee_amount
 * @property string $tuitionfee_dateOfEnrollment
 * @property string $tuitionfee_dateOfPayment
 * @property string $tuitionfee_paidStatus
 *
 * @property Scholars $tuitionfeeScholar
 */
class Tuitionfees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tuitionfees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuitionfee_scholar_id', 'tuitionfee_amount'], 'integer'],
            [['tuitionfee_dateOfEnrollment', 'tuitionfee_dateOfPayment'], 'safe'],
            [['tuitionfee_paidStatus'], 'string'],
            [['tuitionfee_scholar_lastName', 'tuitionfee_scholar_firstName', 'tuitionfee_scholar_middleName'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tuitionfee_id' => 'Tuitionfee ID',
            'tuitionfee_scholar_id' => 'Tuitionfee Scholar ID',
            'tuitionfee_scholar_lastName' => 'Tuitionfee Scholar Last Name',
            'tuitionfee_scholar_firstName' => 'Tuitionfee Scholar First Name',
            'tuitionfee_scholar_middleName' => 'Tuitionfee Scholar Middle Name',
            'tuitionfee_amount' => 'Tuitionfee Amount',
            'tuitionfee_dateOfEnrollment' => 'Tuitionfee Date Of Enrollment',
            'tuitionfee_dateOfPayment' => 'Tuitionfee Date Of Payment',
            'tuitionfee_paidStatus' => 'Tuitionfee Paid Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTuitionfeeScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'tuitionfee_scholar_id']);
    }
}
