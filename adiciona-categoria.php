<?php
  require_once("cabecalho.php");
	require_once("categoria-dao.php");
	require_once("logica-usuario.php");

	verificaUsuario();

	$categoria = new Categoria;
	$categoria->nome = $_POST["nome"];

	$categoriaDAO = new CategoriaDAO($conexao);

if ($categoriaDAO->cadastraCategoria($categoria)) {	?>

	<p class="text-success">A Categoria <?=$categoria->nome?> foi adicionada com sucesso!!!</p>

<?php } else { ?>

	<?php $msg = mysqli_error($conexao) ?>

	<p class="text-danger">A Categoria <?=$categoria->nome?> não foi cadastrada!!! <?= $msg ?></p>

<?php }	?>

<?php require_once("rodape.php"); ?>
