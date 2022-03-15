<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 Exercicio - PHP</title>
</head>
<body>
    <h2>Criar um procedimento que use a passagem de parâmetros por referência</h2>
    <?php
        function teste (&$x) {
            /*Utilizando o E comercial (&), o valor de a é passado como referência para a variavel x, 
            ou seja, qualquer alteração em x, vai alterar a*/
            $x += 2; //Ou $x = $x + 2;
            echo "<p>O valor de x é $x</p>";
        }
        $a = 3;
        teste($a);
        echo "<p>O valor de a é $a</p>";
        //EX: Se eu nao tivesse colocado o &, o valor teria continuado como 3
    ?>
</body>
</html>