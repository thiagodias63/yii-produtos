<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Estado;
/* @var $this yii\web\View */
/* @var $model backend\models\Cidade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cidade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sigla')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'estado_id_estado')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'estado_id_estado')->dropDownList(
        ArrayHelper::map(Estado::find()->all(),'id_estado','nome_estado'),['prompt'=>'Selecione o estado']
      ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
