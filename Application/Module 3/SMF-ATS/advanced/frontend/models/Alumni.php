<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumni".
 *
 * @property integer $alumni_id
 * @property string $alumni_firstname
 * @property string $alumni_lastname
 * @property string $alumni_midname
 * @property string $alumni_course
 * @property string $alumni_school
 * @property string $alumni_year_graduated
 * @property string $alumni_status
 * @property string $alumni_email
 * @property string $alumni_cur_work
 * @property string $alumni_prev_work
 * @property string $alumni_further_study
 * @property integer $user_user_id
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
            [['alumni_firstname', 'alumni_lastname', 'alumni_midname', 'alumni_course', 'alumni_school', 'alumni_year_graduated', 'alumni_status', 'alumni_email', 'user_user_id', 'user_id'], 'required'],
            [['alumni_year_graduated'], 'safe'],
            [['user_user_id', 'user_id'], 'integer'],
            [['alumni_firstname', 'alumni_lastname', 'alumni_midname', 'alumni_course', 'alumni_school', 'alumni_status', 'alumni_email', 'alumni_cur_work', 'alumni_prev_work', 'alumni_further_study'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'alumni_id' => 'Alumni ID',
            'alumni_firstname' => 'Alumni Firstname',
            'alumni_lastname' => 'Alumni Lastname',
            'alumni_midname' => 'Alumni Midname',
            'alumni_course' => 'Alumni Course',
            'alumni_school' => 'Alumni School',
            'alumni_year_graduated' => 'Alumni Year Graduated',
            'alumni_status' => 'Alumni Status',
            'alumni_email' => 'Alumni Email',
            'alumni_cur_work' => 'Alumni Cur Work',
            'alumni_prev_work' => 'Alumni Prev Work',
            'alumni_further_study' => 'Alumni Further Study',
            'user_user_id' => 'User User ID',
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
