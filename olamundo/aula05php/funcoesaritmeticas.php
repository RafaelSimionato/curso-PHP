<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes Aritmeticas</title>
    <style>
        h2 {
            font: 12pt Arial;
            color: #171559;
        }
    </style>
</head>
<body>
<div>
    <?php
        //legenda das funcoes matematicas
        //abs() Valor Absoluto, pow() Potenciacao
        //sqrt() Raiz Quadrada
        //round() Arredondamento
        //intval() Valor Inteiro da variavel
        //number_format() Formatacao
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 e " . abs($v2);
        //O módulo ou valor absoluto de um número corresponde à distância que esse número está da origem na reta numérica.
        echo "</br> O valor de $v1 <sup> $v2 </sup> e " . pow($v1, $v2);
        echo "</br> A raiz de $v1 e " . sqrt($v1);
        echo "</br> O valor de $v2 arredondado e " . round($v2);
        //E possivel usar ceil ou floor ao inves de round, sendo que ceil sempre arredonda pra cima e floor para baixo
        echo "</br> A parte inteira de $v2 e " . intval($v2);
        echo "</br> O valor de $v1 em moeda e R$ " . number_format($v1,2,",",".");
        //phpinfo(); Este comando mostra informacoes sobre o sistema e config como por ex variaveis pre definidas
    ?>
</div>    
</body>
</html>