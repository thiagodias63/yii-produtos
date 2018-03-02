<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AdministradoraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="administradora-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_administradora') ?>

    <?= $form->field($model, 'nome_responsavel_administradora') ?>

    <?= $form->field($model, 'nome_administradora') ?>

    <?= $form->field($model, 'telefone_administradora') ?>

    <?= $form->field($model, 'email_administradora') ?>

    <?php // echo $form->field($model, 'ativa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
