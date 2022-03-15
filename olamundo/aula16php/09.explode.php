<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09 - Funcao explode</title>
</head>
<body>
    <?php
        //A funcao explode é uma versao mais nova da anterior str_word_count

        $site = "Curso em Video";
        $vetor = explode(" ", $site); //Este espaço é o caractere de separacao,
        //e do lado a string que sera explodida dentro do vetor ou array
        //No caso, sempre que o explode encontrar um espaço " " ele ira explodir e jogar dentro do array
        print_r($vetor);
    ?>
    
</body>
</html>