<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - wordwrap</title>
</head>
<body>
    <?php
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da funcao wordwrap";
        $r = wordwrap($t, 5, "<br/>\n", false);
        //Esta funcao quebra o codigo html gerado e nao o texto na tela.
        //No caso quebrou em 5 caracteres, porem, posso personalisar...
        //Inserindo um "<br/>" ele ira quebrar visualmente apenas
        //Para quebrar o codigo, e também visualmente, inserimos o "<br/>\n"
        //Tambem é possivel inserir um valor logico. true ou false
        //O false no final do wordwrap, significa que ele ira gerar a quebra por palavra, se, neste caso a palavra for menor do que 5 letras
        //Se colocar true ele vai deixar sempre 5 letras, independente se tiver no meio da palavra, (ele vai cortar)
        echo $r;
    ?>

</body>
</html>