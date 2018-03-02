<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmailResponsavelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Email Responsavels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-responsavel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Email Responsavel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id_email_responsavel:email',
            'email_responsavel:email',
            //'id_responsavel',
            //'idResponsavel.nome_responsavel', Part 1
            [
              'attribute'=>'id_responsavel',//Part 2
              'value'=>'idResponsavel.nome_responsavel',
            ],
            'data_do_regisrto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
