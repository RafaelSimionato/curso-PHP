<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - PHP - Função </title>
</head>
<body>
    <h2>Criar uma função que some dois valores numericos inteiros</h2>
    <?php
        //O PHP trata as rotinas sempre como uma funcao
        //Algumas funcoes retornam valores e outras nao, este segundo exercicio retorna valor
        /*function soma ($a, $b) {
            $s = $a + $b;//Não necessariamente preciso criar esta variavel $s, posso fazer igual exemplo abaixo
            return $s;
        }
        $x = -4;
        $y = 8;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r";*/
        function soma ($a, $b) {
            return $a + $b;//Não necessariamente eu tenho que criar uma variavel pra fazer a conta
        } //Posso retornar diretamente uma expressão
        $x = 3;
        $y = 8;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r";
    ?>
</body>
</html>