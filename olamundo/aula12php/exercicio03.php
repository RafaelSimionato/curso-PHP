<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - PHP</title>
</head>
<body>
    <div>
        <?php
        //Exemplo 01 - Usando laço do while
        /*
        $n = isset($_GET["tab"])?$_GET["tab"]:0;
        $count = 1;
        do {
            echo $n." x ".$count." = ".($n * $count)."</br>";
            $count ++;
        } while ($count <= 10);
        */
        //Exemplo 02 - Usando laço while
        /*
        $tabuada = $_GET["tab"];
        $count = 1;
        while ($count <= 10) {
            echo $tabuada . " x " . $count . " = " . ($tabuada * $count) . "<br/>";
            $count ++;
        }
        */
        //Exemplo 03 - Usando laço for
        $tabuada = $_GET["tab"];
        for($count = 1; $count <= 10; $count ++)
        echo $tabuada . " x " . $count . " = " . ($tabuada * $count) . "<br/>";
        ?>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>
</html>