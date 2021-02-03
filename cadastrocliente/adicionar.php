<?php 
    /* Aqui está sendo chamado as páginas header e foooter que estão com o designer do site */
include_once 'header.php';
?>

 <html>
 <body>
  <div class="row">
    <div class="co1 s12 m6 push-m3 red">
      
<h3>Novo cliente</h3>
      <form action="php_action/create.php" method="POST">
        <div class="input-field col s12">
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div>
         <div class="input-field col s12">
          <input type="text" name="apelido" id="apelido">
          <label for="apelido">Apelido</label>
        </div>
         <div class="input-field col s12">
          <input type="text" name="email" id="email">
          <label for="email">E-mail</label>
        </div>
         <div class="input-field col s12">
          <input type="int" name="idade" id="idade">
          <label for="idade">Idade</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
         <a href="cadastro.php" name="btn-listar"  class="btnht">Lista de Clientes</a>
      </form>
    </div>
  </div>
</body>
  </html>