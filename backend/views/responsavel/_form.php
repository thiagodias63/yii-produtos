<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Administradora;

/* @var $this yii\web\View */
/* @var $model backend\models\Responsavel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="responsavel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_contrato')->textInput() ?>

    <?= $form->field($model, 'forma_de_conhecimento')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'data_do_registro')->textInput() ?>

    <?php //$form->field($model, 'id_administradora')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'id_administradora')->dropDownList(
        ArrayHelper::map(Administradora::find()->all(),'id_administradora','nome_administradora'),['prompt'=>'Selecione a administradora']
      ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
