<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $id
 * @property integer $name
 * @property string $establishment
 * @property integer $secotrcount
 * @property integer $marketsize
 * @property string $headquarters
 * @property string $ipostock
 * @property integer $companytypeid
 * @property integer $noofemployees
 * @property integer $targetedmarkets
 * @property integer $scopecapacity
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
 * @property string $fblink
 * @property string $twitterlink
 * @property string $googlepluslink
 * @property string $linkedinlink
 * @property integer $requiremtnid
 * @property string $requirement_meta
 * @property string $requirement_note
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
            [['name', 'establishment', 'secotrcount', 'marketsize', 'headquarters', 'companytypeid', 'noofemployees', 'targetedmarkets', 'scopecapacity', 'clientscount', 'productservicecount', 'companyvaluation', 'keyassociation', 'patentcount', 'peers', 'companydetail', 'website', 'logo', 'presentcreditfacilities', 'taxabilityofproducts', 'fblink', 'twitterlink', 'googlepluslink', 'linkedinlink', 'requiremtnid', 'requirement_meta', 'requirement_note'], 'required'],
            [['name', 'secotrcount', 'marketsize', 'companytypeid', 'noofemployees', 'targetedmarkets', 'scopecapacity', 'clientscount', 'productservicecount', 'patentcount', 'requiremtnid'], 'integer'],
            [['establishment'], 'safe'],
            [['ipostock', 'keyassociation', 'peers', 'companydetail', 'website', 'logo', 'presentcreditfacilities', 'taxabilityofproducts', 'requirement_meta', 'requirement_note'], 'string'],
            [['companyvaluation'], 'number'],
            [['headquarters'], 'string', 'max' => 100],
            [['fblink', 'twitterlink', 'googlepluslink', 'linkedinlink'], 'string', 'max' => 255],
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
            'fblink' => 'Fblink',
            'twitterlink' => 'Twitterlink',
            'googlepluslink' => 'Googlepluslink',
            'linkedinlink' => 'Linkedinlink',
            'requiremtnid' => 'Requiremtnid',
            'requirement_meta' => 'Requirement Meta',
            'requirement_note' => 'Requirement Note',
        ];
    }
}
