<?php

namespace backend\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dori;

/**
 * DoriSearch represents the model behind the search form of `backend\models\Dori`.
 */
class DoriSearch extends Dori
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'firmaId'], 'integer'],
            [['nomi', 'seria', 'madeDate', 'DeadLine'], 'safe'],
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
        $query = Dori::find();

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
            'firmaId' => $this->firmaId,
            'madeDate' => $this->madeDate,
            'DeadLine' => $this->DeadLine,
        ]);

        $query->andFilterWhere(['like', 'nomi', $this->nomi])
            ->andFilterWhere(['like', 'seria', $this->seria]);

        return $dataProvider;
    }
}
