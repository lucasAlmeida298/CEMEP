<?php
$local='localhost';
$usuario='root';
$senha='';
$banco='bdTrabalhoW';
$conexao=new mysqli ($local,$usuario,$senha,$banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
} else {
    print("");
}
?>