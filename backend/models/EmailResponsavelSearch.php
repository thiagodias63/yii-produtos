<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EmailResponsavel;

/**
 * EmailResponsavelSearch represents the model behind the search form about `backend\models\EmailResponsavel`.
 */
class EmailResponsavelSearch extends EmailResponsavel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_email_responsavel'], 'integer'],
            [['email_responsavel', 'id_responsavel','data_do_regisrto'], 'safe'],
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
        $query = EmailResponsavel::find();

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
        $query->joinWith('idResponsavel');
        // grid filtering conditions
        $query->andFilterWhere([
            'id_email_responsavel' => $this->id_email_responsavel,
            //'id_responsavel' => $this->id_responsavel,
            'data_do_regisrto' => $this->data_do_regisrto,
        ]);

        $query->andFilterWhere(['like', 'email_responsavel', $this->email_responsavel])
              ->andFilterWhere(['like', 'responsavel.nome_responsavel', $this->id_responsavel]);
        return $dataProvider;
    }
}
