<?php
  class Produto {
    public $id;
    public $nome;
    private $preco;
    public $descricao;
    public $categoria;
    public $usado;

    function __construct($id, $nome, $preco=0.0, $descricao, $categoria, $usado) {
      $this->id = $id;
      $this->nome = $nome;
      $this->preco = $preco;
      $this->descricao = $descricao;
      $this->categoria = $categoria;
      $this->usado = $usado;
    }

    function __tostring() {
      return "Produto: {$this->id} - {$this->nome}";
    }

    public function getPreco() {
      return $this->preco;
    }

    public function setPreco($preco) {
      if ($preco > 0) {
        $this->preco = $preco;
      }
    }

    public function valorComDesconto($valor) {
    	$this->preco -= $this->preco * $valor;
    	return $this->preco;
    }
  }
 ?>
