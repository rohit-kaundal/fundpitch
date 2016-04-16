<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company_documents".
 *
 * @property integer $id
 * @property integer $documenttypeid
 * @property string $date
 * @property string $file
 */
class CompanyDocuments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_documents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['documenttypeid', 'date', 'file'], 'required'],
            [['documenttypeid'], 'integer'],
            [['date'], 'safe'],
            [['file'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'documenttypeid' => 'Documenttypeid',
            'date' => 'Date',
            'file' => 'File',
        ];
    }
}
