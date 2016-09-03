<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tasknew;

/**
 * TasknewSearch represents the model behind the search form about `app\models\Tasknew`.
 */
class TasknewSearch extends Tasknew
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'duein', 'importance', 'clarity', 'effort','priority','unpriority'], 'integer'],
            [['task'], 'safe'],
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
        $query = Tasknew::find()->where(['duein'=>1,'clarity'=>3])->orderBy(['priority'=>SORT_DESC,]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'duein' => $this->duein,
            'importance' => $this->importance,
            'clarity' => $this->clarity,
            'effort' => $this->effort,
        ]);

        $query->andFilterWhere(['like', 'task', $this->task]);

        return $dataProvider;
    }
    public function search2($params)
    {
        
        $query2 = Tasknew::find()->where(['not',['duein'=>1,'clarity'=>3]])->orderBy(['priority'=>SORT_DESC,]);

        // add conditions that should always apply here

        $dataProvider2 = new ActiveDataProvider([
            'query' => $query2,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider2;
        }

        // grid filtering conditions
        $query2->andFilterWhere([
            'id' => $this->id,
        ]);

        $query2->andFilterWhere(['like', 'task', $this->task])
            ->andFilterWhere(['like', 'duein', $this->duein])
            ->andFilterWhere(['like', 'importance', $this->importance])
            ->andFilterWhere(['like', 'clarity', $this->clarity])
            ->andFilterWhere(['like', 'effort', $this->effort])
             ->andFilterWhere(['like', 'priority', $this->priority]);

        return $dataProvider2;
    }
     public function duein() {
   return array('1' => 'This Week', '2' => 'Not This Week');
}
public function performance() {
   return array('1' => 'Low', '2' => 'Medium','3'=>'High');
}
public function effort() {
   return array('1' => 'Low', '2' => 'Medium','3'=>'High');
}
public function clarity() {
   return array('1' => 'Not Clear', '2' => 'Somewhat Clear','3'=>'Clear');
}
}
