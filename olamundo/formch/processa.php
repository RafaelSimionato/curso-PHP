<?php
session_start(); //sempre tem que ser o primeiro elemento da página
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'Tnome', FILTER_SANITIZE_STRING); //Método para receber os dados do usuário
$sobrenome = filter_input(INPUT_POST, 'Tsobrenome', FILTER_SANITIZE_STRING); //FILTER limpa os dados da variável que vem do formulário
$nascimento = filter_input(INPUT_POST, 'Tnascimento', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'Tcpf', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'Temail', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'Ttelefone', FILTER_SANITIZE_NUMBER_INT);
/*
echo "Nome: $nome <br>";
echo "Sobrenome: $sobrenome <br>";
echo "Nascimento: $nascimento <br>";
echo "CPF: $cpf <br>";
echo "Email: $email <br>";
echo "Telefone: $telefone <br>";
*/
$result_usuarios = "INSERT INTO usuarios(Tnome, Tsobrenome, Tnascimento, Tcpf, Temail, Ttelefone, created) VALUES ('$nome', '$sobrenome', '$nascimento', '$cpf', '$email', '$telefone', NOW())";
$resultado_usuarios = mysqli_query($conn, $result_usuarios); //Este comando executa

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado, verifique seus dados</p>";
    header("Location: index.php");
}

?>