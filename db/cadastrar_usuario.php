<?php

    require_once "conexao.php";
    session_start();

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

        $query = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";
         $result = mysqli_query($conn, $query);

    //verificação de resultado

       if(mysqli_num_rows($result) > 0){

        $dados = mysqli_fetch_array($result);
        $_SESSION['id'] = $dados['idUsuario'];
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['email'] = $dados['email'];
        
        header("Location: inicio.php?msg=1");

        exit();
        }
    }}