<?php
	include("cabecalho.php");
	include("conecta.php");
	include("banco-categorias.php");
  include("banco-produtos.php");

  $id = $_GET["id"];
  $produto = buscarProdutoPorId($conexao, $id);
	$categorias = listaCategorias($conexao);
  $usado = $produto['usado'] == true ? "checked=checked" : "";
?>

		<h1>Formulário de produto</h1>
		<form action="altera-produto.php" method="post">

			<table class="table">

        <input name="id" type="hidden" value="<?=$produto['id']?>" />
				<tr>
					<td>Nome</td>
					<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>" /></td>
				</tr>

				<tr>
					<td>Preço</td>
					<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>" /></td>
				</tr>

				<tr>
					<td>Categoria</td>
					<td>
						<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria): ?>
							<option value="<?=$categoria['id']?>"
                <?=$categoria['id'] == $produto['categoria_id'] ? "selected='selected'" : '' ?>>
                <?=$categoria['nome']?>
              </option>
						<?php endforeach ?>
					</select>
					</td>
				</tr>

				<tr>
					<td></td>
					<td><input type="checkbox" name="usado" <?=$usado?> /> Usado</td>
				</tr>

				<tr>
					<td>Descrição</td>
					<td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
				</tr>

				<tr>
					<td colspan="2"><input class="btn btn-primary" type="submit" value="Alterar" /></td>
				</tr>

			</table>
		</form>

<?php include("rodape.php") ?>
