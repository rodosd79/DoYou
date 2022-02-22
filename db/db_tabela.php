<?php
require_once "conexao.php";
session_start();
require_once "db_header.php";

// TABELA
$tab = "SELECT *, DATE_FORMAT(dataMov, '%d/%m/%Y') as data_ FROM movimentacao INNER JOIN categoria ON movimentacao.idCategoria = categoria.idCategoria WHERE idUsuario = '$id' ORDER BY dataMov desc";

$query = mysqli_query($conn,$tab);


?>