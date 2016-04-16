<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_roles".
 *
 * @property integer $id
 * @property string $rolename
 * @property string $created_at
 * @property integer $created_by
 */
class UserRoles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rolename', 'created_at', 'created_by'], 'required'],
            [['created_at'], 'safe'],
            [['created_by'], 'integer'],
            [['rolename'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rolename' => 'Rolename',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
