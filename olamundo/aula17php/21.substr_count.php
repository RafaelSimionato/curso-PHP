<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21 - substr_count</title>
</head>
<body>
    <?php
        $frase = "Estou aprendendo PHP no Curso em Video de PHP";
        $cont = substr_count($frase, "PHP");
        print ("PHP encontrado $cont vezes");
    ?>
    
</body>
</html>