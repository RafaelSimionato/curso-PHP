<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - exibir </title>
</head>
<body>
    <div>
        <pre><!--Esta tag significa pre formatacao-->
            <?php
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                //Outra funcao que funciona da mesma maneira é a var_dump($n), segue ex abaixo
                var_dump($v);
                //esta funcao é mais completa, mostra o tipo de cada um, comprimento, quantos itens tem o vetor

                //Tambem tem outra maneira de mostrar quantos elementos tem dentro do vetor, segue abaixo
                $v = array("A", "J", "M", "X", "K");
                echo "O vetor tem " . count($v) . " elementos <br/> ";
                print_r($v);

                //Ou então...
                $v = array("A", "J", "M", "X", "K");
                $tot = count($v);
                echo "O vetor tem $tot elementos <br/>";
                print_r($v);


            ?>
        </pre>
    </div>
    
</body>
</html>