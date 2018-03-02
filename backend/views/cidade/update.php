<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Cidade */

$this->title = 'Update Cidade: ' . $model->id_cidade;
$this->params['breadcrumbs'][] = ['label' => 'Cidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cidade, 'url' => ['view', 'id' => $model->id_cidade]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cidade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
