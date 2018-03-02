<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\EmailResponsavel */

$this->title = $model->id_email_responsavel;
$this->params['breadcrumbs'][] = ['label' => 'Email Responsavels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-responsavel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_email_responsavel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_email_responsavel], [
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
            //'id_email_responsavel:email',
            'email_responsavel:email',
            //'id_responsavel',
            'idResponsavel.nome_responsavel',
            'data_do_regisrto',
        ],
    ]) ?>

</div>
