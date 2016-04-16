<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "promoters".
 *
 * @property integer $id
 * @property integer $name
 * @property string $promotertype
 * @property integer $company_id
 * @property string $pic
 */
class Promoters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'promoters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'promotertype', 'company_id', 'pic'], 'required'],
            [['name', 'company_id'], 'integer'],
            [['promotertype', 'pic'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'promotertype' => 'Promotertype',
            'company_id' => 'Company ID',
            'pic' => 'Pic',
        ];
    }
}
