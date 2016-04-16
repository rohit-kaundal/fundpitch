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
}
