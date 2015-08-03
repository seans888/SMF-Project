<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "migration".
 *
 * @property integer $migration_id
 * @property string $migration_year
 * @property integer $employee_employee_id
 * @property integer $employee_user_user_id
 *
 * @property Employee $employeeEmployee
 */
class Migration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'migration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['migration_id', 'employee_employee_id', 'employee_user_user_id'], 'required'],
            [['migration_id', 'employee_employee_id', 'employee_user_user_id'], 'integer'],
            [['migration_year'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'migration_id' => 'Migration ID',
            'migration_year' => 'Migration Year',
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
