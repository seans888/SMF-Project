<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "approved_grades".
 *
 * @property integer $grade_id
 * @property integer $grade_schoolYear
 * @property integer $grade_Term
 * @property integer $grade_scholar_id
 * @property string $grade_subject
 * @property string $grade_units
 * @property integer $grade_value
 * @property integer $equivalence_grade_rule
 * @property integer $School_id
 * @property string $approval_status
 * @property string $approved_by
 * @property string $approved_remark
 */
class ApprovedGrades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'approved_grades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade_schoolYear', 'grade_Term', 'grade_scholar_id', 'grade_subject', 'grade_units', 'grade_value', 'equivalence_grade_rule', 'School_id', 'approval_status', 'approved_by', 'approved_remark'], 'required'],
            [['grade_schoolYear', 'grade_Term', 'grade_scholar_id', 'grade_value', 'equivalence_grade_rule', 'School_id'], 'integer'],
            [['grade_units'], 'number'],
            [['approval_status'], 'string'],
            [['grade_subject', 'approved_by', 'approved_remark'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grade_id' => 'Grade ID',
            'grade_schoolYear' => 'Grade School Year',
            'grade_Term' => 'Grade  Term',
            'grade_scholar_id' => 'Grade Scholar ID',
            'grade_subject' => 'Grade Subject',
            'grade_units' => 'Grade Units',
            'grade_value' => 'Grade Value',
            'equivalence_grade_rule' => 'Equivalence Grade Rule',
            'School_id' => 'School ID',
            'approval_status' => 'Approval Status',
            'approved_by' => 'Approved By',
            'approved_remark' => 'Approved Remark',
        ];
    }
}
