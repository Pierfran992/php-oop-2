<?php
require_once("Models/prodotto.php");
require_once("Models/tipologie.php");

// creo la classe Categoria
class Categoria {

    private $categoria;

    public function __construct($categoria){
        $this->categoria = $categoria;
    }

    public function getCategory(){
        return "<span>Categoria: " . $this->categoria . "</span>" . "<br>";
    }
}