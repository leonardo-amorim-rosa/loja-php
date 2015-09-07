<?php include("cabecalho.php") ?>
<?php include("conecta.php") ?>
<?php include("banco-produtos.php") ?>

<?php if (isset($_GET["confirma"]) && $_GET["confirma"] == true): ?>
	<p class="alert-success">O produto foi removido com sucesso!</p>
<?php endif ?>

<table class="table table-striped table-bordered">
		<?php
			$produtos = listaProdutos($conexao);
			foreach ($produtos as $produto):
		?>

		<tr>
			<td><?= $produto['nome'] ?></td>
			<td><?= $produto['preco'] ?></td>
			<td><?= substr($produto['descricao'], 0, 20) ?></td>
			<td><?= $produto['categoria_nome'] ?></td>
			<td><?= $produto['usado'] == true ? "true" : "false" ?></td>
			<td>
				<a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a>
			</td>
			<td>
				<a class="btn btn-danger" href="remove-produto.php?id=<?=$produto['id']?>" onclick="return confirm('Tem certeza?');">Remover</a>
			</td>
		</tr>

		<?php	endforeach ?>
</table>

<?php include("rodape.php") ?>
