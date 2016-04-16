<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "requirement_type".
 *
 * @property integer $id
 * @property string $requirementname
 * @property string $created_at
 * @property integer $created_by
 *
 * @property Company[] $companies
 */
class RequirementType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requirement_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['requirementname', 'created_by'], 'required'],
            [['created_at'], 'safe'],
            [['created_by'], 'integer'],
            [['requirementname'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'requirementname' => 'Requirementname',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanies()
    {
        return $this->hasMany(Company::className(), ['requiremtnid' => 'id']);
    }
}
