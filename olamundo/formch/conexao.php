<?php
$servidor = "localhost"; //Procurar nome correto do servidor
$usuario = "root";
$senha = "";
$dbname = "olamundo/formch";

//Criar conexao

$conn = mysqli_connect ($servidor, $usuario, $senha, $dbname);

if($mysqli->connect_error)
    echo "Falha na conexão: (".$mysqli->connect_error.") ".$mysqli->connect_error;

?>