<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Company;

/**
 * SearchCompany represents the model behind the search form about `app\models\Company`.
 */
class SearchCompany extends Company
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'companytypeid', 'noofemployees', 'clientscount', 'productservicecount', 'patentcount', 'financialsid', 'requiremtnid', 'userid'], 'integer'],
            [['name', 'establishment', 'secotrcount', 'marketsize', 'headquarters', 'ipostock', 'targetedmarkets', 'scopecapacity', 'keyassociation', 'peers', 'companydetail', 'website', 'logo', 'presentcreditfacilities', 'taxabilityofproducts', 'fblink', 'twitterlink', 'googlepluslink', 'linkedinlink', 'requirement_meta', 'requirement_note'], 'safe'],
            [['companyvaluation'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Company::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'establishment' => $this->establishment,
            'companytypeid' => $this->companytypeid,
            'noofemployees' => $this->noofemployees,
            'clientscount' => $this->clientscount,
            'productservicecount' => $this->productservicecount,
            'companyvaluation' => $this->companyvaluation,
            'patentcount' => $this->patentcount,
            'financialsid' => $this->financialsid,
            'requiremtnid' => $this->requiremtnid,
            'userid' => $this->userid,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'secotrcount', $this->secotrcount])
            ->andFilterWhere(['like', 'marketsize', $this->marketsize])
            ->andFilterWhere(['like', 'headquarters', $this->headquarters])
            ->andFilterWhere(['like', 'ipostock', $this->ipostock])
            ->andFilterWhere(['like', 'targetedmarkets', $this->targetedmarkets])
            ->andFilterWhere(['like', 'scopecapacity', $this->scopecapacity])
            ->andFilterWhere(['like', 'keyassociation', $this->keyassociation])
            ->andFilterWhere(['like', 'peers', $this->peers])
            ->andFilterWhere(['like', 'companydetail', $this->companydetail])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'presentcreditfacilities', $this->presentcreditfacilities])
            ->andFilterWhere(['like', 'taxabilityofproducts', $this->taxabilityofproducts])
            ->andFilterWhere(['like', 'fblink', $this->fblink])
            ->andFilterWhere(['like', 'twitterlink', $this->twitterlink])
            ->andFilterWhere(['like', 'googlepluslink', $this->googlepluslink])
            ->andFilterWhere(['like', 'linkedinlink', $this->linkedinlink])
            ->andFilterWhere(['like', 'requirement_meta', $this->requirement_meta])
            ->andFilterWhere(['like', 'requirement_note', $this->requirement_note]);

        return $dataProvider;
    }
}
