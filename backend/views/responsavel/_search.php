<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ResponsavelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="responsavel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_responsavel') ?>

    <?= $form->field($model, 'nome_responsavel') ?>

    <?= $form->field($model, 'tipo_cliente') ?>

    <?= $form->field($model, 'senha') ?>

    <?= $form->field($model, 'tipo_contrato') ?>

    <?php // echo $form->field($model, 'forma_de_conhecimento') ?>

    <?php // echo $form->field($model, 'data_do_registro') ?>

    <?php // echo $form->field($model, 'id_administradora') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
