<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacoes Aritmeticas</title>
</head>
<body>
<div>
    <?php
        //$n1 = 3;
        //$n2 = 2;
        $n1 = $_GET["a"];//Este "a" é um parametro e nao uma variavel
        $n2 = $_GET["b"];//idem acima
        echo "<h2>Valores recebidos: $n1 e $n2<h2/>";
        //http://olamundo/aula05php/operadores.php?a=5&b=2
        //Esta é a url onde os valores foram inseridos a partir do sinal ?
        $m = ($n1 + $n2) / 2;
        echo "A soma vale " . ($n1 + $n2);
        echo "<br/> A subtracao vale " . ($n1 - $n2);
        echo "<br/> A multiplicacao vale " . ($n1 * $n2);
        echo "<br/> A divisao vale " . ($n1 / $n2);
        echo "<br> O modulo vale " . ($n1 % $n2); //O modulo é o resto da operacao de divisao
        echo "<br/> A media vale $m"; //Quando já está dentro da variavel, não é necessario concatenar
    ?>
</div>
    
</body>
</html>