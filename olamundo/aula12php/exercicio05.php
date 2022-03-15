<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05 PHP - Imprimir dados de formulario</title>
</head>
<body>
    <div>
        Hi <?php echo htmlspecialchars($_POST['name']);?>
        you are <?php echo (int)$_POST['age'];?> years old
    </div>
    <a href="exercicio05.html">Voltar</a>
</body>
</html>