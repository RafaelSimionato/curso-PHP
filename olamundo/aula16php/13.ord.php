<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13 - funcao ord</title>
</head>
<body>
    <?php
        //A funcao ord faz basicamente o contrario da funcao chr
        //Ex: eu tenho uma letra e quero mostrar o codigo dela

        $letra = "C";
        $cod = ord($letra);//A variavel cod neste caso vai receber o codigo da letra
        print ("A letra $letra tem codigo $cod");
    ?>
    
</body>
</html>