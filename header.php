<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Residencial Mar Azul</title>
	<meta charset="UTF-8">	
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href='css/core/main.css' rel='stylesheet' />
    <link href='css/daygrid/main.css' rel='stylesheet' />
    <script src="locales/pt-br.js"></script>

</head>

<body>
	<header>
		<div class="container">
		<a href="?pagina=home"> <img src="img/residencial-mar-azul-logo.jpg" title="Logo" alt="Logo"></a>
		<?php if (isset($_SESSION['login'])) { ?>
		
		<div id="menu">
			<a href="?pagina=noticias">Notícias</a>
			<a href="?pagina=reserva">Reservas</a>
			<a href="?pagina=conta">Prestação de contas</a>
			<a href="?pagina=contato">Entre em contato</a>
			<a href="?pagina=cadastro">Cadastro</a>

			<?php if (isset($_SESSION['login'])) { ?>
				<a href="logout.php"><?php echo $_SESSION['id']; ?> (sair) </a>
			<?php } ?>
			
		</div>
	<?php } ?>
	</header>
	
	<div id="conteudo" class="container">