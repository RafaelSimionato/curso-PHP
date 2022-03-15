<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - PHP </title>
</head>
<body>
    <div>
        <h2>Script para calcular o fatorial de um numero inteiro</h2>
        <h3>Parar calcular fatorial devo multiplicar regressivamente os numeros, desde o escolhido, ate 1</h3>
        <h4>Ex: Fatorial de 5 e ou 5! == 5x4x3x2x1</h4>
    </div>
    <div>
        <?php
            $v = isset ($_GET["val"])?$_GET["val"]:1; //Poderia usar 0 ao inves do 1, basta retirar no HTML o value='1';
            //Posso usar somente $v = $_GET["val"];
            //Porem, usei o operador ternario para verificar se foi configurado corretamente
            echo "<h1>Calculando o fatorial de $v </h1>";
            //Para calcular o fatorial, é simples...
            $c = $v;//Começo o contador com o numero que digitei, neste caso $v.
            //Agora vou criar uma variavel de fatorial, conforme abaixo
            $fat = 1; //Comecei a variavel $fat (de fatorial) com 1 pois esta multiplicando
            do {
                //A cada passagem...
                $fat = $fat * $c;
                //A cada vez, vou tirar 1 da $c, do contrario entrara em looping infinito
                $c --;
            } while ($c >= 1);//Enquanto meu contador for maior ou igual a 0, e ou 1 se optar por inserir o value no HTML
            //E agora, basta mostrar meu fatorial, conforme abaixo
            echo "<h2>$v ! = $fat</h2> ";
        ?>
        <a href="exercicio02.html">Voltar</a>
    </div>    
</body>
</html>