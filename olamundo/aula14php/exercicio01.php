<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - PHP - Função </title>
</head>
<body>
    <h2>Criar um procedimento que some dois valores numericos inteiros</h2>
    <?php
        //O PHP trata as rotinas sempre como uma funcao
        //Algumas funcoes retornam valores e outras nao, este primeiro exercicio nao retorna valor
        function soma ($a, $b) {
            //O PHP nao exige que informe o tipo da variavel
            //$a e $b sao simplesmente parametros que vao ser passados, da mesma maneira, nao preciso declarar $s
            //Por isso, posso escrever direto a soma
            $s = $a + $b;
            echo "<p>A soma entre $a e $b é $s</p>"; //Coloquei entre paragrafo para inserir mais exemplos de chamadas
        }
        //E importante que a chamada da funcao, seja exatamente igual o nome da funcao (maiusculas e minusculas, por exemplo)
        //Neste caso o nome, soma, conforme abaixo
        soma(3, 5);
        soma(18, 7);
        $x = 20;
        $y = 15;
        soma($x, $y);//Isso funcionou pois fiz outra chamada soma da funcao, agora com valores x e y
    ?>   
</body>
</html>