<?php
	require_once("produto-dao.php");
	require_once("logica-usuario.php");

	$produtoDAO = new ProdutoDAO($conexao);

	$produto_id = $_GET["id"];
	$produtoDAO->removeProduto($produto_id);

	$_SESSION["success"] = "Produto removido com sucesso.";
	header("Location: produto-lista.php");
	die();
