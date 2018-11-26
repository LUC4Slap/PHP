<?php 
  include_once 'includs/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Novo Produto</h3>
    <form action="php_action/createProd.php" method="POST">
      
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome">
        <label for="nome">Nome:</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="preco" id="preco">
        <label for="preco">Preço:</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="quantidade" id="quantidade">
        <label for="quantidade">Quantidade:</label>
      </div>

      <button type="submit" name="btn-cadastrar-prod" class="btn green">Cadastrar</button>
      <a href="produtos.php" class="btn">Lista de produtos</a> 

    </form>
    
  </div>
</div>