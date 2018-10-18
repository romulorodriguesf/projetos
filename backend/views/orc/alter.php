<?php
use yii\helpers\Html;
use yii\grid\GridView;
use xj\bootbox\BootboxAsset;
/* @var $this yii\web\View */
$this->title = 'Nome do Projeto';
?>
<div class="site-index">
  <p>
      <?= Html::a('<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Voltar','#',['class' => 'btn btn-warning','onclick'=>"history.go(-1);"]); ?>
  </p>
    <div class="jumbotron">
        <h2> MÓDULO ALTERAÇÃO ORÇAMENTÁRIA</h2>
        <br><br>
        <p class="lead">PROJETO ESCOLHIDO</p>
        
        <table>
        	<legend align="left">Diárias Nacionais</legend>

        	<thead>
        		<tr>
        			<th>Nº item</th>
        			<th>Localidade</th>
        			<th>Quantidade</th>
        			<th>Custo Unitário</th>
        			<th>Custo Total</th>
        			<th>Valor Gasto</th>
        			<th>Valor Disponível</th>
        			<th>Professor Responsável</th>
        			<th>Justificativa</th>
        			<th>Excluir item</th>
        		</tr>
        	</thead>

        	<tbody>
        		<tr>
        			<td><input type="text" name="num-item" placeholder="01"></td>
        			<td><input type="text" name="local" placeholder="São Paulo"></td>
        			<td><input type="text" name="qtd" placeholder=""></td>
        			<td><input type="text" name="custo-unit" placeholder="R$"></td>
        			<td><input type="text" name="custo-total" placeholder="R$"></td>
        			<td><input type="text" name="v-gasto" placeholder="R$"></td>
        			<td><input type="text" name="v-disp" placeholder="R$"></td>
        			<td><input type="text" name="prof" placeholder=""></td>
        			<td><input type="text" name="justif" placeholder=""></td>
        			<td><input type="buttom" name="excluir" value="excluir-item"></td>
        		</tr>
        	</tbody>
        </table>
        <br><br>
    </div>
