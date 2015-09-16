<?php
		require_once("conecta.php");
		require_once("class/produto.php");
		require_once("class/categoria.php");

		function cadastraProduto($conexao, Produto $produto) {
			$nome = mysqli_real_escape_string($conexao, $produto->nome);
			$descricao = mysqli_real_escape_string($conexao, $produto->descricao);
			$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$produto->nome}', {$produto->getPreco()}, '{$produto->descricao}', {$produto->categoria->id}, {$produto->usado})";
			return mysqli_query($conexao, $query);
		}

		function listaProdutos($conexao) {
			$produtos = array();
			$resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id order by p.id");
			while($produto_atual = mysqli_fetch_assoc($resultado)) {
				$produto = new Produto;
				$categoria = new Categoria;
				$categoria->nome = $produto_atual['categoria_nome'];
				$produto->categoria = $categoria;
				$produto->id = $produto_atual['id'];
				$produto->nome = $produto_atual['nome'];
				$produto->setPreco($produto_atual['preco']);
				$produto->descricao = $produto_atual['descricao'];
				$produto->usado = $produto_atual['usado'];
				array_push($produtos, $produto);
			}
			return $produtos;
		}

		function removeProduto($conexao, $id) {
			$query = "delete from produtos where id = {$id}";
			mysqli_query($conexao, $query);
		}

		function buscarProdutoPorId($conexao, $id) {
			$query = "select * from produtos where id = {$id}";
			$resultado = mysqli_query($conexao, $query);
			return mysqli_fetch_assoc($resultado);
		}

		function alteraProduto($conexao, $produto) {
			$nome = mysqli_real_escape_string($conexao, $produto->nome);
			$descricao = mysqli_real_escape_string($conexao, $produto->descricao);
			$query = "update produtos set nome='{$produto->nome}', preco={$produto->getPreco()}, descricao='{$produto->descricao}', categoria_id={$produto->categoria->id}, usado={$produto->usado} where id={$produto->id}";
			return mysqli_query($conexao, $query);
		}
