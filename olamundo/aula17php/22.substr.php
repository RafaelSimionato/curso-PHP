<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22 - substr</title>
</head>
<body>
    <?php
        $site = "Caveira Hippie";
        $sub = substr($site, 0, 5);//Esta funcao sub string começa a contar do zero e vai até 5
        //É um fatiamento da string que esta na variavel site
        echo "$sub , <br/>";
        //Espaços não sao considerados letras
        //Também posso usar numeros negativos, que no caso, vão contar de trás para frente a string
        //EX: Se eu escrevesse substr($site, -5, 2), eu ia considerar as ultimas 5 letras, porém, pegar apenas 2 delas
        //Posso usar também apenas um numero, conforme abaixo

        $site2 = "Caveira Hippie";
        $sub2 = substr($site2, 7);
        echo "$sub2";
        
    ?>
    
</body>
</html>