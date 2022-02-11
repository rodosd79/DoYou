<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "db_financas";

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(mysqli_connect_errno()){

        echo "Erro na conexão:" . mysqli_connect_error();

    }


