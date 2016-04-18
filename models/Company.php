<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $id
 * @property string $name
 * @property string $establishment
 * @property string $secotrcount
 * @property string $marketsize
 * @property string $headquarters
 * @property string $ipostock
 * @property integer $companytypeid
 * @property integer $noofemployees
 * @property string $targetedmarkets
 * @property string $scopecapacity
 * @property integer $clientscount
 * @property integer $productservicecount
 * @property double $companyvaluation
 * @property string $keyassociation
 * @property integer $patentcount
 * @property string $peers
 * @property string $companydetail
 * @property string $website
 * @property string $logo
 * @property string $presentcreditfacilities
 * @property string $taxabilityofproducts
 * @property integer $financialsid
 * @property string $fblink
 * @property string $twitterlink
 * @property string $googlepluslink
 * @property string $linkedinlink
 * @property integer $requiremtnid
 * @property string $requirement_meta
 * @property string $requirement_note
 * @property integer $userid
 *
 * @property Acquisitions[] $acquisitions
 * @property CompanyTypes $companytype
 * @property FinanceDetail $financials
 * @property RequirementType $requiremtn
 * @property Users $user
 * @property Project[] $projects
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'establishment', 'secotrcount', 'marketsize', 'headquarters', 'companytypeid', 'noofemployees', 'targetedmarkets', 'scopecapacity', 'clientscount', 'productservicecount', 'companyvaluation', 'keyassociation', 'patentcount', 'peers', 'companydetail', 'website', 'logo', 'presentcreditfacilities', 'taxabilityofproducts', 'financialsid', 'fblink', 'twitterlink', 'googlepluslink', 'linkedinlink', 'requiremtnid', 'requirement_meta', 'requirement_note', 'userid'], 'required'],
            [['establishment'], 'safe'],
            [['secotrcount', 'ipostock', 'targetedmarkets', 'scopecapacity', 'keyassociation', 'peers', 'companydetail', 'website', 'logo', 'presentcreditfacilities', 'taxabilityofproducts', 'requirement_meta', 'requirement_note'], 'string'],
            [['companytypeid', 'noofemployees', 'clientscount', 'productservicecount', 'patentcount', 'financialsid', 'requiremtnid', 'userid'], 'integer'],
            [['companyvaluation'], 'number'],
            [['name', 'marketsize'], 'string', 'max' => 150],
            [['headquarters'], 'string', 'max' => 100],
            [['fblink', 'twitterlink', 'googlepluslink', 'linkedinlink'], 'string', 'max' => 255],
            [['companytypeid'], 'exist', 'skipOnError' => true, 'targetClass' => CompanyTypes::className(), 'targetAttribute' => ['companytypeid' => 'id']],
            [['financialsid'], 'exist', 'skipOnError' => true, 'targetClass' => FinanceDetail::className(), 'targetAttribute' => ['financialsid' => 'id']],
            [['requiremtnid'], 'exist', 'skipOnError' => true, 'targetClass' => RequirementType::className(), 'targetAttribute' => ['requiremtnid' => 'id']],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['userid' => 'id']],
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
            'establishment' => 'Establishment',
            'secotrcount' => 'Secotrcount',
            'marketsize' => 'Marketsize',
            'headquarters' => 'Headquarters',
            'ipostock' => 'Ipostock',
            'companytypeid' => 'Companytypeid',
            'noofemployees' => 'Noofemployees',
            'targetedmarkets' => 'Targetedmarkets',
            'scopecapacity' => 'Scopecapacity',
            'clientscount' => 'Clientscount',
            'productservicecount' => 'Productservicecount',
            'companyvaluation' => 'Companyvaluation',
            'keyassociation' => 'Keyassociation',
            'patentcount' => 'Patentcount',
            'peers' => 'Peers',
            'companydetail' => 'Companydetail',
            'website' => 'Website',
            'logo' => 'Logo',
            'presentcreditfacilities' => 'Presentcreditfacilities',
            'taxabilityofproducts' => 'Taxabilityofproducts',
            'financialsid' => 'Financialsid',
            'fblink' => 'Fblink',
            'twitterlink' => 'Twitterlink',
            'googlepluslink' => 'Googlepluslink',
            'linkedinlink' => 'Linkedinlink',
            'requiremtnid' => 'Requiremtnid',
            'requirement_meta' => 'Requirement Meta',
            'requirement_note' => 'Requirement Note',
            'userid' => 'Userid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcquisitions()
    {
        return $this->hasMany(Acquisitions::className(), ['companyid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanytype()
    {
        return $this->hasOne(CompanyTypes::className(), ['id' => 'companytypeid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFinancials()
    {
        return $this->hasOne(FinanceDetail::className(), ['id' => 'financialsid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequiremtn()
    {
        return $this->hasOne(RequirementType::className(), ['id' => 'requiremtnid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['company_id' => 'id']);
    }
}
