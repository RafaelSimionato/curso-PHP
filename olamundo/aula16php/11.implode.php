<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 - implode</title>
</head>
<body>
    <?php
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Video";
        $texto = implode("#", $vetor);
        print ($texto); //Nao precisa ser mais o print_r porque ele nao é mais um vetor
        //Se quiser usar espaços ao inves das #, basta alterar sem problemas
        //Também posso usar a funcao join() ao invés de implode. Irá funcionar exatamente igual
    ?>    
</body>
</html>