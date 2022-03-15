<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 PHP - Estrutura condicional</title>
</head>
<body>
    <h1>Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir</h1>
    <div>
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Voce nasceu em $a e tem $i anos </br>";
            if ($i <16) {
                $tipoVoto = "nao vota";
            } elseif (($i >= 16 && $i < 18) || ($i>65)) {
                $tipoVoto = "voto opcional";
            } else {
                $tipoVoto = "voto obrigatorio";
            }
            echo "Para essa idade, $tipoVoto";
        ?>
    </div>    
</body>
</html>