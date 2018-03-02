<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClienteEmpresaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cliente';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-empresa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'data_do_contrato',
            // 'data_do_registro',
             'tipo',
             'nome',
            // 'cidade_id_cidade',
            // 'cep',
            // 'bairro',
            // 'tipo_logradouro',
            // 'logradouro',
            // 'numero',
            // 'apto',
            // 'bloco',
            // 'torre_unica',
            // 'conjunto',
            // 'ativo',
            // 'observacao:ntext',
            // 'retem_iss',
            // 'reserva_incendio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
