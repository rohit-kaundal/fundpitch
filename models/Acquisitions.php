<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acquisitions".
 *
 * @property integer $id
 * @property string $date
 * @property string $acquisitiontitle
 * @property double $amount
 * @property integer $currencyid
 * @property integer $companyid
 *
 * @property Company $company
 * @property Currency $currency
 */
class Acquisitions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acquisitions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'acquisitiontitle', 'amount', 'currencyid', 'companyid'], 'required'],
            [['date'], 'safe'],
            [['amount'], 'number'],
            [['currencyid', 'companyid'], 'integer'],
            [['acquisitiontitle'], 'string', 'max' => 255],
            [['companyid'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['companyid' => 'id']],
            [['currencyid'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currencyid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'acquisitiontitle' => 'Acquisitiontitle',
            'amount' => 'Amount',
            'currencyid' => 'Currencyid',
            'companyid' => 'Companyid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'companyid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['id' => 'currencyid']);
    }
}
