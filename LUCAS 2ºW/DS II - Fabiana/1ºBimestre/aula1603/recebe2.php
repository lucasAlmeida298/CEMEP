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
                <h3>Exercício 2</h3>
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
                $totalEleitores = $_POST["votoMunicipio"];
                $votoBranco = $_POST["votoBranco"];
                $votoNulo = $_POST["votoNulo"];
                $votoValido = $_POST["votoValido"];
                $percentBranco = ($votoBranco / $totalEleitores) * 100;
                $percentNulo = ($votoNulo / $totalEleitores) * 100;
                $percentValido = ($votoValido / $totalEleitores) * 100;

                print("Número total de eleitores: " . $totalEleitores);
                print("<br>Número de votos válidos: " . $votoValido);
                print("<br>Número de votos brancos: " . $votoBranco);
                print("<br>Número de votos nulos: " . $votoNulo);
                print("<br>Porcentagem de votos válidos: ". $percentValido ."%");
                print("<br>Porcentagem de votos brancos: ". $percentBranco ."%");
                print("<br>Porcentagem de votos nulos: ". $percentNulo ."%");
                
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