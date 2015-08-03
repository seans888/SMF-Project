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
 * @property string $fileName
 *
 * @property Scholars $scholar
 */
class Uploadedforms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $file;
	public $scholar_lastName;
	public $scholar_firstName;
	public $scholar_middleName;
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
            [['uploaded_scholar_id','file','fileName'], 'required'],
            [['uploaded_scholar_id'], 'integer'],
			[['file'], 'file'],
            [['scholar_lastName', 'scholar_firstName', 'scholar_middleName','uploadedForm', 'fileName'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'scholar_lastName'=>'Last Name',
			'scholar_firstName'=>'First Name',
			'scholar_middleName'=>'Middle Name',
            'uploadedForm' => 'Uploaded Form',
            'uploaded_scholar_id' => 'Scholar ID',
			'file' => 'File',
            'fileName' => 'Form Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'uploaded_scholar_id']);
    }
}
