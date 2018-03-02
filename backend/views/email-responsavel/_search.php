<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmailResponsavelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="email-responsavel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_email_responsavel') ?>

    <?= $form->field($model, 'email_responsavel') ?>

    <?= $form->field($model, 'id_responsavel') ?>

    <?= $form->field($model, 'data_do_regisrto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
