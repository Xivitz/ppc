<?php 
require_once('class/Curso.php');
require_once('conecta.php');

function  insereCurso ($conexao, Curso $curso)
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

function listaCursos ($conexao)
{
	$cursos 	= array();
	$resultado  = mysqli_query($conexao, 'SELECT * FROM curso');
	while ($cursoAtual = mysqli_fetch_assoc($resultado)) {
		
		$curso = new Curso();
		$curso ->id                = $cursoAtual['id'];
		$curso ->tipoCurso         = $cursoAtual['tipo_curso'];
		$curso ->modalidade        = $cursoAtual['modalidade'];
		$curso ->denominacaoCurso  = $cursoAtual['denominacao_curso'];
		$curso ->habilitacao       = $cursoAtual['habilitacao'];
		$curso ->localOferta       = $cursoAtual['local_oferta'];
		$curso ->turno             = $cursoAtual['turnos'];
		$curso ->vagas  		   = $cursoAtual['vagas_cada_aluno'];
		$curso ->cargaHoraria      = $cursoAtual['carga_horaria'];
		array_push($cursos, $curso);		
	}

//	var_dump($cursos[0]->tipoCurso); die;
	return $cursos;	
}