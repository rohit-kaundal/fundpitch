<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property integer $id
 * @property string $title
 * @property string $post_date
 * @property integer $abusecount
 * @property string $deadline_date
 * @property integer $status_id
 * @property integer $posted_by_id
 * @property string $visibility
 * @property string $company_relation
 * @property integer $company_id
 *
 * @property Company $company
 * @property Users $postedBy
 * @property ProjectStatus $status
 * @property ProjectAnalytics $projectAnalytics
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'post_date', 'abusecount', 'deadline_date', 'status_id', 'posted_by_id', 'company_id'], 'required'],
            [['post_date', 'deadline_date'], 'safe'],
            [['abusecount', 'status_id', 'posted_by_id', 'company_id'], 'integer'],
            [['visibility', 'company_relation'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'id']],
            [['posted_by_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['posted_by_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
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
            'post_date' => 'Post Date',
            'abusecount' => 'Abusecount',
            'deadline_date' => 'Deadline Date',
            'status_id' => 'Status ID',
            'posted_by_id' => 'Posted By ID',
            'visibility' => 'Visibility',
            'company_relation' => 'Company Relation',
            'company_id' => 'Company ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostedBy()
    {
        return $this->hasOne(Users::className(), ['id' => 'posted_by_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(ProjectStatus::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectAnalytics()
    {
        return $this->hasOne(ProjectAnalytics::className(), ['project_id' => 'id']);
    }
}
