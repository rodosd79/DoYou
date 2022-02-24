<?php
setlocale(LC_TIME,"portuguese");
date_default_timezone_set('Brazil/East');

require_once "conexao.php";
session_start();
require_once "db_header.php";

// TABELA
$tab = "SELECT *, DATE_FORMAT(dataMov, '%d/%m/%Y') as data_ FROM movimentacao INNER JOIN categoria ON movimentacao.idCategoria = categoria.idCategoria WHERE idUsuario = '$id' ORDER BY dataMov desc";

$query = mysqli_query($conn,$tab);


// Selecionar por mês
// $dataHoje = getdate();
// $mes = strftime('%B');
// echo $mes;
if (isset($_POST['pesq'])){
    $mes = substr($_POST['mes'], 5);
    $ano = substr($_POST['mes'], 0, 4);

    $tab = "SELECT *, DATE_FORMAT(dataMov, '%d/%m/%Y') as data_ FROM movimentacao INNER JOIN categoria ON movimentacao.idCategoria = categoria.idCategoria WHERE idUsuario = '$id' AND Month(dataMov) = '$mes' AND Year(dataMov) = '$ano' ORDER BY dataMov desc";

    $query = mysqli_query($conn,$tab);
}



?>