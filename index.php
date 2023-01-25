<?php

// creo la classe prodotti 
class Prodotto {
    private $name;
    private Categoria $categoria;
    private Tipologia $tipologia;

    public function __construct( $name, Categoria $categoria, Tipologia $tipologia){
        $this->name = $name;
        $this->categoria = $categoria;
        $this->tipologia = $tipologia;
    }

    public function getProdotto() {
        return "<div>" . "<h1>" . $this -> name . "</h1>" 
            . $this -> categoria -> getCategory()
            . $this -> tipologia -> getTipologia()
        . "</div>"; 
    }

}

// creo la classe Categoria
class Categoria extends Prodotto {

    private $categoria;

    public function __construct($categoria){
        $this->categoria = $categoria;
    }

    public function getCategory(){
        return "<span>" . $this->categoria . "</span>" . "<br>";
    }
}

// creo la classe Tipologia
class Tipologia extends Prodotto {
    private $tipologia;

    public function __construct($tipologia){
        $this->tipologia = $tipologia;
    }

    public function getTipologia(){
        return "<span>" . $this->tipologia . "</span>";
    }
}


// creo i vari elementi da stampare successivamente
// creo le categorie principali
$dog = new Categoria("Cane");
$cat = new Categoria("Gatto");

