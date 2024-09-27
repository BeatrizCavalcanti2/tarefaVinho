<?php

class Vinho{
    private $nome;
    private $tipo;
    private $preco;
    private $safra;

    public function __construct($nome, $tipo, $preco, $safra){
        $this->nome=$nome;
        $this->tipo=$tipo;
        $this->preco=$preco;
        $this->safra=$safra;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function setTipo($tipo){
        $this->tipo=$tipo;
    }

    public function setPreco($preco){
        $this->preco=$preco;
    }

   public function setSafra($safra){
    $this->safra=$safra;
   } 

   public function getNome(){
    return $this->nome;
   }

   public function getTipo(){
    return $this->tipo;
   }

   public function getPreco(){
    return $this->preco;
   }

   public function getSafra(){
    return $this->safra;
   }

    public function mostrarVinho(){
    return "Nome:{$this->nome}</br> Tipo:{$this->tipo}</br>  Preço:{$this->preco}</br> Safra:{$this->safra}";
   }

   public function verificarPreco($preco){
   return $this->preco<25;
}

}
?>
