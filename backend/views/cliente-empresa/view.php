<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ClienteEmpresa */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Cliente Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-empresa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja deletar?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cnpj',
            'cpf',
            /*'responsavel',
            'tipo_cliente',
            'senha',
            'telefone',
            'celular',
            'outro_telefone',
            'email:email',*/
            'tipo_contrato',
            'forma_de_conhecimento',
            //'solicitacao_servico',
            //'avaliacao_cliente',
            'tipo',
            'nome',
            //'sub_sindico',
            //'porteiro_faxineira',
            'tipo_logradouro',
            'logradouro',
            'numero',
            'apto',
            'bloco',
            'torre_unica',
            'cidade_id_cidade',
            'cep',
            'bairro',
            /*'conjunto',
            'administradora',
            'idade',
            'nivel_social',
            'numero_andares',
            'quantidade_apto',
            'numero_tampas',
            'tampas_altura',
            'tampas_largura',
            'estado_impermeabilizacao',
            'tipo_do_telhado',
            'tipo_da_fachada',
            'tem_apto_cobertura',
            'tem_aquecimento_solar',
            'tem_gas_canalizado',
            'combate_incendio',
            'tem_portaria',
            'tipo_portaria',
            'horario_porteiro',
            'tem_dreno_de_limpeza',
            'tem_acesso_dentro_apto',
            'tem_anda_no_telhado',
            'tem_carca_eletrica',
            'tem_portao_eletronico',
            'sistema_seguranca',
            'tem_video',
            'tem_alarmes',
            'numero_alarmes',
            'tem_salao_de_festas',
            'tem_churrasqueira',
            'tem_quadra',
            'tem_jardim',
            'tem_play_ground',
            'tem_sauna',
            'tem_garagem',
            'tem_box',
            'tem_banheiro',
            'tem_dispensa',
            'tem_calhas',
            'tem_faxineira',
            'tem_quarto_faxineira',
            'tem_elevador',
            'tipo_antena',
            'tem_seguro',
            'quantidade_caixa',
            'quantidade_reservatorio_inferior',
            'quantidade_caixa_gordura',
            'quantidade_caixa_tanque',
            'responsavel_id_responsavel',*/
            'ativo',
            'retem_iss',
            'reserva_incendio',
            'data_do_contrato',
            'data_do_registro',
            'observacao:ntext',
        ],
    ]) ?>

</div>
