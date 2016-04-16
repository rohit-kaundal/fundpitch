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
 *
 * @property Company[] $companies
 * @property UserStatus $status
 * @property UserRoles $role
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
            [['username', 'email', 'password', 'firstname', 'roleid', 'statusid', 'moblenumber', 'activationcode', 'creationdate'], 'required'],
            [['roleid', 'statusid'], 'integer'],
            [['creationdate', 'logindate'], 'safe'],
            [['username'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 100],
            [['password', 'activationcode'], 'string', 'max' => 255],
            [['firstname'], 'string', 'max' => 30],
            [['moblenumber'], 'string', 'max' => 15],
            [['statusid'], 'exist', 'skipOnError' => true, 'targetClass' => UserStatus::className(), 'targetAttribute' => ['statusid' => 'id']],
            [['roleid'], 'exist', 'skipOnError' => true, 'targetClass' => UserRoles::className(), 'targetAttribute' => ['roleid' => 'id']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanies()
    {
        return $this->hasMany(Company::className(), ['userid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(UserStatus::className(), ['id' => 'statusid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(UserRoles::className(), ['id' => 'roleid']);
    }
}
