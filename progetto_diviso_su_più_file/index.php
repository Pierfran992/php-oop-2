<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>

    <!-- regole css -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            background-color: blue;
            color: #fff;
            width: 800px;
            height: 400px;
            margin: 100px auto;
            padding: 20px;
            text-align: center;
            overflow-y: auto;
        }

        h1 {
            margin-bottom: 40px;
        }

        .ctn_card {
            display: flex;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .card {
            width: calc((100% - 80px) / 4);
            height: fit-content;
            text-align: left;
        }
    </style>

    <!-- php -->
    <?php
    require_once("Models/categoria.php");
    require_once("Models/prodotto.php");
    require_once("Models/tipologie.php");
    require_once("./db.php");

    ?>
</head>
<body>
    <div class="container">
        <h1>Lista prodotti venduti</h1>

        <div class="ctn_card">
            <?php
                // stampo i prodotti in pagina
                foreach ($prodotti as $tipologie) {
                    foreach ($tipologie as $tipo){
                        echo $tipo -> getProdotto();
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>