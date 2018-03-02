<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmailResponsavel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="email-responsavel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email_responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_do_regisrto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
