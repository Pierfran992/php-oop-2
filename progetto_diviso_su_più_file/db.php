<?php
require_once("Models/categoria.php");
require_once("Models/prodotto.php");
require_once("Models/tipologie.php");

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