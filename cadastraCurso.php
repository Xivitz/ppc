<?php 
require_once('class/Curso.php');
require_once('cabecalho.php');
require_once('conecta.php');
require_once('persistenciaCurso.php');
require_once('logicaUsuario.php');

verificaUsuario();

$curso = new Curso();

$curso->tipoCurso 		  = $_POST['tipo_curso'];
$curso->modalidade		  = $_POST['modalidade'];
$curso->denominacaoCurso  = $_POST['denominacao_curso'];
$curso->habilitacao		  = $_POST['habilitacao'];
$curso->localOferta		  = $_POST['local_oferta'];
$curso->turno			  = $_POST['turnos'];
$curso->vagas			  = $_POST['vagas'];
$curso->cargaHoraria	  = $_POST['carga_horaria']; 


if (insereCurso($conexao, $curso)) {
?>
	<p class="alert-success" id="mostra-alerta">O curso <?php echo $curso->tipoCurso; ?> foi adicionado com sucesso! </p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="alert-danger" id="mostra-alerta">O produto <?php echo $curso->tipoCurso; ?> não foi adicionado: <?php echo $msg ?></p>
<?php 
}