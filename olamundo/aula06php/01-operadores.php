<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <div>
        <?php
            $preco = $_GET["p"];
            echo "O preco do produto e R$ " . number_format($preco, 2);
            //$preco = $preco + ($preco*10/100); Opcao 01
            $preco += $preco*10/100; //Opcao 02
            //Para dar desconto basta mudar o sinal, conforme abaixo
            //$preco -= $preco*10/100;
            echo "</br> E o novo preco com 10% de aumento sera R$ " . number_format($preco, 2, ",",".");
        ?>
    </div>
</body>
</html>