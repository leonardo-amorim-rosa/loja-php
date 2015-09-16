<?php
	require_once("cabecalho.php");
	require_once("categoria-dao.php");
	require_once("logica-usuario.php");

	verificaUsuario();

  $dao = new CategoriaDAO($conexao);

  $categoria_id = $_GET["id"];
	$categoria = $dao->buscarCategoriaPorId($categoria_id);
?>
		<h1>Alterando Categoria</h1>

    <form action="altera-categoria.php" method="post">

  		<table class="table">

  			<?php include("categoria-formulario-base.php"); ?>

  			<tr>
  				<td colspan="2"><input class="btn btn-primary" type="submit" value="Alterar" /></td>
  			</tr>

  		</table>
  	</form>

<?php include("rodape.php") ?>
