<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ClienteEmpresa */

$this->title = 'Cadastro de Cliente';
$this->params['breadcrumbs'][] = ['label' => 'Cliente Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-empresa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'responsavel' => $responsavel,
        'model' => $model,
        'modelsTelefone' => $modelsTelefone,
        'modelsEmail' => $modelsEmail,
    ]) ?>

</div>
