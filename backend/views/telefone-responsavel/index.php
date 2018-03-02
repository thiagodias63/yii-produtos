<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TelefoneResponsavelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Telefone Responsavels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telefone-responsavel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Telefone Responsavel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_telefone_responsavel',
            'telefone_responsavel',
            //'id_responsavel',
            //'idResponsavel.nome_responsavel', Part 1
            [
              'attribute'=>'id_responsavel',//Part 2
              'value'=>'idResponsavel.nome_responsavel',
            ],
            'data_do_registro',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
