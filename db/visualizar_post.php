<?php
require_once "conexao.php";

// Retorna post do banco por id

if(isset($_REQUEST['idPost'])){
    $idPost = $_REQUEST['idPost'];

    $sql = "SELECT * , date_format(data_post, '%d/%m/%Y') as data_p FROM blog WHERE idPost = $idPost";

    $posts = mysqli_query($conn, $sql);


    
}