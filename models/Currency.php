<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "currency".
 *
 * @property integer $id
 * @property string $currenytitle
 * @property string $currencysymbol
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currenytitle', 'currencysymbol'], 'required'],
            [['currenytitle'], 'string', 'max' => 100],
            [['currencysymbol'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'currenytitle' => 'Currenytitle',
            'currencysymbol' => 'Currencysymbol',
        ];
    }
}
