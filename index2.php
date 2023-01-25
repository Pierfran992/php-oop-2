<?php

// creo la classe prodotti 
class Prodotto {
    protected $name;
    protected Categoria $categoria;

    public function __construct( $name, Categoria $categoria,){
        $this->name = $name;
        $this->categoria = $categoria;
    }

    public function getProdotto() {
        return "<div>" . "<h3>" . $this -> name . "</h3>" 
            . $this -> categoria -> getCategory() 
        . "</div>" . "<hr>"; 
    }

}

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

// creo le classi per le tipologie
class Cibo extends Prodotto {
    private $date;

    public function __construct( Prodotto $name, Prodotto $categoria, $date){
        $this->date = $date;
        $this->name = $name;
        $this -> categoria = $categoria;
    }

    public function getTipologia(){
        return "<span>Tipologia: " . $this->date . "</span>";
    }

    public function getProdotto() {
        return "<div>" . "<h3>" . Prodotto :: $name . "</h3>" 
            . Prodotto :: $categoria -> getCategory()
            . $this -> getTipologia() 
        . "</div>" . "<hr>"; 
    }
}


// creo i vari elementi da stampare successivamente
// creo le categorie principali
$dog = new Categoria("Cane");
$cat = new Categoria("Gatto");

// Creo vari prodotti
$cibi = 
[
    new Cibo("Scatoletta per Cani con manzo e verdure", $dog,"10-10-2023" ),
    new Cibo("Scatoletta per Gatti con manzo e verdure", $cat, "08-08-2023"),
];


echo "<h1> Lista prodotti venduti </h1>";

// stampo i prodotti in pagina
foreach($prodotti as $prodotto){
    echo $prodotto -> getProdotto();
}

