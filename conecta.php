<?php
	//boa prática não fechar a tag php quando só houver código php no arquivo
	$conexao = mysqli_connect('localhost', 'root', '123', 'loja-php');

	mysqli_query($conexao, "SET NAMES 'utf8'");

	mysqli_query($conexao, 'SET character_set_connection=utf8');

	mysqli_query($conexao, 'SET character_set_client=utf8');

	mysqli_query($conexao, 'SET character_set_results=utf8');
