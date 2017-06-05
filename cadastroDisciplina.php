<?php
require_once('cabecalho.php');
require_once('logicaUsuario.php');
verificaUsuario();
?>

<div class="container">

	<form action="" method="post" accept-charset="utf-8" id="formulario">
		<h2>Cadastro de Disciplina</h2>
		<hr>

		<div class="row">			
			<div class="form-group col-md-2">
				<label class="col-md-12">Nome da disciplina:</label>
			</div>
			<div class="form-group col-md-6">
				<input type="text" class="form-control" name="nome" id="nome">
			</div>
		</div>

		<div class="row">			
			<div class="form-group col-md-2">
				<label class="col-md-12">Descrição:</label>
			</div>
			<div class="form-group col-md-6">
				<input type="text" class="form-control" name="descricao" id="descricao">
			</div>
		</div>

		<div class="row">			
			<div class="form-group col-md-2">
				<label class="col-md-12">Cód. da Disciplina:</label>
			</div>
			<div class="form-group col-md-6">
				<input type="text" class="form-control" name="codigo" id="codigo">
			</div>
		</div>

		<div class="row">			
			<div class="form-group col-md-2">
				<label class="col-md-12">Semestre:</label>
			</div>
			<div class="form-group col-md-6">
				<input type="text" class="form-control" name="semestre" id="semestre">
			</div>
		</div>			
		<br>
		<br>
		<div class="row">			
			<div class="form-group col-md-2">
				<label class="col-md-12">Carga horária:</label>
			</div>
			<div class="form-group col-md-6">
				<input type="text" class="form-control" name="carga_horaria" id="carga_horaria">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="form-group col-md-4">
				<input class="btn btn-primary" type="submit" value="Salvar"></input>
				<button class="btn btn-default" type="submit">Alterar</button>
			</div>
		</div>

	</form>
</div>	