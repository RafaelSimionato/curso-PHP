<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento</title>
</head>
<body>
<div>
<?php
    $atual = $_GET["aa"]; //Essa linha vai pegar o numero que eu inserir na URL
    echo "O ano atual e $atual e o ano anterior e " . --$atual;
?>
</div>
</body>
</html>