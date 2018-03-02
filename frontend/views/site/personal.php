<?php
use yii\helpers\Html;
?>
<div class="col-md-12 form-group">
  <?= Html::label('Nome:','name') ?>
  <?= Html::textInput('name',$name,['id'=>'name','autofocus'=>true,'class'=>'form-control']) ?>
</div>
<div class="col-md-12 form-group">
  <?= Html::label('Idade:','age') ?>
  <?= Html::input('number','age',$age,['id'=>'age', 'class'=>'form-control']) ?>
</div>
