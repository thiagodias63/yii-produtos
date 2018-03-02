<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cliente_empresa".
 *
 * @property string $id
 * @property string $cnpj
 * @property string $cpf
 * @property string $responsavel
 * @property string $tipo_cliente
 * @property string $senha
 * @property string $telefone
 * @property string $celular
 * @property string $outro_telefone
 * @property string $email
 * @property integer $tipo_contrato
 * @property string $forma_de_conhecimento
 * @property string $data_do_contrato
 * @property string $data_do_registro
 * @property integer $solicitacao_servico
 * @property double $avaliacao_cliente
 * @property string $tipo
 * @property string $nome
 * @property string $sub_sindico
 * @property string $porteiro_faxineira
 * @property string $cidade_id_cidade
 * @property string $cep
 * @property string $bairro
 * @property string $tipo_logradouro
 * @property string $logradouro
 * @property integer $numero
 * @property integer $apto
 * @property string $bloco
 * @property integer $torre_unica
 * @property integer $conjunto
 * @property string $administradora
 * @property string $idade
 * @property string $nivel_social
 * @property string $numero_andares
 * @property string $quantidade_apto
 * @property integer $numero_tampas
 * @property integer $tampas_altura
 * @property integer $tampas_largura
 * @property string $estado_impermeabilizacao
 * @property string $tipo_do_telhado
 * @property string $tipo_da_fachada
 * @property integer $tem_apto_cobertura
 * @property integer $tem_aquecimento_solar
 * @property integer $tem_gas_canalizado
 * @property string $combate_incendio
 * @property integer $tem_portaria
 * @property string $tipo_portaria
 * @property string $horario_porteiro
 * @property integer $tem_dreno_de_limpeza
 * @property integer $tem_acesso_dentro_apto
 * @property integer $tem_anda_no_telhado
 * @property integer $tem_carca_eletrica
 * @property integer $tem_portao_eletronico
 * @property string $sistema_seguranca
 * @property integer $tem_video
 * @property integer $tem_alarmes
 * @property string $numero_alarmes
 * @property integer $tem_salao_de_festas
 * @property integer $tem_churrasqueira
 * @property integer $tem_quadra
 * @property integer $tem_jardim
 * @property integer $tem_play_ground
 * @property integer $tem_sauna
 * @property integer $tem_garagem
 * @property integer $tem_box
 * @property integer $tem_banheiro
 * @property integer $tem_dispensa
 * @property integer $tem_calhas
 * @property integer $tem_faxineira
 * @property integer $tem_quarto_faxineira
 * @property integer $tem_elevador
 * @property string $tipo_antena
 * @property integer $tem_seguro
 * @property integer $quantidade_caixa
 * @property integer $quantidade_reservatorio_inferior
 * @property integer $quantidade_caixa_gordura
 * @property integer $quantidade_caixa_tanque
 * @property string $responsavel_id_responsavel
 * @property integer $ativo
 * @property string $observacao
 * @property integer $retem_iss
 * @property integer $reserva_incendio
 *
 * @property CaixaAgua[] $caixaAguas
 * @property CaixaAguaCobertura[] $caixaAguaCoberturas
 * @property CaixaGordura[] $caixaGorduras
 * @property CaixaGordura[] $caixaGorduras0
 * @property Cidade $cidadeIdCidade
 * @property Responsavel $responsavelIdResponsavel
 * @property Reservatorio[] $reservatorios
 * @property Vendas[] $vendas
 */
class ClienteEmpresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente_empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['responsavel', 'senha', 'tipo_contrato', 'bairro', 'logradouro'], 'required'],
            [['tipo_contrato', 'solicitacao_servico', 'numero', 'apto', 'torre_unica', 'conjunto', 'numero_andares', 'quantidade_apto', 'numero_tampas', 'tampas_altura', 'tampas_largura', 'tem_apto_cobertura', 'tem_aquecimento_solar', 'tem_gas_canalizado', 'tem_portaria', 'tem_dreno_de_limpeza', 'tem_acesso_dentro_apto', 'tem_anda_no_telhado', 'tem_carca_eletrica', 'tem_portao_eletronico', 'tem_video', 'tem_alarmes', 'numero_alarmes', 'tem_salao_de_festas', 'tem_churrasqueira', 'tem_quadra', 'tem_jardim', 'tem_play_ground', 'tem_sauna', 'tem_garagem', 'tem_box', 'tem_banheiro', 'tem_dispensa', 'tem_calhas', 'tem_faxineira', 'tem_quarto_faxineira', 'tem_elevador', 'tem_seguro', 'quantidade_caixa', 'quantidade_reservatorio_inferior', 'quantidade_caixa_gordura', 'quantidade_caixa_tanque', 'responsavel_id_responsavel', 'ativo', 'retem_iss', 'reserva_incendio'], 'integer'],
            [['data_do_contrato', 'data_do_registro', 'responsavel_id_responsavel', 'cidade_id_cidade'], 'safe'],
            [['avaliacao_cliente'], 'number'],
            [['observacao'], 'string'],
            [['cnpj'], 'string', 'max' => 18],
            [['cpf'], 'string', 'max' => 14],
            [['responsavel'], 'string', 'max' => 255],
            [['tipo_cliente'], 'string', 'max' => 30],
            [['senha', 'bairro', 'tipo_logradouro', 'logradouro'], 'string', 'max' => 100],
            [['telefone', 'celular', 'outro_telefone'], 'string', 'max' => 15],
            [['email', 'nome', 'sub_sindico', 'porteiro_faxineira', 'administradora', 'tipo_do_telhado', 'tipo_da_fachada'], 'string', 'max' => 80],
            [['forma_de_conhecimento', 'tipo_portaria', 'sistema_seguranca', 'tipo_antena'], 'string', 'max' => 20],
            [['tipo', 'cep'], 'string', 'max' => 12],
            [['bloco'], 'string', 'max' => 5],
            [['idade'], 'string', 'max' => 6],
            [['nivel_social'], 'string', 'max' => 1],
            [['estado_impermeabilizacao', 'combate_incendio'], 'string', 'max' => 10],
            [['horario_porteiro'], 'string', 'max' => 7],
            [['cidade_id_cidade'], 'exist', 'skipOnError' => true, 'targetClass' => Cidade::className(), 'targetAttribute' => ['cidade_id_cidade' => 'id_cidade']],
            [['responsavel_id_responsavel'], 'exist', 'skipOnError' => true, 'targetClass' => Responsavel::className(), 'targetAttribute' => ['responsavel_id_responsavel' => 'id_responsavel']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cnpj' => 'Cnpj',
            'cpf' => 'Cpf',
            'responsavel' => 'Responsavel',
            'tipo_cliente' => 'Tipo Cliente',
            'senha' => 'Senha',
            'telefone' => 'Telefone',
            'celular' => 'Celular',
            'outro_telefone' => 'Outro Telefone',
            'email' => 'Email',
            'tipo_contrato' => 'Tipo Contrato',
            'forma_de_conhecimento' => 'Forma De Conhecimento',
            'data_do_contrato' => 'Data Do Contrato',
            'data_do_registro' => 'Data Do Registro',
            'solicitacao_servico' => 'Solicitacao Servico',
            'avaliacao_cliente' => 'Avaliacao Cliente',
            'tipo' => 'Tipo',
            'nome' => 'Nome',
            'sub_sindico' => 'Sub Sindico',
            'porteiro_faxineira' => 'Porteiro Faxineira',
            'cidade_id_cidade' => 'Cidade',
            'cep' => 'Cep',
            'bairro' => 'Bairro',
            'tipo_logradouro' => 'Tipo Logradouro',
            'logradouro' => 'Logradouro',
            'numero' => 'Numero',
            'apto' => 'Apto',
            'bloco' => 'Bloco',
            'torre_unica' => 'Torre Unica',
            'conjunto' => 'Conjunto',
            'administradora' => 'Administradora',
            'idade' => 'Idade',
            'nivel_social' => 'Nivel Social',
            'numero_andares' => 'Numero Andares',
            'quantidade_apto' => 'Quantidade Apto',
            'numero_tampas' => 'Numero Tampas',
            'tampas_altura' => 'Tampas Altura',
            'tampas_largura' => 'Tampas Largura',
            'estado_impermeabilizacao' => 'Estado Impermeabilizacao',
            'tipo_do_telhado' => 'Tipo Do Telhado',
            'tipo_da_fachada' => 'Tipo Da Fachada',
            'tem_apto_cobertura' => 'Tem Apto Cobertura',
            'tem_aquecimento_solar' => 'Tem Aquecimento Solar',
            'tem_gas_canalizado' => 'Tem Gas Canalizado',
            'combate_incendio' => 'Combate Incendio',
            'tem_portaria' => 'Tem Portaria',
            'tipo_portaria' => 'Tipo Portaria',
            'horario_porteiro' => 'Horario Porteiro',
            'tem_dreno_de_limpeza' => 'Tem Dreno De Limpeza',
            'tem_acesso_dentro_apto' => 'Tem Acesso Dentro Apto',
            'tem_anda_no_telhado' => 'Tem Anda No Telhado',
            'tem_carca_eletrica' => 'Tem Carca Eletrica',
            'tem_portao_eletronico' => 'Tem Portao Eletronico',
            'sistema_seguranca' => 'Sistema Seguranca',
            'tem_video' => 'Tem Video',
            'tem_alarmes' => 'Tem Alarmes',
            'numero_alarmes' => 'Numero Alarmes',
            'tem_salao_de_festas' => 'Tem Salao De Festas',
            'tem_churrasqueira' => 'Tem Churrasqueira',
            'tem_quadra' => 'Tem Quadra',
            'tem_jardim' => 'Tem Jardim',
            'tem_play_ground' => 'Tem Play Ground',
            'tem_sauna' => 'Tem Sauna',
            'tem_garagem' => 'Tem Garagem',
            'tem_box' => 'Tem Box',
            'tem_banheiro' => 'Tem Banheiro',
            'tem_dispensa' => 'Tem Dispensa',
            'tem_calhas' => 'Tem Calhas',
            'tem_faxineira' => 'Tem Faxineira',
            'tem_quarto_faxineira' => 'Tem Quarto Faxineira',
            'tem_elevador' => 'Tem Elevador',
            'tipo_antena' => 'Tipo Antena',
            'tem_seguro' => 'Tem Seguro',
            'quantidade_caixa' => 'Quantidade Caixa',
            'quantidade_reservatorio_inferior' => 'Quantidade Reservatorio Inferior',
            'quantidade_caixa_gordura' => 'Quantidade Caixa Gordura',
            'quantidade_caixa_tanque' => 'Quantidade Caixa Tanque',
            'responsavel_id_responsavel' => 'Responsavel Id Responsavel',
            'ativo' => 'Ativo',
            'observacao' => 'Observacao',
            'retem_iss' => 'Retem Iss',
            'reserva_incendio' => 'Reserva Incendio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixaAguas()
    {
        return $this->hasMany(CaixaAgua::className(), ['id_empresa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixaAguaCoberturas()
    {
        return $this->hasMany(CaixaAguaCobertura::className(), ['id_empresa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixaGorduras()
    {
        return $this->hasMany(CaixaGordura::className(), ['id_empresa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixaGorduras0()
    {
        return $this->hasMany(CaixaGordura::className(), ['id_empresa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCidadeIdCidade()
    {
        return $this->hasOne(Cidade::className(), ['id_cidade' => 'cidade_id_cidade']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponsavelIdResponsavel()
    {
        return $this->hasOne(Responsavel::className(), ['id_responsavel' => 'responsavel_id_responsavel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservatorios()
    {
        return $this->hasMany(Reservatorio::className(), ['id_empresa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendas()
    {
        return $this->hasMany(Vendas::className(), ['cliente_id_cliente' => 'id']);
    }
}
