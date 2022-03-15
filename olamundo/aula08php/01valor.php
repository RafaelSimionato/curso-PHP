<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - Formularios PHP</title>
</head>
<body>
    <div>
        <?php
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            //echo "O valor enviado foi $valor"; TESTE01
            //echo "A raiz quadrada de $valor e igual a $rq"; TESTE02
            //Para formatar os numeros para nao ficar varios após a virgula, fazer conforme abaixo
            echo "A raiz quadrada de $valor e igual a " . number_format($rq, 2);
        ?>
        <a href="01exercicio.html">Voltar</a>
    </div>
</body>
</html>