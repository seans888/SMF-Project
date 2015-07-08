<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tuitions".
 *
 * @property integer $tuition_id
 * @property string $tuition_full_amount
 * @property integer $tuition_scholar_id
 *
 * @property Scholars $tuitionScholar
 */
class Tuitions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tuitions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuition_full_amount', 'tuition_scholar_id'], 'required'],
            [['tuition_scholar_id'], 'integer'],
            [['tuition_full_amount'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tuition_id' => 'Tuition ID',
            'tuition_full_amount' => 'Tuition Full Amount',
            'tuition_scholar_id' => 'Tuition Scholar ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTuitionScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'tuition_scholar_id']);
    }
}
