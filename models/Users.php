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
 * @property integer $account_id
 *
 * @property Company[] $companies
 * @property Project[] $projects
 * @property UserRoles $role
 * @property UserStatus $status
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
            [['username', 'email', 'password', 'firstname', 'roleid', 'statusid', 'moblenumber', 'activationcode', 'creationdate', 'account_id'], 'required'],
            [['roleid', 'statusid', 'account_id'], 'integer'],
            [['creationdate', 'logindate'], 'safe'],
            [['username'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 100],
            [['password', 'activationcode'], 'string', 'max' => 255],
            [['firstname'], 'string', 'max' => 30],
            [['moblenumber'], 'string', 'max' => 15],
            [['roleid'], 'exist', 'skipOnError' => true, 'targetClass' => UserRoles::className(), 'targetAttribute' => ['roleid' => 'id']],
            [['statusid'], 'exist', 'skipOnError' => true, 'targetClass' => UserStatus::className(), 'targetAttribute' => ['statusid' => 'id']],
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
            'account_id' => 'Account ID',
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
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['posted_by_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(UserRoles::className(), ['id' => 'roleid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(UserStatus::className(), ['id' => 'statusid']);
    }
}
