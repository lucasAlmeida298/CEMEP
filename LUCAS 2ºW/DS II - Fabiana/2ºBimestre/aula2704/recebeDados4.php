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
                        print("Valor a pagar: R$ ". 10*$quantidade);
                        print("<br>Taxa de serviço: R$ " . (10*$quantidade)*0.10);
                        print ("<br>Valor a pagar com taxa de serviço: R$ ". (10*$quantidade)*1.10);
                        echo "<br>Código do produto: 100";
                        echo "<br>Valor unitário: R$ 10,00";
                        echo "<br>Produto adquirido: Cachorro Quente";
                        break;
                    case 2:
                        echo "<br>A operação escolhida foi subtração";
                        print("<br>A subtração dos seus números é " . ($valor1 - $valor2));
                        break;
                    case 3:
                        echo "<br>A operação escolhida foi divisão";
                        print("<br>A divisão dos seus números é " . ($valor1 / $valor2));
                        break;
                    case 4:
                        echo "<br>A operação escolhida foi multiplicação";
                        print("<br>A multiplicação dos seus números é " . ($valor1 * $valor2));
                        break;
                    default:
                        echo "<br>Dado inválido";
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