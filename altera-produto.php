<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produtos.php"); ?>

<?php
  $id = $_POST["id"];
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

	<?php	if (alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) {	?>

		<p class="text-success">O Produto <?= $nome ?>, <?= $preco ?> foi alterado com sucesso!!!</p>

	<?php } else { ?>

		<?php $msg = mysqli_error($conexao) ?>

		<p class="text-danger">O Produto não foi alterado!!! <?= $msg ?></p>

	<?php }	?>

<?php include("rodape.php") ?>
