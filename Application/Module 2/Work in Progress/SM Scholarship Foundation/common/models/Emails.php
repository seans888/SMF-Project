<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "emails".
 *
 * @property integer $id
 * @property string $receiver_name
 * @property string $receiver_email
 * @property string $subject
 * @property string $content
 */
class Emails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['writer_name', 'writer_email', 'subject', 'content'], 'required'],
            [['content'], 'string'],
            [['writer_name'], 'string', 'max' => 100],
            [['writer_email'], 'string', 'max' => 200],
            [['subject'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'writer_name' => 'Writer Name',
            'writer_email' => 'Writer Email',
            'subject' => 'Subject',
            'content' => 'Content',
        ];
    }
}
