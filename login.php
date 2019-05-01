<?php

include 'db.php';

$id = addslashes($_POST['id']);

$senha = md5($_POST['senha']);

$query = "SELECT * FROM usuarios WHERE id = '$id' AND senha = '$senha'";
$consulta_usuarios = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta_usuarios) == 1){

	session_start();

	$_SESSION['login'] = true;
	$_SESSION['id'] = $id;

	header('location:index.php');
}
else {
	header('location:index.php?erro_login');
}
