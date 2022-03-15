<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07 - matrizes</title>
</head>
<body>
    <div>
        <pre>
            <?php
                //Tecnicamente não existem matrizes em PHP
                //Posso usar variaveis compostas multi-dimensionais, mas serão vetores dentro de vetores, e ou, vetor de vetor
                //Abaixo farei uma matriz simples que é um array com 3 posicoes como exemplo
                /*$m = array (3,
                            4,
                            5);
                print_r($m);*/
                //Agora farei o vetor dentro de vetor, segue abaixo
                $m = array ( array(6,4),
                            array(4,9),
                            array(3,2));
                //A qualquer momento posso alterar um valor, conforme abaixo
                $m [0][1] = $m [2][0];/*Se lê: 
                variavel m na linha zero e posição 1, (no caso é o 4) quero que receba o 3, que no caso é
                que é a variavel m na linha 2 e coluna zero*/
                //Basicamente essa alteração fara a primeira linha (6,4) passar a ser (6,3)
                print_r($m);

            ?>
        </pre>
    </div>
    
</body>
</html>