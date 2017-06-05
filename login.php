<?php 
require_once('conecta.php');
require_once('persistenciaUsuario.php');
require_once('logicaUsuario.php');

$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['password']);


if ($usuario ==  null) {
	$_SESSION['danger'] = 'Usuário ou senha inválidos.';
	header('Location: index.php');
} else {
	$_SESSION['success'] = 'Usuário logado com sucesso.';
	logaUsuario($usuario['email']);
	header('Location: index.php');
}

die;
