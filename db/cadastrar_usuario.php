<?php

    require_once "conexao.php";

    if(isset($_REQUEST['novo_usuario'])){

        $nome = $_REQUEST['nome'];
        $email= $_REQUEST['email'];
        $senha= md5($_REQUEST['senha']);

        $cmd = "SELECT email FROM usuario WHERE email = '$email'";
        $query = mysqli_query($conn, $cmd);
        if(mysqli_num_rows($query) > 0){
            header('location: cadastro.php?cad=1');
            exit();
        } else {
            $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

            mysqli_query($conn, $sql);

            session_start();
            $_SESSION['nome'] = $nome;

            header("Location: inicio.php");

            exit();
        }
    }