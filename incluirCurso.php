<?php
include('cabecalho.php');
?>

<div class="container">

	<form action="" method="get" accept-charset="utf-8" id="formulario">
		<h2>Incluir Dados Gerais do Curso</h2>
		<div class="row">
		 <div class="form-group col-md-4">
		   <label for="campo1">Tipo do Curso</label>
		   <input type="text" class="form-control" id="campo1">
		 </div>
		 
		 <div class="form-group col-md-4">
		   <label for="campo2">Modalidade</label>
		   <input type="text" class="form-control" id="campo3">
		 </div>
		 
		 <div class="form-group col-md-4">
		   <label for="campo3">Denominação do Curso</label>
		   <input type="text" class="form-control" id="campo3">
		 </div>

		 <div class="form-group col-md-4">
		   <label for="campo4">Habilitação</label>
		   <input type="text" class="form-control" id="campo4">
		 </div>

		 <div class="form-group col-md-4">
		   <label for="campo5">Local de Oferta</label>
		   <input type="text" class="form-control" id="campo5">
		 </div>

		 <div class="form-group col-md-4">
		   <label for="campo6">Turnos de Funcionamento</label>
		   <input type="text" class="form-control" id="campo6">
		 </div>

		 <div class="form-group col-md-6">
		   <label for="campo7">Nº de vagas para cada aluno</label>
		   <input type="number" class="form-control" id="campo7">
		 </div>

		 <div class="form-group col-md-6">
		   <label for="campo8">Carga Horária do Curso</label>
		   <input type="number" class="form-control" id="campo8">
		 </div>
		 
		 <div class="form-group col-md-9">
		   <h4>Estrutura Curricular</h4>		 	
		 </div>

		 <div class="form-group col-md-6">
		   <label for="campo9">Regime Letivo</label>
		   <input type="text" class="form-control" id="campo9">
		 </div>

		 <div class="form-group col-md-6">
		   <label for="campo10">Períodos</label>
		   <input type="text" class="form-control" id="campo10">
		 </div>

		 <div class="form-group col-md-9">
		   <h4>Coordenador do Curso</h4>
		 </div>

 		 <div class="form-group col-md-8">
		   <label for="campo11">Nome</label>
		   <select class="form-control"></select>		   
		 </div>

		 <div class="form-group col-md-4">
		   <p><a href="">Cadastrar novo Coordenador</a></p>
		 </div>

		 <div class="form-group col-md-5">
		   <label for="campo11">CPF</label>
		   <input class="form-control" disabled="disabled"></input>
		 </div>

		 <div class="form-group col-md-4">
		   <label for="campo11">Titulação</label>
		   <input class="form-control" disabled="disabled"></input>
		 </div>

		 <div class="form-group col-md-3">
		   <label for="campo11">Tempo de Dedicação</label>
		   <input class="form-control" disabled="disabled"></input>
		 </div>
		</div>

	</form>
</div>

<?php include('rodape.php'); ?>
