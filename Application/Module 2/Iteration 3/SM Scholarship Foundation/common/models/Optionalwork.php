<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "optionalwork".
 *
 * @property integer $optionalwork_id
 * @property integer $scholar_scholar_id
 * @property integer $scholar_school_school_id
 * @property string $optionalwork_location
 * @property string $optionalwork_start_date
 * @property string $optionalwork_end_date
 *
 * @property Scholar $scholarScholar
 */
class Optionalwork extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'optionalwork';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['optionalwork_id', 'scholar_scholar_id', 'scholar_school_school_id'], 'required'],
            [['optionalwork_id', 'scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['optionalwork_start_date', 'optionalwork_end_date'], 'safe'],
            [['optionalwork_location'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'optionalwork_id' => 'Optionalwork ID',
            'scholar_scholar_id' => 'Scholar Scholar ID',
            'scholar_school_school_id' => 'Scholar School School ID',
            'optionalwork_location' => 'Optionalwork Location',
            'optionalwork_start_date' => 'Optionalwork Start Date',
            'optionalwork_end_date' => 'Optionalwork End Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarScholar()
    {
        return $this->hasOne(Scholar::className(), ['scholar_id' => 'scholar_scholar_id', 'school_school_id' => 'scholar_school_school_id']);
    }
}
