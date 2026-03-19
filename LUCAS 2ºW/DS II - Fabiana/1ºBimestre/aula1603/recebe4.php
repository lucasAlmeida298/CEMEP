<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Cálculo Combustível</title>
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
                <h3>Exercício 4</h3>
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
                    $litroConsumido = $_POST["litroConsumido"];
                    $precoLitro = $_POST["precoLitro"];
                    $consumo = $litroConsumido*30;
                    $valor = $consumo*$precoLitro;

                    print("São consumidos ". $litroConsumido ." litros de água por dia");
                    print ("<br>O preço do litro da água é de ". $precoLitro ."R$");
                    print("<br>O consumo mensal de água na empresa é de ". $consumo ." litros");
                    print("<br>O valor mensal da conta é de ". $valor ."R$");



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