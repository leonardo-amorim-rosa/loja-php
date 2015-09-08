<?php
	include("cabecalho.php");
	include("conecta.php");
	include("banco-categorias.php");
  include("banco-produtos.php");
	include("logica-usuario.php");

	verificaUsuario();

  $id = $_GET["id"];
  $produto = buscarProdutoPorId($conexao, $id);
	$categorias = listaCategorias($conexao);
  $usado = $produto['usado'] == true ? "checked=checked" : "";
?>

		<h1>Alterando produto</h1>
		<form action="altera-produto.php" method="post">

			<table class="table">
				<input name="id" type="hidden" value="<?=$produto['id']?>" />

				<?php include("produto-formulario-base.php"); ?>

				<tr>
					<td colspan="2"><input class="btn btn-primary" type="submit" value="Alterar" /></td>
				</tr>

			</table>
		</form>

<?php include("rodape.php") ?>
