<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - PHP</title>
    <style>
        body {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>
    <div>
    <p>Verifique se um numero digitado pelo usuario é primo</p>
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:1;
            echo "Analisando o numero $n ... <br/>";
            $t = 0;
            echo "Valores múltiplos: ";
            for($c=1; $c <= $n; $c++) { //O numero primo, deve ser divisivel por 1 e por ele mesmo
                if($n%$c == 0) { //Se o nº inserido, dividido pelo contador der resto zero, escreva $c
                    echo "$c ";  //Determina quais são os valores múltiplos de $n
                    $t++; //Esta variavel conta o total de valores multiplos, ou seja, quantas vezes a conta deu resto zero
                }
            }
            echo "<br/>Total de múltiplos: $t<br/>";
            if ($t > 2) {
            echo "RESULTADO: $n <h2><span class='foco'>NÃO É PRIMO</h2></span><br/>";
            }
            if($t == 2) {
            echo "RESULTADO: $n  <h2><span class='foco'>É PRIMO</h2></span>";
            }
        ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>