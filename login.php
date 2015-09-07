<?php include("conecta.php");
  include("banco-usuarios.php");
  include("logica-usuario.php");

  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $usuario = buscaUsuario($conexao, $email, $senha);

  if ($usuario != null) {
    $_SESSION["success"] = "Usuário logado com sucesso.";
    header("Location: index.php");
    logaUsuario($email);

  } else {
    $_SESSION["danger"] = "Usuário ou email inválido.";
    header("Location: index.php");

  }
  die();
