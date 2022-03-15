<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24 - str_repeat</title>
</head>
<body>
    <?php
        $txt = str_repeat("PHP", 5);
        print ("O texto gerado foi $txt");
        //Também posso escrever algo do tipo:
        print (str_repeat("-", 50));
        //O string repeat é muito útil quando queremos repetir uma string varias vezes, sem precisar usar estruturas de repetição
    ?>
    
</body>
</html>