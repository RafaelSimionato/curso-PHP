<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 Exercicio - PHP</title>
</head>
<body>
    <?php
        include "funcoes.php";
        echo "<h1>Testando novas funcoes</h1>";
        ola();
        mostraValor(4);
        echo "<h2>Finalizando Programa...</h2>";
        /*O comando 'include' permite incluir outros arquivos com tags HTML e ou PHP
        Também é possível usar o comando 'require' que faz basicamente a mesma coisa, só é possivél notar diferença,
        quando ouver algum problema com o arquivo a ser transferido.
        Enquanto o 'include' continua tentando buscar o arquivo mesmo se estiver corrompido ou não existir
        o comando 'require' por ser 'obrigatório' para com sua carga exatamente ali... E não vemos resultado algum.*/
        
        /*Além dos 2 exemplos acima, temos as opções de comando 'include_once e também require_once 
        A diferença basica é que usando somente o 'include' ou 'require', podemos repedir o comando varias vezes no script
        E utilizando o 'include_once' ou 'require_once', caso já tenha carregado uma vez, ele não vai carregar novamente 
        Ou seja, se eu já carreguei, não precisa carregar outra vez, do contrário, carregue pela primeira vez */
    ?>  
</body>
</html>