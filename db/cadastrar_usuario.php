<?php

    require_once "conexao.php";

    if(isset($_REQUEST['novo_usuario'])){
        $nome = $_REQUEST['nome'];
        $email= $_REQUEST['email'];
        $senha= md5($_REQUEST['senha']);

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