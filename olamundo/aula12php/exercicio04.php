<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04 - PHP - Livre</title>
</head>
<body>
    <div>
        <?php
        /*
        //O comando abaixo mostra na tela informacoes de instalacao do PHP na maquina

        phpinfo()

        */
        /*
        //$_SERVER é uma variável especial reservada do PHP que contém todas as informações sobre o servidor web
        //Ela é conhecida como uma superglobal
        //Verifica qual é o tipo de navegador que o visitante está utilizando para ver a pagina

        echo $_SERVER['HTTP_USER_AGENT'];

        */
        /*

        //Outro conceito é a chamada à função strpos()
        //A função strpos() vem junto com o PHP e busca uma palavra em outra palavra
        //Neste caso é procurado pelo texto 'MSIE' dentro de $_SERVER['HTTP_USER_AGENT']
        //Se a palavra for encontrada, a função retorna a posição do texto pesquisado em relação ao começo do texto onde houve a pesquisa
        //Se a palavra não for encontrada a função retorna false
        //Neste exemplo, se não retornar false o if avalia para true e o código dentro dos {colchetes} é executado
        //Caso contrário o código não roda
        //Por exemplo, se você quer checar se o navegador é o Internet Explorer você pode fazer deste modo abaixo

        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
            echo 'You are using Internet Explorer <br />';
        } else {
            echo 'You are not using Internet Explorer';
        }
        */
        /*
        //Abaixo coloco as letras para maiusculas em PHP

        $str = "Mary Had A Little Lamb and She LOVED It So";
        $str = strtoupper($str);
        print $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
        */
        /*

        //Abaixo, conto quantas letras a string possui, que no caso do meu nome, é 6

        $tamanho = 'rafael';
        echo strlen($tamanho);
        */
        ?>

        <!--
            
        //Abaixo uso o mesmo comando do inicio, porém, ao invés de usar a declaração echo do PHP para imprimir a saída dos dados,
        //saio do modo do PHP e uso o HTML normal
        //O importante a notar aqui é que a lógica do script continua intacta
        //Somente um dos blocos HTML será enviado dependendo do resultado da chamada à função strpos()
        //Em outras palavras, depende se a palavra MSIE for encontrada ou não
        -->
        <?php
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
            ?>
            <h3>strpos() must have returned non-false</h3>
            <p>You are using Internet Explorer</p>
            <?php
            } else {
            ?>
            <h3>strpos() must have returned false</h3>
            <p>You are not using Internet Explorer</p>
            <?php
            }
        ?>
</body>
</html>