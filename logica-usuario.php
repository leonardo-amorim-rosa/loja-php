<?php
//usando session_id
session_start();

function usuarioLogado() {
  return $_SESSION["usuario_logado"];
  //return $_COOKIE["usuario_logado"];
}

function verificaUsuario() {
  if (!usuarioEstaLogado()) {
    $_SESSION["danger"] = "Você não tem acesso a essa página.";
    header("Location: index.php");
    die();
  }
}

function usuarioEstaLogado() {
  return isset($_SESSION["usuario_logado"]);
  //return isset($_COOKIE["usuario_logado"]);
}

function logaUsuario($email) {
  $_SESSION["usuario_logado"] = $email;
  //setcookie("usuario_logado", $email);
}

function logout() {
  //unset($_SESSION["usuario_logado"]);
  session_destroy();
  session_start(); //renova a sessão
}
