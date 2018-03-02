<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Administradora */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="administradora-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_responsavel_administradora')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_administradora')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone_administradora')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_administradora')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ativa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
