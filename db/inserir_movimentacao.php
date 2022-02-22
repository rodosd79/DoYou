<?php

    require_once "conexao.php";

    
    if (!isset($_SESSION['id'])){
        session_start();
       
    }

    if(isset($_REQUEST['nova_movimentacao'])){  

        $valor= (float)$_REQUEST['valor'];

        $dataMov= $_REQUEST['date'];

        $descricao= $_REQUEST['des'];

        $idCategoria = (int)$_REQUEST['categoria'];

        $idTipoMov = (int)$_REQUEST['tm'];

        $idUsuario = $_SESSION['id'];



        $sql = "INSERT INTO movimentacao (valor, dataMov, descricao, idCategoria, idTipoMov,idUsuario) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);


        mysqli_stmt_bind_param($stmt, 'dssiii',  $valor, $dataMov, $descricao, $idCategoria, $idTipoMov, $idUsuario);



        //executa statement preparado

        mysqli_stmt_execute($stmt);



        //fecha statement e conexão

        mysqli_stmt_close($stmt);


       // mysqli_query($conn, $sql);


        header("Location: inicio.php");



        exit();

    }