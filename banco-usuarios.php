<?php
  function buscaUsuario($conexao, $email, $senha) {
    $senhaMD5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $senha = mysqli_real_escape_string($conexao, $senha);
    $query = "select * from usuarios where email='{$email}' and senha='{$senhaMD5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
  }
