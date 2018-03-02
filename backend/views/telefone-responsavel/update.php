<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TelefoneResponsavel */

$this->title = 'Update Telefone Responsavel: ' . $model->id_telefone_responsavel;
$this->params['breadcrumbs'][] = ['label' => 'Telefone Responsavels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_telefone_responsavel, 'url' => ['view', 'id' => $model->id_telefone_responsavel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="telefone-responsavel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
