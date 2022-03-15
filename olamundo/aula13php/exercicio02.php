<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - PHP - FOR</title>
</head>
<body>
    <div>
        <p>Exibir a tabuada de um numero escolhido pelo usuario, de 01 ate 10</p>
        <form action="exercicio02tabuada.php">
            <select name="num" id="num">
                <!--Para nao repetir 10 vezes os options, usarei o script abaixo-->
                <?php
                for ($c = 1; $c <= 12; $c++) {
                    echo "<option>$c</option>";
                }
                ?>
            </select>
            <input type="submit" value="Tabuada"/>
        </form>
    </div>
</body>
</html>