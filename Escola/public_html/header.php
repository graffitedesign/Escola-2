<?php
?>
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	    <!-- Custom styles for this template -->
	    <link href="css/album.css" rel="stylesheet">
	</head>
	<body>
		<div id="login">
			<form method="post">
				<input type="text" name="login" placeholder="Informe o Login">
				<input type="text" name="login" placeholder="Informe a Senha">
				<input type="submit" name="logar" value="ENTRAR" class="btn">
				<a href="" class="ocultar">OCULTAR</a>
			</form>
		</div><!-- login -->
		<div class="topo">
			<ul class="menu">
				<li><a href="">LOGO</a></li>
				<li><a href="">HOME</a></li>
				<li><a href="">CURSOS</a></li>
				<li><a href="">CADASTRO</a></li>
				<li><a href="">SOBRE</a></li>
				<li><a href="">CONTATO</a></li>
				<li><a href="#login">ACESSAR</a></li>
			</ul><!--menu -->
			<div class="slideHome">
				<div class="imagens">
					<img class="banner" src="img/slideHome/Banner01.jpg">
					<img class="banner" src="img/slideHome/Banner02.jpg">
					<img class="banner" src="img/slideHome/Banner03.jpg">
					<img class="banner" src="img/slideHome/Banner04.jpg">
				</div><!--IMAGENS -->
			</div><!-- Slide Home -->
			<script>
				var myIndex = 0;
				carousel();

				function carousel() {
				    var i;
				    var x = document.getElementsByClassName("banner");
				    for (i = 0; i < x.length; i++) {
				       x[i].style.display = "none";  
				    }
				    myIndex++;
				    if (myIndex > x.length) {myIndex = 1}    
				    x[myIndex-1].style.display = "block";  
				    setTimeout(carousel, 2000); // Change image every 2 seconds
				}
			</script>
		</div><!--TOPO -->
		<!-- ===========================
		================================
		INICIO DO CONTEUDO
		================================
		============================ -->
		<div class="conteudo">