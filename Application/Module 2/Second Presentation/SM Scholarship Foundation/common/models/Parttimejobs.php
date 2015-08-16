<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parttimejobs".
 *
 * @property integer $id
 * @property integer $job_scholar_id
 * @property string $job_location
 * @property string $job_startDate
 * @property string $job_endDate
 * @property string $job_description
 *
 * @property Scholars $jobScholar
 */
class Parttimejobs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parttimejobs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_scholar_id', 'job_location', 'job_startDate', 'job_endDate', 'job_description'], 'required'],
            [['job_scholar_id'], 'integer'],
            [['job_startDate', 'job_endDate'], 'safe'],
            [['job_description'], 'string'],
            [['job_location'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job_scholar_id' => 'Job Scholar ID',
            'job_location' => 'Job Location',
            'job_startDate' => 'Job Start Date',
            'job_endDate' => 'Job End Date',
            'job_description' => 'Job Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'job_scholar_id']);
    }
}
