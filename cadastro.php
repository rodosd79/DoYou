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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="assets/css/style_cadastro.css">
  <link rel="shortcut icon" href="assets/img/favicon.ico">
    <title>Cadastro</title>
	
</head>
<body class="login-page">


<main>
  
  <div class="login-block">

    <form action="#">

    <div class="mb-2">
    <div class="cadastro-usuario">
			<form method="POST" class="cadastro-form">
			<h2 class="title">Cadastro</h2>
			<div class="input-field">
			<i class="bi bi-person-circle"></i>
			<input type="text" name="nome" placeholder="Nome Completo" required/>
			</div>
			<div class="input-field">
				<i class="bi bi-envelope-fill"></i>
			<input type="email" name="email" placeholder="Email" required/>
			</div>
			<div class="input-field">
				<i class="bi bi-lock-fill"></i>
			<input type="password" name="senha" id="senha" placeholder="Senha"  />
			</div>
			<div class="input-field">
				<i class="bi bi-shield-fill-check"></i>
			<input type="password" id="senha2" placeholder="Confirme sua Senha"  />
			</div>

      <button class="btn" type="submit">Cadastra-se</button>
  
      <div class="links">
        <p class="text-center mb-1">Ja possui uma conta? <a class="txt-brand" href="login.php">Login</a></p>
    </div>


    </form>
  </div>
    

  </div>

  

</main>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script type="text/javascript" src="assets/js/cadastro.js"></script>
</body>
</html>