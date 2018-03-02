<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TelefoneResponsavelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telefone-responsavel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_telefone_responsavel') ?>

    <?= $form->field($model, 'telefone_responsavel') ?>

    <?= $form->field($model, 'data_do_registro') ?>

    <?= $form->field($model, 'id_responsavel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
