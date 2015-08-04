<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $event_id
 * @property string $event_title
 * @property string $event_descript
 * @property string $event_date
 * @property string $event_place
 * @property integer $employee_employee_id
 * @property integer $employee_user_user_id
 *
 * @property Employee $employeeEmployee
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id', 'event_title', 'event_descript', 'event_date', 'event_place', 'employee_employee_id', 'employee_user_user_id'], 'required'],
            [['event_id', 'employee_employee_id', 'employee_user_user_id'], 'integer'],
            [['event_date'], 'safe'],
            [['event_title', 'event_descript', 'event_place'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'event_title' => 'Event Title',
            'event_descript' => 'Event Description',
            'event_date' => 'Event Date',
            'event_place' => 'Event Place',
            'employee_employee_id' => 'Employee Employee ID',
            'employee_user_user_id' => 'Employee User User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeEmployee()
    {
        return $this->hasOne(Employee::className(), ['employee_id' => 'employee_employee_id', 'user_user_id' => 'employee_user_user_id']);
    }
}
