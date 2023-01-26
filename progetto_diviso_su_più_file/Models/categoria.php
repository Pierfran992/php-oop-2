<?php
require_once("Models/prodotto.php");
require_once("Models/tipologie.php");

// creo la classe Categoria
class Categoria {

    private $categoria;

    public function __construct($categoria){
        $this->setCategoria($categoria);
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getCategory(){
        return "<span>Categoria: " . $this->getCategoria() . "</span>" . "<br>";
    }
}