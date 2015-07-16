<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "uploadedforms".
 *
 * @property integer $id
 * @property string $scholar_lastName
 * @property string $scholar_firstName
 * @property string $scholar_middleName
 * @property string $uploadedForm
 * @property integer $scholar_id
 *
 * @property Scholars $scholar
 */
class Uploadedforms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $file;
    public static function tableName()
    {
        return 'uploadedforms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_lastName', 'scholar_firstName', 'scholar_middleName', 'uploadedForm', 'scholar_id'], 'required'],
            [['scholar_id'], 'integer'],
			[['file'],'file'],
            [['fileName','scholar_lastName', 'scholar_firstName', 'scholar_middleName', 'uploadedForm'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'scholar_lastName' => 'Scholar Last Name',
            'scholar_firstName' => 'Scholar First Name',
            'scholar_middleName' => 'Scholar Middle Name',
            'uploadedForm' => 'Uploaded Form',
            'scholar_id' => 'Scholar ID',
			'fileName' => 'File Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'scholar_id']);
    }
}
