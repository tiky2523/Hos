<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employees;

/**
 * EmployeesSearch represents the model behind the search form of `app\models\Employees`.
 */
class EmployeesSearch extends Employees
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sex', 'tumbon', 'amphur', 'chw', 'department_id', 'status'], 'integer'],
            [['cid', 'prename', 'fname', 'lname', 'birthdath', 'adress', 'education', 'ability', 'tel', 'comein', 'avatar'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Employees::find();

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
            'sex' => $this->sex,
            'birthdath' => $this->birthdath,
            'tumbon' => $this->tumbon,
            'amphur' => $this->amphur,
            'chw' => $this->chw,
            'department_id' => $this->department_id,
            'comein' => $this->comein,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'prename', $this->prename])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'ability', $this->ability])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'avatar', $this->avatar]);

        return $dataProvider;
    }
}
