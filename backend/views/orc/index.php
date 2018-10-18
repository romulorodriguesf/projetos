<?php
use yii\helpers\Html;
use yii\grid\GridView;
use xj\bootbox\BootboxAsset;
/* @var $this yii\web\View */
$this->title = 'Lista de Projetos';
?>
<div class="site-index">
  <p>
      <?= Html::a('<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Voltar','#',['class' => 'btn btn-warning','onclick'=>"history.go(-1);"]); ?>
  </p>
    <div class="jumbotron">
        <h2> MÓDULO ALTERAÇÃO ORÇAMENTÁRIA</h2>
        <br><br>

        <p class="lead">ESCOLHA UM PROJETO</p>
        <?= Html::a(' Projeto#1', ['/orc/alter'], ['class'=>'glyphicon glyphicon-folder-open']) ?>

        <br><br>
    </div>
