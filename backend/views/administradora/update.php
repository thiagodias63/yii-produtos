<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Administradora */

$this->title = 'Update Administradora: ' . $model->id_administradora;
$this->params['breadcrumbs'][] = ['label' => 'Administradoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_administradora, 'url' => ['view', 'id' => $model->id_administradora]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="administradora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
