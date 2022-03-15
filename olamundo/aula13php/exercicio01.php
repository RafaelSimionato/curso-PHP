<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - PHP - FOR</title>
</head>
<body>
    <div>
        <p>Mostrar contagens utilizando a estrutura for</p>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "$i ";
            }
            echo "<br/>";
            for ($i = 10; $i >= 1; $i--) {
                echo "$i ";
            }
            echo "<br/>";
            for ($i = 0; $i <= 50; $i +=5) {
                echo "$i ";
            }
            echo "<br/>";
            for ($i = 20; $i >= 0; $i-=2) {
                echo "$i ";
            }
        ?>
    </div>
</body>
</html>