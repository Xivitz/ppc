<?php 

$conexao = mysqli_connect('localhost', 'root', '', 'ppc');

if (!$conexao) {
	echo 'Conexão Falhou!' . mysqli_error();
}