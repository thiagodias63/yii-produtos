<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClienteEmpresaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-empresa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cnpj') ?>

    <?= $form->field($model, 'cpf') ?>

    <?= $form->field($model, 'responsavel') ?>

    <?= $form->field($model, 'tipo_cliente') ?>

    <?php // echo $form->field($model, 'senha') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'outro_telefone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'tipo_contrato') ?>

    <?php // echo $form->field($model, 'forma_de_conhecimento') ?>

    <?php // echo $form->field($model, 'data_do_contrato') ?>

    <?php // echo $form->field($model, 'data_do_registro') ?>

    <?php // echo $form->field($model, 'solicitacao_servico') ?>

    <?php // echo $form->field($model, 'avaliacao_cliente') ?>

    <?php // echo $form->field($model, 'tipo') ?>

    <?php // echo $form->field($model, 'nome') ?>

    <?php // echo $form->field($model, 'sub_sindico') ?>

    <?php // echo $form->field($model, 'porteiro_faxineira') ?>

    <?php // echo $form->field($model, 'cidade_id_cidade') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <?php // echo $form->field($model, 'tipo_logradouro') ?>

    <?php // echo $form->field($model, 'logradouro') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'apto') ?>

    <?php // echo $form->field($model, 'bloco') ?>

    <?php // echo $form->field($model, 'torre_unica') ?>

    <?php // echo $form->field($model, 'conjunto') ?>

    <?php // echo $form->field($model, 'administradora') ?>

    <?php // echo $form->field($model, 'idade') ?>

    <?php // echo $form->field($model, 'nivel_social') ?>

    <?php // echo $form->field($model, 'numero_andares') ?>

    <?php // echo $form->field($model, 'quantidade_apto') ?>

    <?php // echo $form->field($model, 'numero_tampas') ?>

    <?php // echo $form->field($model, 'tampas_altura') ?>

    <?php // echo $form->field($model, 'tampas_largura') ?>

    <?php // echo $form->field($model, 'estado_impermeabilizacao') ?>

    <?php // echo $form->field($model, 'tipo_do_telhado') ?>

    <?php // echo $form->field($model, 'tipo_da_fachada') ?>

    <?php // echo $form->field($model, 'tem_apto_cobertura') ?>

    <?php // echo $form->field($model, 'tem_aquecimento_solar') ?>

    <?php // echo $form->field($model, 'tem_gas_canalizado') ?>

    <?php // echo $form->field($model, 'combate_incendio') ?>

    <?php // echo $form->field($model, 'tem_portaria') ?>

    <?php // echo $form->field($model, 'tipo_portaria') ?>

    <?php // echo $form->field($model, 'horario_porteiro') ?>

    <?php // echo $form->field($model, 'tem_dreno_de_limpeza') ?>

    <?php // echo $form->field($model, 'tem_acesso_dentro_apto') ?>

    <?php // echo $form->field($model, 'tem_anda_no_telhado') ?>

    <?php // echo $form->field($model, 'tem_carca_eletrica') ?>

    <?php // echo $form->field($model, 'tem_portao_eletronico') ?>

    <?php // echo $form->field($model, 'sistema_seguranca') ?>

    <?php // echo $form->field($model, 'tem_video') ?>

    <?php // echo $form->field($model, 'tem_alarmes') ?>

    <?php // echo $form->field($model, 'numero_alarmes') ?>

    <?php // echo $form->field($model, 'tem_salao_de_festas') ?>

    <?php // echo $form->field($model, 'tem_churrasqueira') ?>

    <?php // echo $form->field($model, 'tem_quadra') ?>

    <?php // echo $form->field($model, 'tem_jardim') ?>

    <?php // echo $form->field($model, 'tem_play_ground') ?>

    <?php // echo $form->field($model, 'tem_sauna') ?>

    <?php // echo $form->field($model, 'tem_garagem') ?>

    <?php // echo $form->field($model, 'tem_box') ?>

    <?php // echo $form->field($model, 'tem_banheiro') ?>

    <?php // echo $form->field($model, 'tem_dispensa') ?>

    <?php // echo $form->field($model, 'tem_calhas') ?>

    <?php // echo $form->field($model, 'tem_faxineira') ?>

    <?php // echo $form->field($model, 'tem_quarto_faxineira') ?>

    <?php // echo $form->field($model, 'tem_elevador') ?>

    <?php // echo $form->field($model, 'tipo_antena') ?>

    <?php // echo $form->field($model, 'tem_seguro') ?>

    <?php // echo $form->field($model, 'quantidade_caixa') ?>

    <?php // echo $form->field($model, 'quantidade_reservatorio_inferior') ?>

    <?php // echo $form->field($model, 'quantidade_caixa_gordura') ?>

    <?php // echo $form->field($model, 'quantidade_caixa_tanque') ?>

    <?php // echo $form->field($model, 'responsavel_id_responsavel') ?>

    <?php // echo $form->field($model, 'ativo') ?>

    <?php // echo $form->field($model, 'observacao') ?>

    <?php // echo $form->field($model, 'retem_iss') ?>

    <?php // echo $form->field($model, 'reserva_incendio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
