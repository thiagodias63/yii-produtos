<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TelefoneResponsavel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telefone-responsavel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'telefone_responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_do_registro')->textInput() ?>

    <?= $form->field($model, 'id_responsavel')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
