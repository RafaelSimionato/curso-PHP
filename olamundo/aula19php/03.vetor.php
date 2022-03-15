<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - vetor </title>
</head>
<body>
    <div>
        <pre><!--Esta tag significa pre formatacao-->
            <?php
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                array_unshift($v, "O");//Adicionou 1 elemento no inicio do vetor
                print_r($v);
                //Também é possível retirar 1 elemento do inicio do vetor, conforme segue abaixo
                array_shift($v);
                print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>