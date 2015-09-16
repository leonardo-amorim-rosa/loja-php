<?php
  require_once("conecta.php");
  require_once("class/categoria.php");

  class CategoriaDAO {

    private $conexao;

    function __construct($conexao) {
      $this->conexao = $conexao;
    }

    public function cadastraCategoria(Categoria $categoria) {
        $nome = mysqli_real_escape_string($this->conexao, $categoria->nome);
        $query = "insert into categorias (nome) values ('{$categoria->nome}')";
        return mysqli_query($this->conexao, $query);
    }

    public function removeCategoria($id) {
      $query = "delete from categorias where id = {$id}";
      return mysqli_query($this->conexao, $query);
    }

    public function alteraCategoria(Categoria $categoria) {
        $nome = mysqli_real_escape_string($this->conexao, $categoria->nome);
        $query = "update categorias set nome='{$categoria->nome}' where id={$categoria->id}";
        return mysqli_query($this->conexao, $query);
    }

    public function buscarCategoriaPorId($id) {
        $query = "select * from categorias where id = {$id}";
        $resultado = mysqli_query($this->conexao, $query);
        $categoria_atual = mysqli_fetch_assoc($resultado);
        $categoria = new Categoria;
        $categoria->id = $categoria_atual['id'];
        $categoria->nome = $categoria_atual['nome'];
        return $categoria;
    }

    public function listaCategorias() {
      $categorias = array();
      $query = "select * from categorias";

      $resultado = mysqli_query($this->conexao, $query);
      while ($categoria_atual = mysqli_fetch_assoc($resultado)) {
        $categoria = new Categoria;
        $categoria->id = $categoria_atual["id"];
        $categoria->nome = $categoria_atual["nome"];
        array_push($categorias, $categoria);
      }

      return $categorias;
    }
  }
