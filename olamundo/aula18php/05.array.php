<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 - array - chaves associativas</title>
</head>
<body>
    <div>
        <pre>
            <?php
                //As variaveis compostas do PHP não sao homogeneas, ou seja, podem ter tipos diferentes, segue ex
                $v = array ("nome" => "Ana",
                            "idade" => 23,
                            "peso" => 65.5);
                //Semelhante ao ex 04, posso inserir dados no array, conforme ex abaixo
                $v["fuma"] = true;
                print_r($v);
            ?>
        </pre>
    </div>
    
</body>
</html>