<?php include("cabecalho.php") ?>
<?php include("conecta.php") ?>
<?php include("banco-produtos.php") ?>

	<?php
		$nome = $_POST["nome"];
		$preco = $_POST["preco"];
		$descricao = $_POST["descricao"];
		$categoria_id = $_POST["categoria_id"];
		if (isset($_POST["usado"]) && $_POST["usado"] == true) {
			$usado = "true";
		} else {
			$usado = "false";
		}
	?>

	<?php	if (cadastraProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) {	?>

		<p class="text-success">O Produto <?= $nome ?>, <?= $preco ?> foi adicionado com sucesso!!!</p>

	<?php } else { ?>

		<?php $msg = mysqli_error($conexao) ?>

		<p class="text-danger">O Produto não foi cadastrado!!! <?= $msg ?></p>

	<?php }	?>

<?php include("rodape.php") ?>
