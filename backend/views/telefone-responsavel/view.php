<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TelefoneResponsavel */

$this->title = $model->id_telefone_responsavel;
$this->params['breadcrumbs'][] = ['label' => 'Telefone Responsavels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telefone-responsavel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_telefone_responsavel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_telefone_responsavel], [
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
            //'id_telefone_responsavel',
            'telefone_responsavel',
            //'id_responsavel',
            'idResponsavel.nome_responsavel',
            'data_do_registro',
        ],
    ]) ?>

</div>
