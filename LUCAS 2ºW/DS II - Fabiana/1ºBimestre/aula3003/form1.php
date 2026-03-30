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

        h2,
        h4,
        h3 {
            font-family: "Urbanist", sans-serif;
            font-size: larger;
            margin-bottom: 5px;
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
            <td>
                <form action="recebe1.php" method="post">
                    <h4>Nome: </h4><input type="text" name="nome" placeholder="Digite seu nome" size="40">

                    <h4>Salário: </h4><input type="text" name="salario" placeholder="Digite seu salário" size="50"><br><br>

                    <input type="submit" value="Calcular Salário">
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