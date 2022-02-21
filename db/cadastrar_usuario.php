<?php

    require_once "conexao.php";

    if(isset($_POST['novo_usuario'])){
        $nome = $_POST['nome'];
        $email= $_POST['email'];
        $senha= md5($_POST['senha']);

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?,?)";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, 'sss', $nome, $email, $senha);

        //executa statement preparado
        mysqli_stmt_execute($stmt);

        //fecha statement e conexão
        mysqli_stmt_close($stmt);

       // mysqli_query($conn, $sql);

        header("Location: index.php");

        exit();
    }