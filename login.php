<?php
require_once "db/verificar_login.php";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="sie-edge" />
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/css/style_login.css">
	<link rel="shortcut icon" href="assets/img/favicon.ico">
    <title>Login</title>
	
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

			<div class="links">
        	<p class="text-center mb-1">Ainda não possui conta? <a class="txt-brand" href="cadastro.php">Faça seu cadastro</a></p>
    		</div>
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