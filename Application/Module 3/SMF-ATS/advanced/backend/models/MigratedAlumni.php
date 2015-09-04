<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "migrated_alumni".
 *
 * @property integer $id
 * @property string $migalu_id
 * @property string $migalu_lastname
 * @property string $migalu_firstname
 * @property string $migalu_midinit
 * @property string $migalu_address
 * @property string $migalu_gender
 * @property string $migalu_school
 * @property string $migalu_course
 * @property string $migalu_email
 * @property string $migalu_contactno
 * @property string $migalu_remarks
 * @property string $migalu_area
 * @property string $migalu_office_local_no
 * @property string $migalu_year_graduated
 * @property string $migalu_status
 * @property string $migalu_cur_work
 * @property string $migalu_prev_work
 * @property string $migalu_achievements
 * @property string $migalu_company
 * @property string $migalu_legends
 */
class MigratedAlumni extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'migrated_alumni';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['migalu_id', 'migalu_lastname', 'migalu_firstname', 'migalu_gender', 'migalu_year_graduated'], 'required'],
            [['migalu_year_graduated'], 'safe'],
            [['migalu_id', 'migalu_lastname', 'migalu_firstname', 'migalu_address', 'migalu_email', 'migalu_remarks', 'migalu_cur_work', 'migalu_prev_work', 'migalu_achievements', 'migalu_company'], 'string', 'max' => 255],
            [['migalu_midinit'], 'string', 'max' => 10],
            [['migalu_gender', 'migalu_contactno', 'migalu_office_local_no', 'migalu_status', 'migalu_legends'], 'string', 'max' => 45],
            [['migalu_school', 'migalu_course'], 'string', 'max' => 150],
            [['migalu_area'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'migalu_id' => 'Migalu ID',
            'migalu_lastname' => 'Migalu Lastname',
            'migalu_firstname' => 'Migalu Firstname',
            'migalu_midinit' => 'Migalu Midinit',
            'migalu_address' => 'Migalu Address',
            'migalu_gender' => 'Migalu Gender',
            'migalu_school' => 'Migalu School',
            'migalu_course' => 'Migalu Course',
            'migalu_email' => 'Migalu Email',
            'migalu_contactno' => 'Migalu Contactno',
            'migalu_remarks' => 'Migalu Remarks',
            'migalu_area' => 'Migalu Area',
            'migalu_office_local_no' => 'Migalu Office Local No',
            'migalu_year_graduated' => 'Migalu Year Graduated',
            'migalu_status' => 'Migalu Status',
            'migalu_cur_work' => 'Migalu Cur Work',
            'migalu_prev_work' => 'Migalu Prev Work',
            'migalu_achievements' => 'Migalu Achievements',
            'migalu_company' => 'Migalu Company',
            'migalu_legends' => 'Migalu Legends',
        ];
    }
}
