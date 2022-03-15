<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 - array - chaves personalizadas</title>
</head>
<body>
    <div>
        <pre>
            <?php
                $v = array (3=>5,
                            1=>9,
                            0=>8,
                            7=>7);
                //Posso criar um indice novo a qualquer momento com algum valor dentro, segue ex abaixo
                $v[] = "R";//Colocando esses colchetes o PHP gerencia o vetor automaticamente
                //De modo semelhante, posso desalocar um indice a qualquer momento, conforme ex abaixo
                unset ($v[0]);//Neste ex estou desalocanto o indice zero do vetor v
                print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>