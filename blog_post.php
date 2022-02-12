<?php
    require_once "db/visualizar_post.php";
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- DoYou Style -->
    <link rel="stylesheet" href="assets/css/style_header.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>DoYou Blog</title>
  </head>
  <body>
  <?php include_once "header.php"?>
    <div class="container mt-5">
       <?php foreach($query as $q){ ?>

        <img src="<?php echo $q['imagem']?>" style="width:90vw;"> 
           <div class="bg-dark p-5 rounded-lg text-white text-center">
             <h1><?php echo $q['titulo']; ?></h1>
             <p class="text-right"><small class="text-muted"><?php echo $q['data_p'];?></small></p>
         </div>

         <p class="mt-5 border-left border-dark pl-3"><?php echo $q['conteudo']; ?></p>

        <?php } ?>

        <a href="blog.php" class="btn btn-outline-dark my-3">Voltar</a>

        <a href="index.php" class="btn btn-outline-dark my-3">Home</a>

        </div>
    </div>
 
    <?php include_once "footer.php"?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
  </body>
</html>