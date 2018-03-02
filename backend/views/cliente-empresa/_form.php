<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use backend\models\Administradora;
use backend\models\Cidade;
use wbraganca\dynamicform\DynamicFormWidget;
use yiibr\correios\CepInput;
/* @var $this yii\web\View */
/* @var $model backend\models\ClienteEmpresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-empresa-form">

    <?php $form = ActiveForm::begin(['id'=>'contato-form']); ?>

    <!-- Cadastro do Responsavel -->
    <?= $form->field($responsavel, 'nome_responsavel')->textInput(['maxlength' => true]) ?>
    <?= $form->field($responsavel, 'id_administradora')->dropDownList(
        ArrayHelper::map(Administradora::find()->all(),'id_administradora','nome_administradora')
        //['prompt'=>'Selecione a administradora']
      ) ?>
	<?php /* 
      <!-- Cadastro dos telefones -->
      <div class="section">
          <?php DynamicFormWidget::begin([
            'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
            'widgetBody' => '.container-items', // required: css class selector
            'widgetItem' => '.item2', // required: css class
            'limit' => 4, // the maximum times, an element can be cloned (default 999)
            'min' => 1, // 0 or 1 (default 1)
            'insertButton' => '.add-item2', // css class
            'deleteButton' => '.remove-item2', // css class
            'model' => $modelsTelefone[0],
            'formId' => 'contato-form',
            'formFields' => [
              'telefone_responsavel',
            ],
          ]); ?>
          <button type="button" class="add-item2 btn btn-success"><i class="glyphicon glyphicon-plus"></i></button>
          <div class="container-items"><!-- widgetContainer -->
                <?php foreach ($modelsTelefone as $j => $modelTelefone): ?>
                    <div class="input-group item2">
                      <span class="input-group-btn">
                        <button type="button" class="remove-item2 btn btn-danger"><i class="glyphicon glyphicon-minus"></i></button>
                      </span>
                    <?php
                    // necessary for update action.
                    if (! $modelTelefone->isNewRecord)
                    {
                      echo Html::activeHiddenInput($modelTelefone, "[{$j}]id_telefone_responsavel");
                    }
                  ?>
                <?= $form->field($modelTelefone, "[{$j}]telefone_responsavel")->textInput() ?>
                </div>
            </div>
              <?php endforeach; ?>
        <?php DynamicFormWidget::end(); ?>
      </div>*/
	?>
      <!-- Cadastro dos Emails -->
      <div class="section">
          <?php DynamicFormWidget::begin([
            'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
            'widgetBody' => '.container-items', // required: css class selector
            'widgetItem' => '.item1', // required: css class
            //'limit' => 4, // the maximum times, an element can be cloned (default 999)
            'min' => 1, // 0 or 1 (default 1)
            'insertButton' => '.add-item1', // css class
            'deleteButton' => '.remove-item1', // css class
            'model' => $modelsEmail[0],
            'formId' => 'contato-form',
            'formFields' => [
              'email_responsavel',
            ],
          ]); ?>
          
          <div class="container-items"><!-- widgetContainer -->
                <?php foreach ($modelsEmail as $i => $modelEmail): ?>
                    <div class="input-group item1">
                      <span class="input-group-btn">
                      	<button type="button" class="add-item1 btn btn-success input-sm">
                      		<i class="glyphicon glyphicon-plus"></i>
                      	</button>
                        <button type="button" class="remove-item1 btn btn-danger input-sm">
                        	<i class="glyphicon glyphicon-minus"></i>
                        </button>
                      </span>
                    <?php
                    // necessary for update action.
                    if (!$modelEmail->isNewRecord)
                    {
                      echo Html::activeHiddenInput($modelEmail, "[{$i}]id_email_responsavel");
                    }
                  ?>
                <?= $form->field($modelEmail, "[{$i}]email_responsavel")->textInput() ?>
                </div>
            </div>
              <?php endforeach; ?>
        <?php DynamicFormWidget::end(); ?>
      </div>

    <!-- Cadastro da Empresa -->
    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'data_do_contrato')->textInput() ?>

    <?=  $form->field($model, 'data_do_contrato')->widget(
        DatePicker::className(), [
            // inline too, not bad
             'inline' => false,
             // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'language' => 'pt',
            'clientOptions' => [
                'autoclose' =>true,
                'format' => 'dd-MM-yyyy'
            ]
    ]); ?>

    <?php //$form->field($model, 'data_do_registro')->textInput() ?>

    <?= $form->field($model, 'tipo')->dropDownList([
      'Condomínio' => 'Condomínio Comercial',
      'Casa' => 'Casa',
      'Condomínio Comercial' => 'Condomínio Comercial',
      'Empresa' => 'Empresa',
      ]) ?>

    <?php // $form->field($model, 'cep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cep')->widget('yiibr\correios\CepInput', [
      'action' => ['addressSearch'],
      'fields' => [
          'type-location' => 'clienteempresa-tipo_logradouro',
          'location' => 'clienteempresa-logradouro',
          'district' => 'clienteempresa-bairro',
          'city' => 'clienteempresa-cidade_id_cidade',
          //'state' => 'address-state',
        ],
    ]) ?>

    <?php //$form->field($model, 'cidade_id_cidade')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'cidade_id_cidade')->dropDownList(
        ArrayHelper::map(Cidade::find()->all(),'id_cidade','nome_cidade')
        //,['prompt'=>'Selecione a administradora']
      ) ?>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_logradouro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logradouro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'apto')->textInput() ?>

    <?= $form->field($model, 'bloco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'torre_unica')->dropDownList([
      '0' => 'Não',
      '1' => 'Sim',
    ]) ?>

    <?= $form->field($model, 'conjunto')->textInput() ?>

    <?= $form->field($model, 'cnpj')->textInput(['maxlength' => true],['class' => 'col-md-4']) ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_contrato')->dropDownList([
      '1' => 'Sem Contrato',
      '2' => 'Contrato Semestral',
    ]) ?>

    <?php // $form->field($model, 'ativo')->textInput() ?>

    <?= $form->field($model, 'retem_iss')->dropDownList([
      '0' => 'Não',
      '1' => 'Sim',
    ]) ?>

    <?= $form->field($model, 'reserva_incendio')->dropDownList([
      '0' => 'Não',
      '1' => 'Sim',
    ]) ?>

    <?= $form->field($responsavel, 'forma_de_conhecimento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacao')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
<?php // $form->field($model, 'responsavel')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'tipo_cliente')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'senha')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'outro_telefone')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'tipo_contrato')->textInput() ?>

<?php // $form->field($model, 'forma_de_conhecimento')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'administradora')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'idade')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'nivel_social')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'numero_andares')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'quantidade_apto')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'numero_tampas')->textInput() ?>

<?php // $form->field($model, 'tampas_altura')->textInput() ?>

<?php // $form->field($model, 'tampas_largura')->textInput() ?>

<?php // $form->field($model, 'estado_impermeabilizacao')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'tipo_do_telhado')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'tipo_da_fachada')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'tem_apto_cobertura')->textInput() ?>

<?php // $form->field($model, 'tem_aquecimento_solar')->textInput() ?>

<?php // $form->field($model, 'tem_gas_canalizado')->textInput() ?>

<?php // $form->field($model, 'combate_incendio')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'tem_portaria')->textInput() ?>

<?php // $form->field($model, 'tipo_portaria')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'horario_porteiro')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'tem_dreno_de_limpeza')->textInput() ?>

<?php // $form->field($model, 'tem_acesso_dentro_apto')->textInput() ?>

<?php // $form->field($model, 'tem_anda_no_telhado')->textInput() ?>

<?php // $form->field($model, 'tem_carca_eletrica')->textInput() ?>

<?php // $form->field($model, 'tem_portao_eletronico')->textInput() ?>

<?php // $form->field($model, 'sistema_seguranca')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'tem_video')->textInput() ?>

<?php // $form->field($model, 'tem_alarmes')->textInput() ?>

<?php // $form->field($model, 'numero_alarmes')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'tem_salao_de_festas')->textInput() ?>

<?php // $form->field($model, 'tem_churrasqueira')->textInput() ?>

<?php // $form->field($model, 'tem_quadra')->textInput() ?>

<?php // $form->field($model, 'tem_jardim')->textInput() ?>

<?php // $form->field($model, 'tem_play_ground')->textInput() ?>

<?php // $form->field($model, 'tem_sauna')->textInput() ?>

<?php // $form->field($model, 'tem_garagem')->textInput() ?>

<?php // $form->field($model, 'tem_box')->textInput() ?>

<?php // $form->field($model, 'tem_banheiro')->textInput() ?>

<?php // $form->field($model, 'tem_dispensa')->textInput() ?>

<?php // $form->field($model, 'tem_calhas')->textInput() ?>

<?php // $form->field($model, 'tem_faxineira')->textInput() ?>

<?php // $form->field($model, 'tem_quarto_faxineira')->textInput() ?>

<?php // $form->field($model, 'tem_elevador')->textInput() ?>

<?php // $form->field($model, 'tipo_antena')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'tem_seguro')->textInput() ?>

<?php // $form->field($model, 'quantidade_caixa')->textInput() ?>

<?php // $form->field($model, 'quantidade_reservatorio_inferior')->textInput() ?>

<?php // $form->field($model, 'quantidade_caixa_gordura')->textInput() ?>

<?php // $form->field($model, 'quantidade_caixa_tanque')->textInput() ?>

<?php // $form->field($model, 'sub_sindico')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'porteiro_faxineira')->textInput(['maxlength' => true]) ?>

<?php // $form->field($model, 'solicitacao_servico')->textInput() ?>

<?php // $form->field($model, 'avaliacao_cliente')->textInput() ?>
