<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logs".
 *
 * @property integer $logs_id
 * @property string $logs_descript
 * @property string $logs_date
 * @property integer $employee_employee_id
 * @property integer $employee_user_user_id
 *
 * @property Employee $employeeEmployee
 */
class Logs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logs_id', 'logs_descript', 'logs_date', 'employee_employee_id', 'employee_user_user_id'], 'required'],
            [['logs_id', 'employee_employee_id', 'employee_user_user_id'], 'integer'],
            [['logs_date'], 'safe'],
            [['logs_descript'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'logs_id' => 'Logs ID',
            'logs_descript' => 'Logs Descript',
            'logs_date' => 'Logs Date',
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
