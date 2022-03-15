<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16 - ucfirst</title>
</head>
<body>
    <?php
        $nome = "renaTA ruFFAtto";
        $nome2 = ucfirst($nome);
        echo "Seu nome é $nome2 , <br/>";
        //Independente de como as demais letras vão estar...
        //ucfirst irá deixar a primeira letra em maiuscula. *uc = upper case + first

        //Também é possível colocar a primeira letra em maiuscula e colocar todas as outras em minusculas
        //Segue exemplo abaixo

        $nome3 = "raFAEL SIMIonato";
        $nome4 = ucfirst(strtolower($nome3));
        echo "Seu nome é $nome4";
    ?>
    
</body>
</html>