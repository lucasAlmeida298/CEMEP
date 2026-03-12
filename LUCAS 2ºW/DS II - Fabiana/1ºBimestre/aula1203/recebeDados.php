<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Lanchonete Almeida</title>
    <style>
        body {
            background-color: #f5f1e5;

        }
        .resultado {
            margin-top: 2px;
            margin-bottom: 2px;
            font-family: "Montserrat";
            text-align: center;
        }

        h2,
        h4 {
            font-family: "Montserrat";
            margin-bottom: 5px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h2>Exercício</h2>
            </td>
        </tr>
        <tr>
            <td>
                <p class="resultado">
                <?php
                $nome = $_POST["nomeCliente"];
                $nomeLanche = $_POST["nomeLanche"];
                $precoLanche = $_POST["precoLanche"];
                $quantidade = $_POST["quantidade"];
                $precoTotal = $precoLanche * $quantidade;

                print("Nome: " . $nome);
                print("<br>Nome do lanche: " . $nomeLanche);
                print("<br>Preço do lanche: " . $precoLanche);
                print("<br>Quantidade comprada: " . $quantidade);
                print("<br>Valor total a pagar: " . $precoTotal . "$");
                ?>
                </class>
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