<?php
$nome     = $_POST['nome'];
$cpf      = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cidade   = $_POST['cidade'];
$estado   = $_POST['estado'];
$telefone     = $_POST['telefone'];
$email    = $_POST['email'];
$cargo    = $_POST['cargo'];

date_default_timezone_set('America/Sao_Paulo');
$dataAdmissao = date("d/m/Y");

$sqlinsert = "INSERT INTO funcionario (nome, cpf, endereco, cidade, estado, fone, email, cargo, dataAdmissao)
VALUES ('$nome', '$cpf', '$endereco', '$cidade', '$estado', '$telefone', '$email', '$cargo', '$dataAdmissao')";

include 'conexao.php';
mysqli_query($conexao, $sqlinsert) or die ("Não foi possível inserir");

echo "Funcionário cadastrado com sucesso!";
?>