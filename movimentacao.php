<?php
  require_once "db/visualizar_movimentacao.php";
  require_once "db/listar_categorias.php";
  require_once "db/alterar_movimentacao.php";
  require_once "db/excluir_movimentacao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoYou | Visualizar Movimentação</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/form_style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
</head>


 
    <body class="mt-5 mb-5">

      <form  method="POST" class="bg-light">
        <?php if(isset($_REQUEST['tm'])){
         if($_REQUEST['tm']==1){?>
        <h1>Receita</h1>
        <?php } else { ?>
        <h1>Despesa</h1>
        <?php } }?>
          
        <?php if(isset($mov)){
        foreach($mov as $m){ ?>
        <fieldset>
        <label for="categoria">Categoria:</label>
          <select id="categoria" name="categoria">
              <option value="<?php echo $m['idCategoria']?>" selected><?php echo $m['nome']?></option>
          <?php foreach($categorias as $c) {?>
              <option value="<?php echo $c['idCategoria']?>"><?php echo $c['nome']?></option>
            <?php } ?>
          

        <label for="des">Descrição:</label>
          <textarea id="des" name="des"><?php echo $m['descricao']?></textarea>

        <label for="date">Data:</label>
        <input type="date" id="date" name="date" value="<?php echo $m['dataMov']?>">

        <label for="valor">Valor: R$</label>
        <input type="number" id="valor" name="valor" value="<?php echo $m['valor']?>">

        <?php }} else {
          header('location: tabela.php');
        }?>
        </fieldset>
          
        <div class="form-row justify-content-center mt-4">
        <div class="form-group  col-md-4 mt-2">                  
            <input type="text" hidden value="<?php echo $m['idMovimentacao']?>" name="idMov">
            <button class="form-control btn btn-success mt-2" name="alterar">Alterar</button>
            <button class="form-control btn btn-danger mt-2" name="excluir">Excluir</button>
           
            <a href="tabela.php?>" class="form-control btn btn-white mt-2">Voltar</a>
            
        </div>
        </div>
        
      </form>
      
    </body>
</html>