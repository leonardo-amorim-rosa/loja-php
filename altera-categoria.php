<?php require_once("cabecalho.php");
  require_once("categoria-dao.php");
  require_once("logica-usuario.php");

  verificaUsuario();

  $categoria = new Categoria;
  $categoria->id = $_POST["id"];
	$categoria->nome = $_POST["nome"];

  $dao = new CategoriaDAO($conexao);
?>

	<?php	if ($dao->alteraCategoria($categoria)) {	?>

		<p class="text-success">A Categoria <?= $categoria->nome ?> foi alterada com sucesso!!!</p>

	<?php } else { ?>

		<?php $msg = mysqli_error($conexao) ?>

		<p class="text-danger">A Categoria <?= $categoria->nome ?> não foi alterada!!! <?= $msg ?></p>

	<?php }	?>

<?php include("rodape.php") ?>
