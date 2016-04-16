<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "investments".
 *
 * @property integer $id
 * @property string $date
 * @property string $investeetitle
 * @property double $amount
 * @property integer $currencyid
 * @property integer $companyid
 */
class Investments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'investments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'investeetitle', 'amount', 'currencyid', 'companyid'], 'required'],
            [['date'], 'safe'],
            [['amount'], 'number'],
            [['currencyid', 'companyid'], 'integer'],
            [['investeetitle'], 'string', 'max' => 255],
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
            'investeetitle' => 'Investeetitle',
            'amount' => 'Amount',
            'currencyid' => 'Currencyid',
            'companyid' => 'Companyid',
        ];
    }
}
