<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sectors".
 *
 * @property integer $id
 * @property string $sectorname
 * @property string $created_at
 * @property integer $created_by
 */
class Sectors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sectors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sectorname', 'created_at', 'created_by'], 'required'],
            [['created_at'], 'safe'],
            [['created_by'], 'integer'],
            [['sectorname'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sectorname' => 'Sectorname',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
