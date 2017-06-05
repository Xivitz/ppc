<?php
require_once('cabecalho.php');
require_once('logicaUsuario.php');
verificaUsuario();
?>

<div class="container">

	<form action="" method="get" accept-charset="utf-8" id="formulario">
		<h2>Projeto Pedagógico de Cursos</h2>
		<hr>
		
		<div class="row">
			<div class="form-group col-md-6">
				<label class="col-md-12">Cursos</label>
				<select name="cursos" class="form-control">
					<option value=""></option>
				</select>			
			</div>
		</div>

		<div class="row">			
			<div class="form-group col-md-6">
				<label class="col-md-12">Perfil do Curso:</label>
				<input type="text" class="form-control" id="">	
			</div>

			<div class="form-group col-md-offset-6">
				<label class="col-md-12">Perfil do Egresso:</label>
				<input type="text" class="form-control" id="">
			</div>
		</div>

		<div class="row">			
			<div class="form-group col-md-6">
				<label class="col-md-12">Forma de acesso ao curso:</label>
				<input type="text" class="form-control" id="">	
			</div>

			<div class="form-group col-md-offset-6">
				<label class="col-md-12">Representação gráfica de um perfil de formação:</label>
				<input type="text" class="form-control" id="">
			</div>
		</div>

		<div class="row">			
			<div class="form-group col-md-6">
				<label class="col-md-12">Sistema de Avaliação do Processo Ensino Aprendizagem:</label>
				<input type="text" class="form-control" id="">
			</div>

			<div class="form-group col-md-offset-6">
				<label class="col-md-12">Sistema de Avaliação do Projeto do Curso:</label>
				<input type="text" class="form-control" id="">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-3">
				<label class="col-md-3">TCC:</label>
				<input type="text" class="form-control" value="N/A" id="">
			</div>

			<div class="form-group col-md-3">
				<label class="col-md-8">Estágio Curricular:</label>
				<input type="text" class="form-control" value="N/A" id="">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-12">
				<label class="col-md-12">Política de Atendimento a Pessoas com Deficiência e/ou Mobilidade Reduzida:</label>
				<textarea class="form-control"></textarea>
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-offset-10">
				<button class="btn btn-danger" type="submit">Cancelar</button>
				<button class="btn btn-primary" type="submit">Alterar</button>
			</div>
		</div>
	</form>
</div>	