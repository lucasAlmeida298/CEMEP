<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete Quero Mais</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">

    <style>
        h1,
        h3,
        h4 {
            font-family: "Ubuntu Sans", sans-serif;
        }

        .php {
            font-family: "Ubuntu Sans", sans-serif;
        }
    </style>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h1>Exercício 4</h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>Paulínia, 27 de Abril de 2026</h3>
            </td>
        </tr>
        <tr>
            <td align="center" class="php">
                <?php
                $codigo = $_POST["codigo"];
                $quantidade = $_POST["quantidade"];



                switch ($codigo) {
                    case 100:
                        print("Valor a pagar: R$ " . 10 * $quantidade);
                        print("<br>Taxa de serviço: R$ " . (10 * $quantidade) * 0.10);
                        print("<br>Valor a pagar com taxa de serviço: R$ " . (10 * $quantidade) * 1.10);
                        echo "<br>Código do produto: 100";
                        echo "<br>Valor unitário: R$ 10,00";
                        echo "<br>Produto adquirido: Cachorro Quente";
                        break;
                    case 101:
                        print("Valor a pagar: R$ " . 12 * $quantidade);
                        print("<br>Taxa de serviço: R$ " . (12 * $quantidade) * 0.10);
                        print("<br>Valor a pagar com taxa de serviço: R$ " . (12 * $quantidade) * 1.10);
                        echo "<br>Código do produto: 101";
                        echo "<br>Valor unitário: R$ 12,00";
                        echo "<br>Produto adquirido: Bauru Simples";
                        break;
                    case 102:
                        print("Valor a pagar: R$ " . 14 * $quantidade);
                        print("<br>Taxa de serviço: R$ " . (14 * $quantidade) * 0.10);
                        print("<br>Valor a pagar com taxa de serviço: R$ " . (14 * $quantidade) * 1.10);
                        echo "<br>Código do produto: 102";
                        echo "<br>Valor unitário: R$ 14,00";
                        echo "<br>Produto adquirido: Bauru com Ovo";
                        break;
                    case 103:
                        print("Valor a pagar: R$ " . 15.50 * $quantidade);
                        print("<br>Taxa de serviço: R$ " . (15.50 * $quantidade) * 0.10);
                        print("<br>Valor a pagar com taxa de serviço: R$ " . (15.50 * $quantidade) * 1.10);
                        echo "<br>Código do produto: 103";
                        echo "<br>Valor unitário: R$ 15,50";
                        echo "<br>Produto adquirido: Hamburguer";
                        break;
                    case 104:
                        print("Valor a pagar: R$ " . 17.80 * $quantidade);
                        print("<br>Taxa de serviço: R$ " . (17.80 * $quantidade) * 0.10);
                        print("<br>Valor a pagar com taxa de serviço: R$ " . (17.80 * $quantidade) * 1.10);
                        echo "<br>Código do produto: 104";
                        echo "<br>Valor unitário: R$ 17,80";
                        echo "<br>Produto adquirido: Chesseburguer";
                        break;
                    case 105:
                        print("Valor a pagar: R$ " . 5 * $quantidade);
                        print("<br>Taxa de serviço: R$ " . (5 * $quantidade) * 0.10);
                        print("<br>Valor a pagar com taxa de serviço: R$ " . (5 * $quantidade) * 1.10);
                        echo "<br>Código do produto: 105";
                        echo "<br>Valor unitário: R$ 5,00";
                        echo "<br>Produto adquirido: Refrigerante";
                        break;
                }
                ?>

            </td>
        <tr>
            <td align="center">
                <h3>Desenvolvido por Lucas</h3>
            </td>
        </tr>
        </tr>
</body>

</html>