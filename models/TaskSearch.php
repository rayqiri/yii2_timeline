<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Task;

/**
 * TaskSearch represents the model behind the search form about `app\models\Task`.
 */
class TaskSearch extends Task
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['task', 'duein', 'importance', 'clarity', 'effort','priority','unpriority'], 'safe'],
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
        $query = Task::find()->where(['duein'=>0,'clarity'=>2]);
        

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
        ]);

        $query->andFilterWhere(['like', 'task', $this->task])
            ->andFilterWhere(['like', 'duein', $this->duein])
            ->andFilterWhere(['like', 'importance', $this->importance])
            ->andFilterWhere(['like', 'clarity', $this->clarity])
            ->andFilterWhere(['like', 'effort', $this->effort])
             ->andFilterWhere(['like', 'priority', $this->priority]);

        return $dataProvider;
    }
    public function search2($params)
    {
        
        $query2 = Task::find()->where(['not',['duein'=>0,'clarity'=>2]]);

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
   return array('0' => 'This Week', '1' => 'Not This Week');
}
public function performance() {
   return array('1' => 'Low', '2' => 'Medium','3'=>'High');
}
public function effort() {
   return array('1' => 'Low', '2' => 'Medium','3'=>'High');
}
public function clarity() {
   return array('0' => 'Not Clear', '1' => 'Somewhat Clear','2'=>'Clear');
}
}
