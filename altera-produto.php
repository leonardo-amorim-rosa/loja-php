<?php require_once("cabecalho.php");
  require_once("banco-produtos.php");
  require_once("logica-usuario.php");
  require_once("class/produto.php");
  require_once("class/categoria.php");

  verificaUsuario();

  $produto = new Produto;
  $categoria = new Categoria;
  $categoria->id = $_POST["categoria_id"];
  $produto->id = $_POST["id"];
	$produto->nome = $_POST["nome"];
	$produto->setPreco($_POST["preco"]);
	$produto->descricao = $_POST["descricao"];
	$produto->categoria = $categoria;
	if (isset($_POST["usado"]) && $_POST["usado"] == true) {
		$usado = "true";
	} else {
		$usado = "false";
	}
  $produto->usado = $usado;
?>

	<?php	if (alteraProduto($conexao, $produto)) {	?>

		<p class="text-success">O Produto <?= $produto->nome ?>, <?= $produto->preco ?> foi alterado com sucesso!!!</p>

	<?php } else { ?>

		<?php $msg = mysqli_error($conexao) ?>

		<p class="text-danger">O Produto <?= $produto->nome ?> não foi alterado!!! <?= $msg ?></p>

	<?php }	?>

<?php include("rodape.php") ?>
