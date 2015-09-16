<?php require_once("cabecalho.php");
	require_once("categoria-dao.php");

	mostraAlerta("success");
?>

<table class="table table-striped table-bordered">
		<tr>
			<th>Nome</th>
		</tr>
		<?php
			$dao = new CategoriaDAO($conexao);
			$categorias = $dao->listaCategorias();
			foreach ($categorias as $categoria):
		?>

		<tr>
			<td><?= $categoria->nome ?></td>
			<td style="width:20px">
				<a class="btn btn-primary" href="categoria-altera-formulario.php?id=<?=$categoria->id?>">Alterar</a>
			</td>
			<td style="width:20px">
				<a class="btn btn-danger" href="remove-categoria.php?id=<?=$categoria->id?>" onclick="return confirm('Tem certeza?');">Remover</a>
			</td>
		</tr>

		<?php	endforeach ?>
</table>

<?php include("rodape.php") ?>
