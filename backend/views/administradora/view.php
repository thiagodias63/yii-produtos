<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Administradora */

$this->title = $model->id_administradora;
$this->params['breadcrumbs'][] = ['label' => 'Administradoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administradora-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_administradora], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_administradora], [
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
            'id_administradora',
            'nome_responsavel_administradora',
            'nome_administradora',
            'telefone_administradora',
            'email_administradora:email',
            'ativa',
        ],
    ]) ?>

</div>
