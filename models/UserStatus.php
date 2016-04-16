<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_status".
 *
 * @property integer $id
 * @property string $statusname
 * @property string $created_at
 * @property integer $created_by
 */
class UserStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['statusname', 'created_at', 'created_by'], 'required'],
            [['created_at'], 'safe'],
            [['created_by'], 'integer'],
            [['statusname'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'statusname' => 'Statusname',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
