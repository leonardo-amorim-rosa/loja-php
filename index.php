<?php include("cabecalho.php") ?>
				<h1>Bem Vindo!!!</h1>

<?php if (isset($_GET["login"]) && $_GET["login"] == 1) { ?>
	<p class="alert-success">Usuário logado com sucesso!</p>
<?php } else if (isset($_GET["login"]) && $_GET["login"] == 0) { ?>
	<p class="alert-danger">Usuário inválido!</p>
<?php } ?>

				<h2>Login</h2>
				<form action="login.php" method="post">
					<table class="table">
						<tr>
							<td>Email</td>
							<td><input class="form-control" type="email" name="email" ></td>
						</tr>
						<tr>
							<td>Senha</td>
							<td><input class="form-control" type="password" name="senha" ></td>
						</tr>
						<tr>
							<td><button class="btn btn-primary" >Login</button></td>
							<td></td>
						</tr>
					</table>
				</form>
<?php include("rodape.php") ?>
