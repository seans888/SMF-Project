<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $employee_id
 * @property string $emp_firstname
 * @property string $emp_lastname
 * @property string $emp_midname
 * @property string $emp_position
 * @property string $emp_department
 * @property integer $user_user_id
 * @property integer $user_user_id1
 * @property integer $user_id
 *
 * @property User $user
 * @property Event[] $events
 * @property Logs[] $logs
 * @property Migration[] $migrations
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'emp_firstname', 'emp_lastname', 'emp_midname', 'emp_position', 'emp_department', 'user_user_id', 'user_user_id1', 'user_id'], 'required'],
            [['employee_id', 'user_user_id', 'user_user_id1', 'user_id'], 'integer'],
            [['emp_firstname', 'emp_lastname', 'emp_midname', 'emp_position', 'emp_department'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'emp_firstname' => 'Emp Firstname',
            'emp_lastname' => 'Emp Lastname',
            'emp_midname' => 'Emp Midname',
            'emp_position' => 'Emp Position',
            'emp_department' => 'Emp Department',
            'user_user_id' => 'User User ID',
            'user_user_id1' => 'User User Id1',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['employee_employee_id' => 'employee_id', 'employee_user_user_id' => 'user_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogs()
    {
        return $this->hasMany(Logs::className(), ['employee_employee_id' => 'employee_id', 'employee_user_user_id' => 'user_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMigrations()
    {
        return $this->hasMany(Migration::className(), ['employee_employee_id' => 'employee_id', 'employee_user_user_id' => 'user_user_id']);
    }
}
