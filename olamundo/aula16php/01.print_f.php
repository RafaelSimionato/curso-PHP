<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - printf</title>
</head>
<body>
    <?php
        $p = "Leite";
        $pr = 4.5;
        echo "<p>O $p custa R$ $pr</p>";
        //Ou então, formatar do jeito antigo
        echo "O $p custa R$ " .number_format($pr, 2);
        //Ou da maneira com prinf
        printf ("<p>O %s custa R$ %.2f</p>", $p, $pr);
        //%s é referente a string $p , e o %.2f é referente ao numero real $pr, ou (float) formatado com 2 casas decimais
        
        /* %d usado para valor decimal (positivo ou negativo) , %u valor decimal sem sinal (apenas positivos)
        %f valor real , %s para string */
    ?>
</body>
</html>