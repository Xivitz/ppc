<?php 
require_once('class/Disciplina.php');
require_once('cabecalho.php');
require_once('conecta.php');
require_once('persistenciaDisciplina.php');
require_once('logicaUsuario.php');

verificaUsuario();

$disciplina = new Disciplina();

$disciplina->$nome 			= $_POST['nome'];
$disciplina->$descricao 	= $_POST['descricao'];
$disciplina->$codigo 		= $_POST['codigo'];
$disciplina->$semestre  	= $_POST['semestre'];
$disciplina->$cargaHoraria  = $_POST['carga_horaria'];

if (insereDisciplina($conexao, $disciplina)) {
?>
	<p class="alert-success">A disciplina <?php echo $disciplina->nome; ?> foi adicionada com sucesso! </p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="alert-danger">A disciplina <?php echo $disciplina->nome; ?> não foi adicionado: <?php echo $msg ?></p>
<?php 
}