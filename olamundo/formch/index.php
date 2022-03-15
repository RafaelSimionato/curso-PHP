<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Rafael Simionato">
    <meta name="description" content="Formulário, Caveira Hippie"/>
    <meta name="keywords" content="Formulário, Caveira Hippie"/>
    <title>Formulário para cadastro - Caveira Hippie</title>
</head>
<body>
    <?php
    if (isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    ?>
    <form method="POST" action="processa.php">
        <h1>Cadastro Caveira Hippie</h1>
        <p>
            <label for="Cnome">Nome </label> <br>
            <input type="text" placeholder="Digite aqui " name="Tnome" id="Cnome" size="20" maxlength="20"/>
        </p>
        <p>
            <label for="Csobrenome">Sobrenome </label> <br>
            <input type="text" placeholder="Digite aqui " name="Tsobrenome" id="Csobrenome" size="20" maxlength="20" />
        </p>                       
        <p>
            <label for="Cdate">Data de nascimento </label> <br>
            <input type="date" name="Tnascimento" id="Cdate" />
        </p>            
        <p>
            <label for="Ccpf">CPF </label> <br>
            <input type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" name="Tcpf" id="Ccpf" size="14" maxlength="14">
        </p>            
        <p>
            <label for="Cemail">Email </label> <br>
            <input type="email" id="Cemail" name="Temail" placeholder="Digite seu Email" size="30" maxlength="30" />
        </p>                      
        <p>
            <label for="Ctelefone">Número de telefone </label> <br>
            <input type="number" id="Ctelefone" name="Ttelefone" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 00000-0000" size="11" maxlength="11" />
        </p>
        <p>
            <input type="submit" value="Enviar formulário" name="Tsubmit" id="submit"/>
            <label for="submit"></label>
        </p>
    </form>
</body>
</html>