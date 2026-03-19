<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Cálculo água</title>
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
            <td>
                <form action="recebe4.php" method="post">
                    <h4>Quantos litros de água são consumidos por dia: </h4><input type="text" name="litroConsumido" placeholder="Litros consumidos" size="30">
                    <h4>O preço por litro de água: </h4><input type="text" name="precoLitro" placeholder="Digite aqui o preço do litro da água" size="30"><br><br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>
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