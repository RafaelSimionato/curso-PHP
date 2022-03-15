<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 - trim</title>
</head>
<body>
    <?php
        //A funcao trim é muito útil principalmente por dados vindos de formulário
        $nome = "   Jose da Silva   ";
        echo (strlen($nome)),"<br/>";
        $novo = trim($nome);
        //trim ira retirar os espaços antes e depois dos caracteres, e manter somente os espaços entre as palavras
        echo ($novo), "<br/>";//Vai mostrar o nome, incluindo os espaços entre as palavras somente...
        echo (strlen($novo)); //Vai mostrar o total de caracteres, excluindo os espaços no inicio e no final
        
    ?>
    
</body>
</html>