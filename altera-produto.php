<?php require_once("cabecalho.php");
  require_once("produto-dao.php");
  require_once("logica-usuario.php");

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

  $produtoDAO = new ProdutoDAO($conexao);
?>

	<?php	if ($produtoDAO->alteraProduto($produto)) {	?>

		<p class="text-success">O Produto <?= $produto->nome ?>, <?= $produto->getPreco() ?> foi alterado com sucesso!!!</p>

	<?php } else { ?>

		<?php $msg = mysqli_error($conexao) ?>

		<p class="text-danger">O Produto <?= $produto->nome ?> não foi alterado!!! <?= $msg ?></p>

	<?php }	?>

<?php include("rodape.php") ?>
