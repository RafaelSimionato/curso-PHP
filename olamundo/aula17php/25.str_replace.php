<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25 - str_replace</title>
</head>
<body>
    <?php
        $frase = "Gosto de estudar Matematica";
        $novaFrase = str_replace("Matematica", "PHP" , $frase);
        print ("$novaFrase");
        //Caso escreva com alguma letra diferente, por exemplo, matematica com M minusculo, não vai funcionar,
        //Porem, posso utilizar o i (vide ex 20) que significa ignore, ou seja, vai ignorar as caixas das palavras
        //EX: str_ireplace
    ?>
    
</body>
</html>