<?php
	include("conecta.php");
	include("banco-produtos.php");
	
	$produto_id = $_GET["id"];
	removeProduto($conexao, $produto_id);
	
	header("Location: produto-lista.php?confirma=true");
	die();
