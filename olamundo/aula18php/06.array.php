<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 - array - foreach associativo</title>
</head>
<body>
    <div>
        <pre>
            <?php
                $v = array ("nome" => "Ana",
                            "idade" => 23,
                            "peso" => 65.5);
                foreach ($v as $k => $c) {
                //Se lê: Cada elemento de vetor (v) com minha chave (k) associada ao conteudo (c), escrevo no tela
                echo "O campo $k possui o conteudo $c <br/>";//Usei este br para pular de linha
                //O foreach é considerado muito mais pratico que a estrutura for para tratamento de vetores

                }
            ?>
        </pre>
    </div>
    
</body>
</html>