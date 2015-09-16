<?php
	require_once("categoria-dao.php");
	require_once("logica-usuario.php");

	$categoriaDAO = new CategoriaDAO($conexao);

	$categoria_id = $_GET["id"];
	$categoriaDAO->removeCategoria($categoria_id);

	$_SESSION["success"] = "Categoria removida com sucesso.";
	header("Location: categoria-lista.php");
	die();
