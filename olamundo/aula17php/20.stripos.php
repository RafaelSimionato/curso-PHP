<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20 - stripos</title>
</head>
<body>
    <?php
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php");//Este i, representa ignore, ou seja, irá ignorar a caixa
        echo "$frase <br/> A string foi encontrada na posição $pos";
        //Com esta funcao, ela irá encontrar a palavra, independentemente do tipo da caixa (maiuscula ou minuscula)
    ?>
    
</body>
</html>