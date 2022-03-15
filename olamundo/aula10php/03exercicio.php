<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Condicoes PHP</title>
</head>
<body>
    <div>
        <?php
        $brasil = isset($_GET["estados"])?$_GET["estados"]:0;
        switch($brasil) {
            case 1:
                echo "Voce mora na Regiao Norte";
                break;
            case 2:
                echo "Voce mora na Regiao Nordeste";
                break;
            case 3:
                echo "Voce mora na Regiao Centro Oeste";
                break;
            case 4:
                echo "Voce mora na Regiao Sudeste";
                break;
            case 5:
                echo "Você mora na Regiao Sul";
        }        
        ?>
        <a href="03exercicio.html">Voltar</a>
    </div>
</body>
</html>