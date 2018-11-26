<?php 
  include_once 'includs/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Novo Funcionario</h3>
    <form action="php_action/createFunc.php" method="POST">
      
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome">
        <label for="nome">Nome:</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="sobrenome" id="sobrenome">
        <label for="sobrenome">Sobrenome:</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="cpf" id="cpf">
        <label for="cpf">CPF:</label>
      </div>

       <div class="input-field col s12">
        <input type="text" name="email" id="email">
        <label for="email">E-mail:</label>
      </div>

       <div class="input-field col s12">
        <input type="text" name="rua" id="rua">
        <label for="rua">Rua:</label>
      </div>

      <button type="submit" name="btn-cadastrar-func" class="btn green">Cadastrar</button>
      <a href="funcionarios.php" class="btn">Lista de funcionarios</a> 

    </form>
    
  </div>
</div>