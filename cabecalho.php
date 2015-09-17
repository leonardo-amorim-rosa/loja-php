<?php
error_reporting("E_ALL ^ E_NOTICE");
require_once("utils.php");
require_once("mostra-alerta.php");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Minha Loja</title>
        <link href="<?=getPath()?>/css/bootstrap.css" rel="stylesheet" />
        <link href="<?=getPath()?>/css/loja.css" rel="stylesheet" />
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/loja-php/">Minha Loja</a>
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="<?=getPath()?>/produto-formulario.php">Adicionar Produto</a></li>
                        <li><a href="<?=getPath()?>/produto-lista.php">Produtos</a></li>
                        <li><a href="<?=getPath()?>/categoria-formulario.php">Adicionar Categoria</a></li>
                        <li><a href="<?=getPath()?>/categoria-lista.php">Categorias</a></li>
                        <li><a href="<?=getPath()?>/contato.php">Contato</a></li>
                    </ul>
                    <div>
                    </div>
                    </nav>

                    <div class="container">
                        <div class="principal">
