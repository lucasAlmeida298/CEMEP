<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Nadador</title>
    <style>
        body {
            background-color: #f5f1e5;

        }

        h3 {
            font-family: "Raleway", sans-serif;
            font-size: larger;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        .php {
            font-family: "Raleway", sans-serif;
            font-size: larger;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <table border="1" align="center" width="50%">
        <tr>
            <td align="center">
                <h3>Exercício 2 Aula - 26/03/2026</h3>
            </td>
        </tr>
        <tr>
            <td class="php">
                <?php
                $nome = $_POST["nome"];
                $idade = $_POST["idade"];

                print("Nadador " . $nome . "<br>");
                print("Idade " . $idade . "<br>");
                if ($idade <= 7 && $idade >=5) {
                    echo "Categoria infantil A";
                } else if ($idade <=10 && $idade >= 8) {
                    echo "Categoria infantil B";
                } else if ($idade <=13 && $idade >= 11) {
                    echo "Categoria juvenil A";
                } else if ($idade <=18 && $idade >= 14) {
                    echo "Categoria juvenil B";
                } else if ($idade <= 40 && $idade > 18) {
                    echo "Categoria sênior";
                } else {
                    echo "Não pode competir!";
                }
                ?>
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