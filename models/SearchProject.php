<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Project;

/**
 * SearchProject represents the model behind the search form about `app\models\Project`.
 */
class SearchProject extends Project
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'abusecount', 'status_id', 'posted_by_id', 'company_id'], 'integer'],
            [['title', 'post_date', 'deadline_date', 'visibility', 'company_relation'], 'safe'],
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
        $query = Project::find();

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
            'post_date' => $this->post_date,
            'abusecount' => $this->abusecount,
            'deadline_date' => $this->deadline_date,
            'status_id' => $this->status_id,
            'posted_by_id' => $this->posted_by_id,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'visibility', $this->visibility])
            ->andFilterWhere(['like', 'company_relation', $this->company_relation]);

        return $dataProvider;
    }
}
