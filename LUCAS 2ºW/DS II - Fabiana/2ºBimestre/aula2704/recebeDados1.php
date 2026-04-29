<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
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
                <h1>Exercício 1</h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3>Paulínia, 27 de Abril de 2026</h3>
            </td>
        </tr>
        <tr>
            <td align="center" class="">
                <?php
                $operacao = $_POST["operacao"];
                $valor1 = $_POST["n1"];
                $valor2 = $_POST["n2"];

                print("Os valores digitados foram " . $valor1 . " e " . $valor2);

                switch ($operacao) {
                    case 1:
                        echo "<br>A operação escolhida foi soma";
                        print("<br>A soma dos seus números é " . ($valor1 + $valor2));
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