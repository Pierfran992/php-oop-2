<?php
require_once("Models/categoria.php");
require_once("Models/tipologie.php");

// creo la classe prodotti 
class Prodotto {
    protected $name;
    protected Categoria $categoria;
    protected $prezzo;

    public function __construct( $name, Categoria $categoria, $prezzo){
        $this->name = $name;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
    }

    public function getProdotto() {
        return "<div class='card'>" . "<h3>" . $this -> name . "</h3>" 
            . $this -> categoria -> getCategory()
            . "<span>Prezzo: " . $this -> prezzo . " €" . "</span>"
        . "</div>"; 
    }

}