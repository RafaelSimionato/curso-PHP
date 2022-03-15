<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17 - ucwords</title>
</head>
<body>
    <?php
        //ucwords altera para maiuscula a primeira letra de cada palavra
        $nome = "renATA ruFFaTTo";
        $nome2 = ucwords($nome);
        print "Seu nome é $nome2";
    ?>
    
</body>
</html>