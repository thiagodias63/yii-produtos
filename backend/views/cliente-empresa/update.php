<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ClienteEmpresa */

$this->title = 'Alterar Cliente: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Cliente Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cliente-empresa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'responsavel' => $responsavel,
        'model' => $model,
        'modelsTelefone' => $modelsTelefone,
        'modelsEmail' => $modelsEmail,
    ]) ?>
</div>
