<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Administradora */

$this->title = 'Create Administradora';
$this->params['breadcrumbs'][] = ['label' => 'Administradoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administradora-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
