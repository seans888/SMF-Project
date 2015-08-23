<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "alumni".
 *
 * @property integer $id
 * @property string $alumni_id
 * @property string $alumni_firstname
 * @property string $alumni_lastname
 * @property string $alumni_midinit
 * @property string $alumni_gender
 * @property string $alumni_address
 * @property string $alumni_contactno
 * @property string $alumni_remarks
 * @property string $alumni_office_local_no
 * @property string $alumni_email
 * @property string $alumni_year_graduated
 * @property string $alumni_course
 * @property string $alumni_school
 * @property string $alumni_company
 * @property string $alumni_status
 * @property string $alumni_area
 * @property string $alumni_cur_work
 * @property string $alumni_prev_work
 * @property string $alumni_further_study
 * @property string $alumni_achievements
 * @property string $alumni_legends
 * @property integer $user_id
 *
 * @property User $user
 */
class Alumni extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumni';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alumni_id', 'alumni_firstname', 'alumni_lastname', 'alumni_gender', 'alumni_year_graduated', 'user_id'], 'required'],
            [['alumni_year_graduated'], 'safe'],
            [['user_id'], 'integer'],
            [['alumni_id'], 'string', 'max' => 100],
            [['alumni_firstname', 'alumni_lastname', 'alumni_remarks', 'alumni_email', 'alumni_course', 'alumni_school', 'alumni_company', 'alumni_status', 'alumni_area', 'alumni_achievements'], 'string', 'max' => 255],
            [['alumni_midinit'], 'string', 'max' => 5],
            [['alumni_gender'], 'string', 'max' => 6],
            [['alumni_address', 'alumni_contactno', 'alumni_office_local_no', 'alumni_cur_work', 'alumni_prev_work', 'alumni_further_study', 'alumni_legends'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alumni_id' => 'Alumni ID',
            'alumni_firstname' => 'Alumni Firstname',
            'alumni_lastname' => 'Alumni Lastname',
            'alumni_midinit' => 'Alumni Midinit',
            'alumni_gender' => 'Alumni Gender',
            'alumni_address' => 'Alumni Address',
            'alumni_contactno' => 'Alumni Contactno',
            'alumni_remarks' => 'Alumni Remarks',
            'alumni_office_local_no' => 'Alumni Office Local No',
            'alumni_email' => 'Alumni Email',
            'alumni_year_graduated' => 'Alumni Year Graduated',
            'alumni_course' => 'Alumni Course',
            'alumni_school' => 'Alumni School',
            'alumni_company' => 'Alumni Company',
            'alumni_status' => 'Alumni Status',
            'alumni_area' => 'Alumni Area',
            'alumni_cur_work' => 'Alumni Cur Work',
            'alumni_prev_work' => 'Alumni Prev Work',
            'alumni_further_study' => 'Alumni Further Study',
            'alumni_achievements' => 'Alumni Achievements',
            'alumni_legends' => 'Alumni Legends',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
