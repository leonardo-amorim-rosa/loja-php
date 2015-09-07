<?php
	include("cabecalho.php");
	include("conecta.php");
	include("banco-categorias.php");
	include("logica-usuario.php");

	verificaUsuario();

	$produto = array("nome" => "", "preco" => "", "descricao" => "", "categoria_id" => "1");
	$usado = "";
	$categorias = listaCategorias($conexao);
?>

		<h1>Formulário de produto</h1>
		<form action="adiciona-produto.php" method="post">

			<table class="table">

				<?php include("produto-formulario-base.php"); ?>

				<tr>
					<td colspan="2"><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
				</tr>

			</table>
		</form>

<?php include("rodape.php") ?>
