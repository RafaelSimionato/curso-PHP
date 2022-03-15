<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - PHP</title>
</head>
<body>
    <h2>Criar dinamicamente 5 caixas de texto em um formulario.</h2>
    <div>
        <form method="$_GET" action="exercicio02pt2.php">
            <?php
            $c = 1;
            while ($c <= 5) {
                echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
                $c ++;
            } //Não podemos usar aspas duplas dentro de um echo
            ?>
            <input type="submit" value="Enviar" class="botao"/>
        </form>    
    </div>
</body>
</html>