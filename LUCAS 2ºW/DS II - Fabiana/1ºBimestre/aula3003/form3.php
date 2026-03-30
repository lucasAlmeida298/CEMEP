<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100..900&display=swap" rel="stylesheet">
    <title>Notas</title>
    <style>
        body {
            background-color: #f5f1e5;

        }

        h2,
        h4,
        h3 {
            font-family: "Encode Sans", sans-serif;
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
                <h3>Exercício 3 Aula - 26/03/2026</h3>
            </td>
        </tr>
        <tr>
            <td>
                <form action="recebe3.php" method="post">
                    <h4>Nome: </h4><input type="text" name="nome" placeholder="Digite seu nome" size="40">

                    <h4>Nota laboratório: </h4><input type="text" name="notaLab" placeholder="Digite sua nota de laboratório" size="50">

                    <h4>Nota avaliação semestral: </h4><input type="text" name="notaAv" placeholder="Digite sua nota da avaliação semestral" size="50">

                    <h4>Nota exame final: </h4><input type="text" name="notaEx" placeholder="Digite sua nota do exame final" size="50"><br><br>

                    <input type="submit" value="Calcular Nota">
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