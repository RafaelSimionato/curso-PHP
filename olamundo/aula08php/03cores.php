<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    //Este codigo php esta dentro do head por conta do estilo local e ou style
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Formularios PHP - Cores</title>
    <style>
        span.texto {
            font-size: <?php echo $tam;?>; /*um ; é do php e o outro do css*/
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
        echo "<span class='texto'>$txt</span>";        
        ?>
    </div>    
</body>
</html>