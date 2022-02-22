<?php

    require_once "conexao.php";

    if(isset($_POST['novo_usuario'])){
        if($_POST['senha']!=$_POST['senha2']){
            header("Location: cadastro.php?erro=1");    
        }else{
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
        echo "<script>alert('Usuário cadastrado com sucesso');</script>";
        header("Location: index.php");

        exit();
        }
    }