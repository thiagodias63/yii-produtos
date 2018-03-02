<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ResponsavelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Responsaveis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsavel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastro de Responsavel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_responsavel',
            'nome_responsavel',
            'tipo_cliente',
            //'senha',
            'tipo_contrato',
            // 'forma_de_conhecimento',
             'data_do_registro',
             //'id_administradora',
             //'idAdministradora.nome_administradora', Part 1
             [
               'attribute'=>'id_administradora',//Part 2
               'value'=>'idAdministradora.nome_administradora',
             ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
