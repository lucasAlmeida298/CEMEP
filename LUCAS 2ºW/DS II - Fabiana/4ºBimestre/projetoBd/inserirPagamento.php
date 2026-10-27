<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folha de Pagamento</title>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h1>Folha de pagamento</h1>
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
        <tr align="center">
            <td>
                <h4>
                    <?php
                    $funcionario = $_POST['funcionario'];
                    $valorSalMin = $_POST['valorSalMin'];
                    $numHoraTrab = $_POST['numHoraTrab'];
                    $numDependentes = $_POST['numDependentes'];
                    $numHorasExtras = $_POST['numHorasExtras'];

                    $valorHoraTrab = $valorSalMin / 5;
                    $salarioMes = $numHoraTrab * $valorHoraTrab;
                    $valorDependentes = $numDependentes * 32;
                    $valorHoraExtraTrab = $valorHoraTrab * 1.5;
                    $valorRecebHoraExtra = $numHorasExtras * $valorHoraExtraTrab;
                    $salarioBruto = $salarioMes + $valorDependentes + $valorRecebHoraExtra;

                    if ($salarioBruto > 0 && $salarioBruto < 800) {
                        $impostoDeRenda = 0;
                    } else if ($salarioBruto >= 800 && $salarioBruto <= 1500) {
                        $impostoDeRenda = $salarioBruto * 0.10;
                    } else {
                        $impostoDeRenda = $salarioBruto * 0.20;
                    }

                    $salarioLiquido = $salarioBruto - $impostoDeRenda;
                    if ($salarioLiquido <= 700) {
                        $gratificacao = 100;
                    } else {
                        $gratificacao = 50;
                    }
                    $salarioAReceber = $salarioLiquido + $gratificacao;

                    print("O nome do funcionário é: $funcionario <br>");
                    print("O valor do salário mínimo é: R$ $valorSalMin <br>");
                    print("O número de horas trabalhadas é: $numHoraTrab <br>");
                    print("O número de dependentes é: $numDependentes <br>");
                    print("O número de horas extras trabalhadas é: $numHorasExtras <br>");

                    print("----------Salário---------- <br>");

                    print("O valor da hora trabalhada é: R$ $valorHoraTrab <br>");
                    print("O salário do mês é: R$ $salarioMes <br>");
                    print("O valor a ser recebido dependentes é: R$ $valorDependentes <br>");
                    print("O valor da hora extra trabalhada é: R$ $valorHoraExtraTrab <br>");
                    print("O valor recebido por horas extras é: R$ $valorRecebHoraExtra <br>");
                    print("O salário bruto é: R$ $salarioBruto <br>");
                    print("O valor do imposto de renda é: R$ $impostoDeRenda <br>");
                    print("O salário líquido é: R$ $salarioLiquido <br>");
                    print("O valor da gratificação é: R$ $gratificacao <br>");
                    print("O salário a receber é: R$ $salarioAReceber <br><br>");

                    $sqlinsert = "INSERT INTO pagamento (funcionario, valorSalMin, numHoraTrab, numDependentes,
                    numHorasExtras, valorHoraTrab, valorDependentes, valorHoraExtraTrab, valorRecebHoraExtra, 
                    salarioBruto, salarioMes, impostoDeRenda, salarioLiquido, gratificacao, salarioAReceber) 
                    VALUES ('$funcionario', '$valorSalMin', '$numHoraTrab', '$numDependentes', '$numHorasExtras',
                    '$valorHoraTrab','$valorDependentes', '$valorHoraExtraTrab', '$valorRecebHoraExtra', 
                    '$salarioBruto', '$salarioMes', '$impostoDeRenda', '$salarioLiquido', '$gratificacao', '$salarioAReceber')";

                    include 'conexao.php';
                    mysqli_query($conexao, $sqlinsert) or die("Não foi possível inserir");
                    ?>

                    <form action="formPagamento.php" method="post">
                        <input type="submit" value="Voltar para o formulário de pagamento">
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