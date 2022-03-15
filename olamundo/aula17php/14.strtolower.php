<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14 - strtolower</title>
</head>
<body>
    <?php
        $nome = "RafAel SIMionaTo"; //Independente de quais maiusculas tiver as palavras, strtolower transforma em minusculas
        $nome2 = strtolower($nome);
        echo "Seu nome é $nome2";
    ?>
    
</body>
</html>