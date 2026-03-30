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

        h2,
        h4,
        h3 {
            font-family: "League Spartan", sans-serif;
            font-size: larger;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        select {
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
            <td>
                <form action="recebe4.php" method="post">
                    <h4>Nome: </h4><input type="text" name="nome" placeholder="Digite seu nome" size="40">

                    <h4>Data de Entrada: </h4><input type="text" name="data" placeholder="Digite a data" size="50">

                    <h4>Plano Escolhido: </h4>
                    <h5><select id="planos" name="planos">
                            <option value="Plano A">Plano A</option>
                            <option value="Plano B">Plano B</option>
                            <option value="Plano C">Plano C</option>
                        </select>
                    </h5>

                    <h4>Valor: </h4><input type="text" name="valor" placeholder="Digite o Valor" size="10"><br><br>

                    <input type="submit" value="Calcular valor do Plano">
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