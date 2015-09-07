<?php
	include("conecta.php");
	include("banco-produtos.php");
	include("logica-usuario.php");

	$produto_id = $_GET["id"];
	removeProduto($conexao, $produto_id);

	$_SESSION["success"] = "Produto removido com sucesso.";
	header("Location: produto-lista.php");
	die();
