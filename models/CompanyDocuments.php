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
 * @property integer $companyid
 *
 * @property DocumentsType $documenttype
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
            [['documenttypeid', 'date', 'file', 'companyid'], 'required'],
            [['documenttypeid', 'companyid'], 'integer'],
            [['date'], 'safe'],
            [['file'], 'string'],
            [['documenttypeid'], 'exist', 'skipOnError' => true, 'targetClass' => DocumentsType::className(), 'targetAttribute' => ['documenttypeid' => 'id']],
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
            'companyid' => 'Companyid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocumenttype()
    {
        return $this->hasOne(DocumentsType::className(), ['id' => 'documenttypeid']);
    }
}
