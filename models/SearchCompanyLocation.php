<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CompanyLocation;

/**
 * SearchCompanyLocation represents the model behind the search form about `app\models\CompanyLocation`.
 */
class SearchCompanyLocation extends CompanyLocation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'companyid'], 'integer'],
            [['location'], 'safe'],
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
        $query = CompanyLocation::find();

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
            'companyid' => $this->companyid,
        ]);

        $query->andFilterWhere(['like', 'location', $this->location]);

        return $dataProvider;
    }
}
