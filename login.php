<?php
require_once "db/verificar_login.php";
if(isset($_SESSION['nome'])){
	header('location: inicio.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="sie-edge" />
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<!--ver alteração no layout bs4
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link rel="stylesheet" href="assets/css/style_cadastro.css">
    <title>Cadastro</title>
</head>
<body>
	<div class="container">
		<div class="forms-container">
			<div class="cadastro-usuario">
			<form method="POST" class="cadastro-form">
			<h2 class="title">Login</h2>
		
			<div class="input-field">
				<i class="bi bi-envelope-fill"></i>
			<input type="email" name="email" placeholder="Email" />
			</div>
			<div class="input-field">
				<i class="bi bi-lock-fill"></i>
			<input type="password" name="senha" placeholder="Senha" />
			</div>
			<input class="btn mb-10" type="submit" name="logar" value="Entrar"/>
			
			
			<small class="text-muted">Ainda não possui conta?</small>
			<a href="cadastro.php" class="text-success">Faça seu cadastro</a>
			
			</form>
			</div>
		<div class="panels-container">
			<div class="panel left-panel">
			<img src="assets/img/business.svg" class="image" alt="" />
			</div>
		</div>
	</div>
		
  </div>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script type="text/javascript" src="assets/js/cadastro.js"></script>
</body>
</html>