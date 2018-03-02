<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Responsavel */

$this->title = 'Update Responsavel: ' . $model->nome_responsavel;
$this->params['breadcrumbs'][] = ['label' => 'Responsaveis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome_responsavel, 'url' => ['view', 'id' => $model->id_responsavel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="responsavel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
