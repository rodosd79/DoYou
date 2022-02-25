<?php 
require_once "db/db_tabela.php";
if (!isset($_SESSION['nome'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoYou | Tabela</title>
    <!-- DoYou style -->
    <link rel="stylesheet" href="assets/css/style_tabela.css">
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

    <!-- NAV DE TABELAS -->
        <nav class="nav myNav nav-tabs justify-content-md-center">
            <a href="tabela.php" class="nav-link active">Geral</a>
            <a href="" class="nav-link">Receitas</a>
            <a href="" class="nav-link">Despesas</a>
            <a href="" class="nav-link">Gráficos</a>
        </nav>
    <!--  -->

    

    <!-- TABELA -->
        <div class="mx-md-5 px-lg-5 mt-2">
            <form method="post">
                <div class="form-group d-inline-flex" style="border: solid 1px #00d863;">
                <input class="d-inline-flex w-75 form-control" type="month" name="mes" id="mes" style="border-right: none;border: none;"><button class="btn myBtn" type="submit" name="pesq" style="border-radius: 0px !important; vertical-align: inherit;">Pesquisar</button>
                </div>
            </form>
            <?php if (mysqli_num_rows($query) == 0){ ?>
                <h6 class="alert alert-danger text-center">
                    Nenhum resultado
            </h6>
            <?php } ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center">
                    <thead class="myTable">
                        <tr>
                            <th scope="col" class="tipo col-1">Tipo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Valor</th>
                            <th scope="col" class="col-1">Data</th>
                            <th scope="col" class="col-2">Categoria</th>
                            <th scope="col" class="col-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach($query as $r){ ?>
                        <tr style="color: <?php if($r['idTipoMov'] == "2") {echo "red";} else {echo "green";} ?>;" class="align-items-center">
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
                                <?php echo $r['nome'] ?> 
                            </td>
                            <td>
                                <a href="movimentacao.php?tm=<?php echo $r['idTipoMov']?>&idMov=<?php echo $r['idMovimentacao'] ?>" class="btn myBtn" style="border-radius: 0px !important;  ">Editar</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    <!--  -->

    <!-- Footer -->
        <?php include_once "footer.php" ?>
    <!--  -->

    <!-- Js Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!--  -->
</body>
</html>