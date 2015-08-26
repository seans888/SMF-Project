<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "email".
 *
 * @property integer $email_id
 * @property integer $email_scholar_id
 * @property string $subject
 * @property string $content
 *
 * @property Scholar $emailScholar
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_scholar_id', 'subject', 'content'], 'required'],
            [['email_id', 'email_scholar_id'], 'integer'],
            [['content'], 'string'],
            [['subject'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email_id' => 'Email ID',
            //'email_scholar_id' => 'Email Scholar ID',
			'email_scholar_id' => 'Scholar ID',
            'subject' => 'Subject',
            'content' => 'Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailScholar()
    {
        return $this->hasOne(Scholar::className(), ['scholar_id' => 'email_scholar_id']);
    }
}
