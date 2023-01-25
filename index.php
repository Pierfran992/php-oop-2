<?php

// creo la classe prodotti 
class Prodotto {

    private $categoria;
    private $tipologia;

    public function __construct($categoria, $tipologia){
        $this->categoria = $categoria;
        $this->tipologia = $tipologia;
    }

    public function getProdotto() {

    }

}

// creo la classe Categoria
class Categoria extends Prodotto {

    private $categoria;

    public function __construct($categoria){
        $this->categoria = $categoria;
    }
}

// creo la classe Tipologia
class Tipologia extends Prodotto {
    private $tipologia;

    public function __construct($tipologia){
        $this->tipologia = $tipologia;
    }
}