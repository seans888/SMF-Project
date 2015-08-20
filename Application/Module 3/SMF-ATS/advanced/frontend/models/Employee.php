<?php

namespace frontend\models;

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
 * @property integer $user_id
 *
 * @property User $user
 * @property Event[] $events
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
            [['emp_firstname', 'emp_lastname', 'emp_midname', 'emp_position', 'emp_department', 'user_id'], 'required'],
            [['user_id'], 'integer'],
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
            'emp_firstname' => 'Employee Firstname',
            'emp_lastname' => 'Employee Lastname',
            'emp_midname' => 'Employee Middle Initial',
            'emp_position' => 'Employee Position',
            'emp_department' => 'Employee Department',
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
        return $this->hasMany(Event::className(), ['employee_employee_id' => 'employee_id']);
    }
}
