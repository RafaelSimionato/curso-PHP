<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - PHP</title>
</head>
<body>
    <h2>Mostrar uma contagem progressiva de 1 ate 10.</h2>
    <div>
        <?php
        //Repeticao com teste logico no inicio
        /*$c = 1;
        while ($c <= 10) {
            echo "$c <br/>";
            $c ++; //Ou $c = $c + 1; Ou ainda $c +=1;
            //Se esquecer o contador $c++ entramos no looping infinito
        }
        */
        //Contagem regressiva abaixo
        /*$c = 10;
        while ($c >= 1) {
            echo "$c <br/>";
            $c--;
        } */
        //Contagem regressiva contando de 2 em 2, abaixo
        $c = 10;
        while ($c >= 0) {
            echo "$c <br/>";
            $c -= 2; // Ou $c = $c - 2;
        }
        ?>
    </div>
</body>
</html>