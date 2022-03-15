<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 - ltrim</title>
</head>
<body>
    <?php
        //ltrim (lefttrim) é semelhante a funcao trim, porém,
        //Enquanto trim elimina os espaços do inicio e do final,
        //a funcao ltrim elimina os espaços do inicio apenas
        //Segue exemplo abaixo

        $nome = "   Jose da Silva   ";
        echo (strlen($nome)), "<br/>";
        $novo = ltrim($nome);
        echo ($novo), "<br/>";
        echo (strlen($novo));
    ?>
    
</body>
</html>