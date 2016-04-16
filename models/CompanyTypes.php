<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company_types".
 *
 * @property integer $id
 * @property integer $title
 * @property string $created_at
 * @property integer $created_by
 */
class CompanyTypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'created_at', 'created_by'], 'required'],
            [['title', 'created_by'], 'integer'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
