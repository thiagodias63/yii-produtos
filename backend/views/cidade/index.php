<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CidadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cidade-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cidade', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_cidade',
            'nome_cidade',
            'sigla',
            //'estado_id_estado',
            //'estadoIdEstado.nome_estado', --Part 1
            [
              'attribute'=>'estado_id_estado',//Part 2
              'value'=>'estadoIdEstado.nome_estado',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
