<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - vetor </title>
</head>
<body>
    <div>
        <pre><!--Esta tag significa pre formatacao-->
            <?php
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                //Para colocar mais um item, após o "K" por exemplo, basta escrever...
                $v[] = "O";
                print_r($v);

                //Existe funcoes especificas para tratamento de dados no PHP...
                //Para adicionar um elemento no final do vetor, posso usar a função abaixo
                array_push($v, "R");
                print_r($v);

                //Para eliminar o último elemento do vetor, utilizo a função abaixo
                array_pop($v); //Esta funcao é praticamente igual a unset
                print_r($v);

                /*Estas 2 funções acima são específicas para tratamento de pilhas, ou seja
                nas pilhas você insere ou retira elementos somente do final da mesma*/

                //Este mecanismo é conhecido no meio academico como LIFO
                //*Last in first out

                

            ?>
        </pre>
    </div>
    
</body>
</html>