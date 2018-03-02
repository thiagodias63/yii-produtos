<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmailResponsavel */

$this->title = 'Create Email Responsavel';
$this->params['breadcrumbs'][] = ['label' => 'Email Responsavels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-responsavel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
