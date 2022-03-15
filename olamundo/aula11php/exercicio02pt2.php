<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - PHP - parte 2</title>
</head>
<body>
    <div>
        <?php
        $i = 1; //Coloquei variavel $i de indice
        while ($i <= 5) {
            $v = "num" . $i; //$v recebe num e 1 ja que $i vale 1 na primeira passagem do laco while
            $url = "v" . $i;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0; //Como criei a variavel de variavel $$v ela automaticamente passa a valer num 1
            $i ++;
        }
        echo "$num1 $num2 $num3 $num4 $num5";
        //Essas sao as variaveis criadas dinamicamente pela variavel de variavel $$v e substitui o codigo abaixo
        /*
        $i = 1;
        while ($i <= 5) {
            $v = "num" . $i;
            echo "Valor $i : " . $$v . "<br/>";
            $i ++;
        }
        */
        /*E possivel modificar um laco while inserindo um break que fara sair da estrutura while atingindo seu final ou nao
        Usando o comando continue ele vai voltar ao inicio do while mesmo sem ter chego no final da contagem
        Usar estes comandos com bastante cautela... Muitos nao recomendam o uso dos mesmos */
        ?>
    </div>    
</body>
</html>