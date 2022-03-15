<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 - ordem </title>
</head>
<body>
    <div>
        <pre><!--Esta tag significa pre formatacao-->
            <?php
                //Esta funcao sort() serve para ordenar, tanto letras, quanto numeros em PHP
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                sort($v);
                print_r($v);
                //Para ordenar em ordem reversa, basta usar rsort(), este r é de reverse
                rsort($v);
                print_r($v);
                /*Tambem é possivel fazer uma ordenação Associativa
                ou seja, além de ordenar os valores, esta função também vai mudar os índices
                Porém, é importante saber que...
                somente os valores ficarão em ordem, os indices apenas vão migrar juntamente com os valores*/
                asort($v);
                print_r($v);
                /*Também é possível criar uma Ordem associativa reversa usando arsort()
                Ela irá funcionar da mesma maneira que a anterior, porém, de modo reverso*/
                arsort($v);
                print_r($v);

            ?>
        </pre>
    </div>
    
</body>
</html>