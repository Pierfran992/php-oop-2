<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>

    <?php
    require_once("Models/categoria.php");
    require_once("Models/prodotto.php");
    require_once("Models/tipologie.php");
    require_once("./db.php");

    ?>
</head>
<body>
    <?php
    echo "<h1> Lista prodotti venduti </h1>";

    // stampo i prodotti in pagina
    foreach ($prodotti as $tipologie) {
        foreach ($tipologie as $tipo){
            echo $tipo -> getProdotto();
        }
    }
    ?>
</body>
</html>