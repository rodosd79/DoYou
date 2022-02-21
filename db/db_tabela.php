<?php
require_once "conexao.php";
session_start();
require_once "db_header.php";

// Pesquisando no banco por email e n por id pq a pessoa pode estar vindo do cadastro.
// E agora é seguro pesquisar por email pq vai ser único por pessoa.





// TABELA
$tab = "SELECT *, DATE_FORMAT(dataMov, '%d/%m/%Y') as data_ FROM movimentacao INNER JOIN categoria ON movimentacao.idCategoria = categoria.idCategoria WHERE idUsuario = '$id' ORDER BY dataMov desc";

$query = mysqli_query($conn,$tab);


?>