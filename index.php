<?php
#Iniciar sessão
session_start();

#Base de dados
include 'db.php';

#Cabeçalho
include 'header.php';

#Conteúdo da página

if (isset($_SESSION['login'])) {
		if(isset($_GET['pagina'])){
		  $pagina = $_GET['pagina'];
			} 
			else {
				$pagina = 'noticias';
			}
	}
	else {
		$pagina = 'home';
	}

	switch ($pagina) {
		case 'noticias': include 'views/noticias.php'; break;
		case 'reserva':include 'views/reserva.php'; break;
		case 'conta':include 'views/conta.php'; break;
		case 'contato': include 'views/contato.php'; break;
		case 'cadastro': include 'views/cadastro.php'; break;
		default:include 'views/home.php'; break;
	}

# Rodapé
include 'footer.php';