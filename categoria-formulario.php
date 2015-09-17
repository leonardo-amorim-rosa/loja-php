<?php
	require_once("cabecalho.php");
	require_once("class/categoria.php");
	require_once("logica-usuario.php");

	verificaUsuario();

	$categoria = new Categoria;
?>

		<h1>Formulário de Categoria</h1>
    <form action="adiciona-categoria.php" method="post">

			<table class="table">

				<?php include("categoria-formulario-base.php"); ?>

				<tr>
					<td colspan="2"><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
				</tr>

			</table>

		</form>

<?php include("rodape.php") ?>
