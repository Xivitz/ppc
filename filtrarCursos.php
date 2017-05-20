<?php include('cabecalho.php') ?>

<div class="container">
	<form action="" method="get" accept-charset="utf-8" id="formulario">
		<h2>Projeto Pedagógico de Cursos</h2>
		<hr>
		
		<div class="row">
			<div class="form-group col-md-6">
				<label class="col-md-12">Filtrar Cursos:</label>
				<select name="cursos" class="form-control">
					<option value=""></option>
				</select>
			</div>
			<button type="submit" class="btn btn-default" class="col-md-offset-8" style="margin-top: 22px;">Localizar</button>
		</div>

		<div class="row">
			<div class="form-group col-md-12">
				
			<div class="resultadoBusca form-group col-md-10">
				<label for="tabela">Resultado Busca:</label>
				<table class="table table-striped table-bordered" class="col-md-4">
					<thead>
						<tr>
							<th></th>
							<th>Lista Projeto Pedagógico de Cursos</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="checkbox"></input></td>
							<td>Haverá alguma coisa aqui</td>
						</tr>
					</tbody>
				</table>

				<div class="col-10">
					<td><button type="submit" class="btn btn-success">Alterar</button></td>
					<td><button type="submit" class="btn btn-danger">Remover</button></td>						
				</div>
			</div>
		</div>
	</form>

	<form action="" method="get" accept-charset="utf-8">
		<div class="row col-md-offset-8">
			<button type="submit" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-primary">Sair</button>			
		</div>	
	</form>		
</div>
