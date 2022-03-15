<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23 - str_pad</title>
</head>
<body>
    <?php
        $nome = "Simionato";
        $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
        //O espaço nao esta aparecendo na tela quando testei, mas qualquer outro caractere aparece... 
        //Ou seja, quero que minha string Simionato, caiba em 30 letras, e usarei os "espaços" para complementar a direita (STR_PAD_RIGHT)
        echo ("Este cabeludo de sobrenome $novo é lindo");
        //Também posso usar outras funcoes, como por exemplo:
        // STR_PAD_LEFT e o STR_PAD_CENTER que ira centralizar o nome e colocar espaços antes e depois
    ?>
    
</body>
</html>