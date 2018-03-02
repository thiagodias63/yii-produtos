<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdministradoraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Administradoras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administradora-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Administradora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_administradora',
            'nome_responsavel_administradora',
            'nome_administradora',
            'telefone_administradora',
            'email_administradora:email',
            // 'ativa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
