<?php
require_once("Models/categoria.php");
require_once("Models/tipologie.php");

// creo la classe prodotti 
class Prodotto {
    private $name;
    private Categoria $categoria;
    private $prezzo;

    public function __construct( $name, Categoria $categoria, $prezzo){
        $this->setName($name);
        $this->setCategoria($categoria);
        $this->setPrezzo($prezzo);
    }

    public function setName($name){
        $this -> name = $name;
    }
    public function getName(){
        return $this -> name;
    }

    public function setCategoria($categoria){
        $this -> categoria = $categoria;
    }
    public function getCategoria(){
        return $this -> categoria;
    }

    public function setPrezzo($prezzo){
        $this -> prezzo = $prezzo;
    }
    public function getPrezzo(){
        return $this -> prezzo;
    }    
    
    public function getProdotto() {
        return "<div class='card'>" . "<h3>" . $this -> getName() . "</h3>" 
            . $this -> categoria -> getCategory()
            . "<span>Prezzo: " . $this -> getPrezzo() . " €" . "</span>"
        . "</div>"; 
    }

}