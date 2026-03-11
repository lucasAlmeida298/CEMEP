<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h1>Exercício 1</h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h2>Aula DS - 23/02/2026</h2>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h4 >
                    <?php
                    //entrada php
                    $nome = "Lucas";
                    $salario = "3000";

                    //processamento php
                    $salarioReajustado = $salario * 1.3;
                    $imposto = $salarioReajustado * 0.05;

                    //saída php
                    print("O nome do funcionário é: $nome <br>");
                    print("O salário do " . $nome . " é: $salario <br>");
                    print("O salário reajustado do " . $nome . " é: $salarioReajustado <br>");
                    print("O valor do imposto do " . $nome . " é: $imposto");
                    ?>
                </h4>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>programa desenvolvido por Lucas</h3>
            </td>
        </tr>

    </table>
</body>

</html>