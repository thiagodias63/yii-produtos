<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Administradora;

/**
 * AdministradoraSearch represents the model behind the search form about `backend\models\Administradora`.
 */
class AdministradoraSearch extends Administradora
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_administradora', 'ativa'], 'integer'],
            [['nome_responsavel_administradora', 'nome_administradora', 'telefone_administradora', 'email_administradora'], 'safe'],
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
        $query = Administradora::find();

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
            'id_administradora' => $this->id_administradora,
            'ativa' => $this->ativa,
        ]);

        $query->andFilterWhere(['like', 'nome_responsavel_administradora', $this->nome_responsavel_administradora])
            ->andFilterWhere(['like', 'nome_administradora', $this->nome_administradora])
            ->andFilterWhere(['like', 'telefone_administradora', $this->telefone_administradora])
            ->andFilterWhere(['like', 'email_administradora', $this->email_administradora]);

        return $dataProvider;
    }
}
