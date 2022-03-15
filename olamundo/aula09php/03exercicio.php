<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio livre</title>
    <style>
        body {
            background-color: black;
            color: whitesmoke;
        }
        a {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div>
        <?php
        $n1 = $_GET["num1"];
        $n2 = $_GET["num2"];
        $m = ($n1 + $n2) / 2;
        echo "A media entre $n1 e $n2 e de $m <br/>";
        if ($m <5) {
            echo "Situacao do aluno: REPROVADO";
        } else if (($m >= 5) && ($m < 7)) {
            echo "Situacao do aluno: RECUPERACAO";
        } else {
            echo "Situacao do aluno: APROVADO";
        }
        ?>
    </div>
    <a href="03exercicio.html">Voltar</a>    
</body>
</html>