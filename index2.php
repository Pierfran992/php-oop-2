<?php

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
        return "<div>" . "<h3>" . $this -> name . "</h3>" 
            . $this -> categoria -> getCategory()
            . "<span>Prezzo: " . $this -> prezzo . " €" . "</span>"
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

    public function __construct($name, Categoria $categoria, $date, $prezzo){
        $this->date = $date;
        // $this->name = $name;
        // $this->categoria = $categoria;
        parent::__construct($name, $categoria, $prezzo);
    }

    public function getTipologia(){
        return "<span>Data di scadenza: " . $this->date . "</span>";
    }

    public function getProdotto() {
        return "<div>" . "<h3>" . $this -> name . "</h3>" 
            . $this -> categoria -> getCategory()
            . $this -> getTipologia() . "<br>"
            . "<span>Prezzo: " . $this -> prezzo . " €" . "</span>" 
        . "</div>" . "<hr>"; 
    }
}

class Gioco extends Prodotto {
    
    public function __construct($name, Categoria $categoria, $prezzo){
        parent::__construct($name, $categoria, $prezzo);
    }
}

class Cuccia extends Prodotto {
    
    public function __construct($name, Categoria $categoria, $prezzo){
        parent::__construct($name, $categoria, $prezzo);
    }
}


// creo i vari elementi da stampare successivamente
// creo le categorie principali
$dog = new Categoria("Cane");
$cat = new Categoria("Gatto");

// Creo vari prodotti
$prodotti = 
[
    $cibi = 
        [
            new Cibo("Scatoletta per Cani con manzo e verdure", $dog,"10-10-2023", "5.00" ),
            new Cibo("Scatoletta per Gatti con manzo e verdure", $cat, "08-08-2023", "5.00"),
        ],
    $giochi = 
        [
            new Gioco("Pupazzo a forma d'osso", $dog, "11.00" ),
            new Gioco("Pupazzo a forma di topo", $cat, "15.00"),
        ],
    $cuccie = 
        [
            new Cuccia("Cuccia per cani di taglia media", $dog, "55.00" ),
            new Cuccia("Cuscino per gatti", $cat, "25.00"),
        ],
];

echo "<h1> Lista prodotti venduti </h1>";

// stampo i prodotti in pagina
foreach ($prodotti as $tipologie) {
    foreach ($tipologie as $tipo){
        echo $tipo -> getProdotto();
    }
}
