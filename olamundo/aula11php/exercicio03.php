<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - PHP</title>
</head>
<body>
    <div>
        <?php
            $inicial = $_GET['inicio'];
            $fim = $_GET['final'];
            $acrescimo = $_GET['incremento'];
            echo "Os numeros são : ";
            if ($inicial <= $fim) {
            while ($inicial <= $fim) {
             echo "<br>" . $inicial;
             $inicial += $acrescimo;             
            }
            }
            elseif ($inicial > $fim) {
             while( $inicial > $fim) {
              echo "<br>" . $inicial;
              $inicial -= $acrescimo;
             }
            }
        ?>
        <br/>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>
</html>