<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - array - foreach</title>
</head>
<body>
    <div>
        <pre>
            <table border="1"><tr>
                <?php
                    $c = range(5,20,2);
                    foreach ($c as $v) {
                    //Se lê: - Para cada elemento de c tratado como valor
                    /*Ou seja, para cada elemento do vetor c, tratado como v, e ou, para cada repetição
                    ele vai colocar um elemento do vetor c dentro de valor*/
                        echo "<td>$v ";
                    }
                ?>
            </table>
        </pre>
        <!--Para mostrar o codigo como um vetor na tela, e ou, mostrar o vetor em forma de tabela,
            inseri a tag <td> além do table tr com borda igual a 1-->
    </div>
    
</body>
</html>