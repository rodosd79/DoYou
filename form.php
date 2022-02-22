<?php
  require_once "db/inserir_movimentacao.php";
  require_once "db/listar_categorias.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoYou | Nova Movimentação</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/form_style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
</head>


 
    <body class="mt-5 mb-5">

      <form  method="post">
        <?php if($_REQUEST['tm']==1){?>
        <h1>Adicionar Receita</h1>
        <?php } else { ?>
        <h1>Adicionar Despesa</h1>
        <?php } ?>
          
        
        <fieldset>
        <label for="categoria">Categoria:</label>
          <select id="categoria" name="categoria">
          <?php foreach($categorias as $c) {?>
              <option value="<?php echo $c['idCategoria']?>"><?php echo $c['nome']?></option>
            <?php } ?>
          

        <label for="des">Descrição:</label>
          <textarea id="des" name="des"></textarea>

        <label for="date">Data:</label>
        <input type="date" id="date" name="date">

        <label for="valor">Valor: R$</label>
        <input type="number" id="valor" name="valor">

       
            
            
        
          
        </fieldset>
          
        <div class="form-row justify-content-center mt-4">
        <div class="form-group  col-md-4 mt-2">      
            <input type="submit" class="form-control btn btn-success mt-2" name="nova_movimentacao" value="Cadastrar">
            <input type="reset" class="form-control btn btn-secondary mt-2" value="Limpar dados">
        </div>
        </div>
        
      </form>
      
    </body>
</html>

