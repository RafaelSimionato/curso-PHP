<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - array</title>
</head>
<body>
    <div>
        <pre><!--As tags <pre> deixam a visualização mais bonita e facilitada-->
            <?php    
                $n = array(3,5,8,2);
                //Posso inserir um item colocando o codigo abaixo
                $n[] = 7;
                //Deste modo foi criado um novo local no vetor, na posição 4 foi inserido o item 7
                print_r($n);
            ?>
        </pre>
    </div>
</body>
</html>