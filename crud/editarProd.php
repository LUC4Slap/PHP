<?php 
  //conexão
  include_once 'php_action/db_connect.php';
  include_once 'includs/header.php';

  if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Editar Cliente</h3>
    <form action="php_action/updateProd.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ?>">
        <label for="nome">Nome:</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="preco" id="preco" value="<?php echo $dados['preco'] ?>">
        <label for="preco">Preço:</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="quantidade" id="quantidade" value="<?php echo $dados['quantidade'] ?>">
        <label for="quantidade">Quantidade:</label>
      </div>

      <button type="submit" name="btn-editar-prod" class="btn green">Atualizar</button>
      <a href="produtos.php" class="btn">Lista de produtos</a>

    </form>
    
  </div>
</div>







<?php
  include_once 'includs/footer.php'; 
 ?>