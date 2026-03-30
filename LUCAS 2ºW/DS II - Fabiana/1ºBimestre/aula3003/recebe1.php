<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Salário</title>
    <style>
        body {
            background-color: #f5f1e5;

        }

        h3 {
            font-family: "Urbanist", sans-serif;
            font-size: larger;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        .php {
            font-family: "Urbanist", sans-serif;
            font-size: larger;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h3>Exercício 1 Aula - 26/03/2026</h3>
            </td>
        </tr>
        <tr>
            <td class="php">
                <?php
                $nome = $_POST["nome"];
                $salarioAtual = $_POST["salario"];

                print("Funcionário " . $nome . "<br>");
                print("Seu salário atual é R$" . $salarioAtual . "<br>");
                if ($salarioAtual <= 1000) {
                    $salarioReajustado = $salarioAtual * 1.50;
                    print("Seu salário reajustado é R$" . $salarioReajustado . "<br>");
                    echo 'reajuste de 50%';
                } else {
                    $salarioReajustado = $salarioAtual * 1.30;
                    print("Seu salário reajustado é R$" . $salarioReajustado . "<br>");
                    echo 'reajuste de 30%';
                }
                ?>
                </form>

            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>Programa desenvolvido por Lucas</h3>
            </td>
        </tr>
    </table>
</body>

</html>