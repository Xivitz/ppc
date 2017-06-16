<?php 

function  buscaUsuario ($conexao, $email, $password) 
{
	$senhaMd5 = md5($password);
	$sql	  = "SELECT * FROM users WHERE email = '{$email}' AND senha = '{$senhaMd5}'";
	$retorno  = mysqli_query($conexao, $sql);
	$usuario  = mysqli_fetch_assoc($retorno);
	return $usuario;
}