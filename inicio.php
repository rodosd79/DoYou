<?php 
require_once "db/db_inicio.php";
if (!isset($_SESSION['nome'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoYou | Geral</title>
    <!-- DoYou style -->
    <link rel="stylesheet" href="assets/css/style_inicio.css">
    <link rel="stylesheet" href="assets/css/style_header.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <!-- Header -->
        <?php include_once "header.php";

        if (!$_SESSION['nome']){
            header('location: login.php');
            exit();
        }
        ?>
    <!--  -->

    <div class="d-flex py-2 px-lg-4 relatorio">
        <div class="d-inline-block p-2 pr-4 relat-item">
            <h5 class="mb-0"> <strong class="DoYou">Saldo:</strong></h5>
            <h4>R$ <?php echo $saldo; ?></h4>
        </div>
    </div>
    <!-- NAV DE TABELAS -->
    <nav class="nav myNav nav-tabs">
        <a href="#" class="nav-link active">Geral</a>
        <a href="" class="nav-link">Lucro</a>
        <a href="" class="nav-link">Despesas</a>
        <a href="" class="nav-link">Investimentos</a>
        <a href="" class="nav-link">Relatórios</a>
    </nav>
    <!-- TABELA -->
<div class="mx-md-5 px-lg-5 mt-2">
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="myTable">
                <tr>
                    <th scope="col" class="tipo">Tipo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data</th>
                    <th scope="col">Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $r){ ?>
                <tr style="color: <?php if($r['idTipoMov'] == "2") {echo "red";} else {echo "green";} ?>;">
                    <td scope="row" class="tipo">
                        <?php echo $r['idTipoMov'] ?>
                    </td>

                    <td>
                        <?php echo $r['descricao'] ?>
                    </td>

                    <td> 
                        <?php echo 'R$ ' . str_replace(".", ",", $r['valor']) ?>
                    </td>

                    <td> 
                        <?php echo $r['data_'] ?> 
                    </td>

                    <td> 
                        <?php echo $r['idCategoria'] ?> 
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
 </div>
    <!-- Footer -->
        <?php include_once "footer.php" ?>
    <!--  -->

    <!-- Js Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!--  -->
</body>
</html>