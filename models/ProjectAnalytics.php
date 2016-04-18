<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_analytics".
 *
 * @property integer $id
 * @property integer $project_id
 * @property integer $indvidiual-c
 * @property integer $vc-c
 * @property integer $firm-c
 * @property integer $total-c
 *
 * @property Project $project
 */
class ProjectAnalytics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_analytics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'indvidiual-c', 'vc-c', 'firm-c', 'total-c'], 'required'],
            [['project_id', 'indvidiual-c', 'vc-c', 'firm-c', 'total-c'], 'integer'],
            [['project_id'], 'unique'],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'indvidiual-c' => 'Indvidiual C',
            'vc-c' => 'Vc C',
            'firm-c' => 'Firm C',
            'total-c' => 'Total C',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }
}
