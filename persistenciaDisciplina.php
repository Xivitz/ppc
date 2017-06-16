<?php 
require_once('class/Disciplina.php');
require_once('conecta.php');

function insereDisciplina ($conexao, Disciplina $disciplina) 
{
	$sql = "INSERT INTO disciplina (nome, descricao, codigo, semestre, carga_horaria)
			VALUES ('{$disciplina->nome}',
				    '{$disciplina->descricao}',
				    '{$disciplina->codigo}',
				    '{$disciplina->semestre}',
				    '{$disciplina->cargaHoraria}')";
	return mysqli_query($conexao, $sql);
}
