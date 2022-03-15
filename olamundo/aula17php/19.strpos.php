<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19 - strpos</title>
</head>
<body>
    <?php
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "$frase <br/> A string foi encontrada na posição $pos";
        //Esta funcao encontra a string que estou procurando (neste caso a string PHP na variavel frase) e mostra o seu local (local do primeiro P)
        //Lembrando que a contagem começa sempre em zero, e maiusculas e minusculas fazem diferença na procura
        // A proxima funcao (20) facilita esta procura ainda mais...
    ?>
    
</body>
</html>