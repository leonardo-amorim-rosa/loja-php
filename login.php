<?php include("conecta.php");
  include("banco-usuarios.php");

  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $usuario = buscaUsuario($conexao, $email, $senha);

  if ($usuario != null) {
    header("Location: index.php?login=1");
    setcookie("usuario_logado", $email, time() + 60);

  } else {
    header("Location: index.php?login=0");

  }
  die();
