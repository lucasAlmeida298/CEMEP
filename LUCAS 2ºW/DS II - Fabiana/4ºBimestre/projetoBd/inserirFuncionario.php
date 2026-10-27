<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Funcionário</title>
</head>

<body>
    <table align="center" border="1" width="50%">
        <tr>
            <td align="center">
                <h1>Dados do Funcionário</h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>
                    <?php
                    include "funcaoData.php";
                    dataAtual();
                    ?>
                </h3>
            </td>
        </tr>
        <tr>
            <td>
                <h4>
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

                    $sqlinsert = "INSERT INTO funcionario (nome, cpf, endereco, cidade, estado, fone, email, cargo, 
                    dataAdmissao)
                    VALUES ('$nome', '$cpf', '$endereco', '$cidade', '$estado', '$telefone', '$email', '$cargo', '$dataAdmissao')";

                    include 'conexao.php';
                    mysqli_query($conexao, $sqlinsert) or die("Não foi possível inserir");

                    echo "Funcionário cadastrado com sucesso! <br>";
                    print("Nome do funcionário: $nome <br>");
                    print("CPF: $cpf <br>");
                    print("Endereço: $endereco <br>");
                    print("Cidade: $cidade <br>");
                    print("Estado: $estado <br>");
                    print("Telefone: $telefone <br>");
                    print("Email: $email <br>");
                    print("Cargo: $cargo <br>");
                    print("Data de Admissão: $dataAdmissao <br><br>");
                    ?>
                    <form action="formFuncionario.php" method="post">
                        <input type="submit" value="Voltar para o formulário de cadastro de funcionário">
                    </form>
                </h4>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>
                    <?php
                    include "funcaoHora.php";
                    horaAtual();
                    ?>
                </h3>
            </td>
        </tr>
    </table>
</body>

</html>