<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 Formularios PHP idade</title>
</head>
<body>
    <div>
        <?php
        //$nome = $_GET["nome"]; opcao 01 apresenta erro no php, usar conforme abaixo
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
        //O isset informa que foi configurado e ou passado como parametro e nao dara erro
        //Ou seja, se o nome que vem da URL foi configurado, usamos o operador ternario (?) que esta acima,
        //colocaremos o valor que vem da URL dentro da variavel nome
        //E caso contrario, ( : ) coloquei [nao informado]
        //Em resumo, a variavel nome vai receber o nome que vem da URL, ou, nao informado, que é uma string pre definida
        //Isso vai depender se o nome foi configurado. Esta e a funcao do isset, e vale para todos os itens
        //Estas sao sulucoes paleativas
        //$ano = $_GET["ano"]; mesma coisa que a linha acima
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        //$sexo = $_GET["sexo"];
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
        //Esta solucao acima é paliativa, apenas para não causar erros
        //$idade = 2021 - $ano; Esta opcao funcionaria apenas no ano de 2021, por isso, farei conforme abaixo
        $idade = date("Y") - $ano;//y minusculo mostra apenas 2 numeros
        echo "$nome é $sexo e tem $idade anos.";        
        ?>
        <a href="02exercicio.html">Voltar</a>
    </div>    
</body>
</html>