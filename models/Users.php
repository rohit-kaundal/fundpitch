<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $firstname
 * @property integer $roleid
 * @property integer $statusid
 * @property string $moblenumber
 * @property string $activationcode
 * @property string $creationdate
 * @property string $logindate
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password', 'firstname', 'roleid', 'statusid', 'moblenumber', 'activationcode', 'creationdate', 'logindate'], 'required'],
            [['roleid', 'statusid'], 'integer'],
            [['creationdate', 'logindate'], 'safe'],
            [['username'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 100],
            [['password', 'activationcode'], 'string', 'max' => 255],
            [['firstname'], 'string', 'max' => 30],
            [['moblenumber'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'firstname' => 'Firstname',
            'roleid' => 'Roleid',
            'statusid' => 'Statusid',
            'moblenumber' => 'Moblenumber',
            'activationcode' => 'Activationcode',
            'creationdate' => 'Creationdate',
            'logindate' => 'Logindate',
        ];
    }
}
