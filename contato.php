<?php require_once("cabecalho.php") ?>

  <h1>Formulário de Contato</h1>
  <form action="envia-contato.php" method="post">
    <table class="table">
      <tr>
        <td>Nome</td>
        <td><input class="form-control" type="text" name="nome" /></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input class="form-control" type="email" name="email" /></td>
      </tr>
      <tr>
        <td>Descrição</td>
        <td><textarea class="form-control" name="descricao"></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" class="btn btn-primary" value="Enviar" /></td>
        <td></td>
      </tr>
    </table>
  </form>

<?php require_once("rodape.php") ?>
