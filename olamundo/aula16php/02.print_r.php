<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 printr</title>
</head>
<body>
    <?php
        //print_r serve basicamente para mostrar detalhes de uma variavel, principalmente se ela for um vetor
        //OBS: Vetores em PHP nao precisam de declaracao*
        $v[0] = 4; //Se lê: Variavel v no indice zero recebe quatro (indice e ou posicao, é a mesma coisa)
        $v[1] = 8;
        $v[2] = 3;
        //print_r ($v); *Deixei este print_r em comentario, para mostrar somente o de baixo
        //O print_r gera uma saida enquanto estou fazendo testes, é bastante útil em período de testes
        //Ex: Se eu tenho um vetor e quero mostrar ele durante meus testes, usarei o print_r

        //Existe outra maneira para criar vetores, segue abaixo:

        $v2 = array (3,7,6,2,1,9);
        print_r ($v2);
        //O simbolo => que aparecera na tela, significa associacao, ex: indice zero esta associado ao valor 3
        //Posso substituir o print_r por var_dump($v2) e também por var_export($v2)
        //Existem apenas pequenas diferenças entre elas
    ?>
</body>
</html>