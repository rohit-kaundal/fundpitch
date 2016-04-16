<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documents_type".
 *
 * @property integer $id
 * @property string $documenttype
 */
class DocumentsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'documents_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['documenttype'], 'required'],
            [['documenttype'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'documenttype' => 'Documenttype',
        ];
    }
}
