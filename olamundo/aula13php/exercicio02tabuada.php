<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - PHP - FOR - tabuada</title>
</head>
<body>
    <div>
        <?php
        $n = isset($_GET["num"])?$_GET["num"]:1; //Se o isset foi configurado, jogo ele (num) na variável n, senão, faço a tabuada de 1 como padrao
        for ($c = 1; $c <= 10; $c++) {
            $r = $n * $c; //Variável resultado (r) recebe (n) que é o numero que o usuário escolheu, vezes (c) que é o contador
            echo "$n x $c = $r <br/>";
        }
        ?>
        <!--<a href="exercicio02.php">Voltar</a>-->
        <br/><a href="javascript:history.go(-1)">Voltar</a> <!--Estou usando o Voltar em JavaScript porque acho mais massa, mas poderia ter usado o exemplo que coloquei logo em cima-->
    </div>
</body>
</html>