<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 - chaves - ordenando por chaves em PHP </title>
</head>
<body>
    <div>
        <pre><!--Esta tag significa pre formatacao-->
            <?php
                //É possível ordenar por chaves, e ou keys, usando a função ksort()
                //Esta função vai se preocupar somente com os indices, ignorando os valores
                $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
                print_r($v);
                //Abaixo irei usar a função...
                ksort($v);
                print_r($v);
                //Também é possivel realizar uma Ordem reversa por chaves
                //Terá a mesma utilidade da anterior, porém, de modo reverso usando krsort()
                krsort($v);
                print_r($v);
            ?>
        </pre>
    </div>
    
</body>
</html>