<?php 
require_once('class/Curso.php');
require_once('conecta.php');

function insereCurso ($conexao, Curso $curso)
{
	$sql = "INSERT INTO curso (tipo_curso,
								 modalidade,
								 denominacao_curso,
								 habilitacao,
								 local_oferta,
								 turnos, 
								 vagas_cada_aluno,
								 carga_horaria)
			VALUES ('{$curso->tipoCurso}',
					'{$curso->modalidade}',
					'{$curso->denominacaoCurso}',
					'{$curso->habilitacao}',
					'{$curso->localOferta}',
					'{$curso->turno}',
					 {$curso->vagas},
					 {$curso->cargaHoraria})";
	return mysqli_query($conexao, $sql);
}

function buscaCurso ($conexao, $id) 
{
	$sql 	 = "SELECT * FROM curso WHERE id = {$id}";
	$retorno = mysqli_query($conexao, $sql);
	return mysqli_fetch_assoc($retorno);
}