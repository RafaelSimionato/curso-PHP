<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 - str_split</title>
</head>
<body>
    <?php
        //Enquanto a funcao explode, pega cada palavra e joga no indice
        //A funcao str_split vai pegar cada letra e jogar no indice
        $nome = "Maria";
        $vetor = str_split($nome);
        print_r($vetor);
    ?>
    
</body>
</html>