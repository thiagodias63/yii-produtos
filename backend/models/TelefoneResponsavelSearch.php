<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TelefoneResponsavel;

/**
 * TelefoneResponsavelSearch represents the model behind the search form about `backend\models\TelefoneResponsavel`.
 */
class TelefoneResponsavelSearch extends TelefoneResponsavel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_telefone_responsavel'], 'integer'],
            [['telefone_responsavel','id_responsavel', 'data_do_registro'], 'safe'],
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
        $query = TelefoneResponsavel::find();

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
            'id_telefone_responsavel' => $this->id_telefone_responsavel,
            'data_do_registro' => $this->data_do_registro,
            //'id_responsavel' => $this->id_responsavel,
        ]);

        $query->andFilterWhere(['like', 'telefone_responsavel', $this->telefone_responsavel])
              ->andFilterWhere(['like', 'responsavel.nome_responsavel', $this->id_responsavel]);

        return $dataProvider;
    }
}
