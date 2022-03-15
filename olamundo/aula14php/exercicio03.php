<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Rotinas com parâmetros dinâmicos - PHP</title>
</head>
<body>
    <p>Realizar uma soma com multiplos parâmetros</p>
    <?php
        function soma() {
            //O parametro é a variável que irá receber um valor em uma função (ou método)
            //Enquanto que um argumento é o valor (que pode originar de uma variável ou expressão) que você passa para a função (ou método)
            //Você não passa parâmetros, você passa argumentos. Você recebe argumentos também, mas recebe em parâmetros
            //Você parametriza sua função com informações que virão posteriormente
            //Você argumenta com o que deseja executar uma função devidamente parametrizada
            $p = func_get_args();//Esta função basicamente pega todos os argumentos e coloca dentro de um vetor chamado $p
            $t = func_num_args(); //Esta função retorna o número de argumentos que foram passados, neste caso, para dentro da variavel $t
            //Esta variavel $t e a quantidade total de parametros
            $s = 0; //Esta variavel zero, é a soma dos valores
            for ($i = 0; $i < $t; $i++) {
                $s = $s + $p[$i];//Aqui, acumulo s com $s recebendo ela mesma + $p de indice $i
                //Posso substituir o $s acima, por $s += $p[$i];
            }  //$p é a variavel composta e ou (vetor) e o indice $i vai de 0 a 4 totalizando o somatorio de todos os valores dentro dos parametros
            return $s;
        }
        $r = soma(3,5,2, 20, 100);//Posso colocar quantos valores eu quiser, que a função irá somar todos
        echo "A soma dos valores é $r";
    ?>
</body>
</html>