<?php 

$conexao = mysqli_connect('localhost', 'root', 'xivitz194032', 'ppc');

if (!$conexao) {
	echo 'Conexão Falhou!' . mysqli_error();
}