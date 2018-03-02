<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cidade;

/**
 * CidadeSearch represents the model behind the search form about `backend\models\Cidade`.
 */
class CidadeSearch extends Cidade
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cidade'], 'integer'],
            [['nome_cidade', 'sigla','estado_id_estado'], 'safe'],
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
        $query = Cidade::find();

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
        $query->joinWith('estadoIdEstado');
        // grid filtering conditions
        $query->andFilterWhere([
            'id_cidade' => $this->id_cidade,
            //'estado_id_estado' => $this->estado_id_estado,

        ]);
        $query->andFilterWhere(['like', 'nome_cidade', $this->nome_cidade])
            ->andFilterWhere(['like', 'sigla', $this->sigla])
            ->andFilterWhere(['like', 'estado.nome_estado', $this->estado_id_estado]);

        return $dataProvider;
    }
}
