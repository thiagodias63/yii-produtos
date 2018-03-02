<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Responsavel */

$this->title = $model->nome_responsavel;
$this->params['breadcrumbs'][] = ['label' => 'Responsaveis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsavel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_responsavel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_responsavel], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_responsavel',
            'nome_responsavel',
            'tipo_cliente',
            'senha',
            'tipo_contrato',
            'forma_de_conhecimento',
            'data_do_registro',
            //'id_administradora',
            'idAdministradora.nome_administradora',
        ],
    ]) ?>

</div>
