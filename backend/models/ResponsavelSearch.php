<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Responsavel;

/**
 * ResponsavelSearch represents the model behind the search form about `backend\models\Responsavel`.
 */
class ResponsavelSearch extends Responsavel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_responsavel', 'tipo_contrato'], 'integer'],
            [['nome_responsavel', 'tipo_cliente','id_administradora', 'senha', 'forma_de_conhecimento', 'data_do_registro'], 'safe'],
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
        $query = Responsavel::find();

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
        $query->joinWith('idAdministradora');
        // grid filtering conditions
        $query->andFilterWhere([
            'id_responsavel' => $this->id_responsavel,
            'tipo_contrato' => $this->tipo_contrato,
            'data_do_registro' => $this->data_do_registro,
            //'id_administradora' => $this->id_administradora,
        ]);

        $query->andFilterWhere(['like', 'nome_responsavel', $this->nome_responsavel])
            ->andFilterWhere(['like', 'tipo_cliente', $this->tipo_cliente])
            ->andFilterWhere(['like', 'senha', $this->senha])
            ->andFilterWhere(['like', 'forma_de_conhecimento', $this->forma_de_conhecimento])
            ->andFilterWhere(['like', 'administradora.nome_administradora', $this->id_administradora]);

        return $dataProvider;
    }
}
