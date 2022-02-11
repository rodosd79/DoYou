<?php

    require_once "conexao.php";

    if(isset($_REQUEST['novo_usuario'])){
        $nome = $_REQUEST['nome'];
        $email= $_REQUEST['email'];
        $senha= md5($_REQUEST['senha']);

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        mysqli_query($conn, $sql);

        header("Location: index.php");

        exit();
    }