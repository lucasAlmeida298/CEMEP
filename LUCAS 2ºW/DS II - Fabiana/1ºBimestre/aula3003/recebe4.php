<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Planos</title>
    <style>
        body {
            background-color: #f5f1e5;

        }

        h3 {
            font-family: "League Spartan", sans-serif;
            font-size: larger;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        .php {
            font-family: "League Spartan", sans-serif;
            font-size: larger;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h3>Exercício 4 Aula - 26/03/2026</h3>
            </td>
        </tr>
        <tr>
            <td class="php">
                <?php
                $nome = $_POST["nome"];
                $valor = $_POST["valor"];
                $plano = $_POST["planos"];

                print("Seu nome é " . $nome . "<br>");
                print("O valor do plano é R$ " . $valor . "<br>");
                if ($plano == 'Plano A') {
                    echo "Plano A – Plano Anti-stress";
                    $valorTotal = $valor * 1.06;
                } elseif ($plano == 'Plano B') {
                    echo "Plano B – Plano Reeducação";
                    $valorTotal = $valor * 1.08;
                } else {
                    echo "Plano C – Plano Completo";
                    $valorTotal = $valor * 1.12;
                }
                print("<br>O valor total do plano é R$ " . $valorTotal);
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