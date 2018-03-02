<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CidadeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cidade-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_cidade') ?>

    <?= $form->field($model, 'nome_cidade') ?>

    <?= $form->field($model, 'sigla') ?>

    <?= $form->field($model, 'estado_id_estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
