<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Responsavel */

$this->title = 'Cadastro de Responsavel';
$this->params['breadcrumbs'][] = ['label' => 'Responsaveis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsavel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
