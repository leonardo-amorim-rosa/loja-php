<?php include("conecta.php");
  include("banco-usuarios.php");
  include("logica-usuario.php");

  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $usuario = buscaUsuario($conexao, $email, $senha);

  if ($usuario != null) {
    header("Location: index.php?login=1");
    logaUsuario($email);

  } else {
    header("Location: index.php?login=0");

  }
  die();
