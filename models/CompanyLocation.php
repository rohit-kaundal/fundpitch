<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company_location".
 *
 * @property integer $id
 * @property string $location
 * @property integer $companyid
 */
class CompanyLocation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location', 'companyid'], 'required'],
            [['location'], 'string'],
            [['companyid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location' => 'Location',
            'companyid' => 'Companyid',
        ];
    }
}
