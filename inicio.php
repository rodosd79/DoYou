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
    
    <!-- Grafico -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Categoria', 'Dinheiro'],
        //   Foreach de despesa
          <?php foreach ($graficoD as $g){ ?>
            ['<?php echo $g['nome'] . " (Despesa)" ?>', <?php echo $g['somaValor']; ?>],
          <?php } ?>
        //   Foreach de receita
          <?php foreach ($graficoR as $g){ ?>
            ['<?php echo $g['nome'] . " (Receita)" ?>', <?php echo $g['somaValor']; ?>],
          <?php } ?>
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
          colors: ['#00d863', '#030229', '#1B5937', '#00A64B', '#2C2975'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('graf'));
        chart.draw(data, options);
      }
    </script>
    <!--  -->
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

    <!-- AREA 1 = Acesso rápido -->
        <div class="d-flex container flex-column bgPerso my-4 p-3">
            <div class="d-flex flex-md-nowrap flex-wrap">
            <div class="order-md-0 order-2 flex-fill d-flex justify-content-between mr-2 mt-1 align-items-center">
                <h5>Olá, <?php echo $_SESSION['nome'] ?>! <br>Tudo Bem?</h5>
                <div class="d-flex">
                    <h5 class="mb-0 mr-1"> <strong class="DoYou">Saldo:</strong></h5>
                    <h5 class="mb-0">R$ <?php echo $saldo; ?></h5>
                </div>
            </div>
            <div class="order-md-0 order-1 borda-left pl-md-2 py-1 d-block d-flex mb-2">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Adicionar despesa" class="btn btnPerso">
                    <svg xmlns="http://www.w3.org/2000/svg" height="43px" viewBox="0 0 24 24" width="43px" fill="#ff6c6c">
                        <path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                    </svg>
                    <h6>Despesa</h6>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Adicionar receita" class="btn btnPerso">
                    <svg xmlns="http://www.w3.org/2000/svg" height="43px" viewBox="0 0 24 24" width="43px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                    <h6>Receita</h6>
                </a>
                <a href="tabela.php" data-toggle="tooltip" data-placement="bottom" title="Ver relatórios" class="btn btnPerso">
                    <svg xmlns="http://www.w3.org/2000/svg" height="43px" viewBox="0 0 24 24" width="43px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM10 9h8v2h-8zm0 3h4v2h-4zm0-6h8v2h-8z"/></svg>
                    <h6>Relatórios</h6>
                </a>
            </div>
            </div>
            <!-- NAV DE TABELAS -->
                <div class="justify-content-center w-100 mt-3">
                    <nav class="nav myNav nav-tabs justify-content-md-center">
                        <a href="#" class="nav-link">Geral</a>
                        <a href="#" class="nav-link">Receitas</a>
                        <a href="#" class="nav-link">Despesas</a>
                        <a href="#" class="nav-link">Investimentos</a>
                    </nav>
                </div>
            <!--  -->
        </div>
    <!--  -->
    
    <!-- AREA 2 = BLOG E GRAFICO -->
        <div class="d-flex flex-md-nowrap flex-wrap container mb-4 p-0">
            <!-- Blog -->
            <div class="d-flex flex-column bgPerso p-3 mr-md-4 iBlog">
                <h5 class="vBlog">Nosso Blog</h5>
                <div class="cBlog">
                    <?php foreach($blogs as $b){ ?>
                        <div class="divBlog py-2">
                            <a href="blog_post.php?id=<?php echo $b['idPost']; ?>" class="linkBlog d-flex py-2">
                                <img src="<?php echo $b['imagem'] ?>" alt="<?php echo $b['alt_img'] ?>">
                                <?php echo $b['titulo'] ?>
                                <br>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Grafico -->
            <div class="d-flex container mt-md-0 mt-4 flex-column bgPerso p-3">
                <div id="graf" class="w-100 h-100">

                </div>
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