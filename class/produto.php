<?php
  class Produto {
    public $id;
    public $nome;
    private $preco;
    public $descricao;
    public $categoria;
    public $usado;

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
