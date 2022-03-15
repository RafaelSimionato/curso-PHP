<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - PHP - Contador</title>
</head>
<body>
    <div>
        <h2>Mostrar uma contagem progressiva de 1 até 10, <br/>
        utilizando a estrutura de repeticao com teste logico no final </h2>
    </div>
    <div>
        <?php
        /*
        //Exemplo 01
        $c = 1;
        do {
            echo "$c "; //As aspas não são obrigatorias neste caso, usei apenas para por espaco depois da $c
            $c ++;
        } while ($c <= 10);
        */
        /*
        //Exemplo 02
        $c = 0;
        do {
            echo "$c ";
            $c += 2; //Esta contagem vai ate 20, contando de 2 em 2
        } while ($c <= 20);
        */
        //Exemplo 03 - Contagem regressiva
        $c = 10;
        do {
            echo "$c ";
            $c --; //Posso usar por ex: $c -= 2 para ir contando de 2 em 2.
        } while ($c >= 0);
        ?>
    </div>
</body>
</html>