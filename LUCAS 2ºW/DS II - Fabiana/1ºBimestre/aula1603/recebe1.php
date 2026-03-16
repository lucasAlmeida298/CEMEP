<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Compras</title>
    <style>
        body {
            background-color: #f5f1e5;

        }

        h2,
        h4,
        h3 {
            font-family: "Montserrat";
            margin-bottom: 5px;
            margin-top: 5px;
        }

        .php {
            font-family: "Montserrat";
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h3>Exercício 1</h3>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h2>DS - 16/03/2026</h2>
            </td>
        </tr>
        <tr>
            <td class="php">
                <?php
                //Declaração das variáveis//
                $nomeCliente = $_POST["nomeCliente"];
                $data = $_POST["data"];
                $vendedor = $_POST["vendedor"];
                $valor1 = $_POST["valor1"];
                $valor2 = $_POST["valor2"];
                $valor3 = $_POST["valor3"];
                $valor4 = $_POST["valor4"];
                $totalVista = $valor1 + $valor2;
                $totalPrazo = $valor3 + $valor4;
                $totalDesconto = $totalVista * 0.85;
                $totalJuro = $totalPrazo * 1.10;

                print("Nome do cliente: ". $nomeCliente);
                print ("<br>Data: ". $data);
                print ("<br>Vendedor: ". $vendedor);
                print ("<br><br>Valor da 1ª compra a vista: ". $valor1 ."R$");
                print ("<br>Valor da 2ª compra a vista: ". $valor2 ."R$");
                print ("<br>Valor da 1ª compra a prazo: ". $valor3 ."R$");
                print ("<br>Valor da 2ª compra a prazo: ". $valor4 ."R$");
                print ("<br><br>Valor total das compras a vista: ". $totalVista. "R$");
                print ("<br>Valor total das compras a prazo: ". $totalPrazo) ."R$";
                print ("<br>Valor total das compras a vista com 15% de desconto: ". $totalDesconto ."R$");
                print ("<br>Valor total das compras a prazo com juros de 10%: ". $totalJuro ."R$");

                ?>
            </td>
        </tr>
        <tr>
            <td>
                <h2 align="center">Desenvolvido por Lucas</h2>
            </td>
        </tr>
    </table>
</body>

</html>