<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07 - rtrim</title>
</head>
<body>
    <?php
        //rtrim (rightttrim) é semelhante a funcao trim e ltrim, porém,
        //Enquanto trim elimina os espaços do inicio e do final, e ltrim elimina os espaços do inicio apenas
        //a funcao rtrim elimina os espaços do final apenas
        //Segue exemplo abaixo

        $nome = "   Jose da Silva   ";
        echo (strlen($nome)), "<br/>";
        $novo = rtrim($nome);
        echo ($novo), "<br/>";
        echo (strlen($novo));
    ?>    
</body>
</html>