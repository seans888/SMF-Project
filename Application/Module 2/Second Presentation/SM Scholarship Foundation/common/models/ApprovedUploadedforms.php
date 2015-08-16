<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "approved_uploadedforms".
 *
 * @property integer $id
 * @property string $uploadedForm
 * @property integer $uploaded_scholar_id
 * @property string $fileName
 * @property string $approval_status
 * @property string $approved_by
 * @property string $approved_remark
 *
 * @property Scholars $uploadedScholar
 */
class ApprovedUploadedforms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'approved_uploadedforms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uploadedForm', 'uploaded_scholar_id', 'fileName'], 'required'],
            [['uploaded_scholar_id'], 'integer'],
            [['approval_status'], 'string'],
            [['uploadedForm', 'fileName', 'approved_by', 'approved_remark'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uploadedForm' => 'Uploaded Form',
            'uploaded_scholar_id' => 'Uploaded Scholar ID',
            'fileName' => 'File Name',
            'approval_status' => 'Approval Status',
            'approved_by' => 'Approved By',
            'approved_remark' => 'Approved Remark',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUploadedScholar()
    {
        return $this->hasOne(Scholars::className(), ['scholar_id' => 'uploaded_scholar_id']);
    }
}
