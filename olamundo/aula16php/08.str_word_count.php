<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08 - str_word_count</title>
</head>
<body>
    <?php
        //Esta funcao entrega a quantidade de palavras que estao dentro da string
        $frase = "Eu vou estudar PHP agora";
        $cont = str_word_count($frase, 0);//Este valor zero, simplesmente é usado para contar as palavras
        echo $cont, "<br/>";

        //Alem do valor zero, podemos usar os valores um e dois
        //Enquanto o zero conta as palavras, o valor um gera um vetor, conforme exemplo abaixo:

        $cont = str_word_count($frase, 1);    
        print_r($cont);

        //Já, usando o valor dois, ele também irá gerar um vetor, porém, um pouco diferente,
        //Ele mantem o posicionamento de cada palavra dentro da string
        //Segue exemplo abaixo:

        $cont = str_word_count($frase, 2);
        print_r($cont);
    ?>
    
</body>
</html>