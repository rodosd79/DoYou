<?php 
require_once "db/db_inicio.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoYou | Relatórios</title>
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

    <div class="d-flex py-2 mx-lg-4 relatorio">
        <div class="d-inline-block p-2 pr-4 relat-item">
            <h5 class="mb-0"> <strong class="DoYou">Saldo:</strong></h5>
            <h4>R$ <?php echo $saldo; ?></h4>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Footer -->
        <?php include_once "footer.php" ?>
    <!--  -->

    <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!--  -->
</body>
</html>