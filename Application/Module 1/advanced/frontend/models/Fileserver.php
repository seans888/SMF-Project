<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fileserver".
 *
 * @property integer $id
 * @property string $f138
 * @property string $photo
 */
class Fileserver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;

    public static function tableName()
    {
        return 'fileserver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['f138', 'required'],
            [['f138', 'photo'], 'string', 'max' => 200],
            [['file'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'f138' => 'F138',
          //  'photo' => 'Photo',
            'file' => 'Upload File',
        ];
    }
}
