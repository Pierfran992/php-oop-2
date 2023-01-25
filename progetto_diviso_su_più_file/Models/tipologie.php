<?php
require_once("Models/categoria.php");
require_once("Models/prodotto.php");

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