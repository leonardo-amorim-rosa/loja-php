<?php
  class Produto {
    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;
    public $usado;
    
    public function valorComDesconto($valor) {
    	$this->preco -= $this->preco * $valor;
    	return $this->preco;
    }
  }
 ?>
