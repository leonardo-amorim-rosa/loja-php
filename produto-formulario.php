<?php 
	include("cabecalho.php"); 
	include("conecta.php");
	include("banco-categorias.php");
	
	$categorias = listaCategorias($conexao);
?>		

		<h1>Formulário de produto</h1>
		<form action="adiciona-produto.php" method="post">
			
			<table class="table">
					
				<tr>
					<td>Nome</td>
					<td><input class="form-control" type="text" name="nome" /></td>
				</tr>
				
				<tr>
					<td>Preço</td>
					<td><input class="form-control" type="number" name="preco" /></td>
				</tr>
				
				<tr>
					<td>Categoria</td>
					<td>
						<?php foreach ($categorias as $categoria): ?>
							<input type="radio" name="categoria_id" value="<?=$categoria['id']?>" /><?=$categoria['nome']?>
						<?php endforeach ?>	
					</td>
				</tr>
				
				<tr>
					<td>Descrição</td>
					<td><textarea class="form-control" name="descricao"></textarea></td>
				</tr>
				
				<tr>
					<td colspan="2"><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>	
				</tr>
				
			</table>
		</form>
		
<?php include("rodape.php") ?>
