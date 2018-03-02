<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ClienteEmpresa;

/**
 * ClienteEmpresaSearch represents the model behind the search form about `backend\models\ClienteEmpresa`.
 */
class ClienteEmpresaSearch extends ClienteEmpresa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tipo_contrato', 'solicitacao_servico', 'cidade_id_cidade', 'numero', 'apto', 'torre_unica', 'conjunto', 'numero_andares', 'quantidade_apto', 'numero_tampas', 'tampas_altura', 'tampas_largura', 'tem_apto_cobertura', 'tem_aquecimento_solar', 'tem_gas_canalizado', 'tem_portaria', 'tem_dreno_de_limpeza', 'tem_acesso_dentro_apto', 'tem_anda_no_telhado', 'tem_carca_eletrica', 'tem_portao_eletronico', 'tem_video', 'tem_alarmes', 'numero_alarmes', 'tem_salao_de_festas', 'tem_churrasqueira', 'tem_quadra', 'tem_jardim', 'tem_play_ground', 'tem_sauna', 'tem_garagem', 'tem_box', 'tem_banheiro', 'tem_dispensa', 'tem_calhas', 'tem_faxineira', 'tem_quarto_faxineira', 'tem_elevador', 'tem_seguro', 'quantidade_caixa', 'quantidade_reservatorio_inferior', 'quantidade_caixa_gordura', 'quantidade_caixa_tanque', 'responsavel_id_responsavel', 'ativo', 'retem_iss', 'reserva_incendio'], 'integer'],
            [['cnpj', 'cpf', 'responsavel', 'tipo_cliente', 'senha', 'telefone', 'celular', 'outro_telefone', 'email', 'forma_de_conhecimento', 'data_do_contrato', 'data_do_registro', 'tipo', 'nome', 'sub_sindico', 'porteiro_faxineira', 'cep', 'bairro', 'tipo_logradouro', 'logradouro', 'bloco', 'administradora', 'idade', 'nivel_social', 'estado_impermeabilizacao', 'tipo_do_telhado', 'tipo_da_fachada', 'combate_incendio', 'tipo_portaria', 'horario_porteiro', 'sistema_seguranca', 'tipo_antena', 'observacao'], 'safe'],
            [['avaliacao_cliente'], 'number'],
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
        $query = ClienteEmpresa::find();

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
            'tipo_contrato' => $this->tipo_contrato,
            'data_do_contrato' => $this->data_do_contrato,
            'data_do_registro' => $this->data_do_registro,
            'solicitacao_servico' => $this->solicitacao_servico,
            'avaliacao_cliente' => $this->avaliacao_cliente,
            'cidade_id_cidade' => $this->cidade_id_cidade,
            'numero' => $this->numero,
            'apto' => $this->apto,
            'torre_unica' => $this->torre_unica,
            'conjunto' => $this->conjunto,
            'numero_andares' => $this->numero_andares,
            'quantidade_apto' => $this->quantidade_apto,
            'numero_tampas' => $this->numero_tampas,
            'tampas_altura' => $this->tampas_altura,
            'tampas_largura' => $this->tampas_largura,
            'tem_apto_cobertura' => $this->tem_apto_cobertura,
            'tem_aquecimento_solar' => $this->tem_aquecimento_solar,
            'tem_gas_canalizado' => $this->tem_gas_canalizado,
            'tem_portaria' => $this->tem_portaria,
            'tem_dreno_de_limpeza' => $this->tem_dreno_de_limpeza,
            'tem_acesso_dentro_apto' => $this->tem_acesso_dentro_apto,
            'tem_anda_no_telhado' => $this->tem_anda_no_telhado,
            'tem_carca_eletrica' => $this->tem_carca_eletrica,
            'tem_portao_eletronico' => $this->tem_portao_eletronico,
            'tem_video' => $this->tem_video,
            'tem_alarmes' => $this->tem_alarmes,
            'numero_alarmes' => $this->numero_alarmes,
            'tem_salao_de_festas' => $this->tem_salao_de_festas,
            'tem_churrasqueira' => $this->tem_churrasqueira,
            'tem_quadra' => $this->tem_quadra,
            'tem_jardim' => $this->tem_jardim,
            'tem_play_ground' => $this->tem_play_ground,
            'tem_sauna' => $this->tem_sauna,
            'tem_garagem' => $this->tem_garagem,
            'tem_box' => $this->tem_box,
            'tem_banheiro' => $this->tem_banheiro,
            'tem_dispensa' => $this->tem_dispensa,
            'tem_calhas' => $this->tem_calhas,
            'tem_faxineira' => $this->tem_faxineira,
            'tem_quarto_faxineira' => $this->tem_quarto_faxineira,
            'tem_elevador' => $this->tem_elevador,
            'tem_seguro' => $this->tem_seguro,
            'quantidade_caixa' => $this->quantidade_caixa,
            'quantidade_reservatorio_inferior' => $this->quantidade_reservatorio_inferior,
            'quantidade_caixa_gordura' => $this->quantidade_caixa_gordura,
            'quantidade_caixa_tanque' => $this->quantidade_caixa_tanque,
            'responsavel_id_responsavel' => $this->responsavel_id_responsavel,
            'ativo' => $this->ativo,
            'retem_iss' => $this->retem_iss,
            'reserva_incendio' => $this->reserva_incendio,
        ]);

        $query->andFilterWhere(['like', 'cnpj', $this->cnpj])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'tipo_cliente', $this->tipo_cliente])
            ->andFilterWhere(['like', 'forma_de_conhecimento', $this->forma_de_conhecimento])
            ->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'tipo_logradouro', $this->tipo_logradouro])
            ->andFilterWhere(['like', 'logradouro', $this->logradouro])
            ->andFilterWhere(['like', 'bloco', $this->bloco])
            ->andFilterWhere(['like', 'observacao', $this->observacao]);

        return $dataProvider;
    }
}
