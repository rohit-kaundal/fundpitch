<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "promoters".
 *
 * @property integer $id
 * @property integer $name
 * @property integer $promotertypeid
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
            [['name', 'promotertypeid', 'company_id', 'pic'], 'required'],
            [['name', 'promotertypeid', 'company_id'], 'integer'],
            [['pic'], 'string'],
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
            'promotertypeid' => 'Promotertypeid',
            'company_id' => 'Company ID',
            'pic' => 'Pic',
        ];
    }
}
