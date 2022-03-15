<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencia</title>
</head>
<body>
    <div>
        <?php
        $a = 3;
        $b = &$a; //Quando colocamos & na frente da variavel, ex: $b = &$a; automaticamente criamos uma referencia de b para variavel a
        $b += 5;
        echo "A variavel a vale $a";
        echo "</br>A variavel b vale $b";
        ?>
    </div>
</body>
</html>