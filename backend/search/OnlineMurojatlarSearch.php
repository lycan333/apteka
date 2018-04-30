<?php

namespace backend\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OnlineMurojatlar;

/**
 * OnlineMurojatlarSearch represents the model behind the search form of `backend\models\OnlineMurojatlar`.
 */
class OnlineMurojatlarSearch extends OnlineMurojatlar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'UserId'], 'integer'],
            [['level', 'xabar', 'mavzu'], 'safe'],
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
        $query = OnlineMurojatlar::find();

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
            'UserId' => $this->UserId,
        ]);

        $query->andFilterWhere(['like', 'level', $this->level])
            ->andFilterWhere(['like', 'xabar', $this->xabar])
            ->andFilterWhere(['like', 'mavzu', $this->mavzu]);

        return $dataProvider;
    }
}
