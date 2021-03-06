<?php
error_reporting(E_ALL ^ E_NOTICE);
include('mostraAlerta.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SIGPEC</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script>$(function(){$(".datepicker").datepicker();});</script>
</head>
<body>
 	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">PPC</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="incluirCurso.php">Incluir Curso</a></li>
					<li><a href="consultaDadosGeraisCurso.php">Consultar Curso</a></li>
					<li><a href="cadastroPPC.php">Cadastro de PPC</a></li>
					<li><a href="filtrarCursos.php">Filtrar Cursos</a></li>
					<li><a href="cadastroProfessor.php">Cadastrar Professor</a></li>
					<li><a href="cadastroDisciplina.php">Cadastrar Disciplina</a></li>
				</ul>
			</div>
		</div>
	</div>	
		<?php
		mostraAlerta('success');
		mostraAlerta('danger');
		?>
	
	
