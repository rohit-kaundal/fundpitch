<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "finance_detail".
 *
 * @property integer $id
 * @property integer $currentyearturnover
 * @property integer $currentyearcurrencyid
 * @property integer $estimatedturnover
 * @property integer $estimatedcurrencyid
 *
 * @property Company[] $companies
 */
class FinanceDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'finance_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currentyearturnover', 'currentyearcurrencyid', 'estimatedturnover', 'estimatedcurrencyid'], 'required'],
            [['currentyearturnover', 'currentyearcurrencyid', 'estimatedturnover', 'estimatedcurrencyid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'currentyearturnover' => 'Currentyearturnover',
            'currentyearcurrencyid' => 'Currentyearcurrencyid',
            'estimatedturnover' => 'Estimatedturnover',
            'estimatedcurrencyid' => 'Estimatedcurrencyid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanies()
    {
        return $this->hasMany(Company::className(), ['financialsid' => 'id']);
    }
}
