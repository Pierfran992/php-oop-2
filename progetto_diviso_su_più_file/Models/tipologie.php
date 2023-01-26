<?php
require_once("Models/categoria.php");
require_once("Models/prodotto.php");

// creo le classi per le tipologie
class Cibo extends Prodotto {
    private $date;

    public function __construct($name, Categoria $categoria, $date, $prezzo){
        parent::__construct($name, $categoria, $prezzo);
        $this->setDate($date);
    }

    
    public function setDate($date){
        $this->date = $date;
    }
    
    public function getDate(){
        return $this->date;
    }

    public function getTipologia(){
        return "<span>Data di scadenza: " . $this->getDate() . "</span>";
    }

    public function getProdotto() {
        return "<div class='card'>" . "<h3>" . parent :: getName() . "</h3>" 
            // . $this -> categoria -> getCategory()
            . $this -> getTipologia() . "<br>"
            . "<span>Prezzo: " . parent :: getPrezzo() . " €" . "</span>" 
        . "</div>"; 
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