<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "allowance".
 *
 * @property string $allowance_area
 * @property string $allowance_amount
 *
 * @property Scholar[] $scholars
 */
class Allowance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'allowance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['allowance_area'], 'required'],
            [['allowance_area'], 'string'],
            [['allowance_amount'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'allowance_area' => 'Allowance Area',
            'allowance_amount' => 'Allowance Amount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholars()
    {
        return $this->hasMany(Scholar::className(), ['allowance_allowance_area' => 'allowance_area']);
    }
}
