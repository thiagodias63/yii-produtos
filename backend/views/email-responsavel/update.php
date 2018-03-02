<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmailResponsavel */

$this->title = 'Update Email Responsavel: ' . $model->id_email_responsavel;
$this->params['breadcrumbs'][] = ['label' => 'Email Responsavels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_email_responsavel, 'url' => ['view', 'id' => $model->id_email_responsavel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="email-responsavel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
