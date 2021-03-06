<?php require_once("cabecalho.php");
	require_once("produto-dao.php");

	mostraAlerta("success");
	$desconto = 0.1;

?>

<table class="table table-striped table-bordered">
		<tr>
			<th>Nome</th>
			<th>Preço</th>
			<th>Preço com desconto(<?=$desconto?>%)</th>
			<th>Descrição</th>
			<th>Categoria</th>
			<th>Usado</th>
		</tr>
		<?php
			$dao = new ProdutoDAO($conexao);
			$produtos = $dao->listaProdutos();
			foreach ($produtos as $produto):
		?>

		<tr>
			<td><?= $produto->nome ?></td>
			<td><?= number_format($produto->getPreco(), 2) ?></td>
			<td><?= number_format($produto->valorComDesconto($desconto), 2) ?></td>
			<td><?= substr($produto->descricao, 0, 20) ?></td>
			<td><?= $produto->categoria->nome ?></td>
			<td><?= $produto->usado == true ? "true" : "false" ?></td>
			<td>
				<a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto->id?>">Alterar</a>
			</td>
			<td>
				<a class="btn btn-danger" href="remove-produto.php?id=<?=$produto->id?>" onclick="return confirm('Tem certeza?');">Remover</a>
			</td>
		</tr>

		<?php	endforeach ?>
</table>

<?php include("rodape.php") ?>
